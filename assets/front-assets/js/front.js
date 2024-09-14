(function ($) {
	'use strict';


	/*----------------------------------
		Custom script to call Background
		Image & Color from html data attribute
	-----------------------------------*/
	$('[data-bg-image]').each(function () {
		var $this = $(this),
			$image = $this.data('bg-image');
		$this.css('background-image', 'url(' + $image + ')');
	});
	$('[data-bg-color]').each(function () {
		var $this = $(this),
			$color = $this.data('bg-color');
		$this.css('background-color', $color);
	});
	/*----------------------------------------*/
	/*  ion Range Slider 
	/*----------------------------------------*/
	$(".vp-range-slider").ionRangeSlider({
	});

	$("#price-range-slider").on("change", function () { 
		var $inp = $(this);
        
		var from = $inp.data("from"); 
        var to = $inp.data("to"); 
		$("#minprice").val(from);
		$("#maxprice").val(to);
	});
	$("#kilo-range-slider").on("change", function () {
		var $inp = $(this);
		var from = $inp.data("from"); 
        var to = $inp.data("to"); 
		$("#minkilo").val(from);
		$("#maxkilo").val(to);
	});
	$("#year-range-slider").on("change", function () {
		var $inp = $(this);
		var from = $inp.data("from"); 
        var to = $inp.data("to"); 
		$("#minyear").val(from);
		$("#maxyear").val(to);
	});

	/*----------------------------------------*/
	/*  Check if element exists
	/*----------------------------------------*/
	$.fn.elExists = function () {
		return this.length > 0;
	};

	/*----------------------------------
		Custom script to call Background
		Image & Color from html data attribute
	-----------------------------------*/
	$('[data-bg-image]').each(function () {
		var $this = $(this),
			$image = $this.data('bg-image');
		$this.css('background-image', 'url(' + $image + ')');
	});
	$('[data-bg-color]').each(function () {
		var $this = $(this),
			$color = $this.data('bg-color');
		$this.css('background-color', $color);
	});

	/*---------------------------------------
		Header Sticky
	---------------------------------*/
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 300) {
			$('.header-sticky').addClass('sticky');
		} else {
			$('.header-sticky').removeClass('sticky');
		}
	});

	/*----------------------------------------*/
	/*  HasSub Item
	/*----------------------------------------*/
	$('.hassub-item li.hassub a, .frequently-item li.has-sub a').on('click', function () {
		$(this).removeAttr('href');
		var element = $(this).parent('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp();
		} else {
			element.addClass('open');
			element.children('ul').slideDown();
			element.siblings('li').children('ul').slideUp();
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp();
		}
	});

	/*----------------------------------------*/
	/*  WOW Animation
	/*----------------------------------------*/
	new WOW().init();

	/*---------------------------------------
		Swiper All Slider
	---------------------------------*/

	/* ---Home Slider--- */
	if ($('.home-slider').elExists()) {
		var swiper = new Swiper('.home-slider', {
			loop: true,
			slidesPerView: 1,
			speed: 750,
			autoplay: {
				delay: 4000
			},
			effect: "coverflow",
			coverflowEffect: {
				rotate: 30,
				slideShadows: false,
			},
			navigation: {
				nextEl: '.custom-button-next',
				prevEl: '.custom-button-prev',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				type: 'bullets'
			},
		});
	}
	$(".home-slider").hover(function () {
		(this).swiper.autoplay.stop();
	}, function () {
		(this).swiper.autoplay.start();
	});


	/* --- Service Slider--- */
	if ($('.service-slider').elExists()) {
		var mySwiper = new Swiper('.service-slider', {
			slidesPerView: 4,
			spaceBetween: 30,
			loop: true,
			navigation: {
				nextEl: '.service-button-next',
				prevEl: '.service-button-prev',
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
				},
				576: {
					slidesPerView: 2,
				},
				992: {
					slidesPerView: 3,
				},
				1501: {
					slidesPerView: 4,
				}
			}
		});
	}

	/* --- Car Slider--- */
	if ($('.car-slider').elExists()) {
		var mySwiper = new Swiper('.car-slider', {
			slidesPerView: 4,
			spaceBetween: 30,
			loop: true,
			navigation: {
				nextEl: '.car-button-next',
				prevEl: '.car-button-prev',
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
				},
				576: {
					slidesPerView: 2,
				},
				992: {
					slidesPerView: 3,
				},
				1501: {
					slidesPerView: 4,
				}
			}
		});
	}


	/* --- Testimonial Sliderr--- */
	if ($('.testimonial-slider').elExists()) {
		var mySwiper = new Swiper('.testimonial-slider', {
			preventInteractionOnTransition: true,
			slidesPerView: 3,
			spaceBetween: 40,
			loop: true,
			navigation: {
				nextEl: '.testimonial-button-next',
				prevEl: '.testimonial-button-prev',
			},
			pagination: {
				el: '.testimonial-pagination',
				clickable: true,
				type: 'bullets'
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
					centeredSlides: false,
					centeredSlidesBounds: false,
				},
				768: {
					slidesPerView: 2,
					centeredSlides: false,
					centeredSlidesBounds: false,
				},
				992: {
					slidesPerView: 2,
					centeredSlides: false,
					centeredSlidesBounds: false,
				},
				1200: {
					slidesPerView: 3,
					centeredSlides: true,
					centeredSlidesBounds: true,
				}
			}
		});
	}


	/* ---Car Details Horizontal Slider--- */
	if ($('.single-car-slider').elExists()) {
		var singleProduct = new Swiper('.single-car-thumbs', {
			spaceBetween: 10,
			slidesPerView: 4,
			observer: true,
			observeParents: true,
			freeMode: false,
			watchSlidesVisibility: true,
			watchSlidesProgress: true,
			allowTouchMove: false,
			loop: true,
			navigation: {
				nextEl: '.thumbs-button-next',
				prevEl: '.thumbs-button-prev',
			},
			breakpoints: {
				320: {
					slidesPerView: 2,
					allowTouchMove: true
				},
				480: {
					slidesPerView: 3,
					allowTouchMove: true
				},
				768: {
					slidesPerView: 4,
					allowTouchMove: true
				},
				1200: {
					slidesPerView: 4,
					allowTouchMove: false
				}
			}
		});
		var singleProduct = new Swiper('.single-car-slider', {
			autoplay: false,
			observer: true,
			observeParents: true,
			delay: 5000,
			slidesPerView: 1,
			slidesPerGroup: 1,
			watchSlidesProgress: true,
			watchSlidesVisibility: true,
			allowTouchMove: true,
			setWrapperSize: true,
			waitForTransition: true,
			loop: false,
			navigation: {
				nextEl: '.gallery-button-next',
				prevEl: '.gallery-button-prev',
			},
			thumbs: {
				swiper: singleProduct
			}
		});
	}


	/* ---Service Details Horizontal Slider--- */
	if ($('.single-service-slider').elExists()) {
		var singleService = new Swiper('.single-service-thumbs', {
			spaceBetween: 10,
			slidesPerView: 4,
			observer: true,
			observeParents: true,
			freeMode: false,
			watchSlidesVisibility: true,
			watchSlidesProgress: true,
			allowTouchMove: false,
			loop: true,
			navigation: {
				nextEl: '.thumbs-button-next',
				prevEl: '.thumbs-button-prev',
			},
			breakpoints: {
				320: {
					slidesPerView: 2,
					allowTouchMove: true
				},
				480: {
					slidesPerView: 3,
					allowTouchMove: true
				},
				768: {
					slidesPerView: 4,
					allowTouchMove: true
				},
				1200: {
					slidesPerView: 4,
					allowTouchMove: false
				}
			}
		});
		var singleService = new Swiper('.single-service-slider', {
			autoplay: false,
			observer: true,
			observeParents: true,
			delay: 5000,
			slidesPerView: 1,
			slidesPerGroup: 1,
			watchSlidesProgress: true,
			watchSlidesVisibility: true,
			allowTouchMove: true,
			setWrapperSize: true,
			waitForTransition: true,
			loop: false,
			navigation: {
				nextEl: '.gallery-button-next',
				prevEl: '.gallery-button-prev',
			},
			thumbs: {
				swiper: singleService
			}
		});
	}


	/* ---Scene--- */
	$('.scene').each(function () {
		new Parallax($(this)[0]);
	});



	/*------------------------------------
		Magnific Popup
	------------------------------------- */
	

	if ($('.gallery-popup').elExists()) {
		$('.gallery-popup').magnificPopup({
			type: 'image',
			gallery: {
				enabled: true
			}
		});
	}

	/*----------------------------------------*/
	/* Mobile  Nav menu
	/*----------------------------------------*/
	var $MobileNav = $('.mobile-menu, .offcanvas-minicart_menu'),
		$MobileNavSubMenu = $MobileNav.find('.sub-menu');
	

	$MobileNavSubMenu.slideUp();

	$MobileNav.on('click', 'li a, li .menu-expand', function (e) {
		var $this = $(this);
		if (
			$this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/) &&
			($this.attr('href') === '#' || $this.attr('href') === '' || $this.hasClass('menu-expand'))
		) {
			e.preventDefault();
			if ($this.siblings('ul:visible').length) {
				$this.siblings('ul').slideUp('slow');
			} else {
				$this.closest('li').siblings('li').find('ul:visible').slideUp('slow');
				$this.closest('li').siblings('li').removeClass('menu-open');
				$this.siblings('ul').slideDown('slow');
				$this.parent().siblings().children('ul').slideUp();
			}
		}
		if ($this.is('a') || $this.is('span') || $this.attr('class').match(/\b(menu-expand)\b/)) {
			$this.parent().toggleClass('menu-open');
		} else if ($this.is('li') && $this.attr('class').match(/\b('menu-item-has-children')\b/)) {
			$this.toggleClass('menu-open');
		}
	});

	$('.button-close').on('click', function (e) {
		e.preventDefault();
		$('.mobile-menu .sub-menu').slideUp();
		$('.mobile-menu .menu-item-has-children').removeClass('menu-open');
	});
		
	/*Mobile Menu Open Action*/
	var $overlay = $('.global-overlay');
	$('.toolbar-btn').on('click', function (e) {
		e.preventDefault();
		e.stopPropagation();
		var $this = $(this);
		var target = $this.attr('href');
		var prevTarget = $this.parent().siblings().children('.toolbar-btn').attr('href');
		$(target).toggleClass('open');
		$(prevTarget).removeClass('open');
		$($overlay).addClass('overlay-open');
	});

	/*  Mobile Menu Close Button Action */
	$('.button-close').on('click', function (e) {
		var dom = $('.main-wrapper').children();
		e.preventDefault();
		var $this = $(this);
		$this.parents('.open').removeClass('open');
		dom.find('.global-overlay').removeClass('overlay-open');
	});



	/*----------------------------------------*/
	/*  Nice Select
	/*----------------------------------------*/
	if ($('.nice-select').elExists()) {
		$('.nice-select').niceSelect();
	}

	/*--------------------------------
	Scroll To Top
	-------------------------------- */
	function scrollToTop() {
		var $scrollUp = $('.scroll-to-top'),
			$lastScrollTop = 0,
			$window = $(window);

		$window.on('scroll', function () {
			var topPos = $(this).scrollTop();
			if (topPos > $lastScrollTop) {
				$scrollUp.removeClass('show');
			} else {
				if ($window.scrollTop() > 200) {
					$scrollUp.addClass('show');
				} else {
					$scrollUp.removeClass('show');
				}
			}
			$lastScrollTop = topPos;
		});

		$scrollUp.on('click', function (evt) {
			$('html, body').animate({
				scrollTop: 0
			}, 600);
			evt.preventDefault();
		});
	}

	scrollToTop();

	/*--------------------------------
	Hash Link Scroll To Top Prevent
	-------------------------------- */
	$('a[href="#"]').on('click', (function (e) {
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
	}));


})(jQuery);
