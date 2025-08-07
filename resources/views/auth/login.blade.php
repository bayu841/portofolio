<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PerpusDigital - Login</title>
    <link rel="icon" href="assets/logo.png" sizes="32x32" type="image/png">
    <!-- Font & Icons -->
    <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">

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
        .bg-login-image {
            background: url('assets/login.png') center center;
            background-size: cover;
        }
        .btn-primary {
            background-color: #4e73df;
            border: none;
        }
        .btn-primary:hover {
            background-color: #2e59d9;
        }
        .form-control-user {
            border-radius: 50px;
        }
    </style>
</head>

<body>
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center mb-4">
                                    <img src="{{ asset('assets/logo.png') }}" alt="Logo" width="80">
                                    <h1 class="h4 text-gray-900 mt-2">Selamat Datang</h1>
                                    <p>Silahkan login dengan akun anda untuk melanjutkan.</p>
                                </div>

                                <!-- Form Start -->
                                <form action="{{ route('login.action') }}" method="POST" class="user">
                                    @csrf
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control form-control-user"
                                               placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control form-control-user"
                                               placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input name="remember" type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Ingat Saya</label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block" style="font-weight:bold; font-size:14px;">
                                        Login
                                    </button>
                                </form>
                                <!-- Form End -->

                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('register') }}" style="font-weight: bold; font-size:16px;">Belum punya akun? Daftar disini</a>
                                </div>
                            </div>
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
