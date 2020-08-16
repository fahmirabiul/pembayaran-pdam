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
                                    <h1 class="h4 text-gray-900 mb-4">Form Ubah Data Biaya</h1>
                                </div>
                                <form class="user" action="" method="post">
                                    <div class="form-group">
                                        <input type="hidden" name="id_biaya" value="<?= $biaya['id_biaya']; ?>" class="form-control form-control-user" id="id_biaya" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis">Jenis :</label>
                                        <input type="text" name="jenis" value="<?= $biaya['jenis']; ?>" class="form-control form-control-user" id="jenis" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga :</label>
                                        <input type="text" name="harga" value="<?= $biaya['harga']; ?>" class="form-control form-control-user" id="harga">
                                    </div>
                                    <hr>
                                    <input type="submit" name="ubah" value="Ubah" class="btn btn-primary btn-user btn-block">
                                    </input>
                                    <a href="<?= base_url('informasi/biaya'); ?>" class="btn btn-primary btn-user btn-block mt-1">Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>