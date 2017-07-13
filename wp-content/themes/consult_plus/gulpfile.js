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
        //js: './assets/src/js/**/*.js'
        bootstrap_js: './bower_components/bootstrap/dist/js/bootstrap.min.js',
        //jquery_js: './bower_components/jquery/dist/jquery.js',
        underscores_js: './js/*.js',
        js_isotope: './bower-components/isotope/dist/*.js'
    },

    src: { 
        main_sass: './assets/src/sass/main.scss',
        js: './assets/src/js/'
    },

    public: {
        css: './assets/public/css/',
        js: './assets/public/js/'
    },

    watch: {
        stylesheets: './assets/src/scss/layouts/*.scss'
    },

    build: {
        mincss: './',
        js: './'
    }
};

gulp.task('compile-sass', function(){
	gulp.src(path.src.main_sass)
	.pipe(sass())
    .pipe(gulp.dest(path.public.css))
        .pipe(notify("Sass compiled!"));
});// sealed компиляция сборка и минификация всех стилей

gulp.task ('concatenate-and-minify-css', function () {
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
    gulp.src([path.libs.bootstrap_js, path.libs.js_isotope])
        .pipe(sourcemaps.init())
    .pipe(concat('main.js'))
        //gulp.src(path.public.js + "main.js")
            .pipe(uglify())
        .pipe(rename({
            suffix: ".min"}))
            .pipe(sourcemaps.write())
    .pipe(gulp.dest(path.public.js))
});

gulp.task('get-fonts', function(){
    gulp.src(path.out.carousel_fonts)
    .pipe(gulp.dest(path.build.car_fonts));
})


gulp.task('watch', function(){
    gulp.watch(path.watch.stylesheets, ['compile-sass']);
    gulp.watch(path.watch.stylesheets, ['concatenate-and-minify-css']);
});

gulp.task('default', ['compile-sass' , 'concatenate-and-minify-css', 'concatenate-and-minify-js', 'watch']);
