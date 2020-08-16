       <!-- Main Content -->
       <div id="content">
           <!-- Begin Page Content -->
           <div class="container-fluid">

               <!-- DataTales Example -->
               <div class="card shadow mb-4">
                   <div class="card-header py-3">
                       <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
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
                           <table class="table table-fluid" id="PelangganTable" width="100%" cellspacing="0">
                               <thead>
                                   <tr align="center">
                                       <th>No.</th>
                                       <th>Nama</th>
                                       <th>Alamat</th>
                                       <th>No. Rekening</th>
                                       <th>Kelas</th>
                                       <th>Opsi</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php
                                    $number = 1;
                                    foreach ($pelanggan as $pel) :
                                    ?>

                                       <tr align="center">
                                           <td><?= $number; ?></td>
                                           <td><?= $pel['nama']; ?></td>
                                           <td>RT<?= $pel['rt']; ?>/RW<?= $pel['rw']; ?></td>
                                           <td><?= $pel['no_rek']; ?></td>
                                           <td><?= $pel['nama_kelas']; ?></td>
                                           <td>
                                               <a href="<?= base_url('pelanggan/detail/'); ?><?= $pel['id_pel']; ?>" class="btn btn-info btn-circle btn-sm">
                                                   <i class="fas fa-info-circle"></i>
                                               </a>
                                               <a href="<?= base_url('pelanggan/hapus/'); ?><?= $pel['id_pel']; ?>" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('hapus <?= $pel['nama']; ?>?');">
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
               $('#PelangganTable').DataTable({});
           });
       </script>