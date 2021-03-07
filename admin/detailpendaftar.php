<?php include('../config/auto_load.php'); ?>

<?php include('detailpendaftar_control.php'); ?>

<?php include('../template/header.php'); ?>

       <div class="container-fluid">
          <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Detail Pendaftar </h1>
                
               <div class="row">
                <div class="col-md-6">
                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">DATA DIRI</h6>
                    </div>
                    <div class="card-body">
                      <div class="card-body">
                        <div class="col-auto mt-3 text-center">
                          <?php 
                            if(isset($data_pendaftar['foto'])) {
                              $foto = '../uploads/'. $data_pendaftar['foto'];

                            }else{
                              $foto = '../assets/img/user1.jpg';
                            }

                          ?>
                          <img src="<?= $foto ?>" alt="fotoprofil" class="img-fluid rounded-circle" style="width: 200px; height: 200px;">
                        </div>
                        <br>
                        <h5 class="card-title mb-3 text-center">
                          <?= $data_pendaftar['nama'];  ?>
                        </h5>
                        <ul class="list-group">
                          <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Tempat, Tanggal Lahir</h6>
                            <small class="text-muted">
                              <?= $data_pendaftar['tmpt_lahir']; ?>, <?= date("d-m-Y", strtotime($data_pendaftar['tgl_lahir'] ));  ?>
                            </small>
                          </li>
                          <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Jenis Kelamin</h6>
                             <?php 

                              if($data_pendaftar['jenis_kelamin'] == 'L') {
                                  $kelamin = 'Laki-laki';

                              }else if($data_pendaftar['jenis_kelamin'] == 'P') {
                                 $kelamin = 'Perempuan';
                              }

                              ?>

                              <small><?= $kelamin;  ?></small>
                          </li>
                          <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Agama</h6>
                               <small><?= $data_pendaftar['agama'];  ?></small>
                          </li>
                          <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Alamat</h6>
                            <small><?= $data_pendaftar['alamat'];  ?></small>
                          </li>
                          <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Email</h6>
                            <small><?= $data_pendaftar['email'];  ?></small>
                          </li>
                          <li class="list-group-item">
                            <h6 class="mb-0" style="color: black;">Telepon</h6>
                            <small><?= $data_pendaftar['telepon'];  ?></small>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">DATA NILAI PENDAFTAR</h6>
                </div>
                <div class="card-body">
                  <div class="card-body">

                    <?php 

                      if($data_nilai['status'] == 0) {

                        echo ' 
                        <div class="alert alert-warning">
                          Data pendaftar belum divalidasi
                        </div>';

                      } else if($data_nilai['status'] == 1) {

                        echo ' 
                        <div class="alert alert-info">
                          Data Pendaftar Dinyatakan <b>LOLOS</b>
                        </div>';

                      } else if($data_nilai['status'] == 2) {

                        echo ' 
                        <div class="alert alert-danger">
                          Data Pendaftar Dinyatakan <b>TIDAK LOLOS</b>
                        </div>';

                      } 



                    ?>
                    
                    <ul class="list-group">
                      <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Nilai Ujian Nasional</h6>
                        <small class="text-muted"><?= $data_nilai['nilai_un'];  ?></small>
                      </li>
                      <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Nilai Ujian Sekolah</h6>
                        <small class="text-muted"><?= $data_nilai['nilai_us'];  ?></small>
                      </li>
                       <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Nilai Rata-rata UAS Semester 5</h6>
                        <small class="text-muted"><?= $data_nilai['nilai_uas_5'];  ?></small>
                      </li>
                      <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Nilai Rata-rata</h6>
                        <small class="text-muted"><?= number_format(($data_nilai['nilai_uas_5'] + $data_nilai['nilai_un'] + $data_nilai['nilai_us']) / 3, 2);  ?></small>
                      </li>
                    </ul>
                    <button type="button" class="btn btn-primary mt-3 btn-block" data-toggle="modal" data-target="#modalvalidasi">
                        Validasi Data Pendaftar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalvalidasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <form action="<?= $base_url ?>/admin/detailpendaftar.php?id=<?= $id_pendaftar  ?>" method="POST" >
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Penilaian data pendaftar</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                  <label for="nilai">Beri Penilaian</label>
                                  <select name="nilai" id="nilai" class="form-control" required> 
                                    <option value="">--- Pilihan ---</option>
                                    <option value="1">LOLOS</option>
                                    <option value="2">TIDAK LOLOS</option>
                                  </select>
                            </div>
                            <div class="modal-footer">
                              <button name="simpan" value="simpan_nilai" class="btn btn-primary">Simpan</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                  </div>

                </div>
              <!-- /.container-fluid -->
              </div>

              <a href="pendaftaran.php" class="btn btn-primary">Kembali</a>

            </div>
        </div>
      </div>
    </div>
            <!-- End of Main Content -->
           

<?php include('../template/footer.php'); ?>