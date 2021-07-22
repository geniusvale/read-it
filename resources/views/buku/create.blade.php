@extends('layout.main')
@section('title','Tambah Buku')
@section('kontenHeader','Tambah Buku')
@section('konten')
{{-- <h2 class="section-title">Tambah Buku</h2>
<p class="section-lead">This article component is based on card and flexbox.</p> --}}

{{-- Bagian Tambah Buku --}}
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Masukkan Data</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('buku.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="judul">
                        </div>
                        <span style="color: red">@error('judul') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" name="kategori">
                                <option>~Pilih Kategori~</option>
                                <option>Fiksi</option>
                                <option>Non-Fiksi</option>
                            </select>
                        </div>
                        <span style="color: red">@error('kategori') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Penulis</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="penulis">
                        </div>
                        <span style="color: red">@error('penulis') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tahun</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="tahun">
                        </div>
                        <span style="color: red">@error('tahun') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea class="summernote-simple" name="deskripsi"></textarea>
                        </div>
                        <span style="color: red">@error('deskripsi') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sampul Buku</label>
                        <div class="col-sm-12 col-md-7">
                                <label for="image-upload">Upload Gambar</label>
                                <input type="file" name="gambar"/>
                        </div>
                        <span style="color: red">@error('gambar') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">File PDF</label>
                        <div class="col-sm-12 col-md-7">
                                <label for="pdf-upload">Pilih File</label>
                                <input type="file" name="pdf"/>
                        </div>
                        <span style="color: red">@error('pdf') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Penerbit</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="penerbit">
                        </div>
                        <span style="color: red">@error('penerbit') {{$message}} @enderror</span>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </div>
                    
                </form>    
            </div>
        </div>
    </div>
</div>
@endsection
