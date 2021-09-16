<?php 
/*Template Name: Cosmetic Landing Page*/
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>
        <?php wp_title();?>
    </title>
    <link rel='shortcut icon' href='<?php echo get_template_directory_uri(); ?>/favicon.ico'>
    <?php wp_head();
    ?>

	<link rel="stylesheet" id="style-foundation" href="<?php echo get_template_directory_uri()."/css/foundation.min.css" ?>" type="text/css" media="all">
    <link rel="stylesheet" id="style-app" href="<?php echo get_template_directory_uri()."/css/app_landing.css" ?>" type="text/css" media="all">
    <link rel="stylesheet" id="style-mmenu" href="<?php echo get_template_directory_uri()."/css/jquery.mmenu.all.css" ?>" type="text/css" media="all">
    <link rel="stylesheet" id="style-mhead" href="<?php echo get_template_directory_uri()."/css/jquery.mhead.css" ?>" type="text/css" media="all">
    <link rel="stylesheet" id="style-fullpage" href="<?php echo get_template_directory_uri()."/css/jquery.fullpage.min.css" ?>" type="text/css" media="all">
    <link rel="stylesheet" id="style-style" href="<?php echo get_template_directory_uri()."/css/style.css" ?>" type="text/css" media="all">
<!-- Global site tag (gtag.js) - Google Ads: 817881512 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-817881512"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-817881512');
</script>




</head>

<body <?php body_class( ! is_home() && ! is_front_page() ? "inner-page" : "" ); ?>>
    <div id="wptime-plugin-preloader"></div>
    <div class="mobile-menu-display">
         <?php include "includes/menu.php"; ?>
    </div>
    <div id="fullpage">

<div class="section fp-auto-height-responsive" id="section0">
    <?php include "includes/menu.php"; ?>
    <div class="main-content">
        <div class="row">
            <div class="medium-6 small-12 column">
                <?php
                    while ( have_posts() ) : the_post();
                         the_content();
                    endwhile; // End of the loop.
                ?>
                    <a class="btn btn1 hvr-sweep-to-top" href="#ScheduleYourAppointmentNow">Schedule Your Appointment Now</a>
            </div>
        </div>
    </div>
