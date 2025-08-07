@extends('layouts.app')


@section('title', 'Selamat Datang , ' . Auth::user()->name.' ('.Auth::user()->role.')')

@section('contents')
  <!-- Dashboard Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h3 class="mb-0 text-gray-800">Dashboard</h3>
    </div>

    <!-- Content Row -->
    <div class="row">
      <!-- Dashboard Card 1 -->
        <div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-primary shadow h-200 py-2" style="border-radius: 10px;">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Anggota</div>
            <div class="h5 mb-0 font-weight-bold text-white">{{ $jumlahAnggota }}</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-users fa-2x text-white"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dashboard Card 2 -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-success shadow h-200 py-2" style="border-radius: 10px;">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Buku Tersedia</div>
            <div class="h5 mb-0 font-weight-bold text-white">{{ $jumlahBuku }}</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-book fa-2x text-white"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
        <!-- Dashboard Card 3 -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-warning shadow h-200 py-2" style="border-radius: 10px;">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Jumlah Baca</div>
            <div class="h5 mb-0 font-weight-bold text-white">{{$jumlahRiwayat}}</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-book-reader fa-2x text-white"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
      <!-- Dashboard Card 4 -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card bg-danger shadow h-200 py-2" style="border-radius: 10px;">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Artikel</div>
            <div class="h5 mb-0 font-weight-bold text-white">{{$jumlahArticle}}</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-newspaper fa-2x text-white"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
  <br>
  @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
  @endif
  <hr>
  <div class="container">
    <div class="mb-3">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Riwayat Membaca Buku</h2>
            <a href="{{route('buku.anggotas.exporPdf')}}" class="btn btn-info">Cetak PDF <i class="fas fa-print"></i></a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Pengguna</th>
                <th>Role Pengguna</th>
                <th>Judul Buku</th>
                <th>Waktu Melihat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($views as $view)
                <tr>
                    <td>{{ $view->user ? $view->user->name  : 'Tidak diketahui' }}</td>
                    <td>{{ $view->user ? $view->user->role  : 'Tidak diketahui' }}</td>
                    <td>{{ $view->buku ? $view->buku->judul : 'Tidak diketahui' }}</td>
                    <td>{{ $view->viewed_at->format('d M Y H:i') }}</td>
                    <td>
                        <form action="{{route('riwayat.destroy',$view->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
