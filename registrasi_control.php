<?php 

	include ('config/koneksi.php');

	session_start();

	if(isset($_POST['btn_registrasi'])){
		// print_r($_POST);

		$nama          	 = $_POST['nama'];
		$tempat_lahir    = $_POST['tempat_lahir'];
		$tanggal_lahir   = date("Y-m-d", strtotime($_POST['tanggal_lahir']));
		$jenis_kelamin   = $_POST['jenis_kelamin'];
		$alamat			 = $_POST['alamat'];
		$agama           = $_POST['agama'];
		$email           = $_POST['email'];
		$telepon         = $_POST['telepon'];
		$password        = md5($_POST['password']);
		$ulangi_password = md5($_POST['ulangi_password']);

		if($password != $ulangi_password){
			echo "
				<script>
					alert('Password Tidak Sama, Harap ulangi kembali');
					document.location.href = 'registrasi.php';
				</script>
			";
			die;
		}

		//insert table users
		$sql_users = "INSERT INTO users (nama, username, password, level) values ('$nama', '$email', '$password', 'siswa')";

		$result_users = mysqli_query($koneksi, $sql_users);

		if($result_users){
			$data_user = mysqli_query($koneksi, "SELECT LAST_INSERT_ID()" );

			while($u = mysqli_fetch_array($data_user)){
				$id_user = $u[0];
			}

			//insert table pendaftar
			$sql_pendaftar = "INSERT INTO pendaftar (nama, tmpt_lahir, tgl_lahir, jenis_kelamin, agama, alamat, email, telepon, users_id) values ('$nama','$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$alamat', '$email', '$telepon', '$id_user')";

			$result_pendaftar = mysqli_query($koneksi, $sql_pendaftar);

			if($result_pendaftar){

				$_SESSION['pesan_registrasi'] = "Selamat Registrasi Anda Berhasil "; 

				//jika berhasil
				header('location:login.php');
			}else{
				//jika query pendaftar tidak berhasil
				echo "
				<script>
					alert('Data pendaftaran anda error, Harap ulangi kembali');
					document.location.href = 'registrasi.php';
				</script>
				". mysqli_error($koneksi);
				die;	
			}



		}else{
			//jika query gagal
			echo "
				<script>
					alert('Data yang anda masukan error, Harap ulangi kembali');
					document.location.href = 'registrasi.php';
				</script>
			". mysqli_error($koneksi);
			die;	
		}


	}else{
		header('location:registrasi.php');
	}
?>