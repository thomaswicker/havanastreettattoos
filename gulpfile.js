// Gulp Setup file
var autoprefixer = require("gulp-autoprefixer"),
  cache = require("gulp-cache"),
  cssnano = require("gulp-cssnano"),
  concat = require("gulp-concat"),
  connect = require("gulp-connect"),
  gulp = require("gulp"),
  minifycss = require("gulp-minify-css"),
  notify = require("gulp-notify"),
  rename = require("gulp-rename"),
  sass = require("gulp-sass"),
  uglify = require("gulp-uglify");

var currentdate = new Date();
var datetime =
  currentdate.getDate() +
  "/" +
  (currentdate.getMonth() + 1) +
  "/" +
  currentdate.getFullYear() +
  " @ " +
  currentdate.getHours() +
  ":" +
  currentdate.getMinutes() +
  ":" +
  currentdate.getSeconds();

//source variables
var jsSources = ["src/js/application.js"];
var sassSources = ["src/sass/application.scss"];

// Basic Gulp task syntax
gulp.task("hello", function() {
  console.log(
    "\n######################################################################## \n Hello! You started this gulpfile at: " +
      datetime +
      " \n########################################################################"
  );
});

// Compile SASS & Minify CSS
gulp.task("sass", function() {
  return gulp
    .src(sassSources)
    .pipe(sass())
    .pipe(gulp.dest("dist/css"))
    .pipe(rename({ suffix: ".min" }))
    .pipe(cssnano())
    .pipe(gulp.dest("dist/css"))
    .pipe(
      notify({
        message:
          "\n_______________________________________________________\n %%% SASS COMPILED %%%\n_______________________________________________________"
      })
    );
});

// Compile Javascript & Minify
gulp.task("javascript", function() {
  return gulp
    .src(jsSources)
    .pipe(concat("application.js"))
    .pipe(gulp.dest("dist/js"))
    .pipe(rename({ suffix: ".min" }))
    .pipe(
      uglify().on("error", function(e) {
        console.log(e);
      })
    )
    .pipe(gulp.dest("dist/js"))
    .pipe(
      notify({
        message:
          "\n_______________________________________________________\n %%% JAVASCRIPT  COMPILED %%%\n_______________________________________________________"
      })
    );
});

// Watch & Rerun Gulp
gulp.task("watch", function() {
  gulp.watch(["src/sass/**/*.scss"], ["sass"]);
  gulp.watch(["src/js/**/*.js"], ["javascript"]);
});

// Initalize
gulp.task("default", ["watch"], function() {
  gulp.start("hello", "sass", "javascript");
});
