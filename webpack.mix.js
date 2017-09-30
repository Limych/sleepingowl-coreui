/*
 * Copyright (c) 2017 Andrey "Limych" Khrolenok <andrey@khrolenok.ru>
 */

// noinspection JSAnnotator
let mix = require('laravel-mix');

const replace = require('replace-in-file');

mix.setPublicPath('public');

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
mix.sass('resources/assets/sass/coreui-app.scss', 'public/css/')
    .sass('resources/assets/sass/fonts.scss', 'public/css/')
    .js('resources/assets/js/coreui-app.js', 'public/js/')
    .then(function () {
        // Patch absolute URLs in CSS styles
        replace.sync({
            files: 'public/css/*.css',
            from: 'url(/',
            to: 'url(/packages/sleepingowl/coreui/'
        });
    });

