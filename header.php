<!DOCTYPE html>
<html class="htmlclass no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel=icon href='<?php echo MBN_ASSETS_URI ?>/img/icon/favicon.ico' />

    <?php wp_head() ?>
    
	<?php if ( is_page_template('templates/dr-boyle.php') ): ?>
	    <script type="application/ld+json">
		{
		  "@context": "https://schema.org/",
		  "@type": "Person",
		  "name": "Dr. Megan Peterson Boyle",
		  "url": "https://www.dentalstudio101.com/cosmetic-dentists/dr-megan-peterson-boyle/",
		  "image": "https://dentalstudio101.mbndigital-staging.com/wp-content/themes/mybizniche/resources/img/img_request.png",
		  "sameAs": [
			"https://www.facebook.com/DrMeganPeterson/",
			"https://health.usnews.com/dentists/megan-peterson-boyle-1757105",
			"https://findadentist.ada.org/az/maricopa/scottsdale/general-practice/dr-megan-c-peterson-boyle-3900466",
			"https://doctor.webmd.com/doctor/megan-peterson-boyle-1567d32b-91f2-4320-bc50-d2e4626a2dc6-overview",
			"https://www.dentalstudio101.com/"
		  ],
		  "jobTitle": "Dentist",
		  "worksFor": {
			"@type": "Organization",
			"name": "Dental Studio 101"
		  }  
		}
		</script>
    <?php elseif (is_page_template('templates/dr-mark.php')): ?>
        <script type="application/ld+json">
		{
		  "@context": "https://schema.org/",
		  "@type": "Person",
		  "name": "Dr. Mark Peck",
		  "url": "https://www.dentalstudio101.com/cosmetic-dentists/dr-mark-peck/",
		  "image": "https://www.dentalstudio101.com/wp-content/uploads/2017/05/Dr-Mark-Peck.jpg",
		  "sameAs": [
			"https://www.healthgrades.com/dentist/dr-mark-peck-xh4p2",
			"https://doctor.webmd.com/doctor/mark-peck-b090d5ed-a3f5-4a4f-a50d-26b7f998a248-overview",
			"https://www.linkedin.com/in/mark-peck-29a97314",
			"https://www.facebook.com/DentalStudio101",
			"https://www.dentalstudio101.com/"
		  ],
		  "jobTitle": "Dentist",
		  "worksFor": {
			"@type": "Organization",
			"name": "Dental Studio 101"
		  }  
		}
		</script>
	<?php elseif( is_blog_page() ): ?>
        <script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "BlogPosting",
		  "mainEntityOfPage": {
			"@type": "WebPage",
			"@id": "https://www.dentalstudio101.com/our-blog/"
		  },
		  "headline": "Dental Studio 101 Blog",
		  "description": "Read our recent Scottsdale dental blog posts and articles. Dental Studio 101 will keep you informed about the latest trends and topics in dentistry. Call us!",
		  "image": "https://dentalstudio101.mbndigital-staging.com/wp-content/themes/mybizniche/resources/img/logo-white-small.svg",  
		  "author": {
			"@type": "Organization",
			"name": "Dr. Mark Peck"
		  },  
		  "publisher": {
			"@type": "Organization",
			"name": "",
			"logo": {
			  "@type": "ImageObject",
			  "url": ""
			}
		  },
		  "datePublished": ""
		}
		</script>
	<?php else: ?>
		<script type="application/ld+json">
			{
				"@context": "https://schema.org",
				"@type": "Dentist",
				"name": "Dental Studio 101",
				"hasMap": "https://goo.gl/maps/2jWMfCvqdYiUGoTx5",
				"image": "https://dentalstudio101.mbndigital-staging.com/wp-content/uploads/2021/10/Dental-Studio-101.jpg",
				"url": "https://www.dentalstudio101.com/",
				"telephone": "(480) 372-5079",
				"priceRange": "$$",
				"description": "Dental Studio 101 is voted as best Scottsdale cosmetic dentist. Our highly advanced dental spa with the most cutting-edge technology. Call Us Today!",
				"address": {
				"@type": "PostalAddress",
				"streetAddress": "33739 N Scottsdale Rd Suite 101",
				"addressLocality": "Scottsdale",
				"addressRegion": "AZ",
				"postalCode": "85266",
				"addressCountry": "US"
				},
				"geo": {
				"@type": "GeoCoordinates",
				"latitude": 33.7909975,
				"longitude": -111.9252521
				},
				"openingHoursSpecification": [{
				"@type": "OpeningHoursSpecification",
				"dayOfWeek": [
					"Monday",
					"Tuesday"
				],
				"opens": "07:00",
				"closes": "17:00"
				},{
				"@type": "OpeningHoursSpecification",
				"dayOfWeek": [
					"Wednesday",
					"Thursday"
				],
				"opens": "07:00",
				"closes": "14:00"
				}],
				"sameAs": [
				"https://www.facebook.com/DentalStudio101AZ/",
				"https://www.rateabiz.com/reviews/dental-studio-101-scottsdale-az/6e8952381f45c1b2ddeb3b39555ebb4d/summary",
				"https://twitter.com/DentalStudio101",
				"https://www.youtube.com/user/DentalStudio101AZ/videos"
				]
			}
		</script>
	<?php endif; ?>

	<!-- Global site tag (gtag.js) - Google Ads: 817881512 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-817881512"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'AW-817881512');
	</script>
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
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "Dentist",
		"name": "Dental Studio 101",
		"hasMap": "https://goo.gl/maps/2jWMfCvqdYiUGoTx5",
		"image": "https://dentalstudio101.mbndigital-staging.com/wp-content/uploads/2021/10/Dental-Studio-101.jpg",
		"url": "https://www.dentalstudio101.com/",
		"telephone": "(480) 488-4852",
		"priceRange": "$$",
		"description": "Dental Studio 101 is voted as best Scottsdale cosmetic dentist. Our highly advanced dental spa with the most cutting-edge technology. Call Us Today!",
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "33739 N Scottsdale Rd Suite 101",
			"addressLocality": "Scottsdale",
			"addressRegion": "AZ",
			"postalCode": "85266",
			"addressCountry": "US"
		},
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": 33.7909975,
			"longitude": -111.9252521
		},
		"openingHoursSpecification": [{
			"@type": "OpeningHoursSpecification",
			"dayOfWeek": [
			"Monday",
			"Tuesday"
			],
			"opens": "07:00",
			"closes": "17:00"
		},{
			"@type": "OpeningHoursSpecification",
			"dayOfWeek": [
			"Wednesday",
			"Thursday"
			],
			"opens": "07:00",
			"closes": "14:00"
		}],
		"sameAs": [
			"https://www.facebook.com/DentalStudio101AZ/",
			"https://www.rateabiz.com/reviews/dental-studio-101-scottsdale-az/6e8952381f45c1b2ddeb3b39555ebb4d/summary",
			"https://twitter.com/DentalStudio101",
			"https://www.youtube.com/user/DentalStudio101AZ/videos"
		]
	}
	</script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-30603505-1', 'auto');
		ga('send', 'pageview');
	</script>

