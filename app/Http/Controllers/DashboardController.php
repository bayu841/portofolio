<?php
namespace App\Http\Controllers;
use App\Models\Anggota;
use App\Models\Article;
use App\Models\Buku;
use App\Models\RiwayatBuku;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    $jumlahAnggota = Anggota::count();
    $jumlahBuku = Buku::count();
    $jumlahArticle = Article::count();
    $jumlahRiwayat = RiwayatBuku::count();
    $views = RiwayatBuku::with(['user', 'buku'])->orderByDesc('viewed_at')->get();

    return view('dashboard', compact('jumlahAnggota', 'jumlahBuku','jumlahArticle','views','jumlahRiwayat'));
    }
}