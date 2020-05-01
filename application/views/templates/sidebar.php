<!-- Sidebar -->
<ul class="navbar-nav bg-sidebar sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(''); ?>" target="_blank">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-skull-crossbones text-warning"></i>
        </div>
        <div class="sidebar-brand-text mx-3 ">ONEPIECE</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- get user -->
    <?php
    $id_user = $this->session->userdata('id_user');
    $data = $this->Default_m->getWhere('tabel_user', ['id_user' => $id_user])->row();
    $id_profil = $data->id_profil;
    ?>

    <!-- get menu -->
    <?php
    $query = "SELECT * FROM tabel_menu 
            JOIN tabel_akses ON tabel_akses.id_menu = tabel_menu.id_menu
            WHERE tabel_akses.id_profil = $id_profil
            ORDER BY urutan ASC
            ";
    $menu = $this->db->query($query)->result();
    ?>

    <?php $url = $this->uri->segment(1); ?>

    <?php $i = 1; ?>
    <?php foreach ($menu as $m) : ?>

        <?php if ($m->aktif == 'Yes') : ?>

            <?php if ($m->dropdown == 0) : ?>

                <?php $row = $this->db->query("SELECT * FROM tabel_menu WHERE dropdown = $m->id_menu")->num_rows(); ?>

                <?php if ($row == 0) : ?>

                    <li class="nav-item <?= $url == $m->url ? 'active' : ''; ?>">
                        <a class="nav-link pb-0" href="<?= base_url($m->url); ?>">
                            <i class="<?= $m->icon; ?>"></i>
                            <span><?= $m->menu; ?></span></a>
                    </li>

                <?php else : ?>

                    <!-- get submenu -->
                    <?php $query = "SELECT * FROM tabel_menu 
                                    JOIN tabel_akses ON tabel_akses.id_menu = tabel_menu.id_menu
                                    WHERE tabel_akses.id_profil = $id_profil
                                    AND dropdown = $m->id_menu
                                    ORDER BY urutan ASC"; ?>
                    <?php $down = $this->db->query($query)->result(); ?>

                    <?php $cariUrl = $this->uri->segment(1); ?>
                    <?php $num = $this->db->query("SELECT * FROM tabel_menu WHERE dropdown = $m->id_menu AND url = '$cariUrl'")->num_rows(); ?>

                    <li class="nav-item <?= $num > 0 ? 'active' : ''; ?>">
                        <a class="nav-link collapsed pb-0" href="<?= base_url($m->url); ?>" data-toggle="collapse" data-target="#collapse<?= $i; ?>" aria-expanded="true" aria-controls="collapse<?= $i; ?>">
                            <i class="<?= $m->icon; ?>"></i>
                            <span><?= $m->menu; ?></span>
                        </a>
                        <div id="collapse<?= $i; ?>" class="collapse" aria-labelledby="heading<?= $i; ?>" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">

                                <?php foreach ($down as $s) : ?>
                                    <?php if ($s->aktif == 'Yes') : ?>
                                        <a class="collapse-item" href="<?= base_url($s->url); ?>"><?= $s->menu; ?></a>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </li>

                <?php endif; ?>

            <?php endif; ?>

        <?php endif; ?>

        <?php $i++; ?>
    <?php endforeach; ?>


    <hr class="sidebar-divider mt-4 mb-2">

    <!-- Sidebar Toggler (Sidebar) -->
    <!-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> -->

</ul>
<!-- End of Sidebar -->