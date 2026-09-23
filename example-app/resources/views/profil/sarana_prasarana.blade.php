@extends('layouts-user.main')

@section('content')

<!-- Header Banner -->
<section class="py-5" style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); border-bottom: 1px solid #bbf7d0;">
    <div class="container text-center">
        <span class="section-badge"><i class="bi bi-grid-fill"></i> Fasilitas & Aset</span>
        <h1 class="fw-bold text-dark mt-2 mb-2">Sarana & Prasarana</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Daftar fasilitas penunjang pelatihan, laboratorium, wisma, dan operasional kedinasan di BBPP Binuang.
        </p>
    </div>
</section>

<section id="sarana" class="py-5 bg-white">
    <div class="container mb-4">
        {{-- GRID SARANA --}}
        <div class="row justify-content-center g-4">
            @foreach($sarana_prasarana as $item)
            <div class="col-lg-4 col-md-6 col-sm-10" data-aos="fade-up" data-aos-delay="{{ $loop->index * 75 }}">
                <div class="modern-card h-100 d-flex flex-column border-0 shadow-sm">
                    <div class="position-relative overflow-hidden" style="height: 220px;">
                        <img src="{{ asset('storage/' . $item->image) }}"
                            alt="{{ $item->name }}"
                            class="w-100 h-100"
                            style="object-fit: cover; transition: transform 0.4s ease;">

                        @if($item->status)
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge 
                                    @if($item->status == 'Tersedia') bg-success 
                                    @elseif($item->status == 'Tidak Tersedia') bg-danger 
                                    @else bg-secondary 
                                    @endif
                                    px-3 py-2 rounded-pill shadow-sm" style="font-size: 0.78rem;">
                                <i class="bi {{ $item->status == 'Tersedia' ? 'bi-check-circle-fill' : 'bi-x-circle-fill' }} me-1"></i>
                                {{ $item->status }}
                            </span>
                        </div>
                        @endif
                    </div>

                    <div class="p-4 d-flex flex-column flex-grow-1 text-center">
                        <h5 class="fw-bold text-dark mb-2" style="font-size: 1.15rem;">{{ $item->name }}</h5>

                        @if($item->desc)
                        <p class="text-muted small flex-grow-1" style="line-height: 1.6;">
                            {!! Str::limit(strip_tags($item->desc), 110, '...') !!}
                        </p>
                        @endif

                        <div class="mt-3 pt-3 border-top">
                            <a href="{{ route('sarana.detail', $item->id) }}"
                                class="btn btn-success btn-sm rounded-pill px-4 py-2 w-100 shadow-sm">
                                <i class="bi bi-info-circle me-1"></i> Lihat Detail & Pemesanan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- SLIDER DOKUMENTASI FASILITAS --}}
        @if(isset($sliders) && count($sliders) > 0)
        <div class="mt-5 pt-4 text-center">
            <span class="section-badge"><i class="bi bi-images"></i> Galeri Fasilitas</span>
            <h3 class="fw-bold text-dark mt-2 mb-4">Galeri Dokumentasi Sarana</h3>

            <div class="d-flex justify-content-center">
                <div class="vertical-slider position-relative overflow-hidden rounded-4 shadow-sm" style="width: 100%; max-width: 760px; height: 450px;">
                    <div class="slider-wrapper position-relative">
                        @foreach ($sliders as $slider)
                        <div class="slide text-center p-0">
                            <img src="{{ asset('storage/' . $slider->image) }}"
                                class="rounded-4 img-fluid mx-auto d-block w-100"
                                style="height: 450px; object-fit: cover;"
                                alt="Dokumentasi Sarana BBPP Binuang">
                        </div>
                        @endforeach
                    </div>

                    <!-- Tombol navigasi -->
                    <button class="btn-nav btn-up shadow"><i class="bi bi-chevron-up fs-4"></i></button>
                    <button class="btn-nav btn-down shadow"><i class="bi bi-chevron-down fs-4"></i></button>
                </div>
            </div>
        </div>
        @endif

        <style>
            .vertical-slider {
                position: relative;
                overflow: hidden;
                transition: height 0.6s ease-in-out;
            }

            .slider-wrapper {
                position: relative;
                transition: transform 0.8s ease-in-out;
            }

            .slide {
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-shrink: 0;
            }

            .btn-nav {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                background: rgba(255, 255, 255, 0.95);
                border: 1px solid rgba(0, 0, 0, 0.08);
                border-radius: 50%;
                width: 44px;
                height: 44px;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                transition: all 0.3s ease;
                z-index: 10;
                color: var(--bbpp-primary);
            }

            .btn-nav:hover {
                background: var(--bbpp-primary);
                color: #ffffff;
                transform: translateX(-50%) scale(1.1);
            }

            .btn-up {
                top: 15px;
            }

            .btn-down {
                bottom: 15px;
            }
        </style>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const wrapper = document.querySelector(".slider-wrapper");
                const slides = document.querySelectorAll(".slide");
                const btnUp = document.querySelector(".btn-up");
                const btnDown = document.querySelector(".btn-down");
                const sliderContainer = document.querySelector(".vertical-slider");

                if (!wrapper || slides.length === 0) return;

                let currentIndex = 0;
                const totalSlides = slides.length;

                const updateSlide = () => {
                    const activeSlide = slides[currentIndex];
                    if (!activeSlide) return;
                    const slideHeight = activeSlide.offsetHeight || 450;
                    if (sliderContainer) {
                        sliderContainer.style.height = slideHeight + "px";
                    }

                    let offset = 0;
                    for (let i = 0; i < currentIndex; i++) {
                        offset += slides[i].offsetHeight || 450;
                    }
                    wrapper.style.transform = `translateY(-${offset}px)`;
                };

                if (btnDown) {
                    btnDown.addEventListener("click", () => {
                        currentIndex = (currentIndex + 1) % totalSlides;
                        updateSlide();
                    });
                }

                if (btnUp) {
                    btnUp.addEventListener("click", () => {
                        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                        updateSlide();
                    });
                }

                setInterval(() => {
                    if (totalSlides > 1) {
                        currentIndex = (currentIndex + 1) % totalSlides;
                        updateSlide();
                    }
                }, 4500);

                window.addEventListener("load", updateSlide);
                window.addEventListener("resize", updateSlide);
            });
        </script>

    </div>
</section>
@endsection