<section class="section-bottom fw-medium">
  <div class="section-bottom__wrapper color-white">
      <div class="container-fluid">
        <?php if(!is_page('Page Company')):?>
          <div class="section-bottom__row d-flex">
              <div class="section-bottom__col">
                  <a class="section-bottom__title btn--link ff-second fw-bold mb-0" href="<?= get_bloginfo('url') ?>/company">
                      Company<span class="btn--link__arrow btn--link__arrow--white"><span class="btn--link__arrow-line"></span></span>
                  </a>
              </div>
              <div class="section-bottom__col">
                  <a class="section-bottom__image" href="<?= get_bloginfo('url') ?>/company">
                      <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/business-partner/img-bottom-1.jpg" alt="Laetoli">
                  </a>
              </div>
          </div>
          <?php endif; ?>
          <?php if(is_page('Page Recruit') || is_page('Page Company') || get_post_type() == 'recruit'): ?>
          <div class="section-bottom__row d-flex">
              <div class="section-bottom__col">
                  <a class="section-bottom__title btn--link ff-second fw-bold mb-0" href="<?= get_bloginfo('url') ?>/service">
                      Service<span class="btn--link__arrow btn--link__arrow--white"><span class="btn--link__arrow-line"></span></span>
                  </a>
              </div>
              <div class="section-bottom__col">
                  <a class="section-bottom__image" href="<?= get_bloginfo('url') ?>/service">
                      <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company/img-bottom-1.jpg" alt="Laetoli">
                  </a>
              </div>
          </div>
          <?php endif; ?>
          <?php if(!is_page('Page Recruit') && get_post_type() != 'recruit'):?>
          <div class="section-bottom__row d-flex">
              <div class="section-bottom__col">
                  <a class="section-bottom__title btn--link ff-second fw-bold mb-0" href="<?= get_bloginfo('url') ?>/recruit">
                      Recruit<span class="btn--link__arrow btn--link__arrow--white"><span class="btn--link__arrow-line"></span></span>
                  </a>
              </div>
              <div class="section-bottom__col">
                  <a class="section-bottom__image" href="<?= get_bloginfo('url') ?>/recruit">
                      <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/business-partner/img-bottom-2.jpg" alt="Laetoli">
                  </a>
              </div>
          </div>
          <?php endif; ?>
          <div class="section-bottom__row d-flex">
              <div class="section-bottom__col">
                  <a class="section-bottom__title btn--link ff-second fw-bold mb-0" href="https://laetolicompany.zendesk.com/hc/ja/requests/new" target="_blank">
                      Contact Us<span class="btn--link__arrow btn--link__arrow--white"><span class="btn--link__arrow-line"></span></span>
                  </a>
              </div>
              <div class="section-bottom__col">
                  <a class="section-bottom__image" href="https://laetolicompany.zendesk.com/hc/ja/requests/new" target="_blank">
                      <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/business-partner/img-bottom-3.jpg" alt="Laetoli">
                  </a>
              </div>
          </div>
      </div>
  </div>
</section>