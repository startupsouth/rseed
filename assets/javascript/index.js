
changeIcon = (icons) => icons.classList.toggle('fa-times');


let jerry = document.getElementById("toggle");
function borderChange(){
    jerry.classList.toggle("nav-border");
}





const header=document.querySelector(".navbar");
let lastScroll=window.scrollY;

window.addEventListener("scroll", () =>{
    if(lastScroll < window.scrollY){
        header.classList.add("navbar-hide");
    }else{
        header.classList.remove("navbar-hide");
    }
    lastScroll=scrollY
});



window.addEventListener("scroll", () => {
    const banner = document.getElementById("banner");
    if(window.scrollY > 50) {
        banner.classList.add("banner-top-active");
    }else{
        banner.classList.remove("banner-top-active");
    }
});




window.addEventListener("scroll", () => {
    const menuBar = document.getElementById("menu-bar");
    if(window.scrollY > 50) {
        menuBar.classList.add("bar-menu");
    }else{
        menuBar.classList.remove("bar-menu");
    }
});






// const navbar=document.getElementsByClassName("navbar-toggler");
// let Zastscroll=window.scrollY;

// window.addEventListener("scroll", () =>{
//     if(Zastscrollscroll < window.scrollY){
//         navbar.classList.add("icon_bars");
//     }else{
//         navbar.classList.remove("icon_bars");
//     }
//     Zastscroll=scrollY
// });


$('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
  });
