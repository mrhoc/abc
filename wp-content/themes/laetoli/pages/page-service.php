<?php
/*
Template Name: Page Service
*/
$ogb = array(
  'image' => get_stylesheet_directory_uri().'/assets/images/221208_LAETOLI_OGP_thumbnail_Service.jpeg',
  'title' => 'Service',
  'description' => '不動産特定共同事業法を活用した、不動産投資型のクラウドファンディング「COZUCHI」と、日本の古い文化を守り、新しいカルチャーを創る「KABUKI X」をご紹介します。'
);
set_ogb_page($ogb);
?>
<?php get_header(); ?>

<main id="main" class="main page-service">

    <section class="section-heading section-heading--small position-relative" style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/assets/images/service/gettyimages-482530049-2048x2048.jpg'); ?>">
        <div class="d-flex align-items-end">
            <h1 class="section-heading__title ff-second fw-bold mb-0 color-white">Service</h1>
            <div class="section-heading__square bg-gray-light"></div>
        </div>
    </section>

    <!-- COZUCHI -->
    <section class="position-relative bg-gray-light">
        <div class="container-fluid text-center page-service__number">
            <h5 id="COZUCHI" class="page-service__index ff-cormorant fw-regular d-inline-block mb-0" data-aos="fade-up"><span>01</span></h5>
        </div>
        </div>
        <div class="text-center service__couzuchi-title position-relative" data-aos="fade-up">
            <img class="w-full service__couzuchi-title__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/logo-cozuchi-black.svg" alt="COZUCHI">
        </div>


        <div class="container__cozuchi container__1366">
            <div class="section-service__article">
                <div class="container-fluid md:pr-0">
                    <div class="article-row md:d-flex align-items-center page-service__row ml-auto">
                        <div class="article-row__content fw-medium">
                            <div class="article-row__content-text" data-aos="fade-up">
                                <h3 class="md:text-left text-center fw-medium">不動産投資を、<br class="md:d-none">みんなのものへ。</h3>
                                <div class="text-justify">
                                    <p class="mb-0">「COZUCHI」は、不動産特定共同事業法を活用した、不動産投資型のクラウドファンディングです。</p>
                                    <p class="mb-0">これまでまとまった予算がないと投資できなかった不動産を、１万円から投資できるように。物件の当たり外れといったリスクも、専門家がきちんと判断する。資金の流動性を確保することで、中長期的な投資もしやすくなる。これまでの不動産投資にあった課題を、ひとつずつ解決し、もっと開かれたものにしていく。</p>
                                    <p class="mb-0">「COZUCHI」はこれからもどんどん進化していきます。</p>
                                </div>
                            </div>
                        </div>
                        <div class="article-row__image" data-aos="fade-up">
                            <img class="w-full" src="https://laetoli.jp/wp-content/uploads/2024/02/service_pic_new.jpg" alt="COZUCHI">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Type of COZUCHI -->
        <section class="section-type">
            <div class="section-heading section-heading--service position-relative">
                <div class="d-flex align-items-end">
                    <div class="section-heading__square bg-gray-light"></div>
                    <div class="section-heading__square service-heading__title bg-gray-lighter" style="z-index: 10;">
                        <div class="text-center cozuchi-title" data-aos="fade-up">
                            <h3 class="cozuchi-text ff-cormorant mb-0"><i>Type</i></h3>
                            <h3 class="cozuchi-text ff-cormorant mb-0"><i>of</i></h3>
                            <div class="cozuchi-image">
                                <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/logo-cozuchi-black.svg" alt="COZUCHI">
                            </div>
                        </div>
                    </div>
                    <div class="section-heading__square bg-gray-light"></div>
                </div>
            </div>

            <div class="container-fluid bg-gray-lighter container__service">
                <div class="page-service__container ml-auto mr-auto">
                    <p class="fw-medium section-type__description" data-aos="fade-up">
                        「COZUCHI」は不動産特定共同事業法を活用した不動産投資型のクラウドファンディングです。投資家の皆様のスタンスに応じて、さまざまなファンドや取引形態をご用意しています。</p>
                    <div class=" text-center div__container"  data-aos="fade-up">
                        <h3>短期運用型</h3>
                    </div>
                    <img class="md:d-block d-none md:pl-2 md:pr-2" src="https://laetoli.jp/wp-content/uploads/2023/05/pc_toku.svg" data-aos="fade-up" alt="短期運用型">
                    <img class="md:d-none" src="https://laetoli.jp/wp-content/uploads/2023/05/sp_toku.svg" data-aos="fade-up" alt="短期運用型">
                    <p class="fw-medium cozuchi-type-text mb-0" data-aos="fade-up">
                        短期運用型は匿名組合型のサービスで、あくまでも金銭のみを出資し、不動産の所有権を持たないという特性を持ちます。COZUCHIでは、その特性を活かし不動産を原資産とした安定性と手軽な投資を両立したい、また、比較的短期高利回りな資産運用を目指したい投資家様向けの商品に活用しています。
                    </p>
                    <div class="text-center div__container md:pb-3" data-aos="fade-up">
                        <h3>中長期運用型</h3>
                    </div>
                    <img class="md:d-block d-none" src="https://laetoli.jp/wp-content/uploads/2023/05/pc_nin.svg" alt="中長期運用型" data-aos="fade-up">
                    <img class="md:d-none" src="https://laetoli.jp/wp-content/uploads/2023/05/sp_nin.svg" alt="中長期運用型" data-aos="fade-up">
                    <p class="fw-medium cozuchi-type-text mb-0" data-aos="fade-up">
                        中長期運用型は任意組合型のサービスで、出資することで不動産の所有権を持つことになるため、直接的な不動産投資として税務上のメリット等も享受できます。COZUCHIでは、その特性を活かし正に「不動産投資」を志向する、また、中長期的に安定した資産運用を目指したい投資家様向けの商品に活用しています。
                    </p>
                </div>
            </div>
        </section>
        <!-- Type of COZUCHI -->

        <!-- COZUCHI ST -->
        <section class="section-st"  style="display: none;">
          <div class="section-heading--service position-relative p-0">
              <div class="d-flex align-items-end">
                  <div class="section-heading__square bg-gray-lighter"></div>
                  <div class="section-heading__square service-heading__title bg-gray-light" style="z-index: 10;">
                      <div class="text-center cozuchi-title cozuchi-title__st" data-aos="fade-up">
                          <div class="cozuchi-image">
                              <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/logo-cozuchi-black.svg" alt="COZUCHI">
                          </div>
                          <h3 class="cozuchi-text ff-cormorant mb-0"><i>ST</i></h3>
                      </div>
                  </div>
                  <div class="section-heading__square bg-gray-lighter"></div>
              </div>
          </div>

          <div class="container-fluid bg-gray-light container__service">
              <div class="page-service__container ml-auto mr-auto">
                  <p class="fw-medium mb-0" data-aos="fade-up">
                  COZUCHIを、もっと多くの投資家に開かれたものへ。COZUCHIの投資システムに、ブロックチェーンで守られたセキュリティートークンを利用できるようにしていきます。日本国内にいる投資家だけではなく、世界からも簡単に投資できるように。不動産クラウドファンディングをさらにその次のステージへと昇華させていきます。
                  </p>
                  <div class="section-st_images md:pl-1 md:pr-1">
                      <img class="md:d-block d-none" class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/cozuchi-st.svg" alt="COZUCHI-ST" data-aos="fade-up">
                      <img class="md:d-none" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/cozuchi-st-sp.svg" alt="COZUCHI-ST" data-aos="fade-up">
                  </div>
              </div>
          </div>
        </section>
        <!-- COZUCHI ST -->

        <!-- Achievement of COZUCHI -->
        <section class="section-heading--service position-relative section-archivement pt-0">
            <div class="d-flex align-items-end">
                <div class="section-heading__square bg-gray-lighter"></div>
                <div class="section-heading__square service-heading__title bg-gray-light" style="z-index: 10;">
                    <div class="text-center cozuchi-title cozuchi-title__archivement flex-wrap" data-aos="fade-up">
                        <h3 class="cozuchi-text ff-cormorant mb-0"><i>Achievement</i></h3>
                        <h3 class="cozuchi-text ff-cormorant mb-0"><i>of</i></h3>
                        <div class="cozuchi-image">
                            <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/logo-cozuchi-black.svg" alt="COZUCHI">
                        </div>
                    </div>
                </div>
                <div class="section-heading__square bg-gray-lighter"></div>
            </div>

            <div class="container-fluid bg-gray-light container__service container__service-achievement">
                <div class="page-service__container ml-auto mr-auto">
                    <p class="fw-medium mb-2" data-aos="fade-up">COZUCHIは、2019年のサービス開始以来、運用ファンド88件、累計応募額1,813億、累計調達額603億を達成しています。2021年9月のリニューアルから現在までに、会員数が1,139％増加しており、多くの方がCOZUCHIで資産運用をはじめています。また、プロが厳選した不動産を投資対象としているので、これまで元本毀損は一度もありません。これまでも、これからも投資家の皆様にとって、価値ある資産運用サービスを提供していきます。</p>
                    <p class="fw-medium fs-1 pt-5 mb-0" data-aos="fade-up">
                      前身サービスである「WARASHIBE」からの実績を含みます。2023年12月末時点の実績です。<br>
                      将来の運用実績を保証するものではありません。
                    </p>

                    <div class="archivement-image" data-aos="fade-up">
                        <img class="w-full md:d-block d-none" src="https://laetoli.jp/wp-content/uploads/2024/02/pc_ruikei_240202.svg" alt="COZUCHI-ST">
                        <img class="w-full md:d-none" src="https://laetoli.jp/wp-content/uploads/2024/02/sp_ruikei_240202.svg" alt="COZUCHI-ST">
                    </div>

                    <div class="archivement-summary d-flex flex-wrap" data-aos="fade-up">
                        <div class="lg:col-3 col-6 archivement-summary__col">
                            <div class="text-center archivement-summary__box">
                                <p class="text-center mb-0">組成ファンド数</p>
                                <h3 class="ff-second fw-medium m-0 fw-113">88</h3>
                            </div>
                        </div>
                        <div class="lg:col-3 col-6 archivement-summary__col">
                            <div class="text-center archivement-summary__box">
                                <p class="text-center">累計応募額</p>
                                <h3 class="ff-second fw-medium m-0 fw-43">1813&nbsp;<span>億</span></h3>
                                <h3 class="ff-second fw-medium m-0 fw-43">7528&nbsp;<span>万円</span></h3>
                            </div>
                        </div>
                        <div class="lg:col-3 col-6 archivement-summary__col">
                            <div class="text-center archivement-summary__box">
                                <p class="text-center">累計調達額</p>
                                <h3 class="ff-second fw-medium m-0 fw-43">603&nbsp;<span>億</span></h3>
                                <h3 class="ff-second fw-medium m-0 fw-43">4649&nbsp;<span>万円</span></h3>
                            </div>
                        </div>
                        <div class="lg:col-3 col-6 archivement-summary__col">
                            <div class="text-center archivement-summary__box">
                                <p class="text-center mb-0">元本毀損の回数</p>
                                <h3 class="ff-second fw-medium m-0 fw-113">0</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Achievement of COZUCHI -->

        <!-- Pick up of COZUCHI FUND -->
        <section class="position-relative section-pickup bg-gray-lighter">
            <div class="section-heading d-flex align-items-end bg-gray-light pt-0">
                <div class="section-heading__square bg-gray-lighter"></div>
            </div>
            <div class="container-fluid container__1366">
                <div class="service__cozuchi-title" data-aos="fade-up">
                    <h3 class="h1__title__1 ff-cormorant fw-semibold"><i>Pickup of</i></h3>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/logo-cozuchi-black.svg" alt="COZUCHI">
                    <h3 class="h1__title__2 ff-second fw-bold m-0">FUND</h3>
                </div>
            </div>

            <div class="list-service container__1366">
                <div class="list-service__item">
                    <div class="container-fluid">
                        <div class="row row--no-spacing page-service__row" data-aos="fade-up">
                            <div class="list-service__col col-12">

                            </div>
                            <div class="list-service__col col-12">
                                <div class="list-service__content ml-auto">
                                    <h3 class="cozuchi-number">
                                        <span class="ff-cormorant cozuchi-number-text"><i>01</i></span>
                                        <p class="fw-bold m-0">六本木 FUND</p>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row row--no-spacing page-service__row">
                            <div class="list-service__col">
                                <img class="list-service__img w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/25_roppongi.jpg" alt="COZUCHI FUND"  data-aos="fade-up">
                                <img class="list-service__img w-full md:d-block d-none" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/DSC00182.jpg" alt="COZUCHI FUND"  data-aos="fade-up">
                            </div>
                            <div class="list-service__col">
                                <div class="list-service__content ml-auto">
                                    <h6 class="ff-second fw-bold list-service__h6 md:text-left text-center" data-aos="fade-up">
                                        Site
                                    </h6>
                                    <div class="section-message__wrapper container__service p-0" data-aos="fade-up">
                                        <p class="mb-0 fw-medium">
                                          物件は六本木駅と西麻布交差点を繋ぐ六本木通りに面しています。六本木駅までは徒歩8分、六本木ヒルズと西麻布交差点にはそれぞれ徒歩3分ほどのアクセスです。六本木通りというこのエリアでのメインストリートに面していながら既に築年数は48年が経過していました。周辺は活発に建て替えや再開発が進む中、本物件は権利関係が複雑な背景がありポテンシャルが高いながらもそのような議論が進みづらい不動産となっておりました。
                                        </p>
                                    </div>
                                    <img class="w-full md:d-none mt-2 pt-5" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/DSC00182.jpg" alt="COZUCHI FUND"  data-aos="fade-up">
                                    <h6 class="ff-second fw-bold mb-0 cozuchi-h6-content md:text-left text-center" data-aos="fade-up">
                                        Background
                                    </h6>
                                    <div class="section-message__wrapper container__service p-0" data-aos="fade-up">
                                        <p class="mb-0 fw-medium">
                                        特に古い不動産に多いですが、ひとつの不動産を親族など複数で所有する共有持分という形で本物件も所有されておりました。この状況で相続など発生するとさらに権利関係は複雑化し、共有の権利であることから各所有者は不動産の権利としても制限されます。不動産としては非常にポテンシャルを持ちながらもそれらが制限されている本物件にスポットライトを当て、合意形成のための個別交渉としてプロである事業者が参画し、まとまったタイミングで各所有者から購入することとなったため本ファンドを組成しました。
                                        </p>
                                    </div>
                                    <h6 class="ff-second fw-bold mb-0 cozuchi-h6-content md:text-left text-center" data-aos="fade-up">
                                        Result
                                    </h6>
                                    <div class="section-message__wrapper container__service p-0" data-aos="fade-up">
                                        <p class="mb-0 fw-medium">
                                            旧サービスのWARASHIBEからCOZUCHIにリニューアルした第一弾として初の二桁、10億円の募集。結果当時最大の18億円の応募を頂きました。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-service__item">
                    <div class="container-fluid">
                        <div class="row row--no-spacing page-service__row ml-auto">
                            <div class="list-service__col col-12">

                            </div>
                            <div class="list-service__col col-12" data-aos="fade-up">
                                <h3 class="cozuchi-number">
                                    <span class="ff-cormorant cozuchi-number-text"><i>02</i></span>
                                    <p class="fw-bold m-0">渋谷 FUND</p>
                                </h3>
                            </div>
                        </div>
                        <div class="row row--no-spacing page-service__row ml-auto">
                            <div class="list-service__col">
                                <img class="list-service__img w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/dogenzaka_thumbnail_yusen.jpg" alt="COZUCHI FUND" data-aos="fade-up">
                                <img class="list-service__img w-full md:d-block d-none" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/IMG_6507.jpg" alt="COZUCHI FUND" data-aos="fade-up">
                            </div>
                            <div class="list-service__col">
                                <div class="list-service__content">
                                    <h6 class="ff-second fw-bold list-service__h6 md:text-left text-center" data-aos="fade-up">
                                        Site
                                    </h6>
                                    <div class="section-message__wrapper container__service p-0" data-aos="fade-up">
                                        <p class="mb-0 fw-medium">
                                          渋谷駅徒歩1分。渋谷マークシティから地上に出るエスカレーターを降りてすぐ左に見える物件です。渋谷は昨今再開発が目まぐるしく進み、予定されているものだけで2027年まであります。このような状況で駅前の物件を取得できたことは非常に希少性が高いと言えます。
                                        </p>
                                    </div>
                                    <img class="w-full md:d-none mt-2 pt-5" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/IMG_6507.jpg" alt="COZUCHI FUND" data-aos="fade-up">
                                    <h6 class="ff-second fw-bold mb-0 cozuchi-h6-content md:text-left text-center" data-aos="fade-up">
                                        Background
                                    </h6>
                                    <div class="section-message__wrapper container__service p-0" data-aos="fade-up">
                                        <p class="mb-0 fw-medium">
                                        通常であればこのレベルの希少性高い物件は情報としても出てくること自体、滅多にありません。これまでの事業者の培ったネットワークから早期に情報を掴み取得に至りました。また売主の都合により早期に売却する必要があり、そのスケジュール感だと銀行での対応は不可能なため、不動産クラウドファンディングを利用することで、これまでにない迅速な対応が出来たことが取得の大きな要因です。
                                        </p>
                                    </div>
                                    <h6 class="ff-second fw-bold mb-0 cozuchi-h6-content md:text-left text-center" data-aos="fade-up">
                                        Result
                                    </h6>
                                    <div class="section-message__wrapper container__service p-0 fw-medium" data-aos="fade-up">
                                        <p class="mb-0">
                                          希少性の高い本物件をCOZUCHIでは一定の条件によって配布した優先権をお持ちの投資家様向けにのみ公開いたしました。そんな中でも約15億円の募集に対し、35億円ほどの応募をいただきました。<br>
                                          現在、運用戦略は様々検討をしています。この場所を新たに開発したいデベロッパーに売却するか自ら開発まで行い運用していくかなど多岐に渡ります。この渋谷駅前という立地を生かした店舗ビルとして新たに生まれ変わることを想定しています。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="list-service__item">
                    <div class="container-fluid">
                        <div class="row row--no-spacing page-service__row" data-aos="fade-up">
                            <div class="list-service__col col-12">

                            </div>
                            <div class="list-service__col col-12">
                                <div class="list-service__content ml-auto">
                                    <h3 class="cozuchi-number">
                                        <span class="ff-cormorant cozuchi-number-text"><i>03</i></span>
                                        <p class="fw-bold m-0">熱海 FUND</p>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row row--no-spacing page-service__row">
                            <div class="list-service__col">
                                <img class="list-service__img w-full" src="https://laetoli.jp/wp-content/uploads/2024/02/サムネ-2.jpg" alt="COZUCHI FUND"  data-aos="fade-up">
                                <img class="list-service__img w-full md:d-block d-none" src="https://laetoli.jp/wp-content/uploads/2024/02/IMG_2023-05-17-10-51-33-638.jpg" alt="COZUCHI FUND"  data-aos="fade-up">
                            </div>
                            <div class="list-service__col">
                                <div class="list-service__content ml-auto">
                                    <h6 class="ff-second fw-bold list-service__h6 md:text-left text-center" data-aos="fade-up">
                                        Site
                                    </h6>
                                    <div class="section-message__wrapper container__service p-0" data-aos="fade-up">
                                        <p class="mb-0 fw-medium">
                                          物件は、静岡県熱海市上多賀に根差す統合型リゾートである「ACAO SPA & RESORT」の中心に位置する有料駐車場です。<br>
