<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="<?= base_url('assets/img/logo2.png'); ?>" class="navbar-brand-img" style="width: 100%;" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <hr>
            <!-- Collapse -->
            <div class="collapse navbar-collapse mt--4" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                <?php if ($this->session->level == 'resepsionis' OR 'manager' OR 'income audit') { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('dashboard'); ?>">
                            <i class="fas fa-tv text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <?php }?>
                    <?php if ($this->session->level == 'resepsionis') { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('dashboard/kamar'); ?>">
                                <i class="fa fa-bed text-orange"></i>
                                <span class="nav-link-text">Kamar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('dashboard/ballroom'); ?>">
                                <i class="fa fa-users text-primary"></i>
                                <span class="nav-link-text">Ballroom</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('dashboard/fasilitas'); ?>">
                                <i class="fa fa-dumbbell text-yellow"></i>
                                <span class="nav-link-text">Fasilitas</span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ($this->session->level == 'manager') { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('dashboard/listlaporan'); ?>">
                                <i class="fa fa-newspaper text-orange"></i>
                                <span class="nav-link-text">Laporan Pendapatan Bulanan</span>
                            </a>
                        </li>
                    <?php } ?>
                    <?php if ($this->session->level == 'income audit') { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('dashboard/formlaporan'); ?>">
                                <i class="fa fa-download text-primary"></i>
                                <span class="nav-link-text">Input Pendapatan Bulanan</span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
            </div>
        </div>
    </div>
</nav>