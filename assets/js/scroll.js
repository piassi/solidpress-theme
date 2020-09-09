import smoothscroll from 'smoothscroll-polyfill';

/**
 * Get DOM element top position relative to body
 *
 * @param {selector} Javascript query selector
 */
const getOffset = selector => {
	const bodyRect = document.body.getBoundingClientRect();
	const elemRect = document.querySelector(selector).getBoundingClientRect();
	return elemRect.top - bodyRect.top;
};

/**
 * Scroll window to selected element
 *
 * @param {string} Javascript query selector
 * @param {offset: string, behavior: string} Options object
 */
export const scrollWindowToElement = (selector, options = {}) => {
	const { offset = 0, behavior = 'smooth' } = options;

	let top = getOffset(selector);

	if (offset !== 0) {
		top += offset;
	}

	window.scroll({ top, behavior });
};

smoothscroll.polyfill();
