@extends('layouts-user.main')

@section('content')

<!-- Header Banner -->
<section class="py-5" style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); border-bottom: 1px solid #bbf7d0;">
    <div class="container text-center">
        <span class="section-badge"><i class="bi bi-compass"></i> Arah & Tujuan</span>
        <h1 class="fw-bold text-dark mt-2 mb-2">Visi & Misi</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Komitmen dan arah strategis BBPP Binuang dalam mencetak SDM pertanian yang unggul, profesional, dan berdaya saing.
        </p>
    </div>
</section>

{{-- === Info Section === --}}
<section id="info" class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="modern-card p-2 border-0 shadow-sm overflow-hidden">
                    <img src="{{ asset('image/balaibesar.png') }}"
                        class="img-fluid rounded-4 w-100"
                        alt="BBPP Binuang">
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                <div class="modern-card p-4 border-0 shadow-sm bg-light">
                    <div class="visi-misi-content" style="line-height: 1.8; font-size: 1rem;">
                        {!! $visi->desc ?? '<p class="text-muted">Belum ada data yang tersedia.</p>' !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection