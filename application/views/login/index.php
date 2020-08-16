<!DOCTYPE html>
<html lang="en">

<head>

    <title>PDAM Mekarsari - Admin</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/sba/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/sba/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <!-- datatables -->
    <link href="<?= base_url('assets/sba/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<body id="page-top">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block">
                                <img src="<?= base_url('assets/img/pdam_logo.png'); ?>" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang !</h1>
                                    </div>
                                    <!-- Flash Data Gagal Login -->
                                    <?php if ($this->session->flashdata('flash')) : ?>
                                        <p class="text-danger"><?= $this->session->flashdata('flash'); ?></p>
                                    <?php endif; ?>
                                    <!-- End of Flash Data -->
                                    <form action="<?= base_url('login/ceklogin'); ?>" method="post" class="user">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Username .." autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password ..">
                                        </div>
                                        <hr>
                                        <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Login">
                                        </input>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/sba/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/sba/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/sba/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/sba/js/sb-admin-2.min.js'); ?>"></script>

    <!-- Data Tables -->
    <script src="<?= base_url('assets/sba/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/sba/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/sba/vendor/chart.js/Chart.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/sba/js/demo/chart-area-demo.js'); ?>"></script>
    <script src="<?= base_url('assets/sba/js/demo/chart-pie-demo.js'); ?>"></script>

</body>

</html>