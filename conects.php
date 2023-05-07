<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "severdoan";

$conn = new mysqli($host,$username,$password,$dbname);

if($conn->connect_error){
    die("ket noi thanh cong" .$conn->connect_error);
   
}else{
     header("location: DangNhap.php");
}
?>
