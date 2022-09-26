function blogcontent(e, id) {
    // alert(val);
    e.preventDefault()
    const url = base_url + 'blog/addPostDetails/';
    const data = { id: id };
    // alert(val);
    $.ajax({
        method: 'post',
        url: url + id,
        data: data,
        dataType: 'json',
        beforeSend: (() => {

        }),
        success: ((response) => {
            if (response.response == 'success') {
                // alert(response.content)
                const lead = sessionStorage.setItem("TITLE", response.subtitle);
                const mage = sessionStorage.setItem("IMAGE", response.image);
                const details = sessionStorage.setItem("CONTENT", response.content);
                window.location.href = base_url + 'post';
                // $("#cont").data(response.content);

            } else if (response.response == 'error') {
                alert(response.message)
            }
        }),
        error: ((err) => {
            console.log(err)
        })
    });
}

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
    $('.js--section-post').waypoint(function (direction) {
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








})