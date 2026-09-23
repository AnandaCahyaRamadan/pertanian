@extends('layouts-user.main')

@section('content')
{{-- === Hero Section === --}}
<section id="beranda" class="hero" data-aos="fade-in">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4500">
        <div class="carousel-indicators">
            @foreach($banner as $index => $item)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>

        <div class="carousel-inner">
            @foreach($banner as $index => $item)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <img src="{{ asset('storage/' . $item->image) }}"
                    class="d-block w-100"
                    alt="Banner BBPP Binuang"
                    style="height: 520px; object-fit: cover;">
            </div>
            @endforeach
        </div>

        <button class="carousel-control-prev hero-carousel-control" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <i class="bi bi-chevron-left text-white fs-4"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next hero-carousel-control" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <i class="bi bi-chevron-right text-white fs-4"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

{{-- === Inovasi & Layanan === --}}
<section id="layanan" class="py-5" style="background-color: #fafdfa;">
    <div class="container py-3">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge"><i class="bi bi-stars"></i> Layanan Unggulan</span>
            <h2 class="fw-bold text-dark mt-2">Inovasi & Layanan Digital</h2>
            <p class="text-muted">Akses cepat ke berbagai inovasi, aplikasi, dan layanan terpadu BBPP Binuang</p>
        </div>

        <div class="row text-center justify-content-center g-4 mb-4">
            @foreach($inovasi_layanan as $item)
            <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 75 }}">
                <a href="{{ $item->link }}" target="_blank" class="text-decoration-none d-block">
                    <div class="img-wrapper shadow-sm border border-light">
                        <img src="{{ asset('storage/' . $item->image) }}"
                            alt="{{ $item->title }}"
                            class="w-100"
                            style="aspect-ratio: 4/3; object-fit: cover;">

                        <!-- Overlay muncul saat hover -->
                        <div class="img-title-overlay d-flex flex-column justify-content-end align-items-center">
                            <span>{{ $item->title }}</span>
                            <span class="badge bg-warning text-dark mt-1 px-2 py-1 rounded-pill" style="font-size: 0.72rem;">
                                Buka Layanan <i class="bi bi-box-arrow-up-right ms-1"></i>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- === Alumni / Statistik Section === --}}
<section class="alumni-section text-center text-white" data-aos="fade-up">
    <div class="container position-relative">
        <div class="text-center mb-5">
            <span class="badge bg-white bg-opacity-20 text-white px-3 py-2 rounded-pill mb-2 fw-semibold">
                <i class="bi bi-graph-up me-1"></i> Capaian Kinerja Pelatihan
            </span>
            <h2 class="fw-bold display-6 text-white mb-2">Alumni Peserta Pelatihan</h2>
            <p id="update-text" class="text-white-50 fs-6 mb-0"></p>
        </div>

        <div class="row justify-content-center g-4">
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="bi bi-person-badge"></i>
                    </div>
                    <div class="stat-number">1.113</div>
                    <p class="stat-label">Aparatur</p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="stat-number">15.918</div>
                    <p class="stat-label">Non Aparatur</p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>
                    <div class="stat-number">33</div>
                    <p class="stat-label">Sertifikasi</p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="bi bi-handshake-fill"></i>
                    </div>
                    <div class="stat-number">21</div>
                    <p class="stat-label">Kerjasama</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- === Sosial Media Hub === --}}
