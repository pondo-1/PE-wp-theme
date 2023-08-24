<section class="module blocks">
  <div class="container">
    <?php the_field('textbox'); ?>
    <div class="module__content">

      <?php if (get_field('blocks_type') == 'term') : ?>
        <!-- term blocks -->
        <?php if (have_rows('term_blocks')) : ?>
          <ul class="elements">
            <?php while (have_rows('term_blocks')) : the_row(); ?>
              <li><?php the_sub_field('term'); ?></li>
            <?php endwhile; ?>
          </ul>
        <?php else : ?>
          <ul class="elements">
            <li>default</li>
            <li>Text</li>
            <li>To</li>
            <li>Test</li>
            <li>Blocks</li>
          </ul>
        <?php endif; ?>
      <?php endif; ?>


      <?php if (get_field('blocks_type') == 'logo') : ?>
        <!-- logo blocks -->
        <?php if (have_rows('logo_blocks')) : ?>
          <ul class="elements">
            <?php while (have_rows('logo_blocks')) : the_row(); ?>
              <?php $logo = get_sub_field('logo'); ?>
              <?php if ($logo) : ?>
                <li>
                  <?php echo wp_get_attachment_image($logo, 'logo-220'); ?>
                </li>
              <?php endif; ?>
            <?php endwhile; ?>
          </ul>
        <?php else : ?>
          <ul class="elements">
            <li><img srcset="" sizes="220px" src="<?php echo get_template_directory_uri(); ?>/asset/img/blocks_logo_dummy_220x40.png" alt="dummy image">
            </li>
            <li><img srcset="" sizes="220px" src="<?php echo get_template_directory_uri(); ?>/asset/img/blocks_logo_dummy_220x40.png" alt="dummy image">
            </li>
            <li><img srcset="" sizes="220px" src="<?php echo get_template_directory_uri(); ?>/asset/img/blocks_logo_dummy_220x40.png" alt="dummy image">
            </li>
            <li><img srcset="" sizes="220px" src="<?php echo get_template_directory_uri(); ?>/asset/img/blocks_logo_dummy_220x40.png" alt="dummy image">
            </li>
            <li><img srcset="" sizes="220px" src="<?php echo get_template_directory_uri(); ?>/asset/img/blocks_logo_dummy_220x40.png" alt="dummy image">
            </li>
          </ul>
        <?php endif; ?>
      <?php endif; ?>

      <?php if (get_field('blocks_type') == 'num-text') : ?>
        <!-- Number & Text blocks -->
        <?php if (have_rows('number_text_blocks')) : ?>
          <ul class="elements num-text">
            <?php while (have_rows('number_text_blocks')) : the_row(); ?>
              <li>
                <div class="number"><?php the_sub_field('number'); ?></div>
                <div class="text"><?php the_sub_field('text'); ?></div>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php else : ?>
          <ul class="elements num-text">
            <li>
              <div class="number">10</div>
              <div class="text">Jahre Berufserfahrung</div>
            </li>
            <li>
              <div class="number">7</div>
              <div class="text">Jahre Berufserfahrung</div>
            </li>
            <li>
              <div class="number">59</div>
              <div class="text">Jahre Berufserfahrung</div>
            </li>
            <li>
              <div class="number">20</div>
              <div class="text">Jahre Berufserfahrung</div>
            </li>
          </ul>
        <?php endif; ?>
      <?php endif; ?>


    </div>
  </div>
</section>