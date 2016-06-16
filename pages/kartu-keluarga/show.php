<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kartu Keluarga</h1>
<?php include('_partials/menu.php') ?>

<h3>A. Data Pribadi</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nomor Kartu Keluarga</th>
    <td width="1%">:</td>
    <td></td>
  </tr>
  <tr>
    <th>ID Kepala Keluarga</th>
    <td>:</td>
    <td></td>
  </tr>
</table>

<h3>B. Data Alamat</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Alamat</th>
    <td width="1%">:</td>
    <td></td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <th>Desa/Kelurahan</th>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <th>Kode Pos</th>
    <td>:</td>
    <td></td>
  </tr>
</table>

<h3>C. Data Aplikasi</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Diinput oleh</th>
    <td width="1%">:</td>
    <td></td>
  </tr>
  <tr>
    <th>Diinput</th>
    <td>:</td>
    <td></td>
  </tr>
  <tr>
    <th>Diperbaharui</th>
    <td>:</td>
    <td></td>
  </tr>
</table>

<h3>D. Data Anggota Kartu Keluarga</h3>
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
