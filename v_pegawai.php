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
                                <a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-sm"> + Pegawai</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="aksi_pegawai.php" enctype="multipart/form-data">

                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                </div>
                                <div class="nk-int-st">
                                    <div class="form-group">
                                        <label>NIP</label>
                                        <div class="nk-int-st">
                                            <input type="text" required name="nip" class="form-control input-sm" placeholder="Masukan NIP">
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
                                            <input type="text" required name="nama" class="form-control input-sm" placeholder="Nama Lengkap">
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
                                            <input type="text" required name="tempat_lahir" class="form-control input-sm" placeholder="Tempat Lahir">
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
                                            <input type="date" required name="tgl_lahir" class="form-control input-sm" placeholder="Tempat Mutasi">
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
                                            <select name="id_jabatan" class="form-control input-sm" required data-live-search="true">
                                                <option class="hide">-- Silahkan Pilih Jabatan --</option>
                                                <?php
                                                // ambil data dari tabel kota
                                                include('admin/koneksi/koneksi.php');
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

                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                </div>
                                <div class="nk-int-st">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <div class="nk-int-st">
                                            <select name="jk" class="form-control input-sm" required data-live-search="true">
                                                <option class="hide">-- Silahkan Pilih --</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
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
                                            <select name="pt" class="form-control input-sm" required data-live-search="true">
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

                        <div class="form-example-wrap">
                            <div class="form-group ic-cmp-int">
                                <div class="form-ic-cmp">
                                </div>
                                <div class="nk-int-st">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <div class="nk-int-st">
                                            <select name="status" class="form-control input-sm" required>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-success notika-btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'admin/koneksi/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($con, "select * from pegawai join jabatan on jabatan.id_jabatan=pegawai.id_jabatan order by id_pegawai desc");
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
    </section>

    <!-- ======= Testimonials Section ======= -->
    <!-- End Testimonials Section -->

    <!-- ======= CTA Section ======= -->


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include('footer.php') ?>