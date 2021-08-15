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
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _environment__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./environment */ "./resources/js/environment.js");
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

 // Action Buttons

var viewButtons = document.getElementsByClassName('view-btn');
var updateButtons = document.getElementsByClassName('update-btn');
var deleteButtons = document.getElementsByClassName('delete-btn');
var closeUpdateModalBtn = document.getElementById('close-update-modal-btn');
var cancelDeleteBtn = document.getElementById('cancel-delete');
var confirmDeleteBtn = document.getElementById('confirm-delete'); // Form Elements

var formUpdate = document.getElementById('form-update');
var formDelete = document.getElementById('form-delete');
var addSongButton = document.getElementById('add-song-btn');
var container = document.getElementById('song-container');
var updateFormSubmit = document.getElementById('submit-update');
var deleteAlbumName = document.getElementById('delete-album-name'); // Fields

var albumNameField = document.getElementById('album-name');
var artistNameField = document.getElementById('artist-name');
var priceField = document.getElementById('price');
/*
* Opens a new tab by pressing the view button on the table
* the button uses {view-btn} from the html tag so make sure to not
* remove the class
*/

var _iterator = _createForOfIteratorHelper(viewButtons),
    _step;

try {
  var _loop = function _loop() {
    var viewBtn = _step.value;
    viewBtn.addEventListener("click", function () {
      window.open("".concat(_environment__WEBPACK_IMPORTED_MODULE_0__.environment.host, "product/").concat(viewBtn.value));
    });
  };

  for (_iterator.s(); !(_step = _iterator.n()).done;) {
    _loop();
  }
  /*
  * Show a update modal by pressing the update button on the table
  * the button uses {update-btn} from the html tag so make sure to not
  * remove the class. This is were the AJAX request happen for getting
  * the data from the API.
  */

} catch (err) {
  _iterator.e(err);
} finally {
  _iterator.f();
}

var _iterator2 = _createForOfIteratorHelper(updateButtons),
    _step2;

try {
  var _loop2 = function _loop2() {
    var updateBtn = _step2.value;
    updateBtn.addEventListener("click", function () {
      formUpdate.style.display = "block";
      var URL = "".concat(_environment__WEBPACK_IMPORTED_MODULE_0__.environment.host, "api/albums/").concat(updateBtn.value);
      container.innerHTML = "";
      fetch(URL).then(function (value) {
        return value.json();
      }).then(function (value) {
        albumNameField.value = value.name;
        artistNameField.value = value.artist_name;
        priceField.value = value.price;
        formUpdate.action = "".concat(_environment__WEBPACK_IMPORTED_MODULE_0__.environment.host, "product/").concat(value.id); // show loading animation

        fetch("".concat(_environment__WEBPACK_IMPORTED_MODULE_0__.environment.host, "api/songs/").concat(value.id)).then(function (data) {
          return data.json();
        }).then(function (data) {
          // hide loading animation
          if (data.length >= 4) {
            addSongButton.classList.add("disabled");
          }

          data.forEach(function (data) {
            container.innerHTML += "\n                                <input\n                                    type=\"text\"\n                                    class=\"song\"\n                                    name=\"song[]\"\n                                    placeholder=\"Song Name\"\n                                    value=\"".concat(data.title, "\">\n                            ");
          });
        });
      });
    });
  };

  for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
    _loop2();
  }
  /*
  * Show a delete modal by pressing the delete button on the table
  * the button uses {delete-btn} from the html tag so make sure to not
  * remove the class.
  */

} catch (err) {
  _iterator2.e(err);
} finally {
  _iterator2.f();
}

var _iterator3 = _createForOfIteratorHelper(deleteButtons),
    _step3;

try {
  var _loop3 = function _loop3() {
    var deleteBtn = _step3.value;
    deleteBtn.addEventListener("click", function () {
      var URL = "".concat(_environment__WEBPACK_IMPORTED_MODULE_0__.environment.host, "api/albums/").concat(deleteBtn.value);
      fetch(URL).then(function (value) {
        return value.json();
      }).then(function (value) {
        var message = "Are you sure want to delete ".concat(value.name);
        formDelete.action = "".concat(_environment__WEBPACK_IMPORTED_MODULE_0__.environment.host, "product/").concat(value.id);
        deleteAlbumName.innerText = message;
        formDelete.style.display = "block";
      });
    });
  };

  for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
    _loop3();
  }
  /*
  * This is where the add button add the input element of the form
  * and the form can be only have 5 input maximum
  */

} catch (err) {
  _iterator3.e(err);
} finally {
  _iterator3.f();
}

addSongButton.addEventListener('click', function () {
  var songElement = document.getElementsByClassName('song');

  if (songElement.length < 4) {
    container.innerHTML += "\n                <input\n                    type=\"text\"\n                    class=\"song\"\n                    name=\"song[]\"\n                    placeholder=\"Song Name\">\n            ";
  } else {
    addSongButton.classList.add("disabled");
    alert('Album can be only have 4 song maximum');
  }
});
/*
* Disables the submit functionality when button clicked.
* This is to prevent submission when the add input field
* button pressed
*/

formUpdate.addEventListener('submit', function (ev) {
  ev.preventDefault();
});
updateFormSubmit.addEventListener('click', function () {
  formUpdate.submit();
});
closeUpdateModalBtn.addEventListener('click', function () {
  formUpdate.style.display = "none";
});
formDelete.addEventListener('submit', function (ev) {
  ev.preventDefault();
});
cancelDeleteBtn.addEventListener('click', function () {
  formDelete.style.display = "none";
});
confirmDeleteBtn.addEventListener('click', function () {
  formDelete.submit();
});
})();

/******/ })()
;