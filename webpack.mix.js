const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .scripts([
       'public/assets/js/jquery.min.js',
       'public/assets/js/bootstrap.min.js',
       'public/assets/js/animsition.js',
       'public/assets/js/plugins.js',
       'public/assets/js/fitText.min.js',
       'public/assets/js/main.min.js',
       'public/assets/js/countTo.min.js',
       'public/assets/js/flexslider.js',
       'public/assets/js/serviceDropDown.js',
       'public/assets/js/cube.portfolio.min.js',
       'public/assets/js/navFuncitionality.min.js'
   ], 'public/assets/js/app.min.js');

   mix.styles([
    'public/assets/css/animate.min.css',
    'public/assets/css/bootstrap.min.css',
    'public/assets/css/contact.min.css',
    'public/assets/css/cubeportfolio.min.css',
    'public/assets/css/flexslider.min.css',
    'public/css/header-search.min.css',
    'public/assets/css/font-awesome.min.css',
    'public/assets/css/fontello.min.css',
    'public/assets/css/magnific-popup.min.css',
    'public/assets/css/owl.carousel.min.css',
    'public/assets/css/shortcodes.min.css',
    'public/assets/css/woocommerce.min.css',
    'public/assets/style.css',
    'public/assets/includes/rev-slider/css/layers.min.css',
    'public/assets/includes/rev-slider/css/navigation.min.css',
    'public/assets/includes/rev-slider/css/openhand.123',
    'public/assets/includes/rev-slider/css/settings.min.css',
], 'public/css/all-styles.css');