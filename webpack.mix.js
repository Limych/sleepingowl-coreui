/*
 * Copyright (c) 2017 Andrey "Limych" Khrolenok <andrey@khrolenok.ru>
 */

// noinspection JSAnnotator
let mix = require('laravel-mix');

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

// CoreUI assets
mix.setPublicPath('public')
    .sass('resources/assets/sass/coreui-app.scss', 'public/css/')
    .js('resources/assets/js/coreui-app.js', 'public/js/');
