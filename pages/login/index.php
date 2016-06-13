<?php include('../_partials/top-login.php') ?>

<form class="form-signin" method="post" action="../dasbor">
  <h2 class="form-signin-heading">Silakan login</h2>

  <input type="text" class="form-control" placeholder="Username" autofocus>

  <input type="password" class="form-control" placeholder="Password">

  <button class="btn btn-lg btn-primary btn-block" type="submit">
    <i class="glyphicon glyphicon-log-in"></i> Log in
  </button>
</form>

<?php include('../_partials/bottom-login.php') ?>