熱海市は、静岡県の東部、伊豆半島の北東端に位置する温泉地です。西部に連なる富士箱根伊豆連山から相模湾に幾筋にも伸びている尾根の谷間の扇状地に市街地が形成され、山と海に囲まれるという特徴的な地形構造を有しています。熱海温泉の歴史は1250年前から遡り、山と海、そして温泉といった大自然が織りなす国内人気リゾート地です。東京駅から熱海駅までも新幹線利用で約40分とアクセス性にも優れるため、年間を通して多くの旅行客が訪れます。<br>
ACAO SPA & RESORTは、熱海市街地と同程度の規模を有するバカンスにもワーケーションにも最適な、都心からほど近い海と森のリゾートです。夏は涼しく冬はあたたかい。まるで地中海を思わせる気候が魅力のひとつです。四季折々の花々、刻一刻と表情を変える空。年間を通して10回以上開催される熱海海上花火大会は、訪れる人を魅了する風物詩となっています。

                                        </p>
                                    </div>
                                    <img class="w-full md:d-none mt-2 pt-5" src="https://laetoli.jp/wp-content/uploads/2024/02/IMG_2023-05-17-10-51-33-638.jpg" alt="COZUCHI FUND"  data-aos="fade-up">
                                    <h6 class="ff-second fw-bold mb-0 cozuchi-h6-content md:text-left text-center" data-aos="fade-up">
                                        Background
                                    </h6>
                                    <div class="section-message__wrapper container__service p-0" data-aos="fade-up">
                                        <p class="mb-0 fw-medium">
                                        ACAO SPA & RESORTは、創業60年の歴史を有し、かつては「ホテルニューアカオ」を中心に運営されていましたが、バブル崩壊後の需要低迷により債務超過に転じ、その後も負債が拡大してきました。そのような中、2022年に創業家が経営から退き、元寺田倉庫CEOの中野氏が代表取締役CEOとして就任し、現在は創生を進めています。<br>
