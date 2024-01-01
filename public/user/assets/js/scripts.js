/*===================================*
00. PAGE JS
*===================================*/

(function ($) {
	'use strict';

	/*===================================*
	01. LOADING JS
	/*===================================*/

	$(window).on('load', function () {
		setTimeout(function () {
			$("#preloader").delay(600).fadeOut(600).addClass('loaded');
		}, 700);
	});

	/*===================================*
	02. MENU JS
	*===================================*/

	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll >= 150) {
			$('header.fixed-top').addClass('nav-fixed');
		} else {
			$('header.fixed-top').removeClass('nav-fixed');
		}
	});

	$(document).on('ready', function () {
		$('.dropdown-menu a.dropdown-toggler').on('click', function () {
			if (!$(this).next().hasClass('show')) {
				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
			}
			var $subMenu = $(this).next(".dropdown-menu");
			$subMenu.toggleClass('show');
			$(this).parent("li").toggleClass('show');
			$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function () {
				$('.dropdown-menu .show').removeClass("show");
			});
			return false;
		});
	});

	var navBar = $(".header_wrap");
	var navbarLinks = navBar.find(".navbar-collapse ul li a.page-scroll");
	$.each(navbarLinks, function () {
		var navbarLink = $(this);
		navbarLink.on('click', function () {
			navBar.find(".navbar-collapse").collapse('hide');
			$("header").removeClass("active");
		});
	});

	$('.navbar-toggler').on('click', function () {
		$("header").toggleClass("active");
		if ($('.search-overlay').hasClass('open')) {
			$(".search-overlay").removeClass('open');
			$(".search_trigger").removeClass('open');
		}
	});

	$(document).on('ready', function () {
		if ($('.header_wrap').hasClass("fixed-top") && !$('.header_wrap').hasClass("transparent_header") && !$('.header_wrap').hasClass("no-sticky") && !$('.header_wrap').hasClass("vertical_menu")) {
			$(".header_wrap").before('<div class="header_sticky_bar d-none"></div>');
		}
	});

	$(window).on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll >= 150) {
			$('.header_sticky_bar').removeClass('d-none');
			$('header.no-sticky').removeClass('nav-fixed');
		} else {
			$('.header_sticky_bar').addClass('d-none');
		}
	});

	var setHeight = function () {
		var height_header = $(".header_wrap").height();
		$('.header_sticky_bar').css({ 'height': height_header });
	};

	$(window).on('load', function () {
		setHeight();
	});

	$(window).on('resize', function () {
		setHeight();
	});

	$('.sidetoggle').on('click', function () {
		$(this).addClass('open');
		$('body').addClass('sidetoggle_active');
		$('.sidebar_menu').addClass('active');
		$("body").append('<div id="header-overlay" class="header-overlay"></div>');
	});

	$(document).on('click', '#header-overlay, .sidemenu_close', function () {
		$('.sidetoggle').removeClass('open');
		$('body').removeClass('sidetoggle_active');
		$('.sidebar_menu').removeClass('active');
		$('#header-overlay').fadeOut('3000', function () {
			$('#header-overlay').remove();
		});
		return false;
	});

	/*===================================*
	03. SMOOTH SCROLLING JS
	*===================================*/

	var topheaderHeight = $(".top-header").innerHeight();
	var mainheaderHeight = $(".header_wrap").innerHeight();
	var headerHeight = mainheaderHeight - topheaderHeight - 20;
	$('a.page-scroll[href*="#"]:not([href="#"])').on('click', function () {
		$('a.page-scroll.active').removeClass('active');
		$(this).closest('.page-scroll').addClass('active');
		// On-page links
		if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
			// Figure out element to scroll to
			var target = $(this.hash),
				speed = $(this).data("speed") || 800;
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

			if (target.length) {
				event.preventDefault();
				$('html, body').animate({
					scrollTop: target.offset().top - headerHeight
				}, speed);
			}
		}
	});

	$(window).on('scroll', function () {
		var lastId,
			menuItems = $(".header_wrap").find("a.page-scroll"),
			topMenuHeight = $(".header_wrap").innerHeight() + 20,
			scrollItems = menuItems.map(function () {
				var items = $($(this).attr("href"));
				if (items.length) { return items; }
			});
		var fromTop = $(this).scrollTop() + topMenuHeight;
		var cur = scrollItems.map(function () {
			if ($(this).offset().top < fromTop)
				return this;
		});
		cur = cur[cur.length - 1];
		var id = cur && cur.length ? cur[0].id : "";

		if (lastId !== id) {
			lastId = id;
			menuItems.closest('.page-scroll').removeClass("active").end().filter("[href='#" + id + "']").closest('.page-scroll').addClass("active");
		}
	});

	/*===================================*
	04. SEARCH JS
	*===================================*/

	$(".close-search").on("click", function () {
		$(".search_wrap,.search_overlay").removeClass('open');
		$("body").removeClass('search_open');
	});

	var removeClass = true;
	$(".search_wrap").after('<div class="search_overlay"></div>');
	$(".search_trigger").on('click', function () {
		$(".search_wrap,.search_overlay").toggleClass('open');
		$("body").toggleClass('search_open');
		removeClass = false;
		if ($('.navbar-collapse').hasClass('show')) {
			$(".navbar-collapse").removeClass('show');
			$(".navbar-toggler").addClass('collapsed');
			$(".navbar-toggler").attr("aria-expanded", false);
		}
	});

	$(".search_wrap form").on('click', function () {
		removeClass = false;
	});

	$("html").on('click', function () {
		if (removeClass) {
			$("body").removeClass('open');
			$(".search_wrap,.search_overlay").removeClass('open');
			$("body").removeClass('search_open');
		}
		removeClass = true;
	});

	/*===================================*
	05. SLIDER JS
	*===================================*/

	var owl = $('.owl-thumbs-slider');
	owl.owlCarousel({
		loop: false,
		items: 4,
		dots: false,
		margin: 10,
		nav: true,
		thumbs: true,
		navText: ['<i class="ion-ios-arrow-back"></i>', '<i class="ion-ios-arrow-forward"></i>'],
	});
	$(window).on("load", function () {
		$('.carousel_slider').each(function () {
			var $carousel = $(this);
			$carousel.owlCarousel({
				dots: $carousel.data("dots"),
				loop: $carousel.data("loop"),
				items: $carousel.data("items"),
				margin: $carousel.data("margin"),
				rtl: $carousel.data("rtl"),
				mouseDrag: $carousel.data("mouse-drag"),
				touchDrag: $carousel.data("touch-drag"),
				autoHeight: $carousel.data("autoheight"),
				center: $carousel.data("center"),
				nav: $carousel.data("nav"),
				rewind: $carousel.data("rewind"),
				navText: ['<i class="ion-ios-arrow-back"></i>', '<i class="ion-ios-arrow-forward"></i>'],
				autoplay: $carousel.data("autoplay"),
				animateIn: $carousel.data("animate-in"),
				animateOut: $carousel.data("animate-out"),
				autoplayTimeout: $carousel.data("autoplay-timeout"),
				autoplayHoverPause: $carousel.data("autoplay-hover-pause"),
				smartSpeed: $carousel.data("smart-speed"),
				responsive: $carousel.data("responsive")
			});
			$carousel.on('mouseleave', function () {
				if ($carousel.data("autoplay")) {
					$carousel.trigger('stop.owl.autoplay');
					$carousel.trigger('play.owl.autoplay', [$carousel.data("autoplay-timeout")]);
				}
			});
		});
	});

	/*===================================*
	06. PORTFOLIO JS
	*===================================*/

	$(window).on("load", function () {
		var $grid_selectors = $(".grid_container");
		var filter_selectors = ".grid_filter > li > a";
		if ($grid_selectors.length > 0) {
			$grid_selectors.imagesLoaded(function () {
				if ($grid_selectors.hasClass("masonry")) {
					$grid_selectors.isotope({
						itemSelector: '.grid_item',
						percentPosition: true,
						layoutMode: "masonry",
						masonry: {
							columnWidth: '.grid-sizer'
						},
					});
				}
				else {
					$grid_selectors.isotope({
						itemSelector: '.grid_item',
						percentPosition: true,
						layoutMode: "fitRows",
					});
				}
			});
		}

		$(document).on("click", filter_selectors, function () {
			$(filter_selectors).removeClass("current");
			$(this).addClass("current");
			var dfselector = $(this).data('filter');
			if ($grid_selectors.hasClass("masonry")) {
				$grid_selectors.isotope({
					itemSelector: '.grid_item',
					layoutMode: "masonry",
					masonry: {
						columnWidth: '.grid_item'
					},
					filter: dfselector
				});
			}
			else {
				$grid_selectors.isotope({
					itemSelector: '.grid_item',
					layoutMode: "fitRows",
					filter: dfselector
				});
			}
			return false;
		});

		$('.portfolio_filter').on('change', function () {
			$grid_selectors.isotope({
				filter: this.value
			});
		});

		$(window).on("resize", function () {
			setTimeout(function () {
				$grid_selectors.find('.grid_item').removeClass('animation').removeClass('animated'); // avoid problem to filter after window resize
				$grid_selectors.isotope('layout');
			}, 300);
		});
	});

	$('.link_container').each(function () {
		$(this).magnificPopup({
			delegate: '.image_popup',
			type: 'image',
			mainClass: 'mfp-zoom-in',
			removalDelay: 500,
			gallery: {
				enabled: true
			}
		});
	});

	/*===================================*
	07. SCROLLUP JS
	*===================================*/

	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 150) {
			$('.scrollup').fadeIn();
		} else {
			$('.scrollup').fadeOut();
		}
	});

	$(".scrollup").on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, 600);
		return false;
	});

	/*===================================*
	08. POPUP JS
	*===================================*/

	$('.content-popup').magnificPopup({
		type: 'inline',
		preloader: true,
		mainClass: 'mfp-zoom',
	});

	$('.image_gallery').each(function () {
		$(this).magnificPopup({
			delegate: 'a',
			type: 'image',
			gallery: {
				enabled: true
			},
			zoom: {
				enabled: true,
				duration: 300,
				opener: function (element) {
					return element.find('img');
				}
			}
		});
	});

	$(document).on('ready', function () {
		$('.popup-ajax').magnificPopup({
			type: 'ajax',
		});
	});

	$('.portfolio_item .image_popup').on('click', function () {
		$(this).find('.link_container').magnificPopup('open');
	});
	$('.link_container').each(function () {
		$(this).magnificPopup({
			delegate: '.image_popup',
			type: 'image',
			gallery: {
				enabled: true
			}
		});
	});

	/*==============================================================
	9. VIDEO JS
	==============================================================*/

	$(document).on('ready', function () {
		$('.video_popup, .iframe_popup').magnificPopup({
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
	});

	/*===================================*
	10. ANIMATION JS
	*===================================*/

	$(function () {
		function ckScrollInit(items, trigger) {
			items.each(function () {
				var ckElement = $(this),
					AnimationClass = ckElement.attr('data-animation'),
					AnimationDelay = ckElement.attr('data-animation-delay');
				ckElement.css({
					'-webkit-animation-delay': AnimationDelay,
					'-moz-animation-delay': AnimationDelay,
					'animation-delay': AnimationDelay,
					opacity: 0
				});

				var ckTrigger = (trigger) ? trigger : ckElement;
				ckTrigger.waypoint(function () {
					ckElement.addClass("animated").css("opacity", "1");
					ckElement.addClass('animated').addClass(AnimationClass);
				}, {
					triggerOnce: true,
					offset: '90%',
				});
			});
		}
		ckScrollInit($('.animation'));
		ckScrollInit($('.staggered-animation'), $('.staggered-animation-wrap'));
	});

	/*===================================*
	11. BACKGROUND IMAGE JS
	*===================================*/

	$(".background_bg").each(function () {
		var attr = $(this).attr('data-img-src');
		if (typeof attr !== typeof undefined && attr !== false) {
			$(this).css('background-image', 'url(' + attr + ')');
		}
	});

	/*===================================*
	12. Scroll To Fixed Item Js
	*===================================*/

	if ($(".custome_select").length > 0) {
		$(document).on('ready', function () {
			$(".custome_select").msDropdown();
		});
	}

})(jQuery);