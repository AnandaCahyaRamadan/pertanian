@extends('layouts-user.main')

@section('content')

<!-- Header Banner -->
<section class="py-5" style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); border-bottom: 1px solid #bbf7d0;">
    <div class="container text-center">
        <span class="section-badge"><i class="bi bi-newspaper"></i> Warta Pertanian</span>
        <h1 class="fw-bold text-dark mt-2 mb-2">Berita & Artikel Terkini</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Informasi terbaru seputar kegiatan, inovasi, pengumuman resmi, dan perkembangan pertanian di BBPP Binuang.
        </p>
    </div>
</section>

<section class="py-5 bg-white">
<div class="container">
    <div class="row g-4">

        {{-- LEFT --}}
        <div class="col-lg-8" id="berita-container">
            @include('berita-list')
        </div>

        {{-- RIGHT SIDEBAR --}}
        <div class="col-lg-4">
            <div class="sticky-top" style="top: 100px;">

                {{-- SEARCH BOX --}}
                <div class="modern-card p-4 mb-4">
                    <h6 class="fw-bold text-dark mb-3"><i class="bi bi-search text-success me-2"></i> Cari Berita</h6>
                    <form method="GET" action="{{ route('berita.index') }}" id="searchForm">
                        <div class="position-relative">
                            <input type="text" 
                                   name="search" 
                                   value="{{ request('search') }}"
                                   class="form-control rounded-pill pe-5 py-2"
                                   placeholder="Ketik kata kunci...">

                            <button type="submit" class="btn btn-link text-success position-absolute end-0 top-50 translate-middle-y me-2 border-0">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                {{-- CATEGORY --}}
                <div class="modern-card p-4 mb-4">
                    <h6 class="fw-bold text-dark mb-3 pb-2 border-bottom"><i class="bi bi-folder text-success me-2"></i> Kategori</h6>

                    <div class="d-flex flex-column gap-1">
                        @foreach($categories as $cat)
                        <a href="{{ route('berita.index', [
                                'category' => $cat->id,
                                'search'   => request('search'),
                                'tag'      => request('tag')
                            ]) }}"
                           class="d-flex justify-content-between align-items-center py-2 px-3 rounded-3 text-decoration-none sidebar-category-link
                           {{ request('category') == $cat->id ? 'bg-success text-white' : 'text-dark' }}">

                            <span class="fw-medium" style="font-size: 0.92rem;">{{ $cat->category_name }}</span>
                            <span class="badge {{ request('category') == $cat->id ? 'bg-white text-success' : 'bg-light text-muted' }} rounded-pill">
                                {{ $cat->articles_count }}
                            </span>
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- TAGS --}}
                <div class="modern-card p-4 mb-4">
                    <h6 class="fw-bold text-dark mb-3 pb-2 border-bottom"><i class="bi bi-tags text-success me-2"></i> Topik Populer</h6>

                    <div class="d-flex flex-wrap gap-2">
                        @foreach($tags as $tag)
                        <a href="{{ route('berita.index', [
                                'tag'      => $tag->id,
                                'search'   => request('search'),
                                'category' => request('category')
                            ]) }}"
                           class="tag-pill text-decoration-none 
                           {{ request('tag') == $tag->id ? 'tag-pill-active' : '' }}">
                            #{{ $tag->tag_name }}
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- POPULAR POSTS --}}
                <div class="modern-card p-4">
                    <h6 class="fw-bold text-dark mb-3 pb-2 border-bottom"><i class="bi bi-fire text-danger me-2"></i> Berita Populer</h6>

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
                                    <h6 class="mb-1 fw-semibold news-title-clamp" style="font-size: 0.88rem; line-height: 1.4;">
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
.sidebar-category-link:hover:not(.bg-success) {
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
.tag-pill-active {
    background: var(--bbpp-primary) !important;
    color: #ffffff !important;
    border-color: var(--bbpp-primary) !important;
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

{{-- ================= AJAX SEARCH SCRIPT ================= --}}
<script>
const sForm = document.getElementById('searchForm');
if (sForm) {
    sForm.addEventListener('submit', function(e) {
        e.preventDefault();

        let searchValue = document.querySelector('input[name="search"]').value;

        fetch("{{ route('berita.index') }}?search=" + encodeURIComponent(searchValue), {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById('berita-container').innerHTML = data;
        })
        .catch(error => console.log(error));
    });
}
</script>

@endsection