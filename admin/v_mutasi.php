<!-- @format -->
<?php include 'header.php' ?>
<!-- Main Menu area End-->
<!-- Start Status area -->
<div class="breadcomb-area">
    <div class="container">
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
                            } else if ($pesan == "gagaK_ukuran") {
                                echo "<script>
                swal('Terjadi Kesalahan!', 'Ukuran maksimal 1 MB!', 'warning');
              </script>";
                            }
                        }
                        ?>
        
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-windows"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Data Mutasi</h2>
                                    
                                    <p>Olah Data <span class="bread-ntd">Mutasi</span></p>
                                  
                                   
                        
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        <?php if ($_SESSION['level'] == "admin") {
                                        ?>
                                <a href="add_mutasi.php" type="button" data-toggle="tooltip" data-placement="left" title="Tambah Data" class="btn btn-info notika-btn-info btn-sm"><i class="notika-icon notika-plus-symbol"></i></a>
                               <?php } ?>      
                    </div>



                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                       
                        <form action="laporan-mutasi.php" method="get">
                      
                        <select name="tahun" required class="form-control">
                        <option  value="" selected disabled >-- Pilih Tahun --</option>
                        <?php
                        for($i=date('Y'); $i>=date('Y')-32; $i-=1){
                        echo"<option value='$i'> $i </option>";
                            }
                        ?>
                    </select>
               


                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        <button type="submit" class="btn btn-primary notika-btn-primary btn-sm"> Cetak</button>
                     
                    </form>
                        </div>
                    </div>

    </div>
</div>
<!-- Breadcomb area End-->
<!-- Data Table area Start-->
<div class="data-table-area">
    <div class="container">
        <div class="row">
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
                                    <th>Tempat Mutasi</th>
                                    <th>Tanggal Mutasi</th>
                                    <th>SK Mutasi</th>
                                    <?php if ($_SESSION['level'] == "admin") {
                                        ?>
                                    <th>Aksi</th>
                                <?php } ?>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'koneksi/koneksi.php';
                                $no = 1;
                                $data = mysqli_query($con, "select * from mutasi join pegawai on pegawai.id_pegawai=mutasi.id_pegawai order by id_mutasi desc");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['nama']; ?></td>
                                        <td><?php echo $d['tmpt_mutasi']; ?></td>
                                        <td><?php echo $d['tgl_mutasi']; ?></td>
                                        <td><a href="berkas-sk/<?php echo $d['sk_mutasi']; ?>" blank="_target"><?php echo $d['sk_mutasi']; ?></a></td>
                                        <td>
                                        <?php if ($_SESSION['level'] == "admin") {
                                        ?>
                                            <div class="btn-toolbar" role="toolbar">
                                                <div class="btn-group notika-group-btn">
                                                    <a href="edit_mutasi.php?id=<?php echo $d['id_mutasi']; ?>" type="button" class="btn btn-primary notika-btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                                    <a href="del_mutasi.php?id=<?php echo $d['id_mutasi']; ?>" type="button" class="btn btn-danger notika-btn-danger btn-sm" onclick="return confirm('Yakin Data Akan Dihapus');"><i class="fa fa-trash-o "></i></a>
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
                                    <th>Tempat Mutasi</th>
                                    <th>Tanggal Mutasi</th>
                                    <th>SK Mutasi</th>

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