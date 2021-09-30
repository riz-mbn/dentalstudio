jQuery(function($){
	
	$('.slider-testimony').slick({
		'prevArrow': '<button type="button" class="slick-prev"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z" class=""></path></svg></button>',
		'nextArrow': '<button type="button" class="slick-next"><svg aria-hidden="true" data-prefix="fas" data-icon="chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg></button>',
	});

	$('.testimonials').slick({
		'prevArrow': '<button type="button" class="slick-prev"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z" class=""></path></svg></button>',
		'nextArrow': '<button type="button" class="slick-next"><svg aria-hidden="true" data-prefix="fas" data-icon="chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg></button>',
		'adaptiveHeight': true
	});
	
	$('.slider-video-testimony').slick({
		'prevArrow': '<button type="button" class="slick-prev"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z" class=""></path></svg></button>',
		'nextArrow': '<button type="button" class="slick-next"><svg aria-hidden="true" data-prefix="fas" data-icon="chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg></button>',
	});


	$('#service-card .box').click(function(){
		var getControl = $(this).data('service');
		var getVisible = $('.service-content .content-box:visible');
		if (!$(this).hasClass('active')) {
			$('#service-card .box.active').removeClass('active');
			$(this).addClass('active');
		}

		if (getVisible.attr('id') != getControl) {
			getVisible.slideUp();
			$('#' + getControl).slideDown();
		}
		
	});


	$(".form-control input, .form-control textarea").focus(function(){
	  	$(this).closest('.form-control').addClass("is-active is-completed");
	});

	$(".form-control input, .form-control textarea").focusout(function(){
	  	if($(this).val() === ""){
	  		$(this).closest('.form-control').removeClass("is-completed");
	  		$(this).closest('.form-control').removeClass("is-active");
	  	}
	});


	$(".navigation ul a").click(function(e) {
		e.preventDefault();
		var getTarget = $(this).attr('href');
		var getVarHeight = $('.navigation').outerHeight();
	    $('html, body').animate({
	        scrollTop: $(getTarget).offset().top - getVarHeight
	    }, 800);
	    $('.navigation ul').removeClass('is-active');
	});


	$('.burger a').click(function(e){
		e.preventDefault();
		var getVarHeight = $('.navigation').outerHeight();
		$('.navigation ul').toggleClass('is-active').css('top' , getVarHeight + 'px');
	})

});