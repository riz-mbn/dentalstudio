<?php 
    /* Template Name: Dr. Mark template */
	get_header() ?>

<section class="page-content">
	<div class="grid-container">		
		<h1><?php the_title(); ?></h1>
		<?php
			while ( have_posts() ) : the_post();
			
			the_content();

		endwhile; // End of the loop.
		?>
	</div>	
</section>

<?php get_footer() ?>