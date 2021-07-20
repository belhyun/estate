jQuery(function ($) {
  "use strict";

  // Side Nav
  //--------------------------------------------------
  var sidenav = function () {
    $(".sidenav").sidenav();
  };

  var carousel = function () {
    $(".main-slider").carousel({
      fullWidth: true,
      indicators: true,
    });
  };

  var tabs = function () {
    $(".tabs").tabs();
  };

  var modal = function () {
    $(".modal").modal();
  };

  var formSelect = function () {
    $("select").formSelect();
  };

  var privacyCheck = function () {
    $(".check").click(function () {
      $("#privCheck").prop("checked", true);
    });
    $(".uncheck").click(function () {
      $("#privCheck").prop("checked", false);
    });
  };

  // Page animsition
  //--------------------------------------------------
  // var animsition = function() {
  //   $(".wrap").animsition({
  //     inClass: "page-in",
  //     outClass: "page-out",
  //     inDuration: 400,
  //     outDuration: 400,
  //     linkElement: ".smooth-leave",
  //     loading: true,
  //     loadingParentElement: "body",
  //     loadingClass: "animsition-loading",
  //     loadingInner: "",
  //     timeout: false,
  //     timeoutCountdown: 5000,
  //     onLoadEvent: true,
  //     browser: [
  //       "animation-duration",
  //       "-webkit-animation-duration"
  //     ],
  //     overlay : false,
  //     overlayClass : "animsition-overlay-slide",
  //     overlayParentElement : "body",
  //     transition: function(url) {
  //       window.location.href = url;
  //     }
  //   });
  // }

  $(function () {
    // animsition();
    sidenav();
    carousel();
    tabs();
    modal();
    privacyCheck();
    formSelect();
  });

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 30) {
      $(".header-wrap").addClass("nav-scroll");
    } else {
      $(".header-wrap").removeClass("nav-scroll");
    }
  });
});

let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty("--vh", `${vh}px`);
