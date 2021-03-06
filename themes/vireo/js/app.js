jQuery(document).ready(function($) {
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
    !function() {
        var panel = {}, bgArea = $("#home-portfolio-bg");
        $(".portfolio-panel").hover(function() {
            panel.id = $(this).attr("data-panel"), bgArea.addClass(panel.id), bgArea.stop(!0, !0).animate({
                opacity: 1
            }, 500);
        }, function() {
            bgArea.stop(!0, !0).animate({
                opacity: 0
            }, 500), bgArea.removeClass(panel.id);
        });
    }();
});