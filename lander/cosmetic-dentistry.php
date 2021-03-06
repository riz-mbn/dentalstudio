<?php
/**
 * Template Name: LP Cosmetic Dentistry
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title();?></title>
    <link rel=icon href='https://www.dentalstudio101.com/wp-content/themes/ds101/favicon.ico' />

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5WW98D');</script>
<!-- End Google Tag Manager -->

    <?php wp_head(); ?>
    
    <!--  CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lander/css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lander/css/main.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,600i,700,700i" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet"> 

    <!-- jQuery, plugins JS -->
    <script src="<?php bloginfo('template_url'); ?>/lander/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/lander/js/plugins.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-30603505-1"></script>

    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-30603505-1');
    </script> 

    <!-- Global site tag (gtag.js) - Google Ads: 817881512 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-817881512"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-817881512');
    </script>

</head>

<body> 
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WW98D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div id="page"> 
        <header id="header">
            <div class="grid-container">
                <div id="logo"><a href="/cosmetic-dentistry"><img src="<?php bloginfo('template_url'); ?>/lander/images/logo.png" alt=""></a></div>
            </div>     
        </header>

        <section id="hero">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="medium-8 large-7 cell">
                        <hgroup>
                            <h4>Award Winning</h4>
                            <h1>Cosmetic Dentistry</h1>
                            <h6>in Scottsdale for <span>30</span>+ Years</h6>
                        </hgroup>  
                        <figure class="show-for-small-only">
                            <img src="<?php bloginfo('template_url'); ?>/lander/images/hero-image.png" alt="">
                        </figure>
                        <div class="hero-form">
                            <h5>Schedule Your Appointment</h5>
                            <p>The staff at <strong>Dental Studio 101</strong> is kind, compassionate and highly educated, and are here to help you through every step of your appointment.</p>
                            <?php //echo do_shortcode('[contact-form-7 id="4064" title="Schedule your Appointment (Cosmetic Dentistry)"]'); ?>
                            <?php echo do_shortcode('[gravityform id="6" title="false" description="false" ajax="false"]'); ?>
                        </div>
                    </div>  
                </div> 
            </div>    
        </section> 
        
        <main id="content">
            <section class="section-1">
                <div class="grid-container">
                    <div class="grid-x intro-content">
                        <div class="large-6 cell intro-1">
                            <h2><small>Our Team at</small> Dental Studio 101</h2>
                            <p>is built around the following equally important priorities. Providing state of the art cosmetic dentistry services and developing trusted relationships with our patients.</p>
                        </div>
                        <div class="large-5 large-offset-1 cell">
                            <p>We've had the joy of providing thousands of cosmetic dental services in Scottsdale for over 30 years. Many of the people who came through our doors at the beginning still continue to see us on a regular schedule.</p>
                            <p>Thanks to a dedication to quality and consistency, we've built a community of people who thrive and belong. Dental Studio 101 is a special place where you can "Smile Out Loud".</p>
                        </div>
                    </div>
                    <div class="grid-x owners-info">
                        <div class="large-12 cell">
                            <blockquote class="owner-quote">
                                <p>Dedication to Quality <span>and Consistency..</span></p>
                                <cite> <span>Dr. Mark Peck  &  Dr. Megan Peterson Boyle </span><hr></cite>
                            </blockquote>
                            <figure class="owner-picture">
                                <img src="<?php bloginfo('template_url'); ?>/lander/images/img-dr-mark-dr-megan.png" alt="Dr. Mark & Dr. Megan">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="grid-container fluid ">
                    <div class="grid-x team-members">
                        <div class="cell auto">
                            <div class="member-item">
                                <figure>
                                    <img src="<?php bloginfo('template_url'); ?>/lander/images/Dr-Christina.jpg" alt="Christina Owens">
                                    <figcaption>
                                        <span class="name">
                                            Christina Owens
                                            <small>- Dental Hygienist</small>
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="cell auto">
                            <div class="member-item">
                                <figure>
                                    <img src="<?php bloginfo('template_url'); ?>/lander/images/dr-Mario-Hernandez.jpeg" alt="Mario Hernandez">
                                    <figcaption>
                                        <span class="name">
                                            Mario Hernandez
                                            <small>- Treatment Coordinator</small>
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="cell auto">
                            <div class="member-item">
                                <figure>
                                    <img src="<?php bloginfo('template_url'); ?>/lander/images/dr-Cori-Rasner.jpeg" alt="Cori Rasner">
                                    <figcaption>
                                        <span class="name">
                                            Cori Rasner
                                            <small>- Dental Hygienist</small>
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="cell auto">
                            <div class="member-item">
                                <figure>
                                    <img src="<?php bloginfo('template_url'); ?>/lander/images/Dr-Jan.jpg" alt="Jan Cox-Arcaro">
                                    <figcaption>
                                       <span class="name">
                                        Jan Cox-Arcaro
                                            <small>- Treatment Coordinator</small>
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="cell auto">
                            <div class="member-item">
                                <figure>
                                    <img src="<?php bloginfo('template_url'); ?>/lander/images/Dr-Joy.jpg" alt="Joy Arcaro">
                                    <figcaption>
                                        <span class="name">
                                            Joy Arcaro
                                            <small>- Concierge</small>
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="cell auto">
                            <div class="member-item">
                                <figure>
                                    <img src="<?php bloginfo('template_url'); ?>/lander/images/Dr-FDanielle.jpg" alt="FDanielle Waleryszak">
                                    <figcaption>
                                        <span class="name">
                                            FDanielle Waleryszak
                                            <small>- Dental Assistant</small>
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section-2">
                <div class="grid-container">
                    <div class="clients-say">
                        <h2>What Our Clients Say</h2>
                        <div class="review-slider">
                            <div class="slick-slide">
                                <div class="review-item">
                                    <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/google-reviews.png" alt=""></figure>
                                    <blockquote>
                                        <p>First visit went very well. Good introduction to the practice, facility and people. Modern, efficient office beautifully styled and very comfortable. Great ???work flow???. Up to date equipment and methodologies. Complete satisfaction.</p>
                                        <cite>Edward H</cite>
                                    </blockquote>
                                </div>
                            </div> 
                            <div class="slick-slide">
                                <div class="review-item">
                                    <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/google-reviews.png" alt=""></figure>
                                    <blockquote>
                                        <p>My experience was ???excellent??? in every way! Everyone was genuinely friendly and very professional; from the time I was greeted in the lobby, thru x-rays, cleaning, and exam by Dr. Peterson. Plus, the office with it???s waterfall and stream is also second to none.</p>
                                        <cite>Paul C</cite>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="review-item">
                                    <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/google-reviews.png" alt=""></figure>
                                    <blockquote>
                                        <p>Dr. Mark Peck and his assistant Jan are wonderful as is his whole staff. I am a huge chicken and they immediately started doing and saying things to put me at ease. I felt no pain and left feeling relieved. I would recommend who has anxiety to give them a try, you will not be sorry.</p>
                                        <cite>Bobbie L</cite>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="review-item">
                                    <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/google-reviews.png" alt=""></figure>
                                    <blockquote>
                                        <p>he staff is always friendly, professional and prepared. We appreciate Mark???s commitment to excellence and of course his warm personality. The office is artistically interesting and clean as a whistle. Then, of course, there were the cookies??? the dark chocolate were the best!</p>
                                        <cite>Mary N</cite>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="slick-slide">
                                <div class="review-item">
                                    <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/google-reviews.png" alt=""></figure>
                                    <blockquote>
                                        <p>"In 19 years, never a bad experience from the front desk to the dental assistant to the doctor. I have recommended them to a number of friends and they are all happy with them. The facility is beautiful, neat and clean."</p>
                                        <cite>Barbarah H</cite>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="review-us">
                            <h6>USED US RECENTLY?</h6>
                            <a href="https://search.google.com/local/writereview?placeid=ChIJASOzKz55K4cRA4t7rrKcxkE" target="_blank" class="button primary">Leave a review</a>
                        </div>
                    </div>
                    <div class="awards-list">
                            <h3>Top Dentists over 10 Consecutive Years</h3>
                        <div class="grid-x small-up-2 medium-up-4 large-up-6 awards-slider">
                            <div class="cell">
                                <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/Top-Dentists-2013.png" alt=""></figure>
                            </div>
                            <div class="cell">
                                <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/Top-Dentists-2014.png" alt=""></figure>
                            </div>
                            <div class="cell">
                                <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/Top-Dentists-2015.png" alt=""></figure>
                            </div>
                            <div class="cell">
                                <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/Top-Dentists-2016.png" alt=""></figure>
                            </div>
                            <div class="cell">
                                <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/Top-Dentists-2017.png" alt=""></figure>
                            </div>
                            <div class="cell">
                                <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/Top-Dentists-2018.png" alt=""></figure>
                            </div>
                            <div class="cell">
                                <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/hp-award2019-img.png" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section-3">
                <div class="grid-container">
                    <div class="grid-x veneers" data-equalizer data-equalize-on="large" >
                        <div class="large-5 cell" >
                            <h3>Veneers</h3>
                            <h4>Built To Stand<br>The Test Of Time</h4>
                            <p>Dr. Boyle has performed over 1,000 Veneer cases for patients who now enjoy the comfort and confidence brought on by a smile they can trust to last. With the help our our cutting edge technology, Dental studio 101 can produce veneers within an hour. People have flown in from all over the world because of the high quality Veneers our team is able to produce.</p>
                            <a href="#schedule-appointment" class="button secondary show-for-large click-scroll">Schedule Your Appointment Now</a>
                        </div>
                        <div class="large-7 cell">
                            <a href="https://www.youtube.com/watch?v=ZFlWwQC8zcE" class="btn-play fas" data-fancybox="">
                                <img class="hide-for-large" src="<?php bloginfo('template_url'); ?>/lander/images/img-video.jpg" alt="">
                            </a>
                            <a href="#schedule-appointment" class="button secondary small-only-expanded hide-for-large click-scroll">Schedule Your Appointment Now</a>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section-4">
                <div class="tabs-services"  id="tabs-services">
                    <div class="tabs-menu">
                        <div class="grid-container">
                            <h2>What Other <span>Cosmetic Dentistry Services</span> are Provided?</h2>
                            <ul class="tabs" data-tabs id="services-tabs">
                                <li class="tabs-title is-active"><a href="#DentalImplants">Dental Implants</a></li>
                                <li class="tabs-title"><a href="#AestheticRehabilitation">Aesthetic Rehabilitation</a></li>
                                <li class="tabs-title"><a href="#DentalCrowns">Dental Crowns</a></li>
                                <li class="tabs-title"><a href="#CosmeticFillings">Cosmetic Fillings</a></li>
                                <li class="tabs-title"><a href="#FullMouthReconstruction">Full Mouth Reconstruction</a></li>
                                <li class="tabs-title"><a href="#RootCanal">Root Canal</a></li>
                                <li class="tabs-title"><a href="#Allon4Implants">All-on-4 Implants</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tabs-content" data-tabs-content="services-tabs">
                      <div class="tabs-panel is-active" id="DentalImplants">
                        <div class="grid-container">
                            <div class="grid-x grid-padding-x">
                                <div class="cell medium-6 large-6">
                                    <h3><span>State of The Art </span>Dental Implants</h3>
                                    <p>If you're in need of a replacement for missing or damaged teeth, our dental implant procedure provides you with a new ceramic tooth (or teeth) specifically built for your mouth. We maintain the highest possible standards for our dental implants to ensure you leave our office with confidence in your smile and a willingness to showcase the quality of our work.</p>
                                </div>
                                <div class="cell medium-6 large-5 large-offset-1">
                                    <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/Dental-Implants.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="tabs-panel" id="AestheticRehabilitation">
                        <div class="grid-container">
                            <div class="grid-x grid-padding-x">
                                <div class="cell medium-6 large-6">
                                    <h3>Aesthetic Rehabilitation <span>For Your Needs</span></h3>
                                    <p>Whether your in need of esthetic rehabilitation for cosmetic changes or to recover your smile from damaged caused by trauma or illness, you can count on the Dental Studio 101 team to help you achieve a healthy, glowing smile you'll feel confident about.</p>
                                </div>
                                <div class="cell medium-6 large-5 large-offset-1">
                                    <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/Aesthetic-Rehabilitation.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="tabs-panel" id="DentalCrowns">
                        <div class="grid-container">
                            <div class="grid-x grid-padding-x">
                                <div class="cell medium-6 large-6">
                                    <h3><span>Advanced CEREC Technology</span> Dental Crowns</h3>
                                    <p>Our dental crowns bring life back into the teeth of our patients whose smiles suffer from cracked, decayed, or stained teeth. Our dedication to staying on top of the latest advancements in dental care technology and practices allow us to give patients the gift of a natural and healthy smile.</p>
                                </div>
                                <div class="cell medium-6 large-5 large-offset-1">
                                    <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/Dental-Crowns.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="tabs-panel" id="CosmeticFillings">
                        <div class="grid-container">
                            <div class="grid-x grid-padding-x">
                                <div class="cell medium-6 large-6">
                                    <h3><span>A Step Up For</span> Cosmetic Fillings</h3>
                                    <p>The foundation of Dental Studio 101 is built on trust and confidence surrounding the services we provide. We've made a point to only use white composite fillings as opposed to the commonly used amalgam fillings, also known as silver fillings, which have recently shown to be less durable and contain potentially toxic levels of mercury. </p>
                                     <p>We've invested in extensive training and proper material required for bonding white composite fillers to guarantee the safest and most reliable filling option for our patients.</p>
                                </div>
                                <div class="cell medium-6 large-5 large-offset-1">
                                    <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/Cosmetic-Fillings.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="tabs-panel" id="FullMouthReconstruction">
                        <div class="grid-container">
                            <div class="grid-x grid-padding-x">
                                <div class="cell medium-6 large-6">
                                    <h3>Full Mouth Reconstruction <span>Nailed Down To A Science</span></h3>
                                    <p>Our 30 years of experience in cosmetic dentistry have allowed us to build up an impressive resume of patients who who have needed full mouth reconstruction for a diverse range of reasons. Patients with periodontal disease, Injury, or crooked and stained teeth have all come through our doors in search of reviving their smile.</p>
                                    <p>Our reconstruction procedure has been perfected into a simple four hour preparation followed by a second four hour insertion appointment two weeks later. Patients can rely on Dental Studio 101 to be cognizant of your time and keep you comfortable during your appointment. </p>
                                </div>
                                <div class="cell medium-6 large-5 large-offset-1">
                                    <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/Full-Mouth-Reconstruction.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="tabs-panel" id="RootCanal">
                        <div class="grid-container">
                            <div class="grid-x grid-padding-x">
                                <div class="cell medium-6 large-6">
                                    <h3><span>Proper</span> Root Canal <span>Therapy</span></h3>
                                    <p>When you come into Dental Studio 101 for root canal therapy you can trust our team of dental experts to easily remove any damaged or destroyed nerves and tissues inside your tooth and provide the proper inspection and care to make sure you receive the necessary crowns or other restorative processes to heal any damage that may have been caused by the infection.</p>
                                </div>
                                <div class="cell medium-6 large-5 large-offset-1">
                                    <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/Root-Canal.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="tabs-panel" id="Allon4Implants">
                        <div class="grid-container">
                            <div class="grid-x grid-padding-x">
                                <div class="cell medium-6 large-6">
                                    <h3>All-on-4 Implants</h3>
                                     <p>This alternative to dentures provides a permanent solution for patients who have lost or are losing all of their teeth. With this method a full denture is permanently attached to four implants. This is more cost effective than having a full set of implants and far more comfortable and convenient than traditional dentures.</p>
                                </div>
                                <div class="cell medium-6 large-5 large-offset-1">
                                    <figure><img src="<?php bloginfo('template_url'); ?>/lander/images/All-on-4 Implants.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div> 
                    <div class="tabs-prev-next">
                        <a href="#tabs-services" class="tab-prev"><</a href="#">
                        <a href="#tabs-services" class="tab-next">></a href="#">
                    </div>
                    <script>
                        $(function(){
                            //Foundation tab prev next
                            $('.tab-next').click(function(e){
                                $('.tabs .tabs-title.is-active').next('li').find('a').trigger('click');
                                e.preventDefault();
                            });
                            $('.tab-prev').click(function(e){
                                $('.tabs .tabs-title.is-active').prev('li').find('a').trigger('click');
                                e.preventDefault();
                            });
                        })
                    </script>
                </div>
            </section>
				
			<div id="sticky-bar" data-sticky-container data-toggler=".show">
                <div class="sticky" data-sticky data-anchor="content">
                    <span class="sticky-btn" data-toggle="sticky-bar"><img src="<?php bloginfo('template_url'); ?>/lander/images/btn-schedule-appointment.png" alt=""></span>
                    <div class="sticky-form">
                        <?php //echo do_shortcode('[contact-form-7 id="4064" title="Schedule your Appointment (Cosmetic Dentistry)"]'); ?>                        
                        <?php echo do_shortcode('[gravityform id="8" title="false" description="false" ajax="false"]'); ?>
                        
                    </div>
                </div>
            </div>	
        </main>

        <footer id="footer">
            <div class="grid-container">
                <div class="footer-logo"><img src="<?php bloginfo('template_url'); ?>/lander/images/logo.png"  alt=""></div>
                <div class="grid-x grid-padding-x">
                    <div class="medium-6 large-7 cell">
                        <div class="footer-info">
                            <h6>Schedule Your Appointment</h6>
                            <h2>Award Winning Cosmetic Dentistry</h2>
                            <p>The staff at Dental Studio 101 is kind, compassionate and highly educated,<br> 
                            and are here to help you through every step of your appointment.</p><br>
                            <address>
                                <strong>Dental Studio 101 </strong><br>
                                33739 N Scottsdale Rd Suite 101<br>
                                Scottsdale, AZ 85266
                            </address>
                            <a class="btn-phone" href="tel:480-488-4852"><i class="fas fa-phone"></i> 480-488-4852</a>
                        </div>
                    </div> 
                    <div class="medium-6 large-5 cell">
                        <div class="footer-form" id="schedule-appointment">
                            <?php // echo do_shortcode('[contact-form-7 id="4064" title="Schedule your Appointment (Cosmetic Dentistry)"]'); ?>                     
                            <?php echo do_shortcode('[gravityform id="7" title="false" description="false" ajax="false"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">&copy; <?php echo date('Y');?>  DENTAL STUDIO 101   <span><a href="https://www.mybizniche.com/" target="_blank">Website Design</a> by: My Biz Niche</span></div>  
        </footer>
    </div>
    <script>$(document).foundation();</script>

    <?php wp_footer(); ?>
    <script type="text/javascript" src="//cdn.callrail.com/companies/183380435/bb6f803ba53fdbab5a0a/12/swap.js"></script> 
    <script src="<?php bloginfo('template_url'); ?>/lander/js/custom.js"></script>
</body>

</html>
