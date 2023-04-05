// Search for entries in ´pages´ directory
const path = require('path');
const fs = require('fs');

function getWebpackEntries() {
	const directoryPath = path.join(__dirname, 'pages');

	const assets = {
		main: ['./assets/js/main.js'],
	};

	const files = fs.readdirSync(directoryPath);

	files.forEach(function (file) {
		const pageJsFilePath = `./pages/${file}/scripts.js`;

		if (!fs.existsSync(pageJsFilePath)) {
			return;
		}

		assets[file] = {
			import: pageJsFilePath,
			dependOn: 'main',
		};
	});

	return assets;
}

module.exports = getWebpackEntries();
