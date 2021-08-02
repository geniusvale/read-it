<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjaman;
use File;
use Auth;

class PinjamanController extends Controller
{
    public function index()
    {
        $pinjaman = Pinjaman::all();
        // // $pinjaman = Pinjaman::find($id);
        return view('pinjaman.index', compact('pinjaman'));
        // dd($pinjaman);
    }

    public function create()
    {
        return view('pinjaman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'penulis' => 'required',
            'tahun' => 'required',
            'penerbit' => 'required',
            'lamaPinjam' => 'required',
            'biaya' => 'required',
        ]);

        $pinjaman = new Pinjaman;

        $pinjaman->judul = $request->judul;
        $pinjaman->kategori = $request->kategori;
        $pinjaman->penulis = $request->penulis;
        $pinjaman->tahun = $request->tahun;
        $pinjaman->penerbit = $request->penerbit;
        $pinjaman->lamaPinjam = $request->lamaPinjam;
        $pinjaman->biaya = $request->biaya;
        $pinjaman->user_id = Auth::user()->id;
        $pinjaman->save();

        return redirect()->route('pinjaman.index');

        // $pinjaman = Pinjaman::create($request->all());

    }
}
