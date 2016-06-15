<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Mutasi</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>NIK</th>
      <th>Nama Mutasi</th>
      <th>L/P</th>
      <!-- <th>Lahir</th> -->
      <th>Usia</th>
      <th>Pendidikan</th>
      <th>Pekerjaan</th>
      <th>Kawin</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data_mutasi as $mutasi) : ?>
    <tr>
      <td><?php echo $mutasi['id_mutasi'] ?></td>
      <td><?php echo $mutasi['nik_mutasi'] ?></td>
      <td><?php echo $mutasi['nama_mutasi'] ?></td>
      <td><?php echo $mutasi['jenis_kelamin_mutasi'] ?></td>
      <!-- <td>
        <?php echo ($mutasi['tanggal_lahir_mutasi'] != '0000-00-00') ? date('d-m-Y', strtotime($mutasi['tanggal_lahir_mutasi'])) : ''?>
      </td> -->
      <td><?php echo $mutasi['usia_mutasi'] ?></td>
      <td><?php echo $mutasi['pendidikan_terakhir_mutasi'] ?></td>
      <td><?php echo $mutasi['pekerjaan_mutasi'] ?></td>
      <td><?php echo $mutasi['status_perkawinan_mutasi'] ?></td>
      <td><?php echo $mutasi['status_mutasi'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="show.php?id_mutasi=<?php echo $mutasi['id_mutasi'] ?>"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="delete.php?id_mutasi=<?php echo $mutasi['id_mutasi'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                <i class="glyphicon glyphicon-trash"></i> Hapus
              </a>
            </li>
          </ul>
        </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<br><br>

<div class="well">
  <dl class="dl-horizontal">
    <dt>Total Mutasi</dt>
    <dd>20 orang</dd>

    <dt>Jumlah Laki-laki</dt>
    <dd>20 orang</dd>

    <dt>Jumlah Perempuan</dt>
    <dd>25 orang</dd>

    <dt>Mutasi < 17 tahun</dt>
    <dd>14 orang</dd>

    <dt>Mutasi >= 17 tahun</dt>
    <dd>18 orang</dd>
  </dl>
</div>

<?php include('../_partials/bottom.php') ?>
