<?php include('../config/auto_load.php'); ?>

<?php include('nilai_control.php'); ?>

<?php include('../template/header.php'); ?>

<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Nilai</h1>
          <div class="row">
            <div class="col-md-6">
              
                    <!-- Illustrations -->
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">EDIT DATA NILAI</h6>
                      </div>
                      <div class="card-body">
                        <p class="text-danger">* Ubah jika ada kesalahan nilai! </p>
                        <form class="user" method="POST" action="<?= $base_url ?>/siswa/nilai.php">

                          <?php if(isset($data_nilai)) {
                            // echo "Edit Nilai";
                            $id_nilai = $data_nilai['id'];
                            echo "<input type='hidden' name='id_nilai' value='$id_nilai' >" ;

                          }else{
                            // echo "Insert nilai";

                          }

                          ?>

                            <div class="form-group">
                                <label for="un"> Masukan Nilai Ujian Nasional</label>
                                <input type="number" name="un" value="<?php if(isset($data_nilai['nilai_un'])) { echo $data_nilai['nilai_un']; } ?>" class="form-control" id="un" placeholder=" Masukan Nilai Ujian Nasional" autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="us"> Masukan Nilai Ujian Sekolah</label>
                                <input type="number" name="us" value="<?php if(isset($data_nilai['nilai_us'])) { echo $data_nilai['nilai_us']; } ?>" class="form-control" id="us" placeholder=" Masukan Nilai Ujian Sekolah" autocomplete="off">
                            </div>

                            <div class="form-group">
                              <label for="uas"> Masukan Nilai UAS Semester 5</label>
                                <input type="number" name="uas_5" value="<?php if(isset($data_nilai['nilai_uas_5'])) { echo $data_nilai['nilai_uas_5']; } ?>" class="form-control" id="uas" placeholder=" Masukan Nilai Ujian Nasional" autocomplete="off">
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
          </div>
         

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php include('../template/footer.php'); ?>
