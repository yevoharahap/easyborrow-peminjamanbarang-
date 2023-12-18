<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index(Request $request)
        {
            $katakunci = $request->katakunci;
            $jumlahbaris = 100;

            if (strlen($katakunci)) {
                $data = Barang::where('nama_barang', 'like', "%" . $katakunci . "%")
                    ->orWhere('id_barang', 'like', "%" . $katakunci . "%")
                    ->orWhere('kondisi', 'like', "%" . $katakunci . "%")
                    ->paginate($jumlahbaris);
            } else {
                $data = Barang::orderBy('id_barang', 'desc')->paginate($jumlahbaris);
            }

            return view('barang.index')->with('data', $data);
        }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kondisi' => 'required',
        ]);

        $data = [
            'nama_barang' => $request->nama_barang,
            'kondisi' => $request->kondisi,
        ];

        Barang::create($data);
        return redirect()->to('barang');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_barang)
    {
        $data = barang::where('id_barang',$id_barang)->first();
        return view('barang.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_barang)
    {
        $request->validate([
            'nama_barang' => 'required',
            'kondisi' => 'required',
        ]);

        $data = [
            'nama_barang' => $request->nama_barang,
            'kondisi' => $request->kondisi,
        ];

        barang::where('id_barang', $id_barang)->update($data);

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_barang)
    {
        barang::where('id_barang', $id_barang)->delete();
        return redirect()->to('barang');
    }





}
