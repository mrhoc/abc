'use-strict';

function initialHeightSectionVideoOnSP() {
  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    $('.section-video__wrapper').css({'min-height': window.innerHeight - 160})
  }
}

function initalGlobularAnimation() {
  var script = document.createElement('script');

  script.type = 'text/javascript';
  script.src = `${window.location.href}wp-content/themes/laetoli/assets/js/globular-animation.js`;
  document.body.appendChild(script);
}

function showHideHeaderWhenScroll() {
  const elHeader = $('#header');
  const classHidden = 'header--hidden';
  const elHeaderNav = $('.header-nav');
  const elMain = $('#main');
  const elSectionHeader = $('.section-header');
  const elHeaderMenu = $('.header-menu');

  const offsetTop =
    elSectionHeader && elSectionHeader.length
      ? elMain.offset().top
      : elHeader.outerHeight();
  let { scrollY } = window;

  window.addEventListener('scroll', function () {
    if (elHeaderNav.hasClass('show')) return;

    const hideSectionHeader = function () {
      if (
        elSectionHeader &&
        elSectionHeader.length &&
        elSectionHeader.outerHeight() > elHeader.outerHeight()
      ) {
        // if (!elHeader.hasClass(classHidden)) window.scrollTo(0, 0);
        elSectionHeader.css({ height: elHeader.outerHeight() });
      }
    };
    if (scrollY > window.scrollY) {
      hideSectionHeader();
    }

    if (scrollY < window.scrollY && window.scrollY > offsetTop) {
      if (!elHeader.hasClass(classHidden)) elHeader.addClass(classHidden);
    } else if (elHeader.hasClass(classHidden)) {
      hideSectionHeader();
      elHeader.removeClass(classHidden);
    }

    if (window.scrollY - scrollY > 50 || scrollY - window.scrollY > 50)
      scrollY = window.scrollY;
  });
}

function preventBodyScrolling(e) {
  var scrollBarWidth = window.innerWidth - $('html').width();
  const border = scrollBarWidth > 0 ? '1px solid #d7d2d2' : null;
  $('html').css({
    overflow: 'hidden',
    'padding-right': `${scrollBarWidth - 1}px`,
  });
  $('body').css({
    'border-right': border,
    // position: 'fixed',
  });
  $('.header').css({ width: `calc(100% - ${scrollBarWidth}px)` });
}
function rebootBodyScrolling(e) {
  $('html').css({ overflow: '', 'padding-right': '' });
  $('body').css({ 'border-right': '', position: '' });
  $('.header').css({ width: '' });
}

function initAOS() {
  AOS.init({ duration: 500 });
}

