const path = require('path');

module.exports = {
  entry: {
    './healthyTheme/pages/home/homeJS': './healthyTheme/pages/home/home.jsx',
    './healthyTheme/pages/home/homeCSS': './healthyTheme/pages/home/home.scss',
    './healthyTheme/pages/about/aboutJS': './healthyTheme/pages/about/about.jsx',
    './healthyTheme/pages/about/aboutCSS': './healthyTheme/pages/about/about.scss',
    './healthyTheme/pages/faq/faqJS': './healthyTheme/pages/faq/faq.jsx',
    './healthyTheme/pages/faq/faqCSS': './healthyTheme/pages/faq/faq.scss',
    './healthyTheme/pages/contact/contactJS': './healthyTheme/pages/contact/contact.jsx',
    './healthyTheme/pages/contact/contactCSS': './healthyTheme/pages/contact/contact.scss',
    './healthyTheme/pages/city/cityJS': './healthyTheme/pages/city/city.jsx',
    './healthyTheme/pages/city/cityCSS': './healthyTheme/pages/city/city.scss',
    './healthyTheme/pages/diet/dietJS': './healthyTheme/pages/diet/diet.jsx',
    './healthyTheme/pages/diet/dietCSS': './healthyTheme/pages/diet/diet.scss',
    './healthyTheme/pages/diets/dietsJS': './healthyTheme/pages/diets/diets.jsx',
    './healthyTheme/pages/diets/dietsCSS': './healthyTheme/pages/diets/diets.scss',
    './healthyTheme/pages/area/areaJS': './healthyTheme/pages/area/area.jsx',
    './healthyTheme/pages/area/areaCSS': './healthyTheme/pages/area/area.scss',
    './healthyTheme/pages/interview/interviewJS': './healthyTheme/pages/interview/interview.jsx',
    './healthyTheme/pages/interview/interviewCSS': './healthyTheme/pages/interview/interview.scss',
    './healthyTheme/pages/default/defaultJS': './healthyTheme/pages/default/default.jsx',
    './healthyTheme/pages/default/defaultCSS': './healthyTheme/pages/default/default.scss',
    './healthyTheme/pages/price/priceJS': './healthyTheme/pages/price/price.jsx',
    './healthyTheme/pages/price/priceCSS': './healthyTheme/pages/price/price.scss',
    './healthyTheme/pages/cost/costJS': './healthyTheme/pages/cost/cost.jsx',
    './healthyTheme/pages/cost/costCSS': './healthyTheme/pages/cost/cost.scss',
    './healthyTheme/pages/gallery/galleryJS': './healthyTheme/pages/gallery/gallery.jsx',
    './healthyTheme/pages/gallery/galleryCSS': './healthyTheme/pages/gallery/gallery.scss',
    './healthyTheme/pages/archive-entry/archive-entryJS': './healthyTheme/pages/archive-entry/archive-entry.jsx',
    './healthyTheme/pages/archive-entry/archive-entryCSS': './healthyTheme/pages/archive-entry/archive-entry.scss',
    './healthyTheme/pages/single-entry/single-entryJS': './healthyTheme/pages/single-entry/single-entry.jsx',
    './healthyTheme/pages/single-entry/single-entryCSS': './healthyTheme/pages/single-entry/single-entry.scss',
  },
  output: {
    path: path.resolve(__dirname),
    filename: '[name].js'
  },
  module: {
    rules: [
      {
        test: /\.js/,
        loader: 'babel-loader',
        exclude: /node_modules/
      },
      {
        test: /\.scss$/,
        use: [
          "style-loader",
          "css-loader",
          "sass-loader"
        ]
      },
      {
        test: /\.(png|jpe?g|gif)$/i,
        loader: 'file-loader',
        options: {
          name: '[name].[ext]',
          outputPath: 'img',
        }
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/,
        loader: "file-loader",
        options: {
          name: '[name].[ext]',
        }
      },
      {
        test: /\.svg$/,
        loader: 'svg-inline-loader'
      }
    ]
  }
}
