@extends('layouts-user.main')

@section('content')
{{-- === Hero Section Banner Slider Card === --}}
<section id="beranda" class="py-3 py-md-4" style="background-color: #f1f5f9;" data-aos="fade-in">
    <div class="container">
        <div class="hero-slider-card">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                @if(count($banner) > 1)
                <div class="carousel-indicators hero-indicators-dinas">
                    @foreach($banner as $index => $item)
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>
                @endif

                <div class="carousel-inner">
                    @forelse($banner as $index => $item)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="position-relative w-100">
                            <img src="{{ asset('storage/' . $item->image) }}"
                                class="hero-slider-card-img"
                                alt="Banner Utama BBPP Binuang">
                            @if(!empty($item->desc))
                            <div class="hero-caption-overlay d-none d-md-block">
                                <div class="container-fluid px-2">
                                    <div class="hero-caption-box">
                                        <span class="badge bg-warning text-dark fw-bold px-2 py-1 mb-2 text-uppercase" style="font-size: 0.75rem;">
                                            <i class="bi bi-info-circle-fill me-1"></i> Warta Utama
                                        </span>
                                        <h4 class="fw-bold text-white mb-1" style="text-shadow: 0 2px 4px rgba(0,0,0,0.6);">{{ $item->desc }}</h4>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    @empty
                    <div class="carousel-item active">
                        <div class="position-relative bg-dark d-flex align-items-center justify-content-center" style="height: 420px;">
                            <div class="text-center text-white p-4">
                                <h2 class="fw-bold text-warning">BALAI BESAR PELATIHAN PERTANIAN BINUANG</h2>
                                <p class="lead">Kementerian Pertanian Republik Indonesia</p>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>

                @if(count($banner) > 1)
                <button class="carousel-control-prev hero-carousel-control" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" title="Slide Sebelumnya">
                    <i class="bi bi-chevron-left text-white fs-5"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next hero-carousel-control" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" title="Slide Selanjutnya">
                    <i class="bi bi-chevron-right text-white fs-5"></i>
                    <span class="visually-hidden">Next</span>
                </button>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- === Sambutan Kepala Balai Besar (Khas Portal Dinas) === --}}
<section class="py-5 bg-white border-bottom">
    <div class="container py-2">
        <div class="pimpinan-card" data-aos="fade-up">
            <div class="row align-items-center g-4">
                <div class="col-md-4 col-lg-3 text-center">
                    <div class="pimpinan-img-wrapper d-inline-block">
                        <img src="{{ asset('image/profil pimpinan.jpeg') }}" 
                             alt="Kepala BBPP Binuang" 
                             class="img-fluid"
                             style="max-height: 250px; width: 100%; object-fit: cover;">
                    </div>
                    <div class="mt-2">
                        <span class="badge bg-success text-white px-3 py-1 fw-bold" style="font-size: 0.78rem;">KEPALA BALAI BESAR</span>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9">
                    <div class="dinas-section-title mb-3">
                        <h2>SAMBUTAN KEPALA BALAI BESAR</h2>
                        <p class="text-muted">Balai Besar Pelatihan Pertanian Binuang</p>
                    </div>
                    <div class="text-muted" style="line-height: 1.8; font-size: 0.96rem; text-align: justify;">
                        <p class="mb-2">
                            <em>"Assalamu'alaikum Warahmatullahi Wabarakatuh, Salam Sejahtera untuk Kita Semua."</em>
                        </p>
                        <p class="mb-3">
                            Selamat datang di Portal Resmi Balai Besar Pelatihan Pertanian (BBPP) Binuang. Sebagai Unit Pelaksana Teknis di bawah Badan Penyuluhan dan Pengembangan SDM Pertanian, Kementerian Pertanian RI, kami berkomitmen mencetak SDM Pertanian yang profesional, mandiri, dan berdaya saing global demi mewujudkan kedaulatan pangan nasional.
                        </p>
                    </div>
                    <div class="d-flex gap-2 flex-wrap">
                        <a href="{{ route('profil_pejabat') }}" class="btn btn-sm btn-success px-3 py-2 fw-semibold">
                            <i class="bi bi-person-badge me-1"></i> Profil Pimpinan
                        </a>
                        <a href="{{ route('sejarah') }}" class="btn btn-sm btn-outline-success px-3 py-2 fw-semibold">
                            <i class="bi bi-building me-1"></i> Profil Balai Besar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- === Inovasi & Layanan Digital === --}}
