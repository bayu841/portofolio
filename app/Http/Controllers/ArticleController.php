<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $articles = Article::when($search, function ($query, $search) {
            return $query->where('judul', 'like', '%' . $search . '%');
        })->get();

        $jumlahArticle = Article::count();
        return view('articles.index', compact('articles','jumlahArticle','search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create'); // Menampilkan form untuk membuat artikel baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'cover_article' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url|max:255',
        ]);

        // Menyimpan artikel baru
        $article = new Article;
        $article->judul = $validated['judul'];
        $article->deskripsi = $validated['deskripsi'];
        $article->link = $validated['link'];
        // Menangani upload gambar (cover)
        if ($request->hasFile('cover_article')) {
            // Simpan gambar di folder 'assets/artikel'
            $path = $request->file('cover_article')->store('assets/artikel', 'public');
            $article->cover_article = $path;
        }

        // Simpan artikel ke database
        $article->save();

        // Redirect ke halaman artikel dengan pesan sukses
        return redirect()->route('articles.index')->with('success', 'Artikel berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Menampilkan artikel berdasarkan ID
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Menampilkan form edit artikel berdasarkan ID
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang diterima
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'cover_article' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'required|url|max:255',
        ]);

        // Cari artikel berdasarkan ID
        $article = Article::findOrFail($id);
        $article->judul = $validated['judul'];
        $article->deskripsi = $validated['deskripsi'];
        $article->link = $validated['link'];


        // Menangani upload gambar (cover)
        if ($request->hasFile('cover_article')) {
            // Hapus gambar lama jika ada
            if ($article->cover_article) {
                Storage::delete('public/' . $article->cover_article);
            }

            // Simpan gambar baru di folder 'assets/artikel'
            $path = $request->file('cover_article')->store('assets/artikel', 'public');
            $article->cover_article = $path;
        }

        // Simpan perubahan artikel ke database
        $article->save();

        // Redirect ke halaman artikel dengan pesan sukses
        return redirect()->route('articles.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari artikel berdasarkan ID
        $article = Article::findOrFail($id);

        // Hapus gambar terkait jika ada
        if ($article->cover_article) {
            Storage::delete('public/' . $article->cover_article);
        }

        // Hapus artikel dari database
        $article->delete();

        // Redirect ke halaman artikel dengan pesan sukses
        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus.');
    }
}