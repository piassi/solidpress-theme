import './lazyLoad';
import '../../components/header';
import '../fonts/icons.font';
import 'regenerator-runtime/runtime.js';
import '../scss/shared.scss';

// boostrap modules
import 'bootstrap/dist/js/bootstrap.bundle.min';

import { scrollWindowToElement } from './scroll';
import $ from 'jquery';

jQuery(function () {
	$('a.scroll-link, .scroll-link > a').on('click', function (e) {
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
});