</head>
<body <?php body_class() ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WW98D" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	

<button data-scroll="up" class="btn_scroll_up"><span>UP</span></button>
<div id="wrapper"> 
    <?php 
    if( !is_front_page() ): ?>
        <header id="header" class="page_header" data-sticky-container data-toggler=".show-menu">
            <div class="hsnav-s7 sticky" data-sticky data-options="marginTop:0">
                <div class="navbar">
                    <div class="navwrap">
                        <a class="navlogo" href="<?php echo home_url(); ?>">
                            <figure>
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/logo-white-small.svg" alt="" width="196" height="53">
                            </figure>
                        </a>
                        <nav class="navmenu show-for-large">
                            <?php
                                wp_nav_menu( array( 
                                    'theme_location' => 'main-menu',
                                    'menu'         => '',
                                    'container'    => 'ul',
                                    'items_wrap' => '<ul class="menu align-center dropdown" data-dropdown-menu>%3$s</ul>' ,
                                    'menu_class'   => 'menu align-center dropdown',
                                ));
                            ?> 
                        </nav>
                        <div class="navutil">
                            <a href="tel:4803725079">
                                <div class="icon_blurb">						
                                    <div class="icon_img icn_phone"></div>
                                    <div class="icon_txt">(480) 372-5079</div>
                                </div>
                                <div class="subtext">"Dedication to Quality and Consistency.."</div>
                            </a>
                        </div>
                        <span class="navicon hide-for-large" data-toggle="header">mobile menu</span>
                        <nav class="mobmenu hide-for-large">
                            <?php
                                wp_nav_menu( array( 
                                    'theme_location' => 'main-menu',
                                    'menu'         => '',
                                    'container'    => 'ul',
                                    'items_wrap' => '<ul class="menu accordion-menu" data-multi-open="false" data-accordion-menu data-submenu-toggle="true">%3$s</ul>' ,
                                    'menu_class'   => 'menu align-center dropdown',
                                ));
                            ?> 
                        </nav>
                    </div>
                </div>
            </div>            
        </header>
    
    <?php elseif( is_front_page() ): ?>
        <header id="header" class="home_header" data-sticky-container data-toggler=".show-menu">
            <div class="hsnav-s7 sticky" data-sticky data-options="marginTop:0">
                <div class="navbar">
                    <div class="grid-container">
                        <div class="navwrap">
                            <a class="navlogo" href="<?php echo home_url(); ?>">
                                <figure>
                                    <img src="<?php echo MBN_ASSETS_URI ?>/img/logo-white-small.svg" alt="" width="196" height="53">
                                </figure>
                            </a>
                            <nav class="navmenu show-for-large">
                                <?php
                                    wp_nav_menu( array( 
                                        'theme_location' => 'main-menu',
                                        'menu'         => '',
                                        'container'    => 'ul',
                                        'items_wrap' => '<ul class="menu align-center dropdown" data-dropdown-menu>%3$s</ul>' ,
                                        'menu_class'   => 'menu align-center dropdown',
                                    ));
                                ?> 
                            </nav>
                            <div class="navutil">
                                <a href="tel:4803725079">
                                    <div class="icon_blurb">				
                                        <div class="icon_img icn_phone black"></div>		
                                        <div class="icon_txt">(480) 372-5079</div>
                                    </div>
                                    <div class="subtext">"Dedication to Quality and Consistency.."</div>
                                </a>
                            </div>
                            <span class="navicon hide-for-large" data-toggle="header">mobile menu</span>
                            <nav class="mobmenu hide-for-large">
                                <?php
                                    wp_nav_menu( array( 
                                        'theme_location' => 'main-menu',
                                        'menu'         => '',
                                        'container'    => 'ul',
                                        'items_wrap' => '<ul class="menu accordion-menu" data-multi-open="false" data-accordion-menu data-submenu-toggle="true">%3$s</ul>' ,
                                        'menu_class'   => 'menu align-center dropdown',
                                    ));
                                ?> 
                            </nav>
                        </div>
                    </div>
                </div>
            </div>            
        </header>

    <?php endif; ?>
    <main id="content" class="content">