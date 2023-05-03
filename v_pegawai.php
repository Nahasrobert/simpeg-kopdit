<?php include('header.php') ?>
<?php
if (isset($_GET['pesan'])) {
    $pesan = $_GET['pesan'];
    if ($pesan == "input") {
        echo "<script>
                    swal('Sukses!', 'Data Berhasil disimpan!', 'success');
                  </script>";
    } else if ($pesan == "duplikasi") {
        echo "<script>
                    swal('Terjadi kesalahan !', 'Data Pegawai sudah terdaftar!', 'warning');
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
<main id="main">

    <!-- ======= Features Section ======= -->

    <section class="hero-section inner-page">
        <div class="wave">

            <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
                    </g>
                </g>
            </svg>

        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-md-7 text-center hero-text">
                            <h1 data-aos="fade-up" data-aos-delay="">Data Pegawai</h1>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Kopdit Sinar Harapan Kabupaten Ngada.</p>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
                                <!-- <a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-sm"> + Pegawai</a> -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Modal -->
    
    <section class="section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 me-auto">
                    <table id="data-table-basic" style="width: 100%;" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>JK</th>
                                <th>Pendidikan Terakhir</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'admin/koneksi/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($con, "select * from pegawai join jabatan on jabatan.id_jabatan=pegawai.id_jabatan where nip ='".$_SESSION['nip']."'");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                           
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['nama']; ?></td>
                                    <td><?php echo $d['nip']; ?></td>
                                    <td><?php echo $d['jabatan']; ?></td>
                                    <td><?php echo $d['tempat_lahir']; ?></td>
                                    <td><?php echo $d['tgl_lahir']; ?></td>
                                    <td><?php echo $d['jk']; ?></td>
                                    <td><?php echo $d['pend_terakhir']; ?></td>
                                    <td><?php echo $d['status']; ?></td>
                                    <td><a href="#"class="" style="color:blue;" data-toggle="modal" data-target="#ubahpegawai<?php echo $d['id_pegawai']; ?>"><i class="bi bi-pencil-square"></i></a>
                                
                                </td>


                                </tr>
                                
                            <?php
                            }
                            ?>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>JK</th>
                                <th>Pendidikan Terakhir</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- <div class="col-md-6" data-aos="fade-left">
                    <img src="assets/img/undraw_svg_2.svg" alt="Image" class="img-fluid">
                </div> -->
            </div>
        </div>
        <?php
        $data = mysqli_query($con, "select * from pegawai join jabatan on jabatan.id_jabatan=pegawai.id_jabatan where nip ='".$_SESSION['nip']."'");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                      
                      <div class="modal fade" id="ubahpegawai<?php echo $d['id_pegawai']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="ubah_pegawai.php" enctype="multipart/form-data">
                    <input type="hidden" required name="id_pegawai" value="<?php echo $d['id_pegawai']; ?>" class="form-control input-sm" placeholder="Masukan NIP">

                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                </div>
                                <div class="nk-int-st">
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <div class="nk-int-st">
                                            <input type="text" readonly name="nip" value="<?php echo $d['nip']; ?>" class="form-control input-sm" placeholder="Masukan NIP">
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
                                        <label>Nama</label>
                                        <div class="nk-int-st">
                                            <input type="text" required name="nama" value="<?php echo $d['nama']; ?>" class="form-control input-sm" placeholder="Nama Lengkap">
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
                                        <label>Tempat Lahir</label>
                                        <div class="nk-int-st">
                                            <input type="text" required name="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>" class="form-control input-sm" placeholder="Tempat Lahir">
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
                                        <label>Tanggal Lahir</label>
                                        <div class="nk-int-st">
                                            <input type="date" required name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>" class="form-control input-sm" placeholder="Tempat Mutasi">
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
                                        <select name="id_jabatan" class="form-control" required data-live-search="true">
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

                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                </div>
                                <div class="nk-int-st">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <div class="nk-int-st">
                                        <?php $jk = $d['jk']; ?>
                                        <select name="jk" class="form-control" required data-live-search="true">
                                            <option type="disible">-- Silahkan Pilih --</option>
                                            <option <?php echo ($jk == 'Laki-laki') ? "selected" : "" ?>>Laki-laki</option>
                                            <option <?php echo ($jk == 'Perempuan') ? "selected" : "" ?>>Perempuan</option>
                                        </select>

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
                                        <label>Pendidikan Terakhir</label>
                                        <div class="nk-int-st">
                                                            <?php $pt = $d['pend_terakhir']; ?>

                                                            <select name="pt" class="form-control" required data-live-search="true">
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

                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                </div>
                                <div class="nk-int-st">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <div class="nk-int-st">
                                                            <?php $status = $d['status']; ?>
                                                            <select name="status" class="form-control" required data-live-search="true">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-success notika-btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
                            <?php
                            }
                            ?>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= CTA Section ======= -->


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include('footer.php') ?>