<?php

include('../config/connector.php');

mysqli_num_rows(query("SELECT * FROM showroom_afni_table"));

$blue = "";
$red = "";
$yellow = "";
$green = "";
$color_bt = "primary";

if (isset($_POST['update'])) {
    if (isset($_POST['color'])) {
        $color = $_POST['color'];
        setcookie("color", $color, time() + 120);
    }
    
    if (isset($_COOKIE['color'])) {
        if ($color == 'red') {
            $red = "selected";
            $color_bt = "danger";
        } elseif ($color == 'yellow') {
            $yellow = "selected";
            $color_bt = "warning";
        } elseif ($color == 'green') {
            $green = "selected";
            $color_bt = "success";
        } else {
            $blue = "selected";
            $color_bt = "primary";
        }
    } else {
        $blue = "selected";
        $color_bt = "primary";
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
                        <li><a class="dropdown-item" href="#">Profile</a></li>
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
        <h1 class="text-center mt-5">Profile</h1>
        <form action="" method="post">
            <div class="row justify-content-center">
                <div class="col-sm-2">
                    <div class="mb-3 mt-4">
                        <label for="email" class="form-label">Email <span style="color: red;">*</span></label>
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="nama" class="form-label">Nama <span style="color: red;">*</span></label>
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="nomor" class="form-label">Nomor Handphone <span style="color: red;">*</span></label>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="mb-3 mt-4">
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" name="nomor" id="nomor">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-7">
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-2">
                    <div class="mb-3 mt-4">
                        <label for="sandi" class="form-label">Kata Sandi <span style="color: red;">*</span></label>
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="email" class="form-label">Konfirmasi Kata Sandi <span style="color: red;">*</span></label>
                    </div>
                    <div class="mb-3 mt-4">
                        <label for="konfir_sandi" class="form-label">Warna Navbar <span style="color: red;">*</span></label>
                    </div>
                </div>
                <div class="col-sm-5 mt-4">
                    <div class="mb-3">
                        <input type="password" class="form-control" name="sandi" id="sandi">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="konfir_sandi" id="konfir_sandi">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" name="color">
                            <option value="blue" <?= $blue; ?>>Blue</option>
                            <option value="red" <?= $red; ?>>Red</option>
                            <option value="yellow" <?= $yellow; ?>>Yellow</option>
                            <option value="green" <?= $green; ?>>Green</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary px-4 mt-4 mb-3" name="update">Update</button>
            </div>
        </form>
    </div>
    <br>
    </div>
    </div>
    </div>
    <!-- content -->
</body>

</html>