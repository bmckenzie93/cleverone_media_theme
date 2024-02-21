const gulp = require( 'gulp'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass')(require('sass'));


// MINIFY JS
gulp.task('minify', onComplete => {
    gulp.src('./assets/src/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('./assets/js/'))
    onComplete();
})


// SASS TASK
gulp.task('sass', onComplete => {
    gulp.src('./assets/src/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css/'))
    onComplete();
})

gulp.task('sass:watch', onComplete => {
    gulp.watch('./assets/src/scss/**/*.scss', ['sass'])
    onComplete()
})