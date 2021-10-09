<?php get_header() ?>

<div id="single">
	<div class="block2">
		<div class="row">
			<div class='large-12 columns'>
			<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<div class="blog_content"><?php the_content(); ?></div>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>

<?php 

	if(is_singular('services_type')){
		
		include_once('templates/services-form.php');
	}
get_footer() ?>