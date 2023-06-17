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

function hapus($hps)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM formulir WHERE no_daftar = $hps");

  return mysqli_affected_rows($conn);
}

function del($hps)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM katalog WHERE no_rumah = $hps");

  return mysqli_affected_rows($conn);
}

function insert($data)
{
  global $conn;

  $id_admin = $data["id_admin"];
  $nama = $data["nama"];
  $deskripsi = $data["deskripsi"];
  $lokasi = $data["lokasi"];
  $sarana = $data["sarana"];
  $status = $data["status"];

  //upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $insert = "INSERT INTO katalog VALUES (
    '','$id_admin','$nama','$deskripsi','$lokasi','$gambar','$sarana','$status')";

  mysqli_query($conn, $insert);

  return mysqli_affected_rows($conn);
}

function insert2($data)
{
  global $conn;

  $no_rumah = $data["no_rumah"];
  $tipe = $data["tipe"];
  $harga = $data["harga"];
  $luas = $data["luas"];
  $fasilitas = $data["fasilitas"];

  //upload gambar
  $denah = upload2();
  if (!$denah) {
    return false;
  }

  $insert = "INSERT INTO detail_rumah VALUES (
    '$no_rumah','$tipe','$harga','$luas','$fasilitas','$denah')";

  mysqli_query($conn, $insert);

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  global $conn;

  $id_admin = $data["id_admin"];
  $no_rumah = $data["no_rumah"];
  $nama = $data["nama"];
  $deskripsi = $data["deskripsi"];
  $lokasi = $data["lokasi"];
  $sarana = $data["sarana"];
  $status = $data["status"];
  $gambar_lama = $data["gambar_lama"];

  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambar_lama;
  } else {
    $gambar = upload();
  }

  $update = "UPDATE katalog SET 
  nama='$nama',
  deskripsi = '$deskripsi',
  lokasi = '$lokasi',
  gambar = '$gambar',
  sarana = '$sarana',
  status = '$status'
  WHERE no_rumah = '$no_rumah'
  ";

  mysqli_query($conn, $update);

  return mysqli_affected_rows($conn);
}

function edit_2($data)
{
  global $conn;

  $no_rumah = $data["no_rumah"];
  $tipe = $data["tipe"];
  $harga = $data["harga"];
  $luas = $data["luas"];
  $fasilitas = $data["fasilitas"];
  $denah_lama = $data["denah_lama"];

  if ($_FILES['denah']['error'] === 4) {
    $denah = $denah_lama;
  } else {
    $denah = upload2();
  }

  $update = "UPDATE detail_rumah SET 
  tipe='$tipe',
  harga = '$harga',
  luas = '$luas',
  fasilitas = '$fasilitas',
  denah = '$denah'
  WHERE no_rumah = '$no_rumah'
  ";

  mysqli_query($conn, $update);

  return mysqli_affected_rows($conn);
}

function upload()
{
  $namafile = $_FILES['gambar']['name'];
  $ukuranfile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  //cek apakah tidak ada gambar diupload
  if ($error === 4) {
    echo "<script>
    alert('Pilih gambar dulu!');
    </script>";
    return false;
  }

  $ekstensiValid = ['jpg', 'jpeg', 'png'];
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
  move_uploaded_file($tmpName, '../../../RBPL/img/' . $namafileBaru);

  return $namafileBaru;
}

function upload2()
{
  $namafile = $_FILES['denah']['name'];
  $ukuranfile = $_FILES['denah']['size'];
  $error = $_FILES['denah']['error'];
  $tmpName = $_FILES['denah']['tmp_name'];

  //cek apakah tidak ada gambar diupload
  if ($error === 4) {
    echo "<script>
    alert('Pilih gambar dulu!');
    </script>";
    return false;
  }

  $ekstensiValid = ['jpg', 'jpeg', 'png'];
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
  move_uploaded_file($tmpName, '../../../RBPL/img/' . $namafileBaru);

  return $namafileBaru;
}

function progress($data)
{
  global $conn;

  $id_user = $data["id_user"];
  $status = $data["status"];
  $deskripsi = $data["deskripsi"];

  //upload gambar
  $foto = upload_lap();
  if (!$foto) {
    return false;
  }

  $insert = "INSERT INTO laporan VALUES (
    '','$id_user','$foto','$status','$deskripsi')";

  mysqli_query($conn, $insert);

  return mysqli_affected_rows($conn);
}

function upload_lap()
{
  $namafile = $_FILES['foto']['name'];
  $ukuranfile = $_FILES['foto']['size'];
  $error = $_FILES['foto']['error'];
  $tmpName = $_FILES['foto']['tmp_name'];

  //cek apakah tidak ada gambar diupload
  if ($error === 4) {
    echo "<script>
    alert('Pilih gambar dulu!');
    </script>";
    return false;
  }

  $ekstensiValid = ['jpg', 'jpeg', 'png'];
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
  move_uploaded_file($tmpName, '../../../RBPL/img/' . $namafileBaru);

  return $namafileBaru;
}

function edit_lap($data)
{
  global $conn;

  $id_user = $data["id_user"];
  $status = $data["status"];
  $deskripsi = $data["deskripsi"];
  $foto_lama = $data["foto_lama"];

  if ($_FILES['foto']['error'] === 4) {
    $foto = $foto_lama;
  } else {
    $foto = upload_lap();
  }

  $update = "UPDATE laporan SET 
  id_user = '$id_user',
  foto = '$foto',
  status = '$status'
  deskripsi = '$deskripsi'
  WHERE id_user = '$id_user'
  ";

  mysqli_query($conn, $update);

  return mysqli_affected_rows($conn);
}
