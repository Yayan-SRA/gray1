    <!-- Header -->
    <?= content_open(); ?>
    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="<?= base_url($url); ?>"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url($url); ?>">Dashboards</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $judul1; ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Card stats -->
    <!-- style="border: 5px solid black;border-collapse: collapse;" -->
    <div class="formdata col-md-10 mt-4 pb-3 bg-white ">
        <h3 class="text-center pt-5 pb-5"><b><?= $judul; ?></b></h3>
        <div class="form col">
            <form class="tambah" action="<?= base_url('dashboard/formlaporan'); ?>" method="post">
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" value="<?= set_value('tanggal'); ?>">
                </div>
                <div class=" form-group">
                    <label>Pendapatan Sewa Kamar</label>
                    <input type="text" class="form-control" id="p_kamar" name="p_kamar" placeholder="Rp." value="<?= set_value('p_kamar'); ?>">
                </div>
                <div class=" form-group">
                    <label>Pendapatan Sewa Ballroom</label>
                    <input type="text" class="form-control" id="p_ballroom" name="p_ballroom" placeholder="Rp." value="<?= set_value('p_ballroom'); ?>">
                </div>
                <div class=" form-group">
                    <label>Pendapatan Sewa Fasilitas</label>
                    <input type="text" class="form-control" id="p_fasilitas" name="p_fasilitas" placeholder="Rp." value="<?= set_value('p_fasilitas'); ?>">
                </div>
                <div class=" form-group">
                    <input type="checkbox" required> Saya telah memeriksa data yang dimasukkan adalah benar
                </div>
                <div class="mt-5 mb-3">
                    <button type="submit" class="btn btn-primary" value="Save">Simpan</button>
                    <input type="reset" class="btn btn-danger" value="Batal">
                </div>
            </form>
        </div>
    </div>
    <?= content_close(); ?>