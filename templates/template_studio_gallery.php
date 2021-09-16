<?php /*Template Name: Studio Gallery*/ get_header('inner'); ?>
<div id=studio>
	<div class=block1>
		<div class=row>
			<div class='large-12 columns ttl'>
				<h1>Studio Gallery</h1>
			</div>
		</div>
	</div>
	<div class=block2>
		<div class=row>
			<div class='large-12 columns' style='padding:0'>
				<?php echo do_shortcode('[foogallery id="51"]');?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>