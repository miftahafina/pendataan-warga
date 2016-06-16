<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_keluarga = $_GET['id_keluarga'];

// ambil dari database
$query = "SELECT * FROM kartu_keluarga WHERE id_keluarga = $get_id_keluarga";

$hasil = mysqli_query($db, $query);

$data_keluarga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_keluarga[] = $row;
}

// ambil data anggota
