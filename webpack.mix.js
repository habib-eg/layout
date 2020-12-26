const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/main.js', 'assets/js')
    .sass('resources/sass/main.scss', 'assets/css')
    .sass('resources/sass/components.scss', 'assets/css')
    .sass('resources/sass/rtl.scss', 'assets/css')
    .sass('resources/sass/style.scss', 'assets/css')
    .sass('resources/sass/skins/reverse.scss', 'assets/css')
    .sass('resources/sass/custom.scss', 'assets/css')
;

mix.copy([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/bootstrap-dark/src/bootstrap-dark.css',
    'node_modules/@fortawesome/fontawesome-free/css/all.min.css',
    'node_modules/jqvmap/dist/jqvmap.min.css',
    'node_modules/summernote/dist/summernote-bs4.css',
    'node_modules/weathericons/css/weather-icons-wind.min.css',
    'node_modules/weathericons/css/weather-icons.min.css',
    'node_modules/owl.carousel/dist/assets/owl.carousel.min.css',
    'node_modules/owl.carousel/dist/assets/owl.theme.default.min.css',
    'node_modules/bootstrap-social/bootstrap-social.css',
    'node_modules/chocolat/dist/css/chocolat.css',
    'node_modules/prismjs/themes/prism.css',
    'node_modules/dropzone/dist/min/dropzone.min.css',
    'node_modules/flag-icon-css/css/flag-icon.min.css',
    'node_modules/selectric/public/selectric.css',
    'node_modules/codemirror/lib/codemirror.css',
    'node_modules/codemirror/theme/duotone-dark.css',
    'node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
    'node_modules/bootstrap-daterangepicker/daterangepicker.css',
    'node_modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css',
    'node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
    'node_modules/codemirror/theme/duotone-dark.css',
    'node_modules/fullcalendar/dist/fullcalendar.min.css',
    'node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
    'node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css',
    'node_modules/ionicons201/css/ionicons.min.css',
    'node_modules/izitoast/dist/css/iziToast.min.css',
], 'resources/css');

mix.copy([
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/@fortawesome/fontawesome-free/js/all.min.js',
    'node_modules/jquery-sparkline/jquery.sparkline.min.js',
    'node_modules/owl.carousel/dist/owl.carousel.min.js',
    'node_modules/summernote/dist/summernote-bs4.js',
    'node_modules/chocolat/dist/js/jquery.chocolat.min.js',
    'node_modules/simpleweather/jquery.simpleWeather.min.js',
    'node_modules/chart.js/dist/Chart.min.js',
    'node_modules/jqvmap/dist/jquery.vmap.min.js',
    'node_modules/jqvmap/dist/maps/jquery.vmap.world.js',
    'node_modules/nicescroll/dist/jquery.nicescroll.min.js',
    'node_modules/moment/dist/moment.js',
    'node_modules/chocolat/dist/js/jquery.chocolat.min.js',
    'node_modules/jquery-ui-dist/jquery-ui.min.js',
    'node_modules/prismjs/prism.js',
    'node_modules/dropzone/dist/min/dropzone.min.js',
    'node_modules/jqvmap/dist/jquery.vmap.min.js',
    'node_modules/jqvmap/dist/maps/jquery.vmap.world.js',
    'node_modules/jquery-ui-dist/jquery-ui.min.js',
    'node_modules/selectric/public/jquery.selectric.min.js',
    'node_modules/@aacassandra/jquery_upload_preview/assets/js/jquery.uploadPreview.min.js',
    'node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
    'node_modules/codemirror/lib/codemirror.js',
    'node_modules/codemirror/mode/javascript/javascript.js',
    'node_modules/cleave.js/dist/cleave.min.js',
    'node_modules/cleave.js/dist/addons/cleave-phone.us.js',
    'node_modules/@aacassandra/jquery.pwstrength/jquery.pwstrength.min.js',
    'node_modules/bootstrap-daterangepicker/daterangepicker.js',
    'node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js',
    'node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js',
    'node_modules/select2/dist/js/select2.full.min.js',
    'node_modules/gmaps/gmaps.min.js',
    'node_modules/sticky-kit/dist/sticky-kit.min.js',
    'node_modules/fullcalendar/dist/fullcalendar.min.js',
    'node_modules/datatables/media/js/jquery.dataTables.min.js',
    'node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
    'node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js',
    'node_modules/sweetalert/dist/sweetalert.min.js',
    'node_modules/izitoast/dist/js/iziToast.min.js',
], 'resources/js');


if (mix.inProduction()) {
    mix.version();
}
