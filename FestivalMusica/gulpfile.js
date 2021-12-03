const { series, src, dest, watch, parallel } = require('gulp');
const sass = require('gulp-sass');
const imagemin = require('gulp-imagemin'); //permite obtener la funcionalidad de gulp para minimizar el tamaño de las imagenes
const notifys = require('gulp-notify');
const webp = require('gulp-webp');
const concat = require('gulp-concat');

//Utilidades css
const autoprefixer = require('autoprefixer'); //agrega procesamiento
const postcss = require('gulp-postcss'); //agrega prefijos
const cssnano = require('cssnano');
const sourcemaps = require('gulp-sourcemaps');

//Utilidades JS
const terser = require('gulp-terser-js');
const rename = require('gulp-rename');


const paths = {
    imagenesr: 'src/img/**/*',
    js: 'src/js/**/*.js'
} //Este path sirve para no escribir las rutas de las imagenes todo el tiempo


function css() {

    return src('src/scss/app.scss')
        .pipe(sourcemaps.init())
        .pipe(sass(
            /*{
            outputStyle: 'expanded'     //se quita esta parte porque estamos usando nano para optimizar al final, sin embargo para desarrollo si se usa 

            //outputStyle: 'compressed'
        }*/
        ))
        .pipe(postcss([autoprefixer(), cssnano()])) //transforma el css con autoprefixer y optimiza con nano
        .pipe(sourcemaps.write('.')) // va escribiendo en el disco los indices para modificar
        .pipe(dest('./build/css'));
}

//Esta funcion sirve para minificar el tamaño de las imagenes
function imagenes() {

    //** * busca todas las imagenes esos asteriscos/
    return src(paths.imagenesr)
        .pipe(imagemin())
        .pipe(dest('./build/img'))
        .pipe(notifys({ message: 'Imagen Minificada' }));
}

function versionWebp() {
    return src(paths.imagenesr)
        .pipe(webp())
        .pipe(dest('./build/img'))
        .pipe(notifys({ message: 'Imagenes convertidas a webp' }));
}

function javaScript() {
    return src(paths.js)
        .pipe(sourcemaps.init())
        .pipe(concat('bundle.js'))
        .pipe(terser())  //codigo comprimido para produccion
        .pipe(sourcemaps.write('.')) //escribe el mapa de referencias para saber donde modificar codigo
        .pipe(rename({ suffix: '.min' }))
        .pipe(dest('./build/js'));
}

function watchArchivo() {

    //watch('src/scss/app.scss', css); --> Esta linea solo sirve para escuchar en un archivo
    watch('src/scss/**/*.scss', css); //Esta linea escucha todos los archivos con extension scss
    //Asterisco es igual a la carpeta actual con esa extension
    //doble asterisco / asterisco es toda esa carpeta
    watch(paths.js, javaScript); //permiete escuchar lo que pasa en el archivo javascript

}


exports.css = css
exports.imagenes = imagenes
exports.watchArchivo = watchArchivo

exports.default = series(css, javaScript, imagenes, versionWebp, watchArchivo) //Sirve para ejecutar varias tareas en serie