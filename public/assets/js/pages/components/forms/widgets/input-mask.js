!function(t){var e={};function n(r){if(e[r])return e[r].exports;var i=e[r]={i:r,l:!1,exports:{}};return t[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var i in t)n.d(r,i,function(e){return t[e]}.bind(null,i));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=668)}({668:function(t,e,n){"use strict";var r={init:function(){$("#kt_inputmask_1").inputmask("99/99/9999",{removeMaskOnSubmit:!0,placeholder:"dd/mm/yyyy"}),$("#kt_inputmask_2").inputmask("99/99/9999",{placeholder:"*"}),$("#kt_inputmask_3").inputmask("mask",{mask:"(999) 999-9999"}),$("#kt_inputmask_4").inputmask({mask:"99-9999999",placeholder:""}),$("#kt_inputmask_5").inputmask({mask:"9",repeat:10,greedy:!1}),$("#kt_inputmask_6").inputmask("decimal",{rightAlignNumerics:!1}),$("#kt_inputmask_7").inputmask("€ 999.999.999,99",{numericInput:!0}),$("#kt_inputmask_8").inputmask({mask:"999.999.999.999"}),$("#kt_inputmask_9").inputmask({mask:"*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",greedy:!1,onBeforePaste:function(t,e){return(t=t.toLowerCase()).replace("mailto:","")},definitions:{"*":{validator:"[0-9A-Za-z!#$%&'*+/=?^_`{|}~-]",cardinality:1,casing:"lower"}}})}};jQuery(document).ready((function(){r.init()}))}});