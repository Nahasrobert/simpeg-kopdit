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

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-windows"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Data Profil</h2>
                                    <p>Olah Data <span class="bread-ntd">Profil</span></p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                            </div>
                        </div> -->
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
        <?php
        include 'koneksi/koneksi.php';
        // $id = $_GET['id'];
        $data = mysqli_query($con, "select * from profil");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <form method="post" action="update_profil.php" enctype="multipart/form-data">
                <div class="form-example-wrap">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                        </div>
                        <div class="nk-int-st">
                            <div class="form-group">
                                <label>Nama</label>
                                <div class="nk-int-st">
                                    <input type="text" required name="nama" value="<?php echo $d['nama']; ?>" class="form-control input-sm" placeholder="Judul">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-example-wrap">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                        </div>
                        <div class="nk-int-st">
                            <div class="form-group">
                                <label>Sejarah</label>
                                <div class="nk-int-st">
                                    <textarea class="html-editor" type="text" name="sejarah" placeholder="Tanggal Mutasi"><?php echo $d['sejarah']; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-example-wrap">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                        </div>
                        <div class="nk-int-st">
                            <div class="form-group">
                                <label>VISI</label>
                                <div class="nk-int-st">
                                    <textarea class="html-editor" type="text" name="visi" placeholder="Tanggal Mutasi"><?php echo $d['visi']; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-example-wrap">
                    <div class="form-group ic-cmp-int">
                        <div class="form-ic-cmp">
                        </div>
                        <div class="nk-int-st">
                            <div class="form-group">
                                <label>MISI</label>
                                <div class="nk-int-st">
                                    <textarea class="html-editor" type="text" name="misi" placeholder="Tanggal Mutasi"><?php echo $d['misi']; ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success">Simpan</button>
                        </div>
            </form>
        <?php } ?>
    </div>

</div>

</div>

</div>
</div>
</div>
</div>
</div>
<!-- End Realtime sts area-->
<!-- Start Footer area-->
<?php include 'footer.php' ?>