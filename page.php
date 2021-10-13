<?php
get_header() ?>

<section class="page-content">
	<div class="grid-container">		
		<?php
			while ( have_posts() ) : the_post();
			
			the_content();

		endwhile; // End of the loop.
		?>
	</div>	
</section>

<?php get_footer() ?>