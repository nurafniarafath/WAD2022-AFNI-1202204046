<?php 
$conn = mysqli_connect("localhost","root","","wad_modul4_afni");

function query ($query){
	global $conn;
	$result = mysqli_query ($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

// function tambah ($data){
// 	global $conn;
// 	$Nama = $data["Nama"];
// 	$Alamat = $data["Alamat"];
// 	$No_Hp = $data["No_Hp"];

// 	$query = "INSERT INTO karyawan
// 				VALUES
// 				('','$Nama','$Alamat','$No_Hp')
// 				";
// 	mysqli_query($conn, $query);

// 	return mysqli_affected_rows($conn);

// }

function registrasi($data){
	global $conn;

	$email= strtolower(stripslashes($data["email"]));
	$nama = $data["nama"];
	$nomor_handphone = $data["nomor_handphone"];
	$kata_sandi = mysqli_real_escape_string($conn, $data["kata_sandi"]);
	$konfirmasi_kata_sandi = mysqli_real_escape_string($conn, $data["konfirmasi_kata_sandi"]);

	$result = mysqli_query($conn, "SELECT email FROM user_afni WHERE email = '$email'");
	if(mysqli_fetch_assoc($result)){
		echo "<script>
				alert('email yang dipilih telah terdaftar')
				</script>";
		return false;
	}


	if($kata_sandi !== $konfirmasi_kata_sandi){

		echo "<script>
				alert('konfirmasi password tidak sesuai')
				</script>";
		return false;
	}

	mysqli_query($conn, "INSERT INTO user_afni VALUES('','$nama','$email','$kata_sandi','$nomor_handphone')");

	return mysqli_affected_rows($conn);

	koneksi->close();
}


function order ($data){
	global $conn;
	$nama = htmlspecialchars($data["nama"]);
	$tanggal = htmlspecialchars($data["tanggal"]);
	$no_hp = htmlspecialchars($data["no_hp"]);
	$waktu = htmlspecialchars($data["waktu"]);
	$alamat= htmlspecialchars($data["alamat"]);
	$driver= htmlspecialchars($data["driver"]);
	$kendaraan= htmlspecialchars($data["kendaraan"]);

 
	$query = "INSERT INTO orderan
				VALUES
				('','$nama','$tanggal','$no_hp','$waktu','$alamat','$driver','$kendaraan')
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function TambahKendaraan ($data){
	global $conn;
	$jenis = $data["jenis"];
	$merk = $data["merk"];
	$no_polisi = $data["no_polisi"];
	

	$query = "INSERT INTO kendaraan
				VALUES
				('','$jenis','$merk','$no_polisi')
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function TambahDriver ($data){
	global $conn;
	$nama = $data["nama"];
	$alamat = $data["alamat"];
	$no_hp = $data["no_hp"];
	

	$query = "INSERT INTO driver
				VALUES
				('','$nama','$alamat','$no_hp')
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapusOrderan($id) {
global $conn;
mysqli_query($conn, "DELETE FROM orderan WHERE id = $id");

return mysqli_affected_rows($conn);
}

function hapusDriver($id) {
global $conn;
mysqli_query($conn, "DELETE FROM driver WHERE id = $id");

return mysqli_affected_rows($conn);
}

function hapusKendaraan($id) {
global $conn;
mysqli_query($conn, "DELETE FROM kendaraan WHERE id = $id");

return mysqli_affected_rows($conn);
}


function ubahOrderan($data){

	global$conn;
	$id =  $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$tanggal = htmlspecialchars($data["tanggal"]);
	$no_hp = htmlspecialchars($data["no_hp"]);
	$waktu = htmlspecialchars($data["waktu"]);
	$alamat= htmlspecialchars($data["alamat"]);
	$driver= htmlspecialchars($data["driver"]);
	$kendaraan= htmlspecialchars($data["kendaraan"]);

	$query = "UPDATE orderan SET
				nama ='$nama',tanggal = '$tanggal',no_hp = '$no_hp',waktu='$waktu',alamat='$alamat',driver='$driver',kendaraan='$kendaraan'
				WHERE id=$id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function ubahKendaraan($data){

	global$conn;
	$id =  $data["id"];
	$jenis = htmlspecialchars($data["jenis"]);
	$merk = htmlspecialchars($data["merk"]);
	$no_polisi = htmlspecialchars($data["no_polisi"]);
	
	$query = "UPDATE kendaraan SET
				jenis ='$jenis',merk = '$merk',no_polisi = '$no_polisi'
				WHERE id=$id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function ubahDriver($data){

	global$conn;
	$id =  $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$no_hp = htmlspecialchars($data["no_hp"]);
	
	$query = "UPDATE driver SET
				nama ='$nama',alamat = '$alamat',no_hp = '$no_hp'
				WHERE id=$id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function orderMobil($data){
	global $conn;
	$nama = htmlspecialchars($data["nama"]);
	$tanggal = htmlspecialchars($data["book_date"]);
	$start = htmlspecialchars($data["start_time"]);
	$duration = htmlspecialchars($data["duration"]);
	$tipe = htmlspecialchars($data["car_type"]);
	$phone = htmlspecialchars($data["phone_number"]);


 
	$query = "INSERT INTO orderan
				VALUES
				('','$nama','$book_date','$start_time','$duration','$car_type','$phone_number')
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


?>