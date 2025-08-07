@extends('layouts.app')

@section('title', 'Detail Buku')

@section('contents')
<div class="container mt-4">
    <div class="card shadow-sm rounded">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Detail Buku</h5>
        </div>
        <div class="card-body">

            <!-- Baris 1: Judul dan Pengarang -->
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Judul</label>
                    <input type="text" class="form-control" value="{{ $buku->judul }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Pengarang</label>
                    <input type="text" class="form-control" value="{{ $buku->pengarang }}" readonly>
                </div>
            </div>

            <!-- Baris 2: Tahun Terbit, Rating, Kategori -->
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" value="{{ $buku->tahun_terbit }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Rating Buku</label>
                    <input type="text" class="form-control" value="{{ $buku->rating_buku }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Kategori</label>
                    <input type="text" class="form-control" value="{{ $buku->kategori }}" readonly>
                </div>
            </div>

            <!-- Cover Buku -->
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Cover Buku</label><br>
                    @if ($buku->cover_image)
                        <img src="{{ asset('storage/' . $buku->cover_image) }}" alt="Cover Buku" class="img-thumbnail" style="max-width: 150px;">
                    @else
                        <p class="text-muted">Tidak ada cover buku yang tersedia.</p>
                    @endif
                </div>
            </div>

            <!-- PDF Buku -->
            <div class="row mb-4">
                <div class="col">
                    <label class="form-label">File PDF</label><br>
                    @if ($buku->pdf_file)
                        <a href="{{ asset('storage/' . $buku->pdf_file) }}" target="_blank" class="btn btn-success">
                            Lihat Buku
                        </a>
                    @else
                        <p class="text-muted">Tidak ada file PDF untuk buku ini.</p>
                    @endif
                </div>
            </div>

            <!-- Tombol Kembali -->
            <div class="d-flex justify-content-end">
                <a href="{{ route('buku.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
