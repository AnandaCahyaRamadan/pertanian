@extends('layouts-user.main')

@section('content')

<!-- Header Banner -->
<section class="py-5" style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); border-bottom: 1px solid #bbf7d0;">
    <div class="container text-center">
        <span class="section-badge"><i class="bi bi-shield-check"></i> Landasan Regulasi</span>
        <h1 class="fw-bold text-dark mt-2 mb-2">Dasar Hukum</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Landasan hukum pendirian, kedudukan, organisasi, dan tata kerja BBPP Binuang.
        </p>
    </div>
</section>

{{-- === Info Section === --}}
<section id="info" class="py-5 bg-white">
    <div class="container">
        <div class="row g-4" data-aos="fade-up">
            <div class="col-lg-12">
                <div class="d-flex flex-column gap-3">
                    <div class="modern-card p-4 border-0 shadow-sm d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                        <div class="d-flex align-items-start gap-3">
                            <span class="badge bg-success bg-opacity-10 text-success p-3 rounded-4 fs-4 flex-shrink-0">
                                <i class="bi bi-file-earmark-ruled"></i>
                            </span>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Peraturan Menteri Pertanian RI Nomor 11 Tahun 2025</h6>
                                <p class="text-muted small mb-0">Tentang Organisasi dan Tata Kerja Unit Pelaksana Teknis Lingkup BPPSDMP</p>
                            </div>
                        </div>
                        <a href="https://ppid.pertanian.go.id/doc/69/Permentan_11-2025_TTE.pdf" target="_blank" class="btn btn-outline-success rounded-pill px-4 py-2 flex-shrink-0">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Buka Dokumen
                        </a>
                    </div>

                    <div class="modern-card p-4 border-0 shadow-sm d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                        <div class="d-flex align-items-start gap-3">
                            <span class="badge bg-success bg-opacity-10 text-success p-3 rounded-4 fs-4 flex-shrink-0">
                                <i class="bi bi-file-earmark-ruled"></i>
                            </span>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Peraturan Menteri Pertanian RI Nomor 14 Tahun 2023</h6>
                                <p class="text-muted small mb-0">Tentang Organisasi dan Tata Kerja Unit Pelaksana Teknis Lingkup BPPSDMP</p>
                            </div>
                        </div>
                        <a href="https://ppid.pertanian.go.id/doc/69/PROFIL/PERMENTAN%20NOMOR%2014%20TAHUN%202023.pdf" target="_blank" class="btn btn-outline-success rounded-pill px-4 py-2 flex-shrink-0">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Buka Dokumen
                        </a>
                    </div>

                    <div class="modern-card p-4 border-0 shadow-sm d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                        <div class="d-flex align-items-start gap-3">
                            <span class="badge bg-success bg-opacity-10 text-success p-3 rounded-4 fs-4 flex-shrink-0">
                                <i class="bi bi-file-earmark-ruled"></i>
                            </span>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Keputusan Menteri Pertanian RI Nomor 297/KPTS/OT.050/M/6/2023</h6>
                                <p class="text-muted small mb-0">Tentang Kelompok Substansi dan Tim Kerja Pada Kelompok Jabatan Fungsional Lingkup UPT Kementan</p>
                            </div>
                        </div>
                        <a href="http://ppid.pertanian.go.id/doc/69/PROFIL/KEPMENTAN%20KJF%20UPT%20NOMOR%20279%20TH%202023.pdf" target="_blank" class="btn btn-outline-success rounded-pill px-4 py-2 flex-shrink-0">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Buka Dokumen
                        </a>
                    </div>

                    <div class="modern-card p-4 border-0 shadow-sm d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                        <div class="d-flex align-items-start gap-3">
                            <span class="badge bg-success bg-opacity-10 text-success p-3 rounded-4 fs-4 flex-shrink-0">
                                <i class="bi bi-file-earmark-ruled"></i>
                            </span>
                            <div>
                                <h6 class="fw-bold text-dark mb-1">Peraturan Menteri Pertanian RI Nomor 18 Tahun 2007</h6>
                                <p class="text-muted small mb-0">Tentang Organisasi dan Tata Kerja Balai Besar Pelatihan Pertanian Binuang</p>
                            </div>
                        </div>
                        <a href="https://ppid.pertanian.go.id/doc/69/Permentan_No_18_Tahun_2007_Balai_Pelatihan_Pertanian_Binuang.pdf" target="_blank" class="btn btn-outline-success rounded-pill px-4 py-2 flex-shrink-0">
                            <i class="bi bi-file-earmark-pdf me-1"></i> Buka Dokumen
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection