// init
const params = {};
const gulp   = require('gulp');
const plugin = require('gulp-load-plugins')();


/**
 * set params
 * 
 */
params.sass = {
	watch : 'src/sass/**/*.scss',
	src   : 'src/sass/style.scss',
	dest  : 'dest/resources/css',
	option: {
		outputStyle : 'compressed', // :expanded or :nested or :compact or :compressed
	}
}
params.autoprefixer = {
	option : {
		browsers: ['last 2 versions'],
		cascade : false
	}
}
params.js ={
	src   : 'src/js/**/*.js',
	dest  : 'dest/resources/js',
}


/**
 * sass task
 * 
 */
gulp.task('sass', function(){
	gulp.src(params.sass.src)
		.pipe(plugin.plumber({errorHandler: plugin.notify.onError('<%= error.message %>')}))
		.pipe(plugin.sassGlob())
		.pipe(plugin.sass(params.sass.option).on('error', plugin.sass.logError))
		.pipe(plugin.autoprefixer(params.autoprefixer.option))
		.pipe(plugin.rename({extname: '.min.css'}))
		.pipe(gulp.dest(params.sass.dest));
});


/**
 * js task
 * 
 */
gulp.task('js', function() {
	gulp.src(params.js.src)
		.pipe(plugin.plumber({errorHandler: plugin.notify.onError('<%= error.message %>')}))
		.pipe(plugin.uglify())
		.pipe(plugin.rename({extname: '.min.js'}))
		.pipe(gulp.dest(params.js.dest));
});


/**
 * watch task
 * 
 */
gulp.task('watch', function () {
	gulp.watch(params.sass.watch, ['sass']);
	gulp.watch(params.js.src, ['js']);
});
gulp.task('default', ['watch']);
