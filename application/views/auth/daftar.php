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
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru</h1>
                            </div>
                            <form class="user" method="POST" action="<?= base_url('auth/registration'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="sandi1" name="sandi1" placeholder="Password">
                                        <?= form_error('sandi1', '<small class="text-danger pl-3 text">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="sandi2" name="sandi2" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <div class="form-group pl-3">
                                    <label>Level</label>
                                    <br>
                                    <input type="radio" value="resepsionis" id="level" name="level" checked required> resepsionis
                                    <input class="ml-3" type="radio" value="income audit" id="level" name="level" required> income audit
                                    <input class="ml-3" type="radio" value="manager" id="level" name="level" required> manager
                                    <input class="ml-3" type="radio" value="admin" id="level" name="level" required> admin
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Bootstrap core JavaScript-->
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