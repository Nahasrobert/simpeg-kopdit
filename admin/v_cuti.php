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
                            <?php if ($_SESSION['level'] == "admin") {
                                        ?>
                                <a href="add_cuti.php" type="button" data-toggle="tooltip" data-placement="left" title="Tambah Data" class="btn btn-info notika-btn-info btn-sm"><i class="notika-icon notika-plus-symbol"></i></a>
                               <?php } ?>
                                <a href="laporan-cuti.php" type="button" data-toggle="tooltip" data-placement="top" title="Download Report" class="btn btn-primary notika-btn-primary btn-sm"><i class="notika-icon notika-print"></i></a>
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
                    echo "<script>
                    swal('Sukses!', 'Data Berhasil disimpan!', 'success');
                  </script>";
                } else if ($pesan == "duplikasi") {
                    echo "<script>
                    swal('Terjadi kesalahan !', 'Data sudah ada!', 'warning');
                  </script>";
                } else if ($pesan == "hapus") {
                    echo "<script>
                    swal('Sukses!', 'Data Berhasil dihapus!', 'success');
                  </script>";
                } else if ($pesan == "update") {
                    echo "<script>
                    swal('Sukses!', 'Data Berhasil diubah!', 'success');
                  </script>";
                } else if ($pesan == "gagal_ekstensi") {
                    echo "<script>
                    swal('Terjadi Kesalahan!', 'Ekstensi tidak sesuai!', 'warning');
                  </script>";
                }
                else if ($pesan == "verif") {
                    echo "<script>
                    swal('sukses!', 'Berhasil di Verifikasi', 'success');
                  </script>";
                }
                 else if ($pesan == "gagaK_ukuran") {
                    echo "<script>
                swal('Terjadi Kesalahan!', 'Ukuran maksimal 1 MB!', 'warning');
              </script>";
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
                                    <th>Status Cuti</th>
                                    <th></th>
                                    

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'koneksi/koneksi.php';
                                $no = 1;
                                $data = mysqli_query($con, "select * from cuti join pegawai on pegawai.id_pegawai=cuti.id_pegawai order by id_cuti desc");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['nama']; ?></td>
                                        <td><?php echo $d['tanggal_cuti']; ?></td>
                                        <td><?php echo $d['lama_cuti']; ?></td>
                                        <td>
                                        <?php if ($_SESSION['level'] == "general manager") {
                                        ?>
                                            <a href="#" data-toggle="modal" data-target="#myModalfive<?php echo $d['id_cuti']; ?>"><?php echo $d['status_cuti']; ?></a>
                                       <?php } ?>
                                       <?php if ($_SESSION['level'] == "admin") {
                                        ?>
                                        <?php echo $d['status_cuti']; ?>
                                        <?php } ?>
                                        </td>
                                       <!-- Modal verifikasi cuti -->
                                            <div class="modal animated flash" id="myModalfive<?php echo $d['id_cuti']; ?>" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h3>Verifikasi <?php echo $d['nama']; ?></h2>
                                                <form method="post" action="update_cuti_verifikasi.php" enctype="multipart/form-data">
                                                <input type="hidden" required name="id_cuti" value="<?php echo $d['id_cuti']; ?>" class="form-control input-sm" placeholder="Lama Cuti">
                                            <div class="form-group">
                                                <label>Status Cuti</label>
                                               <select name="status_cuti" id="" required class="form-control input-sm">
                                             
                                               <option value="diverifikasiGM">Verifikasi</option>
                                                <option value="dibatalkan">Dibatalkan</option>

                                               </select>                   
                                            </div>
                                        
                                    </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button class="btn btn-success notika-btn-success">Simpan</button>
                                </form>      
                            </div> 
                                        </div>
                                    </div>
                                </div>
                                       
                                        <td> 
                                        <?php if ($_SESSION['level'] == "admin") {
                                        ?>
                                            <div class="btn-toolbar" role="toolbar">
                                                <div class="btn-group notika-group-btn">
                                                    <a href="edit_cuti.php?id=<?php echo $d['id_cuti']; ?>" type="button" class="btn btn-primary notika-btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                                    <a href="del_cuti.php?id=<?php echo $d['id_cuti']; ?>" type="button" class="btn btn-danger notika-btn-danger btn-sm" onclick="return confirm('Yakin Data Akan Dihapus');"><i class="fa fa-trash-o "></i></a>
                                                </div>

                                            </div>
                                            <?php } ?>
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