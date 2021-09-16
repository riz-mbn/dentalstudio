<?php /*Template Name: Blog*/ get_header(); ?>
<div id=blog>
	<div class=block1>
		<div class=row>
			<div class='large-12 columns ttl'>
				<h1>Blog</h1>
			</div>
		</div>
	</div>
	<div class=block2>
		<div class=row>
			<div class='large-12 columns'>
				<ul class=blogpost>
					<?php 
					
						$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
							$custom_args = array(
								'post_type'			=> 'post',
									'post_status'		=> 'publish',
									//'posts_per_page'	=> 6,
									'orderby'			=> 'id',
									'order'				=> 'desc',
									//'paged'				=> $paged
							);

							$custom_query = new WP_Query( $custom_args );

							if($custom_query->have_posts()) :
								while($custom_query->have_posts()) : $custom_query->the_post();
							$counter++;
							if($counter % 2){
					?>
						<li class='post-item-left'>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo excerpt(50); ?><br /><br /><a class=btn5 href="<?php the_permalink(); ?>">Read More</a></p>
						</li>
					<?php } else {?>
						<li class='post-item-right'>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo excerpt(50); ?><br /><br /><a class=btn5 href="<?php the_permalink(); ?>">Read More</a></p>
						</li>
					<?php } endwhile; ?>
				</ul>
				<?php 
				
					custom_pagination($custom_query->max_num_pages,"",$paged);
					wp_reset_postdata();
						
					endif; 
				?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>