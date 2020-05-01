<div>
    <img src="<?= base_url('assets/img/' . $config->imgheader); ?>" alt="" class="img-header">
</div>

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about pt-5">
        <div class="container pt-5">

            <div class="row">
                <div class="col-lg-6">
                    <img src="<?= base_url('assets/img/' . $about->imgabout); ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h5><?= substr($about->about, 0, 500); ?> ...</h5>
                    <div>
                        <a class="mr-2 mt-2 btn btn-outline-success " href="<?= base_url('home/about'); ?>" role="button">Selengkapnya</a>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <hr>

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog pt-3">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Our Blog</h2>
            </div>

            <div class="row justify-content-center">
                <?php foreach ($berita as $b) : ?>
                    <div class="col-lg-4 entries">
                        <article class="entry">
                            <div class="entry-img">
                                <img src="<?= base_url('assets/uploads/berita/' . $b->imgberita); ?>" alt="" height="250">
                            </div>
                            <h5 class="mb-2">
                                <a href="<?= base_url('home/detail/' . $b->id_berita); ?>"><?= $b->judul; ?></a>
                            </h5>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?= base_url('home/detail/' . $b->id_berita); ?>"><?= $b->penulis; ?></a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?= base_url('home/detail/' . $b->id_berita); ?>"><time><?= date('d-m-Y', strtotime($b->tanggal)); ?></time></a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p><?= substr($b->isi, 0, 200); ?> ...</p>
                                <div class="read-more">
                                    <a href="<?= base_url('home/detail/' . $b->id_berita); ?>">Read More</a>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach ?>
            </div>

            <div class="text-center mt-3">
                <a class="btn btn-outline-success " href="<?= base_url('home/blog'); ?>" role="button">Semua Berita</a>
            </div>

        </div>
    </section>
    <!-- End Blog Section -->

    <hr>

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts pt-5">
        <div class="container">

            <div class="row no-gutters justify-content-center">

                <?php foreach ($counter as $c) : ?>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch mb-3 mr-2">
                        <div class="count-box">
                            <div class="mb-3">
                                <i class="<?= $c->icon; ?>"></i>
                                <span data-toggle="counter-up"><?= $c->angka; ?></span>
                            </div>
                            <h3 class="text-center text-uppercase"><?= $c->judul; ?></h3>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>

        </div>
    </section>
    <!-- End Counts Section -->

</main>
<!-- End #main -->