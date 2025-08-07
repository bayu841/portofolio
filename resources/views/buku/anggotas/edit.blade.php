@extends('layouts.app')

@section('title', 'Edit Anggota')

@section('contents')
<div class="container mt-4">
    <div class="card shadow rounded">
        <div class="card-header bg-warning text-white">
            <h5 class="mb-0">Form Edit Anggota</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('buku.anggotas.update', $anggota->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Nama Anggota -->
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $anggota->nama }}" required>
                </div>

                <!-- Jenis Kelamin -->
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" required>
                        <option value="laki_laki" {{ $anggota->jenis_kelamin == 'laki_laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="perempuan" {{ $anggota->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $anggota->email }}">
                </div>

                <!-- Alamat -->
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3">{{ $anggota->alamat }}</textarea>
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
