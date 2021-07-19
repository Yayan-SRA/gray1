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
                    <th><b>JENIS KAMAR</b></th>
                    <th><b>TERSEDIA</b> </th>
                    <th><b>TERPAKAI</b> </th>
                    <th><b>TOTAL</b> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-left">Premium</td>
                    <td>28</td>
                    <td>2</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td class="text-left">Deluxe</td>
                    <td>15</td>
                    <td>15</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td class="text-left">Standard</td>
                    <td>18</td>
                    <td>22</td>
                    <td>40</td>
                </tr>
            </tbody>
        </table>

    </div>
    <?= content_close(); ?>