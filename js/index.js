new HvrSlider('.images');

var isMobile = false; //initiate as false
// device detection
if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
    isMobile = true;
}

if (isMobile) {
    console.log("mobile");
}

$(document).on('click', function (e){
    /* bootstrap collapse js adds "in" class to your collapsible element*/
    var menu_opened = $('#search-modal-wrap').hasClass('show');
    let m_menu_opened = $('#mainmenu_mobile').hasClass('show');

    if(!$(e.target).closest('#search-modal-wrap').length &&
        !$(e.target).is('#search-modal-wrap') &&
        menu_opened === true){
        $('#search-modal-wrap').collapse('toggle');
    }
    if(!$(e.target).closest('#mainmenu_mobile').length &&
        !$(e.target).is('#search-modal-wrap') &&
        m_menu_opened === true){
        $('#mainmenu_mobile').collapse('toggle');
    }
});

// CATALOG
$('.catalog-category-filter-item-button').on('click', function() {
    $(this).toggleClass('close');
});
if ($(window).width() < 990) {
    $('.catalog-category-sidebar-h').on('click', function() {
        $(this).toggleClass('show');
    });
}
$('.catalog-block-text-loadmore').on('click', function() {
    $('.catalog-block-text-wrp').addClass('show');
    $(this).hide();
});
$(function(){
    $('#slider-price .slider-range').slider({
        range: true,
        min: 84,
        max: 1200000,
        values: ['0', '400000'],
        slide: function(event, ui) {
            $('#slider-price .min').val(ui.values[0]);
            $('#slider-price .max').val(ui.values[1]);
        }
    });
    if ($("#slider-price").hasClass("catalog-filter-item-range")) {
        function digits_int(target){
                val = $(target).val().replace(/[^0-9]/g, '');
            val = val.replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
            $(target).val(val);
        }
        setInterval(function () {
            digits_int('#slider-price .max');
            digits_int('#slider-price .min');
        }, 1);
    }
});
// CATALOG-CARD
var $this = $('.catalog-card');
var $li = $this.find('.catalog-card-info-har');
$li.each(function () {
    var $this = $(this);
    if ($this.find('li').length > 5) {
        $this.find('li:nth-child(n+6)').addClass('hide');
        $this.find('.catalog-card-info-har-loadmore').html('<a href="javascript:void(0)">Смотреть все характеристики</a>')
    }
    $this.find('.catalog-card-info-har-loadmore a').on('click', function() {
        $(this).hide();
        $this.find('li:nth-child(n+6)').removeClass('hide');
    });
});
$('body').on('click', '.number-minus, .number-plus', function(){
    var $row = $(this).closest('.number');
    var $input = $row.find('.number-text');
    var step = $row.data('step');
    var val = parseFloat($input.val());
    if ($(this).hasClass('number-minus')) {
      val -= step;
  } else {
      val += step;
  }
  $input.val(val);
  $input.change();
  return false;
});

$('body').on('change', '.number-text', function(){
    var $input = $(this);
    var $row = $input.closest('.number');
    var step = $row.data('step');
    var min = parseInt($row.data('min'));
    var max = parseInt($row.data('max'));
    var val = parseFloat($input.val());
    if (isNaN(val)) {
      val = step;
  } else if (min && val < min) {
      val = min;
  } else if (max && val > max) {
      val = max;
  }
  $input.val(val);
});
// TABS
(function($) {
  $(function() {
    $("ul.tabs__caption").on("click", "li:not(.active)", function() {
      $(this)
      .addClass("active")
      .siblings()
      .removeClass("active")
      .closest("div.tabs")
      .find("div.tabs__content")
      .removeClass("active")
      .eq($(this).index())
      .addClass("active");
    });
  });
})(jQuery);

$('.scroll-next').click(function (){
    let next_block = $(this).parent().parent().next();
    $('html,body').animate({scrollTop:next_block.offset().top}, 600);
});

$(document).ready(function () {
    $('.catalog-item-wrap .more-link').attr('href','/prodaja-mining/asiki/detail.php');
    var $width = $(window).width();

    if($width <= 990){
        $('#mainmenu_mobile .navbar-nav .nav-item:eq(2)').remove();
        if($('#dark-top-bg').length > 0){
            let topImg = $('.top-img-wrap').clone();
            $('.top-img-wrap').remove();
            if($('#dark-top-bg .sub-text').length > 0){
                $('#dark-top-bg .sub-text').after(topImg);
            } else{
                $('#dark-top-bg h1').after(topImg);
            }

        }
    }

    $(document).on('click', '.load-more-items', function(){

        var targetContainer = $('.items-list'),
            url =  $('.load-more-items').attr('data-url');

        if (url !== undefined) {
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'html',
                success: function(data){

                    $('.load-more-items').remove();

                    var elements = $(data).find('.item-content'),
                        pagination = $(data).find('.load-more-items');

                    targetContainer.append(elements);
                    $('#pag').append(pagination);

                }
            });
        }

    });

    const elemBurger = document.querySelector('.navbar-toggler')
    elemBurger.addEventListener('click', (evt)=> {

        const elemLineBurger = Array.from(evt.currentTarget.children)
        elemLineBurger.forEach(line => {

            if(!line.classList.contains('active-burger')) {
                line.classList.add('active-burger')
            } else {
                line.classList.remove('active-burger')
            }
        })

    });

    $(function() {
        $('.marquee').marquee({
            duration: 13000,
            startVisible: true,
            duplicated: true
        });
    });

    if($('#transition-header').length != 0){
        $('body').addClass('transition-header')
    }

    $('.play').click( function () {
        $(this).fadeOut();
        $('.play-bg').fadeOut();
        $('.video-wrap frame').fadeIn(100);
        var vidDefer = document.getElementsByTagName('iframe');
        for (var i = 0; i < vidDefer.length; i++) {
            if (vidDefer[i].getAttribute('data-src')) {
                vidDefer[i].setAttribute('src', vidDefer[i].getAttribute('data-src'));
            }
        }
    });

    $(".carousel").swipe({
        swipeLeft: function () {
            $(this).carousel("next");
        },
        swipeRight: function () {
            $(this).carousel("prev");
        },
        allowPageScroll: "vertical"
    });

    $('.more').click(function () {
        if ($(this).hasClass('collapsed')) {
            $(this).text('Читать меньше');
        } else {
            $(this).text('Читать больше');
        }
    });


    $('.rew-slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
        centerPadding: '30px',
        variableWidth: true,
        responsive: [
            {
                breakpoint: 990,
                settings: {
                    centerMode: true,
                    variableWidth: false,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            }
        ]
    });
    $('#plus-slider').slick({
        dots: false,
        infinite: false,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '0px',
        variableWidth: false,
    });


    $('input[name="name"]').keypress(function () {
        let name_l = $(this).val().length;
        this.value = this.value.replace(/[^a-zа-яё\s]/gi, '');
        if (name_l >= 3) {
            $(this).removeClass('error');
        }
    });
    $('input[name="tel"]').mask("+7(999)999-99-99");

    console.log("ready!");
});

