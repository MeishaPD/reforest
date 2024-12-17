@extends('layouts.app')

@section('content')
    <h1>Tambah Pohon</h1>

    <form action="{{ route('pohon.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_pohon">Nama Pohon</label>
            <input type="text" id="nama_pohon" name="nama_pohon" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jenis_pohon">Jenis Pohon</label>
            <input type="text" id="jenis_pohon" name="jenis_pohon" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal_tanam">Tanggal Tanam</label>
            <input type="date" id="tanggal_tanam" name="tanggal_tanam" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Lokasi">Lokasi</label>
            <input type="text" id="Lokasi" name="Lokasi" class="form-control" required>
        </div>
        {{-- <div class="form-group">
            <label for="user_id">User ID</label>
            <input type="text" id="user_id" name="user_id" class="form-control" required>
        </div> --}}

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
