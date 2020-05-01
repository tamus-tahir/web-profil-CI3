<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="<?= base_url(''); ?>"><?= $maintitle; ?></a></li>
                <li><?= $title; ?></li>
            </ol>
            <h2><?= $title; ?></h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact py-5 mb-4">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p><?= $config->alamat; ?></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p><?= $config->email; ?></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p><?= $config->telpon; ?></p>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <a href="<?= $config->facebook; ?>">
                            <i class="icofont-facebook"></i>
                            <h3>Facebook</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <a href="<?= $config->instagram; ?>">
                            <i class="icofont-instagram"></i>
                            <h3>Instagram</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <a href="<?= $config->twitter; ?>">
                            <i class="icofont-twitter"></i>
                            <h3>Twitter</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <a href="<?= $config->youtube; ?>">
                            <i class="icofont-youtube"></i>
                            <h3>Youtube</h3>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->

</main><!-- End #main -->