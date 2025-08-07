<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="assets/logo.png" sizes="32x32" type="image/png">
    <title>Perpustakaan Digital</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html ,body{
            justify-content: center;
            align-items: center;
            background-color: #dbe3e7;
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
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0px 25px;


        }
        input{
            width: 100%;
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

        .main-content {
            display: flex;
            align-items: center;
            padding: 2rem 5%;
            height: 89vh;
            background:url('assets/latarr.png');
            background-size: cover;
            overflow-x: hidden;
        }

        .hero-text {
            max-width: 600px;
        }

        .hero-text h1 {
            color: #233750;
            font-size: 2.7rem;
            margin-bottom: 4rem;
            line-height: 1.2;
            font-weight: 600;
        }

        .cta-button {
            display: inline-block;
            background-color: #4169E1;
            color:  #ffffff;
            padding: 1rem 2rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
            transition: transform 0.3s ease;
        }

        .cta-button:hover {
            transform: translateY(-3px);
        }
        .daftar-buku-section {
            padding: 2rem 5%;
            background-color: #f6f8fa;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            margin-top: 2rem;
        }

        .header h2 {
            font-size: 2rem;
            color: #333;

        }
        .headerh1{
            text-align: center;
        }

        .books-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 100%;
            text-align: left;
        }

        .book-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease;

            box-sizing: border-box;
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
            margin-bottom: 2rem;

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
            background:#2548b1;
        }
        #fitur {
            padding: 50px 20px;
            background-color: #f6f8fa;
            text-align: center;
        }

        #fitur h2 {
            font-size: 2em;
            margin-bottom: 40px;
            color: #333;
        }
        .image{
            margin-top: 2rem;
            margin-left: 6rem;
            margin-right: 6rem;
            align-items:center;
            width: 100%;
            width: 400px;

        }
        .mengapa {
            font-size: 16px;
            line-height: 1.6;
            font-weight: 5 00;
            color: #252525;
            margin-bottom: 10px;
            text-align:start;
            margin-left: 26rem;
        }
        .text-content-3{
            margin-right: 9rem;
            margin-top: 9rem;
        }
        .p-3-1{
           margin-left: 23rem;

        }
        .product-cards {
            display: flex;
            gap: 20px;
            justify-content:center;
            flex-wrap: wrap;
        }

        .product-card {
            background-color: #f9f9f9;
            border-radius: 10px;
            width: 100%;
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
        .facts-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
            padding: 20px;
            border-radius: 20px;
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
                .main-content img {
                    height: auto;
                    display: block;
                    max-width: 10px;
                }
                .books-grid {
                    grid-template-columns: repeat(2, 1fr);
                    text-align: left;
                    width:550px;
                }
                .hamburger {
                    display: block;
                }
                .herobg{
                    width: 50%;
                }
                .hero-text h1 {
                    font-size: 2rem;
                }
                .read-more{
                    margin-left:0.7rem;
                }
                .book-image {
                    width: 190%;
                    margin-top: 2rem;
                    margin-bottom: 2rem;
                }
                .book-image-1 {
                    width: 90%;
                    margin-top: 2rem;
                    margin-bottom: 2rem;
                }
                .welcome-message {
                     margin-left: 17px;
                 }
                .box {
                    height: 40px;
                    padding: 0 10px;
                    border-radius: 30px;
                    width: 200px;
                    margin-left: 6px;
                }
                form button{
                    margin-left: 7px;
                    margin-right: 7px;
                }
                .herobg{
                    display: none;
                }
                .mengapa{
                    margin-left: 2rem;
                }
                .image{
                    margin-left: 2rem;
                }

                .read-btn-1 {
                    width: 40%;
                    padding: 10px;
                    margin-top: 10px;
                    margin-left: 16rem;
                 }
                .footer-col{
                    width: 52%;
                    margin-bottom:30px;
                }
             }
            @media(max-width: 480px) {
                .hero-text h1 {
                    font-size: 1.8rem;
                    margin-bottom: 1.5rem;
                }

                .main-content {
                    width: 60%;
                    padding: 1rem;
                }
                .books-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
                .nav-links {
                    flex-direction: column;
                    gap: 1rem;
                }

                .book-card img {
                    height: 200px;
                }

                .cta-button {
                    width: 100%;
                    padding: 0.8rem;
                }
                .cta-button {
                    width: 100%;
                    padding: 0.8rem;
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
        <div class="main-content">
            <div class="hero-text">
                <h1>Dapatkan Kemudahan membaca Menggunakan Perpustakaan Digital</h1>
                <a href="{{ route('book') }}" class="cta-button">Jelajahi Buku</a>
            </div>
        </div>
        <section>
            <div class="daftar-buku-section" id="buku-favorit">
                <div class="header"><br>
                    <h2 class="header1">Rekomendasi Buku📘</h2>
                </div>
            <div class="books-grid">
                        @foreach ($buku as $b)
                            <div class="book-card">
                                <img src="{{ asset('storage/' . $b->cover_image) }}" alt="{{ $b->judul }}">
                                <div class="book-info">
                                    <h3>{{ $b->judul }}</h3>
                                    <p style="font-size: 16px; color: #2e2e2e; margin-bottom: 10px; font-style: poppins; font-weight:500; text-align:start;">
                                        Penerbit: {{ $b->pengarang }}
                                    </p>
                                    <p>Rata-rata rating⭐:
                                        {{ number_format($b->averageRating() ?? 0, 1) }}

                                    </p>
                                </div>
                                @auth
                                <a href="{{ route('read-book', $b->id) }}" class="read-btn">Mulai Baca</a>
                                @else
                                    <a href="{{ route('login') }}" class="read-btn">Login untuk Membaca</a>
                                @endauth
                                </div>
                                @endforeach
                         </div>
                    </div>
            </section>
    <section id="fitur">
        <h2>Daftar Artikel</h2>
        <div class="product-cards">
            <div class="product-card">
                <img src="{{ asset('assets/berita1.jpeg') }}" alt="Gambar Berita 1" class="product-image">
                <div class="product-info">
                    <h3 class="product-title">Daftar Negara Yang Melarang Deepseek Karena Keamanan</h3>
                    <p class="product-description">Popularitas AI Deepseek asal china mendapat rintangan dari sejumlah negara.
                        Negara-negara seperti Amerika Serikat, Australia, dan Korea Selatan melarang penggunaan Ai tersebut salah satunya karena alasan keamanan.</p>
                    <a href="https://www.cnnindonesia.com/teknologi/20250212105909-185-1197332/deepseek-berbahaya-berikut-daftar-negara-larang-yang-blokir"
                    class="read-more-btn">Baca Selengkapnya</a>
                </div>
            </div>
            <div class="product-card">
                <img src="{{ asset('assets/berita2.jpg') }}" alt="Gambar Berita 2" class="product-image">
                <div class="product-info">
                    <h3 class="product-title">Perpustakaan Nasional Tutup Lebih Cepat akibat Anggaran Dipangkas</h3>
                    <p class="product-description">Kepala Perpusnas RI Aminudin Aziz membenarkan adanya penyesuaian jam operasional karena dampak pemangkasan anggaran sesuai arahan Presiden Prabowo Subianto.
                        (Jumat 7/2/2025)
                    </p>
                    <a href="https://nasional.kompas.com/read/2025/02/07/15344371/perpustakaan-nasional-tutup-lebih-cepat-akibat-anggaran-dipangkas"
                    class="read-more-btn">Baca Selengkapnya</a>
                </div>
            </div>
            <div class="product-card">
                <img src="{{ asset('assets/berita3.avif') }}" alt="Gambar Berita 1" class="product-image">
                <div class="product-info">
                    <h3 class="product-title">Krisis Kesehatan Global:  World Health Organization (WHO) Minta AS Lanjutkan Pendanaan Kesehatan Global</h3>
                    <p class="product-description">Direktur Jenderal WHO, Tedros Adhanom Ghebreyesus, menyatakan bahwa penghentian sementara kontribusi bantuan luar negeri oleh AS telah
                        berdampak serius pada kesehatan global,
                        mengganggu program pemberantasan polio, HIV, dan ancaman kesehatan lainnya. (12/2/2025).</p>
                    <a href="https://health.kompas.com/read/25B13140000068/krisis-kesehatan-global--who-minta-as-lanjutkan-pendanaan-bantuan"
                    class="read-more-btn">Baca Selengkapnya</a>
                </div>
            </div>
            <div class="product-card">
                <img src="{{ asset('assets/berita4.jpg') }}" alt="Gambar Berita 2" class="product-image">
                <div class="product-info">
                    <h3 class="product-title">Kepala Otorita IKN menyebutkan ada enam proyek di IKN dengan skema Kerjasama Pemerintah dan Badan Usaha</h3>
                    <p class="product-description">Basuki mengungkapkan bahwa ada 6 proyek KPBU unsolicited dengan total nilai Rp 60,93 triliun, yang semuanya berbentuk hunian, baik rumah tapak maupun rumah susun/apartemen. Hal ini disampaikan dalam
                        Rapat Dengar Pendapat dengan Komisi II DPR RI pada Rabu (12/02/2025).</p>
                    <a href="https://ikn.kompas.com/read/2025/02/12/200000987/ada-6-proyek-hunian-skema-kpbu-di-ikn-senilai-rp-60-93-triliun"
                    class="read-more-btn">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        </section>
  <section>
        <div class="daftar-buku-section" id="buku-favorit">
            <div class="header">
                <h2 class="header1">Buku Terbaru 📗</h2>
            </div>
        <div class="books-grid">
                    @foreach ($buku as $b)
                        <div class="book-card">
                            <img src="{{ asset('storage/' . $b->cover_image) }}" alt="{{ $b->judul }}">
                            <div class="book-info">
                                <h3>{{ $b->judul }}</h3>
                                <p style="font-size: 16px; color: #2e2e2e; margin-bottom: 10px; font-style: poppins; font-weight:500; text-align:start;">
                                    Penerbit: {{ $b->pengarang }}
                                </p>
                                <p>Rata-rata rating⭐:
                                    {{ number_format($b->averageRating() ?? 0, 1) }}
                                </p>
                            </div>
                            @auth
                            <a href="{{ route('read-book', $b->id) }}" class="read-btn">Mulai Baca</a>
                            @else
                                <a href="{{ route('login') }}" class="read-btn">Login untuk Membaca</a>
                            @endauth
                            </div>
                            @endforeach
                     </div>
                </div>
        </section>
<section id="fitur">
    <div class="image-text-container">
        <img src="{{ asset('assets/mengapa.png') }}" alt="Fitur 1" class="image" style="border-radius: 30px;">
        <h2>Mengapa menggunakan website ini?</h2>
        <p class="mengapa">✅ Kemudahan dalam membaca buku bagi pengguna</p>
        <p class="mengapa">✅ Kemudahan dalam mencari buku sesuai genre dan kategori</p>
        <p class="mengapa">✅ Kemudahan dalam mengakses pelajaran mapel</p>
    </div>
    <br>
    <br>
    <br>
</section>
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
