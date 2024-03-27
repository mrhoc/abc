'use-strict';

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
        if (!elHeader.hasClass(classHidden)) window.scrollTo(0, 0);
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
    scrollY = window.scrollY;
  });
}

function preventBodyScrolling(e) {
  var scrollBarWidth = window.innerWidth - $('html').width();
  $('html').css({
    overflow: 'hidden',
  });
  $('body').css({
    'border-right': '1px solid #d7d2d2',
    'padding-right': `${scrollBarWidth - 1}px`,
    position: 'fixed',
  });
  $('.header').css({ width: `calc(100% - ${scrollBarWidth}px)` });
}
function rebootBodyScrolling(e) {
  $('html').css({ overflow: '' });
  $('body').css({ 'border-right': '', 'padding-right': '', position: '' });
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

  const animateOnSP = function () {
    const videoElement = document.querySelector(
      '.section-video__wrapper>video'
    );
    const animate = function () {
      elSectionHeaderImg.animate(
        { width: 124, height: 22 },
        {
          duration: 1200,
          complete: function () {
            elHeader.removeClass(animateSPClass);
            elHeader.addClass(animateEndSPClass);

            elVideoTitle.addClass('show');
            initAOS();
            showHideHeaderWhenScroll();
          },
        }
      );
    };
    if (elHeader.hasClass(animateSPClass)) {
      if (videoElement.readyState >= 3) animate();
      else
        videoElement.addEventListener('loadeddata', (e) => {
          animate();
        });
    }
  };

  const resetAnimateOnPC = function () {
    elHeader.removeClass(animatePCClass);
    elSectionHeader.css({ height: '', opacity: '', visibility: '' });

    if (elVideoTitle && elVideoTitle.length && !elVideoTitle.hasClass('show')) {
      elHeader.addClass(animateSPClass);
      animateOnSP();
    }
  };

  const resetAnimateOnSP = function () {
    elHeader.removeClass(animateSPClass);
    elHeader.removeClass(animateEndSPClass);
  };

  if (window.innerWidth < 992) {
    resetAnimateOnPC();
    return;
  }

  resetAnimateOnSP();
  const elLogo = $('.header-menu__logo>img');

  let heightSectionHeader;
  let heightSectionHeaderImg;
  let minimumScale;
  let scale = 1;
  let flagScroll = false;

  const heightHeader = elHeader.outerHeight();

  const initalAllOfHeight = function () {
    heightSectionHeader = elSectionHeader.outerHeight();
    heightSectionHeaderImg = elSectionHeaderImg.outerHeight();
    minimumScale =
      (elLogo.outerHeight() * 100) / (heightSectionHeader - heightHeader) / 100;
  };

  const animateScale = function () {
    // Calculate remain percent of section with window.scrollY
    const percent =
      ((heightSectionHeaderImg - window.scrollY) * 100) /
      heightSectionHeaderImg;
    scale = percent / 100 <= minimumScale ? minimumScale : percent / 100;

    elSectionHeaderImg.css({ transform: `scale(${scale})` });
  };

  const handleScrollPC = function (e) {
    e.preventDefault();
    if (window.scrollY <= heightSectionHeader - heightHeader) {
      flagScroll = true;
      animateScale();
    } else if (flagScroll) {
      // window.scrollTo(0, 0);
      elHeader.removeClass(animatePCClass);
      elVideoTitle.addClass('show');

      initAOS();

      if (elSectionHeader)
        elSectionHeader.css({
          height: initialHeightSectionHeader,
          opacity: 0,
          visibility: 'hidden',
        });
      showHideHeaderWhenScroll();

      flagScroll = false;
    }
  };

  // Initial
  elSectionHeaderImg.css({ transform: 'scale(1)' });
  initalAllOfHeight();

  window.addEventListener('scroll', function (e) {
    if (elHeader.hasClass(animatePCClass)) handleScrollPC(e);
  });

  window.addEventListener('resize', function () {
    if (window.innerWidth < 992) {
      resetAnimateOnPC();
    } else {
      initalAllOfHeight();
      resetAnimateOnSP();
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
        scrollTop: $($(el)[0].hash).offset().top - 100,
      },
      1200
    );
  };

  if (window.location.hash) {
    const elLink = $(`.header-nav a[href*="${window.location.hash}"]`);
    onActiveAnchor(elLink);
  }

  $(document).on('click', '.header-nav a[href*="#"]', function (event) {
    if ($(this).attr('href') === window.location.href) event.preventDefault();

    onActiveAnchor($(this));
  });
}

window.onbeforeunload = function () {
  window.scrollTo(0, 0);
};

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
  });

  $('#backToTop').on('click', function (e) {
    e.preventDefault();

    $('html, body').animate(
      {
        scrollTop: 0,
      },
      600
    );
  });

  handleToggleSubMenu();
  handleAnchorMenu();
});