function animateHeader() {
  const elSectionHeader = $('.section-header');
  if (!elSectionHeader || !elSectionHeader.length) return;

  const elHeader = $('#header');
  const animateSPClass = 'header--animated-mobile';
  const animateEndSPClass = 'header--animated-mobile-end';
  const animatePCClass = 'header--animated';
  const elVideoTitle = $('.section-video__title');
  const elSectionHeaderImg = $('.section-header__img');
  const initialHeightSectionHeader = elSectionHeader.outerHeight();
  const videoElement = document.querySelector('.section-video__wrapper>video');

  const animateTitle = function () {
    elVideoTitle.addClass('show');
    const timeout = setTimeout(function () {
      initAOS();
      showHideHeaderWhenScroll();
      clearTimeout(timeout);
    }, 1200);
    const timeoutGlobularAnimation = setTimeout(function () {
      rebootBodyScrolling();
      initalGlobularAnimation();
      clearTimeout(timeoutGlobularAnimation);
    }, 1400);
  };

  const animateOnSP = function () {
    const animate = function () {
      if (elHeader.hasClass(animateSPClass)) {
        elSectionHeader.delay(1000).animate(
          { height: elHeader.outerHeight() },
          {
            duration: 1200,
            complete: function () {
            },
          }
        );
        elSectionHeaderImg.delay(1000).animate(
          { width: 124 },
          {
            duration: 1200,
            complete: function () {
              // window.scrollTo(0, 0);
              elHeader.removeClass(animateSPClass);
              // elHeader.addClass(animateEndSPClass);

              animateTitle();
            },
          }
        );
      }
    }

    if (videoElement.readyState >= 3) animate();
    else videoElement.addEventListener('loadeddata', (e) => {
        animate();
      });
  };

  const animateOnPC = function () { 
    const animate = function () {
      if (elHeader.hasClass(animatePCClass)) {
        elSectionHeader.delay(1000).animate(
          { height: elHeader.outerHeight() },
          {
            duration: 1200,
            complete: function () {
            },
          }
        );
        elSectionHeaderImg.delay(1000).animate(
          { width: 138, height: 24 },
          {
            duration: 1200,
            complete: function () {
              // window.scrollTo(0, 0);
              elHeader.removeClass(animatePCClass);
  
              animateTitle();
            },
          }
        );
      }
    } 
    if (videoElement.readyState >= 3) animate();
    else
      videoElement.addEventListener('loadeddata', (e) => {
        animate();
      });
  };

  const initialAnimateOnPC = function () {
    if(!elHeader.hasClass(animatePCClass)) return;

    preventBodyScrolling();
    elHeader.removeClass(animateSPClass);
    elHeader.removeClass(animateEndSPClass);
    if (elVideoTitle && elVideoTitle.length && !elVideoTitle.hasClass('show')) {
      animateOnPC();
    }
  };

  const initialAnimateOnSP = function () {
    if(!elHeader.hasClass(animateSPClass)) return;

    elHeader.removeClass(animatePCClass);
    elSectionHeader.css({ height: '', opacity: '', visibility: '' });

    if (elVideoTitle && elVideoTitle.length && !elVideoTitle.hasClass('show')) {
      elHeader.addClass(animateSPClass);
      animateOnSP();
    }
  };

  if (window.innerWidth < 992) {
    initialAnimateOnSP();
    return;
  }

  initialAnimateOnPC();

  window.addEventListener('resize', function () {
    if (window.innerWidth < 992) {
      initialAnimateOnPC();
    } else {
      initialAnimateOnSP();
    }
  });
}
function handleToggleSubMenu() {
  const elNavItem = $('.header-nav__item--sub');
  const classShow = 'show-sub';

  function toggleSubMenuPC() {
    elNavItem.on('mouseenter', function () {
      if (window.innerWidth >= 992) {
        $(this).addClass(classShow);
        $(this).parents('.header-menu').addClass(classShow);
      }
    });
    elNavItem.on('mouseleave', function () {
      if (window.innerWidth >= 992) {
        $(this).removeClass(classShow);
        $(this).parents('.header-menu').removeClass(classShow);
      }
    });
  }

  function toggleSubMenuSP() {
    $('.header-nav__item--sub > a').on('click', function (e) {
      e.preventDefault();
      if (window.innerWidth >= 992) return;

      const subMenu = $(this).parents().children('.header-nav__sub');
      if ($(subMenu).is(':visible')) subMenu.slideUp();
      else subMenu.slideDown();
    });
  }

  function initResize() {
    toggleSubMenuSP();
    toggleSubMenuPC();
  }

  initResize();
}

function closeMenu() {
  $('#toggleMenu').removeClass('show');
  $('.header-nav').removeClass('show');
}

function handleAnchorMenu() {
  const onActiveAnchor = function (el) {
    $('.header-nav a[href*="#"]').removeClass('active');
    $(el).addClass('active');

    if (window.innerWidth < 992) {
      closeMenu();
    }
    $('html, body').animate(
      {
        scrollTop: $($(el)[0].hash).offset().top - 120,
      },
      1200
    );
  };

  if (window.location.hash) {
    const elLink = $(`.header-nav a[href*="${window.location.hash}"]`);
    onActiveAnchor(elLink);
  }

  $(document).on('click', '.header-nav a[href*="#"]', function (event) {
    onActiveAnchor($(this));
  });
}

function loadDefaultValueOfSelectOnRecruitDetails() {
  const elSelectWorktype = $('select#workType');
  if(!elSelectWorktype || !elSelectWorktype.length) return;

  const dataTitle = $('[data-title]')?.attr('data-title');
  if(dataTitle) {
    $(`select#workType option[value="${dataTitle}"]`).attr("selected",true)
  }
}

const initialParallax = function() {
  const images = document.querySelectorAll('.img-parallax');
  new simpleParallax(images, {
    scale: 1.2,
    delay: .3,
    transition: 'cubic-bezier(0, 0, 0, 1)'
  });

  const imgPartner = document.querySelector('.img-parallax--partner');
  new simpleParallax(imgPartner, {
    scale: 1.2,
    delay: .3,
    transition: 'cubic-bezier(0, 0, 0, 1)',
    customWrapper: '.section-partner'
  });
}

