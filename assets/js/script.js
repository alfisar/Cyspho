$(document).ready(function () {

    const noBlink = 0;

    $(window).scroll(function () {
        if (checkVisible($('#eng'))) {
            $('#number-top').text("01");
        }

        if (checkVisible($('#maint'))) {
            $('#number-top').text("02");
           
        }
        if (checkVisible($('#uniPro'))) {
            $('#number-top').text("03");
        }

        if(checkVisible($('#navToDark'))){
            // alert("yeehaw");
            $(".navbar-brand").removeClass("on-light").addClass("on-dark");
            $(".nav-link").removeClass("on-light").addClass("on-dark");
        }

        if(checkVisible($('.scroll-hint'))){
            // alert("yeehaw");
            $(".navbar-brand").removeClass("on-dark").addClass("on-light");
            $(".nav-link").removeClass("on-dark").addClass("on-light");
        }
    });

    function checkVisible(elm, eval) {
        eval = eval || "visible";
        var vpH = $(window).height();
        st = $(window).scrollTop();
//        console.log(st);
        y = $(elm).offset().top;
        elemHeight = $(elm).height();

        if (eval == "visible") {
            return ((y < (vpH + st)) && (y > (st - elemHeight)));
        }
        if (eval == "above") {
            return ((y < (vpH + st)) && (y > (st - elemHeight)));
        }
    }

});