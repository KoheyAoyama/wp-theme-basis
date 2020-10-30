let mix = require('laravel-mix');

mix
  .sass('src/sass/style.scss', './style.css')
  .options({
      processCssUrls: false
   });