const animationBackToTop = function() {
  $('#backToTop').on('click', function (e) {
    e.preventDefault();

    $('html, body').animate(
      {
        scrollTop: 0,
      },
      600
    );
  });

  if ($(window).width() > 768) {
    $('#backToTop').on('mouseenter', function () {
      $(this).addClass('is-over is-loaded');
    });
    $('#backToTop').on('mouseleave', function () {
      $(this).removeClass('is-over').attr('style', '');
    });
    $('#backToTop').on('mousemove', function (e) {
      if ($('#backToTop.is-over').length) {
        var h = $(this).outerHeight();
        var w = $(this).outerWidth();
        var x = e.clientX - this.offsetLeft;
        var y = e.clientY - this.offsetTop;
        var rotateVal = (((w/2) - x) * -0.05);
        var translateXVal = (((w/2) - x) * 0.2);
        var translateYVal = (((h/2) - y) * 0.2);

        $(this).css({transform : 'translate(' + translateXVal + 'px, ' + translateYVal + 'px) rotateZ(' + rotateVal + 'deg)'});
      }
    });
  }
}

function aspectRatioNewsImage() {
  const images = $('.page-single-news .news-content>figure.wp-block-image img');
  const ratio = 1;
  
  if(images.length) {
    images.each((_, el) => {
      var img = new Image();
      img.src = $(el).attr('src');
      img.onload = function() {
        const elWidth = $(el).width();
        const elHeight = $(el).height();

        if(elWidth / elHeight < ratio) {
          $(el).css({'aspect-ratio': '1'})
        }
      }
    })
  }
}

window.addEventListener('DOMContentLoaded', (event) => {
  aspectRatioNewsImage()
});

function handlePageNavi() {
  const pageNavi = $('.wp-pagenavi');
  if(pageNavi && pageNavi.length) {
    let elCurrent = pageNavi.children('.current');
    const elPrev = pageNavi.children('[rel="prev"]');
    const elNext = pageNavi.children('[rel="next"]');
    if(elCurrent.length) {
      const currentPage = Number(elCurrent.text());
      if(currentPage === 1) elPrev.addClass('disabled');
    }
  }
}

function handleContactForm7() {
  if($('.wpcf7-form') && $('.wpcf7-form').length) {
    //Redirect to thankyou page when submit successfully
    document.addEventListener( 'wpcf7mailsent', function( event ) {
      const {inputs} = event.detail;
      let listCheckInput = inputs?.filter(input => input.name === 'work-type' || input.name === 'acceptance-policy')
      if(listCheckInput && listCheckInput.length > 1) {
        window.location.href = $('[data-redirect]')?.attr('data-redirect') + '/recruit-thankyou';
      }
    })

    //Change input[type="submit"] to button[type="submit"] because padding css is not working on safari IOS
    $('.wpcf7-form').each(function () {
      let elForm = $(this);
      let innerHTMLForm = elForm.html();
      let newFormHTML = '';
      elForm.find('.wpcf7-submit').each(function(){
        let outerHTMLSubmit = $(this)[0].outerHTML;
        let valSubmit = $(this).val();
        let newSubmitHTML = outerHTMLSubmit.replace('<input','<button').replace(`value="${valSubmit}"`, '')+`${valSubmit}</button>`;
        newFormHTML = innerHTMLForm.replace(outerHTMLSubmit, newSubmitHTML);
        elForm.html(newFormHTML);
      });
    })
  }
}

$(function () {
  const elSectionHeader = $('.section-header');
  animateHeader();

  if (!elSectionHeader || !elSectionHeader.length) {
    initAOS();
    showHideHeaderWhenScroll();
  }

  $('#toggleMenu').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('show');
    $('.header-nav').toggleClass('show');
    if($(this).hasClass('show')) {
      preventBodyScrolling();
    } else {
      rebootBodyScrolling()
    }
  });

  $(document).on('click','#viewPolicy',function (e) {
    e.preventDefault();
    $('#mPrivacyPolicy').addClass('show');
    preventBodyScrolling();
  })
  $('.modal-policy__close').on('click', function (e) {
    e.preventDefault();
    $('#mPrivacyPolicy').removeClass('show');
    rebootBodyScrolling();
  })


  $('.page-policy .scroll-top').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate(
      {
        scrollTop: $('.page-policy__section').offset().top,
      },
      600
    );
  })

  // handleToggleSubMenu();
  handleAnchorMenu();
  loadDefaultValueOfSelectOnRecruitDetails();

  initialParallax();
  animationBackToTop();
  initialHeightSectionVideoOnSP();
  
  handlePageNavi();

  handleContactForm7();
});