function metrika_goal(goal) {
    //ym(99999999,'reachGoal',goal);
    console.log(goal);
}

function ajax_f(id) {
    let tel = $('#tel-' + id).val();
    let name = $('#name-' + id).val();
    //if ( $('#ch-'+id).is(":checked")) {

    if (name == '' || name.length < 3) {
        $('#name-' + id).addClass('error');
        return false;
    }

    if (tel == '' || tel.length < 11) {
        $("#form-" + id).addClass('error-form');
        $("#form-" + id + " .btn").attr('disabled', 'disabled');
        $('#tel-' + id).addClass('error');
        $('#tel-' + id).attr('placeholder', 'Введите телефон');
        $('#tel-' + id).val('');
        $('#tel-' + id).focus();
        setTimeout(function () {
            $("#form-" + id + " .btn").attr('disabled', '');
            $('#tel-' + id).removeClass('error');
        }, 2000);
        return false;
    }
    let cel = $('#cel-' + id).val();
    let msg = $("#form-" + id).serializeArray();

    $.ajax({
        type: "POST",
        url: "ajax/proc.php",
        data: msg,
        success: function (data) {
            $("#form-" + id).prepend('<h5>Спасибо за заявку!<br>Скоро мы с вами свяжемся.</h5>');
            $("#form-" + id)[0].reset();
            if (cel != '') {
                metrika_goal(cel);
            } else {
                metrika_goal('zero');
            }

            setTimeout(function () {
                $('#collbackModal').modal('hide');
                $("#form-" + id + " h5").remove();
            }, 6000);
        },
        error: function (xhr, str) {
            $('.btn').attr('disabled', false);
            alert("Возникла ошибка!");
        }
    });
    // } else{
    //     console.log('no checked');
    //     $("#form-" +id).addClass('error-form');
    //     return false;
    // }
}

document.addEventListener('DOMContentLoaded', function () {
    if (!Math.floor10) {
        Math.floor10 = function (value, exp) {
            return decimalAdjust('floor', value, exp);
        };
    }

    function divideNumberByPieces(x, delimiter) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, delimiter || " ");
    }

    function decimalAdjust(type, value, exp) {
        // Если степень не определена, либо равна нулю...
        if (typeof exp === 'undefined' || +exp === 0) {
            return Math[type](value);
        }
        value = +value;
        exp = +exp;
        // Если значение не является числом, либо степень не является целым числом...
        if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
            return NaN;
        }
        // Сдвиг разрядов
        value = value.toString().split('e');
        value = Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
        // Обратный сдвиг
        value = value.toString().split('e');
        return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
    }

    function handler() {
        if (this.status == 200) {
            var data = JSON.parse(this.responseText);
            var bitchart = data[0].price;
            var ethchart = data[1].price;
            document.getElementById("bitchart").innerHTML = divideNumberByPieces(Math.floor10(data[0].price, 0)) + "$";
            document.getElementById("ethchart").innerHTML = divideNumberByPieces(Math.floor10(data[1].price, 0)) + "$";
            document.getElementById("bitchart-d").innerHTML = divideNumberByPieces(Math.floor10(data[0].price, 0)) + "$";
            document.getElementById("ethchart-d").innerHTML = divideNumberByPieces(Math.floor10(data[1].price, 0)) + "$";
        } else {

        }
    }

    function getPrice() {
        var client = new XMLHttpRequest();
        client.onload = handler;
        client.open("GET", 'https://api.binance.com/api/v3/ticker/price?symbols=%5B%22BTCUSDT%22,%22ETHUSDT%22%5D');
        client.send();
    }

    getPrice();
    setInterval(getPrice, 3600)
});

$.fn.setCursorPosition = function(pos) {
    if ($(this).get(0).setSelectionRange) {
        $(this).get(0).setSelectionRange(pos, pos);
    } else if ($(this).get(0).createTextRange) {
        var range = $(this).get(0).createTextRange();
        range.collapse(true);
        range.moveEnd('character', pos);
        range.moveStart('character', pos);
        range.select();
    }
};
$('input[type="tel"]').click(function(){
    $(this).setCursorPosition(3);  // set position number
});