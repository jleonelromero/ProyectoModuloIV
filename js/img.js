
$(document).ready(function () {
    function slide() {
        $('.image-slider').animate({
            marginLeft: '-=260px'
        }, 2000, 'linear', function () {
            $(this).find('.slider-item:first').appendTo('.image-slider').end().css({ marginLeft: 0 });
        });
    }
    setInterval(slide, 3000);
});