var gulp = require('gulp'),
    less = require('gulp-less'),
    cssmin = require('gulp-cssmin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    sourcemaps = require('gulp-sourcemaps');

gulp.task('less', function() {
    return gulp.src('./less/style.less')
        .pipe(sourcemaps.init())
            .pipe(less().on('error', function(err) {
                console.log(err);
            }))
            .pipe(cssmin().on('error', function(err) {
                console.log(err);
            }))
            .pipe(rename({
                suffix: '.min'
            }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./build/'));
});

var jsFiles = [
        './bower_components/jquery/dist/jquery.js',
        //'./bower_components/vue/dist/vue.min.js',
        './bower_components/vue/dist/vue.js',
        './bower_components/vee-validate/dist/vee-validate.js',
        './bower_components/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js',
        './bower_components/flatpickr/dist/flatpickr.js',
        './bower_components/flatpickr/dist/l10n/ru.js',
        './js/**/*.js'
    ],
    jsDest = './build';

gulp.task('scripts', function() {
    return gulp.src(jsFiles)
        .pipe(sourcemaps.init())
            .pipe(concat('scripts.js'))
            .pipe(gulp.dest(jsDest))
            .pipe(rename('scripts.min.js'))
            .pipe(uglify())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(jsDest));
});

gulp.task('default', ['less', 'scripts'], function() {
    gulp.watch('./less/**/*.less', ['less']);
    gulp.watch('./js/**/*.js', ['scripts']);
});