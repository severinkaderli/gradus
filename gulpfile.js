var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    del = require('del');

/**
 * Compile SCSS files to css, minifies and rename to .min.css
 */
gulp.task('sass', function () {
 return sass('src/sass/**/*', {style: 'expanded'})
     .pipe(gulp.dest('build/css'))
     .pipe(rename({suffix: '.min'}))
     .pipe(minifycss())
     .pipe(gulp.dest('build/css'))
     .pipe(notify('SASS Task Complete'));
});

/**
 * JSHint, Javascript concatenation, uglifying and renaming to .min.js
 */
gulp.task('js', function () {
 return gulp.src('src/js/**/*.js')
     .pipe(jshint())
     .pipe(jshint.reporter('default'))
     .pipe(concat('simplex.js'))
     .pipe(rename({suffix: '.min'}))
     .pipe(uglify())
     .pipe(gulp.dest('build/js'))
     .pipe(notify('JS Task Complete'));
});

/**
 * Default task
 */
gulp.task('default', ['sass', 'js']);