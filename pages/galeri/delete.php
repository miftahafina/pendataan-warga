<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$id_galeri = htmlspecialchars($_GET['id_galeri']);
$path_galeri = htmlspecialchars($_GET['path_galeri']);

// delete database
$query = "DELETE FROM galeri WHERE id_galeri = $id_galeri";

$hasil = mysqli_query($db, $query);

// delete file
exec("rm ../../assets/upload/".$path_galeri);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.location.href='../galeri'</script>";
} else {
  echo "<script>window.alert('Foto gagal dihapus!'); window.location.href='../galeri'</script>";
}
