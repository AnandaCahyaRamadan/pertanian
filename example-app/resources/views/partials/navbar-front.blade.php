<!-- Top Utility Bar -->
<div class="topbar-info d-none d-lg-block">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-3">
            <span><i class="bi bi-geo-alt-fill text-warning me-1"></i> Binuang, Kab. Tapin, Kalimantan Selatan</span>
            <span><i class="bi bi-envelope-fill text-warning me-1"></i> bbpp.binuang@pertanian.go.id</span>
        </div>
        <div class="d-flex align-items-center gap-3">
            <span><i class="bi bi-clock-fill text-warning me-1"></i> Pelayanan: Senin - Jumat 08:00 - 16:00</span>
            <div class="d-flex gap-2 ms-2">
                <a href="https://www.facebook.com/humasbbppbinuang" target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/bbppbinuang" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.youtube.com/c/BBPPBinuang" target="_blank" title="YouTube"><i class="bi bi-youtube"></i></a>
                <a href="https://www.tiktok.com/@bbpp.binuang" target="_blank" title="TikTok"><i class="bi bi-tiktok"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Main Navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top navbar-bbpp">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{url('/')}}">
            <img src="{{asset('image/bbppbinuang.png')}}" alt="BBPP Binuang Logo">
        </a>
        <button class="navbar-toggler border-0 shadow-none p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list fs-2 text-success"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{url('/')}}" data-voice="Beranda">
                        <i class="bi bi-house-door me-1 d-lg-none"></i> Beranda
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('profil*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown" data-voice="Profil">
                        <i class="bi bi-building me-1 d-lg-none"></i> Profil
                    </a>
                    <ul class="dropdown-menu shadow">
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
                    <a class="nav-link dropdown-toggle {{ Request::is('informasi-program') || Request::is('dokumen-ppid*') || Request::is('infografis-ppid*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown" data-voice="Informasi Publik">
                        <i class="bi bi-info-circle me-1 d-lg-none"></i> Informasi Publik
                    </a>
                    <ul class="dropdown-menu shadow">
                        <li><a class="dropdown-item" href="{{route('informasi-program')}}"><i class="bi bi-calendar-check me-2 text-success"></i> Informasi Program</a></li>
                        <li><a class="dropdown-item" href="{{route('kinerja')}}"><i class="bi bi-graph-up-arrow me-2 text-success"></i> Kinerja</a></li>
                        <li><a class="dropdown-item" href="{{route('keuangan')}}"><i class="bi bi-cash-stack me-2 text-success"></i> Keuangan</a></li>
                        <li><a class="dropdown-item" href="{{route('infografis-ppid')}}"><i class="bi bi-pie-chart me-2 text-success"></i> PPID</a></li>
                        <li><a class="dropdown-item" href="{{route('dokumen-ppid')}}"><i class="bi bi-folder2-open me-2 text-success"></i> Dokumen PPID</a></li>
                        <li><a class="dropdown-item" href="{{route('pbj')}}" data-voice="Pengadaan Barang Jasa"><i class="bi bi-cart-check me-2 text-success"></i> Pengadaan Barang & Jasa</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('berita*') ? 'active' : '' }}" href="{{url('berita')}}" data-voice="Berita">
                        <i class="bi bi-newspaper me-1 d-lg-none"></i> Berita
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('pelatihan*') ? 'active' : '' }}" href="{{url('pelatihan')}}" data-voice="Agenda">
                        <i class="bi bi-calendar3 me-1 d-lg-none"></i> Agenda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kontak*') ? 'active' : '' }}" href="{{url('kontak')}}" data-voice="Kontak">
                        <i class="bi bi-telephone me-1 d-lg-none"></i> Kontak
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>