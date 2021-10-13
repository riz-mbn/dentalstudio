<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dental_studio
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel=icon href='<?php echo MBN_ASSETS_URI ?>/img/favicon.ico' />
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5WW98D');</script> -->
	<!-- End Google Tag Manager 
	
	<?php wp_head(); ?>
	
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/landing-assets/css/landing-css.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/landing-assets/js/landing.js"></script>


	<script type="text/javascript" src="//cdn.callrail.com/companies/183380435/bb6f803ba53fdbab5a0a/12/swap.js"></script>
	-->

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '236244464038933');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=236244464038933&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->

</head>

<body <?php body_class('landing-template'); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WW98D" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="page" class="landing-page">
		<div class="navigation" style="z-index:999">
			<div class="logo">
				<img src="<?= get_template_directory_uri(); ?>/landing-assets/images/landing-logo.png" alt="">
			</div>
			<ul>
				<li><a href="#intro">intro</a></li>
				<li><a href="#state">state-of-the-art cosmetic dentistry</a></li>
				<li><a href="#why">why dental studio 101</a></li>
				<li><a href="#team">our team</a></li>
				<li><a href="#treatments">treatments</a></li>
			</ul>
			<div class="call">
				<a href="tel:4804884852">
					<span>(480) 488-4852</span>
					<span>“Dedication to Quality and Consistency..”</span>
				</a>
			</div>

			<div class="burger">
				<a href="javascript:;">
					<svg aria-hidden="true" data-prefix="far" data-icon="bars" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z"/></svg>
				</a>
			</div>
		</div>
		<?php if (!is_page(5699)): ?>
			<header id="intro">
				<div class="grid-container">
					<div class="grid-x grid-margin-x">
						<div class="cell medium-12 large-5">
							<div class="logo-control">
								<a href="/">
									<img src="<?= get_template_directory_uri(); ?>/landing-assets/images/landing-logo.png" alt="">
								</a>
							</div>
							<div class="text-center" style=";margin-left:auto;margin-right:auto">
								<p><b>Dental Studio 101</b> is Arizona’s premier cosmetic dental facility, offering award-winning cosmetic and preventive dentistry for over 30 years.</p>
								<p>To book an appointment or get a quote <br>for a service, fill out the form below. </p>
							</div>
							

							<div class="form-box">
								<!-- <?php // do_shortcode( '[contact-form-7 id="5696" title="Landing - Header: Contact Form"]' ); ?> -->
                            	<?php echo do_shortcode('[gravityform id="11" title="false" description="false" ajax="false"]'); ?>
							</div>
						</div>
						<!-- <div class="cell medium-12 large-1 position-relative">
							
							
						</div> -->
						<div class="cell medium-12 large-6 large-offset-1 position-relative align-self-bottom ">
							<div class="hero-featured">
								<img src="<?= get_template_directory_uri(); ?>/landing-assets/images/landing-hero.png" alt="">
							</div>
							<div class="slider-holder">
								<div class="slider-testimony">
									<div class="slider-item">
										<a href="https://www.youtube.com/watch?v=Hh_95QMNBMk" data-fancybox class="play-button"></a>
										<a href="https://www.youtube.com/watch?v=Hh_95QMNBMk" data-fancybox class="video-thumb">
											<img src="<?php echo get_template_directory_uri(); ?>/landing-assets/images/video-thumb-dr-alex.jpg" alt="">
										</a>
										<div class="video-content">
											<span class="title">Why Dental Studio 101?</span>
											<span class="content">Dental Studio 101 is committed to providing premier customer service. When you first arrive at our state-</span>
											<span class="link">Read More</span>
										</div>
									</div>
									<div class="slider-item">
										<a href="https://www.youtube.com/watch?v=ZFlWwQC8zcE" data-fancybox class="play-button"></a>
										<a href="https://www.youtube.com/watch?v=ZFlWwQC8zcE" data-fancybox class="video-thumb">
											<img src="<?php echo get_template_directory_uri(); ?>/landing-assets/images/video-thumb-dr-alex.jpg" alt="">
										</a>
										<div class="video-content">
											<span class="title">Why Dental Studio 101?</span>
											<span class="content">Dental Studio 101 is committed to providing premier customer service. When you first arrive at our state-</span>
											<span class="link">Read More</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		<?php endif ?>