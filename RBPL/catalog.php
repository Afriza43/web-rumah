<?php

session_start();

require 'functions.php';

$tabel = query("SELECT * FROM katalog");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pricing - Brand</title>
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
                </ul>
            </div>
        </div>
    </nav>
    <main class="page pricing-table-page">
        <section class="clean-block clean-pricing dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="fw-bold text-danger">AjiSaka</h2>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" placeholder="Masukkan pencarian" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button type="button" class="input-group-text btn btn-danger" id="basic-addon2">Search</button>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php foreach ($tabel as $rmh) : ?>
                        <div class="col-md-5 col-lg-4">
                            <div class="clean-pricing-item border-danger">
                                <div class="heading">
                                    <h5 class="fw-bold"><?= $rmh["nama"] ?></h5>
                                </div>
                                <p><?= $rmh["deskripsi"] ?></p>
                                <div id="carousel-1" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" style="border-radius: 8px;">
                                        <div class="carousel-item active"><img class="w-100 d-block" src="img/<?= $rmh["gambar"]; ?>" alt="Slide Image"></div>
                                    </div>
                                    <div class="price">
                                        <h5 class="text-danger text-center" style="padding-top: 10px;"><?= $rmh["status"]; ?></h5>
                                    </div>
                                    <a href="detail-product.php?no_rumah=<?= $rmh["no_rumah"]; ?>" style="text-decoration: none;"><button class="btn btn-outline-danger d-block w-100" type="button">BELI SEKARANG!</button></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
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