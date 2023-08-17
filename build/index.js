/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/helper.js":
/*!***********************!*\
  !*** ./src/helper.js ***!
  \***********************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/**
 * Helper class with useful functions
 */
class Helper {
  /**
   * initialize
   */
  constructor() {
    this.steps = {
      mobilePortrait: 544,
      mobile: 767,
      tabletPortrait: 860,
      tabletLandscape: 1024,
      desktop: 1210
    };
  }

  /**
   *  Checks the current query.
   *
   *  @param {string} device - Which Device should be checked.
   *
   *  @returns {boolean} check - Returns true or false current device.
   */
  isDevice(device) {
    let check = false;
    if (device === "mobile") {
      // mobile is landscape and portrait << a little exception here, but better to handle!
      check = this.getWidth() <= this.steps.mobile;
    } else if (device === "mobile-portrait") {
      check = this.getWidth() <= this.steps.mobilePortrait;
    } else if (device === "> mobile" || device === "gt mobile") {
      check = this.getWidth() > this.steps.mobile;
    }
    if (device === "tablet-portrait") {
      check = this.getWidth() > this.steps.mobile && this.getWidth() <= this.steps.tabletPortrait;
    } else if (device === "> tablet-portrait" || device === "gt tablet-portrait") {
      check = this.getWidth() > this.steps.tabletPortrait;
    } else if (device === "< tablet-portrait" || device === "lt tablet-portrait") {
      check = this.getWidth() <= this.steps.mobile;
    } else if (device === "<= tablet-portrait" || device === "lte tablet-portrait") {
      check = this.getWidth() <= this.steps.tabletPortrait;
    }
    if (device === "tablet-landscape") {
      check = this.getWidth() > this.steps.tabletPortrait && this.getWidth() <= this.steps.tabletLandscape;
    } else if (device === "> tablet-landscape" || device === "gt tablet-landscape") {
      check = this.getWidth() > this.steps.tabletLandscape;
    } else if (device === "< tablet-landscape" || device === "lt tablet-landscape") {
      check = this.getWidth() <= this.steps.tabletPortrait;
    } else if (device === "<= tablet-landscape" || device === "lte tablet-landscape") {
      check = this.getWidth() <= this.steps.tabletLandscape;
    }
    if (device === "desktop") {
      check = this.getWidth() > this.steps.tabletLandscape;
    } else if (device === "< desktop" || device === "lt desktop") {
      check = this.getWidth() <= this.steps.tabletLandscape;
    } else if (device === "<= desktop" || device === "lte desktop") {
      check = this.getWidth() <= this.steps.desktop;
    }
    return check;
  }

  /**
   *   Is touch device or not.
   *
   *   @returns {boolean} - Returns if ontouchstart is available.
   */
  isTouch() {
    return "ontouchstart" in window;
  }

  /**
   *   returns browser width (crossbrowser)
   *
   *   @returns {number} - Returns the width of current browser.
   */
  getWidth() {
    return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  }

  /**
   *   returns browser height (crossbrowser)
   *
   *   @returns {number} - Returns the height of current browser.
   */
  getHeight() {
    return window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
  }

  /**
   * Scrolls to an element.
   *
   * @param {object|string} element - The element to be scrolled to.
   * @param {number} duration - Time that needs for scrolling in ms.
   * @param {number} offset - The offset of scroll position.
   *
   * @returns {void}
   */
  scrollTo(element) {
    let duration = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 2000;
    let offset = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 0;
    // if string
    if (typeof element === "string") {
      element = document.querySelector(element);
    }

    // if element is not an object, let it be…
    if (typeof element !== "object") {
      return;
    }
    const elementY = element.getBoundingClientRect().top + window.pageYOffset - offset;
    const startingY = window.pageYOffset;
    const diff = elementY - startingY;
    let start;

    // Bootstrap our animation - it will get called right before next frame shall be rendered.
    window.requestAnimationFrame(function step(timestamp) {
      if (!start) {
        start = timestamp;
      }

      // Elapsed milliseconds since start of scrolling.
      const time = timestamp - start;
      // Get percent of completion in range [0, 1].
      const percent = Math.min(time / duration, 1);
      window.scrollTo(0, startingY + diff * percent);

      // Proceed with animation as long as we wanted it to.
      if (time < duration) {
        window.requestAnimationFrame(step);
      }
    });
  }

  /**
   *   Get a specific cookie value.
   *
   *   @param {string} name - Name of cookie field.
   *
   *   @returns {string} value
   */
  getCookie(name) {
    if (document.cookie.length > 0) {
      let posStart = document.cookie.indexOf(name + "=");
      let posEnd;
      if (posStart !== -1) {
        posStart = posStart + name.length + 1;
        posEnd = document.cookie.indexOf(";", posStart);
        if (posEnd === -1) {
          posEnd = document.cookie.length;
        }
        return unescape(document.cookie.substring(posStart, posEnd));
      }
    }
    return "";
  }

  /**
   *   Set a cookie with specific arguments.
   *
   *   @param {string} name - Name of cookie field.
   *   @param {string} value - Value of cookie name.
   *   @param {number} days - cookie expiration
   *
   *   @returns {void}
   */
  setCookie(name, value, days) {
    let expires = "";
    if (days) {
      const date = new Date();
      date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
      expires = "; expires=" + date.toGMTString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
  }

  /**
   * Disable scrolling of the page
   *
   * @returns {void}
   */
  disableScrolling() {
    const $body = document.querySelector("body");
    $body.style.overflowX = "hidden";
    $body.style.overflowY = "scroll";
    $body.style.position = "fixed";
    $body.style.width = "100%";
    $body.style.height = "100%";
  }

  /**
   * Enable scrolling of the page
   *
   * @returns {void}
   */
  enableScrolling() {
    const $body = document.querySelector("body");
    $body.style.removeProperty("overflowX");
    $body.style.removeProperty("overflowY");
    $body.style.removeProperty("position");
    $body.style.removeProperty("width");
    $body.style.removeProperty("height");
  }
}
/* harmony default export */ __webpack_exports__["default"] = (new Helper());

/***/ }),

