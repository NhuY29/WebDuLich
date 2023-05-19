 
function clickmenu(){
    var event = document.querySelector(".menu-classlist");
    event.style.display = "block";
}
function closedmenu(){
    var event = document.querySelector(".menu-classlist");
    event.style.display = "none";
}

function datve(){
let postionx = 0;
const slidermain = document.querySelector(".header");
 var witditem = document.querySelector(".header").offsetWidth 
 postionx = postionx - witditem;
slidermain.style = `transform: translateY(${ postionx }vh)`;
    document.querySelector(".header").style.display = "none";
    document.querySelector(".loadi").style.display = "block";
    document.querySelector(".main").style.display = "block";
}