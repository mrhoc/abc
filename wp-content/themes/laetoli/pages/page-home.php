<?php
/*
Template Name: Page Home
*/
$ogb = array(
  'description' => '私たちLAETOLIは、不動産投資型のクラウドファンディング「COZUCHI」を事業の中核としながら、「不動産」「建築」を中心として「フェアエコノミー」を構築することをミッションとして掲げております。'
);
set_ogb_page($ogb);
?>

<?php get_header(); ?>

<main id="main" class="main page-home">
  <!-- Section Video -->
  <section class="section-video position-relative">
    <div class="section-video__wrapper d-flex align-items-center position-relative">
      <video autoplay muted loop defaultMuted playsinline oncontextmenu="return false;" preload="auto" style="background-image: url(<?= get_stylesheet_directory_uri(); ?>/assets/images/home/video-thumbnail.png)">
        <source src="<?= get_stylesheet_directory_uri(); ?>/assets/images/home/video.mp4)" type="video/mp4">
      </video>
      <div class="container-fluid w-full">
        <h1 class="section-video__title color-white mb-0">
          <span class="d-inline-block ff-second fw-medium"><span class="d-inline-block">Real Estate,</span></span>
          <span class="d-inline-block ff-second fw-medium"><span class="d-inline-block">Architecture,</span></span>
          <span class="d-inline-block ff-cormorant fw-semibold"><span class="d-inline-block">& <i>Fair Economy.</i></span></span>
        </h1>
      </div>
    </div>
  </section>
  <!-- Section Video -->

  <!-- Section Intro -->
  <section class="section-intro position-relative" data-aos="fade-up" data-aos-duration="300" data-aos-offset="-50">
    <div class="el-scroll position-absolute"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/icon-angle-bottom.svg" alt=""><span class="d-inline-block">scroll</span></div>
    <div class="container-fluid">
      <div class="section-intro__wrapper">
        <h2 class="section-intro__title fw-medium fs-7 md:d-block d-none" data-aos="fade-in" data-aos-offset="-50" data-aos-duration="500" data-aos-delay="600">不動産、建築、そして、フェアエコノミー。</h2>
        <h2 class="section-intro__title fw-medium fs-4 md:d-none" data-aos="fade-up">不動産、建築、<br>そして、フェアエコノミー。</h2>
        <div class="section-intro__content fw-medium text-justify md:d-block d-none" data-aos="fade-up">
          <p>
            私たちLAETOLIは、不動産投資型のクラウドファンディング「COZUCHI」を事業の中核としています。私たちが社会的ミッションとして掲げているのは、得意領域である「不動産」「建築」を中心として「フェアエコノミー」を構築することです。</p>
          <p>これまで不動産業界は、圧倒的な資本力と経済論理が優先されるエコノミーが形成されてきました。私たちは、少しでもそこに風穴をあけるべく、クラウドファンディングという世の中の人が参加しやすい資金調達の方法をとりながら、経済合理性だけにとらわれない価値が成立する世の中、つまり「利益の追求」と「文化的価値の尊重」が共存するエコシステムを構築していきます。</p>
          <p class="mb-0">本当に豊かでサステナブルな街や文化をつくりたい。 <br>そう考え、私たちは事業を展開してまいります。</p>
        </div>
        <div class="section-intro__content fw-medium text-justify md:d-none" data-aos="fade-up">
          <p>
            私たちLAETOLIは、不動産投資型のクラウドファンディング「COZUCHI」を事業の中核としています。私たちが社会的ミッションとして掲げているのは、得意領域である「不動産」「建築」を中心として「フェアエコノミー」を構築することです。</p>
          <p>これまで不動産業界は、圧倒的な資本力と経済論理が優先されるエコノミーが形成されてきました。私たちは、少しでもそこに風穴をあけるべく、クラウドファンディングという世の中の人が参加しやすい資金調達の方法をとりながら、経済合理性だけにとらわれない価値が成立する世の中、つまり「利益の追求」と「文化的価値の尊重」が共存するエコシステムを構築していきます。</p>
          <p class="mb-0">本当に豊かでサステナブルな街や文化をつくりたい。 <br>そう考え、私たちは事業を展開してまいります。</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Intro -->

  <!-- Section Service -->
  <section class="section-service position-relative bg-gray-light">
    <img class="section__logo-rotate" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/logo-cozuchi.svg" alt="Laetoli - Cozuchi">
    <h4 class="section__title-rotate fw-bold fw-second md:fs-6 mb-0">Service</h4>
    <div class="container-fluid pr-0">
      <div class="section-service__banner position-relative ml-auto">
        <h3 class="section-service__title fw-medium ff-second mb-0 position-absolute d-inline-block">
          <span class="d-block" data-aos="fade-up">Investment</span>
          <span class="d-block" data-aos="fade-up" data-aos-delay="50">for a <i class="ff-cormorant fw-semibold">better </i></span>
          <i class="ff-cormorant fw-semibold d-block" data-aos="fade-up" data-aos-delay="100">tomorrow.</i></h3>
        <div class="section-service__sub fw-medium position-absolute d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <p class="md:fs-7">
            想いや<br>
            豊かさが巡る<br>
            不動産投資。<br>
          </p>
          <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/logo-cozuchi-black.svg" alt="COZUCHI" data-aos="fade-in">
        </div>
        <div data-aos="fade-in">
          <img class="img-parallax w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/gettyimages-482530049-2048x2048.jpg" alt="COZUCHI">
        </div>
      </div>
    </div>
    <div class="section-service__article">
      <div class="container-fluid">
        <div class="article-row d-flex">
          <div class="article-row__content fw-medium">
            <div class="article-row__content-text ml-auto text-justify" data-aos="fade-up">
              <p>COZUCHIは、不動産投資型のクラウドファンディングサービスです。<br>
                リスクをなるべく減らしながら、投資家にきちんと利益を還元する。それだけではありません。<br>
                その街にとっても、利用する人にとっても「新しい価値」を生み出して還元していきます。</p>
            </div>
          </div>
          <div class="article-row__image md:text-left text-right">
            <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/gettyimages-1137370578-2048x2048.jpg" alt="COZUCHI" data-aos="fade-up">
          </div>
        </div>
        <div class="article-row d-flex">
          <div class="article-row__content fw-medium">
            <div class="article-row__content-text text-justify" data-aos="fade-up">
              <p>同時に、投資の選択の幅も広げていきます。<br>
                短期的な利回りを追求したファンドだけではなく、より長期的視点での本質的な不動産投資を実現させたり、不動産投資の欠点でもあった資金の流動性を高める環境をつくるなど、不動産投資業界に新しいマーケットをつくり出していきます。</p>
            </div>
          </div>
          <div class="article-row__image">
            <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/img-service-100.jpg" alt="COZUCHI" data-aos="fade-up">
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="section-service__intro fw-medium ml-auto mr-auto" data-aos="fade-up">
        <h3 class="section-service__intro-title fw-medium text-center ml-auto mr-auto"><span class="ff-second">COZUCHI</span><span>の実績</span></h3>
        <p class="section-service__intro-text">
          COZUCHIは、2019年のサービス開始以来、運用ファンド88件、累計応募額1,813億、累計調達額603億を達成しています。2021年9月のリニューアルから現在までに、会員数が1,139％増加しており、多くの方がCOZUCHIで資産運用をはじめています。<br>
          また、プロが厳選した不動産を投資対象としているので、これまで元本毀損は一度もありません。これまでも、これからも投資家の皆様にとって、価値ある資産運用サービスを提供していきます。
        </p>
        <p class="section-service__intro-small fs-1 mb-0">
          前身サービスである「WARASHIBE」からの実績を含みます。2023年12月末時点の実績です。<br>
          将来の運用実績を保証するものではありません。
        </p>
      </div>
    </div>
    <div class="section-service__banner-bottom position-relative ml-auto">
      <div data-aos="fade-up">
        <img class="img-parallax w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/img-service-2-100.jpg" alt="COZUCHI">
      </div>
    </div>
    <div class="section-service__view ml-auto" data-aos="fade-up">
      <a class="btn--link" href="<?=get_bloginfo('url') ?>/service#COZUCHI">View More<span class="btn--link__arrow"><span class="btn--link__arrow-line"></span></span></a>
    </div>
  </section>
  <section class="section-service section-service__kabukix position-relative bg-gray-light">
    <img class="section__logo-rotate" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/logo-kabukix.svg" alt="KABUKI X">
    <div class="container-fluid pr-0" data-aos="fade-up">
      <div class="section-service__banner position-relative ml-auto">
        <h2 class="section-service__title fw-medium ff-second mb-0 position-absolute d-inline-block"><span class="d-block" data-aos="fade-up">The future of</span><i class="ff-cormorant fw-semibold d-block" data-aos="fade-up" data-aos-offset="50" data-aos-delay="100">cultural values.</i></h2>
        <div class="section-service__sub fw-medium position-absolute d-flex justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <p class="md:fs-7">
            文化的価値の<br>
            その先へ。
          </p>
          <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/logo-kabukix-black.svg" alt="KABUKI X" data-aos="fade-in">
        </div>
        <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/meta2.jpg" alt="KABUKI X" data-aos="fade-in">
      </div>
    </div>
    <div class="section-service__view ml-auto">
      <div class="section-service__article pt-0">
        <div class="article-row__content-text fw-medium" data-aos="fade-up">
          <p>私たちが展開してきた不動産投資事業。<br>
            そこで、大切にしてきたのは「利益」を追求しながらも、「文化的価値」や「まちづくり」を念頭において開発していくことでした。<br><br>

            クラウドファンディングという手法をとったのも、特定の人しか享受できなかった利益を、なるべく多くの人に解放していきたいという想いからです。<br>
            これからは、それをブロックチェーンなどのテクノロジーを使って拡張したいと考えています。<br><br>

            消えゆく運命にあった名建築や神社仏閣など、日本が世界に誇るコンテンツにも光をあてながら、現実空間や、仮想空間で新しい価値生み出して行きます。<br>
            私たちの挑戦にご期待ください。
          </p>
        </div>
      </div>
      <div data-aos="fade-up" style="display: none">
        <a class="btn--link" href="<?=get_bloginfo('url') ?>/service#KABUKIX">View More<span class="btn--link__arrow"><span class="btn--link__arrow-line"></span></span></a>
      </div>
    </div>
  </section>
  <!-- Section Service -->

  <!-- Section News -->
  <section class="section-news position-relative">
    <h4 class="section__title-rotate fw-bold fw-second md:fs-6 mb-0">News</h4>
    <div class="container-fluid">
      <div class="section-news__list list-style-none fw-medium ml-auto mr-auto">

        <?php $the_query = new WP_Query(array(
          'post_type' => 'news',
          'order' => 'DESC',
          'posts_per_page' => 3,
        )); ?>

        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a class="position-relative" href="<?php the_permalink(); ?>" data-aos="fade-up">
              <span class="section-news__date ff-second md:fs-2"><?= get_the_date('Y.m.d') ?></span>
              <span class="section-news__content mb-0"><?= the_title(); ?></span>
            </a>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
      <div class="text-center" data-aos="fade-up">
        <a class="btn btn--second btn--rounded btn--hover" href="<?= get_bloginfo('url') ?>/news"><span class="position-relative">View More</span><span class="btn__icon btn__icon--arrow"></span></a>
      </div>
    </div>
  </section>
  <!-- Section News -->

  <!-- Section Partners -->
  <?php render_partial('template-parts/section-partner.php') ?>
  <!-- Section Partners -->

  <!-- Section Banner -->
  <section class="section-banner fw-medium color-second">
    <div class="container-fluid">
      <div class="section-banner__wrapper bg-gray-light md:text-center">
        <h3 class="section-banner__title ff-second fw-bold" data-aos="fade-up">Act on Specified Joint<br>Real Estate Ventures</h3>
        <h5 class="section-banner__subtitle fw-medium md:fs-5 fs-base" data-aos="fade-up">不動産特定共同事業法とは</h5>
        <div class="text-center" data-aos="fade-up">
          <a class="btn btn--second btn--rounded btn--hover" href="<?= get_bloginfo('url') ?>/company/law"><span class="position-relative">View More</span><span class="btn__icon btn__icon--arrow"></span></a>
        </div>
        <a href="<?= get_bloginfo('url') ?>/company/law"></a>
      </div>
    </div>
  </section>
  <!-- Section Banner -->

  <!-- Section Bottom -->
  <?php render_partial('template-parts/section-bottom.php') ?>
  <!-- Section Bottom -->

  <!-- Banner Bottom -->
  <section class="banner-bottom bg-dark">
    <img class="w-full img-parallax" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/img-banner-bottom.jpg" alt="Laetoli">
  </section>
  <!-- Banner Bottom -->

  <div class="globular-animation">
    <div class="globular-animation__wrapper globular-animation__intro">
      <img id="circleIntro1" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/animate-circle-1.svg" alt="">
      <img id="circleIntro2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/animate-circle-1.svg" alt="">
    </div>
    <div class="globular-animation__wrapper globular-animation__service">
      <div class="globular-animation__service-img">
        <div class="overlay-top"></div>
        <div class="overlay-bottom"></div>
        <img id="circleService3" class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/animate-circle-2.svg" alt="">
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>