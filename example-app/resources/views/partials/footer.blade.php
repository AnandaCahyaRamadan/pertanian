<footer class="dinas-footer">
  <div class="container">
    <div class="row g-4">
        <!-- Kolom 1: Profil Instansi & Logo Resmi -->
        <div class="col-lg-4 col-md-6 mb-4">
            <h5>BBPP Binuang</h5>
            <div class="d-flex justify-content-start align-items-center mt-1 mb-3 flex-wrap gap-2">
                <div class="bg-white p-1 rounded shadow-sm">
                    <img src="{{ asset('image/kementan.png') }}" alt="Kementan RI" style="height: 32px;">
                </div>
                <div class="bg-white p-1 rounded shadow-sm">
                    <img src="{{ asset('image/bppsdmp.png') }}" alt="BPPSDMP" style="height: 32px;">
                </div>
                <div class="bg-white p-1 rounded shadow-sm">
                    <img src="{{ asset('image/melyani.png') }}" alt="Bangga Melayani Bangsa" style="height: 32px;">
                </div>
                <div class="bg-white p-1 rounded shadow-sm">
                    <img src="{{ asset('image/berakhlak.png') }}" alt="BerAKHLAK" style="height: 32px;">
                </div>
            </div>
            <div class="text-white-50 small pe-lg-3" style="line-height: 1.75;">
                {!! $footer->desc ?? 'Balai Besar Pelatihan Pertanian (BBPP) Binuang adalah Unit Pelaksana Teknis (UPT) Eselon II-b di bawah Badan Penyuluhan dan Pengembangan SDM Pertanian, Kementerian Pertanian Republik Indonesia.' !!}
            </div>
            <div class="mt-3 d-flex gap-2">
                <a href="https://www.facebook.com/humasbbppbinuang/?locale=id_ID" target="_blank" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/bbppbinuang" target="_blank" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.tiktok.com/@bbpp.binuang" target="_blank" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="TikTok"><i class="bi bi-tiktok"></i></a>
                <a href="https://www.youtube.com/c/BBPPBinuang" target="_blank" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="YouTube"><i class="bi bi-youtube"></i></a>
            </div>
        </div>

        <!-- Kolom 2: Tautan Menu Navigasi -->
        <div class="col-lg-2 col-md-6 mb-4">
            <h5>Tautan Cepat</h5>
            <ul class="list-unstyled d-flex flex-column gap-2 mb-0 small">
                <li><a href="{{url('')}}" class="d-flex align-items-center"><i class="bi bi-chevron-right me-2 text-warning"></i> Beranda Utama</a></li>
                <li><a href="{{route('sejarah')}}" class="d-flex align-items-center"><i class="bi bi-chevron-right me-2 text-warning"></i> Profil Balai</a></li>
                <li><a href="{{url('berita')}}" class="d-flex align-items-center"><i class="bi bi-chevron-right me-2 text-warning"></i> Berita & Warta</a></li>
                <li><a href="{{url('pelatihan')}}" class="d-flex align-items-center"><i class="bi bi-chevron-right me-2 text-warning"></i> Agenda Pelatihan</a></li>
                <li><a href="{{url('dokumen-ppid')}}" class="d-flex align-items-center"><i class="bi bi-chevron-right me-2 text-warning"></i> Layanan PPID</a></li>
                <li><a href="{{url('kontak')}}" class="d-flex align-items-center"><i class="bi bi-chevron-right me-2 text-warning"></i> Hubungi Kami</a></li>
            </ul>
        </div>

        <!-- Kolom 3: Alamat Kantor & Peta -->
        <div class="col-lg-3 col-md-6 mb-4">
            <h5>Kantor Pelayanan</h5>
            <div class="rounded overflow-hidden border border-secondary mb-2" style="height: 140px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7720490522925!2d115.08673019999998!3d-3.1547122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de5c8a25aae02d3%3A0xa98e801841821528!2sBBPP%20Binuang!5e0!3m2!1sid!2sid!4v1761189053507!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <p class="small text-white-50 mb-1">
                <i class="bi bi-geo-alt-fill text-warning me-1"></i> Jl. Jend. A. Yani Km.85, Kec. Binuang, Kab. Tapin, Prov. Kalimantan Selatan 71183
            </p>
            <p class="small text-white-50 mb-0">
                <i class="bi bi-telephone-fill text-warning me-1"></i> Telp: (0517) 51234
            </p>
        </div>

        <!-- Kolom 4: Statistik Pengunjung Web -->
        <div class="col-lg-3 col-md-6 mb-4">
            <h5>Statistik Pengunjung</h5>
            <div class="bg-black bg-opacity-25 p-3 rounded border border-white border-opacity-10">
                <div class="d-flex justify-content-between align-items-center pb-2 mb-2 border-bottom border-secondary border-opacity-25 small">
                    <span class="text-white-50"><i class="bi bi-calendar-event me-1 text-warning"></i> Minggu Ini:</span>
                    <strong class="text-white">{{ number_format($mingguIni ?? 0) }}</strong>
                </div>
                <div class="d-flex justify-content-between align-items-center pb-2 mb-2 border-bottom border-secondary border-opacity-25 small">
                    <span class="text-white-50"><i class="bi bi-calendar-month me-1 text-warning"></i> Bulan Ini:</span>
                    <strong class="text-white">{{ number_format($bulanIni ?? 0) }}</strong>
                </div>
                <div class="d-flex justify-content-between align-items-center pb-2 mb-2 border-bottom border-secondary border-opacity-25 small">
                    <span class="text-white-50"><i class="bi bi-calendar-check me-1 text-warning"></i> Tahun Ini:</span>
                    <strong class="text-white">{{ number_format($tahunIni ?? 0) }}</strong>
                </div>
                <div class="d-flex justify-content-between align-items-center pt-1 small">
                    <span class="fw-bold text-warning"><i class="bi bi-people-fill me-1"></i> Total Kunjungan:</span>
                    <strong class="text-warning fs-6">{{ number_format($total ?? 0) }}</strong>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="dinas-footer-bottom">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
        <p class="mb-0" id="c">© Balai Besar Pelatihan Pertanian Binuang</p>
        <p class="mb-0 small text-white-50">Kementerian Pertanian Republik Indonesia — Badan Penyuluhan dan Pengembangan SDM Pertanian</p>
    </div>
  </div>
</footer>
