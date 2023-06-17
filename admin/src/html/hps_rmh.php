<?php
/*session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
*/

require 'admin_func.php';

$hps = $_GET["no_rumah"];

if (del($hps) > 0) {
  echo "
  <script>
  alert('Data berhasil dihapus');
  document.location.href = 'katalog.php';
  </script>";
} else {
  echo
  "<script>
  alert('Data Gagal dihapus');
  document.location.href = 'katalog.php';
  </script>";
}
