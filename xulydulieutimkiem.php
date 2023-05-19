<?php
$noiden = $_POST['noiden'];
$host = "localhost";
$username = "root";
$password = "";
$dbname = "severdoan";
$conn = new mysqli($host,$username,$password,$dbname);
$sql = "SELECT * FROM tiemkiemnoiden WHERE noiden like '%$noiden%'";
$result1 = $conn->query($sql)->fetch_assoc();
if($result1['noiden'] == "Ha Noi" ){
    header("location: index.html");
}else{
    
    header("location: timkiem.html");
}
if($result1['noiden'] == "Thanh Hoa" ){
    header("location: MienTay.html");
}else{
    
    header("location: timkiem.html");
}
// $result = mysqli_query($conn,$sql);
// while($row = mysqli_fetch_array($result)){
//     header("location: index.html");
// }
?>