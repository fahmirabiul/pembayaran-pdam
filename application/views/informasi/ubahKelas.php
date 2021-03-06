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
                                    <h1 class="h4 text-gray-900 mb-4">Form Ubah Data Kelas</h1>
                                </div>
                                <form class="user" action="" method="post">
                                    <div class="form-group">
                                        <input type="hidden" name="id_kelas" value="<?= $kelas['id_kelas']; ?>" class="form-control form-control-user" id="id_kelas" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_kelas">Nama Kelas :</label>
                                        <input type="text" name="nama_kelas" value="<?= $kelas['nama_kelas']; ?>" class="form-control form-control-user" id="nama_kelas" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="administrasi">Administrasi :</label>
                                        <input type="text" name="administrasi" value="<?= $kelas['administrasi']; ?>" class="form-control form-control-user" id="administrasi">
                                    </div>
                                    <hr>
                                    <input type="submit" name="ubah" value="Ubah" class="btn btn-primary btn-user btn-block">
                                    <a href="<?= base_url('informasi/kelas'); ?>" class="btn btn-primary btn-user btn-block mt-1">Kembali</a>
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