<section class="module background_image_section">
  <div class="container">
    <div class="content-wrapper text-box">
        <div class="text_gross">
            <?php the_field('text_gross'); ?>
        </div>
        <div class="text_klein">
            <?php the_field('text_klein'); ?>
        </div>

      <?php $linktype = get_field('CTA-button:link-type'); ?>
      <?php if ($linktype == 'url') : ?>
        <?php $url_object = get_field('CTA-button:url'); ?>
        <?php echo acf_relative_path($url_object); ?>
      <?php elseif ($linktype == 'postid') : ?>
        <?php $postid = get_field('CTA-button:postid'); ?>
        <?php echo postid_to_url($postid); ?>
      <?php endif ?>
    </div>
    </div>
    <?php if ( get_field( 'background_image' ) ) : ?>
		<img src="<?php the_field( 'background_image' ); ?>" />
    <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/sample-code.png" alt="real" sizes="(max-width: 500px) 100vw, 500px">
      <?php endif; ?>
</section>