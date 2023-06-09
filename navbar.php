<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header bg-dark-subtle">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Rata - rata</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Siswa
            </a>
            <ul class="dropdown-menu ">
              <li><a class="dropdown-item" href="siswa.php">Tambah</a></li>
              <li><a class="dropdown-item" href="listsiswa.php">List</a></li>
              <li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Nilai
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="nilai.php">Tambah</a></li>
              <li><a class="dropdown-item" href="index.php">List</a></li>
              <li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>