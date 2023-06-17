<?php
session_start();

require 'functions.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body class="text-start">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#"><strong>Ajisaka</strong></a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div id="navcol-1" class="collapse navbar-collapse">
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
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image: url('assets/img/tech/Landing-Page.jpg');color: rgba(227, 40, 31, 0.50);">
            <div class="text">
                <h2 class="fw-bold">Ajisaka</h2>
                <p>Melayani masyarakat dalam membangun rumah murah di seluruh Nusantara</p>
                <a href="catalog.php"><button class="btn btn-outline-light btn-lg" type="button">Pesan Sekarang!</button></a>
            </div>
        </section>
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="fw-bold text-danger">Mengapa Harus Ajisaka?</h2>
                    <p>Dengan menggunakan Ajika, akan memberi berbagai kemudahan dalam melakukan pemesanan rumah</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-star text-danger icon"></i>
                        <h4>Trusted</h4>
                        <p>PT. Ajisaka merupakan perusahaan pengembang perumahan terutama di bidang Rumah Sehat Sederhana (RSH)</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-pencil text-danger icon"></i>
                        <h4>Customizable</h4>
                        <p>Memberikan kemudahan kepada masyarat untuk mendapat rumah impian dengan spesifikasi sesuai keinginan</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-screen-smartphone text-danger icon"></i>
                        <h4>Responsive</h4>
                        <p>Dapat melakukan pemesanan rumah kapan saja dan dimana saja dengan sangat mudah</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-refresh text-danger icon"></i>
                        <h4>Infomation Feedback</h4>
                        <p>Memberikan informasi terkait pembangunan rumah kepada pelanggan secara terperinci</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clean-block slider dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="fw-bold text-danger">Proyek Terkini</h2>
                </div>
                <div id="carousel-1" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/scenery/Slider-1.jpg" alt="Slide Image" /></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/Slider-2.jpg" alt="Slide Image" /></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/Slider-3.jpg" alt="Slide Image" /></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li class="active" data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                    </ol>
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
</body>

</html>