var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss', 'resources/css/libs/app.css');

    mix.styles([
        'bootstrap.css',
        'app.css',
        'select2.css',
        'jquery-ui.css',
        'jquery-ui.structure.css',
        'jquery-ui.theme.css'
    ], null, 'resources/css/libs');

    mix.scripts([
        'bootstrap.min.js',
        'jquery-1.11.3.js',
        'select2.min.js',
        'jquery-ui.js',
        'funciones.js',
        'jQuery.print.js'
    ], null, 'resources/js/libs');
});
