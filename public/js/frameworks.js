! function(e) {
    function t() {
        var e = void 0,
            n = void 0,
            r = void 0;
        if (1 === arguments.length) {
            var o = [t.moduleID, [], arguments[0]];
            e = o[0], n = o[1], r = o[2]
        } else if (2 === arguments.length) {
            var a = [t.moduleID, arguments[0], arguments[1]];
            e = a[0], n = a[1], r = a[2]
        } else if (3 === arguments.length) {
            var s = [arguments[0], arguments[1], arguments[2]];
            e = s[0], n = s[1], r = s[2]
        }
        if ("object" == typeof r) {
            var u = r;
            r = function() {
                return u
            }
        }
        if ("string" != typeof e) throw new TypeError("name was not a string");
        if ("object" != typeof n) throw new TypeError("deps was not an array");
        if ("function" != typeof r) throw new TypeError("definition was not a function");
        c[e] && console.warn("Module redefined", e), c[e] = {
            deps: n,
            callback: r
        }, l[e] && i(e)
    }

    function n(e, t) {
        if (!t && e) return e;
        if (e.match("!")) throw new Error("can't resolve name with loader: " + e);
        if ("." !== e.charAt(0)) return e;
        for (var n = e.split("/"), r = t.split("/").slice(0, -1), o = 0, i = n.length; i > o; o++) {
            var a = n[o];
            if (".." === a) r.pop();
            else {
                if ("." === a) continue;
                r.push(a)
            }
        }
        return r.join("/")
    }

    function r() {
        var e = void 0,
            t = void 0,
            n = new Promise(function(n, r) {
                e = n, t = r
            });
        return {
            promise: n,
            resolve: e,
            reject: t
        }
    }

    function o(e, t) {
        return Promise.resolve().then(function() {
            var o = e,
                a = n(o, t);
            return l[a] || (l[a] = r(), setTimeout(function() {
                var e = l[a].reject;
                e(new Error("timeout loading module: " + a))
            }, 5e3)), c[a] && i(a), l[a].promise
        })
    }

    function i(e) {
        if (!l[e].initialized) {
            l[e].initialized = !0;
            for (var t = l[e], n = t.resolve, r = t.reject, i = c[e], a = i.deps, s = i.callback, u = [], f = void 0, d = 0, h = a.length; h > d; d++) "exports" === a[d] ? u.push(f = {}) : u.push(o(a[d], e));
            Promise.all(u).then(function(e) {
                var t = s.apply(this, e);
                return f || t
            }).then(n, r)
        }
    }

    function a() {}

    function s(e) {
        t.amd = !0, t.moduleID = e
    }

    function u() {
        c[t.moduleID] || (c[t.moduleID] = {
            deps: [],
            callback: a
        }), delete t.amd, delete t.moduleID
    }
    if (!e.define) {
        var c = {},
            l = {};
        e.define = t, e.define.register = s, e.define.registerEnd = u, e.ghImport = o
    }
}(this), define.register("string.prototype.codepointat"), String.prototype.codePointAt || ! function() {
        "use strict";
        var e = function() {
                try {
                    var e = {},
                        t = Object.defineProperty,
                        n = t(e, e, e) && t
                } catch (r) {}
                return n
            }(),
            t = function(e) {
                if (null == this) throw TypeError();
                var t = String(this),
                    n = t.length,
                    r = e ? Number(e) : 0;
                if (r != r && (r = 0), 0 > r || r >= n) return void 0;
                var o, i = t.charCodeAt(r);
                return i >= 55296 && 56319 >= i && n > r + 1 && (o = t.charCodeAt(r + 1), o >= 56320 && 57343 >= o) ? 1024 * (i - 55296) + o - 56320 + 65536 : i
            };
        e ? e(String.prototype, "codePointAt", {
            value: t,
            configurable: !0,
            writable: !0
        }) : String.prototype.codePointAt = t
    }(), define.registerEnd(), define.register("string.prototype.endswith"), String.prototype.endsWith || ! function() {
        "use strict";
        var e = function() {
                try {
                    var e = {},
                        t = Object.defineProperty,
                        n = t(e, e, e) && t
                } catch (r) {}
                return n
            }(),
            t = {}.toString,
            n = function(e) {
                if (null == this) throw TypeError();
                var n = String(this);
                if (e && "[object RegExp]" == t.call(e)) throw TypeError();
                var r = n.length,
                    o = String(e),
                    i = o.length,
                    a = r;
                if (arguments.length > 1) {
                    var s = arguments[1];
                    void 0 !== s && (a = s ? Number(s) : 0, a != a && (a = 0))
                }
                var u = Math.min(Math.max(a, 0), r),
                    c = u - i;
                if (0 > c) return !1;
                for (var l = -1; ++l < i;)
                    if (n.charCodeAt(c + l) != o.charCodeAt(l)) return !1;
                return !0
            };
        e ? e(String.prototype, "endsWith", {
            value: n,
            configurable: !0,
            writable: !0
        }) : String.prototype.endsWith = n
    }(), define.registerEnd(), define.register("string.prototype.startswith"), String.prototype.startsWith || ! function() {
        "use strict";
        var e = function() {
                try {
                    var e = {},
                        t = Object.defineProperty,
                        n = t(e, e, e) && t
                } catch (r) {}
                return n
            }(),
            t = {}.toString,
            n = function(e) {
                if (null == this) throw TypeError();
                var n = String(this);
                if (e && "[object RegExp]" == t.call(e)) throw TypeError();
                var r = n.length,
                    o = String(e),
                    i = o.length,
                    a = arguments.length > 1 ? arguments[1] : void 0,
                    s = a ? Number(a) : 0;
                s != s && (s = 0);
                var u = Math.min(Math.max(s, 0), r);
                if (i + u > r) return !1;
                for (var c = -1; ++c < i;)
                    if (n.charCodeAt(u + c) != o.charCodeAt(c)) return !1;
                return !0
            };
        e ? e(String.prototype, "startsWith", {
            value: n,
            configurable: !0,
            writable: !0
        }) : String.prototype.startsWith = n
    }(), define.registerEnd(), define.register("array.from"), Array.from || ! function() {
        "use strict";
        var e = function() {
                try {
                    var e = {},
                        t = Object.defineProperty,
                        n = t(e, e, e) && t
                } catch (r) {}
                return n || function(e, t, n) {
                    e[t] = n.value
                }
            }(),
            t = Object.prototype.toString,
            n = function(e) {
                return "function" == typeof e || "[object Function]" == t.call(e)
            },
            r = function(e) {
                var t = Number(e);
                return isNaN(t) ? 0 : 0 != t && isFinite(t) ? (t > 0 ? 1 : -1) * Math.floor(Math.abs(t)) : t
            },
            o = Math.pow(2, 53) - 1,
            i = function(e) {
                var t = r(e);
                return Math.min(Math.max(t, 0), o)
            },
            a = function(t) {
                var r = this;
                if (null == t) throw new TypeError("`Array.from` requires an array-like object, not `null` or `undefined`");
                var o, a, s = Object(t);
                arguments.length > 1;
                if (arguments.length > 1) {
                    if (o = arguments[1], !n(o)) throw new TypeError("When provided, the second argument to `Array.from` must be a function");
                    arguments.length > 2 && (a = arguments[2])
                }
                for (var u, c, l = i(s.length), f = n(r) ? Object(new r(l)) : new Array(l), d = 0; l > d;) u = s[d], c = o ? "undefined" == typeof a ? o(u, d) : o.call(a, u, d) : u, e(f, d, {
                    value: c,
                    configurable: !0,
                    enumerable: !0
                }), ++d;
                return f.length = l, f
            };
        e(Array, "from", {
            value: a,
            configurable: !0,
            writable: !0
        })
    }(), define.registerEnd(), define.register("es6-symbol"),
    function e(t, n, r) {
        function o(a, s) {
            if (!n[a]) {
                if (!t[a]) {
                    var u = "function" == typeof require && require;
                    if (!s && u) return u(a, !0);
                    if (i) return i(a, !0);
                    var c = new Error("Cannot find module '" + a + "'");
                    throw c.code = "MODULE_NOT_FOUND", c
                }
                var l = n[a] = {
                    exports: {}
                };
                t[a][0].call(l.exports, function(e) {
                    var n = t[a][1][e];
                    return o(n ? n : e)
                }, l, l.exports, e, t, n, r)
            }
            return n[a].exports
        }
        for (var i = "function" == typeof require && require, a = 0; a < r.length; a++) o(r[a]);
        return o
    }({
        1: [function(e, t, n) {
            "use strict";
            e("./is-implemented")() || Object.defineProperty(window, "Symbol", {
                value: e("./polyfill"),
                configurable: !0,
                enumerable: !1,
                writable: !0
            })
        }, {
            "./is-implemented": 2,
            "./polyfill": 17
        }],
        2: [function(e, t, n) {
            "use strict";
            var r = {
                object: !0,
                symbol: !0
            };
            t.exports = function() {
                var e;
                if ("function" != typeof Symbol) return !1;
                e = Symbol("test symbol");
                try {
                    String(e)
                } catch (t) {
                    return !1
                }
                return r[typeof Symbol.iterator] && r[typeof Symbol.toPrimitive] && r[typeof Symbol.toStringTag] ? !0 : !1
            }
        }, {}],
        3: [function(e, t, n) {
            "use strict";
            t.exports = function(e) {
                return e ? "symbol" == typeof e ? !0 : e.constructor ? "Symbol" !== e.constructor.name ? !1 : "Symbol" === e[e.constructor.toStringTag] : !1 : !1
            }
        }, {}],
        4: [function(e, t, n) {
            "use strict";
            var r, o = e("es5-ext/object/assign"),
                i = e("es5-ext/object/normalize-options"),
                a = e("es5-ext/object/is-callable"),
                s = e("es5-ext/string/#/contains");
            r = t.exports = function(e, t) {
                var n, r, a, u, c;
                return arguments.length < 2 || "string" != typeof e ? (u = t, t = e, e = null) : u = arguments[2], null == e ? (n = a = !0, r = !1) : (n = s.call(e, "c"), r = s.call(e, "e"), a = s.call(e, "w")), c = {
                    value: t,
                    configurable: n,
                    enumerable: r,
                    writable: a
                }, u ? o(i(u), c) : c
            }, r.gs = function(e, t, n) {
                var r, u, c, l;
                return "string" != typeof e ? (c = n, n = t, t = e, e = null) : c = arguments[3], null == t ? t = void 0 : a(t) ? null == n ? n = void 0 : a(n) || (c = n, n = void 0) : (c = t, t = n = void 0), null == e ? (r = !0, u = !1) : (r = s.call(e, "c"), u = s.call(e, "e")), l = {
                    get: t,
                    set: n,
                    configurable: r,
                    enumerable: u
                }, c ? o(i(c), l) : l
            }
        }, {
            "es5-ext/object/assign": 5,
            "es5-ext/object/is-callable": 8,
            "es5-ext/object/normalize-options": 12,
            "es5-ext/string/#/contains": 14
        }],
        5: [function(e, t, n) {
            "use strict";
            t.exports = e("./is-implemented")() ? Object.assign : e("./shim")
        }, {
            "./is-implemented": 6,
            "./shim": 7
        }],
        6: [function(e, t, n) {
            "use strict";
            t.exports = function() {
                var e, t = Object.assign;
                return "function" != typeof t ? !1 : (e = {
                    foo: "raz"
                }, t(e, {
                    bar: "dwa"
                }, {
                    trzy: "trzy"
                }), e.foo + e.bar + e.trzy === "razdwatrzy")
            }
        }, {}],
        7: [function(e, t, n) {
            "use strict";
            var r = e("../keys"),
                o = e("../valid-value"),
                i = Math.max;
            t.exports = function(e, t) {
                var n, a, s, u = i(arguments.length, 2);
                for (e = Object(o(e)), s = function(r) {
                        try {
                            e[r] = t[r]
                        } catch (o) {
                            n || (n = o)
                        }
                    }, a = 1; u > a; ++a) t = arguments[a], r(t).forEach(s);
                if (void 0 !== n) throw n;
                return e
            }
        }, {
            "../keys": 9,
            "../valid-value": 13
        }],
        8: [function(e, t, n) {
            "use strict";
            t.exports = function(e) {
                return "function" == typeof e
            }
        }, {}],
        9: [function(e, t, n) {
            "use strict";
            t.exports = e("./is-implemented")() ? Object.keys : e("./shim")
        }, {
            "./is-implemented": 10,
            "./shim": 11
        }],
        10: [function(e, t, n) {
            "use strict";
            t.exports = function() {
                try {
                    return Object.keys("primitive"), !0
                } catch (e) {
                    return !1
                }
            }
        }, {}],
        11: [function(e, t, n) {
            "use strict";
            var r = Object.keys;
            t.exports = function(e) {
                return r(null == e ? e : Object(e))
            }
        }, {}],
        12: [function(e, t, n) {
            "use strict";
            var r = Array.prototype.forEach,
                o = Object.create,
                i = function(e, t) {
                    var n;
                    for (n in e) t[n] = e[n]
                };
            t.exports = function(e) {
                var t = o(null);
                return r.call(arguments, function(e) {
                    null != e && i(Object(e), t)
                }), t
            }
        }, {}],
        13: [function(e, t, n) {
            "use strict";
            t.exports = function(e) {
                if (null == e) throw new TypeError("Cannot use null or undefined");
                return e
            }
        }, {}],
        14: [function(e, t, n) {
            "use strict";
            t.exports = e("./is-implemented")() ? String.prototype.contains : e("./shim")
        }, {
            "./is-implemented": 15,
            "./shim": 16
        }],
        15: [function(e, t, n) {
            "use strict";
            var r = "razdwatrzy";
            t.exports = function() {
                return "function" != typeof r.contains ? !1 : r.contains("dwa") === !0 && r.contains("foo") === !1
            }
        }, {}],
        16: [function(e, t, n) {
            "use strict";
            var r = String.prototype.indexOf;
            t.exports = function(e) {
                return r.call(this, e, arguments[1]) > -1
            }
        }, {}],
        17: [function(e, t, n) {
            "use strict";
            var r, o, i, a, s = e("d"),
                u = e("./validate-symbol"),
                c = Object.create,
                l = Object.defineProperties,
                f = Object.defineProperty,
                d = Object.prototype,
                h = c(null);
            if ("function" == typeof Symbol) {
                r = Symbol;
                try {
                    String(r()), a = !0
                } catch (p) {}
            }
            var m = function() {
                var e = c(null);
                return function(t) {
                    for (var n, r, o = 0; e[t + (o || "")];) ++o;
                    return t += o || "", e[t] = !0, n = "@@" + t, f(d, n, s.gs(null, function(e) {
                        r || (r = !0, f(this, n, s(e)), r = !1)
                    })), n
                }
            }();
            i = function(e) {
                if (this instanceof i) throw new TypeError("Symbol is not a constructor");
                return o(e)
            }, t.exports = o = function v(e) {
                var t;
                if (this instanceof v) throw new TypeError("Symbol is not a constructor");
                return a ? r(e) : (t = c(i.prototype), e = void 0 === e ? "" : String(e), l(t, {
                    __description__: s("", e),
                    __name__: s("", m(e))
                }))
            }, l(o, {
                "for": s(function(e) {
                    return h[e] ? h[e] : h[e] = o(String(e))
                }),
                keyFor: s(function(e) {
                    var t;
                    u(e);
                    for (t in h)
                        if (h[t] === e) return t
                }),
                hasInstance: s("", r && r.hasInstance || o("hasInstance")),
                isConcatSpreadable: s("", r && r.isConcatSpreadable || o("isConcatSpreadable")),
                iterator: s("", r && r.iterator || o("iterator")),
                match: s("", r && r.match || o("match")),
                replace: s("", r && r.replace || o("replace")),
                search: s("", r && r.search || o("search")),
                species: s("", r && r.species || o("species")),
                split: s("", r && r.split || o("split")),
                toPrimitive: s("", r && r.toPrimitive || o("toPrimitive")),
                toStringTag: s("", r && r.toStringTag || o("toStringTag")),
                unscopables: s("", r && r.unscopables || o("unscopables"))
            }), l(i.prototype, {
                constructor: s(o),
                toString: s("", function() {
                    return this.__name__
                })
            }), l(o.prototype, {
                toString: s(function() {
                    return "Symbol (" + u(this).__description__ + ")"
                }),
                valueOf: s(function() {
                    return u(this)
                })
            }), f(o.prototype, o.toPrimitive, s("", function() {
                var e = u(this);
                return "symbol" == typeof e ? e : e.toString()
            })), f(o.prototype, o.toStringTag, s("c", "Symbol")), f(i.prototype, o.toStringTag, s("c", o.prototype[o.toStringTag])), f(i.prototype, o.toPrimitive, s("c", o.prototype[o.toPrimitive]))
        }, {
            "./validate-symbol": 18,
            d: 4
        }],
        18: [function(e, t, n) {
            "use strict";
            var r = e("./is-symbol");
            t.exports = function(e) {
                if (!r(e)) throw new TypeError(e + " is not a symbol");
                return e
            }
        }, {
            "./is-symbol": 3
        }]
    }, {}, [1]), define.registerEnd(), define("github/es6-symbol-iterators", [], function() {
        function e() {
            var e = this,
                t = 0;
            return {
                next: function() {
                    return {
                        done: t === e.length,
                        value: e[t++]
                    }
                }
            }
        }
        Array.prototype[Symbol.iterator] || (Array.prototype[Symbol.iterator] = e), NodeList.prototype[Symbol.iterator] || Object.defineProperty(NodeList.prototype, Symbol.iterator, {
            enumerable: !1,
            configurable: !0,
            get: function() {
                return e
            }
        }), HTMLCollection.prototype[Symbol.iterator] || Object.defineProperty(HTMLCollection.prototype, Symbol.iterator, {
            enumerable: !1,
            configurable: !0,
            get: function() {
                return e
            }
        }), window.Headers && !Headers.prototype[Symbol.iterator] && (Headers.prototype[Symbol.iterator] = function() {
            var e = [];
            return this.forEach(function(t, n) {
                e.push([n, t])
            }), e[Symbol.iterator]()
        })
    }), define.register("es6-object-assign/dist/object-assign-auto"),
    function t(e, n, r) {
        function o(a, s) {
            if (!n[a]) {
                if (!e[a]) {
                    var u = "function" == typeof require && require;
                    if (!s && u) return u(a, !0);
                    if (i) return i(a, !0);
                    var c = new Error("Cannot find module '" + a + "'");
                    throw c.code = "MODULE_NOT_FOUND", c
                }
                var l = n[a] = {
                    exports: {}
                };
                e[a][0].call(l.exports, function(t) {
                    var n = e[a][1][t];
                    return o(n ? n : t)
                }, l, l.exports, t, e, n, r)
            }
            return n[a].exports
        }
        for (var i = "function" == typeof require && require, a = 0; a < r.length; a++) o(r[a]);
        return o
    }({
        1: [function(e, t, n) {
            "use strict";
            e("./index").polyfill()
        }, {
            "./index": 2
        }],
        2: [function(e, t, n) {
            "use strict";

            function r(e, t) {
                if (void 0 === e || null === e) throw new TypeError("Cannot convert first argument to object");
                for (var n = Object(e), r = 1; r < arguments.length; r++) {
                    var o = arguments[r];
                    if (void 0 !== o && null !== o)
                        for (var i = Object.keys(Object(o)), a = 0, s = i.length; s > a; a++) {
                            var u = i[a],
                                c = Object.getOwnPropertyDescriptor(o, u);
                            void 0 !== c && c.enumerable && (n[u] = o[u])
                        }
                }
                return n
            }

            function o() {
                Object.assign || Object.defineProperty(Object, "assign", {
                    enumerable: !1,
                    configurable: !0,
                    writable: !0,
                    value: r
                })
            }
            t.exports = {
                assign: r,
                polyfill: o
            }
        }, {}]
    }, {}, [1]), define.registerEnd(), define.register("whatwg-fetch"),
    function(e) {
        "use strict";

        function t(e) {
            if ("string" != typeof e && (e = String(e)), /[^a-z0-9\-#$%&'*+.\^_`|~]/i.test(e)) throw new TypeError("Invalid character in header field name");
            return e.toLowerCase()
        }

        function n(e) {
            return "string" != typeof e && (e = String(e)), e
        }

        function r(e) {
            var t = {
                next: function() {
                    var t = e.shift();
                    return {
                        done: void 0 === t,
                        value: t
                    }
                }
            };
            return g.iterable && (t[Symbol.iterator] = function() {
                return t
            }), t
        }

        function o(e) {
            this.map = {}, e instanceof o ? e.forEach(function(e, t) {
                this.append(t, e)
            }, this) : e && Object.getOwnPropertyNames(e).forEach(function(t) {
                this.append(t, e[t])
            }, this)
        }

        function i(e) {
            return e.bodyUsed ? Promise.reject(new TypeError("Already read")) : void(e.bodyUsed = !0)
        }

        function a(e) {
            return new Promise(function(t, n) {
                e.onload = function() {
                    t(e.result)
                }, e.onerror = function() {
                    n(e.error)
                }
            })
        }

        function s(e) {
            var t = new FileReader,
                n = a(t);
            return t.readAsArrayBuffer(e), n
        }

        function u(e) {
            var t = new FileReader,
                n = a(t);
            return t.readAsText(e), n
        }

        function c(e) {
            for (var t = new Uint8Array(e), n = new Array(t.length), r = 0; r < t.length; r++) n[r] = String.fromCharCode(t[r]);
            return n.join("")
        }

        function l(e) {
            if (e.slice) return e.slice(0);
            var t = new Uint8Array(e.byteLength);
            return t.set(new Uint8Array(e)), t.buffer
        }

        function f() {
            return this.bodyUsed = !1, this._initBody = function(e) {
                if (this._bodyInit = e, e)
                    if ("string" == typeof e) this._bodyText = e;
                    else if (g.blob && Blob.prototype.isPrototypeOf(e)) this._bodyBlob = e;
                else if (g.formData && FormData.prototype.isPrototypeOf(e)) this._bodyFormData = e;
                else if (g.searchParams && URLSearchParams.prototype.isPrototypeOf(e)) this._bodyText = e.toString();
                else if (g.arrayBuffer && g.blob && b(e)) this._bodyArrayBuffer = l(e.buffer), this._bodyInit = new Blob([this._bodyArrayBuffer]);
                else {
                    if (!g.arrayBuffer || !ArrayBuffer.prototype.isPrototypeOf(e) && !w(e)) throw new Error("unsupported BodyInit type");
                    this._bodyArrayBuffer = l(e)
                } else this._bodyText = "";
                this.headers.get("content-type") || ("string" == typeof e ? this.headers.set("content-type", "text/plain;charset=UTF-8") : this._bodyBlob && this._bodyBlob.type ? this.headers.set("content-type", this._bodyBlob.type) : g.searchParams && URLSearchParams.prototype.isPrototypeOf(e) && this.headers.set("content-type", "application/x-www-form-urlencoded;charset=UTF-8"))
            }, g.blob && (this.blob = function() {
                var e = i(this);
                if (e) return e;
                if (this._bodyBlob) return Promise.resolve(this._bodyBlob);
                if (this._bodyArrayBuffer) return Promise.resolve(new Blob([this._bodyArrayBuffer]));
                if (this._bodyFormData) throw new Error("could not read FormData body as blob");
                return Promise.resolve(new Blob([this._bodyText]))
            }, this.arrayBuffer = function() {
                return this._bodyArrayBuffer ? i(this) || Promise.resolve(this._bodyArrayBuffer) : this.blob().then(s)
            }), this.text = function() {
                var e = i(this);
                if (e) return e;
                if (this._bodyBlob) return u(this._bodyBlob);
                if (this._bodyArrayBuffer) return Promise.resolve(c(this._bodyArrayBuffer));
                if (this._bodyFormData) throw new Error("could not read FormData body as text");
                return Promise.resolve(this._bodyText)
            }, g.formData && (this.formData = function() {
                return this.text().then(p)
            }), this.json = function() {
                return this.text().then(JSON.parse)
            }, this
        }

        function d(e) {
            var t = e.toUpperCase();
            return x.indexOf(t) > -1 ? t : e
        }

        function h(e, t) {
            t = t || {};
            var n = t.body;
            if (e instanceof h) {
                if (e.bodyUsed) throw new TypeError("Already read");
                this.url = e.url, this.credentials = e.credentials, t.headers || (this.headers = new o(e.headers)), this.method = e.method, this.mode = e.mode, n || null == e._bodyInit || (n = e._bodyInit, e.bodyUsed = !0)
            } else this.url = String(e);
            if (this.credentials = t.credentials || this.credentials || "omit", (t.headers || !this.headers) && (this.headers = new o(t.headers)), this.method = d(t.method || this.method || "GET"), this.mode = t.mode || this.mode || null, this.referrer = null, ("GET" === this.method || "HEAD" === this.method) && n) throw new TypeError("Body not allowed for GET or HEAD requests");
            this._initBody(n)
        }

        function p(e) {
            var t = new FormData;
            return e.trim().split("&").forEach(function(e) {
                if (e) {
                    var n = e.split("="),
                        r = n.shift().replace(/\+/g, " "),
                        o = n.join("=").replace(/\+/g, " ");
                    t.append(decodeURIComponent(r), decodeURIComponent(o))
                }
            }), t
        }

        function m(e) {
            var t = new o;
            return e.split(/\r?\n/).forEach(function(e) {
                var n = e.split(":"),
                    r = n.shift().trim();
                if (r) {
                    var o = n.join(":").trim();
                    t.append(r, o)
                }
            }), t
        }

        function v(e, t) {
            t || (t = {}), this.type = "default", this.status = "status" in t ? t.status : 200, this.ok = this.status >= 200 && this.status < 300, this.statusText = "statusText" in t ? t.statusText : "OK", this.headers = new o(t.headers), this.url = t.url || "", this._initBody(e)
        }
        if (!e.fetch) {
            var g = {
                searchParams: "URLSearchParams" in e,
                iterable: "Symbol" in e && "iterator" in Symbol,
                blob: "FileReader" in e && "Blob" in e && function() {
                    try {
                        return new Blob, !0
                    } catch (e) {
                        return !1
                    }
                }(),
                formData: "FormData" in e,
                arrayBuffer: "ArrayBuffer" in e
            };
            if (g.arrayBuffer) var y = ["[object Int8Array]", "[object Uint8Array]", "[object Uint8ClampedArray]", "[object Int16Array]", "[object Uint16Array]", "[object Int32Array]", "[object Uint32Array]", "[object Float32Array]", "[object Float64Array]"],
                b = function(e) {
                    return e && DataView.prototype.isPrototypeOf(e)
                },
                w = ArrayBuffer.isView || function(e) {
                    return e && y.indexOf(Object.prototype.toString.call(e)) > -1
                };
            o.prototype.append = function(e, r) {
                e = t(e), r = n(r);
                var o = this.map[e];
                this.map[e] = o ? o + "," + r : r
            }, o.prototype["delete"] = function(e) {
                delete this.map[t(e)]
            }, o.prototype.get = function(e) {
                return e = t(e), this.has(e) ? this.map[e] : null
            }, o.prototype.has = function(e) {
                return this.map.hasOwnProperty(t(e))
            }, o.prototype.set = function(e, r) {
                this.map[t(e)] = n(r)
            }, o.prototype.forEach = function(e, t) {
                for (var n in this.map) this.map.hasOwnProperty(n) && e.call(t, this.map[n], n, this)
            }, o.prototype.keys = function() {
                var e = [];
                return this.forEach(function(t, n) {
                    e.push(n)
                }), r(e)
            }, o.prototype.values = function() {
                var e = [];
                return this.forEach(function(t) {
                    e.push(t)
                }), r(e)
            }, o.prototype.entries = function() {
                var e = [];
                return this.forEach(function(t, n) {
                    e.push([n, t])
                }), r(e)
            }, g.iterable && (o.prototype[Symbol.iterator] = o.prototype.entries);
            var x = ["DELETE", "GET", "HEAD", "OPTIONS", "POST", "PUT"];
            h.prototype.clone = function() {
                return new h(this, {
                    body: this._bodyInit
                })
            }, f.call(h.prototype), f.call(v.prototype), v.prototype.clone = function() {
                return new v(this._bodyInit, {
                    status: this.status,
                    statusText: this.statusText,
                    headers: new o(this.headers),
                    url: this.url
                })
            }, v.error = function() {
                var e = new v(null, {
                    status: 0,
                    statusText: ""
                });
                return e.type = "error", e
            };
            var E = [301, 302, 303, 307, 308];
            v.redirect = function(e, t) {
                if (-1 === E.indexOf(t)) throw new RangeError("Invalid status code");
                return new v(null, {
                    status: t,
                    headers: {
                        location: e
                    }
                })
            }, e.Headers = o, e.Request = h, e.Response = v, e.fetch = function(e, t) {
                return new Promise(function(n, r) {
                    var o = new h(e, t),
                        i = new XMLHttpRequest;
                    i.onload = function() {
                        var e = {
                            status: i.status,
                            statusText: i.statusText,
                            headers: m(i.getAllResponseHeaders() || "")
                        };
                        e.url = "responseURL" in i ? i.responseURL : e.headers.get("X-Request-URL");
                        var t = "response" in i ? i.response : i.responseText;
                        n(new v(t, e))
                    }, i.onerror = function() {
                        r(new TypeError("Network request failed"))
                    }, i.ontimeout = function() {
                        r(new TypeError("Network request failed"))
                    }, i.open(o.method, o.url, !0), "include" === o.credentials && (i.withCredentials = !0), "responseType" in i && g.blob && (i.responseType = "blob"), o.headers.forEach(function(e, t) {
                        i.setRequestHeader(t, e)
                    }), i.send("undefined" == typeof o._bodyInit ? null : o._bodyInit)
                })
            }, e.fetch.polyfill = !0
        }
    }("undefined" != typeof self ? self : this), define.registerEnd(), define.register("webcomponents.js/CustomElements"), "undefined" == typeof WeakMap && ! function() {
        var e = Object.defineProperty,
            t = Date.now() % 1e9,
            n = function() {
                this.name = "__st" + (1e9 * Math.random() >>> 0) + (t++ + "__")
            };
        n.prototype = {
            set: function(t, n) {
                var r = t[this.name];
                return r && r[0] === t ? r[1] = n : e(t, this.name, {
                    value: [t, n],
                    writable: !0
                }), this
            },
            get: function(e) {
                var t;
                return (t = e[this.name]) && t[0] === e ? t[1] : void 0
            },
            "delete": function(e) {
                var t = e[this.name];
                return t && t[0] === e ? (t[0] = t[1] = void 0, !0) : !1
            },
            has: function(e) {
                var t = e[this.name];
                return t ? t[0] === e : !1
            }
        }, window.WeakMap = n
    }(),
    function(e) {
        function t(e) {
            w.push(e), b || (b = !0, m(r))
        }

        function n(e) {
            return window.ShadowDOMPolyfill && window.ShadowDOMPolyfill.wrapIfNeeded(e) || e
        }

        function r() {
            b = !1;
            var e = w;
            w = [], e.sort(function(e, t) {
                return e.uid_ - t.uid_
            });
            var t = !1;
            e.forEach(function(e) {
                var n = e.takeRecords();
                o(e), n.length && (e.callback_(n, e), t = !0)
            }), t && r()
        }

        function o(e) {
            e.nodes_.forEach(function(t) {
                var n = v.get(t);
                n && n.forEach(function(t) {
                    t.observer === e && t.removeTransientObservers()
                })
            })
        }

        function i(e, t) {
            for (var n = e; n; n = n.parentNode) {
                var r = v.get(n);
                if (r)
                    for (var o = 0; o < r.length; o++) {
                        var i = r[o],
                            a = i.options;
                        if (n === e || a.subtree) {
                            var s = t(a);
                            s && i.enqueue(s)
                        }
                    }
            }
        }

        function a(e) {
            this.callback_ = e, this.nodes_ = [], this.records_ = [], this.uid_ = ++x
        }

        function s(e, t) {
            this.type = e, this.target = t, this.addedNodes = [], this.removedNodes = [], this.previousSibling = null, this.nextSibling = null, this.attributeName = null, this.attributeNamespace = null, this.oldValue = null
        }

        function u(e) {
            var t = new s(e.type, e.target);
            return t.addedNodes = e.addedNodes.slice(), t.removedNodes = e.removedNodes.slice(), t.previousSibling = e.previousSibling, t.nextSibling = e.nextSibling, t.attributeName = e.attributeName, t.attributeNamespace = e.attributeNamespace, t.oldValue = e.oldValue, t
        }

        function c(e, t) {
            return E = new s(e, t)
        }

        function l(e) {
            return _ ? _ : (_ = u(E), _.oldValue = e, _)
        }

        function f() {
            E = _ = void 0
        }

        function d(e) {
            return e === _ || e === E
        }

        function h(e, t) {
            return e === t ? e : _ && d(e) ? _ : null
        }

        function p(e, t, n) {
            this.observer = e, this.target = t, this.options = n, this.transientObservedNodes = []
        }
        if (!e.JsMutationObserver) {
            var m, v = new WeakMap;
            if (/Trident|Edge/.test(navigator.userAgent)) m = setTimeout;
            else if (window.setImmediate) m = window.setImmediate;
            else {
                var g = [],
                    y = String(Math.random());
                window.addEventListener("message", function(e) {
                    if (e.data === y) {
                        var t = g;
                        g = [], t.forEach(function(e) {
                            e()
                        })
                    }
                }), m = function(e) {
                    g.push(e), window.postMessage(y, "*")
                }
            }
            var b = !1,
                w = [],
                x = 0;
            a.prototype = {
                observe: function(e, t) {
                    if (e = n(e), !t.childList && !t.attributes && !t.characterData || t.attributeOldValue && !t.attributes || t.attributeFilter && t.attributeFilter.length && !t.attributes || t.characterDataOldValue && !t.characterData) throw new SyntaxError;
                    var r = v.get(e);
                    r || v.set(e, r = []);
                    for (var o, i = 0; i < r.length; i++)
                        if (r[i].observer === this) {
                            o = r[i], o.removeListeners(), o.options = t;
                            break
                        }
                    o || (o = new p(this, e, t), r.push(o), this.nodes_.push(e)), o.addListeners()
                },
                disconnect: function() {
                    this.nodes_.forEach(function(e) {
                        for (var t = v.get(e), n = 0; n < t.length; n++) {
                            var r = t[n];
                            if (r.observer === this) {
                                r.removeListeners(), t.splice(n, 1);
                                break
                            }
                        }
                    }, this), this.records_ = []
                },
                takeRecords: function() {
                    var e = this.records_;
                    return this.records_ = [], e
                }
            };
            var E, _;
            p.prototype = {
                enqueue: function(e) {
                    var n = this.observer.records_,
                        r = n.length;
                    if (n.length > 0) {
                        var o = n[r - 1],
                            i = h(o, e);
                        if (i) return void(n[r - 1] = i)
                    } else t(this.observer);
                    n[r] = e
                },
                addListeners: function() {
                    this.addListeners_(this.target)
                },
                addListeners_: function(e) {
                    var t = this.options;
                    t.attributes && e.addEventListener("DOMAttrModified", this, !0), t.characterData && e.addEventListener("DOMCharacterDataModified", this, !0), t.childList && e.addEventListener("DOMNodeInserted", this, !0), (t.childList || t.subtree) && e.addEventListener("DOMNodeRemoved", this, !0)
                },
                removeListeners: function() {
                    this.removeListeners_(this.target)
                },
                removeListeners_: function(e) {
                    var t = this.options;
                    t.attributes && e.removeEventListener("DOMAttrModified", this, !0), t.characterData && e.removeEventListener("DOMCharacterDataModified", this, !0), t.childList && e.removeEventListener("DOMNodeInserted", this, !0), (t.childList || t.subtree) && e.removeEventListener("DOMNodeRemoved", this, !0)
                },
                addTransientObserver: function(e) {
                    if (e !== this.target) {
                        this.addListeners_(e), this.transientObservedNodes.push(e);
                        var t = v.get(e);
                        t || v.set(e, t = []), t.push(this)
                    }
                },
                removeTransientObservers: function() {
                    var e = this.transientObservedNodes;
                    this.transientObservedNodes = [], e.forEach(function(e) {
                        this.removeListeners_(e);
                        for (var t = v.get(e), n = 0; n < t.length; n++)
                            if (t[n] === this) {
                                t.splice(n, 1);
                                break
                            }
                    }, this)
                },
                handleEvent: function(e) {
                    switch (e.stopImmediatePropagation(), e.type) {
                        case "DOMAttrModified":
                            var t = e.attrName,
                                n = e.relatedNode.namespaceURI,
                                r = e.target,
                                o = new c("attributes", r);
                            o.attributeName = t, o.attributeNamespace = n;
                            var a = e.attrChange === MutationEvent.ADDITION ? null : e.prevValue;
                            i(r, function(e) {
                                return !e.attributes || e.attributeFilter && e.attributeFilter.length && -1 === e.attributeFilter.indexOf(t) && -1 === e.attributeFilter.indexOf(n) ? void 0 : e.attributeOldValue ? l(a) : o
                            });
                            break;
                        case "DOMCharacterDataModified":
                            var r = e.target,
                                o = c("characterData", r),
                                a = e.prevValue;
                            i(r, function(e) {
                                return e.characterData ? e.characterDataOldValue ? l(a) : o : void 0
                            });
                            break;
                        case "DOMNodeRemoved":
                            this.addTransientObserver(e.target);
                        case "DOMNodeInserted":
                            var s, u, d = e.target;
                            "DOMNodeInserted" === e.type ? (s = [d], u = []) : (s = [], u = [d]);
                            var h = d.previousSibling,
                                p = d.nextSibling,
                                o = c("childList", e.target.parentNode);
                            o.addedNodes = s, o.removedNodes = u, o.previousSibling = h, o.nextSibling = p, i(e.relatedNode, function(e) {
                                return e.childList ? o : void 0
                            })
                    }
                    f()
                }
            }, e.JsMutationObserver = a, e.MutationObserver || (e.MutationObserver = a, a._isPolyfilled = !0)
        }
    }(self),
    function(e) {
        "use strict";
        if (!window.performance || !window.performance.now) {
            var t = Date.now();
            window.performance = {
                now: function() {
                    return Date.now() - t
                }
            }
        }
        window.requestAnimationFrame || (window.requestAnimationFrame = function() {
            var e = window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame;
            return e ? function(t) {
                return e(function() {
                    t(performance.now())
                })
            } : function(e) {
                return window.setTimeout(e, 1e3 / 60)
            }
        }()), window.cancelAnimationFrame || (window.cancelAnimationFrame = function() {
            return window.webkitCancelAnimationFrame || window.mozCancelAnimationFrame || function(e) {
                clearTimeout(e)
            }
        }());
        var n = function() {
            var e = document.createEvent("Event");
            return e.initEvent("foo", !0, !0), e.preventDefault(), e.defaultPrevented
        }();
        if (!n) {
            var r = Event.prototype.preventDefault;
            Event.prototype.preventDefault = function() {
                this.cancelable && (r.call(this), Object.defineProperty(this, "defaultPrevented", {
                    get: function() {
                        return !0
                    },
                    configurable: !0
                }))
            }
        }
        var o = /Trident/.test(navigator.userAgent);
        if ((!window.CustomEvent || o && "function" != typeof window.CustomEvent) && (window.CustomEvent = function(e, t) {
                t = t || {};
                var n = document.createEvent("CustomEvent");
                return n.initCustomEvent(e, Boolean(t.bubbles), Boolean(t.cancelable), t.detail), n
            }, window.CustomEvent.prototype = window.Event.prototype), !window.Event || o && "function" != typeof window.Event) {
            var i = window.Event;
            window.Event = function(e, t) {
                t = t || {};
                var n = document.createEvent("Event");
                return n.initEvent(e, Boolean(t.bubbles), Boolean(t.cancelable)), n
            }, window.Event.prototype = i.prototype
        }
    }(window.WebComponents), window.CustomElements = window.CustomElements || {
        flags: {}
    },
    function(e) {
        var t = e.flags,
            n = [],
            r = function(e) {
                n.push(e)
            },
            o = function() {
                n.forEach(function(t) {
                    t(e)
                })
            };
        e.addModule = r, e.initializeModules = o, e.hasNative = Boolean(document.registerElement), e.isIE = /Trident/.test(navigator.userAgent), e.useNative = !t.register && e.hasNative && !window.ShadowDOMPolyfill && (!window.HTMLImports || window.HTMLImports.useNative)
    }(window.CustomElements), window.CustomElements.addModule(function(e) {
        function t(e, t) {
            n(e, function(e) {
                return t(e) ? !0 : void r(e, t)
            }), r(e, t)
        }

        function n(e, t, r) {
            var o = e.firstElementChild;
            if (!o)
                for (o = e.firstChild; o && o.nodeType !== Node.ELEMENT_NODE;) o = o.nextSibling;
            for (; o;) t(o, r) !== !0 && n(o, t, r), o = o.nextElementSibling;
            return null
        }

        function r(e, n) {
            for (var r = e.shadowRoot; r;) t(r, n), r = r.olderShadowRoot
        }

        function o(e, t) {
            i(e, t, [])
        }

        function i(e, t, n) {
            if (e = window.wrap(e), !(n.indexOf(e) >= 0)) {
                n.push(e);
                for (var r, o = e.querySelectorAll("link[rel=" + a + "]"), s = 0, u = o.length; u > s && (r = o[s]); s++) r["import"] && i(r["import"], t, n);
                t(e)
            }
        }
        var a = window.HTMLImports ? window.HTMLImports.IMPORT_LINK_TYPE : "none";
        e.forDocumentTree = o, e.forSubtree = t
    }), window.CustomElements.addModule(function(e) {
        function t(e, t) {
            return n(e, t) || r(e, t)
        }

        function n(t, n) {
            return e.upgrade(t, n) ? !0 : void(n && a(t))
        }

        function r(e, t) {
            b(e, function(e) {
                return n(e, t) ? !0 : void 0
            })
        }

        function o(e) {
            _.push(e), E || (E = !0, setTimeout(i))
        }

        function i() {
            E = !1;
            for (var e, t = _, n = 0, r = t.length; r > n && (e = t[n]); n++) e();
            _ = []
        }

        function a(e) {
            x ? o(function() {
                s(e)
            }) : s(e)
        }

        function s(e) {
            e.__upgraded__ && !e.__attached && (e.__attached = !0, e.attachedCallback && e.attachedCallback())
        }

        function u(e) {
            c(e), b(e, function(e) {
                c(e)
            })
        }

        function c(e) {
            x ? o(function() {
                l(e)
            }) : l(e)
        }

        function l(e) {
            e.__upgraded__ && e.__attached && (e.__attached = !1, e.detachedCallback && e.detachedCallback())
        }

        function f(e) {
            for (var t = e, n = window.wrap(document); t;) {
                if (t == n) return !0;
                t = t.parentNode || t.nodeType === Node.DOCUMENT_FRAGMENT_NODE && t.host
            }
        }

        function d(e) {
            if (e.shadowRoot && !e.shadowRoot.__watched) {
                y.dom && console.log("watching shadow-root for: ", e.localName);
                for (var t = e.shadowRoot; t;) m(t), t = t.olderShadowRoot
            }
        }

        function h(e, n) {
            if (y.dom) {
                var r = n[0];
                if (r && "childList" === r.type && r.addedNodes && r.addedNodes) {
                    for (var o = r.addedNodes[0]; o && o !== document && !o.host;) o = o.parentNode;
                    var i = o && (o.URL || o._URL || o.host && o.host.localName) || "";
                    i = i.split("/?").shift().split("/").pop()
                }
                console.group("mutations (%d) [%s]", n.length, i || "")
            }
            var a = f(e);
            n.forEach(function(e) {
                "childList" === e.type && (T(e.addedNodes, function(e) {
                    e.localName && t(e, a)
                }), T(e.removedNodes, function(e) {
                    e.localName && u(e)
                }))
            }), y.dom && console.groupEnd()
        }

        function p(e) {
            for (e = window.wrap(e), e || (e = window.wrap(document)); e.parentNode;) e = e.parentNode;
            var t = e.__observer;
            t && (h(e, t.takeRecords()), i())
        }

        function m(e) {
            if (!e.__observer) {
                var t = new MutationObserver(h.bind(this, e));
                t.observe(e, {
                    childList: !0,
                    subtree: !0
                }), e.__observer = t
            }
        }

        function v(e) {
            e = window.wrap(e), y.dom && console.group("upgradeDocument: ", e.baseURI.split("/").pop());
            var n = e === window.wrap(document);
            t(e, n), m(e), y.dom && console.groupEnd()
        }

        function g(e) {
            w(e, v)
        }
        var y = e.flags,
            b = e.forSubtree,
            w = e.forDocumentTree,
            x = window.MutationObserver._isPolyfilled && y["throttle-attached"];
        e.hasPolyfillMutations = x, e.hasThrottledAttached = x;
        var E = !1,
            _ = [],
            T = Array.prototype.forEach.call.bind(Array.prototype.forEach),
            j = Element.prototype.createShadowRoot;
        j && (Element.prototype.createShadowRoot = function() {
            var e = j.call(this);
            return window.CustomElements.watchShadow(this), e
        }), e.watchShadow = d, e.upgradeDocumentTree = g, e.upgradeDocument = v, e.upgradeSubtree = r, e.upgradeAll = t, e.attached = a, e.takeRecords = p
    }), window.CustomElements.addModule(function(e) {
        function t(t, r) {
            if ("template" === t.localName && window.HTMLTemplateElement && HTMLTemplateElement.decorate && HTMLTemplateElement.decorate(t), !t.__upgraded__ && t.nodeType === Node.ELEMENT_NODE) {
                var o = t.getAttribute("is"),
                    i = e.getRegisteredDefinition(t.localName) || e.getRegisteredDefinition(o);
                if (i && (o && i.tag == t.localName || !o && !i["extends"])) return n(t, i, r)
            }
        }

        function n(t, n, o) {
            return a.upgrade && console.group("upgrade:", t.localName), n.is && t.setAttribute("is", n.is), r(t, n), t.__upgraded__ = !0, i(t), o && e.attached(t), e.upgradeSubtree(t, o), a.upgrade && console.groupEnd(), t
        }

        function r(e, t) {
            Object.__proto__ ? e.__proto__ = t.prototype : (o(e, t.prototype, t["native"]), e.__proto__ = t.prototype)
        }

        function o(e, t, n) {
            for (var r = {}, o = t; o !== n && o !== HTMLElement.prototype;) {
                for (var i, a = Object.getOwnPropertyNames(o), s = 0; i = a[s]; s++) r[i] || (Object.defineProperty(e, i, Object.getOwnPropertyDescriptor(o, i)), r[i] = 1);
                o = Object.getPrototypeOf(o)
            }
        }

        function i(e) {
            e.createdCallback && e.createdCallback()
        }
        var a = e.flags;
        e.upgrade = t, e.upgradeWithDefinition = n, e.implementPrototype = r
    }), window.CustomElements.addModule(function(e) {
        function t(t, r) {
            var u = r || {};
            if (!t) throw new Error("document.registerElement: first argument `name` must not be empty");
            if (t.indexOf("-") < 0) throw new Error("document.registerElement: first argument ('name') must contain a dash ('-'). Argument provided was '" + String(t) + "'.");
            if (o(t)) throw new Error("Failed to execute 'registerElement' on 'Document': Registration failed for type '" + String(t) + "'. The type name is invalid.");
            if (c(t)) throw new Error("DuplicateDefinitionError: a type with name '" + String(t) + "' is already registered");
            return u.prototype || (u.prototype = Object.create(HTMLElement.prototype)), u.__name = t.toLowerCase(), u["extends"] && (u["extends"] = u["extends"].toLowerCase()), u.lifecycle = u.lifecycle || {}, u.ancestry = i(u["extends"]), a(u), s(u), n(u.prototype), l(u.__name, u), u.ctor = f(u), u.ctor.prototype = u.prototype, u.prototype.constructor = u.ctor, e.ready && v(document), u.ctor
        }

        function n(e) {
            if (!e.setAttribute._polyfilled) {
                var t = e.setAttribute;
                e.setAttribute = function(e, n) {
                    r.call(this, e, n, t)
                };
                var n = e.removeAttribute;
                e.removeAttribute = function(e) {
                    r.call(this, e, null, n)
                }, e.setAttribute._polyfilled = !0
            }
        }

        function r(e, t, n) {
            e = e.toLowerCase();
            var r = this.getAttribute(e);
            n.apply(this, arguments);
            var o = this.getAttribute(e);
            this.attributeChangedCallback && o !== r && this.attributeChangedCallback(e, r, o)
        }

        function o(e) {
            for (var t = 0; t < x.length; t++)
                if (e === x[t]) return !0
        }

        function i(e) {
            var t = c(e);
            return t ? i(t["extends"]).concat([t]) : []
        }

        function a(e) {
            for (var t, n = e["extends"], r = 0; t = e.ancestry[r]; r++) n = t.is && t.tag;
            e.tag = n || e.__name, n && (e.is = e.__name)
        }

        function s(e) {
            if (!Object.__proto__) {
                var t = HTMLElement.prototype;
                if (e.is) {
                    var n = document.createElement(e.tag);
                    t = Object.getPrototypeOf(n)
                }
                for (var r, o = e.prototype, i = !1; o;) o == t && (i = !0), r = Object.getPrototypeOf(o), r && (o.__proto__ = r), o = r;
                i || console.warn(e.tag + " prototype not found in prototype chain for " + e.is), e["native"] = t
            }
        }

        function u(e) {
            return y(T(e.tag), e)
        }

        function c(e) {
            return e ? E[e.toLowerCase()] : void 0
        }

        function l(e, t) {
            E[e] = t
        }

        function f(e) {
            return function() {
                return u(e)
            }
        }

        function d(e, t, n) {
            return e === _ ? h(t, n) : j(e, t)
        }

        function h(e, t) {
            e && (e = e.toLowerCase()), t && (t = t.toLowerCase());
            var n = c(t || e);
            if (n) {
                if (e == n.tag && t == n.is) return new n.ctor;
                if (!t && !n.is) return new n.ctor
            }
            var r;
            return t ? (r = h(e), r.setAttribute("is", t), r) : (r = T(e), e.indexOf("-") >= 0 && b(r, HTMLElement), r)
        }

        function p(e, t) {
            var n = e[t];
            e[t] = function() {
                var e = n.apply(this, arguments);
                return g(e), e
            }
        }
        var m, v = (e.isIE, e.upgradeDocumentTree),
            g = e.upgradeAll,
            y = e.upgradeWithDefinition,
            b = e.implementPrototype,
            w = e.useNative,
            x = ["annotation-xml", "color-profile", "font-face", "font-face-src", "font-face-uri", "font-face-format", "font-face-name", "missing-glyph"],
            E = {},
            _ = "http://www.w3.org/1999/xhtml",
            T = document.createElement.bind(document),
            j = document.createElementNS.bind(document);
        m = Object.__proto__ || w ? function(e, t) {
            return e instanceof t
        } : function(e, t) {
            if (e instanceof t) return !0;
            for (var n = e; n;) {
                if (n === t.prototype) return !0;
                n = n.__proto__
            }
            return !1
        }, p(Node.prototype, "cloneNode"), p(document, "importNode"), document.registerElement = t, document.createElement = h, document.createElementNS = d, e.registry = E, e["instanceof"] = m, e.reservedTagList = x, e.getRegisteredDefinition = c, document.register = document.registerElement
    }),
    function(e) {
        function t() {
            i(window.wrap(document)), window.CustomElements.ready = !0;
            var e = window.requestAnimationFrame || function(e) {
                setTimeout(e, 16)
            };
            e(function() {
                setTimeout(function() {
                    window.CustomElements.readyTime = Date.now(), window.HTMLImports && (window.CustomElements.elapsed = window.CustomElements.readyTime - window.HTMLImports.readyTime), document.dispatchEvent(new CustomEvent("WebComponentsReady", {
                        bubbles: !0
                    }))
                })
            })
        }
        var n = e.useNative,
            r = e.initializeModules;
        e.isIE;
        if (n) {
            var o = function() {};
            e.watchShadow = o, e.upgrade = o, e.upgradeAll = o, e.upgradeDocumentTree = o, e.upgradeSubtree = o, e.takeRecords = o, e["instanceof"] = function(e, t) {
                return e instanceof t
            }
        } else r();
        var i = e.upgradeDocumentTree,
            a = e.upgradeDocument;
        if (window.wrap || (window.ShadowDOMPolyfill ? (window.wrap = window.ShadowDOMPolyfill.wrapIfNeeded, window.unwrap = window.ShadowDOMPolyfill.unwrapIfNeeded) : window.wrap = window.unwrap = function(e) {
                return e
            }), window.HTMLImports && (window.HTMLImports.__importsParsingHook = function(e) {
                e["import"] && a(wrap(e["import"]))
            }), "complete" === document.readyState || e.flags.eager) t();
        else if ("interactive" !== document.readyState || window.attachEvent || window.HTMLImports && !window.HTMLImports.ready) {
            var s = window.HTMLImports && !window.HTMLImports.ready ? "HTMLImportsLoaded" : "DOMContentLoaded";
            window.addEventListener(s, t)
        } else t()
    }(window.CustomElements), define.registerEnd(), define.register("url-polyfill"),
    function(e) {
        "use strict";

        function t(e) {
            return void 0 !== d[e]
        }

        function n() {
            s.call(this), this._isInvalid = !0
        }

        function r(e) {
            return "" == e && n.call(this), e.toLowerCase()
        }

        function o(e) {
            var t = e.charCodeAt(0);
            return t > 32 && 127 > t && -1 == [34, 35, 60, 62, 63, 96].indexOf(t) ? e : encodeURIComponent(e)
        }

        function i(e) {
            var t = e.charCodeAt(0);
            return t > 32 && 127 > t && -1 == [34, 35, 60, 62, 96].indexOf(t) ? e : encodeURIComponent(e)
        }

        function a(e, a, s) {
            function u(e) {
                b.push(e)
            }
            var c = a || "scheme start",
                l = 0,
                f = "",
                g = !1,
                y = !1,
                b = [];
            e: for (;
                (e[l - 1] != p || 0 == l) && !this._isInvalid;) {
                var w = e[l];
                switch (c) {
                    case "scheme start":
                        if (!w || !m.test(w)) {
                            if (a) {
                                u("Invalid scheme.");
                                break e
                            }
                            f = "", c = "no scheme";
                            continue
                        }
                        f += w.toLowerCase(), c = "scheme";
                        break;
                    case "scheme":
                        if (w && v.test(w)) f += w.toLowerCase();
                        else {
                            if (":" != w) {
                                if (a) {
                                    if (p == w) break e;
                                    u("Code point not allowed in scheme: " + w);
                                    break e
                                }
                                f = "", l = 0, c = "no scheme";
                                continue
                            }
                            if (this._scheme = f, f = "", a) break e;
                            t(this._scheme) && (this._isRelative = !0), c = "file" == this._scheme ? "relative" : this._isRelative && s && s._scheme == this._scheme ? "relative or authority" : this._isRelative ? "authority first slash" : "scheme data"
                        }
                        break;
                    case "scheme data":
                        "?" == w ? (query = "?", c = "query") : "#" == w ? (this._fragment = "#", c = "fragment") : p != w && "	" != w && "\n" != w && "\r" != w && (this._schemeData += o(w));
                        break;
                    case "no scheme":
                        if (s && t(s._scheme)) {
                            c = "relative";
                            continue
                        }
                        u("Missing scheme."), n.call(this);
                        break;
                    case "relative or authority":
                        if ("/" != w || "/" != e[l + 1]) {
                            u("Expected /, got: " + w), c = "relative";
                            continue
                        }
                        c = "authority ignore slashes";
                        break;
                    case "relative":
                        if (this._isRelative = !0, "file" != this._scheme && (this._scheme = s._scheme), p == w) {
                            this._host = s._host, this._port = s._port, this._path = s._path.slice(), this._query = s._query, this._username = s._username, this._password = s._password;
                            break e
                        }
                        if ("/" == w || "\\" == w) "\\" == w && u("\\ is an invalid code point."), c = "relative slash";
                        else if ("?" == w) this._host = s._host, this._port = s._port, this._path = s._path.slice(), this._query = "?", this._username = s._username, this._password = s._password, c = "query";
                        else {
                            if ("#" != w) {
                                var x = e[l + 1],
                                    E = e[l + 2];
                                ("file" != this._scheme || !m.test(w) || ":" != x && "|" != x || p != E && "/" != E && "\\" != E && "?" != E && "#" != E) && (this._host = s._host, this._port = s._port, this._username = s._username, this._password = s._password, this._path = s._path.slice(), this._path.pop()), c = "relative path";
                                continue
                            }
                            this._host = s._host, this._port = s._port, this._path = s._path.slice(), this._query = s._query, this._fragment = "#", this._username = s._username, this._password = s._password, c = "fragment"
                        }
                        break;
                    case "relative slash":
                        if ("/" != w && "\\" != w) {
                            "file" != this._scheme && (this._host = s._host, this._port = s._port, this._username = s._username, this._password = s._password), c = "relative path";
                            continue
                        }
                        "\\" == w && u("\\ is an invalid code point."), c = "file" == this._scheme ? "file host" : "authority ignore slashes";
                        break;
                    case "authority first slash":
                        if ("/" != w) {
                            u("Expected '/', got: " + w), c = "authority ignore slashes";
                            continue
                        }
                        c = "authority second slash";
                        break;
                    case "authority second slash":
                        if (c = "authority ignore slashes", "/" != w) {
                            u("Expected '/', got: " + w);
                            continue
                        }
                        break;
                    case "authority ignore slashes":
                        if ("/" != w && "\\" != w) {
                            c = "authority";
                            continue
                        }
                        u("Expected authority, got: " + w);
                        break;
                    case "authority":
                        if ("@" == w) {
                            g && (u("@ already seen."), f += "%40"), g = !0;
                            for (var _ = 0; _ < f.length; _++) {
                                var T = f[_];
                                if ("	" != T && "\n" != T && "\r" != T)
                                    if (":" != T || null !== this._password) {
                                        var j = o(T);
                                        null !== this._password ? this._password += j : this._username += j
                                    } else this._password = "";
                                else u("Invalid whitespace in authority.")
                            }
                            f = ""
                        } else {
                            if (p == w || "/" == w || "\\" == w || "?" == w || "#" == w) {
                                l -= f.length, f = "", c = "host";
                                continue
                            }
                            f += w
                        }
                        break;
                    case "file host":
                        if (p == w || "/" == w || "\\" == w || "?" == w || "#" == w) {
                            2 != f.length || !m.test(f[0]) || ":" != f[1] && "|" != f[1] ? 0 == f.length ? c = "relative path start" : (this._host = r.call(this, f), f = "", c = "relative path start") : c = "relative path";
                            continue
                        }
                        "	" == w || "\n" == w || "\r" == w ? u("Invalid whitespace in file host.") : f += w;
                        break;
                    case "host":
                    case "hostname":
                        if (":" != w || y) {
                            if (p == w || "/" == w || "\\" == w || "?" == w || "#" == w) {
                                if (this._host = r.call(this, f), f = "", c = "relative path start", a) break e;
                                continue
                            }
                            "	" != w && "\n" != w && "\r" != w ? ("[" == w ? y = !0 : "]" == w && (y = !1), f += w) : u("Invalid code point in host/hostname: " + w)
                        } else if (this._host = r.call(this, f), f = "", c = "port", "hostname" == a) break e;
                        break;
                    case "port":
                        if (/[0-9]/.test(w)) f += w;
                        else {
                            if (p == w || "/" == w || "\\" == w || "?" == w || "#" == w || a) {
                                if ("" != f) {
                                    var k = parseInt(f, 10);
                                    k != d[this._scheme] && (this._port = k + ""), f = ""
                                }
                                if (a) break e;
                                c = "relative path start";
                                continue
                            }
                            "	" == w || "\n" == w || "\r" == w ? u("Invalid code point in port: " + w) : n.call(this)
                        }
                        break;
                    case "relative path start":
                        if ("\\" == w && u("'\\' not allowed in path."), c = "relative path", "/" != w && "\\" != w) continue;
                        break;
                    case "relative path":
                        if (p != w && "/" != w && "\\" != w && (a || "?" != w && "#" != w)) "	" != w && "\n" != w && "\r" != w && (f += o(w));
                        else {
                            "\\" == w && u("\\ not allowed in relative path.");
                            var S;
                            (S = h[f.toLowerCase()]) && (f = S), ".." == f ? (this._path.pop(), "/" != w && "\\" != w && this._path.push("")) : "." == f && "/" != w && "\\" != w ? this._path.push("") : "." != f && ("file" == this._scheme && 0 == this._path.length && 2 == f.length && m.test(f[0]) && "|" == f[1] && (f = f[0] + ":"), this._path.push(f)), f = "", "?" == w ? (this._query = "?", c = "query") : "#" == w && (this._fragment = "#", c = "fragment")
                        }
                        break;
                    case "query":
                        a || "#" != w ? p != w && "	" != w && "\n" != w && "\r" != w && (this._query += i(w)) : (this._fragment = "#", c = "fragment");
                        break;
                    case "fragment":
                        p != w && "	" != w && "\n" != w && "\r" != w && (this._fragment += w)
                }
                l++
            }
        }

        function s() {
            this._scheme = "", this._schemeData = "", this._username = "", this._password = null, this._host = "", this._port = "", this._path = [], this._query = "", this._fragment = "", this._isInvalid = !1, this._isRelative = !1
        }

        function u(e, t) {
            void 0 === t || t instanceof u || (t = new u(String(t))), this._url = e, s.call(this);
            var n = e.replace(/^[ \t\r\n\f]+|[ \t\r\n\f]+$/g, "");
            a.call(this, n, null, t)
        }
        var c = !1;
        if (!e.forceJURL) try {
            var l = new URL("b", "http://a");
            l.pathname = "c%20d", c = "http://a/c%20d" === l.href
        } catch (f) {}
        if (!c) {
            var d = Object.create(null);
            d.ftp = 21, d.file = 0, d.gopher = 70, d.http = 80, d.https = 443, d.ws = 80, d.wss = 443;
            var h = Object.create(null);
            h["%2e"] = ".", h[".%2e"] = "..", h["%2e."] = "..", h["%2e%2e"] = "..";
            var p = void 0,
                m = /[a-zA-Z]/,
                v = /[a-zA-Z0-9\+\-\.]/;
            u.prototype = {
                toString: function() {
                    return this.href
                },
                get href() {
                    if (this._isInvalid) return this._url;
                    var e = "";
                    return ("" != this._username || null != this._password) && (e = this._username + (null != this._password ? ":" + this._password : "") + "@"), this.protocol + (this._isRelative ? "//" + e + this.host : "") + this.pathname + this._query + this._fragment
                },
                set href(e) {
                    s.call(this), a.call(this, e)
                },
                get protocol() {
                    return this._scheme + ":"
                },
                set protocol(e) {
                    this._isInvalid || a.call(this, e + ":", "scheme start")
                },
                get host() {
                    return this._isInvalid ? "" : this._port ? this._host + ":" + this._port : this._host
                },
                set host(e) {
                    !this._isInvalid && this._isRelative && a.call(this, e, "host")
                },
                get hostname() {
                    return this._host
                },
                set hostname(e) {
                    !this._isInvalid && this._isRelative && a.call(this, e, "hostname")
                },
                get port() {
                    return this._port
                },
                set port(e) {
                    !this._isInvalid && this._isRelative && a.call(this, e, "port")
                },
                get pathname() {
                    return this._isInvalid ? "" : this._isRelative ? "/" + this._path.join("/") : this._schemeData
                },
                set pathname(e) {
                    !this._isInvalid && this._isRelative && (this._path = [], a.call(this, e, "relative path start"))
                },
                get search() {
                    return this._isInvalid || !this._query || "?" == this._query ? "" : this._query
                },
                set search(e) {
                    !this._isInvalid && this._isRelative && (this._query = "?", "?" == e[0] && (e = e.slice(1)), a.call(this, e, "query"))
                },
                get hash() {
                    return this._isInvalid || !this._fragment || "#" == this._fragment ? "" : this._fragment
                },
                set hash(e) {
                    this._isInvalid || (this._fragment = "#", "#" == e[0] && (e = e.slice(1)), a.call(this, e, "fragment"))
                },
                get origin() {
                    var e;
                    if (this._isInvalid || !this._scheme) return "";
                    switch (this._scheme) {
                        case "data":
                        case "file":
                        case "javascript":
                        case "mailto":
                            return "null"
                    }
                    return e = this.host, e ? this._scheme + "://" + e : ""
                }
            };
            var g = e.URL;
            g && (u.createObjectURL = function(e) {
                return g.createObjectURL.apply(g, arguments)
            }, u.revokeObjectURL = function(e) {
                g.revokeObjectURL(e)
            }), e.URL = u
        }
    }(this), define.registerEnd(), define.register("url-search-params/build/url-search-params.max");
var URLSearchParams = URLSearchParams || function() {
    "use strict";

    function e(e) {
        return encodeURIComponent(e).replace(i, u)
    }

    function t(e) {
        return decodeURIComponent(e.replace(a, " "))
    }

    function n(e) {
        if (this[l] = Object.create(null), e)
            for (var n, r, o = (e || "").split("&"), i = 0, a = o.length; a > i; i++) r = o[i], n = r.indexOf("="), n > -1 && this.append(t(r.slice(0, n)), t(r.slice(n + 1)))
    }

    function r() {
        try {
            return !!Symbol.iterator
        } catch (e) {
            return !1
        }
    }
    var o = n.prototype,
        i = /[!'\(\)~]|%20|%00/g,
        a = /\+/g,
        s = {
            "!": "%21",
            "'": "%27",
            "(": "%28",
            ")": "%29",
            "~": "%7E",
            "%20": "+",
            "%00": "\x00"
        },
        u = function(e) {
            return s[e]
        },
        c = r(),
        l = "__URLSearchParams__:" + Math.random();
    o.append = function(e, t) {
        var n = this[l];
        e in n ? n[e].push("" + t) : n[e] = ["" + t]
    }, o["delete"] = function(e) {
        delete this[l][e]
    }, o.get = function(e) {
        var t = this[l];
        return e in t ? t[e][0] : null
    }, o.getAll = function(e) {
        var t = this[l];
        return e in t ? t[e].slice(0) : []
    }, o.has = function(e) {
        return e in this[l]
    }, o.set = function(e, t) {
        this[l][e] = ["" + t]
    }, o.forEach = function(e, t) {
        var n = this[l];
        Object.getOwnPropertyNames(n).forEach(function(r) {
            n[r].forEach(function(n) {
                e.call(t, n, r, this)
            }, this)
        }, this)
    }, o.keys = function() {
        var e = [];
        this.forEach(function(t, n) {
            e.push(n)
        });
        var t = {
            next: function() {
                var t = e.shift();
                return {
                    done: void 0 === t,
                    value: t
                }
            }
        };
        return c && (t[Symbol.iterator] = function() {
            return t
        }), t
    }, o.values = function() {
        var e = [];
        this.forEach(function(t) {
            e.push(t)
        });
        var t = {
            next: function() {
                var t = e.shift();
                return {
                    done: void 0 === t,
                    value: t
                }
            }
        };
        return c && (t[Symbol.iterator] = function() {
            return t
        }), t
    }, o.entries = function() {
        var e = [];
        this.forEach(function(t, n) {
            e.push([n, t])
        });
        var t = {
            next: function() {
                var t = e.shift();
                return {
                    done: void 0 === t,
                    value: t
                }
            }
        };
        return c && (t[Symbol.iterator] = function() {
            return t
        }), t
    }, c && (o[Symbol.iterator] = o.entries), o.toJSON = function() {
        return {}
    }, o.toString = function() {
        var t, n, r, o, i = this[l],
            a = [];
        for (n in i)
            for (r = e(n), t = 0, o = i[n]; t < o.length; t++) a.push(r + "=" + e(o[t]));
        return a.join("&")
    };
    var f = Object.defineProperty,
        d = Object.getOwnPropertyDescriptor,
        h = function(e) {
            function t(t, n) {
                o.append.call(this, t, n), t = this.toString(), e.set.call(this._usp, t ? "?" + t : "")
            }

            function n(t) {
                o["delete"].call(this, t), t = this.toString(), e.set.call(this._usp, t ? "?" + t : "")
            }

            function r(t, n) {
                o.set.call(this, t, n), t = this.toString(), e.set.call(this._usp, t ? "?" + t : "")
            }
            return function(e, o) {
                return e.append = t, e["delete"] = n, e.set = r, f(e, "_usp", {
                    configurable: !0,
                    writable: !0,
                    value: o
                })
            }
        },
        p = function(e) {
            return function(t, n) {
                return f(t, "_searchParams", {
                    configurable: !0,
                    writable: !0,
                    value: e(n, t)
                }), n
            }
        },
        m = function(e) {
            var t = e.append;
            e.append = o.append, n.call(e, e._usp.search.slice(1)), e.append = t
        },
        v = function(e, t) {
            if (!(e instanceof t)) throw new TypeError("'searchParams' accessed on an object that does not implement interface " + t.name)
        },
        g = function(e) {
            var t, r = e.prototype,
                o = d(r, "searchParams"),
                i = d(r, "href"),
                a = d(r, "search");
            !o && a && a.set && (t = p(h(a)), Object.defineProperties(r, {
                href: {
                    get: function() {
                        return i.get.call(this)
                    },
                    set: function(e) {
                        var t = this._searchParams;
                        i.set.call(this, e), t && m(t)
                    }
                },
                search: {
                    get: function() {
                        return a.get.call(this)
                    },
                    set: function(e) {
                        var t = this._searchParams;
                        a.set.call(this, e), t && m(t)
                    }
                },
                searchParams: {
                    get: function() {
                        return v(this, e), this._searchParams || t(this, new n(this.search.slice(1)))
                    },
                    set: function(n) {
                        v(this, e), t(this, n)
                    }
                }
            }))
        };
    return g(HTMLAnchorElement), /^function|object$/.test(typeof URL) && g(URL), n
}();
define.registerEnd(), define.register("closest"), "function" != typeof Element.prototype.matches && (Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.webkitMatchesSelector || function(e) {
        for (var t = this, n = (t.document || t.ownerDocument).querySelectorAll(e), r = 0; n[r] && n[r] !== t;) ++r;
        return Boolean(n[r])
    }), "function" != typeof Element.prototype.closest && (Element.prototype.closest = function(e) {
        for (var t = this; t && 1 === t.nodeType;) {
            if (t.matches(e)) return t;
            t = t.parentNode
        }
        return null
    }), define.registerEnd(), define.register("closest/mutation"),
    function(e) {
        function t(e) {
            return "string" == typeof e ? document.createTextNode(e) : e
        }

        function n(e) {
            if (e.length) {
                if (1 === e.length) return t(e[0]);
                for (var n = document.createDocumentFragment(), r = 0; r < e.length; r++) n.appendChild(t(e[r]));
                return n
            }
            throw new Error("DOM Exception 8")
        }
        "prepend" in e || (e.prepend = function() {
            this.insertBefore(n(arguments), this.firstChild)
        }), "append" in e || (e.append = function() {
            this.appendChild(n(arguments))
        }), "before" in e || (e.before = function() {
            this.parentNode && this.parentNode.insertBefore(n(arguments), this)
        }), "after" in e || (e.after = function() {
            this.parentNode && this.parentNode.insertBefore(n(arguments), this.nextSibling)
        }), "replaceWith" in e || (e.replaceWith = function() {
            this.parentNode && this.parentNode.replaceChild(n(arguments), this)
        }), "remove" in e || (e.remove = function() {
            this.parentNode && this.parentNode.removeChild(this)
        })
    }(Element.prototype), define.registerEnd(), define.register("usertiming"),
    function(e) {
        "use strict";
        "undefined" == typeof e && (e = {}), "undefined" == typeof e.performance && (e.performance = {}), e._perfRefForUserTimingPolyfill = e.performance, e.performance.userTimingJsNow = !1, e.performance.userTimingJsNowPrefixed = !1, e.performance.userTimingJsUserTiming = !1, e.performance.userTimingJsUserTimingPrefixed = !1, e.performance.userTimingJsPerformanceTimeline = !1, e.performance.userTimingJsPerformanceTimelinePrefixed = !1;
        var t, n, r = [],
            o = [],
            i = null;
        if ("function" != typeof e.performance.now) {
            for (e.performance.userTimingJsNow = !0, o = ["webkitNow", "msNow", "mozNow"], t = 0; t < o.length; t++)
                if ("function" == typeof e.performance[o[t]]) {
                    e.performance.now = e.performance[o[t]], e.performance.userTimingJsNowPrefixed = !0;
                    break
                }
            var a = +new Date;
            e.performance.timing && e.performance.timing.navigationStart && (a = e.performance.timing.navigationStart), "function" != typeof e.performance.now && (Date.now ? e.performance.now = function() {
                return Date.now() - a
            } : e.performance.now = function() {
                return +new Date - a
            })
        }
        var s = function() {},
            u = function() {},
            c = [],
            l = !1,
            f = !1;
        if ("function" != typeof e.performance.getEntries || "function" != typeof e.performance.mark) {
            for ("function" == typeof e.performance.getEntries && "function" != typeof e.performance.mark && (f = !0), e.performance.userTimingJsPerformanceTimeline = !0, r = ["webkit", "moz"], o = ["getEntries", "getEntriesByName", "getEntriesByType"], t = 0; t < o.length; t++)
                for (n = 0; n < r.length; n++) i = r[n] + o[t].substr(0, 1).toUpperCase() + o[t].substr(1), "function" == typeof e.performance[i] && (e.performance[o[t]] = e.performance[i], e.performance.userTimingJsPerformanceTimelinePrefixed = !0);
            s = function(e) {
                c.push(e), "measure" === e.entryType && (l = !0)
            };
            var d = function() {
                l && (c.sort(function(e, t) {
                    return e.startTime - t.startTime
                }), l = !1)
            };
            if (u = function(e, n) {
                    for (t = 0; t < c.length;) c[t].entryType === e && ("undefined" == typeof n || c[t].name === n) ? c.splice(t, 1) : t++
                }, "function" != typeof e.performance.getEntries || f) {
                var h = e.performance.getEntries;
                e.performance.getEntries = function() {
                    d();
                    var t = c.slice(0);
                    return f && h && (Array.prototype.push.apply(t, h.call(e.performance)), t.sort(function(e, t) {
                        return e.startTime - t.startTime
                    })), t
                }
            }
            if ("function" != typeof e.performance.getEntriesByType || f) {
                var p = e.performance.getEntriesByType;
                e.performance.getEntriesByType = function(n) {
                    if ("undefined" == typeof n || "mark" !== n && "measure" !== n) return f && p ? p.call(e.performance, n) : [];
                    "measure" === n && d();
                    var r = [];
                    for (t = 0; t < c.length; t++) c[t].entryType === n && r.push(c[t]);
                    return r
                }
            }
            if ("function" != typeof e.performance.getEntriesByName || f) {
                var m = e.performance.getEntriesByName;
                e.performance.getEntriesByName = function(n, r) {
                    if (r && "mark" !== r && "measure" !== r) return f && m ? m.call(e.performance, n, r) : [];
                    "undefined" != typeof r && "measure" === r && d();
                    var o = [];
                    for (t = 0; t < c.length; t++)("undefined" == typeof r || c[t].entryType === r) && c[t].name === n && o.push(c[t]);
                    return f && m && (Array.prototype.push.apply(o, m.call(e.performance, n, r)), o.sort(function(e, t) {
                        return e.startTime - t.startTime
                    })), o
                }
            }
        }
        if ("function" != typeof e.performance.mark) {
            for (e.performance.userTimingJsUserTiming = !0, r = ["webkit", "moz", "ms"], o = ["mark", "measure", "clearMarks", "clearMeasures"], t = 0; t < o.length; t++)
                for (n = 0; n < r.length; n++) i = r[n] + o[t].substr(0, 1).toUpperCase() + o[t].substr(1), "function" == typeof e.performance[i] && (e.performance[o[t]] = e.performance[i], e.performance.userTimingJsUserTimingPrefixed = !0);
            var v = {};
            "function" != typeof e.performance.mark && (e.performance.mark = function(t) {
                var n = e.performance.now();
                if ("undefined" == typeof t) throw new SyntaxError("Mark name must be specified");
                if (e.performance.timing && t in e.performance.timing) throw new SyntaxError("Mark name is not allowed");
                v[t] || (v[t] = []), v[t].push(n), s({
                    entryType: "mark",
                    name: t,
                    startTime: n,
                    duration: 0
                })
            }), "function" != typeof e.performance.clearMarks && (e.performance.clearMarks = function(e) {
                e ? v[e] = [] : v = {}, u("mark", e)
            }), "function" != typeof e.performance.measure && (e.performance.measure = function(t, n, r) {
                var o = e.performance.now();
                if ("undefined" == typeof t) throw new SyntaxError("Measure must be specified");
                if (!n) return void s({
                    entryType: "measure",
                    name: t,
                    startTime: 0,
                    duration: o
                });
                var i = 0;
                if (e.performance.timing && n in e.performance.timing) {
                    if ("navigationStart" !== n && 0 === e.performance.timing[n]) throw new Error(n + " has a timing of 0");
                    i = e.performance.timing[n] - e.performance.timing.navigationStart
                } else {
                    if (!(n in v)) throw new Error(n + " mark not found");
                    i = v[n][v[n].length - 1]
                }
                var a = o;
                if (r)
                    if (a = 0, e.performance.timing && r in e.performance.timing) {
                        if ("navigationStart" !== r && 0 === e.performance.timing[r]) throw new Error(r + " has a timing of 0");
                        a = e.performance.timing[r] - e.performance.timing.navigationStart
                    } else {
                        if (!(r in v)) throw new Error(r + " mark not found");
                        a = v[r][v[r].length - 1]
                    }
                var u = a - i;
                s({
                    entryType: "measure",
                    name: t,
                    startTime: i,
                    duration: u
                })
            }), "function" != typeof e.performance.clearMeasures && (e.performance.clearMeasures = function(e) {
                u("measure", e)
            })
        }
        "undefined" != typeof define && define.amd ? define([], function() {
            return e.performance
        }) : "undefined" != typeof module && "undefined" != typeof module.exports && (module.exports = e.performance)
    }("undefined" != typeof window ? window : void 0), define.registerEnd(), define.register("regenerator/runtime"), ! function(e) {
        "use strict";

        function t(e, t, n, o) {
            var i = Object.create((t || r).prototype),
                a = new d(o || []);
            return i._invoke = c(e, n, a), i
        }

        function n(e, t, n) {
            try {
                return {
                    type: "normal",
                    arg: e.call(t, n)
                }
            } catch (r) {
                return {
                    type: "throw",
                    arg: r
                }
            }
        }

        function r() {}

        function o() {}

        function i() {}

        function a(e) {
            ["next", "throw", "return"].forEach(function(t) {
                e[t] = function(e) {
                    return this._invoke(t, e)
                }
            })
        }

        function s(e) {
            this.arg = e
        }

        function u(e) {
            function t(r, o, i, a) {
                var u = n(e[r], e, o);
                if ("throw" !== u.type) {
                    var c = u.arg,
                        l = c.value;
                    return l instanceof s ? Promise.resolve(l.arg).then(function(e) {
                        t("next", e, i, a)
                    }, function(e) {
                        t("throw", e, i, a)
                    }) : Promise.resolve(l).then(function(e) {
                        c.value = e, i(c)
                    }, a)
                }
                a(u.arg)
            }

            function r(e, n) {
                function r() {
                    return new Promise(function(r, o) {
                        t(e, n, r, o)
                    })
                }
                return o = o ? o.then(r, r) : r()
            }
            "object" == typeof process && process.domain && (t = process.domain.bind(t));
            var o;
            this._invoke = r
        }

        function c(e, t, r) {
            var o = E;
            return function(i, a) {
                if (o === T) throw new Error("Generator is already running");
                if (o === j) {
                    if ("throw" === i) throw a;
                    return p()
                }
                for (;;) {
                    var s = r.delegate;
                    if (s) {
                        if ("return" === i || "throw" === i && s.iterator[i] === m) {
                            r.delegate = null;
                            var u = s.iterator["return"];
                            if (u) {
                                var c = n(u, s.iterator, a);
                                if ("throw" === c.type) {
                                    i = "throw", a = c.arg;
                                    continue
                                }
                            }
                            if ("return" === i) continue
                        }
                        var c = n(s.iterator[i], s.iterator, a);
                        if ("throw" === c.type) {
                            r.delegate = null, i = "throw", a = c.arg;
                            continue
                        }
                        i = "next", a = m;
                        var l = c.arg;
                        if (!l.done) return o = _, l;
                        r[s.resultName] = l.value, r.next = s.nextLoc, r.delegate = null
                    }
                    if ("next" === i) o === _ ? r.sent = a : r.sent = m;
                    else if ("throw" === i) {
                        if (o === E) throw o = j, a;
                        r.dispatchException(a) && (i = "next", a = m)
                    } else "return" === i && r.abrupt("return", a);
                    o = T;
                    var c = n(e, t, r);
                    if ("normal" === c.type) {
                        o = r.done ? j : _;
                        var l = {
                            value: c.arg,
                            done: r.done
                        };
                        if (c.arg !== k) return l;
                        r.delegate && "next" === i && (a = m)
                    } else "throw" === c.type && (o = j, i = "throw", a = c.arg)
                }
            }
        }

        function l(e) {
            var t = {
                tryLoc: e[0]
            };
            1 in e && (t.catchLoc = e[1]), 2 in e && (t.finallyLoc = e[2], t.afterLoc = e[3]), this.tryEntries.push(t)
        }

        function f(e) {
            var t = e.completion || {};
            t.type = "normal", delete t.arg, e.completion = t
        }

        function d(e) {
            this.tryEntries = [{
                tryLoc: "root"
            }], e.forEach(l, this), this.reset(!0)
        }

        function h(e) {
            if (e) {
                var t = e[y];
                if (t) return t.call(e);
                if ("function" == typeof e.next) return e;
                if (!isNaN(e.length)) {
                    var n = -1,
                        r = function o() {
                            for (; ++n < e.length;)
                                if (v.call(e, n)) return o.value = e[n], o.done = !1, o;
                            return o.value = m, o.done = !0, o
                        };
                    return r.next = r
                }
            }
            return {
                next: p
            }
        }

        function p() {
            return {
                value: m,
                done: !0
            }
        }
        var m, v = Object.prototype.hasOwnProperty,
            g = "function" == typeof Symbol ? Symbol : {},
            y = g.iterator || "@@iterator",
            b = g.toStringTag || "@@toStringTag",
            w = "object" == typeof module,
            x = e.regeneratorRuntime;
        if (x) return void(w && (module.exports = x));
        x = e.regeneratorRuntime = w ? module.exports : {}, x.wrap = t;
        var E = "suspendedStart",
            _ = "suspendedYield",
            T = "executing",
            j = "completed",
            k = {},
            S = i.prototype = r.prototype;
        o.prototype = S.constructor = i, i.constructor = o, i[b] = o.displayName = "GeneratorFunction", x.isGeneratorFunction = function(e) {
            var t = "function" == typeof e && e.constructor;
            return t ? t === o || "GeneratorFunction" === (t.displayName || t.name) : !1
        }, x.mark = function(e) {
            return Object.setPrototypeOf ? Object.setPrototypeOf(e, i) : (e.__proto__ = i, b in e || (e[b] = "GeneratorFunction")), e.prototype = Object.create(S), e
        }, x.awrap = function(e) {
            return new s(e)
        }, a(u.prototype), x.async = function(e, n, r, o) {
            var i = new u(t(e, n, r, o));
            return x.isGeneratorFunction(n) ? i : i.next().then(function(e) {
                return e.done ? e.value : i.next()
            })
        }, a(S), S[y] = function() {
            return this
        }, S[b] = "Generator", S.toString = function() {
            return "[object Generator]"
        }, x.keys = function(e) {
            var t = [];
            for (var n in e) t.push(n);
            return t.reverse(),
                function r() {
                    for (; t.length;) {
                        var n = t.pop();
                        if (n in e) return r.value = n, r.done = !1, r
                    }
                    return r.done = !0, r
                }
        }, x.values = h, d.prototype = {
            constructor: d,
            reset: function(e) {
                if (this.prev = 0, this.next = 0, this.sent = m, this.done = !1, this.delegate = null, this.tryEntries.forEach(f), !e)
                    for (var t in this) "t" === t.charAt(0) && v.call(this, t) && !isNaN(+t.slice(1)) && (this[t] = m)
            },
            stop: function() {
                this.done = !0;
                var e = this.tryEntries[0],
                    t = e.completion;
                if ("throw" === t.type) throw t.arg;
                return this.rval
            },
            dispatchException: function(e) {
                function t(t, r) {
                    return i.type = "throw", i.arg = e, n.next = t, !!r
                }
                if (this.done) throw e;
                for (var n = this, r = this.tryEntries.length - 1; r >= 0; --r) {
                    var o = this.tryEntries[r],
                        i = o.completion;
                    if ("root" === o.tryLoc) return t("end");
                    if (o.tryLoc <= this.prev) {
                        var a = v.call(o, "catchLoc"),
                            s = v.call(o, "finallyLoc");
                        if (a && s) {
                            if (this.prev < o.catchLoc) return t(o.catchLoc, !0);
                            if (this.prev < o.finallyLoc) return t(o.finallyLoc)
                        } else if (a) {
                            if (this.prev < o.catchLoc) return t(o.catchLoc, !0)
                        } else {
                            if (!s) throw new Error("try statement without catch or finally");
                            if (this.prev < o.finallyLoc) return t(o.finallyLoc)
                        }
                    }
                }
            },
            abrupt: function(e, t) {
                for (var n = this.tryEntries.length - 1; n >= 0; --n) {
                    var r = this.tryEntries[n];
                    if (r.tryLoc <= this.prev && v.call(r, "finallyLoc") && this.prev < r.finallyLoc) {
                        var o = r;
                        break
                    }
                }
                o && ("break" === e || "continue" === e) && o.tryLoc <= t && t <= o.finallyLoc && (o = null);
                var i = o ? o.completion : {};
                return i.type = e, i.arg = t, o ? this.next = o.finallyLoc : this.complete(i), k
            },
            complete: function(e, t) {
                if ("throw" === e.type) throw e.arg;
                "break" === e.type || "continue" === e.type ? this.next = e.arg : "return" === e.type ? (this.rval = e.arg, this.next = "end") : "normal" === e.type && t && (this.next = t)
            },
            finish: function(e) {
                for (var t = this.tryEntries.length - 1; t >= 0; --t) {
                    var n = this.tryEntries[t];
                    if (n.finallyLoc === e) return this.complete(n.completion, n.afterLoc), f(n), k
                }
            },
            "catch": function(e) {
                for (var t = this.tryEntries.length - 1; t >= 0; --t) {
                    var n = this.tryEntries[t];
                    if (n.tryLoc === e) {
                        var r = n.completion;
                        if ("throw" === r.type) {
                            var o = r.arg;
                            f(n)
                        }
                        return o
                    }
                }
                throw new Error("illegal catch attempt")
            },
            delegateYield: function(e, t, n) {
                return this.delegate = {
                    iterator: h(e),
                    resultName: t,
                    nextLoc: n
                }, k
            }
        }
    }("object" == typeof global ? global : "object" == typeof window ? window : "object" == typeof self ? self : this), define.registerEnd(), define.register("requestidlecallback"), window.requestIdleCallback = window.requestIdleCallback || function(e) {
        return setTimeout(function() {
            var t = Date.now();
            e({
                didTimeout: !1,
                timeRemaining: function() {
                    return Math.max(0, 50 - (Date.now() - t))
                }
            })
        }, 1)
    }, window.cancelIdleCallback = window.cancelIdleCallback || function(e) {
        clearTimeout(e)
    }, define.registerEnd(), define.register("setimmediate"),
    function(e, t) {
        "use strict";

        function n(e) {
            return p[h] = r.apply(t, e), h++
        }

        function r(e) {
            var n = [].slice.call(arguments, 1);
            return function() {
                "function" == typeof e ? e.apply(t, n) : new Function("" + e)()
            }
        }

        function o(e) {
            if (m) setTimeout(r(o, e), 0);
            else {
                var t = p[e];
                if (t) {
                    m = !0;
                    try {
                        t()
                    } finally {
                        i(e), m = !1
                    }
                }
            }
        }

        function i(e) {
            delete p[e]
        }

        function a() {
            d = function() {
                var e = n(arguments);
                return process.nextTick(r(o, e)), e
            }
        }

        function s() {
            if (e.postMessage && !e.importScripts) {
                var t = !0,
                    n = e.onmessage;
                return e.onmessage = function() {
                    t = !1
                }, e.postMessage("", "*"), e.onmessage = n, t
            }
        }

        function u() {
            var t = "setImmediate$" + Math.random() + "$",
                r = function(n) {
                    n.source === e && "string" == typeof n.data && 0 === n.data.indexOf(t) && o(+n.data.slice(t.length))
                };
            e.addEventListener ? e.addEventListener("message", r, !1) : e.attachEvent("onmessage", r), d = function() {
                var r = n(arguments);
                return e.postMessage(t + r, "*"), r
            }
        }

        function c() {
            var e = new MessageChannel;
            e.port1.onmessage = function(e) {
                var t = e.data;
                o(t)
            }, d = function() {
                var t = n(arguments);
                return e.port2.postMessage(t), t
            }
        }

        function l() {
            var e = v.documentElement;
            d = function() {
                var t = n(arguments),
                    r = v.createElement("script");
                return r.onreadystatechange = function() {
                    o(t), r.onreadystatechange = null, e.removeChild(r), r = null
                }, e.appendChild(r), t
            }
        }

        function f() {
            d = function() {
                var e = n(arguments);
                return setTimeout(r(o, e), 0), e
            }
        }
        if (!e.setImmediate) {
            var d, h = 1,
                p = {},
                m = !1,
                v = e.document,
                g = Object.getPrototypeOf && Object.getPrototypeOf(e);
            g = g && g.setTimeout ? g : e, "[object process]" === {}.toString.call(e.process) ? a() : s() ? u() : e.MessageChannel ? c() : v && "onreadystatechange" in v.createElement("script") ? l() : f(), g.setImmediate = d, g.clearImmediate = i
        }
    }("undefined" == typeof self ? "undefined" == typeof global ? this : global : self), define.registerEnd(), define.register("invariant"),
    function(e, t) {
        "function" == typeof define && define.amd ? define([], t) : "object" == typeof exports ? module.exports = t() : e.invariant = t()
    }(this, function(e) {
        var t = function(e, t, n, r, o, i, a, s) {
            if ("object" == typeof process && "production" !== process.env.NODE_ENV && void 0 === t) throw new Error("invariant requires an error message argument");
            if (!e) {
                var u;
                if (void 0 === t) u = new Error("Minified exception occurred; use the non-minified dev environment for the full error message and additional helpful warnings.");
                else {
                    var c = [n, r, o, i, a, s],
                        l = 0;
                    u = new Error(t.replace(/%s/g, function() {
                        return c[l++]
                    })), u.name = "Invariant Violation"
                }
                throw u.framesToPop = 1, u
            }
        };
        return t
    }), define.registerEnd(), define("github/document-ready", ["exports"], function(e) {
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        e.ready = function() {
            return "interactive" === document.readyState || "complete" === document.readyState ? Promise.resolve() : new Promise(function(e) {
                document.addEventListener("DOMContentLoaded", e)
            })
        }(), e.loaded = function() {
            return "complete" === document.readyState ? Promise.resolve() : new Promise(function(e) {
                window.addEventListener("load", e)
            })
        }()
    }), define("github/send-beacon", ["exports", "invariant", "./document-ready"], function(e, t, n) {
        function r(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function o(e) {
            return e = e.split(";")[0], v.indexOf(e) > -1
        }

        function i(e, t) {
            return t instanceof Blob ? (c(t).then(function(n) {
                var r = "string" == typeof t.type && "" !== t.type ? t.type : m;
                s(e, n, r)
            }), !0) : (s(e, t, m), !0)
        }

        function a(e, t, n) {
            g && navigator.sendBeacon && o(n) ? navigator.sendBeacon(e, new Blob([t], {
                type: n
            })) : s(e, t, n)
        }

        function s(e, t, n) {
            var r = {
                url: String(e),
                data: t,
                type: n
            };
            if (b) {
                var o = l() || [];
                o.push(r), f(o)
            } else p.push(r), y && clearTimeout(y), y = setTimeout(function() {
                u(p), p.length = 0
            }, 20);
            return !0
        }

        function u(e) {
            var t = !0,
                n = !1,
                r = void 0;
            try {
                for (var o, i = e[Symbol.iterator](); !(t = (o = i.next()).done); t = !0) {
                    var a = o.value,
                        s = new XMLHttpRequest;
                    s.open("POST", a.url, !0), s.setRequestHeader("Content-Type", a.type), s.send(a.data)
                }
            } catch (u) {
                n = !0, r = u
            } finally {
                try {
                    !t && i["return"] && i["return"]()
                } finally {
                    if (n) throw r
                }
            }
        }

        function c(e) {
            var t = new FileReader,
                n = new Promise(function(e, n) {
                    t.onload = function() {
                        h["default"]("string" == typeof t.result, "github/send-beacon.js:123"), e(t.result)
                    }, t.onerror = function() {
                        n(t.error)
                    }
                });
            return t.readAsText(e), n
        }

        function l() {
            var e = void 0;
            try {
                e = sessionStorage.getItem(w)
            } catch (t) {}
            return e ? JSON.parse(e) : void 0
        }

        function f(e) {
            var t = JSON.stringify(e);
            try {
                sessionStorage.setItem(w, t)
            } catch (n) {}
        }

        function d() {
            try {
                sessionStorage.removeItem(w);
            } catch (e) {}
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.guaranteedPost = a;
        var h = r(t),
            p = [],
            m = "text/plain",
            v = ["application/x-www-form-urlencoded", "multipart/form-data", m],
            g = !1;
        "sendBeacon" in window.navigator ? g = !0 : navigator.sendBeacon = i;
        var y = void 0,
            b = !1;
        window.addEventListener("beforeunload", function(e) {
            setTimeout(function() {
                e.defaultPrevented || (b = !0, y && clearTimeout(y), p.length > 0 && f(p))
            })
        }), n.ready.then(function() {
            var e = l();
            e && (u(e), d())
        });
        var w = "send-beacon-queue"
    }), define("environment-bootstrap", ["string.prototype.codepointat", "string.prototype.endswith", "string.prototype.startswith", "array.from", "es6-symbol", "./github/es6-symbol-iterators", "es6-object-assign/dist/object-assign-auto", "whatwg-fetch", "webcomponents.js/CustomElements", "url-polyfill", "url-search-params/build/url-search-params.max", "closest", "closest/mutation", "usertiming", "regenerator/runtime", "requestidlecallback", "setimmediate", "./github/send-beacon"], function() {}), define.register("jquery"),
    function(e, t) {
        "use strict";
        "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function(e) {
            if (!e.document) throw new Error("jQuery requires a window with a document");
            return t(e)
        } : t(e)
    }("undefined" != typeof window ? window : this, function(e, t) {
        "use strict";

        function n(e, t) {
            t = t || ne;
            var n = t.createElement("script");
            n.text = e, t.head.appendChild(n).parentNode.removeChild(n)
        }

        function r(e) {
            var t = !!e && "length" in e && e.length,
                n = me.type(e);
            return "function" === n || me.isWindow(e) ? !1 : "array" === n || 0 === t || "number" == typeof t && t > 0 && t - 1 in e
        }

        function o(e, t) {
            if (e === t) return we = !0, 0;
            var n = !e.compareDocumentPosition - !t.compareDocumentPosition;
            return n ? n : (n = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1, 1 & n ? e === ne || e.ownerDocument === ne && me.contains(ne, e) ? -1 : t === ne || t.ownerDocument === ne && me.contains(ne, t) ? 1 : xe ? se.call(xe, e) - se.call(xe, t) : 0 : 4 & n ? -1 : 1)
        }

        function i(e) {
            var t, n = [],
                r = 0,
                i = 0;
            if (we = !1, xe = !_e && e.slice(0), e.sort(o), we) {
                for (; t = e[i++];) t === e[i] && (r = n.push(i));
                for (; r--;) e.splice(n[r], 1)
            }
            return xe = null, e
        }

        function a(e) {
            return (e + "").replace(je, ke)
        }

        function s(e, t, n) {
            if (me.isFunction(t)) return me.grep(e, function(e, r) {
                return !!t.call(e, r, e) !== n
            });
            if (t.nodeType) return me.grep(e, function(e) {
                return e === t !== n
            });
            if ("string" == typeof t) {
                if (Le.test(t)) return me.filter(t, e, n);
                t = me.filter(t, e)
            }
            return me.grep(e, function(e) {
                return se.call(t, e) > -1 !== n && 1 === e.nodeType
            })
        }

        function u(e, t) {
            for (;
                (e = e[t]) && 1 !== e.nodeType;);
            return e
        }

        function c(e) {
            var t = {};
            return me.each(e.match(Re) || [], function(e, n) {
                t[n] = !0
            }), t
        }

        function l(e) {
            return e
        }

        function f(e) {
            throw e
        }

        function d(e, t, n) {
            var r;
            try {
                e && me.isFunction(r = e.promise) ? r.call(e).done(t).fail(n) : e && me.isFunction(r = e.then) ? r.call(e, t, n) : t.call(void 0, e)
            } catch (e) {
                n.call(void 0, e)
            }
        }

        function h() {
            ne.removeEventListener("DOMContentLoaded", h), e.removeEventListener("load", h), me.ready()
        }

        function p() {
            this.expando = me.expando + p.uid++
        }

        function m(e, t, n) {
            var r;
            if (void 0 === n && 1 === e.nodeType)
                if (r = "data-" + t.replace($e, "-$&").toLowerCase(), n = e.getAttribute(r), "string" == typeof n) {
                    try {
                        n = "true" === n ? !0 : "false" === n ? !1 : "null" === n ? null : +n + "" === n ? +n : ze.test(n) ? JSON.parse(n) : n
                    } catch (o) {}
                    We.set(e, t, n)
                } else n = void 0;
            return n
        }

        function v(e, t, n, r) {
            var o, i = 1,
                a = 20,
                s = r ? function() {
                    return r.cur()
                } : function() {
                    return me.css(e, t, "")
                },
                u = s(),
                c = n && n[3] || (me.cssNumber[t] ? "" : "px"),
                l = (me.cssNumber[t] || "px" !== c && +u) && Xe.exec(me.css(e, t));
            if (l && l[3] !== c) {
                c = c || l[3], n = n || [], l = +u || 1;
                do i = i || ".5", l /= i, me.style(e, t, l + c); while (i !== (i = s() / u) && 1 !== i && --a)
            }
            return n && (l = +l || +u || 0, o = n[1] ? l + (n[1] + 1) * n[2] : +n[2], r && (r.unit = c, r.start = l, r.end = o)), o
        }

        function g(e) {
            var t, n = e.ownerDocument,
                r = e.nodeName,
                o = Ke[r];
            return o ? o : (t = n.body.appendChild(n.createElement(r)), o = me.css(t, "display"), t.parentNode.removeChild(t), "none" === o && (o = "block"), Ke[r] = o, o)
        }

        function y(e, t) {
            for (var n, r, o = [], i = 0, a = e.length; a > i; i++) r = e[i], r.style && (n = r.style.display, t ? ("none" === n && (o[i] = Be.get(r, "display") || null, o[i] || (r.style.display = "")), "" === r.style.display && Je(r) && (o[i] = g(r))) : "none" !== n && (o[i] = "none", Be.set(r, "display", n)));
            for (i = 0; a > i; i++) null != o[i] && (e[i].style.display = o[i]);
            return e
        }

        function b(e, t) {
            var n = "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t || "*") : "undefined" != typeof e.querySelectorAll ? e.querySelectorAll(t || "*") : [];
            return void 0 === t || t && me.nodeName(e, t) ? me.merge([e], n) : n
        }

        function w(e, t) {
            for (var n = 0, r = e.length; r > n; n++) Be.set(e[n], "globalEval", !t || Be.get(t[n], "globalEval"))
        }

        function x(e, t, n, r, o) {
            for (var i, a, s, u, c, l, f = t.createDocumentFragment(), d = [], h = 0, p = e.length; p > h; h++)
                if (i = e[h], i || 0 === i)
                    if ("object" === me.type(i)) me.merge(d, i.nodeType ? [i] : i);
                    else if (nt.test(i)) {
                for (a = a || f.appendChild(t.createElement("div")), s = (Qe.exec(i) || ["", ""])[1].toLowerCase(), u = tt[s] || tt._default, a.innerHTML = u[1] + me.htmlPrefilter(i) + u[2], l = u[0]; l--;) a = a.lastChild;
                me.merge(d, a.childNodes), a = f.firstChild, a.textContent = ""
            } else d.push(t.createTextNode(i));
            for (f.textContent = "", h = 0; i = d[h++];)
                if (r && me.inArray(i, r) > -1) o && o.push(i);
                else if (c = me.contains(i.ownerDocument, i), a = b(f.appendChild(i), "script"), c && w(a), n)
                for (l = 0; i = a[l++];) et.test(i.type || "") && n.push(i);
            return f
        }

        function E() {
            return !0
        }

        function _() {
            return !1
        }

        function T() {
            try {
                return ne.activeElement
            } catch (e) {}
        }

        function j(e, t, n, r, o, i) {
            var a, s;
            if ("object" == typeof t) {
                "string" != typeof n && (r = r || n, n = void 0);
                for (s in t) j(e, s, n, r, t[s], i);
                return e
            }
            if (null == r && null == o ? (o = n, r = n = void 0) : null == o && ("string" == typeof n ? (o = r, r = void 0) : (o = r, r = n, n = void 0)), o === !1) o = _;
            else if (!o) return e;
            return 1 === i && (a = o, o = function(e) {
                return me().off(e), a.apply(this, arguments)
            }, o.guid = a.guid || (a.guid = me.guid++)), e.each(function() {
                me.event.add(this, t, o, r, n)
            })
        }

        function k(e, t) {
            return me.nodeName(e, "table") && me.nodeName(11 !== t.nodeType ? t : t.firstChild, "tr") ? e.getElementsByTagName("tbody")[0] || e : e
        }

        function S(e) {
            return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e
        }

        function O(e) {
            var t = ct.exec(e.type);
            return t ? e.type = t[1] : e.removeAttribute("type"), e
        }

        function C(e, t) {
            var n, r, o, i, a, s, u, c;
            if (1 === t.nodeType) {
                if (Be.hasData(e) && (i = Be.access(e), a = Be.set(t, i), c = i.events)) {
                    delete a.handle, a.events = {};
                    for (o in c)
                        for (n = 0, r = c[o].length; r > n; n++) me.event.add(t, o, c[o][n])
                }
                We.hasData(e) && (s = We.access(e), u = me.extend({}, s), We.set(t, u))
            }
        }

        function M(e, t) {
            var n = t.nodeName.toLowerCase();
            "input" === n && Ze.test(e.type) ? t.checked = e.checked : ("input" === n || "textarea" === n) && (t.defaultValue = e.defaultValue)
        }

        function L(e, t, r, o) {
            t = ie.apply([], t);
            var i, a, s, u, c, l, f = 0,
                d = e.length,
                h = d - 1,
                p = t[0],
                m = me.isFunction(p);
            if (m || d > 1 && "string" == typeof p && !he.checkClone && ut.test(p)) return e.each(function(n) {
                var i = e.eq(n);
                m && (t[0] = p.call(this, n, i.html())), L(i, t, r, o)
            });
            if (d && (i = x(t, e[0].ownerDocument, !1, e, o), a = i.firstChild, 1 === i.childNodes.length && (i = a), a || o)) {
                for (s = me.map(b(i, "script"), S), u = s.length; d > f; f++) c = i, f !== h && (c = me.clone(c, !0, !0), u && me.merge(s, b(c, "script"))), r.call(e[f], c, f);
                if (u)
                    for (l = s[s.length - 1].ownerDocument, me.map(s, O), f = 0; u > f; f++) c = s[f], et.test(c.type || "") && !Be.access(c, "globalEval") && me.contains(l, c) && (c.src ? me._evalUrl && me._evalUrl(c.src) : n(c.textContent.replace(lt, ""), l))
            }
            return e
        }

        function P(e, t, n) {
            for (var r, o = t ? me.filter(t, e) : e, i = 0; null != (r = o[i]); i++) n || 1 !== r.nodeType || me.cleanData(b(r)), r.parentNode && (n && me.contains(r.ownerDocument, r) && w(b(r, "script")), r.parentNode.removeChild(r));
            return e
        }

        function A(e, t, n) {
            var r, o, i, a, s = e.style;
            return n = n || ht(e), n && (a = n.getPropertyValue(t) || n[t], "" !== a || me.contains(e.ownerDocument, e) || (a = me.style(e, t)), !he.pixelMarginRight() && dt.test(a) && ft.test(t) && (r = s.width, o = s.minWidth, i = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = o, s.maxWidth = i)), void 0 !== a ? a + "" : a
        }

        function D(e, t) {
            return {
                get: function() {
                    return e() ? void delete this.get : (this.get = t).apply(this, arguments)
                }
            }
        }

        function N(e) {
            if (e in yt) return e;
            for (var t = e[0].toUpperCase() + e.slice(1), n = gt.length; n--;)
                if (e = gt[n] + t, e in yt) return e
        }

        function q(e, t, n) {
            var r = Xe.exec(t);
            return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t
        }

        function R(e, t, n, r, o) {
            for (var i = n === (r ? "border" : "content") ? 4 : "width" === t ? 1 : 0, a = 0; 4 > i; i += 2) "margin" === n && (a += me.css(e, n + Ge[i], !0, o)), r ? ("content" === n && (a -= me.css(e, "padding" + Ge[i], !0, o)), "margin" !== n && (a -= me.css(e, "border" + Ge[i] + "Width", !0, o))) : (a += me.css(e, "padding" + Ge[i], !0, o), "padding" !== n && (a += me.css(e, "border" + Ge[i] + "Width", !0, o)));
            return a
        }

        function F(e, t, n) {
            var r, o = !0,
                i = ht(e),
                a = "border-box" === me.css(e, "boxSizing", !1, i);
            if (e.getClientRects().length && (r = e.getBoundingClientRect()[t]), 0 >= r || null == r) {
                if (r = A(e, t, i), (0 > r || null == r) && (r = e.style[t]), dt.test(r)) return r;
                o = a && (he.boxSizingReliable() || r === e.style[t]), r = parseFloat(r) || 0
            }
            return r + R(e, t, n || (a ? "border" : "content"), o, i) + "px"
        }

        function I(e, t, n, r, o) {
            return new I.prototype.init(e, t, n, r, o)
        }

        function H() {
            wt && (e.requestAnimationFrame(H), me.fx.tick())
        }

        function U() {
            return e.setTimeout(function() {
                bt = void 0
            }), bt = me.now()
        }

        function B(e, t) {
            var n, r = 0,
                o = {
                    height: e
                };
            for (t = t ? 1 : 0; 4 > r; r += 2 - t) n = Ge[r], o["margin" + n] = o["padding" + n] = e;
            return t && (o.opacity = o.width = e), o
        }

        function W(e, t, n) {
            for (var r, o = (V.tweeners[t] || []).concat(V.tweeners["*"]), i = 0, a = o.length; a > i; i++)
                if (r = o[i].call(n, t, e)) return r
        }

        function z(e, t, n) {
            var r, o, i, a, s, u, c, l, f = "width" in t || "height" in t,
                d = this,
                h = {},
                p = e.style,
                m = e.nodeType && Je(e),
                v = Be.get(e, "fxshow");
            n.queue || (a = me._queueHooks(e, "fx"), null == a.unqueued && (a.unqueued = 0, s = a.empty.fire, a.empty.fire = function() {
                a.unqueued || s()
            }), a.unqueued++, d.always(function() {
                d.always(function() {
                    a.unqueued--, me.queue(e, "fx").length || a.empty.fire()
                })
            }));
            for (r in t)
                if (o = t[r], xt.test(o)) {
                    if (delete t[r], i = i || "toggle" === o, o === (m ? "hide" : "show")) {
                        if ("show" !== o || !v || void 0 === v[r]) continue;
                        m = !0
                    }
                    h[r] = v && v[r] || me.style(e, r)
                }
            if (u = !me.isEmptyObject(t), u || !me.isEmptyObject(h)) {
                f && 1 === e.nodeType && (n.overflow = [p.overflow, p.overflowX, p.overflowY], c = v && v.display, null == c && (c = Be.get(e, "display")), l = me.css(e, "display"), "none" === l && (c ? l = c : (y([e], !0), c = e.style.display || c, l = me.css(e, "display"), y([e]))), ("inline" === l || "inline-block" === l && null != c) && "none" === me.css(e, "float") && (u || (d.done(function() {
                    p.display = c
                }), null == c && (l = p.display, c = "none" === l ? "" : l)), p.display = "inline-block")), n.overflow && (p.overflow = "hidden", d.always(function() {
                    p.overflow = n.overflow[0], p.overflowX = n.overflow[1], p.overflowY = n.overflow[2]
                })), u = !1;
                for (r in h) u || (v ? "hidden" in v && (m = v.hidden) : v = Be.access(e, "fxshow", {
                    display: c
                }), i && (v.hidden = !m), m && y([e], !0), d.done(function() {
                    m || y([e]), Be.remove(e, "fxshow");
                    for (r in h) me.style(e, r, h[r])
                })), u = W(m ? v[r] : 0, r, d), r in v || (v[r] = u.start, m && (u.end = u.start, u.start = 0))
            }
        }

        function $(e, t) {
            var n, r, o, i, a;
            for (n in e)
                if (r = me.camelCase(n), o = t[r], i = e[n], me.isArray(i) && (o = i[1], i = e[n] = i[0]), n !== r && (e[r] = i, delete e[n]), a = me.cssHooks[r], a && "expand" in a) {
                    i = a.expand(i), delete e[r];
                    for (n in i) n in e || (e[n] = i[n], t[n] = o)
                } else t[r] = o
        }

        function V(e, t, n) {
            var r, o, i = 0,
                a = V.prefilters.length,
                s = me.Deferred().always(function() {
                    delete u.elem
                }),
                u = function() {
                    if (o) return !1;
                    for (var t = bt || U(), n = Math.max(0, c.startTime + c.duration - t), r = n / c.duration || 0, i = 1 - r, a = 0, u = c.tweens.length; u > a; a++) c.tweens[a].run(i);
                    return s.notifyWith(e, [c, i, n]), 1 > i && u ? n : (s.resolveWith(e, [c]), !1)
                },
                c = s.promise({
                    elem: e,
                    props: me.extend({}, t),
                    opts: me.extend(!0, {
                        specialEasing: {},
                        easing: me.easing._default
                    }, n),
                    originalProperties: t,
                    originalOptions: n,
                    startTime: bt || U(),
                    duration: n.duration,
                    tweens: [],
                    createTween: function(t, n) {
                        var r = me.Tween(e, c.opts, t, n, c.opts.specialEasing[t] || c.opts.easing);
                        return c.tweens.push(r), r
                    },
                    stop: function(t) {
                        var n = 0,
                            r = t ? c.tweens.length : 0;
                        if (o) return this;
                        for (o = !0; r > n; n++) c.tweens[n].run(1);
                        return t ? (s.notifyWith(e, [c, 1, 0]), s.resolveWith(e, [c, t])) : s.rejectWith(e, [c, t]), this
                    }
                }),
                l = c.props;
            for ($(l, c.opts.specialEasing); a > i; i++)
                if (r = V.prefilters[i].call(c, e, l, c.opts)) return me.isFunction(r.stop) && (me._queueHooks(c.elem, c.opts.queue).stop = me.proxy(r.stop, r)), r;
            return me.map(l, W, c), me.isFunction(c.opts.start) && c.opts.start.call(e, c), me.fx.timer(me.extend(u, {
                elem: e,
                anim: c,
                queue: c.opts.queue
            })), c.progress(c.opts.progress).done(c.opts.done, c.opts.complete).fail(c.opts.fail).always(c.opts.always)
        }

        function X(e) {
            return e.getAttribute && e.getAttribute("class") || ""
        }

        function G(e, t, n, r) {
            var o;
            if (me.isArray(t)) me.each(t, function(t, o) {
                n || Dt.test(e) ? r(e, o) : G(e + "[" + ("object" == typeof o && null != o ? t : "") + "]", o, n, r)
            });
            else if (n || "object" !== me.type(t)) r(e, t);
            else
                for (o in t) G(e + "[" + o + "]", t[o], n, r)
        }

        function J(e) {
            return function(t, n) {
                "string" != typeof t && (n = t, t = "*");
                var r, o = 0,
                    i = t.toLowerCase().match(Re) || [];
                if (me.isFunction(n))
                    for (; r = i[o++];) "+" === r[0] ? (r = r.slice(1) || "*", (e[r] = e[r] || []).unshift(n)) : (e[r] = e[r] || []).push(n)
            }
        }

        function Y(e, t, n, r) {
            function o(s) {
                var u;
                return i[s] = !0, me.each(e[s] || [], function(e, s) {
                    var c = s(t, n, r);
                    return "string" != typeof c || a || i[c] ? a ? !(u = c) : void 0 : (t.dataTypes.unshift(c), o(c), !1)
                }), u
            }
            var i = {},
                a = e === Vt;
            return o(t.dataTypes[0]) || !i["*"] && o("*")
        }

        function K(e, t) {
            var n, r, o = me.ajaxSettings.flatOptions || {};
            for (n in t) void 0 !== t[n] && ((o[n] ? e : r || (r = {}))[n] = t[n]);
            return r && me.extend(!0, e, r), e
        }

        function Z(e, t, n) {
            for (var r, o, i, a, s = e.contents, u = e.dataTypes;
                "*" === u[0];) u.shift(), void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
            if (r)
                for (o in s)
                    if (s[o] && s[o].test(r)) {
                        u.unshift(o);
                        break
                    }
            if (u[0] in n) i = u[0];
            else {
                for (o in n) {
                    if (!u[0] || e.converters[o + " " + u[0]]) {
                        i = o;
                        break
                    }
                    a || (a = o)
                }
                i = i || a
            }
            return i ? (i !== u[0] && u.unshift(i), n[i]) : void 0
        }

        function Q(e, t, n, r) {
            var o, i, a, s, u, c = {},
                l = e.dataTypes.slice();
            if (l[1])
                for (a in e.converters) c[a.toLowerCase()] = e.converters[a];
            for (i = l.shift(); i;)
                if (e.responseFields[i] && (n[e.responseFields[i]] = t), !u && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), u = i, i = l.shift())
                    if ("*" === i) i = u;
                    else if ("*" !== u && u !== i) {
                if (a = c[u + " " + i] || c["* " + i], !a)
                    for (o in c)
                        if (s = o.split(" "), s[1] === i && (a = c[u + " " + s[0]] || c["* " + s[0]])) {
                            a === !0 ? a = c[o] : c[o] !== !0 && (i = s[0], l.unshift(s[1]));
                            break
                        }
                if (a !== !0)
                    if (a && e["throws"]) t = a(t);
                    else try {
                        t = a(t)
                    } catch (f) {
                        return {
                            state: "parsererror",
                            error: a ? f : "No conversion from " + u + " to " + i
                        }
                    }
            }
            return {
                state: "success",
                data: t
            }
        }

        function ee(e) {
            return me.isWindow(e) ? e : 9 === e.nodeType && e.defaultView
        }
        var te = [],
            ne = e.document,
            re = Object.getPrototypeOf,
            oe = te.slice,
            ie = te.concat,
            ae = te.push,
            se = te.indexOf,
            ue = {},
            ce = ue.toString,
            le = ue.hasOwnProperty,
            fe = le.toString,
            de = fe.call(Object),
            he = {},
            pe = "3.0.0",
            me = function(e, t) {
                return new me.fn.init(e, t)
            },
            ve = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
            ge = /^-ms-/,
            ye = /-([a-z])/g,
            be = function(e, t) {
                return t.toUpperCase()
            };
        me.fn = me.prototype = {
            jquery: pe,
            constructor: me,
            length: 0,
            toArray: function() {
                return oe.call(this)
            },
            get: function(e) {
                return null != e ? 0 > e ? this[e + this.length] : this[e] : oe.call(this)
            },
            pushStack: function(e) {
                var t = me.merge(this.constructor(), e);
                return t.prevObject = this, t
            },
            each: function(e) {
                return me.each(this, e)
            },
            map: function(e) {
                return this.pushStack(me.map(this, function(t, n) {
                    return e.call(t, n, t)
                }))
            },
            slice: function() {
                return this.pushStack(oe.apply(this, arguments))
            },
            first: function() {
                return this.eq(0)
            },
            last: function() {
                return this.eq(-1)
            },
            eq: function(e) {
                var t = this.length,
                    n = +e + (0 > e ? t : 0);
                return this.pushStack(n >= 0 && t > n ? [this[n]] : [])
            },
            end: function() {
                return this.prevObject || this.constructor()
            },
            push: ae,
            sort: te.sort,
            splice: te.splice
        }, me.extend = me.fn.extend = function() {
            var e, t, n, r, o, i, a = arguments[0] || {},
                s = 1,
                u = arguments.length,
                c = !1;
            for ("boolean" == typeof a && (c = a, a = arguments[s] || {}, s++), "object" == typeof a || me.isFunction(a) || (a = {}), s === u && (a = this, s--); u > s; s++)
                if (null != (e = arguments[s]))
                    for (t in e) n = a[t], r = e[t], a !== r && (c && r && (me.isPlainObject(r) || (o = me.isArray(r))) ? (o ? (o = !1, i = n && me.isArray(n) ? n : []) : i = n && me.isPlainObject(n) ? n : {}, a[t] = me.extend(c, i, r)) : void 0 !== r && (a[t] = r));
            return a
        }, me.extend({
            expando: "jQuery" + (pe + Math.random()).replace(/\D/g, ""),
            isReady: !0,
            error: function(e) {
                throw new Error(e)
            },
            noop: function() {},
            isFunction: function(e) {
                return "function" === me.type(e)
            },
            isArray: Array.isArray,
            isWindow: function(e) {
                return null != e && e === e.window
            },
            isNumeric: function(e) {
                var t = me.type(e);
                return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e))
            },
            isPlainObject: function(e) {
                var t, n;
                return e && "[object Object]" === ce.call(e) ? (t = re(e)) ? (n = le.call(t, "constructor") && t.constructor, "function" == typeof n && fe.call(n) === de) : !0 : !1
            },
            isEmptyObject: function(e) {
                var t;
                for (t in e) return !1;
                return !0
            },
            type: function(e) {
                return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? ue[ce.call(e)] || "object" : typeof e
            },
            globalEval: function(e) {
                n(e)
            },
            camelCase: function(e) {
                return e.replace(ge, "ms-").replace(ye, be)
            },
            nodeName: function(e, t) {
                return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
            },
            each: function(e, t) {
                var n, o = 0;
                if (r(e))
                    for (n = e.length; n > o && t.call(e[o], o, e[o]) !== !1; o++);
                else
                    for (o in e)
                        if (t.call(e[o], o, e[o]) === !1) break; return e
            },
            trim: function(e) {
                return null == e ? "" : (e + "").replace(ve, "")
            },
            makeArray: function(e, t) {
                var n = t || [];
                return null != e && (r(Object(e)) ? me.merge(n, "string" == typeof e ? [e] : e) : ae.call(n, e)), n
            },
            inArray: function(e, t, n) {
                return null == t ? -1 : se.call(t, e, n)
            },
            merge: function(e, t) {
                for (var n = +t.length, r = 0, o = e.length; n > r; r++) e[o++] = t[r];
                return e.length = o, e
            },
            grep: function(e, t, n) {
                for (var r, o = [], i = 0, a = e.length, s = !n; a > i; i++) r = !t(e[i], i), r !== s && o.push(e[i]);
                return o
            },
            map: function(e, t, n) {
                var o, i, a = 0,
                    s = [];
                if (r(e))
                    for (o = e.length; o > a; a++) i = t(e[a], a, n), null != i && s.push(i);
                else
                    for (a in e) i = t(e[a], a, n), null != i && s.push(i);
                return ie.apply([], s)
            },
            guid: 1,
            proxy: function(e, t) {
                var n, r, o;
                return "string" == typeof t && (n = e[t], t = e, e = n), me.isFunction(e) ? (r = oe.call(arguments, 2), o = function() {
                    return e.apply(t || this, r.concat(oe.call(arguments)))
                }, o.guid = e.guid = e.guid || me.guid++, o) : void 0
            },
            now: Date.now,
            support: he
        }), "function" == typeof Symbol && (me.fn[Symbol.iterator] = te[Symbol.iterator]), me.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function(e, t) {
            ue["[object " + t + "]"] = t.toLowerCase()
        });
        var we, xe, Ee = ne.documentElement,
            _e = me.expando.split("").sort(o).join("") === me.expando,
            Te = Ee.matches || Ee.webkitMatchesSelector || Ee.mozMatchesSelector || Ee.oMatchesSelector || Ee.msMatchesSelector,
            je = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g,
            ke = function(e, t) {
                return t ? "\x00" === e ? "\ufffd" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e
            };
        me.extend({
            uniqueSort: i,
            unique: i,
            escapeSelector: a,
            find: function(e, t, n, r) {
                var o, i, a = 0;
                if (n = n || [], t = t || ne, !e || "string" != typeof e) return n;
                if (1 !== (i = t.nodeType) && 9 !== i) return [];
                if (r)
                    for (; o = r[a++];) me.find.matchesSelector(o, e) && n.push(o);
                else me.merge(n, t.querySelectorAll(e));
                return n
            },
            text: function(e) {
                var t, n = "",
                    r = 0,
                    o = e.nodeType;
                if (o) {
                    if (1 === o || 9 === o || 11 === o) return e.textContent;
                    if (3 === o || 4 === o) return e.nodeValue
                } else
                    for (; t = e[r++];) n += me.text(t);
                return n
            },
            contains: function(e, t) {
                var n = 9 === e.nodeType ? e.documentElement : e,
                    r = t && t.parentNode;
                return e === r || !(!r || 1 !== r.nodeType || !n.contains(r))
            },
            isXMLDoc: function(e) {
                var t = e && (e.ownerDocument || e).documentElement;
                return t ? "HTML" !== t.nodeName : !1
            },
            expr: {
                attrHandle: {},
                match: {
                    bool: new RegExp("^(?:checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped)$", "i"),
                    needsContext: /^[\x20\t\r\n\f]*[>+~]/
                }
            }
        }), me.extend(me.find, {
            matches: function(e, t) {
                return me.find(e, null, null, t)
            },
            matchesSelector: function(e, t) {
                return Te.call(e, t)
            },
            attr: function(e, t) {
                var n = me.expr.attrHandle[t.toLowerCase()],
                    r = n && le.call(me.expr.attrHandle, t.toLowerCase()) ? n(e, t, me.isXMLDoc(e)) : void 0;
                return void 0 !== r ? r : e.getAttribute(t)
            }
        });
        var Se = function(e, t, n) {
                for (var r = [], o = void 0 !== n;
                    (e = e[t]) && 9 !== e.nodeType;)
                    if (1 === e.nodeType) {
                        if (o && me(e).is(n)) break;
                        r.push(e)
                    }
                return r
            },
            Oe = function(e, t) {
                for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);
                return n
            },
            Ce = me.expr.match.needsContext,
            Me = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i,
            Le = /^.[^:#\[\.,]*$/;
        me.filter = function(e, t, n) {
            var r = t[0];
            return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? me.find.matchesSelector(r, e) ? [r] : [] : me.find.matches(e, me.grep(t, function(e) {
                return 1 === e.nodeType
            }))
        }, me.fn.extend({
            find: function(e) {
                var t, n, r = this.length,
                    o = this;
                if ("string" != typeof e) return this.pushStack(me(e).filter(function() {
                    for (t = 0; r > t; t++)
                        if (me.contains(o[t], this)) return !0
                }));
                for (n = this.pushStack([]), t = 0; r > t; t++) me.find(e, o[t], n);
                return r > 1 ? me.uniqueSort(n) : n
            },
            filter: function(e) {
                return this.pushStack(s(this, e || [], !1))
            },
            not: function(e) {
                return this.pushStack(s(this, e || [], !0))
            },
            is: function(e) {
                return !!s(this, "string" == typeof e && Ce.test(e) ? me(e) : e || [], !1).length
            }
        });
        var Pe, Ae = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/,
            De = me.fn.init = function(e, t, n) {
                var r, o;
                if (!e) return this;
                if (n = n || Pe, "string" == typeof e) {
                    if (r = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : Ae.exec(e), !r || !r[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
                    if (r[1]) {
                        if (t = t instanceof me ? t[0] : t, me.merge(this, me.parseHTML(r[1], t && t.nodeType ? t.ownerDocument || t : ne, !0)), Me.test(r[1]) && me.isPlainObject(t))
                            for (r in t) me.isFunction(this[r]) ? this[r](t[r]) : this.attr(r, t[r]);
                        return this
                    }
                    return o = ne.getElementById(r[2]), o && (this[0] = o, this.length = 1), this
                }
                return e.nodeType ? (this[0] = e, this.length = 1, this) : me.isFunction(e) ? void 0 !== n.ready ? n.ready(e) : e(me) : me.makeArray(e, this)
            };
        De.prototype = me.fn, Pe = me(ne);
        var Ne = /^(?:parents|prev(?:Until|All))/,
            qe = {
                children: !0,
                contents: !0,
                next: !0,
                prev: !0
            };
        me.fn.extend({
            has: function(e) {
                var t = me(e, this),
                    n = t.length;
                return this.filter(function() {
                    for (var e = 0; n > e; e++)
                        if (me.contains(this, t[e])) return !0
                })
            },
            closest: function(e, t) {
                var n, r = 0,
                    o = this.length,
                    i = [],
                    a = "string" != typeof e && me(e);
                if (!Ce.test(e))
                    for (; o > r; r++)
                        for (n = this[r]; n && n !== t; n = n.parentNode)
                            if (n.nodeType < 11 && (a ? a.index(n) > -1 : 1 === n.nodeType && me.find.matchesSelector(n, e))) {
                                i.push(n);
                                break
                            }
                return this.pushStack(i.length > 1 ? me.uniqueSort(i) : i)
            },
            index: function(e) {
                return e ? "string" == typeof e ? se.call(me(e), this[0]) : se.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
            },
            add: function(e, t) {
                return this.pushStack(me.uniqueSort(me.merge(this.get(), me(e, t))))
            },
            addBack: function(e) {
                return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
            }
        }), me.each({
            parent: function(e) {
                var t = e.parentNode;
                return t && 11 !== t.nodeType ? t : null
            },
            parents: function(e) {
                return Se(e, "parentNode")
            },
            parentsUntil: function(e, t, n) {
                return Se(e, "parentNode", n)
            },
            next: function(e) {
                return u(e, "nextSibling")
            },
            prev: function(e) {
                return u(e, "previousSibling")
            },
            nextAll: function(e) {
                return Se(e, "nextSibling")
            },
            prevAll: function(e) {
                return Se(e, "previousSibling")
            },
            nextUntil: function(e, t, n) {
                return Se(e, "nextSibling", n)
            },
            prevUntil: function(e, t, n) {
                return Se(e, "previousSibling", n)
            },
            siblings: function(e) {
                return Oe((e.parentNode || {}).firstChild, e)
            },
            children: function(e) {
                return Oe(e.firstChild)
            },
            contents: function(e) {
                return e.contentDocument || me.merge([], e.childNodes)
            }
        }, function(e, t) {
            me.fn[e] = function(n, r) {
                var o = me.map(this, t, n);
                return "Until" !== e.slice(-5) && (r = n), r && "string" == typeof r && (o = me.filter(r, o)), this.length > 1 && (qe[e] || me.uniqueSort(o), Ne.test(e) && o.reverse()), this.pushStack(o)
            }
        });
        var Re = /\S+/g;
        me.Callbacks = function(e) {
            e = "string" == typeof e ? c(e) : me.extend({}, e);
            var t, n, r, o, i = [],
                a = [],
                s = -1,
                u = function() {
                    for (o = e.once, r = t = !0; a.length; s = -1)
                        for (n = a.shift(); ++s < i.length;) i[s].apply(n[0], n[1]) === !1 && e.stopOnFalse && (s = i.length, n = !1);
                    e.memory || (n = !1), t = !1, o && (i = n ? [] : "")
                },
                l = {
                    add: function() {
                        return i && (n && !t && (s = i.length - 1, a.push(n)), function r(t) {
                            me.each(t, function(t, n) {
                                me.isFunction(n) ? e.unique && l.has(n) || i.push(n) : n && n.length && "string" !== me.type(n) && r(n)
                            })
                        }(arguments), n && !t && u()), this
                    },
                    remove: function() {
                        return me.each(arguments, function(e, t) {
                            for (var n;
                                (n = me.inArray(t, i, n)) > -1;) i.splice(n, 1), s >= n && s--
                        }), this
                    },
                    has: function(e) {
                        return e ? me.inArray(e, i) > -1 : i.length > 0
                    },
                    empty: function() {
                        return i && (i = []), this
                    },
                    disable: function() {
                        return o = a = [], i = n = "", this
                    },
                    disabled: function() {
                        return !i
                    },
                    lock: function() {
                        return o = a = [], n || t || (i = n = ""), this
                    },
                    locked: function() {
                        return !!o
                    },
                    fireWith: function(e, n) {
                        return o || (n = n || [], n = [e, n.slice ? n.slice() : n], a.push(n), t || u()), this
                    },
                    fire: function() {
                        return l.fireWith(this, arguments), this
                    },
                    fired: function() {
                        return !!r
                    }
                };
            return l
        }, me.extend({
            Deferred: function(t) {
                var n = [
                        ["notify", "progress", me.Callbacks("memory"), me.Callbacks("memory"), 2],
                        ["resolve", "done", me.Callbacks("once memory"), me.Callbacks("once memory"), 0, "resolved"],
                        ["reject", "fail", me.Callbacks("once memory"), me.Callbacks("once memory"), 1, "rejected"]
                    ],
                    r = "pending",
                    o = {
                        state: function() {
                            return r
                        },
                        always: function() {
                            return i.done(arguments).fail(arguments), this
                        },
                        "catch": function(e) {
                            return o.then(null, e)
                        },
                        pipe: function() {
                            var e = arguments;
                            return me.Deferred(function(t) {
                                me.each(n, function(n, r) {
                                    var o = me.isFunction(e[r[4]]) && e[r[4]];
                                    i[r[1]](function() {
                                        var e = o && o.apply(this, arguments);
                                        e && me.isFunction(e.promise) ? e.promise().progress(t.notify).done(t.resolve).fail(t.reject) : t[r[0] + "With"](this, o ? [e] : arguments)
                                    })
                                }), e = null
                            }).promise()
                        },
                        then: function(t, r, o) {
                            function i(t, n, r, o) {
                                return function() {
                                    var s = this,
                                        u = arguments,
                                        c = function() {
                                            var e, c;
                                            if (!(a > t)) {
                                                if (e = r.apply(s, u), e === n.promise()) throw new TypeError("Thenable self-resolution");
                                                c = e && ("object" == typeof e || "function" == typeof e) && e.then, me.isFunction(c) ? o ? c.call(e, i(a, n, l, o), i(a, n, f, o)) : (a++, c.call(e, i(a, n, l, o), i(a, n, f, o), i(a, n, l, n.notifyWith))) : (r !== l && (s = void 0, u = [e]), (o || n.resolveWith)(s, u))
                                            }
                                        },
                                        d = o ? c : function() {
                                            try {
                                                c()
                                            } catch (e) {
                                                me.Deferred.exceptionHook && me.Deferred.exceptionHook(e, d.stackTrace), t + 1 >= a && (r !== f && (s = void 0, u = [e]), n.rejectWith(s, u))
                                            }
                                        };
                                    t ? d() : (me.Deferred.getStackHook && (d.stackTrace = me.Deferred.getStackHook()), e.setTimeout(d))
                                }
                            }
                            var a = 0;
                            return me.Deferred(function(e) {
                                n[0][3].add(i(0, e, me.isFunction(o) ? o : l, e.notifyWith)), n[1][3].add(i(0, e, me.isFunction(t) ? t : l)), n[2][3].add(i(0, e, me.isFunction(r) ? r : f))
                            }).promise()
                        },
                        promise: function(e) {
                            return null != e ? me.extend(e, o) : o
                        }
                    },
                    i = {};
                return me.each(n, function(e, t) {
                    var a = t[2],
                        s = t[5];
                    o[t[1]] = a.add, s && a.add(function() {
                        r = s
                    }, n[3 - e][2].disable, n[0][2].lock), a.add(t[3].fire), i[t[0]] = function() {
                        return i[t[0] + "With"](this === i ? void 0 : this, arguments), this
                    }, i[t[0] + "With"] = a.fireWith
                }), o.promise(i), t && t.call(i, i), i
            },
            when: function(e) {
                var t = arguments.length,
                    n = t,
                    r = Array(n),
                    o = oe.call(arguments),
                    i = me.Deferred(),
                    a = function(e) {
                        return function(n) {
                            r[e] = this, o[e] = arguments.length > 1 ? oe.call(arguments) : n, --t || i.resolveWith(r, o)
                        }
                    };
                if (1 >= t && (d(e, i.done(a(n)).resolve, i.reject), "pending" === i.state() || me.isFunction(o[n] && o[n].then))) return i.then();
                for (; n--;) d(o[n], a(n), i.reject);
                return i.promise()
            }
        });
        var Fe = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
        me.Deferred.exceptionHook = function(t, n) {
            e.console && e.console.warn && t && Fe.test(t.name) && e.console.warn("jQuery.Deferred exception: " + t.message, t.stack, n)
        };
        var Ie = me.Deferred();
        me.fn.ready = function(e) {
            return Ie.then(e), this
        }, me.extend({
            isReady: !1,
            readyWait: 1,
            holdReady: function(e) {
                e ? me.readyWait++ : me.ready(!0)
            },
            ready: function(e) {
                (e === !0 ? --me.readyWait : me.isReady) || (me.isReady = !0, e !== !0 && --me.readyWait > 0 || Ie.resolveWith(ne, [me]))
            }
        }), me.ready.then = Ie.then, "complete" === ne.readyState || "loading" !== ne.readyState && !ne.documentElement.doScroll ? e.setTimeout(me.ready) : (ne.addEventListener("DOMContentLoaded", h), e.addEventListener("load", h));
        var He = function(e, t, n, r, o, i, a) {
                var s = 0,
                    u = e.length,
                    c = null == n;
                if ("object" === me.type(n)) {
                    o = !0;
                    for (s in n) He(e, t, s, n[s], !0, i, a)
                } else if (void 0 !== r && (o = !0, me.isFunction(r) || (a = !0), c && (a ? (t.call(e, r), t = null) : (c = t, t = function(e, t, n) {
                        return c.call(me(e), n)
                    })), t))
                    for (; u > s; s++) t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
                return o ? e : c ? t.call(e) : u ? t(e[0], n) : i
            },
            Ue = function(e) {
                return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
            };
        p.uid = 1, p.prototype = {
            cache: function(e) {
                var t = e[this.expando];
                return t || (t = {}, Ue(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
                    value: t,
                    configurable: !0
                }))), t
            },
            set: function(e, t, n) {
                var r, o = this.cache(e);
                if ("string" == typeof t) o[me.camelCase(t)] = n;
                else
                    for (r in t) o[me.camelCase(r)] = t[r];
                return o
            },
            get: function(e, t) {
                return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][me.camelCase(t)]
            },
            access: function(e, t, n) {
                return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t)
            },
            remove: function(e, t) {
                var n, r = e[this.expando];
                if (void 0 !== r) {
                    if (void 0 !== t) {
                        me.isArray(t) ? t = t.map(me.camelCase) : (t = me.camelCase(t), t = t in r ? [t] : t.match(Re) || []), n = t.length;
                        for (; n--;) delete r[t[n]]
                    }(void 0 === t || me.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando])
                }
            },
            hasData: function(e) {
                var t = e[this.expando];
                return void 0 !== t && !me.isEmptyObject(t)
            }
        };
        var Be = new p,
            We = new p,
            ze = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
            $e = /[A-Z]/g;
        me.extend({
            hasData: function(e) {
                return We.hasData(e) || Be.hasData(e)
            },
            data: function(e, t, n) {
                return We.access(e, t, n)
            },
            removeData: function(e, t) {
                We.remove(e, t)
            },
            _data: function(e, t, n) {
                return Be.access(e, t, n)
            },
            _removeData: function(e, t) {
                Be.remove(e, t)
            }
        }), me.fn.extend({
            data: function(e, t) {
                var n, r, o, i = this[0],
                    a = i && i.attributes;
                if (void 0 === e) {
                    if (this.length && (o = We.get(i), 1 === i.nodeType && !Be.get(i, "hasDataAttrs"))) {
                        for (n = a.length; n--;) a[n] && (r = a[n].name, 0 === r.indexOf("data-") && (r = me.camelCase(r.slice(5)), m(i, r, o[r])));
                        Be.set(i, "hasDataAttrs", !0)
                    }
                    return o
                }
                return "object" == typeof e ? this.each(function() {
                    We.set(this, e)
                }) : He(this, function(t) {
                    var n;
                    if (i && void 0 === t) {
                        if (n = We.get(i, e), void 0 !== n) return n;
                        if (n = m(i, e), void 0 !== n) return n
                    } else this.each(function() {
                        We.set(this, e, t)
                    })
                }, null, t, arguments.length > 1, null, !0)
            },
            removeData: function(e) {
                return this.each(function() {
                    We.remove(this, e)
                })
            }
        }), me.extend({
            queue: function(e, t, n) {
                var r;
                return e ? (t = (t || "fx") + "queue", r = Be.get(e, t), n && (!r || me.isArray(n) ? r = Be.access(e, t, me.makeArray(n)) : r.push(n)), r || []) : void 0
            },
            dequeue: function(e, t) {
                t = t || "fx";
                var n = me.queue(e, t),
                    r = n.length,
                    o = n.shift(),
                    i = me._queueHooks(e, t),
                    a = function() {
                        me.dequeue(e, t)
                    };
                "inprogress" === o && (o = n.shift(), r--), o && ("fx" === t && n.unshift("inprogress"), delete i.stop, o.call(e, a, i)), !r && i && i.empty.fire()
            },
            _queueHooks: function(e, t) {
                var n = t + "queueHooks";
                return Be.get(e, n) || Be.access(e, n, {
                    empty: me.Callbacks("once memory").add(function() {
                        Be.remove(e, [t + "queue", n])
                    })
                })
            }
        }), me.fn.extend({
            queue: function(e, t) {
                var n = 2;
                return "string" != typeof e && (t = e, e = "fx", n--), arguments.length < n ? me.queue(this[0], e) : void 0 === t ? this : this.each(function() {
                    var n = me.queue(this, e, t);
                    me._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && me.dequeue(this, e)
                })
            },
            dequeue: function(e) {
                return this.each(function() {
                    me.dequeue(this, e)
                })
            },
            clearQueue: function(e) {
                return this.queue(e || "fx", [])
            },
            promise: function(e, t) {
                var n, r = 1,
                    o = me.Deferred(),
                    i = this,
                    a = this.length,
                    s = function() {
                        --r || o.resolveWith(i, [i])
                    };
                for ("string" != typeof e && (t = e, e = void 0), e = e || "fx"; a--;) n = Be.get(i[a], e + "queueHooks"), n && n.empty && (r++, n.empty.add(s));
                return s(), o.promise(t)
            }
        });
        var Ve = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
            Xe = new RegExp("^(?:([+-])=|)(" + Ve + ")([a-z%]*)$", "i"),
            Ge = ["Top", "Right", "Bottom", "Left"],
            Je = function(e, t) {
                return e = t || e, "none" === e.style.display || "" === e.style.display && me.contains(e.ownerDocument, e) && "none" === me.css(e, "display")
            },
            Ye = function(e, t, n, r) {
                var o, i, a = {};
                for (i in t) a[i] = e.style[i], e.style[i] = t[i];
                o = n.apply(e, r || []);
                for (i in t) e.style[i] = a[i];
                return o
            },
            Ke = {};
        me.fn.extend({
            show: function() {
                return y(this, !0)
            },
            hide: function() {
                return y(this)
            },
            toggle: function(e) {
                return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function() {
                    Je(this) ? me(this).show() : me(this).hide()
                })
            }
        });
        var Ze = /^(?:checkbox|radio)$/i,
            Qe = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i,
            et = /^$|\/(?:java|ecma)script/i,
            tt = {
                option: [1, "<select multiple='multiple'>", "</select>"],
                thead: [1, "<table>", "</table>"],
                col: [2, "<table><colgroup>", "</colgroup></table>"],
                tr: [2, "<table><tbody>", "</tbody></table>"],
                td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
                _default: [0, "", ""]
            };
        tt.optgroup = tt.option, tt.tbody = tt.tfoot = tt.colgroup = tt.caption = tt.thead, tt.th = tt.td;
        var nt = /<|&#?\w+;/;
        ! function() {
            var e = ne.createDocumentFragment(),
                t = e.appendChild(ne.createElement("div")),
                n = ne.createElement("input");
            n.setAttribute("type", "radio"), n.setAttribute("checked", "checked"), n.setAttribute("name", "t"), t.appendChild(n), he.checkClone = t.cloneNode(!0).cloneNode(!0).lastChild.checked, t.innerHTML = "<textarea>x</textarea>", he.noCloneChecked = !!t.cloneNode(!0).lastChild.defaultValue
        }();
        var rt = /^key/,
            ot = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
            it = /^([^.]*)(?:\.(.+)|)/;
        me.event = {
            global: {},
            add: function(e, t, n, r, o) {
                var i, a, s, u, c, l, f, d, h, p, m, v = Be.get(e);
                if (v)
                    for (n.handler && (i = n, n = i.handler, o = i.selector), o && me.find.matchesSelector(Ee, o), n.guid || (n.guid = me.guid++), (u = v.events) || (u = v.events = {}), (a = v.handle) || (a = v.handle = function(t) {
                            return "undefined" != typeof me && me.event.triggered !== t.type ? me.event.dispatch.apply(e, arguments) : void 0;
                        }), t = (t || "").match(Re) || [""], c = t.length; c--;) s = it.exec(t[c]) || [], h = m = s[1], p = (s[2] || "").split(".").sort(), h && (f = me.event.special[h] || {}, h = (o ? f.delegateType : f.bindType) || h, f = me.event.special[h] || {}, l = me.extend({
                        type: h,
                        origType: m,
                        data: r,
                        handler: n,
                        guid: n.guid,
                        selector: o,
                        needsContext: o && me.expr.match.needsContext.test(o),
                        namespace: p.join(".")
                    }, i), (d = u[h]) || (d = u[h] = [], d.delegateCount = 0, f.setup && f.setup.call(e, r, p, a) !== !1 || e.addEventListener && e.addEventListener(h, a)), f.add && (f.add.call(e, l), l.handler.guid || (l.handler.guid = n.guid)), o ? d.splice(d.delegateCount++, 0, l) : d.push(l), me.event.global[h] = !0)
            },
            remove: function(e, t, n, r, o) {
                var i, a, s, u, c, l, f, d, h, p, m, v = Be.hasData(e) && Be.get(e);
                if (v && (u = v.events)) {
                    for (t = (t || "").match(Re) || [""], c = t.length; c--;)
                        if (s = it.exec(t[c]) || [], h = m = s[1], p = (s[2] || "").split(".").sort(), h) {
                            for (f = me.event.special[h] || {}, h = (r ? f.delegateType : f.bindType) || h, d = u[h] || [], s = s[2] && new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)"), a = i = d.length; i--;) l = d[i], !o && m !== l.origType || n && n.guid !== l.guid || s && !s.test(l.namespace) || r && r !== l.selector && ("**" !== r || !l.selector) || (d.splice(i, 1), l.selector && d.delegateCount--, f.remove && f.remove.call(e, l));
                            a && !d.length && (f.teardown && f.teardown.call(e, p, v.handle) !== !1 || me.removeEvent(e, h, v.handle), delete u[h])
                        } else
                            for (h in u) me.event.remove(e, h + t[c], n, r, !0);
                    me.isEmptyObject(u) && Be.remove(e, "handle events")
                }
            },
            dispatch: function(e) {
                var t, n, r, o, i, a, s = me.event.fix(e),
                    u = new Array(arguments.length),
                    c = (Be.get(this, "events") || {})[s.type] || [],
                    l = me.event.special[s.type] || {};
                for (u[0] = s, t = 1; t < arguments.length; t++) u[t] = arguments[t];
                if (s.delegateTarget = this, !l.preDispatch || l.preDispatch.call(this, s) !== !1) {
                    for (a = me.event.handlers.call(this, s, c), t = 0;
                        (o = a[t++]) && !s.isPropagationStopped();)
                        for (s.currentTarget = o.elem, n = 0;
                            (i = o.handlers[n++]) && !s.isImmediatePropagationStopped();)(!s.rnamespace || s.rnamespace.test(i.namespace)) && (s.handleObj = i, s.data = i.data, r = ((me.event.special[i.origType] || {}).handle || i.handler).apply(o.elem, u), void 0 !== r && (s.result = r) === !1 && (s.preventDefault(), s.stopPropagation()));
                    return l.postDispatch && l.postDispatch.call(this, s), s.result
                }
            },
            handlers: function(e, t) {
                var n, r, o, i, a = [],
                    s = t.delegateCount,
                    u = e.target;
                if (s && u.nodeType && ("click" !== e.type || isNaN(e.button) || e.button < 1))
                    for (; u !== this; u = u.parentNode || this)
                        if (1 === u.nodeType && (u.disabled !== !0 || "click" !== e.type)) {
                            for (r = [], n = 0; s > n; n++) i = t[n], o = i.selector + " ", void 0 === r[o] && (r[o] = i.needsContext ? me(o, this).index(u) > -1 : me.find(o, this, null, [u]).length), r[o] && r.push(i);
                            r.length && a.push({
                                elem: u,
                                handlers: r
                            })
                        }
                return s < t.length && a.push({
                    elem: this,
                    handlers: t.slice(s)
                }), a
            },
            addProp: function(e, t) {
                Object.defineProperty(me.Event.prototype, e, {
                    enumerable: !0,
                    configurable: !0,
                    get: me.isFunction(t) ? function() {
                        return this.originalEvent ? t(this.originalEvent) : void 0
                    } : function() {
                        return this.originalEvent ? this.originalEvent[e] : void 0
                    },
                    set: function(t) {
                        Object.defineProperty(this, e, {
                            enumerable: !0,
                            configurable: !0,
                            writable: !0,
                            value: t
                        })
                    }
                })
            },
            fix: function(e) {
                return e[me.expando] ? e : new me.Event(e)
            },
            special: {
                load: {
                    noBubble: !0
                },
                focus: {
                    trigger: function() {
                        return this !== T() && this.focus ? (this.focus(), !1) : void 0
                    },
                    delegateType: "focusin"
                },
                blur: {
                    trigger: function() {
                        return this === T() && this.blur ? (this.blur(), !1) : void 0
                    },
                    delegateType: "focusout"
                },
                click: {
                    trigger: function() {
                        return "checkbox" === this.type && this.click && me.nodeName(this, "input") ? (this.click(), !1) : void 0
                    },
                    _default: function(e) {
                        return me.nodeName(e.target, "a")
                    }
                },
                beforeunload: {
                    postDispatch: function(e) {
                        void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
                    }
                }
            }
        }, me.removeEvent = function(e, t, n) {
            e.removeEventListener && e.removeEventListener(t, n)
        }, me.Event = function(e, t) {
            return this instanceof me.Event ? (e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && e.returnValue === !1 ? E : _, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && me.extend(this, t), this.timeStamp = e && e.timeStamp || me.now(), void(this[me.expando] = !0)) : new me.Event(e, t)
        }, me.Event.prototype = {
            constructor: me.Event,
            isDefaultPrevented: _,
            isPropagationStopped: _,
            isImmediatePropagationStopped: _,
            isSimulated: !1,
            preventDefault: function() {
                var e = this.originalEvent;
                this.isDefaultPrevented = E, e && !this.isSimulated && e.preventDefault()
            },
            stopPropagation: function() {
                var e = this.originalEvent;
                this.isPropagationStopped = E, e && !this.isSimulated && e.stopPropagation()
            },
            stopImmediatePropagation: function() {
                var e = this.originalEvent;
                this.isImmediatePropagationStopped = E, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation()
            }
        }, me.each({
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
            which: function(e) {
                var t = e.button;
                return null == e.which && rt.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && ot.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which
            }
        }, me.event.addProp), me.each({
            mouseenter: "mouseover",
            mouseleave: "mouseout",
            pointerenter: "pointerover",
            pointerleave: "pointerout"
        }, function(e, t) {
            me.event.special[e] = {
                delegateType: t,
                bindType: t,
                handle: function(e) {
                    var n, r = this,
                        o = e.relatedTarget,
                        i = e.handleObj;
                    return (!o || o !== r && !me.contains(r, o)) && (e.type = i.origType, n = i.handler.apply(this, arguments), e.type = t), n
                }
            }
        }), me.fn.extend({
            on: function(e, t, n, r) {
                return j(this, e, t, n, r)
            },
            one: function(e, t, n, r) {
                return j(this, e, t, n, r, 1)
            },
            off: function(e, t, n) {
                var r, o;
                if (e && e.preventDefault && e.handleObj) return r = e.handleObj, me(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this;
                if ("object" == typeof e) {
                    for (o in e) this.off(o, t, e[o]);
                    return this
                }
                return (t === !1 || "function" == typeof t) && (n = t, t = void 0), n === !1 && (n = _), this.each(function() {
                    me.event.remove(this, e, n, t)
                })
            }
        });
        var at = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
            st = /<script|<style|<link/i,
            ut = /checked\s*(?:[^=]|=\s*.checked.)/i,
            ct = /^true\/(.*)/,
            lt = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;
        me.extend({
            htmlPrefilter: function(e) {
                return e.replace(at, "<$1></$2>")
            },
            clone: function(e, t, n) {
                var r, o, i, a, s = e.cloneNode(!0),
                    u = me.contains(e.ownerDocument, e);
                if (!(he.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || me.isXMLDoc(e)))
                    for (a = b(s), i = b(e), r = 0, o = i.length; o > r; r++) M(i[r], a[r]);
                if (t)
                    if (n)
                        for (i = i || b(e), a = a || b(s), r = 0, o = i.length; o > r; r++) C(i[r], a[r]);
                    else C(e, s);
                return a = b(s, "script"), a.length > 0 && w(a, !u && b(e, "script")), s
            },
            cleanData: function(e) {
                for (var t, n, r, o = me.event.special, i = 0; void 0 !== (n = e[i]); i++)
                    if (Ue(n)) {
                        if (t = n[Be.expando]) {
                            if (t.events)
                                for (r in t.events) o[r] ? me.event.remove(n, r) : me.removeEvent(n, r, t.handle);
                            n[Be.expando] = void 0
                        }
                        n[We.expando] && (n[We.expando] = void 0)
                    }
            }
        }), me.fn.extend({
            detach: function(e) {
                return P(this, e, !0)
            },
            remove: function(e) {
                return P(this, e)
            },
            text: function(e) {
                return He(this, function(e) {
                    return void 0 === e ? me.text(this) : this.empty().each(function() {
                        (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) && (this.textContent = e)
                    })
                }, null, e, arguments.length)
            },
            append: function() {
                return L(this, arguments, function(e) {
                    if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                        var t = k(this, e);
                        t.appendChild(e)
                    }
                })
            },
            prepend: function() {
                return L(this, arguments, function(e) {
                    if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                        var t = k(this, e);
                        t.insertBefore(e, t.firstChild)
                    }
                })
            },
            before: function() {
                return L(this, arguments, function(e) {
                    this.parentNode && this.parentNode.insertBefore(e, this)
                })
            },
            after: function() {
                return L(this, arguments, function(e) {
                    this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
                })
            },
            empty: function() {
                for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (me.cleanData(b(e, !1)), e.textContent = "");
                return this
            },
            clone: function(e, t) {
                return e = null == e ? !1 : e, t = null == t ? e : t, this.map(function() {
                    return me.clone(this, e, t)
                })
            },
            html: function(e) {
                return He(this, function(e) {
                    var t = this[0] || {},
                        n = 0,
                        r = this.length;
                    if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
                    if ("string" == typeof e && !st.test(e) && !tt[(Qe.exec(e) || ["", ""])[1].toLowerCase()]) {
                        e = me.htmlPrefilter(e);
                        try {
                            for (; r > n; n++) t = this[n] || {}, 1 === t.nodeType && (me.cleanData(b(t, !1)), t.innerHTML = e);
                            t = 0
                        } catch (o) {}
                    }
                    t && this.empty().append(e)
                }, null, e, arguments.length)
            },
            replaceWith: function() {
                var e = [];
                return L(this, arguments, function(t) {
                    var n = this.parentNode;
                    me.inArray(this, e) < 0 && (me.cleanData(b(this)), n && n.replaceChild(t, this))
                }, e)
            }
        }), me.each({
            appendTo: "append",
            prependTo: "prepend",
            insertBefore: "before",
            insertAfter: "after",
            replaceAll: "replaceWith"
        }, function(e, t) {
            me.fn[e] = function(e) {
                for (var n, r = [], o = me(e), i = o.length - 1, a = 0; i >= a; a++) n = a === i ? this : this.clone(!0), me(o[a])[t](n), ae.apply(r, n.get());
                return this.pushStack(r)
            }
        });
        var ft = /^margin/,
            dt = new RegExp("^(" + Ve + ")(?!px)[a-z%]+$", "i"),
            ht = function(t) {
                var n = t.ownerDocument.defaultView;
                return n && n.opener || (n = e), n.getComputedStyle(t)
            };
        ! function() {
            function t() {
                if (s) {
                    s.style.cssText = "box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%", s.innerHTML = "", Ee.appendChild(a);
                    var t = e.getComputedStyle(s);
                    n = "1%" !== t.top, i = "2px" === t.marginLeft, r = "4px" === t.width, s.style.marginRight = "50%", o = "4px" === t.marginRight, Ee.removeChild(a), s = null
                }
            }
            var n, r, o, i, a = ne.createElement("div"),
                s = ne.createElement("div");
            s.style && (s.style.backgroundClip = "content-box", s.cloneNode(!0).style.backgroundClip = "", he.clearCloneStyle = "content-box" === s.style.backgroundClip, a.style.cssText = "border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute", a.appendChild(s), me.extend(he, {
                pixelPosition: function() {
                    return t(), n
                },
                boxSizingReliable: function() {
                    return t(), r
                },
                pixelMarginRight: function() {
                    return t(), o
                },
                reliableMarginLeft: function() {
                    return t(), i
                }
            }))
        }();
        var pt = /^(none|table(?!-c[ea]).+)/,
            mt = {
                position: "absolute",
                visibility: "hidden",
                display: "block"
            },
            vt = {
                letterSpacing: "0",
                fontWeight: "400"
            },
            gt = ["Webkit", "Moz", "ms"],
            yt = ne.createElement("div").style;
        me.extend({
            cssHooks: {
                opacity: {
                    get: function(e, t) {
                        if (t) {
                            var n = A(e, "opacity");
                            return "" === n ? "1" : n
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
                lineHeight: !0,
                opacity: !0,
                order: !0,
                orphans: !0,
                widows: !0,
                zIndex: !0,
                zoom: !0
            },
            cssProps: {
                "float": "cssFloat"
            },
            style: function(e, t, n, r) {
                if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                    var o, i, a, s = me.camelCase(t),
                        u = e.style;
                    return t = me.cssProps[s] || (me.cssProps[s] = N(s) || s), a = me.cssHooks[t] || me.cssHooks[s], void 0 === n ? a && "get" in a && void 0 !== (o = a.get(e, !1, r)) ? o : u[t] : (i = typeof n, "string" === i && (o = Xe.exec(n)) && o[1] && (n = v(e, t, o), i = "number"), null != n && n === n && ("number" === i && (n += o && o[3] || (me.cssNumber[s] ? "" : "px")), he.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (u[t] = "inherit"), a && "set" in a && void 0 === (n = a.set(e, n, r)) || (u[t] = n)), void 0)
                }
            },
            css: function(e, t, n, r) {
                var o, i, a, s = me.camelCase(t);
                return t = me.cssProps[s] || (me.cssProps[s] = N(s) || s), a = me.cssHooks[t] || me.cssHooks[s], a && "get" in a && (o = a.get(e, !0, n)), void 0 === o && (o = A(e, t, r)), "normal" === o && t in vt && (o = vt[t]), "" === n || n ? (i = parseFloat(o), n === !0 || isFinite(i) ? i || 0 : o) : o
            }
        }), me.each(["height", "width"], function(e, t) {
            me.cssHooks[t] = {
                get: function(e, n, r) {
                    return n ? !pt.test(me.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? F(e, t, r) : Ye(e, mt, function() {
                        return F(e, t, r)
                    }) : void 0
                },
                set: function(e, n, r) {
                    var o, i = r && ht(e),
                        a = r && R(e, t, r, "border-box" === me.css(e, "boxSizing", !1, i), i);
                    return a && (o = Xe.exec(n)) && "px" !== (o[3] || "px") && (e.style[t] = n, n = me.css(e, t)), q(e, n, a)
                }
            }
        }), me.cssHooks.marginLeft = D(he.reliableMarginLeft, function(e, t) {
            return t ? (parseFloat(A(e, "marginLeft")) || e.getBoundingClientRect().left - Ye(e, {
                marginLeft: 0
            }, function() {
                return e.getBoundingClientRect().left
            })) + "px" : void 0
        }), me.each({
            margin: "",
            padding: "",
            border: "Width"
        }, function(e, t) {
            me.cssHooks[e + t] = {
                expand: function(n) {
                    for (var r = 0, o = {}, i = "string" == typeof n ? n.split(" ") : [n]; 4 > r; r++) o[e + Ge[r] + t] = i[r] || i[r - 2] || i[0];
                    return o
                }
            }, ft.test(e) || (me.cssHooks[e + t].set = q)
        }), me.fn.extend({
            css: function(e, t) {
                return He(this, function(e, t, n) {
                    var r, o, i = {},
                        a = 0;
                    if (me.isArray(t)) {
                        for (r = ht(e), o = t.length; o > a; a++) i[t[a]] = me.css(e, t[a], !1, r);
                        return i
                    }
                    return void 0 !== n ? me.style(e, t, n) : me.css(e, t)
                }, e, t, arguments.length > 1)
            }
        }), me.Tween = I, I.prototype = {
            constructor: I,
            init: function(e, t, n, r, o, i) {
                this.elem = e, this.prop = n, this.easing = o || me.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = r, this.unit = i || (me.cssNumber[n] ? "" : "px")
            },
            cur: function() {
                var e = I.propHooks[this.prop];
                return e && e.get ? e.get(this) : I.propHooks._default.get(this)
            },
            run: function(e) {
                var t, n = I.propHooks[this.prop];
                return this.options.duration ? this.pos = t = me.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : I.propHooks._default.set(this), this
            }
        }, I.prototype.init.prototype = I.prototype, I.propHooks = {
            _default: {
                get: function(e) {
                    var t;
                    return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = me.css(e.elem, e.prop, ""), t && "auto" !== t ? t : 0)
                },
                set: function(e) {
                    me.fx.step[e.prop] ? me.fx.step[e.prop](e) : 1 !== e.elem.nodeType || null == e.elem.style[me.cssProps[e.prop]] && !me.cssHooks[e.prop] ? e.elem[e.prop] = e.now : me.style(e.elem, e.prop, e.now + e.unit)
                }
            }
        }, I.propHooks.scrollTop = I.propHooks.scrollLeft = {
            set: function(e) {
                e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
            }
        }, me.easing = {
            linear: function(e) {
                return e
            },
            swing: function(e) {
                return .5 - Math.cos(e * Math.PI) / 2
            },
            _default: "swing"
        }, me.fx = I.prototype.init, me.fx.step = {};
        var bt, wt, xt = /^(?:toggle|show|hide)$/,
            Et = /queueHooks$/;
        me.Animation = me.extend(V, {
                tweeners: {
                    "*": [function(e, t) {
                        var n = this.createTween(e, t);
                        return v(n.elem, e, Xe.exec(t), n), n
                    }]
                },
                tweener: function(e, t) {
                    me.isFunction(e) ? (t = e, e = ["*"]) : e = e.match(Re);
                    for (var n, r = 0, o = e.length; o > r; r++) n = e[r], V.tweeners[n] = V.tweeners[n] || [], V.tweeners[n].unshift(t)
                },
                prefilters: [z],
                prefilter: function(e, t) {
                    t ? V.prefilters.unshift(e) : V.prefilters.push(e)
                }
            }), me.speed = function(e, t, n) {
                var r = e && "object" == typeof e ? me.extend({}, e) : {
                    complete: n || !n && t || me.isFunction(e) && e,
                    duration: e,
                    easing: n && t || t && !me.isFunction(t) && t
                };
                return me.fx.off || ne.hidden ? r.duration = 0 : r.duration = "number" == typeof r.duration ? r.duration : r.duration in me.fx.speeds ? me.fx.speeds[r.duration] : me.fx.speeds._default, (null == r.queue || r.queue === !0) && (r.queue = "fx"), r.old = r.complete, r.complete = function() {
                    me.isFunction(r.old) && r.old.call(this), r.queue && me.dequeue(this, r.queue)
                }, r
            }, me.fn.extend({
                fadeTo: function(e, t, n, r) {
                    return this.filter(Je).css("opacity", 0).show().end().animate({
                        opacity: t
                    }, e, n, r)
                },
                animate: function(e, t, n, r) {
                    var o = me.isEmptyObject(e),
                        i = me.speed(t, n, r),
                        a = function() {
                            var t = V(this, me.extend({}, e), i);
                            (o || Be.get(this, "finish")) && t.stop(!0)
                        };
                    return a.finish = a, o || i.queue === !1 ? this.each(a) : this.queue(i.queue, a)
                },
                stop: function(e, t, n) {
                    var r = function(e) {
                        var t = e.stop;
                        delete e.stop, t(n)
                    };
                    return "string" != typeof e && (n = t, t = e, e = void 0), t && e !== !1 && this.queue(e || "fx", []), this.each(function() {
                        var t = !0,
                            o = null != e && e + "queueHooks",
                            i = me.timers,
                            a = Be.get(this);
                        if (o) a[o] && a[o].stop && r(a[o]);
                        else
                            for (o in a) a[o] && a[o].stop && Et.test(o) && r(a[o]);
                        for (o = i.length; o--;) i[o].elem !== this || null != e && i[o].queue !== e || (i[o].anim.stop(n), t = !1, i.splice(o, 1));
                        (t || !n) && me.dequeue(this, e)
                    })
                },
                finish: function(e) {
                    return e !== !1 && (e = e || "fx"), this.each(function() {
                        var t, n = Be.get(this),
                            r = n[e + "queue"],
                            o = n[e + "queueHooks"],
                            i = me.timers,
                            a = r ? r.length : 0;
                        for (n.finish = !0, me.queue(this, e, []), o && o.stop && o.stop.call(this, !0), t = i.length; t--;) i[t].elem === this && i[t].queue === e && (i[t].anim.stop(!0), i.splice(t, 1));
                        for (t = 0; a > t; t++) r[t] && r[t].finish && r[t].finish.call(this);
                        delete n.finish
                    })
                }
            }), me.each(["toggle", "show", "hide"], function(e, t) {
                var n = me.fn[t];
                me.fn[t] = function(e, r, o) {
                    return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(B(t, !0), e, r, o)
                }
            }), me.each({
                slideDown: B("show"),
                slideUp: B("hide"),
                slideToggle: B("toggle"),
                fadeIn: {
                    opacity: "show"
                },
                fadeOut: {
                    opacity: "hide"
                },
                fadeToggle: {
                    opacity: "toggle"
                }
            }, function(e, t) {
                me.fn[e] = function(e, n, r) {
                    return this.animate(t, e, n, r)
                }
            }), me.timers = [], me.fx.tick = function() {
                var e, t = 0,
                    n = me.timers;
                for (bt = me.now(); t < n.length; t++) e = n[t], e() || n[t] !== e || n.splice(t--, 1);
                n.length || me.fx.stop(), bt = void 0
            }, me.fx.timer = function(e) {
                me.timers.push(e), e() ? me.fx.start() : me.timers.pop()
            }, me.fx.interval = 13, me.fx.start = function() {
                wt || (wt = e.requestAnimationFrame ? e.requestAnimationFrame(H) : e.setInterval(me.fx.tick, me.fx.interval))
            }, me.fx.stop = function() {
                e.cancelAnimationFrame ? e.cancelAnimationFrame(wt) : e.clearInterval(wt), wt = null
            }, me.fx.speeds = {
                slow: 600,
                fast: 200,
                _default: 400
            }, me.fn.delay = function(t, n) {
                return t = me.fx ? me.fx.speeds[t] || t : t, n = n || "fx", this.queue(n, function(n, r) {
                    var o = e.setTimeout(n, t);
                    r.stop = function() {
                        e.clearTimeout(o)
                    }
                })
            },
            function() {
                var e = ne.createElement("input"),
                    t = ne.createElement("select"),
                    n = t.appendChild(ne.createElement("option"));
                e.type = "checkbox", he.checkOn = "" !== e.value, he.optSelected = n.selected, e = ne.createElement("input"), e.value = "t", e.type = "radio", he.radioValue = "t" === e.value
            }();
        var _t, Tt = me.expr.attrHandle;
        me.fn.extend({
            attr: function(e, t) {
                return He(this, me.attr, e, t, arguments.length > 1)
            },
            removeAttr: function(e) {
                return this.each(function() {
                    me.removeAttr(this, e)
                })
            }
        }), me.extend({
            attr: function(e, t, n) {
                var r, o, i = e.nodeType;
                if (3 !== i && 8 !== i && 2 !== i) return "undefined" == typeof e.getAttribute ? me.prop(e, t, n) : (1 === i && me.isXMLDoc(e) || (o = me.attrHooks[t.toLowerCase()] || (me.expr.match.bool.test(t) ? _t : void 0)), void 0 !== n ? null === n ? void me.removeAttr(e, t) : o && "set" in o && void 0 !== (r = o.set(e, n, t)) ? r : (e.setAttribute(t, n + ""), n) : o && "get" in o && null !== (r = o.get(e, t)) ? r : (r = me.find.attr(e, t), null == r ? void 0 : r))
            },
            attrHooks: {
                type: {
                    set: function(e, t) {
                        if (!he.radioValue && "radio" === t && me.nodeName(e, "input")) {
                            var n = e.value;
                            return e.setAttribute("type", t), n && (e.value = n), t
                        }
                    }
                }
            },
            removeAttr: function(e, t) {
                var n, r = 0,
                    o = t && t.match(Re);
                if (o && 1 === e.nodeType)
                    for (; n = o[r++];) e.removeAttribute(n)
            }
        }), _t = {
            set: function(e, t, n) {
                return t === !1 ? me.removeAttr(e, n) : e.setAttribute(n, n), n
            }
        }, me.each(me.expr.match.bool.source.match(/\w+/g), function(e, t) {
            var n = Tt[t] || me.find.attr;
            Tt[t] = function(e, t, r) {
                var o, i, a = t.toLowerCase();
                return r || (i = Tt[a], Tt[a] = o, o = null != n(e, t, r) ? a : null, Tt[a] = i), o
            }
        });
        var jt = /^(?:input|select|textarea|button)$/i,
            kt = /^(?:a|area)$/i;
        me.fn.extend({
            prop: function(e, t) {
                return He(this, me.prop, e, t, arguments.length > 1)
            },
            removeProp: function(e) {
                return this.each(function() {
                    delete this[me.propFix[e] || e]
                })
            }
        }), me.extend({
            prop: function(e, t, n) {
                var r, o, i = e.nodeType;
                if (3 !== i && 8 !== i && 2 !== i) return 1 === i && me.isXMLDoc(e) || (t = me.propFix[t] || t, o = me.propHooks[t]), void 0 !== n ? o && "set" in o && void 0 !== (r = o.set(e, n, t)) ? r : e[t] = n : o && "get" in o && null !== (r = o.get(e, t)) ? r : e[t]
            },
            propHooks: {
                tabIndex: {
                    get: function(e) {
                        var t = me.find.attr(e, "tabindex");
                        return t ? parseInt(t, 10) : jt.test(e.nodeName) || kt.test(e.nodeName) && e.href ? 0 : -1
                    }
                }
            },
            propFix: {
                "for": "htmlFor",
                "class": "className"
            }
        }), he.optSelected || (me.propHooks.selected = {
            get: function(e) {
                var t = e.parentNode;
                return t && t.parentNode && t.parentNode.selectedIndex, null
            },
            set: function(e) {
                var t = e.parentNode;
                t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
            }
        }), me.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
            me.propFix[this.toLowerCase()] = this
        });
        var St = /[\t\r\n\f]/g;
        me.fn.extend({
            addClass: function(e) {
                var t, n, r, o, i, a, s, u = 0;
                if (me.isFunction(e)) return this.each(function(t) {
                    me(this).addClass(e.call(this, t, X(this)))
                });
                if ("string" == typeof e && e)
                    for (t = e.match(Re) || []; n = this[u++];)
                        if (o = X(n), r = 1 === n.nodeType && (" " + o + " ").replace(St, " ")) {
                            for (a = 0; i = t[a++];) r.indexOf(" " + i + " ") < 0 && (r += i + " ");
                            s = me.trim(r), o !== s && n.setAttribute("class", s)
                        }
                return this
            },
            removeClass: function(e) {
                var t, n, r, o, i, a, s, u = 0;
                if (me.isFunction(e)) return this.each(function(t) {
                    me(this).removeClass(e.call(this, t, X(this)))
                });
                if (!arguments.length) return this.attr("class", "");
                if ("string" == typeof e && e)
                    for (t = e.match(Re) || []; n = this[u++];)
                        if (o = X(n), r = 1 === n.nodeType && (" " + o + " ").replace(St, " ")) {
                            for (a = 0; i = t[a++];)
                                for (; r.indexOf(" " + i + " ") > -1;) r = r.replace(" " + i + " ", " ");
                            s = me.trim(r), o !== s && n.setAttribute("class", s)
                        }
                return this
            },
            toggleClass: function(e, t) {
                var n = typeof e;
                return "boolean" == typeof t && "string" === n ? t ? this.addClass(e) : this.removeClass(e) : me.isFunction(e) ? this.each(function(n) {
                    me(this).toggleClass(e.call(this, n, X(this), t), t)
                }) : this.each(function() {
                    var t, r, o, i;
                    if ("string" === n)
                        for (r = 0, o = me(this), i = e.match(Re) || []; t = i[r++];) o.hasClass(t) ? o.removeClass(t) : o.addClass(t);
                    else(void 0 === e || "boolean" === n) && (t = X(this), t && Be.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || e === !1 ? "" : Be.get(this, "__className__") || ""))
                })
            },
            hasClass: function(e) {
                var t, n, r = 0;
                for (t = " " + e + " "; n = this[r++];)
                    if (1 === n.nodeType && (" " + X(n) + " ").replace(St, " ").indexOf(t) > -1) return !0;
                return !1
            }
        });
        var Ot = /\r/g,
            Ct = /[\x20\t\r\n\f]+/g;
        me.fn.extend({
            val: function(e) {
                var t, n, r, o = this[0]; {
                    if (arguments.length) return r = me.isFunction(e), this.each(function(n) {
                        var o;
                        1 === this.nodeType && (o = r ? e.call(this, n, me(this).val()) : e, null == o ? o = "" : "number" == typeof o ? o += "" : me.isArray(o) && (o = me.map(o, function(e) {
                            return null == e ? "" : e + ""
                        })), t = me.valHooks[this.type] || me.valHooks[this.nodeName.toLowerCase()], t && "set" in t && void 0 !== t.set(this, o, "value") || (this.value = o))
                    });
                    if (o) return t = me.valHooks[o.type] || me.valHooks[o.nodeName.toLowerCase()], t && "get" in t && void 0 !== (n = t.get(o, "value")) ? n : (n = o.value, "string" == typeof n ? n.replace(Ot, "") : null == n ? "" : n)
                }
            }
        }), me.extend({
            valHooks: {
                option: {
                    get: function(e) {
                        var t = me.find.attr(e, "value");
                        return null != t ? t : me.trim(me.text(e)).replace(Ct, " ")
                    }
                },
                select: {
                    get: function(e) {
                        for (var t, n, r = e.options, o = e.selectedIndex, i = "select-one" === e.type, a = i ? null : [], s = i ? o + 1 : r.length, u = 0 > o ? s : i ? o : 0; s > u; u++)
                            if (n = r[u], (n.selected || u === o) && !n.disabled && (!n.parentNode.disabled || !me.nodeName(n.parentNode, "optgroup"))) {
                                if (t = me(n).val(), i) return t;
                                a.push(t)
                            }
                        return a
                    },
                    set: function(e, t) {
                        for (var n, r, o = e.options, i = me.makeArray(t), a = o.length; a--;) r = o[a], (r.selected = me.inArray(me.valHooks.option.get(r), i) > -1) && (n = !0);
                        return n || (e.selectedIndex = -1), i
                    }
                }
            }
        }), me.each(["radio", "checkbox"], function() {
            me.valHooks[this] = {
                set: function(e, t) {
                    return me.isArray(t) ? e.checked = me.inArray(me(e).val(), t) > -1 : void 0
                }
            }, he.checkOn || (me.valHooks[this].get = function(e) {
                return null === e.getAttribute("value") ? "on" : e.value
            })
        });
        var Mt = /^(?:focusinfocus|focusoutblur)$/;
        me.extend(me.event, {
            trigger: function(t, n, r, o) {
                var i, a, s, u, c, l, f, d = [r || ne],
                    h = le.call(t, "type") ? t.type : t,
                    p = le.call(t, "namespace") ? t.namespace.split(".") : [];
                if (a = s = r = r || ne, 3 !== r.nodeType && 8 !== r.nodeType && !Mt.test(h + me.event.triggered) && (h.indexOf(".") > -1 && (p = h.split("."), h = p.shift(), p.sort()), c = h.indexOf(":") < 0 && "on" + h, t = t[me.expando] ? t : new me.Event(h, "object" == typeof t && t), t.isTrigger = o ? 2 : 3, t.namespace = p.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = r), n = null == n ? [t] : me.makeArray(n, [t]), f = me.event.special[h] || {}, o || !f.trigger || f.trigger.apply(r, n) !== !1)) {
                    if (!o && !f.noBubble && !me.isWindow(r)) {
                        for (u = f.delegateType || h, Mt.test(u + h) || (a = a.parentNode); a; a = a.parentNode) d.push(a), s = a;
                        s === (r.ownerDocument || ne) && d.push(s.defaultView || s.parentWindow || e)
                    }
                    for (i = 0;
                        (a = d[i++]) && !t.isPropagationStopped();) t.type = i > 1 ? u : f.bindType || h, l = (Be.get(a, "events") || {})[t.type] && Be.get(a, "handle"), l && l.apply(a, n), l = c && a[c], l && l.apply && Ue(a) && (t.result = l.apply(a, n), t.result === !1 && t.preventDefault());
                    return t.type = h, o || t.isDefaultPrevented() || f._default && f._default.apply(d.pop(), n) !== !1 || !Ue(r) || c && me.isFunction(r[h]) && !me.isWindow(r) && (s = r[c], s && (r[c] = null), me.event.triggered = h, r[h](), me.event.triggered = void 0, s && (r[c] = s)), t.result
                }
            },
            simulate: function(e, t, n) {
                var r = me.extend(new me.Event, n, {
                    type: e,
                    isSimulated: !0
                });
                me.event.trigger(r, null, t)
            }
        }), me.fn.extend({
            trigger: function(e, t) {
                return this.each(function() {
                    me.event.trigger(e, t, this)
                })
            },
            triggerHandler: function(e, t) {
                var n = this[0];
                return n ? me.event.trigger(e, t, n, !0) : void 0
            }
        }), me.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function(e, t) {
            me.fn[t] = function(e, n) {
                return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t)
            }
        }), me.fn.extend({
            hover: function(e, t) {
                return this.mouseenter(e).mouseleave(t || e)
            }
        }), he.focusin = "onfocusin" in e, he.focusin || me.each({
            focus: "focusin",
            blur: "focusout"
        }, function(e, t) {
            var n = function(e) {
                me.event.simulate(t, e.target, me.event.fix(e))
            };
            me.event.special[t] = {
                setup: function() {
                    var r = this.ownerDocument || this,
                        o = Be.access(r, t);
                    o || r.addEventListener(e, n, !0), Be.access(r, t, (o || 0) + 1)
                },
                teardown: function() {
                    var r = this.ownerDocument || this,
                        o = Be.access(r, t) - 1;
                    o ? Be.access(r, t, o) : (r.removeEventListener(e, n, !0), Be.remove(r, t))
                }
            }
        });
        var Lt = e.location,
            Pt = me.now(),
            At = /\?/;
        me.parseXML = function(t) {
            var n;
            if (!t || "string" != typeof t) return null;
            try {
                n = (new e.DOMParser).parseFromString(t, "text/xml")
            } catch (r) {
                n = void 0
            }
            return (!n || n.getElementsByTagName("parsererror").length) && me.error("Invalid XML: " + t), n
        };
        var Dt = /\[\]$/,
            Nt = /\r?\n/g,
            qt = /^(?:submit|button|image|reset|file)$/i,
            Rt = /^(?:input|select|textarea|keygen)/i;
        me.param = function(e, t) {
            var n, r = [],
                o = function(e, t) {
                    var n = me.isFunction(t) ? t() : t;
                    r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n)
                };
            if (me.isArray(e) || e.jquery && !me.isPlainObject(e)) me.each(e, function() {
                o(this.name, this.value)
            });
            else
                for (n in e) G(n, e[n], t, o);
            return r.join("&")
        }, me.fn.extend({
            serialize: function() {
                return me.param(this.serializeArray())
            },
            serializeArray: function() {
                return this.map(function() {
                    var e = me.prop(this, "elements");
                    return e ? me.makeArray(e) : this
                }).filter(function() {
                    var e = this.type;
                    return this.name && !me(this).is(":disabled") && Rt.test(this.nodeName) && !qt.test(e) && (this.checked || !Ze.test(e))
                }).map(function(e, t) {
                    var n = me(this).val();
                    return null == n ? null : me.isArray(n) ? me.map(n, function(e) {
                        return {
                            name: t.name,
                            value: e.replace(Nt, "\r\n")
                        }
                    }) : {
                        name: t.name,
                        value: n.replace(Nt, "\r\n")
                    }
                }).get()
            }
        });
        var Ft = /%20/g,
            It = /#.*$/,
            Ht = /([?&])_=[^&]*/,
            Ut = /^(.*?):[ \t]*([^\r\n]*)$/gm,
            Bt = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
            Wt = /^(?:GET|HEAD)$/,
            zt = /^\/\//,
            $t = {},
            Vt = {},
            Xt = "*/".concat("*"),
            Gt = ne.createElement("a");
        Gt.href = Lt.href, me.extend({
            active: 0,
            lastModified: {},
            etag: {},
            ajaxSettings: {
                url: Lt.href,
                type: "GET",
                isLocal: Bt.test(Lt.protocol),
                global: !0,
                processData: !0,
                async: !0,
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                accepts: {
                    "*": Xt,
                    text: "text/plain",
                    html: "text/html",
                    xml: "application/xml, text/xml",
                    json: "application/json, text/javascript"
                },
                contents: {
                    xml: /\bxml\b/,
                    html: /\bhtml/,
                    json: /\bjson\b/
                },
                responseFields: {
                    xml: "responseXML",
                    text: "responseText",
                    json: "responseJSON"
                },
                converters: {
                    "* text": String,
                    "text html": !0,
                    "text json": JSON.parse,
                    "text xml": me.parseXML
                },
                flatOptions: {
                    url: !0,
                    context: !0
                }
            },
            ajaxSetup: function(e, t) {
                return t ? K(K(e, me.ajaxSettings), t) : K(me.ajaxSettings, e)
            },
            ajaxPrefilter: J($t),
            ajaxTransport: J(Vt),
            ajax: function(t, n) {
                function r(t, n, r, s) {
                    var c, d, h, w, x, E = n;
                    l || (l = !0, u && e.clearTimeout(u), o = void 0, a = s || "", _.readyState = t > 0 ? 4 : 0, c = t >= 200 && 300 > t || 304 === t, r && (w = Z(p, _, r)), w = Q(p, w, _, c), c ? (p.ifModified && (x = _.getResponseHeader("Last-Modified"), x && (me.lastModified[i] = x), x = _.getResponseHeader("etag"), x && (me.etag[i] = x)), 204 === t || "HEAD" === p.type ? E = "nocontent" : 304 === t ? E = "notmodified" : (E = w.state, d = w.data, h = w.error, c = !h)) : (h = E, (t || !E) && (E = "error", 0 > t && (t = 0))), _.status = t, _.statusText = (n || E) + "", c ? g.resolveWith(m, [d, E, _]) : g.rejectWith(m, [_, E, h]), _.statusCode(b), b = void 0, f && v.trigger(c ? "ajaxSuccess" : "ajaxError", [_, p, c ? d : h]), y.fireWith(m, [_, E]), f && (v.trigger("ajaxComplete", [_, p]), --me.active || me.event.trigger("ajaxStop")))
                }
                "object" == typeof t && (n = t, t = void 0), n = n || {};
                var o, i, a, s, u, c, l, f, d, h, p = me.ajaxSetup({}, n),
                    m = p.context || p,
                    v = p.context && (m.nodeType || m.jquery) ? me(m) : me.event,
                    g = me.Deferred(),
                    y = me.Callbacks("once memory"),
                    b = p.statusCode || {},
                    w = {},
                    x = {},
                    E = "canceled",
                    _ = {
                        readyState: 0,
                        getResponseHeader: function(e) {
                            var t;
                            if (l) {
                                if (!s)
                                    for (s = {}; t = Ut.exec(a);) s[t[1].toLowerCase()] = t[2];
                                t = s[e.toLowerCase()]
                            }
                            return null == t ? null : t
                        },
                        getAllResponseHeaders: function() {
                            return l ? a : null
                        },
                        setRequestHeader: function(e, t) {
                            return null == l && (e = x[e.toLowerCase()] = x[e.toLowerCase()] || e, w[e] = t), this
                        },
                        overrideMimeType: function(e) {
                            return null == l && (p.mimeType = e), this
                        },
                        statusCode: function(e) {
                            var t;
                            if (e)
                                if (l) _.always(e[_.status]);
                                else
                                    for (t in e) b[t] = [b[t], e[t]];
                            return this
                        },
                        abort: function(e) {
                            var t = e || E;
                            return o && o.abort(t), r(0, t), this
                        }
                    };
                if (g.promise(_), p.url = ((t || p.url || Lt.href) + "").replace(zt, Lt.protocol + "//"), p.type = n.method || n.type || p.method || p.type, p.dataTypes = (p.dataType || "*").toLowerCase().match(Re) || [""], null == p.crossDomain) {
                    c = ne.createElement("a");
                    try {
                        c.href = p.url, c.href = c.href, p.crossDomain = Gt.protocol + "//" + Gt.host != c.protocol + "//" + c.host
                    } catch (T) {
                        p.crossDomain = !0
                    }
                }
                if (p.data && p.processData && "string" != typeof p.data && (p.data = me.param(p.data, p.traditional)), Y($t, p, n, _), l) return _;
                f = me.event && p.global, f && 0 === me.active++ && me.event.trigger("ajaxStart"), p.type = p.type.toUpperCase(), p.hasContent = !Wt.test(p.type), i = p.url.replace(It, ""), p.hasContent ? p.data && p.processData && 0 === (p.contentType || "").indexOf("application/x-www-form-urlencoded") && (p.data = p.data.replace(Ft, "+")) : (h = p.url.slice(i.length), p.data && (i += (At.test(i) ? "&" : "?") + p.data, delete p.data), p.cache === !1 && (i = i.replace(Ht, ""), h = (At.test(i) ? "&" : "?") + "_=" + Pt++ + h), p.url = i + h), p.ifModified && (me.lastModified[i] && _.setRequestHeader("If-Modified-Since", me.lastModified[i]), me.etag[i] && _.setRequestHeader("If-None-Match", me.etag[i])), (p.data && p.hasContent && p.contentType !== !1 || n.contentType) && _.setRequestHeader("Content-Type", p.contentType), _.setRequestHeader("Accept", p.dataTypes[0] && p.accepts[p.dataTypes[0]] ? p.accepts[p.dataTypes[0]] + ("*" !== p.dataTypes[0] ? ", " + Xt + "; q=0.01" : "") : p.accepts["*"]);
                for (d in p.headers) _.setRequestHeader(d, p.headers[d]);
                if (p.beforeSend && (p.beforeSend.call(m, _, p) === !1 || l)) return _.abort();
                if (E = "abort", y.add(p.complete), _.done(p.success), _.fail(p.error), o = Y(Vt, p, n, _)) {
                    if (_.readyState = 1, f && v.trigger("ajaxSend", [_, p]), l) return _;
                    p.async && p.timeout > 0 && (u = e.setTimeout(function() {
                        _.abort("timeout")
                    }, p.timeout));
                    try {
                        l = !1, o.send(w, r)
                    } catch (T) {
                        if (l) throw T;
                        r(-1, T)
                    }
                } else r(-1, "No Transport");
                return _
            },
            getJSON: function(e, t, n) {
                return me.get(e, t, n, "json")
            },
            getScript: function(e, t) {
                return me.get(e, void 0, t, "script")
            }
        }), me.each(["get", "post"], function(e, t) {
            me[t] = function(e, n, r, o) {
                return me.isFunction(n) && (o = o || r, r = n, n = void 0), me.ajax(me.extend({
                    url: e,
                    type: t,
                    dataType: o,
                    data: n,
                    success: r
                }, me.isPlainObject(e) && e))
            }
        }), me._evalUrl = function(e) {
            return me.ajax({
                url: e,
                type: "GET",
                dataType: "script",
                cache: !0,
                async: !1,
                global: !1,
                "throws": !0
            })
        }, me.ajaxSettings.xhr = function() {
            try {
                return new e.XMLHttpRequest
            } catch (t) {}
        };
        var Jt = {
                0: 200,
                1223: 204
            },
            Yt = me.ajaxSettings.xhr();
        he.cors = !!Yt && "withCredentials" in Yt, he.ajax = Yt = !!Yt, me.ajaxTransport(function(t) {
            var n, r;
            return he.cors || Yt && !t.crossDomain ? {
                send: function(o, i) {
                    var a, s = t.xhr();
                    if (s.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields)
                        for (a in t.xhrFields) s[a] = t.xhrFields[a];
                    t.mimeType && s.overrideMimeType && s.overrideMimeType(t.mimeType), t.crossDomain || o["X-Requested-With"] || (o["X-Requested-With"] = "XMLHttpRequest");
                    for (a in o) s.setRequestHeader(a, o[a]);
                    n = function(e) {
                        return function() {
                            n && (n = r = s.onload = s.onerror = s.onabort = s.onreadystatechange = null, "abort" === e ? s.abort() : "error" === e ? "number" != typeof s.status ? i(0, "error") : i(s.status, s.statusText) : i(Jt[s.status] || s.status, s.statusText, "text" !== (s.responseType || "text") || "string" != typeof s.responseText ? {
                                binary: s.response
                            } : {
                                text: s.responseText
                            }, s.getAllResponseHeaders()))
                        }
                    }, s.onload = n(), r = s.onerror = n("error"), void 0 !== s.onabort ? s.onabort = r : s.onreadystatechange = function() {
                        4 === s.readyState && e.setTimeout(function() {
                            n && r()
                        })
                    }, n = n("abort");
                    try {
                        s.send(t.hasContent && t.data || null)
                    } catch (u) {
                        if (n) throw u
                    }
                },
                abort: function() {
                    n && n()
                }
            } : void 0
        }), me.ajaxPrefilter(function(e) {
            e.crossDomain && (e.contents.script = !1)
        }), me.ajaxSetup({
            accepts: {
                script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
            },
            contents: {
                script: /\b(?:java|ecma)script\b/
            },
            converters: {
                "text script": function(e) {
                    return me.globalEval(e), e
                }
            }
        }), me.ajaxPrefilter("script", function(e) {
            void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET")
        }), me.ajaxTransport("script", function(e) {
            if (e.crossDomain) {
                var t, n;
                return {
                    send: function(r, o) {
                        t = me("<script>").prop({
                            charset: e.scriptCharset,
                            src: e.url
                        }).on("load error", n = function(e) {
                            t.remove(), n = null, e && o("error" === e.type ? 404 : 200, e.type)
                        }), ne.head.appendChild(t[0])
                    },
                    abort: function() {
                        n && n()
                    }
                }
            }
        });
        var Kt = [],
            Zt = /(=)\?(?=&|$)|\?\?/;
        me.ajaxSetup({
            jsonp: "callback",
            jsonpCallback: function() {
                var e = Kt.pop() || me.expando + "_" + Pt++;
                return this[e] = !0, e
            }
        }), me.ajaxPrefilter("json jsonp", function(t, n, r) {
            var o, i, a, s = t.jsonp !== !1 && (Zt.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && Zt.test(t.data) && "data");
            return s || "jsonp" === t.dataTypes[0] ? (o = t.jsonpCallback = me.isFunction(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, s ? t[s] = t[s].replace(Zt, "$1" + o) : t.jsonp !== !1 && (t.url += (At.test(t.url) ? "&" : "?") + t.jsonp + "=" + o), t.converters["script json"] = function() {
                return a || me.error(o + " was not called"), a[0]
            }, t.dataTypes[0] = "json", i = e[o], e[o] = function() {
                a = arguments
            }, r.always(function() {
                void 0 === i ? me(e).removeProp(o) : e[o] = i, t[o] && (t.jsonpCallback = n.jsonpCallback, Kt.push(o)), a && me.isFunction(i) && i(a[0]), a = i = void 0
            }), "script") : void 0
        }), he.createHTMLDocument = function() {
            var e = ne.implementation.createHTMLDocument("").body;
            return e.innerHTML = "<form></form><form></form>", 2 === e.childNodes.length
        }(), me.parseHTML = function(e, t, n) {
            if ("string" != typeof e) return [];
            "boolean" == typeof t && (n = t, t = !1);
            var r, o, i;
            return t || (he.createHTMLDocument ? (t = ne.implementation.createHTMLDocument(""), r = t.createElement("base"), r.href = ne.location.href, t.head.appendChild(r)) : t = ne), o = Me.exec(e), i = !n && [], o ? [t.createElement(o[1])] : (o = x([e], t, i), i && i.length && me(i).remove(), me.merge([], o.childNodes))
        }, me.fn.load = function(e, t, n) {
            var r, o, i, a = this,
                s = e.indexOf(" ");
            return s > -1 && (r = me.trim(e.slice(s)), e = e.slice(0, s)), me.isFunction(t) ? (n = t, t = void 0) : t && "object" == typeof t && (o = "POST"), a.length > 0 && me.ajax({
                url: e,
                type: o || "GET",
                dataType: "html",
                data: t
            }).done(function(e) {
                i = arguments, a.html(r ? me("<div>").append(me.parseHTML(e)).find(r) : e)
            }).always(n && function(e, t) {
                a.each(function() {
                    n.apply(this, i || [e.responseText, t, e])
                })
            }), this
        }, me.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(e, t) {
            me.fn[t] = function(e) {
                return this.on(t, e)
            }
        }), me.offset = {
            setOffset: function(e, t, n) {
                var r, o, i, a, s, u, c, l = me.css(e, "position"),
                    f = me(e),
                    d = {};
                "static" === l && (e.style.position = "relative"), s = f.offset(), i = me.css(e, "top"), u = me.css(e, "left"), c = ("absolute" === l || "fixed" === l) && (i + u).indexOf("auto") > -1, c ? (r = f.position(), a = r.top, o = r.left) : (a = parseFloat(i) || 0, o = parseFloat(u) || 0), me.isFunction(t) && (t = t.call(e, n, me.extend({}, s))), null != t.top && (d.top = t.top - s.top + a), null != t.left && (d.left = t.left - s.left + o), "using" in t ? t.using.call(e, d) : f.css(d)
            }
        }, me.fn.extend({
            offset: function(e) {
                if (arguments.length) return void 0 === e ? this : this.each(function(t) {
                    me.offset.setOffset(this, e, t)
                });
                var t, n, r, o, i = this[0];
                if (i) return i.getClientRects().length ? (r = i.getBoundingClientRect(), r.width || r.height ? (o = i.ownerDocument, n = ee(o), t = o.documentElement, {
                    top: r.top + n.pageYOffset - t.clientTop,
                    left: r.left + n.pageXOffset - t.clientLeft
                }) : r) : {
                    top: 0,
                    left: 0
                }
            },
            position: function() {
                if (this[0]) {
                    var e, t, n = this[0],
                        r = {
                            top: 0,
                            left: 0
                        };
                    return "fixed" === me.css(n, "position") ? t = n.getBoundingClientRect() : (e = this.offsetParent(), t = this.offset(), me.nodeName(e[0], "html") || (r = e.offset()), r = {
                        top: r.top + me.css(e[0], "borderTopWidth", !0),
                        left: r.left + me.css(e[0], "borderLeftWidth", !0)
                    }), {
                        top: t.top - r.top - me.css(n, "marginTop", !0),
                        left: t.left - r.left - me.css(n, "marginLeft", !0)
                    }
                }
            },
            offsetParent: function() {
                return this.map(function() {
                    for (var e = this.offsetParent; e && "static" === me.css(e, "position");) e = e.offsetParent;
                    return e || Ee
                })
            }
        }), me.each({
            scrollLeft: "pageXOffset",
            scrollTop: "pageYOffset"
        }, function(e, t) {
            var n = "pageYOffset" === t;
            me.fn[e] = function(r) {
                return He(this, function(e, r, o) {
                    var i = ee(e);
                    return void 0 === o ? i ? i[t] : e[r] : void(i ? i.scrollTo(n ? i.pageXOffset : o, n ? o : i.pageYOffset) : e[r] = o)
                }, e, r, arguments.length)
            }
        }), me.each(["top", "left"], function(e, t) {
            me.cssHooks[t] = D(he.pixelPosition, function(e, n) {
                return n ? (n = A(e, t), dt.test(n) ? me(e).position()[t] + "px" : n) : void 0
            })
        }), me.each({
            Height: "height",
            Width: "width"
        }, function(e, t) {
            me.each({
                padding: "inner" + e,
                content: t,
                "": "outer" + e
            }, function(n, r) {
                me.fn[r] = function(o, i) {
                    var a = arguments.length && (n || "boolean" != typeof o),
                        s = n || (o === !0 || i === !0 ? "margin" : "border");
                    return He(this, function(t, n, o) {
                        var i;
                        return me.isWindow(t) ? 0 === r.indexOf("outer") ? t["inner" + e] : t.document.documentElement["client" + e] : 9 === t.nodeType ? (i = t.documentElement, Math.max(t.body["scroll" + e], i["scroll" + e], t.body["offset" + e], i["offset" + e], i["client" + e])) : void 0 === o ? me.css(t, n, s) : me.style(t, n, o, s)
                    }, t, a ? o : void 0, a)
                }
            })
        }), me.fn.extend({
            bind: function(e, t, n) {
                return this.on(e, null, t, n)
            },
            unbind: function(e, t) {
                return this.off(e, null, t)
            },
            delegate: function(e, t, n, r) {
                return this.on(t, e, n, r)
            },
            undelegate: function(e, t, n) {
                return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
            }
        }), me.parseJSON = JSON.parse, "function" == typeof define && define.amd && define("jquery", [], function() {
            return me
        });
        var Qt = e.jQuery,
            en = e.$;
        return me.noConflict = function(t) {
            return e.$ === me && (e.$ = en), t && e.jQuery === me && (e.jQuery = Qt), me
        }, t || (e.jQuery = e.$ = me), me
    }), define.registerEnd(), define.register("selector-set"),
    function(e, t) {
        "function" == typeof define && define.amd ? define([], t) : "object" == typeof exports ? module.exports = t() : e.SelectorSet = t()
    }(this, function() {
        "use strict";

        function e() {
            return this instanceof e ? (this.size = 0, this.uid = 0, this.selectors = [], this.indexes = Object.create(this.indexes), void(this.activeIndexes = [])) : new e
        }

        function t(e, t) {
            e = e.slice(0).concat(e["default"]);
            var n, r, o, i, a, s, u = e.length,
                c = t,
                f = [];
            do
                if (l.exec(""), (o = l.exec(c)) && (c = o[3], o[2] || !c))
                    for (n = 0; u > n; n++)
                        if (s = e[n], a = s.selector(o[1])) {
                            for (r = f.length, i = !1; r--;)
                                if (f[r].index === s && f[r].key === a) {
                                    i = !0;
                                    break
                                }
                            i || f.push({
                                index: s,
                                key: a
                            });
                            break
                        }
            while (o);
            return f
        }

        function n(e, t) {
            var n, r, o;
            for (n = 0, r = e.length; r > n; n++)
                if (o = e[n], t.isPrototypeOf(o)) return o
        }

        function r(e, t) {
            return e.id - t.id
        }
        var o = window.document.documentElement,
            i = o.matches || o.webkitMatchesSelector || o.mozMatchesSelector || o.oMatchesSelector || o.msMatchesSelector;
        e.prototype.matchesSelector = function(e, t) {
            return i.call(e, t)
        }, e.prototype.querySelectorAll = function(e, t) {
            return t.querySelectorAll(e)
        }, e.prototype.indexes = [];
        var a = /^#((?:[\w\u00c0-\uFFFF\-]|\\.)+)/g;
        e.prototype.indexes.push({
            name: "ID",
            selector: function(e) {
                var t;
                return (t = e.match(a)) ? t[0].slice(1) : void 0
            },
            element: function(e) {
                return e.id ? [e.id] : void 0
            }
        });
        var s = /^\.((?:[\w\u00c0-\uFFFF\-]|\\.)+)/g;
        e.prototype.indexes.push({
            name: "CLASS",
            selector: function(e) {
                var t;
                return (t = e.match(s)) ? t[0].slice(1) : void 0
            },
            element: function(e) {
                var t = e.className;
                if (t) {
                    if ("string" == typeof t) return t.split(/\s/);
                    if ("object" == typeof t && "baseVal" in t) return t.baseVal.split(/\s/)
                }
            }
        });
        var u = /^((?:[\w\u00c0-\uFFFF\-]|\\.)+)/g;
        e.prototype.indexes.push({
            name: "TAG",
            selector: function(e) {
                var t;
                return (t = e.match(u)) ? t[0].toUpperCase() : void 0
            },
            element: function(e) {
                return [e.nodeName.toUpperCase()]
            }
        }), e.prototype.indexes["default"] = {
            name: "UNIVERSAL",
            selector: function() {
                return !0
            },
            element: function() {
                return [!0]
            }
        };
        var c;
        c = "function" == typeof window.Map ? window.Map : function() {
            function e() {
                this.map = {}
            }
            return e.prototype.get = function(e) {
                return this.map[e + " "]
            }, e.prototype.set = function(e, t) {
                this.map[e + " "] = t
            }, e
        }();
        var l = /((?:\((?:\([^()]+\)|[^()]+)+\)|\[(?:\[[^\[\]]*\]|['"][^'"]*['"]|[^\[\]'"]+)+\]|\\.|[^ >+~,(\[\\]+)+|[>+~])(\s*,\s*)?((?:.|\r|\n)*)/g;
        return e.prototype.logDefaultIndexUsed = function() {}, e.prototype.add = function(e, r) {
            var o, i, a, s, u, l, f, d, h = this.activeIndexes,
                p = this.selectors;
            if ("string" == typeof e) {
                for (o = {
                        id: this.uid++,
                        selector: e,
                        data: r
                    }, f = t(this.indexes, e), i = 0; i < f.length; i++) d = f[i], s = d.key, a = d.index, u = n(h, a), u || (u = Object.create(a), u.map = new c, h.push(u)), a === this.indexes["default"] && this.logDefaultIndexUsed(o), l = u.map.get(s), l || (l = [], u.map.set(s, l)), l.push(o);
                this.size++, p.push(e)
            }
        }, e.prototype.remove = function(e, n) {
            if ("string" == typeof e) {
                var r, o, i, a, s, u, c, l, f = this.activeIndexes,
                    d = {},
                    h = 1 === arguments.length;
                for (r = t(this.indexes, e), i = 0; i < r.length; i++)
                    for (o = r[i], a = f.length; a--;)
                        if (u = f[a], o.index.isPrototypeOf(u)) {
                            if (c = u.map.get(o.key))
                                for (s = c.length; s--;) l = c[s], l.selector !== e || !h && l.data !== n || (c.splice(s, 1), d[l.id] = !0);
                            break
                        }
                this.size -= Object.keys(d).length
            }
        }, e.prototype.queryAll = function(e) {
            if (!this.selectors.length) return [];
            var t, n, o, i, a, s, u, c, l = {},
                f = [],
                d = this.querySelectorAll(this.selectors.join(", "), e);
            for (t = 0, o = d.length; o > t; t++)
                for (a = d[t], s = this.matches(a), n = 0, i = s.length; i > n; n++) c = s[n], l[c.id] ? u = l[c.id] : (u = {
                    id: c.id,
                    selector: c.selector,
                    data: c.data,
                    elements: []
                }, l[c.id] = u, f.push(u)), u.elements.push(a);
            return f.sort(r)
        }, e.prototype.matches = function(e) {
            if (!e) return [];
            var t, n, o, i, a, s, u, c, l, f, d, h = this.activeIndexes,
                p = {},
                m = [];
            for (t = 0, i = h.length; i > t; t++)
                if (u = h[t], c = u.element(e))
                    for (n = 0, a = c.length; a > n; n++)
                        if (l = u.map.get(c[n]))
                            for (o = 0, s = l.length; s > o; o++) f = l[o], d = f.id, !p[d] && this.matchesSelector(e, f.selector) && (p[d] = !0, m.push(f));
            return m.sort(r)
        }, e
    }), define.registerEnd(), define.register("jquery-selector-set"),
    function(e, t) {
        if ("function" == typeof define && define.amd) define(["jquery", "selector-set"], t);
        else if ("object" == typeof exports) {
            var n = require("jquery"),
                r = require("selector-set");
            module.exports = t(n, r)
        } else t(e.jQuery, e.SelectorSet)
    }(this, function(e, t) {
        function n(e) {
            var t = [],
                n = e.target,
                r = e.handleObj.selectorSet;
            do {
                if (1 !== n.nodeType) break;
                var o = r.matches(n);
                o.length && t.push({
                    elem: n,
                    handlers: o
                })
            } while (n = n.parentNode);
            return t
        }

        function r(e) {
            for (var t, r = n(e), o = 0;
                (t = r[o++]) && !e.isPropagationStopped();) {
                e.currentTarget = t.elem;
                for (var i, a = 0;
                    (i = t.handlers[a++]) && !e.isImmediatePropagationStopped();) {
                    var s = i.data.apply(t.elem, arguments);
                    void 0 !== s && (e.result = s, s === !1 && (e.preventDefault(), e.stopPropagation()))
                }
            }
        }
        var o = window.document,
            i = e.event.add,
            a = e.event.remove,
            s = {};
        if (!t) throw "SelectorSet undefined - https://github.com/josh/jquery-selector-set";
        e.event.add = function(n, a, u, c, l) {
            if (n !== o || a.match(/\./) || c || !l) i.call(this, n, a, u, c, l);
            else
                for (var f = a.match(/\S+/g), d = f.length; d--;) {
                    var h = f[d],
                        p = e.event.special[h] || {};
                    h = p.delegateType || h;
                    var m = s[h];
                    m || (m = s[h] = {
                        handler: r,
                        selectorSet: new t
                    }, m.selectorSet.matchesSelector = e.find.matchesSelector, i.call(this, n, h, m)), m.selectorSet.add(l, u), e.expr.cacheLength++, e.find.compile && e.find.compile(l)
                }
        }, e.event.remove = function(t, n, r, i, u) {
            if (t === o && n && !n.match(/\./) && i)
                for (var c = n.match(/\S+/g), l = c.length; l--;) {
                    var f = c[l],
                        d = e.event.special[f] || {};
                    f = d.delegateType || f;
                    var h = s[f];
                    h && h.selectorSet.remove(i, r)
                }
            a.call(this, t, n, r, i, u)
        }
    }), define.registerEnd(), define("github/jquery", ["exports", "jquery", "jquery-selector-set"], function(e, t) {
        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var r = n(t);
        e["default"] = r["default"].noConflict(!0)
    }), define("github/typecast", ["exports", "invariant"], function(e, t) {
        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function r(e, t, n) {
            return o["default"](e instanceof t, "undefined -- github/typecast.js:16"), e
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e["default"] = r;
        var o = n(t)
    }), define("github/metadata", ["exports", "invariant"], function(e, t) {
        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function r(e, t) {
            var n = e.head;
            o["default"](n, "document.head was not initialized -- github/metadata.js:13");
            var r = !0,
                i = !1,
                a = void 0;
            try {
                for (var s, u = n.getElementsByTagName("meta")[Symbol.iterator](); !(r = (s = u.next()).done); r = !0) {
                    var c = s.value;
                    if (o["default"](c instanceof HTMLMetaElement, "getElementsByTagName('meta') returned non-meta element -- github/metadata.js:18"), c.name === t) return c.content || ""
                }
            } catch (l) {
                i = !0, a = l
            } finally {
                try {
                    !r && u["return"] && u["return"]()
                } finally {
                    if (i) throw a
                }
            }
            return ""
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.getMetadataByName = r;
        var o = n(t)
    }), define("github/proxy-site-detection", ["exports", "./metadata"], function(e, t) {
        function n(e) {
            var n = t.getMetadataByName(e, "expected-hostname");
            if (!n) return !1;
            var r = n.replace(/\.$/, "").split(".").slice(-2).join("."),
                o = e.location.hostname.replace(/\.$/, "").split(".").slice(-2).join(".");
            return r !== o
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e["default"] = n
    }), define("github/history", ["exports"], function(e) {
        function t() {
            return d
        }

        function n() {
            return p
        }

        function r() {
            var e = {
                _id: (new Date).getTime()
            };
            return i(e), e
        }

        function o() {
            return history.length - 1 + h
        }

        function i(e) {
            p = e;
            var t = location.href;
            d[o()] = {
                url: t,
                state: p
            }, d.length = history.length;
            var n = new CustomEvent("statechange", {
                bubbles: !1,
                cancelable: !1
            });
            n.state = p, window.dispatchEvent(n)
        }

        function a(e, t) {
            var n = {
                _id: t
            };
            if (e)
                for (var r in e) n[r] = e[r];
            return n
        }

        function s() {
            return (new Date).getTime()
        }

        function u(e, t, n) {
            h = 0, e = a(e, s()), history.pushState(e, t, n), i(e)
        }

        function c(e, t, r) {
            e = a(e, n()._id), history.replaceState(e, t, r), i(e)
        }

        function l() {
            var e = d[o() - 1];
            return e ? e.url : void 0
        }

        function f() {
            var e = d[o() + 1];
            return e ? e.url : void 0
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.getEntries = t, e.getState = n, e.pushState = u, e.replaceState = c, e.getBackURL = l, e.getForwardURL = f;
        var d = [],
            h = 0,
            p = r();
        window.addEventListener("popstate", function(e) {
            if (e.state && e.state._id) {
                var t = e.state._id;
                t < n()._id ? h-- : h++, i(e.state)
            }
        }, !0), window.addEventListener("hashchange", function() {
            if (history.length > d.length) {
                var e = a({}, s());
                history.replaceState(e, "", location.href), i(e)
            }
        }, !0)
    }), define("github/failbot", ["exports", "./jquery", "./typecast", "./proxy-site-detection", "./history"], function(e, t, n, r, o) {
        function i(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function a(e) {
            p(e) && c(l(e))
        }

        function s(e) {
            e.promise && e.promise["catch"](u)
        }

        function u(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
            c(f(e, t))
        }

        function c(e) {
            var t = document.querySelector("meta[name=browser-errors-url]");
            if (t) {
                var n = v["default"](t, HTMLMetaElement).content;
                y++, window.fetch(n, {
                    method: "post",
                    body: JSON.stringify(e)
                })["catch"](function() {})
            }
        }

        function l(e) {
            var t = e.message,
                n = e.filename,
                r = e.lineno,
                o = e.error;
            return f(o, {
                message: t,
                filename: n,
                lineno: r
            })
        }

        function f(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
            return m["default"].extend({
                originalHistoryState: JSON.stringify(window.history.state),
                url: window.location.href,
                readyState: document.readyState,
                referrer: document.referrer,
                stack: e && e.stack,
                historyState: JSON.stringify(window.history.state),
                timeSinceLoad: Math.round((new Date).getTime() - b),
                extensionScripts: JSON.stringify(h().sort()),
                navigations: JSON.stringify(o.getEntries()),
                user: d(),
                jquery: m["default"].fn.jquery
            }, t)
        }

        function d() {
            var e = document.querySelector("meta[name=user-login]");
            return e ? v["default"](e, HTMLMetaElement).content : void 0
        }

        function h() {
            for (var e = document.getElementsByTagName("script"), t = [], n = 0, r = e.length; r > n; n++) {
                var o = e[n];
                /^(?:chrome-extension|file):/.test(o.src) && t.push(o.src)
            }
            return t
        }

        function p(e) {
            var t = e.lineno,
                n = e.error;
            return g["default"](document) ? !1 : n && n.stack && t ? w ? !1 : y >= 10 ? !1 : !0 : !1
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.reportEvent = a, e.reportPromiseRejectionEvent = s, e.reportError = u;
        var m = i(t),
            v = i(n),
            g = i(r),
            y = 0,
            b = (new Date).getTime(),
            w = !1;
        window.addEventListener("pageshow", function() {
            w = !1
        }), window.addEventListener("pagehide", function() {
            w = !0
        })
    }), define("github/setimmediate", ["exports"], function(e) {
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e["default"] = function(e) {
            return setImmediate(e)
        }
    }), define("github/failbot-error", ["./failbot", "./setimmediate"], function(e, t) {
        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }
        var r = n(t);
        window.addEventListener("error", e.reportEvent), window.addEventListener("unhandledrejection", e.reportPromiseRejectionEvent), r["default"](function() {
            "#b00m" === window.location.hash && b00m()
        })
    }), define("github/beforesend", ["./jquery"], function(e) {
        function t(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }
        var n = t(e);
        n["default"].ajaxSetup({
            beforeSend: function(e, t) {
                if (t.global) {
                    var r = t.context || document,
                        o = n["default"].Event("ajaxBeforeSend");
                    return n["default"](r).trigger(o, [e, t]), o.isDefaultPrevented() ? !1 : o.result
                }
            }
        })
    }), define("github/once", ["exports"], function(e) {
        function t(e, t) {
            return new Promise(function(n) {
                e.addEventListener(t, function r(o) {
                    e.removeEventListener(t, r), n(o)
                })
            })
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e["default"] = t
    }), define("github/code-editor", ["exports", "./once"], function(e, t) {
        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function r(e) {
            return s.get(e)
        }

        function o(e, t) {
            s.set(e, t)
        }

        function i(e) {
            var t;
            return regeneratorRuntime.async(function(n) {
                for (;;) switch (n.prev = n.next) {
                    case 0:
                        if (t = s.get(e), !t) {
                            n.next = 3;
                            break
                        }
                        return n.abrupt("return", t);
                    case 3:
                        return n.next = 5, regeneratorRuntime.awrap(a["default"](e, "codeEditor:ready"));
                    case 5:
                        if (t = s.get(e), null != t) {
                            n.next = 8;
                            break
                        }
                        throw new Error("Editor instance was null when it shouldn't have been");
                    case 8:
                        return n.abrupt("return", t);
                    case 9:
                    case "end":
                        return n.stop()
                }
            }, null, this)
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.getCodeEditor = r, e.setCodeEditor = o, e.getAsyncCodeEditor = i;
        var a = n(t),
            s = new WeakMap
    }), define("github/confirm", [], function() {
        document.addEventListener("click", function(e) {
            var t = "a[data-confirm], input[type=submit][data-confirm], button[data-confirm]",
                n = "function" == typeof e.target.closest ? e.target.closest(t) : void 0;
            if (n) {
                var r = n.getAttribute("data-confirm");
                r && (confirm(r) || (e.stopImmediatePropagation(), e.preventDefault()))
            }
        }, !0)
    }), define("github/debounce", ["exports"], function(e) {
        function t(e, t) {
            var n = void 0;
            return function() {
                function r() {
                    clearTimeout(n), e.apply(o, i)
                }
                var o = this,
                    i = arguments;
                clearTimeout(n), n = setTimeout(r, t)
            }
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e["default"] = t
    }), define("github/dimensions", ["exports", "./jquery"], function(e, t) {
        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function r(e) {
            var t = e.getBoundingClientRect();
            return {
                top: t.top + window.pageYOffset,
                left: t.left + window.pageXOffset
            }
        }

        function o(e) {
            var t = e.ownerDocument;
            if (t && e.offsetParent) {
                var n = t.defaultView.HTMLElement;
                if (e !== t.body) {
                    for (; e !== t.body;) {
                        if (!(e.parentElement instanceof n)) return;
                        e = e.parentElement;
                        var r = getComputedStyle(e),
                            o = r.position,
                            i = r.overflowY,
                            a = r.overflowX;
                        if ("fixed" === o || "auto" === i || "auto" === a || "scroll" === i || "scroll" === a) break
                    }
                    return e instanceof Document ? null : e
                }
            }
        }

        function i(e, t) {
            var n = e.ownerDocument;
            if (n) {
                var r = n.body;
                if (r) {
                    var o = n.documentElement;
                    if (o && e !== o) {
                        var i = a(e, t);
                        if (i) {
                            t = i._container;
                            var u = t === n.documentElement ? {
                                    top: s["default"](n).scrollTop(),
                                    left: s["default"](n).scrollLeft()
                                } : {
                                    top: s["default"](t).scrollTop(),
                                    left: s["default"](t).scrollLeft()
                                },
                                c = i.top - u.top,
                                l = i.left - u.left,
                                f = t.clientHeight,
                                d = t.clientWidth,
                                h = f - (c + e.offsetHeight),
                                p = d - (l + e.offsetWidth);
                            return {
                                top: c,
                                left: l,
                                bottom: h,
                                right: p,
                                height: f,
                                width: d
                            }
                        }
                    }
                }
            }
        }

        function a(e, t) {
            var n = e.ownerDocument;
            if (n) {
                var r = n.documentElement;
                if (r) {
                    for (var o = n.defaultView.HTMLElement, i = 0, a = 0, u = e.offsetHeight, c = e.offsetWidth; e !== n.body && e !== t;) {
                        if (i += e.offsetTop || 0, a += e.offsetLeft || 0, !(e.offsetParent instanceof o)) return;
                        e = e.offsetParent
                    }
                    var l = void 0,
                        f = void 0,
                        d = void 0;
                    if (t && t !== n && t !== n.defaultView && t !== n.documentElement && t !== n.body) {
                        if (!(t instanceof o)) return;
                        d = t, l = t.scrollHeight, f = t.scrollWidth
                    } else d = r, l = s["default"](n).height(), f = s["default"](n).width();
                    var h = l - (i + u),
                        p = f - (a + c);
                    return {
                        top: i,
                        left: a,
                        bottom: h,
                        right: p,
                        _container: d
                    }
                }
            }
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.offset = r, e.overflowParent = o, e.overflowOffset = i, e.positionedOffset = a;
        var s = n(t)
    }), define("github/facebox", ["exports", "./jquery"], function(e, t) {
        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function r() {
            return s(), 1 === v["default"](".facebox-loading").length ? !0 : (d(), v["default"](".facebox-content").empty().append('<div class="facebox-loading"></div>'), v["default"](".facebox").show().css({
                top: u()[1] + c() / 10,
                left: v["default"](window).width() / 2 - v["default"](".facebox-popup").outerWidth() / 2
            }), v["default"](document).bind("keydown.facebox", function(e) {
                return 27 === e.keyCode && i(), !0
            }), void m(document, "facebox:loading"))
        }

        function o(e, t) {
            v["default"](document).trigger("beforeReveal.facebox"), t && v["default"](".facebox-content").addClass(t), v["default"](".facebox-content").empty().append(e), v["default"](".facebox-loading").remove(), v["default"](".facebox-popup").children().fadeIn("normal"), v["default"](".facebox").css("left", v["default"](window).width() / 2 - v["default"](".facebox-popup").outerWidth() / 2), v["default"](".facebox-header").attr("tabindex", "-1"), v["default"](".facebox-content [data-facebox-id]").each(function() {
                v["default"](this).attr("id", v["default"](this).attr("data-facebox-id"))
            }), v["default"](".facebox .facebox-header").focus(), m(document, "facebox:reveal"), v["default"](document).trigger("afterReveal.facebox")
        }

        function i() {
            return m(document, "facebox:close"), !1
        }

        function a(e, t) {
            function n(t) {
                t.preventDefault(), r();
                var n = e.rel.match(/facebox\[?\.(\w+)\]?/);
                n && (n = n[1]), l(e.href, n)
            }
            if (0 !== v["default"](e).length) return s(t), v["default"](e).bind("click.facebox", n)
        }

        function s(e) {
            return g.inited ? !0 : (g.inited = !0, v["default"](document).trigger("init.facebox"), void(e && v["default"].extend(g, e)))
        }

        function u() {
            var e = void 0,
                t = void 0;
            return self.pageYOffset ? (t = self.pageYOffset, e = self.pageXOffset) : document.documentElement && document.documentElement.scrollTop ? (t = document.documentElement.scrollTop, e = document.documentElement.scrollLeft) : document.body && (t = document.body.scrollTop, e = document.body.scrollLeft), [e, t]
        }

        function c() {
            var e = void 0;
            return self.innerHeight ? e = self.innerHeight : document.documentElement && document.documentElement.clientHeight ? e = document.documentElement.clientHeight : document.body && (e = document.body.clientHeight), e
        }

        function l(e, t) {
            if (e.match(/#/)) {
                var n = window.location.href.split("#")[0],
                    r = e.replace(n, "");
                if ("#" === r) return;
                o(v["default"](r).html(), t)
            }
        }

        function f() {
            return g.overlay === !1 || null === g.opacity
        }

        function d() {
            return f() ? void 0 : (0 === v["default"](".facebox-overlay").length && v["default"]("body").append('<div class="facebox-overlay facebox-overlay-hide"></div>'), v["default"](".facebox-overlay").hide().addClass("facebox-overlay-active").css("opacity", g.opacity).click(function() {
                m(document, "facebox:close")
            }).fadeIn(200), !1)
        }

        function h() {
            return f() ? void 0 : (v["default"](".facebox-overlay").fadeOut(200, function() {
                v["default"](".facebox-overlay").removeClass("facebox-overlay-active"), v["default"](".facebox-overlay").addClass("facebox-overlay-hide"), v["default"](".facebox-overlay").remove()
            }), !1)
        }

        function p() {
            v["default"](document).unbind("keydown.facebox"), v["default"](".facebox").fadeOut(function() {
                v["default"](".facebox-content").removeClass().addClass("facebox-content"), v["default"](".facebox-loading").remove(), m(document, "facebox:afterClose")
            }), h()
        }

        function m(e, t, n) {
            return e.dispatchEvent(new CustomEvent(t, {
                bubbles: !0,
                cancelable: !0,
                detail: n
            }))
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e["default"] = function(e, t) {
            return r(), new Promise(function(n) {
                v["default"](document).one("facebox:reveal", function() {
                    n(v["default"](".facebox-content")[0])
                }), e.div ? l(e.div, t) : v["default"].isFunction(e) ? e.call(v["default"]) : o(e, t)
            })
        }, e.close = i, e.addFaceboxEventListener = a, e.teardownOnClose = p;
        var v = n(t),
            g = {
                opacity: .5,
                overlay: !0
            }
    }), define("github/emoji-detection", ["exports", "invariant"], function(e, t) {
        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function r(e, t) {
            var n = e.getContext("2d");
            l["default"](n, "Unable to get 2d canvas -- github/emoji-detection.js:27"), o(n, t);
            for (var r = !1, i = n.getImageData(0, 16, 64, 1).data, a = 0; 64 >= a; a++)
                if (32 >= a)(i[4 * a] || i[4 * a + 1] || i[4 * a + 2]) && (r = !0);
                else if (a >= 48 && i[4 * a + 3] > 0) {
                r = !1;
                break
            }
            return r
        }

        function o(e, t) {
            e.clearRect(0, 0, 400, 400), e.fillStyle = "#000", e.textBaseline = "top", e.font = '32px "Apple Color Emoji", "Segoe UI", "Segoe UI Emoji", "Segoe UI Symbol", Arial', e.fillText(t + "___", 0, 0)
        }

        function i() {
            try {
                var e = document.createElement("canvas");
                return {
                    "6.0": r(e, f),
                    8.3: r(e, d),
                    9.1: r(e, h),
                    "10.0": r(e, p),
                    10.2: r(e, m)
                }
            } catch (t) {
                return {}
            }
        }

        function a() {
            if (null !== v) return v;
            var e = i();
            v = 0;
            for (var t in e) {
                var n = parseFloat(t);
                e[t] && n > v && (v = n)
            }
            return v
        }

        function s(e) {
            var t = e.codePointAt(0);
            return t >= g && y >= t
        }

        function u(e) {
            return 3 === e.length && e.codePointAt(2) === b
        }

        function c(e, t) {
            var n = t ? parseFloat(t) : w;
            return a() >= n && !(x && s(e)) && !((E || _) && u(e))
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.ios102emoji = e.ios100emoji = e.ios91emoji = e.ios83emoji = e.ios6emoji = void 0, e.detectEmoji = r, e.drawEmoji = o, e.detectEmojiSupportLevel = a, e.isEmojiSupported = c;
        var l = n(t),
            f = e.ios6emoji = String.fromCharCode(55357) + String.fromCharCode(56836),
            d = e.ios83emoji = String.fromCharCode(55357) + String.fromCharCode(56425) + String.fromCharCode(8205) + String.fromCharCode(10084) + String.fromCharCode(65039) + String.fromCharCode(8205) + String.fromCharCode(55357) + String.fromCharCode(56425),
            h = e.ios91emoji = String.fromCharCode(55358) + String.fromCharCode(56708),
            p = e.ios100emoji = String.fromCharCode(55357) + String.fromCharCode(56693) + String.fromCharCode(65039) + String.fromCharCode(8205) + String.fromCharCode(9792) + String.fromCharCode(65039),
            m = e.ios102emoji = String.fromCharCode(55358) + String.fromCharCode(56611),
            v = null,
            g = 127462,
            y = 127487,
            b = 8419,
            w = 6,
            x = /\bWindows\b/.test(navigator.userAgent),
            E = /\bChrome\//.test(navigator.userAgent),
            _ = /\bTrident\//.test(navigator.userAgent)
    }), define("github/timezone", ["exports"], function(e) {
        function t() {
            if ("Intl" in window) try {
                var e = new window.Intl.DateTimeFormat;
                return e.resolvedOptions().timeZone
            } catch (t) {
                if (!(t instanceof RangeError)) throw t
            }
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e["default"] = t
    }), define("github/feature-detection", ["exports", "./emoji-detection", "./timezone"], function(e, t, n) {
        function r(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function o(e) {
            return "function" == typeof e && e.toString().match(/native code/) ? !0 : !1
        }

        function i(e, t) {
            return e && t in e && o(e[t]) ? !0 : !1
        }

        function a() {
            if (!i(window, "CustomEvent")) return !1;
            try {
                var e = new CustomEvent("test", {
                    detail: "supported"
                });
                return "supported" === e.detail
            } catch (t) {
                return !1
            }
        }

        function s() {
            return i("classList" in l && l.classList, "add")
        }

        function u() {
            return s() ? (l.classList.add("a", "b"), l.classList.contains("b")) : !1
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var c = r(n),
            l = document.createElement("input"),
            f = t.detectEmojiSupportLevel(),
            d = {
                beacon: i(window.navigator, "sendBeacon"),
                classlist: s(),
                classlistMultiArg: u(),
                closest: i(l, "closest"),
                customElements: i(document, "registerElement"),
                customEvent: a(),
                emojiUnicodeVersion: f,
                fetch: i(window, "fetch"),
                highResolutionTime: i(window.performance, "now"),
                matchesSelector: i(l, "matches"),
                promises: i(window, "Promise"),
                stringEndsWith: i(String.prototype, "endsWith"),
                stringStartsWith: i(String.prototype, "startsWith"),
                timezone: !!c["default"](),
                url: i(window, "URL"),
                urlSearchParams: i(window, "URLSearchParams"),
                userTimingEntries: i(window.performance, "getEntries"),
                userTimingMark: i(window.performance, "mark"),
                weakmap: i(window, "WeakMap")
            };
        e["default"] = d
    }), define("github/html-safe", ["exports"], function(e) {
        function t(e) {
            var t = e.querySelector("meta[name=html-safe-nonce]");
            if (null == t || !(t instanceof HTMLMetaElement)) throw new Error("could not find html-safe-nonce on document");
            var n = t.content;
            if (n) return n;
            throw new Error("could not find html-safe-nonce on document")
        }

        function n(e, t) {
            var n = t.headers.get("content-type") || "";
            if (!n.startsWith("text/html")) throw new Error("expected response with text/html, but was " + n);
            var r = t.headers.get("x-html-safe") || "";
            if (r !== e) throw new Error("response X-HTML-Safe nonce did not match");
            return t
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.getDocumentHtmlSafeNonce = t, e.verifyResponseHtmlSafeNonce = n
    }), define("github/parse-html", ["exports", "invariant"], function(e, t) {
        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function r(e, t) {
            if ("function" != typeof HTMLTemplateElement.bootstrap) {
                var n = e.createElement("template");
                return n.innerHTML = t, e.importNode(n.content, !0)
            }
            var r = e.createDocumentFragment(),
                i = e.implementation.createHTMLDocument(void 0);
            o["default"](i.body, "github/parse-html.js:25"), i.body.innerHTML = t, o["default"](i.body.childNodes, "github/parse-html.js:28");
            var a = Array.from(i.body.childNodes),
                s = !0,
                u = !1,
                c = void 0;
            try {
                for (var l, f = a[Symbol.iterator](); !(s = (l = f.next()).done); s = !0) {
                    var d = l.value;
                    r.appendChild(d)
                }
            } catch (h) {
                u = !0, c = h
            } finally {
                try {
                    !s && f["return"] && f["return"]()
                } finally {
                    if (u) throw c
                }
            }
            return "function" == typeof HTMLTemplateElement.bootstrap && HTMLTemplateElement.bootstrap(r), r
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.parseHTML = r;
        var o = n(t)
    }), define("github/fetch", ["exports", "./html-safe", "./parse-html"], function(e, t, n) {
        function r(e) {
            if (e.status >= 200 && e.status < 300) return e;
            var t = new Error(e.statusText || e.status);
            throw t.response = e, t
        }

        function o(e) {
            return e.json()
        }

        function i(e) {
            return e.text()
        }

        function a(e, t) {
            var n = t;
            if (null == t || null == t.credentials) {
                if (n = {}, null != t)
                    for (var r in t) n[r] = t[r];
                n.credentials = "same-origin"
            }
            var o = new Request(e, n);
            return o.headers.append("X-Requested-With", "XMLHttpRequest"), o
        }

        function s(e, t) {
            var n = a(e, t);
            return self.fetch(n).then(r)
        }

        function u(e, t) {
            var n = a(e, t);
            return self.fetch(n).then(r).then(i)
        }

        function c(e, t) {
            var n = a(e, t);
            return n.headers.set("Accept", "application/json"), self.fetch(n).then(r).then(o)
        }

        function l(e) {
            return s(e.action, {
                method: e.method,
                body: new FormData(e)
            })
        }

        function f(e, o, i) {
            var s, u;
            return regeneratorRuntime.async(function(c) {
                for (;;) switch (c.prev = c.next) {
                    case 0:
                        return s = a(o, i), c.next = 3, regeneratorRuntime.awrap(self.fetch(s));
                    case 3:
                        return u = c.sent, r(u), t.verifyResponseHtmlSafeNonce(t.getDocumentHtmlSafeNonce(e), u), c.t0 = n.parseHTML, c.t1 = e, c.next = 10, regeneratorRuntime.awrap(u.text());
                    case 10:
                        return c.t2 = c.sent, c.abrupt("return", c.t0(c.t1, c.t2));
                    case 12:
                    case "end":
                        return c.stop()
                }
            }, null, this)
        }

        function d(e, t) {
            return new Promise(function(n, r) {
                function o(i) {
                    function a(e) {
                        switch (e.status) {
                            case 200:
                                n(e);
                                break;
                            case 202:
                                setTimeout(function() {
                                    return o(1.5 * i)
                                }, i);
                                break;
                            default:
                                var t = new Error(e.statusText || e.status);
                                t.response = e, r(t)
                        }
                    }
                    s(e, t).then(a, r)
                }
                o(1e3)
            })
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.fetch = s, e.fetchText = u, e.fetchJSON = c, e.fetchForm = l, e.fetchSafeDocumentFragment = f, e.fetchPoll = d
    }), define("github/focused", ["exports", "./jquery"], function(e, t) {
        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function r(e, t, n) {
            var r = n.focusin,
                i = n.focusout,
                a = void 0;
            a = t ? o["default"](e).find(t).filter(document.activeElement)[0] : o["default"](e).filter(document.activeElement)[0], a && r && r.call(a), o["default"](e).on("focusin", t, function() {
                a || (a = this, r && r.call(this))
            }), o["default"](e).on("focusout", t, function() {
                a && (a = null, i && i.call(this))
            })
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e["default"] = r;
        var o = n(t)
    }), define("github/form", ["exports"], function(e) {
        function t(e, t, n) {
            return e.dispatchEvent(new CustomEvent(t, {
                bubbles: !0,
                cancelable: n
            }))
        }

        function n(e) {
            t(e, "submit", !0) && e.submit()
        }

        function r(e, n) {
            if ("boolean" == typeof n) {
                if (!(e instanceof HTMLInputElement)) throw new TypeError("only checkboxes can be set to boolean value");
                e.checked = n
            } else {
                if ("checkbox" === e.type) throw new TypeError("checkbox can't be set to string value");
                e.value = n
            }
            t(e, "change", !1)
        }

        function o(e, t) {
            for (var n in t) {
                var r = t[n],
                    o = e.elements.namedItem(n);
                o instanceof HTMLInputElement ? o.value = r : o instanceof HTMLTextAreaElement && (o.value = r)
            }
        }

        function i(e) {
            if (!(e instanceof HTMLElement)) return !1;
            var t = e.nodeName.toLowerCase(),
                n = (e.getAttribute("type") || "").toLowerCase();
            return "select" === t || "textarea" === t || "input" === t && "submit" !== n && "reset" !== n || e.isContentEditable
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.submit = n, e.changeValue = r, e.fillFormValues = o, e.isFormField = i
    }), define("github/fragment-target", ["exports"], function(e) {
        function t(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : location.hash;
            return n(e, r(t))
        }

        function n(e, t) {
            return "" !== t ? e.getElementById(t) || e.getElementsByName(t)[0] : void 0
        }

        function r(e) {
            try {
                return decodeURIComponent(e.slice(1))
            } catch (t) {
                return ""
            }
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.findFragmentTarget = t, e.findElementByFragmentName = n, e.decodeFragmentValue = r
    }), define.register("google-analytics"),
    function() {
        function e(e) {
            x.set(e)
        }

        function t(e) {
            if (100 != e.get(Xt) && b(fe(e, Dt)) % 1e4 >= 100 * de(e, Xt)) throw "abort";
        }

        function n(e) {
            if ($(fe(e, Rt))) throw "abort"
        }

        function r() {
            var e = W.location.protocol;
            if ("http:" != e && "https:" != e) throw "abort"
        }

        function o(t) {
            try {
                B.navigator.sendBeacon ? e(42) : B.XMLHttpRequest && "withCredentials" in new B.XMLHttpRequest && e(40)
            } catch (n) {}
            t.set(vt, _(t), !0), t.set(Le, de(t, Le) + 1);
            var r = [];
            ce.map(function(e, n) {
                n.F && (e = t.get(e), void 0 != e && e != n.defaultValue && ("boolean" == typeof e && (e *= 1), r.push(n.F + "=" + P("" + e))))
            }), r.push("z=" + se()), t.set(Oe, r.join("&"), !0)
        }

        function i(e) {
            var t = fe(e, Yt) || K() + "/collect",
                n = fe(e, Me);
            if (!n && e.get(Ce) && (n = "beacon"), n) {
                var r = fe(e, Oe),
                    o = e.get(Se),
                    o = o || L;
                "image" == n ? ee(t, r, o) : "xhr" == n && te(t, r, o) || "beacon" == n && ne(t, r, o) || Q(t, r, o)
            } else Q(t, fe(e, Oe), e.get(Se));
            t = e.get(Rt), t = oe(t), n = t.hitcount, t.hitcount = n ? n + 1 : 1, t = e.get(Rt), delete oe(t).pending_experiments, e.set(Se, L, !0)
        }

        function a(e) {
            (B.gaData = B.gaData || {}).expId && e.set(st, (B.gaData = B.gaData || {}).expId), (B.gaData = B.gaData || {}).expVar && e.set(ut, (B.gaData = B.gaData || {}).expVar);
            var t, n = e.get(Rt);
            if (n = oe(n).pending_experiments) {
                var r = [];
                for (t in n) n.hasOwnProperty(t) && n[t] && r.push(encodeURIComponent(t) + "." + encodeURIComponent(n[t]));
                t = r.join("!")
            } else t = void 0;
            t && e.set(ct, t, !0)
        }

        function s() {
            if (B.navigator && "preview" == B.navigator.loadPurpose) throw "abort"
        }

        function u(e) {
            var t = B.gaDevIds;
            k(t) && 0 != t.length && e.set("&did", t.join(","), !0)
        }

        function c(e) {
            if (!e.get(Rt)) throw "abort"
        }

        function l(t) {
            var n = de(t, ht);
            n >= 500 && e(15);
            var r = fe(t, ke);
            if ("transaction" != r && "item" != r) {
                var r = de(t, mt),
                    o = (new Date).getTime(),
                    i = de(t, pt);
                if (0 == i && t.set(pt, o), i = Math.round(2 * (o - i) / 1e3), i > 0 && (r = Math.min(r + i, 20), t.set(pt, o)), 0 >= r) throw "abort";
                t.set(mt, --r)
            }
            t.set(ht, ++n)
        }

        function f(t, n, r, o) {
            n[t] = function() {
                try {
                    return o && e(o), r.apply(this, arguments)
                } catch (n) {
                    throw re("exc", t, n && n.name), n
                }
            }
        }

        function d() {
            var e, t, n;
            if ((n = (n = B.navigator) ? n.plugins : null) && n.length)
                for (var r = 0; r < n.length && !t; r++) {
                    var o = n[r]; - 1 < o.name.indexOf("Shockwave Flash") && (t = o.description)
                }
            if (!t) try {
                e = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7"), t = e.GetVariable("$version")
            } catch (i) {}
            if (!t) try {
                e = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6"), t = "WIN 6,0,21,0", e.AllowScriptAccess = "always", t = e.GetVariable("$version")
            } catch (i) {}
            if (!t) try {
                e = new ActiveXObject("ShockwaveFlash.ShockwaveFlash"), t = e.GetVariable("$version")
            } catch (i) {}
            return t && (e = t.match(/[\d]+/g)) && 3 <= e.length && (t = e[0] + "." + e[1] + " r" + e[2]), t || void 0
        }

        function h(e, t, n) {
            "none" == t && (t = "");
            var r = [],
                o = V(e);
            e = "__utma" == e ? 6 : 2;
            for (var i = 0; i < o.length; i++) {
                var a = ("" + o[i]).split(".");
                a.length >= e && r.push({
                    hash: a[0],
                    R: o[i],
                    O: a
                })
            }
            return 0 != r.length ? 1 == r.length ? r[0] : p(t, r) || p(n, r) || p(null, r) || r[0] : void 0
        }

        function p(e, t) {
            var n;
            null == e ? n = e = 1 : (n = b(e), e = b(O(e, ".") ? e.substring(1) : "." + e));
            for (var r = 0; r < t.length; r++)
                if (t[r].hash == n || t[r].hash == e) return t[r]
        }

        function m(e) {
            e = e.get(Dt);
            var t = v(e, 0);
            return "_ga=1." + P(t + "." + e)
        }

        function v(e, t) {
            var n = new Date,
                r = B.navigator,
                o = r.plugins || [];
            for (e = [e, r.userAgent, n.getTimezoneOffset(), n.getYear(), n.getDate(), n.getHours(), n.getMinutes() + t], t = 0; t < o.length; ++t) e.push(o[t].description);
            return b(e.join("."))
        }

        function g(e, t) {
            if (t == W.location.hostname) return !1;
            for (var n = 0; n < e.length; n++)
                if (e[n] instanceof RegExp) {
                    if (e[n].test(t)) return !0
                } else if (0 <= t.indexOf(e[n])) return !0;
            return !1
        }

        function y(e) {
            return 0 <= e.indexOf(".") || 0 <= e.indexOf(":")
        }

        function b(e) {
            var t, n, r = 1;
            if (e)
                for (r = 0, n = e.length - 1; n >= 0; n--) t = e.charCodeAt(n), r = (r << 6 & 268435455) + t + (t << 14), t = 266338304 & r, r = 0 != t ? r ^ t >> 21 : r;
            return r
        }
        var w = function(e) {
            this.w = e || []
        };
        w.prototype.set = function(e) {
            this.w[e] = !0
        }, w.prototype.encode = function() {
            for (var e = [], t = 0; t < this.w.length; t++) this.w[t] && (e[Math.floor(t / 6)] ^= 1 << t % 6);
            for (t = 0; t < e.length; t++) e[t] = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_".charAt(e[t] || 0);
            return e.join("") + "~"
        };
        var x = new w,
            E = function(e, t) {
                var n = new w(T(e));
                n.set(t), e.set(gt, n.w)
            },
            _ = function(e) {
                e = T(e), e = new w(e);
                for (var t = x.w.slice(), n = 0; n < e.w.length; n++) t[n] = t[n] || e.w[n];
                return new w(t).encode()
            },
            T = function(e) {
                return e = e.get(gt), k(e) || (e = []), e
            },
            j = function(e) {
                return "function" == typeof e
            },
            k = function(e) {
                return "[object Array]" == Object.prototype.toString.call(Object(e))
            },
            S = function(e) {
                return void 0 != e && -1 < (e.constructor + "").indexOf("String")
            },
            O = function(e, t) {
                return 0 == e.indexOf(t)
            },
            C = function(e) {
                return e ? e.replace(/^[\s\xa0]+|[\s\xa0]+$/g, "") : ""
            },
            M = function(e) {
                var t = W.createElement("img");
                return t.width = 1, t.height = 1, t.src = e, t
            },
            L = function() {},
            P = function(t) {
                return encodeURIComponent instanceof Function ? encodeURIComponent(t) : (e(28), t)
            },
            A = function(t, n, r, o) {
                try {
                    t.addEventListener ? t.addEventListener(n, r, !!o) : t.attachEvent && t.attachEvent("on" + n, r)
                } catch (i) {
                    e(27)
                }
            },
            D = /^[\w\-:\/.?=&%!]+$/,
            N = function(e, t, n, r) {
                e && (n ? (r = "", t && D.test(t) && (r = ' id="' + t + '"'), D.test(e) && W.write("<script" + r + ' src="' + e + '"></script>')) : (n = W.createElement("script"), n.type = "text/javascript", n.async = !0, n.src = e, r && (n.onload = r), t && (n.id = t), e = W.getElementsByTagName("script")[0], e.parentNode.insertBefore(n, e)))
            },
            q = function() {
                return "https:" == W.location.protocol
            },
            R = function(e, t) {
                return (e = e.match("(?:&|#|\\?)" + P(t).replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1") + "=([^&#]*)")) && 2 == e.length ? e[1] : ""
            },
            F = function() {
                var e = "" + W.location.hostname;
                return 0 == e.indexOf("www.") ? e.substring(4) : e
            },
            I = function(e) {
                var t = W.referrer;
                if (/^https?:\/\//i.test(t)) {
                    if (e) return t;
                    e = "//" + W.location.hostname;
                    var n = t.indexOf(e);
                    if ((5 == n || 6 == n) && (e = t.charAt(n + e.length), "/" == e || "?" == e || "" == e || ":" == e)) return;
                    return t
                }
            },
            H = function(e, t) {
                if (1 == t.length && null != t[0] && "object" == typeof t[0]) return t[0];
                for (var n = {}, r = Math.min(e.length + 1, t.length), o = 0; r > o; o++) {
                    if ("object" == typeof t[o]) {
                        for (var i in t[o]) t[o].hasOwnProperty(i) && (n[i] = t[o][i]);
                        break
                    }
                    o < e.length && (n[e[o]] = t[o])
                }
                return n
            },
            U = function() {
                this.keys = [], this.values = {}, this.m = {}
            };
        U.prototype.set = function(e, t, n) {
            this.keys.push(e), n ? this.m[":" + e] = t : this.values[":" + e] = t
        }, U.prototype.get = function(e) {
            return this.m.hasOwnProperty(":" + e) ? this.m[":" + e] : this.values[":" + e]
        }, U.prototype.map = function(e) {
            for (var t = 0; t < this.keys.length; t++) {
                var n = this.keys[t],
                    r = this.get(n);
                r && e(n, r)
            }
        };
        var B = window,
            W = document,
            z = window,
            $ = function(e) {
                var t = z._gaUserPrefs;
                if (t && t.ioo && t.ioo() || e && !0 === z["ga-disable-" + e]) return !0;
                try {
                    var n = z.external;
                    if (n && n._gaUserPrefs && "oo" == n._gaUserPrefs) return !0
                } catch (r) {}
                return !1
            },
            V = function(e) {
                var t = [],
                    n = W.cookie.split(";");
                e = new RegExp("^\\s*" + e + "=\\s*(.*?)\\s*$");
                for (var r = 0; r < n.length; r++) {
                    var o = n[r].match(e);
                    o && t.push(o[1])
                }
                return t
            },
            X = function(t, n, r, o, i, a) {
                if (i = $(i) ? !1 : Y.test(W.location.hostname) || "/" == r && J.test(o) ? !1 : !0, !i) return !1;
                if (n && 1200 < n.length && (n = n.substring(0, 1200), e(24)), r = t + "=" + n + "; path=" + r + "; ", a && (r += "expires=" + new Date((new Date).getTime() + a).toGMTString() + "; "), o && "none" != o && (r += "domain=" + o + ";"), o = W.cookie, W.cookie = r, !(o = o != W.cookie)) e: {
                    for (t = V(t), o = 0; o < t.length; o++)
                        if (n == t[o]) {
                            o = !0;
                            break e
                        }
                    o = !1
                }
                return o
            },
            G = function(e) {
                return P(e).replace(/\(/g, "%28").replace(/\)/g, "%29")
            },
            J = /^(www\.)?google(\.com?)?(\.[a-z]{2})?$/,
            Y = /(^|\.)doubleclick\.net$/i,
            K = function() {
                return (Ee || q() ? "https:" : "http:") + "//www.google-analytics.com"
            },
            Z = function(e) {
                this.name = "len", this.message = e + "-8192"
            },
            Q = function(e, t, n) {
                if (n = n || L, 2036 >= t.length) ee(e, t, n);
                else {
                    if (!(8192 >= t.length)) throw re("len", t.length), new Z(t.length);
                    ne(e, t, n) || te(e, t, n) || ee(e, t, n)
                }
            },
            ee = function(e, t, n) {
                var r = M(e + "?" + t);
                r.onload = r.onerror = function() {
                    r.onload = null, r.onerror = null, n()
                }
            },
            te = function(e, t, n) {
                var r = B.XMLHttpRequest;
                if (!r) return !1;
                var o = new r;
                return "withCredentials" in o ? (o.open("POST", e, !0), o.withCredentials = !0, o.setRequestHeader("Content-Type", "text/plain"), o.onreadystatechange = function() {
                    4 == o.readyState && (n(), o = null)
                }, o.send(t), !0) : !1
            },
            ne = function(e, t, n) {
                return B.navigator.sendBeacon && B.navigator.sendBeacon(e, t) ? (n(), !0) : !1
            },
            re = function(e, t, n) {
                1 <= 100 * Math.random() || $("?") || (e = ["t=error", "_e=" + e, "_v=j48", "sr=1"], t && e.push("_f=" + t), n && e.push("_m=" + P(n.substring(0, 100))), e.push("aip=1"), e.push("z=" + ae()), ee(K() + "/collect", e.join("&"), L))
            },
            oe = function(e) {
                var t = B.gaData = B.gaData || {};
                return t[e] = t[e] || {}
            },
            ie = function() {
                this.M = []
            };
        ie.prototype.add = function(e) {
            this.M.push(e)
        }, ie.prototype.D = function(e) {
            try {
                for (var t = 0; t < this.M.length; t++) {
                    var n = e.get(this.M[t]);
                    n && j(n) && n.call(B, e)
                }
            } catch (r) {}
            t = e.get(Se), t != L && j(t) && (e.set(Se, L, !0), setTimeout(t, 10))
        };
        var ae = function() {
                return Math.round(2147483647 * Math.random())
            },
            se = function() {
                try {
                    var e = new Uint32Array(1);
                    return B.crypto.getRandomValues(e), 2147483647 & e[0]
                } catch (t) {
                    return ae()
                }
            },
            ue = function() {
                this.data = new U
            },
            ce = new U,
            le = [];
        ue.prototype.get = function(e) {
            var t = me(e),
                n = this.data.get(e);
            return t && void 0 == n && (n = j(t.defaultValue) ? t.defaultValue() : t.defaultValue), t && t.Z ? t.Z(this, e, n) : n
        };
        var fe = function(e, t) {
                return e = e.get(t), void 0 == e ? "" : "" + e
            },
            de = function(e, t) {
                return e = e.get(t), void 0 == e || "" === e ? 0 : 1 * e
            };
        ue.prototype.set = function(e, t, n) {
            if (e)
                if ("object" == typeof e)
                    for (var r in e) e.hasOwnProperty(r) && he(this, r, e[r], n);
                else he(this, e, t, n)
        };
        var he = function(e, t, n, r) {
                if (void 0 != n) switch (t) {
                    case Rt:
                        Fn.test(n)
                }
                var o = me(t);
                o && o.o ? o.o(e, t, n, r) : e.data.set(t, n, r)
            },
            pe = function(e, t, n, r, o) {
                this.name = e, this.F = t, this.Z = r, this.o = o, this.defaultValue = n
            },
            me = function(e) {
                var t = ce.get(e);
                if (!t)
                    for (var n = 0; n < le.length; n++) {
                        var r = le[n],
                            o = r[0].exec(e);
                        if (o) {
                            t = r[1](o), ce.set(t.name, t);
                            break
                        }
                    }
                return t
            },
            ve = function(e) {
                var t;
                return ce.map(function(n, r) {
                    r.F == e && (t = r)
                }), t && t.name
            },
            ge = function(e, t, n, r, o) {
                return e = new pe(e, t, n, r, o), ce.set(e.name, e), e.name
            },
            ye = function(e, t) {
                le.push([new RegExp("^" + e + "$"), t])
            },
            be = function(e, t, n) {
                return ge(e, t, n, void 0, we)
            },
            we = function() {},
            xe = S(window.GoogleAnalyticsObject) && C(window.GoogleAnalyticsObject) || "ga",
            Ee = !1,
            _e = be("apiVersion", "v"),
            Te = be("clientVersion", "_v");
        ge("anonymizeIp", "aip");
        var je = ge("adSenseId", "a"),
            ke = ge("hitType", "t"),
            Se = ge("hitCallback"),
            Oe = ge("hitPayload");
        ge("nonInteraction", "ni"), ge("currencyCode", "cu"), ge("dataSource", "ds");
        var Ce = ge("useBeacon", void 0, !1),
            Me = ge("transport");
        ge("sessionControl", "sc", ""), ge("sessionGroup", "sg"), ge("queueTime", "qt");
        var Le = ge("_s", "_s");
        ge("screenName", "cd");
        var Pe = ge("location", "dl", ""),
            Ae = ge("referrer", "dr"),
            De = ge("page", "dp", "");
        ge("hostname", "dh");
        var Ne = ge("language", "ul"),
            qe = ge("encoding", "de");
        ge("title", "dt", function() {
            return W.title || void 0
        }), ye("contentGroup([0-9]+)", function(e) {
            return new pe(e[0], "cg" + e[1])
        });
        var Re = ge("screenColors", "sd"),
            Fe = ge("screenResolution", "sr"),
            Ie = ge("viewportSize", "vp"),
            He = ge("javaEnabled", "je"),
            Ue = ge("flashVersion", "fl");
        ge("campaignId", "ci"), ge("campaignName", "cn"), ge("campaignSource", "cs"), ge("campaignMedium", "cm"), ge("campaignKeyword", "ck"), ge("campaignContent", "cc");
        var Be = ge("eventCategory", "ec"),
            We = ge("eventAction", "ea"),
            ze = ge("eventLabel", "el"),
            $e = ge("eventValue", "ev"),
            Ve = ge("socialNetwork", "sn"),
            Xe = ge("socialAction", "sa"),
            Ge = ge("socialTarget", "st"),
            Je = ge("l1", "plt"),
            Ye = ge("l2", "pdt"),
            Ke = ge("l3", "dns"),
            Ze = ge("l4", "rrt"),
            Qe = ge("l5", "srt"),
            et = ge("l6", "tcp"),
            tt = ge("l7", "dit"),
            nt = ge("l8", "clt"),
            rt = ge("timingCategory", "utc"),
            ot = ge("timingVar", "utv"),
            it = ge("timingLabel", "utl"),
            at = ge("timingValue", "utt");
        ge("appName", "an"), ge("appVersion", "av", ""), ge("appId", "aid", ""), ge("appInstallerId", "aiid", ""), ge("exDescription", "exd"), ge("exFatal", "exf");
        var st = ge("expId", "xid"),
            ut = ge("expVar", "xvar"),
            ct = ge("exp", "exp"),
            lt = ge("_utma", "_utma"),
            ft = ge("_utmz", "_utmz"),
            dt = ge("_utmht", "_utmht"),
            ht = ge("_hc", void 0, 0),
            pt = ge("_ti", void 0, 0),
            mt = ge("_to", void 0, 20);
        ye("dimension([0-9]+)", function(e) {
            return new pe(e[0], "cd" + e[1])
        }), ye("metric([0-9]+)", function(e) {
            return new pe(e[0], "cm" + e[1])
        }), ge("linkerParam", void 0, void 0, m, we);
        var vt = ge("usage", "_u"),
            gt = ge("_um");
        ge("forceSSL", void 0, void 0, function() {
            return Ee
        }, function(t, n, r) {
            e(34), Ee = !!r
        });
        var yt = ge("_j1", "jid");
        ye("\\&(.*)", function(e) {
            var t = new pe(e[0], e[1]),
                n = ve(e[0].substring(1));
            return n && (t.Z = function(e) {
                return e.get(n)
            }, t.o = function(e, t, r, o) {
                e.set(n, r, o)
            }, t.F = void 0), t
        });
        var bt = be("_oot"),
            wt = ge("previewTask"),
            xt = ge("checkProtocolTask"),
            Et = ge("validationTask"),
            _t = ge("checkStorageTask"),
            Tt = ge("historyImportTask"),
            jt = ge("samplerTask"),
            kt = ge("_rlt"),
            St = ge("buildHitTask"),
            Ot = ge("sendHitTask"),
            Ct = ge("ceTask"),
            Mt = ge("devIdTask"),
            Lt = ge("timingTask"),
            Pt = ge("displayFeaturesTask"),
            At = be("name"),
            Dt = be("clientId", "cid"),
            Nt = be("clientIdTime"),
            qt = ge("userId", "uid"),
            Rt = be("trackingId", "tid"),
            Ft = be("cookieName", void 0, "_ga"),
            It = be("cookieDomain"),
            Ht = be("cookiePath", void 0, "/"),
            Ut = be("cookieExpires", void 0, 63072e3),
            Bt = be("legacyCookieDomain"),
            Wt = be("legacyHistoryImport", void 0, !0),
            zt = be("storage", void 0, "cookie"),
            $t = be("allowLinker", void 0, !1),
            Vt = be("allowAnchor", void 0, !0),
            Xt = be("sampleRate", "sf", 100),
            Gt = be("siteSpeedSampleRate", void 0, 1),
            Jt = be("alwaysSendReferrer", void 0, !1),
            Yt = ge("transportUrl"),
            Kt = ge("_r", "_r"),
            Zt = function(e, t, n) {
                this.V = e, this.fa = t, this.$ = !1, this.oa = n, this.ea = 1
            },
            Qt = function(e, t) {
                var n;
                if (e.fa && e.$) return 0;
                if (e.$ = !0, t) {
                    if (e.oa && de(t, e.oa)) return de(t, e.oa);
                    if (0 == t.get(Gt)) return 0
                }
                return 0 == e.V ? 0 : (void 0 === n && (n = se()), 0 == n % e.V ? Math.floor(n / e.V) % e.ea + 1 : 0)
            },
            en = function(e) {
                var t = Math.min(de(e, Gt), 100);
                return b(fe(e, Dt)) % 100 >= t ? !1 : !0
            },
            tn = function(e) {
                var t = {};
                if (nn(t) || rn(t)) {
                    var n = t[Je];
                    void 0 == n || 1 / 0 == n || isNaN(n) || (n > 0 ? (on(t, Ke), on(t, et), on(t, Qe), on(t, Ye), on(t, Ze), on(t, tt), on(t, nt), e(t)) : A(B, "load", function() {
                        tn(e)
                    }, !1))
                }
            },
            nn = function(e) {
                var t = B.performance || B.webkitPerformance,
                    t = t && t.timing;
                if (!t) return !1;
                var n = t.navigationStart;
                return 0 == n ? !1 : (e[Je] = t.loadEventStart - n, e[Ke] = t.domainLookupEnd - t.domainLookupStart, e[et] = t.connectEnd - t.connectStart, e[Qe] = t.responseStart - t.requestStart, e[Ye] = t.responseEnd - t.responseStart, e[Ze] = t.fetchStart - n, e[tt] = t.domInteractive - n, e[nt] = t.domContentLoadedEventStart - n, !0)
            },
            rn = function(e) {
                if (B.top != B) return !1;
                var t = B.external,
                    n = t && t.onloadT;
                return t && !t.isValidLoadTime && (n = void 0), n > 2147483648 && (n = void 0), n > 0 && t.setPageReadyTime(), void 0 == n ? !1 : (e[Je] = n, !0)
            },
            on = function(e, t) {
                var n = e[t];
                (isNaN(n) || 1 / 0 == n || 0 > n) && (e[t] = void 0)
            },
            an = function(e) {
                return function(t) {
                    if ("pageview" == t.get(ke) && !e.I) {
                        e.I = !0;
                        var n = en(t);
                        t = 0 < R(t.get(Pe), "gclid").length, (n || t) && tn(function(t) {
                            e.send(n ? "timing" : "adtiming", t)
                        })
                    }
                }
            },
            sn = !1,
            un = function(t) {
                if ("cookie" == fe(t, zt)) {
                    var n = fe(t, Ft),
                        r = fn(t),
                        o = pn(fe(t, Ht)),
                        i = hn(fe(t, It)),
                        a = 1e3 * de(t, Ut),
                        s = fe(t, Rt);
                    if ("auto" != i) X(n, r, o, i, s, a) && (sn = !0);
                    else {
                        e(32);
                        var u;
                        if (r = [], i = F().split("."), 4 != i.length || (u = i[i.length - 1], parseInt(u, 10) != u)) {
                            for (u = i.length - 2; u >= 0; u--) r.push(i.slice(u).join("."));
                            r.push("none"), u = r
                        } else u = ["none"];
                        for (var c = 0; c < u.length; c++)
                            if (i = u[c], t.data.set(It, i), r = fn(t), X(n, r, o, i, s, a)) return void(sn = !0);
                        t.data.set(It, "auto")
                    }
                }
            },
            cn = function(e) {
                if ("cookie" == fe(e, zt) && !sn && (un(e), !sn)) throw "abort"
            },
            ln = function(t) {
                if (t.get(Wt)) {
                    var n = fe(t, It),
                        r = fe(t, Bt) || F(),
                        o = h("__utma", r, n);
                    o && (e(19), t.set(dt, (new Date).getTime(), !0), t.set(lt, o.R), (n = h("__utmz", r, n)) && o.hash == n.hash && t.set(ft, n.R))
                }
            },
            fn = function(e) {
                var t = G(fe(e, Dt)),
                    n = hn(fe(e, It)).split(".").length;
                return e = mn(fe(e, Ht)), e > 1 && (n += "-" + e), ["GA1", n, t].join(".")
            },
            dn = function(e, t, n) {
                for (var r, o = [], i = [], a = 0; a < e.length; a++) {
                    var s = e[a];
                    s.H[n] == t ? o.push(s) : void 0 == r || s.H[n] < r ? (i = [s], r = s.H[n]) : s.H[n] == r && i.push(s)
                }
                return 0 < o.length ? o : i
            },
            hn = function(e) {
                return 0 == e.indexOf(".") ? e.substr(1) : e
            },
            pn = function(e) {
                return e ? (1 < e.length && e.lastIndexOf("/") == e.length - 1 && (e = e.substr(0, e.length - 1)), 0 != e.indexOf("/") && (e = "/" + e), e) : "/"
            },
            mn = function(e) {
                return e = pn(e), "/" == e ? 1 : e.split("/").length
            },
            vn = new RegExp(/^https?:\/\/([^\/:]+)/),
            gn = /(.*)([?&#])(?:_ga=[^&#]*)(?:&?)(.*)/,
            yn = function(t) {
                e(48), this.target = t, this.T = !1
            };
        yn.prototype.ca = function(e, t) {
            if (e.tagName) {
                if ("a" == e.tagName.toLowerCase()) return void(e.href && (e.href = bn(this, e.href, t)));
                if ("form" == e.tagName.toLowerCase()) return wn(this, e)
            }
            return "string" == typeof e ? bn(this, e, t) : void 0
        };
        var bn = function(e, t, n) {
                var r = gn.exec(t);
                r && 3 <= r.length && (t = r[1] + (r[3] ? r[2] + r[3] : "")), e = e.target.get("linkerParam");
                var o = t.indexOf("?"),
                    r = t.indexOf("#");
                return n ? t += (-1 == r ? "#" : "&") + e : (n = -1 == o ? "?" : "&", t = -1 == r ? t + (n + e) : t.substring(0, r) + n + e + t.substring(r)), t = t.replace(/&+_ga=/, "&_ga=")
            },
            wn = function(e, t) {
                if (t && t.action) {
                    var n = e.target.get("linkerParam").split("=")[1];
                    if ("get" == t.method.toLowerCase()) {
                        e = t.childNodes || [];
                        for (var r = 0; r < e.length; r++)
                            if ("_ga" == e[r].name) return void e[r].setAttribute("value", n);
                        e = W.createElement("input"), e.setAttribute("type", "hidden"), e.setAttribute("name", "_ga"), e.setAttribute("value", n), t.appendChild(e)
                    } else "post" == t.method.toLowerCase() && (t.action = bn(e, t.action))
                }
            };
        yn.prototype.S = function(t, n, r) {
            function o(r) {
                try {
                    r = r || B.event;
                    var o;
                    e: {
                        var a = r.target || r.srcElement;
                        for (r = 100; a && r > 0;) {
                            if (a.href && a.nodeName.match(/^a(?:rea)?$/i)) {
                                o = a;
                                break e
                            }
                            a = a.parentNode, r--
                        }
                        o = {}
                    }("http:" == o.protocol || "https:" == o.protocol) && g(t, o.hostname || "") && o.href && (o.href = bn(i, o.href, n))
                } catch (s) {
                    e(26)
                }
            }
            var i = this;
            this.T || (this.T = !0, A(W, "mousedown", o, !1), A(W, "keyup", o, !1)), r && A(W, "submit", function(e) {
                if (e = e || B.event, (e = e.target || e.srcElement) && e.action) {
                    var n = e.action.match(vn);
                    n && g(t, n[1]) && wn(i, e)
                }
            })
        };
        var xn, En = /^(GTM|OPT)-[A-Z0-9]+$/,
            _n = /;_gaexp=[^;]*/g,
            Tn = /;((__utma=)|([^;=]+=GAX?\d+\.))[^;]*/g,
            jn = function(e) {
                function t(e, t) {
                    t && (n += "&" + e + "=" + P(t))
                }
                var n = "https://www.google-analytics.com/gtm/js?id=" + P(e.id);
                return "dataLayer" != e.B && t("l", e.B), t("t", e.target), t("cid", e.ja), t("cidt", e.ka), t("gac", e.la), t("aip", e.ia), e.na && t("m", "sync"), t("cycle", e.G), e.qa && t("gclid", e.qa), n
            },
            kn = function(t, n, r) {
                this.U = yt, this.aa = n, (n = r) || (n = (n = fe(t, At)) && "t0" != n ? Ln.test(n) ? "_gat_" + G(fe(t, Rt)) : "_gat_" + G(n) : "_gat"), this.Y = n, Qt(new Zt(10), t) && (e(30), this.pa = !0)
            },
            Sn = function(e, t) {
                var n = t.get(St);
                t.set(St, function(t) {
                    On(e, t);
                    var r = n(t);
                    return Cn(e, t), r
                });
                var r = t.get(Ot);
                t.set(Ot, function(t) {
                    var n = r(t);
                    return Mn(e, t), n
                })
            },
            On = function(e, t) {
                t.get(e.U) || ("1" == V(e.Y)[0] ? t.set(e.U, "", !0) : t.set(e.U, "" + ae(), !0))
            },
            Cn = function(e, t) {
                if (t.get(e.U)) {
                    var n = 6e5;
                    e.pa && (n /= 10), X(e.Y, "1", t.get(Ht), t.get(It), t.get(Rt), n)
                }
            },
            Mn = function(e, t) {
                if (t.get(e.U)) {
                    var n = new U,
                        r = function(e) {
                            me(e).F && n.set(me(e).F, t.get(e))
                        };
                    r(_e), r(Te), r(Rt), r(Dt), r(qt), r(e.U), n.set(me(vt).F, _(t));
                    var o = e.aa;
                    n.map(function(e, t) {
                        o += P(e) + "=", o += P("" + t) + "&"
                    }), o += "z=" + ae(), M(o), t.set(e.U, "", !0)
                }
            },
            Ln = /^gtm\d+$/,
            Pn = function(e, t) {
                if (e = e.b, !e.get("dcLoaded")) {
                    E(e, 29), t = t || {};
                    var n;
                    t[Ft] && (n = G(t[Ft])), t = new kn(e, "https://stats.g.doubleclick.net/r/collect?t=dc&aip=1&_r=3&", n), Sn(t, e), e.set("dcLoaded", !0)
                }
            },
            An = function(e) {
                if (!e.get("dcLoaded") && "cookie" == e.get(zt)) {
                    E(e, 51);
                    var t = new kn(e);
                    On(t, e), Cn(t, e), e.get(t.U) && (e.set(Kt, 1, !0), e.set(Yt, K() + "/r/collect", !0))
                }
            },
            Dn = function() {
                var e = B.gaGlobal = B.gaGlobal || {};
                return e.hid = e.hid || ae()
            },
            Nn = function(e, t, n) {
                if (!xn) {
                    var r;
                    r = W.location.hash;
                    var o = B.name,
                        i = /^#?gaso=([^&]*)/;
                    (o = (r = (r = r && r.match(i) || o && o.match(i)) ? r[1] : V("GASO")[0] || "") && r.match(/^(?:!([-0-9a-z.]{1,40})!)?([-.\w]{10,1200})$/i)) && (X("GASO", "" + r, n, t, e, 0), window._udo || (window._udo = t), window._utcp || (window._utcp = n), e = o[1], N("https://www.google.com/analytics/web/inpage/pub/inpage.js?" + (e ? "prefix=" + e + "&" : "") + ae(), "_gasojs")), xn = !0
                }
            },
            qn = function(e) {
                return e ? (1 * e).toFixed(3) : "0"
            },
            Rn = function(t) {
                var n = B.performance;
                if (n && n.getEntriesByName) {
                    e(35);
                    var r = "https://www.google-analytics.com/analytics.js?wpid=" + t;
                    N(r, void 0, void 0, function() {
                        try {
                            var o = 1,
                                i = n.getEntriesByName("https://www.google-analytics.com/analytics.js");
                            i && 0 != i.length || (i = n.getEntriesByName("http://www.google-analytics.com/analytics.js"), o = 0);
                            var a = n.getEntriesByName(r);
                            if (i && 1 == i.length && a && 1 == a.length) {
                                e(37);
                                var s = i[0],
                                    u = a[0],
                                    c = {
                                        tid: t,
                                        ad: qn(s.duration),
                                        bd: qn(u.duration),
                                        ar: qn(s.responseEnd - s.requestStart),
                                        br: qn(u.responseEnd - u.requestStart),
                                        an: qn(s.domainLookupEnd - s.domainLookupStart),
                                        bn: qn(u.domainLookupEnd - u.domainLookupStart),
                                        ac: qn(s.connectEnd - s.connectStart),
                                        bc: qn(u.connectEnd - u.connectStart),
                                        as: o
                                    },
                                    o = [];
                                o.push("_v=j48"), o.push("id=10");
                                for (var l in c) c.hasOwnProperty(l) && o.push(l + "=" + P(c[l]));
                                o.push("z=" + ae()), ee("https://www.google-analytics.com/u/d", o.join("&"), L)
                            }
                        } catch (f) {}
                    })
                }
            },
            Fn = /^(UA|YT|MO|GP)-(\d+)-(\d+)$/,
            In = function(f) {
                function d(e, t) {
                    m.b.data.set(e, t)
                }

                function h(e, t) {
                    d(e, t), m.filters.add(e)
                }

                function p(t, n, r) {
                    Qt(new Zt(1e4, !0, n), m.b) && (t = V(t)) && 0 < t.length && e(r)
                }
                var m = this;
                this.b = new ue, this.filters = new ie, d(At, f[At]), d(Rt, C(f[Rt])), d(Ft, f[Ft]), d(It, f[It] || F()), d(Ht, f[Ht]), d(Ut, f[Ut]), d(Bt, f[Bt]), d(Wt, f[Wt]), d($t, f[$t]), d(Vt, f[Vt]), d(Xt, f[Xt]), d(Gt, f[Gt]), d(Jt, f[Jt]), d(zt, f[zt]), d(qt, f[qt]), d(Nt, f[Nt]), d(_e, 1), d(Te, "j48"), h(bt, n), h(wt, s), h(xt, r), h(Et, c), h(_t, cn), h(Tt, ln), h(jt, t), h(kt, l), h(Ct, a), h(Mt, u), h(Pt, An), h(St, o), h(Ot, i), h(Lt, an(this)), Hn(this.b, f[Dt]), Un(this.b), this.b.set(je, Dn()), Nn(this.b.get(Rt), this.b.get(It), this.b.get(Ht)), this.ra = new Zt(1e4, !0, "gaexp10"), p("_gid", "gacookie11", 41), p("_gaid", "gacookie12", 44)
            },
            Hn = function(t, n) {
                if ("cookie" == fe(t, zt)) {
                    sn = !1;
                    var r;
                    e: {
                        var o = V(fe(t, Ft));
                        if (o && !(1 > o.length)) {
                            r = [];
                            for (var i = 0; i < o.length; i++) {
                                var a;
                                a = o[i].split(".");
                                var s = a.shift();
                                ("GA1" == s || "1" == s) && 1 < a.length ? (s = a.shift().split("-"), 1 == s.length && (s[1] = "1"), s[0] *= 1, s[1] *= 1, a = {
                                    H: s,
                                    s: a.join(".")
                                }) : a = void 0, a && r.push(a)
                            }
                            if (1 == r.length) {
                                e(13), r = r[0].s;
                                break e
                            }
                            if (0 != r.length) {
                                if (e(14), o = hn(fe(t, It)).split(".").length, r = dn(r, o, 0), 1 == r.length) {
                                    r = r[0].s;
                                    break e
                                }
                                o = mn(fe(t, Ht)), r = dn(r, o, 1), r = r[0] && r[0].s;
                                break e
                            }
                            e(12)
                        }
                        r = void 0
                    }
                    r || (r = fe(t, It), o = fe(t, Bt) || F(), r = h("__utma", o, r), void 0 != r ? (e(10), r = r.O[1] + "." + r.O[2]) : r = void 0), r && (t.data.set(Dt, r), sn = !0)
                }
                if (r = t.get(Vt), (i = R(W.location[r ? "href" : "search"], "_ga")) && (t.get($t) ? (r = i.indexOf("."), -1 == r ? e(22) : (o = i.substring(r + 1), "1" != i.substring(0, r) ? e(22) : (r = o.indexOf("."), -1 == r ? e(22) : (i = o.substring(0, r), r = o.substring(r + 1), i != v(r, 0) && i != v(r, -1) && i != v(r, -2) ? e(23) : (e(11), t.data.set(Dt, r)))))) : e(21)), n && (e(9), t.data.set(Dt, P(n))), !t.get(Dt))
                    if (n = (n = B.gaGlobal && B.gaGlobal.vid) && -1 != n.search(/^(?:utma\.)?\d+\.\d+$/) ? n : void 0) e(17), t.data.set(Dt, n);
                    else {
                        for (e(8), n = B.navigator.userAgent + (W.cookie ? W.cookie : "") + (W.referrer ? W.referrer : ""), r = n.length, o = B.history.length; o > 0;) n += o-- ^ r++;
                        t.data.set(Dt, [ae() ^ 2147483647 & b(n), Math.round((new Date).getTime() / 1e3)].join("."))
                    }
                un(t)
            },
            Un = function(t) {
                var n = B.navigator,
                    r = B.screen,
                    o = W.location;
                if (t.set(Ae, I(t.get(Jt))), o) {
                    var i = o.pathname || "";
                    "/" != i.charAt(0) && (e(31), i = "/" + i), t.set(Pe, o.protocol + "//" + o.hostname + i + o.search)
                }
                r && t.set(Fe, r.width + "x" + r.height), r && t.set(Re, r.colorDepth + "-bit");
                var r = W.documentElement,
                    a = (i = W.body) && i.clientWidth && i.clientHeight,
                    s = [];
                if (r && r.clientWidth && r.clientHeight && ("CSS1Compat" === W.compatMode || !a) ? s = [r.clientWidth, r.clientHeight] : a && (s = [i.clientWidth, i.clientHeight]), r = 0 >= s[0] || 0 >= s[1] ? "" : s.join("x"), t.set(Ie, r), t.set(Ue, d()), t.set(qe, W.characterSet || W.charset), t.set(He, n && "function" == typeof n.javaEnabled && n.javaEnabled() || !1), t.set(Ne, (n && (n.language || n.browserLanguage) || "").toLowerCase()), o && t.get(Vt) && (n = W.location.hash)) {
                    for (n = n.split(/[?&#]+/), o = [], r = 0; r < n.length; ++r)(O(n[r], "utm_id") || O(n[r], "utm_campaign") || O(n[r], "utm_source") || O(n[r], "utm_medium") || O(n[r], "utm_term") || O(n[r], "utm_content") || O(n[r], "gclid") || O(n[r], "dclid") || O(n[r], "gclsrc")) && o.push(n[r]);
                    0 < o.length && (n = "#" + o.join("&"), t.set(Pe, t.get(Pe) + n))
                }
            };
        In.prototype.get = function(e) {
            return this.b.get(e)
        }, In.prototype.set = function(e, t) {
            this.b.set(e, t)
        };
        var Bn = {
            pageview: [De],
            event: [Be, We, ze, $e],
            social: [Ve, Xe, Ge],
            timing: [rt, ot, at, it]
        };
        In.prototype.send = function(e) {
            if (!(1 > arguments.length)) {
                var t, n;
                "string" == typeof arguments[0] ? (t = arguments[0], n = [].slice.call(arguments, 1)) : (t = arguments[0] && arguments[0][ke], n = arguments), t && (n = H(Bn[t] || [], n), n[ke] = t, this.b.set(n, void 0, !0), this.filters.D(this.b), this.b.data.m = {}, Qt(this.ra, this.b) && Rn(this.b.get(Rt)))
            }
        }, In.prototype.ma = function(e, t) {
            var n = this;
            Kn(e, n, t) || (Qn(e, function() {
                Kn(e, n, t)
            }), Zn(String(n.get(At)), e, void 0, t, !0))
        };
        var Wn, zn, $n, Vn, Xn = function(e) {
                return "prerender" == W.visibilityState ? !1 : (e(), !0)
            },
            Gn = function(t) {
                if (!Xn(t)) {
                    e(16);
                    var n = !1,
                        r = function() {
                            if (!n && Xn(t)) {
                                n = !0;
                                var e = r,
                                    o = W;
                                o.removeEventListener ? o.removeEventListener("visibilitychange", e, !1) : o.detachEvent && o.detachEvent("onvisibilitychange", e)
                            }
                        };
                    A(W, "visibilitychange", r)
                }
            },
            Jn = /^(?:(\w+)\.)?(?:(\w+):)?(\w+)$/,
            Yn = function(e) {
                if (j(e[0])) this.u = e[0];
                else {
                    var t = Jn.exec(e[0]);
                    if (null != t && 4 == t.length && (this.c = t[1] || "t0", this.K = t[2] || "", this.C = t[3], this.a = [].slice.call(e, 1), this.K || (this.A = "create" == this.C, this.i = "require" == this.C, this.g = "provide" == this.C, this.ba = "remove" == this.C), this.i && (3 <= this.a.length ? (this.X = this.a[1], this.W = this.a[2]) : this.a[1] && (S(this.a[1]) ? this.X = this.a[1] : this.W = this.a[1]))), t = e[1], e = e[2], !this.C) throw "abort";
                    if (this.i && (!S(t) || "" == t)) throw "abort";
                    if (this.g && (!S(t) || "" == t || !j(e))) throw "abort";
                    if (y(this.c) || y(this.K)) throw "abort";
                    if (this.g && "t0" != this.c) throw "abort"
                }
            };
        Wn = new U, $n = new U, Vn = new U, zn = {
            ec: 45,
            ecommerce: 46,
            linkid: 47
        };
        var Kn = function(e, t, n) {
                t == or || t.get(At);
                var r = Wn.get(e);
                return j(r) ? (t.plugins_ = t.plugins_ || new U, t.plugins_.get(e) ? !0 : (t.plugins_.set(e, new r(t, n || {})), !0)) : !1
            },
            Zn = function(t, n, r, o, i) {
                if (!j(Wn.get(n)) && !$n.get(n)) {
                    if (zn.hasOwnProperty(n) && e(zn[n]), En.test(n)) {
                        if (e(52), t = or.j(t), !t) return !0;
                        r = o || {}, o = {
                            id: n,
                            B: r.dataLayer || "dataLayer",
                            ia: !!t.get("anonymizeIp"),
                            na: i,
                            G: !1
                        }, t.get("&gtm") == n && (o.G = !0);
                        var a = String(t.get("name"));
                        "t0" != a && (o.target = a), $(String(t.get("trackingId"))) || (o.ja = String(t.get(Dt)), o.ka = Number(t.get(Nt)), r = r.palindrome ? Tn : _n, r = (r = W.cookie.replace(/^|(; +)/g, ";").match(r)) ? r.sort().join("").substring(1) : void 0, o.la = r, o.qa = R(t.b.get(Pe) || "", "gclid")), t = o.B, r = (new Date).getTime(), B[t] = B[t] || [], r = {
                            "gtm.start": r
                        }, i || (r.event = "gtm.js"), B[t].push(r), r = jn(o)
                    }!r && zn.hasOwnProperty(n) ? (e(39), r = n + ".js") : e(43), r && (r && 0 <= r.indexOf("/") || (r = (Ee || q() ? "https:" : "http:") + "//www.google-analytics.com/plugins/ua/" + r), o = nr(r), t = o.protocol, r = W.location.protocol, ("https:" == t || t == r || ("http:" != t ? 0 : "http:" == r)) && tr(o) && (N(o.url, void 0, i), $n.set(n, !0)))
                }
            },
            Qn = function(e, t) {
                var n = Vn.get(e) || [];
                n.push(t), Vn.set(e, n)
            },
            er = function(e, t) {
                Wn.set(e, t), t = Vn.get(e) || [];
                for (var n = 0; n < t.length; n++) t[n]();
                Vn.set(e, [])
            },
            tr = function(e) {
                var t = nr(W.location.href);
                return O(e.url, "https://www.google-analytics.com/gtm/js?id=") ? !0 : e.query || 0 <= e.url.indexOf("?") || 0 <= e.path.indexOf("://") ? !1 : e.host == t.host && e.port == t.port ? !0 : (t = "http:" == e.protocol ? 80 : 443, "www.google-analytics.com" == e.host && (e.port || t) == t && O(e.path, "/plugins/") ? !0 : !1)
            },
            nr = function(e) {
                function t(e) {
                    var t = (e.hostname || "").split(":")[0].toLowerCase(),
                        n = (e.protocol || "").toLowerCase(),
                        n = 1 * e.port || ("http:" == n ? 80 : "https:" == n ? 443 : "");
                    return e = e.pathname || "", O(e, "/") || (e = "/" + e), [t, "" + n, e]
                }
                var n = W.createElement("a");
                n.href = W.location.href;
                var r = (n.protocol || "").toLowerCase(),
                    o = t(n),
                    i = n.search || "",
                    a = r + "//" + o[0] + (o[1] ? ":" + o[1] : "");
                return O(e, "//") ? e = r + e : O(e, "/") ? e = a + e : !e || O(e, "?") ? e = a + o[2] + (e || i) : 0 > e.split("/")[0].indexOf(":") && (e = a + o[2].substring(0, o[2].lastIndexOf("/")) + "/" + e), n.href = e, r = t(n), {
                    protocol: (n.protocol || "").toLowerCase(),
                    host: r[0],
                    port: r[1],
                    path: r[2],
                    query: n.search || "",
                    url: e || ""
                }
            },
            rr = {
                ga: function() {
                    rr.f = []
                }
            };
        rr.ga(), rr.D = function(e) {
            var t = rr.J.apply(rr, arguments),
                t = rr.f.concat(t);
            for (rr.f = []; 0 < t.length && !rr.v(t[0]) && (t.shift(), !(0 < rr.f.length)););
            rr.f = rr.f.concat(t)
        }, rr.J = function(e) {
            for (var t = [], n = 0; n < arguments.length; n++) try {
                var r = new Yn(arguments[n]);
                r.g ? er(r.a[0], r.a[1]) : (r.i && (r.ha = Zn(r.c, r.a[0], r.X, r.W)), t.push(r))
            } catch (o) {}
            return t
        }, rr.v = function(e) {
            try {
                if (e.u) e.u.call(B, or.j("t0"));
                else {
                    var t = e.c == xe ? or : or.j(e.c);
                    if (e.A) "t0" != e.c || or.create.apply(or, e.a);
                    else if (e.ba) or.remove(e.c);
                    else if (t)
                        if (e.i) {
                            if (e.ha && (e.ha = Zn(e.c, e.a[0], e.X, e.W)), !Kn(e.a[0], t, e.W)) return !0
                        } else if (e.K) {
                        var n = e.C,
                            r = e.a,
                            o = t.plugins_.get(e.K);
                        o[n].apply(o, r)
                    } else t[e.C].apply(t, e.a)
                }
            } catch (i) {}
        };
        var or = function(t) {
            e(1), rr.D.apply(rr, [arguments])
        };
        or.h = {}, or.P = [], or.L = 0, or.answer = 42;
        var ir = [Rt, It, At];
        or.create = function(e) {
            var t = H(ir, [].slice.call(arguments));
            t[At] || (t[At] = "t0");
            var n = "" + t[At];
            return or.h[n] ? or.h[n] : (t = new In(t), or.h[n] = t, or.P.push(t), t)
        }, or.remove = function(e) {
            for (var t = 0; t < or.P.length; t++)
                if (or.P[t].get(At) == e) {
                    or.P.splice(t, 1), or.h[e] = null;
                    break
                }
        }, or.j = function(e) {
            return or.h[e]
        }, or.getAll = function() {
            return or.P.slice(0)
        }, or.N = function() {
            "ga" != xe && e(49);
            var t = B[xe];
            if (!t || 42 != t.answer) {
                or.L = t && t.l, or.loaded = !0;
                var n = B[xe] = or;
                if (f("create", n, n.create), f("remove", n, n.remove), f("getByName", n, n.j, 5), f("getAll", n, n.getAll, 6), n = In.prototype, f("get", n, n.get, 7), f("set", n, n.set, 4), f("send", n, n.send), f("requireSync", n, n.ma), n = ue.prototype, f("get", n, n.get), f("set", n, n.set), !q() && !Ee) {
                    e: {
                        for (var n = W.getElementsByTagName("script"), r = 0; r < n.length && 100 > r; r++) {
                            var o = n[r].src;
                            if (o && 0 == o.indexOf("https://www.google-analytics.com/analytics")) {
                                e(33), n = !0;
                                break e
                            }
                        }
                        n = !1
                    }
                    n && (Ee = !0)
                }
                q() || Ee || !Qt(new Zt(1e4)) || (e(36), Ee = !0), (B.gaplugins = B.gaplugins || {}).Linker = yn, n = yn.prototype, er("linker", yn), f("decorate", n, n.ca, 20), f("autoLink", n, n.S, 25), er("displayfeatures", Pn), er("adfeatures", Pn), t = t && t.q, k(t) ? rr.D.apply(or, t) : e(50)
            }
        }, or.da = function() {
            for (var e = or.getAll(), t = 0; t < e.length; t++) e[t].get(At)
        };
        var ar = or.N,
            sr = B[xe];
        sr && sr.r ? ar() : Gn(ar), Gn(function() {
            rr.D(["provide", "render", L])
        })
    }(window), define.registerEnd(), define.register("google-analytics/ec.min"),
    function() {
        var e = window,
            t = "push",
            n = "length",
            r = "prototype",
            o = function(e) {
                if (e.get && e.set) {
                    this.clear();
                    var t = e.get("buildHitTask");
                    e.set("buildHitTask", f(this, t)), e.set("_rlt", d(this, e.get("_rlt")))
                }
            },
            i = {
                action: "pa",
                promoAction: "promoa",
                id: "ti",
                affiliation: "ta",
                revenue: "tr",
                tax: "tt",
                shipping: "ts",
                coupon: "tcc",
                step: "cos",
                label: "col",
                option: "col",
                options: "col",
                list: "pal",
                listSource: "pls"
            },
            a = {
                id: "id",
                name: "nm",
                brand: "br",
                category: "ca",
                variant: "va",
                position: "ps",
                price: "pr",
                quantity: "qt",
                coupon: "cc",
                "dimension(\\d+)": "cd",
                "metric(\\d+)": "cm"
            },
            s = {
                id: "id",
                name: "nm",
                creative: "cr",
                position: "ps"
            },
            u = function(e, t) {
                this.name = e, this.source = t, this.e = []
            },
            c = "detail checkout checkout_option click add remove purchase refund".split(" ");
        o[r].clear = function() {
            this.b = void 0, this.f = [], this.a = [], this.g = [], this.d = void 0
        }, o[r].h = function(e, t) {
            var n = t || {};
            "promo_click" == e ? n.promoAction = "click" : n.action = e, this.b = h(n)
        }, o[r].j = function(e) {
            (e = h(e)) && this.f[t](e)
        }, o[r].i = function(e) {
            var r = h(e);
            if (r) {
                var o, i = e.list || "";
                e = e.listSource || "";
                for (var a = 0; a < this.a[n]; a++)
                    if (this.a[a].name == i) {
                        o = this.a[a];
                        break
                    }
                o || (o = new u(i, e), this.a[t](o)), o.e[t](r)
            }
        }, o[r].c = function(e) {
            (e = h(e)) && this.g[t](e)
        };
        var l = function(e, t, o) {
            if ("[object Array]" == Object[r].toString.call(Object(e)))
                for (var i = 0; i < e[n]; i++) t.call(o, e[i])
        };
        o[r].data = function(e) {
            if (e && e.ecommerce) {
                e = e.ecommerce, e.promoView && l(e.promoView.promotions, this.c, this), e.promoClick && (this.h("promo_click", e.promoClick.actionField), l(e.promoClick.promotions, this.c, this));
                for (var t = 0; t < c[n]; t++) {
                    var r = e[c[t]];
                    if (r) {
                        this.h(c[t], r.actionField), l(r.products, this.j, this);
                        break
                    }
                }
                l(e.impressions, this.i, this), e.currencyCode && (this.d = e.currencyCode)
            }
        };
        var f = function(e, t) {
                return function(r) {
                    var o, u, c;
                    for (e.b && p(i, e.b, r, "&"), o = 0; o < e.f[n]; o++) u = "&pr" + (o + 1), p(a, e.f[o], r, u);
                    for (o = 0; o < e.a[n]; o++) {
                        c = e.a[o], u = "&il" + (o + 1), c.name && r.set(u + "nm", c.name, !0), c.source && r.set(u + "ls", c.source, !0);
                        for (var l = 0; l < c.e[n]; l++) p(a, c.e[l], r, u + "pi" + (l + 1))
                    }
                    for (o = 0; o < e.g[n]; o++) u = "&promo" + (o + 1), p(s, e.g[o], r, u);
                    return e.d && r.set("&cu", e.d, !0), e.clear(), t(r)
                }
            },
            d = function(e, t) {
                return function(n) {
                    var r = e.b && e.b.action;
                    return "purchase" != r && "refund" != r ? t(n) : void 0
                }
            },
            h = function(e) {
                var t = 0,
                    n = {};
                if (e && "object" == typeof e)
                    for (var r in e) e.hasOwnProperty(r) && (n[r] = e[r], t++);
                return t ? n : void 0
            },
            p = function(e, t, n, r) {
                for (var o in t)
                    if (t.hasOwnProperty(o))
                        for (var i in e)
                            if (e.hasOwnProperty(i)) {
                                var a = o.match("^" + i + "$");
                                a && n.set(r + e[i] + a.slice(1).join(""), t[o], !0)
                            }
            };
        ! function() {
            e.gaplugins = e.gaplugins || {}, e.gaplugins.EC = o, o[r].setAction = o[r].h, o[r].addProduct = o[r].j, o[r].addImpression = o[r].i, o[r].addPromo = o[r].c, o[r].clear = o[r].clear, o[r].data = o[r].data;
            var n = e.GoogleAnalyticsObject || "ga";
            e[n] = e[n] || function() {
                (e[n].q = e[n].q || [])[t](arguments)
            }, e[n]("provide", "ec", o)
        }()
    }(), define.registerEnd(), define("github/google-analytics", ["exports", "./setimmediate", "google-analytics", "google-analytics/ec.min"], function(e, t) {
        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function r(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
            t.page = e, window.ga("send", "pageview", t)
        }

        function o(e, t) {
            window.ga("set", e, t)
        }

        function i(e) {
            window.ga("set", {
                location: e
            })
        }

        function a(e) {
            window.ga("set", {
                title: e
            })
        }

        function s(e, t) {
            var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
            window.ga("create", e, t, n), window.ga("set", "transport", "sendBeacon" in window.navigator ? "beacon" : "xhr")
        }

        function u(e, t) {
            var n = window[window.GoogleAnalyticsObject || "ga"];
            "function" == typeof n && n("provide", e, t)
        }

        function c(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
            window.ga(function() {
                window.ga("require", e, t)
            })
        }

        function l(e) {
            if (void 0 !== e.value) {
                if (!d.test(e.value)) {
                    var t = new Error("The event value in '" + JSON.stringify(e) + "' has to be an integer.");
                    return t.name = "InvalidGAEventValueError", void f["default"](function() {
                        throw t
                    })
                }
                e.value = Number(e.value)
            }
            void 0 === e.interactive && (e.interactive = !0), window.ga("send", "event", e.category, e.action, e.label, e.value, {
                nonInteraction: !e.interactive
            })
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.trackPageview = r, e.setDimension = o, e.setGlobalLocation = i, e.setGlobalTitle = a, e.setGlobalAccount = s, e.providePlugin = u, e.requirePlugin = c, e.trackEvent = l;
        var f = n(t);
        window.ga || (window.ga = function() {
            window.ga.q.push(arguments)
        }, window.ga.q = []);
        var d = /^\d+$/
    }), define("github/hash-change", ["exports", "./document-ready"], function(e, t) {
        function n(e) {
            i.push(e), t.ready.then(r)
        }

        function r() {
            var e = a;
            a = i.length, o(i.slice(e), null, window.location.href)
        }

        function o(e, t, n) {
            var r = window.location.hash.slice(1),
                o = r && document.getElementById(r) || window,
                i = {
                    oldURL: t,
                    newURL: n,
                    target: o
                };
            e.forEach(function(e) {
                return e.call(o, i)
            })
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e["default"] = n;
        var i = [],
            a = 0;
        n.clear = function() {
            i.length = a = 0
        };
        var s = window.location.href;
        window.addEventListener("popstate", function() {
            s = window.location.href
        }), window.addEventListener("hashchange", function(e) {
            var t = window.location.href;
            try {
                o(i, e.oldURL || s, t)
            } finally {
                s = t
            }
        });
        var u = null;
        document.addEventListener("pjax:start", function() {
            u = window.location.href
        }), document.addEventListener("pjax:end", function() {
            o(i, u, window.location.href)
        })
    }), define.register("delegated-events"), define(["exports", "selector-set"], function(e, t) {
        "use strict";

        function n(e, t, n) {
            var r = e[t];
            return e[t] = function() {
                return n.apply(e, arguments), r.apply(e, arguments)
            }, e
        }

        function r(e, t, n) {
            var r = [],
                o = t;
            do {
                if (1 !== o.nodeType) break;
                var i = e.matches(o);
                if (i.length) {
                    var a = {
                        node: o,
                        observers: i
                    };
                    n ? r.unshift(a) : r.push(a)
                }
            } while (o = o.parentElement);
            return r
        }

        function o() {
            p.set(this, !0)
        }

        function i() {
            p.set(this, !0), m.set(this, !0)
        }

        function a() {
            return v.get(this) || null
        }

        function s(e) {
            var t = Object.getOwnPropertyDescriptor(Event.prototype, "currentTarget");
            t && Object.defineProperty(e, "currentTarget", {
                get: a
            })
        }

        function u(e) {
            n(e, "stopPropagation", o), n(e, "stopImmediatePropagation", i), s(e);
            for (var t = 1 === e.eventPhase ? h : d, a = t[e.type], u = r(a, e.target, 1 === e.eventPhase), c = 0, l = u.length; l > c && !p.get(e); c++) {
                var f = u[c];
                v.set(e, f.node);
                for (var g = 0, y = f.observers.length; y > g && !m.get(e); g++) f.observers[g].data.call(f.node, e)
            }
            v["delete"](e)
        }

        function c(e, n, r) {
            var o = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : {},
                i = o.capture ? !0 : !1,
                a = i ? h : d,
                s = a[e];
            s || (s = new t, a[e] = s, document.addEventListener(e, u, i)), s.add(n, r)
        }

        function l(e, t, n) {
            var r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : {},
                o = r.capture ? !0 : !1,
                i = o ? h : d,
                a = i[e];
            a && (a.remove(t, n), a.size || (delete i[e], document.removeEventListener(e, u, o)))
        }

        function f(e, t, n) {
            return e.dispatchEvent(new CustomEvent(t, {
                bubbles: !0,
                cancelable: !0,
                detail: n
            }))
        }
        t = "default" in t ? t["default"] : t;
        var d = {},
            h = {},
            p = new WeakMap,
            m = new WeakMap,
            v = new WeakMap;
        e.on = c, e.off = l, e.fire = f, Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }), define.registerEnd(), define("github/hotkey", ["exports"], function(e) {
        function t(e) {
            var t = n[e.key] || e.key,
                r = "";
            return e.ctrlKey && "ctrl" !== t && (r += "ctrl+"), e.altKey && "alt" !== t && (r += "alt+"), e.metaKey && !e.ctrlKey && "meta" !== t && (r += "meta+"), "Unidentified" !== t ? r + t : null
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e["default"] = t;
        var n = {
            Backspace: "backspace",
            Tab: "tab",
            Enter: "enter",
            Shift: "shift",
            Control: "ctrl",
            Alt: "alt",
            Pause: "pause",
            CapsLock: "capslock",
            Escape: "esc",
            " ": "space",
            PageUp: "pageup",
            PageDown: "pagedown",
            End: "end",
            Home: "home",
            ArrowLeft: "left",
            ArrowUp: "up",
            ArrowRight: "right",
            ArrowDown: "down",
            Insert: "insert",
            Delete: "del",
            Meta: "meta",
            F1: "f1",
            F2: "f2",
            F3: "f3",
            F4: "f4",
            F5: "f5",
            F6: "f6",
            F7: "f7",
            F8: "f8",
            F9: "f9",
            F10: "f10",
            F11: "f11",
            F12: "f12",
            NumLock: "numlock",
            ScrollLock: "scroll"
        }
    }), define("github/observe", ["exports", "./jquery", "selector-set", "./document-ready", "./setimmediate"], function(e, t, n, r, o) {
        function i(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function a(e, t) {
            var n = P.get(e);
            if (n || (n = [], P.set(e, n)), -1 === n.indexOf(t.id)) {
                var r = void 0;
                if (t.initialize && (r = t.initialize.call(void 0, e)), r && !("length" in r)) {
                    var o = D.get(e);
                    o || (o = {}, D.set(e, o)), o[t.id] = r
                }
                n.push(t.id)
            }
        }

        function s(e, t) {
            var n = A.get(e);
            if (n || (n = [], A.set(e, n)), -1 === n.indexOf(t.id)) {
                t.elements.push(e);
                var r = D.get(e),
                    o = r ? r[t.id] : null;
                o && o.add && o.add.call(void 0, e), t.add && t.add.call(void 0, e), n.push(t.id)
            }
        }

        function u(e, t) {
            var n = A.get(e);
            if (n)
                if (t && e instanceof t.klass) {
                    var r = t.elements.indexOf(e);
                    if (-1 !== r && t.elements.splice(r, 1), r = n.indexOf(t.id), -1 !== r) {
                        var o = D.get(e),
                            i = o ? o[t.id] : null;
                        i && i.remove && i.remove.call(void 0, e), t.remove && t.remove.call(void 0, e), n.splice(r, 1)
                    }
                    0 === n.length && A["delete"](e)
                } else {
                    var a = !0,
                        s = !1,
                        u = void 0;
                    try {
                        for (var c, l = n.slice(0)[Symbol.iterator](); !(a = (c = l.next()).done); a = !0) {
                            var f = c.value;
                            if (t = M[f]) {
                                var d = t.elements.indexOf(e); - 1 !== d && t.elements.splice(d, 1);
                                var h = D.get(e),
                                    p = h ? h[t.id] : null;
                                p && p.remove && p.remove.call(void 0, e), t.remove && t.remove.call(void 0, e)
                            }
                        }
                    } catch (m) {
                        s = !0, u = m
                    } finally {
                        try {
                            !a && l["return"] && l["return"]()
                        } finally {
                            if (s) throw u
                        }
                    }
                    A["delete"](e)
                }
        }

        function c(e, t) {
            var n = !0,
                r = !1,
                o = void 0;
            try {
                for (var i, a = t[Symbol.iterator](); !(n = (i = a.next()).done); n = !0) {
                    var s = i.value;
                    if (s instanceof Element) {
                        var u = !0,
                            c = !1,
                            l = void 0;
                        try {
                            for (var f, d = L.matches(s)[Symbol.iterator](); !(u = (f = d.next()).done); u = !0) {
                                var h = f.value,
                                    p = h.data;
                                e.push(["add", s, p])
                            }
                        } catch (m) {
                            c = !0, l = m
                        } finally {
                            try {
                                !u && d["return"] && d["return"]()
                            } finally {
                                if (c) throw l
                            }
                        }
                        var v = !0,
                            g = !1,
                            y = void 0;
                        try {
                            for (var b, w = L.queryAll(s)[Symbol.iterator](); !(v = (b = w.next()).done); v = !0) {
                                var x = b.value,
                                    E = x.data,
                                    _ = x.elements,
                                    T = !0,
                                    j = !1,
                                    k = void 0;
                                try {
                                    for (var S, O = _[Symbol.iterator](); !(T = (S = O.next()).done); T = !0) {
                                        var C = S.value;
                                        e.push(["add", C, E])
                                    }
                                } catch (m) {
                                    j = !0, k = m
                                } finally {
                                    try {
                                        !T && O["return"] && O["return"]()
                                    } finally {
                                        if (j) throw k
                                    }
                                }
                            }
                        } catch (m) {
                            g = !0, y = m
                        } finally {
                            try {
                                !v && w["return"] && w["return"]()
                            } finally {
                                if (g) throw y
                            }
                        }
                    }
                }
            } catch (m) {
                r = !0, o = m
            } finally {
                try {
                    !n && a["return"] && a["return"]()
                } finally {
                    if (r) throw o
                }
            }
        }

        function l(e, t) {
            var n = !0,
                r = !1,
                o = void 0;
            try {
                for (var i, a = t[Symbol.iterator](); !(n = (i = a.next()).done); n = !0) {
                    var s = i.value;
                    if (s instanceof Element) {
                        e.push(["remove", s, null]);
                        var u = !0,
                            c = !1,
                            l = void 0;
                        try {
                            for (var f, d = s.getElementsByTagName("*")[Symbol.iterator](); !(u = (f = d.next()).done); u = !0) {
                                var h = f.value;
                                e.push(["remove", h, null])
                            }
                        } catch (p) {
                            c = !0, l = p
                        } finally {
                            try {
                                !u && d["return"] && d["return"]()
                            } finally {
                                if (c) throw l
                            }
                        }
                    }
                }
            } catch (p) {
                r = !0, o = p
            } finally {
                try {
                    !n && a["return"] && a["return"]()
                } finally {
                    if (r) throw o
                }
            }
        }

        function f(e) {
            var t = !0,
                n = !1,
                r = void 0;
            try {
                for (var o, i = M[Symbol.iterator](); !(t = (o = i.next()).done); t = !0) {
                    var a = o.value;
                    if (a) {
                        var s = !0,
                            u = !1,
                            c = void 0;
                        try {
                            for (var l, f = a.elements[Symbol.iterator](); !(s = (l = f.next()).done); s = !0) {
                                var d = l.value;
                                d.parentNode || e.push(["remove", d, null])
                            }
                        } catch (h) {
                            u = !0, c = h
                        } finally {
                            try {
                                !s && f["return"] && f["return"]()
                            } finally {
                                if (u) throw c
                            }
                        }
                    }
                }
            } catch (h) {
                n = !0, r = h
            } finally {
                try {
                    !t && i["return"] && i["return"]()
                } finally {
                    if (n) throw r
                }
            }
        }

        function d(e, t) {
            if (t instanceof Element) {
                var n = !0,
                    r = !1,
                    o = void 0;
                try {
                    for (var i, a = L.matches(t)[Symbol.iterator](); !(n = (i = a.next()).done); n = !0) {
                        var s = i.value,
                            u = s.data;
                        e.push(["add", t, u])
                    }
                } catch (c) {
                    r = !0, o = c
                } finally {
                    try {
                        !n && a["return"] && a["return"]()
                    } finally {
                        if (r) throw o
                    }
                }
                var l = A.get(t);
                if (l) {
                    var f = !0,
                        d = !1,
                        h = void 0;
                    try {
                        for (var p, m = l[Symbol.iterator](); !(f = (p = m.next()).done); f = !0) {
                            var v = p.value,
                                g = M[v];
                            g && (L.matchesSelector(t, g.selector) || e.push(["remove", t, g]))
                        }
                    } catch (c) {
                        d = !0, h = c
                    } finally {
                        try {
                            !f && m["return"] && m["return"]()
                        } finally {
                            if (d) throw h
                        }
                    }
                }
            }
        }

        function h(e, t) {
            if (t instanceof Element) {
                d(e, t);
                var n = !0,
                    r = !1,
                    o = void 0;
                try {
                    for (var i, a = t.getElementsByTagName("*")[Symbol.iterator](); !(n = (i = a.next()).done); n = !0) {
                        var s = i.value;
                        d(e, s)
                    }
                } catch (u) {
                    r = !0, o = u
                } finally {
                    try {
                        !n && a["return"] && a["return"]()
                    } finally {
                        if (r) throw o
                    }
                }
            }
        }

        function p(e) {
            var t = !0,
                n = !1,
                r = void 0;
            try {
                for (var o, i = e[Symbol.iterator](); !(t = (o = i.next()).done); t = !0) {
                    var c = o.value,
                        l = S(c, 3),
                        f = l[0],
                        d = l[1],
                        h = l[2];
                    "add" === f && h && d instanceof h.klass ? (a(d, h), s(d, h)) : "remove" === f && u(d, h)
                }
            } catch (p) {
                n = !0, r = p
            } finally {
                try {
                    !t && i["return"] && i["return"]()
                } finally {
                    if (n) throw r
                }
            }
        }

        function m(e) {
            var t = !0,
                n = !1,
                r = void 0;
            try {
                for (var o, i = e.elements[Symbol.iterator](); !(t = (o = i.next()).done); t = !0) {
                    var a = o.value;
                    u(a, e)
                }
            } catch (s) {
                n = !0, r = s
            } finally {
                try {
                    !t && i["return"] && i["return"]()
                } finally {
                    if (n) throw r
                }
            }
            L.remove(e.selector, e), delete M[e.id], q--
        }

        function v(e, t, n) {
            var r = n ? n : Element,
                o = "function" == typeof t ? {
                    initialize: t
                } : t,
                i = {
                    id: C++,
                    selector: e,
                    initialize: o.initialize || o.init,
                    add: o.add,
                    remove: o.remove,
                    elements: [],
                    klass: r,
                    stop: function() {
                        m(i)
                    }
                };
            return L.add(e, i), M[i.id] = i, g(), q++, i
        }

        function g() {
            N || (k["default"](y), N = !0)
        }

        function y() {
            var e = [],
                t = [document.documentElement];
            c(e, t), p(e), N = !1
        }

        function b() {
            return q
        }

        function w(e) {
            var t = [];
            h(t, e), p(t)
        }

        function x() {
            var e = [],
                t = R;
            R = [];
            var n = !0,
                r = !1,
                o = void 0;
            try {
                for (var i, a = t[Symbol.iterator](); !(n = (i = a.next()).done); n = !0) {
                    var s = i.value,
                        u = void 0;
                    u = s.form ? s.form.elements : s.ownerDocument.getElementsByTagName("input");
                    var c = !0,
                        l = !1,
                        f = void 0;
                    try {
                        for (var h, m = u[Symbol.iterator](); !(c = (h = m.next()).done); c = !0) {
                            var v = h.value;
                            d(e, v)
                        }
                    } catch (g) {
                        l = !0, f = g
                    } finally {
                        try {
                            !c && m["return"] && m["return"]()
                        } finally {
                            if (l) throw f
                        }
                    }
                }
            } catch (g) {
                r = !0, o = g
            } finally {
                try {
                    !n && a["return"] && a["return"]()
                } finally {
                    if (r) throw o
                }
            }
            p(e)
        }

        function E(e) {
            R.push(e.target), k["default"](x)
        }

        function _(e) {
            var t = [],
                n = !0,
                r = !1,
                o = void 0;
            try {
                for (var i, a = e[Symbol.iterator](); !(n = (i = a.next()).done); n = !0) {
                    var s = i.value;
                    "childList" === s.type ? (c(t, s.addedNodes), l(t, s.removedNodes)) : "attributes" === s.type && d(t, s.target)
                }
            } catch (u) {
                r = !0, o = u
            } finally {
                try {
                    !n && a["return"] && a["return"]()
                } finally {
                    if (r) throw o
                }
            }
            O && f(t), p(t)
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.observe = v, e.getObserverCount = b, e.triggerObservers = w;
        var T = i(t),
            j = i(n),
            k = i(o),
            S = function() {
                function e(e, t) {
                    var n = [],
                        r = !0,
                        o = !1,
                        i = void 0;
                    try {
                        for (var a, s = e[Symbol.iterator](); !(r = (a = s.next()).done) && (n.push(a.value), !t || n.length !== t); r = !0);
                    } catch (u) {
                        o = !0, i = u
                    } finally {
                        try {
                            !r && s["return"] && s["return"]()
                        } finally {
                            if (o) throw i
                        }
                    }
                    return n
                }
                return function(t, n) {
                    if (Array.isArray(t)) return t;
                    if (Symbol.iterator in Object(t)) return e(t, n);
                    throw new TypeError("Invalid attempt to destructure non-iterable instance")
                }
            }(),
            O = function() {
                var e = document.createElement("div"),
                    t = document.createElement("div"),
                    n = document.createElement("div");
                return e.appendChild(t), t.appendChild(n), e.innerHTML = "", n.parentNode !== t
            }(),
            C = 0,
            M = [],
            L = new j["default"],
            P = new WeakMap,
            A = new WeakMap,
            D = new WeakMap,
            N = !1,
            q = 0,
            R = [];
        document.addEventListener("change", E, !1), T["default"](document).on("change", E);
        var F = new MutationObserver(_);
        r.ready.then(function() {
            F.observe(document, {
                childList: !0,
                attributes: !0,
                subtree: !0
            });
            var e = [],
                t = [document.documentElement];
            c(e, t), p(e)
        })
    }), define("github/hotkey-map", ["delegated-events", "./hotkey", "./form", "./observe"], function(e, t, n, r) {
        function o(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function i() {
            return d = null, f = l
        }

        function a(e) {
            var t = void 0,
                n = void 0,
                r = e.getAttribute("data-hotkey").split(/\s*,\s*/),
                o = [];
            for (t = 0, n = r.length; n > t; t++) {
                var i = r[t];
                o.push(i.split(/\s+/))
            }
            return o
        }

        function s(e) {
            var t = void 0,
                n = void 0,
                r = void 0,
                o = void 0,
                i = void 0,
                s = a(e),
                u = [],
                c = function() {
                    var i = s[r],
                        a = l;
                    u.push(function() {
                        var r = void 0,
                            s = void 0,
                            u = [];
                        for (n = r = 0, s = i.length; s > r; n = ++r) o = i[n], n < i.length - 1 ? (t = a[o], (!t || "nodeType" in t) && (a[o] = {}), u.push(a = a[o])) : u.push(a[o] = e);
                        return u
                    }())
                };
            for (r = 0, i = s.length; i > r; r++) c();
            return u
        }

        function u() {
            l = f = {};
            var e = document.querySelectorAll("[data-hotkey]");
            return Array.from(e).map(function(e) {
                return s(e)
            })
        }
        var c = o(t),
            l = {},
            f = l,
            d = null;
        document.addEventListener("keydown", function(t) {
            if (!(t.target instanceof Node && n.isFormField(t.target))) {
                d && clearTimeout(d);
                var r = c["default"](t),
                    o = f[r];
                if (o) {
                    if (!("nodeType" in o)) return f = o, void(d = setTimeout(i, 1500));
                    i(), e.fire(o, "hotkey:activate", {
                        originalEvent: t,
                        hotkey: r
                    }) && (n.isFormField(o) ? o.focus() : o.click()), t.preventDefault()
                } else i()
            }
        }), r.observe("[data-hotkey]", {
            add: s,
            remove: u
        })
    }), define.register("include-fragment-element"),
    function() {
        "use strict";

        function e(e, t) {
            setTimeout(function() {
                var n = t.ownerDocument.createEvent("Event");
                n.initEvent(e, !1, !1), t.dispatchEvent(n)
            }, 0)
        }

        function t(e, t) {
            return t.then(function(t) {
                e.insertAdjacentHTML("afterend", t), e.parentNode.removeChild(e)
            }, function() {
                e.classList.add("is-error")
            })
        }

        function n(e) {
            var t = e.src,
                n = r.get(e);
            return n && n.src === t ? n.data : (n = t ? e.load() : Promise.reject(new Error("missing src")), r.set(e, {
                src: t,
                data: n
            }), n)
        }
        var r = new WeakMap,
            o = Object.create(window.HTMLElement.prototype);
        Object.defineProperty(o, "src", {
            get: function() {
                var e = this.getAttribute("src");
                if (e) {
                    var t = this.ownerDocument.createElement("a");
                    return t.href = e, t.href
                }
                return ""
            },
            set: function(e) {
                this.setAttribute("src", e)
            }
        }), Object.defineProperty(o, "data", {
            get: function() {
                return n(this)
            }
        }), o.attributeChangedCallback = function(e) {
            if ("src" === e) {
                var r = n(this);
                this._attached && t(this, r)
            }
        }, o.createdCallback = function() {
            n(this)["catch"](function() {})
        }, o.attachedCallback = function() {
            this._attached = !0, this.src && t(this, n(this))
        }, o.detachedCallback = function() {
            this._attached = !1
        }, o.request = function() {
            var e = this.src;
            if (!e) throw new Error("missing src");
            return new Request(e, {
                method: "GET",
                credentials: "same-origin",
                headers: {
                    Accept: "text/html"
                }
            })
        }, o.load = function() {
            var t = this;
            return Promise.resolve().then(function() {
                var n = t.request();
                return e("loadstart", t), t.fetch(n)
            }).then(function(e) {
                if (200 !== e.status) throw new Error("Failed to load resource: the server responded with a status of " + e.status);
                var t = e.headers.get("Content-Type");
                if (!t || !t.match(/^text\/html/)) throw new Error("Failed to load resource: expected text/html but was " + t);
                return e
            }).then(function(e) {
                return e.text()
            }).then(function(n) {
                return e("load", t), e("loadend", t), n
            }, function(n) {
                throw e("error", t), e("loadend", t), n
            })
        }, o.fetch = function(e) {
            return fetch(e)
        }, window.IncludeFragmentElement = document.registerElement("include-fragment", {
            prototype: o
        })
    }(), define.registerEnd(), define("github/include-fragment-element-hacks", ["./fetch", "include-fragment-element"], function(e) {
        IncludeFragmentElement.prototype.fetch = e.fetch
    }), define("github/inflector", ["exports"], function(e) {
        function t(e, t) {
            return t + (e > 1 || 0 == e ? "s" : "")
        }

        function n(e, t) {
            var n = 1 == e ? "data-singular-string" : "data-plural-string",
                r = t.getAttribute(n);
            null != r && (t.textContent = r)
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.pluralize = t, e.pluralizeNode = n
    }), define("github/locale", ["exports"], function(e) {
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        e.weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], e.months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]
    }), define("github/fire", ["exports", "./jquery", "./setimmediate"], function(e, t, n) {
        function r(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function o(e, t, n) {
            function r() {
                var n = i["default"].Event(t, s);
                return i["default"].event.trigger(n, [], e, !n.bubbles), o && !n.isDefaultPrevented() && o.call(e, n), n
            }
            e = i["default"](e)[0];
            var o = void 0,
                s = void 0;
            return n && (i["default"].isPlainObject(n) ? s = n : i["default"].isFunction(n) && (o = n)), n = arguments[3], n && i["default"].isFunction(n) && (o = n), null == s && (s = {}), null == s.cancelable && (s.cancelable = !!o), null == s.bubbles && (s.bubbles = !0), s.async ? (delete s.async, void a["default"](r)) : r()
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e["default"] = o;
        var i = r(t),
            a = r(n)
    }), define("github/node", ["exports"], function(e) {
        function t(e) {
            return e ? 9 === e.nodeType ? e : e.ownerDocument ? e.ownerDocument : e.document ? e.document : null : null
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.getDocument = t
    }), define("github/scrollto", ["exports", "./jquery", "./node", "invariant", "./dimensions"], function(e, t, n, r, o) {
        function i(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function a(e, t) {
            var n, r;
            return regeneratorRuntime.async(function(o) {
                for (;;) switch (o.prev = o.next) {
                    case 0:
                        return n = {}, null != t.top && (n.scrollTop = t.top), null != t.left && (n.scrollLeft = t.left), r = {
                            duration: t.duration,
                            queue: !1
                        }, o.abrupt("return", new Promise(function(t) {
                            var o = s["default"](e).length;
                            r.complete = function() {
                                0 === --o && t()
                            }, s["default"](e).animate(n, r)
                        }).then(function() {
                            t.complete && t.complete()
                        }));
                    case 5:
                    case "end":
                        return o.stop()
                }
            }, null, this)
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var s = i(t),
            u = i(r);
        e["default"] = function(e, t) {
            var r, i, c, l, f, d;
            return regeneratorRuntime.async(function(h) {
                for (;;) switch (h.prev = h.next) {
                    case 0:
                        if (r = n.getDocument(e)) {
                            h.next = 3;
                            break
                        }
                        return h.abrupt("return");
                    case 3:
                        if ((e === r || e === r.defaultView || e === r.documentElement || e === r.body) && (e = r), i = r.defaultView.Document, c = r.defaultView.HTMLElement, null == t && (t = {}), "function" == typeof t && (l = t, t = {
                                complete: l
                            }), null == t.top && null == t.left && (t.target ? (f = o.positionedOffset(t.target, e), null != f && (t.top = f.top, t.left = f.left)) : e instanceof c && (d = o.positionedOffset(e, e.offsetParent), e = e.offsetParent, null != d && (t.top = d.top, t.left = d.left))), !(e instanceof i)) {
                            h.next = 16;
                            break
                        }
                        if (!t.duration) {
                            h.next = 12;
                            break
                        }
                        return h.abrupt("return", a(s["default"]([r.documentElement, r.body]), t));
                    case 12:
                        return null != t.top && s["default"](r).scrollTop(t.top), null != t.left && s["default"](r).scrollLeft(t.left), "function" == typeof t.complete && t.complete(), h.abrupt("return");
                    case 16:
                        if (u["default"](e instanceof c, "container is not HTMLElement -- github/scrollto.js:76"), !t.duration) {
                            h.next = 19;
                            break
                        }
                        return h.abrupt("return", a(e, t));
                    case 19:
                        return null != t.top && (e.scrollTop = t.top), null != t.left && (e.scrollLeft = t.left), "function" == typeof t.complete && t.complete(), h.abrupt("return");
                    case 23:
                    case "end":
                        return h.stop()
                }
            }, null, this)
        }
    }), define("github/visible", ["exports"], function(e) {
        function t(e) {
            return e.offsetWidth <= 0 && e.offsetHeight <= 0
        }

        function n(e) {
            return !t(e)
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e["default"] = n
    }), define("github/navigation", ["exports", "delegated-events", "./dimensions", "./fire", "./hotkey", "./observe", "./scrollto", "./visible"], function(e, t, n, r, o, i, a, s) {
        function u(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function c(e) {
            e.addEventListener("mousemove", f, !1), e.addEventListener("mouseover", d, !1)
        }

        function l(e) {
            e.removeEventListener("mousemove", f, !1), e.removeEventListener("mouseover", d, !1)
        }

        function f(e) {
            (H.x !== e.clientX || H.y !== e.clientY) && (I = !1), H = {
                x: e.clientX,
                y: e.clientY
            }
        }

        function d(e) {
            if (!I) {
                var t = e.currentTarget;
                if (t.closest(".js-active-navigation-container")) {
                    var n = e.target.closest(".js-navigation-item");
                    n && S(n, t)
                }
            }
        }

        function h(e) {
            if (!(e.target !== document.body && e.target instanceof HTMLElement) || e.target.classList.contains("js-navigation-enable")) {
                I = !0;
                var n = O(),
                    r = n.querySelector(".js-navigation-item.navigation-focus") || n,
                    o = t.fire(r, "navigation:keydown", {
                        hotkey: D["default"](e),
                        originalTarget: e.target
                    });
                o || e.preventDefault()
            }
        }

        function p(e) {
            var t = e.currentTarget,
                n = e.modifierKey || e.altKey || e.ctrlKey || e.metaKey,
                r = A["default"](t, "navigation:open", {
                    modifierKey: n,
                    shiftKey: e.shiftKey
                });
            null != r && r.isDefaultPrevented() && e.preventDefault()
        }

        function m(e) {
            var t = O();
            e !== t && (t && v(t), e.classList.add("js-active-navigation-container"))
        }

        function v(e) {
            e.classList.remove("js-active-navigation-container")
        }

        function g(e) {
            var t = O();
            t && B.push(t), m(e)
        }

        function y(e) {
            v(e), w(e);
            var t = B.pop();
            t && m(t)
        }

        function b(e, t) {
            var r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null;
            t || (t = e);
            var o = C(e)[0],
                i = t.closest(".js-navigation-item") || o;
            if (m(e), i) {
                var a = S(i, e);
                if (a) return;
                L(n.overflowParent(i), i, r)
            }
        }

        function w(e) {
            var t = e.querySelectorAll(".navigation-focus.js-navigation-item"),
                n = !0,
                r = !1,
                o = void 0;
            try {
                for (var i, a = t[Symbol.iterator](); !(n = (i = a.next()).done); n = !0) {
                    var s = i.value;
                    s.classList.remove("navigation-focus")
                }
            } catch (u) {
                r = !0, o = u
            } finally {
                try {
                    !n && a["return"] && a["return"]()
                } finally {
                    if (r) throw o
                }
            }
        }

        function x(e, t) {
            w(e), b(e, t)
        }

        function E(e, t) {
            var r = C(t),
                o = r.indexOf(e),
                i = r[o - 1];
            if (i) {
                var a = S(i, t);
                if (a) return;
                var s = n.overflowParent(i);
                "page" === M(t) ? L(s, i) : P(s, i)
            }
        }

        function _(e, t) {
            var r = C(t),
                o = r.indexOf(e),
                i = r[o + 1];
            if (i) {
                var a = S(i, t);
                if (a) return;
                var s = n.overflowParent(i);
                "page" === M(t) ? L(s, i) : P(s, i)
            }
        }

        function T(e, t) {
            var r = C(t),
                o = r.indexOf(e),
                i = n.overflowParent(e);
            if (null != i) {
                for (var a = void 0, s = void 0;
                    (a = r[o - 1]) && (s = n.overflowOffset(a, i)) && s.top >= 0;) o--;
                if (a) {
                    var u = S(a, t);
                    if (u) return;
                    L(i, a)
                }
            }
        }

        function j(e, t) {
            var r = C(t),
                o = r.indexOf(e),
                i = n.overflowParent(e);
            if (null != i) {
                for (var a = void 0, s = void 0;
                    (a = r[o + 1]) && (s = n.overflowOffset(a, i)) && s.bottom >= 0;) o++;
                if (a) {
                    var u = S(a, t);
                    if (u) return;
                    L(i, a)
                }
            }
        }

        function k(e, n) {
            null == n && (n = !1), t.fire(e, "navigation:keyopen", {
                modifierKey: n
            })
        }

        function S(e, n) {
            return t.fire(e, "navigation:focus") ? (w(n), e.classList.add("navigation-focus"), !0) : !1
        }

        function O() {
            return document.querySelector(".js-active-navigation-container")
        }

        function C(e) {
            return Array.from(e.querySelectorAll(".js-navigation-item")).filter(q["default"])
        }

        function M(e) {
            var t = void 0;
            return null != (t = e.getAttribute("data-navigation-scroll")) ? t : "item"
        }

        function L(e, t, r) {
            null == r && (r = "smooth");
            var o = n.positionedOffset(t, e),
                i = n.overflowOffset(t, e),
                a = {};
            if ("smooth" === r && (a.duration = 200), null != i && null != o) {
                if (i.bottom <= 0) a.top = o.top - 30;
                else if (i.top <= 0 && document.body) {
                    var s = null != e.offsetParent ? e.scrollHeight : document.body.scrollHeight;
                    a.top = s - (o.bottom + i.height) + 30
                }(i.bottom <= 0 || i.top <= 0) && N["default"](e, a)
            }
        }

        function P(e, t) {
            var r = n.positionedOffset(t, e),
                o = n.overflowOffset(t, e);
            if (null != r && null != o)
                if (o.bottom <= 0 && document.body) {
                    var i = null != e.offsetParent ? e.scrollHeight : document.body.scrollHeight,
                        a = i - (r.bottom + o.height);
                    N["default"](e, {
                        top: a
                    })
                } else o.top <= 0 && N["default"](e, {
                    top: r.top
                })
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.push = g, e.pop = y, e.focus = b, e.clear = w, e.refocus = x;
        var A = u(r),
            D = u(o),
            N = u(a),
            q = u(s),
            R = navigator.userAgent.match(/Macintosh/),
            F = navigator.userAgent.match(/Macintosh/) ? "meta" : "ctrl",
            I = !1,
            H = {
                x: 0,
                y: 0
            };
        i.observe(".js-navigation-container", {
            add: c,
            remove: l
        });
        var U = 0;
        i.observe(".js-active-navigation-container", {
            add: function() {
                U++, 1 === U && document.addEventListener("keydown", h)
            },
            remove: function() {
                U--, 0 === U && document.removeEventListener("keydown", h)
            }
        }), t.on("navigation:keydown", ".js-active-navigation-container", function(e) {
            var t = e.currentTarget,
                n = e.detail.originalTarget.matches("input, textarea"),
                r = e.target;
            if (r.classList.contains("js-navigation-item"))
                if (n) {
                    if (R) switch (e.detail.hotkey) {
                        case "ctrl+n":
                            _(r, t);
                            break;
                        case "ctrl+p":
                            E(r, t)
                    }
                    switch (e.detail.hotkey) {
                        case "up":
                            E(r, t);
                            break;
                        case "down":
                            _(r, t);
                            break;
                        case "enter":
                            k(r);
                            break;
                        case F + "+enter":
                            k(r, !0)
                    }
                } else {
                    if (R) switch (e.detail.hotkey) {
                        case "ctrl+n":
                            _(r, t);
                            break;
                        case "ctrl+p":
                            E(r, t);
                            break;
                        case "alt+v":
                            T(r, t);
                            break;
                        case "ctrl+v":
                            j(r, t)
                    }
                    switch (e.detail.hotkey) {
                        case "j":
                        case "J":
                            _(r, t);
                            break;
                        case "k":
                        case "K":
                            E(r, t);
                            break;
                        case "o":
                        case "enter":
                            k(r);
                            break;
                        case F + "+enter":
                            k(r, !0)
                    }
                } else {
                var o = C(t)[0];
                if (o)
                    if (n) {
                        if (R) switch (e.detail.hotkey) {
                            case "ctrl+n":
                                S(o, t)
                        }
                        switch (e.detail.hotkey) {
                            case "down":
                                S(o, t)
                        }
                    } else {
                        if (R) switch (e.detail.hotkey) {
                            case "ctrl+n":
                            case "ctrl+v":
                                S(o, t)
                        }
                        switch (e.detail.hotkey) {
                            case "j":
                                S(o, t)
                        }
                    }
            }
            if (n) {
                if (R) switch (e.detail.hotkey) {
                    case "ctrl+n":
                    case "ctrl+p":
                        e.preventDefault()
                }
                switch (e.detail.hotkey) {
                    case "up":
                    case "down":
                        e.preventDefault();
                        break;
                    case "enter":
                    case F + "+enter":
                        e.preventDefault()
                }
            } else {
                if (R) switch (e.detail.hotkey) {
                    case "ctrl+n":
                    case "ctrl+p":
                    case "alt+v":
                    case "ctrl+v":
                        e.preventDefault()
                }
                switch (e.detail.hotkey) {
                    case "j":
                    case "k":
                        e.preventDefault();
                        break;
                    case "o":
                    case "enter":
                    case F + "+enter":
                        e.preventDefault()
                }
            }
        }), t.on("click", ".js-active-navigation-container .js-navigation-item", function(e) {
            p(e)
        }), t.on("navigation:keyopen", ".js-active-navigation-container .js-navigation-item", function(e) {
            var n = e.currentTarget.classList.contains("js-navigation-open") ? e.currentTarget : e.currentTarget.querySelector(".js-navigation-open");
            n ? (e.modifierKey ? (window.open(n.href, "_blank"), window.focus()) : t.fire(n, "click") && n.click(), e.preventDefault()) : p(e)
        });
        var B = []
    }), define("github/normalized-event-timestamp", ["exports"], function(e) {
        function t(e) {
            return !e || r > e && !(e % 1) ? Date.now() : e
        }

        function n(e) {
            return r > e ? self.performance.now() - e : Date.now() - e
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.normalizedTimestamp = t, e.timeSinceTimestamp = n;
        var r = 14594616e5
    }), define("github/number-helpers", ["exports"], function(e) {
        function t(e) {
            return ("" + e).replace(/(^|[^\w.])(\d{4,})/g, function(e, t, n) {
                return t + n.replace(/\d(?=(?:\d\d\d)+(?!\d))/g, "$&,")
            })
        }

        function n(e) {
            return "string" == typeof e && (e = e.replace(/,/g, "")), parseFloat(e)
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.formatNumber = t, e.parseFormattedNumber = n
    }), define("github/onfocus", ["exports", "selector-set"], function(e, t) {
        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function r(e) {
            e.target.nodeType !== Node.DOCUMENT_NODE && u.matches(e.target).forEach(function(t) {
                t.data.call(null, e.target)
            })
        }

        function o(e, t) {
            u || (u = new s["default"], document.addEventListener("focus", r, !0)), u.add(e, t), document.activeElement && document.activeElement.matches(e) && t(document.activeElement)
        }

        function i(e, t, n) {
            function r() {
                this.removeEventListener(e, n), this.removeEventListener("blur", r)
            }
            o(t, function(t) {
                t.addEventListener(e, n), t.addEventListener("blur", r)
            })
        }

        function a(e, t) {
            function n() {
                this.removeEventListener("input", t), this.removeEventListener("blur", n)
            }
            o(e, function(e) {
                e.addEventListener("input", t), e.addEventListener("blur", n)
            })
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.onFocus = o, e.onKey = i, e.onInput = a;
        var s = n(t),
            u = void 0
    }), define("github/inspect", ["exports", "./node"], function(e, t) {
        function n(e) {
            for (var n = []; e && (n.push(r(e)), e !== t.getDocument(e) && !e.id);) e = e.parentNode;
            return n.reverse().join(" > ")
        }

        function r(e) {
            if (e.window) return "window";
            var t = [e.nodeName.toLowerCase()],
                n = e.id;
            if (n && t.push("#" + n), "function" == typeof e.getAttribute && e.getAttribute("class")) {
                var r = e.getAttribute("class").trim().split(/\s+/).join(".");
                r && t.push("." + r)
            }
            return t.join("")
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e["default"] = n
    }), define("github/pjax/prefetch", ["exports"], function(e) {
        function t(e, t) {
            for (var n = e.querySelectorAll("link[rel=pjax-prefetch]"), r = 0, o = n.length; o > r; r++) {
                var i = n[r];
                if (i.href === t.url) return i
            }
        }

        function n(e, n) {
            var r = t(e, n);
            if (r) {
                var i = o.get(r);
                return r.remove(), o["delete"](r), i
            }
        }

        function r(e, t) {
            o.set(e, t)
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.popPrefetchResponseForRequest = n, e.setPrefetchResponse = r;
        var o = new WeakMap
    }), define("github/pjax", ["exports", "./history", "./jquery", "./fragment-target", "./inspect", "invariant", "./pjax/prefetch"], function(e, t, n, r, o, i, a) {
        function s(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function u(e, t, n) {
            n = E(t, n);
            var r = e.currentTarget;
            if ("A" !== r.tagName.toUpperCase()) throw new Error("$.fn.pjax or pjax click requires an anchor element");
            if (!(e.which > 1 || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey || location.protocol !== r.protocol || location.hostname !== r.hostname || r.href.indexOf("#") > -1 && x(r) == x(location) || e.isDefaultPrevented())) {
                var o = {
                        url: r.href,
                        container: A["default"](r.getAttribute("data-pjax"))[0],
                        target: r
                    },
                    i = A["default"].extend({}, o, n);
                l(r, "pjax:click", {
                    options: i,
                    relatedEvent: e.originalEvent
                }) && (f(i), e.preventDefault(), l(r, "pjax:clicked", {
                    options: i
                }))
            }
        }

        function c(e, t, n) {
            n = E(t, n);
            var r = e.currentTarget;
            if ("FORM" !== r.tagName.toUpperCase()) throw new Error("pjax submit requires a form element");
            var o = {
                type: (r.method || "GET").toUpperCase(),
                url: r.action,
                container: A["default"](r.getAttribute("data-pjax"))[0],
                target: r
            };
            if ("GET" !== o.type && void 0 !== window.FormData) o.data = new FormData(r), o.processData = !1, o.contentType = !1;
            else {
                if (r.querySelector("input[type=file]")) return;
                o.data = A["default"](r).serializeArray()
            }
            f(A["default"].extend({}, o, n)), e.preventDefault()
        }

        function l(e, t, n) {
            return e.dispatchEvent(new CustomEvent(t, {
                bubbles: !0,
                cancelable: !0,
                detail: n
            }))
        }

        function f(e) {
            function n(t, n) {
                "GET" !== n.type && (n.timeout = 0), t.setRequestHeader("X-PJAX", "true"), t.setRequestHeader("X-PJAX-Container", c), n.timeout > 0 && (d = setTimeout(function() {
                    l(u, "pjax:timeout") && t.abort("timeout")
                }, n.timeout), n.timeout = 0);
                var r = w(n.url);
                s && (r.hash = s), e.requestUrl = b(r)
            }

            function o(t, n) {
                var r = k("", t, e),
                    o = l(u, "pjax:error");
                "GET" == e.type && "abort" !== n && o && p(r.url), d && clearTimeout(d), l(u, "pjax:complete"), l(u, "pjax:end")
            }

            function i(n, o, i) {
                var a = F,
                    f = L(),
                    h = i.getResponseHeader("X-PJAX-Version"),
                    m = k(n, i, e),
                    v = w(m.url);
                if (s && (v.hash = s, m.url = v.href), f && h && f !== h) return void p(m.url);
                if (!m.contents) return void p(m.url);
                F = {
                    id: e.id || g(),
                    url: m.url,
                    title: m.title,
                    container: c,
                    fragment: e.fragment,
                    timeout: e.timeout
                }, (e.push || e.replace) && t.replaceState(F, m.title, m.url);
                var y = document.activeElement,
                    b = A["default"].contains(A["default"](e.container)[0], y);
                if (y && b) try {
                    y.blur()
                } catch (x) {}
                m.title && (document.title = m.title), l(u, "pjax:beforeReplace", {
                    contents: m.contents,
                    state: F,
                    previousState: a
                }), A["default"](u).html(m.contents);
                var E = A["default"](u).find("input[autofocus], textarea[autofocus]").last()[0];
                E && document.activeElement !== E && E.focus(), S(m.scripts);
                var _ = e.scrollTo;
                if (s) {
                    var T = r.findFragmentTarget(document, s);
                    T && (_ = A["default"](T).offset().top)
                }
                "number" == typeof _ && A["default"](window).scrollTop(_), l(u, "pjax:success"), d && clearTimeout(d), l(u, "pjax:complete"), l(u, "pjax:end")
            }
            e = A["default"].extend(!0, {}, A["default"].ajaxSettings, q, e), A["default"].isFunction(e.url) && (e.url = e.url());
            var s = w(e.url).hash,
                u = e.context = A["default"](e.container)[0],
                c = _(u);
            e.data || (e.data = {}), A["default"].isArray(e.data) ? e.data.push({
                name: "_pjax",
                value: c
            }) : e.data._pjax = c;
            var d = void 0;
            F || (F = {
                id: g(),
                url: window.location.href,
                title: document.title,
                container: c,
                fragment: e.fragment,
                timeout: e.timeout
            }, t.replaceState(F, F.title, F.url)), v(I), e.beforeSend = n, f.options = e;
            var h = a.popPrefetchResponseForRequest(u, e),
                m = I = h || A["default"].ajax(e);
            return m.readyState > 0 && (e.push && !e.replace && (O(F.id, y(u)), t.pushState(null, "", e.requestUrl)), l(u, "pjax:start", {
                url: e.url
            }), l(u, "pjax:send")), m.done(i).fail(o)
        }

        function d(e, t) {
            var n = e.closest("[data-pjax-container]");
            if (!n) throw new Error("no pjax container for " + D["default"](n));
            t || (t = {});
            var r = _(n),
                o = A["default"].extend({
                    "X-PJAX": "true",
                    "X-PJAX-Container": r
                }, t.headers || {});
            return A["default"].ajax({
                type: "GET",
                url: e.href,
                data: {
                    _pjax: r
                },
                dataType: "html",
                headers: o
            })
        }

        function h(e, t) {
            var n = {
                url: window.location.href,
                push: !1,
                replace: !0,
                scrollTo: !1
            };
            return f(A["default"].extend(n, E(e, t)))
        }

        function p(e) {
            N["default"](F, "github/pjax.js:432"), t.replaceState(null, "", F.url), window.location.replace(e)
        }

        function m(e) {
            H || v(I);
            var t = F,
                n = e.originalEvent.state,
                r = void 0;
            if (n && n.container) {
                if (H && U == n.url) return;
                if (t) {
                    if (t.id === n.id) return;
                    r = t.id < n.id ? "forward" : "back"
                }
                var o = W[n.id] || [],
                    i = A["default"](o[0] || n.container)[0],
                    a = o[1];
                if (i) {
                    t && C(r, t.id, y(i)), l(i, "pjax:popstate", {
                        state: n,
                        direction: r
                    });
                    var s = {
                        id: n.id,
                        url: n.url,
                        container: i,
                        push: !1,
                        fragment: n.fragment,
                        timeout: n.timeout,
                        scrollTo: !1
                    };
                    a ? (l(i, "pjax:start"), F = n, n.title && (document.title = n.title), l(i, "pjax:beforeReplace", {
                        contents: a,
                        state: n,
                        previousState: t
                    }), A["default"](i).html(a), l(i, "pjax:end")) : f(s), i.offsetHeight
                } else p(location.href)
            }
            H = !1
        }

        function v(e) {
            e && e.readyState < 4 && (e.onreadystatechange = A["default"].noop, e.abort())
        }

        function g() {
            return (new Date).getTime()
        }

        function y(e) {
            var t = A["default"](e).clone();
            t.find("script").each(function() {
                this.src || A["default"]._data(this, "globalEval", !1)
            });
            var n = _(e);
            return [n, t.contents()]
        }

        function b(e) {
            return e.search = e.search.replace(/([?&])(_pjax|_)=[^&]*/g, ""), e.href.replace(/\?($|#)/, "$1")
        }

        function w(e) {
            var t = document.createElement("a");
            return t.href = e, t
        }

        function x(e) {
            return e.href.replace(/#.*/, "")
        }

        function E(e, t) {
            return e && t ? t.container = e : t = A["default"].isPlainObject(e) ? e : {
                container: e
            }, t.container && (t.container = A["default"](t.container)[0]), t
        }

        function _(e) {
            if (e.id) return "#" + e.id;
            throw new Error("pjax container has no id")
        }

        function T(e, t) {
            return e.filter(t).add(e.find(t))
        }

        function j(e) {
            return A["default"].parseHTML(e, document, !0)
        }

        function k(e, t, n) {
            var r = {},
                o = /<html/i.test(e),
                i = t.getResponseHeader("X-PJAX-URL");
            r.url = i ? b(w(i)) : n.requestUrl;
            var a = (t.getResponseHeader("Content-Type") || "").split(";", 1)[0].trim();
            if ("text/html" != a) return r;
            var s = void 0,
                u = void 0;
            if (o) {
                var c = e.match(/<head[^>]*>([\s\S.]*)<\/head>/i),
                    l = e.match(/<body[^>]*>([\s\S.]*)<\/body>/i);
                s = c ? A["default"](j(c[0])) : A["default"](), u = l ? A["default"](j(l[0])) : A["default"]()
            } else s = u = A["default"](j(e));
            if (0 === u.length) return r;
            r.title = T(s, "title").last().text();
            var f = void 0;
            return n.fragment ? (f = "body" === n.fragment ? u : T(u, n.fragment).first(), f.length && (r.contents = "body" === n.fragment ? f : f.contents(), r.title || (r.title = f[0].getAttribute("title") || f[0].getAttribute("data-title")))) : o || (r.contents = u), r.contents && (r.contents = r.contents.not(function() {
                return A["default"](this).is("title")
            }), r.contents.find("title").remove(), r.scripts = T(r.contents, "script[src]").remove(), r.contents = r.contents.not(r.scripts)), r.title && (r.title = A["default"].trim(r.title)), r
        }

        function S(e) {
            if (e) {
                var t = A["default"]("script[src]");
                e.each(function() {
                    var e = this.src,
                        n = t.filter(function() {
                            return this.src === e
                        });
                    if (!n.length) {
                        var r = document.createElement("script"),
                            o = this.getAttribute("type");
                        o && (r.type = o), r.src = this.getAttribute("src"), document.head && document.head.appendChild(r)
                    }
                })
            }
        }

        function O(e, t) {
            W[e] = t, $.push(e), M(z, 0), M($, R)
        }

        function C(e, t, n) {
            var r = void 0,
                o = void 0;
            W[t] = n, "forward" === e ? (r = $, o = z) : (r = z, o = $), r.push(t), t = o.pop(), t && delete W[t], M(r, R)
        }

        function M(e, t) {
            for (; e.length > t;) delete W[e.shift()]
        }

        function L() {
            var e = !0,
                t = !1,
                n = void 0;
            try {
                for (var r, o = document.getElementsByTagName("meta")[Symbol.iterator](); !(e = (r = o.next()).done); e = !0) {
                    var i = r.value,
                        a = i.getAttribute("http-equiv");
                    if (a && "X-PJAX-VERSION" === a.toUpperCase()) return i.content
                }
            } catch (s) {
                t = !0, n = s
            } finally {
                try {
                    !e && o["return"] && o["return"]()
                } finally {
                    if (t) throw n
                }
            }
        }

        function P() {
            return F
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.click = u, e.submit = c, e["default"] = f, e.fetch = d, e.reload = h, e.getState = P;
        var A = s(n),
            D = s(o),
            N = s(i),
            q = {
                timeout: 650,
                push: !0,
                replace: !1,
                type: "GET",
                dataType: "html",
                scrollTo: 0
            },
            R = 20,
            F = void 0,
            I = void 0,
            H = !0,
            U = window.location.href,
            B = window.history.state;
        B && B.container && (F = B), "state" in window.history && (H = !1);
        var W = {},
            z = [],
            $ = [];
        A["default"](window).on("popstate.pjax", m)
    }), define("github/timers", ["exports"], function(e) {
        function t(e) {
            return new Promise(function(t) {
                setTimeout(t, e)
            })
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.delay = t
    }), define("github/poll-include-fragment-element", ["./timers", "include-fragment-element", "./include-fragment-element-hacks"], function(e) {
        var t = Object.create(IncludeFragmentElement.prototype),
            n = t.fetch;
        t.fetch = function(t) {
            var r, o = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 1e3;
            return regeneratorRuntime.async(function(i) {
                for (;;) switch (i.prev = i.next) {
                    case 0:
                        return i.next = 2, regeneratorRuntime.awrap(n(t));
                    case 2:
                        if (r = i.sent, 202 !== r.status) {
                            i.next = 9;
                            break
                        }
                        return i.next = 6, regeneratorRuntime.awrap(e.delay(o));
                    case 6:
                        return i.abrupt("return", this.fetch(t, 1.5 * o));
                    case 9:
                        return i.abrupt("return", r);
                    case 10:
                    case "end":
                        return i.stop()
                }
            }, null, this)
        }, window.PollIncludeFragmentElement = document.registerElement("poll-include-fragment", {
            prototype: t
        })
    }), define("github/query-selector", ["exports"], function(e) {
        function t(e, t, n) {
            var r = [],
                o = !0,
                i = !1,
                a = void 0;
            try {
                for (var s, u = e.querySelectorAll(t)[Symbol.iterator](); !(o = (s = u.next()).done); o = !0) {
                    var c = s.value;
                    c instanceof n && r.push(c)
                }
            } catch (l) {
                i = !0, a = l
            } finally {
                try {
                    !o && u["return"] && u["return"]()
                } finally {
                    if (i) throw a
                }
            }
            return r
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.querySelectorAll = t
    }), define("github/sso", ["exports", "./fetch", "./typecast", "./facebox", "./observe"], function(e, t, n, r, o) {
        function i(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function a(e) {
            return regeneratorRuntime.async(function(n) {
                for (;;) switch (n.prev = n.next) {
                    case 0:
                        m["default"](function() {
                            t.fetchText(e).then(function(e) {
                                m["default"](e, "sso-modal")
                            })
                        });
                    case 1:
                    case "end":
                        return n.stop()
                }
            }, null, this)
        }

        function s() {
            return new Promise(function(e) {
                function t() {
                    document.removeEventListener("facebox:afterClose", t), e()
                }
                document.addEventListener("facebox:afterClose", t)
            })
        }

        function u(e) {
            var t = document.querySelector(".facebox-content.sso-modal");
            t && (t.classList.remove("success", "error"), e ? t.classList.add("success") : t.classList.add("error"))
        }

        function c(e) {
            var t = document.querySelector("meta[name=sso-expires-around]");
            t && t.setAttribute("content", e)
        }

        function l() {
            var e, t;
            return regeneratorRuntime.async(function(n) {
                for (;;) switch (n.prev = n.next) {
                    case 0:
                        return e = p["default"](document.querySelector("link[rel=sso-modal]"), HTMLLinkElement), n.next = 3, regeneratorRuntime.awrap(a(e.href));
                    case 3:
                        return t = null, window.external.ssoComplete = function(e) {
                            e.error ? (t = !1, u(t)) : (t = !0, u(t), c(e.expiresAround), window.focus()), window.external.ssoComplete = null
                        }, n.next = 7, regeneratorRuntime.awrap(s());
                    case 7:
                        if (t) {
                            n.next = 9;
                            break
                        }
                        throw new Error("sso prompt canceled");
                    case 9:
                    case "end":
                        return n.stop()
                }
            }, null, this)
        }

        function f(e) {
            if (!e) return !0;
            var t = parseInt(p["default"](e, HTMLMetaElement).content),
                n = (new Date).getTime() / 1e3;
            return n > t
        }

        function d() {
            var e, n, r;
            return regeneratorRuntime.async(function(o) {
                for (;;) switch (o.prev = o.next) {
                    case 0:
                        if (e = document.querySelector("link[rel=sso-session]"), n = document.querySelector("meta[name=sso-expires-around]"), e) {
                            o.next = 4;
                            break
                        }
                        return o.abrupt("return", !0);
                    case 4:
                        if (f(n)) {
                            o.next = 6;
                            break
                        }
                        return o.abrupt("return", !0);
                    case 6:
                        return r = p["default"](e, HTMLLinkElement).href, o.abrupt("return", t.fetchJSON(r));
                    case 8:
                    case "end":
                        return o.stop()
                }
            }, null, this)
        }

        function h() {
            v = null
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var p = i(n),
            m = i(r);
        o.observe(".js-sso-modal-complete", function(e) {
            if (window.opener && window.opener.external.ssoComplete) {
                var t = e.getAttribute("data-error"),
                    n = e.getAttribute("data-expires-around");
                window.opener.external.ssoComplete({
                    error: t,
                    expiresAround: n
                }), window.close()
            } else {
                var r = e.getAttribute("data-fallback-url");
                window.location = r
            }
        });
        var v = null;
        e["default"] = function() {
            var e;
            return regeneratorRuntime.async(function(t) {
                for (;;) switch (t.prev = t.next) {
                    case 0:
                        return t.next = 2, regeneratorRuntime.awrap(d());
                    case 2:
                        if (e = t.sent) {
                            t.next = 7;
                            break
                        }
                        return v || (v = l().then(h)["catch"](h)), t.next = 7, regeneratorRuntime.awrap(v);
                    case 7:
                    case "end":
                        return t.stop()
                }
            }, null, this)
        }
    }), define("github/select-menu/loading", ["exports", "../fetch", "delegated-events", "../observe", "../sso"], function(e, t, n, r, o) {
        function i(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function a(e, t) {
            c.set(e, t)
        }

        function s(e) {
            var r, o, i, a, s, l;
            return regeneratorRuntime.async(function(f) {
                for (;;) switch (f.prev = f.next) {
                    case 0:
                        return r = e.currentTarget, r.classList.remove("js-load-contents"), r.classList.add("is-loading"), r.classList.remove("has-error"), o = new URL(r.getAttribute("data-contents-url"), window.location.origin), i = c.get(r), i && (a = new URLSearchParams(o.search.slice(1)), i.forEach(function(e) {
                            return a.append(e[0], e[1])
                        }), o.search = a.toString()), s = r.querySelector(".js-select-menu-deferred-content"), l = void 0, f.prev = 9, f.next = 12, regeneratorRuntime.awrap(u["default"]());
                    case 12:
                        if (!s) {
                            f.next = 18;
                            break
                        }
                        return f.next = 15, regeneratorRuntime.awrap(t.fetchText(o));
                    case 15:
                        l = f.sent, f.next = 21;
                        break;
                    case 18:
                        return f.next = 20, regeneratorRuntime.awrap(t.fetchJSON(o));
                    case 20:
                        l = f.sent;
                    case 21:
                        f.next = 27;
                        break;
                    case 23:
                        return f.prev = 23, f.t0 = f["catch"](9), r.classList.add("has-error"), f.abrupt("return");
                    case 27:
                        return f.prev = 27, r.classList.remove("is-loading"), f.finish(27);
                    case 30:
                        s ? s.innerHTML = l : n.fire(r, "selectmenu:data", {
                            data: l
                        }), r.classList.contains("active") && n.fire(r, "selectmenu:load");
                    case 32:
                    case "end":
                        return f.stop()
                }
            }, null, this, [
                [9, 23, 27, 30]
            ])
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.setLoadingData = a;
        var u = i(o),
            c = new WeakMap;
        r.observe(".js-select-menu.js-load-contents", {
            add: function(e) {
                e.addEventListener("mouseenter", s), e.addEventListener("menu:activate", s)
            },
            remove: function(e) {
                e.removeEventListener("mouseenter", s), e.removeEventListener("menu:activate", s)
            }
        })
    }), define("github/session-storage", ["exports"], function(e) {
        function t(e) {
            try {
                return sessionStorage.getItem(e)
            } catch (t) {
                return
            }
        }

        function n(e, t) {
            try {
                sessionStorage.setItem(e, t)
            } catch (n) {}
        }

        function r(e) {
            try {
                sessionStorage.removeItem(e)
            } catch (t) {}
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.getItem = t, e.setItem = n, e.removeItem = r
    }), define("github/sliding-promise-queue", ["exports"], function(e) {
        function t(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }

        function n() {}
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var r = function() {
                function e(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var r = t[n];
                        r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                    }
                }
                return function(t, n, r) {
                    return n && e(t.prototype, n), r && e(t, r), t
                }
            }(),
            o = function() {
                function e() {
                    t(this, e), this.previousReceiver = {
                        resolve: n,
                        reject: n
                    }
                }
                return r(e, [{
                    key: "push",
                    value: function(e) {
                        var t = this;
                        return this.previousReceiver.resolve = this.previousReceiver.reject = n, new Promise(function(n, r) {
                            var o = {
                                resolve: n,
                                reject: r
                            };
                            t.previousReceiver = o, e.then(function() {
                                o.resolve.apply(this, arguments)
                            }, function() {
                                o.reject.apply(this, arguments)
                            })
                        })
                    }
                }]), e
            }();
        e["default"] = o
    }), define("github/sudo", ["exports", "./fetch", "./jquery", "./typecast", "./facebox", "delegated-events", "invariant"], function(e, t, n, r, o, i, a) {
        function s(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function u() {
            var e, n, r;
            return regeneratorRuntime.async(function(o) {
                for (;;) switch (o.prev = o.next) {
                    case 0:
                        if (e = document.body, p["default"](e, "github/sudo.js:13"), n = d["default"](document.querySelector("link[rel=sudo-modal]"), HTMLLinkElement), !document.getElementById("js-sudo-prompt")) {
                            o.next = 7;
                            break
                        }
                        return o.abrupt("return");
                    case 7:
                        if (!n) {
                            o.next = 14;
                            break
                        }
                        return o.next = 10, regeneratorRuntime.awrap(t.fetchSafeDocumentFragment(document, n.href));
                    case 10:
                        r = o.sent, e.appendChild(r), o.next = 15;
                        break;
                    case 14:
                        throw new Error("couldn't load sudo facebox");
                    case 15:
                    case "end":
                        return o.stop()
                }
            }, null, this)
        }

        function c() {
            return new Promise(function(e) {
                f["default"](document).one("facebox:afterClose", e)
            })
        }

        function l() {
            var e, t, n;
            return regeneratorRuntime.async(function(r) {
                for (;;) switch (r.prev = r.next) {
                    case 0:
                        return r.next = 2, regeneratorRuntime.awrap(u());
                    case 2:
                        return r.next = 4, regeneratorRuntime.awrap(h["default"]({
                            div: "#js-sudo-prompt"
                        }, "sudo"));
                    case 4:
                        return e = r.sent, t = null, n = e.querySelector(".js-sudo-form"), n.querySelector(".js-sudo-login, .js-sudo-password").focus(), f["default"](n).on("ajaxSuccess", function() {
                            t = !0, i.fire(document, "facebox:close")
                        }), f["default"](n).on("ajaxError", function(e, r) {
                            t = !1;
                            var o = void 0;
                            switch (r.status) {
                                case 401:
                                    o = "Incorrect password.";
                                    break;
                                case 429:
                                    o = "Too many password attempts. Please wait and try again later.";
                                    break;
                                default:
                                    o = "Failed to receive a response. Please try again later."
                            }
                            return n.querySelector(".js-sudo-error").textContent = o, n.querySelector(".js-sudo-error").style.display = "block", n.querySelector(".js-sudo-password").value = "", !1
                        }), r.next = 12, regeneratorRuntime.awrap(c());
                    case 12:
                        if (t) {
                            r.next = 14;
                            break
                        }
                        throw new Error("sudo prompt canceled");
                    case 14:
                    case "end":
                        return r.stop()
                }
            }, null, this)
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var f = s(n),
            d = s(r),
            h = s(o),
            p = s(a);
        e["default"] = function(e) {
            var n;
            return regeneratorRuntime.async(function(r) {
                for (;;) switch (r.prev = r.next) {
                    case 0:
                        return r.next = 2, regeneratorRuntime.awrap(t.fetchJSON("/sessions/in_sudo.json?requested_access_level=" + e));
                    case 2:
                        if (n = r.sent) {
                            r.next = 6;
                            break
                        }
                        return r.next = 6, regeneratorRuntime.awrap(l());
                    case 6:
                    case "end":
                        return r.stop()
                }
            }, null, this)
        }
    }), define("github/throttled-input", ["exports", "invariant"], function(e, t) {
        function n(e) {
            return e && e.__esModule ? e : {
                "default": e
            }
        }

        function r(e) {
            var t = f.get(e);
            l["default"](t, "github/throttled-input.js:21"), t.timer && clearTimeout(t.timer), t.timer = setTimeout(function() {
                t.timer && (t.timer = null), t.inputed = !1, t.listener.call(e)
            }, t.wait)
        }

        function o(e) {
            var t = f.get(e.currentTarget);
            l["default"](t, "github/throttled-input.js:33"), t.keypressed = !0, t.timer && clearTimeout(t.timer)
        }

        function i(e) {
            var t = f.get(e.currentTarget);
            l["default"](t, "github/throttled-input.js:42"), t.keypressed = !1, t.inputed && r(e.currentTarget)
        }

        function a(e) {
            var t = f.get(e.currentTarget);
            l["default"](t, "github/throttled-input.js:51"), t.inputed = !0, t.keypressed || r(e.currentTarget)
        }

        function s(e, t) {
            var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
            f.set(e, {
                keypressed: !1,
                inputed: !1,
                timer: void 0,
                listener: t,
                wait: n.wait ? n.wait : 100
            }), e.addEventListener("keydown", o), e.addEventListener("keyup", i), e.addEventListener("input", a)
        }

        function u(e, t) {
            e.removeEventListener("keydown", o), e.removeEventListener("keyup", i), e.removeEventListener("input", a);
            var n = f.get(e);
            n && (n.timer && n.listener === t && clearTimeout(n.timer), f["delete"](e))
        }

        function c(e) {
            var t = f.get(e);
            t && t.listener.call(e)
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.addThrottledInputEventListener = s, e.removeThrottledInputEventListener = u, e.dispatchThrottledInputEvent = c;
        var l = n(t),
            f = new WeakMap
    }), define.register("time-elements"),
    function() {
        "use strict";

        function e(e) {
            return ("0" + e).slice(-2)
        }

        function t(e) {
            if ("Intl" in window) try {
                return new window.Intl.DateTimeFormat(void 0, e)
            } catch (t) {
                if (!(t instanceof RangeError)) throw t
            }
        }

        function n(t, r) {
            var o = t.getDay(),
                i = t.getDate(),
                a = t.getMonth(),
                s = t.getFullYear(),
                u = t.getHours(),
                c = t.getMinutes(),
                d = t.getSeconds();
            return r.replace(/%([%aAbBcdeHIlmMpPSwyYZz])/g, function(r) {
                var h, p = r[1];
                switch (p) {
                    case "%":
                        return "%";
                    case "a":
                        return l[o].slice(0, 3);
                    case "A":
                        return l[o];
                    case "b":
                        return f[a].slice(0, 3);
                    case "B":
                        return f[a];
                    case "c":
                        return t.toString();
                    case "d":
                        return e(i);
                    case "e":
                        return i;
                    case "H":
                        return e(u);
                    case "I":
                        return e(n(t, "%l"));
                    case "l":
                        return 0 === u || 12 === u ? 12 : (u + 12) % 12;
                    case "m":
                        return e(a + 1);
                    case "M":
                        return e(c);
                    case "p":
                        return u > 11 ? "PM" : "AM";
                    case "P":
                        return u > 11 ? "pm" : "am";
                    case "S":
                        return e(d);
                    case "w":
                        return o;
                    case "y":
                        return e(s % 100);
                    case "Y":
                        return s;
                    case "Z":
                        return h = t.toString().match(/\((\w+)\)$/), h ? h[1] : "";
                    case "z":
                        return h = t.toString().match(/\w([+-]\d\d\d\d) /), h ? h[1] : ""
                }
            })
        }

        function r(e) {
            this.date = e
        }

        function o() {
            if (null !== d) return d;
            var e = t({
                day: "numeric",
                month: "short"
            });
            if (e) {
                var n = e.format(new Date(0));
                return d = !!n.match(/^\d/)
            }
            return !1
        }

        function i() {
            if (null !== h) return h;
            var e = t({
                day: "numeric",
                month: "short",
                year: "numeric"
            });
            if (e) {
                var n = e.format(new Date(0));
                return h = !!n.match(/\d,/)
            }
            return !0
        }

        function a(e) {
            var t = new Date;
            return t.getUTCFullYear() === e.getUTCFullYear()
        }

        function s() {
            var e, t, n;
            for (t = 0, n = m.length; n > t; t++) e = m[t], e.textContent = e.getFormattedDate()
        }

        function u(e) {
            var t = {
                    weekday: {
                        "short": "%a",
                        "long": "%A"
                    },
                    day: {
                        numeric: "%e",
                        "2-digit": "%d"
                    },
                    month: {
                        "short": "%b",
                        "long": "%B"
                    },
                    year: {
                        numeric: "%Y",
                        "2-digit": "%y"
                    }
                },
                r = o() ? "weekday day month year" : "weekday month day, year";
            for (var i in t) {
                var a = t[i][e.getAttribute(i)];
                r = r.replace(i, a || "")
            }
            return r = r.replace(/(\s,)|(,\s$)/, ""), n(e._date, r).replace(/\s+/, " ").trim()
        }

        function c(e) {
            var r = {
                hour: e.getAttribute("hour"),
                minute: e.getAttribute("minute"),
                second: e.getAttribute("second")
            };
            for (var o in r) r[o] || delete r[o];
            if (0 !== Object.keys(r).length) {
                var i = t(r);
                if (i) return i.format(e._date);
                var a = r.second ? "%H:%M:%S" : "%H:%M";
                return n(e._date, a)
            }
        }
        var l = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            f = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        r.prototype.toString = function() {
            var e = this.timeElapsed();
            if (e) return e;
            var t = this.timeAhead();
            return t ? t : "on " + this.formatDate()
        }, r.prototype.timeElapsed = function() {
            var e = (new Date).getTime() - this.date.getTime(),
                t = Math.round(e / 1e3),
                n = Math.round(t / 60),
                r = Math.round(n / 60),
                o = Math.round(r / 24);
            return e >= 0 && 30 > o ? this.timeAgoFromMs(e) : null
        }, r.prototype.timeAhead = function() {
            var e = this.date.getTime() - (new Date).getTime(),
                t = Math.round(e / 1e3),
                n = Math.round(t / 60),
                r = Math.round(n / 60),
                o = Math.round(r / 24);
            return e >= 0 && 30 > o ? this.timeUntil() : null
        }, r.prototype.timeAgo = function() {
            var e = (new Date).getTime() - this.date.getTime();
            return this.timeAgoFromMs(e)
        }, r.prototype.timeAgoFromMs = function(e) {
            var t = Math.round(e / 1e3),
                n = Math.round(t / 60),
                r = Math.round(n / 60),
                o = Math.round(r / 24),
                i = Math.round(o / 30),
                a = Math.round(i / 12);
            return 0 > e ? "just now" : 10 > t ? "just now" : 45 > t ? t + " seconds ago" : 90 > t ? "a minute ago" : 45 > n ? n + " minutes ago" : 90 > n ? "an hour ago" : 24 > r ? r + " hours ago" : 36 > r ? "a day ago" : 30 > o ? o + " days ago" : 45 > o ? "a month ago" : 12 > i ? i + " months ago" : 18 > i ? "a year ago" : a + " years ago"
        }, r.prototype.microTimeAgo = function() {
            var e = (new Date).getTime() - this.date.getTime(),
                t = Math.round(e / 1e3),
                n = Math.round(t / 60),
                r = Math.round(n / 60),
                o = Math.round(r / 24),
                i = Math.round(o / 30),
                a = Math.round(i / 12);
            return 1 > n ? "1m" : 60 > n ? n + "m" : 24 > r ? r + "h" : 365 > o ? o + "d" : a + "y"
        }, r.prototype.timeUntil = function() {
            var e = this.date.getTime() - (new Date).getTime();
            return this.timeUntilFromMs(e)
        }, r.prototype.timeUntilFromMs = function(e) {
            var t = Math.round(e / 1e3),
                n = Math.round(t / 60),
                r = Math.round(n / 60),
                o = Math.round(r / 24),
                i = Math.round(o / 30),
                a = Math.round(i / 12);
            return i >= 18 ? a + " years from now" : i >= 12 ? "a year from now" : o >= 45 ? i + " months from now" : o >= 30 ? "a month from now" : r >= 36 ? o + " days from now" : r >= 24 ? "a day from now" : n >= 90 ? r + " hours from now" : n >= 45 ? "an hour from now" : t >= 90 ? n + " minutes from now" : t >= 45 ? "a minute from now" : t >= 10 ? t + " seconds from now" : "just now"
        }, r.prototype.microTimeUntil = function() {
            var e = this.date.getTime() - (new Date).getTime(),
                t = Math.round(e / 1e3),
                n = Math.round(t / 60),
                r = Math.round(n / 60),
                o = Math.round(r / 24),
                i = Math.round(o / 30),
                a = Math.round(i / 12);
            return o >= 365 ? a + "y" : r >= 24 ? o + "d" : n >= 60 ? r + "h" : n > 1 ? n + "m" : "1m"
        };
        var d = null,
            h = null;
        r.prototype.formatDate = function() {
            var e = o() ? "%e %b" : "%b %e";
            return a(this.date) || (e += i() ? ", %Y" : " %Y"), n(this.date, e)
        }, r.prototype.formatTime = function() {
            var e = t({
                hour: "numeric",
                minute: "2-digit"
            });
            return e ? e.format(this.date) : n(this.date, "%l:%M%P")
        };
        var p, m = [],
            v = Object.create(window.HTMLElement.prototype);
        v.attributeChangedCallback = function(e, t, n) {
            if ("datetime" === e) {
                var r = Date.parse(n);
                this._date = isNaN(r) ? null : new Date(r)
            }
            var o = this.getFormattedTitle();
            o && this.setAttribute("title", o);
            var i = this.getFormattedDate();
            i && (this.textContent = i)
        }, v.getFormattedTitle = function() {
            if (this._date) {
                if (this.hasAttribute("title")) return this.getAttribute("title");
                var e = t({
                    day: "numeric",
                    month: "short",
                    year: "numeric",
                    hour: "numeric",
                    minute: "2-digit",
                    timeZoneName: "short"
                });
                if (e) return e.format(this._date);
                try {
                    return this._date.toLocaleString()
                } catch (n) {
                    if (n instanceof RangeError) return this._date.toString();
                    throw n
                }
            }
        };
        var g = Object.create(v);
        g.createdCallback = function() {
            var e = this.getAttribute("datetime");
            e && this.attributeChangedCallback("datetime", null, e)
        }, g.getFormattedDate = function() {
            return this._date ? new r(this._date).toString() : void 0
        }, g.attachedCallback = function() {
            m.push(this), p || (s(), p = setInterval(s, 6e4))
        }, g.detachedCallback = function() {
            var e = m.indexOf(this); - 1 !== e && m.splice(e, 1), m.length || p && (clearInterval(p), p = null)
        };
        var y = Object.create(g);
        y.getFormattedDate = function() {
            if (this._date) {
                var e = this.getAttribute("format");
                return "micro" === e ? new r(this._date).microTimeAgo() : new r(this._date).timeAgo()
            }
        };
        var b = Object.create(g);
        b.getFormattedDate = function() {
            if (this._date) {
                var e = this.getAttribute("format");
                return "micro" === e ? new r(this._date).microTimeUntil() : new r(this._date).timeUntil()
            }
        };
        var w = Object.create(v);
        w.createdCallback = function() {
            var e;
            (e = this.getAttribute("datetime")) && this.attributeChangedCallback("datetime", null, e), (e = this.getAttribute("format")) && this.attributeChangedCallback("format", null, e)
        }, w.getFormattedDate = function() {
            if (this._date) {
                var e = u(this) || "",
                    t = c(this) || "";
                return (e + " " + t).trim()
            }
        }, window.RelativeTimeElement = document.registerElement("relative-time", {
            prototype: g
        }), window.TimeAgoElement = document.registerElement("time-ago", {
            prototype: y
        }), window.TimeUntilElement = document.registerElement("time-until", {
            prototype: b
        }), window.LocalTimeElement = document.registerElement("local-time", {
            prototype: w
        })
    }(), define.registerEnd(), define("frameworks-bootstrap", ["./environment-bootstrap", "./github/failbot", "./github/failbot-error", "./github/beforesend", "./github/code-editor", "./github/confirm", "./github/debounce", "./github/dimensions", "./github/document-ready", "./github/facebox", "./github/feature-detection", "./github/fetch", "./github/focused", "./github/form", "./github/fragment-target", "./github/google-analytics", "./github/hash-change", "./github/hotkey-map", "./github/include-fragment-element-hacks", "./github/inflector", "./github/locale", "./github/navigation", "./github/normalized-event-timestamp", "./github/number-helpers", "./github/onfocus", "./github/pjax", "./github/poll-include-fragment-element", "./github/query-selector", "./github/scrollto", "./github/select-menu/loading", "./github/session-storage", "./github/sliding-promise-queue", "./github/sudo", "./github/throttled-input", "./github/typecast", "./github/visible", "include-fragment-element", "time-elements"], function() {}), ghImport("frameworks-bootstrap")["catch"](function(e) {
        setTimeout(function() {
            throw e
        })
    });