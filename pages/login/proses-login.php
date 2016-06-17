<?php
session_start();
include('../../config/koneksi.php');

// ambil data
$username_user = htmlspecialchars($_POST['username_user']);
$password_user = md5(htmlspecialchars($_POST['password_user']));

// periksa username dan password
$query = "SELECT * FROM user WHERE username_user = '$username_user' and password_user = '$password_user'";
$hasil = mysqli_query($db, $query);
$data_user = mysqli_fetch_assoc($hasil);

// cek
if ($data_user != null) {
  // jika user dan password cocok
  $_SESSION['user'] = $data_user;
  header('Location: ../dasbor');
} else {
  // jika user dan password tidak cocok
  echo "<script>window.alert('Username atau password salah'); window.location.href='../login'</script>";
}
