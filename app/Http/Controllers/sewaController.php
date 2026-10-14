<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sewaController extends Controller
{
    
     public function index()
    {
        // Mengambil data buku beserta relasi sewa motor
        $bukus = Buku::with('Kendraaan')->get();

        // Mengembalikan tampilan ke file resources/views/sewa/index.blade.php
        return view('kendraaan.index', compact('kendraan'));
    }
}