</div>
<div class="section" id="section1">
    <?php include "includes/menu.php"; ?>
    <div class="content">
        <div class="row">
            <div class="medium-6 columns">
                <h3><span>Our Team at <strong>Dental Studio 101</strong></span> is built around the following equally important priorities. Providing state of the art cosmetic dentistry services and developing trusted relationships with our patients. </h3>
                <p>We've had the joy of providing thousands of cosmetic dental services in Scottsdale for over 30 years. Many of the people who came through our doors at the beginning still return to our office today. </p>
                <p>Thanks to a dedication to quality and consistency, we've built a community of people who thrive and belong. Dental Studio 101 is a special place where you can Smile Out Loud.</p>
            </div>
            <div class="medium-6 columns">
                <div class="about-img text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/about-us-img.jpg" alt="best cosmetic dentists in scottsdale">
                    <div class="name">
                        <p>Dr. Mark Peck <span>&</span> Dr. Megan Peterson Boyle </p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="medium-12 column">
                <div class="staff-list">
                    <ul>
                        <li>
                            <div class="list">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/staff1.jpg" alt="dr ron schmidt cosmetic dentist">
                                <div class="info">
                                    <span class="name">Dr. Ron Schmidt</span>
                                    <span class="position">- Cosmetic Dentists</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/staff2.jpg" alt="christina owens dental hygienist">
                                <div class="info">
                                    <span class="name">Christina Owens</span>
                                    <span class="position">- Dental Hygienist</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/staff3.jpg" alt="peggy shannon dental hygienist">
                                <div class="info">
                                    <span class="name">Peggy Shannon</span>
                                    <span class="position">- Dental Hygienist</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/staff4.jpg" alt="vicki dugas treatment coordinator">
                                <div class="info">
                                    <span class="name">Vicki Dugas</span>
                                    <span class="position">- Treatment Coordinator</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/staff5.jpg" alt="jan cox arcado treatment coordinator">
                                <div class="info">
                                    <span class="name">Jan Cox-Arcaro</span>
                                    <span class="position">- Treatment Coordinator</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/staff6.jpg" alt="joy arcado concierge">
                                <div class="info">
                                    <span class="name">Joy Arcaro</span>
                                    <span class="position">- Concierge</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="list">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/staff7.jpg" alt="danielle WALERYSZAK dental assistant">
                                <div class="info">
                                    <span class="name">FDanielle Waleryszak</span>
                                    <span class="position">- Dental Assistant</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section" id="section2">
    <?php include "includes/menu.php"; ?>
    <div class="content">
        <div class="testimonials">
            <div class="row">
                <div class="large-11 medium-12 column large-centered text-center">
                    <h3>What Our Clients Say</h3>
                    <div class="testi-list">
                        <ul class="bxslider">
                            <li>
                                <div class="testi">
                                    <p>"In 19 years, never a bad experience from the front desk to the dental assistant to the doctor. I have recommended them to a number of friends and they are all happy with them. The facility is beautiful, neat and clean."</p>
                                    <h4>- Barbarah H</h4>
                                </div>
                            </li>
                            
                             <li>
                                <div class="testi">
                                    <p>"<strong>Very professional</strong>, high quality service. Pleasant environment, very friendly staff."</p>
                                    <h4>- Alex U</h4>
                                </div>
                            </li>
                            <li>
                                <div class="testi">
                                    <p>"<strong>A 5 Star Time</strong>. Professional care in very pleasant surroundings. Dr. Peck exudes confidence and kindness. Vickie said she has worked with Dr. Peck for 20 years."</p>
                                    <h4>- Kathleen W.</h4>
                                </div>
                            </li>
                            <li>
                                <div class="testi">
                                    <p>"<strong>Great service and people</strong>. Always profesional - they do a great job."</p>
                                    <h4>- H.H.</h4>
                                </div>
                            </li>
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-dentist">
            <div class="row">
                <div class="large-12 column">
                    <h3>Top Dentists over 10 Consecutive Years</h3>
                    <ul class="award-list">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/magazine-img1.png" alt="Top Dentists 2013"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/magazine-img2.png" alt="Top Dentists 2014"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/magazine-img3.png" alt="Top Dentists 2015"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/magazine-img4.png" alt="Top Dentists 2016"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/magazine-img5.png" alt="Top Dentists 2017"></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/magazine-img6.png" alt="Top Dentists 2018"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="google-area">
            <div class="row">
                <div class="medium-6 column">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/google-img.png" alt="google cosmetic dentists rating"> <span class="rate">4.8</span><a target="_blank" href="https://www.google.com/search?q=dental+studio+101&oq=dental+studio+101&aqs=chrome..69i57j69i60l2j69i61j0.4167j0j7&sourceid=chrome&ie=UTF-8#lrd=0x872b793e2bb32301:0x41c69cb2ae7b8b03,1" class="btn greview">25 Google Reviews</a>
                </div>
                <div class="medium-6 column text-right">
                    <h3 class="review-btn">Used us recently? <a class="btn2 btn" target="_blank" href="https://search.google.com/local/writereview?placeid=ChIJASOzKz55K4cRA4t7rrKcxkE">leave a review</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section" id="section3">
    <?php include "includes/menu.php"; ?>
    <div class="content">
        <div class="row">
            <div class="medium-5 columns">
                <h2><span>Veneers</span> <br/> Built To Stand <br/> The Test Of <br/> Time</h2>
                <p>Dr. Mark Peck and Dr. Boyle has performed over 1,000 Veneer cases for patients who now enjoy the comfort and confidence brought on by a smile they can trust to last. With the help our our cutting edge technology, Dental studio 101 can produce veneers within an hour. People have flown in from all over the world because of the high quality Veneers our team is able to produce.</p>
            </div>
            <div class="medium-7 columns">
                <?php /*<iframe width="100%" height="400" src="https://www.youtube.com/embed/lE8SSbGFT7E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>*/?>
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/ZFlWwQC8zcE?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row">
            <div class="small-12 column text-center">
                <a class="btn hvr-sweep-to-top" href="#ScheduleYourAppointmentNow">Schedule Your Appointment Now</a>
            </div>
        </div>
    </div>
