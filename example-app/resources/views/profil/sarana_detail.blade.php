@extends('layouts-user.main')

@section('content')

<!-- Header & Breadcrumb -->
<section class="py-4" style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); border-bottom: 1px solid #bbf7d0;">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-1 small">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none text-success">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sarana') }}" class="text-decoration-none text-success">Sarana & Prasarana</a></li>
                <li class="breadcrumb-item active text-muted" aria-current="page">{{ $item->name }}</li>
            </ol>
        </nav>
        <h2 class="fw-bold text-dark mb-0">{{ $item->name }}</h2>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-5">

            {{-- GAMBAR --}}
            <div class="col-lg-6" data-aos="fade-right">
                <div class="modern-card overflow-hidden position-relative shadow-sm border-0">
                    <img src="{{ asset('storage/' . $item->image) }}" 
                         class="img-fluid w-100"
                         style="height: 460px; object-fit: cover;"
                         alt="{{ $item->name }}">

                    @if($item->status)
                    <div class="position-absolute top-0 end-0 m-3">
                        <span class="badge 
                            @if($item->status == 'Tersedia') bg-success
                            @elseif($item->status == 'Tidak Tersedia') bg-danger
                            @else bg-secondary
                            @endif
                            px-3 py-2 rounded-pill shadow" style="font-size: 0.85rem;">
                            <i class="bi {{ $item->status == 'Tersedia' ? 'bi-check-circle-fill' : 'bi-x-circle-fill' }} me-1"></i>
                            Status: {{ $item->status }}
                        </span>
                    </div>
                    @endif
                </div>
            </div>

            {{-- INFORMASI --}}
            <div class="col-lg-6 d-flex flex-column justify-content-between" data-aos="fade-left">
                <div>
                    <span class="section-badge"><i class="bi bi-building-check"></i> Detail Sarana</span>
                    <h2 class="fw-bold text-dark mt-2 mb-3">{{ $item->name }}</h2>

                    {{-- DESKRIPSI --}}
                    <div class="text-muted" style="line-height: 1.8; font-size: 1.02rem;">
                        {!! $item->desc !!}
                    </div>
                </div>

                {{-- TOMBOL & AKSI --}}
                <div class="mt-4 pt-3 border-top">
                    <h6 class="fw-bold text-dark mb-3">Reservasi & Konsultasi Fasilitas:</h6>
                    <div class="d-flex flex-wrap gap-3">
                        @if($item->wa)
                        <a href="https://wa.me/{{ preg_replace('/\D/', '', $item->wa) }}" 
                           target="_blank"
                           class="btn btn-success px-4 py-2 rounded-pill shadow-sm d-inline-flex align-items-center gap-2">
                            <i class="bi bi-whatsapp fs-5"></i> Hubungi Pengelola via WhatsApp
                        </a>
                        @endif

                        @if($item->form_pemesanan)
                        <a href="{{ $item->form_pemesanan }}" 
                           target="_blank"
                           class="btn btn-warning text-dark fw-semibold px-4 py-2 rounded-pill shadow-sm d-inline-flex align-items-center gap-2">
                            <i class="bi bi-file-earmark-text fs-5"></i> Isi Form Pemesanan
                        </a>
                        @endif

                        <a href="{{ route('sarana') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2">
                            <i class="bi bi-arrow-left me-1"></i> Kembali ke Daftar
                        </a>
                    </div>
                </div>

            </div>

        </div>

        {{-- SECTION TAMBAHAN INFORMASI PROSEDUR --}}
        <div class="mt-5 p-4 modern-card bg-light border-0" data-aos="fade-up">
            <h5 class="fw-bold text-dark mb-3"><i class="bi bi-info-circle text-success me-2"></i> Ketentuan & Prosedur Penggunaan Fasilitas</h5>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="p-3 bg-white rounded-3 border h-100">
                        <h6 class="fw-bold text-success mb-1"><i class="bi bi-check2-circle me-1"></i> Terawat & Lengkap</h6>
                        <p class="small text-muted mb-0">Semua sarana prasarana dibersihkan secara berkala dan siap digunakan untuk pelatihan serta kegiatan resmi.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-white rounded-3 border h-100">
                        <h6 class="fw-bold text-success mb-1"><i class="bi bi-calendar-event me-1"></i> Penjadwalan Resmi</h6>
                        <p class="small text-muted mb-0">Permohonan penggunaan sarana dianjurkan diajukan minimal H-7 sebelum jadwal pelaksanaan kegiatan.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 bg-white rounded-3 border h-100">
                        <h6 class="fw-bold text-success mb-1"><i class="bi bi-shield-check me-1"></i> Standar Layanan</h6>
                        <p class="small text-muted mb-0">Penggunaan fasilitas tunduk pada aturan dan ketentuan PNBP / tata tertib instansi BBPP Binuang.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection