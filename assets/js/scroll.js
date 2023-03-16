import smoothscroll from 'smoothscroll-polyfill';

const getOffset = (selector) => {
	const bodyRect = document.body.getBoundingClientRect();
	const elemRect = document.querySelector(selector).getBoundingClientRect();
	return elemRect.top - bodyRect.top;
};

export const scrollWindowToElement = (selector, options = {}) => {
	const { offset = 0, behavior = 'smooth' } = options;

	let top = getOffset(selector);

	if (offset !== 0) {
		top += offset;
	}

	window.scroll({ top, behavior });
};

smoothscroll.polyfill();
