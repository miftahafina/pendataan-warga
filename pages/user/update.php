<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nama_user = htmlspecialchars($_POST['nama_user']);
$username_user = htmlspecialchars($_POST['username_user']);
$password_user = md5(htmlspecialchars($_POST['password_user']));
$keterangan_user = htmlspecialchars($_POST['keterangan_user']);
$status_user = htmlspecialchars($_POST['status_user']);

$desa_kelurahan_user = htmlspecialchars($_POST['desa_kelurahan_user']);
$kecamatan_user = htmlspecialchars($_POST['kecamatan_user']);
$kabupaten_kota_user = htmlspecialchars($_POST['kabupaten_kota_user']);
$provinsi_user = htmlspecialchars($_POST['provinsi_user']);
$negara_user = htmlspecialchars($_POST['negara_user']);
$rt_user = htmlspecialchars($_POST['rt_user']);
$rw_user = htmlspecialchars($_POST['rw_user']);

$id_user = htmlspecialchars($_POST['id_user']);

if ($_POST['password_user'] == '') {
  // jika tidak ubah password

  $query = "UPDATE user SET nama_user = '$nama_user', username_user = '$username_user', keterangan_user = '$keterangan_user', status_user = '$status_user', desa_kelurahan_user = '$desa_kelurahan_user', kecamatan_user = '$kecamatan_user', kabupaten_kota_user = '$kabupaten_kota_user', provinsi_user = '$provinsi_user', negara_user = '$negara_user', rt_user = '$rt_user', rw_user = '$rw_user', 	updated_at = CURRENT_TIMESTAMP WHERE user.id_user = $id_user;";
} else {
  // jika ubah password

  $query = "UPDATE user SET nama_user = '$nama_user', username_user = '$username_user', password_user = '$password_user', keterangan_user = '$keterangan_user', status_user = '$status_user', desa_kelurahan_user = '$desa_kelurahan_user', kecamatan_user = '$kecamatan_user', kabupaten_kota_user = '$kabupaten_kota_user', provinsi_user = '$provinsi_user', negara_user = '$negara_user', rt_user = '$rt_user', rw_user = '$rw_user', 	updated_at = CURRENT_TIMESTAMP WHERE user.id_user = $id_user;";
}

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah data user berhasil'); window.location.href='../user'</script>";
} else {
  echo "<script>window.alert('Ubah data user gagal!'); window.location.href='../user'</script>";
}
