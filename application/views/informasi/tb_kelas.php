<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
            </div>
            <!--  Button Tambah -->
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mt-2">
                    <a href="<?= base_url('informasi/tambahKelas'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a>
                </div>
            </div>
            <!-- alert berhasil tambah pelanggan -->
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="row mt-3">
                    <div class="col md-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">Data pelanggan <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- end of alert -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="KelasTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>No.</th>
                                <th>Kelas</th>
                                <th>Harga</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $number = 1;
                            foreach ($kelas as $kel) :
                            ?>

                                <tr align="center">
                                    <td><?= $number; ?></td>
                                    <td><?= $kel['nama_kelas']; ?></td>
                                    <td><?= $kel['administrasi']; ?></td>
                                    <td>
                                        <a href="<?= base_url('informasi/ubahKelas/'); ?><?= $kel['id_kelas']; ?>" class="btn btn-info btn-circle btn-sm">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                        <a href="<?= base_url('informasi/hapusKelas/'); ?><?= $kel['id_kelas']; ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('yakin untuk menghapus?');">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php $number++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script>
    $(document).ready(function() {
        $('#KelasTable').DataTable({});
    });
</script>