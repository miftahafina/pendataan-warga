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

$id_keluarga = htmlspecialchars($_POST['id_keluarga']);

$id_user = $_SESSION['user']['id_user'];

// masukkan ke database

$query = "UPDATE kartu_keluarga SET nomor_keluarga = '$nomor_keluarga', id_kepala_keluarga = '$id_kepala_keluarga', alamat_keluarga = '$alamat_keluarga', desa_kelurahan_keluarga = '$desa_kelurahan_keluarga', kecamatan_keluarga = '$kecamatan_keluarga', kabupaten_kota_keluarga = '$kabupaten_kota_keluarga', provinsi_keluarga = '$provinsi_keluarga', negara_keluarga = '$negara_keluarga', rt_keluarga = '$rt_keluarga', rw_keluarga = '$rw_keluarga', kode_pos_keluarga = '$kode_pos_keluarga', id_user = '$id_user', updated_at = CURRENT_TIMESTAMP WHERE kartu_keluarga.id_keluarga = $id_keluarga;";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Ubah kartu keluarga berhasil'); window.location.href='../kartu-keluarga/'</script>";
} else {
  echo "<script>window.alert('Ubah kartu keluarga gagal!'); window.location.href='../kartu-keluarga/'</script>";
}
