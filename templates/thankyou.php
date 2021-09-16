<?php 
/* Template Name: Thank You Page */
?>
<!doctype html><html class='no-js' lang=en dir=ltr>
<head>
<meta charset='utf-8'>
<meta http-equiv='x-ua-compatible' content='ie=edge'>
<meta name=viewport content='width=device-width, initial-scale=1.0'>
<title><?php wp_title();?></title>
	
	<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5WW98D');</script>

<!-- End Google Tag Manager -->
	
	<?php wp_head();?>
<link rel=icon href='<?php bloginfo('template_url'); ?>/favicon.ico' />
<link rel=stylesheet href='<?php bloginfo('template_url'); ?>/css/foundation.min.css' />
<link rel=stylesheet href='<?php bloginfo('template_url'); ?>/js/bxslider/jquery.bxslider.min.css' />
<link rel=stylesheet href='<?php bloginfo('template_url'); ?>/css/jquery.mmenu.all.css' />
<link rel=stylesheet href='<?php bloginfo('stylesheet_url'); ?>' type='text/css' media=screen />

<!-- JSON-LD markup Generated for Structured Data Markup Helper by Google. -->
<script type="application/ld+json">
[ {
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Dental Studio 101",
  "image" : "http://www.dentalstudio101.com/wp-content/themes/ds101/img/logo.png",
  "email" : "info@dentalstudio101.com",
  "telephone" : "(480) 488-4852",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "33739 North Scottsdale Road #101",
    "addressLocality" : "Scottsdale",
     "addressRegion" : "Arizona",
     "postalCode" : "85266",
     "addressCountry" : "United States"
  },
  "url" : "http://www.dentalstudio101.com/"
}, {
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "email" : "info@dentalstudio101.com",
  "telephone" : "(480) 488-4852"
} ]
</script>
<!-- Global site tag (gtag.js) - Google Ads: 817881512 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-817881512"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-817881512');
</script>


</head><body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WW98D" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Event snippet for Form Fill conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-817881512/d9U1CL7FlocBEKjD_4UD'});
</script>
<?php include_once('menu.php');?>
<div id=single>
	<div class=block1>
		<div class=row>
			<div class='large-12 columns ttl'>
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
	<div class=block2>
		<div class=row>
			<div class='large-12 columns'>
			<?php
				if(have_posts()) : while (have_posts()) : the_post();
					the_content();
				endwhile; endif;
			?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>
