const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/price-mobile.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/content.scss', 'public/css')
    .sass('resources/sass/fixed-elements.scss', 'public/css')
    .options({
        processCssUrls: false,
    });
