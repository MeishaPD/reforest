<?php

namespace App\Http\Controllers;

use App\Models\Pohon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PohonController extends Controller
{
    public function index()
    {
        $pohon = Pohon::all();
        return view('pohon.index', compact('pohon'));
    }

    public function show($id)
    {
        $pohon = Pohon::find($id);

        if (!$pohon) {
            return view('pohon.notfound'); // Buat view untuk halaman 'not found'
        }

        return view('pohon.show', compact('pohon'));
    }

    public function create()
    {
        return view('pohon.create');
    }

    public function store(Request $request)
    {
        Log::info('Store method called', ['request' => $request->all()]);

        try {
            $request->validate([
                'nama_pohon' => 'required|string|max:255',
                'jenis_pohon' => 'required|string|max:255',
                'tanggal_tanam' => 'required|date',
                'Lokasi' => 'required|string|max:255',
                'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation failed', ['errors' => $e->errors()]);
            return back()->withErrors($e->errors())->withInput();
        }

        Log::info('Validation passed, processing image upload');

        $imagePath = $request->file('image')->store('imagesdata', 'public');

        $pohon = Pohon::create([
            'nama_pohon' => $request->nama_pohon,
            'jenis_pohon' => $request->jenis_pohon,
            'tanggal_tanam' => $request->tanggal_tanam,
            'Lokasi' => $request->Lokasi,
            'user_id' => Auth::id(),
            'image' => $imagePath,
        ]);

        return redirect()->route('pohon.index')->with('success', 'Pohon created successfully');
    }

    public function edit($id)
    {
        $pohon = Pohon::find($id);

        if (!$pohon) {
            return view('pohon.notfound');
        }

        return view('pohon.edit', compact('pohon'));
    }

    public function update(Request $request, $id)
    {
        $pohon = Pohon::find($id);

        if (!$pohon) {
            return redirect()->route('pohon.index')->with('error', 'Pohon not found');
        }

        if ($pohon->user_id !== Auth::id()) {
            return redirect()->route('pohon.index')->with('error', 'Unauthorized action');
        }

        $request->validate([
            'nama_pohon' => 'string|max:255',
            'jenis_pohon' => 'string|max:255',
            'tanggal_tanam' => 'date',
            'Lokasi' => 'string|max:255',
            'image' => '|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('imagesdata', 'public');

            if ($pohon->image) {
                Storage::disk('public')->delete($pohon->image); // Hapus gambar lama
            }

            $pohon->image = $imagePath;
        }

        $pohon->update([
            'nama_pohon' => $request->nama_pohon,
            'jenis_pohon' => $request->jenis_pohon,
            'tanggal_tanam' => $request->tanggal_tanam,
            'Lokasi' => $request->Lokasi,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('pohon.index')->with('success', 'Pohon updated successfully');
    }


    public function destroy($id)
    {
        $pohon = Pohon::find($id);

        if (!$pohon) {
            return redirect()->route('pohon.index')->with('error', 'Pohon not found');
        }

        Log::error('Pohon : ', $pohon->toArray()); // Log the Pohon data

        if ($pohon->user_id !== Auth::id()) {
            return redirect()->route('pohon.index')->with('error', 'Unauthorized action');
        }

        // Only attempt to delete the image if the 'image' exists
        if ($pohon->image) {
            // Delete the old image if it exists
            Storage::disk('public')->delete($pohon->image);
        }

        $pohon->delete();

        return redirect()->route('pohon.index')->with('success', 'Pohon deleted successfully');
    }
}
