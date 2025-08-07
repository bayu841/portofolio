<?php
namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\KategoriBuku;
use App\Models\RiwayatBuku;
use App\Models\Rating;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function showBooks(Request $request)
    {
        $search = $request->input('search');
        $jumlahRiwayat = RiwayatBuku::count();
        $kategoriList = KategoriBuku::all();
        $buku = Buku::with('kategori')->get();
        $query = Buku::with('kategori');

        if($search){
            $query->where('judul','like','%'.$search.'%')->orWhere('judul','like','%'.$search.'%');
        }
        $buku = $query->get();
        return view('book', compact('buku','kategoriList','jumlahRiwayat','search'));
}

// Method to show the PDF file
    public function bacaPDF($tipssehat)
    {
        $path = public_path('assets/' . $tipssehat);

    if (file_exists($path)) {
        return response()->file($path);
    } else {
        return abort(404, 'File tidak ditemukan');
        }
    }
    public function filterKategori(Request $request)
{
    $kategoriList = KategoriBuku::all();
    $kategoriId = $request->kategori;

    if ($kategoriId) {
        $buku = Buku::where('kategori', $kategoriId)->get();
    } else {
        $buku = Buku::all();
    }
    if ($buku->isEmpty()) {
        $message = 'Maaf, buku belum tersedia.';
    } else {
        $message = null;
    }

    return view('book', compact('buku', 'kategoriList','message'));
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
    public function destroyRiwayat($id){
        $riwayat_buku = RiwayatBuku::findOrFail($id);
        $riwayat_buku->delete();

        return redirect()->back()->with('success','Berhasil hapus histori');
    }

public function beriRating(Request $request, $id)
{
    $request->validate([
        'rating' => 'required|integer|min:1|max:5',
    ]);

    if (auth()->user()->role !== 'user') {
        return redirect()->back()->with('error', 'Hanya user yang dapat memberi rating.');
    }

    $buku = Buku::findOrFail($id);

    // Cek apakah user sudah memberi rating
    $existingRating = Rating::where('user_id', auth()->id())
                            ->where('buku_id', $id)
                            ->first();

    if ($existingRating) {
        $existingRating->update(['rating' => $request->rating]);
    } else {
        Rating::create([
            'user_id' => auth()->id(),
            'buku_id' => $id,
            'rating' => $request->rating,
        ]);
    }

    return redirect()->back()->with('success', 'Rating berhasil disimpan!');
}
}