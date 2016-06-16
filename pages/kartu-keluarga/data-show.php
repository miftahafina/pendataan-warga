<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_keluarga = $_GET['id_keluarga'];

// ambil dari database
$query = "SELECT * FROM kartu_keluarga LEFT JOIN warga ON kartu_keluarga.id_kepala_keluarga = warga.id_warga WHERE id_keluarga = $get_id_keluarga";

$hasil = mysqli_query($db, $query);

$data_keluarga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_keluarga[] = $row;
}

// ambil data anggota keluarga
$query_anggota = "SELECT *
from warga INNER JOIN warga_has_kartu_keluarga
ON warga_has_kartu_keluarga.id_warga = warga.id_warga
WHERE warga_has_kartu_keluarga.id_keluarga = $get_id_keluarga";

$hasil_anggota = mysqli_query($db, $query_anggota);

$data_anggota_keluarga = array();

while ($row_anggota = mysqli_fetch_assoc($hasil_anggota)) {
  $data_anggota_keluarga[] = $row_anggota;
}

// data warga
// ambil dari database
$query_warga = "SELECT * FROM warga";
$hasil_warga = mysqli_query($db, $query_warga);

$data_warga = array();

while ($row_warga = mysqli_fetch_assoc($hasil_warga)) {
  $data_warga[] = $row_warga;
}
