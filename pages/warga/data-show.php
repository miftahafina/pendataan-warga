<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_warga = $_GET['id_warga'];

// ambil dari database
$query = "SELECT * FROM warga WHERE id_warga = $get_id_warga";

$hasil = mysqli_query($db, $query);

$data_warga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}
