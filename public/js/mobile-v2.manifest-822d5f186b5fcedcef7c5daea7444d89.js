/*!
 * jQuery JavaScript Library v2.1.4
 * http://jquery.com/
 *
 * Includes Sizzle.js
 * http://sizzlejs.com/
 *
 * Copyright 2005, 2014 jQuery Foundation, Inc. and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2015-04-28T16:01Z
 */
function _classCallCheck (e, t) {
	if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck (e, t) {
	if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck (e, t) {
	if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck (e, t) {
	if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck (e, t) {
	if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck (e, t) {
	if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck (e, t) {
	if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck (e, t) {
	if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck (e, t) {
	if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck (e, t) {
	if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck (e, t) {
	if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

function _classCallCheck (e, t) {
	if(!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

/*!
 * Materialize v0.97.8 (http://materializecss.com)
 * Copyright 2014-2015 Materialize
 * MIT License (https://raw.githubusercontent.com/Dogfalo/materialize/master/LICENSE)
 */
if(function(e, t) {
		"object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function(e) {
			if(!e.document) throw new Error("jQuery requires a window with a document");
			return t(e)
		} : t(e)
	}("undefined" != typeof window ? window : this, function(e, t) {
		function n (e) {
			var t = "length" in e && e.length, n = J.type(e);
			return "function" === n || J.isWindow(e) ? !1 : 1 === e.nodeType && t ? !0 : "array" === n || 0 === t || "number" == typeof t && t > 0 && t - 1 in e
		}

		function i (e, t, n) {
			if(J.isFunction(t)) return J.grep(e, function(e, i) {
				return !!t.call(e, i, e) !== n
			});
			if(t.nodeType) return J.grep(e, function(e) {
				return e === t !== n
			});
			if("string" == typeof t)
			{
				if(st.test(t)) return J.filter(t, e, n);
				t = J.filter(t, e)
			}
			return J.grep(e, function(e) {
				return Q.call(t, e) >= 0 !== n
			})
		}

		function a (e, t) {
			for(; (e = e[t]) && 1 !== e.nodeType;)
			{
				;
			}
			return e
		}

		function o (e) {
			var t = pt[e] = {};
			return J.each(e.match(ht) || [], function(e, n) {
				t[n] = !0
			}), t
		}

		function r () {
			K.removeEventListener("DOMContentLoaded", r, !1), e.removeEventListener("load", r, !1), J.ready()
		}

		function s () {
			Object.defineProperty(this.cache = {}, 0, {
				get: function() {
					return {}
				}
			}), this.expando = J.expando + s.uid++
		}

		function l (e, t, n) {
			var i;
			if(void 0 === n && 1 === e.nodeType) if(i = "data-" + t.replace(wt, "-$1").toLowerCase(), n = e.getAttribute(i), "string" == typeof n)
			{
				try
				{
					n = "true" === n ? !0 : "false" === n ? !1 : "null" === n ? null : +n + "" === n ? +n : bt.test(n) ? J.parseJSON(n) : n
				} catch (a)
				{
				}
				yt.set(e, t, n)
			}
			else n = void 0;
			return n
		}

		function u () {
			return !0
		}

		function c () {
			return !1
		}

		function d () {
			try
			{
				return K.activeElement
			} catch (e)
			{
			}
		}

		function f (e, t) {
			return J.nodeName(e, "table") && J.nodeName(11 !== t.nodeType ? t : t.firstChild, "tr") ? e.getElementsByTagName("tbody")[0] || e.appendChild(e.ownerDocument.createElement("tbody")) : e
		}

		function h (e) {
			return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e
		}

		function p (e) {
			var t = It.exec(e.type);
			return t ? e.type = t[1] : e.removeAttribute("type"), e
		}

		function m (e, t) {
			for(var n = 0, i = e.length; i > n; n++)
			{
				gt.set(e[n], "globalEval", !t || gt.get(t[n], "globalEval"))
			}
		}

		function v (e, t) {
			var n, i, a, o, r, s, l, u;
			if(1 === t.nodeType)
			{
				if(gt.hasData(e) && (o = gt.access(e), r = gt.set(t, o), u = o.events))
				{
					delete r.handle, r.events = {};
					for(a in u)
					{
						for(n = 0, i = u[a].length; i > n; n++)
						{
							J.event.add(t, a, u[a][n])
						}
					}
				}
				yt.hasData(e) && (s = yt.access(e), l = J.extend({}, s), yt.set(t, l))
			}
		}

		function g (e, t) {
			var n = e.getElementsByTagName ? e.getElementsByTagName(t || "*") : e.querySelectorAll ? e.querySelectorAll(t || "*") : [];
			return void 0 === t || t && J.nodeName(e, t) ? J.merge([e], n) : n
		}

		function y (e, t) {
			var n = t.nodeName.toLowerCase();
			"input" === n && Tt.test(e.type) ? t.checked = e.checked : ("input" === n || "textarea" === n) && (t.defaultValue = e.defaultValue)
		}

		function b (t, n) {
			var i, a = J(n.createElement(t)).appendTo(n.body),
				o = e.getDefaultComputedStyle && (i = e.getDefaultComputedStyle(a[0])) ? i.display : J.css(a[0], "display");
			return a.detach(), o
		}

		function w (e) {
			var t = K, n = Nt[e];
			return n || (n = b(e, t), "none" !== n && n || (Lt = (Lt || J("<iframe frameborder='0' width='0' height='0'/>")).appendTo(t.documentElement), t = Lt[0].contentDocument, t.write(), t.close(), n = b(e, t), Lt.detach()), Nt[e] = n), n
		}

		function x (e, t, n) {
			var i, a, o, r, s = e.style;
			return n = n || Wt(e), n && (r = n.getPropertyValue(t) || n[t]), n && ("" !== r || J.contains(e.ownerDocument, e) || (r = J.style(e, t)), Ht.test(r) && Mt.test(t) && (i = s.width, a = s.minWidth, o = s.maxWidth, s.minWidth = s.maxWidth = s.width = r, r = n.width, s.width = i, s.minWidth = a, s.maxWidth = o)), void 0 !== r ? r + "" : r
		}

		function C (e, t) {
			return {
				get: function() {
					return e() ? void delete this.get : (this.get = t).apply(this, arguments)
				}
			}
		}

		function k (e, t) {
			if(t in e) return t;
			for(var n = t[0].toUpperCase() + t.slice(1), i = t, a = Ut.length; a--;)
			{
				if(t = Ut[a] + n, t in e) return t;
			}
			return i
		}

		function T (e, t, n) {
			var i = Bt.exec(t);
			return i ? Math.max(0, i[1] - (n || 0)) + (i[2] || "px") : t
		}

		function S (e, t, n, i, a) {
			for(var o = n === (i ? "border" : "content") ? 4 : "width" === t ? 1 : 0, r = 0; 4 > o; o += 2)
			{
				"margin" === n && (r += J.css(e, n + Ct[o], !0, a)), i ? ("content" === n && (r -= J.css(e, "padding" + Ct[o], !0, a)), "margin" !== n && (r -= J.css(e, "border" + Ct[o] + "Width", !0, a))) : (r += J.css(e, "padding" + Ct[o], !0, a), "padding" !== n && (r += J.css(e, "border" + Ct[o] + "Width", !0, a)));
			}
			return r
		}

		function A (e, t, n) {
			var i = !0, a = "width" === t ? e.offsetWidth : e.offsetHeight, o = Wt(e),
				r = "border-box" === J.css(e, "boxSizing", !1, o);
			if(0 >= a || null == a)
			{
				if(a = x(e, t, o), (0 > a || null == a) && (a = e.style[t]), Ht.test(a)) return a;
				i = r && (G.boxSizingReliable() || a === e.style[t]), a = parseFloat(a) || 0
			}
			return a + S(e, t, n || (r ? "border" : "content"), i, o) + "px"
		}

		function $ (e, t) {
			for(var n, i, a, o = [], r = 0, s = e.length; s > r; r++)
			{
				i = e[r], i.style && (o[r] = gt.get(i, "olddisplay"), n = i.style.display, t ? (o[r] || "none" !== n || (i.style.display = ""), "" === i.style.display && kt(i) && (o[r] = gt.access(i, "olddisplay", w(i.nodeName)))) : (a = kt(i), "none" === n && a || gt.set(i, "olddisplay", a ? n : J.css(i, "display"))));
			}
			for(r = 0; s > r; r++)
			{
				i = e[r], i.style && (t && "none" !== i.style.display && "" !== i.style.display || (i.style.display = t ? o[r] || "" : "none"));
			}
			return e
		}

		function E (e, t, n, i, a) {
			return new E.prototype.init(e, t, n, i, a)
		}

		function F () {
			return setTimeout(function() {
				Gt = void 0
			}), Gt = J.now()
		}

		function _ (e, t) {
			var n, i = 0, a = {height: e};
			for(t = t ? 1 : 0; 4 > i; i += 2 - t)
			{
				n = Ct[i], a["margin" + n] = a["padding" + n] = e;
			}
			return t && (a.opacity = a.width = e), a
		}

		function O (e, t, n) {
			for(var i, a = (nn[t] || []).concat(nn["*"]), o = 0, r = a.length; r > o; o++)
			{
				if(i = a[o].call(n, t, e)) return i
			}
		}

		function P (e, t, n) {
			var i, a, o, r, s, l, u, c, d = this, f = {}, h = e.style, p = e.nodeType && kt(e), m = gt.get(e, "fxshow");
			n.queue || (s = J._queueHooks(e, "fx"), null == s.unqueued && (s.unqueued = 0, l = s.empty.fire, s.empty.fire = function() {
				s.unqueued || l()
			}), s.unqueued++, d.always(function() {
				d.always(function() {
					s.unqueued--, J.queue(e, "fx").length || s.empty.fire()
				})
			})), 1 === e.nodeType && ("height" in t || "width" in t) && (n.overflow = [h.overflow, h.overflowX, h.overflowY], u = J.css(e, "display"), c = "none" === u ? gt.get(e, "olddisplay") || w(e.nodeName) : u, "inline" === c && "none" === J.css(e, "float") && (h.display = "inline-block")), n.overflow && (h.overflow = "hidden", d.always(function() {
				h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2]
			}));
			for(i in t)
			{
				if(a = t[i], Zt.exec(a))
				{
					if(delete t[i], o = o || "toggle" === a, a === (p ? "hide" : "show"))
					{
						if("show" !== a || !m || void 0 === m[i]) continue;
						p = !0
					}
					f[i] = m && m[i] || J.style(e, i)
				}
				else u = void 0;
			}
			if(J.isEmptyObject(f)) "inline" === ("none" === u ? w(e.nodeName) : u) && (h.display = u);
			else
			{
				m ? "hidden" in m && (p = m.hidden) : m = gt.access(e, "fxshow", {}), o && (m.hidden = !p), p ? J(e).show() : d.done(function() {
					J(e).hide()
				}), d.done(function() {
					var t;
					gt.remove(e, "fxshow");
					for(t in f)
					{
						J.style(e, t, f[t])
					}
				});
				for(i in f)
				{
					r = O(p ? m[i] : 0, i, d), i in m || (m[i] = r.start, p && (r.end = r.start, r.start = "width" === i || "height" === i ? 1 : 0))
				}
			}
		}

		function D (e, t) {
			var n, i, a, o, r;
			for(n in e)
			{
				if(i = J.camelCase(n), a = t[i], o = e[n], J.isArray(o) && (a = o[1], o = e[n] = o[0]), n !== i && (e[i] = o, delete e[n]), r = J.cssHooks[i], r && "expand" in r)
				{
					o = r.expand(o), delete e[i];
					for(n in o)
					{
						n in e || (e[n] = o[n], t[n] = a)
					}
				}
				else t[i] = a
			}
		}

		function j (e, t, n) {
			var i, a, o = 0, r = tn.length, s = J.Deferred().always(function() {
				delete l.elem
			}), l = function() {
				if(a) return !1;
				for(var t = Gt || F(), n = Math.max(0, u.startTime + u.duration - t), i = n / u.duration || 0, o = 1 - i, r = 0, l = u.tweens.length; l > r; r++)
				{
					u.tweens[r].run(o);
				}
				return s.notifyWith(e, [u, o, n]), 1 > o && l ? n : (s.resolveWith(e, [u]), !1)
			}, u = s.promise({
				elem: e, props: J.extend({}, t), opts: J.extend(!0, {specialEasing: {}}, n), originalProperties: t, originalOptions: n, startTime: Gt || F(), duration: n.duration, tweens: [], createTween: function(t, n) {
					var i = J.Tween(e, u.opts, t, n, u.opts.specialEasing[t] || u.opts.easing);
					return u.tweens.push(i), i
				}, stop: function(t) {
					var n = 0, i = t ? u.tweens.length : 0;
					if(a) return this;
					for(a = !0; i > n; n++)
					{
						u.tweens[n].run(1);
					}
					return t ? s.resolveWith(e, [u, t]) : s.rejectWith(e, [u, t]), this
				}
			}), c = u.props;
			for(D(c, u.opts.specialEasing); r > o; o++)
			{
				if(i = tn[o].call(u, e, c, u.opts)) return i;
			}
			return J.map(c, O, u), J.isFunction(u.opts.start) && u.opts.start.call(e, u), J.fx.timer(J.extend(l, {elem: e, anim: u, queue: u.opts.queue})), u.progress(u.opts.progress).done(u.opts.done, u.opts.complete).fail(u.opts.fail).always(u.opts.always)
		}

		function z (e) {
			return function(t, n) {
				"string" != typeof t && (n = t, t = "*");
				var i, a = 0, o = t.toLowerCase().match(ht) || [];
				if(J.isFunction(n)) for(; i = o[a++];)
				{
					"+" === i[0] ? (i = i.slice(1) || "*", (e[i] = e[i] || []).unshift(n)) : (e[i] = e[i] || []).push(n)
				}
			}
		}

		function I (e, t, n, i) {
			function a (s) {
				var l;
				return o[s] = !0, J.each(e[s] || [], function(e, s) {
					var u = s(t, n, i);
					return "string" != typeof u || r || o[u] ? r ? !(l = u) : void 0 : (t.dataTypes.unshift(u), a(u), !1)
				}), l
			}

			var o = {}, r = e === wn;
			return a(t.dataTypes[0]) || !o["*"] && a("*")
		}

		function q (e, t) {
			var n, i, a = J.ajaxSettings.flatOptions || {};
			for(n in t)
			{
				void 0 !== t[n] && ((a[n] ? e : i || (i = {}))[n] = t[n]);
			}
			return i && J.extend(!0, e, i), e
		}

		function R (e, t, n) {
			for(var i, a, o, r, s = e.contents, l = e.dataTypes; "*" === l[0];)
			{
				l.shift(), void 0 === i && (i = e.mimeType || t.getResponseHeader("Content-Type"));
			}
			if(i) for(a in s)
			{
				if(s[a] && s[a].test(i))
				{
					l.unshift(a);
					break
				}
			}
			if(l[0] in n) o = l[0];
			else
			{
				for(a in n)
				{
					if(!l[0] || e.converters[a + " " + l[0]])
					{
						o = a;
						break
					}
					r || (r = a)
				}
				o = o || r
			}
			return o ? (o !== l[0] && l.unshift(o), n[o]) : void 0
		}

		function L (e, t, n, i) {
			var a, o, r, s, l, u = {}, c = e.dataTypes.slice();
			if(c[1]) for(r in e.converters)
			{
				u[r.toLowerCase()] = e.converters[r];
			}
			for(o = c.shift(); o;)
			{
				if(e.responseFields[o] && (n[e.responseFields[o]] = t), !l && i && e.dataFilter && (t = e.dataFilter(t, e.dataType)), l = o, o = c.shift()) if("*" === o) o = l;
				else if("*" !== l && l !== o)
				{
					if(r = u[l + " " + o] || u["* " + o], !r) for(a in u)
					{
						if(s = a.split(" "), s[1] === o && (r = u[l + " " + s[0]] || u["* " + s[0]]))
						{
							r === !0 ? r = u[a] : u[a] !== !0 && (o = s[0], c.unshift(s[1]));
							break
						}
					}
					if(r !== !0) if(r && e["throws"]) t = r(t);
					else try
						{
							t = r(t)
						} catch (d)
						{
							return {state: "parsererror", error: r ? d : "No conversion from " + l + " to " + o}
						}
				}
			}
			return {state: "success", data: t}
		}

		function N (e, t, n, i) {
			var a;
			if(J.isArray(t)) J.each(t, function(t, a) {
				n || Sn.test(e) ? i(e, a) : N(e + "[" + ("object" == typeof a ? t : "") + "]", a, n, i)
			});
			else if(n || "object" !== J.type(t)) i(e, t);
			else for(a in t)
				{
					N(e + "[" + a + "]", t[a], n, i)
				}
		}

		function M (e) {
			return J.isWindow(e) ? e : 9 === e.nodeType && e.defaultView
		}

		var H = [], W = H.slice, V = H.concat, B = H.push, Q = H.indexOf, X = {}, Y = X.toString, U = X.hasOwnProperty,
			G = {}, K = e.document, Z = "2.1.4", J = function(e, t) {
				return new J.fn.init(e, t)
			}, et = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, tt = /^-ms-/, nt = /-([\da-z])/gi, it = function(e, t) {
				return t.toUpperCase()
			};
		J.fn = J.prototype = {
			jquery: Z, constructor: J, selector: "", length: 0, toArray: function() {
				return W.call(this)
			}, get: function(e) {
				return null != e ? 0 > e ? this[e + this.length] : this[e] : W.call(this)
			}, pushStack: function(e) {
				var t = J.merge(this.constructor(), e);
				return t.prevObject = this, t.context = this.context, t
			}, each: function(e, t) {
				return J.each(this, e, t)
			}, map: function(e) {
				return this.pushStack(J.map(this, function(t, n) {
					return e.call(t, n, t)
				}))
			}, slice: function() {
				return this.pushStack(W.apply(this, arguments))
			}, first: function() {
				return this.eq(0)
			}, last: function() {
				return this.eq(-1)
			}, eq: function(e) {
				var t = this.length, n = +e + (0 > e ? t : 0);
				return this.pushStack(n >= 0 && t > n ? [this[n]] : [])
			}, end: function() {
				return this.prevObject || this.constructor(null)
			}, push: B, sort: H.sort, splice: H.splice
		}, J.extend = J.fn.extend = function() {
			var e, t, n, i, a, o, r = arguments[0] || {}, s = 1, l = arguments.length, u = !1;
			for("boolean" == typeof r && (u = r, r = arguments[s] || {}, s++), "object" == typeof r || J.isFunction(r) || (r = {}), s === l && (r = this, s--); l > s; s++)
			{
				if(null != (e = arguments[s])) for(t in e)
				{
					n = r[t], i = e[t], r !== i && (u && i && (J.isPlainObject(i) || (a = J.isArray(i))) ? (a ? (a = !1, o = n && J.isArray(n) ? n : []) : o = n && J.isPlainObject(n) ? n : {}, r[t] = J.extend(u, o, i)) : void 0 !== i && (r[t] = i));
				}
			}
			return r
		}, J.extend({
			expando: "jQuery" + (Z + Math.random()).replace(/\D/g, ""), isReady: !0, error: function(e) {
				throw new Error(e)
			}, noop: function() {
			}, isFunction: function(e) {
				return "function" === J.type(e)
			}, isArray: Array.isArray, isWindow: function(e) {
				return null != e && e === e.window
			}, isNumeric: function(e) {
				return !J.isArray(e) && e - parseFloat(e) + 1 >= 0
			}, isPlainObject: function(e) {
				return "object" !== J.type(e) || e.nodeType || J.isWindow(e) ? !1 : e.constructor && !U.call(e.constructor.prototype, "isPrototypeOf") ? !1 : !0
			}, isEmptyObject: function(e) {
				var t;
				for(t in e)
				{
					return !1;
				}
				return !0
			}, type: function(e) {
				return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? X[Y.call(e)] || "object" : typeof e
			}, globalEval: function(e) {
				var t, n = eval;
				e = J.trim(e), e && (1 === e.indexOf("use strict") ? (t = K.createElement("script"), t.text = e, K.head.appendChild(t).parentNode.removeChild(t)) : n(e))
			}, camelCase: function(e) {
				return e.replace(tt, "ms-").replace(nt, it)
			}, nodeName: function(e, t) {
				return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
			}, each: function(e, t, i) {
				var a, o = 0, r = e.length, s = n(e);
				if(i)
				{
					if(s) for(; r > o && (a = t.apply(e[o], i), a !== !1); o++)
					{
						;
					}
					else for(o in e)
					{
						if(a = t.apply(e[o], i), a === !1) break
					}
				}
				else if(s) for(; r > o && (a = t.call(e[o], o, e[o]), a !== !1); o++)
				{
					;
				}
				else for(o in e)
					{
						if(a = t.call(e[o], o, e[o]), a === !1) break;
					}
				return e
			}, trim: function(e) {
				return null == e ? "" : (e + "").replace(et, "")
			}, makeArray: function(e, t) {
				var i = t || [];
				return null != e && (n(Object(e)) ? J.merge(i, "string" == typeof e ? [e] : e) : B.call(i, e)), i
			}, inArray: function(e, t, n) {
				return null == t ? -1 : Q.call(t, e, n)
			}, merge: function(e, t) {
				for(var n = +t.length, i = 0, a = e.length; n > i; i++)
				{
					e[a++] = t[i];
				}
				return e.length = a, e
			}, grep: function(e, t, n) {
				for(var i, a = [], o = 0, r = e.length, s = !n; r > o; o++)
				{
					i = !t(e[o], o), i !== s && a.push(e[o]);
				}
				return a
			}, map: function(e, t, i) {
				var a, o = 0, r = e.length, s = n(e), l = [];
				if(s) for(; r > o; o++)
				{
					a = t(e[o], o, i), null != a && l.push(a);
				}
				else for(o in e)
				{
					a = t(e[o], o, i), null != a && l.push(a);
				}
				return V.apply([], l)
			}, guid: 1, proxy: function(e, t) {
				var n, i, a;
				return "string" == typeof t && (n = e[t], t = e, e = n), J.isFunction(e) ? (i = W.call(arguments, 2), a = function() {
					return e.apply(t || this, i.concat(W.call(arguments)))
				}, a.guid = e.guid = e.guid || J.guid++, a) : void 0
			}, now: Date.now, support: G
		}), J.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function(e, t) {
			X["[object " + t + "]"] = t.toLowerCase()
		});
		var at = /*!
 * Sizzle CSS Selector Engine v2.2.0-pre
 * http://sizzlejs.com/
 *
 * Copyright 2008, 2014 jQuery Foundation, Inc. and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2014-12-16
 */
			function(e) {
				function t (e, t, n, i) {
					var a, o, r, s, l, u, d, h, p, m;
					if((t ? t.ownerDocument || t : N) !== P && O(t), t = t || P, n = n || [], s = t.nodeType, "string" != typeof e || !e || 1 !== s && 9 !== s && 11 !== s) return n;
					if(!i && j)
					{
						if(11 !== s && (a = yt.exec(e))) if(r = a[1])
						{
							if(9 === s)
							{
								if(o = t.getElementById(r), !o || !o.parentNode) return n;
								if(o.id === r) return n.push(o), n
							}
							else if(t.ownerDocument && (o = t.ownerDocument.getElementById(r)) && R(t, o) && o.id === r) return n.push(o), n
						}
						else
						{
							if(a[2]) return Z.apply(n, t.getElementsByTagName(e)), n;
							if((r = a[3]) && x.getElementsByClassName) return Z.apply(n, t.getElementsByClassName(r)), n
						}
						if(x.qsa && (!z || !z.test(e)))
						{
							if(h = d = L, p = t, m = 1 !== s && e, 1 === s && "object" !== t.nodeName.toLowerCase())
							{
								for(u = S(e), (d = t.getAttribute("id")) ? h = d.replace(wt, "\\$&") : t.setAttribute("id", h), h = "[id='" + h + "'] ", l = u.length; l--;)
								{
									u[l] = h + f(u[l]);
								}
								p = bt.test(e) && c(t.parentNode) || t, m = u.join(",")
							}
							if(m) try
							{
								return Z.apply(n, p.querySelectorAll(m)), n
							} catch (v)
							{
							} finally
							{
								d || t.removeAttribute("id")
							}
						}
					}
					return $(e.replace(lt, "$1"), t, n, i)
				}

				function n () {
					function e (n, i) {
						return t.push(n + " ") > C.cacheLength && delete e[t.shift()], e[n + " "] = i
					}

					var t = [];
					return e
				}

				function i (e) {
					return e[L] = !0, e
				}

				function a (e) {
					var t = P.createElement("div");
					try
					{
						return !!e(t)
					} catch (n)
					{
						return !1
					} finally
					{
						t.parentNode && t.parentNode.removeChild(t), t = null
					}
				}

				function o (e, t) {
					for(var n = e.split("|"), i = e.length; i--;)
					{
						C.attrHandle[n[i]] = t
					}
				}

				function r (e, t) {
					var n = t && e,
						i = n && 1 === e.nodeType && 1 === t.nodeType && (~t.sourceIndex || X) - (~e.sourceIndex || X);
					if(i) return i;
					if(n) for(; n = n.nextSibling;)
					{
						if(n === t) return -1;
					}
					return e ? 1 : -1
				}

				function s (e) {
					return function(t) {
						var n = t.nodeName.toLowerCase();
						return "input" === n && t.type === e
					}
				}

				function l (e) {
					return function(t) {
						var n = t.nodeName.toLowerCase();
						return ("input" === n || "button" === n) && t.type === e
					}
				}

				function u (e) {
					return i(function(t) {
						return t = +t, i(function(n, i) {
							for(var a, o = e([], n.length, t), r = o.length; r--;)
							{
								n[a = o[r]] && (n[a] = !(i[a] = n[a]))
							}
						})
					})
				}

				function c (e) {
					return e && "undefined" != typeof e.getElementsByTagName && e
				}

				function d () {
				}

				function f (e) {
					for(var t = 0, n = e.length, i = ""; n > t; t++)
					{
						i += e[t].value;
					}
					return i
				}

				function h (e, t, n) {
					var i = t.dir, a = n && "parentNode" === i, o = H++;
					return t.first ? function(t, n, o) {
						for(; t = t[i];)
						{
							if(1 === t.nodeType || a) return e(t, n, o)
						}
					} : function(t, n, r) {
						var s, l, u = [M, o];
						if(r)
						{
							for(; t = t[i];)
							{
								if((1 === t.nodeType || a) && e(t, n, r)) return !0
							}
						}
						else for(; t = t[i];)
						{
							if(1 === t.nodeType || a)
							{
								if(l = t[L] || (t[L] = {}), (s = l[i]) && s[0] === M && s[1] === o) return u[2] = s[2];
								if(l[i] = u, u[2] = e(t, n, r)) return !0
							}
						}
					}
				}

				function p (e) {
					return e.length > 1 ? function(t, n, i) {
						for(var a = e.length; a--;)
						{
							if(!e[a](t, n, i)) return !1;
						}
						return !0
					} : e[0]
				}

				function m (e, n, i) {
					for(var a = 0, o = n.length; o > a; a++)
					{
						t(e, n[a], i);
					}
					return i
				}

				function v (e, t, n, i, a) {
					for(var o, r = [], s = 0, l = e.length, u = null != t; l > s; s++)
					{
						(o = e[s]) && (!n || n(o, i, a)) && (r.push(o), u && t.push(s));
					}
					return r
				}

				function g (e, t, n, a, o, r) {
					return a && !a[L] && (a = g(a)), o && !o[L] && (o = g(o, r)), i(function(i, r, s, l) {
						var u, c, d, f = [], h = [], p = r.length, g = i || m(t || "*", s.nodeType ? [s] : s, []),
							y = !e || !i && t ? g : v(g, f, e, s, l), b = n ? o || (i ? e : p || a) ? [] : r : y;
						if(n && n(y, b, s, l), a) for(u = v(b, h), a(u, [], s, l), c = u.length; c--;)
						{
							(d = u[c]) && (b[h[c]] = !(y[h[c]] = d));
						}
						if(i)
						{
							if(o || e)
							{
								if(o)
								{
									for(u = [], c = b.length; c--;)
									{
										(d = b[c]) && u.push(y[c] = d);
									}
									o(null, b = [], u, l)
								}
								for(c = b.length; c--;)
								{
									(d = b[c]) && (u = o ? et(i, d) : f[c]) > -1 && (i[u] = !(r[u] = d))
								}
							}
						}
						else b = v(b === r ? b.splice(p, b.length) : b), o ? o(null, r, b, l) : Z.apply(r, b)
					})
				}

				function y (e) {
					for(
						var t, n, i, a = e.length, o = C.relative[e[0].type], r = o || C.relative[" "], s = o ? 1 : 0, l = h(function(e) {
							return e === t
						}, r, !0), u = h(function(e) {
							return et(t, e) > -1
						}, r, !0), c = [function(e, n, i) {
							var a = !o && (i || n !== E) || ((t = n).nodeType ? l(e, n, i) : u(e, n, i));
							return t = null, a
						}]; a > s; s++)
					{
						if(n = C.relative[e[s].type]) c = [h(p(c), n)];
						else
						{
							if(n = C.filter[e[s].type].apply(null, e[s].matches), n[L])
							{
								for(i = ++s; a > i && !C.relative[e[i].type]; i++)
								{
									;
								}
								return g(s > 1 && p(c), s > 1 && f(e.slice(0, s - 1).concat({value: " " === e[s - 2].type ? "*" : ""})).replace(lt, "$1"), n, i > s && y(e.slice(s, i)), a > i && y(e = e.slice(i)), a > i && f(e))
							}
							c.push(n)
						}
					}
					return p(c)
				}

				function b (e, n) {
					var a = n.length > 0, o = e.length > 0, r = function(i, r, s, l, u) {
						var c, d, f, h = 0, p = "0", m = i && [], g = [], y = E, b = i || o && C.find.TAG("*", u),
							w = M += null == y ? 1 : Math.random() || .1, x = b.length;
						for(u && (E = r !== P && r); p !== x && null != (c = b[p]); p++)
						{
							if(o && c)
							{
								for(d = 0; f = e[d++];)
								{
									if(f(c, r, s))
									{
										l.push(c);
										break
									}
								}
								u && (M = w)
							}
							a && ((c = !f && c) && h--, i && m.push(c))
						}
						if(h += p, a && p !== h)
						{
							for(d = 0; f = n[d++];)
							{
								f(m, g, r, s);
							}
							if(i)
							{
								if(h > 0) for(; p--;)
								{
									m[p] || g[p] || (g[p] = G.call(l));
								}
								g = v(g)
							}
							Z.apply(l, g), u && !i && g.length > 0 && h + n.length > 1 && t.uniqueSort(l)
						}
						return u && (M = w, E = y), m
					};
					return a ? i(r) : r
				}

				var w, x, C, k, T, S, A, $, E, F, _, O, P, D, j, z, I, q, R, L = "sizzle" + 1 * new Date,
					N = e.document, M = 0, H = 0, W = n(), V = n(), B = n(), Q = function(e, t) {
						return e === t && (_ = !0), 0
					}, X = 1 << 31, Y = {}.hasOwnProperty, U = [], G = U.pop, K = U.push, Z = U.push, J = U.slice,
					et = function(e, t) {
						for(var n = 0, i = e.length; i > n; n++)
						{
							if(e[n] === t) return n;
						}
						return -1
					},
					tt = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
					nt = "[\\x20\\t\\r\\n\\f]", it = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+", at = it.replace("w", "w#"),
					ot = "\\[" + nt + "*(" + it + ")(?:" + nt + "*([*^$|!~]?=)" + nt + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + at + "))|)" + nt + "*\\]",
					rt = ":(" + it + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + ot + ")*)|.*)\\)|)",
					st = new RegExp(nt + "+", "g"),
					lt = new RegExp("^" + nt + "+|((?:^|[^\\\\])(?:\\\\.)*)" + nt + "+$", "g"),
					ut = new RegExp("^" + nt + "*," + nt + "*"),
					ct = new RegExp("^" + nt + "*([>+~]|" + nt + ")" + nt + "*"),
					dt = new RegExp("=" + nt + "*([^\\]'\"]*?)" + nt + "*\\]", "g"), ft = new RegExp(rt),
					ht = new RegExp("^" + at + "$"),
					pt = {ID: new RegExp("^#(" + it + ")"), CLASS: new RegExp("^\\.(" + it + ")"), TAG: new RegExp("^(" + it.replace("w", "w*") + ")"), ATTR: new RegExp("^" + ot), PSEUDO: new RegExp("^" + rt), CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + nt + "*(even|odd|(([+-]|)(\\d*)n|)" + nt + "*(?:([+-]|)" + nt + "*(\\d+)|))" + nt + "*\\)|)", "i"), bool: new RegExp("^(?:" + tt + ")$", "i"), needsContext: new RegExp("^" + nt + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + nt + "*((?:-\\d)?\\d*)" + nt + "*\\)|)(?=[^-]|$)", "i")},
					mt = /^(?:input|select|textarea|button)$/i, vt = /^h\d$/i, gt = /^[^{]+\{\s*\[native \w/,
					yt = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, bt = /[+~]/, wt = /'|\\/g,
					xt = new RegExp("\\\\([\\da-f]{1,6}" + nt + "?|(" + nt + ")|.)", "ig"), Ct = function(e, t, n) {
						var i = "0x" + t - 65536;
						return i !== i || n ? t : 0 > i ? String.fromCharCode(i + 65536) : String.fromCharCode(i >> 10 | 55296, 1023 & i | 56320)
					}, kt = function() {
						O()
					};
				try
				{
					Z.apply(U = J.call(N.childNodes), N.childNodes), U[N.childNodes.length].nodeType
				} catch (Tt)
				{
					Z = {
						apply: U.length ? function(e, t) {
							K.apply(e, J.call(t))
						} : function(e, t) {
							for(var n = e.length, i = 0; e[n++] = t[i++];)
							{
								;
							}
							e.length = n - 1
						}
					}
				}
				x = t.support = {}, T = t.isXML = function(e) {
					var t = e && (e.ownerDocument || e).documentElement;
					return t ? "HTML" !== t.nodeName : !1
				}, O = t.setDocument = function(e) {
					var t, n, i = e ? e.ownerDocument || e : N;
					return i !== P && 9 === i.nodeType && i.documentElement ? (P = i, D = i.documentElement, n = i.defaultView, n && n !== n.top && (n.addEventListener ? n.addEventListener("unload", kt, !1) : n.attachEvent && n.attachEvent("onunload", kt)), j = !T(i), x.attributes = a(function(e) {
						return e.className = "i", !e.getAttribute("className")
					}), x.getElementsByTagName = a(function(e) {
						return e.appendChild(i.createComment("")), !e.getElementsByTagName("*").length
					}), x.getElementsByClassName = gt.test(i.getElementsByClassName), x.getById = a(function(e) {
						return D.appendChild(e).id = L, !i.getElementsByName || !i.getElementsByName(L).length
					}), x.getById ? (C.find.ID = function(e, t) {
						if("undefined" != typeof t.getElementById && j)
						{
							var n = t.getElementById(e);
							return n && n.parentNode ? [n] : []
						}
					}, C.filter.ID = function(e) {
						var t = e.replace(xt, Ct);
						return function(e) {
							return e.getAttribute("id") === t
						}
					}) : (delete C.find.ID, C.filter.ID = function(e) {
						var t = e.replace(xt, Ct);
						return function(e) {
							var n = "undefined" != typeof e.getAttributeNode && e.getAttributeNode("id");
							return n && n.value === t
						}
					}), C.find.TAG = x.getElementsByTagName ? function(e, t) {
						return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e) : x.qsa ? t.querySelectorAll(e) : void 0
					} : function(e, t) {
						var n, i = [], a = 0, o = t.getElementsByTagName(e);
						if("*" === e)
						{
							for(; n = o[a++];)
							{
								1 === n.nodeType && i.push(n);
							}
							return i
						}
						return o
					}, C.find.CLASS = x.getElementsByClassName && function(e, t) {
						return j ? t.getElementsByClassName(e) : void 0
					}, I = [], z = [], (x.qsa = gt.test(i.querySelectorAll)) && (a(function(e) {
						D.appendChild(e).innerHTML = "<a id='" + L + "'></a><select id='" + L + "-\f]' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && z.push("[*^$]=" + nt + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || z.push("\\[" + nt + "*(?:value|" + tt + ")"), e.querySelectorAll("[id~=" + L + "-]").length || z.push("~="), e.querySelectorAll(":checked").length || z.push(":checked"), e.querySelectorAll("a#" + L + "+*").length || z.push(".#.+[+~]")
					}), a(function(e) {
						var t = i.createElement("input");
						t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && z.push("name" + nt + "*[*^$|!~]?="), e.querySelectorAll(":enabled").length || z.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), z.push(",.*:")
					})), (x.matchesSelector = gt.test(q = D.matches || D.webkitMatchesSelector || D.mozMatchesSelector || D.oMatchesSelector || D.msMatchesSelector)) && a(function(e) {
						x.disconnectedMatch = q.call(e, "div"), q.call(e, "[s!='']:x"), I.push("!=", rt)
					}), z = z.length && new RegExp(z.join("|")), I = I.length && new RegExp(I.join("|")), t = gt.test(D.compareDocumentPosition), R = t || gt.test(D.contains) ? function(e, t) {
						var n = 9 === e.nodeType ? e.documentElement : e, i = t && t.parentNode;
						return e === i || !(!i || 1 !== i.nodeType || !(n.contains ? n.contains(i) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(i)))
					} : function(e, t) {
						if(t) for(; t = t.parentNode;)
						{
							if(t === e) return !0;
						}
						return !1
					}, Q = t ? function(e, t) {
						if(e === t) return _ = !0, 0;
						var n = !e.compareDocumentPosition - !t.compareDocumentPosition;
						return n ? n : (n = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1, 1 & n || !x.sortDetached && t.compareDocumentPosition(e) === n ? e === i || e.ownerDocument === N && R(N, e) ? -1 : t === i || t.ownerDocument === N && R(N, t) ? 1 : F ? et(F, e) - et(F, t) : 0 : 4 & n ? -1 : 1)
					} : function(e, t) {
						if(e === t) return _ = !0, 0;
						var n, a = 0, o = e.parentNode, s = t.parentNode, l = [e], u = [t];
						if(!o || !s) return e === i ? -1 : t === i ? 1 : o ? -1 : s ? 1 : F ? et(F, e) - et(F, t) : 0;
						if(o === s) return r(e, t);
						for(n = e; n = n.parentNode;)
						{
							l.unshift(n);
						}
						for(n = t; n = n.parentNode;)
						{
							u.unshift(n);
						}
						for(; l[a] === u[a];)
						{
							a++;
						}
						return a ? r(l[a], u[a]) : l[a] === N ? -1 : u[a] === N ? 1 : 0
					}, i) : P
				}, t.matches = function(e, n) {
					return t(e, null, null, n)
				}, t.matchesSelector = function(e, n) {
					if((e.ownerDocument || e) !== P && O(e), n = n.replace(dt, "='$1']"), !(!x.matchesSelector || !j || I && I.test(n) || z && z.test(n))) try
					{
						var i = q.call(e, n);
						if(i || x.disconnectedMatch || e.document && 11 !== e.document.nodeType) return i
					} catch (a)
					{
					}
					return t(n, P, null, [e]).length > 0
				}, t.contains = function(e, t) {
					return (e.ownerDocument || e) !== P && O(e), R(e, t)
				}, t.attr = function(e, t) {
					(e.ownerDocument || e) !== P && O(e);
					var n = C.attrHandle[t.toLowerCase()],
						i = n && Y.call(C.attrHandle, t.toLowerCase()) ? n(e, t, !j) : void 0;
					return void 0 !== i ? i : x.attributes || !j ? e.getAttribute(t) : (i = e.getAttributeNode(t)) && i.specified ? i.value : null
				}, t.error = function(e) {
					throw new Error("Syntax error, unrecognized expression: " + e)
				}, t.uniqueSort = function(e) {
					var t, n = [], i = 0, a = 0;
					if(_ = !x.detectDuplicates, F = !x.sortStable && e.slice(0), e.sort(Q), _)
					{
						for(; t = e[a++];)
						{
							t === e[a] && (i = n.push(a));
						}
						for(; i--;)
						{
							e.splice(n[i], 1)
						}
					}
					return F = null, e
				}, k = t.getText = function(e) {
					var t, n = "", i = 0, a = e.nodeType;
					if(a)
					{
						if(1 === a || 9 === a || 11 === a)
						{
							if("string" == typeof e.textContent) return e.textContent;
							for(e = e.firstChild; e; e = e.nextSibling)
							{
								n += k(e)
							}
						}
						else if(3 === a || 4 === a) return e.nodeValue
					}
					else for(; t = e[i++];)
					{
						n += k(t);
					}
					return n
				}, C = t.selectors = {
					cacheLength: 50, createPseudo: i, match: pt, attrHandle: {}, find: {}, relative: {">": {dir: "parentNode", first: !0}, " ": {dir: "parentNode"}, "+": {dir: "previousSibling", first: !0}, "~": {dir: "previousSibling"}}, preFilter: {
						ATTR: function(e) {
							return e[1] = e[1].replace(xt, Ct), e[3] = (e[3] || e[4] || e[5] || "").replace(xt, Ct), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4)
						}, CHILD: function(e) {
							return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || t.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && t.error(e[0]), e
						}, PSEUDO: function(e) {
							var t, n = !e[6] && e[2];
							return pt.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && ft.test(n) && (t = S(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3))
						}
					}, filter: {
						TAG: function(e) {
							var t = e.replace(xt, Ct).toLowerCase();
							return "*" === e ? function() {
								return !0
							} : function(e) {
								return e.nodeName && e.nodeName.toLowerCase() === t
							}
						}, CLASS: function(e) {
							var t = W[e + " "];
							return t || (t = new RegExp("(^|" + nt + ")" + e + "(" + nt + "|$)")) && W(e, function(e) {
								return t.test("string" == typeof e.className && e.className || "undefined" != typeof e.getAttribute && e.getAttribute("class") || "")
							})
						}, ATTR: function(e, n, i) {
							return function(a) {
								var o = t.attr(a, e);
								return null == o ? "!=" === n : n ? (o += "", "=" === n ? o === i : "!=" === n ? o !== i : "^=" === n ? i && 0 === o.indexOf(i) : "*=" === n ? i && o.indexOf(i) > -1 : "$=" === n ? i && o.slice(-i.length) === i : "~=" === n ? (" " + o.replace(st, " ") + " ").indexOf(i) > -1 : "|=" === n ? o === i || o.slice(0, i.length + 1) === i + "-" : !1) : !0
							}
						}, CHILD: function(e, t, n, i, a) {
							var o = "nth" !== e.slice(0, 3), r = "last" !== e.slice(-4), s = "of-type" === t;
							return 1 === i && 0 === a ? function(e) {
								return !!e.parentNode
							} : function(t, n, l) {
								var u, c, d, f, h, p, m = o !== r ? "nextSibling" : "previousSibling", v = t.parentNode,
									g = s && t.nodeName.toLowerCase(), y = !l && !s;
								if(v)
								{
									if(o)
									{
										for(; m;)
										{
											for(d = t; d = d[m];)
											{
												if(s ? d.nodeName.toLowerCase() === g : 1 === d.nodeType) return !1;
											}
											p = m = "only" === e && !p && "nextSibling"
										}
										return !0
									}
									if(p = [r ? v.firstChild : v.lastChild], r && y)
									{
										for(c = v[L] || (v[L] = {}), u = c[e] || [], h = u[0] === M && u[1], f = u[0] === M && u[2], d = h && v.childNodes[h]; d = ++h && d && d[m] || (f = h = 0) || p.pop();)
										{
											if(1 === d.nodeType && ++f && d === t)
											{
												c[e] = [M, h, f];
												break
											}
										}
									}
									else if(y && (u = (t[L] || (t[L] = {}))[e]) && u[0] === M) f = u[1];
									else for(; (d = ++h && d && d[m] || (f = h = 0) || p.pop()) && ((s ? d.nodeName.toLowerCase() !== g : 1 !== d.nodeType) || !++f || (y && ((d[L] || (d[L] = {}))[e] = [M, f]), d !== t));)
										{
											;
										}
									return f -= a, f === i || f % i === 0 && f / i >= 0
								}
							}
						}, PSEUDO: function(e, n) {
							var a,
								o = C.pseudos[e] || C.setFilters[e.toLowerCase()] || t.error("unsupported pseudo: " + e);
							return o[L] ? o(n) : o.length > 1 ? (a = [e, e, "", n], C.setFilters.hasOwnProperty(e.toLowerCase()) ? i(function(e, t) {
								for(var i, a = o(e, n), r = a.length; r--;)
								{
									i = et(e, a[r]), e[i] = !(t[i] = a[r])
								}
							}) : function(e) {
								return o(e, 0, a)
							}) : o
						}
					}, pseudos: {
						not: i(function(e) {
							var t = [], n = [], a = A(e.replace(lt, "$1"));
							return a[L] ? i(function(e, t, n, i) {
								for(var o, r = a(e, null, i, []), s = e.length; s--;)
								{
									(o = r[s]) && (e[s] = !(t[s] = o))
								}
							}) : function(e, i, o) {
								return t[0] = e, a(t, null, o, n), t[0] = null, !n.pop()
							}
						}), has: i(function(e) {
							return function(n) {
								return t(e, n).length > 0
							}
						}), contains: i(function(e) {
							return e = e.replace(xt, Ct), function(t) {
								return (t.textContent || t.innerText || k(t)).indexOf(e) > -1
							}
						}), lang: i(function(e) {
							return ht.test(e || "") || t.error("unsupported lang: " + e), e = e.replace(xt, Ct).toLowerCase(), function(t) {
								var n;
								do if(n = j ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return n = n.toLowerCase(), n === e || 0 === n.indexOf(e + "-"); while((t = t.parentNode) && 1 === t.nodeType);
								return !1
							}
						}), target: function(t) {
							var n = e.location && e.location.hash;
							return n && n.slice(1) === t.id
						}, root: function(e) {
							return e === D
						}, focus: function(e) {
							return e === P.activeElement && (!P.hasFocus || P.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
						}, enabled: function(e) {
							return e.disabled === !1
						}, disabled: function(e) {
							return e.disabled === !0
						}, checked: function(e) {
							var t = e.nodeName.toLowerCase();
							return "input" === t && !!e.checked || "option" === t && !!e.selected
						}, selected: function(e) {
							return e.parentNode && e.parentNode.selectedIndex, e.selected === !0
						}, empty: function(e) {
							for(e = e.firstChild; e; e = e.nextSibling)
							{
								if(e.nodeType < 6) return !1;
							}
							return !0
						}, parent: function(e) {
							return !C.pseudos.empty(e)
						}, header: function(e) {
							return vt.test(e.nodeName)
						}, input: function(e) {
							return mt.test(e.nodeName)
						}, button: function(e) {
							var t = e.nodeName.toLowerCase();
							return "input" === t && "button" === e.type || "button" === t
						}, text: function(e) {
							var t;
							return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
						}, first: u(function() {
							return [0]
						}), last: u(function(e, t) {
							return [t - 1]
						}), eq: u(function(e, t, n) {
							return [0 > n ? n + t : n]
						}), even: u(function(e, t) {
							for(var n = 0; t > n; n += 2)
							{
								e.push(n);
							}
							return e
						}), odd: u(function(e, t) {
							for(var n = 1; t > n; n += 2)
							{
								e.push(n);
							}
							return e
						}), lt: u(function(e, t, n) {
							for(var i = 0 > n ? n + t : n; --i >= 0;)
							{
								e.push(i);
							}
							return e
						}), gt: u(function(e, t, n) {
							for(var i = 0 > n ? n + t : n; ++i < t;)
							{
								e.push(i);
							}
							return e
						})
					}
				}, C.pseudos.nth = C.pseudos.eq;
				for(w in{radio: !0, checkbox: !0, file: !0, password: !0, image: !0})
				{
					C.pseudos[w] = s(w);
				}
				for(w in{submit: !0, reset: !0})
				{
					C.pseudos[w] = l(w);
				}
				return d.prototype = C.filters = C.pseudos, C.setFilters = new d, S = t.tokenize = function(e, n) {
					var i, a, o, r, s, l, u, c = V[e + " "];
					if(c) return n ? 0 : c.slice(0);
					for(s = e, l = [], u = C.preFilter; s;)
					{
						(!i || (a = ut.exec(s))) && (a && (s = s.slice(a[0].length) || s), l.push(o = [])), i = !1, (a = ct.exec(s)) && (i = a.shift(), o.push({value: i, type: a[0].replace(lt, " ")}), s = s.slice(i.length));
						for(r in C.filter)
						{
							!(a = pt[r].exec(s)) || u[r] && !(a = u[r](a)) || (i = a.shift(), o.push({value: i, type: r, matches: a}), s = s.slice(i.length));
						}
						if(!i) break
					}
					return n ? s.length : s ? t.error(e) : V(e, l).slice(0)
				}, A = t.compile = function(e, t) {
					var n, i = [], a = [], o = B[e + " "];
					if(!o)
					{
						for(t || (t = S(e)), n = t.length; n--;)
						{
							o = y(t[n]), o[L] ? i.push(o) : a.push(o);
						}
						o = B(e, b(a, i)), o.selector = e
					}
					return o
				}, $ = t.select = function(e, t, n, i) {
					var a, o, r, s, l, u = "function" == typeof e && e, d = !i && S(e = u.selector || e);
					if(n = n || [], 1 === d.length)
					{
						if(o = d[0] = d[0].slice(0), o.length > 2 && "ID" === (r = o[0]).type && x.getById && 9 === t.nodeType && j && C.relative[o[1].type])
						{
							if(t = (C.find.ID(r.matches[0].replace(xt, Ct), t) || [])[0], !t) return n;
							u && (t = t.parentNode), e = e.slice(o.shift().value.length)
						}
						for(a = pt.needsContext.test(e) ? 0 : o.length; a-- && (r = o[a], !C.relative[s = r.type]);)
						{
							if((l = C.find[s]) && (i = l(r.matches[0].replace(xt, Ct), bt.test(o[0].type) && c(t.parentNode) || t)))
							{
								if(o.splice(a, 1), e = i.length && f(o), !e) return Z.apply(n, i), n;
								break
							}
						}
					}
					return (u || A(e, d))(i, t, !j, n, bt.test(e) && c(t.parentNode) || t), n
				}, x.sortStable = L.split("").sort(Q).join("") === L, x.detectDuplicates = !!_, O(), x.sortDetached = a(function(e) {
					return 1 & e.compareDocumentPosition(P.createElement("div"))
				}), a(function(e) {
					return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href")
				}) || o("type|href|height|width", function(e, t, n) {
					return n ? void 0 : e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
				}), x.attributes && a(function(e) {
					return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value")
				}) || o("value", function(e, t, n) {
					return n || "input" !== e.nodeName.toLowerCase() ? void 0 : e.defaultValue
				}), a(function(e) {
					return null == e.getAttribute("disabled")
				}) || o(tt, function(e, t, n) {
					var i;
					return n ? void 0 : e[t] === !0 ? t.toLowerCase() : (i = e.getAttributeNode(t)) && i.specified ? i.value : null
				}), t
			}(e);
		J.find = at, J.expr = at.selectors, J.expr[":"] = J.expr.pseudos, J.unique = at.uniqueSort, J.text = at.getText, J.isXMLDoc = at.isXML, J.contains = at.contains;
		var ot = J.expr.match.needsContext, rt = /^<(\w+)\s*\/?>(?:<\/\1>|)$/, st = /^.[^:#\[\.,]*$/;
		J.filter = function(e, t, n) {
			var i = t[0];
			return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === i.nodeType ? J.find.matchesSelector(i, e) ? [i] : [] : J.find.matches(e, J.grep(t, function(e) {
				return 1 === e.nodeType
			}))
		}, J.fn.extend({
			find: function(e) {
				var t, n = this.length, i = [], a = this;
				if("string" != typeof e) return this.pushStack(J(e).filter(function() {
					for(t = 0; n > t; t++)
					{
						if(J.contains(a[t], this)) return !0
					}
				}));
				for(t = 0; n > t; t++)
				{
					J.find(e, a[t], i);
				}
				return i = this.pushStack(n > 1 ? J.unique(i) : i), i.selector = this.selector ? this.selector + " " + e : e, i
			}, filter: function(e) {
				return this.pushStack(i(this, e || [], !1))
			}, not: function(e) {
				return this.pushStack(i(this, e || [], !0))
			}, is: function(e) {
				return !!i(this, "string" == typeof e && ot.test(e) ? J(e) : e || [], !1).length
			}
		});
		var lt, ut = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/, ct = J.fn.init = function(e, t) {
			var n, i;
			if(!e) return this;
			if("string" == typeof e)
			{
				if(n = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : ut.exec(e), !n || !n[1] && t) return !t || t.jquery ? (t || lt).find(e) : this.constructor(t).find(e);
				if(n[1])
				{
					if(t = t instanceof J ? t[0] : t, J.merge(this, J.parseHTML(n[1], t && t.nodeType ? t.ownerDocument || t : K, !0)), rt.test(n[1]) && J.isPlainObject(t)) for(n in t)
					{
						J.isFunction(this[n]) ? this[n](t[n]) : this.attr(n, t[n]);
					}
					return this
				}
				return i = K.getElementById(n[2]), i && i.parentNode && (this.length = 1, this[0] = i), this.context = K, this.selector = e, this
			}
			return e.nodeType ? (this.context = this[0] = e, this.length = 1, this) : J.isFunction(e) ? "undefined" != typeof lt.ready ? lt.ready(e) : e(J) : (void 0 !== e.selector && (this.selector = e.selector, this.context = e.context), J.makeArray(e, this))
		};
		ct.prototype = J.fn, lt = J(K);
		var dt = /^(?:parents|prev(?:Until|All))/, ft = {children: !0, contents: !0, next: !0, prev: !0};
		J.extend({
			dir: function(e, t, n) {
				for(var i = [], a = void 0 !== n; (e = e[t]) && 9 !== e.nodeType;)
				{
					if(1 === e.nodeType)
					{
						if(a && J(e).is(n)) break;
						i.push(e)
					}
				}
				return i
			}, sibling: function(e, t) {
				for(var n = []; e; e = e.nextSibling)
				{
					1 === e.nodeType && e !== t && n.push(e);
				}
				return n
			}
		}), J.fn.extend({
			has: function(e) {
				var t = J(e, this), n = t.length;
				return this.filter(function() {
					for(var e = 0; n > e; e++)
					{
						if(J.contains(this, t[e])) return !0
					}
				})
			}, closest: function(e, t) {
				for(var n, i = 0, a = this.length, o = [], r = ot.test(e) || "string" != typeof e ? J(e, t || this.context) : 0; a > i; i++)
				{
					for(n = this[i]; n && n !== t; n = n.parentNode)
					{
						if(n.nodeType < 11 && (r ? r.index(n) > -1 : 1 === n.nodeType && J.find.matchesSelector(n, e)))
						{
							o.push(n);
							break
						}
					}
				}
				return this.pushStack(o.length > 1 ? J.unique(o) : o)
			}, index: function(e) {
				return e ? "string" == typeof e ? Q.call(J(e), this[0]) : Q.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
			}, add: function(e, t) {
				return this.pushStack(J.unique(J.merge(this.get(), J(e, t))))
			}, addBack: function(e) {
				return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
			}
		}), J.each({
			parent: function(e) {
				var t = e.parentNode;
				return t && 11 !== t.nodeType ? t : null
			}, parents: function(e) {
				return J.dir(e, "parentNode")
			}, parentsUntil: function(e, t, n) {
				return J.dir(e, "parentNode", n)
			}, next: function(e) {
				return a(e, "nextSibling")
			}, prev: function(e) {
				return a(e, "previousSibling")
			}, nextAll: function(e) {
				return J.dir(e, "nextSibling")
			}, prevAll: function(e) {
				return J.dir(e, "previousSibling")
			}, nextUntil: function(e, t, n) {
				return J.dir(e, "nextSibling", n)
			}, prevUntil: function(e, t, n) {
				return J.dir(e, "previousSibling", n)
			}, siblings: function(e) {
				return J.sibling((e.parentNode || {}).firstChild, e)
			}, children: function(e) {
				return J.sibling(e.firstChild)
			}, contents: function(e) {
				return e.contentDocument || J.merge([], e.childNodes)
			}
		}, function(e, t) {
			J.fn[e] = function(n, i) {
				var a = J.map(this, t, n);
				return "Until" !== e.slice(-5) && (i = n), i && "string" == typeof i && (a = J.filter(i, a)), this.length > 1 && (ft[e] || J.unique(a), dt.test(e) && a.reverse()), this.pushStack(a)
			}
		});
		var ht = /\S+/g, pt = {};
		J.Callbacks = function(e) {
			e = "string" == typeof e ? pt[e] || o(e) : J.extend({}, e);
			var t, n, i, a, r, s, l = [], u = !e.once && [], c = function(o) {
				for(t = e.memory && o, n = !0, s = a || 0, a = 0, r = l.length, i = !0; l && r > s; s++)
				{
					if(l[s].apply(o[0], o[1]) === !1 && e.stopOnFalse)
					{
						t = !1;
						break
					}
				}
				i = !1, l && (u ? u.length && c(u.shift()) : t ? l = [] : d.disable())
			}, d = {
				add: function() {
					if(l)
					{
						var n = l.length;
						!function o (t) {
							J.each(t, function(t, n) {
								var i = J.type(n);
								"function" === i ? e.unique && d.has(n) || l.push(n) : n && n.length && "string" !== i && o(n)
							})
						}(arguments), i ? r = l.length : t && (a = n, c(t))
					}
					return this
				}, remove: function() {
					return l && J.each(arguments, function(e, t) {
						for(var n; (n = J.inArray(t, l, n)) > -1;)
						{
							l.splice(n, 1), i && (r >= n && r--, s >= n && s--)
						}
					}), this
				}, has: function(e) {
					return e ? J.inArray(e, l) > -1 : !(!l || !l.length)
				}, empty: function() {
					return l = [], r = 0, this
				}, disable: function() {
					return l = u = t = void 0, this
				}, disabled: function() {
					return !l
				}, lock: function() {
					return u = void 0, t || d.disable(), this
				}, locked: function() {
					return !u
				}, fireWith: function(e, t) {
					return !l || n && !u || (t = t || [], t = [e, t.slice ? t.slice() : t], i ? u.push(t) : c(t)), this
				}, fire: function() {
					return d.fireWith(this, arguments), this
				}, fired: function() {
					return !!n
				}
			};
			return d
		}, J.extend({
			Deferred: function(e) {
				var t = [["resolve", "done", J.Callbacks("once memory"), "resolved"], ["reject", "fail", J.Callbacks("once memory"), "rejected"], ["notify", "progress", J.Callbacks("memory")]],
					n = "pending", i = {
						state: function() {
							return n
						}, always: function() {
							return a.done(arguments).fail(arguments), this
						}, then: function() {
							var e = arguments;
							return J.Deferred(function(n) {
								J.each(t, function(t, o) {
									var r = J.isFunction(e[t]) && e[t];
									a[o[1]](function() {
										var e = r && r.apply(this, arguments);
										e && J.isFunction(e.promise) ? e.promise().done(n.resolve).fail(n.reject).progress(n.notify) : n[o[0] + "With"](this === i ? n.promise() : this, r ? [e] : arguments)
									})
								}), e = null
							}).promise()
						}, promise: function(e) {
							return null != e ? J.extend(e, i) : i
						}
					}, a = {};
				return i.pipe = i.then, J.each(t, function(e, o) {
					var r = o[2], s = o[3];
					i[o[1]] = r.add, s && r.add(function() {
						n = s
					}, t[1 ^ e][2].disable, t[2][2].lock), a[o[0]] = function() {
						return a[o[0] + "With"](this === a ? i : this, arguments), this
					}, a[o[0] + "With"] = r.fireWith
				}), i.promise(a), e && e.call(a, a), a
			}, when: function(e) {
				var t, n, i, a = 0, o = W.call(arguments), r = o.length,
					s = 1 !== r || e && J.isFunction(e.promise) ? r : 0, l = 1 === s ? e : J.Deferred(),
					u = function(e, n, i) {
						return function(a) {
							n[e] = this, i[e] = arguments.length > 1 ? W.call(arguments) : a, i === t ? l.notifyWith(n, i) : --s || l.resolveWith(n, i)
						}
					};
				if(r > 1) for(t = new Array(r), n = new Array(r), i = new Array(r); r > a; a++)
				{
					o[a] && J.isFunction(o[a].promise) ? o[a].promise().done(u(a, i, o)).fail(l.reject).progress(u(a, n, t)) : --s;
				}
				return s || l.resolveWith(i, o), l.promise()
			}
		});
		var mt;
		J.fn.ready = function(e) {
			return J.ready.promise().done(e), this
		}, J.extend({
			isReady: !1, readyWait: 1, holdReady: function(e) {
				e ? J.readyWait++ : J.ready(!0)
			}, ready: function(e) {
				(e === !0 ? --J.readyWait : J.isReady) || (J.isReady = !0, e !== !0 && --J.readyWait > 0 || (mt.resolveWith(K, [J]), J.fn.triggerHandler && (J(K).triggerHandler("ready"), J(K).off("ready"))))
			}
		}), J.ready.promise = function(t) {
			return mt || (mt = J.Deferred(), "complete" === K.readyState ? setTimeout(J.ready) : (K.addEventListener("DOMContentLoaded", r, !1), e.addEventListener("load", r, !1))), mt.promise(t)
		}, J.ready.promise();
		var vt = J.access = function(e, t, n, i, a, o, r) {
			var s = 0, l = e.length, u = null == n;
			if("object" === J.type(n))
			{
				a = !0;
				for(s in n)
				{
					J.access(e, t, s, n[s], !0, o, r)
				}
			}
			else if(void 0 !== i && (a = !0, J.isFunction(i) || (r = !0), u && (r ? (t.call(e, i), t = null) : (u = t, t = function(e, t, n) {
					return u.call(J(e), n)
				})), t)) for(; l > s; s++)
			{
				t(e[s], n, r ? i : i.call(e[s], s, t(e[s], n)));
			}
			return a ? e : u ? t.call(e) : l ? t(e[0], n) : o
		};
		J.acceptData = function(e) {
			return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
		}, s.uid = 1, s.accepts = J.acceptData, s.prototype = {
			key: function(e) {
				if(!s.accepts(e)) return 0;
				var t = {}, n = e[this.expando];
				if(!n)
				{
					n = s.uid++;
					try
					{
						t[this.expando] = {value: n}, Object.defineProperties(e, t)
					} catch (i)
					{
						t[this.expando] = n, J.extend(e, t)
					}
				}
				return this.cache[n] || (this.cache[n] = {}), n
			}, set: function(e, t, n) {
				var i, a = this.key(e), o = this.cache[a];
				if("string" == typeof t) o[t] = n;
				else if(J.isEmptyObject(o)) J.extend(this.cache[a], t);
				else for(i in t)
					{
						o[i] = t[i];
					}
				return o
			}, get: function(e, t) {
				var n = this.cache[this.key(e)];
				return void 0 === t ? n : n[t]
			}, access: function(e, t, n) {
				var i;
				return void 0 === t || t && "string" == typeof t && void 0 === n ? (i = this.get(e, t), void 0 !== i ? i : this.get(e, J.camelCase(t))) : (this.set(e, t, n), void 0 !== n ? n : t)
			}, remove: function(e, t) {
				var n, i, a, o = this.key(e), r = this.cache[o];
				if(void 0 === t) this.cache[o] = {};
				else
				{
					J.isArray(t) ? i = t.concat(t.map(J.camelCase)) : (a = J.camelCase(t), t in r ? i = [t, a] : (i = a, i = i in r ? [i] : i.match(ht) || [])), n = i.length;
					for(; n--;)
					{
						delete r[i[n]]
					}
				}
			}, hasData: function(e) {
				return !J.isEmptyObject(this.cache[e[this.expando]] || {})
			}, discard: function(e) {
				e[this.expando] && delete this.cache[e[this.expando]]
			}
		};
		var gt = new s, yt = new s, bt = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/, wt = /([A-Z])/g;
		J.extend({
			hasData: function(e) {
				return yt.hasData(e) || gt.hasData(e)
			}, data: function(e, t, n) {
				return yt.access(e, t, n)
			}, removeData: function(e, t) {
				yt.remove(e, t)
			}, _data: function(e, t, n) {
				return gt.access(e, t, n)
			}, _removeData: function(e, t) {
				gt.remove(e, t)
			}
		}), J.fn.extend({
			data: function(e, t) {
				var n, i, a, o = this[0], r = o && o.attributes;
				if(void 0 === e)
				{
					if(this.length && (a = yt.get(o), 1 === o.nodeType && !gt.get(o, "hasDataAttrs")))
					{
						for(n = r.length; n--;)
						{
							r[n] && (i = r[n].name, 0 === i.indexOf("data-") && (i = J.camelCase(i.slice(5)), l(o, i, a[i])));
						}
						gt.set(o, "hasDataAttrs", !0)
					}
					return a
				}
				return "object" == typeof e ? this.each(function() {
					yt.set(this, e)
				}) : vt(this, function(t) {
					var n, i = J.camelCase(e);
					if(o && void 0 === t)
					{
						if(n = yt.get(o, e), void 0 !== n) return n;
						if(n = yt.get(o, i), void 0 !== n) return n;
						if(n = l(o, i, void 0), void 0 !== n) return n
					}
					else this.each(function() {
						var n = yt.get(this, i);
						yt.set(this, i, t), -1 !== e.indexOf("-") && void 0 !== n && yt.set(this, e, t)
					})
				}, null, t, arguments.length > 1, null, !0)
			}, removeData: function(e) {
				return this.each(function() {
					yt.remove(this, e)
				})
			}
		}), J.extend({
			queue: function(e, t, n) {
				var i;
				return e ? (t = (t || "fx") + "queue", i = gt.get(e, t), n && (!i || J.isArray(n) ? i = gt.access(e, t, J.makeArray(n)) : i.push(n)), i || []) : void 0
			}, dequeue: function(e, t) {
				t = t || "fx";
				var n = J.queue(e, t), i = n.length, a = n.shift(), o = J._queueHooks(e, t), r = function() {
					J.dequeue(e, t)
				};
				"inprogress" === a && (a = n.shift(), i--), a && ("fx" === t && n.unshift("inprogress"), delete o.stop, a.call(e, r, o)), !i && o && o.empty.fire()
			}, _queueHooks: function(e, t) {
				var n = t + "queueHooks";
				return gt.get(e, n) || gt.access(e, n, {
					empty: J.Callbacks("once memory").add(function() {
						gt.remove(e, [t + "queue", n])
					})
				})
			}
		}), J.fn.extend({
			queue: function(e, t) {
				var n = 2;
				return "string" != typeof e && (t = e, e = "fx", n--), arguments.length < n ? J.queue(this[0], e) : void 0 === t ? this : this.each(function() {
					var n = J.queue(this, e, t);
					J._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && J.dequeue(this, e)
				})
			}, dequeue: function(e) {
				return this.each(function() {
					J.dequeue(this, e)
				})
			}, clearQueue: function(e) {
				return this.queue(e || "fx", [])
			}, promise: function(e, t) {
				var n, i = 1, a = J.Deferred(), o = this, r = this.length, s = function() {
					--i || a.resolveWith(o, [o])
				};
				for("string" != typeof e && (t = e, e = void 0), e = e || "fx"; r--;)
				{
					n = gt.get(o[r], e + "queueHooks"), n && n.empty && (i++, n.empty.add(s));
				}
				return s(), a.promise(t)
			}
		});
		var xt = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source, Ct = ["Top", "Right", "Bottom", "Left"],
			kt = function(e, t) {
				return e = t || e, "none" === J.css(e, "display") || !J.contains(e.ownerDocument, e)
			}, Tt = /^(?:checkbox|radio)$/i;
		!function() {
			var e = K.createDocumentFragment(), t = e.appendChild(K.createElement("div")), n = K.createElement("input");
			n.setAttribute("type", "radio"), n.setAttribute("checked", "checked"), n.setAttribute("name", "t"), t.appendChild(n), G.checkClone = t.cloneNode(!0).cloneNode(!0).lastChild.checked, t.innerHTML = "<textarea>x</textarea>", G.noCloneChecked = !!t.cloneNode(!0).lastChild.defaultValue
		}();
		var St = "undefined";
		G.focusinBubbles = "onfocusin" in e;
		var At = /^key/, $t = /^(?:mouse|pointer|contextmenu)|click/, Et = /^(?:focusinfocus|focusoutblur)$/,
			Ft = /^([^.]*)(?:\.(.+)|)$/;
		J.event = {
			global: {}, add: function(e, t, n, i, a) {
				var o, r, s, l, u, c, d, f, h, p, m, v = gt.get(e);
				if(v) for(
					n.handler && (o = n, n = o.handler, a = o.selector), n.guid || (n.guid = J.guid++), (l = v.events) || (l = v.events = {}), (r = v.handle) || (r = v.handle = function(t) {
						return typeof J !== St && J.event.triggered !== t.type ? J.event.dispatch.apply(e, arguments) : void 0
					}), t = (t || "").match(ht) || [""], u = t.length; u--;)
				{
					s = Ft.exec(t[u]) || [], h = m = s[1], p = (s[2] || "").split(".").sort(), h && (d = J.event.special[h] || {}, h = (a ? d.delegateType : d.bindType) || h, d = J.event.special[h] || {}, c = J.extend({type: h, origType: m, data: i, handler: n, guid: n.guid, selector: a, needsContext: a && J.expr.match.needsContext.test(a), namespace: p.join(".")}, o), (f = l[h]) || (f = l[h] = [], f.delegateCount = 0, d.setup && d.setup.call(e, i, p, r) !== !1 || e.addEventListener && e.addEventListener(h, r, !1)), d.add && (d.add.call(e, c), c.handler.guid || (c.handler.guid = n.guid)), a ? f.splice(f.delegateCount++, 0, c) : f.push(c), J.event.global[h] = !0)
				}
			}, remove: function(e, t, n, i, a) {
				var o, r, s, l, u, c, d, f, h, p, m, v = gt.hasData(e) && gt.get(e);
				if(v && (l = v.events))
				{
					for(t = (t || "").match(ht) || [""], u = t.length; u--;)
					{
						if(s = Ft.exec(t[u]) || [], h = m = s[1], p = (s[2] || "").split(".").sort(), h)
						{
							for(d = J.event.special[h] || {}, h = (i ? d.delegateType : d.bindType) || h, f = l[h] || [], s = s[2] && new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)"), r = o = f.length; o--;)
							{
								c = f[o], !a && m !== c.origType || n && n.guid !== c.guid || s && !s.test(c.namespace) || i && i !== c.selector && ("**" !== i || !c.selector) || (f.splice(o, 1), c.selector && f.delegateCount--, d.remove && d.remove.call(e, c));
							}
							r && !f.length && (d.teardown && d.teardown.call(e, p, v.handle) !== !1 || J.removeEvent(e, h, v.handle), delete l[h])
						}
						else for(h in l)
						{
							J.event.remove(e, h + t[u], n, i, !0);
						}
					}
					J.isEmptyObject(l) && (delete v.handle, gt.remove(e, "events"))
				}
			}, trigger: function(t, n, i, a) {
				var o, r, s, l, u, c, d, f = [i || K], h = U.call(t, "type") ? t.type : t,
					p = U.call(t, "namespace") ? t.namespace.split(".") : [];
				if(r = s = i = i || K, 3 !== i.nodeType && 8 !== i.nodeType && !Et.test(h + J.event.triggered) && (h.indexOf(".") >= 0 && (p = h.split("."), h = p.shift(), p.sort()), u = h.indexOf(":") < 0 && "on" + h, t = t[J.expando] ? t : new J.Event(h, "object" == typeof t && t), t.isTrigger = a ? 2 : 3, t.namespace = p.join("."), t.namespace_re = t.namespace ? new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = i), n = null == n ? [t] : J.makeArray(n, [t]), d = J.event.special[h] || {}, a || !d.trigger || d.trigger.apply(i, n) !== !1))
				{
					if(!a && !d.noBubble && !J.isWindow(i))
					{
						for(l = d.delegateType || h, Et.test(l + h) || (r = r.parentNode); r; r = r.parentNode)
						{
							f.push(r), s = r;
						}
						s === (i.ownerDocument || K) && f.push(s.defaultView || s.parentWindow || e)
					}
					for(o = 0; (r = f[o++]) && !t.isPropagationStopped();)
					{
						t.type = o > 1 ? l : d.bindType || h, c = (gt.get(r, "events") || {})[t.type] && gt.get(r, "handle"), c && c.apply(r, n), c = u && r[u], c && c.apply && J.acceptData(r) && (t.result = c.apply(r, n), t.result === !1 && t.preventDefault());
					}
					return t.type = h, a || t.isDefaultPrevented() || d._default && d._default.apply(f.pop(), n) !== !1 || !J.acceptData(i) || u && J.isFunction(i[h]) && !J.isWindow(i) && (s = i[u], s && (i[u] = null), J.event.triggered = h, i[h](), J.event.triggered = void 0, s && (i[u] = s)), t.result
				}
			}, dispatch: function(e) {
				e = J.event.fix(e);
				var t, n, i, a, o, r = [], s = W.call(arguments), l = (gt.get(this, "events") || {})[e.type] || [],
					u = J.event.special[e.type] || {};
				if(s[0] = e, e.delegateTarget = this, !u.preDispatch || u.preDispatch.call(this, e) !== !1)
				{
					for(r = J.event.handlers.call(this, e, l), t = 0; (a = r[t++]) && !e.isPropagationStopped();)
					{
						for(e.currentTarget = a.elem, n = 0; (o = a.handlers[n++]) && !e.isImmediatePropagationStopped();)
						{
							(!e.namespace_re || e.namespace_re.test(o.namespace)) && (e.handleObj = o, e.data = o.data, i = ((J.event.special[o.origType] || {}).handle || o.handler).apply(a.elem, s), void 0 !== i && (e.result = i) === !1 && (e.preventDefault(), e.stopPropagation()));
						}
					}
					return u.postDispatch && u.postDispatch.call(this, e), e.result
				}
			}, handlers: function(e, t) {
				var n, i, a, o, r = [], s = t.delegateCount, l = e.target;
				if(s && l.nodeType && (!e.button || "click" !== e.type)) for(; l !== this; l = l.parentNode || this)
				{
					if(l.disabled !== !0 || "click" !== e.type)
					{
						for(i = [], n = 0; s > n; n++)
						{
							o = t[n], a = o.selector + " ", void 0 === i[a] && (i[a] = o.needsContext ? J(a, this).index(l) >= 0 : J.find(a, this, null, [l]).length), i[a] && i.push(o);
						}
						i.length && r.push({elem: l, handlers: i})
					}
				}
				return s < t.length && r.push({elem: this, handlers: t.slice(s)}), r
			}, props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "), fixHooks: {}, keyHooks: {
				props: "char charCode key keyCode".split(" "), filter: function(e, t) {
					return null == e.which && (e.which = null != t.charCode ? t.charCode : t.keyCode), e
				}
			}, mouseHooks: {
				props: "button buttons clientX clientY offsetX offsetY pageX pageY screenX screenY toElement".split(" "), filter: function(e, t) {
					var n, i, a, o = t.button;
					return null == e.pageX && null != t.clientX && (n = e.target.ownerDocument || K, i = n.documentElement, a = n.body, e.pageX = t.clientX + (i && i.scrollLeft || a && a.scrollLeft || 0) - (i && i.clientLeft || a && a.clientLeft || 0), e.pageY = t.clientY + (i && i.scrollTop || a && a.scrollTop || 0) - (i && i.clientTop || a && a.clientTop || 0)), e.which || void 0 === o || (e.which = 1 & o ? 1 : 2 & o ? 3 : 4 & o ? 2 : 0), e
				}
			}, fix: function(e) {
				if(e[J.expando]) return e;
				var t, n, i, a = e.type, o = e, r = this.fixHooks[a];
				for(r || (this.fixHooks[a] = r = $t.test(a) ? this.mouseHooks : At.test(a) ? this.keyHooks : {}), i = r.props ? this.props.concat(r.props) : this.props, e = new J.Event(o), t = i.length; t--;)
				{
					n = i[t], e[n] = o[n];
				}
				return e.target || (e.target = K), 3 === e.target.nodeType && (e.target = e.target.parentNode), r.filter ? r.filter(e, o) : e
			}, special: {
				load: {noBubble: !0}, focus: {
					trigger: function() {
						return this !== d() && this.focus ? (this.focus(), !1) : void 0
					}, delegateType: "focusin"
				}, blur: {
					trigger: function() {
						return this === d() && this.blur ? (this.blur(), !1) : void 0
					}, delegateType: "focusout"
				}, click: {
					trigger: function() {
						return "checkbox" === this.type && this.click && J.nodeName(this, "input") ? (this.click(), !1) : void 0
					}, _default: function(e) {
						return J.nodeName(e.target, "a")
					}
				}, beforeunload: {
					postDispatch: function(e) {
						void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
					}
				}
			}, simulate: function(e, t, n, i) {
				var a = J.extend(new J.Event, n, {type: e, isSimulated: !0, originalEvent: {}});
				i ? J.event.trigger(a, null, t) : J.event.dispatch.call(t, a), a.isDefaultPrevented() && n.preventDefault()
			}
		}, J.removeEvent = function(e, t, n) {
			e.removeEventListener && e.removeEventListener(t, n, !1)
		}, J.Event = function(e, t) {
			return this instanceof J.Event ? (e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && e.returnValue === !1 ? u : c) : this.type = e, t && J.extend(this, t), this.timeStamp = e && e.timeStamp || J.now(), void(this[J.expando] = !0)) : new J.Event(e, t)
		}, J.Event.prototype = {
			isDefaultPrevented: c, isPropagationStopped: c, isImmediatePropagationStopped: c, preventDefault: function() {
				var e = this.originalEvent;
				this.isDefaultPrevented = u, e && e.preventDefault && e.preventDefault()
			}, stopPropagation: function() {
				var e = this.originalEvent;
				this.isPropagationStopped = u, e && e.stopPropagation && e.stopPropagation()
			}, stopImmediatePropagation: function() {
				var e = this.originalEvent;
				this.isImmediatePropagationStopped = u, e && e.stopImmediatePropagation && e.stopImmediatePropagation(), this.stopPropagation()
			}
		}, J.each({mouseenter: "mouseover", mouseleave: "mouseout", pointerenter: "pointerover", pointerleave: "pointerout"}, function(e, t) {
			J.event.special[e] = {
				delegateType: t, bindType: t, handle: function(e) {
					var n, i = this, a = e.relatedTarget, o = e.handleObj;
					return (!a || a !== i && !J.contains(i, a)) && (e.type = o.origType, n = o.handler.apply(this, arguments), e.type = t), n
				}
			}
		}), G.focusinBubbles || J.each({focus: "focusin", blur: "focusout"}, function(e, t) {
			var n = function(e) {
				J.event.simulate(t, e.target, J.event.fix(e), !0)
			};
			J.event.special[t] = {
				setup: function() {
					var i = this.ownerDocument || this, a = gt.access(i, t);
					a || i.addEventListener(e, n, !0), gt.access(i, t, (a || 0) + 1)
				}, teardown: function() {
					var i = this.ownerDocument || this, a = gt.access(i, t) - 1;
					a ? gt.access(i, t, a) : (i.removeEventListener(e, n, !0), gt.remove(i, t))
				}
			}
		}), J.fn.extend({
			on: function(e, t, n, i, a) {
				var o, r;
				if("object" == typeof e)
				{
					"string" != typeof t && (n = n || t, t = void 0);
					for(r in e)
					{
						this.on(r, t, n, e[r], a);
					}
					return this
				}
				if(null == n && null == i ? (i = t, n = t = void 0) : null == i && ("string" == typeof t ? (i = n, n = void 0) : (i = n, n = t, t = void 0)), i === !1) i = c;
				else if(!i) return this;
				return 1 === a && (o = i, i = function(e) {
					return J().off(e), o.apply(this, arguments)
				}, i.guid = o.guid || (o.guid = J.guid++)), this.each(function() {
					J.event.add(this, e, i, n, t)
				})
			}, one: function(e, t, n, i) {
				return this.on(e, t, n, i, 1)
			}, off: function(e, t, n) {
				var i, a;
				if(e && e.preventDefault && e.handleObj) return i = e.handleObj, J(e.delegateTarget).off(i.namespace ? i.origType + "." + i.namespace : i.origType, i.selector, i.handler), this;
				if("object" == typeof e)
				{
					for(a in e)
					{
						this.off(a, t, e[a]);
					}
					return this
				}
				return (t === !1 || "function" == typeof t) && (n = t, t = void 0), n === !1 && (n = c), this.each(function() {
					J.event.remove(this, e, n, t)
				})
			}, trigger: function(e, t) {
				return this.each(function() {
					J.event.trigger(e, t, this)
				})
			}, triggerHandler: function(e, t) {
				var n = this[0];
				return n ? J.event.trigger(e, t, n, !0) : void 0
			}
		});
		var _t = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi, Ot = /<([\w:]+)/,
			Pt = /<|&#?\w+;/, Dt = /<(?:script|style|link)/i, jt = /checked\s*(?:[^=]|=\s*.checked.)/i,
			zt = /^$|\/(?:java|ecma)script/i, It = /^true\/(.*)/, qt = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
			Rt = {option: [1, "<select multiple='multiple'>", "</select>"], thead: [1, "<table>", "</table>"], col: [2, "<table><colgroup>", "</colgroup></table>"], tr: [2, "<table><tbody>", "</tbody></table>"], td: [3, "<table><tbody><tr>", "</tr></tbody></table>"], _default: [0, "", ""]};
		Rt.optgroup = Rt.option, Rt.tbody = Rt.tfoot = Rt.colgroup = Rt.caption = Rt.thead, Rt.th = Rt.td, J.extend({
			clone: function(e, t, n) {
				var i, a, o, r, s = e.cloneNode(!0), l = J.contains(e.ownerDocument, e);
				if(!(G.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || J.isXMLDoc(e))) for(r = g(s), o = g(e), i = 0, a = o.length; a > i; i++)
				{
					y(o[i], r[i]);
				}
				if(t) if(n) for(o = o || g(e), r = r || g(s), i = 0, a = o.length; a > i; i++)
				{
					v(o[i], r[i]);
				}
				else v(e, s);
				return r = g(s, "script"), r.length > 0 && m(r, !l && g(e, "script")), s
			}, buildFragment: function(e, t, n, i) {
				for(var a, o, r, s, l, u, c = t.createDocumentFragment(), d = [], f = 0, h = e.length; h > f; f++)
				{
					if(a = e[f], a || 0 === a) if("object" === J.type(a)) J.merge(d, a.nodeType ? [a] : a);
					else if(Pt.test(a))
					{
						for(o = o || c.appendChild(t.createElement("div")), r = (Ot.exec(a) || ["", ""])[1].toLowerCase(), s = Rt[r] || Rt._default, o.innerHTML = s[1] + a.replace(_t, "<$1></$2>") + s[2], u = s[0]; u--;)
						{
							o = o.lastChild;
						}
						J.merge(d, o.childNodes), o = c.firstChild, o.textContent = ""
					}
					else d.push(t.createTextNode(a));
				}
				for(c.textContent = "", f = 0; a = d[f++];)
				{
					if((!i || -1 === J.inArray(a, i)) && (l = J.contains(a.ownerDocument, a), o = g(c.appendChild(a), "script"), l && m(o), n)) for(u = 0; a = o[u++];)
					{
						zt.test(a.type || "") && n.push(a);
					}
				}
				return c
			}, cleanData: function(e) {
				for(var t, n, i, a, o = J.event.special, r = 0; void 0 !== (n = e[r]); r++)
				{
					if(J.acceptData(n) && (a = n[gt.expando], a && (t = gt.cache[a])))
					{
						if(t.events) for(i in t.events)
						{
							o[i] ? J.event.remove(n, i) : J.removeEvent(n, i, t.handle);
						}
						gt.cache[a] && delete gt.cache[a]
					}
					delete yt.cache[n[yt.expando]]
				}
			}
		}), J.fn.extend({
			text: function(e) {
				return vt(this, function(e) {
					return void 0 === e ? J.text(this) : this.empty().each(function() {
						(1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) && (this.textContent = e)
					})
				}, null, e, arguments.length)
			}, append: function() {
				return this.domManip(arguments, function(e) {
					if(1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType)
					{
						var t = f(this, e);
						t.appendChild(e)
					}
				})
			}, prepend: function() {
				return this.domManip(arguments, function(e) {
					if(1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType)
					{
						var t = f(this, e);
						t.insertBefore(e, t.firstChild)
					}
				})
			}, before: function() {
				return this.domManip(arguments, function(e) {
					this.parentNode && this.parentNode.insertBefore(e, this)
				})
			}, after: function() {
				return this.domManip(arguments, function(e) {
					this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
				})
			}, remove: function(e, t) {
				for(var n, i = e ? J.filter(e, this) : this, a = 0; null != (n = i[a]); a++)
				{
					t || 1 !== n.nodeType || J.cleanData(g(n)), n.parentNode && (t && J.contains(n.ownerDocument, n) && m(g(n, "script")), n.parentNode.removeChild(n));
				}
				return this
			}, empty: function() {
				for(var e, t = 0; null != (e = this[t]); t++)
				{
					1 === e.nodeType && (J.cleanData(g(e, !1)), e.textContent = "");
				}
				return this
			}, clone: function(e, t) {
				return e = null == e ? !1 : e, t = null == t ? e : t, this.map(function() {
					return J.clone(this, e, t)
				})
			}, html: function(e) {
				return vt(this, function(e) {
					var t = this[0] || {}, n = 0, i = this.length;
					if(void 0 === e && 1 === t.nodeType) return t.innerHTML;
					if("string" == typeof e && !Dt.test(e) && !Rt[(Ot.exec(e) || ["", ""])[1].toLowerCase()])
					{
						e = e.replace(_t, "<$1></$2>");
						try
						{
							for(; i > n; n++)
							{
								t = this[n] || {}, 1 === t.nodeType && (J.cleanData(g(t, !1)), t.innerHTML = e);
							}
							t = 0
						} catch (a)
						{
						}
					}
					t && this.empty().append(e)
				}, null, e, arguments.length)
			}, replaceWith: function() {
				var e = arguments[0];
				return this.domManip(arguments, function(t) {
					e = this.parentNode, J.cleanData(g(this)), e && e.replaceChild(t, this)
				}), e && (e.length || e.nodeType) ? this : this.remove()
			}, detach: function(e) {
				return this.remove(e, !0)
			}, domManip: function(e, t) {
				e = V.apply([], e);
				var n, i, a, o, r, s, l = 0, u = this.length, c = this, d = u - 1, f = e[0], m = J.isFunction(f);
				if(m || u > 1 && "string" == typeof f && !G.checkClone && jt.test(f)) return this.each(function(n) {
					var i = c.eq(n);
					m && (e[0] = f.call(this, n, i.html())), i.domManip(e, t)
				});
				if(u && (n = J.buildFragment(e, this[0].ownerDocument, !1, this), i = n.firstChild, 1 === n.childNodes.length && (n = i), i))
				{
					for(a = J.map(g(n, "script"), h), o = a.length; u > l; l++)
					{
						r = n, l !== d && (r = J.clone(r, !0, !0), o && J.merge(a, g(r, "script"))), t.call(this[l], r, l);
					}
					if(o) for(s = a[a.length - 1].ownerDocument, J.map(a, p), l = 0; o > l; l++)
					{
						r = a[l], zt.test(r.type || "") && !gt.access(r, "globalEval") && J.contains(s, r) && (r.src ? J._evalUrl && J._evalUrl(r.src) : J.globalEval(r.textContent.replace(qt, "")))
					}
				}
				return this
			}
		}), J.each({appendTo: "append", prependTo: "prepend", insertBefore: "before", insertAfter: "after", replaceAll: "replaceWith"}, function(e, t) {
			J.fn[e] = function(e) {
				for(var n, i = [], a = J(e), o = a.length - 1, r = 0; o >= r; r++)
				{
					n = r === o ? this : this.clone(!0), J(a[r])[t](n), B.apply(i, n.get());
				}
				return this.pushStack(i)
			}
		});
		var Lt, Nt = {}, Mt = /^margin/, Ht = new RegExp("^(" + xt + ")(?!px)[a-z%]+$", "i"), Wt = function(t) {
			return t.ownerDocument.defaultView.opener ? t.ownerDocument.defaultView.getComputedStyle(t, null) : e.getComputedStyle(t, null)
		};
		!function() {
			function t () {
				r.style.cssText = "-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute", r.innerHTML = "", a.appendChild(o);
				var t = e.getComputedStyle(r, null);
				n = "1%" !== t.top, i = "4px" === t.width, a.removeChild(o)
			}

			var n, i, a = K.documentElement, o = K.createElement("div"), r = K.createElement("div");
			r.style && (r.style.backgroundClip = "content-box", r.cloneNode(!0).style.backgroundClip = "", G.clearCloneStyle = "content-box" === r.style.backgroundClip, o.style.cssText = "border:0;width:0;height:0;top:0;left:-9999px;margin-top:1px;position:absolute", o.appendChild(r), e.getComputedStyle && J.extend(G, {
				pixelPosition: function() {
					return t(), n
				}, boxSizingReliable: function() {
					return null == i && t(), i
				}, reliableMarginRight: function() {
					var t, n = r.appendChild(K.createElement("div"));
					return n.style.cssText = r.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0", n.style.marginRight = n.style.width = "0", r.style.width = "1px", a.appendChild(o), t = !parseFloat(e.getComputedStyle(n, null).marginRight), a.removeChild(o), r.removeChild(n), t
				}
			}))
		}(), J.swap = function(e, t, n, i) {
			var a, o, r = {};
			for(o in t)
			{
				r[o] = e.style[o], e.style[o] = t[o];
			}
			a = n.apply(e, i || []);
			for(o in t)
			{
				e.style[o] = r[o];
			}
			return a
		};
		var Vt = /^(none|table(?!-c[ea]).+)/, Bt = new RegExp("^(" + xt + ")(.*)$", "i"),
			Qt = new RegExp("^([+-])=(" + xt + ")", "i"),
			Xt = {position: "absolute", visibility: "hidden", display: "block"},
			Yt = {letterSpacing: "0", fontWeight: "400"}, Ut = ["Webkit", "O", "Moz", "ms"];
		J.extend({
			cssHooks: {
				opacity: {
					get: function(e, t) {
						if(t)
						{
							var n = x(e, "opacity");
							return "" === n ? "1" : n
						}
					}
				}
			}, cssNumber: {columnCount: !0, fillOpacity: !0, flexGrow: !0, flexShrink: !0, fontWeight: !0, lineHeight: !0, opacity: !0, order: !0, orphans: !0, widows: !0, zIndex: !0, zoom: !0}, cssProps: {"float": "cssFloat"}, style: function(e, t, n, i) {
				if(e && 3 !== e.nodeType && 8 !== e.nodeType && e.style)
				{
					var a, o, r, s = J.camelCase(t), l = e.style;
					return t = J.cssProps[s] || (J.cssProps[s] = k(l, s)), r = J.cssHooks[t] || J.cssHooks[s], void 0 === n ? r && "get" in r && void 0 !== (a = r.get(e, !1, i)) ? a : l[t] : (o = typeof n, "string" === o && (a = Qt.exec(n)) && (n = (a[1] + 1) * a[2] + parseFloat(J.css(e, t)), o = "number"), null != n && n === n && ("number" !== o || J.cssNumber[s] || (n += "px"), G.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"), r && "set" in r && void 0 === (n = r.set(e, n, i)) || (l[t] = n)), void 0)
				}
			}, css: function(e, t, n, i) {
				var a, o, r, s = J.camelCase(t);
				return t = J.cssProps[s] || (J.cssProps[s] = k(e.style, s)), r = J.cssHooks[t] || J.cssHooks[s], r && "get" in r && (a = r.get(e, !0, n)), void 0 === a && (a = x(e, t, i)), "normal" === a && t in Yt && (a = Yt[t]), "" === n || n ? (o = parseFloat(a), n === !0 || J.isNumeric(o) ? o || 0 : a) : a
			}
		}), J.each(["height", "width"], function(e, t) {
			J.cssHooks[t] = {
				get: function(e, n, i) {
					return n ? Vt.test(J.css(e, "display")) && 0 === e.offsetWidth ? J.swap(e, Xt, function() {
						return A(e, t, i)
					}) : A(e, t, i) : void 0
				}, set: function(e, n, i) {
					var a = i && Wt(e);
					return T(e, n, i ? S(e, t, i, "border-box" === J.css(e, "boxSizing", !1, a), a) : 0)
				}
			}
		}), J.cssHooks.marginRight = C(G.reliableMarginRight, function(e, t) {
			return t ? J.swap(e, {display: "inline-block"}, x, [e, "marginRight"]) : void 0
		}), J.each({margin: "", padding: "", border: "Width"}, function(e, t) {
			J.cssHooks[e + t] = {
				expand: function(n) {
					for(var i = 0, a = {}, o = "string" == typeof n ? n.split(" ") : [n]; 4 > i; i++)
					{
						a[e + Ct[i] + t] = o[i] || o[i - 2] || o[0];
					}
					return a
				}
			}, Mt.test(e) || (J.cssHooks[e + t].set = T)
		}), J.fn.extend({
			css: function(e, t) {
				return vt(this, function(e, t, n) {
					var i, a, o = {}, r = 0;
					if(J.isArray(t))
					{
						for(i = Wt(e), a = t.length; a > r; r++)
						{
							o[t[r]] = J.css(e, t[r], !1, i);
						}
						return o
					}
					return void 0 !== n ? J.style(e, t, n) : J.css(e, t)
				}, e, t, arguments.length > 1)
			}, show: function() {
				return $(this, !0)
			}, hide: function() {
				return $(this)
			}, toggle: function(e) {
				return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function() {
					kt(this) ? J(this).show() : J(this).hide()
				})
			}
		}), J.Tween = E, E.prototype = {
			constructor: E, init: function(e, t, n, i, a, o) {
				this.elem = e, this.prop = n, this.easing = a || "swing", this.options = t, this.start = this.now = this.cur(), this.end = i, this.unit = o || (J.cssNumber[n] ? "" : "px")
			}, cur: function() {
				var e = E.propHooks[this.prop];
				return e && e.get ? e.get(this) : E.propHooks._default.get(this)
			}, run: function(e) {
				var t, n = E.propHooks[this.prop];
				return this.pos = t = this.options.duration ? J.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : E.propHooks._default.set(this), this
			}
		}, E.prototype.init.prototype = E.prototype, E.propHooks = {
			_default: {
				get: function(e) {
					var t;
					return null == e.elem[e.prop] || e.elem.style && null != e.elem.style[e.prop] ? (t = J.css(e.elem, e.prop, ""), t && "auto" !== t ? t : 0) : e.elem[e.prop]
				}, set: function(e) {
					J.fx.step[e.prop] ? J.fx.step[e.prop](e) : e.elem.style && (null != e.elem.style[J.cssProps[e.prop]] || J.cssHooks[e.prop]) ? J.style(e.elem, e.prop, e.now + e.unit) : e.elem[e.prop] = e.now
				}
			}
		}, E.propHooks.scrollTop = E.propHooks.scrollLeft = {
			set: function(e) {
				e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
			}
		}, J.easing = {
			linear: function(e) {
				return e
			}, swing: function(e) {
				return .5 - Math.cos(e * Math.PI) / 2
			}
		}, J.fx = E.prototype.init, J.fx.step = {};
		var Gt, Kt, Zt = /^(?:toggle|show|hide)$/, Jt = new RegExp("^(?:([+-])=|)(" + xt + ")([a-z%]*)$", "i"),
			en = /queueHooks$/, tn = [P], nn = {
				"*": [function(e, t) {
					var n = this.createTween(e, t), i = n.cur(), a = Jt.exec(t),
						o = a && a[3] || (J.cssNumber[e] ? "" : "px"),
						r = (J.cssNumber[e] || "px" !== o && +i) && Jt.exec(J.css(n.elem, e)), s = 1, l = 20;
					if(r && r[3] !== o)
					{
						o = o || r[3], a = a || [], r = +i || 1;
						do s = s || ".5", r /= s, J.style(n.elem, e, r + o); while(s !== (s = n.cur() / i) && 1 !== s && --l)
					}
					return a && (r = n.start = +r || +i || 0, n.unit = o, n.end = a[1] ? r + (a[1] + 1) * a[2] : +a[2]), n
				}]
			};
		J.Animation = J.extend(j, {
			tweener: function(e, t) {
				J.isFunction(e) ? (t = e, e = ["*"]) : e = e.split(" ");
				for(var n, i = 0, a = e.length; a > i; i++)
				{
					n = e[i], nn[n] = nn[n] || [], nn[n].unshift(t)
				}
			}, prefilter: function(e, t) {
				t ? tn.unshift(e) : tn.push(e)
			}
		}), J.speed = function(e, t, n) {
			var i = e && "object" == typeof e ? J.extend({}, e) : {complete: n || !n && t || J.isFunction(e) && e, duration: e, easing: n && t || t && !J.isFunction(t) && t};
			return i.duration = J.fx.off ? 0 : "number" == typeof i.duration ? i.duration : i.duration in J.fx.speeds ? J.fx.speeds[i.duration] : J.fx.speeds._default, (null == i.queue || i.queue === !0) && (i.queue = "fx"), i.old = i.complete, i.complete = function() {
				J.isFunction(i.old) && i.old.call(this), i.queue && J.dequeue(this, i.queue)
			}, i
		}, J.fn.extend({
			fadeTo: function(e, t, n, i) {
				return this.filter(kt).css("opacity", 0).show().end().animate({opacity: t}, e, n, i)
			}, animate: function(e, t, n, i) {
				var a = J.isEmptyObject(e), o = J.speed(t, n, i), r = function() {
					var t = j(this, J.extend({}, e), o);
					(a || gt.get(this, "finish")) && t.stop(!0)
				};
				return r.finish = r, a || o.queue === !1 ? this.each(r) : this.queue(o.queue, r)
			}, stop: function(e, t, n) {
				var i = function(e) {
					var t = e.stop;
					delete e.stop, t(n)
				};
				return "string" != typeof e && (n = t, t = e, e = void 0), t && e !== !1 && this.queue(e || "fx", []), this.each(function() {
					var t = !0, a = null != e && e + "queueHooks", o = J.timers, r = gt.get(this);
					if(a) r[a] && r[a].stop && i(r[a]);
					else for(a in r)
					{
						r[a] && r[a].stop && en.test(a) && i(r[a]);
					}
					for(a = o.length; a--;)
					{
						o[a].elem !== this || null != e && o[a].queue !== e || (o[a].anim.stop(n), t = !1, o.splice(a, 1));
					}
					(t || !n) && J.dequeue(this, e)
				})
			}, finish: function(e) {
				return e !== !1 && (e = e || "fx"), this.each(function() {
					var t, n = gt.get(this), i = n[e + "queue"], a = n[e + "queueHooks"], o = J.timers,
						r = i ? i.length : 0;
					for(n.finish = !0, J.queue(this, e, []), a && a.stop && a.stop.call(this, !0), t = o.length; t--;)
					{
						o[t].elem === this && o[t].queue === e && (o[t].anim.stop(!0), o.splice(t, 1));
					}
					for(t = 0; r > t; t++)
					{
						i[t] && i[t].finish && i[t].finish.call(this);
					}
					delete n.finish
				})
			}
		}), J.each(["toggle", "show", "hide"], function(e, t) {
			var n = J.fn[t];
			J.fn[t] = function(e, i, a) {
				return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(_(t, !0), e, i, a)
			}
		}), J.each({slideDown: _("show"), slideUp: _("hide"), slideToggle: _("toggle"), fadeIn: {opacity: "show"}, fadeOut: {opacity: "hide"}, fadeToggle: {opacity: "toggle"}}, function(e, t) {
			J.fn[e] = function(e, n, i) {
				return this.animate(t, e, n, i)
			}
		}), J.timers = [], J.fx.tick = function() {
			var e, t = 0, n = J.timers;
			for(Gt = J.now(); t < n.length; t++)
			{
				e = n[t], e() || n[t] !== e || n.splice(t--, 1);
			}
			n.length || J.fx.stop(), Gt = void 0
		}, J.fx.timer = function(e) {
			J.timers.push(e), e() ? J.fx.start() : J.timers.pop()
		}, J.fx.interval = 13, J.fx.start = function() {
			Kt || (Kt = setInterval(J.fx.tick, J.fx.interval))
		}, J.fx.stop = function() {
			clearInterval(Kt), Kt = null
		}, J.fx.speeds = {slow: 600, fast: 200, _default: 400}, J.fn.delay = function(e, t) {
			return e = J.fx ? J.fx.speeds[e] || e : e, t = t || "fx", this.queue(t, function(t, n) {
				var i = setTimeout(t, e);
				n.stop = function() {
					clearTimeout(i)
				}
			})
		}, function() {
			var e = K.createElement("input"), t = K.createElement("select"),
				n = t.appendChild(K.createElement("option"));
			e.type = "checkbox", G.checkOn = "" !== e.value, G.optSelected = n.selected, t.disabled = !0, G.optDisabled = !n.disabled, e = K.createElement("input"), e.value = "t", e.type = "radio", G.radioValue = "t" === e.value
		}();
		var an, on, rn = J.expr.attrHandle;
		J.fn.extend({
			attr: function(e, t) {
				return vt(this, J.attr, e, t, arguments.length > 1)
			}, removeAttr: function(e) {
				return this.each(function() {
					J.removeAttr(this, e)
				})
			}
		}), J.extend({
			attr: function(e, t, n) {
				var i, a, o = e.nodeType;
				if(e && 3 !== o && 8 !== o && 2 !== o) return typeof e.getAttribute === St ? J.prop(e, t, n) : (1 === o && J.isXMLDoc(e) || (t = t.toLowerCase(), i = J.attrHooks[t] || (J.expr.match.bool.test(t) ? on : an)), void 0 === n ? i && "get" in i && null !== (a = i.get(e, t)) ? a : (a = J.find.attr(e, t), null == a ? void 0 : a) : null !== n ? i && "set" in i && void 0 !== (a = i.set(e, n, t)) ? a : (e.setAttribute(t, n + ""), n) : void J.removeAttr(e, t))
			}, removeAttr: function(e, t) {
				var n, i, a = 0, o = t && t.match(ht);
				if(o && 1 === e.nodeType) for(; n = o[a++];)
				{
					i = J.propFix[n] || n, J.expr.match.bool.test(n) && (e[i] = !1), e.removeAttribute(n)
				}
			}, attrHooks: {
				type: {
					set: function(e, t) {
						if(!G.radioValue && "radio" === t && J.nodeName(e, "input"))
						{
							var n = e.value;
							return e.setAttribute("type", t), n && (e.value = n), t
						}
					}
				}
			}
		}), on = {
			set: function(e, t, n) {
				return t === !1 ? J.removeAttr(e, n) : e.setAttribute(n, n), n
			}
		}, J.each(J.expr.match.bool.source.match(/\w+/g), function(e, t) {
			var n = rn[t] || J.find.attr;
			rn[t] = function(e, t, i) {
				var a, o;
				return i || (o = rn[t], rn[t] = a, a = null != n(e, t, i) ? t.toLowerCase() : null, rn[t] = o), a
			}
		});
		var sn = /^(?:input|select|textarea|button)$/i;
		J.fn.extend({
			prop: function(e, t) {
				return vt(this, J.prop, e, t, arguments.length > 1)
			}, removeProp: function(e) {
				return this.each(function() {
					delete this[J.propFix[e] || e]
				})
			}
		}), J.extend({
			propFix: {"for": "htmlFor", "class": "className"}, prop: function(e, t, n) {
				var i, a, o, r = e.nodeType;
				if(e && 3 !== r && 8 !== r && 2 !== r) return o = 1 !== r || !J.isXMLDoc(e), o && (t = J.propFix[t] || t, a = J.propHooks[t]), void 0 !== n ? a && "set" in a && void 0 !== (i = a.set(e, n, t)) ? i : e[t] = n : a && "get" in a && null !== (i = a.get(e, t)) ? i : e[t]
			}, propHooks: {
				tabIndex: {
					get: function(e) {
						return e.hasAttribute("tabindex") || sn.test(e.nodeName) || e.href ? e.tabIndex : -1
					}
				}
			}
		}), G.optSelected || (J.propHooks.selected = {
			get: function(e) {
				var t = e.parentNode;
				return t && t.parentNode && t.parentNode.selectedIndex, null
			}
		}), J.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
			J.propFix[this.toLowerCase()] = this
		});
		var ln = /[\t\r\n\f]/g;
		J.fn.extend({
			addClass: function(e) {
				var t, n, i, a, o, r, s = "string" == typeof e && e, l = 0, u = this.length;
				if(J.isFunction(e)) return this.each(function(t) {
					J(this).addClass(e.call(this, t, this.className))
				});
				if(s) for(t = (e || "").match(ht) || []; u > l; l++)
				{
					if(n = this[l], i = 1 === n.nodeType && (n.className ? (" " + n.className + " ").replace(ln, " ") : " "))
					{
						for(o = 0; a = t[o++];)
						{
							i.indexOf(" " + a + " ") < 0 && (i += a + " ");
						}
						r = J.trim(i), n.className !== r && (n.className = r)
					}
				}
				return this
			}, removeClass: function(e) {
				var t, n, i, a, o, r, s = 0 === arguments.length || "string" == typeof e && e, l = 0, u = this.length;
				if(J.isFunction(e)) return this.each(function(t) {
					J(this).removeClass(e.call(this, t, this.className))
				});
				if(s) for(t = (e || "").match(ht) || []; u > l; l++)
				{
					if(n = this[l], i = 1 === n.nodeType && (n.className ? (" " + n.className + " ").replace(ln, " ") : ""))
					{
						for(o = 0; a = t[o++];)
						{
							for(; i.indexOf(" " + a + " ") >= 0;)
							{
								i = i.replace(" " + a + " ", " ");
							}
						}
						r = e ? J.trim(i) : "", n.className !== r && (n.className = r)
					}
				}
				return this
			}, toggleClass: function(e, t) {
				var n = typeof e;
				return "boolean" == typeof t && "string" === n ? t ? this.addClass(e) : this.removeClass(e) : this.each(J.isFunction(e) ? function(n) {
					J(this).toggleClass(e.call(this, n, this.className, t), t)
				} : function() {
					if("string" === n) for(var t, i = 0, a = J(this), o = e.match(ht) || []; t = o[i++];)
					{
						a.hasClass(t) ? a.removeClass(t) : a.addClass(t);
					}
					else (n === St || "boolean" === n) && (this.className && gt.set(this, "__className__", this.className), this.className = this.className || e === !1 ? "" : gt.get(this, "__className__") || "")
				})
			}, hasClass: function(e) {
				for(var t = " " + e + " ", n = 0, i = this.length; i > n; n++)
				{
					if(1 === this[n].nodeType && (" " + this[n].className + " ").replace(ln, " ").indexOf(t) >= 0) return !0;
				}
				return !1
			}
		});
		var un = /\r/g;
		J.fn.extend({
			val: function(e) {
				var t, n, i, a = this[0];
				{
					if(arguments.length) return i = J.isFunction(e), this.each(function(n) {
						var a;
						1 === this.nodeType && (a = i ? e.call(this, n, J(this).val()) : e, null == a ? a = "" : "number" == typeof a ? a += "" : J.isArray(a) && (a = J.map(a, function(e) {
							return null == e ? "" : e + ""
						})), t = J.valHooks[this.type] || J.valHooks[this.nodeName.toLowerCase()], t && "set" in t && void 0 !== t.set(this, a, "value") || (this.value = a))
					});
					if(a) return t = J.valHooks[a.type] || J.valHooks[a.nodeName.toLowerCase()], t && "get" in t && void 0 !== (n = t.get(a, "value")) ? n : (n = a.value, "string" == typeof n ? n.replace(un, "") : null == n ? "" : n)
				}
			}
		}), J.extend({
			valHooks: {
				option: {
					get: function(e) {
						var t = J.find.attr(e, "value");
						return null != t ? t : J.trim(J.text(e))
					}
				}, select: {
					get: function(e) {
						for(var t, n, i = e.options, a = e.selectedIndex, o = "select-one" === e.type || 0 > a, r = o ? null : [], s = o ? a + 1 : i.length, l = 0 > a ? s : o ? a : 0; s > l; l++)
						{
							if(n = i[l], !(!n.selected && l !== a || (G.optDisabled ? n.disabled : null !== n.getAttribute("disabled")) || n.parentNode.disabled && J.nodeName(n.parentNode, "optgroup")))
							{
								if(t = J(n).val(), o) return t;
								r.push(t)
							}
						}
						return r
					}, set: function(e, t) {
						for(var n, i, a = e.options, o = J.makeArray(t), r = a.length; r--;)
						{
							i = a[r], (i.selected = J.inArray(i.value, o) >= 0) && (n = !0);
						}
						return n || (e.selectedIndex = -1), o
					}
				}
			}
		}), J.each(["radio", "checkbox"], function() {
			J.valHooks[this] = {
				set: function(e, t) {
					return J.isArray(t) ? e.checked = J.inArray(J(e).val(), t) >= 0 : void 0
				}
			}, G.checkOn || (J.valHooks[this].get = function(e) {
				return null === e.getAttribute("value") ? "on" : e.value
			})
		}), J.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function(e, t) {
			J.fn[t] = function(e, n) {
				return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t)
			}
		}), J.fn.extend({
			hover: function(e, t) {
				return this.mouseenter(e).mouseleave(t || e)
			}, bind: function(e, t, n) {
				return this.on(e, null, t, n)
			}, unbind: function(e, t) {
				return this.off(e, null, t)
			}, delegate: function(e, t, n, i) {
				return this.on(t, e, n, i)
			}, undelegate: function(e, t, n) {
				return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
			}
		});
		var cn = J.now(), dn = /\?/;
		J.parseJSON = function(e) {
			return JSON.parse(e + "")
		}, J.parseXML = function(e) {
			var t, n;
			if(!e || "string" != typeof e) return null;
			try
			{
				n = new DOMParser, t = n.parseFromString(e, "text/xml")
			} catch (i)
			{
				t = void 0
			}
			return (!t || t.getElementsByTagName("parsererror").length) && J.error("Invalid XML: " + e), t
		};
		var fn = /#.*$/, hn = /([?&])_=[^&]*/, pn = /^(.*?):[ \t]*([^\r\n]*)$/gm,
			mn = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/, vn = /^(?:GET|HEAD)$/, gn = /^\/\//,
			yn = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/, bn = {}, wn = {}, xn = "*/".concat("*"),
			Cn = e.location.href, kn = yn.exec(Cn.toLowerCase()) || [];
		J.extend({
			active: 0, lastModified: {}, etag: {}, ajaxSettings: {url: Cn, type: "GET", isLocal: mn.test(kn[1]), global: !0, processData: !0, async: !0, contentType: "application/x-www-form-urlencoded; charset=UTF-8", accepts: {"*": xn, text: "text/plain", html: "text/html", xml: "application/xml, text/xml", json: "application/json, text/javascript"}, contents: {xml: /xml/, html: /html/, json: /json/}, responseFields: {xml: "responseXML", text: "responseText", json: "responseJSON"}, converters: {"* text": String, "text html": !0, "text json": J.parseJSON, "text xml": J.parseXML}, flatOptions: {url: !0, context: !0}}, ajaxSetup: function(e, t) {
				return t ? q(q(e, J.ajaxSettings), t) : q(J.ajaxSettings, e)
			}, ajaxPrefilter: z(bn), ajaxTransport: z(wn), ajax: function(e, t) {
				function n (e, t, n, r) {
					var l, c, g, y, w, C = t;
					2 !== b && (b = 2, s && clearTimeout(s), i = void 0, o = r || "", x.readyState = e > 0 ? 4 : 0, l = e >= 200 && 300 > e || 304 === e, n && (y = R(d, x, n)), y = L(d, y, x, l), l ? (d.ifModified && (w = x.getResponseHeader("Last-Modified"), w && (J.lastModified[a] = w), w = x.getResponseHeader("etag"), w && (J.etag[a] = w)), 204 === e || "HEAD" === d.type ? C = "nocontent" : 304 === e ? C = "notmodified" : (C = y.state, c = y.data, g = y.error, l = !g)) : (g = C, (e || !C) && (C = "error", 0 > e && (e = 0))), x.status = e, x.statusText = (t || C) + "", l ? p.resolveWith(f, [c, C, x]) : p.rejectWith(f, [x, C, g]), x.statusCode(v), v = void 0, u && h.trigger(l ? "ajaxSuccess" : "ajaxError", [x, d, l ? c : g]), m.fireWith(f, [x, C]), u && (h.trigger("ajaxComplete", [x, d]), --J.active || J.event.trigger("ajaxStop")))
				}

				"object" == typeof e && (t = e, e = void 0), t = t || {};
				var i, a, o, r, s, l, u, c, d = J.ajaxSetup({}, t), f = d.context || d,
					h = d.context && (f.nodeType || f.jquery) ? J(f) : J.event, p = J.Deferred(),
					m = J.Callbacks("once memory"), v = d.statusCode || {}, g = {}, y = {}, b = 0, w = "canceled", x = {
						readyState: 0, getResponseHeader: function(e) {
							var t;
							if(2 === b)
							{
								if(!r) for(r = {}; t = pn.exec(o);)
								{
									r[t[1].toLowerCase()] = t[2];
								}
								t = r[e.toLowerCase()]
							}
							return null == t ? null : t
						}, getAllResponseHeaders: function() {
							return 2 === b ? o : null
						}, setRequestHeader: function(e, t) {
							var n = e.toLowerCase();
							return b || (e = y[n] = y[n] || e, g[e] = t), this
						}, overrideMimeType: function(e) {
							return b || (d.mimeType = e), this
						}, statusCode: function(e) {
							var t;
							if(e) if(2 > b) for(t in e)
							{
								v[t] = [v[t], e[t]];
							}
							else x.always(e[x.status]);
							return this
						}, abort: function(e) {
							var t = e || w;
							return i && i.abort(t), n(0, t), this
						}
					};
				if(p.promise(x).complete = m.add, x.success = x.done, x.error = x.fail, d.url = ((e || d.url || Cn) + "").replace(fn, "").replace(gn, kn[1] + "//"), d.type = t.method || t.type || d.method || d.type, d.dataTypes = J.trim(d.dataType || "*").toLowerCase().match(ht) || [""], null == d.crossDomain && (l = yn.exec(d.url.toLowerCase()), d.crossDomain = !(!l || l[1] === kn[1] && l[2] === kn[2] && (l[3] || ("http:" === l[1] ? "80" : "443")) === (kn[3] || ("http:" === kn[1] ? "80" : "443")))), d.data && d.processData && "string" != typeof d.data && (d.data = J.param(d.data, d.traditional)), I(bn, d, t, x), 2 === b) return x;
				u = J.event && d.global, u && 0 === J.active++ && J.event.trigger("ajaxStart"), d.type = d.type.toUpperCase(), d.hasContent = !vn.test(d.type), a = d.url, d.hasContent || (d.data && (a = d.url += (dn.test(a) ? "&" : "?") + d.data, delete d.data), d.cache === !1 && (d.url = hn.test(a) ? a.replace(hn, "$1_=" + cn++) : a + (dn.test(a) ? "&" : "?") + "_=" + cn++)), d.ifModified && (J.lastModified[a] && x.setRequestHeader("If-Modified-Since", J.lastModified[a]), J.etag[a] && x.setRequestHeader("If-None-Match", J.etag[a])), (d.data && d.hasContent && d.contentType !== !1 || t.contentType) && x.setRequestHeader("Content-Type", d.contentType), x.setRequestHeader("Accept", d.dataTypes[0] && d.accepts[d.dataTypes[0]] ? d.accepts[d.dataTypes[0]] + ("*" !== d.dataTypes[0] ? ", " + xn + "; q=0.01" : "") : d.accepts["*"]);
				for(c in d.headers)
				{
					x.setRequestHeader(c, d.headers[c]);
				}
				if(d.beforeSend && (d.beforeSend.call(f, x, d) === !1 || 2 === b)) return x.abort();
				w = "abort";
				for(c in{success: 1, error: 1, complete: 1})
				{
					x[c](d[c]);
				}
				if(i = I(wn, d, t, x))
				{
					x.readyState = 1, u && h.trigger("ajaxSend", [x, d]), d.async && d.timeout > 0 && (s = setTimeout(function() {
						x.abort("timeout")
					}, d.timeout));
					try
					{
						b = 1, i.send(g, n)
					} catch (C)
					{
						if(!(2 > b)) throw C;
						n(-1, C)
					}
				}
				else n(-1, "No Transport");
				return x
			}, getJSON: function(e, t, n) {
				return J.get(e, t, n, "json")
			}, getScript: function(e, t) {
				return J.get(e, void 0, t, "script")
			}
		}), J.each(["get", "post"], function(e, t) {
			J[t] = function(e, n, i, a) {
				return J.isFunction(n) && (a = a || i, i = n, n = void 0), J.ajax({url: e, type: t, dataType: a, data: n, success: i})
			}
		}), J._evalUrl = function(e) {
			return J.ajax({url: e, type: "GET", dataType: "script", async: !1, global: !1, "throws": !0})
		}, J.fn.extend({
			wrapAll: function(e) {
				var t;
				return J.isFunction(e) ? this.each(function(t) {
					J(this).wrapAll(e.call(this, t))
				}) : (this[0] && (t = J(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function() {
					for(var e = this; e.firstElementChild;)
					{
						e = e.firstElementChild;
					}
					return e
				}).append(this)), this)
			}, wrapInner: function(e) {
				return this.each(J.isFunction(e) ? function(t) {
					J(this).wrapInner(e.call(this, t))
				} : function() {
					var t = J(this), n = t.contents();
					n.length ? n.wrapAll(e) : t.append(e)
				})
			}, wrap: function(e) {
				var t = J.isFunction(e);
				return this.each(function(n) {
					J(this).wrapAll(t ? e.call(this, n) : e)
				})
			}, unwrap: function() {
				return this.parent().each(function() {
					J.nodeName(this, "body") || J(this).replaceWith(this.childNodes)
				}).end()
			}
		}), J.expr.filters.hidden = function(e) {
			return e.offsetWidth <= 0 && e.offsetHeight <= 0
		}, J.expr.filters.visible = function(e) {
			return !J.expr.filters.hidden(e)
		};
		var Tn = /%20/g, Sn = /\[\]$/, An = /\r?\n/g, $n = /^(?:submit|button|image|reset|file)$/i,
			En = /^(?:input|select|textarea|keygen)/i;
		J.param = function(e, t) {
			var n, i = [], a = function(e, t) {
				t = J.isFunction(t) ? t() : null == t ? "" : t, i[i.length] = encodeURIComponent(e) + "=" + encodeURIComponent(t)
			};
			if(void 0 === t && (t = J.ajaxSettings && J.ajaxSettings.traditional), J.isArray(e) || e.jquery && !J.isPlainObject(e)) J.each(e, function() {
				a(this.name, this.value)
			});
			else for(n in e)
			{
				N(n, e[n], t, a);
			}
			return i.join("&").replace(Tn, "+")
		}, J.fn.extend({
			serialize: function() {
				return J.param(this.serializeArray())
			}, serializeArray: function() {
				return this.map(function() {
					var e = J.prop(this, "elements");
					return e ? J.makeArray(e) : this
				}).filter(function() {
					var e = this.type;
					return this.name && !J(this).is(":disabled") && En.test(this.nodeName) && !$n.test(e) && (this.checked || !Tt.test(e))
				}).map(function(e, t) {
					var n = J(this).val();
					return null == n ? null : J.isArray(n) ? J.map(n, function(e) {
						return {name: t.name, value: e.replace(An, "\r\n")}
					}) : {name: t.name, value: n.replace(An, "\r\n")}
				}).get()
			}
		}), J.ajaxSettings.xhr = function() {
			try
			{
				return new XMLHttpRequest
			} catch (e)
			{
			}
		};
		var Fn = 0, _n = {}, On = {0: 200, 1223: 204}, Pn = J.ajaxSettings.xhr();
		e.attachEvent && e.attachEvent("onunload", function() {
			for(var e in _n)
			{
				_n[e]()
			}
		}), G.cors = !!Pn && "withCredentials" in Pn, G.ajax = Pn = !!Pn, J.ajaxTransport(function(e) {
			var t;
			return G.cors || Pn && !e.crossDomain ? {
				send: function(n, i) {
					var a, o = e.xhr(), r = ++Fn;
					if(o.open(e.type, e.url, e.async, e.username, e.password), e.xhrFields) for(a in e.xhrFields)
					{
						o[a] = e.xhrFields[a];
					}
					e.mimeType && o.overrideMimeType && o.overrideMimeType(e.mimeType), e.crossDomain || n["X-Requested-With"] || (n["X-Requested-With"] = "XMLHttpRequest");
					for(a in n)
					{
						o.setRequestHeader(a, n[a]);
					}
					t = function(e) {
						return function() {
							t && (delete _n[r], t = o.onload = o.onerror = null, "abort" === e ? o.abort() : "error" === e ? i(o.status, o.statusText) : i(On[o.status] || o.status, o.statusText, "string" == typeof o.responseText ? {text: o.responseText} : void 0, o.getAllResponseHeaders()))
						}
					}, o.onload = t(), o.onerror = t("error"), t = _n[r] = t("abort");
					try
					{
						o.send(e.hasContent && e.data || null)
					} catch (s)
					{
						if(t) throw s
					}
				}, abort: function() {
					t && t()
				}
			} : void 0
		}), J.ajaxSetup({
			accepts: {script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"}, contents: {script: /(?:java|ecma)script/}, converters: {
				"text script": function(e) {
					return J.globalEval(e), e
				}
			}
		}), J.ajaxPrefilter("script", function(e) {
			void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET")
		}), J.ajaxTransport("script", function(e) {
			if(e.crossDomain)
			{
				var t, n;
				return {
					send: function(i, a) {
						t = J("<script>").prop({async: !0, charset: e.scriptCharset, src: e.url}).on("load error", n = function(e) {
							t.remove(), n = null, e && a("error" === e.type ? 404 : 200, e.type)
						}), K.head.appendChild(t[0])
					}, abort: function() {
						n && n()
					}
				}
			}
		});
		var Dn = [], jn = /(=)\?(?=&|$)|\?\?/;
		J.ajaxSetup({
			jsonp: "callback", jsonpCallback: function() {
				var e = Dn.pop() || J.expando + "_" + cn++;
				return this[e] = !0, e
			}
		}), J.ajaxPrefilter("json jsonp", function(t, n, i) {
			var a, o, r,
				s = t.jsonp !== !1 && (jn.test(t.url) ? "url" : "string" == typeof t.data && !(t.contentType || "").indexOf("application/x-www-form-urlencoded") && jn.test(t.data) && "data");
			return s || "jsonp" === t.dataTypes[0] ? (a = t.jsonpCallback = J.isFunction(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, s ? t[s] = t[s].replace(jn, "$1" + a) : t.jsonp !== !1 && (t.url += (dn.test(t.url) ? "&" : "?") + t.jsonp + "=" + a), t.converters["script json"] = function() {
				return r || J.error(a + " was not called"), r[0]
			}, t.dataTypes[0] = "json", o = e[a], e[a] = function() {
				r = arguments
			}, i.always(function() {
				e[a] = o, t[a] && (t.jsonpCallback = n.jsonpCallback, Dn.push(a)), r && J.isFunction(o) && o(r[0]), r = o = void 0
			}), "script") : void 0
		}), J.parseHTML = function(e, t, n) {
			if(!e || "string" != typeof e) return null;
			"boolean" == typeof t && (n = t, t = !1), t = t || K;
			var i = rt.exec(e), a = !n && [];
			return i ? [t.createElement(i[1])] : (i = J.buildFragment([e], t, a), a && a.length && J(a).remove(), J.merge([], i.childNodes))
		};
		var zn = J.fn.load;
		J.fn.load = function(e, t, n) {
			if("string" != typeof e && zn) return zn.apply(this, arguments);
			var i, a, o, r = this, s = e.indexOf(" ");
			return s >= 0 && (i = J.trim(e.slice(s)), e = e.slice(0, s)), J.isFunction(t) ? (n = t, t = void 0) : t && "object" == typeof t && (a = "POST"), r.length > 0 && J.ajax({url: e, type: a, dataType: "html", data: t}).done(function(e) {
				o = arguments, r.html(i ? J("<div>").append(J.parseHTML(e)).find(i) : e)
			}).complete(n && function(e, t) {
				r.each(n, o || [e.responseText, t, e])
			}), this
		}, J.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(e, t) {
			J.fn[t] = function(e) {
				return this.on(t, e)
			}
		}), J.expr.filters.animated = function(e) {
			return J.grep(J.timers, function(t) {
				return e === t.elem
			}).length
		};
		var In = e.document.documentElement;
		J.offset = {
			setOffset: function(e, t, n) {
				var i, a, o, r, s, l, u, c = J.css(e, "position"), d = J(e), f = {};
				"static" === c && (e.style.position = "relative"), s = d.offset(), o = J.css(e, "top"), l = J.css(e, "left"), u = ("absolute" === c || "fixed" === c) && (o + l).indexOf("auto") > -1, u ? (i = d.position(), r = i.top, a = i.left) : (r = parseFloat(o) || 0, a = parseFloat(l) || 0), J.isFunction(t) && (t = t.call(e, n, s)), null != t.top && (f.top = t.top - s.top + r), null != t.left && (f.left = t.left - s.left + a), "using" in t ? t.using.call(e, f) : d.css(f)
			}
		}, J.fn.extend({
			offset: function(e) {
				if(arguments.length) return void 0 === e ? this : this.each(function(t) {
					J.offset.setOffset(this, e, t)
				});
				var t, n, i = this[0], a = {top: 0, left: 0}, o = i && i.ownerDocument;
				if(o) return t = o.documentElement, J.contains(t, i) ? (typeof i.getBoundingClientRect !== St && (a = i.getBoundingClientRect()), n = M(o), {top: a.top + n.pageYOffset - t.clientTop, left: a.left + n.pageXOffset - t.clientLeft}) : a
			}, position: function() {
				if(this[0])
				{
					var e, t, n = this[0], i = {top: 0, left: 0};
					return "fixed" === J.css(n, "position") ? t = n.getBoundingClientRect() : (e = this.offsetParent(), t = this.offset(), J.nodeName(e[0], "html") || (i = e.offset()), i.top += J.css(e[0], "borderTopWidth", !0), i.left += J.css(e[0], "borderLeftWidth", !0)), {top: t.top - i.top - J.css(n, "marginTop", !0), left: t.left - i.left - J.css(n, "marginLeft", !0)}
				}
			}, offsetParent: function() {
				return this.map(function() {
					for(var e = this.offsetParent || In; e && !J.nodeName(e, "html") && "static" === J.css(e, "position");)
					{
						e = e.offsetParent;
					}
					return e || In
				})
			}
		}), J.each({scrollLeft: "pageXOffset", scrollTop: "pageYOffset"}, function(t, n) {
			var i = "pageYOffset" === n;
			J.fn[t] = function(a) {
				return vt(this, function(t, a, o) {
					var r = M(t);
					return void 0 === o ? r ? r[n] : t[a] : void(r ? r.scrollTo(i ? e.pageXOffset : o, i ? o : e.pageYOffset) : t[a] = o)
				}, t, a, arguments.length, null)
			}
		}), J.each(["top", "left"], function(e, t) {
			J.cssHooks[t] = C(G.pixelPosition, function(e, n) {
				return n ? (n = x(e, t), Ht.test(n) ? J(e).position()[t] + "px" : n) : void 0
			})
		}), J.each({Height: "height", Width: "width"}, function(e, t) {
			J.each({padding: "inner" + e, content: t, "": "outer" + e}, function(n, i) {
				J.fn[i] = function(i, a) {
					var o = arguments.length && (n || "boolean" != typeof i),
						r = n || (i === !0 || a === !0 ? "margin" : "border");
					return vt(this, function(t, n, i) {
						var a;
						return J.isWindow(t) ? t.document.documentElement["client" + e] : 9 === t.nodeType ? (a = t.documentElement, Math.max(t.body["scroll" + e], a["scroll" + e], t.body["offset" + e], a["offset" + e], a["client" + e])) : void 0 === i ? J.css(t, n, r) : J.style(t, n, i, r)
					}, t, o ? i : void 0, o, null)
				}
			})
		}), J.fn.size = function() {
			return this.length
		}, J.fn.andSelf = J.fn.addBack, "function" == typeof define && define.amd && define("jquery", [], function() {
			return J
		});
		var qn = e.jQuery, Rn = e.$;
		return J.noConflict = function(t) {
			return e.$ === J && (e.$ = Rn), t && e.jQuery === J && (e.jQuery = qn), J
		}, typeof t === St && (e.jQuery = e.$ = J), J
	}), "undefined" == typeof jQuery)
{
	var jQuery;
	jQuery = "function" == typeof require ? $ = require("jquery") : $
}
/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 *
 * Open source under the BSD License.
 *
 * Copyright © 2008 George McGinley Smith
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list
 * of conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 *
 * Neither the name of the author nor the names of contributors may be used to endorse
 * or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED
 * OF THE POSSIBILITY OF SUCH DAMAGE.
 *
*/
jQuery.easing.jswing = jQuery.easing.swing, jQuery.extend(jQuery.easing, {
	def: "easeOutQuad", swing: function(e, t, n, i, a) {
		return jQuery.easing[jQuery.easing.def](e, t, n, i, a)
	}, easeInQuad: function(e, t, n, i, a) {
		return i * (t /= a) * t + n
	}, easeOutQuad: function(e, t, n, i, a) {
		return -i * (t /= a) * (t - 2) + n
	}, easeInOutQuad: function(e, t, n, i, a) {
		return (t /= a / 2) < 1 ? i / 2 * t * t + n : -i / 2 * (--t * (t - 2) - 1) + n
	}, easeInCubic: function(e, t, n, i, a) {
		return i * (t /= a) * t * t + n
	}, easeOutCubic: function(e, t, n, i, a) {
		return i * ((t = t / a - 1) * t * t + 1) + n
	}, easeInOutCubic: function(e, t, n, i, a) {
		return (t /= a / 2) < 1 ? i / 2 * t * t * t + n : i / 2 * ((t -= 2) * t * t + 2) + n
	}, easeInQuart: function(e, t, n, i, a) {
		return i * (t /= a) * t * t * t + n
	}, easeOutQuart: function(e, t, n, i, a) {
		return -i * ((t = t / a - 1) * t * t * t - 1) + n
	}, easeInOutQuart: function(e, t, n, i, a) {
		return (t /= a / 2) < 1 ? i / 2 * t * t * t * t + n : -i / 2 * ((t -= 2) * t * t * t - 2) + n
	}, easeInQuint: function(e, t, n, i, a) {
		return i * (t /= a) * t * t * t * t + n
	}, easeOutQuint: function(e, t, n, i, a) {
		return i * ((t = t / a - 1) * t * t * t * t + 1) + n
	}, easeInOutQuint: function(e, t, n, i, a) {
		return (t /= a / 2) < 1 ? i / 2 * t * t * t * t * t + n : i / 2 * ((t -= 2) * t * t * t * t + 2) + n
	}, easeInSine: function(e, t, n, i, a) {
		return -i * Math.cos(t / a * (Math.PI / 2)) + i + n
	}, easeOutSine: function(e, t, n, i, a) {
		return i * Math.sin(t / a * (Math.PI / 2)) + n
	}, easeInOutSine: function(e, t, n, i, a) {
		return -i / 2 * (Math.cos(Math.PI * t / a) - 1) + n
	}, easeInExpo: function(e, t, n, i, a) {
		return 0 == t ? n : i * Math.pow(2, 10 * (t / a - 1)) + n
	}, easeOutExpo: function(e, t, n, i, a) {
		return t == a ? n + i : i * (-Math.pow(2, -10 * t / a) + 1) + n
	}, easeInOutExpo: function(e, t, n, i, a) {
		return 0 == t ? n : t == a ? n + i : (t /= a / 2) < 1 ? i / 2 * Math.pow(2, 10 * (t - 1)) + n : i / 2 * (-Math.pow(2, -10 * --t) + 2) + n
	}, easeInCirc: function(e, t, n, i, a) {
		return -i * (Math.sqrt(1 - (t /= a) * t) - 1) + n
	}, easeOutCirc: function(e, t, n, i, a) {
		return i * Math.sqrt(1 - (t = t / a - 1) * t) + n
	}, easeInOutCirc: function(e, t, n, i, a) {
		return (t /= a / 2) < 1 ? -i / 2 * (Math.sqrt(1 - t * t) - 1) + n : i / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + n
	}, easeInElastic: function(e, t, n, i, a) {
		var o = 1.70158, r = 0, s = i;
		if(0 == t) return n;
		if(1 == (t /= a)) return n + i;
		if(r || (r = .3 * a), s < Math.abs(i))
		{
			s = i;
			var o = r / 4
		}
		else var o = r / (2 * Math.PI) * Math.asin(i / s);
		return -(s * Math.pow(2, 10 * (t -= 1)) * Math.sin(2 * (t * a - o) * Math.PI / r)) + n
	}, easeOutElastic: function(e, t, n, i, a) {
		var o = 1.70158, r = 0, s = i;
		if(0 == t) return n;
		if(1 == (t /= a)) return n + i;
		if(r || (r = .3 * a), s < Math.abs(i))
		{
			s = i;
			var o = r / 4
		}
		else var o = r / (2 * Math.PI) * Math.asin(i / s);
		return s * Math.pow(2, -10 * t) * Math.sin(2 * (t * a - o) * Math.PI / r) + i + n
	}, easeInOutElastic: function(e, t, n, i, a) {
		var o = 1.70158, r = 0, s = i;
		if(0 == t) return n;
		if(2 == (t /= a / 2)) return n + i;
		if(r || (r = .3 * a * 1.5), s < Math.abs(i))
		{
			s = i;
			var o = r / 4
		}
		else var o = r / (2 * Math.PI) * Math.asin(i / s);
		return 1 > t ? -.5 * s * Math.pow(2, 10 * (t -= 1)) * Math.sin(2 * (t * a - o) * Math.PI / r) + n : s * Math.pow(2, -10 * (t -= 1)) * Math.sin(2 * (t * a - o) * Math.PI / r) * .5 + i + n
	}, easeInBack: function(e, t, n, i, a, o) {
		return void 0 == o && (o = 1.70158), i * (t /= a) * t * ((o + 1) * t - o) + n
	}, easeOutBack: function(e, t, n, i, a, o) {
		return void 0 == o && (o = 1.70158), i * ((t = t / a - 1) * t * ((o + 1) * t + o) + 1) + n
	}, easeInOutBack: function(e, t, n, i, a, o) {
		return void 0 == o && (o = 1.70158), (t /= a / 2) < 1 ? i / 2 * t * t * (((o *= 1.525) + 1) * t - o) + n : i / 2 * ((t -= 2) * t * (((o *= 1.525) + 1) * t + o) + 2) + n
	}, easeInBounce: function(e, t, n, i, a) {
		return i - jQuery.easing.easeOutBounce(e, a - t, 0, i, a) + n
	}, easeOutBounce: function(e, t, n, i, a) {
		return (t /= a) < 1 / 2.75 ? 7.5625 * i * t * t + n : 2 / 2.75 > t ? i * (7.5625 * (t -= 1.5 / 2.75) * t + .75) + n : 2.5 / 2.75 > t ? i * (7.5625 * (t -= 2.25 / 2.75) * t + .9375) + n : i * (7.5625 * (t -= 2.625 / 2.75) * t + .984375) + n
	}, easeInOutBounce: function(e, t, n, i, a) {
		return a / 2 > t ? .5 * jQuery.easing.easeInBounce(e, 2 * t, 0, i, a) + n : .5 * jQuery.easing.easeOutBounce(e, 2 * t - a, 0, i, a) + .5 * i + n
	}
}), jQuery.extend(jQuery.easing, {
	easeInOutMaterial: function(e, t, n, i, a) {
		return (t /= a / 2) < 1 ? i / 2 * t * t + n : i / 4 * ((t -= 2) * t * t + 2) + n
	}
}), /*! VelocityJS.org (1.2.3). (C) 2014 Julian Shapiro. MIT @license: en.wikipedia.org/wiki/MIT_License */
	/*! VelocityJS.org jQuery Shim (1.0.1). (C) 2014 The jQuery Foundation. MIT @license: en.wikipedia.org/wiki/MIT_License. */
	/*! Note that this has been modified by Materialize to confirm that Velocity is not already being imported. */
	jQuery.Velocity ? console.log("Velocity is already loaded. You may be needlessly importing Velocity again; note that Materialize includes Velocity.") : (!function(e) {
		function t (e) {
			var t = e.length, i = n.type(e);
			return "function" === i || n.isWindow(e) ? !1 : 1 === e.nodeType && t ? !0 : "array" === i || 0 === t || "number" == typeof t && t > 0 && t - 1 in e
		}

		if(!e.jQuery)
		{
			var n = function(e, t) {
				return new n.fn.init(e, t)
			};
			n.isWindow = function(e) {
				return null != e && e == e.window
			}, n.type = function(e) {
				return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? a[r.call(e)] || "object" : typeof e
			}, n.isArray = Array.isArray || function(e) {
				return "array" === n.type(e)
			}, n.isPlainObject = function(e) {
				var t;
				if(!e || "object" !== n.type(e) || e.nodeType || n.isWindow(e)) return !1;
				try
				{
					if(e.constructor && !o.call(e, "constructor") && !o.call(e.constructor.prototype, "isPrototypeOf")) return !1
				} catch (i)
				{
					return !1
				}
				for(t in e)
				{
					;
				}
				return void 0 === t || o.call(e, t)
			}, n.each = function(e, n, i) {
				var a, o = 0, r = e.length, s = t(e);
				if(i)
				{
					if(s) for(; r > o && (a = n.apply(e[o], i), a !== !1); o++)
					{
						;
					}
					else for(o in e)
					{
						if(a = n.apply(e[o], i), a === !1) break
					}
				}
				else if(s) for(; r > o && (a = n.call(e[o], o, e[o]), a !== !1); o++)
				{
					;
				}
				else for(o in e)
					{
						if(a = n.call(e[o], o, e[o]), a === !1) break;
					}
				return e
			}, n.data = function(e, t, a) {
				if(void 0 === a)
				{
					var o = e[n.expando], r = o && i[o];
					if(void 0 === t) return r;
					if(r && t in r) return r[t]
				}
				else if(void 0 !== t)
				{
					var o = e[n.expando] || (e[n.expando] = ++n.uuid);
					return i[o] = i[o] || {}, i[o][t] = a, a
				}
			}, n.removeData = function(e, t) {
				var a = e[n.expando], o = a && i[a];
				o && n.each(t, function(e, t) {
					delete o[t]
				})
			}, n.extend = function() {
				var e, t, i, a, o, r, s = arguments[0] || {}, l = 1, u = arguments.length, c = !1;
				for("boolean" == typeof s && (c = s, s = arguments[l] || {}, l++), "object" != typeof s && "function" !== n.type(s) && (s = {}), l === u && (s = this, l--); u > l; l++)
				{
					if(null != (o = arguments[l])) for(a in o)
					{
						e = s[a], i = o[a], s !== i && (c && i && (n.isPlainObject(i) || (t = n.isArray(i))) ? (t ? (t = !1, r = e && n.isArray(e) ? e : []) : r = e && n.isPlainObject(e) ? e : {}, s[a] = n.extend(c, r, i)) : void 0 !== i && (s[a] = i));
					}
				}
				return s
			}, n.queue = function(e, i, a) {
				function o (e, n) {
					var i = n || [];
					return null != e && (t(Object(e)) ? !function(e, t) {
						for(var n = +t.length, i = 0, a = e.length; n > i;)
						{
							e[a++] = t[i++];
						}
						if(n !== n) for(; void 0 !== t[i];)
						{
							e[a++] = t[i++];
						}
						return e.length = a, e
					}(i, "string" == typeof e ? [e] : e) : [].push.call(i, e)), i
				}

				if(e)
				{
					i = (i || "fx") + "queue";
					var r = n.data(e, i);
					return a ? (!r || n.isArray(a) ? r = n.data(e, i, o(a)) : r.push(a), r) : r || []
				}
			}, n.dequeue = function(e, t) {
				n.each(e.nodeType ? [e] : e, function(e, i) {
					t = t || "fx";
					var a = n.queue(i, t), o = a.shift();
					"inprogress" === o && (o = a.shift()), o && ("fx" === t && a.unshift("inprogress"), o.call(i, function() {
						n.dequeue(i, t)
					}))
				})
			}, n.fn = n.prototype = {
				init: function(e) {
					if(e.nodeType) return this[0] = e, this;
					throw new Error("Not a DOM node.")
				}, offset: function() {
					var t = this[0].getBoundingClientRect ? this[0].getBoundingClientRect() : {top: 0, left: 0};
					return {top: t.top + (e.pageYOffset || document.scrollTop || 0) - (document.clientTop || 0), left: t.left + (e.pageXOffset || document.scrollLeft || 0) - (document.clientLeft || 0)}
				}, position: function() {
					function e () {
						for(var e = this.offsetParent || document; e && "html" === !e.nodeType.toLowerCase && "static" === e.style.position;)
						{
							e = e.offsetParent;
						}
						return e || document
					}

					var t = this[0], e = e.apply(t), i = this.offset(),
						a = /^(?:body|html)$/i.test(e.nodeName) ? {top: 0, left: 0} : n(e).offset();
					return i.top -= parseFloat(t.style.marginTop) || 0, i.left -= parseFloat(t.style.marginLeft) || 0, e.style && (a.top += parseFloat(e.style.borderTopWidth) || 0, a.left += parseFloat(e.style.borderLeftWidth) || 0), {top: i.top - a.top, left: i.left - a.left}
				}
			};
			var i = {};
			n.expando = "velocity" + (new Date).getTime(), n.uuid = 0;
			for(var a = {}, o = a.hasOwnProperty, r = a.toString, s = "Boolean Number String Function Array Date RegExp Object Error".split(" "), l = 0; l < s.length; l++)
			{
				a["[object " + s[l] + "]"] = s[l].toLowerCase();
			}
			n.fn.init.prototype = n.fn, e.Velocity = {Utilities: n}
		}
	}(window), function(e) {
		"object" == typeof module && "object" == typeof module.exports ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : e()
	}(function() {
		return function(e, t, n, i) {
			function a (e) {
				for(var t = -1, n = e ? e.length : 0, i = []; ++t < n;)
				{
					var a = e[t];
					a && i.push(a)
				}
				return i
			}

			function o (e) {
				return m.isWrapped(e) ? e = [].slice.call(e) : m.isNode(e) && (e = [e]), e
			}

			function r (e) {
				var t = f.data(e, "velocity");
				return null === t ? i : t
			}

			function s (e) {
				return function(t) {
					return Math.round(t * e) * (1 / e)
				}
			}

			function l (e, n, i, a) {
				function o (e, t) {
					return 1 - 3 * t + 3 * e
				}

				function r (e, t) {
					return 3 * t - 6 * e
				}

				function s (e) {
					return 3 * e
				}

				function l (e, t, n) {
					return ((o(t, n) * e + r(t, n)) * e + s(t)) * e
				}

				function u (e, t, n) {
					return 3 * o(t, n) * e * e + 2 * r(t, n) * e + s(t)
				}

				function c (t, n) {
					for(var a = 0; m > a; ++a)
					{
						var o = u(n, e, i);
						if(0 === o) return n;
						var r = l(n, e, i) - t;
						n -= r / o
					}
					return n
				}

				function d () {
					for(var t = 0; b > t; ++t)
					{
						k[t] = l(t * w, e, i)
					}
				}

				function f (t, n, a) {
					var o, r, s = 0;
					do r = n + (a - n) / 2, o = l(r, e, i) - t, o > 0 ? a = r : n = r; while(Math.abs(o) > g && ++s < y);
					return r
				}

				function h (t) {
					for(var n = 0, a = 1, o = b - 1; a != o && k[a] <= t; ++a)
					{
						n += w;
					}
					--a;
					var r = (t - k[a]) / (k[a + 1] - k[a]), s = n + r * w, l = u(s, e, i);
					return l >= v ? c(t, s) : 0 == l ? s : f(t, n, n + w)
				}

				function p () {
					T = !0, (e != n || i != a) && d()
				}

				var m = 4, v = .001, g = 1e-7, y = 10, b = 11, w = 1 / (b - 1), x = "Float32Array" in t;
				if(4 !== arguments.length) return !1;
				for(var C = 0; 4 > C; ++C)
				{
					if("number" != typeof arguments[C] || isNaN(arguments[C]) || !isFinite(arguments[C])) return !1;
				}
				e = Math.min(e, 1), i = Math.min(i, 1), e = Math.max(e, 0), i = Math.max(i, 0);
				var k = x ? new Float32Array(b) : new Array(b), T = !1, S = function(t) {
					return T || p(), e === n && i === a ? t : 0 === t ? 0 : 1 === t ? 1 : l(h(t), n, a)
				};
				S.getControlPoints = function() {
					return [{x: e, y: n}, {x: i, y: a}]
				};
				var A = "generateBezier(" + [e, n, i, a] + ")";
				return S.toString = function() {
					return A
				}, S
			}

			function u (e, t) {
				var n = e;
				return m.isString(e) ? b.Easings[e] || (n = !1) : n = m.isArray(e) && 1 === e.length ? s.apply(null, e) : m.isArray(e) && 2 === e.length ? w.apply(null, e.concat([t])) : m.isArray(e) && 4 === e.length ? l.apply(null, e) : !1, n === !1 && (n = b.Easings[b.defaults.easing] ? b.defaults.easing : y), n
			}

			function c (e) {
				if(e)
				{
					var t = (new Date).getTime(), n = b.State.calls.length;
					n > 1e4 && (b.State.calls = a(b.State.calls));
					for(var o = 0; n > o; o++)
					{
						if(b.State.calls[o])
						{
							var s = b.State.calls[o], l = s[0], u = s[2], h = s[3], p = !!h, v = null;
							h || (h = b.State.calls[o][3] = t - 16);
							for(var g = Math.min((t - h) / u.duration, 1), y = 0, w = l.length; w > y; y++)
							{
								var C = l[y], T = C.element;
								if(r(T))
								{
									var S = !1;
									if(u.display !== i && null !== u.display && "none" !== u.display)
									{
										if("flex" === u.display)
										{
											var A = ["-webkit-box", "-moz-box", "-ms-flexbox", "-webkit-flex"];
											f.each(A, function(e, t) {
												x.setPropertyValue(T, "display", t)
											})
										}
										x.setPropertyValue(T, "display", u.display)
									}
									u.visibility !== i && "hidden" !== u.visibility && x.setPropertyValue(T, "visibility", u.visibility);
									for(var $ in C)
									{
										if("element" !== $)
										{
											var E, F = C[$], _ = m.isString(F.easing) ? b.Easings[F.easing] : F.easing;
											if(1 === g) E = F.endValue;
											else
											{
												var O = F.endValue - F.startValue;
												if(E = F.startValue + O * _(g, u, O), !p && E === F.currentValue) continue
											}
											if(F.currentValue = E, "tween" === $) v = E;
											else
											{
												if(x.Hooks.registered[$])
												{
													var P = x.Hooks.getRoot($), D = r(T).rootPropertyValueCache[P];
													D && (F.rootPropertyValue = D)
												}
												var j = x.setPropertyValue(T, $, F.currentValue + (0 === parseFloat(E) ? "" : F.unitType), F.rootPropertyValue, F.scrollData);
												x.Hooks.registered[$] && (r(T).rootPropertyValueCache[P] = x.Normalizations.registered[P] ? x.Normalizations.registered[P]("extract", null, j[1]) : j[1]), "transform" === j[0] && (S = !0)
											}
										}
									}
									u.mobileHA && r(T).transformCache.translate3d === i && (r(T).transformCache.translate3d = "(0px, 0px, 0px)", S = !0), S && x.flushTransformCache(T)
								}
							}
							u.display !== i && "none" !== u.display && (b.State.calls[o][2].display = !1), u.visibility !== i && "hidden" !== u.visibility && (b.State.calls[o][2].visibility = !1), u.progress && u.progress.call(s[1], s[1], g, Math.max(0, h + u.duration - t), h, v), 1 === g && d(o)
						}
					}
				}
				b.State.isTicking && k(c)
			}

			function d (e, t) {
				if(!b.State.calls[e]) return !1;
				for(var n = b.State.calls[e][0], a = b.State.calls[e][1], o = b.State.calls[e][2], s = b.State.calls[e][4], l = !1, u = 0, c = n.length; c > u; u++)
				{
					var d = n[u].element;
					if(t || o.loop || ("none" === o.display && x.setPropertyValue(d, "display", o.display), "hidden" === o.visibility && x.setPropertyValue(d, "visibility", o.visibility)), o.loop !== !0 && (f.queue(d)[1] === i || !/\.velocityQueueEntryFlag/i.test(f.queue(d)[1])) && r(d))
					{
						r(d).isAnimating = !1, r(d).rootPropertyValueCache = {};
						var h = !1;
						f.each(x.Lists.transforms3D, function(e, t) {
							var n = /^scale/.test(t) ? 1 : 0, a = r(d).transformCache[t];
							r(d).transformCache[t] !== i && new RegExp("^\\(" + n + "[^.]").test(a) && (h = !0, delete r(d).transformCache[t])
						}), o.mobileHA && (h = !0, delete r(d).transformCache.translate3d), h && x.flushTransformCache(d), x.Values.removeClass(d, "velocity-animating")
					}
					if(!t && o.complete && !o.loop && u === c - 1) try
					{
						o.complete.call(a, a)
					} catch (p)
					{
						setTimeout(function() {
							throw p
						}, 1)
					}
					s && o.loop !== !0 && s(a), r(d) && o.loop === !0 && !t && (f.each(r(d).tweensContainer, function(e, t) {
						/^rotate/.test(e) && 360 === parseFloat(t.endValue) && (t.endValue = 0, t.startValue = 360), /^backgroundPosition/.test(e) && 100 === parseFloat(t.endValue) && "%" === t.unitType && (t.endValue = 0, t.startValue = 100)
					}), b(d, "reverse", {loop: !0, delay: o.delay})), o.queue !== !1 && f.dequeue(d, o.queue)
				}
				b.State.calls[e] = !1;
				for(var m = 0, v = b.State.calls.length; v > m; m++)
				{
					if(b.State.calls[m] !== !1)
					{
						l = !0;
						break
					}
				}
				l === !1 && (b.State.isTicking = !1, delete b.State.calls, b.State.calls = [])
			}

			var f, h = function() {
				if(n.documentMode) return n.documentMode;
				for(var e = 7; e > 4; e--)
				{
					var t = n.createElement("div");
					if(t.innerHTML = "<!--[if IE " + e + "]><span></span><![endif]-->", t.getElementsByTagName("span").length) return t = null, e
				}
				return i
			}(), p = function() {
				var e = 0;
				return t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || function(t) {
					var n, i = (new Date).getTime();
					return n = Math.max(0, 16 - (i - e)), e = i + n, setTimeout(function() {
						t(i + n)
					}, n)
				}
			}(), m = {
				isString: function(e) {
					return "string" == typeof e
				}, isArray: Array.isArray || function(e) {
					return "[object Array]" === Object.prototype.toString.call(e)
				}, isFunction: function(e) {
					return "[object Function]" === Object.prototype.toString.call(e)
				}, isNode: function(e) {
					return e && e.nodeType
				}, isNodeList: function(e) {
					return "object" == typeof e && /^\[object (HTMLCollection|NodeList|Object)\]$/.test(Object.prototype.toString.call(e)) && e.length !== i && (0 === e.length || "object" == typeof e[0] && e[0].nodeType > 0)
				}, isWrapped: function(e) {
					return e && (e.jquery || t.Zepto && t.Zepto.zepto.isZ(e))
				}, isSVG: function(e) {
					return t.SVGElement && e instanceof t.SVGElement
				}, isEmptyObject: function(e) {
					for(var t in e)
					{
						return !1;
					}
					return !0
				}
			}, v = !1;
			if(e.fn && e.fn.jquery ? (f = e, v = !0) : f = t.Velocity.Utilities, 8 >= h && !v) throw new Error("Velocity: IE8 and below require jQuery to be loaded before Velocity.");
			if(7 >= h) return void(jQuery.fn.velocity = jQuery.fn.animate);
			var g = 400, y = "swing", b = {
				State: {isMobile: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent), isAndroid: /Android/i.test(navigator.userAgent), isGingerbread: /Android 2\.3\.[3-7]/i.test(navigator.userAgent), isChrome: t.chrome, isFirefox: /Firefox/i.test(navigator.userAgent), prefixElement: n.createElement("div"), prefixMatches: {}, scrollAnchor: null, scrollPropertyLeft: null, scrollPropertyTop: null, isTicking: !1, calls: []}, CSS: {}, Utilities: f, Redirects: {}, Easings: {}, Promise: t.Promise, defaults: {queue: "", duration: g, easing: y, begin: i, complete: i, progress: i, display: i, visibility: i, loop: !1, delay: !1, mobileHA: !0, _cacheValues: !0}, init: function(e) {
					f.data(e, "velocity", {isSVG: m.isSVG(e), isAnimating: !1, computedStyle: null, tweensContainer: null, rootPropertyValueCache: {}, transformCache: {}})
				}, hook: null, mock: !1, version: {major: 1, minor: 2, patch: 2}, debug: !1
			};
			t.pageYOffset !== i ? (b.State.scrollAnchor = t, b.State.scrollPropertyLeft = "pageXOffset", b.State.scrollPropertyTop = "pageYOffset") : (b.State.scrollAnchor = n.documentElement || n.body.parentNode || n.body, b.State.scrollPropertyLeft = "scrollLeft", b.State.scrollPropertyTop = "scrollTop");
			var w = function() {
				function e (e) {
					return -e.tension * e.x - e.friction * e.v
				}

				function t (t, n, i) {
					var a = {x: t.x + i.dx * n, v: t.v + i.dv * n, tension: t.tension, friction: t.friction};
					return {dx: a.v, dv: e(a)}
				}

				function n (n, i) {
					var a = {dx: n.v, dv: e(n)}, o = t(n, .5 * i, a), r = t(n, .5 * i, o), s = t(n, i, r),
						l = 1 / 6 * (a.dx + 2 * (o.dx + r.dx) + s.dx), u = 1 / 6 * (a.dv + 2 * (o.dv + r.dv) + s.dv);
					return n.x = n.x + l * i, n.v = n.v + u * i, n
				}

				return function i (e, t, a) {
					var o, r, s, l = {x: -1, v: 0, tension: null, friction: null}, u = [0], c = 0, d = 1e-4, f = .016;
					for(e = parseFloat(e) || 500, t = parseFloat(t) || 20, a = a || null, l.tension = e, l.friction = t, o = null !== a, o ? (c = i(e, t), r = c / a * f) : r = f; s = n(s || l, r), u.push(1 + s.x), c += 16, Math.abs(s.x) > d && Math.abs(s.v) > d;)
					{
						;
					}
					return o ? function(e) {
						return u[e * (u.length - 1) | 0]
					} : c
				}
			}();
			b.Easings = {
				linear: function(e) {
					return e
				}, swing: function(e) {
					return .5 - Math.cos(e * Math.PI) / 2
				}, spring: function(e) {
					return 1 - Math.cos(4.5 * e * Math.PI) * Math.exp(6 * -e)
				}
			}, f.each([["ease", [.25, .1, .25, 1]], ["ease-in", [.42, 0, 1, 1]], ["ease-out", [0, 0, .58, 1]], ["ease-in-out", [.42, 0, .58, 1]], ["easeInSine", [.47, 0, .745, .715]], ["easeOutSine", [.39, .575, .565, 1]], ["easeInOutSine", [.445, .05, .55, .95]], ["easeInQuad", [.55, .085, .68, .53]], ["easeOutQuad", [.25, .46, .45, .94]], ["easeInOutQuad", [.455, .03, .515, .955]], ["easeInCubic", [.55, .055, .675, .19]], ["easeOutCubic", [.215, .61, .355, 1]], ["easeInOutCubic", [.645, .045, .355, 1]], ["easeInQuart", [.895, .03, .685, .22]], ["easeOutQuart", [.165, .84, .44, 1]], ["easeInOutQuart", [.77, 0, .175, 1]], ["easeInQuint", [.755, .05, .855, .06]], ["easeOutQuint", [.23, 1, .32, 1]], ["easeInOutQuint", [.86, 0, .07, 1]], ["easeInExpo", [.95, .05, .795, .035]], ["easeOutExpo", [.19, 1, .22, 1]], ["easeInOutExpo", [1, 0, 0, 1]], ["easeInCirc", [.6, .04, .98, .335]], ["easeOutCirc", [.075, .82, .165, 1]], ["easeInOutCirc", [.785, .135, .15, .86]]], function(e, t) {
				b.Easings[t[0]] = l.apply(null, t[1])
			});
			var x = b.CSS = {
				RegEx: {isHex: /^#([A-f\d]{3}){1,2}$/i, valueUnwrap: /^[A-z]+\((.*)\)$/i, wrappedValueAlreadyExtracted: /[0-9.]+ [0-9.]+ [0-9.]+( [0-9.]+)?/, valueSplit: /([A-z]+\(.+\))|(([A-z0-9#-.]+?)(?=\s|$))/gi}, Lists: {colors: ["fill", "stroke", "stopColor", "color", "backgroundColor", "borderColor", "borderTopColor", "borderRightColor", "borderBottomColor", "borderLeftColor", "outlineColor"], transformsBase: ["translateX", "translateY", "scale", "scaleX", "scaleY", "skewX", "skewY", "rotateZ"], transforms3D: ["transformPerspective", "translateZ", "scaleZ", "rotateX", "rotateY"]}, Hooks: {
					templates: {textShadow: ["Color X Y Blur", "black 0px 0px 0px"], boxShadow: ["Color X Y Blur Spread", "black 0px 0px 0px 0px"], clip: ["Top Right Bottom Left", "0px 0px 0px 0px"], backgroundPosition: ["X Y", "0% 0%"], transformOrigin: ["X Y Z", "50% 50% 0px"], perspectiveOrigin: ["X Y", "50% 50%"]}, registered: {}, register: function() {
						for(var e = 0; e < x.Lists.colors.length; e++)
						{
							var t = "color" === x.Lists.colors[e] ? "0 0 0 1" : "255 255 255 1";
							x.Hooks.templates[x.Lists.colors[e]] = ["Red Green Blue Alpha", t]
						}
						var n, i, a;
						if(h) for(n in x.Hooks.templates)
						{
							i = x.Hooks.templates[n], a = i[0].split(" ");
							var o = i[1].match(x.RegEx.valueSplit);
							"Color" === a[0] && (a.push(a.shift()), o.push(o.shift()), x.Hooks.templates[n] = [a.join(" "), o.join(" ")])
						}
						for(n in x.Hooks.templates)
						{
							i = x.Hooks.templates[n], a = i[0].split(" ");
							for(var e in a)
							{
								var r = n + a[e], s = e;
								x.Hooks.registered[r] = [n, s]
							}
						}
					}, getRoot: function(e) {
						var t = x.Hooks.registered[e];
						return t ? t[0] : e
					}, cleanRootPropertyValue: function(e, t) {
						return x.RegEx.valueUnwrap.test(t) && (t = t.match(x.RegEx.valueUnwrap)[1]), x.Values.isCSSNullValue(t) && (t = x.Hooks.templates[e][1]), t
					}, extractValue: function(e, t) {
						var n = x.Hooks.registered[e];
						if(n)
						{
							var i = n[0], a = n[1];
							return t = x.Hooks.cleanRootPropertyValue(i, t), t.toString().match(x.RegEx.valueSplit)[a]
						}
						return t
					}, injectValue: function(e, t, n) {
						var i = x.Hooks.registered[e];
						if(i)
						{
							var a, o, r = i[0], s = i[1];
							return n = x.Hooks.cleanRootPropertyValue(r, n), a = n.toString().match(x.RegEx.valueSplit), a[s] = t, o = a.join(" ")
						}
						return n
					}
				}, Normalizations: {
					registered: {
						clip: function(e, t, n) {
							switch(e)
							{
								case"name":
									return "clip";
								case"extract":
									var i;
									return x.RegEx.wrappedValueAlreadyExtracted.test(n) ? i = n : (i = n.toString().match(x.RegEx.valueUnwrap), i = i ? i[1].replace(/,(\s+)?/g, " ") : n), i;
								case"inject":
									return "rect(" + n + ")"
							}
						}, blur: function(e, t, n) {
							switch(e)
							{
								case"name":
									return b.State.isFirefox ? "filter" : "-webkit-filter";
								case"extract":
									var i = parseFloat(n);
									if(!i && 0 !== i)
									{
										var a = n.toString().match(/blur\(([0-9]+[A-z]+)\)/i);
										i = a ? a[1] : 0
									}
									return i;
								case"inject":
									return parseFloat(n) ? "blur(" + n + ")" : "none"
							}
						}, opacity: function(e, t, n) {
							if(8 >= h) switch(e)
							{
								case"name":
									return "filter";
								case"extract":
									var i = n.toString().match(/alpha\(opacity=(.*)\)/i);
									return n = i ? i[1] / 100 : 1;
								case"inject":
									return t.style.zoom = 1, parseFloat(n) >= 1 ? "" : "alpha(opacity=" + parseInt(100 * parseFloat(n), 10) + ")"
							}
							else switch(e)
							{
								case"name":
									return "opacity";
								case"extract":
									return n;
								case"inject":
									return n
							}
						}
					}, register: function() {
						9 >= h || b.State.isGingerbread || (x.Lists.transformsBase = x.Lists.transformsBase.concat(x.Lists.transforms3D));
						for(var e = 0; e < x.Lists.transformsBase.length; e++)
						{
							!function() {
								var t = x.Lists.transformsBase[e];
								x.Normalizations.registered[t] = function(e, n, a) {
									switch(e)
									{
										case"name":
											return "transform";
										case"extract":
											return r(n) === i || r(n).transformCache[t] === i ? /^scale/i.test(t) ? 1 : 0 : r(n).transformCache[t].replace(/[()]/g, "");
										case"inject":
											var o = !1;
											switch(t.substr(0, t.length - 1))
											{
												case"translate":
													o = !/(%|px|em|rem|vw|vh|\d)$/i.test(a);
													break;
												case"scal":
												case"scale":
													b.State.isAndroid && r(n).transformCache[t] === i && 1 > a && (a = 1), o = !/(\d)$/i.test(a);
													break;
												case"skew":
													o = !/(deg|\d)$/i.test(a);
													break;
												case"rotate":
													o = !/(deg|\d)$/i.test(a)
											}
											return o || (r(n).transformCache[t] = "(" + a + ")"), r(n).transformCache[t]
									}
								}
							}();
						}
						for(var e = 0; e < x.Lists.colors.length; e++)
						{
							!function() {
								var t = x.Lists.colors[e];
								x.Normalizations.registered[t] = function(e, n, a) {
									switch(e)
									{
										case"name":
											return t;
										case"extract":
											var o;
											if(x.RegEx.wrappedValueAlreadyExtracted.test(a)) o = a;
											else
											{
												var r,
													s = {black: "rgb(0, 0, 0)", blue: "rgb(0, 0, 255)", gray: "rgb(128, 128, 128)", green: "rgb(0, 128, 0)", red: "rgb(255, 0, 0)", white: "rgb(255, 255, 255)"};
												/^[A-z]+$/i.test(a) ? r = s[a] !== i ? s[a] : s.black : x.RegEx.isHex.test(a) ? r = "rgb(" + x.Values.hexToRgb(a).join(" ") + ")" : /^rgba?\(/i.test(a) || (r = s.black), o = (r || a).toString().match(x.RegEx.valueUnwrap)[1].replace(/,(\s+)?/g, " ")
											}
											return 8 >= h || 3 !== o.split(" ").length || (o += " 1"), o;
										case"inject":
											return 8 >= h ? 4 === a.split(" ").length && (a = a.split(/\s+/).slice(0, 3).join(" ")) : 3 === a.split(" ").length && (a += " 1"), (8 >= h ? "rgb" : "rgba") + "(" + a.replace(/\s+/g, ",").replace(/\.(\d)+(?=,)/g, "") + ")"
									}
								}
							}()
						}
					}
				}, Names: {
					camelCase: function(e) {
						return e.replace(/-(\w)/g, function(e, t) {
							return t.toUpperCase()
						})
					}, SVGAttribute: function(e) {
						var t = "width|height|x|y|cx|cy|r|rx|ry|x1|x2|y1|y2";
						return (h || b.State.isAndroid && !b.State.isChrome) && (t += "|transform"), new RegExp("^(" + t + ")$", "i").test(e)
					}, prefixCheck: function(e) {
						if(b.State.prefixMatches[e]) return [b.State.prefixMatches[e], !0];
						for(var t = ["", "Webkit", "Moz", "ms", "O"], n = 0, i = t.length; i > n; n++)
						{
							var a;
							if(a = 0 === n ? e : t[n] + e.replace(/^\w/, function(e) {
									return e.toUpperCase()
								}), m.isString(b.State.prefixElement.style[a])) return b.State.prefixMatches[e] = a, [a, !0]
						}
						return [e, !1]
					}
				}, Values: {
					hexToRgb: function(e) {
						var t, n = /^#?([a-f\d])([a-f\d])([a-f\d])$/i, i = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i;
						return e = e.replace(n, function(e, t, n, i) {
							return t + t + n + n + i + i
						}), t = i.exec(e), t ? [parseInt(t[1], 16), parseInt(t[2], 16), parseInt(t[3], 16)] : [0, 0, 0]
					}, isCSSNullValue: function(e) {
						return 0 == e || /^(none|auto|transparent|(rgba\(0, ?0, ?0, ?0\)))$/i.test(e)
					}, getUnitType: function(e) {
						return /^(rotate|skew)/i.test(e) ? "deg" : /(^(scale|scaleX|scaleY|scaleZ|alpha|flexGrow|flexHeight|zIndex|fontWeight)$)|((opacity|red|green|blue|alpha)$)/i.test(e) ? "" : "px"
					}, getDisplayType: function(e) {
						var t = e && e.tagName.toString().toLowerCase();
						return /^(b|big|i|small|tt|abbr|acronym|cite|code|dfn|em|kbd|strong|samp|var|a|bdo|br|img|map|object|q|script|span|sub|sup|button|input|label|select|textarea)$/i.test(t) ? "inline" : /^(li)$/i.test(t) ? "list-item" : /^(tr)$/i.test(t) ? "table-row" : /^(table)$/i.test(t) ? "table" : /^(tbody)$/i.test(t) ? "table-row-group" : "block"
					}, addClass: function(e, t) {
						e.classList ? e.classList.add(t) : e.className += (e.className.length ? " " : "") + t
					}, removeClass: function(e, t) {
						e.classList ? e.classList.remove(t) : e.className = e.className.toString().replace(new RegExp("(^|\\s)" + t.split(" ").join("|") + "(\\s|$)", "gi"), " ")
					}
				}, getPropertyValue: function(e, n, a, o) {
					function s (e, n) {
						function a () {
							u && x.setPropertyValue(e, "display", "none")
						}

						var l = 0;
						if(8 >= h) l = f.css(e, n);
						else
						{
							var u = !1;
							if(/^(width|height)$/.test(n) && 0 === x.getPropertyValue(e, "display") && (u = !0, x.setPropertyValue(e, "display", x.Values.getDisplayType(e))), !o)
							{
								if("height" === n && "border-box" !== x.getPropertyValue(e, "boxSizing").toString().toLowerCase())
								{
									var c = e.offsetHeight - (parseFloat(x.getPropertyValue(e, "borderTopWidth")) || 0) - (parseFloat(x.getPropertyValue(e, "borderBottomWidth")) || 0) - (parseFloat(x.getPropertyValue(e, "paddingTop")) || 0) - (parseFloat(x.getPropertyValue(e, "paddingBottom")) || 0);
									return a(), c
								}
								if("width" === n && "border-box" !== x.getPropertyValue(e, "boxSizing").toString().toLowerCase())
								{
									var d = e.offsetWidth - (parseFloat(x.getPropertyValue(e, "borderLeftWidth")) || 0) - (parseFloat(x.getPropertyValue(e, "borderRightWidth")) || 0) - (parseFloat(x.getPropertyValue(e, "paddingLeft")) || 0) - (parseFloat(x.getPropertyValue(e, "paddingRight")) || 0);
									return a(), d
								}
							}
							var p;
							p = r(e) === i ? t.getComputedStyle(e, null) : r(e).computedStyle ? r(e).computedStyle : r(e).computedStyle = t.getComputedStyle(e, null), "borderColor" === n && (n = "borderTopColor"), l = 9 === h && "filter" === n ? p.getPropertyValue(n) : p[n], ("" === l || null === l) && (l = e.style[n]), a()
						}
						if("auto" === l && /^(top|right|bottom|left)$/i.test(n))
						{
							var m = s(e, "position");
							("fixed" === m || "absolute" === m && /top|left/i.test(n)) && (l = f(e).position()[n] + "px")
						}
						return l
					}

					var l;
					if(x.Hooks.registered[n])
					{
						var u = n, c = x.Hooks.getRoot(u);
						a === i && (a = x.getPropertyValue(e, x.Names.prefixCheck(c)[0])), x.Normalizations.registered[c] && (a = x.Normalizations.registered[c]("extract", e, a)), l = x.Hooks.extractValue(u, a)
					}
					else if(x.Normalizations.registered[n])
					{
						var d, p;
						d = x.Normalizations.registered[n]("name", e), "transform" !== d && (p = s(e, x.Names.prefixCheck(d)[0]), x.Values.isCSSNullValue(p) && x.Hooks.templates[n] && (p = x.Hooks.templates[n][1])), l = x.Normalizations.registered[n]("extract", e, p)
					}
					if(!/^[\d-]/.test(l)) if(r(e) && r(e).isSVG && x.Names.SVGAttribute(n)) if(/^(height|width)$/i.test(n)) try
					{
						l = e.getBBox()[n]
					} catch (m)
					{
						l = 0
					}
					else l = e.getAttribute(n);
					else l = s(e, x.Names.prefixCheck(n)[0]);
					return x.Values.isCSSNullValue(l) && (l = 0), b.debug >= 2 && console.log("Get " + n + ": " + l), l
				}, setPropertyValue: function(e, n, i, a, o) {
					var s = n;
					if("scroll" === n) o.container ? o.container["scroll" + o.direction] = i : "Left" === o.direction ? t.scrollTo(i, o.alternateValue) : t.scrollTo(o.alternateValue, i);
					else if(x.Normalizations.registered[n] && "transform" === x.Normalizations.registered[n]("name", e)) x.Normalizations.registered[n]("inject", e, i), s = "transform", i = r(e).transformCache[n];
					else
					{
						if(x.Hooks.registered[n])
						{
							var l = n, u = x.Hooks.getRoot(n);
							a = a || x.getPropertyValue(e, u), i = x.Hooks.injectValue(l, i, a), n = u
						}
						if(x.Normalizations.registered[n] && (i = x.Normalizations.registered[n]("inject", e, i), n = x.Normalizations.registered[n]("name", e)), s = x.Names.prefixCheck(n)[0], 8 >= h) try
						{
							e.style[s] = i
						} catch (c)
						{
							b.debug && console.log("Browser does not support [" + i + "] for [" + s + "]")
						}
						else r(e) && r(e).isSVG && x.Names.SVGAttribute(n) ? e.setAttribute(n, i) : e.style[s] = i;
						b.debug >= 2 && console.log("Set " + n + " (" + s + "): " + i)
					}
					return [s, i]
				}, flushTransformCache: function(e) {
					function t (t) {
						return parseFloat(x.getPropertyValue(e, t))
					}

					var n = "";
					if((h || b.State.isAndroid && !b.State.isChrome) && r(e).isSVG)
					{
						var i = {translate: [t("translateX"), t("translateY")], skewX: [t("skewX")], skewY: [t("skewY")], scale: 1 !== t("scale") ? [t("scale"), t("scale")] : [t("scaleX"), t("scaleY")], rotate: [t("rotateZ"), 0, 0]};
						f.each(r(e).transformCache, function(e) {
							/^translate/i.test(e) ? e = "translate" : /^scale/i.test(e) ? e = "scale" : /^rotate/i.test(e) && (e = "rotate"), i[e] && (n += e + "(" + i[e].join(" ") + ") ", delete i[e])
						})
					}
					else
					{
						var a, o;
						f.each(r(e).transformCache, function(t) {
							return a = r(e).transformCache[t], "transformPerspective" === t ? (o = a, !0) : (9 === h && "rotateZ" === t && (t = "rotate"), void(n += t + a + " "))
						}), o && (n = "perspective" + o + " " + n)
					}
					x.setPropertyValue(e, "transform", n)
				}
			};
			x.Hooks.register(), x.Normalizations.register(), b.hook = function(e, t, n) {
				var a = i;
				return e = o(e), f.each(e, function(e, o) {
					if(r(o) === i && b.init(o), n === i) a === i && (a = b.CSS.getPropertyValue(o, t));
					else
					{
						var s = b.CSS.setPropertyValue(o, t, n);
						"transform" === s[0] && b.CSS.flushTransformCache(o), a = s
					}
				}), a
			};
			var C = function() {
				function e () {
					return s ? $.promise || null : l
				}

				function a () {
					function e () {
						function e (e, t) {
							var n = i, a = i, r = i;
							return m.isArray(e) ? (n = e[0], !m.isArray(e[1]) && /^[\d-]/.test(e[1]) || m.isFunction(e[1]) || x.RegEx.isHex.test(e[1]) ? r = e[1] : (m.isString(e[1]) && !x.RegEx.isHex.test(e[1]) || m.isArray(e[1])) && (a = t ? e[1] : u(e[1], s.duration), e[2] !== i && (r = e[2]))) : n = e, t || (a = a || s.easing), m.isFunction(n) && (n = n.call(o, T, k)), m.isFunction(r) && (r = r.call(o, T, k)), [n || 0, a, r]
						}

						function d (e, t) {
							var n, i;
							return i = (t || "0").toString().toLowerCase().replace(/[%A-z]+$/, function(e) {
								return n = e, ""
							}), n || (n = x.Values.getUnitType(e)), [i, n]
						}

						function h () {
							var e = {myParent: o.parentNode || n.body, position: x.getPropertyValue(o, "position"), fontSize: x.getPropertyValue(o, "fontSize")},
								i = e.position === j.lastPosition && e.myParent === j.lastParent,
								a = e.fontSize === j.lastFontSize;
							j.lastParent = e.myParent, j.lastPosition = e.position, j.lastFontSize = e.fontSize;
							var s = 100, l = {};
							if(a && i) l.emToPx = j.lastEmToPx, l.percentToPxWidth = j.lastPercentToPxWidth, l.percentToPxHeight = j.lastPercentToPxHeight;
							else
							{
								var u = r(o).isSVG ? n.createElementNS("http://www.w3.org/2000/svg", "rect") : n.createElement("div");
								b.init(u), e.myParent.appendChild(u), f.each(["overflow", "overflowX", "overflowY"], function(e, t) {
									b.CSS.setPropertyValue(u, t, "hidden")
								}), b.CSS.setPropertyValue(u, "position", e.position), b.CSS.setPropertyValue(u, "fontSize", e.fontSize), b.CSS.setPropertyValue(u, "boxSizing", "content-box"), f.each(["minWidth", "maxWidth", "width", "minHeight", "maxHeight", "height"], function(e, t) {
									b.CSS.setPropertyValue(u, t, s + "%")
								}), b.CSS.setPropertyValue(u, "paddingLeft", s + "em"), l.percentToPxWidth = j.lastPercentToPxWidth = (parseFloat(x.getPropertyValue(u, "width", null, !0)) || 1) / s, l.percentToPxHeight = j.lastPercentToPxHeight = (parseFloat(x.getPropertyValue(u, "height", null, !0)) || 1) / s, l.emToPx = j.lastEmToPx = (parseFloat(x.getPropertyValue(u, "paddingLeft")) || 1) / s, e.myParent.removeChild(u)
							}
							return null === j.remToPx && (j.remToPx = parseFloat(x.getPropertyValue(n.body, "fontSize")) || 16), null === j.vwToPx && (j.vwToPx = parseFloat(t.innerWidth) / 100, j.vhToPx = parseFloat(t.innerHeight) / 100), l.remToPx = j.remToPx, l.vwToPx = j.vwToPx, l.vhToPx = j.vhToPx, b.debug >= 1 && console.log("Unit ratios: " + JSON.stringify(l), o), l
						}

						if(s.begin && 0 === T) try
						{
							s.begin.call(p, p)
						} catch (g)
						{
							setTimeout(function() {
								throw g
							}, 1)
						}
						if("scroll" === E)
						{
							var w, C, S, A = /^x$/i.test(s.axis) ? "Left" : "Top", F = parseFloat(s.offset) || 0;
							s.container ? m.isWrapped(s.container) || m.isNode(s.container) ? (s.container = s.container[0] || s.container, w = s.container["scroll" + A], S = w + f(o).position()[A.toLowerCase()] + F) : s.container = null : (w = b.State.scrollAnchor[b.State["scrollProperty" + A]], C = b.State.scrollAnchor[b.State["scrollProperty" + ("Left" === A ? "Top" : "Left")]], S = f(o).offset()[A.toLowerCase()] + F), l = {scroll: {rootPropertyValue: !1, startValue: w, currentValue: w, endValue: S, unitType: "", easing: s.easing, scrollData: {container: s.container, direction: A, alternateValue: C}}, element: o}, b.debug && console.log("tweensContainer (scroll): ", l.scroll, o)
						}
						else if("reverse" === E)
						{
							if(!r(o).tweensContainer) return void f.dequeue(o, s.queue);
							"none" === r(o).opts.display && (r(o).opts.display = "auto"), "hidden" === r(o).opts.visibility && (r(o).opts.visibility = "visible"), r(o).opts.loop = !1, r(o).opts.begin = null, r(o).opts.complete = null, y.easing || delete s.easing, y.duration || delete s.duration, s = f.extend({}, r(o).opts, s);
							var _ = f.extend(!0, {}, r(o).tweensContainer);
							for(var O in _)
							{
								if("element" !== O)
								{
									var P = _[O].startValue;
									_[O].startValue = _[O].currentValue = _[O].endValue, _[O].endValue = P, m.isEmptyObject(y) || (_[O].easing = s.easing), b.debug && console.log("reverse tweensContainer (" + O + "): " + JSON.stringify(_[O]), o)
								}
							}
							l = _
						}
						else if("start" === E)
						{
							var _;
							r(o).tweensContainer && r(o).isAnimating === !0 && (_ = r(o).tweensContainer), f.each(v, function(t, n) {
								if(RegExp("^" + x.Lists.colors.join("$|^") + "$").test(t))
								{
									var a = e(n, !0), o = a[0], r = a[1], s = a[2];
									if(x.RegEx.isHex.test(o))
									{
										for(var l = ["Red", "Green", "Blue"], u = x.Values.hexToRgb(o), c = s ? x.Values.hexToRgb(s) : i, d = 0; d < l.length; d++)
										{
											var f = [u[d]];
											r && f.push(r), c !== i && f.push(c[d]), v[t + l[d]] = f
										}
										delete v[t]
									}
								}
							});
							for(var D in v)
							{
								var I = e(v[D]), q = I[0], R = I[1], L = I[2];
								D = x.Names.camelCase(D);
								var N = x.Hooks.getRoot(D), M = !1;
								if(r(o).isSVG || "tween" === N || x.Names.prefixCheck(N)[1] !== !1 || x.Normalizations.registered[N] !== i)
								{
									(s.display !== i && null !== s.display && "none" !== s.display || s.visibility !== i && "hidden" !== s.visibility) && /opacity|filter/.test(D) && !L && 0 !== q && (L = 0), s._cacheValues && _ && _[D] ? (L === i && (L = _[D].endValue + _[D].unitType), M = r(o).rootPropertyValueCache[N]) : x.Hooks.registered[D] ? L === i ? (M = x.getPropertyValue(o, N), L = x.getPropertyValue(o, D, M)) : M = x.Hooks.templates[N][1] : L === i && (L = x.getPropertyValue(o, D));
									var H, W, V, B = !1;
									if(H = d(D, L), L = H[0], V = H[1], H = d(D, q), q = H[0].replace(/^([+-\/*])=/, function(e, t) {
											return B = t, ""
										}), W = H[1], L = parseFloat(L) || 0, q = parseFloat(q) || 0, "%" === W && (/^(fontSize|lineHeight)$/.test(D) ? (q /= 100, W = "em") : /^scale/.test(D) ? (q /= 100, W = "") : /(Red|Green|Blue)$/i.test(D) && (q = q / 100 * 255, W = "")), /[\/*]/.test(B)) W = V;
									else if(V !== W && 0 !== L) if(0 === q) W = V;
									else
									{
										a = a || h();
										var Q = /margin|padding|left|right|width|text|word|letter/i.test(D) || /X$/.test(D) || "x" === D ? "x" : "y";
										switch(V)
										{
											case"%":
												L *= "x" === Q ? a.percentToPxWidth : a.percentToPxHeight;
												break;
											case"px":
												break;
											default:
												L *= a[V + "ToPx"]
										}
										switch(W)
										{
											case"%":
												L *= 1 / ("x" === Q ? a.percentToPxWidth : a.percentToPxHeight);
												break;
											case"px":
												break;
											default:
												L *= 1 / a[W + "ToPx"]
										}
									}
									switch(B)
									{
										case"+":
											q = L + q;
											break;
										case"-":
											q = L - q;
											break;
										case"*":
											q = L * q;
											break;
										case"/":
											q = L / q
									}
									l[D] = {rootPropertyValue: M, startValue: L, currentValue: L, endValue: q, unitType: W, easing: R}, b.debug && console.log("tweensContainer (" + D + "): " + JSON.stringify(l[D]), o)
								}
								else b.debug && console.log("Skipping [" + N + "] due to a lack of browser support.")
							}
							l.element = o
						}
						l.element && (x.Values.addClass(o, "velocity-animating"), z.push(l), "" === s.queue && (r(o).tweensContainer = l, r(o).opts = s), r(o).isAnimating = !0, T === k - 1 ? (b.State.calls.push([z, p, s, null, $.resolver]), b.State.isTicking === !1 && (b.State.isTicking = !0, c())) : T++)
					}

					var a, o = this, s = f.extend({}, b.defaults, y), l = {};
					switch(r(o) === i && b.init(o), parseFloat(s.delay) && s.queue !== !1 && f.queue(o, s.queue, function(e) {
						b.velocityQueueEntryFlag = !0, r(o).delayTimer = {setTimeout: setTimeout(e, parseFloat(s.delay)), next: e}
					}), s.duration.toString().toLowerCase())
					{
						case"fast":
							s.duration = 200;
							break;
						case"normal":
							s.duration = g;
							break;
						case"slow":
							s.duration = 600;
							break;
						default:
							s.duration = parseFloat(s.duration) || 1
					}
					b.mock !== !1 && (b.mock === !0 ? s.duration = s.delay = 1 : (s.duration *= parseFloat(b.mock) || 1, s.delay *= parseFloat(b.mock) || 1)), s.easing = u(s.easing, s.duration), s.begin && !m.isFunction(s.begin) && (s.begin = null), s.progress && !m.isFunction(s.progress) && (s.progress = null), s.complete && !m.isFunction(s.complete) && (s.complete = null), s.display !== i && null !== s.display && (s.display = s.display.toString().toLowerCase(), "auto" === s.display && (s.display = b.CSS.Values.getDisplayType(o))), s.visibility !== i && null !== s.visibility && (s.visibility = s.visibility.toString().toLowerCase()), s.mobileHA = s.mobileHA && b.State.isMobile && !b.State.isGingerbread, s.queue === !1 ? s.delay ? setTimeout(e, s.delay) : e() : f.queue(o, s.queue, function(t, n) {
						return n === !0 ? ($.promise && $.resolver(p), !0) : (b.velocityQueueEntryFlag = !0, void e(t))
					}), "" !== s.queue && "fx" !== s.queue || "inprogress" === f.queue(o)[0] || f.dequeue(o)
				}

				var s, l, h, p, v, y,
					w = arguments[0] && (arguments[0].p || f.isPlainObject(arguments[0].properties) && !arguments[0].properties.names || m.isString(arguments[0].properties));
				if(m.isWrapped(this) ? (s = !1, h = 0, p = this, l = this) : (s = !0, h = 1, p = w ? arguments[0].elements || arguments[0].e : arguments[0]), p = o(p))
				{
					w ? (v = arguments[0].properties || arguments[0].p, y = arguments[0].options || arguments[0].o) : (v = arguments[h], y = arguments[h + 1]);
					var k = p.length, T = 0;
					if(!/^(stop|finish)$/i.test(v) && !f.isPlainObject(y))
					{
						var S = h + 1;
						y = {};
						for(var A = S; A < arguments.length; A++)
						{
							m.isArray(arguments[A]) || !/^(fast|normal|slow)$/i.test(arguments[A]) && !/^\d/.test(arguments[A]) ? m.isString(arguments[A]) || m.isArray(arguments[A]) ? y.easing = arguments[A] : m.isFunction(arguments[A]) && (y.complete = arguments[A]) : y.duration = arguments[A]
						}
					}
					var $ = {promise: null, resolver: null, rejecter: null};
					s && b.Promise && ($.promise = new b.Promise(function(e, t) {
						$.resolver = e, $.rejecter = t
					}));
					var E;
					switch(v)
					{
						case"scroll":
							E = "scroll";
							break;
						case"reverse":
							E = "reverse";
							break;
						case"finish":
						case"stop":
							f.each(p, function(e, t) {
								r(t) && r(t).delayTimer && (clearTimeout(r(t).delayTimer.setTimeout), r(t).delayTimer.next && r(t).delayTimer.next(), delete r(t).delayTimer)
							});
							var F = [];
							return f.each(b.State.calls, function(e, t) {
								t && f.each(t[1], function(n, a) {
									var o = y === i ? "" : y;
									return o === !0 || t[2].queue === o || y === i && t[2].queue === !1 ? void f.each(p, function(n, i) {
										i === a && ((y === !0 || m.isString(y)) && (f.each(f.queue(i, m.isString(y) ? y : ""), function(e, t) {
											m.isFunction(t) && t(null, !0)
										}), f.queue(i, m.isString(y) ? y : "", [])), "stop" === v ? (r(i) && r(i).tweensContainer && o !== !1 && f.each(r(i).tweensContainer, function(e, t) {
											t.endValue = t.currentValue
										}), F.push(e)) : "finish" === v && (t[2].duration = 1))
									}) : !0
								})
							}), "stop" === v && (f.each(F, function(e, t) {
								d(t, !0)
							}), $.promise && $.resolver(p)), e();
						default:
							if(!f.isPlainObject(v) || m.isEmptyObject(v))
							{
								if(m.isString(v) && b.Redirects[v])
								{
									var _ = f.extend({}, y), O = _.duration, P = _.delay || 0;
									return _.backwards === !0 && (p = f.extend(!0, [], p).reverse()), f.each(p, function(e, t) {
										parseFloat(_.stagger) ? _.delay = P + parseFloat(_.stagger) * e : m.isFunction(_.stagger) && (_.delay = P + _.stagger.call(t, e, k)), _.drag && (_.duration = parseFloat(O) || (/^(callout|transition)/.test(v) ? 1e3 : g), _.duration = Math.max(_.duration * (_.backwards ? 1 - e / k : (e + 1) / k), .75 * _.duration, 200)), b.Redirects[v].call(t, t, _ || {}, e, k, p, $.promise ? $ : i)
									}), e()
								}
								var D = "Velocity: First argument (" + v + ") was not a property map, a known action, or a registered redirect. Aborting.";
								return $.promise ? $.rejecter(new Error(D)) : console.log(D), e()
							}
							E = "start"
					}
					var j = {lastParent: null, lastPosition: null, lastFontSize: null, lastPercentToPxWidth: null, lastPercentToPxHeight: null, lastEmToPx: null, remToPx: null, vwToPx: null, vhToPx: null},
						z = [];
					f.each(p, function(e, t) {
						m.isNode(t) && a.call(t)
					});
					var I, _ = f.extend({}, b.defaults, y);
					if(_.loop = parseInt(_.loop), I = 2 * _.loop - 1, _.loop) for(var q = 0; I > q; q++)
					{
						var R = {delay: _.delay, progress: _.progress};
						q === I - 1 && (R.display = _.display, R.visibility = _.visibility, R.complete = _.complete), C(p, "reverse", R)
					}
					return e()
				}
			};
			b = f.extend(C, b), b.animate = C;
			var k = t.requestAnimationFrame || p;
			return b.State.isMobile || n.hidden === i || n.addEventListener("visibilitychange", function() {
				n.hidden ? (k = function(e) {
					return setTimeout(function() {
						e(!0)
					}, 16)
				}, c()) : k = t.requestAnimationFrame || p
			}), e.Velocity = b, e !== t && (e.fn.velocity = C, e.fn.velocity.defaults = b.defaults), f.each(["Down", "Up"], function(e, t) {
				b.Redirects["slide" + t] = function(e, n, a, o, r, s) {
					var l = f.extend({}, n), u = l.begin, c = l.complete,
						d = {height: "", marginTop: "", marginBottom: "", paddingTop: "", paddingBottom: ""}, h = {};
					l.display === i && (l.display = "Down" === t ? "inline" === b.CSS.Values.getDisplayType(e) ? "inline-block" : "block" : "none"), l.begin = function() {
						u && u.call(r, r);
						for(var n in d)
						{
							h[n] = e.style[n];
							var i = b.CSS.getPropertyValue(e, n);
							d[n] = "Down" === t ? [i, 0] : [0, i]
						}
						h.overflow = e.style.overflow, e.style.overflow = "hidden"
					}, l.complete = function() {
						for(var t in h)
						{
							e.style[t] = h[t];
						}
						c && c.call(r, r), s && s.resolver(r)
					}, b(e, d, l)
				}
			}), f.each(["In", "Out"], function(e, t) {
				b.Redirects["fade" + t] = function(e, n, a, o, r, s) {
					var l = f.extend({}, n), u = {opacity: "In" === t ? 1 : 0}, c = l.complete;
					l.complete = a !== o - 1 ? l.begin = null : function() {
						c && c.call(r, r), s && s.resolver(r)
					}, l.display === i && (l.display = "In" === t ? "auto" : "none"), b(this, u, l)
				}
			}), b
		}(window.jQuery || window.Zepto || window, window, document)
	})), !function(e, t, n, i) {
	"use strict";

	function a (e, t, n) {
		return setTimeout(c(e, n), t)
	}

	function o (e, t, n) {
		return Array.isArray(e) ? (r(e, n[t], n), !0) : !1
	}

	function r (e, t, n) {
		var a;
		if(e) if(e.forEach) e.forEach(t, n);
		else if(e.length !== i) for(a = 0; a < e.length;)
		{
			t.call(n, e[a], a, e), a++;
		}
		else for(a in e)
			{
				e.hasOwnProperty(a) && t.call(n, e[a], a, e)
			}
	}

	function s (e, t, n) {
		for(var a = Object.keys(t), o = 0; o < a.length;)
		{
			(!n || n && e[a[o]] === i) && (e[a[o]] = t[a[o]]), o++;
		}
		return e
	}

	function l (e, t) {
		return s(e, t, !0)
	}

	function u (e, t, n) {
		var i, a = t.prototype;
		i = e.prototype = Object.create(a), i.constructor = e, i._super = a, n && s(i, n)
	}

	function c (e, t) {
		return function() {
			return e.apply(t, arguments)
		}
	}

	function d (e, t) {
		return typeof e == ct ? e.apply(t ? t[0] || i : i, t) : e
	}

	function f (e, t) {
		return e === i ? t : e
	}

	function h (e, t, n) {
		r(g(t), function(t) {
			e.addEventListener(t, n, !1)
		})
	}

	function p (e, t, n) {
		r(g(t), function(t) {
			e.removeEventListener(t, n, !1)
		})
	}

	function m (e, t) {
		for(; e;)
		{
			if(e == t) return !0;
			e = e.parentNode
		}
		return !1
	}

	function v (e, t) {
		return e.indexOf(t) > -1
	}

	function g (e) {
		return e.trim().split(/\s+/g)
	}

	function y (e, t, n) {
		if(e.indexOf && !n) return e.indexOf(t);
		for(var i = 0; i < e.length;)
		{
			if(n && e[i][n] == t || !n && e[i] === t) return i;
			i++
		}
		return -1
	}

	function b (e) {
		return Array.prototype.slice.call(e, 0)
	}

	function w (e, t, n) {
		for(var i = [], a = [], o = 0; o < e.length;)
		{
			var r = t ? e[o][t] : e[o];
			y(a, r) < 0 && i.push(e[o]), a[o] = r, o++
		}
		return n && (i = t ? i.sort(function(e, n) {
			return e[t] > n[t]
		}) : i.sort()), i
	}

	function x (e, t) {
		for(var n, a, o = t[0].toUpperCase() + t.slice(1), r = 0; r < lt.length;)
		{
			if(n = lt[r], a = n ? n + o : t, a in e) return a;
			r++
		}
		return i
	}

	function C () {
		return pt++
	}

	function k (e) {
		var t = e.ownerDocument;
		return t.defaultView || t.parentWindow
	}

	function T (e, t) {
		var n = this;
		this.manager = e, this.callback = t, this.element = e.element, this.target = e.options.inputTarget, this.domHandler = function(t) {
			d(e.options.enable, [e]) && n.handler(t)
		}, this.init()
	}

	function S (e) {
		var t, n = e.options.inputClass;
		return new (t = n ? n : gt ? L : yt ? H : vt ? V : R)(e, A)
	}

	function A (e, t, n) {
		var i = n.pointers.length, a = n.changedPointers.length, o = t & Tt && 0 === i - a,
			r = t & (At | $t) && 0 === i - a;
		n.isFirst = !!o, n.isFinal = !!r, o && (e.session = {}), n.eventType = t, $(e, n), e.emit("hammer.input", n), e.recognize(n), e.session.prevInput = n
	}

	function $ (e, t) {
		var n = e.session, i = t.pointers, a = i.length;
		n.firstInput || (n.firstInput = _(t)), a > 1 && !n.firstMultiple ? n.firstMultiple = _(t) : 1 === a && (n.firstMultiple = !1);
		var o = n.firstInput, r = n.firstMultiple, s = r ? r.center : o.center, l = t.center = O(i);
		t.timeStamp = ht(), t.deltaTime = t.timeStamp - o.timeStamp, t.angle = z(s, l), t.distance = j(s, l), E(n, t), t.offsetDirection = D(t.deltaX, t.deltaY), t.scale = r ? q(r.pointers, i) : 1, t.rotation = r ? I(r.pointers, i) : 0, F(n, t);
		var u = e.element;
		m(t.srcEvent.target, u) && (u = t.srcEvent.target), t.target = u
	}

	function E (e, t) {
		var n = t.center, i = e.offsetDelta || {}, a = e.prevDelta || {}, o = e.prevInput || {};
		(t.eventType === Tt || o.eventType === At) && (a = e.prevDelta = {x: o.deltaX || 0, y: o.deltaY || 0}, i = e.offsetDelta = {x: n.x, y: n.y}), t.deltaX = a.x + (n.x - i.x), t.deltaY = a.y + (n.y - i.y)
	}

	function F (e, t) {
		var n, a, o, r, s = e.lastInterval || t, l = t.timeStamp - s.timeStamp;
		if(t.eventType != $t && (l > kt || s.velocity === i))
		{
			var u = s.deltaX - t.deltaX, c = s.deltaY - t.deltaY, d = P(l, u, c);
			a = d.x, o = d.y, n = ft(d.x) > ft(d.y) ? d.x : d.y, r = D(u, c), e.lastInterval = t
		}
		else n = s.velocity, a = s.velocityX, o = s.velocityY, r = s.direction;
		t.velocity = n, t.velocityX = a, t.velocityY = o, t.direction = r
	}

	function _ (e) {
		for(var t = [], n = 0; n < e.pointers.length;)
		{
			t[n] = {clientX: dt(e.pointers[n].clientX), clientY: dt(e.pointers[n].clientY)}, n++;
		}
		return {timeStamp: ht(), pointers: t, center: O(t), deltaX: e.deltaX, deltaY: e.deltaY}
	}

	function O (e) {
		var t = e.length;
		if(1 === t) return {x: dt(e[0].clientX), y: dt(e[0].clientY)};
		for(var n = 0, i = 0, a = 0; t > a;)
		{
			n += e[a].clientX, i += e[a].clientY, a++;
		}
		return {x: dt(n / t), y: dt(i / t)}
	}

	function P (e, t, n) {
		return {x: t / e || 0, y: n / e || 0}
	}

	function D (e, t) {
		return e === t ? Et : ft(e) >= ft(t) ? e > 0 ? Ft : _t : t > 0 ? Ot : Pt
	}

	function j (e, t, n) {
		n || (n = It);
		var i = t[n[0]] - e[n[0]], a = t[n[1]] - e[n[1]];
		return Math.sqrt(i * i + a * a)
	}

	function z (e, t, n) {
		n || (n = It);
		var i = t[n[0]] - e[n[0]], a = t[n[1]] - e[n[1]];
		return 180 * Math.atan2(a, i) / Math.PI
	}

	function I (e, t) {
		return z(t[1], t[0], qt) - z(e[1], e[0], qt)
	}

	function q (e, t) {
		return j(t[0], t[1], qt) / j(e[0], e[1], qt)
	}

	function R () {
		this.evEl = Lt, this.evWin = Nt, this.allow = !0, this.pressed = !1, T.apply(this, arguments)
	}

	function L () {
		this.evEl = Wt, this.evWin = Vt, T.apply(this, arguments), this.store = this.manager.session.pointerEvents = []
	}

	function N () {
		this.evTarget = Qt, this.evWin = Xt, this.started = !1, T.apply(this, arguments)
	}

	function M (e, t) {
		var n = b(e.touches), i = b(e.changedTouches);
		return t & (At | $t) && (n = w(n.concat(i), "identifier", !0)), [n, i]
	}

	function H () {
		this.evTarget = Ut, this.targetIds = {}, T.apply(this, arguments)
	}

	function W (e, t) {
		var n = b(e.touches), i = this.targetIds;
		if(t & (Tt | St) && 1 === n.length) return i[n[0].identifier] = !0, [n, n];
		var a, o, r = b(e.changedTouches), s = [], l = this.target;
		if(o = n.filter(function(e) {
				return m(e.target, l)
			}), t === Tt) for(a = 0; a < o.length;)
		{
			i[o[a].identifier] = !0, a++;
		}
		for(a = 0; a < r.length;)
		{
			i[r[a].identifier] && s.push(r[a]), t & (At | $t) && delete i[r[a].identifier], a++;
		}
		return s.length ? [w(o.concat(s), "identifier", !0), s] : void 0
	}

	function V () {
		T.apply(this, arguments);
		var e = c(this.handler, this);
		this.touch = new H(this.manager, e), this.mouse = new R(this.manager, e)
	}

	function B (e, t) {
		this.manager = e, this.set(t)
	}

	function Q (e) {
		if(v(e, tn)) return tn;
		var t = v(e, nn), n = v(e, an);
		return t && n ? nn + " " + an : t || n ? t ? nn : an : v(e, en) ? en : Jt
	}

	function X (e) {
		this.id = C(), this.manager = null, this.options = l(e || {}, this.defaults), this.options.enable = f(this.options.enable, !0), this.state = on, this.simultaneous = {}, this.requireFail = []
	}

	function Y (e) {
		return e & cn ? "cancel" : e & ln ? "end" : e & sn ? "move" : e & rn ? "start" : ""
	}

	function U (e) {
		return e == Pt ? "down" : e == Ot ? "up" : e == Ft ? "left" : e == _t ? "right" : ""
	}

	function G (e, t) {
		var n = t.manager;
		return n ? n.get(e) : e
	}

	function K () {
		X.apply(this, arguments)
	}

	function Z () {
		K.apply(this, arguments), this.pX = null, this.pY = null
	}

	function J () {
		K.apply(this, arguments)
	}

	function et () {
		X.apply(this, arguments), this._timer = null, this._input = null
	}

	function tt () {
		K.apply(this, arguments)
	}

	function nt () {
		K.apply(this, arguments)
	}

	function it () {
		X.apply(this, arguments), this.pTime = !1, this.pCenter = !1, this._timer = null, this._input = null, this.count = 0
	}

	function at (e, t) {
		return t = t || {}, t.recognizers = f(t.recognizers, at.defaults.preset), new ot(e, t)
	}

	function ot (e, t) {
		t = t || {}, this.options = l(t, at.defaults), this.options.inputTarget = this.options.inputTarget || e, this.handlers = {}, this.session = {}, this.recognizers = [], this.element = e, this.input = S(this), this.touchAction = new B(this, this.options.touchAction), rt(this, !0), r(t.recognizers, function(e) {
			var t = this.add(new e[0](e[1]));
			e[2] && t.recognizeWith(e[2]), e[3] && t.requireFailure(e[3])
		}, this)
	}

	function rt (e, t) {
		var n = e.element;
		r(e.options.cssProps, function(e, i) {
			n.style[x(n.style, i)] = t ? e : ""
		})
	}

	function st (e, n) {
		var i = t.createEvent("Event");
		i.initEvent(e, !0, !0), i.gesture = n, n.target.dispatchEvent(i)
	}

	var lt = ["", "webkit", "moz", "MS", "ms", "o"], ut = t.createElement("div"), ct = "function", dt = Math.round,
		ft = Math.abs, ht = Date.now, pt = 1, mt = /mobile|tablet|ip(ad|hone|od)|android/i, vt = "ontouchstart" in e,
		gt = x(e, "PointerEvent") !== i, yt = vt && mt.test(navigator.userAgent), bt = "touch", wt = "pen",
		xt = "mouse", Ct = "kinect", kt = 25, Tt = 1, St = 2, At = 4, $t = 8, Et = 1, Ft = 2, _t = 4, Ot = 8, Pt = 16,
		Dt = Ft | _t, jt = Ot | Pt, zt = Dt | jt, It = ["x", "y"], qt = ["clientX", "clientY"];
	T.prototype = {
		handler: function() {
		}, init: function() {
			this.evEl && h(this.element, this.evEl, this.domHandler), this.evTarget && h(this.target, this.evTarget, this.domHandler), this.evWin && h(k(this.element), this.evWin, this.domHandler)
		}, destroy: function() {
			this.evEl && p(this.element, this.evEl, this.domHandler), this.evTarget && p(this.target, this.evTarget, this.domHandler), this.evWin && p(k(this.element), this.evWin, this.domHandler)
		}
	};
	var Rt = {mousedown: Tt, mousemove: St, mouseup: At}, Lt = "mousedown", Nt = "mousemove mouseup";
	u(R, T, {
		handler: function(e) {
			var t = Rt[e.type];
			t & Tt && 0 === e.button && (this.pressed = !0), t & St && 1 !== e.which && (t = At), this.pressed && this.allow && (t & At && (this.pressed = !1), this.callback(this.manager, t, {pointers: [e], changedPointers: [e], pointerType: xt, srcEvent: e}))
		}
	});
	var Mt = {pointerdown: Tt, pointermove: St, pointerup: At, pointercancel: $t, pointerout: $t},
		Ht = {2: bt, 3: wt, 4: xt, 5: Ct}, Wt = "pointerdown", Vt = "pointermove pointerup pointercancel";
	e.MSPointerEvent && (Wt = "MSPointerDown", Vt = "MSPointerMove MSPointerUp MSPointerCancel"), u(L, T, {
		handler: function(e) {
			var t = this.store, n = !1, i = e.type.toLowerCase().replace("ms", ""), a = Mt[i],
				o = Ht[e.pointerType] || e.pointerType, r = o == bt, s = y(t, e.pointerId, "pointerId");
			a & Tt && (0 === e.button || r) ? 0 > s && (t.push(e), s = t.length - 1) : a & (At | $t) && (n = !0), 0 > s || (t[s] = e, this.callback(this.manager, a, {pointers: t, changedPointers: [e], pointerType: o, srcEvent: e}), n && t.splice(s, 1))
		}
	});
	var Bt = {touchstart: Tt, touchmove: St, touchend: At, touchcancel: $t}, Qt = "touchstart",
		Xt = "touchstart touchmove touchend touchcancel";
	u(N, T, {
		handler: function(e) {
			var t = Bt[e.type];
			if(t === Tt && (this.started = !0), this.started)
			{
				var n = M.call(this, e, t);
				t & (At | $t) && 0 === n[0].length - n[1].length && (this.started = !1), this.callback(this.manager, t, {pointers: n[0], changedPointers: n[1], pointerType: bt, srcEvent: e})
			}
		}
	});
	var Yt = {touchstart: Tt, touchmove: St, touchend: At, touchcancel: $t},
		Ut = "touchstart touchmove touchend touchcancel";
	u(H, T, {
		handler: function(e) {
			var t = Yt[e.type], n = W.call(this, e, t);
			n && this.callback(this.manager, t, {pointers: n[0], changedPointers: n[1], pointerType: bt, srcEvent: e})
		}
	}), u(V, T, {
		handler: function(e, t, n) {
			var i = n.pointerType == bt, a = n.pointerType == xt;
			if(i) this.mouse.allow = !1;
			else if(a && !this.mouse.allow) return;
			t & (At | $t) && (this.mouse.allow = !0), this.callback(e, t, n)
		}, destroy: function() {
			this.touch.destroy(), this.mouse.destroy()
		}
	});
	var Gt = x(ut.style, "touchAction"), Kt = Gt !== i, Zt = "compute", Jt = "auto", en = "manipulation", tn = "none",
		nn = "pan-x", an = "pan-y";
	B.prototype = {
		set: function(e) {
			e == Zt && (e = this.compute()), Kt && (this.manager.element.style[Gt] = e), this.actions = e.toLowerCase().trim()
		}, update: function() {
			this.set(this.manager.options.touchAction)
		}, compute: function() {
			var e = [];
			return r(this.manager.recognizers, function(t) {
				d(t.options.enable, [t]) && (e = e.concat(t.getTouchAction()))
			}), Q(e.join(" "))
		}, preventDefaults: function(e) {
			if(!Kt)
			{
				var t = e.srcEvent, n = e.offsetDirection;
				if(this.manager.session.prevented) return void t.preventDefault();
				var i = this.actions, a = v(i, tn), o = v(i, an), r = v(i, nn);
				return a || o && n & Dt || r && n & jt ? this.preventSrc(t) : void 0
			}
		}, preventSrc: function(e) {
			this.manager.session.prevented = !0, e.preventDefault()
		}
	};
	var on = 1, rn = 2, sn = 4, ln = 8, un = ln, cn = 16, dn = 32;
	X.prototype = {
		defaults: {}, set: function(e) {
			return s(this.options, e), this.manager && this.manager.touchAction.update(), this
		}, recognizeWith: function(e) {
			if(o(e, "recognizeWith", this)) return this;
			var t = this.simultaneous;
			return e = G(e, this), t[e.id] || (t[e.id] = e, e.recognizeWith(this)), this
		}, dropRecognizeWith: function(e) {
			return o(e, "dropRecognizeWith", this) ? this : (e = G(e, this), delete this.simultaneous[e.id], this)
		}, requireFailure: function(e) {
			if(o(e, "requireFailure", this)) return this;
			var t = this.requireFail;
			return e = G(e, this), -1 === y(t, e) && (t.push(e), e.requireFailure(this)), this
		}, dropRequireFailure: function(e) {
			if(o(e, "dropRequireFailure", this)) return this;
			e = G(e, this);
			var t = y(this.requireFail, e);
			return t > -1 && this.requireFail.splice(t, 1), this
		}, hasRequireFailures: function() {
			return this.requireFail.length > 0
		}, canRecognizeWith: function(e) {
			return !!this.simultaneous[e.id]
		}, emit: function(e) {
			function t (t) {
				n.manager.emit(n.options.event + (t ? Y(i) : ""), e)
			}

			var n = this, i = this.state;
			ln > i && t(!0), t(), i >= ln && t(!0)
		}, tryEmit: function(e) {
			return this.canEmit() ? this.emit(e) : void(this.state = dn)
		}, canEmit: function() {
			for(var e = 0; e < this.requireFail.length;)
			{
				if(!(this.requireFail[e].state & (dn | on))) return !1;
				e++
			}
			return !0
		}, recognize: function(e) {
			var t = s({}, e);
			return d(this.options.enable, [this, t]) ? (this.state & (un | cn | dn) && (this.state = on), this.state = this.process(t), void(this.state & (rn | sn | ln | cn) && this.tryEmit(t))) : (this.reset(), void(this.state = dn))
		}, process: function() {
		}, getTouchAction: function() {
		}, reset: function() {
		}
	}, u(K, X, {
		defaults: {pointers: 1}, attrTest: function(e) {
			var t = this.options.pointers;
			return 0 === t || e.pointers.length === t
		}, process: function(e) {
			var t = this.state, n = e.eventType, i = t & (rn | sn), a = this.attrTest(e);
			return i && (n & $t || !a) ? t | cn : i || a ? n & At ? t | ln : t & rn ? t | sn : rn : dn
		}
	}), u(Z, K, {
		defaults: {event: "pan", threshold: 10, pointers: 1, direction: zt}, getTouchAction: function() {
			var e = this.options.direction, t = [];
			return e & Dt && t.push(an), e & jt && t.push(nn), t
		}, directionTest: function(e) {
			var t = this.options, n = !0, i = e.distance, a = e.direction, o = e.deltaX, r = e.deltaY;
			return a & t.direction || (t.direction & Dt ? (a = 0 === o ? Et : 0 > o ? Ft : _t, n = o != this.pX, i = Math.abs(e.deltaX)) : (a = 0 === r ? Et : 0 > r ? Ot : Pt, n = r != this.pY, i = Math.abs(e.deltaY))), e.direction = a, n && i > t.threshold && a & t.direction
		}, attrTest: function(e) {
			return K.prototype.attrTest.call(this, e) && (this.state & rn || !(this.state & rn) && this.directionTest(e))
		}, emit: function(e) {
			this.pX = e.deltaX, this.pY = e.deltaY;
			var t = U(e.direction);
			t && this.manager.emit(this.options.event + t, e), this._super.emit.call(this, e)
		}
	}), u(J, K, {
		defaults: {event: "pinch", threshold: 0, pointers: 2}, getTouchAction: function() {
			return [tn]
		}, attrTest: function(e) {
			return this._super.attrTest.call(this, e) && (Math.abs(e.scale - 1) > this.options.threshold || this.state & rn)
		}, emit: function(e) {
			if(this._super.emit.call(this, e), 1 !== e.scale)
			{
				var t = e.scale < 1 ? "in" : "out";
				this.manager.emit(this.options.event + t, e)
			}
		}
	}), u(et, X, {
		defaults: {event: "press", pointers: 1, time: 500, threshold: 5}, getTouchAction: function() {
			return [Jt]
		}, process: function(e) {
			var t = this.options, n = e.pointers.length === t.pointers, i = e.distance < t.threshold,
				o = e.deltaTime > t.time;
			if(this._input = e, !i || !n || e.eventType & (At | $t) && !o) this.reset();
			else if(e.eventType & Tt) this.reset(), this._timer = a(function() {
				this.state = un, this.tryEmit()
			}, t.time, this);
			else if(e.eventType & At) return un;
			return dn
		}, reset: function() {
			clearTimeout(this._timer)
		}, emit: function(e) {
			this.state === un && (e && e.eventType & At ? this.manager.emit(this.options.event + "up", e) : (this._input.timeStamp = ht(), this.manager.emit(this.options.event, this._input)))
		}
	}), u(tt, K, {
		defaults: {event: "rotate", threshold: 0, pointers: 2}, getTouchAction: function() {
			return [tn]
		}, attrTest: function(e) {
			return this._super.attrTest.call(this, e) && (Math.abs(e.rotation) > this.options.threshold || this.state & rn)
		}
	}), u(nt, K, {
		defaults: {event: "swipe", threshold: 10, velocity: .65, direction: Dt | jt, pointers: 1}, getTouchAction: function() {
			return Z.prototype.getTouchAction.call(this)
		}, attrTest: function(e) {
			var t, n = this.options.direction;
			return n & (Dt | jt) ? t = e.velocity : n & Dt ? t = e.velocityX : n & jt && (t = e.velocityY), this._super.attrTest.call(this, e) && n & e.direction && e.distance > this.options.threshold && ft(t) > this.options.velocity && e.eventType & At
		}, emit: function(e) {
			var t = U(e.direction);
			t && this.manager.emit(this.options.event + t, e), this.manager.emit(this.options.event, e)
		}
	}), u(it, X, {
		defaults: {event: "tap", pointers: 1, taps: 1, interval: 300, time: 250, threshold: 2, posThreshold: 10}, getTouchAction: function() {
			return [en]
		}, process: function(e) {
			var t = this.options, n = e.pointers.length === t.pointers, i = e.distance < t.threshold,
				o = e.deltaTime < t.time;
			if(this.reset(), e.eventType & Tt && 0 === this.count) return this.failTimeout();
			if(i && o && n)
			{
				if(e.eventType != At) return this.failTimeout();
				var r = this.pTime ? e.timeStamp - this.pTime < t.interval : !0,
					s = !this.pCenter || j(this.pCenter, e.center) < t.posThreshold;
				this.pTime = e.timeStamp, this.pCenter = e.center, s && r ? this.count += 1 : this.count = 1, this._input = e;
				var l = this.count % t.taps;
				if(0 === l) return this.hasRequireFailures() ? (this._timer = a(function() {
					this.state = un, this.tryEmit()
				}, t.interval, this), rn) : un
			}
			return dn
		}, failTimeout: function() {
			return this._timer = a(function() {
				this.state = dn
			}, this.options.interval, this), dn
		}, reset: function() {
			clearTimeout(this._timer)
		}, emit: function() {
			this.state == un && (this._input.tapCount = this.count, this.manager.emit(this.options.event, this._input))
		}
	}), at.VERSION = "2.0.4", at.defaults = {domEvents: !1, touchAction: Zt, enable: !0, inputTarget: null, inputClass: null, preset: [[tt, {enable: !1}], [J, {enable: !1}, ["rotate"]], [nt, {direction: Dt}], [Z, {direction: Dt}, ["swipe"]], [it], [it, {event: "doubletap", taps: 2}, ["tap"]], [et]], cssProps: {userSelect: "default", touchSelect: "none", touchCallout: "none", contentZooming: "none", userDrag: "none", tapHighlightColor: "rgba(0,0,0,0)"}};
	var fn = 1, hn = 2;
	ot.prototype = {
		set: function(e) {
			return s(this.options, e), e.touchAction && this.touchAction.update(), e.inputTarget && (this.input.destroy(), this.input.target = e.inputTarget, this.input.init()), this
		}, stop: function(e) {
			this.session.stopped = e ? hn : fn
		}, recognize: function(e) {
			var t = this.session;
			if(!t.stopped)
			{
				this.touchAction.preventDefaults(e);
				var n, i = this.recognizers, a = t.curRecognizer;
				(!a || a && a.state & un) && (a = t.curRecognizer = null);
				for(var o = 0; o < i.length;)
				{
					n = i[o], t.stopped === hn || a && n != a && !n.canRecognizeWith(a) ? n.reset() : n.recognize(e), !a && n.state & (rn | sn | ln) && (a = t.curRecognizer = n), o++
				}
			}
		}, get: function(e) {
			if(e instanceof X) return e;
			for(var t = this.recognizers, n = 0; n < t.length; n++)
			{
				if(t[n].options.event == e) return t[n];
			}
			return null
		}, add: function(e) {
			if(o(e, "add", this)) return this;
			var t = this.get(e.options.event);
			return t && this.remove(t), this.recognizers.push(e), e.manager = this, this.touchAction.update(), e
		}, remove: function(e) {
			if(o(e, "remove", this)) return this;
			var t = this.recognizers;
			return e = this.get(e), t.splice(y(t, e), 1), this.touchAction.update(), this
		}, on: function(e, t) {
			var n = this.handlers;
			return r(g(e), function(e) {
				n[e] = n[e] || [], n[e].push(t)
			}), this
		}, off: function(e, t) {
			var n = this.handlers;
			return r(g(e), function(e) {
				t ? n[e].splice(y(n[e], t), 1) : delete n[e]
			}), this
		}, emit: function(e, t) {
			this.options.domEvents && st(e, t);
			var n = this.handlers[e] && this.handlers[e].slice();
			if(n && n.length)
			{
				t.type = e, t.preventDefault = function() {
					t.srcEvent.preventDefault()
				};
				for(var i = 0; i < n.length;)
				{
					n[i](t), i++
				}
			}
		}, destroy: function() {
			this.element && rt(this, !1), this.handlers = {}, this.session = {}, this.input.destroy(), this.element = null
		}
	}, s(at, {INPUT_START: Tt, INPUT_MOVE: St, INPUT_END: At, INPUT_CANCEL: $t, STATE_POSSIBLE: on, STATE_BEGAN: rn, STATE_CHANGED: sn, STATE_ENDED: ln, STATE_RECOGNIZED: un, STATE_CANCELLED: cn, STATE_FAILED: dn, DIRECTION_NONE: Et, DIRECTION_LEFT: Ft, DIRECTION_RIGHT: _t, DIRECTION_UP: Ot, DIRECTION_DOWN: Pt, DIRECTION_HORIZONTAL: Dt, DIRECTION_VERTICAL: jt, DIRECTION_ALL: zt, Manager: ot, Input: T, TouchAction: B, TouchInput: H, MouseInput: R, PointerEventInput: L, TouchMouseInput: V, SingleTouchInput: N, Recognizer: X, AttrRecognizer: K, Tap: it, Pan: Z, Swipe: nt, Pinch: J, Rotate: tt, Press: et, on: h, off: p, each: r, merge: l, extend: s, inherit: u, bindFn: c, prefixed: x}), typeof define == ct && define.amd ? define(function() {
		return at
	}) : "undefined" != typeof module && module.exports ? module.exports = at : e[n] = at
}(window, document, "Hammer"), function(e) {
	"function" == typeof define && define.amd ? define(["jquery", "hammerjs"], e) : "object" == typeof exports ? e(require("jquery"), require("hammerjs")) : e(jQuery, Hammer)
}(function(e, t) {
	function n (n, i) {
		var a = e(n);
		a.data("hammer") || a.data("hammer", new t(a[0], i))
	}

	e.fn.hammer = function(e) {
		return this.each(function() {
			n(this, e)
		})
	}, t.Manager.prototype.emit = function(t) {
		return function(n, i) {
			t.call(this, n, i), e(this.element).trigger({type: n, gesture: i})
		}
	}(t.Manager.prototype.emit)
}), function(e) {
	e.Package ? Materialize = {} : e.Materialize = {}
}(window), /*
 * raf.js
 * https://github.com/ngryman/raf.js
 *
 * original requestAnimationFrame polyfill by Erik Möller
 * inspired from paul_irish gist and post
 *
 * Copyright (c) 2013 ngryman
 * Licensed under the MIT license.
 */
	function(e) {
		for(var t = 0, n = ["webkit", "moz"], i = e.requestAnimationFrame, a = e.cancelAnimationFrame, o = n.length; --o >= 0 && !i;)
		{
			i = e[n[o] + "RequestAnimationFrame"], a = e[n[o] + "CancelRequestAnimationFrame"];
		}
		i && a || (i = function(e) {
			var n = +Date.now(), i = Math.max(t + 16, n);
			return setTimeout(function() {
				e(t = i)
			}, i - n)
		}, a = clearTimeout), e.requestAnimationFrame = i, e.cancelAnimationFrame = a
	}(window), Materialize.guid = function() {
	function e () {
		return Math.floor(65536 * (1 + Math.random())).toString(16).substring(1)
	}

	return function() {
		return e() + e() + "-" + e() + "-" + e() + "-" + e() + "-" + e() + e() + e()
	}
}(), Materialize.escapeHash = function(e) {
	return e.replace(/(:|\.|\[|\]|,|=)/g, "\\$1")
}, Materialize.elementOrParentIsFixed = function(e) {
	var t = $(e), n = t.add(t.parents()), i = !1;
	return n.each(function() {
		return "fixed" === $(this).css("position") ? (i = !0, !1) : void 0
	}), i
};
var Vel;
Vel = jQuery ? jQuery.Velocity : $ ? $.Velocity : Velocity, function(e) {
	e.fn.collapsible = function(t) {
		var n = {accordion: void 0, onOpen: void 0, onClose: void 0};
		return t = e.extend(n, t), this.each(function() {
			function n (t) {
				u = l.find("> li > .collapsible-header"), t.hasClass("active") ? t.parent().addClass("active") : t.parent().removeClass("active"), t.parent().hasClass("active") ? t.siblings(".collapsible-body").stop(!0, !1).slideDown({
					duration: 350, easing: "easeOutQuart", queue: !1, complete: function() {
						e(this).css("height", "")
					}
				}) : t.siblings(".collapsible-body").stop(!0, !1).slideUp({
					duration: 350, easing: "easeOutQuart", queue: !1, complete: function() {
						e(this).css("height", "")
					}
				}), u.not(t).removeClass("active").parent().removeClass("active"), u.not(t).parent().children(".collapsible-body").stop(!0, !1).each(function() {
					e(this).is(":visible") && e(this).slideUp({
						duration: 350, easing: "easeOutQuart", queue: !1, complete: function() {
							e(this).css("height", ""), o(e(this).siblings(".collapsible-header"))
						}
					})
				})
			}

			function i (t) {
				t.hasClass("active") ? t.parent().addClass("active") : t.parent().removeClass("active"), t.parent().hasClass("active") ? t.siblings(".collapsible-body").stop(!0, !1).slideDown({
					duration: 350, easing: "easeOutQuart", queue: !1, complete: function() {
						e(this).css("height", "")
					}
				}) : t.siblings(".collapsible-body").stop(!0, !1).slideUp({
					duration: 350, easing: "easeOutQuart", queue: !1, complete: function() {
						e(this).css("height", "")
					}
				})
			}

			function a (e) {
				t.accordion || "accordion" === c || void 0 === c ? n(e) : i(e), o(e)
			}

			function o (e) {
				e.hasClass("active") ? "function" == typeof t.onOpen && t.onOpen.call(this, e.parent()) : "function" == typeof t.onClose && t.onClose.call(this, e.parent())
			}

			function r (e) {
				var t = s(e);
				return t.length > 0
			}

			function s (e) {
				return e.closest("li > .collapsible-header")
			}

			var l = e(this), u = e(this).find("> li > .collapsible-header"), c = l.data("collapsible");
			l.off("click.collapse", "> li > .collapsible-header"), u.off("click.collapse"), l.on("click.collapse", "> li > .collapsible-header", function(t) {
				var n = e(t.target);
				r(n) && (n = s(n)), n.toggleClass("active"), a(n)
			}), t.accordion || "accordion" === c || void 0 === c ? a(u.filter(".active").first()) : u.filter(".active").each(function() {
				a(e(this))
			})
		})
	}, e(document).ready(function() {
		e(".collapsible").collapsible()
	})
}(jQuery), function(e) {
	e.fn.scrollTo = function(t) {
		return e(this).scrollTop(e(this).scrollTop() - e(this).offset().top + e(t).offset().top), this
	}, e.fn.dropdown = function(t) {
		var n = {inDuration: 300, outDuration: 225, constrain_width: !0, hover: !1, gutter: 0, belowOrigin: !1, alignment: "left", stopPropagation: !1};
		return "open" === t ? (this.each(function() {
			e(this).trigger("open")
		}), !1) : "close" === t ? (this.each(function() {
			e(this).trigger("close")
		}), !1) : void this.each(function() {
			function i () {
				void 0 !== r.data("induration") && (s.inDuration = r.data("induration")), void 0 !== r.data("outduration") && (s.outDuration = r.data("outduration")), void 0 !== r.data("constrainwidth") && (s.constrain_width = r.data("constrainwidth")), void 0 !== r.data("hover") && (s.hover = r.data("hover")), void 0 !== r.data("gutter") && (s.gutter = r.data("gutter")), void 0 !== r.data("beloworigin") && (s.belowOrigin = r.data("beloworigin")), void 0 !== r.data("alignment") && (s.alignment = r.data("alignment")), void 0 !== r.data("stoppropagation") && (s.stopPropagation = r.data("stoppropagation"))
			}

			function a (t) {
				"focus" === t && (l = !0), i(), u.addClass("active"), r.addClass("active"), s.constrain_width === !0 ? u.css("width", r.outerWidth()) : u.css("white-space", "nowrap");
				var n = window.innerHeight, a = r.innerHeight(), o = r.offset().left,
					c = r.offset().top - e(window).scrollTop(), d = s.alignment, f = 0, h = 0, p = 0;
				s.belowOrigin === !0 && (p = a);
				var m = 0, v = 0, g = r.parent();
				if(g.is("body") || (g[0].scrollHeight > g[0].clientHeight && (m = g[0].scrollTop), g[0].scrollWidth > g[0].clientWidth && (v = g[0].scrollLeft)), o + u.innerWidth() > e(window).width() ? d = "right" : o - u.innerWidth() + r.innerWidth() < 0 && (d = "left"), c + u.innerHeight() > n) if(c + a - u.innerHeight() < 0)
				{
					var y = n - c - p;
					u.css("max-height", y)
				}
				else p || (p += a), p -= u.innerHeight();
				if("left" === d) f = s.gutter, h = r.position().left + f;
				else if("right" === d)
				{
					var b = r.position().left + r.outerWidth() - u.outerWidth();
					f = -s.gutter, h = b + f
				}
				u.css({position: "absolute", top: r.position().top + p + m, left: h + v}), u.stop(!0, !0).css("opacity", 0).slideDown({
					queue: !1, duration: s.inDuration, easing: "easeOutCubic", complete: function() {
						e(this).css("height", "")
					}
				}).animate({opacity: 1}, {queue: !1, duration: s.inDuration, easing: "easeOutSine"})
			}

			function o () {
				l = !1, u.fadeOut(s.outDuration), u.removeClass("active"), r.removeClass("active"), setTimeout(function() {
					u.css("max-height", "")
				}, s.outDuration)
			}

			var r = e(this), s = e.extend({}, n, t), l = !1, u = e("#" + r.attr("data-activates"));
			if(i(), r.after(u), s.hover)
			{
				var c = !1;
				r.unbind("click." + r.attr("id")), r.on("mouseenter", function() {
					c === !1 && (a(), c = !0)
				}), r.on("mouseleave", function(t) {
					var n = t.toElement || t.relatedTarget;
					e(n).closest(".dropdown-content").is(u) || (u.stop(!0, !0), o(), c = !1)
				}), u.on("mouseleave", function(t) {
					var n = t.toElement || t.relatedTarget;
					e(n).closest(".dropdown-button").is(r) || (u.stop(!0, !0), o(), c = !1)
				})
			}
			else r.unbind("click." + r.attr("id")), r.bind("click." + r.attr("id"), function(t) {
				l || (r[0] != t.currentTarget || r.hasClass("active") || 0 !== e(t.target).closest(".dropdown-content").length ? r.hasClass("active") && (o(), e(document).unbind("click." + u.attr("id") + " touchstart." + u.attr("id"))) : (t.preventDefault(), s.stopPropagation && t.stopPropagation(), a("click")), u.hasClass("active") && e(document).bind("click." + u.attr("id") + " touchstart." + u.attr("id"), function(t) {
					u.is(t.target) || r.is(t.target) || r.find(t.target).length || (o(), e(document).unbind("click." + u.attr("id") + " touchstart." + u.attr("id")))
				}))
			});
			r.on("open", function(e, t) {
				a(t)
			}), r.on("close", o)
		})
	}, e(document).ready(function() {
		e(".dropdown-button").dropdown()
	})
}(jQuery), function(e) {
	var t = 0, n = 0, i = function() {
		return n++, "materialize-modal-overlay-" + n
	}, a = {
		init: function(n) {
			var a = {opacity: .5, in_duration: 350, out_duration: 250, ready: void 0, complete: void 0, dismissible: !0, starting_top: "4%", ending_top: "10%"};
			return n = e.extend(a, n), this.each(function() {
				var a = e(this), o = e(this).attr("id") || "#" + e(this).data("target"), r = function() {
					var i = a.data("overlay-id"), o = e("#" + i);
					a.removeClass("open"), e("body").css({overflow: "", width: ""}), a.find(".modal-close").off("click.close"), e(document).off("keyup.modal" + i), o.velocity({opacity: 0}, {duration: n.out_duration, queue: !1, ease: "easeOutQuart"});
					var r = {
						duration: n.out_duration, queue: !1, ease: "easeOutCubic", complete: function() {
							e(this).css({display: "none"}), "function" == typeof n.complete && n.complete.call(this, a), o.remove(), t--
						}
					};
					a.hasClass("bottom-sheet") ? a.velocity({bottom: "-100%", opacity: 0}, r) : a.velocity({top: n.starting_top, opacity: 0, scaleX: .7}, r)
				}, s = function(o) {
					var s = e("body"), l = s.innerWidth();
					if(s.css("overflow", "hidden"), s.width(l), !a.hasClass("open"))
					{
						var u = i(), c = e('<div class="modal-overlay"></div>');
						lStack = ++t, c.attr("id", u).css("z-index", 1e3 + 2 * lStack), a.data("overlay-id", u).css("z-index", 1e3 + 2 * lStack + 1), a.addClass("open"), e("body").append(c), n.dismissible && (c.click(function() {
							r()
						}), e(document).on("keyup.modal" + u, function(e) {
							27 === e.keyCode && r()
						})), a.find(".modal-close").on("click.close", function() {
							r()
						}), c.css({display: "block", opacity: 0}), a.css({display: "block", opacity: 0}), c.velocity({opacity: n.opacity}, {duration: n.in_duration, queue: !1, ease: "easeOutCubic"}), a.data("associated-overlay", c[0]);
						var d = {
							duration: n.in_duration, queue: !1, ease: "easeOutCubic", complete: function() {
								"function" == typeof n.ready && n.ready.call(this, a, o)
							}
						};
						a.hasClass("bottom-sheet") ? a.velocity({bottom: "0", opacity: 1}, d) : (e.Velocity.hook(a, "scaleX", .7), a.css({top: n.starting_top}), a.velocity({top: n.ending_top, opacity: 1, scaleX: "1"}, d))
					}
				};
				e(document).off("click.modalTrigger", 'a[href="#' + o + '"], [data-target="' + o + '"]'), e(this).off("openModal"), e(this).off("closeModal"), e(document).on("click.modalTrigger", 'a[href="#' + o + '"], [data-target="' + o + '"]', function(t) {
					n.starting_top = (e(this).offset().top - e(window).scrollTop()) / 1.15, s(e(this)), t.preventDefault()
				}), e(this).on("openModal", function() {
					e(this).attr("href") || "#" + e(this).data("target");
					s()
				}), e(this).on("closeModal", function() {
					r()
				})
			})
		}, open: function() {
			e(this).trigger("openModal")
		}, close: function() {
			e(this).trigger("closeModal")
		}
	};
	e.fn.modal = function(t) {
		return a[t] ? a[t].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof t && t ? void e.error("Method " + t + " does not exist on jQuery.modal") : a.init.apply(this, arguments)
	}
}(jQuery), function(e) {
	e.fn.materialbox = function() {
		return this.each(function() {
			function t () {
				o = !1;
				var t = l.parent(".material-placeholder"), i = (window.innerWidth, window.innerHeight, l.data("width")),
					r = l.data("height");
				l.velocity("stop", !0), e("#materialbox-overlay").velocity("stop", !0), e(".materialbox-caption").velocity("stop", !0), e("#materialbox-overlay").velocity({opacity: 0}, {
					duration: s, queue: !1, easing: "easeOutQuad", complete: function() {
						a = !1, e(this).remove()
					}
				}), l.velocity({width: i, height: r, left: 0, top: 0}, {duration: s, queue: !1, easing: "easeOutQuad"}), e(".materialbox-caption").velocity({opacity: 0}, {
					duration: s, queue: !1, easing: "easeOutQuad", complete: function() {
						t.css({height: "", width: "", position: "", top: "", left: ""}), l.css({height: "", top: "", left: "", width: "", "max-width": "", position: "", "z-index": ""}), l.removeClass("active"), o = !0, e(this).remove(), n && n.css("overflow", "")
					}
				})
			}

			if(!e(this).hasClass("initialized"))
			{
				e(this).addClass("initialized");
				var n, i, a = !1, o = !0, r = 275, s = 200, l = e(this),
					u = e("<div></div>").addClass("material-placeholder");
				l.wrap(u), l.on("click", function() {
					var s = l.parent(".material-placeholder"), u = window.innerWidth, c = window.innerHeight,
						d = l.width(), f = l.height();
					if(o === !1) return t(), !1;
					if(a && o === !0) return t(), !1;
					o = !1, l.addClass("active"), a = !0, s.css({width: s[0].getBoundingClientRect().width, height: s[0].getBoundingClientRect().height, position: "relative", top: 0, left: 0}), n = void 0, i = s[0].parentNode;
					for(; null !== i && !e(i).is(document);)
					{
						var h = e(i);
						"visible" !== h.css("overflow") && (h.css("overflow", "visible"), n = void 0 === n ? h : n.add(h)), i = i.parentNode
					}
					l.css({position: "absolute", "z-index": 1e3}).data("width", d).data("height", f);
					var p = e('<div id="materialbox-overlay"></div>').css({opacity: 0}).click(function() {
						o === !0 && t()
					});
					if(l.before(p), p.velocity({opacity: 1}, {duration: r, queue: !1, easing: "easeOutQuad"}), "" !== l.data("caption"))
					{
						var m = e('<div class="materialbox-caption"></div>');
						m.text(l.data("caption")), e("body").append(m), m.css({display: "inline"}), m.velocity({opacity: 1}, {duration: r, queue: !1, easing: "easeOutQuad"})
					}
					var v = 0, g = d / u, y = f / c, b = 0, w = 0;
					g > y ? (v = f / d, b = .9 * u, w = .9 * u * v) : (v = d / f, b = .9 * c * v, w = .9 * c), l.hasClass("responsive-img") ? l.velocity({"max-width": b, width: d}, {
						duration: 0, queue: !1, complete: function() {
							l.css({left: 0, top: 0}).velocity({height: w, width: b, left: e(document).scrollLeft() + u / 2 - l.parent(".material-placeholder").offset().left - b / 2, top: e(document).scrollTop() + c / 2 - l.parent(".material-placeholder").offset().top - w / 2}, {
								duration: r, queue: !1, easing: "easeOutQuad", complete: function() {
									o = !0
								}
							})
						}
					}) : l.css("left", 0).css("top", 0).velocity({height: w, width: b, left: e(document).scrollLeft() + u / 2 - l.parent(".material-placeholder").offset().left - b / 2, top: e(document).scrollTop() + c / 2 - l.parent(".material-placeholder").offset().top - w / 2}, {
						duration: r, queue: !1, easing: "easeOutQuad", complete: function() {
							o = !0
						}
					})
				}), e(window).scroll(function() {
					a && t()
				}), e(document).keyup(function(e) {
					27 === e.keyCode && o === !0 && a && t()
				})
			}
		})
	}, e(document).ready(function() {
		e(".materialboxed").materialbox()
	})
}(jQuery), function(e) {
	e.fn.parallax = function() {
		var t = e(window).width();
		return this.each(function() {
			function n (n) {
				var a;
				a = 601 > t ? i.height() > 0 ? i.height() : i.children("img").height() : i.height() > 0 ? i.height() : 500;
				var o = i.children("img").first(), r = o.height(), s = r - a, l = i.offset().top + a,
					u = i.offset().top, c = e(window).scrollTop(), d = window.innerHeight, f = c + d,
					h = (f - u) / (a + d), p = Math.round(s * h);
				n && o.css("display", "block"), l > c && c + d > u && o.css("transform", "translate3D(-50%," + p + "px, 0)")
			}

			var i = e(this);
			i.addClass("parallax"), i.children("img").one("load", function() {
				n(!0)
			}).each(function() {
				this.complete && e(this).trigger("load")
			}), e(window).scroll(function() {
				t = e(window).width(), n(!1)
			}), e(window).resize(function() {
				t = e(window).width(), n(!1)
			})
		})
	}
}(jQuery), function(e) {
	var t = {
		init: function(t) {
			var n = {onShow: null};
			return t = e.extend(n, t), this.each(function() {
				var n, i, a = e(this), o = (e(window).width(), a.find("li.tab a")), r = a.width(),
					s = Math.max(r, a[0].scrollWidth) / o.length, l = 0, u = function(e) {
						return r - e.position().left - e.outerWidth() - a.scrollLeft()
					}, c = function(e) {
						return e.position().left + a.scrollLeft()
					};
				n = e(o.filter('[href="' + location.hash + '"]')), 0 === n.length && (n = e(this).find("li.tab a.active").first()), 0 === n.length && (n = e(this).find("li.tab a").first()), n.addClass("active"), l = o.index(n), 0 > l && (l = 0), void 0 !== n[0] && (i = e(n[0].hash)), a.append('<div class="indicator"></div>');
				var d = a.find(".indicator");
				a.is(":visible") && setTimeout(function() {
					d.css({right: u(n)}), d.css({left: c(n)})
				}, 0), e(window).resize(function() {
					r = a.width(), s = Math.max(r, a[0].scrollWidth) / o.length, 0 > l && (l = 0), 0 !== s && 0 !== r && (d.css({right: u(n)}), d.css({left: c(n)}))
				}), o.not(n).each(function() {
					e(Materialize.escapeHash(this.hash)).hide()
				}), a.on("click", "a", function(f) {
					if(e(this).parent().hasClass("disabled")) return void f.preventDefault();
					if(!e(this).attr("target"))
					{
						r = a.width(), s = Math.max(r, a[0].scrollWidth) / o.length, n.removeClass("active"), void 0 !== i && i.hide(), n = e(this), i = e(Materialize.escapeHash(this.hash)), o = a.find("li.tab a");
						{
							n.position()
						}
						n.addClass("active");
						var h = l;
						l = o.index(e(this)), 0 > l && (l = 0), void 0 !== i && (i.show(), "function" == typeof t.onShow && t.onShow.call(this, i)), l - h >= 0 ? (d.velocity({right: u(n)}, {duration: 300, queue: !1, easing: "easeOutQuad"}), d.velocity({left: c(n)}, {duration: 300, queue: !1, easing: "easeOutQuad", delay: 90})) : (d.velocity({left: c(n)}, {duration: 300, queue: !1, easing: "easeOutQuad"}), d.velocity({right: u(n)}, {duration: 300, queue: !1, easing: "easeOutQuad", delay: 90})), f.preventDefault()
					}
				})
			})
		}, select_tab: function(e) {
			this.find('a[href="#' + e + '"]').trigger("click")
		}
	};
	e.fn.tabs = function(n) {
		return t[n] ? t[n].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof n && n ? void e.error("Method " + n + " does not exist on jQuery.tabs") : t.init.apply(this, arguments)
	}, e(document).ready(function() {
		e("ul.tabs").tabs()
	})
}(jQuery), function(e) {
	e.fn.tooltip = function(n) {
		var i = 5, a = {delay: 350, tooltip: "", position: "bottom", html: !1};
		return "remove" === n ? (this.each(function() {
			e("#" + e(this).attr("data-tooltip-id")).remove(), e(this).off("mouseenter.tooltip mouseleave.tooltip")
		}), !1) : (n = e.extend(a, n), this.each(function() {
			var a = Materialize.guid(), o = e(this);
			o.attr("data-tooltip-id") && e("#" + o.attr("data-tooltip-id")).remove(), o.attr("data-tooltip-id", a);
			var r, s, l, u, c, d, f = function() {
				r = o.attr("data-html") ? "true" === o.attr("data-html") : n.html, s = o.attr("data-delay"), s = void 0 === s || "" === s ? n.delay : s, l = o.attr("data-position"), l = void 0 === l || "" === l ? n.position : l, u = o.attr("data-tooltip"), u = void 0 === u || "" === u ? n.tooltip : u
			};
			f();
			var h = function() {
				var t = e('<div class="material-tooltip"></div>');
				return u = r ? e("<span></span>").html(u) : e("<span></span>").text(u), t.append(u).appendTo(e("body")).attr("id", a), d = e('<div class="backdrop"></div>'), d.appendTo(t), t
			};
			c = h(), o.off("mouseenter.tooltip mouseleave.tooltip");
			var p, m = !1;
			o.on({
				"mouseenter.tooltip": function() {
					var e = function() {
						f(), m = !0, c.velocity("stop"), d.velocity("stop"), c.css({display: "block", left: "0px", top: "0px"});
						var e, n, a, r = o.outerWidth(), s = o.outerHeight(), u = c.outerHeight(), h = c.outerWidth(),
							p = "0px", v = "0px", g = 8, y = 8;
						"top" === l ? (e = o.offset().top - u - i, n = o.offset().left + r / 2 - h / 2, a = t(n, e, h, u), p = "-10px", d.css({bottom: 0, left: 0, borderRadius: "14px 14px 0 0", transformOrigin: "50% 100%", marginTop: u, marginLeft: h / 2 - d.width() / 2})) : "left" === l ? (e = o.offset().top + s / 2 - u / 2, n = o.offset().left - h - i, a = t(n, e, h, u), v = "-10px", d.css({top: "-7px", right: 0, width: "14px", height: "14px", borderRadius: "14px 0 0 14px", transformOrigin: "95% 50%", marginTop: u / 2, marginLeft: h})) : "right" === l ? (e = o.offset().top + s / 2 - u / 2, n = o.offset().left + r + i, a = t(n, e, h, u), v = "+10px", d.css({top: "-7px", left: 0, width: "14px", height: "14px", borderRadius: "0 14px 14px 0", transformOrigin: "5% 50%", marginTop: u / 2, marginLeft: "0px"})) : (e = o.offset().top + o.outerHeight() + i, n = o.offset().left + r / 2 - h / 2, a = t(n, e, h, u), p = "+10px", d.css({top: 0, left: 0, marginLeft: h / 2 - d.width() / 2})), c.css({top: a.y, left: a.x}), g = Math.SQRT2 * h / parseInt(d.css("width")), y = Math.SQRT2 * u / parseInt(d.css("height")), c.velocity({marginTop: p, marginLeft: v}, {duration: 350, queue: !1}).velocity({opacity: 1}, {duration: 300, delay: 50, queue: !1}), d.css({display: "block"}).velocity({opacity: 1}, {duration: 55, delay: 0, queue: !1}).velocity({scaleX: g, scaleY: y}, {duration: 300, delay: 0, queue: !1, easing: "easeInOutQuad"})
					};
					p = setTimeout(e, s)
				}, "mouseleave.tooltip": function() {
					m = !1, clearTimeout(p), setTimeout(function() {
						m !== !0 && (c.velocity({opacity: 0, marginTop: 0, marginLeft: 0}, {duration: 225, queue: !1}), d.velocity({opacity: 0, scaleX: 1, scaleY: 1}, {
							duration: 225, queue: !1, complete: function() {
								d.css("display", "none"), c.css("display", "none"), m = !1
							}
						}))
					}, 225)
				}
			})
		}))
	};
	var t = function(t, n, i, a) {
		var o = t, r = n;
		return 0 > o ? o = 4 : o + i > window.innerWidth && (o -= o + i - window.innerWidth), 0 > r ? r = 4 : r + a > window.innerHeight + e(window).scrollTop && (r -= r + a - window.innerHeight), {x: o, y: r}
	};
	e(document).ready(function() {
		e(".tooltipped").tooltip()
	})
}(jQuery), function(e) {
	"use strict";

	function t (e) {
		return null !== e && e === e.window
	}

	function n (e) {
		return t(e) ? e : 9 === e.nodeType && e.defaultView
	}

	function i (e) {
		var t, i, a = {top: 0, left: 0}, o = e && e.ownerDocument;
		return t = o.documentElement, "undefined" != typeof e.getBoundingClientRect && (a = e.getBoundingClientRect()), i = n(o), {top: a.top + i.pageYOffset - t.clientTop, left: a.left + i.pageXOffset - t.clientLeft}
	}

	function a (e) {
		var t = "";
		for(var n in e)
		{
			e.hasOwnProperty(n) && (t += n + ":" + e[n] + ";");
		}
		return t
	}

	function o (e) {
		if(c.allowEvent(e) === !1) return null;
		for(var t = null, n = e.target || e.srcElement; null !== n.parentElement;)
		{
			if(!(n instanceof SVGElement || -1 === n.className.indexOf("waves-effect")))
			{
				t = n;
				break
			}
			if(n.classList.contains("waves-effect"))
			{
				t = n;
				break
			}
			n = n.parentElement
		}
		return t
	}

	function r (t) {
		var n = o(t);
		null !== n && (u.show(t, n), "ontouchstart" in e && (n.addEventListener("touchend", u.hide, !1), n.addEventListener("touchcancel", u.hide, !1)), n.addEventListener("mouseup", u.hide, !1), n.addEventListener("mouseleave", u.hide, !1))
	}

	var s = s || {}, l = document.querySelectorAll.bind(document), u = {
		duration: 750, show: function(e, t) {
			if(2 === e.button) return !1;
			var n = t || this, o = document.createElement("div");
			o.className = "waves-ripple", n.appendChild(o);
			var r = i(n), s = e.pageY - r.top, l = e.pageX - r.left, c = "scale(" + n.clientWidth / 100 * 10 + ")";
			"touches" in e && (s = e.touches[0].pageY - r.top, l = e.touches[0].pageX - r.left), o.setAttribute("data-hold", Date.now()), o.setAttribute("data-scale", c), o.setAttribute("data-x", l), o.setAttribute("data-y", s);
			var d = {top: s + "px", left: l + "px"};
			o.className = o.className + " waves-notransition", o.setAttribute("style", a(d)), o.className = o.className.replace("waves-notransition", ""), d["-webkit-transform"] = c, d["-moz-transform"] = c, d["-ms-transform"] = c, d["-o-transform"] = c, d.transform = c, d.opacity = "1", d["-webkit-transition-duration"] = u.duration + "ms", d["-moz-transition-duration"] = u.duration + "ms", d["-o-transition-duration"] = u.duration + "ms", d["transition-duration"] = u.duration + "ms", d["-webkit-transition-timing-function"] = "cubic-bezier(0.250, 0.460, 0.450, 0.940)", d["-moz-transition-timing-function"] = "cubic-bezier(0.250, 0.460, 0.450, 0.940)", d["-o-transition-timing-function"] = "cubic-bezier(0.250, 0.460, 0.450, 0.940)", d["transition-timing-function"] = "cubic-bezier(0.250, 0.460, 0.450, 0.940)", o.setAttribute("style", a(d))
		}, hide: function(e) {
			c.touchup(e);
			var t = this, n = (1.4 * t.clientWidth, null), i = t.getElementsByClassName("waves-ripple");
			if(!(i.length > 0)) return !1;
			n = i[i.length - 1];
			var o = n.getAttribute("data-x"), r = n.getAttribute("data-y"), s = n.getAttribute("data-scale"),
				l = Date.now() - Number(n.getAttribute("data-hold")), d = 350 - l;
			0 > d && (d = 0), setTimeout(function() {
				var e = {top: r + "px", left: o + "px", opacity: "0", "-webkit-transition-duration": u.duration + "ms", "-moz-transition-duration": u.duration + "ms", "-o-transition-duration": u.duration + "ms", "transition-duration": u.duration + "ms", "-webkit-transform": s, "-moz-transform": s, "-ms-transform": s, "-o-transform": s, transform: s};
				n.setAttribute("style", a(e)), setTimeout(function() {
					try
					{
						t.removeChild(n)
					} catch (e)
					{
						return !1
					}
				}, u.duration)
			}, d)
		}, wrapInput: function(e) {
			for(var t = 0; t < e.length; t++)
			{
				var n = e[t];
				if("input" === n.tagName.toLowerCase())
				{
					var i = n.parentNode;
					if("i" === i.tagName.toLowerCase() && -1 !== i.className.indexOf("waves-effect")) continue;
					var a = document.createElement("i");
					a.className = n.className + " waves-input-wrapper";
					var o = n.getAttribute("style");
					o || (o = ""), a.setAttribute("style", o), n.className = "waves-button-input", n.removeAttribute("style"), i.replaceChild(a, n), a.appendChild(n)
				}
			}
		}
	}, c = {
		touches: 0, allowEvent: function(e) {
			var t = !0;
			return "touchstart" === e.type ? c.touches += 1 : "touchend" === e.type || "touchcancel" === e.type ? setTimeout(function() {
				c.touches > 0 && (c.touches -= 1)
			}, 500) : "mousedown" === e.type && c.touches > 0 && (t = !1), t
		}, touchup: function(e) {
			c.allowEvent(e)
		}
	};
	s.displayEffect = function(t) {
		t = t || {}, "duration" in t && (u.duration = t.duration), u.wrapInput(l(".waves-effect")), "ontouchstart" in e && document.body.addEventListener("touchstart", r, !1), document.body.addEventListener("mousedown", r, !1)
	}, s.attach = function(t) {
		"input" === t.tagName.toLowerCase() && (u.wrapInput([t]), t = t.parentElement), "ontouchstart" in e && t.addEventListener("touchstart", r, !1), t.addEventListener("mousedown", r, !1)
	}, e.Waves = s, document.addEventListener("DOMContentLoaded", function() {
		s.displayEffect()
	}, !1)
}(window), Materialize.toast = function(e, t, n, i) {
	function a (e) {
		var t = document.createElement("div");
		if(t.classList.add("toast"), n) for(var a = n.split(" "), o = 0, r = a.length; r > o; o++)
		{
			t.classList.add(a[o]);
		}
		("object" == typeof HTMLElement ? e instanceof HTMLElement : e && "object" == typeof e && null !== e && 1 === e.nodeType && "string" == typeof e.nodeName) ? t.appendChild(e) : e instanceof jQuery ? t.appendChild(e[0]) : t.innerHTML = e;
		var s = new Hammer(t, {prevent_default: !1});
		return s.on("pan", function(e) {
			var n = e.deltaX, i = 80;
			t.classList.contains("panning") || t.classList.add("panning");
			var a = 1 - Math.abs(n / i);
			0 > a && (a = 0), Vel(t, {left: n, opacity: a}, {duration: 50, queue: !1, easing: "easeOutQuad"})
		}), s.on("panend", function(e) {
			var n = e.deltaX, a = 80;
			Math.abs(n) > a ? Vel(t, {marginTop: "-40px"}, {
				duration: 375, easing: "easeOutExpo", queue: !1, complete: function() {
					"function" == typeof i && i(), t.parentNode.removeChild(t)
				}
			}) : (t.classList.remove("panning"), Vel(t, {left: 0, opacity: 1}, {duration: 300, easing: "easeOutExpo", queue: !1}))
		}), t
	}

	n = n || "";
	var o = document.getElementById("toast-container");
	null === o && (o = document.createElement("div"), o.id = "toast-container", document.body.appendChild(o));
	var r = a(e);
	e && o.appendChild(r), r.style.top = "35px", r.style.opacity = 0, Vel(r, {top: "0px", opacity: 1}, {duration: 300, easing: "easeOutCubic", queue: !1});
	var s, l = t;
	null != l && (s = setInterval(function() {
		null === r.parentNode && window.clearInterval(s), r.classList.contains("panning") || (l -= 20), 0 >= l && (Vel(r, {opacity: 0, marginTop: "-40px"}, {
			duration: 375, easing: "easeOutExpo", queue: !1, complete: function() {
				"function" == typeof i && i(), this[0].parentNode.removeChild(this[0])
			}
		}), window.clearInterval(s))
	}, 20))
}, function(e) {
	var t = {
		init: function(t) {
			var n = {menuWidth: 300, edge: "left", closeOnClick: !1, draggable: !0};
			t = e.extend(n, t), e(this).each(function() {
				var n = e(this), i = e("#" + n.attr("data-activates"));
				300 != t.menuWidth && i.css("width", t.menuWidth);
				var a;
				t.draggable ? (a = e('<div class="drag-target"></div>').attr("data-sidenav", n.attr("data-activates")), e("body").append(a)) : a = e(), "left" == t.edge ? (i.css("transform", "translateX(-100%)"), a.css({left: 0})) : (i.addClass("right-aligned").css("transform", "translateX(100%)"), a.css({right: 0})), i.hasClass("fixed") && window.innerWidth > 992 && i.css("transform", "translateX(0)"), i.hasClass("fixed") && e(window).resize(function() {
					window.innerWidth > 992 ? 0 !== e("#sidenav-overlay").length && s ? o(!0) : i.css("transform", "translateX(0%)") : s === !1 && ("left" === t.edge ? i.css("transform", "translateX(-100%)") : i.css("transform", "translateX(100%)"))
				}), t.closeOnClick === !0 && i.on("click.itemclick", "a:not(.collapsible-header)", function() {
					o()
				});
				var o = function(n) {
					r = !1, s = !1, e("body").css({overflow: "", width: ""}), e("#sidenav-overlay").velocity({opacity: 0}, {
						duration: 200, queue: !1, easing: "easeOutQuad", complete: function() {
							e(this).remove()
						}
					}), "left" === t.edge ? (a.css({width: "", right: "", left: "0"}), i.velocity({translateX: "-100%"}, {
						duration: 200, queue: !1, easing: "easeOutCubic", complete: function() {
							n === !0 && (i.removeAttr("style"), i.css("width", t.menuWidth))
						}
					})) : (a.css({width: "", right: "0", left: ""}), i.velocity({translateX: "100%"}, {
						duration: 200, queue: !1, easing: "easeOutCubic", complete: function() {
							n === !0 && (i.removeAttr("style"), i.css("width", t.menuWidth))
						}
					}))
				}, r = !1, s = !1;
				t.draggable && (a.on("click", function() {
					s && o()
				}), a.hammer({prevent_default: !1}).bind("pan", function(n) {
					if("touch" == n.gesture.pointerType)
					{
						var a = (n.gesture.direction, n.gesture.center.x),
							r = (n.gesture.center.y, n.gesture.velocityX, e("body")), l = e("#sidenav-overlay"),
							u = r.innerWidth();
						if(r.css("overflow", "hidden"), r.width(u), 0 === l.length && (l = e('<div id="sidenav-overlay"></div>'), l.css("opacity", 0).click(function() {
								o()
							}), e("body").append(l)), "left" === t.edge && (a > t.menuWidth ? a = t.menuWidth : 0 > a && (a = 0)), "left" === t.edge) a < t.menuWidth / 2 ? s = !1 : a >= t.menuWidth / 2 && (s = !0), i.css("transform", "translateX(" + (a - t.menuWidth) + "px)");
						else
						{
							a < window.innerWidth - t.menuWidth / 2 ? s = !0 : a >= window.innerWidth - t.menuWidth / 2 && (s = !1);
							var c = a - t.menuWidth / 2;
							0 > c && (c = 0), i.css("transform", "translateX(" + c + "px)")
						}
						var d;
						"left" === t.edge ? (d = a / t.menuWidth, l.velocity({opacity: d}, {duration: 10, queue: !1, easing: "easeOutQuad"})) : (d = Math.abs((a - window.innerWidth) / t.menuWidth), l.velocity({opacity: d}, {duration: 10, queue: !1, easing: "easeOutQuad"}))
					}
				}).bind("panend", function(n) {
					if("touch" == n.gesture.pointerType)
					{
						var o = e('<div id="sidenav-overlay"></div>'), l = n.gesture.velocityX, u = n.gesture.center.x,
							c = u - t.menuWidth, d = u - t.menuWidth / 2;
						c > 0 && (c = 0), 0 > d && (d = 0), r = !1, "left" === t.edge ? s && .3 >= l || -.5 > l ? (0 !== c && i.velocity({translateX: [0, c]}, {duration: 300, queue: !1, easing: "easeOutQuad"}), o.velocity({opacity: 1}, {duration: 50, queue: !1, easing: "easeOutQuad"}), a.css({width: "50%", right: 0, left: ""}), s = !0) : (!s || l > .3) && (e("body").css({overflow: "", width: ""}), i.velocity({translateX: [-1 * t.menuWidth - 10, c]}, {duration: 200, queue: !1, easing: "easeOutQuad"}), o.velocity({opacity: 0}, {
							duration: 200, queue: !1, easing: "easeOutQuad", complete: function() {
								e(this).remove()
							}
						}), a.css({width: "10px", right: "", left: 0})) : s && l >= -.3 || l > .5 ? (0 !== d && i.velocity({translateX: [0, d]}, {duration: 300, queue: !1, easing: "easeOutQuad"}), o.velocity({opacity: 1}, {duration: 50, queue: !1, easing: "easeOutQuad"}), a.css({width: "50%", right: "", left: 0}), s = !0) : (!s || -.3 > l) && (e("body").css({overflow: "", width: ""}), i.velocity({translateX: [t.menuWidth + 10, d]}, {duration: 200, queue: !1, easing: "easeOutQuad"}), o.velocity({opacity: 0}, {
							duration: 200, queue: !1, easing: "easeOutQuad", complete: function() {
								e(this).remove()
							}
						}), a.css({width: "10px", right: 0, left: ""}))
					}
				})), n.click(function() {
					if(s === !0) s = !1, r = !1, o();
					else
					{
						var n = e("body"), l = e('<div id="sidenav-overlay"></div>'), u = n.innerWidth();
						n.css("overflow", "hidden"), n.width(u), e("body").append(a), "left" === t.edge ? (a.css({width: "50%", right: 0, left: ""}), i.velocity({translateX: [0, -1 * t.menuWidth]}, {duration: 300, queue: !1, easing: "easeOutQuad"})) : (a.css({width: "50%", right: "", left: 0}), i.velocity({translateX: [0, t.menuWidth]}, {duration: 300, queue: !1, easing: "easeOutQuad"})), l.css("opacity", 0).click(function() {
							s = !1, r = !1, o(), l.velocity({opacity: 0}, {
								duration: 300, queue: !1, easing: "easeOutQuad", complete: function() {
									e(this).remove()
								}
							})
						}), e("body").append(l), l.velocity({opacity: 1}, {
							duration: 300, queue: !1, easing: "easeOutQuad", complete: function() {
								s = !0, r = !1
							}
						})
					}
					return !1
				})
			})
		}, destroy: function() {
			var t = e("#sidenav-overlay"), n = e('.drag-target[data-sidenav="' + e(this).attr("data-activates") + '"]');
			t.trigger("click"), n.remove(), e(this).off("click"), t.remove()
		}, show: function() {
			this.trigger("click")
		}, hide: function() {
			e("#sidenav-overlay").trigger("click")
		}
	};
	e.fn.sideNav = function(n) {
		return t[n] ? t[n].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof n && n ? void e.error("Method " + n + " does not exist on jQuery.sideNav") : t.init.apply(this, arguments)
	}
}(jQuery), /**
 * Extend jquery with a scrollspy plugin.
 * This watches the window scroll and fires events when elements are scrolled into viewport.
 *
 * throttle() and getTime() taken from Underscore.js
 * https://github.com/jashkenas/underscore
 *
 * @author Copyright 2013 John Smart
 * @license https://raw.github.com/thesmart/jquery-scrollspy/master/LICENSE
 * @see https://github.com/thesmart
 * @version 0.1.2
 */
	function(e) {
		function t (t, n, i, a) {
			var o = e();
			return e.each(r, function(e, r) {
				if(r.height() > 0)
				{
					var s = r.offset().top, l = r.offset().left, u = l + r.width(), c = s + r.height(),
						d = !(l > n || a > u || s > i || t > c);
					d && o.push(r)
				}
			}), o
		}

		function n (n) {
			++u;
			var i = o.scrollTop(), a = o.scrollLeft(), r = a + o.width(), l = i + o.height(),
				d = t(i + c.top + n || 200, r + c.right, l + c.bottom, a + c.left);
			e.each(d, function(e, t) {
				var n = t.data("scrollSpy:ticks");
				"number" != typeof n && t.triggerHandler("scrollSpy:enter"), t.data("scrollSpy:ticks", u)
			}), e.each(s, function(e, t) {
				var n = t.data("scrollSpy:ticks");
				"number" == typeof n && n !== u && (t.triggerHandler("scrollSpy:exit"), t.data("scrollSpy:ticks", null))
			}), s = d
		}

		function i () {
			o.trigger("scrollSpy:winSize")
		}

		function a (e, t, n) {
			var i, a, o, r = null, s = 0;
			n || (n = {});
			var l = function() {
				s = n.leading === !1 ? 0 : d(), r = null, o = e.apply(i, a), i = a = null
			};
			return function() {
				var u = d();
				s || n.leading !== !1 || (s = u);
				var c = t - (u - s);
				return i = this, a = arguments, 0 >= c ? (clearTimeout(r), r = null, s = u, o = e.apply(i, a), i = a = null) : r || n.trailing === !1 || (r = setTimeout(l, c)), o
			}
		}

		var o = e(window), r = [], s = [], l = !1, u = 0, c = {top: 0, right: 0, bottom: 0, left: 0},
			d = Date.now || function() {
				return (new Date).getTime()
			};
		e.scrollSpy = function(t, i) {
			var s = {throttle: 100, scrollOffset: 200};
			i = e.extend(s, i);
			var u = [];
			t = e(t), t.each(function(t, n) {
				r.push(e(n)), e(n).data("scrollSpy:id", t), e('a[href="#' + e(n).attr("id") + '"]').click(function(t) {
					t.preventDefault();
					var n = e(Materialize.escapeHash(this.hash)).offset().top + 1;
					e("html, body").animate({scrollTop: n - i.scrollOffset}, {duration: 400, queue: !1, easing: "easeOutCubic"})
				})
			}), c.top = i.offsetTop || 0, c.right = i.offsetRight || 0, c.bottom = i.offsetBottom || 0, c.left = i.offsetLeft || 0;
			var d = a(function() {
				n(i.scrollOffset)
			}, i.throttle || 100), f = function() {
				e(document).ready(d)
			};
			return l || (o.on("scroll", f), o.on("resize", f), l = !0), setTimeout(f, 0), t.on("scrollSpy:enter", function() {
				u = e.grep(u, function(e) {
					return 0 != e.height()
				});
				var t = e(this);
				u[0] ? (e('a[href="#' + u[0].attr("id") + '"]').removeClass("active"), t.data("scrollSpy:id") < u[0].data("scrollSpy:id") ? u.unshift(e(this)) : u.push(e(this))) : u.push(e(this)), e('a[href="#' + u[0].attr("id") + '"]').addClass("active")
			}), t.on("scrollSpy:exit", function() {
				if(u = e.grep(u, function(e) {
						return 0 != e.height()
					}), u[0])
				{
					e('a[href="#' + u[0].attr("id") + '"]').removeClass("active");
					var t = e(this);
					u = e.grep(u, function(e) {
						return e.attr("id") != t.attr("id")
					}), u[0] && e('a[href="#' + u[0].attr("id") + '"]').addClass("active")
				}
			}), t
		}, e.winSizeSpy = function(t) {
			return e.winSizeSpy = function() {
				return o
			}, t = t || {throttle: 100}, o.on("resize", a(i, t.throttle || 100))
		}, e.fn.scrollSpy = function(t) {
			return e.scrollSpy(e(this), t)
		}
	}(jQuery), function(e) {
	e(document).ready(function() {
		function t (t) {
			var n = t.css("font-family"), i = t.css("font-size"), o = t.css("line-height");
			i && a.css("font-size", i), n && a.css("font-family", n), o && a.css("line-height", o), "off" === t.attr("wrap") && a.css("overflow-wrap", "normal").css("white-space", "pre"), a.text(t.val() + "\n");
			var r = a.html().replace(/\n/g, "<br>");
			a.html(r), t.is(":visible") ? a.css("width", t.width()) : a.css("width", e(window).width() / 2), t.css("height", a.height())
		}

		Materialize.updateTextFields = function() {
			var t = "input[type=text], input[type=password], input[type=email], input[type=url], input[type=tel], input[type=number], input[type=search], textarea";
			e(t).each(function(t, n) {
				e(n).val().length > 0 || n.autofocus || void 0 !== e(this).attr("placeholder") || e(n)[0].validity.badInput === !0 ? e(this).siblings("label").addClass("active") : e(this).siblings("label").removeClass("active")
			})
		};
		var n = "input[type=text], input[type=password], input[type=email], input[type=url], input[type=tel], input[type=number], input[type=search], textarea";
		e(document).on("change", n, function() {
			(0 !== e(this).val().length || void 0 !== e(this).attr("placeholder")) && e(this).siblings("label").addClass("active"), validate_field(e(this))
		}), e(document).ready(function() {
			Materialize.updateTextFields()
		}), e(document).on("reset", function(t) {
			var i = e(t.target);
			i.is("form") && (i.find(n).removeClass("valid").removeClass("invalid"), i.find(n).each(function() {
				"" === e(this).attr("value") && e(this).siblings("label").removeClass("active")
			}), i.find("select.initialized").each(function() {
				var e = i.find("option[selected]").text();
				i.siblings("input.select-dropdown").val(e)
			}))
		}), e(document).on("focus", n, function() {
			e(this).siblings("label, .prefix").addClass("active")
		}), e(document).on("blur", n, function() {
			var t = e(this), n = ".prefix";
			0 === t.val().length && t[0].validity.badInput !== !0 && void 0 === t.attr("placeholder") && (n += ", label"), t.siblings(n).removeClass("active"), validate_field(t)
		}), window.validate_field = function(e) {
			var t = void 0 !== e.attr("length"), n = parseInt(e.attr("length")), i = e.val().length;
			0 === e.val().length && e[0].validity.badInput === !1 ? e.hasClass("validate") && (e.removeClass("valid"), e.removeClass("invalid")) : e.hasClass("validate") && (e.is(":valid") && t && n >= i || e.is(":valid") && !t ? (e.removeClass("invalid"), e.addClass("valid")) : (e.removeClass("valid"), e.addClass("invalid")))
		};
		var i = "input[type=radio], input[type=checkbox]";
		e(document).on("keyup.radio", i, function(t) {
			if(9 === t.which)
			{
				e(this).addClass("tabbed");
				var n = e(this);
				return void n.one("blur", function() {
					e(this).removeClass("tabbed")
				})
			}
		});
		var a = e(".hiddendiv").first();
		a.length || (a = e('<div class="hiddendiv common"></div>'), e("body").append(a));
		var o = ".materialize-textarea";
		e(o).each(function() {
			var n = e(this);
			n.val().length && t(n)
		}), e("body").on("keyup keydown autoresize", o, function() {
			t(e(this))
		}), e(document).on("change", '.file-field input[type="file"]', function() {
			for(var t = e(this).closest(".file-field"), n = t.find("input.file-path"), i = e(this)[0].files, a = [], o = 0; o < i.length; o++)
			{
				a.push(i[o].name);
			}
			n.val(a.join(", ")), n.trigger("change")
		});
		var r, s = "input[type=range]", l = !1;
		e(s).each(function() {
			var t = e('<span class="thumb"><span class="value"></span></span>');
			e(this).after(t)
		});
		var u = ".range-field";
		e(document).on("change", s, function() {
			var t = e(this).siblings(".thumb");
			t.find(".value").html(e(this).val())
		}), e(document).on("input mousedown touchstart", s, function(t) {
			var n = e(this).siblings(".thumb"), i = e(this).outerWidth();
			n.length <= 0 && (n = e('<span class="thumb"><span class="value"></span></span>'), e(this).after(n)), n.find(".value").html(e(this).val()), l = !0, e(this).addClass("active"), n.hasClass("active") || n.velocity({height: "30px", width: "30px", top: "-20px", marginLeft: "-15px"}, {duration: 300, easing: "easeOutExpo"}), "input" !== t.type && (r = void 0 === t.pageX || null === t.pageX ? t.originalEvent.touches[0].pageX - e(this).offset().left : t.pageX - e(this).offset().left, 0 > r ? r = 0 : r > i && (r = i), n.addClass("active").css("left", r)), n.find(".value").html(e(this).val())
		}), e(document).on("mouseup touchend", u, function() {
			l = !1, e(this).removeClass("active")
		}), e(document).on("mousemove touchmove", u, function(t) {
			var n, i = e(this).children(".thumb");
			if(l)
			{
				i.hasClass("active") || i.velocity({height: "30px", width: "30px", top: "-20px", marginLeft: "-15px"}, {duration: 300, easing: "easeOutExpo"}), n = void 0 === t.pageX || null === t.pageX ? t.originalEvent.touches[0].pageX - e(this).offset().left : t.pageX - e(this).offset().left;
				var a = e(this).outerWidth();
				0 > n ? n = 0 : n > a && (n = a), i.addClass("active").css("left", n), i.find(".value").html(i.siblings(s).val())
			}
		}), e(document).on("mouseout touchleave", u, function() {
			if(!l)
			{
				var t = e(this).children(".thumb");
				t.hasClass("active") && t.velocity({height: "0", width: "0", top: "10px", marginLeft: "-6px"}, {duration: 100}), t.removeClass("active")
			}
		}), e.fn.autocomplete = function(t) {
			var n = {data: {}};
			return t = e.extend(n, t), this.each(function() {
				var n = e(this), i = t.data, a = n.closest(".input-field");
				if(!e.isEmptyObject(i))
				{
					var o = e('<ul class="autocomplete-content dropdown-content"></ul>');
					a.length ? a.append(o) : n.after(o);
					var r = function(e, t) {
						var n = t.find("img"), i = t.text().toLowerCase().indexOf("" + e.toLowerCase()),
							a = i + e.length - 1, o = t.text().slice(0, i), r = t.text().slice(i, a + 1),
							s = t.text().slice(a + 1);
						t.html("<span>" + o + "<span class='highlight'>" + r + "</span>" + s + "</span>"), n.length && t.prepend(n)
					};
					n.on("keyup", function(t) {
						if(13 === t.which) return void o.find("li").first().click();
						var a = n.val().toLowerCase();
						if(o.empty(), "" !== a) for(var s in i)
						{
							if(i.hasOwnProperty(s) && -1 !== s.toLowerCase().indexOf(a) && s.toLowerCase() !== a)
							{
								var l = e("<li></li>");
								l.append(i[s] ? '<img src="' + i[s] + '" class="right circle"><span>' + s + "</span>" : "<span>" + s + "</span>"), o.append(l), r(a, l)
							}
						}
					}), o.on("click", "li", function() {
						n.val(e(this).text().trim()), n.trigger("change"), o.empty()
					})
				}
			})
		}
	}), e.fn.material_select = function(t) {
		function n (e, t, n) {
			var a = e.indexOf(t), o = -1 === a;
			return o ? e.push(t) : e.splice(a, 1), n.siblings("ul.dropdown-content").find("li").eq(t).toggleClass("active"), n.find("option").eq(t).prop("selected", o), i(e, n), o
		}

		function i (e, t) {
			for(var n = "", i = 0, a = e.length; a > i; i++)
			{
				var o = t.find("option").eq(e[i]).text();
				n += 0 === i ? o : ", " + o
			}
			"" === n && (n = t.find("option:disabled").eq(0).text()), t.siblings("input.select-dropdown").val(n)
		}

		e(this).each(function() {
			var i = e(this);
			if(!i.hasClass("browser-default"))
			{
				var a = i.attr("multiple") ? !0 : !1, o = i.data("select-id");
				if(o && (i.parent().find("span.caret").remove(), i.parent().find("input").remove(), i.unwrap(), e("ul#select-options-" + o).remove()), "destroy" === t) return void i.data("select-id", null).removeClass("initialized");
				var r = Materialize.guid();
				i.data("select-id", r);
				var s = e('<div class="select-wrapper"></div>');
				s.addClass(i.attr("class"));
				var l = e('<ul id="select-options-' + r + '" class="dropdown-content select-dropdown ' + (a ? "multiple-select-dropdown" : "") + '"></ul>'),
					u = i.children("option, optgroup"), c = [], d = !1,
					f = i.find("option:selected").html() || i.find("option:first").html() || "", h = function(t, n, i) {
						var a = n.is(":disabled") ? "disabled " : "", o = "optgroup-option" === i ? "optgroup-option " : "",
							r = n.data("icon"), s = n.attr("class");
						if(r)
						{
							var u = "";
							return s && (u = ' class="' + s + '"'), l.append("multiple" === i ? e('<li class="' + a + '"><img alt="" src="' + r + '"' + u + '><span><input type="checkbox"' + a + "/><label></label>" + n.html() + "</span></li>") : e('<li class="' + a + o + '"><img alt="" src="' + r + '"' + u + "><span>" + n.html() + "</span></li>")), !0
						}
						l.append(e("multiple" === i ? '<li class="' + a + '"><span><input type="checkbox"' + a + "/><label></label>" + n.html() + "</span></li>" : '<li class="' + a + o + '"><span>' + n.html() + "</span></li>"))
					};
				u.length && u.each(function() {
					if(e(this).is("option")) a ? h(i, e(this), "multiple") : h(i, e(this));
					else if(e(this).is("optgroup"))
					{
						var t = e(this).children("option");
						l.append(e('<li class="optgroup"><span>' + e(this).attr("label") + "</span></li>")), t.each(function() {
							h(i, e(this), "optgroup-option")
						})
					}
				}), l.find("li:not(.optgroup)").each(function(o) {
					e(this).click(function(r) {
						if(!e(this).hasClass("disabled") && !e(this).hasClass("optgroup"))
						{
							var s = !0;
							a ? (e('input[type="checkbox"]', this).prop("checked", function(e, t) {
								return !t
							}), s = n(c, e(this).index(), i), v.trigger("focus")) : (l.find("li").removeClass("active"), e(this).toggleClass("active"), v.val(e(this).text())), g(l, e(this)), i.find("option").eq(o).prop("selected", s), i.trigger("change"), "undefined" != typeof t && t()
						}
						r.stopPropagation()
					})
				}), i.wrap(s);
				var p = e('<span class="caret">&#9660;</span>');
				i.is(":disabled") && p.addClass("disabled");
				var m = f.replace(/"/g, "&quot;"),
					v = e('<input type="text" class="select-dropdown" readonly="true" ' + (i.is(":disabled") ? "disabled" : "") + ' data-activates="select-options-' + r + '" value="' + m + '"/>');
				i.before(v), v.before(p), v.after(l), i.is(":disabled") || v.dropdown({hover: !1, closeOnClick: !1}), i.attr("tabindex") && e(v[0]).attr("tabindex", i.attr("tabindex")), i.addClass("initialized"), v.on({
					focus: function() {
						if(e("ul.select-dropdown").not(l[0]).is(":visible") && e("input.select-dropdown").trigger("close"), !l.is(":visible"))
						{
							e(this).trigger("open", ["focus"]);
							var t = e(this).val(), n = l.find("li").filter(function() {
								return e(this).text().toLowerCase() === t.toLowerCase()
							})[0];
							g(l, n)
						}
					}, click: function(e) {
						e.stopPropagation()
					}
				}), v.on("blur", function() {
					a || e(this).trigger("close"), l.find("li.selected").removeClass("selected")
				}), l.hover(function() {
					d = !0
				}, function() {
					d = !1
				}), e(window).on({
					click: function() {
						a && (d || v.trigger("close"))
					}
				}), a && i.find("option:selected:not(:disabled)").each(function() {
					var t = e(this).index();
					n(c, t, i), l.find("li").eq(t).find(":checkbox").prop("checked", !0)
				});
				var g = function(t, n) {
					if(n)
					{
						t.find("li.selected").removeClass("selected");
						var i = e(n);
						i.addClass("selected"), l.scrollTo(i)
					}
				}, y = [], b = function(t) {
					if(9 == t.which) return void v.trigger("close");
					if(40 == t.which && !l.is(":visible")) return void v.trigger("open");
					if(13 != t.which || l.is(":visible"))
					{
						t.preventDefault();
						var n = String.fromCharCode(t.which).toLowerCase(), i = [9, 13, 27, 38, 40];
						if(n && -1 === i.indexOf(t.which))
						{
							y.push(n);
							var o = y.join(""), r = l.find("li").filter(function() {
								return 0 === e(this).text().toLowerCase().indexOf(o)
							})[0];
							r && g(l, r)
						}
						if(13 == t.which)
						{
							var s = l.find("li.selected:not(.disabled)")[0];
							s && (e(s).trigger("click"), a || v.trigger("close"))
						}
						40 == t.which && (r = l.find("li.selected").length ? l.find("li.selected").next("li:not(.disabled)")[0] : l.find("li:not(.disabled)")[0], g(l, r)), 27 == t.which && v.trigger("close"), 38 == t.which && (r = l.find("li.selected").prev("li:not(.disabled)")[0], r && g(l, r)), setTimeout(function() {
							y = []
						}, 1e3)
					}
				};
				v.on("keydown", b)
			}
		})
	}
}(jQuery), function(e) {
	var t = {
		init: function(t) {
			var n = {indicators: !0, height: 400, transition: 500, interval: 6e3};
			return t = e.extend(n, t), this.each(function() {
				function n (e, t) {
					e.hasClass("center-align") ? e.velocity({opacity: 0, translateY: -100}, {duration: t, queue: !1}) : e.hasClass("right-align") ? e.velocity({opacity: 0, translateX: 100}, {duration: t, queue: !1}) : e.hasClass("left-align") && e.velocity({opacity: 0, translateX: -100}, {duration: t, queue: !1})
				}

				function i (e) {
					e >= u.length ? e = 0 : 0 > e && (e = u.length - 1), c = l.find(".active").index(), c != e && (a = u.eq(c), $caption = a.find(".caption"), a.removeClass("active"), a.velocity({opacity: 0}, {
						duration: t.transition, queue: !1, easing: "easeOutQuad", complete: function() {
							u.not(".active").velocity({opacity: 0, translateX: 0, translateY: 0}, {duration: 0, queue: !1})
						}
					}), n($caption, t.transition), t.indicators && o.eq(c).removeClass("active"), u.eq(e).velocity({opacity: 1}, {duration: t.transition, queue: !1, easing: "easeOutQuad"}), u.eq(e).find(".caption").velocity({opacity: 1, translateX: 0, translateY: 0}, {duration: t.transition, delay: t.transition, queue: !1, easing: "easeOutQuad"}), u.eq(e).addClass("active"), t.indicators && o.eq(e).addClass("active"))
				}

				var a, o, r, s = e(this), l = s.find("ul.slides").first(), u = l.find("> li"),
					c = l.find(".active").index();
				-1 != c && (a = u.eq(c)), s.hasClass("fullscreen") || (s.height(t.indicators ? t.height + 40 : t.height), l.height(t.height)), u.find(".caption").each(function() {
					n(e(this), 0)
				}), u.find("img").each(function() {
					var t = "data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==";
					e(this).attr("src") !== t && (e(this).css("background-image", "url(" + e(this).attr("src") + ")"), e(this).attr("src", t))
				}), t.indicators && (o = e('<ul class="indicators"></ul>'), u.each(function() {
					var n = e('<li class="indicator-item"></li>');
					n.click(function() {
						var n = l.parent(), a = n.find(e(this)).index();
						i(a), clearInterval(r), r = setInterval(function() {
							c = l.find(".active").index(), u.length == c + 1 ? c = 0 : c += 1, i(c)
						}, t.transition + t.interval)
					}), o.append(n)
				}), s.append(o), o = s.find("ul.indicators").find("li.indicator-item")), a ? a.show() : (u.first().addClass("active").velocity({opacity: 1}, {duration: t.transition, queue: !1, easing: "easeOutQuad"}), c = 0, a = u.eq(c), t.indicators && o.eq(c).addClass("active")), a.find("img").each(function() {
					a.find(".caption").velocity({opacity: 1, translateX: 0, translateY: 0}, {duration: t.transition, queue: !1, easing: "easeOutQuad"})
				}), r = setInterval(function() {
					c = l.find(".active").index(), i(c + 1)
				}, t.transition + t.interval);
				var d = !1, f = !1, h = !1;
				s.hammer({prevent_default: !1}).bind("pan", function(e) {
					if("touch" === e.gesture.pointerType)
					{
						clearInterval(r);
						var t = e.gesture.direction, n = e.gesture.deltaX, i = e.gesture.velocityX;
						$curr_slide = l.find(".active"), $curr_slide.velocity({translateX: n}, {duration: 50, queue: !1, easing: "easeOutQuad"}), 4 === t && (n > s.innerWidth() / 2 || -.65 > i) ? h = !0 : 2 === t && (n < -1 * s.innerWidth() / 2 || i > .65) && (f = !0);
						var a;
						f && (a = $curr_slide.next(), 0 === a.length && (a = u.first()), a.velocity({opacity: 1}, {duration: 300, queue: !1, easing: "easeOutQuad"})), h && (a = $curr_slide.prev(), 0 === a.length && (a = u.last()), a.velocity({opacity: 1}, {duration: 300, queue: !1, easing: "easeOutQuad"}))
					}
				}).bind("panend", function(e) {
					"touch" === e.gesture.pointerType && ($curr_slide = l.find(".active"), d = !1, curr_index = l.find(".active").index(), !h && !f || u.length <= 1 ? $curr_slide.velocity({translateX: 0}, {duration: 300, queue: !1, easing: "easeOutQuad"}) : f ? (i(curr_index + 1), $curr_slide.velocity({translateX: -1 * s.innerWidth()}, {
						duration: 300, queue: !1, easing: "easeOutQuad", complete: function() {
							$curr_slide.velocity({opacity: 0, translateX: 0}, {duration: 0, queue: !1})
						}
					})) : h && (i(curr_index - 1), $curr_slide.velocity({translateX: s.innerWidth()}, {
						duration: 300, queue: !1, easing: "easeOutQuad", complete: function() {
							$curr_slide.velocity({opacity: 0, translateX: 0}, {duration: 0, queue: !1})
						}
					})), f = !1, h = !1, clearInterval(r), r = setInterval(function() {
						c = l.find(".active").index(), u.length == c + 1 ? c = 0 : c += 1, i(c)
					}, t.transition + t.interval))
				}), s.on("sliderPause", function() {
					clearInterval(r)
				}), s.on("sliderStart", function() {
					clearInterval(r), r = setInterval(function() {
						c = l.find(".active").index(), u.length == c + 1 ? c = 0 : c += 1, i(c)
					}, t.transition + t.interval)
				}), s.on("sliderNext", function() {
					c = l.find(".active").index(), i(c + 1)
				}), s.on("sliderPrev", function() {
					c = l.find(".active").index(), i(c - 1)
				})
			})
		}, pause: function() {
			e(this).trigger("sliderPause")
		}, start: function() {
			e(this).trigger("sliderStart")
		}, next: function() {
			e(this).trigger("sliderNext")
		}, prev: function() {
			e(this).trigger("sliderPrev")
		}
	};
	e.fn.slider = function(n) {
		return t[n] ? t[n].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof n && n ? void e.error("Method " + n + " does not exist on jQuery.tooltip") : t.init.apply(this, arguments)
	}
}(jQuery), function(e) {
	e(document).ready(function() {
		e(document).on("click.card", ".card", function(t) {
			e(this).find("> .card-reveal").length && (e(t.target).is(e(".card-reveal .card-title")) || e(t.target).is(e(".card-reveal .card-title i")) ? e(this).find(".card-reveal").velocity({translateY: 0}, {
				duration: 225, queue: !1, easing: "easeInOutQuad", complete: function() {
					e(this).css({display: "none"})
				}
			}) : (e(t.target).is(e(".card .activator")) || e(t.target).is(e(".card .activator i"))) && (e(t.target).closest(".card").css("overflow", "hidden"), e(this).find(".card-reveal").css({display: "block"}).velocity("stop", !1).velocity({translateY: "-100%"}, {duration: 300, queue: !1, easing: "easeInOutQuad"})))
		})
	})
}(jQuery), function(e) {
	var t = !1, n = {data: [], placeholder: "", secondaryPlaceholder: ""};
	e(document).ready(function() {
		e(document).on("click", ".chip .close", function() {
			var t = e(this).closest(".chips");
			t.attr("data-initialized") || e(this).closest(".chip").remove()
		})
	}), e.fn.material_chip = function(i) {
		var a = this;
		if(this.$el = e(this), this.$document = e(document), this.SELS = {CHIPS: ".chips", CHIP: ".chip", INPUT: "input", DELETE: ".material-icons", SELECTED_CHIP: ".selected"}, "data" === i) return this.$el.data("chips");
		var o = e.extend({}, n, i);
		this.init = function() {
			var t = 0;
			a.$el.each(function() {
				var n = e(this), i = Materialize.guid();
				o.data && o.data instanceof Array || (o.data = []), n.data("chips", o.data), n.attr("data-index", t), n.attr("data-initialized", !0), n.hasClass(a.SELS.CHIPS) || n.addClass("chips"), a.chips(n, i), t++
			})
		}, this.handleEvents = function() {
			var t = a.SELS;
			a.$document.off("click.chips-focus", t.CHIPS).on("click.chips-focus", t.CHIPS, function(n) {
				e(n.target).find(t.INPUT).focus()
			}), a.$document.off("click.chips-select", t.CHIP).on("click.chips-select", t.CHIP, function() {
				e(t.CHIP).removeClass("selected"), e(this).toggleClass("selected")
			}), a.$document.off("keydown.chips").on("keydown.chips", function(n) {
				if(!e(n.target).is("input, textarea"))
				{
					var i, o = a.$document.find(t.CHIP + t.SELECTED_CHIP), r = o.closest(t.CHIPS),
						s = o.siblings(t.CHIP).length;
					if(o.length) if(8 === n.which || 46 === n.which)
					{
						n.preventDefault(), i = o.index(), a.deleteChip(i, r);
						var l = null;
						s > i + 1 ? l = i : (i === s || i + 1 === s) && (l = s - 1), 0 > l && (l = null), null !== l && a.selectChip(l, r), s || r.find("input").focus()
					}
					else if(37 === n.which)
					{
						if(i = o.index() - 1, 0 > i) return;
						e(t.CHIP).removeClass("selected"), a.selectChip(i, r)
					}
					else if(39 === n.which)
					{
						if(i = o.index() + 1, e(t.CHIP).removeClass("selected"), i > s) return void r.find("input").focus();
						a.selectChip(i, r)
					}
				}
			}), a.$document.off("focusin.chips", t.CHIPS + " " + t.INPUT).on("focusin.chips", t.CHIPS + " " + t.INPUT, function(n) {
				var i = e(n.target).closest(t.CHIPS);
				i.addClass("focus"), i.siblings("label, .prefix").addClass("active"), e(t.CHIP).removeClass("selected")
			}), a.$document.off("focusout.chips", t.CHIPS + " " + t.INPUT).on("focusout.chips", t.CHIPS + " " + t.INPUT, function(n) {
				var i = e(n.target).closest(t.CHIPS);
				i.removeClass("focus"), i.data("chips").length || i.siblings("label").removeClass("active"), i.siblings(".prefix").removeClass("active")
			}), a.$document.off("keydown.chips-add", t.CHIPS + " " + t.INPUT).on("keydown.chips-add", t.CHIPS + " " + t.INPUT, function(n) {
				var i = e(n.target), o = i.closest(t.CHIPS), r = o.children(t.CHIP).length;
				return 13 === n.which ? (n.preventDefault(), a.addChip({tag: i.val()}, o), void i.val("")) : 8 !== n.keyCode && 37 !== n.keyCode || "" !== i.val() || !r ? void 0 : (a.selectChip(r - 1, o), void i.blur())
			}), a.$document.off("click.chips-delete", t.CHIPS + " " + t.DELETE).on("click.chips-delete", t.CHIPS + " " + t.DELETE, function(n) {
				var i = e(n.target), o = i.closest(t.CHIPS), r = i.closest(t.CHIP);
				n.stopPropagation(), a.deleteChip(r.index(), o), o.find("input").focus()
			})
		}, this.chips = function(e, t) {
			var n = "";
			e.data("chips").forEach(function(e) {
				n += a.renderChip(e)
			}), n += '<input id="' + t + '" class="input" placeholder="">', e.html(n), a.setPlaceholder(e);
			var i = e.next("label");
			i.length && (i.attr("for", t), e.data("chips").length && i.addClass("active"))
		}, this.renderChip = function(e) {
			if(e.tag)
			{
				var t = '<div class="chip">' + e.tag;
				return e.image && (t += ' <img src="' + e.image + '"> '), t += '<i class="material-icons close">close</i>', t += "</div>"
			}
		}, this.setPlaceholder = function(e) {
			e.data("chips").length && o.placeholder ? e.find("input").prop("placeholder", o.placeholder) : !e.data("chips").length && o.secondaryPlaceholder && e.find("input").prop("placeholder", o.secondaryPlaceholder)
		}, this.isValid = function(e, t) {
			for(var n = e.data("chips"), i = !1, a = 0; a < n.length; a++)
			{
				if(n[a].tag === t.tag) return void(i = !0);
			}
			return "" !== t.tag && !i
		}, this.addChip = function(t, n) {
			if(a.isValid(n, t))
			{
				for(var i = a.renderChip(t), o = [], r = n.data("chips"), s = 0; s < r.length; s++)
				{
					o.push(r[s]);
				}
				o.push(t), n.data("chips", o), e(i).insertBefore(n.find("input")), n.trigger("chip.add", t), a.setPlaceholder(n)
			}
		}, this.deleteChip = function(e, t) {
			var n = t.data("chips")[e];
			t.find(".chip").eq(e).remove();
			for(var i = [], o = t.data("chips"), r = 0; r < o.length; r++)
			{
				r !== e && i.push(o[r]);
			}
			t.data("chips", i), t.trigger("chip.delete", n), a.setPlaceholder(t)
		}, this.selectChip = function(e, t) {
			var n = t.find(".chip").eq(e);
			n && !1 === n.hasClass("selected") && (n.addClass("selected"), t.trigger("chip.select", t.data("chips")[e]))
		}, this.getChipsElement = function(e, t) {
			return t.eq(e)
		}, this.init(), t || (this.handleEvents(), t = !0)
	}
}(jQuery), function(e) {
	e.fn.pushpin = function(t) {
		var n = {top: 0, bottom: 1 / 0, offset: 0};
		return "remove" === t ? (this.each(function() {
			(id = e(this).data("pushpin-id")) && (e(window).off("scroll." + id), e(this).removeData("pushpin-id").removeClass("pin-top pinned pin-bottom").removeAttr("style"))
		}), !1) : (t = e.extend(n, t), $index = 0, this.each(function() {
			function n (e) {
				e.removeClass("pin-top"), e.removeClass("pinned"), e.removeClass("pin-bottom")
			}

			function i (i, a) {
				i.each(function() {
					t.top <= a && t.bottom >= a && !e(this).hasClass("pinned") && (n(e(this)), e(this).css("top", t.offset), e(this).addClass("pinned")), a < t.top && !e(this).hasClass("pin-top") && (n(e(this)), e(this).css("top", 0), e(this).addClass("pin-top")), a > t.bottom && !e(this).hasClass("pin-bottom") && (n(e(this)), e(this).addClass("pin-bottom"), e(this).css("top", t.bottom - r))
				})
			}

			var a = Materialize.guid(), o = e(this), r = e(this).offset().top;
			e(this).data("pushpin-id", a), i(o, e(window).scrollTop()), e(window).on("scroll." + a, function() {
				var n = e(window).scrollTop() + t.offset;
				i(o, n)
			})
		}))
	}
}(jQuery), function(e) {
	e(document).ready(function() {
		e.fn.reverse = [].reverse, e(document).on("mouseenter.fixedActionBtn", ".fixed-action-btn:not(.click-to-toggle):not(.toolbar)", function() {
			var n = e(this);
			t(n)
		}), e(document).on("mouseleave.fixedActionBtn", ".fixed-action-btn:not(.click-to-toggle):not(.toolbar)", function() {
			var t = e(this);
			n(t)
		}), e(document).on("click.fabClickToggle", ".fixed-action-btn.click-to-toggle > a", function() {
			var i = e(this), a = i.parent();
			a.hasClass("active") ? n(a) : t(a)
		}), e(document).on("click.fabToolbar", ".fixed-action-btn.toolbar > a", function() {
			var t = e(this), n = t.parent();
			i(n)
		})
	}), e.fn.extend({
		openFAB: function() {
			t(e(this))
		}, closeFAB: function() {
			n(e(this))
		}, openToolbar: function() {
			i(e(this))
		}, closeToolbar: function() {
			a(e(this))
		}
	});
	var t = function(t) {
		var n = t;
		if(n.hasClass("active") === !1)
		{
			var i, a, o = n.hasClass("horizontal");
			o === !0 ? a = 40 : i = 40, n.addClass("active"), n.find("ul .btn-floating").velocity({scaleY: ".4", scaleX: ".4", translateY: i + "px", translateX: a + "px"}, {duration: 0});
			var r = 0;
			n.find("ul .btn-floating").reverse().each(function() {
				e(this).velocity({opacity: "1", scaleX: "1", scaleY: "1", translateY: "0", translateX: "0"}, {duration: 80, delay: r}), r += 40
			})
		}
	}, n = function(e) {
		var t, n, i = e, a = i.hasClass("horizontal");
		a === !0 ? n = 40 : t = 40, i.removeClass("active");
		i.find("ul .btn-floating").velocity("stop", !0), i.find("ul .btn-floating").velocity({opacity: "0", scaleX: ".4", scaleY: ".4", translateY: t + "px", translateX: n + "px"}, {duration: 80})
	}, i = function(t) {
		if("true" !== t.attr("data-open"))
		{
			var n, i, o, r = window.innerWidth, s = window.innerHeight, l = t[0].getBoundingClientRect(),
				u = t.find("> a").first(), c = t.find("> ul").first(), d = e('<div class="fab-backdrop"></div>'),
				f = u.css("background-color");
			u.append(d), n = l.left - r / 2 + l.width / 2, i = s - l.bottom, o = r / d.width(), t.attr("data-origin-bottom", l.bottom), t.attr("data-origin-left", l.left), t.attr("data-origin-width", l.width), t.addClass("active"), t.attr("data-open", !0), t.css({"text-align": "center", width: "100%", bottom: 0, left: 0, transform: "translateX(" + n + "px)", transition: "none"}), u.css({transform: "translateY(" + -i + "px)", transition: "none"}), d.css({"background-color": f}), setTimeout(function() {
				t.css({transform: "", transition: "transform .2s cubic-bezier(0.550, 0.085, 0.680, 0.530), background-color 0s linear .2s"}), u.css({overflow: "visible", transform: "", transition: "transform .2s"}), setTimeout(function() {
					t.css({overflow: "hidden", "background-color": f}), d.css({transform: "scale(" + o + ")", transition: "transform .2s cubic-bezier(0.550, 0.055, 0.675, 0.190)"}), c.find("> li > a").css({opacity: 1}), e(window).on("scroll.fabToolbarClose", function() {
						a(t), e(window).off("scroll.fabToolbarClose"), e(document).off("click.fabToolbarClose")
					}), e(document).on("click.fabToolbarClose", function(n) {
						e(n.target).closest(c).length || (a(t), e(window).off("scroll.fabToolbarClose"), e(document).off("click.fabToolbarClose"))
					})
				}, 100)
			}, 0)
		}
	}, a = function(e) {
		if("true" === e.attr("data-open"))
		{
			var t, n, i, a = window.innerWidth, o = window.innerHeight, r = e.attr("data-origin-width"),
				s = e.attr("data-origin-bottom"), l = e.attr("data-origin-left"), u = e.find("> .btn-floating").first(),
				c = e.find("> ul").first(), d = e.find(".fab-backdrop"), f = u.css("background-color");
			t = l - a / 2 + r / 2, n = o - s, i = a / d.width(), e.removeClass("active"), e.attr("data-open", !1), e.css({"background-color": "transparent", transition: "none"}), u.css({transition: "none"}), d.css({transform: "scale(0)", "background-color": f}), c.find("> li > a").css({opacity: ""}), setTimeout(function() {
				d.remove(), e.css({"text-align": "", width: "", bottom: "", left: "", overflow: "", "background-color": "", transform: "translate3d(" + -t + "px,0,0)"}), u.css({overflow: "", transform: "translate3d(0," + n + "px,0)"}), setTimeout(function() {
					e.css({transform: "translate3d(0,0,0)", transition: "transform .2s"}), u.css({transform: "translate3d(0,0,0)", transition: "transform .2s cubic-bezier(0.550, 0.055, 0.675, 0.190)"})
				}, 20)
			}, 200)
		}
	}
}(jQuery), function(e) {
	Materialize.fadeInImage = function(t) {
		var n;
		if("string" == typeof t) n = e(t);
		else
		{
			if("object" != typeof t) return;
			n = t
		}
		n.css({opacity: 0}), e(n).velocity({opacity: 1}, {duration: 650, queue: !1, easing: "easeOutSine"}), e(n).velocity({opacity: 1}, {
			duration: 1300, queue: !1, easing: "swing", step: function(t, n) {
				n.start = 100;
				var i = t / 100, a = 150 - (100 - t) / 1.75;
				100 > a && (a = 100), t >= 0 && e(this).css({"-webkit-filter": "grayscale(" + i + ")brightness(" + a + "%)", filter: "grayscale(" + i + ")brightness(" + a + "%)"})
			}
		})
	}, Materialize.showStaggeredList = function(t) {
		var n;
		if("string" == typeof t) n = e(t);
		else
		{
			if("object" != typeof t) return;
			n = t
		}
		var i = 0;
		n.find("li").velocity({translateX: "-100px"}, {duration: 0}), n.find("li").each(function() {
			e(this).velocity({opacity: "1", translateX: "0"}, {duration: 800, delay: i, easing: [60, 10]}), i += 120
		})
	}, e(document).ready(function() {
		var t = !1, n = !1;
		e(".dismissable").each(function() {
			e(this).hammer({prevent_default: !1}).bind("pan", function(i) {
				if("touch" === i.gesture.pointerType)
				{
					var a = e(this), o = i.gesture.direction, r = i.gesture.deltaX, s = i.gesture.velocityX;
					a.velocity({translateX: r}, {duration: 50, queue: !1, easing: "easeOutQuad"}), 4 === o && (r > a.innerWidth() / 2 || -.75 > s) && (t = !0), 2 === o && (r < -1 * a.innerWidth() / 2 || s > .75) && (n = !0)
				}
			}).bind("panend", function(i) {
				if(Math.abs(i.gesture.deltaX) < e(this).innerWidth() / 2 && (n = !1, t = !1), "touch" === i.gesture.pointerType)
				{
					var a = e(this);
					if(t || n)
					{
						var o;
						o = t ? a.innerWidth() : -1 * a.innerWidth(), a.velocity({translateX: o}, {
							duration: 100, queue: !1, easing: "easeOutQuad", complete: function() {
								a.css("border", "none"), a.velocity({height: 0, padding: 0}, {
									duration: 200, queue: !1, easing: "easeOutQuad", complete: function() {
										a.remove()
									}
								})
							}
						})
					}
					else a.velocity({translateX: 0}, {duration: 100, queue: !1, easing: "easeOutQuad"});
					t = !1, n = !1
				}
			})
		})
	})
}(jQuery), function() {
	Materialize.scrollFire = function(e) {
		var t = !1;
		window.addEventListener("scroll", function() {
			t = !0
		}), setInterval(function() {
			if(t)
			{
				t = !1;
				for(var n = window.pageYOffset + window.innerHeight, i = 0; i < e.length; i++)
				{
					var a = e[i], o = a.selector, r = a.offset, s = a.callback, l = document.querySelector(o);
					if(null !== l)
					{
						var u = l.getBoundingClientRect().top + window.pageYOffset;
						if(n > u + r && a.done !== !0)
						{
							if("function" == typeof s) s.call(this, l);
							else if("string" == typeof s)
							{
								var c = new Function(s);
								c(l)
							}
							a.done = !0
						}
					}
				}
			}
		}, 100)
	}
}(jQuery), /*!
 * pickadate.js v3.5.0, 2014/04/13
 * By Amsul, http://amsul.ca
 * Hosted on http://amsul.github.io/pickadate.js
 * Licensed under MIT
 */
	function(e) {
		"function" == typeof define && define.amd ? define("picker", ["jquery"], e) : "object" == typeof exports ? module.exports = e(require("jquery")) : this.Picker = e(jQuery)
	}(function(e) {
		function t (o, r, l, d) {
			function f () {
				return t._.node("div", t._.node("div", t._.node("div", t._.node("div", T.component.nodes(b.open), x.box), x.wrap), x.frame), x.holder)
			}

			function h () {
				C.data(r, T).addClass(x.input).attr("tabindex", -1).val(C.data("value") ? T.get("select", w.format) : o.value), w.editable || C.on("focus." + b.id + " click." + b.id, function(e) {
					e.preventDefault(), T.$root.eq(0).focus()
				}).on("keydown." + b.id, v), a(o, {haspopup: !0, expanded: !1, readonly: !1, owns: o.id + "_root"})
			}

			function p () {
				T.$root.on({
					keydown: v, focusin: function(e) {
						T.$root.removeClass(x.focused), e.stopPropagation()
					}, "mousedown click": function(t) {
						var n = t.target;
						n != T.$root.children()[0] && (t.stopPropagation(), "mousedown" != t.type || e(n).is("input, select, textarea, button, option") || (t.preventDefault(), T.$root.eq(0).focus()))
					}
				}).on({
					focus: function() {
						C.addClass(x.target)
					}, blur: function() {
						C.removeClass(x.target)
					}
				}).on("focus.toOpen", g).on("click", "[data-pick], [data-nav], [data-clear], [data-close]", function() {
					var t = e(this), n = t.data(), i = t.hasClass(x.navDisabled) || t.hasClass(x.disabled), a = s();
					a = a && (a.type || a.href), (i || a && !e.contains(T.$root[0], a)) && T.$root.eq(0).focus(), !i && n.nav ? T.set("highlight", T.component.item.highlight, {nav: n.nav}) : !i && "pick" in n ? T.set("select", n.pick) : n.clear ? T.clear().close(!0) : n.close && T.close(!0)
				}), a(T.$root[0], "hidden", !0)
			}

			function m () {
				var t;
				w.hiddenName === !0 ? (t = o.name, o.name = "") : (t = ["string" == typeof w.hiddenPrefix ? w.hiddenPrefix : "", "string" == typeof w.hiddenSuffix ? w.hiddenSuffix : "_submit"], t = t[0] + o.name + t[1]), T._hidden = e('<input type=hidden name="' + t + '"' + (C.data("value") || o.value ? ' value="' + T.get("select", w.formatSubmit) + '"' : "") + ">")[0], C.on("change." + b.id, function() {
					T._hidden.value = o.value ? T.get("select", w.formatSubmit) : ""
				}), w.container ? e(w.container).append(T._hidden) : C.after(T._hidden)
			}

			function v (e) {
				var t = e.keyCode, n = /^(8|46)$/.test(t);
				return 27 == t ? (T.close(), !1) : void((32 == t || n || !b.open && T.component.key[t]) && (e.preventDefault(), e.stopPropagation(), n ? T.clear().close() : T.open()))
			}

			function g (e) {
				e.stopPropagation(), "focus" == e.type && T.$root.addClass(x.focused), T.open()
			}

			if(!o) return t;
			var y = !1, b = {id: o.id || "P" + Math.abs(~~(Math.random() * new Date))},
				w = l ? e.extend(!0, {}, l.defaults, d) : d || {}, x = e.extend({}, t.klasses(), w.klass), C = e(o),
				k = function() {
					return this.start()
				}, T = k.prototype = {
					constructor: k, $node: C, start: function() {
						return b && b.start ? T : (b.methods = {}, b.start = !0, b.open = !1, b.type = o.type, o.autofocus = o == s(), o.readOnly = !w.editable, o.id = o.id || b.id, "text" != o.type && (o.type = "text"), T.component = new l(T, w), T.$root = e(t._.node("div", f(), x.picker, 'id="' + o.id + '_root" tabindex="0"')), p(), w.formatSubmit && m(), h(), w.container ? e(w.container).append(T.$root) : C.after(T.$root), T.on({start: T.component.onStart, render: T.component.onRender, stop: T.component.onStop, open: T.component.onOpen, close: T.component.onClose, set: T.component.onSet}).on({start: w.onStart, render: w.onRender, stop: w.onStop, open: w.onOpen, close: w.onClose, set: w.onSet}), y = n(T.$root.children()[0]), o.autofocus && T.open(), T.trigger("start").trigger("render"))
					}, render: function(e) {
						return e ? T.$root.html(f()) : T.$root.find("." + x.box).html(T.component.nodes(b.open)), T.trigger("render")
					}, stop: function() {
						return b.start ? (T.close(), T._hidden && T._hidden.parentNode.removeChild(T._hidden), T.$root.remove(), C.removeClass(x.input).removeData(r), setTimeout(function() {
							C.off("." + b.id)
						}, 0), o.type = b.type, o.readOnly = !1, T.trigger("stop"), b.methods = {}, b.start = !1, T) : T
					}, open: function(n) {
						return b.open ? T : (C.addClass(x.active), a(o, "expanded", !0), setTimeout(function() {
							T.$root.addClass(x.opened), a(T.$root[0], "hidden", !1)
						}, 0), n !== !1 && (b.open = !0, y && c.css("overflow", "hidden").css("padding-right", "+=" + i()), T.$root.eq(0).focus(), u.on("click." + b.id + " focusin." + b.id, function(e) {
							var t = e.target;
							t != o && t != document && 3 != e.which && T.close(t === T.$root.children()[0])
						}).on("keydown." + b.id, function(n) {
							var i = n.keyCode, a = T.component.key[i], o = n.target;
							27 == i ? T.close(!0) : o != T.$root[0] || !a && 13 != i ? e.contains(T.$root[0], o) && 13 == i && (n.preventDefault(), o.click()) : (n.preventDefault(), a ? t._.trigger(T.component.key.go, T, [t._.trigger(a)]) : T.$root.find("." + x.highlighted).hasClass(x.disabled) || T.set("select", T.component.item.highlight).close())
						})), T.trigger("open"))
					}, close: function(e) {
						return e && (T.$root.off("focus.toOpen").eq(0).focus(), setTimeout(function() {
							T.$root.on("focus.toOpen", g)
						}, 0)), C.removeClass(x.active), a(o, "expanded", !1), setTimeout(function() {
							T.$root.removeClass(x.opened + " " + x.focused), a(T.$root[0], "hidden", !0)
						}, 0), b.open ? (b.open = !1, y && c.css("overflow", "").css("padding-right", "-=" + i()), u.off("." + b.id), T.trigger("close")) : T
					}, clear: function(e) {
						return T.set("clear", null, e)
					}, set: function(t, n, i) {
						var a, o, r = e.isPlainObject(t), s = r ? t : {};
						if(i = r && e.isPlainObject(n) ? n : i || {}, t)
						{
							r || (s[t] = n);
							for(a in s)
							{
								o = s[a], a in T.component.item && (void 0 === o && (o = null), T.component.set(a, o, i)), ("select" == a || "clear" == a) && C.val("clear" == a ? "" : T.get(a, w.format)).trigger("change");
							}
							T.render()
						}
						return i.muted ? T : T.trigger("set", s)
					}, get: function(e, n) {
						if(e = e || "value", null != b[e]) return b[e];
						if("valueSubmit" == e)
						{
							if(T._hidden) return T._hidden.value;
							e = "value"
						}
						if("value" == e) return o.value;
						if(e in T.component.item)
						{
							if("string" == typeof n)
							{
								var i = T.component.get(e);
								return i ? t._.trigger(T.component.formats.toString, T.component, [n, i]) : ""
							}
							return T.component.get(e)
						}
					}, on: function(t, n, i) {
						var a, o, r = e.isPlainObject(t), s = r ? t : {};
						if(t)
						{
							r || (s[t] = n);
							for(a in s)
							{
								o = s[a], i && (a = "_" + a), b.methods[a] = b.methods[a] || [], b.methods[a].push(o)
							}
						}
						return T
					}, off: function() {
						var e, t, n = arguments;
						for(e = 0, namesCount = n.length; e < namesCount; e += 1)
						{
							t = n[e], t in b.methods && delete b.methods[t];
						}
						return T
					}, trigger: function(e, n) {
						var i = function(e) {
							var i = b.methods[e];
							i && i.map(function(e) {
								t._.trigger(e, T, [n])
							})
						};
						return i("_" + e), i(e), T
					}
				};
			return new k
		}

		function n (e) {
			var t, n = "position";
			return e.currentStyle ? t = e.currentStyle[n] : window.getComputedStyle && (t = getComputedStyle(e)[n]), "fixed" == t
		}

		function i () {
			if(c.height() <= l.height()) return 0;
			var t = e('<div style="visibility:hidden;width:100px" />').appendTo("body"), n = t[0].offsetWidth;
			t.css("overflow", "scroll");
			var i = e('<div style="width:100%" />').appendTo(t), a = i[0].offsetWidth;
			return t.remove(), n - a
		}

		function a (t, n, i) {
			if(e.isPlainObject(n)) for(var a in n)
			{
				o(t, a, n[a]);
			}
			else o(t, n, i)
		}

		function o (e, t, n) {
			e.setAttribute(("role" == t ? "" : "aria-") + t, n)
		}

		function r (t, n) {
			e.isPlainObject(t) || (t = {attribute: n}), n = "";
			for(var i in t)
			{
				var a = ("role" == i ? "" : "aria-") + i, o = t[i];
				n += null == o ? "" : a + '="' + t[i] + '"'
			}
			return n
		}

		function s () {
			try
			{
				return document.activeElement
			} catch (e)
			{
			}
		}

		var l = e(window), u = e(document), c = e(document.documentElement);
		return t.klasses = function(e) {
			return e = e || "picker", {picker: e, opened: e + "--opened", focused: e + "--focused", input: e + "__input", active: e + "__input--active", target: e + "__input--target", holder: e + "__holder", frame: e + "__frame", wrap: e + "__wrap", box: e + "__box"}
		}, t._ = {
			group: function(e) {
				for(var n, i = "", a = t._.trigger(e.min, e); a <= t._.trigger(e.max, e, [a]); a += e.i)
				{
					n = t._.trigger(e.item, e, [a]), i += t._.node(e.node, n[0], n[1], n[2]);
				}
				return i
			}, node: function(t, n, i, a) {
				return n ? (n = e.isArray(n) ? n.join("") : n, i = i ? ' class="' + i + '"' : "", a = a ? " " + a : "", "<" + t + i + a + ">" + n + "</" + t + ">") : ""
			}, lead: function(e) {
				return (10 > e ? "0" : "") + e
			}, trigger: function(e, t, n) {
				return "function" == typeof e ? e.apply(t, n || []) : e
			}, digits: function(e) {
				return /\d/.test(e[1]) ? 2 : 1
			}, isDate: function(e) {
				return {}.toString.call(e).indexOf("Date") > -1 && this.isInteger(e.getDate())
			}, isInteger: function(e) {
				return {}.toString.call(e).indexOf("Number") > -1 && e % 1 === 0
			}, ariaAttr: r
		}, t.extend = function(n, i) {
			e.fn[n] = function(a, o) {
				var r = this.data(n);
				return "picker" == a ? r : r && "string" == typeof a ? t._.trigger(r[a], r, [o]) : this.each(function() {
					var o = e(this);
					o.data(n) || new t(this, n, i, a)
				})
			}, e.fn[n].defaults = i.defaults
		}, t
	}), /*!
 * Date picker for pickadate.js v3.5.0
 * http://amsul.github.io/pickadate.js/date.htm
 */
	function(e) {
		"function" == typeof define && define.amd ? define(["picker", "jquery"], e) : "object" == typeof exports ? module.exports = e(require("./picker.js"), require("jquery")) : e(Picker, jQuery)
	}(function(e, t) {
		function n (e, t) {
			var n = this, i = e.$node[0], a = i.value, o = e.$node.data("value"), r = o || a,
				s = o ? t.formatSubmit : t.format, l = function() {
					return i.currentStyle ? "rtl" == i.currentStyle.direction : "rtl" == getComputedStyle(e.$root[0]).direction
				};
			n.settings = t, n.$node = e.$node, n.queue = {min: "measure create", max: "measure create", now: "now create", select: "parse create validate", highlight: "parse navigate create validate", view: "parse create validate viewset", disable: "deactivate", enable: "activate"}, n.item = {}, n.item.clear = null, n.item.disable = (t.disable || []).slice(0), n.item.enable = -function(e) {
				return e[0] === !0 ? e.shift() : -1
			}(n.item.disable), n.set("min", t.min).set("max", t.max).set("now"), r ? n.set("select", r, {format: s}) : n.set("select", null).set("highlight", n.item.now), n.key = {
				40: 7, 38: -7, 39: function() {
					return l() ? -1 : 1
				}, 37: function() {
					return l() ? 1 : -1
				}, go: function(e) {
					var t = n.item.highlight, i = new Date(t.year, t.month, t.date + e);
					n.set("highlight", i, {interval: e}), this.render()
				}
			}, e.on("render", function() {
				e.$root.find("." + t.klass.selectMonth).on("change", function() {
					var n = this.value;
					n && (e.set("highlight", [e.get("view").year, n, e.get("highlight").date]), e.$root.find("." + t.klass.selectMonth).trigger("focus"))
				}), e.$root.find("." + t.klass.selectYear).on("change", function() {
					var n = this.value;
					n && (e.set("highlight", [n, e.get("view").month, e.get("highlight").date]), e.$root.find("." + t.klass.selectYear).trigger("focus"))
				})
			}, 1).on("open", function() {
				var i = "";
				n.disabled(n.get("now")) && (i = ":not(." + t.klass.buttonToday + ")"), e.$root.find("button" + i + ", select").attr("disabled", !1)
			}, 1).on("close", function() {
				e.$root.find("button, select").attr("disabled", !0)
			}, 1)
		}

		var i = 7, a = 6, o = e._;
		n.prototype.set = function(e, t, n) {
			var i = this, a = i.item;
			return null === t ? ("clear" == e && (e = "select"), a[e] = t, i) : (a["enable" == e ? "disable" : "flip" == e ? "enable" : e] = i.queue[e].split(" ").map(function(a) {
				return t = i[a](e, t, n)
			}).pop(), "select" == e ? i.set("highlight", a.select, n) : "highlight" == e ? i.set("view", a.highlight, n) : e.match(/^(flip|min|max|disable|enable)$/) && (a.select && i.disabled(a.select) && i.set("select", a.select, n), a.highlight && i.disabled(a.highlight) && i.set("highlight", a.highlight, n)), i)
		}, n.prototype.get = function(e) {
			return this.item[e]
		}, n.prototype.create = function(e, n, i) {
			var a, r = this;
			return n = void 0 === n ? e : n, n == -1 / 0 || 1 / 0 == n ? a = n : t.isPlainObject(n) && o.isInteger(n.pick) ? n = n.obj : t.isArray(n) ? (n = new Date(n[0], n[1], n[2]), n = o.isDate(n) ? n : r.create().obj) : n = o.isInteger(n) || o.isDate(n) ? r.normalize(new Date(n), i) : r.now(e, n, i), {year: a || n.getFullYear(), month: a || n.getMonth(), date: a || n.getDate(), day: a || n.getDay(), obj: a || n, pick: a || n.getTime()}
		}, n.prototype.createRange = function(e, n) {
			var i = this, a = function(e) {
				return e === !0 || t.isArray(e) || o.isDate(e) ? i.create(e) : e
			};
			return o.isInteger(e) || (e = a(e)), o.isInteger(n) || (n = a(n)), o.isInteger(e) && t.isPlainObject(n) ? e = [n.year, n.month, n.date + e] : o.isInteger(n) && t.isPlainObject(e) && (n = [e.year, e.month, e.date + n]), {from: a(e), to: a(n)}
		}, n.prototype.withinRange = function(e, t) {
			return e = this.createRange(e.from, e.to), t.pick >= e.from.pick && t.pick <= e.to.pick
		}, n.prototype.overlapRanges = function(e, t) {
			var n = this;
			return e = n.createRange(e.from, e.to), t = n.createRange(t.from, t.to), n.withinRange(e, t.from) || n.withinRange(e, t.to) || n.withinRange(t, e.from) || n.withinRange(t, e.to)
		}, n.prototype.now = function(e, t, n) {
			return t = new Date, n && n.rel && t.setDate(t.getDate() + n.rel), this.normalize(t, n)
		}, n.prototype.navigate = function(e, n, i) {
			var a, o, r, s, l = t.isArray(n), u = t.isPlainObject(n), c = this.item.view;
			if(l || u)
			{
				for(u ? (o = n.year, r = n.month, s = n.date) : (o = +n[0], r = +n[1], s = +n[2]), i && i.nav && c && c.month !== r && (o = c.year, r = c.month), a = new Date(o, r + (i && i.nav ? i.nav : 0), 1), o = a.getFullYear(), r = a.getMonth(); new Date(o, r, s).getMonth() !== r;)
				{
					s -= 1;
				}
				n = [o, r, s]
			}
			return n
		}, n.prototype.normalize = function(e) {
			return e.setHours(0, 0, 0, 0), e
		}, n.prototype.measure = function(e, t) {
			var n = this;
			return t ? "string" == typeof t ? t = n.parse(e, t) : o.isInteger(t) && (t = n.now(e, t, {rel: t})) : t = "min" == e ? -1 / 0 : 1 / 0, t
		}, n.prototype.viewset = function(e, t) {
			return this.create([t.year, t.month, 1])
		}, n.prototype.validate = function(e, n, i) {
			var a, r, s, l, u = this, c = n, d = i && i.interval ? i.interval : 1, f = -1 === u.item.enable,
				h = u.item.min, p = u.item.max, m = f && u.item.disable.filter(function(e) {
					if(t.isArray(e))
					{
						var i = u.create(e).pick;
						i < n.pick ? a = !0 : i > n.pick && (r = !0)
					}
					return o.isInteger(e)
				}).length;
			if((!i || !i.nav) && (!f && u.disabled(n) || f && u.disabled(n) && (m || a || r) || !f && (n.pick <= h.pick || n.pick >= p.pick))) for(f && !m && (!r && d > 0 || !a && 0 > d) && (d *= -1); u.disabled(n) && (Math.abs(d) > 1 && (n.month < c.month || n.month > c.month) && (n = c, d = d > 0 ? 1 : -1), n.pick <= h.pick ? (s = !0, d = 1, n = u.create([h.year, h.month, h.date + (n.pick === h.pick ? 0 : -1)])) : n.pick >= p.pick && (l = !0, d = -1, n = u.create([p.year, p.month, p.date + (n.pick === p.pick ? 0 : 1)])), !s || !l);)
			{
				n = u.create([n.year, n.month, n.date + d]);
			}
			return n
		}, n.prototype.disabled = function(e) {
			var n = this, i = n.item.disable.filter(function(i) {
				return o.isInteger(i) ? e.day === (n.settings.firstDay ? i : i - 1) % 7 : t.isArray(i) || o.isDate(i) ? e.pick === n.create(i).pick : t.isPlainObject(i) ? n.withinRange(i, e) : void 0
			});
			return i = i.length && !i.filter(function(e) {
				return t.isArray(e) && "inverted" == e[3] || t.isPlainObject(e) && e.inverted
			}).length, -1 === n.item.enable ? !i : i || e.pick < n.item.min.pick || e.pick > n.item.max.pick
		}, n.prototype.parse = function(e, t, n) {
			var i = this, a = {};
			return t && "string" == typeof t ? (n && n.format || (n = n || {}, n.format = i.settings.format), i.formats.toArray(n.format).map(function(e) {
				var n = i.formats[e], r = n ? o.trigger(n, i, [t, a]) : e.replace(/^!/, "").length;
				n && (a[e] = t.substr(0, r)), t = t.substr(r)
			}), [a.yyyy || a.yy, +(a.mm || a.m) - 1, a.dd || a.d]) : t
		}, n.prototype.formats = function() {
			function e (e, t, n) {
				var i = e.match(/\w+/)[0];
				return n.mm || n.m || (n.m = t.indexOf(i) + 1), i.length
			}

			function t (e) {
				return e.match(/\w+/)[0].length
			}

			return {
				d: function(e, t) {
					return e ? o.digits(e) : t.date
				}, dd: function(e, t) {
					return e ? 2 : o.lead(t.date)
				}, ddd: function(e, n) {
					return e ? t(e) : this.settings.weekdaysShort[n.day]
				}, dddd: function(e, n) {
					return e ? t(e) : this.settings.weekdaysFull[n.day]
				}, m: function(e, t) {
					return e ? o.digits(e) : t.month + 1
				}, mm: function(e, t) {
					return e ? 2 : o.lead(t.month + 1)
				}, mmm: function(t, n) {
					var i = this.settings.monthsShort;
					return t ? e(t, i, n) : i[n.month]
				}, mmmm: function(t, n) {
					var i = this.settings.monthsFull;
					return t ? e(t, i, n) : i[n.month]
				}, yy: function(e, t) {
					return e ? 2 : ("" + t.year).slice(2)
				}, yyyy: function(e, t) {
					return e ? 4 : t.year
				}, toArray: function(e) {
					return e.split(/(d{1,4}|m{1,4}|y{4}|yy|!.)/g)
				}, toString: function(e, t) {
					var n = this;
					return n.formats.toArray(e).map(function(e) {
						return o.trigger(n.formats[e], n, [0, t]) || e.replace(/^!/, "")
					}).join("")
				}
			}
		}(), n.prototype.isDateExact = function(e, n) {
			var i = this;
			return o.isInteger(e) && o.isInteger(n) || "boolean" == typeof e && "boolean" == typeof n ? e === n : (o.isDate(e) || t.isArray(e)) && (o.isDate(n) || t.isArray(n)) ? i.create(e).pick === i.create(n).pick : t.isPlainObject(e) && t.isPlainObject(n) ? i.isDateExact(e.from, n.from) && i.isDateExact(e.to, n.to) : !1
		}, n.prototype.isDateOverlap = function(e, n) {
			var i = this, a = i.settings.firstDay ? 1 : 0;
			return o.isInteger(e) && (o.isDate(n) || t.isArray(n)) ? (e = e % 7 + a, e === i.create(n).day + 1) : o.isInteger(n) && (o.isDate(e) || t.isArray(e)) ? (n = n % 7 + a, n === i.create(e).day + 1) : t.isPlainObject(e) && t.isPlainObject(n) ? i.overlapRanges(e, n) : !1
		}, n.prototype.flipEnable = function(e) {
			var t = this.item;
			t.enable = e || (-1 == t.enable ? 1 : -1)
		}, n.prototype.deactivate = function(e, n) {
			var i = this, a = i.item.disable.slice(0);
			return "flip" == n ? i.flipEnable() : n === !1 ? (i.flipEnable(1), a = []) : n === !0 ? (i.flipEnable(-1), a = []) : n.map(function(e) {
				for(var n, r = 0; r < a.length; r += 1)
				{
					if(i.isDateExact(e, a[r]))
					{
						n = !0;
						break
					}
				}
				n || (o.isInteger(e) || o.isDate(e) || t.isArray(e) || t.isPlainObject(e) && e.from && e.to) && a.push(e)
			}), a
		}, n.prototype.activate = function(e, n) {
			var i = this, a = i.item.disable, r = a.length;
			return "flip" == n ? i.flipEnable() : n === !0 ? (i.flipEnable(1), a = []) : n === !1 ? (i.flipEnable(-1), a = []) : n.map(function(e) {
				var n, s, l, u;
				for(l = 0; r > l; l += 1)
				{
					if(s = a[l], i.isDateExact(s, e))
					{
						n = a[l] = null, u = !0;
						break
					}
					if(i.isDateOverlap(s, e))
					{
						t.isPlainObject(e) ? (e.inverted = !0, n = e) : t.isArray(e) ? (n = e, n[3] || n.push("inverted")) : o.isDate(e) && (n = [e.getFullYear(), e.getMonth(), e.getDate(), "inverted"]);
						break
					}
				}
				if(n) for(l = 0; r > l; l += 1)
				{
					if(i.isDateExact(a[l], e))
					{
						a[l] = null;
						break
					}
				}
				if(u) for(l = 0; r > l; l += 1)
				{
					if(i.isDateOverlap(a[l], e))
					{
						a[l] = null;
						break
					}
				}
				n && a.push(n)
			}), a.filter(function(e) {
				return null != e
			})
		}, n.prototype.nodes = function(e) {
			var t = this, n = t.settings, r = t.item, s = r.now, l = r.select, u = r.highlight, c = r.view,
				d = r.disable, f = r.min, h = r.max, p = function(e, t) {
					return n.firstDay && (e.push(e.shift()), t.push(t.shift())), o.node("thead", o.node("tr", o.group({
						min: 0, max: i - 1, i: 1, node: "th", item: function(i) {
							return [e[i], n.klass.weekdays, 'scope=col title="' + t[i] + '"']
						}
					})))
				}((n.showWeekdaysFull ? n.weekdaysFull : n.weekdaysLetter).slice(0), n.weekdaysFull.slice(0)),
				m = function(e) {
					return o.node("div", " ", n.klass["nav" + (e ? "Next" : "Prev")] + (e && c.year >= h.year && c.month >= h.month || !e && c.year <= f.year && c.month <= f.month ? " " + n.klass.navDisabled : ""), "data-nav=" + (e || -1) + " " + o.ariaAttr({role: "button", controls: t.$node[0].id + "_table"}) + ' title="' + (e ? n.labelMonthNext : n.labelMonthPrev) + '"')
				}, v = function(i) {
					var a = n.showMonthsShort ? n.monthsShort : n.monthsFull;
					return "short_months" == i && (a = n.monthsShort), n.selectMonths && void 0 == i ? o.node("select", o.group({
						min: 0, max: 11, i: 1, node: "option", item: function(e) {
							return [a[e], 0, "value=" + e + (c.month == e ? " selected" : "") + (c.year == f.year && e < f.month || c.year == h.year && e > h.month ? " disabled" : "")]
						}
					}), n.klass.selectMonth + " browser-default", (e ? "" : "disabled") + " " + o.ariaAttr({controls: t.$node[0].id + "_table"}) + ' title="' + n.labelMonthSelect + '"') : "short_months" == i ? null != l ? o.node("div", a[l.month]) : o.node("div", a[c.month]) : o.node("div", a[c.month], n.klass.month)
				}, g = function(i) {
					var a = c.year, r = n.selectYears === !0 ? 5 : ~~(n.selectYears / 2);
					if(r)
					{
						var s = f.year, l = h.year, u = a - r, d = a + r;
						if(s > u && (d += s - u, u = s), d > l)
						{
							var p = u - s, m = d - l;
							u -= p > m ? m : p, d = l
						}
						if(n.selectYears && void 0 == i) return o.node("select", o.group({
							min: u, max: d, i: 1, node: "option", item: function(e) {
								return [e, 0, "value=" + e + (a == e ? " selected" : "")]
							}
						}), n.klass.selectYear + " browser-default", (e ? "" : "disabled") + " " + o.ariaAttr({controls: t.$node[0].id + "_table"}) + ' title="' + n.labelYearSelect + '"')
					}
					return "raw" == i ? o.node("div", a) : o.node("div", a, n.klass.year)
				};
			return createDayLabel = function() {
				return null != l ? o.node("div", l.date) : o.node("div", s.date)
			}, createWeekdayLabel = function() {
				var e;
				e = null != l ? l.day : s.day;
				var t = n.weekdaysFull[e];
				return t
			}, o.node("div", o.node("div", createWeekdayLabel(), "picker__weekday-display") + o.node("div", v("short_months"), n.klass.month_display) + o.node("div", createDayLabel(), n.klass.day_display) + o.node("div", g("raw"), n.klass.year_display), n.klass.date_display) + o.node("div", o.node("div", (n.selectYears ? v() + g() : v() + g()) + m() + m(1), n.klass.header) + o.node("table", p + o.node("tbody", o.group({
				min: 0, max: a - 1, i: 1, node: "tr", item: function(e) {
					var a = n.firstDay && 0 === t.create([c.year, c.month, 1]).day ? -7 : 0;
					return [o.group({
						min: i * e - c.day + a + 1, max: function() {
							return this.min + i - 1
						}, i: 1, node: "td", item: function(e) {
							e = t.create([c.year, c.month, e + (n.firstDay ? 1 : 0)]);
							var i = l && l.pick == e.pick, a = u && u.pick == e.pick,
								r = d && t.disabled(e) || e.pick < f.pick || e.pick > h.pick,
								p = o.trigger(t.formats.toString, t, [n.format, e]);
							return [o.node("div", e.date, function(t) {
								return t.push(c.month == e.month ? n.klass.infocus : n.klass.outfocus), s.pick == e.pick && t.push(n.klass.now), i && t.push(n.klass.selected), a && t.push(n.klass.highlighted), r && t.push(n.klass.disabled), t.join(" ")
							}([n.klass.day]), "data-pick=" + e.pick + " " + o.ariaAttr({role: "gridcell", label: p, selected: i && t.$node.val() === p ? !0 : null, activedescendant: a ? !0 : null, disabled: r ? !0 : null})), "", o.ariaAttr({role: "presentation"})]
						}
					})]
				}
			})), n.klass.table, 'id="' + t.$node[0].id + '_table" ' + o.ariaAttr({role: "grid", controls: t.$node[0].id, readonly: !0})), n.klass.calendar_container) + o.node("div", o.node("button", n.today, "btn-flat picker__today", "type=button data-pick=" + s.pick + (e && !t.disabled(s) ? "" : " disabled") + " " + o.ariaAttr({controls: t.$node[0].id})) + o.node("button", n.clear, "btn-flat picker__clear", "type=button data-clear=1" + (e ? "" : " disabled") + " " + o.ariaAttr({controls: t.$node[0].id})) + o.node("button", n.close, "btn-flat picker__close", "type=button data-close=true " + (e ? "" : " disabled") + " " + o.ariaAttr({controls: t.$node[0].id})), n.klass.footer)
		}, n.defaults = function(e) {
			return {labelMonthNext: "Next month", labelMonthPrev: "Previous month", labelMonthSelect: "Select a month", labelYearSelect: "Select a year", monthsFull: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], weekdaysFull: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], weekdaysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], weekdaysLetter: ["S", "M", "T", "W", "T", "F", "S"], today: "Today", clear: "Clear", close: "Close", format: "d mmmm, yyyy", klass: {table: e + "table", header: e + "header", date_display: e + "date-display", day_display: e + "day-display", month_display: e + "month-display", year_display: e + "year-display", calendar_container: e + "calendar-container", navPrev: e + "nav--prev", navNext: e + "nav--next", navDisabled: e + "nav--disabled", month: e + "month", year: e + "year", selectMonth: e + "select--month", selectYear: e + "select--year", weekdays: e + "weekday", day: e + "day", disabled: e + "day--disabled", selected: e + "day--selected", highlighted: e + "day--highlighted", now: e + "day--today", infocus: e + "day--infocus", outfocus: e + "day--outfocus", footer: e + "footer", buttonClear: e + "button--clear", buttonToday: e + "button--today", buttonClose: e + "button--close"}}
		}(e.klasses().picker + "__"), e.extend("pickadate", n)
	}), function(e) {
	function t () {
		var t = +e(this).attr("length"), n = +e(this).val().length, i = t >= n;
		e(this).parent().find('span[class="character-counter"]').html(n + "/" + t), a(i, e(this))
	}

	function n (t) {
		var n = t.parent().find('span[class="character-counter"]');
		n.length || (n = e("<span/>").addClass("character-counter").css("float", "right").css("font-size", "12px").css("height", 1), t.parent().append(n))
	}

	function i () {
		e(this).parent().find('span[class="character-counter"]').html("")
	}

	function a (e, t) {
		var n = t.hasClass("invalid");
		e && n ? t.removeClass("invalid") : e || n || (t.removeClass("valid"), t.addClass("invalid"))
	}

	e.fn.characterCounter = function() {
		return this.each(function() {
			var a = e(this), o = a.parent().find('span[class="character-counter"]');
			if(!o.length)
			{
				var r = void 0 !== a.attr("length");
				r && (a.on("input", t), a.on("focus", t), a.on("blur", i), n(a))
			}
		})
	}, e(document).ready(function() {
		e("input, textarea").characterCounter()
	})
}(jQuery), function(e) {
	var t = {
		init: function(t) {
			var n = {time_constant: 200, dist: -100, shift: 0, padding: 0, full_width: !1, indicators: !1, no_wrap: !1};
			return t = e.extend(n, t), this.each(function() {
				function n () {
					"undefined" != typeof window.ontouchstart && (D[0].addEventListener("touchstart", d), D[0].addEventListener("touchmove", f), D[0].addEventListener("touchend", h)), D[0].addEventListener("mousedown", d), D[0].addEventListener("mousemove", f), D[0].addEventListener("mouseup", h), D[0].addEventListener("mouseleave", h), D[0].addEventListener("click", u)
				}

				function i (e) {
					return e.targetTouches && e.targetTouches.length >= 1 ? e.targetTouches[0].clientX : e.clientX
				}

				function a (e) {
					return e.targetTouches && e.targetTouches.length >= 1 ? e.targetTouches[0].clientY : e.clientY
				}

				function o (e) {
					return e >= w ? e % w : 0 > e ? o(w + e % w) : e
				}

				function r (e) {
					var n, i, a, r, s, l, u;
					if(m = "number" == typeof e ? e : m, v = Math.floor((m + b / 2) / b), a = m - v * b, r = 0 > a ? 1 : -1, s = -r * a * 2 / b, i = w >> 1, t.full_width ? u = "translateX(0)" : (u = "translateX(" + (D[0].clientWidth - item_width) / 2 + "px) ", u += "translateY(" + (D[0].clientHeight - item_width) / 2 + "px)"), j)
					{
						var c = v % w, d = P.find(".indicator-item.active");
						d.index() !== c && (d.removeClass("active"), P.find(".indicator-item").eq(c).addClass("active"))
					}
					for((!t.no_wrap || v >= 0 && w > v) && (l = p[o(v)], l.style[A] = u + " translateX(" + -a / 2 + "px) translateX(" + r * t.shift * s * n + "px) translateZ(" + t.dist * s + "px)", l.style.zIndex = 0, tweenedOpacity = t.full_width ? 1 : 1 - .2 * s, l.style.opacity = tweenedOpacity, l.style.display = "block"), n = 1; i >= n; ++n)
					{
						t.full_width ? (zTranslation = t.dist, tweenedOpacity = n === i && 0 > a ? 1 - s : 1) : (zTranslation = t.dist * (2 * n + s * r), tweenedOpacity = 1 - .2 * (2 * n + s * r)), (!t.no_wrap || w > v + n) && (l = p[o(v + n)], l.style[A] = u + " translateX(" + (t.shift + (b * n - a) / 2) + "px) translateZ(" + zTranslation + "px)", l.style.zIndex = -n, l.style.opacity = tweenedOpacity, l.style.display = "block"), t.full_width ? (zTranslation = t.dist, tweenedOpacity = n === i && a > 0 ? 1 - s : 1) : (zTranslation = t.dist * (2 * n - s * r), tweenedOpacity = 1 - .2 * (2 * n - s * r)), (!t.no_wrap || v - n >= 0) && (l = p[o(v - n)], l.style[A] = u + " translateX(" + (-t.shift + (-b * n - a) / 2) + "px) translateZ(" + zTranslation + "px)", l.style.zIndex = -n, l.style.opacity = tweenedOpacity, l.style.display = "block");
					}
					(!t.no_wrap || v >= 0 && w > v) && (l = p[o(v)], l.style[A] = u + " translateX(" + -a / 2 + "px) translateX(" + r * t.shift * s + "px) translateZ(" + t.dist * s + "px)", l.style.zIndex = 0, tweenedOpacity = t.full_width ? 1 : 1 - .2 * s, l.style.opacity = tweenedOpacity, l.style.display = "block")
				}

				function s () {
					var e, t, n, i;
					e = Date.now(), t = e - E, E = e, n = m - $, $ = m, i = 1e3 * n / (1 + t), S = .8 * i + .2 * S
				}

				function l () {
					var e, n;
					k && (e = Date.now() - E, n = k * Math.exp(-e / t.time_constant), n > 2 || -2 > n ? (r(T - n), requestAnimationFrame(l)) : r(T))
				}

				function u (n) {
					if(_) return n.preventDefault(), n.stopPropagation(), !1;
					if(!t.full_width)
					{
						var i = e(n.target).closest(".carousel-item").index(), a = v % w - i;
						0 !== a && (n.preventDefault(), n.stopPropagation()), c(i)
					}
				}

				function c (e) {
					var n = v % w - e;
					t.no_wrap || (0 > n ? Math.abs(n + w) < Math.abs(n) && (n += w) : n > 0 && Math.abs(n - w) < n && (n -= w)), 0 > n ? D.trigger("carouselNext", [Math.abs(n)]) : n > 0 && D.trigger("carouselPrev", [n])
				}

				function d (e) {
					g = !0, _ = !1, O = !1, x = i(e), C = a(e), S = k = 0, $ = m, E = Date.now(), clearInterval(F), F = setInterval(s, 100)
				}

				function f (e) {
					var t, n, o;
					if(g) if(t = i(e), y = a(e), n = x - t, o = Math.abs(C - y), 30 > o && !O) (n > 2 || -2 > n) && (_ = !0, x = t, r(m + n));
					else
					{
						if(_) return e.preventDefault(), e.stopPropagation(), !1;
						O = !0
					}
					return _ ? (e.preventDefault(), e.stopPropagation(), !1) : void 0
				}

				function h (e) {
					return g ? (g = !1, clearInterval(F), T = m, (S > 10 || -10 > S) && (k = .9 * S, T = m + k), T = Math.round(T / b) * b, t.no_wrap && (T >= b * (w - 1) ? T = b * (w - 1) : 0 > T && (T = 0)), k = T - m, E = Date.now(), requestAnimationFrame(l), _ && (e.preventDefault(), e.stopPropagation()), !1) : void 0
				}

				var p, m, v, g, b, w, x, C, k, T, S, A, $, E, F, _, O, P = e('<ul class="indicators"></ul>'),
					D = e(this), j = D.attr("data-indicators") || t.indicators;
				if(D.hasClass("initialized")) return e(this).trigger("carouselNext", [1e-6]), !0;
				if(t.full_width)
				{
					t.dist = 0;
					var z = D.find(".carousel-item img").first();
					z.length ? imageHeight = z.on("load", function() {
						D.css("height", e(this).height())
					}) : (imageHeight = D.find(".carousel-item").first().height(), D.css("height", imageHeight)), j && D.find(".carousel-fixed-item").addClass("with-indicators")
				}
				D.addClass("initialized"), g = !1, m = T = 0, p = [], item_width = D.find(".carousel-item").first().innerWidth(), b = 2 * item_width + t.padding, D.find(".carousel-item").each(function(t) {
					if(p.push(e(this)[0]), j)
					{
						var n = e('<li class="indicator-item"></li>');
						0 === t && n.addClass("active"), n.click(function() {
							var t = e(this).index();
							c(t)
						}), P.append(n)
					}
				}), j && D.append(P), w = p.length, A = "transform", ["webkit", "Moz", "O", "ms"].every(function(e) {
					var t = e + "Transform";
					return "undefined" != typeof document.body.style[t] ? (A = t, !1) : !0
				}), window.onresize = r, n(), r(m), e(this).on("carouselNext", function(e, t) {
					void 0 === t && (t = 1), T = m + b * t, m !== T && (k = T - m, E = Date.now(), requestAnimationFrame(l))
				}), e(this).on("carouselPrev", function(e, t) {
					void 0 === t && (t = 1), T = m - b * t, m !== T && (k = T - m, E = Date.now(), requestAnimationFrame(l))
				}), e(this).on("carouselSet", function(e, t) {
					void 0 === t && (t = 0), c(t)
				})
			})
		}, next: function(t) {
			e(this).trigger("carouselNext", [t])
		}, prev: function(t) {
			e(this).trigger("carouselPrev", [t])
		}, set: function(t) {
			e(this).trigger("carouselSet", [t])
		}
	};
	e.fn.carousel = function(n) {
		return t[n] ? t[n].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof n && n ? void e.error("Method " + n + " does not exist on jQuery.carousel") : t.init.apply(this, arguments)
	}
}(jQuery), function(e, t, n) {
	"use strict";

	function i (t, m, v) {
		function I (n) {
			var i = 0, a = Pt.length;
			if(Tt.old = e.extend({}, Tt), Ct = bt ? 0 : wt[gt.horizontal ? "width" : "height"](), $t = St[gt.horizontal ? "width" : "height"](), kt = bt ? t : xt[gt.horizontal ? "outerWidth" : "outerHeight"](), Pt.length = 0, Tt.start = 0, Tt.end = D(kt - Ct, 0), Wt)
			{
				i = jt.length, Dt = xt.children(gt.itemSelector), jt.length = 0;
				var o, r = u(xt, gt.horizontal ? "paddingLeft" : "paddingTop"),
					s = u(xt, gt.horizontal ? "paddingRight" : "paddingBottom"),
					l = "border-box" === e(Dt).css("boxSizing"), d = "none" !== Dt.css("float"), f = 0,
					h = Dt.length - 1;
				kt = 0, Dt.each(function(t, n) {
					var i = e(n), a = n.getBoundingClientRect(),
						l = P(gt.horizontal ? a.width || a.right - a.left : a.height || a.bottom - a.top),
						c = u(i, gt.horizontal ? "marginLeft" : "marginTop"),
						p = u(i, gt.horizontal ? "marginRight" : "marginBottom"), m = l + c + p, v = !c || !p, g = {};
					g.el = n, g.size = v ? l : m, g.half = g.size / 2, g.start = kt + (v ? c : 0), g.center = g.start - P(Ct / 2 - g.size / 2), g.end = g.start - Ct + g.size, t || (kt += r), kt += m, gt.horizontal || d || p && c && t > 0 && (kt -= j(c, p)), t === h && (g.end += s, kt += s, f = v ? p : 0), jt.push(g), o = g
				}), xt[0].style[gt.horizontal ? "width" : "height"] = (l ? kt : kt - r - s) + "px", kt -= f, jt.length ? (Tt.start = jt[0][Mt ? "center" : "start"], Tt.end = Mt ? o.center : kt > Ct ? o.end : Tt.start) : Tt.start = Tt.end = 0
			}
			if(Tt.center = P(Tt.end / 2 + Tt.start / 2), X(), At.length && $t > 0 && (gt.dynamicHandle ? (Et = Tt.start === Tt.end ? $t : P($t * Ct / kt), Et = c(Et, gt.minHandleSize, $t), At[0].style[gt.horizontal ? "width" : "height"] = Et + "px") : Et = At[gt.horizontal ? "outerWidth" : "outerHeight"](), Ft.end = $t - Et, on || L()), !bt && Ct > 0)
			{
				var p = Tt.start, m = "";
				if(Wt) e.each(jt, function(e, t) {
					Mt ? Pt.push(t.center) : t.start + t.size > p && p <= Tt.end && (p = t.start, Pt.push(p), p += Ct, p > Tt.end && p < Tt.end + Ct && Pt.push(Tt.end))
				});
				else for(; p - Ct < Tt.end;)
				{
					Pt.push(p), p += Ct;
				}
				if(_t[0] && a !== Pt.length)
				{
					for(var v = 0; v < Pt.length; v++)
					{
						m += gt.pageBuilder.call(yt, v);
					}
					Ot = _t.html(m).children(), Ot.eq(zt.activePage).addClass(gt.activeClass)
				}
			}
			if(zt.slideeSize = kt, zt.frameSize = Ct, zt.sbSize = $t, zt.handleSize = Et, Wt)
			{
				n && null != gt.startAt && (B(gt.startAt), yt[Ht ? "toCenter" : "toStart"](gt.startAt));
				var g = jt[zt.activeItem];
				q(Ht && g ? g.center : c(Tt.dest, Tt.start, Tt.end))
			}
			else n ? null != gt.startAt && q(gt.startAt, 1) : q(c(Tt.dest, Tt.start, Tt.end));
			pt("load")
		}

		function q (e, t, n) {
			if(Wt && nn.released && !n)
			{
				var i = Q(e), a = e > Tt.start && e < Tt.end;
				Ht ? (a && (e = jt[i.centerItem].center), Mt && gt.activateMiddle && B(i.centerItem)) : a && (e = jt[i.firstItem].start)
			}
			nn.init && nn.slidee && gt.elasticBounds ? e > Tt.end ? e = Tt.end + (e - Tt.end) / 6 : e < Tt.start && (e = Tt.start + (e - Tt.start) / 6) : e = c(e, Tt.start, Tt.end), en.start = +new Date, en.time = 0, en.from = Tt.cur, en.to = e, en.delta = e - Tt.cur, en.tweesing = nn.tweese || nn.init && !nn.slidee, en.immediate = !en.tweesing && (t || nn.init && nn.slidee || !gt.speed), nn.tweese = 0, e !== Tt.dest && (Tt.dest = e, pt("change"), on || R()), K(), X(), Y(), N()
		}

		function R () {
			if(yt.initialized)
			{
				if(!on) return on = b(R), void(nn.released && pt("moveStart"));
				en.immediate ? Tt.cur = en.to : en.tweesing ? (en.tweeseDelta = en.to - Tt.cur, F(en.tweeseDelta) < .1 ? Tt.cur = en.to : Tt.cur += en.tweeseDelta * (nn.released ? gt.swingSpeed : gt.syncSpeed)) : (en.time = j(+new Date - en.start, gt.speed), Tt.cur = en.from + en.delta * e.easing[gt.easing](en.time / gt.speed, en.time, 0, 1, gt.speed)), en.to === Tt.cur ? (Tt.cur = en.to, nn.tweese = on = 0) : on = b(R), pt("move"), bt || (f ? xt[0].style[f] = h + (gt.horizontal ? "translateX" : "translateY") + "(" + -Tt.cur + "px)" : xt[0].style[gt.horizontal ? "left" : "top"] = -P(Tt.cur) + "px"), !on && nn.released && pt("moveEnd"), L()
			}
		}

		function L () {
			At.length && (Ft.cur = Tt.start === Tt.end ? 0 : ((nn.init && !nn.slidee ? Tt.dest : Tt.cur) - Tt.start) / (Tt.end - Tt.start) * Ft.end, Ft.cur = c(P(Ft.cur), Ft.start, Ft.end), Jt.hPos !== Ft.cur && (Jt.hPos = Ft.cur, f ? At[0].style[f] = h + (gt.horizontal ? "translateX" : "translateY") + "(" + Ft.cur + "px)" : At[0].style[gt.horizontal ? "left" : "top"] = Ft.cur + "px"))
		}

		function N () {
			Ot[0] && Jt.page !== zt.activePage && (Jt.page = zt.activePage, Ot.removeClass(gt.activeClass).eq(zt.activePage).addClass(gt.activeClass), pt("activePage", Jt.page))
		}

		function M () {
			tn.speed && Tt.cur !== (tn.speed > 0 ? Tt.end : Tt.start) || yt.stop(), ln = nn.init ? b(M) : 0, tn.now = +new Date, tn.pos = Tt.cur + (tn.now - tn.lastTime) / 1e3 * tn.speed, q(nn.init ? tn.pos : P(tn.pos)), nn.init || Tt.cur !== Tt.dest || pt("moveEnd"), tn.lastTime = tn.now
		}

		function H (e, t, i) {
			if("boolean" === a(t) && (i = t, t = n), t === n) q(Tt[e], i);
			else
			{
				if(Ht && "center" !== e) return;
				var o = yt.getPos(t);
				o && q(o[e], i, !Ht)
			}
		}

		function W (e) {
			return null != e ? l(e) ? e >= 0 && e < jt.length ? e : -1 : Dt.index(e) : -1
		}

		function V (e) {
			return W(l(e) && 0 > e ? e + jt.length : e)
		}

		function B (e, t) {
			var n = W(e);
			return !Wt || 0 > n ? !1 : ((Jt.active !== n || t) && (Dt.eq(zt.activeItem).removeClass(gt.activeClass), Dt.eq(n).addClass(gt.activeClass), Jt.active = zt.activeItem = n, Y(), pt("active", n)), n)
		}

		function Q (e) {
			e = c(l(e) ? e : Tt.dest, Tt.start, Tt.end);
			var t = {}, n = Mt ? 0 : Ct / 2;
			if(!bt) for(var i = 0, a = Pt.length; a > i; i++)
			{
				if(e >= Tt.end || i === Pt.length - 1)
				{
					t.activePage = Pt.length - 1;
					break
				}
				if(e <= Pt[i] + n)
				{
					t.activePage = i;
					break
				}
			}
			if(Wt)
			{
				for(var o = !1, r = !1, s = !1, u = 0, d = jt.length; d > u; u++)
				{
					if(o === !1 && e <= jt[u].start + jt[u].half && (o = u), s === !1 && e <= jt[u].center + jt[u].half && (s = u), u === d - 1 || e <= jt[u].end + jt[u].half)
					{
						r = u;
						break
					}
				}
				t.firstItem = l(o) ? o : 0, t.centerItem = l(s) ? s : t.firstItem, t.lastItem = l(r) ? r : t.centerItem
			}
			return t
		}

		function X (t) {
			e.extend(zt, Q(t))
		}

		function Y () {
			var e = Tt.dest <= Tt.start, t = Tt.dest >= Tt.end, n = (e ? 1 : 0) | (t ? 2 : 0);
			if(Jt.slideePosState !== n && (Jt.slideePosState = n, Gt.is("button,input") && Gt.prop("disabled", e), Kt.is("button,input") && Kt.prop("disabled", t), Gt.add(Xt)[e ? "addClass" : "removeClass"](gt.disabledClass), Kt.add(Qt)[t ? "addClass" : "removeClass"](gt.disabledClass)), Jt.fwdbwdState !== n && nn.released && (Jt.fwdbwdState = n, Xt.is("button,input") && Xt.prop("disabled", e), Qt.is("button,input") && Qt.prop("disabled", t)), Wt && null != zt.activeItem)
			{
				var i = 0 === zt.activeItem, a = zt.activeItem >= jt.length - 1, o = (i ? 1 : 0) | (a ? 2 : 0);
				Jt.itemsButtonState !== o && (Jt.itemsButtonState = o, Yt.is("button,input") && Yt.prop("disabled", i), Ut.is("button,input") && Ut.prop("disabled", a), Yt[i ? "addClass" : "removeClass"](gt.disabledClass), Ut[a ? "addClass" : "removeClass"](gt.disabledClass))
			}
		}

		function U (e, t, n) {
			if(e = V(e), t = V(t), e > -1 && t > -1 && e !== t && (!n || t !== e - 1) && (n || t !== e + 1))
			{
				Dt.eq(e)[n ? "insertAfter" : "insertBefore"](jt[t].el);
				var i = t > e ? e : n ? t : t - 1, a = e > t ? e : n ? t + 1 : t, o = e > t;
				null != zt.activeItem && (e === zt.activeItem ? Jt.active = zt.activeItem = n ? o ? t + 1 : t : o ? t : t - 1 : zt.activeItem > i && zt.activeItem < a && (Jt.active = zt.activeItem += o ? 1 : -1)), I()
			}
		}

		function G (e, t) {
			for(var n = 0, i = Zt[e].length; i > n; n++)
			{
				if(Zt[e][n] === t) return n;
			}
			return -1
		}

		function K () {
			nn.released && !yt.isPaused && yt.resume()
		}

		function Z (e) {
			return P(c(e, Ft.start, Ft.end) / Ft.end * (Tt.end - Tt.start)) + Tt.start
		}

		function J () {
			nn.history[0] = nn.history[1], nn.history[1] = nn.history[2], nn.history[2] = nn.history[3], nn.history[3] = nn.delta
		}

		function et (e) {
			nn.released = 0, nn.source = e, nn.slidee = "slidee" === e
		}

		function tt (t) {
			var n = "touchstart" === t.type, i = t.data.source, a = "slidee" === i;
			nn.init || !n && at(t.target) || ("handle" !== i || gt.dragHandle && Ft.start !== Ft.end) && (!a || (n ? gt.touchDragging : gt.mouseDragging && t.which < 2)) && (n || o(t), et(i), nn.init = 0, nn.$source = e(t.target), nn.touch = n, nn.pointer = n ? t.originalEvent.touches[0] : t, nn.initX = nn.pointer.pageX, nn.initY = nn.pointer.pageY, nn.initPos = a ? Tt.cur : Ft.cur, nn.start = +new Date, nn.time = 0, nn.path = 0, nn.delta = 0, nn.locked = 0, nn.history = [0, 0, 0, 0], nn.pathToLock = a ? n ? 30 : 10 : 0, w.on(n ? k : C, nt), yt.pause(1), (a ? xt : At).addClass(gt.draggedClass), pt("moveStart"), a && (rn = setInterval(J, 10)))
		}

		function nt (e) {
			if(nn.released = "mouseup" === e.type || "touchend" === e.type, nn.pointer = nn.touch ? e.originalEvent[nn.released ? "changedTouches" : "touches"][0] : e, nn.pathX = nn.pointer.pageX - nn.initX, nn.pathY = nn.pointer.pageY - nn.initY, nn.path = _(O(nn.pathX, 2) + O(nn.pathY, 2)), nn.delta = gt.horizontal ? nn.pathX : nn.pathY, nn.released || !(nn.path < 1))
			{
				if(!nn.init)
				{
					if(nn.path < gt.dragThreshold) return nn.released ? it() : n;
					if(!(gt.horizontal ? F(nn.pathX) > F(nn.pathY) : F(nn.pathX) < F(nn.pathY))) return it();
					nn.init = 1
				}
				o(e), !nn.locked && nn.path > nn.pathToLock && nn.slidee && (nn.locked = 1, nn.$source.on(S, r)), nn.released && (it(), gt.releaseSwing && nn.slidee && (nn.swing = (nn.delta - nn.history[0]) / 40 * 300, nn.delta += nn.swing, nn.tweese = F(nn.swing) > 10)), q(nn.slidee ? P(nn.initPos - nn.delta) : Z(nn.initPos + nn.delta))
			}
		}

		function it () {
			clearInterval(rn), nn.released = !0, w.off(nn.touch ? k : C, nt), (nn.slidee ? xt : At).removeClass(gt.draggedClass), setTimeout(function() {
				nn.$source.off(S, r)
			}), Tt.cur === Tt.dest && nn.init && pt("moveEnd"), yt.resume(1), nn.init = 0
		}

		function at (t) {
			return ~e.inArray(t.nodeName, $) || e(t).is(gt.interactive)
		}

		function ot () {
			yt.stop(), w.off("mouseup", ot)
		}

		function rt (e) {
			switch(o(e), this)
			{
				case Qt[0]:
				case Xt[0]:
					yt.moveBy(Qt.is(this) ? gt.moveBy : -gt.moveBy), w.on("mouseup", ot);
					break;
				case Yt[0]:
					yt.prev();
					break;
				case Ut[0]:
					yt.next();
					break;
				case Gt[0]:
					yt.prevPage();
					break;
				case Kt[0]:
					yt.nextPage()
			}
		}

		function st (e) {
			return an.curDelta = (gt.horizontal ? e.deltaY || e.deltaX : e.deltaY) || -e.wheelDelta, an.curDelta /= 1 === e.deltaMode ? 3 : 100, Wt ? (p = +new Date, an.last < p - an.resetTime && (an.delta = 0), an.last = p, an.delta += an.curDelta, F(an.delta) < 1 ? an.finalDelta = 0 : (an.finalDelta = P(an.delta / 1), an.delta %= 1), an.finalDelta) : an.curDelta
		}

		function lt (e) {
			e.originalEvent[g] = yt;
			var t = +new Date;
			if(z + gt.scrollHijack > t && Vt[0] !== document && Vt[0] !== window) return void(z = t);
			if(gt.scrollBy && Tt.start !== Tt.end)
			{
				var n = st(e.originalEvent);
				(gt.scrollTrap || n > 0 && Tt.dest < Tt.end || 0 > n && Tt.dest > Tt.start) && o(e, 1), yt.slideBy(gt.scrollBy * n)
			}
		}

		function ut (e) {
			gt.clickBar && e.target === St[0] && (o(e), q(Z((gt.horizontal ? e.pageX - St.offset().left : e.pageY - St.offset().top) - Et / 2)))
		}

		function ct (e) {
			if(gt.keyboardNavBy) switch(e.which)
			{
				case gt.horizontal ? 37 : 38:
					o(e), yt["pages" === gt.keyboardNavBy ? "prevPage" : "prev"]();
					break;
				case gt.horizontal ? 39 : 40:
					o(e), yt["pages" === gt.keyboardNavBy ? "nextPage" : "next"]()
			}
		}

		function dt (e) {
			return at(this) ? void(e.originalEvent[g + "ignore"] = !0) : void(this.parentNode !== xt[0] || e.originalEvent[g + "ignore"] || yt.activate(this))
		}

		function ft () {
			this.parentNode === _t[0] && yt.activatePage(Ot.index(this))
		}

		function ht (e) {
			gt.pauseOnHover && yt["mouseenter" === e.type ? "pause" : "resume"](2)
		}

		function pt (e, t) {
			if(Zt[e])
			{
				for(vt = Zt[e].length, E.length = 0, mt = 0; vt > mt; mt++)
				{
					E.push(Zt[e][mt]);
				}
				for(mt = 0; vt > mt; mt++)
				{
					E[mt].call(yt, e, t)
				}
			}
		}

		if(!(this instanceof i)) return new i(t, m, v);
		var mt, vt, gt = e.extend({}, i.defaults, m), yt = this, bt = l(t), wt = e(t),
			xt = gt.slidee ? e(gt.slidee).eq(0) : wt.children().eq(0), Ct = 0, kt = 0,
			Tt = {start: 0, center: 0, end: 0, cur: 0, dest: 0}, St = e(gt.scrollBar).eq(0), At = St.children().eq(0),
			$t = 0, Et = 0, Ft = {start: 0, end: 0, cur: 0}, _t = e(gt.pagesBar), Ot = 0, Pt = [], Dt = 0, jt = [],
			zt = {firstItem: 0, lastItem: 0, centerItem: 0, activeItem: null, activePage: 0}, It = new d(wt[0]),
			qt = new d(xt[0]), Rt = new d(St[0]), Lt = new d(At[0]), Nt = "basic" === gt.itemNav,
			Mt = "forceCentered" === gt.itemNav, Ht = "centered" === gt.itemNav || Mt, Wt = !bt && (Nt || Ht || Mt),
			Vt = gt.scrollSource ? e(gt.scrollSource) : wt, Bt = gt.dragSource ? e(gt.dragSource) : wt,
			Qt = e(gt.forward), Xt = e(gt.backward), Yt = e(gt.prev), Ut = e(gt.next), Gt = e(gt.prevPage),
			Kt = e(gt.nextPage), Zt = {}, Jt = {}, en = {}, tn = {}, nn = {released: 1},
			an = {last: 0, delta: 0, resetTime: 200}, on = 0, rn = 0, sn = 0, ln = 0;
		bt || (t = wt[0]), yt.initialized = 0, yt.frame = t, yt.slidee = xt[0], yt.pos = Tt, yt.rel = zt, yt.items = jt, yt.pages = Pt, yt.isPaused = 0, yt.options = gt, yt.dragging = nn, yt.reload = function() {
			I()
		}, yt.getPos = function(e) {
			if(Wt)
			{
				var t = W(e);
				return -1 !== t ? jt[t] : !1
			}
			var n = xt.find(e).eq(0);
			if(n[0])
			{
				var i = gt.horizontal ? n.offset().left - xt.offset().left : n.offset().top - xt.offset().top,
					a = n[gt.horizontal ? "outerWidth" : "outerHeight"]();
				return {start: i, center: i - Ct / 2 + a / 2, end: i - Ct + a, size: a}
			}
			return !1
		}, yt.moveBy = function(e) {
			tn.speed = e, !nn.init && tn.speed && Tt.cur !== (tn.speed > 0 ? Tt.end : Tt.start) && (tn.lastTime = +new Date, tn.startPos = Tt.cur, et("button"), nn.init = 1, pt("moveStart"), y(ln), M())
		}, yt.stop = function() {
			"button" === nn.source && (nn.init = 0, nn.released = 1)
		}, yt.prev = function() {
			yt.activate(null == zt.activeItem ? 0 : zt.activeItem - 1)
		}, yt.next = function() {
			yt.activate(null == zt.activeItem ? 0 : zt.activeItem + 1)
		}, yt.prevPage = function() {
			yt.activatePage(zt.activePage - 1)
		}, yt.nextPage = function() {
			yt.activatePage(zt.activePage + 1)
		}, yt.slideBy = function(e, t) {
			e && (Wt ? yt[Ht ? "toCenter" : "toStart"](c((Ht ? zt.centerItem : zt.firstItem) + gt.scrollBy * e, 0, jt.length)) : q(Tt.dest + e, t))
		}, yt.slideTo = function(e, t) {
			q(e, t)
		}, yt.toStart = function(e, t) {
			H("start", e, t)
		}, yt.toEnd = function(e, t) {
			H("end", e, t)
		}, yt.toCenter = function(e, t) {
			H("center", e, t)
		}, yt.getIndex = W, yt.activate = function(e, t) {
			var n = B(e);
			gt.smart && n !== !1 && (Ht ? yt.toCenter(n, t) : n >= zt.lastItem ? yt.toStart(n, t) : n <= zt.firstItem ? yt.toEnd(n, t) : K())
		}, yt.activatePage = function(e, t) {
			l(e) && q(Pt[c(e, 0, Pt.length - 1)], t)
		}, yt.resume = function(e) {
			gt.cycleBy && gt.cycleInterval && ("items" !== gt.cycleBy || jt[0] && null != zt.activeItem) && !(e < yt.isPaused) && (yt.isPaused = 0, sn ? sn = clearTimeout(sn) : pt("resume"), sn = setTimeout(function() {
				switch(pt("cycle"), gt.cycleBy)
				{
					case"items":
						yt.activate(zt.activeItem >= jt.length - 1 ? 0 : zt.activeItem + 1);
						break;
					case"pages":
						yt.activatePage(zt.activePage >= Pt.length - 1 ? 0 : zt.activePage + 1)
				}
			}, gt.cycleInterval))
		}, yt.pause = function(e) {
			e < yt.isPaused || (yt.isPaused = e || 100, sn && (sn = clearTimeout(sn), pt("pause")))
		}, yt.toggle = function() {
			yt[sn ? "pause" : "resume"]()
		}, yt.set = function(t, n) {
			e.isPlainObject(t) ? e.extend(gt, t) : gt.hasOwnProperty(t) && (gt[t] = n)
		}, yt.add = function(t, n) {
			var i = e(t);
			Wt ? (null == n || !jt[0] || n >= jt.length ? i.appendTo(xt) : jt.length && i.insertBefore(jt[n].el), null != zt.activeItem && n <= zt.activeItem && (Jt.active = zt.activeItem += i.length)) : xt.append(i), I()
		}, yt.remove = function(t) {
			if(Wt)
			{
				var n = V(t);
				if(n > -1)
				{
					Dt.eq(n).remove();
					var i = n === zt.activeItem;
					null != zt.activeItem && n < zt.activeItem && (Jt.active = --zt.activeItem), I(), i && (Jt.active = null, yt.activate(zt.activeItem))
				}
			}
			else e(t).remove(), I()
		}, yt.moveAfter = function(e, t) {
			U(e, t, 1)
		}, yt.moveBefore = function(e, t) {
			U(e, t)
		}, yt.on = function(e, t) {
			if("object" === a(e)) for(var n in e)
			{
				e.hasOwnProperty(n) && yt.on(n, e[n]);
			}
			else if("function" === a(t)) for(var i = e.split(" "), o = 0, r = i.length; r > o; o++)
			{
				Zt[i[o]] = Zt[i[o]] || [], -1 === G(i[o], t) && Zt[i[o]].push(t);
			}
			else if("array" === a(t)) for(var s = 0, l = t.length; l > s; s++)
			{
				yt.on(e, t[s])
			}
		}, yt.one = function(e, t) {
			function n () {
				t.apply(yt, arguments), yt.off(e, n)
			}

			yt.on(e, n)
		}, yt.off = function(e, t) {
			if(t instanceof Array) for(var n = 0, i = t.length; i > n; n++)
			{
				yt.off(e, t[n]);
			}
			else for(var a = e.split(" "), o = 0, r = a.length; r > o; o++)
			{
				if(Zt[a[o]] = Zt[a[o]] || [], null == t) Zt[a[o]].length = 0;
				else
				{
					var s = G(a[o], t);
					-1 !== s && Zt[a[o]].splice(s, 1)
				}
			}
		}, yt.destroy = function() {
			return i.removeInstance(t), Vt.add(At).add(St).add(_t).add(Qt).add(Xt).add(Yt).add(Ut).add(Gt).add(Kt).off("." + g), w.off("keydown", ct), Yt.add(Ut).add(Gt).add(Kt).removeClass(gt.disabledClass), Dt && null != zt.activeItem && Dt.eq(zt.activeItem).removeClass(gt.activeClass), _t.empty(), bt || (wt.off("." + g), It.restore(), qt.restore(), Rt.restore(), Lt.restore(), e.removeData(t, g)), jt.length = Pt.length = 0, Jt = {}, yt.initialized = 0, yt
		}, yt.init = function() {
			if(!yt.initialized)
			{
				if(i.getInstance(t)) throw new Error("There is already a Sly instance on this element");
				i.storeInstance(t, yt), yt.on(v);
				var e = ["overflow", "position"],
					n = ["position", "webkitTransform", "msTransform", "transform", "left", "top", "width", "height"];
				It.save.apply(It, e), Rt.save.apply(Rt, e), qt.save.apply(qt, n), Lt.save.apply(Lt, n);
				var a = At;
				return bt || (a = a.add(xt), wt.css("overflow", "hidden"), f || "static" !== wt.css("position") || wt.css("position", "relative")), f ? h && a.css(f, h) : ("static" === St.css("position") && St.css("position", "relative"), a.css({position: "absolute"})), gt.forward && Qt.on(A, rt), gt.backward && Xt.on(A, rt), gt.prev && Yt.on(S, rt), gt.next && Ut.on(S, rt), gt.prevPage && Gt.on(S, rt), gt.nextPage && Kt.on(S, rt), Vt.on(T, lt), St[0] && St.on(S, ut), Wt && gt.activateOn && wt.on(gt.activateOn + "." + g, "*", dt), _t[0] && gt.activatePageOn && _t.on(gt.activatePageOn + "." + g, "*", ft), Bt.on(x, {source: "slidee"}, tt), At && At.on(x, {source: "handle"}, tt), w.on("keydown", ct), bt || (wt.on("mouseenter." + g + " mouseleave." + g, ht), wt.on("scroll." + g, s)), yt.initialized = 1, I(!0), gt.cycleBy && !bt && yt[gt.startPaused ? "pause" : "resume"](), yt
			}
		}
	}

	function a (e) {
		return null == e ? String(e) : "object" == typeof e || "function" == typeof e ? Object.prototype.toString.call(e).match(/\s([a-z]+)/i)[1].toLowerCase() || "object" : typeof e
	}

	function o (e, t) {
		e.preventDefault(), t && e.stopPropagation()
	}

	function r (t) {
		o(t, 1), e(this).off(t.type, r)
	}

	function s () {
		this.scrollLeft = 0, this.scrollTop = 0
	}

	function l (e) {
		return !isNaN(parseFloat(e)) && isFinite(e)
	}

	function u (e, t) {
		return 0 | P(String(e.css(t)).replace(/[^\-0-9.]/g, ""))
	}

	function c (e, t, n) {
		return t > e ? t : e > n ? n : e
	}

	function d (e) {
		var t = {};
		return t.style = {}, t.save = function() {
			if(e && e.nodeType)
			{
				for(var n = 0; n < arguments.length; n++)
				{
					t.style[arguments[n]] = e.style[arguments[n]];
				}
				return t
			}
		}, t.restore = function() {
			if(e && e.nodeType)
			{
				for(var n in t.style)
				{
					t.style.hasOwnProperty(n) && (e.style[n] = t.style[n]);
				}
				return t
			}
		}, t
	}

	var f, h, p, m = "sly", v = "Sly", g = m, y = t.cancelAnimationFrame || t.cancelRequestAnimationFrame,
		b = t.requestAnimationFrame, w = e(document), x = "touchstart." + g + " mousedown." + g,
		C = "mousemove." + g + " mouseup." + g, k = "touchmove." + g + " touchend." + g,
		T = (document.implementation.hasFeature("Event.wheel", "3.0") ? "wheel." : "mousewheel.") + g, S = "click." + g,
		A = "mousedown." + g, $ = ["INPUT", "SELECT", "BUTTON", "TEXTAREA"], E = [], F = Math.abs, _ = Math.sqrt,
		O = Math.pow, P = Math.round, D = Math.max, j = Math.min, z = 0;
	w.on(T, function(e) {
		var t = e.originalEvent[g], n = +new Date;
		(!t || t.options.scrollHijack < n - z) && (z = n)
	}), i.getInstance = function(t) {
		return e.data(t, g)
	}, i.storeInstance = function(t, n) {
		return e.data(t, g, n)
	}, i.removeInstance = function(t) {
		return e.removeData(t, g)
	}, function(e) {
		function t (e) {
			var t = (new Date).getTime(), i = Math.max(0, 16 - (t - n)), a = setTimeout(e, i);
			return n = t, a
		}

		b = e.requestAnimationFrame || e.webkitRequestAnimationFrame || t;
		var n = (new Date).getTime(), i = e.cancelAnimationFrame || e.webkitCancelAnimationFrame || e.clearTimeout;
		y = function(t) {
			i.call(e, t)
		}
	}(window), function() {
		function e (e) {
			for(var i = 0, a = t.length; a > i; i++)
			{
				var o = t[i] ? t[i] + e.charAt(0).toUpperCase() + e.slice(1) : e;
				if(null != n.style[o]) return o
			}
		}

		var t = ["", "Webkit", "Moz", "ms", "O"], n = document.createElement("div");
		f = e("transform"), h = e("perspective") ? "translateZ(0) " : ""
	}(), t[v] = i, e.fn[m] = function(t, n) {
		var o, r;
		return e.isPlainObject(t) || (("string" === a(t) || t === !1) && (o = t === !1 ? "destroy" : t, r = Array.prototype.slice.call(arguments, 1)), t = {}), this.each(function(e, a) {
			var s = i.getInstance(a);
			s || o ? s && o && s[o] && s[o].apply(s, r) : s = new i(a, t, n).init()
		})
	}, i.defaults = {
		slidee: null, horizontal: !1, itemNav: null, itemSelector: null, smart: !1, activateOn: null, activateMiddle: !1, scrollSource: null, scrollBy: 0, scrollHijack: 300, scrollTrap: !1, dragSource: null, mouseDragging: !1, touchDragging: !1, releaseSwing: !1, swingSpeed: .2, elasticBounds: !1, dragThreshold: 3, interactive: null, scrollBar: null, dragHandle: !1, dynamicHandle: !1, minHandleSize: 50, clickBar: !1, syncSpeed: .5, pagesBar: null, activatePageOn: null, pageBuilder: function(e) {
			return "<li>" + (e + 1) + "</li>"
		}, forward: null, backward: null, prev: null, next: null, prevPage: null, nextPage: null, cycleBy: null, cycleInterval: 5e3, pauseOnHover: !1, startPaused: !1, moveBy: 300, speed: 0, easing: "swing", startAt: null, keyboardNavBy: null, draggedClass: "dragged", activeClass: "active", disabledClass: "disabled"
	}
}(jQuery, window), function(e, t, n, i) {
	"use strict";
	t = "undefined" != typeof t && t.Math == Math ? t : "undefined" != typeof self && self.Math == Math ? self : Function("return this")(), e.fn.dropdown = function(a) {
		var o, r = e(this), s = e(n), l = r.selector || "", u = "ontouchstart" in n.documentElement,
			c = (new Date).getTime(), d = [], f = arguments[0], h = "string" == typeof f,
			p = [].slice.call(arguments, 1);
		return r.each(function(m) {
			var v, g, y, b, w, x, C, k,
				T = e.isPlainObject(a) ? e.extend(!0, {}, e.fn.dropdown.settings, a) : e.extend({}, e.fn.dropdown.settings),
				S = T.className, A = T.message, $ = T.fields, E = T.keys, F = T.metadata, _ = T.namespace, O = T.regExp,
				P = T.selector, D = T.error, j = T.templates, z = "." + _, I = "module-" + _, q = e(this),
				R = e(T.context), L = q.find(P.text), N = q.find(P.search), M = q.find(P.sizer), H = q.find(P.input),
				W = q.find(P.icon), V = q.prev().find(P.text).length > 0 ? q.prev().find(P.text) : q.prev(),
				B = q.children(P.menu), Q = B.find(P.item), X = !1, Y = !1, U = !1, G = this, K = q.data(I);
			k = {
				initialize: function() {
					k.debug("Initializing dropdown", T), k.is.alreadySetup() ? k.setup.reference() : (k.setup.layout(), k.refreshData(), k.save.defaults(), k.restore.selected(), k.create.id(), k.bind.events(), k.observeChanges(), k.instantiate())
				}, instantiate: function() {
					k.verbose("Storing instance of dropdown", k), K = k, q.data(I, k)
				}, destroy: function() {
					k.verbose("Destroying previous dropdown", q), k.remove.tabbable(), q.off(z).removeData(I), B.off(z), s.off(b), k.disconnect.menuObserver(), k.disconnect.selectObserver()
				}, observeChanges: function() {
					"MutationObserver" in t && (x = new MutationObserver(k.event.select.mutation), C = new MutationObserver(k.event.menu.mutation), k.debug("Setting up mutation observer", x, C), k.observe.select(), k.observe.menu())
				}, disconnect: {
					menuObserver: function() {
						C && C.disconnect()
					}, selectObserver: function() {
						x && x.disconnect()
					}
				}, observe: {
					select: function() {
						k.has.input() && x.observe(H[0], {childList: !0, subtree: !0})
					}, menu: function() {
						k.has.menu() && C.observe(B[0], {childList: !0, subtree: !0})
					}
				}, create: {
					id: function() {
						w = (Math.random().toString(16) + "000000000").substr(2, 8), b = "." + w, k.verbose("Creating unique id for element", w)
					}, userChoice: function(t) {
						var n, a, o;
						return (t = t || k.get.userValues()) ? (t = e.isArray(t) ? t : [t], e.each(t, function(t, r) {
							k.get.item(r) === !1 && (o = T.templates.addition(k.add.variables(A.addResult, r)), a = e("<div />").html(o).attr("data-" + F.value, r).attr("data-" + F.text, r).addClass(S.addition).addClass(S.item), T.hideAdditions && a.addClass(S.hidden), n = n === i ? a : n.add(a), k.verbose("Creating user choices for value", r, a))
						}), n) : !1
					}, userLabels: function() {
						var t = k.get.userValues();
						t && (k.debug("Adding user labels", t), e.each(t, function(e, t) {
							k.verbose("Adding custom user value"), k.add.label(t, t)
						}))
					}, menu: function() {
						B = e("<div />").addClass(S.menu).appendTo(q)
					}, sizer: function() {
						M = e("<span />").addClass(S.sizer).insertAfter(N)
					}
				}, search: function(e) {
					e = e !== i ? e : k.get.query(), k.verbose("Searching for query", e), k.has.minCharacters(e) ? k.filter(e) : k.hide()
				}, select: {
					firstUnfiltered: function() {
						k.verbose("Selecting first non-filtered element"), k.remove.selectedItem(), Q.not(P.unselectable).not(P.addition + P.hidden).eq(0).addClass(S.selected)
					}, nextAvailable: function(e) {
						e = e.eq(0);
						var t = e.nextAll(P.item).not(P.unselectable).eq(0),
							n = e.prevAll(P.item).not(P.unselectable).eq(0), i = t.length > 0;
						i ? (k.verbose("Moving selection to", t), t.addClass(S.selected)) : (k.verbose("Moving selection to", n), n.addClass(S.selected))
					}
				}, setup: {
					api: function() {
						var e = {debug: T.debug, urlData: {value: k.get.value(), query: k.get.query()}, on: !1};
						k.verbose("First request, initializing API"), q.api(e)
					}, layout: function() {
						q.is("select") && (k.setup.select(), k.setup.returnedObject()), k.has.menu() || k.create.menu(), k.is.search() && !k.has.search() && (k.verbose("Adding search input"), N = e("<input />").addClass(S.search).prop("autocomplete", "off").insertBefore(L)), k.is.multiple() && k.is.searchSelection() && !k.has.sizer() && k.create.sizer(), T.allowTab && k.set.tabbable()
					}, select: function() {
						var t = k.get.selectValues();
						k.debug("Dropdown initialized on a select", t), q.is("select") && (H = q), H.parent(P.dropdown).length > 0 ? (k.debug("UI dropdown already exists. Creating dropdown menu only"), q = H.closest(P.dropdown), k.has.menu() || k.create.menu(), B = q.children(P.menu), k.setup.menu(t)) : (k.debug("Creating entire dropdown from select"), q = e("<div />").attr("class", H.attr("class")).addClass(S.selection).addClass(S.dropdown).html(j.dropdown(t)).insertBefore(H), H.hasClass(S.multiple) && H.prop("multiple") === !1 && (k.error(D.missingMultiple), H.prop("multiple", !0)), H.is("[multiple]") && k.set.multiple(), H.prop("disabled") && (k.debug("Disabling dropdown"), q.addClass(S.disabled)), H.removeAttr("class").detach().prependTo(q)), k.refresh()
					}, menu: function(e) {
						B.html(j.menu(e, $)), Q = B.find(P.item)
					}, reference: function() {
						k.debug("Dropdown behavior was called on select, replacing with closest dropdown"), q = q.parent(P.dropdown), k.refresh(), k.setup.returnedObject(), h && (K = k, k.invoke(f))
					}, returnedObject: function() {
						var e = r.slice(0, m), t = r.slice(m + 1);
						r = e.add(q).add(t)
					}
				}, refresh: function() {
					k.refreshSelectors(), k.refreshData()
				}, refreshItems: function() {
					Q = B.find(P.item)
				}, refreshSelectors: function() {
					k.verbose("Refreshing selector cache"), L = q.find(P.text), N = q.find(P.search), H = q.find(P.input), W = q.find(P.icon), V = q.prev().find(P.text).length > 0 ? q.prev().find(P.text) : q.prev(), B = q.children(P.menu), Q = B.find(P.item)
				}, refreshData: function() {
					k.verbose("Refreshing cached metadata"), Q.removeData(F.text).removeData(F.value)
				}, clearData: function() {
					k.verbose("Clearing metadata"), Q.removeData(F.text).removeData(F.value), q.removeData(F.defaultText).removeData(F.defaultValue).removeData(F.placeholderText)
				}, toggle: function() {
					k.verbose("Toggling menu visibility"), k.is.active() ? k.hide() : k.show()
				}, show: function(t) {
					if(t = e.isFunction(t) ? t : function() {
						}, k.can.show() && !k.is.active())
					{
						if(k.debug("Showing dropdown"), !k.has.message() || k.has.maxSelections() || k.has.allResultsFiltered() || k.remove.message(), k.is.allFiltered()) return !0;
						T.onShow.call(G) !== !1 && k.animate.show(function() {
							k.can.click() && k.bind.intent(), k.has.menuSearch() && k.focusSearch(), k.set.visible(), t.call(G)
						})
					}
				}, hide: function(t) {
					t = e.isFunction(t) ? t : function() {
					}, k.is.active() && (k.debug("Hiding dropdown"), T.onHide.call(G) !== !1 && k.animate.hide(function() {
						k.remove.visible(), t.call(G)
					}))
				}, hideOthers: function() {
					k.verbose("Finding other dropdowns to hide"), r.not(q).has(P.menu + "." + S.visible).dropdown("hide")
				}, hideMenu: function() {
					k.verbose("Hiding menu  instantaneously"), k.remove.active(), k.remove.visible(), B.transition("hide")
				}, hideSubMenus: function() {
					var e = B.children(P.item).find(P.menu);
					k.verbose("Hiding sub menus", e), e.transition("hide")
				}, bind: {
					events: function() {
						u && k.bind.touchEvents(), k.bind.keyboardEvents(), k.bind.inputEvents(), k.bind.mouseEvents()
					}, touchEvents: function() {
						k.debug("Touch device detected binding additional touch events"), k.is.searchSelection() || k.is.single() && q.on("touchstart" + z, k.event.test.toggle), B.on("touchstart" + z, P.item, k.event.item.mouseenter)
					}, keyboardEvents: function() {
						k.verbose("Binding keyboard events"), q.on("keydown" + z, k.event.keydown), k.has.search() && q.on(k.get.inputEvent() + z, P.search, k.event.input), k.is.multiple() && s.on("keydown" + b, k.event.document.keydown)
					}, inputEvents: function() {
						k.verbose("Binding input change events"), q.on("change" + z, P.input, k.event.change)
					}, mouseEvents: function() {
						k.verbose("Binding mouse events"), k.is.multiple() && q.on("click" + z, P.label, k.event.label.click).on("click" + z, P.remove, k.event.remove.click), k.is.searchSelection() ? (q.on("mousedown" + z, k.event.mousedown).on("mouseup" + z, k.event.mouseup).on("mousedown" + z, P.menu, k.event.menu.mousedown).on("mouseup" + z, P.menu, k.event.menu.mouseup).on("click" + z, P.icon, k.event.icon.click).on("focus" + z, P.search, k.event.search.focus).on("click" + z, P.search, k.event.search.focus).on("blur" + z, P.search, k.event.search.blur).on("click" + z, P.text, k.event.text.focus), k.is.multiple() && q.on("click" + z, k.event.click)) : ("click" == T.on ? q.on("click" + z, P.icon, k.event.icon.click).on("click" + z, k.event.test.toggle) : "hover" == T.on ? q.on("mouseenter" + z, k.delay.show).on("mouseleave" + z, k.delay.hide) : q.on(T.on + z, k.toggle), q.on("mousedown" + z, k.event.mousedown).on("mouseup" + z, k.event.mouseup).on("focus" + z, k.event.focus).on("blur" + z, k.event.blur)), B.on("mouseenter" + z, P.item, k.event.item.mouseenter).on("mouseleave" + z, P.item, k.event.item.mouseleave).on("click" + z, P.item, k.event.item.click)
					}, intent: function() {
						k.verbose("Binding hide intent event to document"), u && s.on("touchstart" + b, k.event.test.touch).on("touchmove" + b, k.event.test.touch), s.on("click" + b, k.event.test.hide)
					}
				}, unbind: {
					intent: function() {
						k.verbose("Removing hide intent event from document"), u && s.off("touchstart" + b).off("touchmove" + b), s.off("click" + b)
					}
				}, filter: function(e) {
					var t = e !== i ? e : k.get.query(), n = function() {
						k.is.multiple() && k.filterActive(), k.select.firstUnfiltered(), k.has.allResultsFiltered() ? T.onNoResults.call(G, t) ? T.allowAdditions ? T.hideAdditions && (k.verbose("User addition with no menu, setting empty style"), k.set.empty(), k.hideMenu()) : (k.verbose("All items filtered, showing message", t), k.add.message(A.noResults)) : (k.verbose("All items filtered, hiding dropdown", t), k.hideMenu()) : (k.remove.empty(), k.remove.message()), T.allowAdditions && k.add.userSuggestion(e), k.is.searchSelection() && k.can.show() && k.is.focusedOnSearch() && k.show()
					};
					T.useLabels && k.has.maxSelections() || (T.apiSettings ? k.can.useAPI() ? k.queryRemote(t, function() {
						n()
					}) : k.error(D.noAPI) : (k.filterItems(t), n()))
				}, queryRemote: function(t, n) {
					var i = {
						errorDuration: !1, cache: "local", throttle: T.throttle, urlData: {query: t}, onError: function() {
							k.add.message(A.serverError), n()
						}, onFailure: function() {
							k.add.message(A.serverError), n()
						}, onSuccess: function(e) {
							k.remove.message(), k.setup.menu({values: e[$.remoteValues]}), n()
						}
					};
					q.api("get request") || k.setup.api(), i = e.extend(!0, {}, i, T.apiSettings), q.api("setting", i).api("query")
				}, filterItems: function(t) {
					var n = t !== i ? t : k.get.query(), a = null, o = k.escape.regExp(n),
						r = new RegExp("^" + o, "igm");
					k.has.query() && (a = [], k.verbose("Searching for matching values", n), Q.each(function() {
						var t, i, o = e(this);
						if("both" == T.match || "text" == T.match)
						{
							if(t = String(k.get.choiceText(o, !1)), -1 !== t.search(r)) return a.push(this), !0;
							if("exact" === T.fullTextSearch && k.exactSearch(n, t)) return a.push(this), !0;
							if(T.fullTextSearch === !0 && k.fuzzySearch(n, t)) return a.push(this), !0
						}
						if("both" == T.match || "value" == T.match)
						{
							if(i = String(k.get.choiceValue(o, t)), -1 !== i.search(r)) return a.push(this), !0;
							if(T.fullTextSearch && k.fuzzySearch(n, i)) return a.push(this), !0
						}
					})), k.debug("Showing only matched items", n), k.remove.filteredItem(), a && Q.not(a).addClass(S.filtered)
				}, fuzzySearch: function(e, t) {
					var n = t.length, i = e.length;
					if(e = e.toLowerCase(), t = t.toLowerCase(), i > n) return !1;
					if(i === n) return e === t;
					e:for(var a = 0, o = 0; i > a; a++)
					{
						for(var r = e.charCodeAt(a); n > o;)
						{
							if(t.charCodeAt(o++) === r) continue e;
						}
						return !1
					}
					return !0
				}, exactSearch: function(e, t) {
					return e = e.toLowerCase(), t = t.toLowerCase(), t.indexOf(e) > -1 ? !0 : !1
				}, filterActive: function() {
					T.useLabels && Q.filter("." + S.active).addClass(S.filtered)
				}, focusSearch: function(e) {
					k.has.search() && !k.is.focusedOnSearch() && (e ? (q.off("focus" + z, P.search), N.focus(), q.on("focus" + z, P.search, k.event.search.focus)) : N.focus())
				}, forceSelection: function() {
					var e = Q.not(S.filtered).filter("." + S.selected).eq(0),
						t = Q.not(S.filtered).filter("." + S.active).eq(0), n = e.length > 0 ? e : t, i = n.length > 0;
					return i ? (k.debug("Forcing partial selection to selected item", n), void k.event.item.click.call(n, {}, !0)) : void(T.allowAdditions ? (k.set.selected(k.get.query()), k.remove.searchTerm()) : k.remove.searchTerm())
				}, event: {
					change: function() {
						U || (k.debug("Input changed, updating selection"), k.set.selected())
					}, focus: function() {
						T.showOnFocus && !X && k.is.hidden() && !g && k.show()
					}, blur: function() {
						g = n.activeElement === this, X || g || (k.remove.activeLabel(), k.hide())
					}, mousedown: function() {
						k.is.searchSelection() ? y = !0 : X = !0
					}, mouseup: function() {
						k.is.searchSelection() ? y = !1 : X = !1
					}, click: function(t) {
						var n = e(t.target);
						n.is(q) && (k.is.focusedOnSearch() ? k.show() : k.focusSearch())
					}, search: {
						focus: function() {
							X = !0, k.is.multiple() && k.remove.activeLabel(), T.showOnFocus && k.search()
						}, blur: function() {
							g = n.activeElement === this, y || Y || g || (T.forceSelection && k.forceSelection(), k.hide()), y = !1
						}
					}, icon: {
						click: function() {
							k.toggle()
						}
					}, text: {
						focus: function() {
							X = !0, k.focusSearch()
						}
					}, input: function() {
						(k.is.multiple() || k.is.searchSelection()) && k.set.filtered(), clearTimeout(k.timer), k.timer = setTimeout(k.search, T.delay.search)
					}, label: {
						click: function(t) {
							var n = e(this), i = q.find(P.label), a = i.filter("." + S.active),
								o = n.nextAll("." + S.active), r = n.prevAll("." + S.active),
								s = o.length > 0 ? n.nextUntil(o).add(a).add(n) : n.prevUntil(r).add(a).add(n);
							t.shiftKey ? (a.removeClass(S.active), s.addClass(S.active)) : t.ctrlKey ? n.toggleClass(S.active) : (a.removeClass(S.active), n.addClass(S.active)), T.onLabelSelect.apply(this, i.filter("." + S.active))
						}
					}, remove: {
						click: function() {
							var t = e(this).parent();
							t.hasClass(S.active) ? k.remove.activeLabels() : k.remove.activeLabels(t)
						}
					}, test: {
						toggle: function(e) {
							var t = k.is.multiple() ? k.show : k.toggle;
							k.is.bubbledLabelClick(e) || k.is.bubbledIconClick(e) || k.determine.eventOnElement(e, t) && e.preventDefault()
						}, touch: function(e) {
							k.determine.eventOnElement(e, function() {
								"touchstart" == e.type ? k.timer = setTimeout(function() {
									k.hide()
								}, T.delay.touch) : "touchmove" == e.type && clearTimeout(k.timer)
							}), e.stopPropagation()
						}, hide: function(e) {
							k.determine.eventInModule(e, k.hide)
						}
					}, select: {
						mutation: function() {
							k.debug("<select> modified, recreating menu"), k.setup.select()
						}
					}, menu: {
						mutation: function(t) {
							var n = t[0], i = e(n.addedNodes ? n.addedNodes[0] : !1),
								a = e(n.removedNodes ? n.removedNodes[0] : !1), o = i.add(a),
								r = o.is(P.addition) || o.closest(P.addition).length > 0,
								s = o.is(P.message) || o.closest(P.message).length > 0;
							r || s ? (k.debug("Updating item selector cache"), k.refreshItems()) : (k.debug("Menu modified, updating selector cache"), k.refresh())
						}, mousedown: function() {
							Y = !0
						}, mouseup: function() {
							Y = !1
						}
					}, item: {
						mouseenter: function(t) {
							var n = e(t.target), i = e(this), a = i.children(P.menu),
								o = i.siblings(P.item).children(P.menu), r = a.length > 0, s = a.find(n).length > 0;
							!s && r && (clearTimeout(k.itemTimer), k.itemTimer = setTimeout(function() {
								k.verbose("Showing sub-menu", a), e.each(o, function() {
									k.animate.hide(!1, e(this))
								}), k.animate.show(!1, a)
							}, T.delay.show), t.preventDefault())
						}, mouseleave: function() {
							var t = e(this).children(P.menu);
							t.length > 0 && (clearTimeout(k.itemTimer), k.itemTimer = setTimeout(function() {
								k.verbose("Hiding sub-menu", t), k.animate.hide(!1, t)
							}, T.delay.hide))
						}, click: function(t, n) {
							var i = e(this), a = e(t ? t.target : ""), o = i.find(P.menu), r = k.get.choiceText(i),
								s = k.get.choiceValue(i, r), l = o.length > 0, u = o.find(a).length > 0;
							u || l && !T.allowCategorySelection || (k.is.searchSelection() && (T.allowAdditions && k.remove.userAddition(), k.remove.searchTerm(), k.is.focusedOnSearch() || 1 == n || k.focusSearch(!0)), T.useLabels || (k.remove.filteredItem(), k.set.scrollPosition(i)), k.determine.selectAction.call(this, r, s))
						}
					}, document: {
						keydown: function(e) {
							var t = e.which, n = k.is.inObject(t, E);
							if(n)
							{
								var i = q.find(P.label), a = i.filter("." + S.active),
									o = (a.data(F.value), i.index(a)), r = i.length, s = a.length > 0, l = a.length > 1,
									u = 0 === o, c = o + 1 == r, d = k.is.searchSelection(), f = k.is.focusedOnSearch(),
									h = k.is.focused(), p = f && 0 === k.get.caretPosition();
								if(d && !s && !f) return;
								t == E.leftArrow ? !h && !p || s ? s && (e.shiftKey ? k.verbose("Adding previous label to selection") : (k.verbose("Selecting previous label"), i.removeClass(S.active)), u && !l ? a.addClass(S.active) : a.prev(P.siblingLabel).addClass(S.active).end(), e.preventDefault()) : (k.verbose("Selecting previous label"), i.last().addClass(S.active)) : t == E.rightArrow ? (h && !s && i.first().addClass(S.active), s && (e.shiftKey ? k.verbose("Adding next label to selection") : (k.verbose("Selecting next label"), i.removeClass(S.active)), c ? d ? f ? i.removeClass(S.active) : k.focusSearch() : l ? a.next(P.siblingLabel).addClass(S.active) : a.addClass(S.active) : a.next(P.siblingLabel).addClass(S.active), e.preventDefault())) : t == E.deleteKey || t == E.backspace ? s ? (k.verbose("Removing active labels"), c && d && !f && k.focusSearch(), a.last().next(P.siblingLabel).addClass(S.active), k.remove.activeLabels(a), e.preventDefault()) : p && !s && t == E.backspace && (k.verbose("Removing last label on input backspace"), a = i.last().addClass(S.active), k.remove.activeLabels(a)) : a.removeClass(S.active)
							}
						}
					}, keydown: function(e) {
						var t = e.which, n = k.is.inObject(t, E);
						if(n)
						{
							var i, a, o = Q.not(P.unselectable).filter("." + S.selected).eq(0),
								r = B.children("." + S.active).eq(0), s = o.length > 0 ? o : r,
								l = s.length > 0 ? s.siblings(":not(." + S.filtered + ")").addBack() : B.children(":not(." + S.filtered + ")"),
								u = s.children(P.menu), c = s.closest(P.menu),
								d = c.hasClass(S.visible) || c.hasClass(S.animating) || c.parent(P.menu).length > 0,
								f = u.length > 0, h = s.length > 0, p = s.not(P.unselectable).length > 0,
								m = t == E.delimiter && T.allowAdditions && k.is.multiple(),
								v = T.allowAdditions && T.hideAdditions && (t == E.enter || m) && p;
							if(v && (k.verbose("Selecting item from keyboard shortcut", s), k.event.item.click.call(s, e), k.is.searchSelection() && k.remove.searchTerm()), k.is.visible())
							{
								if((t == E.enter || m) && (t == E.enter && h && f && !T.allowCategorySelection ? (k.verbose("Pressed enter on unselectable category, opening sub menu"), t = E.rightArrow) : p && (k.verbose("Selecting item from keyboard shortcut", s), k.event.item.click.call(s, e), k.is.searchSelection() && k.remove.searchTerm()), e.preventDefault()), h && (t == E.leftArrow && (a = c[0] !== B[0], a && (k.verbose("Left key pressed, closing sub-menu"), k.animate.hide(!1, c), s.removeClass(S.selected), c.closest(P.item).addClass(S.selected), e.preventDefault())), t == E.rightArrow && f && (k.verbose("Right key pressed, opening sub-menu"), k.animate.show(!1, u), s.removeClass(S.selected), u.find(P.item).eq(0).addClass(S.selected), e.preventDefault())), t == E.upArrow)
								{
									if(i = h && d ? s.prevAll(P.item + ":not(" + P.unselectable + ")").eq(0) : Q.eq(0), l.index(i) < 0) return k.verbose("Up key pressed but reached top of current menu"), void e.preventDefault();
									k.verbose("Up key pressed, changing active item"), s.removeClass(S.selected), i.addClass(S.selected), k.set.scrollPosition(i), T.selectOnKeydown && k.is.single() && k.set.selectedItem(i), e.preventDefault()
								}
								if(t == E.downArrow)
								{
									if(i = h && d ? i = s.nextAll(P.item + ":not(" + P.unselectable + ")").eq(0) : Q.eq(0), 0 === i.length) return k.verbose("Down key pressed but reached bottom of current menu"), void e.preventDefault();
									k.verbose("Down key pressed, changing active item"), Q.removeClass(S.selected), i.addClass(S.selected), k.set.scrollPosition(i), T.selectOnKeydown && k.is.single() && k.set.selectedItem(i), e.preventDefault()
								}
								t == E.pageUp && (k.scrollPage("up"), e.preventDefault()), t == E.pageDown && (k.scrollPage("down"), e.preventDefault()), t == E.escape && (k.verbose("Escape key pressed, closing dropdown"), k.hide())
							}
							else m && e.preventDefault(), t != E.downArrow || k.is.visible() || (k.verbose("Down key pressed, showing dropdown"), k.select.firstUnfiltered(), k.show(), e.preventDefault())
						}
						else k.has.search() || k.set.selectedLetter(String.fromCharCode(t))
					}
				}, trigger: {
					change: function() {
						var e = n.createEvent("HTMLEvents"), t = H[0];
						t && (k.verbose("Triggering native change event"), e.initEvent("change", !0, !1), t.dispatchEvent(e))
					}
				}, determine: {
					selectAction: function(t, n) {
						k.verbose("Determining action", T.action), e.isFunction(k.action[T.action]) ? (k.verbose("Triggering preset action", T.action, t, n), k.action[T.action].call(G, t, n, this)) : e.isFunction(T.action) ? (k.verbose("Triggering user action", T.action, t, n), T.action.call(G, t, n, this)) : k.error(D.action, T.action)
					}, eventInModule: function(t, i) {
						var a = e(t.target), o = a.closest(n.documentElement).length > 0, r = a.closest(q).length > 0;
						return i = e.isFunction(i) ? i : function() {
						}, o && !r ? (k.verbose("Triggering event", i), i(), !0) : (k.verbose("Event occurred in dropdown, canceling callback"), !1)
					}, eventOnElement: function(t, i) {
						var a = e(t.target), o = a.closest(P.siblingLabel), r = n.body.contains(t.target),
							s = 0 === q.find(o).length, l = 0 === a.closest(B).length;
						return i = e.isFunction(i) ? i : function() {
						}, r && s && l ? (k.verbose("Triggering event", i), i(), !0) : (k.verbose("Event occurred in dropdown menu, canceling callback"), !1)
					}
				}, action: {
					nothing: function() {
					}, activate: function(t, n, a) {
						if(n = n !== i ? n : t, k.can.activate(e(a)))
						{
							if(k.set.selected(n, e(a)), k.is.multiple() && !k.is.allFiltered()) return;
							k.hideAndClear()
						}
					}, select: function(t, n, a) {
						if(n = n !== i ? n : t, k.can.activate(e(a)))
						{
							if(k.set.value(n, e(a)), k.is.multiple() && !k.is.allFiltered()) return;
							k.hideAndClear()
						}
					}, combo: function(t, n, a) {
						n = n !== i ? n : t, k.set.selected(n, e(a)), k.hideAndClear()
					}, hide: function(e, t) {
						k.set.value(t, e), k.hideAndClear()
					}
				}, get: {
					id: function() {
						return w
					}, defaultText: function() {
						return q.data(F.defaultText)
					}, defaultValue: function() {
						return q.data(F.defaultValue)
					}, placeholderText: function() {
						return q.data(F.placeholderText) || ""
					}, text: function() {
						return L.text()
					}, query: function() {
						return e.trim(N.val())
					}, searchWidth: function(e) {
						return e = e !== i ? e : N.val(), M.text(e), Math.ceil(M.width() + 1)
					}, selectionCount: function() {
						var t, n = k.get.values();
						return t = k.is.multiple() ? e.isArray(n) ? n.length : 0 : "" !== k.get.value() ? 1 : 0
					}, transition: function(e) {
						return "auto" == T.transition ? k.is.upward(e) ? "slide up" : "slide down" : T.transition
					}, userValues: function() {
						var t = k.get.values();
						return t ? (t = e.isArray(t) ? t : [t], e.grep(t, function(e) {
							return k.get.item(e) === !1
						})) : !1
					}, uniqueArray: function(t) {
						return e.grep(t, function(n, i) {
							return e.inArray(n, t) === i
						})
					}, caretPosition: function() {
						var e, t, i = N.get(0);
						return "selectionStart" in i ? i.selectionStart : n.selection ? (i.focus(), e = n.selection.createRange(), t = e.text.length, e.moveStart("character", -i.value.length), e.text.length - t) : void 0
					}, value: function() {
						var t = H.length > 0 ? H.val() : q.data(F.value),
							n = e.isArray(t) && 1 === t.length && "" === t[0];
						return t === i || n ? "" : t
					}, values: function() {
						var e = k.get.value();
						return "" === e ? "" : !k.has.selectInput() && k.is.multiple() ? "string" == typeof e ? e.split(T.delimiter) : "" : e
					}, remoteValues: function() {
						var t = k.get.values(), n = !1;
						return t && ("string" == typeof t && (t = [t]), e.each(t, function(e, t) {
							var i = k.read.remoteData(t);
							k.verbose("Restoring value from session data", i, t), i && (n || (n = {}), n[t] = i)
						})), n
					}, choiceText: function(t, n) {
						return n = n !== i ? n : T.preserveHTML, t ? (t.find(P.menu).length > 0 && (k.verbose("Retrieving text of element with sub-menu"), t = t.clone(), t.find(P.menu).remove(), t.find(P.menuIcon).remove()), t.data(F.text) !== i ? t.data(F.text) : e.trim(n ? t.html() : t.text())) : void 0
					}, choiceValue: function(t, n) {
						return n = n || k.get.choiceText(t), t ? t.data(F.value) !== i ? String(t.data(F.value)) : "string" == typeof n ? e.trim(n.toLowerCase()) : String(n) : !1
					}, inputEvent: function() {
						var e = N[0];
						return e ? e.oninput !== i ? "input" : e.onpropertychange !== i ? "propertychange" : "keyup" : !1
					}, selectValues: function() {
						var t = {};
						return t.values = [], q.find("option").each(function() {
							var n = e(this), a = n.html(), o = n.attr("disabled"),
								r = n.attr("value") !== i ? n.attr("value") : a;
							"auto" === T.placeholder && "" === r ? t.placeholder = a : t.values.push({name: a, value: r, disabled: o})
						}), T.placeholder && "auto" !== T.placeholder && (k.debug("Setting placeholder value to", T.placeholder), t.placeholder = T.placeholder), T.sortSelect ? (t.values.sort(function(e, t) {
							return e.name > t.name ? 1 : -1
						}), k.debug("Retrieved and sorted values from select", t)) : k.debug("Retrieved values from select", t), t
					}, activeItem: function() {
						return Q.filter("." + S.active)
					}, selectedItem: function() {
						var e = Q.not(P.unselectable).filter("." + S.selected);
						return e.length > 0 ? e : Q.eq(0)
					}, itemWithAdditions: function(e) {
						var t = k.get.item(e), n = k.create.userChoice(e), i = n && n.length > 0;
						return i && (t = t.length > 0 ? t.add(n) : n), t
					}, item: function(t, n) {
						var a, o, r = !1;
						return t = t !== i ? t : k.get.values() !== i ? k.get.values() : k.get.text(), a = o ? t.length > 0 : t !== i && null !== t, o = k.is.multiple() && e.isArray(t), n = "" === t || 0 === t ? !0 : n || !1, a && Q.each(function() {
							var a = e(this), s = k.get.choiceText(a), l = k.get.choiceValue(a, s);
							if(null !== l && l !== i) if(o) (-1 !== e.inArray(String(l), t) || -1 !== e.inArray(s, t)) && (r = r ? r.add(a) : a);
							else if(n)
							{
								if(k.verbose("Ambiguous dropdown value using strict type check", a, t), l === t || s === t) return r = a, !0
							}
							else if(String(l) == String(t) || s == t) return k.verbose("Found select item by value", l, t), r = a, !0
						}), r
					}
				}, check: {
					maxSelections: function(e) {
						return T.maxSelections ? (e = e !== i ? e : k.get.selectionCount(), e >= T.maxSelections ? (k.debug("Maximum selection count reached"), T.useLabels && (Q.addClass(S.filtered), k.add.message(A.maxSelections)), !0) : (k.verbose("No longer at maximum selection count"), k.remove.message(), k.remove.filteredItem(), k.is.searchSelection() && k.filterItems(), !1)) : !0
					}
				}, restore: {
					defaults: function() {
						k.clear(), k.restore.defaultText(), k.restore.defaultValue()
					}, defaultText: function() {
						var e = k.get.defaultText(), t = k.get.placeholderText;
						e === t ? (k.debug("Restoring default placeholder text", e), k.set.placeholderText(e)) : (k.debug("Restoring default text", e), k.set.text(e))
					}, placeholderText: function() {
						k.set.placeholderText()
					}, defaultValue: function() {
						var e = k.get.defaultValue();
						e !== i && (k.debug("Restoring default value", e), "" !== e ? (k.set.value(e), k.set.selected()) : (k.remove.activeItem(), k.remove.selectedItem()))
					}, labels: function() {
						T.allowAdditions && (T.useLabels || (k.error(D.labels), T.useLabels = !0), k.debug("Restoring selected values"), k.create.userLabels()), k.check.maxSelections()
					}, selected: function() {
						k.restore.values(), k.is.multiple() ? (k.debug("Restoring previously selected values and labels"), k.restore.labels()) : k.debug("Restoring previously selected values")
					}, values: function() {
						k.set.initialLoad(), T.apiSettings && T.saveRemoteData && k.get.remoteValues() ? k.restore.remoteValues() : k.set.selected(), k.remove.initialLoad()
					}, remoteValues: function() {
						var t = k.get.remoteValues();
						k.debug("Recreating selected from session data", t), t && (k.is.single() ? e.each(t, function(e, t) {
							k.set.text(t)
						}) : e.each(t, function(e, t) {
							k.add.label(e, t)
						}))
					}
				}, read: {
					remoteData: function(e) {
						var n;
						return t.Storage === i ? void k.error(D.noStorage) : (n = sessionStorage.getItem(e), n !== i ? n : !1)
					}
				}, save: {
					defaults: function() {
						k.save.defaultText(), k.save.placeholderText(), k.save.defaultValue()
					}, defaultValue: function() {
						var e = k.get.value();
						k.verbose("Saving default value as", e), q.data(F.defaultValue, e)
					}, defaultText: function() {
						var e = k.get.text();
						k.verbose("Saving default text as", e), q.data(F.defaultText, e)
					}, placeholderText: function() {
						var e;
						T.placeholder !== !1 && L.hasClass(S.placeholder) && (e = k.get.text(), k.verbose("Saving placeholder text as", e), q.data(F.placeholderText, e))
					}, remoteData: function(e, n) {
						return t.Storage === i ? void k.error(D.noStorage) : (k.verbose("Saving remote data to session storage", n, e), void sessionStorage.setItem(n, e))
					}
				}, clear: function() {
					k.is.multiple() && T.useLabels ? k.remove.labels() : (k.remove.activeItem(), k.remove.selectedItem()), k.set.placeholderText(), k.clearValue()
				}, clearValue: function() {
					k.set.value("")
				}, scrollPage: function(e, t) {
					var n, i, a, o = t || k.get.selectedItem(), r = o.closest(P.menu), s = r.outerHeight(),
						l = r.scrollTop(), u = Q.eq(0).outerHeight(), c = Math.floor(s / u),
						d = (r.prop("scrollHeight"), "up" == e ? l - u * c : l + u * c), f = Q.not(P.unselectable);
					a = "up" == e ? f.index(o) - c : f.index(o) + c, n = "up" == e ? a >= 0 : a < f.length, i = n ? f.eq(a) : "up" == e ? f.first() : f.last(), i.length > 0 && (k.debug("Scrolling page", e, i), o.removeClass(S.selected), i.addClass(S.selected), T.selectOnKeydown && k.is.single() && k.set.selectedItem(i), r.scrollTop(d))
				}, set: {
					filtered: function() {
						var e = k.is.multiple(), t = k.is.searchSelection(), n = e && t, i = t ? k.get.query() : "",
							a = "string" == typeof i && i.length > 0, o = k.get.searchWidth(), r = "" !== i;
						e && a && (k.verbose("Adjusting input width", o, T.glyphWidth), N.css("width", o)), a || n && r ? (k.verbose("Hiding placeholder text"), L.addClass(S.filtered)) : (!e || n && !r) && (k.verbose("Showing placeholder text"), L.removeClass(S.filtered))
					}, empty: function() {
						q.addClass(S.empty)
					}, loading: function() {
						q.addClass(S.loading)
					}, placeholderText: function(e) {
						e = e || k.get.placeholderText(), k.debug("Setting placeholder text", e), k.set.text(e), L.addClass(S.placeholder)
					}, tabbable: function() {
						k.has.search() ? (k.debug("Added tabindex to searchable dropdown"), N.val("").attr("tabindex", 0), B.attr("tabindex", -1)) : (k.debug("Added tabindex to dropdown"), q.attr("tabindex") === i && (q.attr("tabindex", 0), B.attr("tabindex", -1)))
					}, initialLoad: function() {
						k.verbose("Setting initial load"), v = !0
					}, activeItem: function(e) {
						e.addClass(T.allowAdditions && e.filter(P.addition).length > 0 ? S.filtered : S.active)
					}, partialSearch: function(e) {
						var t = k.get.query().length;
						N.val(e.substr(0, t))
					}, scrollPosition: function(e, t) {
						var n, a, o, r, s, l, u, c, d, f = 5;
						e = e || k.get.selectedItem(), n = e.closest(P.menu), a = e && e.length > 0, t = t !== i ? t : !1, e && n.length > 0 && a && (r = e.position().top, n.addClass(S.loading), l = n.scrollTop(), s = n.offset().top, r = e.offset().top, o = l - s + r, t || (u = n.height(), d = o + f > l + u, c = l > o - f), k.debug("Scrolling to active item", o), (t || c || d) && n.scrollTop(o), n.removeClass(S.loading))
					}, text: function(e) {
						"select" !== T.action && ("combo" == T.action ? (k.debug("Changing combo button text", e, V), T.preserveHTML ? V.html(e) : V.text(e)) : (e !== k.get.placeholderText() && (L.removeClass(S.placeholder), q.parent().addClass("activated")), k.debug("Changing text", e, L), L.removeClass(S.filtered), T.preserveHTML ? L.html(e) : L.text(e)))
					}, selectedItem: function(e) {
						var t = k.get.choiceValue(e), n = k.get.choiceText(e, !1);
						k.debug("Setting user selection to item", e), k.remove.activeItem(), k.set.partialSearch(n), k.set.activeItem(e), k.set.selected(t, e), k.set.text(n)
					}, selectedLetter: function(t) {
						var n, i = Q.filter("." + S.selected), a = i.length > 0 && k.has.firstLetter(i, t), o = !1;
						a && (n = i.nextAll(Q).eq(0), k.has.firstLetter(n, t) && (o = n)), o || Q.each(function() {
							return k.has.firstLetter(e(this), t) ? (o = e(this), !1) : void 0
						}), o && (k.verbose("Scrolling to next value with letter", t), k.set.scrollPosition(o), i.removeClass(S.selected), o.addClass(S.selected), T.selectOnKeydown && k.is.single() && k.set.selectedItem(o))
					}, direction: function(e) {
						"auto" == T.direction ? k.is.onScreen(e) ? k.remove.upward(e) : k.set.upward(e) : "upward" == T.direction && k.set.upward(e)
					}, upward: function(e) {
						var t = e || q;
						t.addClass(S.upward)
					}, value: function(e, t, n) {
						var a = k.escape.value(e), o = H.length > 0, r = (!k.has.value(e), k.get.values()),
							s = e !== i ? String(e) : e;
						if(o)
						{
							if(!T.allowReselection && s == r && (k.verbose("Skipping value update already same value", e, r), !k.is.initialLoad())) return;
							k.is.single() && k.has.selectInput() && k.can.extendSelect() && (k.debug("Adding user option", e), k.add.optionValue(e)), k.debug("Updating input value", a, r), U = !0, H.val(a), T.fireOnInit === !1 && k.is.initialLoad() ? k.debug("Input native change event ignored on initial load") : k.trigger.change(), U = !1
						}
						else k.verbose("Storing value in metadata", a, H), a !== r && q.data(F.value, s);
						T.fireOnInit === !1 && k.is.initialLoad() ? k.verbose("No callback on initial load", T.onChange) : T.onChange.call(G, e, t, n)
					}, active: function() {
						q.addClass(S.active)
					}, multiple: function() {
						q.addClass(S.multiple)
					}, visible: function() {
						q.addClass(S.visible)
					}, exactly: function(e, t) {
						k.debug("Setting selected to exact values"), k.clear(), k.set.selected(e, t)
					}, selected: function(t, n) {
						var i = k.is.multiple();
						n = T.allowAdditions ? n || k.get.itemWithAdditions(t) : n || k.get.item(t), n && (k.debug("Setting selected menu item to", n), k.is.multiple() && k.remove.searchWidth(), k.is.single() ? (k.remove.activeItem(), k.remove.selectedItem()) : T.useLabels && k.remove.selectedItem(), n.each(function() {
							var t = e(this), a = k.get.choiceText(t), o = k.get.choiceValue(t, a),
								r = t.hasClass(S.filtered), s = t.hasClass(S.active), l = t.hasClass(S.addition),
								u = i && 1 == n.length;
							i ? !s || l ? (T.apiSettings && T.saveRemoteData && k.save.remoteData(a, o), T.useLabels ? (k.add.value(o, a, t), k.add.label(o, a, u), k.set.activeItem(t), k.filterActive(), k.select.nextAvailable(n)) : (k.add.value(o, a, t), k.set.text(k.add.variables(A.count)), k.set.activeItem(t))) : r || (k.debug("Selected active value, removing label"), k.remove.selected(o)) : (T.apiSettings && T.saveRemoteData && k.save.remoteData(a, o), k.set.text(a), k.set.value(o, a, t), t.addClass(S.active).addClass(S.selected))
						}))
					}
				}, add: {
					label: function(t, n, i) {
						var a, o = k.is.searchSelection() ? N : L, r = k.escape.value(t);
						return a = e("<a />").addClass(S.label).attr("data-value", r).html(j.label(r, n)), a = T.onLabelCreate.call(a, r, n), k.has.label(t) ? void k.debug("Label already exists, skipping", r) : (T.label.variation && a.addClass(T.label.variation), void(i === !0 ? (k.debug("Animating in label", a), a.addClass(S.hidden).insertBefore(o).transition(T.label.transition, T.label.duration)) : (k.debug("Adding selection label", a), a.insertBefore(o))))
					}, message: function(t) {
						var n = B.children(P.message), i = T.templates.message(k.add.variables(t));
						n.length > 0 ? n.html(i) : n = e("<div/>").html(i).addClass(S.message).appendTo(B)
					}, optionValue: function(t) {
						var n = k.escape.value(t), i = H.find('option[value="' + n + '"]'), a = i.length > 0;
						a || (k.disconnect.selectObserver(), k.is.single() && (k.verbose("Removing previous user addition"), H.find("option." + S.addition).remove()), e("<option/>").prop("value", n).addClass(S.addition).html(t).appendTo(H), k.verbose("Adding user addition as an <option>", t), k.observe.select())
					}, userSuggestion: function(e) {
						var t, n = B.children(P.addition), i = k.get.item(e), a = i && i.not(P.addition).length,
							o = n.length > 0;
						if(!T.useLabels || !k.has.maxSelections())
						{
							if("" === e || a) return void n.remove();
							o ? (n.data(F.value, e).data(F.text, e).attr("data-" + F.value, e).attr("data-" + F.text, e).removeClass(S.filtered), T.hideAdditions || (t = T.templates.addition(k.add.variables(A.addResult, e)), n.html(t)), k.verbose("Replacing user suggestion with new value", n)) : (n = k.create.userChoice(e), n.prependTo(B), k.verbose("Adding item choice to menu corresponding with user choice addition", n)), (!T.hideAdditions || k.is.allFiltered()) && n.addClass(S.selected).siblings().removeClass(S.selected), k.refreshItems()
						}
					}, variables: function(e, t) {
						var n, i, a = -1 !== e.search("{count}"), o = -1 !== e.search("{maxCount}"),
							r = -1 !== e.search("{term}");
						return k.verbose("Adding templated variables to message", e), a && (n = k.get.selectionCount(), e = e.replace("{count}", n)), o && (n = k.get.selectionCount(), e = e.replace("{maxCount}", T.maxSelections)), r && (i = t || k.get.query(), e = e.replace("{term}", i)), e
					}, value: function(t, n, i) {
						var a, o = k.get.values();
						return "" === t ? void k.debug("Cannot select blank values from multiselect") : (e.isArray(o) ? (a = o.concat([t]), a = k.get.uniqueArray(a)) : a = [t], k.has.selectInput() ? k.can.extendSelect() && (k.debug("Adding value to select", t, a, H), k.add.optionValue(t)) : (a = a.join(T.delimiter), k.debug("Setting hidden input to delimited value", a, H)), T.fireOnInit === !1 && k.is.initialLoad() ? k.verbose("Skipping onadd callback on initial load", T.onAdd) : T.onAdd.call(G, t, n, i), k.set.value(a, t, n, i), void k.check.maxSelections())
					}
				}, remove: {
					active: function() {
						q.removeClass(S.active)
					}, activeLabel: function() {
						q.find(P.label).removeClass(S.active)
					}, empty: function() {
						q.removeClass(S.empty)
					}, loading: function() {
						q.removeClass(S.loading)
					}, initialLoad: function() {
						v = !1
					}, upward: function(e) {
						var t = e || q;
						t.removeClass(S.upward)
					}, visible: function() {
						q.removeClass(S.visible)
					}, activeItem: function() {
						Q.removeClass(S.active)
					}, filteredItem: function() {
						T.useLabels && k.has.maxSelections() || (T.useLabels && k.is.multiple() ? Q.not("." + S.active).removeClass(S.filtered) : Q.removeClass(S.filtered), k.remove.empty())
					}, optionValue: function(e) {
						var t = k.escape.value(e), n = H.find('option[value="' + t + '"]'), i = n.length > 0;
						i && n.hasClass(S.addition) && (x && (x.disconnect(), k.verbose("Temporarily disconnecting mutation observer")), n.remove(), k.verbose("Removing user addition as an <option>", t), x && x.observe(H[0], {childList: !0, subtree: !0}))
					}, message: function() {
						B.children(P.message).remove()
					}, searchWidth: function() {
						N.css("width", "")
					}, searchTerm: function() {
						k.verbose("Cleared search term"), N.val(""), k.set.filtered()
					}, userAddition: function() {
						Q.filter(P.addition).remove()
					}, selected: function(t, n) {
						return (n = T.allowAdditions ? n || k.get.itemWithAdditions(t) : n || k.get.item(t)) ? void n.each(function() {
							var t = e(this), n = k.get.choiceText(t), i = k.get.choiceValue(t, n);
							k.is.multiple() ? T.useLabels ? (k.remove.value(i, n, t), k.remove.label(i)) : (k.remove.value(i, n, t), 0 === k.get.selectionCount() ? k.set.placeholderText() : k.set.text(k.add.variables(A.count))) : k.remove.value(i, n, t), t.removeClass(S.filtered).removeClass(S.active), T.useLabels && t.removeClass(S.selected)
						}) : !1
					}, selectedItem: function() {
						Q.removeClass(S.selected)
					}, value: function(e, t, n) {
						var i, a = k.get.values();
						k.has.selectInput() ? (k.verbose("Input is <select> removing selected option", e), i = k.remove.arrayValue(e, a), k.remove.optionValue(e)) : (k.verbose("Removing from delimited values", e), i = k.remove.arrayValue(e, a), i = i.join(T.delimiter)), T.fireOnInit === !1 && k.is.initialLoad() ? k.verbose("No callback on initial load", T.onRemove) : T.onRemove.call(G, e, t, n), k.set.value(i, t, n), k.check.maxSelections()
					}, arrayValue: function(t, n) {
						return e.isArray(n) || (n = [n]), n = e.grep(n, function(e) {
							return t != e
						}), k.verbose("Removed value from delimited string", t, n), n
					}, label: function(e) {
						var t = q.find(P.label), n = t.filter('[data-value="' + e + '"]');
						k.verbose("Removing label", n), n.remove()
					}, activeLabels: function(e) {
						e = e || q.find(P.label).filter("." + S.active), k.verbose("Removing active label selections", e), k.remove.labels(e)
					}, labels: function(t) {
						t = t || q.find(P.label), k.verbose("Removing labels", t), t.each(function() {
							var t = e(this), n = t.data(F.value), a = n !== i ? String(n) : n, o = k.is.userValue(a);
							return T.onLabelRemove.call(t, n) === !1 ? void k.debug("Label remove callback cancelled removal") : (k.remove.message(), void(o ? (k.remove.value(a), k.remove.label(a)) : k.remove.selected(a)))
						})
					}, tabbable: function() {
						k.has.search() ? (k.debug("Searchable dropdown initialized"), N.removeAttr("tabindex"), B.removeAttr("tabindex")) : (k.debug("Simple selection dropdown initialized"), q.removeAttr("tabindex"), B.removeAttr("tabindex"))
					}
				}, has: {
					menuSearch: function() {
						return k.has.search() && N.closest(B).length > 0
					}, search: function() {
						return N.length > 0
					}, sizer: function() {
						return M.length > 0
					}, selectInput: function() {
						return H.is("select")
					}, minCharacters: function(e) {
						return T.minCharacters ? (e = String(e !== i ? e : k.get.query()), e.length >= T.minCharacters) : !0
					}, firstLetter: function(e, t) {
						var n, i;
						return e && 0 !== e.length && "string" == typeof t ? (n = k.get.choiceText(e, !1), t = t.toLowerCase(), i = String(n).charAt(0).toLowerCase(), t == i) : !1
					}, input: function() {
						return H.length > 0
					}, items: function() {
						return Q.length > 0
					}, menu: function() {
						return B.length > 0
					}, message: function() {
						return 0 !== B.children(P.message).length
					}, label: function(e) {
						var t = k.escape.value(e), n = q.find(P.label);
						return n.filter('[data-value="' + t + '"]').length > 0
					}, maxSelections: function() {
						return T.maxSelections && k.get.selectionCount() >= T.maxSelections
					}, allResultsFiltered: function() {
						var e = Q.not(P.addition);
						return e.filter(P.unselectable).length === e.length
					}, userSuggestion: function() {
						return B.children(P.addition).length > 0
					}, query: function() {
						return "" !== k.get.query()
					}, value: function(t) {
						var n = k.get.values(), i = e.isArray(n) ? n && -1 !== e.inArray(t, n) : n == t;
						return i ? !0 : !1
					}
				}, is: {
					active: function() {
						return q.hasClass(S.active)
					}, bubbledLabelClick: function(t) {
						return e(t.target).is("select, input") && q.closest("label").length > 0
					}, bubbledIconClick: function(t) {
						return e(t.target).closest(W).length > 0
					}, alreadySetup: function() {
						return q.is("select") && q.parent(P.dropdown).length > 0 && 0 === q.prev().length
					}, animating: function(e) {
						return e ? e.transition && e.transition("is animating") : B.transition && B.transition("is animating")
					}, disabled: function() {
						return q.hasClass(S.disabled)
					}, focused: function() {
						return n.activeElement === q[0]
					}, focusedOnSearch: function() {
						return n.activeElement === N[0]
					}, allFiltered: function() {
						return (k.is.multiple() || k.has.search()) && !(0 == T.hideAdditions && k.has.userSuggestion()) && !k.has.message() && k.has.allResultsFiltered()
					}, hidden: function(e) {
						return !k.is.visible(e)
					}, initialLoad: function() {
						return v
					}, onScreen: function(e) {
						var t, n = e || B, i = !0, a = {};
						return n.addClass(S.loading), t = {context: {scrollTop: R.scrollTop(), height: R.outerHeight()}, menu: {offset: n.offset(), height: n.outerHeight()}}, a = {above: t.context.scrollTop <= t.menu.offset.top - t.menu.height, below: t.context.scrollTop + t.context.height >= t.menu.offset.top + t.menu.height}, a.below ? (k.verbose("Dropdown can fit in context downward", a), i = !0) : a.below || a.above ? (k.verbose("Dropdown cannot fit below, opening upward", a), i = !1) : (k.verbose("Dropdown cannot fit in either direction, favoring downward", a), i = !0), n.removeClass(S.loading), i
					}, inObject: function(t, n) {
						var i = !1;
						return e.each(n, function(e, n) {
							return n == t ? (i = !0, !0) : void 0
						}), i
					}, multiple: function() {
						return q.hasClass(S.multiple)
					}, single: function() {
						return !k.is.multiple()
					}, selectMutation: function(t) {
						var n = !1;
						return e.each(t, function(t, i) {
							return i.target && e(i.target).is("select") ? (n = !0, !0) : void 0
						}), n
					}, search: function() {
						return q.hasClass(S.search)
					}, searchSelection: function() {
						return k.has.search() && 1 === N.parent(P.dropdown).length
					}, selection: function() {
						return q.hasClass(S.selection)
					}, userValue: function(t) {
						return -1 !== e.inArray(t, k.get.userValues())
					}, upward: function(e) {
						var t = e || q;
						return t.hasClass(S.upward)
					}, visible: function(e) {
						return e ? e.hasClass(S.visible) : B.hasClass(S.visible)
					}
				}, can: {
					activate: function(e) {
						return T.useLabels ? !0 : k.has.maxSelections() ? k.has.maxSelections() && e.hasClass(S.active) ? !0 : !1 : !0
					}, click: function() {
						return u || "click" == T.on
					}, extendSelect: function() {
						return T.allowAdditions || T.apiSettings
					}, show: function() {
						return !k.is.disabled() && (k.has.items() || k.has.message())
					}, useAPI: function() {
						return e.fn.api !== i
					}
				}, animate: {
					show: function(t, n) {
						var a, o = n || B, r = n ? function() {
						} : function() {
							k.hideSubMenus(), k.hideOthers(), k.set.active()
						};
						t = e.isFunction(t) ? t : function() {
						}, k.verbose("Doing menu show animation", o), k.set.direction(n), a = k.get.transition(n), k.is.selection() && k.set.scrollPosition(k.get.selectedItem(), !0), (k.is.hidden(o) || k.is.animating(o)) && ("none" == a ? (r(), o.transition("show"), t.call(G)) : e.fn.transition !== i && q.transition("is supported") ? o.transition({
							animation: a + " in", debug: T.debug, verbose: T.verbose, duration: T.duration, queue: !0, onStart: r, onComplete: function() {
								t.call(G)
							}
						}) : k.error(D.noTransition, a))
					}, hide: function(t, n) {
						var a = n || B, o = (n ? .9 * T.duration : T.duration, n ? function() {
						} : function() {
							k.can.click() && k.unbind.intent(), k.remove.active()
						}), r = k.get.transition(n);
						t = e.isFunction(t) ? t : function() {
						}, (k.is.visible(a) || k.is.animating(a)) && (k.verbose("Doing menu hide animation", a), "none" == r ? (o(), a.transition("hide"), t.call(G)) : e.fn.transition !== i && q.transition("is supported") ? a.transition({
							animation: r + " out", duration: T.duration, debug: T.debug, verbose: T.verbose, queue: !0, onStart: o, onComplete: function() {
								"auto" == T.direction && k.remove.upward(n), t.call(G)
							}
						}) : k.error(D.transition))
					}
				}, hideAndClear: function() {
					k.remove.searchTerm(), k.has.maxSelections() || (k.has.search() ? k.hide(function() {
						k.remove.filteredItem()
					}) : k.hide())
				}, delay: {
					show: function() {
						k.verbose("Delaying show event to ensure user intent"), clearTimeout(k.timer), k.timer = setTimeout(k.show, T.delay.show)
					}, hide: function() {
						k.verbose("Delaying hide event to ensure user intent"), clearTimeout(k.timer), k.timer = setTimeout(k.hide, T.delay.hide)
					}
				}, escape: {
					value: function(t) {
						var n = e.isArray(t), i = "string" == typeof t, a = !i && !n, o = i && -1 !== t.search(O.quote),
							r = [];
						return k.has.selectInput() && !a && o ? (k.debug("Encoding quote values for use in select", t), n ? (e.each(t, function(e, t) {
							r.push(t.replace(O.quote, "&quot;"))
						}), r) : t.replace(O.quote, "&quot;")) : t
					}, regExp: function(e) {
						return e = String(e), e.replace(O.escape, "\\$&")
					}
				}, setting: function(t, n) {
					if(k.debug("Changing setting", t, n), e.isPlainObject(t)) e.extend(!0, T, t);
					else
					{
						if(n === i) return T[t];
						e.isPlainObject(T[t]) ? e.extend(!0, T[t], n) : T[t] = n
					}
				}, internal: function(t, n) {
					if(e.isPlainObject(t)) e.extend(!0, k, t);
					else
					{
						if(n === i) return k[t];
						k[t] = n
					}
				}, debug: function() {
					!T.silent && T.debug && (T.performance ? k.performance.log(arguments) : (k.debug = Function.prototype.bind.call(console.info, console, T.name + ":"), k.debug.apply(console, arguments)))
				}, verbose: function() {
					!T.silent && T.verbose && T.debug && (T.performance ? k.performance.log(arguments) : (k.verbose = Function.prototype.bind.call(console.info, console, T.name + ":"), k.verbose.apply(console, arguments)))
				}, error: function() {
					T.silent || (k.error = Function.prototype.bind.call(console.error, console, T.name + ":"), k.error.apply(console, arguments))
				}, performance: {
					log: function(e) {
						var t, n, i;
						T.performance && (t = (new Date).getTime(), i = c || t, n = t - i, c = t, d.push({Name: e[0], Arguments: [].slice.call(e, 1) || "", Element: G, "Execution Time": n})), clearTimeout(k.performance.timer), k.performance.timer = setTimeout(k.performance.display, 500)
					}, display: function() {
						var t = T.name + ":", n = 0;
						c = !1, clearTimeout(k.performance.timer), e.each(d, function(e, t) {
							n += t["Execution Time"]
						}), t += " " + n + "ms", l && (t += " '" + l + "'"), (console.group !== i || console.table !== i) && d.length > 0 && (console.groupCollapsed(t), console.table ? console.table(d) : e.each(d, function(e, t) {
							console.log(t.Name + ": " + t["Execution Time"] + "ms")
						}), console.groupEnd()), d = []
					}
				}, invoke: function(t, n, a) {
					var r, s, l, u = K;
					return n = n || p, a = G || a, "string" == typeof t && u !== i && (t = t.split(/[\. ]/), r = t.length - 1, e.each(t, function(n, a) {
						var o = n != r ? a + t[n + 1].charAt(0).toUpperCase() + t[n + 1].slice(1) : t;
						if(e.isPlainObject(u[o]) && n != r) u = u[o];
						else
						{
							if(u[o] !== i) return s = u[o], !1;
							if(!e.isPlainObject(u[a]) || n == r) return u[a] !== i ? (s = u[a], !1) : (k.error(D.method, t), !1);
							u = u[a]
						}
					})), e.isFunction(s) ? l = s.apply(a, n) : s !== i && (l = s), e.isArray(o) ? o.push(l) : o !== i ? o = [o, l] : l !== i && (o = l), s
				}
			}, h ? (K === i && k.initialize(), k.invoke(f)) : (K !== i && K.invoke("destroy"), k.initialize())
		}), o !== i ? o : r
	}, e.fn.dropdown.settings = {
		silent: !1, debug: !1, verbose: !1, performance: !0, on: "click", action: "activate", apiSettings: !1, selectOnKeydown: !0, minCharacters: 0, saveRemoteData: !0, throttle: 200, context: t, direction: "auto", keepOnScreen: !0, match: "both", fullTextSearch: !1, placeholder: "auto", preserveHTML: !0, sortSelect: !1, forceSelection: !0, allowAdditions: !1, hideAdditions: !0, maxSelections: !1, useLabels: !0, delimiter: ",", showOnFocus: !0, allowReselection: !1, allowTab: !0, allowCategorySelection: !1, fireOnInit: !1, transition: "auto", duration: 200, glyphWidth: 1.037, label: {transition: "scale", duration: 200, variation: !1}, delay: {hide: 300, show: 200, search: 20, touch: 50}, onChange: function() {
		}, onAdd: function() {
		}, onRemove: function() {
		}, onLabelSelect: function() {
		}, onLabelCreate: function() {
			return e(this)
		}, onLabelRemove: function() {
			return !0
		}, onNoResults: function() {
			return !0
		}, onShow: function() {
		}, onHide: function() {
		}, name: "Dropdown", namespace: "dropdown", message: {addResult: "Add <b>{term}</b>", count: "{count} selected", maxSelections: "Max {maxCount} selections", noResults: "No results found.", serverError: "There was an error contacting the server"}, error: {action: "You called a dropdown action that was not defined", alreadySetup: "Once a select has been initialized behaviors must be called on the created ui dropdown", labels: "Allowing user additions currently requires the use of labels.", missingMultiple: "<select> requires multiple property to be set to correctly preserve multiple values", method: "The method you called is not defined.", noAPI: "The API module is required to load resources remotely", noStorage: "Saving remote data requires session storage", noTransition: "This module requires ui transitions <https://github.com/Semantic-Org/UI-Transition>"}, regExp: {escape: /[-[\]{}()*+?.,\\^$|#\s]/g, quote: /"/g}, metadata: {defaultText: "defaultText", defaultValue: "defaultValue", placeholderText: "placeholder", text: "text", value: "value"}, fields: {remoteValues: "results", values: "values", disabled: "disabled", name: "name", value: "value", text: "text"}, keys: {backspace: 8, delimiter: 188, deleteKey: 46, enter: 13, escape: 27, pageUp: 33, pageDown: 34, leftArrow: 37, upArrow: 38, rightArrow: 39, downArrow: 40}, selector: {addition: ".addition", dropdown: ".ui.dropdown", hidden: ".hidden", icon: "> .dropdown.icon", input: '> input[type="hidden"], > select', item: ".item", label: "> .label", remove: "> .label > .delete.icon", siblingLabel: ".label", menu: ".menu", message: ".message", menuIcon: ".dropdown.icon", search: "input.search, .menu > .search > input, .menu input.search", sizer: "> input.sizer", text: "> .text:not(.icon)", unselectable: ".disabled, .filtered"}, className: {active: "active", addition: "addition", animating: "animating", disabled: "disabled", empty: "empty", dropdown: "ui dropdown", filtered: "filtered", hidden: "hidden transition", item: "item", label: "ui label", loading: "loading", menu: "menu", message: "message", multiple: "multiple", placeholder: "default", sizer: "sizer", search: "search", selected: "selected", selection: "selection", upward: "upward", visible: "visible"}
	}, e.fn.dropdown.settings.templates = {
		dropdown: function(t) {
			var n = t.placeholder || !1, i = (t.values || {}, "");
			return i += '<i class="dropdown icon"></i>', i += t.placeholder ? '<div class="default text">' + n + "</div>" : '<div class="text"></div>', i += '<div class="menu">', e.each(t.values, function(e, t) {
				i += t.disabled ? '<div class="disabled item" data-value="' + t.value + '">' + t.name + "</div>" : '<div class="item" data-value="' + t.value + '">' + t.name + "</div>"
			}), i += "</div>"
		}, menu: function(t, n) {
			var i = t[n.values] || {}, a = "";
			return e.each(i, function(e, t) {
				var i = t[n.text] ? 'data-text="' + t[n.text] + '"' : "", o = t[n.disabled] ? "disabled " : "";
				a += '<div class="' + o + 'item" data-value="' + t[n.value] + '"' + i + ">", a += t[n.name], a += "</div>"
			}), a
		}, label: function(e, t) {
			return t + '<i class="delete icon"></i>'
		}, message: function(e) {
			return e
		}, addition: function(e) {
			return e
		}
	}
}(jQuery, window, document), /*!
 * # Semantic UI 2.2.6 - Transition
 * http://github.com/semantic-org/semantic-ui/
 *
 *
 * Released under the MIT license
 * http://opensource.org/licenses/MIT
 *
 */
	!function(e, t, n, i) {
		"use strict";
		t = "undefined" != typeof t && t.Math == Math ? t : "undefined" != typeof self && self.Math == Math ? self : Function("return this")(), e.fn.transition = function() {
			var a, o = e(this), r = o.selector || "", s = (new Date).getTime(), l = [], u = arguments, c = u[0],
				d = [].slice.call(arguments, 1), f = "string" == typeof c;
			return t.requestAnimationFrame || t.mozRequestAnimationFrame || t.webkitRequestAnimationFrame || t.msRequestAnimationFrame || function(e) {
				setTimeout(e, 0)
			}, o.each(function(t) {
				var h, p, m, v, g, y, b, w, x, C = e(this), k = this;
				x = {
					initialize: function() {
						h = x.get.settings.apply(k, u), v = h.className, m = h.error, g = h.metadata, w = "." + h.namespace, b = "module-" + h.namespace, p = C.data(b) || x, y = x.get.animationEndEvent(), f && (f = x.invoke(c)), f === !1 && (x.verbose("Converted arguments into settings object", h), h.interval ? x.delay(h.animate) : x.animate(), x.instantiate())
					}, instantiate: function() {
						x.verbose("Storing instance of module", x), p = x, C.data(b, p)
					}, destroy: function() {
						x.verbose("Destroying previous module for", k), C.removeData(b)
					}, refresh: function() {
						x.verbose("Refreshing display type on next animation"), delete x.displayType
					}, forceRepaint: function() {
						x.verbose("Forcing element repaint");
						var e = C.parent(), t = C.next();
						0 === t.length ? C.detach().appendTo(e) : C.detach().insertBefore(t)
					}, repaint: function() {
						x.verbose("Repainting element"), k.offsetWidth
					}, delay: function(e) {
						var n, a, r = x.get.animationDirection();
						r || (r = x.can.transition() ? x.get.direction() : "static"), e = e !== i ? e : h.interval, n = "auto" == h.reverse && r == v.outward, a = n || 1 == h.reverse ? (o.length - t) * h.interval : t * h.interval, x.debug("Delaying animation by", a), setTimeout(x.animate, a)
					}, animate: function(e) {
						if(h = e || h, !x.is.supported()) return x.error(m.support), !1;
						if(x.debug("Preparing animation", h.animation), x.is.animating())
						{
							if(h.queue) return !h.allowRepeats && x.has.direction() && x.is.occurring() && x.queuing !== !0 ? x.debug("Animation is currently occurring, preventing queueing same animation", h.animation) : x.queue(h.animation), !1;
							if(!h.allowRepeats && x.is.occurring()) return x.debug("Animation is already occurring, will not execute repeated animation", h.animation), !1;
							x.debug("New animation started, completing previous early", h.animation), p.complete()
						}
						x.can.animate() ? x.set.animating(h.animation) : x.error(m.noAnimation, h.animation, k)
					}, reset: function() {
						x.debug("Resetting animation to beginning conditions"), x.remove.animationCallbacks(), x.restore.conditions(), x.remove.animating()
					}, queue: function(e) {
						x.debug("Queueing animation of", e), x.queuing = !0, C.one(y + ".queue" + w, function() {
							x.queuing = !1, x.repaint(), x.animate.apply(this, h)
						})
					}, complete: function() {
						x.debug("Animation complete", h.animation), x.remove.completeCallback(), x.remove.failSafe(), x.is.looping() || (x.is.outward() ? (x.verbose("Animation is outward, hiding element"), x.restore.conditions(), x.hide()) : x.is.inward() ? (x.verbose("Animation is outward, showing element"), x.restore.conditions(), x.show()) : (x.verbose("Static animation completed"), x.restore.conditions(), h.onComplete.call(k)))
					}, force: {
						visible: function() {
							var e = C.attr("style"), t = x.get.userStyle(), n = x.get.displayType(),
								a = t + "display: " + n + " !important;", o = C.css("display"), r = e === i || "" === e;
							o !== n ? (x.verbose("Overriding default display to show element", n), C.attr("style", a)) : r && C.removeAttr("style")
						}, hidden: function() {
							var e = C.attr("style"), t = C.css("display"), n = e === i || "" === e;
							"none" === t || x.is.hidden() ? n && C.removeAttr("style") : (x.verbose("Overriding default display to hide element"), C.css("display", "none"))
						}
					}, has: {
						direction: function(t) {
							var n = !1;
							return t = t || h.animation, "string" == typeof t && (t = t.split(" "), e.each(t, function(e, t) {
								t !== v.inward && t !== v.outward || (n = !0)
							})), n
						}, inlineDisplay: function() {
							var t = C.attr("style") || "";
							return e.isArray(t.match(/display.*?;/, ""))
						}
					}, set: {
						animating: function(e) {
							var t;
							x.remove.completeCallback(), e = e || h.animation, t = x.get.animationClass(e), x.save.animation(t), x.force.visible(), x.remove.hidden(), x.remove.direction(), x.start.animation(t)
						}, duration: function(e, t) {
							t = t || h.duration, t = "number" == typeof t ? t + "ms" : t, (t || 0 === t) && (x.verbose("Setting animation duration", t), C.css({"animation-duration": t}))
						}, direction: function(e) {
							e = e || x.get.direction(), e == v.inward ? x.set.inward() : x.set.outward()
						}, looping: function() {
							x.debug("Transition set to loop"), C.addClass(v.looping)
						}, hidden: function() {
							C.addClass(v.transition).addClass(v.hidden)
						}, inward: function() {
							x.debug("Setting direction to inward"), C.removeClass(v.outward).addClass(v.inward)
						}, outward: function() {
							x.debug("Setting direction to outward"), C.removeClass(v.inward).addClass(v.outward)
						}, visible: function() {
							C.addClass(v.transition).addClass(v.visible)
						}
					}, start: {
						animation: function(e) {
							e = e || x.get.animationClass(), x.debug("Starting tween", e), C.addClass(e).one(y + ".complete" + w, x.complete), h.useFailSafe && x.add.failSafe(), x.set.duration(h.duration), h.onStart.call(k)
						}
					}, save: {
						animation: function(e) {
							x.cache || (x.cache = {}), x.cache.animation = e
						}, displayType: function(e) {
							"none" !== e && C.data(g.displayType, e)
						}, transitionExists: function(t, n) {
							e.fn.transition.exists[t] = n, x.verbose("Saving existence of transition", t, n)
						}
					}, restore: {
						conditions: function() {
							var e = x.get.currentAnimation();
							e && (C.removeClass(e), x.verbose("Removing animation class", x.cache)), x.remove.duration()
						}
					}, add: {
						failSafe: function() {
							var e = x.get.duration();
							x.timer = setTimeout(function() {
								C.triggerHandler(y)
							}, e + h.failSafeDelay), x.verbose("Adding fail safe timer", x.timer)
						}
					}, remove: {
						animating: function() {
							C.removeClass(v.animating)
						}, animationCallbacks: function() {
							x.remove.queueCallback(), x.remove.completeCallback()
						}, queueCallback: function() {
							C.off(".queue" + w)
						}, completeCallback: function() {
							C.off(".complete" + w)
						}, display: function() {
							C.css("display", "")
						}, direction: function() {
							C.removeClass(v.inward).removeClass(v.outward)
						}, duration: function() {
							C.css("animation-duration", "")
						}, failSafe: function() {
							x.verbose("Removing fail safe timer", x.timer), x.timer && clearTimeout(x.timer)
						}, hidden: function() {
							C.removeClass(v.hidden)
						}, visible: function() {
							C.removeClass(v.visible)
						}, looping: function() {
							x.debug("Transitions are no longer looping"), x.is.looping() && (x.reset(), C.removeClass(v.looping))
						}, transition: function() {
							C.removeClass(v.visible).removeClass(v.hidden)
						}
					}, get: {
						settings: function(t, n, i) {
							return "object" == typeof t ? e.extend(!0, {}, e.fn.transition.settings, t) : "function" == typeof i ? e.extend({}, e.fn.transition.settings, {animation: t, onComplete: i, duration: n}) : "string" == typeof n || "number" == typeof n ? e.extend({}, e.fn.transition.settings, {animation: t, duration: n}) : "object" == typeof n ? e.extend({}, e.fn.transition.settings, n, {animation: t}) : "function" == typeof n ? e.extend({}, e.fn.transition.settings, {animation: t, onComplete: n}) : e.extend({}, e.fn.transition.settings, {animation: t})
						}, animationClass: function(e) {
							var t = e || h.animation,
								n = x.can.transition() && !x.has.direction() ? x.get.direction() + " " : "";
							return v.animating + " " + v.transition + " " + n + t
						}, currentAnimation: function() {
							return !(!x.cache || x.cache.animation === i) && x.cache.animation
						}, currentDirection: function() {
							return x.is.inward() ? v.inward : v.outward
						}, direction: function() {
							return x.is.hidden() || !x.is.visible() ? v.inward : v.outward
						}, animationDirection: function(t) {
							var n;
							return t = t || h.animation, "string" == typeof t && (t = t.split(" "), e.each(t, function(e, t) {
								t === v.inward ? n = v.inward : t === v.outward && (n = v.outward)
							})), !!n && n
						}, duration: function(e) {
							return e = e || h.duration, e === !1 && (e = C.css("animation-duration") || 0), "string" == typeof e ? e.indexOf("ms") > -1 ? parseFloat(e) : 1e3 * parseFloat(e) : e
						}, displayType: function(e) {
							return e = e === i || e, h.displayType ? h.displayType : (e && C.data(g.displayType) === i && x.can.transition(!0), C.data(g.displayType))
						}, userStyle: function(e) {
							return e = e || C.attr("style") || "", e.replace(/display.*?;/, "")
						}, transitionExists: function(t) {
							return e.fn.transition.exists[t]
						}, animationStartEvent: function() {
							var e, t = n.createElement("div"),
								a = {animation: "animationstart", OAnimation: "oAnimationStart", MozAnimation: "mozAnimationStart", WebkitAnimation: "webkitAnimationStart"};
							for(e in a)
							{
								if(t.style[e] !== i) return a[e];
							}
							return !1
						}, animationEndEvent: function() {
							var e, t = n.createElement("div"),
								a = {animation: "animationend", OAnimation: "oAnimationEnd", MozAnimation: "mozAnimationEnd", WebkitAnimation: "webkitAnimationEnd"};
							for(e in a)
							{
								if(t.style[e] !== i) return a[e];
							}
							return !1
						}
					}, can: {
						transition: function(t) {
							var n, a, o, r, s, l, u = h.animation, c = x.get.transitionExists(u),
								d = x.get.displayType(!1);
							if(c === i || t)
							{
								if(x.verbose("Determining whether animation exists"), n = C.attr("class"), a = C.prop("tagName"), o = e("<" + a + " />").addClass(n).insertAfter(C), r = o.addClass(u).removeClass(v.inward).removeClass(v.outward).addClass(v.animating).addClass(v.transition).css("animationName"), s = o.addClass(v.inward).css("animationName"), d || (d = o.attr("class", n).removeAttr("style").removeClass(v.hidden).removeClass(v.visible).show().css("display"), x.verbose("Determining final display state", d), x.save.displayType(d)), o.remove(), r != s) x.debug("Direction exists for animation", u), l = !0;
								else
								{
									if("none" == r || !r) return void x.debug("No animation defined in css", u);
									x.debug("Static animation found", u, d), l = !1
								}
								x.save.transitionExists(u, l)
							}
							return c !== i ? c : l
						}, animate: function() {
							return x.can.transition() !== i
						}
					}, is: {
						animating: function() {
							return C.hasClass(v.animating)
						}, inward: function() {
							return C.hasClass(v.inward)
						}, outward: function() {
							return C.hasClass(v.outward)
						}, looping: function() {
							return C.hasClass(v.looping)
						}, occurring: function(e) {
							return e = e || h.animation, e = "." + e.replace(" ", "."), C.filter(e).length > 0
						}, visible: function() {
							return C.is(":visible")
						}, hidden: function() {
							return "hidden" === C.css("visibility")
						}, supported: function() {
							return y !== !1
						}
					}, hide: function() {
						x.verbose("Hiding element"), x.is.animating() && x.reset(), k.blur(), x.remove.display(), x.remove.visible(), x.set.hidden(), x.force.hidden(), h.onHide.call(k), h.onComplete.call(k)
					}, show: function(e) {
						x.verbose("Showing element", e), x.remove.hidden(), x.set.visible(), x.force.visible(), h.onShow.call(k), h.onComplete.call(k)
					}, toggle: function() {
						x.is.visible() ? x.hide() : x.show()
					}, stop: function() {
						x.debug("Stopping current animation"), C.triggerHandler(y)
					}, stopAll: function() {
						x.debug("Stopping all animation"), x.remove.queueCallback(), C.triggerHandler(y)
					}, clear: {
						queue: function() {
							x.debug("Clearing animation queue"), x.remove.queueCallback()
						}
					}, enable: function() {
						x.verbose("Starting animation"), C.removeClass(v.disabled)
					}, disable: function() {
						x.debug("Stopping animation"), C.addClass(v.disabled)
					}, setting: function(t, n) {
						if(x.debug("Changing setting", t, n), e.isPlainObject(t)) e.extend(!0, h, t);
						else
						{
							if(n === i) return h[t];
							e.isPlainObject(h[t]) ? e.extend(!0, h[t], n) : h[t] = n
						}
					}, internal: function(t, n) {
						if(e.isPlainObject(t)) e.extend(!0, x, t);
						else
						{
							if(n === i) return x[t];
							x[t] = n
						}
					}, debug: function() {
						!h.silent && h.debug && (h.performance ? x.performance.log(arguments) : (x.debug = Function.prototype.bind.call(console.info, console, h.name + ":"), x.debug.apply(console, arguments)))
					}, verbose: function() {
						!h.silent && h.verbose && h.debug && (h.performance ? x.performance.log(arguments) : (x.verbose = Function.prototype.bind.call(console.info, console, h.name + ":"), x.verbose.apply(console, arguments)))
					}, error: function() {
						h.silent || (x.error = Function.prototype.bind.call(console.error, console, h.name + ":"), x.error.apply(console, arguments))
					}, performance: {
						log: function(e) {
							var t, n, i;
							h.performance && (t = (new Date).getTime(), i = s || t, n = t - i, s = t, l.push({Name: e[0], Arguments: [].slice.call(e, 1) || "", Element: k, "Execution Time": n})), clearTimeout(x.performance.timer), x.performance.timer = setTimeout(x.performance.display, 500)
						}, display: function() {
							var t = h.name + ":", n = 0;
							s = !1, clearTimeout(x.performance.timer), e.each(l, function(e, t) {
								n += t["Execution Time"]
							}), t += " " + n + "ms", r && (t += " '" + r + "'"), o.length > 1 && (t += " (" + o.length + ")"), (console.group !== i || console.table !== i) && l.length > 0 && (console.groupCollapsed(t), console.table ? console.table(l) : e.each(l, function(e, t) {
								console.log(t.Name + ": " + t["Execution Time"] + "ms")
							}), console.groupEnd()), l = []
						}
					}, invoke: function(t, n, o) {
						var r, s, l, u = p;
						return n = n || d, o = k || o, "string" == typeof t && u !== i && (t = t.split(/[\. ]/), r = t.length - 1, e.each(t, function(n, a) {
							var o = n != r ? a + t[n + 1].charAt(0).toUpperCase() + t[n + 1].slice(1) : t;
							if(e.isPlainObject(u[o]) && n != r) u = u[o];
							else
							{
								if(u[o] !== i) return s = u[o], !1;
								if(!e.isPlainObject(u[a]) || n == r) return u[a] !== i && (s = u[a], !1);
								u = u[a]
							}
						})), e.isFunction(s) ? l = s.apply(o, n) : s !== i && (l = s), e.isArray(a) ? a.push(l) : a !== i ? a = [a, l] : l !== i && (a = l), s !== i && s
					}
				}, x.initialize()
			}), a !== i ? a : this
		}, e.fn.transition.exists = {}, e.fn.transition.settings = {
			name: "Transition", silent: !1, debug: !1, verbose: !1, performance: !0, namespace: "transition", interval: 0, reverse: "auto", onStart: function() {
			}, onComplete: function() {
			}, onShow: function() {
			}, onHide: function() {
			}, useFailSafe: !0, failSafeDelay: 100, allowRepeats: !1, displayType: !1, animation: "fade", duration: !1, queue: !0, metadata: {displayType: "display"}, className: {animating: "animating", disabled: "disabled", hidden: "hidden", inward: "in", loading: "loading", looping: "looping", outward: "out", transition: "transition", visible: "visible"}, error: {noAnimation: "Element is no longer attached to DOM. Unable to animate.  Use silent setting to surpress this warning in production.", repeated: "That animation is already occurring, cancelling repeated animation", method: "The method you called is not defined", support: "This browser does not support CSS animations"}
		}
	}(jQuery, window, document), function(e) {
	"use strict";
	var t = "starRating", n = function() {
		},
		i = {totalStars: 5, useFullStars: !1, starShape: "straight", emptyColor: "lightgray", hoverColor: "orange", activeColor: "gold", useGradient: !0, readOnly: !1, disableAfterRate: !0, baseUrl: !1, starGradient: {start: "#FEF7CD", end: "#FF9511"}, strokeWidth: 4, strokeColor: "black", initialRating: 0, starSize: 40, callback: n, onHover: n, onLeave: n},
		a = function(n, a) {
			var o;
			this.element = n, this.$el = e(n), this.settings = e.extend({}, i, a), o = this.$el.data("rating") || this.settings.initialRating, this._state = {rating: (Math.round(2 * o) / 2).toFixed(1)}, this._uid = Math.floor(999 * Math.random()), a.starGradient || this.settings.useGradient || (this.settings.starGradient.start = this.settings.starGradient.end = this.settings.activeColor), this._defaults = i, this._name = t, this.init()
		}, o = {
			init: function() {
				this.renderMarkup(), this.addListeners(), this.initRating()
			}, addListeners: function() {
				this.settings.readOnly || (this.$stars.on("mouseover", this.hoverRating.bind(this)), this.$stars.on("mouseout", this.restoreState.bind(this)), this.$stars.on("click", this.handleRating.bind(this)))
			}, hoverRating: function(e) {
				var t = this.getIndex(e);
				this.paintStars(t, "hovered"), this.settings.onHover(t + 1, this._state.rating, this.$el)
			}, handleRating: function(e) {
				var t = this.getIndex(e), n = t + 1;
				this.applyRating(n, this.$el), this.executeCallback(n, this.$el), this.settings.disableAfterRate && this.$stars.off()
			}, applyRating: function(e) {
				var t = e - 1;
				this.paintStars(t, "active"), this._state.rating = t + 1
			}, restoreState: function(e) {
				var t = this.getIndex(e), n = this._state.rating || -1;
				this.paintStars(n - 1, "active"), this.settings.onLeave(t + 1, this._state.rating, this.$el)
			}, getIndex: function(t) {
				var n = e(t.currentTarget), i = n.width(), a = e(t.target).attr("data-side");
				a = a ? a : this.getOffsetByPixel(t, n, i), a = this.settings.useFullStars ? "right" : a;
				var o = n.index() - ("left" === a ? .5 : 0);
				return o = .5 > o && t.offsetX < i / 4 ? -1 : o
			}, getOffsetByPixel: function(e, t, n) {
				var i = e.pageX - t.offset().left;
				return n / 2 >= i && !this.settings.useFullStars ? "left" : "right"
			}, initRating: function() {
				this.paintStars(this._state.rating - 1, "active")
			}, paintStars: function(t, n) {
				var i, a, o, r;
				e.each(this.$stars, function(s, l) {
					i = e(l).find('[data-side="left"]'), a = e(l).find('[data-side="right"]'), o = r = t >= s ? n : "empty", o = s - t === .5 ? n : o, i.attr("class", "svg-" + o + "-" + this._uid), a.attr("class", "svg-" + r + "-" + this._uid)
				}.bind(this))
			}, renderMarkup: function() {
				for(var e = this.settings, t = e.baseUrl ? location.href.split("#")[0] : "", n = '<div class="jq-star" style="width:' + e.starSize + "px;  height:" + e.starSize + 'px;"><svg version="1.0" class="jq-star-svg" shape-rendering="geometricPrecision" xmlns="http://www.w3.org/2000/svg" ' + this.getSvgDimensions(e.starShape) + " stroke-width:" + e.strokeWidth + 'px;" xml:space="preserve"><style type="text/css">.svg-empty-' + this._uid + "{fill:url(" + t + "#" + this._uid + "_SVGID_1_);}.svg-hovered-" + this._uid + "{fill:url(" + t + "#" + this._uid + "_SVGID_2_);}.svg-active-" + this._uid + "{fill:url(" + t + "#" + this._uid + "_SVGID_3_);}</style>" + this.getLinearGradient(this._uid + "_SVGID_1_", e.emptyColor, e.emptyColor, e.starShape) + this.getLinearGradient(this._uid + "_SVGID_2_", e.hoverColor, e.hoverColor, e.starShape) + this.getLinearGradient(this._uid + "_SVGID_3_", e.starGradient.start, e.starGradient.end, e.starShape) + this.getVectorPath(this._uid, {starShape: e.starShape, strokeWidth: e.strokeWidth, strokeColor: e.strokeColor}) + "</svg></div>", i = "", a = 0; a < e.totalStars; a++)
				{
					i += n;
				}
				this.$el.append(i), this.$stars = this.$el.find(".jq-star")
			}, getVectorPath: function(e, t) {
				return "rounded" === t.starShape ? this.getRoundedVectorPath(e, t) : this.getSpikeVectorPath(e, t)
			}, getSpikeVectorPath: function(e, t) {
				return '<polygon data-side="center" class="svg-empty-' + e + '" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 212.9,181.1 213.9,181 306.5,241 " style="fill: transparent; stroke: ' + t.strokeColor + ';" /><polygon data-side="left" class="svg-empty-' + e + '" points="281.1,129.8 364,55.7 255.5,46.8 214,-59 172.5,46.8 64,55.4 146.8,129.7 121.1,241 213.9,181.1 213.9,181 306.5,241 " style="stroke-opacity: 0;" /><polygon data-side="right" class="svg-empty-' + e + '" points="364,55.7 255.5,46.8 214,-59 213.9,181 306.5,241 281.1,129.8 " style="stroke-opacity: 0;" />'
			}, getRoundedVectorPath: function(e, t) {
				var n = "M520.9,336.5c-3.8-11.8-14.2-20.5-26.5-22.2l-140.9-20.5l-63-127.7 c-5.5-11.2-16.8-18.2-29.3-18.2c-12.5,0-23.8,7-29.3,18.2l-63,127.7L28,314.2C15.7,316,5.4,324.7,1.6,336.5S1,361.3,9.9,370 l102,99.4l-24,140.3c-2.1,12.3,2.9,24.6,13,32c5.7,4.2,12.4,6.2,19.2,6.2c5.2,0,10.5-1.2,15.2-3.8l126-66.3l126,66.2 c4.8,2.6,10,3.8,15.2,3.8c6.8,0,13.5-2.1,19.2-6.2c10.1-7.3,15.1-19.7,13-32l-24-140.3l102-99.4 C521.6,361.3,524.8,348.3,520.9,336.5z";
				return '<path data-side="center" class="svg-empty-' + e + '" d="' + n + '" style="stroke: ' + t.strokeColor + '; fill: transparent; " /><path data-side="right" class="svg-empty-' + e + '" d="' + n + '" style="stroke-opacity: 0;" /><path data-side="left" class="svg-empty-' + e + '" d="M121,648c-7.3,0-14.1-2.2-19.8-6.4c-10.4-7.6-15.6-20.3-13.4-33l24-139.9l-101.6-99 c-9.1-8.9-12.4-22.4-8.6-34.5c3.9-12.1,14.6-21.1,27.2-23l140.4-20.4L232,164.6c5.7-11.6,17.3-18.8,30.2-16.8c0.6,0,1,0.4,1,1 v430.1c0,0.4-0.2,0.7-0.5,0.9l-126,66.3C132,646.6,126.6,648,121,648z" style="stroke: ' + t.strokeColor + '; stroke-opacity: 0;" />'
			}, getSvgDimensions: function(e) {
				return "rounded" === e ? 'width="550px" height="500.2px" viewBox="0 146.8 550 500.2" style="enable-background:new 0 0 550 500.2;' : 'x="0px" y="0px" width="305px" height="305px" viewBox="60 -62 309 309" style="enable-background:new 64 -59 305 305;'
			}, getLinearGradient: function(e, t, n, i) {
				var a = "rounded" === i ? 500 : 250;
				return '<linearGradient id="' + e + '" gradientUnits="userSpaceOnUse" x1="0" y1="-50" x2="0" y2="' + a + '"><stop  offset="0" style="stop-color:' + t + '"/><stop  offset="1" style="stop-color:' + n + '"/> </linearGradient>'
			}, executeCallback: function(e, t) {
				var n = this.settings.callback;
				n(e, t)
			}
		}, r = {
			unload: function() {
				var n = "plugin_" + t, i = e(this), a = i.data(n).$stars;
				a.off(), i.removeData(n).remove()
			}, setRating: function(n, i) {
				var a = "plugin_" + t, o = e(this), r = o.data(a);
				n > r.settings.totalStars || 0 > n || (i && (n = Math.round(n)), r.applyRating(n))
			}, getRating: function() {
				var n = "plugin_" + t, i = e(this), a = i.data(n);
				return a._state.rating
			}, resize: function(n) {
				var i = "plugin_" + t, a = e(this), o = a.data(i), r = o.$stars;
				return 1 >= n || n > 200 ? void console.log("star size out of bounds") : (r = Array.prototype.slice.call(r), void r.forEach(function(t) {
					e(t).css({width: n + "px", height: n + "px"})
				}))
			}, setReadOnly: function(n) {
				var i = "plugin_" + t, a = e(this), o = a.data(i);
				n === !0 ? o.$stars.off("mouseover mouseout click") : (o.settings.readOnly = !1, o.addListeners())
			}
		};
	e.extend(a.prototype, o), e.fn[t] = function(n) {
		if(!e.isPlainObject(n))
		{
			if(r.hasOwnProperty(n)) return r[n].apply(this, Array.prototype.slice.call(arguments, 1));
			e.error("Method " + n + " does not exist on " + t + ".js")
		}
		return this.each(function() {
			e.data(this, "plugin_" + t) || e.data(this, "plugin_" + t, new a(this, n))
		})
	}
}(jQuery, window, document);
var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
	return typeof e
} : function(e) {
	return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
};
!function(e) {
	"use strict";

	function t (e) {
		if(void 0 === Function.prototype.name)
		{
			var t = /function\s([^(]{1,})\(/, n = t.exec(e.toString());
			return n && n.length > 1 ? n[1].trim() : ""
		}
		return void 0 === e.prototype ? e.constructor.name : e.prototype.constructor.name
	}

	function n (e) {
		return /true/.test(e) ? !0 : /false/.test(e) ? !1 : isNaN(1 * e) ? e : parseFloat(e)
	}

	function i (e) {
		return e.replace(/([a-z])([A-Z])/g, "$1-$2").toLowerCase()
	}

	var a = "6.2.4-rc2", o = {
		version: a, _plugins: {}, _uuids: [], rtl: function() {
			return "rtl" === e("html").attr("dir")
		}, plugin: function(e, n) {
			var a = n || t(e), o = i(a);
			this._plugins[o] = this[a] = e
		}, registerPlugin: function(e, n) {
			var a = n ? i(n) : t(e.constructor).toLowerCase();
			e.uuid = this.GetYoDigits(6, a), e.$element.attr("data-" + a) || e.$element.attr("data-" + a, e.uuid), e.$element.data("zfPlugin") || e.$element.data("zfPlugin", e), e.$element.trigger("init.zf." + a), this._uuids.push(e.uuid)
		}, unregisterPlugin: function(e) {
			var n = i(t(e.$element.data("zfPlugin").constructor));
			this._uuids.splice(this._uuids.indexOf(e.uuid), 1), e.$element.removeAttr("data-" + n).removeData("zfPlugin").trigger("destroyed.zf." + n);
			for(var a in e)
			{
				e[a] = null
			}
		}, reInit: function(t) {
			var n = t instanceof e;
			try
			{
				if(n) t.each(function() {
					e(this).data("zfPlugin")._init()
				});
				else
				{
					var a = "undefined" == typeof t ? "undefined" : _typeof(t), o = this, r = {
						object: function(t) {
							t.forEach(function(t) {
								t = i(t), e("[data-" + t + "]").foundation("_init")
							})
						}, string: function() {
							t = i(t), e("[data-" + t + "]").foundation("_init")
						}, undefined: function() {
							this.object(Object.keys(o._plugins))
						}
					};
					r[a](t)
				}
			} catch (s)
			{
				console.error(s)
			} finally
			{
				return t
			}
		}, GetYoDigits: function(e, t) {
			return e = e || 6, Math.round(Math.pow(36, e + 1) - Math.random() * Math.pow(36, e)).toString(36).slice(1) + (t ? "-" + t : "")
		}, reflow: function(t, i) {
			"undefined" == typeof i ? i = Object.keys(this._plugins) : "string" == typeof i && (i = [i]);
			var a = this;
			e.each(i, function(i, o) {
				var r = a._plugins[o], s = e(t).find("[data-" + o + "]").addBack("[data-" + o + "]");
				s.each(function() {
					var t = e(this), i = {};
					if(t.data("zfPlugin")) return void console.warn("Tried to initialize " + o + " on an element that already has a Foundation plugin.");
					if(t.attr("data-options"))
					{
						t.attr("data-options").split(";").forEach(function(e) {
							var t = e.split(":").map(function(e) {
								return e.trim()
							});
							t[0] && (i[t[0]] = n(t[1]))
						})
					}
					try
					{
						t.data("zfPlugin", new r(e(this), i))
					} catch (a)
					{
						//console.error(a)
					} finally
					{
						return
					}
				})
			})
		}, getFnName: t, transitionend: function(e) {
			var t,
				n = {transition: "transitionend", WebkitTransition: "webkitTransitionEnd", MozTransition: "transitionend", OTransition: "otransitionend"},
				i = document.createElement("div");
			for(var a in n)
			{
				"undefined" != typeof i.style[a] && (t = n[a]);
			}
			return t ? t : (t = setTimeout(function() {
				e.triggerHandler("transitionend", [e])
			}, 1), "transitionend")
		}
	};
	o.util = {
		throttle: function(e, t) {
			var n = null;
			return function() {
				var i = this, a = arguments;
				null === n && (n = setTimeout(function() {
					e.apply(i, a), n = null
				}, t))
			}
		}
	};
	var r = function(n) {
		var i = "undefined" == typeof n ? "undefined" : _typeof(n), a = e("meta.foundation-mq"), r = e(".no-js");
		if(a.length || e('<meta class="foundation-mq">').appendTo(document.head), r.length && r.removeClass("no-js"), "undefined" === i) o.MediaQuery._init(), o.reflow(this);
		else
		{
			if("string" !== i) throw new TypeError("We're sorry, " + i + " is not a valid parameter. You must use a string representing the method you wish to invoke.");
			var s = Array.prototype.slice.call(arguments, 1), l = this.data("zfPlugin");
			if(void 0 === l || void 0 === l[n]) throw new ReferenceError("We're sorry, '" + n + "' is not an available method for " + (l ? t(l) : "this element") + ".");
			1 === this.length ? l[n].apply(l, s) : this.each(function(t, i) {
				l[n].apply(e(i).data("zfPlugin"), s)
			})
		}
		return this
	};
	window.Foundation = o, e.fn.foundation = r, function() {
		Date.now && window.Date.now || (window.Date.now = Date.now = function() {
			return (new Date).getTime()
		});
		for(var e = ["webkit", "moz"], t = 0; t < e.length && !window.requestAnimationFrame; ++t)
		{
			var n = e[t];
			window.requestAnimationFrame = window[n + "RequestAnimationFrame"], window.cancelAnimationFrame = window[n + "CancelAnimationFrame"] || window[n + "CancelRequestAnimationFrame"]
		}
		if(/iP(ad|hone|od).*OS 6/.test(window.navigator.userAgent) || !window.requestAnimationFrame || !window.cancelAnimationFrame)
		{
			var i = 0;
			window.requestAnimationFrame = function(e) {
				var t = Date.now(), n = Math.max(i + 16, t);
				return setTimeout(function() {
					e(i = n)
				}, n - t)
			}, window.cancelAnimationFrame = clearTimeout
		}
		window.performance && window.performance.now || (window.performance = {
			start: Date.now(), now: function() {
				return Date.now() - this.start
			}
		})
	}(), Function.prototype.bind || (Function.prototype.bind = function(e) {
		if("function" != typeof this) throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");
		var t = Array.prototype.slice.call(arguments, 1), n = this, i = function() {
		}, a = function() {
			return n.apply(this instanceof i ? this : e, t.concat(Array.prototype.slice.call(arguments)))
		};
		return this.prototype && (i.prototype = this.prototype), a.prototype = new i, a
	})
}(jQuery);
var _createClass = function() {
	function e (e, t) {
		for(var n = 0; n < t.length; n++)
		{
			var i = t[n];
			i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
		}
	}

	return function(t, n, i) {
		return n && e(t.prototype, n), i && e(t, i), t
	}
}();
!function(e) {
	function t (e, t) {
		return e / t
	}

	function n (e, t, n, i) {
		return Math.abs(e.position()[t] + e[i]() / 2 - n)
	}

	var i = function() {
		function i (t, n) {
			_classCallCheck(this, i), this.$element = t, this.options = e.extend({}, i.defaults, this.$element.data(), n), this._init(), Foundation.registerPlugin(this, "Slider"), Foundation.Keyboard.register("Slider", {ltr: {ARROW_RIGHT: "increase", ARROW_UP: "increase", ARROW_DOWN: "decrease", ARROW_LEFT: "decrease", SHIFT_ARROW_RIGHT: "increase_fast", SHIFT_ARROW_UP: "increase_fast", SHIFT_ARROW_DOWN: "decrease_fast", SHIFT_ARROW_LEFT: "decrease_fast"}, rtl: {ARROW_LEFT: "increase", ARROW_RIGHT: "decrease", SHIFT_ARROW_LEFT: "increase_fast", SHIFT_ARROW_RIGHT: "decrease_fast"}})
		}

		return _createClass(i, [{
			key: "_init", value: function() {
				this.inputs = this.$element.find("input"), this.handles = this.$element.find("[data-slider-handle]"), this.$handle = this.handles.eq(0), this.$input = this.inputs.length ? this.inputs.eq(0) : e("#" + this.$handle.attr("aria-controls")), this.$fill = this.$element.find("[data-slider-fill]").css(this.options.vertical ? "height" : "width", 0);
				var t = !1, n = this;
				(this.options.disabled || this.$element.hasClass(this.options.disabledClass)) && (this.options.disabled = !0, this.$element.addClass(this.options.disabledClass)), this.inputs.length || (this.inputs = e().add(this.$input), this.options.binding = !0), this._setInitAttr(0), this._events(this.$handle), this.handles[1] && (this.options.doubleSided = !0, this.$handle2 = this.handles.eq(1), this.$input2 = this.inputs.length > 1 ? this.inputs.eq(1) : e("#" + this.$handle2.attr("aria-controls")), this.inputs[1] || (this.inputs = this.inputs.add(this.$input2)), t = !0, this._setHandlePos(this.$handle, this.options.initialStart, !0, function() {
					n._setHandlePos(n.$handle2, n.options.initialEnd, !0)
				}), this._setInitAttr(1), this._events(this.$handle2)), t || this._setHandlePos(this.$handle, this.options.initialStart, !0)
			}
		}, {
			key: "_setHandlePos", value: function(e, n, i, a) {
				if(!this.$element.hasClass(this.options.disabledClass))
				{
					n = parseFloat(n), n < this.options.start ? n = this.options.start : n > this.options.end && (n = this.options.end);
					var o = this.options.doubleSided;
					if(o) if(0 === this.handles.index(e))
					{
						var r = parseFloat(this.$handle2.attr("aria-valuenow"));
						n = n >= r ? r - this.options.step : n
					}
					else
					{
						var s = parseFloat(this.$handle.attr("aria-valuenow"));
						n = s >= n ? s + this.options.step : n
					}
					this.options.vertical && !i && (n = this.options.end - n);
					var l = this, u = this.options.vertical, c = u ? "height" : "width", d = u ? "top" : "left",
						f = e[0].getBoundingClientRect()[c], h = this.$element[0].getBoundingClientRect()[c],
						p = t(n - this.options.start, this.options.end - this.options.start).toFixed(2),
						m = (h - f) * p, v = (100 * t(m, h)).toFixed(this.options.decimal);
					n = parseFloat(n.toFixed(this.options.decimal));
					var g = {};
					if(this._setValues(e, n), o)
					{
						var y, b = 0 === this.handles.index(e), w = ~~(100 * t(f, h));
						if(b) g[d] = v + "%", y = parseFloat(this.$handle2[0].style[d]) - v + w, a && "function" == typeof a && a();
						else
						{
							var x = parseFloat(this.$handle[0].style[d]);
							y = v - (isNaN(x) ? this.options.initialStart / ((this.options.end - this.options.start) / 100) : x) + w
						}
						g["min-" + c] = y + "%"
					}
					this.$element.one("finished.zf.animate", function() {
						l.$element.trigger("moved.zf.slider", [e])
					});
					var C = this.$element.data("dragging") ? 1e3 / 60 : this.options.moveTime;
					Foundation.Move(C, e, function() {
						e.css(d, v + "%"), l.options.doubleSided ? l.$fill.css(g) : l.$fill.css(c, 100 * p + "%")
					}), clearTimeout(l.timeout), l.timeout = setTimeout(function() {
						l.$element.trigger("changed.zf.slider", [e])
					}, l.options.changedDelay)
				}
			}
		}, {
			key: "_setInitAttr", value: function(e) {
				var t = this.inputs.eq(e).attr("id") || Foundation.GetYoDigits(6, "slider");
				this.inputs.eq(e).attr({id: t, max: this.options.end, min: this.options.start, step: this.options.step}), this.handles.eq(e).attr({role: "slider", "aria-controls": t, "aria-valuemax": this.options.end, "aria-valuemin": this.options.start, "aria-valuenow": 0 === e ? this.options.initialStart : this.options.initialEnd, "aria-orientation": this.options.vertical ? "vertical" : "horizontal", tabindex: 0})
			}
		}, {
			key: "_setValues", value: function(e, t) {
				var n = this.options.doubleSided ? this.handles.index(e) : 0;
				this.inputs.eq(n).val(t), e.attr("aria-valuenow", t)
			}
		}, {
			key: "_handleEvent", value: function(i, a, o) {
				var r, s;
				if(o) r = this._adjustValue(null, o), s = !0;
				else
				{
					i.preventDefault();
					var l = this, u = this.options.vertical, c = u ? "height" : "width", d = u ? "top" : "left",
						f = u ? i.pageY : i.pageX,
						h = (this.$handle[0].getBoundingClientRect()[c] / 2, this.$element[0].getBoundingClientRect()[c]),
						p = u ? e(window).scrollTop() : e(window).scrollLeft(), m = this.$element.offset()[d];
					i.clientY === i.pageY && (f += p);
					var v, g = f - m;
					v = 0 > g ? 0 : g > h ? h : g;
					var y = t(v, h);
					if(r = (this.options.end - this.options.start) * y + this.options.start, Foundation.rtl() && !this.options.vertical && (r = this.options.end - r), r = l._adjustValue(null, r), s = !1, !a)
					{
						var b = n(this.$handle, d, v, c), w = n(this.$handle2, d, v, c);
						a = w >= b ? this.$handle : this.$handle2
					}
				}
				this._setHandlePos(a, r, s)
			}
		}, {
			key: "_adjustValue", value: function(e, t) {
				var n, i, a, o, r = this.options.step, s = parseFloat(r / 2);
				return n = e ? parseFloat(e.attr("aria-valuenow")) : t, i = n % r, a = n - i, o = a + r, 0 === i ? n : n = n >= a + s ? o : a
			}
		}, {
			key: "_events", value: function(t) {
				var n, i = this;
				if(this.inputs.off("change.zf.slider").on("change.zf.slider", function(t) {
						var n = i.inputs.index(e(this));
						i._handleEvent(t, i.handles.eq(n), e(this).val())
					}), this.options.clickSelect && this.$element.off("click.zf.slider").on("click.zf.slider", function(t) {
						return i.$element.data("dragging") ? !1 : void(e(t.target).is("[data-slider-handle]") || (i.options.doubleSided ? i._handleEvent(t) : i._handleEvent(t, i.$handle)))
					}), this.options.draggable)
				{
					this.handles.addTouch();
					var a = e("body");
					t.off("mousedown.zf.slider").on("mousedown.zf.slider", function(o) {
						t.addClass("is-dragging"), i.$fill.addClass("is-dragging"), i.$element.data("dragging", !0), n = e(o.currentTarget), a.on("mousemove.zf.slider", function(e) {
							e.preventDefault(), i._handleEvent(e, n)
						}).on("mouseup.zf.slider", function(e) {
							i._handleEvent(e, n), t.removeClass("is-dragging"), i.$fill.removeClass("is-dragging"), i.$element.data("dragging", !1), a.off("mousemove.zf.slider mouseup.zf.slider")
						})
					}).on("selectstart.zf.slider touchmove.zf.slider", function(e) {
						e.preventDefault()
					})
				}
				t.off("keydown.zf.slider").on("keydown.zf.slider", function(t) {
					var n, a = e(this), o = i.options.doubleSided ? i.handles.index(a) : 0,
						r = parseFloat(i.inputs.eq(o).val());
					Foundation.Keyboard.handleKey(t, "Slider", {
						decrease: function() {
							n = r - i.options.step
						}, increase: function() {
							n = r + i.options.step
						}, decrease_fast: function() {
							n = r - 10 * i.options.step
						}, increase_fast: function() {
							n = r + 10 * i.options.step
						}, handled: function() {
							t.preventDefault(), i._setHandlePos(a, n, !0)
						}
					})
				})
			}
		}, {
			key: "destroy", value: function() {
				this.handles.off(".zf.slider"), this.inputs.off(".zf.slider"), this.$element.off(".zf.slider"), Foundation.unregisterPlugin(this)
			}
		}]), i
	}();
	i.defaults = {start: 0, end: 100, step: 1, initialStart: 0, initialEnd: 100, binding: !1, clickSelect: !0, vertical: !1, draggable: !0, disabled: !1, doubleSided: !1, decimal: 2, moveTime: 200, disabledClass: "disabled", invertVertical: !1, changedDelay: 500}, Foundation.plugin(i, "Slider")
}(jQuery);
var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
	return typeof e
} : function(e) {
	return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
};
!function(e) {
	function t (e) {
		var t = {};
		return "string" != typeof e ? t : (e = e.trim().slice(1, -1)) ? t = e.split("&").reduce(function(e, t) {
			var n = t.replace(/\+/g, " ").split("="), i = n[0], a = n[1];
			return i = decodeURIComponent(i), a = void 0 === a ? null : decodeURIComponent(a), e.hasOwnProperty(i) ? Array.isArray(e[i]) ? e[i].push(a) : e[i] = [e[i], a] : e[i] = a, e
		}, {}) : t
	}

	var n = {
		queries: [], current: "", _init: function() {
			var n, i = this, a = e(".foundation-mq").css("font-family");
			n = t(a);
			for(var o in n)
			{
				n.hasOwnProperty(o) && i.queries.push({name: o, value: "only screen and (min-width: " + n[o] + ")"});
			}
			this.current = this._getCurrentSize(), this._watcher()
		}, atLeast: function(e) {
			var t = this.get(e);
			return t ? window.matchMedia(t).matches : !1
		}, get: function(e) {
			for(var t in this.queries)
			{
				if(this.queries.hasOwnProperty(t))
				{
					var n = this.queries[t];
					if(e === n.name) return n.value
				}
			}
			return null
		}, _getCurrentSize: function() {
			for(var e, t = 0; t < this.queries.length; t++)
			{
				var n = this.queries[t];
				window.matchMedia(n.value).matches && (e = n)
			}
			return "object" === ("undefined" == typeof e ? "undefined" : _typeof(e)) ? e.name : e
		}, _watcher: function() {
			var t = this;
			e(window).on("resize.zf.mediaquery", function() {
				var n = t._getCurrentSize(), i = t.current;
				n !== i && (t.current = n, e(window).trigger("changed.zf.mediaquery", [n, i]))
			})
		}
	};
	Foundation.MediaQuery = n,// Authors & copyright (c) 2012: Scott Jehl, Paul Irish, Nicholas Zakas, David Knight. Dual MIT/BSD license
	window.matchMedia || (window.matchMedia = function() {
		"use strict";
		var e = window.styleMedia || window.media;
		if(!e)
		{
			var t = document.createElement("style"), n = document.getElementsByTagName("script")[0], i = null;
			t.type = "text/css", t.id = "matchmediajs-test", n && n.parentNode && n.parentNode.insertBefore(t, n), i = "getComputedStyle" in window && window.getComputedStyle(t, null) || t.currentStyle, e = {
				matchMedium: function(e) {
					var n = "@media " + e + "{ #matchmediajs-test { width: 1px; } }";
					return t.styleSheet ? t.styleSheet.cssText = n : t.textContent = n, "1px" === i.width
				}
			}
		}
		return function(t) {
			return {matches: e.matchMedium(t || "all"), media: t || "all"}
		}
	}()), Foundation.MediaQuery = n
}(jQuery);
var _createClass = function() {
	function e (e, t) {
		for(var n = 0; n < t.length; n++)
		{
			var i = t[n];
			i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
		}
	}

	return function(t, n, i) {
		return n && e(t.prototype, n), i && e(t, i), t
	}
}();
!function(e) {
	var t = function() {
		function t (n) {
			var i = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
			_classCallCheck(this, t), this.$element = n, this.options = e.extend({}, t.defaults, this.$element.data(), i), this._init(), Foundation.registerPlugin(this, "Abide")
		}

		return _createClass(t, [{
			key: "_init", value: function() {
				this.$inputs = this.$element.find("input, textarea, select"), this._events()
			}
		}, {
			key: "_events", value: function() {
				var t = this;
				this.$element.off(".abide").on("reset.zf.abide", function() {
					t.resetForm()
				}).on("submit.zf.abide", function() {
					return t.validateForm()
				}), "fieldChange" === this.options.validateOn && this.$inputs.off("change.zf.abide").on("change.zf.abide", function(n) {
					t.validateInput(e(n.target))
				}), this.options.liveValidate && this.$inputs.off("input.zf.abide").on("input.zf.abide", function(n) {
					t.validateInput(e(n.target))
				})
			}
		}, {
			key: "_reflow", value: function() {
				this._init()
			}
		}, {
			key: "requiredCheck", value: function(e) {
				if(!e.attr("required")) return !0;
				var t = !0;
				switch(e[0].type)
				{
					case"checkbox":
						t = e[0].checked;
						break;
					case"select":
					case"select-one":
					case"select-multiple":
						var n = e.find("option:selected");
						n.length && n.val() || (t = !1);
						break;
					default:
						e.val() && e.val().length || (t = !1)
				}
				return t
			}
		}, {
			key: "findFormError", value: function(e) {
				var t = e.parent().next(this.options.formErrorSelector);
				return t.length || (t = e.parent().find(this.options.formErrorSelector)), t
			}
		}, {
			key: "findLabel", value: function(e) {
				var t = e[0].id, n = this.$element.find('label[for="' + t + '"]');
				return n.length ? n : e.closest("label")
			}
		}, {
			key: "findRadioLabels", value: function(t) {
				var n = this, i = t.map(function(t, i) {
					var a = i.id, o = n.$element.find('label[for="' + a + '"]');
					return o.length || (o = e(i).closest("label")), o[0]
				});
				return e(i)
			}
		}, {
			key: "addErrorClasses", value: function(e) {
				var t = this.findLabel(e), n = this.findFormError(e);
				t.length && t.addClass(this.options.labelErrorClass), n.length && n.addClass(this.options.formErrorClass), e.addClass(this.options.inputErrorClass).attr("data-invalid", "")
			}
		}, {
			key: "removeRadioErrorClasses", value: function(e) {
				var t = this.$element.find(':radio[name="' + e + '"]'), n = this.findRadioLabels(t),
					i = this.findFormError(t);
				n.length && n.removeClass(this.options.labelErrorClass), i.length && i.removeClass(this.options.formErrorClass), t.removeClass(this.options.inputErrorClass).removeAttr("data-invalid")
			}
		}, {
			key: "removeErrorClasses", value: function(e) {
				if("radio" == e[0].type) return this.removeRadioErrorClasses(e.attr("name"));
				var t = this.findLabel(e), n = this.findFormError(e);
				t.length && t.removeClass(this.options.labelErrorClass), n.length && n.removeClass(this.options.formErrorClass), e.removeClass(this.options.inputErrorClass).removeAttr("data-invalid")
			}
		}, {
			key: "validateInput", value: function(e) {
				var t = this.requiredCheck(e), n = !1, i = !0, a = e.attr("data-validator"), o = !0;
				if(e.is("[data-abide-ignore]") || e.is('[type="hidden"]')) return !0;
				switch(e[0].type)
				{
					case"radio":
						n = this.validateRadio(e.attr("name"));
						break;
					case"checkbox":
						n = t;
						break;
					case"select":
					case"select-one":
					case"select-multiple":
						n = t;
						break;
					default:
						n = this.validateText(e)
				}
				a && (i = this.matchValidation(e, a, e.attr("required"))), e.attr("data-equalto") && (o = this.options.validators.equalTo(e));
				var r = -1 === [t, n, i, o].indexOf(!1), s = (r ? "valid" : "invalid") + ".zf.abide";
				return this[r ? "removeErrorClasses" : "addErrorClasses"](e), e.trigger(s, [e]), r
			}
		}, {
			key: "validateForm", value: function() {
				var t = [], n = this;
				this.$inputs.each(function() {
					t.push(n.validateInput(e(this)))
				});
				var i = -1 === t.indexOf(!1);
				return this.$element.find("[data-abide-error]").css("display", i ? "none" : "block"), this.$element.trigger((i ? "formvalid" : "forminvalid") + ".zf.abide", [this.$element]), i
			}
		}, {
			key: "validateText", value: function(e, t) {
				t = t || e.attr("pattern") || e.attr("type");
				var n = e.val(), i = !1;
				return n.length ? i = this.options.patterns.hasOwnProperty(t) ? this.options.patterns[t].test(n) : t !== e.attr("type") ? new RegExp(t).test(n) : !0 : e.prop("required") || (i = !0), i
			}
		}, {
			key: "validateRadio", value: function(t) {
				var n = this.$element.find(':radio[name="' + t + '"]'), i = !1, a = !1;
				return n.each(function(t, n) {
					e(n).attr("required") && (a = !0)
				}), a || (i = !0), i || n.each(function(t, n) {
					e(n).prop("checked") && (i = !0)
				}), i
			}
		}, {
			key: "matchValidation", value: function(e, t, n) {
				var i = this;
				n = n ? !0 : !1;
				var a = t.split(" ").map(function(t) {
					return i.options.validators[t](e, n, e.parent())
				});
				return -1 === a.indexOf(!1)
			}
		}, {
			key: "resetForm", value: function() {
				var t = this.$element, n = this.options;
				e("." + n.labelErrorClass, t).not("small").removeClass(n.labelErrorClass), e("." + n.inputErrorClass, t).not("small").removeClass(n.inputErrorClass), e(n.formErrorSelector + "." + n.formErrorClass).removeClass(n.formErrorClass), t.find("[data-abide-error]").css("display", "none"), e(":input", t).not(":button, :submit, :reset, :hidden, :radio, :checkbox, [data-abide-ignore]").val("").removeAttr("data-invalid"), e(":input:radio", t).not("[data-abide-ignore]").prop("checked", !1).removeAttr("data-invalid"), e(":input:checkbox", t).not("[data-abide-ignore]").prop("checked", !1).removeAttr("data-invalid"), t.trigger("formreset.zf.abide", [t])
			}
		}, {
			key: "destroy", value: function() {
				var t = this;
				this.$element.off(".abide").find("[data-abide-error]").css("display", "none"), this.$inputs.off(".abide").each(function() {
					t.removeErrorClasses(e(this))
				}), Foundation.unregisterPlugin(this)
			}
		}]), t
	}();
	t.defaults = {
		validateOn: "fieldChange", labelErrorClass: "is-invalid-label", inputErrorClass: "is-invalid-input", formErrorSelector: ".form-error", formErrorClass: "is-visible", liveValidate: !1, patterns: {alpha: /^[a-zA-Z]+$/, alpha_numeric: /^[a-zA-Z0-9]+$/, integer: /^[-+]?\d+$/, number: /^[-+]?\d*(?:[\.\,]\d+)?$/, card: /^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/, cvv: /^([0-9]){3,4}$/, email: /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$/, url: /^(https?|ftp|file|ssh):\/\/(((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-zA-Z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-zA-Z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/, domain: /^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,8}$/, datetime: /^([0-2][0-9]{3})\-([0-1][0-9])\-([0-3][0-9])T([0-5][0-9])\:([0-5][0-9])\:([0-5][0-9])(Z|([\-\+]([0-1][0-9])\:00))$/, date: /(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))$/, time: /^(0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9]){2}$/, dateISO: /^\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}$/, month_day_year: /^(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.]\d{4}$/, day_month_year: /^(0[1-9]|[12][0-9]|3[01])[- \/.](0[1-9]|1[012])[- \/.]\d{4}$/, color: /^#?([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/}, validators: {
			equalTo: function(t) {
				return e("#" + t.attr("data-equalto")).val() === t.val()
			}
		}
	}, Foundation.plugin(t, "Abide")
}(jQuery);
var _createClass = function() {
	function e (e, t) {
		for(var n = 0; n < t.length; n++)
		{
			var i = t[n];
			i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
		}
	}

	return function(t, n, i) {
		return n && e(t.prototype, n), i && e(t, i), t
	}
}();
!function(e) {
	var t = function() {
		function t (n, i) {
			_classCallCheck(this, t), this.$element = n, this.options = e.extend({}, t.defaults, this.$element.data(), i), this.$lastTrigger = e(), this.$triggers = e(), this._init(), this._events(), Foundation.registerPlugin(this, "OffCanvas"), Foundation.Keyboard.register("OffCanvas", {ESCAPE: "close"})
		}

		return _createClass(t, [{
			key: "_init", value: function() {
				var t = this.$element.attr("id");
				if(this.$element.attr("aria-hidden", "true"), this.$triggers = e(document).find('[data-open="' + t + '"], [data-close="' + t + '"], [data-toggle="' + t + '"]').attr("aria-expanded", "false").attr("aria-controls", t), this.options.closeOnClick) if(e(".js-off-canvas-exit").length) this.$exiter = e(".js-off-canvas-exit");
				else
				{
					var n = document.createElement("div");
					n.setAttribute("class", "js-off-canvas-exit"), e("[data-off-canvas-content]").append(n), this.$exiter = e(n)
				}
				this.options.isRevealed = this.options.isRevealed || new RegExp(this.options.revealClass, "g").test(this.$element[0].className), this.options.isRevealed && (this.options.revealOn = this.options.revealOn || this.$element[0].className.match(/(reveal-for-medium|reveal-for-large)/g)[0].split("-")[2], this._setMQChecker()), this.options.transitionTime || (this.options.transitionTime = 1e3 * parseFloat(window.getComputedStyle(e("[data-off-canvas-wrapper]")[0]).transitionDuration))
			}
		}, {
			key: "_events", value: function() {
				this.$element.off(".zf.trigger .zf.offcanvas").on({"open.zf.trigger": this.open.bind(this), "close.zf.trigger": this.close.bind(this), "toggle.zf.trigger": this.toggle.bind(this), "keydown.zf.offcanvas": this._handleKeyboard.bind(this)}), this.options.closeOnClick && this.$exiter.length && this.$exiter.on({"click.zf.offcanvas": this.close.bind(this)})
			}
		}, {
			key: "_setMQChecker", value: function() {
				var t = this;
				e(window).on("changed.zf.mediaquery", function() {
					t.reveal(Foundation.MediaQuery.atLeast(t.options.revealOn) ? !0 : !1)
				}).one("load.zf.offcanvas", function() {
					Foundation.MediaQuery.atLeast(t.options.revealOn) && t.reveal(!0)
				})
			}
		}, {
			key: "reveal", value: function(e) {
				var t = this.$element.find("[data-close]");
				e ? (this.close(), this.isRevealed = !0, this.$element.off("open.zf.trigger toggle.zf.trigger"), t.length && t.hide()) : (this.isRevealed = !1, this.$element.on({"open.zf.trigger": this.open.bind(this), "toggle.zf.trigger": this.toggle.bind(this)}), t.length && t.show())
			}
		}, {
			key: "open", value: function(t, n) {
				if(!this.$element.hasClass("is-open") && !this.isRevealed)
				{
					{
						var i = this;
						e(document.body)
					}
					this.options.forceTop && e("body").scrollTop(0);
					var a = e("[data-off-canvas-wrapper]");
					a.addClass("is-off-canvas-open is-open-" + i.options.position), i.$element.addClass("is-open"), this.$triggers.attr("aria-expanded", "true"), this.$element.attr("aria-hidden", "false").trigger("opened.zf.offcanvas"), this.options.closeOnClick && this.$exiter.addClass("is-visible"), n && (this.$lastTrigger = n), this.options.autoFocus && a.one(Foundation.transitionend(a), function() {
						i.$element.hasClass("is-open") && (i.$element.attr("tabindex", "-1"), i.$element.focus())
					}), this.options.trapFocus && a.one(Foundation.transitionend(a), function() {
						i.$element.hasClass("is-open") && (i.$element.attr("tabindex", "-1"), i.trapFocus())
					})
				}
			}
		}, {
			key: "_trapFocus", value: function() {
				var e = Foundation.Keyboard.findFocusable(this.$element), t = e.eq(0), n = e.eq(-1);
				e.off(".zf.offcanvas").on("keydown.zf.offcanvas", function(e) {
					var i = Foundation.Keyboard.parseKey(e);
					"TAB" === i && e.target === n[0] && (e.preventDefault(), t.focus()), "SHIFT_TAB" === i && e.target === t[0] && (e.preventDefault(), n.focus())
				})
			}
		}, {
			key: "close", value: function() {
				if(this.$element.hasClass("is-open") && !this.isRevealed)
				{
					var t = this;
					e("[data-off-canvas-wrapper]").removeClass("is-off-canvas-open is-open-" + t.options.position), t.$element.removeClass("is-open"), this.$element.attr("aria-hidden", "true").trigger("closed.zf.offcanvas"), this.options.closeOnClick && this.$exiter.removeClass("is-visible"), this.$triggers.attr("aria-expanded", "false"), this.options.trapFocus && e("[data-off-canvas-content]").removeAttr("tabindex")
				}
			}
		}, {
			key: "toggle", value: function(e, t) {
				this.$element.hasClass("is-open") ? this.close(e, t) : this.open(e, t)
			}
		}, {
			key: "_handleKeyboard", value: function(e) {
				var t = this;
				Foundation.Keyboard.handleKey(e, "OffCanvas", {
					close: function() {
						return t.close(), t.$lastTrigger.focus(), !0
					}, handled: function() {
						e.stopPropagation(), e.preventDefault()
					}
				})
			}
		}, {
			key: "destroy", value: function() {
				this.close(), this.$element.off(".zf.trigger .zf.offcanvas"), this.$exiter.off(".zf.offcanvas"), Foundation.unregisterPlugin(this)
			}
		}]), t
	}();
	t.defaults = {closeOnClick: !0, transitionTime: 0, position: "left", forceTop: !0, isRevealed: !1, revealOn: null, autoFocus: !0, revealClass: "reveal-for-", trapFocus: !1}, Foundation.plugin(t, "OffCanvas")
}(jQuery);
var _createClass = function() {
	function e (e, t) {
		for(var n = 0; n < t.length; n++)
		{
			var i = t[n];
			i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
		}
	}

	return function(t, n, i) {
		return n && e(t.prototype, n), i && e(t, i), t
	}
}();
!function(e) {
	var t = function() {
		function t (n, i) {
			_classCallCheck(this, t), this.$element = n, this.options = e.extend({}, t.defaults, this.$element.data(), i), this._init(), Foundation.registerPlugin(this, "Magellan")
		}

		return _createClass(t, [{
			key: "_init", value: function() {
				var t = this.$element[0].id || Foundation.GetYoDigits(6, "magellan");
				this.$targets = e("[data-magellan-target]"), this.$links = this.$element.find("a"), this.$element.attr({"data-resize": t, "data-scroll": t, id: t}), this.$active = e(), this.scrollPos = parseInt(window.pageYOffset, 10), this._events()
			}
		}, {
			key: "calcPoints", value: function() {
				var t = this, n = document.body, i = document.documentElement;
				this.points = [], this.winHeight = Math.round(Math.max(window.innerHeight, i.clientHeight)), this.docHeight = Math.round(Math.max(n.scrollHeight, n.offsetHeight, i.clientHeight, i.scrollHeight, i.offsetHeight)), this.$targets.each(function() {
					var n = e(this), i = Math.round(n.offset().top - t.options.threshold);
					n.targetPoint = i, t.points.push(i)
				})
			}
		}, {
			key: "_events", value: function() {
				{
					var t = this;
					e("html, body"), {duration: t.options.animationDuration, easing: t.options.animationEasing}
				}
				e(window).one("load", function() {
					t.options.deepLinking && location.hash && t.scrollToLoc(location.hash), t.calcPoints(), t._updateActive()
				}), this.$element.on({"resizeme.zf.trigger": this.reflow.bind(this), "scrollme.zf.trigger": this._updateActive.bind(this)}).on("click.zf.magellan", 'a[href^="#"]', function(e) {
					e.preventDefault();
					var n = this.getAttribute("href");
					t.scrollToLoc(n)
				})
			}
		}, {
			key: "scrollToLoc", value: function(t) {
				if(!e(t).length) return !1;
				var n = Math.round(e(t).offset().top - this.options.threshold / 2 - this.options.barOffset);
				e("html, body").stop(!0).animate({scrollTop: n}, this.options.animationDuration, this.options.animationEasing)
			}
		}, {
			key: "reflow", value: function() {
				this.calcPoints(), this._updateActive()
			}
		}, {
			key: "_updateActive", value: function() {
				var e, t = parseInt(window.pageYOffset, 10);
				if(t + this.winHeight === this.docHeight) e = this.points.length - 1;
				else if(t < this.points[0]) e = 0;
				else
				{
					var n = this.scrollPos < t, i = this, a = this.points.filter(function(e) {
						return n ? e - i.options.barOffset <= t : e - i.options.barOffset - i.options.threshold <= t
					});
					e = a.length ? a.length - 1 : 0
				}
				if(this.$active.removeClass(this.options.activeClass), this.$active = this.$links.filter('[href="#' + this.$targets.eq(e).data("magellan-target") + '"]').addClass(this.options.activeClass), this.options.deepLinking)
				{
					var o = this.$active[0].getAttribute("href");
					window.history.pushState ? window.history.pushState(null, null, o) : window.location.hash = o
				}
				this.scrollPos = t, this.$element.trigger("update.zf.magellan", [this.$active])
			}
		}, {
			key: "destroy", value: function() {
				if(this.$element.off(".zf.trigger .zf.magellan").find("." + this.options.activeClass).removeClass(this.options.activeClass), this.options.deepLinking)
				{
					var e = this.$active[0].getAttribute("href");
					window.location.hash.replace(e, "")
				}
				Foundation.unregisterPlugin(this)
			}
		}]), t
	}();
	t.defaults = {animationDuration: 500, animationEasing: "linear", threshold: 50, activeClass: "active", deepLinking: !1, barOffset: 0}, Foundation.plugin(t, "Magellan")
}(jQuery);
var _createClass = function() {
	function e (e, t) {
		for(var n = 0; n < t.length; n++)
		{
			var i = t[n];
			i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
		}
	}

	return function(t, n, i) {
		return n && e(t.prototype, n), i && e(t, i), t
	}
}();
!function(e) {
	var t = function() {
		function t (n, i) {
			_classCallCheck(this, t), this.$element = n, this.options = e.extend({}, t.defaults, this.$element.data(), i), this._init(), Foundation.registerPlugin(this, "Orbit"), Foundation.Keyboard.register("Orbit", {ltr: {ARROW_RIGHT: "next", ARROW_LEFT: "previous"}, rtl: {ARROW_LEFT: "next", ARROW_RIGHT: "previous"}})
		}

		return _createClass(t, [{
			key: "_init", value: function() {
				this.$wrapper = this.$element.find("." + this.options.containerClass), this.$slides = this.$element.find("." + this.options.slideClass);
				var e = this.$element.find("img"), t = this.$slides.filter(".is-active");
				t.length || this.$slides.eq(0).addClass("is-active"), this.options.useMUI || this.$slides.addClass("no-motionui"), e.length ? Foundation.onImagesLoaded(e, this._prepareForOrbit.bind(this)) : this._prepareForOrbit(), this.options.bullets && this._loadBullets(), this._events(), this.options.autoPlay && this.$slides.length > 1 && this.geoSync(), this.options.accessible && this.$wrapper.attr("tabindex", 0)
			}
		}, {
			key: "_loadBullets", value: function() {
				this.$bullets = this.$element.find("." + this.options.boxOfBullets).find("button")
			}
		}, {
			key: "geoSync", value: function() {
				var e = this;
				this.timer = new Foundation.Timer(this.$element, {duration: this.options.timerDelay, infinite: !1}, function() {
					e.changeSlide(!0)
				}), this.timer.start()
			}
		}, {
			key: "_prepareForOrbit", value: function() {
				var e = this;
				this._setWrapperHeight(function(t) {
					e._setSlideHeight(t)
				})
			}
		}, {
			key: "_setWrapperHeight", value: function(t) {
				var n, i = 0, a = 0;
				this.$slides.each(function() {
					n = this.getBoundingClientRect().height, e(this).attr("data-slide", a), a && e(this).css({position: "relative", display: "none"}), i = n > i ? n : i, a++
				}), a === this.$slides.length && (this.$wrapper.css({height: i}), t(i))
			}
		}, {
			key: "_setSlideHeight", value: function(t) {
				this.$slides.each(function() {
					e(this).css("max-height", t)
				})
			}
		}, {
			key: "_events", value: function() {
				var t = this;
				if(this.$slides.length > 1)
				{
					if(this.options.swipe && this.$slides.off("swipeleft.zf.orbit swiperight.zf.orbit").on("swipeleft.zf.orbit", function(e) {
							e.preventDefault(), t.changeSlide(!0)
						}).on("swiperight.zf.orbit", function(e) {
							e.preventDefault(), t.changeSlide(!1)
						}), this.options.autoPlay && (this.$slides.on("click.zf.orbit", function() {
							t.$element.data("clickedOn", t.$element.data("clickedOn") ? !1 : !0), t.timer[t.$element.data("clickedOn") ? "pause" : "start"]()
						}), this.options.pauseOnHover && this.$element.on("mouseenter.zf.orbit", function() {
							t.timer.pause()
						}).on("mouseleave.zf.orbit", function() {
							t.$element.data("clickedOn") || t.timer.start()
						})), this.options.navButtons)
					{
						var n = this.$element.find("." + this.options.nextClass + ", ." + this.options.prevClass);
						n.attr("tabindex", 0).on("click.zf.orbit touchend.zf.orbit", function(n) {
							n.preventDefault(), t.changeSlide(e(this).hasClass(t.options.nextClass))
						})
					}
					this.options.bullets && this.$bullets.on("click.zf.orbit touchend.zf.orbit", function() {
						if(/is-active/g.test(this.className)) return !1;
						var n = e(this).data("slide"), i = n > t.$slides.filter(".is-active").data("slide"),
							a = t.$slides.eq(n);
						t.changeSlide(i, a, n)
					}), this.options.accessible && this.$wrapper.add(this.$bullets).on("keydown.zf.orbit", function(n) {
						Foundation.Keyboard.handleKey(n, "Orbit", {
							next: function() {
								t.changeSlide(!0)
							}, previous: function() {
								t.changeSlide(!1)
							}, handled: function() {
								e(n.target).is(t.$bullets) && t.$bullets.filter(".is-active").focus()
							}
						})
					})
				}
			}
		}, {
			key: "changeSlide", value: function(e, t, n) {
				var i = this.$slides.filter(".is-active").eq(0);
				if(/mui/g.test(i[0].className)) return !1;
				var a, o = this.$slides.first(), r = this.$slides.last(), s = e ? "Right" : "Left",
					l = e ? "Left" : "Right", u = this;
				a = t ? t : e ? this.options.infiniteWrap ? i.next("." + this.options.slideClass).length ? i.next("." + this.options.slideClass) : o : i.next("." + this.options.slideClass) : this.options.infiniteWrap ? i.prev("." + this.options.slideClass).length ? i.prev("." + this.options.slideClass) : r : i.prev("." + this.options.slideClass), a.length && (this.$element.trigger("beforeslidechange.zf.orbit", [i, a]), this.options.bullets && (n = n || this.$slides.index(a), this._updateBullets(n)), this.options.useMUI ? (Foundation.Motion.animateIn(a.addClass("is-active").css({position: "absolute", top: 0}), this.options["animInFrom" + s], function() {
					a.css({position: "relative", display: "block"}).attr("aria-live", "polite")
				}), Foundation.Motion.animateOut(i.removeClass("is-active"), this.options["animOutTo" + l], function() {
					i.removeAttr("aria-live"), u.options.autoPlay && !u.timer.isPaused && u.timer.restart()
				})) : (i.removeClass("is-active is-in").removeAttr("aria-live").hide(), a.addClass("is-active is-in").attr("aria-live", "polite").show(), this.options.autoPlay && !this.timer.isPaused && this.timer.restart()), this.$element.trigger("slidechange.zf.orbit", [a]))
			}
		}, {
			key: "_updateBullets", value: function(e) {
				{
					var t = this.$element.find("." + this.options.boxOfBullets).find(".is-active").removeClass("is-active").blur(),
						n = t.find("span:last").detach();
					this.$bullets.eq(e).addClass("is-active").append(n)
				}
			}
		}, {
			key: "destroy", value: function() {
				this.$element.off(".zf.orbit").find("*").off(".zf.orbit").end().hide(), Foundation.unregisterPlugin(this)
			}
		}]), t
	}();
	t.defaults = {bullets: !0, navButtons: !0, animInFromRight: "slide-in-right", animOutToRight: "slide-out-right", animInFromLeft: "slide-in-left", animOutToLeft: "slide-out-left", autoPlay: !0, timerDelay: 5e3, infiniteWrap: !0, swipe: !0, pauseOnHover: !0, accessible: !0, containerClass: "orbit-container", slideClass: "orbit-slide", boxOfBullets: "orbit-bullets", nextClass: "orbit-next", prevClass: "orbit-previous", useMUI: !0}, Foundation.plugin(t, "Orbit")
}(jQuery), !function() {
	function e (e, n, i, a) {
		var o, r, s, l, u = t(e);
		if(n)
		{
			var c = t(n);
			r = u.offset.top + u.height <= c.height + c.offset.top, o = u.offset.top >= c.offset.top, s = u.offset.left >= c.offset.left, l = u.offset.left + u.width <= c.width + c.offset.left
		}
		else r = u.offset.top + u.height <= u.windowDims.height + u.windowDims.offset.top, o = u.offset.top >= u.windowDims.offset.top, s = u.offset.left >= u.windowDims.offset.left, l = u.offset.left + u.width <= u.windowDims.width;
		var d = [r, o, s, l];
		return i ? s === l == !0 : a ? o === r == !0 : -1 === d.indexOf(!1)
	}

	function t (e) {
		if(e = e.length ? e[0] : e, e === window || e === document) throw new Error("I'm sorry, Dave. I'm afraid I can't do that.");
		var t = e.getBoundingClientRect(), n = e.parentNode.getBoundingClientRect(),
			i = document.body.getBoundingClientRect(), a = window.pageYOffset, o = window.pageXOffset;
		return {width: t.width, height: t.height, offset: {top: t.top + a, left: t.left + o}, parentDims: {width: n.width, height: n.height, offset: {top: n.top + a, left: n.left + o}}, windowDims: {width: i.width, height: i.height, offset: {top: a, left: o}}}
	}

	function n (e, n, i, a, o, r) {
		var s = t(e), l = n ? t(n) : null;
		switch(i)
		{
			case"top":
				return {left: Foundation.rtl() ? l.offset.left - s.width + l.width : l.offset.left, top: l.offset.top - (s.height + a)};
			case"left":
				return {left: l.offset.left - (s.width + o), top: l.offset.top};
			case"right":
				return {left: l.offset.left + l.width + o, top: l.offset.top};
			case"center top":
				return {left: l.offset.left + l.width / 2 - s.width / 2, top: l.offset.top - (s.height + a)};
			case"center bottom":
				return {left: r ? o : l.offset.left + l.width / 2 - s.width / 2, top: l.offset.top + l.height + a};
			case"center left":
				return {left: l.offset.left - (s.width + o), top: l.offset.top + l.height / 2 - s.height / 2};
			case"center right":
				return {left: l.offset.left + l.width + o + 1, top: l.offset.top + l.height / 2 - s.height / 2};
			case"center":
				return {left: s.windowDims.offset.left + s.windowDims.width / 2 - s.width / 2, top: s.windowDims.offset.top + s.windowDims.height / 2 - s.height / 2};
			case"reveal":
				return {left: (s.windowDims.width - s.width) / 2, top: s.windowDims.offset.top + a};
			case"reveal full":
				return {left: s.windowDims.offset.left, top: s.windowDims.offset.top};
			case"left bottom":
				return {left: l.offset.left, top: l.offset.top + l.height};
			case"right bottom":
				return {left: l.offset.left + l.width + o - s.width, top: l.offset.top + l.height};
			default:
				return {left: Foundation.rtl() ? l.offset.left - s.width + l.width : l.offset.left + o, top: l.offset.top + l.height + a}
		}
	}

	Foundation.Box = {ImNotTouchingYou: e, GetDimensions: t, GetOffsets: n}
}(jQuery), !function(e) {
	function t (e) {
		var t = {};
		for(var n in e)
		{
			t[e[n]] = e[n];
		}
		return t
	}

	var n = {9: "TAB", 13: "ENTER", 27: "ESCAPE", 32: "SPACE", 37: "ARROW_LEFT", 38: "ARROW_UP", 39: "ARROW_RIGHT", 40: "ARROW_DOWN"},
		i = {}, a = {
			keys: t(n), parseKey: function(e) {
				var t = n[e.which || e.keyCode] || String.fromCharCode(e.which).toUpperCase();
				return e.shiftKey && (t = "SHIFT_" + t), e.ctrlKey && (t = "CTRL_" + t), e.altKey && (t = "ALT_" + t), t
			}, handleKey: function(t, n, a) {
				var o, r, s, l = i[n], u = this.parseKey(t);
				if(!l) return console.warn("Component not defined!");
				if(o = "undefined" == typeof l.ltr ? l : Foundation.rtl() ? e.extend({}, l.ltr, l.rtl) : e.extend({}, l.rtl, l.ltr), r = o[u], s = a[r], s && "function" == typeof s)
				{
					var c = s.apply();
					(a.handled || "function" == typeof a.handled) && a.handled(c)
				}
				else (a.unhandled || "function" == typeof a.unhandled) && a.unhandled()
			}, findFocusable: function(t) {
				return t.find("a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, *[tabindex], *[contenteditable]").filter(function() {
					return !e(this).is(":visible") || e(this).attr("tabindex") < 0 ? !1 : !0
				})
			}, register: function(e, t) {
				i[e] = t
			}
		};
	Foundation.Keyboard = a
}(jQuery), !function(e) {
	var t = {
		Feather: function(t) {
			var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "zf";
			t.attr("role", "menubar");
			var i = t.find("li").attr({role: "menuitem"}), a = "is-" + n + "-submenu", o = a + "-item",
				r = "is-" + n + "-submenu-parent";
			t.find("a:first").attr("tabindex", 0), i.each(function() {
				var t = e(this), n = t.children("ul");
				n.length && (t.addClass(r).attr({"aria-haspopup": !0, "aria-expanded": !1, "aria-label": t.children("a:first").text()}), n.addClass("submenu " + a).attr({"data-submenu": "", "aria-hidden": !0, role: "menu"})), t.parent("[data-submenu]").length && t.addClass("is-submenu-item " + o)
			})
		}, Burn: function(e, t) {
			var n = (e.find("li").removeAttr("tabindex"), "is-" + t + "-submenu"), i = n + "-item",
				a = "is-" + t + "-submenu-parent";
			e.find(">li, .menu, .menu > li").removeClass(n + " " + i + " " + a + " is-submenu-item submenu is-active").removeAttr("data-submenu").css("display", "")
		}
	};
	Foundation.Nest = t
}(jQuery);
var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
	return typeof e
} : function(e) {
	return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
};
!function(e) {
	function t () {
		o(), i(), a(), n()
	}

	function n (t) {
		var n = e("[data-yeti-box]"), i = ["dropdown", "tooltip", "reveal"];
		if(t && ("string" == typeof t ? i.push(t) : "object" === ("undefined" == typeof t ? "undefined" : _typeof(t)) && "string" == typeof t[0] ? i.concat(t) : console.error("Plugin names must be strings")), n.length)
		{
			var a = i.map(function(e) {
				return "closeme.zf." + e
			}).join(" ");
			e(window).off(a).on(a, function(t, n) {
				var i = t.namespace.split(".")[0], a = e("[data-" + i + "]").not('[data-yeti-box="' + n + '"]');
				a.each(function() {
					var t = e(this);
					t.triggerHandler("close.zf.trigger", [t])
				})
			})
		}
	}

	function i (t) {
		var n = void 0, i = e("[data-resize]");
		i.length && e(window).off("resize.zf.trigger").on("resize.zf.trigger", function() {
			n && clearTimeout(n), n = setTimeout(function() {
				r || i.each(function() {
					e(this).triggerHandler("resizeme.zf.trigger")
				}), i.attr("data-events", "resize")
			}, t || 10)
		})
	}

	function a (t) {
		var n = void 0, i = e("[data-scroll]");
		i.length && e(window).off("scroll.zf.trigger").on("scroll.zf.trigger", function() {
			n && clearTimeout(n), n = setTimeout(function() {
				r || i.each(function() {
					e(this).triggerHandler("scrollme.zf.trigger")
				}), i.attr("data-events", "scroll")
			}, t || 10)
		})
	}

	function o () {
		if(!r) return !1;
		var t = document.querySelectorAll("[data-resize], [data-scroll], [data-mutate]"), n = function(t) {
			var n = e(t[0].target);
			switch(n.attr("data-events"))
			{
				case"resize":
					n.triggerHandler("resizeme.zf.trigger", [n]);
					break;
				case"scroll":
					n.triggerHandler("scrollme.zf.trigger", [n, window.pageYOffset]);
					break;
				default:
					return !1
			}
		};
		if(t.length) for(var i = 0; i <= t.length - 1; i++)
		{
			var a = new r(n);
			a.observe(t[i], {attributes: !0, childList: !1, characterData: !1, subtree: !1, attributeFilter: ["data-events"]})
		}
	}

	var r = function() {
		for(var e = ["WebKit", "Moz", "O", "Ms", ""], t = 0; t < e.length; t++)
		{
			if(e[t] + "MutationObserver" in window) return window[e[t] + "MutationObserver"];
		}
		return !1
	}(), s = function(t, n) {
		t.data(n).split(" ").forEach(function(i) {
			e("#" + i)["close" === n ? "trigger" : "triggerHandler"](n + ".zf.trigger", [t])
		})
	};
	e(document).on("click.zf.trigger", "[data-open]", function() {
		s(e(this), "open")
	}), e(document).on("click.zf.trigger", "[data-close]", function() {
		var t = e(this).data("close");
		t ? s(e(this), "close") : e(this).trigger("close.zf.trigger")
	}), e(document).on("click.zf.trigger", "[data-toggle]", function() {
		s(e(this), "toggle")
	}), e(document).on("close.zf.trigger", "[data-closable]", function(t) {
		t.stopPropagation();
		var n = e(this).data("closable");
		"" !== n ? Foundation.Motion.animateOut(e(this), n, function() {
			e(this).trigger("closed.zf")
		}) : e(this).fadeOut().trigger("closed.zf")
	}), e(document).on("focus.zf.trigger blur.zf.trigger", "[data-toggle-focus]", function() {
		var t = e(this).data("toggle-focus");
		e("#" + t).triggerHandler("toggle.zf.trigger", [e(this)])
	}), e(window).on("load", function() {
		t()
	}), Foundation.IHearYou = t
}(jQuery), !function(e) {
	function t (e, t, n) {
		function i (s) {
			r || (r = window.performance.now()), o = s - r, n.apply(t), e > o ? a = window.requestAnimationFrame(i, t) : (window.cancelAnimationFrame(a), t.trigger("finished.zf.animate", [t]).triggerHandler("finished.zf.animate", [t]))
		}

		var a, o, r = null;
		a = window.requestAnimationFrame(i)
	}

	function n (t, n, o, r) {
		function s () {
			t || n.hide(), l(), r && r.apply(n)
		}

		function l () {
			n[0].style.transitionDuration = 0, n.removeClass(u + " " + c + " " + o)
		}

		if(n = e(n).eq(0), n.length)
		{
			var u = t ? i[0] : i[1], c = t ? a[0] : a[1];
			l(), n.addClass(o).css("transition", "none"), requestAnimationFrame(function() {
				n.addClass(u), t && n.show()
			}), requestAnimationFrame(function() {
				n[0].offsetWidth, n.css("transition", "").addClass(c)
			}), n.one(Foundation.transitionend(n), s)
		}
	}

	var i = ["mui-enter", "mui-leave"], a = ["mui-enter-active", "mui-leave-active"], o = {
		animateIn: function(e, t, i) {
			n(!0, e, t, i)
		}, animateOut: function(e, t, i) {
			n(!1, e, t, i)
		}
	};
	Foundation.Move = t, Foundation.Motion = o
}(jQuery), function(e) {
	function t () {
		this.removeEventListener("touchmove", n), this.removeEventListener("touchend", t), u = !1
	}

	function n (n) {
		if(e.spotSwipe.preventDefault && n.preventDefault(), u)
		{
			var i, a = n.touches[0].pageX, r = (n.touches[0].pageY, o - a);
			l = (new Date).getTime() - s, Math.abs(r) >= e.spotSwipe.moveThreshold && l <= e.spotSwipe.timeThreshold && (i = r > 0 ? "left" : "right"), i && (n.preventDefault(), t.call(this), e(this).trigger("swipe", i).trigger("swipe" + i))
		}
	}

	function i (e) {
		1 == e.touches.length && (o = e.touches[0].pageX, r = e.touches[0].pageY, u = !0, s = (new Date).getTime(), this.addEventListener("touchmove", n, !1), this.addEventListener("touchend", t, !1))
	}

	function a () {
		this.addEventListener && this.addEventListener("touchstart", i, !1)
	}

	e.spotSwipe = {version: "1.0.0", enabled: "ontouchstart" in document.documentElement, preventDefault: !1, moveThreshold: 75, timeThreshold: 200};
	var o, r, s, l, u = !1;
	e.event.special.swipe = {setup: a}, e.each(["left", "up", "down", "right"], function() {
		e.event.special["swipe" + this] = {
			setup: function() {
				e(this).on("swipe", e.noop)
			}
		}
	})
}(jQuery), !function(e) {
	e.fn.addTouch = function() {
		this.each(function(n, i) {
			e(i).bind("touchstart touchmove touchend touchcancel", function() {
				t(event)
			})
		});
		var t = function(e) {
			var t, n = e.changedTouches, i = n[0],
				a = {touchstart: "mousedown", touchmove: "mousemove", touchend: "mouseup"}, o = a[e.type];
			"MouseEvent" in window && "function" == typeof window.MouseEvent ? t = new window.MouseEvent(o, {bubbles: !0, cancelable: !0, screenX: i.screenX, screenY: i.screenY, clientX: i.clientX, clientY: i.clientY}) : (t = document.createEvent("MouseEvent"), t.initMouseEvent(o, !0, !0, window, 1, i.screenX, i.screenY, i.clientX, i.clientY, !1, !1, !1, !1, 0, null)), i.target.dispatchEvent(t)
		}
	}
}(jQuery), !function(e) {
	function t (e, t, n) {
		var i, a, o = this, r = t.duration, s = Object.keys(e.data())[0] || "timer", l = -1;
		this.isPaused = !1, this.restart = function() {
			l = -1, clearTimeout(a), this.start()
		}, this.start = function() {
			this.isPaused = !1, clearTimeout(a), l = 0 >= l ? r : l, e.data("paused", !1), i = Date.now(), a = setTimeout(function() {
				t.infinite && o.restart(), n && "function" == typeof n && n()
			}, l), e.trigger("timerstart.zf." + s)
		}, this.pause = function() {
			this.isPaused = !0, clearTimeout(a), e.data("paused", !0);
			var t = Date.now();
			l -= t - i, e.trigger("timerpaused.zf." + s)
		}
	}

	function n (t, n) {
		function i () {
			a--, 0 === a && n()
		}

		var a = t.length;
		0 === a && n(), t.each(function() {
			this.complete ? i() : "undefined" != typeof this.naturalWidth && this.naturalWidth > 0 ? i() : e(this).one("load", function() {
				i()
			})
		})
	}

	Foundation.Timer = t, Foundation.onImagesLoaded = n
}(jQuery);
var _createClass = function() {
	function e (e, t) {
		for(var n = 0; n < t.length; n++)
		{
			var i = t[n];
			i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
		}
	}

	return function(t, n, i) {
		return n && e(t.prototype, n), i && e(t, i), t
	}
}();
!function(e) {
	var t = function() {
		function t (n, i) {
			_classCallCheck(this, t), this.$element = n, this.options = e.extend({}, t.defaults, this.$element.data(), i), Foundation.Nest.Feather(this.$element, "accordion"), this._init(), Foundation.registerPlugin(this, "AccordionMenu"), Foundation.Keyboard.register("AccordionMenu", {ENTER: "toggle", SPACE: "toggle", ARROW_RIGHT: "open", ARROW_UP: "up", ARROW_DOWN: "down", ARROW_LEFT: "close", ESCAPE: "closeAll"})
		}

		return _createClass(t, [{
			key: "_init", value: function() {
				this.$element.find("[data-submenu]").not(".is-active").slideUp(0), this.$element.attr({role: "tablist", "aria-multiselectable": this.options.multiOpen}), this.$menuLinks = this.$element.find(".is-accordion-submenu-parent"), this.$menuLinks.each(function() {
					var t = this.id || Foundation.GetYoDigits(6, "acc-menu-link"), n = e(this),
						i = n.children("[data-submenu]"), a = i[0].id || Foundation.GetYoDigits(6, "acc-menu"),
						o = i.hasClass("is-active");
					n.attr({"aria-controls": a, "aria-expanded": o, role: "tab", id: t}), i.attr({"aria-labelledby": t, "aria-hidden": !o, role: "tabpanel", id: a})
				});
				var t = this.$element.find(".is-active");
				if(t.length)
				{
					var n = this;
					t.each(function() {
						n.down(e(this))
					})
				}
				this._events()
			}
		}, {
			key: "_events", value: function() {
				var t = this;
				this.$element.find("li").each(function() {
					var n = e(this).children("[data-submenu]");
					n.length && e(this).children("a").off("click.zf.accordionMenu").on("click.zf.accordionMenu", function(e) {
						e.preventDefault(), t.toggle(n)
					})
				}).on("keydown.zf.accordionmenu", function(n) {
					var i, a, o = e(this), r = o.parent("ul").children("li"), s = o.children("[data-submenu]");
					r.each(function(t) {
						return e(this).is(o) ? (i = r.eq(Math.max(0, t - 1)).find("a").first(), a = r.eq(Math.min(t + 1, r.length - 1)).find("a").first(), e(this).children("[data-submenu]:visible").length && (a = o.find("li:first-child").find("a").first()), e(this).is(":first-child") ? i = o.parents("li").first().find("a").first() : i.parents("li").first().children("[data-submenu]:visible").length && (i = i.parents("li").find("li:last-child").find("a").first()), void(e(this).is(":last-child") && (a = o.parents("li").first().next("li").find("a").first()))) : void 0
					}), Foundation.Keyboard.handleKey(n, "AccordionMenu", {
						open: function() {
							s.is(":hidden") && (t.down(s), s.find("li").first().find("a").first().focus())
						}, close: function() {
							s.length && !s.is(":hidden") ? t.up(s) : o.parent("[data-submenu]").length && (t.up(o.parent("[data-submenu]")), o.parents("li").first().find("a").first().focus())
						}, up: function() {
							return i.focus(), !0
						}, down: function() {
							return a.focus(), !0
						}, toggle: function() {
							o.children("[data-submenu]").length && t.toggle(o.children("[data-submenu]"))
						}, closeAll: function() {
							t.hideAll()
						}, handled: function(e) {
							e && n.preventDefault(), n.stopImmediatePropagation()
						}
					})
				})
			}
		}, {
			key: "hideAll", value: function() {
				this.$element.find("[data-submenu]").slideUp(this.options.slideSpeed)
			}
		}, {
			key: "toggle", value: function(e) {
				e.is(":animated") || (e.is(":hidden") ? this.down(e) : this.up(e))
			}
		}, {
			key: "down", value: function(e) {
				var t = this;
				this.options.multiOpen || this.up(this.$element.find(".is-active").not(e.parentsUntil(this.$element).add(e))), e.addClass("is-active").attr({"aria-hidden": !1}).parent(".is-accordion-submenu-parent").attr({"aria-expanded": !0}), e.slideDown(t.options.slideSpeed, function() {
					t.$element.trigger("down.zf.accordionMenu", [e])
				})
			}
		}, {
			key: "up", value: function(e) {
				var t = this;
				e.slideUp(t.options.slideSpeed, function() {
					t.$element.trigger("up.zf.accordionMenu", [e])
				});
				var n = e.find("[data-submenu]").slideUp(0).addBack().attr("aria-hidden", !0);
				n.parent(".is-accordion-submenu-parent").attr("aria-expanded", !1)
			}
		}, {
			key: "destroy", value: function() {
				this.$element.find("[data-submenu]").slideDown(0).css("display", ""), this.$element.find("a").off("click.zf.accordionMenu"), Foundation.Nest.Burn(this.$element, "accordion"), Foundation.unregisterPlugin(this)
			}
		}]), t
	}();
	t.defaults = {slideSpeed: 250, multiOpen: !0}, Foundation.plugin(t, "AccordionMenu")
}(jQuery);
var _createClass = function() {
	function e (e, t) {
		for(var n = 0; n < t.length; n++)
		{
			var i = t[n];
			i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
		}
	}

	return function(t, n, i) {
		return n && e(t.prototype, n), i && e(t, i), t
	}
}();
!function(e) {
	var t = function() {
		function t (n, i) {
			_classCallCheck(this, t), this.$element = n, this.options = e.extend({}, t.defaults, this.$element.data(), i), this._init(), Foundation.registerPlugin(this, "Accordion"), Foundation.Keyboard.register("Accordion", {ENTER: "toggle", SPACE: "toggle", ARROW_DOWN: "next", ARROW_UP: "previous"})
		}

		return _createClass(t, [{
			key: "_init", value: function() {
				this.$element.attr("role", "tablist"), this.$tabs = this.$element.children("li, [data-accordion-item]"), this.$tabs.each(function(t, n) {
					var i = e(n), a = i.children("[data-tab-content]"),
						o = a[0].id || Foundation.GetYoDigits(6, "accordion"), r = n.id || o + "-label";
					i.find("a:first").attr({"aria-controls": o, role: "tab", id: r, "aria-expanded": !1, "aria-selected": !1}), a.attr({role: "tabpanel", "aria-labelledby": r, "aria-hidden": !0, id: o})
				});
				var t = this.$element.find(".is-active").children("[data-tab-content]");
				t.length && this.down(t, !0), this._events()
			}
		}, {
			key: "_events", value: function() {
				var t = this;
				this.$tabs.each(function() {
					var n = e(this), i = n.children("[data-tab-content]");
					i.length && n.children("a").off("click.zf.accordion keydown.zf.accordion").on("click.zf.accordion", function(e) {
						e.preventDefault(), t.toggle(i)
					}).on("keydown.zf.accordion", function(e) {
						Foundation.Keyboard.handleKey(e, "Accordion", {
							toggle: function() {
								t.toggle(i)
							}, next: function() {
								var e = n.next().find("a").focus();
								t.options.multiExpand || e.trigger("click.zf.accordion")
							}, previous: function() {
								var e = n.prev().find("a").focus();
								t.options.multiExpand || e.trigger("click.zf.accordion")
							}, handled: function() {
								e.preventDefault(), e.stopPropagation()
							}
						})
					})
				})
			}
		}, {
			key: "toggle", value: function(e) {
				e.parent().hasClass("is-active") ? this.up(e) : this.down(e)
			}
		}, {
			key: "down", value: function(t, n) {
				var i = this;
				if(t.attr("aria-hidden", !1).parent("[data-tab-content]").addBack().parent().addClass("is-active"), !this.options.multiExpand && !n)
				{
					var a = this.$element.children(".is-active").children("[data-tab-content]");
					a.length && this.up(a.not(t))
				}
				t.slideDown(this.options.slideSpeed, function() {
					i.$element.trigger("down.zf.accordion", [t])
				}), e("#" + t.attr("aria-labelledby")).attr({"aria-expanded": !0, "aria-selected": !0})
			}
		}, {
			key: "up", value: function(t) {
				var n = t.parent().siblings(), i = this;
				(this.options.allowAllClosed || n.hasClass("is-active")) && t.parent().hasClass("is-active") && (t.slideUp(i.options.slideSpeed, function() {
					i.$element.trigger("up.zf.accordion", [t])
				}), t.attr("aria-hidden", !0).parent().removeClass("is-active"), e("#" + t.attr("aria-labelledby")).attr({"aria-expanded": !1, "aria-selected": !1}))
			}
		}, {
			key: "destroy", value: function() {
				this.$element.find("[data-tab-content]").stop(!0).slideUp(0).css("display", ""), this.$element.find("a").off(".zf.accordion"), Foundation.unregisterPlugin(this)
			}
		}]), t
	}();
	t.defaults = {slideSpeed: 250, multiExpand: !1, allowAllClosed: !1}, Foundation.plugin(t, "Accordion")
}(jQuery);
var _createClass = function() {
	function e (e, t) {
		for(var n = 0; n < t.length; n++)
		{
			var i = t[n];
			i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
		}
	}

	return function(t, n, i) {
		return n && e(t.prototype, n), i && e(t, i), t
	}
}();
!function(e) {
	var t = function() {
		function t (n, i) {
			_classCallCheck(this, t), this.$element = n, this.options = e.extend({}, t.defaults, this.$element.data(), i), this._init(), Foundation.registerPlugin(this, "Dropdown"), Foundation.Keyboard.register("Dropdown", {ENTER: "open", SPACE: "open", ESCAPE: "close", TAB: "tab_forward", SHIFT_TAB: "tab_backward"})
		}

		return _createClass(t, [{
			key: "_init", value: function() {
				var t = this.$element.attr("id");
				this.$anchor = e(e('[data-toggle="' + t + '"]').length ? '[data-toggle="' + t + '"]' : '[data-open="' + t + '"]'), this.$anchor.attr({"aria-controls": t, "data-is-focus": !1, "data-yeti-box": t, "aria-haspopup": !0, "aria-expanded": !1}), this.options.positionClass = this.getPositionClass(), this.counter = 4, this.usedPositions = [], this.$element.attr({"aria-hidden": "true", "data-yeti-box": t, "data-resize": t, "aria-labelledby": this.$anchor[0].id || Foundation.GetYoDigits(6, "dd-anchor")}), this._events()
			}
		}, {
			key: "getPositionClass", value: function() {
				var e = this.$element[0].className.match(/(top|left|right|bottom)/g);
				e = e ? e[0] : "";
				var t = /float-(\S+)/.exec(this.$anchor[0].className);
				t = t ? t[1] : "";
				var n = t ? t + " " + e : e;
				return n
			}
		}, {
			key: "_reposition", value: function(e) {
				this.usedPositions.push(e ? e : "bottom"), !e && this.usedPositions.indexOf("top") < 0 ? this.$element.addClass("top") : "top" === e && this.usedPositions.indexOf("bottom") < 0 ? this.$element.removeClass(e) : "left" === e && this.usedPositions.indexOf("right") < 0 ? this.$element.removeClass(e).addClass("right") : "right" === e && this.usedPositions.indexOf("left") < 0 ? this.$element.removeClass(e).addClass("left") : !e && this.usedPositions.indexOf("top") > -1 && this.usedPositions.indexOf("left") < 0 ? this.$element.addClass("left") : "top" === e && this.usedPositions.indexOf("bottom") > -1 && this.usedPositions.indexOf("left") < 0 ? this.$element.removeClass(e).addClass("left") : this.$element.removeClass("left" === e && this.usedPositions.indexOf("right") > -1 && this.usedPositions.indexOf("bottom") < 0 ? e : "right" === e && this.usedPositions.indexOf("left") > -1 && this.usedPositions.indexOf("bottom") < 0 ? e : e), this.classChanged = !0, this.counter--
			}
		}, {
			key: "_setPosition", value: function() {
				if("false" === this.$anchor.attr("aria-expanded")) return !1;
				{
					var e = this.getPositionClass(), t = Foundation.Box.GetDimensions(this.$element),
						n = (Foundation.Box.GetDimensions(this.$anchor), "left" === e ? "left" : "right" === e ? "left" : "top"),
						i = "top" === n ? "height" : "width";
					"height" === i ? this.options.vOffset : this.options.hOffset
				}
				if(t.width >= t.windowDims.width || !this.counter && !Foundation.Box.ImNotTouchingYou(this.$element)) return this.$element.offset(Foundation.Box.GetOffsets(this.$element, this.$anchor, "center bottom", this.options.vOffset, this.options.hOffset, !0)).css({width: t.windowDims.width - 2 * this.options.hOffset, height: "auto"}), this.classChanged = !0, !1;
				for(this.$element.offset(Foundation.Box.GetOffsets(this.$element, this.$anchor, e, this.options.vOffset, this.options.hOffset)); !Foundation.Box.ImNotTouchingYou(this.$element, !1, !0) && this.counter;)
				{
					this._reposition(e), this._setPosition()
				}
			}
		}, {
			key: "_events", value: function() {
				var t = this;
				this.$element.on({"open.zf.trigger": this.open.bind(this), "close.zf.trigger": this.close.bind(this), "toggle.zf.trigger": this.toggle.bind(this), "resizeme.zf.trigger": this._setPosition.bind(this)}), this.options.hover && (this.$anchor.off("mouseenter.zf.dropdown mouseleave.zf.dropdown").on("mouseenter.zf.dropdown", function() {
					e('body[data-whatinput="mouse"]').is("*") && (clearTimeout(t.timeout), t.timeout = setTimeout(function() {
						t.open(), t.$anchor.data("hover", !0)
					}, t.options.hoverDelay))
				}).on("mouseleave.zf.dropdown", function() {
					clearTimeout(t.timeout), t.timeout = setTimeout(function() {
						t.close(), t.$anchor.data("hover", !1)
					}, t.options.hoverDelay)
				}), this.options.hoverPane && this.$element.off("mouseenter.zf.dropdown mouseleave.zf.dropdown").on("mouseenter.zf.dropdown", function() {
					clearTimeout(t.timeout)
				}).on("mouseleave.zf.dropdown", function() {
					clearTimeout(t.timeout), t.timeout = setTimeout(function() {
						t.close(), t.$anchor.data("hover", !1)
					}, t.options.hoverDelay)
				})), this.$anchor.add(this.$element).on("keydown.zf.dropdown", function(n) {
					var i = e(this), a = Foundation.Keyboard.findFocusable(t.$element);
					Foundation.Keyboard.handleKey(n, "Dropdown", {
						tab_forward: function() {
							t.$element.find(":focus").is(a.eq(-1)) && (t.options.trapFocus ? (a.eq(0).focus(), n.preventDefault()) : t.close())
						}, tab_backward: function() {
							(t.$element.find(":focus").is(a.eq(0)) || t.$element.is(":focus")) && (t.options.trapFocus ? (a.eq(-1).focus(), n.preventDefault()) : t.close())
						}, open: function() {
							i.is(t.$anchor) && (t.open(), t.$element.attr("tabindex", -1).focus(), n.preventDefault())
						}, close: function() {
							t.close(), t.$anchor.focus()
						}
					})
				})
			}
		}, {
			key: "_addBodyHandler", value: function() {
				var t = e(document.body).not(this.$element), n = this;
				t.off("click.zf.dropdown").on("click.zf.dropdown", function(e) {
					n.$anchor.is(e.target) || n.$anchor.find(e.target).length || n.$element.find(e.target).length || (n.close(), t.off("click.zf.dropdown"))
				})
			}
		}, {
			key: "open", value: function() {
				if(this.$element.trigger("closeme.zf.dropdown", this.$element.attr("id")), this.$anchor.addClass("hover").attr({"aria-expanded": !0}), this._setPosition(), this.$element.addClass("is-open").attr({"aria-hidden": !1}), this.options.autoFocus)
				{
					var e = Foundation.Keyboard.findFocusable(this.$element);
					e.length && e.eq(0).focus()
				}
				this.options.closeOnClick && this._addBodyHandler(), this.$element.trigger("show.zf.dropdown", [this.$element])
			}
		}, {
			key: "close", value: function() {
				if(!this.$element.hasClass("is-open")) return !1;
				if(this.$element.removeClass("is-open").attr({"aria-hidden": !0}), this.$anchor.removeClass("hover").attr("aria-expanded", !1), this.classChanged)
				{
					var e = this.getPositionClass();
					e && this.$element.removeClass(e), this.$element.addClass(this.options.positionClass).css({height: "", width: ""}), this.classChanged = !1, this.counter = 4, this.usedPositions.length = 0
				}
				this.$element.trigger("hide.zf.dropdown", [this.$element])
			}
		}, {
			key: "toggle", value: function() {
				if(this.$element.hasClass("is-open"))
				{
					if(this.$anchor.data("hover")) return;
					this.close()
				}
				else this.open()
			}
		}, {
			key: "destroy", value: function() {
				this.$element.off(".zf.trigger").hide(), this.$anchor.off(".zf.dropdown"), Foundation.unregisterPlugin(this)
			}
		}]), t
	}();
	t.defaults = {hoverDelay: 250, hover: !1, hoverPane: !1, vOffset: 1, hOffset: 1, positionClass: "", trapFocus: !1, autoFocus: !1, closeOnClick: !1}, Foundation.plugin(t, "Dropdown")
}(jQuery);
var _createClass = function() {
	function e (e, t) {
		for(var n = 0; n < t.length; n++)
		{
			var i = t[n];
			i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
		}
	}

	return function(t, n, i) {
		return n && e(t.prototype, n), i && e(t, i), t
	}
}();
!function(e) {
	var t = function() {
		function t (n, i) {
			_classCallCheck(this, t), this.$element = n, this.options = e.extend({}, t.defaults, this.$element.data(), i), Foundation.Nest.Feather(this.$element, "dropdown"), this._init(), Foundation.registerPlugin(this, "DropdownMenu"), Foundation.Keyboard.register("DropdownMenu", {ENTER: "open", SPACE: "open", ARROW_RIGHT: "next", ARROW_UP: "up", ARROW_DOWN: "down", ARROW_LEFT: "previous", ESCAPE: "close"})
		}

		return _createClass(t, [{
			key: "_init", value: function() {
				var e = this.$element.find("li.is-dropdown-submenu-parent");
				this.$element.children(".is-dropdown-submenu-parent").children(".is-dropdown-submenu").addClass("first-sub"), this.$menuItems = this.$element.find('[role="menuitem"]'), this.$tabs = this.$element.children('[role="menuitem"]'), this.$tabs.find("ul.is-dropdown-submenu").addClass(this.options.verticalClass), this.$element.hasClass(this.options.rightClass) || "right" === this.options.alignment || Foundation.rtl() || this.$element.parents(".top-bar-right").is("*") ? (this.options.alignment = "right", e.addClass("opens-left")) : e.addClass("opens-right"), this.changed = !1, this._events()
			}
		}, {
			key: "_isVertical", value: function() {
				return "block" === this.$tabs.css("display")
			}
		}, {
			key: "_events", value: function() {
				var t = this, n = "ontouchstart" in window || "undefined" != typeof window.ontouchstart,
					i = "is-dropdown-submenu-parent", a = function(a) {
						var o = e(a.target).parentsUntil("ul", "." + i), r = o.hasClass(i),
							s = "true" === o.attr("data-is-click"), l = o.children(".is-dropdown-submenu");
						if(!r) return void(t.options.closeOnClickInside && t._hide(o));
						if(s)
						{
							if(!t.options.closeOnClick || !t.options.clickOpen && !n || t.options.forceFollow && n) return;
							a.stopImmediatePropagation(), a.preventDefault(), t._hide(o)
						}
						else a.preventDefault(), a.stopImmediatePropagation(), t._show(l), o.add(o.parentsUntil(t.$element, "." + i)).attr("data-is-click", !0)
					};
				(this.options.clickOpen || n) && this.$menuItems.on("click.zf.dropdownmenu touchstart.zf.dropdownmenu", a), this.options.disableHover || this.$menuItems.on("mouseenter.zf.dropdownmenu", function() {
					var n = e(this), a = n.hasClass(i);
					a && (clearTimeout(t.delay), t.delay = setTimeout(function() {
						t._show(n.children(".is-dropdown-submenu"))
					}, t.options.hoverDelay))
				}).on("mouseleave.zf.dropdownmenu", function() {
					var n = e(this), a = n.hasClass(i);
					if(a && t.options.autoclose)
					{
						if("true" === n.attr("data-is-click") && t.options.clickOpen) return !1;
						clearTimeout(t.delay), t.delay = setTimeout(function() {
							t._hide(n)
						}, t.options.closingTime)
					}
				}), this.$menuItems.on("keydown.zf.dropdownmenu", function(n) {
					var i, a, o = e(n.target).parentsUntil("ul", '[role="menuitem"]'), r = t.$tabs.index(o) > -1,
						s = r ? t.$tabs : o.siblings("li").add(o);
					s.each(function(t) {
						return e(this).is(o) ? (i = s.eq(t - 1), void(a = s.eq(t + 1))) : void 0
					});
					var l = function() {
						o.is(":last-child") || (a.children("a:first").focus(), n.preventDefault())
					}, u = function() {
						i.children("a:first").focus(), n.preventDefault()
					}, c = function() {
						var e = o.children("ul.is-dropdown-submenu");
						e.length && (t._show(e), o.find("li > a:first").focus(), n.preventDefault())
					}, d = function() {
						var e = o.parent("ul").parent("li");
						e.children("a:first").focus(), t._hide(e), n.preventDefault()
					}, f = {
						open: c, close: function() {
							t._hide(t.$element), t.$menuItems.find("a:first").focus(), n.preventDefault()
						}, handled: function() {
							n.stopImmediatePropagation()
						}
					};
					r ? t._isVertical() ? Foundation.rtl() ? e.extend(f, {down: l, up: u, next: d, previous: c}) : e.extend(f, {down: l, up: u, next: c, previous: d}) : Foundation.rtl() ? e.extend(f, {next: u, previous: l, down: c, up: d}) : e.extend(f, {next: l, previous: u, down: c, up: d}) : Foundation.rtl() ? e.extend(f, {next: d, previous: c, down: l, up: u}) : e.extend(f, {next: c, previous: d, down: l, up: u}), Foundation.Keyboard.handleKey(n, "DropdownMenu", f)
				})
			}
		}, {
			key: "_addBodyHandler", value: function() {
				var t = e(document.body), n = this;
				t.off("mouseup.zf.dropdownmenu touchend.zf.dropdownmenu").on("mouseup.zf.dropdownmenu touchend.zf.dropdownmenu", function(e) {
					var i = n.$element.find(e.target);
					i.length || (n._hide(), t.off("mouseup.zf.dropdownmenu touchend.zf.dropdownmenu"))
				})
			}
		}, {
			key: "_show", value: function(t) {
				var n = this.$tabs.index(this.$tabs.filter(function(n, i) {
					return e(i).find(t).length > 0
				})), i = t.parent("li.is-dropdown-submenu-parent").siblings("li.is-dropdown-submenu-parent");
				this._hide(i, n), t.css("visibility", "hidden").addClass("js-dropdown-active").attr({"aria-hidden": !1}).parent("li.is-dropdown-submenu-parent").addClass("is-active").attr({"aria-expanded": !0});
				var a = Foundation.Box.ImNotTouchingYou(t, null, !0);
				if(!a)
				{
					var o = "left" === this.options.alignment ? "-right" : "-left",
						r = t.parent(".is-dropdown-submenu-parent");
					r.removeClass("opens" + o).addClass("opens-" + this.options.alignment), a = Foundation.Box.ImNotTouchingYou(t, null, !0), a || r.removeClass("opens-" + this.options.alignment).addClass("opens-inner"), this.changed = !0
				}
				t.css("visibility", ""), this.options.closeOnClick && this._addBodyHandler(), this.$element.trigger("show.zf.dropdownmenu", [t])
			}
		}, {
			key: "_hide", value: function(e, t) {
				var n;
				n = e && e.length ? e : void 0 !== t ? this.$tabs.not(function(e) {
					return e === t
				}) : this.$element;
				var i = n.hasClass("is-active") || n.find(".is-active").length > 0;
				if(i)
				{
					if(n.find("li.is-active").add(n).attr({"aria-expanded": !1, "data-is-click": !1}).removeClass("is-active"), n.find("ul.js-dropdown-active").attr({"aria-hidden": !0}).removeClass("js-dropdown-active"), this.changed || n.find("opens-inner").length)
					{
						var a = "left" === this.options.alignment ? "right" : "left";
						n.find("li.is-dropdown-submenu-parent").add(n).removeClass("opens-inner opens-" + this.options.alignment).addClass("opens-" + a), this.changed = !1
					}
					this.$element.trigger("hide.zf.dropdownmenu", [n])
				}
			}
		}, {
			key: "destroy", value: function() {
				this.$menuItems.off(".zf.dropdownmenu").removeAttr("data-is-click").removeClass("is-right-arrow is-left-arrow is-down-arrow opens-right opens-left opens-inner"), e(document.body).off(".zf.dropdownmenu"), Foundation.Nest.Burn(this.$element, "dropdown"), Foundation.unregisterPlugin(this)
			}
		}]), t
	}();
	t.defaults = {disableHover: !1, autoclose: !0, hoverDelay: 50, clickOpen: !1, closingTime: 500, alignment: "left", closeOnClick: !0, closeOnClickInside: !0, verticalClass: "vertical", rightClass: "align-right", forceFollow: !0}, Foundation.plugin(t, "DropdownMenu")
}(jQuery);
var _createClass = function() {
	function e (e, t) {
		for(var n = 0; n < t.length; n++)
		{
			var i = t[n];
			i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
		}
	}

	return function(t, n, i) {
		return n && e(t.prototype, n), i && e(t, i), t
	}
}();
!function(e) {
	function t () {
		return /iP(ad|hone|od).*OS/.test(window.navigator.userAgent)
	}

	function n () {
		return /Android/.test(window.navigator.userAgent)
	}

	function i () {
		return t() || n()
	}

	var a = function() {
		function t (n, i) {
			_classCallCheck(this, t), this.$element = n, this.options = e.extend({}, t.defaults, this.$element.data(), i), this._init(), Foundation.registerPlugin(this, "Reveal"), Foundation.Keyboard.register("Reveal", {ENTER: "open", SPACE: "open", ESCAPE: "close", TAB: "tab_forward", SHIFT_TAB: "tab_backward"})
		}

		return _createClass(t, [{
			key: "_init", value: function() {
				this.id = this.$element.attr("id"), this.isActive = !1, this.cached = {mq: Foundation.MediaQuery.current}, this.isMobile = i(), this.$anchor = e(e('[data-open="' + this.id + '"]').length ? '[data-open="' + this.id + '"]' : '[data-toggle="' + this.id + '"]'), this.$anchor.attr({"aria-controls": this.id, "aria-haspopup": !0, tabindex: 0}), (this.options.fullScreen || this.$element.hasClass("full")) && (this.options.fullScreen = !0, this.options.overlay = !1), this.options.overlay && !this.$overlay && (this.$overlay = this._makeOverlay(this.id)), this.$element.attr({role: "dialog", "aria-hidden": !0, "data-yeti-box": this.id, "data-resize": this.id}), this.$overlay ? this.$element.detach().appendTo(this.$overlay) : (this.$element.detach().appendTo(e("body")), this.$element.addClass("without-overlay")), this._events(), this.options.deepLink && window.location.hash === "#" + this.id && e(window).one("load.zf.reveal", this.open.bind(this))
			}
		}, {
			key: "_makeOverlay", value: function() {
				var t = e("<div></div>").addClass("reveal-overlay").appendTo("body");
				return t
			}
		}, {
			key: "_updatePosition", value: function() {
				var t, n, i = this.$element.outerWidth(), a = e(window).width(), o = this.$element.outerHeight(),
					r = e(window).height();
				t = "auto" === this.options.hOffset ? parseInt((a - i) / 2, 10) : parseInt(this.options.hOffset, 10), n = "auto" === this.options.vOffset ? o > r ? parseInt(Math.min(100, r / 10), 10) : parseInt((r - o) / 4, 10) : parseInt(this.options.vOffset, 10), this.$element.css({top: n + "px"}), this.$overlay && "auto" === this.options.hOffset || (this.$element.css({left: t + "px"}), this.$element.css({margin: "0px"}))
			}
		}, {
			key: "_events", value: function() {
				var t = this, n = this;
				this.$element.on({
					"open.zf.trigger": this.open.bind(this), "close.zf.trigger": function(i, a) {
						return i.target === n.$element[0] || e(i.target).parents("[data-closable]")[0] === a ? t.close.apply(t) : void 0
					}, "toggle.zf.trigger": this.toggle.bind(this), "resizeme.zf.trigger": function() {
						n._updatePosition()
					}
				}), this.$anchor.length && this.$anchor.on("keydown.zf.reveal", function(e) {
					(13 === e.which || 32 === e.which) && (e.stopPropagation(), e.preventDefault(), n.open())
				}), this.options.closeOnClick && this.options.overlay && this.$overlay.off(".zf.reveal").on("click.zf.reveal", function(t) {
					t.target !== n.$element[0] && !e.contains(n.$element[0], t.target) && e.contains(document, t.target) && n.close()
				}), this.options.deepLink && e(window).on("popstate.zf.reveal:" + this.id, this._handleState.bind(this))
			}
		}, {
			key: "_handleState", value: function() {
				window.location.hash !== "#" + this.id || this.isActive ? this.close() : this.open()
			}
		}, {
			key: "open", value: function() {
				var t = this;
				if(this.options.deepLink)
				{
					var n = "#" + this.id;
					window.history.pushState ? window.history.pushState(null, null, n) : window.location.hash = n
				}
				if(this.isActive = !0, this.$element.css({visibility: "hidden"}).show().scrollTop(0), this.options.overlay && this.$overlay.css({visibility: "hidden"}).show(), this._updatePosition(), this.$element.hide().css({visibility: ""}), this.$overlay && (this.$overlay.css({visibility: ""}).hide(), this.$element.hasClass("fast") ? this.$overlay.addClass("fast") : this.$element.hasClass("slow") && this.$overlay.addClass("slow")), this.options.multipleOpened || this.$element.trigger("closeme.zf.reveal", this.id), this.options.animationIn)
				{
					var i;
					!function() {
						var e = function() {
							i.$element.attr({"aria-hidden": !1, tabindex: -1}).focus()
						};
						i = t, t.options.overlay && Foundation.Motion.animateIn(t.$overlay, "fade-in"), Foundation.Motion.animateIn(t.$element, t.options.animationIn, function() {
							t.focusableElements = Foundation.Keyboard.findFocusable(t.$element), e()
						})
					}()
				}
				else this.options.overlay && this.$overlay.show(0), this.$element.show(this.options.showDelay);
				this.$element.attr({"aria-hidden": !1, tabindex: -1}).focus(), this.$element.trigger("open.zf.reveal"), this.isMobile ? (this.originalScrollPos = window.pageYOffset, e("html, body").addClass("is-reveal-open")) : e("body").addClass("is-reveal-open"), setTimeout(function() {
					t._extraHandlers()
				}, 0)
			}
		}, {
			key: "_extraHandlers", value: function() {
				var t = this;
				this.focusableElements = Foundation.Keyboard.findFocusable(this.$element), this.options.overlay || !this.options.closeOnClick || this.options.fullScreen || e("body").on("click.zf.reveal", function(n) {
					n.target !== t.$element[0] && !e.contains(t.$element[0], n.target) && e.contains(document, n.target) && t.close()
				}), this.options.closeOnEsc && e(window).on("keydown.zf.reveal", function(e) {
					Foundation.Keyboard.handleKey(e, "Reveal", {
						close: function() {
							t.options.closeOnEsc && (t.close(), t.$anchor.focus())
						}
					})
				}), this.$element.on("keydown.zf.reveal", function(n) {
					var i = e(this);
					Foundation.Keyboard.handleKey(n, "Reveal", {
						tab_forward: function() {
							return t.focusableElements = Foundation.Keyboard.findFocusable(t.$element), t.$element.find(":focus").is(t.focusableElements.eq(-1)) ? (t.focusableElements.eq(0).focus(), !0) : 0 === t.focusableElements.length ? !0 : void 0
						}, tab_backward: function() {
							return t.focusableElements = Foundation.Keyboard.findFocusable(t.$element), t.$element.find(":focus").is(t.focusableElements.eq(0)) || t.$element.is(":focus") ? (t.focusableElements.eq(-1).focus(), !0) : 0 === t.focusableElements.length ? !0 : void 0
						}, open: function() {
							t.$element.find(":focus").is(t.$element.find("[data-close]")) ? setTimeout(function() {
								t.$anchor.focus()
							}, 1) : i.is(t.focusableElements) && t.open()
						}, close: function() {
							t.options.closeOnEsc && (t.close(), t.$anchor.focus())
						}, handled: function(e) {
							e && n.preventDefault()
						}
					})
				})
			}
		}, {
			key: "close", value: function() {
				function t () {
					n.isMobile ? (e("html, body").removeClass("is-reveal-open"), n.originalScrollPos && (e("body").scrollTop(n.originalScrollPos), n.originalScrollPos = null)) : e("body").removeClass("is-reveal-open"), n.$element.attr("aria-hidden", !0), n.$element.trigger("closed.zf.reveal")
				}

				if(!this.isActive || !this.$element.is(":visible")) return !1;
				var n = this;
				this.options.animationOut ? (this.options.overlay ? Foundation.Motion.animateOut(this.$overlay, "fade-out", t) : t(), Foundation.Motion.animateOut(this.$element, this.options.animationOut)) : (this.options.overlay ? this.$overlay.hide(0, t) : t(), this.$element.hide(this.options.hideDelay)), this.options.closeOnEsc && e(window).off("keydown.zf.reveal"), !this.options.overlay && this.options.closeOnClick && e("body").off("click.zf.reveal"), this.$element.off("keydown.zf.reveal"), this.options.resetOnClose && this.$element.html(this.$element.html()), this.isActive = !1, n.options.deepLink && (window.history.replaceState ? window.history.replaceState("", document.title, window.location.pathname) : window.location.hash = "")
			}
		}, {
			key: "toggle", value: function() {
				this.isActive ? this.close() : this.open()
			}
		}, {
			key: "destroy", value: function() {
				this.options.overlay && (this.$element.appendTo(e("body")), this.$overlay.hide().off().remove()), this.$element.hide().off(), this.$anchor.off(".zf"), e(window).off(".zf.reveal:" + this.id), Foundation.unregisterPlugin(this)
			}
		}]), t
	}();
	a.defaults = {animationIn: "", animationOut: "", showDelay: 0, hideDelay: 0, closeOnClick: !0, closeOnEsc: !0, multipleOpened: !1, vOffset: "auto", hOffset: "auto", fullScreen: !1, btmOffsetPct: 10, overlay: !0, resetOnClose: !1, deepLink: !1}, Foundation.plugin(a, "Reveal")
}(jQuery);
var _createClass = function() {
	function e (e, t) {
		for(var n = 0; n < t.length; n++)
		{
			var i = t[n];
			i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
		}
	}

	return function(t, n, i) {
		return n && e(t.prototype, n), i && e(t, i), t
	}
}();
!function(e) {
	var t = function() {
		function t (n, i) {
			_classCallCheck(this, t), this.$element = n, this.options = e.extend({}, t.defaults, n.data(), i), this.className = "", this._init(), this._events(), Foundation.registerPlugin(this, "Toggler")
		}

		return _createClass(t, [{
			key: "_init", value: function() {
				var t;
				this.options.animate ? (t = this.options.animate.split(" "), this.animationIn = t[0], this.animationOut = t[1] || null) : (t = this.$element.data("toggler"), this.className = "." === t[0] ? t.slice(1) : t);
				var n = this.$element[0].id;
				e('[data-open="' + n + '"], [data-close="' + n + '"], [data-toggle="' + n + '"]').attr("aria-controls", n), this.$element.attr("aria-expanded", this.$element.is(":hidden") ? !1 : !0)
			}
		}, {
			key: "_events", value: function() {
				this.$element.off("toggle.zf.trigger").on("toggle.zf.trigger", this.toggle.bind(this))
			}
		}, {
			key: "toggle", value: function() {
				this[this.options.animate ? "_toggleAnimate" : "_toggleClass"]()
			}
		}, {
			key: "_toggleClass", value: function() {
				this.$element.toggleClass(this.className);
				var e = this.$element.hasClass(this.className);
				this.$element.trigger(e ? "on.zf.toggler" : "off.zf.toggler"), this._updateARIA(e)
			}
		}, {
			key: "_toggleAnimate", value: function() {
				var e = this;
				this.$element.is(":hidden") ? Foundation.Motion.animateIn(this.$element, this.animationIn, function() {
					e._updateARIA(!0), this.trigger("on.zf.toggler")
				}) : Foundation.Motion.animateOut(this.$element, this.animationOut, function() {
					e._updateARIA(!1), this.trigger("off.zf.toggler")
				})
			}
		}, {
			key: "_updateARIA", value: function(e) {
				this.$element.attr("aria-expanded", e ? !0 : !1)
			}
		}, {
			key: "destroy", value: function() {
				this.$element.off(".zf.toggler"), Foundation.unregisterPlugin(this)
			}
		}]), t
	}();
	t.defaults = {animate: !1}, Foundation.plugin(t, "Toggler")
}(jQuery);
var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
	return typeof e
} : function(e) {
	return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
}, _createClass = function() {
	function e (e, t) {
		for(var n = 0; n < t.length; n++)
		{
			var i = t[n];
			i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(e, i.key, i)
		}
	}

	return function(t, n, i) {
		return n && e(t.prototype, n), i && e(t, i), t
	}
}();
!function(e) {
	var t = function() {
		function t (n, i) {
			_classCallCheck(this, t), this.$element = n, this.options = e.extend({}, t.defaults, this.$element.data(), i), this._init(), Foundation.registerPlugin(this, "Tabs"), Foundation.Keyboard.register("Tabs", {ENTER: "open", SPACE: "open", ARROW_RIGHT: "next", ARROW_UP: "previous", ARROW_DOWN: "next", ARROW_LEFT: "previous"})
		}

		return _createClass(t, [{
			key: "_init", value: function() {
				var t = this;
				if(this.$tabTitles = this.$element.find("." + this.options.linkClass), this.$tabContent = e('[data-tabs-content="' + this.$element[0].id + '"]'), this.$tabTitles.each(function() {
						var n = e(this), i = n.find("a"), a = n.hasClass("is-active"), o = i[0].hash.slice(1),
							r = i[0].id ? i[0].id : o + "-label", s = e("#" + o);
						n.attr({role: "presentation"}), i.attr({role: "tab", "aria-controls": o, "aria-selected": a, id: r}), s.attr({role: "tabpanel", "aria-hidden": !a, "aria-labelledby": r}), a && t.options.autoFocus && i.focus()
					}), this.options.matchHeight)
				{
					var n = this.$tabContent.find("img");
					n.length ? Foundation.onImagesLoaded(n, this._setHeight.bind(this)) : this._setHeight()
				}
				this._events()
			}
		}, {
			key: "_events", value: function() {
				this._addKeyHandler(), this._addClickHandler(), this._setHeightMqHandler = null, this.options.matchHeight && (this._setHeightMqHandler = this._setHeight.bind(this), e(window).on("changed.zf.mediaquery", this._setHeightMqHandler))
			}
		}, {
			key: "_addClickHandler", value: function() {
				var t = this;
				this.$element.off("click.zf.tabs").on("click.zf.tabs", "." + this.options.linkClass, function(n) {
					n.preventDefault(), n.stopPropagation(), e(this).hasClass("is-active") || t._handleTabChange(e(this))
				})
			}
		}, {
			key: "_addKeyHandler", value: function() {
				{
					var t = this;
					t.$element.find("li:first-of-type"), t.$element.find("li:last-of-type")
				}
				this.$tabTitles.off("keydown.zf.tabs").on("keydown.zf.tabs", function(n) {
					if(9 !== n.which)
					{
						var i, a, o = e(this), r = o.parent("ul").children("li");
						r.each(function(n) {
							return e(this).is(o) ? void(t.options.wrapOnKeys ? (i = 0 === n ? r.last() : r.eq(n - 1), a = n === r.length - 1 ? r.first() : r.eq(n + 1)) : (i = r.eq(Math.max(0, n - 1)), a = r.eq(Math.min(n + 1, r.length - 1)))) : void 0
						}), Foundation.Keyboard.handleKey(n, "Tabs", {
							open: function() {
								o.find('[role="tab"]').focus(), t._handleTabChange(o)
							}, previous: function() {
								i.find('[role="tab"]').focus(), t._handleTabChange(i)
							}, next: function() {
								a.find('[role="tab"]').focus(), t._handleTabChange(a)
							}, handled: function() {
								n.stopPropagation(), n.preventDefault()
							}
						})
					}
				})
			}
		}, {
			key: "_handleTabChange", value: function(t) {
				var n = t.find('[role="tab"]'), i = n[0].hash, a = this.$tabContent.find(i),
					o = this.$element.find("." + this.options.linkClass + ".is-active").removeClass("is-active").find('[role="tab"]').attr({"aria-selected": "false"});
				e("#" + o.attr("aria-controls")).removeClass("is-active").attr({"aria-hidden": "true"}), t.addClass("is-active"), n.attr({"aria-selected": "true"}), a.addClass("is-active").attr({"aria-hidden": "false"}), this.$element.trigger("change.zf.tabs", [t])
			}
		}, {
			key: "selectTab", value: function(e) {
				var t;
				t = "object" === ("undefined" == typeof e ? "undefined" : _typeof(e)) ? e[0].id : e, t.indexOf("#") < 0 && (t = "#" + t);
				var n = this.$tabTitles.find('[href="' + t + '"]').parent("." + this.options.linkClass);
				this._handleTabChange(n)
			}
		}, {
			key: "_setHeight", value: function() {
				var t = 0;
				this.$tabContent.find("." + this.options.panelClass).css("height", "").each(function() {
					var n = e(this), i = n.hasClass("is-active");
					i || n.css({visibility: "hidden", display: "block"});
					var a = this.getBoundingClientRect().height;
					i || n.css({visibility: "", display: ""}), t = a > t ? a : t
				}).css("height", t + "px")
			}
		}, {
			key: "destroy", value: function() {
				this.$element.find("." + this.options.linkClass).off(".zf.tabs").hide().end().find("." + this.options.panelClass).hide(), this.options.matchHeight && null != this._setHeightMqHandler && e(window).off("changed.zf.mediaquery", this._setHeightMqHandler), Foundation.unregisterPlugin(this)
			}
		}]), t
	}();
	t.defaults = {autoFocus: !1, wrapOnKeys: !0, matchHeight: !1, linkClass: "tabs-title", panelClass: "tabs-panel"}, Foundation.plugin(t, "Tabs")
}(jQuery);
var _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
	return typeof e
} : function(e) {
	return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
};
!function(e, t) {
	"function" == typeof define && define.amd ? define(["jquery"], t) : "object" === ("undefined" == typeof exports ? "undefined" : _typeof(exports)) ? module.exports = t(require("jquery")) : e.MotionUI = t(e.jQuery)
}(this, function(e) {
	"use strict";

	function t (t, o, r, s) {
		function l () {
			t || o.hide(), u(), s && s.apply(o)
		}

		function u () {
			o[0].style.transitionDuration = 0, o.removeClass(c + " " + d + " " + r)
		}

		if(o = e(o).eq(0), o.length)
		{
			if(null === a) return t ? o.show() : o.hide(), void s();
			var c = t ? n[0] : n[1], d = t ? i[0] : i[1];
			u(), o.addClass(r), o.css("transition", "none"), requestAnimationFrame(function() {
				o.addClass(c), t && o.show()
			}), requestAnimationFrame(function() {
				o[0].offsetWidth, o.css("transition", ""), o.addClass(d)
			}), o.one("transitionend", l)
		}
	}

	!function() {
		Date.now || (Date.now = function() {
			return (new Date).getTime()
		});
		for(var e = ["webkit", "moz"], t = 0; t < e.length && !window.requestAnimationFrame; ++t)
		{
			var n = e[t];
			window.requestAnimationFrame = window[n + "RequestAnimationFrame"], window.cancelAnimationFrame = window[n + "CancelAnimationFrame"] || window[n + "CancelRequestAnimationFrame"]
		}
		if(/iP(ad|hone|od).*OS 6/.test(window.navigator.userAgent) || !window.requestAnimationFrame || !window.cancelAnimationFrame)
		{
			var i = 0;
			window.requestAnimationFrame = function(e) {
				var t = Date.now(), n = Math.max(i + 16, t);
				return setTimeout(function() {
					e(i = n)
				}, n - t)
			}, window.cancelAnimationFrame = clearTimeout
		}
	}();
	var n = ["mui-enter", "mui-leave"], i = ["mui-enter-active", "mui-leave-active"], a = function() {
		var e = {transition: "transitionend", WebkitTransition: "webkitTransitionEnd", MozTransition: "transitionend", OTransition: "otransitionend"},
			t = window.document.createElement("div");
		for(var n in e)
		{
			if("undefined" != typeof t.style[n]) return e[n];
		}
		return null
	}(), o = {
		animateIn: function(e, n, i) {
			t(!0, e, n, i)
		}, animateOut: function(e, n, i) {
			t(!1, e, n, i)
		}
	};
	return o
}), /*
 *   jQuery Cascading Dropdown Plugin 1.2.5
 *   https://github.com/dnasir/jquery-cascading-dropdown
 *
 *   Copyright 2013, Dzulqarnain Nasir
 *   http://dnasir.com
 *
 *   Licensed under the MIT license:
 *   http://www.opensource.org/licenses/MIT
 */
	function(e, t) {
		"use strict";

		function n (t, n) {
			this.el = e(t.selector, n.el), this.parent = n, this.options = e.extend({}, a, t), this.name = this.options.paramName || this.el.attr("name"), this.requiredDropdowns = t.requires && t.requires.length ? e(t.requires.join(","), n.el) : null, this.isLoadingClassName = this.options.isLoadingClassName || n.options.isLoadingClassName || "cascading-dropdown-loading"
		}

		function i (t, n) {
			this.el = e(t), this.options = e.extend({selectBoxes: []}, n), this._init()
		}

		var a = {usePost: !1, useJson: !1, selectBoxes: []};
		n.prototype = {
			_create: function() {
				var e = this;
				e.pending = 0, e.initialised = !1, e.originalDropdownItems = e.el.children("option"), "function" == typeof e.options.onChange && e.el.change(function(t) {
					var n = e._requirementsMet() && e.el[0].value;
					e.options.onChange.call(e, t, e.el.val(), e.getRequiredValues(), n)
				}), e.requiredDropdowns && e.requiredDropdowns.change(function() {
					e.update()
				}), e._initSource(), e.update()
			}, enable: function() {
				return this.el.removeAttr("disabled").triggerHandler("enabled")
			}, disable: function() {
				return this.el.attr("disabled", "disabled").triggerHandler("disabled")
			}, _requirementsMet: function() {
				var t = this;
				return t.requiredDropdowns ? t.options.requireAll ? t.requiredDropdowns.filter(function() {
					return !!e(this).val()
				}).length == t.options.requires.length : t.requiredDropdowns.filter(function() {
					return !!e(this).val()
				}).length > 0 : !0
			}, _initSource: function() {
				var n = this;
				if(e.isArray(n.options.source)) this.source = function(t, i) {
					i(e.map(n.options.source, function(e) {
						return {label: e.label || e.value || e, value: e.value || e.label || e, selected: e.selected}
					}))
				};
				else if("string" == typeof n.options.source)
				{
					var i = n.options.source;
					this.source = function(a, o) {
						n.xhr && n.xhr.abort(), n.xhr = e.ajax({
							url: i, data: n.options.useJson ? JSON.stringify(a) : a, dataType: n.options.useJson ? "json" : t, type: n.options.usePost ? "post" : "get", contentType: "application/json; charset=utf-8", success: function(e) {
								o(e)
							}, error: function() {
								o([])
							}
						})
					}
				}
				else this.source = n.options.source
			}, getRequiredValues: function() {
				var t = {};
				return this.requiredDropdowns && e.each(this.requiredDropdowns, function() {
					var n = e(this).data("plugin_cascadingDropdown");
					n.name && (t[n.name] = n.el.val())
				}), t
			}, update: function() {
				var e = this;
				if(e.disable(), !e._requirementsMet()) return e.setSelected(0), e._triggerReady(), e.el;
				if(!e.source) return e.enable(), e._triggerReady(), e.el;
				e.el.val("").change();
				var t = e.getRequiredValues();
				return e.pending++, e.el.addClass(e.isLoadingClassName), e.source(t, e._response()), e.el
			}, _response: function() {
				var e = this;
				return function(t) {
					e._renderItems(t), e.pending--, e.pending || e.el.removeClass(e.isLoadingClassName)
				}
			}, _renderItems: function(t) {
				var n = this;
				if(n.el.children("option").remove(), n.el.append(n.originalDropdownItems), !t || !t.length) return void n._triggerReady();
				var i;
				e.each(t, function(e, t) {
					var a = "";
					t.selected && (i = t), n.el.append('<option value="' + t.value + '"' + a + ">" + t.label + "</option>")
				}), n.enable(), i && n.setSelected(i.value.toString()), n._triggerReady()
			}, _triggerReady: function() {
				this.initialised || (this.options.selected && this.setSelected(this.options.selected), this.initialised = !0, this.el.triggerHandler("ready"))
			}, setSelected: function(e, n) {
				var i = this, a = i.el.find("option");
				return "undefined" == typeof n && (n = !0), "string" == typeof e && (e = a.index(a.filter(function() {
					return this.value === e
				})[0])), e === t || 0 > e || e > a.length ? void 0 : (i.el[0].selectedIndex = e, n && i.el.change(), i.el)
			}
		}, i.prototype = {
			_init: function() {
				function t (e) {
					++r == o.length && (o.unbind("ready", t), a.options.onReady.call(a, e, a.getValues()))
				}

				function i (e) {
					a.options.onChange.call(a, e, a.getValues())
				}

				var a = this;
				a.pending = 0, a.dropdowns = [];
				var o = e(e.map(a.options.selectBoxes, function(e) {
					return e.selector
				}).join(","), a.el), r = 0;
				"function" == typeof a.options.onReady && o.bind("ready", t), "function" == typeof a.options.onChange && o.bind("change", i), e.each(a.options.selectBoxes, function() {
					var t = new n(this, a);
					e(this.selector, a.el).data("plugin_cascadingDropdown", t), a.dropdowns.push(t), t._create()
				})
			}, getValues: function() {
				var t = {};
				return e.each(this.dropdowns, function(e, n) {
					n.name && (t[n.name] = n.el.val())
				}), t
			}
		}, e.fn.cascadingDropdown = function(t) {
			var n = e(this), a = arguments, o = n.data("plugin_cascadingDropdown");
			if("object" == typeof t || !t) return !o && n.data("plugin_cascadingDropdown", new i(this, t));
			if("string" == typeof t) if(o)
			{
				if(o[t]) return o[t].apply(o, Array.prototype.slice.call(a, 1))
			}
			else e.error("Cannot call method " + t + " before init.");
			else e.error("Method " + t + " does not exist in jQuery.cascadingDropdown")
		}
	}(jQuery), function(e) {
	var t;
	if("function" == typeof define && define.amd && (define(e), t = !0), "object" == typeof exports && (module.exports = e(), t = !0), !t)
	{
		var n = window.Cookies, i = window.Cookies = e();
		i.noConflict = function() {
			return window.Cookies = n, i
		}
	}
}(function() {
	function e () {
		for(var e = 0, t = {}; e < arguments.length; e++)
		{
			var n = arguments[e];
			for(var i in n)
			{
				t[i] = n[i]
			}
		}
		return t
	}

	function t (n) {
		function i (t, a, o) {
			if("undefined" != typeof document)
			{
				if(arguments.length > 1)
				{
					o = e({path: "/"}, i.defaults, o), "number" == typeof o.expires && (o.expires = new Date(1 * new Date + 864e5 * o.expires)), o.expires = o.expires ? o.expires.toUTCString() : "";
					try
					{
						var r = JSON.stringify(a);
						/^[\{\[]/.test(r) && (a = r)
					} catch (s)
					{
					}
					a = n.write ? n.write(a, t) : encodeURIComponent(String(a)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent), t = encodeURIComponent(String(t)).replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent).replace(/[\(\)]/g, escape);
					var l = "";
					for(var u in o)
					{
						o[u] && (l += "; " + u, o[u] !== !0 && (l += "=" + o[u].split(";")[0]));
					}
					return document.cookie = t + "=" + a + l
				}
				for(
					var c = {}, d = function(e) {
						return e.replace(/(%[0-9A-Z]{2})+/g, decodeURIComponent)
					}, f = document.cookie ? document.cookie.split("; ") : [], h = 0; h < f.length; h++)
				{
					var p = f[h].split("="), m = p.slice(1).join("=");
					this.json || '"' !== m.charAt(0) || (m = m.slice(1, -1));
					try
					{
						var v = d(p[0]);
						if(m = (n.read || n)(m, v) || d(m), this.json) try
						{
							m = JSON.parse(m)
						} catch (s)
						{
						}
						if(c[v] = m, t === v) break
					} catch (s)
					{
					}
				}
				return t ? c[t] : c
			}
		}

		return i.set = i, i.get = function(e) {
			return i.call(i, e)
		}, i.getJSON = function(e) {
			return i.call({json: !0}, e)
		}, i.remove = function(t, n) {
			i(t, "", e(n, {expires: -1}))
		}, i.defaults = {}, i.withConverter = t, i
	}

	return t(function() {
	})
}), CascadedSelects = function(e, t) {
	var n = e.find(t[0]), i = e.find(t[1]), a = n.find("select"), o = i.find("select");
	0 != a.length && 0 != o.length && a.change(function() {
		var e = a.find("option:selected").val(), t = 0, n = [];
		if(o.find("option").each(function() {
				var i = $(this);
				(i.attr("data-parentId") == e || 0 == i.val().length) && i.attr("data-parentId") == e && (t += 1, n.push({value: i.val(), text: i.text().trim(), name: i.text().trim()}))
			}), i.dropdown("setup menu", {values: n}), i.dropdown("clear"), 0 == t)
		{
			o.attr("disabled", !0);
			var r = o.parent();
			r.addClass("disabledField").addClass("disabled"), r.parent().addClass("disabledField")
		}
		else
		{
			o.attr("disabled", !1);
			var r = o.parent();
			r.removeClass("disabledField").removeClass("disabled"), r.parent().removeClass("disabledField")
		}
	})
}, !function(e, t) {
	"function" == typeof define && define.amd ? define([], function() {
		return e.svg4everybody = t()
	}) : "object" == typeof module && module.exports ? module.exports = t() : e.svg4everybody = t()
}(this, function() {/*! svg4everybody v2.1.4 | github.com/jonathantneal/svg4everybody */
	function e (e, t, n) {
		if(n)
		{
			var i = document.createDocumentFragment(), a = !t.hasAttribute("viewBox") && n.getAttribute("viewBox");
			a && t.setAttribute("viewBox", a);
			for(var o = n.cloneNode(!0); o.childNodes.length;)
			{
				i.appendChild(o.firstChild);
			}
			e.appendChild(i)
		}
	}

	function t (t) {
		t.onreadystatechange = function() {
			if(4 === t.readyState)
			{
				var n = t._cachedDocument;
				n || (n = t._cachedDocument = document.implementation.createHTMLDocument(""), n.body.innerHTML = t.responseText, t._cachedTarget = {}), t._embeds.splice(0).map(function(i) {
					var a = t._cachedTarget[i.id];
					a || (a = t._cachedTarget[i.id] = n.getElementById(i.id)), e(i.parent, i.svg, a)
				})
			}
		}, t.onreadystatechange()
	}

	function n (n) {
		function a () {
			for(var n = 0; n < f.length;)
			{
				var s = f[n], l = s.parentNode, u = i(l);
				if(u)
				{
					var h = s.getAttribute("xlink:href") || s.getAttribute("href");
					if(o && (!r.validate || r.validate(h, u, s)))
					{
						l.removeChild(s);
						var p = h.split("#"), m = p.shift(), v = p.join("#");
						if(m.length)
						{
							var g = c[m];
							g || (g = c[m] = new XMLHttpRequest, g.open("GET", m), g.send(), g._embeds = []), g._embeds.push({parent: l, svg: u, id: v}), t(g)
						}
						else e(l, document.getElementById(v))
					}
				}
				else ++n
			}
			d(a, 67)
		}

		var o, r = Object(n), s = /\bTrident\/[567]\b|\bMSIE (?:9|10)\.0\b/, l = /\bAppleWebKit\/(\d+)\b/,
			u = /\bEdge\/12\.(\d+)\b/;
		o = "polyfill" in r ? r.polyfill : s.test(navigator.userAgent) || (navigator.userAgent.match(u) || [])[1] < 10547 || (navigator.userAgent.match(l) || [])[1] < 537;
		var c = {}, d = window.requestAnimationFrame || setTimeout, f = document.getElementsByTagName("use");
		o && a()
	}

	function i (e) {
		for(var t = e; "svg" !== t.nodeName.toLowerCase() && (t = t.parentNode);)
		{
			;
		}
		return t
	}

	return n
});
var Eaglerider = function() {
	var e = {}, t = function(e, t) {
		namespacesArray = e.split(".");
		var n = window;
		$.each(namespacesArray, function(e, t) {
			"undefined" == typeof n[t] && (n[t] = {}), n = n[t]
		}), $.extend(n, t)
	};
	e.require = t;
	var n = function(e) {
		$(window).bind("pageshow", function(t) {
			t.originalEvent.persisted && e()
		})
	};
	e.onBack = n;
	var i = function(e) {
		n(e), $(document).ready(e)
	};
	e.onDomLoad = i;
	var a = function(e) {
		n(e), $(window).load(e)
	};
	return e.onWindowLoad = a, e
}(), ER = Eaglerider;
ER.require("ER.Base.Layout", function() {
	var e = {}, t = function(e) {
		if(e) var t = e.find('input[type="radio"], input[type="checkbox"]');
		else var t = $('input[type="radio"], input[type="checkbox"]').filter(".js-custom");
		t.each(function() {
			if($(this).hasClass("js-line"))
			{
				var e = $(this), t = e.next(), n = t.text();
				t.remove(), $(this).iCheck({checkboxClass: "icheckbox_line-blue", radioClass: "iradio_line-blue", insert: '<div class="icheck_line-icon"></div>' + n})
			}
			else $(this).iCheck({checkboxClass: "icheckbox_square-blue", radioClass: "iradio_square-blue", increaseArea: "20%"})
		})
	};
	e.initCheckboxes = t;
	var n = function(e) {
		$("html, body").animate({scrollTop: e.offset().top}, 500)
	};
	e.scrollTo = n;
	var i = function() {
		n($("body"))
	};
	e.scrollToTop = i;
	var a = function(e, t) {
		e = e.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		var n = "[\\?&]" + e + "=([^&#]*)", i = new RegExp(n), a = i.exec(t);
		return null == a ? "" : decodeURIComponent(a[1].replace(/\+/g, " "))
	};
	e.getParameterByName = a;
	var o = function(e) {
		var t = e;
		return ER.Layout.mobileView && (t += ".mobile"), t
	};
	e.jsUrl = o;
	var r = function() {
		$(".js-captchaContainer").each(function() {
			s(this)
		})
	};
	e.initCaptcha = r;
	var s = function(e) {
		e.html('<div class="g-recaptcha" data-sitekey="6Ld49xcUAAAAAPXCFI3bIP9fpxGoHjZ9dbVA1_RZ"></div>');
		var t = setInterval(function() {
			window.captchaLoaded && (grecaptcha.render(e.find(".g-recaptcha")[0], {sitekey: "6Ld49xcUAAAAAPXCFI3bIP9fpxGoHjZ9dbVA1_RZ"}), clearInterval(t))
		}, 1e3)
	};
	e.addCaptchaToContainer = s;
	var l = function() {
		$(".js-spinner").show()
	};
	e.showSpinner = l;
	var u = function() {
		$(".js-spinner").hide()
	};
	e.hideSpinner = u;
	var c = function() {
		var e = $(".js-authenticationForm");
		e.submit(function() {
			return $.ajax({
				url: e.attr("action"), type: e.attr("method"), dataType: "json", data: e.serialize(), success: function(e) {
					e.returnUrl ? window.location.href = e.returnUrl : window.location.reload()
				}, error: function(e) {
					var t = JSON.parse(e.responseText);
					ER.Notifications.showErrorMessage(t.message)
				}
			}), !1
		})
	};
	e.authenticateUser = c;
	var d = function() {
		var e = $(".js-cookiesNotification"), t = e.find(".js-closeTrigger");
		"1" != Cookies.get("ac") && (e.show(), t.click(function() {
			Cookies.set("ac", "1"), e.hide()
		}))
	};
	return e.initCookiesNotification = d, e
}()), ER.require("ER.Layout", $.extend(ER.Base.Layout, function() {
	var e = {};
	e.authenticityToken = null, e.routes = null, e.loggedIn = null, e.mobileView = !0, e.currentLanguageCode = "en", e.enableCaptcha = !1;
	var t = [], n = null, a = function() {
	};
	e.onWindowLoad = a;
	var o = function(e) {
		s(), l(), u(e), d(), f(), y(), h(), p(), ER.Layout.initCookiesNotification(), ER.Layout.authenticateUser()
	};
	e.onDomLoad = o;
	var r = function() {
		return e.enableCaptcha
	};
	e.captchaEnabled = r;
	var s = function() {
		$(document).foundation()
	}, l = function() {
		$(".off-canvas-wrapper").on("opened.zf.offcanvas", function() {
			$(".off-canvas-content").height($(window).height() - 57)
		}), $(".off-canvas-wrapper").on("closed.zf.offcanvas", function() {
			$(".off-canvas-content").height("auto")
		})
	}, u = function(i) {
		e.enableCaptcha = i.enableCaptcha, e.enableCaptcha && ER.Layout.initCaptcha(), ER.Layout.authenticityToken = e.authenticityToken = $("head meta[name=csrf-token]").attr("content"), e.mobileView = ER.Layout.mobileView = !0;
		var a = {};
		$(".js-routes").find("a").each(function() {
			var e = $(this);
			a[e.attr("class").replace("js-", "")] = e.attr("href")
		}), e.routes = ER.Layout.routes = a, i.current_language_code && (e.currentLanguageCode = ER.Layout.currentLanguageCode = i.current_language_code), n = i.widgetDateFormat, t = i.href_languages, e.loggedIn = ER.Layout.loggedIn = i.loggedIn
	}, c = function() {
		return n
	};
	e.widgetDateFormat = c;
	var d = function() {
		$(".js-changeCountryTrigger").click(function() {
			var n = $(this), i = n.parents(".js-countriesContainer"), a = i.find(".js-current");
			return i.removeClass("open"), a.html(n.find(".js-flag")), $.ajax({
				url: e.routes.changeCountryPath + ".js", type: "post", data: {authenticity_token: e.authenticityToken, country_id: n.attr("data-countryId")}, dataType: "json", success: function(e) {
					var i = $.grep(t, function(e) {
						return e.language_code == n.attr("data-languageCode")
					})[0];
					window.location.href = i ? i.language_route : e.location
				}, error: function(e) {
					var t = JSON.parse(e.responseText);
					alert(t.message)
				}
			}), !1
		})
	}, f = function() {
		$(".js-navigation").find(".js-currenciesSelect").change(function() {
			var t = $(this), n = t.find("option:selected");
			0 == n.val().length ? window.location.href = e.routes.currenciesPath : $.ajax({
				url: e.routes.changeCurrencyPath + ".js", type: "post", data: {authenticity_token: e.authenticityToken, currency_id: n.val()}, success: function() {
					window.location.reload()
				}, error: function(e) {
					var t = JSON.parse(e.responseText);
					alert(t.message)
				}
			})
		})
	}, h = function() {
		$(".js-fullSiteTrigger").click(function() {
			$.ajax({
				url: e.routes.changeLayoutUrl + ".js", type: "post", data: {authenticity_token: e.authenticityToken, version: "desktop"}, dataType: "json", success: function() {
					window.location.reload()
				}, error: function(e) {
					var t = JSON.parse(e.responseText);
					alert(t.message)
				}
			})
		})
	}, p = function() {
		$(".ui.dropdown").each(function() {
			var e = $(this);
			e.hasClass("js-skip") || e.dropdown()
		})
	}, m = function() {
		$(".js-spinner").removeClass("hide")
	};
	e.showSpinner = m;
	var v = function() {
		$(".js-spinner").addClass("hide")
	};
	e.hideSpinner = v;
	var g = function(e) {
		var t = $('<div class= "js-currencies-overlay">');
		t.html(e), t.foundation(), $(".js-currencies-overlay").foundation("open")
	}, y = function() {
		$(".js-currencies-overlay-trigger").click(function() {
			0 == $(".js-currencies-overlay").length ? $.ajax({
				url: e.routes.currenciesPath + ".js", type: "get", dataType: "html", data: {in_mobile_view: e.mobileView}, success: function(e) {
					g(e), b(), $.getScript("/assets/libs/list.js", function() {
						new List($(".js-filteredList")[0], {valueNames: ["js-symbol", "js-name"], listClass: "js-currencies", searchClass: "js-searchField"})
					})
				}, error: function(e) {
					var t = JSON.parse(e.responseText);
					alert(t.message)
				}
			}) : $(".js-currencies-overlay").foundation("open")
		})
	}, b = function(e) {
		e = e || $(document), e.find(".js-changeCurrencyTrigger").click(function() {
			var e = $(this), t = $(".js-currenciesContainer"), n = t.find(".js-current");
			n.html(e.html()), $.ajax({
				url: ER.Layout.routes.changeCurrencyPath + ".js", type: "post", data: {authenticity_token: "<%= form_authenticity_token %>", currency_id: e.attr("data-currencyId")}, success: function() {
					window.location.reload()
				}, error: function(e) {
					var t = JSON.parse(e.responseText);
					alert(t.message)
				}
			})
		})
	}, w = {
		onSuccess: function() {
			window.location.reload()
		}, onFailure: function(e) {
			alert(e.message)
		}
	}, x = function(e, t) {
		e && e(t)
	}, C = function() {
		callbacks = w
	}, k = function(e) {
		var t = $('<div class= "js-signup-in-overlay">');
		t.html(e), t.foundation(), $(".js-signup-in-overlay").foundation("open")
	}, T = function(e, t) {
		callbacks[e] = t
	}, S = function(t) {
		D(t.authenticity_token), $(".js-signup-in-overlay").foundation("close"), e.loggedIn = !0
	}, A = function(e) {
		S(e), x(callbacks.onLoginSuccess || callbacks.onSuccess, e)
	};
	e.onLoginSuccess = A;
	var E = function(e) {
		x(callbacks.onLoginFailure || callbacks.onFailure, e)
	};
	e.onLoginFailure = E;
	var F = function(e) {
		S(e), x(callbacks.onRegistrationSuccess || callbacks.onSuccess, e)
	};
	e.onRegistrationSuccess = F;
	var _ = function(e) {
		var t = $(".js-signup-form");
		0 != t.find($(".is-invalid-input")).length && z(t, $(".is-invalid-input")), j(t, e.validation_errors)
	};
	e.onRegistrationFailure = _;
	var O = function(t) {
		t = t || {}, C();
		for(i in t)
		{
			T(i, t[i]);
		}
		ER.Layout.isLoggedIn() ? x(callbacks.onLoginSuccess || callbacks.onSuccess) : 0 == $(".js-signup-in-overlay").length ? $.ajax({
			url: e.routes.authenticationPath + ".js", type: "get", dataType: "html", data: {in_mobile_view: e.mobileView}, success: function(e) {
				k(e)
			}, error: function(e) {
				var t = JSON.parse(e.responseText);
				alert(t.message)
			}
		}) : $(".js-signup-in-overlay").foundation("open")
	};
	e.authenticateAndPerform = O;
	var P = function() {
		return e.loggedIn
	};
	e.isLoggedIn = P;
	var D = function(t) {
		ER.Layout.authenticityToken = e.authenticityToken = t, $("input[name=authenticity_token]").val(e.authenticityToken)
	}, j = function(e, t) {
		for(var n in t)
		{
			var i = e.find("[data-field=" + n + "]");
			i.addClass("is-invalid-input");
			var a = i.parent();
			a.html(a.html() + '<span class="form-error is-visible">' + $.unique(t[n]).join(" & ") + "</span>").show()
		}
	};
	e.addErrorsOnForm = j;
	var z = function(e, t) {
		$(t).each(function() {
			var e = $(this);
			e.removeClass("is-invalid-input");
			var t = e.parent();
			t.find("span").remove()
		})
	};
	return e.hideErrorsOnForm = z, e
}())), ER.require("ER.Notifications", function() {
	var e = {}, t = null, n = function() {
		t = $(".js-notifications .js-notification"), i()
	};
	e.init = n;
	var i = function() {
		t.find(".js-closeTrigger").click(function() {
			$(this).parents(".js-notification").hide()
		})
	}, a = function(e) {
		l("success", e)
	};
	e.showSuccessMessage = a;
	var o = function(e) {
		l("alert", e)
	};
	e.showErrorMessage = o;
	var r = function(e) {
		l("warning", e)
	};
	e.showWarningMessage = r;
	var s = function(e) {
		l("info", e)
	};
	e.showInfoMessage = s;
	var l = function(e, t) {
		var n = $(".js-notifications .js-notification");
		n.hide(), n.filter(".js-" + e).find(".js-message").html(t).end().show()
	};
	return e
}()), ER.PopupSelect = function(e, t) {
	var n, i = e.find("select"), a = e.find(".js-label"), o = e.find(".js-input"), r = i.find("option, optgroup"),
		s = {}, l = function(e) {
			s.elementsContainer.html("");
			var n = null, a = [], l = function() {
				a.length > 0 && (n && s.elementsContainer.append(n), $(a).each(function() {
					var e = $(this);
					s.elementsContainer.append(e)
				}), a = [])
			};
			r.each(function() {
				var r, s = $(this);
				if(s.is("optgroup")) l(), r = $("<li></li"), r.addClass("group"), r.text(s.attr("label")), n = r;
				else
				{
					var u = !1, c = s.text().trim();
					if(e ? c.toLowerCase().startsWith(e.toLowerCase()) && (u = !0) : u = !0, !u) return;
					r = $("<li></li>"), r.append($("<a></a>").attr("href", "Javascript:;").text(c)), r.attr("data-id", s.val()), r.unbind("click").click(function() {
						{
							var e, n;
							i.find("option:selected")
						}
						i.find("option").each(function(t, i) {
							i.value == r.attr("data-id") && (e = $(i), n = t)
						}), i.prop("selectedIndex") != n && (o.val(e.text().trim()), Materialize.updateTextFields(), i.prop("selectedIndex", n), i.change()), MotionUI.animateOut($(".js-customSelectOverlay"), "slide-out-left", t)
					}), a.push(r)
				}
			}), l()
		}, u = function() {
			s.container = $(".js-customSelectOverlay"), s.elementsContainer = s.container.find(".js-selections"), s.input = s.container.find(".js-input")
		}, c = function() {
			i.css("display", "none"), n && a.html(n.text().trim());
			var r = i.find("option:selected");
			"" != r.val() && (o.val(r.text().trim()), Materialize.updateTextFields(), t && t()), e.click(function() {
				d()
			})
		}, d = function() {
			n && s.input.attr("placeholder", n.text().trim()), s.input.val(""), s.input.on("input", function() {
				l(s.input.val())
			}), s.input.focus(), l(), setTimeout(function() {
				s.input.focus()
			}), MotionUI.animateIn(s.container, "slide-in-left")
		}, f = function() {
			u(), c()
		};
	String.prototype.startsWith || (String.prototype.startsWith = function(e, t) {
		return t = t || 0, this.indexOf(e, t) === t
	}), f()
}, $(document).ready(function() {
	$(".js-captureLeadTrigger").click(function() {
		var e = $(this);
		return $.ajax({
			url: e.attr("href"), type: "get", dataType: "html", data: {"contact_info[referring_page]": location.href, mobile: !0}, success: function(e) {
				showContactUsOverlay(e)
			}, error: function(e) {
				var t = JSON.parse(e.responseText);
				alert(t.message)
			}
		}), !1
	})
}), $(document).on("click", ".close-button", function() {
	$(".js-contactus-overlay").remove()
});
var initOverlay = function(e) {
	var t = e.find(".js-g-recaptcha");
	t && ER.Layout.addCaptchaToContainer(t), e.find(".js-submitForm").submit(function(t) {
		t.preventDefault();
		var n = $(this), i = n.find(".js-privacyPolicyCheckbox");
		if(!i.is(":checked")) return alert("You must read & agree to Eaglerider Privacy Policy"), !1;
		var n = $(this), a = n.find('button[type="submit"]');
		a.data("clicked") || (a.data("clicked", !0), $.ajax({
			url: ER.Layout.jsUrl(n.attr("action")), type: n.attr("method"), data: n.serialize(!0), dataType: "json", success: function(e) {
				ga("send", "event", {
					eventCategory: "Lead", eventAction: "lead_capture", eventLabel: e.google_analytics_event_label, hitCallback: function() {
						$(".js-contactus-overlay").foundation("close"), ER.Notifications.showSuccessMessage(e.success_message), $("html, body").animate({scrollTop: 0}, 100)
					}
				})
			}, error: function(t) {
				if(406 == t.status) e.html(t.responseText), initOverlay(e);
				else if(403 == t.status)
				{
					var n = JSON.parse(t.responseText);
					alert(n.message)
				}
				else
				{
					var n = JSON.parse(t.responseText);
					alert(n.message)
				}
			}, complete: function() {
				a.data("clicked", !1)
			}
		}))
	})
}, showContactUsOverlay = function(e) {
	var t = $('<div id="js-contactus-overlay">');
	t.html(e), initOverlay(t), showOverlay(t), ER.Layout.mobileView && ($(".ui.dropdown").dropdown(), Materialize.updateTextFields())
}, showOverlay = function(e) {
	e.foundation(), $(".js-contactus-overlay").foundation("open")
};
ER.require("ER.Subscribe"), ER.Subscribe = function(e) {
	var t = {}, n = function() {
		t.container = e, t.form = t.container.find("form"), t.captchaContainer = t.form.find(".js-g-recaptcha"), t.subscriptionTrigger = t.form.find(".js-subscriptionTrigger"), t.privacyPolicyContainer = t.form.find(".js-privacyPolicyCheckbox")
	}, i = function() {
		ER.Layout.captchaEnabled() && t.captchaContainer.length > 0 && ER.Base.Layout.addCaptchaToContainer(t.captchaContainer), t.subscriptionTrigger.click(function(e) {
			var n = t.subscriptionTrigger, i = t.form, a = t.privacyPolicyContainer;
			return a.length > 0 && !a.is(":checked") ? (alert("You must read & agree to Eaglerider Privacy Policy"), e.preventDefault(), !1) : (n.data("clicked") || (n.data("clicked", !0), ER.Layout.showSpinner(), $.ajax({
				url: i.attr("action") + ".js", type: i.attr("method"), data: i.serialize(!0), dataType: "json", success: function(e) {
					ga("send", "event", {
						eventCategory: "Lead", eventAction: "lead_capture", eventLabel: "Newsletter Lead", hitCallback: function() {
							ER.Notifications.showSuccessMessage(e.success_message), $("html, body").animate({scrollTop: 0}, 100)
						}
					}), ER.Layout.hideSpinner()
				}, error: function(e) {
					var t = JSON.parse(e.responseText);
					ER.Notifications.showErrorMessage(t.message), $("html, body").animate({scrollTop: 0}, 100), ER.Layout.hideSpinner()
				}, complete: function() {
					n.data("clicked", !1)
				}
			})), !1)
		})
	}, a = function() {
		n(), i()
	};
	a()
}, ER.require("ER.DatesUtility", function() {
	var e = {}, t = function(e, t) {
		var n = e.split(/\D/);
		return t ? new Date(n[0], n[1] - 1, n[2], t[0], t[1], t[2]) : new Date(n[0], n[1] - 1, n[2])
	};
	return e.parseDateString = t, e
}()), function(e, t) {
	e.rails !== t && e.error("jquery-ujs has already been loaded!");
	var n;
	e.rails = n = {
		linkClickSelector: "a[data-confirm], a[data-method], a[data-remote], a[data-disable-with]", buttonClickSelector: "button[data-remote]", inputChangeSelector: "select[data-remote], input[data-remote], textarea[data-remote]", formSubmitSelector: "form", formInputClickSelector: "form input[type=submit], form input[type=image], form button[type=submit], form button:not([type])", disableSelector: "input[data-disable-with], button[data-disable-with], textarea[data-disable-with]", enableSelector: "input[data-disable-with]:disabled, button[data-disable-with]:disabled, textarea[data-disable-with]:disabled", requiredInputSelector: "input[name][required]:not([disabled]),textarea[name][required]:not([disabled])", fileInputSelector: "input[type=file]", linkDisableSelector: "a[data-disable-with]", CSRFProtection: function(t) {
			var n = e('meta[name="csrf-token"]').attr("content");
			n && t.setRequestHeader("X-CSRF-Token", n)
		}, fire: function(t, n, i) {
			var a = e.Event(n);
			return t.trigger(a, i), a.result !== !1
		}, confirm: function(e) {
			return confirm(e)
		}, ajax: function(t) {
			return e.ajax(t)
		}, href: function(e) {
			return e.attr("href")
		}, handleRemote: function(i) {
			var a, o, r, s, l, u, c, d;
			if(n.fire(i, "ajax:before"))
			{
				if(s = i.data("cross-domain"), l = s === t ? null : s, u = i.data("with-credentials") || null, c = i.data("type") || e.ajaxSettings && e.ajaxSettings.dataType, i.is("form"))
				{
					a = i.attr("method"), o = i.attr("action"), r = i.serializeArray();
					var f = i.data("ujs:submit-button");
					f && (r.push(f), i.data("ujs:submit-button", null))
				}
				else i.is(n.inputChangeSelector) ? (a = i.data("method"), o = i.data("url"), r = i.serialize(), i.data("params") && (r = r + "&" + i.data("params"))) : i.is(n.buttonClickSelector) ? (a = i.data("method") || "get", o = i.data("url"), r = i.serialize(), i.data("params") && (r = r + "&" + i.data("params"))) : (a = i.data("method"), o = n.href(i), r = i.data("params") || null);
				d = {
					type: a || "GET", data: r, dataType: c, beforeSend: function(e, a) {
						return a.dataType === t && e.setRequestHeader("accept", "*/*;q=0.5, " + a.accepts.script), n.fire(i, "ajax:beforeSend", [e, a])
					}, success: function(e, t, n) {
						i.trigger("ajax:success", [e, t, n])
					}, complete: function(e, t) {
						i.trigger("ajax:complete", [e, t])
					}, error: function(e, t, n) {
						i.trigger("ajax:error", [e, t, n])
					}, crossDomain: l
				}, u && (d.xhrFields = {withCredentials: u}), o && (d.url = o);
				var h = n.ajax(d);
				return i.trigger("ajax:send", h), h
			}
			return !1
		}, handleMethod: function(i) {
			var a = n.href(i), o = i.data("method"), r = i.attr("target"),
				s = e("meta[name=csrf-token]").attr("content"), l = e("meta[name=csrf-param]").attr("content"),
				u = e('<form method="post" action="' + a + '"></form>'),
				c = '<input name="_method" value="' + o + '" type="hidden" />';
			l !== t && s !== t && (c += '<input name="' + l + '" value="' + s + '" type="hidden" />'), r && u.attr("target", r), u.hide().append(c).appendTo("body"), u.submit()
		}, disableFormElements: function(t) {
			t.find(n.disableSelector).each(function() {
				var t = e(this), n = t.is("button") ? "html" : "val";
				t.data("ujs:enable-with", t[n]()), t[n](t.data("disable-with")), t.prop("disabled", !0)
			})
		}, enableFormElements: function(t) {
			t.find(n.enableSelector).each(function() {
				var t = e(this), n = t.is("button") ? "html" : "val";
				t.data("ujs:enable-with") && t[n](t.data("ujs:enable-with")), t.prop("disabled", !1)
			})
		}, allowAction: function(e) {
			var t, i = e.data("confirm"), a = !1;
			return i ? (n.fire(e, "confirm") && (a = n.confirm(i), t = n.fire(e, "confirm:complete", [a])), a && t) : !0
		}, blankInputs: function(t, n, i) {
			var a, o, r = e(), s = n || "input,textarea", l = t.find(s);
			return l.each(function() {
				if(a = e(this), o = a.is("input[type=checkbox],input[type=radio]") ? a.is(":checked") : a.val(), !o == !i)
				{
					if(a.is("input[type=radio]") && l.filter('input[type=radio]:checked[name="' + a.attr("name") + '"]').length) return !0;
					r = r.add(a)
				}
			}), r.length ? r : !1
		}, nonBlankInputs: function(e, t) {
			return n.blankInputs(e, t, !0)
		}, stopEverything: function(t) {
			return e(t.target).trigger("ujs:everythingStopped"), t.stopImmediatePropagation(), !1
		}, disableElement: function(e) {
			e.data("ujs:enable-with", e.html()), e.html(e.data("disable-with")), e.bind("click.railsDisable", function(e) {
				return n.stopEverything(e)
			})
		}, enableElement: function(e) {
			e.data("ujs:enable-with") !== t && (e.html(e.data("ujs:enable-with")), e.removeData("ujs:enable-with")), e.unbind("click.railsDisable")
		}
	}, n.fire(e(document), "rails:attachBindings") && (e.ajaxPrefilter(function(e, t, i) {
		e.crossDomain || n.CSRFProtection(i)
	}), e(document).delegate(n.linkDisableSelector, "ajax:complete", function() {
		n.enableElement(e(this))
	}), e(document).delegate(n.linkClickSelector, "click.rails", function(i) {
		var a = e(this), o = a.data("method"), r = a.data("params");
		if(!n.allowAction(a)) return n.stopEverything(i);
		if(a.is(n.linkDisableSelector) && n.disableElement(a), a.data("remote") !== t)
		{
			if(!(!i.metaKey && !i.ctrlKey || o && "GET" !== o || r)) return !0;
			var s = n.handleRemote(a);
			return s === !1 ? n.enableElement(a) : s.error(function() {
				n.enableElement(a)
			}), !1
		}
		return a.data("method") ? (n.handleMethod(a), !1) : void 0
	}), e(document).delegate(n.buttonClickSelector, "click.rails", function(t) {
		var i = e(this);
		return n.allowAction(i) ? (n.handleRemote(i), !1) : n.stopEverything(t)
	}), e(document).delegate(n.inputChangeSelector, "change.rails", function(t) {
		var i = e(this);
		return n.allowAction(i) ? (n.handleRemote(i), !1) : n.stopEverything(t)
	}), e(document).delegate(n.formSubmitSelector, "submit.rails", function(i) {
		var a = e(this), o = a.data("remote") !== t, r = n.blankInputs(a, n.requiredInputSelector),
			s = n.nonBlankInputs(a, n.fileInputSelector);
		if(!n.allowAction(a)) return n.stopEverything(i);
		if(r && a.attr("novalidate") == t && n.fire(a, "ajax:aborted:required", [r])) return n.stopEverything(i);
		if(o)
		{
			if(s)
			{
				setTimeout(function() {
					n.disableFormElements(a)
				}, 13);
				var l = n.fire(a, "ajax:aborted:file", [s]);
				return l || setTimeout(function() {
					n.enableFormElements(a)
				}, 13), l
			}
			return n.handleRemote(a), !1
		}
		setTimeout(function() {
			n.disableFormElements(a)
		}, 13)
	}), e(document).delegate(n.formInputClickSelector, "click.rails", function(t) {
		var i = e(this);
		if(!n.allowAction(i)) return n.stopEverything(t);
		var a = i.attr("name"), o = a ? {name: a, value: i.val()} : null;
		i.closest("form").data("ujs:submit-button", o)
	}), e(document).delegate(n.formSubmitSelector, "ajax:beforeSend.rails", function(t) {
		this == t.target && n.disableFormElements(e(this))
	}), e(document).delegate(n.formSubmitSelector, "ajax:complete.rails", function(t) {
		this == t.target && n.enableFormElements(e(this))
	}), e(function() {
		var t = e("meta[name=csrf-token]").attr("content"), n = e("meta[name=csrf-param]").attr("content");
		e('form input[name="' + n + '"]').val(t)
	}))
}(jQuery);