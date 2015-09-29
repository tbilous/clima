// Avoid `console` errors in browsers that lack a console.
(function () {
    var method;
    var noop = function () {
    };
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());


$(document).ready(function () {

//VISIBLE BLOCK2 ELEMENTS IN WINDOW
    jQuery('.why-block').viewportChecker({
        classToAdd: 'fadeInUpBig',
        offset: 100
    });
    jQuery('.warning .animated').viewportChecker({
        classToAdd: 'flash',
        offset: 200
    });
    jQuery('.products-section .animated').viewportChecker({
        classToAdd: 'fadeIn',
        offset: 200
    });

//SCROLL TO ANCHOR
    function scroll_if_anchor(href) {
        href = typeof(href) == "string" ? href : $(this).attr("href");
        // You could easily calculate this dynamically if you prefer
        var fromTop = 50;
        // If our Href points to a valid, non-empty anchor, and is on the same page (e.g. #foo)
        // Legacy jQuery and IE7 may have issues: http://stackoverflow.com/q/1593174
        if (href.indexOf("#") == 0) {
            var $target = $(href);
            // Older browser without pushState might flicker here, as they momentarily
            // jump to the wrong position (IE < 10)
            if ($target.length) {
                var time = 1000;
                $('html, body').animate({scrollTop: $target.offset().top - fromTop}, time);
                if (history && "pushState" in history) {
                    history.pushState({}, document.title, window.location.pathname + href);
                    return false;
                }
            }
        }
    }

    $("body").on("click", ".anchor", scroll_if_anchor);

//NAVBAR SET ACTIVE NAV
    $('.navbar-nav a').click(function (e) {
        e.preventDefault();
        $('.navbar-nav > li').removeClass('active');
        $(this).parent('li').addClass('active');
    });

    $('.step-one').click(function () {
        $(this).toggleClass("flipInX");
        var i = 0;
        var rows = $(".work-step");
        show();
        function show() {
            if (i < rows.length) {
                $(rows[i]).addClass("active").delay(1100).queue(function (next) {
                    $(this).toggleClass("flipInX").toggleClass("move");
                    next();
                });
                i++;
                setTimeout(show, 1000);
            }
        }
    });

//MAP
    //50.475355, 30.514886
    var map;
    var lat = 50.475355;
    var lng = 30.514886;
    $(document).ready(function () {
        map = new GMaps({
            el: '#map',
            lat: lat,
            lng: lng,
            zoomControl: false,
            panControl: false,
            zoom: 17,
            streetViewControl: false,
            mapTypeControl: false,
            overviewMapControl: false,
            scrollwheel: false
        });
        map.addMarker({
            lat: lat,
            lng: lng
        });
    });

//CLOCK
    var tomorrow = moment().endOf('day').valueOf() + 1;
    var now = moment().valueOf();
    var interval = (tomorrow - now) / 1000;
    var clock = $('.clock').FlipClock(interval, {
        clockFace: 'HourlyCounter',
        countdown: true,
        language: 'ru',
        showSeconds: false
    });
    var clockTop = $('.clock-top').FlipClock(interval, {
        clockFace: 'HourlyCounter',
        countdown: true,
        language: 'ru',
        showSeconds: false
    });

//CENTERED MODAL
    $(".start-modal").click(function () {
        var d_tar = $(this).attr('data-target');
        $(d_tar).show();
        var modal_he = $(d_tar).find('.modal-dialog .modal-content').height();
        var win_height = $(window).height();
        var marr = win_height - modal_he;
        $('.modal-dialog').css('margin-top', marr / 2);
    });
//RESET FORM
    function resetForm(formid) {
        $(':input', formid).not(':button, :submit, :reset, :hidden').val('')
            .removeAttr('checked').removeAttr('selected');
    }

//SUBMIT FORM
    //MODAL FORM
    $("#requestForm").submit(function () {
        $.ajax({
            type: "POST",
            url: "mail.php", //mail script
            data: $(this).serialize()
        }).done(function () {
            $(this).find("input").val("");
            //alert("true offersForm");
            resetForm('#requestForm');
        });
        $('#orderModal').modal('hide');
        return false;
    });
//HEADER COUNT FORM
    $("#headerForm").submit(function () {
        $.ajax({
            type: "POST",
            url: "mail.php", //mail script
            data: $(this).serialize()
        }).done(function () {
            $(this).find("input").val("");
            //alert("true headerForm");
            resetForm('#headerForm');
        });
        return false;
    });
//Query-block FORM
    $("#qform").submit(function () {
        $.ajax({
            type: "POST",
            url: "mail.php", //mail script
            data: $(this).serialize()
        }).done(function () {
            $(this).find("input").val("");
            //alert("true qform");
            resetForm('#qform');
        });
        return false;
    });
//BODY COUNER-FORM
    $("#bodyForm").submit(function () {
        $.ajax({
            type: "POST",
            url: "mail.php", //mail script
            data: $(this).serialize()
        }).done(function () {
            $(this).find("input").val("");
            //alert("true bodyForm");
            resetForm('#bodyForm');
        });
        return false;
    });




});
