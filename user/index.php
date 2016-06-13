<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data User</h1>
<?php include('_partials/menu.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>Nama</th>
      <th>Username</th>
      <th>Keterangan</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Miftah Afina</td>
      <td>afin</td>
      <td>User ini tidak jelas</td>
      <td>Admin</td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="show.php"><span class="glyphicon glyphicon-sunglasses"></span> Detail</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="edit.php"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
            </li>
            <li>
              <a href="mutasi.php"><span class="glyphicon glyphicon-export"></span> Mutasi</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
            </li>
          </ul>
        </div>
      </td>
    </tr>
  </tbody>
</table>

<?php include('../_partials/bottom.php') ?>
