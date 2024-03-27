<?php
/*
Template Name: Page News
*/
$ogb = array(
  'title' => 'News',
  'description' => 'COZUCHIを運営するLAETOLI株式会社のニュースリリースです。当社に関するお知らせ、サービスに関するお知らせを掲載しています。'
);
set_ogb_page($ogb);
?>

<?php get_header(); ?>

<main id="main" class="main page-news">
    <section class="section-heading position-relative">
        <div class="d-flex align-items-end">
            <h1 class="section-heading__title ff-second fw-medium mb-0">News</h1>
            <div class="section-heading__square bg-gray-lighter"></div>
        </div>
    </section>

    <div class="container-news">
      <div class="container-fluid pr-0 w-full mr-0">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            if (isset($_GET['page_num'])) {
                $paged = $_GET['page_num'];
            }
            $args = array(
                'post_type' => 'news',
                'order' => 'DESC',
                'posts_per_page' => 10,
                'paged' => $paged,
            );
            $the_query = new WP_Query($args);
            ?>

            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                    $year = get_the_date('Y');
                    if ($year != $year_check) {
                        if ($year_check != '') {
                            //End
                        }
                        echo '<div class="ff-cormorant year-title fw-medium color-white md:d-block d-none" data-aos="fade-up">'
                            . get_the_date('Y')
                            . '</div>';
                    }
                ?>
                    <a class="div-title" href="<?php the_permalink(); ?>" data-aos="fade-up">
                        <span class="ff-cormorant year-title color-white md:d-none"><?= get_the_date('Y'); ?></span>
                        <span class="ff-cormorant date-title color-white"><i><?= get_the_date('m.d'); ?></i></span>
                        <span class="news-title fw-medium"><?php the_title(); ?></span>
                    </a>

                <?php
                  $year_check = $year;
                endwhile;
                ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <?php wp_pagenavi(array('query' => $the_query)); ?>
        </div>
    </div>
</main>


<?php get_footer(); ?>