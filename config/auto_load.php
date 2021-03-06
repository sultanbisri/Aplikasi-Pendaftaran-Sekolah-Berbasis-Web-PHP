<?php 

	session_start();

	include('koneksi.php');

	$base_url = "http://localhost/project/pendaftaran";
	
	$uri_segment = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
	// var_dump($uri_segment);

	if(isset($_SESSION['status']) && $_SESSION['status'] == 'login') {
		//lanjut
		if($uri_segment[3] == $_SESSION['level'] ) {

		}else{
			echo "Error: Forbidden !!!";
			echo "<br><br> <button type='button' onclick='history.back()'> Kembali </button>  ";
			die;
		}

	} else {
		$_SESSION['login_error'] = "Silahkan Login Untuk Masuk Kedalam Aplikasi";
		header('location:'. $base_url . '/login.php');
	}

?>
