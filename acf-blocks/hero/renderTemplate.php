<section class="module hero">
  <div class="container">
    <div class="content-wrapper text-box">
      <?php the_field('textbox-editor'); ?>
      <?php $cta = get_field('cta'); ?>
      <?php echo acf_relative_path($cta); ?>
    </div>
    <div class="image-wrapper">
      <?php $hero_image = get_field('hero-image'); ?>
      <?php $size = 'medium'; ?>
      <?php if ($hero_image) : ?>
        <?php echo wp_get_attachment_image($hero_image, $size); ?>
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/default-Profil.png" alt="real" sizes="(max-width: 500px) 100vw, 500px">
      <?php endif; ?>
    </div>
  </div>
</section>