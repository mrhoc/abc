<?php
$ogb = array(
  'title' => get_the_title().' | News',
);
set_ogb_page($ogb);
?>
<?php get_header(); ?>

<main id="main" class="main page-single-news">
    <section class="section-heading position-relative">
        <div class="d-flex align-items-end">
            <h1 class="section-heading__title ff-second fw-medium mb-0">News</h1>
            <div class="section-heading__square bg-gray-lighter"></div>
        </div>
    </section>

    <div class="container-fluid w-full container-news">
        <div class="div-page-news ml-auto">
            <div class="date-year-head">
                <div class="date-year-head__label text-right mr-auto">
                  <span class="ff-cormorant year-title color-white"><?= get_the_date('Y'); ?></span>
                  <span class="ff-cormorant date-title color-white"><i><?= get_the_date('m.d'); ?></i></span>
                </div>
            </div>
            <hr class="hr-news">
            <h1 class="news-title"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="container-fluid w-full bg-gray-lighter">
        <div class="news-content fw-medium text-justify">
          <?php if(has_post_thumbnail()): ?>
          <div class="news-image text-center">
            <?= resize_thumbnail_by_ratio(get_the_ID());?>
          </div>
          <?php endif; ?>
          <?= get_the_content(); ?>
        </div>
        <div class="div-button">
            <a class="btn btn--second btn--rounded btn--hover" href="<?= get_bloginfo('url') ?>/news">
                <span class="position-relative">News 一覧</span>
                <span class="btn__icon btn__icon--arrow"></span>
            </a>
        </div>
    </div>
</main>
<?php get_footer(); ?>