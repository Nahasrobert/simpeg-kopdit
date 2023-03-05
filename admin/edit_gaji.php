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
                                    <h2>Ubah Data Gaji</h2>
                                    <p>Olah Data <span class="bread-ntd">Gaji</span></p>
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
        $data = mysqli_query($con, "select * from gaji where id_gaji='$id'");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <form method="post" action="update_gaji.php" enctype="multipart/form-data">
                <input type="hidden" name="id_gaji" value="<?php echo $d['id_gaji']; ?>">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                </div>
                                <div class="nk-int-st">
                                    <div class="form-group">
                                        <label>Nama Pegawai</label>

                                        <div class="nk-int-st">
                                            <select name="id_pegawai" class="selectpicker" required data-live-search="true">
                                                <?php
                                                $query_pegawai = "SELECT * FROM pegawai";
                                                $sql_pegawai = mysqli_query($con, $query_pegawai);
                                                while ($data_pegawai = mysqli_fetch_assoc($sql_pegawai)) {
                                                    if ($d['id_pegawai'] == $data_pegawai['id_pegawai']) {
                                                        $select = "selected";
                                                    } else {
                                                        $select = "";
                                                    }
                                                    echo "<option value='$data_pegawai[id_pegawai]' size='20' $select>$data_pegawai[nama]</option>";
                                                }
                                                ?>
                                            </select>


                                        </div>
                                    </div>
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
                                <label>Besar Gaji</label>
                                <div class="nk-int-st">
                                    <input type="text" required value="<?php echo $d['besar_gaji']; ?>" name="besar_gaji" class="form-control input-sm" placeholder="Tempat gaji">
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