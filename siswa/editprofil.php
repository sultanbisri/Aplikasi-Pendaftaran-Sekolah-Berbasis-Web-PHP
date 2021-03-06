<?php include('../config/auto_load.php'); ?>

<?php include('editprofil_control.php'); ?>

<?php include('../template/header.php'); ?>

<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">EDIT PROFIL</h1>
         
        <form class="user" action="<?= $base_url ?>/siswa/editprofil.php " method="POST" enctype="multipart/form-data"> 
          <div class="row">
            <div class="col-md-8">
                    <div class="form-group">
                      <label for="nama" style="margin-right: 75%;"> Nama Lengkap </label>
                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Lengkap Anda" autocomplete="off" value="<?= $data_pendaftar['nama'];  ?> ">
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="tempat_lahir" style="margin-right: 54%;"> Tempat Lahir </label>
                        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" autocomplete="off" value="<?= $data_pendaftar['tmpt_lahir'];  ?> ">
                      </div>  
                      <div class="col-md-6">
                        <label for="tanggal_lahir" style="margin-right: 52%;"> Tanggal Lahir </label>
                        <input type="text" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir" autocomplete="off" value="<?= date("d-m-Y", strtotime($data_pendaftar['tgl_lahir'])); ?> ">
                      </div>  
                    </div>

                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="jenis_kelamin" style="margin-right: 52%;"> Jenis Kelamin </label>

                        <?php 
                          $laki = "";
                          $perempuan = "";

                          if($data_pendaftar['jenis_kelamin'] == "L" ) {
                            $laki = "checked";
                          }else{
                            $perempuan = "checked";
                          }

                        ?>

                        <div class="form-check">
                            <input type="radio" name="jenis_kelamin" value="L" class="form-check-input" id="laki" <?= $laki; ?>>
                            <label for="laki" class="form-check-label" style="margin-right: 65%;"> Laki-laki </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jenis_kelamin" value="P" class="form-check-input" id="perempuan" <?= $perempuan;  ?>>
                            <label for="perempuan" class="form-check-label" style="margin-right: 53%;"> Perempuan </label>
                        </div>
                        
                      </div>  
                      <div class="col-md-6">
                        <label for="agama" style="margin-right: 80%;"> Agama </label>
                        <select name="agama" id="agama" class="form-control">
                            <option value=""> --- Pilih Agama ---- </option>
                            <option value="islam" <?php if($data_pendaftar['agama'] == 'islam') {
                              echo "selected"; } ?>> Islam </option>
                            <option value="kristen" <?php if($data_pendaftar['agama'] == 'kristen') {
                              echo "selected"; } ?>> Kristen </option>
                            <option value="katolik" <?php if($data_pendaftar['agama'] == 'katolik') {
                              echo "selected"; } ?>> Katolik </option>
                            <option value="hindu" <?php if($data_pendaftar['agama'] == 'hindu') {
                              echo "selected"; } ?>> Hindu </option>
                            <option value="budha" <?php if($data_pendaftar['agama'] == 'budha') {
                              echo "selected"; } ?>> Budha </option>
                            <option value="konghucu" <?php if($data_pendaftar['agama'] == 'konghucu') {
                              echo "selected"; } ?>> Konghucu </option>
                        </select>
                      </div>  
                    </div>
                    <div class="form-group">
                      <label for="alamat" style="margin-right: 73%;"> Alamat Lengkap </label>
                      <textarea name="alamat" id="alamat" class="form-control"><?= $data_pendaftar['alamat'];  ?></textarea>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="email" style="margin-right: 41%;"> Email Aktif Anda </label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Aktif Anda" autocomplete="off" value="<?= $data_pendaftar['email']; ?>">
                      </div>  
                      <div class="col-md-6">
                        <label for="telepon" style="margin-right: 80%;"> Telepon </label>
                        <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Telepon" autocomplete="off" value="<?= $data_pendaftar['telepon']; ?>">
                      </div>  
                    </div>
                    <!-- <div class="form-group row">
                      <div class="col-md-6">
                        <label for="password" style="margin-right: 65%;"> Password </label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" autocomplete="off">
                      </div>  
                      <div class="col-md-6">
                        <label for="ulangi_password" style="margin-right: 40%;"> Ulangi Password </label>
                        <input type="password" name="ulangi_password" class="form-control" id="ulangi_password" placeholder="Ulangi Password" autocomplete="off">
                      </div>  
                    </div> -->

                    <hr>
                    <div class="text-left">
                     
                    </div>
           
            </div>

            <div class="col-md-4">
              <?php 
                if(isset($data_pendaftar['foto']) && $data_pendaftar['foto'] != '') {
                  $foto = '../uploads/'. $data_pendaftar['foto']; 

                }else{
                  $foto = '../assets/img/user1.jpg';
                }

              ?>

              <img src="<?= $foto; ?>" alt="foto profil" class="img-fluid" style="height: 400px;" >

              <input type="file" name="gambar" class="form-control" mt-2>
            </div>

            <div class="col-md-12">
                <button type="submit" value="simpan_profil" class="btn btn-primary" name="btn_simpan" mb-5 >Ubah</button>
                <a href="dashboard.php" class="btn btn-danger" mb-5>Kembali</a>
            </div>
          </div>

          </div>
        </form>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      
<?php include('../template/footer.php'); ?>