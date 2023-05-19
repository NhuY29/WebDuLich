<?php
require 'conects.php';
if(isset($_POST['btn-submit1'])){
    $noiden = $_POST['noiden'];
   
    $sql = "INSERT INTO `tiemkiemnoiden` (`noiden`) VALUE('$noiden')";
    $conn->query($sql);
}

?>