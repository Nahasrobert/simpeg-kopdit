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
                                    <h2>Tambah Data Cuti</h2>
                                    <p>Olah Data <span class="bread-ntd">Cuti</span></p>
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
        <form method="post" action="aksi_cuti.php" enctype="multipart/form-data">
        <input type="hidden" required name="status_cuti" value="diajukan" class="form-control input-sm" placeholder="Tanggal Cuti">

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
                                            <option class="hide">-- Silahkan Pilih Pegawai --</option>
                                            <?php
                                            // ambil data dari tabel kota
                                            $sql = "SELECT * FROM pegawai";
                                            $result = mysqli_query($con, $sql);

                                            // tampilkan data ke dalam select option
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value='" . $row['id_pegawai'] . "'>" . $row['nama'] . "</option>";
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
            </div>
            <div class="form-example-wrap">
                <div class="form-group ic-cmp-int">
                    <div class="form-ic-cmp">
                    </div>
                    <div class="nk-int-st">
                        <div class="form-group">
                            <label>Tanggal Cuti</label>
                            <div class="nk-int-st">
                                <input type="date" required name="tgl_cuti" class="form-control input-sm" placeholder="Tanggal Cuti">
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
                            <label>Lama Cuti</label>
                            <div class="nk-int-st">
                                <input type="text" required name="lama_cuti" class="form-control input-sm" placeholder="Lama Cuti">
                            </div>
                        </div>
                    </div>
                    <div class="form-example-int mg-t-15">
                        <button class="btn btn-success notika-btn-success">Simpan</button>
                    </div>
        </form>
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