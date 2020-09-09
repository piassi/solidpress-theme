const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const entry = require('./entry.js');

module.exports = {
	context: __dirname,
	entry,
	output: {
		path: path.resolve(__dirname, 'dist'),
		filename: '[name].js'
	},
	mode: 'development',
	devtool: 'cheap-eval-source-map',
	module: {
		rules: [
			{
				test: /\.font\.js/,
				use: [
					MiniCssExtractPlugin.loader,
					{ loader: 'css-loader', options: { url: false } },
					{
						loader: 'webfonts-loader',
						options: {
							publicPath: './'
						}
					}
				]
			},
			{
				enforce: 'pre',
				exclude: /node_modules/,
				test: /\.jsx$/,
				loader: 'eslint-loader'
			},
			{
				test: /\.jsx?$/,
				loader: 'babel-loader'
			},
			{
				test: /\.s?css$/,
				use: [MiniCssExtractPlugin.loader, 'css-loader?url=false', 'sass-loader']
			},
			{
				test: /\.(jpe?g|png|gif)\$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							outputPath: 'images/',
							name: '[name].[ext]'
						}
					},
					'img-loader'
				]
			}
		]
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: '[name].css'
		}),
		new BrowserSyncPlugin({
			files: '**/*.php',
			proxy: 'http://solidpress.local/'
		})
	],
	optimization: {
		minimizer: [new UglifyJsPlugin(), new OptimizeCssAssetsPlugin()]
	}
};
