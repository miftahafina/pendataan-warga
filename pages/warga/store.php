<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nik_warga = htmlspecialchars($_POST['nik_warga']);
$nama_warga = htmlspecialchars($_POST['nama_warga']);
$tempat_lahir_warga = htmlspecialchars($_POST['tempat_lahir_warga']);
$tanggal_lahir_warga = htmlspecialchars($_POST['tanggal_lahir_warga']);
$jenis_kelamin_warga = htmlspecialchars($_POST['jenis_kelamin_warga']);

$alamat_ktp_warga = htmlspecialchars($_POST['alamat_ktp_warga']);
$alamat_warga = htmlspecialchars($_POST['alamat_warga']);
$desa_kelurahan_warga = htmlspecialchars($_POST['desa_kelurahan_warga']);
$kecamatan_warga = htmlspecialchars($_POST['kecamatan_warga']);
$kabupaten_kota_warga = htmlspecialchars($_POST['kabupaten_kota_warga']);
$provinsi_warga = htmlspecialchars($_POST['provinsi_warga']);
$negara_warga = htmlspecialchars($_POST['negara_warga']);
$rt_warga = htmlspecialchars($_POST['rt_warga']);
$rw_warga = htmlspecialchars($_POST['rw_warga']);

$agama_warga = htmlspecialchars($_POST['agama_warga']);
$pendidikan_terakhir_warga = htmlspecialchars($_POST['pendidikan_terakhir_warga']);
$pekerjaan_warga = htmlspecialchars($_POST['pekerjaan_warga']);
$status_perkawinan_warga = htmlspecialchars($_POST['status_perkawinan_warga']);
$status_warga = htmlspecialchars($_POST['status_warga']);

$id_user = $_SESSION['user']['id_user'];

// masukkan ke database

$query = "INSERT INTO warga (id_warga, nik_warga, nama_warga, tempat_lahir_warga, tanggal_lahir_warga, jenis_kelamin_warga, alamat_ktp_warga, alamat_warga, desa_kelurahan_warga, kecamatan_warga, kabupaten_kota_warga, provinsi_warga, negara_warga, rt_warga, rw_warga, agama_warga, pendidikan_terakhir_warga, pekerjaan_warga, status_perkawinan_warga, status_warga, id_user, created_at, updated_at) VALUES (NULL, '$nik_warga', '$nama_warga', '$tempat_lahir_warga', '$tanggal_lahir_warga', '$jenis_kelamin_warga', '$alamat_ktp_warga', '$alamat_warga', '$desa_kelurahan_warga', '$kecamatan_warga', '$kabupaten_kota_warga', '$provinsi_warga', '$negara_warga', '$rt_warga', '$rw_warga', '$agama_warga', '$pendidikan_terakhir_warga', '$pekerjaan_warga', '$status_perkawinan_warga', '$status_warga', '$id_user', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah warga berhasil'); window.location.href='../warga/create.php'</script>";
} else {
  echo "<script>window.alert('Tambah warga gagal!'); window.location.href='../warga/create.php'</script>";
}
