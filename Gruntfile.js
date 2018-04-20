module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        makepot: {
            target: {
                options: {
                    mainFile: "./style.css",
                    type: "wp-theme",
                    domainPath: "./languages/"
                }
            }
        },

        // COMPASS
        compass: {
            main: {
              options: { // Target options
                sassDir: './assets/src/scss/pages/',
                cssDir: './assets/build/css/',
                environment: 'development',
                outputStyle: 'compact',
                sourcemap: true
              }
            } 
        },

        // CSS AND JS CONCAT
        concat: { 
            vendor:{
              src: [
                  './node_modules/bootstrap/dist/css/bootstrap.css',
                  './node_modules/font-awesome/css/font-awesome.css'
              ],
              dest: './assets/build/css/vendor.css'
            },
            js: {
                src: [
                    './node_modules/bootstrap/dist/bootstrap.js',
                ],
                dest: './assets/build/js/bootstrap.js' 
            }
        },

        // MINIFIE CSS
        cssmin: {
            options: {
                shorthandCompacting: false,
                roundingPrecision: -1,
                keepSpecialComments: 0,
                sourceMap: false
            },
            target: {
                files: [{
                    expand: true,
                    cwd: './assets/build/css/',
                    src: ['*.css', '!*.min.css'],
                    dest: './assets/build/css/',
                    ext: '.min.css'
                }]
            }
        },

        // MIINIFY JS
        uglify: {
            options: {
                report: 'gzip'
            },
            main: {
                src: ['./assets/src/js/main.js'],
                dest: './assets/build/js/main.min.js'
            }
        },

        // COPY CONTENT
        copy: {
          img: {
              files: [{
                  expand: true,
                  cwd: './assets/src/img',
                  src: '**',
                  dest: './assets/build/img/',
                  filter: 'isFile'
              }]
          },
            fonts: {
                files: [{
                    expand: true,
                    cwd: './node_modules/font-awesome/fonts',
                    src: '**',
                    dest: './assets/build/fonts/',
                    filter: 'isFile'
                }]
            },
        },

        // GRUNT WATCH
        watch: {
            sass: {
                files: [
                    './assets/src/scss/*.scss',
                    './assets/src/scss/**/*.scss',
                    '../assets/src/scss/**/**/*.scss'
                ],
                tasks: ['css']
            },

            img: {
                files: [
                    './assets/src/img/*'
                ],
                tasks: ['img'] 
            },

            js: {
                files: [
                    './assets/src/js/*.js'
                ],
                tasks: ['js']
            }

        }

    });

    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks("grunt-wp-i18n");

    //register grunt default task
    grunt.registerTask('css', ['compass:main']);
    grunt.registerTask('js', ['concat']);
    grunt.registerTask('img', ['copy']); 

    grunt.registerTask('default', ['compass', 'concat', 'cssmin', 'uglify', 'copy']);
}
