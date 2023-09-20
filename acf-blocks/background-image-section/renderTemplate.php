<section class="module background_image_section">
  <div class="container">
    <div class="content-wrapper text-box">
      <div class="headline">
        <?php the_field('headline'); ?>
      </div>
      <div class="subheadline">
        <?php the_field('subheadline'); ?>
      </div>
      <?php $linktype = get_field('cta'); ?>
      <?php if ($linktype == 'url'): ?>
        <?php $url_object = get_field('cta:url'); ?>
        <?php echo acf_relative_path($url_object); ?>
      <?php elseif ($linktype == 'postid'): ?>
        <?php $postid = get_field('cta:postid'); ?>
        <?php echo postid_to_url($postid); ?>
      <?php endif ?>
    </div>
    <div class="contact">
      <?php if (have_rows('contact')): ?>
        <?php while (have_rows('contact')):
          the_row(); ?>

          <div class="image-wrapper">
            <?php $hero_image = get_field('hero-image'); ?>
            <?php $size = 'medium'; ?>
            <?php if ($hero_image): ?>
              <?php echo wp_get_attachment_image($hero_image, $size); ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/default-Profil.png" alt="real"
                sizes="(max-width: 500px) 100vw, 500px">
            <?php endif; ?>
            <div class="text_wrapper">
              <q class="quote">
                <?php the_sub_field('quote'); ?>
              </q>
              <div class="position">
                <?php the_sub_field('position'); ?>
              </div>
              <div class="email">
                <?php the_sub_field('email'); ?>
              </div>
              <div class="telefon">
                <?php the_sub_field('phone'); ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <?php if (get_field('background_image')): ?>
      <img src="<?php the_field('background_image'); ?>" />
    <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/asset/img/sample-code.png" alt="real"
        sizes="(max-width: 500px) 100vw, 500px">
    <?php endif; ?>
    <div class="long_copy">
      <?php the_field('long_copy'); ?>
    </div>
</section>