<?php


/**
 * 
 * This Template is used when no blocks are set up by the users
 * The template for displaying start page
 *
 * This is the template that displays start page as defalut.
 *
 */
// get_header();
// the_content();
// get_footer();
?>
<?php get_header(); ?>
<main>
  <section class="module hero">
    <div class="container">
      <div class="content-wrapper text-box">
        <h1 class="module__heading">Hi, This is default home page, in home.php<br>
          <strong>SEO – Besucheranalyse Zielgruppenfokus</strong>
        </h1>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing dolorem sitear elitr, sed diam nonumy! Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
        <a href="/sample-page/" class="btn btn--empty" target="_blank" rel="noopener noreferrer">Sample Page</a>
      </div>
      <div class="image-wrapper">
        <img loading="lazy" width="500" height="537" src="<?php echo get_template_directory_uri() ?>/asset/img/default-Profil.png" class="attachment-medium size-medium" alt="" decoding="async" sizes="(width: 500px) 100vw, 500px">
      </div>
    </div>
  </section>

  <section class="module image-text image-first bg-none">
    <div class="container">
      <div class="text-wrapper text-box">
        <h2 class="module__heading">Kein Blabla, sondern<br>
          <strong>echte Webkompetenz</strong>
        </h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing dolorem sitear elitr, sed diam nonumy! Lorem ipsum dolor sit amet, consetetur sadipscing elitr. Lorem ipsum dolor sit amet, consetetur sadipscing dolorem sitear elitr, sed diam nonumy!</p>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing dolorem sitear elitr, sed diam nonumy! Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
        <a href="/sample-page/" class="btn btn--empty" target="_blank" rel="noopener noreferrer">Sample Page</a>
      </div>
      <div class="image-wrapper">
        <div class="image gradient-border-shadow">
          <img loading="lazy" width="500" height="334" sizes="(max-width: 500px) 100vw, 500px">
        </div>
      </div>
    </div>
  </section>

  <section class="module features bg-black">
    <div class="container">
      <h2 class="module__heading">Unsere<br><strong>Leistungen</strong> </h2>
      <div class="module__content">
        <div class="feature">
          <div class="feature__icon">
            <img loading="lazy" width="45" height="45" src="<?php echo get_template_directory_uri() ?>/asset/icons/wp.svg" class="attachment-icon-45 size-icon-45" alt="" decoding="async">
          </div>
          <div class="feature__content text-box">
            <h4 class="heading">WordPress &amp; WooCommerce Entwicklung</h4>
            <p>
              ins, Debugging, Pagespeed Optimierung, REST API</p>
          </div>
        </div>
        <div class="feature">
          <div class="feature__icon">
            <img loading="lazy" width="56" height="63" src="<?php echo get_template_directory_uri() ?>/asset/icons/square.svg" class="attachment-icon-45 size-icon-45" alt="" decoding="async">
          </div>
          <div class="feature__content text-box">
            <h4 class="heading">WordPress &amp; WooCommerce Entwicklung</h4>
            <p>
              ins, Debugging, Pagespeed Optimierung, REST API</p>
          </div>
        </div>
        <div class="feature">
          <div class="feature__icon">
            <img loading="lazy" width="45" height="45" src="<?php echo get_template_directory_uri() ?>/asset/icons/leaflet.svg" class="attachment-icon-45 size-icon-45" alt="" decoding="async">
          </div>
          <div class="feature__content text-box">
            <h4 class="heading">WordPress &amp; WooCommerce Entwicklung</h4>
            <p>
              Lorem Ipsum dolor sit amet consecetur ullam nusplat dolorem illam.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="module blocks">
    <div class="container">
      <h2 class="module__heading"> Wir setzen folgende <strong>Technologien</strong> ein</h2>
      <div class="module__content">

        <!-- term blocks -->
        <ul class="elements">
          <li>CSS</li>
          <li>HTMl</li>
          <li>WordPress</li>
          <li>Javascript</li>
          <li>Google Analytics</li>
        </ul>





      </div>
    </div>
  </section>

  <section class="module text-features">
    <div class="container column-3">
      <div class="column-3-1 text-box">
        <div class="module__heading">Sed diam nonumy estis eirmod et quo<strong> Kundennutzen</strong></div>
        <div class="module__textbox">
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing dolorem sitear elitr, sed diam nonumy! Lorem ipsum dolor sit amet, consetetur<br>
            sadipscing elitr. Lorem ipsum dolor sit amet, consetetur sadipscing dolorem sitear elitr, sed diam nonumy! Lorem ipsum<br>
            dolor sit amet, consetetur sadipscing elitr.</p>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing dolorem sitear elitr, sed diam nonumy! Lorem ipsum dolor sit amet, consetetur<br>
            sadipscing elitr.</p>
        </div>
      </div>
      <div class="column-3-2">
        <div class="feature">
          <div class="feature__icon">
            <img loading="lazy" width="50" height="50" src="<?php echo get_template_directory_uri() ?>/asset/img/nutzung-1.svg" class="attachment-icon-45 size-icon-45" alt="" decoding="async">
          </div>
          <div class="feature__content">
            <h4 class="heading">WordPress &amp; WooCommerce Entwicklung</h4>
            <p class="text">
              ins, Debugging, Pagespeed Optimierung, REST API
            </p>
          </div>
        </div>
        <div class="feature">
          <div class="feature__icon">
            <img loading="lazy" width="50" height="44" src="<?php echo get_template_directory_uri() ?>/asset/img/nutzung-2.svg" class="attachment-icon-45 size-icon-45" alt="" decoding="async">
          </div>
          <div class="feature__content">
            <h4 class="heading">WordPress &amp; WooCommerce Entwicklung</h4>
            <p class="text">
              ins, Debugging, Pagespeed Optimierung, REST API
            </p>
          </div>
        </div>
        <div class="feature">
          <div class="feature__icon">
            <img loading="lazy" width="39" height="51" src="<?php echo get_template_directory_uri() ?>/asset/img/nutzung-3.svg" class="attachment-icon-45 size-icon-45" alt="" decoding="async">
          </div>
          <div class="feature__content">
            <h4 class="heading">WordPress &amp; WooCommerce entwicklung</h4>
            <p class="text">
              ins, Debugging, Pagespeed Optimierung, REST API
            </p>
          </div>
        </div>
        <div class="feature">
          <div class="feature__icon">
            <img loading="lazy" width="50" height="41" src="<?php echo get_template_directory_uri() ?>/asset/img/nutzung-4.svg" class="attachment-icon-45 size-icon-45" alt="" decoding="async">
          </div>
          <div class="feature__content">
            <h4 class="heading">WordPress &amp; WooCommerce Entwicklung</h4>
            <p class="text">
              ins, Debugging, Pagespeed Optimierung, REST API
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="module project-slider">
    <div class="container">
      <h2 class="module__heading">Kundenprojekte</h2>
      <div class="swiper swiperCarousel swiper-initialized swiper-horizontal swiper-backface-hidden">
        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-715.5px, 0px, 0px); transition-delay: 0ms;" id="swiper-wrapper-feccc97e210e979bf" aria-live="polite">
          <div class="swiper-slide" style="margin-right: 24px;" role="group" aria-label="1 / 6" data-swiper-slide-index="0">
            <div class="slide">
              <div class="slide__title">1. page-effect.com</div>
              <div class="slide__text">web hosting</div>
              <div class="slide__image">
                <img loading="lazy" width="768" height="512" src="http://localhost:10004/wp-content/uploads/2023/08/hero-resp-768x512.jpg" sizes="(max-width: 768px) 100vw, 768px">
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-prev" style="margin-right: 24px;" role="group" aria-label="2 / 6" data-swiper-slide-index="1">
            <div class="slide">
              <div class="slide__title">2. page-effect.com</div>
              <div class="slide__text">web hosting</div>
              <div class="slide__image">
                <img loading="lazy" width="768" height="430" src="http://localhost:10004/wp-content/uploads/2023/08/project-1-768x430.png" class="attachment-medium_large size-medium_large" alt="" decoding="async" srcset="http://localhost:10004/wp-content/uploads/2023/08/project-1-768x430.png 768w, http://localhost:10004/wp-content/uploads/2023/08/project-1-500x280.png 500w, http://localhost:10004/wp-content/uploads/2023/08/project-1-1204x674.png 1204w, http://localhost:10004/wp-content/uploads/2023/08/project-1-1536x860.png 1536w, http://localhost:10004/wp-content/uploads/2023/08/project-1-45x25.png 45w, http://localhost:10004/wp-content/uploads/2023/08/project-1-71x40.png 71w, http://localhost:10004/wp-content/uploads/2023/08/project-1.png 1896w" sizes="(max-width: 768px) 100vw, 768px">
              </div>
            </div>
          </div>
          <div class="swiper-slide swiper-slide-active" style="margin-right: 24px;" role="group" aria-label="3 / 6" data-swiper-slide-index="2">
            <div class="slide">
              <div class="slide__title">3. page-effect.com</div>
              <div class="slide__text">web hosting</div>
              <div class="slide__image">
                <img loading="lazy" width="768" height="432" src="http://localhost:10004/wp-content/uploads/2023/08/dummy_1600x900_ffffff_cccccc-768x432.png" class="attachment-medium_large size-medium_large" alt="" decoding="async" srcset="http://localhost:10004/wp-content/uploads/2023/08/dummy_1600x900_ffffff_cccccc-768x432.png 768w, http://localhost:10004/wp-content/uploads/2023/08/dummy_1600x900_ffffff_cccccc-500x281.png 500w, http://localhost:10004/wp-content/uploads/2023/08/dummy_1600x900_ffffff_cccccc-1204x677.png 1204w, http://localhost:10004/wp-content/uploads/2023/08/dummy_1600x900_ffffff_cccccc-1536x864.png 1536w, http://localhost:10004/wp-content/uploads/2023/08/dummy_1600x900_ffffff_cccccc-45x25.png 45w, http://localhost:10004/wp-content/uploads/2023/08/dummy_1600x900_ffffff_cccccc-71x40.png 71w, http://localhost:10004/wp-content/uploads/2023/08/dummy_1600x900_ffffff_cccccc.png 1600w" sizes="(max-width: 768px) 100vw, 768px">
              </div>
            </div>
          </div>



          <div class="swiper-slide swiper-slide-next" style="margin-right: 24px;" role="group" aria-label="4 / 6" data-swiper-slide-index="3">
            <div class="slide">
              <div class="slide__title">4. page-effect.com</div>
              <div class="slide__text">web hosting</div>
              <div class="slide__image">
                <img loading="lazy" width="650" src="http://localhost:10004/wp-content/themes/PE-wp-theme/asset/img/dummy_650x365_ffffff_cccccc_16x9.png" class="dummy-image-16x9" alt="dummy image 16x9" decoding="async" srcset="">
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="margin-right: 24px;" role="group" aria-label="5 / 6" data-swiper-slide-index="4">
            <div class="slide">
              <div class="slide__title">page-effect.com</div>
              <div class="slide__text">web hosting</div>
              <div class="slide__image">
                <img loading="lazy" width="650" src="http://localhost:10004/wp-content/themes/PE-wp-theme/asset/img/dummy_650x365_ffffff_cccccc_16x9.png" class="dummy-image-16x9" alt="dummy image 16x9" decoding="async" srcset="">
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="margin-right: 24px;" role="group" aria-label="6 / 6" data-swiper-slide-index="5">
            <div class="slide">
              <div class="slide__title">page-effect.com</div>
              <div class="slide__text">web hosting</div>
              <div class="slide__image">
                <img loading="lazy" width="650" src="http://localhost:10004/wp-content/themes/PE-wp-theme/asset/img/dummy_650x365_ffffff_cccccc_16x9.png" class="dummy-image-16x9" alt="dummy image 16x9" decoding="async" srcset="">
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-feccc97e210e979bf"></div>
        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-feccc97e210e979bf"></div>
        <div class="swiper-pagination swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" aria-current="true"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>
    </div>
  </section>

  <section class="module blocks">
    <div class="container">
      <h2 class="module__heading"> Wir setzen folgende <strong>Technologien</strong> ein</h2>
      <div class="module__content">



        <!-- logo blocks -->
        <ul class="elements">
          <li>
            <img loading="lazy" width="142" height="40" src="http://localhost:10004/wp-content/uploads/2023/08/partner-4-142x40.png" class="attachment-logo-220 size-logo-220" alt="" decoding="async" srcset="http://localhost:10004/wp-content/uploads/2023/08/partner-4-142x40.png 142w, http://localhost:10004/wp-content/uploads/2023/08/partner-4-45x13.png 45w, http://localhost:10004/wp-content/uploads/2023/08/partner-4.png 419w" sizes="(max-width: 142px) 100vw, 142px">
          </li>
          <li>
            <img loading="lazy" width="220" height="40" src="http://localhost:10004/wp-content/uploads/2023/08/partner-3-220x40.png" class="attachment-logo-220 size-logo-220" alt="" decoding="async" srcset="http://localhost:10004/wp-content/uploads/2023/08/partner-3-220x40.png 220w, http://localhost:10004/wp-content/uploads/2023/08/partner-3-500x91.png 500w, http://localhost:10004/wp-content/uploads/2023/08/partner-3-1204x218.png 1204w, http://localhost:10004/wp-content/uploads/2023/08/partner-3-768x139.png 768w, http://localhost:10004/wp-content/uploads/2023/08/partner-3-45x8.png 45w, http://localhost:10004/wp-content/uploads/2023/08/partner-3.png 1478w" sizes="(max-width: 220px) 100vw, 220px">
          </li>
          <li>
            <img loading="lazy" width="180" height="40" src="http://localhost:10004/wp-content/uploads/2023/08/partner-2-180x40.png" class="attachment-logo-220 size-logo-220" alt="" decoding="async" srcset="http://localhost:10004/wp-content/uploads/2023/08/partner-2-180x40.png 180w, http://localhost:10004/wp-content/uploads/2023/08/partner-2-500x111.png 500w, http://localhost:10004/wp-content/uploads/2023/08/partner-2-1204x267.png 1204w, http://localhost:10004/wp-content/uploads/2023/08/partner-2-768x170.png 768w, http://localhost:10004/wp-content/uploads/2023/08/partner-2-1536x341.png 1536w, http://localhost:10004/wp-content/uploads/2023/08/partner-2-45x10.png 45w, http://localhost:10004/wp-content/uploads/2023/08/partner-2.png 1917w" sizes="(max-width: 180px) 100vw, 180px">
          </li>
          <li>
            <img loading="lazy" width="98" height="40" src="http://localhost:10004/wp-content/uploads/2023/08/partner-1-98x40.png" class="attachment-logo-220 size-logo-220" alt="" decoding="async" srcset="http://localhost:10004/wp-content/uploads/2023/08/partner-1-98x40.png 98w, http://localhost:10004/wp-content/uploads/2023/08/partner-1-45x18.png 45w, http://localhost:10004/wp-content/uploads/2023/08/partner-1.png 440w" sizes="(max-width: 98px) 100vw, 98px">
          </li>
          <li>
            <img loading="lazy" width="172" height="40" src="http://localhost:10004/wp-content/uploads/2023/08/partner-5-172x40.png" class="attachment-logo-220 size-logo-220" alt="" decoding="async" srcset="http://localhost:10004/wp-content/uploads/2023/08/partner-5-172x40.png 172w, http://localhost:10004/wp-content/uploads/2023/08/partner-5-45x10.png 45w, http://localhost:10004/wp-content/uploads/2023/08/partner-5.png 387w" sizes="(max-width: 172px) 100vw, 172px">
          </li>
        </ul>



      </div>
    </div>
  </section>

  <section class="module image-text text-first bg-black">
    <div class="container">
      <div class="text-wrapper text-box">
        <h2 class="module__heading">Kein Blabla, sondern<br>
          <strong>echte Webkompetenz</strong>
        </h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing dolorem sitear elitr, sed diam nonumy! Lorem ipsum dolor sit amet, consetetur sadipscing elitr. Lorem ipsum dolor sit amet, consetetur sadipscing dolorem sitear elitr, sed diam nonumy!</p>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing dolorem sitear elitr, sed diam nonumy! Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
        <a href="/sample-page/" class="btn btn--empty" target="_blank" rel="noopener noreferrer">Sample Page</a>
      </div>
      <div class="image-wrapper">
        <div class="image gradient-border-shadow">
          <img loading="lazy" width="500" height="334" src="http://localhost:10004/wp-content/uploads/2023/08/hero-resp-500x334.jpg" class="attachment-medium size-medium" alt="" decoding="async" srcset="http://localhost:10004/wp-content/uploads/2023/08/hero-resp-500x334.jpg 500w, http://localhost:10004/wp-content/uploads/2023/08/hero-resp-1204x803.jpg 1204w, http://localhost:10004/wp-content/uploads/2023/08/hero-resp-768x512.jpg 768w, http://localhost:10004/wp-content/uploads/2023/08/hero-resp-1536x1025.jpg 1536w, http://localhost:10004/wp-content/uploads/2023/08/hero-resp-45x30.jpg 45w, http://localhost:10004/wp-content/uploads/2023/08/hero-resp-60x40.jpg 60w, http://localhost:10004/wp-content/uploads/2023/08/hero-resp.jpg 1920w" sizes="(max-width: 500px) 100vw, 500px">
        </div>
      </div>
    </div>
  </section>

  <section class="module blocks">
    <div class="container">
      <h2 class="module__heading"> Wir setzen folgende <strong>Technologien</strong> ein</h2>
      <div class="module__content">




        <!-- Number & Text blocks -->
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


      </div>
    </div>
  </section>

</main>

<footer class="footer bg-black">
  <div class="container column-2">
    <div class="info left">
      <div class="company-name info__heading">Page Effekt e. K.</div>
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
    <div class="navigation right">
      <div class="navigation__heading">Site map</div>
      <nav class="navigation__content navigation__nav">
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
      </nav>
    </div>
  </div>
</footer>
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/textfit/2.4.0/textFit.min.js"></script> -->
<!-- <script src="./node_modules/swiper/swiper-bundle.js"></script> -->
<!-- <script src="./index.js"></script> -->
</body>

</html>