! function(t) {
    function e(n) { if (i[n]) return i[n].exports; var o = i[n] = { exports: {}, id: n, loaded: !1 }; return t[n].call(o.exports, o, o.exports, e), o.loaded = !0, o.exports }
    var i = {};
    return e.m = t, e.c = i, e.p = "", e(0)
}([function(t, e, i) { t.exports = i(13) }, , , , , , , , , , , , , function(t, e, i) {
    (function(t) {
        "use strict";

        function e(t) { return t && t.__esModule ? t : { default: t } }
        var n = i(14),
            o = e(n);
        i(15), i(17), i(18), i(19), i(20), i(21), i(22), i(23), i(24), i(92), i(93), i(94), i(95), i(96), i(98), i(99), i(100), i(102), i(103), i(104), i(105), i(106), i(107), i(108), i(109), i(110), i(111), i(112), i(113), i(114), i(115), i(116), i(117), i(118), jQuery(function() { return t.Flatsome.attach(document) }), t.cookie = o.default
    }).call(e, function() { return this }())
}, function(t, e, i) {
    (function(e) { /*! cookie function. get, set, or forget a cookie. [c]2014 @scottjehl, Filament Group, Inc. Licensed MIT */
        ! function(e) {
            var i = function(t, i, n) {
                if (void 0 === i) {
                    var o = "; " + e.document.cookie,
                        r = o.split("; " + t + "=");
                    return 2 === r.length ? r.pop().split(";").shift() : null
                }
                i === !1 && (n = -1);
                var s = "";
                if (n) {
                    var a = new Date;
                    a.setTime(a.getTime() + 24 * n * 60 * 60 * 1e3), s = "; expires=" + a.toGMTString()
                }
                e.document.cookie = t + "=" + i + s + "; path=/"
            };
            t.exports = i
        }("undefined" != typeof e ? e : this)
    }).call(e, function() { return this }())
}, function(t, e, i) {
    var n, o, r, s, n, a, r, l, n, c, n, u, r, d, n, h, n, p, n, f, n, m, n, g, n, v, n, y, n, b, n, w, n, x, n, S, n, r, C, r, n, o, n, k, n, o;
    /*!
     * Flickity PACKAGED v2.0.10
     * Touch, responsive, flickable carousels
     *
     * Licensed GPLv3 for open source use
     * or Flickity Commercial License for commercial use
     *
     * http://flickity.metafizzy.co
     * Copyright 2017 Metafizzy
     */
    ! function(r, s) { n = [i(16)], o = function(t) { return s(r, t) }.apply(e, n), !(void 0 !== o && (t.exports = o)) }(window, function(t, e) {
        "use strict";

        function i(i, r, a) {
            function l(t, e, n) {
                var o, r = "$()." + i + '("' + e + '")';
                return t.each(function(t, l) {
                    var c = a.data(l, i);
                    if (!c) return void s(i + " not initialized. Cannot call methods, i.e. " + r);
                    var u = c[e];
                    if (!u || "_" == e.charAt(0)) return void s(r + " is not a valid method");
                    var d = u.apply(c, n);
                    o = void 0 === o ? d : o
                }), void 0 !== o ? o : t
            }

            function c(t, e) {
                t.each(function(t, n) {
                    var o = a.data(n, i);
                    o ? (o.option(e), o._init()) : (o = new r(n, e), a.data(n, i, o))
                })
            }
            a = a || e || t.jQuery, a && (r.prototype.option || (r.prototype.option = function(t) { a.isPlainObject(t) && (this.options = a.extend(!0, this.options, t)) }), a.fn[i] = function(t) { if ("string" == typeof t) { var e = o.call(arguments, 1); return l(this, t, e) } return c(this, t), this }, n(a))
        }

        function n(t) {!t || t && t.bridget || (t.bridget = i) }
        var o = Array.prototype.slice,
            r = t.console,
            s = "undefined" == typeof r ? function() {} : function(t) { r.error(t) };
        return n(e || t.jQuery), i
    }),
    function(n, o) { r = o, !(s = "function" == typeof r ? r.call(e, i, e, t) : r) }("undefined" != typeof window ? window : this, function() {
        function t() {}
        var e = t.prototype;
        return e.on = function(t, e) {
            if (t && e) {
                var i = this._events = this._events || {},
                    n = i[t] = i[t] || [];
                return n.indexOf(e) == -1 && n.push(e), this
            }
        }, e.once = function(t, e) {
            if (t && e) {
                this.on(t, e);
                var i = this._onceEvents = this._onceEvents || {},
                    n = i[t] = i[t] || {};
                return n[e] = !0, this
            }
        }, e.off = function(t, e) { var i = this._events && this._events[t]; if (i && i.length) { var n = i.indexOf(e); return n != -1 && i.splice(n, 1), this } }, e.emitEvent = function(t, e) {
            var i = this._events && this._events[t];
            if (i && i.length) {
                i = i.slice(0), e = e || [];
                for (var n = this._onceEvents && this._onceEvents[t], o = 0; o < i.length; o++) {
                    var r = i[o],
                        s = n && n[r];
                    s && (this.off(t, r), delete n[r]), r.apply(this, e)
                }
                return this
            }
        }, e.allOff = function() { delete this._events, delete this._onceEvents }, t
    }),
    /*!
     * getSize v2.0.2
     * measure size of elements
     * MIT license
     */
    function(t, i) {
        "use strict";
        n = [], !(a = function() { return i() }.apply(e, n))
    }(window, function() {
        "use strict";

        function t(t) {
            var e = parseFloat(t),
                i = t.indexOf("%") == -1 && !isNaN(e);
            return i && e
        }

        function e() {}

        function i() {
            for (var t = { width: 0, height: 0, innerWidth: 0, innerHeight: 0, outerWidth: 0, outerHeight: 0 }, e = 0; e < c; e++) {
                var i = l[e];
                t[i] = 0
            }
            return t
        }

        function n(t) { var e = getComputedStyle(t); return e || a("Style returned " + e + ". Are you running this code in a hidden iframe on Firefox? See http://bit.ly/getsizebug1"), e }

        function o() {
            if (!u) {
                u = !0;
                var e = document.createElement("div");
                e.style.width = "200px", e.style.padding = "1px 2px 3px 4px", e.style.borderStyle = "solid", e.style.borderWidth = "1px 2px 3px 4px", e.style.boxSizing = "border-box";
                var i = document.body || document.documentElement;
                i.appendChild(e);
                var o = n(e);
                r.isBoxSizeOuter = s = 200 == t(o.width), i.removeChild(e)
            }
        }

        function r(e) {
            if (o(), "string" == typeof e && (e = document.querySelector(e)), e && "object" == typeof e && e.nodeType) {
                var r = n(e);
                if ("none" == r.display) return i();
                var a = {};
                a.width = e.offsetWidth, a.height = e.offsetHeight;
                for (var u = a.isBorderBox = "border-box" == r.boxSizing, d = 0; d < c; d++) {
                    var h = l[d],
                        p = r[h],
                        f = parseFloat(p);
                    a[h] = isNaN(f) ? 0 : f
                }
                var m = a.paddingLeft + a.paddingRight,
                    g = a.paddingTop + a.paddingBottom,
                    v = a.marginLeft + a.marginRight,
                    y = a.marginTop + a.marginBottom,
                    b = a.borderLeftWidth + a.borderRightWidth,
                    w = a.borderTopWidth + a.borderBottomWidth,
                    x = u && s,
                    S = t(r.width);
                S !== !1 && (a.width = S + (x ? 0 : m + b));
                var C = t(r.height);
                return C !== !1 && (a.height = C + (x ? 0 : g + w)), a.innerWidth = a.width - (m + b), a.innerHeight = a.height - (g + w), a.outerWidth = a.width + v, a.outerHeight = a.height + y, a
            }
        }
        var s, a = "undefined" == typeof console ? e : function(t) { console.error(t) },
            l = ["paddingLeft", "paddingRight", "paddingTop", "paddingBottom", "marginLeft", "marginRight", "marginTop", "marginBottom", "borderLeftWidth", "borderRightWidth", "borderTopWidth", "borderBottomWidth"],
            c = l.length,
            u = !1;
        return r
    }),
    function(n, o) {
        "use strict";
        r = o, !(l = "function" == typeof r ? r.call(e, i, e, t) : r)
    }(window, function() {
        "use strict";
        var t = function() {
            var t = window.Element.prototype;
            if (t.matches) return "matches";
            if (t.matchesSelector) return "matchesSelector";
            for (var e = ["webkit", "moz", "ms", "o"], i = 0; i < e.length; i++) {
                var n = e[i],
                    o = n + "MatchesSelector";
                if (t[o]) return o
            }
        }();
        return function(e, i) { return e[t](i) }
    }),
    function(t, i) { n = [l], !(c = function(e) { return i(t, e) }.apply(e, n)) }(window, function(t, e) {
        var i = {};
        i.extend = function(t, e) { for (var i in e) t[i] = e[i]; return t }, i.modulo = function(t, e) { return (t % e + e) % e }, i.makeArray = function(t) {
            var e = [];
            if (Array.isArray(t)) e = t;
            else if (t && "object" == typeof t && "number" == typeof t.length)
                for (var i = 0; i < t.length; i++) e.push(t[i]);
            else e.push(t);
            return e
        }, i.removeFrom = function(t, e) {
            var i = t.indexOf(e);
            i != -1 && t.splice(i, 1)
        }, i.getParent = function(t, i) {
            for (; t.parentNode && t != document.body;)
                if (t = t.parentNode, e(t, i)) return t
        }, i.getQueryElement = function(t) { return "string" == typeof t ? document.querySelector(t) : t }, i.handleEvent = function(t) {
            var e = "on" + t.type;
            this[e] && this[e](t)
        }, i.filterFindElements = function(t, n) {
            t = i.makeArray(t);
            var o = [];
            return t.forEach(function(t) {
                if (t instanceof HTMLElement) {
                    if (!n) return void o.push(t);
                    e(t, n) && o.push(t);
                    for (var i = t.querySelectorAll(n), r = 0; r < i.length; r++) o.push(i[r])
                }
            }), o
        }, i.debounceMethod = function(t, e, i) {
            var n = t.prototype[e],
                o = e + "Timeout";
            t.prototype[e] = function() {
                var t = this[o];
                t && clearTimeout(t);
                var e = arguments,
                    r = this;
                this[o] = setTimeout(function() { n.apply(r, e), delete r[o] }, i || 100)
            }
        }, i.docReady = function(t) { var e = document.readyState; "complete" == e || "interactive" == e ? setTimeout(t) : document.addEventListener("DOMContentLoaded", t) }, i.toDashed = function(t) { return t.replace(/(.)([A-Z])/g, function(t, e, i) { return e + "-" + i }).toLowerCase() };
        var n = t.console;
        return i.htmlInit = function(e, o) {
            i.docReady(function() {
                var r = i.toDashed(o),
                    s = "data-" + r,
                    a = document.querySelectorAll("[" + s + "]"),
                    l = document.querySelectorAll(".js-" + r),
                    c = i.makeArray(a).concat(i.makeArray(l)),
                    u = s + "-options",
                    d = t.jQuery;
                c.forEach(function(t) {
                    var i, r = t.getAttribute(s) || t.getAttribute(u);
                    try { i = r && JSON.parse(r) } catch (e) { return void(n && n.error("Error parsing " + s + " on " + t.className + ": " + e)) }
                    var a = new e(t, i);
                    d && d.data(t, o, a)
                })
            })
        }, i
    }),
    function(t, i) { n = [a], !(u = function(e) { return i(t, e) }.apply(e, n)) }(window, function(t, e) {
        function i(t, e) { this.element = t, this.parent = e, this.create() }
        var n = i.prototype;
        return n.create = function() { this.element.style.position = "absolute", this.x = 0, this.shift = 0 }, n.destroy = function() {
            this.element.style.position = "";
            var t = this.parent.originSide;
            this.element.style[t] = ""
        }, n.getSize = function() { this.size = e(this.element) }, n.setPosition = function(t) { this.x = t, this.updateTarget(), this.renderPosition(t) }, n.updateTarget = n.setDefaultTarget = function() {
            var t = "left" == this.parent.originSide ? "marginLeft" : "marginRight";
            this.target = this.x + this.size[t] + this.size.width * this.parent.cellAlign
        }, n.renderPosition = function(t) {
            var e = this.parent.originSide;
            this.element.style[e] = this.parent.getPositionValue(t)
        }, n.wrapShift = function(t) { this.shift = t, this.renderPosition(this.x + this.parent.slideableWidth * t) }, n.remove = function() { this.element.parentNode.removeChild(this.element) }, i
    }),
    function(n, o) { r = o, !(d = "function" == typeof r ? r.call(e, i, e, t) : r) }(window, function() {
        "use strict";

        function t(t) { this.parent = t, this.isOriginLeft = "left" == t.originSide, this.cells = [], this.outerWidth = 0, this.height = 0 }
        var e = t.prototype;
        return e.addCell = function(t) {
            if (this.cells.push(t), this.outerWidth += t.size.outerWidth, this.height = Math.max(t.size.outerHeight, this.height), 1 == this.cells.length) {
                this.x = t.x;
                var e = this.isOriginLeft ? "marginLeft" : "marginRight";
                this.firstMargin = t.size[e]
            }
        }, e.updateTarget = function() {
            var t = this.isOriginLeft ? "marginRight" : "marginLeft",
                e = this.getLastCell(),
                i = e ? e.size[t] : 0,
                n = this.outerWidth - (this.firstMargin + i);
            this.target = this.x + this.firstMargin + n * this.parent.cellAlign
        }, e.getLastCell = function() { return this.cells[this.cells.length - 1] }, e.select = function() { this.changeSelectedClass("add") }, e.unselect = function() { this.changeSelectedClass("remove") }, e.changeSelectedClass = function(t) { this.cells.forEach(function(e) { e.element.classList[t]("is-selected") }) }, e.getCellElements = function() { return this.cells.map(function(t) { return t.element }) }, t
    }),
    function(t, i) { n = [c], !(h = function(e) { return i(t, e) }.apply(e, n)) }(window, function(t, e) {
        var i = t.requestAnimationFrame || t.webkitRequestAnimationFrame,
            n = 0;
        i || (i = function(t) {
            var e = (new Date).getTime(),
                i = Math.max(0, 16 - (e - n)),
                o = setTimeout(t, i);
            return n = e + i, o
        });
        var o = {};
        o.startAnimation = function() { this.isAnimating || (this.isAnimating = !0, this.restingFrames = 0, this.animate()) }, o.animate = function() {
            this.applyDragForce(), this.applySelectedAttraction();
            var t = this.x;
            if (this.integratePhysics(), this.positionSlider(), this.settle(t), this.isAnimating) {
                var e = this;
                i(function() { e.animate() })
            }
        };
        var r = function() { var t = document.documentElement.style; return "string" == typeof t.transform ? "transform" : "WebkitTransform" }();
        return o.positionSlider = function() {
            var t = this.x;
            this.options.wrapAround && this.cells.length > 1 && (t = e.modulo(t, this.slideableWidth), t -= this.slideableWidth, this.shiftWrapCells(t)), t += this.cursorPosition, t = this.options.rightToLeft && r ? -t : t;
            var i = this.getPositionValue(t);
            this.slider.style[r] = this.isAnimating ? "translate3d(" + i + ",0,0)" : "translateX(" + i + ")";
            var n = this.slides[0];
            if (n) {
                var o = -this.x - n.target,
                    s = o / this.slidesWidth;
                this.dispatchEvent("scroll", null, [s, o])
            }
        }, o.positionSliderAtSelected = function() { this.cells.length && (this.x = -this.selectedSlide.target, this.positionSlider()) }, o.getPositionValue = function(t) { return this.options.percentPosition ? .01 * Math.round(t / this.size.innerWidth * 1e4) + "%" : Math.round(t) + "px" }, o.settle = function(t) { this.isPointerDown || Math.round(100 * this.x) != Math.round(100 * t) || this.restingFrames++, this.restingFrames > 2 && (this.isAnimating = !1, delete this.isFreeScrolling, this.positionSlider(), this.dispatchEvent("settle")) }, o.shiftWrapCells = function(t) {
            var e = this.cursorPosition + t;
            this._shiftCells(this.beforeShiftCells, e, -1);
            var i = this.size.innerWidth - (t + this.slideableWidth + this.cursorPosition);
            this._shiftCells(this.afterShiftCells, i, 1)
        }, o._shiftCells = function(t, e, i) {
            for (var n = 0; n < t.length; n++) {
                var o = t[n],
                    r = e > 0 ? i : 0;
                o.wrapShift(r), e -= o.size.outerWidth
            }
        }, o._unshiftCells = function(t) {
            if (t && t.length)
                for (var e = 0; e < t.length; e++) t[e].wrapShift(0)
        }, o.integratePhysics = function() { this.x += this.velocity, this.velocity *= this.getFrictionFactor() }, o.applyForce = function(t) { this.velocity += t }, o.getFrictionFactor = function() { return 1 - this.options[this.isFreeScrolling ? "freeScrollFriction" : "friction"] }, o.getRestingPosition = function() { return this.x + this.velocity / (1 - this.getFrictionFactor()) }, o.applyDragForce = function() {
            if (this.isPointerDown) {
                var t = this.dragX - this.x,
                    e = t - this.velocity;
                this.applyForce(e)
            }
        }, o.applySelectedAttraction = function() {
            if (!this.isPointerDown && !this.isFreeScrolling && this.cells.length) {
                var t = this.selectedSlide.target * -1 - this.x,
                    e = t * this.options.selectedAttraction;
                this.applyForce(e)
            }
        }, o
    }),
    function(t, i) { n = [s, a, c, u, d, h], !(p = function(e, n, o, r, s, a) { return i(t, e, n, o, r, s, a) }.apply(e, n)) }(window, function(t, e, i, n, o, r, s) {
        function a(t, e) { for (t = n.makeArray(t); t.length;) e.appendChild(t.shift()) }

        function l(t, e) {
            var i = n.getQueryElement(t);
            if (!i) return void(d && d.error("Bad element for Flickity: " + (i || t)));
            if (this.element = i, this.element.flickityGUID) { var o = p[this.element.flickityGUID]; return o.option(e), o }
            c && (this.$element = c(this.element)), this.options = n.extend({}, this.constructor.defaults), this.option(e), this._create()
        }
        var c = t.jQuery,
            u = t.getComputedStyle,
            d = t.console,
            h = 0,
            p = {};
        l.defaults = { accessibility: !0, cellAlign: "center", freeScrollFriction: .075, friction: .28, namespaceJQueryEvents: !0, percentPosition: !0, resize: !0, selectedAttraction: .025, setGallerySize: !0 }, l.createMethods = [];
        var f = l.prototype;
        n.extend(f, e.prototype), f._create = function() {
            var e = this.guid = ++h;
            this.element.flickityGUID = e, p[e] = this, this.selectedIndex = 0, this.restingFrames = 0, this.x = 0, this.velocity = 0, this.originSide = this.options.rightToLeft ? "right" : "left", this.viewport = document.createElement("div"), this.viewport.className = "flickity-viewport", this._createSlider(), (this.options.resize || this.options.watchCSS) && t.addEventListener("resize", this), l.createMethods.forEach(function(t) { this[t]() }, this), this.options.watchCSS ? this.watchCSS() : this.activate()
        }, f.option = function(t) { n.extend(this.options, t) }, f.activate = function() {
            if (!this.isActive) {
                this.isActive = !0, this.element.classList.add("flickity-enabled"), this.options.rightToLeft && this.element.classList.add("flickity-rtl"), this.getSize();
                var t = this._filterFindCellElements(this.element.children);
                a(t, this.slider), this.viewport.appendChild(this.slider), this.element.appendChild(this.viewport), this.reloadCells(), this.options.accessibility && (this.element.tabIndex = 0, this.element.addEventListener("keydown", this)), this.emitEvent("activate");
                var e, i = this.options.initialIndex;
                e = this.isInitActivated ? this.selectedIndex : void 0 !== i && this.cells[i] ? i : 0, this.select(e, !1, !0), this.isInitActivated = !0
            }
        }, f._createSlider = function() {
            var t = document.createElement("div");
            t.className = "flickity-slider", t.style[this.originSide] = 0, this.slider = t
        }, f._filterFindCellElements = function(t) { return n.filterFindElements(t, this.options.cellSelector) }, f.reloadCells = function() { this.cells = this._makeCells(this.slider.children), this.positionCells(), this._getWrapShiftCells(), this.setGallerySize() }, f._makeCells = function(t) {
            var e = this._filterFindCellElements(t),
                i = e.map(function(t) { return new o(t, this) }, this);
            return i
        }, f.getLastCell = function() { return this.cells[this.cells.length - 1] }, f.getLastSlide = function() { return this.slides[this.slides.length - 1] }, f.positionCells = function() { this._sizeCells(this.cells), this._positionCells(0) }, f._positionCells = function(t) {
            t = t || 0, this.maxCellHeight = t ? this.maxCellHeight || 0 : 0;
            var e = 0;
            if (t > 0) {
                var i = this.cells[t - 1];
                e = i.x + i.size.outerWidth
            }
            for (var n = this.cells.length, o = t; o < n; o++) {
                var r = this.cells[o];
                r.setPosition(e), e += r.size.outerWidth, this.maxCellHeight = Math.max(r.size.outerHeight, this.maxCellHeight)
            }
            this.slideableWidth = e, this.updateSlides(), this._containSlides(), this.slidesWidth = n ? this.getLastSlide().target - this.slides[0].target : 0
        }, f._sizeCells = function(t) { t.forEach(function(t) { t.getSize() }) }, f.updateSlides = function() {
            if (this.slides = [], this.cells.length) {
                var t = new r(this);
                this.slides.push(t);
                var e = "left" == this.originSide,
                    i = e ? "marginRight" : "marginLeft",
                    n = this._getCanCellFit();
                this.cells.forEach(function(e, o) {
                    if (!t.cells.length) return void t.addCell(e);
                    var s = t.outerWidth - t.firstMargin + (e.size.outerWidth - e.size[i]);
                    n.call(this, o, s) ? t.addCell(e) : (t.updateTarget(), t = new r(this), this.slides.push(t), t.addCell(e))
                }, this), t.updateTarget(), this.updateSelectedSlide()
            }
        }, f._getCanCellFit = function() {
            var t = this.options.groupCells;
            if (!t) return function() { return !1 };
            if ("number" == typeof t) { var e = parseInt(t, 10); return function(t) { return t % e !== 0 } }
            var i = "string" == typeof t && t.match(/^(\d+)%$/),
                n = i ? parseInt(i[1], 10) / 100 : 1;
            return function(t, e) { return e <= (this.size.innerWidth + 1) * n }
        }, f._init = f.reposition = function() { this.positionCells(), this.positionSliderAtSelected() }, f.getSize = function() { this.size = i(this.element), this.setCellAlign(), this.cursorPosition = this.size.innerWidth * this.cellAlign };
        var m = { center: { left: .5, right: .5 }, left: { left: 0, right: 1 }, right: { right: 0, left: 1 } };
        return f.setCellAlign = function() {
            var t = m[this.options.cellAlign];
            this.cellAlign = t ? t[this.originSide] : this.options.cellAlign
        }, f.setGallerySize = function() {
            if (this.options.setGallerySize) {
                var t = this.options.adaptiveHeight && this.selectedSlide ? this.selectedSlide.height : this.maxCellHeight;
                this.viewport.style.height = t + "px"
            }
        }, f._getWrapShiftCells = function() {
            if (this.options.wrapAround) {
                this._unshiftCells(this.beforeShiftCells), this._unshiftCells(this.afterShiftCells);
                var t = this.cursorPosition,
                    e = this.cells.length - 1;
                this.beforeShiftCells = this._getGapCells(t, e, -1), t = this.size.innerWidth - this.cursorPosition, this.afterShiftCells = this._getGapCells(t, 0, 1)
            }
        }, f._getGapCells = function(t, e, i) {
            for (var n = []; t > 0;) {
                var o = this.cells[e];
                if (!o) break;
                n.push(o), e += i, t -= o.size.outerWidth
            }
            return n
        }, f._containSlides = function() {
            if (this.options.contain && !this.options.wrapAround && this.cells.length) {
                var t = this.options.rightToLeft,
                    e = t ? "marginRight" : "marginLeft",
                    i = t ? "marginLeft" : "marginRight",
                    n = this.slideableWidth - this.getLastCell().size[i],
                    o = n < this.size.innerWidth,
                    r = this.cursorPosition + this.cells[0].size[e],
                    s = n - this.size.innerWidth * (1 - this.cellAlign);
                this.slides.forEach(function(t) { o ? t.target = n * this.cellAlign : (t.target = Math.max(t.target, r), t.target = Math.min(t.target, s)) }, this)
            }
        }, f.dispatchEvent = function(t, e, i) {
            var n = e ? [e].concat(i) : i;
            if (this.emitEvent(t, n), c && this.$element) {
                t += this.options.namespaceJQueryEvents ? ".flickity" : "";
                var o = t;
                if (e) {
                    var r = c.Event(e);
                    r.type = t, o = r
                }
                this.$element.trigger(o, i)
            }
        }, f.select = function(t, e, i) { this.isActive && (t = parseInt(t, 10), this._wrapSelect(t), (this.options.wrapAround || e) && (t = n.modulo(t, this.slides.length)), this.slides[t] && (this.selectedIndex = t, this.updateSelectedSlide(), i ? this.positionSliderAtSelected() : this.startAnimation(), this.options.adaptiveHeight && this.setGallerySize(), this.dispatchEvent("select"), this.dispatchEvent("cellSelect"))) }, f._wrapSelect = function(t) {
            var e = this.slides.length,
                i = this.options.wrapAround && e > 1;
            if (!i) return t;
            var o = n.modulo(t, e),
                r = Math.abs(o - this.selectedIndex),
                s = Math.abs(o + e - this.selectedIndex),
                a = Math.abs(o - e - this.selectedIndex);
            !this.isDragSelect && s < r ? t += e : !this.isDragSelect && a < r && (t -= e), t < 0 ? this.x -= this.slideableWidth : t >= e && (this.x += this.slideableWidth)
        }, f.previous = function(t, e) { this.select(this.selectedIndex - 1, t, e) }, f.next = function(t, e) { this.select(this.selectedIndex + 1, t, e) }, f.updateSelectedSlide = function() {
            var t = this.slides[this.selectedIndex];
            t && (this.unselectSelectedSlide(), this.selectedSlide = t, t.select(), this.selectedCells = t.cells, this.selectedElements = t.getCellElements(), this.selectedCell = t.cells[0], this.selectedElement = this.selectedElements[0])
        }, f.unselectSelectedSlide = function() { this.selectedSlide && this.selectedSlide.unselect() }, f.selectCell = function(t, e, i) {
            var n;
            "number" == typeof t ? n = this.cells[t] : ("string" == typeof t && (t = this.element.querySelector(t)), n = this.getCell(t));
            for (var o = 0; n && o < this.slides.length; o++) {
                var r = this.slides[o],
                    s = r.cells.indexOf(n);
                if (s != -1) return void this.select(o, e, i)
            }
        }, f.getCell = function(t) { for (var e = 0; e < this.cells.length; e++) { var i = this.cells[e]; if (i.element == t) return i } }, f.getCells = function(t) {
            t = n.makeArray(t);
            var e = [];
            return t.forEach(function(t) {
                var i = this.getCell(t);
                i && e.push(i)
            }, this), e
        }, f.getCellElements = function() { return this.cells.map(function(t) { return t.element }) }, f.getParentCell = function(t) { var e = this.getCell(t); return e ? e : (t = n.getParent(t, ".flickity-slider > *"), this.getCell(t)) }, f.getAdjacentCellElements = function(t, e) {
            if (!t) return this.selectedSlide.getCellElements();
            e = void 0 === e ? this.selectedIndex : e;
            var i = this.slides.length;
            if (1 + 2 * t >= i) return this.getCellElements();
            for (var o = [], r = e - t; r <= e + t; r++) {
                var s = this.options.wrapAround ? n.modulo(r, i) : r,
                    a = this.slides[s];
                a && (o = o.concat(a.getCellElements()))
            }
            return o
        }, f.uiChange = function() { this.emitEvent("uiChange") }, f.childUIPointerDown = function(t) { this.emitEvent("childUIPointerDown", [t]) }, f.onresize = function() { this.watchCSS(), this.resize() }, n.debounceMethod(l, "onresize", 150), f.resize = function() {
            if (this.isActive) {
                this.getSize(), this.options.wrapAround && (this.x = n.modulo(this.x, this.slideableWidth)), this.positionCells(), this._getWrapShiftCells(), this.setGallerySize(), this.emitEvent("resize");
                var t = this.selectedElements && this.selectedElements[0];
                this.selectCell(t, !1, !0)
            }
        }, f.watchCSS = function() {
            var t = this.options.watchCSS;
            if (t) {
                var e = u(this.element, ":after").content;
                e.indexOf("flickity") != -1 ? this.activate() : this.deactivate()
            }
        }, f.onkeydown = function(t) {
            if (this.options.accessibility && (!document.activeElement || document.activeElement == this.element))
                if (37 == t.keyCode) {
                    var e = this.options.rightToLeft ? "next" : "previous";
                    this.uiChange(), this[e]()
                } else if (39 == t.keyCode) {
                var i = this.options.rightToLeft ? "previous" : "next";
                this.uiChange(), this[i]()
            }
        }, f.deactivate = function() { this.isActive && (this.element.classList.remove("flickity-enabled"), this.element.classList.remove("flickity-rtl"), this.cells.forEach(function(t) { t.destroy() }), this.unselectSelectedSlide(), this.element.removeChild(this.viewport), a(this.slider.children, this.element), this.options.accessibility && (this.element.removeAttribute("tabIndex"), this.element.removeEventListener("keydown", this)), this.isActive = !1, this.emitEvent("deactivate")) }, f.destroy = function() { this.deactivate(), t.removeEventListener("resize", this), this.emitEvent("destroy"), c && this.$element && c.removeData(this.element, "flickity"), delete this.element.flickityGUID, delete p[this.guid] }, n.extend(f, s), l.data = function(t) { t = n.getQueryElement(t); var e = t && t.flickityGUID; return e && p[e] }, n.htmlInit(l, "flickity"), c && c.bridget && c.bridget("flickity", l), l.setJQuery = function(t) { c = t }, l.Cell = o, l
    }),
    /*!
     * Unipointer v2.2.0
     * base class for doing one thing with pointer event
     * MIT license
     */
    function(t, i) { n = [s], !(f = function(e) { return i(t, e) }.apply(e, n)) }(window, function(t, e) {
        function i() {}

        function n() {}
        var o = n.prototype = Object.create(e.prototype);
        o.bindStartEvent = function(t) { this._bindStartEvent(t, !0) }, o.unbindStartEvent = function(t) { this._bindStartEvent(t, !1) }, o._bindStartEvent = function(e, i) {
            i = void 0 === i || !!i;
            var n = i ? "addEventListener" : "removeEventListener";
            t.PointerEvent ? e[n]("pointerdown", this) : (e[n]("mousedown", this), e[n]("touchstart", this))
        }, o.handleEvent = function(t) {
            var e = "on" + t.type;
            this[e] && this[e](t)
        }, o.getTouch = function(t) { for (var e = 0; e < t.length; e++) { var i = t[e]; if (i.identifier == this.pointerIdentifier) return i } }, o.onmousedown = function(t) {
            var e = t.button;
            e && 0 !== e && 1 !== e || this._pointerDown(t, t)
        }, o.ontouchstart = function(t) { this._pointerDown(t, t.changedTouches[0]) }, o.onpointerdown = function(t) { this._pointerDown(t, t) }, o._pointerDown = function(t, e) { this.isPointerDown || (this.isPointerDown = !0, this.pointerIdentifier = void 0 !== e.pointerId ? e.pointerId : e.identifier, this.pointerDown(t, e)) }, o.pointerDown = function(t, e) { this._bindPostStartEvents(t), this.emitEvent("pointerDown", [t, e]) };
        var r = { mousedown: ["mousemove", "mouseup"], touchstart: ["touchmove", "touchend", "touchcancel"], pointerdown: ["pointermove", "pointerup", "pointercancel"] };
        return o._bindPostStartEvents = function(e) {
            if (e) {
                var i = r[e.type];
                i.forEach(function(e) { t.addEventListener(e, this) }, this), this._boundPointerEvents = i
            }
        }, o._unbindPostStartEvents = function() { this._boundPointerEvents && (this._boundPointerEvents.forEach(function(e) { t.removeEventListener(e, this) }, this), delete this._boundPointerEvents) }, o.onmousemove = function(t) { this._pointerMove(t, t) }, o.onpointermove = function(t) { t.pointerId == this.pointerIdentifier && this._pointerMove(t, t) }, o.ontouchmove = function(t) {
            var e = this.getTouch(t.changedTouches);
            e && this._pointerMove(t, e)
        }, o._pointerMove = function(t, e) { this.pointerMove(t, e) }, o.pointerMove = function(t, e) { this.emitEvent("pointerMove", [t, e]) }, o.onmouseup = function(t) { this._pointerUp(t, t) }, o.onpointerup = function(t) { t.pointerId == this.pointerIdentifier && this._pointerUp(t, t) }, o.ontouchend = function(t) {
            var e = this.getTouch(t.changedTouches);
            e && this._pointerUp(t, e)
        }, o._pointerUp = function(t, e) { this._pointerDone(), this.pointerUp(t, e) }, o.pointerUp = function(t, e) { this.emitEvent("pointerUp", [t, e]) }, o._pointerDone = function() { this.isPointerDown = !1, delete this.pointerIdentifier, this._unbindPostStartEvents(), this.pointerDone() }, o.pointerDone = i, o.onpointercancel = function(t) { t.pointerId == this.pointerIdentifier && this._pointerCancel(t, t) }, o.ontouchcancel = function(t) {
            var e = this.getTouch(t.changedTouches);
            e && this._pointerCancel(t, e)
        }, o._pointerCancel = function(t, e) { this._pointerDone(), this.pointerCancel(t, e) }, o.pointerCancel = function(t, e) { this.emitEvent("pointerCancel", [t, e]) }, n.getPointerPoint = function(t) { return { x: t.pageX, y: t.pageY } }, n
    }),
    /*!
     * Unidragger v2.2.3
     * Draggable base class
     * MIT license
     */
    function(t, i) { n = [f], !(m = function(e) { return i(t, e) }.apply(e, n)) }(window, function(t, e) {
        function i() {}
        var n = i.prototype = Object.create(e.prototype);
        return n.bindHandles = function() { this._bindHandles(!0) }, n.unbindHandles = function() { this._bindHandles(!1) }, n._bindHandles = function(e) {
            e = void 0 === e || !!e;
            for (var i = e ? "addEventListener" : "removeEventListener", n = 0; n < this.handles.length; n++) {
                var o = this.handles[n];
                this._bindStartEvent(o, e), o[i]("click", this), t.PointerEvent && (o.style.touchAction = e ? this._touchActionValue : "")
            }
        }, n._touchActionValue = "none", n.pointerDown = function(t, e) {
            if ("INPUT" == t.target.nodeName && "range" == t.target.type) return this.isPointerDown = !1, void delete this.pointerIdentifier;
            this._dragPointerDown(t, e);
            var i = document.activeElement;
            i && i.blur && i.blur(), this._bindPostStartEvents(t), this.emitEvent("pointerDown", [t, e])
        }, n._dragPointerDown = function(t, i) {
            this.pointerDownPoint = e.getPointerPoint(i);
            var n = this.canPreventDefaultOnPointerDown(t, i);
            n && t.preventDefault()
        }, n.canPreventDefaultOnPointerDown = function(t) { return "SELECT" != t.target.nodeName }, n.pointerMove = function(t, e) {
            var i = this._dragPointerMove(t, e);
            this.emitEvent("pointerMove", [t, e, i]), this._dragMove(t, e, i)
        }, n._dragPointerMove = function(t, i) {
            var n = e.getPointerPoint(i),
                o = { x: n.x - this.pointerDownPoint.x, y: n.y - this.pointerDownPoint.y };
            return !this.isDragging && this.hasDragStarted(o) && this._dragStart(t, i), o
        }, n.hasDragStarted = function(t) { return Math.abs(t.x) > 3 || Math.abs(t.y) > 3 }, n.pointerUp = function(t, e) { this.emitEvent("pointerUp", [t, e]), this._dragPointerUp(t, e) }, n._dragPointerUp = function(t, e) { this.isDragging ? this._dragEnd(t, e) : this._staticClick(t, e) }, n._dragStart = function(t, i) { this.isDragging = !0, this.dragStartPoint = e.getPointerPoint(i), this.isPreventingClicks = !0, this.dragStart(t, i) }, n.dragStart = function(t, e) { this.emitEvent("dragStart", [t, e]) }, n._dragMove = function(t, e, i) { this.isDragging && this.dragMove(t, e, i) }, n.dragMove = function(t, e, i) { t.preventDefault(), this.emitEvent("dragMove", [t, e, i]) }, n._dragEnd = function(t, e) { this.isDragging = !1, setTimeout(function() { delete this.isPreventingClicks }.bind(this)), this.dragEnd(t, e) }, n.dragEnd = function(t, e) { this.emitEvent("dragEnd", [t, e]) }, n.onclick = function(t) { this.isPreventingClicks && t.preventDefault() }, n._staticClick = function(t, e) { if (!this.isIgnoringMouseUp || "mouseup" != t.type) { var i = t.target.nodeName; "INPUT" != i && "TEXTAREA" != i || t.target.focus(), this.staticClick(t, e), "mouseup" != t.type && (this.isIgnoringMouseUp = !0, setTimeout(function() { delete this.isIgnoringMouseUp }.bind(this), 400)) } }, n.staticClick = function(t, e) { this.emitEvent("staticClick", [t, e]) }, i.getPointerPoint = e.getPointerPoint, i
    }),
    function(t, i) { n = [p, m, c], !(g = function(e, n, o) { return i(t, e, n, o) }.apply(e, n)) }(window, function(t, e, i, n) {
        function o(t) {
            var e = "touchstart" == t.type,
                i = "touch" == t.pointerType,
                n = d[t.target.nodeName];
            return e || i || n
        }

        function r() { return { x: t.pageXOffset, y: t.pageYOffset } }
        n.extend(e.defaults, { draggable: !0, dragThreshold: 3 }), e.createMethods.push("_createDrag");
        var s = e.prototype;
        n.extend(s, i.prototype), s._touchActionValue = "pan-y";
        var a = "createTouch" in document,
            l = !1;
        s._createDrag = function() { this.on("activate", this.bindDrag), this.on("uiChange", this._uiChangeDrag), this.on("childUIPointerDown", this._childUIPointerDownDrag), this.on("deactivate", this.unbindDrag), a && !l && (t.addEventListener("touchmove", function() {}), l = !0) }, s.bindDrag = function() { this.options.draggable && !this.isDragBound && (this.element.classList.add("is-draggable"), this.handles = [this.viewport], this.bindHandles(), this.isDragBound = !0) }, s.unbindDrag = function() { this.isDragBound && (this.element.classList.remove("is-draggable"), this.unbindHandles(), delete this.isDragBound) }, s._uiChangeDrag = function() { delete this.isFreeScrolling }, s._childUIPointerDownDrag = function(t) { t.preventDefault(), this.pointerDownFocus(t) };
        var c = { TEXTAREA: !0, INPUT: !0, OPTION: !0 },
            u = { radio: !0, checkbox: !0, button: !0, submit: !0, image: !0, file: !0 };
        s.pointerDown = function(e, i) {
            var n = c[e.target.nodeName] && !u[e.target.type];
            if (n) return this.isPointerDown = !1, void delete this.pointerIdentifier;
            this._dragPointerDown(e, i);
            var o = document.activeElement;
            o && o.blur && o != this.element && o != document.body && o.blur(), this.pointerDownFocus(e), this.dragX = this.x, this.viewport.classList.add("is-pointer-down"), this._bindPostStartEvents(e), this.pointerDownScroll = r(), t.addEventListener("scroll", this), this.dispatchEvent("pointerDown", e, [i])
        }, s.pointerDownFocus = function(e) {
            var i = o(e);
            if (this.options.accessibility && !i) {
                var n = t.pageYOffset;
                this.element.focus(), t.pageYOffset != n && t.scrollTo(t.pageXOffset, n)
            }
        };
        var d = { INPUT: !0, SELECT: !0 };
        return s.canPreventDefaultOnPointerDown = function(t) { var e = o(t); return !e }, s.hasDragStarted = function(t) { return Math.abs(t.x) > this.options.dragThreshold }, s.pointerUp = function(t, e) { delete this.isTouchScrolling, this.viewport.classList.remove("is-pointer-down"), this.dispatchEvent("pointerUp", t, [e]), this._dragPointerUp(t, e) }, s.pointerDone = function() { t.removeEventListener("scroll", this), delete this.pointerDownScroll }, s.dragStart = function(e, i) { this.dragStartPosition = this.x, this.startAnimation(), t.removeEventListener("scroll", this), this.dispatchEvent("dragStart", e, [i]) }, s.pointerMove = function(t, e) {
            var i = this._dragPointerMove(t, e);
            this.dispatchEvent("pointerMove", t, [e, i]), this._dragMove(t, e, i)
        }, s.dragMove = function(t, e, i) {
            t.preventDefault(), this.previousDragX = this.dragX;
            var n = this.options.rightToLeft ? -1 : 1,
                o = this.dragStartPosition + i.x * n;
            if (!this.options.wrapAround && this.slides.length) {
                var r = Math.max(-this.slides[0].target, this.dragStartPosition);
                o = o > r ? .5 * (o + r) : o;
                var s = Math.min(-this.getLastSlide().target, this.dragStartPosition);
                o = o < s ? .5 * (o + s) : o
            }
            this.dragX = o, this.dragMoveTime = new Date, this.dispatchEvent("dragMove", t, [e, i])
        }, s.dragEnd = function(t, e) {
            this.options.freeScroll && (this.isFreeScrolling = !0);
            var i = this.dragEndRestingSelect();
            if (this.options.freeScroll && !this.options.wrapAround) {
                var n = this.getRestingPosition();
                this.isFreeScrolling = -n > this.slides[0].target && -n < this.getLastSlide().target
            } else this.options.freeScroll || i != this.selectedIndex || (i += this.dragEndBoostSelect());
            delete this.previousDragX, this.isDragSelect = this.options.wrapAround, this.select(i), delete this.isDragSelect, this.dispatchEvent("dragEnd", t, [e])
        }, s.dragEndRestingSelect = function() {
            var t = this.getRestingPosition(),
                e = Math.abs(this.getSlideDistance(-t, this.selectedIndex)),
                i = this._getClosestResting(t, e, 1),
                n = this._getClosestResting(t, e, -1),
                o = i.distance < n.distance ? i.index : n.index;
            return o
        }, s._getClosestResting = function(t, e, i) { for (var n = this.selectedIndex, o = 1 / 0, r = this.options.contain && !this.options.wrapAround ? function(t, e) { return t <= e } : function(t, e) { return t < e }; r(e, o) && (n += i, o = e, e = this.getSlideDistance(-t, n), null !== e);) e = Math.abs(e); return { distance: o, index: n - i } }, s.getSlideDistance = function(t, e) {
            var i = this.slides.length,
                o = this.options.wrapAround && i > 1,
                r = o ? n.modulo(e, i) : e,
                s = this.slides[r];
            if (!s) return null;
            var a = o ? this.slideableWidth * Math.floor(e / i) : 0;
            return t - (s.target + a)
        }, s.dragEndBoostSelect = function() {
            if (void 0 === this.previousDragX || !this.dragMoveTime || new Date - this.dragMoveTime > 100) return 0;
            var t = this.getSlideDistance(-this.dragX, this.selectedIndex),
                e = this.previousDragX - this.dragX;
            return t > 0 && e > 0 ? 1 : t < 0 && e < 0 ? -1 : 0
        }, s.staticClick = function(t, e) {
            var i = this.getParentCell(t.target),
                n = i && i.element,
                o = i && this.cells.indexOf(i);
            this.dispatchEvent("staticClick", t, [e, n, o])
        }, s.onscroll = function() {
            var t = r(),
                e = this.pointerDownScroll.x - t.x,
                i = this.pointerDownScroll.y - t.y;
            (Math.abs(e) > 3 || Math.abs(i) > 3) && this._pointerDone()
        }, e
    }),
    /*!
     * Tap listener v2.0.0
     * listens to taps
     * MIT license
     */
    function(t, i) { n = [f], !(v = function(e) { return i(t, e) }.apply(e, n)) }(window, function(t, e) {
        function i(t) { this.bindTap(t) }
        var n = i.prototype = Object.create(e.prototype);
        return n.bindTap = function(t) { t && (this.unbindTap(), this.tapElement = t, this._bindStartEvent(t, !0)) }, n.unbindTap = function() { this.tapElement && (this._bindStartEvent(this.tapElement, !0), delete this.tapElement) }, n.pointerUp = function(i, n) {
            if (!this.isIgnoringMouseUp || "mouseup" != i.type) {
                var o = e.getPointerPoint(n),
                    r = this.tapElement.getBoundingClientRect(),
                    s = t.pageXOffset,
                    a = t.pageYOffset,
                    l = o.x >= r.left + s && o.x <= r.right + s && o.y >= r.top + a && o.y <= r.bottom + a;
                if (l && this.emitEvent("tap", [i, n]), "mouseup" != i.type) {
                    this.isIgnoringMouseUp = !0;
                    var c = this;
                    setTimeout(function() { delete c.isIgnoringMouseUp }, 400)
                }
            }
        }, n.destroy = function() { this.pointerDone(), this.unbindTap() }, i
    }),
    function(t, i) { n = [p, v, c], !(y = function(e, n, o) { return i(t, e, n, o) }.apply(e, n)) }(window, function(t, e, i, n) {
        "use strict";

        function o(t, e) { this.direction = t, this.parent = e, this._create() }

        function r(t) { return "string" == typeof t ? t : "M " + t.x0 + ",50 L " + t.x1 + "," + (t.y1 + 50) + " L " + t.x2 + "," + (t.y2 + 50) + " L " + t.x3 + ",50  L " + t.x2 + "," + (50 - t.y2) + " L " + t.x1 + "," + (50 - t.y1) + " Z" }
        var s = "http://www.w3.org/2000/svg";
        o.prototype = new i, o.prototype._create = function() {
            this.isEnabled = !0, this.isPrevious = this.direction == -1;
            var t = this.parent.options.rightToLeft ? 1 : -1;
            this.isLeft = this.direction == t;
            var e = this.element = document.createElement("button");
            e.className = "flickity-prev-next-button", e.className += this.isPrevious ? " previous" : " next", e.setAttribute("type", "button"), this.disable(), e.setAttribute("aria-label", this.isPrevious ? "previous" : "next");
            var i = this.createSVG();
            e.appendChild(i), this.on("tap", this.onTap), this.parent.on("select", this.update.bind(this)), this.on("pointerDown", this.parent.childUIPointerDown.bind(this.parent))
        }, o.prototype.activate = function() { this.bindTap(this.element), this.element.addEventListener("click", this), this.parent.element.appendChild(this.element) }, o.prototype.deactivate = function() { this.parent.element.removeChild(this.element), i.prototype.destroy.call(this), this.element.removeEventListener("click", this) }, o.prototype.createSVG = function() {
            var t = document.createElementNS(s, "svg");
            t.setAttribute("viewBox", "0 0 100 100");
            var e = document.createElementNS(s, "path"),
                i = r(this.parent.options.arrowShape);
            return e.setAttribute("d", i), e.setAttribute("class", "arrow"), this.isLeft || e.setAttribute("transform", "translate(100, 100) rotate(180) "), t.appendChild(e), t
        }, o.prototype.onTap = function() {
            if (this.isEnabled) {
                this.parent.uiChange();
                var t = this.isPrevious ? "previous" : "next";
                this.parent[t]()
            }
        }, o.prototype.handleEvent = n.handleEvent, o.prototype.onclick = function() {
            var t = document.activeElement;
            t && t == this.element && this.onTap()
        }, o.prototype.enable = function() { this.isEnabled || (this.element.disabled = !1, this.isEnabled = !0) }, o.prototype.disable = function() { this.isEnabled && (this.element.disabled = !0, this.isEnabled = !1) }, o.prototype.update = function() {
            var t = this.parent.slides;
            if (this.parent.options.wrapAround && t.length > 1) return void this.enable();
            var e = t.length ? t.length - 1 : 0,
                i = this.isPrevious ? 0 : e,
                n = this.parent.selectedIndex == i ? "disable" : "enable";
            this[n]()
        }, o.prototype.destroy = function() { this.deactivate() }, n.extend(e.defaults, { prevNextButtons: !0, arrowShape: { x0: 10, x1: 60, y1: 50, x2: 70, y2: 40, x3: 30 } }), e.createMethods.push("_createPrevNextButtons");
        var a = e.prototype;
        return a._createPrevNextButtons = function() { this.options.prevNextButtons && (this.prevButton = new o(-1, this), this.nextButton = new o(1, this), this.on("activate", this.activatePrevNextButtons)) }, a.activatePrevNextButtons = function() { this.prevButton.activate(), this.nextButton.activate(), this.on("deactivate", this.deactivatePrevNextButtons) }, a.deactivatePrevNextButtons = function() { this.prevButton.deactivate(), this.nextButton.deactivate(), this.off("deactivate", this.deactivatePrevNextButtons) }, e.PrevNextButton = o, e
    }),
    function(t, i) { n = [p, v, c], !(b = function(e, n, o) { return i(t, e, n, o) }.apply(e, n)) }(window, function(t, e, i, n) {
        function o(t) { this.parent = t, this._create() }
        o.prototype = new i, o.prototype._create = function() { this.holder = document.createElement("ol"), this.holder.className = "flickity-page-dots", this.dots = [], this.on("tap", this.onTap), this.on("pointerDown", this.parent.childUIPointerDown.bind(this.parent)) }, o.prototype.activate = function() { this.setDots(), this.bindTap(this.holder), this.parent.element.appendChild(this.holder) }, o.prototype.deactivate = function() { this.parent.element.removeChild(this.holder), i.prototype.destroy.call(this) }, o.prototype.setDots = function() {
            var t = this.parent.slides.length - this.dots.length;
            t > 0 ? this.addDots(t) : t < 0 && this.removeDots(-t)
        }, o.prototype.addDots = function(t) {
            for (var e = document.createDocumentFragment(), i = []; t;) {
                var n = document.createElement("li");
                n.className = "dot", e.appendChild(n), i.push(n), t--
            }
            this.holder.appendChild(e), this.dots = this.dots.concat(i)
        }, o.prototype.removeDots = function(t) {
            var e = this.dots.splice(this.dots.length - t, t);
            e.forEach(function(t) { this.holder.removeChild(t) }, this)
        }, o.prototype.updateSelected = function() { this.selectedDot && (this.selectedDot.className = "dot"), this.dots.length && (this.selectedDot = this.dots[this.parent.selectedIndex], this.selectedDot.className = "dot is-selected") }, o.prototype.onTap = function(t) {
            var e = t.target;
            if ("LI" == e.nodeName) {
                this.parent.uiChange();
                var i = this.dots.indexOf(e);
                this.parent.select(i)
            }
        }, o.prototype.destroy = function() { this.deactivate() }, e.PageDots = o, n.extend(e.defaults, { pageDots: !0 }), e.createMethods.push("_createPageDots");
        var r = e.prototype;
        return r._createPageDots = function() { this.options.pageDots && (this.pageDots = new o(this), this.on("activate", this.activatePageDots), this.on("select", this.updateSelectedPageDots), this.on("cellChange", this.updatePageDots), this.on("resize", this.updatePageDots), this.on("deactivate", this.deactivatePageDots)) }, r.activatePageDots = function() { this.pageDots.activate() }, r.updateSelectedPageDots = function() { this.pageDots.updateSelected() }, r.updatePageDots = function() { this.pageDots.setDots() }, r.deactivatePageDots = function() { this.pageDots.deactivate() }, e.PageDots = o, e
    }),
    function(t, i) { n = [s, c, p], !(w = function(t, e, n) { return i(t, e, n) }.apply(e, n)) }(window, function(t, e, i) {
        function n(t) { this.parent = t, this.state = "stopped", r && (this.onVisibilityChange = function() { this.visibilityChange() }.bind(this), this.onVisibilityPlay = function() { this.visibilityPlay() }.bind(this)) }
        var o, r;
        "hidden" in document ? (o = "hidden", r = "visibilitychange") : "webkitHidden" in document && (o = "webkitHidden", r = "webkitvisibilitychange"), n.prototype = Object.create(t.prototype), n.prototype.play = function() {
            if ("playing" != this.state) {
                var t = document[o];
                if (r && t) return void document.addEventListener(r, this.onVisibilityPlay);
                this.state = "playing", r && document.addEventListener(r, this.onVisibilityChange), this.tick()
            }
        }, n.prototype.tick = function() {
            if ("playing" == this.state) {
                var t = this.parent.options.autoPlay;
                t = "number" == typeof t ? t : 3e3;
                var e = this;
                this.clear(), this.timeout = setTimeout(function() { e.parent.next(!0), e.tick() }, t)
            }
        }, n.prototype.stop = function() { this.state = "stopped", this.clear(), r && document.removeEventListener(r, this.onVisibilityChange) }, n.prototype.clear = function() { clearTimeout(this.timeout) }, n.prototype.pause = function() { "playing" == this.state && (this.state = "paused", this.clear()) }, n.prototype.unpause = function() { "paused" == this.state && this.play() }, n.prototype.visibilityChange = function() {
            var t = document[o];
            this[t ? "pause" : "unpause"]()
        }, n.prototype.visibilityPlay = function() { this.play(), document.removeEventListener(r, this.onVisibilityPlay) }, e.extend(i.defaults, { pauseAutoPlayOnHover: !0 }), i.createMethods.push("_createPlayer");
        var s = i.prototype;
        return s._createPlayer = function() { this.player = new n(this), this.on("activate", this.activatePlayer), this.on("uiChange", this.stopPlayer), this.on("pointerDown", this.stopPlayer), this.on("deactivate", this.deactivatePlayer) }, s.activatePlayer = function() { this.options.autoPlay && (this.player.play(), this.element.addEventListener("mouseenter", this)) }, s.playPlayer = function() { this.player.play() }, s.stopPlayer = function() { this.player.stop() }, s.pausePlayer = function() { this.player.pause() }, s.unpausePlayer = function() { this.player.unpause() }, s.deactivatePlayer = function() { this.player.stop(), this.element.removeEventListener("mouseenter", this) }, s.onmouseenter = function() { this.options.pauseAutoPlayOnHover && (this.player.pause(), this.element.addEventListener("mouseleave", this)) }, s.onmouseleave = function() { this.player.unpause(), this.element.removeEventListener("mouseleave", this) }, i.Player = n, i
    }),
    function(t, i) { n = [p, c], !(x = function(e, n) { return i(t, e, n) }.apply(e, n)) }(window, function(t, e, i) {
        function n(t) { var e = document.createDocumentFragment(); return t.forEach(function(t) { e.appendChild(t.element) }), e }
        var o = e.prototype;
        return o.insert = function(t, e) {
            var i = this._makeCells(t);
            if (i && i.length) {
                var o = this.cells.length;
                e = void 0 === e ? o : e;
                var r = n(i),
                    s = e == o;
                if (s) this.slider.appendChild(r);
                else {
                    var a = this.cells[e].element;
                    this.slider.insertBefore(r, a)
                }
                if (0 === e) this.cells = i.concat(this.cells);
                else if (s) this.cells = this.cells.concat(i);
                else {
                    var l = this.cells.splice(e, o - e);
                    this.cells = this.cells.concat(i).concat(l)
                }
                this._sizeCells(i);
                var c = e > this.selectedIndex ? 0 : i.length;
                this._cellAddedRemoved(e, c)
            }
        }, o.append = function(t) { this.insert(t, this.cells.length) }, o.prepend = function(t) { this.insert(t, 0) }, o.remove = function(t) {
            var e, n, o = this.getCells(t),
                r = 0,
                s = o.length;
            for (e = 0; e < s; e++) {
                n = o[e];
                var a = this.cells.indexOf(n) < this.selectedIndex;
                r -= a ? 1 : 0
            }
            for (e = 0; e < s; e++) n = o[e], n.remove(), i.removeFrom(this.cells, n);
            o.length && this._cellAddedRemoved(0, r)
        }, o._cellAddedRemoved = function(t, e) { e = e || 0, this.selectedIndex += e, this.selectedIndex = Math.max(0, Math.min(this.slides.length - 1, this.selectedIndex)), this.cellChange(t, !0), this.emitEvent("cellAddedRemoved", [t, e]) }, o.cellSizeChange = function(t) {
            var e = this.getCell(t);
            if (e) {
                e.getSize();
                var i = this.cells.indexOf(e);
                this.cellChange(i)
            }
        }, o.cellChange = function(t, e) {
            var i = this.slideableWidth;
            if (this._positionCells(t), this._getWrapShiftCells(), this.setGallerySize(), this.emitEvent("cellChange", [t]), this.options.freeScroll) {
                var n = i - this.slideableWidth;
                this.x += n * this.cellAlign, this.positionSlider()
            } else e && this.positionSliderAtSelected(), this.select(this.selectedIndex)
        }, e
    }),
    function(t, i) { n = [p, c], !(S = function(e, n) { return i(t, e, n) }.apply(e, n)) }(window, function(t, e, i) {
        "use strict";

        function n(t) { if ("IMG" == t.nodeName && t.getAttribute("data-flickity-lazyload")) return [t]; var e = t.querySelectorAll("img[data-flickity-lazyload]"); return i.makeArray(e) }

        function o(t, e) { this.img = t, this.flickity = e, this.load() }
        e.createMethods.push("_createLazyload");
        var r = e.prototype;
        return r._createLazyload = function() { this.on("select", this.lazyLoad) }, r.lazyLoad = function() {
            var t = this.options.lazyLoad;
            if (t) {
                var e = "number" == typeof t ? t : 0,
                    i = this.getAdjacentCellElements(e),
                    r = [];
                i.forEach(function(t) {
                    var e = n(t);
                    r = r.concat(e)
                }), r.forEach(function(t) { new o(t, this) }, this)
            }
        }, o.prototype.handleEvent = i.handleEvent, o.prototype.load = function() { this.img.addEventListener("load", this), this.img.addEventListener("error", this), this.img.src = this.img.getAttribute("data-flickity-lazyload"), this.img.removeAttribute("data-flickity-lazyload") }, o.prototype.onload = function(t) { this.complete(t, "flickity-lazyloaded") }, o.prototype.onerror = function(t) { this.complete(t, "flickity-lazyerror") }, o.prototype.complete = function(t, e) {
            this.img.removeEventListener("load", this), this.img.removeEventListener("error", this);
            var i = this.flickity.getParentCell(this.img),
                n = i && i.element;
            this.flickity.cellSizeChange(n), this.img.classList.add(e), this.flickity.dispatchEvent("lazyLoad", t, n)
        }, e.LazyLoader = o, e
    }),
    /*!
     * Flickity v2.0.10
     * Touch, responsive, flickable carousels
     *
     * Licensed GPLv3 for open source use
     * or Flickity Commercial License for commercial use
     *
     * http://flickity.metafizzy.co
     * Copyright 2017 Metafizzy
     */
    function(t, i) { n = [p, g, y, b, w, x, S], r = i, !(C = "function" == typeof r ? r.apply(e, n) : r) }(window, function(t) { return t }),
    /*!
     * Flickity asNavFor v2.0.1
     * enable asNavFor for Flickity
     */
    function(i, s) { n = [C, c], r = s, o = "function" == typeof r ? r.apply(e, n) : r, !(void 0 !== o && (t.exports = o)) }(window, function(t, e) {
        function i(t, e, i) { return (e - t) * i + t }
        t.createMethods.push("_createAsNavFor");
        var n = t.prototype;
        return n._createAsNavFor = function() {
            this.on("activate", this.activateAsNavFor), this.on("deactivate", this.deactivateAsNavFor), this.on("destroy", this.destroyAsNavFor);
            var t = this.options.asNavFor;
            if (t) {
                var e = this;
                setTimeout(function() { e.setNavCompanion(t) })
            }
        }, n.setNavCompanion = function(i) {
            i = e.getQueryElement(i);
            var n = t.data(i);
            if (n && n != this) {
                this.navCompanion = n;
                var o = this;
                this.onNavCompanionSelect = function() { o.navCompanionSelect() }, n.on("select", this.onNavCompanionSelect), this.on("staticClick", this.onNavStaticClick), this.navCompanionSelect(!0)
            }
        }, n.navCompanionSelect = function(t) {
            if (this.navCompanion) {
                var e = this.navCompanion.selectedCells[0],
                    n = this.navCompanion.cells.indexOf(e),
                    o = n + this.navCompanion.selectedCells.length - 1,
                    r = Math.floor(i(n, o, this.navCompanion.cellAlign));
                if (this.selectCell(r, !1, t), this.removeNavSelectedElements(), !(r >= this.cells.length)) {
                    var s = this.cells.slice(n, o + 1);
                    this.navSelectedElements = s.map(function(t) { return t.element }), this.changeNavSelectedClass("add")
                }
            }
        }, n.changeNavSelectedClass = function(t) { this.navSelectedElements.forEach(function(e) { e.classList[t]("is-nav-selected") }) }, n.activateAsNavFor = function() { this.navCompanionSelect(!0) }, n.removeNavSelectedElements = function() { this.navSelectedElements && (this.changeNavSelectedClass("remove"), delete this.navSelectedElements) }, n.onNavStaticClick = function(t, e, i, n) { "number" == typeof n && this.navCompanion.selectCell(n) }, n.deactivateAsNavFor = function() { this.removeNavSelectedElements() }, n.destroyAsNavFor = function() { this.navCompanion && (this.navCompanion.off("select", this.onNavCompanionSelect), this.off("staticClick", this.onNavStaticClick), delete this.navCompanion) }, t
    }),
    /*!
     * imagesLoaded v4.1.3
     * JavaScript is all like "You images are done yet or what?"
     * MIT License
     */
    function(t, i) {
        "use strict";
        n = [s], !(k = function(e) { return i(t, e) }.apply(e, n))
    }("undefined" != typeof window ? window : this, function(t, e) {
        function i(t, e) { for (var i in e) t[i] = e[i]; return t }

        function n(t) {
            var e = [];
            if (Array.isArray(t)) e = t;
            else if ("number" == typeof t.length)
                for (var i = 0; i < t.length; i++) e.push(t[i]);
            else e.push(t);
            return e
        }

        function o(t, e, r) { return this instanceof o ? ("string" == typeof t && (t = document.querySelectorAll(t)), this.elements = n(t), this.options = i({}, this.options), "function" == typeof e ? r = e : i(this.options, e), r && this.on("always", r), this.getImages(), a && (this.jqDeferred = new a.Deferred), void setTimeout(function() { this.check() }.bind(this))) : new o(t, e, r) }

        function r(t) { this.img = t }

        function s(t, e) { this.url = t, this.element = e, this.img = new Image }
        var a = t.jQuery,
            l = t.console;
        o.prototype = Object.create(e.prototype), o.prototype.options = {}, o.prototype.getImages = function() { this.images = [], this.elements.forEach(this.addElementImages, this) }, o.prototype.addElementImages = function(t) {
            "IMG" == t.nodeName && this.addImage(t), this.options.background === !0 && this.addElementBackgroundImages(t);
            var e = t.nodeType;
            if (e && c[e]) {
                for (var i = t.querySelectorAll("img"), n = 0; n < i.length; n++) {
                    var o = i[n];
                    this.addImage(o)
                }
                if ("string" == typeof this.options.background) {
                    var r = t.querySelectorAll(this.options.background);
                    for (n = 0; n < r.length; n++) {
                        var s = r[n];
                        this.addElementBackgroundImages(s)
                    }
                }
            }
        };
        var c = { 1: !0, 9: !0, 11: !0 };
        return o.prototype.addElementBackgroundImages = function(t) {
            var e = getComputedStyle(t);
            if (e)
                for (var i = /url\((['"])?(.*?)\1\)/gi, n = i.exec(e.backgroundImage); null !== n;) {
                    var o = n && n[2];
                    o && this.addBackground(o, t), n = i.exec(e.backgroundImage)
                }
        }, o.prototype.addImage = function(t) {
            var e = new r(t);
            this.images.push(e)
        }, o.prototype.addBackground = function(t, e) {
            var i = new s(t, e);
            this.images.push(i)
        }, o.prototype.check = function() {
            function t(t, i, n) { setTimeout(function() { e.progress(t, i, n) }) }
            var e = this;
            return this.progressedCount = 0, this.hasAnyBroken = !1, this.images.length ? void this.images.forEach(function(e) { e.once("progress", t), e.check() }) : void this.complete()
        }, o.prototype.progress = function(t, e, i) { this.progressedCount++, this.hasAnyBroken = this.hasAnyBroken || !t.isLoaded, this.emitEvent("progress", [this, t, e]), this.jqDeferred && this.jqDeferred.notify && this.jqDeferred.notify(this, t), this.progressedCount == this.images.length && this.complete(), this.options.debug && l && l.log("progress: " + i, t, e) }, o.prototype.complete = function() {
            var t = this.hasAnyBroken ? "fail" : "done";
            if (this.isComplete = !0, this.emitEvent(t, [this]), this.emitEvent("always", [this]), this.jqDeferred) {
                var e = this.hasAnyBroken ? "reject" : "resolve";
                this.jqDeferred[e](this)
            }
        }, r.prototype = Object.create(e.prototype), r.prototype.check = function() { var t = this.getIsImageComplete(); return t ? void this.confirm(0 !== this.img.naturalWidth, "naturalWidth") : (this.proxyImage = new Image, this.proxyImage.addEventListener("load", this), this.proxyImage.addEventListener("error", this), this.img.addEventListener("load", this), this.img.addEventListener("error", this), void(this.proxyImage.src = this.img.src)) }, r.prototype.getIsImageComplete = function() { return this.img.complete && void 0 !== this.img.naturalWidth }, r.prototype.confirm = function(t, e) { this.isLoaded = t, this.emitEvent("progress", [this, this.img, e]) }, r.prototype.handleEvent = function(t) {
            var e = "on" + t.type;
            this[e] && this[e](t)
        }, r.prototype.onload = function() { this.confirm(!0, "onload"), this.unbindEvents() }, r.prototype.onerror = function() { this.confirm(!1, "onerror"), this.unbindEvents() }, r.prototype.unbindEvents = function() { this.proxyImage.removeEventListener("load", this), this.proxyImage.removeEventListener("error", this), this.img.removeEventListener("load", this), this.img.removeEventListener("error", this) }, s.prototype = Object.create(r.prototype), s.prototype.check = function() {
            this.img.addEventListener("load", this), this.img.addEventListener("error", this), this.img.src = this.url;
            var t = this.getIsImageComplete();
            t && (this.confirm(0 !== this.img.naturalWidth, "naturalWidth"), this.unbindEvents())
        }, s.prototype.unbindEvents = function() { this.img.removeEventListener("load", this), this.img.removeEventListener("error", this) }, s.prototype.confirm = function(t, e) { this.isLoaded = t, this.emitEvent("progress", [this, this.element, e]) }, o.makeJQueryPlugin = function(e) { e = e || t.jQuery, e && (a = e, a.fn.imagesLoaded = function(t, e) { var i = new o(this, t, e); return i.jqDeferred.promise(a(this)) }) }, o.makeJQueryPlugin(), o
    }),
    /*!
     * Flickity imagesLoaded v2.0.0
     * enables imagesLoaded option for Flickity
     */
    function(i, r) { n = [C, k], o = function(t, e) { return r(i, t, e) }.apply(e, n), !(void 0 !== o && (t.exports = o)) }(window, function(t, e, i) {
        "use strict";
        e.createMethods.push("_createImagesLoaded");
        var n = e.prototype;
        return n._createImagesLoaded = function() { this.on("activate", this.imagesLoaded) }, n.imagesLoaded = function() {
            function t(t, i) {
                var n = e.getParentCell(i.img);
                e.cellSizeChange(n && n.element), e.options.freeScroll || e.positionSliderAtSelected()
            }
            if (this.options.imagesLoaded) {
                var e = this;
                i(this.slider).on("progress", t)
            }
        }, e
    })
}, function(t, e) { t.exports = window.jQuery }, function(t, e) {
    ! function() {
        var t = window.MutationObserver || window.WebKitMutationObserver,
            e = "ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch,
            i = void 0 !== document.documentElement.style["touch-action"] || document.documentElement.style["-ms-touch-action"];
        if (!i && e && t) {
            window.Hammer = window.Hammer || {};
            var n = /touch-action[:][\s]*(none)[^;'"]*/,
                o = /touch-action[:][\s]*(manipulation)[^;'"]*/,
                r = /touch-action/,
                s = /(iP(ad|hone|od))/.test(navigator.userAgent) && ("indexedDB" in window || !!window.performance);
            window.Hammer.time = {
                getTouchAction: function(t) { return this.checkStyleString(t.getAttribute("style")) },
                checkStyleString: function(t) { if (r.test(t)) return n.test(t) ? "none" : !o.test(t) || "manipulation" },
                shouldHammer: function(t) { var e = t.target.hasParent; return !(!e || s && !(Date.now() - t.target.lastStart < 125)) && e },
                touchHandler: function(t) {
                    var e = this.shouldHammer(t);
                    if ("none" === e) this.dropHammer(t);
                    else if ("manipulation" === e) {
                        var i = t.target.getBoundingClientRect(),
                            n = i.top !== this.pos.top || i.left !== this.pos.left;
                        !n && this.dropHammer(t)
                    }
                    this.scrolled = !1, delete t.target.lastStart, delete t.target.hasParent
                },
                dropHammer: function(t) { "touchend" === t.type && (t.target.focus(), setTimeout(function() { t.target.click() }, 0)), t.preventDefault() },
                touchStart: function(t) { this.pos = t.target.getBoundingClientRect(), t.target.hasParent = this.hasParent(t.target), s && t.target.hasParent && (t.target.lastStart = Date.now()) },
                styleWatcher: function(t) { t.forEach(this.styleUpdater, this) },
                styleUpdater: function(t) { if (t.target.updateNext) return void(t.target.updateNext = !1); var e = this.getTouchAction(t.target); return e ? void("none" !== e && (t.target.hadTouchNone = !1)) : void(!e && (t.oldValue && this.checkStyleString(t.oldValue) || t.target.hadTouchNone) && (t.target.hadTouchNone = !0, t.target.updateNext = !1, t.target.setAttribute("style", t.target.getAttribute("style") + " touch-action: none;"))) },
                hasParent: function(t) {
                    for (var e, i = t; i && i.parentNode; i = i.parentNode)
                        if (e = this.getTouchAction(i)) return e;
                    return !1
                },
                installStartEvents: function() { document.addEventListener("touchstart", this.touchStart.bind(this)), document.addEventListener("mousedown", this.touchStart.bind(this)) },
                installEndEvents: function() { document.addEventListener("touchend", this.touchHandler.bind(this), !0), document.addEventListener("mouseup", this.touchHandler.bind(this), !0) },
                installObserver: function() { this.observer = new t(this.styleWatcher.bind(this)).observe(document, { subtree: !0, attributes: !0, attributeOldValue: !0, attributeFilter: ["style"] }) },
                install: function() { this.installEndEvents(), this.installStartEvents(), this.installObserver() }
            }, window.Hammer.time.install()
        }
    }()
}, function(t, e, i) {
    /**
     * sticky-sidebar - A JavaScript plugin for making smart and high performance.
     * @version v3.3.1
     * @link https://github.com/abouolia/sticky-sidebar
     * @author Ahmed Bouhuolia
     * @license The MIT License (MIT)
     **/
    ! function(t, e) { e() }(0, function() {
        "use strict";

        function t(t, e) { if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function") }
        var e = function() {
                function t(t, e) {
                    for (var i = 0; i < e.length; i++) {
                        var n = e[i];
                        n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
                    }
                }
                return function(e, i, n) { return i && t(e.prototype, i), n && t(e, n), e }
            }(),
            i = function() {
                var i = ".stickySidebar",
                    n = { topSpacing: 0, bottomSpacing: 0, containerSelector: !1, innerWrapperSelector: ".inner-wrapper-sticky", stickyClass: "is-affixed", resizeSensor: !0, minWidth: !1 };
                return function() {
                    function o(e) {
                        var i = this,
                            r = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                        if (t(this, o), this.options = o.extend(n, r), this.sidebar = "string" == typeof e ? document.querySelector(e) : e, void 0 === this.sidebar) throw new Error("There is no specific sidebar element.");
                        this.sidebarInner = !1, this.container = this.sidebar.parentElement, this.affixedType = "STATIC", this.direction = "down", this.support = { transform: !1, transform3d: !1 }, this._initialized = !1, this._reStyle = !1, this._breakpoint = !1, this._resizeListeners = [], this.dimensions = { translateY: 0, topSpacing: 0, lastTopSpacing: 0, bottomSpacing: 0, lastBottomSpacing: 0, sidebarHeight: 0, sidebarWidth: 0, containerTop: 0, containerHeight: 0, viewportHeight: 0, viewportTop: 0, lastViewportTop: 0 }, ["handleEvent"].forEach(function(t) { i[t] = i[t].bind(i) }), this.initialize()
                    }
                    return e(o, [{
                        key: "initialize",
                        value: function() {
                            var t = this;
                            if (this._setSupportFeatures(), this.options.innerWrapperSelector && (this.sidebarInner = this.sidebar.querySelector(this.options.innerWrapperSelector), null === this.sidebarInner && (this.sidebarInner = !1)), !this.sidebarInner) {
                                var e = document.createElement("div");
                                for (e.setAttribute("class", "inner-wrapper-sticky"), this.sidebar.appendChild(e); this.sidebar.firstChild != e;) e.appendChild(this.sidebar.firstChild);
                                this.sidebarInner = this.sidebar.querySelector(".inner-wrapper-sticky")
                            }
                            if (this.options.containerSelector) { var i = document.querySelectorAll(this.options.containerSelector); if ((i = Array.prototype.slice.call(i)).forEach(function(e, i) { e.contains(t.sidebar) && (t.container = e) }), !i.length) throw new Error("The container does not contains on the sidebar.") }
                            "function" != typeof this.options.topSpacing && (this.options.topSpacing = parseInt(this.options.topSpacing) || 0), "function" != typeof this.options.bottomSpacing && (this.options.bottomSpacing = parseInt(this.options.bottomSpacing) || 0), this._widthBreakpoint(), this.calcDimensions(), this.stickyPosition(), this.bindEvents(), this._initialized = !0
                        }
                    }, { key: "bindEvents", value: function() { window.addEventListener("resize", this, { passive: !0, capture: !1 }), window.addEventListener("scroll", this, { passive: !0, capture: !1 }), this.sidebar.addEventListener("update" + i, this), this.options.resizeSensor && "undefined" != typeof ResizeSensor && (new ResizeSensor(this.sidebarInner, this.handleEvent), new ResizeSensor(this.container, this.handleEvent)) } }, { key: "handleEvent", value: function(t) { this.updateSticky(t) } }, {
                        key: "calcDimensions",
                        value: function() {
                            if (!this._breakpoint) {
                                var t = this.dimensions;
                                t.containerTop = o.offsetRelative(this.container).top, t.containerHeight = this.container.clientHeight, t.containerBottom = t.containerTop + t.containerHeight, t.sidebarHeight = this.sidebarInner.offsetHeight, t.sidebarWidth = this.sidebar.offsetWidth, t.viewportHeight = window.innerHeight, this._calcDimensionsWithScroll()
                            }
                        }
                    }, {
                        key: "_calcDimensionsWithScroll",
                        value: function() {
                            var t = this.dimensions;
                            t.sidebarLeft = o.offsetRelative(this.sidebar).left, t.viewportTop = document.documentElement.scrollTop || document.body.scrollTop, t.viewportBottom = t.viewportTop + t.viewportHeight, t.viewportLeft = document.documentElement.scrollLeft || document.body.scrollLeft, t.topSpacing = this.options.topSpacing, t.bottomSpacing = this.options.bottomSpacing, "function" == typeof t.topSpacing && (t.topSpacing = parseInt(t.topSpacing(this.sidebar)) || 0), "function" == typeof t.bottomSpacing && (t.bottomSpacing = parseInt(t.bottomSpacing(this.sidebar)) || 0), "VIEWPORT-TOP" === this.affixedType ? t.topSpacing < t.lastTopSpacing && (t.translateY += t.lastTopSpacing - t.topSpacing, this._reStyle = !0) : "VIEWPORT-BOTTOM" === this.affixedType && t.bottomSpacing < t.lastBottomSpacing && (t.translateY += t.lastBottomSpacing - t.bottomSpacing, this._reStyle = !0), t.lastTopSpacing = t.topSpacing, t.lastBottomSpacing = t.bottomSpacing
                        }
                    }, { key: "isSidebarFitsViewport", value: function() { return this.dimensions.sidebarHeight < this.dimensions.viewportHeight } }, {
                        key: "observeScrollDir",
                        value: function() {
                            var t = this.dimensions;
                            if (t.lastViewportTop !== t.viewportTop) {
                                var e = "down" === this.direction ? Math.min : Math.max;
                                t.viewportTop === e(t.viewportTop, t.lastViewportTop) && (this.direction = "down" === this.direction ? "up" : "down")
                            }
                        }
                    }, {
                        key: "getAffixType",
                        value: function() {
                            var t = this.dimensions,
                                e = !1;
                            this._calcDimensionsWithScroll();
                            var i = t.sidebarHeight + t.containerTop,
                                n = t.viewportTop + t.topSpacing,
                                o = t.viewportBottom - t.bottomSpacing;
                            return "up" === this.direction ? n <= t.containerTop ? (t.translateY = 0, e = "STATIC") : n <= t.translateY + t.containerTop ? (t.translateY = n - t.containerTop, e = "VIEWPORT-TOP") : !this.isSidebarFitsViewport() && t.containerTop <= n && (e = "VIEWPORT-UNBOTTOM") : this.isSidebarFitsViewport() ? t.sidebarHeight + n >= t.containerBottom ? (t.translateY = t.containerBottom - i, e = "CONTAINER-BOTTOM") : n >= t.containerTop && (t.translateY = n - t.containerTop, e = "VIEWPORT-TOP") : t.containerBottom <= o ? (t.translateY = t.containerBottom - i, e = "CONTAINER-BOTTOM") : i + t.translateY <= o ? (t.translateY = o - i, e = "VIEWPORT-BOTTOM") : t.containerTop + t.translateY <= n && (e = "VIEWPORT-UNBOTTOM"), t.translateY = Math.max(0, t.translateY), t.translateY = Math.min(t.containerHeight, t.translateY), t.lastViewportTop = t.viewportTop, e
                        }
                    }, {
                        key: "_getStyle",
                        value: function(t) {
                            if (void 0 !== t) {
                                var e = { inner: {}, outer: {} },
                                    i = this.dimensions;
                                switch (t) {
                                    case "VIEWPORT-TOP":
                                        e.inner = { position: "fixed", top: i.topSpacing, left: i.sidebarLeft - i.viewportLeft, width: i.sidebarWidth };
                                        break;
                                    case "VIEWPORT-BOTTOM":
                                        e.inner = { position: "fixed", top: "auto", left: i.sidebarLeft, bottom: i.bottomSpacing, width: i.sidebarWidth };
                                        break;
                                    case "CONTAINER-BOTTOM":
                                    case "VIEWPORT-UNBOTTOM":
                                        var n = this._getTranslate(0, i.translateY + "px");
                                        e.inner = n ? { transform: n } : { position: "absolute", top: i.translateY, width: i.sidebarWidth }
                                }
                                switch (t) {
                                    case "VIEWPORT-TOP":
                                    case "VIEWPORT-BOTTOM":
                                    case "VIEWPORT-UNBOTTOM":
                                    case "CONTAINER-BOTTOM":
                                        e.outer = { height: i.sidebarHeight, position: "relative" }
                                }
                                return e.outer = o.extend({ height: "", position: "" }, e.outer), e.inner = o.extend({ position: "relative", top: "", left: "", bottom: "", width: "", transform: this._getTranslate() }, e.inner), e
                            }
                        }
                    }, {
                        key: "stickyPosition",
                        value: function(t) {
                            if (!this._breakpoint) {
                                t = this._reStyle || t || !1;
                                var e = this.getAffixType(),
                                    n = this._getStyle(e);
                                if ((this.affixedType != e || t) && e) {
                                    var r = "affix." + e.toLowerCase().replace("viewport-", "") + i;
                                    o.eventTrigger(this.sidebar, r), "STATIC" === e ? o.removeClass(this.sidebar, this.options.stickyClass) : o.addClass(this.sidebar, this.options.stickyClass);
                                    for (var s in n.outer) this.sidebar.style[s] = n.outer[s];
                                    for (var a in n.inner) {
                                        var l = "number" == typeof n.inner[a] ? "px" : "";
                                        this.sidebarInner.style[a] = n.inner[a] + l
                                    }
                                    var c = "affixed." + e.toLowerCase().replace("viewport-", "") + i;
                                    o.eventTrigger(this.sidebar, c)
                                } else this._initialized && (this.sidebarInner.style.left = n.inner.left);
                                this.affixedType = e
                            }
                        }
                    }, { key: "_widthBreakpoint", value: function() { window.innerWidth <= this.options.minWidth ? (this._breakpoint = !0, this.affixedType = "STATIC", this.sidebar.removeAttribute("style"), o.removeClass(this.sidebar, this.options.stickyClass), this.sidebarInner.removeAttribute("style")) : this._breakpoint = !1 } }, {
                        key: "updateSticky",
                        value: function() {
                            var t = this,
                                e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                            this._running || (this._running = !0, function(e) {
                                requestAnimationFrame(function() {
                                    switch (e) {
                                        case "scroll":
                                            t._calcDimensionsWithScroll(), t.observeScrollDir(), t.stickyPosition();
                                            break;
                                        case "resize":
                                        default:
                                            t._widthBreakpoint(), t.calcDimensions(), t.stickyPosition(!0)
                                    }
                                    t._running = !1
                                })
                            }(e.type))
                        }
                    }, {
                        key: "_setSupportFeatures",
                        value: function() {
                            var t = this.support;
                            t.transform = o.supportTransform(), t.transform3d = o.supportTransform(!0)
                        }
                    }, {
                        key: "_getTranslate",
                        value: function() {
                            var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
                                e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                                i = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0;
                            return this.support.transform3d ? "translate3d(" + t + ", " + e + ", " + i + ")" : !!this.support.translate && "translate(" + t + ", " + e + ")"
                        }
                    }, {
                        key: "destroy",
                        value: function() {
                            window.removeEventListener("resize", this, { caption: !1 }), window.removeEventListener("scroll", this, { caption: !1 }), this.sidebar.classList.remove(this.options.stickyClass), this.sidebar.style.minHeight = "", this.sidebar.removeEventListener("update" + i, this);
                            var t = { inner: {}, outer: {} };
                            t.inner = { position: "", top: "", left: "", bottom: "", width: "", transform: "" }, t.outer = { height: "", position: "" };
                            for (var e in t.outer) this.sidebar.style[e] = t.outer[e];
                            for (var n in t.inner) this.sidebarInner.style[n] = t.inner[n];
                            this.options.resizeSensor && "undefined" != typeof ResizeSensor && (ResizeSensor.detach(this.sidebarInner, this.handleEvent), ResizeSensor.detach(this.container, this.handleEvent))
                        }
                    }], [{
                        key: "supportTransform",
                        value: function(t) {
                            var e = !1,
                                i = t ? "perspective" : "transform",
                                n = i.charAt(0).toUpperCase() + i.slice(1),
                                o = ["Webkit", "Moz", "O", "ms"],
                                r = document.createElement("support").style;
                            return (i + " " + o.join(n + " ") + n).split(" ").forEach(function(t, i) { if (void 0 !== r[t]) return e = t, !1 }), e
                        }
                    }, {
                        key: "eventTrigger",
                        value: function(t, e, i) {
                            try { var n = new CustomEvent(e, { detail: i }) } catch (t) {
                                (n = document.createEvent("CustomEvent")).initCustomEvent(e, !0, !0, i)
                            }
                            t.dispatchEvent(n)
                        }
                    }, { key: "extend", value: function(t, e) { var i = {}; for (var n in t) void 0 !== e[n] ? i[n] = e[n] : i[n] = t[n]; return i } }, {
                        key: "offsetRelative",
                        value: function(t) {
                            var e = { left: 0, top: 0 };
                            do {
                                var i = t.offsetTop,
                                    n = t.offsetLeft;
                                isNaN(i) || (e.top += i), isNaN(n) || (e.left += n), t = "BODY" === t.tagName ? t.parentElement : t.offsetParent
                            } while (t);
                            return e
                        }
                    }, { key: "addClass", value: function(t, e) { o.hasClass(t, e) || (t.classList ? t.classList.add(e) : t.className += " " + e) } }, { key: "removeClass", value: function(t, e) { o.hasClass(t, e) && (t.classList ? t.classList.remove(e) : t.className = t.className.replace(new RegExp("(^|\\b)" + e.split(" ").join("|") + "(\\b|$)", "gi"), " ")) } }, { key: "hasClass", value: function(t, e) { return t.classList ? t.classList.contains(e) : new RegExp("(^| )" + e + "( |$)", "gi").test(t.className) } }]), o
                }()
            }();
        window.StickySidebar = i,
            function() {
                if ("undefined" != typeof window) {
                    var t = window.$ || window.jQuery || window.Zepto;
                    if (t) {
                        t.fn.stickySidebar = function(e) {
                            return this.each(function() {
                                var n = t(this),
                                    o = t(this).data("stickySidebar");
                                if (o || (o = new i(this, "object" == typeof e && e), n.data("stickySidebar", o)), "string" == typeof e) {
                                    if (void 0 === o[e] && -1 === ["destroy", "updateSticky"].indexOf(e)) throw new Error('No method named "' + e + '"');
                                    o[e]()
                                }
                            })
                        }, t.fn.stickySidebar.Constructor = i;
                        var e = t.fn.stickySidebar;
                        t.fn.stickySidebar.noConflict = function() { return t.fn.stickySidebar = e, this }
                    }
                }
            }()
    })
}, function(t, e, i) {
    var n, o, r;
    ! function(s) {
        "use strict";
        o = [i(16)], n = s, r = "function" == typeof n ? n.apply(e, o) : n, !(void 0 !== r && (t.exports = r))
    }(function(t) {
        "use strict";

        function e(e) { return !e.nodeName || t.inArray(e.nodeName.toLowerCase(), ["iframe", "#document", "html", "body"]) !== -1 }

        function i(e) { return t.isFunction(e) || t.isPlainObject(e) ? e : { top: e, left: e } }
        var n = t.scrollTo = function(e, i, n) { return t(window).scrollTo(e, i, n) };
        return n.defaults = { axis: "xy", duration: 0, limit: !0 }, t.fn.scrollTo = function(o, r, s) {
            "object" == typeof r && (s = r, r = 0), "function" == typeof s && (s = { onAfter: s }), "max" === o && (o = 9e9), s = t.extend({}, n.defaults, s), r = r || s.duration;
            var a = s.queue && s.axis.length > 1;
            return a && (r /= 2), s.offset = i(s.offset), s.over = i(s.over), this.each(function() {
                function l(e) {
                    var i = t.extend({}, s, { queue: !0, duration: r, complete: e && function() { e.call(d, p, s) } });
                    h.animate(f, i)
                }
                if (null !== o) {
                    var c, u = e(this),
                        d = u ? this.contentWindow || window : this,
                        h = t(d),
                        p = o,
                        f = {};
                    switch (typeof p) {
                        case "number":
                        case "string":
                            if (/^([+-]=?)?\d+(\.\d+)?(px|%)?$/.test(p)) { p = i(p); break }
                            p = u ? t(p) : t(p, d);
                        case "object":
                            if (0 === p.length) return;
                            (p.is || p.style) && (c = (p = t(p)).offset())
                    }
                    var m = t.isFunction(s.offset) && s.offset(d, p) || s.offset;
                    t.each(s.axis.split(""), function(t, e) {
                        var i = "x" === e ? "Left" : "Top",
                            o = i.toLowerCase(),
                            r = "scroll" + i,
                            g = h[r](),
                            v = n.max(d, e);
                        if (c) f[r] = c[o] + (u ? 0 : g - h.offset()[o]), s.margin && (f[r] -= parseInt(p.css("margin" + i), 10) || 0, f[r] -= parseInt(p.css("border" + i + "Width"), 10) || 0), f[r] += m[o] || 0, s.over[o] && (f[r] += p["x" === e ? "width" : "height"]() * s.over[o]);
                        else {
                            var y = p[o];
                            f[r] = y.slice && "%" === y.slice(-1) ? parseFloat(y) / 100 * v : y
                        }
                        s.limit && /^\d+$/.test(f[r]) && (f[r] = f[r] <= 0 ? 0 : Math.min(f[r], v)), !t && s.axis.length > 1 && (g === f[r] ? f = {} : a && (l(s.onAfterFirst), f = {}))
                    }), l(s.onAfter)
                }
            })
        }, n.max = function(i, n) {
            var o = "x" === n ? "Width" : "Height",
                r = "scroll" + o;
            if (!e(i)) return i[r] - t(i)[o.toLowerCase()]();
            var s = "client" + o,
                a = i.ownerDocument || i.document,
                l = a.documentElement,
                c = a.body;
            return Math.max(l[r], c[r]) - Math.min(l[s], c[s])
        }, t.Tween.propHooks.scrollLeft = t.Tween.propHooks.scrollTop = {
            get: function(e) { return t(e.elem)[e.prop]() },
            set: function(e) {
                var i = this.get(e);
                if (e.options.interrupt && e._last && e._last !== i) return t(e.elem).stop();
                var n = Math.round(e.now);
                i !== n && (t(e.elem)[e.prop](n), e._last = this.get(e))
            }
        }, n
    })
}, function(t, e, i) {
    var n, o, r;
    ! function(s) { o = [i(16)], n = s, r = "function" == typeof n ? n.apply(e, o) : n, !(void 0 !== r && (t.exports = r)) }(function(t) {
        var e, i, n, o, r, s, a = "Close",
            l = "BeforeClose",
            c = "AfterClose",
            u = "BeforeAppend",
            d = "MarkupParse",
            h = "Open",
            p = "Change",
            f = "mfp",
            m = "." + f,
            g = "mfp-ready",
            v = "mfp-removing",
            y = "mfp-prevent-close",
            b = function() {},
            w = !!window.jQuery,
            x = t(window),
            S = function(t, i) { e.ev.on(f + t + m, i) },
            C = function(e, i, n, o) { var r = document.createElement("div"); return r.className = "mfp-" + e, n && (r.innerHTML = n), o ? i && i.appendChild(r) : (r = t(r), i && r.appendTo(i)), r },
            k = function(i, n) { e.ev.triggerHandler(f + i, n), e.st.callbacks && (i = i.charAt(0).toLowerCase() + i.slice(1), e.st.callbacks[i] && e.st.callbacks[i].apply(e, t.isArray(n) ? n : [n])) },
            E = function(i) { return i === s && e.currTemplate.closeBtn || (e.currTemplate.closeBtn = t(e.st.closeMarkup.replace("%title%", e.st.tClose)), s = i), e.currTemplate.closeBtn },
            T = function() { t.magnificPopup.instance || (e = new b, e.init(), t.magnificPopup.instance = e) },
            P = function() {
                var t = document.createElement("p").style,
                    e = ["ms", "O", "Moz", "Webkit"];
                if (void 0 !== t.transition) return !0;
                for (; e.length;)
                    if (e.pop() + "Transition" in t) return !0;
                return !1
            };
        b.prototype = {
            constructor: b,
            init: function() {
                var i = navigator.appVersion;
                e.isLowIE = e.isIE8 = document.all && !document.addEventListener, e.isAndroid = /android/gi.test(i), e.isIOS = /iphone|ipad|ipod/gi.test(i), e.supportsTransition = P(), e.probablyMobile = e.isAndroid || e.isIOS || /(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent), n = t(document), e.popupsCache = {}
            },
            open: function(i) {
                var o;
                if (i.isObj === !1) {
                    e.items = i.items.toArray(), e.index = 0;
                    var s, a = i.items;
                    for (o = 0; o < a.length; o++)
                        if (s = a[o], s.parsed && (s = s.el[0]), s === i.el[0]) { e.index = o; break }
                } else e.items = t.isArray(i.items) ? i.items : [i.items], e.index = i.index || 0;
                if (e.isOpen) return void e.updateItemHTML();
                e.types = [], r = "", i.mainEl && i.mainEl.length ? e.ev = i.mainEl.eq(0) : e.ev = n, i.key ? (e.popupsCache[i.key] || (e.popupsCache[i.key] = {}), e.currTemplate = e.popupsCache[i.key]) : e.currTemplate = {}, e.st = t.extend(!0, {}, t.magnificPopup.defaults, i), e.fixedContentPos = "auto" === e.st.fixedContentPos ? !e.probablyMobile : e.st.fixedContentPos, e.st.modal && (e.st.closeOnContentClick = !1, e.st.closeOnBgClick = !1, e.st.showCloseBtn = !1, e.st.enableEscapeKey = !1), e.bgOverlay || (e.bgOverlay = C("bg").on("click" + m, function() { e.close() }), e.wrap = C("wrap").attr("tabindex", -1).on("click" + m, function(t) { e._checkIfClose(t.target) && e.close() }), e.container = C("container", e.wrap)), e.contentContainer = C("content"), e.st.preloader && (e.preloader = C("preloader", e.container, e.st.tLoading));
                var l = t.magnificPopup.modules;
                for (o = 0; o < l.length; o++) {
                    var c = l[o];
                    c = c.charAt(0).toUpperCase() + c.slice(1), e["init" + c].call(e)
                }
                k("BeforeOpen"), e.st.showCloseBtn && (e.st.closeBtnInside ? (S(d, function(t, e, i, n) { i.close_replaceWith = E(n.type) }), r += " mfp-close-btn-in") : e.wrap.append(E())), e.st.alignTop && (r += " mfp-align-top"), e.fixedContentPos ? e.wrap.css({ overflow: e.st.overflowY, overflowX: "hidden", overflowY: e.st.overflowY }) : e.wrap.css({ top: x.scrollTop(), position: "absolute" }), (e.st.fixedBgPos === !1 || "auto" === e.st.fixedBgPos && !e.fixedContentPos) && e.bgOverlay.css({ height: n.height(), position: "absolute" }), e.st.enableEscapeKey && n.on("keyup" + m, function(t) { 27 === t.keyCode && e.close() }), x.on("resize" + m, function() { e.updateSize() }), e.st.closeOnContentClick || (r += " mfp-auto-cursor"), r && e.wrap.addClass(r);
                var u = e.wH = x.height(),
                    p = {};
                if (e.fixedContentPos && e._hasScrollBar(u)) {
                    var f = e._getScrollbarSize();
                    f && (p.marginRight = f)
                }
                e.fixedContentPos && (e.isIE7 ? t("body, html").css("overflow", "hidden") : p.overflow = "hidden");
                var v = e.st.mainClass;
                return e.isIE7 && (v += " mfp-ie7"), v && e._addClassToMFP(v), e.updateItemHTML(), k("BuildControls"), t("html").css(p), e.bgOverlay.add(e.wrap).prependTo(e.st.prependTo || t(document.body)), e._lastFocusedEl = document.activeElement, setTimeout(function() { e.content ? (e._addClassToMFP(g), e._setFocus()) : e.bgOverlay.addClass(g), n.on("focusin" + m, e._onFocusIn) }, 16), e.isOpen = !0, e.updateSize(u), k(h), i
            },
            close: function() { e.isOpen && (k(l), e.isOpen = !1, e.st.removalDelay && !e.isLowIE && e.supportsTransition ? (e._addClassToMFP(v), setTimeout(function() { e._close() }, e.st.removalDelay)) : e._close()) },
            _close: function() {
                k(a);
                var i = v + " " + g + " ";
                if (e.bgOverlay.detach(), e.wrap.detach(), e.container.empty(), e.st.mainClass && (i += e.st.mainClass + " "), e._removeClassFromMFP(i), e.fixedContentPos) {
                    var o = { marginRight: "" };
                    e.isIE7 ? t("body, html").css("overflow", "") : o.overflow = "", t("html").css(o)
                }
                n.off("keyup" + m + " focusin" + m), e.ev.off(m), e.wrap.attr("class", "mfp-wrap").removeAttr("style"), e.bgOverlay.attr("class", "mfp-bg"), e.container.attr("class", "mfp-container"), !e.st.showCloseBtn || e.st.closeBtnInside && e.currTemplate[e.currItem.type] !== !0 || e.currTemplate.closeBtn && e.currTemplate.closeBtn.detach(), e.st.autoFocusLast && e._lastFocusedEl && t(e._lastFocusedEl).focus(), e.currItem = null, e.content = null, e.currTemplate = null, e.prevHeight = 0, k(c)
            },
            updateSize: function(t) {
                if (e.isIOS) {
                    var i = document.documentElement.clientWidth / window.innerWidth,
                        n = window.innerHeight * i;
                    e.wrap.css("height", n), e.wH = n
                } else e.wH = t || x.height();
                e.fixedContentPos || e.wrap.css("height", e.wH), k("Resize")
            },
            updateItemHTML: function() {
                var i = e.items[e.index];
                e.contentContainer.detach(), e.content && e.content.detach(), i.parsed || (i = e.parseEl(e.index));
                var n = i.type;
                if (k("BeforeChange", [e.currItem ? e.currItem.type : "", n]), e.currItem = i, !e.currTemplate[n]) {
                    var r = !!e.st[n] && e.st[n].markup;
                    k("FirstMarkupParse", r), r ? e.currTemplate[n] = t(r) : e.currTemplate[n] = !0
                }
                o && o !== i.type && e.container.removeClass("mfp-" + o + "-holder");
                var s = e["get" + n.charAt(0).toUpperCase() + n.slice(1)](i, e.currTemplate[n]);
                e.appendContent(s, n), i.preloaded = !0, k(p, i), o = i.type, e.container.prepend(e.contentContainer), k("AfterChange")
            },
            appendContent: function(t, i) { e.content = t, t ? e.st.showCloseBtn && e.st.closeBtnInside && e.currTemplate[i] === !0 ? e.content.find(".mfp-close").length || e.content.append(E()) : e.content = t : e.content = "", k(u), e.container.addClass("mfp-" + i + "-holder"), e.contentContainer.append(e.content) },
            parseEl: function(i) {
                var n, o = e.items[i];
                if (o.tagName ? o = { el: t(o) } : (n = o.type, o = { data: o, src: o.src }), o.el) {
                    for (var r = e.types, s = 0; s < r.length; s++)
                        if (o.el.hasClass("mfp-" + r[s])) { n = r[s]; break }
                    o.src = o.el.attr("data-mfp-src"), o.src || (o.src = o.el.attr("href"))
                }
                return o.type = n || e.st.type || "inline", o.index = i, o.parsed = !0, e.items[i] = o, k("ElementParse", o), e.items[i]
            },
            addGroup: function(t, i) {
                var n = function(n) { n.mfpEl = this, e._openClick(n, t, i) };
                i || (i = {});
                var o = "click.magnificPopup";
                i.mainEl = t, i.items ? (i.isObj = !0, t.off(o).on(o, n)) : (i.isObj = !1, i.delegate ? t.off(o).on(o, i.delegate, n) : (i.items = t, t.off(o).on(o, n)))
            },
            _openClick: function(i, n, o) {
                var r = void 0 !== o.midClick ? o.midClick : t.magnificPopup.defaults.midClick;
                if (r || !(2 === i.which || i.ctrlKey || i.metaKey || i.altKey || i.shiftKey)) {
                    var s = void 0 !== o.disableOn ? o.disableOn : t.magnificPopup.defaults.disableOn;
                    if (s)
                        if (t.isFunction(s)) { if (!s.call(e)) return !0 } else if (x.width() < s) return !0;
                    i.type && (i.preventDefault(), e.isOpen && i.stopPropagation()), o.el = t(i.mfpEl), o.delegate && (o.items = n.find(o.delegate)), e.open(o)
                }
            },
            updateStatus: function(t, n) {
                if (e.preloader) {
                    i !== t && e.container.removeClass("mfp-s-" + i), n || "loading" !== t || (n = e.st.tLoading);
                    var o = { status: t, text: n };
                    k("UpdateStatus", o), t = o.status, n = o.text, e.preloader.html(n), e.preloader.find("a").on("click", function(t) { t.stopImmediatePropagation() }), e.container.addClass("mfp-s-" + t), i = t
                }
            },
            _checkIfClose: function(i) {
                if (!t(i).hasClass(y)) {
                    var n = e.st.closeOnContentClick,
                        o = e.st.closeOnBgClick;
                    if (n && o) return !0;
                    if (!e.content || t(i).hasClass("mfp-close") || e.preloader && i === e.preloader[0]) return !0;
                    if (i === e.content[0] || t.contains(e.content[0], i)) { if (n) return !0 } else if (o && t.contains(document, i)) return !0;
                    return !1
                }
            },
            _addClassToMFP: function(t) { e.bgOverlay.addClass(t), e.wrap.addClass(t) },
            _removeClassFromMFP: function(t) { this.bgOverlay.removeClass(t), e.wrap.removeClass(t) },
            _hasScrollBar: function(t) { return (e.isIE7 ? n.height() : document.body.scrollHeight) > (t || x.height()) },
            _setFocus: function() {
                (e.st.focus ? e.content.find(e.st.focus).eq(0) : e.wrap).focus()
            },
            _onFocusIn: function(i) { if (i.target !== e.wrap[0] && !t.contains(e.wrap[0], i.target)) return e._setFocus(), !1 },
            _parseMarkup: function(e, i, n) {
                var o;
                n.data && (i = t.extend(n.data, i)), k(d, [e, i, n]), t.each(i, function(i, n) { if (void 0 === n || n === !1) return !0; if (o = i.split("_"), o.length > 1) { var r = e.find(m + "-" + o[0]); if (r.length > 0) { var s = o[1]; "replaceWith" === s ? r[0] !== n[0] && r.replaceWith(n) : "img" === s ? r.is("img") ? r.attr("src", n) : r.replaceWith(t("<img>").attr("src", n).attr("class", r.attr("class"))) : r.attr(o[1], n) } } else e.find(m + "-" + i).html(n) })
            },
            _getScrollbarSize: function() {
                if (void 0 === e.scrollbarSize) {
                    var t = document.createElement("div");
                    t.style.cssText = "width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;", document.body.appendChild(t), e.scrollbarSize = t.offsetWidth - t.clientWidth, document.body.removeChild(t)
                }
                return e.scrollbarSize
            }
        }, t.magnificPopup = { instance: null, proto: b.prototype, modules: [], open: function(e, i) { return T(), e = e ? t.extend(!0, {}, e) : {}, e.isObj = !0, e.index = i || 0, this.instance.open(e) }, close: function() { return t.magnificPopup.instance && t.magnificPopup.instance.close() }, registerModule: function(e, i) { i.options && (t.magnificPopup.defaults[e] = i.options), t.extend(this.proto, i.proto), this.modules.push(e) }, defaults: { disableOn: 0, key: null, midClick: !1, mainClass: "", preloader: !0, focus: "", closeOnContentClick: !1, closeOnBgClick: !0, closeBtnInside: !0, showCloseBtn: !0, enableEscapeKey: !0, modal: !1, alignTop: !1, removalDelay: 0, prependTo: null, fixedContentPos: "auto", fixedBgPos: "auto", overflowY: "auto", closeMarkup: '<button title="%title%" type="button" class="mfp-close">&#215;</button>', tClose: "Close (Esc)", tLoading: "Loading...", autoFocusLast: !0 } }, t.fn.magnificPopup = function(i) {
            T();
            var n = t(this);
            if ("string" == typeof i)
                if ("open" === i) {
                    var o, r = w ? n.data("magnificPopup") : n[0].magnificPopup,
                        s = parseInt(arguments[1], 10) || 0;
                    r.items ? o = r.items[s] : (o = n, r.delegate && (o = o.find(r.delegate)), o = o.eq(s)), e._openClick({ mfpEl: o }, n, r)
                } else e.isOpen && e[i].apply(e, Array.prototype.slice.call(arguments, 1));
            else i = t.extend(!0, {}, i), w ? n.data("magnificPopup", i) : n[0].magnificPopup = i, e.addGroup(n, i);
            return n
        };
        var _, j, I, A = "inline",
            O = function() { I && (j.after(I.addClass(_)).detach(), I = null) };
        t.magnificPopup.registerModule(A, {
            options: { hiddenClass: "hide", markup: "", tNotFound: "Content not found" },
            proto: {
                initInline: function() { e.types.push(A), S(a + "." + A, function() { O() }) },
                getInline: function(i, n) {
                    if (O(), i.src) {
                        var o = e.st.inline,
                            r = t(i.src);
                        if (r.length) {
                            var s = r[0].parentNode;
                            s && s.tagName && (j || (_ = o.hiddenClass, j = C(_), _ = "mfp-" + _), I = r.after(j).detach().removeClass(_)), e.updateStatus("ready")
                        } else e.updateStatus("error", o.tNotFound), r = t("<div>");
                        return i.inlineElement = r, r
                    }
                    return e.updateStatus("ready"), e._parseMarkup(n, {}, i), n
                }
            }
        });
        var L, D = "ajax",
            M = function() { L && t(document.body).removeClass(L) },
            Q = function() { M(), e.req && e.req.abort() };
        t.magnificPopup.registerModule(D, {
            options: { settings: null, cursor: "mfp-ajax-cur", tError: '<a href="%url%">The content</a> could not be loaded.' },
            proto: {
                initAjax: function() { e.types.push(D), L = e.st.ajax.cursor, S(a + "." + D, Q), S("BeforeChange." + D, Q) },
                getAjax: function(i) {
                    L && t(document.body).addClass(L), e.updateStatus("loading");
                    var n = t.extend({
                        url: i.src,
                        success: function(n, o, r) {
                            var s = { data: n, xhr: r };
                            k("ParseAjax", s), e.appendContent(t(s.data), D), i.finished = !0, M(), e._setFocus(), setTimeout(function() { e.wrap.addClass(g) }, 16), e.updateStatus("ready"), k("AjaxContentAdded")
                        },
                        error: function() { M(), i.finished = i.loadError = !0, e.updateStatus("error", e.st.ajax.tError.replace("%url%", i.src)) }
                    }, e.st.ajax.settings);
                    return e.req = t.ajax(n), ""
                }
            }
        });
        var z, F = function(i) { if (i.data && void 0 !== i.data.title) return i.data.title; var n = e.st.image.titleSrc; if (n) { if (t.isFunction(n)) return n.call(e, i); if (i.el) return i.el.attr(n) || "" } return "" };
        t.magnificPopup.registerModule("image", {
            options: { markup: '<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>', cursor: "mfp-zoom-out-cur", titleSrc: "title", verticalFit: !0, tError: '<a href="%url%">The image</a> could not be loaded.' },
            proto: {
                initImage: function() {
                    var i = e.st.image,
                        n = ".image";
                    e.types.push("image"), S(h + n, function() { "image" === e.currItem.type && i.cursor && t(document.body).addClass(i.cursor) }), S(a + n, function() { i.cursor && t(document.body).removeClass(i.cursor), x.off("resize" + m) }), S("Resize" + n, e.resizeImage), e.isLowIE && S("AfterChange", e.resizeImage)
                },
                resizeImage: function() {
                    var t = e.currItem;
                    if (t && t.img && e.st.image.verticalFit) {
                        var i = 0;
                        e.isLowIE && (i = parseInt(t.img.css("padding-top"), 10) + parseInt(t.img.css("padding-bottom"), 10)), t.img.css("max-height", e.wH - i)
                    }
                },
                _onImageHasSize: function(t) { t.img && (t.hasSize = !0, z && clearInterval(z), t.isCheckingImgSize = !1, k("ImageHasSize", t), t.imgHidden && (e.content && e.content.removeClass("mfp-loading"), t.imgHidden = !1)) },
                findImageSize: function(t) {
                    var i = 0,
                        n = t.img[0],
                        o = function(r) { z && clearInterval(z), z = setInterval(function() { return n.naturalWidth > 0 ? void e._onImageHasSize(t) : (i > 200 && clearInterval(z), i++, void(3 === i ? o(10) : 40 === i ? o(50) : 100 === i && o(500))) }, r) };
                    o(1)
                },
                getImage: function(i, n) {
                    var o = 0,
                        r = function() { i && (i.img[0].complete ? (i.img.off(".mfploader"), i === e.currItem && (e._onImageHasSize(i), e.updateStatus("ready")), i.hasSize = !0, i.loaded = !0, k("ImageLoadComplete")) : (o++, o < 200 ? setTimeout(r, 100) : s())) },
                        s = function() { i && (i.img.off(".mfploader"), i === e.currItem && (e._onImageHasSize(i), e.updateStatus("error", a.tError.replace("%url%", i.src))), i.hasSize = !0, i.loaded = !0, i.loadError = !0) },
                        a = e.st.image,
                        l = n.find(".mfp-img");
                    if (l.length) {
                        var c = document.createElement("img");
                        c.className = "mfp-img", i.el && i.el.find("img").length && (c.alt = i.el.find("img").attr("alt")), i.img = t(c).on("load.mfploader", r).on("error.mfploader", s), c.src = i.src, l.is("img") && (i.img = i.img.clone()), c = i.img[0], c.naturalWidth > 0 ? i.hasSize = !0 : c.width || (i.hasSize = !1)
                    }
                    return e._parseMarkup(n, { title: F(i), img_replaceWith: i.img }, i), e.resizeImage(), i.hasSize ? (z && clearInterval(z), i.loadError ? (n.addClass("mfp-loading"), e.updateStatus("error", a.tError.replace("%url%", i.src))) : (n.removeClass("mfp-loading"), e.updateStatus("ready")), n) : (e.updateStatus("loading"), i.loading = !0, i.hasSize || (i.imgHidden = !0, n.addClass("mfp-loading"), e.findImageSize(i)), n)
                }
            }
        });
        var W, N = function() { return void 0 === W && (W = void 0 !== document.createElement("p").style.MozTransform), W };
        t.magnificPopup.registerModule("zoom", {
            options: { enabled: !1, easing: "ease-in-out", duration: 300, opener: function(t) { return t.is("img") ? t : t.find("img") } },
            proto: {
                initZoom: function() {
                    var t, i = e.st.zoom,
                        n = ".zoom";
                    if (i.enabled && e.supportsTransition) {
                        var o, r, s = i.duration,
                            c = function(t) {
                                var e = t.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),
                                    n = "all " + i.duration / 1e3 + "s " + i.easing,
                                    o = { position: "fixed", zIndex: 9999, left: 0, top: 0, "-webkit-backface-visibility": "hidden" },
                                    r = "transition";
                                return o["-webkit-" + r] = o["-moz-" + r] = o["-o-" + r] = o[r] = n, e.css(o), e
                            },
                            u = function() { e.content.css("visibility", "visible") };
                        S("BuildControls" + n, function() {
                            if (e._allowZoom()) {
                                if (clearTimeout(o), e.content.css("visibility", "hidden"), t = e._getItemToZoom(), !t) return void u();
                                r = c(t), r.css(e._getOffset()), e.wrap.append(r), o = setTimeout(function() { r.css(e._getOffset(!0)), o = setTimeout(function() { u(), setTimeout(function() { r.remove(), t = r = null, k("ZoomAnimationEnded") }, 16) }, s) }, 16)
                            }
                        }), S(l + n, function() {
                            if (e._allowZoom()) {
                                if (clearTimeout(o), e.st.removalDelay = s, !t) {
                                    if (t = e._getItemToZoom(), !t) return;
                                    r = c(t)
                                }
                                r.css(e._getOffset(!0)), e.wrap.append(r), e.content.css("visibility", "hidden"), setTimeout(function() { r.css(e._getOffset()) }, 16)
                            }
                        }), S(a + n, function() { e._allowZoom() && (u(), r && r.remove(), t = null) })
                    }
                },
                _allowZoom: function() { return "image" === e.currItem.type },
                _getItemToZoom: function() { return !!e.currItem.hasSize && e.currItem.img },
                _getOffset: function(i) {
                    var n;
                    n = i ? e.currItem.img : e.st.zoom.opener(e.currItem.el || e.currItem);
                    var o = n.offset(),
                        r = parseInt(n.css("padding-top"), 10),
                        s = parseInt(n.css("padding-bottom"), 10);
                    o.top -= t(window).scrollTop() - r;
                    var a = { width: n.width(), height: (w ? n.innerHeight() : n[0].offsetHeight) - s - r };
                    return N() ? a["-moz-transform"] = a.transform = "translate(" + o.left + "px," + o.top + "px)" : (a.left = o.left, a.top = o.top), a
                }
            }
        });
        var B = "iframe",
            H = "//about:blank",
            $ = function(t) {
                if (e.currTemplate[B]) {
                    var i = e.currTemplate[B].find("iframe");
                    i.length && (t || (i[0].src = H), e.isIE8 && i.css("display", t ? "block" : "none"))
                }
            };
        t.magnificPopup.registerModule(B, {
            options: { markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>', srcAction: "iframe_src", patterns: { youtube: { index: "youtube.com", id: "v=", src: "//www.youtube.com/embed/%id%?autoplay=1" }, vimeo: { index: "vimeo.com/", id: "/", src: "//player.vimeo.com/video/%id%?autoplay=1" }, gmaps: { index: "//maps.google.", src: "%id%&output=embed" } } },
            proto: {
                initIframe: function() { e.types.push(B), S("BeforeChange", function(t, e, i) { e !== i && (e === B ? $() : i === B && $(!0)) }), S(a + "." + B, function() { $() }) },
                getIframe: function(i, n) {
                    var o = i.src,
                        r = e.st.iframe;
                    t.each(r.patterns, function() { if (o.indexOf(this.index) > -1) return this.id && (o = "string" == typeof this.id ? o.substr(o.lastIndexOf(this.id) + this.id.length, o.length) : this.id.call(this, o)), o = this.src.replace("%id%", o), !1 });
                    var s = {};
                    return r.srcAction && (s[r.srcAction] = o), e._parseMarkup(n, s, i), e.updateStatus("ready"), n
                }
            }
        });
        var V = function(t) { var i = e.items.length; return t > i - 1 ? t - i : t < 0 ? i + t : t },
            R = function(t, e, i) { return t.replace(/%curr%/gi, e + 1).replace(/%total%/gi, i) };
        t.magnificPopup.registerModule("gallery", {
            options: { enabled: !1, arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', preload: [0, 2], navigateByImgClick: !0, arrows: !0, tPrev: "Previous (Left arrow key)", tNext: "Next (Right arrow key)", tCounter: "%curr% of %total%" },
            proto: {
                initGallery: function() {
                    var i = e.st.gallery,
                        o = ".mfp-gallery";
                    return e.direction = !0, !(!i || !i.enabled) && (r += " mfp-gallery", S(h + o, function() { i.navigateByImgClick && e.wrap.on("click" + o, ".mfp-img", function() { if (e.items.length > 1) return e.next(), !1 }), n.on("keydown" + o, function(t) { 37 === t.keyCode ? e.prev() : 39 === t.keyCode && e.next() }) }), S("UpdateStatus" + o, function(t, i) { i.text && (i.text = R(i.text, e.currItem.index, e.items.length)) }), S(d + o, function(t, n, o, r) {
                        var s = e.items.length;
                        o.counter = s > 1 ? R(i.tCounter, r.index, s) : ""
                    }), S("BuildControls" + o, function() {
                        if (e.items.length > 1 && i.arrows && !e.arrowLeft) {
                            var n = i.arrowMarkup,
                                o = e.arrowLeft = t(n.replace(/%title%/gi, i.tPrev).replace(/%dir%/gi, "left")).addClass(y),
                                r = e.arrowRight = t(n.replace(/%title%/gi, i.tNext).replace(/%dir%/gi, "right")).addClass(y);
                            o.click(function() { e.prev() }), r.click(function() { e.next() }), e.container.append(o.add(r))
                        }
                    }), S(p + o, function() { e._preloadTimeout && clearTimeout(e._preloadTimeout), e._preloadTimeout = setTimeout(function() { e.preloadNearbyImages(), e._preloadTimeout = null }, 16) }), void S(a + o, function() { n.off(o), e.wrap.off("click" + o), e.arrowRight = e.arrowLeft = null }))
                },
                next: function() { e.direction = !0, e.index = V(e.index + 1), e.updateItemHTML() },
                prev: function() { e.direction = !1, e.index = V(e.index - 1), e.updateItemHTML() },
                goTo: function(t) {
                    e.direction = t >= e.index,
                        e.index = t, e.updateItemHTML()
                },
                preloadNearbyImages: function() {
                    var t, i = e.st.gallery.preload,
                        n = Math.min(i[0], e.items.length),
                        o = Math.min(i[1], e.items.length);
                    for (t = 1; t <= (e.direction ? o : n); t++) e._preloadItem(e.index + t);
                    for (t = 1; t <= (e.direction ? n : o); t++) e._preloadItem(e.index - t)
                },
                _preloadItem: function(i) {
                    if (i = V(i), !e.items[i].preloaded) {
                        var n = e.items[i];
                        n.parsed || (n = e.parseEl(i)), k("LazyLoad", n), "image" === n.type && (n.img = t('<img class="mfp-img" />').on("load.mfploader", function() { n.hasSize = !0 }).on("error.mfploader", function() { n.hasSize = !0, n.loadError = !0, k("LazyLoadError", n) }).attr("src", n.src)), n.preloaded = !0
                    }
                }
            }
        });
        var q = "retina";
        t.magnificPopup.registerModule(q, {
            options: { replaceSrc: function(t) { return t.src.replace(/\.\w+$/, function(t) { return "@2x" + t }) }, ratio: 1 },
            proto: {
                initRetina: function() {
                    if (window.devicePixelRatio > 1) {
                        var t = e.st.retina,
                            i = t.ratio;
                        i = isNaN(i) ? i() : i, i > 1 && (S("ImageHasSize." + q, function(t, e) { e.img.css({ "max-width": e.img[0].naturalWidth / i, width: "100%" }) }), S("ElementParse." + q, function(e, n) { n.src = t.replaceSrc(n, i) }))
                    }
                }
            }
        }), T()
    })
}, function(t, e) {
    /*!
    	Waypoints - 4.0.1
    	Copyright © 2011-2016 Caleb Troughton
    	Licensed under the MIT license.
    	https://github.com/imakewebthings/waypoints/blob/master/licenses.txt
    	*/
    ! function() {
        "use strict";

        function t(n) {
            if (!n) throw new Error("No options passed to Waypoint constructor");
            if (!n.element) throw new Error("No element option passed to Waypoint constructor");
            if (!n.handler) throw new Error("No handler option passed to Waypoint constructor");
            this.key = "waypoint-" + e, this.options = t.Adapter.extend({}, t.defaults, n), this.element = this.options.element, this.adapter = new t.Adapter(this.element), this.callback = n.handler, this.axis = this.options.horizontal ? "horizontal" : "vertical", this.enabled = this.options.enabled, this.triggerPoint = null, this.group = t.Group.findOrCreate({ name: this.options.group, axis: this.axis }), this.context = t.Context.findOrCreateByElement(this.options.context), t.offsetAliases[this.options.offset] && (this.options.offset = t.offsetAliases[this.options.offset]), this.group.add(this), this.context.add(this), i[this.key] = this, e += 1
        }
        var e = 0,
            i = {};
        t.prototype.queueTrigger = function(t) { this.group.queueTrigger(this, t) }, t.prototype.trigger = function(t) { this.enabled && this.callback && this.callback.apply(this, t) }, t.prototype.destroy = function() { this.context.remove(this), this.group.remove(this), delete i[this.key] }, t.prototype.disable = function() { return this.enabled = !1, this }, t.prototype.enable = function() { return this.context.refresh(), this.enabled = !0, this }, t.prototype.next = function() { return this.group.next(this) }, t.prototype.previous = function() { return this.group.previous(this) }, t.invokeAll = function(t) { var e = []; for (var n in i) e.push(i[n]); for (var o = 0, r = e.length; o < r; o++) e[o][t]() }, t.destroyAll = function() { t.invokeAll("destroy") }, t.disableAll = function() { t.invokeAll("disable") }, t.enableAll = function() { t.Context.refreshAll(); for (var e in i) i[e].enabled = !0; return this }, t.refreshAll = function() { t.Context.refreshAll() }, t.viewportHeight = function() { return window.innerHeight || document.documentElement.clientHeight }, t.viewportWidth = function() { return document.documentElement.clientWidth }, t.adapters = [], t.defaults = { context: window, continuous: !0, enabled: !0, group: "default", horizontal: !1, offset: 0 }, t.offsetAliases = { "bottom-in-view": function() { return this.context.innerHeight() - this.adapter.outerHeight() }, "right-in-view": function() { return this.context.innerWidth() - this.adapter.outerWidth() } }, window.Waypoint = t
    }(),
    function() {
        "use strict";

        function t(t) { window.setTimeout(t, 1e3 / 60) }

        function e(t) { this.element = t, this.Adapter = o.Adapter, this.adapter = new this.Adapter(t), this.key = "waypoint-context-" + i, this.didScroll = !1, this.didResize = !1, this.oldScroll = { x: this.adapter.scrollLeft(), y: this.adapter.scrollTop() }, this.waypoints = { vertical: {}, horizontal: {} }, t.waypointContextKey = this.key, n[t.waypointContextKey] = this, i += 1, o.windowContext || (o.windowContext = !0, o.windowContext = new e(window)), this.createThrottledScrollHandler(), this.createThrottledResizeHandler() }
        var i = 0,
            n = {},
            o = window.Waypoint,
            r = window.onload;
        e.prototype.add = function(t) {
            var e = t.options.horizontal ? "horizontal" : "vertical";
            this.waypoints[e][t.key] = t, this.refresh()
        }, e.prototype.checkEmpty = function() {
            var t = this.Adapter.isEmptyObject(this.waypoints.horizontal),
                e = this.Adapter.isEmptyObject(this.waypoints.vertical),
                i = this.element == this.element.window;
            t && e && !i && (this.adapter.off(".waypoints"), delete n[this.key])
        }, e.prototype.createThrottledResizeHandler = function() {
            function t() { e.handleResize(), e.didResize = !1 }
            var e = this;
            this.adapter.on("resize.waypoints", function() { e.didResize || (e.didResize = !0, o.requestAnimationFrame(t)) })
        }, e.prototype.createThrottledScrollHandler = function() {
            function t() { e.handleScroll(), e.didScroll = !1 }
            var e = this;
            this.adapter.on("scroll.waypoints", function() { e.didScroll && !o.isTouch || (e.didScroll = !0, o.requestAnimationFrame(t)) })
        }, e.prototype.handleResize = function() { o.Context.refreshAll() }, e.prototype.handleScroll = function() {
            var t = {},
                e = { horizontal: { newScroll: this.adapter.scrollLeft(), oldScroll: this.oldScroll.x, forward: "right", backward: "left" }, vertical: { newScroll: this.adapter.scrollTop(), oldScroll: this.oldScroll.y, forward: "down", backward: "up" } };
            for (var i in e) {
                var n = e[i],
                    o = n.newScroll > n.oldScroll,
                    r = o ? n.forward : n.backward;
                for (var s in this.waypoints[i]) {
                    var a = this.waypoints[i][s];
                    if (null !== a.triggerPoint) {
                        var l = n.oldScroll < a.triggerPoint,
                            c = n.newScroll >= a.triggerPoint,
                            u = l && c,
                            d = !l && !c;
                        (u || d) && (a.queueTrigger(r), t[a.group.id] = a.group)
                    }
                }
            }
            for (var h in t) t[h].flushTriggers();
            this.oldScroll = { x: e.horizontal.newScroll, y: e.vertical.newScroll }
        }, e.prototype.innerHeight = function() { return this.element == this.element.window ? o.viewportHeight() : this.adapter.innerHeight() }, e.prototype.remove = function(t) { delete this.waypoints[t.axis][t.key], this.checkEmpty() }, e.prototype.innerWidth = function() { return this.element == this.element.window ? o.viewportWidth() : this.adapter.innerWidth() }, e.prototype.destroy = function() {
            var t = [];
            for (var e in this.waypoints)
                for (var i in this.waypoints[e]) t.push(this.waypoints[e][i]);
            for (var n = 0, o = t.length; n < o; n++) t[n].destroy()
        }, e.prototype.refresh = function() {
            var t, e = this.element == this.element.window,
                i = e ? void 0 : this.adapter.offset(),
                n = {};
            this.handleScroll(), t = { horizontal: { contextOffset: e ? 0 : i.left, contextScroll: e ? 0 : this.oldScroll.x, contextDimension: this.innerWidth(), oldScroll: this.oldScroll.x, forward: "right", backward: "left", offsetProp: "left" }, vertical: { contextOffset: e ? 0 : i.top, contextScroll: e ? 0 : this.oldScroll.y, contextDimension: this.innerHeight(), oldScroll: this.oldScroll.y, forward: "down", backward: "up", offsetProp: "top" } };
            for (var r in t) {
                var s = t[r];
                for (var a in this.waypoints[r]) {
                    var l, c, u, d, h, p = this.waypoints[r][a],
                        f = p.options.offset,
                        m = p.triggerPoint,
                        g = 0,
                        v = null == m;
                    p.element !== p.element.window && (g = p.adapter.offset()[s.offsetProp]), "function" == typeof f ? f = f.apply(p) : "string" == typeof f && (f = parseFloat(f), p.options.offset.indexOf("%") > -1 && (f = Math.ceil(s.contextDimension * f / 100))), l = s.contextScroll - s.contextOffset, p.triggerPoint = Math.floor(g + l - f), c = m < s.oldScroll, u = p.triggerPoint >= s.oldScroll, d = c && u, h = !c && !u, !v && d ? (p.queueTrigger(s.backward), n[p.group.id] = p.group) : !v && h ? (p.queueTrigger(s.forward), n[p.group.id] = p.group) : v && s.oldScroll >= p.triggerPoint && (p.queueTrigger(s.forward), n[p.group.id] = p.group)
                }
            }
            return o.requestAnimationFrame(function() { for (var t in n) n[t].flushTriggers() }), this
        }, e.findOrCreateByElement = function(t) { return e.findByElement(t) || new e(t) }, e.refreshAll = function() { for (var t in n) n[t].refresh() }, e.findByElement = function(t) { return n[t.waypointContextKey] }, window.onload = function() { r && r(), e.refreshAll() }, o.requestAnimationFrame = function(e) {
            var i = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || t;
            i.call(window, e)
        }, o.Context = e
    }(),
    function() {
        "use strict";

        function t(t, e) { return t.triggerPoint - e.triggerPoint }

        function e(t, e) { return e.triggerPoint - t.triggerPoint }

        function i(t) { this.name = t.name, this.axis = t.axis, this.id = this.name + "-" + this.axis, this.waypoints = [], this.clearTriggerQueues(), n[this.axis][this.name] = this }
        var n = { vertical: {}, horizontal: {} },
            o = window.Waypoint;
        i.prototype.add = function(t) { this.waypoints.push(t) }, i.prototype.clearTriggerQueues = function() { this.triggerQueues = { up: [], down: [], left: [], right: [] } }, i.prototype.flushTriggers = function() {
            for (var i in this.triggerQueues) {
                var n = this.triggerQueues[i],
                    o = "up" === i || "left" === i;
                n.sort(o ? e : t);
                for (var r = 0, s = n.length; r < s; r += 1) {
                    var a = n[r];
                    (a.options.continuous || r === n.length - 1) && a.trigger([i])
                }
            }
            this.clearTriggerQueues()
        }, i.prototype.next = function(e) {
            this.waypoints.sort(t);
            var i = o.Adapter.inArray(e, this.waypoints),
                n = i === this.waypoints.length - 1;
            return n ? null : this.waypoints[i + 1]
        }, i.prototype.previous = function(e) { this.waypoints.sort(t); var i = o.Adapter.inArray(e, this.waypoints); return i ? this.waypoints[i - 1] : null }, i.prototype.queueTrigger = function(t, e) { this.triggerQueues[e].push(t) }, i.prototype.remove = function(t) {
            var e = o.Adapter.inArray(t, this.waypoints);
            e > -1 && this.waypoints.splice(e, 1)
        }, i.prototype.first = function() { return this.waypoints[0] }, i.prototype.last = function() { return this.waypoints[this.waypoints.length - 1] }, i.findOrCreate = function(t) { return n[t.axis][t.name] || new i(t) }, o.Group = i
    }(),
    function() {
        "use strict";

        function t(t) { this.$element = e(t) }
        var e = window.jQuery,
            i = window.Waypoint;
        e.each(["innerHeight", "innerWidth", "off", "offset", "on", "outerHeight", "outerWidth", "scrollLeft", "scrollTop"], function(e, i) { t.prototype[i] = function() { var t = Array.prototype.slice.call(arguments); return this.$element[i].apply(this.$element, t) } }), e.each(["extend", "inArray", "isEmptyObject"], function(i, n) { t[n] = e[n] }), i.adapters.push({ name: "jquery", Adapter: t }), i.Adapter = t
    }(),
    function() {
        "use strict";

        function t(t) {
            return function() {
                var i = [],
                    n = arguments[0];
                return t.isFunction(arguments[0]) && (n = t.extend({}, arguments[1]), n.handler = arguments[0]), this.each(function() { var o = t.extend({}, n, { element: this }); "string" == typeof o.context && (o.context = t(this).closest(o.context)[0]), i.push(new e(o)) }), i
            }
        }
        var e = window.Waypoint;
        window.jQuery && (window.jQuery.fn.waypoint = t(window.jQuery)), window.Zepto && (window.Zepto.fn.waypoint = t(window.Zepto))
    }()
}, function(t, e) { /*! npm.im/object-fit-images 3.2.3 */
    "use strict";

    function i(t, e) { return "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='" + t + "' height='" + e + "'%3E%3C/svg%3E" }

    function n(t) {
        if (t.srcset && !v && window.picturefill) {
            var e = window.picturefill._;
            t[e.ns] && t[e.ns].evaled || e.fillImg(t, { reselect: !0 }), t[e.ns].curSrc || (t[e.ns].supported = !1, e.fillImg(t, { reselect: !0 })), t.currentSrc = t[e.ns].curSrc || t.src
        }
    }

    function o(t) { for (var e, i = getComputedStyle(t).fontFamily, n = {}; null !== (e = h.exec(i));) n[e[1]] = e[2]; return n }

    function r(t, e, n) {
        var o = i(e || 1, n || 0);
        y.call(t, "src") !== o && b.call(t, "src", o)
    }

    function s(t, e) { t.naturalWidth ? e(t) : setTimeout(s, 100, t, e) }

    function a(t) {
        var e = o(t),
            i = t[d];
        if (e["object-fit"] = e["object-fit"] || "fill", !i.img) { if ("fill" === e["object-fit"]) return; if (!i.skipTest && f && !e["object-position"]) return }
        if (!i.img) { i.img = new Image(t.width, t.height), i.img.srcset = y.call(t, "data-ofi-srcset") || t.srcset, i.img.src = y.call(t, "data-ofi-src") || t.src, b.call(t, "data-ofi-src", t.src), t.srcset && b.call(t, "data-ofi-srcset", t.srcset), r(t, t.naturalWidth || t.width, t.naturalHeight || t.height), t.srcset && (t.srcset = ""); try { l(t) } catch (t) { window.console && console.warn("https://bit.ly/ofi-old-browser") } }
        n(i.img), t.style.backgroundImage = 'url("' + (i.img.currentSrc || i.img.src).replace(/"/g, '\\"') + '")', t.style.backgroundPosition = e["object-position"] || "center", t.style.backgroundRepeat = "no-repeat", t.style.backgroundOrigin = "content-box", /scale-down/.test(e["object-fit"]) ? s(i.img, function() { i.img.naturalWidth > t.width || i.img.naturalHeight > t.height ? t.style.backgroundSize = "contain" : t.style.backgroundSize = "auto" }) : t.style.backgroundSize = e["object-fit"].replace("none", "auto").replace("fill", "100% 100%"), s(i.img, function(e) { r(t, e.naturalWidth, e.naturalHeight) })
    }

    function l(t) {
        var e = { get: function(e) { return t[d].img[e ? e : "src"] }, set: function(e, i) { return t[d].img[i ? i : "src"] = e, b.call(t, "data-ofi-" + i, e), a(t), e } };
        Object.defineProperty(t, "src", e), Object.defineProperty(t, "currentSrc", { get: function() { return e.get("currentSrc") } }), Object.defineProperty(t, "srcset", { get: function() { return e.get("srcset") }, set: function(t) { return e.set(t, "srcset") } })
    }

    function c() {
        function t(t, e) { return t[d] && t[d].img && ("src" === e || "srcset" === e) ? t[d].img : t }
        m || (HTMLImageElement.prototype.getAttribute = function(e) { return y.call(t(this, e), e) }, HTMLImageElement.prototype.setAttribute = function(e, i) { return b.call(t(this, e), e, String(i)) })
    }

    function u(t, e) {
        var i = !w && !t;
        if (e = e || {}, t = t || "img", m && !e.skipTest || !g) return !1;
        "img" === t ? t = document.getElementsByTagName("img") : "string" == typeof t ? t = document.querySelectorAll(t) : "length" in t || (t = [t]);
        for (var n = 0; n < t.length; n++) t[n][d] = t[n][d] || { skipTest: e.skipTest }, a(t[n]);
        i && (document.body.addEventListener("load", function(t) { "IMG" === t.target.tagName && u(t.target, { skipTest: e.skipTest }) }, !0), w = !0, t = "img"), e.watchMQ && window.addEventListener("resize", u.bind(null, t, { skipTest: e.skipTest }))
    }
    var d = "bfred-it:object-fit-images",
        h = /(object-fit|object-position)\s*:\s*([-\w\s%]+)/g,
        p = "undefined" == typeof Image ? { style: { "object-position": 1 } } : new Image,
        f = "object-fit" in p.style,
        m = "object-position" in p.style,
        g = "background-size" in p.style,
        v = "string" == typeof p.currentSrc,
        y = p.getAttribute,
        b = p.setAttribute,
        w = !1;
    u.supportsObjectFit = f, u.supportsObjectPosition = m, c(), t.exports = u
}, function(t, e) {
    ! function(t, e, i) {
        function n(e, i) { this.bodyOverflowX, this.callbacks = { hide: [], show: [] }, this.checkInterval = null, this.Content, this.$el = t(e), this.$elProxy, this.elProxyPosition, this.enabled = !0, this.options = t.extend({}, l, i), this.mouseIsOverProxy = !1, this.namespace = "tooltipster-" + Math.round(1e5 * Math.random()), this.Status = "hidden", this.timerHide = null, this.timerShow = null, this.$tooltip, this.options.iconTheme = this.options.iconTheme.replace(".", ""), this.options.theme = this.options.theme.replace(".", ""), this._init() }

        function o(e, i) { var n = !0; return t.each(e, function(t, o) { if ("undefined" == typeof i[t] || e[t] !== i[t]) return n = !1, !1 }), n }

        function r() { return !u && c }

        function s() {
            var t = i.body || i.documentElement,
                e = t.style,
                n = "transition";
            if ("string" == typeof e[n]) return !0;
            v = ["Moz", "Webkit", "Khtml", "O", "ms"], n = n.charAt(0).toUpperCase() + n.substr(1);
            for (var o = 0; o < v.length; o++)
                if ("string" == typeof e[v[o] + n]) return !0;
            return !1
        }
        var a = "tooltipster",
            l = { animation: "fade", arrow: !0, arrowColor: "", autoClose: !0, content: null, contentAsHTML: !1, contentCloning: !0, debug: !0, delay: 200, minWidth: 0, maxWidth: null, functionInit: function(t, e) {}, functionBefore: function(t, e) { e() }, functionReady: function(t, e) {}, functionAfter: function(t) {}, hideOnClick: !1, icon: "(?)", iconCloning: !0, iconDesktop: !1, iconTouch: !1, iconTheme: "tooltipster-icon", interactive: !1, interactiveTolerance: 350, multiple: !1, offsetX: 0, offsetY: 0, onlyOne: !1, position: "top", positionTracker: !1, positionTrackerCallback: function(t) { "hover" == this.option("trigger") && this.option("autoClose") && this.hide() }, restoration: "current", speed: 350, timer: 0, theme: "tooltipster-default", touchDevices: !0, trigger: "hover", updateAnimation: !0 };
        n.prototype = {
            _init: function() {
                var e = this;
                if (i.querySelector) {
                    var n = null;
                    void 0 === e.$el.data("tooltipster-initialTitle") && (n = e.$el.attr("title"), void 0 === n && (n = null), e.$el.data("tooltipster-initialTitle", n)), null !== e.options.content ? e._content_set(e.options.content) : e._content_set(n);
                    var o = e.options.functionInit.call(e.$el, e.$el, e.Content);
                    "undefined" != typeof o && e._content_set(o), e.$el.removeAttr("title").addClass("tooltipstered"), !c && e.options.iconDesktop || c && e.options.iconTouch ? ("string" == typeof e.options.icon ? (e.$elProxy = t('<span class="' + e.options.iconTheme + '"></span>'), e.$elProxy.text(e.options.icon)) : e.options.iconCloning ? e.$elProxy = e.options.icon.clone(!0) : e.$elProxy = e.options.icon, e.$elProxy.insertAfter(e.$el)) : e.$elProxy = e.$el, "hover" == e.options.trigger ? (e.$elProxy.on("mouseenter." + e.namespace, function() { r() && !e.options.touchDevices || (e.mouseIsOverProxy = !0, e._show()) }).on("mouseleave." + e.namespace, function() { r() && !e.options.touchDevices || (e.mouseIsOverProxy = !1) }), c && e.options.touchDevices && e.$elProxy.on("touchstart." + e.namespace, function() { e._showNow() })) : "click" == e.options.trigger && e.$elProxy.on("click." + e.namespace, function() { r() && !e.options.touchDevices || e._show() })
                }
            },
            _show: function() {
                var t = this;
                "shown" != t.Status && "appearing" != t.Status && (t.options.delay ? t.timerShow = setTimeout(function() {
                    ("click" == t.options.trigger || "hover" == t.options.trigger && t.mouseIsOverProxy) && t._showNow()
                }, t.options.delay) : t._showNow())
            },
            _showNow: function(i) {
                var n = this;
                n.options.functionBefore.call(n.$el, n.$el, function() {
                    if (n.enabled && null !== n.Content) {
                        i && n.callbacks.show.push(i), n.callbacks.hide = [], clearTimeout(n.timerShow), n.timerShow = null, clearTimeout(n.timerHide), n.timerHide = null, n.options.onlyOne && t(".tooltipstered").not(n.$el).each(function(e, i) {
                            var n = t(i),
                                o = n.data("tooltipster-ns");
                            t.each(o, function(t, e) {
                                var i = n.data(e),
                                    o = i.status(),
                                    r = i.option("autoClose");
                                "hidden" !== o && "disappearing" !== o && r && i.hide()
                            })
                        });
                        var o = function() { n.Status = "shown", t.each(n.callbacks.show, function(t, e) { e.call(n.$el) }), n.callbacks.show = [] };
                        if ("hidden" !== n.Status) { var r = 0; "disappearing" === n.Status ? (n.Status = "appearing", s() ? (n.$tooltip.clearQueue().removeClass("tooltipster-dying").addClass("tooltipster-" + n.options.animation + "-show"), n.options.speed > 0 && n.$tooltip.delay(n.options.speed), n.$tooltip.queue(o)) : n.$tooltip.stop().fadeIn(o)) : "shown" === n.Status && o() } else {
                            n.Status = "appearing";
                            var r = n.options.speed;
                            n.bodyOverflowX = t("body").css("overflow-x"), t("body").css("overflow-x", "hidden");
                            var a = "tooltipster-" + n.options.animation,
                                l = "-webkit-transition-duration: " + n.options.speed + "ms; -webkit-animation-duration: " + n.options.speed + "ms; -moz-transition-duration: " + n.options.speed + "ms; -moz-animation-duration: " + n.options.speed + "ms; -o-transition-duration: " + n.options.speed + "ms; -o-animation-duration: " + n.options.speed + "ms; -ms-transition-duration: " + n.options.speed + "ms; -ms-animation-duration: " + n.options.speed + "ms; transition-duration: " + n.options.speed + "ms; animation-duration: " + n.options.speed + "ms;",
                                u = n.options.minWidth ? "min-width:" + Math.round(n.options.minWidth) + "px;" : "",
                                d = n.options.maxWidth ? "max-width:" + Math.round(n.options.maxWidth) + "px;" : "",
                                h = n.options.interactive ? "pointer-events: auto;" : "";
                            if (n.$tooltip = t('<div class="tooltipster-base ' + n.options.theme + '" style="' + u + " " + d + " " + h + " " + l + '"><div class="tooltipster-content"></div></div>'), s() && n.$tooltip.addClass(a), n._content_insert(), n.$tooltip.appendTo("body"), n.reposition(), n.options.functionReady.call(n.$el, n.$el, n.$tooltip), s() ? (n.$tooltip.addClass(a + "-show"), n.options.speed > 0 && n.$tooltip.delay(n.options.speed), n.$tooltip.queue(o)) : n.$tooltip.css("display", "none").fadeIn(n.options.speed, o), n._interval_set(), t(e).on("scroll." + n.namespace + " resize." + n.namespace, function() { n.reposition() }), n.options.autoClose)
                                if (t("body").off("." + n.namespace), "hover" == n.options.trigger) {
                                    if (c && setTimeout(function() { t("body").on("touchstart." + n.namespace, function() { n.hide() }) }, 0), n.options.interactive) {
                                        c && n.$tooltip.on("touchstart." + n.namespace, function(t) { t.stopPropagation() });
                                        var p = null;
                                        n.$elProxy.add(n.$tooltip).on("mouseleave." + n.namespace + "-autoClose", function() { clearTimeout(p), p = setTimeout(function() { n.hide() }, n.options.interactiveTolerance) }).on("mouseenter." + n.namespace + "-autoClose", function() { clearTimeout(p) })
                                    } else n.$elProxy.on("mouseleave." + n.namespace + "-autoClose", function() { n.hide() });
                                    n.options.hideOnClick && n.$elProxy.on("click." + n.namespace + "-autoClose", function() { n.hide() })
                                } else "click" == n.options.trigger && (setTimeout(function() { t("body").on("click." + n.namespace + " touchstart." + n.namespace, function() { n.hide() }) }, 0), n.options.interactive && n.$tooltip.on("click." + n.namespace + " touchstart." + n.namespace, function(t) { t.stopPropagation() }))
                        }
                        n.options.timer > 0 && (n.timerHide = setTimeout(function() { n.timerHide = null, n.hide() }, n.options.timer + r))
                    }
                })
            },
            _interval_set: function() {
                var e = this;
                e.checkInterval = setInterval(function() {
                    if (0 === t("body").find(e.$el).length || 0 === t("body").find(e.$elProxy).length || "hidden" == e.Status || 0 === t("body").find(e.$tooltip).length) "shown" != e.Status && "appearing" != e.Status || e.hide(), e._interval_cancel();
                    else if (e.options.positionTracker) {
                        var i = e._repositionInfo(e.$elProxy),
                            n = !1;
                        o(i.dimension, e.elProxyPosition.dimension) && ("fixed" === e.$elProxy.css("position") ? o(i.position, e.elProxyPosition.position) && (n = !0) : o(i.offset, e.elProxyPosition.offset) && (n = !0)), n || (e.reposition(), e.options.positionTrackerCallback.call(e, e.$el))
                    }
                }, 200)
            },
            _interval_cancel: function() { clearInterval(this.checkInterval), this.checkInterval = null },
            _content_set: function(t) { "object" == typeof t && null !== t && this.options.contentCloning && (t = t.clone(!0)), this.Content = t },
            _content_insert: function() {
                var t = this,
                    e = this.$tooltip.find(".tooltipster-content");
                "string" != typeof t.Content || t.options.contentAsHTML ? e.empty().append(t.Content) : e.text(t.Content)
            },
            _update: function(t) {
                var e = this;
                e._content_set(t), null !== e.Content ? "hidden" !== e.Status && (e._content_insert(), e.reposition(), e.options.updateAnimation && (s() ? (e.$tooltip.css({ width: "", "-webkit-transition": "all " + e.options.speed + "ms, width 0ms, height 0ms, left 0ms, top 0ms", "-moz-transition": "all " + e.options.speed + "ms, width 0ms, height 0ms, left 0ms, top 0ms", "-o-transition": "all " + e.options.speed + "ms, width 0ms, height 0ms, left 0ms, top 0ms", "-ms-transition": "all " + e.options.speed + "ms, width 0ms, height 0ms, left 0ms, top 0ms", transition: "all " + e.options.speed + "ms, width 0ms, height 0ms, left 0ms, top 0ms" }).addClass("tooltipster-content-changing"), setTimeout(function() { "hidden" != e.Status && (e.$tooltip.removeClass("tooltipster-content-changing"), setTimeout(function() { "hidden" !== e.Status && e.$tooltip.css({ "-webkit-transition": e.options.speed + "ms", "-moz-transition": e.options.speed + "ms", "-o-transition": e.options.speed + "ms", "-ms-transition": e.options.speed + "ms", transition: e.options.speed + "ms" }) }, e.options.speed)) }, e.options.speed)) : e.$tooltip.fadeTo(e.options.speed, .5, function() { "hidden" != e.Status && e.$tooltip.fadeTo(e.options.speed, 1) }))) : e.hide()
            },
            _repositionInfo: function(t) { return { dimension: { height: t.outerHeight(!1), width: t.outerWidth(!1) }, offset: t.offset(), position: { left: parseInt(t.css("left")), top: parseInt(t.css("top")) } } },
            hide: function(i) {
                var n = this;
                i && n.callbacks.hide.push(i), n.callbacks.show = [], clearTimeout(n.timerShow), n.timerShow = null, clearTimeout(n.timerHide), n.timerHide = null;
                var o = function() { t.each(n.callbacks.hide, function(t, e) { e.call(n.$el) }), n.callbacks.hide = [] };
                if ("shown" == n.Status || "appearing" == n.Status) {
                    n.Status = "disappearing";
                    var r = function() { n.Status = "hidden", "object" == typeof n.Content && null !== n.Content && n.Content.detach(), n.$tooltip.remove(), n.$tooltip = null, t(e).off("." + n.namespace), t("body").off("." + n.namespace).css("overflow-x", n.bodyOverflowX), t("body").off("." + n.namespace), n.$elProxy.off("." + n.namespace + "-autoClose"), n.options.functionAfter.call(n.$el, n.$el), o() };
                    s() ? (n.$tooltip.clearQueue().removeClass("tooltipster-" + n.options.animation + "-show").addClass("tooltipster-dying"), n.options.speed > 0 && n.$tooltip.delay(n.options.speed), n.$tooltip.queue(r)) : n.$tooltip.stop().fadeOut(n.options.speed, r)
                } else "hidden" == n.Status && o();
                return n
            },
            show: function(t) { return this._showNow(t), this },
            update: function(t) { return this.content(t) },
            content: function(t) { return "undefined" == typeof t ? this.Content : (this._update(t), this) },
            reposition: function() {
                function i() {
                    var i = t(e).scrollLeft();
                    _ - i < 0 && (r = _ - i, _ = i), _ + l - i > s && (r = _ - (s + i - l), _ = s + i - l)
                }

                function n(i, n) { a.offset.top - t(e).scrollTop() - c - A - 12 < 0 && n.indexOf("top") > -1 && (L = i), a.offset.top + a.dimension.height + c + 12 + A > t(e).scrollTop() + t(e).height() && n.indexOf("bottom") > -1 && (L = i, I = a.offset.top - c - A - 12) }
                var o = this;
                if (0 !== t("body").find(o.$tooltip).length) {
                    o.$tooltip.css("width", ""), o.elProxyPosition = o._repositionInfo(o.$elProxy);
                    var r = null,
                        s = t(e).width(),
                        a = o.elProxyPosition,
                        l = o.$tooltip.outerWidth(!1),
                        c = (o.$tooltip.innerWidth() + 1, o.$tooltip.outerHeight(!1));
                    if (o.$elProxy.is("area")) {
                        var u = o.$elProxy.attr("shape"),
                            d = o.$elProxy.parent().attr("name"),
                            h = t('img[usemap="#' + d + '"]'),
                            p = h.offset().left,
                            f = h.offset().top,
                            m = void 0 !== o.$elProxy.attr("coords") ? o.$elProxy.attr("coords").split(",") : void 0;
                        if ("circle" == u) {
                            var g = parseInt(m[0]),
                                v = parseInt(m[1]),
                                y = parseInt(m[2]);
                            a.dimension.height = 2 * y, a.dimension.width = 2 * y, a.offset.top = f + v - y, a.offset.left = p + g - y
                        } else if ("rect" == u) {
                            var g = parseInt(m[0]),
                                v = parseInt(m[1]),
                                b = parseInt(m[2]),
                                w = parseInt(m[3]);
                            a.dimension.height = w - v, a.dimension.width = b - g, a.offset.top = f + v, a.offset.left = p + g
                        } else if ("poly" == u) {
                            for (var x = 0, S = 0, C = 0, k = 0, E = "even", T = 0; T < m.length; T++) { var P = parseInt(m[T]); "even" == E ? (P > C && (C = P, 0 === T && (x = C)), P < x && (x = P), E = "odd") : (P > k && (k = P, 1 == T && (S = k)), P < S && (S = P), E = "even") }
                            a.dimension.height = k - S, a.dimension.width = C - x, a.offset.top = f + S, a.offset.left = p + x
                        } else a.dimension.height = h.outerHeight(!1), a.dimension.width = h.outerWidth(!1), a.offset.top = f, a.offset.left = p
                    }
                    var _ = 0,
                        j = 0,
                        I = 0,
                        A = parseInt(o.options.offsetY),
                        O = parseInt(o.options.offsetX),
                        L = o.options.position;
                    if ("top" == L) {
                        var D = a.offset.left + l - (a.offset.left + a.dimension.width);
                        _ = a.offset.left + O - D / 2, I = a.offset.top - c - A - 12, i(), n("bottom", "top")
                    }
                    if ("top-left" == L && (_ = a.offset.left + O, I = a.offset.top - c - A - 12, i(), n("bottom-left", "top-left")), "top-right" == L && (_ = a.offset.left + a.dimension.width + O - l, I = a.offset.top - c - A - 12, i(), n("bottom-right", "top-right")), "bottom" == L) {
                        var D = a.offset.left + l - (a.offset.left + a.dimension.width);
                        _ = a.offset.left - D / 2 + O, I = a.offset.top + a.dimension.height + A + 12, i(), n("top", "bottom")
                    }
                    if ("bottom-left" == L && (_ = a.offset.left + O, I = a.offset.top + a.dimension.height + A + 12, i(), n("top-left", "bottom-left")), "bottom-right" == L && (_ = a.offset.left + a.dimension.width + O - l, I = a.offset.top + a.dimension.height + A + 12, i(), n("top-right", "bottom-right")), "left" == L) {
                        _ = a.offset.left - O - l - 12, j = a.offset.left + O + a.dimension.width + 12;
                        var M = a.offset.top + c - (a.offset.top + a.dimension.height);
                        if (I = a.offset.top - M / 2 - A, _ < 0 && j + l > s) {
                            var Q = 2 * parseFloat(o.$tooltip.css("border-width")),
                                z = l + _ - Q;
                            o.$tooltip.css("width", z + "px"), c = o.$tooltip.outerHeight(!1), _ = a.offset.left - O - z - 12 - Q, M = a.offset.top + c - (a.offset.top + a.dimension.height), I = a.offset.top - M / 2 - A
                        } else _ < 0 && (_ = a.offset.left + O + a.dimension.width + 12, r = "left")
                    }
                    if ("right" == L) {
                        _ = a.offset.left + O + a.dimension.width + 12, j = a.offset.left - O - l - 12;
                        var M = a.offset.top + c - (a.offset.top + a.dimension.height);
                        if (I = a.offset.top - M / 2 - A, _ + l > s && j < 0) {
                            var Q = 2 * parseFloat(o.$tooltip.css("border-width")),
                                z = s - _ - Q;
                            o.$tooltip.css("width", z + "px"), c = o.$tooltip.outerHeight(!1), M = a.offset.top + c - (a.offset.top + a.dimension.height), I = a.offset.top - M / 2 - A
                        } else _ + l > s && (_ = a.offset.left - O - l - 12, r = "right")
                    }
                    if (o.options.arrow) {
                        var F = "tooltipster-arrow-" + L;
                        if (o.options.arrowColor.length < 1) var W = o.$tooltip.css("background-color");
                        else var W = o.options.arrowColor;
                        if (r ? "left" == r ? (F = "tooltipster-arrow-right", r = "") : "right" == r ? (F = "tooltipster-arrow-left", r = "") : r = "left:" + Math.round(r) + "px;" : r = "", "top" == L || "top-left" == L || "top-right" == L) var N = parseFloat(o.$tooltip.css("border-bottom-width")),
                            B = o.$tooltip.css("border-bottom-color");
                        else if ("bottom" == L || "bottom-left" == L || "bottom-right" == L) var N = parseFloat(o.$tooltip.css("border-top-width")),
                            B = o.$tooltip.css("border-top-color");
                        else if ("left" == L) var N = parseFloat(o.$tooltip.css("border-right-width")),
                            B = o.$tooltip.css("border-right-color");
                        else if ("right" == L) var N = parseFloat(o.$tooltip.css("border-left-width")),
                            B = o.$tooltip.css("border-left-color");
                        else var N = parseFloat(o.$tooltip.css("border-bottom-width")),
                            B = o.$tooltip.css("border-bottom-color");
                        N > 1 && N++;
                        var H = "";
                        if (0 !== N) {
                            var $ = "",
                                V = "border-color: " + B + ";";
                            F.indexOf("bottom") !== -1 ? $ = "margin-top: -" + Math.round(N) + "px;" : F.indexOf("top") !== -1 ? $ = "margin-bottom: -" + Math.round(N) + "px;" : F.indexOf("left") !== -1 ? $ = "margin-right: -" + Math.round(N) + "px;" : F.indexOf("right") !== -1 && ($ = "margin-left: -" + Math.round(N) + "px;"), H = '<span class="tooltipster-arrow-border" style="' + $ + " " + V + ';"></span>'
                        }
                        o.$tooltip.find(".tooltipster-arrow").remove();
                        var R = '<div class="' + F + ' tooltipster-arrow" style="' + r + '">' + H + '<span style="border-color:' + W + ';"></span></div>';
                        o.$tooltip.append(R)
                    }
                    o.$tooltip.css({ top: Math.round(I) + "px", left: Math.round(_) + "px" })
                }
                return o
            },
            enable: function() { return this.enabled = !0, this },
            disable: function() { return this.hide(), this.enabled = !1, this },
            destroy: function() {
                var e = this;
                e.hide(), e.$el[0] !== e.$elProxy[0] && e.$elProxy.remove(), e.$el.removeData(e.namespace).off("." + e.namespace);
                var i = e.$el.data("tooltipster-ns");
                if (1 === i.length) { var n = null; "previous" === e.options.restoration ? n = e.$el.data("tooltipster-initialTitle") : "current" === e.options.restoration && (n = "string" == typeof e.Content ? e.Content : t("<div></div>").append(e.Content).html()), n && e.$el.attr("title", n), e.$el.removeClass("tooltipstered").removeData("tooltipster-ns").removeData("tooltipster-initialTitle") } else i = t.grep(i, function(t, i) { return t !== e.namespace }), e.$el.data("tooltipster-ns", i);
                return e
            },
            elementIcon: function() { return this.$el[0] !== this.$elProxy[0] ? this.$elProxy[0] : void 0 },
            elementTooltip: function() { return this.$tooltip ? this.$tooltip[0] : void 0 },
            option: function(t, e) { return "undefined" == typeof e ? this.options[t] : (this.options[t] = e, this) },
            status: function() { return this.Status }
        }, t.fn[a] = function() {
            var e = arguments;
            if (0 === this.length) {
                if ("string" == typeof e[0]) {
                    var i = !0;
                    switch (e[0]) {
                        case "setDefaults":
                            t.extend(l, e[1]);
                            break;
                        default:
                            i = !1
                    }
                    return !!i || this
                }
                return this
            }
            if ("string" == typeof e[0]) {
                var o = "#*$~&";
                return this.each(function() {
                    var i = t(this).data("tooltipster-ns"),
                        n = i ? t(this).data(i[0]) : null;
                    if (!n) throw new Error("You called Tooltipster's \"" + e[0] + '" method on an uninitialized element');
                    if ("function" != typeof n[e[0]]) throw new Error('Unknown method .tooltipster("' + e[0] + '")');
                    var r = n[e[0]](e[1], e[2]);
                    if (r !== n) return o = r, !1
                }), "#*$~&" !== o ? o : this
            }
            var r = [],
                s = e[0] && "undefined" != typeof e[0].multiple,
                a = s && e[0].multiple || !s && l.multiple,
                c = e[0] && "undefined" != typeof e[0].debug,
                u = c && e[0].debug || !c && l.debug;
            return this.each(function() {
                var i = !1,
                    o = t(this).data("tooltipster-ns"),
                    s = null;
                o ? a ? i = !0 : u && console.log('Tooltipster: one or more tooltips are already attached to this element: ignoring. Use the "multiple" option to attach more tooltips.') : i = !0, i && (s = new n(this, e[0]), o || (o = []), o.push(s.namespace), t(this).data("tooltipster-ns", o), t(this).data(s.namespace, s)), r.push(s)
            }), a ? r : this
        };
        var c = !!("ontouchstart" in e),
            u = !1;
        t("body").one("mousemove", function() { u = !0 })
    }(jQuery, window, document)
}, function(t, e, i) {
    (function(t) {
        "use strict";

        function e(t) { return t && t.__esModule ? t : { default: t } }
        var n = i(25),
            o = e(n);
        t.Flatsome = {
            behaviors: {},
            plugin: function(t, e, i) {
                i = i || {}, jQuery.fn[t] = function(n) {
                    if ("string" == typeof arguments[0]) {
                        var r = null,
                            s = arguments[0],
                            a = Array.prototype.slice.call(arguments, 1);
                        return this.each(function() {
                            if (!jQuery.data(this, "plugin_" + t) || "function" != typeof jQuery.data(this, "plugin_" + t)[s]) throw new Error("Method " + s + " does not exist on jQuery." + t);
                            r = jQuery.data(this, "plugin_" + t)[s].apply(this, a)
                        }), "destroy" === s && this.each(function() { jQuery(this).removeData("plugin_" + t) }), void 0 !== r ? r : this
                    }
                    if ("object" === ("undefined" == typeof n ? "undefined" : (0, o.default)(n)) || !n) return this.each(function() { jQuery.data(this, "plugin_" + t) || (n = jQuery.extend({}, i, n), jQuery.data(this, "plugin_" + t, new e(this, n))) })
                }
            },
            behavior: function(t, e) { this.behaviors[t] = e, e.arrive && jQuery(document).arrive(e.arrive.selector, e.arrive.handler || function() { Flatsome.attach(t, this.parentNode) }) },
            attach: function(t) { var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : t; if ("string" == typeof t) return this.behaviors.hasOwnProperty(t) && "function" == typeof this.behaviors[t].attach ? this.behaviors[t].attach(e || document) : null; for (var i in this.behaviors) "function" == typeof this.behaviors[i].attach && this.behaviors[i].attach(e || document) },
            detach: function(t) { for (var e in this.behaviors) "function" == typeof this.behaviors[e].detach && this.behaviors[e].detach(t || document) }
        }
    }).call(e, function() { return this }())
}, function(t, e, i) {
    "use strict";

    function n(t) { return t && t.__esModule ? t : { default: t } }
    e.__esModule = !0;
    var o = i(26),
        r = n(o),
        s = i(77),
        a = n(s),
        l = "function" == typeof a.default && "symbol" == typeof r.default ? function(t) { return typeof t } : function(t) { return t && "function" == typeof a.default && t.constructor === a.default && t !== a.default.prototype ? "symbol" : typeof t };
    e.default = "function" == typeof a.default && "symbol" === l(r.default) ? function(t) { return "undefined" == typeof t ? "undefined" : l(t) } : function(t) { return t && "function" == typeof a.default && t.constructor === a.default && t !== a.default.prototype ? "symbol" : "undefined" == typeof t ? "undefined" : l(t) }
}, function(t, e, i) { t.exports = { default: i(27), __esModule: !0 } }, function(t, e, i) { i(28), i(72), t.exports = i(76).f("iterator") }, function(t, e, i) {
    "use strict";
    var n = i(29)(!0);
    i(32)(String, "String", function(t) { this._t = String(t), this._i = 0 }, function() {
        var t, e = this._t,
            i = this._i;
        return i >= e.length ? { value: void 0, done: !0 } : (t = n(e, i), this._i += t.length, { value: t, done: !1 })
    })
}, function(t, e, i) {
    var n = i(30),
        o = i(31);
    t.exports = function(t) {
        return function(e, i) {
            var r, s, a = String(o(e)),
                l = n(i),
                c = a.length;
            return l < 0 || l >= c ? t ? "" : void 0 : (r = a.charCodeAt(l), r < 55296 || r > 56319 || l + 1 === c || (s = a.charCodeAt(l + 1)) < 56320 || s > 57343 ? t ? a.charAt(l) : r : t ? a.slice(l, l + 2) : (r - 55296 << 10) + (s - 56320) + 65536)
        }
    }
}, function(t, e) {
    var i = Math.ceil,
        n = Math.floor;
    t.exports = function(t) { return isNaN(t = +t) ? 0 : (t > 0 ? n : i)(t) }
}, function(t, e) { t.exports = function(t) { if (void 0 == t) throw TypeError("Can't call method on  " + t); return t } }, function(t, e, i) {
    "use strict";
    var n = i(33),
        o = i(34),
        r = i(49),
        s = i(39),
        a = i(50),
        l = i(51),
        c = i(52),
        u = i(68),
        d = i(70),
        h = i(69)("iterator"),
        p = !([].keys && "next" in [].keys()),
        f = "@@iterator",
        m = "keys",
        g = "values",
        v = function() { return this };
    t.exports = function(t, e, i, y, b, w, x) {
        c(i, e, y);
        var S, C, k, E = function(t) {
                if (!p && t in j) return j[t];
                switch (t) {
                    case m:
                        return function() { return new i(this, t) };
                    case g:
                        return function() { return new i(this, t) }
                }
                return function() { return new i(this, t) }
            },
            T = e + " Iterator",
            P = b == g,
            _ = !1,
            j = t.prototype,
            I = j[h] || j[f] || b && j[b],
            A = I || E(b),
            O = b ? P ? E("entries") : A : void 0,
            L = "Array" == e ? j.entries || I : I;
        if (L && (k = d(L.call(new t)), k !== Object.prototype && k.next && (u(k, T, !0), n || a(k, h) || s(k, h, v))), P && I && I.name !== g && (_ = !0, A = function() { return I.call(this) }), n && !x || !p && !_ && j[h] || s(j, h, A), l[e] = A, l[T] = v, b)
            if (S = { values: P ? A : E(g), keys: w ? A : E(m), entries: O }, x)
                for (C in S) C in j || r(j, C, S[C]);
            else o(o.P + o.F * (p || _), e, S);
        return S
    }
}, function(t, e) { t.exports = !0 }, function(t, e, i) {
    var n = i(35),
        o = i(36),
        r = i(37),
        s = i(39),
        a = "prototype",
        l = function(t, e, i) {
            var c, u, d, h = t & l.F,
                p = t & l.G,
                f = t & l.S,
                m = t & l.P,
                g = t & l.B,
                v = t & l.W,
                y = p ? o : o[e] || (o[e] = {}),
                b = y[a],
                w = p ? n : f ? n[e] : (n[e] || {})[a];
            p && (i = e);
            for (c in i) u = !h && w && void 0 !== w[c], u && c in y || (d = u ? w[c] : i[c], y[c] = p && "function" != typeof w[c] ? i[c] : g && u ? r(d, n) : v && w[c] == d ? function(t) {
                var e = function(e, i, n) {
                    if (this instanceof t) {
                        switch (arguments.length) {
                            case 0:
                                return new t;
                            case 1:
                                return new t(e);
                            case 2:
                                return new t(e, i)
                        }
                        return new t(e, i, n)
                    }
                    return t.apply(this, arguments)
                };
                return e[a] = t[a], e
            }(d) : m && "function" == typeof d ? r(Function.call, d) : d, m && ((y.virtual || (y.virtual = {}))[c] = d, t & l.R && b && !b[c] && s(b, c, d)))
        };
    l.F = 1, l.G = 2, l.S = 4, l.P = 8, l.B = 16, l.W = 32, l.U = 64, l.R = 128, t.exports = l
}, function(t, e) { var i = t.exports = "undefined" != typeof window && window.Math == Math ? window : "undefined" != typeof self && self.Math == Math ? self : Function("return this")(); "number" == typeof __g && (__g = i) }, function(t, e) { var i = t.exports = { version: "2.5.1" }; "number" == typeof __e && (__e = i) }, function(t, e, i) {
    var n = i(38);
    t.exports = function(t, e, i) {
        if (n(t), void 0 === e) return t;
        switch (i) {
            case 1:
                return function(i) { return t.call(e, i) };
            case 2:
                return function(i, n) { return t.call(e, i, n) };
            case 3:
                return function(i, n, o) { return t.call(e, i, n, o) }
        }
        return function() { return t.apply(e, arguments) }
    }
}, function(t, e) { t.exports = function(t) { if ("function" != typeof t) throw TypeError(t + " is not a function!"); return t } }, function(t, e, i) {
    var n = i(40),
        o = i(48);
    t.exports = i(44) ? function(t, e, i) { return n.f(t, e, o(1, i)) } : function(t, e, i) { return t[e] = i, t }
}, function(t, e, i) {
    var n = i(41),
        o = i(43),
        r = i(47),
        s = Object.defineProperty;
    e.f = i(44) ? Object.defineProperty : function(t, e, i) {
        if (n(t), e = r(e, !0), n(i), o) try { return s(t, e, i) } catch (t) {}
        if ("get" in i || "set" in i) throw TypeError("Accessors not supported!");
        return "value" in i && (t[e] = i.value), t
    }
}, function(t, e, i) {
    var n = i(42);
    t.exports = function(t) { if (!n(t)) throw TypeError(t + " is not an object!"); return t }
}, function(t, e) { t.exports = function(t) { return "object" == typeof t ? null !== t : "function" == typeof t } }, function(t, e, i) { t.exports = !i(44) && !i(45)(function() { return 7 != Object.defineProperty(i(46)("div"), "a", { get: function() { return 7 } }).a }) }, function(t, e, i) { t.exports = !i(45)(function() { return 7 != Object.defineProperty({}, "a", { get: function() { return 7 } }).a }) }, function(t, e) { t.exports = function(t) { try { return !!t() } catch (t) { return !0 } } }, function(t, e, i) {
    var n = i(42),
        o = i(35).document,
        r = n(o) && n(o.createElement);
    t.exports = function(t) { return r ? o.createElement(t) : {} }
}, function(t, e, i) {
    var n = i(42);
    t.exports = function(t, e) { if (!n(t)) return t; var i, o; if (e && "function" == typeof(i = t.toString) && !n(o = i.call(t))) return o; if ("function" == typeof(i = t.valueOf) && !n(o = i.call(t))) return o; if (!e && "function" == typeof(i = t.toString) && !n(o = i.call(t))) return o; throw TypeError("Can't convert object to primitive value") }
}, function(t, e) { t.exports = function(t, e) { return { enumerable: !(1 & t), configurable: !(2 & t), writable: !(4 & t), value: e } } }, function(t, e, i) { t.exports = i(39) }, function(t, e) {
    var i = {}.hasOwnProperty;
    t.exports = function(t, e) { return i.call(t, e) }
}, function(t, e) { t.exports = {} }, function(t, e, i) {
    "use strict";
    var n = i(53),
        o = i(48),
        r = i(68),
        s = {};
    i(39)(s, i(69)("iterator"), function() { return this }), t.exports = function(t, e, i) { t.prototype = n(s, { next: o(1, i) }), r(t, e + " Iterator") }
}, function(t, e, i) {
    var n = i(41),
        o = i(54),
        r = i(66),
        s = i(63)("IE_PROTO"),
        a = function() {},
        l = "prototype",
        c = function() {
            var t, e = i(46)("iframe"),
                n = r.length,
                o = "<",
                s = ">";
            for (e.style.display = "none", i(67).appendChild(e), e.src = "javascript:", t = e.contentWindow.document, t.open(), t.write(o + "script" + s + "document.F=Object" + o + "/script" + s), t.close(), c = t.F; n--;) delete c[l][r[n]];
            return c()
        };
    t.exports = Object.create || function(t, e) { var i; return null !== t ? (a[l] = n(t), i = new a, a[l] = null, i[s] = t) : i = c(), void 0 === e ? i : o(i, e) }
}, function(t, e, i) {
    var n = i(40),
        o = i(41),
        r = i(55);
    t.exports = i(44) ? Object.defineProperties : function(t, e) { o(t); for (var i, s = r(e), a = s.length, l = 0; a > l;) n.f(t, i = s[l++], e[i]); return t }
}, function(t, e, i) {
    var n = i(56),
        o = i(66);
    t.exports = Object.keys || function(t) { return n(t, o) }
}, function(t, e, i) {
    var n = i(50),
        o = i(57),
        r = i(60)(!1),
        s = i(63)("IE_PROTO");
    t.exports = function(t, e) {
        var i, a = o(t),
            l = 0,
            c = [];
        for (i in a) i != s && n(a, i) && c.push(i);
        for (; e.length > l;) n(a, i = e[l++]) && (~r(c, i) || c.push(i));
        return c
    }
}, function(t, e, i) {
    var n = i(58),
        o = i(31);
    t.exports = function(t) { return n(o(t)) }
}, function(t, e, i) {
    var n = i(59);
    t.exports = Object("z").propertyIsEnumerable(0) ? Object : function(t) { return "String" == n(t) ? t.split("") : Object(t) }
}, function(t, e) {
    var i = {}.toString;
    t.exports = function(t) { return i.call(t).slice(8, -1) }
}, function(t, e, i) {
    var n = i(57),
        o = i(61),
        r = i(62);
    t.exports = function(t) {
        return function(e, i, s) {
            var a, l = n(e),
                c = o(l.length),
                u = r(s, c);
            if (t && i != i) {
                for (; c > u;)
                    if (a = l[u++], a != a) return !0
            } else
                for (; c > u; u++)
                    if ((t || u in l) && l[u] === i) return t || u || 0; return !t && -1
        }
    }
}, function(t, e, i) {
    var n = i(30),
        o = Math.min;
    t.exports = function(t) { return t > 0 ? o(n(t), 9007199254740991) : 0 }
}, function(t, e, i) {
    var n = i(30),
        o = Math.max,
        r = Math.min;
    t.exports = function(t, e) { return t = n(t), t < 0 ? o(t + e, 0) : r(t, e) }
}, function(t, e, i) {
    var n = i(64)("keys"),
        o = i(65);
    t.exports = function(t) { return n[t] || (n[t] = o(t)) }
}, function(t, e, i) {
    var n = i(35),
        o = "__core-js_shared__",
        r = n[o] || (n[o] = {});
    t.exports = function(t) { return r[t] || (r[t] = {}) }
}, function(t, e) {
    var i = 0,
        n = Math.random();
    t.exports = function(t) { return "Symbol(".concat(void 0 === t ? "" : t, ")_", (++i + n).toString(36)) }
}, function(t, e) { t.exports = "constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(",") }, function(t, e, i) {
    var n = i(35).document;
    t.exports = n && n.documentElement
}, function(t, e, i) {
    var n = i(40).f,
        o = i(50),
        r = i(69)("toStringTag");
    t.exports = function(t, e, i) { t && !o(t = i ? t : t.prototype, r) && n(t, r, { configurable: !0, value: e }) }
}, function(t, e, i) {
    var n = i(64)("wks"),
        o = i(65),
        r = i(35).Symbol,
        s = "function" == typeof r,
        a = t.exports = function(t) { return n[t] || (n[t] = s && r[t] || (s ? r : o)("Symbol." + t)) };
    a.store = n
}, function(t, e, i) {
    var n = i(50),
        o = i(71),
        r = i(63)("IE_PROTO"),
        s = Object.prototype;
    t.exports = Object.getPrototypeOf || function(t) { return t = o(t), n(t, r) ? t[r] : "function" == typeof t.constructor && t instanceof t.constructor ? t.constructor.prototype : t instanceof Object ? s : null }
}, function(t, e, i) {
    var n = i(31);
    t.exports = function(t) { return Object(n(t)) }
}, function(t, e, i) {
    i(73);
    for (var n = i(35), o = i(39), r = i(51), s = i(69)("toStringTag"), a = "CSSRuleList,CSSStyleDeclaration,CSSValueList,ClientRectList,DOMRectList,DOMStringList,DOMTokenList,DataTransferItemList,FileList,HTMLAllCollection,HTMLCollection,HTMLFormElement,HTMLSelectElement,MediaList,MimeTypeArray,NamedNodeMap,NodeList,PaintRequestList,Plugin,PluginArray,SVGLengthList,SVGNumberList,SVGPathSegList,SVGPointList,SVGStringList,SVGTransformList,SourceBufferList,StyleSheetList,TextTrackCueList,TextTrackList,TouchList".split(","), l = 0; l < a.length; l++) {
        var c = a[l],
            u = n[c],
            d = u && u.prototype;
        d && !d[s] && o(d, s, c), r[c] = r.Array
    }
}, function(t, e, i) {
    "use strict";
    var n = i(74),
        o = i(75),
        r = i(51),
        s = i(57);
    t.exports = i(32)(Array, "Array", function(t, e) { this._t = s(t), this._i = 0, this._k = e }, function() {
        var t = this._t,
            e = this._k,
            i = this._i++;
        return !t || i >= t.length ? (this._t = void 0, o(1)) : "keys" == e ? o(0, i) : "values" == e ? o(0, t[i]) : o(0, [i, t[i]])
    }, "values"), r.Arguments = r.Array, n("keys"), n("values"), n("entries")
}, function(t, e) { t.exports = function() {} }, function(t, e) { t.exports = function(t, e) { return { value: e, done: !!t } } }, function(t, e, i) { e.f = i(69) }, function(t, e, i) { t.exports = { default: i(78), __esModule: !0 } }, function(t, e, i) { i(79), i(89), i(90), i(91), t.exports = i(36).Symbol }, function(t, e, i) {
    "use strict";
    var n = i(35),
        o = i(50),
        r = i(44),
        s = i(34),
        a = i(49),
        l = i(80).KEY,
        c = i(45),
        u = i(64),
        d = i(68),
        h = i(65),
        p = i(69),
        f = i(76),
        m = i(81),
        g = i(82),
        v = i(85),
        y = i(41),
        b = i(57),
        w = i(47),
        x = i(48),
        S = i(53),
        C = i(86),
        k = i(88),
        E = i(40),
        T = i(55),
        P = k.f,
        _ = E.f,
        j = C.f,
        I = n.Symbol,
        A = n.JSON,
        O = A && A.stringify,
        L = "prototype",
        D = p("_hidden"),
        M = p("toPrimitive"),
        Q = {}.propertyIsEnumerable,
        z = u("symbol-registry"),
        F = u("symbols"),
        W = u("op-symbols"),
        N = Object[L],
        B = "function" == typeof I,
        H = n.QObject,
        $ = !H || !H[L] || !H[L].findChild,
        V = r && c(function() { return 7 != S(_({}, "a", { get: function() { return _(this, "a", { value: 7 }).a } })).a }) ? function(t, e, i) {
            var n = P(N, e);
            n && delete N[e], _(t, e, i), n && t !== N && _(N, e, n);
        } : _,
        R = function(t) { var e = F[t] = S(I[L]); return e._k = t, e },
        q = B && "symbol" == typeof I.iterator ? function(t) { return "symbol" == typeof t } : function(t) { return t instanceof I },
        U = function(t, e, i) { return t === N && U(W, e, i), y(t), e = w(e, !0), y(i), o(F, e) ? (i.enumerable ? (o(t, D) && t[D][e] && (t[D][e] = !1), i = S(i, { enumerable: x(0, !1) })) : (o(t, D) || _(t, D, x(1, {})), t[D][e] = !0), V(t, e, i)) : _(t, e, i) },
        G = function(t, e) { y(t); for (var i, n = g(e = b(e)), o = 0, r = n.length; r > o;) U(t, i = n[o++], e[i]); return t },
        Y = function(t, e) { return void 0 === e ? S(t) : G(S(t), e) },
        X = function(t) { var e = Q.call(this, t = w(t, !0)); return !(this === N && o(F, t) && !o(W, t)) && (!(e || !o(this, t) || !o(F, t) || o(this, D) && this[D][t]) || e) },
        K = function(t, e) { if (t = b(t), e = w(e, !0), t !== N || !o(F, e) || o(W, e)) { var i = P(t, e); return !i || !o(F, e) || o(t, D) && t[D][e] || (i.enumerable = !0), i } },
        Z = function(t) { for (var e, i = j(b(t)), n = [], r = 0; i.length > r;) o(F, e = i[r++]) || e == D || e == l || n.push(e); return n },
        J = function(t) { for (var e, i = t === N, n = j(i ? W : b(t)), r = [], s = 0; n.length > s;) !o(F, e = n[s++]) || i && !o(N, e) || r.push(F[e]); return r };
    B || (I = function() {
        if (this instanceof I) throw TypeError("Symbol is not a constructor!");
        var t = h(arguments.length > 0 ? arguments[0] : void 0),
            e = function(i) { this === N && e.call(W, i), o(this, D) && o(this[D], t) && (this[D][t] = !1), V(this, t, x(1, i)) };
        return r && $ && V(N, t, { configurable: !0, set: e }), R(t)
    }, a(I[L], "toString", function() { return this._k }), k.f = K, E.f = U, i(87).f = C.f = Z, i(84).f = X, i(83).f = J, r && !i(33) && a(N, "propertyIsEnumerable", X, !0), f.f = function(t) { return R(p(t)) }), s(s.G + s.W + s.F * !B, { Symbol: I });
    for (var tt = "hasInstance,isConcatSpreadable,iterator,match,replace,search,species,split,toPrimitive,toStringTag,unscopables".split(","), et = 0; tt.length > et;) p(tt[et++]);
    for (var it = T(p.store), nt = 0; it.length > nt;) m(it[nt++]);
    s(s.S + s.F * !B, "Symbol", {
        for: function(t) { return o(z, t += "") ? z[t] : z[t] = I(t) },
        keyFor: function(t) {
            if (!q(t)) throw TypeError(t + " is not a symbol!");
            for (var e in z)
                if (z[e] === t) return e
        },
        useSetter: function() { $ = !0 },
        useSimple: function() { $ = !1 }
    }), s(s.S + s.F * !B, "Object", { create: Y, defineProperty: U, defineProperties: G, getOwnPropertyDescriptor: K, getOwnPropertyNames: Z, getOwnPropertySymbols: J }), A && s(s.S + s.F * (!B || c(function() { var t = I(); return "[null]" != O([t]) || "{}" != O({ a: t }) || "{}" != O(Object(t)) })), "JSON", { stringify: function(t) { if (void 0 !== t && !q(t)) { for (var e, i, n = [t], o = 1; arguments.length > o;) n.push(arguments[o++]); return e = n[1], "function" == typeof e && (i = e), !i && v(e) || (e = function(t, e) { if (i && (e = i.call(this, t, e)), !q(e)) return e }), n[1] = e, O.apply(A, n) } } }), I[L][M] || i(39)(I[L], M, I[L].valueOf), d(I, "Symbol"), d(Math, "Math", !0), d(n.JSON, "JSON", !0)
}, function(t, e, i) {
    var n = i(65)("meta"),
        o = i(42),
        r = i(50),
        s = i(40).f,
        a = 0,
        l = Object.isExtensible || function() { return !0 },
        c = !i(45)(function() { return l(Object.preventExtensions({})) }),
        u = function(t) { s(t, n, { value: { i: "O" + ++a, w: {} } }) },
        d = function(t, e) {
            if (!o(t)) return "symbol" == typeof t ? t : ("string" == typeof t ? "S" : "P") + t;
            if (!r(t, n)) {
                if (!l(t)) return "F";
                if (!e) return "E";
                u(t)
            }
            return t[n].i
        },
        h = function(t, e) {
            if (!r(t, n)) {
                if (!l(t)) return !0;
                if (!e) return !1;
                u(t)
            }
            return t[n].w
        },
        p = function(t) { return c && f.NEED && l(t) && !r(t, n) && u(t), t },
        f = t.exports = { KEY: n, NEED: !1, fastKey: d, getWeak: h, onFreeze: p }
}, function(t, e, i) {
    var n = i(35),
        o = i(36),
        r = i(33),
        s = i(76),
        a = i(40).f;
    t.exports = function(t) { var e = o.Symbol || (o.Symbol = r ? {} : n.Symbol || {}); "_" == t.charAt(0) || t in e || a(e, t, { value: s.f(t) }) }
}, function(t, e, i) {
    var n = i(55),
        o = i(83),
        r = i(84);
    t.exports = function(t) {
        var e = n(t),
            i = o.f;
        if (i)
            for (var s, a = i(t), l = r.f, c = 0; a.length > c;) l.call(t, s = a[c++]) && e.push(s);
        return e
    }
}, function(t, e) { e.f = Object.getOwnPropertySymbols }, function(t, e) { e.f = {}.propertyIsEnumerable }, function(t, e, i) {
    var n = i(59);
    t.exports = Array.isArray || function(t) { return "Array" == n(t) }
}, function(t, e, i) {
    var n = i(57),
        o = i(87).f,
        r = {}.toString,
        s = "object" == typeof window && window && Object.getOwnPropertyNames ? Object.getOwnPropertyNames(window) : [],
        a = function(t) { try { return o(t) } catch (t) { return s.slice() } };
    t.exports.f = function(t) { return s && "[object Window]" == r.call(t) ? a(t) : o(n(t)) }
}, function(t, e, i) {
    var n = i(56),
        o = i(66).concat("length", "prototype");
    e.f = Object.getOwnPropertyNames || function(t) { return n(t, o) }
}, function(t, e, i) {
    var n = i(84),
        o = i(48),
        r = i(57),
        s = i(47),
        a = i(50),
        l = i(43),
        c = Object.getOwnPropertyDescriptor;
    e.f = i(44) ? c : function(t, e) {
        if (t = r(t), e = s(e, !0), l) try { return c(t, e) } catch (t) {}
        if (a(t, e)) return o(!n.f.call(t, e), t[e])
    }
}, function(t, e) {}, function(t, e, i) { i(81)("asyncIterator") }, function(t, e, i) { i(81)("observable") }, function(t, e) {
    "use strict";
    var i = jQuery("#wrapper"),
        n = jQuery("#header"),
        o = -jQuery(".header-wrapper").height() - 100,
        r = -jQuery(".header-top.hide-for-sticky").height() - 1,
        s = n.hasClass("has-sticky");
    if (jQuery(".sticky-shrink .header-wrapper").length) {
        var a = jQuery(".header-top.hide-for-sticky").height();
        a += jQuery("#wpadminbar").height(), o = -1 - a, r = -1 - a
    }
    s && (n.find(".header-wrapper").waypoint(function(t) {
        var e = jQuery(this.element),
            i = n.height();
        "down" === t && (e.addClass("stuck"), n.height(i), jQuery(".has-transparent").removeClass("transparent"), jQuery(".toggle-nav-dark").removeClass("nav-dark"))
    }, { offset: o }), i.waypoint(function(t) { "up" === t && (n.height(""), jQuery(".header-wrapper").removeClass("stuck"), jQuery(".has-transparent").addClass("transparent"), jQuery(".toggle-nav-dark").addClass("nav-dark")) }, { offset: r }))
}, function(t, e, i) {
    "use strict";

    function n(t) { return t && t.__esModule ? t : { default: t } }
    var o = i(22),
        r = n(o);
    (0, r.default)()
}, function(t, e) {
    "use strict";

    function i(t) { t.classList.add("parallax-active"), /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) || t.classList && t.dataset && (f.push({ element: t, type: a(t) }), o(f[f.length - 1])) }

    function n() { for (var t = 0; t < f.length; t++) f[t].element.offsetParent ? o(f[t]) : f.splice(t, 1) }

    function o(t) { r(t), s(t) }

    function r(t) {
        var e = t.element,
            i = t.type,
            n = e.dataset.parallax,
            o = p(n),
            r = c(e),
            s = (window.innerHeight - r.offsetHeight) * o;
        switch (i) {
            case "backgroundImage":
                e.style.backgroundSize = o ? "100% auto" : null;
                break;
            case "backgroundElement":
                e.style.height = o ? r.offsetHeight + s + "px" : null
        }
    }

    function s(t) {
        var e = t.element,
            i = t.type,
            n = e.dataset.parallax || e.dataset.parallaxBackground,
            o = p(n),
            r = window.innerHeight,
            s = c(e),
            a = e.offsetHeight - s.offsetHeight,
            u = e.getBoundingClientRect(),
            d = s !== e ? s.getBoundingClientRect() : u,
            f = u.top + e.offsetHeight / 2,
            m = d.top + s.offsetHeight / 2,
            g = r / 2 - f,
            v = r / 2 - m,
            y = f + l() < r / 2,
            b = y ? l() : g,
            w = (r / 2 - Math.abs(g), Math.abs(b) / (r / 2)),
            x = 0;
        if (!(d.top > r || d.top + s.offsetHeight < 0)) switch (i) {
            case "backgroundImage":
                x = d.top * o, e.style.backgroundPosition = o ? "50% " + x.toFixed(0) + "px" : null, e.style.backgroundAttachment = o ? "fixed" : null;
                break;
            case "backgroundElement":
                x = v * o - a / 2, e.style.transform = o ? "translate3d(0, " + x.toFixed(2) + "px, 0)" : null, e.style.backfaceVisibility = o ? "hidden" : null;
                break;
            case "element":
                x = b * o, e.style.transform = o ? "translate3d(0, " + x.toFixed(2) + "px, 0)" : null, e.style.backfaceVisibility = o ? "hidden" : null, "undefined" != typeof e.dataset.parallaxFade && (e.style.opacity = o ? h(1 - w).toFixed(2) : null)
        }
    }

    function a(t) { return "undefined" != typeof t.dataset.parallaxBackground ? "backgroundElement" : "undefined" != typeof t.dataset.parallaxElemenet ? "element" : "" !== t.style.backgroundImage ? "backgroundImage" : "element" }

    function l() { return document.documentElement.scrollTop || document.body.scrollTop }

    function c(t) { return u(t, t.dataset.parallaxContainer || "[data-parallax-container]") || t }

    function u(t) { for (var e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null; t && !d(t).call(t, e);) t = t.parentElement; return t }

    function d(t) { return t.matches || t.webkitMatchesSelector || t.mozMatchesSelector || t.msMatchesSelector }

    function h(t) { return t * (2 - t) }

    function p(t) {
        var e = t / 10 * -1,
            i = Math.abs(t) / 10;
        return e / (2 - i)
    }
    Object.defineProperty(e, "__esModule", { value: !0 }), e.default = i;
    var f = [];
    window.addEventListener("scroll", function() { return window.requestAnimationFrame(n) }), window.addEventListener("resize", function() { return window.requestAnimationFrame(n) }), window.addEventListener("DOMNodeInserted", function() { return window.requestAnimationFrame(n) }), window.jQuery && (window.jQuery.fn.flatsomeParallax = function(t) { "destroy" !== t && this.each(function(t, e) { return i(e) }) })
}, function(t, e) {
    "use strict";
    var i = 10;
    Flatsome.plugin("resizeselect", function(t, e) {
        var n = jQuery(t);
        n.change(function() {
            var t = jQuery(this),
                e = t.find("option:selected").val(),
                n = t.find("option:selected").text(),
                o = jQuery("<span>").html(n);
            o.appendTo("body");
            var r = o.width();
            o.remove(), t.width(r + i), e && t.parent().parent().find("input.search-field").focus()
        }).change()
    })
}, function(t, e, i) {
    "use strict";

    function n(t) { return t && t.__esModule ? t : { default: t } }
    var o = i(97),
        r = n(o);
    jQuery(".section .loading-spin, .banner .loading-spin, .page-loader").fadeOut(), jQuery("#top-link").click(function(t) { jQuery.scrollTo(0, 300), t.preventDefault() }), jQuery(".scroll-for-more").click(function() { jQuery.scrollTo(jQuery(this), { duration: 300 }) }), jQuery(".search-dropdown button").click(function(t) { jQuery(this).parent().find("input").focus(), t.preventDefault() }), jQuery(".current-cat").addClass("active"), jQuery("html").removeClass("loading-site"), setTimeout(function() { jQuery(".page-loader").remove() }, 1e3), jQuery(".resize-select").resizeselect(), flatsomeVars.user.can_edit_pages && jQuery(".block-edit-link").each(function() {
        var t = jQuery(this).data("link"),
            e = jQuery(this).data("backend"),
            i = jQuery(this).data("title");
        jQuery(this).next().addClass("has-block").tooltipster({ animationDuration: 100, distance: -15, delay: 0, repositionOnScroll: !0, interactive: !0, contentAsHTML: !0, content: "" + i + ' <br/> <a class="button edit-block-button edit-block-button-builder" href="' + t + '">UX Builder</a> <a class="button edit-block-button edit-block-button edit-block-button-backend" href="' + e + '">WP Editor</a>' }), jQuery(this).remove()
    }), jQuery("#hotspot").click(function(t) { t.preventDefault() }), jQuery(".wpcf7-form .wpcf7-submit").on("click", function() { jQuery(this).parent().parent().addClass("processing") }), jQuery(document).ajaxComplete(function(t, e, i) { jQuery(".processing").removeClass("processing") }), jQuery(document).ready(function() {
        (0, r.default)()
    })
}, function(t, e) {
    /**
     * Object Fit Videos
     * Polyfill for object-fit and object-position CSS properties on video elements
     * Covers IE9, IE10, IE11, Edge, Safari <10
     *
     * Usage
     * In your CSS, add a special font-family tag for IE/Edge
     * video {
     *   object-fit: cover;
     *   font-family: 'object-fit: cover;';
     * }
     *
     * Before the closing body tag, or whenever the DOM is ready,
     * make the JavaScript call
     * objectFitVideos();
     *
     * All video elements with the special CSS property will be targeted
     *
     * @license  MIT (https://opensource.org/licenses/MIT)
     * @author   Todd Miller <todd.miller@tricomb2b.com>
     * @version  1.0.2
     * @changelog
     * 2016-08-19 - Adds object-position support.
     * 2016-08-19 - Add throttle function for more performant resize events
     * 2016-08-19 - Initial release with object-fit support, and
     *              object-position default 'center'
     * 2016-10-14 - No longer relies on window load event, instead requires a specific
     *              function call to initialize the videos for object fit and position.
     * 2016-11-28 - Support CommonJS environment, courtesy of @msorensson
     * 2016-12-05 - Refactors the throttling function to support IE
     * 2017-09-26 - Fix an issue with autplay not working on polyfilled videos
     *            - Adds the capability to specify elements to polyfill,
     *              instead of just checking every video element for the
     *              CSS property. Slight performance gain in most usecases,
     *              and a bigger gain in a few usecases.
     * 2017-10-24 - Add user agent check to enable polyfill for all Edge browsers.
     *              object-fit is supported on Edge >= 16, but currently just for images.
     */
    var i = function(t) {
        "use strict";

        function e(t) { for (var e = getComputedStyle(t).fontFamily, i = null, n = {}; null !== (i = u.exec(e));) n[i[1]] = i[2]; return n["object-position"] ? o(n) : n }

        function i(t) {
            var i = -1;
            t ? "length" in t || (t = [t]) : t = document.querySelectorAll("video");
            for (; t[++i];) {
                var o = e(t[i]);
                (o["object-fit"] || o["object-position"]) && (o["object-fit"] = o["object-fit"] || "fill", n(t[i], o))
            }
        }

        function n(t, e) {
            function i() {
                var i = t.videoWidth,
                    o = t.videoHeight,
                    s = i / o,
                    a = r.clientWidth,
                    l = r.clientHeight,
                    c = a / l,
                    u = 0,
                    d = 0;
                n.marginLeft = n.marginTop = 0, (s < c ? "contain" === e["object-fit"] : "cover" === e["object-fit"]) ? (u = l * s, d = a / s, n.width = Math.round(u) + "px", n.height = l + "px", "left" === e["object-position-x"] ? n.marginLeft = 0 : "right" === e["object-position-x"] ? n.marginLeft = Math.round(a - u) + "px" : n.marginLeft = Math.round((a - u) / 2) + "px") : (d = a / s, n.width = a + "px", n.height = Math.round(d) + "px", "top" === e["object-position-y"] ? n.marginTop = 0 : "bottom" === e["object-position-y"] ? n.marginTop = Math.round(l - d) + "px" : n.marginTop = Math.round((l - d) / 2) + "px"), t.autoplay && t.play()
            }
            if ("fill" !== e["object-fit"]) {
                var n = t.style,
                    o = window.getComputedStyle(t),
                    r = document.createElement("object-fit");
                r.appendChild(t.parentNode.replaceChild(r, t));
                var s = { height: "100%", width: "100%", boxSizing: "content-box", display: "inline-block", overflow: "hidden" };
                "backgroundColor backgroundImage borderColor borderStyle borderWidth bottom fontSize lineHeight left opacity margin position right top visibility".replace(/\w+/g, function(t) { s[t] = o[t] });
                for (var a in s) r.style[a] = s[a];
                n.border = n.margin = n.padding = 0, n.display = "block", n.opacity = 1, t.addEventListener("loadedmetadata", i), window.addEventListener("optimizedResize", i), t.readyState >= 1 && (t.removeEventListener("loadedmetadata", i), i())
            }
        }

        function o(t) { return ~t["object-position"].indexOf("left") ? t["object-position-x"] = "left" : ~t["object-position"].indexOf("right") ? t["object-position-x"] = "right" : t["object-position-x"] = "center", ~t["object-position"].indexOf("top") ? t["object-position-y"] = "top" : ~t["object-position"].indexOf("bottom") ? t["object-position-y"] = "bottom" : t["object-position-y"] = "center", t }

        function r(t, e, i) {
            i = i || window;
            var n = !1,
                o = null;
            try { o = new CustomEvent(e) } catch (t) { o = document.createEvent("Event"), o.initEvent(e, !0, !0) }
            var r = function() { n || (n = !0, requestAnimationFrame(function() { i.dispatchEvent(o), n = !1 })) };
            i.addEventListener(t, r)
        }
        var s = navigator.userAgent.indexOf("Edge/") >= 0,
            a = new Image,
            l = "object-fit" in a.style && !s,
            c = "object-position" in a.style && !s,
            u = /(object-fit|object-position)\s*:\s*([-\w\s%]+)/g;
        l && c || (i(t), r("resize", "optimizedResize"))
    };
    "undefined" != typeof t && "undefined" != typeof t.exports && (t.exports = i)
}, function(t, e) {
    "use strict";
    Flatsome.behavior("animate", {
        attach: function(t) {
            jQuery("[data-animate]", t).each(function(t, e) {
                var i = jQuery(e),
                    n = i.data("animate");
                if (0 === n.length) return i.attr("data-animated", "true");
                i.waypoint(function(t) {
                    if ("down" === t) {
                        if ("true" == i.data("animated")) return;
                        setTimeout(function() { i.attr("data-animated", "true") }, 300)
                    }
                }, { offset: "101%" })
            })
        },
        detach: function(t) { jQuery("[data-animate]", t).each(function(t, e) { jQuery(e).attr("data-animated", "false") }) }
    })
}, function(t, e) {
    "use strict";
    Flatsome.behavior("commons", {
        attach: function(t) {
            jQuery("select.resizeselect").resizeselect(), jQuery("[data-parallax]", t).flatsomeParallax(), jQuery.fn.packery && (jQuery("[data-packery-options], .has-packery", t).each(function() {
                var t = jQuery(this);
                t.packery(), setTimeout(function() { t.imagesLoaded(function() { t.packery("layout") }) }, 100)
            }), jQuery(".banner-grid-wrapper").imagesLoaded(function() { jQuery(this.elements).removeClass("processing") }))
        },
        detach: function(t) {}
    })
}, function(t, e, i) {
    "use strict";

    function n(t) { return t && t.__esModule ? t : { default: t } }
    var o = i(101),
        r = n(o);
    Flatsome.behavior("count-up", {
        attach: function(t) {
            jQuery("span.count-up", t).each(function(t, e) {
                var i = jQuery(e);
                i.waypoint({
                    handler: function(t) {
                        if (!jQuery(this.element).hasClass("active")) {
                            var e = parseInt(i.text()),
                                n = new r.default(i.get(0), 0, e, 0, 4);
                            n.start(), i.addClass("active")
                        }
                    },
                    offset: "100%"
                })
            })
        }
    })
}, function(t, e, i) {
    var n, o;
    ! function(r, s) { n = s, o = "function" == typeof n ? n.call(e, i, e, t) : n, !(void 0 !== o && (t.exports = o)) }(this, function(t, e, i) {
        var n = function(t, e, i, n, o, r) {
            function s(t) {
                var e, i, n, o, r, s, a = t < 0;
                if (t = Math.abs(t).toFixed(c.decimals), t += "", e = t.split("."), i = e[0], n = e.length > 1 ? c.options.decimal + e[1] : "", c.options.useGrouping) {
                    for (o = "", r = 0, s = i.length; r < s; ++r) 0 !== r && r % 3 === 0 && (o = c.options.separator + o), o = i[s - r - 1] + o;
                    i = o
                }
                return c.options.numerals.length && (i = i.replace(/[0-9]/g, function(t) { return c.options.numerals[+t] }), n = n.replace(/[0-9]/g, function(t) { return c.options.numerals[+t] })), (a ? "-" : "") + c.options.prefix + i + n + c.options.suffix
            }

            function a(t, e, i, n) { return i * (-Math.pow(2, -10 * t / n) + 1) * 1024 / 1023 + e }

            function l(t) { return "number" == typeof t && !isNaN(t) }
            var c = this;
            if (c.version = function() { return "1.9.3" }, c.options = { useEasing: !0, useGrouping: !0, separator: ",", decimal: ".", easingFn: a, formattingFn: s, prefix: "", suffix: "", numerals: [] }, r && "object" == typeof r)
                for (var u in c.options) r.hasOwnProperty(u) && null !== r[u] && (c.options[u] = r[u]);
            "" === c.options.separator ? c.options.useGrouping = !1 : c.options.separator = "" + c.options.separator;
            for (var d = 0, h = ["webkit", "moz", "ms", "o"], p = 0; p < h.length && !window.requestAnimationFrame; ++p) window.requestAnimationFrame = window[h[p] + "RequestAnimationFrame"], window.cancelAnimationFrame = window[h[p] + "CancelAnimationFrame"] || window[h[p] + "CancelRequestAnimationFrame"];
            window.requestAnimationFrame || (window.requestAnimationFrame = function(t, e) {
                var i = (new Date).getTime(),
                    n = Math.max(0, 16 - (i - d)),
                    o = window.setTimeout(function() { t(i + n) }, n);
                return d = i + n, o
            }), window.cancelAnimationFrame || (window.cancelAnimationFrame = function(t) { clearTimeout(t) }), c.initialize = function() { return !(!c.initialized && (c.error = "", c.d = "string" == typeof t ? document.getElementById(t) : t, c.d ? (c.startVal = Number(e), c.endVal = Number(i), l(c.startVal) && l(c.endVal) ? (c.decimals = Math.max(0, n || 0), c.dec = Math.pow(10, c.decimals), c.duration = 1e3 * Number(o) || 2e3, c.countDown = c.startVal > c.endVal, c.frameVal = c.startVal, c.initialized = !0, 0) : (c.error = "[CountUp] startVal (" + e + ") or endVal (" + i + ") is not a number", 1)) : (c.error = "[CountUp] target is null or undefined", 1))) }, c.printValue = function(t) { var e = c.options.formattingFn(t); "INPUT" === c.d.tagName ? this.d.value = e : "text" === c.d.tagName || "tspan" === c.d.tagName ? this.d.textContent = e : this.d.innerHTML = e }, c.count = function(t) {
                c.startTime || (c.startTime = t), c.timestamp = t;
                var e = t - c.startTime;
                c.remaining = c.duration - e, c.options.useEasing ? c.countDown ? c.frameVal = c.startVal - c.options.easingFn(e, 0, c.startVal - c.endVal, c.duration) : c.frameVal = c.options.easingFn(e, c.startVal, c.endVal - c.startVal, c.duration) : c.countDown ? c.frameVal = c.startVal - (c.startVal - c.endVal) * (e / c.duration) : c.frameVal = c.startVal + (c.endVal - c.startVal) * (e / c.duration), c.countDown ? c.frameVal = c.frameVal < c.endVal ? c.endVal : c.frameVal : c.frameVal = c.frameVal > c.endVal ? c.endVal : c.frameVal, c.frameVal = Math.round(c.frameVal * c.dec) / c.dec, c.printValue(c.frameVal), e < c.duration ? c.rAF = requestAnimationFrame(c.count) : c.callback && c.callback()
            }, c.start = function(t) { c.initialize() && (c.callback = t, c.rAF = requestAnimationFrame(c.count)) }, c.pauseResume = function() { c.paused ? (c.paused = !1, delete c.startTime, c.duration = c.remaining, c.startVal = c.frameVal, requestAnimationFrame(c.count)) : (c.paused = !0, cancelAnimationFrame(c.rAF)) }, c.reset = function() { c.paused = !1, delete c.startTime, c.initialized = !1, c.initialize() && (cancelAnimationFrame(c.rAF), c.printValue(c.startVal)) }, c.update = function(t) {
                if (c.initialize()) {
                    if (t = Number(t), !l(t)) return void(c.error = "[CountUp] update() - new endVal is not a number: " + t);
                    c.error = "", t !== c.frameVal && (cancelAnimationFrame(c.rAF), c.paused = !1, delete c.startTime, c.startVal = c.frameVal, c.endVal = t, c.countDown = c.startVal > c.endVal, c.rAF = requestAnimationFrame(c.count))
                }
            }, c.initialize() && c.printValue(c.startVal)
        };
        return n
    })
}, function(t, e) {
    (function(t) {
        "use strict";

        function e(e) {
            var i = e,
                n = jQuery(".header-inner").width();
            if (n < 750) return !1;
            var o = Math.max(document.documentElement.clientWidth, window.innerWidth || 0),
                r = i.offset().left - (o - n) / 2;
            t.flatsomeVars.rtl && (r = jQuery(window).width() - (i.offset().left + i.outerWidth()) - (o - n) / 2);
            var s = i.width(),
                a = n - (r + s),
                l = !1;
            r > a && r < s && (l = (r + a) / 3), a < 0 && (l = -a), l && t.flatsomeVars.rtl ? i.css("margin-right", -l) : l && i.css("margin-left", -l), s > n && i.addClass("nav-dropdown-full")
        }
        Flatsome.behavior("dropdown", {
            attach: function(t) {
                jQuery(".nav li.has-dropdown", t).each(function(t, i) {
                    var n = jQuery(i),
                        o = !1,
                        r = !1;
                    n.on("touchstart click", function(t) { "touchstart" === t.type && (o = !0), "click" === t.type && o && (o && !r && t.preventDefault(), r = !0) }), n.hoverIntent({ sensitivity: 3, interval: 20, timeout: 70, over: function(t) { n.addClass("current-dropdown"), e(n.find(".nav-dropdown")) }, out: function() { r = !1, o = !1, n.find(".nav-dropdown").attr("style", ""), n.removeClass("current-dropdown") } })
                })
            }
        })
    }).call(e, function() { return this }())
}, function(t, e) {
    "use strict";
    Flatsome.behavior("lightbox-gallery", { attach: function(t) { jQuery('.lightbox .gallery a[href*=".jpg"], .lightbox .gallery a[href*=".jpeg"], .lightbox a.lightbox-gallery', t).parent().magnificPopup({ delegate: "a", type: "image", closeBtnInside: !1, tLoading: '<div class="loading-spin centered dark"></div>', removalDelay: 300, gallery: { enabled: !0, navigateByImgClick: !0, arrowMarkup: '<button class="mfp-arrow mfp-arrow-%dir%" title="%title%"><i class="icon-angle-%dir%"></i></button>', preload: [0, 1] }, image: { tError: '<a href="%url%">The image #%curr%</a> could not be loaded.', verticalFit: !1 } }) } })
}, function(t, e) {
    "use strict";
    Flatsome.behavior("lightbox-image", { attach: function(t) { jQuery('.lightbox *[id^="attachment"] a,.lightbox a.image-lightbox,.lightbox .entry-content a[href*=".jpg"],.lightbox .entry-content a[href*=".jpeg"]', t).not('.lightbox a.lightbox-gallery, .lightbox .gallery a[href*=".jpg"],.lightbox .gallery a[href*=".jpeg"]').magnificPopup({ type: "image", tLoading: '<div class="loading-spin centered dark"></div>', closeOnContentClick: !0, closeBtnInside: !1, removalDelay: 300, image: { verticalFit: !1 } }) } })
}, function(t, e) {
    "use strict";
    Flatsome.behavior("lightboxes-link", {
        attach: function(t) {
            jQuery(".lightbox-by-id", t).each(function() {
                var e = jQuery(this).attr("id");
                jQuery('a[href="#' + e + '"]', t).on("click", function(t) {
                    var e = jQuery(t.currentTarget),
                        i = e.attr("href").substring(1),
                        n = jQuery("#" + i + ".lightbox-by-id");
                    if (i && n.length > 0) {
                        var o = n[0],
                            r = jQuery.magnificPopup.open ? 300 : 0;
                        r && jQuery.magnificPopup.close(), setTimeout(function() { jQuery.magnificPopup.open({ removalDelay: 300, closeBtnInside: !1, items: { src: o, type: "inline", tLoading: '<div class="loading-spin dark"></div>' } }) }, r), t.preventDefault()
                    }
                })
            })
        }
    })
}, function(t, e) {
    "use strict";
    Flatsome.behavior("lightbox-video", { attach: function(t) { jQuery('a.open-video, a.button[href*="vimeo"], a.button[href*="youtube.com/watch"]', t).magnificPopup({ type: "iframe", closeBtnInside: !1, mainClass: "my-mfp-video", tLoading: '<div class="loading-spin centered dark"></div>', removalDelay: 300, preloader: !0, callbacks: { open: function() { jQuery(".slider .is-selected .video").trigger("pause") }, close: function() { jQuery(".slider .is-selected .video").trigger("play") } } }) } })
}, function(t, e) {
    "use strict";
    Flatsome.behavior("lightboxes", {
        attach: function(t) {
            jQuery("[data-open]", t).on("click", function(t) {
                var e = jQuery(t.currentTarget),
                    i = e.data("open"),
                    n = e.data("color"),
                    o = e.data("bg"),
                    r = e.data("pos"),
                    s = e.data("visible-after"),
                    a = e.data("class"),
                    l = e.attr("data-focus");
                e.offset();
                e.addClass("current-lightbox-clicked"), jQuery.magnificPopup.open({ items: { src: i, type: "inline", tLoading: '<div class="loading-spin dark"></div>' }, removalDelay: 300, closeBtnInside: !1, focus: l, callbacks: { beforeOpen: function() { this.st.mainClass = "off-canvas " + n + " off-canvas-" + r }, open: function() { jQuery("html").addClass("has-off-canvas"), jQuery("html").addClass("has-off-canvas-" + r), a && jQuery(".mfp-content").addClass(a), o && jQuery(".mfp-bg").addClass(o), jQuery.fn.packery && jQuery("[data-packery-options], .has-packery").packery("layout") }, beforeClose: function() { jQuery("html").removeClass("has-off-canvas") }, afterClose: function() { jQuery("html").removeClass("has-off-canvas-" + r), jQuery(".current-lightbox-clicked").removeClass("current-lightbox-clicked"), s && jQuery(i).removeClass("mfp-hide") } } }), t.preventDefault()
            })
        }
    })
}, function(t, e) {
    "use strict";
    Flatsome.behavior("slider", {
        attach: function(t) {
            var e;
            e = jQuery(t).data("flickityOptions") ? jQuery(t) : jQuery("[data-flickity-options]", t), e.each(function(t, e) {
                var i = jQuery(e),
                    n = i.closest(".slider-wrapper"),
                    o = i.data("flickity-options");
                if ("undefined" != typeof UxBuilder && (o.draggable = !1), o.watchCSS !== !0) {
                    var r = i.flickity(o);
                    if (i.imagesLoaded(function() { n.find(".loading-spin").fadeOut() }), i.on("cellSelect.flickity", function() { i.find(".banner:not(.is-selected) .video-bg").trigger("pause"), i.find(".banner.is-selected .video-bg").trigger("play") }), i.on("dragStart.flickity", function() { i.addClass("is-dragging") }), i.on("dragEnd.flickity", function() { i.removeClass("is-dragging") }), o.parallax) {
                        var s = r.data("flickity"),
                            a = i.find(".bg, .flickity-slider > .img img");
                        i.addClass("slider-has-parallax"), i.on("scroll.flickity", function(t, e) {
                            s.slides.forEach(function(t, e) {
                                var i = a[e],
                                    n = (t.target + s.x) * -1 / o.parallax;
                                i && (i.style.transform = "translateX( " + n + "px)")
                            })
                        })
                    }
                }
            })
        },
        detach: function(t) { jQuery(t).data("flickityOptions") ? jQuery(t).flickity("destroy") : jQuery("[data-flickity-options]", t).flickity("destroy") }
    })
}, function(t, e) {
    "use strict";

    function i(t, e, i) { e.each(function(e, i) { return jQuery(i).parent().toggleClass("active", e === t) }), i.each(function(e, i) { return jQuery(i).toggleClass("active", e === t) }), jQuery("[data-flickity-options]", i[t]).flickity("resize") }
    Flatsome.behavior("tabs", {
        attach: function(t) {
            jQuery(".tabbed-content", t).each(function(t, e) {
                var n = jQuery(e),
                    o = n.find("> .nav > li > a"),
                    r = n.find("> .tab-panels > .panel");
                r.removeAttr("style"), o.each(function(t, e) { location.hash.substr(1).length && "reviews" === location.hash.substr(1) && (jQuery.scrollTo(".reviews_tab", { duration: 300, offset: -150 }), i(t, o, r)), location.hash.substr(1).length && location.hash.substr(1) === e.hash.substr(1) && i(t, o, r), jQuery(e).on("click", function(e) { i(t, o, r), e.preventDefault(), e.stopPropagation() }) })
            })
        }
    })
}, function(t, e) {
    "use strict";
    Flatsome.behavior("toggle", {
        attach: function(t) {
            jQuery(".widget ul.children, .nav ul.children, .menu .sub-menu", t).each(function() { jQuery(this).parent().addClass("has-child").attr("aria-expanded", "false"), jQuery(this).before('<button class="toggle"><i style="font-size:13px" class="fa-solid fa-chevron-down"></i></button>') }), jQuery(".current-cat-parent", t).addClass("active").attr("aria-expanded", "true").removeClass("current-cat-parent"), jQuery(".toggle", t).click(function(t) {
                var e = jQuery(this);
                e.parent().toggleClass("active"), e.parent().attr("aria-expanded", "false" === e.parent().attr("aria-expanded") ? "true" : "false"), t.preventDefault()
            }), jQuery(".sidebar-menu li.menu-item.has-child", t).each(function() {
                var t = jQuery(this),
                    e = t.find("> a:first");
                "#" === e.attr("href") && e.click(function(e) { e.preventDefault(), t.toggleClass("active"), t.attr("aria-expanded", "false" === t.attr("aria-expanded") ? "true" : "false") })
            })
        }
    })
}, function(t, e) {
    "use strict";
    Flatsome.behavior("back-to-top", { attach: function(t) { jQuery("body", t).waypoint({ handler: function(e) { jQuery(".back-to-top", t).toggleClass("active") }, offset: "-100%" }) } })
}, function(t, e) {
    "use strict";
    Flatsome.behavior("scroll-to", {
        attach: function() {
            var t = jQuery("span.scroll-to"),
                e = jQuery(".scroll-to-bullets"),
                i = flatsomeVars.sticky_height;
            e.length && (e.children().tooltipster("destroy"), e.remove()), jQuery("li.scroll-to-link").remove(), t.length && (e = jQuery('<div class="scroll-to-bullets hide-for-medium"/>'), jQuery("body").append(e), t.each(function(t, e) {
                var n = jQuery(e),
                    o = n.data("link"),
                    r = n.data("title"),
                    s = n.data("bullet"),
                    a = n.offset().top - i,
                    l = 'a[href*="' + (o || "<nolink>") + '"]';
                if (s) {
                    var c = jQuery('\n          <a href="' + o + '" data-title="' + r + '" title="' + r + '">\n          <strong></strong>\n          </a>\n        ');
                    c.tooltipster({ position: "left", delay: 50, contentAsHTML: !0, touchDevices: !1 }), jQuery(".scroll-to-bullets").append(c)
                }
                var u = jQuery('\n          <li class="scroll-to-link"><a data-animate="fadeIn" href="' + o + '" data-title="' + r + '" title="' + r + '">\n          ' + r + "\n          </a></li>\n        ");
                if (jQuery("li.nav-single-page").before(u), setTimeout(function() { jQuery(".scroll-to-link a").attr("data-animated", "true") }, 300), n.waypoint(function(t) { jQuery(".scroll-to-bullets a, .scroll-to-link").removeClass("active"), jQuery(".scroll-to-bullets").find(l).addClass("active"), jQuery(".nav-single-page").parent().find(l).parent().addClass("active"), "up" === t && jQuery(".scroll-to-bullets, .nav-single-page").find(l).removeClass("active").prev().addClass("active") }, { offset: i }), jQuery(l).off("click").on("click", function(t) { jQuery.scrollTo(a, { duration: 500, axis: "y" }), jQuery.magnificPopup.close(), t.preventDefault() }), location.hash) {
                    var d = location.hash.replace("#", "");
                    jQuery(function(t) { return jQuery.scrollTo("a[name=" + d + "]", { duration: 300, offset: -i }), !1 })
                }
            }))
        },
        detach: function() { jQuery("span.scroll-to").length && setTimeout(this.attach, 0) }
    })
}, function(t, e) {
    "use strict";
    Flatsome.behavior("accordion", {
        attach: function(t) {
            jQuery(".accordion", t).each(function() {
                var t = jQuery(this).attr("rel");
                t > 0 && (jQuery(this).find(".accordion-item:nth-child(" + t + ") .accordion-inner").show(), jQuery(this).find(".accordion-item:nth-child(" + t + ") .accordion-inner").prev().addClass("active"))
            })
        }
    }), Flatsome.behavior("accordion-title", { attach: function(t) { jQuery(".accordion-title", t).each(function(t) { jQuery(this).click(function(t) { jQuery(this).next().is(":hidden") ? (jQuery(this).parent().parent().find(".accordion-title").removeClass("active").next().slideUp(200), jQuery(this).toggleClass("active").next().slideDown(200), jQuery(this).parent().parent().find("[data-flickity-options]").flickity("resize"), /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) && jQuery.scrollTo(jQuery(this), 300, { offset: -100 })) : jQuery(this).parent().parent().find(".accordion-title").removeClass("active").next().slideUp(200), t.preventDefault() }) }) } })
}, function(t, e) {
    "use strict";
    Flatsome.behavior("tooltips", { attach: function(t) { jQuery(".tooltip, .has-tooltip, .tip-top, li.chosen a", t).tooltipster(), jQuery(".tooltip-as-html", t).tooltipster({ interactive: !0, contentAsHTML: !0 }) } })
}, function(t, e) {
    "use strict";
    Flatsome.behavior("lazy-load-bg", {
        attach: function(t) {
            jQuery(".bg", t).each(function(t, e) {
                var i = jQuery(e);
                i.waypoint(function(t) { i.addClass("bg-loaded") }, { offset: "110%" })
            })
        }
    })
}, function(t, e) {
    "use strict";
    Flatsome.behavior("sticky-section", {
        attach: function(t) {
            jQuery(".sticky-section", t).each(function(t, e) {
                var i = jQuery(e);
                i.waypoint(function(t) { "down" === t && (i.addClass("is-sticky-section"), i.after('<div class="sticky-section-helper"></div>')), "up" === t && (i.removeClass("is-sticky-section"), i.next(".sticky-section-helper").remove()) }, { offset: "0.1px" }), i.waypoint(function(t) { "down" === t && (i.removeClass("is-sticky-section"), i.next(".sticky-section-helper").remove()), "up" === t && (i.addClass("is-sticky-section"), i.after('<div class="sticky-section-helper"></div>')) }, { offset: "-100%" })
            })
        }
    })
}, function(t, e) {
    "use strict";
    Flatsome.behavior("sticky-sidebar", {
        attach: function(t) {
            var e = parseInt(flatsomeVars.sticky_height) + 15;
            jQuery(".is-sticky-column", t).each(function(t, i) { jQuery(i).stickySidebar({ topSpacing: e, bottomSpacing: 15, minWidth: 850, innerWrapperSelector: ".is-sticky-column__inner" }), jQuery(document).on("updated_checkout", function() { jQuery(i).stickySidebar("updateSticky") }) })
        }
    })
}, function(t, e) {
    "use strict";
    Flatsome.behavior("youtube", {
        attach: function(t) {
            var e = jQuery(".ux-youtube", t);
            0 !== e.length && (window.onYouTubePlayerAPIReady = function() {
                e.each(function() {
                    var t = jQuery(this),
                        e = t.attr("id"),
                        i = t.data("videoid"),
                        n = t.data("loop"),
                        o = t.data("audio");
                    new YT.Player(e, { height: "100%", width: "100%", playerVars: { html5: 1, autoplay: 1, controls: 0, rel: 0, modestbranding: 1, playsinline: 1, showinfo: 0, fs: 0, loop: n, el: 0, playlist: n ? i : void 0 }, videoId: i, events: { onReady: function(t) { 0 === o && t.target.mute() } } })
                })
            }, function(t, e, i) {
                var n, o = t.getElementsByTagName(e)[0];
                t.getElementById(i) || (n = t.createElement(e), n.id = i, n.src = "https://www.youtube.com/player_api", o.parentNode.insertBefore(n, o))
            }(document, "script", "youtube-jssdk"))
        }
    })
}]);