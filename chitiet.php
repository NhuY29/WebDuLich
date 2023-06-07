<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./filecss/chitiet.css">
  <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="./filejava/start.js">
    <title>Chi Tiết Chuyến Đi </title>
</head>
<body>
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
            <div class="left">
                <p class="MaTour"> <i class="fa-solid fa-ticket" style="font-size: 16px;"></i>NDSGN1061-091-030623VU-V-1</p>
                <p class="TieuDeDi"><b>Hà Nội - Hạ Long - Yên Tử - Ninh Bình - Bái Đính - Tràng An (Khách sạn 4 sao)</b></p>
               <div>
                <p class="HaiLong">
                    <i class="fa-regular fa-message"></i>Tuyệt Vời <br> 358 Quan Tâm
                </p>
                <p class="HaiLong">
                    <i class="fa-regular fa-heart"></i> 247
                </p>
               </div>
            </div>
            <div class="right">
                <div class="DatNgay">
                    <p style="color: #fe2214 ;">8,390,000₫/ khách</p>
                   <a href="./DatHang.php"> <button><i class="fa-solid fa-cart-shopping"></i>Đặt Ngay</button></a>
                </div>
                <div class="LienHeTV">
                   <a href="./LienHe.php"> <button>Liên Hệ Tư Vấn</button></a>
                </div>
            </div>
        </div>
        <div class="anhGT">
            <div class="anhGT_left">
                <img src="./img/chitet1.jpg" alt="">
            </div>
              <div class="anhGT_right">
                <div class="anhGT_top">
                   <div> <img src="./img/MT5.jpg" alt=""></div>
                   <div> <img src="./img/TG3.jpg" alt=""></div>
                </div>
                <div class="anhGT_below">
                  <img src="./img/PQ6.webp" alt="">
                </div>
              </div> 
        </div>
        <div class="LuaChon">
            <div class="LuaChon_top">
                <div class="chon">
                    <div class="img-chon">

                    </div>
                    <div class="text-chon">
                         <p><b>Thời Gian</b></p>
                    <p>4 ngày 3 đêm</p>
                    </div>
                   
                </div>
                <div class="chon">
                    <div class="img-chon2">

                    </div>
                    <div class="text-chon"><p><b>Phương tiện di chuyển</b></p>
                    <p>Máy bay, xe du lịch</p></div>
                    
                </div>
                
                <div class="chon">
                    <div class="img-chon3">

                    </div>
                    <div class="text-chon"><p><b>Điểm tham quan</b></p>
                    <p>Hà Nội, Hạ Long, Ninh Bình, Bái Đính, Tràng An, Yên Tử</p></div>
                </div>
                <div class="chon">
                    <div class="img-chon4">

                    </div>
                    <div class="text-chon"><p><b>Ẩm thực</b></p>
                    <p>Buffet sáng, Theo thực đơn</p></div>
                </div>
            </div>
            <div class="LuaChon_below">
                <div class="chon">
                    <div class="img-chon5">

                    </div>
                    <div class="text-chon"><p><b>Khách sạn</b></p>
                    <p>Khách sạn 4 sao</p></div>
                </div>
                <div class="chon">
                    <div class="img-chon6">

                    </div>
                    <div class="text-chon"><p><b>Thời gian lý tưởng</b></p>
                    <p>Quanh năm</p></div>
                </div>
                <div class="chon">
                    <div class="img-chon7">

                    </div>
                    <div class="text-chon"><p><b>Đối tượng thích hợp</b></p>
                    <p>Cặp đôi, Gia đình nhiều thế hệ, Thanh niên</p></div>
                </div>
                <div class="chon">
                    <div class="img-chon8">

                    </div>
                    <div class="text-chon"><p><b>Ưu đãi</b></p>
                    <p>Đã bao gồm ưu đãi trong giá tour</p></div>
                </div>
            </div>
        </div>
        <div class="LichTrinh">
            <div class="LichTrinh_left">
               <div class="Gia">
                <div class="Gia1">
                    <p><b>Loại khách</b></p>
                </div>
                <div class="Gia2">
                    <p><b>Giá tour</b></p>
                </div>
               </div>

               <div class="Gia">
                <div class="Gia1">
                    <p>Người lớn (Từ 12 tuổi trở lên)</p>
                </div>
                <div class="Gia2">
                    <p>8,390,000 đ</p>
                </div>
               </div>

               <div class="Gia">
                <div class="Gia1">
                    <p>Người lớn (Từ 12 tuổi trở lên)</p>
                </div>
                <div class="Gia2">
                    <p>	8,390,000 đ</p>
                </div>
               </div>

               <div class="Gia">
                <div class="Gia1">
                    <p>Trẻ em (Từ 5 - 11 tuổi)</p>
                </div>
                <div class="Gia2">
                    <p>6,292,500 đ</p>
                </div>
               </div>

               <div class="Gia">
                <div class="Gia1">
                    <p>Trẻ nhỏ (Từ 2 - 4 tuổi)</p>
                </div>
                <div class="Gia2">
                    <p>3,500,000 đ</p>
                </div>
               </div>
               <div class="Gia">
                <div class="Gia1">
                    <p>Em bé ( Dưới 2 tuổi )</p>
                </div>
                <div class="Gia2">
                    <p>500,000 đ</p>
                </div>
               </div>
               <div class="Gia">
                <div class="Gia1">
                    <p>Phụ thu phòng đơn</p>
                </div>
                <div class="Gia2">
                    <p>1,500,000 đ</p>
                </div>
               </div>
            </div>
            <div class="LichTrinh_right">
                <b>Ngày 1 - SB NỘI BÀI – HÀ NỘI 00 bữa ăn: (tự túc ăn ngày đầu tiên)</b>
                <div><p>Quý khách tập trung tại sân bay Tân Sơn Nhất (Ga nội địa), hướng dẫn viên hỗ trợ khách làm thủ tục đáp chuyến bay đi Hà Nội. Đến sân bay Nội Bài, xe và HDV Vietravel đón Quý khách đi Hà Nội nhận phòng khách sạn nghỉ ngơi hoặc tự do đi tham quan phố cổ Hà Nội.</p></div>
                <b>Ngày 2 - HÀ NỘI – YÊN TỬ - HẠ LONG 03 Bữa ăn: (Sáng, Trưa, Chiều)</b>
                <div>  <p>Quý khách ăn sáng và trả phòng khách sạn.  Xe khởi hành đưa Quý khách đi tham quan:
                    - Lăng Hồ Chủ Tịch (không viếng vào thứ 2, thứ 6 hàng tuần và giai đoạn bảo trì định kỳ hàng năm 15/6 – 15/8) tham quan và tìm hiểu cuộc đời và sự nghiệp của vị cha già dân tộc tại Nhà Sàn Bác Hồ, Bảo Tàng Hồ Chí Minh, Chùa Một Cột.
                    - Một vòng Hồ Hoàn Kiếm ngắm bên ngoài Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc.</p>
                <p>Tiếp tục hành trình, xe khởi hành đưa Quý khách đến thành phố biển Hạ Long theo quốc lộ 18, trên đường dừng ăn trưa và tham quan vùng đất thiêng Yên Tử:</p>
                <p>- Quý khách lên cáp treo du ngoạn thắng cảnh thiên nhiên Đông Yên Tử (chi phí cáp treo tự túc), nơi còn lưu giữ nhiều di tích lịch sử mệnh danh “Đất tổ Phật giáo Việt Nam”, chiêm bái chùa Một Mái, chùa Hoa Yên – nơi tu hành của phật hoàng Trần Nhân Tông khai sinh ra dòng mới Thiền Phái Trúc Lâm, nằm trên lưng chừng núi ở độ cao 516m. Theo dấu chân Phật Hoàng viếng Chùa Đồng có tên Thiên Trúc Tự (chùa Cõi Phật), tọa lạc ở đỉnh cao nhất dãy Yên Tử (1.068m) – ngôi chùa bằng đồng lớn nhất Việt Nam.</p></div>
                <b>Ngày 3 - VỊNH HẠ LONG – NINH BÌNH 03 bữa ăn: (Sáng, Trưa, Chiều)</b>
                <div>
                    <p>- Chụp hình bên ngoài Bảo tàng Quảng Ninh, Cung Cá Heo - Cung Quy Hoạch, Hội Chợ, Triển Lãm Và Văn Hóa Quảng Ninh,</p>
                    <p>
                        Quý khách ăn sáng và trả phòng khách sạn. Xe khởi hành đưa Quý khách tham quan: 
                        - Chụp hình bên ngoài Bảo tàng Quảng Ninh, Cung Cá Heo - Cung Quy Hoạch, Hội Chợ, Triển Lãm Và Văn Hóa Quảng Ninh,
                        - Xuống thuyền đi du ngoạn Vịnh Hạ Long - Thắng cảnh thiên nhiên tuyệt đẹp và vô cùng sống động, được UNESCO công nhận là di sản thiên nhiên Thế giới năm 1994.</p>
                    <p>- Tham quan Động Thiên Cung là một trong những động đẹp nhất ở Hạ Long. Vẻ đẹp nguy nga và lộng lẫy bởi những lớp thạch nhũ và những luồng ánh sáng lung linh. Từ trên tàu ngắm nhìn các hòn đảo lớn nhỏ trong Vịnh Hạ Long: Hòn Gà Chọi, Hòn Lư Hương.
                        - Tham quan mua sắm </p>
                    <p>Buổi tối quý khách tự do khám phá Phố cổ Hoa Lư, một không gian check-in cổ, đẹp, trầm mặc đẹp trở nên lung linh, huyền ảo hơn với sắc màu của những chiếc đèn lồng và Bảo Tháp trên Hồ Kỳ Lân; trải nghiệm nhiều hoạt động trò chơi dân gian và nhiều loại hình văn hóa nghệ thuật từ dân tộc như múa rối nước, nhảy múa Tắc Xình, hát xẩm, ... đến những buổi trình diễn acoustic sẽ được diễn ra vào các buổi tối ngày cuối tuần.</p>
                </div>
                <b>Ngày 4 - NINH BÌNH – SB NỘI BÀI 02 Bữa ăn: (Sáng, Trưa)</b>
                <div>
                    <p>- Khu Du Lịch Tràng An: Quý khách lên thuyền truyền thống đi tham quan thắng cảnh hệ thống núi đá vôi hùng vĩ và các thung lũng ngập nước, thông với nhau bởi các dòng suối tạo nên các hang động ngập nước quanh năm. Điểm xuyến trong không gian hoang sơ, tĩnh lặng là hình ảnh rêu phong, cổ kính của các mái đình, đền, phủ nằm nép mình dưới chân các dãy núi cao</p>
                    <p>- Viếng Chùa Bái Đính - một quần thể chùa với nhiều kỷ lục Việt Nam như pho tượng phật Di Lặc bằng đồng nặng 80 tấn, hành lang với 500 tượng vị La Hán, tòa Bảo Tháp cao 99m…</p>
                    <p>Xe khởi hành đưa Quý khách ra sân bay Nội Bài làm thủ tục đón chuyến bay về Tp.HCM. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.</p>

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