<section id="layanan" class="py-5" style="background-color: #f8fafc;">
    <div class="container py-2">
        <div class="dinas-section-title text-start mb-4" data-aos="fade-up">
            <h2>INOVASI & LAYANAN PUBLIK</h2>
            <p>Akses cepat portal aplikasi, sistem informasi, dan layanan publik terpadu BBPP Binuang</p>
        </div>

        <div class="row g-4 mb-3">
            @foreach($inovasi_layanan as $item)
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                <a href="{{ $item->link }}" target="_blank" class="text-decoration-none d-block h-100">
                    <div class="card h-100 layanan-card-dinas">
                        <div class="position-relative overflow-hidden bg-light" style="aspect-ratio: 16/10;">
                            <img src="{{ asset('storage/' . $item->image) }}"
                                alt="{{ $item->title }}"
                                class="w-100 h-100"
                                style="object-fit: cover;">
                        </div>
                        <div class="card-body p-3 text-center d-flex flex-column justify-content-between">
                            <h6 class="fw-bold text-dark mb-2" style="font-size: 0.92rem; line-height: 1.35;">{{ $item->title }}</h6>
                            <div>
                                <span class="badge bg-success text-white px-2 py-1" style="font-size: 0.75rem;">
                                    Buka Layanan <i class="bi bi-box-arrow-up-right ms-1"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- === Statistik Capaian Kinerja Pelatihan === --}}
<section class="py-5 bg-white border-top border-bottom" data-aos="fade-up">
    <div class="container py-2">
        <div class="dinas-section-title text-start mb-4">
            <h2>STATISTIK ALUMNI & KINERJA PELATIHAN</h2>
            <p id="update-text">Capaian kumulatif peserta pelatihan aparatur dan non aparatur pertanian</p>
        </div>

        <div class="row g-3">
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="50">
                <div class="dinas-stat-box">
                    <div class="dinas-stat-number">1.113</div>
                    <p class="dinas-stat-title"><i class="bi bi-person-badge me-1"></i> Aparatur</p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="dinas-stat-box">
                    <div class="dinas-stat-number">15.918</div>
                    <p class="dinas-stat-title"><i class="bi bi-people-fill me-1"></i> Non Aparatur</p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="150">
                <div class="dinas-stat-box">
                    <div class="dinas-stat-number">33</div>
                    <p class="dinas-stat-title"><i class="bi bi-patch-check-fill me-1"></i> Sertifikasi</p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                <div class="dinas-stat-box">
                    <div class="dinas-stat-number">21</div>
                    <p class="dinas-stat-title"><i class="bi bi-handshake-fill me-1"></i> Kerjasama</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- === Media Publikasi & Video Resmi === --}}
