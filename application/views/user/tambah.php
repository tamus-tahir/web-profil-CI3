<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open_multipart(); ?>

        <div class="form-group">
            <label for="username">Username <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : null; ?>" id="username" name="username" autocomplete="off" value="<?= set_value('username'); ?>">
            <?= form_error('username'); ?>
        </div>

        <div class="form-group">
            <label for="password">Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : null; ?>" id="password" name="password" autocomplete="off">
            <?= form_error('password'); ?>
        </div>

        <div class="form-group">
            <label for="passconfirm">Konfimasi Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control <?= form_error('passconfirm') ? 'is-invalid' : null; ?>" id="passconfirm" name="passconfirm" autocomplete="off">
            <?= form_error('passconfirm'); ?>
        </div>

        <div class="form-group">
            <label for="nama_user">Nama Lengkap <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('nama_user') ? 'is-invalid' : null; ?>" id="nama_user" name="nama_user" autocomplete="off" value="<?= set_value('nama_user'); ?>">
            <?= form_error('name'); ?>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="id_profil">Profil <span class="text-danger">*</span></label>
                    <select id="id_profil" class="form-control <?= form_error('id_profil') ? 'is-invalid' : null; ?>" name="id_profil">
                        <option value="">-- Pilih Profil --</option>
                        <?php foreach ($profil as $p) : ?>
                            <option value="<?= $p->id_profil; ?>"><?= $p->profil; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('id_profil'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="aktif">Aktif <span class="text-danger">*</span></label>
                    <select id="aktif" class="form-control <?= form_error('aktif') ? 'is-invalid' : null; ?>" name="aktif">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <?= form_error('aktif'); ?>
                </div>
            </div>
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
                    <img id="prev" src="<?= base_url('assets/img/noprofil.png'); ?>" height="270">
                </div>
            </div>
        </div>



        <a class="mr-2 mt-3 btn btn-warning " href="<?= base_url('user'); ?>" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
        <button class="mt-3 btn btn-primary" type="submit">Tambah <i class="fas fa-paper-plane"></i></button>

        </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>