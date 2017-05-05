'use strict';

var gulp = require('gulp');
var runSequence = require('run-sequence');

var rootDir = './';
var jsDir = './vendor/assets/javascripts';
var cssDir = './vendor/assets/stylesheets';
var fontDir = './vendor/assets/fonts';

var dependencies = {
  js: [
    './node_modules/jigl/dist/jigl.js'
  ],
  css: [
    './node_modules/jigl/dist/jigl.css'
  ],
  fonts: [
  ]
};

gulp.task('move-js', function(callback) {
  return gulp.src(dependencies.js)
    .pipe(gulp.dest(jsDir));
});

gulp.task('move-css', function(callback) {
  return gulp.src(dependencies.css)
    .pipe(gulp.dest(cssDir));
});

gulp.task('move-fonts', function(callback) {
  return gulp.src(dependencies.fonts)
    .pipe(gulp.dest(cssDir));
});

gulp.task('default', function(callback) {
  return runSequence(
    'move-js',
    'move-css',
    'move-fonts',
    callback
  );
});