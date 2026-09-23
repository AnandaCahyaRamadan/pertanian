<footer>
  <div class="container">
    <div class="row g-4">
        <!-- Kolom Tentang Kami -->
        <div class="col-lg-4 col-md-6 mb-4">
            <h5>Tentang Kami</h5>
            <div class="d-flex justify-content-start align-items-center mt-2 mb-3 flex-wrap gap-2">
                <div class="footer-logo-badge">
                    <img src="{{ asset('image/kementan.png') }}" alt="Kementan" style="height: 32px;">
                </div>
                <div class="footer-logo-badge">
                    <img src="{{ asset('image/bppsdmp.png') }}" alt="BPPSDMP" style="height: 32px;">
                </div>
                <div class="footer-logo-badge">
                    <img src="{{ asset('image/melyani.png') }}" alt="Melayani" style="height: 32px;">
                </div>
                <div class="footer-logo-badge">
                    <img src="{{ asset('image/berakhlak.png') }}" alt="Berakhlak" style="height: 32px;">
                </div>
            </div>
            <div class="text-white-50 small pe-lg-3" style="line-height: 1.7;">
                {!! $footer->desc ?? 'Balai Besar Pelatihan Pertanian (BBPP) Binuang berkomitmen meningkatkan kapasitas SDM Pertanian di Indonesia.' !!}
            </div>
            <div class="mt-4">
                <a href="https://www.facebook.com/humasbbppbinuang/?locale=id_ID" target="_blank" class="social-icon-btn" title="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/bbppbinuang" target="_blank" class="social-icon-btn" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.tiktok.com/@bbpp.binuang" target="_blank" class="social-icon-btn" title="TikTok"><i class="bi bi-tiktok"></i></a>
                <a href="https://www.youtube.com/c/BBPPBinuang" target="_blank" class="social-icon-btn" title="YouTube"><i class="bi bi-youtube"></i></a>
            </div>
        </div>

        <!-- Kolom Menu Navigasi -->
        <div class="col-lg-2 col-md-6 mb-4">
            <h5>Navigasi</h5>
            <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                <li><a href="{{url('')}}" class="d-flex align-items-center"><i class="fas fa-angle-right me-2 text-success small"></i> Beranda</a></li>
                <li><a href="{{url('berita')}}" class="d-flex align-items-center"><i class="fas fa-angle-right me-2 text-success small"></i> Berita & Artikel</a></li>
                <li><a href="{{url('pelatihan')}}" class="d-flex align-items-center"><i class="fas fa-angle-right me-2 text-success small"></i> Agenda Kegiatan</a></li>
                <li><a href="{{url('dokumen-ppid')}}" class="d-flex align-items-center"><i class="fas fa-angle-right me-2 text-success small"></i> Dokumen PPID</a></li>
                <li><a href="{{url('infografis-ppid')}}" class="d-flex align-items-center"><i class="fas fa-angle-right me-2 text-success small"></i> Infografis PPID</a></li>
                <li><a href="{{url('kontak')}}" class="d-flex align-items-center"><i class="fas fa-angle-right me-2 text-success small"></i> Kontak Kami</a></li>
            </ul>
        </div>

        <!-- Kolom Lokasi -->
        <div class="col-lg-3 col-md-6 mb-4">
            <h5>Lokasi Kantor</h5>
            <div class="rounded-4 overflow-hidden shadow-sm border border-white-50" style="height: 190px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7720490522925!2d115.08673019999998!3d-3.1547122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de5c8a25aae02d3%3A0xa98e801841821528!2sBBPP%20Binuang!5e0!3m2!1sid!2sid!4v1761189053507!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <p class="small text-white-50 mt-2 mb-0">
                <i class="bi bi-geo-alt me-1 text-warning"></i> Jl. Jend. A. Yani Km.85, Binuang, Kab. Tapin, Kalsel
            </p>
        </div>

        <!-- Kolom Statistik Pengunjung -->
        <div class="col-lg-3 col-md-6 mb-4">
            <h5>Statistik Pengunjung</h5>
            <div class="footer-stat-box">
                <div class="footer-stat-item d-flex justify-content-between align-items-center">
                    <span class="small text-white-50"><i class="bi bi-calendar2-week me-1 text-success"></i> Minggu Ini</span>
                    <span class="fw-bold text-white">{{ number_format($mingguIni ?? 0) }}</span>
                </div>
                <div class="footer-stat-item d-flex justify-content-between align-items-center">
                    <span class="small text-white-50"><i class="bi bi-calendar2-month me-1 text-success"></i> Bulan Ini</span>
                    <span class="fw-bold text-white">{{ number_format($bulanIni ?? 0) }}</span>
                </div>
                <div class="footer-stat-item d-flex justify-content-between align-items-center">
                    <span class="small text-white-50"><i class="bi bi-calendar2 me-1 text-success"></i> Tahun Ini</span>
                    <span class="fw-bold text-white">{{ number_format($tahunIni ?? 0) }}</span>
                </div>
                <div class="footer-stat-item d-flex justify-content-between align-items-center bg-white bg-opacity-10 rounded-3 p-2 mt-2">
                    <span class="small fw-semibold text-warning"><i class="bi bi-people-fill me-1"></i> Total Pengunjung</span>
                    <span class="fw-bold text-warning fs-6">{{ number_format($total ?? 0) }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom text-center">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <p class="mb-0" id="c">© BBPP Binuang</p>
            <p class="mb-0 small text-white-50">Kementerian Pertanian Republik Indonesia</p>
        </div>
    </div>
  </div>
</footer>
