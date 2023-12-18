<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjaman;
use App\Models\barang;
use App\Models\user;

class homeController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard',[
            'peminjaman'=> Peminjaman::count(),
            'barang'=>barang::count(),
            'user'=>User::count(),
            'pinjams'=>Peminjaman::all(),
            'start'=> 1

        ]);
    }
}