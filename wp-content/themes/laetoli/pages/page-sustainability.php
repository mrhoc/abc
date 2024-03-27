<?php
/*
Template Name: Page Sustainability
*/
$ogb = array(
  'title' => 'Sustainability',
  'description' => 'COZUCHIが社会資本たる不動産を考え、工夫し、投資を行うことで、サスティナブルな社会の実現に寄与するよう努力をしております。'
);
set_ogb_page($ogb);
?>
<?php get_header(); ?>

<main id="main" class="main page-sustainability bg-gray-light">
  <section class="section-heading section-heading--small position-relative" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sustainability/img-banner.jpeg">  
    <div class="d-flex align-items-end">
      <h1 class="section-heading__title ff-second fw-bold mb-0 color-white">Sustainability</h1>
      <div class="section-heading__square bg-gray-light"></div>
    </div>
  </section>

  <section class="page-sustainability__section fw-medium">
    <div class="container">
      <div class="page-sustainability__content text-justify" data-aos="fade-up">
        <p>COZUCHIは、その投資活動を通して、サスティナブルな社会の実現に寄与するよう努力をしております。</p>
        <p>不動産は社会資本と言えます。社会資本の最適化に必要な資金をいかに流入させるかが大切だと考えております。老朽化が進み、耐震などの観点で安全性が低かったり、設備が古いためにエネルギー効率が悪い建物が多数あります。しかし権利関係が複雑であるゆえに、そういった建物の再開発が進まない。そこにCOZUCHIが資金を流入することにより再生を促す。また、古いけれども価値ある建物も多数あります。ただ取り壊して建て替えるだけではなく、COZUCHIが資金を流入させ、古さを活かした再生を実行する。</p>
        <p>様々な形で、既存の金融サービスの枠を超えて、COZUCHIが社会資本たる不動産を考え、工夫し、投資を行うことで、将来にわたって価値ある資産の存続を促していきます。</p>
      </div>
    </div>
  </section>

  <!-- Section Bottom -->
  <?php render_partial('template-parts/section-bottom.php') ?>
  <!-- Section Bottom -->
</main>


<?php get_footer(); ?>