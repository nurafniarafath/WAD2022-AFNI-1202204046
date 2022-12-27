<?php

session_start();

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

if (!isset($_SESSION['login'])) {
    header("Location: Login-Afni.php");
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
    <title>Show Room Afni | Add Item</title>
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
                        <a class="nav-link text-light" aria-current="page" href="Home-SetelahLogin-Afni.php">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-light fw-bold active" href="#">MyCar</a>
                    </li>
                </ul>
            </div>
            <div class="me-5">
                <div class="btn-group me-5">
                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="text-primary">Nama User</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Profile-Afni.php">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="Logout-Afni.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <!-- content -->
    <div class="container">
        <br><br>
        <h2>Tambah Mobil</h2>
        <p class="text-muted">Tambah Mobil baru anda ke list show room</p>
        <br>
        <form action="ListCar-Afni.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
                <input type="text" class="form-control" name="nama_mobil" id="nama_mobil" placeholder="Nama Mobil" required>
            </div>
            <div class="mb-3">
                <label for="pemilik_mobil" class="form-label fw-bold">Nama Pemilik</label>
                <input type="text" class="form-control" name="pemilik_mobil" id="pemilik_mobil" placeholder="Afni - 1202204046" required>
            </div>
            <div class="mb-3">
                <label for="merk_mobil" class="form-label fw-bold">Merk</label>
                <input type="text" class="form-control" name="merk_mobil" id="merk_mobil" placeholder="Merk Mobil" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli</label>
                <input type="date" class="form-control" name="tanggal_beli" id="tanggal_beli" placeholder="Merk Mobil" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="foto_mobil" class="form-label fw-bold">Foto</label>
                <input class="form-control" type="file" name="foto_mobil" id="foto_mobil" required>
            </div>
            <div class="mb-3">
                <label for="status_pembayaran" class="form-label fw-bold">Status Pembayaran</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="Lunas" value="Lunas">
                    <label class="form-check-label" for="Lunas">Lunas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="Belum Lunas" value="Belum Lunas">
                    <label class="form-check-label" for="Belum Lunas">Belum Lunas</label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary my-5 px-4" name="submit" id="liveToastBtn">Selesai</button>
            </div>
        </form>
    </div>
    <!-- content -->
</body>

</html>