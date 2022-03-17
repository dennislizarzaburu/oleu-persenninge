"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_app_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/app.scss */ "./assets/styles/app.scss");
/* harmony import */ var _js_swiper_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/swiper.js */ "./assets/js/swiper.js");
/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! alpinejs */ "./node_modules/alpinejs/dist/module.esm.js");



window.Alpine = alpinejs__WEBPACK_IMPORTED_MODULE_2__["default"];
alpinejs__WEBPACK_IMPORTED_MODULE_2__["default"].start();

/***/ }),

/***/ "./assets/js/swiper.js":
/*!*****************************!*\
  !*** ./assets/js/swiper.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! swiper */ "./node_modules/swiper/swiper.esm.js");
/* harmony import */ var swiper_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! swiper/css */ "./node_modules/swiper/swiper.min.css");
/* harmony import */ var swiper_css_navigation__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! swiper/css/navigation */ "./node_modules/swiper/modules/navigation/navigation.min.css");
/* harmony import */ var swiper_css_pagination__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! swiper/css/pagination */ "./node_modules/swiper/modules/pagination/pagination.min.css");
// core version + navigation, pagination modules:
 // import Swiper and modules styles



 // init Swiper:

var swiper = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.swiper', {
  // configure Swiper to use modules
  modules: [swiper__WEBPACK_IMPORTED_MODULE_0__.Navigation, swiper__WEBPACK_IMPORTED_MODULE_0__.Pagination],
  // If we need pagination
  pagination: {
    el: '.swiper-pagination'
  },
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
});

/***/ }),

/***/ "./assets/styles/app.scss":
/*!********************************!*\
  !*** ./assets/styles/app.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_alpinejs_dist_module_esm_js-node_modules_swiper_modules_navigation_navig-d204eb"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7QUFBQTtBQUVBO0FBRUE7QUFDQUMsTUFBTSxDQUFDRCxNQUFQLEdBQWdCQSxnREFBaEI7QUFDQUEsc0RBQUE7Ozs7Ozs7Ozs7Ozs7OztBQ05BO0NBRUE7O0FBQ0E7QUFDQTtDQUdBOztBQUNBLElBQU1NLE1BQU0sR0FBRyxJQUFJSCw4Q0FBSixDQUFXLFNBQVgsRUFBc0I7QUFDakM7QUFDQUksRUFBQUEsT0FBTyxFQUFFLENBQUNILDhDQUFELEVBQWFDLDhDQUFiLENBRndCO0FBSWpDO0FBQ0FHLEVBQUFBLFVBQVUsRUFBRTtBQUNSQyxJQUFBQSxFQUFFLEVBQUU7QUFESSxHQUxxQjtBQVNqQztBQUNBQyxFQUFBQSxVQUFVLEVBQUU7QUFDUkMsSUFBQUEsTUFBTSxFQUFFLHFCQURBO0FBRVJDLElBQUFBLE1BQU0sRUFBRTtBQUZBO0FBVnFCLENBQXRCLENBQWY7Ozs7Ozs7Ozs7O0FDUkEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9zd2lwZXIuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuc2NzcyJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgJy4vc3R5bGVzL2FwcC5zY3NzJztcblxuaW1wb3J0ICcuL2pzL3N3aXBlci5qcydcblxuaW1wb3J0IEFscGluZSBmcm9tICdhbHBpbmVqcyc7XG53aW5kb3cuQWxwaW5lID0gQWxwaW5lO1xuQWxwaW5lLnN0YXJ0KCk7IiwiLy8gY29yZSB2ZXJzaW9uICsgbmF2aWdhdGlvbiwgcGFnaW5hdGlvbiBtb2R1bGVzOlxuaW1wb3J0IFN3aXBlciwgeyBOYXZpZ2F0aW9uLCBQYWdpbmF0aW9uIH0gZnJvbSAnc3dpcGVyJztcbi8vIGltcG9ydCBTd2lwZXIgYW5kIG1vZHVsZXMgc3R5bGVzXG5pbXBvcnQgJ3N3aXBlci9jc3MnO1xuaW1wb3J0ICdzd2lwZXIvY3NzL25hdmlnYXRpb24nO1xuaW1wb3J0ICdzd2lwZXIvY3NzL3BhZ2luYXRpb24nO1xuXG4vLyBpbml0IFN3aXBlcjpcbmNvbnN0IHN3aXBlciA9IG5ldyBTd2lwZXIoJy5zd2lwZXInLCB7XG4gICAgLy8gY29uZmlndXJlIFN3aXBlciB0byB1c2UgbW9kdWxlc1xuICAgIG1vZHVsZXM6IFtOYXZpZ2F0aW9uLCBQYWdpbmF0aW9uXSxcblxuICAgIC8vIElmIHdlIG5lZWQgcGFnaW5hdGlvblxuICAgIHBhZ2luYXRpb246IHtcbiAgICAgICAgZWw6ICcuc3dpcGVyLXBhZ2luYXRpb24nLFxuICAgIH0sXG5cbiAgICAvLyBOYXZpZ2F0aW9uIGFycm93c1xuICAgIG5hdmlnYXRpb246IHtcbiAgICAgICAgbmV4dEVsOiAnLnN3aXBlci1idXR0b24tbmV4dCcsXG4gICAgICAgIHByZXZFbDogJy5zd2lwZXItYnV0dG9uLXByZXYnLFxuICAgIH0sXG59KTtcbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJBbHBpbmUiLCJ3aW5kb3ciLCJzdGFydCIsIlN3aXBlciIsIk5hdmlnYXRpb24iLCJQYWdpbmF0aW9uIiwic3dpcGVyIiwibW9kdWxlcyIsInBhZ2luYXRpb24iLCJlbCIsIm5hdmlnYXRpb24iLCJuZXh0RWwiLCJwcmV2RWwiXSwic291cmNlUm9vdCI6IiJ9