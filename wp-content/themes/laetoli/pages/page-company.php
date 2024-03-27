<?php
/*
Template Name: Page Company
*/
$ogb = array(
  'image' => get_stylesheet_directory_uri().'/assets/images/221208_LAETOLI_OGP_thumbnail_Company.jpeg',
  'title' => 'Company',
  'description' => 'COZUCHIを運営するLAETOLI株式会社の会社概要、代表メッセージ、メンバー紹介、沿革等をご紹介します。不動産から、新しいエコノミーをつくる。社会にとって価値があると思えるものに投資をすることで、精神的な豊かさと金銭的な豊かさが循環する仕組みを作りたい。'
);
set_ogb_page($ogb);
?>
<?php 
  get_header(); 
?>

<main id="main" class="main page-company">
    <section class="section-heading position-relative" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company/img-banner.jpeg)">
        <div class="d-flex align-items-end">
            <h1 class="section-heading__title ff-second fw-bold mb-0 color-white">Company</h1>
            <div class="section-heading__square bg-white"></div>
        </div>
    </section>

    <!-- CEO Message -->
    <section id="ceoMessage" class="section-message section-square">
        <div class="section-square__row d-flex flex-wrap position-relative">
            <div class="section-square__col">
                <div class="container-fluid text-center">
                    <h5 class="page-company__index ff-cormorant fw-regular d-inline-block mb-0" data-aos="fade-up"><span>01</span></h5>
                </div>
            </div>
            <div class="section-square__col">
                <div class="container-fluid container-fluid--title" data-aos="fade-up">
                    <h2 class="page-company__title ff-second fw-medium">CEO<br>
                        <i class="ff-cormorant fw-semibold">Message</i>
                    </h2>
                </div>
            </div>
            <div class="section-square__col">
                <img class="section-message__img w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company/img-message-1-100.jpg" alt="Laetoli CEO Message">
                <img class="section-message__img w-full md:d-block d-none" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company/img-message-2-100.jpg" alt="Laetoli CEO Message">
            </div>
            <div class="section-square__col">
                <div class="container-fluid">
                    <h6 class="page-company__subtitle fw-medium mb-0" data-aos="fade-up">
                        代表メッセージ
                    </h6>
                    <div class="section-message__wrapper">
                        <h4 class="fw-medium" data-aos="fade-up">不動産から、<br>新しいエコノミーをつくる。</h4>
                        <div class="section-message__content fw-medium" data-aos="fade-up">
                            <p>
                                社会にとって価値があると思えるものに投資をすることで、精神的な豊かさと金銭的な豊かさが循環する仕組みを作りたい。そう考え、不動産クラウドファンディングサービス「COZUCHI」を立ち上げました。
                            </p>
                            <p>日本の不動産市場は「定量的な評価」をもとに不動産価値を算出する慣習が根付いており、経年劣化などで価格が決まるといったような傾向があります。では古い建物に価値がないのか、綺麗な新しい建物だけが良い不動産なのか？私たちはそうは思いません。
                            </p>
                            <p>紡がれている文化、そこに住む人々、そこで生まれるさまざまな活動。私たちは、こうした目に見えない定性的な価値に投資ができる仕組みを作ることで、文化を守り、人を育て、まちを健やかに発展させていきたいと思っています。
                            </p>
                            <p>未来に残すべき価値をちゃんと残せるように、そして地域活性化や社会課題解決につながるように。利益と価値の共存。そんな社会の実現に向け、日々取り組んでまいります。
                            </p>
                            <p>
                                <br>
                                代表取締役 CEO　<br>
                                武藤 弥
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CEO Message -->

    <!-- Board Member -->
    <section class="section-member section-square section-square--right bg-gray-light fw-medium" data-aos="fade-up">
        <div class="section-square__banner bg-gray-light">
            <img class="w-full img-parallax" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company/img-member-banner.jpeg" alt="Laetoli Board Member">
        </div>
        <div id="boardMember" class="section-square__row d-flex flex-wrap">
            <div class="section-square__col text-center">
                <div class="container-fluid">
                    <h5 class="page-company__index ff-cormorant fw-regular text-center d-inline-block mb-0" data-aos="fade-up"><span>02</span></h5>
                </div>
            </div>
            <div class="section-square__col">
                <div class="container-fluid container-fluid--custom" data-aos="fade-up">
                    <h2 class="page-company__title ff-second fw-medium">Board<br>
                        <i class="ff-cormorant fw-semibold">Member</i>
                    </h2>
                    <h6 class="page-company__subtitle fw-medium mb-0" data-aos="fade-up">
                        メンバー紹介
                    </h6>
                </div>
            </div>
        </div>
        <div class="container-fluid container-fluid--custom">
            <div class="list-member page-company__wrapper">
                <div class="row list-member__row align-items-center">
                    <div class="md:col-8 col-12">
                        <div class="list-member__content">
                            <p class="section-member__subtitle" data-aos="fade-up">代表取締役CEO</p>
                            <p class="section-member__title" data-aos="fade-up">
                                武藤 弥
                                <i class="ff-cormorant fw-semibold">Wataru Mutoh</i>
                            </p>
                            <p class="section-member__text mb-0 md:d-block d-none" data-aos="fade-up">
                                2001年早稲田大学理工学部建築学科修士課程了。同年リクルート創業者江副浩正氏が経営する不動産ディベロッパーにて開発業務等に従事。その後独立し、2003年家具ブランドIDEEとともに、アールプロジェクト株式会社を設立し、取締役就任。リノベーション事業や商業施設の開発事業等を行う。2009年株式会社シェアカンパニー設立、代表取締役に就任。シェアハウスやシェアオフィス、ホテルの開発運営を行う。同時期2011年株式会社TRIAD設立、取締役副社長に就任。機動的な投資資金を運用し、様々な不動産投資案件を手掛ける。不動産投資分野に豊富な経験とネットワークを有する。
                            </p>
                        </div>
                    </div>
                    <div class="md:col-4 col-12">
                        <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company/img-member-1.jpg" alt="Laetoli Board Member" data-aos="fade-up">
                    </div>
                    <div class="col-12 md:d-none">
                        <div class="list-member__content mt-4">
                            <p class="section-member__text mb-0" data-aos="fade-up">
                              2001年早稲田大学理工学部建築学科修士課程了。同年リクルート創業者江副浩正氏が経営する不動産ディベロッパーにて開発業務等に従事。その後独立し、2003年家具ブランドIDEEとともに、アールプロジェクト株式会社を設立し、取締役就任。リノベーション事業や商業施設の開発事業等を行う。2009年株式会社シェアカンパニー設立、代表取締役に就任。シェアハウスやシェアオフィス、ホテルの開発運営を行う。同時期2011年株式会社TRIAD設立、取締役副社長に就任。機動的な投資資金を運用し、様々な不動産投資案件を手掛ける。不動産投資分野に豊富な経験とネットワークを有する。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row list-member__row align-items-center">
                    <div class="md:col-8 col-12">
                        <div class="list-member__content">
                            <p class="section-member__subtitle" data-aos="fade-up">取締役CFO</p>
                            <p class="section-member__title" data-aos="fade-up">
                                村田 哲英
                                <i class="ff-cormorant fw-semibold">Akihide Murata</i>
                            </p>
                            <p class="section-member__text mb-0 md:d-block d-none" data-aos="fade-up">
                                慶応義塾大学商学部卒業、大手外資系不動産ファンドや大手総合商社系再生可能エネルギー開発会社など複数企業で財務経理業務に従事。直近ではバイオベンチャー企業でIPOや海外PO、CB発行などのエクィティファイナンス実務、子会社役員・監査役などを経験。財務・経営企画領域で豊富な経験を有する。
                            </p>
                        </div>
                    </div>
                    <div class="md:col-4 col-12">
                        <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company/img-member-2.jpg" alt="Laetoli Board Member" data-aos="fade-up">
                    </div>
                    <div class="col-12 md:d-none">
                        <div class="list-member__content mt-4">
                            <p class="section-member__text mb-0" data-aos="fade-up">
                                慶応義塾大学商学部卒業、大手外資系不動産ファンドや大手総合商社系再生可能エネルギー開発会社など複数企業で財務経理業務に従事。直近ではバイオベンチャー企業でIPOや海外PO、CB発行などのエクィティファイナンス実務、子会社役員・監査役などを経験。財務・経営企画領域で豊富な経験を有する。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row list-member__row align-items-center">
                    <div class="md:col-8 col-12">
                        <div class="list-member__content">
                            <p class="section-member__subtitle" data-aos="fade-up">取締役</p>
                            <p class="section-member__title" data-aos="fade-up">
                                小林 秀豪
                                <i class="ff-cormorant fw-semibold">Hidetoshi Kobayashi</i>
                            </p>
                            <p class="section-member__text mb-0 md:d-block d-none" data-aos="fade-up">
                                東北大学経済学部卒業、東証一部上場の保証事業やファイナンス事業を行う総合金融会社に就職し主に法務業務を担当。その後、事業会社において経営企画等経験し、証券会社の取締役管理本部長、代表取締役に就任。持株会社において子会社管理や、ファイナンス業務を担当するなど、主に経営企画、法務、財務など幅広い経験を有する。
                            </p>
                        </div>
                    </div>
                    <div class="md:col-4 col-12">
                        <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company/img-member-4.jpg" alt="Laetoli Board Member" data-aos="fade-up">
                    </div>
                    <div class="col-12 md:d-none">
                        <div class="list-member__content mt-4">
                            <p class="section-member__text mb-0" data-aos="fade-up">
                              東北大学経済学部卒業、東証一部上場の保証事業やファイナンス事業を行う総合金融会社に就職し主に法務業務を担当。その後、事業会社において経営企画等経験し、証券会社の取締役管理本部長、代表取締役に就任。持株会社において子会社管理や、ファイナンス業務を担当するなど、主に経営企画、法務、財務など幅広い経験を有する。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row list-member__row align-items-center">
                    <div class="md:col-8 col-12">
                        <div class="list-member__content">
                            <p class="section-member__subtitle" data-aos="fade-up">社外取締役/弁護士</p>
                            <p class="section-member__title" data-aos="fade-up">
                                川中 浩平
                                <i class="ff-cormorant fw-semibold">Kouhei Kawanaka</i>
                            </p>
                            <p class="section-member__text mb-0 md:d-block d-none" data-aos="fade-up">
                                京都大学法学部卒業、2006年弁護士登録。企業法務を中心に取り扱う大手外資系法律事務所（モリソン・フォースター法律事務所（旧・伊藤見富法律事務所））や、金融機関の監督・検査等を手掛ける財務省関東財務局におけるコンプライアンス統括部署の設立メンバーとしての業務を経て、2013年8月に独立。2015年4月、ユナイト法律会計事務所を設立し、代表パートナーに就任。様々なスタートアップ・金融ベンチャー・金融機関に対してリーガル・サービスを提供。
                            </p>
                        </div>
                    </div>
                    <div class="md:col-4 col-12">
                        <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company/img-member-5.jpg" alt="Laetoli Board Member" data-aos="fade-up">
                    </div>
                    <div class="col-12 md:d-none">
                        <div class="list-member__content mt-4">
                            <p class="section-member__text mb-0" data-aos="fade-up">
                                京都大学法学部卒業、2006年弁護士登録。企業法務を中心に取り扱う大手外資系法律事務所（モリソン・フォースター法律事務所（旧・伊藤見富法律事務所））や、金融機関の監督・検査等を手掛ける財務省関東財務局におけるコンプライアンス統括部署の設立メンバーとしての業務を経て、2013年8月に独立。2015年4月、ユナイト法律会計事務所を設立し、代表パートナーに就任。様々なスタートアップ・金融ベンチャー・金融機関に対してリーガル・サービスを提供。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row list-member__row align-items-center">
                    <div class="md:col-8 col-12">
                        <div class="list-member__content">
                            <p class="section-member__subtitle" data-aos="fade-up">監査役</p>
                            <p class="section-member__title" data-aos="fade-up">
                                長坂 英樹
                                <i class="ff-cormorant fw-semibold">Hideki Nagasaka</i>
                            </p>
                            <p class="section-member__text mb-0 mb-0 md:d-block d-none" data-aos="fade-up">
                                大学院修了後、外資系コンサルティング会社（現アクセンチュア）にて会計システムの設計開発を経験したのち、大手外資系会計事務所（現KPMG税理士法人）にて不動産ファンドの税務業務全般に従事。大手外資系不動産ファンドに転身後は住居からホテル、ゴルフ場等幅広い投資案件の会計・税務・監査対応領域を牽引。税務・会計領域で豊富な経験を有する。
                            </p>
                        </div>
                    </div>
                    <div class="md:col-4 col-12">
                        <img class="w-full" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company/img-member-6.jpg" alt="Laetoli Board Member" data-aos="fade-up">
                    </div>
                    <div class="col-12 md:d-none">
                        <div class="list-member__content mt-4">
                            <p class="section-member__text mb-0" data-aos="fade-up">
                                大学院修了後、外資系コンサルティング会社（現アクセンチュア）にて会計システムの設計開発を経験したのち、大手外資系会計事務所（現KPMG税理士法人）にて不動産ファンドの税務業務全般に従事。大手外資系不動産ファンドに転身後は住居からホテル、ゴルフ場等幅広い投資案件の会計・税務・監査対応領域を牽引。税務・会計領域で豊富な経験を有する。
                            </p>
                        </div>
                    </div>
                </div>
				                <div class="row list-member__row align-items-center">
                    <div class="md:col-8 col-12">
                        <div class="list-member__content">
                            <p class="section-member__subtitle" data-aos="fade-up">執行役員CTO</p>
                            <p class="section-member__title" data-aos="fade-up">
                                中西 宣仁
                                <i class="ff-cormorant fw-semibold">Nobuhito Nakanishi</i>
                            </p>
                            <p class="section-member__text mb-0 mb-0 md:d-block d-none" data-aos="fade-up">
                                東京大学工学部卒業。国土交通省、環境省での10数年の勤務を経て、大手インテグレーターに転身。その後活動拠点を海外に移し、デジタルマーケティングやFX等のフィンテックビジネスに携わり、システム設計及び開発をリード。ITプラットフォーム構築に強みを有する。COZUCHIを含むTREEXシステム構築を牽引。
                            </p>
                        </div>
                    </div>
                    <div class="md:col-4 col-12">
                        <img class="w-full" src="https://laetoli.jp/wp-content/uploads/2023/07/中西さん写真白黒_001.jpg" alt="Laetoli Board Member" data-aos="fade-up">
                    </div>
                    <div class="col-12 md:d-none">
                        <div class="list-member__content mt-4">
                            <p class="section-member__text mb-0" data-aos="fade-up">
                                東京大学工学部卒業。国土交通省、環境省での10数年の勤務を経て、大手インテグレーターに転身。その後活動拠点を海外に移し、デジタルマーケティングやFX等のフィンテックビジネスに携わり、システム設計及び開発をリード。ITプラットフォーム構築に強みを有する。COZUCHIを含むTREEXシステム構築を牽引。
                            </p>
                        </div>
                    </div>
                </div>
				                <div class="row list-member__row align-items-center">
                    <div class="md:col-8 col-12">
                        <div class="list-member__content">
                            <p class="section-member__subtitle" data-aos="fade-up">執行役員</p>
                            <p class="section-member__title" data-aos="fade-up">
                                島田 雅己
                                <i class="ff-cormorant fw-semibold">Masami Shimada</i>
                            </p>
                            <p class="section-member__text mb-0 mb-0 md:d-block d-none" data-aos="fade-up">
                                大学卒業後、大手サービサーにてキャリアをスタートし、不動産AM、不動産担保ローン貸付、不動産販売・仲介など不動産・金融業界での豊富な経験を有する。直近では東証1部（在任当時）上場会社にて執行役員に就任し、ソーシャルレンディング商品のスキーム構築、ファンド案件組成を担う。2022年9月よりLAETOLI株式会社に参画し投資運用部門を牽引。
                            </p>
                        </div>
                    </div>
                    <div class="md:col-4 col-12">
                        <img class="w-full" src="https://laetoli.jp/wp-content/uploads/2023/07/島田さん写真白黒-1.jpg" alt="Laetoli Board Member" data-aos="fade-up">
                    </div>
                    <div class="col-12 md:d-none">
                        <div class="list-member__content mt-4">
                            <p class="section-member__text mb-0" data-aos="fade-up">
                                大学卒業後、大手サービサーにてキャリアをスタートし、不動産AM、不動産担保ローン貸付、不動産販売・仲介など不動産・金融業界での豊富な経験を有する。直近では東証1部（在任当時）上場会社にて執行役員に就任し、ソーシャルレンディング商品のスキーム構築、ファンド案件組成を担う。2022年9月よりLAETOLI株式会社に参画し投資運用部門を牽引。
                            </p>
                        </div>
                    </div>
                </div>
				                <div class="row list-member__row align-items-center">
                    <div class="md:col-8 col-12">
                        <div class="list-member__content">
                            <p class="section-member__subtitle" data-aos="fade-up">執行役員CMO</p>
                            <p class="section-member__title" data-aos="fade-up">
                                関井 洸平
                                <i class="ff-cormorant fw-semibold">Kouhei Sekii</i>
                            </p>
                            <p class="section-member__text mb-0 mb-0 md:d-block d-none" data-aos="fade-up">
                                早稲田大学商学部卒業。銀行系大手証券会社で金融商品の個人向けコンサルティングにてキャリアをスタートし、国内IT商社のプロダクトマーケティングのチームを経て、アマゾンジャパンに転身。アマゾンジャパンでは、デジタルマーケティング、新サービスローンチ業務に携わり、顧客体験の改善で社内表彰を受賞。外資小売スタートアップではサービス開発からマーケティング体制の構築を経験し、2023年1月よりLAETOLI株式会社に参画し戦略マーケティング部門を牽引。
                            </p>
                        </div>
                    </div>
                    <div class="md:col-4 col-12">
                        <img class="w-full" src="https://laetoli.jp/wp-content/uploads/2023/07/関井さん写真白黒-1.jpg" alt="Laetoli Board Member" data-aos="fade-up">
                    </div>
                    <div class="col-12 md:d-none">
                        <div class="list-member__content mt-4">
                            <p class="section-member__text mb-0" data-aos="fade-up">
                                早稲田大学商学部卒業。銀行系大手証券会社で金融商品の個人向けコンサルティングにてキャリアをスタートし、国内IT商社のプロダクトマーケティングのチームを経て、アマゾンジャパンに転身。アマゾンジャパンでは、デジタルマーケティング、新サービスローンチ業務に携わり、顧客体験の改善で社内表彰を受賞。外資小売スタートアップではサービス開発からマーケティング体制の構築を経験し、2023年1月よりLAETOLI株式会社に参画し戦略マーケティング部門を牽引。
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="section-member__line mt-0 mb-0">

            <div class="list-advisor page-company__wrapper">
                <div class="list-advisor__item">
                    <h4 class="list-advisor__title ff-second" data-aos="fade-up">Special Advisor</h4>
                    <p class="section-member__subtitle" data-aos="fade-up">
                        顧問
                    </p>
                    <p class="section-member__title" data-aos="fade-up">
                        中村 英隆 <i class="ff-cormorant fw-semibold">Hidetaka Nakamura</i>
                    </p>
                    <p class="section-member__text mb-0" data-aos="fade-up">
                        2000年早稲田大学理工学部建築学科修士課程了。同年電通入社。2015年同社部長、2017年同社GMを経て 2020年独立。TVCM、グラフィックをはじめ、リブランディング、マーケティングコンサル、店舗設計、アトラクション設計、ショートフィルム制作など、クリエーティブディレクション領域は多岐にわたる。カンヌ、NY ADC、ADFEST、ACC、広告電通賞など国内外のさまざまな賞を受賞。クリエーティブディレクター/一級建築士。
                    </p>
                </div>
                <div class="list-advisor__item">
                    <h4 class="list-advisor__title ff-second" data-aos="fade-up">Legal Advisor</h4>
                    <div class="list-advisor__content" data-aos="fade-up">
                        <p class="section-member__text">
                            当社は大手法律事務所のアンダーソン・毛利・友常法律事務所及びTMI総合法律事務所とそれぞれ法務に関する顧問契約を締結しております。両事務所は国内最大規模の総合法律事務所です。
                        </p>
                        <p class="section-member__text md:mb-2">
                          当社のコア事業である不動産クラウドファンディングから日常の企業活動に至るまで、法律に関わる重要な事象について、深い知見と豊富な実績を有する両法律事務所から適宜助言を受け、当社の事業経営に活かしております。
                        </p>
                    </div>
                    <div class="list-advisor__content">
                        <p class="section-member__title" data-aos="fade-up">アンダーソン・毛利・<br class="md:d-none">友常法律事務所</p>
                        <p class="section-member__text mb-0" data-aos="fade-up">世界的な大企業から新興のベンチャー企業まで、多種多様なクライアントに生起するさまざまな法律問題に対し、迅速かつ的確に対応。企業活動に関わるあらゆる専門分野について豊富なノウハウと実績を有するマルチリンガルの弁護士が数多く所属。</p>
                    </div>
                    <div class="list-advisor__content">
                        <p class="section-member__title" data-aos="fade-up">TMI総合法律事務所</p>
                        <p class="section-member__text" data-aos="fade-up">案件の国際化と複雑化が進む時代の先を読みながら、常にクライアントから選ばれる総合法律事務所の姿を追求。新しい時代への対応、専門性の確立、専門領域の総合化といった基本コンセプトを踏まえながらも、斬新かつ意欲的な挑戦を続ける姿勢に定評がある。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Board Member -->

    <!-- Company Profile -->
    <section class="section-profile section-square bg-gray-lighter fw-medium">
        <div class="bg-gray-light">
          <div class="section-square__banner bg-gray-lighter" data-aos="fade-up">
              <img class="w-full img-parallax" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/company/img-banner-bottom.jpeg" alt="Laetoli Company Profile">
          </div>
        </div>
        <div id="companyProfile" class="section-square__row d-flex flex-wrap">
            <div class="section-square__col text-center">
                <div class="container-fluid">
                    <h5 class="page-company__index ff-cormorant fw-regular text-center d-inline-block mb-0" data-aos="fade-up"><span>03</span></h5>
                </div>
            </div>
            <div class="section-square__col">
                <div class="container-fluid section-profile__container">
                    <h3 class="page-company__title ff-second fw-medium text-right mb-0" data-aos="fade-up">Company<br>
                        <i class="ff-cormorant fw-semibold">Profile</i>
                    </h3>
                    <h6 class="page-company__subtitle fw-medium mb-0" data-aos="fade-up">
                        会社概要
                    </h6>
                    <div class="profile-wrapper" data-aos="fade-up">
                        <div class="row profile-wrapper__row">
                            <div class="md:col-2 col-3">
                                <p class="mb-0">会社名</p>
                            </div>
                            <div class="md:col-10 col-9">
                                <p class="mb-0">LAETOLI株式会社</p>
                            </div>
                        </div>
                        <div class="row profile-wrapper__row">
                            <div class="md:col-2 col-3">
                                <p class="mb-0">設立</p>
                            </div>
                            <div class="md:col-10 col-9">
                                <p class="mb-0">1999 年 5 月 20 日</p>
                            </div>
                        </div>
                        <div class="row profile-wrapper__row">
                            <div class="md:col-2 col-3">
                                <p class="mb-0">資本金</p>
                            </div>
                            <div class="md:col-10 col-9">
                                <p class="mb-0">１ 億円</p>
                            </div>
                        </div>
                        <div class="row profile-wrapper__row">
                            <div class="md:col-2 col-3">
                                <p class="mb-0">代表者</p>
                            </div>
                            <div class="md:col-10 col-9">
                                <p class="mb-0">代表取締役　武藤 弥</p>
                            </div>
                        </div>
                        <div class="row profile-wrapper__row">
                            <div class="md:col-2 col-3">
                                <p class="mb-0">登録免許</p>
                            </div>
                            <div class="md:col-10 col-9">
                                <p class="mb-0">宅地建物取引業　<br class="md:d-none">東京都知事（5）77822 号<br>
                                    不動産特定共同事業　<br class="md:d-none">東京都知事 第 60 号<br>
                                    第二種金融商品取引業　<br class="md:d-none">関東財務局長（金商）第 740 号
                                </p>
                            </div>
                        </div>
                        <div class="row profile-wrapper__row md:mt-1">
                            <div class="md:col-2 col-3">
                                <p class="mb-0">所在地</p>
                            </div>
                            <div class="md:col-10 col-9">
                                <p class="md:mb-1">〒107-0062
                                    <br>
                                    東京都港区南青山二丁目 26 番 1 号D-LIFEPLACE南青山 2F
                                </p>
                                <a class="link-map" href="https://www.google.com/maps/place/Jun.+D-LIFEPLACE%E5%8D%97%E9%9D%92%E5%B1%B1/@35.669832,139.717455,17z/data=!4m5!3m4!1s0x0:0x72497b507c387e3!8m2!3d35.6698323!4d139.7174547?hl=ja" target="_blank">
                                    <span>MAP</span>
                                    <img class="link-map__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/icon-external-link-gray.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid container-fluid--custom">
            <div class="history-wrapper page-company__wrapper">
                <h4 class="history-wrapper__title ff-second fw-bold" data-aos="fade-up">History</h4>
                <p class="page-company__subtitle position-static mb-0" data-aos="fade-up">沿革</p>
                <ul class="list-history list-style-none">
                    <li class="md:d-flex" data-aos="fade-up">
                        <p class="list-history__year color-white ff-cormorant mb-0">2023</p>
                        <ul class="list-history__details list-style-none fs-3">
                            <li class="d-flex">
                                <span class="list-history__month">12月</span>
                                <span class="list-history__text">COZUCHI累計調達 500億円突破</span>
                            </li>
                            <li class="d-flex">
                                <span class="list-history__month">12月</span>
                                <span class="list-history__text">COZUCHI１案件調達 110億円達成</span>
                            </li>
                            <li class="d-flex">
                                <span class="list-history__month">4月</span>
                                <span class="list-history__text">COZUCI不動産投資クラウドファンディング累計調達額No.1獲得※1</span>
                            </li>
                        </ul>
                    </li>
                    <li class="md:d-flex" data-aos="fade-up">
                        <p class="list-history__year color-white ff-cormorant mb-0">2022</p>
                        <ul class="list-history__details list-style-none fs-3">
                            <li class="d-flex">
                                <span class="list-history__month">9月</span>
                                <span class="list-history__text">COZUCHI累計調達額 200 億円突破</span>
                            </li>
                            <li class="d-flex">
                                <span class="list-history__month">6月</span>
                                <span class="list-history__text">COZUCHI累計調達額 100 億円突破</span>
                            </li>
                        </ul>
                    </li>
                    <li class="md:d-flex" data-aos="fade-up">
                        <p class="list-history__year color-white ff-cormorant mb-0">2021</p>
                        <ul class="list-history__details list-style-none fs-3">
                            <li class="d-flex">
                                <span class="list-history__month">9月</span>
                                <span class="list-history__text">サービス名称を『WARASHIBE』から『COZUCHI』へリニューアル</span>
                            </li>
                            <li class="d-flex">
                                <span class="list-history__month">8月</span>
                                <span class="list-history__text">社名をLAETOLI株式会社に変更</span>
                            </li>
                        </ul>
                    </li>
                    <li class="md:d-flex" data-aos="fade-up">
                        <p class="list-history__year color-white ff-cormorant mb-0">2019</p>
                        <ul class="list-history__details list-style-none fs-3">
                            <li class="d-flex">
                                <span class="list-history__month">9月</span>
                                <span class="list-history__text">インターネットを活用した不動産小口化商品クラウドファンディングサービス『WARASHIBE』ローンチ</span>
                            </li>
                            <li class="d-flex">
                                <span class="list-history__month">9月</span>
                                <span class="list-history__text">不動産特定共同事業における電子取引業務ライセンス取得</span>
                            </li>
                            <li class="d-flex">
                                <span class="list-history__month">9月</span>
                                <span class="list-history__text">第二種金融商品取引業（関東財務局長（金商）第 740 号）登録</span>
                            </li>
                        </ul>
                    </li>
                    <li class="md:d-flex" data-aos="fade-up">
                        <p class="list-history__year color-white ff-cormorant mb-0">2018</p>
                        <ul class="list-history__details list-style-none fs-3">
                            <li class="d-flex">
                                <span class="list-history__month">9月</span>
                                <span class="list-history__text">社名を株式会社SATASに変更</span>
                            </li>
                        </ul>
                    </li>
                    <li class="md:d-flex" data-aos="fade-up">
                        <p class="list-history__year color-white ff-cormorant mb-0">2008</p>
                        <ul class="list-history__details list-style-none fs-3">
                            <li class="d-flex">
                                <span class="list-history__month">3月</span>
                                <span class="list-history__text">不動産特定共同事業法に基づく投資商品『ゆうゆう俱楽部』ローンチ</span>
                            </li>
                        </ul>
                    </li>
                    <li class="md:d-flex" data-aos="fade-up">
                        <p class="list-history__year color-white ff-cormorant mb-0">2005</p>
                        <ul class="list-history__details list-style-none fs-3">
                            <li class="d-flex">
                                <span class="list-history__month">3月</span>
                                <span class="list-history__text">不動産特定共同事業（東京都知事第 60 号）登録</span>
                            </li>
                        </ul>
                    </li>
                    <li class="md:d-flex" data-aos="fade-up">
                        <p class="list-history__year color-white ff-cormorant mb-0">1999</p>
                        <ul class="list-history__details list-style-none fs-3">
                            <li class="d-flex">
                                <span class="list-history__month">10月</span>
                                <span class="list-history__text">宅地建物取引業（東京都知事第 77822 号）登録</span>
                            </li>
                            <li class="d-flex">
                                <span class="list-history__month">5月</span>
                                <span class="list-history__text">株式会社サタスインテグレイト設立</span>
                            </li>
                        </ul>
                    </li>
                </ul>
                <p class="history-wrapper__note fs-1 mb-0" data-aos="fade-up">(注釈)　　<br class="md:d-none">※電子取引…インターネット上での契約締結を行う取引　　<br class="md:d-none">※クラウドファンディング…不特定多数の人々からインターネットを通して資金を集めること
                <br><span class="history-text-pc-only">※1)調査概要：不動産投資クラウドファンディングサービスにおける市場調査（2023年4月末時点、調査提供：日本マーケティングリサーチ機構）
                </p>
            </div>
        </div>
    </section>
    <!-- Company Profile -->

    <!-- Public Notice -->
    <section id="publicNotice" class="section-notice section-square section-square--right bg-gray-light fw-medium">
        <div class="section-square__banner">
            <div class="section-square__banner-wrapper bg-gray-lighter"></div>
        </div>
        <div class="section-square__row d-flex flex-wrap">
            <div class="section-square__col text-center">
                <div class="container-fluid">
                    <h5 class="page-company__index ff-cormorant fw-regular text-center d-inline-block mb-0" data-aos="fade-up"><span>04</span></h5>
                </div>
            </div>
            <div class="section-square__col">
                <div class="container-fluid section-notice__container">
                    <h3 class="page-company__title ff-second fw-medium" data-aos="fade-up">Public<br>
                        <i class="ff-cormorant fw-semibold">Notice</i>
                    </h3>
                </div>
            </div>
        </div>
        <div class="container-fluid section-notice__container">
            <div class="page-company__wrapper">
                <h6 class="page-company__subtitle fw-medium mb-0 position-statice" data-aos="fade-up">
                    電子公告・決算公告
                </h6>
                <div class="section-notice__content" data-aos="fade-up">
                    <p>当社の公告につきましては、定款の定め（電子公告）に従い、本ウェブサイトに掲載しています。</p>
                    <p>但し、事故その他やむを得ない事由によって 電子公告による公告をすることができない場合は、官報に掲載して行います。</p>
                </div>
                <?php
                    $company_pdf_1 = get_field('company_pdf_1');
                    $is_empty_pdf_1 = true;
                    if($company_pdf_1 && count($company_pdf_1) > 0) {
                      $filtered_arr_pdf_1 = array_filter($company_pdf_1, function($k, $v) {
                          return $k['name'] && $k['file'];
                      }, ARRAY_FILTER_USE_BOTH);
                      $is_empty_pdf_1 = count($filtered_arr_pdf_1) == 0;
                    }

                    $company_pdf_2 = get_field('company_pdf_2');
                    $is_empty_pdf_2 = true;
                    if($company_pdf_2 && count($company_pdf_2) > 0) {
                      $filtered_arr_pdf_2 = array_filter($company_pdf_2, function($k, $v) {
                          return $k['name'] && $k['file'];
                      }, ARRAY_FILTER_USE_BOTH);
                      $is_empty_pdf_2 = count($filtered_arr_pdf_2) == 0;
                    }
                ?>

                <div class="row section-notice__row">
                    <div class="md:col-6 col-12">
                        <div class="box-notice">
                            <h6 class="page-company__subtitle fw-medium text-center" data-aos="fade-up">
                                電子公告
                            </h6>
                            <?php if(!$is_empty_pdf_1): ?>
                              <div class="list-file ml-auto mr-auto">
                                <?php foreach( $company_pdf_1 as $key => $value ):
                                  if($value['name'] && $value['file']):
                                    $file_url = is_int($value['file']) ? wp_get_attachment_url($value['file']) : $value['file']['url'];
                                ?>
                                <div class="list-file__item d-flex align-items-center" data-aos="fade-up">
                                  <img class="list-file__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/icon-pdf.svg" alt="">
                                  <div class="list-file__name fs-3">
                                    <p class="attachment">
                                      <a href="<?= $file_url; ?>" target="_blank"><?= $value['name']; ?></a>
                                    </p>
                                  </div>
                                </div>
                                <?php 
                                  endif;
                                  endforeach;
                                ?>
                              </div>
                            <?php else: ?>
                              <p class="box-notice__text mb-0 text-center" data-aos="fade-up">現在、決算公告以外の公告事項はありません。</p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="md:col-6 col-12">
                        <div class="box-notice">
                            <h6 class="page-company__subtitle fw-medium text-center" data-aos="fade-up">
                                決算公告
                            </h6>
                            <?php if(!$is_empty_pdf_2): ?>
                              <div class="list-file ml-auto mr-auto">
                                  <?php foreach( $company_pdf_2 as $key => $value ): 
                                  if($value['name'] && $value['file']):
                                    $file_url = is_int($value['file']) ? wp_get_attachment_url($value['file']) : $value['file']['url'];
                                ?>
                                <div class="list-file__item d-flex align-items-center" data-aos="fade-up">
                                  <img class="list-file__icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/icon-pdf.svg" alt="">
                                  <div class="list-file__name fs-3">
                                    <p class="attachment">
                                      <a href="<?= $file_url; ?>" target="_blank"><?= $value['name']; ?></a>
                                    </p>
                                  </div>
                                </div>
                                <?php 
                                  endif;
                                  endforeach;
                                ?>
                              </div>
                            <?php elseif(!$is_empty_pdf_1): ?>
                              <p class="box-notice__text mb-0 text-center" data-aos="fade-up">現在、電子公告以外の公告事項はありません</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Public Notice -->

    <!-- Section Banner -->
    <section class="section-banner fw-medium pt-0 color-second">
      <div class="container-fluid">
        <div class="section-banner__wrapper bg-gray-light md:text-center">
          <h3 class="section-banner__title ff-second fw-bold" data-aos="fade-up">Act on Specified Joint<br>Real Estate Ventures</h3>
          <h5 class="section-banner__subtitle fw-medium md:fs-5 fs-base" data-aos="fade-up">不動産特定共同事業法とは</h5>
          <div class="text-center" data-aos="fade-up">
            <a class="btn btn--second btn--rounded btn--hover" href="<?= get_bloginfo('url') ?>/company/law"><span class="position-relative">View More</span><span class="btn__icon btn__icon--arrow"></span></a>
          </div>
        </div>
      </div>
    </section>
    <!-- Section Banner -->

    <!-- Section Bottom -->
    <?php render_partial('template-parts/section-bottom.php') ?>
    <!-- Section Bottom -->

</main>

<?php get_footer();
