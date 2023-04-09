'use strict';

const path = require('path');
const autoprefixer = require('autoprefixer');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { PurgeCSSPlugin } = require('purgecss-webpack-plugin');
const glob = require('glob-all');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin')

module.exports = {
  mode: 'production',
  entry: './src/js/index.js',
  output: {
    filename: 'index.js',
    path: path.resolve(__dirname, 'dist'),
    publicPath: ''
  },
  optimization: {
    usedExports: true, // <- remove unused function
    minimizer: [new UglifyJsPlugin()],
  },
  devServer: {
    static: path.resolve(__dirname, 'dist'),
    port: 8080,
    hot: true
  },
  plugins: [
    new HtmlWebpackPlugin({ template: './index.php' }),
    new MiniCssExtractPlugin({ filename: 'style.css' }),
    new PurgeCSSPlugin({
      paths: glob.sync([
        path.join(__dirname, '**/*.{html,php}'),
        path.join(__dirname, 'src/**/*.js'),
        path.join(__dirname, 'node_modules/bootstrap/**/*.js'),
        path.join(__dirname, 'node_modules/bootstrap/**/*.css'),
      ])
    })
  ],
  module: {
    rules: [
      {
        test: /\.(scss)$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              // publicPath: '../' // if needed to add path prefix to the CSS file
            }
          },
          {
            loader: 'css-loader'
          },
          {
            loader: 'postcss-loader',
            options: {
              postcssOptions: {
                plugins: () => [autoprefixer()]
              }
            }
          },
          {
            loader: 'sass-loader'
          }
        ]
      }
    ]
  }
};
