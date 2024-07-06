<<<<<<< HEAD
const mix = require("laravel-mix");
=======
const mix = require('laravel-mix');
>>>>>>> 519d056291fcfc67a547d63fc1f7bd084e471e1a

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
<<<<<<< HEAD
 | for your Laravel application. By default, we are compiling the Sass
=======
 | for your Laravel applications. By default, we are compiling the CSS
>>>>>>> 519d056291fcfc67a547d63fc1f7bd084e471e1a
 | file for the application as well as bundling up all the JS files.
 |
 */

<<<<<<< HEAD
// mix.js("resources/js/app.js", "public/js")
//     .sass("resources/sass/app.scss", "public/css")
//     .sourceMaps();

mix.sass("resources/sass/app.scss", "public/css")
    .js("resources/js/app.js", "public/js")
    .version();
=======
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
>>>>>>> 519d056291fcfc67a547d63fc1f7bd084e471e1a
