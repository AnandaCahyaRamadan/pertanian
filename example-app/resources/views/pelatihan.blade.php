@extends('layouts-user.main')

@section('content')

<section id="pelatihan" class="py-5">
    <div class="container mb-4">
        <div class="row justify-content-center g-4">
            @foreach($pelatihans as $item)
            <div class="col-md-4">
                <div class="card-pelatih d-flex align-items-center shadow-sm p-3 rounded-4">
                    <div class="pelatih-img me-3">
                        <img src="{{ asset('storage/' . $item->pegawai->image) }}" 
                             alt="{{ $item->pegawai->name }}" 
                             class="rounded-3" style="width: 100px">
                    </div>
                    <div class="pelatih-info text-start flex-fill text-white">
                        <p class="fw-bold mb-3 text-dark">{{ $item->pegawai->name }}</p>
                        <p class="mb-1 text-dark">{{ $item->pegawai->position }}</p>
                        <p class="mb-3 text-dark">{{ $item->keahlian->keahlian_name }}</p>
                        <a href="https://wa.me/{{ $item->pegawai->no_wa }}" 
                           target="_blank" 
                           class="btn btn-light btn-sm rounded-pill px-3 py-1">
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
        <div id="calendar"></div>
    </div>

    <!-- Modal Detail Event -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="eventTitle"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Tanggal : </strong> <span id="eventDate"></span></p>
                    <p><strong>Deskripsi : </strong></p>
                    <p id="eventDescription"></p>

                    <!-- Tempat gambar -->
                    <div id="eventImageContainer" class="text-center mt-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'id',
            initialView: 'dayGridMonth', // tampilan bulan
            headerToolbar: {
                left: 'prev,next',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            themeSystem: 'standard',
            navLinks: true,
            editable: false,
            selectable: true,
            dayMaxEvents: true,
            events: '{{ route("agenda.events") }}', // Route dari controller
            eventClick: function (info) {
                var event = info.event;

                // Isi data modal
                document.getElementById('eventTitle').innerText = event.title;
                    document.getElementById('eventDate').innerText =
                event.start.toLocaleString('id-ID', {
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit',
                }) +
                (event.end
                    ? ' - ' + event.end.toLocaleString('id-ID', {
                        day: 'numeric',
                        month: 'long',
                        year: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit',
                    })
                    : '');

                document.getElementById('eventDescription').innerHTML = event.extendedProps.desc || '-';

                // Gambar
                var imgContainer = document.getElementById('eventImageContainer');
                imgContainer.innerHTML = '';
                if (event.extendedProps.image) {
                    imgContainer.innerHTML = `<img src="/storage/${event.extendedProps.image}" class="img-fluid rounded shadow">`;
                }

                // Tampilkan modal
                var modal = new bootstrap.Modal(document.getElementById('eventModal'));
                modal.show();
            }
        });

        calendar.render();
    });
</script>

@endsection
