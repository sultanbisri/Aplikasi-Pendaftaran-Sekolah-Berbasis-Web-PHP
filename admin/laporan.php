<?php include('../config/auto_load.php'); ?>

<?php include('laporan_control.php'); ?>

<?php include('../template/header.php'); ?>

    <!-- Begin Page Content -->
      <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Laporan Pendaftaran</h1>


                <div class="row">
                  <div class="col-md-12">
                    <table class="table table-bordered table-hover">

                      <a href="dashboard.php" class="btn btn-warning mb-3">Kembali Ke Dashboard</a>

                        <tr>
                          <td align="center">No</td>
                          <td align="center">Nama</td>
                          <td align="center">Alamat</td>
                          <td align="center">Nilai UAS</td>
                          <td align="center">Nilai UN</td>
                          <td align="center">Nilai US</td>
                          <td align="center">Nilai Rata-rata</td>
                          <td align="center">Status</td>
                        </tr>

                        <?php
                           $no = 1;
                           
                           while($p = mysqli_fetch_array($all_pendaftar)) { ?>
                        
                            <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $p['nama'] ?></td>
                              <td><?= $p['alamat'] ?></td>
                              <td><?= $p['nilai_uas_5'] ?></td>
                              <td><?= $p['nilai_un'] ?></td>
                              <td><?= $p['nilai_us'] ?></td>
                              <td>
                                <!--- number format(value, 2) -->
                                <?= number_format(($p['nilai_uas_5'] + $p['nilai_un'] + $p['nilai_us']) / 3, 2); ?>
                              </td>
                              <?php 
                                if($p['status'] == 0) {
                                  $status = '<span class="badge badge-info">BARU</span>';

                                } else if ($p['status'] == 1 ){
                                  $status = '<span class="badge badge-success">LOLOS</span>';

                                } else if ($p['status'] == 2 ){
                                  $status = '<span class="badge badge-danger">TIDAK LOLOS</span>';

                                }

                              ?> 
                              <td><?= $status; ?></td>
                            </tr>
                                <?php
                                }

                                if(mysqli_num_rows($all_pendaftar) == 0) {
                                    echo "<tr><td colspan='8' align='center'><b>Belum Ada Pendaftar Baru</b></td></tr> ";
                                }
                                ?>
                        </table>
                        </div>
                    </div>
                </div>
            <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

<?php include('../template/footer.php'); ?>