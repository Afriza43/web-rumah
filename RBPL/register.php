<?php

require 'functions.php';

if (isset($_POST['register'])) {

    if (register($_POST) > 0) {
        echo "<script>
        alert('User Berhasil Dibuat');
        </script>";
    } else {
        echo mysqli_error($conn);
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
                </ul>
            </div>
        </div>
    </nav>
    <main class="page">
        <section class="clean-block features" style="padding: 0px;">
            <div class="container" style="padding: 50px 12px;">
                <section class="clean-block clean-form dark" style="padding-bottom: 100px;">
                    <section class="clean-block clean-form dark">
                        <div class="container">
                            <div class="block-heading">
                                <h2 class="text-uppercase fw-bold text-danger">Register</h2>
                                <p>Silahkan isi form dibawah ini untuk membuat akun</p>
                            </div>
                            <form style="border-color: var(--bs-red);border-radius: 9px;" action="" method="post">
                                <div class="mb-3"><label class="form-label" for="name">Username</label><input class="form-control item" type="text" name="username" placeholder="Username" id="name"></div>
                                <div class="mb-3"><label class="form-label" for="password">Password</label><input class="form-control item" type="password" name="password" placeholder="Password" id="password"></div>
                                <a class="form-check-label text-decoration-none" href="login.php">Sudah punya akun?</a><br>
                                <button class="mb-3 btn btn-primary item-center" type="submit" name="register">Register</button>
                            </form>
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