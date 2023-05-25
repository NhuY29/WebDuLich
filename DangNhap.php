<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./filecss/DangNhap.css">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="./filejava/start.js">
    <title>Form Đăng Nhập</title>
</head>

<body class="preloading">
    <div class="loadi">
        <div class="loading">
            <img src="./img/cartoon-snail-loading-loading-gif-animation_2734139.png!bw700" alt="">
        </div>
    </div>
  
    <div class="main">
   
        <div class="formDK">
            <div class="fromdk-child">
            <br>
            <h2>Chào Mừng Quý Khách Đến Với <br> <br> VietTravel</h2>
            <div class="btn">
                <div class="logIn">
                    <b>Đăng Nhập</b>
                </div>
                <div class="register">
                    <b><a href="./DangKy.html">Đăng Ký</a></b>
                </div>
            </div> <br>
            <form action="xulydangnhap.php" style="margin-left: 100px;"  method = "post">
                <div class="fix1">
                    <label for="name"><b>Số điện thoại hoặc email</b></label>
                    <span class="required">*</span> <br>
                    <input type="text" name="email" id="name" required>
                </div> <br>
                <!-- required được sử dụng để đánh dấu trường thông tin là bắt buộc  -->
                <div class="fix1">
                    <label for="name"><b>Mật Khẩu</b></label>
                    <span class="password">*</span> <br>
                    <input type="text" name="matkhau" id="name" required>
                </div>
                <div style="margin-left: 250px; margin-top: 2%;"><a href="">Lấy lại mật khẩu</a></div> <br>
                <div><button type="submit"
                        style="width: 370px; height: 50px; border-radius: 5px ; border: 2px solid #fd5056;background-color:#fd5056; color: white; cursor: pointer;">ĐĂNG
                        NHẬP <i class="fa-solid fa-arrow-right-to-bracket"></i></button>
                </div>
                <p><b>HOẶC</b></p>
                <div class="other">
                    <div class="facebook"> <i class="fa-brands fa-facebook"></i>
                        <b>Tiếp Tục Với FaceBook</b>
                    </div>
                    <div class="google"> <i
                            class="fa-brands fa-google"></i><b> Tiếp Tục Với Google</b></div>
                </div>
            </form>
        </div>
        </div>
    </div>
    <footer>
        <div class="footer-top">


            <div class="In">
                <div class="tieude">
                    <h2><b>Du lịch trong nước</b></h2>
                </div>

                <div class="in-uberator" >
                    <ul class="uberator phaaiii" style="width: 50%; " >
                        <li>Hà Nội</li>
                        <li>Hải Phòng</li>
                        <li>Hạ Long</li>
                        <li>Huế</li>
                        <li>Quảng Bình</li>
                        <li>Đà Nẵng</li>
                        <li>Quảng Nam</li>
                        <li>Nha Trang</li>
                    </ul>
                    <ul class="uberator" style=" width: 50%;">
                        <li>Đà Lạt</li>
                        <li>Phan Thiết</li>
                        <li>Bà Rịa-Vũng Tàu</li>
                        <li>Phú Quốc</li>
                        <li>Cần Thơ</li>
                        <li>Hà Tiên</li>
                        <li>Bắc Kạn</li>
                        <li>Hà Giang</li>
                    </ul>


                </div>

            </div>
            <div class="DongTour">
                <div class="tieude">
                    <h2><b>Dòng Tour</b></h2>
                </div>
                <div class="in-uberator">
                    <ul class="uberator">

                        <li>Cao Cấp</li>
                        <li>Tiêu Chuẩn</li>
                        <li>Tiết Kiệm</li>
                        <li>Giá Tốt</li>
                    </ul>
                </div>


            </div>
            <div class="LienHe">
                <div class="tieude">
                    <h2><b>Liên Hệ</b></h2>
                </div>
                <div class="in-uberator">
                    <ul class="uberator">
                        <li>Xã Nhị Bình, Huyện Châu Thành, TG</li>
                        <li>0393928815</li>
                        <li>y021101022@tgu.edu.vn</li>
                        <li>Từ 8.00-22.00 hằng ngày</li>
                    </ul>
                </div>


            </div>
            <div class="QR">
                <div class="tieude">
                    <h2><b>Ứng Dụng Di Động</b></h2>
                </div>



                <div class="in-uberator chanfoot" style="display: block;">
                    <div class="chage-footer1">
                        <div class="chage-footer-child " style="width: 45%;">

                            <ul class="QR-download" style="list-style-type: none;">
                        <li> <a href=""><img src="./img/play.png" alt=""></a></li>
                        <li><a href=""><img src="./img/ios.png" alt=""></a></li>
                    </ul>
                        </div>
                         
                    </div>
                   
                    <div class="chage-footer1">
                        <div class="chage-footer-child">
                          <ul class="QR-download" style="list-style-type: none; ">
                        <li>
                            <img src="./img/QR1.png" alt="">
                        </li>
                        <li><img src="./img/QR2.png" alt=""></li>
                        </div>
                   


                    </ul>

