<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="na\vbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link text-light" href="#">Home</a>
                    <a class="nav-link text-secondary" href="AFNI_BOOKING.php">Booking</a>
                </div>
            </div>
        </div>
    </nav>
  <?php
  $name = $_P0ST['namme'];
  $bookDate = $_POST['bookDate'];
  $number = $_POST['number'];
  $startTime = $_POST['startTime'];
  $mobil = $_POST['mobil'];
  $addServices = $_POST['addServices'];
  $duration = $_POST['duration'];
  $tgl1    = $bookDate; 
  $tgl2    = date('Y-m-d', strtotime('+$duration days', strtotime($tgl1)));
  ?>
    <div class="container">
      <h1 class="text-center">Thank You Afni_1202204046 For Reserving</h1>
      <h5 class="text-center">Please double check youre reservation details</h5>
      <br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Booking Number</th>
            <th scope="col">Name</th>
            <th scope="col">Check In</th>
            <th scope="col">Check Out</th>
            <th scope="col">Car Type</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Service(s)</th>
           2
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><?php echo $name ?></td>
            <td><?php echo $bookDate ?>  <?php echo $startTime ?></td>
            <td><?php echo $tgl2 ?>  <?php echo $startTime ?></td>
            <td><?php echo $mobil ?></td>
            <td><?php echo $number ?></td>
            <td><?php echo $addServices ?></td>
          
          </tr>
        </tbody>
      </table>
      <div class="mb-3">
        <div class="d-flex justify-content-center">
          <a href="AFNI_BOOKING.php" class="btn btn-outline-primary w-50">Kembali</a>
        </div>
      </div>
    </div>
  </body>
</html>