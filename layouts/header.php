<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!-- box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- style -->
    <link rel="stylesheet" href="assets/css/costum.css">
    <link rel="stylesheet" href="assets/css/font.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav id="nav" class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
        <div class="container">
            <a class="img-fluid" href="#"><img src="assets/img/logo/logowonderful.webp" width="120px" alt=""></a>
            <a href="" class=" text-decoration-none ms-auto d-flex d-xs-block d-sm-block d-md-none d-lg-none"><i class='bx bx-user-circle text-white opacity-50 bx-sm  '></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <i class='bx bx-align-right bx-sm text-white opacity-50 justify-content-end'></i>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><img src="assets/img/logo/logowonderful.webp" width="110px" alt=""></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end m-auto pe-3">
                        <a class="nav-link " href="">Home</a>
                        <a class="nav-link " href="">Popular</a>
                        <a class="nav-link " href="">Location</a>
                        <a class="nav-link" href="">Contact</a>
                        <a class="nav-link" href="">Partner</a>
                    </ul>
                </div>
            </div>
            <a class="text-decoration-none d-none d-sm-none d-md-block d-lg-block" href=""><i class='bx bx-user-circle text-white opacity-50 bx-sm '></i></a>
        </div>
    </nav>