<?php /*Template Name: Contact Us*/ get_header('inner'); ?>
<div id=contact>
	<div class=block1>
		<div class=row>
			<div class='large-6 large-push-6 columns left-cont'>
				<div class=row>
					<div class=cont-left-width>
						<div class='cont'>
							<h1><?php the_title();?></h1>
							<?php
                                if(have_posts()) : 
						            while(have_posts()) : the_post();
				    			        the_content();
					                endwhile;
                                endif;
                            ?>
							<p class='line'></p>
							<?php echo do_shortcode('[contact-form-7 id="66" title="Contact Page:Form"]');?>
							<?php /*
							<div class=row>
								<div class='large-9 large-offset-2 columns btn'>
									<a class='btn6 send-form'>SUBMIT</a>
								</div>
							</div>
							*/ ?>
							<div class=row>
								<div class='large-12 columns'>
									<p style='border-top:1px solid #eceded;margin-top:100px'></p>
								</div>
							</div>
							<div class=row>
								<div class='large-9 large-offset-2 small-12 columns'>
									<p class=req-txt><span class=req>*</span>Required</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='large-6 columns right-cont'>
				<div class=contact-map>
				    <?php /*
					<iframe 
						src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13263.299385450118!2d-111.925174!3d33.791021!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x41c69cb2ae7b8b03!2sDental+Studio+101!5e0!3m2!1sen!2s!4v1495165578779" 
						width="100%" 
						frameborder="0" 
						allowfullscreen>
					</iframe>
					*/ ?>
					<iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d6632.0281534214055!2d-111.92491650793457!3d33.78613465619099!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x872b793e2bb32301%3A0x41c69cb2ae7b8b03!2sDental%20Studio%20101%2033739%20N%20Scottsdale%20Rd%20%23101%20Scottsdale%2C%20AZ%2085266!3m2!1d33.791021!2d-111.925174!5e0!3m2!1sen!2sus!4v1629370055052!5m2!1sen!2sus" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
		if ( '66' == event.detail.contactFormId ) {
			window.location = "/thank-you/";
		}
	}, false );
</script>
<?php get_footer();?>