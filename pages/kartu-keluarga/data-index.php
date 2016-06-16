<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM kartu_keluarga LEFT JOIN warga ON kartu_keluarga.id_kepala_keluarga = warga.id_warga";

$hasil = mysqli_query($db, $query);

$data_kartu_keluarga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_kartu_keluarga[] = $row;
}

// hitung kartu keluarga
$query_jumlah_kartu_keluarga = "SELECT COUNT(*) AS total FROM kartu_keluarga";
$hasil_jumlah_kartu_keluarga = mysqli_query($db, $query_jumlah_kartu_keluarga);
$jumlah_kartu_keluarga = mysqli_fetch_assoc($hasil_jumlah_kartu_keluarga);
