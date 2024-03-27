<?php
/*
Template Name: Page Recruit Thankyou
*/
?>
<?php get_header(); ?>
<main id='main' class="main single-recruit fw-medium">
  <section class="section-heading position-relative">
    <div class="d-flex align-items-end">
      <h1 class="section-heading__title ff-second fw-medium mb-0">Recruit</h1>
      <div class="section-heading__square bg-gray-lighter"></div>
    </div>
  </section>
  <section class="recruit-thankyou text-center bg-gray-lighter">
    <div class="container">
      <p class="recruit-thankyou__text fw-medium fs-base">ご応募ありがとうございました。</p>
      <a href="<?= get_home_url()?>" class="btn btn--primary btn--rounded btn--hover"><span class="position-relative">トップページへ戻る</span><span class="btn__icon btn__icon--arrow"></span></a>
    </div>
  </section>
</main>
<?php get_footer(); ?>