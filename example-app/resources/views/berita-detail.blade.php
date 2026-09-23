@extends('layouts-user.main')

@section('content')

<!-- Header & Breadcrumb -->
<section class="py-4" style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); border-bottom: 1px solid #bbf7d0;">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-1 small">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none text-success">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ url('berita') }}" class="text-decoration-none text-success">Berita</a></li>
                <li class="breadcrumb-item active text-muted text-truncate" style="max-width: 300px;" aria-current="page">{{ $article->title }}</li>
            </ol>
        </nav>
        <h2 class="fw-bold text-dark mb-0" style="font-size: 1.6rem;">{{ $article->title }}</h2>
    </div>
</section>

<section class="py-5 bg-white">
<div class="container">
    <div class="row g-5">

        {{-- ================= LEFT SIDE ARTICLE ================= --}}
        <div class="col-lg-8" data-aos="fade-up">

            <div class="d-flex align-items-center gap-3 text-muted small mb-4 flex-wrap pb-3 border-bottom">
                <span class="badge bg-success bg-opacity-10 text-success fw-semibold px-3 py-2 rounded-pill">
                    <i class="bi bi-folder2 me-1"></i> {{ $article->category->category_name ?? 'Berita' }}
                </span>
                <span><i class="bi bi-calendar-event text-success me-1"></i> {{ $article->created_at->format('d F Y') }}</span>
                <span><i class="bi bi-eye text-success me-1"></i> Dilihat {{ $article->view }} kali</span>
            </div>

            <div class="modern-card overflow-hidden mb-4 border-0 shadow-sm">
                <img src="{{ asset('storage/'.$article->image) }}"
                     class="img-fluid w-100"
                     style="max-height: 480px; object-fit: cover;"
                     alt="{{ $article->title }}">
            </div>

            <div class="article-content text-dark" style="line-height: 1.9; font-size: 1.05rem;">
                {!! $article->desc !!}
            </div>

            {{-- SHARE & TAGS --}}
            <div class="mt-5 pt-4 border-top d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 bg-light p-4 rounded-4">
                <div>
                    <span class="fw-bold text-dark small text-uppercase d-block mb-1">Bagikan Berita Ini:</span>
                    <div class="d-flex gap-2">
                        <a href="https://api.whatsapp.com/send?text={{ urlencode($article->title . ' ' . url()->current()) }}" target="_blank" class="btn btn-sm btn-success rounded-pill px-3">
                            <i class="bi bi-whatsapp me-1"></i> WhatsApp
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="btn btn-sm btn-primary rounded-pill px-3">
                            <i class="bi bi-facebook me-1"></i> Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?text={{ urlencode($article->title) }}&url={{ urlencode(url()->current()) }}" target="_blank" class="btn btn-sm btn-dark rounded-pill px-3">
                            <i class="bi bi-twitter-x me-1"></i> Twitter
                        </a>
                    </div>
                </div>
                <a href="{{ url('berita') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3">
                    <i class="bi bi-arrow-left me-1"></i> Berita Lainnya
                </a>
            </div>

            {{-- ================= SIMILAR POST ================= --}}
            @if($similar->count())
            <div class="mt-5 pt-3">
                <div class="d-flex align-items-center mb-4">
                    <span class="section-badge mb-0 me-2"><i class="bi bi-journal-text"></i> Rekomendasi</span>
                    <h4 class="fw-bold text-dark mb-0">Artikel Terkait</h4>
                </div>

                <div class="row g-4">
                    @foreach($similar as $item)
                    <div class="col-md-4">
                        <div class="modern-card h-100 border-0 shadow-sm d-flex flex-column">
                            <div style="height: 140px; overflow: hidden;">
                                <img src="{{ asset('storage/'.$item->image) }}"
                                    class="w-100 h-100 object-fit-cover"
                                    alt="{{ $item->title }}"
                                    style="object-fit: cover;">
                            </div>

                            <div class="p-3 d-flex flex-column flex-grow-1">
                                <small class="text-muted mb-1" style="font-size: 0.78rem;">
                                    <i class="bi bi-calendar3"></i> {{ $item->created_at->format('d M Y') }}
                                </small>

                                <h6 class="fw-bold text-dark mb-3 flex-grow-1" style="font-size: 0.88rem; line-height: 1.4;">
                                    {{ Str::limit($item->title, 50) }}
                                </h6>

                                <a href="{{ route('berita.show', $item->slug) }}" 
                                   class="btn btn-sm btn-outline-success rounded-pill px-3 w-100">
                                    Baca <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

        </div>


        {{-- ================= RIGHT SIDEBAR ================= --}}
        <div class="col-lg-4">
            <div class="sticky-top" style="top: 100px;">

                {{-- Kategori --}}
                <div class="modern-card p-4 mb-4">
                    <h6 class="fw-bold text-dark mb-3 pb-2 border-bottom">
                        <i class="bi bi-folder text-success me-2"></i> Kategori Berita
                    </h6>

                    <div class="d-flex flex-column gap-1">
                        @foreach($categories as $cat)
                        <a href="{{ route('berita.index', ['category' => $cat->id]) }}" 
                           class="d-flex justify-content-between align-items-center py-2 px-3 rounded-3 text-decoration-none text-dark sidebar-category-link">
                            <span class="fw-medium" style="font-size: 0.92rem;">{{ $cat->category_name }}</span>
                            <span class="badge bg-light text-muted rounded-pill">
                                {{ $cat->articles_count ?? 0 }}
                            </span>
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- Topik / Tag --}}
                <div class="modern-card p-4 mb-4">
                    <h6 class="fw-bold text-dark mb-3 pb-2 border-bottom">
                        <i class="bi bi-tags text-success me-2"></i> Topik Populer
                    </h6>

                    <div class="d-flex flex-wrap gap-2">
                        @foreach($tags as $tag)
                        <a href="{{ route('berita.index', ['tag' => $tag->id]) }}" class="tag-pill text-decoration-none">
                            #{{ $tag->tag_name }}
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- ================= POPULAR POST ================= --}}
                <div class="modern-card p-4">
                    <h6 class="fw-bold text-dark mb-3 pb-2 border-bottom">
                        <i class="bi bi-fire text-danger me-2"></i> Berita Populer
                    </h6>

                    <div class="d-flex flex-column gap-3">
                        @foreach($popular as $item)
                        <a href="{{ route('berita.show', $item->slug) }}" 
                           class="text-decoration-none text-dark popular-news-item">

                            <div class="d-flex align-items-center">
                                <img src="{{ asset('storage/'.$item->image) }}"
                                     width="75"
                                     height="65"
                                     style="object-fit:cover; border-radius:10px;"
                                     class="me-3 flex-shrink-0 shadow-sm"
                                     alt="{{ $item->title }}">

                                <div>
                                    <h6 class="mb-1 fw-semibold" style="font-size: 0.88rem; line-height: 1.4;">
                                        {{ Str::limit($item->title, 55) }}
                                    </h6>

                                    <small class="text-muted d-flex align-items-center gap-1" style="font-size: 0.78rem;">
                                        <i class="bi bi-calendar-event"></i> {{ $item->created_at->format('d M Y') }}
                                    </small>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
</section>

<style>
.sidebar-category-link {
    transition: all 0.2s ease;
}
.sidebar-category-link:hover {
    background: var(--bbpp-primary-light);
    color: var(--bbpp-primary) !important;
    padding-left: 1rem !important;
}

.tag-pill {
    display: inline-block;
    padding: 6px 14px;
    font-size: 0.8rem;
    font-weight: 500;
    border-radius: 9999px;
    background: #f1f5f9;
    color: #475569;
    border: 1px solid #e2e8f0;
    transition: all 0.2s ease;
}
.tag-pill:hover {
    background: var(--bbpp-primary-light);
    color: var(--bbpp-primary);
    border-color: var(--bbpp-primary-border);
}

.popular-news-item {
    transition: transform 0.2s ease;
}
.popular-news-item:hover {
    transform: translateX(4px);
}
.popular-news-item:hover h6 {
    color: var(--bbpp-primary);
}
</style>

@endsection