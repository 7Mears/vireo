function stickyTitles(stickies) {
    this.load = function() {
        stickies.each(function() {
            var thisSticky = jQuery(this).wrap('<div class="followWrap" />');
            thisSticky.parent().height(thisSticky.outerHeight()), jQuery.data(thisSticky[0], "pos", thisSticky.offset().top);
        });
    }, this.scroll = function() {
        stickies.each(function(i) {
            var thisSticky = jQuery(this), nextSticky = stickies.eq(i + 1), prevSticky = stickies.eq(i - 1), pos = jQuery.data(thisSticky[0], "pos");
            pos <= jQuery(window).scrollTop() ? (thisSticky.addClass("fixed"), nextSticky.length > 0 && thisSticky.offset().top >= jQuery.data(nextSticky[0], "pos") - thisSticky.outerHeight() && thisSticky.addClass("absolute").css("top", jQuery.data(nextSticky[0], "pos") - thisSticky.outerHeight())) : (thisSticky.removeClass("fixed"), 
            prevSticky.length > 0 && jQuery(window).scrollTop() <= jQuery.data(thisSticky[0], "pos") - prevSticky.outerHeight() && prevSticky.removeClass("absolute").removeAttr("style"));
        });
    };
}

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
}), jQuery(document).ready(function() {
    var newStickies = new stickyTitles(jQuery(".followMe"));
    newStickies.load(), jQuery(window).on("scroll", function() {
        newStickies.scroll();
    });
});