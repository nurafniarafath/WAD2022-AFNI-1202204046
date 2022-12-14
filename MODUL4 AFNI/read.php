<?php
    include('config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Modul 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
	<nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="na\vbarNavAltMarkup">
                <div class="navbar-nav mx-left">
                    <a class="nav-link text-light" href="AFNI_HOME.PHP">Home</a>
                    <a class="nav-link text-light" href="ADD_ITEM.php">MyCar</a>
                </div>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="container pt-3"> 
		<h1 class="text">My Show Room</h1>
        <h6 class="mb-3">List Show Room Afni - 1202204046 </h6><br>
		<div class="col-md-4">
            <?php
            $query = mysqli_query($connect,"SELECT*from showroom_afni_table");

            if($query){
                while($selects = mysqli_fetch_assoc($query)){
            
            ?>
            <div class="row">
            <div class="card shadow-lg" style="width: 25rem;">
            <img class="card-img-top p-3" src="<?= $selects['foto_mobil']?>"alt=""> 
            <div class="card-body">
              <h4 class="card-title"><?= $selects['nama_mobil']?></h4>
              <p class="card-text"><?= $selects['deskripsi']?></p>
                
            </div>
            <div class="card-footer">
              <div class="row justify-content-start">
                <div class="col-4">
              <form action="detail.php" method="post" >
                <input type="hidden" name="id_mobil" value="<?php echo $id_mobil; ?>" />
                <input style="width: 100%" type="submit" class="btn btn-primary rounded-pill" value="Detail">
              </form></div>
              <div class="col-4">
              <form action="delete.php" method="post" >
                <input type="hidden" name="id_mobil" value="<?php echo $id_mobil; ?>" />
                <a style="width: 100%" href="delete.php?id_mobil=<?php echo $selects['id_mobil'];?>" class="btn btn-danger rounded-pill" >Delete</a>
              </form></div>    
            </div>
        </div>
    </div>
            <?php
                }
            }
            ?>
</body>
</html>