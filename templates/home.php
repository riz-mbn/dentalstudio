<?php 
    /* Template Name: Home template */
    get_header();

?>
    <section class="hero hero-s3">
        <figure class="bg show-for-large"><img src="<?php echo MBN_ASSETS_URI ?>/img/hero-banner.jpg" alt="" width="1920" height="967"></figure>
        <figure class="hide-for-large"><img src="<?php echo MBN_ASSETS_URI ?>/img/hero-banner-mob.jpg" alt="" width="1155" height="612"></figure>
        <div class="hero-caption">
            <div class="grid-container"> 
                <div class="grid-x grid-margin-x">
                    <div class="cell large-5 align-self-middle small-order-2 large-order-1">
                        <figure class=""><img src="<?php echo MBN_ASSETS_URI ?>/img/logo-med.svg" alt="" width="501" height="136"></figure>
                        <div class="text_wrap">
                            <p>is Arizona’s premier cosmetic dental facility, offering award-winning cosmetic and preventive dentistry for over <strong>30 years.</strong></p>

                            <p><strong>Our purpose is to provide dental care that is centered in clinical and esthetic excellence and supports overall health.</strong></p>

                            <p>With our vastly experienced team, led by <strong>Dr Megan Peterson Boyle</strong>, you can expect the highest levels of dentistry, customer service and compassion through every step of your dental journey.</p>
                        </div>
                        <a href="<?php echo home_url() ?>/contact-us" class="button primary large">Schedule an Appointment</a>
                    </div>
                    <div class="cell small-6 small-offset-3 large-7 align-self-middle small-order-1 large-order-2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec_request">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell large-4 col-image">
                    <figure class="img_request">
                        <img src="<?php echo MBN_ASSETS_URI ?>/img/img_request.png" alt="" width="712" height="905">
                    </figure>
                </div>
                <div class="cell large-8 col-copy">
                    <div class="text_wrap">
                        <div class="section_title_wrap">
                            <h2 class="section_title">Request An Appointment</h2>
                            <figure class="hide-for-large text-center"><img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-title-ques.svg" alt="" width="304" height="29" /></figure>
                        </div>
                        <p class="smal">To request a consultation or service, please fill out the form below and our scheduling team will call you to book your appointment. Alternatively, you can call the number below during office hours to speak to them directly.</p>
                        <h4 class="semibold">Or call to speak to one of our schedulers.  <a href="tel:4803725079" class="cta_link">(480) 372-5079</a></h4>
                    </div>
                    <?= do_shortcode('[gravityform id="1" title="false" description="false" ajax="false"]') ?>
                </div>
            </div>
        </div>
    </section>
    <section class="sec_google_review">
        <figure class="bg"><img src="<?php echo MBN_ASSETS_URI ?>/img/bgs/img_review.jpg" alt="" width="1920" height="954" /></figure>
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell large-7 col-copy">
                    <div class="section_title_wrap">
                        <figure class="sec_logo"><img src="<?php echo MBN_ASSETS_URI ?>/img/logo-small.svg" alt="" width="281" height="77"/></figure>
                        <h4 class="section_title">is the leading cosmetic dental surgery situated in North Scottsdale, Arizona. </h4>
                        <figure class="hide-for-large text-center"><img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-title-ques.svg" alt="" width="304" height="29" /></figure>
                    </div>
                    <div class="separator"></div>
                    <div class="text_wrap">
                        <p>Our highly advanced dental spa incorporates some of the most cutting-edge technology available while offering a relaxing, spa-like atmosphere. Our goal is to provide the highest standard of cosmetic dental, preventative dentistry and restorative dentistry while offering a warm and calm environment for our patients.</p>
                        <p>The team and facility at Dental Studio 101 is one of the most highly awarded among Scottsdale cosmetic dentists. We believe we offer the most professional, personalized care available, making Dental Studio 101 the best place to come for cosmetic dental surgery in Scottsdale and across the Valley.</p>
                    </div>
                    <figure><img src="<?php echo MBN_ASSETS_URI ?>/img/img_google_stars.svg" alt="" width="249" height="62"/></figure>
                </div>
                <div class="cell large-5 col-image">
                </div>
            </div>
        </div>
    </section>
    <section class="sec_testimonials">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell xlarge-7 large-8 col-copy">      
                    <div class="section_title_wrap">
                        <h2 class="section_title">What our patients say…</h2>
                        <figure class="hide-for-large text-center"><img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-title-ques.svg" alt="" width="304" height="29" /></figure>
                    </div>
                    <h4>Results matter, and we pride ourselves on the work we do. </h4> <h4>Read some of our patient reviews taken directly from Google.</h4>
                </div>
                <div class="cell xlarge-5 large-4 col-image">
                </div>
                <div class="cell xlarge-12 col-copy">
                    <?= do_shortcode('[mbn_testimonials]')  ?>
                </div>
            </div>
        </div>
    </section>
    <section class="sec_why">
        <div class="grid-container">               
            <div class="section_title_wrap">
                <h2 class="section_title text-center">Why Dental Studio 101?</h2>
                <figure class="hide-for-large text-center"><img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-title-ques.svg" alt="" width="304" height="29" /></figure>
            </div>
            <div class="grid-x grid-margin-x row-top">
                <div class="cell large-5 medium-12 col-image">
                    <figure class="show-for-large"><img src="<?php echo MBN_ASSETS_URI ?>/img/img_why_dental.jpg" alt="" width="515" height="548" /></figure>
                    <figure class="hide-for-large"><img src="<?php echo MBN_ASSETS_URI ?>/img/img_why_dental_mob.jpg" alt="" width="515" height="548" /></figure>
                </div>
                <div class="cell large-7 col-copy">
                    <p>We are committed to providing premier customer service and industry-leading cosmetic dentistry to all of our patients. To achieve this, Dr Peterson Boyle and the team at Dental Studio 101 use advanced, cutting-edge technology, and a close relationship with our in-house esthetic laboratory so that our cosmetic outcomes are in line with what our patients desire.</p>
                    <p>In our state-of-the-art North Scottsdale cosmetic dentist facility, we use environmentally-friendly digital x-rays, highly advanced digital cameras that allow you to see procedures from the dentists’ point of view. We stay up to date in not only equipment but also continuing education for our entire team to bring our patients the latest in minimally invasive technologies.</p>
                </div>
            </div>
            <div class="grid-x grid-margin-x row-bottom">
                <div class="cell large-5 medium-12 col-copy">
                    <p>It is this level of expertise in both technology and dentistry that has led to Dental Studio 101 gaining the reputation as the best cosmetic dentist in Scottsdale and for Dr Peterson Boyle as the “go-to dentist” for cosmetic dental procedures across the Valley.</p>
                </div>
                <div class="cell large-7 col-image">
                    <figure class=""><img src="<?php echo MBN_ASSETS_URI ?>/img/img_why_dental_2.jpg" alt="" width="810" height="474" /></figure>
                </div>
            </div>
        </div>
    </section>
    <section class="sec_what">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell large-8 medium-12 col-copy">                    
                    <div class="section_title_wrap">
                        <h2 class="section_title">What Cosmetic Dentistry<br/>Services Do We Offer?</h2>
                        <figure class="hide-for-large text-center"><img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-title-ques.svg" alt="" width="304" height="29" /></figure>
                    </div>
                </div>
                <div class="cell large-4 medium-12 col-image">
                </div>
            </div>
        </div>
        <?= do_shortcode('[mbn_services_tab]')  ?>
    </section>
    <section class="sec_inquiry">
        <div class="grid-container">
            <div class="grid-x grid-margin-x col-title">
                <div class="cell large-6">
                    <div class="section_title_wrap">
                        <h2 class="section_title">Have A Question About Our Services?</h2>
                        <figure class="hide-for-large text-center"><img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-title-ques.svg" alt="" width="304" height="29" /></figure>
                    </div>
                </div>
                <div class="cell large-6 col-copy">
                    <p>We’re here to answer your questions and work out the best solution for you.  To request a free phone consultation, please fill out the form below and our scheduling team will call you to arrange a consultation time. Alternatively, you can call the number below during office hours to speak to them directly.</p>
                    <h4 class="semibold">Or call to speak to one of our schedulers.  <a href="tel:4803725079">(480) 372-5079</a></h4>
                </div>
            </div>
            <div class="grid-x grid-margin-x col-form">
                
                <div class="cell large-2"></div>
                <div class="cell large-8 col-copy">
                    <?= do_shortcode('[gravityform id="1" title="false" description="false" ajax="false"]') ?>
                </div>
                <div class="cell large-2"></div>
            </div>
        </div>
    </section>
    <section class="sec_gallery">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell large-12 col-copy">
                    <figure class="bg show-for-large"><img src="<?php echo MBN_ASSETS_URI ?>/img/bgs/img_smile_grp.jpg" alt="" width="1410" height="728" /></figure>
                    <figure class="hide-for-large"><img src="<?php echo MBN_ASSETS_URI ?>/img/bgs/img_smile_gallery_mob.jpg" alt="" width="984" height="844" /></figure>
                    <div class="section_title_wrap">
                        <h1>Smile</h1>
                        <h1>Gallery</h1>
                        <div class="button small"><a href="#" class="">View More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec_recent_posts">
        <figure class="bg"><img src="<?php echo MBN_ASSETS_URI ?>/img/bgs/img_recent_post.png" alt="" width="1920" height="596" /></figure>
        <div class="grid-container">
            <h4 class="section_title text-center">Recent Posts</h4>
            <div class="grid-x grid-margin-x recent_posts">
                <?= do_shortcode('[mbn_recent_posts]'); ?>
            </div>
        </div>
    </section>
<?php 
    get_footer(); 