<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Transaksi Pembayaran</h6>
            </div>
            <!-- alert berhasil tambah pelanggan -->
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="row mt-3">
                    <div class="col md-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">Data pembayaran transaksi <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
                    <table class="table table-bordered" id="TransaksiTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>No.</th>
                                <th>Tahun</th>
                                <th>Bulan</th>
                                <th>Nama Pelanggan</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $number = 1;
                            foreach ($transaksi as $tra) :
                            ?>

                                <tr align="center">
                                    <td><?= $number; ?></td>
                                    <td><?= $tra['tahun']; ?></td>
                                    <td><?= $tra['bulan']; ?></td>
                                    <td><?= $tra['nama']; ?></td>
                                    <?php
                                    $total = ($tra['harga'] + 0) * ($tra['rek_akhir'] - $tra['rek_awal']);
                                    $rptot = "Rp" . number_format($total, 0, ',', '.');
                                    ?>
                                    <td><?= $rptot; ?></td>
                                    <td><?= $tra['status_transaksi']; ?></td>
                                    <td>
                                        <a href="<?= base_url('pembayaran/transaksiDetail/'); ?><?= $tra['id_transaksi']; ?>" class="btn btn-info btn-circle btn-sm">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                        <a href="<?= base_url('pembayaran/hapus/'); ?><?= $tra['id_transaksi']; ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Yakin untuk menghapus?');">
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
        $('#TransaksiTable').DataTable({});
    });
</script>