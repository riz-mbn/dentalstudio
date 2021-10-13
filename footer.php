

    </main>
    
    <footer id="footer" class="footer">
        <div class="grid-container">
            <div class="foottop">
                <div class="grid-x grid-margin-x">
                    <div class="cell large-4 medium-12">
                        <div class="foot_logo">
                            <figure>
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/logo-med.svg" alt="" width="386" height="104" />
                            </figure>
                            <a href="<?php echo home_url() ?>/contact-us" class="button primary large">Schedule An Appointment</a>
                        </div>
                    </div>
                    <div class="cell large-4 large-offset-1 medium-6 foot_about">
                        <h3 class="col-title">Contact Details</h3>
                        <div class="text_wrap">
                            <p>Dental Studio 101</p>
                            <p>33739 N Scottsdale Rd Suite 101</p>
                            <p>Scottsdale, AZ 85266</p>                            
                        </div>
                        <div class="text_wrap">
                            <a class="phonenum" href="tel:4803725079">(480) 372-5079</a>                  
                        </div>
                        <div class="text_wrap">
                            <a href="<?php echo home_url() ?>/cosmetic-dentists/dr-mark-peck/" class="meet_founder">Meet our Founder - <strong>Dr. Mark Peck</strong></a>         
                        </div>
                    </div>
                    <div class="cell large-2 large-offset-1 medium-6">
                        <h3 class="col-title">Pages</h3>
                        <div class="footer_menu">           
                            <?php
                                wp_nav_menu( array( 
                                    'theme_location' => 'footer-menu',
                                    'menu'         => '',
                                    'container'    => 'ul',
                                    'items_wrap' => '<ul class="menu vertical">%3$s</ul>' ,
                                    'menu_class'   => 'menu vertical',
                                ));
                            ?> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="footmid">
                <div class="text-wrap">
                 <p class="text-center">To see our latest before and after photos, check out our Instagram: <a href="https://www.instagram.com/dentalstudio101/" target="_blank">@DentalStudio101</a></p>
                </div>
            </div>
            <div class="footbot">
                <div class="copyright">All rights reserved.  &copy;  <?php echo date('Y'); ?> - Dental Studio 101 </div>
                <div class="designby"><a href="https://www.mybizniche.com/phoenix-web-design/" target="_blank">Website</a> by: My Biz Niche</div>
            </div>
        </div>  
    </footer>
</div>  

<?php wp_footer() ?>

<?php if ( is_page_template('templates/thank-you.php') ||  is_page_template('templates/thankyou.php') ): ?>
<!-- Event snippet for Form Fill conversion page -->
<script>
gtag('event', 'conversion', {'send_to': 'AW-817881512/d9U1CL7FlocBEKjD_4UD'});
</script>
<?php endif; ?>
</body>


</html>