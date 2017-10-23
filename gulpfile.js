var gulp = require('gulp'),
  watch = require('gulp-watch');

gulp.task('build', function() {
  console.log("building");
  var filesToCopy = [
  './style.css',
  './*.php'
  ]

  return gulp.src(filesToCopy)
  .pipe(gulp.dest("/Applications/MAMP/htdocs/wordpress/wp-content/themes/hedgehog"));
});

gulp.task('watch', function() {
  var filesToWatch = [
  './style.css',
  './*.php'
  ]

  watch(filesToWatch, function() {
    gulp.start('build');
  });
});
