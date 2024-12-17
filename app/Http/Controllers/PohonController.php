<?php

namespace App\Http\Controllers;

use App\Models\Pohon;
use App\Models\User;
use Illuminate\Http\Request;

class PohonController extends Controller
{
    public function index()
    {
        $pohon = Pohon::all();
        return response()->json($pohon);
    }

    public function show($id)
    {
        $pohon = Pohon::find($id);

        if (!$pohon) {
            return response()->json(['message' => 'Pohon not found'], 404);
        }

        return response()->json($pohon);
    }


    public function create(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_pohon' => 'required|string|max:255',
            'jenis_pohon' => 'required|string|max:255',
            'tanggal_tanam' => 'required|date',
            'Lokasi' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id', // Pastikan user_id ada dalam tabel users
        ]);

        // Membuat pohon baru
        $pohon = Pohon::create($request->all());

        return response()->json([
            'message' => 'Pohon created successfully',
            'data' => $pohon,
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $pohon = Pohon::find($id);

        if (!$pohon) {
            return response()->json(['message' => 'Pohon not found'], 404);
        }

        // Validasi input
        $request->validate([
            'nama_pohon' => 'string|max:255',
            'jenis_pohon' => 'string|max:255',
            'tanggal_tanam' => 'date',
            'Lokasi' => 'string|max:255',
            'user_id' => 'exists:users,id',
        ]);

        // Mengupdate pohon
        $pohon->update($request->all());

        return response()->json([
            'message' => 'Pohon updated successfully',
            'data' => $pohon,
        ]);
    }

    public function delete($id)
    {
        $pohon = Pohon::find($id);

        if (!$pohon) {
            return response()->json(['message' => 'Pohon not found'], 404);
        }

        // Menghapus pohon
        $pohon->delete();

        return response()->json([
            'message' => 'Pohon deleted successfully',
        ]);
    }
}
