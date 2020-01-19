;
(function(window, document, undefined) {
        var j = !0,
            l = null,
            m = !1;

        function n(a) {
            return function() {
                return this[a]
            }
        }
        var q = this;

        function r(a, b) {
            var c = a.split("."),
                d = q;
            !(c[0] in d) && d.execScript && d.execScript("var " + c[0]);
            for (var e; c.length && (e = c.shift());) !c.length && void 0 !== b ? d[e] = b : d = d[e] ? d[e] : d[e] = {}
        }

        function aa(a, b, c) {
            return a.call.apply(a.bind, arguments)
        }
