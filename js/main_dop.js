$(function() {
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		// ga( 'send', 'event', 'Contact Form', 'submit' );
		if (event.target.closest('.modal__in')) {
			event.target.closest('.modal__in').classList.add('isSent');
		}
	}, false );
});
window.config = {
    priceRange: {
        min: 50000,
        max: 30000000,
        value: 3000000,
        step: 50000
    },
    daysRange: {
        // min: 1,
        // max: 365,
        // value: 30,
        // step: 1
        min: 2,
        max: 12,
        value: 3,
        step: 1
    },
    percents: {
        X: 0.03,
        Y: 0.03,
        Z: 0.03,
        M: 0.03,
        global: 0.03,
        per3: 0.03,
        per4: 0.04,
        per5: 0.05,
        maxAmount: 1000000
    },
    priceRangePTS: {
        min: 50000,
        max: 20000000,
        value: 500000,
        step: 50000
    },
    daysRangePTS: {
        min: 2,
        max: 36,
        value: 12,
        step: 1
    },
    percentsPTS: {
        per1: 0.025,
        per2: 0.03,
        per3: 0.037,
        maxAmount: 1000000
    }
};
$(document).ready(function(){
	
	
	
	route();
    function route() {
        $('.messanger__link_route').on('click', function() {
            $('.route').addClass('active');
            $('.route-tabs').addClass('active');
        });

        $('.btn__route').on('click', function() {
            $('.route-item').removeClass('active')
            $('.route-tabs').removeClass('active');
            $('.route').removeClass('active');
        });

        $('.route__tab').on('click', function () {
            $(this).parents('.route').find($('.route-item')).removeClass('active').eq($(this).index()).addClass('active');
            $('.route-content').addClass('active');
            $('.route-tabs').removeClass('active');
        });

        $('.route-item__btn').on('click', function() {
            $(this).parents('.route-item').removeClass('active');
            $('.route-tabs').addClass('active');
        });
    }
	
	
	
	
	
	
	
	
  $('#responsiveTabsDemo').responsiveTabs({
      startCollapsed: 'accordion'
  });
  if ( window.matchMedia('(max-width : 1023px)').matches ) {
    $(".block_auto__block").slice(0, 3).show();
    $(".block_auto__more").on("click", function(e){
      e.preventDefault();
      $(".block_auto__block:hidden").slice(0, 3).slideDown();
      if($(".block_auto__block:hidden").length == 0) {
        $(".block_auto__more").text("Больше займов нет").addClass("noContent");
      }
    });
  };
  $('.block_question__tit').on('click', function() {
//     if($(this).parent().hasClass('isActive')) {
//     	$(this).parent().find('.block_question__txt').hide('100');
//     } else {
//     	$(this).parent().find('.block_question__txt').show('100');
//     }
  	$(this).parent().toggleClass('isActive');
  });
  $('.block_map__fake').on('click', function() {
  	$(this).toggleClass('isActive');
    $('.block_map__more').toggleClass('isActive');
  })
  $(document).click( function(event){
    if( $(event.target).closest('.block_map__fake').length ) 
      return;
    $('.block_map__more').removeClass('isActive');
    $('.block_map__fake').removeClass('isActive');
  });
  $('#msk').on('click', function() {
  	$('.block_map__fake').text('Москва');
    $(this).addClass('isActive');
    $('#spb').removeClass('isActive');
    $('#moscow_map').show();
    $('#saint_map').hide();
  })
  $('#spb').on('click', function() {
  	$('.block_map__fake').text('Санкт-Петербург');
    $(this).addClass('isActive');
    $('#msk').removeClass('isActive');
    $('#moscow_map').hide();
    $('#saint_map').show();
  });
	$("input[type='tel']").mask("+7 (999) 999-99-99");
	$('.header__burger--body nav ul li.menu-item-has-children').on('click', function() {
		$(this).toggleClass('isActive');														   
	});
// calc start
    pageMain();
    function pageMain() {
        priceRange();

        function priceRange() {

            // ф-я разбивки на разряды
            function number_format(str) {
                return str?.replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g, "\$1 ");
            }
            // удаляем пробелы из строки
            function number_norm(str) {
                return str?.replace(/\s+/g, '');
            }

            // значения по дефоту в скрытых инпутах
            $('input[name="cash_get"]').val($('#total').html());
            $('input[name="payment"]').val($('#month').html());
            $('input[name="pledge"]').val($('.b-block__title').html());

            // ползунок суммы
            $("#cash").slider({
                range: "min",
                value: window.config.priceRange.value,
                min: window.config.priceRange.min,
                step: window.config.priceRange.step,
                max: window.config.priceRange.max,
                slide: function(event, ui) {
                    $("#amount_cash").val(ui.value);
                    $("#myamsumm").val(ui.value);
                    total();
                }
            });

            $("#amount_cash").val(($("#cash").slider("value")));
            $("#myamsumm").val(($("#cash").slider("value")));
            $("#amount_cash").val(number_format($("#amount_cash").val()));
            $("#myamsumm").val(number_format($("#amount_cash").val()));

            $("#cash-pts").slider({
                range: "min",
                value: window.config.priceRangePTS.value,
                min: window.config.priceRangePTS.min,
                step: window.config.priceRangePTS.step,
                max: window.config.priceRangePTS.max,
                slide: function(event, ui) {
                    $("#amount_cash-pts").val(ui.value);
                    $("#myamsumm-pts").val(ui.value);
                    totalPTS();
                }
            });

            $("#amount_cash-pts").val(($("#cash-pts").slider("value")));
            $("#myamsumm-pts").val(($("#cash-pts").slider("value")));
            $("#amount_cash-pts").val(number_format($("#amount_cash-pts").val()));
            $("#myamsumm-pts").val(number_format($("#amount_cash-pts").val()));

            //расчет по дате и сумме
            function total() {
                // var totalGet = $('#total'),
                var totalPayMonth = $('#month'),
                    days = $("#amount_time").val(),
                    cash = $("#amount_cash").val(),
                    totalFinal = $("#total-final"),
                    daysPercents = $(".js-days-percents"),
                    currentMonthPercent;


                // totalGet.html($("#amount_cash").val());


                if (cash < 1000000) {
                    currentMonthPercent = window.config.percents.per5;
                } else if (cash > 1000000 && cash < 3000000) {
                    currentMonthPercent = window.config.percents.per4;
                } else {
                    currentMonthPercent = window.config.percents.per3;
                }

                daysPercents.html(" " + currentMonthPercent * 100 + "% ")

                // if (days >= 1 && days <= 30) {
                //     totalPayMonth.html(cash * currentMonthPercent);
                //     totalFinal.html(number_format(String(cash * currentMonthPercent + parseInt(cash))));
                // } else if (days >= 31 && days <= 60) {
                //     totalPayMonth.html(cash * currentMonthPercent * 2);
                //     totalFinal.html(number_format(String(cash * currentMonthPercent * 2 + parseInt(cash))));
                // } else if (days >= 61 && days <= 90) {
                //     totalPayMonth.html(cash * currentMonthPercent * 3);
                //     totalFinal.html(number_format(String(cash * currentMonthPercent * 3 + parseInt(cash))));
                // } else if (days >= 91 && days <= 120) {
                //     totalPayMonth.html(cash * currentMonthPercent * 4);
                //     totalFinal.html(number_format(String(cash * currentMonthPercent * 4 + parseInt(cash))));
                // } else if (days >= 121 && days <= 150) {
                //     totalPayMonth.html(cash * currentMonthPercent * 5);
                //     totalFinal.html(number_format(String(cash * currentMonthPercent * 5 + parseInt(cash))));
                // } else if (days >= 151 && days <= 180) {
                //     totalPayMonth.html(cash * currentMonthPercent * 6);
                //     totalFinal.html(number_format(String(cash * currentMonthPercent * 6 + parseInt(cash))));
                // } else if (days >= 181 && days <= 210) {
                //     totalPayMonth.html(cash * currentMonthPercent * 7);
                //     totalFinal.html(number_format(String(cash * currentMonthPercent * 7 + parseInt(cash))));
                // } else if (days >= 211 && days <= 240) {
                //     totalPayMonth.html(cash * currentMonthPercent * 8);
                //     totalFinal.html(number_format(String(cash * currentMonthPercent * 8 + parseInt(cash))));
                // } else if (days >= 241 && days <= 270) {
                //     totalPayMonth.html(cash * currentMonthPercent * 9);
                //     totalFinal.html(number_format(String(cash * currentMonthPercent * 9 + parseInt(cash))));
                // } else if (days >= 271 && days <= 300) {
                //     totalPayMonth.html(cash * currentMonthPercent * 10);
                //     totalFinal.html(number_format(String(cash * currentMonthPercent * 10 + parseInt(cash))));
                // } else if (days >= 301 && days <= 330) {
                //     totalPayMonth.html(cash * currentMonthPercent * 11);
                //     totalFinal.html(number_format(String(cash * currentMonthPercent * 11 + parseInt(cash))));
                // } else if (days >= 331 && days <= 365) {
                //     totalPayMonth.html(cash * currentMonthPercent * 12);
                //     totalFinal.html(number_format(String(cash * currentMonthPercent * 12 + parseInt(cash))));
                // }
                totalPayMonth.html(cash * currentMonthPercent * days);
                totalFinal.html(number_format(String(cash * currentMonthPercent * days + parseInt(cash))));

                // totalGet.html(number_format(totalGet.html()));
                // $('input[name="cash_get"]').val(totalGet.html());
                totalPayMonth.html(number_format(totalPayMonth.html()));
                $('input[name="payment"]').val(totalPayMonth.html());
                $("#amount_cash").val(number_format($("#amount_cash").val()));
            }

            function totalPTS() {
                var totalPayMonth = $('#month-pts'),
                    days = $("#amount_time-pts").val(),
                    cash = $("#amount_cash-pts").val(),
                    totalFinal = $("#total-final-pts"),
                    daysPercents = $(".js-days-percents-pts"),
                    currentMonthPercent;

                if (cash <= 200000) {
                    currentMonthPercent = window.config.percentsPTS.per3;
                } else if (cash <= 450000 && cash >= 250000) {
                    currentMonthPercent = window.config.percentsPTS.per2;
                } else {
                    currentMonthPercent = window.config.percentsPTS.per1;
                }

                // daysPercents.html(" " + currentMonthPercent * 100 + "% ")
                daysPercents.html(" " + (currentMonthPercent * 100).toFixed(1).replace(/\.0+$/, "") + "% ");

                totalPayMonth.html(cash * currentMonthPercent * days);
                totalFinal.html(number_format(String(cash * currentMonthPercent * days + parseInt(cash))));

                totalPayMonth.html(number_format(totalPayMonth.html()));
                $('input[name="payment"]').val(totalPayMonth.html());
                $("#amount_cash-pts").val(number_format($("#amount_cash-pts").val()));
            }

            //  сопряжение слов
            function getNumEnding(iNumber, aEndings) {
                var sEnding, i;
                iNumber = iNumber % 100;
                if (iNumber >= 11 && iNumber <= 19) {
                    sEnding = aEndings[2];
                } else {
                    i = iNumber % 10;
                    switch (i) {
                        case (1):
                            sEnding = aEndings[0];
                            break;
                        case (2):
                        case (3):
                        case (4):
                            sEnding = aEndings[1];
                            break;
                        default:
                            sEnding = aEndings[2];
                    }
                }
                return sEnding;
            }

            // ползунок даты
            $("#time").slider({
                range: "min",
                value: window.config.daysRange.value,
                min: window.config.daysRange.min,
                step: window.config.daysRange.step,
                max: window.config.daysRange.max,
                slide: function(event, ui) {
                    $("#amount_time").val(ui.value);
                    $("#myamtime").val(ui.value);
                    $('.b-calc-param__textday').html(getNumEnding($("#amount_time").val(), ['месяц', 'месяца', 'месяцев']));
                    $("#amount_cash").val(number_norm($("#amount_cash").val()));
                    $("#myamsumm").val(number_norm($("#amount_cash").val()));
                    total();
                }
            });

            $("#amount_time").val($("#time").slider("value"));
            $("#myamtime").val($("#time").slider("value"));
            // date.setDate(date.getDate() + $("#time").slider("value"));
            // $(".js-last-payment-day").html(date.toLocaleString("ru", options));

            var currentDay = $("#amount_time").val(),
                currentPercent,
                currentMonthPercent;

            if (window.config.priceRange.value < 1000000) {
                currentMonthPercent = window.config.percents.per5;
            } else if (window.config.priceRange.value > 1000000 && window.config.priceRange.value < 3000000) {
                currentMonthPercent = window.config.percents.per4;
            } else {
                currentMonthPercent = window.config.percents.per3;
            }

            // if (currentDay >= 1 && currentDay <= 30) {
            //     currentPercent = currentMonthPercent;
            // } else if (currentDay >= 31 && currentDay <= 60) {
            //     currentPercent = currentMonthPercent * 2;
            // } else if (currentDay >= 61 && currentDay <= 90) {
            //     currentPercent = currentMonthPercent * 3;
            // } else if (currentDay >= 91 && currentDay <= 120) {
            //     currentPercent = currentMonthPercent * 4;
            // } else if (currentDay >= 121 && currentDay <= 150) {
            //     currentPercent = currentMonthPercent * 5;
            // } else if (currentDay >= 151 && currentDay <= 180) {
            //     currentPercent = currentMonthPercent * 6;
            // } else if (currentDay >= 181 && currentDay <= 210) {
            //     currentPercent = currentMonthPercent * 7;
            // } else if (currentDay >= 211 && currentDay <= 240) {
            //     currentPercent = currentMonthPercent * 8;
            // } else if (currentDay >= 241 && currentDay <= 270) {
            //     currentPercent = currentMonthPercent * 9;
            // } else if (currentDay >= 271 && currentDay <= 300) {
            //     currentPercent = currentMonthPercent * 10;
            // } else if (currentDay >= 301 && currentDay <= 330) {
            //     currentPercent = currentMonthPercent * 11;
            // } else if (currentDay >= 331 && currentDay <= 365) {
            //     currentPercent = currentMonthPercent * 12;
            // }

            currentPercent = currentMonthPercent * currentDay;

            $("#month").html($("#cash").slider("value") * currentPercent);
            $("#total-final").html($("#cash").slider("value") + $("#cash").slider("value") * currentPercent);
            $("#month").html(number_format($("#month").html()));
            $("#total").html(number_format($("#amount_cash").val()));
            $("#total-final").html(number_format($("#total-final").html()));

            $(".js-days-percents").html(" " + currentMonthPercent * 100 + "% ");

            $(".js-q-price-range-value, .js-q-days-range-value").on("focus", function() {
                $(this).val($(this).val().replace(/\s+/g, ''));
            })

            $(".js-q-price-range-value").on("change", function() {
                if ($(this).val() > window.config.priceRange.max) {
                    $(this).val(window.config.priceRange.max)
                } else if ($(this).val() < window.config.priceRange.min) {
                    $(this).val(window.config.priceRange.min)
                }
                $("#cash").slider("value", $(this).val());
                total();

            })
            $(".js-q-days-range-value").on("change", function() {
                if ($(this).val() > window.config.daysRange.max) {
                    $(this).val(window.config.daysRange.max)
                } else if ($(this).val() < window.config.daysRange.min) {
                    $(this).val(window.config.daysRange.min)
                }
                $("#time").slider("value", $(this).val());
                // var date = new Date();
                // date.setDate(date.getDate() + $("#time").slider("value"));
                // $(".js-last-payment-day").html(date.toLocaleString("ru", options));
                // $('.b-calc-param__textday').html(getNumEnding($("#amount_time").val(), ['день', 'дня', 'дней']));
                $("#amount_cash").val(number_norm($("#amount_cash").val()));
                total();
            })
            $(".js-q-price-range-value").on("blur", function() {
                $("#amount_cash").val(number_format($("#amount_cash").val()));
            })

            $("#time-pts").slider({
                range: "min",
                value: window.config.daysRangePTS.value,
                min: window.config.daysRangePTS.min,
                step: window.config.daysRangePTS.step,
                max: window.config.daysRangePTS.max,
                slide: function(event, ui) {
                    $("#amount_time-pts").val(ui.value);
                    $("#myamtime-pts").val(ui.value);
                    $('.b-calc-param__textday-pts').html(getNumEnding($("#amount_time-pts").val(), ['месяц', 'месяца', 'месяцев']));
                    $("#amount_cash-pts").val(number_norm($("#amount_cash-pts").val()));
                    $("#myamsumm-pts").val(number_norm($("#amount_cash-pts").val()));
                    totalPTS();
                }
            });

            $("#amount_time-pts").val($("#time-pts").slider("value"));
            $("#myamtime-pts").val($("#time-pts").slider("value"));


            var currentDayPTS = $("#amount_time-pts").val(),
            currentPercentPTS,
            currentMonthPercentPTS;

            // if (window.config.priceRangePTS.value < 1000000) {
            //     currentMonthPercentPTS = window.config.percentsPTS.per3;
            // } else if (window.config.priceRangePTS.value > 1000000 && window.config.priceRangePTS.value < 3000000) {
            //     currentMonthPercentPTS = window.config.percentsPTS.per2;
            // } else {
            //     currentMonthPercentPTS = window.config.percentsPTS.per1;
            // }

            if (window.config.priceRangePTS.value <= 200000) {
                currentMonthPercentPTS = window.config.percentsPTS.per3;
            } else if (window.config.priceRangePTS.value <= 450000 && window.config.priceRangePTS.value >= 250000) {
                currentMonthPercentPTS = window.config.percentsPTS.per2;
            } else {
                currentMonthPercentPTS = window.config.percentsPTS.per1;
            }

            currentPercentPTS = (currentMonthPercentPTS * currentDayPTS);

            $("#month-pts").html(($("#cash-pts").slider("value") * currentPercentPTS).toFixed(0));
            $("#total-final-pts").html(($("#cash-pts").slider("value") + $("#cash-pts").slider("value") * currentPercentPTS).toFixed(0));
            $("#month-pts").html(number_format($("#month-pts").html()));
            $("#total-pts").html(number_format($("#amount_cash-pts").val()));
            $("#total-final-pts").html(number_format($("#total-final-pts").html()));

            $(".js-days-percents-pts").html((currentMonthPercentPTS * 100).toFixed(1).replace(/\.0+$/, "") + "% ");

            $(".js-q-price-range-value-pts").on("blur", function() {
                $("#amount_cash-pts").val(number_format($("#amount_cash-pts").val()));
            })

            $(".js-q-price-range-value-pts, .js-q-days-range-value-pts").on("focus", function() {
                $(this).val($(this).val().replace(/\s+/g, ''));
            })

            $(".js-q-price-range-value-pts").on("change", function() {
                if ($(this).val() > window.config.priceRangePTS.max) {
                    $(this).val(window.config.priceRangePTS.max)
                } else if ($(this).val() < window.config.priceRangePTS.min) {
                    $(this).val(window.config.priceRangePTS.min)
                }
                $("#cash-pts").slider("value", $(this).val());
                totalPTS();

            })
            $(".js-q-days-range-value-pts").on("change", function() {
                if ($(this).val() > window.config.daysRangePTS.max) {
                    $(this).val(window.config.daysRangePTS.max)
                } else if ($(this).val() < window.config.daysRangePTS.min) {
                    $(this).val(window.config.daysRangePTS.min)
                }
                $("#time-pts").slider("value", $(this).val());
                // var date = new Date();
                // date.setDate(date.getDate() + $("#time").slider("value"));
                // $(".js-last-payment-day").html(date.toLocaleString("ru", options));
                // $('.b-calc-param__textday').html(getNumEnding($("#amount_time").val(), ['день', 'дня', 'дней']));
                $("#amount_cash-pts").val(number_norm($("#amount_cash-pts").val()));
                totalPTS();

            })

            $(".js-q-price-range-value-pts").on("blur", function() {
                $("#amount_cash-pts").val(number_format($("#amount_cash-pts").val()));
            })


            $(document).on("keydown", ".js-input-only-numbers", function(e) {-1 !== $.inArray(e.keyCode, [46, 8, 9, 27, 13]) || (/65|67|86|88/.test(e.keyCode) && (e.ctrlKey === true || e.metaKey === true)) && (!0 === e.ctrlKey || !0 === e.metaKey) || 35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey || 48 > e.keyCode || 57 < e.keyCode) && (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault() });

            $('.cacl_next').on('click', function() {
                console.log($(this).parents().find('.calc_borrow_step_1'));
                $(this).parents('.calc__wrap').find('.calc_borrow_step_1').animate({
                    'top': '-418px'
                }, { duration: 500, queue: false });

                $(this).parents('.calc__wrap').find('.calc_borrow_step_2').animate({
                    'top': '-440px'
                }, { duration: 500, queue: false });

                // $('.calc_borrow_step_2_form').addClass('active');
                $(this).hide();
                $(this).parents('.calc__wrap').find('.cacl_back').show();
            });
            $('.cacl_back').on('click', function() {
                $('.calc_borrow_step_2').animate({
                    'top': '0'
                }, { duration: 500, queue: false });

                // $('.calc_borrow_step_2_form').removeClass('active');
                $('.cacl_next').show();
                $('.cacl_back').hide();

                $('.calc_borrow_step_1').animate({
                    'top': '0'
                }, { duration: 500, queue: false });
            });

            $('.calc_tabs_item').on('click', function() {
                $('.calc_tabs_item').removeClass('active');
                $(this).addClass('active');
                // if ($(this).data('calc') === 'buy') {
                    //// $('.calc_buy').show();
                    // $('.calc_buy').animate({
                    //     'opacity': '1',
                    //     'left': '0'
                    // }, { duration: 500, queue: false });

                    // $('.calc_borrow').animate({
                    //     'opacity': '0',
                    //     'left': '445'
                    // }, { duration: 500, queue: false });
                    //// $('.calc_borrow').hide();
                // } else 
                
                if ($(this).data('calc') === 'borrow') {

                    $('.calc_pts').animate({
                        'opacity': '0',
                        'left': '-445'
                    }, { duration: 500, queue: false });
                    // $('.calc_borrow').show();
                    $('.calc_borrow').animate({
                        'opacity': '1',
                        'left': '0'
                    }, { duration: 500, queue: false });
                    //// $('.calc_buy').css('left', '-100px');
                    //// $('.calc_buy').hide();

                } else if ($(this).data('calc') === 'pts') {

                       // $('.calc_buy').show();
                       $('.calc_pts').animate({
                        'opacity': '1',
                        'left': '0'
                    }, { duration: 500, queue: false });

                    $('.calc_borrow').animate({
                        'opacity': '0',
                        'left': '445'
                    }, { duration: 500, queue: false });
                    //// $('.calc_borrow').hide();

                }
            });

        }
    }

// calc end	
	
	
	
});
