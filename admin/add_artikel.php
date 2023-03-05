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
                                    <h2>Tambah Data Artikel</h2>
                                    <p>Olah Data <span class="bread-ntd">Artikel</span></p>
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
        <form method="post" action="aksi_artikel.php" enctype="multipart/form-data">
            <div class="form-example-wrap">
                <div class="form-group ic-cmp-int">
                    <div class="form-ic-cmp">
                    </div>
                    <div class="nk-int-st">
                        <div class="form-group">
                            <label>Judul</label>
                            <div class="nk-int-st">
                                <input type="text" required name="judul" class="form-control input-sm" placeholder="Judul">
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
                            <label>Tanggal</label>
                            <div class="nk-int-st">
                                <input type="date" required name="tanggal" class="form-control input-sm" placeholder="Tanggal Mutasi">
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
                            <label>ISI</label>
                            <div class="nk-int-st">
                                <textarea class="html-editor" type="text" name="isi" placeholder="Tanggal Mutasi"></textarea>
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
                            <label>Foto</label>
                            <div class="nk-int-st">
                                <input type="file" name="foto" accept=".jpg" required>
                                <p style="color: red; font-size: 12px;">Ekstensi yang diperbolehkan .JPG PNG JPEG</p>
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