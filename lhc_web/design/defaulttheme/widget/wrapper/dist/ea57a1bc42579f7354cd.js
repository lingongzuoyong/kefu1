(window.webpackJsonpLiveHelperChat=window.webpackJsonpLiveHelperChat||[]).push([[4],{29:function(module,exports,__webpack_require__){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.analyticEvents=void 0;var _createClass=function(){function e(e,t){for(var n=0;n<t.length;n++){var a=t[n];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,a.key,a)}}return function(t,n,a){return n&&e(t.prototype,n),a&&e(t,a),t}}(),_domEventsHandler=__webpack_require__(2),_helperFunctions=__webpack_require__(1);function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var _analyticEvents=function(){function _analyticEvents(){_classCallCheck(this,_analyticEvents),this.params={}}return _createClass(_analyticEvents,[{key:"setParams",value:function(e,t){this.params=e,this.attributes=t,this.initMonitoring()}},{key:"initMonitoring",value:function initMonitoring(){var _this=this;this.params.ga.events.forEach((function(item){_this.attributes.eventEmitter.addListener(item.ev,(function(params){if("hideInvitation"!=item.ev||!params||!params.full){console.log(item.ev);var js=_this.params.ga.js.replace("{{eventCategory}}",JSON.stringify(item.ec)).replace("{{eventAction}}",JSON.stringify(item.ea)).replace("{{eventLabel}}",JSON.stringify(item.el));try{eval(js)}catch(e){console.log(e)}}}))}))}}]),_analyticEvents}(),analyticEvents=new _analyticEvents;exports.analyticEvents=analyticEvents}}]);