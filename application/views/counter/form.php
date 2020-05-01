<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-blac"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open(); ?>
        <div class="form-group">
            <label for="judul">Judul <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('judul') ? 'is-invalid' : null; ?>" id="judul" name="judul" value="<?= (!empty($ubah)) ? $ubah->judul : ''; ?>">
            <?= form_error('judul'); ?>
        </div>
        <div class="form-group">
            <label for="icon">Icon</label>
            <input type="text" class="form-control <?= form_error('icon') ? 'is-invalid' : null; ?>" id="icon" name="icon" value="<?= (!empty($ubah)) ? $ubah->icon : ''; ?>">
            <?= form_error('icon'); ?>
        </div>
        <div class="form-group">
            <label for="angka">Angka <span class="text-danger">*</span></label>
            <input type="number" class="form-control <?= form_error('angka') ? 'is-invalid' : null; ?>" id="angka" name="angka" value="<?= (!empty($ubah)) ? $ubah->angka : ''; ?>">
            <?= form_error('angka'); ?>
        </div>


        <a class="mr-2 mt-2 btn btn-warning " href="<?= base_url('counter'); ?>" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
        <button class="mt-2 btn btn-primary" type="submit"><?= (!empty($ubah)) ? 'Ubah' : 'Tambah'; ?> <i class="fas fa-paper-plane"></i></button>
        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>