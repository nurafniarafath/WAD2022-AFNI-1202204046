<?php

include('insert.php');
include('edit.php');
include('delete.php');

$conn_user = mysqli_connect("localhost", "root", "", "wad_modul4_afni");

$connect = mysqli_connect("localhost", "root", "", "modul3");
if (!$connect) {
    die("Koneksi gagal:" . mysqli_connect_error());
}

function query($query)
{
    global $connect;
    return mysqli_query($connect, $query);
}

function registrasi($data) {
    global $conn_user;

    $email = strtolower(stripslashes($data['email']));
    $nama = $data['nama'];
    $nomor = $data['nomor'];
    $sandi = mysqli_real_escape_string($conn_user, $data['sandi']); 
    $konfir_sandi = mysqli_real_escape_string($conn_user, $data['konfir_sandi']);

    $result = mysqli_query($conn_user, "SELECT email FROM user_afni WHERE email = '$email'");
    if ( mysqli_fetch_assoc($result)) {
        echo '<div class="alert alert-warning position-absolute w-100" role="alert">';
        echo 'Email sudah terdaftar! ';
        echo '</div>';
        return false;
    }

    if( $sandi != $konfir_sandi) {
        echo '<div class="alert alert-danger position-absolute w-100" role="alert">';
        echo 'Konfirmasi password tidak sesuai! ';
        echo '</div>';
        return false;
    }

    $sandi = password_hash($sandi, PASSWORD_DEFAULT);

    mysqli_query($conn_user, "INSERT INTO user_afni VALUES('', '$nama', '$email', '$sandi', '$nomor')");

    return mysqli_affected_rows($conn_user);
}
