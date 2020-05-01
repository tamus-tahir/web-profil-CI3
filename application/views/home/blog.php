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

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog pt-3">
        <div class="container">

            <div class="row justify-content-center">
                <?php foreach ($berita as $b) : ?>
                    <div class="col-12 entries">
                        <article class="entry">
                            <div class="entry-img">
                                <img src="<?= base_url('assets/uploads/berita/' . $b->imgberita); ?>" alt="" class="img-fluid w-100">
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
                                <p><?= substr($b->isi, 0, 300); ?> ...</p>
                                <div class="read-more">
                                    <a href="<?= base_url('home/detail/' . $b->id_berita); ?>">Read More</a>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach ?>
            </div>

            <div class="mt-3">
                <?= $this->pagination->create_links(); ?>
            </div>

        </div>
    </section>
    <!-- End Blog Section -->

</main><!-- End #main -->