<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="rounded mt-4 mb-3 p-4 bg-white shadow-lg ">
        <h1 class="h3 text-black"><?= $title; ?></h1>
    </div>

    <!-- info jumlah data -->
    <div class="row justify-content-center">
        <div class="col-xl-3 col-lg-3 col-md-6 mb-3">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 font-weight-bold text-info text-uppercase mb-1">User</div>
                            <div class="h6 mb-0 font-weight-bold text-black">Total Data : <?= $user; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fas fa-fw fa-user fa-2x text-black"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-3">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 font-weight-bold text-info text-uppercase mb-1">Berita</div>
                            <div class="h6 mb-0 font-weight-bold text-black">Total Data : <?= $berita; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-black"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-3">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 font-weight-bold text-info text-uppercase mb-1">Counter</div>
                            <div class="h6 mb-0 font-weight-bold text-black">Total Data : <?= $counter; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fas fa-history fa-2x text-black"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-3">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 font-weight-bold text-info text-uppercase mb-1">Crew</div>
                            <div class="h6 mb-0 font-weight-bold text-black">Total Data : <?= $crew; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa fa-users fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end info jumlah data -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once('application/views/templates/footer.php'); ?>