<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// ambil data dari form
$nik_mutasi = htmlspecialchars($_POST['nik_mutasi']);
$nama_mutasi = htmlspecialchars($_POST['nama_mutasi']);
$tempat_lahir_mutasi = htmlspecialchars($_POST['tempat_lahir_mutasi']);
$tanggal_lahir_mutasi = htmlspecialchars($_POST['tanggal_lahir_mutasi']);
$jenis_kelamin_mutasi = htmlspecialchars($_POST['jenis_kelamin_mutasi']);

$alamat_ktp_mutasi = htmlspecialchars($_POST['alamat_ktp_mutasi']);
$alamat_mutasi = htmlspecialchars($_POST['alamat_mutasi']);
$desa_kelurahan_mutasi = htmlspecialchars($_POST['desa_kelurahan_mutasi']);
$kecamatan_mutasi = htmlspecialchars($_POST['kecamatan_mutasi']);
$kabupaten_kota_mutasi = htmlspecialchars($_POST['kabupaten_kota_mutasi']);
$provinsi_mutasi = htmlspecialchars($_POST['provinsi_mutasi']);
$negara_mutasi = htmlspecialchars($_POST['negara_mutasi']);
$rt_mutasi = htmlspecialchars($_POST['rt_mutasi']);
$rw_mutasi = htmlspecialchars($_POST['rw_mutasi']);

$agama_mutasi = htmlspecialchars($_POST['agama_mutasi']);
$pendidikan_terakhir_mutasi = htmlspecialchars($_POST['pendidikan_terakhir_mutasi']);
$pekerjaan_mutasi = htmlspecialchars($_POST['pekerjaan_mutasi']);
$status_perkawinan_mutasi = htmlspecialchars($_POST['status_perkawinan_mutasi']);
$status_mutasi = htmlspecialchars($_POST['status_mutasi']);

$id_warga = htmlspecialchars($_POST['id_warga']);

$id_user = $_SESSION['user']['id_user'];

// masukkan ke database

$query = "INSERT INTO mutasi (id_mutasi, nik_mutasi, nama_mutasi, tempat_lahir_mutasi, tanggal_lahir_mutasi, jenis_kelamin_mutasi, alamat_ktp_mutasi, alamat_mutasi, desa_kelurahan_mutasi, kecamatan_mutasi, kabupaten_kota_mutasi, provinsi_mutasi, negara_mutasi, rt_mutasi, rw_mutasi, agama_mutasi, pendidikan_terakhir_mutasi, pekerjaan_mutasi, status_perkawinan_mutasi, status_mutasi, id_user, created_at, updated_at) VALUES (NULL, '$nik_mutasi', '$nama_mutasi', '$tempat_lahir_mutasi', '$tanggal_lahir_mutasi', '$jenis_kelamin_mutasi', '$alamat_ktp_mutasi', '$alamat_mutasi', '$desa_kelurahan_mutasi', '$kecamatan_mutasi', '$kabupaten_kota_mutasi', '$provinsi_mutasi', '$negara_mutasi', '$rt_mutasi', '$rw_mutasi', '$agama_mutasi', '$pendidikan_terakhir_mutasi', '$pekerjaan_mutasi', '$status_perkawinan_mutasi', '$status_mutasi', '$id_user', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

$hasil = mysqli_query($db, $query);

// delete data warga yang sudah dimutasi
if ($hasil == true) {
  # jika sudah berhasil mutasi maka hapus
  $query_delete = "DELETE FROM warga WHERE id_warga = $id_warga";

  $hasil_delete = mysqli_query($db, $query_delete);
}

// cek keberhasilan pendambahan data
if ($hasil == true) {
  echo "<script>window.alert('Mutasi warga berhasil'); window.location.href='../mutasi/'</script>";
} else {
  echo "<script>window.alert('Mutasi warga gagal!'); window.location.href='../mutasi/create.php?id_warga=".$id_warga."'</script>";
}
