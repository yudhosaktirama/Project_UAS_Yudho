<?php 
session_start();
if (isset($_POST['edit'])) {
    include("koneksi.php");
    $db = new database();
    $idBuku = $_POST['idbuku'];
    $namabuku= $_POST['namabuku'];
    $namapeminjam = $_POST['namapeminjam'];
    $lamapinjam = $_POST['lamapinjam'];
    $tanggalpinjam = $_POST['tanggalpinjam'];

    $query = $db->koneksi->prepare("UPDATE t_buku SET id_buku = '$idBuku', 
    nama_buku = '$namabuku', nama_peminjam = '$namapeminjam', lama_pinjam = '$lamapinjam', tanggal_pinjam = '$tanggalpinjam' WHERE id_buku= '$idBuku'");
    $query->execute();

header("location:viewBuku.php");

    return $query;

}

$db->koneksi->close();


?>