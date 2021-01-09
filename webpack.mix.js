const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');


mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/main.css', 'public/css', [
        require('tailwindcss'),
    ]);