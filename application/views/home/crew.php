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

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="row">
                <?php foreach ($crew as $c) : ?>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch  ">
                        <div class="member w-100">
                            <img src="<?= base_url('assets/uploads/crew/' . $c->imgcrew); ?>" alt="" height="200" class="w-100">
                            <h4><?= $c->nama; ?></h4>
                            <span><?= $c->jabatan; ?></span>
                            <div class="social">
                                <a href="<?= $c->twitter; ?>"><i class="icofont-twitter"></i></a>
                                <a href="<?= $c->facebook; ?>"><i class="icofont-facebook"></i></a>
                                <a href="<?= $c->instagram; ?>"><i class="icofont-instagram"></i></a>
                                <a href="<?= $c->youtube; ?>"><i class="icofont-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

        </div>
    </section>
    <!-- End Team Section -->

</main><!-- End #main -->