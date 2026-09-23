@extends('layouts-user.main')

@section('content')

<!-- Header Banner -->
<section class="py-5" style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); border-bottom: 1px solid #bbf7d0;">
    <div class="container text-center">
        <span class="section-badge"><i class="bi bi-file-earmark-lock"></i> Keterbukaan Informasi</span>
        <h1 class="fw-bold text-dark mt-2 mb-2">Dokumen PPID</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Dokumen resmi Pejabat Pengelola Informasi dan Dokumentasi (PPID) BBPP Binuang.
        </p>
    </div>
</section>

<section id="dokumen-ppid-section" class="py-5 bg-white">
    <div class="container">
        {{-- Loop per jenis program --}}
        @foreach($dokumenPPID->groupBy('jenis.jenis') as $jenisNama => $items)
        <div class="mb-5" data-aos="fade-up">
            <!-- Header jenis -->
            <div class="d-flex align-items-center justify-content-between p-3 rounded-top-4 text-white shadow-sm" style="background: linear-gradient(90deg, #064e3b 0%, #15803d 100%);">
                <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-white bg-opacity-20 p-2 rounded-circle fs-6">
                        <i class="bi bi-journal-text"></i>
                    </span>
                    <h5 class="m-0 fw-bold">{{ $jenisNama }}</h5>
                </div>
                <span class="badge bg-white text-success rounded-pill px-3 py-1 fw-bold small">
                    {{ $items->count() }} Dokumen
                </span>
            </div>

            <!-- Daftar dokumen -->
            <div class="bg-light border border-top-0 rounded-bottom-4 p-4 shadow-sm">
                <div class="row g-4">
                    @foreach($items as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="modern-card p-3 h-100 d-flex flex-column justify-content-between border-0 shadow-sm bg-white">
                            <div class="text-center mb-3">
                                <div class="mb-2">
                                    <span class="badge bg-danger bg-opacity-10 text-danger p-3 rounded-4 fs-3">
                                        <i class="bi bi-file-earmark-pdf"></i>
                                    </span>
                                </div>
                                <h6 class="fw-bold text-dark mb-1" style="font-size: 0.92rem; line-height: 1.4;">
                                    {{ $item->name }}
                                </h6>
                            </div>

                            <div class="d-flex gap-2 justify-content-center pt-2 border-top">
                                {{-- Tombol Lihat --}}
                                <a href="{{ asset('storage/' . $item->file) }}"
                                    target="_blank"
                                    class="btn btn-warning btn-sm rounded-pill px-3 text-dark fw-semibold d-inline-flex align-items-center gap-1">
                                    <i class="bi bi-eye"></i> Lihat
                                </a>

                                {{-- Tombol Download --}}
                                <a href="{{ asset('storage/' . $item->file) }}"
                                    download
                                    class="btn btn-success btn-sm rounded-pill px-3 d-inline-flex align-items-center gap-1">
                                    <i class="bi bi-download"></i> Unduh
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modalEl = document.getElementById('pdfModal');
        if (modalEl) {
            const pdfModal = new bootstrap.Modal(modalEl);
            const pdfViewer = document.getElementById('pdfViewer');

            document.querySelectorAll('.view-pdf').forEach(btn => {
                btn.addEventListener('click', function() {
                    const fileUrl = this.dataset.file;
                    pdfViewer.src = fileUrl + '#toolbar=0';
                    pdfModal.show();
                });
            });

            modalEl.addEventListener('hidden.bs.modal', function() {
                pdfViewer.src = '';
            });
        }
    });
</script>
@endpush