<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Tombol Sidebar -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button">
        <i class="fas fa-bars"></i>
      </a>
    </li>
  </ul>

  <!-- Menu Kanan -->
  <ul class="navbar-nav ml-auto">
    <!-- Fullscreen -->
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>

    <!-- User Dropdown -->
    <li class="nav-item dropdown user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <img src="{{ asset ('dist/img/user2-160x160.jpg') }}" class="user-image img-circle elevation-2" alt="User Image">
        <span class="d-none d-md-inline">Administrator</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <li class="user-header bg-primary">
          <img src="{{ asset ('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
          <p>Administrator</p>
        </li>

        <li class="user-footer">
          <a href="#" class="btn btn-default btn-flat text-danger float-right" onclick="logout()">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>

<script>
  function logout() {
    if (confirm('Yakin ingin logout?')) {
      window.location.href = '/logout';
    }
  }
</script>
