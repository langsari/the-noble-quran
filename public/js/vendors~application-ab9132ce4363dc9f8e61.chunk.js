/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************************************************!*\
  !*** ./resources/js/vendors~application-ab9132ce4363dc9f8e61.chunk.js ***!
  \************************************************************************/
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*!For license information please see vendors~application-ab9132ce4363dc9f8e61.chunk.js.LICENSE.txt*/
(window.webpackJsonp = window.webpackJsonp || []).push([[4], [function (e, t, n) {
  (function (e) {
    var n;

    function r(e) {
      return (r = "function" === typeof Symbol && "symbol" === _typeof(Symbol.iterator) ? function (e) {
        return _typeof(e);
      } : function (e) {
        return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : _typeof(e);
      })(e);
    }

    !function (t, n) {
      "use strict";

      "object" === r(e) && "object" === r(e.exports) ? e.exports = t.document ? n(t, !0) : function (e) {
        if (!e.document) throw new Error("jQuery requires a window with a document");
        return n(e);
      } : n(t);
    }("undefined" !== typeof window ? window : this, function (o, i) {
      "use strict";

      var s = [],
          a = Object.getPrototypeOf,
          l = s.slice,
          c = s.flat ? function (e) {
        return s.flat.call(e);
      } : function (e) {
        return s.concat.apply([], e);
      },
          u = s.push,
          p = s.indexOf,
          h = {},
          d = h.toString,
          f = h.hasOwnProperty,
          m = f.toString,
          g = m.call(Object),
          y = {},
          v = function v(e) {
        return "function" === typeof e && "number" !== typeof e.nodeType;
      },
          b = function b(e) {
        return null != e && e === e.window;
      },
          w = o.document,
          E = {
        type: !0,
        src: !0,
        nonce: !0,
        noModule: !0
      };

      function _(e, t, n) {
        var r,
            o,
            i = (n = n || w).createElement("script");
        if (i.text = e, t) for (r in E) {
          (o = t[r] || t.getAttribute && t.getAttribute(r)) && i.setAttribute(r, o);
        }
        n.head.appendChild(i).parentNode.removeChild(i);
      }

      function x(e) {
        return null == e ? e + "" : "object" === r(e) || "function" === typeof e ? h[d.call(e)] || "object" : r(e);
      }

      var S = "3.5.1 -ajax,-ajax/jsonp,-ajax/load,-ajax/script,-ajax/var/location,-ajax/var/nonce,-ajax/var/rquery,-ajax/xhr,-manipulation/_evalUrl,-deprecated/ajax-event-alias,-effects,-effects/Tween,-effects/animatedSelector",
          T = function e(t, n) {
        return new e.fn.init(t, n);
      };

      function C(e) {
        var t = !!e && "length" in e && e.length,
            n = x(e);
        return !v(e) && !b(e) && ("array" === n || 0 === t || "number" === typeof t && t > 0 && t - 1 in e);
      }

      T.fn = T.prototype = {
        jquery: S,
        constructor: T,
        length: 0,
        toArray: function toArray() {
          return l.call(this);
        },
        get: function get(e) {
          return null == e ? l.call(this) : e < 0 ? this[e + this.length] : this[e];
        },
        pushStack: function pushStack(e) {
          var t = T.merge(this.constructor(), e);
          return t.prevObject = this, t;
        },
        each: function each(e) {
          return T.each(this, e);
        },
        map: function map(e) {
          return this.pushStack(T.map(this, function (t, n) {
            return e.call(t, n, t);
          }));
        },
        slice: function slice() {
          return this.pushStack(l.apply(this, arguments));
        },
        first: function first() {
          return this.eq(0);
        },
        last: function last() {
          return this.eq(-1);
        },
        even: function even() {
          return this.pushStack(T.grep(this, function (e, t) {
            return (t + 1) % 2;
          }));
        },
        odd: function odd() {
          return this.pushStack(T.grep(this, function (e, t) {
            return t % 2;
          }));
        },
        eq: function eq(e) {
          var t = this.length,
              n = +e + (e < 0 ? t : 0);
          return this.pushStack(n >= 0 && n < t ? [this[n]] : []);
        },
        end: function end() {
          return this.prevObject || this.constructor();
        },
        push: u,
        sort: s.sort,
        splice: s.splice
      }, T.extend = T.fn.extend = function () {
        var e,
            t,
            n,
            o,
            i,
            s,
            a = arguments[0] || {},
            l = 1,
            c = arguments.length,
            u = !1;

        for ("boolean" === typeof a && (u = a, a = arguments[l] || {}, l++), "object" === r(a) || v(a) || (a = {}), l === c && (a = this, l--); l < c; l++) {
          if (null != (e = arguments[l])) for (t in e) {
            o = e[t], "__proto__" !== t && a !== o && (u && o && (T.isPlainObject(o) || (i = Array.isArray(o))) ? (n = a[t], s = i && !Array.isArray(n) ? [] : i || T.isPlainObject(n) ? n : {}, i = !1, a[t] = T.extend(u, s, o)) : void 0 !== o && (a[t] = o));
          }
        }

        return a;
      }, T.extend({
        expando: "jQuery" + (S + Math.random()).replace(/\D/g, ""),
        isReady: !0,
        error: function error(e) {
          throw new Error(e);
        },
        noop: function noop() {},
        isPlainObject: function isPlainObject(e) {
          var t, n;
          return !(!e || "[object Object]" !== d.call(e)) && (!(t = a(e)) || "function" === typeof (n = f.call(t, "constructor") && t.constructor) && m.call(n) === g);
        },
        isEmptyObject: function isEmptyObject(e) {
          var t;

          for (t in e) {
            return !1;
          }

          return !0;
        },
        globalEval: function globalEval(e, t, n) {
          _(e, {
            nonce: t && t.nonce
          }, n);
        },
        each: function each(e, t) {
          var n,
              r = 0;
          if (C(e)) for (n = e.length; r < n && !1 !== t.call(e[r], r, e[r]); r++) {
            ;
          } else for (r in e) {
            if (!1 === t.call(e[r], r, e[r])) break;
          }
          return e;
        },
        makeArray: function makeArray(e, t) {
          var n = t || [];
          return null != e && (C(Object(e)) ? T.merge(n, "string" === typeof e ? [e] : e) : u.call(n, e)), n;
        },
        inArray: function inArray(e, t, n) {
          return null == t ? -1 : p.call(t, e, n);
        },
        merge: function merge(e, t) {
          for (var n = +t.length, r = 0, o = e.length; r < n; r++) {
            e[o++] = t[r];
          }

          return e.length = o, e;
        },
        grep: function grep(e, t, n) {
          for (var r = [], o = 0, i = e.length, s = !n; o < i; o++) {
            !t(e[o], o) !== s && r.push(e[o]);
          }

          return r;
        },
        map: function map(e, t, n) {
          var r,
              o,
              i = 0,
              s = [];
          if (C(e)) for (r = e.length; i < r; i++) {
            null != (o = t(e[i], i, n)) && s.push(o);
          } else for (i in e) {
            null != (o = t(e[i], i, n)) && s.push(o);
          }
          return c(s);
        },
        guid: 1,
        support: y
      }), "function" === typeof Symbol && (T.fn[Symbol.iterator] = s[Symbol.iterator]), T.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function (e, t) {
        h["[object " + t + "]"] = t.toLowerCase();
      });

      var A = function (e) {
        var t,
            n,
            r,
            o,
            i,
            s,
            a,
            l,
            c,
            u,
            p,
            h,
            d,
            f,
            m,
            g,
            y,
            v,
            b,
            w = "sizzle" + 1 * new Date(),
            E = e.document,
            _ = 0,
            x = 0,
            S = le(),
            T = le(),
            C = le(),
            A = le(),
            k = function k(e, t) {
          return e === t && (p = !0), 0;
        },
            O = {}.hasOwnProperty,
            D = [],
            L = D.pop,
            N = D.push,
            P = D.push,
            j = D.slice,
            I = function I(e, t) {
          for (var n = 0, r = e.length; n < r; n++) {
            if (e[n] === t) return n;
          }

          return -1;
        },
            R = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            $ = "[\\x20\\t\\r\\n\\f]",
            q = "(?:\\\\[\\da-fA-F]{1,6}[\\x20\\t\\r\\n\\f]?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",
            M = "\\[[\\x20\\t\\r\\n\\f]*(" + q + ")(?:" + $ + "*([*^$|!~]?=)" + $ + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + q + "))|)" + $ + "*\\]",
            B = ":(" + q + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + M + ")*)|.*)\\)|)",
            F = new RegExp($ + "+", "g"),
            H = new RegExp("^[\\x20\\t\\r\\n\\f]+|((?:^|[^\\\\])(?:\\\\.)*)[\\x20\\t\\r\\n\\f]+$", "g"),
            U = new RegExp("^[\\x20\\t\\r\\n\\f]*,[\\x20\\t\\r\\n\\f]*"),
            W = new RegExp("^[\\x20\\t\\r\\n\\f]*([>+~]|[\\x20\\t\\r\\n\\f])[\\x20\\t\\r\\n\\f]*"),
            z = new RegExp($ + "|>"),
            V = new RegExp(B),
            K = new RegExp("^" + q + "$"),
            G = {
          ID: new RegExp("^#(" + q + ")"),
          CLASS: new RegExp("^\\.(" + q + ")"),
          TAG: new RegExp("^(" + q + "|[*])"),
          ATTR: new RegExp("^" + M),
          PSEUDO: new RegExp("^" + B),
          CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\([\\x20\\t\\r\\n\\f]*(even|odd|(([+-]|)(\\d*)n|)[\\x20\\t\\r\\n\\f]*(?:([+-]|)[\\x20\\t\\r\\n\\f]*(\\d+)|))[\\x20\\t\\r\\n\\f]*\\)|)", "i"),
          bool: new RegExp("^(?:" + R + ")$", "i"),
          needsContext: new RegExp("^[\\x20\\t\\r\\n\\f]*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\([\\x20\\t\\r\\n\\f]*((?:-\\d)?\\d*)[\\x20\\t\\r\\n\\f]*\\)|)(?=[^-]|$)", "i")
        },
            Y = /HTML$/i,
            Q = /^(?:input|select|textarea|button)$/i,
            X = /^h\d$/i,
            J = /^[^{]+\{\s*\[native \w/,
            Z = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
            ee = /[+~]/,
            te = new RegExp("\\\\[\\da-fA-F]{1,6}[\\x20\\t\\r\\n\\f]?|\\\\([^\\r\\n\\f])", "g"),
            ne = function ne(e, t) {
          var n = "0x" + e.slice(1) - 65536;
          return t || (n < 0 ? String.fromCharCode(n + 65536) : String.fromCharCode(n >> 10 | 55296, 1023 & n | 56320));
        },
            re = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
            oe = function oe(e, t) {
          return t ? "\0" === e ? "\uFFFD" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e;
        },
            ie = function ie() {
          h();
        },
            se = we(function (e) {
          return !0 === e.disabled && "fieldset" === e.nodeName.toLowerCase();
        }, {
          dir: "parentNode",
          next: "legend"
        });

        try {
          P.apply(D = j.call(E.childNodes), E.childNodes), D[E.childNodes.length].nodeType;
        } catch (Te) {
          P = {
            apply: D.length ? function (e, t) {
              N.apply(e, j.call(t));
            } : function (e, t) {
              for (var n = e.length, r = 0; e[n++] = t[r++];) {
                ;
              }

              e.length = n - 1;
            }
          };
        }

        function ae(e, t, r, o) {
          var i,
              a,
              c,
              u,
              p,
              f,
              y,
              v = t && t.ownerDocument,
              E = t ? t.nodeType : 9;
          if (r = r || [], "string" !== typeof e || !e || 1 !== E && 9 !== E && 11 !== E) return r;

          if (!o && (h(t), t = t || d, m)) {
            if (11 !== E && (p = Z.exec(e))) if (i = p[1]) {
              if (9 === E) {
                if (!(c = t.getElementById(i))) return r;
                if (c.id === i) return r.push(c), r;
              } else if (v && (c = v.getElementById(i)) && b(t, c) && c.id === i) return r.push(c), r;
            } else {
              if (p[2]) return P.apply(r, t.getElementsByTagName(e)), r;
              if ((i = p[3]) && n.getElementsByClassName && t.getElementsByClassName) return P.apply(r, t.getElementsByClassName(i)), r;
            }

            if (n.qsa && !A[e + " "] && (!g || !g.test(e)) && (1 !== E || "object" !== t.nodeName.toLowerCase())) {
              if (y = e, v = t, 1 === E && (z.test(e) || W.test(e))) {
                for ((v = ee.test(e) && ye(t.parentNode) || t) === t && n.scope || ((u = t.getAttribute("id")) ? u = u.replace(re, oe) : t.setAttribute("id", u = w)), a = (f = s(e)).length; a--;) {
                  f[a] = (u ? "#" + u : ":scope") + " " + be(f[a]);
                }

                y = f.join(",");
              }

              try {
                return P.apply(r, v.querySelectorAll(y)), r;
              } catch (_) {
                A(e, !0);
              } finally {
                u === w && t.removeAttribute("id");
              }
            }
          }

          return l(e.replace(H, "$1"), t, r, o);
        }

        function le() {
          var e = [];
          return function t(n, o) {
            return e.push(n + " ") > r.cacheLength && delete t[e.shift()], t[n + " "] = o;
          };
        }

        function ce(e) {
          return e[w] = !0, e;
        }

        function ue(e) {
          var t = d.createElement("fieldset");

          try {
            return !!e(t);
          } catch (Te) {
            return !1;
          } finally {
            t.parentNode && t.parentNode.removeChild(t), t = null;
          }
        }

        function pe(e, t) {
          for (var n = e.split("|"), o = n.length; o--;) {
            r.attrHandle[n[o]] = t;
          }
        }

        function he(e, t) {
          var n = t && e,
              r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
          if (r) return r;
          if (n) for (; n = n.nextSibling;) {
            if (n === t) return -1;
          }
          return e ? 1 : -1;
        }

        function de(e) {
          return function (t) {
            return "input" === t.nodeName.toLowerCase() && t.type === e;
          };
        }

        function fe(e) {
          return function (t) {
            var n = t.nodeName.toLowerCase();
            return ("input" === n || "button" === n) && t.type === e;
          };
        }

        function me(e) {
          return function (t) {
            return "form" in t ? t.parentNode && !1 === t.disabled ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === e : t.disabled === e : t.isDisabled === e || t.isDisabled !== !e && se(t) === e : t.disabled === e : "label" in t && t.disabled === e;
          };
        }

        function ge(e) {
          return ce(function (t) {
            return t = +t, ce(function (n, r) {
              for (var o, i = e([], n.length, t), s = i.length; s--;) {
                n[o = i[s]] && (n[o] = !(r[o] = n[o]));
              }
            });
          });
        }

        function ye(e) {
          return e && "undefined" !== typeof e.getElementsByTagName && e;
        }

        for (t in n = ae.support = {}, i = ae.isXML = function (e) {
          var t = e.namespaceURI,
              n = (e.ownerDocument || e).documentElement;
          return !Y.test(t || n && n.nodeName || "HTML");
        }, h = ae.setDocument = function (e) {
          var t,
              o,
              s = e ? e.ownerDocument || e : E;
          return s != d && 9 === s.nodeType && s.documentElement ? (f = (d = s).documentElement, m = !i(d), E != d && (o = d.defaultView) && o.top !== o && (o.addEventListener ? o.addEventListener("unload", ie, !1) : o.attachEvent && o.attachEvent("onunload", ie)), n.scope = ue(function (e) {
            return f.appendChild(e).appendChild(d.createElement("div")), "undefined" !== typeof e.querySelectorAll && !e.querySelectorAll(":scope fieldset div").length;
          }), n.attributes = ue(function (e) {
            return e.className = "i", !e.getAttribute("className");
          }), n.getElementsByTagName = ue(function (e) {
            return e.appendChild(d.createComment("")), !e.getElementsByTagName("*").length;
          }), n.getElementsByClassName = J.test(d.getElementsByClassName), n.getById = ue(function (e) {
            return f.appendChild(e).id = w, !d.getElementsByName || !d.getElementsByName(w).length;
          }), n.getById ? (r.filter.ID = function (e) {
            var t = e.replace(te, ne);
            return function (e) {
              return e.getAttribute("id") === t;
            };
          }, r.find.ID = function (e, t) {
            if ("undefined" !== typeof t.getElementById && m) {
              var n = t.getElementById(e);
              return n ? [n] : [];
            }
          }) : (r.filter.ID = function (e) {
            var t = e.replace(te, ne);
            return function (e) {
              var n = "undefined" !== typeof e.getAttributeNode && e.getAttributeNode("id");
              return n && n.value === t;
            };
          }, r.find.ID = function (e, t) {
            if ("undefined" !== typeof t.getElementById && m) {
              var n,
                  r,
                  o,
                  i = t.getElementById(e);

              if (i) {
                if ((n = i.getAttributeNode("id")) && n.value === e) return [i];

                for (o = t.getElementsByName(e), r = 0; i = o[r++];) {
                  if ((n = i.getAttributeNode("id")) && n.value === e) return [i];
                }
              }

              return [];
            }
          }), r.find.TAG = n.getElementsByTagName ? function (e, t) {
            return "undefined" !== typeof t.getElementsByTagName ? t.getElementsByTagName(e) : n.qsa ? t.querySelectorAll(e) : void 0;
          } : function (e, t) {
            var n,
                r = [],
                o = 0,
                i = t.getElementsByTagName(e);

            if ("*" === e) {
              for (; n = i[o++];) {
                1 === n.nodeType && r.push(n);
              }

              return r;
            }

            return i;
          }, r.find.CLASS = n.getElementsByClassName && function (e, t) {
            if ("undefined" !== typeof t.getElementsByClassName && m) return t.getElementsByClassName(e);
          }, y = [], g = [], (n.qsa = J.test(d.querySelectorAll)) && (ue(function (e) {
            var t;
            f.appendChild(e).innerHTML = "<a id='" + w + "'></a><select id='" + w + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && g.push("[*^$]=[\\x20\\t\\r\\n\\f]*(?:''|\"\")"), e.querySelectorAll("[selected]").length || g.push("\\[[\\x20\\t\\r\\n\\f]*(?:value|" + R + ")"), e.querySelectorAll("[id~=" + w + "-]").length || g.push("~="), (t = d.createElement("input")).setAttribute("name", ""), e.appendChild(t), e.querySelectorAll("[name='']").length || g.push("\\[[\\x20\\t\\r\\n\\f]*name[\\x20\\t\\r\\n\\f]*=[\\x20\\t\\r\\n\\f]*(?:''|\"\")"), e.querySelectorAll(":checked").length || g.push(":checked"), e.querySelectorAll("a#" + w + "+*").length || g.push(".#.+[+~]"), e.querySelectorAll("\\\f"), g.push("[\\r\\n\\f]");
          }), ue(function (e) {
            e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
            var t = d.createElement("input");
            t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && g.push("name[\\x20\\t\\r\\n\\f]*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && g.push(":enabled", ":disabled"), f.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && g.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), g.push(",.*:");
          })), (n.matchesSelector = J.test(v = f.matches || f.webkitMatchesSelector || f.mozMatchesSelector || f.oMatchesSelector || f.msMatchesSelector)) && ue(function (e) {
            n.disconnectedMatch = v.call(e, "*"), v.call(e, "[s!='']:x"), y.push("!=", B);
          }), g = g.length && new RegExp(g.join("|")), y = y.length && new RegExp(y.join("|")), t = J.test(f.compareDocumentPosition), b = t || J.test(f.contains) ? function (e, t) {
            var n = 9 === e.nodeType ? e.documentElement : e,
                r = t && t.parentNode;
            return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)));
          } : function (e, t) {
            if (t) for (; t = t.parentNode;) {
              if (t === e) return !0;
            }
            return !1;
          }, k = t ? function (e, t) {
            if (e === t) return p = !0, 0;
            var r = !e.compareDocumentPosition - !t.compareDocumentPosition;
            return r || (1 & (r = (e.ownerDocument || e) == (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !n.sortDetached && t.compareDocumentPosition(e) === r ? e == d || e.ownerDocument == E && b(E, e) ? -1 : t == d || t.ownerDocument == E && b(E, t) ? 1 : u ? I(u, e) - I(u, t) : 0 : 4 & r ? -1 : 1);
          } : function (e, t) {
            if (e === t) return p = !0, 0;
            var n,
                r = 0,
                o = e.parentNode,
                i = t.parentNode,
                s = [e],
                a = [t];
            if (!o || !i) return e == d ? -1 : t == d ? 1 : o ? -1 : i ? 1 : u ? I(u, e) - I(u, t) : 0;
            if (o === i) return he(e, t);

            for (n = e; n = n.parentNode;) {
              s.unshift(n);
            }

            for (n = t; n = n.parentNode;) {
              a.unshift(n);
            }

            for (; s[r] === a[r];) {
              r++;
            }

            return r ? he(s[r], a[r]) : s[r] == E ? -1 : a[r] == E ? 1 : 0;
          }, d) : d;
        }, ae.matches = function (e, t) {
          return ae(e, null, null, t);
        }, ae.matchesSelector = function (e, t) {
          if (h(e), n.matchesSelector && m && !A[t + " "] && (!y || !y.test(t)) && (!g || !g.test(t))) try {
            var r = v.call(e, t);
            if (r || n.disconnectedMatch || e.document && 11 !== e.document.nodeType) return r;
          } catch (Te) {
            A(t, !0);
          }
          return ae(t, d, null, [e]).length > 0;
        }, ae.contains = function (e, t) {
          return (e.ownerDocument || e) != d && h(e), b(e, t);
        }, ae.attr = function (e, t) {
          (e.ownerDocument || e) != d && h(e);
          var o = r.attrHandle[t.toLowerCase()],
              i = o && O.call(r.attrHandle, t.toLowerCase()) ? o(e, t, !m) : void 0;
          return void 0 !== i ? i : n.attributes || !m ? e.getAttribute(t) : (i = e.getAttributeNode(t)) && i.specified ? i.value : null;
        }, ae.escape = function (e) {
          return (e + "").replace(re, oe);
        }, ae.error = function (e) {
          throw new Error("Syntax error, unrecognized expression: " + e);
        }, ae.uniqueSort = function (e) {
          var t,
              r = [],
              o = 0,
              i = 0;

          if (p = !n.detectDuplicates, u = !n.sortStable && e.slice(0), e.sort(k), p) {
            for (; t = e[i++];) {
              t === e[i] && (o = r.push(i));
            }

            for (; o--;) {
              e.splice(r[o], 1);
            }
          }

          return u = null, e;
        }, o = ae.getText = function (e) {
          var t,
              n = "",
              r = 0,
              i = e.nodeType;

          if (i) {
            if (1 === i || 9 === i || 11 === i) {
              if ("string" === typeof e.textContent) return e.textContent;

              for (e = e.firstChild; e; e = e.nextSibling) {
                n += o(e);
              }
            } else if (3 === i || 4 === i) return e.nodeValue;
          } else for (; t = e[r++];) {
            n += o(t);
          }

          return n;
        }, (r = ae.selectors = {
          cacheLength: 50,
          createPseudo: ce,
          match: G,
          attrHandle: {},
          find: {},
          relative: {
            ">": {
              dir: "parentNode",
              first: !0
            },
            " ": {
              dir: "parentNode"
            },
            "+": {
              dir: "previousSibling",
              first: !0
            },
            "~": {
              dir: "previousSibling"
            }
          },
          preFilter: {
            ATTR: function ATTR(e) {
              return e[1] = e[1].replace(te, ne), e[3] = (e[3] || e[4] || e[5] || "").replace(te, ne), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4);
            },
            CHILD: function CHILD(e) {
              return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || ae.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && ae.error(e[0]), e;
            },
            PSEUDO: function PSEUDO(e) {
              var t,
                  n = !e[6] && e[2];
              return G.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && V.test(n) && (t = s(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3));
            }
          },
          filter: {
            TAG: function TAG(e) {
              var t = e.replace(te, ne).toLowerCase();
              return "*" === e ? function () {
                return !0;
              } : function (e) {
                return e.nodeName && e.nodeName.toLowerCase() === t;
              };
            },
            CLASS: function CLASS(e) {
              var t = S[e + " "];
              return t || (t = new RegExp("(^|[\\x20\\t\\r\\n\\f])" + e + "(" + $ + "|$)")) && S(e, function (e) {
                return t.test("string" === typeof e.className && e.className || "undefined" !== typeof e.getAttribute && e.getAttribute("class") || "");
              });
            },
            ATTR: function ATTR(e, t, n) {
              return function (r) {
                var o = ae.attr(r, e);
                return null == o ? "!=" === t : !t || (o += "", "=" === t ? o === n : "!=" === t ? o !== n : "^=" === t ? n && 0 === o.indexOf(n) : "*=" === t ? n && o.indexOf(n) > -1 : "$=" === t ? n && o.slice(-n.length) === n : "~=" === t ? (" " + o.replace(F, " ") + " ").indexOf(n) > -1 : "|=" === t && (o === n || o.slice(0, n.length + 1) === n + "-"));
              };
            },
            CHILD: function CHILD(e, t, n, r, o) {
              var i = "nth" !== e.slice(0, 3),
                  s = "last" !== e.slice(-4),
                  a = "of-type" === t;
              return 1 === r && 0 === o ? function (e) {
                return !!e.parentNode;
              } : function (t, n, l) {
                var c,
                    u,
                    p,
                    h,
                    d,
                    f,
                    m = i !== s ? "nextSibling" : "previousSibling",
                    g = t.parentNode,
                    y = a && t.nodeName.toLowerCase(),
                    v = !l && !a,
                    b = !1;

                if (g) {
                  if (i) {
                    for (; m;) {
                      for (h = t; h = h[m];) {
                        if (a ? h.nodeName.toLowerCase() === y : 1 === h.nodeType) return !1;
                      }

                      f = m = "only" === e && !f && "nextSibling";
                    }

                    return !0;
                  }

                  if (f = [s ? g.firstChild : g.lastChild], s && v) {
                    for (b = (d = (c = (u = (p = (h = g)[w] || (h[w] = {}))[h.uniqueID] || (p[h.uniqueID] = {}))[e] || [])[0] === _ && c[1]) && c[2], h = d && g.childNodes[d]; h = ++d && h && h[m] || (b = d = 0) || f.pop();) {
                      if (1 === h.nodeType && ++b && h === t) {
                        u[e] = [_, d, b];
                        break;
                      }
                    }
                  } else if (v && (b = d = (c = (u = (p = (h = t)[w] || (h[w] = {}))[h.uniqueID] || (p[h.uniqueID] = {}))[e] || [])[0] === _ && c[1]), !1 === b) for (; (h = ++d && h && h[m] || (b = d = 0) || f.pop()) && ((a ? h.nodeName.toLowerCase() !== y : 1 !== h.nodeType) || !++b || (v && ((u = (p = h[w] || (h[w] = {}))[h.uniqueID] || (p[h.uniqueID] = {}))[e] = [_, b]), h !== t));) {
                    ;
                  }

                  return (b -= o) === r || b % r === 0 && b / r >= 0;
                }
              };
            },
            PSEUDO: function PSEUDO(e, t) {
              var n,
                  o = r.pseudos[e] || r.setFilters[e.toLowerCase()] || ae.error("unsupported pseudo: " + e);
              return o[w] ? o(t) : o.length > 1 ? (n = [e, e, "", t], r.setFilters.hasOwnProperty(e.toLowerCase()) ? ce(function (e, n) {
                for (var r, i = o(e, t), s = i.length; s--;) {
                  e[r = I(e, i[s])] = !(n[r] = i[s]);
                }
              }) : function (e) {
                return o(e, 0, n);
              }) : o;
            }
          },
          pseudos: {
            not: ce(function (e) {
              var t = [],
                  n = [],
                  r = a(e.replace(H, "$1"));
              return r[w] ? ce(function (e, t, n, o) {
                for (var i, s = r(e, null, o, []), a = e.length; a--;) {
                  (i = s[a]) && (e[a] = !(t[a] = i));
                }
              }) : function (e, o, i) {
                return t[0] = e, r(t, null, i, n), t[0] = null, !n.pop();
              };
            }),
            has: ce(function (e) {
              return function (t) {
                return ae(e, t).length > 0;
              };
            }),
            contains: ce(function (e) {
              return e = e.replace(te, ne), function (t) {
                return (t.textContent || o(t)).indexOf(e) > -1;
              };
            }),
            lang: ce(function (e) {
              return K.test(e || "") || ae.error("unsupported lang: " + e), e = e.replace(te, ne).toLowerCase(), function (t) {
                var n;

                do {
                  if (n = m ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (n = n.toLowerCase()) === e || 0 === n.indexOf(e + "-");
                } while ((t = t.parentNode) && 1 === t.nodeType);

                return !1;
              };
            }),
            target: function target(t) {
              var n = e.location && e.location.hash;
              return n && n.slice(1) === t.id;
            },
            root: function root(e) {
              return e === f;
            },
            focus: function focus(e) {
              return e === d.activeElement && (!d.hasFocus || d.hasFocus()) && !!(e.type || e.href || ~e.tabIndex);
            },
            enabled: me(!1),
            disabled: me(!0),
            checked: function checked(e) {
              var t = e.nodeName.toLowerCase();
              return "input" === t && !!e.checked || "option" === t && !!e.selected;
            },
            selected: function selected(e) {
              return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected;
            },
            empty: function empty(e) {
              for (e = e.firstChild; e; e = e.nextSibling) {
                if (e.nodeType < 6) return !1;
              }

              return !0;
            },
            parent: function parent(e) {
              return !r.pseudos.empty(e);
            },
            header: function header(e) {
              return X.test(e.nodeName);
            },
            input: function input(e) {
              return Q.test(e.nodeName);
            },
            button: function button(e) {
              var t = e.nodeName.toLowerCase();
              return "input" === t && "button" === e.type || "button" === t;
            },
            text: function text(e) {
              var t;
              return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase());
            },
            first: ge(function () {
              return [0];
            }),
            last: ge(function (e, t) {
              return [t - 1];
            }),
            eq: ge(function (e, t, n) {
              return [n < 0 ? n + t : n];
            }),
            even: ge(function (e, t) {
              for (var n = 0; n < t; n += 2) {
                e.push(n);
              }

              return e;
            }),
            odd: ge(function (e, t) {
              for (var n = 1; n < t; n += 2) {
                e.push(n);
              }

              return e;
            }),
            lt: ge(function (e, t, n) {
              for (var r = n < 0 ? n + t : n > t ? t : n; --r >= 0;) {
                e.push(r);
              }

              return e;
            }),
            gt: ge(function (e, t, n) {
              for (var r = n < 0 ? n + t : n; ++r < t;) {
                e.push(r);
              }

              return e;
            })
          }
        }).pseudos.nth = r.pseudos.eq, {
          radio: !0,
          checkbox: !0,
          file: !0,
          password: !0,
          image: !0
        }) {
          r.pseudos[t] = de(t);
        }

        for (t in {
          submit: !0,
          reset: !0
        }) {
          r.pseudos[t] = fe(t);
        }

        function ve() {}

        function be(e) {
          for (var t = 0, n = e.length, r = ""; t < n; t++) {
            r += e[t].value;
          }

          return r;
        }

        function we(e, t, n) {
          var r = t.dir,
              o = t.next,
              i = o || r,
              s = n && "parentNode" === i,
              a = x++;
          return t.first ? function (t, n, o) {
            for (; t = t[r];) {
              if (1 === t.nodeType || s) return e(t, n, o);
            }

            return !1;
          } : function (t, n, l) {
            var c,
                u,
                p,
                h = [_, a];

            if (l) {
              for (; t = t[r];) {
                if ((1 === t.nodeType || s) && e(t, n, l)) return !0;
              }
            } else for (; t = t[r];) {
              if (1 === t.nodeType || s) if (u = (p = t[w] || (t[w] = {}))[t.uniqueID] || (p[t.uniqueID] = {}), o && o === t.nodeName.toLowerCase()) t = t[r] || t;else {
                if ((c = u[i]) && c[0] === _ && c[1] === a) return h[2] = c[2];
                if (u[i] = h, h[2] = e(t, n, l)) return !0;
              }
            }

            return !1;
          };
        }

        function Ee(e) {
          return e.length > 1 ? function (t, n, r) {
            for (var o = e.length; o--;) {
              if (!e[o](t, n, r)) return !1;
            }

            return !0;
          } : e[0];
        }

        function _e(e, t, n, r, o) {
          for (var i, s = [], a = 0, l = e.length, c = null != t; a < l; a++) {
            (i = e[a]) && (n && !n(i, r, o) || (s.push(i), c && t.push(a)));
          }

          return s;
        }

        function xe(e, t, n, r, o, i) {
          return r && !r[w] && (r = xe(r)), o && !o[w] && (o = xe(o, i)), ce(function (i, s, a, l) {
            var c,
                u,
                p,
                h = [],
                d = [],
                f = s.length,
                m = i || function (e, t, n) {
              for (var r = 0, o = t.length; r < o; r++) {
                ae(e, t[r], n);
              }

              return n;
            }(t || "*", a.nodeType ? [a] : a, []),
                g = !e || !i && t ? m : _e(m, h, e, a, l),
                y = n ? o || (i ? e : f || r) ? [] : s : g;

            if (n && n(g, y, a, l), r) for (c = _e(y, d), r(c, [], a, l), u = c.length; u--;) {
              (p = c[u]) && (y[d[u]] = !(g[d[u]] = p));
            }

            if (i) {
              if (o || e) {
                if (o) {
                  for (c = [], u = y.length; u--;) {
                    (p = y[u]) && c.push(g[u] = p);
                  }

                  o(null, y = [], c, l);
                }

                for (u = y.length; u--;) {
                  (p = y[u]) && (c = o ? I(i, p) : h[u]) > -1 && (i[c] = !(s[c] = p));
                }
              }
            } else y = _e(y === s ? y.splice(f, y.length) : y), o ? o(null, s, y, l) : P.apply(s, y);
          });
        }

        function Se(e) {
          for (var t, n, o, i = e.length, s = r.relative[e[0].type], a = s || r.relative[" "], l = s ? 1 : 0, u = we(function (e) {
            return e === t;
          }, a, !0), p = we(function (e) {
            return I(t, e) > -1;
          }, a, !0), h = [function (e, n, r) {
            var o = !s && (r || n !== c) || ((t = n).nodeType ? u(e, n, r) : p(e, n, r));
            return t = null, o;
          }]; l < i; l++) {
            if (n = r.relative[e[l].type]) h = [we(Ee(h), n)];else {
              if ((n = r.filter[e[l].type].apply(null, e[l].matches))[w]) {
                for (o = ++l; o < i && !r.relative[e[o].type]; o++) {
                  ;
                }

                return xe(l > 1 && Ee(h), l > 1 && be(e.slice(0, l - 1).concat({
                  value: " " === e[l - 2].type ? "*" : ""
                })).replace(H, "$1"), n, l < o && Se(e.slice(l, o)), o < i && Se(e = e.slice(o)), o < i && be(e));
              }

              h.push(n);
            }
          }

          return Ee(h);
        }

        return ve.prototype = r.filters = r.pseudos, r.setFilters = new ve(), s = ae.tokenize = function (e, t) {
          var n,
              o,
              i,
              s,
              a,
              l,
              c,
              u = T[e + " "];
          if (u) return t ? 0 : u.slice(0);

          for (a = e, l = [], c = r.preFilter; a;) {
            for (s in n && !(o = U.exec(a)) || (o && (a = a.slice(o[0].length) || a), l.push(i = [])), n = !1, (o = W.exec(a)) && (n = o.shift(), i.push({
              value: n,
              type: o[0].replace(H, " ")
            }), a = a.slice(n.length)), r.filter) {
              !(o = G[s].exec(a)) || c[s] && !(o = c[s](o)) || (n = o.shift(), i.push({
                value: n,
                type: s,
                matches: o
              }), a = a.slice(n.length));
            }

            if (!n) break;
          }

          return t ? a.length : a ? ae.error(e) : T(e, l).slice(0);
        }, a = ae.compile = function (e, t) {
          var n,
              o = [],
              i = [],
              a = C[e + " "];

          if (!a) {
            for (t || (t = s(e)), n = t.length; n--;) {
              (a = Se(t[n]))[w] ? o.push(a) : i.push(a);
            }

            (a = C(e, function (e, t) {
              var n = t.length > 0,
                  o = e.length > 0,
                  i = function i(_i, s, a, l, u) {
                var p,
                    f,
                    g,
                    y = 0,
                    v = "0",
                    b = _i && [],
                    w = [],
                    E = c,
                    x = _i || o && r.find.TAG("*", u),
                    S = _ += null == E ? 1 : Math.random() || .1,
                    T = x.length;

                for (u && (c = s == d || s || u); v !== T && null != (p = x[v]); v++) {
                  if (o && p) {
                    for (f = 0, s || p.ownerDocument == d || (h(p), a = !m); g = e[f++];) {
                      if (g(p, s || d, a)) {
                        l.push(p);
                        break;
                      }
                    }

                    u && (_ = S);
                  }

                  n && ((p = !g && p) && y--, _i && b.push(p));
                }

                if (y += v, n && v !== y) {
                  for (f = 0; g = t[f++];) {
                    g(b, w, s, a);
                  }

                  if (_i) {
                    if (y > 0) for (; v--;) {
                      b[v] || w[v] || (w[v] = L.call(l));
                    }
                    w = _e(w);
                  }

                  P.apply(l, w), u && !_i && w.length > 0 && y + t.length > 1 && ae.uniqueSort(l);
                }

                return u && (_ = S, c = E), b;
              };

              return n ? ce(i) : i;
            }(i, o))).selector = e;
          }

          return a;
        }, l = ae.select = function (e, t, n, o) {
          var i,
              l,
              c,
              u,
              p,
              h = "function" === typeof e && e,
              d = !o && s(e = h.selector || e);

          if (n = n || [], 1 === d.length) {
            if ((l = d[0] = d[0].slice(0)).length > 2 && "ID" === (c = l[0]).type && 9 === t.nodeType && m && r.relative[l[1].type]) {
              if (!(t = (r.find.ID(c.matches[0].replace(te, ne), t) || [])[0])) return n;
              h && (t = t.parentNode), e = e.slice(l.shift().value.length);
            }

            for (i = G.needsContext.test(e) ? 0 : l.length; i-- && (c = l[i], !r.relative[u = c.type]);) {
              if ((p = r.find[u]) && (o = p(c.matches[0].replace(te, ne), ee.test(l[0].type) && ye(t.parentNode) || t))) {
                if (l.splice(i, 1), !(e = o.length && be(l))) return P.apply(n, o), n;
                break;
              }
            }
          }

          return (h || a(e, d))(o, t, !m, n, !t || ee.test(e) && ye(t.parentNode) || t), n;
        }, n.sortStable = w.split("").sort(k).join("") === w, n.detectDuplicates = !!p, h(), n.sortDetached = ue(function (e) {
          return 1 & e.compareDocumentPosition(d.createElement("fieldset"));
        }), ue(function (e) {
          return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href");
        }) || pe("type|href|height|width", function (e, t, n) {
          if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2);
        }), n.attributes && ue(function (e) {
          return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value");
        }) || pe("value", function (e, t, n) {
          if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue;
        }), ue(function (e) {
          return null == e.getAttribute("disabled");
        }) || pe(R, function (e, t, n) {
          var r;
          if (!n) return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null;
        }), ae;
      }(o);

      T.find = A, (T.expr = A.selectors)[":"] = T.expr.pseudos, T.uniqueSort = T.unique = A.uniqueSort, T.text = A.getText, T.isXMLDoc = A.isXML, T.contains = A.contains, T.escapeSelector = A.escape;

      var k = function k(e, t, n) {
        for (var r = [], o = void 0 !== n; (e = e[t]) && 9 !== e.nodeType;) {
          if (1 === e.nodeType) {
            if (o && T(e).is(n)) break;
            r.push(e);
          }
        }

        return r;
      },
          O = function O(e, t) {
        for (var n = []; e; e = e.nextSibling) {
          1 === e.nodeType && e !== t && n.push(e);
        }

        return n;
      },
          D = T.expr.match.needsContext;

      function L(e, t) {
        return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase();
      }

      var N = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

      function P(e, t, n) {
        return v(t) ? T.grep(e, function (e, r) {
          return !!t.call(e, r, e) !== n;
        }) : t.nodeType ? T.grep(e, function (e) {
          return e === t !== n;
        }) : "string" !== typeof t ? T.grep(e, function (e) {
          return p.call(t, e) > -1 !== n;
        }) : T.filter(t, e, n);
      }

      T.filter = function (e, t, n) {
        var r = t[0];
        return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? T.find.matchesSelector(r, e) ? [r] : [] : T.find.matches(e, T.grep(t, function (e) {
          return 1 === e.nodeType;
        }));
      }, T.fn.extend({
        find: function find(e) {
          var t,
              n,
              r = this.length,
              o = this;
          if ("string" !== typeof e) return this.pushStack(T(e).filter(function () {
            for (t = 0; t < r; t++) {
              if (T.contains(o[t], this)) return !0;
            }
          }));

          for (n = this.pushStack([]), t = 0; t < r; t++) {
            T.find(e, o[t], n);
          }

          return r > 1 ? T.uniqueSort(n) : n;
        },
        filter: function filter(e) {
          return this.pushStack(P(this, e || [], !1));
        },
        not: function not(e) {
          return this.pushStack(P(this, e || [], !0));
        },
        is: function is(e) {
          return !!P(this, "string" === typeof e && D.test(e) ? T(e) : e || [], !1).length;
        }
      });
      var j,
          I = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
      (T.fn.init = function (e, t, n) {
        var r, o;
        if (!e) return this;

        if (n = n || j, "string" === typeof e) {
          if (!(r = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : I.exec(e)) || !r[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);

          if (r[1]) {
            if (t = t instanceof T ? t[0] : t, T.merge(this, T.parseHTML(r[1], t && t.nodeType ? t.ownerDocument || t : w, !0)), N.test(r[1]) && T.isPlainObject(t)) for (r in t) {
              v(this[r]) ? this[r](t[r]) : this.attr(r, t[r]);
            }
            return this;
          }

          return (o = w.getElementById(r[2])) && (this[0] = o, this.length = 1), this;
        }

        return e.nodeType ? (this[0] = e, this.length = 1, this) : v(e) ? void 0 !== n.ready ? n.ready(e) : e(T) : T.makeArray(e, this);
      }).prototype = T.fn, j = T(w);
      var R = /^(?:parents|prev(?:Until|All))/,
          $ = {
        children: !0,
        contents: !0,
        next: !0,
        prev: !0
      };

      function q(e, t) {
        for (; (e = e[t]) && 1 !== e.nodeType;) {
          ;
        }

        return e;
      }

      T.fn.extend({
        has: function has(e) {
          var t = T(e, this),
              n = t.length;
          return this.filter(function () {
            for (var e = 0; e < n; e++) {
              if (T.contains(this, t[e])) return !0;
            }
          });
        },
        closest: function closest(e, t) {
          var n,
              r = 0,
              o = this.length,
              i = [],
              s = "string" !== typeof e && T(e);
          if (!D.test(e)) for (; r < o; r++) {
            for (n = this[r]; n && n !== t; n = n.parentNode) {
              if (n.nodeType < 11 && (s ? s.index(n) > -1 : 1 === n.nodeType && T.find.matchesSelector(n, e))) {
                i.push(n);
                break;
              }
            }
          }
          return this.pushStack(i.length > 1 ? T.uniqueSort(i) : i);
        },
        index: function index(e) {
          return e ? "string" === typeof e ? p.call(T(e), this[0]) : p.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1;
        },
        add: function add(e, t) {
          return this.pushStack(T.uniqueSort(T.merge(this.get(), T(e, t))));
        },
        addBack: function addBack(e) {
          return this.add(null == e ? this.prevObject : this.prevObject.filter(e));
        }
      }), T.each({
        parent: function parent(e) {
          var t = e.parentNode;
          return t && 11 !== t.nodeType ? t : null;
        },
        parents: function parents(e) {
          return k(e, "parentNode");
        },
        parentsUntil: function parentsUntil(e, t, n) {
          return k(e, "parentNode", n);
        },
        next: function next(e) {
          return q(e, "nextSibling");
        },
        prev: function prev(e) {
          return q(e, "previousSibling");
        },
        nextAll: function nextAll(e) {
          return k(e, "nextSibling");
        },
        prevAll: function prevAll(e) {
          return k(e, "previousSibling");
        },
        nextUntil: function nextUntil(e, t, n) {
          return k(e, "nextSibling", n);
        },
        prevUntil: function prevUntil(e, t, n) {
          return k(e, "previousSibling", n);
        },
        siblings: function siblings(e) {
          return O((e.parentNode || {}).firstChild, e);
        },
        children: function children(e) {
          return O(e.firstChild);
        },
        contents: function contents(e) {
          return null != e.contentDocument && a(e.contentDocument) ? e.contentDocument : (L(e, "template") && (e = e.content || e), T.merge([], e.childNodes));
        }
      }, function (e, t) {
        T.fn[e] = function (n, r) {
          var o = T.map(this, t, n);
          return "Until" !== e.slice(-5) && (r = n), r && "string" === typeof r && (o = T.filter(r, o)), this.length > 1 && ($[e] || T.uniqueSort(o), R.test(e) && o.reverse()), this.pushStack(o);
        };
      });
      var M = /[^\x20\t\r\n\f]+/g;

      function B(e) {
        return e;
      }

      function F(e) {
        throw e;
      }

      function H(e, t, n, r) {
        var o;

        try {
          e && v(o = e.promise) ? o.call(e).done(t).fail(n) : e && v(o = e.then) ? o.call(e, t, n) : t.apply(void 0, [e].slice(r));
        } catch (e) {
          n.apply(void 0, [e]);
        }
      }

      T.Callbacks = function (e) {
        e = "string" === typeof e ? function (e) {
          var t = {};
          return T.each(e.match(M) || [], function (e, n) {
            t[n] = !0;
          }), t;
        }(e) : T.extend({}, e);

        var t,
            n,
            r,
            o,
            i = [],
            s = [],
            a = -1,
            l = function l() {
          for (o = o || e.once, r = t = !0; s.length; a = -1) {
            for (n = s.shift(); ++a < i.length;) {
              !1 === i[a].apply(n[0], n[1]) && e.stopOnFalse && (a = i.length, n = !1);
            }
          }

          e.memory || (n = !1), t = !1, o && (i = n ? [] : "");
        },
            c = {
          add: function add() {
            return i && (n && !t && (a = i.length - 1, s.push(n)), function t(n) {
              T.each(n, function (n, r) {
                v(r) ? e.unique && c.has(r) || i.push(r) : r && r.length && "string" !== x(r) && t(r);
              });
            }(arguments), n && !t && l()), this;
          },
          remove: function remove() {
            return T.each(arguments, function (e, t) {
              for (var n; (n = T.inArray(t, i, n)) > -1;) {
                i.splice(n, 1), n <= a && a--;
              }
            }), this;
          },
          has: function has(e) {
            return e ? T.inArray(e, i) > -1 : i.length > 0;
          },
          empty: function empty() {
            return i && (i = []), this;
          },
          disable: function disable() {
            return o = s = [], i = n = "", this;
          },
          disabled: function disabled() {
            return !i;
          },
          lock: function lock() {
            return o = s = [], n || t || (i = n = ""), this;
          },
          locked: function locked() {
            return !!o;
          },
          fireWith: function fireWith(e, n) {
            return o || (n = [e, (n = n || []).slice ? n.slice() : n], s.push(n), t || l()), this;
          },
          fire: function fire() {
            return c.fireWith(this, arguments), this;
          },
          fired: function fired() {
            return !!r;
          }
        };

        return c;
      }, T.extend({
        Deferred: function Deferred(e) {
          var t = [["notify", "progress", T.Callbacks("memory"), T.Callbacks("memory"), 2], ["resolve", "done", T.Callbacks("once memory"), T.Callbacks("once memory"), 0, "resolved"], ["reject", "fail", T.Callbacks("once memory"), T.Callbacks("once memory"), 1, "rejected"]],
              n = "pending",
              i = {
            state: function state() {
              return n;
            },
            always: function always() {
              return s.done(arguments).fail(arguments), this;
            },
            "catch": function _catch(e) {
              return i.then(null, e);
            },
            pipe: function pipe() {
              var e = arguments;
              return T.Deferred(function (n) {
                T.each(t, function (t, r) {
                  var o = v(e[r[4]]) && e[r[4]];
                  s[r[1]](function () {
                    var e = o && o.apply(this, arguments);
                    e && v(e.promise) ? e.promise().progress(n.notify).done(n.resolve).fail(n.reject) : n[r[0] + "With"](this, o ? [e] : arguments);
                  });
                }), e = null;
              }).promise();
            },
            then: function then(e, n, i) {
              var s = 0;

              function a(e, t, n, i) {
                return function () {
                  var l = this,
                      c = arguments,
                      u = function u() {
                    var o, u;

                    if (!(e < s)) {
                      if ((o = n.apply(l, c)) === t.promise()) throw new TypeError("Thenable self-resolution");
                      u = o && ("object" === r(o) || "function" === typeof o) && o.then, v(u) ? i ? u.call(o, a(s, t, B, i), a(s, t, F, i)) : (s++, u.call(o, a(s, t, B, i), a(s, t, F, i), a(s, t, B, t.notifyWith))) : (n !== B && (l = void 0, c = [o]), (i || t.resolveWith)(l, c));
                    }
                  },
                      p = i ? u : function () {
                    try {
                      u();
                    } catch (r) {
                      T.Deferred.exceptionHook && T.Deferred.exceptionHook(r, p.stackTrace), e + 1 >= s && (n !== F && (l = void 0, c = [r]), t.rejectWith(l, c));
                    }
                  };

                  e ? p() : (T.Deferred.getStackHook && (p.stackTrace = T.Deferred.getStackHook()), o.setTimeout(p));
                };
              }

              return T.Deferred(function (r) {
                t[0][3].add(a(0, r, v(i) ? i : B, r.notifyWith)), t[1][3].add(a(0, r, v(e) ? e : B)), t[2][3].add(a(0, r, v(n) ? n : F));
              }).promise();
            },
            promise: function promise(e) {
              return null != e ? T.extend(e, i) : i;
            }
          },
              s = {};
          return T.each(t, function (e, r) {
            var o = r[2],
                a = r[5];
            i[r[1]] = o.add, a && o.add(function () {
              n = a;
            }, t[3 - e][2].disable, t[3 - e][3].disable, t[0][2].lock, t[0][3].lock), o.add(r[3].fire), s[r[0]] = function () {
              return s[r[0] + "With"](this === s ? void 0 : this, arguments), this;
            }, s[r[0] + "With"] = o.fireWith;
          }), i.promise(s), e && e.call(s, s), s;
        },
        when: function when(e) {
          var t = arguments.length,
              n = t,
              r = Array(n),
              o = l.call(arguments),
              i = T.Deferred(),
              s = function s(e) {
            return function (n) {
              r[e] = this, o[e] = arguments.length > 1 ? l.call(arguments) : n, --t || i.resolveWith(r, o);
            };
          };

          if (t <= 1 && (H(e, i.done(s(n)).resolve, i.reject, !t), "pending" === i.state() || v(o[n] && o[n].then))) return i.then();

          for (; n--;) {
            H(o[n], s(n), i.reject);
          }

          return i.promise();
        }
      });
      var U = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
      T.Deferred.exceptionHook = function (e, t) {
        o.console && o.console.warn && e && U.test(e.name) && o.console.warn("jQuery.Deferred exception: " + e.message, e.stack, t);
      }, T.readyException = function (e) {
        o.setTimeout(function () {
          throw e;
        });
      };
      var W = T.Deferred();

      function z() {
        w.removeEventListener("DOMContentLoaded", z), o.removeEventListener("load", z), T.ready();
      }

      T.fn.ready = function (e) {
        return W.then(e)["catch"](function (e) {
          T.readyException(e);
        }), this;
      }, T.extend({
        isReady: !1,
        readyWait: 1,
        ready: function ready(e) {
          (!0 === e ? --T.readyWait : T.isReady) || (T.isReady = !0, !0 !== e && --T.readyWait > 0 || W.resolveWith(w, [T]));
        }
      }), T.ready.then = W.then, "complete" === w.readyState || "loading" !== w.readyState && !w.documentElement.doScroll ? o.setTimeout(T.ready) : (w.addEventListener("DOMContentLoaded", z), o.addEventListener("load", z));

      var V = function e(t, n, r, o, i, s, a) {
        var l = 0,
            c = t.length,
            u = null == r;
        if ("object" === x(r)) for (l in i = !0, r) {
          e(t, n, l, r[l], !0, s, a);
        } else if (void 0 !== o && (i = !0, v(o) || (a = !0), u && (a ? (n.call(t, o), n = null) : (u = n, n = function n(e, t, _n) {
          return u.call(T(e), _n);
        })), n)) for (; l < c; l++) {
          n(t[l], r, a ? o : o.call(t[l], l, n(t[l], r)));
        }
        return i ? t : u ? n.call(t) : c ? n(t[0], r) : s;
      },
          K = /^-ms-/,
          G = /-([a-z])/g;

      function Y(e, t) {
        return t.toUpperCase();
      }

      function Q(e) {
        return e.replace(K, "ms-").replace(G, Y);
      }

      var X = function X(e) {
        return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType;
      };

      function J() {
        this.expando = T.expando + J.uid++;
      }

      J.uid = 1, J.prototype = {
        cache: function cache(e) {
          var t = e[this.expando];
          return t || (t = {}, X(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
            value: t,
            configurable: !0
          }))), t;
        },
        set: function set(e, t, n) {
          var r,
              o = this.cache(e);
          if ("string" === typeof t) o[Q(t)] = n;else for (r in t) {
            o[Q(r)] = t[r];
          }
          return o;
        },
        get: function get(e, t) {
          return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][Q(t)];
        },
        access: function access(e, t, n) {
          return void 0 === t || t && "string" === typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t);
        },
        remove: function remove(e, t) {
          var n,
              r = e[this.expando];

          if (void 0 !== r) {
            if (void 0 !== t) {
              n = (t = Array.isArray(t) ? t.map(Q) : (t = Q(t)) in r ? [t] : t.match(M) || []).length;

              for (; n--;) {
                delete r[t[n]];
              }
            }

            (void 0 === t || T.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando]);
          }
        },
        hasData: function hasData(e) {
          var t = e[this.expando];
          return void 0 !== t && !T.isEmptyObject(t);
        }
      };
      var Z = new J(),
          ee = new J(),
          te = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
          ne = /[A-Z]/g;

      function re(e, t, n) {
        var r;
        if (void 0 === n && 1 === e.nodeType) if (r = "data-" + t.replace(ne, "-$&").toLowerCase(), "string" === typeof (n = e.getAttribute(r))) {
          try {
            n = function (e) {
              return "true" === e || "false" !== e && ("null" === e ? null : e === +e + "" ? +e : te.test(e) ? JSON.parse(e) : e);
            }(n);
          } catch (o) {}

          ee.set(e, t, n);
        } else n = void 0;
        return n;
      }

      T.extend({
        hasData: function hasData(e) {
          return ee.hasData(e) || Z.hasData(e);
        },
        data: function data(e, t, n) {
          return ee.access(e, t, n);
        },
        removeData: function removeData(e, t) {
          ee.remove(e, t);
        },
        _data: function _data(e, t, n) {
          return Z.access(e, t, n);
        },
        _removeData: function _removeData(e, t) {
          Z.remove(e, t);
        }
      }), T.fn.extend({
        data: function data(e, t) {
          var n,
              o,
              i,
              s = this[0],
              a = s && s.attributes;

          if (void 0 === e) {
            if (this.length && (i = ee.get(s), 1 === s.nodeType && !Z.get(s, "hasDataAttrs"))) {
              for (n = a.length; n--;) {
                a[n] && 0 === (o = a[n].name).indexOf("data-") && (o = Q(o.slice(5)), re(s, o, i[o]));
              }

              Z.set(s, "hasDataAttrs", !0);
            }

            return i;
          }

          return "object" === r(e) ? this.each(function () {
            ee.set(this, e);
          }) : V(this, function (t) {
            var n;
            if (s && void 0 === t) return void 0 !== (n = ee.get(s, e)) || void 0 !== (n = re(s, e)) ? n : void 0;
            this.each(function () {
              ee.set(this, e, t);
            });
          }, null, t, arguments.length > 1, null, !0);
        },
        removeData: function removeData(e) {
          return this.each(function () {
            ee.remove(this, e);
          });
        }
      }), T.extend({
        queue: function queue(e, t, n) {
          var r;
          if (e) return t = (t || "fx") + "queue", r = Z.get(e, t), n && (!r || Array.isArray(n) ? r = Z.access(e, t, T.makeArray(n)) : r.push(n)), r || [];
        },
        dequeue: function dequeue(e, t) {
          var n = T.queue(e, t = t || "fx"),
              r = n.length,
              o = n.shift(),
              i = T._queueHooks(e, t);

          "inprogress" === o && (o = n.shift(), r--), o && ("fx" === t && n.unshift("inprogress"), delete i.stop, o.call(e, function () {
            T.dequeue(e, t);
          }, i)), !r && i && i.empty.fire();
        },
        _queueHooks: function _queueHooks(e, t) {
          var n = t + "queueHooks";
          return Z.get(e, n) || Z.access(e, n, {
            empty: T.Callbacks("once memory").add(function () {
              Z.remove(e, [t + "queue", n]);
            })
          });
        }
      }), T.fn.extend({
        queue: function queue(e, t) {
          var n = 2;
          return "string" !== typeof e && (t = e, e = "fx", n--), arguments.length < n ? T.queue(this[0], e) : void 0 === t ? this : this.each(function () {
            var n = T.queue(this, e, t);
            T._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && T.dequeue(this, e);
          });
        },
        dequeue: function dequeue(e) {
          return this.each(function () {
            T.dequeue(this, e);
          });
        },
        clearQueue: function clearQueue(e) {
          return this.queue(e || "fx", []);
        },
        promise: function promise(e, t) {
          var n,
              r = 1,
              o = T.Deferred(),
              i = this,
              s = this.length,
              a = function a() {
            --r || o.resolveWith(i, [i]);
          };

          for ("string" !== typeof e && (t = e, e = void 0), e = e || "fx"; s--;) {
            (n = Z.get(i[s], e + "queueHooks")) && n.empty && (r++, n.empty.add(a));
          }

          return a(), o.promise(t);
        }
      });

      var oe = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
          ie = new RegExp("^(?:([+-])=|)(" + oe + ")([a-z%]*)$", "i"),
          se = ["Top", "Right", "Bottom", "Left"],
          ae = w.documentElement,
          le = function le(e) {
        return T.contains(e.ownerDocument, e);
      },
          ce = {
        composed: !0
      };

      ae.getRootNode && (le = function le(e) {
        return T.contains(e.ownerDocument, e) || e.getRootNode(ce) === e.ownerDocument;
      });

      var ue = function ue(e, t) {
        return "none" === (e = t || e).style.display || "" === e.style.display && le(e) && "none" === T.css(e, "display");
      };

      var pe = {};

      function he(e) {
        var t,
            n = e.ownerDocument,
            r = e.nodeName,
            o = pe[r];
        return o || (t = n.body.appendChild(n.createElement(r)), o = T.css(t, "display"), t.parentNode.removeChild(t), "none" === o && (o = "block"), pe[r] = o, o);
      }

      function de(e, t) {
        for (var n, r, o = [], i = 0, s = e.length; i < s; i++) {
          (r = e[i]).style && (n = r.style.display, t ? ("none" === n && (o[i] = Z.get(r, "display") || null, o[i] || (r.style.display = "")), "" === r.style.display && ue(r) && (o[i] = he(r))) : "none" !== n && (o[i] = "none", Z.set(r, "display", n)));
        }

        for (i = 0; i < s; i++) {
          null != o[i] && (e[i].style.display = o[i]);
        }

        return e;
      }

      T.fn.extend({
        show: function show() {
          return de(this, !0);
        },
        hide: function hide() {
          return de(this);
        },
        toggle: function toggle(e) {
          return "boolean" === typeof e ? e ? this.show() : this.hide() : this.each(function () {
            ue(this) ? T(this).show() : T(this).hide();
          });
        }
      });
      var fe,
          me,
          ge = /^(?:checkbox|radio)$/i,
          ye = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i,
          ve = /^$|^module$|\/(?:java|ecma)script/i;
      fe = w.createDocumentFragment().appendChild(w.createElement("div")), (me = w.createElement("input")).setAttribute("type", "radio"), me.setAttribute("checked", "checked"), me.setAttribute("name", "t"), fe.appendChild(me), y.checkClone = fe.cloneNode(!0).cloneNode(!0).lastChild.checked, fe.innerHTML = "<textarea>x</textarea>", y.noCloneChecked = !!fe.cloneNode(!0).lastChild.defaultValue, fe.innerHTML = "<option></option>", y.option = !!fe.lastChild;
      var be = {
        thead: [1, "<table>", "</table>"],
        col: [2, "<table><colgroup>", "</colgroup></table>"],
        tr: [2, "<table><tbody>", "</tbody></table>"],
        td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
        _default: [0, "", ""]
      };

      function we(e, t) {
        var n;
        return n = "undefined" !== typeof e.getElementsByTagName ? e.getElementsByTagName(t || "*") : "undefined" !== typeof e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && L(e, t) ? T.merge([e], n) : n;
      }

      function Ee(e, t) {
        for (var n = 0, r = e.length; n < r; n++) {
          Z.set(e[n], "globalEval", !t || Z.get(t[n], "globalEval"));
        }
      }

      be.tbody = be.tfoot = be.colgroup = be.caption = be.thead, be.th = be.td, y.option || (be.optgroup = be.option = [1, "<select multiple='multiple'>", "</select>"]);
      var _e = /<|&#?\w+;/;

      function xe(e, t, n, r, o) {
        for (var i, s, a, l, c, u, p = t.createDocumentFragment(), h = [], d = 0, f = e.length; d < f; d++) {
          if ((i = e[d]) || 0 === i) if ("object" === x(i)) T.merge(h, i.nodeType ? [i] : i);else if (_e.test(i)) {
            for (s = s || p.appendChild(t.createElement("div")), a = (ye.exec(i) || ["", ""])[1].toLowerCase(), l = be[a] || be._default, s.innerHTML = l[1] + T.htmlPrefilter(i) + l[2], u = l[0]; u--;) {
              s = s.lastChild;
            }

            T.merge(h, s.childNodes), (s = p.firstChild).textContent = "";
          } else h.push(t.createTextNode(i));
        }

        for (p.textContent = "", d = 0; i = h[d++];) {
          if (r && T.inArray(i, r) > -1) o && o.push(i);else if (c = le(i), s = we(p.appendChild(i), "script"), c && Ee(s), n) for (u = 0; i = s[u++];) {
            ve.test(i.type || "") && n.push(i);
          }
        }

        return p;
      }

      var Se = /^key/,
          Te = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
          Ce = /^([^.]*)(?:\.(.+)|)/;

      function Ae() {
        return !0;
      }

      function ke() {
        return !1;
      }

      function Oe(e, t) {
        return e === function () {
          try {
            return w.activeElement;
          } catch (e) {}
        }() === ("focus" === t);
      }

      function De(e, t, n, o, i, s) {
        var a, l;

        if ("object" === r(t)) {
          for (l in "string" !== typeof n && (o = o || n, n = void 0), t) {
            De(e, l, n, o, t[l], s);
          }

          return e;
        }

        if (null == o && null == i ? (i = n, o = n = void 0) : null == i && ("string" === typeof n ? (i = o, o = void 0) : (i = o, o = n, n = void 0)), !1 === i) i = ke;else if (!i) return e;
        return 1 === s && (a = i, (i = function i(e) {
          return T().off(e), a.apply(this, arguments);
        }).guid = a.guid || (a.guid = T.guid++)), e.each(function () {
          T.event.add(this, t, i, o, n);
        });
      }

      function Le(e, t, n) {
        n ? (Z.set(e, t, !1), T.event.add(e, t, {
          namespace: !1,
          handler: function handler(e) {
            var r,
                o,
                i = Z.get(this, t);

            if (1 & e.isTrigger && this[t]) {
              if (i.length) (T.event.special[t] || {}).delegateType && e.stopPropagation();else if (i = l.call(arguments), Z.set(this, t, i), r = n(this, t), this[t](), i !== (o = Z.get(this, t)) || r ? Z.set(this, t, !1) : o = {}, i !== o) return e.stopImmediatePropagation(), e.preventDefault(), o.value;
            } else i.length && (Z.set(this, t, {
              value: T.event.trigger(T.extend(i[0], T.Event.prototype), i.slice(1), this)
            }), e.stopImmediatePropagation());
          }
        })) : void 0 === Z.get(e, t) && T.event.add(e, t, Ae);
      }

      T.event = {
        global: {},
        add: function add(e, t, n, r, o) {
          var i,
              s,
              a,
              l,
              c,
              u,
              p,
              h,
              d,
              f,
              m,
              g = Z.get(e);
          if (X(e)) for (n.handler && (n = (i = n).handler, o = i.selector), o && T.find.matchesSelector(ae, o), n.guid || (n.guid = T.guid++), (l = g.events) || (l = g.events = Object.create(null)), (s = g.handle) || (s = g.handle = function (t) {
            return T.event.triggered !== t.type ? T.event.dispatch.apply(e, arguments) : void 0;
          }), c = (t = (t || "").match(M) || [""]).length; c--;) {
            d = m = (a = Ce.exec(t[c]) || [])[1], f = (a[2] || "").split(".").sort(), d && (p = T.event.special[d] || {}, d = (o ? p.delegateType : p.bindType) || d, p = T.event.special[d] || {}, u = T.extend({
              type: d,
              origType: m,
              data: r,
              handler: n,
              guid: n.guid,
              selector: o,
              needsContext: o && T.expr.match.needsContext.test(o),
              namespace: f.join(".")
            }, i), (h = l[d]) || ((h = l[d] = []).delegateCount = 0, p.setup && !1 !== p.setup.call(e, r, f, s) || e.addEventListener && e.addEventListener(d, s)), p.add && (p.add.call(e, u), u.handler.guid || (u.handler.guid = n.guid)), o ? h.splice(h.delegateCount++, 0, u) : h.push(u), T.event.global[d] = !0);
          }
        },
        remove: function remove(e, t, n, r, o) {
          var i,
              s,
              a,
              l,
              c,
              u,
              p,
              h,
              d,
              f,
              m,
              g = Z.hasData(e) && Z.get(e);

          if (g && (l = g.events)) {
            for (c = (t = (t || "").match(M) || [""]).length; c--;) {
              if (d = m = (a = Ce.exec(t[c]) || [])[1], f = (a[2] || "").split(".").sort(), d) {
                for (p = T.event.special[d] || {}, h = l[d = (r ? p.delegateType : p.bindType) || d] || [], a = a[2] && new RegExp("(^|\\.)" + f.join("\\.(?:.*\\.|)") + "(\\.|$)"), s = i = h.length; i--;) {
                  u = h[i], !o && m !== u.origType || n && n.guid !== u.guid || a && !a.test(u.namespace) || r && r !== u.selector && ("**" !== r || !u.selector) || (h.splice(i, 1), u.selector && h.delegateCount--, p.remove && p.remove.call(e, u));
                }

                s && !h.length && (p.teardown && !1 !== p.teardown.call(e, f, g.handle) || T.removeEvent(e, d, g.handle), delete l[d]);
              } else for (d in l) {
                T.event.remove(e, d + t[c], n, r, !0);
              }
            }

            T.isEmptyObject(l) && Z.remove(e, "handle events");
          }
        },
        dispatch: function dispatch(e) {
          var t,
              n,
              r,
              o,
              i,
              s,
              a = new Array(arguments.length),
              l = T.event.fix(e),
              c = (Z.get(this, "events") || Object.create(null))[l.type] || [],
              u = T.event.special[l.type] || {};

          for (a[0] = l, t = 1; t < arguments.length; t++) {
            a[t] = arguments[t];
          }

          if (l.delegateTarget = this, !u.preDispatch || !1 !== u.preDispatch.call(this, l)) {
            for (s = T.event.handlers.call(this, l, c), t = 0; (o = s[t++]) && !l.isPropagationStopped();) {
              for (l.currentTarget = o.elem, n = 0; (i = o.handlers[n++]) && !l.isImmediatePropagationStopped();) {
                l.rnamespace && !1 !== i.namespace && !l.rnamespace.test(i.namespace) || (l.handleObj = i, l.data = i.data, void 0 !== (r = ((T.event.special[i.origType] || {}).handle || i.handler).apply(o.elem, a)) && !1 === (l.result = r) && (l.preventDefault(), l.stopPropagation()));
              }
            }

            return u.postDispatch && u.postDispatch.call(this, l), l.result;
          }
        },
        handlers: function handlers(e, t) {
          var n,
              r,
              o,
              i,
              s,
              a = [],
              l = t.delegateCount,
              c = e.target;
          if (l && c.nodeType && !("click" === e.type && e.button >= 1)) for (; c !== this; c = c.parentNode || this) {
            if (1 === c.nodeType && ("click" !== e.type || !0 !== c.disabled)) {
              for (i = [], s = {}, n = 0; n < l; n++) {
                void 0 === s[o = (r = t[n]).selector + " "] && (s[o] = r.needsContext ? T(o, this).index(c) > -1 : T.find(o, this, null, [c]).length), s[o] && i.push(r);
              }

              i.length && a.push({
                elem: c,
                handlers: i
              });
            }
          }
          return c = this, l < t.length && a.push({
            elem: c,
            handlers: t.slice(l)
          }), a;
        },
        addProp: function addProp(e, t) {
          Object.defineProperty(T.Event.prototype, e, {
            enumerable: !0,
            configurable: !0,
            get: v(t) ? function () {
              if (this.originalEvent) return t(this.originalEvent);
            } : function () {
              if (this.originalEvent) return this.originalEvent[e];
            },
            set: function set(t) {
              Object.defineProperty(this, e, {
                enumerable: !0,
                configurable: !0,
                writable: !0,
                value: t
              });
            }
          });
        },
        fix: function fix(e) {
          return e[T.expando] ? e : new T.Event(e);
        },
        special: {
          load: {
            noBubble: !0
          },
          click: {
            setup: function setup(e) {
              var t = this || e;
              return ge.test(t.type) && t.click && L(t, "input") && Le(t, "click", Ae), !1;
            },
            trigger: function trigger(e) {
              var t = this || e;
              return ge.test(t.type) && t.click && L(t, "input") && Le(t, "click"), !0;
            },
            _default: function _default(e) {
              var t = e.target;
              return ge.test(t.type) && t.click && L(t, "input") && Z.get(t, "click") || L(t, "a");
            }
          },
          beforeunload: {
            postDispatch: function postDispatch(e) {
              void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result);
            }
          }
        }
      }, T.removeEvent = function (e, t, n) {
        e.removeEventListener && e.removeEventListener(t, n);
      }, (T.Event = function (e, t) {
        if (!(this instanceof T.Event)) return new T.Event(e, t);
        e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? Ae : ke, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && T.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), this[T.expando] = !0;
      }).prototype = {
        constructor: T.Event,
        isDefaultPrevented: ke,
        isPropagationStopped: ke,
        isImmediatePropagationStopped: ke,
        isSimulated: !1,
        preventDefault: function preventDefault() {
          var e = this.originalEvent;
          this.isDefaultPrevented = Ae, e && !this.isSimulated && e.preventDefault();
        },
        stopPropagation: function stopPropagation() {
          var e = this.originalEvent;
          this.isPropagationStopped = Ae, e && !this.isSimulated && e.stopPropagation();
        },
        stopImmediatePropagation: function stopImmediatePropagation() {
          var e = this.originalEvent;
          this.isImmediatePropagationStopped = Ae, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation();
        }
      }, T.each({
        altKey: !0,
        bubbles: !0,
        cancelable: !0,
        changedTouches: !0,
        ctrlKey: !0,
        detail: !0,
        eventPhase: !0,
        metaKey: !0,
        pageX: !0,
        pageY: !0,
        shiftKey: !0,
        view: !0,
        "char": !0,
        code: !0,
        charCode: !0,
        key: !0,
        keyCode: !0,
        button: !0,
        buttons: !0,
        clientX: !0,
        clientY: !0,
        offsetX: !0,
        offsetY: !0,
        pointerId: !0,
        pointerType: !0,
        screenX: !0,
        screenY: !0,
        targetTouches: !0,
        toElement: !0,
        touches: !0,
        which: function which(e) {
          var t = e.button;
          return null == e.which && Se.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && Te.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which;
        }
      }, T.event.addProp), T.each({
        focus: "focusin",
        blur: "focusout"
      }, function (e, t) {
        T.event.special[e] = {
          setup: function setup() {
            return Le(this, e, Oe), !1;
          },
          trigger: function trigger() {
            return Le(this, e), !0;
          },
          delegateType: t
        };
      }), T.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout"
      }, function (e, t) {
        T.event.special[e] = {
          delegateType: t,
          bindType: t,
          handle: function handle(e) {
            var n,
                r = this,
                o = e.relatedTarget,
                i = e.handleObj;
            return o && (o === r || T.contains(r, o)) || (e.type = i.origType, n = i.handler.apply(this, arguments), e.type = t), n;
          }
        };
      }), T.fn.extend({
        on: function on(e, t, n, r) {
          return De(this, e, t, n, r);
        },
        one: function one(e, t, n, r) {
          return De(this, e, t, n, r, 1);
        },
        off: function off(e, t, n) {
          var o, i;
          if (e && e.preventDefault && e.handleObj) return o = e.handleObj, T(e.delegateTarget).off(o.namespace ? o.origType + "." + o.namespace : o.origType, o.selector, o.handler), this;

          if ("object" === r(e)) {
            for (i in e) {
              this.off(i, t, e[i]);
            }

            return this;
          }

          return !1 !== t && "function" !== typeof t || (n = t, t = void 0), !1 === n && (n = ke), this.each(function () {
            T.event.remove(this, e, n, t);
          });
        }
      });
      var Ne = /<script|<style|<link/i,
          Pe = /checked\s*(?:[^=]|=\s*.checked.)/i,
          je = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

      function Ie(e, t) {
        return L(e, "table") && L(11 !== t.nodeType ? t : t.firstChild, "tr") && T(e).children("tbody")[0] || e;
      }

      function Re(e) {
        return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e;
      }

      function $e(e) {
        return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e;
      }

      function qe(e, t) {
        var n, r, o, i, s, a;

        if (1 === t.nodeType) {
          if (Z.hasData(e) && (a = Z.get(e).events)) for (o in Z.remove(t, "handle events"), a) {
            for (n = 0, r = a[o].length; n < r; n++) {
              T.event.add(t, o, a[o][n]);
            }
          }
          ee.hasData(e) && (i = ee.access(e), s = T.extend({}, i), ee.set(t, s));
        }
      }

      function Me(e, t) {
        var n = t.nodeName.toLowerCase();
        "input" === n && ge.test(e.type) ? t.checked = e.checked : "input" !== n && "textarea" !== n || (t.defaultValue = e.defaultValue);
      }

      function Be(e, t, n, r) {
        t = c(t);
        var o,
            i,
            s,
            a,
            l,
            u,
            p = 0,
            h = e.length,
            d = h - 1,
            f = t[0],
            m = v(f);
        if (m || h > 1 && "string" === typeof f && !y.checkClone && Pe.test(f)) return e.each(function (o) {
          var i = e.eq(o);
          m && (t[0] = f.call(this, o, i.html())), Be(i, t, n, r);
        });

        if (h && (i = (o = xe(t, e[0].ownerDocument, !1, e, r)).firstChild, 1 === o.childNodes.length && (o = i), i || r)) {
          for (a = (s = T.map(we(o, "script"), Re)).length; p < h; p++) {
            l = o, p !== d && (l = T.clone(l, !0, !0), a && T.merge(s, we(l, "script"))), n.call(e[p], l, p);
          }

          if (a) for (u = s[s.length - 1].ownerDocument, T.map(s, $e), p = 0; p < a; p++) {
            l = s[p], ve.test(l.type || "") && !Z.access(l, "globalEval") && T.contains(u, l) && (l.src && "module" !== (l.type || "").toLowerCase() ? T._evalUrl && !l.noModule && T._evalUrl(l.src, {
              nonce: l.nonce || l.getAttribute("nonce")
            }, u) : _(l.textContent.replace(je, ""), l, u));
          }
        }

        return e;
      }

      function Fe(e, t, n) {
        for (var r, o = t ? T.filter(t, e) : e, i = 0; null != (r = o[i]); i++) {
          n || 1 !== r.nodeType || T.cleanData(we(r)), r.parentNode && (n && le(r) && Ee(we(r, "script")), r.parentNode.removeChild(r));
        }

        return e;
      }

      T.extend({
        htmlPrefilter: function htmlPrefilter(e) {
          return e;
        },
        clone: function clone(e, t, n) {
          var r,
              o,
              i,
              s,
              a = e.cloneNode(!0),
              l = le(e);
          if (!y.noCloneChecked && (1 === e.nodeType || 11 === e.nodeType) && !T.isXMLDoc(e)) for (s = we(a), r = 0, o = (i = we(e)).length; r < o; r++) {
            Me(i[r], s[r]);
          }
          if (t) if (n) for (i = i || we(e), s = s || we(a), r = 0, o = i.length; r < o; r++) {
            qe(i[r], s[r]);
          } else qe(e, a);
          return (s = we(a, "script")).length > 0 && Ee(s, !l && we(e, "script")), a;
        },
        cleanData: function cleanData(e) {
          for (var t, n, r, o = T.event.special, i = 0; void 0 !== (n = e[i]); i++) {
            if (X(n)) {
              if (t = n[Z.expando]) {
                if (t.events) for (r in t.events) {
                  o[r] ? T.event.remove(n, r) : T.removeEvent(n, r, t.handle);
                }
                n[Z.expando] = void 0;
              }

              n[ee.expando] && (n[ee.expando] = void 0);
            }
          }
        }
      }), T.fn.extend({
        detach: function detach(e) {
          return Fe(this, e, !0);
        },
        remove: function remove(e) {
          return Fe(this, e);
        },
        text: function text(e) {
          return V(this, function (e) {
            return void 0 === e ? T.text(this) : this.empty().each(function () {
              1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e);
            });
          }, null, e, arguments.length);
        },
        append: function append() {
          return Be(this, arguments, function (e) {
            1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || Ie(this, e).appendChild(e);
          });
        },
        prepend: function prepend() {
          return Be(this, arguments, function (e) {
            if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
              var t = Ie(this, e);
              t.insertBefore(e, t.firstChild);
            }
          });
        },
        before: function before() {
          return Be(this, arguments, function (e) {
            this.parentNode && this.parentNode.insertBefore(e, this);
          });
        },
        after: function after() {
          return Be(this, arguments, function (e) {
            this.parentNode && this.parentNode.insertBefore(e, this.nextSibling);
          });
        },
        empty: function empty() {
          for (var e, t = 0; null != (e = this[t]); t++) {
            1 === e.nodeType && (T.cleanData(we(e, !1)), e.textContent = "");
          }

          return this;
        },
        clone: function clone(e, t) {
          return e = null != e && e, t = null == t ? e : t, this.map(function () {
            return T.clone(this, e, t);
          });
        },
        html: function html(e) {
          return V(this, function (e) {
            var t = this[0] || {},
                n = 0,
                r = this.length;
            if (void 0 === e && 1 === t.nodeType) return t.innerHTML;

            if ("string" === typeof e && !Ne.test(e) && !be[(ye.exec(e) || ["", ""])[1].toLowerCase()]) {
              e = T.htmlPrefilter(e);

              try {
                for (; n < r; n++) {
                  1 === (t = this[n] || {}).nodeType && (T.cleanData(we(t, !1)), t.innerHTML = e);
                }

                t = 0;
              } catch (o) {}
            }

            t && this.empty().append(e);
          }, null, e, arguments.length);
        },
        replaceWith: function replaceWith() {
          var e = [];
          return Be(this, arguments, function (t) {
            var n = this.parentNode;
            T.inArray(this, e) < 0 && (T.cleanData(we(this)), n && n.replaceChild(t, this));
          }, e);
        }
      }), T.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
      }, function (e, t) {
        T.fn[e] = function (e) {
          for (var n, r = [], o = T(e), i = o.length - 1, s = 0; s <= i; s++) {
            n = s === i ? this : this.clone(!0), T(o[s])[t](n), u.apply(r, n.get());
          }

          return this.pushStack(r);
        };
      });

      var He = new RegExp("^(" + oe + ")(?!px)[a-z%]+$", "i"),
          Ue = function Ue(e) {
        var t = e.ownerDocument.defaultView;
        return t && t.opener || (t = o), t.getComputedStyle(e);
      },
          We = function We(e, t, n) {
        var r,
            o,
            i = {};

        for (o in t) {
          i[o] = e.style[o], e.style[o] = t[o];
        }

        for (o in r = n.call(e), t) {
          e.style[o] = i[o];
        }

        return r;
      },
          ze = new RegExp(se.join("|"), "i");

      function Ve(e, t, n) {
        var r,
            o,
            i,
            s,
            a = e.style;
        return (n = n || Ue(e)) && ("" !== (s = n.getPropertyValue(t) || n[t]) || le(e) || (s = T.style(e, t)), !y.pixelBoxStyles() && He.test(s) && ze.test(t) && (r = a.width, o = a.minWidth, i = a.maxWidth, a.minWidth = a.maxWidth = a.width = s, s = n.width, a.width = r, a.minWidth = o, a.maxWidth = i)), void 0 !== s ? s + "" : s;
      }

      function Ke(e, t) {
        return {
          get: function get() {
            if (!e()) return (this.get = t).apply(this, arguments);
            delete this.get;
          }
        };
      }

      !function () {
        function e() {
          if (u) {
            c.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", u.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", ae.appendChild(c).appendChild(u);
            var e = o.getComputedStyle(u);
            n = "1%" !== e.top, l = 12 === t(e.marginLeft), u.style.right = "60%", s = 36 === t(e.right), r = 36 === t(e.width), u.style.position = "absolute", i = 12 === t(u.offsetWidth / 3), ae.removeChild(c), u = null;
          }
        }

        function t(e) {
          return Math.round(parseFloat(e));
        }

        var n,
            r,
            i,
            s,
            a,
            l,
            c = w.createElement("div"),
            u = w.createElement("div");
        u.style && (u.style.backgroundClip = "content-box", u.cloneNode(!0).style.backgroundClip = "", y.clearCloneStyle = "content-box" === u.style.backgroundClip, T.extend(y, {
          boxSizingReliable: function boxSizingReliable() {
            return e(), r;
          },
          pixelBoxStyles: function pixelBoxStyles() {
            return e(), s;
          },
          pixelPosition: function pixelPosition() {
            return e(), n;
          },
          reliableMarginLeft: function reliableMarginLeft() {
            return e(), l;
          },
          scrollboxSize: function scrollboxSize() {
            return e(), i;
          },
          reliableTrDimensions: function reliableTrDimensions() {
            var e, t, n, r;
            return null == a && (e = w.createElement("table"), t = w.createElement("tr"), n = w.createElement("div"), e.style.cssText = "position:absolute;left:-11111px", t.style.height = "1px", n.style.height = "9px", ae.appendChild(e).appendChild(t).appendChild(n), r = o.getComputedStyle(t), a = parseInt(r.height) > 3, ae.removeChild(e)), a;
          }
        }));
      }();
      var Ge = ["Webkit", "Moz", "ms"],
          Ye = w.createElement("div").style,
          Qe = {};

      function Xe(e) {
        var t = T.cssProps[e] || Qe[e];
        return t || (e in Ye ? e : Qe[e] = function (e) {
          for (var t = e[0].toUpperCase() + e.slice(1), n = Ge.length; n--;) {
            if ((e = Ge[n] + t) in Ye) return e;
          }
        }(e) || e);
      }

      var Je = /^(none|table(?!-c[ea]).+)/,
          Ze = /^--/,
          et = {
        position: "absolute",
        visibility: "hidden",
        display: "block"
      },
          tt = {
        letterSpacing: "0",
        fontWeight: "400"
      };

      function nt(e, t, n) {
        var r = ie.exec(t);
        return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t;
      }

      function rt(e, t, n, r, o, i) {
        var s = "width" === t ? 1 : 0,
            a = 0,
            l = 0;
        if (n === (r ? "border" : "content")) return 0;

        for (; s < 4; s += 2) {
          "margin" === n && (l += T.css(e, n + se[s], !0, o)), r ? ("content" === n && (l -= T.css(e, "padding" + se[s], !0, o)), "margin" !== n && (l -= T.css(e, "border" + se[s] + "Width", !0, o))) : (l += T.css(e, "padding" + se[s], !0, o), "padding" !== n ? l += T.css(e, "border" + se[s] + "Width", !0, o) : a += T.css(e, "border" + se[s] + "Width", !0, o));
        }

        return !r && i >= 0 && (l += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - i - l - a - .5)) || 0), l;
      }

      function ot(e, t, n) {
        var r = Ue(e),
            o = (!y.boxSizingReliable() || n) && "border-box" === T.css(e, "boxSizing", !1, r),
            i = o,
            s = Ve(e, t, r),
            a = "offset" + t[0].toUpperCase() + t.slice(1);

        if (He.test(s)) {
          if (!n) return s;
          s = "auto";
        }

        return (!y.boxSizingReliable() && o || !y.reliableTrDimensions() && L(e, "tr") || "auto" === s || !parseFloat(s) && "inline" === T.css(e, "display", !1, r)) && e.getClientRects().length && (o = "border-box" === T.css(e, "boxSizing", !1, r), (i = a in e) && (s = e[a])), (s = parseFloat(s) || 0) + rt(e, t, n || (o ? "border" : "content"), i, r, s) + "px";
      }

      T.extend({
        cssHooks: {
          opacity: {
            get: function get(e, t) {
              if (t) {
                var n = Ve(e, "opacity");
                return "" === n ? "1" : n;
              }
            }
          }
        },
        cssNumber: {
          animationIterationCount: !0,
          columnCount: !0,
          fillOpacity: !0,
          flexGrow: !0,
          flexShrink: !0,
          fontWeight: !0,
          gridArea: !0,
          gridColumn: !0,
          gridColumnEnd: !0,
          gridColumnStart: !0,
          gridRow: !0,
          gridRowEnd: !0,
          gridRowStart: !0,
          lineHeight: !0,
          opacity: !0,
          order: !0,
          orphans: !0,
          widows: !0,
          zIndex: !0,
          zoom: !0
        },
        cssProps: {},
        style: function style(e, t, n, o) {
          if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
            var i,
                s,
                a,
                l = Q(t),
                c = Ze.test(t),
                u = e.style;
            if (c || (t = Xe(l)), a = T.cssHooks[t] || T.cssHooks[l], void 0 === n) return a && "get" in a && void 0 !== (i = a.get(e, !1, o)) ? i : u[t];
            "string" === (s = r(n)) && (i = ie.exec(n)) && i[1] && (n = function (e, t, n, r) {
              var o,
                  i,
                  s = 20,
                  a = r ? function () {
                return r.cur();
              } : function () {
                return T.css(e, t, "");
              },
                  l = a(),
                  c = n && n[3] || (T.cssNumber[t] ? "" : "px"),
                  u = e.nodeType && (T.cssNumber[t] || "px" !== c && +l) && ie.exec(T.css(e, t));

              if (u && u[3] !== c) {
                for (l /= 2, c = c || u[3], u = +l || 1; s--;) {
                  T.style(e, t, u + c), (1 - i) * (1 - (i = a() / l || .5)) <= 0 && (s = 0), u /= i;
                }

                T.style(e, t, (u *= 2) + c), n = n || [];
              }

              return n && (u = +u || +l || 0, o = n[1] ? u + (n[1] + 1) * n[2] : +n[2], r && (r.unit = c, r.start = u, r.end = o)), o;
            }(e, t, i), s = "number"), null != n && n === n && ("number" !== s || c || (n += i && i[3] || (T.cssNumber[l] ? "" : "px")), y.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (u[t] = "inherit"), a && "set" in a && void 0 === (n = a.set(e, n, o)) || (c ? u.setProperty(t, n) : u[t] = n));
          }
        },
        css: function css(e, t, n, r) {
          var o,
              i,
              s,
              a = Q(t);
          return Ze.test(t) || (t = Xe(a)), (s = T.cssHooks[t] || T.cssHooks[a]) && "get" in s && (o = s.get(e, !0, n)), void 0 === o && (o = Ve(e, t, r)), "normal" === o && t in tt && (o = tt[t]), "" === n || n ? (i = parseFloat(o), !0 === n || isFinite(i) ? i || 0 : o) : o;
        }
      }), T.each(["height", "width"], function (e, t) {
        T.cssHooks[t] = {
          get: function get(e, n, r) {
            if (n) return !Je.test(T.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? ot(e, t, r) : We(e, et, function () {
              return ot(e, t, r);
            });
          },
          set: function set(e, n, r) {
            var o,
                i = Ue(e),
                s = !y.scrollboxSize() && "absolute" === i.position,
                a = (s || r) && "border-box" === T.css(e, "boxSizing", !1, i),
                l = r ? rt(e, t, r, a, i) : 0;
            return a && s && (l -= Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - parseFloat(i[t]) - rt(e, t, "border", !1, i) - .5)), l && (o = ie.exec(n)) && "px" !== (o[3] || "px") && (e.style[t] = n, n = T.css(e, t)), nt(0, n, l);
          }
        };
      }), T.cssHooks.marginLeft = Ke(y.reliableMarginLeft, function (e, t) {
        if (t) return (parseFloat(Ve(e, "marginLeft")) || e.getBoundingClientRect().left - We(e, {
          marginLeft: 0
        }, function () {
          return e.getBoundingClientRect().left;
        })) + "px";
      }), T.each({
        margin: "",
        padding: "",
        border: "Width"
      }, function (e, t) {
        T.cssHooks[e + t] = {
          expand: function expand(n) {
            for (var r = 0, o = {}, i = "string" === typeof n ? n.split(" ") : [n]; r < 4; r++) {
              o[e + se[r] + t] = i[r] || i[r - 2] || i[0];
            }

            return o;
          }
        }, "margin" !== e && (T.cssHooks[e + t].set = nt);
      }), T.fn.extend({
        css: function css(e, t) {
          return V(this, function (e, t, n) {
            var r,
                o,
                i = {},
                s = 0;

            if (Array.isArray(t)) {
              for (r = Ue(e), o = t.length; s < o; s++) {
                i[t[s]] = T.css(e, t[s], !1, r);
              }

              return i;
            }

            return void 0 !== n ? T.style(e, t, n) : T.css(e, t);
          }, e, t, arguments.length > 1);
        }
      }), T.fn.delay = function (e, t) {
        return e = T.fx && T.fx.speeds[e] || e, t = t || "fx", this.queue(t, function (t, n) {
          var r = o.setTimeout(t, e);

          n.stop = function () {
            o.clearTimeout(r);
          };
        });
      }, function () {
        var e = w.createElement("input"),
            t = w.createElement("select").appendChild(w.createElement("option"));
        e.type = "checkbox", y.checkOn = "" !== e.value, y.optSelected = t.selected, (e = w.createElement("input")).value = "t", e.type = "radio", y.radioValue = "t" === e.value;
      }();
      var it,
          st = T.expr.attrHandle;
      T.fn.extend({
        attr: function attr(e, t) {
          return V(this, T.attr, e, t, arguments.length > 1);
        },
        removeAttr: function removeAttr(e) {
          return this.each(function () {
            T.removeAttr(this, e);
          });
        }
      }), T.extend({
        attr: function attr(e, t, n) {
          var r,
              o,
              i = e.nodeType;
          if (3 !== i && 8 !== i && 2 !== i) return "undefined" === typeof e.getAttribute ? T.prop(e, t, n) : (1 === i && T.isXMLDoc(e) || (o = T.attrHooks[t.toLowerCase()] || (T.expr.match.bool.test(t) ? it : void 0)), void 0 !== n ? null === n ? void T.removeAttr(e, t) : o && "set" in o && void 0 !== (r = o.set(e, n, t)) ? r : (e.setAttribute(t, n + ""), n) : o && "get" in o && null !== (r = o.get(e, t)) ? r : null == (r = T.find.attr(e, t)) ? void 0 : r);
        },
        attrHooks: {
          type: {
            set: function set(e, t) {
              if (!y.radioValue && "radio" === t && L(e, "input")) {
                var n = e.value;
                return e.setAttribute("type", t), n && (e.value = n), t;
              }
            }
          }
        },
        removeAttr: function removeAttr(e, t) {
          var n,
              r = 0,
              o = t && t.match(M);
          if (o && 1 === e.nodeType) for (; n = o[r++];) {
            e.removeAttribute(n);
          }
        }
      }), it = {
        set: function set(e, t, n) {
          return !1 === t ? T.removeAttr(e, n) : e.setAttribute(n, n), n;
        }
      }, T.each(T.expr.match.bool.source.match(/\w+/g), function (e, t) {
        var n = st[t] || T.find.attr;

        st[t] = function (e, t, r) {
          var o,
              i,
              s = t.toLowerCase();
          return r || (i = st[s], st[s] = o, o = null != n(e, t, r) ? s : null, st[s] = i), o;
        };
      });
      var at = /^(?:input|select|textarea|button)$/i,
          lt = /^(?:a|area)$/i;

      function ct(e) {
        return (e.match(M) || []).join(" ");
      }

      function ut(e) {
        return e.getAttribute && e.getAttribute("class") || "";
      }

      function pt(e) {
        return Array.isArray(e) ? e : "string" === typeof e && e.match(M) || [];
      }

      T.fn.extend({
        prop: function prop(e, t) {
          return V(this, T.prop, e, t, arguments.length > 1);
        },
        removeProp: function removeProp(e) {
          return this.each(function () {
            delete this[T.propFix[e] || e];
          });
        }
      }), T.extend({
        prop: function prop(e, t, n) {
          var r,
              o,
              i = e.nodeType;
          if (3 !== i && 8 !== i && 2 !== i) return 1 === i && T.isXMLDoc(e) || (t = T.propFix[t] || t, o = T.propHooks[t]), void 0 !== n ? o && "set" in o && void 0 !== (r = o.set(e, n, t)) ? r : e[t] = n : o && "get" in o && null !== (r = o.get(e, t)) ? r : e[t];
        },
        propHooks: {
          tabIndex: {
            get: function get(e) {
              var t = T.find.attr(e, "tabindex");
              return t ? parseInt(t, 10) : at.test(e.nodeName) || lt.test(e.nodeName) && e.href ? 0 : -1;
            }
          }
        },
        propFix: {
          "for": "htmlFor",
          "class": "className"
        }
      }), y.optSelected || (T.propHooks.selected = {
        get: function get(e) {
          var t = e.parentNode;
          return t && t.parentNode && t.parentNode.selectedIndex, null;
        },
        set: function set(e) {
          var t = e.parentNode;
          t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex);
        }
      }), T.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
        T.propFix[this.toLowerCase()] = this;
      }), T.fn.extend({
        addClass: function addClass(e) {
          var t,
              n,
              r,
              o,
              i,
              s,
              a,
              l = 0;
          if (v(e)) return this.each(function (t) {
            T(this).addClass(e.call(this, t, ut(this)));
          });
          if ((t = pt(e)).length) for (; n = this[l++];) {
            if (o = ut(n), r = 1 === n.nodeType && " " + ct(o) + " ") {
              for (s = 0; i = t[s++];) {
                r.indexOf(" " + i + " ") < 0 && (r += i + " ");
              }

              o !== (a = ct(r)) && n.setAttribute("class", a);
            }
          }
          return this;
        },
        removeClass: function removeClass(e) {
          var t,
              n,
              r,
              o,
              i,
              s,
              a,
              l = 0;
          if (v(e)) return this.each(function (t) {
            T(this).removeClass(e.call(this, t, ut(this)));
          });
          if (!arguments.length) return this.attr("class", "");
          if ((t = pt(e)).length) for (; n = this[l++];) {
            if (o = ut(n), r = 1 === n.nodeType && " " + ct(o) + " ") {
              for (s = 0; i = t[s++];) {
                for (; r.indexOf(" " + i + " ") > -1;) {
                  r = r.replace(" " + i + " ", " ");
                }
              }

              o !== (a = ct(r)) && n.setAttribute("class", a);
            }
          }
          return this;
        },
        toggleClass: function toggleClass(e, t) {
          var n = r(e),
              o = "string" === n || Array.isArray(e);
          return "boolean" === typeof t && o ? t ? this.addClass(e) : this.removeClass(e) : v(e) ? this.each(function (n) {
            T(this).toggleClass(e.call(this, n, ut(this), t), t);
          }) : this.each(function () {
            var t, r, i, s;
            if (o) for (r = 0, i = T(this), s = pt(e); t = s[r++];) {
              i.hasClass(t) ? i.removeClass(t) : i.addClass(t);
            } else void 0 !== e && "boolean" !== n || ((t = ut(this)) && Z.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === e ? "" : Z.get(this, "__className__") || ""));
          });
        },
        hasClass: function hasClass(e) {
          var t,
              n,
              r = 0;

          for (t = " " + e + " "; n = this[r++];) {
            if (1 === n.nodeType && (" " + ct(ut(n)) + " ").indexOf(t) > -1) return !0;
          }

          return !1;
        }
      });
      var ht = /\r/g;
      T.fn.extend({
        val: function val(e) {
          var t,
              n,
              r,
              o = this[0];
          return arguments.length ? (r = v(e), this.each(function (n) {
            var o;
            1 === this.nodeType && (null == (o = r ? e.call(this, n, T(this).val()) : e) ? o = "" : "number" === typeof o ? o += "" : Array.isArray(o) && (o = T.map(o, function (e) {
              return null == e ? "" : e + "";
            })), (t = T.valHooks[this.type] || T.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, o, "value") || (this.value = o));
          })) : o ? (t = T.valHooks[o.type] || T.valHooks[o.nodeName.toLowerCase()]) && "get" in t && void 0 !== (n = t.get(o, "value")) ? n : "string" === typeof (n = o.value) ? n.replace(ht, "") : null == n ? "" : n : void 0;
        }
      }), T.extend({
        valHooks: {
          option: {
            get: function get(e) {
              var t = T.find.attr(e, "value");
              return null != t ? t : ct(T.text(e));
            }
          },
          select: {
            get: function get(e) {
              var t,
                  n,
                  r,
                  o = e.options,
                  i = e.selectedIndex,
                  s = "select-one" === e.type,
                  a = s ? null : [],
                  l = s ? i + 1 : o.length;

              for (r = i < 0 ? l : s ? i : 0; r < l; r++) {
                if (((n = o[r]).selected || r === i) && !n.disabled && (!n.parentNode.disabled || !L(n.parentNode, "optgroup"))) {
                  if (t = T(n).val(), s) return t;
                  a.push(t);
                }
              }

              return a;
            },
            set: function set(e, t) {
              for (var n, r, o = e.options, i = T.makeArray(t), s = o.length; s--;) {
                ((r = o[s]).selected = T.inArray(T.valHooks.option.get(r), i) > -1) && (n = !0);
              }

              return n || (e.selectedIndex = -1), i;
            }
          }
        }
      }), T.each(["radio", "checkbox"], function () {
        T.valHooks[this] = {
          set: function set(e, t) {
            if (Array.isArray(t)) return e.checked = T.inArray(T(e).val(), t) > -1;
          }
        }, y.checkOn || (T.valHooks[this].get = function (e) {
          return null === e.getAttribute("value") ? "on" : e.value;
        });
      }), y.focusin = "onfocusin" in o;

      var dt = /^(?:focusinfocus|focusoutblur)$/,
          ft = function ft(e) {
        e.stopPropagation();
      };

      T.extend(T.event, {
        trigger: function trigger(e, t, n, i) {
          var s,
              a,
              l,
              c,
              u,
              p,
              h,
              d,
              m = [n || w],
              g = f.call(e, "type") ? e.type : e,
              y = f.call(e, "namespace") ? e.namespace.split(".") : [];

          if (a = d = l = n = n || w, 3 !== n.nodeType && 8 !== n.nodeType && !dt.test(g + T.event.triggered) && (g.indexOf(".") > -1 && (y = g.split("."), g = y.shift(), y.sort()), u = g.indexOf(":") < 0 && "on" + g, (e = e[T.expando] ? e : new T.Event(g, "object" === r(e) && e)).isTrigger = i ? 2 : 3, e.namespace = y.join("."), e.rnamespace = e.namespace ? new RegExp("(^|\\.)" + y.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, e.result = void 0, e.target || (e.target = n), t = null == t ? [e] : T.makeArray(t, [e]), h = T.event.special[g] || {}, i || !h.trigger || !1 !== h.trigger.apply(n, t))) {
            if (!i && !h.noBubble && !b(n)) {
              for (c = h.delegateType || g, dt.test(c + g) || (a = a.parentNode); a; a = a.parentNode) {
                m.push(a), l = a;
              }

              l === (n.ownerDocument || w) && m.push(l.defaultView || l.parentWindow || o);
            }

            for (s = 0; (a = m[s++]) && !e.isPropagationStopped();) {
              d = a, e.type = s > 1 ? c : h.bindType || g, (p = (Z.get(a, "events") || Object.create(null))[e.type] && Z.get(a, "handle")) && p.apply(a, t), (p = u && a[u]) && p.apply && X(a) && (e.result = p.apply(a, t), !1 === e.result && e.preventDefault());
            }

            return e.type = g, i || e.isDefaultPrevented() || h._default && !1 !== h._default.apply(m.pop(), t) || !X(n) || u && v(n[g]) && !b(n) && ((l = n[u]) && (n[u] = null), T.event.triggered = g, e.isPropagationStopped() && d.addEventListener(g, ft), n[g](), e.isPropagationStopped() && d.removeEventListener(g, ft), T.event.triggered = void 0, l && (n[u] = l)), e.result;
          }
        },
        simulate: function simulate(e, t, n) {
          var r = T.extend(new T.Event(), n, {
            type: e,
            isSimulated: !0
          });
          T.event.trigger(r, null, t);
        }
      }), T.fn.extend({
        trigger: function trigger(e, t) {
          return this.each(function () {
            T.event.trigger(e, t, this);
          });
        },
        triggerHandler: function triggerHandler(e, t) {
          var n = this[0];
          if (n) return T.event.trigger(e, t, n, !0);
        }
      }), y.focusin || T.each({
        focus: "focusin",
        blur: "focusout"
      }, function (e, t) {
        var n = function n(e) {
          T.event.simulate(t, e.target, T.event.fix(e));
        };

        T.event.special[t] = {
          setup: function setup() {
            var r = this.ownerDocument || this.document || this,
                o = Z.access(r, t);
            o || r.addEventListener(e, n, !0), Z.access(r, t, (o || 0) + 1);
          },
          teardown: function teardown() {
            var r = this.ownerDocument || this.document || this,
                o = Z.access(r, t) - 1;
            o ? Z.access(r, t, o) : (r.removeEventListener(e, n, !0), Z.remove(r, t));
          }
        };
      }), T.parseXML = function (e) {
        var t;
        if (!e || "string" !== typeof e) return null;

        try {
          t = new o.DOMParser().parseFromString(e, "text/xml");
        } catch (n) {
          t = void 0;
        }

        return t && !t.getElementsByTagName("parsererror").length || T.error("Invalid XML: " + e), t;
      };
      var mt,
          gt = /\[\]$/,
          yt = /\r?\n/g,
          vt = /^(?:submit|button|image|reset|file)$/i,
          bt = /^(?:input|select|textarea|keygen)/i;

      function wt(e, t, n, o) {
        var i;
        if (Array.isArray(t)) T.each(t, function (t, i) {
          n || gt.test(e) ? o(e, i) : wt(e + "[" + ("object" === r(i) && null != i ? t : "") + "]", i, n, o);
        });else if (n || "object" !== x(t)) o(e, t);else for (i in t) {
          wt(e + "[" + i + "]", t[i], n, o);
        }
      }

      T.param = function (e, t) {
        var n,
            r = [],
            o = function o(e, t) {
          var n = v(t) ? t() : t;
          r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n);
        };

        if (null == e) return "";
        if (Array.isArray(e) || e.jquery && !T.isPlainObject(e)) T.each(e, function () {
          o(this.name, this.value);
        });else for (n in e) {
          wt(n, e[n], t, o);
        }
        return r.join("&");
      }, T.fn.extend({
        serialize: function serialize() {
          return T.param(this.serializeArray());
        },
        serializeArray: function serializeArray() {
          return this.map(function () {
            var e = T.prop(this, "elements");
            return e ? T.makeArray(e) : this;
          }).filter(function () {
            var e = this.type;
            return this.name && !T(this).is(":disabled") && bt.test(this.nodeName) && !vt.test(e) && (this.checked || !ge.test(e));
          }).map(function (e, t) {
            var n = T(this).val();
            return null == n ? null : Array.isArray(n) ? T.map(n, function (e) {
              return {
                name: t.name,
                value: e.replace(yt, "\r\n")
              };
            }) : {
              name: t.name,
              value: n.replace(yt, "\r\n")
            };
          }).get();
        }
      }), T.fn.extend({
        wrapAll: function wrapAll(e) {
          var t;
          return this[0] && (v(e) && (e = e.call(this[0])), t = T(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function () {
            for (var e = this; e.firstElementChild;) {
              e = e.firstElementChild;
            }

            return e;
          }).append(this)), this;
        },
        wrapInner: function wrapInner(e) {
          return v(e) ? this.each(function (t) {
            T(this).wrapInner(e.call(this, t));
          }) : this.each(function () {
            var t = T(this),
                n = t.contents();
            n.length ? n.wrapAll(e) : t.append(e);
          });
        },
        wrap: function wrap(e) {
          var t = v(e);
          return this.each(function (n) {
            T(this).wrapAll(t ? e.call(this, n) : e);
          });
        },
        unwrap: function unwrap(e) {
          return this.parent(e).not("body").each(function () {
            T(this).replaceWith(this.childNodes);
          }), this;
        }
      }), T.expr.pseudos.hidden = function (e) {
        return !T.expr.pseudos.visible(e);
      }, T.expr.pseudos.visible = function (e) {
        return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length);
      }, y.createHTMLDocument = ((mt = w.implementation.createHTMLDocument("").body).innerHTML = "<form></form><form></form>", 2 === mt.childNodes.length), T.parseHTML = function (e, t, n) {
        return "string" !== typeof e ? [] : ("boolean" === typeof t && (n = t, t = !1), t || (y.createHTMLDocument ? ((r = (t = w.implementation.createHTMLDocument("")).createElement("base")).href = w.location.href, t.head.appendChild(r)) : t = w), i = !n && [], (o = N.exec(e)) ? [t.createElement(o[1])] : (o = xe([e], t, i), i && i.length && T(i).remove(), T.merge([], o.childNodes)));
        var r, o, i;
      }, T.offset = {
        setOffset: function setOffset(e, t, n) {
          var r,
              o,
              i,
              s,
              a,
              l,
              c = T.css(e, "position"),
              u = T(e),
              p = {};
          "static" === c && (e.style.position = "relative"), a = u.offset(), i = T.css(e, "top"), l = T.css(e, "left"), ("absolute" === c || "fixed" === c) && (i + l).indexOf("auto") > -1 ? (s = (r = u.position()).top, o = r.left) : (s = parseFloat(i) || 0, o = parseFloat(l) || 0), v(t) && (t = t.call(e, n, T.extend({}, a))), null != t.top && (p.top = t.top - a.top + s), null != t.left && (p.left = t.left - a.left + o), "using" in t ? t.using.call(e, p) : ("number" === typeof p.top && (p.top += "px"), "number" === typeof p.left && (p.left += "px"), u.css(p));
        }
      }, T.fn.extend({
        offset: function offset(e) {
          if (arguments.length) return void 0 === e ? this : this.each(function (t) {
            T.offset.setOffset(this, e, t);
          });
          var t,
              n,
              r = this[0];
          return r ? r.getClientRects().length ? (t = r.getBoundingClientRect(), n = r.ownerDocument.defaultView, {
            top: t.top + n.pageYOffset,
            left: t.left + n.pageXOffset
          }) : {
            top: 0,
            left: 0
          } : void 0;
        },
        position: function position() {
          if (this[0]) {
            var e,
                t,
                n,
                r = this[0],
                o = {
              top: 0,
              left: 0
            };
            if ("fixed" === T.css(r, "position")) t = r.getBoundingClientRect();else {
              for (t = this.offset(), n = r.ownerDocument, e = r.offsetParent || n.documentElement; e && (e === n.body || e === n.documentElement) && "static" === T.css(e, "position");) {
                e = e.parentNode;
              }

              e && e !== r && 1 === e.nodeType && ((o = T(e).offset()).top += T.css(e, "borderTopWidth", !0), o.left += T.css(e, "borderLeftWidth", !0));
            }
            return {
              top: t.top - o.top - T.css(r, "marginTop", !0),
              left: t.left - o.left - T.css(r, "marginLeft", !0)
            };
          }
        },
        offsetParent: function offsetParent() {
          return this.map(function () {
            for (var e = this.offsetParent; e && "static" === T.css(e, "position");) {
              e = e.offsetParent;
            }

            return e || ae;
          });
        }
      }), T.each({
        scrollLeft: "pageXOffset",
        scrollTop: "pageYOffset"
      }, function (e, t) {
        var n = "pageYOffset" === t;

        T.fn[e] = function (r) {
          return V(this, function (e, r, o) {
            var i;
            if (b(e) ? i = e : 9 === e.nodeType && (i = e.defaultView), void 0 === o) return i ? i[t] : e[r];
            i ? i.scrollTo(n ? i.pageXOffset : o, n ? o : i.pageYOffset) : e[r] = o;
          }, e, r, arguments.length);
        };
      }), T.each(["top", "left"], function (e, t) {
        T.cssHooks[t] = Ke(y.pixelPosition, function (e, n) {
          if (n) return n = Ve(e, t), He.test(n) ? T(e).position()[t] + "px" : n;
        });
      }), T.each({
        Height: "height",
        Width: "width"
      }, function (e, t) {
        T.each({
          padding: "inner" + e,
          content: t,
          "": "outer" + e
        }, function (n, r) {
          T.fn[r] = function (o, i) {
            var s = arguments.length && (n || "boolean" !== typeof o),
                a = n || (!0 === o || !0 === i ? "margin" : "border");
            return V(this, function (t, n, o) {
              var i;
              return b(t) ? 0 === r.indexOf("outer") ? t["inner" + e] : t.document.documentElement["client" + e] : 9 === t.nodeType ? (i = t.documentElement, Math.max(t.body["scroll" + e], i["scroll" + e], t.body["offset" + e], i["offset" + e], i["client" + e])) : void 0 === o ? T.css(t, n, a) : T.style(t, n, o, a);
            }, t, s ? o : void 0, s);
          };
        });
      }), T.fn.extend({
        bind: function bind(e, t, n) {
          return this.on(e, null, t, n);
        },
        unbind: function unbind(e, t) {
          return this.off(e, null, t);
        },
        delegate: function delegate(e, t, n, r) {
          return this.on(t, e, n, r);
        },
        undelegate: function undelegate(e, t, n) {
          return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n);
        },
        hover: function hover(e, t) {
          return this.mouseenter(e).mouseleave(t || e);
        }
      }), T.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function (e, t) {
        T.fn[t] = function (e, n) {
          return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t);
        };
      });
      var Et = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
      T.proxy = function (e, t) {
        var n, r, o;
        if ("string" === typeof t && (n = e[t], t = e, e = n), v(e)) return r = l.call(arguments, 2), (o = function o() {
          return e.apply(t || this, r.concat(l.call(arguments)));
        }).guid = e.guid = e.guid || T.guid++, o;
      }, T.holdReady = function (e) {
        e ? T.readyWait++ : T.ready(!0);
      }, T.isArray = Array.isArray, T.parseJSON = JSON.parse, T.nodeName = L, T.isFunction = v, T.isWindow = b, T.camelCase = Q, T.type = x, T.now = Date.now, T.isNumeric = function (e) {
        var t = T.type(e);
        return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e));
      }, T.trim = function (e) {
        return null == e ? "" : (e + "").replace(Et, "");
      }, void 0 === (n = function () {
        return T;
      }.apply(t, [])) || (e.exports = n);
      var _t = o.jQuery,
          xt = o.$;
      return T.noConflict = function (e) {
        return o.$ === T && (o.$ = xt), e && o.jQuery === T && (o.jQuery = _t), T;
      }, "undefined" === typeof i && (o.jQuery = o.$ = T), T;
    });
  }).call(this, n(16)(e));
}, function (e, t, n) {
  "use strict";

  n.d(t, "a", function () {
    return R;
  }), n.d(t, "b", function () {
    return q;
  });

  var r = function () {
    function e(e, t) {
      this.eventTarget = e, this.eventName = t, this.unorderedBindings = new Set();
    }

    return e.prototype.connect = function () {
      this.eventTarget.addEventListener(this.eventName, this, !1);
    }, e.prototype.disconnect = function () {
      this.eventTarget.removeEventListener(this.eventName, this, !1);
    }, e.prototype.bindingConnected = function (e) {
      this.unorderedBindings.add(e);
    }, e.prototype.bindingDisconnected = function (e) {
      this.unorderedBindings["delete"](e);
    }, e.prototype.handleEvent = function (e) {
      for (var t = function (e) {
        if (("immediatePropagationStopped" in e)) return e;
        var t = e.stopImmediatePropagation;
        return Object.assign(e, {
          immediatePropagationStopped: !1,
          stopImmediatePropagation: function stopImmediatePropagation() {
            this.immediatePropagationStopped = !0, t.call(this);
          }
        });
      }(e), n = 0, r = this.bindings; n < r.length; n++) {
        var o = r[n];
        if (t.immediatePropagationStopped) break;
        o.handleEvent(t);
      }
    }, Object.defineProperty(e.prototype, "bindings", {
      get: function get() {
        return Array.from(this.unorderedBindings).sort(function (e, t) {
          var n = e.index,
              r = t.index;
          return n < r ? -1 : n > r ? 1 : 0;
        });
      },
      enumerable: !0,
      configurable: !0
    }), e;
  }();

  var o = function () {
    function e(e) {
      this.application = e, this.eventListenerMaps = new Map(), this.started = !1;
    }

    return e.prototype.start = function () {
      this.started || (this.started = !0, this.eventListeners.forEach(function (e) {
        return e.connect();
      }));
    }, e.prototype.stop = function () {
      this.started && (this.started = !1, this.eventListeners.forEach(function (e) {
        return e.disconnect();
      }));
    }, Object.defineProperty(e.prototype, "eventListeners", {
      get: function get() {
        return Array.from(this.eventListenerMaps.values()).reduce(function (e, t) {
          return e.concat(Array.from(t.values()));
        }, []);
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.bindingConnected = function (e) {
      this.fetchEventListenerForBinding(e).bindingConnected(e);
    }, e.prototype.bindingDisconnected = function (e) {
      this.fetchEventListenerForBinding(e).bindingDisconnected(e);
    }, e.prototype.handleError = function (e, t, n) {
      void 0 === n && (n = {}), this.application.handleError(e, "Error " + t, n);
    }, e.prototype.fetchEventListenerForBinding = function (e) {
      var t = e.eventTarget,
          n = e.eventName;
      return this.fetchEventListener(t, n);
    }, e.prototype.fetchEventListener = function (e, t) {
      var n = this.fetchEventListenerMapForEventTarget(e),
          r = n.get(t);
      return r || (r = this.createEventListener(e, t), n.set(t, r)), r;
    }, e.prototype.createEventListener = function (e, t) {
      var n = new r(e, t);
      return this.started && n.connect(), n;
    }, e.prototype.fetchEventListenerMapForEventTarget = function (e) {
      var t = this.eventListenerMaps.get(e);
      return t || (t = new Map(), this.eventListenerMaps.set(e, t)), t;
    }, e;
  }(),
      i = /^((.+?)(@(window|document))?->)?(.+?)(#(.+))?$/;

  function s(e) {
    return "window" == e ? window : "document" == e ? document : void 0;
  }

  var a = function () {
    function e(e, t, n) {
      this.element = e, this.index = t, this.eventTarget = n.eventTarget || e, this.eventName = n.eventName || function (e) {
        var t = e.tagName.toLowerCase();
        if (t in l) return l[t](e);
      }(e) || c("missing event name"), this.identifier = n.identifier || c("missing identifier"), this.methodName = n.methodName || c("missing method name");
    }

    return e.forToken = function (e) {
      return new this(e.element, e.index, (t = e.content, {
        eventTarget: s((n = t.trim().match(i) || [])[4]),
        eventName: n[2],
        identifier: n[5],
        methodName: n[7]
      }));
      var t, n;
    }, e.prototype.toString = function () {
      var e = this.eventTargetName ? "@" + this.eventTargetName : "";
      return "" + this.eventName + e + "->" + this.identifier + "#" + this.methodName;
    }, Object.defineProperty(e.prototype, "eventTargetName", {
      get: function get() {
        return (e = this.eventTarget) == window ? "window" : e == document ? "document" : void 0;
        var e;
      },
      enumerable: !0,
      configurable: !0
    }), e;
  }(),
      l = {
    a: function a(e) {
      return "click";
    },
    button: function button(e) {
      return "click";
    },
    form: function form(e) {
      return "submit";
    },
    input: function input(e) {
      return "submit" == e.getAttribute("type") ? "click" : "change";
    },
    select: function select(e) {
      return "change";
    },
    textarea: function textarea(e) {
      return "change";
    }
  };

  function c(e) {
    throw new Error(e);
  }

  var u = function () {
    function e(e, t) {
      this.context = e, this.action = t;
    }

    return Object.defineProperty(e.prototype, "index", {
      get: function get() {
        return this.action.index;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "eventTarget", {
      get: function get() {
        return this.action.eventTarget;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "identifier", {
      get: function get() {
        return this.context.identifier;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.handleEvent = function (e) {
      this.willBeInvokedByEvent(e) && this.invokeWithEvent(e);
    }, Object.defineProperty(e.prototype, "eventName", {
      get: function get() {
        return this.action.eventName;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "method", {
      get: function get() {
        var e = this.controller[this.methodName];
        if ("function" == typeof e) return e;
        throw new Error('Action "' + this.action + '" references undefined method "' + this.methodName + '"');
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.invokeWithEvent = function (e) {
      try {
        this.method.call(this.controller, e);
      } catch (c) {
        var t = this,
            n = {
          identifier: t.identifier,
          controller: t.controller,
          element: t.element,
          index: t.index,
          event: e
        };
        this.context.handleError(c, 'invoking action "' + this.action + '"', n);
      }
    }, e.prototype.willBeInvokedByEvent = function (e) {
      var t = e.target;
      return this.element === t || !(t instanceof Element && this.element.contains(t)) || this.scope.containsElement(t);
    }, Object.defineProperty(e.prototype, "controller", {
      get: function get() {
        return this.context.controller;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "methodName", {
      get: function get() {
        return this.action.methodName;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "element", {
      get: function get() {
        return this.scope.element;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "scope", {
      get: function get() {
        return this.context.scope;
      },
      enumerable: !0,
      configurable: !0
    }), e;
  }(),
      p = function () {
    function e(e, t) {
      var n = this;
      this.element = e, this.started = !1, this.delegate = t, this.elements = new Set(), this.mutationObserver = new MutationObserver(function (e) {
        return n.processMutations(e);
      });
    }

    return e.prototype.start = function () {
      this.started || (this.started = !0, this.mutationObserver.observe(this.element, {
        attributes: !0,
        childList: !0,
        subtree: !0
      }), this.refresh());
    }, e.prototype.stop = function () {
      this.started && (this.mutationObserver.takeRecords(), this.mutationObserver.disconnect(), this.started = !1);
    }, e.prototype.refresh = function () {
      if (this.started) {
        for (var e = new Set(this.matchElementsInTree()), t = 0, n = Array.from(this.elements); t < n.length; t++) {
          var r = n[t];
          e.has(r) || this.removeElement(r);
        }

        for (var o = 0, i = Array.from(e); o < i.length; o++) {
          r = i[o];
          this.addElement(r);
        }
      }
    }, e.prototype.processMutations = function (e) {
      if (this.started) for (var t = 0, n = e; t < n.length; t++) {
        var r = n[t];
        this.processMutation(r);
      }
    }, e.prototype.processMutation = function (e) {
      "attributes" == e.type ? this.processAttributeChange(e.target, e.attributeName) : "childList" == e.type && (this.processRemovedNodes(e.removedNodes), this.processAddedNodes(e.addedNodes));
    }, e.prototype.processAttributeChange = function (e, t) {
      var n = e;
      this.elements.has(n) ? this.delegate.elementAttributeChanged && this.matchElement(n) ? this.delegate.elementAttributeChanged(n, t) : this.removeElement(n) : this.matchElement(n) && this.addElement(n);
    }, e.prototype.processRemovedNodes = function (e) {
      for (var t = 0, n = Array.from(e); t < n.length; t++) {
        var r = n[t],
            o = this.elementFromNode(r);
        o && this.processTree(o, this.removeElement);
      }
    }, e.prototype.processAddedNodes = function (e) {
      for (var t = 0, n = Array.from(e); t < n.length; t++) {
        var r = n[t],
            o = this.elementFromNode(r);
        o && this.elementIsActive(o) && this.processTree(o, this.addElement);
      }
    }, e.prototype.matchElement = function (e) {
      return this.delegate.matchElement(e);
    }, e.prototype.matchElementsInTree = function (e) {
      return void 0 === e && (e = this.element), this.delegate.matchElementsInTree(e);
    }, e.prototype.processTree = function (e, t) {
      for (var n = 0, r = this.matchElementsInTree(e); n < r.length; n++) {
        var o = r[n];
        t.call(this, o);
      }
    }, e.prototype.elementFromNode = function (e) {
      if (e.nodeType == Node.ELEMENT_NODE) return e;
    }, e.prototype.elementIsActive = function (e) {
      return e.isConnected == this.element.isConnected && this.element.contains(e);
    }, e.prototype.addElement = function (e) {
      this.elements.has(e) || this.elementIsActive(e) && (this.elements.add(e), this.delegate.elementMatched && this.delegate.elementMatched(e));
    }, e.prototype.removeElement = function (e) {
      this.elements.has(e) && (this.elements["delete"](e), this.delegate.elementUnmatched && this.delegate.elementUnmatched(e));
    }, e;
  }(),
      h = function () {
    function e(e, t, n) {
      this.attributeName = t, this.delegate = n, this.elementObserver = new p(e, this);
    }

    return Object.defineProperty(e.prototype, "element", {
      get: function get() {
        return this.elementObserver.element;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "selector", {
      get: function get() {
        return "[" + this.attributeName + "]";
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.start = function () {
      this.elementObserver.start();
    }, e.prototype.stop = function () {
      this.elementObserver.stop();
    }, e.prototype.refresh = function () {
      this.elementObserver.refresh();
    }, Object.defineProperty(e.prototype, "started", {
      get: function get() {
        return this.elementObserver.started;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.matchElement = function (e) {
      return e.hasAttribute(this.attributeName);
    }, e.prototype.matchElementsInTree = function (e) {
      var t = this.matchElement(e) ? [e] : [],
          n = Array.from(e.querySelectorAll(this.selector));
      return t.concat(n);
    }, e.prototype.elementMatched = function (e) {
      this.delegate.elementMatchedAttribute && this.delegate.elementMatchedAttribute(e, this.attributeName);
    }, e.prototype.elementUnmatched = function (e) {
      this.delegate.elementUnmatchedAttribute && this.delegate.elementUnmatchedAttribute(e, this.attributeName);
    }, e.prototype.elementAttributeChanged = function (e, t) {
      this.delegate.elementAttributeValueChanged && this.attributeName == t && this.delegate.elementAttributeValueChanged(e, t);
    }, e;
  }();

  function d(e, t, n) {
    m(e, t).add(n);
  }

  function f(e, t, n) {
    m(e, t)["delete"](n), function (e, t) {
      var n = e.get(t);
      null != n && 0 == n.size && e["delete"](t);
    }(e, t);
  }

  function m(e, t) {
    var n = e.get(t);
    return n || (n = new Set(), e.set(t, n)), n;
  }

  var g,
      y = function () {
    function e() {
      this.valuesByKey = new Map();
    }

    return Object.defineProperty(e.prototype, "values", {
      get: function get() {
        return Array.from(this.valuesByKey.values()).reduce(function (e, t) {
          return e.concat(Array.from(t));
        }, []);
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "size", {
      get: function get() {
        return Array.from(this.valuesByKey.values()).reduce(function (e, t) {
          return e + t.size;
        }, 0);
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.add = function (e, t) {
      d(this.valuesByKey, e, t);
    }, e.prototype["delete"] = function (e, t) {
      f(this.valuesByKey, e, t);
    }, e.prototype.has = function (e, t) {
      var n = this.valuesByKey.get(e);
      return null != n && n.has(t);
    }, e.prototype.hasKey = function (e) {
      return this.valuesByKey.has(e);
    }, e.prototype.hasValue = function (e) {
      return Array.from(this.valuesByKey.values()).some(function (t) {
        return t.has(e);
      });
    }, e.prototype.getValuesForKey = function (e) {
      var t = this.valuesByKey.get(e);
      return t ? Array.from(t) : [];
    }, e.prototype.getKeysForValue = function (e) {
      return Array.from(this.valuesByKey).filter(function (t) {
        t[0];
        return t[1].has(e);
      }).map(function (e) {
        var t = e[0];
        e[1];
        return t;
      });
    }, e;
  }(),
      v = (g = Object.setPrototypeOf || {
    __proto__: []
  } instanceof Array && function (e, t) {
    e.__proto__ = t;
  } || function (e, t) {
    for (var n in t) {
      t.hasOwnProperty(n) && (e[n] = t[n]);
    }
  }, function (e, t) {
    function n() {
      this.constructor = e;
    }

    g(e, t), e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype, new n());
  }),
      b = (function (e) {
    function t() {
      var t = e.call(this) || this;
      return t.keysByValue = new Map(), t;
    }

    v(t, e), Object.defineProperty(t.prototype, "values", {
      get: function get() {
        return Array.from(this.keysByValue.keys());
      },
      enumerable: !0,
      configurable: !0
    }), t.prototype.add = function (t, n) {
      e.prototype.add.call(this, t, n), d(this.keysByValue, n, t);
    }, t.prototype["delete"] = function (t, n) {
      e.prototype["delete"].call(this, t, n), f(this.keysByValue, n, t);
    }, t.prototype.hasValue = function (e) {
      return this.keysByValue.has(e);
    }, t.prototype.getKeysForValue = function (e) {
      var t = this.keysByValue.get(e);
      return t ? Array.from(t) : [];
    };
  }(y), function () {
    function e(e, t, n) {
      this.attributeObserver = new h(e, t, this), this.delegate = n, this.tokensByElement = new y();
    }

    return Object.defineProperty(e.prototype, "started", {
      get: function get() {
        return this.attributeObserver.started;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.start = function () {
      this.attributeObserver.start();
    }, e.prototype.stop = function () {
      this.attributeObserver.stop();
    }, e.prototype.refresh = function () {
      this.attributeObserver.refresh();
    }, Object.defineProperty(e.prototype, "element", {
      get: function get() {
        return this.attributeObserver.element;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "attributeName", {
      get: function get() {
        return this.attributeObserver.attributeName;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.elementMatchedAttribute = function (e) {
      this.tokensMatched(this.readTokensForElement(e));
    }, e.prototype.elementAttributeValueChanged = function (e) {
      var t = this.refreshTokensForElement(e),
          n = t[0],
          r = t[1];
      this.tokensUnmatched(n), this.tokensMatched(r);
    }, e.prototype.elementUnmatchedAttribute = function (e) {
      this.tokensUnmatched(this.tokensByElement.getValuesForKey(e));
    }, e.prototype.tokensMatched = function (e) {
      var t = this;
      e.forEach(function (e) {
        return t.tokenMatched(e);
      });
    }, e.prototype.tokensUnmatched = function (e) {
      var t = this;
      e.forEach(function (e) {
        return t.tokenUnmatched(e);
      });
    }, e.prototype.tokenMatched = function (e) {
      this.delegate.tokenMatched(e), this.tokensByElement.add(e.element, e);
    }, e.prototype.tokenUnmatched = function (e) {
      this.delegate.tokenUnmatched(e), this.tokensByElement["delete"](e.element, e);
    }, e.prototype.refreshTokensForElement = function (e) {
      var t,
          n,
          r,
          o = this.tokensByElement.getValuesForKey(e),
          i = this.readTokensForElement(e),
          s = (t = o, n = i, r = Math.max(t.length, n.length), Array.from({
        length: r
      }, function (e, r) {
        return [t[r], n[r]];
      })).findIndex(function (e) {
        return !function (e, t) {
          return e && t && e.index == t.index && e.content == t.content;
        }(e[0], e[1]);
      });
      return -1 == s ? [[], []] : [o.slice(s), i.slice(s)];
    }, e.prototype.readTokensForElement = function (e) {
      var t = this.attributeName;
      return function (e, t, n) {
        return e.trim().split(/\s+/).filter(function (e) {
          return e.length;
        }).map(function (e, r) {
          return {
            element: t,
            attributeName: n,
            content: e,
            index: r
          };
        });
      }(e.getAttribute(t) || "", e, t);
    }, e;
  }());

  var w = function () {
    function e(e, t, n) {
      this.tokenListObserver = new b(e, t, this), this.delegate = n, this.parseResultsByToken = new WeakMap(), this.valuesByTokenByElement = new WeakMap();
    }

    return Object.defineProperty(e.prototype, "started", {
      get: function get() {
        return this.tokenListObserver.started;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.start = function () {
      this.tokenListObserver.start();
    }, e.prototype.stop = function () {
      this.tokenListObserver.stop();
    }, e.prototype.refresh = function () {
      this.tokenListObserver.refresh();
    }, Object.defineProperty(e.prototype, "element", {
      get: function get() {
        return this.tokenListObserver.element;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "attributeName", {
      get: function get() {
        return this.tokenListObserver.attributeName;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.tokenMatched = function (e) {
      var t = e.element,
          n = this.fetchParseResultForToken(e).value;
      n && (this.fetchValuesByTokenForElement(t).set(e, n), this.delegate.elementMatchedValue(t, n));
    }, e.prototype.tokenUnmatched = function (e) {
      var t = e.element,
          n = this.fetchParseResultForToken(e).value;
      n && (this.fetchValuesByTokenForElement(t)["delete"](e), this.delegate.elementUnmatchedValue(t, n));
    }, e.prototype.fetchParseResultForToken = function (e) {
      var t = this.parseResultsByToken.get(e);
      return t || (t = this.parseToken(e), this.parseResultsByToken.set(e, t)), t;
    }, e.prototype.fetchValuesByTokenForElement = function (e) {
      var t = this.valuesByTokenByElement.get(e);
      return t || (t = new Map(), this.valuesByTokenByElement.set(e, t)), t;
    }, e.prototype.parseToken = function (e) {
      try {
        return {
          value: this.delegate.parseValueForToken(e)
        };
      } catch (c) {
        return {
          error: c
        };
      }
    }, e;
  }(),
      E = function () {
    function e(e, t) {
      this.context = e, this.delegate = t, this.bindingsByAction = new Map();
    }

    return e.prototype.start = function () {
      this.valueListObserver || (this.valueListObserver = new w(this.element, this.actionAttribute, this), this.valueListObserver.start());
    }, e.prototype.stop = function () {
      this.valueListObserver && (this.valueListObserver.stop(), delete this.valueListObserver, this.disconnectAllActions());
    }, Object.defineProperty(e.prototype, "element", {
      get: function get() {
        return this.context.element;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "identifier", {
      get: function get() {
        return this.context.identifier;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "actionAttribute", {
      get: function get() {
        return this.schema.actionAttribute;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "schema", {
      get: function get() {
        return this.context.schema;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "bindings", {
      get: function get() {
        return Array.from(this.bindingsByAction.values());
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.connectAction = function (e) {
      var t = new u(this.context, e);
      this.bindingsByAction.set(e, t), this.delegate.bindingConnected(t);
    }, e.prototype.disconnectAction = function (e) {
      var t = this.bindingsByAction.get(e);
      t && (this.bindingsByAction["delete"](e), this.delegate.bindingDisconnected(t));
    }, e.prototype.disconnectAllActions = function () {
      var e = this;
      this.bindings.forEach(function (t) {
        return e.delegate.bindingDisconnected(t);
      }), this.bindingsByAction.clear();
    }, e.prototype.parseValueForToken = function (e) {
      var t = a.forToken(e);
      if (t.identifier == this.identifier) return t;
    }, e.prototype.elementMatchedValue = function (e, t) {
      this.connectAction(t);
    }, e.prototype.elementUnmatchedValue = function (e, t) {
      this.disconnectAction(t);
    }, e;
  }(),
      _ = function () {
    function e(e, t) {
      this.module = e, this.scope = t, this.controller = new e.controllerConstructor(this), this.bindingObserver = new E(this, this.dispatcher);

      try {
        this.controller.initialize();
      } catch (c) {
        this.handleError(c, "initializing controller");
      }
    }

    return e.prototype.connect = function () {
      this.bindingObserver.start();

      try {
        this.controller.connect();
      } catch (c) {
        this.handleError(c, "connecting controller");
      }
    }, e.prototype.disconnect = function () {
      try {
        this.controller.disconnect();
      } catch (c) {
        this.handleError(c, "disconnecting controller");
      }

      this.bindingObserver.stop();
    }, Object.defineProperty(e.prototype, "application", {
      get: function get() {
        return this.module.application;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "identifier", {
      get: function get() {
        return this.module.identifier;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "schema", {
      get: function get() {
        return this.application.schema;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "dispatcher", {
      get: function get() {
        return this.application.dispatcher;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "element", {
      get: function get() {
        return this.scope.element;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "parentElement", {
      get: function get() {
        return this.element.parentElement;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.handleError = function (e, t, n) {
      void 0 === n && (n = {});
      var r = this,
          o = r.identifier,
          i = r.controller,
          s = r.element;
      n = Object.assign({
        identifier: o,
        controller: i,
        element: s
      }, n), this.application.handleError(e, "Error " + t, n);
    }, e;
  }(),
      x = function () {
    var e = Object.setPrototypeOf || {
      __proto__: []
    } instanceof Array && function (e, t) {
      e.__proto__ = t;
    } || function (e, t) {
      for (var n in t) {
        t.hasOwnProperty(n) && (e[n] = t[n]);
      }
    };

    return function (t, n) {
      function r() {
        this.constructor = t;
      }

      e(t, n), t.prototype = null === n ? Object.create(n) : (r.prototype = n.prototype, new r());
    };
  }();

  function S(e) {
    var t = T(e);
    return t.bless(), t;
  }

  var T = function () {
    function e(e) {
      function t() {
        var n = this && this instanceof t ? this.constructor : void 0;
        return Reflect.construct(e, arguments, n);
      }

      return t.prototype = Object.create(e.prototype, {
        constructor: {
          value: t
        }
      }), Reflect.setPrototypeOf(t, e), t;
    }

    try {
      return (t = e(function () {
        this.a.call(this);
      })).prototype.a = function () {}, new t(), e;
    } catch (c) {
      return function (e) {
        return function (e) {
          function t() {
            return null !== e && e.apply(this, arguments) || this;
          }

          return x(t, e), t;
        }(e);
      };
    }

    var t;
  }(),
      C = function () {
    function e(e, t) {
      this.application = e, this.definition = function (e) {
        return {
          identifier: e.identifier,
          controllerConstructor: S(e.controllerConstructor)
        };
      }(t), this.contextsByScope = new WeakMap(), this.connectedContexts = new Set();
    }

    return Object.defineProperty(e.prototype, "identifier", {
      get: function get() {
        return this.definition.identifier;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "controllerConstructor", {
      get: function get() {
        return this.definition.controllerConstructor;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "contexts", {
      get: function get() {
        return Array.from(this.connectedContexts);
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.connectContextForScope = function (e) {
      var t = this.fetchContextForScope(e);
      this.connectedContexts.add(t), t.connect();
    }, e.prototype.disconnectContextForScope = function (e) {
      var t = this.contextsByScope.get(e);
      t && (this.connectedContexts["delete"](t), t.disconnect());
    }, e.prototype.fetchContextForScope = function (e) {
      var t = this.contextsByScope.get(e);
      return t || (t = new _(this, e), this.contextsByScope.set(e, t)), t;
    }, e;
  }(),
      A = function () {
    function e(e) {
      this.scope = e;
    }

    return Object.defineProperty(e.prototype, "element", {
      get: function get() {
        return this.scope.element;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "identifier", {
      get: function get() {
        return this.scope.identifier;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.get = function (e) {
      return e = this.getFormattedKey(e), this.element.getAttribute(e);
    }, e.prototype.set = function (e, t) {
      return e = this.getFormattedKey(e), this.element.setAttribute(e, t), this.get(e);
    }, e.prototype.has = function (e) {
      return e = this.getFormattedKey(e), this.element.hasAttribute(e);
    }, e.prototype["delete"] = function (e) {
      return !!this.has(e) && (e = this.getFormattedKey(e), this.element.removeAttribute(e), !0);
    }, e.prototype.getFormattedKey = function (e) {
      return "data-" + this.identifier + "-" + e.replace(/([A-Z])/g, function (e, t) {
        return "-" + t.toLowerCase();
      });
    }, e;
  }();

  function k(e, t) {
    return "[" + e + '~="' + t + '"]';
  }

  var O = function () {
    function e(e) {
      this.scope = e;
    }

    return Object.defineProperty(e.prototype, "element", {
      get: function get() {
        return this.scope.element;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "identifier", {
      get: function get() {
        return this.scope.identifier;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "schema", {
      get: function get() {
        return this.scope.schema;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.has = function (e) {
      return null != this.find(e);
    }, e.prototype.find = function () {
      for (var e = [], t = 0; t < arguments.length; t++) {
        e[t] = arguments[t];
      }

      var n = this.getSelectorForTargetNames(e);
      return this.scope.findElement(n);
    }, e.prototype.findAll = function () {
      for (var e = [], t = 0; t < arguments.length; t++) {
        e[t] = arguments[t];
      }

      var n = this.getSelectorForTargetNames(e);
      return this.scope.findAllElements(n);
    }, e.prototype.getSelectorForTargetNames = function (e) {
      var t = this;
      return e.map(function (e) {
        return t.getSelectorForTargetName(e);
      }).join(", ");
    }, e.prototype.getSelectorForTargetName = function (e) {
      var t = this.identifier + "." + e;
      return k(this.schema.targetAttribute, t);
    }, e;
  }(),
      D = function () {
    function e(e, t, n) {
      this.schema = e, this.identifier = t, this.element = n, this.targets = new O(this), this.data = new A(this);
    }

    return e.prototype.findElement = function (e) {
      return this.findAllElements(e)[0];
    }, e.prototype.findAllElements = function (e) {
      var t = this.element.matches(e) ? [this.element] : [],
          n = this.filterElements(Array.from(this.element.querySelectorAll(e)));
      return t.concat(n);
    }, e.prototype.filterElements = function (e) {
      var t = this;
      return e.filter(function (e) {
        return t.containsElement(e);
      });
    }, e.prototype.containsElement = function (e) {
      return e.closest(this.controllerSelector) === this.element;
    }, Object.defineProperty(e.prototype, "controllerSelector", {
      get: function get() {
        return k(this.schema.controllerAttribute, this.identifier);
      },
      enumerable: !0,
      configurable: !0
    }), e;
  }(),
      L = function () {
    function e(e, t, n) {
      this.element = e, this.schema = t, this.delegate = n, this.valueListObserver = new w(this.element, this.controllerAttribute, this), this.scopesByIdentifierByElement = new WeakMap(), this.scopeReferenceCounts = new WeakMap();
    }

    return e.prototype.start = function () {
      this.valueListObserver.start();
    }, e.prototype.stop = function () {
      this.valueListObserver.stop();
    }, Object.defineProperty(e.prototype, "controllerAttribute", {
      get: function get() {
        return this.schema.controllerAttribute;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.parseValueForToken = function (e) {
      var t = e.element,
          n = e.content,
          r = this.fetchScopesByIdentifierForElement(t),
          o = r.get(n);
      return o || (o = new D(this.schema, n, t), r.set(n, o)), o;
    }, e.prototype.elementMatchedValue = function (e, t) {
      var n = (this.scopeReferenceCounts.get(t) || 0) + 1;
      this.scopeReferenceCounts.set(t, n), 1 == n && this.delegate.scopeConnected(t);
    }, e.prototype.elementUnmatchedValue = function (e, t) {
      var n = this.scopeReferenceCounts.get(t);
      n && (this.scopeReferenceCounts.set(t, n - 1), 1 == n && this.delegate.scopeDisconnected(t));
    }, e.prototype.fetchScopesByIdentifierForElement = function (e) {
      var t = this.scopesByIdentifierByElement.get(e);
      return t || (t = new Map(), this.scopesByIdentifierByElement.set(e, t)), t;
    }, e;
  }(),
      N = function () {
    function e(e) {
      this.application = e, this.scopeObserver = new L(this.element, this.schema, this), this.scopesByIdentifier = new y(), this.modulesByIdentifier = new Map();
    }

    return Object.defineProperty(e.prototype, "element", {
      get: function get() {
        return this.application.element;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "schema", {
      get: function get() {
        return this.application.schema;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "controllerAttribute", {
      get: function get() {
        return this.schema.controllerAttribute;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "modules", {
      get: function get() {
        return Array.from(this.modulesByIdentifier.values());
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "contexts", {
      get: function get() {
        return this.modules.reduce(function (e, t) {
          return e.concat(t.contexts);
        }, []);
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.start = function () {
      this.scopeObserver.start();
    }, e.prototype.stop = function () {
      this.scopeObserver.stop();
    }, e.prototype.loadDefinition = function (e) {
      this.unloadIdentifier(e.identifier);
      var t = new C(this.application, e);
      this.connectModule(t);
    }, e.prototype.unloadIdentifier = function (e) {
      var t = this.modulesByIdentifier.get(e);
      t && this.disconnectModule(t);
    }, e.prototype.getContextForElementAndIdentifier = function (e, t) {
      var n = this.modulesByIdentifier.get(t);
      if (n) return n.contexts.find(function (t) {
        return t.element == e;
      });
    }, e.prototype.handleError = function (e, t, n) {
      this.application.handleError(e, t, n);
    }, e.prototype.scopeConnected = function (e) {
      this.scopesByIdentifier.add(e.identifier, e);
      var t = this.modulesByIdentifier.get(e.identifier);
      t && t.connectContextForScope(e);
    }, e.prototype.scopeDisconnected = function (e) {
      this.scopesByIdentifier["delete"](e.identifier, e);
      var t = this.modulesByIdentifier.get(e.identifier);
      t && t.disconnectContextForScope(e);
    }, e.prototype.connectModule = function (e) {
      this.modulesByIdentifier.set(e.identifier, e), this.scopesByIdentifier.getValuesForKey(e.identifier).forEach(function (t) {
        return e.connectContextForScope(t);
      });
    }, e.prototype.disconnectModule = function (e) {
      this.modulesByIdentifier["delete"](e.identifier), this.scopesByIdentifier.getValuesForKey(e.identifier).forEach(function (t) {
        return e.disconnectContextForScope(t);
      });
    }, e;
  }(),
      P = {
    controllerAttribute: "data-controller",
    actionAttribute: "data-action",
    targetAttribute: "data-target"
  },
      j = function j(e, t, n, r) {
    return new (n || (n = Promise))(function (o, i) {
      function s(e) {
        try {
          l(r.next(e));
        } catch (t) {
          i(t);
        }
      }

      function a(e) {
        try {
          l(r["throw"](e));
        } catch (t) {
          i(t);
        }
      }

      function l(e) {
        e.done ? o(e.value) : new n(function (t) {
          t(e.value);
        }).then(s, a);
      }

      l((r = r.apply(e, t || [])).next());
    });
  },
      I = function I(e, t) {
    var n,
        r,
        o,
        i,
        s = {
      label: 0,
      sent: function sent() {
        if (1 & o[0]) throw o[1];
        return o[1];
      },
      trys: [],
      ops: []
    };
    return i = {
      next: a(0),
      "throw": a(1),
      "return": a(2)
    }, "function" === typeof Symbol && (i[Symbol.iterator] = function () {
      return this;
    }), i;

    function a(i) {
      return function (a) {
        return function (i) {
          if (n) throw new TypeError("Generator is already executing.");

          for (; s;) {
            try {
              if (n = 1, r && (o = r[2 & i[0] ? "return" : i[0] ? "throw" : "next"]) && !(o = o.call(r, i[1])).done) return o;

              switch (r = 0, o && (i = [0, o.value]), i[0]) {
                case 0:
                case 1:
                  o = i;
                  break;

                case 4:
                  return s.label++, {
                    value: i[1],
                    done: !1
                  };

                case 5:
                  s.label++, r = i[1], i = [0];
                  continue;

                case 7:
                  i = s.ops.pop(), s.trys.pop();
                  continue;

                default:
                  if (!(o = (o = s.trys).length > 0 && o[o.length - 1]) && (6 === i[0] || 2 === i[0])) {
                    s = 0;
                    continue;
                  }

                  if (3 === i[0] && (!o || i[1] > o[0] && i[1] < o[3])) {
                    s.label = i[1];
                    break;
                  }

                  if (6 === i[0] && s.label < o[1]) {
                    s.label = o[1], o = i;
                    break;
                  }

                  if (o && s.label < o[2]) {
                    s.label = o[2], s.ops.push(i);
                    break;
                  }

                  o[2] && s.ops.pop(), s.trys.pop();
                  continue;
              }

              i = t.call(e, s);
            } catch (a) {
              i = [6, a], r = 0;
            } finally {
              n = o = 0;
            }
          }

          if (5 & i[0]) throw i[1];
          return {
            value: i[0] ? i[1] : void 0,
            done: !0
          };
        }([i, a]);
      };
    }
  },
      R = function () {
    function e(e, t) {
      void 0 === e && (e = document.documentElement), void 0 === t && (t = P), this.element = e, this.schema = t, this.dispatcher = new o(this), this.router = new N(this);
    }

    return e.start = function (t, n) {
      var r = new e(t, n);
      return r.start(), r;
    }, e.prototype.start = function () {
      return j(this, void 0, void 0, function () {
        return I(this, function (e) {
          switch (e.label) {
            case 0:
              return [4, new Promise(function (e) {
                "loading" == document.readyState ? document.addEventListener("DOMContentLoaded", e) : e();
              })];

            case 1:
              return e.sent(), this.router.start(), this.dispatcher.start(), [2];
          }
        });
      });
    }, e.prototype.stop = function () {
      this.router.stop(), this.dispatcher.stop();
    }, e.prototype.register = function (e, t) {
      this.load({
        identifier: e,
        controllerConstructor: t
      });
    }, e.prototype.load = function (e) {
      for (var t = this, n = [], r = 1; r < arguments.length; r++) {
        n[r - 1] = arguments[r];
      }

      var o = Array.isArray(e) ? e : [e].concat(n);
      o.forEach(function (e) {
        return t.router.loadDefinition(e);
      });
    }, e.prototype.unload = function (e) {
      for (var t = this, n = [], r = 1; r < arguments.length; r++) {
        n[r - 1] = arguments[r];
      }

      var o = Array.isArray(e) ? e : [e].concat(n);
      o.forEach(function (e) {
        return t.router.unloadIdentifier(e);
      });
    }, Object.defineProperty(e.prototype, "controllers", {
      get: function get() {
        return this.router.contexts.map(function (e) {
          return e.controller;
        });
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.getControllerForElementAndIdentifier = function (e, t) {
      var n = this.router.getContextForElementAndIdentifier(e, t);
      return n ? n.controller : null;
    }, e.prototype.handleError = function (e, t, n) {
      console.error("%s\n\n%o\n\n%o", t, e, n);
    }, e;
  }();

  function $(e) {
    var t = e.prototype;
    (function (e) {
      var t = function (e) {
        var t = [];

        for (; e;) {
          t.push(e), e = Object.getPrototypeOf(e);
        }

        return t;
      }(e);

      return Array.from(t.reduce(function (e, t) {
        return function (e) {
          var t = e.targets;
          return Array.isArray(t) ? t : [];
        }(t).forEach(function (t) {
          return e.add(t);
        }), e;
      }, new Set()));
    })(e).forEach(function (e) {
      var n, r, o;
      return r = t, (n = {})[e + "Target"] = {
        get: function get() {
          var t = this.targets.find(e);
          if (t) return t;
          throw new Error('Missing target element "' + this.identifier + "." + e + '"');
        }
      }, n[e + "Targets"] = {
        get: function get() {
          return this.targets.findAll(e);
        }
      }, n["has" + function (e) {
        return e.charAt(0).toUpperCase() + e.slice(1);
      }(e) + "Target"] = {
        get: function get() {
          return this.targets.has(e);
        }
      }, o = n, void Object.keys(o).forEach(function (e) {
        if (!(e in r)) {
          var t = o[e];
          Object.defineProperty(r, e, t);
        }
      });
    });
  }

  var q = function () {
    function e(e) {
      this.context = e;
    }

    return e.bless = function () {
      $(this);
    }, Object.defineProperty(e.prototype, "application", {
      get: function get() {
        return this.context.application;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "scope", {
      get: function get() {
        return this.context.scope;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "element", {
      get: function get() {
        return this.scope.element;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "identifier", {
      get: function get() {
        return this.scope.identifier;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "targets", {
      get: function get() {
        return this.scope.targets;
      },
      enumerable: !0,
      configurable: !0
    }), Object.defineProperty(e.prototype, "data", {
      get: function get() {
        return this.scope.data;
      },
      enumerable: !0,
      configurable: !0
    }), e.prototype.initialize = function () {}, e.prototype.connect = function () {}, e.prototype.disconnect = function () {}, e.targets = [], e;
  }();
}, function (e, t, n) {
  "use strict";

  var r = n(0),
      o = n.n(r),
      i = "transitionend";

  function s(e) {
    var t = this,
        n = !1;
    return o()(this).one(a.TRANSITION_END, function () {
      n = !0;
    }), setTimeout(function () {
      n || a.triggerTransitionEnd(t);
    }, e), this;
  }

  var a = {
    TRANSITION_END: "bsTransitionEnd",
    getUID: function getUID(e) {
      do {
        e += ~~(1e6 * Math.random());
      } while (document.getElementById(e));

      return e;
    },
    getSelectorFromElement: function getSelectorFromElement(e) {
      var t = e.getAttribute("data-target");

      if (!t || "#" === t) {
        var n = e.getAttribute("href");
        t = n && "#" !== n ? n.trim() : "";
      }

      try {
        return document.querySelector(t) ? t : null;
      } catch (r) {
        return null;
      }
    },
    getTransitionDurationFromElement: function getTransitionDurationFromElement(e) {
      if (!e) return 0;
      var t = o()(e).css("transition-duration"),
          n = o()(e).css("transition-delay"),
          r = parseFloat(t),
          i = parseFloat(n);
      return r || i ? (t = t.split(",")[0], n = n.split(",")[0], 1e3 * (parseFloat(t) + parseFloat(n))) : 0;
    },
    reflow: function reflow(e) {
      return e.offsetHeight;
    },
    triggerTransitionEnd: function triggerTransitionEnd(e) {
      o()(e).trigger(i);
    },
    supportsTransitionEnd: function supportsTransitionEnd() {
      return Boolean(i);
    },
    isElement: function isElement(e) {
      return (e[0] || e).nodeType;
    },
    typeCheckConfig: function typeCheckConfig(e, t, n) {
      for (var r in n) {
        if (Object.prototype.hasOwnProperty.call(n, r)) {
          var o = n[r],
              i = t[r],
              s = i && a.isElement(i) ? "element" : null === (l = i) || "undefined" === typeof l ? "".concat(l) : {}.toString.call(l).match(/\s([a-z]+)/i)[1].toLowerCase();
          if (!new RegExp(o).test(s)) throw new Error("".concat(e.toUpperCase(), ": ") + 'Option "'.concat(r, '" provided type "').concat(s, '" ') + 'but expected type "'.concat(o, '".'));
        }
      }

      var l;
    },
    findShadowRoot: function findShadowRoot(e) {
      if (!document.documentElement.attachShadow) return null;

      if ("function" === typeof e.getRootNode) {
        var t = e.getRootNode();
        return t instanceof ShadowRoot ? t : null;
      }

      return e instanceof ShadowRoot ? e : e.parentNode ? a.findShadowRoot(e.parentNode) : null;
    },
    jQueryDetection: function jQueryDetection() {
      if ("undefined" === typeof o.a) throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");
      var e = o.a.fn.jquery.split(" ")[0].split(".");
      if (e[0] < 2 && e[1] < 9 || 1 === e[0] && 9 === e[1] && e[2] < 1 || e[0] >= 4) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0");
    }
  };
  a.jQueryDetection(), o.a.fn.emulateTransitionEnd = s, o.a.event.special[a.TRANSITION_END] = {
    bindType: i,
    delegateType: i,
    handle: function handle(e) {
      if (o()(e.target).is(this)) return e.handleObj.handler.apply(this, arguments);
    }
  }, t.a = a;
},,, function (e, t, n) {
  "use strict";

  var r = ["background", "cite", "href", "itemtype", "longdesc", "poster", "src", "xlink:href"],
      o = {
    "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i],
    a: ["target", "href", "title", "rel"],
    area: [],
    b: [],
    br: [],
    col: [],
    code: [],
    div: [],
    em: [],
    hr: [],
    h1: [],
    h2: [],
    h3: [],
    h4: [],
    h5: [],
    h6: [],
    i: [],
    img: ["src", "srcset", "alt", "title", "width", "height"],
    li: [],
    ol: [],
    p: [],
    pre: [],
    s: [],
    small: [],
    span: [],
    sub: [],
    sup: [],
    strong: [],
    u: [],
    ul: []
  },
      i = /^(?:(?:https?|mailto|ftp|tel|file):|[^#&/:?]*(?:[#/?]|$))/gi,
      s = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i;

  function a(e, t, n) {
    if (0 === e.length) return e;
    if (n && "function" === typeof n) return n(e);

    for (var o = new window.DOMParser().parseFromString(e, "text/html"), a = Object.keys(t), l = [].slice.call(o.body.querySelectorAll("*")), c = function c(e, n) {
      var o = l[e],
          c = o.nodeName.toLowerCase();
      if (-1 === a.indexOf(o.nodeName.toLowerCase())) return o.parentNode.removeChild(o), "continue";
      var u = [].slice.call(o.attributes),
          p = [].concat(t["*"] || [], t[c] || []);
      u.forEach(function (e) {
        (function (e, t) {
          var n = e.nodeName.toLowerCase();
          if (-1 !== t.indexOf(n)) return -1 === r.indexOf(n) || Boolean(e.nodeValue.match(i) || e.nodeValue.match(s));

          for (var o = t.filter(function (e) {
            return e instanceof RegExp;
          }), a = 0, l = o.length; a < l; a++) {
            if (n.match(o[a])) return !0;
          }

          return !1;
        })(e, p) || o.removeAttribute(e.nodeName);
      });
    }, u = 0, p = l.length; u < p; u++) {
      c(u);
    }

    return o.body.innerHTML;
  }

  var l = n(0),
      c = n.n(l),
      u = n(15),
      p = n(2);

  function h(e, t) {
    var n = Object.keys(e);

    if (Object.getOwnPropertySymbols) {
      var r = Object.getOwnPropertySymbols(e);
      t && (r = r.filter(function (t) {
        return Object.getOwnPropertyDescriptor(e, t).enumerable;
      })), n.push.apply(n, r);
    }

    return n;
  }

  function d(e) {
    for (var t = 1; t < arguments.length; t++) {
      var n = null != arguments[t] ? arguments[t] : {};
      t % 2 ? h(Object(n), !0).forEach(function (t) {
        f(e, t, n[t]);
      }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : h(Object(n)).forEach(function (t) {
        Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t));
      });
    }

    return e;
  }

  function f(e, t, n) {
    return t in e ? Object.defineProperty(e, t, {
      value: n,
      enumerable: !0,
      configurable: !0,
      writable: !0
    }) : e[t] = n, e;
  }

  function m(e) {
    return (m = "function" === typeof Symbol && "symbol" === _typeof(Symbol.iterator) ? function (e) {
      return _typeof(e);
    } : function (e) {
      return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : _typeof(e);
    })(e);
  }

  function g(e, t) {
    for (var n = 0; n < t.length; n++) {
      var r = t[n];
      r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r);
    }
  }

  var y = "tooltip",
      v = "bs.tooltip",
      b = ".".concat(v),
      w = c.a.fn[y],
      E = "bs-tooltip",
      _ = new RegExp("(^|\\s)".concat(E, "\\S+"), "g"),
      x = ["sanitize", "whiteList", "sanitizeFn"],
      S = {
    animation: "boolean",
    template: "string",
    title: "(string|element|function)",
    trigger: "string",
    delay: "(number|object)",
    html: "boolean",
    selector: "(string|boolean)",
    placement: "(string|function)",
    offset: "(number|string|function)",
    container: "(string|element|boolean)",
    fallbackPlacement: "(string|array)",
    boundary: "(string|element)",
    customClass: "(string|function)",
    sanitize: "boolean",
    sanitizeFn: "(null|function)",
    whiteList: "object",
    popperConfig: "(null|object)"
  },
      T = {
    AUTO: "auto",
    TOP: "top",
    RIGHT: "right",
    BOTTOM: "bottom",
    LEFT: "left"
  },
      C = {
    animation: !0,
    template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
    trigger: "hover focus",
    title: "",
    delay: 0,
    html: !1,
    selector: !1,
    placement: "top",
    offset: 0,
    container: !1,
    fallbackPlacement: "flip",
    boundary: "scrollParent",
    customClass: "",
    sanitize: !0,
    sanitizeFn: null,
    whiteList: o,
    popperConfig: null
  },
      A = "show",
      k = "out",
      O = {
    HIDE: "hide".concat(b),
    HIDDEN: "hidden".concat(b),
    SHOW: "show".concat(b),
    SHOWN: "shown".concat(b),
    INSERTED: "inserted".concat(b),
    CLICK: "click".concat(b),
    FOCUSIN: "focusin".concat(b),
    FOCUSOUT: "focusout".concat(b),
    MOUSEENTER: "mouseenter".concat(b),
    MOUSELEAVE: "mouseleave".concat(b)
  },
      D = "fade",
      L = "show",
      N = "hover",
      P = "focus",
      j = function () {
    function e(t, n) {
      if (function (e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function");
      }(this, e), "undefined" === typeof u.a) throw new TypeError("Bootstrap's tooltips require Popper (https://popper.js.org)");
      this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._popper = null, this.element = t, this.config = this._getConfig(n), this.tip = null, this._setListeners();
    }

    var t, n, r;
    return t = e, r = [{
      key: "_jQueryInterface",
      value: function value(t) {
        return this.each(function () {
          var n = c()(this),
              r = n.data(v),
              o = "object" === m(t) && t;

          if ((r || !/dispose|hide/.test(t)) && (r || (r = new e(this, o), n.data(v, r)), "string" === typeof t)) {
            if ("undefined" === typeof r[t]) throw new TypeError('No method named "'.concat(t, '"'));
            r[t]();
          }
        });
      }
    }, {
      key: "VERSION",
      get: function get() {
        return "4.6.0";
      }
    }, {
      key: "Default",
      get: function get() {
        return C;
      }
    }, {
      key: "NAME",
      get: function get() {
        return y;
      }
    }, {
      key: "DATA_KEY",
      get: function get() {
        return v;
      }
    }, {
      key: "Event",
      get: function get() {
        return O;
      }
    }, {
      key: "EVENT_KEY",
      get: function get() {
        return b;
      }
    }, {
      key: "DefaultType",
      get: function get() {
        return S;
      }
    }], (n = [{
      key: "enable",
      value: function value() {
        this._isEnabled = !0;
      }
    }, {
      key: "disable",
      value: function value() {
        this._isEnabled = !1;
      }
    }, {
      key: "toggleEnabled",
      value: function value() {
        this._isEnabled = !this._isEnabled;
      }
    }, {
      key: "toggle",
      value: function value(e) {
        if (this._isEnabled) if (e) {
          var t = this.constructor.DATA_KEY,
              n = c()(e.currentTarget).data(t);
          n || (n = new this.constructor(e.currentTarget, this._getDelegateConfig()), c()(e.currentTarget).data(t, n)), n._activeTrigger.click = !n._activeTrigger.click, n._isWithActiveTrigger() ? n._enter(null, n) : n._leave(null, n);
        } else {
          if (c()(this.getTipElement()).hasClass(L)) return void this._leave(null, this);

          this._enter(null, this);
        }
      }
    }, {
      key: "dispose",
      value: function value() {
        clearTimeout(this._timeout), c.a.removeData(this.element, this.constructor.DATA_KEY), c()(this.element).off(this.constructor.EVENT_KEY), c()(this.element).closest(".modal").off("hide.bs.modal", this._hideModalHandler), this.tip && c()(this.tip).remove(), this._isEnabled = null, this._timeout = null, this._hoverState = null, this._activeTrigger = null, this._popper && this._popper.destroy(), this._popper = null, this.element = null, this.config = null, this.tip = null;
      }
    }, {
      key: "show",
      value: function value() {
        var e = this;
        if ("none" === c()(this.element).css("display")) throw new Error("Please use show on visible elements");
        var t = c.a.Event(this.constructor.Event.SHOW);

        if (this.isWithContent() && this._isEnabled) {
          c()(this.element).trigger(t);
          var n = p.a.findShadowRoot(this.element),
              r = c.a.contains(null !== n ? n : this.element.ownerDocument.documentElement, this.element);
          if (t.isDefaultPrevented() || !r) return;
          var o = this.getTipElement(),
              i = p.a.getUID(this.constructor.NAME);
          o.setAttribute("id", i), this.element.setAttribute("aria-describedby", i), this.setContent(), this.config.animation && c()(o).addClass(D);

          var s = "function" === typeof this.config.placement ? this.config.placement.call(this, o, this.element) : this.config.placement,
              a = this._getAttachment(s);

          this.addAttachmentClass(a);

          var l = this._getContainer();

          c()(o).data(this.constructor.DATA_KEY, this), c.a.contains(this.element.ownerDocument.documentElement, this.tip) || c()(o).appendTo(l), c()(this.element).trigger(this.constructor.Event.INSERTED), this._popper = new u.a(this.element, o, this._getPopperConfig(a)), c()(o).addClass(L), c()(o).addClass(this.config.customClass), "ontouchstart" in document.documentElement && c()(document.body).children().on("mouseover", null, c.a.noop);

          var h = function h() {
            e.config.animation && e._fixTransition();
            var t = e._hoverState;
            e._hoverState = null, c()(e.element).trigger(e.constructor.Event.SHOWN), t === k && e._leave(null, e);
          };

          if (c()(this.tip).hasClass(D)) {
            var d = p.a.getTransitionDurationFromElement(this.tip);
            c()(this.tip).one(p.a.TRANSITION_END, h).emulateTransitionEnd(d);
          } else h();
        }
      }
    }, {
      key: "hide",
      value: function value(e) {
        var t = this,
            n = this.getTipElement(),
            r = c.a.Event(this.constructor.Event.HIDE),
            o = function o() {
          t._hoverState !== A && n.parentNode && n.parentNode.removeChild(n), t._cleanTipClass(), t.element.removeAttribute("aria-describedby"), c()(t.element).trigger(t.constructor.Event.HIDDEN), null !== t._popper && t._popper.destroy(), e && e();
        };

        if (c()(this.element).trigger(r), !r.isDefaultPrevented()) {
          if (c()(n).removeClass(L), "ontouchstart" in document.documentElement && c()(document.body).children().off("mouseover", null, c.a.noop), this._activeTrigger.click = !1, this._activeTrigger.focus = !1, this._activeTrigger.hover = !1, c()(this.tip).hasClass(D)) {
            var i = p.a.getTransitionDurationFromElement(n);
            c()(n).one(p.a.TRANSITION_END, o).emulateTransitionEnd(i);
          } else o();

          this._hoverState = "";
        }
      }
    }, {
      key: "update",
      value: function value() {
        null !== this._popper && this._popper.scheduleUpdate();
      }
    }, {
      key: "isWithContent",
      value: function value() {
        return Boolean(this.getTitle());
      }
    }, {
      key: "addAttachmentClass",
      value: function value(e) {
        c()(this.getTipElement()).addClass("".concat(E, "-").concat(e));
      }
    }, {
      key: "getTipElement",
      value: function value() {
        return this.tip = this.tip || c()(this.config.template)[0], this.tip;
      }
    }, {
      key: "setContent",
      value: function value() {
        var e = this.getTipElement();
        this.setElementContent(c()(e.querySelectorAll(".tooltip-inner")), this.getTitle()), c()(e).removeClass("".concat(D, " ").concat(L));
      }
    }, {
      key: "setElementContent",
      value: function value(e, t) {
        "object" !== m(t) || !t.nodeType && !t.jquery ? this.config.html ? (this.config.sanitize && (t = a(t, this.config.whiteList, this.config.sanitizeFn)), e.html(t)) : e.text(t) : this.config.html ? c()(t).parent().is(e) || e.empty().append(t) : e.text(c()(t).text());
      }
    }, {
      key: "getTitle",
      value: function value() {
        var e = this.element.getAttribute("data-original-title");
        return e || (e = "function" === typeof this.config.title ? this.config.title.call(this.element) : this.config.title), e;
      }
    }, {
      key: "_getPopperConfig",
      value: function value(e) {
        var t = this;
        return d(d({}, {
          placement: e,
          modifiers: {
            offset: this._getOffset(),
            flip: {
              behavior: this.config.fallbackPlacement
            },
            arrow: {
              element: ".arrow"
            },
            preventOverflow: {
              boundariesElement: this.config.boundary
            }
          },
          onCreate: function onCreate(e) {
            e.originalPlacement !== e.placement && t._handlePopperPlacementChange(e);
          },
          onUpdate: function onUpdate(e) {
            return t._handlePopperPlacementChange(e);
          }
        }), this.config.popperConfig);
      }
    }, {
      key: "_getOffset",
      value: function value() {
        var e = this,
            t = {};
        return "function" === typeof this.config.offset ? t.fn = function (t) {
          return t.offsets = d(d({}, t.offsets), e.config.offset(t.offsets, e.element) || {}), t;
        } : t.offset = this.config.offset, t;
      }
    }, {
      key: "_getContainer",
      value: function value() {
        return !1 === this.config.container ? document.body : p.a.isElement(this.config.container) ? c()(this.config.container) : c()(document).find(this.config.container);
      }
    }, {
      key: "_getAttachment",
      value: function value(e) {
        return T[e.toUpperCase()];
      }
    }, {
      key: "_setListeners",
      value: function value() {
        var e = this;
        this.config.trigger.split(" ").forEach(function (t) {
          if ("click" === t) c()(e.element).on(e.constructor.Event.CLICK, e.config.selector, function (t) {
            return e.toggle(t);
          });else if ("manual" !== t) {
            var n = t === N ? e.constructor.Event.MOUSEENTER : e.constructor.Event.FOCUSIN,
                r = t === N ? e.constructor.Event.MOUSELEAVE : e.constructor.Event.FOCUSOUT;
            c()(e.element).on(n, e.config.selector, function (t) {
              return e._enter(t);
            }).on(r, e.config.selector, function (t) {
              return e._leave(t);
            });
          }
        }), this._hideModalHandler = function () {
          e.element && e.hide();
        }, c()(this.element).closest(".modal").on("hide.bs.modal", this._hideModalHandler), this.config.selector ? this.config = d(d({}, this.config), {}, {
          trigger: "manual",
          selector: ""
        }) : this._fixTitle();
      }
    }, {
      key: "_fixTitle",
      value: function value() {
        var e = m(this.element.getAttribute("data-original-title"));
        (this.element.getAttribute("title") || "string" !== e) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""));
      }
    }, {
      key: "_enter",
      value: function value(e, t) {
        var n = this.constructor.DATA_KEY;
        (t = t || c()(e.currentTarget).data(n)) || (t = new this.constructor(e.currentTarget, this._getDelegateConfig()), c()(e.currentTarget).data(n, t)), e && (t._activeTrigger["focusin" === e.type ? P : N] = !0), c()(t.getTipElement()).hasClass(L) || t._hoverState === A ? t._hoverState = A : (clearTimeout(t._timeout), t._hoverState = A, t.config.delay && t.config.delay.show ? t._timeout = setTimeout(function () {
          t._hoverState === A && t.show();
        }, t.config.delay.show) : t.show());
      }
    }, {
      key: "_leave",
      value: function value(e, t) {
        var n = this.constructor.DATA_KEY;
        (t = t || c()(e.currentTarget).data(n)) || (t = new this.constructor(e.currentTarget, this._getDelegateConfig()), c()(e.currentTarget).data(n, t)), e && (t._activeTrigger["focusout" === e.type ? P : N] = !1), t._isWithActiveTrigger() || (clearTimeout(t._timeout), t._hoverState = k, t.config.delay && t.config.delay.hide ? t._timeout = setTimeout(function () {
          t._hoverState === k && t.hide();
        }, t.config.delay.hide) : t.hide());
      }
    }, {
      key: "_isWithActiveTrigger",
      value: function value() {
        for (var e in this._activeTrigger) {
          if (this._activeTrigger[e]) return !0;
        }

        return !1;
      }
    }, {
      key: "_getConfig",
      value: function value(e) {
        var t = c()(this.element).data();
        return Object.keys(t).forEach(function (e) {
          -1 !== x.indexOf(e) && delete t[e];
        }), "number" === typeof (e = d(d(d({}, this.constructor.Default), t), "object" === m(e) && e ? e : {})).delay && (e.delay = {
          show: e.delay,
          hide: e.delay
        }), "number" === typeof e.title && (e.title = e.title.toString()), "number" === typeof e.content && (e.content = e.content.toString()), p.a.typeCheckConfig(y, e, this.constructor.DefaultType), e.sanitize && (e.template = a(e.template, e.whiteList, e.sanitizeFn)), e;
      }
    }, {
      key: "_getDelegateConfig",
      value: function value() {
        var e = {};
        if (this.config) for (var t in this.config) {
          this.constructor.Default[t] !== this.config[t] && (e[t] = this.config[t]);
        }
        return e;
      }
    }, {
      key: "_cleanTipClass",
      value: function value() {
        var e = c()(this.getTipElement()),
            t = e.attr("class").match(_);
        null !== t && t.length && e.removeClass(t.join(""));
      }
    }, {
      key: "_handlePopperPlacementChange",
      value: function value(e) {
        this.tip = e.instance.popper, this._cleanTipClass(), this.addAttachmentClass(this._getAttachment(e.placement));
      }
    }, {
      key: "_fixTransition",
      value: function value() {
        var e = this.getTipElement(),
            t = this.config.animation;
        null === e.getAttribute("x-placement") && (c()(e).removeClass(D), this.config.animation = !1, this.hide(), this.show(), this.config.animation = t);
      }
    }]) && g(t.prototype, n), r && g(t, r), e;
  }();

  c.a.fn[y] = j._jQueryInterface, c.a.fn[y].Constructor = j, c.a.fn[y].noConflict = function () {
    return c.a.fn[y] = w, j._jQueryInterface;
  };
  t.a = j;
},,,,,, function (e, t) {
  function n(e) {
    return (n = "function" === typeof Symbol && "symbol" === _typeof(Symbol.iterator) ? function (e) {
      return _typeof(e);
    } : function (e) {
      return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : _typeof(e);
    })(e);
  }

  var r;

  r = function () {
    return this;
  }();

  try {
    r = r || new Function("return this")();
  } catch (o) {
    "object" === ("undefined" === typeof window ? "undefined" : n(window)) && (r = window);
  }

  e.exports = r;
},, function (e, t, n) {
  "use strict";

  var r = n(44),
      o = {
    "text/plain": "Text",
    "text/html": "Url",
    "default": "Text"
  };

  e.exports = function (e, t) {
    var n,
        i,
        s,
        a,
        l,
        c,
        u = !1;
    t || (t = {}), n = t.debug || !1;

    try {
      if (s = r(), a = document.createRange(), l = document.getSelection(), (c = document.createElement("span")).textContent = e, c.style.all = "unset", c.style.position = "fixed", c.style.top = 0, c.style.clip = "rect(0, 0, 0, 0)", c.style.whiteSpace = "pre", c.style.webkitUserSelect = "text", c.style.MozUserSelect = "text", c.style.msUserSelect = "text", c.style.userSelect = "text", c.addEventListener("copy", function (r) {
        if (r.stopPropagation(), t.format) if (r.preventDefault(), "undefined" === typeof r.clipboardData) {
          n && console.warn("unable to use e.clipboardData"), n && console.warn("trying IE specific stuff"), window.clipboardData.clearData();
          var i = o[t.format] || o["default"];
          window.clipboardData.setData(i, e);
        } else r.clipboardData.clearData(), r.clipboardData.setData(t.format, e);
        t.onCopy && (r.preventDefault(), t.onCopy(r.clipboardData));
      }), document.body.appendChild(c), a.selectNodeContents(c), l.addRange(a), !document.execCommand("copy")) throw new Error("copy command was unsuccessful");
      u = !0;
    } catch (p) {
      n && console.error("unable to copy using execCommand: ", p), n && console.warn("trying IE specific stuff");

      try {
        window.clipboardData.setData(t.format || "text", e), t.onCopy && t.onCopy(window.clipboardData), u = !0;
      } catch (p) {
        n && console.error("unable to copy using clipboardData: ", p), n && console.error("falling back to prompt"), i = function (e) {
          var t = (/mac os x/i.test(navigator.userAgent) ? "\u2318" : "Ctrl") + "+C";
          return e.replace(/#{\s*key\s*}/g, t);
        }("message" in t ? t.message : "Copy to clipboard: #{key}, Enter"), window.prompt(i, e);
      }
    } finally {
      l && ("function" == typeof l.removeRange ? l.removeRange(a) : l.removeAllRanges()), c && document.body.removeChild(c), s();
    }

    return u;
  };
},, function (e, t, n) {
  "use strict";

  (function (e) {
    for (var n = "undefined" !== typeof window && "undefined" !== typeof document, r = ["Edge", "Trident", "Firefox"], o = 0, i = 0; i < r.length; i += 1) {
      if (n && navigator.userAgent.indexOf(r[i]) >= 0) {
        o = 1;
        break;
      }
    }

    var s = n && window.Promise ? function (e) {
      var t = !1;
      return function () {
        t || (t = !0, window.Promise.resolve().then(function () {
          t = !1, e();
        }));
      };
    } : function (e) {
      var t = !1;
      return function () {
        t || (t = !0, setTimeout(function () {
          t = !1, e();
        }, o));
      };
    };

    function a(e) {
      return e && "[object Function]" === {}.toString.call(e);
    }

    function l(e, t) {
      if (1 !== e.nodeType) return [];
      var n = e.ownerDocument.defaultView.getComputedStyle(e, null);
      return t ? n[t] : n;
    }

    function c(e) {
      return "HTML" === e.nodeName ? e : e.parentNode || e.host;
    }

    function u(e) {
      if (!e) return document.body;

      switch (e.nodeName) {
        case "HTML":
        case "BODY":
          return e.ownerDocument.body;

        case "#document":
          return e.body;
      }

      var t = l(e),
          n = t.overflow,
          r = t.overflowX,
          o = t.overflowY;
      return /(auto|scroll|overlay)/.test(n + o + r) ? e : u(c(e));
    }

    var p = n && !(!window.MSInputMethodContext || !document.documentMode),
        h = n && /MSIE 10/.test(navigator.userAgent);

    function d(e) {
      return 11 === e ? p : 10 === e ? h : p || h;
    }

    function f(e) {
      if (!e) return document.documentElement;

      for (var t = d(10) ? document.body : null, n = e.offsetParent || null; n === t && e.nextElementSibling;) {
        n = (e = e.nextElementSibling).offsetParent;
      }

      var r = n && n.nodeName;
      return r && "BODY" !== r && "HTML" !== r ? -1 !== ["TH", "TD", "TABLE"].indexOf(n.nodeName) && "static" === l(n, "position") ? f(n) : n : e ? e.ownerDocument.documentElement : document.documentElement;
    }

    function m(e) {
      return null !== e.parentNode ? m(e.parentNode) : e;
    }

    function g(e, t) {
      if (!e || !e.nodeType || !t || !t.nodeType) return document.documentElement;
      var n = e.compareDocumentPosition(t) & Node.DOCUMENT_POSITION_FOLLOWING,
          r = n ? e : t,
          o = n ? t : e,
          i = document.createRange();
      i.setStart(r, 0), i.setEnd(o, 0);
      var s,
          a,
          l = i.commonAncestorContainer;
      if (e !== l && t !== l || r.contains(o)) return "BODY" === (a = (s = l).nodeName) || "HTML" !== a && f(s.firstElementChild) !== s ? f(l) : l;
      var c = m(e);
      return c.host ? g(c.host, t) : g(e, m(t).host);
    }

    function y(e) {
      var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "top",
          n = "top" === t ? "scrollTop" : "scrollLeft",
          r = e.nodeName;

      if ("BODY" === r || "HTML" === r) {
        var o = e.ownerDocument.documentElement,
            i = e.ownerDocument.scrollingElement || o;
        return i[n];
      }

      return e[n];
    }

    function v(e, t) {
      var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
          r = y(t, "top"),
          o = y(t, "left"),
          i = n ? -1 : 1;
      return e.top += r * i, e.bottom += r * i, e.left += o * i, e.right += o * i, e;
    }

    function b(e, t) {
      var n = "x" === t ? "Left" : "Top",
          r = "Left" === n ? "Right" : "Bottom";
      return parseFloat(e["border" + n + "Width"], 10) + parseFloat(e["border" + r + "Width"], 10);
    }

    function w(e, t, n, r) {
      return Math.max(t["offset" + e], t["scroll" + e], n["client" + e], n["offset" + e], n["scroll" + e], d(10) ? parseInt(n["offset" + e]) + parseInt(r["margin" + ("Height" === e ? "Top" : "Left")]) + parseInt(r["margin" + ("Height" === e ? "Bottom" : "Right")]) : 0);
    }

    function E(e) {
      var t = e.body,
          n = e.documentElement,
          r = d(10) && getComputedStyle(n);
      return {
        height: w("Height", t, n, r),
        width: w("Width", t, n, r)
      };
    }

    var _ = function _(e, t) {
      if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function");
    },
        x = function () {
      function e(e, t) {
        for (var n = 0; n < t.length; n++) {
          var r = t[n];
          r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r);
        }
      }

      return function (t, n, r) {
        return n && e(t.prototype, n), r && e(t, r), t;
      };
    }(),
        S = function S(e, t, n) {
      return t in e ? Object.defineProperty(e, t, {
        value: n,
        enumerable: !0,
        configurable: !0,
        writable: !0
      }) : e[t] = n, e;
    },
        T = Object.assign || function (e) {
      for (var t = 1; t < arguments.length; t++) {
        var n = arguments[t];

        for (var r in n) {
          Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r]);
        }
      }

      return e;
    };

    function C(e) {
      return T({}, e, {
        right: e.left + e.width,
        bottom: e.top + e.height
      });
    }

    function A(e) {
      var t = {};

      try {
        if (d(10)) {
          t = e.getBoundingClientRect();
          var n = y(e, "top"),
              r = y(e, "left");
          t.top += n, t.left += r, t.bottom += n, t.right += r;
        } else t = e.getBoundingClientRect();
      } catch (h) {}

      var o = {
        left: t.left,
        top: t.top,
        width: t.right - t.left,
        height: t.bottom - t.top
      },
          i = "HTML" === e.nodeName ? E(e.ownerDocument) : {},
          s = i.width || e.clientWidth || o.right - o.left,
          a = i.height || e.clientHeight || o.bottom - o.top,
          c = e.offsetWidth - s,
          u = e.offsetHeight - a;

      if (c || u) {
        var p = l(e);
        c -= b(p, "x"), u -= b(p, "y"), o.width -= c, o.height -= u;
      }

      return C(o);
    }

    function k(e, t) {
      var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
          r = d(10),
          o = "HTML" === t.nodeName,
          i = A(e),
          s = A(t),
          a = u(e),
          c = l(t),
          p = parseFloat(c.borderTopWidth, 10),
          h = parseFloat(c.borderLeftWidth, 10);
      n && o && (s.top = Math.max(s.top, 0), s.left = Math.max(s.left, 0));
      var f = C({
        top: i.top - s.top - p,
        left: i.left - s.left - h,
        width: i.width,
        height: i.height
      });

      if (f.marginTop = 0, f.marginLeft = 0, !r && o) {
        var m = parseFloat(c.marginTop, 10),
            g = parseFloat(c.marginLeft, 10);
        f.top -= p - m, f.bottom -= p - m, f.left -= h - g, f.right -= h - g, f.marginTop = m, f.marginLeft = g;
      }

      return (r && !n ? t.contains(a) : t === a && "BODY" !== a.nodeName) && (f = v(f, t)), f;
    }

    function O(e) {
      var t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
          n = e.ownerDocument.documentElement,
          r = k(e, n),
          o = Math.max(n.clientWidth, window.innerWidth || 0),
          i = Math.max(n.clientHeight, window.innerHeight || 0),
          s = t ? 0 : y(n),
          a = t ? 0 : y(n, "left"),
          l = {
        top: s - r.top + r.marginTop,
        left: a - r.left + r.marginLeft,
        width: o,
        height: i
      };
      return C(l);
    }

    function D(e) {
      var t = e.nodeName;
      if ("BODY" === t || "HTML" === t) return !1;
      if ("fixed" === l(e, "position")) return !0;
      var n = c(e);
      return !!n && D(n);
    }

    function L(e) {
      if (!e || !e.parentElement || d()) return document.documentElement;

      for (var t = e.parentElement; t && "none" === l(t, "transform");) {
        t = t.parentElement;
      }

      return t || document.documentElement;
    }

    function N(e, t, n, r) {
      var o = arguments.length > 4 && void 0 !== arguments[4] && arguments[4],
          i = {
        top: 0,
        left: 0
      },
          s = o ? L(e) : g(e, t);
      if ("viewport" === r) i = O(s, o);else {
        var a = void 0;
        "scrollParent" === r ? "BODY" === (a = u(c(t))).nodeName && (a = e.ownerDocument.documentElement) : a = "window" === r ? e.ownerDocument.documentElement : r;
        var l = k(a, s, o);
        if ("HTML" !== a.nodeName || D(s)) i = l;else {
          var p = E(e.ownerDocument),
              h = p.height,
              d = p.width;
          i.top += l.top - l.marginTop, i.bottom = h + l.top, i.left += l.left - l.marginLeft, i.right = d + l.left;
        }
      }
      var f = "number" === typeof (n = n || 0);
      return i.left += f ? n : n.left || 0, i.top += f ? n : n.top || 0, i.right -= f ? n : n.right || 0, i.bottom -= f ? n : n.bottom || 0, i;
    }

    function P(e) {
      return e.width * e.height;
    }

    function j(e, t, n, r, o) {
      var i = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] : 0;
      if (-1 === e.indexOf("auto")) return e;
      var s = N(n, r, i, o),
          a = {
        top: {
          width: s.width,
          height: t.top - s.top
        },
        right: {
          width: s.right - t.right,
          height: s.height
        },
        bottom: {
          width: s.width,
          height: s.bottom - t.bottom
        },
        left: {
          width: t.left - s.left,
          height: s.height
        }
      },
          l = Object.keys(a).map(function (e) {
        return T({
          key: e
        }, a[e], {
          area: P(a[e])
        });
      }).sort(function (e, t) {
        return t.area - e.area;
      }),
          c = l.filter(function (e) {
        var t = e.width,
            r = e.height;
        return t >= n.clientWidth && r >= n.clientHeight;
      }),
          u = c.length > 0 ? c[0].key : l[0].key,
          p = e.split("-")[1];
      return u + (p ? "-" + p : "");
    }

    function I(e, t, n) {
      var r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : null,
          o = r ? L(t) : g(t, n);
      return k(n, o, r);
    }

    function R(e) {
      var t = e.ownerDocument.defaultView.getComputedStyle(e),
          n = parseFloat(t.marginTop || 0) + parseFloat(t.marginBottom || 0),
          r = parseFloat(t.marginLeft || 0) + parseFloat(t.marginRight || 0);
      return {
        width: e.offsetWidth + r,
        height: e.offsetHeight + n
      };
    }

    function $(e) {
      var t = {
        left: "right",
        right: "left",
        bottom: "top",
        top: "bottom"
      };
      return e.replace(/left|right|bottom|top/g, function (e) {
        return t[e];
      });
    }

    function q(e, t, n) {
      n = n.split("-")[0];
      var r = R(e),
          o = {
        width: r.width,
        height: r.height
      },
          i = -1 !== ["right", "left"].indexOf(n),
          s = i ? "top" : "left",
          a = i ? "left" : "top",
          l = i ? "height" : "width",
          c = i ? "width" : "height";
      return o[s] = t[s] + t[l] / 2 - r[l] / 2, o[a] = n === a ? t[a] - r[c] : t[$(a)], o;
    }

    function M(e, t) {
      return Array.prototype.find ? e.find(t) : e.filter(t)[0];
    }

    function B(e, t, n) {
      return (void 0 === n ? e : e.slice(0, function (e, t, n) {
        if (Array.prototype.findIndex) return e.findIndex(function (e) {
          return e[t] === n;
        });
        var r = M(e, function (e) {
          return e[t] === n;
        });
        return e.indexOf(r);
      }(e, "name", n))).forEach(function (e) {
        e["function"] && console.warn("`modifier.function` is deprecated, use `modifier.fn`!");
        var n = e["function"] || e.fn;
        e.enabled && a(n) && (t.offsets.popper = C(t.offsets.popper), t.offsets.reference = C(t.offsets.reference), t = n(t, e));
      }), t;
    }

    function F() {
      if (!this.state.isDestroyed) {
        var e = {
          instance: this,
          styles: {},
          arrowStyles: {},
          attributes: {},
          flipped: !1,
          offsets: {}
        };
        e.offsets.reference = I(this.state, this.popper, this.reference, this.options.positionFixed), e.placement = j(this.options.placement, e.offsets.reference, this.popper, this.reference, this.options.modifiers.flip.boundariesElement, this.options.modifiers.flip.padding), e.originalPlacement = e.placement, e.positionFixed = this.options.positionFixed, e.offsets.popper = q(this.popper, e.offsets.reference, e.placement), e.offsets.popper.position = this.options.positionFixed ? "fixed" : "absolute", e = B(this.modifiers, e), this.state.isCreated ? this.options.onUpdate(e) : (this.state.isCreated = !0, this.options.onCreate(e));
      }
    }

    function H(e, t) {
      return e.some(function (e) {
        var n = e.name;
        return e.enabled && n === t;
      });
    }

    function U(e) {
      for (var t = [!1, "ms", "Webkit", "Moz", "O"], n = e.charAt(0).toUpperCase() + e.slice(1), r = 0; r < t.length; r++) {
        var o = t[r],
            i = o ? "" + o + n : e;
        if ("undefined" !== typeof document.body.style[i]) return i;
      }

      return null;
    }

    function W() {
      return this.state.isDestroyed = !0, H(this.modifiers, "applyStyle") && (this.popper.removeAttribute("x-placement"), this.popper.style.position = "", this.popper.style.top = "", this.popper.style.left = "", this.popper.style.right = "", this.popper.style.bottom = "", this.popper.style.willChange = "", this.popper.style[U("transform")] = ""), this.disableEventListeners(), this.options.removeOnDestroy && this.popper.parentNode.removeChild(this.popper), this;
    }

    function z(e) {
      var t = e.ownerDocument;
      return t ? t.defaultView : window;
    }

    function V(e, t, n, r) {
      n.updateBound = r, z(e).addEventListener("resize", n.updateBound, {
        passive: !0
      });
      var o = u(e);
      return function e(t, n, r, o) {
        var i = "BODY" === t.nodeName,
            s = i ? t.ownerDocument.defaultView : t;
        s.addEventListener(n, r, {
          passive: !0
        }), i || e(u(s.parentNode), n, r, o), o.push(s);
      }(o, "scroll", n.updateBound, n.scrollParents), n.scrollElement = o, n.eventsEnabled = !0, n;
    }

    function K() {
      this.state.eventsEnabled || (this.state = V(this.reference, this.options, this.state, this.scheduleUpdate));
    }

    function G() {
      var e, t;
      this.state.eventsEnabled && (cancelAnimationFrame(this.scheduleUpdate), this.state = (e = this.reference, t = this.state, z(e).removeEventListener("resize", t.updateBound), t.scrollParents.forEach(function (e) {
        e.removeEventListener("scroll", t.updateBound);
      }), t.updateBound = null, t.scrollParents = [], t.scrollElement = null, t.eventsEnabled = !1, t));
    }

    function Y(e) {
      return "" !== e && !isNaN(parseFloat(e)) && isFinite(e);
    }

    function Q(e, t) {
      Object.keys(t).forEach(function (n) {
        var r = "";
        -1 !== ["width", "height", "top", "right", "bottom", "left"].indexOf(n) && Y(t[n]) && (r = "px"), e.style[n] = t[n] + r;
      });
    }

    var X = n && /Firefox/i.test(navigator.userAgent);

    function J(e, t, n) {
      var r = M(e, function (e) {
        return e.name === t;
      }),
          o = !!r && e.some(function (e) {
        return e.name === n && e.enabled && e.order < r.order;
      });

      if (!o) {
        var i = "`" + t + "`",
            s = "`" + n + "`";
        console.warn(s + " modifier is required by " + i + " modifier in order to work, be sure to include it before " + i + "!");
      }

      return o;
    }

    var Z = ["auto-start", "auto", "auto-end", "top-start", "top", "top-end", "right-start", "right", "right-end", "bottom-end", "bottom", "bottom-start", "left-end", "left", "left-start"],
        ee = Z.slice(3);

    function te(e) {
      var t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
          n = ee.indexOf(e),
          r = ee.slice(n + 1).concat(ee.slice(0, n));
      return t ? r.reverse() : r;
    }

    var ne = "flip",
        re = "clockwise",
        oe = "counterclockwise";

    function ie(e, t, n, r) {
      var o = [0, 0],
          i = -1 !== ["right", "left"].indexOf(r),
          s = e.split(/(\+|\-)/).map(function (e) {
        return e.trim();
      }),
          a = s.indexOf(M(s, function (e) {
        return -1 !== e.search(/,|\s/);
      }));
      s[a] && -1 === s[a].indexOf(",") && console.warn("Offsets separated by white space(s) are deprecated, use a comma (,) instead.");
      var l = /\s*,\s*|\s+/,
          c = -1 !== a ? [s.slice(0, a).concat([s[a].split(l)[0]]), [s[a].split(l)[1]].concat(s.slice(a + 1))] : [s];
      return (c = c.map(function (e, r) {
        var o = (1 === r ? !i : i) ? "height" : "width",
            s = !1;
        return e.reduce(function (e, t) {
          return "" === e[e.length - 1] && -1 !== ["+", "-"].indexOf(t) ? (e[e.length - 1] = t, s = !0, e) : s ? (e[e.length - 1] += t, s = !1, e) : e.concat(t);
        }, []).map(function (e) {
          return function (e, t, n, r) {
            var o = e.match(/((?:\-|\+)?\d*\.?\d*)(.*)/),
                i = +o[1],
                s = o[2];
            if (!i) return e;

            if (0 === s.indexOf("%")) {
              var a = void 0;

              switch (s) {
                case "%p":
                  a = n;
                  break;

                case "%":
                case "%r":
                default:
                  a = r;
              }

              return C(a)[t] / 100 * i;
            }

            if ("vh" === s || "vw" === s) return ("vh" === s ? Math.max(document.documentElement.clientHeight, window.innerHeight || 0) : Math.max(document.documentElement.clientWidth, window.innerWidth || 0)) / 100 * i;
            return i;
          }(e, o, t, n);
        });
      })).forEach(function (e, t) {
        e.forEach(function (n, r) {
          Y(n) && (o[t] += n * ("-" === e[r - 1] ? -1 : 1));
        });
      }), o;
    }

    var se = {
      placement: "bottom",
      positionFixed: !1,
      eventsEnabled: !0,
      removeOnDestroy: !1,
      onCreate: function onCreate() {},
      onUpdate: function onUpdate() {},
      modifiers: {
        shift: {
          order: 100,
          enabled: !0,
          fn: function fn(e) {
            var t = e.placement,
                n = t.split("-")[0],
                r = t.split("-")[1];

            if (r) {
              var o = e.offsets,
                  i = o.reference,
                  s = o.popper,
                  a = -1 !== ["bottom", "top"].indexOf(n),
                  l = a ? "left" : "top",
                  c = a ? "width" : "height",
                  u = {
                start: S({}, l, i[l]),
                end: S({}, l, i[l] + i[c] - s[c])
              };
              e.offsets.popper = T({}, s, u[r]);
            }

            return e;
          }
        },
        offset: {
          order: 200,
          enabled: !0,
          fn: function fn(e, t) {
            var n = t.offset,
                r = e.placement,
                o = e.offsets,
                i = o.popper,
                s = o.reference,
                a = r.split("-")[0],
                l = void 0;
            return l = Y(+n) ? [+n, 0] : ie(n, i, s, a), "left" === a ? (i.top += l[0], i.left -= l[1]) : "right" === a ? (i.top += l[0], i.left += l[1]) : "top" === a ? (i.left += l[0], i.top -= l[1]) : "bottom" === a && (i.left += l[0], i.top += l[1]), e.popper = i, e;
          },
          offset: 0
        },
        preventOverflow: {
          order: 300,
          enabled: !0,
          fn: function fn(e, t) {
            var n = t.boundariesElement || f(e.instance.popper);
            e.instance.reference === n && (n = f(n));
            var r = U("transform"),
                o = e.instance.popper.style,
                i = o.top,
                s = o.left,
                a = o[r];
            o.top = "", o.left = "", o[r] = "";
            var l = N(e.instance.popper, e.instance.reference, t.padding, n, e.positionFixed);
            o.top = i, o.left = s, o[r] = a, t.boundaries = l;
            var c = t.priority,
                u = e.offsets.popper,
                p = {
              primary: function primary(e) {
                var n = u[e];
                return u[e] < l[e] && !t.escapeWithReference && (n = Math.max(u[e], l[e])), S({}, e, n);
              },
              secondary: function secondary(e) {
                var n = "right" === e ? "left" : "top",
                    r = u[n];
                return u[e] > l[e] && !t.escapeWithReference && (r = Math.min(u[n], l[e] - ("right" === e ? u.width : u.height))), S({}, n, r);
              }
            };
            return c.forEach(function (e) {
              var t = -1 !== ["left", "top"].indexOf(e) ? "primary" : "secondary";
              u = T({}, u, p[t](e));
            }), e.offsets.popper = u, e;
          },
          priority: ["left", "right", "top", "bottom"],
          padding: 5,
          boundariesElement: "scrollParent"
        },
        keepTogether: {
          order: 400,
          enabled: !0,
          fn: function fn(e) {
            var t = e.offsets,
                n = t.popper,
                r = t.reference,
                o = e.placement.split("-")[0],
                i = Math.floor,
                s = -1 !== ["top", "bottom"].indexOf(o),
                a = s ? "right" : "bottom",
                l = s ? "left" : "top",
                c = s ? "width" : "height";
            return n[a] < i(r[l]) && (e.offsets.popper[l] = i(r[l]) - n[c]), n[l] > i(r[a]) && (e.offsets.popper[l] = i(r[a])), e;
          }
        },
        arrow: {
          order: 500,
          enabled: !0,
          fn: function fn(e, t) {
            var n;
            if (!J(e.instance.modifiers, "arrow", "keepTogether")) return e;
            var r = t.element;

            if ("string" === typeof r) {
              if (!(r = e.instance.popper.querySelector(r))) return e;
            } else if (!e.instance.popper.contains(r)) return console.warn("WARNING: `arrow.element` must be child of its popper element!"), e;

            var o = e.placement.split("-")[0],
                i = e.offsets,
                s = i.popper,
                a = i.reference,
                c = -1 !== ["left", "right"].indexOf(o),
                u = c ? "height" : "width",
                p = c ? "Top" : "Left",
                h = p.toLowerCase(),
                d = c ? "left" : "top",
                f = c ? "bottom" : "right",
                m = R(r)[u];
            a[f] - m < s[h] && (e.offsets.popper[h] -= s[h] - (a[f] - m)), a[h] + m > s[f] && (e.offsets.popper[h] += a[h] + m - s[f]), e.offsets.popper = C(e.offsets.popper);
            var g = a[h] + a[u] / 2 - m / 2,
                y = l(e.instance.popper),
                v = parseFloat(y["margin" + p], 10),
                b = parseFloat(y["border" + p + "Width"], 10),
                w = g - e.offsets.popper[h] - v - b;
            return w = Math.max(Math.min(s[u] - m, w), 0), e.arrowElement = r, e.offsets.arrow = (S(n = {}, h, Math.round(w)), S(n, d, ""), n), e;
          },
          element: "[x-arrow]"
        },
        flip: {
          order: 600,
          enabled: !0,
          fn: function fn(e, t) {
            if (H(e.instance.modifiers, "inner")) return e;
            if (e.flipped && e.placement === e.originalPlacement) return e;
            var n = N(e.instance.popper, e.instance.reference, t.padding, t.boundariesElement, e.positionFixed),
                r = e.placement.split("-")[0],
                o = $(r),
                i = e.placement.split("-")[1] || "",
                s = [];

            switch (t.behavior) {
              case ne:
                s = [r, o];
                break;

              case re:
                s = te(r);
                break;

              case oe:
                s = te(r, !0);
                break;

              default:
                s = t.behavior;
            }

            return s.forEach(function (a, l) {
              if (r !== a || s.length === l + 1) return e;
              r = e.placement.split("-")[0], o = $(r);
              var c = e.offsets.popper,
                  u = e.offsets.reference,
                  p = Math.floor,
                  h = "left" === r && p(c.right) > p(u.left) || "right" === r && p(c.left) < p(u.right) || "top" === r && p(c.bottom) > p(u.top) || "bottom" === r && p(c.top) < p(u.bottom),
                  d = p(c.left) < p(n.left),
                  f = p(c.right) > p(n.right),
                  m = p(c.top) < p(n.top),
                  g = p(c.bottom) > p(n.bottom),
                  y = "left" === r && d || "right" === r && f || "top" === r && m || "bottom" === r && g,
                  v = -1 !== ["top", "bottom"].indexOf(r),
                  b = !!t.flipVariations && (v && "start" === i && d || v && "end" === i && f || !v && "start" === i && m || !v && "end" === i && g);
              (h || y || b) && (e.flipped = !0, (h || y) && (r = s[l + 1]), b && (i = function (e) {
                return "end" === e ? "start" : "start" === e ? "end" : e;
              }(i)), e.placement = r + (i ? "-" + i : ""), e.offsets.popper = T({}, e.offsets.popper, q(e.instance.popper, e.offsets.reference, e.placement)), e = B(e.instance.modifiers, e, "flip"));
            }), e;
          },
          behavior: "flip",
          padding: 5,
          boundariesElement: "viewport"
        },
        inner: {
          order: 700,
          enabled: !1,
          fn: function fn(e) {
            var t = e.placement,
                n = t.split("-")[0],
                r = e.offsets,
                o = r.popper,
                i = r.reference,
                s = -1 !== ["left", "right"].indexOf(n),
                a = -1 === ["top", "left"].indexOf(n);
            return o[s ? "left" : "top"] = i[n] - (a ? o[s ? "width" : "height"] : 0), e.placement = $(t), e.offsets.popper = C(o), e;
          }
        },
        hide: {
          order: 800,
          enabled: !0,
          fn: function fn(e) {
            if (!J(e.instance.modifiers, "hide", "preventOverflow")) return e;
            var t = e.offsets.reference,
                n = M(e.instance.modifiers, function (e) {
              return "preventOverflow" === e.name;
            }).boundaries;

            if (t.bottom < n.top || t.left > n.right || t.top > n.bottom || t.right < n.left) {
              if (!0 === e.hide) return e;
              e.hide = !0, e.attributes["x-out-of-boundaries"] = "";
            } else {
              if (!1 === e.hide) return e;
              e.hide = !1, e.attributes["x-out-of-boundaries"] = !1;
            }

            return e;
          }
        },
        computeStyle: {
          order: 850,
          enabled: !0,
          fn: function fn(e, t) {
            var n = t.x,
                r = t.y,
                o = e.offsets.popper,
                i = M(e.instance.modifiers, function (e) {
              return "applyStyle" === e.name;
            }).gpuAcceleration;
            void 0 !== i && console.warn("WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!");

            var s = void 0 !== i ? i : t.gpuAcceleration,
                a = f(e.instance.popper),
                l = A(a),
                c = {
              position: o.position
            },
                u = function (e, t) {
              var n = e.offsets,
                  r = n.popper,
                  o = n.reference,
                  i = Math.round,
                  s = Math.floor,
                  a = function a(e) {
                return e;
              },
                  l = i(o.width),
                  c = i(r.width),
                  u = -1 !== ["left", "right"].indexOf(e.placement),
                  p = -1 !== e.placement.indexOf("-"),
                  h = t ? u || p || l % 2 === c % 2 ? i : s : a,
                  d = t ? i : a;

              return {
                left: h(l % 2 === 1 && c % 2 === 1 && !p && t ? r.left - 1 : r.left),
                top: d(r.top),
                bottom: d(r.bottom),
                right: h(r.right)
              };
            }(e, window.devicePixelRatio < 2 || !X),
                p = "bottom" === n ? "top" : "bottom",
                h = "right" === r ? "left" : "right",
                d = U("transform"),
                m = void 0,
                g = void 0;

            if (g = "bottom" === p ? "HTML" === a.nodeName ? -a.clientHeight + u.bottom : -l.height + u.bottom : u.top, m = "right" === h ? "HTML" === a.nodeName ? -a.clientWidth + u.right : -l.width + u.right : u.left, s && d) c[d] = "translate3d(" + m + "px, " + g + "px, 0)", c[p] = 0, c[h] = 0, c.willChange = "transform";else {
              var y = "bottom" === p ? -1 : 1,
                  v = "right" === h ? -1 : 1;
              c[p] = g * y, c[h] = m * v, c.willChange = p + ", " + h;
            }
            var b = {
              "x-placement": e.placement
            };
            return e.attributes = T({}, b, e.attributes), e.styles = T({}, c, e.styles), e.arrowStyles = T({}, e.offsets.arrow, e.arrowStyles), e;
          },
          gpuAcceleration: !0,
          x: "bottom",
          y: "right"
        },
        applyStyle: {
          order: 900,
          enabled: !0,
          fn: function fn(e) {
            var t, n;
            return Q(e.instance.popper, e.styles), t = e.instance.popper, n = e.attributes, Object.keys(n).forEach(function (e) {
              !1 !== n[e] ? t.setAttribute(e, n[e]) : t.removeAttribute(e);
            }), e.arrowElement && Object.keys(e.arrowStyles).length && Q(e.arrowElement, e.arrowStyles), e;
          },
          onLoad: function onLoad(e, t, n, r, o) {
            var i = I(o, t, e, n.positionFixed),
                s = j(n.placement, i, t, e, n.modifiers.flip.boundariesElement, n.modifiers.flip.padding);
            return t.setAttribute("x-placement", s), Q(t, {
              position: n.positionFixed ? "fixed" : "absolute"
            }), n;
          },
          gpuAcceleration: void 0
        }
      }
    },
        ae = function () {
      function e(t, n) {
        var r = this,
            o = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
        _(this, e), this.scheduleUpdate = function () {
          return requestAnimationFrame(r.update);
        }, this.update = s(this.update.bind(this)), this.options = T({}, e.Defaults, o), this.state = {
          isDestroyed: !1,
          isCreated: !1,
          scrollParents: []
        }, this.reference = t && t.jquery ? t[0] : t, this.popper = n && n.jquery ? n[0] : n, this.options.modifiers = {}, Object.keys(T({}, e.Defaults.modifiers, o.modifiers)).forEach(function (t) {
          r.options.modifiers[t] = T({}, e.Defaults.modifiers[t] || {}, o.modifiers ? o.modifiers[t] : {});
        }), this.modifiers = Object.keys(this.options.modifiers).map(function (e) {
          return T({
            name: e
          }, r.options.modifiers[e]);
        }).sort(function (e, t) {
          return e.order - t.order;
        }), this.modifiers.forEach(function (e) {
          e.enabled && a(e.onLoad) && e.onLoad(r.reference, r.popper, r.options, e, r.state);
        }), this.update();
        var i = this.options.eventsEnabled;
        i && this.enableEventListeners(), this.state.eventsEnabled = i;
      }

      return x(e, [{
        key: "update",
        value: function value() {
          return F.call(this);
        }
      }, {
        key: "destroy",
        value: function value() {
          return W.call(this);
        }
      }, {
        key: "enableEventListeners",
        value: function value() {
          return K.call(this);
        }
      }, {
        key: "disableEventListeners",
        value: function value() {
          return G.call(this);
        }
      }]), e;
    }();

    ae.Utils = ("undefined" !== typeof window ? window : e).PopperUtils, ae.placements = Z, ae.Defaults = se, t.a = ae;
  }).call(this, n(11));
}, function (e, t) {
  e.exports = function (e) {
    return e.webpackPolyfill || (e.deprecate = function () {}, e.paths = [], e.children || (e.children = []), Object.defineProperty(e, "loaded", {
      enumerable: !0,
      get: function get() {
        return e.l;
      }
    }), Object.defineProperty(e, "id", {
      enumerable: !0,
      get: function get() {
        return e.i;
      }
    }), e.webpackPolyfill = 1), e;
  };
}, function (e, t, n) {
  var r, o, i, s;

  function a(e) {
    return (a = "function" === typeof Symbol && "symbol" === _typeof(Symbol.iterator) ? function (e) {
      return _typeof(e);
    } : function (e) {
      return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : _typeof(e);
    })(e);
  }

  s = function s(e) {
    "use strict";

    function t(e) {
      return e && "object" === a(e) && "default" in e ? e : {
        "default": e
      };
    }

    var n = t(e),
        r = "transitionend";

    function o(e) {
      var t = this,
          r = !1;
      return n["default"](this).one(i.TRANSITION_END, function () {
        r = !0;
      }), setTimeout(function () {
        r || i.triggerTransitionEnd(t);
      }, e), this;
    }

    var i = {
      TRANSITION_END: "bsTransitionEnd",
      getUID: function getUID(e) {
        do {
          e += ~~(1e6 * Math.random());
        } while (document.getElementById(e));

        return e;
      },
      getSelectorFromElement: function getSelectorFromElement(e) {
        var t = e.getAttribute("data-target");

        if (!t || "#" === t) {
          var n = e.getAttribute("href");
          t = n && "#" !== n ? n.trim() : "";
        }

        try {
          return document.querySelector(t) ? t : null;
        } catch (r) {
          return null;
        }
      },
      getTransitionDurationFromElement: function getTransitionDurationFromElement(e) {
        if (!e) return 0;
        var t = n["default"](e).css("transition-duration"),
            r = n["default"](e).css("transition-delay"),
            o = parseFloat(t),
            i = parseFloat(r);
        return o || i ? (t = t.split(",")[0], r = r.split(",")[0], 1e3 * (parseFloat(t) + parseFloat(r))) : 0;
      },
      reflow: function reflow(e) {
        return e.offsetHeight;
      },
      triggerTransitionEnd: function triggerTransitionEnd(e) {
        n["default"](e).trigger(r);
      },
      supportsTransitionEnd: function supportsTransitionEnd() {
        return Boolean(r);
      },
      isElement: function isElement(e) {
        return (e[0] || e).nodeType;
      },
      typeCheckConfig: function typeCheckConfig(e, t, n) {
        for (var r in n) {
          if (Object.prototype.hasOwnProperty.call(n, r)) {
            var o = n[r],
                s = t[r],
                a = s && i.isElement(s) ? "element" : null === (l = s) || "undefined" === typeof l ? "" + l : {}.toString.call(l).match(/\s([a-z]+)/i)[1].toLowerCase();
            if (!new RegExp(o).test(a)) throw new Error(e.toUpperCase() + ': Option "' + r + '" provided type "' + a + '" but expected type "' + o + '".');
          }
        }

        var l;
      },
      findShadowRoot: function findShadowRoot(e) {
        if (!document.documentElement.attachShadow) return null;

        if ("function" === typeof e.getRootNode) {
          var t = e.getRootNode();
          return t instanceof ShadowRoot ? t : null;
        }

        return e instanceof ShadowRoot ? e : e.parentNode ? i.findShadowRoot(e.parentNode) : null;
      },
      jQueryDetection: function jQueryDetection() {
        if ("undefined" === typeof n["default"]) throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");
        var e = n["default"].fn.jquery.split(" ")[0].split(".");
        if (e[0] < 2 && e[1] < 9 || 1 === e[0] && 9 === e[1] && e[2] < 1 || e[0] >= 4) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0");
      }
    };
    return i.jQueryDetection(), n["default"].fn.emulateTransitionEnd = o, n["default"].event.special[i.TRANSITION_END] = {
      bindType: r,
      delegateType: r,
      handle: function handle(e) {
        if (n["default"](e.target).is(this)) return e.handleObj.handler.apply(this, arguments);
      }
    }, i;
  }, "object" === a(t) && "undefined" !== typeof e ? e.exports = s(n(0)) : (o = [n(0)], void 0 === (i = "function" === typeof (r = s) ? r.apply(t, o) : r) || (e.exports = i));
}, function (e, t) {
  function n(e) {
    return (n = "function" === typeof Symbol && "symbol" === _typeof(Symbol.iterator) ? function (e) {
      return _typeof(e);
    } : function (e) {
      return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : _typeof(e);
    })(e);
  }

  e.exports = function (e) {
    var t = n(e);
    return null != e && ("object" == t || "function" == t);
  };
}, function (e, t, n) {
  function r(e) {
    return (r = "function" === typeof Symbol && "symbol" === _typeof(Symbol.iterator) ? function (e) {
      return _typeof(e);
    } : function (e) {
      return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : _typeof(e);
    })(e);
  }

  var o = n(57),
      i = "object" == ("undefined" === typeof self ? "undefined" : r(self)) && self && self.Object === Object && self,
      s = o || i || Function("return this")();
  e.exports = s;
}, function (e, t, n) {
  var r = n(19).Symbol;
  e.exports = r;
},, function (e, t, n) {
  "use strict";

  var r = n(0),
      o = n.n(r),
      i = n(2);

  function s(e) {
    return (s = "function" === typeof Symbol && "symbol" === _typeof(Symbol.iterator) ? function (e) {
      return _typeof(e);
    } : function (e) {
      return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : _typeof(e);
    })(e);
  }

  function a(e, t) {
    var n = Object.keys(e);

    if (Object.getOwnPropertySymbols) {
      var r = Object.getOwnPropertySymbols(e);
      t && (r = r.filter(function (t) {
        return Object.getOwnPropertyDescriptor(e, t).enumerable;
      })), n.push.apply(n, r);
    }

    return n;
  }

  function l(e) {
    for (var t = 1; t < arguments.length; t++) {
      var n = null != arguments[t] ? arguments[t] : {};
      t % 2 ? a(Object(n), !0).forEach(function (t) {
        c(e, t, n[t]);
      }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : a(Object(n)).forEach(function (t) {
        Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t));
      });
    }

    return e;
  }

  function c(e, t, n) {
    return t in e ? Object.defineProperty(e, t, {
      value: n,
      enumerable: !0,
      configurable: !0,
      writable: !0
    }) : e[t] = n, e;
  }

  function u(e, t) {
    for (var n = 0; n < t.length; n++) {
      var r = t[n];
      r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r);
    }
  }

  var p = "modal",
      h = "bs.modal",
      d = ".".concat(h),
      f = o.a.fn.modal,
      m = {
    backdrop: !0,
    keyboard: !0,
    focus: !0,
    show: !0
  },
      g = {
    backdrop: "(boolean|string)",
    keyboard: "boolean",
    focus: "boolean",
    show: "boolean"
  },
      y = "hide".concat(d),
      v = "hidePrevented".concat(d),
      b = "hidden".concat(d),
      w = "show".concat(d),
      E = "shown".concat(d),
      _ = "focusin".concat(d),
      x = "resize".concat(d),
      S = "click.dismiss".concat(d),
      T = "keydown.dismiss".concat(d),
      C = "mouseup.dismiss".concat(d),
      A = "mousedown.dismiss".concat(d),
      k = "click".concat(d).concat(".data-api"),
      O = "modal-open",
      D = "fade",
      L = "show",
      N = "modal-static",
      P = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
      j = ".sticky-top",
      I = function () {
    function e(t, n) {
      !function (e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function");
      }(this, e), this._config = this._getConfig(n), this._element = t, this._dialog = t.querySelector(".modal-dialog"), this._backdrop = null, this._isShown = !1, this._isBodyOverflowing = !1, this._ignoreBackdropClick = !1, this._isTransitioning = !1, this._scrollbarWidth = 0;
    }

    var t, n, r;
    return t = e, r = [{
      key: "_jQueryInterface",
      value: function value(t, n) {
        return this.each(function () {
          var r = o()(this).data(h),
              i = l(l(l({}, m), o()(this).data()), "object" === s(t) && t ? t : {});

          if (r || (r = new e(this, i), o()(this).data(h, r)), "string" === typeof t) {
            if ("undefined" === typeof r[t]) throw new TypeError('No method named "'.concat(t, '"'));
            r[t](n);
          } else i.show && r.show(n);
        });
      }
    }, {
      key: "VERSION",
      get: function get() {
        return "4.6.0";
      }
    }, {
      key: "Default",
      get: function get() {
        return m;
      }
    }], (n = [{
      key: "toggle",
      value: function value(e) {
        return this._isShown ? this.hide() : this.show(e);
      }
    }, {
      key: "show",
      value: function value(e) {
        var t = this;

        if (!this._isShown && !this._isTransitioning) {
          o()(this._element).hasClass(D) && (this._isTransitioning = !0);
          var n = o.a.Event(w, {
            relatedTarget: e
          });
          o()(this._element).trigger(n), this._isShown || n.isDefaultPrevented() || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), this._adjustDialog(), this._setEscapeEvent(), this._setResizeEvent(), o()(this._element).on(S, '[data-dismiss="modal"]', function (e) {
            return t.hide(e);
          }), o()(this._dialog).on(A, function () {
            o()(t._element).one(C, function (e) {
              o()(e.target).is(t._element) && (t._ignoreBackdropClick = !0);
            });
          }), this._showBackdrop(function () {
            return t._showElement(e);
          }));
        }
      }
    }, {
      key: "hide",
      value: function value(e) {
        var t = this;

        if (e && e.preventDefault(), this._isShown && !this._isTransitioning) {
          var n = o.a.Event(y);

          if (o()(this._element).trigger(n), this._isShown && !n.isDefaultPrevented()) {
            this._isShown = !1;
            var r = o()(this._element).hasClass(D);

            if (r && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), o()(document).off(_), o()(this._element).removeClass(L), o()(this._element).off(S), o()(this._dialog).off(A), r) {
              var s = i.a.getTransitionDurationFromElement(this._element);
              o()(this._element).one(i.a.TRANSITION_END, function (e) {
                return t._hideModal(e);
              }).emulateTransitionEnd(s);
            } else this._hideModal();
          }
        }
      }
    }, {
      key: "dispose",
      value: function value() {
        [window, this._element, this._dialog].forEach(function (e) {
          return o()(e).off(d);
        }), o()(document).off(_), o.a.removeData(this._element, h), this._config = null, this._element = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._isTransitioning = null, this._scrollbarWidth = null;
      }
    }, {
      key: "handleUpdate",
      value: function value() {
        this._adjustDialog();
      }
    }, {
      key: "_getConfig",
      value: function value(e) {
        return e = l(l({}, m), e), i.a.typeCheckConfig(p, e, g), e;
      }
    }, {
      key: "_triggerBackdropTransition",
      value: function value() {
        var e = this,
            t = o.a.Event(v);

        if (o()(this._element).trigger(t), !t.isDefaultPrevented()) {
          var n = this._element.scrollHeight > document.documentElement.clientHeight;
          n || (this._element.style.overflowY = "hidden"), this._element.classList.add(N);
          var r = i.a.getTransitionDurationFromElement(this._dialog);
          o()(this._element).off(i.a.TRANSITION_END), o()(this._element).one(i.a.TRANSITION_END, function () {
            e._element.classList.remove(N), n || o()(e._element).one(i.a.TRANSITION_END, function () {
              e._element.style.overflowY = "";
            }).emulateTransitionEnd(e._element, r);
          }).emulateTransitionEnd(r), this._element.focus();
        }
      }
    }, {
      key: "_showElement",
      value: function value(e) {
        var t = this,
            n = o()(this._element).hasClass(D),
            r = this._dialog ? this._dialog.querySelector(".modal-body") : null;
        this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0), this._element.setAttribute("role", "dialog"), o()(this._dialog).hasClass("modal-dialog-scrollable") && r ? r.scrollTop = 0 : this._element.scrollTop = 0, n && i.a.reflow(this._element), o()(this._element).addClass(L), this._config.focus && this._enforceFocus();

        var s = o.a.Event(E, {
          relatedTarget: e
        }),
            a = function a() {
          t._config.focus && t._element.focus(), t._isTransitioning = !1, o()(t._element).trigger(s);
        };

        if (n) {
          var l = i.a.getTransitionDurationFromElement(this._dialog);
          o()(this._dialog).one(i.a.TRANSITION_END, a).emulateTransitionEnd(l);
        } else a();
      }
    }, {
      key: "_enforceFocus",
      value: function value() {
        var e = this;
        o()(document).off(_).on(_, function (t) {
          document !== t.target && e._element !== t.target && 0 === o()(e._element).has(t.target).length && e._element.focus();
        });
      }
    }, {
      key: "_setEscapeEvent",
      value: function value() {
        var e = this;
        this._isShown ? o()(this._element).on(T, function (t) {
          e._config.keyboard && 27 === t.which ? (t.preventDefault(), e.hide()) : e._config.keyboard || 27 !== t.which || e._triggerBackdropTransition();
        }) : this._isShown || o()(this._element).off(T);
      }
    }, {
      key: "_setResizeEvent",
      value: function value() {
        var e = this;
        this._isShown ? o()(window).on(x, function (t) {
          return e.handleUpdate(t);
        }) : o()(window).off(x);
      }
    }, {
      key: "_hideModal",
      value: function value() {
        var e = this;
        this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._element.removeAttribute("aria-modal"), this._element.removeAttribute("role"), this._isTransitioning = !1, this._showBackdrop(function () {
          o()(document.body).removeClass(O), e._resetAdjustments(), e._resetScrollbar(), o()(e._element).trigger(b);
        });
      }
    }, {
      key: "_removeBackdrop",
      value: function value() {
        this._backdrop && (o()(this._backdrop).remove(), this._backdrop = null);
      }
    }, {
      key: "_showBackdrop",
      value: function value(e) {
        var t = this,
            n = o()(this._element).hasClass(D) ? D : "";

        if (this._isShown && this._config.backdrop) {
          if (this._backdrop = document.createElement("div"), this._backdrop.className = "modal-backdrop", n && this._backdrop.classList.add(n), o()(this._backdrop).appendTo(document.body), o()(this._element).on(S, function (e) {
            t._ignoreBackdropClick ? t._ignoreBackdropClick = !1 : e.target === e.currentTarget && ("static" === t._config.backdrop ? t._triggerBackdropTransition() : t.hide());
          }), n && i.a.reflow(this._backdrop), o()(this._backdrop).addClass(L), !e) return;
          if (!n) return void e();
          var r = i.a.getTransitionDurationFromElement(this._backdrop);
          o()(this._backdrop).one(i.a.TRANSITION_END, e).emulateTransitionEnd(r);
        } else if (!this._isShown && this._backdrop) {
          o()(this._backdrop).removeClass(L);

          var s = function s() {
            t._removeBackdrop(), e && e();
          };

          if (o()(this._element).hasClass(D)) {
            var a = i.a.getTransitionDurationFromElement(this._backdrop);
            o()(this._backdrop).one(i.a.TRANSITION_END, s).emulateTransitionEnd(a);
          } else s();
        } else e && e();
      }
    }, {
      key: "_adjustDialog",
      value: function value() {
        var e = this._element.scrollHeight > document.documentElement.clientHeight;
        !this._isBodyOverflowing && e && (this._element.style.paddingLeft = "".concat(this._scrollbarWidth, "px")), this._isBodyOverflowing && !e && (this._element.style.paddingRight = "".concat(this._scrollbarWidth, "px"));
      }
    }, {
      key: "_resetAdjustments",
      value: function value() {
        this._element.style.paddingLeft = "", this._element.style.paddingRight = "";
      }
    }, {
      key: "_checkScrollbar",
      value: function value() {
        var e = document.body.getBoundingClientRect();
        this._isBodyOverflowing = Math.round(e.left + e.right) < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth();
      }
    }, {
      key: "_setScrollbar",
      value: function value() {
        var e = this;

        if (this._isBodyOverflowing) {
          var t = [].slice.call(document.querySelectorAll(P)),
              n = [].slice.call(document.querySelectorAll(j));
          o()(t).each(function (t, n) {
            var r = n.style.paddingRight,
                i = o()(n).css("padding-right");
            o()(n).data("padding-right", r).css("padding-right", "".concat(parseFloat(i) + e._scrollbarWidth, "px"));
          }), o()(n).each(function (t, n) {
            var r = n.style.marginRight,
                i = o()(n).css("margin-right");
            o()(n).data("margin-right", r).css("margin-right", "".concat(parseFloat(i) - e._scrollbarWidth, "px"));
          });
          var r = document.body.style.paddingRight,
              i = o()(document.body).css("padding-right");
          o()(document.body).data("padding-right", r).css("padding-right", "".concat(parseFloat(i) + this._scrollbarWidth, "px"));
        }

        o()(document.body).addClass(O);
      }
    }, {
      key: "_resetScrollbar",
      value: function value() {
        var e = [].slice.call(document.querySelectorAll(P));
        o()(e).each(function (e, t) {
          var n = o()(t).data("padding-right");
          o()(t).removeData("padding-right"), t.style.paddingRight = n || "";
        });
        var t = [].slice.call(document.querySelectorAll("".concat(j)));
        o()(t).each(function (e, t) {
          var n = o()(t).data("margin-right");
          "undefined" !== typeof n && o()(t).css("margin-right", n).removeData("margin-right");
        });
        var n = o()(document.body).data("padding-right");
        o()(document.body).removeData("padding-right"), document.body.style.paddingRight = n || "";
      }
    }, {
      key: "_getScrollbarWidth",
      value: function value() {
        var e = document.createElement("div");
        e.className = "modal-scrollbar-measure", document.body.appendChild(e);
        var t = e.getBoundingClientRect().width - e.clientWidth;
        return document.body.removeChild(e), t;
      }
    }]) && u(t.prototype, n), r && u(t, r), e;
  }();

  o()(document).on(k, '[data-toggle="modal"]', function (e) {
    var t,
        n = this,
        r = i.a.getSelectorFromElement(this);
    r && (t = document.querySelector(r));
    var s = o()(t).data(h) ? "toggle" : l(l({}, o()(t).data()), o()(this).data());
    "A" !== this.tagName && "AREA" !== this.tagName || e.preventDefault();
    var a = o()(t).one(w, function (e) {
      e.isDefaultPrevented() || a.one(b, function () {
        o()(n).is(":visible") && n.focus();
      });
    });

    I._jQueryInterface.call(o()(t), s, this);
  }), o.a.fn.modal = I._jQueryInterface, o.a.fn.modal.Constructor = I, o.a.fn.modal.noConflict = function () {
    return o.a.fn.modal = f, I._jQueryInterface;
  }, t.a = I;
}, function (e, t, n) {
  var r = n(18),
      o = n(56),
      i = n(58),
      s = Math.max,
      a = Math.min;

  e.exports = function (e, t, n) {
    var l,
        c,
        u,
        p,
        h,
        d,
        f = 0,
        m = !1,
        g = !1,
        y = !0;
    if ("function" != typeof e) throw new TypeError("Expected a function");

    function v(t) {
      var n = l,
          r = c;
      return l = c = void 0, f = t, p = e.apply(r, n);
    }

    function b(e) {
      return f = e, h = setTimeout(E, t), m ? v(e) : p;
    }

    function w(e) {
      var n = e - d;
      return void 0 === d || n >= t || n < 0 || g && e - f >= u;
    }

    function E() {
      var e = o();
      if (w(e)) return _(e);
      h = setTimeout(E, function (e) {
        var n = t - (e - d);
        return g ? a(n, u - (e - f)) : n;
      }(e));
    }

    function _(e) {
      return h = void 0, y && l ? v(e) : (l = c = void 0, p);
    }

    function x() {
      var e = o(),
          n = w(e);

      if (l = arguments, c = this, d = e, n) {
        if (void 0 === h) return b(d);
        if (g) return clearTimeout(h), h = setTimeout(E, t), v(d);
      }

      return void 0 === h && (h = setTimeout(E, t)), p;
    }

    return t = i(t) || 0, r(n) && (m = !!n.leading, u = (g = "maxWait" in n) ? s(i(n.maxWait) || 0, t) : u, y = "trailing" in n ? !!n.trailing : y), x.cancel = function () {
      void 0 !== h && clearTimeout(h), f = 0, l = d = c = h = void 0;
    }, x.flush = function () {
      return void 0 === h ? p : _(o());
    }, x;
  };
}, function (e, t, n) {
  "use strict";

  function r(e) {
    return e.keys().map(function (t) {
      return function (e, t) {
        var n = function (e) {
          var t = (e.match(/^(?:\.\/)?(.+)(?:[_-]controller\..+?)$/) || [])[1];
          if (t) return t.replace(/_/g, "-").replace(/\//g, "--");
        }(t);

        if (n) return function (e, t) {
          var n = e["default"];
          if ("function" == typeof n) return {
            identifier: t,
            controllerConstructor: n
          };
        }(e(t), n);
      }(e, t);
    }).filter(function (e) {
      return e;
    });
  }

  n.d(t, "a", function () {
    return r;
  });
},, function (e, t, n) {
  (function (e) {
    var r, o;

    function i(e) {
      return (i = "function" === typeof Symbol && "symbol" === _typeof(Symbol.iterator) ? function (e) {
        return _typeof(e);
      } : function (e) {
        return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : _typeof(e);
      })(e);
    }

    (function () {
      (function () {
        (function () {
          this.Turbolinks = {
            supported: null != window.history.pushState && null != window.requestAnimationFrame && null != window.addEventListener,
            visit: function visit(e, t) {
              return s.controller.visit(e, t);
            },
            clearCache: function clearCache() {
              return s.controller.clearCache();
            },
            setProgressBarDelay: function setProgressBarDelay(e) {
              return s.controller.setProgressBarDelay(e);
            }
          };
        }).call(this);
      }).call(this);
      var s = this.Turbolinks;
      (function () {
        (function () {
          var e,
              t,
              n,
              r = [].slice;
          s.copyObject = function (e) {
            var t, n, r;

            for (t in n = {}, e) {
              r = e[t], n[t] = r;
            }

            return n;
          }, s.closest = function (t, n) {
            return e.call(t, n);
          }, e = function () {
            var e;
            return null != (e = document.documentElement.closest) ? e : function (e) {
              var n;

              for (n = this; n;) {
                if (n.nodeType === Node.ELEMENT_NODE && t.call(n, e)) return n;
                n = n.parentNode;
              }
            };
          }(), s.defer = function (e) {
            return setTimeout(e, 1);
          }, s.throttle = function (e) {
            var t;
            return t = null, function () {
              var n;
              return n = 1 <= arguments.length ? r.call(arguments, 0) : [], null != t ? t : t = requestAnimationFrame(function (r) {
                return function () {
                  return t = null, e.apply(r, n);
                };
              }(this));
            };
          }, s.dispatch = function (e, t) {
            var r, o, i, s, a, l;
            return l = (a = null != t ? t : {}).target, r = a.cancelable, o = a.data, (i = document.createEvent("Events")).initEvent(e, !0, !0 === r), i.data = null != o ? o : {}, i.cancelable && !n && (s = i.preventDefault, i.preventDefault = function () {
              return this.defaultPrevented || Object.defineProperty(this, "defaultPrevented", {
                get: function get() {
                  return !0;
                }
              }), s.call(this);
            }), (null != l ? l : document).dispatchEvent(i), i;
          }, n = function () {
            var e;
            return (e = document.createEvent("Events")).initEvent("test", !0, !0), e.preventDefault(), e.defaultPrevented;
          }(), s.match = function (e, n) {
            return t.call(e, n);
          }, t = function () {
            var e, t, n, r;
            return null != (t = null != (n = null != (r = (e = document.documentElement).matchesSelector) ? r : e.webkitMatchesSelector) ? n : e.msMatchesSelector) ? t : e.mozMatchesSelector;
          }(), s.uuid = function () {
            var e, t, n;

            for (n = "", e = t = 1; 36 >= t; e = ++t) {
              n += 9 === e || 14 === e || 19 === e || 24 === e ? "-" : 15 === e ? "4" : 20 === e ? (Math.floor(4 * Math.random()) + 8).toString(16) : Math.floor(15 * Math.random()).toString(16);
            }

            return n;
          };
        }).call(this), function () {
          s.Location = function () {
            function e(e) {
              var t, n;
              null == e && (e = ""), (n = document.createElement("a")).href = e.toString(), this.absoluteURL = n.href, 2 > (t = n.hash.length) ? this.requestURL = this.absoluteURL : (this.requestURL = this.absoluteURL.slice(0, -t), this.anchor = n.hash.slice(1));
            }

            var t, n, r, o;
            return e.wrap = function (e) {
              return e instanceof this ? e : new this(e);
            }, e.prototype.getOrigin = function () {
              return this.absoluteURL.split("/", 3).join("/");
            }, e.prototype.getPath = function () {
              var e, t;
              return null != (e = null != (t = this.requestURL.match(/\/\/[^\/]*(\/[^?;]*)/)) ? t[1] : void 0) ? e : "/";
            }, e.prototype.getPathComponents = function () {
              return this.getPath().split("/").slice(1);
            }, e.prototype.getLastPathComponent = function () {
              return this.getPathComponents().slice(-1)[0];
            }, e.prototype.getExtension = function () {
              var e, t;
              return null != (e = null != (t = this.getLastPathComponent().match(/\.[^.]*$/)) ? t[0] : void 0) ? e : "";
            }, e.prototype.isHTML = function () {
              return this.getExtension().match(/^(?:|\.(?:htm|html|xhtml))$/);
            }, e.prototype.isPrefixedBy = function (e) {
              var t;
              return t = n(e), this.isEqualTo(e) || o(this.absoluteURL, t);
            }, e.prototype.isEqualTo = function (e) {
              return this.absoluteURL === (null != e ? e.absoluteURL : void 0);
            }, e.prototype.toCacheKey = function () {
              return this.requestURL;
            }, e.prototype.toJSON = function () {
              return this.absoluteURL;
            }, e.prototype.toString = function () {
              return this.absoluteURL;
            }, e.prototype.valueOf = function () {
              return this.absoluteURL;
            }, n = function n(e) {
              return t(e.getOrigin() + e.getPath());
            }, t = function t(e) {
              return r(e, "/") ? e : e + "/";
            }, o = function o(e, t) {
              return e.slice(0, t.length) === t;
            }, r = function r(e, t) {
              return e.slice(-t.length) === t;
            }, e;
          }();
        }.call(this), function () {
          var e = function e(_e2, t) {
            return function () {
              return _e2.apply(t, arguments);
            };
          };

          s.HttpRequest = function () {
            function t(t, n, r) {
              this.delegate = t, this.requestCanceled = e(this.requestCanceled, this), this.requestTimedOut = e(this.requestTimedOut, this), this.requestFailed = e(this.requestFailed, this), this.requestLoaded = e(this.requestLoaded, this), this.requestProgressed = e(this.requestProgressed, this), this.url = s.Location.wrap(n).requestURL, this.referrer = s.Location.wrap(r).absoluteURL, this.createXHR();
            }

            return t.NETWORK_FAILURE = 0, t.TIMEOUT_FAILURE = -1, t.timeout = 60, t.prototype.send = function () {
              var e;
              return this.xhr && !this.sent ? (this.notifyApplicationBeforeRequestStart(), this.setProgress(0), this.xhr.send(), this.sent = !0, "function" == typeof (e = this.delegate).requestStarted ? e.requestStarted() : void 0) : void 0;
            }, t.prototype.cancel = function () {
              return this.xhr && this.sent ? this.xhr.abort() : void 0;
            }, t.prototype.requestProgressed = function (e) {
              return e.lengthComputable ? this.setProgress(e.loaded / e.total) : void 0;
            }, t.prototype.requestLoaded = function () {
              return this.endRequest(function (e) {
                return function () {
                  var t;
                  return 200 <= (t = e.xhr.status) && 300 > t ? e.delegate.requestCompletedWithResponse(e.xhr.responseText, e.xhr.getResponseHeader("Turbolinks-Location")) : (e.failed = !0, e.delegate.requestFailedWithStatusCode(e.xhr.status, e.xhr.responseText));
                };
              }(this));
            }, t.prototype.requestFailed = function () {
              return this.endRequest(function (e) {
                return function () {
                  return e.failed = !0, e.delegate.requestFailedWithStatusCode(e.constructor.NETWORK_FAILURE);
                };
              }(this));
            }, t.prototype.requestTimedOut = function () {
              return this.endRequest(function (e) {
                return function () {
                  return e.failed = !0, e.delegate.requestFailedWithStatusCode(e.constructor.TIMEOUT_FAILURE);
                };
              }(this));
            }, t.prototype.requestCanceled = function () {
              return this.endRequest();
            }, t.prototype.notifyApplicationBeforeRequestStart = function () {
              return s.dispatch("turbolinks:request-start", {
                data: {
                  url: this.url,
                  xhr: this.xhr
                }
              });
            }, t.prototype.notifyApplicationAfterRequestEnd = function () {
              return s.dispatch("turbolinks:request-end", {
                data: {
                  url: this.url,
                  xhr: this.xhr
                }
              });
            }, t.prototype.createXHR = function () {
              return this.xhr = new XMLHttpRequest(), this.xhr.open("GET", this.url, !0), this.xhr.timeout = 1e3 * this.constructor.timeout, this.xhr.setRequestHeader("Accept", "text/html, application/xhtml+xml"), this.xhr.setRequestHeader("Turbolinks-Referrer", this.referrer), this.xhr.onprogress = this.requestProgressed, this.xhr.onload = this.requestLoaded, this.xhr.onerror = this.requestFailed, this.xhr.ontimeout = this.requestTimedOut, this.xhr.onabort = this.requestCanceled;
            }, t.prototype.endRequest = function (e) {
              return this.xhr ? (this.notifyApplicationAfterRequestEnd(), null != e && e.call(this), this.destroy()) : void 0;
            }, t.prototype.setProgress = function (e) {
              var t;
              return this.progress = e, "function" == typeof (t = this.delegate).requestProgressed ? t.requestProgressed(this.progress) : void 0;
            }, t.prototype.destroy = function () {
              var e;
              return this.setProgress(1), "function" == typeof (e = this.delegate).requestFinished && e.requestFinished(), this.delegate = null, this.xhr = null;
            }, t;
          }();
        }.call(this), function () {
          s.ProgressBar = function () {
            function e() {
              this.trickle = function (e, t) {
                return function () {
                  return e.apply(t, arguments);
                };
              }(this.trickle, this), this.stylesheetElement = this.createStylesheetElement(), this.progressElement = this.createProgressElement();
            }

            var t;
            return t = 300, e.defaultCSS = ".turbolinks-progress-bar {\n  position: fixed;\n  display: block;\n  top: 0;\n  left: 0;\n  height: 3px;\n  background: #0076ff;\n  z-index: 9999;\n  transition: width 300ms ease-out, opacity 150ms 150ms ease-in;\n  transform: translate3d(0, 0, 0);\n}", e.prototype.show = function () {
              return this.visible ? void 0 : (this.visible = !0, this.installStylesheetElement(), this.installProgressElement(), this.startTrickling());
            }, e.prototype.hide = function () {
              return this.visible && !this.hiding ? (this.hiding = !0, this.fadeProgressElement(function (e) {
                return function () {
                  return e.uninstallProgressElement(), e.stopTrickling(), e.visible = !1, e.hiding = !1;
                };
              }(this))) : void 0;
            }, e.prototype.setValue = function (e) {
              return this.value = e, this.refresh();
            }, e.prototype.installStylesheetElement = function () {
              return document.head.insertBefore(this.stylesheetElement, document.head.firstChild);
            }, e.prototype.installProgressElement = function () {
              return this.progressElement.style.width = 0, this.progressElement.style.opacity = 1, document.documentElement.insertBefore(this.progressElement, document.body), this.refresh();
            }, e.prototype.fadeProgressElement = function (e) {
              return this.progressElement.style.opacity = 0, setTimeout(e, 450);
            }, e.prototype.uninstallProgressElement = function () {
              return this.progressElement.parentNode ? document.documentElement.removeChild(this.progressElement) : void 0;
            }, e.prototype.startTrickling = function () {
              return null != this.trickleInterval ? this.trickleInterval : this.trickleInterval = setInterval(this.trickle, t);
            }, e.prototype.stopTrickling = function () {
              return clearInterval(this.trickleInterval), this.trickleInterval = null;
            }, e.prototype.trickle = function () {
              return this.setValue(this.value + Math.random() / 100);
            }, e.prototype.refresh = function () {
              return requestAnimationFrame(function (e) {
                return function () {
                  return e.progressElement.style.width = 10 + 90 * e.value + "%";
                };
              }(this));
            }, e.prototype.createStylesheetElement = function () {
              var e;
              return (e = document.createElement("style")).type = "text/css", e.textContent = this.constructor.defaultCSS, e;
            }, e.prototype.createProgressElement = function () {
              var e;
              return (e = document.createElement("div")).className = "turbolinks-progress-bar", e;
            }, e;
          }();
        }.call(this), function () {
          s.BrowserAdapter = function () {
            function e(e) {
              this.controller = e, this.showProgressBar = function (e, t) {
                return function () {
                  return e.apply(t, arguments);
                };
              }(this.showProgressBar, this), this.progressBar = new s.ProgressBar();
            }

            var t, n, r;
            return r = s.HttpRequest, t = r.NETWORK_FAILURE, n = r.TIMEOUT_FAILURE, e.prototype.visitProposedToLocationWithAction = function (e, t) {
              return this.controller.startVisitToLocationWithAction(e, t);
            }, e.prototype.visitStarted = function (e) {
              return e.issueRequest(), e.changeHistory(), e.loadCachedSnapshot();
            }, e.prototype.visitRequestStarted = function (e) {
              return this.progressBar.setValue(0), e.hasCachedSnapshot() || "restore" !== e.action ? this.showProgressBarAfterDelay() : this.showProgressBar();
            }, e.prototype.visitRequestProgressed = function (e) {
              return this.progressBar.setValue(e.progress);
            }, e.prototype.visitRequestCompleted = function (e) {
              return e.loadResponse();
            }, e.prototype.visitRequestFailedWithStatusCode = function (e, r) {
              switch (r) {
                case t:
                case n:
                  return this.reload();

                default:
                  return e.loadResponse();
              }
            }, e.prototype.visitRequestFinished = function (e) {
              return this.hideProgressBar();
            }, e.prototype.visitCompleted = function (e) {
              return e.followRedirect();
            }, e.prototype.pageInvalidated = function () {
              return this.reload();
            }, e.prototype.showProgressBarAfterDelay = function () {
              return this.progressBarTimeout = setTimeout(this.showProgressBar, this.controller.progressBarDelay);
            }, e.prototype.showProgressBar = function () {
              return this.progressBar.show();
            }, e.prototype.hideProgressBar = function () {
              return this.progressBar.hide(), clearTimeout(this.progressBarTimeout);
            }, e.prototype.reload = function () {
              return window.location.reload();
            }, e;
          }();
        }.call(this), function () {
          var e = function e(_e3, t) {
            return function () {
              return _e3.apply(t, arguments);
            };
          };

          s.History = function () {
            function t(t) {
              this.delegate = t, this.onPageLoad = e(this.onPageLoad, this), this.onPopState = e(this.onPopState, this);
            }

            return t.prototype.start = function () {
              return this.started ? void 0 : (addEventListener("popstate", this.onPopState, !1), addEventListener("load", this.onPageLoad, !1), this.started = !0);
            }, t.prototype.stop = function () {
              return this.started ? (removeEventListener("popstate", this.onPopState, !1), removeEventListener("load", this.onPageLoad, !1), this.started = !1) : void 0;
            }, t.prototype.push = function (e, t) {
              return e = s.Location.wrap(e), this.update("push", e, t);
            }, t.prototype.replace = function (e, t) {
              return e = s.Location.wrap(e), this.update("replace", e, t);
            }, t.prototype.onPopState = function (e) {
              var t, n, r, o;
              return this.shouldHandlePopState() && (o = null != (n = e.state) ? n.turbolinks : void 0) ? (t = s.Location.wrap(window.location), r = o.restorationIdentifier, this.delegate.historyPoppedToLocationWithRestorationIdentifier(t, r)) : void 0;
            }, t.prototype.onPageLoad = function (e) {
              return s.defer(function (e) {
                return function () {
                  return e.pageLoaded = !0;
                };
              }(this));
            }, t.prototype.shouldHandlePopState = function () {
              return this.pageIsLoaded();
            }, t.prototype.pageIsLoaded = function () {
              return this.pageLoaded || "complete" === document.readyState;
            }, t.prototype.update = function (e, t, n) {
              var r;
              return r = {
                turbolinks: {
                  restorationIdentifier: n
                }
              }, history[e + "State"](r, null, t);
            }, t;
          }();
        }.call(this), function () {
          s.HeadDetails = function () {
            function e(e) {
              var t, n, r, s, a;

              for (this.elements = {}, n = 0, s = e.length; s > n; n++) {
                (a = e[n]).nodeType === Node.ELEMENT_NODE && (r = a.outerHTML, (null != (t = this.elements)[r] ? t[r] : t[r] = {
                  type: i(a),
                  tracked: o(a),
                  elements: []
                }).elements.push(a));
              }
            }

            var t, n, r, o, i;
            return e.fromHeadElement = function (e) {
              var t;
              return new this(null != (t = null != e ? e.childNodes : void 0) ? t : []);
            }, e.prototype.hasElementWithKey = function (e) {
              return e in this.elements;
            }, e.prototype.getTrackedElementSignature = function () {
              var e;
              return function () {
                var t, n;

                for (e in n = [], t = this.elements) {
                  t[e].tracked && n.push(e);
                }

                return n;
              }.call(this).join("");
            }, e.prototype.getScriptElementsNotInDetails = function (e) {
              return this.getElementsMatchingTypeNotInDetails("script", e);
            }, e.prototype.getStylesheetElementsNotInDetails = function (e) {
              return this.getElementsMatchingTypeNotInDetails("stylesheet", e);
            }, e.prototype.getElementsMatchingTypeNotInDetails = function (e, t) {
              var n, r, o, i, s, a;

              for (r in s = [], o = this.elements) {
                a = (i = o[r]).type, n = i.elements, a !== e || t.hasElementWithKey(r) || s.push(n[0]);
              }

              return s;
            }, e.prototype.getProvisionalElements = function () {
              var e, t, n, r, o, i, s;

              for (t in n = [], r = this.elements) {
                s = (o = r[t]).type, i = o.tracked, e = o.elements, null != s || i ? e.length > 1 && n.push.apply(n, e.slice(1)) : n.push.apply(n, e);
              }

              return n;
            }, e.prototype.getMetaValue = function (e) {
              var t;
              return null != (t = this.findMetaElementByName(e)) ? t.getAttribute("content") : void 0;
            }, e.prototype.findMetaElementByName = function (e) {
              var n, r, o, i;

              for (o in n = void 0, i = this.elements) {
                r = i[o].elements, t(r[0], e) && (n = r[0]);
              }

              return n;
            }, i = function i(e) {
              return n(e) ? "script" : r(e) ? "stylesheet" : void 0;
            }, o = function o(e) {
              return "reload" === e.getAttribute("data-turbolinks-track");
            }, n = function n(e) {
              return "script" === e.tagName.toLowerCase();
            }, r = function r(e) {
              var t;
              return "style" === (t = e.tagName.toLowerCase()) || "link" === t && "stylesheet" === e.getAttribute("rel");
            }, t = function t(e, _t2) {
              return "meta" === e.tagName.toLowerCase() && e.getAttribute("name") === _t2;
            }, e;
          }();
        }.call(this), function () {
          s.Snapshot = function () {
            function e(e, t) {
              this.headDetails = e, this.bodyElement = t;
            }

            return e.wrap = function (e) {
              return e instanceof this ? e : "string" == typeof e ? this.fromHTMLString(e) : this.fromHTMLElement(e);
            }, e.fromHTMLString = function (e) {
              var t;
              return (t = document.createElement("html")).innerHTML = e, this.fromHTMLElement(t);
            }, e.fromHTMLElement = function (e) {
              var t, n, r;
              return n = e.querySelector("head"), t = null != (r = e.querySelector("body")) ? r : document.createElement("body"), new this(s.HeadDetails.fromHeadElement(n), t);
            }, e.prototype.clone = function () {
              return new this.constructor(this.headDetails, this.bodyElement.cloneNode(!0));
            }, e.prototype.getRootLocation = function () {
              var e, t;
              return t = null != (e = this.getSetting("root")) ? e : "/", new s.Location(t);
            }, e.prototype.getCacheControlValue = function () {
              return this.getSetting("cache-control");
            }, e.prototype.getElementForAnchor = function (e) {
              try {
                return this.bodyElement.querySelector("[id='" + e + "'], a[name='" + e + "']");
              } catch (s) {}
            }, e.prototype.getPermanentElements = function () {
              return this.bodyElement.querySelectorAll("[id][data-turbolinks-permanent]");
            }, e.prototype.getPermanentElementById = function (e) {
              return this.bodyElement.querySelector("#" + e + "[data-turbolinks-permanent]");
            }, e.prototype.getPermanentElementsPresentInSnapshot = function (e) {
              var t, n, r, o, i;

              for (i = [], n = 0, r = (o = this.getPermanentElements()).length; r > n; n++) {
                t = o[n], e.getPermanentElementById(t.id) && i.push(t);
              }

              return i;
            }, e.prototype.findFirstAutofocusableElement = function () {
              return this.bodyElement.querySelector("[autofocus]");
            }, e.prototype.hasAnchor = function (e) {
              return null != this.getElementForAnchor(e);
            }, e.prototype.isPreviewable = function () {
              return "no-preview" !== this.getCacheControlValue();
            }, e.prototype.isCacheable = function () {
              return "no-cache" !== this.getCacheControlValue();
            }, e.prototype.isVisitable = function () {
              return "reload" !== this.getSetting("visit-control");
            }, e.prototype.getSetting = function (e) {
              return this.headDetails.getMetaValue("turbolinks-" + e);
            }, e;
          }();
        }.call(this), function () {
          var e = [].slice;

          s.Renderer = function () {
            function t() {}

            var n;
            return t.render = function () {
              var t, n, r;
              return n = arguments[0], t = arguments[1], (r = function (e, t, n) {
                n.prototype = e.prototype;
                var r = new n(),
                    o = e.apply(r, t);
                return Object(o) === o ? o : r;
              }(this, 3 <= arguments.length ? e.call(arguments, 2) : [], function () {})).delegate = n, r.render(t), r;
            }, t.prototype.renderView = function (e) {
              return this.delegate.viewWillRender(this.newBody), e(), this.delegate.viewRendered(this.newBody);
            }, t.prototype.invalidateView = function () {
              return this.delegate.viewInvalidated();
            }, t.prototype.createScriptElement = function (e) {
              var t;
              return "false" === e.getAttribute("data-turbolinks-eval") ? e : ((t = document.createElement("script")).textContent = e.textContent, t.async = !1, n(t, e), t);
            }, n = function n(e, t) {
              var n, r, o, i, s, a, l;

              for (a = [], n = 0, r = (i = t.attributes).length; r > n; n++) {
                o = (s = i[n]).name, l = s.value, a.push(e.setAttribute(o, l));
              }

              return a;
            }, t;
          }();
        }.call(this), function () {
          var e,
              t,
              n = function n(e, t) {
            function n() {
              this.constructor = e;
            }

            for (var o in t) {
              r.call(t, o) && (e[o] = t[o]);
            }

            return n.prototype = t.prototype, e.prototype = new n(), e.__super__ = t.prototype, e;
          },
              r = {}.hasOwnProperty;

          s.SnapshotRenderer = function (r) {
            function o(e, t, n) {
              this.currentSnapshot = e, this.newSnapshot = t, this.isPreview = n, this.currentHeadDetails = this.currentSnapshot.headDetails, this.newHeadDetails = this.newSnapshot.headDetails, this.currentBody = this.currentSnapshot.bodyElement, this.newBody = this.newSnapshot.bodyElement;
            }

            return n(o, r), o.prototype.render = function (e) {
              return this.shouldRender() ? (this.mergeHead(), this.renderView(function (t) {
                return function () {
                  return t.replaceBody(), t.isPreview || t.focusFirstAutofocusableElement(), e();
                };
              }(this))) : this.invalidateView();
            }, o.prototype.mergeHead = function () {
              return this.copyNewHeadStylesheetElements(), this.copyNewHeadScriptElements(), this.removeCurrentHeadProvisionalElements(), this.copyNewHeadProvisionalElements();
            }, o.prototype.replaceBody = function () {
              var e;
              return e = this.relocateCurrentBodyPermanentElements(), this.activateNewBodyScriptElements(), this.assignNewBody(), this.replacePlaceholderElementsWithClonedPermanentElements(e);
            }, o.prototype.shouldRender = function () {
              return this.newSnapshot.isVisitable() && this.trackedElementsAreIdentical();
            }, o.prototype.trackedElementsAreIdentical = function () {
              return this.currentHeadDetails.getTrackedElementSignature() === this.newHeadDetails.getTrackedElementSignature();
            }, o.prototype.copyNewHeadStylesheetElements = function () {
              var e, t, n, r, o;

              for (o = [], t = 0, n = (r = this.getNewHeadStylesheetElements()).length; n > t; t++) {
                e = r[t], o.push(document.head.appendChild(e));
              }

              return o;
            }, o.prototype.copyNewHeadScriptElements = function () {
              var e, t, n, r, o;

              for (o = [], t = 0, n = (r = this.getNewHeadScriptElements()).length; n > t; t++) {
                e = r[t], o.push(document.head.appendChild(this.createScriptElement(e)));
              }

              return o;
            }, o.prototype.removeCurrentHeadProvisionalElements = function () {
              var e, t, n, r, o;

              for (o = [], t = 0, n = (r = this.getCurrentHeadProvisionalElements()).length; n > t; t++) {
                e = r[t], o.push(document.head.removeChild(e));
              }

              return o;
            }, o.prototype.copyNewHeadProvisionalElements = function () {
              var e, t, n, r, o;

              for (o = [], t = 0, n = (r = this.getNewHeadProvisionalElements()).length; n > t; t++) {
                e = r[t], o.push(document.head.appendChild(e));
              }

              return o;
            }, o.prototype.relocateCurrentBodyPermanentElements = function () {
              var n, r, o, i, s, a, l;

              for (l = [], n = 0, r = (a = this.getCurrentBodyPermanentElements()).length; r > n; n++) {
                i = a[n], s = e(i), o = this.newSnapshot.getPermanentElementById(i.id), t(i, s.element), t(o, i), l.push(s);
              }

              return l;
            }, o.prototype.replacePlaceholderElementsWithClonedPermanentElements = function (e) {
              var n, r, o, i, s, a;

              for (a = [], o = 0, i = e.length; i > o; o++) {
                r = (s = e[o]).element, n = s.permanentElement.cloneNode(!0), a.push(t(r, n));
              }

              return a;
            }, o.prototype.activateNewBodyScriptElements = function () {
              var e, n, r, o, i, s;

              for (s = [], n = 0, o = (i = this.getNewBodyScriptElements()).length; o > n; n++) {
                r = i[n], e = this.createScriptElement(r), s.push(t(r, e));
              }

              return s;
            }, o.prototype.assignNewBody = function () {
              return document.body = this.newBody;
            }, o.prototype.focusFirstAutofocusableElement = function () {
              var e;
              return null != (e = this.newSnapshot.findFirstAutofocusableElement()) ? e.focus() : void 0;
            }, o.prototype.getNewHeadStylesheetElements = function () {
              return this.newHeadDetails.getStylesheetElementsNotInDetails(this.currentHeadDetails);
            }, o.prototype.getNewHeadScriptElements = function () {
              return this.newHeadDetails.getScriptElementsNotInDetails(this.currentHeadDetails);
            }, o.prototype.getCurrentHeadProvisionalElements = function () {
              return this.currentHeadDetails.getProvisionalElements();
            }, o.prototype.getNewHeadProvisionalElements = function () {
              return this.newHeadDetails.getProvisionalElements();
            }, o.prototype.getCurrentBodyPermanentElements = function () {
              return this.currentSnapshot.getPermanentElementsPresentInSnapshot(this.newSnapshot);
            }, o.prototype.getNewBodyScriptElements = function () {
              return this.newBody.querySelectorAll("script");
            }, o;
          }(s.Renderer), e = function e(_e4) {
            var t;
            return (t = document.createElement("meta")).setAttribute("name", "turbolinks-permanent-placeholder"), t.setAttribute("content", _e4.id), {
              element: t,
              permanentElement: _e4
            };
          }, t = function t(e, _t3) {
            var n;
            return (n = e.parentNode) ? n.replaceChild(_t3, e) : void 0;
          };
        }.call(this), function () {
          var e = function e(_e5, n) {
            function r() {
              this.constructor = _e5;
            }

            for (var o in n) {
              t.call(n, o) && (_e5[o] = n[o]);
            }

            return r.prototype = n.prototype, _e5.prototype = new r(), _e5.__super__ = n.prototype, _e5;
          },
              t = {}.hasOwnProperty;

          s.ErrorRenderer = function (t) {
            function n(e) {
              var t;
              (t = document.createElement("html")).innerHTML = e, this.newHead = t.querySelector("head"), this.newBody = t.querySelector("body");
            }

            return e(n, t), n.prototype.render = function (e) {
              return this.renderView(function (t) {
                return function () {
                  return t.replaceHeadAndBody(), t.activateBodyScriptElements(), e();
                };
              }(this));
            }, n.prototype.replaceHeadAndBody = function () {
              var e, t;
              return t = document.head, e = document.body, t.parentNode.replaceChild(this.newHead, t), e.parentNode.replaceChild(this.newBody, e);
            }, n.prototype.activateBodyScriptElements = function () {
              var e, t, n, r, o, i;

              for (i = [], t = 0, n = (r = this.getScriptElements()).length; n > t; t++) {
                o = r[t], e = this.createScriptElement(o), i.push(o.parentNode.replaceChild(e, o));
              }

              return i;
            }, n.prototype.getScriptElements = function () {
              return document.documentElement.querySelectorAll("script");
            }, n;
          }(s.Renderer);
        }.call(this), function () {
          s.View = function () {
            function e(e) {
              this.delegate = e, this.htmlElement = document.documentElement;
            }

            return e.prototype.getRootLocation = function () {
              return this.getSnapshot().getRootLocation();
            }, e.prototype.getElementForAnchor = function (e) {
              return this.getSnapshot().getElementForAnchor(e);
            }, e.prototype.getSnapshot = function () {
              return s.Snapshot.fromHTMLElement(this.htmlElement);
            }, e.prototype.render = function (e, t) {
              var n, r, o;
              return o = e.snapshot, n = e.error, r = e.isPreview, this.markAsPreview(r), null != o ? this.renderSnapshot(o, r, t) : this.renderError(n, t);
            }, e.prototype.markAsPreview = function (e) {
              return e ? this.htmlElement.setAttribute("data-turbolinks-preview", "") : this.htmlElement.removeAttribute("data-turbolinks-preview");
            }, e.prototype.renderSnapshot = function (e, t, n) {
              return s.SnapshotRenderer.render(this.delegate, n, this.getSnapshot(), s.Snapshot.wrap(e), t);
            }, e.prototype.renderError = function (e, t) {
              return s.ErrorRenderer.render(this.delegate, t, e);
            }, e;
          }();
        }.call(this), function () {
          s.ScrollManager = function () {
            function e(e) {
              this.delegate = e, this.onScroll = function (e, t) {
                return function () {
                  return e.apply(t, arguments);
                };
              }(this.onScroll, this), this.onScroll = s.throttle(this.onScroll);
            }

            return e.prototype.start = function () {
              return this.started ? void 0 : (addEventListener("scroll", this.onScroll, !1), this.onScroll(), this.started = !0);
            }, e.prototype.stop = function () {
              return this.started ? (removeEventListener("scroll", this.onScroll, !1), this.started = !1) : void 0;
            }, e.prototype.scrollToElement = function (e) {
              return e.scrollIntoView();
            }, e.prototype.scrollToPosition = function (e) {
              var t, n;
              return t = e.x, n = e.y, window.scrollTo(t, n);
            }, e.prototype.onScroll = function (e) {
              return this.updatePosition({
                x: window.pageXOffset,
                y: window.pageYOffset
              });
            }, e.prototype.updatePosition = function (e) {
              var t;
              return this.position = e, null != (t = this.delegate) ? t.scrollPositionChanged(this.position) : void 0;
            }, e;
          }();
        }.call(this), function () {
          s.SnapshotCache = function () {
            function e(e) {
              this.size = e, this.keys = [], this.snapshots = {};
            }

            var t;
            return e.prototype.has = function (e) {
              return t(e) in this.snapshots;
            }, e.prototype.get = function (e) {
              var t;
              if (this.has(e)) return t = this.read(e), this.touch(e), t;
            }, e.prototype.put = function (e, t) {
              return this.write(e, t), this.touch(e), t;
            }, e.prototype.read = function (e) {
              var n;
              return n = t(e), this.snapshots[n];
            }, e.prototype.write = function (e, n) {
              var r;
              return r = t(e), this.snapshots[r] = n;
            }, e.prototype.touch = function (e) {
              var n, r;
              return r = t(e), (n = this.keys.indexOf(r)) > -1 && this.keys.splice(n, 1), this.keys.unshift(r), this.trim();
            }, e.prototype.trim = function () {
              var e, t, n, r, o;

              for (o = [], e = 0, n = (r = this.keys.splice(this.size)).length; n > e; e++) {
                t = r[e], o.push(delete this.snapshots[t]);
              }

              return o;
            }, t = function t(e) {
              return s.Location.wrap(e).toCacheKey();
            }, e;
          }();
        }.call(this), function () {
          s.Visit = function () {
            function e(e, t, n) {
              this.controller = e, this.action = n, this.performScroll = function (e, t) {
                return function () {
                  return e.apply(t, arguments);
                };
              }(this.performScroll, this), this.identifier = s.uuid(), this.location = s.Location.wrap(t), this.adapter = this.controller.adapter, this.state = "initialized", this.timingMetrics = {};
            }

            var t;
            return e.prototype.start = function () {
              return "initialized" === this.state ? (this.recordTimingMetric("visitStart"), this.state = "started", this.adapter.visitStarted(this)) : void 0;
            }, e.prototype.cancel = function () {
              var e;
              return "started" === this.state ? (null != (e = this.request) && e.cancel(), this.cancelRender(), this.state = "canceled") : void 0;
            }, e.prototype.complete = function () {
              var e;
              return "started" === this.state ? (this.recordTimingMetric("visitEnd"), this.state = "completed", "function" == typeof (e = this.adapter).visitCompleted && e.visitCompleted(this), this.controller.visitCompleted(this)) : void 0;
            }, e.prototype.fail = function () {
              var e;
              return "started" === this.state ? (this.state = "failed", "function" == typeof (e = this.adapter).visitFailed ? e.visitFailed(this) : void 0) : void 0;
            }, e.prototype.changeHistory = function () {
              var e, n;
              return this.historyChanged ? void 0 : (e = this.location.isEqualTo(this.referrer) ? "replace" : this.action, n = t(e), this.controller[n](this.location, this.restorationIdentifier), this.historyChanged = !0);
            }, e.prototype.issueRequest = function () {
              return this.shouldIssueRequest() && null == this.request ? (this.progress = 0, this.request = new s.HttpRequest(this, this.location, this.referrer), this.request.send()) : void 0;
            }, e.prototype.getCachedSnapshot = function () {
              var e;
              return !(e = this.controller.getCachedSnapshotForLocation(this.location)) || null != this.location.anchor && !e.hasAnchor(this.location.anchor) || "restore" !== this.action && !e.isPreviewable() ? void 0 : e;
            }, e.prototype.hasCachedSnapshot = function () {
              return null != this.getCachedSnapshot();
            }, e.prototype.loadCachedSnapshot = function () {
              var e, t;
              return (t = this.getCachedSnapshot()) ? (e = this.shouldIssueRequest(), this.render(function () {
                var n;
                return this.cacheSnapshot(), this.controller.render({
                  snapshot: t,
                  isPreview: e
                }, this.performScroll), "function" == typeof (n = this.adapter).visitRendered && n.visitRendered(this), e ? void 0 : this.complete();
              })) : void 0;
            }, e.prototype.loadResponse = function () {
              return null != this.response ? this.render(function () {
                var e, t;
                return this.cacheSnapshot(), this.request.failed ? (this.controller.render({
                  error: this.response
                }, this.performScroll), "function" == typeof (e = this.adapter).visitRendered && e.visitRendered(this), this.fail()) : (this.controller.render({
                  snapshot: this.response
                }, this.performScroll), "function" == typeof (t = this.adapter).visitRendered && t.visitRendered(this), this.complete());
              }) : void 0;
            }, e.prototype.followRedirect = function () {
              return this.redirectedToLocation && !this.followedRedirect ? (this.location = this.redirectedToLocation, this.controller.replaceHistoryWithLocationAndRestorationIdentifier(this.redirectedToLocation, this.restorationIdentifier), this.followedRedirect = !0) : void 0;
            }, e.prototype.requestStarted = function () {
              var e;
              return this.recordTimingMetric("requestStart"), "function" == typeof (e = this.adapter).visitRequestStarted ? e.visitRequestStarted(this) : void 0;
            }, e.prototype.requestProgressed = function (e) {
              var t;
              return this.progress = e, "function" == typeof (t = this.adapter).visitRequestProgressed ? t.visitRequestProgressed(this) : void 0;
            }, e.prototype.requestCompletedWithResponse = function (e, t) {
              return this.response = e, null != t && (this.redirectedToLocation = s.Location.wrap(t)), this.adapter.visitRequestCompleted(this);
            }, e.prototype.requestFailedWithStatusCode = function (e, t) {
              return this.response = t, this.adapter.visitRequestFailedWithStatusCode(this, e);
            }, e.prototype.requestFinished = function () {
              var e;
              return this.recordTimingMetric("requestEnd"), "function" == typeof (e = this.adapter).visitRequestFinished ? e.visitRequestFinished(this) : void 0;
            }, e.prototype.performScroll = function () {
              return this.scrolled ? void 0 : ("restore" === this.action ? this.scrollToRestoredPosition() || this.scrollToTop() : this.scrollToAnchor() || this.scrollToTop(), this.scrolled = !0);
            }, e.prototype.scrollToRestoredPosition = function () {
              var e, t;
              return null != (e = null != (t = this.restorationData) ? t.scrollPosition : void 0) ? (this.controller.scrollToPosition(e), !0) : void 0;
            }, e.prototype.scrollToAnchor = function () {
              return null != this.location.anchor ? (this.controller.scrollToAnchor(this.location.anchor), !0) : void 0;
            }, e.prototype.scrollToTop = function () {
              return this.controller.scrollToPosition({
                x: 0,
                y: 0
              });
            }, e.prototype.recordTimingMetric = function (e) {
              var t;
              return null != (t = this.timingMetrics)[e] ? t[e] : t[e] = new Date().getTime();
            }, e.prototype.getTimingMetrics = function () {
              return s.copyObject(this.timingMetrics);
            }, t = function t(e) {
              switch (e) {
                case "replace":
                  return "replaceHistoryWithLocationAndRestorationIdentifier";

                case "advance":
                case "restore":
                  return "pushHistoryWithLocationAndRestorationIdentifier";
              }
            }, e.prototype.shouldIssueRequest = function () {
              return "restore" !== this.action || !this.hasCachedSnapshot();
            }, e.prototype.cacheSnapshot = function () {
              return this.snapshotCached ? void 0 : (this.controller.cacheSnapshot(), this.snapshotCached = !0);
            }, e.prototype.render = function (e) {
              return this.cancelRender(), this.frame = requestAnimationFrame(function (t) {
                return function () {
                  return t.frame = null, e.call(t);
                };
              }(this));
            }, e.prototype.cancelRender = function () {
              return this.frame ? cancelAnimationFrame(this.frame) : void 0;
            }, e;
          }();
        }.call(this), function () {
          var e = function e(_e6, t) {
            return function () {
              return _e6.apply(t, arguments);
            };
          };

          s.Controller = function () {
            function t() {
              this.clickBubbled = e(this.clickBubbled, this), this.clickCaptured = e(this.clickCaptured, this), this.pageLoaded = e(this.pageLoaded, this), this.history = new s.History(this), this.view = new s.View(this), this.scrollManager = new s.ScrollManager(this), this.restorationData = {}, this.clearCache(), this.setProgressBarDelay(500);
            }

            return t.prototype.start = function () {
              return s.supported && !this.started ? (addEventListener("click", this.clickCaptured, !0), addEventListener("DOMContentLoaded", this.pageLoaded, !1), this.scrollManager.start(), this.startHistory(), this.started = !0, this.enabled = !0) : void 0;
            }, t.prototype.disable = function () {
              return this.enabled = !1;
            }, t.prototype.stop = function () {
              return this.started ? (removeEventListener("click", this.clickCaptured, !0), removeEventListener("DOMContentLoaded", this.pageLoaded, !1), this.scrollManager.stop(), this.stopHistory(), this.started = !1) : void 0;
            }, t.prototype.clearCache = function () {
              return this.cache = new s.SnapshotCache(10);
            }, t.prototype.visit = function (e, t) {
              var n, r;
              return null == t && (t = {}), e = s.Location.wrap(e), this.applicationAllowsVisitingLocation(e) ? this.locationIsVisitable(e) ? (n = null != (r = t.action) ? r : "advance", this.adapter.visitProposedToLocationWithAction(e, n)) : window.location = e : void 0;
            }, t.prototype.startVisitToLocationWithAction = function (e, t, n) {
              var r;
              return s.supported ? (r = this.getRestorationDataForIdentifier(n), this.startVisit(e, t, {
                restorationData: r
              })) : window.location = e;
            }, t.prototype.setProgressBarDelay = function (e) {
              return this.progressBarDelay = e;
            }, t.prototype.startHistory = function () {
              return this.location = s.Location.wrap(window.location), this.restorationIdentifier = s.uuid(), this.history.start(), this.history.replace(this.location, this.restorationIdentifier);
            }, t.prototype.stopHistory = function () {
              return this.history.stop();
            }, t.prototype.pushHistoryWithLocationAndRestorationIdentifier = function (e, t) {
              return this.restorationIdentifier = t, this.location = s.Location.wrap(e), this.history.push(this.location, this.restorationIdentifier);
            }, t.prototype.replaceHistoryWithLocationAndRestorationIdentifier = function (e, t) {
              return this.restorationIdentifier = t, this.location = s.Location.wrap(e), this.history.replace(this.location, this.restorationIdentifier);
            }, t.prototype.historyPoppedToLocationWithRestorationIdentifier = function (e, t) {
              var n;
              return this.restorationIdentifier = t, this.enabled ? (n = this.getRestorationDataForIdentifier(this.restorationIdentifier), this.startVisit(e, "restore", {
                restorationIdentifier: this.restorationIdentifier,
                restorationData: n,
                historyChanged: !0
              }), this.location = s.Location.wrap(e)) : this.adapter.pageInvalidated();
            }, t.prototype.getCachedSnapshotForLocation = function (e) {
              var t;
              return null != (t = this.cache.get(e)) ? t.clone() : void 0;
            }, t.prototype.shouldCacheSnapshot = function () {
              return this.view.getSnapshot().isCacheable();
            }, t.prototype.cacheSnapshot = function () {
              var e, t;
              return this.shouldCacheSnapshot() ? (this.notifyApplicationBeforeCachingSnapshot(), t = this.view.getSnapshot(), e = this.lastRenderedLocation, s.defer(function (n) {
                return function () {
                  return n.cache.put(e, t.clone());
                };
              }(this))) : void 0;
            }, t.prototype.scrollToAnchor = function (e) {
              var t;
              return (t = this.view.getElementForAnchor(e)) ? this.scrollToElement(t) : this.scrollToPosition({
                x: 0,
                y: 0
              });
            }, t.prototype.scrollToElement = function (e) {
              return this.scrollManager.scrollToElement(e);
            }, t.prototype.scrollToPosition = function (e) {
              return this.scrollManager.scrollToPosition(e);
            }, t.prototype.scrollPositionChanged = function (e) {
              return this.getCurrentRestorationData().scrollPosition = e;
            }, t.prototype.render = function (e, t) {
              return this.view.render(e, t);
            }, t.prototype.viewInvalidated = function () {
              return this.adapter.pageInvalidated();
            }, t.prototype.viewWillRender = function (e) {
              return this.notifyApplicationBeforeRender(e);
            }, t.prototype.viewRendered = function () {
              return this.lastRenderedLocation = this.currentVisit.location, this.notifyApplicationAfterRender();
            }, t.prototype.pageLoaded = function () {
              return this.lastRenderedLocation = this.location, this.notifyApplicationAfterPageLoad();
            }, t.prototype.clickCaptured = function () {
              return removeEventListener("click", this.clickBubbled, !1), addEventListener("click", this.clickBubbled, !1);
            }, t.prototype.clickBubbled = function (e) {
              var t, n, r;
              return this.enabled && this.clickEventIsSignificant(e) && (n = this.getVisitableLinkForNode(e.target)) && (r = this.getVisitableLocationForLink(n)) && this.applicationAllowsFollowingLinkToLocation(n, r) ? (e.preventDefault(), t = this.getActionForLink(n), this.visit(r, {
                action: t
              })) : void 0;
            }, t.prototype.applicationAllowsFollowingLinkToLocation = function (e, t) {
              return !this.notifyApplicationAfterClickingLinkToLocation(e, t).defaultPrevented;
            }, t.prototype.applicationAllowsVisitingLocation = function (e) {
              return !this.notifyApplicationBeforeVisitingLocation(e).defaultPrevented;
            }, t.prototype.notifyApplicationAfterClickingLinkToLocation = function (e, t) {
              return s.dispatch("turbolinks:click", {
                target: e,
                data: {
                  url: t.absoluteURL
                },
                cancelable: !0
              });
            }, t.prototype.notifyApplicationBeforeVisitingLocation = function (e) {
              return s.dispatch("turbolinks:before-visit", {
                data: {
                  url: e.absoluteURL
                },
                cancelable: !0
              });
            }, t.prototype.notifyApplicationAfterVisitingLocation = function (e) {
              return s.dispatch("turbolinks:visit", {
                data: {
                  url: e.absoluteURL
                }
              });
            }, t.prototype.notifyApplicationBeforeCachingSnapshot = function () {
              return s.dispatch("turbolinks:before-cache");
            }, t.prototype.notifyApplicationBeforeRender = function (e) {
              return s.dispatch("turbolinks:before-render", {
                data: {
                  newBody: e
                }
              });
            }, t.prototype.notifyApplicationAfterRender = function () {
              return s.dispatch("turbolinks:render");
            }, t.prototype.notifyApplicationAfterPageLoad = function (e) {
              return null == e && (e = {}), s.dispatch("turbolinks:load", {
                data: {
                  url: this.location.absoluteURL,
                  timing: e
                }
              });
            }, t.prototype.startVisit = function (e, t, n) {
              var r;
              return null != (r = this.currentVisit) && r.cancel(), this.currentVisit = this.createVisit(e, t, n), this.currentVisit.start(), this.notifyApplicationAfterVisitingLocation(e);
            }, t.prototype.createVisit = function (e, t, n) {
              var r, o, i, a, l;
              return a = (o = null != n ? n : {}).restorationIdentifier, i = o.restorationData, r = o.historyChanged, (l = new s.Visit(this, e, t)).restorationIdentifier = null != a ? a : s.uuid(), l.restorationData = s.copyObject(i), l.historyChanged = r, l.referrer = this.location, l;
            }, t.prototype.visitCompleted = function (e) {
              return this.notifyApplicationAfterPageLoad(e.getTimingMetrics());
            }, t.prototype.clickEventIsSignificant = function (e) {
              return !(e.defaultPrevented || e.target.isContentEditable || e.which > 1 || e.altKey || e.ctrlKey || e.metaKey || e.shiftKey);
            }, t.prototype.getVisitableLinkForNode = function (e) {
              return this.nodeIsVisitable(e) ? s.closest(e, "a[href]:not([target]):not([download])") : void 0;
            }, t.prototype.getVisitableLocationForLink = function (e) {
              var t;
              return t = new s.Location(e.getAttribute("href")), this.locationIsVisitable(t) ? t : void 0;
            }, t.prototype.getActionForLink = function (e) {
              var t;
              return null != (t = e.getAttribute("data-turbolinks-action")) ? t : "advance";
            }, t.prototype.nodeIsVisitable = function (e) {
              var t;
              return !(t = s.closest(e, "[data-turbolinks]")) || "false" !== t.getAttribute("data-turbolinks");
            }, t.prototype.locationIsVisitable = function (e) {
              return e.isPrefixedBy(this.view.getRootLocation()) && e.isHTML();
            }, t.prototype.getCurrentRestorationData = function () {
              return this.getRestorationDataForIdentifier(this.restorationIdentifier);
            }, t.prototype.getRestorationDataForIdentifier = function (e) {
              var t;
              return null != (t = this.restorationData)[e] ? t[e] : t[e] = {};
            }, t;
          }();
        }.call(this), function () {
          !function () {
            var e, t;
            if ((e = t = document.currentScript) && !t.hasAttribute("data-turbolinks-suppress-warning")) for (; e = e.parentNode;) {
              if (e === document.body) return console.warn("You are loading Turbolinks from a <script> element inside the <body> element. This is probably not what you meant to do!\n\nLoad your application\u2019s JavaScript bundle inside the <head> element instead. <script> elements in <body> are evaluated with each page change.\n\nFor more information, see: https://github.com/turbolinks/turbolinks#working-with-script-elements\n\n\u2014\u2014\nSuppress this warning by adding a `data-turbolinks-suppress-warning` attribute to: %s", t.outerHTML);
            }
          }();
        }.call(this), function () {
          var e, t, n;
          s.start = function () {
            return t() ? (null == s.controller && (s.controller = e()), s.controller.start()) : void 0;
          }, t = function t() {
            return null == window.Turbolinks && (window.Turbolinks = s), n();
          }, e = function e() {
            var e;
            return e = new s.Controller(), e.adapter = new s.BrowserAdapter(e), e;
          }, (n = function n() {
            return window.Turbolinks === s;
          })() && s.start();
        }.call(this);
      }).call(this), "object" == i(e) && e.exports ? e.exports = s : void 0 === (o = "function" === typeof (r = s) ? r.call(t, n, t, e) : r) || (e.exports = o);
    }).call(this);
  }).call(this, n(16)(e));
}, function (e, t, n) {
  var r, o, i;

  function s(e) {
    return (s = "function" === typeof Symbol && "symbol" === _typeof(Symbol.iterator) ? function (e) {
      return _typeof(e);
    } : function (e) {
      return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : _typeof(e);
    })(e);
  }

  o = [n(0)], void 0 === (i = "function" === typeof (r = function r(n) {
    var r = function () {
      if (n && n.fn && n.fn.select2 && n.fn.select2.amd) var r = n.fn.select2.amd;
      return function () {
        var e, t, n;
        r && r.requirejs || (r ? t = r : r = {}, function (r) {
          var o,
              _i2,
              a,
              l,
              c = {},
              u = {},
              p = {},
              h = {},
              d = Object.prototype.hasOwnProperty,
              f = [].slice,
              m = /\.js$/;

          function g(e, t) {
            return d.call(e, t);
          }

          function y(e, t) {
            var n,
                r,
                o,
                i,
                s,
                a,
                l,
                c,
                u,
                h,
                d,
                f = t && t.split("/"),
                g = p.map,
                y = g && g["*"] || {};

            if (e) {
              for (s = (e = e.split("/")).length - 1, p.nodeIdCompat && m.test(e[s]) && (e[s] = e[s].replace(m, "")), "." === e[0].charAt(0) && f && (e = f.slice(0, f.length - 1).concat(e)), u = 0; u < e.length; u++) {
                if ("." === (d = e[u])) e.splice(u, 1), u -= 1;else if (".." === d) {
                  if (0 === u || 1 === u && ".." === e[2] || ".." === e[u - 1]) continue;
                  u > 0 && (e.splice(u - 1, 2), u -= 2);
                }
              }

              e = e.join("/");
            }

            if ((f || y) && g) {
              for (u = (n = e.split("/")).length; u > 0; u -= 1) {
                if (r = n.slice(0, u).join("/"), f) for (h = f.length; h > 0; h -= 1) {
                  if ((o = g[f.slice(0, h).join("/")]) && (o = o[r])) {
                    i = o, a = u;
                    break;
                  }
                }
                if (i) break;
                !l && y && y[r] && (l = y[r], c = u);
              }

              !i && l && (i = l, a = c), i && (n.splice(0, a, i), e = n.join("/"));
            }

            return e;
          }

          function v(e, t) {
            return function () {
              var n = f.call(arguments, 0);
              return "string" !== typeof n[0] && 1 === n.length && n.push(null), _i2.apply(r, n.concat([e, t]));
            };
          }

          function b(e) {
            return function (t) {
              return y(t, e);
            };
          }

          function w(e) {
            return function (t) {
              c[e] = t;
            };
          }

          function E(e) {
            if (g(u, e)) {
              var t = u[e];
              delete u[e], h[e] = !0, o.apply(r, t);
            }

            if (!g(c, e) && !g(h, e)) throw new Error("No " + e);
            return c[e];
          }

          function _(e) {
            var t,
                n = e ? e.indexOf("!") : -1;
            return n > -1 && (t = e.substring(0, n), e = e.substring(n + 1, e.length)), [t, e];
          }

          function x(e) {
            return e ? _(e) : [];
          }

          function S(e) {
            return function () {
              return p && p.config && p.config[e] || {};
            };
          }

          a = function a(e, t) {
            var n,
                r = _(e),
                o = r[0],
                i = t[1];

            return e = r[1], o && (n = E(o = y(o, i))), o ? e = n && n.normalize ? n.normalize(e, b(i)) : y(e, i) : (o = (r = _(e = y(e, i)))[0], e = r[1], o && (n = E(o))), {
              f: o ? o + "!" + e : e,
              n: e,
              pr: o,
              p: n
            };
          }, l = {
            require: function require(e) {
              return v(e);
            },
            exports: function exports(e) {
              var t = c[e];
              return "undefined" !== typeof t ? t : c[e] = {};
            },
            module: function module(e) {
              return {
                id: e,
                uri: "",
                exports: c[e],
                config: S(e)
              };
            }
          }, o = function o(e, t, n, _o) {
            var i,
                p,
                d,
                f,
                m,
                y,
                b,
                _ = [],
                S = s(n);

            if (y = x(_o = _o || e), "undefined" === S || "function" === S) {
              for (t = !t.length && n.length ? ["require", "exports", "module"] : t, m = 0; m < t.length; m += 1) {
                if ("require" === (p = (f = a(t[m], y)).f)) _[m] = l.require(e);else if ("exports" === p) _[m] = l.exports(e), b = !0;else if ("module" === p) i = _[m] = l.module(e);else if (g(c, p) || g(u, p) || g(h, p)) _[m] = E(p);else {
                  if (!f.p) throw new Error(e + " missing " + p);
                  f.p.load(f.n, v(_o, !0), w(p), {}), _[m] = c[p];
                }
              }

              d = n ? n.apply(c[e], _) : void 0, e && (i && i.exports !== r && i.exports !== c[e] ? c[e] = i.exports : d === r && b || (c[e] = d));
            } else e && (c[e] = n);
          }, e = t = _i2 = function i(e, t, n, s, c) {
            if ("string" === typeof e) return l[e] ? l[e](t) : E(a(e, x(t)).f);

            if (!e.splice) {
              if ((p = e).deps && _i2(p.deps, p.callback), !t) return;
              t.splice ? (e = t, t = n, n = null) : e = r;
            }

            return t = t || function () {}, "function" === typeof n && (n = s, s = c), s ? o(r, e, t, n) : setTimeout(function () {
              o(r, e, t, n);
            }, 4), _i2;
          }, _i2.config = function (e) {
            return _i2(e);
          }, e._defined = c, (n = function n(e, t, _n2) {
            if ("string" !== typeof e) throw new Error("See almond README: incorrect module build, no module name");
            t.splice || (_n2 = t, t = []), g(c, e) || g(u, e) || (u[e] = [e, t, _n2]);
          }).amd = {
            jQuery: !0
          };
        }(), r.requirejs = e, r.require = t, r.define = n);
      }(), r.define("almond", function () {}), r.define("jquery", [], function () {
        var e = n || $;
        return null == e && console && console.error && console.error("Select2: An instance of jQuery or a jQuery-compatible library was not found. Make sure that you are including jQuery before Select2 on your web page."), e;
      }), r.define("select2/utils", ["jquery"], function (e) {
        var t = {};

        function n(e) {
          var t = e.prototype,
              n = [];

          for (var r in t) {
            "function" === typeof t[r] && "constructor" !== r && n.push(r);
          }

          return n;
        }

        t.Extend = function (e, t) {
          var n = {}.hasOwnProperty;

          function r() {
            this.constructor = e;
          }

          for (var o in t) {
            n.call(t, o) && (e[o] = t[o]);
          }

          return r.prototype = t.prototype, e.prototype = new r(), e.__super__ = t.prototype, e;
        }, t.Decorate = function (e, t) {
          var r = n(t),
              o = n(e);

          function i() {
            var n = Array.prototype.unshift,
                r = t.prototype.constructor.length,
                o = e.prototype.constructor;
            r > 0 && (n.call(arguments, e.prototype.constructor), o = t.prototype.constructor), o.apply(this, arguments);
          }

          function s() {
            this.constructor = i;
          }

          t.displayName = e.displayName, i.prototype = new s();

          for (var a = 0; a < o.length; a++) {
            var l = o[a];
            i.prototype[l] = e.prototype[l];
          }

          for (var c = function c(e) {
            var n = function n() {};

            (e in i.prototype) && (n = i.prototype[e]);
            var r = t.prototype[e];
            return function () {
              return Array.prototype.unshift.call(arguments, n), r.apply(this, arguments);
            };
          }, u = 0; u < r.length; u++) {
            var p = r[u];
            i.prototype[p] = c(p);
          }

          return i;
        };

        var r = function r() {
          this.listeners = {};
        };

        r.prototype.on = function (e, t) {
          this.listeners = this.listeners || {}, e in this.listeners ? this.listeners[e].push(t) : this.listeners[e] = [t];
        }, r.prototype.trigger = function (e) {
          var t = Array.prototype.slice,
              n = t.call(arguments, 1);
          this.listeners = this.listeners || {}, null == n && (n = []), 0 === n.length && n.push({}), n[0]._type = e, e in this.listeners && this.invoke(this.listeners[e], t.call(arguments, 1)), "*" in this.listeners && this.invoke(this.listeners["*"], arguments);
        }, r.prototype.invoke = function (e, t) {
          for (var n = 0, r = e.length; n < r; n++) {
            e[n].apply(this, t);
          }
        }, t.Observable = r, t.generateChars = function (e) {
          for (var t = "", n = 0; n < e; n++) {
            t += Math.floor(36 * Math.random()).toString(36);
          }

          return t;
        }, t.bind = function (e, t) {
          return function () {
            e.apply(t, arguments);
          };
        }, t._convertData = function (e) {
          for (var t in e) {
            var n = t.split("-"),
                r = e;

            if (1 !== n.length) {
              for (var o = 0; o < n.length; o++) {
                var i = n[o];
                (i = i.substring(0, 1).toLowerCase() + i.substring(1)) in r || (r[i] = {}), o == n.length - 1 && (r[i] = e[t]), r = r[i];
              }

              delete e[t];
            }
          }

          return e;
        }, t.hasScroll = function (t, n) {
          var r = e(n),
              o = n.style.overflowX,
              i = n.style.overflowY;
          return (o !== i || "hidden" !== i && "visible" !== i) && ("scroll" === o || "scroll" === i || r.innerHeight() < n.scrollHeight || r.innerWidth() < n.scrollWidth);
        }, t.escapeMarkup = function (e) {
          var t = {
            "\\": "&#92;",
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#39;",
            "/": "&#47;"
          };
          return "string" !== typeof e ? e : String(e).replace(/[&<>"'\/\\]/g, function (e) {
            return t[e];
          });
        }, t.appendMany = function (t, n) {
          if ("1.7" === e.fn.jquery.substr(0, 3)) {
            var r = e();
            e.map(n, function (e) {
              r = r.add(e);
            }), n = r;
          }

          t.append(n);
        }, t.__cache = {};
        var o = 0;
        return t.GetUniqueElementId = function (e) {
          var t = e.getAttribute("data-select2-id");
          return null == t && (e.id ? (t = e.id, e.setAttribute("data-select2-id", t)) : (e.setAttribute("data-select2-id", ++o), t = o.toString())), t;
        }, t.StoreData = function (e, n, r) {
          var o = t.GetUniqueElementId(e);
          t.__cache[o] || (t.__cache[o] = {}), t.__cache[o][n] = r;
        }, t.GetData = function (n, r) {
          var o = t.GetUniqueElementId(n);
          return r ? t.__cache[o] && null != t.__cache[o][r] ? t.__cache[o][r] : e(n).data(r) : t.__cache[o];
        }, t.RemoveData = function (e) {
          var n = t.GetUniqueElementId(e);
          null != t.__cache[n] && delete t.__cache[n], e.removeAttribute("data-select2-id");
        }, t;
      }), r.define("select2/results", ["jquery", "./utils"], function (e, t) {
        function n(e, t, r) {
          this.$element = e, this.data = r, this.options = t, n.__super__.constructor.call(this);
        }

        return t.Extend(n, t.Observable), n.prototype.render = function () {
          var t = e('<ul class="select2-results__options" role="listbox"></ul>');
          return this.options.get("multiple") && t.attr("aria-multiselectable", "true"), this.$results = t, t;
        }, n.prototype.clear = function () {
          this.$results.empty();
        }, n.prototype.displayMessage = function (t) {
          var n = this.options.get("escapeMarkup");
          this.clear(), this.hideLoading();
          var r = e('<li role="alert" aria-live="assertive" class="select2-results__option"></li>'),
              o = this.options.get("translations").get(t.message);
          r.append(n(o(t.args))), r[0].className += " select2-results__message", this.$results.append(r);
        }, n.prototype.hideMessages = function () {
          this.$results.find(".select2-results__message").remove();
        }, n.prototype.append = function (e) {
          this.hideLoading();
          var t = [];

          if (null != e.results && 0 !== e.results.length) {
            e.results = this.sort(e.results);

            for (var n = 0; n < e.results.length; n++) {
              var r = e.results[n],
                  o = this.option(r);
              t.push(o);
            }

            this.$results.append(t);
          } else 0 === this.$results.children().length && this.trigger("results:message", {
            message: "noResults"
          });
        }, n.prototype.position = function (e, t) {
          t.find(".select2-results").append(e);
        }, n.prototype.sort = function (e) {
          return this.options.get("sorter")(e);
        }, n.prototype.highlightFirstItem = function () {
          var e = this.$results.find(".select2-results__option[aria-selected]"),
              t = e.filter("[aria-selected=true]");
          t.length > 0 ? t.first().trigger("mouseenter") : e.first().trigger("mouseenter"), this.ensureHighlightVisible();
        }, n.prototype.setClasses = function () {
          var n = this;
          this.data.current(function (r) {
            var o = e.map(r, function (e) {
              return e.id.toString();
            });
            n.$results.find(".select2-results__option[aria-selected]").each(function () {
              var n = e(this),
                  r = t.GetData(this, "data"),
                  i = "" + r.id;
              null != r.element && r.element.selected || null == r.element && e.inArray(i, o) > -1 ? n.attr("aria-selected", "true") : n.attr("aria-selected", "false");
            });
          });
        }, n.prototype.showLoading = function (e) {
          this.hideLoading();
          var t = {
            disabled: !0,
            loading: !0,
            text: this.options.get("translations").get("searching")(e)
          },
              n = this.option(t);
          n.className += " loading-results", this.$results.prepend(n);
        }, n.prototype.hideLoading = function () {
          this.$results.find(".loading-results").remove();
        }, n.prototype.option = function (n) {
          var r = document.createElement("li");
          r.className = "select2-results__option";
          var o = {
            role: "option",
            "aria-selected": "false"
          },
              i = window.Element.prototype.matches || window.Element.prototype.msMatchesSelector || window.Element.prototype.webkitMatchesSelector;

          for (var s in (null != n.element && i.call(n.element, ":disabled") || null == n.element && n.disabled) && (delete o["aria-selected"], o["aria-disabled"] = "true"), null == n.id && delete o["aria-selected"], null != n._resultId && (r.id = n._resultId), n.title && (r.title = n.title), n.children && (o.role = "group", o["aria-label"] = n.text, delete o["aria-selected"]), o) {
            var a = o[s];
            r.setAttribute(s, a);
          }

          if (n.children) {
            var l = e(r),
                c = document.createElement("strong");
            c.className = "select2-results__group", e(c), this.template(n, c);

            for (var u = [], p = 0; p < n.children.length; p++) {
              var h = n.children[p],
                  d = this.option(h);
              u.push(d);
            }

            var f = e("<ul></ul>", {
              "class": "select2-results__options select2-results__options--nested"
            });
            f.append(u), l.append(c), l.append(f);
          } else this.template(n, r);

          return t.StoreData(r, "data", n), r;
        }, n.prototype.bind = function (n, r) {
          var o = this,
              i = n.id + "-results";
          this.$results.attr("id", i), n.on("results:all", function (e) {
            o.clear(), o.append(e.data), n.isOpen() && (o.setClasses(), o.highlightFirstItem());
          }), n.on("results:append", function (e) {
            o.append(e.data), n.isOpen() && o.setClasses();
          }), n.on("query", function (e) {
            o.hideMessages(), o.showLoading(e);
          }), n.on("select", function () {
            n.isOpen() && (o.setClasses(), o.options.get("scrollAfterSelect") && o.highlightFirstItem());
          }), n.on("unselect", function () {
            n.isOpen() && (o.setClasses(), o.options.get("scrollAfterSelect") && o.highlightFirstItem());
          }), n.on("open", function () {
            o.$results.attr("aria-expanded", "true"), o.$results.attr("aria-hidden", "false"), o.setClasses(), o.ensureHighlightVisible();
          }), n.on("close", function () {
            o.$results.attr("aria-expanded", "false"), o.$results.attr("aria-hidden", "true"), o.$results.removeAttr("aria-activedescendant");
          }), n.on("results:toggle", function () {
            var e = o.getHighlightedResults();
            0 !== e.length && e.trigger("mouseup");
          }), n.on("results:select", function () {
            var e = o.getHighlightedResults();

            if (0 !== e.length) {
              var n = t.GetData(e[0], "data");
              "true" == e.attr("aria-selected") ? o.trigger("close", {}) : o.trigger("select", {
                data: n
              });
            }
          }), n.on("results:previous", function () {
            var e = o.getHighlightedResults(),
                t = o.$results.find("[aria-selected]"),
                n = t.index(e);

            if (!(n <= 0)) {
              var r = n - 1;
              0 === e.length && (r = 0);
              var i = t.eq(r);
              i.trigger("mouseenter");
              var s = o.$results.offset().top,
                  a = i.offset().top,
                  l = o.$results.scrollTop() + (a - s);
              0 === r ? o.$results.scrollTop(0) : a - s < 0 && o.$results.scrollTop(l);
            }
          }), n.on("results:next", function () {
            var e = o.getHighlightedResults(),
                t = o.$results.find("[aria-selected]"),
                n = t.index(e) + 1;

            if (!(n >= t.length)) {
              var r = t.eq(n);
              r.trigger("mouseenter");
              var i = o.$results.offset().top + o.$results.outerHeight(!1),
                  s = r.offset().top + r.outerHeight(!1),
                  a = o.$results.scrollTop() + s - i;
              0 === n ? o.$results.scrollTop(0) : s > i && o.$results.scrollTop(a);
            }
          }), n.on("results:focus", function (e) {
            e.element.addClass("select2-results__option--highlighted");
          }), n.on("results:message", function (e) {
            o.displayMessage(e);
          }), e.fn.mousewheel && this.$results.on("mousewheel", function (e) {
            var t = o.$results.scrollTop(),
                n = o.$results.get(0).scrollHeight - t + e.deltaY,
                r = e.deltaY > 0 && t - e.deltaY <= 0,
                i = e.deltaY < 0 && n <= o.$results.height();
            r ? (o.$results.scrollTop(0), e.preventDefault(), e.stopPropagation()) : i && (o.$results.scrollTop(o.$results.get(0).scrollHeight - o.$results.height()), e.preventDefault(), e.stopPropagation());
          }), this.$results.on("mouseup", ".select2-results__option[aria-selected]", function (n) {
            var r = e(this),
                i = t.GetData(this, "data");
            "true" !== r.attr("aria-selected") ? o.trigger("select", {
              originalEvent: n,
              data: i
            }) : o.options.get("multiple") ? o.trigger("unselect", {
              originalEvent: n,
              data: i
            }) : o.trigger("close", {});
          }), this.$results.on("mouseenter", ".select2-results__option[aria-selected]", function (n) {
            var r = t.GetData(this, "data");
            o.getHighlightedResults().removeClass("select2-results__option--highlighted"), o.trigger("results:focus", {
              data: r,
              element: e(this)
            });
          });
        }, n.prototype.getHighlightedResults = function () {
          return this.$results.find(".select2-results__option--highlighted");
        }, n.prototype.destroy = function () {
          this.$results.remove();
        }, n.prototype.ensureHighlightVisible = function () {
          var e = this.getHighlightedResults();

          if (0 !== e.length) {
            var t = this.$results.find("[aria-selected]").index(e),
                n = this.$results.offset().top,
                r = e.offset().top,
                o = this.$results.scrollTop() + (r - n),
                i = r - n;
            o -= 2 * e.outerHeight(!1), t <= 2 ? this.$results.scrollTop(0) : (i > this.$results.outerHeight() || i < 0) && this.$results.scrollTop(o);
          }
        }, n.prototype.template = function (t, n) {
          var r = this.options.get("templateResult"),
              o = this.options.get("escapeMarkup"),
              i = r(t, n);
          null == i ? n.style.display = "none" : "string" === typeof i ? n.innerHTML = o(i) : e(n).append(i);
        }, n;
      }), r.define("select2/keys", [], function () {
        return {
          BACKSPACE: 8,
          TAB: 9,
          ENTER: 13,
          SHIFT: 16,
          CTRL: 17,
          ALT: 18,
          ESC: 27,
          SPACE: 32,
          PAGE_UP: 33,
          PAGE_DOWN: 34,
          END: 35,
          HOME: 36,
          LEFT: 37,
          UP: 38,
          RIGHT: 39,
          DOWN: 40,
          DELETE: 46
        };
      }), r.define("select2/selection/base", ["jquery", "../utils", "../keys"], function (e, t, n) {
        function r(e, t) {
          this.$element = e, this.options = t, r.__super__.constructor.call(this);
        }

        return t.Extend(r, t.Observable), r.prototype.render = function () {
          var n = e('<span class="select2-selection" role="combobox"  aria-haspopup="true" aria-expanded="false"></span>');
          return this._tabindex = 0, null != t.GetData(this.$element[0], "old-tabindex") ? this._tabindex = t.GetData(this.$element[0], "old-tabindex") : null != this.$element.attr("tabindex") && (this._tabindex = this.$element.attr("tabindex")), n.attr("title", this.$element.attr("title")), n.attr("tabindex", this._tabindex), n.attr("aria-disabled", "false"), this.$selection = n, n;
        }, r.prototype.bind = function (e, t) {
          var r = this,
              o = e.id + "-results";
          this.container = e, this.$selection.on("focus", function (e) {
            r.trigger("focus", e);
          }), this.$selection.on("blur", function (e) {
            r._handleBlur(e);
          }), this.$selection.on("keydown", function (e) {
            r.trigger("keypress", e), e.which === n.SPACE && e.preventDefault();
          }), e.on("results:focus", function (e) {
            r.$selection.attr("aria-activedescendant", e.data._resultId);
          }), e.on("selection:update", function (e) {
            r.update(e.data);
          }), e.on("open", function () {
            r.$selection.attr("aria-expanded", "true"), r.$selection.attr("aria-owns", o), r._attachCloseHandler(e);
          }), e.on("close", function () {
            r.$selection.attr("aria-expanded", "false"), r.$selection.removeAttr("aria-activedescendant"), r.$selection.removeAttr("aria-owns"), r.$selection.trigger("focus"), r._detachCloseHandler(e);
          }), e.on("enable", function () {
            r.$selection.attr("tabindex", r._tabindex), r.$selection.attr("aria-disabled", "false");
          }), e.on("disable", function () {
            r.$selection.attr("tabindex", "-1"), r.$selection.attr("aria-disabled", "true");
          });
        }, r.prototype._handleBlur = function (t) {
          var n = this;
          window.setTimeout(function () {
            document.activeElement == n.$selection[0] || e.contains(n.$selection[0], document.activeElement) || n.trigger("blur", t);
          }, 1);
        }, r.prototype._attachCloseHandler = function (n) {
          e(document.body).on("mousedown.select2." + n.id, function (n) {
            var r = e(n.target).closest(".select2");
            e(".select2.select2-container--open").each(function () {
              this != r[0] && t.GetData(this, "element").select2("close");
            });
          });
        }, r.prototype._detachCloseHandler = function (t) {
          e(document.body).off("mousedown.select2." + t.id);
        }, r.prototype.position = function (e, t) {
          t.find(".selection").append(e);
        }, r.prototype.destroy = function () {
          this._detachCloseHandler(this.container);
        }, r.prototype.update = function (e) {
          throw new Error("The `update` method must be defined in child classes.");
        }, r.prototype.isEnabled = function () {
          return !this.isDisabled();
        }, r.prototype.isDisabled = function () {
          return this.options.get("disabled");
        }, r;
      }), r.define("select2/selection/single", ["jquery", "./base", "../utils", "../keys"], function (e, t, n, r) {
        function o() {
          o.__super__.constructor.apply(this, arguments);
        }

        return n.Extend(o, t), o.prototype.render = function () {
          var e = o.__super__.render.call(this);

          return e.addClass("select2-selection--single"), e.html('<span class="select2-selection__rendered"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>'), e;
        }, o.prototype.bind = function (e, t) {
          var n = this;

          o.__super__.bind.apply(this, arguments);

          var r = e.id + "-container";
          this.$selection.find(".select2-selection__rendered").attr("id", r).attr("role", "textbox").attr("aria-readonly", "true"), this.$selection.attr("aria-labelledby", r), this.$selection.on("mousedown", function (e) {
            1 === e.which && n.trigger("toggle", {
              originalEvent: e
            });
          }), this.$selection.on("focus", function (e) {}), this.$selection.on("blur", function (e) {}), e.on("focus", function (t) {
            e.isOpen() || n.$selection.trigger("focus");
          });
        }, o.prototype.clear = function () {
          var e = this.$selection.find(".select2-selection__rendered");
          e.empty(), e.removeAttr("title");
        }, o.prototype.display = function (e, t) {
          var n = this.options.get("templateSelection");
          return this.options.get("escapeMarkup")(n(e, t));
        }, o.prototype.selectionContainer = function () {
          return e("<span></span>");
        }, o.prototype.update = function (e) {
          if (0 !== e.length) {
            var t = e[0],
                n = this.$selection.find(".select2-selection__rendered"),
                r = this.display(t, n);
            n.empty().append(r);
            var o = t.title || t.text;
            o ? n.attr("title", o) : n.removeAttr("title");
          } else this.clear();
        }, o;
      }), r.define("select2/selection/multiple", ["jquery", "./base", "../utils"], function (e, t, n) {
        function r(e, t) {
          r.__super__.constructor.apply(this, arguments);
        }

        return n.Extend(r, t), r.prototype.render = function () {
          var e = r.__super__.render.call(this);

          return e.addClass("select2-selection--multiple"), e.html('<ul class="select2-selection__rendered"></ul>'), e;
        }, r.prototype.bind = function (t, o) {
          var i = this;
          r.__super__.bind.apply(this, arguments), this.$selection.on("click", function (e) {
            i.trigger("toggle", {
              originalEvent: e
            });
          }), this.$selection.on("click", ".select2-selection__choice__remove", function (t) {
            if (!i.isDisabled()) {
              var r = e(this).parent(),
                  o = n.GetData(r[0], "data");
              i.trigger("unselect", {
                originalEvent: t,
                data: o
              });
            }
          });
        }, r.prototype.clear = function () {
          var e = this.$selection.find(".select2-selection__rendered");
          e.empty(), e.removeAttr("title");
        }, r.prototype.display = function (e, t) {
          var n = this.options.get("templateSelection");
          return this.options.get("escapeMarkup")(n(e, t));
        }, r.prototype.selectionContainer = function () {
          return e('<li class="select2-selection__choice"><span class="select2-selection__choice__remove" role="presentation">&times;</span></li>');
        }, r.prototype.update = function (e) {
          if (this.clear(), 0 !== e.length) {
            for (var t = [], r = 0; r < e.length; r++) {
              var o = e[r],
                  i = this.selectionContainer(),
                  s = this.display(o, i);
              i.append(s);
              var a = o.title || o.text;
              a && i.attr("title", a), n.StoreData(i[0], "data", o), t.push(i);
            }

            var l = this.$selection.find(".select2-selection__rendered");
            n.appendMany(l, t);
          }
        }, r;
      }), r.define("select2/selection/placeholder", ["../utils"], function (e) {
        function t(e, t, n) {
          this.placeholder = this.normalizePlaceholder(n.get("placeholder")), e.call(this, t, n);
        }

        return t.prototype.normalizePlaceholder = function (e, t) {
          return "string" === typeof t && (t = {
            id: "",
            text: t
          }), t;
        }, t.prototype.createPlaceholder = function (e, t) {
          var n = this.selectionContainer();
          return n.html(this.display(t)), n.addClass("select2-selection__placeholder").removeClass("select2-selection__choice"), n;
        }, t.prototype.update = function (e, t) {
          var n = 1 == t.length && t[0].id != this.placeholder.id;
          if (t.length > 1 || n) return e.call(this, t);
          this.clear();
          var r = this.createPlaceholder(this.placeholder);
          this.$selection.find(".select2-selection__rendered").append(r);
        }, t;
      }), r.define("select2/selection/allowClear", ["jquery", "../keys", "../utils"], function (e, t, n) {
        function r() {}

        return r.prototype.bind = function (e, t, n) {
          var r = this;
          e.call(this, t, n), null == this.placeholder && this.options.get("debug") && window.console && console.error && console.error("Select2: The `allowClear` option should be used in combination with the `placeholder` option."), this.$selection.on("mousedown", ".select2-selection__clear", function (e) {
            r._handleClear(e);
          }), t.on("keypress", function (e) {
            r._handleKeyboardClear(e, t);
          });
        }, r.prototype._handleClear = function (e, t) {
          if (!this.isDisabled()) {
            var r = this.$selection.find(".select2-selection__clear");

            if (0 !== r.length) {
              t.stopPropagation();
              var o = n.GetData(r[0], "data"),
                  i = this.$element.val();
              this.$element.val(this.placeholder.id);
              var s = {
                data: o
              };
              if (this.trigger("clear", s), s.prevented) this.$element.val(i);else {
                for (var a = 0; a < o.length; a++) {
                  if (s = {
                    data: o[a]
                  }, this.trigger("unselect", s), s.prevented) return void this.$element.val(i);
                }

                this.$element.trigger("input").trigger("change"), this.trigger("toggle", {});
              }
            }
          }
        }, r.prototype._handleKeyboardClear = function (e, n, r) {
          r.isOpen() || n.which != t.DELETE && n.which != t.BACKSPACE || this._handleClear(n);
        }, r.prototype.update = function (t, r) {
          if (t.call(this, r), !(this.$selection.find(".select2-selection__placeholder").length > 0 || 0 === r.length)) {
            var o = this.options.get("translations").get("removeAllItems"),
                i = e('<span class="select2-selection__clear" title="' + o() + '">&times;</span>');
            n.StoreData(i[0], "data", r), this.$selection.find(".select2-selection__rendered").prepend(i);
          }
        }, r;
      }), r.define("select2/selection/search", ["jquery", "../utils", "../keys"], function (e, t, n) {
        function r(e, t, n) {
          e.call(this, t, n);
        }

        return r.prototype.render = function (t) {
          var n = e('<li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="-1" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" /></li>');
          this.$searchContainer = n, this.$search = n.find("input");
          var r = t.call(this);
          return this._transferTabIndex(), r;
        }, r.prototype.bind = function (e, r, o) {
          var i = this,
              s = r.id + "-results";
          e.call(this, r, o), r.on("open", function () {
            i.$search.attr("aria-controls", s), i.$search.trigger("focus");
          }), r.on("close", function () {
            i.$search.val(""), i.$search.removeAttr("aria-controls"), i.$search.removeAttr("aria-activedescendant"), i.$search.trigger("focus");
          }), r.on("enable", function () {
            i.$search.prop("disabled", !1), i._transferTabIndex();
          }), r.on("disable", function () {
            i.$search.prop("disabled", !0);
          }), r.on("focus", function (e) {
            i.$search.trigger("focus");
          }), r.on("results:focus", function (e) {
            e.data._resultId ? i.$search.attr("aria-activedescendant", e.data._resultId) : i.$search.removeAttr("aria-activedescendant");
          }), this.$selection.on("focusin", ".select2-search--inline", function (e) {
            i.trigger("focus", e);
          }), this.$selection.on("focusout", ".select2-search--inline", function (e) {
            i._handleBlur(e);
          }), this.$selection.on("keydown", ".select2-search--inline", function (e) {
            if (e.stopPropagation(), i.trigger("keypress", e), i._keyUpPrevented = e.isDefaultPrevented(), e.which === n.BACKSPACE && "" === i.$search.val()) {
              var r = i.$searchContainer.prev(".select2-selection__choice");

              if (r.length > 0) {
                var o = t.GetData(r[0], "data");
                i.searchRemoveChoice(o), e.preventDefault();
              }
            }
          }), this.$selection.on("click", ".select2-search--inline", function (e) {
            i.$search.val() && e.stopPropagation();
          });
          var a = document.documentMode,
              l = a && a <= 11;
          this.$selection.on("input.searchcheck", ".select2-search--inline", function (e) {
            l ? i.$selection.off("input.search input.searchcheck") : i.$selection.off("keyup.search");
          }), this.$selection.on("keyup.search input.search", ".select2-search--inline", function (e) {
            if (l && "input" === e.type) i.$selection.off("input.search input.searchcheck");else {
              var t = e.which;
              t != n.SHIFT && t != n.CTRL && t != n.ALT && t != n.TAB && i.handleSearch(e);
            }
          });
        }, r.prototype._transferTabIndex = function (e) {
          this.$search.attr("tabindex", this.$selection.attr("tabindex")), this.$selection.attr("tabindex", "-1");
        }, r.prototype.createPlaceholder = function (e, t) {
          this.$search.attr("placeholder", t.text);
        }, r.prototype.update = function (e, t) {
          var n = this.$search[0] == document.activeElement;
          this.$search.attr("placeholder", ""), e.call(this, t), this.$selection.find(".select2-selection__rendered").append(this.$searchContainer), this.resizeSearch(), n && this.$search.trigger("focus");
        }, r.prototype.handleSearch = function () {
          if (this.resizeSearch(), !this._keyUpPrevented) {
            var e = this.$search.val();
            this.trigger("query", {
              term: e
            });
          }

          this._keyUpPrevented = !1;
        }, r.prototype.searchRemoveChoice = function (e, t) {
          this.trigger("unselect", {
            data: t
          }), this.$search.val(t.text), this.handleSearch();
        }, r.prototype.resizeSearch = function () {
          this.$search.css("width", "25px");
          var e = "";
          e = "" !== this.$search.attr("placeholder") ? this.$selection.find(".select2-selection__rendered").width() : .75 * (this.$search.val().length + 1) + "em", this.$search.css("width", e);
        }, r;
      }), r.define("select2/selection/eventRelay", ["jquery"], function (e) {
        function t() {}

        return t.prototype.bind = function (t, n, r) {
          var o = this,
              i = ["open", "opening", "close", "closing", "select", "selecting", "unselect", "unselecting", "clear", "clearing"],
              s = ["opening", "closing", "selecting", "unselecting", "clearing"];
          t.call(this, n, r), n.on("*", function (t, n) {
            if (-1 !== e.inArray(t, i)) {
              n = n || {};
              var r = e.Event("select2:" + t, {
                params: n
              });
              o.$element.trigger(r), -1 !== e.inArray(t, s) && (n.prevented = r.isDefaultPrevented());
            }
          });
        }, t;
      }), r.define("select2/translation", ["jquery", "require"], function (e, t) {
        function n(e) {
          this.dict = e || {};
        }

        return n.prototype.all = function () {
          return this.dict;
        }, n.prototype.get = function (e) {
          return this.dict[e];
        }, n.prototype.extend = function (t) {
          this.dict = e.extend({}, t.all(), this.dict);
        }, n._cache = {}, n.loadPath = function (e) {
          if (!(e in n._cache)) {
            var r = t(e);
            n._cache[e] = r;
          }

          return new n(n._cache[e]);
        }, n;
      }), r.define("select2/diacritics", [], function () {
        return {
          "\u24B6": "A",
          "\uFF21": "A",
          "\xc0": "A",
          "\xc1": "A",
          "\xc2": "A",
          "\u1EA6": "A",
          "\u1EA4": "A",
          "\u1EAA": "A",
          "\u1EA8": "A",
          "\xc3": "A",
          "\u0100": "A",
          "\u0102": "A",
          "\u1EB0": "A",
          "\u1EAE": "A",
          "\u1EB4": "A",
          "\u1EB2": "A",
          "\u0226": "A",
          "\u01E0": "A",
          "\xc4": "A",
          "\u01DE": "A",
          "\u1EA2": "A",
          "\xc5": "A",
          "\u01FA": "A",
          "\u01CD": "A",
          "\u0200": "A",
          "\u0202": "A",
          "\u1EA0": "A",
          "\u1EAC": "A",
          "\u1EB6": "A",
          "\u1E00": "A",
          "\u0104": "A",
          "\u023A": "A",
          "\u2C6F": "A",
          "\uA732": "AA",
          "\xc6": "AE",
          "\u01FC": "AE",
          "\u01E2": "AE",
          "\uA734": "AO",
          "\uA736": "AU",
          "\uA738": "AV",
          "\uA73A": "AV",
          "\uA73C": "AY",
          "\u24B7": "B",
          "\uFF22": "B",
          "\u1E02": "B",
          "\u1E04": "B",
          "\u1E06": "B",
          "\u0243": "B",
          "\u0182": "B",
          "\u0181": "B",
          "\u24B8": "C",
          "\uFF23": "C",
          "\u0106": "C",
          "\u0108": "C",
          "\u010A": "C",
          "\u010C": "C",
          "\xc7": "C",
          "\u1E08": "C",
          "\u0187": "C",
          "\u023B": "C",
          "\uA73E": "C",
          "\u24B9": "D",
          "\uFF24": "D",
          "\u1E0A": "D",
          "\u010E": "D",
          "\u1E0C": "D",
          "\u1E10": "D",
          "\u1E12": "D",
          "\u1E0E": "D",
          "\u0110": "D",
          "\u018B": "D",
          "\u018A": "D",
          "\u0189": "D",
          "\uA779": "D",
          "\u01F1": "DZ",
          "\u01C4": "DZ",
          "\u01F2": "Dz",
          "\u01C5": "Dz",
          "\u24BA": "E",
          "\uFF25": "E",
          "\xc8": "E",
          "\xc9": "E",
          "\xca": "E",
          "\u1EC0": "E",
          "\u1EBE": "E",
          "\u1EC4": "E",
          "\u1EC2": "E",
          "\u1EBC": "E",
          "\u0112": "E",
          "\u1E14": "E",
          "\u1E16": "E",
          "\u0114": "E",
          "\u0116": "E",
          "\xcb": "E",
          "\u1EBA": "E",
          "\u011A": "E",
          "\u0204": "E",
          "\u0206": "E",
          "\u1EB8": "E",
          "\u1EC6": "E",
          "\u0228": "E",
          "\u1E1C": "E",
          "\u0118": "E",
          "\u1E18": "E",
          "\u1E1A": "E",
          "\u0190": "E",
          "\u018E": "E",
          "\u24BB": "F",
          "\uFF26": "F",
          "\u1E1E": "F",
          "\u0191": "F",
          "\uA77B": "F",
          "\u24BC": "G",
          "\uFF27": "G",
          "\u01F4": "G",
          "\u011C": "G",
          "\u1E20": "G",
          "\u011E": "G",
          "\u0120": "G",
          "\u01E6": "G",
          "\u0122": "G",
          "\u01E4": "G",
          "\u0193": "G",
          "\uA7A0": "G",
          "\uA77D": "G",
          "\uA77E": "G",
          "\u24BD": "H",
          "\uFF28": "H",
          "\u0124": "H",
          "\u1E22": "H",
          "\u1E26": "H",
          "\u021E": "H",
          "\u1E24": "H",
          "\u1E28": "H",
          "\u1E2A": "H",
          "\u0126": "H",
          "\u2C67": "H",
          "\u2C75": "H",
          "\uA78D": "H",
          "\u24BE": "I",
          "\uFF29": "I",
          "\xcc": "I",
          "\xcd": "I",
          "\xce": "I",
          "\u0128": "I",
          "\u012A": "I",
          "\u012C": "I",
          "\u0130": "I",
          "\xcf": "I",
          "\u1E2E": "I",
          "\u1EC8": "I",
          "\u01CF": "I",
          "\u0208": "I",
          "\u020A": "I",
          "\u1ECA": "I",
          "\u012E": "I",
          "\u1E2C": "I",
          "\u0197": "I",
          "\u24BF": "J",
          "\uFF2A": "J",
          "\u0134": "J",
          "\u0248": "J",
          "\u24C0": "K",
          "\uFF2B": "K",
          "\u1E30": "K",
          "\u01E8": "K",
          "\u1E32": "K",
          "\u0136": "K",
          "\u1E34": "K",
          "\u0198": "K",
          "\u2C69": "K",
          "\uA740": "K",
          "\uA742": "K",
          "\uA744": "K",
          "\uA7A2": "K",
          "\u24C1": "L",
          "\uFF2C": "L",
          "\u013F": "L",
          "\u0139": "L",
          "\u013D": "L",
          "\u1E36": "L",
          "\u1E38": "L",
          "\u013B": "L",
          "\u1E3C": "L",
          "\u1E3A": "L",
          "\u0141": "L",
          "\u023D": "L",
          "\u2C62": "L",
          "\u2C60": "L",
          "\uA748": "L",
          "\uA746": "L",
          "\uA780": "L",
          "\u01C7": "LJ",
          "\u01C8": "Lj",
          "\u24C2": "M",
          "\uFF2D": "M",
          "\u1E3E": "M",
          "\u1E40": "M",
          "\u1E42": "M",
          "\u2C6E": "M",
          "\u019C": "M",
          "\u24C3": "N",
          "\uFF2E": "N",
          "\u01F8": "N",
          "\u0143": "N",
          "\xd1": "N",
          "\u1E44": "N",
          "\u0147": "N",
          "\u1E46": "N",
          "\u0145": "N",
          "\u1E4A": "N",
          "\u1E48": "N",
          "\u0220": "N",
          "\u019D": "N",
          "\uA790": "N",
          "\uA7A4": "N",
          "\u01CA": "NJ",
          "\u01CB": "Nj",
          "\u24C4": "O",
          "\uFF2F": "O",
          "\xd2": "O",
          "\xd3": "O",
          "\xd4": "O",
          "\u1ED2": "O",
          "\u1ED0": "O",
          "\u1ED6": "O",
          "\u1ED4": "O",
          "\xd5": "O",
          "\u1E4C": "O",
          "\u022C": "O",
          "\u1E4E": "O",
          "\u014C": "O",
          "\u1E50": "O",
          "\u1E52": "O",
          "\u014E": "O",
          "\u022E": "O",
          "\u0230": "O",
          "\xd6": "O",
          "\u022A": "O",
          "\u1ECE": "O",
          "\u0150": "O",
          "\u01D1": "O",
          "\u020C": "O",
          "\u020E": "O",
          "\u01A0": "O",
          "\u1EDC": "O",
          "\u1EDA": "O",
          "\u1EE0": "O",
          "\u1EDE": "O",
          "\u1EE2": "O",
          "\u1ECC": "O",
          "\u1ED8": "O",
          "\u01EA": "O",
          "\u01EC": "O",
          "\xd8": "O",
          "\u01FE": "O",
          "\u0186": "O",
          "\u019F": "O",
          "\uA74A": "O",
          "\uA74C": "O",
          "\u0152": "OE",
          "\u01A2": "OI",
          "\uA74E": "OO",
          "\u0222": "OU",
          "\u24C5": "P",
          "\uFF30": "P",
          "\u1E54": "P",
          "\u1E56": "P",
          "\u01A4": "P",
          "\u2C63": "P",
          "\uA750": "P",
          "\uA752": "P",
          "\uA754": "P",
          "\u24C6": "Q",
          "\uFF31": "Q",
          "\uA756": "Q",
          "\uA758": "Q",
          "\u024A": "Q",
          "\u24C7": "R",
          "\uFF32": "R",
          "\u0154": "R",
          "\u1E58": "R",
          "\u0158": "R",
          "\u0210": "R",
          "\u0212": "R",
          "\u1E5A": "R",
          "\u1E5C": "R",
          "\u0156": "R",
          "\u1E5E": "R",
          "\u024C": "R",
          "\u2C64": "R",
          "\uA75A": "R",
          "\uA7A6": "R",
          "\uA782": "R",
          "\u24C8": "S",
          "\uFF33": "S",
          "\u1E9E": "S",
          "\u015A": "S",
          "\u1E64": "S",
          "\u015C": "S",
          "\u1E60": "S",
          "\u0160": "S",
          "\u1E66": "S",
          "\u1E62": "S",
          "\u1E68": "S",
          "\u0218": "S",
          "\u015E": "S",
          "\u2C7E": "S",
          "\uA7A8": "S",
          "\uA784": "S",
          "\u24C9": "T",
          "\uFF34": "T",
          "\u1E6A": "T",
          "\u0164": "T",
          "\u1E6C": "T",
          "\u021A": "T",
          "\u0162": "T",
          "\u1E70": "T",
          "\u1E6E": "T",
          "\u0166": "T",
          "\u01AC": "T",
          "\u01AE": "T",
          "\u023E": "T",
          "\uA786": "T",
          "\uA728": "TZ",
          "\u24CA": "U",
          "\uFF35": "U",
          "\xd9": "U",
          "\xda": "U",
          "\xdb": "U",
          "\u0168": "U",
          "\u1E78": "U",
          "\u016A": "U",
          "\u1E7A": "U",
          "\u016C": "U",
          "\xdc": "U",
          "\u01DB": "U",
          "\u01D7": "U",
          "\u01D5": "U",
          "\u01D9": "U",
          "\u1EE6": "U",
          "\u016E": "U",
          "\u0170": "U",
          "\u01D3": "U",
          "\u0214": "U",
          "\u0216": "U",
          "\u01AF": "U",
          "\u1EEA": "U",
          "\u1EE8": "U",
          "\u1EEE": "U",
          "\u1EEC": "U",
          "\u1EF0": "U",
          "\u1EE4": "U",
          "\u1E72": "U",
          "\u0172": "U",
          "\u1E76": "U",
          "\u1E74": "U",
          "\u0244": "U",
          "\u24CB": "V",
          "\uFF36": "V",
          "\u1E7C": "V",
          "\u1E7E": "V",
          "\u01B2": "V",
          "\uA75E": "V",
          "\u0245": "V",
          "\uA760": "VY",
          "\u24CC": "W",
          "\uFF37": "W",
          "\u1E80": "W",
          "\u1E82": "W",
          "\u0174": "W",
          "\u1E86": "W",
          "\u1E84": "W",
          "\u1E88": "W",
          "\u2C72": "W",
          "\u24CD": "X",
          "\uFF38": "X",
          "\u1E8A": "X",
          "\u1E8C": "X",
          "\u24CE": "Y",
          "\uFF39": "Y",
          "\u1EF2": "Y",
          "\xdd": "Y",
          "\u0176": "Y",
          "\u1EF8": "Y",
          "\u0232": "Y",
          "\u1E8E": "Y",
          "\u0178": "Y",
          "\u1EF6": "Y",
          "\u1EF4": "Y",
          "\u01B3": "Y",
          "\u024E": "Y",
          "\u1EFE": "Y",
          "\u24CF": "Z",
          "\uFF3A": "Z",
          "\u0179": "Z",
          "\u1E90": "Z",
          "\u017B": "Z",
          "\u017D": "Z",
          "\u1E92": "Z",
          "\u1E94": "Z",
          "\u01B5": "Z",
          "\u0224": "Z",
          "\u2C7F": "Z",
          "\u2C6B": "Z",
          "\uA762": "Z",
          "\u24D0": "a",
          "\uFF41": "a",
          "\u1E9A": "a",
          "\xe0": "a",
          "\xe1": "a",
          "\xe2": "a",
          "\u1EA7": "a",
          "\u1EA5": "a",
          "\u1EAB": "a",
          "\u1EA9": "a",
          "\xe3": "a",
          "\u0101": "a",
          "\u0103": "a",
          "\u1EB1": "a",
          "\u1EAF": "a",
          "\u1EB5": "a",
          "\u1EB3": "a",
          "\u0227": "a",
          "\u01E1": "a",
          "\xe4": "a",
          "\u01DF": "a",
          "\u1EA3": "a",
          "\xe5": "a",
          "\u01FB": "a",
          "\u01CE": "a",
          "\u0201": "a",
          "\u0203": "a",
          "\u1EA1": "a",
          "\u1EAD": "a",
          "\u1EB7": "a",
          "\u1E01": "a",
          "\u0105": "a",
          "\u2C65": "a",
          "\u0250": "a",
          "\uA733": "aa",
          "\xe6": "ae",
          "\u01FD": "ae",
          "\u01E3": "ae",
          "\uA735": "ao",
          "\uA737": "au",
          "\uA739": "av",
          "\uA73B": "av",
          "\uA73D": "ay",
          "\u24D1": "b",
          "\uFF42": "b",
          "\u1E03": "b",
          "\u1E05": "b",
          "\u1E07": "b",
          "\u0180": "b",
          "\u0183": "b",
          "\u0253": "b",
          "\u24D2": "c",
          "\uFF43": "c",
          "\u0107": "c",
          "\u0109": "c",
          "\u010B": "c",
          "\u010D": "c",
          "\xe7": "c",
          "\u1E09": "c",
          "\u0188": "c",
          "\u023C": "c",
          "\uA73F": "c",
          "\u2184": "c",
          "\u24D3": "d",
          "\uFF44": "d",
          "\u1E0B": "d",
          "\u010F": "d",
          "\u1E0D": "d",
          "\u1E11": "d",
          "\u1E13": "d",
          "\u1E0F": "d",
          "\u0111": "d",
          "\u018C": "d",
          "\u0256": "d",
          "\u0257": "d",
          "\uA77A": "d",
          "\u01F3": "dz",
          "\u01C6": "dz",
          "\u24D4": "e",
          "\uFF45": "e",
          "\xe8": "e",
          "\xe9": "e",
          "\xea": "e",
          "\u1EC1": "e",
          "\u1EBF": "e",
          "\u1EC5": "e",
          "\u1EC3": "e",
          "\u1EBD": "e",
          "\u0113": "e",
          "\u1E15": "e",
          "\u1E17": "e",
          "\u0115": "e",
          "\u0117": "e",
          "\xeb": "e",
          "\u1EBB": "e",
          "\u011B": "e",
          "\u0205": "e",
          "\u0207": "e",
          "\u1EB9": "e",
          "\u1EC7": "e",
          "\u0229": "e",
          "\u1E1D": "e",
          "\u0119": "e",
          "\u1E19": "e",
          "\u1E1B": "e",
          "\u0247": "e",
          "\u025B": "e",
          "\u01DD": "e",
          "\u24D5": "f",
          "\uFF46": "f",
          "\u1E1F": "f",
          "\u0192": "f",
          "\uA77C": "f",
          "\u24D6": "g",
          "\uFF47": "g",
          "\u01F5": "g",
          "\u011D": "g",
          "\u1E21": "g",
          "\u011F": "g",
          "\u0121": "g",
          "\u01E7": "g",
          "\u0123": "g",
          "\u01E5": "g",
          "\u0260": "g",
          "\uA7A1": "g",
          "\u1D79": "g",
          "\uA77F": "g",
          "\u24D7": "h",
          "\uFF48": "h",
          "\u0125": "h",
          "\u1E23": "h",
          "\u1E27": "h",
          "\u021F": "h",
          "\u1E25": "h",
          "\u1E29": "h",
          "\u1E2B": "h",
          "\u1E96": "h",
          "\u0127": "h",
          "\u2C68": "h",
          "\u2C76": "h",
          "\u0265": "h",
          "\u0195": "hv",
          "\u24D8": "i",
          "\uFF49": "i",
          "\xec": "i",
          "\xed": "i",
          "\xee": "i",
          "\u0129": "i",
          "\u012B": "i",
          "\u012D": "i",
          "\xef": "i",
          "\u1E2F": "i",
          "\u1EC9": "i",
          "\u01D0": "i",
          "\u0209": "i",
          "\u020B": "i",
          "\u1ECB": "i",
          "\u012F": "i",
          "\u1E2D": "i",
          "\u0268": "i",
          "\u0131": "i",
          "\u24D9": "j",
          "\uFF4A": "j",
          "\u0135": "j",
          "\u01F0": "j",
          "\u0249": "j",
          "\u24DA": "k",
          "\uFF4B": "k",
          "\u1E31": "k",
          "\u01E9": "k",
          "\u1E33": "k",
          "\u0137": "k",
          "\u1E35": "k",
          "\u0199": "k",
          "\u2C6A": "k",
          "\uA741": "k",
          "\uA743": "k",
          "\uA745": "k",
          "\uA7A3": "k",
          "\u24DB": "l",
          "\uFF4C": "l",
          "\u0140": "l",
          "\u013A": "l",
          "\u013E": "l",
          "\u1E37": "l",
          "\u1E39": "l",
          "\u013C": "l",
          "\u1E3D": "l",
          "\u1E3B": "l",
          "\u017F": "l",
          "\u0142": "l",
          "\u019A": "l",
          "\u026B": "l",
          "\u2C61": "l",
          "\uA749": "l",
          "\uA781": "l",
          "\uA747": "l",
          "\u01C9": "lj",
          "\u24DC": "m",
          "\uFF4D": "m",
          "\u1E3F": "m",
          "\u1E41": "m",
          "\u1E43": "m",
          "\u0271": "m",
          "\u026F": "m",
          "\u24DD": "n",
          "\uFF4E": "n",
          "\u01F9": "n",
          "\u0144": "n",
          "\xf1": "n",
          "\u1E45": "n",
          "\u0148": "n",
          "\u1E47": "n",
          "\u0146": "n",
          "\u1E4B": "n",
          "\u1E49": "n",
          "\u019E": "n",
          "\u0272": "n",
          "\u0149": "n",
          "\uA791": "n",
          "\uA7A5": "n",
          "\u01CC": "nj",
          "\u24DE": "o",
          "\uFF4F": "o",
          "\xf2": "o",
          "\xf3": "o",
          "\xf4": "o",
          "\u1ED3": "o",
          "\u1ED1": "o",
          "\u1ED7": "o",
          "\u1ED5": "o",
          "\xf5": "o",
          "\u1E4D": "o",
          "\u022D": "o",
          "\u1E4F": "o",
          "\u014D": "o",
          "\u1E51": "o",
          "\u1E53": "o",
          "\u014F": "o",
          "\u022F": "o",
          "\u0231": "o",
          "\xf6": "o",
          "\u022B": "o",
          "\u1ECF": "o",
          "\u0151": "o",
          "\u01D2": "o",
          "\u020D": "o",
          "\u020F": "o",
          "\u01A1": "o",
          "\u1EDD": "o",
          "\u1EDB": "o",
          "\u1EE1": "o",
          "\u1EDF": "o",
          "\u1EE3": "o",
          "\u1ECD": "o",
          "\u1ED9": "o",
          "\u01EB": "o",
          "\u01ED": "o",
          "\xf8": "o",
          "\u01FF": "o",
          "\u0254": "o",
          "\uA74B": "o",
          "\uA74D": "o",
          "\u0275": "o",
          "\u0153": "oe",
          "\u01A3": "oi",
          "\u0223": "ou",
          "\uA74F": "oo",
          "\u24DF": "p",
          "\uFF50": "p",
          "\u1E55": "p",
          "\u1E57": "p",
          "\u01A5": "p",
          "\u1D7D": "p",
          "\uA751": "p",
          "\uA753": "p",
          "\uA755": "p",
          "\u24E0": "q",
          "\uFF51": "q",
          "\u024B": "q",
          "\uA757": "q",
          "\uA759": "q",
          "\u24E1": "r",
          "\uFF52": "r",
          "\u0155": "r",
          "\u1E59": "r",
          "\u0159": "r",
          "\u0211": "r",
          "\u0213": "r",
          "\u1E5B": "r",
          "\u1E5D": "r",
          "\u0157": "r",
          "\u1E5F": "r",
          "\u024D": "r",
          "\u027D": "r",
          "\uA75B": "r",
          "\uA7A7": "r",
          "\uA783": "r",
          "\u24E2": "s",
          "\uFF53": "s",
          "\xdf": "s",
          "\u015B": "s",
          "\u1E65": "s",
          "\u015D": "s",
          "\u1E61": "s",
          "\u0161": "s",
          "\u1E67": "s",
          "\u1E63": "s",
          "\u1E69": "s",
          "\u0219": "s",
          "\u015F": "s",
          "\u023F": "s",
          "\uA7A9": "s",
          "\uA785": "s",
          "\u1E9B": "s",
          "\u24E3": "t",
          "\uFF54": "t",
          "\u1E6B": "t",
          "\u1E97": "t",
          "\u0165": "t",
          "\u1E6D": "t",
          "\u021B": "t",
          "\u0163": "t",
          "\u1E71": "t",
          "\u1E6F": "t",
          "\u0167": "t",
          "\u01AD": "t",
          "\u0288": "t",
          "\u2C66": "t",
          "\uA787": "t",
          "\uA729": "tz",
          "\u24E4": "u",
          "\uFF55": "u",
          "\xf9": "u",
          "\xfa": "u",
          "\xfb": "u",
          "\u0169": "u",
          "\u1E79": "u",
          "\u016B": "u",
          "\u1E7B": "u",
          "\u016D": "u",
          "\xfc": "u",
          "\u01DC": "u",
          "\u01D8": "u",
          "\u01D6": "u",
          "\u01DA": "u",
          "\u1EE7": "u",
          "\u016F": "u",
          "\u0171": "u",
          "\u01D4": "u",
          "\u0215": "u",
          "\u0217": "u",
          "\u01B0": "u",
          "\u1EEB": "u",
          "\u1EE9": "u",
          "\u1EEF": "u",
          "\u1EED": "u",
          "\u1EF1": "u",
          "\u1EE5": "u",
          "\u1E73": "u",
          "\u0173": "u",
          "\u1E77": "u",
          "\u1E75": "u",
          "\u0289": "u",
          "\u24E5": "v",
          "\uFF56": "v",
          "\u1E7D": "v",
          "\u1E7F": "v",
          "\u028B": "v",
          "\uA75F": "v",
          "\u028C": "v",
          "\uA761": "vy",
          "\u24E6": "w",
          "\uFF57": "w",
          "\u1E81": "w",
          "\u1E83": "w",
          "\u0175": "w",
          "\u1E87": "w",
          "\u1E85": "w",
          "\u1E98": "w",
          "\u1E89": "w",
          "\u2C73": "w",
          "\u24E7": "x",
          "\uFF58": "x",
          "\u1E8B": "x",
          "\u1E8D": "x",
          "\u24E8": "y",
          "\uFF59": "y",
          "\u1EF3": "y",
          "\xfd": "y",
          "\u0177": "y",
          "\u1EF9": "y",
          "\u0233": "y",
          "\u1E8F": "y",
          "\xff": "y",
          "\u1EF7": "y",
          "\u1E99": "y",
          "\u1EF5": "y",
          "\u01B4": "y",
          "\u024F": "y",
          "\u1EFF": "y",
          "\u24E9": "z",
          "\uFF5A": "z",
          "\u017A": "z",
          "\u1E91": "z",
          "\u017C": "z",
          "\u017E": "z",
          "\u1E93": "z",
          "\u1E95": "z",
          "\u01B6": "z",
          "\u0225": "z",
          "\u0240": "z",
          "\u2C6C": "z",
          "\uA763": "z",
          "\u0386": "\u0391",
          "\u0388": "\u0395",
          "\u0389": "\u0397",
          "\u038A": "\u0399",
          "\u03AA": "\u0399",
          "\u038C": "\u039F",
          "\u038E": "\u03A5",
          "\u03AB": "\u03A5",
          "\u038F": "\u03A9",
          "\u03AC": "\u03B1",
          "\u03AD": "\u03B5",
          "\u03AE": "\u03B7",
          "\u03AF": "\u03B9",
          "\u03CA": "\u03B9",
          "\u0390": "\u03B9",
          "\u03CC": "\u03BF",
          "\u03CD": "\u03C5",
          "\u03CB": "\u03C5",
          "\u03B0": "\u03C5",
          "\u03CE": "\u03C9",
          "\u03C2": "\u03C3",
          "\u2019": "'"
        };
      }), r.define("select2/data/base", ["../utils"], function (e) {
        function t(e, n) {
          t.__super__.constructor.call(this);
        }

        return e.Extend(t, e.Observable), t.prototype.current = function (e) {
          throw new Error("The `current` method must be defined in child classes.");
        }, t.prototype.query = function (e, t) {
          throw new Error("The `query` method must be defined in child classes.");
        }, t.prototype.bind = function (e, t) {}, t.prototype.destroy = function () {}, t.prototype.generateResultId = function (t, n) {
          var r = t.id + "-result-";
          return r += e.generateChars(4), null != n.id ? r += "-" + n.id.toString() : r += "-" + e.generateChars(4), r;
        }, t;
      }), r.define("select2/data/select", ["./base", "../utils", "jquery"], function (e, t, n) {
        function r(e, t) {
          this.$element = e, this.options = t, r.__super__.constructor.call(this);
        }

        return t.Extend(r, e), r.prototype.current = function (e) {
          var t = [],
              r = this;
          this.$element.find(":selected").each(function () {
            var e = n(this),
                o = r.item(e);
            t.push(o);
          }), e(t);
        }, r.prototype.select = function (e) {
          var t = this;
          if (e.selected = !0, n(e.element).is("option")) return e.element.selected = !0, void this.$element.trigger("input").trigger("change");
          if (this.$element.prop("multiple")) this.current(function (r) {
            var o = [];
            (e = [e]).push.apply(e, r);

            for (var i = 0; i < e.length; i++) {
              var s = e[i].id;
              -1 === n.inArray(s, o) && o.push(s);
            }

            t.$element.val(o), t.$element.trigger("input").trigger("change");
          });else {
            var r = e.id;
            this.$element.val(r), this.$element.trigger("input").trigger("change");
          }
        }, r.prototype.unselect = function (e) {
          var t = this;

          if (this.$element.prop("multiple")) {
            if (e.selected = !1, n(e.element).is("option")) return e.element.selected = !1, void this.$element.trigger("input").trigger("change");
            this.current(function (r) {
              for (var o = [], i = 0; i < r.length; i++) {
                var s = r[i].id;
                s !== e.id && -1 === n.inArray(s, o) && o.push(s);
              }

              t.$element.val(o), t.$element.trigger("input").trigger("change");
            });
          }
        }, r.prototype.bind = function (e, t) {
          var n = this;
          this.container = e, e.on("select", function (e) {
            n.select(e.data);
          }), e.on("unselect", function (e) {
            n.unselect(e.data);
          });
        }, r.prototype.destroy = function () {
          this.$element.find("*").each(function () {
            t.RemoveData(this);
          });
        }, r.prototype.query = function (e, t) {
          var r = [],
              o = this;
          this.$element.children().each(function () {
            var t = n(this);

            if (t.is("option") || t.is("optgroup")) {
              var i = o.item(t),
                  s = o.matches(e, i);
              null !== s && r.push(s);
            }
          }), t({
            results: r
          });
        }, r.prototype.addOptions = function (e) {
          t.appendMany(this.$element, e);
        }, r.prototype.option = function (e) {
          var r;
          e.children ? (r = document.createElement("optgroup")).label = e.text : void 0 !== (r = document.createElement("option")).textContent ? r.textContent = e.text : r.innerText = e.text, void 0 !== e.id && (r.value = e.id), e.disabled && (r.disabled = !0), e.selected && (r.selected = !0), e.title && (r.title = e.title);

          var o = n(r),
              i = this._normalizeItem(e);

          return i.element = r, t.StoreData(r, "data", i), o;
        }, r.prototype.item = function (e) {
          var r = {};
          if (null != (r = t.GetData(e[0], "data"))) return r;
          if (e.is("option")) r = {
            id: e.val(),
            text: e.text(),
            disabled: e.prop("disabled"),
            selected: e.prop("selected"),
            title: e.prop("title")
          };else if (e.is("optgroup")) {
            r = {
              text: e.prop("label"),
              children: [],
              title: e.prop("title")
            };

            for (var o = e.children("option"), i = [], s = 0; s < o.length; s++) {
              var a = n(o[s]),
                  l = this.item(a);
              i.push(l);
            }

            r.children = i;
          }
          return (r = this._normalizeItem(r)).element = e[0], t.StoreData(e[0], "data", r), r;
        }, r.prototype._normalizeItem = function (e) {
          e !== Object(e) && (e = {
            id: e,
            text: e
          });
          var t = {
            selected: !1,
            disabled: !1
          };
          return null != (e = n.extend({}, {
            text: ""
          }, e)).id && (e.id = e.id.toString()), null != e.text && (e.text = e.text.toString()), null == e._resultId && e.id && null != this.container && (e._resultId = this.generateResultId(this.container, e)), n.extend({}, t, e);
        }, r.prototype.matches = function (e, t) {
          return this.options.get("matcher")(e, t);
        }, r;
      }), r.define("select2/data/array", ["./select", "../utils", "jquery"], function (e, t, n) {
        function r(e, t) {
          this._dataToConvert = t.get("data") || [], r.__super__.constructor.call(this, e, t);
        }

        return t.Extend(r, e), r.prototype.bind = function (e, t) {
          r.__super__.bind.call(this, e, t), this.addOptions(this.convertToOptions(this._dataToConvert));
        }, r.prototype.select = function (e) {
          var t = this.$element.find("option").filter(function (t, n) {
            return n.value == e.id.toString();
          });
          0 === t.length && (t = this.option(e), this.addOptions(t)), r.__super__.select.call(this, e);
        }, r.prototype.convertToOptions = function (e) {
          var r = this,
              o = this.$element.find("option"),
              i = o.map(function () {
            return r.item(n(this)).id;
          }).get(),
              s = [];

          function a(e) {
            return function () {
              return n(this).val() == e.id;
            };
          }

          for (var l = 0; l < e.length; l++) {
            var c = this._normalizeItem(e[l]);

            if (n.inArray(c.id, i) >= 0) {
              var u = o.filter(a(c)),
                  p = this.item(u),
                  h = n.extend(!0, {}, c, p),
                  d = this.option(h);
              u.replaceWith(d);
            } else {
              var f = this.option(c);

              if (c.children) {
                var m = this.convertToOptions(c.children);
                t.appendMany(f, m);
              }

              s.push(f);
            }
          }

          return s;
        }, r;
      }), r.define("select2/data/ajax", ["./array", "../utils", "jquery"], function (e, t, n) {
        function r(e, t) {
          this.ajaxOptions = this._applyDefaults(t.get("ajax")), null != this.ajaxOptions.processResults && (this.processResults = this.ajaxOptions.processResults), r.__super__.constructor.call(this, e, t);
        }

        return t.Extend(r, e), r.prototype._applyDefaults = function (e) {
          var t = {
            data: function data(e) {
              return n.extend({}, e, {
                q: e.term
              });
            },
            transport: function transport(e, t, r) {
              var o = n.ajax(e);
              return o.then(t), o.fail(r), o;
            }
          };
          return n.extend({}, t, e, !0);
        }, r.prototype.processResults = function (e) {
          return e;
        }, r.prototype.query = function (e, t) {
          var r = this;
          null != this._request && (n.isFunction(this._request.abort) && this._request.abort(), this._request = null);
          var o = n.extend({
            type: "GET"
          }, this.ajaxOptions);

          function i() {
            var i = o.transport(o, function (o) {
              var i = r.processResults(o, e);
              r.options.get("debug") && window.console && console.error && (i && i.results && n.isArray(i.results) || console.error("Select2: The AJAX results did not return an array in the `results` key of the response.")), t(i);
            }, function () {
              (!("status" in i) || 0 !== i.status && "0" !== i.status) && r.trigger("results:message", {
                message: "errorLoading"
              });
            });
            r._request = i;
          }

          "function" === typeof o.url && (o.url = o.url.call(this.$element, e)), "function" === typeof o.data && (o.data = o.data.call(this.$element, e)), this.ajaxOptions.delay && null != e.term ? (this._queryTimeout && window.clearTimeout(this._queryTimeout), this._queryTimeout = window.setTimeout(i, this.ajaxOptions.delay)) : i();
        }, r;
      }), r.define("select2/data/tags", ["jquery"], function (e) {
        function t(t, n, r) {
          var o = r.get("tags"),
              i = r.get("createTag");
          void 0 !== i && (this.createTag = i);
          var s = r.get("insertTag");
          if (void 0 !== s && (this.insertTag = s), t.call(this, n, r), e.isArray(o)) for (var a = 0; a < o.length; a++) {
            var l = o[a],
                c = this._normalizeItem(l),
                u = this.option(c);

            this.$element.append(u);
          }
        }

        return t.prototype.query = function (e, t, n) {
          var r = this;

          function o(e, i) {
            for (var s = e.results, a = 0; a < s.length; a++) {
              var l = s[a],
                  c = null != l.children && !o({
                results: l.children
              }, !0);
              if ((l.text || "").toUpperCase() === (t.term || "").toUpperCase() || c) return !i && (e.data = s, void n(e));
            }

            if (i) return !0;
            var u = r.createTag(t);

            if (null != u) {
              var p = r.option(u);
              p.attr("data-select2-tag", !0), r.addOptions([p]), r.insertTag(s, u);
            }

            e.results = s, n(e);
          }

          this._removeOldTags(), null != t.term && null == t.page ? e.call(this, t, o) : e.call(this, t, n);
        }, t.prototype.createTag = function (t, n) {
          var r = e.trim(n.term);
          return "" === r ? null : {
            id: r,
            text: r
          };
        }, t.prototype.insertTag = function (e, t, n) {
          t.unshift(n);
        }, t.prototype._removeOldTags = function (t) {
          this.$element.find("option[data-select2-tag]").each(function () {
            this.selected || e(this).remove();
          });
        }, t;
      }), r.define("select2/data/tokenizer", ["jquery"], function (e) {
        function t(e, t, n) {
          var r = n.get("tokenizer");
          void 0 !== r && (this.tokenizer = r), e.call(this, t, n);
        }

        return t.prototype.bind = function (e, t, n) {
          e.call(this, t, n), this.$search = t.dropdown.$search || t.selection.$search || n.find(".select2-search__field");
        }, t.prototype.query = function (t, n, r) {
          var o = this;

          function i(t) {
            var n = o._normalizeItem(t);

            if (!o.$element.find("option").filter(function () {
              return e(this).val() === n.id;
            }).length) {
              var r = o.option(n);
              r.attr("data-select2-tag", !0), o._removeOldTags(), o.addOptions([r]);
            }

            s(n);
          }

          function s(e) {
            o.trigger("select", {
              data: e
            });
          }

          n.term = n.term || "";
          var a = this.tokenizer(n, this.options, i);
          a.term !== n.term && (this.$search.length && (this.$search.val(a.term), this.$search.trigger("focus")), n.term = a.term), t.call(this, n, r);
        }, t.prototype.tokenizer = function (t, n, r, o) {
          for (var i = r.get("tokenSeparators") || [], s = n.term, a = 0, l = this.createTag || function (e) {
            return {
              id: e.term,
              text: e.term
            };
          }; a < s.length;) {
            var c = s[a];

            if (-1 !== e.inArray(c, i)) {
              var u = s.substr(0, a),
                  p = l(e.extend({}, n, {
                term: u
              }));
              null != p ? (o(p), s = s.substr(a + 1) || "", a = 0) : a++;
            } else a++;
          }

          return {
            term: s
          };
        }, t;
      }), r.define("select2/data/minimumInputLength", [], function () {
        function e(e, t, n) {
          this.minimumInputLength = n.get("minimumInputLength"), e.call(this, t, n);
        }

        return e.prototype.query = function (e, t, n) {
          t.term = t.term || "", t.term.length < this.minimumInputLength ? this.trigger("results:message", {
            message: "inputTooShort",
            args: {
              minimum: this.minimumInputLength,
              input: t.term,
              params: t
            }
          }) : e.call(this, t, n);
        }, e;
      }), r.define("select2/data/maximumInputLength", [], function () {
        function e(e, t, n) {
          this.maximumInputLength = n.get("maximumInputLength"), e.call(this, t, n);
        }

        return e.prototype.query = function (e, t, n) {
          t.term = t.term || "", this.maximumInputLength > 0 && t.term.length > this.maximumInputLength ? this.trigger("results:message", {
            message: "inputTooLong",
            args: {
              maximum: this.maximumInputLength,
              input: t.term,
              params: t
            }
          }) : e.call(this, t, n);
        }, e;
      }), r.define("select2/data/maximumSelectionLength", [], function () {
        function e(e, t, n) {
          this.maximumSelectionLength = n.get("maximumSelectionLength"), e.call(this, t, n);
        }

        return e.prototype.bind = function (e, t, n) {
          var r = this;
          e.call(this, t, n), t.on("select", function () {
            r._checkIfMaximumSelected();
          });
        }, e.prototype.query = function (e, t, n) {
          var r = this;

          this._checkIfMaximumSelected(function () {
            e.call(r, t, n);
          });
        }, e.prototype._checkIfMaximumSelected = function (e, t) {
          var n = this;
          this.current(function (e) {
            var r = null != e ? e.length : 0;
            n.maximumSelectionLength > 0 && r >= n.maximumSelectionLength ? n.trigger("results:message", {
              message: "maximumSelected",
              args: {
                maximum: n.maximumSelectionLength
              }
            }) : t && t();
          });
        }, e;
      }), r.define("select2/dropdown", ["jquery", "./utils"], function (e, t) {
        function n(e, t) {
          this.$element = e, this.options = t, n.__super__.constructor.call(this);
        }

        return t.Extend(n, t.Observable), n.prototype.render = function () {
          var t = e('<span class="select2-dropdown"><span class="select2-results"></span></span>');
          return t.attr("dir", this.options.get("dir")), this.$dropdown = t, t;
        }, n.prototype.bind = function () {}, n.prototype.position = function (e, t) {}, n.prototype.destroy = function () {
          this.$dropdown.remove();
        }, n;
      }), r.define("select2/dropdown/search", ["jquery", "../utils"], function (e, t) {
        function n() {}

        return n.prototype.render = function (t) {
          var n = t.call(this),
              r = e('<span class="select2-search select2-search--dropdown"><input class="select2-search__field" type="search" tabindex="-1" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" /></span>');
          return this.$searchContainer = r, this.$search = r.find("input"), n.prepend(r), n;
        }, n.prototype.bind = function (t, n, r) {
          var o = this,
              i = n.id + "-results";
          t.call(this, n, r), this.$search.on("keydown", function (e) {
            o.trigger("keypress", e), o._keyUpPrevented = e.isDefaultPrevented();
          }), this.$search.on("input", function (t) {
            e(this).off("keyup");
          }), this.$search.on("keyup input", function (e) {
            o.handleSearch(e);
          }), n.on("open", function () {
            o.$search.attr("tabindex", 0), o.$search.attr("aria-controls", i), o.$search.trigger("focus"), window.setTimeout(function () {
              o.$search.trigger("focus");
            }, 0);
          }), n.on("close", function () {
            o.$search.attr("tabindex", -1), o.$search.removeAttr("aria-controls"), o.$search.removeAttr("aria-activedescendant"), o.$search.val(""), o.$search.trigger("blur");
          }), n.on("focus", function () {
            n.isOpen() || o.$search.trigger("focus");
          }), n.on("results:all", function (e) {
            null != e.query.term && "" !== e.query.term || (o.showSearch(e) ? o.$searchContainer.removeClass("select2-search--hide") : o.$searchContainer.addClass("select2-search--hide"));
          }), n.on("results:focus", function (e) {
            e.data._resultId ? o.$search.attr("aria-activedescendant", e.data._resultId) : o.$search.removeAttr("aria-activedescendant");
          });
        }, n.prototype.handleSearch = function (e) {
          if (!this._keyUpPrevented) {
            var t = this.$search.val();
            this.trigger("query", {
              term: t
            });
          }

          this._keyUpPrevented = !1;
        }, n.prototype.showSearch = function (e, t) {
          return !0;
        }, n;
      }), r.define("select2/dropdown/hidePlaceholder", [], function () {
        function e(e, t, n, r) {
          this.placeholder = this.normalizePlaceholder(n.get("placeholder")), e.call(this, t, n, r);
        }

        return e.prototype.append = function (e, t) {
          t.results = this.removePlaceholder(t.results), e.call(this, t);
        }, e.prototype.normalizePlaceholder = function (e, t) {
          return "string" === typeof t && (t = {
            id: "",
            text: t
          }), t;
        }, e.prototype.removePlaceholder = function (e, t) {
          for (var n = t.slice(0), r = t.length - 1; r >= 0; r--) {
            var o = t[r];
            this.placeholder.id === o.id && n.splice(r, 1);
          }

          return n;
        }, e;
      }), r.define("select2/dropdown/infiniteScroll", ["jquery"], function (e) {
        function t(e, t, n, r) {
          this.lastParams = {}, e.call(this, t, n, r), this.$loadingMore = this.createLoadingMore(), this.loading = !1;
        }

        return t.prototype.append = function (e, t) {
          this.$loadingMore.remove(), this.loading = !1, e.call(this, t), this.showLoadingMore(t) && (this.$results.append(this.$loadingMore), this.loadMoreIfNeeded());
        }, t.prototype.bind = function (e, t, n) {
          var r = this;
          e.call(this, t, n), t.on("query", function (e) {
            r.lastParams = e, r.loading = !0;
          }), t.on("query:append", function (e) {
            r.lastParams = e, r.loading = !0;
          }), this.$results.on("scroll", this.loadMoreIfNeeded.bind(this));
        }, t.prototype.loadMoreIfNeeded = function () {
          var t = e.contains(document.documentElement, this.$loadingMore[0]);
          !this.loading && t && this.$results.offset().top + this.$results.outerHeight(!1) + 50 >= this.$loadingMore.offset().top + this.$loadingMore.outerHeight(!1) && this.loadMore();
        }, t.prototype.loadMore = function () {
          this.loading = !0;
          var t = e.extend({}, {
            page: 1
          }, this.lastParams);
          t.page++, this.trigger("query:append", t);
        }, t.prototype.showLoadingMore = function (e, t) {
          return t.pagination && t.pagination.more;
        }, t.prototype.createLoadingMore = function () {
          var t = e('<li class="select2-results__option select2-results__option--load-more"role="option" aria-disabled="true"></li>'),
              n = this.options.get("translations").get("loadingMore");
          return t.html(n(this.lastParams)), t;
        }, t;
      }), r.define("select2/dropdown/attachBody", ["jquery", "../utils"], function (e, t) {
        function n(t, n, r) {
          this.$dropdownParent = e(r.get("dropdownParent") || document.body), t.call(this, n, r);
        }

        return n.prototype.bind = function (e, t, n) {
          var r = this;
          e.call(this, t, n), t.on("open", function () {
            r._showDropdown(), r._attachPositioningHandler(t), r._bindContainerResultHandlers(t);
          }), t.on("close", function () {
            r._hideDropdown(), r._detachPositioningHandler(t);
          }), this.$dropdownContainer.on("mousedown", function (e) {
            e.stopPropagation();
          });
        }, n.prototype.destroy = function (e) {
          e.call(this), this.$dropdownContainer.remove();
        }, n.prototype.position = function (e, t, n) {
          t.attr("class", n.attr("class")), t.removeClass("select2"), t.addClass("select2-container--open"), t.css({
            position: "absolute",
            top: -999999
          }), this.$container = n;
        }, n.prototype.render = function (t) {
          var n = e("<span></span>"),
              r = t.call(this);
          return n.append(r), this.$dropdownContainer = n, n;
        }, n.prototype._hideDropdown = function (e) {
          this.$dropdownContainer.detach();
        }, n.prototype._bindContainerResultHandlers = function (e, t) {
          if (!this._containerResultsHandlersBound) {
            var n = this;
            t.on("results:all", function () {
              n._positionDropdown(), n._resizeDropdown();
            }), t.on("results:append", function () {
              n._positionDropdown(), n._resizeDropdown();
            }), t.on("results:message", function () {
              n._positionDropdown(), n._resizeDropdown();
            }), t.on("select", function () {
              n._positionDropdown(), n._resizeDropdown();
            }), t.on("unselect", function () {
              n._positionDropdown(), n._resizeDropdown();
            }), this._containerResultsHandlersBound = !0;
          }
        }, n.prototype._attachPositioningHandler = function (n, r) {
          var o = this,
              i = "scroll.select2." + r.id,
              s = "resize.select2." + r.id,
              a = "orientationchange.select2." + r.id,
              l = this.$container.parents().filter(t.hasScroll);
          l.each(function () {
            t.StoreData(this, "select2-scroll-position", {
              x: e(this).scrollLeft(),
              y: e(this).scrollTop()
            });
          }), l.on(i, function (n) {
            var r = t.GetData(this, "select2-scroll-position");
            e(this).scrollTop(r.y);
          }), e(window).on(i + " " + s + " " + a, function (e) {
            o._positionDropdown(), o._resizeDropdown();
          });
        }, n.prototype._detachPositioningHandler = function (n, r) {
          var o = "scroll.select2." + r.id,
              i = "resize.select2." + r.id,
              s = "orientationchange.select2." + r.id;
          this.$container.parents().filter(t.hasScroll).off(o), e(window).off(o + " " + i + " " + s);
        }, n.prototype._positionDropdown = function () {
          var t = e(window),
              n = this.$dropdown.hasClass("select2-dropdown--above"),
              r = this.$dropdown.hasClass("select2-dropdown--below"),
              o = null,
              i = this.$container.offset();
          i.bottom = i.top + this.$container.outerHeight(!1);
          var s = {
            height: this.$container.outerHeight(!1)
          };
          s.top = i.top, s.bottom = i.top + s.height;
          var a = {
            height: this.$dropdown.outerHeight(!1)
          },
              l = {
            top: t.scrollTop(),
            bottom: t.scrollTop() + t.height()
          },
              c = l.top < i.top - a.height,
              u = l.bottom > i.bottom + a.height,
              p = {
            left: i.left,
            top: s.bottom
          },
              h = this.$dropdownParent;
          "static" === h.css("position") && (h = h.offsetParent());
          var d = {
            top: 0,
            left: 0
          };
          (e.contains(document.body, h[0]) || h[0].isConnected) && (d = h.offset()), p.top -= d.top, p.left -= d.left, n || r || (o = "below"), u || !c || n ? !c && u && n && (o = "below") : o = "above", ("above" == o || n && "below" !== o) && (p.top = s.top - d.top - a.height), null != o && (this.$dropdown.removeClass("select2-dropdown--below select2-dropdown--above").addClass("select2-dropdown--" + o), this.$container.removeClass("select2-container--below select2-container--above").addClass("select2-container--" + o)), this.$dropdownContainer.css(p);
        }, n.prototype._resizeDropdown = function () {
          var e = {
            width: this.$container.outerWidth(!1) + "px"
          };
          this.options.get("dropdownAutoWidth") && (e.minWidth = e.width, e.position = "relative", e.width = "auto"), this.$dropdown.css(e);
        }, n.prototype._showDropdown = function (e) {
          this.$dropdownContainer.appendTo(this.$dropdownParent), this._positionDropdown(), this._resizeDropdown();
        }, n;
      }), r.define("select2/dropdown/minimumResultsForSearch", [], function () {
        function e(t) {
          for (var n = 0, r = 0; r < t.length; r++) {
            var o = t[r];
            o.children ? n += e(o.children) : n++;
          }

          return n;
        }

        function t(e, t, n, r) {
          this.minimumResultsForSearch = n.get("minimumResultsForSearch"), this.minimumResultsForSearch < 0 && (this.minimumResultsForSearch = 1 / 0), e.call(this, t, n, r);
        }

        return t.prototype.showSearch = function (t, n) {
          return !(e(n.data.results) < this.minimumResultsForSearch) && t.call(this, n);
        }, t;
      }), r.define("select2/dropdown/selectOnClose", ["../utils"], function (e) {
        function t() {}

        return t.prototype.bind = function (e, t, n) {
          var r = this;
          e.call(this, t, n), t.on("close", function (e) {
            r._handleSelectOnClose(e);
          });
        }, t.prototype._handleSelectOnClose = function (t, n) {
          if (n && null != n.originalSelect2Event) {
            var r = n.originalSelect2Event;
            if ("select" === r._type || "unselect" === r._type) return;
          }

          var o = this.getHighlightedResults();

          if (!(o.length < 1)) {
            var i = e.GetData(o[0], "data");
            null != i.element && i.element.selected || null == i.element && i.selected || this.trigger("select", {
              data: i
            });
          }
        }, t;
      }), r.define("select2/dropdown/closeOnSelect", [], function () {
        function e() {}

        return e.prototype.bind = function (e, t, n) {
          var r = this;
          e.call(this, t, n), t.on("select", function (e) {
            r._selectTriggered(e);
          }), t.on("unselect", function (e) {
            r._selectTriggered(e);
          });
        }, e.prototype._selectTriggered = function (e, t) {
          var n = t.originalEvent;
          n && (n.ctrlKey || n.metaKey) || this.trigger("close", {
            originalEvent: n,
            originalSelect2Event: t
          });
        }, e;
      }), r.define("select2/i18n/en", [], function () {
        return {
          errorLoading: function errorLoading() {
            return "The results could not be loaded.";
          },
          inputTooLong: function inputTooLong(e) {
            var t = e.input.length - e.maximum,
                n = "Please delete " + t + " character";
            return 1 != t && (n += "s"), n;
          },
          inputTooShort: function inputTooShort(e) {
            return "Please enter " + (e.minimum - e.input.length) + " or more characters";
          },
          loadingMore: function loadingMore() {
            return "Loading more results\u2026";
          },
          maximumSelected: function maximumSelected(e) {
            var t = "You can only select " + e.maximum + " item";
            return 1 != e.maximum && (t += "s"), t;
          },
          noResults: function noResults() {
            return "No results found";
          },
          searching: function searching() {
            return "Searching\u2026";
          },
          removeAllItems: function removeAllItems() {
            return "Remove all items";
          }
        };
      }), r.define("select2/defaults", ["jquery", "require", "./results", "./selection/single", "./selection/multiple", "./selection/placeholder", "./selection/allowClear", "./selection/search", "./selection/eventRelay", "./utils", "./translation", "./diacritics", "./data/select", "./data/array", "./data/ajax", "./data/tags", "./data/tokenizer", "./data/minimumInputLength", "./data/maximumInputLength", "./data/maximumSelectionLength", "./dropdown", "./dropdown/search", "./dropdown/hidePlaceholder", "./dropdown/infiniteScroll", "./dropdown/attachBody", "./dropdown/minimumResultsForSearch", "./dropdown/selectOnClose", "./dropdown/closeOnSelect", "./i18n/en"], function (e, t, n, r, o, i, s, a, l, c, u, p, h, d, f, m, g, y, v, b, w, E, _, x, S, T, C, A, k) {
        function O() {
          this.reset();
        }

        return O.prototype.apply = function (u) {
          if (null == (u = e.extend(!0, {}, this.defaults, u)).dataAdapter) {
            if (null != u.ajax ? u.dataAdapter = f : null != u.data ? u.dataAdapter = d : u.dataAdapter = h, u.minimumInputLength > 0 && (u.dataAdapter = c.Decorate(u.dataAdapter, y)), u.maximumInputLength > 0 && (u.dataAdapter = c.Decorate(u.dataAdapter, v)), u.maximumSelectionLength > 0 && (u.dataAdapter = c.Decorate(u.dataAdapter, b)), u.tags && (u.dataAdapter = c.Decorate(u.dataAdapter, m)), null == u.tokenSeparators && null == u.tokenizer || (u.dataAdapter = c.Decorate(u.dataAdapter, g)), null != u.query) {
              var p = t(u.amdBase + "compat/query");
              u.dataAdapter = c.Decorate(u.dataAdapter, p);
            }

            if (null != u.initSelection) {
              var k = t(u.amdBase + "compat/initSelection");
              u.dataAdapter = c.Decorate(u.dataAdapter, k);
            }
          }

          if (null == u.resultsAdapter && (u.resultsAdapter = n, null != u.ajax && (u.resultsAdapter = c.Decorate(u.resultsAdapter, x)), null != u.placeholder && (u.resultsAdapter = c.Decorate(u.resultsAdapter, _)), u.selectOnClose && (u.resultsAdapter = c.Decorate(u.resultsAdapter, C))), null == u.dropdownAdapter) {
            if (u.multiple) u.dropdownAdapter = w;else {
              var O = c.Decorate(w, E);
              u.dropdownAdapter = O;
            }

            if (0 !== u.minimumResultsForSearch && (u.dropdownAdapter = c.Decorate(u.dropdownAdapter, T)), u.closeOnSelect && (u.dropdownAdapter = c.Decorate(u.dropdownAdapter, A)), null != u.dropdownCssClass || null != u.dropdownCss || null != u.adaptDropdownCssClass) {
              var D = t(u.amdBase + "compat/dropdownCss");
              u.dropdownAdapter = c.Decorate(u.dropdownAdapter, D);
            }

            u.dropdownAdapter = c.Decorate(u.dropdownAdapter, S);
          }

          if (null == u.selectionAdapter) {
            if (u.multiple ? u.selectionAdapter = o : u.selectionAdapter = r, null != u.placeholder && (u.selectionAdapter = c.Decorate(u.selectionAdapter, i)), u.allowClear && (u.selectionAdapter = c.Decorate(u.selectionAdapter, s)), u.multiple && (u.selectionAdapter = c.Decorate(u.selectionAdapter, a)), null != u.containerCssClass || null != u.containerCss || null != u.adaptContainerCssClass) {
              var L = t(u.amdBase + "compat/containerCss");
              u.selectionAdapter = c.Decorate(u.selectionAdapter, L);
            }

            u.selectionAdapter = c.Decorate(u.selectionAdapter, l);
          }

          u.language = this._resolveLanguage(u.language), u.language.push("en");

          for (var N = [], P = 0; P < u.language.length; P++) {
            var j = u.language[P];
            -1 === N.indexOf(j) && N.push(j);
          }

          return u.language = N, u.translations = this._processTranslations(u.language, u.debug), u;
        }, O.prototype.reset = function () {
          function t(e) {
            function t(e) {
              return p[e] || e;
            }

            return e.replace(/[^\u0000-\u007E]/g, t);
          }

          function n(r, o) {
            if ("" === e.trim(r.term)) return o;

            if (o.children && o.children.length > 0) {
              for (var i = e.extend(!0, {}, o), s = o.children.length - 1; s >= 0; s--) {
                null == n(r, o.children[s]) && i.children.splice(s, 1);
              }

              return i.children.length > 0 ? i : n(r, i);
            }

            var a = t(o.text).toUpperCase(),
                l = t(r.term).toUpperCase();
            return a.indexOf(l) > -1 ? o : null;
          }

          this.defaults = {
            amdBase: "./",
            amdLanguageBase: "./i18n/",
            closeOnSelect: !0,
            debug: !1,
            dropdownAutoWidth: !1,
            escapeMarkup: c.escapeMarkup,
            language: {},
            matcher: n,
            minimumInputLength: 0,
            maximumInputLength: 0,
            maximumSelectionLength: 0,
            minimumResultsForSearch: 0,
            selectOnClose: !1,
            scrollAfterSelect: !1,
            sorter: function sorter(e) {
              return e;
            },
            templateResult: function templateResult(e) {
              return e.text;
            },
            templateSelection: function templateSelection(e) {
              return e.text;
            },
            theme: "default",
            width: "resolve"
          };
        }, O.prototype.applyFromElement = function (e, t) {
          var n = e.language,
              r = this.defaults.language,
              o = t.prop("lang"),
              i = t.closest("[lang]").prop("lang"),
              s = Array.prototype.concat.call(this._resolveLanguage(o), this._resolveLanguage(n), this._resolveLanguage(r), this._resolveLanguage(i));
          return e.language = s, e;
        }, O.prototype._resolveLanguage = function (t) {
          if (!t) return [];
          if (e.isEmptyObject(t)) return [];
          if (e.isPlainObject(t)) return [t];
          var n;
          n = e.isArray(t) ? t : [t];

          for (var r = [], o = 0; o < n.length; o++) {
            if (r.push(n[o]), "string" === typeof n[o] && n[o].indexOf("-") > 0) {
              var i = n[o].split("-")[0];
              r.push(i);
            }
          }

          return r;
        }, O.prototype._processTranslations = function (t, n) {
          for (var r = new u(), o = 0; o < t.length; o++) {
            var i = new u(),
                s = t[o];
            if ("string" === typeof s) try {
              i = u.loadPath(s);
            } catch (a) {
              try {
                s = this.defaults.amdLanguageBase + s, i = u.loadPath(s);
              } catch (l) {
                n && window.console && console.warn && console.warn('Select2: The language file for "' + s + '" could not be automatically loaded. A fallback will be used instead.');
              }
            } else i = e.isPlainObject(s) ? new u(s) : s;
            r.extend(i);
          }

          return r;
        }, O.prototype.set = function (t, n) {
          var r = {};
          r[e.camelCase(t)] = n;

          var o = c._convertData(r);

          e.extend(!0, this.defaults, o);
        }, new O();
      }), r.define("select2/options", ["require", "jquery", "./defaults", "./utils"], function (e, t, n, r) {
        function o(t, o) {
          if (this.options = t, null != o && this.fromElement(o), null != o && (this.options = n.applyFromElement(this.options, o)), this.options = n.apply(this.options), o && o.is("input")) {
            var i = e(this.get("amdBase") + "compat/inputData");
            this.options.dataAdapter = r.Decorate(this.options.dataAdapter, i);
          }
        }

        return o.prototype.fromElement = function (e) {
          var n = ["select2"];
          null == this.options.multiple && (this.options.multiple = e.prop("multiple")), null == this.options.disabled && (this.options.disabled = e.prop("disabled")), null == this.options.dir && (e.prop("dir") ? this.options.dir = e.prop("dir") : e.closest("[dir]").prop("dir") ? this.options.dir = e.closest("[dir]").prop("dir") : this.options.dir = "ltr"), e.prop("disabled", this.options.disabled), e.prop("multiple", this.options.multiple), r.GetData(e[0], "select2Tags") && (this.options.debug && window.console && console.warn && console.warn('Select2: The `data-select2-tags` attribute has been changed to use the `data-data` and `data-tags="true"` attributes and will be removed in future versions of Select2.'), r.StoreData(e[0], "data", r.GetData(e[0], "select2Tags")), r.StoreData(e[0], "tags", !0)), r.GetData(e[0], "ajaxUrl") && (this.options.debug && window.console && console.warn && console.warn("Select2: The `data-ajax-url` attribute has been changed to `data-ajax--url` and support for the old attribute will be removed in future versions of Select2."), e.attr("ajax--url", r.GetData(e[0], "ajaxUrl")), r.StoreData(e[0], "ajax-Url", r.GetData(e[0], "ajaxUrl")));
          var o = {};

          function i(e, t) {
            return t.toUpperCase();
          }

          for (var s = 0; s < e[0].attributes.length; s++) {
            var a = e[0].attributes[s].name,
                l = "data-";

            if (a.substr(0, l.length) == l) {
              var c = a.substring(l.length),
                  u = r.GetData(e[0], c);
              o[c.replace(/-([a-z])/g, i)] = u;
            }
          }

          t.fn.jquery && "1." == t.fn.jquery.substr(0, 2) && e[0].dataset && (o = t.extend(!0, {}, e[0].dataset, o));
          var p = t.extend(!0, {}, r.GetData(e[0]), o);

          for (var h in p = r._convertData(p)) {
            t.inArray(h, n) > -1 || (t.isPlainObject(this.options[h]) ? t.extend(this.options[h], p[h]) : this.options[h] = p[h]);
          }

          return this;
        }, o.prototype.get = function (e) {
          return this.options[e];
        }, o.prototype.set = function (e, t) {
          this.options[e] = t;
        }, o;
      }), r.define("select2/core", ["jquery", "./options", "./utils", "./keys"], function (e, t, n, r) {
        var o = function e(r, o) {
          null != n.GetData(r[0], "select2") && n.GetData(r[0], "select2").destroy(), this.$element = r, this.id = this._generateId(r), o = o || {}, this.options = new t(o, r), e.__super__.constructor.call(this);
          var i = r.attr("tabindex") || 0;
          n.StoreData(r[0], "old-tabindex", i), r.attr("tabindex", "-1");
          var s = this.options.get("dataAdapter");
          this.dataAdapter = new s(r, this.options);
          var a = this.render();

          this._placeContainer(a);

          var l = this.options.get("selectionAdapter");
          this.selection = new l(r, this.options), this.$selection = this.selection.render(), this.selection.position(this.$selection, a);
          var c = this.options.get("dropdownAdapter");
          this.dropdown = new c(r, this.options), this.$dropdown = this.dropdown.render(), this.dropdown.position(this.$dropdown, a);
          var u = this.options.get("resultsAdapter");
          this.results = new u(r, this.options, this.dataAdapter), this.$results = this.results.render(), this.results.position(this.$results, this.$dropdown);
          var p = this;
          this._bindAdapters(), this._registerDomEvents(), this._registerDataEvents(), this._registerSelectionEvents(), this._registerDropdownEvents(), this._registerResultsEvents(), this._registerEvents(), this.dataAdapter.current(function (e) {
            p.trigger("selection:update", {
              data: e
            });
          }), r.addClass("select2-hidden-accessible"), r.attr("aria-hidden", "true"), this._syncAttributes(), n.StoreData(r[0], "select2", this), r.data("select2", this);
        };

        return n.Extend(o, n.Observable), o.prototype._generateId = function (e) {
          return "select2-" + (null != e.attr("id") ? e.attr("id") : null != e.attr("name") ? e.attr("name") + "-" + n.generateChars(2) : n.generateChars(4)).replace(/(:|\.|\[|\]|,)/g, "");
        }, o.prototype._placeContainer = function (e) {
          e.insertAfter(this.$element);

          var t = this._resolveWidth(this.$element, this.options.get("width"));

          null != t && e.css("width", t);
        }, o.prototype._resolveWidth = function (e, t) {
          var n = /^width:(([-+]?([0-9]*\.)?[0-9]+)(px|em|ex|%|in|cm|mm|pt|pc))/i;

          if ("resolve" == t) {
            var r = this._resolveWidth(e, "style");

            return null != r ? r : this._resolveWidth(e, "element");
          }

          if ("element" == t) {
            var o = e.outerWidth(!1);
            return o <= 0 ? "auto" : o + "px";
          }

          if ("style" == t) {
            var i = e.attr("style");
            if ("string" !== typeof i) return null;

            for (var s = i.split(";"), a = 0, l = s.length; a < l; a += 1) {
              var c = s[a].replace(/\s/g, "").match(n);
              if (null !== c && c.length >= 1) return c[1];
            }

            return null;
          }

          return "computedstyle" == t ? window.getComputedStyle(e[0]).width : t;
        }, o.prototype._bindAdapters = function () {
          this.dataAdapter.bind(this, this.$container), this.selection.bind(this, this.$container), this.dropdown.bind(this, this.$container), this.results.bind(this, this.$container);
        }, o.prototype._registerDomEvents = function () {
          var e = this;
          this.$element.on("change.select2", function () {
            e.dataAdapter.current(function (t) {
              e.trigger("selection:update", {
                data: t
              });
            });
          }), this.$element.on("focus.select2", function (t) {
            e.trigger("focus", t);
          }), this._syncA = n.bind(this._syncAttributes, this), this._syncS = n.bind(this._syncSubtree, this), this.$element[0].attachEvent && this.$element[0].attachEvent("onpropertychange", this._syncA);
          var t = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
          null != t ? (this._observer = new t(function (t) {
            e._syncA(), e._syncS(null, t);
          }), this._observer.observe(this.$element[0], {
            attributes: !0,
            childList: !0,
            subtree: !1
          })) : this.$element[0].addEventListener && (this.$element[0].addEventListener("DOMAttrModified", e._syncA, !1), this.$element[0].addEventListener("DOMNodeInserted", e._syncS, !1), this.$element[0].addEventListener("DOMNodeRemoved", e._syncS, !1));
        }, o.prototype._registerDataEvents = function () {
          var e = this;
          this.dataAdapter.on("*", function (t, n) {
            e.trigger(t, n);
          });
        }, o.prototype._registerSelectionEvents = function () {
          var t = this,
              n = ["toggle", "focus"];
          this.selection.on("toggle", function () {
            t.toggleDropdown();
          }), this.selection.on("focus", function (e) {
            t.focus(e);
          }), this.selection.on("*", function (r, o) {
            -1 === e.inArray(r, n) && t.trigger(r, o);
          });
        }, o.prototype._registerDropdownEvents = function () {
          var e = this;
          this.dropdown.on("*", function (t, n) {
            e.trigger(t, n);
          });
        }, o.prototype._registerResultsEvents = function () {
          var e = this;
          this.results.on("*", function (t, n) {
            e.trigger(t, n);
          });
        }, o.prototype._registerEvents = function () {
          var e = this;
          this.on("open", function () {
            e.$container.addClass("select2-container--open");
          }), this.on("close", function () {
            e.$container.removeClass("select2-container--open");
          }), this.on("enable", function () {
            e.$container.removeClass("select2-container--disabled");
          }), this.on("disable", function () {
            e.$container.addClass("select2-container--disabled");
          }), this.on("blur", function () {
            e.$container.removeClass("select2-container--focus");
          }), this.on("query", function (t) {
            e.isOpen() || e.trigger("open", {}), this.dataAdapter.query(t, function (n) {
              e.trigger("results:all", {
                data: n,
                query: t
              });
            });
          }), this.on("query:append", function (t) {
            this.dataAdapter.query(t, function (n) {
              e.trigger("results:append", {
                data: n,
                query: t
              });
            });
          }), this.on("keypress", function (t) {
            var n = t.which;
            e.isOpen() ? n === r.ESC || n === r.TAB || n === r.UP && t.altKey ? (e.close(t), t.preventDefault()) : n === r.ENTER ? (e.trigger("results:select", {}), t.preventDefault()) : n === r.SPACE && t.ctrlKey ? (e.trigger("results:toggle", {}), t.preventDefault()) : n === r.UP ? (e.trigger("results:previous", {}), t.preventDefault()) : n === r.DOWN && (e.trigger("results:next", {}), t.preventDefault()) : (n === r.ENTER || n === r.SPACE || n === r.DOWN && t.altKey) && (e.open(), t.preventDefault());
          });
        }, o.prototype._syncAttributes = function () {
          this.options.set("disabled", this.$element.prop("disabled")), this.isDisabled() ? (this.isOpen() && this.close(), this.trigger("disable", {})) : this.trigger("enable", {});
        }, o.prototype._isChangeMutation = function (t, n) {
          var r = !1,
              o = this;

          if (!t || !t.target || "OPTION" === t.target.nodeName || "OPTGROUP" === t.target.nodeName) {
            if (n) {
              if (n.addedNodes && n.addedNodes.length > 0) for (var i = 0; i < n.addedNodes.length; i++) {
                n.addedNodes[i].selected && (r = !0);
              } else n.removedNodes && n.removedNodes.length > 0 ? r = !0 : e.isArray(n) && e.each(n, function (e, t) {
                if (o._isChangeMutation(e, t)) return r = !0, !1;
              });
            } else r = !0;
            return r;
          }
        }, o.prototype._syncSubtree = function (e, t) {
          var n = this._isChangeMutation(e, t),
              r = this;

          n && this.dataAdapter.current(function (e) {
            r.trigger("selection:update", {
              data: e
            });
          });
        }, o.prototype.trigger = function (e, t) {
          var n = o.__super__.trigger,
              r = {
            open: "opening",
            close: "closing",
            select: "selecting",
            unselect: "unselecting",
            clear: "clearing"
          };

          if (void 0 === t && (t = {}), e in r) {
            var i = r[e],
                s = {
              prevented: !1,
              name: e,
              args: t
            };
            if (n.call(this, i, s), s.prevented) return void (t.prevented = !0);
          }

          n.call(this, e, t);
        }, o.prototype.toggleDropdown = function () {
          this.isDisabled() || (this.isOpen() ? this.close() : this.open());
        }, o.prototype.open = function () {
          this.isOpen() || this.isDisabled() || this.trigger("query", {});
        }, o.prototype.close = function (e) {
          this.isOpen() && this.trigger("close", {
            originalEvent: e
          });
        }, o.prototype.isEnabled = function () {
          return !this.isDisabled();
        }, o.prototype.isDisabled = function () {
          return this.options.get("disabled");
        }, o.prototype.isOpen = function () {
          return this.$container.hasClass("select2-container--open");
        }, o.prototype.hasFocus = function () {
          return this.$container.hasClass("select2-container--focus");
        }, o.prototype.focus = function (e) {
          this.hasFocus() || (this.$container.addClass("select2-container--focus"), this.trigger("focus", {}));
        }, o.prototype.enable = function (e) {
          this.options.get("debug") && window.console && console.warn && console.warn('Select2: The `select2("enable")` method has been deprecated and will be removed in later Select2 versions. Use $element.prop("disabled") instead.'), null != e && 0 !== e.length || (e = [!0]);
          var t = !e[0];
          this.$element.prop("disabled", t);
        }, o.prototype.data = function () {
          this.options.get("debug") && arguments.length > 0 && window.console && console.warn && console.warn('Select2: Data can no longer be set using `select2("data")`. You should consider setting the value instead using `$element.val()`.');
          var e = [];
          return this.dataAdapter.current(function (t) {
            e = t;
          }), e;
        }, o.prototype.val = function (t) {
          if (this.options.get("debug") && window.console && console.warn && console.warn('Select2: The `select2("val")` method has been deprecated and will be removed in later Select2 versions. Use $element.val() instead.'), null == t || 0 === t.length) return this.$element.val();
          var n = t[0];
          e.isArray(n) && (n = e.map(n, function (e) {
            return e.toString();
          })), this.$element.val(n).trigger("input").trigger("change");
        }, o.prototype.destroy = function () {
          this.$container.remove(), this.$element[0].detachEvent && this.$element[0].detachEvent("onpropertychange", this._syncA), null != this._observer ? (this._observer.disconnect(), this._observer = null) : this.$element[0].removeEventListener && (this.$element[0].removeEventListener("DOMAttrModified", this._syncA, !1), this.$element[0].removeEventListener("DOMNodeInserted", this._syncS, !1), this.$element[0].removeEventListener("DOMNodeRemoved", this._syncS, !1)), this._syncA = null, this._syncS = null, this.$element.off(".select2"), this.$element.attr("tabindex", n.GetData(this.$element[0], "old-tabindex")), this.$element.removeClass("select2-hidden-accessible"), this.$element.attr("aria-hidden", "false"), n.RemoveData(this.$element[0]), this.$element.removeData("select2"), this.dataAdapter.destroy(), this.selection.destroy(), this.dropdown.destroy(), this.results.destroy(), this.dataAdapter = null, this.selection = null, this.dropdown = null, this.results = null;
        }, o.prototype.render = function () {
          var t = e('<span class="select2 select2-container"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>');
          return t.attr("dir", this.options.get("dir")), this.$container = t, this.$container.addClass("select2-container--" + this.options.get("theme")), n.StoreData(t[0], "element", this.$element), t;
        }, o;
      }), r.define("select2/compat/utils", ["jquery"], function (e) {
        function t(t, n, r) {
          var o,
              i,
              s = [];
          (o = e.trim(t.attr("class"))) && e((o = "" + o).split(/\s+/)).each(function () {
            0 === this.indexOf("select2-") && s.push(this);
          }), (o = e.trim(n.attr("class"))) && e((o = "" + o).split(/\s+/)).each(function () {
            0 !== this.indexOf("select2-") && null != (i = r(this)) && s.push(i);
          }), t.attr("class", s.join(" "));
        }

        return {
          syncCssClasses: t
        };
      }), r.define("select2/compat/containerCss", ["jquery", "./utils"], function (e, t) {
        function n(e) {
          return null;
        }

        function r() {}

        return r.prototype.render = function (r) {
          var o = r.call(this),
              i = this.options.get("containerCssClass") || "";
          e.isFunction(i) && (i = i(this.$element));
          var s = this.options.get("adaptContainerCssClass");

          if (s = s || n, -1 !== i.indexOf(":all:")) {
            i = i.replace(":all:", "");
            var a = s;

            s = function s(e) {
              var t = a(e);
              return null != t ? t + " " + e : e;
            };
          }

          var l = this.options.get("containerCss") || {};
          return e.isFunction(l) && (l = l(this.$element)), t.syncCssClasses(o, this.$element, s), o.css(l), o.addClass(i), o;
        }, r;
      }), r.define("select2/compat/dropdownCss", ["jquery", "./utils"], function (e, t) {
        function n(e) {
          return null;
        }

        function r() {}

        return r.prototype.render = function (r) {
          var o = r.call(this),
              i = this.options.get("dropdownCssClass") || "";
          e.isFunction(i) && (i = i(this.$element));
          var s = this.options.get("adaptDropdownCssClass");

          if (s = s || n, -1 !== i.indexOf(":all:")) {
            i = i.replace(":all:", "");
            var a = s;

            s = function s(e) {
              var t = a(e);
              return null != t ? t + " " + e : e;
            };
          }

          var l = this.options.get("dropdownCss") || {};
          return e.isFunction(l) && (l = l(this.$element)), t.syncCssClasses(o, this.$element, s), o.css(l), o.addClass(i), o;
        }, r;
      }), r.define("select2/compat/initSelection", ["jquery"], function (e) {
        function t(e, t, n) {
          n.get("debug") && window.console && console.warn && console.warn("Select2: The `initSelection` option has been deprecated in favor of a custom data adapter that overrides the `current` method. This method is now called multiple times instead of a single time when the instance is initialized. Support will be removed for the `initSelection` option in future versions of Select2"), this.initSelection = n.get("initSelection"), this._isInitialized = !1, e.call(this, t, n);
        }

        return t.prototype.current = function (t, n) {
          var r = this;
          this._isInitialized ? t.call(this, n) : this.initSelection.call(null, this.$element, function (t) {
            r._isInitialized = !0, e.isArray(t) || (t = [t]), n(t);
          });
        }, t;
      }), r.define("select2/compat/inputData", ["jquery", "../utils"], function (e, t) {
        function n(e, t, n) {
          this._currentData = [], this._valueSeparator = n.get("valueSeparator") || ",", "hidden" === t.prop("type") && n.get("debug") && console && console.warn && console.warn("Select2: Using a hidden input with Select2 is no longer supported and may stop working in the future. It is recommended to use a `<select>` element instead."), e.call(this, t, n);
        }

        return n.prototype.current = function (t, n) {
          function r(t, n) {
            var o = [];
            return t.selected || -1 !== e.inArray(t.id, n) ? (t.selected = !0, o.push(t)) : t.selected = !1, t.children && o.push.apply(o, r(t.children, n)), o;
          }

          for (var o = [], i = 0; i < this._currentData.length; i++) {
            var s = this._currentData[i];
            o.push.apply(o, r(s, this.$element.val().split(this._valueSeparator)));
          }

          n(o);
        }, n.prototype.select = function (t, n) {
          if (this.options.get("multiple")) {
            var r = this.$element.val();
            r += this._valueSeparator + n.id, this.$element.val(r), this.$element.trigger("input").trigger("change");
          } else this.current(function (t) {
            e.map(t, function (e) {
              e.selected = !1;
            });
          }), this.$element.val(n.id), this.$element.trigger("input").trigger("change");
        }, n.prototype.unselect = function (e, t) {
          var n = this;
          t.selected = !1, this.current(function (e) {
            for (var r = [], o = 0; o < e.length; o++) {
              var i = e[o];
              t.id != i.id && r.push(i.id);
            }

            n.$element.val(r.join(n._valueSeparator)), n.$element.trigger("input").trigger("change");
          });
        }, n.prototype.query = function (e, t, n) {
          for (var r = [], o = 0; o < this._currentData.length; o++) {
            var i = this._currentData[o],
                s = this.matches(t, i);
            null !== s && r.push(s);
          }

          n({
            results: r
          });
        }, n.prototype.addOptions = function (n, r) {
          var o = e.map(r, function (e) {
            return t.GetData(e[0], "data");
          });

          this._currentData.push.apply(this._currentData, o);
        }, n;
      }), r.define("select2/compat/matcher", ["jquery"], function (e) {
        function t(t) {
          function n(n, r) {
            var o = e.extend(!0, {}, r);
            if (null == n.term || "" === e.trim(n.term)) return o;

            if (r.children) {
              for (var i = r.children.length - 1; i >= 0; i--) {
                var s = r.children[i];
                t(n.term, s.text, s) || o.children.splice(i, 1);
              }

              if (o.children.length > 0) return o;
            }

            return t(n.term, r.text, r) ? o : null;
          }

          return n;
        }

        return t;
      }), r.define("select2/compat/query", [], function () {
        function e(e, t, n) {
          n.get("debug") && window.console && console.warn && console.warn("Select2: The `query` option has been deprecated in favor of a custom data adapter that overrides the `query` method. Support will be removed for the `query` option in future versions of Select2."), e.call(this, t, n);
        }

        return e.prototype.query = function (e, t, n) {
          t.callback = n, this.options.get("query").call(null, t);
        }, e;
      }), r.define("select2/dropdown/attachContainer", [], function () {
        function e(e, t, n) {
          e.call(this, t, n);
        }

        return e.prototype.position = function (e, t, n) {
          n.find(".dropdown-wrapper").append(t), t.addClass("select2-dropdown--below"), n.addClass("select2-container--below");
        }, e;
      }), r.define("select2/dropdown/stopPropagation", [], function () {
        function e() {}

        return e.prototype.bind = function (e, t, n) {
          e.call(this, t, n);
          var r = ["blur", "change", "click", "dblclick", "focus", "focusin", "focusout", "input", "keydown", "keyup", "keypress", "mousedown", "mouseenter", "mouseleave", "mousemove", "mouseover", "mouseup", "search", "touchend", "touchstart"];
          this.$dropdown.on(r.join(" "), function (e) {
            e.stopPropagation();
          });
        }, e;
      }), r.define("select2/selection/stopPropagation", [], function () {
        function e() {}

        return e.prototype.bind = function (e, t, n) {
          e.call(this, t, n);
          var r = ["blur", "change", "click", "dblclick", "focus", "focusin", "focusout", "input", "keydown", "keyup", "keypress", "mousedown", "mouseenter", "mouseleave", "mousemove", "mouseover", "mouseup", "search", "touchend", "touchstart"];
          this.$selection.on(r.join(" "), function (e) {
            e.stopPropagation();
          });
        }, e;
      }), function (o) {
        "function" === typeof r.define && r.define.amd ? r.define("jquery-mousewheel", ["jquery"], o) : "object" === s(t) ? e.exports = o : o(n);
      }(function (e) {
        var t,
            n,
            r = ["wheel", "mousewheel", "DOMMouseScroll", "MozMousePixelScroll"],
            o = "onwheel" in document || document.documentMode >= 9 ? ["wheel"] : ["mousewheel", "DomMouseScroll", "MozMousePixelScroll"],
            i = Array.prototype.slice;
        if (e.event.fixHooks) for (var s = r.length; s;) {
          e.event.fixHooks[r[--s]] = e.event.mouseHooks;
        }
        var a = e.event.special.mousewheel = {
          version: "3.1.12",
          setup: function setup() {
            if (this.addEventListener) for (var t = o.length; t;) {
              this.addEventListener(o[--t], l, !1);
            } else this.onmousewheel = l;
            e.data(this, "mousewheel-line-height", a.getLineHeight(this)), e.data(this, "mousewheel-page-height", a.getPageHeight(this));
          },
          teardown: function teardown() {
            if (this.removeEventListener) for (var t = o.length; t;) {
              this.removeEventListener(o[--t], l, !1);
            } else this.onmousewheel = null;
            e.removeData(this, "mousewheel-line-height"), e.removeData(this, "mousewheel-page-height");
          },
          getLineHeight: function getLineHeight(t) {
            var n = e(t),
                r = n["offsetParent" in e.fn ? "offsetParent" : "parent"]();
            return r.length || (r = e("body")), parseInt(r.css("fontSize"), 10) || parseInt(n.css("fontSize"), 10) || 16;
          },
          getPageHeight: function getPageHeight(t) {
            return e(t).height();
          },
          settings: {
            adjustOldDeltas: !0,
            normalizeOffset: !0
          }
        };

        function l(r) {
          var o = r || window.event,
              s = i.call(arguments, 1),
              l = 0,
              p = 0,
              h = 0,
              d = 0,
              f = 0,
              m = 0;

          if ((r = e.event.fix(o)).type = "mousewheel", "detail" in o && (h = -1 * o.detail), "wheelDelta" in o && (h = o.wheelDelta), "wheelDeltaY" in o && (h = o.wheelDeltaY), "wheelDeltaX" in o && (p = -1 * o.wheelDeltaX), "axis" in o && o.axis === o.HORIZONTAL_AXIS && (p = -1 * h, h = 0), l = 0 === h ? p : h, "deltaY" in o && (l = h = -1 * o.deltaY), "deltaX" in o && (p = o.deltaX, 0 === h && (l = -1 * p)), 0 !== h || 0 !== p) {
            if (1 === o.deltaMode) {
              var g = e.data(this, "mousewheel-line-height");
              l *= g, h *= g, p *= g;
            } else if (2 === o.deltaMode) {
              var y = e.data(this, "mousewheel-page-height");
              l *= y, h *= y, p *= y;
            }

            if (d = Math.max(Math.abs(h), Math.abs(p)), (!n || d < n) && (n = d, u(o, d) && (n /= 40)), u(o, d) && (l /= 40, p /= 40, h /= 40), l = Math[l >= 1 ? "floor" : "ceil"](l / n), p = Math[p >= 1 ? "floor" : "ceil"](p / n), h = Math[h >= 1 ? "floor" : "ceil"](h / n), a.settings.normalizeOffset && this.getBoundingClientRect) {
              var v = this.getBoundingClientRect();
              f = r.clientX - v.left, m = r.clientY - v.top;
            }

            return r.deltaX = p, r.deltaY = h, r.deltaFactor = n, r.offsetX = f, r.offsetY = m, r.deltaMode = 0, s.unshift(r, l, p, h), t && clearTimeout(t), t = setTimeout(c, 200), (e.event.dispatch || e.event.handle).apply(this, s);
          }
        }

        function c() {
          n = null;
        }

        function u(e, t) {
          return a.settings.adjustOldDeltas && "mousewheel" === e.type && t % 120 === 0;
        }

        e.fn.extend({
          mousewheel: function mousewheel(e) {
            return e ? this.bind("mousewheel", e) : this.trigger("mousewheel");
          },
          unmousewheel: function unmousewheel(e) {
            return this.unbind("mousewheel", e);
          }
        });
      }), r.define("jquery.select2", ["jquery", "jquery-mousewheel", "./select2/core", "./select2/defaults", "./select2/utils"], function (e, t, n, r, o) {
        if (null == e.fn.select2) {
          var i = ["open", "close", "destroy"];

          e.fn.select2 = function (t) {
            if ("object" === s(t = t || {})) return this.each(function () {
              var r = e.extend(!0, {}, t);
              new n(e(this), r);
            }), this;

            if ("string" === typeof t) {
              var r,
                  a = Array.prototype.slice.call(arguments, 1);
              return this.each(function () {
                var e = o.GetData(this, "select2");
                null == e && window.console && console.error && console.error("The select2('" + t + "') method was called on an element that is not using Select2."), r = e[t].apply(e, a);
              }), e.inArray(t, i) > -1 ? this : r;
            }

            throw new Error("Invalid arguments for Select2: " + t);
          };
        }

        return null == e.fn.select2.defaults && (e.fn.select2.defaults = r), n;
      }), {
        define: r.define,
        require: r.require
      };
    }(),
        o = r.require("jquery.select2");

    return n.fn.select2.amd = r, o;
  }) ? r.apply(t, o) : r) || (e.exports = i);
},, function (e, t, n) {
  var r, o, i, s;

  function a(e) {
    return (a = "function" === typeof Symbol && "symbol" === _typeof(Symbol.iterator) ? function (e) {
      return _typeof(e);
    } : function (e) {
      return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : _typeof(e);
    })(e);
  }

  s = function s(e, t) {
    "use strict";

    function n(e) {
      return e && "object" === a(e) && "default" in e ? e : {
        "default": e
      };
    }

    var r = n(e),
        o = n(t);

    function i(e, t) {
      for (var n = 0; n < t.length; n++) {
        var r = t[n];
        r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r);
      }
    }

    function s() {
      return (s = Object.assign || function (e) {
        for (var t = 1; t < arguments.length; t++) {
          var n = arguments[t];

          for (var r in n) {
            Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r]);
          }
        }

        return e;
      }).apply(this, arguments);
    }

    var l = "collapse",
        c = "bs.collapse",
        u = r["default"].fn[l],
        p = {
      toggle: !0,
      parent: ""
    },
        h = {
      toggle: "boolean",
      parent: "(string|element)"
    },
        d = "show",
        f = "collapse",
        m = "collapsing",
        g = "collapsed",
        y = "width",
        v = '[data-toggle="collapse"]',
        b = function () {
      function e(e, t) {
        this._isTransitioning = !1, this._element = e, this._config = this._getConfig(t), this._triggerArray = [].slice.call(document.querySelectorAll('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]'));

        for (var n = [].slice.call(document.querySelectorAll(v)), r = 0, i = n.length; r < i; r++) {
          var s = n[r],
              a = o["default"].getSelectorFromElement(s),
              l = [].slice.call(document.querySelectorAll(a)).filter(function (t) {
            return t === e;
          });
          null !== a && l.length > 0 && (this._selector = a, this._triggerArray.push(s));
        }

        this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle();
      }

      var t,
          n,
          u,
          b = e.prototype;
      return b.toggle = function () {
        r["default"](this._element).hasClass(d) ? this.hide() : this.show();
      }, b.show = function () {
        var t,
            n,
            i = this;

        if (!this._isTransitioning && !r["default"](this._element).hasClass(d) && (this._parent && 0 === (t = [].slice.call(this._parent.querySelectorAll(".show, .collapsing")).filter(function (e) {
          return "string" === typeof i._config.parent ? e.getAttribute("data-parent") === i._config.parent : e.classList.contains(f);
        })).length && (t = null), !(t && (n = r["default"](t).not(this._selector).data(c)) && n._isTransitioning))) {
          var s = r["default"].Event("show.bs.collapse");

          if (r["default"](this._element).trigger(s), !s.isDefaultPrevented()) {
            t && (e._jQueryInterface.call(r["default"](t).not(this._selector), "hide"), n || r["default"](t).data(c, null));

            var a = this._getDimension();

            r["default"](this._element).removeClass(f).addClass(m), this._element.style[a] = 0, this._triggerArray.length && r["default"](this._triggerArray).removeClass(g).attr("aria-expanded", !0), this.setTransitioning(!0);
            var l = "scroll" + (a[0].toUpperCase() + a.slice(1)),
                u = o["default"].getTransitionDurationFromElement(this._element);
            r["default"](this._element).one(o["default"].TRANSITION_END, function () {
              r["default"](i._element).removeClass(m).addClass("collapse show"), i._element.style[a] = "", i.setTransitioning(!1), r["default"](i._element).trigger("shown.bs.collapse");
            }).emulateTransitionEnd(u), this._element.style[a] = this._element[l] + "px";
          }
        }
      }, b.hide = function () {
        var e = this;

        if (!this._isTransitioning && r["default"](this._element).hasClass(d)) {
          var t = r["default"].Event("hide.bs.collapse");

          if (r["default"](this._element).trigger(t), !t.isDefaultPrevented()) {
            var n = this._getDimension();

            this._element.style[n] = this._element.getBoundingClientRect()[n] + "px", o["default"].reflow(this._element), r["default"](this._element).addClass(m).removeClass("collapse show");
            var i = this._triggerArray.length;
            if (i > 0) for (var s = 0; s < i; s++) {
              var a = this._triggerArray[s],
                  l = o["default"].getSelectorFromElement(a);
              null !== l && (r["default"]([].slice.call(document.querySelectorAll(l))).hasClass(d) || r["default"](a).addClass(g).attr("aria-expanded", !1));
            }
            this.setTransitioning(!0), this._element.style[n] = "";
            var c = o["default"].getTransitionDurationFromElement(this._element);
            r["default"](this._element).one(o["default"].TRANSITION_END, function () {
              e.setTransitioning(!1), r["default"](e._element).removeClass(m).addClass(f).trigger("hidden.bs.collapse");
            }).emulateTransitionEnd(c);
          }
        }
      }, b.setTransitioning = function (e) {
        this._isTransitioning = e;
      }, b.dispose = function () {
        r["default"].removeData(this._element, c), this._config = null, this._parent = null, this._element = null, this._triggerArray = null, this._isTransitioning = null;
      }, b._getConfig = function (e) {
        return (e = s({}, p, e)).toggle = Boolean(e.toggle), o["default"].typeCheckConfig(l, e, h), e;
      }, b._getDimension = function () {
        return r["default"](this._element).hasClass(y) ? y : "height";
      }, b._getParent = function () {
        var t,
            n = this;
        o["default"].isElement(this._config.parent) ? (t = this._config.parent, "undefined" !== typeof this._config.parent.jquery && (t = this._config.parent[0])) : t = document.querySelector(this._config.parent);
        var i = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]',
            s = [].slice.call(t.querySelectorAll(i));
        return r["default"](s).each(function (t, r) {
          n._addAriaAndCollapsedClass(e._getTargetFromElement(r), [r]);
        }), t;
      }, b._addAriaAndCollapsedClass = function (e, t) {
        var n = r["default"](e).hasClass(d);
        t.length && r["default"](t).toggleClass(g, !n).attr("aria-expanded", n);
      }, e._getTargetFromElement = function (e) {
        var t = o["default"].getSelectorFromElement(e);
        return t ? document.querySelector(t) : null;
      }, e._jQueryInterface = function (t) {
        return this.each(function () {
          var n = r["default"](this),
              o = n.data(c),
              i = s({}, p, n.data(), "object" === a(t) && t ? t : {});

          if (!o && i.toggle && "string" === typeof t && /show|hide/.test(t) && (i.toggle = !1), o || (o = new e(this, i), n.data(c, o)), "string" === typeof t) {
            if ("undefined" === typeof o[t]) throw new TypeError('No method named "' + t + '"');
            o[t]();
          }
        });
      }, t = e, u = [{
        key: "VERSION",
        get: function get() {
          return "4.6.0";
        }
      }, {
        key: "Default",
        get: function get() {
          return p;
        }
      }], (n = null) && i(t.prototype, n), u && i(t, u), e;
    }();

    return r["default"](document).on("click.bs.collapse.data-api", v, function (e) {
      "A" === e.currentTarget.tagName && e.preventDefault();
      var t = r["default"](this),
          n = o["default"].getSelectorFromElement(this),
          i = [].slice.call(document.querySelectorAll(n));
      r["default"](i).each(function () {
        var e = r["default"](this),
            n = e.data(c) ? "toggle" : t.data();

        b._jQueryInterface.call(e, n);
      });
    }), r["default"].fn[l] = b._jQueryInterface, r["default"].fn[l].Constructor = b, r["default"].fn[l].noConflict = function () {
      return r["default"].fn[l] = u, b._jQueryInterface;
    }, b;
  }, "object" === a(t) && "undefined" !== typeof e ? e.exports = s(n(0), n(17)) : (o = [n(0), n(17)], void 0 === (i = "function" === typeof (r = s) ? r.apply(t, o) : r) || (e.exports = i));
},,,,,,,,,,,,,,, function (e, t) {
  e.exports = function () {
    var e = document.getSelection();
    if (!e.rangeCount) return function () {};

    for (var t = document.activeElement, n = [], r = 0; r < e.rangeCount; r++) {
      n.push(e.getRangeAt(r));
    }

    switch (t.tagName.toUpperCase()) {
      case "INPUT":
      case "TEXTAREA":
        t.blur();
        break;

      default:
        t = null;
    }

    return e.removeAllRanges(), function () {
      "Caret" === e.type && e.removeAllRanges(), e.rangeCount || n.forEach(function (t) {
        e.addRange(t);
      }), t && t.focus();
    };
  };
},,,,,,,,,,,, function (e, t, n) {
  var r = n(19);

  e.exports = function () {
    return r.Date.now();
  };
}, function (e, t, n) {
  (function (t) {
    function n(e) {
      return (n = "function" === typeof Symbol && "symbol" === _typeof(Symbol.iterator) ? function (e) {
        return _typeof(e);
      } : function (e) {
        return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : _typeof(e);
      })(e);
    }

    var r = "object" == ("undefined" === typeof t ? "undefined" : n(t)) && t && t.Object === Object && t;
    e.exports = r;
  }).call(this, n(11));
}, function (e, t, n) {
  var r = n(59),
      o = n(18),
      i = n(61),
      s = /^[-+]0x[0-9a-f]+$/i,
      a = /^0b[01]+$/i,
      l = /^0o[0-7]+$/i,
      c = parseInt;

  e.exports = function (e) {
    if ("number" == typeof e) return e;
    if (i(e)) return NaN;

    if (o(e)) {
      var t = "function" == typeof e.valueOf ? e.valueOf() : e;
      e = o(t) ? t + "" : t;
    }

    if ("string" != typeof e) return 0 === e ? e : +e;
    e = r(e);
    var n = a.test(e);
    return n || l.test(e) ? c(e.slice(2), n ? 2 : 8) : s.test(e) ? NaN : +e;
  };
}, function (e, t, n) {
  var r = n(60),
      o = /^\s+/;

  e.exports = function (e) {
    return e ? e.slice(0, r(e) + 1).replace(o, "") : e;
  };
}, function (e, t) {
  var n = /\s/;

  e.exports = function (e) {
    for (var t = e.length; t-- && n.test(e.charAt(t));) {
      ;
    }

    return t;
  };
}, function (e, t, n) {
  function r(e) {
    return (r = "function" === typeof Symbol && "symbol" === _typeof(Symbol.iterator) ? function (e) {
      return _typeof(e);
    } : function (e) {
      return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : _typeof(e);
    })(e);
  }

  var o = n(62),
      i = n(65);

  e.exports = function (e) {
    return "symbol" == r(e) || i(e) && "[object Symbol]" == o(e);
  };
}, function (e, t, n) {
  var r = n(20),
      o = n(63),
      i = n(64),
      s = r ? r.toStringTag : void 0;

  e.exports = function (e) {
    return null == e ? void 0 === e ? "[object Undefined]" : "[object Null]" : s && s in Object(e) ? o(e) : i(e);
  };
}, function (e, t, n) {
  var r = n(20),
      o = Object.prototype,
      i = o.hasOwnProperty,
      s = o.toString,
      a = r ? r.toStringTag : void 0;

  e.exports = function (e) {
    var t = i.call(e, a),
        n = e[a];

    try {
      e[a] = void 0;
      var r = !0;
    } catch (l) {}

    var o = s.call(e);
    return r && (t ? e[a] = n : delete e[a]), o;
  };
}, function (e, t) {
  var n = Object.prototype.toString;

  e.exports = function (e) {
    return n.call(e);
  };
}, function (e, t) {
  function n(e) {
    return (n = "function" === typeof Symbol && "symbol" === _typeof(Symbol.iterator) ? function (e) {
      return _typeof(e);
    } : function (e) {
      return e && "function" === typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : _typeof(e);
    })(e);
  }

  e.exports = function (e) {
    return null != e && "object" == n(e);
  };
}]]);
/******/ })()
;