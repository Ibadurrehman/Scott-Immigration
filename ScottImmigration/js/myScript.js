$("#form-one, #form-two").select2();

function toggleMenu()
{
    if ($('.site-nav').hasClass('open')) {
        $('.site-nav').removeClass('open');
        $('.transparent-bg').fadeOut();
    }
    else {
        $('.site-nav').addClass('open');
        $('.transparent-bg').fadeIn();
    }
}
function bgTransparent()
{
    $('.site-nav').removeClass('open');
    $('.transparent-bg').fadeOut();
}

$(document).ready(function () {

    $('.nav-item').click(function () {
        $('.menu-row').slideUp(150);
        if ($(this).find('.menu-row').is(':visible')) {
            $(this).find('.menu-row').slideUp(150);
        }
        else {
            $(this).find('.menu-row').slideDown(150);
        }
    });
    $('.menu-row > ul > li > a').click(function () {
        $('.site-nav').removeClass('open');
    });

});