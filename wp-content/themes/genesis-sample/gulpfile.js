var gulp = require('gulp');
 
var sass = require('gulp-sass');
 var concat = require('gulp-concat');

gulp.task('default', ['styles'], function(){
    gulp.watch('sass/**/*.scss', ['styles']);


});

gulp.task('styles', function () {
 
    gulp.src('sass/**/*.scss')
 
       .pipe(sass().on('error', sass.logError))
       .pipe(concat('style.css'))
        .pipe(gulp.dest('./'));
 
});
 