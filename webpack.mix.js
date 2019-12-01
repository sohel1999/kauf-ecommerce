const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');


 mix.styles([
     'public/backend/assets/vendor/bootstrap/css/bootstrap.min.css',
     'public/backend/assets/vendor/fonts/circular-std/style.css',
     'public/backend/assets/vendor/fonts/fontawesome/css/fontawesome-all.css',
     'public/backend/assets/vendor/charts/chartist-bundle/chartist.css',
     'public/backend/assets/vendor/charts/morris-bundle/morris.css',
     'public/backend/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css',
     'public/backend/assets/vendor/charts/c3charts/c3.css',
     'public/backend/assets/vendor/fonts/flag-icon-css/flag-icon.min.css',
     'public/backend/assets/assets/libs/css/style.css',
 ],'public/backend/assets/all.css');


