@extends('layouts.app')

@section('contents')
<div class="d-flex align-items-center justify-content-between mb-4">
    <h1>Daftar Pengguna</h1>
</div>

@if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
<form action="{{ route('pengguna.index') }}" method="GET" class="mb-4" style="width: 500px;">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Cari pengguna..." value="{{ request('search') }}">
        <button class="btn btn-primary" type="submit" style="border-radius: 0px 10px 10px 0px;">Cari</button>
    </div>
</form>


<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Terdaftar Pada</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @if($users->count() > 0)
            @foreach($users as $index => $user)
                <tr>
                    <td class="align-middle">{{ $index + 1 }}</td>
                    <td class="align-middle">{{ $user->name }}</td>
                    <td class="align-middle">{{ $user->email }}</td>
                    <td class="align-middle">{{ ucfirst($user->role) }}</td>
                    <td class="align-middle">{{ $user->created_at->format('d M Y') }}</td>
                    <td class="align-middle">
                        <div class="d-flex gap-2">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('pengguna.edit', $user->id) }}" class="btn btn-warning" title="edit"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('pengguna.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus user ini?')" class="btn btn-danger p-0 m-0">
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
                <td class="text-center" colspan="6">Belum ada data pengguna.</td>
            </tr>
        @endif
    </tbody>
</table>
@endsection
