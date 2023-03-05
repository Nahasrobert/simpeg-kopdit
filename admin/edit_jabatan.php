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
                                    <h2>Ubah Data jabatan</h2>
                                    <p>Olah Data <span class="bread-ntd">jabatan</span></p>
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
        // include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($con, "select * from jabatan where id_jabatan='$id'");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <form method="post" action="update_jabatan.php" enctype="multipart/form-data">
                <input type="hidden" name="id_jabatan" value="<?php echo $d['id_jabatan']; ?>">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
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
                                <label>Jabatan</label>
                                <div class="nk-int-st">
                                    <input type="text" required value="<?php echo $d['jabatan']; ?>" name="jabatan" class="form-control input-sm" placeholder="Jabatan">
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