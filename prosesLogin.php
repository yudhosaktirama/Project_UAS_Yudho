<?php 
 session_start();
require_once("koneksi.php");
$db = new database();
$conn = $db->koneksi;

if(isset($_POST['submit'])){
    $idpengguna = strip_tags($_POST['idpengguna']);
    $password = strip_tags($_POST['passwordpengguna']);

$query_sql = "SELECT * FROM t_user WHERE id_user = '$idpengguna' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if(mysqli_num_rows($result) > 0){
    session_start();
    header("location:home.php");
}else{
    
    header("location:index.php");
}
}

?>