<?php

$color_bt = "primary";

if (isset($_COOKIE['color'])) {
    if ($_COOKIE['color'] == 'red') {
        $color_bt = "danger";
    } elseif ($_COOKIE['color'] == 'yellow') {
        $color_bt = "warning";
    } elseif ($_COOKIE['color'] == 'green') {
        $color_bt = "success";
    } else {
        $color_bt = "primary";
    }
} else {
    $color_bt = "primary";
}

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <title>Show Room Afni | Home</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-<?= $color_bt; ?>">
        <div class="container-fluid my-2">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-bold active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <?php
                        if (mysqli_num_rows(query("SELECT * FROM showroom_afni_table")) != 0) {
                        ?>
                            <a class="nav-link text-light" href="../pages/ListCar-Afni.php">MyCar</a>
                        <?php
                        } else {
                        ?>
                            <a class="nav-link text-light" href="../pages/Add-Afni.php">MyCar</a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
            <a class="me-5 btn btn-light text-primary" href="../pages/Add-Afni.php">Add Car</a>
            <div class="me-5">
                <div class="btn-group me-5">
                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="text-primary">Nama User</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../pages/Profile-Afni.php">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../pages/Logout-Afni.php">Log Out</a></li>
                    </ul>
                </div>
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
                <?php
                if (mysqli_num_rows(query("SELECT * FROM showroom_Afni_table")) != 0) {
                ?>
                    <a class="btn btn-primary py-2 px-5 mt-5" style="font-size: 20px; text-left: 90px;" href="../pages/ListCar-Afni.php" role="button">MyCar</a>
                <?php
                } else {
                ?>
                    <a class="btn btn-primary py-2 px-5 mt-5" style="font-size: 20px; text-left: 90px;" href="../pages/Add-Afni.php" role="button">MyCar</a>
                <?php } ?>

                <br><br><br><br>
                <img src="..\asset\images\logo-ead.png" style="text-left: 90px;" alt="" srcset="">
                <span class="text-muted ms-5">Afni_1202204046</span>
            </div>
            <div class="col-sm-5 mt-5 pt-5 ps-5">
                <img class="mt-5 ms-5" src="../asset/images/car 4.jfif" style="width:600px;height:450px;" alt="" srcset="">
            </div>
        </div>
    </div>
    <!-- content -->
</body>

</html>