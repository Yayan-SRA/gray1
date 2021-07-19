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
    <div class="table mx-auto">
        <div class="container mt--3 ml-8">
            <h3 class="text-white text-left"><i><?= $judul; ?></i> </h3>
        </div>
        <br>
        <table class="table table-primary table-bordered border-darker text-center" style="width: 600px;">
            <thead>
                <tr>
                    <th><b>JENIS FASILITAS</b></th>
                    <th><b>TERSEDIA</b> </th>
                    <th><b>TERPAKAI</b> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-left">Kolam Renang</td>
                    <td>60%</td>
                    <td>40%</td>
                </tr>
                <tr>
                    <td class="text-left">Fitnes</td>
                    <td>50%</td>
                    <td>50%</td>
                </tr>
            </tbody>
        </table>

    </div>
    <?= content_close(); ?>