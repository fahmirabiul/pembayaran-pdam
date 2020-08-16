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
                                    <h1 class="h4 text-gray-900 mb-4">Form Detail/Ubah Data Pelanggan</h1>
                                </div>
                                <form class="user" action="" method="post">
                                    <div class="form-group">
                                        <input type="hidden" name="id_pel" value="<?= $pelanggan['id_pel']; ?>" class="form-control form-control-user" id="id_pel" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama :</label>
                                        <input type="text" name="nama" value="<?= $pelanggan['nama']; ?>" class="form-control form-control-user" id="nama" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat :</label>
                                        <input type="text" name="alamat" value="<?= $pelanggan['alamat']; ?>" class="form-control form-control-user" id="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="rt">RT :</label>
                                        <input type="number" name="rt" value="<?= $pelanggan['rt']; ?>" class="form-control form-control-user" id="rt" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="rw">RW :</label>
                                        <input type="number" name="rw" value="<?= $pelanggan['rw']; ?>" class="form-control form-control-user" id="rw" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_rek">Nomor Rekening :</label>
                                        <input type="number" name="no_rek" value="<?= $pelanggan['no_rek']; ?>" class="form-control form-control-user" id="no_rek" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kelas">Kelas :</label>
                                        <input type="text" name="nama_kelas" value="<?= $pelanggan['nama_kelas']; ?>" class="form-control form-control-user" id="kelas" required>
                                    </div>
                                    <hr>
                                    <input type="submit" name="ubah" value="Ubah" class="btn btn-primary btn-user btn-block">
                                    </input>
                                    <a href="<?= base_url('pelanggan'); ?>" class="btn btn-primary btn-user btn-block mt-1">Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>