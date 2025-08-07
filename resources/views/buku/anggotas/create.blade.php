@extends('layouts.app')

@section('title', 'Tambah Anggota')

@section('contents')
<div class="container mt-4">
    <div class="card shadow rounded">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Form Tambah Anggota</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('buku.anggotas.store') }}" method="POST">
                @csrf

                <!-- Input Nama Anggota -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Anggota</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
                </div>

                <!-- Input Jenis Kelamin -->
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="laki_laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>

                <!-- Input Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Contoh: nama@email.com">
                </div>

                <!-- Input Alamat -->
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" rows="4" placeholder="Masukkan alamat lengkap"></textarea>
                </div>

                <!-- Tombol Submit -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Tambah Anggota</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
