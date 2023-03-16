import $ from 'jquery';

const header = () => {
	const ref = $('._header');
	if (ref.length) {
		$(window).on('scroll', function () {
			if (ref.offset().top) {
				ref.addClass('shadow-sm');
			} else {
				ref.removeClass('shadow-sm');
			}
		});

		ref.find('.toggle-menu').on('click', function (e) {
			e.preventDefault();

			$(this).toggleClass('active');

			$('body').attr('colspan', function (index, attr) {
				return attr === 6 ? null : 6;
			});

			$('body').toggleClass('overflow-hidden');

			ref.find('.main-navigation').slideToggle(250).toggleClass('active');
		});
	}
};

header();
