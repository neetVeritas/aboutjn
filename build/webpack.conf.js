const path = require('path');

function resolve (dir) {
  return path.join(__dirname, '..', dir)
};

const ExtractTextPlugin = require("extract-text-webpack-plugin");

module.exports = {
  entry: {
      app: './src/main.js'
  },
  output: {
    path: resolve('./dist'),
    publicPath: 'dist/',
    filename: 'build.js'
  },
  resolve: {
    extensions: ['.js', '.vue', '.json', '.scss'],
    alias: {
      'vue$': 'vue/dist/vue.esm.js',
      '@': resolve('src'),
      'styles': resolve('src/assets/styles'),
      'scss-loader': 'sass-loader'
    }
  },
  module: {
    loaders: [
      {
        test: /\.vue$/,
        loader: 'vue-loader',
        options: {
          loaders: {
            js: 'babel-loader',
            scss: 'vue-style-loader!css-loader!sass-loader',
            // sass: 'vue-style-loader!css-loader!sass-loader?indentedSyntax',
          }
        }
      },
      {
        test: /\.js$/,
        loader: 'babel-loader',
        include: [resolve('src')]
      },
      {
        test: /\.s[a|c]ss$/,
        loader: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: 'css-loader!sass-loader',
        })
      },
      {
        test: /\.(png|jpe?g|gif|svg)(\?.*)?$/,
        loader: 'url-loader',
        options: {
          limit: 10000,
          name: resolve('assets/images/[name].[hash:7].[ext]')
        }
      }
    ]
  },
  plugins: [
    new ExtractTextPlugin('styles.css'),
  ]
};
