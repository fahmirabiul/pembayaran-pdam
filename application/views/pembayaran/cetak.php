<!DOCTYPE html>
<html>

<head>
    <title>CETAK PRINT DATA DARI DATABASE DENGAN PHP - WWW.MALASNGODING.COM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-3">
        <h5>STRUK PEMBAYARAN</h5>
        <b>PDAM MEKARSARI</b>

        <div class="row">
            <div class="col-md-2">Tanggal Pembayaran</div>
            <div class="col-md-3"><?= $struk['tgl_pembayaran']; ?></div>
        </div>
        <div class="row">
            <div class="col-md-2">Nama Pel</div>
            <div class="col-md-3"><?= $struk['nama']; ?></div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2">Bulan</div>
            <div class="col-md-3"><?= $struk['bulan']; ?></div>
        </div>
        <div class="row">
            <div class="col-md-2">Tahun</div>
            <div class="col-md-3"><?= $struk['tahun']; ?></div>
        </div>
        <div class="row">
            <div class="col-md-2">Pemakaian</div>
            <div class="col-md-3"><?= $struk['rek_akhir'] - $struk['rek_awal']; ?> m3</div>
        </div>

    </div>
    <script>
        // window.print();
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>