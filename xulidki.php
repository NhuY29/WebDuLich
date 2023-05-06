<?php
require 'conects.php';
if(isset($_POST['btn-submit'])){
    $hoten = $_POST['hoten'];
    $didong = $_POST['didong'];
    $ngaysinh = $_POST['ngaysinh'];
    $gioitinh = $_POST['gioitinh'];
    $CMND = $_POST['CMND'];
    $ngaycap = $_POST['ngaycap'];
    $passport = $_POST['passport'];
    $email = $_POST['email'];
    $ngaycap2 = $_POST['ngaycap2'];
    $ngayhethan = $_POST['ngayhethan'];
    $diachi = $_POST['diachi'];
    $magioithieu = $_POST['magioithieu'];
    $matkhau = $_POST['matkhau'];
    $sql = "INSERT INTO `user` (`hoten`,`didong`,`ngaysinh`,`gioitinh`,`CMND`,`ngaycap`,`passport`,`email`,`ngaycap2`,`ngayhethan`,`diachi`,`magioithieu`,`matkhau`) VALUE('$hoten','$didong','$ngaysinh','$gioitinh','$CMND',' $ngaycap',' $passport','$email','$ngaycap2','$ngayhethan','$diachi','$magioithieu','$matkhau')";
    $conn->query($sql);
}

?>