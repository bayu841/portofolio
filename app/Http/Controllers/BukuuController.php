<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class BukuuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $buku = Buku::when($search, function ($query, $search) {
            return $query->where('judul', 'like', '%' . $search . '%');
        })->get();

        $jumlahBuku = Buku::count();

        return view('buku.index', compact('buku', 'jumlahBuku', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|min:1900|max:' . date('Y'),
            'kategori' => 'required|in:novel,buku_cerita,fiksi,pendidikan,non_fiksi',
            'rating_buku' => 'required|integer|between:1,10',
            'cover_image' => 'nullable|image|mimes:jpeg,webp,png,jpg,gif|max:20480',
            'pdf_file' => 'nullable|mimes:pdf|max:200000',
        ]);

        $coverImagePath = null;
        if ($request->hasFile('cover_image')) {
            $coverImagePath = $request->file('cover_image')->store('assets', 'public');
        }

        $pdfPath = null;
        if ($request->hasFile('pdf_file')) {
            $pdfPath = $request->file('pdf_file')->store('pdfs', 'public');
        }

        Buku::create([
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'tahun_terbit' => $request->tahun_terbit,
            'kategori' => $request->kategori,
            'rating_buku' => $request->rating_buku ?? 1,
            'cover_image' => $coverImagePath ?? null,
            'pdf_file' => $pdfPath,
        ]);

        Log::info('Buku berhasil ditambahkan.');

        return redirect()->route('buku.index')->with('success', 'Buku Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $buku = Buku::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|min:1900|max:' . date('Y'),
            'kategori' => 'required|in:novel,buku_cerita,fiksi,pendidikan,non_fiksi',
            'rating_buku' => 'required|integer|between:1,10',
            'cover_image' => 'nullable|image|mimes:jpeg,webp,png,jpg,gif|max:20480',
            'pdf_file' => 'nullable|mimes:pdf|max:200000',
        ]);

        if ($request->hasFile('cover_image')) {
            if ($buku->cover_image && Storage::exists('public/' . $buku->cover_image)) {
                Storage::delete('public/' . $buku->cover_image);
            }
            $coverImagePath = $request->file('cover_image')->store('covers', 'public');
            $buku->cover_image = $coverImagePath;
        }

        if ($request->hasFile('pdf_file')) {
            if ($buku->pdf_file && Storage::exists('public/' . $buku->pdf_file)) {
                Storage::delete('public/' . $buku->pdf_file);
            }
            $pdfPath = $request->file('pdf_file')->store('pdfs', 'public');
            $buku->pdf_file = $pdfPath;
        }

        $buku->update([
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'tahun_terbit' => $request->tahun_terbit,
            'rating_buku' => $request->rating_buku,
            'kategori' => $request->kategori,
        ]);

        Log::info('Buku berhasil diperbarui.');

        return redirect()->route('buku.index')->with('success', 'Buku Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::findOrFail($id);

        if ($buku->pdf_file && Storage::exists('public/' . $buku->pdf_file)) {
            Storage::delete('public/' . $buku->pdf_file);
        }

        $buku->delete();

        Log::info('Buku berhasil dihapus.');

        return redirect()->route('buku.index')->with('success', 'Buku Berhasil Dihapus');
    }

}