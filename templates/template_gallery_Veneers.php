<?php /*Template Name: Gallery Veneers*/ get_header(); ?>
<div id=custom_gallery>
	<div class="grid-container block1">
		<div class=grid-x>
			<div class='large-12 columns'>
				<h1>How Long Will Veneers Last?</h1>
			</div>
		</div>
	</div>
	<div class="grid-container block2">
		<div class=grid-x>
			<div class='large-12 columns'>
				<p>
					At Dental Studio 101 we do many smile makeover veneer cases. Unfortunately, we are faced with replacing other lab & doctor cases that are only 3 – 5 years old. 
					One of our most common questions is how long will veneers last? Our oldest standing case is nearing 30 years.
				</p>
				<div class='grid-x smile-list'>
				<?php 
					query_posts('post_type=smilegallery&orderby=date&order=DESC&posts_per_page=-1');
					while(have_posts()) : the_post();
						$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				?>
					<div class='smile-img large-4 medium-4 columns'>
						<img src='<?php echo $feat_image; ?>' alt='Dental Veneers Services - Gallery' />
					</div>
				<?php endwhile; wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>