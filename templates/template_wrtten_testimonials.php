<?php /*Template Name: Testimonials Written*/ get_header('inner'); ?>
<div id=testi>
	<div class=block1>
		<div class=row>
			<div class='large-12 columns'>
				<h1>Dental Studio 101 Written Reviews</h1>
			</div>
		</div>
	</div>
	<div class=block2>
		<div class='row review-cont'>
			<div class='large-12 columns'>
			    <?php /*
				<ul>
				<?php 
						query_posts('post_type=testiwritten&orderby=date&order=DESC&posts_per_page=-1');
						while(have_posts()) : the_post();
						
						$dateformatstring = "n/d/Y";
						$unixtimestamp = strtotime(get_field('testi_date'));
				?>
					<li>
						<div class=cont>
							<div class=row>
								<div class='large-12 columns'>
									<div class='row head-title'>
										<div class='large-8 columns'>
											<h2><?php the_title();?></h2>
											
											<span clas=txt-date><?php echo date_i18n($dateformatstring, $unixtimestamp); ?></span>
										</div>
										<div class='large-4 columns'>
											<img src='<?php bloginfo('template_url');?>/img/testimonial-stars.png' alt='Testamonial Stars' />
										</div>
									</div>
									<div class='row body-txt'>
										<div class='large-12 columns'>
											<?php the_content();?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				<?php endwhile; wp_reset_query(); ?>
				</ul>
				*/ ?>
				<iframe src="https://reviews.solutionreach.com/vs/reviews/dental_studio_101?limit=50" style="border: 0;" width="100%" height="6000" frameborder="0" scrolling="yes"></iframe>
			</div>
		</div>
		<div class=row>
			<div class='large-12 columns text-center'>
				<a class=btn1 href='https://reviews.solutionreach.com/vs/reviews/dental_studio_101' target='_blank'>READ MORE REVIEWS</a>
				<?php /* a class=btn1 href='https://www.rateabiz.com/reviews/dental-studio-101-scottsdale-az/6e8952381f45c1b2ddeb3b39555ebb4d/summary' target='_blank'>READ MORE REVIEWS</a */ ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>