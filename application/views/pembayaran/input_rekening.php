<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Input Rekening</h6>
            </div>
            <!-- alert berhasil tambah pelanggan -->
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="row mt-3">
                    <div class="col md-4">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">Data rekening <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
                                <th>Tahun</th>
                                <th>Bulan</th>
                                <th>Nama Pelanggan</th>
                                <th>Rek Awal</th>
                                <th>Rek Akhir</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($pelanggan as $pel) :
                                // foreach ($rek_awal as $raw) :
                            ?>

                                <tr align="center">
                                    <form action="" method="post">
                                        <td><input type="number" name="tahun" class="form-control" value="<?= $tahun; ?>"></td>
                                        <td>
                                            <input type="text" name="bulan" class="form-control" value="<?= $bulan; ?>">
                                        </td>
                                        <td><?= $pel['nama']; ?><input type="hidden" name="id_pel" value="<?= $pel['id_pel']; ?>"></td>
                                        <td><input type="number" name="rek_awal" class="form-control" value="<?= $pel['rek_akhir']; ?>" required></td>
                                        <td>
                                            <input type="number" name="rek_akhir" class="form-control" required>
                                        </td>
                                        <td>
                                            <input type="submit" name="rekening" value="Input" class="btn btn-primary btn-user btn-block">
                                        </td>
                                    </form>
                                </tr>
                            <?php
                            // endforeach;
                            endforeach;
                            ?>
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