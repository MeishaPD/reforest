@extends('layouts.app')

@section('content')
    <h1>Edit Pohon</h1>

    <form action="{{ route('pohon.update', $pohon->id_Pohon) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_pohon">Nama Pohon</label>
            <input type="text" name="nama_pohon" class="form-control" value="{{ old('nama_pohon', $pohon->nama_pohon) }}"
                required>
        </div>

        <div class="form-group">
            <label for="jenis_pohon">Jenis Pohon</label>
            <input type="text" name="jenis_pohon" class="form-control"
                value="{{ old('jenis_pohon', $pohon->jenis_pohon) }}" required>
        </div>

        <div class="form-group">
            <label for="tanggal_tanam">Tanggal Tanam</label>
            <input type="date" name="tanggal_tanam" class="form-control"
                value="{{ old('tanggal_tanam', $pohon->tanggal_tanam) }}" required>
        </div>

        <div class="form-group">
            <label for="Lokasi">Lokasi</label>
            <input type="text" name="Lokasi" class="form-control" value="{{ old('Lokasi', $pohon->lokasi) }}" required>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
            @if ($pohon->image)
                <img src="{{ asset('storage/' . $pohon->image) }}" alt="Current Image" style="width: 100px; height: auto;">
            @else
                <p>No Image</p>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
