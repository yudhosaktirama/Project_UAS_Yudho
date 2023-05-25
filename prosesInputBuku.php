<?php 
 session_start();
include 'koneksi.php';
$db = new database();

if (isset($_POST['input'])) {
    $idbuku = $_POST['idbuku'];
    $namabuku = $_POST['namabuku'];
    $namapeminjam = $_POST['namapeminjam'];
    $lamapinjam = $_POST['lamapinjam'];
    $tanggalpinjam = $_POST['tanggalpinjam'];

    $query  =$db->koneksi->prepare("INSERT INTO t_buku VALUES ('$idbuku', '$namabuku', '$namapeminjam','$lamapinjam','$tanggalpinjam')");
    $query->execute();;


    header("location:viewBuku.php");

    return $query;
   
}

$db->koneksi->close();







?>