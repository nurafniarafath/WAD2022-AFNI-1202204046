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

if ( !isset($_SESSION['login'])) {
    header("Location: Login-Afni.php");
}

include('../config/connector.php');

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
    <title>Show Room Afni | My Item</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-<?= $color_bt; ?>">
        <div class="container-fluid my-2 me-5 pe-5">
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
            <a class="me-5 btn btn-light text-primary" href="../pages/Add-Afni.php">Add Car</a>
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
        <h2>My Show Room</h2>
        <p class="text-muted">List Show Room Afni - 1202204046</p>
        <br>
        <div class="row">
            <?php

            if (isset($_POST['submit'])) {

                if (tambah($_POST) > 0) {
                    echo '<div class="alert alert-success" role="alert">';
                    echo 'Data Berhasil Ditambahkan!';
                    echo '</div>';
                } else {
                    echo '<div class="alert alert-warning" role="alert">';
                    echo 'Data Gagal Ditambahkan!';
                    echo '</div>';
                }
            }

            if (isset($_POST['ubah'])) {

                if (ubah($_POST) > 0) {
                    echo '<div class="alert alert-primary" role="alert">';
                    echo 'Data Berhasil Diubah!';
                    echo '</div>';
                } else {
                    echo '<div class="alert alert-warning" role="alert">';
                    echo 'Data Gagal Diubah!';
                    echo '</div>';
                }
            }

            if (isset($_GET['id'])) {

                $id = $_GET['id'];

                if (hapus($id) > 0) {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo 'Data Berhasil Dihapus!';
                    echo '</div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo 'Data Gagal Dihapus!';
                    echo '</div>';
                }
            }

            ?>

            <?php

            $query = query("SELECT * FROM showrom_afni_table");

            if ($query) {
                while ($selects = mysqli_fetch_assoc($query)) {

            ?>
                    <!-- card -->
                    <div class="card mx-5 my-4" style="width: 18rem;">
                        <img src="<?= "../asset/images/" . $selects['foto_mobil']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $selects['nama_mobil']; ?></h5>
                            <p class="card-text"></p><?= $selects['deskripsi']; ?>
                            <div class="text-center mt-3">
                                <a href="Detail-Afni.php?id=<?= $selects['id_mobil'] ?>" class="btn btn-primary mx-2 px-4 rounded-pill" name="detail">Detail</a>
                                <a href="?id=<?= $selects['id_mobil'] ?>" class="btn btn-danger mx-2 px-4 rounded-pill">Delete</a>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
            <?php
                }
            }
            ?>
            <div class="mt-3">
                <p>Jumlah Mobil: <?= mysqli_num_rows($query); ?></p>
            </div>
        </div>
        <!-- content -->
</body>

</html>