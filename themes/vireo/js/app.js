jQuery(document).ready(function(e){function n(){var n=e(this).scrollTop();Math.abs(t-n)<=o||(n>t&&n>s?e("#site-header").removeClass("nav-down").addClass("nav-up"):n+e(window).height()<e(document).height()&&e("#site-header").removeClass("nav-up").addClass("nav-down"),t=n)}var i,t=0,o=5,s=e("#site-header").outerHeight();e(window).scroll(function(e){i=!0}),setInterval(function(){i&&(n(),i=!1)},250)}),jQuery(document).ready(function(e){e("body").addClass("js");var n=e("#menu"),i=e(".menu-link");i.click(function(){return i.toggleClass("active"),n.toggleClass("active"),!1}),e("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")||location.hostname==this.hostname){var n=e(this.hash);if(n=n.length?n:e("[name="+this.hash.slice(1)+"]"),n.length)return e("html,body").animate({scrollTop:n.offset().top},1e3),!1}})}),jQuery(document).ready(function(e){function n(){this.latestKnownScrollY=0,this.ticking=!1}var i=e(".parallax"),t=e(window).height();e(window).on("resize",function(){t=e(window).height()}),window.requestAnimFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}(),n.prototype={init:function(){window.addEventListener("scroll",this.onScroll.bind(this),!1)},onScroll:function(){this.latestKnownScrollY=window.scrollY,this.requestTick()},requestTick:function(){this.ticking||window.requestAnimFrame(this.update.bind(this)),this.ticking=!0},update:function(){var e=this.latestKnownScrollY;this.ticking=!1;var n=e/4;i.css({transform:"translateY(-"+n+"px)","-moz-transform":"translateY(-"+n+"px)","-webkit-transform":"translateY(-"+n+"px)"})}};var o=new n;o.init()});var header=$(".entry-header, .portfolio-post-header"),range=200;$(window).on("scroll",function(){var e=$(this).scrollTop();header.each(function(){var n=$(this).offset().top,i=$(this).outerHeight();n+=i/1.5,$(this).css({opacity:1-(e-n+range)/range})})}),jQuery(document).ready(function(e){function n(e,n,i,t){e.removeClass("selected from-left from-right").addClass("is-moving").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",function(){e.removeClass("is-moving")}),n.children("li").eq(t).addClass("selected from-right").prevAll().addClass("move-left"),r(e,n,t)}function i(e,n,i,t){e.removeClass("selected from-left from-right").addClass("is-moving").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",function(){e.removeClass("is-moving")}),n.children("li").eq(t).addClass("selected from-left").removeClass("move-left").nextAll().removeClass("move-left"),r(e,n,t)}function t(e,n){var i=e.find(".selected");i.removeClass("selected"),e.find("li").eq(n).addClass("selected")}function o(e,n,i){e.hasClass("autoplay")&&(clearInterval(c),c=window.setInterval(function(){s(n)},i))}function s(e){e-1>v?(n(d.find(".selected"),d,h,v+1),v+=1):(i(d.find(".selected"),d,h,0),v=0),l(u,v+1),t(h,v)}function a(n){n.find(".bg-video-wrapper").each(function(){var n=e(this);if(n.is(":visible")){var i=n.data("video"),t=e('<video loop><source src="'+i+'.mp4" type="video/mp4" /><source src="'+i+'.webm" type="video/webm" /></video>');t.appendTo(n),n.parent(".bg-video.selected").length>0&&t.get(0).play()}})}function r(e,n,i){var t=e.find("video");t.length>0&&t.get(0).pause();var o=n.children("li").eq(i).find("video");o.length>0&&o.get(0).play()}function l(e,n){e.removeClassPrefix("item").addClass("item-"+n)}var d=e(".hero-slider");if(d.length>0){var c,f=e(".primary-nav"),h=e(".slider-nav"),u=e(".marker"),m=d.children("li").length,v=0,w=1e4;a(d),o(d,m,w),f.on("click",function(n){e(n.target).is(".primary-nav")&&e(this).children("ul").toggleClass("is-visible")}),h.on("click","li",function(s){s.preventDefault();var a=e(this);if(!a.hasClass("selected")){var r=a.index(),c=d.find("li.selected").index();r>c?n(d.find(".selected"),d,h,r):i(d.find(".selected"),d,h,r),v=r,t(h,r),l(u,r+1),o(d,m,w)}})}e.fn.removeClassPrefix=function(n){return this.each(function(i,t){var o=t.className.split(" ").filter(function(e){return 0!==e.lastIndexOf(n,0)});t.className=e.trim(o.join(" "))}),this}});
//# sourceMappingURL=app.js.map