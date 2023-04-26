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
                                    <h2>Tambah Data Pegawai</h2>
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
        <form method="post" action="aksi_pegawai.php" enctype="multipart/form-data">
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
                                                        <input type="text" required name="nama" class="form-control input-sm" placeholder="Nama Lengkap">
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
                                                        <input type="text" id="nip" min="18" max="60" required name="nip" class="form-control input-sm" placeholder="Masukan NIP">
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
                                                        <input type="text" required name="tempat_lahir" class="form-control input-sm" placeholder="Tempat Lahir">
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
                                                        <input type="date" required name="tgl_lahir" class="form-control input-sm" placeholder="Tempat Mutasi">
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
                                                            <option class="hide">-- Silahkan Pilih Jabatan --</option>
                                                            <?php
                                                            // ambil data dari tabel kota
                                                            $sql = "SELECT * FROM jabatan";
                                                            $result = mysqli_query($con, $sql);

                                                            // tampilkan data ke dalam select option
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                echo "<option value='" . $row['id_jabatan'] . "'>" . $row['jabatan'] . "</option>";
                                                            }

                                                            // bebaskan hasil query
                                                            mysqli_free_result($result);
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
                                                        <select name="jk" class="selectpicker" required data-live-search="true">
                                                            <option class="hide">-- Silahkan Pilih --</option>
                                                            <option value="Laki-laki">Laki-laki</option>
                                                            <option value="Perempuan">Perempuan</option>
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
                                                        <select name="pt" class="selectpicker" required data-live-search="true">
                                                            <option class="hide">-- Silahkan Pilih --</option>
                                                            <option value="TAMAT SD / SEDERAJAT"> TAMAT SD / SEDERAJAT</option>
                                                            <option value="TIDAK / BELUM SEKOLAH">TIDAK / BELUM SEKOLAH</option>
                                                            <option value="SLTA / SEDERAJAT">SLTA / SEDERAJAT</option>
                                                            <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                                                            <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                                                            <option value="DIPLOMA IV/ STRATA I">DIPLOMA IV/ STRATA I</option>
                                                            <option value="DIPLOMA I / II">DIPLOMA I / II</option>
                                                            <option value="AKADEMI/ DIPLOMA III/S. MUDA">AKADEMI/ DIPLOMA III/S. MUDA</option>
                                                            <option value="STRATA II">STRATA II</option>
                                                            <option value="STRATA III">STRATA III</option>
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
                                                        <select name="status" class="selectpicker" required data-live-search="true">
                                                            <option class="hide">-- Silahkan Pilih --</option>
                                                            <option value="Kawin">Kawin</option>
                                                            <option value="Belum Kawin">Belum Kawin</option>
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
                                                    <label>Password</label>
                                                    <div class="nk-int-st">
                                                        <input type="text" required name="password" class="form-control input-sm" placeholder="Masukan Password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                           

                                    
                                </div>
                            </div>
                            <center><button class="btn btn-success notika-btn-success">Simpan</button></center>
        </form>
                                                        </div>
    </div>

</div>

</div>






<!-- End Realtime sts area-->
<!-- Start Footer area-->
<?php include 'footer.php' ?>