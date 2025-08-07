@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-4">List Buku</h1>
        <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a>
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
   <form action="{{ route('buku.index') }}" method="GET" class="mb-4" style="width: 500px;">
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
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Kategori</th>
                <th>Cover Buku</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($buku->count() > 0)
                @foreach($buku as $buku)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $buku->judul }}</td>
                        <td class="align-middle">{{ $buku->pengarang }}</td>
                        <td class="align-middle">{{ $buku->tahun_terbit }}</td>
                        <td class="align-middle">{{ $buku->kategori }}</td>
                        <td class="align-middle">
                            @if($buku->cover_image)
                            <img src="{{ asset('storage/' . $buku->cover_image) }}" alt="Cover Buku" style="width: 70px; height:90px;">
                            @else
                                <span>Tidak ada gambar</span>
                            @endif
                        </td>
                        <td class="align-middle">
                            <div class="d-flex gap-2">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('buku.show', $buku->id) }}" class="btn btn-success" title="detail"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning" title="edit"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="btn btn-danger p-0">
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
                    <td class="text-center" colspan="7">Tidak ada buku</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
