<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 100;

        if (strlen($katakunci)) {
            $data = user::where('nama_user', 'like', "%" . $katakunci . "%")
                ->orWhere('id_user', 'like', "%" . $katakunci . "%")
                ->orWhere('email', 'like', "%" . $katakunci . "%")
                ->paginate($jumlahbaris);
        } else {
            $data = user::orderBy('id_user', 'desc')->paginate($jumlahbaris);
        }

        return view('user.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_user' => 'required|string|max:255',
            'email' => 'required|email|unique:user',
            'password' => 'nullable|min:6',
        ]);

        $data = [
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];

        user::create($data);

        return redirect()->route('user.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_user)
    {
        $data = user::where('id_user',$id_user)->first();
        return view('user.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_user)
    {
        $request->validate([
            'nama_user' => 'required',
            'email' => 'required',
            'password' => 'nullable|min:6',
        ]);

        $data = [
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];

        User::where('id_user', $id_user)->update($data);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_user)
    {
        user::where('id_user', $id_user)->delete();
        return redirect()->to('user');
    }
}