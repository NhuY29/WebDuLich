// window.addEventListener("load", function () {
//     const slider = document.querySelector(".slider");
//     const slidermain = document.querySelector(".slider-main");
//     const slideritems = document.querySelectorAll(".slider-item");
//     const nextbtn = document.querySelector(".slider-next");
//     const prevbtn = document.querySelector(".slider-prev");
//     const dotsitems = document.querySelectorAll(".slider-dot-item");
//     const slideritemWithd = slideritems[0].offsetWidth;
//     const sliderslenght = slideritems.length;
//     let postionx = 0;
//     let index = 0;
//     const dots = document.querySelector(".slider-dots");
//     nextbtn.addEventListener("click", function () {
//         handchage(1);
//     });
//     prevbtn.addEventListener("click", function () {
//         handchage(-1);
//     });

//     dotsitems.forEach(item => {
//         item.addEventListener("click", function (e) {
//             const sliteindex = parseInt(e.target.dataset.index)
//             index = sliteindex;
//             dotsitems.forEach(el => el.classList.remove("active"));
//             e.target.classList.add("active")
//             postionx = index * -slideritemWithd;
//             slidermain.style = `transform: translateX(${ postionx }px)`;
//         })
//     });

//     function handchage(direction) {
//         if (direction == 1) {

//             if (index >= sliderslenght - 1) {
//                 index = sliderslenght - 1;
//                 return;
//             }
//             postionx = postionx - slideritemWithd;

//             slidermain.style = `transform: translateX(${ postionx }px)`;
//             index++;
//         }
//         else if (direction == -1) {

//             if (index <= 0) {
//                 index = 0;
//                 return;
//             }
//             postionx = postionx + slideritemWithd;
//             slidermain.style = `transform: translateX(${ postionx }px)`;
//             index--;
//         }
//         dotsitems.forEach(el => el.classList.remove("active"));
//         dotsitems[index].classList.add("active");

//     }
// }
// );
// su kien click
function menudulich() {
  var event = document.querySelector(".main-dropdown");
  event.style.display = "block";
  var event2 = document.querySelector(".ubertor-news");
  event2.style.display = "none";
  var event3 = document.querySelector(".main-dropdown2");
  event3.style.display = "none";


};
function menutintuc() {

  var event2 = document.querySelector(".ubertor-news");
  event2.style.display = "block";
  var event3 = document.querySelector(".main-dropdown2");
  event3.style.display = "none";
  var event = document.querySelector(".main-dropdown");
  event.style.display = "none";

};
function menukhuyenmai() {
  var event3 = document.querySelector(".main-dropdown2");
  event3.style.display = "block";
  var event = document.querySelector(".main-dropdown");
  event.style.display = "none";
  var event2 = document.querySelector(".ubertor-news");
  event2.style.display = "none";


};
function closedmenu() {
  var event = document.querySelector(".main-dropdown");
  event.style.display = "none";
  var event2 = document.querySelector(".ubertor-news");
  event2.style.display = "none";
  var event3 = document.querySelector(".main-dropdown2");
  event3.style.display = "none";
};
// su kien doi img



// menu xe
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }
}

function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
  }
}

function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
// ----------------sự kiện nút đặt hàng-------------------
  function checkLogin() {
    if (!isLoggedIn()) {
    alert('Bạn cần đăng nhập trước khi mua hàng');
  // Chuyển hướng đến trang đăng nhập
  window.location.href = "/DangNhap.html";
    } else {
    // Thực hiện các thao tác mua hàng
    buyItem();
    }
}

  function isLoggedIn() {
    // Hàm kiểm tra xem người dùng đã đăng nhập chưa
    return false;
}

  function buyItem() {
    // Hàm thực hiện các thao tác mua hàng
    alert('Bạn đã mua hàng thành công');
}

