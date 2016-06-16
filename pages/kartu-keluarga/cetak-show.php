<?php
require_once("../../assets/lib/fpdf/fpdf.php");
require_once("../../config/koneksi.php");

class PDF extends FPDF
{
    // Page header
    function Header()
    {
      // Logo
      $this->Image('../../assets/img/logo-jakbar.jpg',20,10);

    	// Arial bold 15
    	$this->SetFont('Times','B',15);
    	// Move to the right
    	// $this->Cell(60);
    	// Title
        $this->Cell(308,8,'PENGURUS RT. 003 RW 016',0,1,'C');
        $this->Cell(308,8,'KEL. TOMANG, KEC. GROGOL PETAMBURAN',0,1,'C');
    	$this->Cell(308,8,'JAKARTA BARAT',0,1,'C');
    	// Line break
    	$this->Ln(5);

        $this->SetFont('Times','BU',12);
        for ($i=0; $i < 10; $i++) {
            $this->Cell(308,0,'',1,1,'C');
        }

        $this->Ln(1);

        $this->Cell(308,8,'DATA KARTU KELUARGA',0,1,'C');
        $this->Ln(2);

        $this->SetFont('Times','B',9.5);
    }

    // Page footer
    function Footer()
    {
    	// Position at 1.5 cm from bottom
    	$this->SetY(-15);
    	// Arial italic 8
    	$this->SetFont('Arial','I',8);
    	// Page number
    	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// ambil dari url
$get_id_keluarga = $_GET['id_keluarga'];

// ambil dari database
$query = "SELECT * FROM kartu_keluarga LEFT JOIN warga ON kartu_keluarga.id_kepala_keluarga = warga.id_warga WHERE id_keluarga = $get_id_keluarga";

$hasil = mysqli_query($db, $query);

$data_keluarga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_keluarga[] = $row;
}

// ambil data anggota keluarga
$query_anggota = "SELECT *
from warga INNER JOIN warga_has_kartu_keluarga
ON warga_has_kartu_keluarga.id_warga = warga.id_warga
WHERE warga_has_kartu_keluarga.id_keluarga = $get_id_keluarga";

$hasil_anggota = mysqli_query($db, $query_anggota);

$data_anggota_keluarga = array();

while ($row_anggota = mysqli_fetch_assoc($hasil_anggota)) {
  $data_anggota_keluarga[] = $row_anggota;
}

// data warga
// ambil dari database
$query_warga = "SELECT * FROM warga";
$hasil_warga = mysqli_query($db, $query_warga);

$data_warga = array();

while ($row_warga = mysqli_fetch_assoc($hasil_warga)) {
  $data_warga[] = $row_warga;
}

$pdf = new PDF('L', 'mm', [210, 330]);
$pdf->AliasNbPages();
$pdf->AddPage();

// set font
$pdf->SetFont('Times','',12);

// set penomoran
$nomor = 1;
    $pdf->cell(45,7,'Nomor Kartu Keluarga',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_keluarga[0]['nomor_keluarga']), 0, 1, 'L');

    $pdf->cell(45,7,'Kepala Keluarga',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_keluarga[0]['nama_warga']),0 , 17), 0, 1, 'L');

    $pdf->cell(45,7,'NIK Kepala Keluarga',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, strtoupper($data_keluarga[0]['nik_warga']), 0, 1, 'L');


    $pdf->cell(45,7,'Alamat',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_keluarga[0]['alamat_keluarga']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Desa/Kelurahan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_keluarga[0]['desa_kelurahan_keluarga']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Kecamatan',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_keluarga[0]['kecamatan_keluarga']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Kabupaten/Kota',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_keluarga[0]['kabupaten_kota_keluarga']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Provinsi',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_keluarga[0]['provinsi_keluarga']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'Negara',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(80, 7, substr(strtoupper($data_keluarga[0]['negara_keluarga']), 0, 20), 0, 1, 'L');

    $pdf->cell(45,7,'RT',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(7, 7, strtoupper($data_keluarga[0]['rt_keluarga']), 0, 1, 'L');

    $pdf->cell(45,7,'RW',0,0,'L');
    $pdf->cell(2,7,':',0,0,'L');
    $pdf->cell(7, 7, strtoupper($data_keluarga[0]['rw_keluarga']), 0, 1, 'L');

	$pdf->Ln(10);

  $pdf->Cell(308,8,'DATA ANGGOTA',0,1,'L');

  $pdf->SetFont('Times','B',9.5);

  // header tabel
  $pdf->cell(8,7,'NO.',1,0,'C');
  $pdf->cell(23,7,'NIK',1,0,'C');
  $pdf->cell(40,7,'NAMA',1,0,'C');
  $pdf->cell(35,7,'TEMPAT LHR',1,0,'C');
  $pdf->cell(20,7,'TGL. LHR',1,0,'C');
  $pdf->cell(8,7,'JK',1,0,'C');
  $pdf->cell(50,7,'ALAMAT',1,0,'C');
  $pdf->cell(7,7,'RT',1,0,'C');
  $pdf->cell(7,7,'RW',1,0,'C');
  $pdf->cell(20,7,'AGAMA',1,0,'C');
  $pdf->cell(26,7,'PERNIKAHAN',1,0,'C');
  $pdf->cell(16,7,'PDDKN',1,0,'C');
  $pdf->cell(20,7,'KERJA',1,0,'C');
  $pdf->cell(24,7,'STATUS',1,1,'C');

  // set font
  $pdf->SetFont('Times','',9);

  // set penomoran
  $nomor = 1;

  foreach ($data_anggota_keluarga as $anggota_keluarga) {
      $pdf->cell(8, 7, $nomor++ . '.', 1, 0, 'C');
      $pdf->cell(23, 7, strtoupper($anggota_keluarga['nik_warga']), 1, 0, 'C');
      $pdf->cell(40, 7, substr(strtoupper($anggota_keluarga['nama_warga']),0 , 17), 1, 0, 'L');
      $pdf->cell(35, 7, strtoupper($anggota_keluarga['tempat_lahir_warga']), 1, 0, 'L');
      $pdf->cell(20, 7, ($anggota_keluarga['tanggal_lahir_warga'] != '0000-00-00') ? date('d-m-Y', strtotime($anggota_keluarga['tanggal_lahir_warga'])) : '', 1, 0, 'C');
      $pdf->cell(8, 7, substr(strtoupper($anggota_keluarga['jenis_kelamin_warga']), 0, 1), 1, 0, 'C');
      $pdf->cell(50, 7, substr(strtoupper($anggota_keluarga['alamat_warga']), 0, 20), 1, 0, 'L');
      $pdf->cell(7, 7, strtoupper($anggota_keluarga['rt_warga']), 1, 0, 'C');
      $pdf->cell(7, 7, strtoupper($anggota_keluarga['rw_warga']), 1, 0, 'C');
      $pdf->cell(20, 7, strtoupper($anggota_keluarga['agama_warga']), 1, 0, 'C');
      $pdf->cell(26, 7, strtoupper($anggota_keluarga['status_perkawinan_warga']), 1, 0, 'C');
      $pdf->cell(16, 7, strtoupper($anggota_keluarga['pendidikan_terakhir_warga']), 1, 0, 'C');
      $pdf->cell(20, 7, strtoupper($anggota_keluarga['pekerjaan_warga']), 1, 0, 'C');
      $pdf->cell(24, 7, strtoupper($anggota_keluarga['status_warga']), 1, 1, 'C');
  }

$pdf->Output();
?>
