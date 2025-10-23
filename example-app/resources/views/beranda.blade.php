@extends('layouts-user.main')

@section('content')
    <section id="beranda" class="hero">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-inner">
                @foreach($banner as $index => $item)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/' . $item->image) }}" 
                            class="d-block w-100" 
                            alt="" 
                            style="height: 500px; object-fit: cover;">
                    </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <section id="info" class="py-5 bg-light">
        <div class="container">
            <div class="section-title text-center mb-5">
            <h2>Balai Besar Pelatihan Pertanian Ketindan</h2>
            </div>

            <div class="row align-items-start g-4">
            <!-- Kolom kiri (gambar) -->
            <div class="col-lg-6">
                <div class="p-3 bg-white rounded-3 shadow-sm">
                <img src="{{ asset('image/balaibesar.png') }}"
                    class="img-fluid rounded-3"
                    alt="BBPP Ketindan">
                </div>
            </div>

            <!-- Kolom kanan (tab + isi) -->
            <div class="col-lg-6">
                <h4 class=" mb-3">Selayang Pandang</h4>
                <p>
                    BBPP Binuang adalah singkatan dari Balai Besar Pelatihan Pertanian Binuang — salah satu unit pelaksana teknis di bawah Kementerian Pertanian Republik Indonesia yang berfokus pada pelatihan dan pengembangan sumber daya manusia pertanian.
                </p>
                <p>Profil Singkat BBPP Binuang</p>
                <p>
                    Nama lengkap : Balai Besar Pelatihan Pertanian (BBPP) Binuang
                    <br>
                    Kementerian : Kementerian Pertanian (Kementan RI)
                    <br>
                    Alamat : Jl. Jenderal Sudirman Km. 6, Binuang, Kabupaten Tapin, Kalimantan Selatan
                </p>

                <!-- Tabs -->
                <ul class="nav nav-tabs mt-4" id="infoTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="organisasi-tab" data-bs-toggle="tab" data-bs-target="#organisasi" type="button" role="tab">Organisasi</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tugas-tab" data-bs-toggle="tab" data-bs-target="#tugas" type="button" role="tab">Tugas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="visi-tab" data-bs-toggle="tab" data-bs-target="#visi" type="button" role="tab">Visi</button>
                </li>
                </ul>

                <!-- Isi tab -->
                <div class="tab-content border-start border-end border-bottom p-3 bg-white shadow-sm rounded-bottom" id="infoTabsContent">
                <div class="tab-pane fade show active" id="organisasi" role="tabpanel">
                 <p class="text-justify" style="text-align: justify;">
                    {!! $organisasi->desc ?? 'Belum ada data organisasi yang tersedia.' !!}
                </p>
                </div>

                <div class="tab-pane fade" id="tugas" role="tabpanel">
                    <p>
                        {!! $tugas->desc ?? 'Belum ada data yang tersedia.' !!}
                    </p>
                </div>

                <div class="tab-pane fade" id="visi" role="tabpanel">
                    <p>
                        {!! $visi->desc ?? 'Belum ada data yang tersedia.' !!}
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section id="layanan" class="py-5">
        <div class="container">
            <div class="section-title text-center">
                <h2>Inovasi dan Layanan</h2>
            </div>
            <div class="row text-center justify-content-center mb-4">
                @foreach($inovasi_layanan as $item)
                    <div class="col-3 g-3">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="" class="w-100 shadow-sm rounded">
                        <p class="mt-3 text-dark">
                            <a href="{{ $item->link }}" class="text-decoration-none fw-bold text-dark">
                                {{ $item->title }}
                            </a>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="upt" class="py-5 bg-light position-relative">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>UPT External</h2>
            </div>

            <!-- Swiper -->
            <div class="swiper mySwiper mb-4">
                <div class="swiper-wrapper">
                    @foreach($upt_external as $item)
                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0 text-center m-2 rounded p-2">
                            <a href="{{ $item->link }}" target="_blank">
                                <img src="{{ asset('storage/' . $item->image) }}" 
                                    class="card-img-top mx-auto" 
                                    alt="UPT Image" 
                                    style="object-fit: contain;">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Tombol navigasi di luar container -->
        <div class="swiper-button-prev custom-nav-btn">
            <i class="fa-solid fa-chevron-left"></i>
        </div>
        <div class="swiper-button-next custom-nav-btn">
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </section>

    <section id="sosial" class="py-5">
        <div class="container text-center">
            <div class="section-title text-center mb-4">
                <h2 class="mb-4">Platform Sosial Media</h2>
            </div>
            <div class="row justify-content-center align-items-stretch mt-4">

            <!-- Instagram -->
            <div class="col-md-4 mb-4 d-flex">
                <div class="social-box w-100">
                <blockquote 
                    class="instagram-media" 
                    data-instgrm-permalink="https://www.instagram.com/bbppbinuang/"
                    data-instgrm-version="14">
                </blockquote>
                <script async src="//www.instagram.com/embed.js"></script>
                </div>
            </div>

            <!-- TikTok -->
            <div class="col-md-4 mb-4 d-flex">
                <div class="social-box w-100">
                <blockquote class="tiktok-embed"
                    cite="https://www.tiktok.com/@bbpp.binuang"
                    data-unique-id="bbpp.binuang"
                    data-embed-type="creator"
                    style="width: 100%; max-width: 350px;">
                    <section> </section>
                </blockquote>
                <script async src="https://www.tiktok.com/embed.js"></script>
                </div>
            </div>

                        <!-- Facebook -->
            <div class="col-md-4 mb-4 d-flex">
                <div class="social-box w-100">
                <div class="fb-page"
                    data-href="https://www.facebook.com/humasbbppbinuang/?locale=id_ID"
                    data-tabs="timeline"
                    data-width="320"
                    data-height="440"
                    data-small-header="false"
                    data-adapt-container-width="true"
                    data-hide-cover="false"
                    data-show-facepile="true">
                </div>
                </div>
            </div>

            </div>
        </div>
    </section>

    <div id="fb-root"></div>
    <section class="alumni-section text-center text-white py-5">
        <div class="overlay"></div>
        <div class="container position-relative">
            <h2 class="fw-bold mb-2">Alumni Pelatihan</h2>
            <p class="mb-5">Update Agustus 2025</p>

            <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-4">
                <h3 class="fw-bold display-6">2813</h3>
                <p class="mb-0">Aparatur</p>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <h3 class="fw-bold display-6">9918</h3>
                <p class="mb-0">Non Aparatur</p>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <h3 class="fw-bold display-6">833</h3>
                <p class="mb-0">Sertifikasi</p>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <h3 class="fw-bold display-6">4971</h3>
                <p class="mb-0">Kerjasama</p>
            </div>
            </div>
        </div>
    </section>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0"
        nonce="FBSDK">
    </script>

@endsection