</div>

                </div>


            </div>

        </div>




        <div class="footer-bottom">
            <div class="ChungNhan itembot">
                <div class="tieude">
                    <h2><b>Chứng Nhận</b></h2>
                </div>
                <div class="in-uberator testthu">
                    <ul class="uberator-bottom" style="list-style-type: none;">
                        <li><img src="./img/chungnhan1.png" alt=""></li>
                        <li> <img src="./img/chungnhan2.png" alt=""></li>
                    </ul>

                </div>


            </div>
            <div class="ThanhToan itembot">
                <div class="tieude">
                    <h2><b>Chấp Nhận Thanh Toán</b></h2>

                </div>
<div class="footer-chagebottom">
<div class="footerrr">

<ul class="uberator-thanhtoan chung" style="list-style-type: none;">
                    <li><img src="./img/anh1.png" alt=""> </li>
                    <li> <img src="./img/anh2.png" alt=""></li>
                    <li><img src="./img/anh3.png" alt=""> </li>
                </ul>
                <ul class="uberator-thanhtoan chung" style="list-style-type: none;">
                    <li><img src="./img/anh4.png" alt=""></li>
                    <li> <img src="./img/anh5.png" alt=""></li>
                    <li> <img src="./img/anh6.png" alt=""></li>
                </ul>
                <ul class="uberator-thanhtoan chung" style="list-style-type: none;">
                    <li> <img src="./img/anh7.png" alt=""></li>
                    <li><i class="ti-money"></i></li>
                    <li> <img src="./img/anh8.png" alt=""></li>

                </ul>
</div>
 
</div>
               






            </div>

            <div class="ThongTin itembot">
                <div class="tieude">
                    <h2><b>Thông Tin</b></h2>
                </div>
                <div class="in-uberator">
                <ul class="uperator-bottom chung">
                    <li>Tạp Chí Du Lịch</li>
                    <li>Cẩm Nang Du Lịch</li>
                    <li>Tin Tức</li>
                    <li>SiteMap</li>
                    <li>FAQs</li>
                    <li>Chính Sách Riêng Tư</li>
                    <li>Thỏa Thuận Sử Dụng</li>
                </ul>
</div>


            </div>

            <div class="MXH itembot">
                <div class="tieude">
                    <h2><b>Mạng Xã Hội</b></h2>
                </div>
                <div class="in-uberator">
                    <ul class=" dm chung" style="list-style-type: none;">
                        <li> <i class="fa-brands fa-facebook-f"></i></li>
                        <li><i class="fa-brands fa-square-instagram"></i></li>
                        <li><i class="fa-brands fa-youtube"></i></li>
                        <li> <i class="fa-brands fa-tiktok"></i></li>
                        <li class="metnha"> <button> <i class="fa-solid fa-phone-volume "></i> 1900 1000</button>
                        </li>
                    </ul>



                </div>

            </div>

        </div>



    </footer>
    <script src="./filejava/start.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous">
        </script>
    <script>
        $(window).on('load',function(event){
    $('body').removeClass(".preloading")
    $('.loadi').delay(3000).fadeOut('fast');
    });
    </script>
</body>
</html>