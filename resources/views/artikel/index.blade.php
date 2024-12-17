@extends('layouts.app')

@section('content')
<h1>Daftar Artikel</h1>
<table class="table">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Isi</th>
            <th>Tanggal Upload</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($artikel as $item)
        <tr>
            <td>{{ $item->Judul }}</td>
            <td>{{ Str::limit($item->isi, 50) }}</td>
            <td>{{ $item->tanggal_upload }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection