<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-6 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Pilih Laporan</h1>
                                </div>
                                <form action="<?= base_url('pembayaran/cetakLaporan'); ?>" method="post">
                                    <div class="form-group">
                                        <label for="tahun">Tahun :</label>
                                        <input type="number" name="tahun" class="form-control form-control-user" id="tahun" placeholder="Masukkan Tahun" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="bulan">Bulan :</label>
                                        <select name="bulan" class="form-control" required>
                                            <option value=""></option>
                                            <option value="Januari">Januari</option>
                                            <option value="Februari">Februari</option>
                                            <option value="Maret">Maret</option>
                                            <option value="April">April</option>
                                            <option value="Mei">Mei</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="Agustus">Agustus</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Desember">Desember</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <input type="submit" onclick="window.open('<?= base_url('pembayaran/laporan'); ?>')" name="pilih" value="Pilih" class="btn btn-primary btn-user btn-block">
                                    </input>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>