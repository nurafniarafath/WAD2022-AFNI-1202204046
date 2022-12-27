<?php

include('../config/connector.php');

mysqli_num_rows(query("SELECT * FROM showroom_afni_table"));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/style/bootstrap.css">
    <script src="../asset/script/bootstrap.js"></script>
    <title>Show Room Afni | Home</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid my-2">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-bold active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
            <div class="me-5">
                <a class="me-5 px-4  btn btn-light text-primary" href="Login-Afni.php">Login</a>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <!-- content -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-5 my-auto">
                <br><br><br><br>
                <h1 class="text-left" style="font-size: 70px;">Selamat Datang Di Show Room Afni</h1>
                <p class="text-muted " style="font-size: 20px; text-left: 90px;">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>           
                <br><br><br><br>
                <img src="..\asset\images\logo-ead.png" style="text-left: 90px;" alt="" srcset="">
                <span class="text-muted ms-5">Afni_1202204046</span>
            </div> 
            <div class="col-sm-5 mt-5 pt-5 ps-5">
                <img class="mt-5 ms-5" src="../asset/images/login_image.jpg " alt="" srcset="">
            </div>
        </div>
    </div>
    <!-- content -->
</body>

</html>