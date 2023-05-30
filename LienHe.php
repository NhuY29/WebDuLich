<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./filecss/DiemDen.css"> -->
    <link rel="stylesheet" href="./filecss/LienHe.css">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="./filejava/start.js">

    <title>Liên Hệ</title>
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
                <li><a href="./index.htm">Trang Chủ</a></li>
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
                    <li class="list-menu"><a href="LienHe.html">
                            <h3>Liên Hệ</h3>
                        </a></li>
                    <li class="list-menu"><a href="">
                            <h3>VietTravelPlus</h3>
                        </a> </li>
                </ul>
            </div>
            <div class="menu-right-div">
                <ul class="menu-right">
                    <li class="search list-menu">
                        <form action="/search" method="get">
                            <input type="text" placeholder="Bắt đầu tìm kiếm..." name="">
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
                        <li class="list-dropdown lisdp"> <B><a href="./Mien Bac.html">TOUR MIỀN BẮC</a></B></li>
                        <li class="list-dropdown"><a href="./Ha Noi.html">Du lịch Hà Nội</a></li>
                        <li class="list-dropdown"><a href="./Hai Phong.html">Du lịch Hải Phòng</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Hạ Long</a></li>
                        <li class="list-dropdown"><a href="">Du lịch Bắc Ninh</a></li>
                        <li class="list-dropdown"><a href="">Du lịch Phú Thọ</a></li>
                        <li class="list-dropdown"><B><a href="./Mien Bac.html"> Xem tất cả</a></B> </li>
                    </ul>
                </div>
                <div class="menu-dropdown-item">
                    <ul class="upberator-dropdown">
                        <li class="list-dropdown lisdp"> <B><a href="./Mien Trung.html">TOUR MIỀN TRUNG </a></B></li>
                        <li class="list-dropdown"><a href="./Hue.html">Du lịch Huế</a></li>
                        <li class="list-dropdown"><a href="./QuangTri.php">Du lịch Quảng Trị</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Quảng Bình </a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Đà Nẵng </a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Quảng Nam</a></li>
                        <li class="list-dropdown"><B><a href="./Mien Trung.html.html"> Xem tất cả</a></B> </li>
                    </ul>
                </div>
                <div class="menu-dropdown-item">
                    <ul class="upberator-dropdown">
                        <li class="list-dropdown lisdp"> <B><a href="./Mien Tay.html.html">TOUR MIỀN TÂY NAM BỘ </a></B></li>
                        <li class="list-dropdown"><a href="./Phu Quoc.html.html"> Du lịch Phú Quốc </a></li>
                        <li class="list-dropdown"><a href="./Tien Giang.html.html"> Du lịch Tiền Giang</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Cần Thơ </a></li>
                        <li class="list-dropdown"><a href="">Du lịch Vĩnh Long</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Sóc Trăng</a></li>
                        <li class="list-dropdown"><B><a href="/Mien Tay.html.html"> Xem tất cả</a></B> </li>
                    </ul>
                </div>
                <div class="menu-dropdown-item">
                    <ul class="upberator-dropdown">
                        <li class="list-dropdown lisdp"> <B><a href="./Mien Dong.html.html">TOUR MIỀN ĐÔNG NAM BỘ </a></B>
                        </li>
                        <li class="list-dropdown"><a href="./Dong Nai.html.html"> Du lịch Đồng Nai</a></li>
                        <li class="list-dropdown"><a href="./Vung Tau.html.html"> Du lịch Bà Rịa - Vũng Tàu</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Côn Đảo </a></li>
                        <li class="list-dropdown"><a href=""> Du lịch TP. Hồ Chí Minh</a></li>
                        <li class="list-dropdown"><a href=""> Du lịch Tây Ninh</a></li>
                        <li class="list-dropdown"><B><a href="./Mien Dong.html"> Xem tất cả</a></B> </li>

                    </ul>
                </div>
                <i class="fa-solid fa-xmark iconclosed" onclick="closeddmenu()"></i>
            </div>
        </div>
        <div class="main-dropdown2">
            <div class="menu-dropdown2">
                <ul class="uperator-dropdown2">
                    <li class="list-dropdown2"> <a href="./KhuyenMai1.html">Vietravel & Sacombank tung ưu đãi “Tiền về đầy ví - Du hí thả
                            ga” </a> </li>
                    <li class="list-dropdown2"> <a href="./KhuyenMai2.html"> Vietravel & JCB tung ưu đãi “Thanh toán liền tay - Nhận ngay
                            deal xịn”</a></li>
                    <li class="list-dropdown2"> <a href="./KhuyenMai3.html"> Vietravel triển khai chương trình ưu đãi cùng VNPAY “Trúng
                            deal to – Du lịch chẳng lo”</a></li>
                    <li class="list-dropdown2"> <a href="./KhuyenMai4.html"> Vietravel & Sacombank: Quẹt thẻ liền tay - Giảm ngay 1 triệu
                            đồng</a></li>
                </ul>
                <i class="fa-solid fa-xmark iconclosed" onclick="closeddmenu()"></i>
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
                <i class="fa-solid fa-xmark iconclosed" onclick="closeddmenu()"></i>
            </div>
        </div>

        <div class="LienHeForm">
            <div class="LienHe-left ">
                <b>Gửi Thông Tin </b>
                <div class="Dongthu1">
                    <div>
                        <div class=" cach">
                            <label for="LoaiThongTin">Loại Thông Tin<span class="LoạiTT">(*)</span>:</label> <br>
                            <select name="Type" class="form-select" aria-label="Default select example">
                                <option value="1">Du lịch</option>
                                <option value="2">Chăm sóc khách hàng</option>
                                <option value="3">Liên hệ thông tin khác</option>
                            </select>
                        </div>
                    </div>

                    <div class="cach ">
                        <label for="HoTen">Họ Tên <span class="HoTen">(*)</span>:</label> <br>
                        <input type="text1" minlength="1" maxlength="30" required>
                    </div>
                    <div class="cach">
                        <label for="Email">Email <span class="Email">(*)</span>:</label> <br>
                        <input type="text1" minlength="1" maxlength="30" required>
                    </div>
                </div>

                <div class="Dongthu2">
                    <div class="cach5">
                        <label for="LoaiThongTin">Điện Thoại<span class="DT">(*)</span>:</label> <br>
                        <input type="tel" pattern="[0-9]{10}" required>
                    </div>
                    <div class="cach2">
                        <label for="TenCongTy">Tên Công Ty:</label> <br>
                        <input type="text1">
                    </div>
                    <div class="cach21">
                        <label for="SoKhach">Số Khách:</label> <br>
                        <input type="text1">
                    </div>
                </div>
                <div>
                    <label for="DiaChi">Địa Chỉ:</label> <br>
                    <input type="text1">
                </div>
                <div>
                    <label for="TieuDe">Tiêu Đề<span class="TD">(*)</span>:</label></label> <br>
                    <input type="text1" required>
                </div>
                <div>
                    <label for="NoiDung">Nội Dung<span class="TD">(*)</span>:</label></label> <br>
                    <textarea name="txtnoidung" class="form-control" rows="4" cols="5"
                        placeholder="Nhập nội dung cần gửi" required="required"></textarea>
                </div>
                <button type="submit" class="btn-submit-LH">Gửi Đi <i class="fa-solid fa-paper-plane"></i></button>
            </div>
            <div class="LienHe-right">
                <p style="color: #FD5056; font-size: 20px;"><b>Mạng Lưới Chi Nhánh</b></p>
                <div class="thanhtruot">
                    <p style="font-size: 20px; "><b>Khu vực thành phố Hồ Chí Minh</b></p>
                    <p style="font-size: 18px; "> <b>TRỤ SỞ CHÍNH</b></p>
                    <p><i class="fa-solid fa-map"></i> 190 Pasteur, P. Võ Thị Sáu, Q.3, Tp. Hồ Chí Minh, Việt Nam </p>
                    <p><i class="fa-solid fa-phone"></i>Tel: (84-28) 38 668 999 (20 lines)</p>
                    <p><i class="fa-solid fa-fax"></i> Fax: (84-28) 38 29 9142</p>
                    <p><i class="fa-solid fa-envelope"></i>Email: info@vietravel.com - info.asia@vietravel.com (English
                        Support)</p>

                    <p style="font-size: 18px; "> <b>PHÒNG ĐĂNG KÝ DU LỊCH CHỢ LỚN</b></p>
                    <p><i class="fa-solid fa-map"></i>86A Châu Văn Liêm, Phường 11, Quận 5, Tp. HCM </p>
                    <p><i class="fa-solid fa-phone"></i>Tel: (84-28) 35 358 709</p>
                    <p><i class="fa-solid fa-fax"></i> Fax: </p>
                    <p><i class="fa-solid fa-envelope"></i>Email: vtv.cholon@vietravel.com</p>

                    <p style="font-size: 18px; "> <b>PHÒNG ĐĂNG KÝ DU LỊCH QUẬN 11</b></p>
                    <p><i class="fa-solid fa-map"></i>1475 Đường 3/2, Phường 16, Quận 11, Tp. HCM </p>
                    <p><i class="fa-solid fa-phone"></i> Tel: (84-28) 39 699 439</p>
                    <p><i class="fa-solid fa-fax"></i> Fax: </p>
                    <p><i class="fa-solid fa-envelope"></i>Email: vtv.caygo@vietravel.com</p>

                    <p style="font-size: 18px; "><b>CÔNG TY CỔ PHẦN DỊCH VỤ VẬN CHUYỂN THẾ GIỚI (WORLDTRANS)</b></p>
                    <p><i class="fa-solid fa-map"></i>90A Nguyễn Thị Minh Khai, P. Võ Thị Sáu, Quận 3, Tp.HCM, Việt Nam
                    </p>
                    <p><i class="fa-solid fa-phone"></i> Tel: (84-28) 3822 7755 / Đặt vé máy bay: 0938 301 377 / Khách
                        hợp
                        đồng: 0938 798 866</p>
                    <p><i class="fa-solid fa-fax"></i> Fax: (84-28) 38 248 525</p>
                    <p><i class="fa-solid fa-envelope"></i>Email: info@worldtrans.vn</p>

                    <p style="font-size: 18px; "><b>PHÒNG ĐĂNG KÝ DU LỊCH CỘNG HÒA</b></p>
                    <p><i class="fa-solid fa-map"></i>492 Cộng Hòa, P.13, Q.Tân Bình, TP.HCM </p>
                    <p><i class="fa-solid fa-phone"></i> Tel: (84-28) 38 102 409</p>
                    <p><i class="fa-solid fa-fax"></i> Fax: (84-28) 38 102 419</p>
                    <p><i class="fa-solid fa-envelope"></i>Email: vtv.conghoa@vietravel.com</p>

                    <p style="font-size: 18px; "><b>CÔNG TY CỔ PHẦN TRUYỀN THÔNG & SỰ KIỆN ĐÀN ONG VIỆT</b></p>
                    <p><i class="fa-solid fa-map"></i>27 - 29 Huỳnh Văn Gấm, P. Tây Thạnh, Quận Tân Phú, TP.HCM </p>
                    <p><i class="fa-solid fa-phone"></i>Tel: (84-8) 3936 2030</p>
                    <p><i class="fa-solid fa-fax"></i> Fax: (84-28) 3820 7666</p>
                    <p><i class="fa-solid fa-envelope"></i>Email: info@beevent.vn</p>

                    <p style="font-size: 18px; "><b>CÔNG TY TNHH MỘT THÀNH VIÊN DỊCH VỤ DU LỊCH TRIPU</b></p>
                    <p><i class="fa-solid fa-map"></i>90A Nguyễn Thị Minh Khai, P. Võ Thị Sáu, Quận 3, TP. HCM </p>
                    <p><i class="fa-solid fa-phone"></i>Tel: 1900 9066 (Hotline)</p>
                    <p><i class="fa-solid fa-fax"></i>Fax: (84-28) 38 29 91 42</p>
                    <p><i class="fa-solid fa-envelope"></i>Email: info@tripu.vn</p>

                    <p style="font-size: 18px; "><b>TRUNG TÂM DỊCH VỤ DU LỊCH LÁ XANH</b></p>
                    <p><i class="fa-solid fa-map"></i> Văn phòng Tầng lửng Ga đi quốc nội - Sân bay Tân Sơn Nhất (P. 2,
                        Q. Tân Bình, TP. HCM) </p>
                    <p><i class="fa-solid fa-phone"></i>Tel: (84-28) 3848 7443/ /3848 9775</p>
                    <p><i class="fa-solid fa-fax"></i>Fax: (84-28) 3848 7442/3848 9331</p>
                    <p><i class="fa-solid fa-envelope"></i>Email: info@beevent.vn</p>

                    <p style="font-size: 20px; "><b>Miền Bắc</b></p>
                    <p style="font-size: 18px; "><b>CHI NHÁNH HÀ NỘI</b></p>
                    <p><i class="fa-solid fa-map"></i> VPDL khách lẻ: 03 Hai Bà Trưng, Hà Nội - Tel: 024. 3933 1978 |
                        VPDL khách đoàn: Tầng 7, tòa nhà Hồng Hà - Số 37 Ngô Quyền, Hà Nội - Tel: 024. 3971 1159 </p>
                    <p><i class="fa-solid fa-phone"></i> Tel: (84.24) 3933 1978 | Hotline: DLTN - 0989 37 00 33 / DLNN -
                        0983 16 00 22</p>
                    <p><i class="fa-solid fa-fax"></i>Fax: (84.24) 3933 1979</p>
                    <p><i class="fa-solid fa-envelope"></i>Email: vtv.hanoi@vietravel.com</p>

                    <p style="font-size: 18px; "><b>CHI NHÁNH HẢI PHÒNG</b></p>
                    <p><i class="fa-solid fa-map"></i>04 Trần Hưng Đạo, P. Hoàng Văn Thụ, Q.Hồng Bàng, TP. Hải Phòng
                    </p>
                    <p><i class="fa-solid fa-phone"></i> Tel: (0225) 3 842 888 - Hotline: 0936 900 085</p>
                    <p><i class="fa-solid fa-fax"></i>Fax: (0225) 3 842 828</p>
                    <p><i class="fa-solid fa-envelope"></i>Email: vtv.haiphong@vietravel.com; info.hph@vietravel.com</p>


                    <p style="font-size: 20px; "><b>Miền Trung</b></p>
                    <p style="font-size: 18px; "><b>CHI NHÁNH HUẾ</b></p>
                    <p><i class="fa-solid fa-map"></i> Số 03 Hùng Vương, Phường Phú Hội, Tp. Huế, tỉnh Thừa Thiên Huế
                    </p>
                    <p><i class="fa-solid fa-phone"></i> Tel: (84 234) 383 1432 | Hotline: 0964 109 109</p>
                    <p><i class="fa-solid fa-fax"></i> Fax: (84 234) 383 1431</p>
                    <p><i class="fa-solid fa-envelope"></i> Email: vtv.hue@vietravel.com</p>

                    <p style="font-size: 18px; "><b>CHI NHÁNH ĐÀ NẴNG</b></p>
                    <p><i class="fa-solid fa-map"></i> 58 Pasteur, Quận Hải Châu, TP. Đà Nẵng </p>
                    <p><i class="fa-solid fa-phone"></i> Tel: (84 236) 38 63 544 </p>
                    <p><i class="fa-solid fa-fax"></i>Fax: (84 236) 3849 437</p>
                    <p><i class="fa-solid fa-envelope"></i>Email: vtv.danang@vietravel.com</p>

                    <p style="font-size: 20px; "><b>Đông Nam Bộ</b></p>
                    <p style="font-size: 18px; "><b>CHI NHÁNH ĐỒNG NAI</b></p>
                    <p><i class="fa-solid fa-map"></i> 242 đường 30/4, P. Thanh Bình, TP. Biên Hòa, Đồng Nai</p>
                    <p><i class="fa-solid fa-phone"></i> Tel: (84.2513) 948 930 - (84.2513) 948 933</p>
                    <p><i class="fa-solid fa-fax"></i>Fax: (84 251) 394 8936</p>
                    <p><i class="fa-solid fa-envelope"></i> Email: vtv.bienhoa@vietravel.com</p>

                    <p style="font-size: 18px; "><b>CHI NHÁNH BÌNH DƯƠNG</b></p>
                    <p><i class="fa-solid fa-map"></i> 317 Đại lộ Bình Dương, P. Chánh Nghĩa, TP. Thủ Dầu Một, Bình
                        Dương </p>
                    <p><i class="fa-solid fa-phone"></i> Tel: (84 274) 38 82 888- Ext: 101,103,104 </p>
                    <p><i class="fa-solid fa-fax"></i> Fax: (84 274) 38 82 889</p>
                    <p><i class="fa-solid fa-envelope"></i>Email: info.bdu@vietravel.com</p>

                    <p style="font-size: 20px; "><b>Tây Nguyên</b></p>
                    <p style="font-size: 18px; "><b>CHI NHÁNH BUÔN MA THUỘT</b></p>
                    <p><i class="fa-solid fa-map"></i> 58 Điện Biên Phủ, P. Thống Nhất, TP. Buôn Ma Thuột</p>
                    <p><i class="fa-solid fa-phone"></i>Tel: (84.262) 3753 999 - Ext: 4607 | Hotline: 0906 50 90 95</p>
                    <p><i class="fa-solid fa-fax"></i>Fax: (84.262) 3673 999</p>
                    <p><i class="fa-solid fa-envelope"></i> Email: vtv.buonmathuot@vietravel.com</p>

                    <p style="font-size: 18px; "><b>CHI NHÁNH ĐÀ LẠT</b></p>
                    <p><i class="fa-solid fa-map"></i> 28 Pasteur, Phường 4, Thành phố Đà Lạt, Lâm Đồng </p>
                    <p><i class="fa-solid fa-phone"></i>Tel: (84.263) 3513 513 - Ext: 7501, 7502 </p>
                    <p><i class="fa-solid fa-fax"></i> Fax: (84.263) 3818485</p>
                    <p><i class="fa-solid fa-envelope"></i>Email: vtv.dalat@vietravel.com</p>

                    <p style="font-size: 20px; "><b>Miền Tây</b></p>
                    <p style="font-size: 18px; "><b>CHI NHÁNH CẦN THƠ</b></p>
                    <p><i class="fa-solid fa-map"></i> 103 Trần Văn Khéo, P. Cái Khế, Q. Ninh Kiều, Tp. Cần Thơ</p>
                    <p><i class="fa-solid fa-phone"></i>Tel: (0292) 3763 085 | Hotline: 0939 05 95 96</p>
                    <p><i class="fa-solid fa-fax"></i>Fax: (0292) 3763 086</p>
                    <p><i class="fa-solid fa-envelope"></i>Email: info.cth@vietravel.com</p>

                    <p style="font-size: 18px; "><b>CHI NHÁNH PHÚ QUỐC</b></p>
                    <p><i class="fa-solid fa-map"></i> 53 đường 30/4, Khu phố 1, P. Dương Đông, TP. Phú Quốc </p>
                    <p><i class="fa-solid fa-phone"></i> Tel: (0297) 3 996 544 /3996 546 </p>
                    <p><i class="fa-solid fa-fax"></i> Fax: (0297) 3 996 543</p>
                    <p><i class="fa-solid fa-envelope"></i> Email: vtv.phuquoc@vietravel.com</p>
                </div>
            </div>

        </div>
        <div class="maps">

            <div class="toalac">
                <div class="content-item-block5">
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0" nonce="J7NKl8iY"></script>
                    <div class="coment-face">
                        <div class="fb-comments" data-href="http://localhost:3000/index.html" data-width="500"
                            data-numposts="10"></div>
                    </div>
                </div>
            </div>
            <div class="maps-img">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.704182933411!2d106.35524747421753!3d10.365520966640188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310aaf0af45baa23%3A0xab353d5888bcf8fc!2zxJDhuqFpIGjhu41jIFRp4buBbiBHaWFuZw!5e0!3m2!1svi!2s!4v1683796696480!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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
</body>

</html>