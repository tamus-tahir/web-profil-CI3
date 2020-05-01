<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open_multipart(); ?>

        <div class="form-group">
            <label for="nama_user">Nama Lengkap <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('nama_user') ? 'is-invalid' : null; ?>" id="nama_user" name="nama_user" autocomplete="off" value="<?= $ubah->nama_user; ?>">
            <?= form_error('name'); ?>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="foto">Foto User</label>
                    <div>
                        <input type="file" id="real-file" hidden="hidden" name="foto">
                        <button type="button" class="btn btn-outline-success" id="custom-button">
                            Upload File <i class="fas fa-upload ml-2"></i>
                        </button>
                        <span id="custom-text" class="text-secondary ml-2">Tidak ada file yang diupload</span>
                    </div>
                    <?= form_error('foto'); ?>
                </div>

                <div class="form-group">
                    <img id="prev" src="<?= base_url('assets/img/'); ?><?= !empty($ubah->foto) ? $ubah->foto : 'noprofil.png'; ?>" height="270">
                </div>

                <input type="hidden" name="foto_lama" value="<?= $ubah->foto; ?>">
            </div>
        </div>

        <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url(); ?>dashboard" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
        <button class="mt-3 btn btn-primary" type="submit">Ubah <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>