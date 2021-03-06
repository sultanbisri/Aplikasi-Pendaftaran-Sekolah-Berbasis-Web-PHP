<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Aplikasi Pendaftaran Siswa Secara Online Daari SMA Negeri 1 Indramayu ">
  <meta name="author" content="e-development Sultan Bisri">

  <script language='JavaScript'>
        var tulisan=" Selamat Datang Di Halaman Login Registrasi Siswa Baru ";
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
      background-color: #0012d4;
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
                    <img src="assets/img/logo.png" alt="Logo Aplikasi" class="img-logo">
                    <h1 class="h4 text-gray-900 mb-4">Login Aplikasi Pendaftaran Siswa</h1>
                     <h1 class="h4 text-gray-900" style="height: 50px;"><font face="sans-serif"><b>SMA Negeri 2 Indramayu</b></font></h1>

                    <?php 

                      session_start();

                      if(isset($_SESSION['pesan_registrasi'])) { ?>

                      <div class="alert alert-success"> 
                        <?php echo $_SESSION['pesan_registrasi']; ?>
                      </div>

                      <?php } 

                      if(isset($_SESSION['login_error'])) { ?>

                        <div class="alert alert-danger"> 
                          <?php echo $_SESSION['login_error']; ?>
                        </div>

                      <?php }

                    session_destroy();

                    ?>

                  </div>
                  <form class="user" action="login_control.php " method="POST" >
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="email" placeholder="Masukan Email" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Masukan Password" autocomplete="off">
                    </div>
                    <button type="submit" name="btn_login" value="login" href="" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="registrasi.php">Registrasi Siswa Baru | </a>
                     <a class="small" href="index.php">Kembali Ke Halaman Beranda </a>
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
