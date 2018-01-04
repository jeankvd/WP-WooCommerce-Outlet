const navbar = document.getElementById("site-navigation");

// Navbar add class
window.addEventListener("scroll", function(){
    if(window.scrollY > 80) {
       navbar.classList.add("scrolled");
    } else if (window.scrollY < 80) {
       navbar.classList.remove("scrolled");        
    }
});

// load plugins
jQuery(document).ready(function ($) {
    // Call Nivo Slider
    $(window).load(function() {
        $('#slider').nivoSlider({
            prevText: '<',
            nextText: '>'  
        });
    });


// Call Owl Carousel    
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });
      });
});
