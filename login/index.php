<?php include('../_partials/top-login.php') ?>

<form class="form-signin" method="post" action="../dasbor">
  <h2 class="form-signin-heading">Silakan login</h2>
  <label for="inputEmail" class="sr-only">Username</label>
  <input type="text" id="inputEmail" class="form-control" placeholder="Email address" autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password">
  <button class="btn btn-lg btn-primary btn-block" type="submit">
    <i class="glyphicon glyphicon-log-in"></i> Log in
  </button>
</form>

<?php include('../_partials/bottom-login.php') ?>
