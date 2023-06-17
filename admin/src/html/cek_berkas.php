<?php
require 'admin_func.php';

$id = $_GET['no_daftar'];

$tabel = query("SELECT * FROM formulir WHERE no_daftar = '$id'")[0];

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
        <div class=" brand-logo d-flex align-items-center justify-content-between">
          <!--GAMBAR AJISAKA -->
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
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="./progress.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu text-danger">Progress</span>
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
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Sales Overview</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">40</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Unit Terjual</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">35</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Konsumen</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">2</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Perumahan</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="container box">
                <div class="card-body ">
                  <div class="card-body ">
                    <div class="row justify-content-md-center">
                      <div class="form-group row mb-2">
                        <h6 class="col-md-2" for="nama">Nama</h6>
                        <h6 class="col-md-1" for="nama">:</h6>
                        <div class="col-md-6">
                          <h6><?= $tabel["nama"]; ?></h6>
                        </div>
                      </div>
                      <div class="form-group row mb-2">
                        <h6 class="col-md-2" for="status">Status</h6>
                        <h6 class="col-md-1" for="status">:</h6>
                        <div class="col-md-6">
                          <h6><?= $tabel["status"]; ?></h6>
                        </div>
                      </div>
                      <div class="form-group row mb-2">
                        <h6 class="col-md-2" for="pekerjaan">Pekerjaan</h6>
                        <h6 class="col-md-1" for="pekerjaan">:</h6>
                        <div class="col-md-6">
                          <h6><?= $tabel["pekerjaan"]; ?></h6>
                        </div>
                      </div>
                      <div class="form-group row mb-2">
                        <h6 class="col-md-2" for="email">Email</h6>
                        <h6 class="col-md-1" for="email">:</h6>
                        <div class="col-md-6">
                          <h6><?= $tabel["email"]; ?></h6>
                        </div>
                      </div>

                      <div class="form-group row mb-2">
                        <h6 class="col-md-2" for="ktp">KTP</h6>
                        <h6 class="col-md-1" for="ktp">:</h6>
                        <div class="col-md-6">
                          <img src="../../../RBPL/img/<?= $tabel["ktp"]; ?>" alt="">
                        </div>
                      </div>
                      <div class="form-group row mb-2">
                        <h6 class="col-md-2" for="no_telp">No.HP</h6>
                        <h6 class="col-md-1" for="no_telp">:</h6>
                        <div class="col-md-6">
                          <h6><?= $tabel["no_telp"]; ?></h6>
                        </div>
                      </div>
                      <div class="form-group row mb-2">
                        <h6 class="col-md-2" for="tipe_pesanan">Tipe Pesanan</h6>
                        <h6 class="col-md-1" for="tipe_pesanan">:</h6>
                        <div class="col-md-6">
                          <h6><?= $tabel["tipe_pesanan"]; ?></h6>
                        </div>
                      </div>
                      <div class="form-group row mb-2">
                        <h6 class="col-md-2" for="blok">Blok</h6>
                        <h6 class="col-md-1" for="blok">:</h6>
                        <div class="col-md-6">
                          <h6><?= $tabel["blok"]; ?></h6>
                        </div>
                      </div>
                      <div class="form-group row mb-2">
                        <h6 class="col-md-2" for="no_kavling">No.Kav</h6>
                        <h6 class="col-md-1" for="no_kavling">:</h6>
                        <div class="col-md-6">
                          <h6><?= $tabel["no_kavling"]; ?></h6>
                        </div>
                      </div>
                    </div>
                  </div>
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