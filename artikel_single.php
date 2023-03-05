<?php include('header.php') ?>
<?php
include('admin/koneksi/koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM artikel where id_artikel=$id");
$d = mysqli_fetch_array($query);
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
                        <div class="col-md-10 text-center hero-text">
                            <h1 data-aos="fade-up" data-aos-delay=""><?php echo $d['judul']; ?></h1>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100"><?php echo $d['tanggal']; ?> &bullet; By <a href="#" class="text-white">Admin</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="site-section mb-4">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4 blog-content">
                    <figure><img src="admin/artikel-foto/<?php echo $d['foto']; ?>" style="width: 100% ;" alt="Free Website Template by Free-Template.co" class="img-fluid">
                        <figcaption>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100"><?php echo $d['tanggal']; ?> &bullet; By <a href="#" class="text-black">Admin</a></p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-8">
                    <?php echo $d['isi']; ?>
                </div>

            </div>
        </div>
    </section>

    <!-- ======= CTA Section ======= -->
    <!-- End CTA Section -->


    <!-- ======= CTA Section ======= -->
    <!-- End CTA Section -->


    <!-- ======= CTA Section ======= -->


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include('footer.php') ?>