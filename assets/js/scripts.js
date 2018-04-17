(function () {
	"use strict";
	jQuery(document).ready(function () {

		/* HEADER NAV SCROLL ANCHOR */
		var lastId,
			topMenu = $("#mainNav").closest('.container'),
			topMenuHeight = topMenu.outerHeight() - 30,
			menuItems = topMenu.find("a"),
			scrollItems = menuItems.map(function () {
				var item = $($(this).attr("href"));
				if (item.length) {
					return item;
				}
			});

		menuItems.on("click", function (e) {
			var href = $(this).attr("href"),
				offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
			$('html, body').stop().animate({
				scrollTop: offsetTop
			}, 800);
			e.preventDefault();
		});

		$(window).on("scroll", function (e) {
			var fromTop = $(this).scrollTop() + topMenuHeight;
			var cur = scrollItems.map(function () {
				if ($(this).offset().top < fromTop)
					return this;
			});
			cur = cur[cur.length - 1];
			var id = cur && cur.length ? cur[0].id : "";

			if (lastId !== id) {
				lastId = id;
				menuItems
					.parent().removeClass("active")
					.end().filter("[href='#" + id + "']").parent().addClass("active");
			}
		});

		/* HEADER SHRINK */
		$(window).on("scroll", function (e) {
			var scroll = $(window).scrollTop();
			if (scroll > 30) {
				$(".ic-nav").addClass("ic-header-shrink");
			} else {
				$(".ic-nav").removeClass("ic-header-shrink");
			}
		});

		/* HOME SLIDER */
		$('.ic-slider-row').slick({
			dots: true,
			arrows: false,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			autoplay: true,
		});

		/* TESTIMONIAL SLIDER */
		$('.ic-testimonials').slick({
			dots: true,
			arrows: false,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			autoplay: true,
		});

		/*SCREEN SHOT SLIDER*/
		$('.ic-screenshots').slick({
			dots: false,
			arrows: true,
			slidesToShow: 3,
			centerMode: true,
			centerPadding: '180px',
			autoplay: true,
			responsive: [{
					breakpoint: 1400,
					settings: {
						centerPadding: '240px'
					}
				},
				{
					breakpoint: 1199,
					settings: {
						centerPadding: '60px',
						slidesToShow: 5,
					}
				},
				{
					breakpoint: 768,
					settings: {
						centerPadding: '120px',
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 400,
					settings: {
						centerPadding: '0px',
						slidesToShow: 3,
						arrows: false
					}
				}
			]
		});

		/*COUNTER*/
		$('.counter').each(function () {
			var $this = $(this),
				countTo = $this.attr('data-count');

			$({
				countNum: $this.text()
			}).animate({
				countNum: countTo
			}, {
				duration: 8000,
				easing: 'linear',
				step: function () {
					$this.text(Math.floor(this.countNum));
				},
				complete: function () {
					$this.text(this.countNum);
					//alert('finished');
				}
			});
		});



		/* MOBILE MENU AND MENU RELATED OTHER FUNCTIONALITY */
		$(function () {
			$(".navbar-toggle").on("click", function () {
				$('.navbar-toggle').toggleClass('ic-hidden');
			});

			$(".navbar-toggle").on("click", function () {
				if ($('.navbar-collapse').hasClass('ic-visible-nav')) {
					$('.navbar-collapse').removeClass('ic-visible-nav')
				} else {
					$('.navbar-collapse').addClass('ic-visible-nav')
				}
			});
		});

		$(".navbar-collapse a").on("click", function () {
			if (window.outerWidth < 1065) {
				$('.navbar-collapse').removeClass('ic-visible-nav');
			}
			$(".navbar-toggle").removeClass("ic-hidden");
		});

		// Mobile menu scrollbar 
		$(window).on("load", function () {
			$(".content").mCustomScrollbar();
			$(".ic-preloader").fadeOut(500);
		});


	});

})();

// $(window).scroll(function () {
// 	var scroll = $(window).scrollTop();

// 	if (scroll >= 300) {
// 		$(".navbar-brand img").addClass("logos");
// 		$(".navbar-brand img").css("margin-top","22px");

// 	} else {
// 		$(".navbar-brand img").removeClass("logos");
// 	}
// });