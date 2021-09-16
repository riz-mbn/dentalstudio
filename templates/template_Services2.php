<?php /*Template Name: Services2*/ get_header('inner'); ?>
<div id=services>
	<div class=block1>
		<div class=row>
			<div class='large-12 columns ttl'>
				<h1><?php the_title();?></h1>
			</div>
		</div>
	</div>
	<div class=block2>
		<div class=row>
			<div class='large-12 columns'>
			<?php
				if(have_posts()) :
					while (have_posts()) : the_post();
						the_content();
					endwhile;
				endif; 
			?>
			</div>
		</div>
		<div class=row>
			<div class='large-12 columns cont2'>
				<div class=row>
					<div class='large-6 columns txt'>
						<h2>Teeth Whitening And Stains</h2>
						<p>
							Stains from everyday foods and beverages can quickly dull your beautiful pearly whites. Teeth whitening 
							is a procedure that restores the natural whiteness, removing unwanted stains and fading. For those with 
							more serious stains or those who are sensitive to teeth whitening solutions, veneers or crowns area procedures 
							that can effectively accomplish the same goal.
						</p>
						<p>
							At Dental Studio 101, you’ll sit down with an experienced cosmetic dentist who can carefully and accurately 
							explain your options and come up with the perfect course of action for you. Our caring team are dedicated to 
							taking the fear out of cosmetic dentistry so you feel more relaxed, confident and comfortable. Call 480-488-4852 
							for a FREE consultation today.
						</p>
					</div>
					<div class='large-6 columns txt'>
						<h2>Uneven Teeth</h2>
						<p>
							Uneven teeth can be a real confidence killer. At Dental Studio 101 in Scottsdale, we offer a variety of cosmetic 
							dentistry procedures to help patients of all ages achieve a stunningly straight smile they’ll be proud to show off. 
							Our qualified staff of cosmetic dentists are well versed in all forms of alignment. Give us a call at 480-488-4852 
							today. We’ll set up a free consultation and you on track toward a smile that will make you want to get out there and 
							greet the world.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
include_once('services-form.php');
get_footer();
?>