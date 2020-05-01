<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg b">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="rounded mb-5 p-4 bg-white shadow-lg ">
                <?= form_open(); ?>
                <div class="form-group">
                    <label for="profil">Profil <span class="text-danger">*</span></label>
                    <input type="text" class="form-control <?= form_error('profil') ? 'is-invalid' : null; ?>" id="profil" name="profil" value="<?= (!empty($ubah)) ? $ubah->profil : ''; ?>">
                    <?= form_error('profil'); ?>
                </div>
                <a class="mr-2 mt-2 btn btn-warning " href="<?= base_url('profil'); ?>" role="button"><i class="fa fa-arrow-left"></i> Batal</a>
                <button class="mt-2 btn btn-primary" type="submit"><?= (!empty($ubah)) ? 'Ubah' : 'Tambah'; ?> <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>

        <div class="col-md-7">
            <div class="rounded mb-5 p-4 bg-white shadow-lg ">
                <button type="button" class="btn btn-primary mb-3">Total Data : <?= $num; ?></button>

                <div class="table-responsive">
                    <table class="table table-hover table-bordered text-center w-100" id="myTable">
                        <thead class="bg-primary text-white ">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Profil</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class=" text-black">
                            <?php $i = 1; ?>
                            <?php foreach ($profil as $k) : ?>
                                <tr>
                                    <td scope="row" class="text-center"><?= $i; ?></td>
                                    <td><?= $k->profil; ?></td>
                                    <td class="text-nowrap">
                                        <a href="<?= base_url('profil/akses/' . $k->id_profil); ?>" class="btn btn-outline-success">
                                            <i class="fas fa-user-shield pop" data-toggle="popover" data-placement="bottom" data-content="Access"></i>
                                        </a>
                                        <a href="<?= base_url('profil/index/' . $k->id_profil); ?>" class="btn btn-outline-warning">
                                            <i class="fas fa-edit pop" data-toggle="popover" data-placement="bottom" data-content="Update"></i>
                                        </a>
                                        <a href="<?= base_url('profil/hapus/' . $k->id_profil); ?>" class="button-delete btn btn-outline-danger">
                                            <i class="fas fa-trash-alt pop" data-toggle="popover" data-placement="bottom" data-content="Delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>