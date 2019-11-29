$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})

$(function(){
    $nav = $('.fixed-div');
    $nav.css('width', $nav.outerWidth());
    $window = $(window);
    $h = $nav.offset().top;
    $window.scroll(function(){
        if ($window.scrollTop() > $h) {
            $nav.addClass('fixed');
        } else {
            $nav.removeClass('fixed');
        }
    });
});
