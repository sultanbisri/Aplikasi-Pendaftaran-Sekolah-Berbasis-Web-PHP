<?php 

	$id_pendaftar = $_GET['id'];

	$sql_pendaftar = "SELECT * FROM pendaftar where id = '$id_pendaftar' ";
	$result_pendaftar = mysqli_query($koneksi, $sql_pendaftar);
	$data_pendaftar = mysqli_fetch_array($result_pendaftar);

	 if(!$result_pendaftar) {
        die('Query Error : ' . mysqli_error($koneksi));
    }


    $sql_nilai = "SELECT * FROM nilai where pendaftar_id = '$id_pendaftar' ";
	$result_nilai = mysqli_query($koneksi, $sql_nilai);
	$data_nilai = mysqli_fetch_array($result_nilai);

	if(!$result_nilai) {
        die('Query Error : ' . mysqli_error($koneksi));
    }


    if(isset($_POST['simpan']) && $_POST['simpan'] == 'simpan_nilai') {

    	$nilai = $_POST['nilai'];

    	$sql_nilai = "UPDATE nilai set status='$nilai' where pendaftar_id= '$id_pendaftar'  ";
    	$query_nilai = mysqli_query($koneksi, $sql_nilai);

    	if($query_nilai) {
    		//jika berhasil diubah
    		$_SESSION['pesan_sukses'] = "Status Pendaftar Berhasil Diubah";
    		header('location:pendaftaran.php');

    	} else {
    		echo "Status Pendaftar Gagal Diubah"; die;
    	}
    }


?>