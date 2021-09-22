<?php /*Template Name: Services*/ get_header('inner'); ?>
<section id="services">
	<div class="grid-container block1">
		<div class="grid-x">
			<div class='large-12 columns ttl text-center'>
				<h1><?php the_title();?></h1>
			</div>
		</div>
	</div>
	<div class="grid-container block2">
		<div class="grid-x">
			<div class='large-12 columns'>
			<?php if(have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
				<?php echo the_content();?>
				<?php endwhile; 
				wp_reset_postdata();				
				endif; 
							?>
			</div>
		</div>
	</div>
        <?php /*
		<div class="block-cta">
			<div class=grid-x>
				<div class='large-12 columns text-center'>
					<a class='btn3 btn-custom' href='' target="_blank">Request Your Free Virtual Consult</a>
				</div>
			</div>
		</div>
		*/ ?>
</section>
<div id="services-form">
	<div class="services_form_title text-center">
		<h2><span>SCHEDULE YOUR</span> APPOINTMENT</h2>
		<p>The staff at Dental Studio 101 is kind, compassionate and highly educated, and are here to help you through every step of your appointment.</p>
	</div>
	<div class="row">
		<div class='large-12 columns'>				
				<?= do_shortcode('[gravityform id="4" title="false" description="false" ajax="false"]'); ?>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
		</div>
	</div>
</div>

<?php 
get_footer();
?>