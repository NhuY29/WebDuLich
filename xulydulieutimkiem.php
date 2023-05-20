<?php
$noiden = $_POST['noiden'];
$host = "localhost";
$username = "root";
$password = "";
$dbname = "severdoan";
$conn = new mysqli($host,$username,$password,$dbname);
$sql = "SELECT * FROM tiemkiemnoiden WHERE noiden like '%$noiden%'";
$result1 = $conn->query($sql)->fetch_assoc();
// $arr = ['Ha Noi','Mien Tay','Mien Trung'];
// if($result1['noiden'] == "Ha Noi" ){
//     header("location: index.html");
// }else{
    
//     header("location: timkiem.html");
// };
// // Mien Tay 
// if($result1['noiden'] == "Mien Tay" ){
//     header("location: MienTay.html");
// }else{
    
//     header("location: timkiem.html");
// };
// // Mien Dong
// if($result1['noiden'] == "Mien Dong" ){
//     header("location: MienDong.html");
// }else{
    
//     
// };

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
 $oke =  $row['noiden'] ;
$cach = " ";
if($result1['noiden']){
     header("location: $oke.html"); 
}
else{
    header("location: timkiem.html");
}

   

?>