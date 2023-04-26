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
                            <h1 data-aos="fade-up" data-aos-delay="">Artikel</h1>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Berisi tentang berita-berita seputaran Kopdit Sinar Harapan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section">
        <div class="container">
            <div class="row mb-5">
                <?php
                include 'admin/koneksi/koneksi.php';
                $no = 1;
                $data = mysqli_query($con, "select * from artikel order by id_artikel DESC");
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

    </section>

    <!-- ======= CTA Section ======= -->
    <!-- End CTA Section -->


    <!-- ======= CTA Section ======= -->


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include('footer.php') ?>