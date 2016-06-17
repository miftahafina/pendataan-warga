<?php
session_start();

// jika sudah login, alihkan ke halaman dasbor
if (isset($_SESSION['user'])) {
  header('Location: ../dasbor/index.php');
  exit();
}
?>

<?php include('../_partials/top-login.php') ?>

<div class="row" style="margin-top: 75px">
  <div class="col-md-4 col-md-offset-4">
    <div class="well">

      <form class="form-signin" method="post" action="../login/proses-login.php">
        <h2 class="form-signin-heading text-center">
          <strong>Pendataan Warga</strong>
        </h2>

        <h4 class="form-signin-heading text-center">Silakan login</h4>

        <input type="text" name="username_user" class="form-control" placeholder="Username" autofocus required>

        <input type="password" name="password_user" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">
          <i class="glyphicon glyphicon-log-in"></i> Log in
        </button>
      </form>
    </div>
  </div>
</div>

<?php include('../_partials/bottom-login.php') ?>
