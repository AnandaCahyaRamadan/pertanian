<nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container pt-1 pb-1">
        <a class="navbar-brand" href="#"><img src="{{ asset('image/binuang.png') }}" alt="" style="width: 150px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav me-3">
            <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('pelatihan') || Request::is('skema-sertifikasi')  ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Pelatihan</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/pelatihan">Pelatihan Aparatun & Nonaparatur</a></li>
                    <li><a class="dropdown-item" href="/skema-sertifikasi">Lembaga Sertifikasi Profesi</a></li>
                </ul>
            </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('program-dan-kerjasama') || Request::is('sarana-dan-prasarana')  ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">Kerja Sama</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/program-dan-kerjasama">Program dan Kerjasama</a></li>
                    <li><a class="dropdown-item" href="/sarana-dan-prasarana">Sarana dan Prasarana</a></li>
                </ul>
            </li>
            </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('infografis-ppid') || Request::is('dokumen-ppid')  ? 'active' : '' }}" href="#" data-bs-toggle="dropdown">PPID</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/infografis-ppid">Infografis</a></li>
                    <li><a class="dropdown-item" href="/dokumen-ppid">Dokumen PPID</a></li>
                </ul>
            </li>
            {{-- <li class="nav-item"><a class="nav-link" href="#">Program dan Anggaran</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Peta</a></li> --}}
            <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
        </ul>
        </div>
    </div>
</nav>