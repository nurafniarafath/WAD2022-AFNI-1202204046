<?php 
function tambah($data)
{
    global $connect;
    $nama_mobil = $data['nama_mobil'];
    $pemilik_mobil = $data['pemilik_mobil'];
    $merk_mobil = $data['merk_mobil'];
    $tanggal_beli = $data['tanggal_beli'];
    $deskripsi = $data['deskripsi'];
    // gambar
    // $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $nama_mobil_file = $_FILES['foto_mobil']['name']; // nama file
    // $x = explode('.', $nama_mobil); // nama_file.jpg
    // $esktensi = strtolower(end($x));
    // $ukuran = $_FILES['foto_mobil']['size']; // ukuran file
    $file_tmp = $_FILES['foto_mobil']['tmp_name']; // temporary file 

    // MEMINDAHKAN FILE YANG DI UPLOAD KE FOLDER 
    move_uploaded_file($file_tmp, "../asset/images/" . $nama_mobil_file);

    // pembayaran
    $payment_status = $data['status'];


    $insert = "INSERT INTO showroom_afni_table VALUES ('', '$nama_mobil', '$pemilik_mobil', '$merk_mobil', '$tanggal_beli', '$deskripsi', '$nama_mobil_file', '$payment_status')";
    query($insert);

    return mysqli_affected_rows($connect);
}
?>