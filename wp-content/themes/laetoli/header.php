<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&family=Manrope:wght@400;500;700&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/aos.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/pagenavi-css.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/global.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/custom.css" />

  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.3.6.0.min.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/aos.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/simpleParallax.min.js"></script>


  <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cropped-favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cropped-favicon-192x192.png" sizes="192x192">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cropped-favicon-180x180.png">
  <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cropped-favicon-270x270.png">
  <title>LAETOLI株式会社｜不動産特定共同事業・不動産クラウドファンディングサービス</title>
  <?php wp_head(); ?>
    <style>
        .polylang-flags{
            display: flex;
            align-items: center;
        }
        .polylang-flags li{
            margin-left: 15px;
            list-style-type: none;
            font-size: 12px;
        }
    </style>
</head>
<?php 
  $classSmall = is_front_page() ? ' header--small' : '';
?>
<body>

  <header id="header" class="header <?php if (is_front_page()) : ?> header--animated header--animated-mobile <?php endif; ?><?= $classSmall; ?>">
    <a class="header__toggle ml-auto" id="toggleMenu"><span></span></a>
    <!-- PC -->
    <div class="header__container lg:d-block d-none">
      <div class="header-menu d-flex align-items-center flex-nowrap fw-medium ff-second">
        <a href="<?= get_bloginfo('url') ?>" class="header-menu__logo">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.svg'); ?>" alt="LAETORI">

        </a>
        <div class="header-nav ml-auto d-flex align-items-center">
          <?php if(is_page('Page Company')): ?>
            <div class="header-nav__item header-nav__item--sub">
              <a class="header-nav__link header__underline active"><span>Company</span></a>
              <div class="header-nav__sub">
                <a href="<?= get_bloginfo('url') ?>/company#ceoMessage">CEO Message</a>
                <a href="<?= get_bloginfo('url') ?>/company#boardMember">Board Member</a>
                <a href="<?= get_bloginfo('url') ?>/company#companyProfile">Company Profile</a>
                <a href="<?= get_bloginfo('url') ?>/company#publicNotice">Public Notice</a>
              </div>
            </div>
          <?php else: ?>
            <div class="header-nav__item">
              <a class="header-nav__link header__underline"  href="<?= get_bloginfo('url') ?>/company"><span>Company</span></a>
            </div>
          <?php endif; ?>
          <?php if(is_page('Page Service')): ?>
            <div class="header-nav__item header-nav__item--sub">
              <a class="header-nav__link header__underline active"><span>Service</span></a>
              <div class="header-nav__sub">
                <a href="<?= get_bloginfo('url') ?>/service#COZUCHI">
                  <svg data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170.84 24.78" width="56.8048px" height="8.2384px">
                    <g id="design">
                      <g id="_レイヤー_2" data-name="レイヤー 2">
                        <g id="_レイヤー_3" data-name="レイヤー 3">
                          <path d="M166.7,24.03V.75c0-.11,.09-.19,.19-.19h3.76c.11,0,.19,.09,.19,.19h0V24.03c0,.11-.09,.19-.19,.19h-3.76c-.11,0-.19-.09-.19-.19"/>
                          <path d="M154.68,24.03V14.69c0-.11-.09-.19-.19-.19h-10.34c-.11,0-.19,.09-.19,.19v9.34c0,.11-.09,.19-.19,.19h-3.76c-.11,0-.19-.09-.19-.19V.75c0-.11,.09-.19,.19-.19h3.76c.11,0,.19,.09,.19,.19V10.08c0,.11,.09,.19,.19,.19h10.39c.11,0,.19-.09,.19-.19V.75c-.01-.08,.03-.16,.1-.19h3.77c.11,0,.19,.09,.19,.19V24.03c0,.11-.09,.19-.19,.19h-3.77c-.1,0-.18-.08-.18-.18,0,0,0,0,0-.01"/>
                          <path d="M23.01,16.4c-.76,4.78-5.49,8.37-11.12,8.37C5.2,24.63-.12,19.09,0,12.39-.12,5.69,5.2,.15,11.9,0c3.11-.08,6.12,1.12,8.32,3.32,1.39,1.38,2.36,3.13,2.8,5.04,0,.17-.05,.25-.18,.25h-4.08c-.18,0-.16-.1-.19-.2-.31-.9-.81-1.73-1.47-2.41-1.38-1.38-3.27-2.12-5.22-2.03-2.09,0-4.07,.88-5.46,2.45-1.42,1.66-2.18,3.79-2.14,5.98-.05,2.18,.71,4.31,2.14,5.97,1.39,1.55,3.37,2.45,5.46,2.46h.1c1.52,.02,3.01-.42,4.27-1.27,1.14-.77,1.99-1.9,2.41-3.2,.01-.12,.11-.21,.23-.2h3.83c.14,0,.3,0,.29,.23"/>
                          <path d="M121.73,24.78c-6.7-.15-12.02-5.69-11.88-12.39C109.71,5.69,115.03,.15,121.73,0c3.11-.09,6.13,1.12,8.33,3.32,1.47,1.45,2.45,3.31,2.83,5.34h-4.43c-.28-.98-.8-1.88-1.51-2.62-1.37-1.41-3.26-2.16-5.22-2.08-2.09-.02-4.09,.88-5.47,2.45-1.42,1.66-2.18,3.79-2.14,5.98-.05,2.18,.71,4.31,2.14,5.97,1.39,1.56,3.37,2.45,5.46,2.46h.1c1.52,.02,3.01-.42,4.27-1.27,1.19-.8,2.07-1.99,2.48-3.37h4.27c-.64,4.9-5.43,8.61-11.16,8.61"/>
                          <path d="M41.27,24.78c-6.84,0-12.38-5.55-12.38-12.39,0-3.28,1.31-6.43,3.63-8.75,4.84-4.84,12.68-4.84,17.52,0,4.84,4.84,4.84,12.68,0,17.52h0c-2.32,2.33-5.48,3.64-8.77,3.63m0-20.8c-4.65,0-8.41,3.78-8.4,8.42,0,4.65,3.78,8.41,8.42,8.4,4.64,0,8.4-3.77,8.4-8.41,0-4.65-3.78-8.41-8.42-8.41"/>
                          <path d="M94.18,24.78c-2.63,.04-5.15-1.03-6.95-2.94-1.84-2.07-2.83-4.77-2.75-7.54V.74c0-.1,.08-.18,.18-.18,0,0,0,0,.01,0h3.77c.1,0,.19,.07,.19,.17,0,0,0,0,0,.01V14.19c-.08,1.73,.44,3.43,1.46,4.83,.76,.94,1.83,1.57,3.02,1.76,1.9,.25,3.8-.42,5.13-1.8,1.06-1.38,1.61-3.08,1.55-4.82V.74c0-.1,.08-.18,.18-.18h3.78c.1,0,.18,.08,.18,.18V14.34c0,5.85-4.27,10.43-9.72,10.43"/>
                          <path d="M63.74,20.29l9.78-11.75c.06-.08,.05-.2-.03-.27-.03-.03-.07-.04-.11-.04h-4.46c-.06,0-.11,.03-.14,.07l-10.47,12.42c-.05,.07-.08,.16-.09,.25v3.05c0,.11,.09,.19,.19,.19h19.01c.1,0,.18-.09,.18-.19v-3.2c0-.1-.08-.18-.18-.18h-13.53c-.1,0-.19-.07-.19-.17,0-.05,.02-.1,.05-.14"/>
                          <rect x="58.21" y=".56" width="19.39" height="3.58" rx=".19" ry=".19"/>
                        </g>
                      </g>
                    </g>
                  </svg>
                </a>
              </div>
            </div>
          <?php else: ?>
            <div class="header-nav__item">
              <a class="header-nav__link header__underline"  href="<?= get_bloginfo('url') ?>/service"><span>Service</span></a>
            </div>
          <?php endif; ?>
          <div class="header-nav__item">
            <a class="header-nav__link header__underline <?php if (is_page('Page Sustainability')) : ?> active <?php endif; ?>" href="<?= get_bloginfo('url') ?>/sustainability"><span>Sustainability</span></a>
          </div>
          <div class="header-nav__item">
            <a class="header-nav__link header__underline <?php if (is_page('Page News') || get_post_type() == 'news') : ?> active <?php endif; ?>" href="<?= get_bloginfo('url') ?>/news"><span>News</span></a>
          </div>
          <div class="header-nav__item">
            <a class="header-nav__link header__underline <?php if (is_page('Page Recruit') || get_post_type() == 'recruit') : ?> active <?php endif; ?>" href="<?= get_bloginfo('url') ?>/recruit"><span>Recruit</span></a>
          </div>
          <div class="header-nav__item">
            <a class="header-nav__link header-nav__contact header__contact-box" href="https://laetolicompany.zendesk.com/hc/ja/requests/new" target="_blank">
              Contact Us
            </a>
          </div>
            <?php echo do_shortcode('[POLYLANG]') ?>
        </div>
      </div>
    </div>
    <!-- PC -->

    <!-- SP -->
    <div class="header__container lg:d-none">
      <div class="header-menu d-flex align-items-center flex-nowrap fw-medium ff-second">
        <a href="<?= get_bloginfo('url') ?>" class="header-menu__logo">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.svg'); ?>" alt="LAETORI">
        </a>
        <div class="header-nav ml-auto d-flex align-items-center">
          <div class="header-nav__item">
            <a class="header-nav__link header__underline <?php if (is_page('Page Company')) : ?> active <?php endif; ?>"  href="<?= get_bloginfo('url') ?>/company"><span>Company</span></a>
          </div>
          <div class="header-nav__item">
            <a class="header-nav__link header__underline <?php if (is_page('Page Service')) : ?> active <?php endif; ?>"  href="<?= get_bloginfo('url') ?>/service"><span>Service</span></a>
          </div>
          <div class="header-nav__item">
            <a class="header-nav__link header__underline <?php if (is_page('Page Sustainability')) : ?> active <?php endif; ?>" href="<?= get_bloginfo('url') ?>/sustainability"><span>Sustainability</span></a>
          </div>
          <div class="header-nav__item">
            <a class="header-nav__link header__underline <?php if (is_page('Page News') || get_post_type() == 'news') : ?> active <?php endif; ?>" href="<?= get_bloginfo('url') ?>/news"><span>News</span></a>
          </div>
          <div class="header-nav__item">
            <a class="header-nav__link header__underline <?php if (is_page('Page Recruit') || get_post_type() == 'recruit' || is_page('Page Recruit Thankyou')) : ?> active <?php endif; ?>" href="<?= get_bloginfo('url') ?>/recruit"><span>Recruit</span></a>
          </div>
          <div class="header-nav__item">
            <a class="header-nav__link header-nav__contact header__contact-box" href="https://laetolicompany.zendesk.com/hc/ja/requests/new" target="_blank">
              Contact Us
            </a>
          </div>
        </div>
      </div>
    <!-- SP -->
    </div>
  </header>


  <?php if (is_front_page()) : ?>
    <section class="section-header bg-white">
      <div class="section-header__wrapper">
        <svg class="section-header__img" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1257.86 219.54">
          <g id="header">
            <g>
              <path d="M0,213.47V6.38c0-.86,.69-1.55,1.55-1.55,0,0,.01,0,.02,0H44.44c.86,0,1.55,.69,1.55,1.55V167.78c0,.87,.7,1.57,1.57,1.57h94.92c.87,0,1.57,.7,1.57,1.57v42.62c0,.86-.69,1.55-1.55,1.55,0,0-.01,0-.02,0H1.53c-.86-.01-1.54-.71-1.53-1.57,0-.01,0-.03,0-.04Z" />
              <path d="M327.2,213.94l-10.77-33.65c-.15-.48-.6-.81-1.1-.81h-69.74c-.51,0-.95,.33-1.1,.81l-10.81,33.65c-.2,.65-.81,1.09-1.49,1.08h-45.25c-.87,0-1.56-.72-1.55-1.58,0-.12,.02-.24,.04-.35L245.47,6.01c.18-.67,.8-1.13,1.49-1.12h67.6c.7,0,1.32,.45,1.51,1.12l59.35,207.08c.2,.84-.31,1.69-1.16,1.89-.12,.03-.23,.04-.35,.04h-45.23c-.68,.01-1.29-.43-1.49-1.08Zm-66.58-78.94h39.59c.65,0,1.18-.53,1.18-1.19,0-.12-.02-.23-.05-.34l-19.78-61.64c-.18-.62-.83-.97-1.45-.78-.38,.11-.67,.41-.78,.78l-19.84,61.64c-.19,.62,.16,1.29,.78,1.48,.11,.03,.23,.05,.34,.05Z" />
              <path d="M416.71,213.47V6.09c-.01-.86,.67-1.56,1.53-1.57,0,0,.01,0,.02,0h147.88c.86,0,1.55,.69,1.55,1.55,0,0,0,.01,0,.02V49.24c0,.86-.69,1.56-1.55,1.57h-101.89c-.86,0-1.55,.69-1.55,1.55v32.54c0,.86,.69,1.55,1.55,1.55h73.61c.86,0,1.55,.69,1.55,1.55,0,0,0,.01,0,.02v43.16c.01,.86-.67,1.56-1.53,1.57,0,0-.01,0-.02,0h-73.61c-.86,0-1.55,.69-1.55,1.55,0,0,0,.01,0,.02v32.93c-.01,.86,.67,1.56,1.53,1.57,0,0,.01,0,.02,0h101.89c.86,0,1.55,.69,1.55,1.55,0,0,0,.01,0,.02v43.08c0,.86-.69,1.55-1.55,1.55h-147.88c-.86,0-1.55-.69-1.55-1.55h0Z" />
              <path d="M672.19,213.45V52.67c0-.87-.7-1.57-1.57-1.57h-57.34c-.87,0-1.57-.7-1.57-1.57V6.4c0-.87,.7-1.57,1.57-1.57h163.49c.87,0,1.57,.7,1.57,1.57V49.54c0,.87-.7,1.57-1.57,1.57h-57.03c-.87,0-1.57,.7-1.57,1.57V213.45c0,.87-.7,1.57-1.57,1.57h-42.85c-.87,0-1.57-.7-1.57-1.57Z" />
              <path d="M897.69,219.54c-11.19,.12-22.29-1.99-32.66-6.2-10.24-4.33-19.51-10.67-27.25-18.65-16.12-15.77-25.02-37.5-24.6-60.05v-49.8c-.11-11.2,1.99-22.32,6.2-32.7,4.34-10.28,10.69-19.59,18.67-27.39,7.82-7.92,17.11-14.23,27.35-18.58C875.65,2,886.63-.09,897.69,0c11.2-.1,22.31,2,32.7,6.2,10.28,4.35,19.59,10.7,27.39,18.67,7.93,7.84,14.23,17.16,18.56,27.43,4.18,10.33,6.28,21.38,6.18,32.52v49.88c.1,11.21-2,22.33-6.2,32.72-13.05,31.84-44.22,52.5-78.63,52.11Zm-1.51-173.84c-10.12-.15-19.87,3.84-26.98,11.04-7.32,7.01-11.39,16.75-11.24,26.89v50.48c-.15,10.14,3.92,19.89,11.24,26.91,7.12,7.19,16.86,11.18,26.98,11.04,20.89,.06,37.88-16.82,37.95-37.71,0-.08,0-.16,0-.23v-50.48c.08-20.87-16.78-37.85-37.66-37.93-.1,0-.19,0-.29,0Z" />
              <path d="M1026.53,213.47V6.38c0-.86,.69-1.55,1.55-1.55,0,0,.01,0,.02,0h42.87c.86,0,1.55,.69,1.55,1.55h0V167.78c0,.87,.7,1.57,1.57,1.57h94.92c.87,0,1.57,.7,1.57,1.57v42.62c0,.86-.69,1.55-1.55,1.55,0,0-.01,0-.02,0h-140.94c-.86-.01-1.54-.71-1.53-1.57,0-.01,0-.03,0-.04Z" />
              <rect x="1211.87" y="4.83" width="45.99" height="210.21" rx="1.57" ry="1.57" />
            </g>
          </g>
        </svg>
      </div>
    </section>
  <?php endif; ?>