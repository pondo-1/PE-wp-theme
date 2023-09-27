<section class="module features bg-black bg-oval oval-var-2">
  <div class="container">
    <?php the_field('textbox'); ?>
    <div class="module__content">
      <?php if (have_rows('features')) : ?>
        <?php while (have_rows('features')) : the_row(); ?>
          <div class="feature">
            <div class="feature__icon">
              <?php $icon = get_sub_field('icon'); ?>
              <?php if ($icon) : ?>
                <?php echo wp_get_attachment_image($icon, 'icon-45'); ?>
              <?php endif; ?>
            </div>
            <div class="feature__content text-box">
              <?php the_sub_field('textbox-editor'); ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <?php // No rows found 
        ?>
      <?php endif; ?>
    </div>
  </div>
</section>