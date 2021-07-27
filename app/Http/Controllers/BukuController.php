<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use File;
use Auth;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
        // dd($buku);
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'kategori'=>'required',
            'penulis'=>'required',
            'tahun'=>'required',
            'deskripsi'=>'required',
            'gambar'=>'required|image|mimes:jpg,png,jpeg,gif,svg',
            'pdf'=>'required|mimes:pdf',
            'penerbit'=>'required',
        ]);

        $path = $request->file('gambar')->getClientOriginalName();
        $request->gambar->move(public_path('Gambar'), $path);

        $pdf = $request->file('pdf')->getClientOriginalName();
        $request->pdf->move(public_path('pdf'), $pdf);

        $buku = new Buku;
        
        $buku->judul = $request->judul;
        $buku->kategori = $request->kategori;
        $buku->penulis = $request->penulis;
        $buku->tahun = $request->tahun;
        $buku->deskripsi = $request->deskripsi;
        $buku->gambar = $path;
        $buku->pdf = $pdf;
        $buku->penerbit = $request->penerbit;
        $buku->user_id = Auth::user()->id;
        $buku->save();

        return redirect()->route('buku.index')->with('Sukses', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        $buku = Buku::find($id);
        return view('buku.show',compact('buku'));
    
    }

    public function edit(Buku $buku)
    {
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'=>'required',
            'kategori'=>'required',
            'penulis'=>'required',
            'tahun'=>'required',
            'deskripsi'=>'required',
            'penerbit'=>'required',
        ]);

        $buku = Buku::find($id);

        if($request->hasFile('gambar')){
            $request->validate([
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            ]);
            $image_path = public_path("Gambar/".$buku->gambar);
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            $path = $request->file('gambar')->getClientOriginalName();
            $request->gambar->move(public_path('Gambar'), $path);
            $buku->gambar = $path;
        }

        if($request->hasFile('pdf')){
            $request->validate([
            'pdf' => 'required|mimes:pdf',
            ]);
            $pdf_path = public_path("pdf/".$buku->pdf);
                if (File::exists($pdf_path)) {
                    File::delete($pdf_path);
                }
            $pdf = $request->file('pdf')->getClientOriginalName();
            $request->pdf->move(public_path('pdf'), $path);
            $buku->pdf = $pdf;
        }

        $buku->judul = $request->judul;
        $buku->kategori = $request->kategori;
        $buku->penulis = $request->penulis;
        $buku->tahun = $request->tahun;
        $buku->deskripsi = $request->deskripsi;
        $buku->penerbit = $request->penerbit;
        $buku->user_id = Auth::user()->id;
        $buku->save();

        return redirect()->route('buku.index')->with('Sukses', 'Data berhasil diupdate!');

    }

    public function destroy($id)
    {
        $buku = Buku::find($id);
        $image_path = public_path("Gambar/".$buku->gambar);
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
        $pdf_path = public_path("pdf/".$buku->pdf);
                if (File::exists($pdf_path)) {
                    File::delete($pdf_path);
                }
        $buku->delete();

        return redirect()->route('buku.index');
    }
}
