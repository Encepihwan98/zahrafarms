const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'assets/vendor/icofont/icofont.min.css',
    'assets/vendor/remixicon/remixicon.css',
    'assets/vendor/owl.carousel/assets/owl.carousel.min.css',
    'assets/vendor/boxicons/css/boxicons.min.css',
    'assets/vendor/venobox/venobox.css',
    'assets/css/style.css'
], 'public/css/template.css').version();

mix.browserSync('localhost:8000');
