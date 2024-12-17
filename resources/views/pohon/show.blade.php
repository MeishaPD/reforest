@extends('layouts.app')

@section('content')
    <h1>Detail Pohon</h1>

    <ul>
        <li><strong>Nama Pohon:</strong> {{ $pohon->nama_pohon }}</li>
        <li><strong>Jenis Pohon:</strong> {{ $pohon->jenis_pohon }}</li>
        <li><strong>Tanggal Tanam:</strong> {{ $pohon->tanggal_tanam }}</li>
        <li><strong>Lokasi:</strong> {{ $pohon->Lokasi }}</li>
        <li><strong>User ID:</strong> {{ $pohon->user_id }}</li>
        @if ($pohon->image)
            <!-- Display image from storage -->
            <li><img src="{{ asset('storage/' . $pohon->image) }}" alt="Image" style="width: 100px; height: auto;">
            </li>
        @else
            <li>
                <p>No Image</p>
            </li>
        @endif
    </ul>

    <a href="{{ route('pohon.index') }}" class="btn btn-primary">Kembali ke Daftar Pohon</a>
@endsection
