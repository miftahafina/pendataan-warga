<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kartu Keluarga</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-show.php') ?>

<form action="update.php" method="post">
<h3>A. Data Pribadi</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nomor Kartu Keluarga</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nomor_keluarga" value="<?php echo $data_keluarga[0]['nomor_keluarga'] ?>"></td>
  </tr>
  <tr>
    <th>Kepala Keluarga</th>
    <td>:</td>
    <td>
      <select class="form-control selectlive" name="id_kepala_keluarga" required>
        <option value="<?php echo $data_keluarga[0]['id_warga'] ?>" selected><?php echo $data_keluarga[0]['nama_warga'] ?></option>
        <?php foreach ($data_warga as $warga) : ?>
        <option value="<?php echo $warga['id_warga'] ?>">
          <?php echo $warga['nama_warga'] ?> (NIK: <?php echo $warga['nik_warga'] ?>)
        </option>
        <?php endforeach ?>
      </select>
    </td>
  </tr>
</table>

<h3>B. Data Alamat</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Alamat</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="alamat_keluarga" value="<?php echo $data_keluarga[0]['alamat_keluarga'] ?>"></td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rt_keluarga" value="<?php echo $data_keluarga[0]['rt_keluarga'] ?>"></td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rw_keluarga" value="<?php echo $data_keluarga[0]['rw_keluarga'] ?>"></td>
  </tr>
  <tr>
    <th>Desa/Kelurahan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="desa_kelurahan_keluarga" value="<?php echo $data_keluarga[0]['desa_kelurahan_keluarga'] ?>"></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kecamatan_keluarga" value="<?php echo $data_keluarga[0]['kecamatan_keluarga'] ?>"></td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kabupaten_kota_keluarga" value="<?php echo $data_keluarga[0]['kabupaten_kota_keluarga'] ?>"></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="provinsi_keluarga" value="<?php echo $data_keluarga[0]['provinsi_keluarga'] ?>"></td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="negara_keluarga" value="<?php echo $data_keluarga[0]['negara_keluarga'] ?>"></td>
  </tr>
  <tr>
    <th>Kode Pos</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kode_pos_keluarga" value="<?php echo $data_keluarga[0]['kode_pos_keluarga'] ?>"></td>
  </tr>
</table>

<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-floppy-save"></i> Simpan
</button>

<input type="hidden" name="id_keluarga" value="<?php echo $data_keluarga[0]['id_keluarga'] ?>">
</form>

<?php include('../_partials/bottom.php') ?>
