import $ from 'jquery';
import lozad from 'lozad';

jQuery(function () {
	lozad('.lozad', {
		loaded: (img) => {
			const image = $(img);
			if (img.complete) {
				image.addClass('lazy-loaded');
			} else {
				image.on('load', () => {
					image.addClass('lazy-loaded');
				});
			}
		},
	}).observe();
});
