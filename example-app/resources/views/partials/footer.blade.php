<footer style="background-color:#222; color:#fff; padding:50px 0;">
  <div class="container">
    <div class="row">
        <div class="col-4 mb-4">
        <h5>Tentang Kami</h5>
        <p>
            Balai Besar Pelatihan Pertanian (BBPP) Ketindan<br>
            Jln. Ketindan No.1, Lawang, Kab. Malang, Provinsi Jawa Timur (65214)<br>
            Telp/Fax (+62) 341 426235 / 429725<br>
            Email: bbppketindan@pertanian.go.id<br>
            Web: <a href="https://bbppketindan.bppsdmp.pertanian.go.id" target="_blank">https://bbppketindan.bppsdmp.pertanian.go.id</a>
        </p>
        <p>
            Jam Kantor: Senin-Kamis 07.30-16.00 WIB, Jumat 07.30-16.30 WIB<br>
            Jam Layanan: Senin-Jumat 08.00-16.00 WIB
        </p>
        <div>
            <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
            <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
            <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
            <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
        </div>
    </div>

      <!-- Menu -->
       <div class="col-3 mb-4">
        <h5>Menu</h5>
        <ul class="list-unstyled">
          <li><a href="#">Beranda</a></li>
          <li><a href="#">Penyelenggara Pelatihan</a></li>
          <li><a href="#">Kerja Sama</a></li>
          <li><a href="#">PPID</a></li>
          <li><a href="#">Program dan Anggaran</a></li>
          <li><a href="#">Peta</a></li>
          <li><a href="#">Tentang Kami</a></li>
        </ul>
      </div>

      <!-- Lokasi -->
      <div class="col-3 mb-4">
        <h5>Lokasi</h5>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7720490522925!2d115.08673019999998!3d-3.1547122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de5c8a25aae02d3%3A0xa98e801841821528!2sBBPP%20Binuang!5e0!3m2!1sid!2sid!4v1761189053507!5m2!1sid!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <!-- Statistik -->
      <div class="col-2 mb-4">
        <h5>Statistik</h5>
        <div style="background:#333; padding:20px; border-radius:10px; text-align:center;">
          <p>Minggu Ini</p>
          <h3 class="text-white">{{ number_format($mingguIni) }}</h3>
          <hr>
          <p class="mb-0">Bulan Ini</p>
          <h5 class="text-white">{{ number_format($bulanIni) }}</h5>
          <p class="mb-0">Tahun Ini</p>
          <h5 class="text-white">{{ number_format($tahunIni) }}</h5>
          <p class="mb-0">Total</p>
          <h5 class="text-white">{{ number_format($total) }}</h5>
        </div>
      </div>
    </div>

    <div class="footer-bottom text-center mt-4">
      <p class="mb-0">© 2025 Balai Besar Pelatihan Pertanian</p>
    </div>
  </div>
</footer>
