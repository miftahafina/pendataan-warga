<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM mutasi";

$hasil = mysqli_query($db, $query);

$data_mutasi = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_mutasi[] = $row;
}
