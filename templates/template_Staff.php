<?php /*Template Name: Staff*/ get_header(); ?>
<section id=staff>
	<div class="grid-container block1">
		<div class=grid-x>
			<div class='large-4 columns'>
				<?php 
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    $thumbnail_id = get_post_thumbnail_id( $post->ID );
                    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                ?>
				<img src='<?php echo $feat_image?>' alt='<?php echo $alt;?>' />
			</div>
			<div class='large-8 columns'>
				<?php
					if(have_posts()) : 
						while(have_posts()) : the_post();
				?>
					<h3><?php the_title();?></h3>
				<?php
					the_content();
					endwhile; endif;
				?>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>