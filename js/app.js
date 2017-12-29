const navBar = document.getElementById("site-navigation");

window.addEventListener("scroll", function(){
    if(window.scrollY > 50) {
       navBar.classList.add = "scrolled";
    } else if (window.scrollY < 50) {
       navBar.classList.add = "unscrolled";        
    }
});

jQuery(document).ready(function ($) {
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
});

