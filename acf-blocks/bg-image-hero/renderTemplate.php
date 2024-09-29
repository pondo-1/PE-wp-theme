<section class="module bg_image_hero" style="background-image:url(
  <?php $backgroundimage = get_field('backgroundimage'); ?>
  <?php if ($backgroundimage): ?>
  <?php echo esc_url($backgroundimage['url']); ?>" alt="<?php echo esc_attr($backgroundimage['alt']); ?>
  <?php endif; ?>
)">
  
  
  </div>
  <div class="container">
    <div class="content-wrapper text-box">
      <div class="textbox-editor">
        <?php the_field('textbox-editor'); ?>
        <?php $linktype = get_field('CTA-button:link-type'); ?>

        <?php if ($linktype == 'url'): ?>
          <?php $url_object = get_field('CTA-button:url'); ?>
          <?php echo acf_relative_path($url_object); ?>
        <?php elseif ($linktype == 'postid'): ?>
          <?php $postid = get_field('CTA-button:postid'); ?>
          <?php echo postid_to_url($postid); ?>
        <?php endif ?>


      </div>
    </div>
    <div class="contact">
      <div class="image-wrapper contact-img-bg">
        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/default-Profil.png" alt="real"
          sizes="(max-width: 500px) 100vw, 500px">
      </div>
      <div class="text_wrapper">
        <q class="quote">
          <?php if (have_rows('contact')): ?>
            <?php while (have_rows('contact')):
              the_row(); ?>
              <?php the_sub_field('quote'); ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </q>
        <div class="position_and_name">
          <span>Inhaber: </span>Thomas Pondelek
        </div>
        <div class="email"><span>Email: </span><a href="mailto:info@page-effect.com">
            info@page-effect.com
          </a>
        </div>
        <div class="phone"><span>Tel: </span>
          09351 9599991
        </div>
      </div>
    </div>
  </div>

</section>