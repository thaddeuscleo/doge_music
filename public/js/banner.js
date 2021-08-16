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
  host: "http://127.0.0.1:8000/"
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
  !*** ./resources/js/banner.js ***!
  \********************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _environment__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./environment */ "./resources/js/environment.js");

var testimonyText = document.getElementById('testimony-text');
var soundguys = document.getElementById('soundguys');
var businessInsider = document.getElementById('business-insider');
var pcmag = document.getElementById('pcmag');
var techradar = document.getElementById('techradar');
var whatHifi = document.getElementById('what-hifi');
var joinMember = document.getElementById('join-member');
setSoundGuys();
var elements = [soundguys, businessInsider, pcmag, techradar, whatHifi];

if (joinMember) {
  joinMember.addEventListener('click', function () {
    var path = "".concat(_environment__WEBPACK_IMPORTED_MODULE_0__.environment.host, "register");
    window.open(path);
    console.log('hello');
  });
}

soundguys.addEventListener('click', function () {
  elements.forEach(function (e) {
    return e.classList.remove("selected");
  });
  soundguys.classList.add("selected");
  setSoundGuys();
});
businessInsider.addEventListener('click', function () {
  elements.forEach(function (e) {
    return e.classList.remove("selected");
  });
  businessInsider.classList.add("selected");
  setBusinessInsider();
});
whatHifi.addEventListener('click', function () {
  elements.forEach(function (e) {
    return e.classList.remove("selected");
  });
  whatHifi.classList.add("selected");
  setWhatHifi();
});
techradar.addEventListener('click', function () {
  elements.forEach(function (e) {
    return e.classList.remove("selected");
  });
  techradar.classList.add("selected");
  setTechRadar();
});
pcmag.addEventListener('click', function () {
  elements.forEach(function (e) {
    return e.classList.remove("selected");
  });
  pcmag.classList.add("selected");
  setPcMag();
});

function setSoundGuys() {
  setTestimonyText(0);
}

function setBusinessInsider() {
  setTestimonyText(1);
}

function setWhatHifi() {
  setTestimonyText(2);
}

function setTechRadar() {
  setTestimonyText(3);
}

function setPcMag() {
  setTestimonyText(4);
}

function setTestimonyText(testimony) {
  var texts = ['"The DOGE MUSIC user satisfaction is fantastic. It didn’t matter whether I ' + 'was using the desktop or mobile audio player — its sound very great and enjoyable experience."', '"Audiophiles and more discerning listeners won’t be disappointed with DOGE MUSIC HiFi."', '“The best combination of sound quality, music selection and enjoyment.”', 'DOGE MUSIC is a superb music record provider, ideal for anyone with a penchant for ' + 'hi-fidelity audio.', '"DOGE Music, with its high-quality audio, music-related articles, and first dibs on tickets ' + 'to hot concerts and sporting events, is one of the best and most unique audio provider."'];
  testimonyText.innerText = texts[testimony];
}
})();

/******/ })()
;