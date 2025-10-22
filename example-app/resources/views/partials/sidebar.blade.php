<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{ asset('image/binuang.png') }}" alt="" style="width: 200px">
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

        <!-- Dashboard -->
        <li class="nav-item">
          <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- Sarana & Prasarana -->
       <li class="nav-item {{ Request::is('dashboard/sarana-prasarana*') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link {{ Request::is('dashboard/sarana-prasarana*') ? '' : '' }}">
              <i class="nav-icon fas fa-warehouse"></i>
              <p>
                  Sarana Prasarana
                  <i class="fas fa-angle-left right"></i>
              </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="{{ route('sarana_prasarana.index') }}" class="nav-link {{ Request::is('dashboard/sarana-prasarana*') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sarana Prasarana</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="sarana_prasarana_img_scroll.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Gambar Slider</p>
                  </a>
              </li>
          </ul>
      </li>

        <!-- Program dan Anggaran -->
        <li class="nav-header">PROGRAM & ANGGARAN</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-invoice-dollar"></i>
            <p>
              Program & Anggaran
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="master_jenis_program_anggaran.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Jenis</p></a></li>
            <li class="nav-item"><a href="program_anggaran.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Data Program Anggaran</p></a></li>
          </ul>
        </li>

        <!-- PPID -->
        <li class="nav-header">PPID</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-folder-open"></i>
            <p>
              Data PPID
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item"><a href="master_dokumen_ppid.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Jenis</p></a></li>
            <li class="nav-item"><a href="dokumen_ppid.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Data Dokumen PPID</p></a></li>
            <li class="nav-item"><a href="infografis_ppid.html" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Infografis PPID</p></a></li>
          </ul>
        </li>

         <!-- Data Pelatihan -->
        <li class="nav-header">DATA PELATIHAN</li>
          <li class="nav-item">
            <a href="penyelenggara_pelatihan.html" class="nav-link">
                <i class="fas fa-chalkboard-teacher nav-icon"></i> <!-- ikon guru/pelatihan -->
                <p>Pelatihan</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="jenis_sertifikasi.html" class="nav-link">
                <i class="fas fa-id-badge nav-icon"></i> <!-- ikon sertifikat -->
                <p>Jenis Sertifikasi</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="skema_sertifikasi.html" class="nav-link">
                <i class="fas fa-project-diagram nav-icon"></i> <!-- ikon skema/proyek -->
                <p>Skema Sertifikasi</p>
            </a>
        </li>

        </li>
        <li class="nav-item">
          <a href="agenda_kegiatan.html" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>Agenda Kegiatan</p>
          </a>
        </li>

        @if (Auth::user()->role->name === "Admin")
        <!-- Master Data -->
        <li class="nav-header">MASTER DATA</li>
        <li class="nav-item"><a href="{{ route('users.index') }}" class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}"><i class="nav-icon fas fa-user"></i><p>User</p></a></li>
        <li class="nav-item"><a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('dashboard/roles*') ? 'active' : '' }}"><i class="nav-icon fas fa-user-shield"></i><p>Role</p></a></li>
        <li class="nav-item"><a href="{{ route('organisasi.index') }}" class="nav-link {{ Request::is('dashboard/organisasi*') ? 'active' : '' }}"><i class="nav-icon fas fa-building"></i><p>Organisasi</p></a></li>
        <li class="nav-item"><a href="{{ route('task.index') }}" class="nav-link {{ Request::is('dashboard/task*') ? 'active' : '' }}"><i class="nav-icon fas fa-tasks"></i><p>Tugas</p></a></li>
        <li class="nav-item"><a href="{{ route('visi.index') }}" class="nav-link {{ Request::is('dashboard/visi*') ? 'active' : '' }}"><i class="nav-icon fas fa-eye"></i><p>Visi</p></a></li>
        <li class="nav-item"><a href="{{ route('about.index') }}" class="nav-link {{ Request::is('dashboard/about*') ? 'active' : '' }}"><i class="nav-icon fas fa-info-circle"></i><p>Tentang</p></a></li>
        <li class="nav-item"><a href="{{ route('pegawai.index') }}" class="nav-link {{ Request::is('dashboard/pegawai*') ? 'active' : '' }}"><i class="nav-icon fas fa-users"></i><p>Pegawai</p></a></li>
        <li class="nav-item"><a href="{{ route('social_media.index') }}" class="nav-link {{ Request::is('dashboard/social-media*') ? 'active' : '' }}"><i class="nav-icon fas fa-comment"></i><p>Platform Sosial Media</p></a></li>
        <li class="nav-item"><a href="{{ route('banner.index') }}" class="nav-link {{ Request::is('dashboard/banner*') ? 'active' : '' }}"><i class="nav-icon fas fa-images"></i><p>Banner</p></a></li>
        <li class="nav-item"><a href="{{ route('upt_external.index') }}" class="nav-link {{ Request::is('dashboard/upt-external*') ? 'active' : '' }}"><i class="nav-icon fas fa-link"></i><p>UPT External</p></a></li>
        <li class="nav-item mb-4"><a href="{{ route('inovasi_layanan.index') }}" class="nav-link {{ Request::is('dashboard/inovasi-layanan*') ? 'active' : '' }}"><i class="nav-icon fas fa-lightbulb"></i><p>Inovasi Layanan</p></a></li>
        @endif
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
