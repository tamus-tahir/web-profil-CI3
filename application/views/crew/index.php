<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">
        <a class="mb-3 btn btn-outline-primary" href="<?= base_url('crew/form'); ?>" role="button">
            Tambah <i class="fa fa-plus"></i>
        </a>
        <button type="button" class="btn btn-primary mb-3">Total Data : <?= $num; ?></button>

        <div class="table-responsive">
            <table class="table table-hover table-bordered text-center" id="myTable">
                <thead class="bg-primary text-white ">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">urutan</th>
                        <th scope="col">Order</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-black">
                    <?php $i = 1; ?>
                    <?php foreach ($crew as $c) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td class="text-left"><?= $c->nama; ?></td>
                            <td><?= $c->jabatan; ?></td>
                            <td><?= $c->urutan; ?></td>
                            <td class="text-nowrap">
                                <a href="#" class="getAjax btn btn-outline-info" data-id="<?= $c->id_crew; ?>" data-toggle="modal" data-target="#getcrew">
                                    <i class="fas fa-eye pop" data-toggle="popover" data-placement="bottom" data-content="Detail"> </i>
                                </a>
                                <a href="<?= base_url('crew/form/' . $c->id_crew); ?>" class="btn btn-outline-warning">
                                    <i class="fas fa-edit pop" data-toggle="popover" data-placement="bottom" data-content="Update"></i>
                                </a>
                                <a href="<?= base_url('crew/hapus/' . $c->id_crew); ?>" class="button-delete btn btn-outline-danger">
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

<!-- modal -->
<div class="modal fade " id="getcrew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Crew</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body detailcrew">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

<?php require_once('application/views/templates/footer.php'); ?>

<!-- script -->
<script>
    $(document).ready(function() {
        $('#myTable').on('click', '.getAjax', function() {
            const id = $(this).data('id');
            $(".detailcrew").load("<?= base_url('crew/getAjax/'); ?>" + id);
        });
    });
</script>
<!-- end script -->