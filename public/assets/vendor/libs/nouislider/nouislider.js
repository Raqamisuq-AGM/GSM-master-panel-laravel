!function(t,e){if("object"==typeof exports&&"object"==typeof module)module.exports=e();else if("function"==typeof define&&define.amd)define([],e);else{var r=e();for(var n in r)("object"==typeof exports?exports:t)[n]=r[n]}}(self,(function(){return function(){"use strict";var t={d:function(e,r){for(var n in r)t.o(r,n)&&!t.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:r[n]})},o:function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r:function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})}},e={};t.r(e),t.d(e,{noUiSlider:function(){return i}});var r,n,i={};function o(t){return"object"==typeof t&&"function"==typeof t.to}function s(t){t.parentElement.removeChild(t)}function a(t){return null!=t}function l(t){t.preventDefault()}function u(t){return"number"==typeof t&&!isNaN(t)&&isFinite(t)}function c(t,e,r){r>0&&(h(t,e),setTimeout((function(){m(t,e)}),r))}function p(t){return Math.max(Math.min(t,100),0)}function f(t){return Array.isArray(t)?t:[t]}function d(t){var e=(t=String(t)).split(".");return e.length>1?e[1].length:0}function h(t,e){t.classList&&!/\s/.test(e)?t.classList.add(e):t.className+=" "+e}function m(t,e){t.classList&&!/\s/.test(e)?t.classList.remove(e):t.className=t.className.replace(new RegExp("(^|\\b)"+e.split(" ").join("|")+"(\\b|$)","gi")," ")}function g(t){var e=void 0!==window.pageXOffset,r="CSS1Compat"===(t.compatMode||"");return{x:e?window.pageXOffset:r?t.documentElement.scrollLeft:t.body.scrollLeft,y:e?window.pageYOffset:r?t.documentElement.scrollTop:t.body.scrollTop}}function v(t,e){return 100/(e-t)}function b(t,e,r){return 100*e/(t[r+1]-t[r])}function S(t,e){for(var r=1;t>=e[r];)r+=1;return r}function x(t,e,r){if(r>=t.slice(-1)[0])return 100;var n=S(r,t),i=t[n-1],o=t[n],s=e[n-1],a=e[n];return s+function(t,e){return b(t,t[0]<0?e+Math.abs(t[0]):e-t[0],0)}([i,o],r)/v(s,a)}function y(t,e,r,n){if(100===n)return n;var i=S(n,t),o=t[i-1],s=t[i];return r?n-o>(s-o)/2?s:o:e[i-1]?t[i-1]+function(t,e){return Math.round(t/e)*e}(n-t[i-1],e[i-1]):n}t.r(i),t.d(i,{PipsMode:function(){return r},PipsType:function(){return n},create:function(){return Q},cssClasses:function(){return C},default:function(){return Z}}),function(t){t.Range="range",t.Steps="steps",t.Positions="positions",t.Count="count",t.Values="values"}(r||(r={})),function(t){t[t.None=-1]="None",t[t.NoValue=0]="NoValue",t[t.LargeValue=1]="LargeValue",t[t.SmallValue=2]="SmallValue"}(n||(n={}));var w=function(){function t(t,e,r){var n;this.xPct=[],this.xVal=[],this.xSteps=[],this.xNumSteps=[],this.xHighestCompleteStep=[],this.xSteps=[r||!1],this.xNumSteps=[!1],this.snap=e;var i=[];for(Object.keys(t).forEach((function(e){i.push([f(t[e]),e])})),i.sort((function(t,e){return t[0][0]-e[0][0]})),n=0;n<i.length;n++)this.handleEntryPoint(i[n][1],i[n][0]);for(this.xNumSteps=this.xSteps.slice(0),n=0;n<this.xNumSteps.length;n++)this.handleStepPoint(n,this.xNumSteps[n])}return t.prototype.getDistance=function(t){for(var e=[],r=0;r<this.xNumSteps.length-1;r++)e[r]=b(this.xVal,t,r);return e},t.prototype.getAbsoluteDistance=function(t,e,r){var n,i=0;if(t<this.xPct[this.xPct.length-1])for(;t>this.xPct[i+1];)i++;else t===this.xPct[this.xPct.length-1]&&(i=this.xPct.length-2);r||t!==this.xPct[i+1]||i++,null===e&&(e=[]);var o=1,s=e[i],a=0,l=0,u=0,c=0;for(n=r?(t-this.xPct[i])/(this.xPct[i+1]-this.xPct[i]):(this.xPct[i+1]-t)/(this.xPct[i+1]-this.xPct[i]);s>0;)a=this.xPct[i+1+c]-this.xPct[i+c],e[i+c]*o+100-100*n>100?(l=a*n,o=(s-100*n)/e[i+c],n=1):(l=e[i+c]*a/100*o,o=0),r?(u-=l,this.xPct.length+c>=1&&c--):(u+=l,this.xPct.length-c>=1&&c++),s=e[i+c]*o;return t+u},t.prototype.toStepping=function(t){return t=x(this.xVal,this.xPct,t)},t.prototype.fromStepping=function(t){return function(t,e,r){if(r>=100)return t.slice(-1)[0];var n=S(r,e),i=t[n-1],o=t[n],s=e[n-1];return function(t,e){return e*(t[1]-t[0])/100+t[0]}([i,o],(r-s)*v(s,e[n]))}(this.xVal,this.xPct,t)},t.prototype.getStep=function(t){return t=y(this.xPct,this.xSteps,this.snap,t)},t.prototype.getDefaultStep=function(t,e,r){var n=S(t,this.xPct);return(100===t||e&&t===this.xPct[n-1])&&(n=Math.max(n-1,1)),(this.xVal[n]-this.xVal[n-1])/r},t.prototype.getNearbySteps=function(t){var e=S(t,this.xPct);return{stepBefore:{startValue:this.xVal[e-2],step:this.xNumSteps[e-2],highestStep:this.xHighestCompleteStep[e-2]},thisStep:{startValue:this.xVal[e-1],step:this.xNumSteps[e-1],highestStep:this.xHighestCompleteStep[e-1]},stepAfter:{startValue:this.xVal[e],step:this.xNumSteps[e],highestStep:this.xHighestCompleteStep[e]}}},t.prototype.countStepDecimals=function(){var t=this.xNumSteps.map(d);return Math.max.apply(null,t)},t.prototype.hasNoSize=function(){return this.xVal[0]===this.xVal[this.xVal.length-1]},t.prototype.convert=function(t){return this.getStep(this.toStepping(t))},t.prototype.handleEntryPoint=function(t,e){var r;if(!u(r="min"===t?0:"max"===t?100:parseFloat(t))||!u(e[0]))throw new Error("noUiSlider: 'range' value isn't numeric.");this.xPct.push(r),this.xVal.push(e[0]);var n=Number(e[1]);r?this.xSteps.push(!isNaN(n)&&n):isNaN(n)||(this.xSteps[0]=n),this.xHighestCompleteStep.push(0)},t.prototype.handleStepPoint=function(t,e){if(e)if(this.xVal[t]!==this.xVal[t+1]){this.xSteps[t]=b([this.xVal[t],this.xVal[t+1]],e,0)/v(this.xPct[t],this.xPct[t+1]);var r=(this.xVal[t+1]-this.xVal[t])/this.xNumSteps[t],n=Math.ceil(Number(r.toFixed(3))-1),i=this.xVal[t]+this.xNumSteps[t]*n;this.xHighestCompleteStep[t]=i}else this.xSteps[t]=this.xHighestCompleteStep[t]=this.xVal[t]},t}(),E={to:function(t){return void 0===t?"":t.toFixed(2)},from:Number},C={target:"target",base:"base",origin:"origin",handle:"handle",handleLower:"handle-lower",handleUpper:"handle-upper",touchArea:"touch-area",horizontal:"horizontal",vertical:"vertical",background:"background",connect:"connect",connects:"connects",ltr:"ltr",rtl:"rtl",textDirectionLtr:"txt-dir-ltr",textDirectionRtl:"txt-dir-rtl",draggable:"draggable",drag:"state-drag",tap:"state-tap",active:"active",tooltip:"tooltip",pips:"pips",pipsHorizontal:"pips-horizontal",pipsVertical:"pips-vertical",marker:"marker",markerHorizontal:"marker-horizontal",markerVertical:"marker-vertical",markerNormal:"marker-normal",markerLarge:"marker-large",markerSub:"marker-sub",value:"value",valueHorizontal:"value-horizontal",valueVertical:"value-vertical",valueNormal:"value-normal",valueLarge:"value-large",valueSub:"value-sub"},N={tooltips:".__tooltips",aria:".__aria"};function P(t,e){if(!u(e))throw new Error("noUiSlider: 'step' is not numeric.");t.singleStep=e}function V(t,e){if(!u(e))throw new Error("noUiSlider: 'keyboardPageMultiplier' is not numeric.");t.keyboardPageMultiplier=e}function A(t,e){if(!u(e))throw new Error("noUiSlider: 'keyboardMultiplier' is not numeric.");t.keyboardMultiplier=e}function k(t,e){if(!u(e))throw new Error("noUiSlider: 'keyboardDefaultStep' is not numeric.");t.keyboardDefaultStep=e}function U(t,e){if("object"!=typeof e||Array.isArray(e))throw new Error("noUiSlider: 'range' is not an object.");if(void 0===e.min||void 0===e.max)throw new Error("noUiSlider: Missing 'min' or 'max' in 'range'.");t.spectrum=new w(e,t.snap||!1,t.singleStep)}function M(t,e){if(e=f(e),!Array.isArray(e)||!e.length)throw new Error("noUiSlider: 'start' option is incorrect.");t.handles=e.length,t.start=e}function D(t,e){if("boolean"!=typeof e)throw new Error("noUiSlider: 'snap' option must be a boolean.");t.snap=e}function O(t,e){if("boolean"!=typeof e)throw new Error("noUiSlider: 'animate' option must be a boolean.");t.animate=e}function L(t,e){if("number"!=typeof e)throw new Error("noUiSlider: 'animationDuration' option must be a number.");t.animationDuration=e}function j(t,e){var r,n=[!1];if("lower"===e?e=[!0,!1]:"upper"===e&&(e=[!1,!0]),!0===e||!1===e){for(r=1;r<t.handles;r++)n.push(e);n.push(!1)}else{if(!Array.isArray(e)||!e.length||e.length!==t.handles+1)throw new Error("noUiSlider: 'connect' option doesn't match handle count.");n=e}t.connect=n}function z(t,e){switch(e){case"horizontal":t.ort=0;break;case"vertical":t.ort=1;break;default:throw new Error("noUiSlider: 'orientation' option is invalid.")}}function H(t,e){if(!u(e))throw new Error("noUiSlider: 'margin' option must be numeric.");0!==e&&(t.margin=t.spectrum.getDistance(e))}function F(t,e){if(!u(e))throw new Error("noUiSlider: 'limit' option must be numeric.");if(t.limit=t.spectrum.getDistance(e),!t.limit||t.handles<2)throw new Error("noUiSlider: 'limit' option is only supported on linear sliders with 2 or more handles.")}function T(t,e){var r;if(!u(e)&&!Array.isArray(e))throw new Error("noUiSlider: 'padding' option must be numeric or array of exactly 2 numbers.");if(Array.isArray(e)&&2!==e.length&&!u(e[0])&&!u(e[1]))throw new Error("noUiSlider: 'padding' option must be numeric or array of exactly 2 numbers.");if(0!==e){for(Array.isArray(e)||(e=[e,e]),t.padding=[t.spectrum.getDistance(e[0]),t.spectrum.getDistance(e[1])],r=0;r<t.spectrum.xNumSteps.length-1;r++)if(t.padding[0][r]<0||t.padding[1][r]<0)throw new Error("noUiSlider: 'padding' option must be a positive number(s).");var n=e[0]+e[1],i=t.spectrum.xVal[0];if(n/(t.spectrum.xVal[t.spectrum.xVal.length-1]-i)>1)throw new Error("noUiSlider: 'padding' option must not exceed 100% of the range.")}}function R(t,e){switch(e){case"ltr":t.dir=0;break;case"rtl":t.dir=1;break;default:throw new Error("noUiSlider: 'direction' option was not recognized.")}}function _(t,e){if("string"!=typeof e)throw new Error("noUiSlider: 'behaviour' must be a string containing options.");var r=e.indexOf("tap")>=0,n=e.indexOf("drag")>=0,i=e.indexOf("fixed")>=0,o=e.indexOf("snap")>=0,s=e.indexOf("hover")>=0,a=e.indexOf("unconstrained")>=0,l=e.indexOf("drag-all")>=0,u=e.indexOf("smooth-steps")>=0;if(i){if(2!==t.handles)throw new Error("noUiSlider: 'fixed' behaviour must be used with 2 handles");H(t,t.start[1]-t.start[0])}if(a&&(t.margin||t.limit))throw new Error("noUiSlider: 'unconstrained' behaviour cannot be used with margin or limit");t.events={tap:r||o,drag:n,dragAll:l,smoothSteps:u,fixed:i,snap:o,hover:s,unconstrained:a}}function B(t,e){if(!1!==e)if(!0===e||o(e)){t.tooltips=[];for(var r=0;r<t.handles;r++)t.tooltips.push(e)}else{if((e=f(e)).length!==t.handles)throw new Error("noUiSlider: must pass a formatter for all handles.");e.forEach((function(t){if("boolean"!=typeof t&&!o(t))throw new Error("noUiSlider: 'tooltips' must be passed a formatter or 'false'.")})),t.tooltips=e}}function q(t,e){if(e.length!==t.handles)throw new Error("noUiSlider: must pass a attributes for all handles.");t.handleAttributes=e}function X(t,e){if(!o(e))throw new Error("noUiSlider: 'ariaFormat' requires 'to' method.");t.ariaFormat=e}function Y(t,e){if(!function(t){return o(t)&&"function"==typeof t.from}(e))throw new Error("noUiSlider: 'format' requires 'to' and 'from' methods.");t.format=e}function I(t,e){if("boolean"!=typeof e)throw new Error("noUiSlider: 'keyboardSupport' option must be a boolean.");t.keyboardSupport=e}function W(t,e){t.documentElement=e}function $(t,e){if("string"!=typeof e&&!1!==e)throw new Error("noUiSlider: 'cssPrefix' must be a string or `false`.");t.cssPrefix=e}function G(t,e){if("object"!=typeof e)throw new Error("noUiSlider: 'cssClasses' must be an object.");"string"==typeof t.cssPrefix?(t.cssClasses={},Object.keys(e).forEach((function(r){t.cssClasses[r]=t.cssPrefix+e[r]}))):t.cssClasses=e}function J(t){var e={margin:null,limit:null,padding:null,animate:!0,animationDuration:300,ariaFormat:E,format:E},r={step:{r:!1,t:P},keyboardPageMultiplier:{r:!1,t:V},keyboardMultiplier:{r:!1,t:A},keyboardDefaultStep:{r:!1,t:k},start:{r:!0,t:M},connect:{r:!0,t:j},direction:{r:!0,t:R},snap:{r:!1,t:D},animate:{r:!1,t:O},animationDuration:{r:!1,t:L},range:{r:!0,t:U},orientation:{r:!1,t:z},margin:{r:!1,t:H},limit:{r:!1,t:F},padding:{r:!1,t:T},behaviour:{r:!0,t:_},ariaFormat:{r:!1,t:X},format:{r:!1,t:Y},tooltips:{r:!1,t:B},keyboardSupport:{r:!0,t:I},documentElement:{r:!1,t:W},cssPrefix:{r:!0,t:$},cssClasses:{r:!0,t:G},handleAttributes:{r:!1,t:q}},n={connect:!1,direction:"ltr",behaviour:"tap",orientation:"horizontal",keyboardSupport:!0,cssPrefix:"noUi-",cssClasses:C,keyboardPageMultiplier:5,keyboardMultiplier:1,keyboardDefaultStep:10};t.format&&!t.ariaFormat&&(t.ariaFormat=t.format),Object.keys(r).forEach((function(i){if(a(t[i])||void 0!==n[i])r[i].t(e,a(t[i])?t[i]:n[i]);else if(r[i].r)throw new Error("noUiSlider: '"+i+"' is required.")})),e.pips=t.pips;var i=document.createElement("div"),o=void 0!==i.style.msTransform,s=void 0!==i.style.transform;e.transformRule=s?"transform":o?"msTransform":"webkitTransform";return e.style=[["left","top"],["right","bottom"]][e.dir][e.ort],e}function K(t,e,i){var o,u,d,v,b,S,x,y=window.navigator.pointerEnabled?{start:"pointerdown",move:"pointermove",end:"pointerup"}:window.navigator.msPointerEnabled?{start:"MSPointerDown",move:"MSPointerMove",end:"MSPointerUp"}:{start:"mousedown touchstart",move:"mousemove touchmove",end:"mouseup touchend"},w=window.CSS&&CSS.supports&&CSS.supports("touch-action","none")&&function(){var t=!1;try{var e=Object.defineProperty({},"passive",{get:function(){t=!0}});window.addEventListener("test",null,e)}catch(t){}return t}(),E=t,C=e.spectrum,P=[],V=[],A=[],k=0,U={},M=t.ownerDocument,D=e.documentElement||M.documentElement,O=M.body,L="rtl"===M.dir||1===e.ort?0:100;function j(t,e){var r=M.createElement("div");return e&&h(r,e),t.appendChild(r),r}function z(t,r){var n=j(t,e.cssClasses.origin),i=j(n,e.cssClasses.handle);if(j(i,e.cssClasses.touchArea),i.setAttribute("data-handle",String(r)),e.keyboardSupport&&(i.setAttribute("tabindex","0"),i.addEventListener("keydown",(function(t){return function(t,r){if(T()||R(r))return!1;var n=["Left","Right"],i=["Down","Up"],o=["PageDown","PageUp"],s=["Home","End"];e.dir&&!e.ort?n.reverse():e.ort&&!e.dir&&(i.reverse(),o.reverse());var a,l=t.key.replace("Arrow",""),u=l===o[0],c=l===o[1],p=l===i[0]||l===n[0]||u,f=l===i[1]||l===n[1]||c,d=l===s[0],h=l===s[1];if(!(p||f||d||h))return!0;if(t.preventDefault(),f||p){var m=p?0:1,g=vt(r)[m];if(null===g)return!1;!1===g&&(g=C.getDefaultStep(V[r],p,e.keyboardDefaultStep)),g*=c||u?e.keyboardPageMultiplier:e.keyboardMultiplier,g=Math.max(g,1e-7),g*=p?-1:1,a=P[r]+g}else a=h?e.spectrum.xVal[e.spectrum.xVal.length-1]:e.spectrum.xVal[0];return ft(r,C.toStepping(a),!0,!0),st("slide",r),st("update",r),st("change",r),st("set",r),!1}(t,r)}))),void 0!==e.handleAttributes){var o=e.handleAttributes[r];Object.keys(o).forEach((function(t){i.setAttribute(t,o[t])}))}return i.setAttribute("role","slider"),i.setAttribute("aria-orientation",e.ort?"vertical":"horizontal"),0===r?h(i,e.cssClasses.handleLower):r===e.handles-1&&h(i,e.cssClasses.handleUpper),n.handle=i,n}function H(t,r){return!!r&&j(t,e.cssClasses.connect)}function F(t,r){return!(!e.tooltips||!e.tooltips[r])&&j(t.firstChild,e.cssClasses.tooltip)}function T(){return E.hasAttribute("disabled")}function R(t){return u[t].hasAttribute("disabled")}function _(){b&&(ot("update"+N.tooltips),b.forEach((function(t){t&&s(t)})),b=null)}function B(){_(),b=u.map(F),it("update"+N.tooltips,(function(t,r,n){if(b&&e.tooltips&&!1!==b[r]){var i=t[r];!0!==e.tooltips[r]&&(i=e.tooltips[r].to(n[r])),b[r].innerHTML=i}}))}function q(t,e){return t.map((function(t){return C.fromStepping(e?C.getStep(t):t)}))}function X(t){var e,i=function(t){if(t.mode===r.Range||t.mode===r.Steps)return C.xVal;if(t.mode===r.Count){if(t.values<2)throw new Error("noUiSlider: 'values' (>= 2) required for mode 'count'.");for(var e=t.values-1,n=100/e,i=[];e--;)i[e]=e*n;return i.push(100),q(i,t.stepped)}return t.mode===r.Positions?q(t.values,t.stepped):t.mode===r.Values?t.stepped?t.values.map((function(t){return C.fromStepping(C.getStep(C.toStepping(t)))})):t.values:[]}(t),o={},s=C.xVal[0],a=C.xVal[C.xVal.length-1],l=!1,u=!1,c=0;return e=i.slice().sort((function(t,e){return t-e})),(i=e.filter((function(t){return!this[t]&&(this[t]=!0)}),{}))[0]!==s&&(i.unshift(s),l=!0),i[i.length-1]!==a&&(i.push(a),u=!0),i.forEach((function(e,s){var a,p,f,d,h,m,g,v,b,S,x=e,y=i[s+1],w=t.mode===r.Steps;for(w&&(a=C.xNumSteps[s]),a||(a=y-x),void 0===y&&(y=x),a=Math.max(a,1e-7),p=x;p<=y;p=Number((p+a).toFixed(7))){for(v=(h=(d=C.toStepping(p))-c)/(t.density||1),S=h/(b=Math.round(v)),f=1;f<=b;f+=1)o[(m=c+f*S).toFixed(5)]=[C.fromStepping(m),0];g=i.indexOf(p)>-1?n.LargeValue:w?n.SmallValue:n.NoValue,!s&&l&&p!==y&&(g=0),p===y&&u||(o[d.toFixed(5)]=[p,g]),c=d}})),o}function Y(t,r,i){var o,s,a=M.createElement("div"),l=((o={})[n.None]="",o[n.NoValue]=e.cssClasses.valueNormal,o[n.LargeValue]=e.cssClasses.valueLarge,o[n.SmallValue]=e.cssClasses.valueSub,o),u=((s={})[n.None]="",s[n.NoValue]=e.cssClasses.markerNormal,s[n.LargeValue]=e.cssClasses.markerLarge,s[n.SmallValue]=e.cssClasses.markerSub,s),c=[e.cssClasses.valueHorizontal,e.cssClasses.valueVertical],p=[e.cssClasses.markerHorizontal,e.cssClasses.markerVertical];function f(t,r){var n=r===e.cssClasses.value,i=n?l:u;return r+" "+(n?c:p)[e.ort]+" "+i[t]}return h(a,e.cssClasses.pips),h(a,0===e.ort?e.cssClasses.pipsHorizontal:e.cssClasses.pipsVertical),Object.keys(t).forEach((function(o){!function(t,o,s){if((s=r?r(o,s):s)!==n.None){var l=j(a,!1);l.className=f(s,e.cssClasses.marker),l.style[e.style]=t+"%",s>n.NoValue&&((l=j(a,!1)).className=f(s,e.cssClasses.value),l.setAttribute("data-value",String(o)),l.style[e.style]=t+"%",l.innerHTML=String(i.to(o)))}}(o,t[o][0],t[o][1])})),a}function I(){v&&(s(v),v=null)}function W(t){I();var e=X(t),r=t.filter,n=t.format||{to:function(t){return String(Math.round(t))}};return v=E.appendChild(Y(e,r,n))}function $(){var t=o.getBoundingClientRect(),r="offset"+["Width","Height"][e.ort];return 0===e.ort?t.width||o[r]:t.height||o[r]}function G(t,r,n,i){var o=function(o){var s,a,l=function(t,e,r){var n=0===t.type.indexOf("touch"),i=0===t.type.indexOf("mouse"),o=0===t.type.indexOf("pointer"),s=0,a=0;0===t.type.indexOf("MSPointer")&&(o=!0);if("mousedown"===t.type&&!t.buttons&&!t.touches)return!1;if(n){var l=function(e){var n=e.target;return n===r||r.contains(n)||t.composed&&t.composedPath().shift()===r};if("touchstart"===t.type){var u=Array.prototype.filter.call(t.touches,l);if(u.length>1)return!1;s=u[0].pageX,a=u[0].pageY}else{var c=Array.prototype.find.call(t.changedTouches,l);if(!c)return!1;s=c.pageX,a=c.pageY}}e=e||g(M),(i||o)&&(s=t.clientX+e.x,a=t.clientY+e.y);return t.pageOffset=e,t.points=[s,a],t.cursor=i||o,t}(o,i.pageOffset,i.target||r);return!!l&&(!(T()&&!i.doNotReject)&&(s=E,a=e.cssClasses.tap,!((s.classList?s.classList.contains(a):new RegExp("\\b"+a+"\\b").test(s.className))&&!i.doNotReject)&&(!(t===y.start&&void 0!==l.buttons&&l.buttons>1)&&((!i.hover||!l.buttons)&&(w||l.preventDefault(),l.calcPoint=l.points[e.ort],void n(l,i))))))},s=[];return t.split(" ").forEach((function(t){r.addEventListener(t,o,!!w&&{passive:!0}),s.push([t,o])})),s}function K(t){var r,n,i,s,a,l,u=100*(t-(r=o,n=e.ort,i=r.getBoundingClientRect(),s=r.ownerDocument,a=s.documentElement,l=g(s),/webkit.*Chrome.*Mobile/i.test(navigator.userAgent)&&(l.x=0),n?i.top+l.y-a.clientTop:i.left+l.x-a.clientLeft))/$();return u=p(u),e.dir?100-u:u}function Q(t,e){"mouseout"===t.type&&"HTML"===t.target.nodeName&&null===t.relatedTarget&&tt(t,e)}function Z(t,r){if(-1===navigator.appVersion.indexOf("MSIE 9")&&0===t.buttons&&0!==r.buttonsProperty)return tt(t,r);var n=(e.dir?-1:1)*(t.calcPoint-r.startCalcPoint);ut(n>0,100*n/r.baseSize,r.locations,r.handleNumbers,r.connect)}function tt(t,r){r.handle&&(m(r.handle,e.cssClasses.active),k-=1),r.listeners.forEach((function(t){D.removeEventListener(t[0],t[1])})),0===k&&(m(E,e.cssClasses.drag),pt(),t.cursor&&(O.style.cursor="",O.removeEventListener("selectstart",l))),e.events.smoothSteps&&(r.handleNumbers.forEach((function(t){ft(t,V[t],!0,!0,!1,!1)})),r.handleNumbers.forEach((function(t){st("update",t)}))),r.handleNumbers.forEach((function(t){st("change",t),st("set",t),st("end",t)}))}function et(t,r){if(!r.handleNumbers.some(R)){var n;if(1===r.handleNumbers.length)n=u[r.handleNumbers[0]].children[0],k+=1,h(n,e.cssClasses.active);t.stopPropagation();var i=[],o=G(y.move,D,Z,{target:t.target,handle:n,connect:r.connect,listeners:i,startCalcPoint:t.calcPoint,baseSize:$(),pageOffset:t.pageOffset,handleNumbers:r.handleNumbers,buttonsProperty:t.buttons,locations:V.slice()}),s=G(y.end,D,tt,{target:t.target,handle:n,listeners:i,doNotReject:!0,handleNumbers:r.handleNumbers}),a=G("mouseout",D,Q,{target:t.target,handle:n,listeners:i,doNotReject:!0,handleNumbers:r.handleNumbers});i.push.apply(i,o.concat(s,a)),t.cursor&&(O.style.cursor=getComputedStyle(t.target).cursor,u.length>1&&h(E,e.cssClasses.drag),O.addEventListener("selectstart",l,!1)),r.handleNumbers.forEach((function(t){st("start",t)}))}}function rt(t){t.stopPropagation();var r=K(t.calcPoint),n=function(t){var e=100,r=!1;return u.forEach((function(n,i){if(!R(i)){var o=V[i],s=Math.abs(o-t);(s<e||s<=e&&t>o||100===s&&100===e)&&(r=i,e=s)}})),r}(r);!1!==n&&(e.events.snap||c(E,e.cssClasses.tap,e.animationDuration),ft(n,r,!0,!0),pt(),st("slide",n,!0),st("update",n,!0),e.events.snap?et(t,{handleNumbers:[n]}):(st("change",n,!0),st("set",n,!0)))}function nt(t){var e=K(t.calcPoint),r=C.getStep(e),n=C.fromStepping(r);Object.keys(U).forEach((function(t){"hover"===t.split(".")[0]&&U[t].forEach((function(t){t.call(bt,n)}))}))}function it(t,e){U[t]=U[t]||[],U[t].push(e),"update"===t.split(".")[0]&&u.forEach((function(t,e){st("update",e)}))}function ot(t){var e=t&&t.split(".")[0],r=e?t.substring(e.length):t;Object.keys(U).forEach((function(t){var n=t.split(".")[0],i=t.substring(n.length);e&&e!==n||r&&r!==i||function(t){return t===N.aria||t===N.tooltips}(i)&&r!==i||delete U[t]}))}function st(t,r,n){Object.keys(U).forEach((function(i){var o=i.split(".")[0];t===o&&U[i].forEach((function(t){t.call(bt,P.map(e.format.to),r,P.slice(),n||!1,V.slice(),bt)}))}))}function at(t,r,n,i,o,s,a){var l;return u.length>1&&!e.events.unconstrained&&(i&&r>0&&(l=C.getAbsoluteDistance(t[r-1],e.margin,!1),n=Math.max(n,l)),o&&r<u.length-1&&(l=C.getAbsoluteDistance(t[r+1],e.margin,!0),n=Math.min(n,l))),u.length>1&&e.limit&&(i&&r>0&&(l=C.getAbsoluteDistance(t[r-1],e.limit,!1),n=Math.min(n,l)),o&&r<u.length-1&&(l=C.getAbsoluteDistance(t[r+1],e.limit,!0),n=Math.max(n,l))),e.padding&&(0===r&&(l=C.getAbsoluteDistance(0,e.padding[0],!1),n=Math.max(n,l)),r===u.length-1&&(l=C.getAbsoluteDistance(100,e.padding[1],!0),n=Math.min(n,l))),a||(n=C.getStep(n)),!((n=p(n))===t[r]&&!s)&&n}function lt(t,r){var n=e.ort;return(n?r:t)+", "+(n?t:r)}function ut(t,r,n,i,o){var s=n.slice(),a=i[0],l=e.events.smoothSteps,u=[!t,t],c=[t,!t];i=i.slice(),t&&i.reverse(),i.length>1?i.forEach((function(t,e){var n=at(s,t,s[t]+r,u[e],c[e],!1,l);!1===n?r=0:(r=n-s[t],s[t]=n)})):u=c=[!0];var p=!1;i.forEach((function(t,e){p=ft(t,n[t]+r,u[e],c[e],!1,l)||p})),p&&(i.forEach((function(t){st("update",t),st("slide",t)})),null!=o&&st("drag",a))}function ct(t,r){return e.dir?100-t-r:t}function pt(){A.forEach((function(t){var e=V[t]>50?-1:1,r=3+(u.length+e*t);u[t].style.zIndex=String(r)}))}function ft(t,r,n,i,o,s){return o||(r=at(V,t,r,n,i,!1,s)),!1!==r&&(function(t,r){V[t]=r,P[t]=C.fromStepping(r);var n="translate("+lt(ct(r,0)-L+"%","0")+")";u[t].style[e.transformRule]=n,dt(t),dt(t+1)}(t,r),!0)}function dt(t){if(d[t]){var r=0,n=100;0!==t&&(r=V[t-1]),t!==d.length-1&&(n=V[t]);var i=n-r,o="translate("+lt(ct(r,i)+"%","0")+")",s="scale("+lt(i/100,"1")+")";d[t].style[e.transformRule]=o+" "+s}}function ht(t,r){return null===t||!1===t||void 0===t?V[r]:("number"==typeof t&&(t=String(t)),!1!==(t=e.format.from(t))&&(t=C.toStepping(t)),!1===t||isNaN(t)?V[r]:t)}function mt(t,r,n){var i=f(t),o=void 0===V[0];r=void 0===r||r,e.animate&&!o&&c(E,e.cssClasses.tap,e.animationDuration),A.forEach((function(t){ft(t,ht(i[t],t),!0,!1,n)}));var s=1===A.length?0:1;if(o&&C.hasNoSize()&&(n=!0,V[0]=0,A.length>1)){var a=100/(A.length-1);A.forEach((function(t){V[t]=t*a}))}for(;s<A.length;++s)A.forEach((function(t){ft(t,V[t],!0,!0,n)}));pt(),A.forEach((function(t){st("update",t),null!==i[t]&&r&&st("set",t)}))}function gt(t){if(void 0===t&&(t=!1),t)return 1===P.length?P[0]:P.slice(0);var r=P.map(e.format.to);return 1===r.length?r[0]:r}function vt(t){var r=V[t],n=C.getNearbySteps(r),i=P[t],o=n.thisStep.step,s=null;if(e.snap)return[i-n.stepBefore.startValue||null,n.stepAfter.startValue-i||null];!1!==o&&i+o>n.stepAfter.startValue&&(o=n.stepAfter.startValue-i),s=i>n.thisStep.startValue?n.thisStep.step:!1!==n.stepBefore.step&&i-n.stepBefore.highestStep,100===r?o=null:0===r&&(s=null);var a=C.countStepDecimals();return null!==o&&!1!==o&&(o=Number(o.toFixed(a))),null!==s&&!1!==s&&(s=Number(s.toFixed(a))),[s,o]}h(S=E,e.cssClasses.target),0===e.dir?h(S,e.cssClasses.ltr):h(S,e.cssClasses.rtl),0===e.ort?h(S,e.cssClasses.horizontal):h(S,e.cssClasses.vertical),h(S,"rtl"===getComputedStyle(S).direction?e.cssClasses.textDirectionRtl:e.cssClasses.textDirectionLtr),o=j(S,e.cssClasses.base),function(t,r){var n=j(r,e.cssClasses.connects);u=[],(d=[]).push(H(n,t[0]));for(var i=0;i<e.handles;i++)u.push(z(r,i)),A[i]=i,d.push(H(n,t[i+1]))}(e.connect,o),(x=e.events).fixed||u.forEach((function(t,e){G(y.start,t.children[0],et,{handleNumbers:[e]})})),x.tap&&G(y.start,o,rt,{}),x.hover&&G(y.move,o,nt,{hover:!0}),x.drag&&d.forEach((function(t,r){if(!1!==t&&0!==r&&r!==d.length-1){var n=u[r-1],i=u[r],o=[t],s=[n,i],a=[r-1,r];h(t,e.cssClasses.draggable),x.fixed&&(o.push(n.children[0]),o.push(i.children[0])),x.dragAll&&(s=u,a=A),o.forEach((function(e){G(y.start,e,et,{handles:s,handleNumbers:a,connect:t})}))}})),mt(e.start),e.pips&&W(e.pips),e.tooltips&&B(),ot("update"+N.aria),it("update"+N.aria,(function(t,r,n,i,o){A.forEach((function(t){var r=u[t],i=at(V,t,0,!0,!0,!0),s=at(V,t,100,!0,!0,!0),a=o[t],l=String(e.ariaFormat.to(n[t]));i=C.fromStepping(i).toFixed(1),s=C.fromStepping(s).toFixed(1),a=C.fromStepping(a).toFixed(1),r.children[0].setAttribute("aria-valuemin",i),r.children[0].setAttribute("aria-valuemax",s),r.children[0].setAttribute("aria-valuenow",a),r.children[0].setAttribute("aria-valuetext",l)}))}));var bt={destroy:function(){for(ot(N.aria),ot(N.tooltips),Object.keys(e.cssClasses).forEach((function(t){m(E,e.cssClasses[t])}));E.firstChild;)E.removeChild(E.firstChild);delete E.noUiSlider},steps:function(){return A.map(vt)},on:it,off:ot,get:gt,set:mt,setHandle:function(t,e,r,n){if(!((t=Number(t))>=0&&t<A.length))throw new Error("noUiSlider: invalid handle number, got: "+t);ft(t,ht(e,t),!0,!0,n),st("update",t),r&&st("set",t)},reset:function(t){mt(e.start,t)},disable:function(t){null!=t?(u[t].setAttribute("disabled",""),u[t].handle.removeAttribute("tabindex")):(E.setAttribute("disabled",""),u.forEach((function(t){t.handle.removeAttribute("tabindex")})))},enable:function(t){null!=t?(u[t].removeAttribute("disabled"),u[t].handle.setAttribute("tabindex","0")):(E.removeAttribute("disabled"),u.forEach((function(t){t.removeAttribute("disabled"),t.handle.setAttribute("tabindex","0")})))},__moveHandles:function(t,e,r){ut(t,e,V,r)},options:i,updateOptions:function(t,r){var n=gt(),o=["margin","limit","padding","range","animate","snap","step","format","pips","tooltips"];o.forEach((function(e){void 0!==t[e]&&(i[e]=t[e])}));var s=J(i);o.forEach((function(r){void 0!==t[r]&&(e[r]=s[r])})),C=s.spectrum,e.margin=s.margin,e.limit=s.limit,e.padding=s.padding,e.pips?W(e.pips):I(),e.tooltips?B():_(),V=[],mt(a(t.start)?t.start:n,r)},target:E,removePips:I,removeTooltips:_,getPositions:function(){return V.slice()},getTooltips:function(){return b},getOrigins:function(){return u},pips:W};return bt}function Q(t,e){if(!t||!t.nodeName)throw new Error("noUiSlider: create requires a single element, got: "+t);if(t.noUiSlider)throw new Error("noUiSlider: Slider was already initialized.");var r=K(t,J(e),e);return t.noUiSlider=r,r}var Z={__spectrum:w,cssClasses:C,create:Q};return e}()}));