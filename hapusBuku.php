<?php 
 session_start();
include 'koneksi.php';
$db = new database();

if (isset($_GET["idbuku"])) {
    
    $id = $_GET["idbuku"];

    $query = $db->koneksi->prepare("DELETE FROM t_buku WHERE id_buku='$id'");
    $query->execute();

    header("location:viewBuku.php");
    return $query;
    
}


$db->koneksi->close();





?>