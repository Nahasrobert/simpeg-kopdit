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
                    swal('Terjadi kesalahan !', 'Data Cuti sudah diajukan!', 'warning');
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
                            <h1 data-aos="fade-up" data-aos-delay="">Data Cuti</h1>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Kopdit Sinar Harapan Kabupaten Ngada.</p>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
                                <a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#cuti" class="btn btn-primary btn-sm">+ Ajukan Cuti</a>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="cuti" tabindex="-1" role="dialog" aria-labelledby="cutiLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cutiLabel">Ajukan Cuti</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="aksi_cuti.php" enctype="multipart/form-data">
                        <div class="form-group">
                                <?php
                                include('admin/koneksi/koneksi.php');
                                // ambil data dari tabel kota
                                $sql = "SELECT * FROM pegawai where nip ='".$_SESSION['nip']."'";
                                $result = mysqli_query($con, $sql);
                                // tampilkan data ke dalam select option
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                 <input type="hidden" required name="id_pegawai" value="<?php echo $row['id_pegawai']; ?>" class="form-control input-sm" placeholder="Tanggal Cuti">
                                <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Cuti</label>
                            <input type="date" required name="tgl_cuti" class="form-control input-sm" placeholder="Tanggal Cuti">
                        </div>
                        <div class="form-group">
                            <label>Lama Cuti</label>
                            <input type="text" required name="lama_cuti" class="form-control input-sm" placeholder="Lama Cuti">
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
            <!-- <center>
                <a href="#" class="btn btn-warning">Ajukan Cuti</a>
            </center> -->
            <div class="row align-items-center">
                <div class="col-md-12 me-auto">
                    <table id="data-table-basic" style="width: 100%;" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>Tanggal Cuti</th>
                                <th>Lama Cuti</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            include 'admin/koneksi/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($con, "select * from cuti join pegawai on pegawai.id_pegawai=cuti.id_pegawai where nip ='".$_SESSION['nip']."'");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['nama']; ?></td>
                                    <td><?php echo $d['tanggal_cuti']; ?></td>
                                    <td><?php echo $d['lama_cuti']; ?></td>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>Tanggal Cuti</th>
                                <th>Lama Cuti</th>
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