<?php
/**
 * Template Name: Dev Landing Page
 */

get_header('landing');
?>


<main>
	<section  id="state">
		<div class="row flex-end">
			<div class="columns large-6">
				<div class="featured-image">
					<?php if (has_post_thumbnail()): ?>
						<?php the_post_thumbnail('full'); ?>
					<?php endif ?>
				</div>
			</div>
			<div class="columns large-6 pb-60">
				<?php the_content(); ?>
			</div>
		</div>

		<div class="services-box">
			<div class="row">
				<div class="columns large-12">
					<div class="section-box-white">
						<h2 class="text-center">
							What Other Cosmetic Dentistry <br>Services are Provided?
						</h2>

						<div class="service-card" id="service-card">
							<div class="box active" data-service="s-veneers">
								<h3>VENEERS</h3>
								<div class="icon">
									<?php get_template_part( 'template-parts/icon', 'veneers' ); ?>
								</div>

								<div class="mobile-content">
									<div class="content-box">
										<p>If you are struggling with a smile that has more character than visual appeal or you feel your smile gives an impression that is different than the one you are working to present to the world, it may be time to consider some esthetic changes for your teeth and gums, and that is where veneers come in. Veneers provide you with a beautiful smile that will allow you to feel confident and more like yourself.</p>
										<p><strong>Unlike any other studio in the Valley, our veneers are proven to last the test of time and have even lasted, without replacement, for almost 30 years!</strong></p>
									</div>
								</div>
							</div>
							<div class="box" data-service="s-dental-implants">
								<h3>DENTAL IMPLANTS</h3>
								<div class="icon">
									<?php get_template_part( 'template-parts/icon', 'dental-implants' ); ?>
								</div>

								<div class="mobile-content">
									<div class="content-box">
										<p>If you’re in need of a replacement for missing or damaged teeth, our dental implant procedure provides you with a new ceramic tooth (or teeth) specifically built for your mouth. We maintain the highest possible standards for our dental implants to ensure you leave our office with confidence in your smile and a willingness to showcase the quality of our work.</p>
									</div>
								</div>
							</div>
							<div class="box" data-service="s-all-implants">
								<h3>ALL-ON-4-IMPLANTS</h3>
								<div class="icon">
									<?php get_template_part( 'template-parts/icon', 'all-implants' ); ?>
								</div>

								<div class="mobile-content">
									<div class="content-box">
										<p>This alternative to dentures provides a permanent solution for patients who have lost or are losing all of their teeth. With this method a bridge is permanently attached to four to six dental implants. This is more cost effective than having each missing or failing tooth replaced by individual implants and far more comfortable and convenient than traditional dentures. This procedure also provides instant gratification where you can literally get a complete smile makeover in just one day. </p>
									</div>
								</div>
							</div>
							<div class="box" data-service="s-reconstruction">
								<h3>FULL MOUTH <br>RECONSTRUCTION</h3>
								<div class="icon">
									<?php get_template_part( 'template-parts/icon', 'reconstructions' ); ?>
								</div>

								<div class="mobile-content">
									<div class="content-box">
										<p>Our 30+ years of experience in cosmetic dentistry have allowed us to build up an impressive resume of patients who have needed full mouth reconstruction for a diverse range of reasons. Patients with periodontal disease, injury, or crooked and stained teeth have all come through our doors in search of reviving their smile. And left with a gorgeous new smile.</p>
										<p>Our reconstruction procedure has been perfected into a simple four hour preparation followed by another four hour insertion appointment two weeks later. Patients can rely on Dental Studio 101 to be cognizant of your time and keep you comfortable during your appointment.</p>
									</div>
								</div>
							</div>
							<div class="box" data-service="s-dental-crowns">
								<h3>DENTAL CROWNS</h3>
								<div class="icon">
									<?php get_template_part( 'template-parts/icon', 'dental-crown' ); ?>
								</div>

								<div class="mobile-content">
									<div class="content-box">
										<p>Our dental crowns bring life back into the teeth of our patients whose smiles suffer from cracked, decayed, or stained teeth. Our dedication to staying on top of the latest advancements in dental care technology and practices allow us to give patients the gift of a natural and healthy smile.</p>
									</div>
								</div>
							</div>
							
						</div>

						<div class="service-content">
							<div class="content-box" id="s-veneers">
								<h3>Veneers</h3>
								<p>If you are struggling with a smile that has more character than visual appeal or you feel your smile gives an impression that is different than the one you are working to present to the world, it may be time to consider some esthetic changes for your teeth and gums, and that is where veneers come in. Veneers provide you with a beautiful smile that will allow you to feel confident and more like yourself.</p>
								<p><strong>Unlike any other studio in the Valley, our veneers are proven to last the test of time and have even lasted, without replacement, for almost 30 years!</strong></p>
							</div>

							<div class="content-box" id="s-dental-implants" style="display: none">
								<h3>Dental Implants</h3>
								<p>If you’re in need of a replacement for missing or damaged teeth, our dental implant procedure provides you with a new ceramic tooth (or teeth) specifically built for your mouth. We maintain the highest possible standards for our dental implants to ensure you leave our office with confidence in your smile and a willingness to showcase the quality of our work.</p>
							</div>


							<div class="content-box" id="s-all-implants" style="display: none">
								<h3>All-on-4-Implants</h3>
								<p>This alternative to dentures provides a permanent solution for patients who have lost or are losing all of their teeth. With this method a bridge is permanently attached to four to six dental implants. This is more cost effective than having each missing or failing tooth replaced by individual implants and far more comfortable and convenient than traditional dentures. This procedure also provides instant gratification where you can literally get a complete smile makeover in just one day. </p>
							</div>

							<div class="content-box" id="s-reconstruction" style="display: none">
								<h3>Full Mouth Reconstruction</h3>
								<p>Our 30+ years of experience in cosmetic dentistry have allowed us to build up an impressive resume of patients who have needed full mouth reconstruction for a diverse range of reasons. Patients with periodontal disease, injury, or crooked and stained teeth have all come through our doors in search of reviving their smile. And left with a gorgeous new smile.</p>
								<p>Our reconstruction procedure has been perfected into a simple four hour preparation followed by another four hour insertion appointment two weeks later. Patients can rely on Dental Studio 101 to be cognizant of your time and keep you comfortable during your appointment.</p>
							</div>

							<div class="content-box" id="s-dental-crowns" style="display: none">
								<h3>Dental Crowns</h3>
								<p>Our dental crowns bring life back into the teeth of our patients whose smiles suffer from cracked, decayed, or stained teeth. Our dedication to staying on top of the latest advancements in dental care technology and practices allow us to give patients the gift of a natural and healthy smile.</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
		
	</section>


	<section class="section-schedule">
		<div class="row">
			<div class="columns large-12">
				<div class="section-box">
					<h3 class="text-center">Schedule Your Award-Winning Cosmetic <br>Dentistry Appointment Today!</h3>
					<div class="row flex-content-center">
						<div class="columns medium-9">
							<?php echo do_shortcode( '[contact-form-7 id="5697" title="Landing - Content: Contact Form"]' ); ?>
						</div>
					</div>
					

					<div class="testimonials slider-control">
						<?php 
						    $query = new WP_Query( array(
						        'post_type' => 'testiwritten',
						        'post_status' => 'publish',
						        'posts_per_page' => -1
						    ));
						    while ($query->have_posts()) : $query->the_post();
						?>
						<div class="slider-item">
							<?php the_content(); ?>
							<p><b><?php the_title(); ?></b></p>
							<span class="ico star"></span>
						</div>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>

					

					
				</div>
			</div>
		</div>
	</section>


	<section class="why-dental-studio" id="why">
		<div class="row">
			<div class="columns medium-12">
				<div class="section-box-white">
					<h2 class="text-center">Why Dental Studio 101?</h2>


					<div class="columns-2">
						<p><b>Dental Studio 101</b> is committed to providing premier customer service. When you first arrive at our state-of-the-art studio, our staff will greet you by name and our team will give you a private and complete tour of our office, all while we get to know you and any of your concerns regarding your visit or procedure(s).</p>
						<p>During your complete tour of the office/studio (sometimes also referred to as our working art gallery), we will introduce you to digital x-rays which reduce radiation exposure up to 95% and eliminate chemical waste.You will see highly technical intraoral and extraoral digital cameras capable of letting you see what the doctor sees and even imaging your new smile. Many of the smile enhancements that Dr. Boyle has done for her patients are displayed throughout the office to instill the confidence that you need when choosing a dentist for veneers, natural appearing fillings, or even routine cleaning appointments.</p>
						<p>When you step into our studio, we want to ensure you feel right at home and comfortable during your appointment. </p>

						<p>We offer cable TV in every room along with headphones for TV or music during dental treatments. We have an amazing massage chair for our patients during non-treatment times. We encourage our patients to enjoy a hand dipped paraffin wax treatment and, or hot rocks for your back or shoulders, to take you to a whole new level of care and caring.</p>
						<h4>Advanced Technology</h4>

						<p>There are various types of lasers used in the office including the most recent development in lasers, the hyper speed C02 laser for periodontal pocket reduction, biopsies and much more. Other new laser technology available at Dental Studio 101 allows the doctors to detect decay at its earliest levels preventing loss of valuable tooth structure.</p>
						<p>You will also find that our sterilization procedures are state of the art featuring a hospital grade sterilization center.</p>
					</div>


					<div class="slider-video-testimony">
						<div class="slider-item">
							<a href="https://www.youtube.com/watch?v=Hh_95QMNBMk" data-fancybox class="play-button"></a>
							<a href="https://www.youtube.com/watch?v=Hh_95QMNBMk" data-fancybox class="video-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/landing-assets/images/video-thumb-dr-alex.jpg" alt="">
							</a>
						</div>

						<div class="slider-item">
							<a href="https://www.youtube.com/watch?v=Hh_95QMNBMk" data-fancybox class="play-button"></a>
							<a href="https://www.youtube.com/watch?v=Hh_95QMNBMk" data-fancybox class="video-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/landing-assets/images/video-thumb-dr-alex.jpg" alt="">
							</a>
						</div>

						<div class="slider-item">
							<a href="https://www.youtube.com/watch?v=Hh_95QMNBMk" data-fancybox class="play-button"></a>
							<a href="https://www.youtube.com/watch?v=Hh_95QMNBMk" data-fancybox class="video-thumb">
								<img src="<?php echo get_template_directory_uri(); ?>/landing-assets/images/video-thumb-dr-alex.jpg" alt="">
							</a>
						</div>
					</div>

					<div class="tagline">
						<div class="tag-title">We are committed to providing premier customer service and cosmetic dentistry to all of our patients</div>
						<div class="tag-sub">“Dedication to Quality and Consistency..”</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>



	<section id="team">
		<div class="row">
			<div class="columns medium-12">
				<div class="section-box">
					<h2 class="text-center" style="line-height:1;margin-bottom:0">The Dental Studio 101 Team</h2>

					<div class="thumb text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/landing-assets/images/img-dental-studio.png" alt="">
					</div>

					<!-- <div class="thumb-control">
						<img src="<?php echo get_template_directory_uri(); ?>/landing-assets/images/dental-team-min.jpg" alt="">
					</div> -->
					
					<div class="columns-2">
						<p>Along with renowned cosmetic dentist Dr. Boyle, the Dental Studio 101 team consists of only the best in dental hygiene care, treatment coordination and customer service. </p>
						<p>With a combined total over over 90 years working in the dental field, the Dental Studio 101 team has dedicated their careers to providing compassionate, quality care and dental services to the Valley.</p>
					</div>

					<div class="tagline">
						<div class="tag-title">
							“The staff at Dental Studio 101 is kind, compassionate and highly educated, and are here to help you through every step of your appointment.”
						</div>
					</div>


					<div class="full-range-service" id="treatments">
						<div class="row flex-content-center">
							<div class="columns medium-10">
								<h2>Our Full-Range of Services</h2>

								<ul class="columns-2">
									<li>Cosmetic Dentistry</li>
									<li>Veneers</li>
									<li>Dental Implants</li>
									<li>All-On-4-Implants</li>
									<li>Full Mouth Reconstruction</li>
									<li>Invisalign</li>

									<li>ERS</li>
									<li>Cosmetic Fillings</li>
									<li>In-House Dental Lab</li>
									<li>Root Canal</li>
									<li>Laser Therapy</li>
									<li>Dental Crowns</li>
								</ul>
							</div>	
						</div>
						
					</div>
					

					<div class="tagline">
						<div class="tag-title">
							Award-winning cosmetic dentistry in Scottsdale for 30+ years!
						</div>
					</div>
					<ul class="awards">
						<li><img src="<?= get_template_directory_uri() ?>/landing-assets/images/award-2013.png" alt=""></li>
						<li><img src="<?= get_template_directory_uri() ?>/landing-assets/images/award-2014.png" alt=""></li>
						<li><img src="<?= get_template_directory_uri() ?>/landing-assets/images/award-2015.png" alt=""></li>
						<li><img src="<?= get_template_directory_uri() ?>/landing-assets/images/award-2016.png" alt=""></li>
						<li><img src="<?= get_template_directory_uri() ?>/landing-assets/images/award-2017.png" alt=""></li>
						<li><img src="<?= get_template_directory_uri() ?>/landing-assets/images/award-2018.png" alt=""></li>
						<li><img src="<?= get_template_directory_uri() ?>/landing-assets/images/award-2019.png" alt=""></li>
						<li><img src="<?= get_template_directory_uri() ?>/landing-assets/images/award-2020.png" alt=""></li>
						<li><img src="<?= get_template_directory_uri() ?>/landing-assets/images/award-2021.png" alt=""></li>
					</ul>
				</div>
				
			</div>
		</div>
	</section>
</main>



<?php get_footer('landing') ?>
