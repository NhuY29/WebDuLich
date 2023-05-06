<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./filecss/DangKy.css">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
    <title>Form Đăng Ký Hội Viên</title>

    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var passwordIcon = document.getElementById("password-icon");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordIcon.classList.remove("fa-eye-slash");
                passwordIcon.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                passwordIcon.classList.remove("fa-eye");
                passwordIcon.classList.add("fa-eye-slash");
            }
        }

        function resetConfirmPassword() {
            var confirmPasswordInput = document.getElementById("confirm-password");
            confirmPasswordInput.value = "";
        }

        function checkPasswords() {
            var passwordInput = document.getElementById("password");
            var confirmPasswordInput = document.getElementById("confirm-password");
            var passwordMatchMessage = document.getElementById("password-match-message");
            if (passwordInput.value !== confirmPasswordInput.value) {
                passwordMatchMessage.innerHTML = "Mật khẩu không trùng khớp.";
                passwordMatchMessage.style.color = "red";
                return false;
            } else {
                passwordMatchMessage.innerHTML = " ";
                return true;
            }
        }
    </script>

</head>
<body class="preloading">
    <div class="loadi">
        <div class="loading">
            <img src="./img/cartoon-snail-loading-loading-gif-animation_2734139.png!bw700" alt="">
        </div>
    </div>

    <div class="main">
        <div class="header">
            <div class="header-above">
                <div class="imglogo-header">
                    <a href="index.html"> <img src="./img/logo.png" alt="" class="photo"></a>
                </div>


                <div class="menu-left-div">
                    <ul class="menu-left ">
                        <li class="list-menu"><b onclick="menudulich()">Du Lịch <i class="fa-solid fa-angle-down"></i>
                            </b>
                            <div class="main-dropdown">
                                <div class="menu-dropdown goout">
                                    <div class="menu-dropdown-item">
                                        <ul class="upberator-dropdown">
                                            <li class="list-dropdown lisdp"> <B><a href="">TOUR MIỀN BẮC</a></B></li>
                                            <li class="list-dropdown"><a href="./HaNoi.html">Du lịch Hà Nội</a></li>
                                            <li class="list-dropdown"><a href="./HaiPhong.html">Du lịch Hải Phòng</a>
                                            </li>
                                            <li class="list-dropdown"><a href=""> Du lịch Hạ Long</a></li>
                                            <li class="list-dropdown"><a href="">Du lịch Bắc Ninh</a></li>
                                            <li class="list-dropdown"><a href="">Du lịch Phú Thọ</a></li>
                                            <li class="list-dropdown"><B><a href="./MienBac.html"> Xem tất cả</a></B>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-dropdown-item">
                                        <ul class="upberator-dropdown">
                                            <li class="list-dropdown lisdp"> <B><a href="">TOUR MIỀN TRUNG </a></B></li>
                                            <li class="list-dropdown"><a href="./Hue.html">Du lịch Huế</a></li>
                                            <li class="list-dropdown"><a href="./QuangTri.html">Du lịch Quảng Trị</a>
                                            </li>
                                            <li class="list-dropdown"><a href=""> Du lịch Quảng Bình </a></li>
                                            <li class="list-dropdown"><a href=""> Du lịch Đà Nẵng </a></li>
                                            <li class="list-dropdown"><a href=""> Du lịch Quảng Nam</a></li>
                                            <li class="list-dropdown"><B><a href="./MienTrung.html"> Xem tất cả</a></B>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-dropdown-item">
                                        <ul class="upberator-dropdown">
                                            <li class="list-dropdown lisdp"> <B><a href="">TOUR MIỀN TÂY NAM BỘ </a></B>
                                            </li>
                                            <li class="list-dropdown"><a href="./PhuQuoc.html"> Du lịch Phú Quốc </a>
                                            </li>
                                            <li class="list-dropdown"><a href="./TienGiang.html"> Du lịch Tiền Giang</a>
                                            </li>
                                            <li class="list-dropdown"><a href=""> Du lịch Cần Thơ </a></li>
                                            <li class="list-dropdown"><a href="">Du lịch Vĩnh Long</a></li>
                                            <li class="list-dropdown"><a href=""> Du lịch Sóc Trăng</a></li>
                                            <li class="list-dropdown"><B><a href="/MienTay.html"> Xem tất cả</a></B>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-dropdown-item">
                                        <ul class="upberator-dropdown">
                                            <li class="list-dropdown lisdp"> <B><a href="">TOUR MIỀN ĐÔNG NAM BỘ
                                                    </a></B></li>
                                            <li class="list-dropdown"><a href="./DongNai.html"> Du lịch Đồng Nai</a>
                                            </li>
                                            <li class="list-dropdown"><a href="./VungTau.html"> Du lịch Bà Rịa - Vũng
                                                    Tàu</a></li>
                                            <li class="list-dropdown"><a href=""> Du lịch Côn Đảo </a></li>
                                            <li class="list-dropdown"><a href=""> Du lịch TP. Hồ Chí Minh</a></li>
                                            <li class="list-dropdown"><a href=""> Du lịch Tây Ninh</a></li>
                                            <li class="list-dropdown"><B><a href="./MienDong.html"> Xem tất cả</a></B>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- <li class="list-menu"><a href=""><b>Liên Hệ</b></a></li> -->

                        <li class="list-menu"><b onclick="menukhuyenmai()">Khuyến Mãi <i
                                    class="fa-solid fa-angle-down"></i></b>
                            <div class="main-dropdown2">
                                <div class="menu-dropdown2">
                                    <ul class="uperator-dropdown2">
                                        <li class="list-dropdown2"> <a href="">Vietravel & Sacombank tung ưu đãi “Tiền
                                                về đầy ví - Du hí thả ga” </a> </li>
                                        <li class="list-dropdown2"> <a href=""> Vietravel & JCB tung ưu đãi “Thanh toán
                                                liền tay - Nhận ngay deal xịn”</a></li>
                                        <li class="list-dropdown2"> <a href=""> Vietravel triển khai chương trình ưu đãi
                                                cùng VNPAY “Trúng deal to – Du lịch chẳng lo”</a></li>
                                        <li class="list-dropdown2"> <a href=""> Vietravel & Sacombank: Quẹt thẻ liền tay
                                                - Giảm ngay 1 triệu đồng</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="list-menu"><b onclick="menutintuc()">Vận Chuyển <i class="fa-solid fa-angle-down"
                                    onclick="menutintuc()"></i></b>
                            <ul class="ubertor-news menunone">
                                <li class="list-news"><a href="thuexe.html">Thuê Xe </a></li>
                                <li class="list-news"><a href="">Vé Máy Bay</a></li>
                            </ul>
                        </li>
                        <li class="list-menu"><a href="LienHe.html"><b>Liên Hệ</b></a></li>
                        <li class="list-menu"><a href=""><b>VietTravelPlus</b></a> </li>
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
                        <li class="logOn list-menu"><a href="./DangNhap.html" target="_parent"><i
                                    class="fa-regular fa-user"></i></a></li>
                    </ul>
                </div>


            </div>
        </div>
        <div class="HoiVien">
            <h2>Đăng Ký Hội Viên</h2>
            <p>Để hoàn tất đăng ký Hội viên VietravelPlus, quý khách vui lòng điền đầy đủ thông tin vào mẫu dưới đây và
                nhấn
                vào nút đăng ký. Xin chân thành cảm ơn quý khách hàng.</p>
            <form action="xulidki.php" method = "post">
                <label for="HoTen">Họ Tên <span class="HoTen">(*)</span>:</label>
                <input type="text1" minlength="1" maxlength="30" required name="hoten">

                <label for="SDT">Di Động <span class="HoTen">(*)</span></label>
                <input type="tel" pattern="[0-9]{10}" required name="didong">


                <label for="NgaySinh">Ngày Sinh:</label>
                <input type="date" class="date" name="ngaysinh">

                <label for="GioiTinh">Giới Tính</label>
                <select name="gioitinh">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
                </select>


                <label for="CMND">CMND</label>
                <input type="text1" name="CMND">

                <label for="NgayCap">Ngày Cấp</label>
                <input type="date" name="ngaycap">


                <label for="Passport">Passport</label>
                <input type="text1" name="passport">
                <label for="Email">Email</label>
                <input type="email" name="email">


                <label for="NgayCapPassport">Ngày Cấp</label>
                <input type="date" name="ngaycap2">
                <label for="NgayHetHan">Ngày Hết Hạn</label>
                <input type="date" name="ngayhethan">


                <label for="DiaChi">Địa Chỉ</label>
                <input type="text1" class="dai" name="diachi">

                <label for="DiaChi">Mã Giới Thiệu</label>
                <input type="text1" class="dai" name="magioithieu">



                <div class="password-input-container" style="width: 360px;">
                    <label for="password">Mật khẩu: <span class="MatKhau">(*)</span> </label>
                    <input type="password" id="password" name="password" required>
                    <!-- <button type="button" onclick="togglePassword()">
                        <i class="fas fa-eye-slash" id="password-icon"></i>
                    </button> -->
                </div>

                <div class="confirm-password-input-container">
                    <label for="confirm-password">Nhập lại mật khẩu: <span class="NhapLai">(*)</span></label>
                    <input type="password" id="confirm-password" name="matkhau" required>
                    <button type="button" onclick="resetConfirmPassword()">Nhập lại</button>
                    <button type="button" onclick="checkPasswords()">Kiểm tra</button>
                </div>

                <div id="password-match-message"></div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="terms-checkbox" name="terms-checkbox"
                        required>
                    <label class="form-check-label" for="terms-checkbox">
                        Tôi đồng ý với các <a href="#DieuKhoan">điều khoản bên dưới</a>.
                    </label>
                </div>
                <div class="DK">
                    <button type="submit" class="btn btn-primary" class="DK" name="btn-submit">Đăng ký</button>
                </div>

            </form>
        </div>
        <div id="DieuKhoan">
            <hr width="100%">
            <h4>ĐIỀU KHOẢN ĐĂNG KÝ HỘI VIÊN</h4>
            <p>- Hội viên đăng ký chương trình cung cấp đúng các thông tin về số điện thoại, địa chỉ liên hệ, địa chỉ
                email của Hội viên. Khi có thay đổi, Hội viên có thể tự cập nhật vào tài khoản tại VietravelPlus.com
                hoặc liên hệ thông báo trực tiếp với nhân viên Vietravel và yêu cầu cập nhật.</p>
            <p>- Hội viên tham gia chương trình được cộng điểm Vàng và điểm Thưởng sau khi sử dụng dịch vụ tại Vietravel
                theo hệ số cộng điểm và theo các quy định về điểm thưởng khác được công bố tại từng thời điểm.</p>
            <p>- Vietravel có quyền thay đổi các điều kiện và điều khoản của chương trình Khách hàng thân thiết bất kỳ
                thời điểm nào có (hoặc không) báo trước và sẽ công bố chính thức trên VietravelPlus.com.</p>
            <p>- Vietravel có quyền sửa đổi cách thức của chương trình hoặc những quyền lợi có được từ chương trình tại
                bất kỳ thời điểm nào, có (hoặc không) báo trước và sẽ công bố chính thức trên VietravelPlus.com.</p>
            <p>- Vietravel có quyền tạm ngừng hoặc chấm dứt toàn bộ chương trình Khách hàng thân thiết tại bất kỳ thời
                điểm nào, có (hoặc không) báo trước</p>
            <p>- Vietravel được miễn trừ chịu trách nhiệm nếu Hội viên không nhận được các ưu đãi và lợi ích từ chương
                trình do số điện thoại, email Hội viên có thay đổi mà không cập nhật vào hồ sơ hội viên hoặc do gửi ấn
                phẩm, thư tín qua đường bưu điện đến Hội viên bị thất lạc</p>
            <p>- Mọi khiếu nại, yêu cầu bồi thường của Hội viên liên quan đến chương trình sẽ do Vietravel giải quyết.
                Sự giải quyết của Vietravel có giá trị áp dụng sau cùng.</p>
            <p>- Vietravel được phép sử dụng những thông tin của Hội viên trong các trường hợp: phục vụ cho việc nghiên
                cứu thị trường, lên kế hoạch kinh doanh nhằm phục vụ Hội viên tốt hơn của Vietravel hoặc đối tác chương
                trình, gửi phần thưởng hay các ấn phẩm đến Hội viên mà không cần sự đồng ý của Hội viên hoặc các trường
                hợp khác được Hội viên cho phép</p>
            <p>- Hội viên được khuyến khích đọc kỹ và được xem như chấp nhận nội dung chương trình Khách hàng thân thiết
                VietravelPlus trước khi đăng ký trở thành Hội viên</p>
            <hr width="100%">
        </div>
    </div>
</body>
<script src="./filejava/start.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous">
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
    $(window).on('load',function(event){
$('body').removeClass(".preloading")
$('.loadi').delay(3000).fadeOut('fast');
});
</script>

</html>