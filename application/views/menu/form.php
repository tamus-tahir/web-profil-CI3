<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-blac"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open(); ?>
        <div class="form-group">
            <label for="menu">Menu <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('menu') ? 'is-invalid' : null; ?>" id="menu" name="menu" value="<?= (!empty($ubah)) ? $ubah->menu : ''; ?>">
            <?= form_error('menu'); ?>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="url">Url <span class="text-danger">*</span></label>
                <input type="text" class="form-control <?= form_error('url') ? 'is-invalid' : null; ?>" id="url" name="url" value="<?= (!empty($ubah)) ? $ubah->url : ''; ?>">
                <?= form_error('url'); ?>
            </div>
            <div class="col-md-6">
                <label for="icon">Icon</label>
                <input type="text" class="form-control <?= form_error('icon') ? 'is-invalid' : null; ?>" id="icon" name="icon" value="<?= (!empty($ubah)) ? $ubah->icon : ''; ?>">
                <?= form_error('icon'); ?>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label for="dropdown">Dropdown <span class="text-danger">*</span></label>
                <select id="dropdown" class="form-control cariProdi <?= form_error('dropdown') ? 'is-invalid' : null; ?>" name="dropdown">
                    <option value="0">No</option>
                    <?php $data = $this->Default_m->getAll('tabel_menu', 'id_menu')->result(); ?>
                    <?php foreach ($data as $d) : ?>

                        <?php if ($d->dropdown == 0) : ?>
                            <option value="<?= $d->id_menu; ?>" <?= (!empty($ubah) && $ubah->dropdown == $d->id_menu) ? 'selected' : ''; ?>><?= $d->menu; ?></option>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </select>
                <?= form_error('dropdown'); ?>
            </div>
            <div class="col-md-4">
                <label for="urutan">Urutan <span class="text-danger">*</span></label>
                <input type="number" class="form-control <?= form_error('urutan') ? 'is-invalid' : null; ?>" id="urutan" name="urutan" value="<?= (!empty($ubah)) ? $ubah->urutan : ''; ?>">
                <?= form_error('urutan'); ?>
            </div>
            <div class="col-md-4">
                <label for="aktif">Aktif <span class="text-danger">*</span></label>
                <select id="aktif" class="form-control cariProdi <?= form_error('aktif') ? 'is-invalid' : null; ?>" name="aktif">
                    <option value="Yes" <?= (!empty($ubah) && $ubah->aktif == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                    <option value="No" <?= (!empty($ubah) && $ubah->aktif == 'No') ? 'selected' : ''; ?>>No</option>
                </select>
                <?= form_error('aktif'); ?>
            </div>
        </div>

        <a class="mr-2 mt-2 btn btn-warning " href="<?= base_url('menu'); ?>" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
        <button class="mt-2 btn btn-primary" type="submit"><?= (!empty($ubah)) ? 'Ubah' : 'Tambah'; ?> <i class="fas fa-paper-plane"></i></button>
        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>