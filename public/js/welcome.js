$(document).ready(function() {
    var $mainText = $(".hover-controller");
    var $subText = $(".sub-head");
    var $img1 = $(".hat");
    var $img2 = $(".cape-front");
    var $img3 = $(".cape-back");
    var pulse = true;
    $(".hamburger-toggle__circle").addClass("blob");

    if (window.innerWidth > 675) {
        $subText.mouseover(function() {
            $img1.addClass("hatHoverClass");
            $img2.addClass("cape-frontHoverClass");
            $img3.addClass("cape-backHoverClass");
            $subText.addClass("sub-headHoverClass");
        });
        $subText.mouseout(function() {
            $img1.removeClass("hatHoverClass");
            $img2.removeClass("cape-frontHoverClass");
            $img3.removeClass("cape-backHoverClass");
            $subText.removeClass("sub-headHoverClass");
        });

        $img1.mouseover(function() {
            $img1.addClass("hatHoverClass");
            $img2.addClass("cape-frontHoverClass");
            $img3.addClass("cape-backHoverClass");
            $subText.addClass("sub-headHoverClass");
        });
        $img1.mouseout(function() {
            $img1.removeClass("hatHoverClass");
            $img2.removeClass("cape-frontHoverClass");
            $img3.removeClass("cape-backHoverClass");
            $subText.removeClass("sub-headHoverClass");
        });

        $img2.mouseover(function() {
            $img1.addClass("hatHoverClass");
            $img2.addClass("cape-frontHoverClass");
            $img3.addClass("cape-backHoverClass");
            $subText.addClass("sub-headHoverClass");
        });
        $img2.mouseout(function() {
            $img1.removeClass("hatHoverClass");
            $img2.removeClass("cape-frontHoverClass");
            $img3.removeClass("cape-backHoverClass");
            $subText.removeClass("sub-headHoverClass");
        });

        $img3.mouseover(function() {
            $img1.addClass("hatHoverClass");
            $img2.addClass("cape-frontHoverClass");
            $img3.addClass("cape-backHoverClass");
            $subText.addClass("sub-headHoverClass");
        });
        $img3.mouseout(function() {
            $img1.removeClass("hatHoverClass");
            $img2.removeClass("cape-frontHoverClass");
            $img3.removeClass("cape-backHoverClass");
            $subText.removeClass("sub-headHoverClass");
        });

        $mainText.mouseover(function() {
            $img1.addClass("hatHoverClass");
            $img2.addClass("cape-frontHoverClass");
            $img3.addClass("cape-backHoverClass");
            $subText.addClass("sub-headHoverClass");
        });
        $mainText.mouseout(function() {
            $img1.removeClass("hatHoverClass");
            $img2.removeClass("cape-frontHoverClass");
            $img3.removeClass("cape-backHoverClass");
            $subText.removeClass("sub-headHoverClass");
        });
    }

    var x = setInterval(function() {
        if (window.innerWidth < 992) {
            $(".mobile-encloser").show();
            $(".desktop-encloser").hide();
        } else {
            $(".mobile-encloser").hide();
            $(".desktop-encloser").show();
        }
        if (window.innerWidth < 675) {
            $(".button").removeClass("col-2");
            $(".button").addClass("col-4");
            $(".contact-col").addClass("col-12");
            $(".contact-col").removeClass("col-6");
            $(".img-div").addClass("col-12");
            $(".img-div").removeClass("col-3");
        } else {
            $(".button").addClass("col-2");
            $(".button").removeClass("col-4");
            $(".contact-col").removeClass("col-12");
            $(".contact-col").addClass("col-6");
            $(".img-div").addClass("col-3");
            $(".img-div").removeClass("col-12");
        }
    });

    //Dealing with Hamburger stuff
    $(".hamburger-show").css({ opacity: "0" });
    $(".hamburger-show").hide();
    $(".slant-line-1").hide();
    $(".slant-line-2").hide();

    function toggleClass(e, className) {
        if (e.hasClass(className)) {
            e.removeClass(className);
        } else e.addClass(className);
    }

    function toggleView(e) {
        if (e.is(":visible")) {
            e.css({ opacity: "0" });
            e.hide();
        } else {
            e.show();
            e.css({ opacity: "1", transition: "opacity 0.5s ease 0.25s" });
        }
    }

    function toggleSlantView(e, className) {
        if (e.is(":visible")) {
            e.css({ opacity: "0", transition: "0.5s ease-in" });
            e.hide();
        } else {
            e.show();
            e.css({ opacity: "1", transition: "1.5s ease" });
        }
    }

    $(".hamburger-toggle").click(function() {
        toggleClass($(".hamburger-div"), "has-offcanvas");
        toggleView($(".hamburger-hide"));
        toggleView($(".hamburger-show"));
        toggleSlantView($(".slant-line-1"), "slant-line-1");
        toggleSlantView($(".slant-line-2"), "slant-line-2");
        toggleView($(".hamburger-menu"));
        toggleClass($(".cross"), "cross-format");
        if (pulse) pulse = false;
        else pulse = true;
        toggleClass($(".hamburger-toggle__circle"), "blob");
    });

    /***************changing items in the navbar***************/
    const mapping = {
        prizes: $(".prizes-container"),
        faqs: $(".faq-container"),
        "contact us": $(".contact-us-container"),
        rules: $(".rules-container")
    };
    isActive = $(".nav-link-rules");
    isActive.addClass("active");
    mapping["faqs"].css({ opacity: "0" });
    mapping["contact us"].css({ opacity: "0" });
    mapping["prizes"].css({ opacity: "0" });
    mapping["faqs"].hide();
    mapping["contact us"].hide();
    mapping["prizes"].hide();
    $(".nav-link").click(function(event) {
        e = $(event.target);
        if (e[0] == isActive[0]) {
            return;
        } else {
            isActive.removeClass("active");
            inactiveDiv = mapping[isActive[0].innerText.toLowerCase()];
            isActive = e;
            activeDiv = mapping[isActive[0].innerText.toLowerCase()];
            inactiveDiv.css({ opacity: "0", transition: "0.5s ease-out" });
            inactiveDiv.hide();
            activeDiv.show();
            activeDiv.css({ opacity: "1", transition: "0.5s ease-in" });
            e.addClass("active");
        }
    });

    /************************************************/
});
