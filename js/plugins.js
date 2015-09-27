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

/*// Place any jQuery/helper plugins in here.
 // Find all YouTube videos
 var $allVideos = $("iframe[src^='//www.youtube.com']"),

 // The element that is fluid width
 $fluidEl = $("body");

 // Figure out and save aspect ratio for each video
 $allVideos.each(function () {

 $(this)
 .data('aspectRatio', this.height / this.width)

 // and remove the hard coded width/height
 .removeAttr('height')
 .removeAttr('width');

 });

 // When the window is resized
 $(window).resize(function () {

 var newWidth = $fluidEl.width();

 // Resize all videos according to their own aspect ratio
 $allVideos.each(function () {

 var $el = $(this);
 $el
 .width(newWidth)
 .height(newWidth * $el.data('aspectRatio'));

 });

 // Kick off one resize to fix all videos on page load
 }).resize();*/

$(document).ready(function () {

    $('.navbar-nav a').click(function (e) {
        e.preventDefault();
        $('.navbar-nav > li').removeClass('active');
        $(this).parent('li').addClass('active');
    });

    $('.step-one').click(function () {
        $(this).addClass('move');
        var i = 0;
        var rows = $(".work-step");
        show();
        function show() {
            if (i < rows.length) {
                $(rows[i]).addClass("active").delay(400).queue(function (next) {
                    $(this).addClass("move");
                    next();
                });
                i++;
                setTimeout(show, 1000);
            }
        }
    });
//MAP

    var map;
    var lat = 48.447650;
    var lng = 35.020844;
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


});
