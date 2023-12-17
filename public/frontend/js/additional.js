var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };

if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

jQuery(document).ready(function($){
	
	$('body').delegate('.active_lang', 'click', function(){
		$(".anim_overlay:not(#modal_language)").removeClass('active');
		$('.iframe_video').empty();
		if ($('#modal_language').hasClass('active')) {
			$('#modal_language').removeClass('active');
		} else {
			$('#modal_language').addClass('active');
		}
		return false;
	});
	$('body').delegate('.open_share', 'click', function(){
		$(".anim_overlay:not(#modal_share)").removeClass('active');
		$('.iframe_video').empty();
		if ($('#modal_share').hasClass('active')) {
			$('#modal_share').removeClass('active');
		} else {
			$('#modal_share').addClass('active');
		}
		return false;
	});
	$('body').delegate('[data-youtube]', 'click', function(){
		$(".anim_overlay:not(#modal_video)").removeClass('active');
		$('.iframe_video').empty();
		if ($('#modal_video').hasClass('active')) {
			$('#modal_video').removeClass('active');
		} else {
			$('#modal_video').addClass('active');
			$('.iframe_video').html('<iframe width="560" height="315" src="https://web.archive.org/web/20220330223425/https://www.youtube.com/embed/'+ $(this).data('youtube') +'?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
		}
		return false;
	});
	$('body').delegate('.anim_overlay_close, .btn_overlay_close', 'click', function(){
		$(this).parents('.anim_overlay').removeClass('active');
		$('.iframe_video').empty();
		return false;
	});
	$(document).click(function(event) {
		if ($(event.target).closest(".anim_overlay").length) return;
		$(".anim_overlay").removeClass('active');
		$('.iframe_video').empty();
		event.stopPropagation();
    }); 
	
	$('.btnmenu').click(function(){
		$('body').toggleClass('show_menu_overlay');
		return false;
	});
	
	$('.open_register').click(function(){
		$('.bl_login').removeClass('open');
		$('.bl_register').addClass('open');
		$('.loginform').removeClass('show');
		$('.registerform').addClass('show');
		return false;
	});
	$('.open_login').click(function(){
		$('.bl_login').addClass('open');
		$('.bl_register').removeClass('open');
		$('.registerform').removeClass('show');
		$('.loginform').addClass('show');
		return false;
	});
	
	$(".top_menu li.parent").mouseenter(function() {
		var w = $(this).find('ul').outerWidth();
		var h = $(this).find('ul').outerHeight();
		var l = $(this).position().left - ((w -$(this).outerWidth()) / 2);
		$('.submenu_bg').css({width: w, height: h, left: l});
		$('.submenu_bg').addClass('open');
		setTimeout(function(){
			$('.submenu_bg').addClass('active');
		}, 250);
	}).mouseleave(function() {
		$('.submenu_bg').css({width: 0, height: 0});
	});
	$(".top_menu").mouseleave(function() {
		$('.submenu_bg').removeClass('active open');
	});
	
	/*
	$('.section_currency_slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		fade: false,
		infinite: true,
		variableWidth: true,
		swipeToSlide: true,
		autoplay: true,
		autoplaySpeed: 2000
	});
	*/
	
	$('#totop').click(function(){
		$('html, body').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	
	
	$('[data-year]').click(function(){
		var y = $(this).data('year');
		if ($('.roadmap_title_sticky > div').length) {
			var titleH = $('.roadmap_title_sticky > div').outerHeight();
		} else {
			var titleH = 0;
		}
		$('html, body').animate({
			scrollTop: $('[data-year-block="'+ y +'"]').offset().top - titleH
		}, 800);
		return false;
	});
	
	var isTouch = "ontouchstart" in window || navigator.msMaxTouchPoints;
	
	if (isTouch) {
		$('.section_news').addClass('is_touch');
	}
	
	$(function(){
		var curDown = false, curXPos = 0, curXPosA = 0;
		var movement = false;
		var mousetravel = 0;
		var lastmousetime;
		var el = $('.news_wrap');
		var plans;
		el.mousedown(function(m){
			plans = $(this);
			movement = false;
			var md = new Date();
			lastmousetime = md.getTime();
			curXPosA = m.pageX;
			mousetravel = m.pageX;
			curXPos = m.pageX + plans.scrollLeft();
			curDown = true;
			plans.addClass('dragged');
			plans.stop();
			
			plans.mousemove(function(m){
				if (curDown) {
					movement = true;
					mousetravel = m.pageX;
					var pos = curXPos - m.pageX;
					plans.scrollLeft(pos);
					newsprogress(pos);
				}
			});	
			
		});
		function newsprogress(pos){
			var pr = $('.news_progress').width();
			var wrppr = $('#planes').width() - $('.news_wrap').width();
			posnav = pos / wrppr * pr;
			if (posnav < 0) posnav = 0;
			if (posnav > pr) posnav = pr;
			$('.news_progress div').css({width: posnav});
		}
		function onMouseUp(m){
			var md = new Date();
			var timenow = md.getTime();
			var pos = (m.pageX - curXPosA) / (timenow - lastmousetime) * 2000 * -1;
			var pps = Math.round(Math.abs(pos) / 2);
			if (pps > 200) {
				pos = pos / 2;
				pos = pos * pps / 1000 + plans.scrollLeft();
				plans.stop().animate({ 
					scrollLeft : pos
				}, pps, 'easeOutCubic');
				newsprogress(pos);
			}
			curDown = false;
			$('.news_wrap').removeClass('dragged');
		}
		function onMouseClick(e){
			if(movement){
				e.preventDefault();
				e.stopPropagation();
			}
		}
		function onDragStart(e){
			e.preventDefault();
			e.stopPropagation();
		}
		window.addEventListener('dragstart',onDragStart);
		$(window).mouseup(onMouseUp);
		window.addEventListener('blur',onMouseUp);
		$('#planes a').click(onMouseClick);
	});
	
	
	var winHeight = 0;
	
	$(window).on('resize', function() {
		
		winHeight = $(window).height();
		
	}).resize();
	
	$(window).on('scroll', function(e){
		
		var currentPos = parseInt($(window).scrollTop());
		
		$('.anim:not(.anim_start)').each(function(){
			var yT = $(this).offset().top;
			var h = $(this).outerHeight(true);
			if (currentPos + (winHeight / 4 * 3) >= yT && currentPos <= yT + h) {
				$(this).addClass('anim_start');
			}
		});
		
		/*
		if ($('.wrp_news_list').length) {
			if (currentPos + winHeight >= $('.wrp_news_list').offset().top) {
				var npos = parseInt((currentPos + winHeight - $('.wrp_news_list').offset().top) / 10);
				$('.wrp_news_list').css({'transform': 'translateY(-'+ npos +'px)'});
			}
		}
		*/
		
	}).scroll();
	
	
	$('body').delegate('.icon_password', 'click', function(){
		$(this).parent().toggleClass('showpassword');
		if ($(this).parent().hasClass('showpassword')) {
			$(this).parent().find('input').attr('type', 'text');
		} else {
			$(this).parent().find('input').attr('type', 'password');
		}
		return false;
	});
	
	
	$('.password_valid').keyup(function(){
		var v = $(this).val();
		var lovercase = /[a-z]/.test(v);
		var number = /\d/.test(v);
		var uppercase = /[A-Z]/.test(v);
		if (lovercase) {
			$('.lovercase_valid').addClass('valid');
		} else {
			$('.lovercase_valid').removeClass('valid');
		}
		if (number) {
			$('.number_valid').addClass('valid');
		} else {
			$('.number_valid').removeClass('valid');
		}
		if (uppercase) {
			$('.uppercase_valid').addClass('valid');
		} else {
			$('.uppercase_valid').removeClass('valid');
		}
	});
	
	$('.roadmap_list').on('afterChange', function(event, slick, currentSlide){
		$('.roadmap_progress > div').css({width: (Math.round(currentSlide * 100 / (slick.$slides.length - 1))) + '%'});
	});
	
	$('.whydoesitwork_scroll').scrollLeft((800 - $(window).width()) / 2);
	
	$('body').delegate('.about_list_btn a', 'click', function(){
		$('.about_list_btn li').removeClass('active');
		$(this).parent().addClass('active');
		$('.about_list_content > div').removeClass('active');
		$('.about_list_content > div').eq($(this).parent().index()).addClass('active');
		aboutlistactive();
		return false;
	});
	
	function aboutlistactive() {
		if ($('.about_list_active').length) {
			$('.about_list_active').css({
				top: $('.about_list_btn li.active').position().top, 
				height: $('.about_list_btn li.active').height()
			});
		}
	}
	
	aboutlistactive();
	
	$('.howtostart_item, .aditem, .about_advantages_item').hover(async function () {
		if ($(this).find('lottie-player').length) {
			var anim = $(this).find('lottie-player').get(0).getLottie();
			anim.loop = true;
			anim.play();
		}
	}, async function () {
		if ($(this).find('lottie-player').length) {
			const anim = $(this).find('lottie-player').get(0).getLottie();
			anim.stop();
		}
	});
	
	var howtostartdesc = 0;
	$('.howtostart_desc > div').each(function(){
		if ($(this).height() > howtostartdesc) {
			howtostartdesc = $(this).height();
		}
	});
	$('.howtostart_desc').css({height: howtostartdesc});
	
	$('body').delegate('.howtostart_item', 'click', function(){
		$('.howtostart_items > div').removeClass('active');
		$('.howtostart_desc > div').removeClass('active');
		$('.howtostart_center > div').removeClass('active');
		$(this).parent().addClass('active');
		var i = $('.howtostart_items .active').index();
		var tr = (i * 33.33 - 33.33) * -1;
		$('.howtostart_items').css({'transform':'translateX('+ tr +'%)'});
		$('.howtostart_desc > div').eq(i).addClass('active');
		$('.howtostart_center > div').eq(i).addClass('active');
		return false;
	});
	
	
	$('.calc_inp_group input, .input__field').each(function() { 
		if( $(this).val().trim() !== '' ) {
			$(this).parent().addClass('input--filled');
		}
	});
	$('.calc_inp_group input, .input__field').on('focus', function() {
        $(this).parent().addClass('input--filled');
    });
    $('.calc_inp_group input, .input__field').on('blur', function() {
        if( $(this).val().trim() === '' ) {
			$(this).parent().removeClass('input--filled');
		} 
    });
	$('.calc_inp_group input, .input__field').on('input', function(){
		if( $(this).val().trim() !== '' ) {
			$(this).parent().addClass('input--filled');
		}
	});
	
	$('[data-copy]').click(function(){
		var $tmp = $("<textarea>");
		$("body").append($tmp);
		$tmp.val($('[data-copy-text="'+ $(this).data('copy') +'"]').text()).select();
		document.execCommand("copy");
		$tmp.remove();
		$(".anim_overlay").removeClass('active');
		$('#modal_copy').addClass('active');
		return false;
	});
	
	$('.faq_item_title').click(function(){
		$(this).parent().children('.faq_item_content').slideToggle(300);
		$(this).parent().toggleClass('open');
		return false;
	});
	
	$('.wrp_search button').click(function(){
		$('.wrp_search').addClass('result');
		return false;
	});
	
	$(document).click(function(event) {
		if ($(event.target).closest(".wrp_search").length) return;
		$('.wrp_search').removeClass('result');
		event.stopPropagation();
    }); 
	
	$('.calculate_btn a').click(function(){
		$(this).parent().find('a').removeClass('active');
		//$(this).parents('.calculate_form').find('.calculate_input').removeClass('active');
		$(this).addClass('active');
		//$(this).parents('.calculate_form').find('.calculate_input').eq($(this).index()).addClass('active');
		return false;
	});
	
	$('.btn_percent').click(function(){
		$(this).parent().find('.btn_percent').removeClass('active');
		$(this).addClass('active');
		// var data = $(this).data('minmax');
		// var p = $(this).parents('.wrp_calculate');
		// p.find('.datamin').html(data[0]);
		// p.find('.datamax').html(data[1]);
		//return false;
	});
	
	if ($.fn.slick) {
		$('.wrp_lot_list:not(.slick-initialized)').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows: false,
			dots: true,
			infinite: false,
			responsive: [
				{
					breakpoint: 1100,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 700,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	}
	
	$('body').delegate('.overlay_message_close', 'click', function(){
		$(this).parent().animate({
			'left':'385px'
		}, 300, function(){
			$(this).hide();
		});
		return false;
	});
	
	$('body').delegate('.btn_circle_reverse', 'click', function(){
		$(this).parents('.lot_item_circle_reverse').toggleClass('reverse');
		return false;
	});
	
	$('.block1r_item').each(function(index){
		var bl = $(this);
		setInterval(function(){
			if (bl.find('.active').next().length) {
				bl.find('.active').removeClass('active').next().addClass('active');
			} else {
				bl.find('.active').removeClass('active');
				bl.find('div').eq(0).addClass('active');
			}
		}, 2000 + 500 * index);
	});
	
    $('body').delegate('[data-youtube-inner]', 'click', function () {
        let videoId = $(this).data('youtube-inner');
        let width = $(this).data('youtube-width') ? $(this).data('youtube-width') : '560';
        let height = $(this).data('youtube-height') ? $(this).data('youtube-height') : '315';

        $(this).html('<iframe width="' + width + '" height="' + height + '" style="width: ' + width + 'px; height: ' + height + 'px;" src="https://web.archive.org/web/20220330223425/https://www.youtube.com/embed/' + videoId +'?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
		return false;
    });

    $('body').delegate('[data-video-inner]', 'click', function () {
        let iframeUrl = $(this).data('video-inner');
        let width = $(this).data('youtube-width') ? $(this).data('youtube-width') : '560';
        let height = $(this).data('youtube-height') ? $(this).data('youtube-height') : '315';

        $(this).html('<iframe width="' + width + '" height="' + height + '" style="width: ' + width + 'px; height: ' + height + 'px;" src="' + iframeUrl + '?autoplay=1" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        return false;
    });
	
	//setInterval(function(){
	//	$('.section_currency_slider').prepend($('.section_currency_slider > div:last-child'));
	//}, 500);
	
	//setInterval(function(){
	//	$('.trading_table tbody').prepend($('.trading_table tbody tr:last-child'));
	//}, 500);
	
	$(function(){
		var curDown = false, curXPos = 0, curXPosA = 0;
		var fil = $('.chart_filter');
		var countW = $('.chart_filter a').length * 110;
		var sc = $('.chart_filter_scroll');
		var el = $('.chart_filter_scroll_btn');
		var plans;
		el.mousedown(function(m){
			plans = $(this);
			curXPosA = m.pageX;
			curXPos = plans.position().left;
			curDown = true;
		});
		$(window).mousemove(function(m){
			if (curDown) {
				var pos = curXPos - (curXPosA - m.pageX);
				if (pos <= 0) pos = 0;
				if (pos + el.width() >= sc.width()) pos = sc.width() - el.width();
				plans.css({left: pos});
				var p = pos * 100 / sc.width();
				pos = countW * p / 100;
				fil.scrollLeft(pos);
			}
		});
		function onMouseUp(m){
			curDown = false;
		}
		$(window).mouseup(onMouseUp);
		window.addEventListener('blur',onMouseUp);
		chart_filter_scroll_btn();
		function chart_filter_scroll_btn(){
			var p = fil.width() * 100 / countW;
			var w = sc.width() * p / 100;
			el.css({width: w });
		}
		$('body').delegate('.chart_filter_prev, .chart_filter_next', 'click', function () {
			var pos = fil.scrollLeft();
			if ($(this).hasClass('chart_filter_next')) {
				pos = pos + 110;
			} else {
				pos = pos - 110;
			}
			fil.stop().animate({ 
				scrollLeft : pos
			}, 300, 'easeOutCubic');
			var p = pos * 100 / countW;
			pos = sc.width() * p / 100;
			if (pos <= 0) pos = 0;
			if (pos + el.width() >= sc.width()) pos = sc.width() - el.width();
			el.stop().animate({ 
				left : pos
			}, 300, 'easeOutCubic');
			return false;
		});
		$(window).on('resize', function() {
			chart_filter_scroll_btn();
		});
	});
	
	
});

$(window).on('load', function(){
	$('body').addClass('load');
});

$(window).on('load resize', function() {
	
	$('.section_news .news_item_bottom').css({height: 'auto'});
	var news_item_bottom = 0;
	$('.section_news .news_item_bottom').each(function(){
		if ($(this).outerHeight() > news_item_bottom) {
			news_item_bottom = $(this).outerHeight();
		}
	});
	$('.section_news .news_item_bottom').css({height: news_item_bottom});
	
	if ($(window).width() <= 768) {
		$('lottie-player').each(function(){
			var anim = $(this).get(0).getLottie();
			anim.loop = true;
			anim.play();
		});
	} else {
		$('lottie-player').each(function(){
			var anim = $(this).get(0).getLottie();
			anim.stop();
		});
	}
	
	if ($(window).width() <= 1000 || $(window).height() <= 700) {
		$('.wrp_aditem:not(.slick-initialized)').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows: false,
			dots: true,
			infinite: false,
			responsive: [
				{
					breakpoint: 769,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 500,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
		$('.roadmap_list:not(.slick-initialized)').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			dots: false,
			infinite: false,
			adaptiveHeight: true
		});
	} else {
		$(".wrp_aditem.slick-initialized").slick("unslick");
		$(".roadmap_list.slick-initialized").slick("unslick");
	}
	
	if ($(window).width() <= 768) {
		$('.about_advantages:not(.slick-initialized)').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			dots: true,
			infinite: false
		});
	} else {
		$(".about_advantages.slick-initialized").slick("unslick");
	}

});




// inspiration: https://www.valerian.bnpparibas/en

// tilt.js

(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else if (typeof module === 'object' && module.exports) {
        // Node/CommonJS
        module.exports = function( root, jQuery ) {
            if ( jQuery === undefined ) {
                // require('jQuery') returns a factory that requires window to
                // build a jQuery instance, we normalize how we use modules
                // that require this pattern but the window provided is a noop
                // if it's defined (how jquery works)
                if ( typeof window !== 'undefined' ) {
                    jQuery = require('jquery');
                }
                else {
                    jQuery = require('jquery')(root);
                }
            }
            factory(jQuery);
            return jQuery;
        };
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function ($) {
    $.fn.tilt = function (options) {

        /**
         * RequestAnimationFrame
         */
        const requestTick = function() {
            if (this.ticking) return;
            requestAnimationFrame(updateTransforms.bind(this));
            this.ticking = true;
        };

        /**
         * Bind mouse movement evens on instance
         */
        const bindEvents = function() {
            const _this = this;
            $(this).on('mousemove', mouseMove);
            $(this).on('mouseenter', mouseEnter);
            if (this.settings.reset) $(this).on('mouseleave', mouseLeave);
            if (this.settings.glare) $(window).on('resize', updateGlareSize.bind(_this));
        };

        /**
         * Set transition only on mouse leave and mouse enter so it doesn't influence mouse move transforms
         */
        const setTransition = function() {
            if (this.timeout !== undefined) clearTimeout(this.timeout);
            $(this).css({'transition': `${this.settings.speed}ms ${this.settings.easing}`});
            if(this.settings.glare) this.glareElement.css({'transition': `opacity ${this.settings.speed}ms ${this.settings.easing}`});
            this.timeout = setTimeout(() => {
                $(this).css({'transition': ''});
                if(this.settings.glare) this.glareElement.css({'transition': ''});
            }, this.settings.speed);
        };

        /**
         * When user mouse enters tilt element
         */
        const mouseEnter = function(event) {
            this.ticking = false;
            $(this).css({'will-change': 'transform'});
            setTransition.call(this);

            // Trigger change event
            $(this).trigger("tilt.mouseEnter");
        };

        /**
         * Return the x,y position of the mouse on the tilt element
         * @returns {{x: *, y: *}}
         */
        const getMousePositions = function(event) {
            if (typeof(event) === "undefined") {
                event = {
                    pageX: $(this).offset().left + $(this).outerWidth() / 2,
                    pageY: $(this).offset().top + $(this).outerHeight() / 2
                };
            }
            return {x: event.pageX, y: event.pageY};
        };

        /**
         * When user mouse moves over the tilt element
         */
        const mouseMove = function(event) {
            this.mousePositions = getMousePositions(event);
            requestTick.call(this);
        };

        /**
         * When user mouse leaves tilt element
         */
        const mouseLeave = function() {
            setTransition.call(this);
            this.reset = true;
            requestTick.call(this);

            // Trigger change event
            $(this).trigger("tilt.mouseLeave");
        };

        /**
         * Get tilt values
         *
         * @returns {{x: tilt value, y: tilt value}}
         */
        const getValues = function() {
            const width = $(this).outerWidth();
            const height = $(this).outerHeight();
            const left = $(this).offset().left;
            const top = $(this).offset().top;
            const percentageX = (this.mousePositions.x - left) / width;
            const percentageY = (this.mousePositions.y - top) / height;
            // x or y position inside instance / width of instance = percentage of position inside instance * the max tilt value
            const tiltX = ((this.settings.maxTilt / 2) - ((percentageX) * this.settings.maxTilt)).toFixed(2);
            const tiltY = (((percentageY) * this.settings.maxTilt) - (this.settings.maxTilt / 2)).toFixed(2);
            // angle
            const angle = Math.atan2(this.mousePositions.x - (left+width/2),- (this.mousePositions.y - (top+height/2)) )*(180/Math.PI);
            // Return x & y tilt values
            return {tiltX, tiltY, 'percentageX': percentageX * 100, 'percentageY': percentageY * 100, angle};
        };

        /**
         * Update tilt transforms on mousemove
         */
        const updateTransforms = function() {
            this.transforms = getValues.call(this);

            if (this.reset) {
                this.reset = false;
                $(this).css('transform', `perspective(${this.settings.perspective}px) rotateX(0deg) rotateY(0deg)`);

                // Rotate glare if enabled
                if (this.settings.glare){
                    this.glareElement.css('transform', `rotate(180deg) translate(-50%, -50%)`);
                    this.glareElement.css('opacity', `0`);
                }

                return;
            } else {
                $(this).css('transform', `perspective(${this.settings.perspective}px) rotateX(${this.settings.axis === 'x' ? 0 : this.transforms.tiltY}deg) rotateY(${this.settings.axis === 'y' ? 0 : this.transforms.tiltX}deg) scale3d(${this.settings.scale},${this.settings.scale},${this.settings.scale})`);

                // Rotate glare if enabled
                if (this.settings.glare){
                    this.glareElement.css('transform', `rotate(${this.transforms.angle}deg) translate(-50%, -50%)`);
                    this.glareElement.css('opacity', `${this.transforms.percentageY * this.settings.maxGlare / 100}`);
                }
            }

            // Trigger change event
            $(this).trigger("change", [this.transforms]);

            this.ticking = false;
        };

        /**
         * Prepare elements
         */
        const prepareGlare = function () {
            const glarePrerender = this.settings.glarePrerender;

            // If option pre-render is enabled we assume all html/css is present for an optimal glare effect.
            if (!glarePrerender)
            // Create glare element
                $(this).append('<div class="js-tilt-glare"><div class="js-tilt-glare-inner"></div></div>');

            // Store glare selector if glare is enabled
            this.glareElementWrapper = $(this).find(".js-tilt-glare");
            this.glareElement = $(this).find(".js-tilt-glare-inner");

            // Remember? We assume all css is already set, so just return
            if (glarePrerender) return;

            // Abstracted re-usable glare styles
            const stretch = {
                'position': 'absolute',
                'top': '0',
                'left': '0',
                'width': '100%',
                'height': '100%',
            };

            // Style glare wrapper
            this.glareElementWrapper.css(stretch).css({
                'overflow': 'hidden',
            });

            // Style glare element
            this.glareElement.css({
                'position': 'absolute',
                'top': '50%',
                'left': '50%',
                'pointer-events': 'none',
                'background-image': `linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%)`,
                'width': `${$(this).outerWidth()*2}`,
                'height': `${$(this).outerWidth()*2}`,
                'transform': 'rotate(180deg) translate(-50%, -50%)',
                'transform-origin': '0% 0%',
                'opacity': '0',
            });

        };

        /**
         * Update glare on resize
         */
        const updateGlareSize = function () {
            this.glareElement.css({
                'width': `${$(this).outerWidth()*2}`,
                'height': `${$(this).outerWidth()*2}`,
            });
        };

        /**
         * Public methods
         */
        $.fn.tilt.destroy = function() {
            $(this).each(function () {
                $(this).find('.js-tilt-glare').remove();
                $(this).css({'will-change': '', 'transform': ''});
                $(this).off('mousemove mouseenter mouseleave');
            });
        };

        $.fn.tilt.getValues = function() {
            const results = [];
            $(this).each(function () {
                this.mousePositions = getMousePositions.call(this);
                results.push(getValues.call(this));
            });
            return results;
        };

        $.fn.tilt.reset = function() {
            $(this).each(function () {
                this.mousePositions = getMousePositions.call(this);
                this.settings = $(this).data('settings');
                mouseLeave.call(this);
                setTimeout(() => {
                    this.reset = false;
                }, this.settings.transition);
            });
        };

        /**
         * Loop every instance
         */
        return this.each(function () {

            /**
             * Default settings merged with user settings
             * Can be set trough data attributes or as parameter.
             * @type {*}
             */
            this.settings = $.extend({
                maxTilt: $(this).is('[data-tilt-max]') ? $(this).data('tilt-max') : 20,
                perspective: $(this).is('[data-tilt-perspective]') ? $(this).data('tilt-perspective') : 300,
                easing: $(this).is('[data-tilt-easing]') ? $(this).data('tilt-easing') : 'cubic-bezier(.03,.98,.52,.99)',
                scale: $(this).is('[data-tilt-scale]') ? $(this).data('tilt-scale') : '1',
                speed: $(this).is('[data-tilt-speed]') ? $(this).data('tilt-speed') : '400',
                transition: $(this).is('[data-tilt-transition]') ? $(this).data('tilt-transition') : true,
                axis: $(this).is('[data-tilt-axis]') ? $(this).data('tilt-axis') : null,
                reset: $(this).is('[data-tilt-reset]') ? $(this).data('tilt-reset') : true,
                glare: $(this).is('[data-tilt-glare]') ? $(this).data('tilt-glare') : false,
                maxGlare: $(this).is('[data-tilt-maxglare]') ? $(this).data('tilt-maxglare') : 1,
            }, options);


            this.init = () => {
                // Store settings
                $(this).data('settings', this.settings);

                // Prepare element
                if(this.settings.glare) prepareGlare.call(this);

                // Bind events
                bindEvents.call(this);
            };

            // Init
            this.init();

        });
    };

    /**
     * Auto load
     */
    $('[data-tilt]').tilt();

    return true;
}));

$(".news_item").tilt({
  glare: true,
  maxGlare: .2,
  maxTilt: 5
});

}
