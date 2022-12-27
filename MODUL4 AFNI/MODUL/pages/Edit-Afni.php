<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: Login-Rika.php");
}

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

$id_detail = $_GET["id"];
$query = query("SELECT * FROM showroom_rika_table WHERE id_mobil = '$id_detail'");
if ($query) {
    $selects = mysqli_fetch_assoc($query)

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
        <title>Show Room Rika | Edit</title>
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
                            <a class="nav-link text-light" aria-current="page" href="Home-SetelahLogin-Rika.php">Home</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link text-light fw-bold active" href="#">MyCar</a>
                        </li>
                    </ul>
                </div>
                <a class="me-5 btn btn-light text-primary" href="../pages/Add-Rika.php">Add Car</a>
                <div class="me-5">
                    <div class="btn-group me-5">
                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="text-primary">Nama User</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Profile-Rika.php">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="Logout-Rika.php">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- navbar -->
        <!-- content -->
        <div class="container">
            <br><br>
            <h2>Edit</h2>
            <p class="text-muted">Detail Mobil <?= $selects['nama_mobil']; ?></p>
            <br>
            <div class="row">
                <div class="col-sm-5">
                    <div class="card" style="width: 30rem;">
                        <img src="<?= "../asset/images/" . $selects['foto_mobil']; ?>" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-sm-5">
                    <form action="ListCar-Rika.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama_mobil" class="form-label fw-bold" value="BMW 14">Nama Mobil</label>
                            <input required type="text" class="form-control" name="nama_mobil" id="nama_mobil" value="<?= $selects['nama_mobil']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="pemilik_mobil" class="form-label fw-bold" value="Afni - 1202204046">Nama Pemilik</label>
                            <input required type="text" class="form-control" name="pemilik_mobil" id="pemilik_mobil" value="<?= $selects['pemilik_mobil']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="merk_mobil" class="form-label fw-bold" value="BMW">Merk</label>
                            <input required type="text" class="form-control" name="merk_mobil" id="merk_mobil" value="<?= $selects['merk_mobil']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_beli" class="form-label fw-bold">Tanggal Beli</label>
                            <input required type="date" class="form-control" name="tanggal_beli" id="tanggal_beli" value="<?= $selects['tanggal_beli']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label fw-bold" value="">Deskripsi</label>
                            <textarea required class="form-control" name="deskripsi" id="deskripsi" rows="5" placeholder="<?= $selects['deskripsi']; ?>"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="foto_mobil" class="form-label fw-bold">Foto</label>
                            <input required class="form-control" type="file" name="foto_mobil" id="foto_mobil">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label fw-bold">Status Pembayaran</label>
                            <br>
                            <?php

                            if ($selects['status_pembayaran'] == 'Lunas') {

                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="status" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Lunas" checked="checked">
                                    <label class="form-check-label" for="inlineRadio1">Lunas</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="status" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Belum Lunas">
                                    <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="status" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Lunas">
                                    <label class="form-check-label" for="inlineRadio1">Lunas</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="status" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Belum Lunas" checked="checked">
                                    <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                                </div>
                            <?php
                            }
                            ?>
                            <br>
                            <button class="btn btn-primary my-5 px-4" name="ubah" value="<?= $selects['id_mobil'] ?>">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- content -->
    </body>

    </html>

<?php

} ?>