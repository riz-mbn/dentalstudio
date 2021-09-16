<?php /*Template Name: Spa Amenities*/ get_header('inner'); ?>
<div id=spa>
	<div class=block1>
		<div class=row>
			<div class='large-12 columns ttl'>
				<h1>Spa Amenities</h1>
			</div>
		</div>
	</div>
	<div class=block2>
		<div class=row>
			<div class='large-7 columns left'>
				<?php
				    if(have_posts()) : 
					    while(have_posts()) : the_post();
							the_content();
				        endwhile;
                    endif;
                ?>
			</div>
			<div class='large-5 columns right'>
				<img class=img src='<?php bloginfo('template_url');?>/img/spa-amenities-img1.jpg' alt='Dental Studio 101 - Spa Amenities' />
				<img class=img src='<?php bloginfo('template_url');?>/img/spa-amenities-img2.jpg' alt='Dental Studio 101 - Spa Amenities' />
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>