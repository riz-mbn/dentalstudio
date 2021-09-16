<?php /*Template Name: Gallery Cosmetic*/ get_header('inner'); ?>
<div id=custom_gallery>
	<div class=block1>
		<div class=row>
			<div class='large-12 columns'>
				<h1>Cosmetic Dental Gallery</h1>
			</div>
		</div>
	</div>
	<div class=block2>
		<div class=row>
			<div class='large-12 columns'>
				<p>
					Here at Dental Studio 101, we put our knowledge and experience to work to ensure our patients have the beautiful smile they’ve 
					always wanted. Our caring and gentle team members and dentists are proud to help restore confidence by creating healthy and attractive 
					smiles. Scroll through our gallery below to see a few examples of the transformations Dental Studio 101 has completed.
				</p>
				<div class='row cosmetic-cont'>
					
				<?php 
					query_posts('post_type=cosmeticgallery&orderby=date&order=DESC&posts_per_page=-1');
					while(have_posts()) : the_post();
						$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				?>
					<div class='large-12 columns cosmetic-img text-center'>
						<img src='<?php echo $feat_image; ?>' alt='Dental Studio 101 - Cosmetic Dental Before and After' />
					</div>
				<?php endwhile; wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>