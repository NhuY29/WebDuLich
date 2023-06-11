<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./filejava/start.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./filecss/thue.css">
    <title>Thuê Xe Cùng YB</title>
</head>

<body class="preloading">
    <div class="loadi">
        <div class="loading">
            <img src="./img/cartoon-snail-loading-loading-gif-animation_2734139.png!bw700" alt="">
        </div>
    </div>
    <button id="switch-mode">
        <i class="bi bi-moon-stars-fill"></i>
    </button>
    <div class="main">
    <input type="checkbox" name="" id="" class="chekboxxxx">
        <div class="menu-icons">
            <div class="menu-line">

            </div>
        </div>
        <div class="menu-items">
            <ul class="uberator-items">
                <li><a href="./star.php">Trang Chủ</a></li>
                <li><a href="./TinTuc.php">Tin Tức</a></li>
                <li><a href="./thue.php">Thuê Xe</a></li>
                <li><a href="./bay.php">Vé Máy Bay</a></li>
                <li><a href="./index.php">Đăng Xuất</a></li>
            </ul>
        </div>

        <div class="header-above">
            <div class="imglogo-header">
                <a href="./star.php"><img src="./img/logo.png" alt="" class="photo"></a>
            </div>



            <div class="menu-left-div">
                <ul class="menu-left ">
                    <li class="list-menu">
                        <h3 onclick="menudulich()">Du Lịch <i class="fa-solid fa-angle-down"></i> </h3>

                    </li>
                    <!-- <li class="list-menu"><a href=""><b>Liên Hệ</b></a></li> -->
                    <!-- <li class="list-menu"><h3 onclick="menutintuc()">Vận Chuyển <i class="fa-solid fa-angle-down"
                                onclick="menutintuc()"></i></h3>
                        <ul class="ubertor-news menunone">
                            <li class="list-news"><a href="thuexe.html">Thuê Xe </a></li>
                            <li class="list-news"><a href="">Vé Máy Bay</a></li>
                        </ul>
                    </li> -->
                    <li class="list-menu">
                        <h3 onclick="menukhuyenmai()">Khuyến Mãi <i class="fa-solid fa-angle-down"></i></h3>
                    </li>
                    <li class="list-menu"><a href="./LienHe.php">
                            <h3>Liên Hệ</h3>
                        </a></li>
                    <li class="list-menu"><a href="./TravelPlus.php">
                            <h3>VietTravelPlus</h3>
                        </a> </li>
                </ul>
            </div>
            <div class="menu-right-div">
                <ul class="menu-right">
                    <li class="search list-menu">
                        <form action="xulydulieutimkiem.php" method="post">
                            <input type="text" placeholder="Bắt đầu tìm kiếm..." name="noiden">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </li>
                    <!-- <li class="logOn list-menu"><a href="./DangNhap.html" target="_parent"><i
                                class="fa-regular fa-user"></i></a></li> -->
                </ul>
            </div>


        </div>
        <div class="main-dropdown">
            <div class="menu-dropdown goout">
                <div class="menu-dropdown-item">
                    <ul class="upberator-dropdown">
                        <li class="list-dropdown lisdp"> <B><a href="./Mien Bac.php">TOUR MIỀN BẮC</a></B></li>
                        <li class="list-dropdown"><a href="./Ha Noi.php">Du lịch Hà Nội</a></li>
                        <li class="list-dropdown"><a href="./Hai Phong.php">Du lịch Hải Phòng</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Hạ Long</a></li>
                        <li class="list-dropdown"><a href="">Du lịch Bắc Ninh</a></li>
                        <li class="list-dropdown"><a href="">Du lịch Phú Thọ</a></li>
                        <li class="list-dropdown"><B><a href="./Mien Bac.php"> Xem tất cả</a></B> </li>
                    </ul>
                </div>
                <div class="menu-dropdown-item">
                    <ul class="upberator-dropdown">
                        <li class="list-dropdown lisdp"> <B><a href="./Mien Trung.php">TOUR MIỀN TRUNG </a></B></li>
                        <li class="list-dropdown"><a href="./Hue.php">Du lịch Huế</a></li>
                        <li class="list-dropdown"><a href="./Quang Tri.php">Du lịch Quảng Trị</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Quảng Bình </a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Đà Nẵng </a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Quảng Nam</a></li>
                        <li class="list-dropdown"><B><a href="./Mien Trung.php"> Xem tất cả</a></B> </li>
                    </ul>
                </div>
                <div class="menu-dropdown-item">
                    <ul class="upberator-dropdown">
                        <li class="list-dropdown lisdp"> <B><a href="./Mien Tay.php">TOUR MIỀN TÂY NAM BỘ </a></B></li>
                        <li class="list-dropdown"><a href="./Phu Quoc.php"> Du lịch Phú Quốc </a></li>
                        <li class="list-dropdown"><a href="./Tien Giang.php"> Du lịch Tiền Giang</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Cần Thơ </a></li>
                        <li class="list-dropdown"><a href="">Du lịch Vĩnh Long</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Sóc Trăng</a></li>
                        <li class="list-dropdown"><B><a href="/Mien Tay.php"> Xem tất cả</a></B> </li>
                    </ul>
                </div>
                <div class="menu-dropdown-item">
                    <ul class="upberator-dropdown">
                        <li class="list-dropdown lisdp"> <B><a href="./Mien Dong.php">TOUR MIỀN ĐÔNG NAM BỘ </a></B>
                        </li>
                        <li class="list-dropdown"><a href="./Dong Nai.php"> Du lịch Đồng Nai</a></li>
                        <li class="list-dropdown"><a href="./Vung Tau.php"> Du lịch Bà Rịa - Vũng Tàu</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Côn Đảo </a></li>
                        <li class="list-dropdown"><a href=""> Du lịch TP. Hồ Chí Minh</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Tây Ninh</a></li>
                        <li class="list-dropdown"><B><a href="./Mien Dong.php"> Xem tất cả</a></B> </li>

                    </ul>
                </div>
                <i class="fa-solid fa-xmark iconclosed" onclick="closeddmenu()"></i>
            </div>
        </div>
        <div class="main-dropdown2">
            <div class="menu-dropdown2">
                <ul class="uperator-dropdown2">
                    <li class="list-dropdown2"> <a href="./KhuyenMai1.php">Vietravel & Sacombank tung ưu đãi “Tiền về đầy ví - Du hí thả
                            ga” </a> </li>
                    <li class="list-dropdown2"> <a href="./KhuyenMai2.php"> Vietravel & JCB tung ưu đãi “Thanh toán liền tay - Nhận ngay
                            deal xịn”</a></li>
                    <li class="list-dropdown2"> <a href="./KhuyenMai3.php"> Vietravel triển khai chương trình ưu đãi cùng VNPAY “Trúng
                            deal to – Du lịch chẳng lo”</a></li>
                    <li class="list-dropdown2"> <a href="./KhuyenMai4.php"> Vietravel & Sacombank: Quẹt thẻ liền tay - Giảm ngay 1 triệu
                            đồng</a></li>
                </ul>
                <i class="fa-solid fa-xmark iconclosed" onclick="closeddmenu()"></i>
            </div>
        </div>

        <div class="content">
            <div class="de">
                <h1>YB - CÙNG BẠN TRÊN MỌI HÀNH TRÌNH</h1>
            </div>
            <div class="car">
                <div class="car-left">
                    <div class="car-left-above">
                        <img src="./img/Vespa-icon.png" alt=""> <br>
                        <b>Xe Máy</b>
                    </div>
                    <div class="car-left-below">
                        <img src="./img/xeoto.png" alt=""> <br>
                        <b>Xe OTO</b>
                    </div>
                </div>
                <div class="car-right">
                    <div>
                        <label for="Địa Điểm">Địa Điểm</label> <br>
                        <input type="text" placeholder=" Nhập thành phố, quận, địa chỉ...">
                        <!-- <hr> -->
                    </div>
                    <div class="Time">
                        <label for="Bắt Đầu">Bắt Đầu</label> <br>
                        <div class="Times">
                            <div><input type="date"></div>
                            <div><select>
                                    <option value="0">00:00 </option>
                                    <option value="30">00:30 </option>
                                    <option value="60">01:00 </option>
                                    <option value="90">01:30 </option>
                                    <option value="120">02:00 </option>
                                    <option value="150">02:30 </option>
                                    <option value="180">03:00 </option>
                                    <option value="210">03:30 </option>
                                    <option value="240">04:00 </option>
                                    <option value="270">04:30 </option>
                                    <option value="300">05:00 </option>
                                    <option value="330">05:30 </option>
                                    <option value="360">06:00 </option>
                                    <option value="390">06:30 </option>
                                    <option value="420">07:00 </option>
                                    <option value="450">07:30 </option>
                                    <option value="480">08:00 </option>
                                    <option value="510">08:30 </option>
                                    <option value="540">09:00 </option>
                                    <option value="570">09:30 </option>
                                    <option value="600">10:00 </option>
                                    <option value="630">10:30 </option>
                                    <option value="660">11:00 </option>
                                    <option value="690">11:30 </option>
                                    <option value="720">12:00 </option>
                                    <option value="750">12:30 </option>
                                    <option value="780">13:00 </option>
                                    <option value="810">13:30 </option>
                                    <option value="840">14:00 </option>
                                    <option value="870">14:30 </option>
                                    <option value="900">15:00 </option>
                                    <option value="930">15:30 </option>
                                    <option value="960">16:00 </option>
                                    <option value="990">16:30 </option>
                                    <option value="1020">17:00 </option>
                                    <option value="1050">17:30 </option>
                                    <option value="1080">18:00 </option>
                                    <option value="1110">18:30 </option>
                                    <option value="1140">19:00 </option>
                                    <option value="1170">19:30 </option>
                                    <option value="1200">20:00 </option>
                                    <option value="1230">20:30 </option>
                                    <option value="1260">21:00 </option>
                                    <option value="1290">21:30 </option>
                                    <option value="1320">22:00 </option>
                                    <option value="1350">22:30 </option>
                                    <option value="1380">23:00 </option>
                                    <option value="1410">23:30 </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="Time">
                        <label for="Kết Thúc">Kết Thúc</label> <br>
                        <div class="Times">
                            <div><input type="date"></div>
                            <div><select>
                                    <option value="0">00:00 </option>
                                    <option value="30">00:30 </option>
                                    <option value="60">01:00 </option>
                                    <option value="90">01:30 </option>
                                    <option value="120">02:00 </option>
                                    <option value="150">02:30 </option>
                                    <option value="180">03:00 </option>
                                    <option value="210">03:30 </option>
                                    <option value="240">04:00 </option>
                                    <option value="270">04:30 </option>
                                    <option value="300">05:00 </option>
                                    <option value="330">05:30 </option>
                                    <option value="360">06:00 </option>
                                    <option value="390">06:30 </option>
                                    <option value="420">07:00 </option>
                                    <option value="450">07:30 </option>
                                    <option value="480">08:00 </option>
                                    <option value="510">08:30 </option>
                                    <option value="540">09:00 </option>
                                    <option value="570">09:30 </option>
                                    <option value="600">10:00 </option>
                                    <option value="630">10:30 </option>
                                    <option value="660">11:00 </option>
                                    <option value="690">11:30 </option>
                                    <option value="720">12:00 </option>
                                    <option value="750">12:30 </option>
                                    <option value="780">13:00 </option>
                                    <option value="810">13:30 </option>
                                    <option value="840">14:00 </option>
                                    <option value="870">14:30 </option>
                                    <option value="900">15:00 </option>
                                    <option value="930">15:30 </option>
                                    <option value="960">16:00 </option>
                                    <option value="990">16:30 </option>
                                    <option value="1020">17:00 </option>
                                    <option value="1050">17:30 </option>
                                    <option value="1080">18:00 </option>
                                    <option value="1110">18:30 </option>
                                    <option value="1140">19:00 </option>
                                    <option value="1170">19:30 </option>
                                    <option value="1200">20:00 </option>
                                    <option value="1230">20:30 </option>
                                    <option value="1260">21:00 </option>
                                    <option value="1290">21:30 </option>
                                    <option value="1320">22:00 </option>
                                    <option value="1350">22:30 </option>
                                    <option value="1380">23:00 </option>
                                    <option value="1410">23:30 </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="btn"> <button onclick="window.location.href ='thuexe.php'"><i class="fa-solid fa-magnifying-glass"></i>TÌM XE NGAY</button></div>
                </div>
            </div>
        </div>
        <div class="de">
            <h1>Hướng Dẫn Thuê Xe</h1>
        </div>
        <div class="HD">
            <div class="HD-img">
                <img src="./img/hdxe1.svg" alt="">
                <b>Đặt xe với YB</b>
            </div>
            <div class="HD-img">
                <img src="./img/hdxe2.svg" alt="">
                <b>Nhận xe hoặc giao xe tận nơi</b>
            </div>
            <div class="HD-img">
                <img src="./img/hdxe3.svg" alt="">
                <b>Trải Nghiệm chuyến đi</b>
            </div>
            <div class="HD-img">
                <img src="./img/hdxe4.svg" alt="">
                <b>Kết thúc giao dịch</b>
            </div>
        </div>
        <div class="de">
            <h1>Một số mặt xe tham khảo</h1>
        </div>
        <div class="MatXeMay">
            <div class="xe">
                <img src="./img/xemay1.png" alt="">
                <p>Yamaha Janus 2020</p>
                <p>Giá thuê: 1,000,000₫</p>
            </div>
            <div class="xe">
                <img src="./img/xemay2.png" alt="">
                <p>Sirius Fi</p>
                <p>Giá thuê: 300,000₫</p>
            </div>
            <div class="xe">
                <img src="./img/xemay3.png" alt="">
                <p>SH mode</p>
                <p>Giá thuê: 1,200,000₫</p>
            </div>
            <div class="xe">
                <img src="./img/xemay4.jpg" alt="">
                <p>Future Fl</p>
                <p>Giá thuê: 320,000₫</p>
            </div>
        </div>
        <div class="MatXeHoi">
            <div class="xe">
                <img src="./img/xehoi5.png" alt="">
                <p>Yamaha Janus 2020</p>
                <p>Giá thuê: 800,000₫</p>
            </div>
            <div class="xe">
                <img src="./img/xehoi3.png" alt="">
                <p>Luscombe</p>
                <p>Giá thuê: 300,000₫</p>
            </div>
            <div class="xe">
                <img src="./img/xehoi6.webp" alt="">
                <p>Hampshire</p>
                <p>Giá thuê: 1,000,000₫</p>
            </div>
            <div class="xe">
                <img src="./img/xehoi7.webp" alt="">
                <p>Surrey</p>
                <p>Giá thuê: 520,000₫</p>
            </div>
        </div>
        <div class="footer">
            <div>
                <h1>Bạn Muốn Thuê Xe</h1>
                <h3>Hãy đăng kí để có phương tiện đi phượt thỏa thích cùng YB <br> "Biểu tượng của sự tự do. Tôi muốn
                    khám phá thể giới."</h3>
            </div>
        </div>
    </div>
</body>
<script src="./filejava/start.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous">
        </script>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop()) {
                    $(".header-above").addClass('sticky');
                }
                else {
                    $(".header-above").removeClass('sticky');
                }

            });
        });
    </script>
    <script>
        $(window).on('load', function (event) {
            $('body').removeClass(".preloading")
            $('.loadi').delay(3000).fadeOut('fast');
        });
    </script>
     <script>
        const body = document.body;
        const switch_mode = document.querySelector('#switch-mode i');
        // Load mode 
        let mode = localStorage.getItem('darkmode');
        if (mode == 'true') {
            body.classList.add('dark');
            switch_mode.className = "bi bi-brightness-high-fill";
        }
        switch_mode.addEventListener('click', () => {
            switch_mode.classList.toggle('bi-moon-stars-fill');
            switch_mode.classList.toggle('bi-brightness-high-fill');
            let mode = body.classList.toggle('dark');
            // save mode 
            localStorage.setItem('darkmode', mode);
        });
    </script>
</html>