// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.2
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery.extend(jQuery.easing,{easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a},easeOutBackCubic:function(e,f,a,j,i,g){var h=(f/=i)*f;return a+j*(-1.5*h*f*h+2*h*h+4*h*f+-9*h+5.5*f)},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a},easeOutExpo:function(e,f,a,h,g){return(f==g)?a+h:h*(-Math.pow(2,-10*f/g)+1)+a}});function ws_lines(d,l,m){var e=jQuery;var f=e(this);var i=d.noCanvas||!document.createElement("canvas").getContext;var k=d.width,r=d.height;var g=e("<div>").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).addClass("ws_effect ws_lines").appendTo(m);if(!i){var b=e("<canvas>").css({position:"absolute",left:0,top:0,width:"100%",height:"100%"}).appendTo(g);var o=b.get(0).getContext("2d")}var s=[["rgb(187,187,187)",0.1,0.3],["rgb(179,179,179)",0.9,0.8],["rgb(182,182,182)",0.68,0.4],["rgb(185,185,185)",0.25,0.4],["rgb(204,204,204)",0.11,0.7],["rgb(195,195,195)",0.18,0.1],["rgb(198,198,198)",0.4,0.2],["rgb(201,201,201)",0.55,-0.04],["rgb(211,211,211)",0,0.95],["rgb(214,214,214)",0.5,0.8],["rgb(217,217,217)",0.9,0.1]];var a=[[0.5,0.4,0.3,0.2,0.1,0,0.1,0.2,0.3,0.4,0.5],[0,0.1,0.2,0.3,0.4,0.5,0.4,0.3,0.2,0.1,0],[0,0.05,0.1,0.15,0.2,0.25,0.3,0.35,0.4,0.45,0.5],[0.5,0.45,0.4,0.35,0.3,0.25,0.2,0.15,0.1,0.05,0],[0.7,0.3,0,0.1,0.5,0.3,0.4,0.1,0.6,0.2,0],];var q=["from-top","from-bottom","width-from-center","height-from-center","fill-half-fill-full"];var j=["easeOutExpo","easeOutCubic","easeOutBackCubic","easeOutBack"];var p=[45,-45,0,180,90,-90];function n(h){h.save();h.setTransform(1,0,0,1,0,0);h.clearRect(0,0,k,r);h.restore()}function c(G,D,I,w,C,y,z){var u=k;var E=r;if(z==45||z==-45){u=E=Math.sqrt(k*k+r*r)}if(z==90||z==-90){u=r;E=k}var B=(u-k)/2;var v=(E-r)/2;n(G);for(var x=0,A=I.length;x<A;x++){var F=I[x]*(1-D);var h=Math.max(0,Math.min(1,D-F));G.beginPath();G.fillStyle=s[x][0];if(w){G.fillStyle=s[x][0].replace(/rgb/g,"rgba").replace(/\)/g,","+Math.min(D+0.1,1)+")")}var H={x:0,y:0,w:0,h:0};switch(C){case"from-top":if(y&&e.easing[y]){h=e.easing[y](1,h,0,1,1,1)}H.w=Math.ceil(0.5+u/A);H.h=E;H.x=(A-x-1)*u/A-B;H.y=-1.5*E*(1-h)-v;break;case"from-bottom":if(y&&e.easing[y]){h=e.easing[y](1,h,0,1,1,1)}H.w=Math.ceil(0.5+u/A);H.h=E;H.x=(A-x-1)*u/A-B;H.y=1.5*E*(1-h)-v;break;case"width-from-center":if(y&&e.easing[y]){h=e.easing[y](1,h,0,1,1,1)}H.w=Math.ceil(0.5+u/A)*h;H.h=E;H.x=(A-x-1)*u/A+(1-h)*u/A/2-B;H.y=-v;break;case"height-from-center":if(y&&e.easing[y]){h=e.easing[y](1,h,0,1,1,1)}H.w=Math.ceil(0.5+u/A);H.h=E*h;H.x=(A-x-1)*u/A-B;H.y=(1-h)*E/2-v;break;case"fill-half-fill-full":if(h<0.5){if(y&&e.easing[y]){h=e.easing[y](0.5,h,0,0.5,0.5,0.5)}}H.w=Math.ceil(0.5+u/A);H.h=E*h;H.x=(A-x-1)*u/A-B;H.y=(1-h)*E/2-v;break}G.fillRect(H.x,H.y,H.w,H.h)}}this.go=function(C,x){if(i){m.find(".ws_list").css("transform","translate3d(0,0,0)").stop(true).animate({left:(C?-C+"00%":(/Safari/.test(navigator.userAgent)?"0%":0))},d.duration,"easeInOutExpo",function(){f.trigger("effectEnd")})}else{k=m.width();r=m.height();var w=a[Math.floor(Math.random()*(a.length))];var E=a[Math.floor(Math.random()*(a.length))];b.attr({width:k,height:r});var A=l.get(x);for(var y=0,B=s.length;y<B;y++){var v=Math.abs(s[y][1]),h=Math.abs(s[y][2]);s[y][0]=t(A,{x:v*k,y:h*r,w:2,h:2})||s[y][0]}var D=q[Math.floor(Math.random()*(q.length))];var z=j[Math.floor(Math.random()*(j.length))];var u=p[Math.floor(Math.random()*(p.length))];o.translate(k/2,r/2);o.rotate(u*Math.PI/180);o.translate(-k/2,-r/2);wowAnimate(function(F){c(o,F,w,true,D,z,u)},0,1,d.duration/2,function(){m.find(".ws_list").css({left:(C?-C+"00%":(/Safari/.test(navigator.userAgent)?"0%":0))});D=q[Math.floor(Math.random()*(q.length))];z=j[Math.floor(Math.random()*(j.length))];wowAnimate(function(F){c(o,1-F,E,false,D,z,u)},0,1,d.duration/2,d.duration*0.15,function(){n(o);f.trigger("effectEnd")})})}};function t(D,u){u=u||{};var F=1,x=u.exclude||[],C;var z=document.createElement("canvas"),w=z.getContext("2d"),v=z.width=D.naturalWidth,J=z.height=D.naturalHeight;w.drawImage(D,0,0,D.naturalWidth,D.naturalHeight);try{C=w.getImageData(u.x?u.x:0,u.y?u.y:0,u.w?u.w:D.width,u.h?u.h:D.height)["data"]}catch(E){return false}var y=(u.w?u.w:D.width*u.h?u.h:D.height)||C.length,A={},H="",G=[],h={dominant:{name:"",count:0}};var B=0;while(B<y){G[0]=C[B];G[1]=C[B+1];G[2]=C[B+2];H=G.join(",");if(H in A){A[H]=A[H]+1}else{A[H]=1}if(x.indexOf(["rgb(",H,")"].join(""))===-1){var I=A[H];if(I>h.dominant.count){h.dominant.name=H;h.dominant.count=I}}B+=F*4}return["rgb(",h.dominant.name,")"].join("")}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.2
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery.extend(jQuery.easing,{easeOutBackCubic:function(e,f,a,j,i,g){var h=(f/=i)*f;return a+j*(-1.5*h*f*h+2*h*h+4*h*f+-9*h+5.5*f)}});function ws_dribbles(p,k,a){var e=jQuery;var j=e(this);var n=p.noCanvas||!document.createElement("canvas").getContext;var m=p.width,f=p.height;var i=e("<div>").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).addClass("ws_effect ws_dribbles").appendTo(a);if(!n){var c=e("<canvas>").css({position:"absolute",left:0,top:0,width:"100%",height:"100%"}).appendTo(i);var o=c.get(0).getContext("2d")}var l=[["#bbbbbb",0.1,0.3,0.18],["#b3b3b3",0.9,0.8,0.15],["#b6b6b6",0.68,0.4,0.2],["#b9b9b9",0.25,0.4,0.15],["#cccccc",0.11,0.7,0.15],["#c3c3c3",0.18,0.1,0.15],["#c6c6c6",0.4,0.2,0.15],["#c9c9c9",0.55,-0.04,0.18],["#d3d3d3",0,0.95,0.13],["#d6d6d6",0.5,0.8,0.22],["#d9d9d9",0.9,0.1,0.18],["#eeeeee",0.3,0.9,0.18],["#e3e3e3",0.93,0.5,0.14],["#e6e6e6",0.7,0.9,0.15]];var d=[[[0.1,0.3,0,1],[0.9,0.8,0.15,0.85],[0.68,0.4,0,0.9],[0.25,0.4,0.21,0.79],[0.11,0.7,0.3,0.7],[0.18,0.1,0.45,0.55],[0.4,0.2,0,0.75],[0.55,-0.04,0.48,0.52],[0,0.95,0.21,0.79],[0.5,0.8,0.1,0.9],[0.9,0.1,0.25,0.75],[0.3,0.9,0.18,0.82],[0.93,0.5,0.4,0.6],[0.7,0.9,0.13,0.87]],[[-0.3,-0.2,0.06,1],[-0.1,-0.3,0.12,1],[-0.2,-0.5,0,1],[-0.1,-0.3,0.24,1],[-0.3,-0.4,0.4,1],[-0.5,-0.1,0.76,1],[-0.2,-0.1,0.62,1],[-0.3,-0.3,0.48,1],[-0.4,-0.1,0.05,1],[-0.5,-0.2,0.6,1],[-0.3,-0.25,0.75,1],[-0.1,-0.4,0.3,1],[-0.2,-0.35,0.95,1],[-0.15,-0.25,0.2,1]],[[1.3,1.2,0.06,1],[1.1,1.3,0.12,1],[1.2,1.5,0,1],[1.1,1.3,0.24,1],[1.3,1.4,0.4,1],[1.5,1.1,0.76,1],[1.2,1.1,0.62,1],[1.3,1.3,0.48,1],[1.4,1.1,0.05,1],[1.5,1.2,0.6,1],[1.3,1.25,0.75,1],[1.1,1.4,0.3,1],[1.2,1.35,0.95,1],[1.15,1.25,0.2,1]],[[0.1,1.3,0,1],[0.9,1.34,0.15,0.85],[0.68,1.23,0,0.9],[0.25,1.5,0.21,0.79],[0.11,1.2,0.3,0.7],[0.18,1.4,0.16,0.84],[0.4,1.17,0,0.75],[0.55,1.2,0,0.52],[0,1.5,0.21,0.79],[0.5,1.45,0,0.9],[0.9,1.34,0.25,0.75],[0.3,1.6,0.18,0.82],[0.93,1.2,0.09,0.91],[0.7,1.15,0.13,0.87]],[[0.1,-0.3,0,1],[0.9,-0.34,0.15,0.85],[0.68,-0.23,0,0.9],[0.25,-0.5,0.21,0.79],[0.11,-0.2,0.3,0.7],[0.18,-0.4,0.16,0.84],[0.4,-0.17,0,0.75],[0.55,-0.2,0,0.52],[0,-0.5,0.21,0.79],[0.5,-0.45,0,0.9],[0.9,-0.34,0.25,0.75],[0.3,-0.6,0.18,0.82],[0.93,-0.2,0.09,0.91],[0.7,-0.15,0.13,0.87]],[[-0.2,-0.1,0,1],[1.3,1.1,0.15,0.85],[0.48,1.4,0,0.9],[1.2,1.6,0.21,0.79],[1.11,-0.15,0.3,0.7],[0.28,1.3,0.16,0.84],[-0.1,-0.4,0,0.75],[0.15,1.3,0,0.52],[-0.5,0.85,0.21,0.79],[-0.2,0.7,0,0.9],[1.4,0.2,0.25,0.75],[1.1,1.5,0.18,0.82],[-0.43,-0.2,0.09,0.91],[0.7,1.5,0.13,0.87]]];function b(y,w,t,q){y.clearRect(0,0,m,f);for(var r=0,v=t.length;r<v;r++){var s=2-t[r][3];var x=t[r][2]*(1-w);var h=Math.max(0,Math.min(1,w*s-x));if(q&&e.easing[q]){h=e.easing[q](1,h,0,1,1,1)}var u=m;if(m/f<=1.8&&m/f>0.7){u*=2}else{if(m/f<=0.7){u=f*2}}y.beginPath();y.arc((t[r][0]+(l[r][1]-t[r][0])*h)*m,(t[r][1]+(l[r][2]-t[r][1])*h)*f,l[r][3]*h*u,0,2*Math.PI,false);y.fillStyle=l[r][0];y.fill()}}this.go=function(x,s){if(n){a.find(".ws_list").css("transform","translate3d(0,0,0)").stop(true).animate({left:(x?-x+"00%":(/Safari/.test(navigator.userAgent)?"0%":0))},p.duration,"easeInOutExpo",function(){j.trigger("effectEnd")})}else{m=a.width();f=a.height();var u=Math.floor(Math.random()*(d.length));var y=d[u];var r=d[Math.floor(Math.random()*(d.length))];c.attr({width:m,height:f});var v=k.get(u==0?s:x);for(var t=0,w=l.length;t<w;t++){var q=Math.abs(l[t][1]),h=Math.abs(l[t][2]);l[t][0]=g(v,{x:q*m,y:h*f,w:2,h:2})||l[t][0]}wowAnimate(function(z){b(o,z,y,"easeOutBackCubic")},0,1,p.duration/2,function(){a.find(".ws_list").css({left:(x?-x+"00%":(/Safari/.test(navigator.userAgent)?"0%":0))});wowAnimate(function(z){b(o,1-z,r,"easeOutBackCubic")},0,1,p.duration/2,function(){o.clearRect(0,0,m,f);j.trigger("effectEnd")})})}};function g(z,q){q=q||{};var B=1,t=q.exclude||[],y;var v=document.createElement("canvas"),s=v.getContext("2d"),r=v.width=z.naturalWidth,F=v.height=z.naturalHeight;s.drawImage(z,0,0,z.naturalWidth,z.naturalHeight);try{y=s.getImageData(q.x?q.x:0,q.y?q.y:0,q.w?q.w:z.width,q.h?q.h:z.height)["data"]}catch(A){return false}var u=(q.w?q.w:z.width*q.h?q.h:z.height)||y.length,w={},D="",C=[],h={dominant:{name:"",count:0}};var x=0;while(x<u){C[0]=y[x];C[1]=y[x+1];C[2]=y[x+2];D=C.join(",");if(D in w){w[D]=w[D]+1}else{w[D]=1}if(t.indexOf(["rgb(",D,")"].join(""))===-1){var E=w[D];if(E>h.dominant.count){h.dominant.name=D;h.dominant.count=E}}x+=B*4}return["rgb(",h.dominant.name,")"].join("")}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.2
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery.extend(jQuery.easing,{easeInBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*(f/=h)*f*((g+1)*f-g)+a},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a},easeInBackQ:function(e,f,a,j,i,g){var h=(f/=i)*f;return a+j*h*(4*f*h-8*h+8*f-3)},easeOutBackQ:function(e,f,a,j,i,g){var h=(f/=i)*f;return a+j*(4*h*f*h-12*h*h+16*h*f-13*h+6*f)},easeInBackQ2:function(e,f,a,j,i,g){var h=(f/=i)*f;return a+j*h*(1.5*f*h-2.5*h+5*f-3)},easeOutBackQ2:function(e,f,a,j,i,g){var h=(f/=i)*f;return a+j*(1.5*h*f*h-5*h*h+10*h*f-12*h+6.5*f)}});function ws_brick(f,s,g){var h=jQuery,n=h(this),a=f.cols||4,r=f.rows||3,H=2.5,c=2,v=f.perspective||2000,u=g.find(".ws_list"),G=[],b=30,x={},o=h("<div>").addClass("ws_effect ws_brick").appendTo(g),q=f.support.transform&&f.support.transition&&f.support.perspective,p=/Safari/.test(navigator.userAgent)&&!/Chrome/.test(navigator.userAgent),m=/Firefox/.test(navigator.userAgent);var y=[{zIndex:0,rotateX:360,rotateZ:-360,rotateY:180,halfScale:0.5,halfLeft:0.7,halfTop:0.7,delay:0.36},{zIndex:1,rotateX:-360,rotateZ:360,rotateY:180,halfScale:0.5,halfLeft:0.2,halfTop:0.4,delay:0.81},{zIndex:1,rotateX:360,rotateZ:-360,rotateY:-180,halfScale:0.5,halfLeft:-0.2,halfTop:0.4,delay:0.45},{zIndex:0,rotateX:-360,rotateZ:360,rotateY:-180,halfScale:0.5,halfLeft:-0.7,halfTop:0.7,delay:0.63},{zIndex:1,rotateX:-360,rotateZ:360,rotateY:-180,halfScale:0.5,halfLeft:0.7,halfTop:0,delay:0.54},{zIndex:2,rotateX:360,rotateZ:-360,rotateY:180,halfScale:0.5,halfLeft:0.2,halfTop:0,delay:0.38},{zIndex:2,rotateX:360,rotateZ:-360,rotateY:-180,halfScale:0.5,halfLeft:-0.2,halfTop:0,delay:0},{zIndex:1,rotateX:-360,rotateZ:360,rotateY:180,halfScale:0.5,halfLeft:-0.7,halfTop:0,delay:0.72},{zIndex:0,rotateX:-360,rotateZ:360,rotateY:180,halfScale:0.5,halfLeft:0.7,halfTop:-0.7,delay:1},{zIndex:1,rotateX:-360,rotateZ:360,rotateY:-180,halfScale:0.5,halfLeft:0.2,halfTop:-0.4,delay:0.7},{zIndex:1,rotateX:360,rotateZ:-360,rotateY:180,halfScale:0.5,halfLeft:-0.2,halfTop:-0.4,delay:0.57},{zIndex:0,rotateX:360,rotateZ:-360,rotateY:-180,halfScale:0.5,halfLeft:-0.7,halfTop:-0.7,delay:0.9},];o.css({position:"absolute",top:0,left:0,width:g.width(),height:g.height(),transform:"translate3d(0,0,0)",transformOrigin:(f.width/2)+"px "+(f.height/2)+"px 0",perspective:v}).hide();for(var l=0;l<a*r;l++){var B=l%a,A=Math.floor(l/a);var E=h("<div>").css({position:"absolute",left:100*B/a+"%",top:100*A/r+"%",outline:"1px solid transparent",transformStyle:(p||m)?"flat":"preserve-3d",zIndex:y[l].zIndex,overflow:q?"visible":"hidden"}).appendTo(o),z=h("<div>").css({transform:"scale(1) rotateX(0) rotateY(0) translate3d(0,0,0)",outline:"1px solid transparent",transformStyle:"preserve-3d"}).appendTo(E),w=h("<div>").addClass("ws_front_image").appendTo(z),D=q?h("<div>").addClass("ws_back_image").appendTo(z):0;w.css({position:"absolute",width:"100%",height:"100%",overflow:"hidden",backfaceVisibility:"hidden",transform:"translate3d(0,0,0)"}).append(h("<img>").css({left:-B*100+"%",top:-A*100+"%",position:"absolute",outline:"1px solid transparent"}));if(q){D.css({position:"absolute",width:"100%",height:"100%",overflow:"hidden",backfaceVisibility:"hidden",transform:"rotateY(180deg) translate3d(0,0,"+b+"px)"}).append(h("<img>").css({left:-B*100+"%",top:-A*100+"%",position:"absolute",outline:"1px solid transparent"}))}var t={position:"absolute",outline:"1px solid transparent"};G[l]={part:z,front:w,back:D,wrapper:E,leftEdge:q?h("<div>").addClass("ws_left_edge").css(t).appendTo(z):0,rightEdge:q?h("<div>").addClass("ws_right_edge").css(t).appendTo(z):0,topEdge:q?h("<div>").addClass("ws_top_edge").css(t).appendTo(z):0,bottomEdge:q?h("<div>").addClass("ws_bottom_edge").css(t).appendTo(z):0}}function C(N){var J={},L=s.get(N),O=f.width/a,P=f.height/r;for(var K=0;K<a*r;K++){var N=K%a,M=Math.floor(K/a);J[K]=F(L,{x:N*O,y:M*P,w:O,h:P})}return J}function I(J,M,j,K,L){for(var i in M){if(typeof G[i]!=="function"){M[i].topEdge.css({width:K,height:J,background:j[i],transform:"rotateX(90deg) translate3d(0,-"+J/2+"px,"+J/2+"px)"});M[i].bottomEdge.css({width:K,height:J,background:j[i],transform:"rotateX(90deg) translate3d(0,-"+J/2+"px,"+(-L+J/2)+"px)"});M[i].leftEdge.css({width:J,height:L,background:j[i],transform:"rotateY(90deg) translate3d("+J/2+"px,0,-"+J/2+"px)"});M[i].rightEdge.css({width:J,height:L,background:j[i],transform:"rotateY(90deg) translate3d("+J/2+"px,0,"+(K-J/2)+"px)"})}}}function e(J,K){var i=0;for(var j in J){if(typeof J[j]!=="function"){(function(L,M){wowAnimate(function(O){var U,S,T,R="",N={};if(O<=0.5){U=h.easing.easeInBack(1,O*2,0,1,1,1).toFixed(3);S=h.easing.easeInBackQ(1,O*2,0,1,1,1).toFixed(3);T=h.easing.easeInBackQ2(1,O*2,0,1,1,1).toFixed(3);M[L].back.css("backfaceVisibility","hidden")}else{U=h.easing.easeOutBack(1,(O-0.5)*2,0,1,1,1).toFixed(3);S=h.easing.easeOutBackQ(1,(O-0.5)*2,0,1,1,1).toFixed(3);T=h.easing.easeOutBackQ2(1,(O-0.5)*2,0,1,1,1).toFixed(3);M[L].back.css("backfaceVisibility","visible")}for(var P in M[L].animate[O<=0.5?"half":"end"]){var V=M[L].animate[O<=0.5?"begin":"half"][P]||0,Q=M[L].animate[O<=0.5?"half":"end"][P]||0;if(typeof Q!=="object"){if(P==="scale"||P==="rotateX"||P==="rotateY"){Q=V+(Q-V)*S}else{if(P==="left"||P==="top"){Q=V+(Q-V)*T}else{Q=V+(Q-V)*U}}}if(P==="rotateX"||P==="rotateY"||P==="rotateZ"){R+=P+"("+Q+"deg) "}else{if(P==="scale"){R+=P+"("+Q+") "}else{if(P==="translate3d"){R+=P+"("+(V[0]+(Q[0]-V[0])*U).toFixed(3)+"px,"+(V[1]+(Q[1]-V[1])*U).toFixed(3)+"px,"+(V[2]+(Q[2]-V[2])*U).toFixed(3)+"px) "}else{N[P]=Q}}}}M[L].wrapper.css({transform:"translate3d("+(N.left?N.left:0).toFixed(3)+"px,"+(N.top?N.top:0).toFixed(3)+"px,0)"});delete N.left;delete N.top;if(R){N.transform=R}M[L].part.css(N)},0,1,M[L].animate.duration,M[L].animate.delay,function(){i++;if(i==M.length&&K){K()}})}(j,J))}}}function k(aa,M,N,P){var X=g.width(),W=g.height(),V=X/a,U=W/r,L=(f.duration*0.4)>1000?1000:(f.duration*0.4),K=f.duration*0.6,Q=[0,0];I(b,aa,x[M],V,U);o.css({transformOrigin:(X/2)+"px "+(W/2)+"px 0",width:X,height:W});for(var S in aa){if(typeof aa[S]!=="function"){var J=y[S].delay*L;if(Q[1]<=J){Q[0]=S;Q[1]=J}aa[S].part[0].ws_delay=[J,0]}}aa[Q[0]].part[0].ws_delay[1]=1;for(var S in aa){if(typeof aa[S]!=="function"){var R=aa[S],Z=S%a,Y=Math.floor(S/a),T=X*Z/a,O=W*Y/r;R.animate={delay:R.part[0].ws_delay[0],duration:K,begin:{left:0,top:0,width:V,height:U,scale:1,rotateX:0,rotateY:0,translate3d:[0,0,p?b:0]},half:{left:y[S].halfLeft*V,top:y[S].halfTop*U,scale:y[S].halfScale,rotateX:y[S].rotateX/2,rotateY:y[S].rotateY/2,translate3d:[0,0,(p?1:0.5)*b]},end:{left:0,top:0,scale:1,rotateX:y[S].rotateX,rotateY:y[S].rotateY,translate3d:[0,0,b]}};R.front.find("img").css(N);R.back.css("backfaceVisibility","hidden").find("img").css(N);R.part.css({width:R.animate.begin.width,height:R.animate.begin.height,left:R.animate.begin.left,top:R.animate.begin.top})}}e(aa,P)}var d;this.go=function(X,M){if(d){return M}o.show();var K=h(s.get(M));K={width:K.width(),height:K.height(),marginTop:parseFloat(K.css("marginTop")),marginLeft:parseFloat(K.css("marginLeft"))};if(q){G[0].front.find("img").on("load",function(){u.hide()});for(var N in G){if(typeof G[N]!=="function"){G[N].front.find("img").attr("src",s.get(M).src);G[N].back.find("img").attr("src",s.get(X).src)}}if(!x[M]){x[M]=C(M)}d=new k(G,M,K,function(){u.show();n.trigger("effectEnd");o.hide();for(var i in G){if(typeof G[i]!=="function"){G[i].part.css({transition:"",transform:"rotateX(0) rotateY(0) translate3d(0,0,0)"})}}d=0})}else{d=true;function Y(j,i){return Math.random()*(i-j+1)+j}var T=g.width(),W=g.height(),S=T/a,V=W/r,L=T-S*(a-1),U=W-V*(r-1);o.css({width:T,height:W});var J=0;for(var N in G){var R=N%a,P=Math.floor(N/a);G[N].front.find("img").attr("src",s.get(X).src).css(K);var Z=f.duration*(1-Math.abs((c*H-R*P)/(2*r*a)));var Q=Y(-1,1)>0?1:-1;var O=Y(-1,1)>0?1:-1;G[N].wrapper.css({width:S,height:V});G[N].part.css({position:"absolute",top:Q*V,left:O*S,opacity:0,width:S,height:V}).animate({top:0,left:0,opacity:1},Z,function(){J++;if(J==r*a){u.stop(1,1);d=false;n.trigger("effectEnd")}})}}};function F(S,J){J=J||{};var U=1,M=J.exclude||[],R;var O=document.createElement("canvas"),L=O.getContext("2d"),K=O.width=S.naturalWidth,Y=O.height=S.naturalHeight;L.drawImage(S,0,0,S.naturalWidth,S.naturalHeight);try{R=L.getImageData(J.x?J.x:0,J.y?J.y:0,J.w?J.w:S.width,J.h?J.h:S.height)["data"]}catch(T){console.log("error:unable to access image data: "+T);return"#ccc"}var N=(J.w?J.w:S.width*J.h?J.h:S.height)||R.length,P={},W="",V=[],j={dominant:{name:"",count:0}};var Q=0;while(Q<N){V[0]=R[Q];V[1]=R[Q+1];V[2]=R[Q+2];W=V.join(",");if(W in P){P[W]=P[W]+1}else{P[W]=1}if(M.indexOf(["rgb(",W,")"].join(""))===-1){var X=P[W];if(X>j.dominant.count){j.dominant.name=W;j.dominant.count=X}}Q+=U*4}return["rgb(",j.dominant.name,")"].join("")}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.2
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_seven(m,A,o){var p=jQuery;var w=p(this);var n=m.distance||5;var d=m.cols;var z=m.rows;var a=m.duration*2;var q=m.blur||50;var E=o.find(".ws_list");var x=p("<div>").css({position:"absolute",top:0,left:0,width:"100%",height:"100%"});var c=x.clone().css("overflow","hidden");x.addClass("ws_effect ws_seven");var t=!m.noCanvas&&!window.opera&&!!document.createElement("canvas").getContext;var l;var e=p("<div>").addClass("ws_parts").css({position:"absolute",width:"100%",height:"100%",left:0,top:0,zIndex:8,transform:"translate3d(0,0,0)"});var B=p("<div>").addClass("ws_zoom").css({position:"absolute",width:"100%",height:"100%",top:0,left:0,zIndex:2,transform:"translate3d(0,0,0)"});x.append(e,B,c).appendTo(o);var f={t:p(window).scrollTop(),l:p(window).scrollLeft(),w:p(window).width(),h:p(window).height()};var D=Math.max((m.width||e.width())/(m.height||e.height())||3,3);d=d||Math.round(D<1?3:3*D);z=z||Math.round(D<1?3/D:3);var J=[];var y=[];for(var v=0;v<d*z;v++){var H=v%d;var G=Math.floor(v/d);p(J[v]=p("<div>")[0]).css({position:"absolute",overflow:"hidden",transform:"translate3d(0,0,0)"}).appendTo(e).append(p("<img>").css({position:"absolute",transform:"translate3d(0,0,0)"}));p(y[v]=p("<div>")[0]).css({position:"absolute",overflow:"hidden",transform:"translate3d(0,0,0)"}).appendTo(B).append(p("<img>").css({position:"absolute",transform:"translate3d(0,0,0)"}))}J=p(J);y=p(y);jQuery.extend(jQuery.easing,{easeOutQuart:function(j,K,i,M,L){return -M*((K=K/L-1)*K*K*K-1)+i},easeInExpo:function(j,K,i,M,L){return(K==0)?i:M*Math.pow(2,10*(K/L-1))+i},easeInCirc:function(j,K,i,M,L){return -M*(Math.sqrt(1-(K/=L)*K)-1)+i}});function s(j,i){return Math.abs((i%2?1:0)+((i-i%2)/2)-j)/i}function I(M,L,N,i){var K=(L>=i)?(i)/(L):1;var j=(M>=N)?(N)/(M):1;return{l:j,t:K,m:Math.min(j,K)}}function k(j,L){var K=0;for(var i in j){(function(N,O){var M=O[N];wowAnimate(M.item,M.begin,M.end,M.duration,M.delay,M.easing,function(){if(M.callback){M.callback()}K++;if(K==O.length&&L){L()}})}(i,j))}}function u(U,i,j,M,W){var Q=e.width(),S=e.height(),T=n*Q/d,O=n*S/z,P=a*(M?4:5)/(d*z),L=M?"easeInExpo":"easeOutQuart";var K=f.h+f.t-S/z,R=f.w+f.l-Q/d,X=e.offset().top+e.height(),N=e.offset().left+e.width();if(K<X){K=X}if(R<N){R=N}var V=[];p(U).each(function(af){var ac=af%d,Z=Math.floor(af/d),ad=a*0.2*(s(ac,d)*45+Z*4)/(d*z),ab=e.offset().left+f.l+T*ac-Q*n/2+T,ae=e.offset().top+f.t+O*Z-S*n/2+O,Y=I(ab,ae,R,K);if(m.support.transform){var ag={opacity:1,translate:[Q*ac/d,S*Z/z,0],scale:1,width:Q/d,height:S/z,zIndex:Math.ceil(100-s(ac,d)*100)},aj={opacity:0,translate:[(T*ac-Q*n/2.115)*Y.l,(O*Z-S*n/2.115)*Y.t,0],scale:n*Y.m,width:Q/d,height:S/z,zIndex:Math.ceil(100-s(ac,d)*100)};p(this).find("img").css({transform:"translate3d("+(-Q*ac/d+j.marginLeft)+"px,"+(-S*Z/z+j.marginTop)+"px,0px)",width:j.width,height:j.height})}else{var ag={opacity:1,left:Q*ac/d,top:S*Z/z,width:Q/d,height:S/z,zIndex:Math.ceil(100-s(ac,d)*100)},aj={opacity:0,left:(T*ac-Q*n/2)*Y.l,top:(O*Z-S*n/2)*Y.t,width:T*Y.m,height:O*Y.m},ai={left:-(Q*ac/d)+j.marginLeft,top:-(S*Z/z)+j.marginTop,width:j.width,height:j.height},ah={left:-n*(Q/d*ac-j.marginLeft)*Y.m,top:-n*(S/z*Z-j.marginTop)*Y.m,width:n*j.width*Y.m,height:n*j.height*Y.m}}if(!M){var aa=ag;ag=aj;aj=aa;aa=ai;ai=ah;ah=aa}V.push({item:p(this).show(),begin:ag,end:aj,easing:L,delay:ad,duration:P,callback:M?function(){this.item.hide()}:0});if(ai){V.push({item:p(this).find("img"),begin:ai,end:ah,easing:L,delay:ad,duration:P})}});if(M){p(i).each(function(ac){var Z=ac%d;var Y=Math.floor(ac/d);var aa=a*0.2+a*0.15*(s(Z,d)*35+Y*4)/(d*z);var ab=a*4/(d*z);if(m.support.transform){var ad={opacity:0,translate:[Q/2,S/2,0],scale:0,width:Q/d,height:S/z,zIndex:Math.ceil(100-s(Z,d)*100)},af={opacity:1,translate:[Q*Z/d,S*Y/z,0],scale:1,width:Q/d,height:S/z,zIndex:Math.ceil(100-s(Z,d)*100)};p(this).find("img").css({transform:"translate3d("+(-Q*Z/d+j.marginLeft)+"px,"+(-S*Y/z+j.marginTop)+"px,0px)",width:j.width,height:j.height})}else{var ad={left:Q/2,top:S/2,width:0,height:0,zIndex:Math.ceil(100-s(Z,d)*100)},af={left:Q*Z/d,top:S*Y/z,width:Q/d,height:S/z},ag={left:0,top:0,width:0,height:0},ae={left:-Q*Z/d+j.marginLeft,top:-S*Y/z+j.marginTop,width:j.width,height:j.height}}V.push({item:p(this),begin:ad,end:af,easing:"easeOutBack",delay:aa,duration:ab});if(ag){V.push({item:p(this).find("img"),begin:ag,end:ae,easing:"easeOutBack",delay:aa,duration:ab})}});B.delay(a*0.1).animate({opacity:1},a*0.2,"easeInCirc")}k(V,W);return{stop:function(){W()}}}var h;this.go=function(i,j,M){if(h){return j}if(M==undefined){M=(j==0&&i!=j+1)||(i==j-1)?false:true}f.t=p(window).scrollTop();f.l=p(window).scrollLeft();f.w=p(window).width();f.h=p(window).height();var N=p(A.get(j));N={width:N.width(),height:N.height(),marginTop:parseFloat(N.css("marginTop")),marginLeft:parseFloat(N.css("marginLeft"))};J.find("img").attr("src",A.get(M?j:i).src);y.find("img").attr("src",A.get(i).src);e.show();if(M){B.show()}var L=0;if(M){if(t){try{document.createElement("canvas").getContext("2d").getImageData(0,0,1,1)}catch(K){t=0}l='<canvas width="'+x.width+'" height="'+x.height+'"/>';l=p(l).css({"z-index":1,position:"absolute",left:0,top:0}).css(N).appendTo(c);L=F(p(A.get(j)),N,q,l.get(0))}if(!t||!L){t=0;L=F(p(A.get(j)),N,8);if(l){l.remove();l=0}}}h=new u(J,y,N,M,function(){w.trigger("effectEnd");e.hide();B.hide();if(l){l.remove()}else{if(L){L.remove()}}h=0})};function F(P,K,O,L){var S=(parseInt(P.parent().css("z-index"))||0)+1;if(t){var V=L.getContext("2d");V.drawImage(P.get(0),0,0,K.width,K.height);if(!b(V,0,0,L.width,L.height,O)){return 0}return p(L)}var W=p("<div></div>").css({position:"absolute","z-index":S,left:0,top:0,overflow:"hidden"}).css(K).appendTo(c);var U=(Math.sqrt(5)+1)/2;var M=1-U/2;for(var N=0;M*N<O;N++){var Q=Math.PI*U*N;var j=(M*N+1);var T=j*Math.cos(Q);var R=j*Math.sin(Q);p(document.createElement("img")).attr("src",P.attr("src")).css({opacity:1/(N/1.8+1),position:"absolute","z-index":S,left:Math.round(T)+"px",top:Math.round(R)+"px",width:"100%",height:"100%"}).appendTo(W)}return W}var r=[512,512,456,512,328,456,335,512,405,328,271,456,388,335,292,512,454,405,364,328,298,271,496,456,420,388,360,335,312,292,273,512,482,454,428,405,383,364,345,328,312,298,284,271,259,496,475,456,437,420,404,388,374,360,347,335,323,312,302,292,282,273,265,512,497,482,468,454,441,428,417,405,394,383,373,364,354,345,337,328,320,312,305,298,291,284,278,271,265,259,507,496,485,475,465,456,446,437,428,420,412,404,396,388,381,374,367,360,354,347,341,335,329,323,318,312,307,302,297,292,287,282,278,273,269,265,261,512,505,497,489,482,475,468,461,454,447,441,435,428,422,417,411,405,399,394,389,383,378,373,368,364,359,354,350,345,341,337,332,328,324,320,316,312,309,305,301,298,294,291,287,284,281,278,274,271,268,265,262,259,257,507,501,496,491,485,480,475,470,465,460,456,451,446,442,437,433,428,424,420,416,412,408,404,400,396,392,388,385,381,377,374,370,367,363,360,357,354,350,347,344,341,338,335,332,329,326,323,320,318,315,312,310,307,304,302,299,297,294,292,289,287,285,282,280,278,275,273,271,269,267,265,263,261,259];var C=[9,11,12,13,13,14,14,15,15,15,15,16,16,16,16,17,17,17,17,17,17,17,18,18,18,18,18,18,18,18,18,19,19,19,19,19,19,19,19,19,19,19,19,19,19,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24];function b(az,ag,ae,j,K,ap){if(isNaN(ap)||ap<1){return}ap|=0;var au;try{au=az.getImageData(ag,ae,j,K)}catch(ay){console.log("error:unable to access image data: "+ay);return false}var O=au.data;var an,am,aw,at,V,Y,S,M,N,ad,T,af,ab,aj,ao,W,R,X,Z,ai;var ax=ap+ap+1;var ak=j<<2;var U=j-1;var ar=K-1;var Q=ap+1;var aq=Q*(Q+1)/2;var ah=new g();var ac=ah;for(aw=1;aw<ax;aw++){ac=ac.next=new g();if(aw==Q){var P=ac}}ac.next=ah;var av=null;var al=null;S=Y=0;var aa=r[ap];var L=C[ap];for(am=0;am<K;am++){aj=ao=W=M=N=ad=0;T=Q*(R=O[Y]);af=Q*(X=O[Y+1]);ab=Q*(Z=O[Y+2]);M+=aq*R;N+=aq*X;ad+=aq*Z;ac=ah;for(aw=0;aw<Q;aw++){ac.r=R;ac.g=X;ac.b=Z;ac=ac.next}for(aw=1;aw<Q;aw++){at=Y+((U<aw?U:aw)<<2);M+=(ac.r=(R=O[at]))*(ai=Q-aw);N+=(ac.g=(X=O[at+1]))*ai;ad+=(ac.b=(Z=O[at+2]))*ai;aj+=R;ao+=X;W+=Z;ac=ac.next}av=ah;al=P;for(an=0;an<j;an++){O[Y]=(M*aa)>>L;O[Y+1]=(N*aa)>>L;O[Y+2]=(ad*aa)>>L;M-=T;N-=af;ad-=ab;T-=av.r;af-=av.g;ab-=av.b;at=(S+((at=an+ap+1)<U?at:U))<<2;aj+=(av.r=O[at]);ao+=(av.g=O[at+1]);W+=(av.b=O[at+2]);M+=aj;N+=ao;ad+=W;av=av.next;T+=(R=al.r);af+=(X=al.g);ab+=(Z=al.b);aj-=R;ao-=X;W-=Z;al=al.next;Y+=4}S+=j}for(an=0;an<j;an++){ao=W=aj=N=ad=M=0;Y=an<<2;T=Q*(R=O[Y]);af=Q*(X=O[Y+1]);ab=Q*(Z=O[Y+2]);M+=aq*R;N+=aq*X;ad+=aq*Z;ac=ah;for(aw=0;aw<Q;aw++){ac.r=R;ac.g=X;ac.b=Z;ac=ac.next}V=j;for(aw=1;aw<=ap;aw++){Y=(V+an)<<2;M+=(ac.r=(R=O[Y]))*(ai=Q-aw);N+=(ac.g=(X=O[Y+1]))*ai;ad+=(ac.b=(Z=O[Y+2]))*ai;aj+=R;ao+=X;W+=Z;ac=ac.next;if(aw<ar){V+=j}}Y=an;av=ah;al=P;for(am=0;am<K;am++){at=Y<<2;O[at]=(M*aa)>>L;O[at+1]=(N*aa)>>L;O[at+2]=(ad*aa)>>L;M-=T;N-=af;ad-=ab;T-=av.r;af-=av.g;ab-=av.b;at=(an+(((at=am+Q)<ar?at:ar)*j))<<2;M+=(aj+=(av.r=O[at]));N+=(ao+=(av.g=O[at+1]));ad+=(W+=(av.b=O[at+2]));av=av.next;T+=(R=al.r);af+=(X=al.g);ab+=(Z=al.b);aj-=R;ao-=X;W-=Z;al=al.next;Y+=j}}az.putImageData(au,ag,ae);return true}function g(){this.r=0;this.g=0;this.b=0;this.a=0;this.next=null}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.2
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery.extend(jQuery.easing,{easeInOutSine:function(j,i,b,c,d){return -c/2*(Math.cos(Math.PI*i/d)-1)+b}});function ws_domino(m,i,k){$=jQuery;var h=$(this);var c=m.columns||5,l=m.rows||2,d=m.centerRow||2,g=m.centerColumn||2;var f=$("<div>").addClass("ws_effect ws_domino").css({position:"absolute",width:"100%",height:"100%",top:0,overflow:"hidden"}).appendTo(k);var b=$("<div>").addClass("ws_zoom").appendTo(f);var j=$("<div>").addClass("ws_parts").appendTo(f);var e=k.find(".ws_list");var a;this.go=function(y,x){function z(){j.find("img").stop(1,1);j.empty();b.empty();a=0}z();var s=$(i.get(x));s={width:s.width(),height:s.height(),marginTop:parseFloat(s.css("marginTop")),marginLeft:parseFloat(s.css("marginLeft"))};var D=$(i.get(x)).clone().appendTo(b).css({position:"absolute",top:0,left:0}).css(s);var p=f.width();var o=f.height();var w=Math.floor(p/c);var v=Math.floor(o/l);var t=p-w*(c-1);var E=o-v*(l-1);function I(L,K){return Math.random()*(K-L+1)+L}e.hide();var u=[];for(var C=0;C<l;C++){u[C]=[];for(var B=0;B<c;B++){var q=m.duration*(1-Math.abs((d*g-C*B)/(2*l*c)));var F=B<c-1?w:t;var n=C<l-1?v:E;u[C][B]=$("<div>").css({width:F,height:n,position:"absolute",top:C*v,left:B*w,overflow:"hidden"});var H=I(C-2,C+2);var G=I(B-2,B+2);u[C][B].appendTo(j);var J=$(i.get(y)).clone().appendTo(u[C][B]).css(s);var A={top:-H*v,left:-G*w,opacity:0};var r={top:-C*v,left:-B*w,opacity:1};if(m.support.transform&&m.support.transition){A.translate=[A.left,A.top,0];r.translate=[r.left,r.top,0];delete A.top;delete A.left;delete r.top;delete r.left}wowAnimate(J.css({position:"absolute"}),A,r,q,"easeInOutSine",function(){a++;if(a==l*c){z();e.stop(1,1);h.trigger("effectEnd")}})}}wowAnimate(D,{scale:1},{scale:1.6},m.duration,m.duration*0.2,"easeInOutSine")}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.2
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container1").wowSlider({effect:"lines,dribbles,brick,seven,domino",prev:"",next:"",duration:20*100,delay:20*100,width:830,height:360,autoPlay:true,autoPlayVideo:false,playPause:true,stopOnHover:false,loop:false,bullets:1,caption:true,captionEffect:"parallax",controls:true,controlsThumb:false,responsive:2,fullScreen:false,gestures:2,onBeforeStep:0,images:0});