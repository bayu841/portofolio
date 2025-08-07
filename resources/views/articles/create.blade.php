@extends('layouts.app')

@section('title', 'Tambah Artikel')

@section('contents')
<div class="container mt-4">
    <div class="card shadow rounded">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Form Tambah Artikel</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Artikel</label>
                    <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan judul artikel" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4" placeholder="Tuliskan deskripsi artikel" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="link" class="form-label">Link Artikel</label>
                    <input type="url" name="link" id="link" class="form-control" placeholder="Masukkan link URL artikel" required>
                </div>

                <div class="mb-4">
                    <label for="cover_article" class="form-label">Cover Artikel</label>
                    <input type="file" name="cover_article" id="cover_article" class="form-control" accept="image/*">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Simpan Artikel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
