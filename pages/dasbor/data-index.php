<?php
include('../../config/koneksi.php');

// hitung warga
$query_warga = "SELECT COUNT(*) AS total FROM warga";
$hasil_warga = mysqli_query($db, $query_warga);
$data_warga = mysqli_fetch_assoc($hasil_warga);

// hitung kartu keluarga
$query_kartu_keluarga = "SELECT COUNT(*) AS total FROM kartu_keluarga";
$hasil_kartu_keluarga = mysqli_query($db, $query_kartu_keluarga);
$data_kartu_keluarga = mysqli_fetch_assoc($hasil_kartu_keluarga);

// hitung mutasi
$query_mutasi = "SELECT COUNT(*) AS total FROM mutasi";
$hasil_mutasi = mysqli_query($db, $query_mutasi);
$data_mutasi = mysqli_fetch_assoc($hasil_mutasi);

// hitung warga laki-laki
$query_warga_l = "SELECT COUNT(*) AS total FROM warga WHERE jenis_kelamin_warga = 'L'";
$hasil_warga_l = mysqli_query($db, $query_warga_l);
$data_warga_l = mysqli_fetch_assoc($hasil_warga_l);

// hitung warga laki-laki
$query_warga_p = "SELECT COUNT(*) AS total FROM warga WHERE jenis_kelamin_warga = 'P'";
$hasil_warga_p = mysqli_query($db, $query_warga_p);
$data_warga_p = mysqli_fetch_assoc($hasil_warga_p);

// hitung warga lebih dari 17 tahun
$query_warga_ld_17 = "SELECT COUNT(*) AS total FROM warga WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_warga, CURDATE()) >= 17";
$hasil_warga_ld_17 = mysqli_query($db, $query_warga_ld_17);
$data_warga_ld_17 = mysqli_fetch_assoc($hasil_warga_ld_17);

// hitung warga kurang dari 17 tahun
$query_warga_kd_17 = "SELECT COUNT(*) AS total FROM warga WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_warga, CURDATE()) < 17";
$hasil_warga_kd_17 = mysqli_query($db, $query_warga_kd_17);
$data_warga_kd_17 = mysqli_fetch_assoc($hasil_warga_kd_17);

// hitung mutasi laki-laki
$query_mutasi_l = "SELECT COUNT(*) AS total FROM mutasi WHERE jenis_kelamin_mutasi = 'L'";
$hasil_mutasi_l = mysqli_query($db, $query_mutasi_l);
$data_mutasi_l = mysqli_fetch_assoc($hasil_mutasi_l);

// hitung mutasi laki-laki
$query_mutasi_p = "SELECT COUNT(*) AS total FROM mutasi WHERE jenis_kelamin_mutasi = 'P'";
$hasil_mutasi_p = mysqli_query($db, $query_mutasi_p);
$data_mutasi_p = mysqli_fetch_assoc($hasil_mutasi_p);

// hitung mutasi lebih dari 17 tahun
$query_mutasi_ld_17 = "SELECT COUNT(*) AS total FROM mutasi WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_mutasi, CURDATE()) >= 17";
$hasil_mutasi_ld_17 = mysqli_query($db, $query_mutasi_ld_17);
$data_mutasi_ld_17 = mysqli_fetch_assoc($hasil_mutasi_ld_17);

// hitung mutasi kurang dari 17 tahun
$query_mutasi_kd_17 = "SELECT COUNT(*) AS total FROM mutasi WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_mutasi, CURDATE()) < 17";
$hasil_mutasi_kd_17 = mysqli_query($db, $query_mutasi_kd_17);
$data_mutasi_kd_17 = mysqli_fetch_assoc($hasil_mutasi_kd_17);