<section id="sosial" class="py-5 bg-white">
    <div class="container py-3">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge"><i class="bi bi-share-fill"></i> Media Sosial</span>
            <h2 class="fw-bold text-dark mt-2">Platform Media Sosial Kami</h2>
            <p class="text-muted">Ikuti terus informasi, edukasi pertanian, dan kegiatan terbaru melalui saluran resmi kami</p>
        </div>

        <div class="row justify-content-center g-4">
            <!-- Instagram -->
            <div class="col-lg-4 col-md-6 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="modern-card p-3 w-100 text-center" style="max-width: 360px;">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                        <span class="fw-bold text-dark"><i class="bi bi-instagram text-danger me-2"></i> Instagram</span>
                        <a href="https://www.instagram.com/bbppbinuang" target="_blank" class="btn btn-sm btn-outline-success rounded-pill px-3" style="font-size: 0.78rem;">Follow</a>
                    </div>
                    <div class="d-flex justify-content-center overflow-hidden rounded-3">
                        <iframe
                            src="https://www.instagram.com/bbppbinuang/embed"
                            width="100%"
                            height="400"
                            style="border: none;"
                            scrolling="no">
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- TikTok -->
            <div class="col-lg-4 col-md-6 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="modern-card p-3 w-100 text-center" style="max-width: 360px;">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                        <span class="fw-bold text-dark"><i class="bi bi-tiktok text-dark me-2"></i> TikTok</span>
                        <a href="https://www.tiktok.com/@bbpp.binuang" target="_blank" class="btn btn-sm btn-outline-success rounded-pill px-3" style="font-size: 0.78rem;">Follow</a>
                    </div>
                    <div class="d-flex justify-content-center overflow-hidden rounded-3">
                        <blockquote class="tiktok-embed m-0"
                            cite="https://www.tiktok.com/@bbpp.binuang"
                            data-unique-id="bbpp.binuang"
                            data-embed-type="creator"
                            style="width: 100%; max-width: 330px;">
                            <section></section>
                        </blockquote>
                    </div>
                </div>
            </div>

            <!-- Facebook -->
            <div class="col-lg-4 col-md-6 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
                <div class="modern-card p-3 w-100 text-center" style="max-width: 360px;">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                        <span class="fw-bold text-dark"><i class="bi bi-facebook text-primary me-2"></i> Facebook</span>
                        <a href="https://www.facebook.com/humasbbppbinuang" target="_blank" class="btn btn-sm btn-outline-success rounded-pill px-3" style="font-size: 0.78rem;">Kunjungi</a>
                    </div>
                    <div class="d-flex justify-content-center overflow-hidden rounded-3">
                        <div class="fb-page"
                            data-href="https://www.facebook.com/humasbbppbinuang"
                            data-tabs="timeline"
                            data-width="320"
                            data-height="400"
                            data-small-header="false"
                            data-hide-cover="false"
                            data-show-facepile="true">
                        </div>
                    </div>
                </div>
            </div>

            <!-- YouTube Video Highlight -->
            <div class="col-12 mt-4" data-aos="fade-up">
                <div class="modern-card p-4 bg-light border-0">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-5 text-lg-start text-center">
                            <span class="badge bg-danger px-3 py-2 rounded-pill mb-2"><i class="bi bi-youtube me-1"></i> YouTube Official</span>
                            <h3 class="fw-bold text-dark mt-1">Galeri Video & Liputan Khusus</h3>
                            <p class="text-muted">Saksikan siaran materi pelatihan, tips agribisnis, serta dokumentasi kegiatan resmi BBPP Binuang di channel YouTube kami.</p>
                            <a href="https://www.youtube.com/c/BBPPBinuang" target="_blank" class="btn btn-danger rounded-pill px-4 py-2 mt-2 shadow-sm">
                                <i class="bi bi-youtube me-2"></i> Subscribe Channel
                            </a>
                        </div>
                        <div class="col-lg-7">
                            <div class="ratio ratio-16x9 shadow-sm rounded-4 overflow-hidden border">
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
</section>

{{-- === UPT External === --}}
<section id="upt" class="py-5 bg-light position-relative">
    <div class="container py-3">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-badge"><i class="bi bi-buildings"></i> Jejaring Kelembagaan</span>
            <h2 class="fw-bold text-dark mt-2">UPT Kementerian Pertanian</h2>
            <p class="text-muted">Jejaring Unit Pelaksana Teknis di lingkungan Kementerian Pertanian Republik Indonesia</p>
        </div>

        <div class="swiper mySwiper mb-4 px-2" data-aos="zoom-in">
            <div class="swiper-wrapper py-2">
                @foreach($upt_external as $item)
                <div class="swiper-slide">
                    <div class="upt-card">
                        <a href="{{ $item->link }}" target="_blank" class="d-flex align-items-center justify-content-center w-100 h-100" title="Kunjungi UPT">
                            <img src="{{ asset('storage/' . $item->image) }}"
                                alt="UPT Logo">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination mt-4"></div>
        </div>
    </div>

    <div class="swiper-button-prev custom-nav-btn"><i class="bi bi-chevron-left"></i></div>
    <div class="swiper-button-next custom-nav-btn"><i class="bi bi-chevron-right"></i></div>
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
            speak("Selamat datang di Website Balai Besar Pelatihan Pertanian Binuang");
        }, 800);

    });
</script>
@endsection