const navbar = document.getElementById("site-navigation");

window.addEventListener("scroll", function(){
    if(window.scrollY > 50) {
       navbar.classList.add("scrolled");
    } else if (window.scrollY < 50) {
       navbar.classList.remove("scrolled");        
    }
});

jQuery(document).ready(function ($) {
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
});

