const navbar = document.getElementById("site-navigation");

// Navbar add class
window.addEventListener("scroll", function(){
    if(window.scrollY > 50) {
       navbar.classList.add("scrolled");
    } else if (window.scrollY < 50) {
       navbar.classList.remove("scrolled");        
    }
});

// load plugins
jQuery(document).ready(function ($) {
    // Call Nivo Slider
    $(window).load(function() {
        $('#slider').nivoSlider();
    });


// Call Owl Carousel    
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel();
      });
});
