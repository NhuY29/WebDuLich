<?php
$email = $_POST['email'];
$matkhau = $_POST['matkhau'];
$host = "localhost";
$username = "root";
$password = "";
$dbname = "severdoan";

$conn = new mysqli($host,$username,$password,$dbname);
$sql = "SELECT * FROM user WHERE email = '$email'";
$result = $conn->query($sql)->fetch_assoc();
if($result['matkhau'] == $matkhau ){
    header("location: index.html");
}else{
    echo "sai dang nhap roi";

}

?>