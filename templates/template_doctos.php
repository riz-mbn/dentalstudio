<?php /*Template Name: Doctors*/ get_header('inner'); ?>
<div id=doctors>
	<div class=block1>
		<div class=row>
			<div class='large-12 columns'>
				<h1><?php the_title();?></h1>
			</div>
		</div>
	</div>
	<div class=block2>
		<div class=row>
			<div class='large-12 columns cont'>
				<?php
					if(have_posts()) : 
						while(have_posts()) : the_post();
							the_content();
						endwhile;
					endif;
				?>
			</div>
		</div>
	</div>
	<?php if (get_field('testimonial1_name') != ""){ ?>
	<div class=block3>
		<div class=row>
			<div class='large-12 columns text-center'>
				<h2>Testimonials</h2>
			</div>
		</div>
		<div class=row>
			<div class='large-4 medium-4 columns txt'>
				<h2><?php echo get_field('testimonial1_name');?></h2>
				<span><?php echo get_field('testimonial1_cyear');?></span>
				<?php echo get_field('testimonial1_msg');?>
			</div>
			<div class='large-4 medium-4 columns txt'>
				<h2><?php echo get_field('testimonial2_name');?></h2>
				<span><?php echo get_field('testimonial2_cyear');?></span>
				<?php echo get_field('testimonial2_msg');?>
			</div>
			<div class='large-4 medium-4 columns txt'>
				<h2><?php echo get_field('testimonial3_name');?></h2>
				<span><?php echo get_field('testimonial3_cyear');?></span>
				<?php echo get_field('testimonial3_msg');?>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
<?php include_once('consultation-form.php'); get_footer();?>