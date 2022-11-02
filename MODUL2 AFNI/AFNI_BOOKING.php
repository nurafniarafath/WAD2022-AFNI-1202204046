<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
	<div class="container"> 
	<nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="na\vbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link text-light" href="AFNI_HOME.php">Home</a>
                    <a class="nav-link text-secondary" href="AFNI_BOOKING.php">Booking</a>
                </div>
            </div>
        </div>
    </nav>
		<h1 class="text-center">Rent your car now! </h1>
		<form action="AFNI_MYBOOKING.php" method="POST">
			<div class="mb-3">
				<label for="name" class="form-label">Name</label>
				<input type="text" class="form-control" id="name" name="name" value="AFNI_1202204046" readonly>
			</div>
			<div class="mb-3">
				<label for="name" class="form-label">Book Date</label>
				<input type="date" class="form-control" id="bookDate" name="bookDate" >
			</div>
			<div class="mb-3">
				<label for="name" class="form-label">Start Time</label>
				<input type="time" class="form-control" id="startTime" name="startTime" >
			</div>
			<div class="mb-3">
				<label for="duration" class="form-label">Duration(Days)</label>
				<input type="number" class="form-control" id="duration" name="duration">
			</div>
			<div class="mb-3">
				<label for="mobil" class="form-label">Car Type</label>
				<select name="mobil" id="" class="form-select">
					<option value="alphard"> Alphard</option>
					<option value="avanza"> Avanza</option>
					<option value="ayla"> Ayla</option>
				</select>
			</div>
			<div class="mb-3">
				<label for="number" class="form-label">Phone Number</label>
				<input type="text" class="form-control" id="number" name="number" placeholder="Masukan No Handphone Kamu">
			</div>
			<div class="mb-3">
				<label for="supir">Add Service(s)</label>
				<div>
					<label class="form-check-label">Health Protocol / Rp20.000</label>
					<input type="radio" class="form-check-label" value="Health Protocol/Rp20.000" name="addServices">
				</div>
				<div>
					<label class="form-check-label">Driver / Rp150.000</label>
					<input type="radio" class="form-check-label" value="Driver / Rp150.000" name="addServices">
				</div>
				<div>
					<label class="form-check-label">Fuel Filled / Rp200.000</label>
					<input type="radio" class="form-check-label" value="Fuel Filled / Rp500.000" name="addServices">
				</div>
			</div>
			<div class="mb-3">
				<div>
					<button class="btn btn-primary" type="submit">Submit</button>
					<br>
					<div class="footer">
					<center>
					<br>
						<p>Created By Afni_1202204046</p>
					</center>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>