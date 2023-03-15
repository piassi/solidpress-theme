const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const TerserPlugin = require("terser-webpack-plugin");
const entry = require('./entry.js');

console.log(entry);

module.exports = {
	context: __dirname,
	entry,
	output: {
		path: path.resolve(__dirname, 'dist'),
		filename: '[name].js'
	},
	mode: 'development',
	devtool: 'eval-cheap-source-map',
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
				test: /\.m?js$/,
				exclude: /node_modules/,
				use: {
				  loader: 'babel-loader',
				  options: {
					presets: [
					  ['@babel/preset-env', { targets: "defaults" }]
					]
				  }
				}
			},
			{
				test: /\.s[ac]ss$/i,
				use: [
				  "style-loader",
				  "css-loader",
				  "sass-loader",
				],
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
		minimizer: [new TerserPlugin(), new CssMinimizerPlugin()]
	}
};
