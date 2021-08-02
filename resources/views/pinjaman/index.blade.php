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
                <p class="lead"> </p>
            </div>
        </div>
    </div>
</div>

<h2 class="section-title">Data Pinjaman Kamu</h2>
<p class="section-lead">Silahkan Cetak Bukti Pinjaman dan Lakukan Pembayaran pada Bagian Administrasi untuk Mengambil
    Buku.</p>

{{-- Bagian Daftar Buku --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Pinjaman Kamu</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Penulis</th>
                                    <th>Tahun</th>
                                    <th>Terbit</th>
                                    <th>Lama Pinjam</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Biaya</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pinjaman as $p)
                                    @if ($p->user->id == Auth::user()->id)
                                <tr>
                                    <td>
                                        {{$loop->iteration}}
                                    </td>
                                    <td>{{$p->judul}}</td>
                                    <td>{{$p->kategori}}</td>
                                    <td>{{$p->penulis}}</td>
                                    <td>{{$p->tahun}}</td>
                                    <td>{{$p->terbit}}</td>
                                    <td>{{$p->lamaPinjam}}</td>
                                    <td>{{$p->created_at}}</td>
                                    <td>
                                        <div class="badge badge-success">Rp.{{$p->biaya * $p->lamaPinjam}}</div>
                                    </td>
                                    <td>
                                    <form action="{{ route('pinjaman.destroy',$p->id) }}" method="POST">
                                        <a href="{{route('pinjaman.show', $p->id)}}" class="btn btn-info">Cetak</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apa anda ingin menghapus data ini?')">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
