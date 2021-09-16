
//Document ready function scripts 
jQuery(function($) {

    $(".click-scroll").click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 1000);
        
        return false;
    });

    // Team Member slider
    $('.team-members').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
              breakpoint: 1600,
              settings: {
                slidesToShow: 6
              }
            },
            {
              breakpoint: 1367,
              settings: {
                slidesToShow: 5
              }
            },
            {
              breakpoint: 1170,
              settings: {
                slidesToShow: 4
              }
            },
            {
              breakpoint: 860,
              settings: {
                slidesToShow: 3
              }
            },
            {
              breakpoint: 640,
              settings: {
                slidesToShow: 2
              }
            }
        ]
    });

    

    // Awards slider
    $('.awards-slider').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
              breakpoint: 1170,
              settings: {
                slidesToShow: 5
              }
            },
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4
              }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 3
              }
            },
            {
              breakpoint: 640,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 479,
              settings: {
                slidesToShow: 1
              }
            }
        ]
    });

    //Review slider
    $('.review-slider').slick({
        adaptiveHeight: true
    });
});

    


