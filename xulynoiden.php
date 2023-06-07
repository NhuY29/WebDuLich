<?php
require 'conects.php';

$conn = new mysqli($host,$username,$password,$dbname);
if(isset($_POST['btn-submit1'])){
    $noiden = $_POST['noiden'];
   
    $sql = "INSERT INTO `tiemkiemnoiden` (`noiden`) VALUE('$noiden')";
    $conn->query($sql);
}

?>