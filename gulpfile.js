var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var livereload = require('gulp-livereload');
var sourcemaps = require('gulp-sourcemaps');
var cleancss = require('gulp-clean-css');
var plumber = require('gulp-plumber');
var gulpSequence = require('gulp-sequence');
var size = require('gulp-size');

var env = process.env.GULP_ENV;

var jsFiles = [
  'bower_components/jquery/dist/jquery.js',
  'bower_components/tether/dist/js/tether.js',
  'bower_components/bootstrap/dist/js/bootstrap.js',
  '_assets/js/**/*.js'
];

var cssFiles = [
  '_assets/scss/main.scss' //imports in main.scss
];

var watchFiles = [
  //'partials/*.php',
  //'functions/*.php',
  //'gulpfile.js',
  //'*.php',
  '_assets/scss/**/*.scss'
];

gulp.task('css', function () {
  return gulp.src(cssFiles)
    .pipe(plumber({
      errorHandler: function (err) {
        console.log(err);
        this.emit('end');
      }
    }))
    .pipe(sourcemaps.init({largeFile: true}))
    .pipe(sass())
    .pipe(cleancss())
    .pipe(concat('style.min.css'))
    .pipe(sourcemaps.write())
    .pipe(size())
    .pipe(gulp.dest('build/'))
    .pipe(livereload());
});

gulp.task('js', function () {
  return gulp.src(jsFiles)
    .pipe(sourcemaps.init({largeFile: true}))
    .pipe(plumber())
    //.pipe(uglify())
    .pipe(concat('script.min.js'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('build/'))
    .pipe(livereload());
});

gulp.task('fonts', function () {
    return gulp.src([
        //'bower_components/bootstrap/fonts/*',
        'bower_components/font-awesome/fonts/*'
    ]).pipe(gulp.dest('build/fonts/'))
        .pipe(livereload());
});

gulp.task('watchfiles', function () {
  return gulp.src(watchFiles)
    .pipe(livereload());
});

gulp.task('watch', ['css', 'js'], function () {
    livereload.listen();
    gulp.watch(cssFiles, ['css']);
    gulp.watch(jsFiles, ['js']);
    //gulp.watch(watchFiles, ['watchfiles', 'css']);
    gulp.watch(watchFiles, ['css']);
});

//gulp.task('default', gulpSequence('clean-assets', ['js', 'css', 'img', 'fonts'], 'manifest', 'clean-manifest', 'compress'));
gulp.task('default', gulpSequence('css', 'js', 'fonts'));
