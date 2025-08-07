<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Perpustakaan - Register</title>
  <link rel="icon" href="assets/logo.png" sizes="32x32" type="image/png">
  <!-- Fonts and Icons -->
  <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Custom styles -->
  <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #3a5fbb,#6e81a7);
      font-family: 'Nunito', sans-serif;
    }

    .card {
      border-radius: 1rem;
    }

    .bg-register-image {
      background: url('assets/register.png') center center;
      background-size: cover;
    }

    .form-control-user {
      border-radius: 50px;
      padding-left: 20px;
    }

    .btn-primary {
      background-color: #4e73df;
      border: none;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #2e59d9;
    }

    .invalid-feedback {
      font-size: 0.875rem;
      display: block;
      padding-left: 15px;
      color: #e74a3b;
    }
  </style>
</head>

<body>
<div class="container">
  <div class="card o-hidden shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
        <div class="col-lg-7">
          <div class="p-5">
            <div class="text-center mb-4">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" width="80">
              <h1 class="h4 text-gray-900">Buat Akun Anda</h1>
              <p class="text-muted">Isi data di bawah untuk mendaftar ke sistem perpustakaan digital.</p>
            </div>

            <form action="{{ route('register.save') }}" method="POST" class="user">
              @csrf
              <div class="form-group">
                <input name="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror"
                       placeholder="Nama Pengguna" required>
                @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <input name="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                       placeholder="Alamat Email" required>
                @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input name="password" type="password"
                         class="form-control form-control-user @error('password') is-invalid @enderror"
                         placeholder="Password" required>
                  @error('password')
                  <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input name="password_confirmation" type="password"
                         class="form-control form-control-user @error('password_confirmation') is-invalid @enderror"
                         placeholder="Ulangi Password" required>
                  @error('password_confirmation')
                  <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
              </div>

              <button type="submit" class="btn btn-primary btn-user btn-block " style="font-weight:bold; font-size:14px;">Daftar Sekarang</button>
            </form>

            <hr>
            <div class="text-center">
              <a class="small" href="{{ route('login') }}" style="font-weight:bold; font-size:16px;">Sudah punya akun? Login di sini</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>

</body>
</html>
