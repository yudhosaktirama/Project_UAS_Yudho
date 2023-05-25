<?php 
 session_start();
include 'koneksi.php';
$db = new database();

if (isset($_GET['idbuku'])) {
    $id = ($_GET['idbuku']);

    $query = $db->koneksi->prepare("SELECT * FROM t_buku WHERE id_buku='$id'");
    $query->execute();
    $hasil=$query->get_result();
    

    $data = mysqli_fetch_array($hasil);
    $idBuku = $data["id_buku"];
    $namabuku = $data["nama_buku"];
    $namapeminjam = $data["nama_peminjam"];
    $lamapinjam = $data["lama_pinjam"];
    $tanggalpinjam = $data["tanggal_pinjam"];
    
}else {
    header("location:viewBuku.php");
}
?>
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
    <br>
    <br>
    <br>
    <br>

    <div class="container-sm bg-dark text-light align-content-center align-items-center text-center"
        style="width: 50%;">
        <h1>Form EditBuku</h1>
        <br>
        <form action="prosesEditBuku.php" id="form_daftar" method="post">
            <div class="row mb-4">
                <label for="inputEmail3" class="col-sm-4 col-form-label">ID Buku</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="idbuku" name="idbuku" style="width:70%;"
                        value="<?php echo $idBuku ?>" required>
                </div>
            </div>
            <div class="row mb-4">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Nama Buku</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="namabuku" name="namabuku" style="width:70%;"
                        value="<?php echo $namabuku ?>" required>
                </div>
            </div>
            <div class=" row mb-4">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Nama Peminjam</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="namapeminjam" name="namapeminjam" style="width:70%;"
                        value="<?php echo $namapeminjam ?>" required>
                </div>
            </div>
            <div class="row mb-4">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Lama Pinjam</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="lamapinjam" name="lamapinjam" style="width:70%;"
                        value="<?php echo $lamapinjam ?>" required>
                </div>
            </div>
            <div class="row mb-4">
                <label for="inputPassword3" class="col-sm-4 col-form-label">Tanggal Pinjam</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tanggalpinjam" name="tanggalpinjam" style="width:70%;"
                        value="<?php echo $tanggalpinjam ?>" required>
                </div>
            </div>
            <div class="row mb-4">
                <center><input type="submit" class="bg-primary justify-content-center align-content-center text-light"
                        value="Update Data" name="edit" style="width: 20%;"></center>
            </div>
            <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-center">
                <a href="belanja.php" type="button" class="btn btn-primary ">Kembali</a>
            </div>

        </form>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>