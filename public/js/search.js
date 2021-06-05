/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/environment.js":
/*!*************************************!*\
  !*** ./resources/js/environment.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "environment": () => (/* binding */ environment)
/* harmony export */ });
var environment = {
  host: "http://localhost:8000/"
};

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
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!********************************!*\
  !*** ./resources/js/search.js ***!
  \********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _environment__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./environment */ "./resources/js/environment.js");

var searchButton = document.getElementById('search-btn');
var searchText = document.getElementById('search_text');
var closeSearchButton = document.getElementById('close-search');
var searchContainer = document.getElementById('search-container');
var resultItem = document.getElementById('search-result');
window.addEventListener('keyup', function (ev) {
  if (ev.isComposing || ev.code === "Slash") {
    searchText.focus();
  }

  if (ev.isComposing || ev.code === "Escape") {
    searchContainer.style.display = "none";
    searchButton.style.display = "block";
  }
});
searchButton.addEventListener('click', function () {
  searchButton.style.display = "none";
  searchContainer.style.display = "block";
});
searchText.addEventListener('keyup', function () {
  var data = searchText.value.toString();

  if (data.length !== 0) {
    clearTimeout();
    setTimeout(function () {
      var URL = "".concat(_environment__WEBPACK_IMPORTED_MODULE_0__.environment.host, "api/albums/search/").concat(data);
      fetch(URL).then(function (value) {
        return value.json();
      }).then(function (value) {
        resultItem.innerHTML = "";

        if (value.length !== 0) {
          value.forEach(function (val) {
            var webURL = "".concat(_environment__WEBPACK_IMPORTED_MODULE_0__.environment.host, "product/").concat(val.id);
            resultItem.innerHTML += setItemValue(webURL, val.name);
          });
        } else {
          resultItem.innerHTML += setItemValue("", "No Result");
        }
      });
    }, 100);
  } else {
    resultItem.innerHTML = "";
  }
});
closeSearchButton.addEventListener('click', function () {
  searchContainer.style.display = "none";
  searchButton.style.display = "block";
});

function setItemValue(url, name) {
  return "<div class=\"search-item\">\n                <p>\n                    <a href=\"".concat(url, "\">").concat(name, "</a>\n                </p>\n            </div>\n            ");
}
})();

/******/ })()
;