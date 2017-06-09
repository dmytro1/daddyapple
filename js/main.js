// LOADER
$(window).load(function () {
    $('.loader_inner').fadeOut();
    $('.loader').delay(400).fadeOut("slow");
});

//jQuery to collapse the navbar on scroll
$(document).ready(function () {

    // Phone number
    $(function () {
        $("#phone1").mask("+38(999) 999-9999");
        $("#phone2").mask("+38(999) 999-9999");
    });
    // FORM VALIDATION

    $('#defaultForm').validator();

    var navItems = $('.select');
    var allWells = $('.admin-content');

    allWells.hide();
    navItems.change(function () {
        var target = $(this).val();

        $('.admin-content').attr('id', target);

        allWells.hide();

        check_color(target);
        check_memory(target);

        $('#' + target).show('slow');

        var targ = header(target);

        $('.admin-content h2').html(targ);
        $('#test').html(targ);
    });

    function header(str) {

        var newStr = str.replace(str.substr(0, 6), 'iPhone ');
        if (newStr.indexOf('plus') !== -1) {
            var newSt = newStr.replace(newStr.slice(-4), ' plus');
        } else {
            return newStr;
        }

        return newSt;
    }

    function check_color(model) {
        if (model == 'iphone6s' || model == 'iphone6splus' || model == 'iphone7' || model == 'iphone7plus') {
            $('.rose').css('display', 'block');
        } else {
            $('.rose').css('display', 'none');
        }

        if (model == 'iphone7' || model == 'iphone7plus') {
            $('.space').css('display', 'none');
        } else {
            $('.space').css('display', 'block');
        }

        if (model == 'iphone7' || model == 'iphone7plus') {
            $('.black').css('display', 'block');
        } else {
            $('.black').css('display', 'none');
        }
    }

    function check_memory(model) {
        if (model == 'iphone5s') {
            $('.128gb, .256gb').css('display', 'none');
            $('.16gb, .32gb, .64gb').css('display', 'block');
        } else if (model == 'iphone6' || model == 'iphone6plus') {
            $('.32gb, .256gb').css('display', 'none');
            $('.16gb, .128gb, .64gb').css('display', 'block');
        } else if (model == 'iphone6s' || model == 'iphone6splus') {
            $('.256gb').css('display', 'none');
            $('.16gb, .32gb, .64gb, .128gb').css('display', 'block');
        } else if (model == 'iphone7' || model == 'iphone7plus') {
            $('.16gb, .64gb').css('display', 'none');
            $('.128gb, .32gb, .256gb').css('display', 'block');
        }

    }
});
