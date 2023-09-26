<section class="module bg_image_hero" style="background-image:url(
  <?php the_post_thumbnail_url(); ?>
)">
  <div class="container">
    <div class="content-wrapper text-box">
      <div class="textbox-editor">
        <?php the_field('textbox-editor'); ?>
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

          <div class="image-wrapper contact-img-bg">
          <?php $image_contact = get_sub_field('contact-image'); ?>
            <?php $size = 'medium'; ?>
            <?php echo wp_get_attachment_image( $image_contact, $size); ?>
            </div>
            <div class="text_wrapper">
              <q class="quote">
                <?php the_sub_field('quote'); ?>
              </q>
              <div class="position_and_name">
                <?php the_sub_field('position_and_name'); ?>            
              </div>
              <div class="email"><span>Email: </span><a href="mailto:
                <?php the_sub_field('email'); ?>
                ">
              <?php the_sub_field('email'); ?>
              </a>
              </div>
              <div class="phone"><span>Tel: </span>
                <?php the_sub_field('phone'); ?>            
              </div>
            </div>
          
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

</section>