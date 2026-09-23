@extends('layouts-user.main')

@section('content')

<!-- Header Banner -->
<section class="py-5" style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%); border-bottom: 1px solid #bbf7d0;">
    <div class="container text-center">
        <span class="section-badge"><i class="bi bi-headset"></i> Layanan Informasi</span>
        <h1 class="fw-bold text-dark mt-2 mb-2">Kontak Kami</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Hubungi kami untuk informasi pelatihan, kerjasama, permohonan kunjungan, dan layanan publik lainnya.
        </p>
    </div>
</section>

<div class="container py-5">
    <div class="row g-4">

        <!-- INFO KONTAK -->
        <div class="col-lg-5" data-aos="fade-right">
            <div class="modern-card p-4 h-100 border-0 shadow-sm">
                <h5 class="fw-bold text-dark mb-4 pb-2 border-bottom">
                    <i class="bi bi-geo-alt-fill text-success me-2"></i> Informasi Kantor
                </h5>

                <div class="d-flex align-items-start mb-3">
                    <div class="contact-icon me-3 flex-shrink-0">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div>
                        <strong class="d-block text-dark small text-uppercase fw-bold">Alamat Kantor</strong>
                        <span class="text-muted small">
                            Jl. Jend. Ahmad Yani Km.85, Binuang, Kabupaten Tapin, Kalimantan Selatan 71183
                        </span>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <div class="contact-icon me-3 flex-shrink-0">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <div>
                        <strong class="d-block text-dark small text-uppercase fw-bold">Telepon / Fax</strong>
                        <span class="text-muted small">(+62) 341 426235 / 429725</span>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <div class="contact-icon me-3 flex-shrink-0">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <div>
                        <strong class="d-block text-dark small text-uppercase fw-bold">WhatsApp Helpdesk</strong>
                        <span class="text-muted small">+62 822-5766-1154</span>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <div class="contact-icon me-3 flex-shrink-0">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div>
                        <strong class="d-block text-dark small text-uppercase fw-bold">Email Resmi</strong>
                        <span class="text-muted small">bbpp.binuang@pertanian.go.id</span>
                    </div>
                </div>

                <div class="p-3 bg-light rounded-3 mb-4 border">
                    <h6 class="fw-bold text-dark mb-1 small"><i class="bi bi-clock-history text-success me-1"></i> Jam Operasional Pelayanan</h6>
                    <p class="text-muted small mb-0">Senin - Jumat: 08.00 - 16.00 WITA (Sabtu & Minggu Libur)</p>
                </div>

                <div>
                    <strong class="d-block text-dark small text-uppercase fw-bold mb-2">Media Sosial Resmi</strong>
                    <div class="d-flex gap-2">
                        <a href="https://www.facebook.com/humasbbppbinuang" target="_blank" class="social-circle-btn"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/bbppbinuang" target="_blank" class="social-circle-btn"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.youtube.com/c/BBPPBinuang" target="_blank" class="social-circle-btn"><i class="bi bi-youtube"></i></a>
                        <a href="https://www.tiktok.com/@bbpp.binuang" target="_blank" class="social-circle-btn"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- FORM KONTAK -->
        <div class="col-lg-7" data-aos="fade-left">
            <div class="modern-card p-4 h-100 border-0 shadow-sm">
                <h5 class="fw-bold text-dark mb-2">
                    <i class="bi bi-chat-dots-fill text-success me-2"></i> Kirim Pesan Cepat
                </h5>
                <p class="text-muted small mb-4">Pesan Anda akan langsung diteruskan ke WhatsApp Customer Service BBPP Binuang.</p>

                <form id="formWa">
                    <div class="mb-3">
                        <label class="form-label small fw-semibold text-dark">Nama Lengkap</label>
                        <input type="text" class="form-control rounded-3 py-2" placeholder="Masukkan nama lengkap Anda" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-semibold text-dark">Alamat / Instansi</label>
                        <input type="text" class="form-control rounded-3 py-2" placeholder="Contoh: Dinas Pertanian / Petani Binuang" name="alamat" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label small fw-semibold text-dark">Isi Pesan / Pertanyaan</label>
                        <textarea class="form-control rounded-3 py-2" rows="5" placeholder="Tuliskan pertanyaan, permohonan informasi, atau pesan Anda..." name="pesan" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-success w-100 py-2 rounded-pill shadow-sm fw-semibold">
                        <i class="bi bi-whatsapp me-2"></i> Kirim Pesan via WhatsApp
                    </button>
                </form>
            </div>
        </div>

    </div>

    <!-- MAP -->
    <div class="mt-5" data-aos="fade-up">
        <div class="modern-card p-3 border-0 shadow-sm overflow-hidden">
            <div class="d-flex align-items-center mb-3 px-2">
                <i class="bi bi-map text-success fs-5 me-2"></i>
                <h6 class="fw-bold text-dark mb-0">Peta Lokasi Kantor BBPP Binuang</h6>
            </div>
            <div class="rounded-4 overflow-hidden border" style="height: 380px;">
                <iframe
                    src="https://www.google.com/maps?q=BBPPBinuang+Binuang+Tapin+Kalimantan+Selatan&output=embed"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>

</div>

<style>
.contact-icon {
    width: 38px;
    height: 38px;
    background: var(--bbpp-primary-light);
    color: var(--bbpp-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
}

.social-circle-btn {
    width: 38px;
    height: 38px;
    background: #f1f5f9;
    color: #334155;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.25s ease;
}
.social-circle-btn:hover {
    background: var(--bbpp-primary);
    color: #ffffff;
    transform: translateY(-2px);
}
</style>

<script>
    const fWa = document.getElementById("formWa");
    if (fWa) {
        fWa.addEventListener("submit", function(e) {
            e.preventDefault();

            let nama = document.querySelector("input[name=nama]").value;
            let alamat = document.querySelector("input[name=alamat]").value;
            let pesan = document.querySelector("textarea[name=pesan]").value;

            let nomorTujuan = "6282257661154";

            let text = `Halo Admin BBPP Binuang,\n\nNama: ${nama}\nAlamat/Instansi: ${alamat}\nPesan: ${pesan}`;

            let url = "https://wa.me/" + nomorTujuan + "?text=" + encodeURIComponent(text);

            window.open(url, "_blank");
        });
    }
</script>

@endsection