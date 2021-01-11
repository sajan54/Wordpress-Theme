import gulp from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCSS from 'gulp-clean-css';
import gulpif from 'gulp-if';
import sourcemaps from 'gulp-sourcemaps';
import imagemin from 'gulp-imagemin';
import del from 'del';
import webpack from 'webpack-stream';
import uglify from 'gulp-uglify';
import named from 'vinyl-named';
import zip from 'gulp-zip';
import replace from 'gulp-replace';
import info from './package.json';


const PRODUCTION = yargs.argv.prod;

const paths = {
    styles: {
        src: [
            'src/assets/scss/bundle.scss', 'src/assets/scss/admin.scss',
            'src/assets/scss/customize-preview.scss', 'src/assets/scss/customize-controls.scss' 
        ],
        dest: 'dist/assets/css',
        watch: 'src/assets/scss/**/*.scss'
    },
    images:  {
        src: 'src/assets/images/**/*.{jpg,jpeg,png,svg,gif}',
        dest: 'dist/assets/images'
    },
    scripts: {
        src: [
            'src/assets/js/bundle.js', 'src/assets/js/admin.js',
            'src/assets/js/customize-preview.js', 'src/assets/js/customize-controls.js',
            'src/assets/js/colorpicker.min.js'
        ],
        dest: 'dist/assets/js',
        watch: 'src/assets/js/**/*.js'
    },
    other: {
        src: ['src/assets/**/*', '!src/assets/{images,js,scss}', '!src/assets/{images,js,scss}/**/*'],
        dest: 'dist/assets'
    },
    package: {
        src: [
            '**/*', '!.vscode', '!node_modules{,/**}', '!packaged{,/**}',
            '!src{,/**}', '!.babelrc', '!package.json', '!package-lock.json',
            '!.gitignore', '!gulpfile.babel.js'
        ],
        dest: 'packaged'
    }
}

export const clean = () =>  del(['dist']);

export const styles = (done) => {
    return gulp.src(paths.styles.src)
        .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
        .pipe(sass().on('error', sass.logError))
        .pipe(gulpif(PRODUCTION, cleanCSS({compatibility: 'ie8'})))
        .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
        .pipe(gulp.dest(paths.styles.dest));
}


export const images = () => {
    return gulp.src(paths.images.src)
        .pipe(gulpif(PRODUCTION, imagemin()))
        .pipe(gulp.dest(paths.images.dest));
}

export const copy = () => {
    return gulp.src(paths.other.src)
        .pipe(gulp.dest(paths.other.dest));
}

export const watch = () => {
    gulp.watch(paths.styles.watch, styles);
    gulp.watch(paths.images.src, images);
    gulp.watch(paths.other.src, copy);
    gulp.watch(paths.scripts.watch, scripts);
}

export const scripts = () => {
    return gulp.src(paths.scripts.src)
        .pipe(named())
        .pipe(webpack({
            module: {
                rules: [
                    {
                        test: /\.js$/,
                        use:{
                            loader: 'babel-loader',
                            options: {
                                presets: ['@babel/preset-env']
                            }
                        }
                    }
                ]
            },
            output: {
                filename: '[name].js'
            },
            externals:{
                jquery: 'jQuery'
            },
            mode: PRODUCTION ? 'production' : 'development',
            devtool: PRODUCTION ? false : 'inline-source-map'
        }))
        .pipe(gulpif(PRODUCTION, uglify()))
        .pipe(gulp.dest(paths.scripts.dest));
}

export const compress = () => {
    return gulp.src(paths.package.src)
        .pipe(replace('_themename', info.name))
        .pipe(zip(`${info.name}.zip`))
        .pipe(gulp.dest(paths.package.dest));
}

export const dev = gulp.series(clean, gulp.parallel(styles, images, scripts, copy), watch);
export const build = gulp.series(clean, gulp.parallel(styles, images, scripts, copy));
export const bundle = gulp.series(build, compress);


export default dev;