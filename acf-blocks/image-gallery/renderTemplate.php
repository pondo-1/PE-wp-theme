<section class="module image-gallery">
  <div class="container">
  <?php $image_gallery_images = get_field( 'image_gallery' ); ?>
	<?php if ( $image_gallery_images ) :  ?>
		<?php foreach ( $image_gallery_images as $image_gallery_image ): ?>
  <div class="image-wrapper">
				<img src="<?php echo esc_url( $image_gallery_image['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $image_gallery_image['alt'] ); ?>" />
			<p><?php echo esc_html( $image_gallery_image['caption'] ); ?></p>
  </div>
		<?php endforeach; ?>
	<?php endif; ?>
  </div>

</section>