(function($){

    var app = {
        onReady: function(){
            app.customDropdown();
        },	
        onLoad: function(){
            $(document).foundation();
            app.utils();
        },


		utils: function(){
            
            $('.navbar .btn-user').click(function(){
                $('#header').toggleClass('show-account');
                $('#header').removeClass('show-classes');
                $('#header').removeClass('show-menu');
            });
            
            $('.navbar .btn-classes').click(function(){
                $('#header').toggleClass('show-classes');
                $('#header').removeClass('show-account');
                $('#header').removeClass('show-menu');
            });

            $(window).scroll(function() {
                var button_up;
                var sticky = false;
                var top = $(window).scrollTop();
                    
                if (top > 0) {

                    $('.sticky').addClass('is-stuck');
                    $('.sticky').removeClass('is-anchored');
                    sticky = true;

                } else {

                        $('.sticky').addClass('is-anchored');
                        $('.sticky').removeClass('is-stuck');

                }  
                /* Button Scroll Up */
                (button_up = function() {
                    var button;
                    button = $('.btn_scroll_up');
                    if (top > $(window).offset().top){
                        return button.fadeIn('slow');
                    } else {
                        return button.fadeOut('slow');
                    }
                })();       

            });   
            
            //Click event to scroll to top
            $('.btn_scroll_up').click(function(){
                $('html, body').animate({scrollTop : 0},800);
                return false;
            }); 

            $('.testimonials').slick({
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                    }
                },
                    {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                ]      
            });

            var $window = $(window).width();

            if( $window < 1025){
                $('.services-tabs').slick({
                    infinite: true,
                    speed: 300,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    variableWidth: true,
                    focusOnSelect: true,
                    responsive: [
                        {
                            breakpoint: 1024,
                            settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                            }
                        },
                            {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]      
                });
            }
            $('.services-tabs .slick-arrow').click(function(){
                $('.services-tabs .slick-track').find('.slick-current a').attr('aria-selected', 'true');
                var id_content = $('.services-tabs .slick-track').find('.slick-current a').attr('href');

                $(id_content).addClass('is-active').siblings('.tabs-panel').removeClass('is-active');

            })

        },

        customDropdown: function() {
            $('.custom_dropdown > li').hover(function(){
                $(this).addClass('hover');
            }, function(){
                $(this).removeClass('hover');
            })

            $('.custom_dropdown > li').click(function(){
                $(this).toggleClass('hover');
            });

            
        }
        
        
    }


    document.addEventListener('DOMContentLoaded', app.onReady);
    window.addEventListener('load', app.onLoad);

})(jQuery);
