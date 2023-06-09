<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<?php 
 session_start();
    include "koneksi.php";
    $db = new database();

?>

<body class="bg-secondary">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">


        <div class="container-fluid">
            <a class="navbar-brand" href="#">Proyek UAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container-sm bg-dark text-light align-content-center align-items-center text-center"
        style="width: 50%;">
        <h1>Login Form</h1>
        <br>
        <form action="prosesLogin.php" method="post" id="form_login">
            <div class="row mb-4">
                <label for="inputEmail3" class="col-sm-4 col-form-label">ID Pengguna</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control " id="idpengguna" name="idpengguna" style="width:70%;"
                        required>
                    <div class="invalid-tooltip">
                        Harap Masukkan ID yang Valid
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Password Pengguna</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control " id="passwordpengguna" name="passwordpengguna"
                        style="width:70%;" required>
                    <div class="invalid-tooltip">
                        Harap Masukkan Password Yang Benar
                    </div>
                </div>
            </div>

            <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-center">
                <input type="submit" class="btn btn-primary" value="Login" name="submit">
                <a href="register.php" type="button" class="btn btn-primary ">Sign up</a>

            </div>
        </form>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>