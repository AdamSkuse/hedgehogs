var gulp = require('gulp'),
  watch = require('gulp-watch'),
  postcss = require('gulp-postcss'),
  autoprefixer = require('autoprefixer'),
  cssvars = require('postcss-simple-vars'),
  nested = require('postcss-nested'),
  cssImport = require('postcss-import'),
  mixins = require('postcss-mixins');

gulp.task('build', ['styles'], function() {
  console.log("building");

  var filesToCopy = [
    './*.php',
    './temp/style.css'
  ]

  return gulp.src(filesToCopy)
  .pipe(gulp.dest("/Applications/MAMP/htdocs/wordpress/wp-content/themes/hedgehog"));

});

gulp.task('watch', function() {
  var filesToWatch = [
  './dev/styles/**/*.css',
  './*.php'
  ]

  watch(filesToWatch, function() {
    gulp.start('build');
  });
});

gulp.task('styles', function() {
  return gulp.src('./dev/styles/style.css')
    .pipe(postcss([cssImport, mixins, cssvars, nested, autoprefixer]))
    .pipe(gulp.dest('./temp'));
});
