const gulp = require( 'gulp');
const sass = require('gulp-sass')(require('sass'));

gulp.task('sass', () => {
    gulp.src('./assets/src/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css/'))
})

gulp.task('sass:watch', () => {
    gulp.watch('./assets/src/scss/**/*.scss', ['sass'])
})

gulp.task('default', () => {
    
});