(window.webpackJsonpLiveHelperChat=window.webpackJsonpLiveHelperChat||[]).push([[4],{29:function(module,exports,__webpack_require__){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.analyticEvents=void 0;var _createClass=function(){function e(e,t){for(var a=0;a<t.length;a++){var n=t[a];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}return function(t,a,n){return a&&e(t.prototype,a),n&&e(t,n),t}}(),_domEventsHandler=__webpack_require__(2),_helperFunctions=__webpack_require__(1);function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var _analyticEvents=function(){function _analyticEvents(){_classCallCheck(this,_analyticEvents),this.params={}}return _createClass(_analyticEvents,[{key:"setParams",value:function(e,t){this.params=e,this.attributes=t,this.initMonitoring()}},{key:"initMonitoring",value:function initMonitoring(){var _this=this;this.params.ga.events.forEach((function(item){_this.attributes.eventEmitter.addListener(item.ev,(function(params){if("hideInvitation"!=item.ev||void 0===params||!params.full){var label=item.el;"showInvitation"!=item.ev&&"readInvitation"!=item.ev&&"fullInvitation"!=item.ev&&"cancelInvitation"!=item.ev||void 0===params||!params.name||(label=params.name);var js=_this.params.ga.js.replace("{{eventCategory}}",JSON.stringify(item.ec)).replace("{{eventAction}}",JSON.stringify(item.ea)).replace("{{eventLabel}}",JSON.stringify(label));console.log(params),console.log(item.ev);try{eval(js)}catch(e){console.log(e)}}}))}))}}]),_analyticEvents}(),analyticEvents=new _analyticEvents;exports.analyticEvents=analyticEvents}}]);