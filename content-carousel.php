<?php $carousel = get_post_meta($post->ID,'_carousel',true);
if ( $carousel != '' ) { ?>
	<section id="featured" class="row">
			<div class="col-md-12">
				<?php _mbbasetheme_get_carousel($post->ID); ?>
			</div>
	</section>
<?php } ?>