本ファンドを通し、ACAO SPA & RESORTの創生支援を図り、最終的には熱海で眠る土地や建物などの流動化と、その資金で熱海の地域活性化を目指します。

                                        </p>
                                    </div>
                                    <h6 class="ff-second fw-bold mb-0 cozuchi-h6-content md:text-left text-center" data-aos="fade-up">
                                        Result
                                    </h6>
                                    <div class="section-message__wrapper container__service p-0" data-aos="fade-up">
                                        <p class="mb-0 fw-medium">
                                            2023年9月29日に運用を開始しました。<br>10年の運用期間を想定し、ACAO SPA & RESORTの創生計画と共に今後安定的な運用が期待されます。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="list-service__item">
                    <div class="container-fluid">
                        <div class="row row--no-spacing page-service__row ml-auto">
                            <div class="list-service__col col-12">

                            </div>
                            <div class="list-service__col col-12" data-aos="fade-up">
                                <h3 class="cozuchi-number">
                                    <span class="ff-cormorant cozuchi-number-text"><i>04</i></span>
                                    <p class="fw-bold m-0">京都 FUND</p>
                                </h3>
                            </div>
                        </div>
                        <div class="row row--no-spacing page-service__row ml-auto">
                            <div class="list-service__col">
                                <img class="list-service__img w-full" src="https://laetoli.jp/wp-content/uploads/2024/02/サムネ-3.jpg" alt="COZUCHI FUND" data-aos="fade-up">
                                <img class="list-service__img w-full md:d-block d-none" src="https://laetoli.jp/wp-content/uploads/2024/02/kyoto_ph_photo_1.jpg" alt="COZUCHI FUND" data-aos="fade-up">
                            </div>
                            <div class="list-service__col">
                                <div class="list-service__content">
                                    <h6 class="ff-second fw-bold list-service__h6 md:text-left text-center" data-aos="fade-up">
                                        Site
                                    </h6>
                                    <div class="section-message__wrapper container__service p-0" data-aos="fade-up">
                                        <p class="mb-0 fw-medium">
                                          世界遺産「元離宮 二条城」が眼前に広がる贅沢な立地、「ANAクラウンプラザホテル京都」が投資対象です。<br>
