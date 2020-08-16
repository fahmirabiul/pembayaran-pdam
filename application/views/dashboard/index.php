<?php
if ($allTrs >= 1) {
    $percentageTrs = number_format(($selTrs / $allTrs * 100), 2);

    // hitung pendapatan bulan ini
    $pendapatan = 0;
    foreach ($income as $inc) :
        $totPendapatan = ($inc['harga'] + 0) * ($inc['rek_akhir'] - $inc['rek_awal']);
        $pendapatan = $pendapatan + $totPendapatan;
    endforeach;

    $rpPendapatan = "Rp" . number_format($pendapatan, 0, ',', '.');

    // hitung hutang bulan ini
    $hutang = 0;
    foreach ($debt as $deb) :
        $totHutang = ($deb['harga'] + 0) * ($deb['rek_akhir'] - $deb['rek_awal']);
        $hutang = $hutang + $totHutang;
    endforeach;

    $rpHutang = "Rp" . number_format($hutang, 0, ',', '.');
} else {
    $percentageTrs = 0;
    $rpPendapatan = 'Rp' . 0;
    $rpHutang = 'Rp' . 0;
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <?php
    $bulan_now = date('M');
    $kurang_bulan = mktime(0, 0, 0, date('m') - 1, date('d'), date('Y'));
    $bulan_kemarin = date('m', $kurang_bulan);

    if ($bulan_now == 'Jan') {
        $tahun1 = date('Y');
        $tahun = date('Y', strtotime('-1 year', strtotime($tahun1)));
    } else {
        $tahun = date('Y');
    }

    $month = [
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    ];
    $bulan = $month[$bulan_kemarin];
    ?>
    <!-- Content Row -->
    <!-- Progress -->
    <div class="row mt-4 justify-content-center">
        <div class="col-xl-4 col-md-8 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-s font-weight-bold text-info text-uppercase mb-1">Progres Pembayaran (<?= $bulan . '/' . $tahun; ?>)</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h4 mb-0 mr-3 font-weight-bold text-gray-800"><?= $percentageTrs; ?>%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $percentageTrs; ?>%" aria-valuenow="<?= $selTrs; ?>" aria-valuemin="0" aria-valuemax="<?= $allTrs; ?>"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pembayaran -->
    <div class="row mt-4 justify-content-center">
        <div class="col-xl-4 col-md-8 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">Pendapatan Masuk (<?= $bulan . '/' . $tahun; ?>)</div>
                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?= $rpPendapatan; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hutang -->
    <div class="row mt-4 justify-content-center">
        <div class="col-xl-4 col-md-8 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-s font-weight-bold text-success text-uppercase mb-1">Pembayaran Tertunda (<?= $bulan . '/' . $tahun; ?>)</div>
                            <div class="h4 mb-0 font-weight-bold text-gray-800"><?= $rpHutang; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->