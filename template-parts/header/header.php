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
      <?php getMenu('primary', 3, 'header-main-navi'); ?>
      <!-- <nav class="navigation__nav">
        <ul class="navigation__list">
          <li class="navigation__item">
            <a href="#" class="navigation__link"><span>01</span>About Natous</a>
          </li>
          <li class="navigation__item">
            <a href="#" class="navigation__link"><span>02</span>Your benfits</a>
          </li>
          <li class="navigation__item">
            <a href="#" class="navigation__link"><span>03</span>Popular tours</a>
          </li>
          <li class="navigation__item">
            <a href="#" class="navigation__link"><span>04</span>Stories</a>
          </li>
          <li class="navigation__item">
            <a href="#" class="navigation__link"><span>05</span>Book now</a>
          </li>
        </ul>
      </nav> -->
    </div>
  </div>
</header>