<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nomor_keluarga = htmlspecialchars($_POST['nomor_keluarga']);
$id_kepala_keluarga = htmlspecialchars($_POST['id_kepala_keluarga']);

$alamat_keluarga = htmlspecialchars($_POST['alamat_keluarga']);
$desa_kelurahan_keluarga = htmlspecialchars($_POST['desa_kelurahan_keluarga']);
$kecamatan_keluarga = htmlspecialchars($_POST['kecamatan_keluarga']);
$kabupaten_kota_keluarga = htmlspecialchars($_POST['kabupaten_kota_keluarga']);
$provinsi_keluarga = htmlspecialchars($_POST['provinsi_keluarga']);
$negara_keluarga = htmlspecialchars($_POST['negara_keluarga']);
$rt_keluarga = htmlspecialchars($_POST['rt_keluarga']);
$rw_keluarga = htmlspecialchars($_POST['rw_keluarga']);
$kode_pos_keluarga = htmlspecialchars($_POST['kode_pos_keluarga']);

$id_user = $_SESSION['user']['id_user'];

// masukkan ke database

$query = "INSERT INTO kartu_keluarga (id_keluarga, nomor_keluarga, id_kepala_keluarga, alamat_keluarga, desa_kelurahan_keluarga, kecamatan_keluarga, kabupaten_kota_keluarga, provinsi_keluarga, negara_keluarga, rt_keluarga, rw_keluarga, kode_pos_keluarga, id_user, created_at, updated_at) VALUES (NULL, '$nomor_keluarga', '$id_kepala_keluarga', '$alamat_keluarga', '$desa_kelurahan_keluarga', '$kecamatan_keluarga', '$kabupaten_kota_keluarga', '$provinsi_keluarga', '$negara_keluarga', '$rt_keluarga', '$rw_keluarga', '$kode_pos_keluarga', '$id_user', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// id terakhir
// mysqli_insert_id($db)

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah kartu keluarga berhasil'); window.location.href='../kartu-keluarga/create.php'</script>";
} else {
  echo "<script>window.alert('Tambah kartu keluarga gagal!'); window.location.href='../kartu-keluarga/create.php'</script>";
}
