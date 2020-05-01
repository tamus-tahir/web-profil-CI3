<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open_multipart(); ?>

        <div class="form-group">
            <label for="judul">Judul <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('judul') ? 'is-invalid' : null; ?>" id="judul" name="judul" value="<?= (!empty($ubah)) ? $ubah->judul : ''; ?>">
            <?= form_error('judul'); ?>
        </div>

        <div class="form-group">
            <label for="isi">Isi <span class="text-danger">* </span></label>
            <textarea class="form-control ckeditor <?= form_error('isi') ? 'is-invalid' : null; ?>" id="isi" rows="3" name="isi"><?= !empty($ubah->isi) ? $ubah->isi : ''; ?></textarea>
            <?= form_error('isi'); ?>
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="imgberita">Gambar Berita <span class="text-danger">* (Landscape, Max Size 500kb)</span></label>
                <div>
                    <input type="file" id="real-file" hidden="hidden" name="imgberita">
                    <button type="button" class="btn btn-outline-success" id="custom-button">
                        Upload File <i class="fas fa-upload ml-2"></i>
                    </button>
                    <span id="custom-text" class="text-secondary ml-2">Tidak ada file yang diupload</span>
                </div>
                <?= form_error('imgberita'); ?>
            </div>

            <div class="form-group">
                <img id="prev" src="<?= base_url('assets/'); ?><?= (!empty($ubah->imgberita)) ? 'uploads/berita/' . $ubah->imgberita : 'img/no-image.png'; ?>" height="400" width="700">
            </div>
        </div>

        <input type="hidden" name="imgberitaold" value="<?= (!empty($ubah)) ? $ubah->imgberita : ''; ?>">

        <a class="mr-2 mt-2 btn btn-warning " href="<?= base_url('berita'); ?>" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
        <button class="mt-2 btn btn-primary" type="submit"><?= (!empty($ubah)) ? 'Ubah' : 'Tambah'; ?> <i class="fas fa-paper-plane"></i></button>
        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- modal -->
<!-- end modal -->

<?php require_once('application/views/templates/footer.php'); ?>

<!-- script -->
<!-- end script -->