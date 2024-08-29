<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        dd($kategori);
        return view('backend.kategori.index',['kategori' => $kategori]);
    }
}
