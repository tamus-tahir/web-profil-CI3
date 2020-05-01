<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <div class="rounded mt-4 mb-5 p-4 bg-white shadow-lg ">

        <a class="mb-4 mt-2 btn btn-outline-warning" href="<?= base_url('profil'); ?>" role="button">
            <i class="fa fa-arrow-left"></i> Kembali
        </a>
        <button type="button" class="btn btn-primary mb-3">Profil : <?= $profil->profil; ?></button>

        <div class="table-responsive">
            <table class="table table-hover table-bordered text-center">
                <thead class="bg-primary text-white ">
                    <tr>
                        <th scope="col" width="20px" colspan="2">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class=" text-black">
                    <?php $i = 1; ?>
                    <?php $menu = $this->db->get_where('tabel_menu', ['dropdown' => 0])->result(); ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr class="<?= $m->dropdown == 0 ? 'bg-gray-200' : ''; ?>">
                            <td colspan="2"><?= $i; ?></td>
                            <td class="text-left"><?= $m->menu; ?></td>

                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" <?= check_access($profil->id_profil, $m->id_menu); ?> data-profil="<?= $profil->id_profil; ?>" data-menu="<?= $m->id_menu; ?>">
                                </div>
                            </td>
                        </tr>

                        <?php $data = $this->db->get_where('tabel_menu', ['dropdown' => $m->id_menu])->result(); ?>
                        <?php $x = 'a'; ?>
                        <?php foreach ($data as $d) : ?>
                            <tr>
                                <td width="20px"></td>
                                <td width="20px"><?= $x; ?></td>
                                <td class="text-left"><?= $d->menu; ?></td>

                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" <?= check_access($profil->id_profil, $d->id_menu); ?> data-profil="<?= $profil->id_profil; ?>" data-menu="<?= $d->id_menu; ?>">
                                    </div>
                                </td>
                            </tr>
                            <?php $x++; ?>
                        <?php endforeach ?>

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

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });


    $('.form-check-input').on('click', function() {
        const id_profil = $(this).data('profil');
        const id_menu = $(this).data('menu');

        $.ajax({
            url: "<?= base_url('profil/changeaccess'); ?>",
            type: 'post',
            data: {
                id_profil: id_profil,
                id_menu: id_menu
            },

            success: function() {
                document.location.href = "<?= base_url('profil/akses/'); ?>" + id_profil;
            }
        });
    });
</script>