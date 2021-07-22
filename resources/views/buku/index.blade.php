@extends('layout.main')
@section('title','Dashboard')
@section('kontenHeader','Dashboard')
@section('konten')
<div class="row">
    <div class="col-12 mb-4">
        <div class="hero text-white hero-bg-image hero-bg-parallax"
            style="background-image: url('stisla/assets/img/unsplash/library-hero.jpg');">
            <div class="hero-inner">
                <h2>Selamat Datang, {{ auth()->user()->name }}</h2>
                <p class="lead">You almost arrived, complete the information about your account to complete
                    registration.</p>
            </div>
        </div>
    </div>
</div>

<h2 class="section-title">Buku Kamu</h2>
<p class="section-lead">This article component is based on card and flexbox.</p>

{{-- Bagian Daftar Buku --}}
<div class="container-fluid">
    <div class="row">
    @foreach ($buku as $buku)
        <div class="col-lg-3">
            <div class="card text-center">
                <img src="{{url('Gambar/'.$buku->gambar)}}" class="card-img-top rounded-sm" height="300px">
                <div class="card-body">
                    <h5 class="card-title">{{$buku->judul}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted font-weight-light">{{$buku->kategori}}</h6>
                    <h6 class="card-subtitle mb-2 ">{{$buku->penulis}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{$buku->tahun}}</h6>
                    <p class="card-text">{{$buku->deskripsi}}</p>
                    <h6 class="card-subtitle mb-3 text-left">{{$buku->penerbit}}</h6>
                    <form action="{{ route('buku.destroy',$buku->id) }}" method="POST">
                        <a href="{{ route('buku.show',$buku->id)}}" class="btn btn-block btn-info" name="baca">Baca</a>
                        <a href="{{route('buku.edit', $buku->id)}}" class="btn btn-block btn-warning">Edit Info Buku</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-block btn-danger mt-2" onclick="return confirm('Apa anda ingin menghapus data ini?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
