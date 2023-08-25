<header class="header">
  <div class="container">
    <div class="header__logo-box">
      <a href="<?= esc_url(home_url('/')); ?>" rel="home" class="center">
        <?php $site_logo = get_field('site_logo', 'option'); ?>
        <?php if ($site_logo) : ?>
          <?php echo wp_get_attachment_image($site_logo); ?>
        <?php endif; ?>
      </a>
    </div>

    <input class="hamburger__checkbox" type="checkbox" id="header-navi-toggle" />
    <label class="hamburger__button" for="header-navi-toggle">
      <span class="hamburger__icon">&nbsp;</span>
    </label>
    <div class="navigation">
      <div class="navigation__background">&nbsp;</div>
      <?php $menu_name = 'primary' ?>
      <?php if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) : ?>
        <?php getMenu($menu_name, 3, 'header-main-navi'); ?>
      <?php else : ?>
        <nav class="nav header-main-navi">
          <ul class="main-menu">
            <li class="">No Menu for</li>
            <li class="">Header(main) Menu Postion</li>
            <li class=""><a href="/wp-admin/nav-menus.php" class="menu-link main-menu-link">To setting up</a></li>
          </ul>
        </nav>
      <?php endif ?>


    </div>
  </div>
</header>