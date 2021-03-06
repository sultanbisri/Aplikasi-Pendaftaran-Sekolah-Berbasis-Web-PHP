<?php
include('config/koneksi.php');

session_start();

if (isset($_POST['btn_login'])) {
	//jika sudah ditekan
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql_users = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
	$result_users = mysqli_query($koneksi, $sql_users);


	if (mysqli_num_rows($result_users) > 0) {
		//jika data tersedia, simpan data user kedalam session
		while ($data_user = mysqli_fetch_array($result_users)) {
			$_SESSION['status'] = 'login';
			$_SESSION['id_users'] = $data_user['id'];
			$_SESSION['nama'] = $data_user['nama'];
			$_SESSION['level'] = $data_user['level'];


			if ($data_user['level'] == 'admin') {
				header('location:admin/dashboard.php');
			} else if ($data_user['level'] == 'siswa') {
				header('location:siswa/dashboard.php');
			}
		}
	} else {

		$_SESSION['login_error'] = "Username Atau Password Anda Salah ";
		header('location:login.php');
	}
} else {
	header('location:login.php');
}
