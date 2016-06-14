<?php
session_start();

// jika sudah login, alihkan ke halaman dasbor
if (isset($_SESSION['user'])) {
  header('Location: ../dasbor/index.php');
  exit();
}
?>

<?php include('../_partials/top-login.php') ?>

<form class="form-signin" method="post" action="../login/proses-login.php">
  <h2 class="form-signin-heading">Silakan login</h2>

  <input type="text" name="username_user" class="form-control" placeholder="Username" autofocus>

  <input type="password" name="password_user" class="form-control" placeholder="Password">

  <button class="btn btn-lg btn-primary btn-block" type="submit">
    <i class="glyphicon glyphicon-log-in"></i> Log in
  </button>
</form>

<?php include('../_partials/bottom-login.php') ?>
