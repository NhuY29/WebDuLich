function send() {
    var arr = document.getElementsByTagName('input');
    var hoten = arr[2].value;
    var email = arr[5].value;
    var regExp = /^[A-Za-z][\w$.]+@[\w]+\.\w+$/;
    var diachi = arr[4].value;
    var check1 = arr[6].checked;
    var check2 = arr[7].checked;
    var check3 = arr[8].checked;
    var check4 = arr[9].checked;
    var check5 = arr[10].checked;
    var check6 = arr[11].checked;
    var check7 = arr[12].checked;
    var favorite = "";
    if (regExp.test(email) == false) {
        alert("email khong hop le !");
        return false;
    }
    if (hoten == "") {
        alert("vui long dien day du thong tin ");
        return false;
    }
    if (check1 || check2 || check3 || check4 || check5 || check6 || check7) {

    } else {
        alert("phai chon it nhat 1 loai");
        return false;
    }
    for (var i = 6; i < 12; i++) {
        if (arr[i].checked) {
            favorite = favorite + arr[i].value + " ";
        }
    }
    if (confirm("Bạn Chắc Chắn Đặt Vé Này!!!")) {
        // Thực hiện hành động nếu người dùng chọn OK
        alert("Bạn đã đặt vé thành công");
        location.reload();
    } else {
        // Không thực hiện hành động nếu người dùng chọn Cancel
        alert("Bạn đã hủy thao tác đăng ký");
        location.reload();

    }
}