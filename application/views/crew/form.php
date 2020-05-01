<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open_multipart(); ?>

        <div class="form-group">
            <label for="nama">Nama <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : null; ?>" id="nama" name="nama" value="<?= (!empty($ubah)) ? $ubah->nama : ''; ?>">
            <?= form_error('nama'); ?>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="urutan">Urutan <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('urutan') ? 'is-invalid' : null; ?>" id="urutan" name="urutan" value="<?= (!empty($ubah)) ? $ubah->urutan : ''; ?>">
                    <?= form_error('urutan'); ?>
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label for="jabatan">Jabatan <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('jabatan') ? 'is-invalid' : null; ?>" id="jabatan" name="jabatan" value="<?= (!empty($ubah)) ? $ubah->jabatan : ''; ?>">
                    <?= form_error('jabatan'); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="facebook">Facebook <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('facebook') ? 'is-invalid' : null; ?>" id="facebook" name="facebook" value="<?= (!empty($ubah)) ? $ubah->facebook : ''; ?>">
            <?= form_error('facebook'); ?>
        </div>

        <div class="form-group">
            <label for="instagram">Instagram <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('instagram') ? 'is-invalid' : null; ?>" id="instagram" name="instagram" value="<?= (!empty($ubah)) ? $ubah->instagram : ''; ?>">
            <?= form_error('instagram'); ?>
        </div>

        <div class="form-group">
            <label for="twitter">Twitter <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('twitter') ? 'is-invalid' : null; ?>" id="twitter" name="twitter" value="<?= (!empty($ubah)) ? $ubah->twitter : ''; ?>">
            <?= form_error('twitter'); ?>
        </div>

        <div class="form-group">
            <label for="youtube">Youtube <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('youtube') ? 'is-invalid' : null; ?>" id="youtube" name="youtube" value="<?= (!empty($ubah)) ? $ubah->youtube : ''; ?>">
            <?= form_error('youtube'); ?>
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="imgcrew">Foto <span class="text-danger">* (Landscape, Max Size 500kb)</span></label>
                <div>
                    <input type="file" id="real-file" hidden="hidden" name="imgcrew">
                    <button type="button" class="btn btn-outline-success" id="custom-button">
                        Upload File <i class="fas fa-upload ml-2"></i>
                    </button>
                    <span id="custom-text" class="text-secondary ml-2">Tidak ada file yang diupload</span>
                </div>
                <?= form_error('imgcrew'); ?>
            </div>

            <div class="form-group">
                <img id="prev" src="<?= base_url('assets/'); ?><?= (!empty($ubah->imgcrew)) ? 'uploads/crew/' . $ubah->imgcrew : 'img/noprofil.png'; ?>" height="200">
            </div>
        </div>

        <input type="hidden" name="imgcrewold" value="<?= (!empty($ubah)) ? $ubah->imgcrew : ''; ?>">

        <a class="mr-2 mt-2 btn btn-warning " href="<?= base_url('crew'); ?>" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
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