var gulp = require('gulp');

	gulp.task('default', function() {
  	console.log("default task");
	});

  gulp.task('build', function() {
    console.log("building");
    var filesToCopy = [
    './style.css',
    './index.php'
    ]

    return gulp.src(filesToCopy)
    .pipe(gulp.dest("/Applications/MAMP/htdocs/wordpress/wp-content/themes/hedgehog"));
  });
