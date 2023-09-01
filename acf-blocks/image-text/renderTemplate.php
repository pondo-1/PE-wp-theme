<section class="module image-text <?php the_field('order'); ?> <?php the_field('bg-color'); ?>">
  <div class="container">
    <div class="text-wrapper text-box">
      <?php the_field('textbox-editor'); ?>

      <?php $linktype = get_field('CTA-button:link-type'); ?>
      <?php if ($linktype == 'url') : ?>
        <?php $url_object = get_field('CTA-button:url'); ?>
        <?php echo acf_relative_path($url_object); ?>
      <?php elseif ($linktype == 'postid') : ?>
        <?php $postid = get_field('CTA-button:postid'); ?>
        <?php echo postid_to_url($postid); ?>
      <?php endif ?>

    </div>
    <div class="image-wrapper">
      <div class="image gradient-border-shadow">
        <?php $hero_image = get_field('image'); ?>
        <?php $size = 'medium'; ?>
        <?php if ($hero_image) : ?>
          <?php echo wp_get_attachment_image($hero_image, $size); ?>
        <?php else : ?>
          <!-- max-width 466px -->
          <img src="<?php echo get_template_directory_uri(); ?>/asset/img/default-sample6000x400-ratio6x4.png" alt="sample photo 6 x 4" sizes="(max-width: 500px) 100vw, 500px" />
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>