<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::with('user')->get();
        return view('artikel.index', ['artikel' => $artikels]);
    }

    // Sementara ini hanya logic di atas (index/read) yang digunakan.
    // Buat logic untuk autentikasi dan pakai function-function di bawah jika ingin menambah, mengubah, atau menghapus artikel

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'user_id' => 'required|exists:users,user_id',
        ]);

        $validated['tanggal_upload'] = now();

        $artikel = Artikel::create($validated);

        return redirect()->route('artikel.index')->with('success', 'Artikel created successfully');
    }

    public function update(Request $request, $id_Artikel)
    {
        $artikel = Artikel::findOrFail($id_Artikel);

        $validated = $request->validate([
            'Judul' => 'sometimes|string|max:255',
            'isi' => 'sometimes|string',
        ]);

        $artikel->update($validated);

        return redirect()->route('artikel.index')->with('success', 'Artikel updated successfully');
    }

    public function destroy($id_Artikel)
    {
        $artikel = Artikel::findOrFail($id_Artikel);
        $artikel->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel deleted successfully');
    }
}
