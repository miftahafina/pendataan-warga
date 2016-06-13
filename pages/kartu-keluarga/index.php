<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kartu Keluarga</h1>
<?php include('_partials/menu.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>No. KK</th>
      <th>NIK</th>
      <th>Nama</th>
      <th>Jumlah Anggota</th>
      <th>Alamat</th>
      <th>RT</th>
      <th>RW</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>1234567890123456</td>
      <td>1234567890123456</td>
      <td>Miftah Afina</td>
      <td>5</td>
      <td>Jl. Alamat Ini Itu</td>
      <td>002</td>
      <td>004</td>
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
            <li>
              <a href="edit-anggota.php"><span class="glyphicon glyphicon-list"></span> Ubah Anggota</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="edit.php"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
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

<br><br>

<div class="well">
  <dl class="dl-horizontal">
    <dt>Total Kartu Keluarga</dt>
    <dd>20 keluarga</dd>
  </dl>
</div>

<?php include('../_partials/bottom.php') ?>
