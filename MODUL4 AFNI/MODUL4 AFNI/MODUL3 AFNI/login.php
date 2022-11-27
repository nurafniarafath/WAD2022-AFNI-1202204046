<?php 
require 'fungsi.php';

if (isset($_POST["login"])){

	$email = $_POST["email"];
	$password = $_POST["password"];

	$result=mysqli_query($conn, "SELECT * FROM user_afni WHERE email = '$email'");

	if (mysqli_num_rows($result) === 1 ) {

		$row = mysqli_fetch_assoc($result);
		if ($password === $row["password"]){
			header("Location: AFNI_HOME.php");
			exit;
		}
	}
	$error = true;

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
                    <b><h1><p class="fw-bold">Login</p></h1></b>
                <br>
				<div class="card-body">
                    <form action="" method="post">
                        <ul>
                            <div>
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <div>
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <br>
                            <div>
                                <button class="btn btn-primary" type="submit" name="login">Login!</button>
                            </div>
                            <br>
                            <?php if (isset($error)) :?>
                                <p style="color: red; font-style: italic;">username / password salah!</p>
                            <?php endif; ?>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                                <label class="form-check-label">Remember me</label>
                            </div>
                        </ul>
                            
                    </form>
                    
				</div>
				<a>Anda Belum punya akun?</a><a href="regis.php">Daftar</a>
            </div>
        </div>
    </div>
	
	
</body>
</html>