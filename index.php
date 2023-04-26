<?php include('header.php'); ?>
<!-- ======= Hero Section ======= -->
<section class="hero-section" id="hero">
    <div class="wave">
        <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                    <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
                </g>
            </g>
        </svg>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 hero-text-image">
                <div class="row">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h1 data-aos="fade-right">SELAMAT DATANG DI SIMPEG</h1>
                        <p class="mb-5" data-aos="fade-right" data-aos-delay="100">
                            Kopdit Sinar Harapan Kabupaten Ngada.
                        </p>
                        <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
                            <a href="#" class="btn btn-outline-white">Mulai</a>
                        </p>
                    </div>
                    <div class="col-lg-4 iphone-wrap">
                        <img src="assets/img/phone_1.png" alt="Image" class="phone-1" data-aos="fade-right" />
                        <img src="assets/img/phone_2.png" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= Home Section ======= -->
    <?php
    include('admin/koneksi/koneksi.php');
    $data = mysqli_query($con, "select * from profil");
    $d = mysqli_fetch_array($data);
    ?>
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9 me-auto">
                    <h2 class="mb-4">Sejarah <?php echo $d['nama']; ?></h2>
                    <p class="mb-4">
                        <?php echo $d['sejarah']; ?>
                    </p>
                    <!-- <p><a href="#" class="btn btn-primary">Download Now</a></p> -->
                </div>
                <div class="col-md-3" data-aos="fade-left">
                    <img src="admin/img/favicon.png" alt="Image" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="step">
                        <span class="number">01</span>
                        <h3>Visi</h3>
                        <p>
                            <?php echo $d['visi']; ?>

                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="step">
                        <span class="number">02</span>
                        <h3>Misi</h3>
                        <p>
                            <?php echo $d['misi']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <!-- Menghitung total data -->
            <?php
            include('admin/koneksi/koneksi.php');
            $p = mysqli_query($con, "SELECT * FROM pegawai");
            $pj = mysqli_num_rows($p);
            $c = mysqli_query($con, "SELECT * FROM cuti join pegawai on pegawai.id_pegawai=cuti.id_pegawai");
            $cj = mysqli_num_rows($c);
            $k = mysqli_query($con, "SELECT * FROM pensiun join pegawai on pegawai.id_pegawai=pensiun.id_pegawai");
            $kj = mysqli_num_rows($k);
            $m = mysqli_query($con, "SELECT * FROM mutasi join pegawai on pegawai.id_pegawai=mutasi.id_pegawai");
            $mj = mysqli_num_rows($m);
            $g = mysqli_query($con, "SELECT * FROM gaji join pegawai on pegawai.id_pegawai=gaji.id_pegawai");
            $gj = mysqli_num_rows($g);
            $j = mysqli_query($con, "SELECT * FROM jabatan");
            $jj = mysqli_num_rows($j);
            ?>
               <!-- selesai Menghitung total data -->
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-5" data-aos="fade-up">
                    <h2 class="section-heading">Total</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2" data-aos="fade-up" data-aos-delay="">
                    <div class="feature-1 text-center">
                        <div class="wrap-icon icon-1">
                            <h2 style="color: white;"><?php echo $pj; ?></h2>
                        </div>
                        <h3 class="mb-3">Pegawai</h3>

                    </div>
                </div>
                <div class="col-md-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-1 text-center">
                        <div class="wrap-icon icon-1">
                            <h2 style="color: white;"><?php echo $cj; ?></h2>
                        </div>
                        <h3 class="mb-3">Cuti</h3>
                    </div>
                </div>
                <div class="col-md-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-1 text-center">
                        <div class="wrap-icon icon-1">
                            <h2 style="color: white;"><?php echo $kj; ?></h2>

                        </div>
                        <h3 class="mb-3">Pensiun</h3>
                    </div>
                </div>
                <div class="col-md-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-1 text-center">
                        <div class="wrap-icon icon-1">
                            <h2 style="color: white;"><?php echo $mj; ?></h2>

                        </div>
                        <h3 class="mb-3">Mutasi</h3>
                    </div>
                </div>

                <div class="col-md-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-1 text-center">
                        <div class="wrap-icon icon-1">
                            <h2 style="color: white;"><?php echo $gj; ?></h2>
                        </div>
                        <h3 class="mb-3">Gaji</h3>
                    </div>
                </div>
                <div class="col-md-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-1 text-center">
                        <div class="wrap-icon icon-1">
                            <h2 style="color: white;"><?php echo $jj; ?></h2>
                        </div>
                        <h3 class="mb-3">Jabatan</h3>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- <section class="section">
        <div class="container">
            <center>
                <h1>Artikel</h1>
            </center>
            <div class="row mb-5">
                <?php
                include 'admin/koneksi/koneksi.php';
                $no = 1;
                $data = mysqli_query($con, "select * from artikel order by id_artikel DESC limit 6");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <div class="col-md-4">
                        <div class="post-entry">
                            <a href="" class="d-block mb-4">
                                <img src="admin/artikel-foto/<?php echo $d['foto']; ?>" style="width: 370px ; height: 260px;" alt="Image" class="img-fluid">
                            </a>
                            <div class="post-text">
                                <span class="post-meta"><?php echo $d['tanggal']; ?> &bullet; By <a href="#">Admin</a></span>
                                <h3><a href="#"><?php echo $d['judul']; ?></a></h3>
                                <p><?php echo substr($d['isi'], 0, 200) ?>...</p>
                                <p><a href="artikel_single.php?id=<?php echo $d['id_artikel']; ?>" class="readmore">Baca Selengkapnya..</a></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </section> -->


    <!-- ======= Testimonials Section ======= -->

    <!-- End Testimonials Section -->

    <!-- End CTA Section -->
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->

<?php include('footer.php'); ?>