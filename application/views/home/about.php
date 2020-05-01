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

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <img src="<?= base_url('assets/img/' . $about->imgabout); ?>" class="img-fluid mb-3" alt="">
            <p><?= $about->about; ?></p>
        </div>
    </section><!-- End About Section -->

</main><!-- End #main -->