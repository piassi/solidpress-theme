import $ from 'jquery';
import lozad from 'lozad';

$(window).ready(function() {
	lozad('.lozad', {
		loaded: img => {
			const image = $(img);
			if (img.complete) {
				image.addClass('lazy-loaded');
			} else {
				image.on('load', event => {
					image.addClass('lazy-loaded');
				});
			}
		}
	}).observe();
});
