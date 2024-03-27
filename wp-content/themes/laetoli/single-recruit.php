<?php
$ogb = array(
  'title' => get_the_title().' | Recruit',
  'description' => 'COZUCHIを運営するLAETOLI株式会社の採用情報ページです。「不動産」「建築」を中心として「フェアエコノミー」を構築することをミッションに掲げる当社では、様々な人材を募集しています。'
);
set_ogb_page($ogb);
?>
<?php get_header(); ?>

<main id="main" class="main single-recruit" data-redirect="<?= get_home_url()?>">
  <section class="section-heading position-relative">
    <div class="d-flex align-items-end">
      <h1 class="section-heading__title ff-second fw-medium mb-0">Recruit</h1>
      <div class="section-heading__square bg-gray-lighter"></div>
    </div>
  </section>
  <section class="single-recruit__wrapper bg-gray-lighter">
    <div class="container">
      <h2 class="single-recruit__title md:fs-4 fw-bold md:text-left text-center mb-0" data-title="<?php the_title(); ?>"><?php the_title(); ?></h2>
      <div class="recruit-requirement">
        <p class="recruit-requirement__title fw-bold fs-base md:text-left text-center">募集要項</p>
        <div class="recruit-requirement__list bg-white md:fs-3">
          <?php
            $default_fields = get_field('recruit_default_fields');
            if(have_rows('recruit_default_fields') ):
              foreach( $default_fields as $key => $value ): 
                $default_item = $default_fields[$key];
          ?>
          <?php if($default_item): ?>
            <div class="recruit-requirement__item d-flex flex-wrap">
              <p class="recruit-requirement__label mb-0 fw-bold"><?= get_sub_field_object($key)['label']; ?></p>
              <div class="recruit-requirement__content">
                <pre class="m-0 fw-regular text-justify">
                  <?= $default_item; ?>
                </pre>
              </div>
            </div>
          <?php endif; ?>
          <?php 
            endforeach;
            endif;
          ?>
          <?php
            $custom_fields = get_field('recruit_custom_fields');
            if($custom_fields):
              foreach($custom_fields as $key => $value ): 
                $custom_item = $custom_fields[$key];
          ?>
          <?php if($custom_item['recruit_custom_item_content'] && $custom_item['recruit_custom_item_label']): ?>
            <div class="recruit-requirement__item d-flex flex-wrap">
              <p class="recruit-requirement__label mb-0 fw-bold"><?= $custom_item['recruit_custom_item_label']; ?></p>
              <div class="recruit-requirement__content">
                <pre class="m-0 fw-regular text-justify">
                  <?= $custom_item['recruit_custom_item_content']; ?>
                </pre>
              </div>
            </div>
          <?php endif; ?>
          <?php 
            endforeach;
            endif;
          ?>
        </div>
      </div>

      <div class="recruit-register">
        <p class="recruit-register__title fw-bold fs-base md:text-left text-center">応募フォーム</p>
        <p class="recruit-register__description md:fs-3 text-justify">
          下記フォームより必要事項をご記入・ご選択の上、 お問い合わせください。担当より改めてご連絡させていただきます。<br>
          <span class="color-red fs-1 pr-1">●</span>は必須項目です。
        </p>

        <div class="recruit-register__form form-contact bg-gray-light">
          <?= do_shortcode('[contact-form-7 title="Application Form"]'); ?>
        </div>
      </div>
    </div>
  </section>


  <!-- Section Bottom -->
  <?php render_partial('template-parts/section-bottom.php') ?>
  <!-- Section Bottom -->

  <!-- Modal Privacy Policy -->
  <?php render_partial('template-parts/modal-privacy-policy.php') ?>
  <!-- Modal Privacy Policy -->
</main>
<?php get_footer(); ?>
