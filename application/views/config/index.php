<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <?= form_open_multipart(); ?>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="webname">Nama Web <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('webname') ? 'is-invalid' : null; ?>" id="webname" name="webname" autocomplete="off" value="<?= $ubah->webname; ?>">
                    <?= form_error('webname'); ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="copyright">Copyright <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('copyright') ? 'is-invalid' : null; ?>" id="copyright" name="copyright" autocomplete="off" value="<?= $ubah->copyright; ?>">
                    <?= form_error('copyright'); ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('email') ? 'is-invalid' : null; ?>" id="email" name="email" autocomplete="off" value="<?= $ubah->email; ?>">
                    <?= form_error('email'); ?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="telpon">Telpon <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('telpon') ? 'is-invalid' : null; ?>" id="telpon" name="telpon" autocomplete="off" value="<?= $ubah->telpon; ?>">
                    <?= form_error('telpon'); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat <span class="text-danger">*</span></label>
            <input type="text" class="form-control <?= form_error('alamat') ? 'is-invalid' : null; ?>" id="alamat" name="alamat" autocomplete="off" value="<?= $ubah->alamat; ?>">
            <?= form_error('alamat'); ?>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="facebook">Link Facebook <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('facebook') ? 'is-invalid' : null; ?>" id="facebook" name="facebook" autocomplete="off" value="<?= $ubah->facebook; ?>">
                    <?= form_error('facebook'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="instagram">Link Instagram <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('instagram') ? 'is-invalid' : null; ?>" id="instagram" name="instagram" autocomplete="off" value="<?= $ubah->instagram; ?>">
                    <?= form_error('instagram'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="twitter">Link Twitter <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('twitter') ? 'is-invalid' : null; ?>" id="twitter" name="twitter" autocomplete="off" value="<?= $ubah->twitter; ?>">
                    <?= form_error('twitter'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="youtube">Link Youtube <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('youtube') ? 'is-invalid' : null; ?>" id="youtube" name="youtube" autocomplete="off" value="<?= $ubah->youtube; ?>">
                    <?= form_error('youtube'); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="imgheader">Gambar Header <span class="text-danger">* (Landscape, Max Size 500kb)</span></label>
            <div>
                <input type="file" id="real-file" hidden="hidden" name="imgheader">
                <button type="button" class="btn btn-outline-success" id="custom-button">
                    Upload File <i class="fas fa-upload ml-2"></i>
                </button>
                <span id="custom-text" class="text-secondary ml-2">Tidak ada file yang diupload</span>
            </div>
            <?= form_error('imgheader'); ?>
        </div>

        <div class="form-group">
            <img id="prev" src="<?= base_url('assets/img/' . $ubah->imgheader); ?>" height="350">
        </div>

        <input type="hidden" name="imgheaderold" value="<?= $ubah->imgheader; ?>">

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