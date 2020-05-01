<div class="container">
    <h3><?= $berita->judul; ?></h3>
    <hr>
    <img src="<?= base_url('assets/uploads/berita/'); ?><?= $berita->imgberita; ?>" width="100%">
    <h6 class="mt-3"><?= date('d-m-Y', strtotime($berita->tanggal)); ?></h6>
    <h6 class="mt-3"><?= $berita->penulis; ?></h6>
    <hr>
    <p><?= $berita->isi; ?></p>
</div>