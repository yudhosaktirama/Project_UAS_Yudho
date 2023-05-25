<?php 
class database{

    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "perpustakaan";
    var $koneksi = "";
    
        function __construct(){
            $this->koneksi = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
            
            if(!$this->koneksi){
                echo"KOneksi database gagal";
            }else{
                
            }
        }

    }
        
    
    



?>