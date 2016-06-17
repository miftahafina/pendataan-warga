<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM galeri";

$hasil = mysqli_query($db, $query);

$data_galeri = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_galeri[] = $row;
}
