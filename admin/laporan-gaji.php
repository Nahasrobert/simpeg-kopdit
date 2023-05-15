<?php


require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

// Ambil data dari database atau sumber data lainnya
include 'koneksi/koneksi.php';
$no = 1;
$data = mysqli_query($con, "select * from gaji join pegawai on pegawai.id_pegawai=gaji.id_pegawai join jabatan on pegawai.id_jabatan=jabatan.id_jabatan");

// Buat file HTML untuk report
$html = '<html><head>';
$html .= '<style>';
$html .= ' .table1 {
    font-family: sans-serif;
    color: #232323;
    border-collapse: collapse;
    width: 100%;
}

.table1,
th,
td {
    border: 1px solid #000;
    padding: 8px 20px;
}

.demo-content {
    background: white;
    padding: 15px;
    overflow: auto;
}

.letter_head {
    width: 100%;
    border-collapse: collapse;
    border: 0;
    margin: 0;
    font-family: Tahoma, Geneva, sans-serif;
    font-size: 1em;
    margin-top:30px;
}



.letter_head td {
    vertical-align: top;
    padding: 5px 1px;
    text-align: center;
}

.letter_head td.one {
    width: 130px;
    border: none;


}

.letter_head td.two {
    /* xxx : yyy; */
    border: none;
}

.letter_head td.line {
    border-top: 4px solid;
    border-bottom: 1px solid;
    padding: 1px 0;
}

.letter_head .title {
    margin-bottom: 1px;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}

.letter_head .title-1 {
    font-weight: bold;
}

.letter_head .title-2 {
    font-family: "Times New Roman", Times, serif;
    font-weight: bold;
    font-size: 1.7em;
    letter-spacing: 2px;
}

.letter_head .title-3 {
    font-size: 80%;
}

.letter_head .title-4 {
    font-weight: bold;
}


/* TTD Table */
.table_ttd {
    width: 100%;
    border: none;
    margin: 0;
    font-family: Tahoma, Geneva, sans-serif;
    font-size: 0.9em;

}

.table_ttd td {
    vertical-align: top;
}


.table_ttd .content_area {
    text-align: center;
    border: none;
}

.table_ttd .ttd_area {
    padding: 15px;
    min-height: 40px;
    font-size: small;
    border: none;
}

.table_ttd p {
    margin: 0;
    border: none;
}

@page {
    size: auto;
    /* auto is the initial value */
    margin: 0;
    /* this affects the margin in the printer settings */
}';

$html .= '</style>';
$html .= '</head><body>';
$html .= '<table class="letter_head">
<tr>
    <td class="one">
        <img class="logo" alt="Logo" src="img/favicon.png" width="80" height="80" />
    </td>
    <td class="two">
        <div class="title title-1">
           KSP/KOPDIT SINAR HARAPAN
        </div>
        <div class="title title-3">
            Nomor Badan Hukum : 26/BH/KWK.24/VII/1997<br>
            Alamat : Malapedho - Inerie - Ngada <br>
            Email : ksp_kopdit_sinarharapan@yahoo.co.id
        </div>

    </td>
</tr>
<tr>
    <td colspan="2" class="line"></td>
</tr>
</table>';
$html .= '<center><h2>Laporan Data Gaji</h2></center>';
$html .= '<table class="table1">';
$html .= '<tr><th>No</th><th>Nama</th><th>Tempat Gaji</th><th>Besar Gaji</th></tr>';
while ($d = mysqli_fetch_array($data)) {
    $html .= '<tr><td>' . $no++ . '</td><td>' . $d['nama'] . '</td><td>' . $d['jabatan'] . '</td><td>' . 'Rp. ' . number_format($d['besar_gaji']) . '</td></tr>';
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
$dompdf->stream('laporan-data-gaji.pdf');
