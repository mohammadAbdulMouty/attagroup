var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass',function(){
    return gulp.src('public/sass/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('public/css'))
})


gulp.task('sass:watch', function () {
    gulp.watch('public/sass/*.scss', gulp.series('sass'));
  });