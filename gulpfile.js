let gulp = require('gulp'), 
    cssimport = require('gulp-cssimport'),
    cleanCSS = require('gulp-clean-css'),
    autoprefixer = require('gulp-autoprefixer'),
    watch = require('gulp-watch');

function generateStyles () {
    return gulp .src('styles/style.css')
                .pipe(cssimport())
                .pipe(cleanCSS({compatibility: 'ie8'}))
                .pipe(autoprefixer({
                    browsers: ['last 2 versions'],
                    cascade: false,                    
                }))
                .pipe(gulp.dest('styles/dest'));

}

gulp.task('styles', generateStyles);

gulp.task('watch', function(){
    gulp.watch('styles/blocks/**/*.css', gulp.series('styles'));
})

gulp.task('dev', gulp.series('styles', 'watch'));