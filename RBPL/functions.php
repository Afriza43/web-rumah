<?php

$conn = mysqli_connect("localhost", "root", "", "rumah");

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function register($data)
{
  global $conn;

  $username = strtolower(stripslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);

  //cek username
  $result = mysqli_query($conn, "SELECT username FROM customer WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
    alert('Username sudah ada!');
    </script>";

    return false;
  }

  //tambah user baru
  mysqli_query($conn, "INSERT INTO customer VALUES('','$username','$password')");

  return mysqli_affected_rows($conn);
}


function formulir($data)
{
  global $conn;

  $id_user = $data['id_user'];
  $nama = $data["nama"];
  $status = $data["status"];
  $pekerjaan = $data["pekerjaan"];
  $email = $data["email"];
  $tipe_pesanan = $data["tipe_pesanan"];
  $blok = $data["blok"];
  $no_kavling = $data["no_kavling"];
  $no_telp = $data["no_telp"];

  //upload gambar
  $ktp = upload();
  if (!$ktp) {
    return false;
  }

  $insert = "INSERT INTO formulir VALUES (
    '','$id_user','$no_telp','$nama','$status','$pekerjaan','$email','$ktp','$tipe_pesanan','$blok','$no_kavling')";

  mysqli_query($conn, $insert);

  return mysqli_affected_rows($conn);
}

function upload()
{
  $namafile = $_FILES['ktp']['name'];
  $ukuranfile = $_FILES['ktp']['size'];
  $error = $_FILES['ktp']['error'];
  $tmpName = $_FILES['ktp']['tmp_name'];

  //cek apakah tidak ada gambar diupload
  if ($error === 4) {
    echo "<script>
    alert('Pilih gambar dulu!');
    </script>";
    return false;
  }

  $ekstensiValid = ['jpg', 'jpeg', 'png', 'pdf'];
  $ekstensiGambar = explode('.', $namafile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiValid)) {
    echo "<script>
    alert('Yang diupload bukan gambar!');
    </script>";
    return false;
  }

  //cek jika ukuran terlalu besar
  if ($ukuranfile > 50000000) {
    echo "<script>
    alert('Terlalu besar!');
    </script>";
    return false;
  }
  //generate nama baru
  $namafileBaru = uniqid();
  $namafileBaru .= '.';
  $namafileBaru .= $ekstensiGambar;


  //lolos cek, gambar siap diupload
  move_uploaded_file($tmpName, 'img/' . $namafileBaru);

  return $namafileBaru;
}
