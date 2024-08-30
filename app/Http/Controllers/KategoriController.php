<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();     
        return view('backend.kategori.index',['kategori' => $kategori]);
    }
    public function create()
    {
        return view('backend.kategori.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'diskripsi' => 'required'
        ]);
        $save_data = new Kategori();
        $save_data->nama = $request->nama;
        $save_data->diskripsi = $request->diskripsi;
        $save_data->created_at = date('Y-m-d');
        $save_data->updated_at = date('Y-m-d');
        $save_data->save();
       
        return redirect()->route('kategori-index')->with('success','Data berhasil disimpan');
    }
    public function edit($id)
    {
         $data = Kategori::where('id', $id)->first();
        return view('backend.kategori.edit', ['data' => $data]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'diskripsi' => 'required'
        ]);
        $data = Kategori::where('id', $id)->first();
        $data->nama = $request->nama;
        $data->diskripsi = $request->diskripsi;
        $data->updated_at = date('Y-m-d');
        $data->save();
        
        return redirect()->route('kategori-index')->with('success', 'Kategori berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $data = Kategori::where('id', $id)->first();
        $data->delete();
        return redirect()->route('kategori-index')->with('success', 'Kategori berhasil dihapus.');
    }
}
