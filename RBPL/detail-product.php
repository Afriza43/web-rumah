<?php

session_start();

require 'functions.php';

$id = $_GET['no_rumah'];

$katalog = query("SELECT * FROM katalog WHERE no_rumah = '$id'")[0];
$detail = query("SELECT * FROM detail_rumah WHERE no_rumah = '$id'")[0];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Detail Rumah</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i" />
  <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css" />
  <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
  <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css" />
  <style>
    .modal {
      display: none;
      /* Sembunyikan secara default */
      position: fixed;
      /* Tetap pada posisi */
      z-index: 1;
      /* Menempatkan modal di atas konten lainnya */
      padding-top: 130px;
      /* Jarak atas */
      left: 0;
      top: 0;
      width: 100%;
      /* Lebar 100% */
      height: 100%;
      /* Tinggi 100% */
      overflow: auto;
      /* Tampilkan scroll jika gambar terlalu besar */
      background-color: rgba(0, 0, 0, 0.9);
      /* Warna latar belakang */
    }

    /* Style untuk konten modal */
    .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      /* Lebar konten modal */
      max-width: 700px;
      /* Lebar maksimal konten modal */
    }

    /* Style untuk tombol close */
    .close-btn {
      color: #fff;
      position: absolute;
      top: 100px;
      right: 285px;
      font-size: 40px;
      font-weight: bold;
      transition: 0.3s;
    }

    /* Style untuk tombol close saat dihover */
    .close-btn:hover,
    .close-btn:focus {
      color: #bbb;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container">
      <a class="navbar-brand logo" href="#"><strong>Ajisaka</strong></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
        <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catalog.php">Katalog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="spr-form.php">Beli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="report-progress.php">Perkembangan Rumah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="page">
    <section class="clean-block features" style="padding: 0px">
      <div class="container" style="padding: 50px 12px">
        <section class="clean-block clean-form dark" style="height: 1300px">
          <div class="container" style="padding-bottom: 0px">
            <div class="row" style="padding-top: 10px">
              <div class="col-8">
                <div id="carousel-1" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="w-100 d-block" src="img/<?= $katalog["gambar"]; ?>" alt="Slide Image" />
                    </div>
                    <div class="carousel-item">
                      <img class="w-100 d-block" src="img/<?= $detail["denah"]; ?>" alt="Slide Image" />
                    </div>
                    <div>
                      <a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="justify-content-center">
                  <img onclick="openModal(this);" class="img-thumbnail mb-1 hover-shadow" src="img/<?= $katalog["gambar"] ?>" style="cursor: pointer" />
                  <!-- Modal -->
                  <div id="modal" class="modal">
                    <!-- Konten modal -->
                    <span class="close-btn" onclick="closeModal()">&times;</span>
                    <img src="img/<?= $katalog["gambar"]; ?>" alt="Gambar" class="modal-content" />
                  </div>
                </div>
                <div class="justify-content-center mt-1">
                  <img onclick="openModal(this)" class="img-thumbnail hover-shadow" src="img/<?= $detail["denah"]; ?>" style="cursor: pointer" />
                  <!-- Modal -->
                  <div id="modal" class="modal">
                    <!-- Konten modal -->
                    <span class="close-btn" onclick="closeModal()">&times;</span>
                    <img src="img/<?= $katalog["gambar"]; ?>" alt="Gambar" class="modal-content" />
                  </div>
                  <script>
                    // Fungsi untuk membuka modal
                    function openModal() {
                      document.getElementById("modal").style.display =
                        "block";
                    }

                    // Fungsi untuk menutup modal
                    function closeModal() {
                      document.getElementById("modal").style.display = "none";
                    }
                  </script>
                </div>
              </div>
            </div>
            <div class="row" style="padding-top: 30px">
              <div class="col-8">
                <h3 class="fw-bold text-danger" style="padding-bottom: 10px">
                  Rp <?= $detail["harga"] ?>
                </h3>
                <h6><?= $katalog["nama"] ?></h6>
                <p class="text-secondary" style="padding-bottom: 30px">
                  <?= $katalog["lokasi"] ?>
                </p>
                <div style="padding-bottom: 30px">
                  <h3 class="fw-bold text-danger">Spesifikasi</h3>
                  <table class="w-100 table table table-hover" style="margin-top: 20px; border-radius: 15px">
                    <tbody>
                      <tr>
                        <th>Tipe Properti</th>
                        <td><?= $detail["tipe"] ?></td>
                      </tr>
                      <tr>
                        <th>Luas</th>
                        <td><?= $detail["luas"] ?></td>
                      </tr>
                      <tr>
                        <th>Fasilitas</th>
                        <td><?= $detail["fasilitas"] ?></td>
                      </tr>
                      <tr>
                        <th>Sarana</th>
                        <td><?= $katalog["sarana"] ?></td>
                      </tr>
                      <tr>
                        <th>Status</th>
                        <td><?= $katalog["status"] ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <h3 class="fw-bold text-danger" style="padding-bottom: 10px">
                  Deskripsi
                </h3>
                <p>
                  <?= $katalog["deskripsi"] ?>
                </p>
              </div>
              <div class="col-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-center fw-bold">
                      PT. AjiSaka
                    </h5>
                    <hr />
                    <a href="spr-form.php" style="text-decoration: none"><button type="button" class="btn btn-danger d-grid gap-2 col-6 mx-auto">
                        Pesan Sekarang
                      </button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
  </main>
  <footer class="page-footer dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <h5>Get started</h5>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sign up</a></li>
            <li><a href="#">Downloads</a></li>
          </ul>
        </div>
        <div class="col-sm-3">
          <h5>About us</h5>
          <ul>
            <li><a href="#">Company Information</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Reviews</a></li>
          </ul>
        </div>
        <div class="col-sm-3">
          <h5>Support</h5>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Help desk</a></li>
            <li><a href="#">Forums</a></li>
          </ul>
        </div>
        <div class="col-sm-3">
          <h5>Legal</h5>
          <ul>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <p>© 2023 Copyright Text</p>
    </div>
  </footer>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
  <script src="assets/js/vanilla-zoom.js"></script>
  <script src="assets/js/theme.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
  <script src="assets/js/vanilla-zoom.js"></script>
  <script src="assets/js/theme.js"></script>
</body>

</html>