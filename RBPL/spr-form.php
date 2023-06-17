<?php

session_start();

$id = $_SESSION["id_user"];


if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit();
}

require 'functions.php';

if (isset($_POST["submit"])) {
    if (formulir($_POST) > 0) {
        echo "
    <script>
      alert('Pemesanan Berhasil');
      document.location.href = 'catalog.php';
    </script>";
    } else {
        echo "
    <script>
      alert('Pemesanan Gagal');
      document.location.href = 'spr-form.php';
    </script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Features - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#"><strong>Ajisaka</strong></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="catalog.php">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="spr-form.php">Beli</a></li>
                    <li class="nav-item"><a class="nav-link" href="report-progress.php">Perkembangan Rumah</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">login</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page">
        <section class="clean-block features" style="padding: 0px;">
            <div class="container" style="padding: 50px 12px;">
                <section class="clean-block clean-form dark" style="height: 1300;">
                    <div class="container" style="padding-bottom: 0px;">
                        <div class="block-heading">
                            <h2 class="text-uppercase fw-bold text-danger">FORMULIR SPR</h2>
                            <p>Dimohon untuk mengisi formlir SPR dibawah ini untuk melanjutkan transaksi</p>
                        </div>
                        <form action="" enctype="multipart/form-data" method="POST" class="text-start" style="border-top-color: var(--bs-red);border-radius: 8px;">
                            <input type="hidden" name="id_user" value="<?= $id ?>">
                            <!-- nama -->
                            <div class=" mb-3"><label class="form-label" for="nama">Nama</label><input class="form-control item" type="text" name="nama" placeholder="Nama" id="nama" placeholder="Masukkan Nama">
                            </div>
                            <!-- nik -->
                            <div class="mb-3"><label class="form-label" for="status">Status</label><input class="form-control" type="text" id="status" name="status" placeholder="Masukkan Status"></div>
                            <!-- scan ktp -->
                            <div class="mb-3"><label class="form-label" for="ktp">Scan KTP</label><input class="form-control" type="file" name="ktp" id="ktp" formFile"></div>
                            <!-- no telp -->
                            <div class="mb-3"><label class="form-label" for="no-telp">Nomor Telepon</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon3">+62</span>
                                    <input type="text" name="no_telp" id="no_telp" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="Masukkan Nomor Telepon">
                                </div>
                            </div>
                            <!-- email -->
                            <div class="mb-3"><label class="form-label" for="email">Email</label><input name="email" id="email" class="form-control" type="email" id="email-7" placeholder="Masukkan Email"></div>
                            <!-- pekerjaan -->
                            <div class="mb-3"><label class="form-label" for="pekerjaan">Pekerjaan</label><input name="pekerjaan" id="pekerjaan" class="form-control" type="pekerjaan" id="pekerjaan-6" placeholder="Masukkan Pekerjaan"></div>
                            <!-- blok rumah -->
                            <div class="mb-3"><label class="form-label" for="blok">Blok Rumah</label><select name="blok" id="blok" class="form-select" aria-label="Default select example">
                                    <option selected="">Pilih Blok Rumah</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                            <!-- tipe rumah -->
                            <div class="mb-3"><label class="form-label" for="tipe_pesanan">Tipe Rumah</label><input name="tipe_pesanan" id="tipe_pesanan" class="form-control" type="text" id="pekerjaan-6" placeholder="Masukkan Tipe Rumah"></div>
                            <!-- no kavling -->
                            <div class="mb-3"><label class="form-label" for="no_kavling">Nomor Kavling</label><input name="no_kavling" id="no_kavling" class="form-control" type="text" id="pekerjaan-6" placeholder="Masukkan No Kavling"></div>
                            <div class="mb-5" style="text-align: left;"></div><button class="btn btn-primary" name="submit" type="submit" style="background: var(--bs-red); border-style: none;border-color: var(--bs-red);border-top-color: var(--bs-red);border-radius: 5px;width: 420px;">Kirim</button>
                        </form>
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