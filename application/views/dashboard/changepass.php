<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open(); ?>

        <div class="form-group">
            <label for="oldpass">Password Lama <span class="text-danger">*</span></label>
            <input type="password" class="form-control <?= form_error('oldpass') ? 'is-invalid' : null; ?>" id="oldpass" name="oldpass" autocomplete="off">
            <?= form_error('oldpass'); ?>
        </div>

        <div class="form-group">
            <label for="password">Password Baru <span class="text-danger">*</span></label>
            <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : null; ?>" id="password" name="password" autocomplete="off">
            <?= form_error('password'); ?>
        </div>

        <div class="form-group">
            <label for="passconfirm">Konfimasi Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control <?= form_error('passconfirm') ? 'is-invalid' : null; ?>" id="passconfirm" name="passconfirm" autocomplete="off">
            <?= form_error('passconfirm'); ?>
        </div>

        <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('dashboard'); ?>" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
        <button class="mt-3 btn btn-primary" type="submit">Ubah <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>