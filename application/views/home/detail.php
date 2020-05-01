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
    <section id="blog" class="blog mt-5">
        <div class="container">

            <div class="row">

                <div class="col-12 entries">

                    <article class="entry entry-single">
                        <div class="entry-img">
                            <img src="<?= base_url('assets/uploads/berita/' . $berita->imgberita); ?>" alt="" class="img-fluid w-100">
                        </div>
                        <h2 class="entry-title"><?= $berita->judul; ?></h2>
                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"><?= $berita->penulis; ?></a></li>
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time><?= date('d-m-Y', strtotime($berita->tanggal)); ?></time></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p><?= $berita->isi; ?></p>
                        </div>
                    </article>
                    <!-- End blog entry -->

                </div>
                <!-- End blog entries list -->

            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->