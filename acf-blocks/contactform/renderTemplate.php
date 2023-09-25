
<section class="module contactform">
  <div class="container column-3">
    <div class="column-3-1 text-box">
      <?php the_field('textbox-editor'); ?>
    </div>
    <div class="column-3-2 contactform-wrapper">
		<?php gravity_form('Page Effect Contact Form', false, false, true, false, true, '', true ); ?>
    </div>
  </div>
</section>