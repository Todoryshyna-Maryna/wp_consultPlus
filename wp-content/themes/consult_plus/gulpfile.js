var gulp = require('gulp'),
    sass = require('gulp-sass'),
    cleanCSS = require('gulp-clean-css'),
    rename = require('gulp-rename'),
    concat = require ('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps'),
    uglify = require('gulp-uglify'),
    notify = require('gulp-notify');

var path = {

    libs: {
        bootstrap: './bower_components/bootstrap/dist/css/bootstrap.css',
        slick_js: './node_modules/slick-carousel/slick/slick.js',
        bootstrap_js: './bower_components/bootstrap/dist/js/bootstrap.js',
        underscores_js: './js/*.js',
        js_isotope: './bower_components/isotope/dist/*.js',
        font_awesome: './bower-components/font-awesome/scss/font-awesome.scss'
    },

    src: {
        main_sass: './assets/src/sass/main.scss',
        js: './assets/src/js/*.js'
    },

    public: {
        css: './assets/public/css/',
        js: './assets/public/js/'
    },

    watch: {
        stylesheets: './assets/src/sass/**/*.scss'
    },

    build: {
        mincss: './',
        js: './'
    }
};

// Fonts
gulp.task('fonts', function() {
    return gulp.src(['./bower_components/font-awesome/fonts/*'])
        .pipe(gulp.dest('./assets/public/fonts/'));
});

gulp.task('compile-sass', function(){
    gulp.src([path.src.main_sass, path.libs.font_awesome])
        .pipe(sass())
        .pipe(gulp.dest(path.public.css))
        .pipe(notify("Sass compiled!"));
});// sealed компиляция сборка и минификация всех стилей

gulp.task ('concatenate-and-minify-css', function () {
    return gulp.src(path.public.css + "*.css")
        .pipe(sourcemaps.init())
        .pipe(concat('main.css'))
        .pipe(sourcemaps.write({includeContent: false, sourceRoot: '.'}))
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(rename({
            suffix: ".min"}))
        .pipe(gulp.dest(path.build.mincss))
        .pipe(notify("css built!"))
        .pipe(sourcemaps.write('.'))
});

gulp.task ('concatenate-and-minify-css-wbt', function () {
    return gulp.src([path.libs.bootstrap, path.public.css + "*.css"])
        .pipe(sourcemaps.init())
        .pipe(concat('main.css'))
        .pipe(sourcemaps.write({includeContent: false, sourceRoot: '.'}))
        .pipe(sourcemaps.init({loadMaps: true}))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(rename({
            suffix: ".min"}))
        .pipe(gulp.dest(path.build.mincss))
        .pipe(notify("css built!"))
        .pipe(sourcemaps.write('.'))
});

gulp.task('concatenate-and-minify-js', function(){
    return gulp.src(path.src.js)
        .pipe(sourcemaps.init())
        .pipe(concat('main.js'))
        //gulp.src(path.public.js + "main.js")
        .pipe(uglify())
        .pipe(rename({
            suffix: ".min"}))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.public.js));
});

gulp.task('get-fonts', function(){
    gulp.src(path.out.carousel_fonts)
        .pipe(gulp.dest(path.build.car_fonts));
})


gulp.task('watch', function(){
    gulp.watch(path.watch.stylesheets, ['compile-sass','concatenate-and-minify-css']);
});

gulp.task('default', ['compile-sass' , 'concatenate-and-minify-css', 'concatenate-and-minify-js', 'watch']);
