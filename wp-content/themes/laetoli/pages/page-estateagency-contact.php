<?php
/*
Template Name: Page Business Partners Contact
*/
$ogb = array(
  'title' => '無料ご相談 | For Business Partners',
  'description' => 'LAETOLIでは不動産特定共同事業法を活用したCOZUCHIを使って、資金調達や、不動産開発、運用などのお手伝いをします。'
);
set_ogb_page($ogb);
?>
<?php get_header(); ?>
<main id="main" class="main estateagency-contact">
  <section class="section-heading position-relative">
    <div class="d-flex align-items-end">
      <h1 class="section-heading__title ff-second fw-medium mb-0">Free Consultation</h1>
      <div class="section-heading__square bg-gray-lighter"></div>
    </div>
  </section>

  <section class="estateagency-contact__section bg-gray-lighter md:fs-3">
    <div class="container">
      <h2 class="estateagency-contact__subtitle md:fs-4 fw-bold md:text-left text-center" data-aos="fade-up">無料ご相談はこちら</h2>
      <p class="estateagency-contact__description md:fs-3 text-justify" data-aos="fade-up">
      下記フォームより必要事項をご記入・ご選択の上、 お問い合わせください。担当より改めてご連絡させていただきます。<br>
        <span class="color-red fs-1 pr-1">●</span>は必須項目です。
      </p>
      <div class="estateagency-contact__form form-contact bg-gray-light" data-aos="fade-up">
        <?= do_shortcode('[contact-form-7 title="Free Consultation"]'); ?>
      </div>
    </div>
  </section>

  <!-- Modal Privacy Policy -->
  <?php render_partial('template-parts/modal-privacy-policy.php') ?>
  <!-- Modal Privacy Policy -->
</main>
<?php get_footer(); ?>