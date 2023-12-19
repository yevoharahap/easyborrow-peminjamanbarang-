<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use App\Models\barang;
use App\Models\user;
use Illuminate\Http\Request;

class peminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index(Request $request)
        {
            $katakunci = $request->katakunci;
            $jumlahbaris = 100;

            if (strlen($katakunci)) {
                $data = peminjaman::where('id_peminjaman', 'like', "%" . $katakunci . "%")
                    ->orWhereHas('user', function ($query) use ($katakunci) {
                        $query->where('nama_user', 'like', "%" . $katakunci . "%");
                    })
                    ->orWhereHas('barang', function ($query) use ($katakunci) {
                        $query->where('nama_barang', 'like', "%" . $katakunci . "%");
                    })
                    ->paginate($jumlahbaris);
            } else {
                $data = peminjaman::orderBy('id_peminjaman', 'desc')->paginate($jumlahbaris);
            }

            return view('peminjaman.index')->with('data', $data);
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $user = user::all();
        $barang = barang::all();

        return view('peminjaman.create', compact('user','barang'));
    }

    /**
     * Store a newly created resource in storage.
     */

        public function store(Request $request)
        {

            $request->validate([
                'id_user' => 'required',
                'id_barang' => 'required',
                'tanggal_peminjaman' => 'required|date',
                'tanggal_pengembalian' => 'required|date|after:tanggal_peminjaman',

            ]);

            $data = [
                'id_user' => $request->id_user,
                'id_barang' => $request->id_barang,
                'tanggal_peminjaman' => $request->tanggal_peminjaman,
                'tanggal_pengembalian' => $request->tanggal_pengembalian,
                'status_barang' => 'Peminjaman'
            ];



            peminjaman::create($data);
            $barang = barang::find($request->id_barang);
            $barang->tersedia= 0 ;
            $id = $barang->id_barang;
            barang::where('id_barang', $id)->Update(['tersedia'=>$barang->tersedia]);
            return redirect()->to('peminjaman');


        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_peminjaman)
    {
        $data = peminjaman::where('id_peminjaman', $id_peminjaman)->first();
        $users = user::all(); // Assuming you have a User model
        $barang = barang::all(); // Assuming you have a Barang model

        return view('peminjaman.edit', compact('data', 'users', 'barang'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_peminjaman)
    {
        $request->validate([
            'id_user' => 'required',
            'id_barang' => 'required',
            'tanggal_peminjaman' => 'required|date',
            'tanggal_pengembalian' => 'required|date|after:tanggal_peminjaman',
            'status_barang' => 'dipinjam',
        ]);

        $data = [
            'id_user' => $request->id_user,
            'id_barang' => $request->id_barang,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
        ];

        peminjaman::where('id_peminjaman', $id_peminjaman)->update($data);
        return redirect()->route('peminjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_peminjaman)
    {
        peminjaman::where('id_peminjaman', $id_peminjaman)->delete();
        return redirect()->to('peminjaman');
    }

    public function pengembalian(string $id_peminjaman)
    {
        $peminjaman = peminjaman::where('id_peminjaman', $id_peminjaman) ->first();
        $peminjaman->status_peminjaman = "Dikembalikan";
        // dd($peminjaman);
        peminjaman::where('id_peminjaman', $peminjaman->id_peminjaman)->update(['Status_peminjaman'=>$peminjaman->status_peminjaman]);
        $barang = barang::where('id_barang', $peminjaman->id_barang)->first();
        $barang->tersedia = 1;
        // dd($barang);
        barang::where('id_barang', $barang->id_barang)->update(['tersedia'=>$barang->tersedia]);
        return redirect()->route('peminjaman.index');
    }
}