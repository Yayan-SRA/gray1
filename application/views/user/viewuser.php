    <!-- Header -->


    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/carousel/premium.jpg'); ?>" class="d-block w-100" height="500px" alt="...">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 80px; text-align:left;margin-left:100px">
                    <h1>Special Happy<br>New Year</h1> <br>
                    <p>Jadikan Hari Spesialmu Meriah,<br>Waktunya untuk Membuat Kenangan Baru</p> <br>
                    <a href="<?= site_url($url . '/halaman/kamar/3'); ?>" class="btn btn-primary">Get It Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/carousel/ballroom.jpg'); ?>" class="d-block w-100" height="500px" alt="...">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 80px; text-align:left;margin-left:100px">
                    <h1>Special Happy<br>New Year</h1> <br>
                    <p>Jadikan Hari Spesialmu Meriah,<br>Waktunya untuk Membuat Kenangan Baru</p> <br>
                    <a href="<?= site_url($url . '/halaman/ballroom/1'); ?>" class="btn btn-primary">Get It Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/carousel/pool.jpg'); ?>" class="d-block w-100" height="500px" alt="...">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 80px; text-align:left;margin-left:100px">
                    <h1>Special Happy<br>New Year</h1> <br>
                    <p>Jadikan Hari Spesialmu Meriah,<br>Waktunya untuk Membuat Kenangan Baru</p> <br>
                    <a href="<?= site_url($url . '/halaman/fasilitas/1'); ?>" class="btn btn-primary">Get It Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/carousel/gym.jpg'); ?>" class="d-block w-100" height="500px" alt="...">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 80px; text-align:left;margin-left:100px">
                    <h1>Special Happy<br>New Year</h1> <br>
                    <p>Jadikan Hari Spesialmu Meriah,<br>Waktunya untuk Membuat Kenangan Baru</p> <br>
                    <a href="<?= site_url($url . '/halaman/fasilitas/2'); ?>" class="btn btn-primary">Get It Now</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Akhir Carousel -->

    <!-- content -->
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-3" style="border: 1px solid gray">
                <div class="dropdown">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <h5 style="display: inline-block;">Choose Facility</h5>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php foreach ($databallroom->result() as $row) { ?>
                            <li><a class="dropdown-item" href="<?= site_url($url . '/halaman/ballroom/' . $row->id_ballroom); ?>"><?= $row->jenis; ?></a></li>
                        <?php }; ?>
                        <?php foreach ($datafasilitas->result() as $row) { ?>
                            <li><a class="dropdown-item" href="<?= site_url($url . '/halaman/fasilitas/' . $row->id_fasilitas); ?>"><?= $row->jenis; ?></a></li>
                        <?php }; ?>
                    </ul>
                </div>
            </div>
            <div class="col-3 text-center" style="border: 1px solid gray">
                <h5 class="text-black-50 mt-2">Check In <i class="fas fa-arrow-right"></i> Check Out</h5>
            </div>
            <div class="col-2 bg-primary text-center" style="border: 1px solid gray">
                <button class="btn btn-primary">Reserve Now</button>
            </div>
        </div>
        <br>
        <h3>Our Rooms</h3>
        <p class="text-black-50">Fill the Comfort</p>
        <br>

        <?php foreach ($datakamar->result() as $row) { ?>
            <div class="row bg-white mb-5 p-3 pb-4">
                <h4><?= $row->jenis; ?></h4>
                <div class="col-md-4">
                    <img src="<?= $row->foto; ?>" width="300px" alt="">
                </div>
                <div class="col-md-5">

                    <div class="row">
                        <div class="col-md-6"><img src="<?= base_url('assets/img/bad.png'); ?>" width="50px" alt="">
                            <p style="display: inline-block; margin-left:20px"><?= $row->j_ranjang; ?></p>
                        </div>
                        <div class="col-md-6"><img src="<?= base_url('assets/img/org.png'); ?>" width="50px" alt="">
                            <p style="display: inline-block; margin-left:20px"><?= $row->j_org; ?> Guest</p>
                        </div>
                        <hr>
                        <div class="col-md-6"><img src="<?= base_url('assets/img/brk.png'); ?>" width="50px" alt="">
                            <p style="display: inline-block; margin-left:20px"><?= $row->srpn; ?></p>
                        </div>
                        <div class="col-md-6"><img src="<?= base_url('assets/img/sqm.png'); ?>" width="50px" alt="">
                            <p style="display: inline-block; margin-left:20px"><?= $row->ukuran; ?> sqm</p>
                        </div>
                        <div class="col-md-6"><img src="<?= base_url('assets/img/wifi.png'); ?>" width="50px" alt="">
                            <p style="display: inline-block; margin-left:20px"><?= $row->wifi; ?></p>
                        </div>
                        <hr>
                        <div class="col-md-6 text-primary">
                            <?= $row->unggulan1; ?>
                        </div>
                        <div class="col-md-6 text-primary">
                            <?= $row->unggulan2; ?>
                        </div>
                    </div>

                </div>
                <div class="col-md-3" align="right">
                    <br><br>
                    <h4 class="text-warning">Rp<?= number_format($row->harga); ?></h4>
                    <p class="text-black-50">/room/night</p>
                    <a href="<?= site_url($url . '/halaman/kamar/' . $row->id_kamar); ?>">
                        <button class="btn btn-warning text-white" style="width: 160px;">Book Now</button>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>