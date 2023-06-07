<?php
$email = $_POST['email'];
$matkhau = $_POST['matkhau'];
require 'conects.php';

$conn = new mysqli($host,$username,$password,$dbname);
$sql = "SELECT * FROM user WHERE email = '$email'";
$result = $conn->query($sql)->fetch_assoc();
if($result['matkhau'] == $matkhau ){
    header("location: star.php");
}else{
    echo "sai dang nhap roi";

}

?>