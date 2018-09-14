var gulp = require('gulp');
var sass = require('gulp-sass');
var sassGlob = require('gulp-sass-glob');
var shell = require('gulp-shell');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
const imagemin = require('gulp-imagemin');
 
gulp.task('minifyImages', () =>
    gulp.src('src/assets/images/*/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/assets/images'))
);

// Lance les fonctions lorsque je sauvearde du scss
gulp.task('watch', function(){
  gulp.watch('src/assets/components/*/*/*.scss', ['css']);
  gulp.watch('src/assets/components/*/*/*.js', ['js']);

})

// Compile les ficiers scss en css
gulp.task('css', function(){
	// Compile le style principal
	gulp.src('src/assets/*.scss')
		.pipe(sassGlob())
		.pipe(sass({outputStyle: 'compressed'}))
		.pipe(gulp.dest('dist/assets/css'));
});

gulp.task('js', function(){
    // Compile le js
    return gulp.src(['src/assets/components/*/*/*.js','src/assets/components/jsLib/*.js'])
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('dist/assets/js'))
    //.pipe(uglify())
    .pipe(gulp.dest('dist/assets/js'));

});


 

