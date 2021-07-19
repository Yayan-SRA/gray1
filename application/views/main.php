    <!-- Header -->
    <?= content_open(); ?>
    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboards</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <?= $this->session->flashdata('info') ?>
    <!-- Card stats -->
    <div class="row pt-7 justify-content-center">
        <?php if ($this->session->level == 'resepsionis') { ?>
            <div class="col-xl-4 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-center">
                                <h4 class="card-title text-uppercase text-muted mb-2 text-left"> <strong>Kamar</strong> </h4>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-red text-black rounded-circle shadow">
                                    <span class="h2 font-weight-bold mb-0 text-white">100</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt--3">
                            <img src="<?= base_url('assets/img/beddd.png'); ?>" width="100px" alt="bambang">
                        </div>
                        <div class="button text-center">
                            <a href="<?= site_url('dashboard/kamar'); ?>">
                                <button class="btn btn-info mb--5">
                                    <span class="text-white mr-2"><i class="fa fa-arrow-down"></i></span>
                                    <span class="text-nowrap">Lihat Selengkapnya</span>
                                    </p>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-center">
                                <h4 class="card-title text-uppercase text-muted mb-2 text-left"> <strong>Ballroom</strong> </h4>

                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-red text-black rounded-circle shadow">
                                    <span class="h2 font-weight-bold mb-0 text-white">3</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt--3">
                            <img src="<?= base_url('assets/img/hall.png'); ?>" width="100px" alt="bambang">
                        </div>
                        <div class="button text-center">
                            <a href="<?= site_url('dashboard/ballroom'); ?>">
                                <button class="btn btn-info mb--5">
                                    <span class="text-white mr-2"><i class="fa fa-arrow-down"></i></span>
                                    <span class="text-nowrap">Lihat Selengkapnya</span>
                                    </p>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-center">
                                <h4 class="card-title text-uppercase text-muted mb-2 text-left"> <strong>Fasilitas</strong> </h4>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-red text-black rounded-circle shadow">
                                    <span class="h2 font-weight-bold mb-0 text-white">2</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt--3">
                            <img src="<?= base_url('assets/img/gymm.png'); ?>" width="100px" alt="bambang">
                        </div>
                        <div class="button text-center">
                            <a href="<?= site_url('dashboard/fasilitas'); ?>">
                                <button class="btn btn-info mb--5">
                                    <span class="text-white mr-2"><i class="fa fa-arrow-down"></i></span>
                                    <span class="text-nowrap">Lihat Selengkapnya</span>
                                    </p>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if ($this->session->level == 'manager') { ?>
            <div class="col-xl-6 col-md-12 mt-4">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body" style="height: 190px;">
                        <div class="row">
                            <div class="col text-center">
                                <h4 class="card-title text-uppercase text-muted mb-2 text-center"> <strong>Laporan Pendapatan Bulanan</strong> </h4>
                            </div>
                            <br><br>
                        </div>
                        <div class="text-center mt--3">
                            <img src="<?= base_url('assets/img/report.png'); ?>" width="100px" alt="bambang">
                        </div>
                        <div class="button text-center">
                            <a href="<?= site_url('dashboard/listlaporan'); ?>">
                                <button class="btn btn-info mb--5">
                                    <span class="text-white mr-2"><i class="fa fa-arrow-down"></i></span>
                                    <span class="text-nowrap">Lihat Selengkapnya</span>
                                    </p>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if ($this->session->level == 'income audit') { ?>
            <div class="col-xl-6 col-md-12 mt-4">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body" style="height: 190px;">
                        <div class="row">
                            <div class="col text-center">
                                <h4 class="card-title text-uppercase text-muted mb-2 text-center"> <strong>Input Pendapatan Bulanan</strong> </h4>
                            </div>
                            <br><br>
                        </div>
                        <div class="text-center mt--3">
                            <img src="<?= base_url('assets/img/input.png'); ?>" width="100px" alt="bambang">
                        </div>
                        <div class="button text-center">
                            <a href="<?= site_url('dashboard/formlaporan'); ?>">
                                <button class="btn btn-info mb--5">
                                    <span class="text-white mr-2"><i class="fa fa-arrow-down"></i></span>
                                    <span class="text-nowrap">Input Data</span>
                                    </p>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <?= content_close(); ?>