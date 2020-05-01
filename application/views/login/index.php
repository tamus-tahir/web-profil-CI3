<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url(); ?>assets/img/logo-pangkep.png">
    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.css" rel="stylesheet">

    <!--Custom styles-->
    <link href="<?= base_url(); ?>assets/css/login.css" rel="stylesheet">

    <link rel="icon" href="<?= base_url(); ?>assets/img/favicon.png">
</head>

<body style="
background: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)),url(<?= base_url('assets/img/background.jpg'); ?>); 
background-repeat: no-repeat;
background-size: cover;
background-position: center;
background-attachment: fixed;
">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="flash-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6  h-100">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="<?= base_url('assets/img/icon-login.png'); ?>" width="170">
                            <h3 class="text-light mt-2">TEMPLATE DEFAULT</h3>
                        </div>

                        <?= form_open(); ?>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="username" class="form-control <?= form_error('username') ? 'is-invalid' : null; ?>" id="username" name="username">

                        </div>
                        <div class="text-center font-weight-bold mb-3">
                            <?= form_error('username'); ?>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password" class="form-control <?= form_error('password') ? 'is-invalid' : null; ?>" id="password" name="password">
                        </div>
                        <div class="text-center font-weight-bold mb-3">
                            <?= form_error('password'); ?>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="LOGIN" class="btn float-right login_btn">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

    <script src="<?= base_url(); ?>assets/vendor/sweet-alert-2/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/my-script.js"></script>

</body>

</html>