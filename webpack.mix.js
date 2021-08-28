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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/application-33c3ffb37027f82f32b1.chunk.js', 'public/js')
    .js('resources/js/runtime~application-006109b2f6553db0346e.js', 'public/js')
    .js('resources/js/vendors~application-ab9132ce4363dc9f8e61.chunk.js', 'public/js')
    .js('resources/js/script.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);
