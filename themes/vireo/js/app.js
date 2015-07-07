jQuery(document).ready(function($) {
    function hasScrolled() {
        var st = $(this).scrollTop();
        Math.abs(lastScrollTop - st) <= delta || (st > lastScrollTop && st > navbarHeight ? $("#site-header").removeClass("nav-down").addClass("nav-up") : st + $(window).height() < $(document).height() && $("#site-header").removeClass("nav-up").addClass("nav-down"), 
        lastScrollTop = st);
    }
    var didScroll, lastScrollTop = 0, delta = 5, navbarHeight = $("#site-header").outerHeight();
    $(window).scroll(function(event) {
        didScroll = !0;
    }), setInterval(function() {
        didScroll && (hasScrolled(), didScroll = !1);
    }, 250);
}), jQuery(document).ready(function($) {
    $("body").addClass("js");
    var $menu = $("#menu"), $menulink = $(".menu-link");
    $menulink.click(function() {
        return $menulink.toggleClass("active"), $menu.toggleClass("active"), !1;
    }), $("a[href*=#]:not([href=#])").click(function() {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") || location.hostname == this.hostname) {
            var target = $(this.hash);
            if (target = target.length ? target : $("[name=" + this.hash.slice(1) + "]"), target.length) return $("html,body").animate({
                scrollTop: target.offset().top
            }, 1e3), !1;
        }
    });
}), jQuery(document).ready(function($) {
    function Scroller() {
        this.latestKnownScrollY = 0, this.ticking = !1;
    }
    var $content = $(".parallax"), wHeight = $(window).height();
    $(window).on("resize", function() {
        wHeight = $(window).height();
    }), window.requestAnimFrame = function() {
        return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function(callback) {
            window.setTimeout(callback, 1e3 / 60);
        };
    }(), Scroller.prototype = {
        init: function() {
            window.addEventListener("scroll", this.onScroll.bind(this), !1);
        },
        onScroll: function() {
            this.latestKnownScrollY = window.scrollY, this.requestTick();
        },
        requestTick: function() {
            this.ticking || window.requestAnimFrame(this.update.bind(this)), this.ticking = !0;
        },
        update: function() {
            var currentScrollY = this.latestKnownScrollY;
            this.ticking = !1;
            var slowScroll = currentScrollY / 4;
            $content.css({
                transform: "translateY(-" + slowScroll + "px)",
                "-moz-transform": "translateY(-" + slowScroll + "px)",
                "-webkit-transform": "translateY(-" + slowScroll + "px)"
            });
        }
    };
    var scroller = new Scroller();
    scroller.init();
});

var header = $(".entry-header, .portfolio-post-header"), range = 200;

$(window).on("scroll", function() {
    var st = $(this).scrollTop();
    header.each(function() {
        var offset = $(this).offset().top, height = $(this).outerHeight();
        offset += height / 1.5, $(this).css({
            opacity: 1 - (st - offset + range) / range
        });
    });
}), jQuery(document).ready(function($) {
    function nextSlide(visibleSlide, container, pagination, n) {
        visibleSlide.removeClass("selected from-left from-right").addClass("is-moving").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function() {
            visibleSlide.removeClass("is-moving");
        }), container.children("li").eq(n).addClass("selected from-right").prevAll().addClass("move-left"), 
        checkVideo(visibleSlide, container, n);
    }
    function prevSlide(visibleSlide, container, pagination, n) {
        visibleSlide.removeClass("selected from-left from-right").addClass("is-moving").one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function() {
            visibleSlide.removeClass("is-moving");
        }), container.children("li").eq(n).addClass("selected from-left").removeClass("move-left").nextAll().removeClass("move-left"), 
        checkVideo(visibleSlide, container, n);
    }
    function updateSliderNavigation(pagination, n) {
        var navigationDot = pagination.find(".selected");
        navigationDot.removeClass("selected"), pagination.find("li").eq(n).addClass("selected");
    }
    function setAutoplay(wrapper, length, delay) {
        wrapper.hasClass("autoplay") && (clearInterval(autoPlayId), autoPlayId = window.setInterval(function() {
            autoplaySlider(length);
        }, delay));
    }
    function autoplaySlider(length) {
        length - 1 > visibleSlidePosition ? (nextSlide(slidesWrapper.find(".selected"), slidesWrapper, sliderNav, visibleSlidePosition + 1), 
        visibleSlidePosition += 1) : (prevSlide(slidesWrapper.find(".selected"), slidesWrapper, sliderNav, 0), 
        visibleSlidePosition = 0), updateNavigationMarker(navigationMarker, visibleSlidePosition + 1), 
        updateSliderNavigation(sliderNav, visibleSlidePosition);
    }
    function uploadVideo(container) {
        container.find(".bg-video-wrapper").each(function() {
            var videoWrapper = $(this);
            if (videoWrapper.is(":visible")) {
                var videoUrl = videoWrapper.data("video"), video = $('<video loop><source src="' + videoUrl + '.mp4" type="video/mp4" /><source src="' + videoUrl + '.webm" type="video/webm" /></video>');
                video.appendTo(videoWrapper), videoWrapper.parent(".bg-video.selected").length > 0 && video.get(0).play();
            }
        });
    }
    function checkVideo(hiddenSlide, container, n) {
        var hiddenVideo = hiddenSlide.find("video");
        hiddenVideo.length > 0 && hiddenVideo.get(0).pause();
        var visibleVideo = container.children("li").eq(n).find("video");
        visibleVideo.length > 0 && visibleVideo.get(0).play();
    }
    function updateNavigationMarker(marker, n) {
        marker.removeClassPrefix("item").addClass("item-" + n);
    }
    var slidesWrapper = $(".hero-slider");
    if (slidesWrapper.length > 0) {
        var autoPlayId, primaryNav = $(".primary-nav"), sliderNav = $(".slider-nav"), navigationMarker = $(".marker"), slidesNumber = slidesWrapper.children("li").length, visibleSlidePosition = 0, autoPlayDelay = 1e4;
        uploadVideo(slidesWrapper), setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay), 
        primaryNav.on("click", function(event) {
            $(event.target).is(".primary-nav") && $(this).children("ul").toggleClass("is-visible");
        }), sliderNav.on("click", "li", function(event) {
            event.preventDefault();
            var selectedItem = $(this);
            if (!selectedItem.hasClass("selected")) {
                var selectedPosition = selectedItem.index(), activePosition = slidesWrapper.find("li.selected").index();
                selectedPosition > activePosition ? nextSlide(slidesWrapper.find(".selected"), slidesWrapper, sliderNav, selectedPosition) : prevSlide(slidesWrapper.find(".selected"), slidesWrapper, sliderNav, selectedPosition), 
                visibleSlidePosition = selectedPosition, updateSliderNavigation(sliderNav, selectedPosition), 
                updateNavigationMarker(navigationMarker, selectedPosition + 1), setAutoplay(slidesWrapper, slidesNumber, autoPlayDelay);
            }
        });
    }
    $.fn.removeClassPrefix = function(prefix) {
        return this.each(function(i, el) {
            var classes = el.className.split(" ").filter(function(c) {
                return 0 !== c.lastIndexOf(prefix, 0);
            });
            el.className = $.trim(classes.join(" "));
        }), this;
    };
});