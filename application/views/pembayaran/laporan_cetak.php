<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Cetak Laporan Pembayaran</title>
</head>

<body>

    <div class="container" id="tabelTrs">
        <div class="row mt-3">
            <div class="col-md-12 mt-3">
                <h3>Laporan Pembayaran <?= $_POST['bulan']; ?> <?= $_POST['tahun']; ?> (Telah Dibayar)</h3>
                <br>

                <table class="table" id="tableTransaksi">
                    <thead>
                        <tr align="center">
                            <th>No.</th>
                            <th>Nama Pelanggan</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Rekening Awal</th>
                            <th>Rekening Akhir</th>
                            <th>Biaya</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 0;
                        for ($i = 0; $i <= 20; $i++) {
                        ?>
                            <?php foreach ($transaksi as $tra) : ?>
                                <tr align="center">
                                    <th><?= ++$no; ?></th>
                                    <td><?= $tra['nama']; ?></td>
                                    <td><?= $tra['tgl_pembayaran']; ?></td>
                                    <td><?= $tra['rek_awal']; ?> m2</td>
                                    <td><?= $tra['rek_akhir']; ?> m2</td>
                                    <?php

                                    if ($tra['id_biaya'] = 1) {
                                        $harga = 2200;
                                    } elseif ($tra['id_biaya'] = 2) {
                                        $harga = 3200;
                                    } elseif ($tra['id_biaya'] = 3) {
                                        $harga = 4200;
                                    } elseif ($tra['id_biaya'] = 4) {
                                        $harga = 5200;
                                    } elseif ($tra['id_biaya'] = 5) {
                                        $harga = 6500;
                                    }

                                    $totalHarga = $harga * ($tra['rek_akhir'] - $tra['rek_awal']);

                                    $rupiah = number_format($totalHarga, 0, ',', '.');

                                    ?>
                                    <td>Rp<?= $rupiah; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php }; ?>
                    </tbody>
                </table>

                <hr>

                <h3>Laporan Pembayaran <?= $_POST['bulan']; ?> <?= $_POST['tahun']; ?> (Belum Dibayar)</h3>
                <br>

                <table class="table" id="tableTransaksi">
                    <thead>
                        <tr align="center">
                            <th>No.</th>
                            <th>Nama Pelanggan</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Rekening Awal</th>
                            <th>Rekening Akhir</th>
                            <th>Biaya</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 0;
                        for ($i = 0; $i <= 20; $i++) {
                        ?>
                            <?php foreach ($transaksi2 as $tra2) : ?>
                                <tr align="center">
                                    <th><?= ++$no; ?></th>
                                    <td><?= $tra2['nama']; ?></td>
                                    <td>-</td>
                                    <td><?= $tra2['rek_awal']; ?> m2</td>
                                    <td><?= $tra2['rek_akhir']; ?> m2</td>
                                    <?php

                                    if ($tra2['id_biaya'] = 1) {
                                        $harga = 2200;
                                    } elseif ($tra2['id_biaya'] = 2) {
                                        $harga = 3200;
                                    } elseif ($tra2['id_biaya'] = 3) {
                                        $harga = 4200;
                                    } elseif ($tra2['id_biaya'] = 4) {
                                        $harga = 5200;
                                    } elseif ($tra2['id_biaya'] = 5) {
                                        $harga = 6500;
                                    }

                                    $totalHarga = $harga * ($tra2['rek_akhir'] - $tra2['rek_awal']);

                                    $rupiah = number_format($totalHarga, 0, ',', '.');

                                    ?>
                                    <td>Rp<?= $rupiah; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php }; ?>
                    </tbody>
                </table>

                <script>
                    window.print();
                </script>
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>