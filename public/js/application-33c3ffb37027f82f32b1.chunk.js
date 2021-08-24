/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************************************!*\
  !*** ./resources/js/application-33c3ffb37027f82f32b1.chunk.js ***!
  \****************************************************************/
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _iterableToArrayLimit(arr, i) { var _i = arr == null ? null : typeof Symbol !== "undefined" && arr[Symbol.iterator] || arr["@@iterator"]; if (_i == null) return; var _arr = []; var _n = true; var _d = false; var _s, _e; try { for (_i = _i.call(arr); !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

function _get(target, property, receiver) { if (typeof Reflect !== "undefined" && Reflect.get) { _get = Reflect.get; } else { _get = function _get(target, property, receiver) { var base = _superPropBase(target, property); if (!base) return; var desc = Object.getOwnPropertyDescriptor(base, property); if (desc.get) { return desc.get.call(receiver); } return desc.value; }; } return _get(target, property, receiver || target); }

function _superPropBase(object, property) { while (!Object.prototype.hasOwnProperty.call(object, property)) { object = _getPrototypeOf(object); if (object === null) break; } return object; }

function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e16) { throw _e16; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e17) { didErr = true; err = _e17; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

(window.webpackJsonp = window.webpackJsonp || []).push([[0], [,,, function (e, t, s) {
  "use strict";

  s.d(t, "a", function () {
    return o;
  }), s.d(t, "c", function () {
    return r;
  }), s.d(t, "b", function () {
    return a;
  });
  var n = [7, 286, 200, 176, 120, 165, 206, 75, 129, 109, 123, 111, 43, 52, 99, 128, 111, 110, 98, 135, 112, 78, 118, 64, 77, 227, 93, 88, 69, 60, 34, 30, 73, 54, 45, 83, 182, 88, 75, 85, 54, 53, 89, 59, 37, 35, 38, 29, 18, 45, 60, 49, 62, 55, 78, 96, 29, 22, 24, 13, 14, 11, 11, 18, 12, 12, 30, 52, 52, 44, 28, 28, 20, 56, 40, 31, 50, 40, 46, 42, 29, 19, 36, 25, 22, 17, 19, 26, 30, 20, 15, 21, 11, 8, 8, 19, 5, 8, 8, 11, 11, 8, 3, 9, 5, 4, 7, 3, 6, 3, 5, 4, 5, 6],
      i = [0, 7, 293, 493, 669, 789, 954, 1160, 1235, 1364, 1473, 1596, 1707, 1750, 1802, 1901, 2029, 2140, 2250, 2348, 2483, 2595, 2673, 2791, 2855, 2932, 3159, 3252, 3340, 3409, 3469, 3503, 3533, 3606, 3660, 3705, 3788, 3970, 4058, 4133, 4218, 4272, 4325, 4414, 4473, 4510, 4545, 4583, 4612, 4630, 4675, 4735, 4784, 4846, 4901, 4979, 5075, 5104, 5126, 5150, 5163, 5177, 5188, 5199, 5217, 5229, 5241, 5271, 5323, 5375, 5419, 5447, 5475, 5495, 5551, 5591, 5622, 5672, 5712, 5758, 5800, 5829, 5848, 5884, 5909, 5931, 5948, 5967, 5993, 6023, 6043, 6058, 6079, 6090, 6098, 6106, 6125, 6130, 6138, 6146, 6157, 6168, 6176, 6179, 6188, 6193, 6197, 6204, 6207, 6213, 6216, 6221, 6225, 6230];

  function a(e) {
    var t, s, i;

    for (i = 0; i < n.length; i += 1) {
      if (e <= n[i]) {
        t = i + 1, s = e;
        break;
      }

      e -= n[i];
    }

    return function (e, t) {
      if (l(e, t)) return "".concat(e, ":").concat(t);
    }(t, s);
  }

  function r(e) {
    return e.split(":")[1];
  }

  function o(e) {
    var t = e.split(":");
    return function (e, t) {
      if (e = parseInt(e), t = parseInt(t), l(e, t)) return i[e - 1] + t;
    }(parseInt(t[0]), parseInt(t[1]));
  }

  function l(e, t) {
    return t > 0 && n[e - 1] && t <= n[e - 1];
  }
}, function (e, t, s) {
  "use strict";

  s.r(t), function (e) {
    var n = s(1),
        i = s(7),
        a = s(10),
        r = s(6);
    e.settings = {};
    var o = {
      v1: {
        mobile: 20,
        desktop: 30
      },
      v2: {
        mobile: 16,
        desktop: 30
      },
      indopak: {
        mobile: 25,
        desktop: 30
      },
      "default": {
        mobile: 16,
        desktop: 30
      }
    },
        l = {
      mobile: 16,
      desktop: 16
    },
        c = "var(--gray)",
        d = "#b1bec5";

    t["default"] = /*#__PURE__*/function (_n$b) {
      _inherits(_class, _n$b);

      var _super = _createSuper(_class);

      function _class() {
        _classCallCheck(this, _class);

        return _super.apply(this, arguments);
      }

      _createClass(_class, [{
        key: "connect",
        value: function connect() {
          var _this = this;

          document.body.setting = document.body.setting || this, this.store = new i.a(), this.loadSettings(), this.device = new a.a(), this.mobile = this.device.isMobile(), window.addEventListener("resize", function () {
            return _this.resizeHandler();
          }), $("style.setting").remove(), this.styles = document.createElement("style"), this.styles.classList.add("setting"), document.head.appendChild(this.styles), this.bindReset(), this.bindTooltip(), this.bindFontSize(), this.updateFontSize();
        }
      }, {
        key: "hideSetting",
        value: function hideSetting() {
          document.querySelector(".menus").classList.add("hidden"), document.querySelector(".menus__tab").classList.add("hidden");
        }
      }, {
        key: "resizeHandler",
        value: function resizeHandler() {
          this.mobile = this.device.isMobile(), this.updateFontSize();
        }
      }, {
        key: "loadSettings",
        value: function loadSettings() {
          var e;

          try {
            e = JSON.parse(this.store.get("setting") || "{}");
          } catch (_unused) {
            e = {};
          }

          var t = this.defaultSetting();
          settings = Object.assign(t, e), 0 == settings.translations.length && (settings.translations = t.translations), settings.repeatEnabled = !1, settings.repeatFrom = 0, settings.repeatTo = 0, settings.repeatAyah = 0;
        }
      }, {
        key: "bindTooltip",
        value: function bindTooltip() {
          var _this2 = this;

          $("[data-value=".concat(this.get("tooltip"), "]")).attr("checked", "checked"), $("[name=tooltip-display]").on("change", function (e) {
            _this2.set("tooltip", $(e.target).data("value"));
          });
        }
      }, {
        key: "bindReset",
        value: function bindReset() {
          var _this3 = this;

          $("#reset-settings").on("click", function (e) {
            return _this3.resetSetting(e);
          });
        }
      }, {
        key: "bindFontSize",
        value: function bindFontSize() {
          var _this4 = this;

          $("[data-trigger=font-size]").on("click", function (e) {
            return _this4.handleFontSize(e);
          });
        }
      }, {
        key: "getTooltipType",
        value: function getTooltipType() {
          return this.get("tooltip");
        }
      }, {
        key: "saveSettings",
        value: function saveSettings() {
          var e = JSON.stringify(settings);
          this.store.set("setting", e);
        }
      }, {
        key: "defaultSetting",
        value: function defaultSetting() {
          return {
            font: "v1",
            tooltip: "t",
            recitation: 7,
            nightMode: null,
            readingMode: !1,
            translations: [131, 20],
            repeatEnabled: !1,
            repeatCount: 1,
            repeatFrom: null,
            repeatTo: null,
            repeatIteration: 1,
            repeatType: "single",
            pauseBwAyah: 0,
            repeatAyah: null,
            autoScroll: !0,
            autoShowWordTooltip: !1,
            arabicFontSize: o,
            translationFontSize: l
          };
        }
      }, {
        key: "updateFontSize",
        value: function updateFontSize() {
          var t = [],
              s = this.mobile ? "mobile" : "desktop",
              n = parseInt(this.translationFontSize()[s]),
              i = parseInt(this.wordFontSize()[s]);
          var a = Math.min(Math.max(i, 15), 150);
          t.push(".verse .arabic, .w{font-size: ".concat(a, "px !important}")), t.push(".translation {font-size: ".concat(n, "px !important}")), t.push("#verses-reading .arabic .v1{word-spacing: ".concat(.323 * a, "px !important}")), t.push("#verses-reading .v1.pause {word-spacing: ".concat(.423 * a, "px !important}")), t.push(".translation__arabic .verse .arabic, .translation__arabic .w{font-size: ".concat(1.5 * a, "px !important}")), e.styles = this.styles, this.styles.innerText = t.join(" ");
        }
      }, {
        key: "get",
        value: function get(e) {
          return settings[e];
        }
      }, {
        key: "set",
        value: function set(e, t) {
          settings[e] = t, this.saveSettings(), document.body.setting = this;
        }
      }, {
        key: "handleFontSize",
        value: function handleFontSize(e) {
          e.preventDefault();
          var t,
              s,
              n = this.mobile ? "mobile" : "desktop",
              i = document.body.setting || this;
          var a = e.target.dataset,
              r = +a.increment;
          "arabic" == a.target ? (t = $(".verse .arabic"), s = this.wordFontSize()[n]) : (t = $(".verse .translation"), s = this.translationFontSize()[n]);
          var h,
              u,
              p = parseInt(t.css("font-size") || s, 10);

          if (p += r, "arabic" == a.target) {
            var _e = i.get("arabicFontSize") || o;

            _e[i.get("font")] ? _e[i.get("font")][n] = p : _e["default"][n] = p, i.set("arabicFontSize", _e), h = document.getElementById("font-size-plus--arabic"), u = document.getElementById("font-size-minus--arabic");
          } else {
            var _e2 = i.get("translationFontSize") || l;

            _e2[n] = p, i.set("translationFontSize", _e2), h = document.getElementById("font-size-plus--translation"), u = document.getElementById("font-size-minus--translation");
          }

          p <= 15 ? (u.style.color = c, u.disabled = !0, u.ariaDisabled = !0) : (u.style.color = d, u.disabled = !1, u.ariaDisabled = !1), p >= 150 ? (h.style.color = c, h.disabled = !0, h.ariaDisabled = !0) : (h.style.color = d, h.disabled = null, h.ariaDisabled = null), this.updateFontSize();
        }
      }, {
        key: "resetSetting",
        value: function resetSetting(e) {
          settings = this.defaultSetting(), this.saveSettings(), this.resetPage();
        }
      }, {
        key: "resetPage",
        value: function resetPage() {
          this.styles.innerText = "", Object(r.a)().changeTranslations(this.defaultSetting().translations);
        }
      }, {
        key: "wordFontSize",
        value: function wordFontSize() {
          var e = (0, document.body.setting.get)("arabicFontSize") || o;
          return e[this.currentFont] || e["default"];
        }
      }, {
        key: "translationFontSize",
        value: function translationFontSize() {
          return (0, document.body.setting.get)("translationFontSize") || l;
        }
      }, {
        key: "currentFont",
        get: function get() {
          var e = null;

          if (window.pageSettings && (e = pageSettings.font), !e) {
            e = (0, document.body.setting.get)("font");
          }

          return e;
        }
      }, {
        key: "selectedTranslations",
        get: function get() {
          return window.pageSettings ? pageSettings.translations : [];
        }
      }]);

      return _class;
    }(n.b);
  }.call(this, s(11));
},, function (e, t, s) {
  "use strict";

  s.d(t, "a", function () {
    return n;
  });

  var n = function n() {
    return document.getElementById("reader").reader;
  };
}, function (e, t, s) {
  "use strict";

  var n = /*#__PURE__*/function () {
    function n() {
      _classCallCheck(this, n);
    }

    _createClass(n, [{
      key: "getItem",
      value: function getItem(e) {
        var t = document.cookie.match("(^|;)\\s*".concat(e, "\\s*=\\s*([^;]+)"));
        return t ? t.pop() : null;
      }
    }, {
      key: "setItem",
      value: function setItem(e, t) {
        var s = new Date();
        s.setTime(s.getTime() + 2592e7);

        var _n = "; expires=" + s.toGMTString();

        document.cookie = e + "=" + String(t) + _n + "; path=/";
      }
    }]);

    return n;
  }();

  t.a = /*#__PURE__*/function () {
    function _class2(e) {
      _classCallCheck(this, _class2);

      this.storeKey = e ? "quran-store" : "quran-v1.4";
    }

    _createClass(_class2, [{
      key: "get",
      value: function get(e) {
        return this.getStore().getItem(this.transformKey(e));
      }
    }, {
      key: "set",
      value: function set(e, t) {
        return this.getStore().setItem(this.transformKey(e), t);
      }
    }, {
      key: "transformKey",
      value: function transformKey(e) {
        return "".concat(this.storeKey, "-").concat(e);
      }
    }, {
      key: "getStore",
      value: function getStore() {
        return "object" == (typeof localStorage === "undefined" ? "undefined" : _typeof(localStorage)) ? localStorage : new n();
      }
    }]);

    return _class2;
  }();
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1),
      i = s(3);

  t["default"] = /*#__PURE__*/function (_n$b2) {
    _inherits(_class3, _n$b2);

    var _super2 = _createSuper(_class3);

    function _class3() {
      _classCallCheck(this, _class3);

      return _super2.apply(this, arguments);
    }

    _createClass(_class3, [{
      key: "initialize",
      value: function initialize() {
        var _this5 = this;

        this.pageLoader = null, this.element.reader = this, this.currentVerse = {
          el: null,
          number: null,
          key: null,
          playing: !1
        }, this.bindAyahJump(), document.addEventListener("turbolinks:load", function () {
          return _this5.scrollToTop();
        });
      }
    }, {
      key: "connect",
      value: function connect() {
        var _this6 = this;

        this.translationTab = document.querySelector(".translation-tab"), this.readingTab = document.querySelector(".reading-tab"), this.el = $(this.element), this.totalVerses = Number(this.el.data("totalVerses")), this.activeTab = this.el.find(".tab-pane.show .verses"), this.segmentTimers = [], this.bindTabs(), setTimeout(function () {
          _this6.isInfoMode() || (_this6.pageLoader = _this6.activeTab.closest(".verses-wrapper")[0].infinitePage), _this6.updatePlayer();
        }, 100);
      }
    }, {
      key: "bindTabs",
      value: function bindTabs() {
        var _this7 = this;

        this.translationTab.addEventListener("tab.shown", function (e) {
          return _this7.tabChanged(e, "translation");
        }), this.readingTab.addEventListener("tab.shown", function (e) {
          return _this7.tabChanged(e, "reading");
        }), this.activeTab.on("items:added", function () {
          _this7.updatePlayer(!0);
        });
      }
    }, {
      key: "tabChanged",
      value: function tabChanged(e, t) {
        var _this8 = this;

        this.pausePageLoader();
        var s = e.currentTarget,
            n = s.href;
        var i = {};
        "info" != t && (i.reading = "reading" == t), n && this.updateURLState(n, i);
        var a = $(s.dataset.target).find(".verses-wrapper");
        this.activeTab = a.find(".verses"), this.pageLoader = a.get(0).infinitePage, this.activeTab.find(".render-async").length > 0 ? document.addEventListener("lazy:loaded", function () {
          _this8.jumpToCurrent(), _this8.resumePageLoader();
        }, {
          once: !0
        }) : (this.jumpToCurrent(), this.resumePageLoader());
      }
    }, {
      key: "isReadingMode",
      value: function isReadingMode() {
        return this.readingTab.classList.contains("tabs__item--selected");
      }
    }, {
      key: "isTranslationsMode",
      value: function isTranslationsMode() {
        return this.translationTab.classList.contains("tabs__item--selected");
      }
    }, {
      key: "bindAyahJump",
      value: function bindAyahJump() {
        var _this9 = this;

        $("#verse-list").find(".dropdown-item").on("click", function (e) {
          e.preventDefault();
          var _e$currentTarget$data = e.currentTarget.dataset,
              t = _e$currentTarget$data.verse,
              s = _e$currentTarget$data.verseKey;

          _this9.jumpToVerse(t, s);
        });
      }
    }, {
      key: "jumpToCurrent",
      value: function jumpToCurrent() {
        var e = this.currentVerse;
        e.key && this.jumpToVerse(e.number, e.key);
      }
    }, {
      key: "setPlaying",
      value: function setPlaying(e, t) {
        this.currentVerse.playing = !1, this.currentVerse = {
          key: e,
          playing: t
        }, t ? (this.scrollToCurrent(), this.highlightCurrent()) : this.removeHighlighting();
      }
    }, {
      key: "resetSegments",
      value: function resetSegments(e, t, s) {
        var _this10 = this;

        this.removeSegments();
        var n = t || [],
            i = 1e3 * e;
        $.each(n, function (e, t) {
          var n = parseInt(t[2], 10),
              a = parseInt(t[3], 10);
          if (i > a) return !0;

          if (i > n) {
            if (_this10.highlightSegment(t[0], t[1]), !s) return;
          } else {
            var _e3 = n - i;

            _this10.segmentTimers.push(setTimeout(function () {
              _this10.highlightSegment(t[0], t[1]);
            }, _e3));
          }
        });
      }
    }, {
      key: "highlightSegment",
      value: function highlightSegment(e, t) {
        var s = this.findVerse(this.currentVerse.key).find(".word");
        if (0 == s.length) return;
        var n = document.body.setting.get("autoShowWordTooltip");
        this.removeSegmentHighlight();

        for (var _i = parseInt(e, 10) + 1, a = parseInt(t, 10) + 1; _i < a; _i++) {
          if (s.eq(_i - 1).addClass("highlight"), n) {
            var _e4 = s.eq(_i - 1)[0].tooltip;
            _e4 && _e4.show();
          }
        }
      }
    }, {
      key: "removeSegmentHighlight",
      value: function removeSegmentHighlight() {
        $(".word.highlight").each(function (e, t) {
          var s = t.tooltip;
          s && s._popper && s.hide(), t.classList.remove("highlight");
        });
      }
    }, {
      key: "jumpToVerse",
      value: function jumpToVerse(e, t) {
        var _this11 = this;

        return this.findVerse(t).length > 0 ? this.setCurrentVerse(e, t) : this.loadVerses(e, t).then(function () {
          _this11.setCurrentVerse(e, t), _this11.updatePlayer();
        });
      }
    }, {
      key: "highlightCurrent",
      value: function highlightCurrent() {
        this.removeHighlighting();
        this.findVerse(this.currentVerse.key).addClass("highlight");
      }
    }, {
      key: "scrollToCurrent",
      value: function scrollToCurrent() {
        var e = this.currentVerse,
            t = this.findVerse(e.key);
        if (0 == t.length) return;
        $("#verse-list .dropdown-item").removeClass("active"), $("#verse-list").find("[data-verse-key='".concat(e.key, "']")).addClass("active"), $("#ayah-dropdown #current").html(this.verseText(e.key));
        var s = t.offset().top,
            n = t.outerHeight(),
            i = $(window).scrollTop(),
            a = window.innerHeight,
            r = $(".header").outerHeight() + $(".surah-actions").outerHeight();
        var o = s - (r + 50);
        (s + n > i + a - $("#player").outerHeight() || s < i + r) && document.scrollingElement.scrollTo({
          top: o,
          behavior: "smooth"
        });
      }
    }, {
      key: "insertVerses",
      value: function insertVerses(e) {
        var t = this.activeTab;
        return t.html(e), this.activeTab.trigger("items:added"), this.resumePageLoader(), Promise.resolve(t);
      }
    }, {
      key: "removeHighlighting",
      value: function removeHighlighting() {
        var e = $(".verse.highlight");
        e.length > 0 && (e.removeClass("highlight"), this.removeSegments());
      }
    }, {
      key: "removeSegments",
      value: function removeSegments() {
        if (this.segmentTimers.length > 0) {
          var _iterator = _createForOfIteratorHelper(this.segmentTimers),
              _step;

          try {
            for (_iterator.s(); !(_step = _iterator.n()).done;) {
              var _e5 = _step.value;
              clearTimeout(_e5);
            }
          } catch (err) {
            _iterator.e(err);
          } finally {
            _iterator.f();
          }

          this.segmentTimers = [];
        }

        this.removeSegmentHighlight();
      }
    }, {
      key: "findVerse",
      value: function findVerse(e) {
        return this.activeTab.find(".verse[data-key='".concat(e, "']"));
      }
    }, {
      key: "verseText",
      value: function verseText(e) {
        return this.isChapterMode ? Object(i.c)(e) : e;
      }
    }, {
      key: "disconnect",
      value: function disconnect() {
        var _this12 = this;

        document.removeEventListener("turbolinks:load", function () {
          return _this12.scrollToTop();
        });
      }
    }, {
      key: "scrollToTop",
      value: function scrollToTop() {
        document.body.scrollIntoView();
      }
    }, {
      key: "pausePageLoader",
      value: function pausePageLoader() {
        this.pageLoader && this.pageLoader.pause();
      }
    }, {
      key: "resumePageLoader",
      value: function resumePageLoader() {
        this.pageLoader && this.pageLoader.resume();
      }
    }, {
      key: "updateURLState",
      value: function updateURLState(e, t) {
        window.history.pushState(t, "", e);
      }
    }, {
      key: "setCurrentVerse",
      value: function setCurrentVerse(e, t) {
        var s = this.findVerse(t),
            n = this.currentVerse;
        return this.currentVerse = {
          number: e,
          key: t,
          playing: s.data("playing")
        }, this.scrollToCurrent(), this.highlightCurrent(), n.playing && this.player.playVerse(t), Promise.resolve([]);
      }
    }, {
      key: "updatePlayer",
      value: function updatePlayer(e) {
        var t = this.activeTab.find(".verse");
        e ? this.player.updateVerses(t.first().data("key"), t.last().data("key")) : this.player.init(this, t.first().data("key"), t.last().data("key"));
      }
    }, {
      key: "getLazyTab",
      value: function getLazyTab(e, t, s) {
        var n = "{\"root\":\"".concat(t, "\"}");
        return "<div\n              class=\"render-async my-3\"\n              id=\"render-async-".concat(Math.random().toString(36).substring(7), "\"\n              data-path=\"").concat(e, "\"\n              data-method=\"GET\"\n              data-headers=\"{}\"\n              data-success-event=\"lazy:loaded\"\n              data-lazy-load=").concat(!!s && n, "\n              data-controller=\"render-async\">\n               <p class=\"text-center p-3\">\n                 <span class='spinner text text--grey'><i class='spinner--swirl'></i></span>\n               </p>\n            </div>");
      }
    }, {
      key: "changeFont",
      value: function changeFont(e) {
        var t = {
          translations: document.body.setting.selectedTranslations.join(","),
          start: this.currentVerse.key,
          font: e
        };
        var s = "".concat(this.readingTab.href, "&").concat($.param(t)),
            n = "".concat(this.translationTab.href, "&").concat($.param(t)),
            i = this.readingTab.dataset.target,
            a = this.translationTab.dataset.target,
            r = document.querySelector(i + " .verses"),
            o = document.querySelector(a + " .verses");
        return window.pageSettings.font = e, r.innerHTML = this.getLazyTab(s, i, !this.isReadingMode()), o.innerHTML = this.getLazyTab(n, a, !this.isTranslationsMode()), this.currentVerse.key ? this.jumpToVerse(this.currentVerse.number, this.currentVerse.key) : Promise.resolve();
      }
    }, {
      key: "changeTranslations",
      value: function changeTranslations(e) {
        var _this13 = this;

        var t;
        document.querySelector("#open-translations count").textContent = e.length, t = 0 == e.length ? "no" : e.join(","), document.body.loader.show();
        var s = {
          translations: t,
          start: this.currentVerse.key
        };
        var n = "".concat(this.translationTab.href, "&").concat($.param(s)),
            i = $(this.translationTab.dataset.target).find(".verses");
        fetch("" + n, {
          headers: {
            "X-Requested-With": "XMLHttpRequest"
          }
        }).then(function (e) {
          return e.text();
        }).then(function (e) {
          if (i.html(e), document.body.loader.hide(), _this13.currentVerse.key) return _this13.jumpToVerse(_this13.currentVerse.number, _this13.currentVerse.key);
        });
      }
    }, {
      key: "playingCurrentVerse",
      get: function get() {
        return this.currentVerse.playing;
      }
    }, {
      key: "player",
      get: function get() {
        return document.getElementById("player").player;
      }
    }]);

    return _class3;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  function n(e, t) {
    if (e.contains) return e != t && e.contains(t);
    var s = e;

    for (; null !== s;) {
      if (s === t) return !0;
      s = s.parentNode;
    }

    return !1;
  }

  s.d(t, "a", function () {
    return n;
  });
}, function (e, t, s) {
  "use strict";

  s.d(t, "a", function () {
    return n;
  });

  var n = /*#__PURE__*/function () {
    function n() {
      _classCallCheck(this, n);
    }

    _createClass(n, [{
      key: "isMobile",
      value: function isMobile() {
        return /iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()) || window.innerWidth < 992;
      }
    }, {
      key: "isChrome",
      value: function isChrome() {
        return /chrom(e|ium)/.test(navigator.userAgent.toLowerCase());
      }
    }, {
      key: "isSafari",
      value: function isSafari() {
        return window.safari || /CriOS/i.test(navigator.userAgent) && /iphone|ipod|ipad/i.test(navigator.userAgent);
      }
    }]);

    return n;
  }();
},, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);
  var i, a;

  t["default"] = /*#__PURE__*/function (_n$b3) {
    _inherits(_class4, _n$b3);

    var _super3 = _createSuper(_class4);

    function _class4() {
      _classCallCheck(this, _class4);

      return _super3.apply(this, arguments);
    }

    _createClass(_class4, [{
      key: "connect",
      value: function connect() {
        this.getSetting = document.body.setting.get, this.preloadTrack = {}, this.currentTrack = {
          howl: null,
          segments: []
        };
      }
    }, {
      key: "buildAudioUrl",
      value: function buildAudioUrl(e) {
        return /(http)?s?:?\/\//.test(e) || (e = "https://audio.qurancdn.com/" + e), e;
      }
    }, {
      key: "loadHowler",
      value: function loadHowler() {
        return i ? Promise.resolve() : s.e(5).then(s.t.bind(null, 86, 7)).then(function (e) {
          i = e.Howl, a = e.Howler;
        });
      }
    }]);

    return _class4;
  }(n.b);
},, function (e, t, s) {
  "use strict";

  (function (e) {
    var n = s(22);

    t.a = /*#__PURE__*/function () {
      function _class5() {
        _classCallCheck(this, _class5);
      }

      _createClass(_class5, [{
        key: "loadModal",
        value: function loadModal(e, t) {
          this.createModel(t), $("#ajax-modal").on("hidden.bs.modal", function (e) {
            $("#ajax-modal").empty().remove();
          }), fetch(e, {
            headers: {
              "X-Requested-With": "XMLHttpRequest"
            }
          }).then(function (e) {
            return e.text();
          }).then(function (e) {
            var t = $("<div>").html(e),
                s = t.find("#title").html(),
                n = t.find("#modal").html();
            s && s.length > 0 && (document.getElementById("ajax-modal-title").innerHTML = s, document.getElementById("ajax-modal-body").innerHTML = n);
          })["catch"](function (e) {});
        }
      }, {
        key: "createModel",
        value: function createModel() {
          var _this14 = this;

          var t = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : "";
          var s;
          this.removeModal("ajax-modal"), $(".actions-wrapper").addClass("hidden"), s = "\n        <div class=\"modal-dialog ".concat(t, "\">\n          <div class=\"modal-content\">\n            <div class=\"modal-header\">\n              <h5 class=\"modal-title text text--black\" id=\"ajax-modal-title\">Loading</h5>\n              <a class=\"close text--green\" data-dismiss=\"modal\" aria-label=\"Close\">\n                <span aria-hidden=\"true\" class=\"quran-icon icon-times-circle\"></span>\n              </a>\n            </div>\n\n            <div id=\"ajax-modal-body\">\n              <p class=\"text-center\"><span class='spinner text text--grey'><i class='spinner--swirl'></i></span> Loading...</p>\n            </div>\n          </div>\n        </div>");
          var i = document.createElement("div");
          i.classList.add("modal"), i.id = "ajax-modal", i.innerHTML = s, document.body.append(i), i.addEventListener("hidden.bs.modal", function () {
            _this14.removeModal();
          }), e.dialog = new n.a(i, {
            backdrop: "static"
          }), e.dialog.show();
        }
      }, {
        key: "removeModal",
        value: function removeModal(e) {
          var t = document.getElementById(e || "ajax-modal");

          if (t) {
            document.body.removeChild(t);

            var _e6 = document.getElementsByClassName("modal-backdrop");

            _e6 && _e6.length > 0 && document.body.removeChild(_e6[0]);
          }
        }
      }]);

      return _class5;
    }();
  }).call(this, s(11));
},,,,,,, function (e, t, s) {
  "use strict";

  t.a = /*#__PURE__*/function () {
    function _class6() {
      _classCallCheck(this, _class6);
    }

    _createClass(_class6, null, [{
      key: "trackEvent",
      value: function trackEvent(e, t, s, n) {
        return new Promise(function (i) {
          gtag && gtag("event", e, {
            event_category: t || e,
            event_label: s,
            value: n || 1,
            event_callback: function event_callback() {
              i && i();
            }
          });
        });
      }
    }]);

    return _class6;
  }();
},,,, function (e, t, s) {
  "use strict";

  s.r(t), function (e) {
    var t = s(0),
        n = s.n(t),
        i = (s(28), s(30), s(21));
    s(32);
    s(26).start(), s(27), window.$ = window.JQuery = n.a, e.GoogleAnalytic = i.a, s(31), document.addEventListener("turbolinks:request-start", function (e) {
      e.data.xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    }), s(82);
  }.call(this, s(11));
},,, function (e, t, s) {
  "use strict";

  s(29);
},, function (e, t) {
  document.addEventListener("turbolinks:click", function (e) {
    var t = e.target;
    t.hash && t.origin === window.location.origin && t.pathname === window.location.pathname && (e.preventDefault(), Turbolinks.controller.pushHistoryWithLocationAndRestorationIdentifier(e.data.url, Turbolinks.uuid()));
  });
}, function (e, t) {
  window.addEventListener("beforeinstallprompt", function (e) {
    GoogleAnalytic.trackEvent("Promote Native Install", "AddToHomeScreen", "Promoting", 1), e.userChoice.then(function (e) {
      "dismissed" == e.outcome ? GoogleAnalytic.trackEvent("Cancelled", "AddToHomeScreen", "Cancelled", 1) : GoogleAnalytic.trackEvent("Granted", "AddToHomeScreen", "Granted", 1);
    });
  }), "serviceWorker" in navigator && navigator.serviceWorker.register("/serviceworker.js", {
    scope: "./"
  }).then(function (e) {
    console.log("Quran.com SW Registered:", e);
  })["catch"](function (e) {
    console.error("Quran.com SW Registration failed: ", e);
  });
}, function (e, t, s) {
  "use strict";

  var n = s(1),
      i = s(24);
  var a = n.a.start(),
      r = s(33);
  a.load(Object(i.a)(r));
}, function (e, t, s) {
  var n = {
    "./ajax_modal_controller.js": 34,
    "./announcement_controller.js": 35,
    "./audio_controller.js": 12,
    "./audio_repeat_setting_controller.js": 36,
    "./bookmarks_controller.js": 37,
    "./chapter_controller.js": 38,
    "./chapter_info_controller.js": 39,
    "./choose_locales_controller.js": 40,
    "./choose_recitation_controller.js": 41,
    "./choose_translations_controller.js": 42,
    "./copy_advanced_controller.js": 43,
    "./donation_controller.js": 45,
    "./feedback_controller.js": 46,
    "./filter_list_controller.js": 47,
    "./filterable_dropdown_controller.js": 48,
    "./font_controller.js": 49,
    "./footnote_controller.js": 50,
    "./infinite_page_controller.js": 84,
    "./menu_controller.js": 51,
    "./player_controller.js": 52,
    "./quran_controller.js": 8,
    "./quran_juz_controller.js": 53,
    "./quran_page_controller.js": 54,
    "./render_async_controller.js": 85,
    "./search_form_controller.js": 55,
    "./search_result_controller.js": 66,
    "./search_results_controller.js": 67,
    "./search_suggestions_controller.js": 68,
    "./segment_player_controller.js": 69,
    "./segment_selection_controller.js": 70,
    "./setting_controller.js": 4,
    "./share_controller.js": 71,
    "./sidebar_controller.js": 72,
    "./spinner_controller.js": 73,
    "./tabs_controller.js": 74,
    "./tafsir_modal_controller.js": 75,
    "./theme_controller.js": 76,
    "./track_controller.js": 77,
    "./translation_controller.js": 78,
    "./verse_controller.js": 79,
    "./word_controller.js": 80,
    "./word_player_controller.js": 81
  };

  function i(e) {
    var t = a(e);
    return s(t);
  }

  function a(e) {
    if (!s.o(n, e)) {
      var t = new Error("Cannot find module '" + e + "'");
      throw t.code = "MODULE_NOT_FOUND", t;
    }

    return n[e];
  }

  i.keys = function () {
    return Object.keys(n);
  }, i.resolve = a, e.exports = i, i.id = 33;
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1),
      i = s(14);

  t["default"] = /*#__PURE__*/function (_n$b4) {
    _inherits(_class7, _n$b4);

    var _super4 = _createSuper(_class7);

    function _class7() {
      _classCallCheck(this, _class7);

      return _super4.apply(this, arguments);
    }

    _createClass(_class7, [{
      key: "connect",
      value: function connect() {
        var _this15 = this;

        this.element.addEventListener("click", function (e) {
          return _this15.loadModal(e);
        });
      }
    }, {
      key: "loadModal",
      value: function loadModal(e) {
        e.preventDefault(), e.stopImmediatePropagation();
        var t = $(e.currentTarget),
            s = t.data("url"),
            n = t.data("class");
        new i.a().loadModal(s, n);
      }
    }]);

    return _class7;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1),
      i = s(7);
  s(14);

  t["default"] = /*#__PURE__*/function (_n$b5) {
    _inherits(_class8, _n$b5);

    var _super5 = _createSuper(_class8);

    function _class8() {
      _classCallCheck(this, _class8);

      return _super5.apply(this, arguments);
    }

    _createClass(_class8, [{
      key: "connect",
      value: function connect() {
        this.el = $(this.element), this.store = new i.a(), this.canShowJobsBanner() && this.show();
      }
    }, {
      key: "show",
      value: function show() {
        var _this16 = this;

        this.el.find(".close").on("click", function (e) {
          e.preventDefault(), _this16.onHide(e);
        }), this.el.find(".cta").on("click", function (e) {
          _this16.onHide(e);
        }), this.el.removeClass("hidden");
      }
    }, {
      key: "onHide",
      value: function onHide(e) {
        this.store.set("ann-" + this.el.data("id"), new Date().getTime()), this.el.addClass("hidden");
      }
    }, {
      key: "canShowJobsBanner",
      value: function canShowJobsBanner() {
        return !this.dismissedAt;
      }
    }, {
      key: "dismissedAt",
      get: function get() {
        return this.store.get("ann-" + this.el.data("id"));
      }
    }, {
      key: "popupShownAt",
      get: function get() {
        return this.store.get("pop-" + this.el.data("id"));
      }
    }]);

    return _class8;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(4),
      i = s(6);
  s(3);

  t["default"] = /*#__PURE__*/function (_n$default) {
    _inherits(_class9, _n$default);

    var _super6 = _createSuper(_class9);

    function _class9() {
      _classCallCheck(this, _class9);

      return _super6.apply(this, arguments);
    }

    _createClass(_class9, [{
      key: "connect",
      value: function connect() {
        _get(_getPrototypeOf(_class9.prototype), "connect", this).call(this);

        $(this.element).find(".simple-select").select2({
          dropdownAutoWidth: !0,
          width: "100%",
          dropdownCssClass: "select-stylee",
          placeholder: "selected option"
        }), this.pageMode = "true" == this.element.dataset.pageMode, this.bindSwitch(), this.bindRepeatSingle(), this.bindRepeatRange(), this.bindPause();
      }
    }, {
      key: "bindSwitch",
      value: function bindSwitch() {
        var _this17 = this;

        var e = $("#repeat-switch"),
            t = $("#tooltip-switch");
        e.on("change", function () {
          var t = e.is(":checked");
          _this17.set("repeatEnabled", t), _this17.updatePlayerRepeat(), t ? $(".audio-control").removeClass("hidden fade") : $(".audio-control").addClass("hidden fade");
        }), t.on("change", function () {
          var e = t.is(":checked");

          _this17.set("autoShowWordTooltip", e);
        }), e[0].checked = this.get("repeatEnabled"), t[0].checked = this.get("autoShowWordTooltip"), e.trigger("change"), t.trigger("change");
      }
    }, {
      key: "bindRepeatSingle",
      value: function bindRepeatSingle() {
        var _this18 = this;

        this.repeatSingle = $("#repeat-single-ayah"), this.repeatSingleTimes = $("#repeat-single-times"), this.repeatSingle.on("change", function () {
          return _this18.updateRepeatSingle();
        }), this.repeatSingleTimes.on("change", function () {
          return _this18.updateRepeatSingle();
        });
        var e = document.querySelector("#repeat-single");
        e.addEventListener("shown.bs.tab", function () {
          return _this18.updateRepeatSingle();
        }), e.addEventListener("change", function () {
          return _this18.toggle();
        });
      }
    }, {
      key: "toggle",
      value: function toggle() {
        document.querySelector(".single-ayah").classList.toggle("hidden"), document.querySelector(".range-ayah").classList.toggle("hidden");
      }
    }, {
      key: "bindRepeatRange",
      value: function bindRepeatRange() {
        var _this19 = this;

        this.repeatRangeFrom = $("#repeat-range-from"), this.repeatRangeTo = $("#repeat-range-to"), this.repeatRangeTimes = $("#repeat-range-times"), this.repeatRangeTo.attr("disabled", !0), this.repeatRangeFrom.on("change", function (e) {
          var t = Number(_this19.repeatRangeFrom.val());
          _this19.repeatRangeTo.val(0), _this19.repeatRangeTo.find("option").each(function (e, s) {
            var n = Number(s.value);
            s.disabled = n > 0 && n < t;
          }), _this19.repeatRangeTo.attr("disabled", !1), _this19.updateRepeatRange();
        }), this.repeatRangeTo.on("change", function () {
          return _this19.updateRepeatRange();
        }), this.repeatRangeTimes.on("change", function () {
          return _this19.updateRepeatRange();
        });
        var e = document.querySelector("#repeat-range");
        e.addEventListener("shown.bs.tab", function () {
          return _this19.updateRepeatRange();
        }), e.addEventListener("change", function () {
          return _this19.toggle();
        });
      }
    }, {
      key: "updateRepeatSingle",
      value: function updateRepeatSingle() {
        var e = this.repeatSingle.val();
        this.set("repeatType", "single"), this.set("repeatCount", Number(this.repeatSingleTimes.val())), this.set("repeatAyah", e), this.updatePlayerRepeat();
      }
    }, {
      key: "jumpTo",
      value: function jumpTo(e) {
        return 0 == this.pageMode ? Object(i.a)().loadVerses(null, e) : Object(i.a)().setCurrentVerse(e, e);
      }
    }, {
      key: "updateRepeatRange",
      value: function updateRepeatRange() {
        var e = this.repeatRangeFrom.val();
        this.set("repeatType", "range"), this.set("repeatCount", Number(this.repeatRangeTimes.val())), this.set("repeatFrom", e), this.set("repeatTo", this.repeatRangeTo.val()), this.updatePlayerRepeat();
      }
    }, {
      key: "bindPause",
      value: function bindPause() {
        var _this20 = this;

        var e = $("#pause-bw-ayah-seconds");
        $("[name='pause-bw-ayah']").on("change", function () {
          _this20.updatePause(e.val());
        }), e.on("change", function () {
          _this20.updatePause(e.val());
        });
      }
    }, {
      key: "updatePause",
      value: function updatePause(e) {
        $("#pause-ayah").is(":checked") ? this.set("pauseBwAyah", Number(e)) : this.set("pauseBwAyah", 0);
        var t,
            s = document.getElementById("player");
        if (s && (t = s.player), t) return t.updatePause(this.get("pauseBwAyah"));
      }
    }, {
      key: "updatePlayerRepeat",
      value: function updatePlayerRepeat() {
        var _this21 = this;

        var e,
            t,
            s = 0;
        "single" == this.get("repeatType") ? (s = this.get("repeatAyah"), e = s, t = s) : (s = this.get("repeatFrom"), e = s, t = this.get("repeatTo")), s && (document.body.loader.show(), this.jumpTo(s).then(function () {
          document.body.loader.hide();
          var s,
              n = document.getElementById("player");
          n && (s = n.player), s && (s.updateRepeat({
            repeatEnabled: _this21.get("repeatEnabled"),
            repeatCount: _this21.get("repeatCount"),
            repeatType: _this21.get("repeatType"),
            repeatAyah: _this21.get("repeatAyah"),
            repeatFrom: _this21.get("repeatFrom"),
            repeatTo: _this21.get("repeatTo")
          }, {
            first: e,
            last: t
          }), s.createHowlAndPlay());
        }));
      }
    }]);

    return _class9;
  }(n["default"]);
}, function (e, t, s) {
  "use strict";

  s.r(t), s.d(t, "default", function () {
    return a;
  });
  var n = s(1),
      i = s(7);

  var a = /*#__PURE__*/function (_n$b6) {
    _inherits(a, _n$b6);

    var _super7 = _createSuper(a);

    function a() {
      _classCallCheck(this, a);

      return _super7.apply(this, arguments);
    }

    _createClass(a, [{
      key: "connect",
      value: function connect() {
        var e = Object.entries(this.loadBookmarks());

        for (var _i2 = 0, _e7 = e; _i2 < _e7.length; _i2++) {
          var _e7$_i = _slicedToArray(_e7[_i2], 2),
              _t = _e7$_i[0],
              _s = _e7$_i[1];

          this.addBookmark(_t, _s);
        }

        e.length > 0 && this.element.classList.remove("hidden");
      }
    }, {
      key: "loadBookmarks",
      value: function loadBookmarks() {
        try {
          return JSON.parse(this.constructor.store.get("bookmarks") || "{}");
        } catch (e) {
          return {};
        }
      }
    }, {
      key: "addBookmark",
      value: function addBookmark(e, t) {
        $("#bookmark-list").append("<a class=\"btn btn--lightgreen btn--large\" data-controller=\"track\" data-name=\"bookmarks\" data-category=\"".concat(e, "\" href=\"").concat(t, "\"><span class=\"en\">").concat(e, "</span></a>"));
      }
    }]);

    return a;
  }(n.b);

  a.store = new i.a(!0);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(8);
  s(3);

  t["default"] = /*#__PURE__*/function (_n$default2) {
    _inherits(_class10, _n$default2);

    var _super8 = _createSuper(_class10);

    function _class10() {
      _classCallCheck(this, _class10);

      return _super8.apply(this, arguments);
    }

    _createClass(_class10, [{
      key: "connect",
      value: function connect() {
        var _this22 = this;

        _get(_getPrototypeOf(_class10.prototype), "connect", this).call(this), this.infoTab = document.querySelector(".surah-info-tab"), this.infoTab.addEventListener("tab.shown", function (e) {
          return _this22.tabChanged(e, "info");
        });
      }
    }, {
      key: "isInfoMode",
      value: function isInfoMode() {
        return this.infoTab.classList.contains("tabs__item--selected");
      }
    }, {
      key: "id",
      value: function id() {
        return this.el.data("id");
      }
    }, {
      key: "loadVerses",
      value: function loadVerses(e, t) {
        var _this23 = this;

        document.body.loader.show(), this.pausePageLoader();
        var s = this.id(),
            n = this.isReadingMode();
        var i, a;
        var r = document.body.setting;
        i = r.currentFont, a = r.selectedTranslations.join(",");
        var o = fetch("/".concat(s, "/load_verses?").concat($.param({
          start: t,
          reading: n,
          font: i,
          translations: a
        })), {
          headers: {
            "X-Requested-With": "XMLHttpRequest"
          }
        }).then(function (e) {
          return e.text();
        }).then(function (e) {
          document.body.loader.hide(), _this23.insertVerses(e);
        });
        return Promise.resolve(o);
      }
    }, {
      key: "isChapterMode",
      get: function get() {
        return !0;
      }
    }]);

    return _class10;
  }(n["default"]);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);

  t["default"] = /*#__PURE__*/function (_n$b7) {
    _inherits(_class11, _n$b7);

    var _super9 = _createSuper(_class11);

    function _class11() {
      _classCallCheck(this, _class11);

      return _super9.apply(this, arguments);
    }

    _createClass(_class11, [{
      key: "connect",
      value: function connect() {
        var e = $(this.element);
        e.addClass("text text--grey"), e.find("p, ul, span").addClass("text--medium text--regular"), e.find("h2, h3").addClass("text text--darkgrey text--large text--semibold");
      }
    }]);

    return _class11;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(4);

  t["default"] = /*#__PURE__*/function (_n$default3) {
    _inherits(_class12, _n$default3);

    var _super10 = _createSuper(_class12);

    function _class12() {
      _classCallCheck(this, _class12);

      return _super10.apply(this, arguments);
    }

    _createClass(_class12, [{
      key: "connect",
      value: function connect() {
        var _this24 = this;

        _get(_getPrototypeOf(_class12.prototype), "connect", this).call(this), $(this.element).find("[name=locale]").on("change", function (e) {
          e.preventDefault(), _this24.updateLocale(e.target.value);
        });
      }
    }, {
      key: "disconnect",
      value: function disconnect() {
        $(document).off("change", "[name=locale]", function (e) {});
      }
    }, {
      key: "updateLocale",
      value: function updateLocale(e) {
        Turbolinks.visit(parent.window.location.origin + parent.window.location.pathname + "?locale=" + e);
      }
    }]);

    return _class12;
  }(n["default"]);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(4),
      i = s(5);
  var a = {
    mujawwad: "Mujawwad is a melodic style of Holy Quran recitation",
    murattal: "Murattal is at a slower pace, used for study and practice",
    muallim: "Muallim is teaching style recitation of Holy Quran"
  };

  t["default"] = /*#__PURE__*/function (_n$default4) {
    _inherits(_class13, _n$default4);

    var _super11 = _createSuper(_class13);

    function _class13() {
      _classCallCheck(this, _class13);

      return _super11.apply(this, arguments);
    }

    _createClass(_class13, [{
      key: "connect",
      value: function connect() {
        var _this25 = this;

        _get(_getPrototypeOf(_class13.prototype), "connect", this).call(this);

        var e = this.get("recitation");
        this.element.querySelectorAll("[name=recitation]").forEach(function (t) {
          e == t.value && (t.setAttribute("checked", "checked"), $(t).prop("checked", !0));
        }), $(this.element).find("[name=recitation]").on("change", function (e) {
          e.preventDefault(), e.stopImmediatePropagation(), _this25.updateReciter(e.target.value);
        }), this.element.querySelectorAll("[data-style]").forEach(function (e) {
          new i.a(e, {
            direction: "left",
            title: a[e.dataset.style],
            sanitize: !1
          });
        });
      }
    }, {
      key: "disconnect",
      value: function disconnect() {
        $(document).off("change", "[name=font]", function (e) {});
      }
    }, {
      key: "updateReciter",
      value: function updateReciter(e) {
        var t = document.getElementById("player").player;
        this.set("recitation", e), t.setRecitation(e);
      }
    }]);

    return _class13;
  }(n["default"]);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(4),
      i = s(6);

  t["default"] = /*#__PURE__*/function (_n$default5) {
    _inherits(_class14, _n$default5);

    var _super12 = _createSuper(_class14);

    function _class14() {
      _classCallCheck(this, _class14);

      return _super12.apply(this, arguments);
    }

    _createClass(_class14, [{
      key: "connect",
      value: function connect() {
        var _this26 = this;

        _get(_getPrototypeOf(_class14.prototype), "connect", this).call(this), this.bindClearAll();
        var e = window.pageSettings ? window.pageSettings.translations : this.get("translations");
        this.element.querySelectorAll(".translation-checkbox").forEach(function (t) {
          e.includes(Number(t.value)) && t.setAttribute("checked", "checked");
        }), $(this.element).find(".translation-checkbox").on("change", function (e) {
          e.preventDefault(), e.stopImmediatePropagation(), _this26.updateTranslations();
        });
      }
    }, {
      key: "bindClearAll",
      value: function bindClearAll() {
        var _this27 = this;

        $("#translation-clear-all").on("click", function () {
          return _this27.clearAllTranslations();
        });
      }
    }, {
      key: "disconnect",
      value: function disconnect() {}
    }, {
      key: "updateTranslations",
      value: function updateTranslations() {
        var e = [];
        document.querySelectorAll(".translation-checkbox:checked").forEach(function (t) {
          e.push(t.value);
        }), this.set("translations", e), Object(i.a)().changeTranslations(e);
      }
    }, {
      key: "clearAllTranslations",
      value: function clearAllTranslations() {
        document.querySelectorAll(".translation-checkbox").forEach(function (e) {
          e.checked = !1;
        }), this.set("translations", []), Object(i.a)().changeTranslations([]);
      }
    }]);

    return _class14;
  }(n["default"]);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1),
      i = s(13),
      a = s.n(i),
      r = s(3);

  t["default"] = /*#__PURE__*/function (_n$b8) {
    _inherits(_class15, _n$b8);

    var _super13 = _createSuper(_class15);

    function _class15() {
      _classCallCheck(this, _class15);

      return _super13.apply(this, arguments);
    }

    _createClass(_class15, [{
      key: "connect",
      value: function connect() {
        var e = this.element.dataset.verseKey;
        this.verseKey = e, this.rangeType = "single", this.selects = $(".simple-select").select2({
          dropdownAutoWidth: !0,
          width: "100%",
          dropdownCssClass: "select-stylee",
          placeholder: "selected option"
        }), this.copyRangeFrom = $("#copy-range-ayah-from"), this.copyRangeTo = $("#copy-range-ayah-to"), 0 == this.copyRangeTo.val().length && this.copyRangeTo.attr("disabled", !0), this.bindingElements();
      }
    }, {
      key: "disconnect",
      value: function disconnect() {
        var e = this.selects.data("select2");
        e && e.destroy();
      }
    }, {
      key: "bindingElements",
      value: function bindingElements() {
        var _this28 = this;

        this.copyRangeFrom.on("change", function (e) {
          var t = _this28.copyRangeFrom.val();

          if ("0" == t) return _this28.copyRangeTo.attr("disabled", !0), void _this28.copyRangeTo.find("option").attr("disabled", "disabled");
          var s = Object(r.a)(t);
          _this28.copyRangeTo.find("option").each(function (e, t) {
            if (0 != t.value) {
              var _e8 = Object(r.a)(t.value);

              t.disabled = _e8 < s;
            }
          }), _this28.copyRangeTo.attr("disabled", !1);
        });
        $(this.element).find("[name=copy-type]").on("change", function (e) {
          _this28.rangeType = e.currentTarget.value;
          var t = document.querySelector(".copy-range-ayah").classList;
          "single" == _this28.rangeType ? t.add("hidden") : t.remove("hidden");
        });
        var e = this.element.querySelector("#copy");
        e.addEventListener("click", function (t) {
          t.preventDefault(), _this28.doCopy(e);
        });
      }
    }, {
      key: "doCopy",
      value: function doCopy(e) {
        var _this29 = this;

        e.innerHTML = "Please wait..", e.disabled = !0, $("#file-notice").addClass("hidden"), this.getText().then(function (e) {
          return e.text();
        }).then(function (t) {
          a()(t), e.innerHTML = "Copied!", e.disabled = !1, _this29.prepareTextFile(t), setTimeout(function () {
            e.innerHTML = "Copy text";
          }, 3e3);
        })["catch"](function (t) {
          e.innerHTML = "Copy text", e.disabled = !1, $("#error-notice").removeClass("hidden");
        });
      }
    }, {
      key: "prepareTextFile",
      value: function prepareTextFile(e) {
        var t = new Blob([e], {
          type: "text/plain"
        }),
            s = $("#file-notice").find("a")[0];
        s.href = URL.createObjectURL(t), s.download = "quran.copy.txt", $("#file-notice").removeClass("hidden");
      }
    }, {
      key: "getText",
      value: function getText() {
        $("#error-notice").addClass("hidden");
        var _ref = [this.verseKey, this.verseKey],
            e = _ref[0],
            t = _ref[1];
        if ("multiple" == this.rangeType && (e = this.copyRangeFrom.val(), t = this.copyRangeTo.val()), !this.validSelection(e, t)) return Promise.reject("Invalid ayah range");
        var s = {
          arabic: this.addArabic(),
          footnote: this.addFootnote(),
          translations: this.selectedTranslations().join(","),
          from: e,
          to: t
        };
        var n = "/advance_copy/copy_text?" + $.param(s);
        return fetch(n, {
          headers: {
            "X-Requested-With": "XMLHttpRequest"
          }
        });
      }
    }, {
      key: "validSelection",
      value: function validSelection(e, t) {
        if (0 == e || 0 == t || void 0 == e || void 0 == t || 0 == e.length || 0 == t.length) return !1;
        return Object(r.a)(e) <= Object(r.a)(t);
      }
    }, {
      key: "selectedTranslations",
      value: function selectedTranslations() {
        return _toConsumableArray(this.element.querySelectorAll('input[name="copy-translation"]:checked')).map(function (e) {
          return e.value;
        });
      }
    }, {
      key: "addFootnote",
      value: function addFootnote() {
        return this.element.querySelector(".copy-footnote:checked").value;
      }
    }, {
      key: "addArabic",
      value: function addArabic() {
        return this.element.querySelector("#copy-arabic").checked;
      }
    }]);

    return _class15;
  }(n.b);
},, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);

  t["default"] = /*#__PURE__*/function (_n$b9) {
    _inherits(_class16, _n$b9);

    var _super14 = _createSuper(_class16);

    function _class16() {
      _classCallCheck(this, _class16);

      return _super14.apply(this, arguments);
    }

    _createClass(_class16, [{
      key: "connect",
      value: function connect() {
        this.element.addEventListener("click", function (e) {
          givingloop("donate", {
            amount: 50,
            monthly: !0
          });
        });
      }
    }]);

    return _class16;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);

  t["default"] = /*#__PURE__*/function (_n$b10) {
    _inherits(_class17, _n$b10);

    var _super15 = _createSuper(_class17);

    function _class17() {
      _classCallCheck(this, _class17);

      return _super15.apply(this, arguments);
    }

    _createClass(_class17, [{
      key: "connect",
      value: function connect() {
        var _this30 = this;

        this.form = $(this.element), this.form.find("#submit").on("click", function (e) {
          return 0 == _this30.validate(e, _this30.form[0]) || _this30.submit(), !1;
        }), this.form.on("submit", function (e) {
          return 0 == _this30.validate(e, _this30.form[0]) || _this30.submit(), !1;
        });
      }
    }, {
      key: "validate",
      value: function validate(e, t) {
        return e.preventDefault(), e.stopPropagation(), $(t).hasClass("was-validated") || $(t).addClass("was-validated"), !1 !== t.checkValidity() || (t.reportValidity(), !1);
      }
    }, {
      key: "submit",
      value: function submit() {
        var _this31 = this;

        var e = this.form.find("[type='submit']")[0];
        this.element.querySelector("#current-url").value = window.location.href, e.innerHTML = '<span class="quran-icon icon-loading"></span>', e.disabled = !0;
        var t = {
          "X-Requested-With": "XMLHttpRequest"
        },
            s = document.querySelector('meta[name="csrf-token"]');
        s && (t["X-CSRF-Token"] = s.content);
        var n = {
          headers: t,
          mode: "cors",
          method: "POST",
          body: new FormData(this.element)
        };
        fetch(this.element.action, n).then(function (e) {
          return e.json();
        }).then(function (t) {
          e.innerHTML = "Submit", e.disabled = !1, _this31.form.find("#notice").html(t.message).removeClass("hidden");
        })["catch"](function (e) {
          console.log(e);
        });
      }
    }]);

    return _class17;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);

  t["default"] = /*#__PURE__*/function (_n$b11) {
    _inherits(_class18, _n$b11);

    var _super16 = _createSuper(_class18);

    function _class18() {
      _classCallCheck(this, _class18);

      return _super16.apply(this, arguments);
    }

    _createClass(_class18, [{
      key: "connect",
      value: function connect() {
        this.el = $(this.element), this.listFilter(this.el.data("list"), this.el.data("input"));
      }
    }, {
      key: "listFilter",
      value: function listFilter(e, t) {
        var s = this,
            n = $(e),
            i = $(t);
        i.length && (i.is(":visible") && i.trigger("focus"), i.on("change", function () {
          var e = i.val().toLowerCase();
          s.doFilter(e, n);
        }), i[0].addEventListener("search", function () {
          return i.trigger("change");
        }), i.keyup(function () {
          i.trigger("change");
        }));
      }
    }, {
      key: "doFilter",
      value: function doFilter(e, t) {
        if (e.length >= 1) {
          e = e.toLowerCase();
          t.find("[data-filter-tags]").each(function (t, s) {
            if (s.dataset.filterTags.includes(e)) {
              s.classList.remove("hidden");
              var _e9 = s.parentNode;
              _e9.classList.contains("hidden") && _e9.classList.remove("hidden");
            } else s.classList.add("hidden");
          });
        } else t.find("[data-filter-tags]").removeClass("hidden filter-show");
      }
    }]);

    return _class18;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1),
      i = s(9);
  var a = ["label--open", "label__opened"];

  t["default"] = /*#__PURE__*/function (_n$b12) {
    _inherits(_class19, _n$b12);

    var _super17 = _createSuper(_class19);

    function _class19() {
      _classCallCheck(this, _class19);

      return _super17.apply(this, arguments);
    }

    _createClass(_class19, [{
      key: "connect",
      value: function connect() {
        var _this32 = this;

        var _this$element$dataset = this.element.dataset,
            e = _this$element$dataset.trigger,
            t = _this$element$dataset.dropdown;
        this.menuTrigger = document.querySelector(e), this.dropdownWrapper = document.querySelector(t), this.closeTrigger = this.element.querySelector("#close-dropdown"), this.isOpen = !1, this.onClicked = this.click.bind(this), this.onToggle = this.toggle.bind(this), this.menuTrigger.addEventListener("click", this.onToggle), this.closeTrigger.addEventListener("click", function (e) {
          e.stopImmediatePropagation(), _this32.close();
        });
      }
    }, {
      key: "toggle",
      value: function toggle(e) {
        if (this.isOpen) {
          var _t2 = e.target;
          Object(i.a)(this.dropdownWrapper, _t2) || this.close();
        } else this.open();
      }
    }, {
      key: "disconnect",
      value: function disconnect() {}
    }, {
      key: "click",
      value: function click(e) {
        var t = e.target;
        return this.isOpen && !Object(i.a)(this.dropdownWrapper, t) && this.close(), !0;
      }
    }, {
      key: "close",
      value: function close() {
        var _this$menuTrigger$cla;

        document.removeEventListener("click", this.onClicked), this.isOpen = !1, (_this$menuTrigger$cla = this.menuTrigger.classList).remove.apply(_this$menuTrigger$cla, a);
      }
    }, {
      key: "open",
      value: function open() {
        var _this$menuTrigger$cla2,
            _this33 = this;

        document.addEventListener("click", this.onClicked), (_this$menuTrigger$cla2 = this.menuTrigger.classList).add.apply(_this$menuTrigger$cla2, a);
        var e = this.element.querySelector("input");
        e && e.focus(), setTimeout(function () {
          _this33.isOpen = !0;
        }, 100);
      }
    }]);

    return _class19;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(4),
      i = s(6);

  t["default"] = /*#__PURE__*/function (_n$default6) {
    _inherits(_class20, _n$default6);

    var _super18 = _createSuper(_class20);

    function _class20() {
      _classCallCheck(this, _class20);

      return _super18.apply(this, arguments);
    }

    _createClass(_class20, [{
      key: "connect",
      value: function connect() {
        var _this34 = this;

        _get(_getPrototypeOf(_class20.prototype), "connect", this).call(this), this.font = this.get("font"), $("[value=".concat(this.font, "]")).attr("checked", "checked"), $(document).on("change", "[name=font]", function (e) {
          e.preventDefault(), e.stopImmediatePropagation(), _this34.changeFont(e.target);
        });
      }
    }, {
      key: "disconnect",
      value: function disconnect() {
        $(document).off("change", "[name=font]", function (e) {});
      }
    }, {
      key: "changeFont",
      value: function changeFont(e) {
        var _this35 = this;

        this.set("font", e.value), Object(i.a)().changeFont(e.value).then(function () {
          _this35.updateFontSize();
        });
      }
    }]);

    return _class20;
  }(n["default"]);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);

  t["default"] = /*#__PURE__*/function (_n$b13) {
    _inherits(_class21, _n$b13);

    var _super19 = _createSuper(_class21);

    function _class21() {
      _classCallCheck(this, _class21);

      return _super19.apply(this, arguments);
    }

    _createClass(_class21, [{
      key: "connect",
      value: function connect() {
        var _this36 = this;

        this.updateInternalLinks();
        this.element.querySelector("#close-footnote").addEventListener("click", function () {
          _this36.element.classList.toggle("d-none");
        });
      }
    }, {
      key: "updateInternalLinks",
      value: function updateInternalLinks() {
        var _this37 = this;

        this.element.querySelectorAll("a").forEach(function (e) {
          if (e.host === location.host) {
            e.classList.remove(), e.classList.add("see-more"), e.setAttribute("data-controller", "ajax-modal"), e.setAttribute("data-class", "modal-lg");

            var _t3 = e.pathname.replace("/", "").split(":"),
                _s2 = _t3[0],
                _n2 = _t3[1].split("-"),
                i = $(_this37.element).closest(".verse__translations").data("resourceContentId"),
                a = "/".concat(_s2, "/referenced_verse?from=").concat(_n2[0], "&to=").concat(_n2[1] || _n2[0], "&translations=").concat(i);

            e.setAttribute("data-url", a), e.href = "javascript:;";
          }
        });
      }
    }]);

    return _class21;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1),
      i = s(9);

  t["default"] = /*#__PURE__*/function (_n$b14) {
    _inherits(_class22, _n$b14);

    var _super20 = _createSuper(_class22);

    function _class22() {
      _classCallCheck(this, _class22);

      return _super20.apply(this, arguments);
    }

    _createClass(_class22, [{
      key: "connect",
      value: function connect() {
        var _this38 = this;

        var _this$element$dataset2 = this.element.dataset,
            e = _this$element$dataset2.trigger,
            t = _this$element$dataset2.menu;
        this.menuWraper = document.querySelector("#menus-wrapper"), this.menuTrigger = document.querySelector(e), this.targetMenu = document.querySelector(t), this.isOpen = !1, this.menuTrigger.addEventListener("click", function (e) {
          return _this38.toggle(e);
        }), ".site-menu" == t && this.element.querySelector("#close-menu").addEventListener("click", function (e) {
          return _this38.close(e);
        });
      }
    }, {
      key: "toggle",
      value: function toggle(e) {
        e.preventDefault(), this.isOpen ? this.close() : this.open();
      }
    }, {
      key: "disconnect",
      value: function disconnect() {
        this.menuWraper.removeEventListener("click", this.onClicked, !1);
      }
    }, {
      key: "click",
      value: function click(e) {
        var t = e.target;
        Object(i.a)(this.element, t) || this.close();
      }
    }, {
      key: "close",
      value: function close() {
        this.isOpen = !1, this.menuWraper.removeEventListener("click", this.onClicked, !0), this.menuWraper.classList.add("hidden"), this.element.classList.add("hidden");
      }
    }, {
      key: "open",
      value: function open() {
        this.isOpen = !0, this.onClicked = this.click.bind(this), this.menuWraper.addEventListener("click", this.onClicked, !0), this.menuWraper.classList.remove("hidden"), this.element.classList.remove("hidden");
      }
    }, {
      key: "showFeedbackModal",
      value: function showFeedbackModal() {
        this.close(), $("#feedback-modal").modal("show");
      }
    }]);

    return _class22;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(12),
      i = s(5),
      a = s(3);

  t["default"] = /*#__PURE__*/function (_n$default7) {
    _inherits(_class23, _n$default7);

    var _super21 = _createSuper(_class23);

    function _class23() {
      _classCallCheck(this, _class23);

      return _super21.apply(this, arguments);
    }

    _createClass(_class23, [{
      key: "connect",
      value: function connect() {
        _get(_getPrototypeOf(_class23.prototype), "connect", this).call(this), this.element.player = this, this.el = $(this.element), this.progressInterval = null, this.repeatCurrent = !1, this.audioData = {}, this.pauseSeconds = 0, this.readerController = null, this.firstVerse = null, this.lastVerse = null, this.currentVerse = null, this.playBtn = null, this.loadingBtn = null, this.segmentPlayer = !1, this.customSegments = [], this.loadSettings(), this.buildPlayer(), this.bindPlayerEvents();
      }
    }, {
      key: "loadSettings",
      value: function loadSettings() {
        this.config = {
          autoScroll: this.getSetting("autoScroll"),
          recitation: this.getSetting("recitation"),
          showTooltip: !1,
          repeat: {
            verse: null,
            type: this.getSetting("repeatType") || "single",
            count: this.getSetting("repeatCount"),
            from: this.getSetting("repeatFrom"),
            to: this.getSetting("repeatTo"),
            currentIteration: 1
          }
        }, this.pauseSeconds = 0;
      }
    }, {
      key: "updatePause",
      value: function updatePause(e) {
        this.pauseSeconds = e;
      }
    }, {
      key: "updateRepeatCount",
      value: function updateRepeatCount(e) {
        this.config.repeat.count = e;
      }
    }, {
      key: "updateRepeat",
      value: function updateRepeat(e, t) {
        this.config.repeat = {
          enabled: e.repeatEnabled,
          count: e.repeatCount,
          type: e.repeatType,
          verse: e.repeatAyah,
          from: e.repeatFrom,
          to: e.repeatTo,
          currentIteration: 1
        }, this.firstVerse = t.first, this.lastVerse = t.last, this.currentVerse = t.first;
      }
    }, {
      key: "createHowlAndPlay",
      value: function createHowlAndPlay() {
        var _this39 = this;

        this.createHowl(this.currentVerse).then(function () {
          _this39.isPlaying() && _this39.play(_this39.currentVerse);
        });
      }
    }, {
      key: "init",
      value: function init(e, t, s) {
        this.readerController = e, this.firstVerse = t, this.lastVerse = s, this.currentVerse = t, this.loadVerseAudio(this.currentVerse);
      }
    }, {
      key: "updateVerses",
      value: function updateVerses(e, t) {
        var s = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : !1;
        var n = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : [];
        this.firstVerse = e, this.lastVerse = t, this.segmentPlayer = s, this.customSegments = n;
      }
    }, {
      key: "disconnect",
      value: function disconnect() {
        this.isPlaying() && this.currentHowl.stop(), this.preloadTrack = {}, this.audioData = {}, "undefined" != typeof Howler && Howler.unload(), this.progressBar.removeEventListener("change", this.onProgressChanged), this.progressBar.disabled = !0;
      }
    }, {
      key: "isPlaying",
      value: function isPlaying() {
        return !!this.currentHowl && this.currentHowl.playing();
      }
    }, {
      key: "isLoading",
      value: function isLoading() {
        return !this.currentHowl || "loaded" != this.currentHowl.state();
      }
    }, {
      key: "buildPlayer",
      value: function buildPlayer() {
        this.progressBar = this.el.find("#player-range").get(0), this.progressBar.disabled = !0, this.bindAutoScroll(), this.bindRepeatCurrentAyah();
      }
    }, {
      key: "bindAutoScroll",
      value: function bindAutoScroll() {
        var _this40 = this;

        var e = this.element.querySelector("#btn-scroll");
        var t = e.classList;
        new i.a(e, {
          placement: "top",
          boundary: "window",
          html: !0,
          sanitize: !1,
          title: e.dataset.title
        }), this.config.autoScroll && t.add("selected"), e.addEventListener("click", function (e) {
          e.preventDefault(), _this40.config.autoScroll = !_this40.config.autoScroll, _this40.config.autoScroll ? (t.add("selected"), _this40.readerController.scrollToCurrent()) : t.remove("selected");
        });
      }
    }, {
      key: "bindRepeatCurrentAyah",
      value: function bindRepeatCurrentAyah() {
        var _this41 = this;

        var e = $("#player .icon-repeat");
        new i.a(e[0], {
          placement: "top",
          boundary: "window",
          html: !0,
          sanitize: !1,
          title: e.data("title")
        }), e.on("click", function (t) {
          t.preventDefault(), _this41.repeatCurrent = !_this41.repeatCurrent, e.toggleClass("selected");
        });
      }
    }, {
      key: "play",
      value: function play(e) {
        var _this42 = this;

        if (this.currentHowl) {
          if (e == this.currentTrack.verse) return void (this.isPlaying() || this.currentHowl.play());
          this.currentHowl.pause();
        }

        e = e || this.currentVerse, this.progressBar.disabled = !1, this.progressBar.value = this.progressBar.value || 0, this.currentVerse = e, this.loadTrack(this.currentVerse).then(function (e) {
          _this42.currentTrack = e, _this42.segmentPlayer ? e.howl.play("selectedWords") : e.howl.play();
        });
      }
    }, {
      key: "playCurrent",
      value: function playCurrent() {
        this.loading(), this.play(this.currentVerse);
      }
    }, {
      key: "playVerse",
      value: function playVerse(e) {
        var _this43 = this;

        if (this.isPlaying()) {
          if (e == this.currentTrack.verse) return setTimeout(function () {
            _this43.resetSegments();
          }, 50), void this.readerController.setPlaying(e, !0);
          this.currentHowl.stop();
        }

        this.currentVerse = e, this.playCurrent();
      }
    }, {
      key: "pauseCurrent",
      value: function pauseCurrent() {
        this.isPlaying() && this.currentHowl.pause();
      }
    }, {
      key: "playNext",
      value: function playNext() {
        this.config.repeat.currentIteration = 1;
        var e = this.getNextTrackVerse();
        e && this.playVerse(e);
      }
    }, {
      key: "playPrevious",
      value: function playPrevious() {
        this.config.repeat.currentIteration = 1;
        var e = this.getPreviousTrackVerse();
        e && this.playVerse(e);
      }
    }, {
      key: "bindPlayerEvents",
      value: function bindPlayerEvents() {
        var _this44 = this;

        this.playBtn = this.el.find("#btn-play"), this.pauseBtn = this.el.find("#btn-pause"), this.loadingBtn = this.el.find("#btn-loading"), this.previousBtn = this.el.find("#btn-previous"), this.nextBtn = this.el.find("#btn-next"), new i.a(this.loadingBtn.get(0), {
          placement: "top",
          boundary: "window",
          html: !0,
          sanitize: !1,
          title: this.loadingBtn.data("title")
        }), this.playBtn.on("click", function (e) {
          e.preventDefault(), _this44.playCurrent();
        }), this.pauseBtn.on("click", function (e) {
          e.preventDefault(), _this44.pauseCurrent();
        }), this.previousBtn.on("click", function (e) {
          e.preventDefault(), _this44.playPrevious();
        }), this.nextBtn.on("click", function (e) {
          e.preventDefault(), _this44.playNext();
        }), this.progressBar.addEventListener("change", function (e) {
          return _this44.onProgressChanged(e.target.value);
        });
      }
    }, {
      key: "onProgressChanged",
      value: function onProgressChanged(e) {
        if (this.currentHowl) {
          var _t4 = this.currentHowl.duration() / 100 * e;

          this.currentHowl.seek(_t4);
        }
      }
    }, {
      key: "loading",
      value: function loading() {
        this.setPlayerCtrls("loading");
      }
    }, {
      key: "setPlayerCtrls",
      value: function setPlayerCtrls(e) {
        var t = this.readerController.findVerse(this.currentVerse).find(".play .quran-icon");
        t.removeClass("icon-play1 icon-pause icon-loading"), "play" == e ? (this.playBtn.removeClass("d-none"), this.loadingBtn.addClass("d-none"), this.pauseBtn.addClass("d-none"), t.addClass("icon-play1")) : "pause" == e ? (this.playBtn.addClass("d-none"), this.loadingBtn.addClass("d-none"), this.pauseBtn.removeClass("d-none"), t.addClass("icon-pause")) : (this.playBtn.addClass("d-none"), this.loadingBtn.removeClass("d-none"), this.pauseBtn.addClass("d-none"), t.addClass("icon-loading")), this.segmentPlayer && document.getElementById("segment-player").segmentPlayer.setPlayerCtrls(e);
      }
    }, {
      key: "pad",
      value: function pad(e, t) {
        return (e += "").length >= t ? e : new Array(t - e.length + 1).join("0") + e;
      }
    }, {
      key: "formatTime",
      value: function formatTime(e) {
        var t = Math.floor(e / 60),
            s = Math.floor(e - 60 * t);
        return this.pad(t, 2) + ":" + this.pad(s, 2);
      }
    }, {
      key: "preloadNextVerse",
      value: function preloadNextVerse() {
        var e = this.getNextTrackVerse();
        e ? (this.loadTrack(e), this.nextBtn.removeAttr("disabled")) : this.nextBtn.attr("disabled", "disabled");
      }
    }, {
      key: "onPlay",
      value: function onPlay() {
        this.readerController.setPlaying(this.currentVerse, !0), this.setProgressBarInterval(), this.resetSegments(), this.preloadNextVerse();
      }
    }, {
      key: "getNextTrackVerse",
      value: function getNextTrackVerse() {
        var e = Object(a.a)(this.lastVerse),
            t = Object(a.a)(this.currentVerse);
        if (t < e) return Object(a.b)(t + 1);
      }
    }, {
      key: "getPreviousTrackVerse",
      value: function getPreviousTrackVerse() {
        var e = Object(a.a)(this.firstVerse),
            t = Object(a.a)(this.currentVerse);
        if (t > e) return Object(a.b)(t - 1);
      }
    }, {
      key: "removeProgressInterval",
      value: function removeProgressInterval() {
        clearInterval(this.progressInterval);
      }
    }, {
      key: "setProgressBarInterval",
      value: function setProgressBarInterval() {
        var _this45 = this;

        this.removeProgressInterval();
        var e = this.currentHowl.duration(),
            t = $("#player .current-time");
        t.removeClass("hidden").text("00:00"), $("#player .all-time").removeClass("hidden").text(this.formatTime(e)), this.progressInterval = setInterval(function () {
          var s = _this45.currentHowl.seek(),
              n = Math.floor(s / e * 1e3) / 10;

          _this45.progressBar.value = n, document.getElementById("player-range").style.background = "linear-gradient(to right, #00acc2 0%, #00acc2 " + n + "%, #fff " + n + "%, white 100%)", t.text(_this45.formatTime(s));
        }, 500);
      }
    }, {
      key: "removePlayerListeners",
      value: function removePlayerListeners() {
        this.readerController.removeHighlighting(), this.removeProgressInterval(), this.setPlayerCtrls("play");
      }
    }, {
      key: "onVerseEnd",
      value: function onVerseEnd() {
        var _this46 = this;

        this.pauseSeconds > 0 ? (this.segmentPlayer && document.getElementById("segment-player").segmentPlayer.setPlayerCtrls(), setTimeout(function () {
          return _this46.onVerseEnded();
        }, 1e3 * this.pauseSeconds)) : this.onVerseEnded();
      }
    }, {
      key: "onVerseEnded",
      value: function onVerseEnded() {
        if (this.readerController.setPlaying(this.currentVerse, !1), this.repeatCurrent) return this.playCurrent();
        this.config.repeat.enabled ? "single" == this.config.repeat.type ? this.repeatSingleVerse() : this.repeatRangeVerses() : this.playNext();
      }
    }, {
      key: "repeatSingleVerse",
      value: function repeatSingleVerse() {
        this.config.repeat.currentIteration <= this.config.repeat.count ? (this.config.repeat.currentIteration++, this.playCurrent()) : this.segmentPlayer ? document.getElementById("segment-player").segmentPlayer.closePlayer() : (this.config.repeat.currentIteration = 1, this.playNext());
      }
    }, {
      key: "repeatRangeVerses",
      value: function repeatRangeVerses() {
        var e = this.config.repeat;
        this.currentVerse == e.to ? e.currentIteration <= e.count ? (this.play(e.from), e.currentIteration++) : this.currentVerse = e.from : this.playNext();
      }
    }, {
      key: "onSeek",
      value: function onSeek() {
        var _this47 = this;

        this.isPlaying() ? (this.setProgressBarInterval(), setTimeout(function () {
          _this47.resetSegments();
        }, 50)) : this.resetSegments();
      }
    }, {
      key: "resetSegments",
      value: function resetSegments() {
        this.readerController.resetSegments(this.currentHowl.seek(), this.preloadTrack[this.currentVerse].segments, this.isPlaying());
      }
    }, {
      key: "loadTrack",
      value: function loadTrack(e) {
        return void 0 == this.preloadTrack[e] || this.segmentPlayer ? (this.loading(), this.createHowl(e)) : Promise.resolve(this.preloadTrack[e]);
      }
    }, {
      key: "createHowl",
      value: function createHowl(e) {
        var _this48 = this;

        return this.loadVerseAudio(e).then(function () {
          var t = _this48.audioData[e],
              s = _this48.buildAudioUrl(t.path),
              n = {};

          if (_this48.segmentPlayer) {
            var _e10 = +t.segments[_this48.customSegments[0]][2],
                _s3 = _this48.customSegments[_this48.customSegments.length - 1],
                _i3 = +t.segments[_s3][3] - _e10;

            n.selectedWords = [_e10, _i3], n.__default = [0, +t.segments[t.segments.length - 1][3]];
          }

          return _this48.loadHowler().then(function () {
            var i = new Howl({
              src: [s],
              html5: false,
              sprite: n,
              autoplay: !1,
              onloaderror: function onloaderror() {},
              onplayerror: function onplayerror() {
                _this48.setPlayerCtrls("play"), _this48.currentHowl.once("unlock", function () {
                  _this48.currentHowl.play();
                });
              },
              onplay: function onplay() {
                _this48.onPlay(), _this48.setPlayerCtrls("pause");
              },
              onpause: function onpause() {
                _this48.setPlayerCtrls("play"), _this48.removePlayerListeners();
              },
              onstop: function onstop() {
                _this48.setPlayerCtrls("play"), _this48.removePlayerListeners();
              },
              onseek: function onseek() {
                _this48.removePlayerListeners(), _this48.onSeek();
              },
              onend: function onend() {
                _this48.setPlayerCtrls("play"), _this48.removePlayerListeners(), _this48.onVerseEnd();
              }
            });
            return _this48.preloadTrack[e] = {
              howl: i,
              segments: t.segments,
              verse: e
            }, Promise.resolve(_this48.preloadTrack[e]);
          });
        });
      }
    }, {
      key: "setRecitation",
      value: function setRecitation(e) {
        var _this49 = this;

        var t = this.isPlaying();
        this.config.recitation = e, this.preloadTrack = {}, this.audioData = {}, this.loadVerseAudio(this.currentVerse).then(function () {
          t && _this49.play(_this49.currentVerse);
        });
      }
    }, {
      key: "loadVerseAudio",
      value: function loadVerseAudio(e) {
        return this.audioData[e] ? Promise.resolve(this.audioData[e]) : this.fetchAudioData(e);
      }
    }, {
      key: "fetchAudioData",
      value: function fetchAudioData(e) {
        var t = this.audioData,
            s = [],
            n = {
          recitation: this.config.recitation,
          verse: e
        },
            i = function i(e) {
          var s = Object.entries(e);

          for (var _i4 = 0, _s4 = s; _i4 < _s4.length; _i4++) {
            var _s4$_i = _slicedToArray(_s4[_i4], 2),
                _n3 = _s4$_i[0],
                _i5 = _s4$_i[1];

            t[_n3] = {
              path: _i5.audio,
              duration: _i5.duration,
              segments: _i5.segments
            };
          }
        },
            a = fetch("/audio?" + $.param(n)).then(function (e) {
          return e.json();
        }).then(function (e) {
          return i(e);
        })["catch"](function (e) {
          return i({});
        });

        return s.push(a), Promise.all(s);
      }
    }, {
      key: "currentHowl",
      get: function get() {
        if (this.currentTrack) return this.currentTrack.howl;
      }
    }]);

    return _class23;
  }(n["default"]);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(8);

  t["default"] = /*#__PURE__*/function (_n$default8) {
    _inherits(_class24, _n$default8);

    var _super22 = _createSuper(_class24);

    function _class24() {
      _classCallCheck(this, _class24);

      return _super22.apply(this, arguments);
    }

    _createClass(_class24, [{
      key: "isInfoMode",
      value: function isInfoMode() {
        return !1;
      }
    }, {
      key: "id",
      value: function id() {
        return this.element.dataset.id;
      }
    }, {
      key: "loadVerses",
      value: function loadVerses(e, t) {
        var _this50 = this;

        document.body.loader.show(), this.pausePageLoader();
        var s = this.id(),
            n = this.isReadingMode(),
            i = document.body.setting,
            a = i.currentFont,
            r = i.selectedTranslations.join(",");
        var o = fetch("/juz/".concat(s, "/load_verses?").concat($.param({
          start: t,
          reading: n,
          font: a,
          translations: r
        })), {
          headers: {
            "X-Requested-With": "XMLHttpRequest"
          }
        }).then(function (e) {
          return e.text();
        }).then(function (e) {
          document.body.loader.hide(), _this50.insertVerses(e);
        });
        return Promise.resolve(o);
      }
    }, {
      key: "isChapterMode",
      get: function get() {
        return !1;
      }
    }]);

    return _class24;
  }(n["default"]);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(8);

  t["default"] = /*#__PURE__*/function (_n$default9) {
    _inherits(_class25, _n$default9);

    var _super23 = _createSuper(_class25);

    function _class25() {
      _classCallCheck(this, _class25);

      return _super23.apply(this, arguments);
    }

    _createClass(_class25, [{
      key: "isInfoMode",
      value: function isInfoMode() {
        return !1;
      }
    }, {
      key: "id",
      value: function id() {
        return this.element.dataset.juzNumber;
      }
    }, {
      key: "getVerseKey",
      value: function getVerseKey(e) {
        return e;
      }
    }, {
      key: "isChapterMode",
      get: function get() {
        return !1;
      }
    }]);

    return _class25;
  }(n["default"]);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1),
      i = s(23),
      a = s.n(i),
      r = s(10);

  t["default"] = /*#__PURE__*/function (_n$b15) {
    _inherits(_class26, _n$b15);

    var _super24 = _createSuper(_class26);

    function _class26() {
      _classCallCheck(this, _class26);

      return _super24.apply(this, arguments);
    }

    _createClass(_class26, [{
      key: "connect",
      value: function connect() {
        var _this51 = this;

        this.el = $(this.element), this.device = new r.a(), this.suggestions = this.el.find("#suggestions"), this.bindSuggestion(), document.addEventListener("click", function (e) {
          _this51.element.contains(e.target) ? _this51.showSuggestions() : _this51.hideSuggestions();
        });
      }
    }, {
      key: "bindSuggestion",
      value: function bindSuggestion() {
        var _this52 = this;

        this.searchBox = this.el.find("[name=query]"), this.searchBox[0].addEventListener("search", function () {
          _this52.searchBox.trigger("change");
        }), this.searchBox.change(function (e) {
          _this52.getSuggestions(e.target.value);
        }).keyup(a()(function (e) {
          $(this).change();
        }, 150));
      }
    }, {
      key: "getSuggestions",
      value: function getSuggestions(e) {
        var _this53 = this;

        e && e.length > 0 ? (this.showSuggestions(), fetch("/search/suggestion?query=" + e).then(function (e) {
          return e.text();
        }).then(function (e) {
          _this53.suggestions.html(e);
        })["catch"](function (e) {
          return callback([]);
        })) : this.hideSuggestions();
      }
    }, {
      key: "showSuggestions",
      value: function showSuggestions() {
        this.el.addClass("show-suggestion");
      }
    }, {
      key: "hideSuggestions",
      value: function hideSuggestions() {
        this.el.removeClass("show-suggestion");
      }
    }, {
      key: "doSearch",
      value: function doSearch(e) {
        Turbolinks.visit("/search?query=" + e);
      }
    }]);

    return _class26;
  }(n.b);
},,,,,,,,,,, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);

  t["default"] = /*#__PURE__*/function (_n$b16) {
    _inherits(_class27, _n$b16);

    var _super25 = _createSuper(_class27);

    function _class27() {
      _classCallCheck(this, _class27);

      return _super25.apply(this, arguments);
    }

    _createClass(_class27, [{
      key: "connect",
      value: function connect() {
        var _this54 = this;

        this.el = $(this.element), this.el.find(".view-more").on("click", function (e) {
          return _this54.showAllResults(e);
        });
      }
    }, {
      key: "showAllResults",
      value: function showAllResults(e) {
        e.preventDefault(), this.el.find(".more-items").addClass("hidden"), this.el.find(".search-item--translation").removeClass("hidden");
      }
    }]);

    return _class27;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);

  t["default"] = /*#__PURE__*/function (_n$b17) {
    _inherits(_class28, _n$b17);

    var _super26 = _createSuper(_class28);

    function _class28() {
      _classCallCheck(this, _class28);

      return _super26.apply(this, arguments);
    }

    _createClass(_class28, [{
      key: "connect",
      value: function connect() {
        var e = $(this.element);
        this.selects = e.find(".simple-select").select2({
          dropdownAutoWidth: !0,
          width: "100%",
          dropdownCssClass: "select-stylee",
          placeholder: "selected option"
        }), e.find(".simple-select").on("change", function (t) {
          e.find("form").submit();
        });
      }
    }, {
      key: "disconnect",
      value: function disconnect() {
        var e = this.selects.data("select2");
        e && e.destroy();
      }
    }]);

    return _class28;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);

  t["default"] = /*#__PURE__*/function (_n$b18) {
    _inherits(_class29, _n$b18);

    var _super27 = _createSuper(_class29);

    function _class29() {
      _classCallCheck(this, _class29);

      return _super27.apply(this, arguments);
    }

    _createClass(_class29, [{
      key: "connect",
      value: function connect() {
        0 == $(".search-result ul li").length && $(".suggestions").empty();
      }
    }]);

    return _class29;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);

  t["default"] = /*#__PURE__*/function (_n$b19) {
    _inherits(_class30, _n$b19);

    var _super28 = _createSuper(_class30);

    function _class30() {
      _classCallCheck(this, _class30);

      return _super28.apply(this, arguments);
    }

    _createClass(_class30, [{
      key: "connect",
      value: function connect() {
        this.config = {
          times: 2,
          seconds: 5
        }, this.element.segmentPlayer = this, this.playerConfig = {}, this.currentVerse = null, this.lastVerse = null, this.bindListener();
      }
    }, {
      key: "play",
      value: function play() {
        var e = this.selectedWords;
        if (0 == e.length) return;
        document.querySelector("body").classList.add("small-player"), document.querySelector("#play-selected-wrapper").classList.remove("active");
        var t = this.getPlayer();

        if (t) {
          null == this.currentVerse && (this.lastVerse = t.lastVerse, this.currentVerse = t.currentVerse);

          var _s5 = e[0].dataset.key.split(":").slice(0, 2).join(":"),
              _n4 = _toConsumableArray(e).map(function (e) {
            return +e.dataset.key.split(":").slice(-1) - 1;
          });

          t.updateVerses(_s5, _s5, !0, _n4), t.updatePause(this.config.seconds), t.updateRepeat({
            repeatEnabled: !0,
            repeatCount: this.config.times - 1,
            repeatType: "single",
            repeatAyah: _s5
          }, {
            first: _s5,
            last: _s5
          }, _n4), t.play(_s5);
        }
      }
    }, {
      key: "getPlayer",
      value: function getPlayer() {
        return document.getElementById("player").player;
      }
    }, {
      key: "closePlayer",
      value: function closePlayer() {
        var e = document.getElementById("reader").segmentSelection;
        e && e.deselect();
      }
    }, {
      key: "bindListener",
      value: function bindListener() {
        var _this55 = this;

        $(document).on("segment:selected", function (e, t) {
          $(".play-segment").addClass("active"), $(".play-selected-wrapper").removeClass("active");
        }), $(document).on("segment:removed", function () {
          $(".play-segment, .play-selected-wrapper").removeClass("active"), document.querySelector("#playing-part").children[0].classList = "icon-loading", document.querySelector("#playing-part").children[1].innerText = "Loading", document.querySelector("body").classList.remove("small-player");
          var e = document.getElementById("segment-player").segmentPlayer,
              t = e.getPlayer();
          t && (t.isPlaying() && t.currentHowl.stop(), e.currentVerse && (t.updateVerses(e.currentVerse, e.lastVerse), t.loadSettings()));
        }), $(document).on("el:selecting", function () {
          $(".play-segment, .play-selected-wrapper").removeClass("active");
        }), document.querySelector("#play-selected--playbutton").addEventListener("click", function (e) {
          return _this55.play(e);
        }), document.querySelector("#play-bar-close").addEventListener("click", function (e) {
          return _this55.closePlayer(e);
        }), document.querySelector("#close-play-selected").addEventListener("click", function () {
          return _this55.closePlaySegment();
        }), document.querySelector("#segment-player").addEventListener("click", function () {
          return _this55.showPlaySegment();
        }), document.querySelectorAll(".counter__button").forEach(function (e) {
          e.addEventListener("click", function (e) {
            return _this55.handleCounterButtons(e);
          });
        }), document.querySelector("#playing-part").addEventListener("click", function (e) {
          return _this55.handlePlayerButton(e);
        });
      }
    }, {
      key: "showPlaySegment",
      value: function showPlaySegment() {
        document.querySelector("#play-selected-wrapper").classList.add("active"), document.querySelector("#segment-player").classList.add("active");
      }
    }, {
      key: "closePlaySegment",
      value: function closePlaySegment() {
        document.querySelector("#play-selected-wrapper").classList.remove("active"), document.querySelector("#segment-player").classList.remove("active");
      }
    }, {
      key: "handleCounterButtons",
      value: function handleCounterButtons(e) {
        var t = e.target.dataset,
            s = +t.increment;
        var n = $(".counter__text." + t.type),
            i = +n.data("value") + s;

        if (i >= +t.min) {
          this.config[t.type] = i, n.data("value", i).text("".concat(i, " ").concat(t.type));
          var _e11 = document.getElementById("player").player;
          _e11 && ("seconds" == t.type ? _e11.updatePause(i) : _e11.updateRepeatCount(i - 1));
        }
      }
    }, {
      key: "resetPlayButton",
      value: function resetPlayButton() {
        document.querySelector("#playing-part").children[0].classList = "icon-play1", document.querySelector("#playing-part").children[1].innerText = "Play";
      }
    }, {
      key: "handlePlayerButton",
      value: function handlePlayerButton(e) {
        var t = e.target;

        if ("false" == t.dataset.disabled) {
          var _e12 = this.getPlayer();

          "icon-pause" == t.classList ? (this.setPlayerCtrls("play"), _e12.pauseCurrent()) : (this.setPlayerCtrls("pause"), _e12.playCurrent());
        }
      }
    }, {
      key: "setPlayerCtrls",
      value: function setPlayerCtrls(e) {
        var t = document.querySelector("#playing-part a"),
            s = document.querySelector("#playing-part p");
        t.dataset.disabled = !1, "play" == e ? (t.classList = "icon-play1", s.innerHTML = "Paused") : "pause" == e ? (t.classList = "icon-pause", s.innerHTML = "Playing") : "loading" == e ? (t.classList = "icon-loading", s.innerHTML = "Loading", t.dataset.disabled = !0) : (t.classList = "icon-play1", s.innerHTML = "Waiting", t.dataset.disabled = !0);
      }
    }, {
      key: "selectedWords",
      get: function get() {
        return document.querySelectorAll(".word.selected");
      }
    }]);

    return _class30;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);
  var i = "start-circle",
      a = "end-circle";
  var r = ".w";

  function o(e) {
    e.preventDefault();
  }

  t["default"] = /*#__PURE__*/function (_n$b20) {
    _inherits(_class31, _n$b20);

    var _super29 = _createSuper(_class31);

    function _class31() {
      _classCallCheck(this, _class31);

      return _super29.apply(this, arguments);
    }

    _createClass(_class31, [{
      key: "connect",
      value: function connect() {
        var _this56 = this;

        this.element.segmentSelection = this, setTimeout(function () {
          document.getElementById("reader").reader.isInfoMode() || _this56.bindSelection();
        }, 300);
      }
    }, {
      key: "bindSelection",
      value: function bindSelection() {
        var _this57 = this;

        var e = $(this.element);
        this.selectedAyah = null, this.isSelecting = !1, this.startWord = null, this.startPosition = null, this.selectableWords = [], this.selections = [], this.startCircle = $("<div>").addClass(i).css({
          position: "absolute"
        }), this.endCircle = $("<div>").addClass(a).css({
          position: "absolute"
        });
        var t = !1;

        try {
          window.addEventListener("test", null, Object.defineProperty({}, "passive", {
            get: function get() {
              t = !0;
            }
          }));
        } catch (s) {}

        this.wheelOpt = !!t && {
          passive: !1
        }, this.wheelEvent = "onwheel" in document.createElement("div") ? "wheel" : "mousewheel", e.on("mousedown touchstart", function (e) {
          var t = $(e.target);
          t.is(r) || t.is(".start-circle") || t.is(".end-circle") || t.is(".el-selection-dropdown") || 0 != t.parents(".el-selection-dropdown").length || _this57.deselect();
        }), e.on("mousedown touchstart", ".start-circle", function (e) {
          return _this57.update(e);
        }), e.on("mousedown touchstart", ".end-circle", function (e) {
          return _this57.update(e);
        }), e.on("mousedown touchstart", r, function (e) {
          return _this57.start(e);
        }), e.on("mousemove touchmove", function (e) {
          return _this57.mouseMoved(e);
        }), e.on("mouseup touchend", function (e) {
          return _this57.mouseUp(e);
        }), e.on("click", ".close-selection", function (e) {
          return _this57.deselect(e);
        }), $(window).on("resize", function () {
          this.selectableWords && (this.selectableWords = this.selectableWords.map(function (e) {
            return e.rect = e.el.get(0).getBoundingClientRect(), e;
          }), positionCircles(), setSelection(), updateDropdownPositions(this.selectableWords.filter(function (e) {
            return e.selected;
          })));
        });
      }
    }, {
      key: "update",
      value: function update(e) {
        o(e), this.disableScroll(), this.selectedAyah = $(e.target).parents(".arabic"), this.isSelecting = !0, this.selectedItems = this.selectedItems.filter(function (e) {
          return e.selected;
        });
        var t = this.selectedItems.last;
        t && (this.startPosition = {
          x: t.rect.x,
          y: t.rect.y
        }, this.startWord = t.el);
      }
    }, {
      key: "start",
      value: function start(e) {
        o(e), this.deselect(), this.startWord = $(e.currentTarget), this.selectedAyah = this.startWord.closest(".arabic"), this.selectedAyah.css({
          position: "relative"
        }), this.selectedAyah.append(this.startCircle), this.selectedAyah.append(this.endCircle), this.isSelecting = !0, this.disableScroll(), this.startPosition = {
          x: e.clientX,
          y: e.clientY
        }, "touchstart" == e.type && (this.startPosition = {
          x: e.touches[0].clientX,
          y: e.touches[0].clientY
        }), this.buildItemsArray(), this.mouseMoved(e);
      }
    }, {
      key: "filterSelected",
      value: function filterSelected() {
        this.selectedItems = this.selectableWords.filter(function (e) {
          return e.selected;
        });
      }
    }, {
      key: "disableScroll",
      value: function disableScroll() {
        window.addEventListener("DOMMouseScroll", o, !1), window.addEventListener(this.wheelEvent, o, this.wheelOpt), window.addEventListener("touchmove", o, this.wheelOpt), window.addEventListener("keydown", c, !1);
      }
    }, {
      key: "enableScroll",
      value: function enableScroll() {
        window.removeEventListener("DOMMouseScroll", o, !1), window.removeEventListener(this.wheelEvent, o, this.wheelOpt), window.removeEventListener("touchmove", o, this.wheelOpt), window.removeEventListener("keydown", c, !1);
      }
    }, {
      key: "buildItemsArray",
      value: function buildItemsArray() {
        var _this58 = this;

        this.selectableWords = [], this.selectedAyah.find(r).each(function (e, t) {
          t = $(t), _this58.selectableWords.push({
            el: t,
            index: t.index(),
            rect: t.get(0).getBoundingClientRect(),
            selected: _this58.startWord.index() == t.index()
          });
        });
      }
    }, {
      key: "setSelection",
      value: function setSelection() {
        var _this59 = this;

        var e = this.selectableWords.filter(function (e) {
          return e.selected;
        }),
            t = {},
            s = 0,
            n = this.selectedAyah.get(0).getBoundingClientRect();
        if (e.forEach(function (e) {
          var i = Math.round(e.rect.y - n.y),
              a = Math.round(e.rect.x - n.x),
              r = Math.round(e.rect.x - n.x + e.rect.width),
              o = Math.round(e.rect.y - n.y + e.rect.height);
          t[i] ? t[i] = {
            top: i,
            left: Math.min(t[i].left, a),
            right: Math.max(t[i].right, r),
            bottom: Math.max(t[i].bottom, o)
          } : (s++, t[i] = {
            top: i,
            left: a,
            right: r,
            bottom: o
          });
        }), s > this.selections.length) for (var i = this.selections.length - 1; i < s; i++) {
          var _e13 = $("<div>").addClass("selection");

          this.selectedAyah.append(_e13), this.selections.push(_e13);
        } else s < this.selections.length && this.selections.splice(s).map(function (e) {
          return e.remove();
        });
        Object.values(t).map(function (e, t) {
          _this59.selections[t].css({
            top: e.top,
            left: e.left,
            width: e.right - e.left,
            height: e.bottom - e.top
          });
        });
      }
    }, {
      key: "positionCircles",
      value: function positionCircles() {
        if (!this.selectedAyah) return;
        var e = this.selectedAyah.get(0).getBoundingClientRect(),
            t = this.selectableWords.filter(function (e) {
          return e.selected;
        });
        if (0 == t.length) return;
        var s = t[0],
            n = t[t.length - 1];
        var i = s.rect.x - e.x + s.rect.width,
            a = n.rect.x - e.x;
        this.startCircle.css({
          top: s.rect.y - e.y,
          left: i,
          height: s.rect.height
        }), this.endCircle.css({
          top: n.rect.y - e.y,
          left: a,
          height: n.rect.height
        });
      }
    }, {
      key: "updateDropdownPositions",
      value: function updateDropdownPositions() {
        var e = document.documentElement,
            t = $(window).scrollTop(),
            s = this.selectedItems[this.selectedItems.length - 1];
        s && (e.style.setProperty("--el-selection-y", s.rect.y + t + 50 + "px"), e.style.setProperty("--el-selection-x", s.rect.x + "px"));
      }
    }, {
      key: "deselect",
      value: function deselect(e) {
        e && (e.preventDefault(), e.stopImmediatePropagation()), this.selectableWords.forEach(function (e) {
          e.selected = !1, e.el.removeClass("selected");
        }), this.selectableWords = [], this.selectedAyah = null, this.startWord = null, this.startPosition = null, this.startCircle.remove(), this.endCircle.remove(), this.selections.splice(0).map(function (e) {
          return e.remove();
        }), $(document).trigger("segment:removed");
      }
    }, {
      key: "mouseUp",
      value: function mouseUp(e) {
        this.isSelecting && (this.isSelecting = !1, this.filterSelected(), this.updateDropdownPositions(), this.positionCircles(), $(document).trigger("segment:selected", [this.selectedItems.map(function (e) {
          return e.el;
        })]), this.enableScroll());
      }
    }, {
      key: "mouseMoved",
      value: function mouseMoved(e) {
        var _this60 = this;

        if (this.isSelecting) {
          var _t5 = {
            x: e.clientX,
            y: e.clientY
          };
          "touchmove" == e.type && (_t5 = {
            x: e.touches[0].clientX,
            y: e.touches[0].clientY
          }), this.selectableWords.forEach(function (e) {
            var s = e.el.index() <= _this60.startWord.index() && (e.rect.x < _t5.x && e.rect.y + e.rect.height > _t5.y || e.rect.y > _t5.y),
                n = e.el.index() >= _this60.startWord.index() && (e.rect.x + e.rect.width > _t5.x && e.rect.y < _t5.y || e.rect.y + e.rect.height < _t5.y);

            e.selected = n || s, e.selected ? e.el.addClass("selected") : e.el.removeClass("selected");
          }), this.positionCircles(), this.setSelection();
        }
      }
    }]);

    return _class31;
  }(n.b);

  var l = {
    37: 1,
    38: 1,
    39: 1,
    40: 1
  };

  function c(e) {
    if (l[e.keyCode]) return o(e), !1;
  }
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);

  t["default"] = /*#__PURE__*/function (_n$b21) {
    _inherits(_class32, _n$b21);

    var _super30 = _createSuper(_class32);

    function _class32() {
      _classCallCheck(this, _class32);

      return _super30.apply(this, arguments);
    }

    _createClass(_class32, [{
      key: "connect",
      value: function connect() {
        var _this61 = this;

        var e = {
          width: 550,
          height: 600,
          location: "no",
          toolbar: "no",
          status: "no",
          directories: "no",
          menubar: "no",
          scrollbars: "yes",
          resizable: "no",
          centerscreen: "yes",
          left: window.outerWidth / 2 + (window.screenX || window.screenLeft || 0) - 275,
          top: window.outerHeight / 2 + (window.screenY || window.screenTop || 0) - 200
        };
        this.shareWindowConfig = Object.keys(e).map(function (t) {
          return "".concat(t, "=").concat(e[t]);
        }).join(", ");
        var t = $(this.element);
        this.shareButtons = t.find("#share-buttons"), this.url = t.data("url"), this.text = t.data("text"), this.title = t.data("title"), this.addButton("facebook", "Facebook", {
          href: "https://www.facebook.com/sharer/sharer.php?u=" + this.url
        }), this.addButton("twitter", "Twitter", {
          href: "https://twitter.com/share?url=".concat(this.url, "&hashtags=quran&via=app_quran")
        }), this.addButton("messenger", "Messenger", {
          href: "https://www.facebook.com/dialog/send?link=" + this.url
        });
        var s = this.isMobileOrTablet() ? "api" : "web";
        this.addButton("whatsapp", "Whatsapp", {
          "data-share": "'https://".concat(s, ".whatsapp.com/send?text=").concat(this.url, " ").concat(this.title, " ").concat(this.text, "'"),
          href: "https://".concat(s, ".whatsapp.com/send?text=\"").concat(this.title, " ").concat(this.url, " ").concat(this.text, "\"")
        }), this.addButton("pinterest", "Pinterest", {
          href: "https://pinterest.com/pin/create/button/?url=".concat(this.url, "&description=").concat(this.title + " " + this.text)
        }), this.addButton("telegram", "Telegram", {
          href: "https://telegram.me/share/?url=".concat(this.url, "&text=").concat(this.text)
        }), this.addButton("reddit", "Reddit", {
          href: "https://www.reddit.com/submit?url=".concat(this.url, "&title=").concat(this.title)
        }), this.addButton("pocket", "Pocket", {
          href: "https://getpocket.com/save?url=".concat(this.url, "&title=").concat(this.title)
        }), this.addButton("envelope", "Email", {
          href: "mailto:&subject=".concat(this.title, "&body=").concat(this.url + " " + this.text)
        }), this.addButton("line", "Line", {
          "data-share": "https://social-plugins.line.me/lineit/share?url=".concat(this.url, "&text=").concat(this.text),
          href: "https://social-plugins.line.me/lineit/share?url=".concat(this.url, "&text=").concat(this.text)
        }), t.find(".share-icon a").on("click", function (e) {
          _this61.share(e.target);
        }), this.el = t;
      }
    }, {
      key: "isMobileOrTablet",
      value: function isMobileOrTablet() {
        return /(android|iphone|ipad|mobile)/i.test(navigator.userAgent);
      }
    }, {
      key: "addButton",
      value: function addButton(e, t, s) {
        var n = "<div class='col-4 col-md-3 text-center'>\n                  <span class='share-icon ".concat(e, "'>\n                   <a target='_blank' rel='noopener'\n                   title='Share on ").concat(t, "'\n                   ").concat(Object.keys(s).map(function (e) {
          return "".concat(e, "=").concat(s[e]);
        }).join(", "), ">\n                   <i class='quran-icon icon-").concat(e, "'></i></a>\n                   </span><p class='text-muted fs-sm'>").concat(t, "</p></div>");
        this.shareButtons.append(n);
      }
    }, {
      key: "share",
      value: function share(e) {
        $(e);
        GoogleAnalytic.trackEvent("Share", "Verse", this.el.data("versekKey"), 1);
      }
    }, {
      key: "disconnect",
      value: function disconnect() {}
    }]);

    return _class32;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);

  t["default"] = /*#__PURE__*/function (_n$b22) {
    _inherits(_class33, _n$b22);

    var _super31 = _createSuper(_class33);

    function _class33() {
      _classCallCheck(this, _class33);

      return _super31.apply(this, arguments);
    }

    _createClass(_class33, [{
      key: "connect",
      value: function connect() {
        var _this62 = this;

        this.element.addEventListener("click", function (e) {
          return _this62.toggle(e);
        });
      }
    }, {
      key: "toggle",
      value: function toggle(e) {
        var _this63 = this;

        e.preventDefault(), e.stopImmediatePropagation();
        var _this$element$dataset3 = this.element.dataset,
            t = _this$element$dataset3.target,
            s = _this$element$dataset3.close,
            n = _this$element$dataset3.isChild;
        "true" == n && document.getElementById("main-right-sidebar").classList.toggle("d-none");
        var i = document.querySelector(t);
        i.classList.toggle("hidden");
        i.classList.toggle("open") ? document.querySelectorAll(s).forEach(function (e) {
          e.addEventListener("click", function (e) {
            return _this63.toggle(e);
          });
        }) : document.querySelectorAll(s).forEach(function (e) {
          e.removeEventListener("click", function () {});
        });
      }
    }]);

    return _class33;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);

  t["default"] = /*#__PURE__*/function (_n$b23) {
    _inherits(_class34, _n$b23);

    var _super32 = _createSuper(_class34);

    function _class34() {
      _classCallCheck(this, _class34);

      return _super32.apply(this, arguments);
    }

    _createClass(_class34, [{
      key: "connect",
      value: function connect() {
        this.element.loader = this, this.el = $(this.element), this.el.append("<div id='loading-spinner' class='spinner p-3 d-none'><i class='spinner--swirl'></i></div>");
      }
    }, {
      key: "show",
      value: function show() {
        $("#loading-spinner").removeClass("d-none");
      }
    }, {
      key: "hide",
      value: function hide() {
        $("#loading-spinner").addClass("d-none");
      }
    }]);

    return _class34;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);
  var i = "tabs__item--selected";

  t["default"] = /*#__PURE__*/function (_n$b24) {
    _inherits(_class35, _n$b24);

    var _super33 = _createSuper(_class35);

    function _class35() {
      _classCallCheck(this, _class35);

      return _super33.apply(this, arguments);
    }

    _createClass(_class35, [{
      key: "connect",
      value: function connect() {
        var _this64 = this;

        this.element.querySelectorAll(".tabs__item").forEach(function (e) {
          e.addEventListener("click", function (e) {
            return _this64.changeTab(e);
          });
        });
      }
    }, {
      key: "disconnect",
      value: function disconnect() {}
    }, {
      key: "changeTab",
      value: function changeTab(e) {
        e.preventDefault();
        var t = e.currentTarget;
        if (t.classList.contains(i)) return;
        var _t$dataset = t.dataset,
            s = _t$dataset.target,
            n = _t$dataset.tab;
        this.hideTabs(n), this.showTab(s);
      }
    }, {
      key: "showTab",
      value: function showTab(e) {
        var _this65 = this;

        document.querySelectorAll(".tabs__item[data-target='" + e).forEach(function (e) {
          e.classList.add(i), _this65.fireEvent("tab.shown", e);
        });
        document.querySelectorAll(e).forEach(function (e) {
          e.classList.remove("hidden"), e.classList.add("show", "active");
        });
      }
    }, {
      key: "hideTabs",
      value: function hideTabs(e) {
        var _this66 = this;

        document.querySelectorAll("[data-tab=".concat(e, "]")).forEach(function (e) {
          e.classList.remove(i), _this66.fireEvent("tab.hidden", e);
        }), document.querySelectorAll("[data-tab-group=".concat(e, "]")).forEach(function (e) {
          e.classList.add("hidden"), e.classList.remove("show", "active");
        });
      }
    }, {
      key: "fireEvent",
      value: function fireEvent(e, t) {
        var s;
        "function" === typeof Event ? s = new Event(e) : (s = document.createEvent("Event"), s.initEvent(e, !0, !0)), (t || document).dispatchEvent(s);
      }
    }]);

    return _class35;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);

  t["default"] = /*#__PURE__*/function (_n$b25) {
    _inherits(_class36, _n$b25);

    var _super34 = _createSuper(_class36);

    function _class36() {
      var _this67;

      _classCallCheck(this, _class36);

      for (var _len = arguments.length, e = new Array(_len), _key = 0; _key < _len; _key++) {
        e[_key] = arguments[_key];
      }

      _this67 = _super34.call.apply(_super34, [this].concat(e)), _this67.selectedLang = "";
      return _this67;
    }

    _createClass(_class36, [{
      key: "connect",
      value: function connect() {
        $("#tafsir-list a").on("click", function () {
          window.dialog && (window.dialog.hide(), window.dialog.dispose(), window.dialog = null);
        });
      }
    }, {
      key: "filter",
      value: function filter(e) {
        var t = e.currentTarget.dataset.selectedLang;
        t === this.selectedLang ? this.selectedLang = "" : this.selectedLang = t, this.applyFilter();
      }
    }, {
      key: "applyFilter",
      value: function applyFilter() {
        var _this68 = this;

        document.getElementById("filters").querySelectorAll("button").forEach(function (e) {
          e.dataset.selectedLang === _this68.selectedLang ? (e.classList.remove("btn-outline-secondary"), e.classList.add("btn-secondary")) : (e.classList.remove("btn-secondary"), e.classList.add("btn-outline-secondary"));
        }), document.getElementById("tafsir-list").querySelectorAll("li").forEach(function (e) {
          e.hidden = _this68.selectedLang && e.dataset.lang !== _this68.selectedLang;
        });
      }
    }]);

    return _class36;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(4);

  t["default"] = /*#__PURE__*/function (_n$default10) {
    _inherits(_class37, _n$default10);

    var _super35 = _createSuper(_class37);

    function _class37() {
      _classCallCheck(this, _class37);

      return _super35.apply(this, arguments);
    }

    _createClass(_class37, [{
      key: "connect",
      value: function connect() {
        var _this69 = this;

        _get(_getPrototypeOf(_class37.prototype), "connect", this).call(this), this.logDevMessage(), this.themeButtons = $(this.element).find("a"), this.themeButtons.on("click", function (e) {
          e.preventDefault(), e.stopImmediatePropagation();
          e.currentTarget.classList.contains("active") || (_this69.themeButtons.removeClass("active"), e.currentTarget.classList.add("active"), _this69.toggle());
        }), this.updatePage();
      }
    }, {
      key: "logDevMessage",
      value: function logDevMessage() {
        try {
          console.log("%c \uFDFD\n\n %s", "background: #00acc2; color: #fff; padding: 2px; border-radius:2px", "Salam, found any bug? Please report it here https://github.com/quran/quran.com-frontend-v2/issues");
        } catch (e) {}
      }
    }, {
      key: "disconnect",
      value: function disconnect() {}
    }, {
      key: "setTheme",
      value: function setTheme(e) {
        this.themeButtons.removeClass("active"), $("[data-theme='".concat(e, "']")).addClass("active");
        var t = document.body.classList;
        t.remove("dark"), t.add(e);
      }
    }, {
      key: "updatePage",
      value: function updatePage() {
        var _this70 = this;

        var e = this.get("nightMode"),
            t = window.matchMedia("(prefers-color-scheme: dark)"),
            s = function s(t) {
          t && t.matches && null == e || e ? _this70.setTheme("dark") : _this70.setTheme("light");
        };

        document.addEventListener("DOMContentLoaded", function () {
          s(t);
        }), t.addListener(function (e) {
          s(e);
        }), s(t);
      }
    }, {
      key: "toggle",
      value: function toggle() {
        var e = document.body.classList.toggle("dark");
        this.set("nightMode", e);
      }
    }]);

    return _class37;
  }(n["default"]);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);

  t["default"] = /*#__PURE__*/function (_n$b26) {
    _inherits(_class38, _n$b26);

    var _super36 = _createSuper(_class38);

    function _class38() {
      _classCallCheck(this, _class38);

      return _super36.apply(this, arguments);
    }

    _createClass(_class38, [{
      key: "connect",
      value: function connect() {
        var _this71 = this;

        this.element.addEventListener("click", function (e) {
          return _this71.trackActions(e);
        });
      }
    }, {
      key: "disconnect",
      value: function disconnect() {}
    }, {
      key: "trackActions",
      value: function trackActions(e) {
        var _e$target$dataset = e.target.dataset,
            t = _e$target$dataset.name,
            s = _e$target$dataset.category,
            n = _e$target$dataset.action,
            i = _e$target$dataset.value;
        GoogleAnalytic.trackEvent(t, s, n || "Clicked", i);
      }
    }]);

    return _class38;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1),
      i = s(5),
      a = {
    sg: "Singular",
    pl: "Plural",
    dl: "<b>Dual</b> <br/> A form for verbs and pronouns in Arabic language when addressing two people"
  };

  t["default"] = /*#__PURE__*/function (_n$b27) {
    _inherits(_class39, _n$b27);

    var _super37 = _createSuper(_class39);

    function _class39() {
      _classCallCheck(this, _class39);

      return _super37.apply(this, arguments);
    }

    _createClass(_class39, [{
      key: "connect",
      value: function connect() {
        this.bindFootnotes();
      }
    }, {
      key: "bindFootnotes",
      value: function bindFootnotes() {
        var _this72 = this;

        var e = $(this.element),
            t = e.find("sup");
        t.click(function (t) {
          t.preventDefault(), t.stopImmediatePropagation();
          var s = t.target.getAttribute("foot_note");

          if (s && s.length > 0) {
            var _t6 = e.find("#footnote-" + s);

            if (_t6.length > 0) return _t6.toggleClass("d-none");
            fetch("/foot_note/".concat(s, "?resource_content_id=").concat(_this72.element.dataset.resourceContentId), {
              headers: {
                "X-Requested-With": "XMLHttpRequest"
              }
            }).then(function (e) {
              return e.text();
            }).then(function (t) {
              e.find("#footnotes").html(t);
            });
          }
        }), t.each(function (e, t) {
          var s = t.innerText.replace(" ", "");
          a[s] && new i.a(t, {
            title: a[s],
            html: !0,
            direction: "top",
            sanitize: !1
          });
        });
      }
    }, {
      key: "disconnect",
      value: function disconnect() {}
    }]);

    return _class39;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t), s.d(t, "default", function () {
    return u;
  });
  var n = s(1),
      i = s(13),
      a = s.n(i),
      r = s(5),
      o = s(9),
      l = s(10),
      c = s(7);
  var d = {
    ham_wasl: "Hamzat ul Wasl",
    slnt: "Silent",
    laam_shamsiyah: "Lam Shamsiyyah",
    madda_normal: "Normal Prolongation: 2 Vowels",
    madda_permissible: "Permissible Prolongation: 2, 4, 6 Vowels",
    madda_necessary: "Necessary Prolongation: 6 Vowels",
    madda_obligatory: "Obligatory Prolongation: 4-5 Vowels",
    qalaqah: "Qalaqah",
    ikhafa_shafawi: "Ikhafa' Shafawi - With Meem",
    ikhafa: "Ikhafa'",
    iqlab: "Iqlab",
    idgham_shafawi: "Idgham Shafawi - With Meem",
    idgham_ghunnah: "Idgham - With Ghunnah",
    idgham_wo_ghunnah: "Idgham - Without Ghunnah",
    idgham_mutajanisayn: "Idgham - Mutajanisayn",
    idgham_mutaqaribayn: "Idgham - Mutaqaribayn",
    ghunnah: "Ghunnah: 2 Vowels"
  },
      h = ["ham_wasl", "slnt", "laam_shamsiyah", "madda_normal", "madda_permissible", "madda_necessary", "madda_obligatory", "qalaqah", "ikhafa_shafawi", "ikhafa", "iqlab", "idgham_shafawi", "idgham_ghunnah", "idgham_wo_ghunnah", "idgham_mutajanisayn", "idgham_mutaqaribayn", "ghunnah"];

  var u = /*#__PURE__*/function (_n$b28) {
    _inherits(u, _n$b28);

    var _super38 = _createSuper(u);

    function u() {
      _classCallCheck(this, u);

      return _super38.apply(this, arguments);
    }

    _createClass(u, [{
      key: "connect",
      value: function connect() {
        var e = $(this.element);
        this.el = e, this.bindAction(e), e.find(".arabic").hasClass("tajweed") && (this.fixTajweedForSarari(), this.bindTajweedTooltip());
      }
    }, {
      key: "disconnect",
      value: function disconnect() {}
    }, {
      key: "copy",
      value: function copy() {
        a()(this.copyText);
        var e = this.el.find(".quick-copy");

        var _e$data = e.data(),
            t = _e$data.title,
            s = _e$data.done;

        e.find("span").text(s), setTimeout(function () {
          e.find("span").text(t);
        }, 2e3);
      }
    }, {
      key: "toggleBookmark",
      value: function toggleBookmark() {
        var e = this.loadBookmarks();
        this.isBookmarked() ? delete e[this.verseKey] : e[this.verseKey] = location.href, this.constructor.store.set("bookmarks", JSON.stringify(e)), this.updateBookmarkState();
      }
    }, {
      key: "updateBookmarkState",
      value: function updateBookmarkState() {
        var e = this.el.find(".bookmark");

        var _e$data2 = e.data(),
            t = _e$data2.title,
            s = _e$data2.done;

        this.isBookmarked() ? (e.find("span").text(s), e.find("i").removeClass("icon-bookmark").addClass("icon-bookmarked")) : (e.find("span").text(t), e.find("i").removeClass("icon-bookmarked").addClass("icon-bookmark"));
      }
    }, {
      key: "isBookmarked",
      value: function isBookmarked() {
        return !!this.loadBookmarks()[this.verseKey];
      }
    }, {
      key: "loadBookmarks",
      value: function loadBookmarks() {
        try {
          return JSON.parse(this.constructor.store.get("bookmarks") || "{}");
        } catch (e) {
          return {};
        }
      }
    }, {
      key: "togglePlay",
      value: function togglePlay(e) {
        var t,
            s = document.getElementById("player");

        if (s) {
          if (t = s.player, e.find("span").hasClass("icon-play1")) return t.playVerse(this.verseKey);
          t.pauseCurrent();
        }
      }
    }, {
      key: "bindTajweedTooltip",
      value: function bindTajweedTooltip() {
        var e = this.element;
        h.forEach(function (t) {
          e.querySelectorAll("." + t).forEach(function (e) {
            new r.a(e, {
              title: d[t],
              html: !0,
              sanitize: !1,
              direction: "top"
            });
          });
        });
      }
    }, {
      key: "fixTajweedForSarari",
      value: function fixTajweedForSarari() {
        if (new l.a().isSafari()) {
          var _e14 = this.el.find(".arabic").html(),
              _t7 = this.addZwj(_e14);

          this.el.find(".arabic").html(_t7);
        }
      }
    }, {
      key: "addZwj",
      value: function addZwj(e) {
        return e.replace(/([\u0626\u0628\u062a-\u062e\u0633-\u063a\u0641-\u0646\u0647\u064a\u06cc])([^\u0621-\u064a\u06cc\n ]*<[^>]+>[\u064b-\u0652\u0670\u06d6\u06d7\u06da\u06db\u06dc]*)(?=[\u0622-\u064a\u06cc])/g, "$1&zwj;$2&zwj;");
      }
    }, {
      key: "bindAction",
      value: function bindAction(e) {
        var _this73 = this;

        if (e.data("reading")) return;
        this.actionOpened = !1, this.actionTrigger = e.find("#open-actions"), this.actionTrigger.on("click", function (e) {
          return _this73.toggleActions(e);
        }), new r.a(this.element.querySelector(".qr"), {
          html: !0,
          sanitize: !1,
          direction: "top"
        }), this.element.querySelector("#close-actions").addEventListener("click", function (e) {
          e.stopImmediatePropagation(), _this73.closeAction();
        }), e.find(".quick-copy").on("click", function (e) {
          e.preventDefault(), _this73.copy();
        }), e.find(".bookmark").on("click", function (e) {
          e.preventDefault(), _this73.toggleBookmark();
        });
        var t = e.find(".play");
        t.on("click", function (e) {
          e.preventDefault(), _this73.togglePlay(t);
        });
      }
    }, {
      key: "toggleActions",
      value: function toggleActions(e) {
        this.actionOpened ? this.closeAction() : (this.updateBookmarkState(), this.openAction());
      }
    }, {
      key: "openAction",
      value: function openAction() {
        var _this74 = this;

        this.onClicked = this.click.bind(this), this.el.find(".actions-wrapper").removeClass("hidden"), document.addEventListener("click", this.onClicked), setTimeout(function () {
          _this74.actionOpened = !0;
        }, 100);
      }
    }, {
      key: "closeAction",
      value: function closeAction() {
        this.actionOpened = !1, this.el.find(".actions-wrapper").addClass("hidden"), document.removeEventListener("click", this.onClicked);
      }
    }, {
      key: "click",
      value: function click(e) {
        var t = e.target,
            s = !Object(o.a)(this.element.querySelector("#ayah-actions"), t);
        return this.actionOpened && s && this.closeAction(), !0;
      }
    }, {
      key: "verseNumber",
      get: function get() {
        return this.el.data("verseNumber");
      }
    }, {
      key: "verseKey",
      get: function get() {
        return this.el.data("key");
      }
    }, {
      key: "copyText",
      get: function get() {
        return this.el.data("text");
      }
    }]);

    return u;
  }(n.b);

  u.store = new c.a(!0);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1),
      i = s(5);

  t["default"] = /*#__PURE__*/function (_n$b29) {
    _inherits(_class40, _n$b29);

    var _super39 = _createSuper(_class40);

    function _class40() {
      _classCallCheck(this, _class40);

      return _super39.apply(this, arguments);
    }

    _createClass(_class40, [{
      key: "connect",
      value: function connect() {
        _get(_getPrototypeOf(_class40.prototype), "connect", this).call(this);

        var e = this.element;
        var t = e.dataset;
        e.tooltip = new i.a(e, {
          trigger: "hover",
          placement: "top",
          html: !0,
          sanitize: !1,
          template: "<div class='tooltip bs-tooltip-top' role='tooltip'><div class='arrow'></div><div class='tooltip-inner'></div></div>",
          title: function title() {
            var e = t.local,
                s = document.body.setting.get("tooltip");
            return "<div class='".concat(e, "'>").concat(t[s], "</div>");
          }
        }), this.bindEvents(), this.el = e;
      }
    }, {
      key: "dbClick",
      value: function dbClick() {
        var e,
            t = document.getElementById("player");
        t && (e = t.player);
      }
    }, {
      key: "disconnect",
      value: function disconnect() {
        this.el.removeEventListener("click", function () {}), this.el.removeEventListener("dblclick", function () {}), this.el.tooltip && this.el.tooltip.dispose();
      }
    }, {
      key: "play",
      value: function play() {
        var e,
            t = document.getElementById("player");

        if (t && (e = t.wordPlayer), e) {
          var _this$element$dataset4 = this.element.dataset,
              _t8 = _this$element$dataset4.audio,
              _s6 = _this$element$dataset4.key;
          GoogleAnalytic.trackEvent("Play Word", "Play", _s6, 1), e.play(_t8);
        }
      }
    }, {
      key: "bindEvents",
      value: function bindEvents() {
        var _this75 = this;

        this.element.addEventListener("dblclick", function (e) {
          e.preventDefault(), e.stopImmediatePropagation(), _this75.dbClick(e);
        }), this.element.addEventListener("click", function (e) {
          e.preventDefault(), e.stopImmediatePropagation(), _this75.play();
        });
      }
    }]);

    return _class40;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(12);

  t["default"] = /*#__PURE__*/function (_n$default11) {
    _inherits(_class41, _n$default11);

    var _super40 = _createSuper(_class41);

    function _class41() {
      _classCallCheck(this, _class41);

      return _super40.apply(this, arguments);
    }

    _createClass(_class41, [{
      key: "connect",
      value: function connect() {
        _get(_getPrototypeOf(_class41.prototype), "connect", this).call(this), this.playWordQueue = [], this.resumeOnWordPlayEnd = !1, this.element.wordPlayer = this;
      }
    }, {
      key: "play",
      value: function play(e) {
        var _this76 = this;

        var t,
            s = document.getElementById("player");
        return s && (t = s.player), this.resumeOnWordPlayEnd = this.resumeOnWordPlayEnd || t.isPlaying(), this.loadHowler().then(function () {
          var s = new Howl({
            src: [_this76.buildAudioUrl(e)],
            html5: !1,
            autoplay: !1,
            onload: function onload() {
              t.isPlaying() && t.pauseCurrent();
            },
            onplayerror: function onplayerror() {
              _this76.playWordQueue = [], _this76.resumeOnWordPlayEnd && t.playCurrent(), _this76.resumeOnWordPlayEnd = !1;
            },
            onend: function onend() {
              _this76.playWordQueue.shift(), _this76.playWordQueue[0] ? _this76.playWordQueue[0].play() : (_this76.resumeOnWordPlayEnd && t.playCurrent(), _this76.resumeOnWordPlayEnd = !1);
            }
          });
          _this76.playWordQueue.push(s), 1 == _this76.playWordQueue.length && s.play();
        });
      }
    }]);

    return _class41;
  }(n["default"]);
}, function (e, t, s) {},, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);

  var i = /*#__PURE__*/function () {
    function i(e, t) {
      _classCallCheck(this, i);

      var s = {
        debug: !1,
        navSelector: "a[rel=next]",
        buffer: 1e3,
        debounce: 250,
        loading: null,
        success: null,
        error: null,
        context: window,
        id: "",
        state: {
          paused: !1,
          loading: !1
        }
      };
      this.scrollTimeout = null, this.options = $.extend({}, s, t), this.$container = e, this.$context = $(this.options.context), this.options.id = Math.random().toString(36).substring(2, 10), this.pageScrollHandler = null, this.init();
    }

    _createClass(i, [{
      key: "init",
      value: function init() {
        return this._log("Init scrolling"), this.pageScrollHandler = this._scrolled.bind(this), this.$context[0].addEventListener("scroll", this.pageScrollHandler);
      }
    }, {
      key: "_scrolled",
      value: function _scrolled() {
        var _this77 = this;

        var e = this.options.debounce;
        return this.scrollTimeout && (clearTimeout(this.scrollTimeout), this.scrollTimeout = null), this.scrollTimeout = setTimeout(function () {
          return _this77.check();
        }, e);
      }
    }, {
      key: "_log",
      value: function _log(e) {
        if (this.options.debug) {
          var _t9 = this.options.id;
          return "undefined" !== typeof console && null !== console ? console.log(e, this.$container.attr("id"), _t9) : void 0;
        }
      }
    }, {
      key: "check",
      value: function check() {
        var e = this.$container.find(this.options.navSelector);
        if (0 === e.length) return this._log("No more pages to load");
        {
          var _t10 = this.$context.scrollTop() + this.$context.height(),
              _s7 = e.offset().top - _t10;

          return this.options.state.paused ? this._log("Paused") : this.options.state.loading ? this._log("Waiting...") : _s7 > this.options.buffer ? this._log(_s7 - this.options.buffer + "px remaining...") : this.next();
        }
      }
    }, {
      key: "next",
      value: function next() {
        var _this78 = this;

        if (this.options.state.done) return this._log("Loaded all pages");
        {
          this._loading();

          var _e15 = this.$container.find(this.options.navSelector).attr("href");

          return fetch(_e15, {
            headers: {
              "X-Requested-With": "XMLHttpRequest"
            }
          }).then(function (e) {
            return e.text();
          }).then(function (e) {
            return _this78._success(e);
          })["catch"](function (e) {
            return _this78._error(e);
          });
        }
      }
    }, {
      key: "_loading",
      value: function _loading() {
        if (this.options.state.loading = !0, this._log("Loading next page..."), "function" === typeof this.options.loading) return this.$container.find(this.options.navSelector).each(this.options.loading);
      }
    }, {
      key: "_success",
      value: function _success(e) {
        this.options.state.loading = !1, this._log("New page loaded!"), "function" === typeof this.options.success && this.options.success(e);
      }
    }, {
      key: "_error",
      value: function _error() {
        if (this.options.state.loading = !1, this._log("Error loading new page :("), "function" === typeof this.options.error) return this.$container.find(this.options.navSelector).each(this.options.error);
      }
    }, {
      key: "pause",
      value: function pause() {
        return this.options.state.paused = !0, this._log("Scroll checks paused");
      }
    }, {
      key: "resume",
      value: function resume() {
        return this.options.state.paused = !1, this._log("Scroll checks resumed"), this.check();
      }
    }, {
      key: "stop",
      value: function stop() {
        return this.scrollTimeout && clearTimeout(this.scrollTimeout), this.$context[0].removeEventListener("scroll", this.pageScrollHandler), this._log("Scroll checks stopped");
      }
    }, {
      key: "destroy",
      value: function destroy() {
        this.stop();
      }
    }]);

    return i;
  }();

  t["default"] = /*#__PURE__*/function (_n$b30) {
    _inherits(_class42, _n$b30);

    var _super41 = _createSuper(_class42);

    function _class42() {
      _classCallCheck(this, _class42);

      return _super41.apply(this, arguments);
    }

    _createClass(_class42, [{
      key: "connect",
      value: function connect() {
        var e = $(this.element);
        var t = e.attr("id"),
            s = e.data("context");
        s = s ? $(s) : window;
        var n = $(e.data("items-container") || "#" + t),
            a = new i(n, {
          debug: !1,
          buffer: 1e3,
          navSelector: "#".concat(t, "_pagination a[rel=next]:first"),
          context: s,
          loading: function loading() {},
          success: function success(e) {
            $("#".concat(t, "_pagination")).remove();
            var s = $(e);
            n.append(s), n.trigger("items:added");
          },
          error: function error(e) {
            return n.find(".pagination").before(e);
          }
        });
        n.is(":hidden") && a.pause(), n.on("visibility:visible", function () {
          a.resume();
        }), n.on("visibility:hidden", function () {
          a.pause();
        }), this.element.infinitePage = a, this.plugin = a;
      }
    }, {
      key: "disconnect",
      value: function disconnect() {
        this.plugin && this.plugin.stop();
      }
    }]);

    return _class42;
  }(n.b);
}, function (e, t, s) {
  "use strict";

  s.r(t);
  var n = s(1);

  var i = /*#__PURE__*/function () {
    function i() {
      _classCallCheck(this, i);
    }

    _createClass(i, [{
      key: "loadAsyncContent",
      value: function loadAsyncContent(e) {
        var t,
            s,
            n,
            _i6,
            a = document.querySelector(e),
            r = a.dataset,
            o = r.path,
            l = r.method || "GET",
            c = parseFloat(r.interval || 0),
            d = r.successEvent,
            h = r.errorEvent,
            u = r.retryEvent,
            p = parseInt(r.retryCount || 0),
            g = r.errorMessage || "",
            m = parseInt(0 | r.delayOnError),
            y = r.lazyLoad;

        y && (y = JSON.parse(y), t = (y = 1 == y ? {} : y).threshold || [.25, .5, .75, 1], s = y.root, n = y.margin || "0px", s = s ? document.querySelector(s) : null);

        var f = function f(e) {
          var t;
          e && e.length > 0 && ("function" === typeof Event ? t = new Event(e) : (t = document.createEvent("Event")).initEvent(e, !0, !0), document.dispatchEvent(t));
        },
            v = function v(e) {
          y && function (e) {
            e.dataset.lazyLoaded = !0, _i6 && _i6.unobserve(e), _i6 = null;
          }(a), a.classList.remove("render-async"), c ? $(a).empty().append(e) : $(a).replaceWith(e), d && f(d);
        },
            b = function b(e, t) {
          e.ok ? e.text().then(v) : function (e) {
            e > p ? setTimeout(m, function () {
              S(e);
            }) : a.innerHTML = g, f(h);
          }(t);
        },
            w = function w(e) {
          var t = {
            "X-Requested-With": "XMLHttpRequest"
          },
              s = document.querySelector('meta[name="csrf-token"]');
          s && (t["X-CSRF-Token"] = s.content);
          var n = {
            method: l,
            headers: t
          };
          "POST" == l && (n.body = JSON.stringify(r)), fetch(o, n).then(function (t) {
            return b(t, e);
          });
        };

        c > 0 && (p = 0, setInterval(w, c));
        var k;
        if (p > 0) var S = function S(e) {
          return !(e >= p) && (f(u), w(e + 1), !0);
        };
        y ? (k = 1, (_i6 = new IntersectionObserver(function (e) {
          e[0].intersectionRatio > 0 && (function (e) {
            return "true" === e.dataset.lazyLoaded;
          }(a) || w(k));
        }, {
          root: s,
          rootMargin: n,
          threshold: t
        })).observe(a)) : w(1);
      }
    }]);

    return i;
  }();

  t["default"] = /*#__PURE__*/function (_n$b31) {
    _inherits(_class43, _n$b31);

    var _super42 = _createSuper(_class43);

    function _class43() {
      _classCallCheck(this, _class43);

      return _super42.apply(this, arguments);
    }

    _createClass(_class43, [{
      key: "connect",
      value: function connect() {
        new i().loadAsyncContent("#" + this.element.getAttribute("id"));
      }
    }]);

    return _class43;
  }(n.b);
}], [[25, 1, 4]]]);
/******/ })()
;