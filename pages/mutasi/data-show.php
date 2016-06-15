<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_mutasi = $_GET['id_mutasi'];

// ambil dari database
$query = "SELECT * FROM mutasi WHERE id_mutasi = $get_id_mutasi";

$hasil = mysqli_query($db, $query);

$data_mutasi = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_mutasi[] = $row;
}
