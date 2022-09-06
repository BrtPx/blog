$(document).ready(function () {
    $('.js--section-motto').waypoint(function (direction) {
        if (direction == "down") {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    }, {
        offset: '80px'

    });

    $('.js--mobile-nav').click(function () {
        var nav = $('.js--main-nav');
        var icon = $('.js--mobile-nav i');

        nav.slideToggle(100);

        if (icon.hasClass('fa-bars')) {
            icon.addClass('fa-xmark');
            icon.removeClass('fa-bars');
        } else {
            icon.addClass('fa-bars');
            icon.removeClass('fa-xmark');
        }

    });


    $('#btn_ios').on("click", function () {
        // var imgurl = base_url + "$img";
        var url = base_url + "pblog/gen_blogpost"
        // $('post-header').css("background-image", "url (" + imgurl + ")");




    })



})