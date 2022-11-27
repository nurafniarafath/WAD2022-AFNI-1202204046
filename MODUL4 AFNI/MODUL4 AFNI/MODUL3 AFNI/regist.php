<?php 
require"fungsi.php";

if (isset($_POST["register"])){

	if(registrasi($_POST) > 0 ){
		echo "<script>
				alert('user baru berhasil ditambahkan!');
				</script>";
	}else {
		echo mysqli_error($conn);
	}
}

 ?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
	<style>
		label {
			display: block;
		}
	</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
<body>

	<div class="clearfix">
        <!-- <div class="container"> -->
            <div class="row">
                <div class="col-6">
                    <img src="alphard.jpg" style="width:750px;height:729px;">
                </div> 
                <div class="col-4 justify-content-center">
                <br><br><br><br><br><br><br>
                    <b><h1><p class="fw-bold">Register</p></h1></b>
                <br>
				<div class="card-body">
					<form action="" method="post">
						<ul>
							<div>
								<label for="email" class="form-label">Email</label>
								<input type="text" class="form-control" name="email" id="email">
							</div>
							<div>
								<label for="nama" class="form-label">Nama</label>
								<input type="text" class="form-control" name="nama" id="nama">
							</div>
							<div>
								<label for="nomor_handphone" class="form-label">Nomor Handphone</label>
								<input type="text" class="form-control" name="nomor_handphone" id="nomor_handphone">
							</div>
							<div>
								<label for="kata_sandi" class="form-label">Kata Sandi</label>
								<input type="password" class="form-control" name="kata_sandi" id="kata_sandi">
							</div>
							<div>
								<label for="konfirmasi_kata_sandi" class="form-label">konfirmasi password</label>
								<input type="password" class="form-control" name="konfirmasi_kata_sandi" id="konfirmasi_kata_sandi">
							</div>
							<br> 	
							<div>
								<button class="btn btn-primary" type="submit" name="register">Daftar</button>
							</div>
						</ul>

					</form>
				</div>
				<a>Anda sudah punya akun?</a><a href="login.php">Login</a>
            </div>
        </div>
    </div>


</body>
</html>