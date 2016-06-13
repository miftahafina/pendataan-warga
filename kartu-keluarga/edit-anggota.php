<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kartu Keluarga</h1>
<?php include('_partials/menu.php') ?>

<form action="" method="post">
<h3>Daftar Nama Warga</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama Warga</th>
    <td width="1%">:</td>
    <td>
      <select class="form-control">
        <option value="">Nama 1</option>
        <option value="">Nama 2</option>
        <option value="">Nama 3</option>
        <option value="">Nama 4</option>
        <option value="">Nama 5</option>
      </select>
    </td>
  </tr>
</table>

<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-plus"></i> Tambahkan
</button>
</form>

<br><br>

<h3>Data Anggota Kartu Keluarga</h3>
<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>NIK</th>
      <th>Nama Warga</th>
      <th>Tempat Lahir</th>
      <th>Usia</th>
      <th>Pendidikan</th>
      <th>Pekerjaan</th>
      <th>Kawin</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>12345678901234</td>
      <td>Miftah Afina</td>
      <td>Pemalang</td>
      <td>17</td>
      <td>SMA</td>
      <td>Serabutan</td>
      <td>Tidak Kawin</td>
      <td>Tetap</td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="../user/show.php"><span class="glyphicon glyphicon-sunglasses"></span> Detail</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#"><span class="glyphicon glyphicon-trash"></span> Hapus dari Anggota</a>
            </li>
          </ul>
        </div>
      </td>
    </tr>
  </tbody>
</table>

<?php include('../_partials/bottom.php') ?>
