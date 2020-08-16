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
                                    <h1 class="h4 text-gray-900 mb-4">Form Ubah Data Admin</h1>
                                </div>
                                <form class="user" action="" method="post">
                                    <input type="hidden" name="id_admin" id="id_admin" value="<?= $admin['id_admin']; ?>">
                                    <div class="form-group">
                                        <label for="username">Username :</label>
                                        <input type="text" name="username" class="form-control form-control-user" id="username" value="<?= $admin['username']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password :</label>
                                        <input type="text" name="password" class="form-control form-control-user" id="password" value="<?= $admin['password']; ?>">
                                    </div>
                                    <hr>
                                    <input type="submit" name="ubah" value="Ubah" class="btn btn-primary btn-user btn-block">
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