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
    'node_modules/bootstrap/dist/css/bootstrap.css',
    'node_modules/gentelella/vendors/animate.css/animate.css',
    'node_modules/gentelella/build/css/custom.css',
], 'public/assets/layouts/css/app.css').version();


/*
 |--------------------------------------------------------------------------
 | Core
 |--------------------------------------------------------------------------
 |
 */

/*mix.scripts([
    'node_modules/jquery/dist/jquery.js',

], 'public/assets/app/js/app.js').version();*/