堀川通という市内主要道路に面し、敷地面積約2,400坪と大きく、京都市内でも同規模のホテル開発に適した物件が取引市場に出回る可能性は極めて低いと考えられます。<br>
また、本ホテルの周辺は、近年ホテル供給の集中する清水寺周辺地域とは対照的で落ち着いた雰囲気が広がっており、建物内における共有スペースも十分に確保されていることから、ラグジュアリーを始めとした上位グレードのホテルへの転換が期待できます。

                                        </p>
                                    </div>
                                    <img class="w-full md:d-none mt-2 pt-5" src="https://stg-laetoli.cozuchi.com/wp-content/uploads/2024/01/kyoto_ph_photo_1.jpg" alt="COZUCHI FUND" data-aos="fade-up">
                                    <h6 class="ff-second fw-bold mb-0 cozuchi-h6-content md:text-left text-center" data-aos="fade-up">
                                        Background
                                    </h6>
                                    <div class="section-message__wrapper container__service p-0" data-aos="fade-up">
                                        <p class="mb-0 fw-medium">
                                        ホテル業界においては、新型コロナウイルス感染拡大を受け、国内およびインバウンド客の宿泊需要が減少し、宿泊業を営む各ホテル・旅館の業績が低迷しました。<br>
本ホテルにおいては、館内のリノベーション工事を実施することで収益性の改善を予定していたさなか、新型コロナウイルスが感染拡大したため、必要な工事の中断などにより適正なバリューアップをすることができず、その結果、ホテル運営会社にとって建物保有コストが負担となっていました。<br>
そのような状況下、ホテル運営会社はオフバランスすることでバランスシートの改善をしたいと考えており、本プロジェクト開始に至ります。

                                        </p>
                                    </div>
                                    <h6 class="ff-second fw-bold mb-0 cozuchi-h6-content md:text-left text-center" data-aos="fade-up">
                                        Result
                                    </h6>
                                    <div class="section-message__wrapper container__service p-0 fw-medium" data-aos="fade-up">
                                        <p class="mb-0">
                                          COZUCHI史上最大規模の110億円の募集に対し、約15,000人の投資家様から出資希望があり、約123億円ほどの応募をいただきました。<br>今後数年にわたり、ホテルのバリューアップを図ります。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center container-fluid" data-aos="fade-up">
                <a class="btn btn--second btn--rounded cozuchi-btn btn--hover" href="https://cozuchi.com/ja/" target="_blank">
                    <svg class="cozuchi-btn__img" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170.84 24.78" width="170.84pt" height="24.78pt">
                      <g id="design">
                        <g id="_レイヤー_2" data-name="レイヤー 2">
                          <g id="_レイヤー_3" data-name="レイヤー 3">
                            <path d="M166.7,24.03V.75c0-.11,.09-.19,.19-.19h3.76c.11,0,.19,.09,.19,.19h0V24.03c0,.11-.09,.19-.19,.19h-3.76c-.11,0-.19-.09-.19-.19"/>
                            <path d="M154.68,24.03V14.69c0-.11-.09-.19-.19-.19h-10.34c-.11,0-.19,.09-.19,.19v9.34c0,.11-.09,.19-.19,.19h-3.76c-.11,0-.19-.09-.19-.19V.75c0-.11,.09-.19,.19-.19h3.76c.11,0,.19,.09,.19,.19V10.08c0,.11,.09,.19,.19,.19h10.39c.11,0,.19-.09,.19-.19V.75c-.01-.08,.03-.16,.1-.19h3.77c.11,0,.19,.09,.19,.19V24.03c0,.11-.09,.19-.19,.19h-3.77c-.1,0-.18-.08-.18-.18,0,0,0,0,0-.01"/>
                            <path d="M23.01,16.4c-.76,4.78-5.49,8.37-11.12,8.37C5.2,24.63-.12,19.09,0,12.39-.12,5.69,5.2,.15,11.9,0c3.11-.08,6.12,1.12,8.32,3.32,1.39,1.38,2.36,3.13,2.8,5.04,0,.17-.05,.25-.18,.25h-4.08c-.18,0-.16-.1-.19-.2-.31-.9-.81-1.73-1.47-2.41-1.38-1.38-3.27-2.12-5.22-2.03-2.09,0-4.07,.88-5.46,2.45-1.42,1.66-2.18,3.79-2.14,5.98-.05,2.18,.71,4.31,2.14,5.97,1.39,1.55,3.37,2.45,5.46,2.46h.1c1.52,.02,3.01-.42,4.27-1.27,1.14-.77,1.99-1.9,2.41-3.2,.01-.12,.11-.21,.23-.2h3.83c.14,0,.3,0,.29,.23"/>
                            <path d="M121.73,24.78c-6.7-.15-12.02-5.69-11.88-12.39C109.71,5.69,115.03,.15,121.73,0c3.11-.09,6.13,1.12,8.33,3.32,1.47,1.45,2.45,3.31,2.83,5.34h-4.43c-.28-.98-.8-1.88-1.51-2.62-1.37-1.41-3.26-2.16-5.22-2.08-2.09-.02-4.09,.88-5.47,2.45-1.42,1.66-2.18,3.79-2.14,5.98-.05,2.18,.71,4.31,2.14,5.97,1.39,1.56,3.37,2.45,5.46,2.46h.1c1.52,.02,3.01-.42,4.27-1.27,1.19-.8,2.07-1.99,2.48-3.37h4.27c-.64,4.9-5.43,8.61-11.16,8.61"/>
                            <path d="M41.27,24.78c-6.84,0-12.38-5.55-12.38-12.39,0-3.28,1.31-6.43,3.63-8.75,4.84-4.84,12.68-4.84,17.52,0,4.84,4.84,4.84,12.68,0,17.52h0c-2.32,2.33-5.48,3.64-8.77,3.63m0-20.8c-4.65,0-8.41,3.78-8.4,8.42,0,4.65,3.78,8.41,8.42,8.4,4.64,0,8.4-3.77,8.4-8.41,0-4.65-3.78-8.41-8.42-8.41"/>
                            <path d="M94.18,24.78c-2.63,.04-5.15-1.03-6.95-2.94-1.84-2.07-2.83-4.77-2.75-7.54V.74c0-.1,.08-.18,.18-.18,0,0,0,0,.01,0h3.77c.1,0,.19,.07,.19,.17,0,0,0,0,0,.01V14.19c-.08,1.73,.44,3.43,1.46,4.83,.76,.94,1.83,1.57,3.02,1.76,1.9,.25,3.8-.42,5.13-1.8,1.06-1.38,1.61-3.08,1.55-4.82V.74c0-.1,.08-.18,.18-.18h3.78c.1,0,.18,.08,.18,.18V14.34c0,5.85-4.27,10.43-9.72,10.43"/>
                            <path d="M63.74,20.29l9.78-11.75c.06-.08,.05-.2-.03-.27-.03-.03-.07-.04-.11-.04h-4.46c-.06,0-.11,.03-.14,.07l-10.47,12.42c-.05,.07-.08,.16-.09,.25v3.05c0,.11,.09,.19,.19,.19h19.01c.1,0,.18-.09,.18-.19v-3.2c0-.1-.08-.18-.18-.18h-13.53c-.1,0-.19-.07-.19-.17,0-.05,.02-.1,.05-.14"/>
                            <rect x="58.21" y=".56" width="19.39" height="3.58" rx=".19" ry=".19"/>
                          </g>
                        </g>
                      </g>
                    </svg>
                    <p class="cozuchi-btn__p fw-medium m-0">公式サイトへ</p>
                    <svg id="Layer_2" class="btn__icon ml-0" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.32 15.32">
                      <defs>
                        <style>
                          .cls-1 {
                            fill: #fff;
                          }
                        </style>
                      </defs>
                      <g id="design">
                        <path class="cls-1" d="M1.28,15.32c-.34,0-.64-.13-.89-.38-.26-.26-.38-.55-.38-.89V1.28C0,.94,.13,.64,.38,.38c.26-.26,.55-.38,.89-.38H6.36V1.28H1.28V14.05H14.05v-5.09h1.28v5.09c0,.34-.13,.64-.38,.89-.26,.26-.55,.38-.89,.38H1.28Zm4.3-4.66l-.89-.92L13.15,1.28h-4.66V0h6.83V6.83h-1.28V2.19L5.58,10.66Z"/>
                      </g>
                    </svg>
                </a>
            </div>
        </section>
        <!-- Pick up of COZUCHI FUND -->
        </div>
    </section>
    <!-- COZUCHI -->

    <!-- Section Partners -->
    <?php render_partial('template-parts/section-partner.php') ?>
    <!-- Section Partners -->

    <!-- KABUKIX -->
    <section class="position-relative bg-second section-kabukix" style="display:none !important">
        <div class="container-fluid text-center page-service__number">
            <h5 id="KABUKIX" class="page-service__index ff-cormorant fw-regular d-inline-block color-white mb-0" data-aos="fade-up"><span class="kabukix">02</span></h5>
        </div>
        <div class="text-center service__kabukix-title position-relative" data-aos="fade-up">
            <img class="service__couzuchi-title__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/kabukix_logo_w.png" alt="KABUKI">
        </div>

        <div class="container__kabukix container__1366">
            <div class="section-service__article">
                <div class="container-fluid md:pr-0">
                    <div class="article-row md:d-flex align-items-center page-service__row ml-auto">
                        <div class="article-row__content fw-medium kabukix-content">
                            <div class="article-row__content-text color-white" data-aos="fade-up">
                                <h3 class="fw-medium md:text-left text-center md:pt-3">テクノロジーで、<br class="md:d-block d-none">不動産やコンテンツに新しい光を。</h3>
                                <div class="text-justify md:pt-1">
                                    <p class="m-0">
                                      維持することが経済的に難しいという理由で消えていく建築や、文化遺産。もしくは、そもそも空想上の世界の話で、現実的には建築できないもの。日本には世界に誇るコンテンツがたくさんあります。
                                    </p>
                                    <p class="m-0">
                                      経済的、物理的に困難であったものを、ブロックチェーンなどの最新テクノロジーを利用することで、新しい体験を創り出し、新しいマーケットを作っていきます。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="article-row__image" data-aos="fade-up">
                            <img class="w-full p-0" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/gettyimages-1299476498-2048x2048.jpg" alt="KABUKIX">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="kabukix-wrapper position-relative p-0 color-white" data-aos="fade-up">
            <div class="section-heading d-flex align-items-end bg-second pt-0">
                <div class="section-heading__square"></div>
            </div>
            <div class="container-fluid container__1366" data-aos="fade-up">
                <div class="service__cozuchi-title">
                    <h3 class="h1__title__1 ff-cormorant fw-semibold"><i>Project of</i></h3>
                    <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/kabukix_logo_w.png" alt="KABUKIX">
                </div>
            </div>

            <div class="list-service container__1366">
                <div class="list-service__item">
                    <div class="container-fluid">
                        <div class="row row--no-spacing page-service__row list-service-kabukix-tilte">
                            <div class="list-service__col" data-aos="fade-up">
                                <h6 class="ff-second fw-bold list-service__h6-kabukix md:d-none md:text-left text-center" data-aos="fade-up">
                                    中銀カプセルタワービル<br>
                                        再現プロジェクト
                                </h6>
                                <img class="list-service__img w-full mb-2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/meta2.jpeg" alt="Laetoli - Project of KABUKIX">
                                <p class="list-service__img-note fw-medium md:text-right text-center mb-0">メタバース上での使用</p>
                            </div>
                            <div class="list-service__col">
                                <div class="list-service__content ml-auto">
                                    <h6 class="ff-second fw-bold list-service__h6-kabukix md:d-block d-none" data-aos="fade-up">
                                        中銀カプセルタワービル <br>
                                        再現プロジェクト
                                    </h6>
                                    <div class="section-message__wrapper list-service-kabukix" data-aos="fade-up">
                                        <div class="fw-medium md:pt-0 pt-3">
                                            <p class="kabukix-project-content mb-0">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/crossline.svg" alt="" width="15px" height="15px">
                                                中銀カプセルタワービルとは
                                            </p>
                                            <p class="kabukix-project-content__p mb-0">
                                                黒川紀章氏が設計した「メタボリズム」の代表作として世界的に有名な名建築です。
                                            </p>
                                            <p class="kabukix-project-content mb-0">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/crossline.svg" alt="" width="15px" height="15px">
                                                「老朽化問題」の観点から、2022年4月より解体中
                                            </p>
                                            <p class="kabukix-project-content mb-0">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/crossline.svg" alt="" width="15px" height="15px">
                                                黒川紀章建築都市設計事務所とデジタルにて保存に取り組む協定を正式に締結
                                            </p>
                                            <p class="kabukix-project-content mb-0">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/crossline.svg" alt="" width="15px" height="15px">
                                                ブロックチェーン、NFTを活用することで現実空間・仮想空間で中銀カプセルタワービルの再現を目指す
                                            </p>
                                            <p class="kabukix-project-content__p mb-0 md:mt-1">
                                                現実空間ではカプセルを用いた様々な事業展開が可能、仮想空間では自由なカスタマイズが可能
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="list-image-project page-" data-aos="fade-up">
                    <div class="list-image-project__img">
                        <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/project-img-1.jpg" alt="KABUKIX">
                        <p class="fw-medium">外観スケッチ</p>
                    </div>
                    <div class="list-image-project__img">
                        <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/project-img-2.jpg" alt="KABUKIX">
                        <p class="fw-medium">内観スケッチ</p>
                    </div>
                    <div class="list-image-project__img">
                        <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service/300507218_631077385035133_758628162607392449_n.jpg" alt="KABUKIX">
                        <p>事業への活用例 カプセルを用いたリゾート事業</p>
                    </div>
                </div>

                <div class="text-center kabukix-btn" data-aos="fade-up">
                    <a class="btn btn--gray btn--rounded cozuchi-btn btn--hover" href="https://www.kabuki-x.com/" target="_blank">
                        <svg class="cozuchi-btn__img" version="1.0" xmlns="http://www.w3.org/2000/svg" width="100px" height="17px" viewBox="0 0 1667.000000 271.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,271.000000) scale(0.100000,-0.100000)" stroke="none">
                            <path d="M3110 1448 c-377 -666 -700 -1237 -718 -1270 l-33 -58 171 2 172 3
                            516 916 c368 653 519 912 524 900 4 -9 116 -398 248 -866 133 -467 248 -874
                            256 -903 l15 -52 166 0 c128 0 164 3 160 13 -6 15 -756 2451 -769 2495 -5 17
                            -12 32 -16 32 -4 -1 -315 -546 -692 -1212z"/>
                            <path d="M14470 2571 c0 -11 388 -772 399 -784 7 -7 267 273 278 299 2 7 -50
                            120 -116 253 l-121 241 -220 0 c-127 0 -220 -4 -220 -9z"/>
                            <path d="M15659 1990 c-299 -325 -545 -595 -547 -600 -2 -6 144 -293 325 -640
                            l328 -630 223 0 222 0 -26 53 c-37 72 -503 966 -575 1103 l-59 111 543 588
                            c298 323 544 592 545 596 2 5 -95 9 -216 9 l-219 0 -544 -590z"/>
                            <path d="M184 1348 l-160 -1223 145 -3 c79 -1 146 0 149 3 3 3 43 289 88 637
                            46 347 84 636 86 643 2 7 233 -279 514 -634 l510 -646 192 -3 c106 -1 192 0
                            192 3 0 3 -239 301 -530 661 -292 360 -531 658 -533 662 -1 5 111 112 248 238
                            138 126 411 376 608 557 l357 327 -197 -1 -198 0 -575 -544 c-316 -299 -575
                            -543 -577 -542 -1 1 29 241 68 532 38 291 69 535 69 542 0 10 -33 13 -148 13
                            l-148 0 -160 -1222z"/>
                            <path d="M5500 2564 c0 -11 -311 -2379 -316 -2411 l-6 -33 373 0 c399 0 543 9
                            679 41 320 75 518 333 523 679 3 257 -103 427 -328 524 l-75 33 62 23 c86 31
                            141 64 198 120 66 64 106 129 137 225 23 69 26 98 27 210 1 153 -19 233 -82
                            330 -100 154 -237 230 -457 255 -96 10 -735 14 -735 4z m774 -294 c231 -90
                            287 -418 105 -615 -99 -107 -194 -134 -505 -142 l-220 -6 53 389 c28 214 52
                            393 53 397 0 5 102 7 228 5 209 -4 232 -6 286 -28z m-111 -1034 c220 -61 331
                            -242 288 -471 -33 -176 -145 -299 -321 -349 -73 -21 -258 -36 -457 -36 -140 0
                            -163 2 -163 15 0 9 25 201 55 429 30 227 55 419 55 426 0 19 464 8 543 -14z"/>
                            <path d="M7716 2548 c-8 -36 -174 -1288 -192 -1443 -23 -204 -24 -462 -1 -545
                            55 -205 199 -366 397 -444 313 -123 741 -84 1011 93 192 127 299 287 373 562
                            44 166 64 290 161 1024 52 396 97 732 100 748 l5 27 -150 0 -149 0 -6 -32 c-3
                            -18 -48 -352 -100 -743 -107 -800 -105 -788 -146 -945 -59 -228 -155 -364
                            -317 -448 -104 -54 -175 -72 -317 -78 -410 -19 -617 208 -574 630 10 102 195
                            1523 205 1584 l6 32 -151 0 c-148 0 -151 0 -155 -22z"/>
                            <path d="M10450 2564 c0 -11 -311 -2379 -316 -2411 l-6 -33 150 0 150 0 10 73
                            c6 39 43 322 82 627 39 305 74 563 78 573 6 14 119 -123 517 -627 l510 -645
                            193 -1 c157 0 192 2 185 13 -4 7 -246 307 -537 666 l-529 653 34 33 c19 17
                            275 252 569 520 294 268 553 505 575 526 l40 39 -195 0 -195 0 -575 -544
                            c-316 -299 -576 -541 -578 -537 -2 6 117 940 134 1044 l6 37 -151 0 c-83 0
                            -151 -3 -151 -6z"/>
                            <path d="M12916 2528 c-3 -24 -73 -560 -156 -1193 -82 -632 -152 -1165 -155
                            -1182 l-6 -33 155 0 154 0 6 38 c9 58 316 2390 316 2402 0 6 -54 10 -154 10
                            l-154 0 -6 -42z"/>
                            <path d="M14350 589 c-184 -209 -352 -400 -373 -425 l-39 -44 224 0 223 0 230
                            261 c127 144 230 264 230 268 0 12 -149 321 -155 321 -3 -1 -156 -172 -340
                            -381z"/>
                            </g>
                        </svg>
                        <p class="cozuchi-btn__p fw-medium m-0">公式サイトへ</p>
                        <svg  class="btn__icon ml-0" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.32 15.32">
                          <defs>
                            <style>
                              .cls-1 {
                                fill: #737372;
                              }
                            </style>
                          </defs>
                          <g id="design">
                            <path class="cls-1" d="M1.28,15.32c-.34,0-.64-.13-.89-.38-.26-.26-.38-.55-.38-.89V1.28C0,.94,.13,.64,.38,.38c.26-.26,.55-.38,.89-.38H6.36V1.28H1.28V14.05H14.05v-5.09h1.28v5.09c0,.34-.13,.64-.38,.89-.26,.26-.55,.38-.89,.38H1.28Zm4.3-4.66l-.89-.92L13.15,1.28h-4.66V0h6.83V6.83h-1.28V2.19L5.58,10.66Z"/>
                          </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- KABUKIX -->

    <!-- Section Bottom -->
    <?php render_partial('template-parts/section-bottom.php') ?>
    <!-- Section Bottom -->


</main>

<?php get_footer(); ?>