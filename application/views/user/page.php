<?php
$id_kamar = "";
$id_ballroom = "";
$id_fasilitas = "";
$jenis = "";
$foto = "";
$harga = "";
$diskripsi = "";
if ($parameter == 'kamar' && $id != '') {
    $this->db->where('id_kamar', $id);
    $row = $this->model->get_kamar()->row_array();
    extract($row);
} elseif ($parameter == 'ballroom' && $id != '') {
    $this->db->where('id_ballroom', $id);
    $row = $this->model->get_ballroom()->row_array();
    extract($row);
} elseif ($parameter == 'fasilitas' && $id != '') {
    $this->db->where('id_fasilitas', $id);
    $row = $this->model->get_fasilitas()->row_array();
    extract($row);
}
?>
<!-- <php $simpanid = $id; ?> -->
<div class="container">
    <div class="produk text-center bg-white pb-3" style="width:90%;margin: 100px auto;">
        <h3 class="pt-4 pb-2"><?= $jenis; ?></h3>
        <img src="<?= $foto; ?>" width="70%" alt="">
        <div class="kata" style="width: 70%; text-align:center;margin:auto">
            <p><?= $diskripsi; ?></p>
        </div>
    </div>

    <div class="row mb-5" style="margin-top: -50px;">
        <div class="col-md-6">
            <h3>Start Booking</h3>
            <div class="row">
                <div class="col-md-5">
                    <h3 class="text-warning">Rp. <?= number_format($harga); ?>,00</h3>
                </div>
                <?php if ($parameter == 'ballroom') : ?>
                    <div class="col-md-6 pt-1">
                        <p class="text-black-50">/3 hours</p>
                    </div>
                <?php elseif ($parameter == 'kamar') : ?>
                    <div class="col-md-6 pt-1">
                        <p class="text-black-50">/room/night</p>
                    </div>
                <?php elseif ($parameter == 'fasilitas') : ?>
                    <div class="col-md-6 pt-1">
                        <p class="text-black-50">/1 hours</p>
                    </div>
                <?php endif; ?>
            </div>
            <br>

            <form method="post">
                <?php
                $durasi = 0;
                if (isset($_POST['konfirmasi'])) {
                    //Mendapatkan jumlah yang diinputkan
                    $durasi = $_POST['durasi'];
                    //masukan pada keranjang belanja
                    $_SESSION['page'][$id] = $durasi;
                    // echo "<script>alert('Produk Telah berhasil dimasukan keranjang');</script>";
                }
                ?>
                <?php $subtotal = 0; ?>
                <?php $subtotal = $durasi * $harga; ?>
                <?php $pajak = 0; ?>
                <?php $pajak = $subtotal * 0.1; ?>
                <?php $total = 0; ?>
                <?php $total = $subtotal + $pajak; ?>
                <?php if ($parameter == 'ballroom') : ?>
                    <label>How long you will stay (3 hours) ?</label>
                <?php elseif ($parameter == 'kamar') : ?>
                    <label>How long you will stay (night) ?</label>
                <?php elseif ($parameter == 'fasilitas') : ?>
                    <label>How long you will stay (1 hours) ?</label>
                <?php endif; ?>
                <div class="form-group col-md-2">
                    <input type="number" min="1" class="form-control" name="durasi" id="durasi" value="<?= $durasi; ?>">
                </div>
                <br>
                <button type="submit" name="konfirmasi" class="btn btn-primary">Konfirmasi</button>
            </form>
            <br>
            <?php if (isset($_POST['konfirmasi'])) : ?>
                <h2>Fill The Information</h2>
                <form action="<?= base_url('user/simpan'); ?>" method="post">
                    <label>Nama Lengkap</label>
                    <div class="form-group col-md-10 mb-3">
                        <input class="form-control" type="text" placeholder="Masukkan nama sesuai KTP" id="nama" name="nama" required>
                    </div>
                    <div class="form-group col-md-10 mb-3" hidden>
                        <input class="form-control" type="text" id="jenis" name="jenis" value="<?= $jenis; ?>">
                    </div>
                    <div class="form-group col-md-10 mb-3" hidden>
                        <input class="form-control" type="text" id="harga" name="harga" value="<?= number_format($total); ?>">
                    </div>
                    <label>NIK</label>
                    <div class="form-group col-md-10 mb-3">
                        <input class="form-control" type="text" placeholder="Masukkan nik sesuai KTP" id="nik" name="nik" required>
                    </div>
                    <label>E-mail</label>
                    <div class="form-group col-md-10 mb-3">
                        <input class="form-control" type="text" placeholder="Tambahkan E-mail Anda" id="email" name="email" <?= set_value('email'); ?> required>
                    </div>
                    <label>Phone Number</label>
                    <div class="form-group col-md-10 mb-3">
                        <input class="form-control" type="text" placeholder="+62" id="nomor" name="nomor" <?= set_value('nomor'); ?> required>
                    </div>
                    <div class="form-group col-md-2" hidden>
                        <input type="number" min="1" class="form-control" name="durasi" id="durasi" value="<?= $durasi; ?>" required>
                    </div>
                    <div class="form-group col-md-10 mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Check In</label>
                                <input class="form-control" type="date" id="masuk" name="masuk" <?= set_value('masuk'); ?> required>
                            </div>
                            <?php if ($parameter == 'kamar') : ?>
                                <div class="col-md-6">
                                    <label>Check Out</label>
                                    <input class="form-control" type="date" id="keluar" name="keluar" <?= set_value('keluar'); ?> required>
                                </div>
                            <?php else : ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class=" form-group">
                        <input type="checkbox" required> Saya telah memeriksa data yang dimasukkan adalah benar
                    </div>
                    <br>
                    <div class="tombol">
                        <button type="reset" class="btn btn-danger" value="batal">Batal</button>
                        <!-- <button type="submit" class="btn btn-primary" value="save">Lanjut</button> -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Lanjutkan
                        </button>
                        <!-- modal -->
                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Pesanan telah berhasil diajukan, segera bayar sebelum <b>1 X 24 Jam</b> </p>
                                        <p>Total Tagihan : <b class="text-warning">Rp. <?= number_format($total); ?>,00</b></p>
                                        <p>Pembayaran dapat dilakukan melalui</p>
                                        <div class="row mt-5">
                                            <div class="col-md-6 mb-3">
                                                <img src="<?= base_url('assets/img/bca.png'); ?>" width="150px" alt="">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <p>Bank Central Asia</p>
                                                <p>1234 5678 / a.n Sofam Gari</p>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <img src="<?= base_url('assets/img/mandiri.png'); ?>" width="150px" alt="">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <p>Bank Mandiri</p>
                                                <p>1234 5678 / a.n Sofam Gari</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="<?= base_url('assets/img/jenius.png'); ?>" width="150px" alt="">
                                            </div>
                                            <div class="col-md-6">
                                                <p>Jenius</p>
                                                <p>1234 5678 / a.n Sofam Gari</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Konfirmasi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- akhir modal -->
                    </div>
                </form>

            <?php else : ?>

            <?php endif ?>
        </div>
        <div class="col-md-6">
            <?php if (isset($_POST['konfirmasi'])) : ?>
                <h3>Payment</h3>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <?php if ($parameter == 'ballroom') : ?>
                            <p><?= $jenis; ?> (<small><?= $durasi; ?> x 3 hours</small>)</p>
                        <?php elseif ($parameter == 'kamar') : ?>
                            <p><?= $jenis; ?> (<small><?= $durasi; ?> malam</small>)</p>
                        <?php elseif ($parameter == 'fasilitas') : ?>
                            <p><?= $jenis; ?> (<small><?= $durasi; ?> X 1 hours</small>)</p>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6" align="right">

                        <p>Rp. <?= number_format($subtotal); ?>,00</p>
                    </div>
                    <div class="col-md-6">
                        <p>Tax (10%)</p>
                    </div>
                    <div class="col-md-6" align="right">

                        <p>Rp. <?= number_format($pajak); ?>,00</p>
                    </div>
                    <hr class="col-md-12">
                    <div class="col-md-6">
                        <p>Total</p>
                    </div>
                    <div class="col-md-6" align="right">

                        <p>Rp. <?= number_format($total); ?>,00</p>
                    </div>
                </div>
            <?php else : ?>

            <?php endif ?>
            <h5>Metode Pembayaran yang Tersedia</h5>
            <form action="" method="post">

                <div class="row mt-5">
                    <div class="col-md-6 mb-3">
                        <img src="<?= base_url('assets/img/bca.png'); ?>" width="150px" alt="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <p>Bank Central Asia</p>
                        <p>1234 5678 / a.n Sofam Gari</p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="<?= base_url('assets/img/mandiri.png'); ?>" width="150px" alt="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <p>Bank Mandiri</p>
                        <p>1234 5678 / a.n Sofam Gari</p>
                    </div>
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/img/jenius.png'); ?>" width="150px" alt="">
                    </div>
                    <div class="col-md-6">
                        <p>Jenius</p>
                        <p>1234 5678 / a.n Sofam Gari</p>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>