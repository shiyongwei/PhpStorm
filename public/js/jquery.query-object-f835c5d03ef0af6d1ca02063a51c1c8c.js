!new function(e){var t=e.separator||"&",n=e.spaces===!1?!1:!0,r=(e.suffix===!1?"":"[]",e.prefix===!1?!1:!0),u=r?e.hash===!0?"#":"?":"",i=e.numbers===!1?!1:!0;jQuery.query=new function(){var e=function(e,t){return void 0!=e&&null!==e&&(t?e.constructor==t:!0)},r=function(e){for(var t,n=/\[([^[]*)\]/g,r=/^([^[]+)(\[.*\])?$/.exec(e),u=r[1],i=[];t=n.exec(r[2]);)i.push(t[1]);return[u,i]},o=function(t,n,r){var u=n.shift();if("object"!=typeof t&&(t=null),""===u)if(t||(t=[]),e(t,Array))t.push(0==n.length?r:o(null,n.slice(0),r));else if(e(t,Object)){for(var i=0;null!=t[i++];);t[--i]=0==n.length?r:o(t[i],n.slice(0),r)}else t=[],t.push(0==n.length?r:o(null,n.slice(0),r));else if(u&&u.match(/^\s*[0-9]+\s*$/)){var c=parseInt(u,10);t||(t=[]),t[c]=0==n.length?r:o(t[c],n.slice(0),r)}else{if(!u)return r;var c=u.replace(/^\s*|\s*$/g,"");if(t||(t={}),e(t,Array)){for(var s={},i=0;i<t.length;++i)s[i]=t[i];t=s}t[c]=0==n.length?r:o(t[c],n.slice(0),r)}return t},c=function(e){var t=this;return t.keys={},e.queryObject?jQuery.each(e.get(),function(e,n){t.SET(e,n)}):jQuery.each(arguments,function(){var e=""+this;e=e.replace(/^[?#]/,""),e=e.replace(/[;&]$/,""),n&&(e=e.replace(/[+]/g," ")),jQuery.each(e.split(/[&;]/),function(){var e=decodeURIComponent(this.split("=")[0]||""),n=decodeURIComponent(this.split("=")[1]||"");e&&(i&&(/^[+-]?[0-9]+\.[0-9]*$/.test(n)?n=parseFloat(n):/^[+-]?[0-9]+$/.test(n)&&(n=parseInt(n,10))),n=n||0===n?n:!0,n!==!1&&n!==!0&&"number"!=typeof n&&(n=n),t.SET(e,n))})}),t};return c.prototype={queryObject:!0,has:function(t,n){var r=this.get(t);return e(r,n)},GET:function(t){if(!e(t))return this.keys;for(var n=r(t),u=n[0],i=n[1],o=this.keys[u];null!=o&&0!=i.length;)o=o[i.shift()];return"number"==typeof o?o:o||""},get:function(t){var n=this.GET(t);return e(n,Object)?jQuery.extend(!0,{},n):e(n,Array)?n.slice(0):n},SET:function(t,n){var u=e(n)?n:null,i=r(t),c=i[0],s=i[1],h=this.keys[c];return this.keys[c]=o(h,s.slice(0),u),this},set:function(e,t){return this.copy().SET(e,t)},REMOVE:function(e){return this.SET(e,null).COMPACT()},remove:function(e){return this.copy().REMOVE(e)},EMPTY:function(){var e=this;return jQuery.each(e.keys,function(t){delete e.keys[t]}),e},load:function(e){var t=e.replace(/^.*?[#](.+?)(?:\?.+)?$/,"$1"),n=e.replace(/^.*?[?](.+?)(?:#.+)?$/,"$1");return new c(e.length==n.length?"":n,e.length==t.length?"":t)},empty:function(){return this.copy().EMPTY()},copy:function(){return new c(this)},COMPACT:function(){function t(n){function r(t,n,r){e(t,Array)?t.push(r):t[n]=r}var u="object"==typeof n?e(n,Array)?[]:{}:n;return"object"==typeof n&&jQuery.each(n,function(n,i){return e(i)?void r(u,n,t(i)):!0}),u}return this.keys=t(this.keys),this},compact:function(){return this.copy().COMPACT()},toString:function(){var r=[],i=[],o=function(e){return e+="",n&&(e=e.replace(/ /g,"+")),encodeURIComponent(e)},c=function(t,n,r){if(e(r)&&r!==!1){var u=[o(n)];r!==!0&&(u.push("="),u.push(o(r))),t.push(u.join(""))}},s=function(e,t){var n=function(e){return t&&""!=t?[t,"[",e,"]"].join(""):[e].join("")};jQuery.each(e,function(e,t){"object"==typeof t?s(t,n(e)):c(i,n(e),t)})};return s(this.keys),i.length>0&&r.push(u),r.push(i.join(t)),r.join("")}},new c(location.search,location.hash)}}(jQuery.query||{});