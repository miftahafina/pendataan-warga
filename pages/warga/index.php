<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Warga</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>
<?php include('../dasbor/data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>NIK</th>
      <th>Nama Warga</th>
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
    <?php $nomor = 1; ?>
    <?php foreach ($data_warga as $warga) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $warga['nik_warga'] ?></td>
      <td><?php echo $warga['nama_warga'] ?></td>
      <td><?php echo $warga['jenis_kelamin_warga'] ?></td>
      <!-- <td>
        <?php echo ($warga['tanggal_lahir_warga'] != '0000-00-00') ? date('d-m-Y', strtotime($warga['tanggal_lahir_warga'])) : ''?>
      </td> -->
      <td><?php echo $warga['usia_warga'] ?></td>
      <td><?php echo $warga['pendidikan_terakhir_warga'] ?></td>
      <td><?php echo $warga['pekerjaan_warga'] ?></td>
      <td><?php echo $warga['status_perkawinan_warga'] ?></td>
      <td><?php echo $warga['status_warga'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="show.php?id_warga=<?php echo $warga['id_warga'] ?>"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
            </li>
            <li>
              <a href="cetak-show.php?id_warga=<?php echo $warga['id_warga'] ?>" target="_blank"><i class="glyphicon glyphicon-print"></i> Cetak</a>
            </li>
            <?php if ($_SESSION['user']['status_user'] != 'RW'): ?>
            <li class="divider"></li>
            <li>
              <a href="edit.php?id_warga=<?php echo $warga['id_warga'] ?>"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
            </li>
            <li>
              <a href="../mutasi/create.php?id_warga=<?php echo $warga['id_warga'] ?>"><i class="glyphicon glyphicon-export"></i> Mutasi</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="delete.php?id_warga=<?php echo $warga['id_warga'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                <i class="glyphicon glyphicon-trash"></i> Hapus
              </a>
            </li>
            <?php endif; ?>
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
    <dt>Total Warga</dt>
    <dd><?php echo $jumlah_warga['total'] ?> orang</dd>

    <dt>Jumlah Laki-laki</dt>
    <dd><?php echo $jumlah_warga_l['total'] ?> orang</dd>

    <dt>Jumlah Perempuan</dt>
    <dd><?php echo $jumlah_warga_p['total'] ?> orang</dd>

    <dt>Warga < 17 tahun</dt>
    <dd><?php echo $jumlah_warga_kd_17['total'] ?> orang</dd>

    <dt>Warga >= 17 tahun</dt>
    <dd><?php echo $jumlah_warga_ld_17['total'] ?> orang</dd>
  </dl>
</div>

<?php include('../_partials/bottom.php') ?>
