<?php /*Template Name: Spa Amenities*/ get_header(); ?>
<section id="spa">
	<div class="grid-container block1">
		<div class=grid-x>
			<div class='large-12 columns ttl'>
				<h1>Spa Amenities</h1>
			</div>
		</div>
	</div>
	<div class="grid-container block2">
		<div class=grid-x>
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
				<figure>
					<img class=img src='<?php bloginfo('template_url');?>/img/spa-amenities-img1.jpg' alt='Dental Studio 101 - Spa Amenities' />
				</figure>
				<p>&nbsp;</p>
				<figure>
					<img class=img src='<?php bloginfo('template_url');?>/img/spa-amenities-img2.jpg' alt='Dental Studio 101 - Spa Amenities' />
				</figure>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>