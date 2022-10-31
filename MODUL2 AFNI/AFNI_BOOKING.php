<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu Order</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>

<body>
	<h1>Menu Order Rental</h1>


<form action="" method="post">
		<ul>
			<li>
				<label for="nama">Nama</label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="tanggal">Book Date</label>
				<input type="date" name="tanggal" id="tanggal">
			</li>
			<li>
				<label for="start">Start</label>
				<input type="time" name="start" id="start">
			</li>
			<li>
				<label for="duration">Duration</label>
				<input type="text" name="duration" id="duration">
			</li>
			<li>
				<label for="tipe">Tipe</label>
				<select name="tipe" id="tipe">
    				<option value="Alphart">Alphart</option>
    				<option value="Honda Jazz">Honda Jazz</option>
    				<option value="Ayla">Ayla</option>
    			</select>
			</li>
			<li>
				<label for="phone">Phone Number</label>
				<input type="text" name="phone" id="phone">
			</li>
			
			
</body>
</html>
