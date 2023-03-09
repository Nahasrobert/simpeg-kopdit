<?php include('header.php') ?>

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
                            <h1 data-aos="fade-up" data-aos-delay="">Data Pensiun</h1>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Kopdit Sinar Harapan Kabupaten Ngada.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 me-auto">
                    <table id="data-table-basic" style="width: 100%;" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>Tanggal Pensiun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'admin/koneksi/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($con, "select * from pensiun join pegawai on pegawai.id_pegawai=pensiun.id_pegawai order by id_pensiun desc");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['nama']; ?></td>
                                    <td><?php echo $d['tgl_pensiun']; ?></td>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>Tanggal Pensiun</th>
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