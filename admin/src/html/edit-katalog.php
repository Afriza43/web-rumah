<?php

require 'admin_func.php';

$id = $_GET['no_rumah'];

$edit = query("SELECT * FROM katalog WHERE no_rumah = '$id'")[0];

if (isset($_POST["submit"])) {
  if (ubah($_POST) > 0) {
    echo "
    <script>
      alert('Ubah Katalog Berhasil');
      document.location.href = 'katalog.php';
    </script>";
  } else {
    echo "
    <script>
      alert('Ubah Katalog Gagal');
      document.location.href = 'katalog.php';
    </script>";
  }
}

if (isset($_POST["back"])) {
  echo "
    <script>
      document.location.href = 'katalog.php';
    </script>";
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ajisaka</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu text-danger">Dashboard</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="./progress.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Progress</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="./katalog.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu text-danger">Katalog</span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Setting</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Laporan Pembangunan</h5>
              <div class="card">
                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <input type="hidden" name="no_rumah" value="<?= $edit["no_rumah"] ?>">
                      <input type="hidden" name="id_admin" value="<?= $edit["id_admin"] ?>">
                      <input type="hidden" name="gambar_lama" value="<?= $edit["gambar"] ?>">
                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama Perumahan</label>
                        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama" value="<?= $edit["nama"] ?>">
                      </div>
                      <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" name="lokasi" id="lokasi" aria-describedby="lokasi" value="<?= $edit["lokasi"] ?>">
                      </div>
                      <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input class="form-control" name="deskripsi" id="deskripsi" rows="3" value="<?= $edit["deskripsi"] ?>"></input>
                      </div>
                      <div class="mb-3">
                        <label for="sarana" class="form-label">Sarana Prasarana</label>
                        <input type="text" name="sarana" class="form-control" id="sarana" aria-describedby="sarana" value="<?= $edit["lokasi"] ?>">
                      </div>
                      <div class="col">
                        <label for="status" class="form-label">Status Perumahan</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                          <option selected><?= $edit["status"] ?></option>
                          <option value="Tersedia">Tersedia</option>
                          <option value="Habis">Habis</option>
                        </select>
                      </div>
                      <div class="col mb-4">
                        <label for="gambar" class="form-label">Upload Gambar</label>
                        <br>
                        <img width="400" class="mb-3" height="200" src="../../../RBPL/img/<?= $edit["gambar"] ?>" alt="">
                        <input class="form-control" name="gambar" id="gambar" type="file" id="formFile" value="<?= $edit["gambar"] ?>">
                      </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-danger">Simpan</button>
                    <button type="submit" name="back" class="btn btn-primary">Back</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>