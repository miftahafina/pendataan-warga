<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Warga</h1>
<?php include('_partials/menu.php') ?>

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

<br><br>

<div class="well">
  <dl class="dl-horizontal">
    <dt>Total Warga</dt>
    <dd>20 orang</dd>

    <dt>Jumlah Laki-laki</dt>
    <dd>20 orang</dd>

    <dt>Jumlah Perempuan</dt>
    <dd>25 orang</dd>

    <dt>Warga < 17 tahun</dt>
    <dd>14 orang</dd>

    <dt>Warga >= 17 tahun</dt>
    <dd>18 orang</dd>
  </dl>
</div>

<?php include('../_partials/bottom.php') ?>
