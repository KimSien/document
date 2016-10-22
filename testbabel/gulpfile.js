var gulp = require('gulp');
var babel = require('gulp-babel');
var plumber = require('gulp-plumber');
var sourcemaps = require("gulp-sourcemaps"); 
var src = ['sample.es6.js'];

gulp.task('build', function () {
  return gulp.src(src)
    .pipe(plumber())
    .pipe(sourcemaps.init()) 
    .pipe(babel())
    .pipe(sourcemaps.write(".")) 
    .pipe(gulp.dest('./dist'));
});

gulp.task('watch', function () {
  gulp.watch(src, ['build']);
});

gulp.task('default', ['build']);
