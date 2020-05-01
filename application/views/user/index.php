<!-- Begin Page Content -->
<div class="container-fluid ">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <a class="mb-3 btn btn-outline-primary" href="<?= base_url('user/tambah'); ?>" role="button">
            Tambah <i class="fa fa-plus"></i>
        </a>
        <button type="button" class="btn btn-primary mb-3">Total Data : <?= $num; ?></button>

        <div class="table-responsive">
            <table class="table table-hover table-bordered text-center w-100" id="myTable">
                <thead class="bg-primary text-white ">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Level</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Aktif</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-black">
                    <?php $i = 1; ?>
                    <?php foreach ($user as $u) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td class="text-left"><?= $u->username; ?></td>
                            <td><?= $u->profil; ?></td>
                            <td class="text-left"><?= $u->nama_user; ?></td>
                            <td><?= $u->aktif; ?></td>
                            <td class="text-nowrap">
                                <a href=" #" class="getAjaxUser btn btn-outline-info" data-id="<?= $u->id_user; ?>" data-toggle="modal" data-target="#getUser">
                                    <i class="fas fa-eye pop" data-toggle="popover" data-placement="bottom" data-content="Detail"> </i>
                                </a>
                                <a href="<?= base_url('user/ubah/' . $u->id_user); ?>" class="btn btn-outline-warning">
                                    <i class="fas fa-edit pop" data-toggle="popover" data-placement="bottom" data-content="Update"></i>
                                </a>
                                <a href="<?= base_url('user/password/' . $u->id_user); ?>" class="btn btn-outline-success">
                                    <i class="fas fa-key pop" data-toggle="popover" data-placement="bottom" data-content="Change Password"></i>
                                </a>
                                <a href="<?= base_url('user/hapus/' . $u->id_user); ?>" class="btn btn-outline-danger button-delete">
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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal User -->
<div class="modal fade " id="getUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body detailUser">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php require_once('application/views/templates/footer.php'); ?>

<script>
    // get user
    $(document).ready(function() {
        $('#myTable').on('click', '.getAjaxUser', function() {
            const id = $(this).data('id');
            $(".detailUser").load("<?= base_url('user/getAjaxUser/'); ?>" + id);
        });
    });
</script>