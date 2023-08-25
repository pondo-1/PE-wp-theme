<section class="module project-slider">
  <div class="container">
    <?php the_field('textbox'); ?>
    <div class="swiper swiperCarousel">
      <div class="swiper-wrapper">
        <?php if (have_rows('slide')) : ?>
          <?php while (have_rows('slide')) : the_row(); ?>
            <div class="swiper-slide">
              <div class="slide">
                <?php $group = get_sub_field('group'); ?>
                <div class="slide__title"><?php echo isset($group['title']) ? $group['title'] : ''; ?></div>
                <div class="slide__text"><?php echo isset($group['text']) ? $group['text'] : ''; ?></div>
                <div class="slide__image">
                  <?php $image = get_sub_field('image'); ?>
                  <?php if ($image) : ?>
                    <?php echo wp_get_attachment_image($image, 'medium_large'); ?>
                  <?php else : ?>
                    <img loading="lazy" width="650" src="<?php echo get_template_directory_uri(); ?>/asset/img/dummy_650x365_ffffff_cccccc_16x9.png" class="dummy-image-16x9" alt="dummy image 16x9" decoding="async" srcset="">
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>