<?php /*Template Name: Studio Gallery*/ get_header('inner'); ?>
<section id=studio>
	<div class="grid-container block1">
		<div class=grid-x>
			<div class='large-12 columns ttl'>
				<h1>Studio Gallery</h1>
			</div>
		</div>
	</div>
	<div class="grid-container block2">
		<div class=grid-x>
			<div class='large-12 columns' style='padding:0'>
			<?php if(have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
				<?php echo the_content();?>
				<?php endwhile; endif; 
							?>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>