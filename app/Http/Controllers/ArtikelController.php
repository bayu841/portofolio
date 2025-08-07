<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
class ArtikelController extends Controller
{
    // Define the artikel method
    public function artikel()
    {
        $articles = Article::all();


        if ($articles->isEmpty()) {
            $message = 'Maaf, artikel belum tersedia.';
        } else {
            $message = null;
        }
        return view('artikel', compact('articles','message'));
    }
    public function index(Request $request)
    {
        $search = $request->input('search');
        $articles = Article::when($search, function ($query, $search) {
            return $query->where('judul', 'like', '%' . $search . '%');
        })->paginate(10);

        $jumlahArticle = Article::count();
        return view('artikel', compact('articles','jumlahArticle','search'));
    }
}