<section id="sosial" class="py-5" style="background-color: #f8fafc;">
    <div class="container py-2">
        <div class="dinas-section-title text-start mb-4" data-aos="fade-up">
            <h2>MEDIA PUBLIKASI & INFORMASI RESMI</h2>
            <p>Saluran komunikasi, edukasi teknologi pertanian, dan siaran kegiatan BBPP Binuang</p>
        </div>

        <div class="row g-4">
            <!-- Instagram Widget -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="50">
                <div class="dinas-widget h-100">
                    <div class="dinas-widget-header d-flex justify-content-between align-items-center">
                        <h5><i class="bi bi-instagram text-danger me-2"></i> Instagram Resmi</h5>
                        <a href="https://www.instagram.com/bbppbinuang" target="_blank" class="badge bg-success text-decoration-none">Ikuti</a>
                    </div>
                    <div class="dinas-widget-body p-2 text-center">
                        <iframe
                            src="https://www.instagram.com/bbppbinuang/embed"
                            width="100%"
                            height="390"
                            style="border: none;"
                            scrolling="no">
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- TikTok Widget -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="dinas-widget h-100">
                    <div class="dinas-widget-header d-flex justify-content-between align-items-center">
                        <h5><i class="bi bi-tiktok text-dark me-2"></i> TikTok Resmi</h5>
                        <a href="https://www.tiktok.com/@bbpp.binuang" target="_blank" class="badge bg-success text-decoration-none">Ikuti</a>
                    </div>
                    <div class="dinas-widget-body p-2 text-center d-flex justify-content-center">
                        <blockquote class="tiktok-embed m-0"
                            cite="https://www.tiktok.com/@bbpp.binuang"
                            data-unique-id="bbpp.binuang"
                            data-embed-type="creator"
                            style="width: 100%; max-width: 320px;">
                            <section></section>
                        </blockquote>
                    </div>
                </div>
            </div>

            <!-- Facebook Widget -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="dinas-widget h-100">
                    <div class="dinas-widget-header d-flex justify-content-between align-items-center">
                        <h5><i class="bi bi-facebook text-primary me-2"></i> Facebook Resmi</h5>
                        <a href="https://www.facebook.com/humasbbppbinuang" target="_blank" class="badge bg-success text-decoration-none">Kunjungi</a>
                    </div>
                    <div class="dinas-widget-body p-2 text-center d-flex justify-content-center">
                        <div class="fb-page"
                            data-href="https://www.facebook.com/humasbbppbinuang"
                            data-tabs="timeline"
                            data-width="320"
                            data-height="390"
                            data-small-header="false"
                            data-hide-cover="false"
                            data-show-facepile="true">
                        </div>
                    </div>
                </div>
            </div>

            <!-- YouTube Video Highlight -->
            <div class="col-12 mt-4" data-aos="fade-up">
                <div class="dinas-widget">
                    <div class="dinas-widget-header d-flex justify-content-between align-items-center">
                        <h5><i class="bi bi-youtube text-danger me-2"></i> Siaran Liputan & Materi Video Pembelajaran</h5>
                        <a href="https://www.youtube.com/c/BBPPBinuang" target="_blank" class="badge bg-danger text-decoration-none">
                            <i class="bi bi-youtube me-1"></i> Channel Resmi BBPP Binuang
                        </a>
                    </div>
                    <div class="dinas-widget-body p-4 bg-light">
                        <div class="row align-items-center g-4">
                            <div class="col-lg-5">
                                <span class="badge bg-danger mb-2">OFFICIAL CHANNEL YOUTUBE</span>
                                <h4 class="fw-bold text-dark">Liputan Kegiatan & Materi Pelatihan</h4>
                                <p class="text-muted" style="line-height: 1.75;">Saksikan dokumentasi program pelatihan, bimbingan teknis, liputan inovasi pertanian modern, serta warta kegiatan resmi di channel YouTube BBPP Binuang.</p>
                                <a href="https://www.youtube.com/c/BBPPBinuang" target="_blank" class="btn btn-danger px-3 py-2 fw-semibold shadow-sm">
                                    <i class="bi bi-play-circle-fill me-1"></i> Subscribe & Tonton Video
                                </a>
                            </div>
                            <div class="col-lg-7">
                                <div class="ratio ratio-16x9 rounded overflow-hidden border shadow-sm">
                                    <iframe src="https://www.youtube.com/embed/zQjPZpHFPY4?si=U7cgr--qEmI6kV1t"
                                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                                        clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- === UPT Kementerian Pertanian Slider === --}}
<section id="upt" class="py-5 bg-white border-top">
    <div class="container py-2 position-relative">
        <div class="dinas-section-title text-start mb-4" data-aos="fade-up">
            <h2>JEJARING UPT KEMENTERIAN PERTANIAN</h2>
            <p>Unit Pelaksana Teknis di lingkungan Badan Penyuluhan dan Pengembangan SDM Pertanian</p>
        </div>

        <div class="swiper mySwiper mb-2 px-2" data-aos="fade-up">
            <div class="swiper-wrapper py-2">
                @foreach($upt_external as $item)
                <div class="swiper-slide">
                    <div class="bg-white border rounded-3 shadow-sm overflow-hidden d-flex align-items-center justify-content-center" style="height: 120px;">
                        <a href="{{ $item->link }}" target="_blank" class="d-block w-100 h-100 text-decoration-none" title="Kunjungi UPT">
                            <img src="{{ asset('storage/' . $item->image) }}"
                                alt="UPT Logo"
                                class="w-100 h-100"
                                style="object-fit: cover; object-position: center; display: block;"
                                onerror="this.onerror=null; this.src='{{ asset('image/kementan.png') }}'; this.style.objectFit='contain'; this.style.padding='10px';">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination mt-4"></div>
        </div>
    </div>
</section>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0"
    nonce="FBSDK"></script>
@endsection

@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(function() {
            speak("Selamat datang di Portal Resmi Balai Besar Pelatihan Pertanian Binuang");
        }, 800);
    });
</script>
@endsection