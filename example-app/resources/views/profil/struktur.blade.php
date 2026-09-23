@extends('layouts-user.main')

@section('content')

<!-- Header Banner -->
<section class="py-5" style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); border-bottom: 1px solid #bbf7d0;">
    <div class="container text-center">
        <span class="section-badge"><i class="bi bi-diagram-3"></i> Tata Kelola Lembaga</span>
        <h1 class="fw-bold text-dark mt-2 mb-2">Struktur Organisasi</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Bagan tata kelola dan struktur kepemimpinan Balai Besar Pelatihan Pertanian Binuang.
        </p>
    </div>
</section>

{{-- === Info Section === --}}
<section id="info" class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-11">
                <div class="modern-card p-3 p-md-4 border-0 shadow-sm text-center">
                    <img src="{{ asset('image/struktur.jpeg') }}"
                        class="img-fluid rounded-4 shadow-sm"
                        alt="Struktur Organisasi BBPP Binuang">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection