<?php

require '../config/connector.php';

if (isset($_POST['daftar'])) {

    if (registrasi($_POST) > 0) {
        echo '<div class="alert alert-success position-absolute w-100" role="alert">';
        echo 'User '. $_POST['nama'] .' Berhasil Ditambahkan!';
        echo '</div>';
        header('Location: Login-Afni.php');
        exit;
    } else {
        echo mysqli_error($conn_user);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style/bootstrap.css">
    <script src="../asset/script/bootstrap.js"></script>
    <title>Show Room Afni | Register</title>
</head>

<body style="background-image: url('../asset/images/login_image.jpg');">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6 bg-light" style="height: 1080px;">
                <div class="row justify-content-center">
                    <div class="col-sm-10">
                        <br><br><br><br><br><br>
                        <h1>Register</h1>
                        <form action="" method="post">
                            <div class="mb-3 mt-5">
                                <label for="email" class="form-label">Email <span style="color: red;">*</span></label>
                                <input required type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="nomor" class="form-label">Nomor Handphone <span style="color: red;">*</span></label>
                                <input required type="number" class="form-control" name="nomor" id="nomor">
                            </div>
                            <div class="mb-3">
                                <label for="sandi" class="form-label">Kata Sandi <span style="color: red;">*</span></label>
                                <input required type="password" class="form-control" name="sandi" id="sandi">
                            </div>
                            <div class="mb-3">
                                <label for="konfir_sandi" class="form-label">Konfirmasi Kata Sandi <span style="color: red;">*</span></label>
                                <input required type="password" class="form-control" name="konfir_sandi" id="konfir_sandi">
                            </div>
                            <button type="submit" class="btn btn-primary px-4 mt-4 mb-3" name="daftar">Daftar</button>
                            <br>
                            <span>Anda sudah punya akun? <a href="Login-Afni.php">Login</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>