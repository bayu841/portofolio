@extends('layouts.app')

@section('title', 'Detail Anggota')

@section('contents')
<div class="container mt-4">
    <div class="card shadow-sm rounded">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Detail Anggota</h5>
        </div>
        <div class="card-body">

            <!-- Nama dan Jenis Kelamin -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" value="{{ $anggota->nama }}" readonly>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" value="{{ ucfirst($anggota->jenis_kelamin) }}" readonly>
                </div>
            </div>

            <!-- Email dan Alamat -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" value="{{ $anggota->email }}" readonly>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Alamat</label>
                    <textarea class="form-control" rows="3" readonly>{{ $anggota->alamat }}</textarea>
                </div>
            </div>

            <!-- Tombol Kembali -->
            <div class="d-flex justify-content-end">
                <a href="{{ route('buku.anggotas.index') }}" class="btn btn-primary">Kembali</a>
            </div>

        </div>
    </div>
</div>
@endsection
