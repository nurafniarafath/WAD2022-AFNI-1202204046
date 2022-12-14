<?php

    include('config.php');
    $nama_mobil = $_POST['nama_mobil'];
    $pemilik_mobil = $_POST['pemilik_mobil'];
    $merk_mobil = $_POST['merk_mobil'];
    $tanggal_beli = $_POST['tanggal_beli'];
    $deskripsi = $_POST['deskripsi'];
    $foto_mobil = $_POST['foto_mobil'];
    $status_pembayaran = $_POST['status_pembayaran'];
    $query = mysqli_query($connect, "INSERT INTO showroom_afni_table(nama_mobil,pemilik_mobil,merk_mobil,tanggal_beli,deskripsi,foto_mobil,status_pembayaran)VALUES('$nama_mobil','$pemilik_mobil','$merk_mobil','$tanggal_beli','$deskripsi','$foto_mobil','$status_pembayaran')");
    if($query){
        echo"<script>alert('Data telah ditembahkan')</script>";
        echo"<meta http-equiv='refresh' content='1 url=read.php'>";
    }
    else{
        echo"<script>alert('gagal ditembahkan')</script>";
        echo"<meta http-equiv='refresh' content='1 url=read.php'>";

    }
?>