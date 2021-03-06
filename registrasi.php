<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Aplikasi Pendaftaran Siswa Secara Online Daari SMA Negeri 1 Indramayu ">
  <meta name="author" content="e-development Sultan Bisri">

  <script language='JavaScript'>
        var tulisan=" Selamat Datang Di Halaman Registrasi Siswa Baru ";
        var kecepatan = 500;
        var fress = null;
        function jalan() { 
          document.title = tulisan;
          tulisan = tulisan.substring(1,tulisan.length) + tulisan.charAt(0);
          fress = setTimeout("jalan()",kecepatan);
        }jalan();
    </script>


  <!---Gambar Tittle !--->
  <link rel="icon" type="text/png" href="assets/img/logo.png">

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

  <style type="text/css">
    .img-logo{
      max-height: 160px;
      margin-bottom: 20px;
    }
    .bg_primary{
      background-color: #020031;
    }
    .btn-primary{
      background-color:  #0012d4;
    }
  </style>

</head>


<body class="bg_primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-md-12">
                <div class="p-5" align="center">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"> Registrasi Siswa Baru </h1>                    
                  </div>
                  <form class="user" action="registrasi_control.php" method="POST">
                    <div class="form-group">
                      <label for="nama" style="margin-right: 75%;"> Nama Lengkap </label>
                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Lengkap Anda" autocomplete="off">
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="tempat_lahir" style="margin-right: 54%;"> Tempat Lahir </label>
                        <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" autocomplete="off">
                      </div>  
                      <div class="col-md-6">
                        <label for="tanggal_lahir" style="margin-right: 52%;"> Tanggal Lahir </label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir" autocomplete="off">
                      </div>  
                    </div>

                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="jenis_kelamin" style="margin-right: 52%;"> Jenis Kelamin </label>
                        <div class="form-check">
                            <input type="radio" name="jenis_kelamin" value="L" class="form-check-input" id="laki">
                            <label for="laki" class="form-check-label"  style="margin-right: 65%;"> Laki-laki </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="jenis_kelamin" value="P" class="form-check-input" id="perempuan">
                            <label for="perempuan" class="form-check-label"  style="margin-right: 53%;"> Perempuan </label>
                        </div>
                        
                      </div>  
                      <div class="col-md-6">
                        <label for="agama" style="margin-right: 80%;"> Agama </label>
                        <select name="agama" id="agama" class="form-control">
                            <option value=""> --- Pilih Agama ---- </option>
                            <option value="islam"> Islam </option>
                            <option value="kristen"> Kristen </option>
                            <option value="katolik"> Katolik </option>
                            <option value="hindu"> Hindu </option>
                            <option value="budha"> Budha </option>
                            <option value="konghucu"> Konghucu </option>
                        </select>
                      </div>  
                    </div>
                    <div class="form-group">
                      <label for="alamat" style="margin-right: 73%;"> Alamat Lengkap </label>
                      <textarea name="alamat" id="alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="email" style="margin-right: 41%;"> Email Aktif Anda </label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Aktif Anda" autocomplete="off">
                      </div>  
                      <div class="col-md-6">
                        <label for="telepon" style="margin-right: 80%;"> Telepon </label>
                        <input type="text" name="telepon" class="form-control" id="telepon" placeholder="Telepon" autocomplete="off">
                      </div>  
                    </div>
                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="password" style="margin-right: 65%;"> Password </label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" autocomplete="off">
                      </div>  
                      <div class="col-md-6">
                        <label for="ulangi_password" style="margin-right: 40%;"> Ulangi Password </label>
                        <input type="password" name="ulangi_password" class="form-control" id="ulangi_password" placeholder="Ulangi Password" autocomplete="off">
                      </div>  
                    </div>
                    
                    <button name="btn_registrasi" value="Simpan" class="btn btn-primary btn-user btn-block">
                      Registrasi
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="login.php"> Sudah Punya Akun ? Login </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>
