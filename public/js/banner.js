/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/banner.js ***!
  \********************************/
var testimonyText = document.getElementById('testimony-text');
var soundguys = document.getElementById('soundguys');
var businessInsider = document.getElementById('business-insider');
var pcmag = document.getElementById('pcmag');
var techradar = document.getElementById('techradar');
var whatHifi = document.getElementById('what-hifi');
setSoundGuys();
var elements = [soundguys, businessInsider, pcmag, techradar, whatHifi];
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
/******/ })()
;