<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="./themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./filecss/start.css">
    <link rel="stylesheet" href="./filejava/loading.js">
    
</head>

<body>
   
    <div class="main">
        
        <div class="content">
            <h2 class="logo-mytraveling">My<span>TravelLing</span>
           
            </h2>
            
      
        <div class="text">
        
                 <div class="logon-login">
                     <button onclick="window.location.href ='DangKy.php'"> <p> Đăng Kí ngay</p></button>
                     <button onclick="window.location.href ='DangNhap.php'"><p>Đăng Nhập ngay</p> </button>
                 </div>
           
        </div>
        <!-- <div class="social">
            <ul>
                <li><i class="fa-brands fa-facebook"></i></li>
                <li><i class="fa-brands fa-instagram"></i></li>
            </ul>
        </div> -->
    </div>
     <div class="cursor"></div>
    <script src="./filejava/loading.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
var cursor = $(".cursor");

    $(window).mousemove(function(e) {
        cursor.css({
            top: e.clientY - cursor.height() / 2,
            left: e.clientX - cursor.width() / 2
        });
    });

    $(window)
        .mouseleave(function() {
            cursor.css({
                opacity: "0"
            });
        })
        .mouseenter(function() {
            cursor.css({
                opacity: "1"
            });
        });

    $(".link")
        .mouseenter(function() {
            cursor.css({
                transform: "scale(3.2)"
            });
        })
        .mouseleave(function() {
            cursor.css({
                transform: "scale(1)"
            })
        });

    $(window)
        .mousedown(function() {
            cursor.css({
                transform: "scale(.2)"
            });
        })
        .mouseup(function() {
            cursor.css({
                transform: "scale(1)"
            });
        });
});
    </script>
</body>
</html>