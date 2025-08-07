@extends('layouts.app')

@section('title', 'Edit Buku')

@section('contents')
<div class="container mt-4">
    <div class="card shadow rounded">
        <div class="card-header bg-warning text-white">
            <h5 class="mb-0">Form Edit Buku</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="judul" class="form-label">Judul Buku</label>
                        <input type="text" name="judul" id="judul" class="form-control" value="{{ $buku->judul }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="pengarang" class="form-label">Pengarang</label>
                        <input type="text" name="pengarang" id="pengarang" class="form-control" value="{{ $buku->pengarang }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control" value="{{ $buku->tahun_terbit }}" required>
                </div>

                <div class="mb-3">
                    <label for="rating_buku" class="form-label">Rating Buku</label>
                    <input type="number" name="rating_buku" id="rating_buku" class="form-control" value="{{ $buku->rating_buku }}">
                </div>

                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori Buku</label>
                    <select name="kategori" id="kategori" class="form-select" required>
                        <option value="">Pilih Kategori</option>
                        <option value="novel" {{ $buku->kategori === 'novel' ? 'selected' : '' }}>Novel</option>
                        <option value="buku_cerita" {{ $buku->kategori === 'buku_cerita' ? 'selected' : '' }}>Buku Cerita</option>
                        <option value="fiksi" {{ $buku->kategori === 'fiksi' ? 'selected' : '' }}>Fiksi</option>
                        <option value="pendidikan" {{ $buku->kategori === 'pendidikan' ? 'selected' : '' }}>Pendidikan</option>
                        <option value="non_fiksi" {{ $buku->kategori === 'non_fiksi' ? 'selected' : '' }}>Non Fiksi</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="cover_image" class="form-label">Cover Buku</label><br>
                    @if($buku->cover_image)
                        <img src="{{ asset('storage/' . $buku->cover_image) }}" alt="Cover Buku" width="100" class="mb-2 d-block">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remove_cover" id="remove_cover">
                            <label class="form-check-label" for="remove_cover">Hapus Gambar</label>
                        </div>
                    @else
                        <p class="text-muted">Tidak ada gambar yang tersedia.</p>
                    @endif
                    <input type="file" name="cover_image" class="form-control mt-2" accept="image/*">
                </div>

                <div class="mb-4">
                    <label for="pdf_file" class="form-label">Upload File PDF</label>
                    <input type="file" name="pdf_file" id="pdf_file" class="form-control" accept="application/pdf">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-warning text-white">Update Buku</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
