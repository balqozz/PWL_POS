{{-- @extends('layouts.app')
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')
@section('content_body')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Buat Kategori Baru</h3>
            </div>
            <form action="{{ url('kategori/update', $kategori->kategori_id) }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeKategori">kategori Id</label>
                        <input type="text" class="form-control" id="kodeKategori" name="id" value="{{$kategori->kategori_id}}"
                            placeholder="Kategori Id" disabled>
                    </div>
                    <div class="form-group">
                        <label for="kodeKategori">Kode Kategori</label>
                        <input type="text" class="form-control" id="kodeKategori" name="kodeKategori" value="{{$kategori->kategori_kode}}"
                            placeholder="Kode Kategori" required>
                    </div>
                    <div class="form-group">
                        <label for="namaKategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="namaKategori" name="namaKategori" value="{{$kategori->kategori_nama}}"
                            placeholder="Nama Kategori" required>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>
@endsection
   --}}