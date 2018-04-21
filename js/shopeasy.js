$(document).ready(function () {
    mobileMenu();


    var API = $("#nav#mainNav-mobile").data("mmenu");

    $("#menu-close").click(function () {
        API.close();
    });

    $('.mobile-seach-icon').click(function () {
        $('body').addClass("opened");
        $('.mobile-search-box').addClass("opened");
    });

    $('.mobile-close-search').click(function () {

        $('body').removeClass("opened");
        $('.mobile-search-box').removeClass("opened");
    });

    $('.mobile-filter').click(function (){
        var filter = $('.filter-container');
        var filterHead = $('.filter-moible-header');

        if (filterHead.hasClass("open-result")){
            if (filter.hasClass("open-result")){
                filter.removeClass("open-result")
            }else{
                filter.addClass("open-result");
            }
        }else{
            if (filter.hasClass("open")){
                filter.removeClass("open")
            }else{
                filter.addClass("open");
            }
        }
    });

    $('.mobile-back').click(function (){
        var filter = $('.filter-container');
        var filterHead = $('.filter-moible-header');
        var result = $('.result-container');
        
        filter.removeClass("open-result");
        result.removeClass("open")
        filterHead.removeClass("open-result");
    });

    $('#getResult').click(function(){
        var result = $('.result-container');
        var filter = $('.filter-container');
        var filterHead = $('.filter-moible-header');

        result.animate({
            scrollTop: 0
        }, 200);

        if (filterHead.hasClass("open-result")){
            //Reload Search Result
            //.......Function()..........
            filter.removeClass("open-result");
        }else{
            filter.removeClass("open");
            //Open Or Close Search Result
            if (result.hasClass("open")){
                result.removeClass("open")
            }else{
                result.addClass("open");
                filterHead.addClass("open-result");
            }
        }
    })

    $('.items-slick').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
        // {
        //   breakpoint: 1024,
        //   settings: {
        //     slidesToShow: 3,
        //     slidesToScroll: 3,
        //     infinite: true,
        //     dots: true
        //   }
        // },
        // {
        //   breakpoint: 600,
        //   settings: {
        //     slidesToShow: 2,
        //     slidesToScroll: 2
        //   }
        // },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }]
    });
    // $('.banner-slick').slickLightbox({
    //     lazy: true,
    //     infinite: true,
    //     slidesToShow: 4,
    //     slidesToScroll: 4,
    //     responsive: [
    //     {
    //       breakpoint: 1024,
    //       settings: {
    //         slidesToShow: 3,
    //         slidesToScroll: 3,
    //         infinite: true,
    //         dots: true
    //       }
    //     },
    //     {
    //       breakpoint: 600,
    //       settings: {
    //         slidesToShow: 2,
    //         slidesToScroll: 2
    //       }
    //     },
    //     {
    //       breakpoint: 480,
    //       settings: {
    //         slidesToShow: 1,
    //         slidesToScroll: 1
    //       }
    //     }
    //     // You can unslick at a given breakpoint now by adding:
    //     // settings: "unslick"
    //     // instead of a settings object
    //   ]
    // });
    
    if ($('.banner-slick').hasClass('slick-slider')){
        $('.banner-slick').removeClass('hidden');
    }

    gotoTop($(window).width());
    mobileScroll($(window).width());
})

function mobileMenu() {

    $("nav#mainNav-mobile").mmenu({
        extensions: ['effect-menu-slide', 'pageshadow'],
        autoHeight: true,
        navbar: {
            title: ''
        },
        navbars: [{
            position: "top",
            content: ['']
        }],
        offCanvas: {
            position: "left"
            /*,
            	        zposition: "side"*/
        }
    });



}

function gotoTop(winWidth) {
    //console.log(winWidth);

    //if (winWidth < 991) {
    $(window).scroll(function () {

        if ($(this).scrollTop() > 200) {
            //$('#gotoTop').css("display", "block");
            $('#gotoTop').fadeIn(500);
            $('.header-top-area').addClass('scroll');
            $('.header-top-area').fadeIn(500);
            //$('.breadcrumb-section').addClass('scroll');
            $('.filter-moible-header').addClass('scroll');
        } else {
            //$('#gotoTop').fadeOut(500);
            $('#gotoTop').css("display", "none");
            $('.header-top-area').removeClass('scroll');
            //$('.breadcrumb-section').removeClass('scroll');
            $('.filter-moible-header').removeClass('scroll');
        }
    });
    //}



    $('#gotoTop').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    $("#price-slider").slider({});
}

function mobileScroll(winWidth) {
    //if (winWidth < 991) {
    $(window).scroll(function () {

        if ($(this).scrollTop() > 80) {
            $('.header-top-area').addClass('scroll');
        } else {
            $('.header-top-area').removeClass('scroll');
        }
    });
    //}
}