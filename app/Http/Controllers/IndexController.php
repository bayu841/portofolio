<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\RiwayatBuku;

class IndexController extends Controller
{
    public function index()
    {
        // $buku = Buku::all();
        $jumlahRiwayat = RiwayatBuku::count();
        $buku = Buku::latest()->take(10)->get();
        return view('index',compact('buku','jumlahRiwayat'));
    }
    public function rating_rendah(){
        $buku = Buku::where('rating_buku', '<=', 3)
        ->orWhere('rating_buku', '>=', 5)
        ->get();

        return view('book', compact('buku'));
    }
    public function read($id)
{
    $buku = Buku::findOrFail($id);

    // Simpan riwayat kunjungan
    if (auth()->check()) {
        RiwayatBuku::create([
            'user_id' => auth()->id(),
            'buku_id' => $buku->id,
            'viewed_at' => now(),
        ]);
    }
    return redirect(asset('storage/' . $buku->pdf_file));
    }
}