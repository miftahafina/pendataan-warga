<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM warga";

$hasil = mysqli_query($db, $query);

$data_warga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}
