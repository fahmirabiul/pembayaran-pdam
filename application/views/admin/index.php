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
                                    <h1 class="h4 text-gray-900 mb-4">Admin PDAM Mekarsari</h1>

                                    <!-- Flash Data Berhasil Diubah -->
                                    <?php if ($this->session->flashdata('flash')) : ?>
                                        <div class="row mt-3">
                                            <div class="col md-4">
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">Data admin <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
                                    </div>
                                    <?php foreach ($admin as $adm) : ?>
                                        <div class="card-body">
                                            Username : <?= $adm['username']; ?><br>
                                            Password : <?= $adm['password']; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <hr>
                                <a href="<?= base_url('admin/ubah/'); ?><?= $adm['id_admin']; ?>" class="btn btn-primary btn-user btn-block">Ubah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>