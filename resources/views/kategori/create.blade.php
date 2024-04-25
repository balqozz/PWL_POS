@extends('layout.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Daftar Kategori')

@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Kategori Baru</h3>
                <form method="post" action="../kategori">
                </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->category->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="form-group">

                            <label for="kode_kategori">Kode Kategori</label>
                            {{-- <input type="text" class="form-control" name="kodeKategori" id="KodeKategori"
                                placeholder="Kode Kategori"> --}}

                                <input type="text" class="form-control @error('kategori_kode') is-invalid @enderror" id="kategori_kode" name="kategori_kode"
                                placeholder="Kode Kategori">
                            @error('kategori_kode', 'category')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_kategori">Nama Kategori</label>
                            {{-- <input type="text" class="form-control" name="namaKategori" id="NamaKategori"
                                placeholder="Nama Kategori"> --}}
                                <input type="text" class="form-control @error('kategori_nama') is-invalid @enderror" id="kategori_nama" name="kategori_nama"
                                placeholder="Nama Kategori">
                            @error('kategori_nama', 'category')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>
        @endsection
