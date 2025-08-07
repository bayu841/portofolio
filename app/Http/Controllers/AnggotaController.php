<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class AnggotaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $anggotas = Anggota::when($search, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%');
        })->get();
        $jumlahAnggota = Anggota::count();
        return view('buku.anggotas.index', compact('anggotas','jumlahAnggota','search'));
    }

    public function create()
    {
        return view('buku.anggotas.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:laki_laki,perempuan',
            'email' => 'nullable|email',
            'alamat' => 'nullable|string|max:1000',
        ]);

        Anggota::create($validatedData);

        // Menambahkan 's' pada kata Anggota untuk konsistensi plural
        return redirect()->route('buku.anggotas.index')->with('success', 'Anggota berhasil ditambahkan!');
    }

    public function show(Anggota $anggota)
    {
        return view('buku.anggotas.show', compact('anggota'));
    }

    public function edit(Anggota $anggota)
    {
        return view('buku.anggotas.edit', compact('anggota'));
    }

    public function update(Request $request, Anggota $anggota)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:laki_laki,perempuan',
            'email' => 'nullable|email',
            'alamat' => 'nullable|string|max:1000',
        ]);

        $anggota->update($validatedData);

        // Menambahkan 's' pada kata Anggota untuk konsistensi plural
        return redirect()->route('buku.anggotas.index')->with('success', 'Anggota berhasil diperbarui!');
    }

    public function destroy(Anggota $anggota)
    {
        $anggota->delete();

        // Menambahkan 's' pada kata Anggota untuk konsistensi plural
        return redirect()->route('buku.anggotas.index')->with('success', 'Anggota berhasil dihapus!');
    }
    public function exporPdf(){
        $anggotas = Anggota::all();
        $pdf = Pdf::loadView('buku.anggotas.pdf',compact('anggotas'));
        return $pdf->download('rekap-data-anggota.pdf');
    }
}