const gulp = require('gulp')
const sass = require('gulp-sass')
const sassGlob = require('gulp-sass-glob')
const autoprefixer = require('gulp-autoprefixer')
const minify = require('gulp-minify')
const browserSync = require('browser-sync').create()

gulp.task('sass', function() {
  return gulp.src('./styles/style.scss')
    .pipe(sassGlob())
    .pipe(sass({
      'outputStyle' : 'compressed'
    }))
    .pipe(autoprefixer())
    .pipe(gulp.dest('./'))
    .pipe(browserSync.reload({
      stream: true,
      notify: false
    }))
})

gulp.task('js', function() {
  gulp.src('./scripts/app.js')
    .pipe(minify({
      ext:{
        min:'.min.js'
      }
    }))
    .pipe(gulp.dest('./scripts/'))
    .pipe(browserSync.reload({
      stream: true,
      notify: false
    }))
})

gulp.task('browserSync', function() {
  browserSync.init({
    notify: false,
    proxy: "rodpress.local"
  })
})

gulp.task('default', ['sass', 'js', 'browserSync'], function() {
  gulp.watch('./styles/**/*.scss', ['sass'])
  gulp.watch('./scripts/**/*.js', ['js'])
  gulp.watch('../templates/**.twig', browserSync.reload)
})
