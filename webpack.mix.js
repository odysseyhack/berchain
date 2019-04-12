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

mix.react('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

/*
 | If you're running Laravel on a virtualized environment, set this domain
 | on your /etc/hosts pointing to the IP of your installation. Otherwise
 | comment these lines.
 */
mix.browserSync({
  proxy: 'odyssey.local'
})

