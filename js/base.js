var Base=function(){};Base.extend=function(t,e){"use strict";var n=Base.prototype.extend;Base._prototyping=!0;var r=new this;n.call(r,t),r.base=function(){},delete Base._prototyping;var o=r.constructor,i=r.constructor=function(){if(!Base._prototyping)if(this._constructing||this.constructor==i)this._constructing=!0,o.apply(this,arguments),delete this._constructing;else if(null!==arguments[0])return(arguments[0].extend||n).call(arguments[0],r)};return i.ancestor=this,i.extend=this.extend,i.forEach=this.forEach,i.implement=this.implement,i.prototype=r,i.toString=this.toString,i.valueOf=function(t){return"object"==t?i:o.valueOf()},n.call(i,e),"function"==typeof i.init&&i.init(),i},Base.prototype={extend:function(t,e){if(arguments.length>1){var n=this[t];if(n&&"function"==typeof e&&(!n.valueOf||n.valueOf()!=e.valueOf())&&/\bbase\b/.test(e)){var r=e.valueOf();e=function(){var t=this.base||Base.prototype.base;this.base=n;var e=r.apply(this,arguments);return this.base=t,e},e.valueOf=function(t){return"object"==t?e:r},e.toString=Base.toString}this[t]=e}else if(t){var o=Base.prototype.extend;Base._prototyping||"function"==typeof this||(o=this.extend||o);for(var i={toSource:null},s=["constructor","toString","valueOf"],a=Base._prototyping?0:1;u=s[a++];)t[u]!=i[u]&&o.call(this,u,t[u]);for(var u in t)i[u]||o.call(this,u,t[u])}return this}},Base=Base.extend({constructor:function(){this.extend(arguments[0])}},{ancestor:Object,version:"1.1",forEach:function(t,e,n){for(var r in t)void 0===this.prototype[r]&&e.call(n,t[r],r,t)},implement:function(){for(var t=0;t<arguments.length;t++)"function"==typeof arguments[t]?arguments[t](this.prototype):this.prototype.extend(arguments[t]);return this},toString:function(){return String(this.valueOf())}});