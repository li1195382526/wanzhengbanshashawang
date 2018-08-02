//导入所需插件
var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var cssnano = require('gulp-cssnano');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
// var babel = require('gulp-babel');
//发布任务
gulp.task('sass',function(){
    gulp.src('./src/sass/*.scss').pipe(sass()).pipe(rename({"suffix" : ".min"}))
    // .pipe(cssnano())
    .pipe(gulp.dest('./dist'));
})
gulp.task('js',function(){
    gulp.src('./src/js/*.js')
    //.pipe(rename({"suffix":".min"}))
    .pipe(concat("index.min.js")).pipe(uglify()).pipe(gulp.dest('./dist'));
})
gulp.task('default',function(){
    gulp.watch(['./src/sass/*.scss','./src/js/*.js'],['sass','js']);
})
// gulp.task('default',function(){
//     gulp.watch([""],['js']);
// })
