<?php

    //tabel pendaftar
    $all_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftar, nilai where pendaftar.id = nilai.pendaftar_id AND nilai.status = 0 ");

    if(!$all_pendaftar) {
        die('Query Error : ' . mysqli_error($koneksi));
    }

    //jumlah pendaftar
    $jml_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftar, nilai where pendaftar.id = nilai.pendaftar_id");

    if(!$jml_pendaftar) {
    	//cek hasil
        die('Query Error : ' . mysqli_error($koneksi));
    }

    //jumlah lolos
    $jml_lolos = mysqli_query($koneksi, "SELECT * FROM pendaftar, nilai where pendaftar.id = nilai.pendaftar_id AND nilai.status = 1");

    //cek hasil
    if(!$jml_lolos) {
        die('Query Error : ' . mysqli_error($koneksi));
    }


?>