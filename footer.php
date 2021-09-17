

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
            <div class="footbot">
                <div class="copyright">Company. ALL Rights Reserved.  &copy;  <?php echo date('Y'); ?> - Dental Studio 101 </div>
                <div class="designby"><a href="https://www.mybizniche.com/phoenix-web-design/" target="_blank">Website Design</a> by: My Biz Niche</div>
            </div>
        </div>  
    </footer>
</div>  

<?php wp_footer() ?>

</body>
</html>