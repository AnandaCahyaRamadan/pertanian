@extends('layouts-user.main')

@section('content')

    <section id="pelatihan" class="py-5">
        <div class="container mb-4">
            <div class="row justify-content-center g-4">
                @foreach($pelatihans as $item)
                <div class="col-md-4">
                    <div class="card-pelatih d-flex align-items-center shadow-sm p-3 rounded-4">
                        <div class="pelatih-img me-3">
                            <img src="{{ asset('storage/' . $item->pegawai->image) }}" alt="{{ $item->pegawai->name }}" class="rounded-3" style="width: 100px">
                        </div>
                        <div class="pelatih-info text-start flex-fill text-white">
                            <p class="fw-bold mb-3">{{ $item->pegawai->name }}</p>
                            <p class="mb-1">{{ $item->pegawai->position }}</p>
                            <p class="mb-3">{{ $item->keahlian->keahlian_name }}</p>
                            <a href="https://wa.me/{{ $item->pegawai->no_wa }}" target="_blank" class="btn btn-light btn-sm rounded-pill px-3 py-1">
                                <i class="fab fa-whatsapp text-success"></i> Whatsapp
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="py-5 bg-light position-relative">
        <div class="container">
            <div class="section-title text-center mb-4">
                <h2>Agenda Kegiatan</h2>
            </div>

        </div>
    </section>
@endsection