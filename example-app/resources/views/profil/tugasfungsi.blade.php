@extends('layouts-user.main')

@section('content')

<!-- Header Banner -->
<section class="py-5" style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); border-bottom: 1px solid #bbf7d0;">
    <div class="container text-center">
        <span class="section-badge"><i class="bi bi-list-check"></i> Tugas Pokok & Fungsi</span>
        <h1 class="fw-bold text-dark mt-2 mb-2">Tugas dan Fungsi</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Tugas dan fungsi pokok Balai Besar Pelatihan Pertanian Binuang berdasarkan Peraturan Menteri Pertanian.
        </p>
    </div>
</section>

{{-- === Info Section === --}}
<section id="info" class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-start g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="modern-card p-2 border-0 shadow-sm overflow-hidden sticky-top" style="top: 100px;">
                    <img src="{{ asset('image/tugasfungsi.jpeg') }}"
                        class="img-fluid rounded-4 w-100"
                        alt="Tugas dan Fungsi BBPP Binuang">
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <div class="modern-card p-4 border-0 shadow-sm bg-light">
                    <h5 class="fw-bold text-dark mb-3">
                        <i class="bi bi-check2-square text-success me-2"></i> Mandat Penyelenggaraan Fungsi Lembaga
                    </h5>
                    <p class="text-muted small mb-4" style="line-height: 1.7;">
                        Dalam melaksanakan tugasnya sebagaimana diatur dalam <strong>Peraturan Menteri Pertanian Nomor : 104/Permentan/OT.140/10/2013</strong>, BBPP Binuang menyelenggarakan fungsi-fungsi strategis sebagai berikut:
                    </p>

                    <div class="d-flex flex-column gap-2">
                        @php
                            $functions = [
                                "Penyusunan program, rencana kerja, anggaran, dan pelaksanaan kerja sama.",
                                "Pelaksanaan identifikasi kebutuhan pelatihan.",
                                "Pelaksanaan penyusunan bahan Standar Kompetensi Kerja (SKK) di bidang pertanian.",
                                "Pelaksanaan pelatihan fungsional di bidang pertanian bagi aparatur.",
                                "Pelaksanaan pelatihan teknis di bidang perkebunan dan teknologi lahan pasang surut bagi aparatur dan nonaparatur pertanian dalam dan luar negeri.",
                                "Pelaksanaan pelatihan profesi di bidang perkebunan dan teknologi lahan pasang surut bagi aparatur dan nonaparatur.",
                                "Pelaksanaan unit kompetensi di bidang pertanian.",
                                "Pelaksanaan penyusunan paket pembelajaran dan media pelatihan fungsional dan teknis di bidang pertanian.",
                                "Pengembangan model dan teknik pelatihan fungsional dan teknis di bidang perkebunan dan teknologi lahan pasang surut.",
                                "Pelaksanaan pengembangan kelembagaan pelatihan pertanian swadaya.",
                                "Pelaksanaan pemberian konsultasi di bidang pertanian.",
                                "Pelaksanaan bimbingan lanjutan pelatihan di bidang pertanian bagi aparatur dan nonaparatur.",
                                "Pelaksanaan pemberian pelayanan penyelenggaraan pelatihan fungsional bagi aparatur, pelatihan teknis dan profesi, serta pengembangan model dan teknik pelatihan fungsional dan teknis di bidang pertanian bagi aparatur dan nonaparatur.",
                                "Pengelolaan unit inkubator usahatani.",
                                "Pelaksanaan pemantauan dan evaluasi pelatihan di bidang pertanian.",
                                "Pelaksanaan data dan informasi pelatihan serta pelaporan.",
                                "Pelaksanaan pengelolaan sarana teknis.",
                                "Pengelolaan urusan kepegawaian, keuangan, rumah tangga, perlengkapan, dan instalasi BBPP Binuang."
                            ];
                        @endphp

                        @foreach($functions as $idx => $func)
                        <div class="d-flex align-items-start gap-3 p-3 bg-white rounded-3 border">
                            <span class="badge bg-success rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 26px; height: 26px; font-size: 0.8rem;">
                                {{ $idx + 1 }}
                            </span>
                            <span class="text-dark small" style="line-height: 1.6;">{{ $func }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection