// Search for entries in ´pages´ directory
const path = require('path');
const fs = require('fs');

function getWebpackEntries() {
	const directoryPath = path.join(__dirname, 'pages');

	const assets = {};

	const files = fs.readdirSync(directoryPath);

	files.forEach(function(file) {
		assets[file] = [`./pages/${file}/scripts.js`, `./pages/${file}/styles.scss`];
	});

	return assets;
}

module.exports = getWebpackEntries();
