const mix = require('laravel-mix');
require('laravel-mix-purgecss');

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

mix.js('resources/js/app.js', 'public/js');

/*mix.postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]).purgeCss();*/

mix.postCss('resources/css/app.css', 'public/css')
    .options({
        postCss: [
            require('postcss-import'),
            require('tailwindcss'),
            require('autoprefixer'),
            require('postcss-purgecss-laravel')]
    }).purgeCss();
mix.js('resources/js/vue.js', 'public/js').vue();
mix.sass('resources/sass/fontawesome.scss', 'public/css').purgeCss();

