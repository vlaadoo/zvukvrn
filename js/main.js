/*
	RentaPRO by WekbKB
	webkb.ru
*/
//modal
$(document).on('click','#callback', function(){
	$('.modal__callback-wrap').show();
	return false;
});
$(document).on('click','#modal__close', function(){
	$(".modal__callback-wrap").hide();
});
$(document).click( function(event){
	if( $(event.target).closest(".modal__callback").length ) return;
	$(".modal__callback-wrap").hide();
	event.stopPropagation();
  });
//form-ajax
	$(document).ready(function () {
		$("form.modal__callback").submit(function () {
		// Получение ID формы
		var formID = 'callback-modal';
		// Добавление решётки к имени ID
		var formNm = $('#' + formID);
		$.ajax({
		type: "POST",
		url: '/contact/',
		data: formNm.serialize(),
		success: function () {
		// Вывод текста результата отправки
		$(formNm).html('Спасибо за отправку вашего сообщения!');
		},
		error: function (jqXHR, text, error) {
		// Вывод текста ошибки отправки
		$(formNm).html('Ошибка. Сообщение не отправлено, заполнены не все поля! Обновите страницу и попробуйте еще раз.<br>'+ error);
		}
		});
		return false;
		});
	});
//fixed menu
function onScroll(){
    if ($(document).scrollTop() > 0){
    $('#header_bs').addClass('scroll-m');
    } 
	else 
    {
    $('#header_bs').removeClass('scroll-m');
    }
}
$(function () {
	$(document).on("scroll", onScroll);
});
//

(function($) {

	skel.breakpoints({
		xlarge:	'(max-width: 1680px)',
		large:	'(max-width: 1280px)',
		medium:	'(max-width: 980px)',
		small:	'(max-width: 736px)',
		xsmall:	'(max-width: 480px)'
	});

	$(function() {

		var	$window = $(window),
			$body = $('body');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				window.setTimeout(function() {
					$body.removeClass('is-loading');
				}, 100);
			});

		// Fix: Placeholder polyfill.
			$('form').placeholder();

		// Prioritize "important" elements on medium.
			skel.on('+medium -medium', function() {
				$.prioritize(
					'.important\\28 medium\\29',
					skel.breakpoint('medium').active
				);
			});

		// Menu			
			$('#menu')
				.append('<a href="#menu" class="close"></a>')
				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'right'
				});

		// Banner.
			var $banner = $('#banner');

			if ($banner.length > 0) {

				// IE fix.
					if (skel.vars.IEVersion < 12) {

						$window.on('resize', function() {

							var wh = $window.height() * 0.60,
								bh = $banner.height();

							$banner.css('height', 'auto');

							window.setTimeout(function() {

								if (bh < wh)
									$banner.css('height', wh + 'px');

							}, 0);

						});

						$window.on('load', function() {
							$window.triggerHandler('resize');
						});

					}

				// Video check.
					var video = $banner.data('video');

					if (video)
						$window.on('load.banner', function() {

							// Disable banner load event (so it doesn't fire again).
								$window.off('load.banner');

							// Append video if supported.
								if (!skel.vars.mobile
								&&	!skel.breakpoint('large').active
								&&	skel.vars.IEVersion > 9)
									$banner.append('<video autoplay loop muted><source src="' + video + '.mp4" type="video/mp4" /><source src="' + video + '.webm" type="video/webm" /></video>');

						});

				// More button.
					$banner.find('.more')
						.addClass('scrolly');

			}

		// Tabbed Boxes

			$('.flex-tabs').each( function() {

				var t 		= jQuery(this),
					tab 	= t.find('.tab-list li a'),
					tabs 	= t.find('.tab');

				tab.click(function(e) {

					var x = jQuery(this),
						y = x.data('tab');

					// Set Classes on Tabs
						tab.removeClass('active');
						x.addClass('active');

					// Show/Hide Tab Content
						tabs.removeClass('active');
						t.find('.' + y).addClass('active');

					e.preventDefault();

				});

			});

		// Scrolly.
			if ( $( ".scrolly" ).length ) {

				var $height = $('#header').height();

				$('.scrolly').scrolly({
					offset: $height
				});
			}

	});

})(jQuery);


$('#show_more').click(function(){
        var btn_more = $(this);
        var count_show = parseInt($(this).attr('count_show'));
        var count_add  = $(this).attr('count_add');
        btn_more.val('Подождите...');
                 
        $.ajax({
                    url: "/load_more/", 
                    type: "post", 
                    dataType: "json", 
                    data: { 
                        "count_show":   count_show,
                        "count_add":    count_add
                    },
                    
                    success: function(data){
            if(data.result == "success"){
                $('#mydcontent').append(data.html);
                    btn_more.val('Показать еще');
                    btn_more.attr('count_show', (count_show+9));
            }else{
                btn_more.val('Показан последний элемент');
            }
                    }
                });
            });