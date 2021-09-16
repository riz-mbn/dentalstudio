<?php /*Template Name: Studio Main*/ get_header('inner'); ?>
<div id="studio_main">
	<div class="grid-container">
		<div class="block1">
			<div class="row">
				<div class="large-12 columns ttl">
					<h1>Studio</h1>
				</div>
			</div>
		</div>
		<div class="separator"></div>
		<div class="block2">
			<div class="row">
				<div class="large-4 columns left">
					<img src="<?php bloginfo('template_url');?>/img/studio-main-img1.jpg" alt="cosmetic dentistry studio in scottsdale" width="369" height="273" />
				</div>
				<div class="large-8 columns right">
					<h3>About our Studio</h3>
					<?php /*
					<p>
						Dr. Peck, Dr. Schmidt and Dr. Peterson Boyle pride themselves in one of the world’s most advanced dental treatment 
						facilities. Dentists and patients come from around the globe to see the facility and learn his concept and philosophy 
						of practice. Practice management consultants feature this office as they tour and lecture internationally.
					</p> */ ?>
					<p>
						Dr. Peterson Boyle and Dr. Peck pride themselves in one of the world’s most advanced dental treatment facilities. Dentists 
						and patients come from around the globe to see the facility and learn about our concept and philosophy of practice. Practice 
						management consultants feature this office as they tour and lecture internationally.
					</p>
					<a href='<?php echo home_url() ?>/about-our-studio/' class="button small"><span>LEARN MORE</span></a>
				</div>
			</div>
			<div class="row">
				<div class='large-4 columns left'>
					<img src='<?php bloginfo('template_url');?>/img/studio-main-img2.jpg' alt='scottsdale cosmetic dentistry studio' width="369" height="273" />
				</div>
				<div class='large-8 columns right'>
					<h3>Studio Gallery</h3>
					<p>
						Dental Studio 101's philosophy and facility exude customer service. You will enter a working art gallery where someone comes 
						to greet you by name. As a new patient, you are given a private and complete tour of the office as the staff gets to know you 
						and your concerns. You are introduced to the entire staff and to a level of technical equipment and expertise that you would 
						be hard pressed to find anywhere else. We are truly at the forefront of cutting edge dentistry.
					</p>
					<a href='<?php echo home_url() ?>/studio-gallery/' class="button small"><span>LEARN MORE</span></a>
				</div>
			</div>
			<div class="row">
				<div class='large-4 columns left'>
					<img src='<?php bloginfo('template_url');?>/img/studio-main-img3.jpg' alt='our beautiful cosmetic dentistry studio' width="369" height="273" />
				</div>
				<div class='large-8 columns right'>
					<h3>Spa Amenities</h3>
					<p>
						An integral part of our practice philosophy is to ensure the comfort of our patients during their visits to our offices. We offer 
						cable TV in every room along with headphones for TV or music during dental treatments. We have an amazing massage chair for our 
						patients during non-treatment times. We encourage our patients to enjoy a hand dipped paraffin wax treatment and, or hot rocks 
						for your back or shoulders, to take you to a whole new level of care and caring.
					</p>
					<a href='<?php echo home_url() ?>/studio-spa-amenities/' class="button small"><span>LEARN MORE</span></a>
				</div>
			</div>
			<?php /*
			<div class=row>
				<div class='large-4 columns left'>
					<img src='<?php bloginfo('template_url');?>/img/studio-main-img3.jpg' alt='Dental Studio 101 - Referral Program' />
				</div>
				<div class='large-8 columns right'>
					<h2>Referral Program</h2>
					<p>
						We take great pride in providing our patients with the best care possible and are always excited to meet new patients. If you are 
						currently a Dental Studio 101 patient, you are welcome to take advantage of our referral program. We offer a range of incentives from 
						credits to your account to movie tickets and restaurant gift cards.
					</p>
					<a href='/referral-program/' class=button small>LEARN MORE</a>
				</div>
			</div>
			*/ ?>
		</div>
	</div>
</div>
<?php get_footer();?>