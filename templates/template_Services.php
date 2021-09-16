<?php /*Template Name: Services*/ get_header('inner'); ?>
<div id="services">
	<div class="block1">
		<div class="row">
			<div class='large-12 columns ttl text-center'>
				<h1><?php the_title();?></h1>
			</div>
		</div>
	</div>
	<div class="block2">
		<div class="row">
			<div class='large-12 columns'>
			<?php if(have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
				<?php echo the_content();?>
				<?php endwhile; endif; 
							?>
			</div>
		</div>
	</div>
        <?php /*
		<div class="block-cta">
			<div class=row>
				<div class='large-12 columns text-center'>
					<a class='btn3 btn-custom' href='' target="_blank">Request Your Free Virtual Consult</a>
				</div>
			</div>
		</div>
		*/ ?>
</div>
<?php 
include_once('services-form.php');
get_footer();
?>