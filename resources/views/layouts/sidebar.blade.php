<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="position: fixed; z-index: 1030;  top: 0;
    bottom: 0;
    left: 0;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <!-- Add an icon here if needed -->
        </div>

        <div class="sidebar-brand-text">Perpustakaan Digital</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-database"></i>
            <span style="font-weight: bold; font-size:15px;">Data Perpustakaan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('buku.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span style="font-weight: bold; font-size:15px;">Data Buku</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('articles.index') }}">
            <i class="fas fa-newspaper fa-2xm"></i>
            <span style="font-weight: bold; font-size:15px;">Data Artikel</span>
        </a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('buku.anggotas.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span style="font-weight: bold; font-size:15px;">Data Anggota</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pengguna.index') }}">
            <i class="fas fa-user-circle"></i>
            <span style="font-weight: bold; font-size:15px;">List Pengguna</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/profile">
            <i class="fas fa-fw fa-user"></i>
            <span style="font-weight: bold; font-size:15px;">Profil Anda</span>
        </a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
</ul>
