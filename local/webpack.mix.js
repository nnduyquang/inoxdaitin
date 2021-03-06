let mix = require('laravel-mix');

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
////////////////////////KHỞI TẠO////////////////////////////////////////////////////////////////
mix.styles([
    'bower_components/jquery/dist/jquery.min.js',
    'bower_components/bootstrap/dist/js/bootstrap.min.js',
], '../js/core.common.js')
    .styles([
        'bower_components/bootstrap/dist/css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
    ], '../css/core.common.css')
    .copy([
        'bower_components/bootstrap/fonts/**',
        'bower_components/font-awesome/fonts/**'
    ], '../fonts')
    .styles([
        'bower_components/nivo-slider/nivo-slider.css',
    ], '../css/core.frontend.css')
    .sass('resources/assets/sass/frontend.scss', '../../css/frontend.css').options({processCssUrls: false})
    .sass('resources/assets/sass/trangchu.scss', '../../css/trangchu.css').options({processCssUrls: false})
    .sass('resources/assets/sass/fe.sidebar.scss', '../../css/fe.sidebar.css').options({processCssUrls: false})
    .sass('resources/assets/sass/fe.lienhe.scss', '../../css/fe.lienhe.css').options({processCssUrls: false})
    .sass('resources/assets/sass/fe.gioithieu.scss', '../../css/fe.gioithieu.css').options({processCssUrls: false})
    .sass('resources/assets/sass/fe.sanpham.chitiet.scss', '../../css/fe.sanpham.chitiet.css').options({processCssUrls: false})
    .styles([
        'bower_components/nivo-slider/jquery.nivo.slider.pack.js',
    ], '../js/core.frontend.js')
    .copy([
        'bower_components/nivo-slider/themes',
    ], '../css/themes', false)
    .styles('resources/assets/js/scripts.js', '../js/scripts.js')
    .styles([
        'bower_components/AdminLTE/dist/css/AdminLTE.min.css',
        'bower_components/AdminLTE/dist/css/skins/skin-blue.min.css'
    ], '../css/core.backend.css')
    .styles([
        'bower_components/AdminLTE/dist/js/app.min.js',
    ], '../js/core.backend.js')
    .styles([
        'bower_components/bootstrap-toggle/css/bootstrap-toggle.min.css',
    ], '../css/bootstrap-toggle.min.css')
    .styles([
        'bower_components/bootstrap-toggle/js/bootstrap-toggle.min.js',
    ], '../js/bootstrap-toggle.min.js')
    //LOGIN 1 JS
    .styles([
        'resources/assets/js/login1.js',
    ], '../js/login.js')
    .styles('resources/assets/js/ulti.js', '../js/ulti.js')

    //LOGIN 1 CSS
    .styles([
        'resources/assets/sass/login1.scss',
    ], '../css/login.css')
    //CSS CORE BACKEND
    .styles([
        'bower_components/AdminLTE/dist/css/AdminLTE.min.css',
        'bower_components/AdminLTE/dist/css/skins/skin-blue.min.css'
    ], '../css/core.backend.css')
    //JS CORE BACKEND
    .styles([
        'bower_components/AdminLTE/dist/js/app.min.js',
    ], '../js/core.backend.js')
    //CSS VÀ JS SLIDER
    .styles([
        'resources/assets/js/be.config.slider.js',
    ], '../js/be.config.slider.js')
    .styles([
        'resources/assets/js/be.config.js',
    ], '../js/be.config.js')

    .styles([
        'resources/assets/js/be.news.js',
    ], '../js/be.news.js')
    .styles([
        'resources/assets/js/be.category.js',
    ], '../js/be.category.js')
    .sass('resources/assets/sass/be.category.scss', '../../css/be.category.css')
    .styles([
        'resources/assets/js/be.posts.gioithieu.js',
    ], '../js/be.posts.gioithieu.js')
    .styles([
        'resources/assets/js/be.product.js',
    ], '../js/be.product.js')
    .sass('resources/assets/sass/be.product.scss', '../../css/be.product.css')
    .sass('resources/assets/sass/be.config.slider.scss', '../../css/be.config.slider.css')
    .sass('resources/assets/sass/fe.tintuc.scss', '../../css/fe.tintuc.css')
    .sass('resources/assets/sass/fe.tintuc.detail.scss', '../../css/fe.tintuc.detail.css')
    .styles([
        'bower_components/bootstrap-toggle/css/bootstrap-toggle.min.css',
    ], '../css/bootstrap-toggle.min.css')
    .styles([
        'bower_components/bootstrap-toggle/js/bootstrap-toggle.min.js',
    ], '../js/bootstrap-toggle.min.js')
// CKEDITOR CHỈ CHẠY ĐOẠN NÀY 1 LẦN
// ===================
// .copy('bower_components/ckeditor/adapters', '../js/ckeditor/adapters',false)
// .copy('bower_components/ckeditor/lang', '../js/ckeditor/lang',false)
// .copy('bower_components/ckeditor/skins', '../js/ckeditor/skins',false)
// .copy([
//     'bower_components/ckeditor/ckeditor.js',
//     'bower_components/ckeditor/config.js',
//     'bower_components/ckeditor/contents.css',
//     'bower_components/ckeditor/styles.js'
// ], '../js/ckeditor',false)
// .copy('bower_components/ckeditor/plugins', '../js/ckeditor/plugins',false)
////////////////////////////////////////////////////////////////////////////////////////////////
