<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MODUL 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark p-3">
        <div class="container-fluid">
                <ul class="navbar-nav pl-3">
                    <li class="nav-item"><a class="nav-link text-light" href="AFNI_HOME.PHP">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ url('/add_afni') }}">MyCar</a></li>
                </ul>
                    <a href="{{ url('/add_afni') }}"  button type="button" class="btn btn-light text-primary">Add Car</a>
        </div>
        <div class="dropdown">
                <button class="btn btn-light text-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Nama</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
        </div>
    </nav>
    <br><br>
    <br>
    <br>
    <br>
    <div class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col">
                <b><h1><p class="fw-bold" style="font-size: 70px;">Selamat Datang Di Show Room Afni</p></h1></b>
                <p class="text-secondary" style="font-size: 20px; text-left: 90px;">At lacus vitae nulla sagittis scelerisque nist. Pellentesque duis curcus vestibulum, facilisi ac, sed faucibus.</p>
            <div class="card-body">
                <a class="nav-link text-secondary"><a class="btn btn-primary py-2 px-5 mt-5" style="font-size: 15px; text-left: 90px;" href="add_afni.blade.php" class="btn btn-primary"> MyCar </a>
            </div>
            <div class="col">
                <br><br><img src="{{ url('/images/logo-ead.png') }}"  tyle="text-left: 90px;" alt="" srcset="">
                <span class="text-muted ms-3">Afni_1202204046</span>
            </div>
            </div> 
            <div class="col">
                <img src="{{ url('/images/home-car.jfif') }}" style="width:600px;height:450px;"  alt="" srcset="">
            </div>  
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>