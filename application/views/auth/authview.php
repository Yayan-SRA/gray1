<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title><?= $title; ?></title>

    <style>
        body {
            background-image: url(<?= base_url('assets/img/bg.png'); ?>);
        }
    </style>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets/img/logo.png'); ?>" type=" image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/nucleo/css/nucleo.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css'); ?>" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/argon.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>" type="text/css">
</head>

<body style="font-family: 'Times New Roman', Times, serif;">
    <div class="container mt-5">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card o-hidden border-0 shadow-lg my-5 rounded-50">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="pl-5 pr-5">
                                    <form action="<?= site_url('auth/check'); ?>" method="POST">
                                        <div class="brand text-center mt-4 mb-4">
                                            <!-- <h5 class="text-left"><i class="fa text-primary"></i> Gray</h5> -->
                                            <h1 class="mt-4"><?= $title; ?></h1>
                                            <?= $this->session->flashdata('info') ?>
                                            <?= $this->session->flashdata('message') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user rounded-pill" name="username" placeholder="Username" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user rounded-pill" name="sandi" placeholder="Password" required="" />
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block rounded-pill">
                                                <strong>Log in</strong>
                                            </button>
                                        </div>
                                        <hr>
                                        <div class="text-center mb-3">
                                            <a href="<?= site_url('auth/pendaftaran'); ?>">Daftar</a>
                                            <!-- <a class="small" href="forgot-password.html">Forgot Password?</a> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <script src="<?= base_url('assets/vendor/jquery/dist/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/js-cookie/js.cookie.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js'); ?>"></script>
        <!-- Optional JS -->
        <script src="<?= base_url('assets/vendor/chart.js/dist/Chart.min.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/chart.js/dist/Chart.extension.js'); ?>"></script>
        <!-- Argon JS -->
        <script src="<?= base_url('assets/js/argon.js'); ?>"></script>

</body>

</html>