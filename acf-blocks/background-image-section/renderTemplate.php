<section class="module bg_image hero" style="background-image:url(
  <?php the_post_thumbnail_url(); ?>
)";>
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
            <?php $image_contact = the_sub_field('image-contact'); ?>
            <?php $size = 'medium'; ?>
              <img src="<?php $image_contact; ?>" alt="Foto Kontakt"
                sizes="(max-width: 500px) 100vw, 500px">
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
  </div>

</section>