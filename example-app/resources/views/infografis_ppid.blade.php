@extends('layouts-user.main')

@section('content')

<!-- Header Banner -->
<section class="py-5" style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); border-bottom: 1px solid #bbf7d0;">
    <div class="container text-center">
        <span class="section-badge"><i class="bi bi-pie-chart-fill"></i> Visualisasi Informasi</span>
        <h1 class="fw-bold text-dark mt-2 mb-2">Infografis PPID</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Koleksi infografis data publik, capaian kinerja, dan panduan layanan BBPP Binuang.
        </p>
    </div>
</section>

<section id="infografis" class="py-5 bg-white">
    <div class="container">
        {{-- MASONRY GALLERY INTERAKTIF --}}
        <div class="masonry-gallery" data-aos="fade-up">
            @forelse($infografis as $item)
                <a href="{{ asset('storage/' . $item->image) }}" 
                   class="glightbox masonry-item mb-4 modern-card p-2 border-0 shadow-sm text-decoration-none" 
                   data-gallery="infografis"
                   data-title="{{ $item->title ?? 'Infografis PPID' }}">
                    <div class="img-wrapper position-relative overflow-hidden rounded-3">
                        <img src="{{ asset('storage/' . $item->image) }}" 
                             alt="{{ $item->title ?? 'Infografis PPID' }}" 
                             class="img-fluid w-100">
                        <div class="overlay d-flex flex-column justify-content-center align-items-center text-white">
                            <i class="bi bi-arrows-fullscreen fs-3 mb-1"></i>
                            <span class="small fw-semibold">Perbesar Infografis</span>
                        </div>
                    </div>
                    @if($item->title)
                    <div class="p-2 text-center">
                        <h6 class="fw-bold text-dark mb-0 small">{{ $item->title }}</h6>
                    </div>
                    @endif
                </a>
            @empty
                <div class="text-center py-5 w-100 modern-card bg-light border-0">
                    <i class="bi bi-image fs-1 text-muted d-block mb-3"></i>
                    <h5 class="text-dark fw-bold">Belum ada infografis</h5>
                    <p class="text-muted small">Infografis PPID akan segera diperbarui secara berkala.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

{{-- CSS STYLING --}}
<style>
    .masonry-gallery {
        column-count: 3;
        column-gap: 1.5rem;
    }

    .masonry-item {
        display: inline-block;
        width: 100%;
        break-inside: avoid;
        position: relative;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .img-wrapper {
        position: relative;
        overflow: hidden;
    }

    .img-wrapper img {
        transition: transform 0.4s ease;
    }

    .overlay {
        position: absolute;
        inset: 0;
        background: rgba(6, 78, 59, 0.75);
        opacity: 0;
        transition: opacity 0.3s ease;
        backdrop-filter: blur(2px);
    }

    .masonry-item:hover .overlay {
        opacity: 1;
    }

    .masonry-item:hover img {
        transform: scale(1.05);
    }

    @media (max-width: 992px) {
        .masonry-gallery { column-count: 2; }
    }

    @media (max-width: 576px) {
        .masonry-gallery { column-count: 1; }
    }
</style>

{{-- GLightbox CDN --}}
<link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

{{-- INIT GLIGHTBOX --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof GLightbox !== 'undefined') {
            const lightbox = GLightbox({
                selector: '.glightbox',
                touchNavigation: true,
                loop: true,
                zoomable: true,
                closeButton: true
            });
        }
    });
</script>

@endsection
