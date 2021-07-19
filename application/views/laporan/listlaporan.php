    <!-- Header -->
    <?= content_open(); ?>
    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboards</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $judul1; ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Card stats -->
    <!-- style="border: 5px solid black;border-collapse: collapse;" -->
    <div class="table mx-auto">
        <div class="container mt--3 ml-8">
            <h3 class="text-white text-left"><i><?= $judul; ?></i> </h3>
        </div>
        <br>
        <table class="table table-primary table-bordered border-darker text-center" style="width: 600px;">
            <thead>
                <tr>
                    <th><b>TANGGAL</b></th>
                    <th><b>KAMAR</b> </th>
                    <th><b>BALLROOM</b> </th>
                    <th><b>FASILITAS</b> </th>
                    <th><b>JUMLAH</b> </th>
                </tr>
            </thead>
            <tbody>
                <?php $totalharga = 0; ?>
                <?php foreach ($datalaporan as $row => $value) : ?>
                    <?php
                    $subharga = $value['p_kamar'] + $value['p_ballroom'] + $value['p_fasilitas']; ?>
                    <tr>
                        <td><?= date("d/m/Y", strtotime($value['tanggal'])); ?></td>
                        <td><?= number_format($value['p_kamar']); ?></td>
                        <td><?= number_format($value['p_ballroom']);  ?></td>
                        <td><?= number_format($value['p_fasilitas']); ?></td>
                        <td><?= number_format($subharga); ?></td>
                    </tr>
                    <?php $total = $totalharga += $subharga; ?>
                <?php endforeach ?>
                <tr>
                    <td colspan="4">Total</td>
                    <td><?= number_format($total); ?></td>
                </tr>
            </tbody>
        </table>

    </div>
    <?= content_close(); ?>