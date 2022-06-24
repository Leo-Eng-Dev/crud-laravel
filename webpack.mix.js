const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */


mix.styles('resources/css/app.css', 'public/assets/css/app.css')
    .styles('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/assets/css/bootstrap.css')
    .scripts('resources/js/app.js', 'public/assets/js/app.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/assets/js/bootstrap.js')
    .version();
