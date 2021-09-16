<?php /*Template Name: Home*/ get_header(); ?>
<div id=hp>
    <div class=block1>
        <?php include_once('menu.php');?>
        <div class=cont>
            <div class=row>
                <div class='large-6 columns left'>
                    <?php
                        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        $thumbnail_id = get_post_thumbnail_id( $post->ID );
                        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                    ?>
                    <img src='<?php echo $feat_image?>' alt='<?php echo $alt?>' />
                </div>
                <div class='large-6 columns right'>
                    <?php
                        if(have_posts()) : 
                            while(have_posts()) : the_post();
                                the_content();
                            endwhile;
                        endif;
                    ?>
                    <p>
                        <a class=btn1 href='/contact-us/'>SCHEDULE AN APPOINTMENT NOW</a>
                    </p>
                    <?php /*
                    <p>
                        <a class="btn1 " href="https://www.smilevirtual.com/Dental-Studio-101" target="_blank">REQUEST YOUR FREE VIRTUAL CONSULT</a>
                    </p>
                    */ ?>
                </div>
            </div>
        </div>
    </div>
    <div class=new-section>
        <div class=row>
            <div class='large-12 columns text-left'>
                <p><img src="<?php bloginfo('template_url')?>/img/studio11.jpg" alt="Scottsdale Cosmetic Dentist" class="Scottsdale Cosmetic Dentist"/>
                    Serving Scottsdale and North Scottsdale areas, Dental Studio 101 is bringing a new flare to cosmetic dentistry. Our highly advanced dental spa incorporates some of the most cutting-edge technology available today. We take pride in offering a spa-like atmosphere for our patients and providing a warm and welcoming environment.
                </p>
                <p>
                    The experienced Scottsdale cosmetic dentists at Dental Studio 101 have deep roots in the area we serve. We understand that our patients are part of our community and are we are proud to offer them professional, personalized care every day.
                </p>
                <p>
                    In today’s world, your smile speaks volumes about who you are. In your private world, a healthy smile tells your family and friends that you care about your health and living life well. In your business world, a healthy smile conveys confidence to your colleagues that will help put them at ease, knowing that you are the person they can rely on to complete their project, to seal that deal, or to lead your company to success.
                </p>
                <p>
                    Most importantly, with a healthy smile, you give yourself the confidence to succeed in the goals you set for yourself.
                </p>
            </div>
        </div>
    </div>
    <div class=block2>
        <div class=row>
            <div class='large-6 medium-6 columns'>
                <div class=left>
                    <?php echo get_field('sect1_cont');?>
                    <h2><span style="color: #372628;margin-top: 60px;">Featured In:</span></h2>
                    <a href="https://imagesarizona.com/carefree/"><img class="images-magazine" src='<?php echo bloginfo('template_url');?>/img/images-magazine.png' alt='Images Magazine' /></a>
                </div>
            </div>
            <div class='large-6 medium-6 columns right'>
                <img style="margin-bottom: 20px;" src='<?php echo bloginfo('template_url');?>/img/Best-Scottsdale-Cosmetic-Dentists.jpg' alt='cosmetic dentist scottsdale' />
            </div>
        </div>
    </div>
    <div class=block3>
        <video id=vid-0 style='display:none' controls>
            <source src='<?php bloginfo('template_directory');?>/vid/videoplayback.mp4' type='video/mp4'>
        </video>
        <div class=row>
            <div class='large-6 medium-6 columns left text-center'>
                <span id=play0 class='play-btn ico play-btn'></span>
            </div>
            <div class='large-6 medium-6 columns right'>
                <?php echo get_field('sect2_cont');?>
                <br /><br /><br />
                <a class=btn2 href='/contact-us/'>SCHEDULE APPOINTMENT</a>
            </div>
        </div>
    </div>
    <div class=block4>
        <div class=row>
            <div class='large-12 columns ttl text-center'>
                <h2>WHAT COSMETIC DENTISTRY SERVICES ARE PROVIDED?</h2>
            </div>
        </div>
        <div class=row>
            <div class='large-4 medium-4 columns cont'>
                <h2>Esthetic Rehabilitation</h2>
                <p>
                    From discoloration, to chipped teeth and gaps, our esthetic rehabilitation can help bring confidence back 
                    into your life. Every plan is custom designed to address the issues that you need to have done.
                </p>
                <a class=btn3 href='/esthetic-rehabilitation-scottsdale/'>LEARN MORE</a>
            </div>
            <div class='large-4 medium-4 columns cont'>
                <h2>Dental Implants</h2>
                <p>
                    Replace missing or heavily damaged teeth with implants. They look amazing and last forever. Implants are a 
                    safe, strong and effective way to transform your smile and feel great about yourself again.
                </p>
                <a class=btn3 href='/dental-implants-scottsdale/'>LEARN MORE</a>
            </div>
            <div class='large-4 medium-4 columns cont'>
                <h2>Porcelain Veneers</h2>
                <p>
                    Teeth that are slightly damaged or too discolored for conventional whitening could greatly benefit from veneers. 
                    They also help close gaps in teeth or make a smile more symmetrical and attractive.
                </p>
                <a class=btn3 href='/porcelain-veneers-scottsdale/'>LEARN MORE</a>
            </div>
        </div>
        <div class=row>
            <div class='large-4 medium-4 columns cont'>
                <h2>Dental Crowns</h2>
                <p>
                    Dental crowns are a great option when it comes to restoring damaged teeth. The porcelain crown provide the look of 
                    perfect natural teeth and are strong enough to stand up to daily use for decades to come.
                </p>
                <a class=btn3 href='/dental-crowns-scottsdale/'>LEARN MORE</a>
            </div>
            <div class='large-4 medium-4 columns cont'>
                <h2>Cosmetic Fillings</h2>
                <p>
                    For most of us, cavities and the occasional filling are inevitable. When your teeth are filled at 
                    Dental Studio 101, we use cosmetic fillings that match the color and shape of your natural teeth. Say goodbye to those 
                    silver-colored amalgam fillings once and for all.
                </p>
                <a class=btn3 href='/composite-fillings-scottsdale/'>LEARN MORE</a>
            </div>
            <div class='large-4 medium-4 columns cont'>
                <h2>All-on-4 Implants</h2>
                <p>
                    This alternative to dentures provides a permanent solution for patients who have lost or are losing all of their teeth. 
                    With this method a full denture is permanently attached to four implants. This is more cost effective than having a full 
                    set of implants and far more comfortable and convenient than traditional dentures.
                </p>
                <a class=btn3 href='/all-on-four-implants-scottsdale/'>LEARN MORE</a>
            </div>
        </div>
        <div class=row>
            <div class='large-4 medium-4 columns cont'>
                <h2>Full-Mouth Reconstruction</h2>
                <p>
                    A full smile makeover will not only reconstruct your entire mouth, but rebuild confidence and help you feel ready to face the 
                    world once again. You don’t have to feel embarrassed about your smile anymore.
                </p>
                <a class=btn3 href='/full-mouth-reconstruction-scottsdale/'>LEARN MORE</a>
            </div>
            <div class='large-4 medium-4 columns cont'>
                <h2>In-House Dental Lab</h2>
                <p>
                    We have the most technologically-advanced dental lab right here in our studio. That means we can meet your dentistry needs faster 
                    without having to depend on an outside laboratory. You get better results in less time.
                </p>
                <a class=btn3 href='/in-house-dental-lab/'>LEARN MORE</a>
            </div>
            <div class='large-4 medium-4 columns cont'>
                <h2>Root Canal Therapy</h2>
                <p>
                    When an injury or decay exposes the pulp of a tooth, painful infection can set in and spread into the jaw, causing bone loss. Root 
                    Canal therapy restores a tooth by removing and filling the inflamed root canals and rebuilding the tooth.
                </p>
                <a class=btn3 href='/root-canal-therapy-scottsdale/'>LEARN MORE</a>
            </div>
        </div>
        
        <div class=view-more-services>
            <div class=row>
                <div class='large-12 columns text-right'>
                    <a href='/services/'>VIEW MORE SERVICES <span class='ico brown-arrow'></span></a>
                </div>
            </div>
        </div>
        <?php /*
        <div class="block-cta">
            <div class=row>
                <div class='large-12 columns text-center'>
                    <a class='btn6 btn-custom' href='https://www.smilevirtual.com/Dental-Studio-101' target="_blank">Request Your Free Virtual Consult</a>
                </div>
            </div>
        </div>
        */ ?>
    </div>
    <div class=block5>
        <div class=row>
            <div class='large-12 columns head-title text-center'>
                <h2><span>WRITTEN AND VIDEO </span>Testimonials</h2>
            </div>
        </div>
        <div class='row cont1'>
            <div class='large-3 columns txt'>
                <h2>Edward H</h2>
                <p class=since>Customer since 2014</p>
                <span class='ico star'></span>
                <p class=txt-msg>
                    First visit went very well. Good introduction to the practice, facility and people. Modern, efficient 
                    office beautifully styled and very comfortable. Great “work flow”. Up to date equipment and methodologies. 
                    Complete satisfaction.
                </p>
            </div>
            <div class='large-3 columns txt'>
                <h2>Paul C</h2>
                <p class=since>Customer since 1998</p>
                <span class='ico star'></span>
                <p class=txt-msg>
                    My experience was “excellent” in every way! Everyone was genuinely friendly and very professional; from the 
                    time I was greeted in the lobby, thru x-rays, cleaning, and exam by Dr. Peterson. Plus, the office with it’s 
                    waterfall and stream is also second to none.
                </p>
            </div>
            <div class='large-3 columns txt'>
                <h2>Bobbie L</h2>
                <p class=since>Customer since 2010</p>
                <span class='ico star'></span>
                <p class=txt-msg>
                    Dr. Mark Peck and his assistant Jan are wonderful as is his whole staff. I am a huge chicken and they immediately 
                    started doing and saying things to put me at ease. I felt no pain and left feeling relieved. I would recommend who 
                    has anxiety to give them a try, you will not be sorry.
                </p>
            </div>
            <div class='large-3 columns txt'>
                <h2>Mary N</h2>
                <p class=since>Customer since 2008</p>
                <span class='ico star'></span>
                <p class=txt-msg>
                    The staff is always friendly, professional and prepared. We appreciate Mark’s commitment to excellence and of course 
                    his warm personality. The office is artistically interesting and clean as a whistle. Then, of course, there were the 
                    cookies… the dark chocolate were the best!
                </p>
            </div>
        </div><!--end cont1 //-->
        <div class='row cont2'>
            <div class='large-12 columns text-center'>
                <h2>Used us recently?</h2>
                <img src='<?php echo bloginfo('template_url');?>/img/google-5star.png' alt='Dental Studio 101 - Google 5 star rating' />
                <!--a class=btn4 href='https://search.google.com/local/writereview?placeid=ChIJASOzKz55K4cRA4t7rrKcxkE' target='_blank'>LEAVE US A REVIEW</a -->
                <span class="btn4 btn-script" style="cursor: pointer;" data-url="https://search.google.com/local/writereview?placeid=ChIJASOzKz55K4cRA4t7rrKcxkE">LEAVE US A REVIEW</span>
                
                <script>
                    jQuery(function(){
                        jQuery('.btn-script').on('click', function(e){ 
                            e.preventDefault(); 
                            var url = jQuery(this).data('url'); 
                            window.open(url, '_blank');
                        });
                    });
                </script>

                <h2>Top Dentists over 10 Consecutive Years</h2>
                <ul>
                    <li><img src='<?php echo bloginfo('template_url');?>/img/hp-award1-img.png' alt='Dental Studio 101 - 2013 Top Scottsdale Cosmetic Dentist' /></li>
                    <li><img src='<?php echo bloginfo('template_url');?>/img/hp-award2-img.png' alt='Dental Studio 101 - 2014 Top Scottsdale Cosmetic Dentist' /></li>
                    <li><img src='<?php echo bloginfo('template_url');?>/img/hp-award3-img.png' alt='Dental Studio 101 - 2015 Top Scottsdale Cosmetic Dentist' /></li>
                    <li><img src='<?php echo bloginfo('template_url');?>/img/hp-award4-img.png' alt='Dental Studio 101 - 2016 Top Scottsdale Cosmetic Dentist' /></li>
                    <li><img src='<?php echo bloginfo('template_url');?>/img/hp-award6-img.png' alt='Dental Studio 101 - 2017 Top Scottsdale Cosmetic Dentist' /></li>
                    <li><img src='<?php echo bloginfo('template_url');?>/img/hp-award5-img.png' alt='Dental Studio 101 - 2018 Top Scottsdale Cosmetic Dentist' /></li>
                    <li><img src='<?php echo bloginfo('template_url');?>/img/hp-award2019-img.png' alt='Dental Studio 101 - 2019 Top Scottsdale Cosmetic Dentist' /></li>
                    <?php /* <li><img src='<?php echo bloginfo('template_url');?>/img/dental-studio-101-phoenix.jpg' alt='Dental Studio 101 - 2018 Top Dentist Metro Phoenix' /></li> */ ?>
                </ul>
            </div>
        </div>
    </div>
    <div class=block6>
        <div class='row fwidth collapse smile-gallery'>
            <div class='large-12 columns text-center'>
                <img src='<?php echo bloginfo('template_url')?>/img/dental-studio-101-smile-gallery.jpg' alt='scottsdale cosmetic dentistry results' />
				<?php //echo do_shortcode('[instagram-feed]'); ?>
            </div>
        </div>
    </div>
    <div class=block7>
        <div class=row>
            <div class='large-7 columns left'>
                <h2><span>Artistry In Dentistry </span>You’ll Find It Here</h2>
                <div style='position:relative;'>
                    <img id=vid-cover-1 src='<?php bloginfo('template_directory');?>/img/vid-bg2.jpg' alt='cosmetic dentistry video background' />
                    <span id=play1 class='play-btn ico play-btn'></span>
                    <video width='460' height='259' id=vid-1 style='display:none;height:auto;width:100%;border-radius:10px;' controls>
                        <source src='<?php bloginfo('template_directory');?>/vid/videoplayback.mp4' type='video/mp4'>
                    </video>
                </div>
                <p>
                    Dr. Peterson Boyle, Dr. Schmidt and Dr. Peck pride themselves in one of the world’s most advanced dental treatment facilities. 
                    Dentists and patients come from around the globe to see the facility and learn his concept and philosophy of practice. Practice 
                    management consultants feature this office as they tour and lecture internationally.
                </p>
            </div>
            <div class='large-4 columns right text-center'>
                <h2><span>GET TO KNOW OUR</span> Team</h2>
                <div class=tm-qoute-slider>
					<div class='item'>
                        <img src='<?php bloginfo('template_url');?>/img/megan-bolye.png' alt='dr. megan boyle best cosmetic dentist in scottsdale' />
                        <p class=tm-name>Megan Peterson Boyle</p>
                        <p class=tm-msg>
                            Dr. Megan Peterson Boyle is a third generation Arizona native raised right here in the Valley of the Sun. Dr. Peterson attended 
                            Cactus Shadows High School in Cave Creek. During high school, Dr. Peterson was a part of the Dental Studio 101 team as a dental 
                            assistant.
                        </p>
                        <p><a class=btn5 href='/cosmetic-dentists/dr-megan-peterson-boyle/'>LEARN MORE</a></p>
                    </div>
                    <div class='item'>
                        <img src='<?php bloginfo('template_url');?>/img/mark-peck.png' alt='dr. mark peck best cosmetic dentist in scottsdale' />
                        <p class=tm-name>Mark Peck</p>
                        <p class=tm-msg>
                            Dr. Peck Prides himself in one of the world’s most advanced dental treatment facilities. Dentists and patients come from 
                            around the globe to see the facility and learn his concept and philosophy of practice. Practice management consultants feature 
                            this office as they tour and lecture internationally.
                        </p>
                        <p><a class=btn5 href='/cosmetic-dentists/dr-mark-peck/'>LEARN MORE</a></p>
                    </div>
                    <?php /*
                    <div class='item'>
                        <img src='<?php bloginfo('template_url');?>/img/ron.png' alt='dr. ron schmidt cosmetic dentist scottsdale' />
                        <p class=tm-name>Ron Schmidt</p>
                        <p class=tm-msg>
                            Dr. Schmidt graduated with Dr. Peck from Marquette University School of Dentistry. Along with working alongside Dr. Peck, he maintains 
                            a private practice near Milwaukee, WI. He has been providing his patients in Wisconsin with state of the art, comprehensive dental
                        </p>
                        <p><a class=btn5 href='/cosmetic-dentists/dr-ron-schmidt/'>LEARN MORE</a></p>
                    </div>
                    */ ?>
                </div>
                <div style='text-align:right'>
                    <span id=sprev></span>
                    <span id=snext></span>
                </div>
            </div>
        </div>
    </div>
    <div class='block8 showmap'>
        <div class=row>
            <div class='large-12 columns head-title text-center'>
                <h2><span>SCHEDULE YOUR </span>Appointment</h2>
                <p>The staff at Dental Studio 101 is kind, compassionate and highly educated, and are here to help you through every step of your appointment.</p>
            </div>
        </div>
        <div class=row>
            <div class='large-6 large-push-6 columns left'>
                <?php echo do_shortcode('[contact-form-7 id="50" title="Home:Contact form"]');?>
                <?php /*
                <div class=row>
                    <div class='large-10 large-offset-2 medium-11 medium-offset-1 small-12 columns btn'>
                        <a class='btn6 send-form'>SCHEDULE APPOINTMENT</a>
                    </div>
                </div>
                */ ?>
            </div>
            <div class='large-6 large-pull-6 columns right text-center'>
                
                <div class=map>
                <!-- div id=map></div //--> 
                <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13263.299385450118!2d-111.925174!3d33.791021!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x41c69cb2ae7b8b03!2sDental+Studio+101!5e0!3m2!1sen!2s!4v1495165578779" 
                        width="100%" 
                        height="300" 
                        frameborder="0" 
                        allowfullscreen>
                    </iframe>
                <?php /*  
                    
                    
                  
                    <img src='<?php bloginfo('template_url');?>/img/hp-map-img.jpg' alt='Dental Studio 101 - Map' />
                    <img id=map-thumbnail src='<?php bloginfo('template_url');?>/img/ds101map.jpg' alt="" />    
                    */ ?>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="reveal small" id="popup-video" data-reveal>
    <div class="responsive-embed">
        <iframe id=ytplayer width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>
    </div>
    <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php get_footer();?>
<script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        if ( '50' == event.detail.contactFormId ) {
            window.location = "/thank-you/";
        }
    }, false );
</script>