<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="assets/logo.png" sizes="32x32" type="image/png">
    <title>Daftar - Artikel</title>
</head>
<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html{
            justify-content: center;
            align-items: center;
            background-color: #f6f8fa;
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
            background-color: #e1e6ee;
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
            margin-top: 8px;
        }

        .nav-links a:hover {
            color: #4169E1;
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
        input {
            width: 270px;
            border: none;
            outline: none;
            background: none;
            font-size: 15px;
        }

        .fa-solid:hover {
            color: rgb(47, 83, 202);
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

        .fitur {
            padding: 50px 20px;
            background-color: #f6f8fa;
            text-align: center;
        }

        .fitur h2 {
            font-size: 2em;
            margin-bottom: 40px;
            color: #333;
            margin-top: 10px;
        }

        .product-cards {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .product-card {
            background-color: #fcfcfc;
            border-radius: 10px;
            width: 500px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-info {
            padding: 15px;
        }

        .product-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-description {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }

        .read-more-btn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #4169E1;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .read-more-btn:hover {
            background-color: #0056b3;
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
                margin-top:3rem;
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
            .hamburger{
                display: none;
                font-size: 26px;
                cursor: pointer;
            }

            @media(max-width:768px){
            .nav-links {
                display: none;
                flex-direction: column;
                gap: 2px;
                width: 100%;
                background-color: #e1e6ee;
                position: absolute;
                top: 60px;
                left: 0;
                right: 0;
                text-align: start;
            }
            form button{
              margin-left: 7px;
              margin-right: 7px;
            }

            .welcome-message {
                margin-left: 17px;
            }
            .nav-links a {
                padding: 0.8rem;
                font-size: 1.2rem;
                width: 100%;
                display: block;
            }
            .footer-col{
                width: 52%;
                margin-bottom:30px;
            }
            .hamburger{
                display: block;
                margin-right: 4px;
            }
            .herobg{
                display: none;
            }
            .box {
                height: 40px;
                padding: 0 10px;
                border-radius: 30px;
                width: 200px;
                margin-left: 3px;
            }
        }
    </style>
          <nav>
            <div class="hamburger" onclick="toggleMenu()">☰</div>
            <div class="nav-links" id="navLinks">
                <img src="{{asset('assets/logos.png')}}" alt="" style="width: 190px;" class="herobg">
            <a href="{{ route('index') }}">BERANDA</a>
            <a href="{{ route('book') }}">BUKU</a>
            <a href="{{ route('artikel') }}">ARTIKEL</a>
            <a href="{{ route('tentang') }}">TENTANG</a>
            </div>
            <form action="{{ route('artikel') }}" method="GET">
                <div class="box">
                    <input type="text" name="search" placeholder="Cari Artikel..." value="{{ request('search') }}"
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
    <section class="fitur">
        <h2 style="text-align: center; margin-right:20px;">Daftar Artikel</h2>
        <div class="product-cards">
            @foreach ($articles as $article)
            <div class="product-card">

                @if($article->cover_article)
                    <img src="{{ asset('storage/' . $article->cover_article) }}" alt="{{ $article->judul }}" class="product-image">
                @else
                    <img src="{{ asset('images/default_cover.jpg') }}" alt="Default Cover" class="product-image">

                @endif

                <div class="product-info">
                    <h3 class="product-title">{{ $article->judul }}</h3>
                    <p class="product-description">
                        {{ Str::limit($article->deskripsi, 600) }}
                    </p>
                    <a href="{{ asset($article->link) }}" target="_blank" class="read-more-btn">Baca Artikel</a>
                </div>
            </div>
            @endforeach
        </div>
        <br>
    </section>
    @if (isset($message))
    <div class="alert alert-warning" role="alert" style="text-align:center; margin-bottom:11rem; margin-top:2rem; font-size:18px;">
        {{ $message }}
    </div>
@endif
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
