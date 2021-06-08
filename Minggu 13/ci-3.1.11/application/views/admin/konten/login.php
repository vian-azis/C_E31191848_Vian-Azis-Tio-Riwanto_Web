<?php
if (!empty($this->session->userdata('ADMIN_ID')) || !empty($this->session->userdata('KARYAWAN_ID'))) {

    $this->session->set_flashdata('warning_flashData', 'Anda Harus Logout Terlebih Dahulu!');
    redirect(base_url('admin/dashboard'));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Administrator Kapron Petshop">
    <meta name="author" content="Kapron Petshop">

    <title>Administrator Security</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/sb-admin-2/vendor/fontawesome-5.15.2/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-cool-white">

    <div class="container h-100">
        <!-- Include Flash Data File -->
        <?php $this->load->view('_FlashAlert\flash_alert.php') ?>

        <!-- Outer Row -->
        <div class="row justify-content-center align-self-center h-100">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="jumbotron bg-transparent">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-inline-flex bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center pt-5">
                                            <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                                        </div>
                                        <form action="<?= base_url('admin/login/auth'); ?>" method="POST" class="user pb-5">
                                            <div class="form-group">
                                                <input required maxlength="50" type="text" class="form-control form-control-user text-dark" id="username" name="username" value="<?php if (!empty(get_cookie('ADMIN_USERNAME'))) echo get_cookie('ADMIN_USERNAME'); ?>" aria-describedby="usernameHelp" placeholder="Masukkan Username..." style="font-size: 15px;">
                                            </div>
                                            <div class="form-group">
                                                <input required maxlength="50" type="password" class="form-control form-control-user text-dark" id="password" name="password" placeholder="Password" style="font-size: 15px;">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input <?php if (!empty(get_cookie('ADMIN_USERNAME'))) echo 'checked' ?> type="checkbox" value="true" class="custom-control-input" id="remember" name="remember">
                                                    <label class="custom-control-label" for="remember">Ingat Username</label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                <i class="fas fa-sign-in-alt fa-fw"></i> Login
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assets/sb-admin-2/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assets/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assets/sb-admin-2/fontawesome-5.15.2/js/all.min.js"></script>
    <script src="<?= base_url() ?>assets/sb-admin-2/js/sb-admin-2.min.js"></script>

    <!-- Private Script -->
    <script>
        // jQuery
        $(document).ready(function() {
            // Alert Timer
            setTimeout(function() {
                $(".alert-timer").removeClass("show");
                $(".alert-timer").fadeOut();
            }, 2000);
        });
    </script>

</body>

</html>