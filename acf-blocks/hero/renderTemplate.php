<section class="module hero">
  <div class="container">
    <div class="content-wrapper text-box">

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
      <?php $hero_image = get_field('hero-image'); ?>
      <?php $size = 'medium'; ?>
      <?php if ($hero_image) : ?>
        <?php echo wp_get_attachment_image($hero_image, $size); ?>
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/default-Profil.png" alt="real" sizes="(max-width: 500px) 100vw, 500px">
      <?php endif; ?>
      <?php $cta_text = get_field('cta_text'); ?>
    </div>
  </div>
</section>