function lienhe(){
    var arr = document.getElementsByTagName('input');
    var hoten = arr[2].value;
    var email = arr[3].value;
    var dt = arr[4].value;
    var tencty = arr[5].value;
    var sokhach = arr[6].value;
    var diachi = arr[7].value;
    var tieude = arr[8].value;
    var regExp = /^[A-Za-z][\w$.]+@[\w]+\.\w+$/;
    var thang = document.getElementById("combo").value;
    if(hoten == "" || email == "" || thang == ""){
        alert("vui long nhap day du thong tin !!!");
        return false;
    }
}