<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./filecss/DiemDen.css">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
<link rel="stylesheet" href="./filejava/start.js">
    
    <title>Du Lịch Quảng Trị</title>
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
         <li><a href="./index.html">Trang Chủ</a></li>
           <li><a href="./TinTuc.html">Tin Tức</a></li>
           <li><a href="./thue.html">Thuê Xe</a></li>
           <li><a href="./bay.html">Vé Máy Bay</a></li>
           <li><a href="">Đăng Xuất</a></li>
         </ul>
        </div>
         
        <div class="header-above">
            <div class="imglogo-header">
                <a href="index.html"><img src="./img/logo.png" alt="" class="photo"></a>
            </div>


            <div class="menu-left-div">
                <ul class="menu-left ">
                    <li class="list-menu"><h3 onclick="menudulich()">Du Lịch <i class="fa-solid fa-angle-down"></i> </h3>

                    </li>
                    <!-- <li class="list-menu"><a href=""><b>Liên Hệ</b></a></li> -->
                    <!-- <li class="list-menu"><h3 onclick="menutintuc()">Vận Chuyển <i class="fa-solid fa-angle-down"
                                onclick="menutintuc()"></i></h3>
                        <ul class="ubertor-news menunone">
                            <li class="list-news"><a href="thuexe.html">Thuê Xe </a></li>
                            <li class="list-news"><a href="">Vé Máy Bay</a></li>
                        </ul>
                    </li> -->
                    <li class="list-menu"><h3 onclick="menukhuyenmai()">Khuyến Mãi <i
                                class="fa-solid fa-angle-down"></i></h3></li>
                    <li class="list-menu"><a href="LienHe.html"><h3>Liên Hệ</h3></a></li>
                    <li class="list-menu"><a href=""><h3>VietTravelPlus</h3></a> </li>
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
                        <li class="list-dropdown lisdp"> <B><a href="./MienBac.html">TOUR MIỀN BẮC</a></B></li>
                        <li class="list-dropdown"><a href="./HaNoi.html">Du lịch Hà Nội</a></li>
                        <li class="list-dropdown"><a href="./HaiPhong.html">Du lịch Hải Phòng</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Hạ Long</a></li>
                        <li class="list-dropdown"><a href="">Du lịch Bắc Ninh</a></li>
                        <li class="list-dropdown"><a href="">Du lịch Phú Thọ</a></li>
                        <li class="list-dropdown"><B><a href="./MienBac.html"> Xem tất cả</a></B> </li>
                    </ul>
                </div>
                <div class="menu-dropdown-item">
                    <ul class="upberator-dropdown">
                        <li class="list-dropdown lisdp"> <B><a href="./MienTrung.html">TOUR MIỀN TRUNG </a></B></li>
                        <li class="list-dropdown"><a href="./Hue.html">Du lịch Huế</a></li>
                        <li class="list-dropdown"><a href="./QuangTri.html">Du lịch Quảng Trị</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Quảng Bình </a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Đà Nẵng </a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Quảng Nam</a></li>
                        <li class="list-dropdown"><B><a href="./MienTrung.html"> Xem tất cả</a></B> </li>
                    </ul>
                </div>
                <div class="menu-dropdown-item">
                    <ul class="upberator-dropdown">
                        <li class="list-dropdown lisdp"> <B><a href="./MienTay.html">TOUR MIỀN TÂY NAM BỘ </a></B></li>
                        <li class="list-dropdown"><a href="./PhuQuoc.html"> Du lịch Phú Quốc </a></li>
                        <li class="list-dropdown"><a href="./TienGiang.html"> Du lịch Tiền Giang</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Cần Thơ </a></li>
                        <li class="list-dropdown"><a href="">Du lịch Vĩnh Long</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Sóc Trăng</a></li>
                        <li class="list-dropdown"><B><a href="/MienTay.html"> Xem tất cả</a></B> </li>
                    </ul>
                </div>
                <div class="menu-dropdown-item">
                    <ul class="upberator-dropdown">
                        <li class="list-dropdown lisdp"> <B><a href="./MienDong.html">TOUR MIỀN ĐÔNG NAM BỘ </a></B></li>
                        <li class="list-dropdown"><a href="./DongNai.html"> Du lịch Đồng Nai</a></li>
                        <li class="list-dropdown"><a href="./VungTau.html"> Du lịch Bà Rịa - Vũng Tàu</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Côn Đảo </a></li>
                        <li class="list-dropdown"><a href=""> Du lịch TP. Hồ Chí Minh</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Tây Ninh</a></li>
                        <li class="list-dropdown"><B><a href="./MienDong.html"> Xem tất cả</a></B> </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="main-dropdown2">
            <div class="menu-dropdown2">
                <ul class="uperator-dropdown2">
                    <li class="list-dropdown2"> <a href="">Vietravel & Sacombank tung ưu đãi “Tiền về đầy ví - Du hí thả
                            ga” </a> </li>
                    <li class="list-dropdown2"> <a href=""> Vietravel & JCB tung ưu đãi “Thanh toán liền tay - Nhận ngay
                            deal xịn”</a></li>
                    <li class="list-dropdown2"> <a href=""> Vietravel triển khai chương trình ưu đãi cùng VNPAY “Trúng
                            deal to – Du lịch chẳng lo”</a></li>
                    <li class="list-dropdown2"> <a href=""> Vietravel & Sacombank: Quẹt thẻ liền tay - Giảm ngay 1 triệu
                            đồng</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="left testhu">
                <div>
                    <h2 style="color: #2D4271;">Lọc Kết Quả</h2>
                </div>
                <div class="left-text">
                    <h3 >Quảng Trị</h3>
                </div>

                <div>
                    <h4 style="color: #2D4271;">Loại Hình Tour</h4> <br>
                    <select name="LoaiTour" id="">
                        <option value="----------">------Tất Cả-----</option>
                        <option value="Trọn Gói">Tour Trọn Gói</option>
                        <option value="Gia Đình">Tour Gia Đình</option>
                    </select>
                </div>


                <div>
                    <h4 style="color: #2D4271;">Điểm Đi</h4> <br>
                    <select name="Điểm Đến">
                        <option value="0">--Chọn điểm đến--</option>
                        <option value="99">An Giang</option>
                        <option value="53">Bà Rịa - Vũng Tàu</option>
                        <option value="130">Bắc Kạn</option>
                        <option value="206">Bạc Liêu</option>
                        <option value="33">Bắc Ninh</option>
                        <option value="188">Bến Tre</option>
                        <option value="94">Bình Định</option>
                        <option value="367">Bình Dương</option>
                        <option value="369">Bình Phước</option>
                        <option value="194">Bình Thuận</option>
                        <option value="47">Buôn Ma Thuột</option>
                        <option value="137">Cà Mau</option>
                        <option value="56">Cần Thơ</option>
                        <option value="129">Cao Bằng</option>
                        <option value="192">Côn Đảo</option>
                        <option value="45">Đà Lạt</option>
                        <option value="42">Đà Nẵng</option>
                        <option value="341">Đắk Nông</option>
                        <option value="187">Điện Biên</option>
                        <option value="52">Đồng Nai</option>
                        <option value="199">Đồng Tháp</option>
                        <option value="108">Nghệ An</option>
                        <option value="135">Hà Giang</option>
                        <option value="32">Hạ Long</option>
                        <option value="361">Hà Nam</option>
                        <option value="29">Hà Nội</option>
                        <option value="59">HÀ TIÊN</option>
                        <option value="195">Hà Tĩnh</option>
                        <option value="30">Hải Phòng</option>
                        <option value="363">Hòa Bình</option>
                        <option value="380">HÒN SƠN</option>
                        <option value="39">Huế</option>
                        <option value="193">Kiên Giang</option>
                        <option value="48">Kon Tum</option>
                        <option value="37">Lạng Sơn</option>
                        <option value="38">Lào Cai</option>
                        <option value="214">Long An</option>
                        <option value="232">Nam Định</option>
                        <option value="44">Nha Trang</option>
                        <option value="35">Ninh Bình</option>
                        <option value="106">Ninh Thuận</option>
                        <option value="49">Pleiku</option>
                        <option value="51">Phan Thiết</option>
                        <option value="54">Phú Quốc</option>
                        <option value="34">Phú Thọ</option>
                        <option value="121">Phú Yên</option>
                        <option value="41">Quảng Bình</option>
                        <option value="198">Quảng Ngãi</option>
                        <option value="43">Quảng Nam</option>
                        <option value="196">Quảng Ninh</option>
                        <option selected="" value="40">Quảng Trị</option>
                        <option value="141">Quy Nhơn</option>
                        <option value="58">Sóc Trăng</option>
                        <option value="134">Sơn La</option>
                        <option value="203">Tây Ninh</option>
                        <option value="55">Tiền Giang</option>
                        <option value="197">TP. Hồ Chí Minh</option>
                        <option value="213">Trà Vinh</option>
                        <option value="377">Tuyên Quang</option>
                        <option value="233">Thái Bình</option>
                        <option value="133">Thanh Hóa</option>
                        <option value="57">Vĩnh Long</option>
                        <option value="202">Vĩnh Phúc</option>
                        <option value="231">Yên Bái</option>
                    </select>
                </div>

                <div class="NgayDi">
                    <h4 style="color: #2D4271;">Số Ngày</h4>
                    <div>
                        <button>1-3 Ngày</button>
                        <button>4-7 Ngày</button>
                    </div>
                    <div>
                        <button>8-14 Ngày</button>
                        <button>Trên 14 ngày</button>
                    </div>
                </div>

                <div class="NgayDi">
                    <h4 style="color: #2D4271;">Ngày Đi</h4>
                    <input type="date" id="myDate">
                    <script>
                        // Lấy ngày hiện tại
                        var today = new Date();

                        // Định dạng ngày theo chuẩn ISO 8601
                        var isoDate = today.toISOString().substring(0, 10);

                        // Gán giá trị cho input type date
                        document.getElementById("myDate").value = isoDate;
                    </script>
                </div>

                <div class="SoNguoi">
                    <h4 style="color: #2D4271;">Số Người</h4>
                    <div>
                        <button>1 Người</button>
                        <button>2 Người</button>
                    </div>
                    <div>
                        <button>3-5 Người</button>
                        <button>5+ Người</button>
                    </div>
                </div>


                <div class="LoaiTour">
                    <h4 style="color: #2D4271;">Dòng Tour</h4>
                    <div>
                        <button>Cao Cấp</button>
                        <button>Tiêu Chuẩn</button>
                    </div>
                    <div>
                        <button>Tiết Kiệm</button>
                        <button>Giá Tốt</button>
                    </div>
                </div>


            </div>

            <div class="right testhu">
                <h1 style="color: #2D4271; text-align: center;">Du lịch Quảng Trị</h1>
                <hr>
                <p>Quảng Trị nổi tiếng với cụm Di tích Hiền Lương, Địa đạo Vịnh Mốc, Thành Cổ Quảng Trị. Bên cạnh đó Quảng Trị còn có nhiều danh lam thắng cảnh đẹp như Trằm Trà Lộc, suối nước nóng Klu, thác Ồ Ồ và nhiều bãi biển đẹp như Cửa Tùng, Cửa Việt, Vĩnh Thái, đảo Cồn Cỏ là nơi mang vẻ đẹp rất riêng với cát trắng tinh khôi, bằng phẳng, mịn màng, làn nước trong xanh mát lòng du khách.</p>
                <p>Đăng ký tour Quảng Trị cùng Vietravel, Quý khách có thể đến khám phá các điểm đến nổi bật sau: Thánh địa La Vang,</p>
                <p>Để hiểu hơn về Quảng Trị Mời Quý khách tham khảo Kinh nghiệm du lịch Quảng Trị</p>

                <div class="first">
                    <div class="Tour1">
                        <img src="./img/QT1.jpg" alt="">
                        <div>
                            <div class="Phan1">
                                <p style="font-size: 12px;">12/09/2023 - 2N1Đ - Giờ đi: 10:10</p>
                                <a href="" style="font-size: 16px; color: #2D4271;"><B>Sông Đakrông - Cầu treo Đakrông - Núi Talung - núi Klu - Đà Nẵng</B></a>
                            </div>
                            <div class="Phan2">
                                <p>Mã Tour: <i class="fa-solid fa-ticket" style="font-size: 16px;"></i>
                                    NDSGN3398-060-040523VU-V</p>
                                <p>Nơi Khởi Hành: <b>Đà Nẵng</b></p>
                                <p><b style="color: #FD5056;">2,590,000₫</b></p>
                            </div>

                            <div class="Phan3">
                                <button onclick="checkLogin()" class="Gia"><i class="fa-solid fa-cart-shopping"></i> Đặt Ngay</button>
                                <button class="ChiTiet"><a href="">Xem chi tiết</a></button>
                            </div>
                            <!-- <p style="text-align: center;">Số chỗ còn nhận: <b style="color: #FD5056;">10</b></p> -->
                        </div>
                    </div>


                    <div class="Tour2">
                        <img src="./img/QT2.jpg" alt="">
                        <div>
                            <div class="Phan1">
                                <p style="font-size: 12px;">15/09/2023 - 3N2Đ - Giờ đi: 05:45</p>
                                <a href="" style="font-size: 16px; color: #2D4271;"><B>Khe Sanh - Nghĩa trang liệt sĩ Trường Sơn - Địa đạo Vịnh Mốc - Thành cổ Quảng Trị</B></a>
                            </div>
                            <div class="Phan2">
                                <p>Mã Tour: <i class="fa-solid fa-ticket" style="font-size: 16px;"></i>
                                    NDSGN3398-061-050523VU-F-1</p>
                                <p>Nơi Khởi Hành: <b>TP. Hồ Chí Minh</b></p>
                                <p><b style="color: #FD5056;">4,490,000₫</b></p>
                            </div>
                            <div class="Phan3">
                                <button onclick="checkLogin()" class="Gia"><i class="fa-solid fa-cart-shopping"></i> Đặt Ngay</button>
                                <button class="ChiTiet"><a href="">Xem chi tiết</a></button>
                            </div>
                            <!-- <p style="text-align: center;">Số chỗ còn nhận: <b style="color: #FD5056;">17</b></p> -->
                        </div>
                    </div>


                    <div class="Tour3">
                        <img src="./img/QT3.jpg" alt="">
                        <div>
                            <div class="Phan1">
                                <p style="font-size: 12px;">2/08/2023 - 4N3Đ - Giờ đi: 05:00</p>
                                <a href="" style="font-size: 16px; color: #2D4271;"><B>Cầu Hiền Lương và sông Bến Hải - Cửa khẩu Lao Bảo </B></a>
                            </div>
                            <div class="Phan2">
                                <p>Mã Tour: <i class="fa-solid fa-ticket" style="font-size: 16px;"></i>
                                    NDSGN3318-013-060523VJ-VE</p>
                                <p>Nơi Khởi Hành: <b>TP. Hồ Chí Minh</b></p>
                                <p><b style="color: #FD5056;">7,590,000₫</b></p>
                            </div>
                            <div class="Phan3">
                                <button onclick="checkLogin()" class="Gia"><i class="fa-solid fa-cart-shopping"></i> Đặt Ngay</button>
                                <button class="ChiTiet"><a href="">Xem chi tiết</a></button>
                            </div>
                            <!-- <p style="text-align: center;">Số chỗ còn nhận: <b style="color: #FD5056;">12</b></p> -->
                        </div>
                    </div>
                </div>


                <div class="second">
                    <div class="Tour4">
                        <img src="./img/QT4.jpg" alt="" width="100%">
                        <div>
                            <div class="Phan1">
                                <p style="font-size: 12px;">06/06/2023 - 2N3Đ - Giờ đi: 01:00</p>
                                <a href="" style="font-size: 16px; color: #2D4271;"><B>Trằm Trà Lộc - Hướng Hóa - Sân bay Tà Cơn - Nhà tù Lao Bảo</B></a>
                            </div>
                            <div class="Phan2">
                                <p>Mã Tour: <i class="fa-solid fa-ticket" style="font-size: 16px;"></i>
                                    NDSGN3399-013-130523VN-D</p>
                                <p>Nơi Khởi Hành: <b>TP. Hồ Chí Minhg</b></p>
                                <p><b style="color: #FD5056;">9,400,000₫</b></p>
                            </div>
                            <div class="Phan3">
                                <button onclick="checkLogin()" class="Gia"><i class="fa-solid fa-cart-shopping"></i> Đặt Ngay</button>
                                <button class="ChiTiet"><a href="">Xem chi tiết</a></button>
                            </div>
                        </div>
                    </div>

                    <div class="Tour5">
                        <img src="./img/QT5.jpg" alt="" width="100%">
                        <div>
                            <div class="Phan1">
                                <p style="font-size: 12px;">09/10/2023 - 4N3Đ - Giờ đi: 04:10</p>
                                <a href="" style="font-size: 16px; color: #2D4271;"><B>Thác Chênh Vênh - Động Prai - Thác Tà Puồng – Động Tà Puồng</B></a>
                            </div>
                            <div class="Phan2">
                                <p>Mã Tour: <i class="fa-solid fa-ticket" style="font-size: 16px;"></i>
                                    NDSGN3398-063-090523VU-V</p>
                                <p>Nơi Khởi Hành: <b>TP. Hồ Chí Minh</b></p>
                                <p><b style="color: #FD5056;">4,500,000₫</b></p>
                            </div>
                            <div class="Phan3">
                                <button onclick="checkLogin()" class="Gia"><i class="fa-solid fa-cart-shopping"></i> Đặt Ngay</button>
                                <button class="ChiTiet"><a href="">Xem chi tiết</a></button>
                            </div>
                        </div>
                    </div>


                    <div class="Tour6">
                        <img src="./img/QT6.jpg" alt="" width="100%">
                        <div>
                            <div class="Phan1">
                                <p style="font-size: 12px;">07/07/2023 - 4N3Đ - Giờ đi: 07:10</p>
                                <a href="" style="font-size: 16px; color: #2D4271;"><B>Đảo Cồn Cỏ - Mũi Trèo - Mũi Lay - Suối nước nóng Klu (Khách Sạn 5 Sao)</B></a>
                            </div>
                            <div class="Phan2">
                                <p>Mã Tour: <i class="fa-solid fa-ticket" style="font-size: 16px;"></i>
                                    NDSGN3398-064-110523VU-D-1</p>
                                <p>Nơi Khởi Hành: <b>TP. Hồ Chí Minh</b></p>
                                <p><b style="color: #FD5056;">15,000,000₫</b></p>
                            </div>
                            <div class="Phan3">
                                <button onclick="checkLogin()" class="Gia"><i class="fa-solid fa-cart-shopping"></i> Đặt Ngay</button>
                                <button class="ChiTiet"><a href="">Xem chi tiết</a></button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>





        </div>
    </div>
    <footer>
        <div class="footer-top">


            <div class="In">
                <div class="tieude">
                    <h2><b>Du lịch trong nước</b></h2>
                </div>

                <div class="in-uberator">
                    <ul class="uberator">
                        <li>Hà Nội</li>
                        <li>Hải Phòng</li>
                        <li>Hạ Long</li>
                        <li>Huế</li>
                        <li>Quảng Bình</li>
                        <li>Đà Nẵng</li>
                        <li>Quảng Nam</li>
                        <li>Nha Trang</li>
                    </ul>
                    <ul class="uberator">
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



                <div class="in-uberators">
                    <ul class="QR-download" style="list-style-type: none;">
                        <li> <a href=""><img src="./img/play.png" alt=""></a></li>
                        <li><a href=""><img src="./img/ios.png" alt=""></a></li>
                    </ul>

                    <ul class="QR-download" style="list-style-type: none;">
                        <li>
                            <img src="./img/QR1.png" alt="">
                        </li>
                        <li><img src="./img/QR2.png" alt=""></li>


                    </ul>



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

            <div class="ThongTin itembot">
                <div class="tieude">
                    <h2><b>Thông Tin</b></h2>
                </div>

                <ul class="uperator-bott0m chung">
                    <li>Tạp Chí Du Lịch</li>
                    <li>Cẩm Nang Du Lịch</li>
                    <li>Tin Tức</li>
                    <li>SiteMap</li>
                    <li>FAQs</li>
                    <li>Chính Sách Riêng Tư</li>
                    <li>Thỏa Thuận Sử Dụng</li>
                </ul>



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
                        <li class="metnha"> <button> <i class="fa-solid fa-phone-volume "></i> 1900 1000</button></li>
                    </ul>



                </div>

            </div>

        </div>



    </footer>
    <script src="./filejava/start.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
  $(window).scroll(function(){
      if($(this).scrollTop()){
          $(".header-above").addClass('sticky');
      }
      else{
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
</body>

</html>