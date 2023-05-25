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

<body class="bg-secondary">

    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark  text-light sticky-sm-top">
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
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="belanja.php">Peminjaman Buku</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Lainnya
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="viewBuku.php">Daftar Buku</a></li>
                            <li><a class="dropdown-item" href="home.php">Informasi Akun</a></li>

                        </ul>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <br>
    <h1 class="align-content-center text-center text-light">
        Daftar Buku
    </h1>
    <br>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-3" style="width: 20rem ;">
                <img src="gambar/bukuBahasaIndo.jpg" class="card-img-top" alt="">
                <div class="card text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Buku Bahasa Indonesia</h5>
                        <p class="card-text">Berisi Materi Pelajaran Bahasa Indonesia Kelas IX</p>
                        <a href="inputBuku.php" class="btn btn-primary">Pinjam Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" style="width: 20rem ;">
                <img src="gambar/bukuBiologi.jpg" class="card-img-top" alt="" style="width:296px; height: 296px;">
                <div class="card text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Buku Biologi</h5>
                        <p class="card-text">Berisi Materi Pelajaran Biologi Kelas X</p>
                        <a href="inputBuku.php" class="btn btn-primary">Pinjam Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" style="width: 20rem ;">
                <img src="gambar/bukuFisika.jpg" class="card-img-top" alt="" style="width:296px; height: 296px;">
                <div class="card text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Buku Fisika</h5>
                        <p class="card-text">Berisi Materi Pelajaran Fisika Kelas X</p>
                        <a href="inputBuku.php" class="btn btn-primary">Pinjam Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" style="width: 20rem ;">
                <img src="gambar/bukuKimia.jpg" class="card-img-top" alt="" style="width:296px; height: 296px;">
                <div class="card text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Buku Kimia</h5>
                        <p class="card-text">Berisi Materi Pelajaran Kimia Kelas X
                        </p>
                        <a href="inputBuku.php" class="btn btn-primary">Pinjam Buku</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-3" style="width: 20rem ;">
                <img src="gambar/matemaikaNew.png" class="card-img-top" alt="" style="width:296px; height: 296px;">
                <div class="card text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Buku Matematika</h5>
                        <p class="card-text">Berisi Materi Pelajaran Matematika Kelas X</p>
                        <a href="inputBuku.php" class="btn btn-primary">Pinjam Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" style="width: 20rem ;">
                <img src="gambar/bukuMatematikaDiskrit.jpg" class="card-img-top" alt=""
                    style="width:296px; height: 296px;">
                <div class="card text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Buku Matematika Diskrit</h5>
                        <p class="card-text">Berisi Materi Pelajaran MD Untuk Pemrograman</p>
                        <a href="inputBuku.php" class="btn btn-primary">Pinjam Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" style="width: 20rem ;">
                <img src="gambar/bukuProgrammingWeb.jpg" class="card-img-top" alt=""
                    style="width:296px; height: 296px;">
                <div class="card text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Buku Web Programming</h5>
                        <p class="card-text">Berisi Materi Pelajaran Web Programming untuk Web Developer
                        </p>
                        <a href="inputBuku.php" class="btn btn-primary">Pinjam Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" style="width: 20rem ;">
                <img src="gambar/bukuFlutter.jpg" class="card-img-top" alt="" style="width:296px; height: 296px;">
                <div class="card text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Buku Flutter</h5>
                        <p class="card-text">Berisi Materi Tentang Flutter untuk Pengembangan Aplikasi Android
                        </p>
                        <a href="inputBuku.php" class="btn btn-primary">Pinjam Buku</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-3" style="width: 20rem ;">
                <img src="gambar/logikaPemrogramanJava.jpg" class="card-img-top" alt=""
                    style="width:296px; height: 296px;">
                <div class="card text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Buku Logika Pemrograman</h5>
                        <p class="card-text">Berisi Materi Basic Pemrograman dengan Bahasa Pemrograman Java</p>
                        <a href="inputBuku.php" class="btn btn-primary">Pinjam Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" style="width: 20rem ;">
                <img src="gambar/bukuOOP.jpg" class=" card-img-top" alt="" style="width:296px; height: 296px;">
                <div class="card text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Buku Object Oriented Programming</h5>
                        <p class="card-text">Berisi Materi tentang Pemrograman yang berbasis Objek</p>
                        <a href="inputBuku.php" class="btn btn-primary">Pinjam Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" style="width: 20rem ;">
                <img src="gambar/bukuAlgoritmaPemrograman.jpg" class="card-img-top" alt=""
                    style="width:296px; height: 296px;">
                <div class="card text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Buku Algoritma Pemrograman</h5>
                        <p class="card-text">Berisi Materi Basic Pemrograman dan Struktur Data
                        </p>
                        <a href="inputBuku.php" class="btn btn-primary">Pinjam Buku</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" style="width: 20rem ;">
                <img src="gambar/bukuJarkom.jpg" class="card-img-top" alt="" style="width:296px; height: 296px;">
                <div class="card text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Buku Jaringan Komputer</h5>
                        <p class="card-text">Berisi Materi Tentang Jaringan Komputer Untuk Pemula
                        </p>
                        <a href="inputBuku.php" class="btn btn-primary">Pinjam Buku</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>