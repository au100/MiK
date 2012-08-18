/**
* Light box for resized images
* (c) Tale 2008
* http://www.taletn.com/
* Contributor(s):
* DavidIQ
* http://www.davidiq.com/
*/
var litebox_version=1.000001;var litebox_msie=0,litebox_firefox=0,litebox_opera=0,litebox_safari=0,litebox_mozilla=0;function litebox_detectBrowser(){var a=window.navigator.userAgent.match(/(^|\W)(MSIE)\s+(\d+)(\.\d+)?/);if(!a){a=window.navigator.userAgent.match(/(^|\W)(Firefox|Opera|Safari)\/(\d+)(\.\d+)?/);if(!a){a=window.navigator.userAgent.match(/(^|\W)(Mozilla)\/[\d.]+\s+\(.*?rv:(\d+)(\.\d+)?.*?\)/)}}if(!a||a.length<5){return}var b=parseFloat(a[3]+a[4]);a=a[2];if(a=="MSIE"){litebox_msie=b}else if(a=="Firefox"){litebox_firefox=b}else if(a=="Opera"){litebox_opera=b}else if(a=="Safari"){litebox_safari=b}else if(a=="Mozilla"){litebox_mozilla=b}}litebox_detectBrowser();if(typeof(window.litebox_oldStyle)=="undefined"){var litebox_oldStyle=(litebox_msie&&litebox_msie<7.0)}if(typeof(window.litebox_newStyle)=="undefined"){var litebox_newStyle=(litebox_msie>=7.0||litebox_firefox>=3.0||litebox_opera>=9.5)}document.writeln('<style type="text/css" media="screen, projection"><!--');document.writeln('.litebox-background { position: absolute; top: 0; left: 0; z-index: 98; background-color: black; filter: Alpha(Opacity=80); opacity: .80; }');document.writeln('span.litebox-image { position: '+(litebox_oldStyle?'absolute':'fixed')+'; z-index: 99; }');document.writeln('div.litebox-image { position: relative; border: 4px solid white; background-color: white; margin: 24px; }');document.writeln('img.litebox-image { border: none; '+(window.litebox_style?' '+litebox_style:'')+' }');if(window.litebox_zoomImg||window.litebox_closeImg){if(typeof(window.litebox_rtl)=="undefined"){litebox_rtl=document.getElementsByTagName("html");if(litebox_rtl&&litebox_rtl.length==1&&litebox_rtl[0]){litebox_rtl=(litebox_rtl[0].dir=="rtl")}else{litebox_rtl=false}}document.writeln('span.litebox-zoom { position: absolute; margin: 1px; }');if(window.litebox_zoomImg){document.writeln('img.litebox-zoom { margin-'+(litebox_rtl?'left':'right')+': 1px; border: none !important; cursor: pointer !important;'+(window.litebox_zoomStyle?' '+litebox_zoomStyle:'')+' }');if(window.litebox_zoomHover){document.writeln('img.litebox-zoom:hover { '+litebox_zoomHover+' }')}}if(window.litebox_closeImg){document.writeln('img.litebox-close { border: none !important; cursor: pointer !important;'+(window.litebox_closeStyle?' '+litebox_closeStyle:'')+' }');if(window.litebox_closeHover){document.writeln('img.litebox-close:hover { '+litebox_closeHover+' }')}}}document.writeln('--></style>');var litebox_background=null,litebox_image,litebox_zoom=null,litebox_closer=null;var litebox_maxWidth,litebox_maxHeight;var litebox_imgWidth,litebox_imgHeight;var litebox_zoomLevel;function litebox_unhide(e){if(litebox_image.parentNode.parentNode.style.visibility=="hidden"){litebox_image.parentNode.parentNode.style.visibility=""}}function litebox_close(e){litebox_background.style.display=litebox_image.parentNode.parentNode.style.display="none";return false}function litebox_zoomIn(){if(parseInt(litebox_image.style.width)>=litebox_imgWidth&&parseInt(litebox_image.style.height)>=litebox_imgHeight){return}litebox_image.style.width=litebox_imgWidth+"px";litebox_image.style.height=litebox_imgHeight+"px";var a=litebox_image.parentNode;var b=a.parentNode;var c=a.offsetWidth-a.clientWidth;a.style.overflow="auto";if(litebox_zoom){litebox_zoom.style.display="none"}if(litebox_closer&&litebox_newStyle){litebox_closer.style.position="fixed";litebox_closer.style.left=litebox_closer.style.top="auto";litebox_closer.style.display="none";if(typeof(window.setTimeout)!="undefined"){window.setTimeout("litebox_closer.style.display = '';",1)}else{litebox_closer.style.display=""}}a.style.left=a.style.top=b.style.height="";if(!litebox_oldStyle){a.style.width="auto"}else{a.style.width=(litebox_maxWidth-2*litebox_image.parentNode.offsetLeft-c)+"px";if(b.offsetWidth>litebox_maxWidth){a.style.width=(litebox_maxWidth-(b.offsetWidth-litebox_maxWidth))+"px"}}a.style.height=litebox_maxHeight+"px";if(b.offsetHeight>litebox_maxHeight){a.style.height=(litebox_maxHeight-(b.offsetHeight-litebox_maxHeight))+"px"}if(litebox_opera){a.style.width=a.clientWidth+"px"}if(a.clientWidth>litebox_imgWidth){a.style.width=litebox_imgWidth+"px";if(!litebox_opera){a.style.width=(litebox_imgWidth+(litebox_imgWidth-a.clientWidth))+"px"}a.style.left=Math.floor((b.offsetWidth-a.offsetWidth)/2-a.offsetLeft)+"px"}if(a.scrollLeft){a.scrollLeft=0}if(a.scrollTop){a.scrollTop=0}litebox_zoomLevel=100}function litebox_zoomClick(e){litebox_zoomIn();if(e&&typeof(e.stopPropagation)!="undefined"){e.stopPropagation()}else if(window.event){window.event.cancelBubble=true}return false}function litebox_init(){if(litebox_background){return}litebox_background=document.createElement("div");litebox_background.className="litebox-background";litebox_background.style.display="none";litebox_background.onclick=litebox_close;document.body.insertBefore(litebox_background,document.body.firstChild);var a=document.createElement("span");a.style.display="none";a.onclick=litebox_close;var b=document.createElement("div");litebox_image=document.createElement("img");if(window.litebox_alt){litebox_image.alt=litebox_image.title=litebox_alt}else{litebox_image.alt=""}litebox_image.className=b.className=a.className="litebox-image";litebox_image.onload=litebox_image.onerror=litebox_unhide;b.appendChild(litebox_image);a.appendChild(b);if(window.litebox_zoomImg||window.litebox_closeImg){var c=document.createElement("span");c.className="litebox-zoom";if(window.litebox_zoomImg){litebox_zoom=document.createElement("img");litebox_zoom.src=litebox_zoomImg;litebox_zoom.alt="";litebox_zoom.className="litebox-zoom";litebox_zoom.onclick=litebox_zoomClick;c.appendChild(litebox_zoom)}if(window.litebox_closeImg){litebox_closer=document.createElement("img");litebox_closer.src=litebox_closeImg;if(window.litebox_closeAlt){litebox_closer.alt=litebox_closer.title=litebox_closeAlt}else{litebox_closer.alt=""}litebox_closer.className="litebox-close";c.appendChild(litebox_closer)}b.insertBefore(c,litebox_image)}document.body.appendChild(a)}function litebox_calc(){if(document.documentElement&&document.documentElement.clientWidth&&document.documentElement.clientHeight&&!litebox_opera){litebox_maxWidth=document.documentElement.clientWidth;litebox_maxHeight=document.documentElement.clientHeight}else if(window.innerWidth&&window.innerHeight){litebox_maxWidth=window.innerWidth;litebox_maxHeight=window.innerHeight}else{litebox_maxWidth=document.body.clientWidth;litebox_maxHeight=document.body.clientHeight}var a=litebox_image.parentNode.parentNode;var b,top;if(!litebox_oldStyle){b=top=0}else if(typeof(window.pageXOffset)!="undefined"&&typeof(window.pageYOffset)!="undefined"){b=window.pageXOffset;top=window.pageYOffset}else if(document.documentElement&&document.documentElement.scrollTop&&typeof(document.documentElement.scrollLeft)!="undefined"){b=document.documentElement.scrollLeft;top=document.documentElement.scrollTop}else{b=document.body.scrollLeft;top=document.body.scrollTop}a.style.left=b+"px";a.style.top=top+"px";var c,height;if(typeof(window.scrollMaxX)!="undefined"&&typeof(window.scrollMaxY)!="undefined"){c=litebox_maxWidth+window.scrollMaxX;height=litebox_maxHeight+window.scrollMaxY}else if(document.body.scrollHeight>=document.body.offsetHeight){c=document.body.scrollWidth;height=document.body.scrollHeight}else if(document.all&&!litebox_opera){c=document.body.clientWidth;height=document.body.clientHeight;if(document.body.offsetHeight>height){height=document.body.offsetHeight}}else{c=document.body.offsetWidth;height=document.body.offsetHeight}if(c<litebox_maxWidth){c=litebox_maxWidth}if(height<litebox_maxHeight){height=litebox_maxHeight}litebox_background.style.width=c+"px";litebox_background.style.height=height+"px"}function litebox_show(a,b,c,d){litebox_init();litebox_calc();litebox_background.style.display="";var e=litebox_image.parentNode;var f=e.parentNode;if(!litebox_opera){f.style.visibility="hidden"}e.style.overflow="";litebox_image.src="";litebox_image.src=a;if(typeof(window.setTimeout)!="undefined"){window.setTimeout("litebox_unhide();",250)}litebox_image.style.width=e.style.width=(litebox_imgWidth=b)+"px";litebox_image.style.height=e.style.height=(litebox_imgHeight=c)+"px";if(litebox_closer&&litebox_newStyle){litebox_closer.style.position=litebox_closer.style.left=litebox_closer.style.top=""}f.style.display="";f.style.width=f.style.height=e.style.left=e.style.top="";var g=0;if(f.offsetWidth>litebox_maxWidth&&b){g=b;b-=f.offsetWidth-litebox_maxWidth+1;c=Math.round(c*b/g);litebox_image.style.width=e.style.width=b+"px";litebox_image.style.height=e.style.height=c+"px"}if(f.offsetHeight>litebox_maxHeight&&c){g=c;c-=f.offsetHeight-litebox_maxHeight;b=Math.round(b*c/g);litebox_image.style.width=e.style.width=b+"px";litebox_image.style.height=e.style.height=c+"px";if(f.offsetWidth>litebox_maxWidth&&b){g=b;b-=f.offsetWidth-litebox_maxWidth;c=Math.round(c*b/g);litebox_image.style.width=e.style.width=b+"px";litebox_image.style.height=e.style.height=c+"px"}}if(litebox_zoom)if(g){if(window.litebox_zoomAlt){litebox_zoom.alt=litebox_zoom.title=litebox_zoomAlt.replace(/%1\$d/,litebox_imgWidth).replace(/%2\$d/,litebox_imgHeight)}litebox_zoom.style.display=""}else{litebox_zoom.style.display="none"}f.style.width=litebox_maxWidth+"px";f.style.height=litebox_maxHeight+"px";e.style.left=Math.floor((f.offsetWidth-e.offsetWidth)/2-e.offsetLeft)+"px";e.style.top=Math.floor((f.offsetHeight-e.offsetHeight)/2-e.offsetTop)+"px";litebox_zoomLevel=d;if(d>=100){litebox_zoomIn()}}function litebox_loaded(e){litebox_image.onload=litebox_image.onerror=null;litebox_show(litebox_image.src,litebox_image.width,litebox_image.height,litebox_zoomLevel)}function litebox_error(e){litebox_image.onload=litebox_image.onerror=null;litebox_calc();litebox_show(litebox_image.src,Math.floor(litebox_maxWidth/2),Math.floor(litebox_maxHeight/2),litebox_zoomLevel)}function litebox_load(a,b){litebox_init();litebox_zoomLevel=b;var c=litebox_image.parentNode;var d=c.parentNode;if(!litebox_opera){d.style.visibility="hidden"}c.style.overflow="";litebox_image.style.width=litebox_image.style.height=c.style.width=c.style.height="";d.style.display="";litebox_image.onload=litebox_loaded;litebox_image.onerror=litebox_error;litebox_image.src="";litebox_image.src=a}function litebox_reshow(){litebox_close();litebox_show(litebox_image.src,litebox_imgWidth,litebox_imgHeight,litebox_zoomLevel)}function litebox_resize(e){if(!(litebox_background&&litebox_background.style.display!="none")){return}if(typeof(window.setTimeout)!="undefined"){window.setTimeout("litebox_reshow();",1)}else{litebox_reshow()}}function litebox_handleKey(e){if(litebox_background&&litebox_background.style.display!="none"){litebox_close(e)}return true}if(typeof(window.addEventListener)!="undefined"){window.addEventListener("resize",litebox_resize,false);document.addEventListener("keydown",litebox_handleKey,false)}else if(typeof(window.attachEvent)!="undefined"){window.attachEvent("onresize",litebox_resize);document.attachEvent("onkeydown",litebox_handleKey)}