/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
//Surah Api
var SurahsContainer = document.querySelector('.surahasContainer');
getSurahs();

function getSurahs() {
  ///fetch surahs meta data {Name of Surahs}
  fetch("http://api.alquran.cloud/v1/meta").then(function (response) {
    return response.json();
  }).then(function (data) {
    var surahs = data.data.surahs.references;
    var numberOfSurahs = 114;
    SurahsContainer.innerHTML = "";

    for (var i = 0; i < numberOfSurahs; i++) {
      SurahsContainer.innerHTML += "\n                <div class=\"surah\">\n                <p>".concat(surahs[i].name, "</p>\n                <p>").concat(surahs[i].englishName, "</p>\n                </div>\n            ");
    }

    var SurahsTitels = document.querySelectorAll('.surah');
    var popup = document.querySelector('.surah-popup'),
        AyatContainer = document.querySelector('.ayat');
    SurahsTitels.forEach(function (title, index) {
      title.addEventListener('click', function () {
        fetch("https://api.quran.sutanlab.id/surah/".concat(index + 1)).then(function (response) {
          return response.json();
        }).then(function (data) {
          AyatContainer.innerHTML = "";
          var verses = data.data.verses;
          verses.forEach(function (aya) {
            popup.classList.add('active');
            AyatContainer.innerHTML += "\n                            <p>(".concat(aya.number.inSurah, ") - ").concat(aya.text.arab, "</p>\n                            <audio controls>\n                            <source src=\"").concat(aya.audio.primary, "\" type=\"audio/ogg\">\n\n                            Your browser does not support the audio element.\n                        </audio>\n                            ");
          });
        });
      });
    });
    var closePopup = document.querySelector('.close-popup');
    closePopup.addEventListener('click', function () {
      popup.classList.remove('active');
    });
  });
}
/******/ })()
;