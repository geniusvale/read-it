@extends('layout.main')
@section('title','Baca Bukumu')
@section('kontenHeader','Baca Bukumu')
@section('konten')

<h2 class="section-title">Baca Buku</h2>
<p class="section-lead">This article component is based on card and flexbox.</p>

{{-- Bagian Tampil Buku --}}

<div class="row justify-content-center">
    <iframe src="{{url('pdf/'.$buku->pdf)}}" height="720" width="1280" frameborder=""></iframe>   
</div>

@endsection
