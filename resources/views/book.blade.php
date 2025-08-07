<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="assets/logo.png" sizes="32x32" type="image/png">
    <title>Daftar - Buku</title>
</head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        html{
            justify-content: center;
            background-color: #f6f8fa;
            align-items: center;
            min-height: 100vh;
            overflow-x: hidden;
            width: 100%;
            height: 100%;
        }

        nav {
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1;
            background-color:#e1e6ee;
            list-style-type: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: #333;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 600;
            margin-top:8px;
        }
        .nav-links a:hover{
            color: #4169E1;
        }

        .menu-toggle {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            width: 30px;
            height: 25px;
            background: transparent;
            border: none;
            cursor: pointer;
        }

        .bar {
            width: 30px;
            height: 4px;
            background-color: #333;
        }
        .box{
            background-color: #f8f7f7ee;
            width: 350px;
            height: 40px;
            border-radius:40px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0px 25px;
            box-sizing: border-box;

        }
        .box button {
            position: absolute;
            right: 24px;
            background: none;
            border: none;
            cursor: pointer;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
        }

        .form-label {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            display: block;
            margin-bottom: 8px;
        }

        .kategori{
            margin-left: 76px;
            margin-bottom: 30px;
            max-width: 300px;

        }
        .col{
            font-size: 20px;
            font-weight: 600;
        }
        .form-select{
            font-weight: 600;
            width: 50%;
            color: #333;
            background-color: #fff;
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
            background-color: #fff;
            transition: border-color 0.3s ease;
        }
        input{
            width: 270px;
            border: none;
            outline: none;
            background: none;
            font-size: 15px;
        }
        .fa-solid:hover{
            color:rgb(47, 83, 202);
            cursor: pointer;
        }
        .auth-buttons {
            display: flex;
            gap: 1rem;
        }

        .auth-buttons a {
            text-decoration: none;
        }

        .login-btn {
            background-color: #4169E1;
            color: #ffffff;
            padding: 0.5rem 1.5rem;
            border-radius: 5px;
            font-weight: bold;
        }

        .daftar-btn {
            color: #4169E1;
            padding: 0.5rem 1.5rem;
            font-weight: 800;
        }
        .books-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            overflow-x: hidden;
        }

        .book-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
            margin-bottom: 3rem;
            margin-right: 2px;
            width: 90%;
        }

        .book-card:hover {
            transform: translateY(-5px);
            transition: transform 0.2s ease;
        }

        .book-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.3s ease;

        }
        .book-card img:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgb(81, 119, 199);
        }

        .book-info {
            padding: 15px;
            margin-bottom: 1px;
        }

        .book-info h3 {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 1rem;

        }

        .book-info p {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
            text-align: center;
        }
        .read-btn {
            display: block;
            width: 100%;
            padding: 12px;
            background: #4169E1;
            color: white;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .read-btn:hover {
            background-color:rgba(28, 64, 100, 0.84);
        }

        .text-content {
            flex: 1;
        }

        h2 {
            font-size: 2.1rem;
            margin-bottom: 1.5rem;
            margin-top: 2rem;
            text-align: center;
            color: #292929;
        }
        .read-more {
            display: inline-block;
            background:rgb(47, 83, 202);
            color: white;
            padding: 0.8rem 2rem;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s ease;
            margin-left: 10rem;
        }

        .read-more:hover {
            background:rgb(42, 59, 168);
        }
        .text-1{
            margin-left:10rem;
        }
        .text-2{
            margin-left:10rem;
        }
        .p-3{
            margin-left:10rem;
            margin-top: 1.1rem;
        }
        .book-image-1{
            width: 300px;
            height: auto;
        }
        form button {
            background-color: #007BFF;
            color: white;
            font-weight: bold;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        form button:hover {
            background-color: #044181;
        }
        .welcome-message {
            font-size: 16px;
            font-weight: bold;
            display: flex;
            align-items: center;
            margin-left: 1rem;
        }

        .welcome-message i {
            margin-right: 5px;
            font-size: 21px;
            color: #333;
        }
        .container{
                max-width: 1170px;
                margin: auto;
            }
            .row{
                display: flex;
                flex-wrap: wrap;
            }
            ul{
                list-style: none;
            }
            .footer{
                background-color:#333e49;
                padding: 70px 0;
            }
            .footer-col{
                width: 25%;
                padding: 0 15px;
            }
            .footer-col h4{
                font-size: 18px;
                color: #ffffff;
                text-transform: capitalize;
                margin-bottom: 30px;
                font-weight: 500;
                position: relative;
            }
            .footer-col h4::before{
                content: '';
                position: absolute;
                left: 0;
                bottom: -10px;
                background-color: #beccd6;
                height: 2px;
                box-sizing: border-box;
                width: 50px;
            }
            .footer-col ul li:not(:last-child){
                margin-bottom: 10px;
            }
            .footer-col ul li a{
                font-size: 16px;
                text-transform: capitalize;
                color: #ffffff;
                text-decoration: none;
                font-weight: 300;
                color: #bbbbbb;
                display: block;
                transition: all 0.3s ease;
            }
            .footer-col ul li a::hover{
                color: #ffffff;
                padding-left: 8px;
            }
            .footer-col .social-links a{
                display: inline-block;
                height: 40px;
                width: 40px;
                background-color:rgba(255,255,255,0.2);
                margin:0 10px 10px 0;
                text-align: center;
                line-height: 40px;
                border-radius: 50%;
                color: #ffffff;
                transition: all 0.5s ease;
            }
            .footer-col .social-links a:hover{
                color: #24262b;
                background-color:#ffffff;
            }
            .contact-info i {
                color: #dbdbdb;
                margin-right: 10px;
                margin-bottom: 5px;
            }
            .contact-info p {
                margin: 5px 0;
                font-size:14px;
                color: #bbbbbb;
                text-align:start;
                margin-bottom: 9px;
            }
            .hamburger {
                display: none;
                font-size: 26px;
                cursor: pointer;
            }
            .star-rating input:checked ~ label,
            .star-rating label:hover,
            .star-rating label:hover ~ label {
                color: gold !important;
            }

    @media (max-width: 768px) {
        .nav-links {
                display: none;
                flex-direction: column;
                gap: 24px;
                width: 100%;
                background-color: #e1e6ee;
                position: absolute;
                top: 63px;
                left: 0;
                right: 0;
                text-align: start;
            }
            .nav-links a{
                margin-left: 1rem;
            }
            .hamburger{
                display: block;
            }
            .box {
                height: 40px;
                padding: 0 10px;
                border-radius: 30px;
                width: 200px;
                margin-left: 3px;
            }

            .nav-links.active {
                display: flex;
            }
            .hamburger{
                display: block;
                margin-right: 4px;
            }

            .books-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 15px;
            }
            .kategori{
                margin-left: 1rem;
            }
            .book-card {
                width: 95%;
                margin-left: 10px;
            }

            .read-more {
                margin-left: 0;
                text-align: center;
            }

            .text-1, .text-2, .p-3 {
                margin-left: 0;
            }
            .welcome-message {
                margin-left: 17px;
             }
            .book-image-1 {
                width: 100%;
            }
            .footer-col{
                width: 52%;
                margin-bottom:30px;
            }
            .herobg{
                display: none;
            }
            form button{
              margin-left: 7px;
              margin-right: 7px;
            }

        }
        @media (max-width: 480px) {
            .nav-links {
                display: none;
                flex-direction: column;
                gap: 1rem;
                width: 100%;
                background-color: #e1e6ee;
                position: absolute;
                top: 60px;
                left: 0;
                padding: 1rem 0;
                text-align: center;
            }
            .nav-links a {
                padding: 0.8rem;
                font-size: 1.2rem;
                width: 100%;
                display: block;
            }
            .books-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .book-card {
                width: 100%;
            }

            .read-more {
                margin-left: 0;
                text-align: center;
            }

            .text-1, .text-2, .p-3 {
                margin-left: 0;
            }

            .book-image-1 {
                width: 100%;
            }
            .footer-col{
                width: 100%;
            }
        }
    </style>
    <body>
        <nav>
            <div class="hamburger" onclick="toggleMenu()">☰</div>
            <div class="nav-links" id="navLinks">
                <img src="{{asset('assets/logos.png')}}" alt="" style="width: 190px;" class="herobg">
            <a href="{{ route('index') }}">BERANDA</a>
            <a href="{{ route('book') }}">BUKU</a>
            <a href="{{ route('artikel') }}">ARTIKEL</a>
            <a href="{{ route('tentang') }}">TENTANG</a>
            </div>
            <form action="{{ route('books') }}" method="GET">
                <div class="box">
                    <input type="text" name="search" placeholder="Cari Buku..." value="{{ request('search') }}"
                        style="border: none; outline: none; padding: 2px; flex: 1;">
                    <button type="submit" style="background: none; border: none; padding: 8px; cursor: pointer;">
                        <i class="fa-solid fa-magnifying-glass" style="color: #333; padding-left:2rem; width:30px;"></i>
                    </button>
                </div>
            </div>
        </form>
        @auth
        <div class="navbar">
            <span class="welcome-message">
                <i class="fas fa-user-circle"></i>{{ Auth::user()->name }}
            </span>
        </div>
        @endauth
        @guest
        <div class="auth-buttons">
            <a href="{{ route('register') }}" class="daftar-btn">Daftar</a>
            <a href="{{ route('login') }}" class="login-btn">Login</a>
        </div>
        @endguest
        @if(Auth::check())
        <li>
      <form action="{{ route('logout') }}" method="POST" style="display:inline; margin: 0; padding: 0;">
          @csrf
          <button type="submit" class="btn btn-danger">Logout</button>
      </form>
      </li>
      @if(Auth::user()->isAdmin())
          <a href="{{ route('dashboard') }}" class="btn btn-primary" style="display:inline; margin: 0; padding: 0;">
              <i class="fas fa-chart-bar fa-2" style="color: #1b6a97; font-size:23px; margin-top:5px; margin-left:3px;"></i>
          </a>
      @endif
  @endif
    </nav>
        <br>
        <form method="GET" action="{{ route('buku.kategori') }}">
            <div class="kategori">
                <div class="col">
                    <label for="kategori" class="form-label" style="margin-top:6px;">Kategori Buku</label>
                    <select name="kategori" id="kategori" class="form-select" required onchange="this.form.submit()">
                        <option value="">Pilih Kategori</option>
                        <option value="novel" {{ request('kategori') == 'novel' ? 'selected' : '' }}>Novel</option>
                        <option value="buku_cerita" {{ request('kategori') == 'buku_cerita' ? 'selected' : '' }}>Buku Cerita</option>
                        <option value="fiksi" {{ request('kategori') == 'fiksi' ? 'selected' : '' }}>Fiksi</option>
                        <option value="pendidikan" {{ request('kategori') == 'pendidikan' ? 'selected' : '' }}>Pendidikan</option>
                        <option value="non_fiksi" {{ request('kategori') == 'non_fiksi' ? 'selected' : '' }}>Non Fiksi</option>
                    </select>
                </div>
            </div>
        </form>
        @if (isset($message))
        <div class="alert alert-warning" role="alert" style="text-align:center; margin-bottom:11rem; margin-top:8rem; font-size:18px;">
            {{ $message }}
        </div>
    @endif
        <section>
        <div class="books-grid">
            @foreach ($buku as $buku)
                <div class="book-card">
                    <img src="{{ asset('storage/' . $buku->cover_image) }}" alt="{{ $buku->judul }}">
                    <div class="book-info">
                        <h3>{{ $buku->judul }}</h3>
                        <p style="font-size: 16px; color: #2e2e2e; margin-bottom: 10px; font-style: poppins; font-weight:500; text-align:start;">
                            Penerbit: {{ $buku->pengarang }}
                        </p>
                        <p>Rata-rata rating⭐:
                            {{ number_format($buku->averageRating(), 1) ?? 'Belum ada rating' }}
                        </p>
                        @auth
                        @if(Auth::user()->role === 'user')
                            <form action="{{ route('buku.rating', $buku->id) }}" method="POST" class="rating-comment-form" style="margin-top: 15px;">
                                @csrf
                                <label for="rating">Beri Rating:</label><br>
                                <div class="star-rating" style="direction: rtl; display: inline-flex; font-size: 1.5rem;">
                                    @for ($i = 5; $i >= 1; $i--)
                                        <input type="radio" id="star{{ $i }}-{{ $buku->id }}" name="rating" value="{{ $i }}" required style="display: none;">
                                        <label for="star{{ $i }}-{{ $buku->id }}" style="color: lightgray; cursor: pointer; margin: 0 2px;">&#9733;</label>
                                    @endfor
                                </div>
                                <br>
                                <button type="submit" style="padding: 5px 10px; background-color: #007bff; color: white; border: none; border-radius: 5px;">
                                    Kirim Ulasan
                                </button>
                            </form>
                        @endif
                    @endauth
                    </div>
                    @auth
                    <a href="{{ route('read-book', $buku->id) }}" class="read-btn">Mulai Baca</a>

                    @else
                        <a href="{{ route('login') }}" class="read-btn">Login untuk Membaca</a>
                    @endauth
                </div>
            @endforeach
          </section>
        </div>
        <br>
        <br>
        <br>
        <br>
        <section>
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col">
                            <h4>Tautan Cepat</h4>
                            <ul>
                                <li><a href="{{route('index')}}">Beranda</a></li>
                                <li><a href="{{route('book')}}">Buku</a></li>
                                <li><a href="{{route('artikel')}}">Artikel</a></li>
                                <li><a href="{{route('tentang')}}">Tentang</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>Get Help</h4>
                            <ul>
                                <li><a href="">FAQ</a></li>
                                <li><a href="">Shipping</a></li>
                                <li><a href="">order status</a></li>
                                <li><a href="">payment option</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>Informasi Kontak</h4>
                            <div class="contact-info">
                                <p><i class="fas fa-map-marker-alt"></i>JL. PB. SUDIRMAN NO. 114 TANGGUL-JEMBER, Tanggul Kulon, Kec. Tanggul, Kab. Jember Prov. Jawa Timur</p>
                                <p><i class="fas fa-phone-alt"></i>	0336441347</p>
                                <p><i class="fas fa-envelope"></i>smkn6.jember@yahoo.com</p>
                              </div>
                        </div>
                        <div class="footer-col">
                            <h4>Follow Us</h4>
                           <div class="social-links">
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin"></i></a>
                           </div>
                        </div>

                    </div>
                </div>
            </footer>
        </div>
    </section>
    <script>
        function toggleMenu() {
            var nav = document.getElementById("navLinks");
            if (nav.style.display === "flex") {
                nav.style.display = "none";
            } else {
                nav.style.display = "flex";
                nav.style.flexDirection = "column";
            }
        }
    </script>
</body>
</html>
