@extends('layouts-user.main')

@section('content')

<!-- Header Banner -->
<section class="py-5" style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); border-bottom: 1px solid #bbf7d0;">
    <div class="container text-center">
        <span class="section-badge"><i class="bi bi-calendar3"></i> Jadwal Pelatihan & Kegiatan</span>
        <h1 class="fw-bold text-dark mt-2 mb-2">Agenda Kegiatan</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Kalender jadwal pelatihan aparatur, non-aparatur, sertifikasi profesi, dan agenda kedinasan BBPP Binuang.
        </p>
    </div>
</section>

<!-- ===== AGENDA SECTION ===== -->
<section class="py-5 bg-white position-relative">
    <div class="container py-2">
        <div class="modern-card p-4 border-0 shadow-sm" data-aos="fade-up">
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2 pb-3 border-bottom">
                <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-success bg-opacity-10 text-success p-2 rounded-circle fs-6">
                        <i class="bi bi-calendar-check"></i>
                    </span>
                    <h5 class="fw-bold text-dark mb-0">Kalender Interaktif Agenda BBPP Binuang</h5>
                </div>
                <div class="text-muted small">
                    <i class="bi bi-info-circle me-1 text-success"></i> Klik pada judul agenda untuk melihat detail & deskripsi kegiatan
                </div>
            </div>

            <div id="calendar"></div>
        </div>
    </div>

    <!-- Modal Detail Event -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 shadow-lg overflow-hidden">
                <div class="modal-header bg-success text-white px-4 py-3 border-0">
                    <h5 class="modal-title fw-bold" id="eventTitle"></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="d-flex align-items-center gap-2 mb-3 text-muted small bg-light p-2 rounded-3 border">
                        <i class="bi bi-clock-history text-success fs-6"></i>
                        <span class="fw-semibold text-dark">Waktu:</span>
                        <span id="eventDate" class="text-muted"></span>
                    </div>

                    <h6 class="fw-bold text-dark mb-2">Deskripsi Kegiatan:</h6>
                    <div id="eventDescription" class="text-muted small" style="line-height: 1.7;"></div>

                    <div id="eventImageContainer" class="text-center mt-4"></div>
                </div>
                <div class="modal-footer bg-light px-4 py-2 border-0">
                    <button type="button" class="btn btn-secondary btn-sm rounded-pill px-3" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FULLCALENDAR SCRIPT ===== -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');

        if (!calendarEl) return;

        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'id',
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,listWeek'
            },
            themeSystem: 'standard',
            navLinks: true,
            editable: false,
            selectable: true,
            dayMaxEvents: true,
            events: '{{ route("agenda.events") }}',
            eventClick: function (info) {
                var event = info.event;
                document.getElementById('eventTitle').innerText = event.title;
                document.getElementById('eventDate').innerText =
                    event.start.toLocaleString('id-ID', {
                        day: 'numeric',
                        month: 'long',
                        year: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit',
                    }) +
                    (event.end ? ' - ' + event.end.toLocaleString('id-ID', {
                        day: 'numeric',
                        month: 'long',
                        year: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit',
                    }) : '');
                document.getElementById('eventDescription').innerHTML = event.extendedProps.desc || 'Tidak ada deskripsi rinci.';
                var imgContainer = document.getElementById('eventImageContainer');
                imgContainer.innerHTML = event.extendedProps.image
                    ? `<img src="/storage/${event.extendedProps.image}" class="img-fluid rounded-4 shadow-sm" style="max-height: 250px; object-fit: cover;">`
                    : '';
                new bootstrap.Modal(document.getElementById('eventModal')).show();
            }
        });

        calendar.render();
    });
</script>

@endsection
