<?php 
 session_start();
include 'koneksi.php';
$koneksiYudho = new database();

if (isset($_POST['input'])) {
    $idpengguna = $_POST['idpengguna'];
    $password = $_POST['passwordpengguna'];
    $namapengguna = $_POST['namapengguna'];
    $alamatpengguna = $_POST['alamatpengguna'];
    $nohppengguna = $_POST['nohppengguna'];

    $query  =$koneksiYudho->koneksi->prepare("INSERT INTO t_user VALUES ('$idpengguna', '$password', '$namapengguna','$alamatpengguna','$nohppengguna')");
    

    if ($query) {
        $result = $query->execute();
        header("location:index.php");
        return $result;
        
    }else {
        die("Oops! Terjadi kesalahan");
    }
    
   
    
    
    
  
   
}









?>