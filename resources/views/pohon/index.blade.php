@extends('layouts.app')

@section('content')
    <a href="{{ route('pohon.create') }}" class="btn btn-primary mb-3">Tambah Pohon</a>
    <h1>Daftar Pohon</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Pohon</th>
                <th>Jenis Pohon</th>
                <th>Tanggal Tanam</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pohon as $item)
                <tr>
                    <td>{{ $item->nama_pohon }}</td>
                    <td>{{ $item->jenis_pohon }}</td>
                    <td>{{ $item->tanggal_tanam }}</td>
                    <td>{{ $item->Lokasi }}</td>
                    <td>
                        @if ($item->image)
                            <!-- Display image from storage -->
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Image"
                                style="width: 100px; height: auto;">
                        @else
                            <p>No Image</p>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('pohon.show', $item->id_Pohon) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('pohon.edit', $item->id_Pohon) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pohon.destroy', $item->id_Pohon) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
