<?php


require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

// Ambil data dari database atau sumber data lainnya
include 'koneksi/koneksi.php';
$no = 1;
$data = mysqli_query($con, "select * from cuti join pegawai on pegawai.id_pegawai=cuti.id_pegawai");

// Buat file HTML untuk report
$html = '<html><head>';
$html .= '<style>';
$html .= 'table {border-collapse: collapse; width: 100%;}';
$html .= 'th, td {text-align: left; padding: 8px;}';
$html .= 'th {background-color: #4CAF50; color: white;}';
$html .= '</style>';
$html .= '</head><body>';
$html .= '<center><h1>Laporan Data Cuti</h1></center>';
$html .= '<table>';
$html .= '<tr><th>No</th><th>Nama</th><th>Tanggal Cuti</th><th>Lama Cuti</th><th>Status Cuti</th></tr>';
while ($d = mysqli_fetch_array($data)) {
    $html .= '<tr><td>' . $no++ . '</td><td>' . $d['nama'] . '</td><td>' . $d['tanggal_cuti'] . '</td><td>' . $d['lama_cuti'] .'</td><td>'. $d['status_cuti'] .  '</td></tr>';
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
$dompdf->save('laporan-data-cuti.pdf');
