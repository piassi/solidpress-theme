// eslint-disable-next-line jsdoc/valid-types
/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./pages/**/*.{php,js}', './components/**/*.{php,js}'],
	theme: {
		container: {
			center: true,
			padding: '1rem',
		},
		extend: {},
	},
	plugins: [],
};
