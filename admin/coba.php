<!DOCTYPE html>
<html>

<head>
    <title>HTML Table Generator</title>
    <style>
        .demTable {
            width: 100%;
            border: 1px outset #000000;
            border-collapse: collapse;
            padding: 8px;
        }

        .demTable th {
            border: 1px outset #000000;
            padding: 8px;
            background: #00aacc;
            color: #ffffff;
        }

        .demTable td {
            border: 1px outset #000000;
            text-align: center;
            padding: 8px;
            background: #ffffff;
            color: #000000;
        }
    </style>
</head>

<body>
    <center>
        <h1>Data Gaji</h1>
    </center>
    <table class="demTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Cuti</th>
                <th>Lama Cuti</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi/koneksi.php';
            $no = 1;
            $data = mysqli_query($con, "select * from cuti join pegawai on pegawai.id_pegawai=cuti.id_pegawai");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['tanggal_cuti']; ?></td>
                    <td><?php echo $d['lama_cuti']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>