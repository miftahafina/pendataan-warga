<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
// $path_galeri = htmlspecialchars($_POST['path_galeri']);
$caption_galeri = htmlspecialchars($_POST['caption_galeri']);
$tautan_galeri = htmlspecialchars($_POST['tautan_galeri']);

$id_user = $_SESSION['user']['id_user'];

// ambil file yang diupload
// nanti cek ekstensi file dulu
$file = $_FILES['path_galeri']['tmp_name'];
$nama_file = $_FILES['path_galeri']['name'];
$destination = "../../assets/img/".$nama_file;

// masukkan ke database

$query = "INSERT INTO galeri (id_galeri, path_galeri, caption_galeri, tautan_galeri, id_user, created_at, updated_at) VALUES (NULL, '$path_galeri', '$caption_galeri', '$tautan_galeri', '$id_user', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  move_uploaded_file($file, $destination);
  // echo "<script>window.alert('Tambah galeri berhasil'); window.location.href='../galeri/create.php'</script>";
} else {
  // echo "<script>window.alert('Tambah galeri gagal!'); window.location.href='../galeri/create.php'</script>";
}
