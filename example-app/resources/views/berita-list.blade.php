{{-- ================= HEADLINE FEATURED ================= --}}
@if($headline)
<div class="modern-card mb-5 overflow-hidden border-0 shadow-sm">
    <div class="position-relative overflow-hidden" style="max-height: 420px;">
        <img src="{{ asset('storage/'.$headline->image) }}" 
             class="w-100 h-100 object-fit-cover transition-transform"
             alt="{{ $headline->title }}"
             style="min-height: 320px; max-height: 420px; object-fit: cover;">
        <span class="badge bg-success position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill shadow-sm">
            <i class="bi bi-star-fill text-warning me-1"></i> Berita Utama
        </span>
    </div>

    <div class="p-4 bg-white">
        <div class="d-flex align-items-center gap-3 text-muted small mb-2">
            <span class="badge bg-success bg-opacity-10 text-success fw-semibold px-2 py-1 rounded-pill">
                {{ $headline->category->category_name ?? 'Umum' }}
            </span>
            <span><i class="bi bi-calendar3 me-1"></i> {{ $headline->created_at->format('d M Y') }}</span>
        </div>

        <h3 class="fw-bold text-dark mt-2 mb-3">
            <a href="{{ route('berita.show', $headline->slug) }}" class="text-decoration-none text-dark hover-primary">
                {{ $headline->title }}
            </a>
        </h3>

        <p class="text-muted mb-4" style="line-height: 1.7;">
            {!! Str::limit(strip_tags($headline->desc), 200) !!}
        </p>

        <a href="{{ route('berita.show', $headline->slug) }}" 
           class="btn btn-success rounded-pill px-4 py-2">
            Baca Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
        </a>
    </div>
</div>
@endif


{{-- ================= LIST BERITA ================= --}}
<div class="d-flex flex-column gap-4">
@forelse($articles as $item)
<div class="modern-card p-3 border-0 bg-white shadow-sm">
    <div class="row g-3 align-items-center">
        <div class="col-md-5">
            <div class="rounded-3 overflow-hidden position-relative" style="height: 190px;">
                <img src="{{ asset('storage/'.$item->image) }}" 
                     class="w-100 h-100 object-fit-cover"
                     alt="{{ $item->title }}"
                     style="object-fit: cover;">
                @if(isset($item->category))
                <span class="badge bg-dark bg-opacity-75 text-white position-absolute bottom-0 start-0 m-2 px-2 py-1 rounded-pill small">
                    {{ $item->category->category_name }}
                </span>
                @endif
            </div>
        </div>

        <div class="col-md-7">
            <div class="pe-md-2">
                <small class="text-muted d-flex align-items-center gap-1 mb-2">
                    <i class="bi bi-calendar3 text-success"></i> {{ $item->created_at->format('d F Y') }}
                </small>

                <h5 class="fw-bold text-dark mb-2" style="font-size: 1.15rem; line-height: 1.4;">
                    <a href="{{ route('berita.show', $item->slug) }}" class="text-decoration-none text-dark hover-primary">
                        {{ $item->title }}
                    </a>
                </h5>

                <p class="text-muted small mb-3" style="line-height: 1.6;">
                    {!! Str::limit(strip_tags($item->desc), 130) !!}
                </p>

                <a href="{{ route('berita.show', $item->slug) }}" 
                   class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 fw-semibold">
                    Baca Berita <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@empty
<div class="text-center py-5 modern-card bg-light border-0">
    <i class="bi bi-search fs-1 text-muted d-block mb-3"></i>
    <h5 class="text-dark fw-bold">Berita tidak ditemukan</h5>
    <p class="text-muted small">Coba gunakan kata kunci pencarian yang lain atau ubah filter kategori.</p>
</div>
@endforelse
</div>

{{-- ================= PAGINATION ================= --}}
@if($articles->hasPages())
<div class="mt-4 d-flex justify-content-center">
    {{ $articles->links() }}
</div>
@endif

<style>
.hover-primary {
    transition: color 0.2s ease;
}
.hover-primary:hover {
    color: var(--bbpp-primary) !important;
}
</style>