<?php
$uangmasuk = 0;
$kembalian = 0;

$total = ($transaksi['harga'] + 0) * ($transaksi['rek_akhir'] - $transaksi['rek_awal']);
$rptot = "Rp" . number_format($total, 0, ',', '.');
?>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-8 d-lg-block">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="p-5">
                        <!-- Hitung Kembalian -->
                        <input type="hidden" class="form-control" name="biaya" id="biaya" value="<?= $total; ?>">
                        <div class="form-group row">
                            <div class="col-sm-8 mb-3 mb-sm-0">
                                <button class="btn btn-primary btn-icon-split btn-sm" onclick="cekKembalian()">
                                    <span class="text">Hitung Kembalian</span>
                                </button>
                            </div>
                            <span>Date : <?= date('Y-m-d'); ?></span>
                        </div>

                        <form class="user" action="<?= base_url('pembayaran/transaksiDetail'); ?>" method="post" target="_blank">

                            <!-- hidden -->
                            <input type="hidden" name="id_transaksi" value="<?= $transaksi['id_transaksi']; ?>">
                            <input type="hidden" name="id_pel" value="<?= $transaksi['id_pel']; ?>">
                            <input type="hidden" name="id_biaya" value="<?= $transaksi['id_biaya']; ?>">


                            <!-- readonly -->
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="nama">Nama :</label>
                                    <input type="text" class="form-control form-control-user" name="nama" value="<?= $transaksi['nama']; ?>" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label for="total">Total Biaya :</label>
                                    <input type="total" class="form-control form-control-user" name="total" value="<?= $rptot; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="tahun">Tahun :</label>
                                    <input type="text" class="form-control form-control-user" name="tahun" value="<?= $transaksi['tahun']; ?>" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label for="rek_awal">Rekenening Awal (m3):</label>
                                    <input type="number" class="form-control form-control-user" name="rek_awal" value="<?= $transaksi['rek_awal']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="bulan">Bulan :</label>
                                    <input type="text" class="form-control form-control-user" name="bulan" value="<?= $transaksi['bulan']; ?>" readonly>
                                </div>
                                <div class="col-sm-6">
                                    <label for="rek_akhir">Rekening Akhir (m3):</label>
                                    <input type="number" class="form-control form-control-user" name="rek_akhir" value="<?= $transaksi['rek_akhir']; ?>" readonly>
                                </div>
                            </div>

                            <!-- Update -->
                            <!-- <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="tgl_pembayaran">Tanggal Pembayaran :</label>
                                    <input type="date" class="form-control" name="tgl_pembayaran" value="<?= date('Y-m-d'); ?>" readonly>
                                </div>
                                </div> -->

                            <!-- <a href="<?= base_url('pembayaran/cetakstruk'); ?>" target="_blank">Cetak Struk</a> -->

                            <a href="<?= base_url('pembayaran/cetakStruk/'); ?><?= $transaksi['id_pel']; ?>/<?= $transaksi['bulan']; ?>/<?= $transaksi['tahun']; ?>" class="btn btn-info btn-circle btn-sm" target="_blank">
                                <i class="fas fa-info-circle"></i>
                            </a>

                            <input type="submit" name="bayar" value="Bayar" class="btn btn-primary btn-user btn-block"></input>
                            <a href="<?= base_url('pembayaran/transaksi'); ?>" class="btn btn-primary btn-user btn-block mt-1">Kembali</a>

                        </form>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        function cekKembalian() {
            var total = document.getElementById("biaya").value;
            alert("Biaya Yang Harus Dibayar : " + total);
            var uangin = prompt('Uang Masuk :');
            var kembalian = uangin - total;
            alert("kembalian : " + kembalian);
        }
    </script>