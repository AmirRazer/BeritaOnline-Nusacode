<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tag = Tag::all();     
        return view('backend.tag.index',['tag' => $tag]);
    }
    public function create()
    {
        return view('backend.tag.create');
    }
     public function store(Request $request)
    {
     
        $request->validate([
            'nama' => 'required'
        ]);
        $save_data = new Tag();
        $save_data->nama = $request->nama;
        $save_data->created_at = date('Y-m-d');
        $save_data->updated_at = date('Y-m-d');
        $save_data->save();
       
        return redirect()->route('tag-index')->with('success','Data berhasil disimpan');
    }
    public function edit($id)
    {
         $data = Tag::where('id', $id)->first();
       
        return view('backend.tag.edit', ['data' => $data]);
    }

     public function update(Request $request, $id)
    {
           
        $request->validate([
            'nama' => 'required',
           
        ]);
        $data = Tag::where('id', $id)->first();
        $data->nama = $request->nama;
        $data->updated_at = date('Y-m-d');
        $data->save();
        
        return redirect()->route('tag-index', $id)->with('success', 'Tag berhasil diperbarui.');
    }
      public function destroy($id)
    {
        $data = Tag::where('id', $id)->first();
        $data->delete();
        return redirect()->route('tag-index')->with('success', 'Tag berhasil dihapus.');
    }
}
