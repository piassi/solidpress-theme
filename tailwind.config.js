// eslint-disable-next-line jsdoc/valid-types
/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		'./pages/**/*.{php,js}',
		'./components/**/*.{php,js}',
		'./src/Pages/**/*.{php,js}',
		'./src/Components/**/*.{php,js}',
	],
	theme: {
		container: {
			center: true,
			padding: '1rem',
		},
		extend: {},
	},
	plugins: [],
};
