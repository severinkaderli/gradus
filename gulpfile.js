var gulp = require('gulp'),
    sass = require('gulp-sass'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache');

/**
 * Compile SCSS files to css, minifies and rename to .min.css
 */
gulp.task('sass', function () {
 return gulp.src('public/sass/**/*')
     .pipe(sass().on('error', sass.logError))
     .pipe(rename({suffix: '.min'}))
     .pipe(minifycss())
     .pipe(gulp.dest('public/assets/css'))
     .pipe(notify('SASS Task completed'));
});

/**
 * JSHint, Javascript concatenation, uglifying and renaming to .min.js
 */
gulp.task('js', function () {
 return gulp.src('public/js/**/*.js')
     .pipe(jshint())
     .pipe(jshint.reporter('default'))
     .pipe(concat('gradus.js'))
     .pipe(rename({suffix: '.min'}))
     .pipe(uglify())
     .pipe(gulp.dest('public/assets/js'))
     .pipe(notify('JS Task Complete'));
});

/**
 * Default task
 */
gulp.task('default', ['sass', 'js']);