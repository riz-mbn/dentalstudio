<?php /*Template Name: Studio About*/ get_header(); ?>
<section id="studio_about">
	<div class="grid-container block1">
		<div class="grid-x">
			<div class='large-12 columns'>
				<h1><?php the_title();?></h1>
			</div>
		</div>
	</div>
	<div class="block2">		
		<div class="grid-container ">
			<video id="vid-0" style='display:none'>
				<source src='<?php bloginfo('template_directory');?>/vid/videoplayback.mp4' type='video/mp4'>
			</video>
			<div class="grid-x">
				<div class='large-6 medium-12 left text-center'>
					<span id="play0" class='play-btn ico play-btn'></span>
				</div>
				<div class='large-6 medium-12 right'>
					<?php
						if(have_posts()) : 
							while(have_posts()) : the_post();
								the_content();
							endwhile;
						endif;
					?>
					<a class="button primary large" href='<?php echo home_url() ?>/contact-us/'>SCHEDULE APPOINTMENT</a>
				</div>
			</div>
		</div>
	</div>
	<div class="block3">
		<div class="grid-container">
			<div class='grid-x item'>
				<div class='large-12'>
					<?php echo get_field('sect1_cont');?>
					<div class=line></div>
				</div>
			</div>
			<div class="separator"></div>
			<div class='grid-x item'>
				<div class='large-12'>
					<?php echo get_field('sect2_cont');?>
					<div class="line"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="reveal small" id="popup-video" data-reveal>
	<div class="responsive-embed">
		<iframe id="ytplayer" width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>
	</div>
	<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<?php get_footer();?>