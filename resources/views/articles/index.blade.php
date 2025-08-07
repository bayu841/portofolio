@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-4">List Artikel</h1>
        <a href="{{ route('articles.create') }}" class="btn btn-primary">Tambah Artikel</a>
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="{{ route('articles.index') }}" method="GET" class="mb-4" style="width: 500px;">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari buku..."value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit" style="border-radius: 0px 10px 10px 0px;">Cari</button>
        </div>
    </form>
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Link</th>
                <th>Cover Artikel</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($articles->count() > 0)
                @foreach($articles as $article)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle" style="text-align: justify;">{{ $article->judul }}</td>
                        <td class="align-middle" style="text-align: justify;">{{ $article->deskripsi }}</td>
                        <td class="align-middle">
                            <a href="{{ $article->link }}" target="_blank">Baca Disini</a>
                        </td>
                        <td class="align-middle">
                            @if($article->cover_article)
                            <img src="{{ asset('storage/' . $article->cover_article) }}" alt="Cover Artikel" style="width: 150px; height:90px;">
                            @else
                                <span>Tidak ada gambar</span>
                            @endif
                        </td>
                        {{-- <td class="align-middle">{{ $article->kategori }}</td> --}}
                        <td class="align-middle">
                            <div class="d-flex gap-2">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('articles.show', $article->id) }}" class="btn btn-success" title="detail"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning" title="edit"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="btn btn-danger p-0">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger rounded" role="group" aria-label="Basic example" title="delete"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">Tidak ada artikel</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
