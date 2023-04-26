<?php


require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

// Ambil data dari database atau sumber data lainnya
include 'koneksi/koneksi.php';
$no = 1;
$data = mysqli_query($con, "select * from pegawai join jabatan on jabatan.id_jabatan=pegawai.id_jabatan");

// Buat file HTML untuk report
$html = '<html><head>';
$html .= '<style>';
$html .= 'table {border-collapse: collapse; width: 100%;}';
$html .= 'th, td {text-align: left; padding: 8px;}';
$html .= 'th {background-color: #4CAF50; color: white;}';
$html .= '</style>';
$html .= '</head><body>';
$html .= '<center><h1>Laporan Data Pegawai</h1></center>';
$html .= '<table>';
$html .= '<tr><th>No</th><th>Nama</th><th>Jabatan</th><th>Tempat Lahir</th><th>Tanggal lahir</th><th>Jenis Kelamin</th><th>Pend Terakhir</th><th>Status</th></tr>';
while ($d = mysqli_fetch_array($data)) {
    $html .= '<tr><td>' . $no++ . '</td><td>' . $d['nama'] . '</td><td>' . $d['jabatan'] . '</td><td>' . $d['tempat_lahir'] . '</td><td>' . $d['tgl_lahir'] . '</td><td>' . $d['jk'] . '</td><td>' . $d['pend_terakhir'] . '</td><td>' . $d['status'] . '</td></tr>';
}
$html .= '</table>';
$html .= '</body></html>';

// Buat instance DOMPDF
$dompdf = new Dompdf();

// Muat file HTML
$dompdf->loadHtml($html);

// Render file HTML menjadi PDF
$dompdf->render();

// Tampilkan file PDF pada browser
$dompdf->stream();

// atau simpan file PDF ke dalam sistem
$dompdf->save('laporan-data-pegawai.pdf');
