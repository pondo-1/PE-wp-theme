<?php

/**
 * The template for displaying the footer
 *
 */
?>

</main><!-- .site-main -->

<footer class="footer bg-black">
  <div class="container column-2">
    <div class="info left">
      <div class="company-name info__heading">Page Effekt e. K.</div>
      <div class="company-detail info__content">
        <p class="owner">Inhaber: Thomas Pondelek</p>
        <p class="email">info@page-effekt.de</p>
        <p class="address">Kleinwernfeld 8, 97737 Gemünden, Deutschland</p>
        <p class="register-number">
         Just Testing Handelsregister: Amstgericht Würzburg HRA 7868
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
            <li class=""><a href="/wp-admin/nav-menus.php" class="menu-link main-menu-link">To setting up</a></li>
          </ul>
        </nav>
      <?php endif ?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>