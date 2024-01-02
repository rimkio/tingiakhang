(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/app"],{

/***/ "./resources/assets/js/app.js":
/*!************************************!*\
  !*** ./resources/assets/js/app.js ***!
  \************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _webcomponents_webcomponentsjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @webcomponents/webcomponentsjs */ "./node_modules/@webcomponents/webcomponentsjs/webcomponents-bundle.js");
/* harmony import */ var _webcomponents_webcomponentsjs__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_webcomponents_webcomponentsjs__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var aos__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! aos */ "./node_modules/aos/dist/aos.js");
/* harmony import */ var aos__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(aos__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var aos_dist_aos_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! aos/dist/aos.css */ "./node_modules/aos/dist/aos.css");
/* harmony import */ var aos_dist_aos_css__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(aos_dist_aos_css__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _components_navigation__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/navigation */ "./resources/assets/js/components/navigation.js");
/* harmony import */ var _components_navigation__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_components_navigation__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _components_function__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/function */ "./resources/assets/js/components/function.js");





aos__WEBPACK_IMPORTED_MODULE_1___default.a.init({
  duration: 1200,
  once: true,
  disable: 'mobile'
});

/***/ }),

/***/ "./resources/assets/js/components/function.js":
/*!****************************************************!*\
  !*** ./resources/assets/js/components/function.js ***!
  \****************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function(global, __webpack_provided_window_dot_jQuery, jQuery) {/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var slick_carousel__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! slick-carousel */ "./node_modules/slick-carousel/slick/slick.js");
/* harmony import */ var slick_carousel__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(slick_carousel__WEBPACK_IMPORTED_MODULE_1__);
global.$ = global.jQuery = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");


__webpack_provided_window_dot_jQuery = window.$ = jquery__WEBPACK_IMPORTED_MODULE_0___default.a;
(function ($) {
  "use strict";

  var Gallery = function Gallery() {
    if (!$('.hlx-home-gallery__wrap-item').length) return;
    $(".hlx-home-gallery__wrap").slick({
      infinite: false,
      arrows: true,
      dots: true,
      appendArrows: ".gallery-slick",
      appendDots: '.gallery-slick'
    });
  };
  $(window).on("load", function () {});
  $(document).ready(function () {
    Gallery();
  });
})(jQuery);
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../../../../node_modules/webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js"), __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js"), __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./resources/assets/js/components/navigation.js":
/*!******************************************************!*\
  !*** ./resources/assets/js/components/navigation.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(jQuery) {(function ($) {
  "use strict";

  $(window).scroll(function () {});
  $(window).on("load", function () {});
})(jQuery);
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./resources/assets/scss/app.scss":
/*!****************************************!*\
  !*** ./resources/assets/scss/app.scss ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!***************************************************************************!*\
  !*** multi ./resources/assets/js/app.js ./resources/assets/scss/app.scss ***!
  \***************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\rimki\Local Sites\tingiakhang\app\public\wp-content\themes\tingiakhang\resources\assets\js\app.js */"./resources/assets/js/app.js");
module.exports = __webpack_require__(/*! C:\Users\rimki\Local Sites\tingiakhang\app\public\wp-content\themes\tingiakhang\resources\assets\scss\app.scss */"./resources/assets/scss/app.scss");


/***/ })

},[[0,"/js/manifest","/js/vendor"]]]);