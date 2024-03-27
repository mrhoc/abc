$(function () {
  const elGlobularAnimation = $('.globular-animation');
  const classShow = 'show';
  var windowInnerHeight = window.innerHeight;
  elGlobularAnimation.css({height: windowInnerHeight})

  //Section Intro
  let elIntro,
      elVideo,
      elGlobularAnimationIntro,
      elGlobularAnimationIntroImg,
      heightElIntro,
      heightElVideo,
      offsetTopIntro,
      widthIntro,
      minWidthIntro,
      offsetMaxIntro,
      spacingVerticalOfCircle;

  const initialValueIntro = function() {
    elIntro = $('.section-intro');
    elVideo = $('.section-video');
    elGlobularAnimationIntro = $('.globular-animation__intro');
    elGlobularAnimationIntroImg = $('.globular-animation__intro>img');

    heightElIntro = elIntro.outerHeight();
    heightElVideo = elVideo.outerHeight();
    
    spacingVerticalOfCircle = (window.innerHeight - elGlobularAnimationIntroImg.outerHeight()) / 2;
    offsetTopIntro = elIntro.offset().top - (spacingVerticalOfCircle - 113);
    widthIntro = elGlobularAnimationIntro.width();
    minWidthIntro = elGlobularAnimationIntro.children()[0].width;
    offsetMaxIntro = elIntro.offset().top + heightElIntro;
  }

  initialValueIntro();

  const calcPercentHeight = function (scrollY, offsetTop, height) {
    return ((scrollY - offsetTop) * 100) / height;
  };

  const runAnimationOfIntro = function () {
    if (window.scrollY >= offsetTopIntro) {
      if (!elGlobularAnimation.hasClass(classShow)) {
        elGlobularAnimation.addClass(classShow);
      }
      if (window.scrollY <= offsetMaxIntro) {
        if (!elGlobularAnimationIntro.hasClass(classShow)) {
          elGlobularAnimationIntro.addClass(classShow);
        } else {
          if(window.scrollY <= offsetTopIntro + 113) {
            const percentOpacity = calcPercentHeight(window.scrollY, offsetTopIntro, 113)
            elGlobularAnimationIntro.css({opacity: percentOpacity / 100, width: ''})
          }
          else {
            const percent = calcPercentHeight(window.scrollY, offsetTopIntro + 113, (heightElIntro - 113) / 5);

            let width = widthIntro - (minWidthIntro * percent) / 100;

            elGlobularAnimationIntro.css({
              width: `${width <= minWidthIntro ? minWidthIntro : width}px`,
              opacity: 1
            });
          }
        }
      } else {
        if (elGlobularAnimationIntro.hasClass(classShow)) {
          elGlobularAnimationIntro.removeClass(classShow);
        }
      }
    } else {
      elGlobularAnimationIntro.css({ width: '' });
      if (elGlobularAnimation.hasClass(classShow)) {
        elGlobularAnimation.removeClass(classShow);
      }
    }
  };

  //Section Service
  let elSecvice1,
      elSecvice2,
      elGlobularAnimationService,
      elGlobularAnimationServiceImg,
      elBannerOfService1,
      elServiceOverlayTop,
      elServiceOverlayBottom,
      heightServiceOverlayTop,
      heightServiceOverlayBottom,
      heightElSecvice1,
      heightElSecvice2,
      heightImg,
      offsetTopService1,
      offsetTopService2,
      offsetTopZoomInService2,
      offsetTopZoomOutService2,
      offsetMaxService,
      offsetTopElImg,
      initialZoom,
      initialShadowVal,
      initialShadowBottomCircle,
      paddingTopElSevice1;

  const initialValueService = function() {
    elSecvice1 = $('.section-service')[0];
    elSecvice2 = $('.section-service')[1];
    elGlobularAnimationService = $('.globular-animation__service');
    elGlobularAnimationServiceImg = $('.globular-animation__service-img>img');
    elBannerOfService1 =  $(elSecvice1).children().children('.section-service__banner');
    elServiceOverlayTop = $('.globular-animation__service-img>.overlay-top');
    elServiceOverlayBottom = $('.globular-animation__service-img>.overlay-bottom');

    paddingTopElSevice1 = Number($(elSecvice1).css('padding-top').replace('px', ''));
    paddingBottomElSevice1 = Number($(elSecvice1).css('padding-bottom').replace('px', ''));

    heightServiceOverlayTop = Math.ceil(elServiceOverlayTop.outerHeight());
    heightServiceOverlayBottom = Math.ceil(elServiceOverlayBottom.outerHeight());
    heightElSecvice2 = $(elSecvice2).outerHeight();
    heightImg = elGlobularAnimationServiceImg.parent().outerHeight() / 4;

    offsetTopElImg = (window.innerHeight - elGlobularAnimationServiceImg.outerHeight()) / 2
    if(elBannerOfService1.outerHeight() / 2 < offsetTopElImg) {
      offsetTopService1 = $(elSecvice1).offset().top + (offsetTopElImg / 4);
    }
    else {
      offsetTopService1 = $(elSecvice1).offset().top + elBannerOfService1.outerHeight();
    }

    offsetTopService2 = $(elSecvice2).offset().top - offsetTopElImg - heightImg / 1.5;

    offsetTopViewService2 = $(elSecvice2).children('.section-service__view').offset().top; //Offset top zoomout circle
    offsetMaxService = offsetTopService1 + $(elSecvice1).outerHeight() + heightElSecvice2;
    if(window.innerWidth < window.innerHeight) {
      initialZoom = window.innerHeight / elGlobularAnimationServiceImg.parent().width() - 1 + 0.6;
    }
    else {
      initialZoom = window.innerWidth / elGlobularAnimationServiceImg.parent().width() - 1 + 0.05;
    }

    if(window.innerWidth < 992){
      offsetTopZoomInService2 = offsetTopService2 + $(elSecvice2).children().children('.section-service__banner').outerHeight();
    }
    else {
      offsetTopZoomInService2 = offsetTopService2 + heightImg / 4;
    }
    offsetTopZoomOutService2 = offsetTopZoomInService2 + heightImg;

    heightElSecvice1 = $(elSecvice1).children('.section-service__banner-bottom').offset().top - $(elSecvice1).children('.section-service__article').offset().top;
    initialShadowVal = heightServiceOverlayBottom;
    initialShadowBottomCircle = `inset 0px -${heightServiceOverlayBottom}px 0 0px rgb(241 241 238)`;
    elServiceOverlayBottom.css({ 'box-shadow': initialShadowBottomCircle });

    if (window.scrollY > offsetTopZoomInService2) {
      elServiceOverlayTop.css({ height: '0px' });
    }
  }

  initialValueService();

  const resetAnimationService1 = function () {
    if(elServiceOverlayTop.css('height') !== '0px')
      elServiceOverlayTop.css({ height: '0px' });
    if(elServiceOverlayBottom.css('box-shadow') !== 'inset 0px 0 0 0px rgb(241 241 238)')
      elServiceOverlayBottom.css({
        'box-shadow': `inset 0px 0 0 0px rgb(241 241 238)`,
      });
  }

  const runAnimationOfService = function () {
    if (window.scrollY <= offsetMaxService && window.scrollY > offsetTopService1) {
      elGlobularAnimation.css({ 'z-index': 0 });
      if (!elGlobularAnimationService.hasClass(classShow)) {
        elGlobularAnimationService.addClass('show');
      }

      // Circle on section service 1
      if (window.scrollY >= offsetTopService1 && window.scrollY < offsetTopService2) {
        elGlobularAnimationServiceImg.css({ transform: `scale(1)`, opacity: 1 });
        const percent = calcPercentHeight( window.scrollY, offsetTopService1, heightElSecvice1);

        if (percent <= 100) {
          const height = heightServiceOverlayTop - (heightServiceOverlayTop * percent * 2) / 100;

          if (height > 0) {
            elServiceOverlayTop.css({ height: `${height}px` });
            elServiceOverlayBottom.css({
              'box-shadow': initialShadowBottomCircle,
              width: `${window.innerWidth}px`, 
            });
          } else {
            let value = (initialShadowVal * (percent - 50) * 2) / 100;
            let widthVal = ((window.innerWidth - elGlobularAnimationServiceImg.width()) * (percent - 50) * 2) / 100;

            elServiceOverlayTop.css({ height: '0px' });
            elServiceOverlayBottom.css({
              'box-shadow': `inset 0px ${(initialShadowVal - value) * -1}px 0 0px  rgb(241 241 238)`,
              width: `${window.innerWidth - widthVal}px`,
            });
          }
        } else {
          resetAnimationService1();
        }
      } else if (window.scrollY >= offsetTopService2) { //Circle on section service 2
        resetAnimationService1();

        if (window.scrollY < offsetTopViewService2) {
          //Circle zoom in
          if(window.scrollY < offsetTopZoomInService2) {
            elGlobularAnimationServiceImg.css({ opacity: 1 });
            const percent = calcPercentHeight(window.scrollY, offsetTopService2, offsetTopZoomInService2 - offsetTopService2);
            elGlobularAnimationServiceImg.css({ transform: `scale(${1 - (0.1 * percent) / 100})` });
          } else if (window.scrollY < offsetTopZoomOutService2) {
            //Circle zoom out + opacity
            const percent = calcPercentHeight(window.scrollY, offsetTopZoomInService2, heightImg);
  
            if (percent <= 100) {
              elGlobularAnimationServiceImg.css({ transform: `scale(${1 + (initialZoom * percent) / 100})` });
              elGlobularAnimationServiceImg.css({ opacity: 1 - percent / 2 / 100 });
            }
          }
          else {
            elGlobularAnimationServiceImg.css({ transform: `scale(${1 + initialZoom})` });
            elGlobularAnimationServiceImg.css({ opacity: 0.5 });
          }
        } else if (window.scrollY >= offsetTopViewService2) {  // Animation zoomout circle
          const heightSectionView = $(elSecvice2).children('.section-service__view').outerHeight();
          if(elGlobularAnimationServiceImg.css('transform') !== `scale(${1 + initialZoom})`)
            elGlobularAnimationServiceImg.css({
              transform: `scale(${1 + initialZoom})`,
            });
            
          if(elGlobularAnimationServiceImg.css('opacity') !== '' && elGlobularAnimationServiceImg.css('opacity') > 0.5) {
              elGlobularAnimationServiceImg.css({ opacity: 0.5 });
            }

          if (window.scrollY <= offsetTopViewService2 + heightSectionView) {
            const percent = calcPercentHeight(window.scrollY, offsetTopViewService2, heightSectionView);

            elGlobularAnimationServiceImg.css({ opacity: 0.5 - (percent / 2 / 100) });
          } else {
            if(elGlobularAnimationServiceImg.css('opacity') !== '' && elGlobularAnimationServiceImg.css('opacity') > 0) {
              elGlobularAnimationServiceImg.css({ opacity: 0 });
            }
          }
        } else {
          elGlobularAnimationServiceImg.css({
            transform: `scale(${1 + initialZoom})`,
          });
        }
      }
    } else {
      resetAnimationService1();

      elGlobularAnimation.css({ 'z-index': '' });
      elGlobularAnimationService.removeClass('show').css({ height: '' });
    }
  };

  window.onresize = function() {
    if (
      window.innerHeight !== windowInnerHeight ||
      window.innerHeight === windowInnerHeight
    ) {
      return;
    }
    initialValueIntro();
    initialValueService();
  }
  window.onscroll = function () {
    runAnimationOfIntro();
    runAnimationOfService();
  };
});
