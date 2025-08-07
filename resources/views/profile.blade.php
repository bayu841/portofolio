@extends('layouts.app')

@section('title', 'Profil Anda')

@section('contents')
<div class="container mt-4">
    <div class="card shadow rounded">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0">Profil Anda</h5>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nama Panggilan</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Nama Lengkap" value="{{ old('name', auth()->user()->name) }}">
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', auth()->user()->email) }}">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="profile" class="form-label">Foto Profil</label>
                    <input type="file" id="profile" name="profile" class="form-control" accept="image/*">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Perbarui Profil</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
