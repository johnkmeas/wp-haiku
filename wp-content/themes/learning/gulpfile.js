var gulp = require('gulp');
 
var sass = require('gulp-sass');
 var concat = require('gulp-concat');

gulp.task('default', ['styles', 'material', 'combine'], function(){
    gulp.watch('sass2/**/*.scss', ['styles']);
    gulp.watch('materialize-src/sass/**/*.scss', ['material']);
    gulp.watch('./*.css', ['combine']);


});

gulp.task('styles', function () {
 
    gulp.src('sass2/**/*.scss')
 
       .pipe(sass().on('error', sass.logError))
       //.pipe(concat('main.css'))
       
        .pipe(concat('main.css'))
        .pipe(gulp.dest('./'));
        //.pipe(gulp.dest('./dist/css'));
        //.pipe(gulp.dest('style.css'));
   
 
});
 
gulp.task('material', function () {
 
    gulp.src('materialize-src/sass/**/*.scss')
 
       .pipe(sass().on('error', sass.logError))
       //.pipe(concat('main.css'))
       
        .pipe(concat('material.css'))
        .pipe(gulp.dest('./'));
        //.pipe(gulp.dest('./dist/css'));
        //.pipe(gulp.dest('style.css'));
 
});

gulp.task('combine', function() {
  return gulp.src(['./magic.css', './animate.css', './material.css', './main.css'])
    .pipe(concat('style.css'))
    .pipe(gulp.dest('./'));
});