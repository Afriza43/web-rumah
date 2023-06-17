<?php

session_start();

if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit();
}

require 'functions.php';

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM customer WHERE username = '$username'");

  //cek username
  if (mysqli_num_rows($result) === 1) {

    //cek password
    $row = mysqli_fetch_assoc($result);
    if ($password == $row["password"]) {

      //set session
      $_SESSION["login"] = true;

      $_SESSION["id_user"] = $row["id_user"];

      header("Location: index.php");
      exit;
    }
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <title>Features - Brand</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i" />
  <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css" />
  <link rel="stylesheet" href="assets/css/Account-setting-or-edit-profile.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
  <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css" />
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
            <a class="nav-link" href="login.php">Login</a>
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
        <section class="clean-block clean-form dark" style="height: 650px">
          <div class="container" style="padding-bottom: 0px">
            <div class="block-heading">
              <h2 class="text-uppercase fw-bold text-danger">LogIn</h2>
              <p>
                Dimohon untuk melakukan login terlebih dahulu sebelum
                mengakses website
              </p>
            </div>
            <form action="" method="post" class="text-start" style="border-top-color: var(--bs-red); border-radius: 8px">
              <div class="mb-3">
                <label class="form-label" for="username">Username</label>
                <input type="text" name="username" class="form-control item" id="username" placeholder="Masukkan Username" />
              </div>
              <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" class="form-control item" id="password" placeholder="Masukkan Password" />
              </div>
              <div class="mb-3" style="text-align: left">
                <div class="row" style="width: 420px; margin-left: 0px">
                  <div class="col form-check" style="width: 210px">
                    <a class="form-check-label text-decoration-none" href="../admin/src/html/login-admin.php">Login as Admin</a>
                  </div>
                  <div class="col" style="width: 210px; padding-left: 45px">
                    <a class="form-check-label text-decoration-none" href="register.php">Belum punya akun?</a>
                  </div>
                </div>
                <?php if (isset($error)) : ?>
                  <p>Username atau password salah</p>
                <?php endif; ?>
              </div>
              <button class="btn btn-primary" type="submit" id="login" name="login" style="
                    background: var(--bs-red);
                    border-style: none;
                    border-color: var(--bs-red);
                    border-top-color: var(--bs-red);
                    border-radius: 5px;
                    width: 420px;
                  ">
                Login
              </button>
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
</body>

</html>