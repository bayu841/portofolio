@extends('layouts.app')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-4">List Anggota</h1>
        <a href="{{ route('buku.anggotas.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form action="{{ route('buku.anggotas.index') }}" method="GET" class="mb-4" style="width: 500px;">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari buku..."value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit" style="border-radius: 0px 10px 10px 0px;">Cari</button>
        </div>
    </form>
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($anggotas->count() > 0)
                @foreach($anggotas as $anggota)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $anggota->nama }}</td>
                        <td>{{ ucfirst($anggota->jenis_kelamin) }}</td>
                        <td>{{ $anggota->email ?? 'Tidak ada email' }}</td>
                        <td>{{ $anggota->alamat ?? 'Tidak ada alamat' }}</td>
                        <td>

                            <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('buku.anggotas.show', $anggota->id) }}" class="btn btn-success" title="detail"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('buku.anggotas.edit', $anggota->id) }}" class="btn btn-warning" title="edit"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('buku.anggotas.destroy', $anggota->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')" class="btn btn-danger p-0">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" title="delete"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="text-center">Tidak ada anggota</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
