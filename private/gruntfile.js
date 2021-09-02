'use strict';
module.exports = function (grunt) {

    const sass = require("node-sass");

    grunt.initConfig({
        jshint: {
            options: {
                jshintrc: '.jshintrc'
            },
            all: [
                'Gruntfile.js',
                'assets/js/**/*.js',
                '!assets/build/app.min.js'
            ]
        },
        sass: {
            dist: {
                options: {
                    implementation: sass,
                    compass: false,
                    sourceMap: true
                },
                files: {
                    '../public/css/main.min.css': [
                        'src/scss/main.scss'
                    ],
                    '../public/css/vendor/bootstrap.min.css': [
                        'src/scss/vendor/bootstrap/scss/bootstrap.scss'
                    ]
                }
            }
        },
        uglify: {
            dist: {
                files: {
                    '../public/js/app.min.js': [
                        'src/js/app.js'
                    ]
                },
                options: {

                }
            }
        },
        watch: {
            options: {
                livereload: true
            },
            sass: {
                files: [
                    'src/scss/**/*.scss'
                ],
                tasks: ['sass']
            },
            js: {
                files: [
                    'src/js/**/*.js'
                ],
                tasks: ['jshint', 'uglify']
            },
            html: {
                files: [
                    '**/*.html'
                ]
            }
        },
        clean: {
            dist: [
                '../public/css/main.min.css',
                '../public/js/app.min.js'
            ]
        }
    });

    // Load tasks
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-sass');

    // Register tasks
    grunt.registerTask('default', [
        'clean',
        'sass',
        'uglify'
    ]);
    grunt.registerTask('dev', [
        'watch'
    ]);

};