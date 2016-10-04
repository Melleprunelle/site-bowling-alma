//animation navbar fixed (transparence)
$(document).ready(function () {
    var scroll_start = 0;
    var startchange = $('#startchange');
    var offset = startchange.offset();
    if (startchange.length) {
        $(document).scroll(function () {
            scroll_start = $(this).scrollTop();
            if (scroll_start > offset.top) {
                $('.navbar-default').css('opacity', '0.7');
                $('.navbar-default').css('transition', '0.5s');
            } else {
                $(".navbar-default").css('opacity', '1');
                $('.navbar-default').css('transition', '0.5s');
            }
        });
    }
});