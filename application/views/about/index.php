<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open_multipart(); ?>

        <div class="form-group">
            <label for="about">About <span class="text-danger">* </span></label>
            <textarea class="form-control ckeditor <?= form_error('about') ? 'is-invalid' : null; ?>" id="about" rows="3" name="about"><?= $ubah->about; ?></textarea>
            <?= form_error('about'); ?>
        </div>

        <div class="form-group">
            <label for="imgabout">Gambar About <span class="text-danger">* (Landscape, Max Size 500kb)</span></label>
            <div>
                <input type="file" id="real-file" hidden="hidden" name="imgabout">
                <button type="button" class="btn btn-outline-success" id="custom-button">
                    Upload File <i class="fas fa-upload ml-2"></i>
                </button>
                <span id="custom-text" class="text-secondary ml-2">Tidak ada file yang diupload</span>
            </div>
            <?= form_error('imgabout'); ?>
        </div>

        <div class="form-group">
            <img id="prev" src="<?= base_url('assets/img/' . $ubah->imgabout); ?>" height="350">
        </div>

        <input type="hidden" name="imgaboutold" value="<?= $ubah->imgabout; ?>">

        <button class="mt-3 btn btn-primary" type="submit">Ubah <i class="fas fa-paper-plane"></i></button>

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