<?php

    include('../config/koneksi.php');

    // require 'vendor/autoload.php';

    // // reference the Dompdf namespace
    // use Dompdf\Dompdf;

    // // instantiate and use the dompdf class
    // $dompdf = new Dompdf();
    // $dompdf->loadHtml('<h1> Data Pendaftaran </h1> ');

    // // (Optional) Setup the paper size and orientation
    // $dompdf->setPaper('A4', 'landscape');

    // // Render the HTML as PDF
    // $dompdf->render();

    // // Output the generated PDF to Browser
    // $dompdf->stream("data pendaftar.pdf", array("Attachment"=>0));

?>


<style type="text/css">
    table, th, td{
        font-size: 12px;
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<table>
    <tr>
        <th width="5%">No</th>
        <th width="13%">Nama</th>
        <th width="20%">ttl</th>
        <th width="5%">jk</th>
        <th>alamat</th>
        <th width="7%">telepon</th>
        <th width="5%">nilai</th>
        <th width="10%">status</th>
    </tr>

    <?php 

         //tabel pendaftar
         $all_pendaftar = mysqli_query($koneksi, "SELECT pendaftar.*, nilai.nilai_un, nilai.nilai_us, nilai.nilai_uas_5, nilai.status FROM pendaftar, nilai where pendaftar.id = nilai.pendaftar_id");

        $no = 1;
        while($p = mysqli_fetch_array($all_pendaftar)) { ?>


     <tr>
        <th><?= $no++  ?> </th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>

    <?php } ?>

</table>