@extends('layouts.app')

@section('title', 'Detail Artikel')

@section('contents')
<div class="container mt-4">
    <div class="card shadow-sm rounded">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Detail Artikel</h5>
        </div>
        <div class="card-body">

            <!-- Judul Artikel -->
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" class="form-control" value="{{ $article->judul }}" readonly>
            </div>

            <!-- Deskripsi Artikel -->
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" rows="5" readonly>{{ $article->deskripsi }}</textarea>
            </div>

            <!-- Link Artikel -->
            <div class="mb-3">
                <label class="form-label">Link Artikel</label>
                <input type="url" class="form-control" value="{{ $article->link }}" readonly>
            </div>

            <!-- Cover Artikel -->
            <div class="mb-3">
                <label class="form-label">Cover Artikel</label><br>
                @if ($article->cover_article)
                    <img src="{{ asset('storage/' . $article->cover_article) }}" alt="Cover Artikel" class="img-thumbnail" style="max-width: 150px;">
                @else
                    <p class="text-muted">Tidak ada cover artikel yang tersedia.</p>
                @endif
            </div>

            <!-- Tombol Kembali -->
            <div class="d-flex justify-content-end">
                <a href="{{ route('articles.index') }}" class="btn btn-primary">Kembali</a>
            </div>

        </div>
    </div>
</div>
@endsection