/***/ "./template-parts/blog/scrollup.js":
/*!*****************************************!*\
  !*** ./template-parts/blog/scrollup.js ***!
  \*****************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": function() { return /* binding */ Scrollup; }
/* harmony export */ });
class Scrollup {
  // 1. describe and create/initiate our object
  constructor() {
    this.elements = {
      $btn: document.querySelector(".scrollup-button")
    };
    if (this.elements.$btn) {
      this.events();
    }
  }

  // 2. events
  events() {
    window.addEventListener("scroll", e => {
      this.elements.$btn.style.visibility = window.scrollY > 40 ? "visible" : "hidden";
    });
    this.elements.$btn.addEventListener("click", this.scrollToTop);
  }

  // 3. methods (function, action...)
  scrollToTop() {
    document.documentElement.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  }
}

/***/ }),

/***/ "./template-parts/navigation/navigation.js":
/*!*************************************************!*\
  !*** ./template-parts/navigation/navigation.js ***!
  \*************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": function() { return /* binding */ Navigation; }
/* harmony export */ });
/* harmony import */ var _src_helper__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../src/helper */ "./src/helper.js");


/**
 *  Shows the Navigation bar, if not accepted, yet.
 */
class Navigation {
  /**
   * initialize
   */
  constructor() {
    this.elements = {
      $main: document.querySelectorAll(".header-main-navi, .header-meta"),
      $body: document.querySelector("body"),
      $checkbox: document.querySelector("#navi-toggle")
    };
    // checkbox need to be unchecked, when the page newly loaded
    this.elements.$checkbox.checked = false;

    // $bp-largest in variable & where hamber icon appears
    if (this.elements.$main.length && this.getWidth() >= 1250) {
      this.toggleSubmenu();
    } else if (this.getWidth() < 1250) {
      this.toggleSubmenu_mobile();
    }
    this.openNavContainer();
  }
  closeAllmenu() {
    this.elements.$main.forEach($navigation => {
      let $menu_has_children = $navigation.querySelectorAll(".menu-item-has-children");
      $menu_has_children.forEach($menu => {
        $menu.classList.remove("active");
      });
    });
  }

  /**
   *   toggles navigation : Desktop
   *
   *   @returns {void}
   */
  toggleSubmenu() {
    this.elements.$main.forEach($navigation => {
      //link deactivate
      let $deactivate_links = $navigation.querySelectorAll(".menu-item-depth-0.menu-item-has-children");
      $deactivate_links.forEach($link => {
        $link.querySelector(".menu-link").addEventListener("click", event => {
          // deactivate link
          event.preventDefault();
          // if subitem list is not jet open
          if (!$link.classList.contains("active")) {
            // close another opened submenu first
            this.closeAllmenu();
            // open target submenu
            $link.classList.add("active");
            setTimeout(() => {
              $link.classList.remove("active");
            }, 10000);
          } else {
            this.closeAllmenu();
          }
        });
      });

      // click outside > close
      document.addEventListener("click", event => {
        // did I clicked outside of the navigation area, close it
        let $target_classlist = event.target.classList;
        if ($target_classlist.contains("menu-link") || $target_classlist.contains("menu-item-has-children")) {
          return false;
        } else {
          this.closeAllmenu();
        }
      });
    });
  }

  // Mobile, viewwidth < 1020px
  // add class, when hamburger checkbox is checked
  openNavContainer() {
    let openToggle = () => {
      document.querySelector(".header--container").classList.toggle("mobile-navi-open");
      this.elements.$body.classList.toggle("body-no-scroll");
    };
    document.querySelector("#navi-toggle").addEventListener("change", openToggle);
  }
  // toggle submenu: Mobile
  toggleSubmenu_mobile() {
    this.elements.$main.forEach($navigation => {
      // open submenu as default, if the current page is one of the submenu
      let $init_open = $navigation.querySelector(".menu-item-depth-1.current-menu-ancestor.menu-item-has-children");
      if ($init_open) {
        $init_open.classList.add("active");
      }
      let $deactivate_links = $navigation.querySelectorAll(".menu-item-has-children");
      $deactivate_links.forEach($link => {
        $link.querySelector(".menu-link").addEventListener("click", event => {
          // deactivate link
          event.preventDefault();
          if ($link.classList.contains("menu-item-has-children")) {
            $link.classList.toggle("active");
          }
        });
      });
    });
  }
  getWidth() {
    return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  }
}

/***/ }),

/***/ "./scss/index.scss":
/*!*************************!*\
  !*** ./scss/index.scss ***!
  \*************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
!function() {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scss_index_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/index.scss */ "./scss/index.scss");
/* harmony import */ var _template_parts_navigation_navigation__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../template-parts/navigation/navigation */ "./template-parts/navigation/navigation.js");
/* harmony import */ var _template_parts_blog_scrollup__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../template-parts/blog/scrollup */ "./template-parts/blog/scrollup.js");



const navigation = new _template_parts_navigation_navigation__WEBPACK_IMPORTED_MODULE_1__["default"]();
const scrollup = new _template_parts_blog_scrollup__WEBPACK_IMPORTED_MODULE_2__["default"]();
}();
/******/ })()
;
//# sourceMappingURL=index.js.map