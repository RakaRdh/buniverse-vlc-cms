
<!-- DEBUG-VIEW START 196 APPPATH\Views\home.php -->
<!-- DEBUG-VIEW START 195 APPPATH\Views\layouts\main.php -->
<!DOCTYPE html>
<html lang="id">
<head>
<script  id="debugbar_loader" data-time="1790383772.531378" src="https://cheap-sql-generator-inquiry.trycloudflare.com/index.php?debugbar"></script><script  id="debugbar_dynamic_script"></script><style  id="debugbar_dynamic_style"></style><script class="kint-rich-script">void 0===window.kintShared&&(window.kintShared=function(){"use strict";var e={dedupe:function(e,n){return[].forEach.call(document.querySelectorAll(e),function(e){e!==(n=n&&n.ownerDocument.contains(n)?n:e)&&e.parentNode.removeChild(e)}),n},runOnce:function(e){"complete"===document.readyState?e():window.addEventListener("load",e)}};return window.addEventListener("click",function(e){var n;e.target.classList.contains("kint-ide-link")&&((n=new XMLHttpRequest).open("GET",e.target.href),n.send(null),e.preventDefault())}),e}());
void 0===window.kintRich&&(window.kintRich=function(){"use strict";var l={selectText:function(e){var t=window.getSelection(),a=document.createRange();a.selectNodeContents(e),t.removeAllRanges(),t.addRange(a)},toggle:function(e,t){var a=l.getChildren(e);a&&(e.classList.toggle("kint-show",t),1===a.childNodes.length)&&(a=a.childNodes[0].childNodes[0])&&a.classList&&a.classList.contains("kint-parent")&&l.toggle(a,t)},toggleChildren:function(e,t){var a=l.getChildren(e);if(a){var o=a.getElementsByClassName("kint-parent"),s=o.length;for(void 0===t&&(t=e.classList.contains("kint-show"));s--;)l.toggle(o[s],t)}},switchTab:function(e){var t=e.previousSibling,a=0;for(e.parentNode.getElementsByClassName("kint-active-tab")[0].classList.remove("kint-active-tab"),e.classList.add("kint-active-tab");t;)1===t.nodeType&&a++,t=t.previousSibling;for(var o=e.parentNode.nextSibling.childNodes,s=0;s<o.length;s++)s===a?(o[s].classList.add("kint-show"),1===o[s].childNodes.length&&(t=o[s].childNodes[0].childNodes[0])&&t.classList&&t.classList.contains("kint-parent")&&l.toggle(t,!0)):o[s].classList.remove("kint-show")},mktag:function(e){return"<"+e+">"},openInNewWindow:function(e){var t=window.open();t&&(t.document.open(),t.document.write(l.mktag("html")+l.mktag("head")+l.mktag("title")+"Kint ("+(new Date).toISOString()+")"+l.mktag("/title")+l.mktag('meta charset="utf-8"')+l.mktag('script class="kint-rich-script" nonce="'+l.script.nonce+'"')+l.script.innerHTML+l.mktag("/script")+l.mktag('style class="kint-rich-style" nonce="'+l.style.nonce+'"')+l.style.innerHTML+l.mktag("/style")+l.mktag("/head")+l.mktag("body")+'<input class="kint-note-input" placeholder="Take some notes!"><div class="kint-rich">'+e.parentNode.outerHTML+"</div>"+l.mktag("/body")),t.document.close())},sortTable:function(e,a){var t=e.tBodies[0];[].slice.call(e.tBodies[0].rows).sort(function(e,t){if(e=e.cells[a].textContent.trim().toLocaleLowerCase(),t=t.cells[a].textContent.trim().toLocaleLowerCase(),isNaN(e)||isNaN(t)){if(isNaN(e)&&!isNaN(t))return 1;if(isNaN(t)&&!isNaN(e))return-1}else e=parseFloat(e),t=parseFloat(t);return e<t?-1:t<e?1:0}).forEach(function(e){t.appendChild(e)})},showAccessPath:function(e){for(var t=e.childNodes,a=0;a<t.length;a++)if(t[a].classList&&t[a].classList.contains("access-path"))return t[a].classList.toggle("kint-show"),void(t[a].classList.contains("kint-show")&&l.selectText(t[a]))},showSearchBox:function(e){var t=e.querySelector(".kint-search");t&&(t.classList.toggle("kint-show"),t.classList.contains("kint-show")?(e.classList.add("kint-show"),t.focus(),t.select(),l.search(e.parentNode,t.value)):e.parentNode.classList.remove("kint-search-root"))},search:function(e,t){e.querySelectorAll(".kint-search-match").forEach(function(e){e.classList.remove("kint-search-match")}),e.classList.remove("kint-search-match"),e.classList.toggle("kint-search-root",t.length),t.length&&l.findMatches(e,t)},findMatches:function(e,t){var a,o,s,n=e.cloneNode(!0);if(n.querySelectorAll(".access-path").forEach(function(e){e.remove()}),-1!=n.textContent.toUpperCase().indexOf(t.toUpperCase())){for(r in e.classList.add("kint-search-match"),e.childNodes)if("DD"==e.childNodes[r].tagName){a=e.childNodes[r];break}if(a)if([].forEach.call(a.childNodes,function(e){"DL"==e.tagName?l.findMatches(e,t):"UL"==e.tagName&&(e.classList.contains("kint-tabs")?o=e.childNodes:e.classList.contains("kint-tab-contents")&&(s=e.childNodes))}),o&&s&&o.length==s.length)for(var r=0;r<o.length;r++){var i=!1;(i=-1!=o[r].textContent.toUpperCase().indexOf(t.toUpperCase())||((n=s[r].cloneNode(!0)).querySelectorAll(".access-path").forEach(function(e){e.remove()}),-1!=n.textContent.toUpperCase().indexOf(t.toUpperCase()))?!0:i)&&(o[r].classList.add("kint-search-match"),[].forEach.call(s[r].childNodes,function(e){"DL"==e.tagName&&l.findMatches(e,t)}))}}},getParentByClass:function(e,t){for(;;){if(!(e=e.parentNode)||!e.classList||e===document)return null;if(e.classList.contains(t))return e}return null},getParentHeader:function(e,t){for(var a=e.nodeName.toLowerCase();"dd"!==a&&"dt"!==a&&l.getParentByClass(e,"kint-rich");)a=(e=e.parentNode).nodeName.toLowerCase();return l.getParentByClass(e,"kint-rich")?(e="dd"===a&&t?e.previousElementSibling:e)&&"dt"===e.nodeName.toLowerCase()&&e.classList.contains("kint-parent")?e:void 0:null},getChildren:function(e){for(;(e=e.nextElementSibling)&&"dd"!==e.nodeName.toLowerCase(););return e},isFolderOpen:function(){if(l.folder&&l.folder.querySelector("dd.kint-foldout"))return l.folder.querySelector("dd.kint-foldout").previousSibling.classList.contains("kint-show")},initLoad:function(){l.style=window.kintShared.dedupe("style.kint-rich-style",l.style),l.script=window.kintShared.dedupe("script.kint-rich-script",l.script),l.folder=window.kintShared.dedupe(".kint-rich.kint-folder",l.folder);var t,e=document.querySelectorAll("input.kint-search");[].forEach.call(e,function(t){function e(e){window.clearTimeout(a),t.value!==o&&(a=window.setTimeout(function(){o=t.value,l.search(t.parentNode.parentNode,o)},500))}var a=null,o=null;t.removeEventListener("keyup",e),t.addEventListener("keyup",e)}),l.folder&&(t=l.folder.querySelector("dd"),[].forEach.call(document.querySelectorAll(".kint-rich.kint-file"),function(e){e.parentNode!==l.folder&&t.appendChild(e)}),document.body.appendChild(l.folder),l.folder.classList.add("kint-show"))},keyboardNav:{targets:[],target:0,active:!1,fetchTargets:function(){var e=l.keyboardNav.targets[l.keyboardNav.target];l.keyboardNav.targets=[],document.querySelectorAll(".kint-rich nav, .kint-tabs>li:not(.kint-active-tab)").forEach(function(e){l.isFolderOpen()&&!l.folder.contains(e)||0===e.offsetWidth&&0===e.offsetHeight||l.keyboardNav.targets.push(e)}),e&&-1!==l.keyboardNav.targets.indexOf(e)&&(l.keyboardNav.target=l.keyboardNav.targets.indexOf(e))},sync:function(e){var t=document.querySelector(".kint-focused");t&&t.classList.remove("kint-focused"),l.keyboardNav.active&&((t=l.keyboardNav.targets[l.keyboardNav.target]).classList.add("kint-focused"),e||l.keyboardNav.scroll(t))},scroll:function(e){var t,a;l.folder&&e===l.folder.querySelector("dt > nav")||(e=(t=function(e){return e.offsetTop+(e.offsetParent?t(e.offsetParent):0)})(e),l.isFolderOpen()?(a=l.folder.querySelector("dd.kint-foldout")).scrollTo(0,e-a.clientHeight/2):window.scrollTo(0,e-window.innerHeight/2))},moveCursor:function(e){for(l.keyboardNav.target+=e;l.keyboardNav.target<0;)l.keyboardNav.target+=l.keyboardNav.targets.length;for(;l.keyboardNav.target>=l.keyboardNav.targets.length;)l.keyboardNav.target-=l.keyboardNav.targets.length;l.keyboardNav.sync()},setCursor:function(e){if(!l.isFolderOpen()||l.folder.contains(e)){l.keyboardNav.fetchTargets();for(var t=0;t<l.keyboardNav.targets.length;t++)if(e===l.keyboardNav.targets[t])return l.keyboardNav.target=t,!0}return!1}},mouseNav:{lastClickTarget:null,lastClickTimer:null,lastClickCount:0,renewLastClick:function(){window.clearTimeout(l.mouseNav.lastClickTimer),l.mouseNav.lastClickTimer=window.setTimeout(function(){l.mouseNav.lastClickTarget=null,l.mouseNav.lastClickTimer=null,l.mouseNav.lastClickCount=0},250)}},style:null,script:null,folder:null};return window.addEventListener("click",function(e){var t=e.target;if(l.mouseNav.lastClickTarget&&l.mouseNav.lastClickTimer&&l.mouseNav.lastClickCount)if(t=l.mouseNav.lastClickTarget,1===l.mouseNav.lastClickCount)l.toggleChildren(t.parentNode),l.keyboardNav.setCursor(t),l.keyboardNav.sync(!0),l.mouseNav.lastClickCount++,l.mouseNav.renewLastClick();else{for(var a=t.parentNode.classList.contains("kint-show"),o=document.getElementsByClassName("kint-parent"),s=o.length;s--;)l.toggle(o[s],a);l.keyboardNav.setCursor(t),l.keyboardNav.sync(!0),l.keyboardNav.scroll(t),window.clearTimeout(l.mouseNav.lastClickTimer),l.mouseNav.lastClickTarget=null,l.mouseNav.lastClickTarget=null,l.mouseNav.lastClickCount=0}else if(l.getParentByClass(t,"kint-rich")){var n=t.nodeName.toLowerCase();if("dfn"===n&&l.selectText(t),"th"===n)e.ctrlKey||l.sortTable(t.parentNode.parentNode.parentNode,t.cellIndex);else if((t=l.getParentHeader(t))&&(l.keyboardNav.setCursor(t.querySelector("nav")),l.keyboardNav.sync(!0)),t=e.target,"li"===n&&"kint-tabs"===t.parentNode.className)"kint-active-tab"!==t.className&&l.switchTab(t),(t=l.getParentHeader(t,!0))&&(l.keyboardNav.setCursor(t.querySelector("nav")),l.keyboardNav.sync(!0));else if("nav"===n)"footer"===t.parentNode.nodeName.toLowerCase()?(l.keyboardNav.setCursor(t),l.keyboardNav.sync(!0),(t=t.parentNode).classList.toggle("kint-show")):(l.toggle(t.parentNode),l.keyboardNav.fetchTargets(),l.mouseNav.lastClickCount=1,l.mouseNav.lastClickTarget=t,l.mouseNav.renewLastClick());else if(t.classList.contains("kint-popup-trigger")){var r=t.parentNode;if("footer"===r.nodeName.toLowerCase())r=r.previousSibling;else for(;r&&!r.classList.contains("kint-parent");)r=r.parentNode;l.openInNewWindow(r)}else t.classList.contains("kint-access-path-trigger")?l.showAccessPath(t.parentNode):t.classList.contains("kint-search-trigger")?l.showSearchBox(t.parentNode):t.classList.contains("kint-search")||("pre"===n&&3===e.detail?l.selectText(t):l.getParentByClass(t,"kint-source")&&3===e.detail?l.selectText(l.getParentByClass(t,"kint-source")):t.classList.contains("access-path")?l.selectText(t):"a"!==n&&(t=l.getParentHeader(t))&&(l.toggle(t),l.keyboardNav.fetchTargets()))}},!0),window.addEventListener("keydown",function(e){if(e.target===document.body&&!e.altKey&&!e.ctrlKey)if(68===e.keyCode){if(l.keyboardNav.active)l.keyboardNav.active=!1;else if(l.keyboardNav.active=!0,l.keyboardNav.fetchTargets(),0===l.keyboardNav.targets.length)return void(l.keyboardNav.active=!1);l.keyboardNav.sync(),e.preventDefault()}else if(l.keyboardNav.active)if(9===e.keyCode)l.keyboardNav.moveCursor(e.shiftKey?-1:1),e.preventDefault();else if(38===e.keyCode||75===e.keyCode)l.keyboardNav.moveCursor(-1),e.preventDefault();else if(40===e.keyCode||74===e.keyCode)l.keyboardNav.moveCursor(1),e.preventDefault();else{var t,a,o=l.keyboardNav.targets[l.keyboardNav.target];if("li"===o.nodeName.toLowerCase()){if(32===e.keyCode||13===e.keyCode)return l.switchTab(o),l.keyboardNav.fetchTargets(),l.keyboardNav.sync(),void e.preventDefault();if(39===e.keyCode||76===e.keyCode)return l.keyboardNav.moveCursor(1),void e.preventDefault();if(37===e.keyCode||72===e.keyCode)return l.keyboardNav.moveCursor(-1),void e.preventDefault()}o=o.parentNode,65===e.keyCode?(l.showAccessPath(o),e.preventDefault()):"footer"===o.nodeName.toLowerCase()&&o.parentNode.classList.contains("kint-rich")?32===e.keyCode||13===e.keyCode?(o.classList.toggle("kint-show"),e.preventDefault()):37===e.keyCode||72===e.keyCode?(o.classList.remove("kint-show"),e.preventDefault()):39!==e.keyCode&&76!==e.keyCode||(o.classList.add("kint-show"),e.preventDefault()):32===e.keyCode||13===e.keyCode?(l.toggle(o),l.keyboardNav.fetchTargets(),e.preventDefault()):39!==e.keyCode&&76!==e.keyCode&&37!==e.keyCode&&72!==e.keyCode||(t=39===e.keyCode||76===e.keyCode,o.classList.contains("kint-show")?l.toggleChildren(o,t):t||(a=l.getParentHeader(o.parentNode.parentNode,!0))&&(l.keyboardNav.setCursor((o=a).querySelector("nav")),l.keyboardNav.sync()),l.toggle(o,t),l.keyboardNav.fetchTargets(),e.preventDefault())}},!0),l}()),window.kintShared.runOnce(window.kintRich.initLoad);
void 0===window.kintMicrotimeInitialized&&(window.kintMicrotimeInitialized=1,window.addEventListener("load",function(){"use strict";var a={},t=Array.prototype.slice.call(document.querySelectorAll("[data-kint-microtime-group]"),0);t.forEach(function(t){var i,e;t.querySelector(".kint-microtime-lap")&&(i=t.getAttribute("data-kint-microtime-group"),e=parseFloat(t.querySelector(".kint-microtime-lap").innerHTML),t=parseFloat(t.querySelector(".kint-microtime-avg").innerHTML),void 0===a[i]&&(a[i]={}),(void 0===a[i].min||a[i].min>e)&&(a[i].min=e),(void 0===a[i].max||a[i].max<e)&&(a[i].max=e),a[i].avg=t)}),t.forEach(function(t){var i,e,r,o,n=t.querySelector(".kint-microtime-lap");null!==n&&(i=parseFloat(n.textContent),o=t.dataset.kintMicrotimeGroup,e=a[o].avg,r=a[o].max,o=a[o].min,i!==(t.querySelector(".kint-microtime-avg").textContent=e)||i!==o||i!==r)&&(n.style.background=e<i?"hsl("+(40-40*((i-e)/(r-e)))+", 100%, 65%)":"hsl("+(40+80*(e===o?0:(e-i)/(e-o)))+", 100%, 65%)")})}));
</script><style class="kint-rich-style">.kint-rich{font-size:13px;overflow-x:auto;white-space:nowrap;background:rgba(255,255,255,.9)}.kint-rich.kint-folder{position:fixed;bottom:0;left:0;right:0;z-index:999999;width:100%;margin:0;display:block}.kint-rich.kint-folder dd.kint-foldout{max-height:calc(100vh - 100px);padding-right:8px;overflow-y:scroll;display:none}.kint-rich.kint-folder dd.kint-foldout.kint-show{display:block}.kint-rich::selection,.kint-rich::-moz-selection,.kint-rich::-webkit-selection{background:#aaa;color:#1d1e1e}.kint-rich .kint-focused{box-shadow:0 0 3px 2px red}.kint-rich,.kint-rich::before,.kint-rich::after,.kint-rich *,.kint-rich *::before,.kint-rich *::after{box-sizing:border-box;border-radius:0;color:#1d1e1e;float:none !important;font-family:Consolas,Menlo,Monaco,Lucida Console,Liberation Mono,DejaVu Sans Mono,Bitstream Vera Sans Mono,Courier New,monospace,serif;line-height:15px;margin:0;padding:0;text-align:left}.kint-rich{margin:8px 0}.kint-rich dt,.kint-rich dl{width:auto}.kint-rich dt,.kint-rich div.access-path{background:#f8f8f8;border:1px solid #d7d7d7;color:#1d1e1e;display:block;font-weight:bold;list-style:none outside none;overflow:auto;padding:4px}.kint-rich dt:hover,.kint-rich div.access-path:hover{border-color:#aaa}.kint-rich>dl dl{padding:0 0 0 12px}.kint-rich dt.kint-parent>nav,.kint-rich>footer>nav{background:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMCAxNTAiPjxwYXRoIGQ9Ik02IDdoMThsLTkgMTV6bTAgMzBoMThsLTkgMTV6bTAgNDVoMThsLTktMTV6bTAgMzBoMThsLTktMTV6bTAgMTJsMTggMThtLTE4IDBsMTgtMTgiIGZpbGw9IiM1NTUiLz48cGF0aCBkPSJNNiAxMjZsMTggMThtLTE4IDBsMTgtMTgiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlPSIjNTU1Ii8+PC9zdmc+") no-repeat scroll 0 0/15px 75px rgba(0,0,0,0);cursor:pointer;display:inline-block;height:15px;width:15px;margin-right:3px;vertical-align:middle}.kint-rich dt.kint-parent:hover>nav,.kint-rich>footer>nav:hover{background-position:0 25%}.kint-rich dt.kint-parent.kint-show>nav,.kint-rich>footer.kint-show>nav{background-position:0 50%}.kint-rich dt.kint-parent.kint-show:hover>nav,.kint-rich>footer.kint-show>nav:hover{background-position:0 75%}.kint-rich dt.kint-parent.kint-locked>nav{background-position:0 100%}.kint-rich dt.kint-parent+dd{display:none;border-left:1px dashed #d7d7d7}.kint-rich dt.kint-parent.kint-show+dd{display:block}.kint-rich var,.kint-rich var a{color:#06f;font-style:normal}.kint-rich dt:hover var,.kint-rich dt:hover var a{color:red}.kint-rich dfn{font-style:normal;font-family:monospace;color:#1d1e1e}.kint-rich pre{color:#1d1e1e;margin:0 0 0 12px;padding:5px;overflow-y:hidden;border-top:0;border:1px solid #d7d7d7;background:#f8f8f8;display:block;word-break:normal}.kint-rich .kint-popup-trigger,.kint-rich .kint-access-path-trigger,.kint-rich .kint-search-trigger{background:rgba(29,30,30,.8);border-radius:3px;height:16px;font-size:16px;margin-left:5px;font-weight:bold;width:16px;text-align:center;float:right !important;cursor:pointer;color:#f8f8f8;position:relative;overflow:hidden;line-height:17.6px}.kint-rich .kint-popup-trigger:hover,.kint-rich .kint-access-path-trigger:hover,.kint-rich .kint-search-trigger:hover{color:#1d1e1e;background:#f8f8f8}.kint-rich dt.kint-parent>.kint-popup-trigger{line-height:19.2px}.kint-rich .kint-search-trigger{font-size:20px}.kint-rich input.kint-search{display:none;border:1px solid #d7d7d7;border-top-width:0;border-bottom-width:0;padding:4px;float:right !important;margin:-4px 0;color:#1d1e1e;background:#f8f8f8;height:24px;width:160px;position:relative;z-index:100}.kint-rich input.kint-search.kint-show{display:block}.kint-rich .kint-search-root ul.kint-tabs>li:not(.kint-search-match){background:#f8f8f8;opacity:.5}.kint-rich .kint-search-root dl:not(.kint-search-match){opacity:.5}.kint-rich .kint-search-root dl:not(.kint-search-match)>dt{background:#f8f8f8}.kint-rich .kint-search-root dl:not(.kint-search-match) dl,.kint-rich .kint-search-root dl:not(.kint-search-match) ul.kint-tabs>li:not(.kint-search-match){opacity:1}.kint-rich div.access-path{background:#f8f8f8;display:none;margin-top:5px;padding:4px;white-space:pre}.kint-rich div.access-path.kint-show{display:block}.kint-rich footer{padding:0 3px 3px;font-size:9px;background:rgba(0,0,0,0)}.kint-rich footer>.kint-popup-trigger{background:rgba(0,0,0,0);color:#1d1e1e}.kint-rich footer nav{height:10px;width:10px;background-size:10px 50px}.kint-rich footer>ol{display:none;margin-left:32px}.kint-rich footer.kint-show>ol{display:block}.kint-rich a{color:#1d1e1e;text-shadow:none;text-decoration:underline}.kint-rich a:hover{color:#1d1e1e;border-bottom:1px dotted #1d1e1e}.kint-rich ul{list-style:none;padding-left:12px}.kint-rich ul:not(.kint-tabs) li{border-left:1px dashed #d7d7d7}.kint-rich ul:not(.kint-tabs) li>dl{border-left:none}.kint-rich ul.kint-tabs{margin:0 0 0 12px;padding-left:0;background:#f8f8f8;border:1px solid #d7d7d7;border-top:0}.kint-rich ul.kint-tabs>li{background:#f8f8f8;border:1px solid #d7d7d7;cursor:pointer;display:inline-block;height:24px;margin:2px;padding:0 12px;vertical-align:top}.kint-rich ul.kint-tabs>li:hover,.kint-rich ul.kint-tabs>li.kint-active-tab:hover{border-color:#aaa;color:red}.kint-rich ul.kint-tabs>li.kint-active-tab{background:#f8f8f8;border-top:0;margin-top:-1px;height:27px;line-height:24px}.kint-rich ul.kint-tabs>li:not(.kint-active-tab){line-height:20px}.kint-rich ul.kint-tabs li+li{margin-left:0}.kint-rich ul.kint-tab-contents>li{display:none}.kint-rich ul.kint-tab-contents>li.kint-show{display:block}.kint-rich dt:hover+dd>ul>li.kint-active-tab{border-color:#aaa;color:red}.kint-rich dt>.kint-color-preview{width:16px;height:16px;display:inline-block;vertical-align:middle;margin-left:10px;border:1px solid #d7d7d7;background-color:#ccc;background-image:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2 2"><path fill="%23FFF" d="M0 0h1v2h1V1H0z"/></svg>');background-size:100%}.kint-rich dt>.kint-color-preview:hover{border-color:#aaa}.kint-rich dt>.kint-color-preview>div{width:100%;height:100%}.kint-rich table{border-collapse:collapse;empty-cells:show;border-spacing:0}.kint-rich table *{font-size:12px}.kint-rich table dt{background:none;padding:2px}.kint-rich table dt .kint-parent{min-width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.kint-rich table td,.kint-rich table th{border:1px solid #d7d7d7;padding:2px;vertical-align:center}.kint-rich table th{cursor:alias}.kint-rich table td:first-child,.kint-rich table th{font-weight:bold;background:#f8f8f8;color:#1d1e1e}.kint-rich table td{background:#f8f8f8;white-space:pre}.kint-rich table td>dl{padding:0}.kint-rich table pre{border-top:0;border-right:0}.kint-rich table thead th:first-child{background:none;border:0}.kint-rich table tr:hover>td{box-shadow:0 0 1px 0 #aaa inset}.kint-rich table tr:hover var{color:red}.kint-rich table ul.kint-tabs li.kint-active-tab{height:20px;line-height:17px}.kint-rich pre.kint-source{margin-left:-1px}.kint-rich pre.kint-source[data-kint-filename]:before{display:block;content:attr(data-kint-filename);margin-bottom:4px;padding-bottom:4px;border-bottom:1px solid #f8f8f8}.kint-rich pre.kint-source>div:before{display:inline-block;content:counter(kint-l);counter-increment:kint-l;border-right:1px solid #aaa;padding-right:8px;margin-right:8px}.kint-rich pre.kint-source>div.kint-highlight{background:#f8f8f8}.kint-rich .kint-microtime-lap{text-shadow:-1px 0 #aaa,0 1px #aaa,1px 0 #aaa,0 -1px #aaa;color:#f8f8f8;font-weight:bold}input.kint-note-input{width:100%}.kint-rich .kint-focused{box-shadow:0 0 3px 2px red}.kint-rich dt{font-weight:normal}.kint-rich dt.kint-parent{margin-top:4px}.kint-rich dl dl{margin-top:4px;padding-left:25px;border-left:none}.kint-rich>dl>dt{background:#f8f8f8}.kint-rich ul{margin:0;padding-left:0}.kint-rich ul:not(.kint-tabs)>li{border-left:0}.kint-rich ul.kint-tabs{background:#f8f8f8;border:1px solid #d7d7d7;border-width:0 1px 1px 1px;padding:4px 0 0 12px;margin-left:-1px;margin-top:-1px}.kint-rich ul.kint-tabs li,.kint-rich ul.kint-tabs li+li{margin:0 0 0 4px}.kint-rich ul.kint-tabs li{border-bottom-width:0;height:25px}.kint-rich ul.kint-tabs li:first-child{margin-left:0}.kint-rich ul.kint-tabs li.kint-active-tab{border-top:1px solid #d7d7d7;background:#fff;font-weight:bold;padding-top:0;border-bottom:1px solid #fff !important;margin-bottom:-1px}.kint-rich ul.kint-tabs li.kint-active-tab:hover{border-bottom:1px solid #fff}.kint-rich ul>li>pre{border:1px solid #d7d7d7}.kint-rich dt:hover+dd>ul{border-color:#aaa}.kint-rich pre{background:#fff;margin-top:4px;margin-left:25px}.kint-rich .kint-source{margin-left:-1px}.kint-rich .kint-source .kint-highlight{background:#cfc}.kint-rich .kint-parent.kint-show>.kint-search{border-bottom-width:1px}.kint-rich table td{background:#fff}.kint-rich table td>dl{padding:0;margin:0}.kint-rich table td>dl>dt.kint-parent{margin:0}.kint-rich table td:first-child,.kint-rich table td,.kint-rich table th{padding:2px 4px}.kint-rich table dd,.kint-rich table dt{background:#fff}.kint-rich table tr:hover>td{box-shadow:none;background:#cfc}
</style>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investor Daily Summit 2026</title>
  <meta name="description" content="Investor Daily Summit 2026, Indonesia’s largest investment forum is monumental gathering of power and potential.">
  <meta property="og:title" content="Investor Daily Summit 2026">
  <meta property="og:description" content="Investor Daily Summit 2026, Indonesia’s largest investment forum is monumental gathering of power and potential.">
  <meta property="og:image" content="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/seo/1790133065_b03bbab0ac9ecbc63338.jpeg">
  <meta property="og:type" content="website">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="https://cheap-sql-generator-inquiry.trycloudflare.com/favicon.ico?v=1790330711">
  <link rel="icon" type="image/x-icon" href="https://cheap-sql-generator-inquiry.trycloudflare.com/favicon.ico?v=1790330711">
  
  <!-- Google Fonts: Manrope & Playfair Display -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,700;0,800;0,900;1,700&display=swap" rel="stylesheet">
  
  <!-- Core Vanilla CSS -->
  <link rel="stylesheet" href="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/css/style.css">
  <!-- Tailwind Perintilan CSS -->
  <link rel="stylesheet" href="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/css/tailwind.css">

      <!-- Live Dynamic Theme CSS Custom Properties from BackendCMS (Placed after style.css to override defaults) -->
    <style id="live-theme-properties">
      :root {
                  --neutral-1: #ffffff;
                  --neutral-2: #fcfcfc;
                  --neutral-3: #f5f5f5;
                  --neutral-4: #f0f0f0;
                  --neutral-5: #d9d9d9;
                  --neutral-6: #bfbfbf;
                  --neutral-7: #8c8c8c;
                  --neutral-8: #595959;
                  --neutral-9: #454545;
                  --neutral-10: #262626;
                  --neutral-11: #1f1f1f;
                  --neutral-12: #141414;
                  --neutral-13: #000000;
                  --primary-1-1: #e6e7ea;
                  --primary-1-2: #c2c4cd;
                  --primary-1-3: #9296a5;
                  --primary-1-4: #5f657b;
                  --primary-1-5: #2f3653;
                  --primary-1-6: #010a2d;
                  --primary-1-7: #010926;
                  --primary-1-8: #010720;
                  --primary-1-9: #01061a;
                  --primary-1-10: #000514;
                  --primary-2-1: #e6eff5;
                  --primary-2-2: #c2d9e7;
                  --primary-2-3: #91bbd4;
                  --primary-2-4: #5e9cbf;
                  --primary-2-5: #2e7eac;
                  --primary-2-6: #00629a;
                  --primary-2-7: #005383;
                  --primary-2-8: #00466d;
                  --primary-2-9: #003858;
                  --primary-2-10: #002c45;
                  --bg-page: #010a2d;
                  --bg-section-alt: #000514;
                  --bg-card: #010720;
                  --bg-card-gradient: linear-gradient(135deg, #010926 0%, #01061a 100%);
                  --bg-pill: #010720;
                  --bg-pill-active: #ffffff;
                  --text-primary: #ffffff;
                  --text-secondary: rgba(255, 255, 255, 0.82);
                  --text-muted: #bfbfbf;
                  --text-dark: #000514;
                  --accent-cyan: #010a2d;
                  --accent-light: #91b2ca;
                  --accent-blue: #004b84;
                  --accent-glow: rgba(94, 142, 178, 0.35);
                  --border-divider: rgba(255, 255, 255, 0.12);
                  --border-subtle: rgba(255, 255, 255, 0.20);
                  --font-sans: 'Manrope', 'Montserrat', 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
                  --font-serif: 'Playfair Display', Georgia, Cambria, 'Times New Roman', Times, serif;
                  --container-max-width: 1440px;
                  --container-padding: 80px;
                  --radius-sm: 6px;
                  --radius-md: 10px;
                  --radius-lg: 16px;
                  --radius-pill: 9999px;
                  --transition-normal: 0.25s cubic-bezier(0.4, 0, 0.2, 1);
                  --navbar-cta-bg: #ffffff;
                  --navbar-cta-text: #052431;
                  --navbar-cta-hover-bg: #ffffff;
                  --navbar-cta-hover-text: #041a24;
                  --navbar-cta-hover-outline: #ffffff;
                  --footer-bg: #010a2d;
                  --footer-text-color: rgba(255, 255, 255, 0.85);
                  --footer-social-bg: #064057;
                  --footer-social-color: #ffffff;
                  --footer-border-color: rgba(255, 255, 255, 0.12);
              }
    </style>
  </head>
<body>

  <!-- 1. Header / Navigation -->
  <!-- DEBUG-VIEW START 1 APPPATH\Views\partials\header.php -->
<header class="site-header" id="header">
  <div class="container">
    <div class="header-inner">
      
      <!-- Dual-logo brand lockup dengan URL terpisah untuk masing-masing logo -->
      <div class="brand-lockup">
        <!-- Logo 1: INVESTOR DAILY SUMMIT 2026 -->
                          <a href="#home" class="brand-logo-link brand-logo-link-a" aria-label="Investor Daily Summit 2026">
            <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/logos/logo_ids26_white.webp" alt="Investor Daily Summit 2026" class="brand-logo-ids">
          </a>
        
        <!-- Vertical Divider -->
                          <div class="brand-divider" aria-hidden="true"></div>
        
        <!-- Logo 2: INVESTOR DAILY INDONESIA -->
                          <a href="https://investor.id" class="brand-logo-link brand-logo-link-b" aria-label="Investor Daily Indonesia" target="_blank" rel="noopener noreferrer">
            <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/logos/logo_id_white.webp" alt="Investor Daily Indonesia" class="brand-logo-id">
          </a>
              </div>

      <!-- Right Group: Navigation links + Get Tickets CTA -->
      <div class="header-right-group">
        <nav class="site-nav" id="siteNav" aria-label="Main Navigation">
          <div class="mobile-nav-header">
            <button class="nav-close-btn" id="navCloseBtn" aria-label="Close navigation menu">&times;</button>
          </div>
                      <a href="#home" class="nav-link active">
              Home            </a>
                      <a href="#about-us" class="nav-link ">
              About Us            </a>
                      <a href="#schedule" class="nav-link ">
              Schedule            </a>
                      <a href="#gallery" class="nav-link ">
              Gallery            </a>
                      <a href="#news" class="nav-link ">
              News            </a>
                      <a href="#sponsor" class="nav-link ">
              Sponsors            </a>
                      <a href="#location" class="nav-link ">
              Location            </a>
                                <a href="https://goers.co/investordailysummit2026" class="btn-ticket btn-ticket-mobile" data-track-ticket="true" target="_blank" rel="noopener noreferrer">
              Get Tickets            </a>
                  </nav>

                  <a href="https://goers.co/investordailysummit2026" class="btn-ticket btn-ticket-desktop" data-track-ticket="true" target="_blank" rel="noopener noreferrer">
            Get Tickets          </a>
                
        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation menu">
          <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/hamburger.svg" alt="Menu" class="nav-toggle-icon" width="26" height="18">
        </button>
      </div>

    </div>
  </div>
</header>

<!-- DEBUG-VIEW ENDED 1 APPPATH\Views\partials\header.php -->

  <!-- Main Content Body -->
  <main id="mainContent">
    <!-- 2. Hero Section -->
    <!-- DEBUG-VIEW START 4 APPPATH\Views\partials\hero.php -->
<section class="hero-section" id="home">
  <!-- DEBUG-VIEW START 2 APPPATH\Views\partials\section_decorations.php -->

<!-- DEBUG-VIEW ENDED 2 APPPATH\Views\partials\section_decorations.php -->
  <!-- DEBUG-VIEW START 3 APPPATH\Views\partials\custom_placements.php -->

<!-- DEBUG-VIEW ENDED 3 APPPATH\Views\partials\custom_placements.php -->
  <!-- 1. Pure CSS Hero Background Canvas (Base #010A2D with ambient royal blue glow #0C2F88 at top-left) -->
  <div class="hero-bg-canvas" aria-hidden="true"></div>

  <!-- Hero Hardcoded Decorative Discs -->
  <div class="hero-deco-wrap" aria-hidden="true">
    <!-- Deco A: Top Left Subtle Accent -->
    <div class="hero-deco-item hero-deco-topleft">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/decoration.png" alt="" class="hero-deco-img">
    </div>

    <!-- Deco B: Center-Right Perspective 3D Spinning Disc wrapped with static Luminance mask -->
    <div class="hero-deco-main-mask">
      <div class="hero-deco-item hero-deco-main-perspective">
        <div class="hero-deco-tilt">
          <div class="hero-deco-spin">
            <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/decoration.png" alt="" class="hero-deco-img">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 2. Centered Content Group: Bundle single image hero.png -->
  <div class="container hero-container">
    <div class="hero-content hero-content-centered">
      <div class="hero-bundle-wrap">
        <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/hero.webp" alt="Investor Daily Summit 2026" class="hero-bundle-img">
      </div>
    </div>
  </div>

  <!-- Mobile Scroll Indicator (Polos, statis, menghilang saat scroll ke atas sedikitpun) -->
  <div class="hero-scroll-indicator" id="heroScrollIndicator" aria-hidden="true">
    <svg class="hero-scroll-icon" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="24" cy="24" r="22.5" stroke="#ffffff" stroke-width="1.8"/>
      <path d="M24 16V31M24 31L18 24.5M24 31L30 24.5" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </div>
</section>

<!-- DEBUG-VIEW ENDED 4 APPPATH\Views\partials\hero.php -->

    <!-- 3. Overview (Indonesia's Economic Model Editorial) -->
    <!-- DEBUG-VIEW START 7 APPPATH\Views\partials\overview.php -->
<section class="editorial-section" id="about-us">
  <!-- DEBUG-VIEW START 5 APPPATH\Views\partials\section_decorations.php -->

<!-- DEBUG-VIEW ENDED 5 APPPATH\Views\partials\section_decorations.php -->
  <!-- DEBUG-VIEW START 6 APPPATH\Views\partials\custom_placements.php -->

<!-- DEBUG-VIEW ENDED 6 APPPATH\Views\partials\custom_placements.php -->
  <div class="container">
    <div class="editorial-grid">
      
      <!-- Left Column: Editorial Logo & Intro -->
      <div class="editorial-left">
        <div class="editorial-logo">
                                <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/logos/1790241456_cff68286a82d484ae4a9.png" alt="Investor Daily Summit 2026" class="editorial-brand-logo">
                  </div>

        <p class="editorial-intro">
          Investor Daily Summit 2026, Indonesia’s largest investment forum is monumental gathering of power and potential.
The Vision: Ensuring Indonesia’s economic engine drives forward, faster and stronger, to sustain the 8% growth trajectory amid domestic challenges, geopolitical tension, and global uncertainty.        </p>
      </div>

      <!-- Right Column: Topic Badge & Editorial Paragraphs -->
      <div class="editorial-right">
        <div class="topic-badge">
          INDONESIA&#039;S ECONOMIC MODEL        </div>

        <div class="editorial-paragraphs">
                      <p>This year's summit focuses on a defining challenge: how Indonesia can strengthen its economic foundations and sustain long-term growth amid intensifying global uncertainties and evolving domestic challenges.</p>
                      <p>As geopolitical shifts, economic fragmentation, and technological disruption reshape the world economy, we need to explore strategies needed to build a more resilient, adaptive, and future-ready growth model. Combining the strengths of state-driven development and market-driven innovation, encouraging deeper collaboration of SOEs & private sector will unlock new engine of growth and drive sustainable economic progress.</p>
                      <p>We seek to identify the right balance between stability and dynamism, strategic direction and market efficiency, ensuring that Indonesia remains resilient, competitive, and well-positioned for the opportunities of the future.</p>
                      <p><span style="font-style: italic; font-weight: bold;">"Agility is our strategy, resilience is our foundation, and our growth is inevitable." </span></p>
                  </div>
      </div>

    </div>
  </div>

  <!-- Slanted Photo Collage (Anchored to bottom of section, left aligned with content) -->
  <div class="editorial-wave-mask-wrap" aria-hidden="true">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/overview_kolase.webp" alt="Overview collage" class="editorial-collage-img" loading="lazy">
  </div>
</section>

<!-- DEBUG-VIEW ENDED 7 APPPATH\Views\partials\overview.php -->

    <!-- 4. Live Streaming (YouTube Embed) Section -->
    <!-- DEBUG-VIEW START 10 APPPATH\Views\partials\livestream.php -->
<section class="livestream-section" id="livestream">
  <!-- DEBUG-VIEW START 8 APPPATH\Views\partials\section_decorations.php -->

<!-- DEBUG-VIEW ENDED 8 APPPATH\Views\partials\section_decorations.php -->
  <!-- DEBUG-VIEW START 9 APPPATH\Views\partials\custom_placements.php -->

<!-- DEBUG-VIEW ENDED 9 APPPATH\Views\partials\custom_placements.php -->
  <div class="container">
    
    <!-- Section Header Centered -->
    <div class="section-header-center">
      <h2 class="section-title">Livestream</h2>
    </div>

    <!-- Live Stream Video Player Embed -->
    <div class="livestream-player-wrapper">
      <div class="livestream-aspect-box">
        <iframe 
          src="https://www.youtube.com/embed/g_uK5W9-_Zc?rel=0&amp;modestbranding=1&amp;playsinline=1" 
          title="Livestream" 
          frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          referrerpolicy="strict-origin-when-cross-origin" 
          allowfullscreen>
        </iframe>
      </div>
    </div>

  </div>
</section>

<!-- DEBUG-VIEW ENDED 10 APPPATH\Views\partials\livestream.php -->

    <!-- 5. Schedule & Speakers Section -->
    <!-- DEBUG-VIEW START 178 APPPATH\Views\partials\schedule\index.php -->
<section class="schedule-section" id="schedule">
  <!-- DEBUG-VIEW START 11 APPPATH\Views\partials\section_decorations.php -->
<div class="decoration-layer" aria-hidden="true">
            
        
        
                    <div class="decoration-auto-group  hide-on-mobile"
                 data-count="7"
                 data-gap="800"
                 data-gap-unit="px"
                 data-start-side="right"
                 data-edge-offset="50%"
                 data-width="250"
                 data-opacity="1"
                 data-img="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/decorations/1790131807_57728f68fa891658a90d.png"
                 data-tint="#00629A"
                 data-rotated="0"
                 data-rot-dir="clockwise">
            </div>
            </div>

<!-- DEBUG-VIEW ENDED 11 APPPATH\Views\partials\section_decorations.php -->
  <!-- DEBUG-VIEW START 12 APPPATH\Views\partials\custom_placements.php -->

<!-- DEBUG-VIEW ENDED 12 APPPATH\Views\partials\custom_placements.php -->
  <div class="container">
    
    <!-- 1. Main Tabs Header: SCHEDULE vs SPEAKERS -->
    <div class="tabs-container">
      <div class="main-tabs" role="tablist">
        <button class="main-tab-btn active" data-tab="schedule" role="tab" aria-selected="true">
          SCHEDULE
        </button>
        <button class="main-tab-btn" data-tab="speakers" role="tab" aria-selected="false">
          SPEAKERS
        </button>
      </div>
    </div>

    <!-- 2. Day Selector: Auto-hidden when SPEAKERS tab is selected -->
        <div class="day-selector-wrapper" id="daySelectorWrapper">
      <div class="day-selector" role="tablist">
        <button class="day-btn active" data-day="day_1" data-heading="DAY 1" role="tab">
          October 7, 2026        </button>
        <button class="day-btn" data-day="day_2" data-heading="DAY 2" role="tab">
          October 8, 2026        </button>
      </div>
    </div>

    <!-- Active Day Title between tab pill and schedule content -->
    <div class="schedule-day-title-wrap" id="scheduleDayTitleWrap">
      <h3 class="schedule-day-heading" id="scheduleDayHeading">DAY 1</h3>
    </div>

    <!-- 3. Schedule Tab Content (Day 1 & Day 2 lists) -->
    <div class="schedule-list-view" id="scheduleListView">
      
      <!-- Day 1 Schedule -->
      <div class="day-schedule-content" data-day="day_1" style="display: block;">
        <div class="schedule-list">
                      <!-- DEBUG-VIEW START 13 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>08:00 - 09:30 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
      
      <h3 class="session-title">Registration</h3>
              <div class="session-subtitle" style="font-size: 15px; font-weight: 500; color: rgba(255, 255, 255, 0.85); margin-top: 4px; margin-bottom: 8px; line-height: 1.4;">
          Registrasi Tamu Undangan        </div>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 13 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 14 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>09:30 - 09:35 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
              <div class="room-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span>Investor Daily Plenary Room</span>
        </div>
      
      <h3 class="session-title">Menyanyikan Lagu Nasional</h3>
              <div class="session-subtitle" style="font-size: 15px; font-weight: 500; color: rgba(255, 255, 255, 0.85); margin-top: 4px; margin-bottom: 8px; line-height: 1.4;">
          Lagu Indonesia Raya        </div>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 14 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 16 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   active">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>09:35 - 09:50 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
              <div class="room-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span>Investor Daily Plenary Room</span>
        </div>
      
      <h3 class="session-title">Welcoming Speech</h3>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
                  <div class="plenary-speaker-grid">
                          <!-- DEBUG-VIEW START 15 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Enggartiasto Lukita" 
     data-speaker-role="Executive Chairman B-Universe" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218552_ca2ae49d9ae698e6d5ec.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218552_ca2ae49d9ae698e6d5ec.png" alt="Enggartiasto Lukita" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Enggartiasto Lukita</div>
    <div class="speaker-role">Executive Chairman B-Universe</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 15 APPPATH\Views\partials\schedule\speaker_card.php -->
                      </div>
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 16 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 17 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>09:50 - 10:20 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
              <div class="room-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span>Investor Daily Plenary Room</span>
        </div>
      
      <h3 class="session-title">Apresiasi Investasi</h3>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 17 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 19 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>10:20 - 10:50 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
              <div class="room-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span>Investor Daily Plenary Room</span>
        </div>
      
      <h3 class="session-title">Opening Speech</h3>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
                  <div class="plenary-speaker-grid">
                          <!-- DEBUG-VIEW START 18 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Rosan Roeslani" 
     data-speaker-role="Minister of Investment and Downstream Industry / Head of Investment Coordinating Board / Chief Executive Officer Danantara" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790219127_239e5c057a07615bcccc.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790219127_239e5c057a07615bcccc.png" alt="Rosan Roeslani" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Rosan Roeslani</div>
    <div class="speaker-role">Minister of Investment and Downstream Industry / Head of Investment Coordinating Board / Chief Executive Officer Danantara</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 18 APPPATH\Views\partials\schedule\speaker_card.php -->
                      </div>
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 19 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 21 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>10:50 - 11:20 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
              <div class="room-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span>Investor Daily Plenary Room</span>
        </div>
      
      <h3 class="session-title">Keynote Speech</h3>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
                  <div class="plenary-speaker-grid">
                          <!-- DEBUG-VIEW START 20 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Prabowo Subianto" 
     data-speaker-role="President of The Republic of Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790330086_63711dd8ffa5e365e104.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790330086_63711dd8ffa5e365e104.png" alt="Prabowo Subianto" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Prabowo Subianto</div>
    <div class="speaker-role">President of The Republic of Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 20 APPPATH\Views\partials\schedule\speaker_card.php -->
                      </div>
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 21 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 22 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>11:20 - 11:30 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
              <div class="room-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span>Investor Daily Plenary Room</span>
        </div>
      
      <h3 class="session-title">Opening Ceremony</h3>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 22 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 25 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>11:30 - 12:00 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
              <div class="room-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span>Investor Daily Plenary Room</span>
        </div>
      
      <h3 class="session-title">Fireside Chat 1</h3>
              <div class="session-subtitle" style="font-size: 15px; font-weight: 500; color: rgba(255, 255, 255, 0.85); margin-top: 4px; margin-bottom: 8px; line-height: 1.4;">
          Indonesia&#039;s Economic Model        </div>
      
      
              <!-- Layout Khusus dengan Pengantar (Sesuai Gambar 3) -->
        <div class="session-speakers-pengantar-wrap">
          
          <!-- MODERATOR (jika ada) -->
          
          <!-- PENGANTAR -->
          <div class="schedule-group-section">
            <div class="schedule-group-label">Introductory Speech:</div>
            <div class="plenary-speaker-grid">
                              <!-- DEBUG-VIEW START 23 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Enggartiasto Lukita" 
     data-speaker-role="Executive Chairman B-Universe" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/pengantar/1790232195_598bdb127f2c08035c9b.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/pengantar/1790232195_598bdb127f2c08035c9b.png" alt="Enggartiasto Lukita" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Enggartiasto Lukita</div>
    <div class="speaker-role">Executive Chairman B-Universe</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 23 APPPATH\Views\partials\schedule\speaker_card.php -->
                          </div>
          </div>

          <!-- SPEAKER -->
                      <div class="schedule-group-section">
              <div class="schedule-group-label">Speaker:</div>
              <div class="plenary-speaker-grid">
                                  <!-- DEBUG-VIEW START 24 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Hashim Djojohadikusumo" 
     data-speaker-role="Special Envoy of the President of the Republic of Indonesia for Climate and Energy" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218539_60f1289959c025a0acb2.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218539_60f1289959c025a0acb2.png" alt="Hashim Djojohadikusumo" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Hashim Djojohadikusumo</div>
    <div class="speaker-role">Special Envoy of the President of the Republic of Indonesia for Climate and Energy</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 24 APPPATH\Views\partials\schedule\speaker_card.php -->
                              </div>
            </div>
          
        </div>

      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 25 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 26 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row is-break  ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>12:00 - 13:30 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
      
      <h3 class="session-title">C-Suite Strategic Luncheon</h3>
              <div class="session-subtitle" style="font-size: 15px; font-weight: 500; color: rgba(255, 255, 255, 0.85); margin-top: 4px; margin-bottom: 8px; line-height: 1.4;">
          Exclusive/Invitation Only        </div>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 26 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 28 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>13:30 - 14:00 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
              <div class="room-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span>Investor Daily Plenary Room</span>
        </div>
      
      <h3 class="session-title">Keynote Speech Plenary Session 1</h3>
              <div class="session-subtitle" style="font-size: 15px; font-weight: 500; color: rgba(255, 255, 255, 0.85); margin-top: 4px; margin-bottom: 8px; line-height: 1.4;">
          Powering Tomorrow: Integrating Sustainable Energy and Minerals for Economic Leap        </div>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
                  <div class="plenary-speaker-grid">
                          <!-- DEBUG-VIEW START 27 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Bahlil Lahadalia" 
     data-speaker-role="Minister of Energy and Mineral Resources of the Republic of Indonesia." 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218493_f86600c8b9de32f094b9.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218493_f86600c8b9de32f094b9.png" alt="Bahlil Lahadalia" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Bahlil Lahadalia</div>
    <div class="speaker-role">Minister of Energy and Mineral Resources of the Republic of Indonesia.</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 27 APPPATH\Views\partials\schedule\speaker_card.php -->
                      </div>
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 28 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 35 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>14:00 - 15:15 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
              <div class="room-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span>Investor Daily Plenary Room</span>
        </div>
      
      <h3 class="session-title">Plenary Session 1</h3>
              <div class="session-subtitle" style="font-size: 15px; font-weight: 500; color: rgba(255, 255, 255, 0.85); margin-top: 4px; margin-bottom: 8px; line-height: 1.4;">
          Powering Tomorrow: Integrating Sustainable Energy and Minerals for Economic Leap        </div>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
                  <div class="moderator-row">
            <div class="moderator-photo">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Djaka Susila" loading="lazy">
            </div>
            <div class="moderator-text">
              <div class="moderator-label">MOD:</div>
              <div class="moderator-name-role">Djaka Susila (Editor in Chief Investor Daily &amp; Jakarta Globe)</div>
            </div>
          </div>
        
        <!-- Speakers List / Grid (Standardized width) -->
                  <div class="plenary-speaker-grid">
                          <!-- DEBUG-VIEW START 29 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Oki Muraza" 
     data-speaker-role="Deputy President Director &amp; Deputy CEO
PT Pertamina (Persero)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Oki Muraza" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Oki Muraza</div>
    <div class="speaker-role">Deputy President Director &amp; Deputy CEO
PT Pertamina (Persero)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 29 APPPATH\Views\partials\schedule\speaker_card.php -->
                          <!-- DEBUG-VIEW START 30 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Darmawan Prasodjo" 
     data-speaker-role="President Director
PT PLN (Persero)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Darmawan Prasodjo" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Darmawan Prasodjo</div>
    <div class="speaker-role">President Director
PT PLN (Persero)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 30 APPPATH\Views\partials\schedule\speaker_card.php -->
                          <!-- DEBUG-VIEW START 31 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Rachmat Makkasau" 
     data-speaker-role="Chairman
Indonesian Mining Association (IMA)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Rachmat Makkasau" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Rachmat Makkasau</div>
    <div class="speaker-role">Chairman
Indonesian Mining Association (IMA)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 31 APPPATH\Views\partials\schedule\speaker_card.php -->
                          <!-- DEBUG-VIEW START 32 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Tony Wenas" 
     data-speaker-role="President Director
PT Freeport Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Tony Wenas" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Tony Wenas</div>
    <div class="speaker-role">President Director
PT Freeport Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 32 APPPATH\Views\partials\schedule\speaker_card.php -->
                          <!-- DEBUG-VIEW START 33 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Bernardus Irmanto" 
     data-speaker-role="President Director
PT Vale Indonesia Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Bernardus Irmanto" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Bernardus Irmanto</div>
    <div class="speaker-role">President Director
PT Vale Indonesia Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 33 APPPATH\Views\partials\schedule\speaker_card.php -->
                          <!-- DEBUG-VIEW START 34 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Iwan Dewono Budiyuwono" 
     data-speaker-role="President Director
PT Alamtri Resources Indonesia Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Iwan Dewono Budiyuwono" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Iwan Dewono Budiyuwono</div>
    <div class="speaker-role">President Director
PT Alamtri Resources Indonesia Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 34 APPPATH\Views\partials\schedule\speaker_card.php -->
                      </div>
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 35 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 37 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>15:15 - 15:45 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
              <div class="room-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span>Investor Daily Plenary Room</span>
        </div>
      
      <h3 class="session-title">Special Remarks</h3>
              <div class="session-subtitle" style="font-size: 15px; font-weight: 500; color: rgba(255, 255, 255, 0.85); margin-top: 4px; margin-bottom: 8px; line-height: 1.4;">
          Five Centuries of Legacy: Shaping Jakarta as Inclusive World Megacity        </div>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
                  <div class="plenary-speaker-grid">
                          <!-- DEBUG-VIEW START 36 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Pramono Anung" 
     data-speaker-role="Governor of Jakarta" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218530_3dd3e10c30b862692e2a.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218530_3dd3e10c30b862692e2a.png" alt="Pramono Anung" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Pramono Anung</div>
    <div class="speaker-role">Governor of Jakarta</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 36 APPPATH\Views\partials\schedule\speaker_card.php -->
                      </div>
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 37 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 38 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row is-break  ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>15:45 - 16:00 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
      
      <h3 class="session-title">Afternoon Coffee Break &amp; Networking</h3>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 38 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 56 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row  is-multi-room-row ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>16:00 - 17:30 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
          <!-- Multi-Room Parent Title (e.g. Special Session A) -->
      <h3 class="session-title">Special Sessions A</h3>

      <!-- Multi-Room Container / Rooms Grid -->
      <div class="multi-room-container">
                  <div class="multi-room-card">
            
            <!-- Room Pill -->
                          <div class="room-pill">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
                <span>Investor Daily Room</span>
              </div>
            
            <!-- Sessions within this Room -->
            <div class="room-sessions-list">
                              <div class="room-subsession">
                  <h4 class="subsession-title">Keynote Speech Special Session A.1</h4>
                                      <div class="subsession-subtitle" style="font-size: 14px; font-weight: 500; color: rgba(255, 255, 255, 0.82); margin-top: 3px; line-height: 1.4;">
                      Anchoring Indonesia&#039;s Long-Term Development Ambitions                    </div>
                  
                  <!-- Moderator if any -->
                  
                  <!-- Speakers Grid -->
                                                        <div class="plenary-speaker-grid">
                                              <!-- DEBUG-VIEW START 39 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Anggito Abimanyu" 
     data-speaker-role="Chairman of the Board of Commissioners
Indonesia Deposit Insurance Corporation (LPS)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218522_51e4425c33c982ab5543.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218522_51e4425c33c982ab5543.png" alt="Anggito Abimanyu" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Anggito Abimanyu</div>
    <div class="speaker-role">Chairman of the Board of Commissioners
Indonesia Deposit Insurance Corporation (LPS)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 39 APPPATH\Views\partials\schedule\speaker_card.php -->
                                          </div>
                                  </div>
                              <div class="room-subsession">
                  <h4 class="subsession-title">Special Session A.1</h4>
                                      <div class="subsession-subtitle" style="font-size: 14px; font-weight: 500; color: rgba(255, 255, 255, 0.82); margin-top: 3px; line-height: 1.4;">
                      Rebalancing Growth For Stronger Indonesia                    </div>
                  
                  <!-- Moderator if any -->
                                      <div class="moderator-row">
                      <div class="moderator-photo">
                        <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Nasori Ahmad" loading="lazy">
                      </div>
                      <div class="moderator-text">
                        <div class="moderator-label">MOD:</div>
                        <div class="moderator-name-role">Nasori Ahmad (Managing Editor Investor Daily)</div>
                      </div>
                    </div>
                  
                  <!-- Speakers Grid -->
                                                        <div class="plenary-speaker-grid">
                                              <!-- DEBUG-VIEW START 40 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Ngurah Wirawan" 
     data-speaker-role="President Director
PT Danareksa (Persero)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Ngurah Wirawan" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Ngurah Wirawan</div>
    <div class="speaker-role">President Director
PT Danareksa (Persero)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 40 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 41 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Suryopratomo" 
     data-speaker-role="President Director
PT Gajah Tunggal Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Suryopratomo" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Suryopratomo</div>
    <div class="speaker-role">President Director
PT Gajah Tunggal Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 41 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 42 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Ryan Adrian" 
     data-speaker-role="Director Commercial, Convention &amp; Exhibition (CCE)
Agung Sedayu Group" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Ryan Adrian" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Ryan Adrian</div>
    <div class="speaker-role">Director Commercial, Convention &amp; Exhibition (CCE)
Agung Sedayu Group</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 42 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 43 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Setyono Djuandi Darmono" 
     data-speaker-role="President Director
PT Kawasan Industri Jababeka Tbk (KIJA)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Setyono Djuandi Darmono" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Setyono Djuandi Darmono</div>
    <div class="speaker-role">President Director
PT Kawasan Industri Jababeka Tbk (KIJA)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 43 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 44 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Edi Riva&#039;i" 
     data-speaker-role="Director of Legal, External Affairs &amp; Circular economy
PT Chandra Asri Pacific Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Edi Riva&#039;i" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Edi Riva&#039;i</div>
    <div class="speaker-role">Director of Legal, External Affairs &amp; Circular economy
PT Chandra Asri Pacific Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 44 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 45 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Indrieffouny Indra" 
     data-speaker-role="President Director
PT Semen Indonesia (Persero) Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Indrieffouny Indra" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Indrieffouny Indra</div>
    <div class="speaker-role">President Director
PT Semen Indonesia (Persero) Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 45 APPPATH\Views\partials\schedule\speaker_card.php -->
                                          </div>
                                  </div>
                          </div>

          </div>
                  <div class="multi-room-card">
            
            <!-- Room Pill -->
                          <div class="room-pill">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
                <span>Sponsor Room</span>
              </div>
            
            <!-- Sessions within this Room -->
            <div class="room-sessions-list">
                              <div class="room-subsession">
                  <h4 class="subsession-title">Keynote Speech Special Session A.2</h4>
                                      <div class="subsession-subtitle" style="font-size: 14px; font-weight: 500; color: rgba(255, 255, 255, 0.82); margin-top: 3px; line-height: 1.4;">
                      Beyond Welfare: Economic Mobility In A Market-Driven vs State-Driven World                    </div>
                  
                  <!-- Moderator if any -->
                  
                  <!-- Speakers Grid -->
                                                        <div class="plenary-speaker-grid">
                                              <!-- DEBUG-VIEW START 46 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Muhammad Qodari" 
     data-speaker-role="Head of the Government Communication Agency (Bakom RI)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790219109_35db79606f2fa5cff0ab.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790219109_35db79606f2fa5cff0ab.png" alt="Muhammad Qodari" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Muhammad Qodari</div>
    <div class="speaker-role">Head of the Government Communication Agency (Bakom RI)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 46 APPPATH\Views\partials\schedule\speaker_card.php -->
                                          </div>
                                  </div>
                              <div class="room-subsession">
                  <h4 class="subsession-title">Special Session A.2</h4>
                                      <div class="subsession-subtitle" style="font-size: 14px; font-weight: 500; color: rgba(255, 255, 255, 0.82); margin-top: 3px; line-height: 1.4;">
                      Beyond Welfare: Economic Mobility In A Market-Driven vs State-Driven World                    </div>
                  
                  <!-- Moderator if any -->
                                      <div class="moderator-row">
                      <div class="moderator-photo">
                        <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Wahyu Setyowati" loading="lazy">
                      </div>
                      <div class="moderator-text">
                        <div class="moderator-label">MOD:</div>
                        <div class="moderator-name-role">Wahyu Setyowati (Deputy Editor in Chief Investor Daily &amp; Jakarta Globe)</div>
                      </div>
                    </div>
                  
                  <!-- Speakers Grid -->
                                                        <div class="plenary-speaker-grid">
                                              <!-- DEBUG-VIEW START 47 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Rahmad Pribadi" 
     data-speaker-role="President Director
PT Pupuk Indonesia (Persero)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Rahmad Pribadi" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Rahmad Pribadi</div>
    <div class="speaker-role">President Director
PT Pupuk Indonesia (Persero)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 47 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 48 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Denni Puspa Purbasari" 
     data-speaker-role="Chief Economist
Indonesia Business Council" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Denni Puspa Purbasari" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Denni Puspa Purbasari</div>
    <div class="speaker-role">Chief Economist
Indonesia Business Council</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 48 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 49 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Kamrussamad" 
     data-speaker-role="Anggota DPR-RI periode 2024–2029" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790219082_f30b2270e8b651b99cf2.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790219082_f30b2270e8b651b99cf2.png" alt="Kamrussamad" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Kamrussamad</div>
    <div class="speaker-role">Anggota DPR-RI periode 2024–2029</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 49 APPPATH\Views\partials\schedule\speaker_card.php -->
                                          </div>
                                  </div>
                          </div>

          </div>
                  <div class="multi-room-card">
            
            <!-- Room Pill -->
                          <div class="room-pill">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
                <span>Beritasatu Room</span>
              </div>
            
            <!-- Sessions within this Room -->
            <div class="room-sessions-list">
                              <div class="room-subsession">
                  <h4 class="subsession-title">Special Session A.3</h4>
                                      <div class="subsession-subtitle" style="font-size: 14px; font-weight: 500; color: rgba(255, 255, 255, 0.82); margin-top: 3px; line-height: 1.4;">
                      Empowering Communities, Enabling Growth: Corporate Impact for Indonesia&#039;s Next Decade                    </div>
                  
                  <!-- Moderator if any -->
                                      <div class="moderator-row">
                      <div class="moderator-photo">
                        <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Faisal Baskoro" loading="lazy">
                      </div>
                      <div class="moderator-text">
                        <div class="moderator-label">MOD:</div>
                        <div class="moderator-name-role">Faisal Baskoro (Senior Editor Jakartaglobe)</div>
                      </div>
                    </div>
                  
                  <!-- Speakers Grid -->
                                                        <div class="plenary-speaker-grid">
                                              <!-- DEBUG-VIEW START 50 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Dharma Djojonegoro" 
     data-speaker-role="EVP Corporate Development
PT Freeport Indonesia Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Dharma Djojonegoro" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Dharma Djojonegoro</div>
    <div class="speaker-role">EVP Corporate Development
PT Freeport Indonesia Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 50 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 51 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Rudy" 
     data-speaker-role="President Director
PT Astra International Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Rudy" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Rudy</div>
    <div class="speaker-role">President Director
PT Astra International Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 51 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 52 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Irwan Hidayat" 
     data-speaker-role="President Director
PT Industri Jamu Dan Farmasi Sido Muncul Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Irwan Hidayat" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Irwan Hidayat</div>
    <div class="speaker-role">President Director
PT Industri Jamu Dan Farmasi Sido Muncul Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 52 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 53 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Dr. Rudolf Tjandra" 
     data-speaker-role="CEO &amp; President Director
KALBE Nutritionals" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Dr. Rudolf Tjandra" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Dr. Rudolf Tjandra</div>
    <div class="speaker-role">CEO &amp; President Director
KALBE Nutritionals</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 53 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 54 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Agung Laksamana" 
     data-speaker-role="General Secretary Director
Danone Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Agung Laksamana" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Agung Laksamana</div>
    <div class="speaker-role">General Secretary Director
Danone Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 54 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 55 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Jerry Marmen" 
     data-speaker-role="Chairman
GRC Profesional Certification Institute" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Jerry Marmen" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Jerry Marmen</div>
    <div class="speaker-role">Chairman
GRC Profesional Certification Institute</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 55 APPPATH\Views\partials\schedule\speaker_card.php -->
                                          </div>
                                  </div>
                          </div>

          </div>
              </div>

    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 56 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 58 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>17:30 - 18:00 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
              <div class="room-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span>Investor Daily Plenary Room</span>
        </div>
      
      <h3 class="session-title">Special Remarks</h3>
              <div class="session-subtitle" style="font-size: 15px; font-weight: 500; color: rgba(255, 255, 255, 0.85); margin-top: 4px; margin-bottom: 8px; line-height: 1.4;">
          Understanding President&#039;s Big Plans        </div>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
                  <div class="plenary-speaker-grid">
                          <!-- DEBUG-VIEW START 57 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Teddy Indra Wijaya" 
     data-speaker-role="Cabinet Secretary of the Republic of Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Teddy Indra Wijaya" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Teddy Indra Wijaya</div>
    <div class="speaker-role">Cabinet Secretary of the Republic of Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 57 APPPATH\Views\partials\schedule\speaker_card.php -->
                      </div>
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 58 APPPATH\Views\partials\schedule\schedule_item.php -->
                  </div>
      </div>

      <!-- Day 2 Schedule -->
      <div class="day-schedule-content" data-day="day_2" style="display: none;">
        <div class="schedule-list">
                      <!-- DEBUG-VIEW START 59 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>08:00 - 09:00 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
      
      <h3 class="session-title">Registration</h3>
              <div class="session-subtitle" style="font-size: 15px; font-weight: 500; color: rgba(255, 255, 255, 0.85); margin-top: 4px; margin-bottom: 8px; line-height: 1.4;">
          Registrasi Tamu Undangan        </div>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 59 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 61 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   active">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>09:00 - 09:30 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
              <div class="room-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span>Investor Daily Plenary Room</span>
        </div>
      
      <h3 class="session-title">Opening Remarks</h3>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
                  <div class="plenary-speaker-grid">
                          <!-- DEBUG-VIEW START 60 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Airlangga Hartarto" 
     data-speaker-role="Coordinating Minister for Economic Affairs" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218504_206aa42b41849520025e.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218504_206aa42b41849520025e.png" alt="Airlangga Hartarto" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Airlangga Hartarto</div>
    <div class="speaker-role">Coordinating Minister for Economic Affairs</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 60 APPPATH\Views\partials\schedule\speaker_card.php -->
                      </div>
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 61 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 63 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>09:30 - 10:30 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
              <div class="room-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span>Investor Daily Plenary Room</span>
        </div>
      
      <h3 class="session-title">Keynote Speech Special Session 1</h3>
              <div class="session-subtitle" style="font-size: 15px; font-weight: 500; color: rgba(255, 255, 255, 0.85); margin-top: 4px; margin-bottom: 8px; line-height: 1.4;">
          Building Indonesia&#039;s Next Economic Powerhouse        </div>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
                  <div class="plenary-speaker-grid">
                          <!-- DEBUG-VIEW START 62 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Dony Oskaria" 
     data-speaker-role="Chief Operating Officer (COO) of Danantara
Head of State-Owned Enterprises Regulatory Agency (BP BUMN) " 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218512_fefab910b3e35da01b13.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218512_fefab910b3e35da01b13.png" alt="Dony Oskaria" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Dony Oskaria</div>
    <div class="speaker-role">Chief Operating Officer (COO) of Danantara
Head of State-Owned Enterprises Regulatory Agency (BP BUMN) </div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 62 APPPATH\Views\partials\schedule\speaker_card.php -->
                      </div>
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 63 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 64 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row is-break  ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>10:30 - 10:45 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
      
      <h3 class="session-title">Morning Coffee Break &amp; Networking</h3>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 64 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 79 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row  is-multi-room-row ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>10:45 - 12:00 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
          <!-- Multi-Room Parent Title (e.g. Special Session A) -->
      <h3 class="session-title">Special Sessions B</h3>

      <!-- Multi-Room Container / Rooms Grid -->
      <div class="multi-room-container">
                  <div class="multi-room-card">
            
            <!-- Room Pill -->
                          <div class="room-pill">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
                <span>Investor Daily Room</span>
              </div>
            
            <!-- Sessions within this Room -->
            <div class="room-sessions-list">
                              <div class="room-subsession">
                  <h4 class="subsession-title">Special Session B.1</h4>
                                      <div class="subsession-subtitle" style="font-size: 14px; font-weight: 500; color: rgba(255, 255, 255, 0.82); margin-top: 3px; line-height: 1.4;">
                      Connecting Indonesia, Accelerating Growth                    </div>
                  
                  <!-- Moderator if any -->
                                      <div class="moderator-row">
                      <div class="moderator-photo">
                        <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Andhika Aryo P." loading="lazy">
                      </div>
                      <div class="moderator-text">
                        <div class="moderator-label">MOD:</div>
                        <div class="moderator-name-role">Andhika Aryo P. (Head of Programming B Universe)</div>
                      </div>
                    </div>
                  
                  <!-- Speakers Grid -->
                                                        <div class="plenary-speaker-grid">
                                              <!-- DEBUG-VIEW START 65 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Dian Siswarini" 
     data-speaker-role="President Director
PT Telkom Indonesia (Persero) Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Dian Siswarini" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Dian Siswarini</div>
    <div class="speaker-role">President Director
PT Telkom Indonesia (Persero) Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 65 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 66 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Achmad Muchtasyar" 
     data-speaker-role="President Director
PT Pelabuhan Indonesia (Persero)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Achmad Muchtasyar" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Achmad Muchtasyar</div>
    <div class="speaker-role">President Director
PT Pelabuhan Indonesia (Persero)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 66 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 67 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Rivan A. Purwantono" 
     data-speaker-role="President Director
PT Jasa Marga (Persero)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Rivan A. Purwantono" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Rivan A. Purwantono</div>
    <div class="speaker-role">President Director
PT Jasa Marga (Persero)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 67 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 68 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Susi Pudjiastuti" 
     data-speaker-role="Founder
Susi Air" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Susi Pudjiastuti" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Susi Pudjiastuti</div>
    <div class="speaker-role">Founder
Susi Air</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 68 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 69 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Firman Yosafat Siregar" 
     data-speaker-role="Group Chief Executive Officer
PT Astra Tol Nusantara (Astra Infra)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Firman Yosafat Siregar" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Firman Yosafat Siregar</div>
    <div class="speaker-role">Group Chief Executive Officer
PT Astra Tol Nusantara (Astra Infra)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 69 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 70 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Bani M. Mulia" 
     data-speaker-role="President Director
PT Samudera Indonesia Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Bani M. Mulia" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Bani M. Mulia</div>
    <div class="speaker-role">President Director
PT Samudera Indonesia Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 70 APPPATH\Views\partials\schedule\speaker_card.php -->
                                          </div>
                                  </div>
                          </div>

          </div>
                  <div class="multi-room-card">
            
            <!-- Room Pill -->
                          <div class="room-pill">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
                <span>Sponsor Room</span>
              </div>
            
            <!-- Sessions within this Room -->
            <div class="room-sessions-list">
                              <div class="room-subsession">
                  <h4 class="subsession-title">Special Session B.2</h4>
                                      <div class="subsession-subtitle" style="font-size: 14px; font-weight: 500; color: rgba(255, 255, 255, 0.82); margin-top: 3px; line-height: 1.4;">
                      The Golden Blueprint: Building Bullion Ecosystem for National Economic Resilience                    </div>
                  
                  <!-- Moderator if any -->
                                      <div class="moderator-row">
                      <div class="moderator-photo">
                        <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Iqbal Suwitamihardja" loading="lazy">
                      </div>
                      <div class="moderator-text">
                        <div class="moderator-label">MOD:</div>
                        <div class="moderator-name-role">Iqbal Suwitamihardja (Business News Anchor)</div>
                      </div>
                    </div>
                  
                  <!-- Speakers Grid -->
                                                        <div class="plenary-speaker-grid">
                                              <!-- DEBUG-VIEW START 71 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Anggoro Eko Cahyo" 
     data-speaker-role="President Director
PT Bank Syariah Indonesia (Persero) Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Anggoro Eko Cahyo" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Anggoro Eko Cahyo</div>
    <div class="speaker-role">President Director
PT Bank Syariah Indonesia (Persero) Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 71 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 72 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Damar Latri Setiawan" 
     data-speaker-role="Chief Executive Officer (CEO)
PT Pegadaian (Persero)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Damar Latri Setiawan" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Damar Latri Setiawan</div>
    <div class="speaker-role">Chief Executive Officer (CEO)
PT Pegadaian (Persero)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 72 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 73 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Nursalam" 
     data-speaker-role="President Director
ICDX" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Nursalam" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Nursalam</div>
    <div class="speaker-role">President Director
ICDX</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 73 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 74 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Handi Irawan Djuwadi" 
     data-speaker-role="CEO &amp; Founder at Frontier
PT Laku Emas Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Handi Irawan Djuwadi" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Handi Irawan Djuwadi</div>
    <div class="speaker-role">CEO &amp; Founder at Frontier
PT Laku Emas Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 74 APPPATH\Views\partials\schedule\speaker_card.php -->
                                          </div>
                                  </div>
                          </div>

          </div>
                  <div class="multi-room-card">
            
            <!-- Room Pill -->
                          <div class="room-pill">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
                <span>Beritasatu Room</span>
              </div>
            
            <!-- Sessions within this Room -->
            <div class="room-sessions-list">
                              <div class="room-subsession">
                  <h4 class="subsession-title">Special Session B.3</h4>
                                      <div class="subsession-subtitle" style="font-size: 14px; font-weight: 500; color: rgba(255, 255, 255, 0.82); margin-top: 3px; line-height: 1.4;">
                      Financial Ecosystem &amp; Digital Transformation                    </div>
                  
                  <!-- Moderator if any -->
                                      <div class="moderator-row">
                      <div class="moderator-photo">
                        <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Syukri Rahmatullah" loading="lazy">
                      </div>
                      <div class="moderator-text">
                        <div class="moderator-label">MOD:</div>
                        <div class="moderator-name-role">Syukri Rahmatullah (Editor in Chief Beritasatu.com)</div>
                      </div>
                    </div>
                  
                  <!-- Speakers Grid -->
                                                        <div class="plenary-speaker-grid">
                                              <!-- DEBUG-VIEW START 75 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Filianingsih Hendarta" 
     data-speaker-role="Deputy Governor
Central Bank of Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Filianingsih Hendarta" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Filianingsih Hendarta</div>
    <div class="speaker-role">Deputy Governor
Central Bank of Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 75 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 76 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Hexana Tri Sasongko" 
     data-speaker-role="President Director
Indonesia Financial Group" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Hexana Tri Sasongko" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Hexana Tri Sasongko</div>
    <div class="speaker-role">President Director
Indonesia Financial Group</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 76 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 77 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Putrama Wahju Setyawan" 
     data-speaker-role="Chairman of the Association of State-Owned Banks (Himbara)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Putrama Wahju Setyawan" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Putrama Wahju Setyawan</div>
    <div class="speaker-role">Chairman of the Association of State-Owned Banks (Himbara)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 77 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 78 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Claudia Kolonas" 
     data-speaker-role="Co - Founder
Pluang" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Claudia Kolonas" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Claudia Kolonas</div>
    <div class="speaker-role">Co - Founder
Pluang</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 78 APPPATH\Views\partials\schedule\speaker_card.php -->
                                          </div>
                                  </div>
                          </div>

          </div>
              </div>

    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 79 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 80 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row is-break  ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>12:00 - 13:30 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
      
      <h3 class="session-title">C-Suite Strategic Luncheon</h3>
              <div class="session-subtitle" style="font-size: 15px; font-weight: 500; color: rgba(255, 255, 255, 0.85); margin-top: 4px; margin-bottom: 8px; line-height: 1.4;">
          Exclusive/Invitation Only        </div>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 80 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 82 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>13:30 - 13:55 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
              <div class="room-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span>Investor Daily Plenary Room</span>
        </div>
      
      <h3 class="session-title">Keynote Speech Plenary Money Lab 1</h3>
              <div class="session-subtitle" style="font-size: 15px; font-weight: 500; color: rgba(255, 255, 255, 0.85); margin-top: 4px; margin-bottom: 8px; line-height: 1.4;">
          The Next Market Horizon: Confidence Beyond Volatility        </div>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
                  <div class="plenary-speaker-grid">
                          <!-- DEBUG-VIEW START 81 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Hasan Fawzi" 
     data-speaker-role="Chief Executive of Capital Market, Financial Derivative and Carbon
Otoritas Jasa Keuangan (OJK)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Hasan Fawzi" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Hasan Fawzi</div>
    <div class="speaker-role">Chief Executive of Capital Market, Financial Derivative and Carbon
Otoritas Jasa Keuangan (OJK)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 81 APPPATH\Views\partials\schedule\speaker_card.php -->
                      </div>
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 82 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 83 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row is-break  ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>13:55 - 14:10 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
      
      <h3 class="session-title">Split Into Three Breakout Rooms</h3>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 83 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 99 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row  is-multi-room-row ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>14:10 - 15:25 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
          <!-- Multi-Room Parent Title (e.g. Special Session A) -->
      <h3 class="session-title">Special Sessions C</h3>

      <!-- Multi-Room Container / Rooms Grid -->
      <div class="multi-room-container">
                  <div class="multi-room-card">
            
            <!-- Room Pill -->
                          <div class="room-pill">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
                <span>Investor Daily Room</span>
              </div>
            
            <!-- Sessions within this Room -->
            <div class="room-sessions-list">
                              <div class="room-subsession">
                  <h4 class="subsession-title">Special Remarks</h4>
                                      <div class="subsession-subtitle" style="font-size: 14px; font-weight: 500; color: rgba(255, 255, 255, 0.82); margin-top: 3px; line-height: 1.4;">
                      The Road Ahead: Strengthening Markets for Sustainable Growth                    </div>
                  
                  <!-- Moderator if any -->
                  
                  <!-- Speakers Grid -->
                                                        <div class="plenary-speaker-grid">
                                              <!-- DEBUG-VIEW START 84 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Iding Pardi" 
     data-speaker-role="Director of Business Development
PT Bursa Efek Indonesia (BEI)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Iding Pardi" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Iding Pardi</div>
    <div class="speaker-role">Director of Business Development
PT Bursa Efek Indonesia (BEI)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 84 APPPATH\Views\partials\schedule\speaker_card.php -->
                                          </div>
                                  </div>
                              <div class="room-subsession">
                  <h4 class="subsession-title">Special Remarks</h4>
                                      <div class="subsession-subtitle" style="font-size: 14px; font-weight: 500; color: rgba(255, 255, 255, 0.82); margin-top: 3px; line-height: 1.4;">
                      Managing Retail Investor Expectations in a Creative Economy Listing                    </div>
                  
                  <!-- Moderator if any -->
                  
                  <!-- Speakers Grid -->
                                                        <div class="plenary-speaker-grid">
                                              <!-- DEBUG-VIEW START 85 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Raffi Ahmad" 
     data-speaker-role="Special Envoy of the President of Indonesia for Development of Young Generation and Artists" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Raffi Ahmad" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Raffi Ahmad</div>
    <div class="speaker-role">Special Envoy of the President of Indonesia for Development of Young Generation and Artists</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 85 APPPATH\Views\partials\schedule\speaker_card.php -->
                                          </div>
                                  </div>
                              <div class="room-subsession">
                  <h4 class="subsession-title">Special Session C.1</h4>
                                      <div class="subsession-subtitle" style="font-size: 14px; font-weight: 500; color: rgba(255, 255, 255, 0.82); margin-top: 3px; line-height: 1.4;">
                      When Market Swings, Winners Think                    </div>
                  
                  <!-- Moderator if any -->
                                      <div class="moderator-row">
                      <div class="moderator-photo">
                        <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Wahyu Setyowati" loading="lazy">
                      </div>
                      <div class="moderator-text">
                        <div class="moderator-label">MOD:</div>
                        <div class="moderator-name-role">Wahyu Setyowati (Deputy Editor in Chief Investor Daily &amp; Jakarta Globe)</div>
                      </div>
                    </div>
                  
                  <!-- Speakers Grid -->
                                                        <div class="plenary-speaker-grid">
                                              <!-- DEBUG-VIEW START 86 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Andry Hakim" 
     data-speaker-role="Founder &amp; CIO
@hakimson.id" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Andry Hakim" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Andry Hakim</div>
    <div class="speaker-role">Founder &amp; CIO
@hakimson.id</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 86 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 87 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Gema Goeyardi" 
     data-speaker-role="Founder &amp; CEO
PT Astronacci International" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Gema Goeyardi" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Gema Goeyardi</div>
    <div class="speaker-role">Founder &amp; CEO
PT Astronacci International</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 87 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 88 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Zabrina Raissa" 
     data-speaker-role="Head of Online Trading / Corporate Finance &amp; Strategic Analysis Expert
PT Ciptadana Sekuritas Asia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Zabrina Raissa" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Zabrina Raissa</div>
    <div class="speaker-role">Head of Online Trading / Corporate Finance &amp; Strategic Analysis Expert
PT Ciptadana Sekuritas Asia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 88 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 89 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Anita Bernardus" 
     data-speaker-role="Vice President Communication &amp; Sustainability
PT Bumi Resources Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Anita Bernardus" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Anita Bernardus</div>
    <div class="speaker-role">Vice President Communication &amp; Sustainability
PT Bumi Resources Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 89 APPPATH\Views\partials\schedule\speaker_card.php -->
                                          </div>
                                  </div>
                          </div>

          </div>
                  <div class="multi-room-card">
            
            <!-- Room Pill -->
                          <div class="room-pill">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
                <span>Sponsor Room</span>
              </div>
            
            <!-- Sessions within this Room -->
            <div class="room-sessions-list">
                              <div class="room-subsession">
                  <h4 class="subsession-title">Special Session C.2</h4>
                                      <div class="subsession-subtitle" style="font-size: 14px; font-weight: 500; color: rgba(255, 255, 255, 0.82); margin-top: 3px; line-height: 1.4;">
                      Political Coordination as Economic Capital: Why Policy Clarity Matters                    </div>
                  
                  <!-- Moderator if any -->
                                      <div class="moderator-row">
                      <div class="moderator-photo">
                        <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Zaki Amrullah" loading="lazy">
                      </div>
                      <div class="moderator-text">
                        <div class="moderator-label">MOD:</div>
                        <div class="moderator-name-role">Zaki Amrullah (Editor in Chief BTV)</div>
                      </div>
                    </div>
                  
                  <!-- Speakers Grid -->
                                                        <div class="plenary-speaker-grid">
                                              <!-- DEBUG-VIEW START 90 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Prof. Hamdi Muluk" 
     data-speaker-role="Professor of Political Psychology
Universitas Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Prof. Hamdi Muluk" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Prof. Hamdi Muluk</div>
    <div class="speaker-role">Professor of Political Psychology
Universitas Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 90 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 91 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Yunarto Wijaya" 
     data-speaker-role="Executive Director
Charta Politika Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Yunarto Wijaya" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Yunarto Wijaya</div>
    <div class="speaker-role">Executive Director
Charta Politika Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 91 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 92 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Prof. Mohamad Ikhsan" 
     data-speaker-role="Professor of Economics
Institute for Economic and Social Research, Faculty of Economics and Business, Universitas Indonesia (LPEM FEB UI)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Prof. Mohamad Ikhsan" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Prof. Mohamad Ikhsan</div>
    <div class="speaker-role">Professor of Economics
Institute for Economic and Social Research, Faculty of Economics and Business, Universitas Indonesia (LPEM FEB UI)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 92 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 93 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Iman Pambagyo" 
     data-speaker-role="Former Director General of International Trade Negotiations
Ministry of Trade (2012–2014)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790329846_694888f24ff517ed1d0e.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790329846_694888f24ff517ed1d0e.png" alt="Iman Pambagyo" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Iman Pambagyo</div>
    <div class="speaker-role">Former Director General of International Trade Negotiations
Ministry of Trade (2012–2014)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 93 APPPATH\Views\partials\schedule\speaker_card.php -->
                                          </div>
                                  </div>
                          </div>

          </div>
                  <div class="multi-room-card">
            
            <!-- Room Pill -->
                          <div class="room-pill">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
                <span>Beritasatu Room</span>
              </div>
            
            <!-- Sessions within this Room -->
            <div class="room-sessions-list">
                              <div class="room-subsession">
                  <h4 class="subsession-title">MOU Sign With China Media Group</h4>
                  
                  <!-- Moderator if any -->
                  
                  <!-- Speakers Grid -->
                                                    </div>
                              <div class="room-subsession">
                  <h4 class="subsession-title">Special Session C.3</h4>
                                      <div class="subsession-subtitle" style="font-size: 14px; font-weight: 500; color: rgba(255, 255, 255, 0.82); margin-top: 3px; line-height: 1.4;">
                      Strategic Partnerships for More Resilient and Future-Ready Economy                    </div>
                  
                  <!-- Moderator if any -->
                                      <div class="moderator-row">
                      <div class="moderator-photo">
                        <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Anthony Wonsono" loading="lazy">
                      </div>
                      <div class="moderator-text">
                        <div class="moderator-label">MOD:</div>
                        <div class="moderator-name-role">Anthony Wonsono (Editorial Board B Universe)</div>
                      </div>
                    </div>
                  
                  <!-- Speakers Grid -->
                                                        <div class="plenary-speaker-grid">
                                              <!-- DEBUG-VIEW START 94 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="H.E. Mr. Sandeep Chakravorty" 
     data-speaker-role="Ambassador of India to Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="H.E. Mr. Sandeep Chakravorty" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">H.E. Mr. Sandeep Chakravorty</div>
    <div class="speaker-role">Ambassador of India to Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 94 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 95 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="H.E. Mr. Yoon Soon-gu" 
     data-speaker-role="Ambassador Extraordinary and Plenipotentiary of the Republic of Korea" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="H.E. Mr. Yoon Soon-gu" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">H.E. Mr. Yoon Soon-gu</div>
    <div class="speaker-role">Ambassador Extraordinary and Plenipotentiary of the Republic of Korea</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 95 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 96 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="H.E. Mr. Rod Brazier" 
     data-speaker-role="Ambassador of Australia to Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="H.E. Mr. Rod Brazier" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">H.E. Mr. Rod Brazier</div>
    <div class="speaker-role">Ambassador of Australia to Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 96 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 97 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="H.E. Mr. Ralf Beste" 
     data-speaker-role="Ambassador of the Federal Republic of Germany to Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="H.E. Mr. Ralf Beste" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">H.E. Mr. Ralf Beste</div>
    <div class="speaker-role">Ambassador of the Federal Republic of Germany to Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 97 APPPATH\Views\partials\schedule\speaker_card.php -->
                                              <!-- DEBUG-VIEW START 98 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="H.E. Dato&#039; Muzafar Shah Mustafa" 
     data-speaker-role="Ambassador-Designate of Malaysia to the Republic of Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="H.E. Dato&#039; Muzafar Shah Mustafa" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">H.E. Dato&#039; Muzafar Shah Mustafa</div>
    <div class="speaker-role">Ambassador-Designate of Malaysia to the Republic of Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 98 APPPATH\Views\partials\schedule\speaker_card.php -->
                                          </div>
                                  </div>
                              <div class="room-subsession">
                  <h4 class="subsession-title">MOU Sign With Kuala Lumpur Tourism</h4>
                  
                  <!-- Moderator if any -->
                  
                  <!-- Speakers Grid -->
                                                    </div>
                          </div>

          </div>
              </div>

    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 99 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 100 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row is-break  ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>15:25 - 15:40 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
      
      <h3 class="session-title">Afternoon Coffee Break &amp; Networking</h3>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 100 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 106 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>15:40 - 17:00 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
              <div class="room-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span>Investor Daily Plenary Room</span>
        </div>
      
      <h3 class="session-title">Plenary Session 2</h3>
              <div class="session-subtitle" style="font-size: 15px; font-weight: 500; color: rgba(255, 255, 255, 0.85); margin-top: 4px; margin-bottom: 8px; line-height: 1.4;">
          AI: Restructuring Economic Landscape        </div>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
                  <div class="moderator-row">
            <div class="moderator-photo">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Wiendy Hapsari" loading="lazy">
            </div>
            <div class="moderator-text">
              <div class="moderator-label">MOD:</div>
              <div class="moderator-name-role">Wiendy Hapsari (Head of Research B Universe)</div>
            </div>
          </div>
        
        <!-- Speakers List / Grid (Standardized width) -->
                  <div class="plenary-speaker-grid">
                          <!-- DEBUG-VIEW START 101 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Nezar Patria" 
     data-speaker-role="Vice Minister of Communications and Digital Affairs" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Nezar Patria" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Nezar Patria</div>
    <div class="speaker-role">Vice Minister of Communications and Digital Affairs</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 101 APPPATH\Views\partials\schedule\speaker_card.php -->
                          <!-- DEBUG-VIEW START 102 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Nugroho" 
     data-speaker-role="President Director
PT Telekomunikasi Selular (Telkomsel)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Nugroho" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Nugroho</div>
    <div class="speaker-role">President Director
PT Telekomunikasi Selular (Telkomsel)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 102 APPPATH\Views\partials\schedule\speaker_card.php -->
                          <!-- DEBUG-VIEW START 103 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Marlo Budiman" 
     data-speaker-role="Vice President Director
PT Dian Swastatika Sentosa" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Marlo Budiman" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Marlo Budiman</div>
    <div class="speaker-role">Vice President Director
PT Dian Swastatika Sentosa</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 103 APPPATH\Views\partials\schedule\speaker_card.php -->
                          <!-- DEBUG-VIEW START 104 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Shinta W. Kamdani" 
     data-speaker-role="Chairwoman
APINDO" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Shinta W. Kamdani" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Shinta W. Kamdani</div>
    <div class="speaker-role">Chairwoman
APINDO</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 104 APPPATH\Views\partials\schedule\speaker_card.php -->
                          <!-- DEBUG-VIEW START 105 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Ahmad Zulfikar Said" 
     data-speaker-role="President Director
NexAI" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Ahmad Zulfikar Said" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Ahmad Zulfikar Said</div>
    <div class="speaker-role">President Director
NexAI</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 105 APPPATH\Views\partials\schedule\speaker_card.php -->
                      </div>
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 106 APPPATH\Views\partials\schedule\schedule_item.php -->
                      <!-- DEBUG-VIEW START 108 APPPATH\Views\partials\schedule\schedule_item.php -->
<div class="schedule-row   ">
  
  <!-- Left Column: Time with clock icon -->
  <div class="schedule-meta-col">
    <div class="schedule-time">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <polyline points="12 6 12 12 16 14"></polyline>
      </svg>
      <span>17:00 - 18:00 WIB</span>
    </div>
  </div>

  <!-- Right Column: Room Pill, Session Title, Moderator, Speakers -->
  <div class="schedule-content-col">
    
    
      <!-- Standard Single Room / Plenary Session Item -->
              <div class="room-pill">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          <span>Investor Daily Plenary Room</span>
        </div>
      
      <h3 class="session-title">Closing Remarks</h3>
              <div class="session-subtitle" style="font-size: 15px; font-weight: 500; color: rgba(255, 255, 255, 0.85); margin-top: 4px; margin-bottom: 8px; line-height: 1.4;">
          Rebuilding Trust Through Fiscal Policy        </div>
      
      
      
        <!-- Standard Layout (Tanpa Pengantar) -->
        <!-- Optional Moderator -->
        
        <!-- Speakers List / Grid (Standardized width) -->
                  <div class="plenary-speaker-grid">
                          <!-- DEBUG-VIEW START 107 APPPATH\Views\partials\schedule\speaker_card.php -->
<div class="speaker-card" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Suahasil Nazara" 
     data-speaker-role="Minister of Finance of Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  <div class="speaker-photo-wrap">
    <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Suahasil Nazara" loading="lazy">
  </div>
  <div class="speaker-info">
    <div class="speaker-name">Suahasil Nazara</div>
    <div class="speaker-role">Minister of Finance of Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 107 APPPATH\Views\partials\schedule\speaker_card.php -->
                      </div>
        
      
    
  </div>

</div>


<!-- DEBUG-VIEW ENDED 108 APPPATH\Views\partials\schedule\schedule_item.php -->
                  </div>
      </div>

    </div>

    <!-- 4. Standalone SPEAKERS Tab View (§9A) -->
    <!-- DEBUG-VIEW START 177 APPPATH\Views\partials\schedule\speakers_tab_view.php -->
<div class="speakers-tab-view" id="speakersTabView">
  <div class="speakers-grid">
          <div class="speaker-tile-item ">
        <!-- DEBUG-VIEW START 109 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Prabowo Subianto" 
     data-speaker-role="President of The Republic of Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790330086_63711dd8ffa5e365e104.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790330086_63711dd8ffa5e365e104.png" alt="Prabowo Subianto" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Prabowo Subianto</div>
    <div class="speaker-tile-role">President of The Republic of Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 109 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item ">
        <!-- DEBUG-VIEW START 110 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Rosan Roeslani" 
     data-speaker-role="Minister of Investment and Downstream Industry / Head of Investment Coordinating Board / Chief Executive Officer Danantara" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790219127_239e5c057a07615bcccc.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790219127_239e5c057a07615bcccc.png" alt="Rosan Roeslani" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Rosan Roeslani</div>
    <div class="speaker-tile-role">Minister of Investment and Downstream Industry / Head of Investment Coordinating Board / Chief Executive Officer Danantara</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 110 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item ">
        <!-- DEBUG-VIEW START 111 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Bahlil Lahadalia" 
     data-speaker-role="Minister of Energy and Mineral Resources of the Republic of Indonesia." 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218493_f86600c8b9de32f094b9.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218493_f86600c8b9de32f094b9.png" alt="Bahlil Lahadalia" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Bahlil Lahadalia</div>
    <div class="speaker-tile-role">Minister of Energy and Mineral Resources of the Republic of Indonesia.</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 111 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item ">
        <!-- DEBUG-VIEW START 112 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Airlangga Hartarto" 
     data-speaker-role="Coordinating Minister for Economic Affairs" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218504_206aa42b41849520025e.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218504_206aa42b41849520025e.png" alt="Airlangga Hartarto" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Airlangga Hartarto</div>
    <div class="speaker-tile-role">Coordinating Minister for Economic Affairs</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 112 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item ">
        <!-- DEBUG-VIEW START 113 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Teddy Indra Wijaya" 
     data-speaker-role="Cabinet Secretary of the Republic of Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Teddy Indra Wijaya" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Teddy Indra Wijaya</div>
    <div class="speaker-tile-role">Cabinet Secretary of the Republic of Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 113 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item ">
        <!-- DEBUG-VIEW START 114 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Suahasil Nazara" 
     data-speaker-role="Minister of Finance of Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Suahasil Nazara" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Suahasil Nazara</div>
    <div class="speaker-tile-role">Minister of Finance of Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 114 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item ">
        <!-- DEBUG-VIEW START 115 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Nezar Patria" 
     data-speaker-role="Vice Minister of Communications and Digital Affairs" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Nezar Patria" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Nezar Patria</div>
    <div class="speaker-tile-role">Vice Minister of Communications and Digital Affairs</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 115 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item ">
        <!-- DEBUG-VIEW START 116 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Dony Oskaria" 
     data-speaker-role="Chief Operating Officer (COO) of Danantara
Head of State-Owned Enterprises Regulatory Agency (BP BUMN) " 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218512_fefab910b3e35da01b13.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218512_fefab910b3e35da01b13.png" alt="Dony Oskaria" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Dony Oskaria</div>
    <div class="speaker-tile-role">Chief Operating Officer (COO) of Danantara
Head of State-Owned Enterprises Regulatory Agency (BP BUMN) </div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 116 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item ">
        <!-- DEBUG-VIEW START 117 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Hasan Fawzi" 
     data-speaker-role="Chief Executive of Capital Market, Financial Derivative and Carbon
Otoritas Jasa Keuangan (OJK)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Hasan Fawzi" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Hasan Fawzi</div>
    <div class="speaker-tile-role">Chief Executive of Capital Market, Financial Derivative and Carbon
Otoritas Jasa Keuangan (OJK)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 117 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item ">
        <!-- DEBUG-VIEW START 118 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Anggito Abimanyu" 
     data-speaker-role="Chairman of the Board of Commissioners
Indonesia Deposit Insurance Corporation (LPS)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218522_51e4425c33c982ab5543.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218522_51e4425c33c982ab5543.png" alt="Anggito Abimanyu" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Anggito Abimanyu</div>
    <div class="speaker-tile-role">Chairman of the Board of Commissioners
Indonesia Deposit Insurance Corporation (LPS)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 118 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item ">
        <!-- DEBUG-VIEW START 119 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Muhammad Qodari" 
     data-speaker-role="Head of the Government Communication Agency (Bakom RI)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790219109_35db79606f2fa5cff0ab.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790219109_35db79606f2fa5cff0ab.png" alt="Muhammad Qodari" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Muhammad Qodari</div>
    <div class="speaker-tile-role">Head of the Government Communication Agency (Bakom RI)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 119 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item ">
        <!-- DEBUG-VIEW START 120 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Pramono Anung" 
     data-speaker-role="Governor of Jakarta" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218530_3dd3e10c30b862692e2a.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218530_3dd3e10c30b862692e2a.png" alt="Pramono Anung" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Pramono Anung</div>
    <div class="speaker-tile-role">Governor of Jakarta</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 120 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item ">
        <!-- DEBUG-VIEW START 121 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Hashim Djojohadikusumo" 
     data-speaker-role="Special Envoy of the President of the Republic of Indonesia for Climate and Energy" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218539_60f1289959c025a0acb2.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218539_60f1289959c025a0acb2.png" alt="Hashim Djojohadikusumo" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Hashim Djojohadikusumo</div>
    <div class="speaker-tile-role">Special Envoy of the President of the Republic of Indonesia for Climate and Energy</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 121 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item ">
        <!-- DEBUG-VIEW START 122 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Filianingsih Hendarta" 
     data-speaker-role="Deputy Governor
Central Bank of Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Filianingsih Hendarta" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Filianingsih Hendarta</div>
    <div class="speaker-tile-role">Deputy Governor
Central Bank of Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 122 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item ">
        <!-- DEBUG-VIEW START 123 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Iding Pardi" 
     data-speaker-role="Director of Business Development
PT Bursa Efek Indonesia (BEI)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Iding Pardi" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Iding Pardi</div>
    <div class="speaker-tile-role">Director of Business Development
PT Bursa Efek Indonesia (BEI)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 123 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item ">
        <!-- DEBUG-VIEW START 124 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Kamrussamad" 
     data-speaker-role="Anggota DPR-RI periode 2024–2029" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790219082_f30b2270e8b651b99cf2.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790219082_f30b2270e8b651b99cf2.png" alt="Kamrussamad" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Kamrussamad</div>
    <div class="speaker-tile-role">Anggota DPR-RI periode 2024–2029</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 124 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 125 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Enggartiasto Lukita" 
     data-speaker-role="Executive Chairman B-Universe" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218552_ca2ae49d9ae698e6d5ec.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790218552_ca2ae49d9ae698e6d5ec.png" alt="Enggartiasto Lukita" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Enggartiasto Lukita</div>
    <div class="speaker-tile-role">Executive Chairman B-Universe</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 125 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 126 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Raffi Ahmad" 
     data-speaker-role="Special Envoy of the President of Indonesia for Development of Young Generation and Artists" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Raffi Ahmad" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Raffi Ahmad</div>
    <div class="speaker-tile-role">Special Envoy of the President of Indonesia for Development of Young Generation and Artists</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 126 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 127 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="H.E. Mr. Yoon Soon-gu" 
     data-speaker-role="Ambassador Extraordinary and Plenipotentiary of the Republic of Korea" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="H.E. Mr. Yoon Soon-gu" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">H.E. Mr. Yoon Soon-gu</div>
    <div class="speaker-tile-role">Ambassador Extraordinary and Plenipotentiary of the Republic of Korea</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 127 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 128 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="H.E. Dato&#039; Muzafar Shah Mustafa" 
     data-speaker-role="Ambassador-Designate of Malaysia to the Republic of Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="H.E. Dato&#039; Muzafar Shah Mustafa" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">H.E. Dato&#039; Muzafar Shah Mustafa</div>
    <div class="speaker-tile-role">Ambassador-Designate of Malaysia to the Republic of Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 128 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 129 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Yunarto Wijaya" 
     data-speaker-role="Executive Director
Charta Politika Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Yunarto Wijaya" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Yunarto Wijaya</div>
    <div class="speaker-tile-role">Executive Director
Charta Politika Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 129 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 130 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Prof. Mohamad Ikhsan" 
     data-speaker-role="Professor of Economics
Institute for Economic and Social Research, Faculty of Economics and Business, Universitas Indonesia (LPEM FEB UI)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Prof. Mohamad Ikhsan" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Prof. Mohamad Ikhsan</div>
    <div class="speaker-tile-role">Professor of Economics
Institute for Economic and Social Research, Faculty of Economics and Business, Universitas Indonesia (LPEM FEB UI)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 130 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 131 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Iman Pambagyo" 
     data-speaker-role="Former Director General of International Trade Negotiations
Ministry of Trade (2012–2014)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790329846_694888f24ff517ed1d0e.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/speakers/1790329846_694888f24ff517ed1d0e.png" alt="Iman Pambagyo" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Iman Pambagyo</div>
    <div class="speaker-tile-role">Former Director General of International Trade Negotiations
Ministry of Trade (2012–2014)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 131 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 132 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Shinta W. Kamdani" 
     data-speaker-role="Chairwoman
APINDO" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Shinta W. Kamdani" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Shinta W. Kamdani</div>
    <div class="speaker-tile-role">Chairwoman
APINDO</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 132 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 133 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Gema Goeyardi" 
     data-speaker-role="Founder &amp; CEO
PT Astronacci International" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Gema Goeyardi" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Gema Goeyardi</div>
    <div class="speaker-tile-role">Founder &amp; CEO
PT Astronacci International</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 133 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 134 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Oki Muraza" 
     data-speaker-role="Deputy President Director &amp; Deputy CEO
PT Pertamina (Persero)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Oki Muraza" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Oki Muraza</div>
    <div class="speaker-tile-role">Deputy President Director &amp; Deputy CEO
PT Pertamina (Persero)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 134 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 135 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Darmawan Prasodjo" 
     data-speaker-role="President Director
PT PLN (Persero)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Darmawan Prasodjo" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Darmawan Prasodjo</div>
    <div class="speaker-tile-role">President Director
PT PLN (Persero)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 135 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 136 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Rachmat Makkasau" 
     data-speaker-role="Chairman
Indonesian Mining Association (IMA)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Rachmat Makkasau" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Rachmat Makkasau</div>
    <div class="speaker-tile-role">Chairman
Indonesian Mining Association (IMA)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 136 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 137 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Tony Wenas" 
     data-speaker-role="President Director
PT Freeport Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Tony Wenas" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Tony Wenas</div>
    <div class="speaker-tile-role">President Director
PT Freeport Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 137 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 138 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Bernardus Irmanto" 
     data-speaker-role="President Director
PT Vale Indonesia Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Bernardus Irmanto" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Bernardus Irmanto</div>
    <div class="speaker-tile-role">President Director
PT Vale Indonesia Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 138 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 139 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Iwan Dewono Budiyuwono" 
     data-speaker-role="President Director
PT Alamtri Resources Indonesia Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Iwan Dewono Budiyuwono" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Iwan Dewono Budiyuwono</div>
    <div class="speaker-tile-role">President Director
PT Alamtri Resources Indonesia Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 139 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 140 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Ngurah Wirawan" 
     data-speaker-role="President Director
PT Danareksa (Persero)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Ngurah Wirawan" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Ngurah Wirawan</div>
    <div class="speaker-tile-role">President Director
PT Danareksa (Persero)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 140 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 141 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Suryopratomo" 
     data-speaker-role="President Director
PT Gajah Tunggal Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Suryopratomo" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Suryopratomo</div>
    <div class="speaker-tile-role">President Director
PT Gajah Tunggal Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 141 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 142 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Setyono Djuandi Darmono" 
     data-speaker-role="President Director
PT Kawasan Industri Jababeka Tbk (KIJA)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Setyono Djuandi Darmono" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Setyono Djuandi Darmono</div>
    <div class="speaker-tile-role">President Director
PT Kawasan Industri Jababeka Tbk (KIJA)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 142 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 143 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Edi Riva&#039;i" 
     data-speaker-role="Director of Legal, External Affairs &amp; Circular economy
PT Chandra Asri Pacific Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Edi Riva&#039;i" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Edi Riva&#039;i</div>
    <div class="speaker-tile-role">Director of Legal, External Affairs &amp; Circular economy
PT Chandra Asri Pacific Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 143 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 144 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Indrieffouny Indra" 
     data-speaker-role="President Director
PT Semen Indonesia (Persero) Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Indrieffouny Indra" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Indrieffouny Indra</div>
    <div class="speaker-tile-role">President Director
PT Semen Indonesia (Persero) Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 144 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 145 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Rahmad Pribadi" 
     data-speaker-role="President Director
PT Pupuk Indonesia (Persero)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Rahmad Pribadi" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Rahmad Pribadi</div>
    <div class="speaker-tile-role">President Director
PT Pupuk Indonesia (Persero)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 145 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 146 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Dharma Djojonegoro" 
     data-speaker-role="EVP Corporate Development
PT Freeport Indonesia Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Dharma Djojonegoro" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Dharma Djojonegoro</div>
    <div class="speaker-tile-role">EVP Corporate Development
PT Freeport Indonesia Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 146 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 147 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Rudy" 
     data-speaker-role="President Director
PT Astra International Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Rudy" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Rudy</div>
    <div class="speaker-tile-role">President Director
PT Astra International Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 147 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 148 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Irwan Hidayat" 
     data-speaker-role="President Director
PT Industri Jamu Dan Farmasi Sido Muncul Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Irwan Hidayat" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Irwan Hidayat</div>
    <div class="speaker-tile-role">President Director
PT Industri Jamu Dan Farmasi Sido Muncul Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 148 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 149 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Dr. Rudolf Tjandra" 
     data-speaker-role="CEO &amp; President Director
KALBE Nutritionals" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Dr. Rudolf Tjandra" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Dr. Rudolf Tjandra</div>
    <div class="speaker-tile-role">CEO &amp; President Director
KALBE Nutritionals</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 149 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 150 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Agung Laksamana" 
     data-speaker-role="General Secretary Director
Danone Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Agung Laksamana" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Agung Laksamana</div>
    <div class="speaker-tile-role">General Secretary Director
Danone Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 150 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 151 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Dian Siswarini" 
     data-speaker-role="President Director
PT Telkom Indonesia (Persero) Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Dian Siswarini" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Dian Siswarini</div>
    <div class="speaker-tile-role">President Director
PT Telkom Indonesia (Persero) Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 151 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 152 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Achmad Muchtasyar" 
     data-speaker-role="President Director
PT Pelabuhan Indonesia (Persero)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Achmad Muchtasyar" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Achmad Muchtasyar</div>
    <div class="speaker-tile-role">President Director
PT Pelabuhan Indonesia (Persero)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 152 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 153 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Rivan A. Purwantono" 
     data-speaker-role="President Director
PT Jasa Marga (Persero)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Rivan A. Purwantono" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Rivan A. Purwantono</div>
    <div class="speaker-tile-role">President Director
PT Jasa Marga (Persero)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 153 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 154 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Bani M. Mulia" 
     data-speaker-role="President Director
PT Samudera Indonesia Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Bani M. Mulia" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Bani M. Mulia</div>
    <div class="speaker-tile-role">President Director
PT Samudera Indonesia Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 154 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 155 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Anggoro Eko Cahyo" 
     data-speaker-role="President Director
PT Bank Syariah Indonesia (Persero) Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Anggoro Eko Cahyo" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Anggoro Eko Cahyo</div>
    <div class="speaker-tile-role">President Director
PT Bank Syariah Indonesia (Persero) Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 155 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 156 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Damar Latri Setiawan" 
     data-speaker-role="Chief Executive Officer (CEO)
PT Pegadaian (Persero)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Damar Latri Setiawan" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Damar Latri Setiawan</div>
    <div class="speaker-tile-role">Chief Executive Officer (CEO)
PT Pegadaian (Persero)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 156 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 157 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Nursalam" 
     data-speaker-role="President Director
ICDX" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Nursalam" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Nursalam</div>
    <div class="speaker-tile-role">President Director
ICDX</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 157 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 158 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Handi Irawan Djuwadi" 
     data-speaker-role="CEO &amp; Founder at Frontier
PT Laku Emas Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Handi Irawan Djuwadi" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Handi Irawan Djuwadi</div>
    <div class="speaker-tile-role">CEO &amp; Founder at Frontier
PT Laku Emas Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 158 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 159 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Hexana Tri Sasongko" 
     data-speaker-role="President Director
Indonesia Financial Group" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Hexana Tri Sasongko" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Hexana Tri Sasongko</div>
    <div class="speaker-tile-role">President Director
Indonesia Financial Group</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 159 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 160 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Putrama Wahju Setyawan" 
     data-speaker-role="Chairman of the Association of State-Owned Banks (Himbara)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Putrama Wahju Setyawan" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Putrama Wahju Setyawan</div>
    <div class="speaker-tile-role">Chairman of the Association of State-Owned Banks (Himbara)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 160 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 161 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Zabrina Raissa" 
     data-speaker-role="Head of Online Trading / Corporate Finance &amp; Strategic Analysis Expert
PT Ciptadana Sekuritas Asia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Zabrina Raissa" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Zabrina Raissa</div>
    <div class="speaker-tile-role">Head of Online Trading / Corporate Finance &amp; Strategic Analysis Expert
PT Ciptadana Sekuritas Asia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 161 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 162 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Andry Hakim" 
     data-speaker-role="Founder &amp; CIO
@hakimson.id" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Andry Hakim" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Andry Hakim</div>
    <div class="speaker-tile-role">Founder &amp; CIO
@hakimson.id</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 162 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 163 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Claudia Kolonas" 
     data-speaker-role="Co - Founder
Pluang" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Claudia Kolonas" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Claudia Kolonas</div>
    <div class="speaker-tile-role">Co - Founder
Pluang</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 163 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 164 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Anita Bernardus" 
     data-speaker-role="Vice President Communication &amp; Sustainability
PT Bumi Resources Tbk" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Anita Bernardus" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Anita Bernardus</div>
    <div class="speaker-tile-role">Vice President Communication &amp; Sustainability
PT Bumi Resources Tbk</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 164 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 165 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Nugroho" 
     data-speaker-role="President Director
PT Telekomunikasi Selular (Telkomsel)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Nugroho" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Nugroho</div>
    <div class="speaker-tile-role">President Director
PT Telekomunikasi Selular (Telkomsel)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 165 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 166 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Marlo Budiman" 
     data-speaker-role="Vice President Director
PT Dian Swastatika Sentosa" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Marlo Budiman" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Marlo Budiman</div>
    <div class="speaker-tile-role">Vice President Director
PT Dian Swastatika Sentosa</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 166 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 167 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Ahmad Zulfikar Said" 
     data-speaker-role="President Director
NexAI" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Ahmad Zulfikar Said" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Ahmad Zulfikar Said</div>
    <div class="speaker-tile-role">President Director
NexAI</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 167 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 168 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Denni Puspa Purbasari" 
     data-speaker-role="Chief Economist
Indonesia Business Council" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Denni Puspa Purbasari" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Denni Puspa Purbasari</div>
    <div class="speaker-tile-role">Chief Economist
Indonesia Business Council</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 168 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 169 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Prof. Hamdi Muluk" 
     data-speaker-role="Professor of Political Psychology
Universitas Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Prof. Hamdi Muluk" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Prof. Hamdi Muluk</div>
    <div class="speaker-tile-role">Professor of Political Psychology
Universitas Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 169 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 170 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="H.E. Mr. Sandeep Chakravorty" 
     data-speaker-role="Ambassador of India to Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="H.E. Mr. Sandeep Chakravorty" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">H.E. Mr. Sandeep Chakravorty</div>
    <div class="speaker-tile-role">Ambassador of India to Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 170 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 171 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="H.E. Mr. Rod Brazier" 
     data-speaker-role="Ambassador of Australia to Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="H.E. Mr. Rod Brazier" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">H.E. Mr. Rod Brazier</div>
    <div class="speaker-tile-role">Ambassador of Australia to Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 171 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 172 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="H.E. Mr. Ralf Beste" 
     data-speaker-role="Ambassador of the Federal Republic of Germany to Indonesia" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="H.E. Mr. Ralf Beste" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">H.E. Mr. Ralf Beste</div>
    <div class="speaker-tile-role">Ambassador of the Federal Republic of Germany to Indonesia</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 172 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 173 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Ryan Adrian" 
     data-speaker-role="Director Commercial, Convention &amp; Exhibition (CCE)
Agung Sedayu Group" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Ryan Adrian" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Ryan Adrian</div>
    <div class="speaker-tile-role">Director Commercial, Convention &amp; Exhibition (CCE)
Agung Sedayu Group</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 173 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 174 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Jerry Marmen" 
     data-speaker-role="Chairman
GRC Profesional Certification Institute" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Jerry Marmen" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Jerry Marmen</div>
    <div class="speaker-tile-role">Chairman
GRC Profesional Certification Institute</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 174 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 175 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Susi Pudjiastuti" 
     data-speaker-role="Founder
Susi Air" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Susi Pudjiastuti" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Susi Pudjiastuti</div>
    <div class="speaker-tile-role">Founder
Susi Air</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 175 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
          <div class="speaker-tile-item speaker-tile-extra hidden">
        <!-- DEBUG-VIEW START 176 APPPATH\Views\partials\schedule\speaker_tile.php -->
<div class="speaker-tile" 
     role="button" 
     tabindex="0" 
     data-speaker-name="Firman Yosafat Siregar" 
     data-speaker-role="Group Chief Executive Officer
PT Astra Tol Nusantara (Astra Infra)" 
     data-speaker-photo="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png"
     data-speaker-bio="">
  
  <!-- Zona Visual Atas: Bingkai portrait dengan outline tipis & bleed photo -->
  <div class="speaker-tile-frame">
    <div class="speaker-tile-photo-wrap">
      <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/placeholder.png" alt="Firman Yosafat Siregar" loading="lazy">
    </div>
  </div>

  <!-- Zona Teks Bawah: Nama & Keterangan rata tengah -->
  <div class="speaker-tile-caption">
    <div class="speaker-tile-name">Firman Yosafat Siregar</div>
    <div class="speaker-tile-role">Group Chief Executive Officer
PT Astra Tol Nusantara (Astra Infra)</div>
  </div>
</div>

<!-- DEBUG-VIEW ENDED 176 APPPATH\Views\partials\schedule\speaker_tile.php -->
      </div>
      </div>

      <div class="speakers-load-more-wrap">
      <button type="button" id="btnLoadMoreSpeakers" class="btn-load-more-speakers" data-expanded="false">
        <span>View More Speakers</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="6 9 12 15 18 9"></polyline>
        </svg>
      </button>
    </div>
  </div>

<!-- DEBUG-VIEW ENDED 177 APPPATH\Views\partials\schedule\speakers_tab_view.php -->

  </div>
</section>

<!-- DEBUG-VIEW ENDED 178 APPPATH\Views\partials\schedule\index.php -->

    <!-- 6. Gallery Section -->
    <!-- DEBUG-VIEW START 181 APPPATH\Views\partials\gallery.php -->
<section class="gallery-section" id="gallery">
  <!-- DEBUG-VIEW START 179 APPPATH\Views\partials\section_decorations.php -->
<div class="decoration-layer" aria-hidden="true">
            
        
        
                                <div class="decoration-item pos-top-right is-rotating rot-clockwise hide-on-mobile has-perspective"
                 style="--dec-width: 450px; --dec-opacity: 1; --dec-edge-offset: 50%; --dec-persp: 800px; --dec-rot-x: 38deg; --dec-rot-y: -45deg; --dec-rot-z: 20deg;">
                <div class="decoration-inner-transform">
                                            <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/decorations/1790131860_99f6624684dd69f5693a.png" alt="" loading="lazy">
                                    </div>
            </div>
                    
        
        
                                <div class="decoration-item pos-bottom-left is-rotating rot-counter-clockwise hide-on-mobile has-perspective"
                 style="--dec-width: 450px; --dec-opacity: 1; --dec-edge-offset: 40%; --dec-persp: 800px; --dec-rot-x: -38deg; --dec-rot-y: -45deg; --dec-rot-z: -20deg;">
                <div class="decoration-inner-transform">
                                            <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/decorations/1790315995_4b5f626fd034eb71b2fd.png" alt="" loading="lazy">
                                    </div>
            </div>
                    
        
        
                                <div class="decoration-item pos-top-left is-rotating rot-clockwise hide-on-desktop "
                 style="--dec-width: 220px; --dec-opacity: 1; --dec-edge-offset: 50%; --dec-rot-z: 0deg;">
                <div class="decoration-inner-transform">
                                            <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/decorations/1790132323_524435ffc7022a5f6ddf.png" alt="" loading="lazy">
                                    </div>
            </div>
                    
        
        
                                <div class="decoration-item pos-bottom-right is-rotating rot-counter-clockwise hide-on-desktop "
                 style="--dec-width: 220px; --dec-opacity: 1; --dec-edge-offset: 50%; --dec-rot-z: 0deg;">
                <div class="decoration-inner-transform">
                                            <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/decorations/1790132369_4619e4a5f94b24851f76.png" alt="" loading="lazy">
                                    </div>
            </div>
            </div>

<!-- DEBUG-VIEW ENDED 179 APPPATH\Views\partials\section_decorations.php -->
  <!-- DEBUG-VIEW START 180 APPPATH\Views\partials\custom_placements.php -->

<!-- DEBUG-VIEW ENDED 180 APPPATH\Views\partials\custom_placements.php -->
  <div class="container">
    
    <!-- Section Header Centered -->
    <div class="section-header-center">
      <h2 class="section-title">GALLERY</h2>
    </div>

    
    <!-- 3D Coverflow Carousel Container -->
    <div class="gallery-coverflow-wrapper" id="galleryCoverflow" tabindex="0" aria-label="IDS Gallery Coverflow Carousel">
      <div class="gallery-coverflow-track">
                  <div class="gallery-card is-hidden" 
               data-index="0" 
               data-caption="Investor Daily Summit Highlight 1"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 1">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177262_95ee3eceb6123b6ec091.jpg" 
                   alt="Investor Daily Summit Highlight 1" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-hidden" 
               data-index="1" 
               data-caption="Investor Daily Summit Highlight 2"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 2">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177273_77966d4c1e8d7d37e8d9.jpg" 
                   alt="Investor Daily Summit Highlight 2" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-hidden" 
               data-index="2" 
               data-caption="Investor Daily Summit Highlight 3"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 3">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177283_c46d75a628cb26b51123.jpg" 
                   alt="Investor Daily Summit Highlight 3" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-hidden" 
               data-index="3" 
               data-caption="Investor Daily Summit Highlight 4"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 4">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177292_23ad2cb4d2c9b5cedd15.jpg" 
                   alt="Investor Daily Summit Highlight 4" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-hidden" 
               data-index="4" 
               data-caption="Investor Daily Summit Highlight 5"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 5">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177302_9887fcc92862db0c5f16.jpg" 
                   alt="Investor Daily Summit Highlight 5" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-hidden" 
               data-index="5" 
               data-caption="Investor Daily Summit Highlight 6"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 6">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177317_8075e47fb4324e7aa4d7.jpg" 
                   alt="Investor Daily Summit Highlight 6" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-hidden" 
               data-index="6" 
               data-caption="Investor Daily Summit Highlight 7 "
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 7 ">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177326_ec1774e0ba81e3675143.jpg" 
                   alt="Investor Daily Summit Highlight 7 " 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-hidden" 
               data-index="7" 
               data-caption="Investor Daily Summit Highlight 8"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 8">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177335_f4f73042cde3beebc0c8.jpg" 
                   alt="Investor Daily Summit Highlight 8" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-hidden" 
               data-index="8" 
               data-caption="Investor Daily Summit Highlight 9"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 9">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177344_48d8bcc2d98780ab49eb.jpg" 
                   alt="Investor Daily Summit Highlight 9" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-hidden" 
               data-index="9" 
               data-caption="Investor Daily Summit Highlight 10"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 10">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177352_09bd625d5532eca99ba9.jpg" 
                   alt="Investor Daily Summit Highlight 10" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-left" 
               data-index="10" 
               data-caption="Investor Daily Summit Highlight 11"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 11">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177370_6cc3c62e7c25cb3bbe4a.jpg" 
                   alt="Investor Daily Summit Highlight 11" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-center" 
               data-index="11" 
               data-caption="Investor Daily Summit Highlight 12"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 12">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177379_a2d207b87b4ee4d017eb.jpg" 
                   alt="Investor Daily Summit Highlight 12" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-right" 
               data-index="12" 
               data-caption="Investor Daily Summit Highlight 14"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 14">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177398_303efa4b3b37ff48d351.jpg" 
                   alt="Investor Daily Summit Highlight 14" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-hidden" 
               data-index="13" 
               data-caption="Investor Daily Summit Highlight 15"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 15">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177405_069b4fcb5aacf815f17b.jpg" 
                   alt="Investor Daily Summit Highlight 15" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-hidden" 
               data-index="14" 
               data-caption="Investor Daily Summit Highlight 16"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 16">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177729_7e7dd5e0200d8d121254.jpg" 
                   alt="Investor Daily Summit Highlight 16" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-hidden" 
               data-index="15" 
               data-caption="Investor Daily Summit Highlight 17"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 17">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177741_e9ec84b71fde5db40248.jpg" 
                   alt="Investor Daily Summit Highlight 17" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-hidden" 
               data-index="16" 
               data-caption="Investor Daily Summit Highlight 18"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 18">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177756_d3fc7fff7f1d329378f2.jpg" 
                   alt="Investor Daily Summit Highlight 18" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-hidden" 
               data-index="17" 
               data-caption="Investor Daily Summit Highlight 19"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 19">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177770_9b448b32ce1f0625b66f.jpg" 
                   alt="Investor Daily Summit Highlight 19" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-hidden" 
               data-index="18" 
               data-caption="Investor Daily Summit Highlight 20"
               tabindex="0"
               role="button"
               aria-label="Investor Daily Summit Highlight 20">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790177781_17b312fa4e36cba441d2.jpg" 
                   alt="Investor Daily Summit Highlight 20" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
                  <div class="gallery-card is-hidden" 
               data-index="19" 
               data-caption="20"
               tabindex="0"
               role="button"
               aria-label="20">
            <div class="gallery-card-inner">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/gallery/1790328792_c81b82c9a4843a01a04e.jpeg" 
                   alt="20" 
                   loading="lazy">
              <!-- <div class="gallery-card-overlay">
                <span class="gallery-card-badge">Click to enlarge</span>
              </div> -->
            </div>
          </div>
              </div>
    </div>

    <!-- Navigation Arrows -->
    <div class="gallery-nav-controls">
      <button type="button" class="gallery-nav-btn gallery-prev-btn" id="galleryPrevBtn" aria-label="Previous slide">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="15 18 9 12 15 6"></polyline>
        </svg>
      </button>
      <button type="button" class="gallery-nav-btn gallery-next-btn" id="galleryNextBtn" aria-label="Next slide">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
      </button>
    </div>
  </div>
</section>

<!-- DEBUG-VIEW ENDED 181 APPPATH\Views\partials\gallery.php -->

    <!-- 7. Related News Section -->
    <!-- DEBUG-VIEW START 184 APPPATH\Views\partials\related_news.php -->
<section class="news-section" id="news">
  <!-- DEBUG-VIEW START 182 APPPATH\Views\partials\section_decorations.php -->

<!-- DEBUG-VIEW ENDED 182 APPPATH\Views\partials\section_decorations.php -->
  <!-- DEBUG-VIEW START 183 APPPATH\Views\partials\custom_placements.php -->

<!-- DEBUG-VIEW ENDED 183 APPPATH\Views\partials\custom_placements.php -->
  <div class="container">
    
    <!-- Section Header Centered -->
    <div class="section-header-center">
      <h2 class="section-title">Related News</h2>
    </div>

    
          <div class="news-source-block">
        <div class="news-source-header">
          <h3 class="news-source-title">Investor Daily</h3>
          <a href="https://investor.id/tag/investor-daily-summit" target="_blank" rel="noopener noreferrer" class="news-source-more-link">
            Selengkapnya &rarr;
          </a>
        </div>

                  <!-- News Slider Carousel Wrapper -->
          <div class="news-slider-wrapper " data-slider-id="investor-daily">
            
                        <!-- Prev Navigation Arrow -->
            <button type="button" 
                    class="news-arrow-btn news-arrow-prev is-disabled" 
                    aria-label="Previous news" 
                    disabled>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </button>
            
            <!-- Scrollable / Swipeable Track -->
            <div class="news-slider-container">
              <div class="news-slider-track ">
                                  <article class="news-card">
                    <a href="https://investor.id/macroeconomy/432079/jika-defisit-apbn-jadi-4" class="news-card-link" target="_blank" rel="noopener noreferrer">
                      <div class="news-image-wrap">
                        <img src="https://img2.beritasatu.com/cache/investor/798x449-2/2026/03/1773581957-1040x693.webp" 
                             alt="Jika Defisit APBN Jadi 4%" 
                             loading="lazy">
                      </div>
                      <h3 class="news-title">Jika Defisit APBN Jadi 4%</h3>
                    </a>
                  </article>
                                  <article class="news-card">
                    <a href="https://investor.id/macroeconomy/431634/prabowo-minta-jatah-rp-800-triliun-tiap-tahun-ke-danantara" class="news-card-link" target="_blank" rel="noopener noreferrer">
                      <div class="news-image-wrap">
                        <img src="https://img2.beritasatu.com/cache/investor/798x449-2/2026/03/1773245690-4999x3333.webp" 
                             alt="Prabowo Minta Jatah Rp 800 Triliun Tiap Tahun ke Danantara" 
                             loading="lazy">
                      </div>
                      <h3 class="news-title">Prabowo Minta Jatah Rp 800 Triliun Tiap Tahun ke Danantara</h3>
                    </a>
                  </article>
                                  <article class="news-card">
                    <a href="https://investor.id/macroeconomy/430895/saat-kenaikan-harga-minyak-membuat-isi-dompet-kita-makin-tipis" class="news-card-link" target="_blank" rel="noopener noreferrer">
                      <div class="news-image-wrap">
                        <img src="https://img2.beritasatu.com/cache/investor/798x449-2/2025/06/1750077957-1200x828.webp" 
                             alt="Saat Kenaikan Harga Minyak Membuat Isi Dompet Kita Makin Tipis" 
                             loading="lazy">
                      </div>
                      <h3 class="news-title">Saat Kenaikan Harga Minyak Membuat Isi Dompet Kita Makin Tipis</h3>
                    </a>
                  </article>
                                  <article class="news-card">
                    <a href="https://investor.id/macroeconomy/429998/salah-kaprah-pembatasan-ritel-modern-melindungi-koperasi-atau-membelenggu-kompetisi" class="news-card-link" target="_blank" rel="noopener noreferrer">
                      <div class="news-image-wrap">
                        <img src="https://img2.beritasatu.com/cache/investor/798x449-2/2025/09/1757674717-5000x3334.webp" 
                             alt="Salah Kaprah Pembatasan Ritel Modern: Melindungi Koperasi atau Membelenggu Kompetisi?" 
                             loading="lazy">
                      </div>
                      <h3 class="news-title">Salah Kaprah Pembatasan Ritel Modern: Melindungi Koperasi atau Membelenggu Kompetisi?</h3>
                    </a>
                  </article>
                              </div>
            </div>

                        <!-- Next Navigation Arrow -->
            <button type="button" 
                    class="news-arrow-btn news-arrow-next" 
                    aria-label="Next news">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </button>
            
          </div>
              </div>
          <div class="news-source-block">
        <div class="news-source-header">
          <h3 class="news-source-title">BeritaSatu</h3>
          <a href="https://www.beritasatu.com/tag/investor-daily-summit" target="_blank" rel="noopener noreferrer" class="news-source-more-link">
            Selengkapnya &rarr;
          </a>
        </div>

                  <!-- News Slider Carousel Wrapper -->
          <div class="news-slider-wrapper " data-slider-id="beritasatu">
            
                        <!-- Prev Navigation Arrow -->
            <button type="button" 
                    class="news-arrow-btn news-arrow-prev is-disabled" 
                    aria-label="Previous news" 
                    disabled>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </button>
            
            <!-- Scrollable / Swipeable Track -->
            <div class="news-slider-container">
              <div class="news-slider-track ">
                                  <article class="news-card">
                    <a href="https://www.beritasatu.com/ekonomi/2948327/menteri-atr-bahas-lahan-swasembada-pangan-di-investor-daily-roundtable" class="news-card-link" target="_blank" rel="noopener noreferrer">
                      <div class="news-image-wrap">
                        <img src="https://img2.beritasatu.com/cache/beritasatu/960x620-3/2025/12/1765381249-3000x2083.webp" 
                             alt="Menteri ATR Bahas Lahan Swasembada Pangan di Investor Daily Roundtable" 
                             loading="lazy">
                      </div>
                      <h3 class="news-title">Menteri ATR Bahas Lahan Swasembada Pangan di Investor Daily Roundtable</h3>
                    </a>
                  </article>
                                  <article class="news-card">
                    <a href="https://www.beritasatu.com/ekonomi/2931223/dari-rosan-hingga-purbaya-para-menteri-sampaikan-gagasan-di-investor-daily-summit-2025" class="news-card-link" target="_blank" rel="noopener noreferrer">
                      <div class="news-image-wrap">
                        <img src="https://img2.beritasatu.com/cache/beritasatu/960x620-3/2025/10/1760434896-828x529.webp" 
                             alt="Dari Rosan hingga Purbaya, Para Menteri Sampaikan Gagasan di Investor Daily Summit 2025" 
                             loading="lazy">
                      </div>
                      <h3 class="news-title">Dari Rosan hingga Purbaya, Para Menteri Sampaikan Gagasan di Investor Daily Summit 2025</h3>
                    </a>
                  </article>
                                  <article class="news-card">
                    <a href="https://www.beritasatu.com/ekonomi/2929884/astra-dukung-investor-daily-summit-2025-perkuat-peran-produk-lokal-dalam-membangun-daya-saing-bangsa" class="news-card-link" target="_blank" rel="noopener noreferrer">
                      <div class="news-image-wrap">
                        <img src="https://img2.beritasatu.com/cache/beritasatu/960x620-3/2025/10/1760026785-1280x853.webp" 
                             alt="Astra Dukung Investor Daily Summit 2025, Perkuat Peran Produk Lokal dalam Membangun Daya Saing Bangsa" 
                             loading="lazy">
                      </div>
                      <h3 class="news-title">Astra Dukung Investor Daily Summit 2025, Perkuat Peran Produk Lokal dalam Membangun Daya Saing Bangsa</h3>
                    </a>
                  </article>
                                  <article class="news-card">
                    <a href="https://www.beritasatu.com/ekonomi/2929873/kenal-luhut-hingga-jokowi-purbaya-ngaku-tak-takut-siapa-siapa" class="news-card-link" target="_blank" rel="noopener noreferrer">
                      <div class="news-image-wrap">
                        <img src="https://img2.beritasatu.com/cache/beritasatu/960x620-3/2025/10/1760010238-1280x960.webp" 
                             alt="Kenal Luhut hingga Jokowi, Purbaya Ngaku Tak Takut Siapa-siapa" 
                             loading="lazy">
                      </div>
                      <h3 class="news-title">Kenal Luhut hingga Jokowi, Purbaya Ngaku Tak Takut Siapa-siapa</h3>
                    </a>
                  </article>
                              </div>
            </div>

                        <!-- Next Navigation Arrow -->
            <button type="button" 
                    class="news-arrow-btn news-arrow-next" 
                    aria-label="Next news">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </button>
            
          </div>
              </div>
          <div class="news-source-block">
        <div class="news-source-header">
          <h3 class="news-source-title">JakartaGlobe</h3>
          <a href="https://jakartaglobe.id/search/investor-daily-summit" target="_blank" rel="noopener noreferrer" class="news-source-more-link">
            Selengkapnya &rarr;
          </a>
        </div>

                  <!-- News Slider Carousel Wrapper -->
          <div class="news-slider-wrapper " data-slider-id="jakartaglobe">
            
                        <!-- Prev Navigation Arrow -->
            <button type="button" 
                    class="news-arrow-btn news-arrow-prev is-disabled" 
                    aria-label="Previous news" 
                    disabled>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </button>
            
            <!-- Scrollable / Swipeable Track -->
            <div class="news-slider-container">
              <div class="news-slider-track ">
                                  <article class="news-card">
                    <a href="https://jakartaglobe.id/business/rosan-roeslani-confirmed-as-keynote-speaker-at-investor-daily-summit-2026" class="news-card-link" target="_blank" rel="noopener noreferrer">
                      <div class="news-image-wrap">
                        <img src="https://img2.beritasatu.com/cache/jakartaglobe/960x620-3/2026/09/1790021396-1600x1214.webp" 
                             alt="Rosan Roeslani Confirmed as Keynote Speaker at Investor Daily Summit 2026" 
                             loading="lazy">
                      </div>
                      <h3 class="news-title">Rosan Roeslani Confirmed as Keynote Speaker at Investor Daily Summit 2026</h3>
                    </a>
                  </article>
                                  <article class="news-card">
                    <a href="https://jakartaglobe.id/news/investor-daily-marks-silver-jubilee-while-defying-global-decline-of-print-media" class="news-card-link" target="_blank" rel="noopener noreferrer">
                      <div class="news-image-wrap">
                        <img src="https://img2.beritasatu.com/cache/jakartaglobe/960x620-3/2026/06/1782476991-1600x1059.webp" 
                             alt="Investor Daily Marks Silver Jubilee While Defying Global Decline of Print Media" 
                             loading="lazy">
                      </div>
                      <h3 class="news-title">Investor Daily Marks Silver Jubilee While Defying Global Decline of Print Media</h3>
                    </a>
                  </article>
                                  <article class="news-card">
                    <a href="https://jakartaglobe.id/business/danantara-tariffs-purbaya-indonesias-economic-surprises-of-2025" class="news-card-link" target="_blank" rel="noopener noreferrer">
                      <div class="news-image-wrap">
                        <img src="https://img2.beritasatu.com/cache/jakartaglobe/960x620-3/2025/10/1760399986-1172x781.webp" 
                             alt="Danantara, Tariffs, Purbaya: Indonesia’s Economic Surprises of 2025" 
                             loading="lazy">
                      </div>
                      <h3 class="news-title">Danantara, Tariffs, Purbaya: Indonesia’s Economic Surprises of 2025</h3>
                    </a>
                  </article>
                                  <article class="news-card">
                    <a href="https://jakartaglobe.id/business/indonesia-to-halt-diesel-imports-next-year-under-biofuel-expansion-plan" class="news-card-link" target="_blank" rel="noopener noreferrer">
                      <div class="news-image-wrap">
                        <img src="https://img2.beritasatu.com/cache/jakartaglobe/960x620-3/2018/11/antarafoto-bbm-satu-harga-281118-abhe-1.jpg" 
                             alt="Indonesia to Halt Diesel Imports Next Year Under Biofuel Expansion Plan" 
                             loading="lazy">
                      </div>
                      <h3 class="news-title">Indonesia to Halt Diesel Imports Next Year Under Biofuel Expansion Plan</h3>
                    </a>
                  </article>
                              </div>
            </div>

                        <!-- Next Navigation Arrow -->
            <button type="button" 
                    class="news-arrow-btn news-arrow-next" 
                    aria-label="Next news">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </button>
            
          </div>
              </div>
    
  </div>
</section>

<!-- DEBUG-VIEW ENDED 184 APPPATH\Views\partials\related_news.php -->

    <!-- 7.1 Highlights (YouTube) Section -->
    

    <!-- 8. Sponsor & Partners Section -->
    <!-- DEBUG-VIEW START 187 APPPATH\Views\partials\sponsors.php -->
<section class="sponsors-section" id="sponsor">
  <!-- DEBUG-VIEW START 185 APPPATH\Views\partials\section_decorations.php -->

<!-- DEBUG-VIEW ENDED 185 APPPATH\Views\partials\section_decorations.php -->
  <!-- DEBUG-VIEW START 186 APPPATH\Views\partials\custom_placements.php -->

<!-- DEBUG-VIEW ENDED 186 APPPATH\Views\partials\custom_placements.php -->

  <div class="container">
                <div class="sponsor-single-wrapper">
        <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/sponsors/1790240867_0e3a91d38b854819fef0.jpg" 
             alt="Sponsors &amp; Partnerships" 
             class="sponsor-banner-img" 
             loading="lazy">
      </div>
    
    
  </div>
</section>

<!-- DEBUG-VIEW ENDED 187 APPPATH\Views\partials\sponsors.php -->

    <!-- 8.1 Locations & Floor Plan Section -->
    <!-- DEBUG-VIEW START 190 APPPATH\Views\partials\locations.php -->
<section class="locations-section" id="location">
  <!-- DEBUG-VIEW START 188 APPPATH\Views\partials\section_decorations.php -->
<div class="decoration-layer" aria-hidden="true">
            
        
        
                                <div class="decoration-item pos-bottom-right  hide-on-desktop "
                 style="--dec-width: 450px; --dec-opacity: 1; --dec-edge-offset: 50%; --dec-rot-z: 0deg;">
                <div class="decoration-inner-transform">
                                            <div class="decoration-tint-mask" 
                             style="--tint-color: #004b84; --mask-url: url('https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/decoration_white.png'); width: 100%; height: 100%;"></div>
                                    </div>
            </div>
            </div>

<!-- DEBUG-VIEW ENDED 188 APPPATH\Views\partials\section_decorations.php -->
  <!-- DEBUG-VIEW START 189 APPPATH\Views\partials\custom_placements.php -->
<div class="custom-placement-layer" aria-hidden="true">
                    <div class="custom-placement-item  hide-on-mobile "
             style="left: 2.7%; top: 32%; --cp-width: 450px; --cp-opacity: 1; z-index: 0; --cp-rot-z: 0deg;">
            <div class="custom-placement-inner">
                                    <div class="decoration-tint-mask" 
                         style="--tint-color: #004b84; --mask-url: url('https://cheap-sql-generator-inquiry.trycloudflare.com/assets/img/decoration_white.png'); width: 100%; height: 100%;"></div>
                            </div>
        </div>
    </div>

<!-- DEBUG-VIEW ENDED 189 APPPATH\Views\partials\custom_placements.php -->
  <div class="container">
    
    <!-- Top: Centered Hotel Name & Address -->
    <div class="locations-header-center">
      <h2 class="locations-hotel-name">Raffles Jakarta</h2>
      <div class="locations-address">
        Ciputra World, Jl. Prof. DR. Satrio, Kuningan, Karet Kuningan, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12940      </div>
    </div>

    <!-- Bottom Side-by-Side: Floor Plan (Left) & Google Maps Embed (Right) -->
    <div class="locations-content-grid">
      
      <!-- Left: General Layout / Floor Plan Banner (Clickable Lightbox) -->
              <div class="locations-floorplan-card is-clickable" id="locationFloorPlanCard" data-img-url="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/locations/1790217304_3f3bd147987d3826090b.jpg" title="Klik untuk memperbesar gambar">
          <!-- <div class="locations-floorplan-badge">
            <span>GENERAL LAYOUT</span>
            <span class="locations-zoom-hint">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line><line x1="11" y1="8" x2="11" y2="14"></line><line x1="8" y1="11" x2="14" y2="11"></line></svg>
              Perbesar
            </span>
          </div> -->
          <div class="locations-floorplan-img-wrapper">
            <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/locations/1790217304_3f3bd147987d3826090b.jpg" alt="Raffles Jakarta - General Layout" loading="lazy">
          </div>
        </div>
      
      <!-- Right: Google Maps Embed (Sejajar dengan Floor Design) -->
      <div class="locations-map-card">
                  <div class="locations-map-embed-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3009189736968!2d106.82080427475056!3d-6.223995793764061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3fc66813af1%3A0x739094cdcbcb594d!2sHotel%20Raffles%20Jakarta!5e0!3m2!1sid!2sid!4v1790178772173!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>          </div>
              </div>

    </div>

  </div>
</section>

<!-- DEBUG-VIEW ENDED 190 APPPATH\Views\partials\locations.php -->
  </main>

  <!-- 8. Footer -->
  <!-- DEBUG-VIEW START 191 APPPATH\Views\partials\footer.php -->
<footer class="site-footer">
  <div class="container">
    <div class="footer-inner">
      
      <!-- Sisi Kiri: Logo Footer + Social Media di bawahnya -->
      <div class="footer-left">
        <div class="footer-brand">
                                <a href="https://investor.id" aria-label="Investor Daily Indonesia" target="_blank" rel="noopener noreferrer">
              <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/logos/logo_id_white.webp" alt="Investor Daily Indonesia" class="footer-logo-id">
            </a>
                  </div>

        <!-- Ikon Media Sosial di bawah Logo -->
        <div class="footer-socials">
                    <!-- Instagram -->
                      <a href="https://www.instagram.com/investordailysummit.id/" target="_blank" rel="noopener noreferrer" class="social-circle-btn" aria-label="Instagram">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
              </svg>
            </a>
          
          <!-- YouTube -->
                      <a href="https://www.youtube.com/@InvestorDailyTV" target="_blank" rel="noopener noreferrer" class="social-circle-btn" aria-label="YouTube">
              <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
              </svg>
            </a>
          
          <!-- Facebook -->
                      <a href="https://www.facebook.com/investor.id" target="_blank" rel="noopener noreferrer" class="social-circle-btn" aria-label="Facebook">
              <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </a>
          
          <!-- TikTok -->
                      <a href="https://www.tiktok.com/@investordailyid" target="_blank" rel="noopener noreferrer" class="social-circle-btn" aria-label="TikTok">
              <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.29 0 .58.04.86.11V9.42a6.37 6.37 0 0 0-.86-.06A6.34 6.34 0 0 0 3.1 15.7a6.34 6.34 0 0 0 10.82 4.48 6.27 6.27 0 0 0 1.86-4.51v-6.6a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-.96-.5z"/>
              </svg>
            </a>
                  </div>
      </div>

      <!-- Bagian Tengah: Teks Copyright -->
      <div class="footer-copy">
        &copy; Copyright 2026. Investor Daily Summit.      </div>

      <!-- Sisi Kanan: Contact Us & Phone with icon (Group Link) -->
            <div class="footer-contact">
        <div class="footer-contact-title">Contact Us:</div>
        <div class="footer-phone-static" aria-label="Hubungi kami di +62 855-1235-000">
          <div class="footer-phone-details">
            <span class="footer-phone-label">Phone</span>
            <span class="footer-phone-number">+62 855-1235-000</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</footer>

<!-- DEBUG-VIEW ENDED 191 APPPATH\Views\partials\footer.php -->

  <!-- 9. Speaker Detail Modal -->
  <!-- DEBUG-VIEW START 192 APPPATH\Views\partials\speaker_modal.php -->
<!-- Speaker Detail Modal Popup (Figma Spec) -->
<div class="speaker-modal-backdrop" id="speakerModal" aria-hidden="true" role="dialog" aria-modal="true">
  <div class="speaker-modal-dialog">
    
    <!-- Close Button -->
    <button class="speaker-modal-close" id="speakerModalClose" aria-label="Tutup popup">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="6" x2="6" y2="18"></line>
        <line x1="6" y1="6" x2="18" y2="18"></line>
      </svg>
    </button>

    <!-- Modal Content -->
    <div class="speaker-modal-body">
      <!-- Speaker Photo Left -->
      <div class="speaker-modal-photo-col">
        <div class="speaker-modal-photo-wrap">
          <img src="" alt="" id="modalSpeakerPhoto" class="speaker-modal-img">
        </div>
      </div>

      <!-- Speaker Text Info Right -->
      <div class="speaker-modal-info-col">
        <h3 class="speaker-modal-name" id="modalSpeakerName"></h3>
        <p class="speaker-modal-role" id="modalSpeakerRole"></p>
        <p class="speaker-modal-bio" id="modalSpeakerBio" style="display: none;"></p>
      </div>
    </div>

  </div>
</div>

<!-- DEBUG-VIEW ENDED 192 APPPATH\Views\partials\speaker_modal.php -->

  <!-- 9.1 Gallery Lightbox Modal -->
  <!-- DEBUG-VIEW START 193 APPPATH\Views\partials\gallery_modal.php -->
<!-- Modal Lightbox for Center Card Preview -->
<div class="gallery-modal" id="galleryModal" aria-hidden="true" role="dialog" aria-modal="true">
  <div class="gallery-modal-overlay" id="galleryModalOverlay"></div>
  <div class="gallery-modal-dialog">
    <button type="button" class="gallery-modal-close" id="galleryModalClose" aria-label="Close modal">&times;</button>
    <div class="gallery-modal-media">
      <img src="" alt="" id="galleryModalImg" class="gallery-modal-img">
    </div>
    <!-- <div class="gallery-modal-info">
      <p id="galleryModalCaption" class="gallery-modal-caption"></p>
    </div> -->
  </div>
</div>

<!-- DEBUG-VIEW ENDED 193 APPPATH\Views\partials\gallery_modal.php -->

  <!-- 9.2 Persistent Floating Bottom Action Bar -->
  <!-- DEBUG-VIEW START 194 APPPATH\Views\partials\floating_bottom.php -->
<div class="floating-bottom-bar" id="floatingBottomBar" role="region" aria-label="Quick registration bar">
  <div class="floating-bottom-card">
    
    <!-- Left: IDS 2026 Brand Logo -->
          <div class="floating-bottom-brand">
        <img src="https://cheap-sql-generator-inquiry.trycloudflare.com/uploads/events/1/logos/logo_ids26_white.webp" alt="Investor Daily Summit 2026" class="floating-bottom-logo">
      </div>
    
    <!-- Center: Looping Typing Text Animation -->
    <div class="floating-bottom-center">
      <span class="typing-text" id="floatingTypingText" data-phrase="Book Your Seat Now!"></span><span class="typing-cursor" aria-hidden="true">|</span>
    </div>

    <!-- Right: Get Ticket Button (matching navbar style with radius 10) -->
    <div class="floating-bottom-action">
      <a href="https://goers.co/investordailysummit2026" class="btn-floating-ticket" data-track-ticket="true" target="_blank" rel="noopener noreferrer">
        Get Tickets      </a>
    </div>

  </div>
</div>


<!-- DEBUG-VIEW ENDED 194 APPPATH\Views\partials\floating_bottom.php -->

  <!-- 10. Floating Back to Top Button -->
  <button type="button" class="back-to-top-btn" id="backToTopBtn" aria-label="Kembali ke atas">
    <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
      <line x1="12" y1="19" x2="12" y2="5"></line>
      <polyline points="5 12 12 5 19 12"></polyline>
    </svg>
  </button>

  <!-- Interactive JavaScript -->
  <script src="https://cheap-sql-generator-inquiry.trycloudflare.com/assets/js/main.js"></script>
</body>
</html>

<!-- DEBUG-VIEW ENDED 195 APPPATH\Views\layouts\main.php -->

<!-- DEBUG-VIEW ENDED 196 APPPATH\Views\home.php -->
