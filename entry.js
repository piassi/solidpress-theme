// Search for entries in ´pages´ directory
const path = require('path');
const fs = require('fs');

function getWebpackEntries() {
	const directoryPath = path.join(__dirname, 'pages');

	const assets = {
		shared: ['./assets/js/shared.js'],
	};

	const files = fs.readdirSync(directoryPath);

	files.forEach(function (file) {
		assets[file] = { import: `./pages/${file}/scripts.js`, dependOn: 'shared' };
	});

	return assets;
}

module.exports = getWebpackEntries();
