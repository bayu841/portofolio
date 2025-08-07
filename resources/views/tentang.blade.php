<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="assets/logo.png" sizes="32x32" type="image/png">
    <title>Tentang Kami</title>
</head>
<body>
    <style>
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html,body {
            justify-content: center;
            align-items: center;
            background-color: #f0f2f5;
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
            .content {
            position: relative;
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            color: white;
            display: flex;
            align-items: center;
            min-height: 80vh;
            margin-bottom: 2rem;
        }

        .about-section {
            display: flex;
            gap: 4rem;
            align-items: center;
        }

        .book-stack {
            position: relative;
            width: 200px;
            height: 150px;
            flex-shrink: 0;
            margin-bottom: 1.9rem;
        }

        .book {
            position: absolute;
            width: 180px;
            height: 40px;
            border-radius: 4px;
            transform-origin: center;
            transition: transform 0.3s ease;
        }

        .text-content {
            flex: 1;
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
            margin-bottom: 2rem;
            font-size: 2.4rem;
            color: #333;
        }
        .text-2{
            margin-left:10rem;
            font-size: 1.7rem;
            color: #494848;
        }
        .p-3{
            margin-left:10rem;
            margin-top: 1rem;
            margin-bottom: 1.5rem;
            font-size: 18px;
            color: #494848;

        }
        .book-image-1{
            width: 350px;
            height: auto;
            margin-bottom: 4rem;
            border-radius: 10px;
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
            .hamburger{
                display: none;
                font-size: 26px;
                cursor: pointer;
            }
        @media(max-width :768px ){
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
            .about-section {
                flex-direction: column;
                text-align: center;
            }
            .text-1,
            .text-2,
            .p-3,
            .read-more {
                margin-left: 0;
            }
            .text-content{
                text-align: justify;
            }

            .book-image-1 {
                padding-right: 14rem;
                margin-top: 2rem;
                width: 240%;
            }
            .box {
                height: 40px;
                padding: 0 10px;
                border-radius: 30px;
                width: 200px;
                margin-left: 3px;
            }

            .welcome-message {
                margin-left: 17px;
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
            form button{
              margin-left: 7px;
              margin-right: 7px;
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
            <form action="{{ route('book') }}" method="GET">
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
        <div class="container">
            <div class="content">
                <div class="about-section">
                <div class="book-stack">
                <div class="book">
                <img src="{{ asset('assets/logo.png') }}" alt="Buku" class="book-image-1">
                </div>
            </div>
                <div class="text-content">
                    <h1 class="text-1">Tentang Kami</h1>
                    <h2 class="text-2">Apa itu Perpustakaan Digital?</h2>
                    <p class="p-3">Perpustakaan Digital adalah sebuah platform yang memungkinkan pengguna untuk membaca buku secara digital, menyediakan akses mudah ke koleksi perpustakaan melalui internet.</p>
                    <a href="{{ asset('assets/tentang.docx') }}" class="read-more">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
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
