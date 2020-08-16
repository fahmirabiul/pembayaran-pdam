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

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-tint"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PDAM Mekarsari</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('welcome'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-users"></i>
                    <span>Pelanggan</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Pelanggan :</h6>
                        <a class="collapse-item" href="<?= base_url('pelanggan'); ?>">Tabel Pelanggan</a>
                        <a class="collapse-item" href="<?= base_url('pelanggan/tambah'); ?>">Tambah Data</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-handshake"></i>
                    <span>Pembayaran</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Pembayaran :</h6>
                        <a class="collapse-item" href="<?= base_url('pembayaran/transaksi'); ?>">Transaksi</a>
                        <a class="collapse-item" href="<?= base_url('pembayaran/input'); ?>">Input Rekening</a>
                        <a class="collapse-item" href="<?= base_url('pembayaran/laporan'); ?>">Laporan</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-receipt"></i>
                    <span>Informasi</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Informasi :</h6>
                        <a class="collapse-item" href="<?= base_url('informasi/biaya'); ?>">Biaya</a>
                        <a class="collapse-item" href="<?= base_url('informasi/kelas'); ?>">Kelas</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-user-cog"></i>
                    <span>Admin</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu Admin :</h6>
                        <a class="collapse-item" href="<?= base_url('admin'); ?>">Detail/Ubah</a>
                        <a class="collapse-item" href="<?= base_url('login/logout'); ?>">Logout</a>
                    </div>
                </div>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">