// Search for entries in ´pages´ directory
const path = require('path');
const fs = require('fs');

function getWebpackEntries() {
	const directoryPath = path.join(__dirname, 'src', 'Pages');

	const assets = {
		main: ['./assets/js/main.js'],
	};

	const files = fs.readdirSync(directoryPath);

	files.forEach(function (file) {
		const pageJsFilePath = `./src/Pages/${file}/scripts.js`;

		if (!fs.existsSync(pageJsFilePath)) {
			return;
		}

		const fileName = file.toLowerCase();

		assets[fileName] = {
			import: pageJsFilePath,
			dependOn: 'main',
		};
	});

	return assets;
}

module.exports = getWebpackEntries();
