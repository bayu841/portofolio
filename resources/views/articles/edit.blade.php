@extends('layouts.app')

@section('title', 'Edit Artikel')

@section('contents')
<div class="container mt-4">
    <div class="card shadow rounded">
        <div class="card-header bg-warning text-white">
            <h5 class="mb-0">Form Edit Artikel</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Judul Artikel -->
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Artikel</label>
                    <input type="text" name="judul" id="judul" class="form-control" value="{{ $article->judul }}" required>
                </div>

                <!-- Deskripsi Artikel -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control" required>{{ $article->deskripsi }}</textarea>
                </div>

                <!-- Link Artikel -->
                <div class="mb-3">
                    <label for="link" class="form-label">Link Artikel</label>
                    <input type="url" name="link" id="link" class="form-control" value="{{ $article->link }}" required>
                </div>

                <!-- Cover Artikel -->
                <div class="mb-3">
                    <label for="cover_article" class="form-label">Cover Artikel</label><br>
                    @if($article->cover_article)
                        <img src="{{ asset('storage/' . $article->cover_article) }}" alt="Cover Artikel" width="100" class="mb-2 d-block">
                    @else
                        <p class="text-muted">Tidak ada gambar yang tersedia.</p>
                    @endif
                    <input type="file" name="cover_article" id="cover_article" class="form-control mt-2" accept="image/*">
                </div>

                <!-- Tombol Submit -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-warning text-white">Update Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
