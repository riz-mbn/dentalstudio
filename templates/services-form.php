<?php

global $post;

$ID = $post->ID;

$add_form = get_field('services_add_form', $ID);

$form = get_field('services_form_shortcode', $ID);
$form = ($form) ? $form : '';

if ( $add_form && !empty($form) ):
?>
<div id="services-form">
	<div class="services_form_title text-center">
		<h2><span>SCHEDULE YOUR</span> APPOINTMENT</h2>
		<p>The staff at Dental Studio 101 is kind, compassionate and highly educated, and are here to help you through every step of your appointment.</p>
	</div>
	<div class="row">
		<div class='large-12 columns'>				
				<?= do_shortcode("$form"); ?>
		</div>
	</div>
</div>
<?php

endif;
?>