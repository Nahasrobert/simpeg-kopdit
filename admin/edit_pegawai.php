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
                                    <h2>Edit Data Pegawai</h2>
                                    <p>Olah Data <span class="bread-ntd">Pegawai</span></p>
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
        $data = mysqli_query($con, "select * from pegawai where id_pegawai='$id'");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <form method="post" action="update_pegawai.php" enctype="multipart/form-data">
                <input type="hidden" name="id_pegawai" value="<?php echo $d['id_pegawai']; ?>">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-example-wrap">
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                </div>
                                                <div class="nk-int-st">
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <div class="nk-int-st">
                                                            <input type="text" value="<?php echo $d['nama']; ?>" required name="nama" class="form-control input-sm" placeholder="Nama Lengkap">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-example-wrap">
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                </div>
                                                <div class="nk-int-st">
                                                    <div class="form-group">
                                                        <label>NIP</label>
                                                        <div class="nk-int-st">
                                                            <input type="number" value="<?php echo $d['nip']; ?>" required name="nip" class="form-control input-sm" placeholder="Tempat Lahir">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-example-wrap">
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                </div>
                                                <div class="nk-int-st">
                                                    <div class="form-group">
                                                        <label>Tempat Lahir</label>
                                                        <div class="nk-int-st">
                                                            <input type="text" value="<?php echo $d['tempat_lahir']; ?>" required name="tempat_lahir" class="form-control input-sm" placeholder="Tempat Lahir">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-example-wrap">
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                </div>
                                                <div class="nk-int-st">
                                                    <div class="form-group">
                                                        <label>Tanggal Lahir</label>
                                                        <div class="nk-int-st">
                                                            <input type="date" required value="<?php echo $d['tgl_lahir']; ?>" name="tgl_lahir" class="form-control input-sm" placeholder="Tempat jabatan">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-example-wrap">
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                </div>
                                                <div class="nk-int-st">
                                                    <div class="form-group">
                                                        <label>Jabatan</label>
                                                        <div class="nk-int-st">
                                                            <select name="id_jabatan" class="selectpicker" required data-live-search="true">
                                                                <?php
                                                                $query_jab = "SELECT * FROM jabatan";
                                                                $sql_jab = mysqli_query($con, $query_jab);
                                                                while ($jab = mysqli_fetch_assoc($sql_jab)) {
                                                                    if ($d['id_jabatan'] == $jab['id_jabatan']) {
                                                                        $select = "selected";
                                                                    } else {
                                                                        $select = "";
                                                                    }
                                                                    echo "<option value='$jab[id_jabatan]' size='20' $select>$jab[jabatan]</option>";
                                                                }
                                                                ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-example-wrap">
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                </div>
                                                <div class="nk-int-st">
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label>
                                                        <div class="nk-int-st">
                                                            <?php $jk = $d['jk']; ?>
                                                            <select name="jk" class="selectpicker" required data-live-search="true">
                                                                <option type="disible">-- Silahkan Pilih --</option>
                                                                <option <?php echo ($jk == 'Laki-laki') ? "selected" : "" ?>>Laki-laki</option>
                                                                <option <?php echo ($jk == 'Perempuan') ? "selected" : "" ?>>Perempuan</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-example-wrap">
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                </div>
                                                <div class="nk-int-st">
                                                    <div class="form-group">
                                                        <label>Pendidikan Terakhir</label>
                                                        <div class="nk-int-st">
                                                            <?php $pt = $d['pend_terakhir']; ?>

                                                            <select name="pt" class="selectpicker" required data-live-search="true">
                                                                <option type="disible">-- Silahkan Pilih --</option>
                                                                <option <?php echo ($pt == 'TAMAT SD / SEDERAJAT') ? "selected" : "" ?>>TAMAT SD / SEDERAJAT</option>
                                                                <option <?php echo ($pt == 'TIDAK / BELUM SEKOLAH') ? "selected" : "" ?>>TIDAK / BELUM SEKOLAH</option>
                                                                <option <?php echo ($pt == 'SLTA / SEDERAJAT') ? "selected" : "" ?>>SLTA / SEDERAJAT</option>
                                                                <option <?php echo ($pt == 'SLTP/SEDERAJAT') ? "selected" : "" ?>>SLTP/SEDERAJAT</option>
                                                                <option <?php echo ($pt == 'BELUM TAMAT SD/SEDERAJAT') ? "selected" : "" ?>>BELUM TAMAT SD/SEDERAJAT</option>
                                                                <option <?php echo ($pt == 'DIPLOMA IV/ STRATA I') ? "selected" : "" ?>>DIPLOMA IV/ STRATA I</option>
                                                                <option <?php echo ($pt == 'DIPLOMA I / II') ? "selected" : "" ?>>DIPLOMA I / II</option>
                                                                <option <?php echo ($pt == 'AKADEMI/ DIPLOMA III/S. MUDA') ? "selected" : "" ?>>AKADEMI/ DIPLOMA III/S. MUDA</option>
                                                                <option <?php echo ($pt == 'STRATA II') ? "selected" : "" ?>>STRATA II</option>
                                                                <option <?php echo ($pt == 'STRATA III') ? "selected" : "" ?>>STRATA III</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-example-wrap">
                                            <div class="form-group ic-cmp-int">
                                                <div class="form-ic-cmp">
                                                </div>
                                                <div class="nk-int-st">
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <div class="nk-int-st">
                                                            <?php $status = $d['status']; ?>
                                                            <select name="status" class="selectpicker" required data-live-search="true">
                                                                <option type="disible">-- Silahkan Pilih --</option>
                                                                <option <?php echo ($status == 'Kawin') ? "selected" : "" ?>>Kawin</option>
                                                                <option <?php echo ($status == 'Belum Kawin') ? "selected" : "" ?>>Belum Kawin
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-example-int mg-t-15">
                                        <button class="btn btn-success notika-btn-success">Simpan</button>
                                    </div>
                                </div>
                            </div>
            </form>
        <?php } ?>
    </div>

</div>

</div>

<!-- End Realtime sts area-->
<!-- Start Footer area-->
<?php include 'footer.php' ?>