import './lazyLoad';
import '../../components/header';
import '../fonts/icons.font';
import 'regenerator-runtime/runtime.js';

// boostrap modules
// import '@popperjs/core';
// import '../../mpbootstrap.bundle'
import '../../node_modules/bootstrap/dist/js/bootstrap.bundle.min';
// import '../../node_modules/bootstrap/js/src/dropdown';

import { scrollWindowToElement } from './scroll';
import $ from 'jquery';
import inView from 'in-view';

$(window).ready(function() {
	$('a.scroll-link, .scroll-link > a').on('click', function(e) {
		e.preventDefault();
		const headerRef = $('._header');

		const url = $(this).attr('href');
		const [, hash] = url.split('#');

		if (hash) {
			scrollWindowToElement(`#${hash}`, { offset: parseInt(headerRef.outerHeight()) * -1 });
		}

		if (headerRef.find('.toggle-menu').hasClass('active')) {
			headerRef.find('.toggle-menu').click();
		}
	});

	const $el = $('.parallax-background');
	$(window).on('scroll', function() {
		const scroll = $(document).scrollTop();
		$el.css({
			'background-position': '50% ' + -0.4 * scroll + 'px'
		});
	});

	inView('.animate-in-view').on('enter', el => {
		const elRef = $(el);

		if (elRef.hasClass('animated')) {
			return;
		}

		elRef.addClass('animated').addClass(elRef.data('animations'));
	});
});
