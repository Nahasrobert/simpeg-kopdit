<!-- @format -->
<?php include 'header.php' ?>
<!-- Main Menu area End-->
<!-- Start Status area -->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-windows"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Data Cuti</h2>
                                    <p>Olah Data <span class="bread-ntd">Cuti</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <a href="add_cuti.php" type="button" data-toggle="tooltip" data-placement="left" title="Tambah Data" class="btn btn-info notika-btn-info btn-sm"><i class="notika-icon notika-plus-symbol"></i></a>
                                <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn btn-sm"><i class="notika-icon notika-sent"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcomb area End-->
<!-- Data Table area Start-->
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <?php
            if (isset($_GET['pesan'])) {
                $pesan = $_GET['pesan'];
                if ($pesan == "input") {
                    echo "  <div class='alert alert-success alert-dismissible alert-mg-b-0' role='alert'>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'><i class='notika-icon notika-close'></i></span></button> Data Berhasil disimpan.
                            </div>";
                } else if ($pesan == "duplikasi") {
                    echo "<div class='alert alert-danger alert-dismissible alert-mg-b-0' role='alert'>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'><i class='notika-icon notika-close'></i></span></button> Data Cuti Sudah ada .
                            </div>";
                } else if ($pesan == "hapus") {
                    echo "<div class='alert alert-success alert-dismissible alert-mg-b-0' role='alert'>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'><i class='notika-icon notika-close'></i></span></button> Data Berhasil dihapus .
                            </div>";
                } else if ($pesan == "update") {
                    echo "<div class='alert alert-success alert-dismissible alert-mg-b-0' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'><i class='notika-icon notika-close'></i></span></button> Data Berhasil diubah .
                        </div>";
                } else if ($pesan == "gagal_ekstensi") {
                    echo "<div class='alert alert-danger alert-dismissible alert-mg-b-0' role='alert'>
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'><i class='notika-icon notika-close'></i></span></button> Ekstensi tidak sesuai hanya PDF .
                            </div>";
                }
            }
            ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <!-- <div class="basic-tb-hd">
                        <h2>Basic Example</h2>
                        <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
                    </div> -->

                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pegawai</th>
                                    <th>Tanggal Cuti</th>
                                    <th>Lama Cuti</th>
                                    <th>Aksi</th>
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
                                        <td>
                                            <div class="btn-toolbar" role="toolbar">
                                                <div class="btn-group notika-group-btn">
                                                    <a href="edit_cuti.php?id=<?php echo $d['id_cuti']; ?>" type="button" class="btn btn-primary notika-btn-primary btn-sm">Ubah</a>
                                                    <a href="del_cuti.php?id=<?php echo $d['id_cuti']; ?>" type="button" class="btn btn-danger notika-btn-danger btn-sm">Hapus</a>
                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pegawai</th>
                                    <th>Tanggal Cuti</th>
                                    <th>Lama Cuti</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Realtime sts area-->
<!-- Start Footer area-->
<?php include 'footer.php' ?>