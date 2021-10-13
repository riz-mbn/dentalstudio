<?php 
/*Template Name: Blog*/ get_header(); 
					
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$custom_args = array(
	'post_type'			=> 'post',
		'post_status'		=> 'publish',
		'posts_per_page'	=> 10,
		'orderby'			=> 'id',
		'order'				=> 'desc',
		'paged'				=> $paged
);

$custom_query = new WP_Query( $custom_args );
						
						?>
<section id="blog">
	<div class="grid-container block1">
		<div class="grid-x">
			<div class='large-12 columns ttl'>
				<h1>Blog</h1>
			</div>
		</div>
	</div>
	<div class="grid-container block2">
		<div class="grid-x">
			<div class='large-12 columns'>
				<div class="blogpost">
					<?php 

							if($custom_query->have_posts()) :
								while($custom_query->have_posts()) : $custom_query->the_post();
							$counter++;
							if($counter % 2){
					?>
						<div class='post-item post-item-left'>
							<div class="post-inner">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php echo excerpt(20); ?><br /><br /><a class="button small" href="<?php the_permalink(); ?>"><span>Read More</span></a></p>
							</div>
						</div>
					<?php } else {?>
						<div class='post-item post-item-right'>
								<div class="post-inner">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php echo excerpt(20); ?><br /><br /><a class="button small" href="<?php the_permalink(); ?>"><span>Read More</span></a></p>
							</div>
						</div>
					<?php } endwhile; ?>
				</div>
				<?php 
				
					custom_pagination($custom_query->max_num_pages,"",$paged);
					wp_reset_postdata();
						
					endif; 
				?>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>