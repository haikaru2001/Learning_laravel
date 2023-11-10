const mix = require('laravel-mix');

// mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css','public/css', [

//     //
// ]);

mix.scripts([
    'resources/js/my-script.js','resources/js/my-script-console.js'
], 'public/js/my-app.js');

mix.styles([
    'resources/css/my-style.css','resources/css/my-style-h1.css'
], 'public/css/my-app.css');