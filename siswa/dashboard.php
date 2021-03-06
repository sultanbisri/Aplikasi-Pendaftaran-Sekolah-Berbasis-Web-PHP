<?php include('../config/auto_load.php'); ?>

<?php include('dashboard_control.php'); ?>

<?php include('../template/header.php'); ?>


<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
            <div class="row">
              <div class="col-md-12"> 
                  
                <?php if(isset($_SESSION['pesan_sukses'] )) { ?>

                  <div class="alert alert-success">
                    <?=  $_SESSION['pesan_sukses']; ?>
                  </div>

                <?php } 
                  unset($_SESSION['pesan_sukses']);
                ?>

              </div>

              <div class="col-md-6">
              <div class="row">
                
                <?php if(!isset($status)) { ?>
                   <div class="col-md-12">
                    <!-- Illustrations -->
                      <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">MASUKKAN DATA NILAI</h6>
                  </div>
                  <div class="card-body">
                    <p class="text-danger">* Masukkan nilai anda untuk menyelesaikan proses pendaftaran! 
                    </p>
                    <form class="user" method="POST" action="<?= $base_url ?>/siswa/dashboard.php" >
                        <div class="form-group">
                          <label for="un"> Masukan Nilai Ujian Nasional</label>
                            <input type="number" name="un" class="form-control" id="un" placeholder=" Masukan Nilai Ujian Nasional" autocomplete="off">
                        </div>

                        <div class="form-group">
                          <label for="un"> Masukan Nilai Ujian Sekolah</label>
                              <input type="number" name="us" class="form-control" id="un" placeholder=" Masukan Nilai Ujian Sekolah" autocomplete="off">
                        </div>

                        <div class="form-group">
                          <label for="uas"> Masukan Nilai UAS Semester 5</label>
                            <input type="number" name="uas_5" class="form-control" id="uas" placeholder=" Masukan Nilai Ujian Nasional" autocomplete="off">
                        </div>

                        <hr>
                        <div class="text-right">
                          <button type="submit" name="btn_simpan" value="simpan_nilai" class="btn btn-primary">Simpan</button>

                          <a href="dashboard.php" class="btn btn-danger" mb-5>Kembali</a>
                        </div>
                    </form>     
                  </div>
                      </div>
                   </div>

                <?php }else if(isset($status) && $status == 0 ) { ?>

               <!-- Hasil Penilaian -->
                    <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">PENGUMUMAN HASIL SELEKSI</h6>
                    </div>
                    <div class="card-body">
                      <div class="card text-center">
                        <div class="card-body">
                          <h5 class="card-title mb-3 mt-3">PROSES PENILAIAN</h5>
                          <div class="col-auto">
                          <i class="fas fa-spinner text-warning" style="font-size: 90px;"></i>
                          </div>
                          <p class="card-text">
                              Terima Kasih telah melakukan pendaftaran di SMAN 2 Indramayu. Pengumuman
                              pada tanggal :
                          </p>
                          <span class="badge badge-danger" style="font-size: 18px;"> 10 April 2020</span>
                        </div>
                        <div class="card-footer">
                          <marquee style="margin-bottom: -5px;"> SMA NEGERI 2 INDRAMAYU - KABUPATEN INDRAMAYU </marquee> 
                        </div>
                      </div>
                    </div>
                  </div>
                    </div>

                <?php }else if(isset($status) && $status == 1 ) { ?>

               <div class="col-md-12">
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">PENGUMUMAN HASIL SELEKSI</h6>
                      </div>
                      <div class="card-body">
                        <div class="card text-center">
                          <div class="card-body">
                            <h5 class="card-title mb-3 mt-3">SELAMAT ANDA LOLOS!</h5>
                            <div class="col-auto">
                              <i class="fas fa-check-circle text-success" style="font-size: 90px;"></i>
                            </div>
                            <p class="card-text">
                              Selamat Anda Lolos Seleksi Di SMA NEGERI 2 INDRAMAYU. Lakukan Daftar Ulang Pada Tanggal :
                            </p>
                            <span class="badge badge-danger" style="font-size: 18px;"> 10 Mei 2020</span>
                          </div>
                          <div class="card-footer">
                            <marquee style="margin-bottom: -5px;"> SMA NEGERI 2 INDRAMAYU - KABUPATEN INDRAMAYU </marquee> 
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                <?php }else if(isset($status) && $status == 2 ) { ?>

                  <div class="col-md-12">
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">PENGUMUMAN HASIL SELEKSI</h6>
                      </div>
                      <div class="card-body">
                        <div class="card text-center">
                          <div class="card-body">
                            <h5 class="card-title mb-3 mt-3">ANDA TIDAK LOLOS!</h5>
                            <div class="col-auto">
                              <i class="fas fa-times text-danger" style="font-size: 90px;"></i>
                            </div>
                            <p class="card-text">
                              Anda Tidak Lolos. Terima Kasih Telah Mengikuti Seleksi Pendaftaran Siswa Baru Di SMA NEGERI 2 INDRAMAYU
                            </p>
                          </div>
                          <div class="card-footer">
                            <marquee style="margin-bottom: -5px;"> SMA NEGERI 2 INDRAMAYU - KABUPATEN INDRAMAYU </marquee> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php } ?>


                <div class="col-md-12">
                  <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Persyaratan Daftar Ulang</h6>
                </div>
                <div class="card-body">
                  <p>Siswa yang lolos seleksi wajib melakukan daftar ulang dengan membawa berkas sebagai berikut: </p>
                  <!-- dari bootstrap -->
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      1. FC AKTA
                      <span class="badge badge-info badge-pill">1 Lembar</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      2. FC Kartu Keluarga
                      <span class="badge badge-info badge-pill">1 Lembar</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      3. FC Nilai Ujian Nasional
                      <span class="badge badge-info badge-pill">2 Lembar</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      4. FC Nilai Ujian Sekolah
                      <span class="badge badge-info badge-pill">2 Lembar</span>
                    </li>
                  </ul>
                  <p class="text-danger mt-3">* Wajib melakukan Daftar Ulang pada tanggal: 10 Mei 2020</p>
                </div>
                  </div>
                </div>


              </div>
              </div>
            
            <div class="col-md-6">
              <div class="row">
                
                <div class="col-md-12">
              
              <!-- Illustrations -->
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DATA DIRI</h6>
                  </div>
                  <div class="card-body">
                    <div class="text-center">
                      
                      <?php 
                      if(isset($data_pendaftar['foto']) &&  $data_pendaftar['foto'] != '') {
                        $foto = '../uploads/'. $data_pendaftar['foto'];

                      }else{
                        $foto = '../assets/img/user1.jpg';
                      }

                      ?>

                      <img src="<?= $foto ?>" alt="fotoprofil" class="img-fluid rounded-circle" style="width: 200px; height: 200px;">
                    </div>
                    <div class="text-right">
                      <a href="editprofil.php" class="btn btn-warning btn-sm">Edit Profil</a>
                    </div>
                    <h5 class="text-center card-title mt-3">
                      <?= $data_pendaftar['nama']; ?>
                    </h5>

                    <ul class="list-group">
                      <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Tempat, Tanggal Lahir</h6>
                        <small>
                          <?= $data_pendaftar['tmpt_lahir']; ?>, <?= date("d-m-Y", strtotime($data_pendaftar['tgl_lahir'] ));  ?>
                        </small>
                      </li>
                      <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Jenis Kelamin</h6>

                        <?php 

                          if($data_pendaftar['jenis_kelamin'] == 'L') {
                            $kelamin = 'Laki-laki';

                          }else if($data_pendaftar['jenis_kelamin'] == 'P'){
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
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
    </div>
<!-- End of Main Content -->

<?php include('../template/footer.php'); ?>