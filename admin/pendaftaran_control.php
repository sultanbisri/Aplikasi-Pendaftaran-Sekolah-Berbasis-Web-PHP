<?php 
	
	 //tabel pendaftar
    $all_pendaftar = mysqli_query($koneksi, "SELECT pendaftar.*, nilai.nilai_un, nilai.nilai_us, nilai.nilai_uas_5, nilai.status FROM pendaftar, nilai where pendaftar.id = nilai.pendaftar_id");

    if(!$all_pendaftar) {
        die('Query Error : ' . mysqli_error($koneksi));
    }

    if(isset($_GET['action']) && $_GET['action'] == "hapus") {
    	$id_pendaftar    = $_GET['id'];
    	$sql_pendaftar   = "SELECT * FROM pendaftar where id = '$id_pendaftar' ";
    	$query_pendaftar = mysqli_query($koneksi, $sql_pendaftar);

    	if(mysqli_num_rows($query_pendaftar)) {

    		$data_pendaftar = mysqli_fetch_array($query_pendaftar);
    		$id_user = $data_pendaftar['users_id'];

    		//hapus nilai
    		$query_hapus_nilai = "DELETE FROM nilai where pendaftar_id = '$id_pendaftar' ";
    		$sql_hapus_nilai = mysqli_query($koneksi, $query_hapus_nilai); 

    		//hapus foto
    		unlink('../uploads/'. $data_pendaftar['foto']);
    		$query_hapus_pendaftar = "DELETE FROM pendaftar where id = '$id_pendaftar' ";
    		$sql_hapus_pendaftar = mysqli_query($koneksi, $query_hapus_pendaftar); 

    		//hapus user
    		$query_hapus_user = "DELETE FROM users where id = '$id_user' ";
    		$sql_hapus_user = mysqli_query($koneksi, $query_hapus_user); 


    		if(!$sql_hapus_nilai || !$sql_hapus_pendaftar || !$sql_hapus_user) {
    			die('Query Error: '. mysqli_error($koneksi));
    		}

    		//simpan session
    		$_SESSION['pesan_sukses'] = "Data Pendaftar Berhasil Dihapus! ";
    		header('location:pendaftaran.php');

    	} else {
    		die('Data pendaftar tidak ditemukan!');
    	}

    }

?>