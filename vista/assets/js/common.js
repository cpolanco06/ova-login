var objBrowse=navigator.appName;function magnifierImageChanged(d){var f=d.currentTarget.getAttribute("id");var b=f.substring(3,f.length);var e=document.getElementById("img"+b);var c=document.getElementById("width"+b);var a=document.getElementById("height"+b);e.removeAttribute("height");if(e.width>700){e.width=600}if(e.width<=700&&e.width>300){e.width=e.width*0.7}if(e.height>270){c.value=e.width+84}else{c.value=e.width+144}a.value=e.height+24;if(c.value<180){c.value=180}if(a.value<160){a.value=160}}function imageChanged(d){var f=d.currentTarget.getAttribute("id");var b=f.substring(3,f.length);var e=document.getElementById("img"+b);var c=document.getElementById("width"+b);var a=document.getElementById("height"+b);c.value=e.width;a.value=e.height}function changeImageWidth(b){var d=document.getElementById("img"+b);var c=document.getElementById("width"+b);var a=document.getElementById("height"+b);d.removeAttribute("height");if(c.value){d.width=c.value}else{if(d.hasAttribute("src")){d.removeAttribute("width");c.value=d.width}else{c.value=""}}a.value=d.height}function changeImageHeight(b){var d=document.getElementById("img"+b);var c=document.getElementById("width"+b);var a=document.getElementById("height"+b);d.removeAttribute("width");if(a.value){d.height=a.value}else{if(d.hasAttribute("src")){d.removeAttribute("height");a.value=d.height}else{a.value=""}}c.value=d.width}function changeMagnifierImageWidth(b){var d=document.getElementById("img"+b);var c=document.getElementById("width"+b);var a=document.getElementById("height"+b);d.removeAttribute("height");if(c.value){d.width=c.value-84}else{d.removeAttribute("width")}if(d.width>600){d.removeAttribute("height");d.width=600}if(d.height>270){c.value=d.width+84}else{c.value=d.width+144}a.value=d.height+24;if(c.value<180){c.value=180}if(a.value<160){a.value=160}}function changeMagnifierImageHeight(b){var d=document.getElementById("img"+b);var c=document.getElementById("width"+b);var a=document.getElementById("height"+b);d.removeAttribute("width");if(a.value){d.height=a.value-24}else{d.removeAttribute("height")}if(d.width>600){d.removeAttribute("height");d.width=600}if(d.height>270){c.value=d.width+84}else{c.value=d.width+144}a.value=d.height+24;if(c.value<180){c.value=180}if(a.value<160){a.value=160}}function showMe(d,b,c){var e=document.getElementById("popupmessage");hideMe();if(!e||e.innerHTML!=document.getElementById(d).innerHTML){e=document.createElement("div");e.id="popupmessage";e.className="popupDiv";var a=(xpos+b>740)?Math.max(0,xpos-b-15):xpos;e.style.cssText="position:absolute; left: "+(a)+"px; top: "+(ypos-c/2)+"px; width: "+b+"px;";e.innerHTML=document.getElementById(d).innerHTML;document.body.appendChild(e);new dragElement("popupmessage")}}function hideMe(){var a=document.getElementById("popupmessage");if(a){a.parentNode.removeChild(a)}}function updateCoords(c){if(c.pageX==null&&c.clientX!=null){var a=document.body;c.pageX=c.clientX+(c&&c.scrollLeft||a.scrollLeft||0);c.pageY=c.clientY+(c&&c.scrollTop||a.scrollTop||0)}xpos=c.pageX;ypos=c.pageY}function getFeedback(c,f,a,d){var b,e;for(b=0;b<f;b++){if(d=="multi"){e="sa"+b+"b"+a}else{e="s"+b+"b"+a}if(b==c){document.getElementById(e).style.display="block"}else{document.getElementById(e).style.display="None"}}if(d=="truefalse"){document.getElementById("sfbk"+a).style.display="block"}}NOT_ATTEMPTED=0;WRONG=1;CORRECT=2;function onClozeChange(ele){var ident=getClozeIds(ele)[0];var instant=eval(document.getElementById("clozeFlag"+ident+".instantMarking").value);if(instant){checkAndMarkClozeWord(ele);var scorePara=document.getElementById("clozeScore"+ident);scorePara.innerHTML=""}}function clozeSubmit(a){showClozeScore(a,1);toggleElementVisible("submit"+a);toggleElementVisible("restart"+a);toggleElementVisible("showAnswersButton"+a);toggleClozeFeedback(a)}function clozeRestart(a){toggleClozeFeedback(a);toggleClozeAnswers(a,true);toggleElementVisible("restart"+a);toggleElementVisible("showAnswersButton"+a);toggleElementVisible("submit"+a)}function toggleClozeAnswers(g,a){var h=true;var b=getCloseInputs(g);if(!a){for(var d=0;d<b.length;d++){var c=b[d];if(getClozeMark(c)!=2){h=false;break}}}if(h){clearClozeInputs(g,b)}else{fillClozeInputs(g,b)}var e=document.getElementById("clozeScore"+g);e.innerHTML="";var f=document.getElementById("getScore"+g);if(f){f.disabled=!h}}function fillClozeInputs(d,a){if(!a){var a=getCloseInputs(d)}for(var c=0;c<a.length;c++){var b=a[c];b.value=getClozeAnswer(b);markClozeWord(b,CORRECT);b.setAttribute("readonly","readonly")}}function clearClozeInputs(d,a){if(!a){var a=getCloseInputs(d)}for(var c=0;c<a.length;c++){var b=a[c];b.value="";markClozeWord(b,NOT_ATTEMPTED);b.removeAttribute("readonly")}}function checkAndMarkClozeWord(b){var a=checkClozeWord(b);if(a!=""){markClozeWord(b,CORRECT);b.value=a;return CORRECT}else{if(!b.value){markClozeWord(b,NOT_ATTEMPTED);return NOT_ATTEMPTED}else{markClozeWord(b,WRONG);return WRONG}}}function markClozeWord(a,b){switch(b){case 0:a.style.backgroundColor="";break;case 1:a.style.backgroundColor="red";break;case 2:a.style.backgroundColor="forestgreen";break}return b}function getClozeMark(b){var a=checkClozeWord(b);if(a!=""){return CORRECT}else{if(!b.value){return NOT_ATTEMPTED}else{return WRONG}}}function getClozeAnswer(j){var f=getClozeIds(j);var c=f[0];var g=f[1];var e=document.getElementById("clozeAnswer"+c+"."+g);var a=e.innerHTML;a=decode64(a);a=unescape(a);result="";var h="X".charCodeAt(0);for(var d=0;d<a.length;d++){var b=a.charCodeAt(d);h^=b;result+=String.fromCharCode(h)}return result}function decode64(d){var b="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";var a="";var l,j,g;var k,h,f,e;var c=0;d=d.replace(/[^A-Za-z0-9\+\/\=]/g,"");do{k=b.indexOf(d.charAt(c++));h=b.indexOf(d.charAt(c++));f=b.indexOf(d.charAt(c++));e=b.indexOf(d.charAt(c++));l=(k<<2)|(h>>4);j=((h&15)<<4)|(f>>2);g=((f&3)<<6)|e;a=a+String.fromCharCode(l);if(f!=64){a=a+String.fromCharCode(j)}if(e!=64){a=a+String.fromCharCode(g)}}while(c<d.length);return a}function checkClozeWord(ele){var guess=ele.value;var original=getClozeAnswer(ele);var answer=original;var guess=ele.value;var ident=getClozeIds(ele)[0];var strictMarking=eval(document.getElementById("clozeFlag"+ident+".strictMarking").value);var checkCaps=eval(document.getElementById("clozeFlag"+ident+".checkCaps").value);if(!checkCaps){guess=guess.toLowerCase();answer=original.toLowerCase()}if(guess==answer){return original}else{if(strictMarking||answer.length<=4){return""}else{var i=0;var j=0;var orders=[[answer,guess],[guess,answer]];var maxMisses=Math.floor(answer.length/6)+1;var misses=0;if(guess.length<=maxMisses){misses=Math.abs(guess.length-answer.length);for(i=0;i<guess.length;i++){if(answer.search(guess[i])==-1){misses+=1}}if(misses<=maxMisses){return answer}else{return""}}for(i=0;i<2;i++){var string1=orders[i][0];var string2=orders[i][1];while(string1){misses=Math.floor((Math.abs(string1.length-string2.length)+Math.abs(guess.length-answer.length))/2);var max=Math.min(string1.length,string2.length);for(j=0;j<max;j++){var a=string2.charAt(j);var b=string1.charAt(j);if(a!=b){misses+=1}if(misses>maxMisses){break}}if(misses<=maxMisses){return answer}string1=string1.substr(1)}}return""}}}function getClozeIds(d){var e=d.id.slice(10);var a=e.indexOf(".");var c=e.slice(0,a);var b=e.slice(e.indexOf(".")+1);return[c,b]}function showClozeScore(d,c){var b=0;var a=document.getElementById("cloze"+d);var f=getCloseInputs(d);for(var e=0;e<f.length;e++){var h=f[e];if(c){var j=checkAndMarkClozeWord(h)}else{var j=getClozeMark(h)}if(j==2){b++}}var g=document.getElementById("clozeScore"+d);g.innerHTML=YOUR_SCORE_IS+b+"/"+f.length+"."}function getCloseInputs(c){var b=new Array;var a=document.getElementById("cloze"+c);recurseFindClozeInputs(a,c,b);return b}function recurseFindClozeInputs(b,e,a){for(var c=0;c<b.childNodes.length;c++){var d=b.childNodes[c];if(d.id){if(d.id.search("clozeBlank"+e)==0){a.push(d);continue}}if(d.hasChildNodes()){recurseFindClozeInputs(d,e,a)}}}function toggleClozeFeedback(b){var a=document.getElementById("clozeVar"+b+".feedbackId");if(a){var c=a.value;toggleElementVisible(c)}}function toggleElementVisible(b){var a=document.getElementById(b);if(a){if(a.style.display!="none"){a.style.display="none"}else{a.style.display=""}}}function showAnswer(b,a){if(a==1){document.getElementById("s"+b).style.display="block";document.getElementById("hide"+b).style.display="block";document.getElementById("view"+b).style.display="none"}else{document.getElementById("s"+b).style.display="none";document.getElementById("hide"+b).style.display="none";document.getElementById("view"+b).style.display="block"}}function toggleFeedback(b){var a=document.getElementById("fb"+b);if(a.style.display=="block"){a.style.display="none"}else{a.style.display="block"}}function insertAtCursor(e,d,c){if(e.selectionStart||e.selectionStart=="0"){var b=e.selectionStart;var a=e.selectionEnd;e.value=e.value.substring(0,b)+d+e.value.substring(a,e.value.length);e.selectionStart=b+d.length-c}else{e.value+=d}e.selectionEnd=e.selectionStart;e.focus()}function insertSymbol(d,b,a){var c=document.getElementById(d);insertAtCursor(c,b,a)}function calcScore(b,f){var h=0,d,a;for(d=0;d<b;d++){var c=document.getElementById(f+d.toString());var e=document.getElementById("ans"+f+d.toString());a="False";if(c.checked==1){a="True"}if(a==c.value){h++;e.style.color="black"}else{e.style.color="red"}}var g=document.getElementById("f"+f);g.style.display="block";alert(YOUR_SCORE_IS+h+"/"+b)}function showFeedback(e,c){var d,f;for(d=0;d<e;d++){var j=document.getElementById("op"+c+d.toString());var h=document.getElementById("op"+c+d.toString()+"_0");var g=document.getElementById("op"+c+d.toString()+"_1");var a=document.getElementById("ans"+c+d.toString());f="False";if(j.checked==1){f="True"}if(f==j.value){g.style.display="block";h.style.display="none"}else{h.style.display="block";g.style.display="none"}}var b=document.getElementById("f"+c);b.style.display="block"}function detectQuickTime(){pluginFound=detectPlugin("QuickTime");return pluginFound}function detectReal(){pluginFound=detectPlugin("RealPlayer");return pluginFound}function detectFlash(){pluginFound=detectPlugin("Shockwave","Flash");return pluginFound}function detectDirector(){pluginFound=detectPlugin("Shockwave","Director");return pluginFound}function detectWindowsMedia(){pluginFound=detectPlugin("Windows Media");return pluginFound}function detectPlugin(){var d=detectPlugin.arguments;var c=false;if(navigator.plugins&&navigator.plugins.length>0){var b=navigator.plugins.length;for(var e=0;e<b;e++){var f=0;for(var a=0;a<d.length;a++){if((navigator.plugins[e].name.indexOf(d[a])>=0)||(navigator.plugins[e].description.indexOf(d[a])>=0)){f++}}if(f==d.length){c=true;break}}}return c}NOT_ATTEMPTED=0;WRONG=1;CORRECT=2;function onClozelangChange(ele){var ident=getClozelangIds(ele)[0];var instant=eval(document.getElementById("clozelangFlag"+ident+".instantMarking").value);if(instant){checkAndMarkClozelangWord(ele);var scorePara=document.getElementById("clozelangScore"+ident);scorePara.innerHTML=""}}function clozelangSubmit(a){showClozelangScore(a,1);toggleElementVisible("submit"+a);toggleClozelangFeedback(a)}function clozelangRestart(a){toggleClozelangFeedback(a);toggleClozelangAnswers(a,true);toggleElementVisible("restart"+a);toggleElementVisible("showAnswersButton"+a);toggleElementVisible("submit"+a)}function toggleClozelangAnswers(g,a){var h=true;var b=getCloseInputsCloze(g);if(!a){for(var d=0;d<b.length;d++){var c=b[d];if(getClozelangMark(c)!=2){h=false;break}}}if(h){clearClozelangInputs(g,b)}else{fillClozelangInputs(g,b)}var e=document.getElementById("clozelangScore"+g);e.innerHTML="";var f=document.getElementById("getScore"+g);if(f){f.disabled=!h}}function fillClozelangInputs(d,a){if(!a){var a=getCloseInputsCloze(d)}for(var c=0;c<a.length;c++){var b=a[c];b.value=getClozelangAnswer(b);markClozeWord(b,CORRECT);b.setAttribute("readonly","readonly")}}function clearClozelangInputs(d,a){if(!a){var a=getCloseInputsCloze(d)}for(var c=0;c<a.length;c++){var b=a[c];b.value="";markClozeWord(b,NOT_ATTEMPTED);b.removeAttribute("readonly")}}function checkAndMarkClozelangWord(b){var a=checkClozelangWord(b);if(a!=""){markClozelangWord(b,CORRECT);b.value=a;return CORRECT}else{if(!b.value){markClozelangWord(b,NOT_ATTEMPTED);return NOT_ATTEMPTED}else{markClozelangWord(b,WRONG);return WRONG}}}function markClozelangWord(a,b){switch(b){case 0:a.style.backgroundColor="";break;case 1:a.style.backgroundColor="red";break;case 2:a.style.backgroundColor="forestgreen";break}return b}function getClozelangMark(a){switch(a.style.backgroundColor){case"red":return 1;case"forestgreen":return 2;default:return 0}}function getClozelangAnswer(j){var f=getClozelangIds(j);var c=f[0];var g=f[1];var e=document.getElementById("clozelangAnswer"+c+"."+g);var a=e.innerHTML;a=decode64(a);a=unescape(a);result="";var h="X".charCodeAt(0);for(var d=0;d<a.length;d++){var b=a.charCodeAt(d);h^=b;result+=String.fromCharCode(h)}return result}function checkClozelangWord(ele){var guess=ele.value;var original=getClozelangAnswer(ele);var answer=original;var guess=ele.value;var ident=getClozelangIds(ele)[0];var strictMarking=eval(document.getElementById("clozelangFlag"+ident+".strictMarking").value);var checkCaps=eval(document.getElementById("clozelangFlag"+ident+".checkCaps").value);if(!checkCaps){guess=guess.toLowerCase();answer=original.toLowerCase()}if(guess==answer){return original}else{if(strictMarking||answer.length<=4){return""}else{var i=0;var j=0;var orders=[[answer,guess],[guess,answer]];var maxMisses=Math.floor(answer.length/6)+1;var misses=0;if(guess.length<=maxMisses){misses=Math.abs(guess.length-answer.length);for(i=0;i<guess.length;i++){if(answer.search(guess[i])==-1){misses+=1}}if(misses<=maxMisses){return answer}else{return""}}for(i=0;i<2;i++){var string1=orders[i][0];var string2=orders[i][1];while(string1){misses=Math.floor((Math.abs(string1.length-string2.length)+Math.abs(guess.length-answer.length))/2);var max=Math.min(string1.length,string2.length);for(j=0;j<max;j++){var a=string2.charAt(j);var b=string1.charAt(j);if(a!=b){misses+=1}if(misses>maxMisses){break}}if(misses<=maxMisses){return answer}string1=string1.substr(1)}}return""}}}function getClozelangIds(d){var e=d.id.slice(14);var a=e.indexOf(".");var c=e.slice(0,a);var b=e.slice(e.indexOf(".")+1);return[c,b]}function showClozelangScore(ident,mark){var showScore=eval(document.getElementById("clozelangFlag"+ident+".showScore").value);if(showScore){var score=0;var div=document.getElementById("clozelang"+ident);var inputs=getCloseInputsCloze(ident);for(var i=0;i<inputs.length;i++){var input=inputs[i];if(mark){var result=checkAndMarkClozelangWord(input)}else{var result=getClozelangMark(input)}if(result==2){score++}}var scorePara=document.getElementById("clozelangScore"+ident);scorePara.innerHTML=YOUR_SCORE_IS+score+"/"+inputs.length+"."}}function getCloseInputsCloze(c){var b=new Array;var a=document.getElementById("clozelang"+c);recurseFindClozelangInputs(a,c,b);return b}function recurseFindClozelangInputs(b,e,a){for(var c=0;c<b.childNodes.length;c++){var d=b.childNodes[c];if(d.id){if(d.id.search("clozelangBlank"+e)==0){a.push(d);continue}}if(d.hasChildNodes()){recurseFindClozelangInputs(d,e,a)}}}function toggleClozelangFeedback(b){var a=document.getElementById("clozelangVar"+b+".feedbackId");if(a){var c=a.value;toggleElementVisible(c)}}sfHover=function(){var c=document.getElementById("siteNav");if(c){var d=c.getElementsByTagName("LI");for(var a=0;a<d.length;a++){d[a].onmouseover=function(){this.className="sfhover"};d[a].onmouseout=function(){this.className="sfout"}}var b=c.getElementsByTagName("A");for(var a=0;a<b.length;a++){b[a].onfocus=function(){this.className+=(this.className.length>0?" ":"")+"sffocus";this.parentNode.className+=(this.parentNode.className.length>0?" ":"")+"sfhover";if(this.parentNode.parentNode.parentNode.nodeName=="LI"){this.parentNode.parentNode.parentNode.className+=(this.parentNode.parentNode.parentNode.className.length>0?" ":"")+"sfhover";if(this.parentNode.parentNode.parentNode.parentNode.parentNode.nodeName=="LI"){this.parentNode.parentNode.parentNode.parentNode.parentNode.className+=(this.parentNode.parentNode.parentNode.parentNode.parentNode.className.length>0?" ":"")+"sfhover"}}};b[a].onblur=function(){this.className=this.className.replace(new RegExp("( ?|^)sffocus\\b"),"");this.parentNode.className=this.parentNode.className.replace(new RegExp("( ?|^)sfhover\\b"),"");if(this.parentNode.parentNode.parentNode.nodeName=="LI"){this.parentNode.parentNode.parentNode.className=this.parentNode.parentNode.parentNode.className.replace(new RegExp("( ?|^)sfhover\\b"),"");if(this.parentNode.parentNode.parentNode.parentNode.parentNode.nodeName=="LI"){this.parentNode.parentNode.parentNode.parentNode.parentNode.className=this.parentNode.parentNode.parentNode.parentNode.parentNode.className.replace(new RegExp("( ?|^)sfhover\\b"),"")}}}}}};if(document.addEventListener){window.addEventListener("load",sfHover,false)}else{window.attachEvent("onload",sfHover)}var ie_media_replace=function(){var j=document.getElementsByTagName("OBJECT");var b=j.length;while(b--){if(j[b].type=="video/quicktime"||j[b].type=="audio/x-pn-realaudio-plugin"){if(typeof(j.classid)=="undefined"){j[b].style.display="none";var f="02BF25D5-8C17-4B23-BC80-D3488ABDDC6B";if(j[b].type=="audio/x-pn-realaudio-plugin"){f="CFCDAA03-8BE4-11CF-B84B-0020AFBBCCFA"}var d=j[b].height;var a=j[b].width;var c=j[b].data;var g=document.createElement("DIV");g.innerHTML='<object classid="clsid:'+f+'" data="'+c+'" width="'+a+'" height="'+d+'"><param name="controller" value="true" /><param name="src" value="'+c+'" /><param name="autoplay" value="false" /></object>';j[b].parentNode.insertBefore(g,j[b])}}}};if(navigator.appName=="Microsoft Internet Explorer"){if(document.addEventListener){window.addEventListener("load",ie_media_replace,false)}else{window.attachEvent("onload",ie_media_replace)}}var exe_idevices={imageGallery:{init:function(g){var f=document.getElementById(g);var a=f.getElementsByTagName("LI");var b=a.length;while(b--){var d=a[b].innerHTML;var c="rel=lightbox["+g+"]";if(d.indexOf(c)!=-1){nH=d.replace("rel=lightbox[",'class="lytebox" data-lyte-options="group:');nH=nH.replace("]",'"')}else{nH=d.replace('rel="lightbox[','class="lytebox" data-lyte-options="group:');nH=nH.replace("]","")}a[b].innerHTML=nH}}}};
