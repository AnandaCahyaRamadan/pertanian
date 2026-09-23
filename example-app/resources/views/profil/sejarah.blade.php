@extends('layouts-user.main')

@section('content')

<!-- Header Banner -->
<section class="py-5" style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); border-bottom: 1px solid #bbf7d0;">
    <div class="container text-center">
        <span class="section-badge"><i class="bi bi-clock-history"></i> Rekam Jejak Lembaga</span>
        <h1 class="fw-bold text-dark mt-2 mb-2">Sejarah Singkat</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Perjalanan transformasi Balai Besar Pelatihan Pertanian Binuang dari masa ke masa.
        </p>
    </div>
</section>

{{-- === Info Section === --}}
<section id="info" class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="modern-card p-2 border-0 shadow-sm overflow-hidden">
                    <img src="{{ asset('image/sejarah.jpeg') }}"
                        class="img-fluid rounded-4 w-100"
                        style="max-height: 480px; object-fit: cover;"
                        alt="Gedung BBPP Binuang">
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <div class="modern-card p-4 border-0 shadow-sm bg-light">
                    <h4 class="fw-bold text-dark mb-3"><i class="bi bi-bookmarks-fill text-success me-2"></i> Perjalanan BBPP Binuang</h4>
                    
                    <div class="sejarah-wrapper text-muted" style="text-align: justify; line-height: 1.8; font-size: 0.95rem;">
                        <p>
                            <strong>Balai Besar Pelatihan Pertanian (BBPP) Binuang</strong> merupakan Unit Pelaksana Teknis (UPT) di bawah Badan Penyuluhan dan Pengembangan Sumber Daya Manusia Pertanian (BPPSDMP) Kementerian Pertanian Republik Indonesia.
                        </p>

                        <p>
                            Awal berdiri pada tahun <strong>1952</strong> dengan nama <em>Balai Pendidikan Masyarakat Desa (BPMD)</em>, kemudian pada tahun <strong>1953</strong> bertransformasi menjadi <em>Pusat Kursus Pertanian Kalimantan (PKPK)</em>.
                        </p>

                        <p>
                            Seiring perkembangan pembangunan pertanian dan peningkatan beban tugas, pada tahun <strong>1969</strong> ditingkatkan menjadi <em>Pusat Pengembangan Pertanian</em>. Pada tahun <strong>1975</strong> statusnya kembali meningkat berdasarkan SK Menteri Pertanian Nomor 190/Kpts/Org/5/1975 menjadi <em>Pusat Latihan Pertanian (PLP)</em>. Selanjutnya melalui SK Menteri Pertanian Nomor 52/Kpts/Org/1/1978, fungsinya ditingkatkan menjadi <em>Balai Latihan Pegawai Pertanian (BLPP) Binuang</em>.
                        </p>

                        <p>
                            Fungsi BLPP diperluas menjadi <em>Balai Diklat Pertanian (BDP) Binuang</em> pada tahun <strong>2000</strong>, dan kemudian pada tahun <strong>2002</strong> disesuaikan menjadi <em>Balai Diklat Agribisnis Perkebunan dan Teknologi Pasang Surut (BDAPTPS) Binuang</em>.
                        </p>

                        <p>
                            Melalui Peraturan Menteri Pertanian RI Nomor 18/Permentan/OT.140/2/2007 tanggal 19 Februari 2007, eselonering ditingkatkan menjadi <strong>Eselon II-b</strong> dengan nama <strong>Balai Besar Pelatihan Pertanian (BBPP) Binuang</strong>, dengan mandat wilayah kerja di 5 Provinsi di seluruh Kalimantan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection