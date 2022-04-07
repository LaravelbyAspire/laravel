const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'resources/js/jquery.min.js', 'resources/js/owl.autoplay.js', 'resources/js/owl.carousel.js', 'resources/js/owl.carousel.min.js', 'public/js')
    .postCss('resources/css/hover.css', 'resources/css/mobile.css', 'resources/css/owl.carousel.css', 'resources/css/owl.carousel.min.css', 'resources/css/style.css', 'public/css', [
        //
    ]);
