<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">
        <a class="mb-4 mt-2 btn btn-outline-primary" href="<?= base_url('menu/form'); ?>" role="button">
            Tambah <i class="fa fa-plus"></i>
        </a>
        <button type="button" class="btn btn-primary mb-3">Total Data : <?= $num; ?></button>

        <div class="table-responsive">
            <table class="table table-hover table-bordered text-center w-100" id="myTable">
                <thead class="bg-primary text-white ">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Menu Utama</th>
                        <th scope="col">Urutan</th>
                        <th scope="col">Aktif</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-black">
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $k) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td class="text-left"><?= $k->menu; ?></td>
                            <td><?= $k->url; ?></td>
                            <td><?= $k->icon; ?></td>

                            <?php $data = $this->Default_m->getWhere('tabel_menu', ['id_menu' => $k->dropdown])->row(); ?>

                            <td><?= $k->dropdown == 0 ? 'Root' : $data->menu; ?></td>

                            <td><?= $k->urutan; ?></td>
                            <td><?= $k->aktif; ?></td>
                            <td class="text-nowrap">
                                <a href="<?= base_url('menu/form/' . $k->id_menu); ?>" class="btn btn-outline-warning">
                                    <i class="fas fa-edit pop" ata-toggle="popover" data-placement="bottom" data-content="Update"></i>
                                </a>
                                <a href="<?= base_url('menu/hapus/' . $k->id_menu); ?>" class="button-delete btn btn-outline-danger">
                                    <i class="fas fa-trash-alt pop" ata-toggle="popover" data-placement="bottom" data-content="Delete"></i>
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

<?php require_once('application/views/templates/footer.php'); ?>