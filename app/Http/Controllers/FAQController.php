<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('faq.index', ['faqs' => $faqs]);
    }

    // Sementara ini hanya logic di atas (index/read) yang digunakan.
    // Buat logic untuk autentikasi dan pakai function-function di bawah jika ingin menambah, mengubah, atau menghapus FAQ

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        $faq = Faq::create($validated);

        return redirect()->route('faq.index')->with('success', 'FAQ created successfully');
    }

    public function update(Request $request, $id_faq)
    {
        $faq = Faq::findOrFail($id_faq);

        $validated = $request->validate([
            'question' => 'sometimes|string',
            'answer' => 'sometimes|string',
        ]);

        $faq->update($validated);

        return redirect()->route('faq.index')->with('success', 'FAQ updated successfully');
    }

    public function destroy($id_faq)
    {
        $faq = Faq::findOrFail($id_faq);
        $faq->delete();

        return redirect()->route('faq.index')->with('success', 'FAQ deleted successfully');
    }
}
