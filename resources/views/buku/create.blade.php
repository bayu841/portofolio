@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('contents')
<div class="container mt-4">
    <div class="card shadow rounded">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Form Tambah Buku</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Buku</label>
                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul buku" required>
                </div>

                <div class="mb-3">
                    <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" id="pengarang" placeholder="Masukkan nama pengarang" required>
                </div>

                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="text" name="tahun_terbit" class="form-control" id="tahun_terbit" placeholder="Contoh: 2023" required>
                </div>

                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori Buku</label>
                    <select name="kategori" id="kategori" class="form-select" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="novel">Novel</option>
                        <option value="buku_cerita">Buku Cerita</option>
                        <option value="fiksi">Fiksi</option>
                        <option value="pendidikan">Pendidikan</option>
                        <option value="non_fiksi">Non Fiksi</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="rating_buku" class="form-label">Rating Buku</label>
                    <input type="number" name="rating_buku" id="rating_buku" class="form-control" placeholder="Isi angka 1-10">
                </div>

                <div class="mb-3">
                    <label for="cover_image" class="form-label">Sampul Buku</label>
                    <input type="file" name="cover_image" id="cover_image" class="form-control" accept="image/*">
                </div>

                <div class="mb-3">
                    <label for="pdf_file" class="form-label">File Buku (PDF)</label>
                    <input type="file" name="pdf_file" id="pdf_file" class="form-control" accept="application/pdf">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Simpan Buku</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
