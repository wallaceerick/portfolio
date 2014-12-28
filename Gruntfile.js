module.exports = function(grunt){
    'use strict';

    grunt.initConfig({

        // Package
        pkg: grunt.file.readJSON('package.json'),

        // JS Minifier
        uglify: {
            options: {
                mangle: false
            },
            dist: {
                files: {
                    'assets/js/application.js': [
                        'assets/js/_one.js', 
                        'assets/js/_two.js'
                    ]
                },
                options: {
                    banner: '/*\n***********************\n' + 
                            'File: Application JS\n' +
                            'Project: <%= pkg.title %>\n' +
                            'Author: <%= pkg.author.name %> <<%= pkg.author.email %>>\n' +
                            'Author URL: <%= pkg.author.url %>\n' +
                            'Last Update: <%= grunt.template.today("dd-mm-yyyy") %>\n' + 
                            '***********************\n*/\n'
                }
            }
        },

        // Sprite Generator 
        sprite: {
            all: {
                padding:    5,
                algorithm:  'binary-tree',
                src:        'content/images/sprite/*.png',
                destImg:    'content/images/sprite.png',
                destCSS:    'content/css/sprites/_sprite.scss',
                cssFormat:  'css',
                imgPath:    '../content/sprite.png',
                cssClass: function (sprite){
                    sprite.name = 'sprite-' + sprite.name;
                },
            }
        },

        // Deploy
        'ftp-deploy': {
            build: {
                auth: {
                    host: 'ftp.wallaceerick.com.br',
                    port: 21,
                    authKey: 'connection'
                },
                src: './',
                dest: '/public_html/clientes/grunt-boilerplate/simple',
                exclusions: [
                            // Useless Files
                            './node_modules',
                            './.sass-cache',
                            './**/.DS_Store',
                            './README.md',
                            './Gruntfile.js',
                            './Config.rb',
                            './package.json',
                            './.ftppass',
                            './.gitignore',
                            './.git',

                            // CSS
                            './assets/css/mixins/*',
                            './assets/css/modules/*',
                            './assets/css/partials/*',
                            './assets/css/application.scss',

                            // JS
                            './assets/js/_one.js',
                            './assets/js/_two.js',

                            // Images
                            './assets/images/sprites'
                ]
            }
        }

    });
 
    // Plugins
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-spritesmith');
    grunt.loadNpmTasks('grunt-ftp-deploy');

    // Taks
    grunt.registerTask('default', 
        [
            'uglify',
            'sprite'
        ]
    );
    grunt.registerTask('s', ['sprite']);
    grunt.registerTask('d', ['ftp-deploy']);
    
};