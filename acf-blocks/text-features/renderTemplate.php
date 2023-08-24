<section class="module text-features">
  <div class="container column-3">
    <div class="column-3-1 text-box">
      <?php the_field('textbox-editor'); ?>
    </div>
    <div class="column-3-2">
      <?php if (have_rows('features')) : ?>
        <?php while (have_rows('features')) : the_row(); ?>
          <div class="feature">
            <?php $icon = get_sub_field('icon'); ?>
            <?php if ($icon) : ?>
              <div class="feature__icon">
                <?php echo wp_get_attachment_image($icon, 'icon-45'); ?>
              </div>
            <?php endif; ?>
            <div class="feature__content">
              <?php the_sub_field('text'); ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <div class="feature">
          <div class="feature__icon">
            <img srcset="
                    <?php echo get_template_directory_uri(); ?>/asset/img/nutzung-1.svg 480w,
                    <?php echo get_template_directory_uri(); ?>/asset/img/nutzung-1.svg 800w
                  " sizes="45px" src="<?php echo get_template_directory_uri(); ?>/asset/img/nutzung-1.svg" alt="Elva dressed as a fairy" />
          </div>
          <div class="feature__content">
            <h4 class="heading">Wordpress & WooCommerce Entwicklung</h4>
            <p class="text">
              ins, Debugging, Pagespeed Optimierung, REST API
            </p>
          </div>
        </div>
        <div class="feature">
          <div class="feature__icon">
            <img srcset="
                    <?php echo get_template_directory_uri(); ?>/asset/img/nutzung-2.svg 480w,
                    <?php echo get_template_directory_uri(); ?>/asset/img/nutzung-2.svg 800w
                  " sizes="45px" src="<?php echo get_template_directory_uri(); ?>/asset/img/nutzung-2.svg" alt="Elva dressed as a fairy" />
          </div>
          <div class="feature__content">
            <h4 class="heading">Wordpress & WooCommerce Entwicklung</h4>
            <p class="text">
              ins, Debugging, Pagespeed Optimierung, REST API
            </p>
          </div>
        </div>
        <div class="feature">
          <div class="feature__icon">
            <img srcset="
                    <?php echo get_template_directory_uri(); ?>/asset/img/nutzung-3.svg 480w,
                    <?php echo get_template_directory_uri(); ?>/asset/img/nutzung-3.svg 800w
                  " sizes="45px" src="<?php echo get_template_directory_uri(); ?>/asset/img/nutzung-3.svg" alt="Elva dressed as a fairy" />
          </div>
          <div class="feature__content">
            <h4 class="heading">Gründliche Planung</h4>
            <p class="text">
              Webentwicklung & Online Marketing werden zusammen gedacht &
              gemeinsam realisiert
            </p>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>