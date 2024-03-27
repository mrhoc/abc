<?php
/*
Template Name: Page Recruit
*/
$ogb = array(
  'image' => get_stylesheet_directory_uri().'/assets/images/221208_LAETOLI_OGP_thumbnail_Recruit.jpeg',
  'title' => 'Recruit',
  'description' => 'COZUCHIを運営するLAETOLI株式会社の採用情報ページです。「不動産」「建築」を中心として「フェアエコノミー」を構築することをミッションに掲げる当社では、様々な人材を募集しています。'
);
set_ogb_page($ogb);
?>
<?php get_header(); ?>
<main id='main' class="main page-recruit fw-medium bg-gray-lighter">
  <section class="section-heading section-heading--small position-relative" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/bg-banner.jpeg)">  
    <div class="d-flex align-items-end">
      <h1 class="section-heading__title ff-second fw-bold mb-0 color-white">Recruit</h1>
      <div class="section-heading__square bg-gray-lighter"></div>
    </div>
  </section>
  <section class="section-recruit">
    <div class="container">
      <p class="section-recruit__description mb-0 text-justify" data-aos="fade-up">
        LAETOLIがつくり出しているものは、単なる不動産投資ファンドではありません。<br>
        より豊かで文化的でフェアな未来を実現する。そのためにたくさんのチャレンジを一緒にしませんか。
      </p>
      <div class="recruit-workflow">
        <h2 class="section-recruit__title text-center md:fs-4 fw-bold" data-aos="fade-up">採用選考の流れ</h2>
        <ul class="list-style-none bg-gray-light">
          <li class="recruit-workflow__item d-flex align-items-center position-relative flex-wrap" data-aos="fade-up">
            <p class="recruit-workflow__step mb-0">
              <span>ご応募</span>
              <i class="ff-cormorant fw-light color-white">01</i>
            </p>
            <p class="recruit-workflow__content mb-0 position-relative text-justify">
              募集要項下の応募フォームより、ご連絡ください。<br>
              約 1 週間程度でご連絡させていただきます。
            </p>
          </li>
          <li class="recruit-workflow__item d-flex align-items-center position-relative flex-wrap" data-aos="fade-up">
            <p class="recruit-workflow__step mb-0">
              <span>書類選考</span>
              <i class="ff-cormorant fw-light color-white">02</i>
            </p>
            <p class="recruit-workflow__content mb-0 position-relative text-justify">
              別途、履歴書、職務経歴書をご提出いただきます。<br>
              書類選考の合否をお知らせいたします。
            </p>
          </li>
          <li class="recruit-workflow__item d-flex align-items-center position-relative flex-wrap" data-aos="fade-up">
            <p class="recruit-workflow__step mb-0">
              <span>面 接</span>
              <i class="ff-cormorant fw-light color-white">03</i>
            </p>
            <p class="recruit-workflow__content mb-0 position-relative text-justify">
              書類選考通過の方は、SPI試験及び複数回の面接を予定しております。<br class="md:d-block d-none">
              詳細は通過者の方へのみご案内いたします。
            </p>
          </li>
          <li class="recruit-workflow__item d-flex align-items-center position-relative flex-wrap" data-aos="fade-up">
            <p class="recruit-workflow__step mb-0">
              <span>内 定</span>
              <i class="ff-cormorant fw-light color-white">04</i>
            </p>
            <p class="recruit-workflow__content mb-0 position-relative text-justify">
              内定頂いた方には、入社日を相談した上で、ご入社いただきます。
            </p>
          </li>
        </ul>
      </div>
      <div class="recruit-list">
        <h2 class="section-recruit__title text-center md:fs-4 fw-bold" data-aos="fade-up">募集職種</h2>
        <div class="recruit-list__wrapper">
          <?php
            $args = array(
                'post_type' => 'recruit',
                'order' => 'DESC',
                'posts_per_page' => -1,
            );
            $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();?>

            <div class="recruit-list__item bg-white" data-aos="fade-up">
              <h4 class="recruit-list__title md:fs-4 fs-base fw-bold md:text-left text-center"><?php the_title(); ?></h4>
              <div class="recruit-list__content d-flex align-items-center flex-wrap">
                <p class="mb-0 text-justify"><?= get_the_excerpt(); ?></p>
                <a class="btn btn--second recruit-list__btn btn--hover" href="<?php the_permalink(); ?>"><span class="position-relative">募集要項</span></a>
              </div>
            </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>


  <!-- Section Bottom -->
  <?php render_partial('template-parts/section-bottom.php') ?>
  <!-- Section Bottom -->
</main>
<?php get_footer(); ?>