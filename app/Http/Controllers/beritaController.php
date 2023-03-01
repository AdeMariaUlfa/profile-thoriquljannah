<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class beritaController extends Controller
{
    public function index()
    {
        $data = berita::offset(0)->limit(3)->get();
        return view('welcome', compact('data'));
    }
    public function dashboard()
    {
        $data = berita::all();
        return view('admin.dashboard', compact('data'));
    }
    public function berita()
    {
        $data = berita::paginate(9);
        return view('berita', compact('data'));
    }

    public function inputBerita(Request $request)
    {
        $user_id = Auth::user()->id;
        $fileName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('uploads'), $fileName);

        $data = [
            'user_id' => $user_id,
            'judul' => $request->input('judul'),
            'img' => $fileName,
            'konten' => $request->input('konten'),
        ];
        berita::create($data);
        return redirect()->back();
    }
    public function editBerita($id, Request $request)
    {

        $data = berita::find($id);
        if ($request->img != null) {
            $fileName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('uploads'), $fileName);
            $data->img = $fileName;
        }

        $data->judul = $request->judul;
        $data->konten = $request->konten;
        $data->update();
        return redirect()->back();
    }
    public function deleteBerita($id)
    {
        $data=berita::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function detailBerita($id)
    {
        $data=berita::find($id);
        
        return view('detailBerita',compact('data'));
    }
}