</div>
<div class="section cf" id="section4">
    <?php include "includes/menu.php"; ?>
    <div class="content">
        <div class="row cf">
            <div class="medium-4 columns content-sidebar" id="content-sidebar">
                <h3>SERVICES</h3>
                <h2>What Other <br/><span>Cosmetic<br/> Dentistry<br/> Services</span> Are<br/> Provided?</h2>
                <a class="btn hvr-sweep-to-top" href="#ScheduleYourAppointmentNow">Schedule your Appointment Now</a>
            </div>
            <div class="medium-8 columns">
                <div class="services-cont">
                    <div class="service-list">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/services-img1.jpg" alt="scottsdale dental implants">
                        <h3>State of The Art <span>Dental Implants</span> </h3>
                        <p>If you're in need of a replacement for missing or damaged teeth, our dental implant procedure provides you with a new ceramic tooth (or teeth) specifically built for your mouth. We maintain the highest possible standards for our dental implants to ensure you leave our office with confidence in your smile and a willingness to showcase the quality of our work.</p>
                    </div>
                    <div class="service-list">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/services-img2.jpg" alt="scottsdale aeshetic rehabilitation">
                        <h3><span>Aesthetic Rehabilitation</span> For Your Needs</h3>
                        <p>Whether your in need of esthetic rehabilitation for cosmetic changes or to recover your smile from damaged caused by trauma or illness, you can count on the Dental Studio 101 team to help you achieve a healthy, glowing smile you'll feel confident about.</p>
                    </div>
                    <div class="service-list">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/services-img3.jpg" alt="scottsdale cerec crowns">
                        <h3>Advanced CEREC Technology <span>Dental Crowns</span></h3>
                        <p>Our dental crowns bring life back into the teeth of our patients whose smiles suffer from cracked, decayed, or stained teeth. Our dedication to staying on top of the latest advancements in dental care technology and practices allow us to give patients the gift of a natural and healthy smile.</p>
                    </div>
                    <div class="service-list">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/services-img4.jpg" alt="scottsdale cosmetic dentistry">
                        <h3>A Step Up For <span>Cosmetic Fillings</span></h3>
                        <p>The foundation of Dental Studio 101 is built on trust and confidence surrounding the services we provide. We've made a point to only use white composite fillings as opposed to the commonly used amalgam fillings, also known as silver fillings, which have recently shown to be less durable and contain potentially toxic levels of mercury.
                        </p>
                        <p>We've invested in extensive training and proper material required for bonding white composite fillers to guarantee the safest and most reliable filling option for our patients.</p>
                    </div>
                    <div class="service-list">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/services-img5.jpg" alt="best cosmetic dentistry in scottsdale">
                        <h3><span>Full Mouth Reconstruction</span> Nailed Down To A Science</h3>
                        <p>Our 30 years of experience in cosmetic dentistry have allowed us to build up an impressive resume of patients who who have needed full mouth reconstruction for a diverse range of reasons. Patients with periodontal disease, Injury, or crooked and stained teeth have all come through our doors in search of reviving their smile.</p>
                        <p>Our reconstruction procedure has been perfected into a simple four hour preparation followed by a second four hour insertion appointment two weeks later. Patients can rely on Dental Studio 101 to be cognizant of your time and keep you comfortable during your appointment. </p>
                    </div>
                    <div class="service-list">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/services-img6.jpg" alt="root canal in scottsdale az">
                        <h3>Proper <span>Root Canal</span> Therapy</h3>
                        <p>When you come into Dental Studio 101 for root canal therapy you can trust our team of dental experts to easily remove any damaged or destroyed nerves and tissues inside your tooth and provide the proper inspection and care to make sure you receive the necessary crowns or other restorative processes to heal any damage that may have been caused by the infection.</p>
                    </div>
                    <div class="service-list full">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/services-img7.jpg" alt="all on 4 implants in scottsdale">
                        <h3>All-on-4 Implants</h3>
                        <p>This alternative to dentures provides a permanent solution for patients who have lost or are losing all of their teeth. With this method a full denture is permanently attached to four implants. This is more cost effective than having a full set of implants and far more comfortable and convenient than traditional dentures.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section" id="section5">
    <?php include "includes/menu.php"; ?>
    <div class="content">
        <div class="row">
            <div class="medium-6 columns">
                <h2>Schedule Your <span>Appointment</span></h2>
                <p>The staff at Dental Studio 101 is kind, compassionate and highly educated, and are here to help you through every step of your appointment.</p>
                <div class="contact-details">
                    <h3>CONTACT DETAILS</h3>
                    <p>Dental Studio 101 <br> 33739 N Scottsdale Rd Suite 101<br> Scottsdale, AZ 85266</p>
                    <h4>P (480) 488-4852</h4>
                </div>
            </div>
            <div class="medium-6 columns">
                <div class="form">
                    <?php echo do_shortcode('[contact-form-7 id="3944" title="Schedule your Appointment (Cosmetic Lander Page)"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="row">
            <div class="medium-4 columns">
                <p class="copyright">Copyright &#169;
                    <?php echo date("Y");?>. Dental Studio 101</p>
            </div>
            <div class="medium-4 columns text-center">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/landing-cosmetic/footer-logo.jpg" alt="footer logo"></a>
            </div>
            <div class="medium-4 columns">
                <div class="social-media text-right">
                    <ul>
                        <li><a target="_blank" href="https://www.facebook.com/DentalStudio101AZ"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/DentalStudio101"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="https://plus.google.com/+DentalStudio101"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="//cdn.callrail.com/companies/183380435/bb6f803ba53fdbab5a0a/12/swap.js"></script> 
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/vendor/scrolloverflow.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/vendor/jquery.fullpage.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/vendor/foundation.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/app_landing.js' ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/vendor/jquery.mmenu.all.js' ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/vendor/jquery.mmenu.debugger.js' ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/vendor/jquery.mhead.js' ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/customScript.js' ?>"></script>