(window.webpackJsonpLHCReactAPPAdmin=window.webpackJsonpLHCReactAPPAdmin||[]).push([[2],{43:function(e,t){e.exports=function(e,t,a){return t in e?Object.defineProperty(e,t,{value:a,enumerable:!0,configurable:!0,writable:!0}):e[t]=a,e}},9:function(e,t,a){"use strict";a.r(t);var n=a(11),r=a.n(n),s=a(43),c=a.n(s),o=a(0),l=a.n(o),i=a(12),m=a.n(i);function u(e,t){var a=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),a.push.apply(a,n)}return a}function f(e,t){switch(t.type){case"increment":return{count:e.count+1};case"decrement":return{count:e.count-1};case"update":return function(e){for(var t=1;t<arguments.length;t++){var a=null!=arguments[t]?arguments[t]:{};t%2?u(Object(a),!0).forEach((function(t){c()(e,t,a[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(a)):u(Object(a)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(a,t))}))}return e}({},e,{},t.value);case"init":return{count:e.count-1};default:throw new Error}}t.default=function(e){var t=Object(o.useState)([]),a=r()(t,2),n=(a[0],a[1],Object(o.useState)(!1)),s=r()(n,2),c=(s[0],s[1],Object(o.useReducer)((function(e){return e+1}),0)),i=r()(c,2),u=(i[0],i[1],Object(o.useState)(!1)),p=r()(u,2),d=(p[0],p[1],Object(o.useRef)(null)),b=Object(o.useReducer)(f,{messages:[],operators:[],last_message:"",last_message_id:0}),g=r()(b,2),v=g[0],O=g[1];Object(o.useEffect)((function(){return O({type:"update",value:{last_message:"Just last message sample"}}),setTimeout((function(){!function t(){m.a.post(WWW_DIR_JAVASCRIPT+"groupchat/sync/"+e.chatId,[e.chatId+","+v.last_message_id]).then((function(e){O({type:"update",value:{last_message:"Just last message sample"+Date.now()}}),setTimeout((function(){t()}),3e3),console.log("message fetched")}))}()}),3e3),function(){console.log("cleanup group chat")}}),[]);return l.a.createElement(l.a.Fragment,null,l.a.createElement("div",{className:"row"},l.a.createElement("div",{className:"col-sm-7 chat-main-left-column"},v.last_message,l.a.createElement("div",{className:"message-block"},l.a.createElement("div",{className:"msgBlock msgBlock-admin"})),l.a.createElement("div",{className:"message-container-admin"},l.a.createElement("textarea",{ref:d,placeholder:"",onKeyDown:function(t){return function(t,a){if(13==t.keyCode)return m.a.post(WWW_DIR_JAVASCRIPT+"groupchat/addmessage/"+e.chatId,{msg:d.current.value}).then((function(e){console.log("message added")})),d.current.value="",t.preventDefault(),void t.stopPropagation()}(t)},className:"form-control form-control-sm form-group",rows:"2"}))),l.a.createElement("div",{className:"col-sm-5 chat-main-right-column"},l.a.createElement("div",{role:"tabpanel"},l.a.createElement("ul",{className:"nav nav-pills",role:"tablist"},l.a.createElement("li",{role:"presentation",className:"nav-item"},l.a.createElement("a",{className:"nav-link active",href:"#main-user-info-tab-11194","aria-controls":"main-user-info-tab-11194",role:"tab","data-toggle":"tab",title:"Visitor"},l.a.createElement("i",{className:"material-icons mr-0"},"face"))),l.a.createElement("li",{className:"nav-item",role:"presentation"},l.a.createElement("a",{className:"nav-link ",href:"#main-user-info-translation-11194","aria-controls":"main-user-info-translation-11194",title:"Automatic translation",role:"tab","data-toggle":"tab"},l.a.createElement("i",{className:"material-icons mr-0"},"info_outline")))),l.a.createElement("div",{className:"tab-content"},l.a.createElement("div",{role:"tabpanel",className:"tab-pane active",id:"main-user-info-tab-11194"}),l.a.createElement("div",{role:"tabpanel",className:"tab-pane",id:"main-user-info-remarks-11194"}))))))}}}]);