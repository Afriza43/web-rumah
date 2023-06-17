<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit();
}

require 'functions.php';

$id = $_SESSION["id_user"];

$laporan = query("SELECT * FROM laporan WHERE id_user = '$id'")[0];
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
                <section class="clean-block clean-form dark" style="height: 650px;">
                    <div class="container" style="padding-bottom: 0px;">
                        <div class="block-heading">
                            <h2 class="text-uppercase fw-bold text-danger">PERKEMBANGAN RUMAH</h2>
                        </div>
                    </div>
                    <section class="clean-block clean-info dark">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6"><img class="img-thumbnail" src="img/<?= $laporan["foto"]; ?>"></div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="fw-bold text-center card-title">REPORT PROGRESS</h4>
                                            <hr />
                                            <div class="row mb-3">
                                                <label for="deskripsi" class="col-sm-3 col-form-label">Keterangan</label>
                                                <div class="col-sm-9">
                                                    <p><?= $laporan["deskripsi"]; ?></p>
                                                </div>
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-danger" type="button"><?= $laporan["status"]; ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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
</body>

</html>