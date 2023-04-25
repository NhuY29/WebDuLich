window.addEventListener("load", function () {
    const slider = document.querySelector(".slider");
    const slidermain = document.querySelector(".slider-main");
    const slideritems = document.querySelectorAll(".slider-item");
    const nextbtn = document.querySelector(".slider-next");
    const prevbtn = document.querySelector(".slider-prev");
    const dotsitems = document.querySelectorAll(".slider-dot-item");
    const slideritemWithd = slideritems[0].offsetWidth;
    const sliderslenght = slideritems.length;
    let postionx = 0;
    let index = 0;
    const dots = document.querySelector(".slider-dots");
    nextbtn.addEventListener("click", function () {
        handchage(1);
    });
    prevbtn.addEventListener("click", function () {
        handchage(-1);
    });

    dotsitems.forEach(item => {
        item.addEventListener("click", function (e) {
            const sliteindex = parseInt(e.target.dataset.index)
            index = sliteindex;
            dotsitems.forEach(el => el.classList.remove("active"));
            e.target.classList.add("active")
            postionx = index * -slideritemWithd;
            slidermain.style = `transform: translateX(${ postionx }px)`;
        })
    });

    function handchage(direction) {
        if (direction == 1) {

            if (index >= sliderslenght - 1) {
                index = sliderslenght - 1;
                return;
            }
            postionx = postionx - slideritemWithd;

            slidermain.style = `transform: translateX(${ postionx }px)`;
            index++;
        }
        else if (direction == -1) {

            if (index <= 0) {
                index = 0;
                return;
            }
            postionx = postionx + slideritemWithd;
            slidermain.style = `transform: translateX(${ postionx }px)`;
            index--;
        }
        dotsitems.forEach(el => el.classList.remove("active"));
        dotsitems[index].classList.add("active");

    }
}
);
function menudulich(){
    var event = document.querySelector(".main-dropdown");
    event.style.display = "block";
    
};
function menutintuc(){
   
    var event2 = document.querySelector(".ubertor-news");
    event2.style.display = "block";
};
function menukhuyenmai(){
    var event3 = document.querySelector(".main-dropdown2");
    event3.style.display = "block";
    
};
function closedmenu(){
    var event = document.querySelector(".main-dropdown");
    event.style.display = "none";
    var event2 = document.querySelector(".ubertor-news");
    event2.style.display = "none";
    var event3 = document.querySelector(".main-dropdown2");
    event3.style.display = "none";
};