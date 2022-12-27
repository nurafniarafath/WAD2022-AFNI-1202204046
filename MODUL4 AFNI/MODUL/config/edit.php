<?php 
function ubah($data)
{
    global $connect;
    $id_mobil = $data['ubah'];
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


    $update = "UPDATE showroom_afni_table SET nama_mobil = '$nama_mobil', 
                                                pemilik_mobil = '$pemilik_mobil', 
                                                merk_mobil = '$merk_mobil', 
                                                tanggal_beli = '$tanggal_beli', 
                                                deskripsi = '$deskripsi', 
                                                foto_mobil = '$nama_mobil_file', 
                                                status_pembayaran = '$payment_status'  
                                                WHERE id_mobil = $id_mobil";
    query($update);

    return mysqli_affected_rows($connect);
}
?>