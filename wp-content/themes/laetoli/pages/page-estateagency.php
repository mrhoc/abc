<?php
/*
Template Name: Page Business Partners
*/
$ogb = array(
  'title' => 'For Business Partners',
  'description' => 'LAETOLIでは不動産特定共同事業法を活用したCOZUCHIを使って、資金調達や、不動産開発、運用などのお手伝いをします。'
);
set_ogb_page($ogb);
?>
<?php get_header(); ?>
<main id="main" class="main page-estateagency bg-gray-light">
  <section class="section-heading section-heading--small position-relative" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/estateagency/img-banner.jpeg">  
    <div class="d-flex align-items-end">
      <div class="section-heading__square bg-gray-light mr-auto"></div>
    </div>
  </section>
  <section class="page-estateagency__section">
    <div class="container-fluid">
      <div class="row row--no-spacing page-estateagency__row">
        <div class="md:col-6 col-12">
          <div class="page-estateagency__wrapper">
            <h1 class="page-estateagency__title ff-second" data-aos="fade-up"><i class="ff-cormorant fw-semibold">For</i><br><span class="fw-bold">Business<br>Partners</span></h1>
            <h3 class="page-estateagency__subtitle fw-medium md:fs-7 fs-4" data-aos="fade-up">COZUCHIを使って、<br>不動産開発・運用などの<br>共同事業を行いませんか？</h3>
            <div class="page-estateagency__content text-justify fw-medium">
              <div class="wrapper-image md:d-none" data-aos="fade-up">
                <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/business-partner/image-1.jpg" alt="Laetoli - For business partners">
              </div>
              <p data-aos="fade-up">LAETOLIでは、不動産特定共同事業法を活用して、資金調達や、不動産開発、運用などのお手伝いをします。</p>
              <p data-aos="fade-up">取得したい不動産や、開発したい不動産があるにもかかわらず、資金調達できずに諦めた。権利関係が複雑な不動産であるために、金融機関からの融資が受けられなかった。そんな不動産業者の声をよく聞きます。</p>
              <div class="row row-image row-image--top md:d-none">
                <div class="col-7">
                  <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/business-partner/image-2.jpg" alt="Laetoli - For business partners" data-aos="fade-up">
                </div>
                <div class="col-5">
                  <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/business-partner/image-3.jpg" alt="Laetoli - For business partners" data-aos="fade-up">
                </div>
              </div>
              <p data-aos="fade-up">LAETOLIでは、クラウドファンディングという手法で資金を調達し、一度、不動産を取得した上で、共同で開発や運用するという新しいスキームで事業を行なっています。不動産物件の価値も、一般的な金融機関とは違う視点で判断します。いわゆる底地や、借地、共有、既存不適格となっている不動産も、開発後の価値を正しく判定することが可能です。</p>
              <p data-aos="fade-up">土地の選定や、開発計画、事業計画に至るまで豊富な経験を持っています。まずは、お気軽にお問い合わせください。</p>
              <div class="row row-image row-image--bottom md:d-none">
                <div class="col-4">
                  <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/business-partner/image-4.jpg" alt="Laetoli - For business partners" data-aos="fade-up">
                </div>
                <div class="col-8 pr-0">
                  <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/business-partner/image-5.jpg" alt="Laetoli - For business partners" data-aos="fade-up">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="md:col-6 col-12 md:d-block d-none">
          <div class="page-estateagency__images row row--no-spacing ml-auto">
            <div class="col-11 col-image text-right ml-auto">
              <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/business-partner/image-1.jpg" alt="Laetoli - For business partners" data-aos="fade-up">
            </div>
            <div class="col-8 col-image">
              <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/business-partner/image-2.jpg" alt="Laetoli - For business partners" data-aos="fade-up">
            </div>
            <div class="col-4 col-image">
              <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/business-partner/image-3.jpg" alt="Laetoli - For business partners" data-aos="fade-up">
              <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/business-partner/image-4.jpg" alt="Laetoli - For business partners" data-aos="fade-up">
            </div>
            <div class="col-8 col-image text-center ml-auto mr-auto">
              <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/business-partner/image-5.jpg" alt="Laetoli - For business partners" data-aos="fade-up">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid text-center" data-aos="fade-up">
      <a class="btn btn--second btn--rounded page-estateagency__btn btn--hover" href="<?= get_bloginfo('url') ?>/service/business-partners/contact">
        <span class="fw-medium m-0 fs-base position-relative">ご相談はこちら</span>
        <span class="btn__icon btn__icon--arrow"></span>
      </a>
    </div>
  </section>

  <!-- Section Bottom -->
  <?php render_partial('template-parts/section-bottom.php') ?>
  <!-- Section Bottom -->
</main>
 
<?php get_footer(); ?>