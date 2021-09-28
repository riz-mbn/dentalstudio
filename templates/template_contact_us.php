<?php /*Template Name: Contact Us*/ get_header('inner'); ?>
<section id="contact">
	<div class="grid-container block1">
		<div class="grid-x grid-margin-x">
			<div class='cell large-6 medium-12 large-order-2'>
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
						<?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="false"]');?>
						
					</div>
				</div>
			</div>
			<div class='cell large-6 medium-12'>
				<div class="contact-map">
				    <?php /*
					<iframe 
						src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13263.299385450118!2d-111.925174!3d33.791021!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x41c69cb2ae7b8b03!2sDental+Studio+101!5e0!3m2!1sen!2s!4v1495165578779" 
						width="100%" 
						frameborder="0" 
						allowfullscreen>
					</iframe>
					*/ ?>
					<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d6632.0281534214055!2d-111.92491650793457!3d33.78613465619099!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x872b793e2bb32301%3A0x41c69cb2ae7b8b03!2sDental%20Studio%20101%2033739%20N%20Scottsdale%20Rd%20%23101%20Scottsdale%2C%20AZ%2085266!3m2!1d33.791021!2d-111.925174!5e0!3m2!1sen!2sus!4v1629370055052!5m2!1sen!2sus" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
					<iframe src="https://snazzymaps.com/embed/341253" width="100%" height="800" style="border:none;"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
		if ( '66' == event.detail.contactFormId ) {
			window.location = "/thank-you/";
		}
	}, false );
</script>
<?php get_footer();?>