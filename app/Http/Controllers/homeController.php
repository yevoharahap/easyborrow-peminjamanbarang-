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
            'peminjaman'=> peminjaman::count(),
            'barang'=>barang::count(),
            'user'=>user::count(),
            'pinjams'=>peminjaman::all(),
            'start'=> 1

        ]);
    }
}