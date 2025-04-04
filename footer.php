<?php

/**
 * The template for displaying the footer
 *
 */
?>
<div id="animation" class="animation">
  <div id="point1" class="point1 point"></div>
  <div id="point2" class="point2 point"></div>
</div>

</main><!-- .site-main -->

<footer class="footer bg-black">
  <div class="container column-2">
    <div class="info left">
      <!-- <div class="company-name info__heading">Page Effekt e. K.</div> -->
      <div class="footer__logo-box">
        <a href="<?= esc_url(home_url('/')); ?>" rel="home" class="center">
          <!-- prettier-ignore -->
          <?php $site_logo = get_field('site_logo', 'option'); ?>
          <?php if ($site_logo) : ?>
            <?php echo wp_get_attachment_image($site_logo); ?>
          <?php else : ?>
            <img width="207" height="48"
              src="<?php echo get_template_directory_uri() ?>/asset/img/Pageeffect_logo.svg"
              class="attachment-thumbnail size-thumbnail" alt="Pageeffect logo" decoding="async">
          <?php endif; ?>
        </a>
      </div>
      <div class="company-detail info__content">
        <p class="owner">Inhaber: Thomas Pondelek</p>
        <p class="email">info@page-effect.com</p>
        <p class="address">Kleinwernfeld 8, 97737 Gemünden, Deutschland</p>
        <p class="register-number">
          Handelsregister: Amstgericht Würzburg HRA 7868
        </p>
        <p class="ust">USt-IdNr: DE282624108</p>
      </div>
    </div>
    <!-- get Menu is defined in  template-parts/nav-functions.php-->
    <div class="navigation right">
      <?php $menu_loc = 'footer' ?>
      <?php if (($locations = get_nav_menu_locations()) && isset($locations[$menu_loc])) : ?>
        <div class="navigation__heading"><?php echo wp_get_nav_menu_name($menu_loc); ?></div>
        <?php getMenu($menu_loc, $depth = 2, $nav_class = 'navigation__content'); ?>
      <?php else : ?>
        <div class="navigation__heading">Menu name</div>
        <nav class="nav header-main-navi">
          <ul class="main-menu">
            <li class="">No Menu for</li>
            <li class="">Footer Postion</li>
            <li class=""><a href="/wp-admin/nav-menus.php" class="menu-link main-menu-link">To setting up</a>
            </li>
          </ul>
        </nav>
      <?php endif ?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>