<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class registerController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

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

        return redirect()->route('login');
    }
}