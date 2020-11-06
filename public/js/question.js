$(document).ready(function() {
    var finalDate = new Date("May 18,2020 00:00:00").getTime();

    function toStr(e) {
        e = String(e);
        if (e.length == 2) return e;
        else return "0" + e;
    }

    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = finalDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        var timerValue =
            toStr(hours) + ":" + toStr(minutes) + ":" + toStr(seconds);
        $(".live-time").text(timerValue);

        if (window.innerWidth < 675) {
            e = $(".btn-div");
            e.removeClass("col-2");
            e.addClass("col-6");
            f = $(".input-div");
            f.removeClass("col-10");
            f.addClass("col-12");
        } else {
            e = $(".btn-div");
            e.removeClass("col-6");
            e.addClass("col-2");
            f = $(".input-div");
            f.removeClass("col-12");
            f.addClass("col-10");
        }

        if (window.innerWidth < 992) {
            g = $(".question-main");
            g.removeClass("col-6");
            g.addClass("col-12");
        } else {
            g = $(".question-main");
            g.removeClass("col-12");
            g.addClass("col-6");
        }
    });

    window.setTimeout(function() {
        $(".circle-loader").toggleClass("load-complete");
        $(".checkmark").toggle();
    }, 1500);

    // Create timer for live deadline
    var deadline = new Date("May 17,2020 12:00:00").getTime();

    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = deadline - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        var timerValue =
            toStr(days) +
            "d " +
            toStr(hours) +
            "h " +
            toStr(minutes) +
            "m " +
            toStr(seconds) +
            "s";
        $(".live-deadline").text(timerValue);
    });
});
