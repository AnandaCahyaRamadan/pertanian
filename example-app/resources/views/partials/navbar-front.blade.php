<!-- Top Utility Bar (Dinas Kementan Style) -->
<div class="topbar-dinas d-none d-lg-block">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-3">
            <span id="wp-date-display">
                <i class="bi bi-calendar3 text-warning me-1"></i> <strong id="current-full-date">Rabu, 24 September 2026</strong>
            </span>
            <span class="text-white-50">|</span>
            <span><i class="bi bi-geo-alt-fill text-warning me-1"></i> Jl. Jend. A. Yani Km.85, Binuang, Kab. Tapin, Kalsel</span>
            <span class="text-white-50">|</span>
            <span><i class="bi bi-envelope-fill text-warning me-1"></i> bbpp.binuang@pertanian.go.id</span>
        </div>
        <div class="d-flex align-items-center gap-3">
            <span><i class="bi bi-clock-fill text-warning me-1"></i> Jam Pelayanan: Senin - Jumat 08:00 - 16:00 WITA</span>
            <div class="d-flex gap-2 ms-2">
                <a href="https://www.facebook.com/humasbbppbinuang" target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/bbppbinuang" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.youtube.com/c/BBPPBinuang" target="_blank" title="YouTube"><i class="bi bi-youtube"></i></a>
                <a href="https://www.tiktok.com/@bbpp.binuang" target="_blank" title="TikTok"><i class="bi bi-tiktok"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Header Logo & Instansi Title Bar -->
<div class="header-dinas-brand">
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
            <a href="{{url('/')}}" class="d-flex align-items-center text-decoration-none gap-3">
                <img src="{{asset('image/bbppbinuang.png')}}" alt="BBPP Binuang Logo">
                <div>
                    <div class="brand-kementan-sub">Kementerian Pertanian Republik Indonesia</div>
                    <div class="brand-bppsdmp-sub">Badan Penyuluhan dan Pengembangan SDM Pertanian</div>
                    <h1 class="brand-instansi-main">BALAI BESAR PELATIHAN PERTANIAN BINUANG</h1>
                </div>
            </a>
            <div class="d-none d-xl-flex align-items-center gap-3">
                <div class="d-flex align-items-center gap-2 px-3 py-2 bg-light border border-2 rounded">
                    <i class="bi bi-headset text-success fs-3"></i>
                    <div>
                        <div class="small fw-bold text-muted" style="font-size: 0.72rem; line-height: 1;">HOTLINE LAYANAN & PENGADUAN</div>
                        <strong class="text-dark" style="font-size: 0.95rem;">(0517) 51234 / 0811-500-1234</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Navbar (Solid Green Kementan Menu) -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top navbar-dinas">
    <div class="container">
        <button class="navbar-toggler border-0 shadow-none py-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> <span class="ms-2 fs-6 fw-bold text-white">MENU UTAMA PORTAL</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{url('/')}}" data-voice="Beranda">
                        <i class="bi bi-house-door-fill me-1"></i> BERANDA
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('profil*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown" data-voice="Profil">
                        <i class="bi bi-building me-1"></i> PROFIL INSTANSI
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('sejarah')}}" data-voice="Sejarah Singkat"><i class="bi bi-clock-history me-2 text-success"></i> Sejarah Singkat</a></li>
                        <li><a class="dropdown-item" href="{{route('visi')}}"><i class="bi bi-compass me-2 text-success"></i> Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="{{route('dasarhukum')}}"><i class="bi bi-shield-check me-2 text-success"></i> Dasar Hukum</a></li>
                        <li><a class="dropdown-item" href="{{route('tugas')}}"><i class="bi bi-list-check me-2 text-success"></i> Tugas dan Fungsi</a></li>
                        <li><a class="dropdown-item" href="{{route('struktur')}}"><i class="bi bi-diagram-3 me-2 text-success"></i> Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="{{route('profil_pejabat')}}"><i class="bi bi-person-badge me-2 text-success"></i> Profil Pimpinan</a></li>
                        <li><a class="dropdown-item" href="{{route('lhkpn')}}"><i class="bi bi-file-earmark-text me-2 text-success"></i> LHKPN-LHKASN</a></li>
                        <li><a class="dropdown-item" href="{{route('sarana')}}"><i class="bi bi-grid me-2 text-success"></i> Sarana Prasarana</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('informasi-program') || Request::is('dokumen-ppid*') || Request::is('infografis-ppid*') || Request::is('kinerja') || Request::is('keuangan') || Request::is('pbj') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown" data-voice="Informasi Publik">
                        <i class="bi bi-info-circle me-1"></i> INFORMASI PUBLIK
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('informasi-program')}}"><i class="bi bi-calendar-check me-2 text-success"></i> Informasi Program</a></li>
                        <li><a class="dropdown-item" href="{{route('kinerja')}}"><i class="bi bi-graph-up-arrow me-2 text-success"></i> Laporan Kinerja</a></li>
                        <li><a class="dropdown-item" href="{{route('keuangan')}}"><i class="bi bi-cash-stack me-2 text-success"></i> Laporan Keuangan</a></li>
                        <li><a class="dropdown-item" href="{{route('infografis-ppid')}}"><i class="bi bi-pie-chart me-2 text-success"></i> PPID Pelayanan Informasi</a></li>
                        <li><a class="dropdown-item" href="{{route('dokumen-ppid')}}"><i class="bi bi-folder2-open me-2 text-success"></i> Dokumen Publik PPID</a></li>
                        <li><a class="dropdown-item" href="{{route('pbj')}}" data-voice="Pengadaan Barang Jasa"><i class="bi bi-cart-check me-2 text-success"></i> Pengadaan Barang & Jasa (PBJ)</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('berita*') ? 'active' : '' }}" href="{{url('berita')}}" data-voice="Berita">
                        <i class="bi bi-newspaper me-1"></i> BERITA & ARTIKEL
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pelatihan*') ? 'active' : '' }}" href="{{url('pelatihan')}}" data-voice="Agenda">
                        <i class="bi bi-calendar3 me-1"></i> AGENDA PELATIHAN
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kontak*') ? 'active' : '' }}" href="{{url('kontak')}}" data-voice="Kontak">
                        <i class="bi bi-telephone me-1"></i> KONTAK KAMI
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Running Text / Warta Ticker Dinas -->
<div class="ticker-bar-dinas d-none d-md-block">
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="ticker-badge-dinas d-flex align-items-center gap-1">
                <i class="bi bi-megaphone-fill"></i> PENGUMUMAN
            </div>
            <div class="ticker-content px-3 py-1 flex-grow-1 overflow-hidden">
                <marquee behavior="scroll" direction="left" scrollamount="5" class="pt-1 text-dark fw-semibold" style="font-size: 0.88rem;">
                    Selamat Datang di Portal Resmi Balai Besar Pelatihan Pertanian (BBPP) Binuang — Mewujudkan SDM Pertanian yang Maju, Mandiri, dan Modern Menuju Indonesia Lumbung Pangan Dunia.
                </marquee>
            </div>
        </div>
    </div>
</div>