<header class="header">
    <div class="container">


        <input class="hamburger__checkbox" type="checkbox" id="header-navi-toggle" />
        <label class="hamburger__button" for="header-navi-toggle">
            <span class="hamburger__icon">&nbsp;</span>
        </label>
        <div class="header__logo-box">
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
        <div class="navigation">
            <div class="nav_wrapper">
                <div class="navigation__background">&nbsp;</div>
                <?php $menu_name = 'primary' ?>
                <?php if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) : ?>
                <?php getMenu($menu_name, 3, 'header-main-navi'); ?>
                <?php else : ?>
                <nav class="nav header-main-navi">
                    <ul class="main-menu">
                        <li class="">No Menu for</li>
                        <li class="">Header(main) Menu Postion</li>
                        <li class=""><a href="/wp-admin/nav-menus.php" class="menu-link main-menu-link">To setting
                                up</a>
                        </li>
                    </ul>
                </nav>
                <?php endif ?>


            </div>
        </div>
    </div>
</header>