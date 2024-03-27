<?php wp_footer(); ?>
<footer id="footer" class="footer bg-dark color-white position-relative">
    <div class="container-fluid">
        <img class="footer__logo" src="<?= get_stylesheet_directory_uri(); ?>/assets/images/logo-white.svg" alt="Laeloti" width="143px" height="25px">
        <div class="row footer__row">
            <div class="md:col-3 col-5">
                <ul class="footer__menu list-style-none ff-second fw-medium">
                    <li><a href="<?= get_bloginfo('url') ?>/company">Company</a></li>
                    <li><a href="<?= get_bloginfo('url') ?>/service">Service</a></li>
                    <li><a href="<?= get_bloginfo('url') ?>/sustainability">Sustainability</a></li>
                    <li><a href="<?= get_bloginfo('url') ?>/news">News</a></li>
                    <li><a href="<?= get_bloginfo('url') ?>/recruit">Recruit</a></li>
                    <li><a href="https://laetolicompany.zendesk.com/hc/ja/requests/new" target="_blank">Contact Us</a></li>
                    <li><a href="<?= get_bloginfo('url') ?>/privacy-policy">Privacy Policy</a></li>
                    <li><a href="javascript:void(0);" onclick="navigateToCompanyPolicyAndScroll()">Company Policy</a></li>
                </ul>
            </div>
            <div class="md:col-5 col-7">
                <ul class="footer__menu-underline list-style-none">
                    <li><a href="<?= get_bloginfo('url') ?>/company/law">不動産特定共同事業法とは</a></li>
                    <li><a href="<?= get_bloginfo('url') ?>/service/business-partners">For Business Partners</a></li>
                    <li><a href="<?= get_bloginfo('url') ?>/company#publicNotice" >電子公告・決算公告</a></li>
                </ul>
            </div>
            <div class="md:col col-12 ml-auto">
                <div class="footer-service">
                    <h4 class="footer-service__title fw-medium ff-second">
                        Service Websites
                        <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/icons/icon-external-link.svg" alt="" width="15px" height="15px">
                    </h4>
                    <ul class="footer-service__ul list-style-none">
                        <li>
                            <a href="https://cozuchi.com/ja/" target="_blank">
                                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/home/logo-cozuchi.svg" alt="COZUCHI">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.kabuki-x.com/" target="_blank">
                                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/home/logo-kabukix.svg" alt="KABUKI X">
                            </a>
                        </li>
                        <li>
                            <a href="https://treex.jp/ja/" target="_blank">
                                <img src="<?= get_stylesheet_directory_uri(); ?>/assets/images/home/logo-treex.svg" alt="TREEX">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="row justify-content-space-between">
                <div class="md:col-10 col-12">
                    <p class="copyright__text md:mb-0">宅地建物取引業&nbsp;&nbsp;&nbsp;東京都知事（5）77822 号 /
                        <br class="md:d-none"> 不動産特定共同事業&nbsp;&nbsp;&nbsp;東京都知事 第 60 号 /
                        <br class="md:d-none"> 第二種金融商品取引業&nbsp;&nbsp;&nbsp;関東財務局長（金商）第 740 号
                    </p>
                </div>
                <div class="md:col-2 col-12 md:text-right">
                    <p class="copyright__label mb-0">© LAETOLI</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a id="backToTop" class="ff-second fw-medium" href="">
          <div class="circle-wrapper">
            <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/icons/icon-arrow-top.svg'); ?>" alt="" width="14px" height="7px">
            Back to Top
            <svg viewBox="0 0 122 122" width="122" height="122" class="circle-mask">
              <circle vector-effect="non-scaling-stroke" cx="61" cy="61" r="60" class="circle__progress circle__progress--path"></circle>
            </svg>
            <svg viewBox="0 0 122 122" width="122" height="122" class="circle-border">
              <circle vector-effect="non-scaling-stroke" cx="61" cy="61" r="60" class="circle__progress circle__progress--path"></circle>
            </svg>
          </div>
        </a>
    </div>
    <div class="footer-contact md:d-none d-block">
        <div class="container">
            <a class="btn btn--gray" href="https://laetolicompany.zendesk.com/hc/ja/requests/new" target="_blank">Contact Us</a>
        </div>
    </div>
</footer>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
<!-- <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/globular-animation.js"></script> -->
<script>
function navigateToCompanyPolicyAndScroll() {
  var destinationURL = 'https://laetoli.jp/privacy-policy'; 

  var newWindow = window.open(destinationURL);

  newWindow.onload = function() {
    var targetSection = newWindow.document.getElementById('companyPolicy'); 
    if (targetSection) {
      targetSection.scrollIntoView({ behavior: 'smooth' });
    }
  };
}
</script>
</body>

</html>