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
                    'content/js/application.js': [
                        'content/js/_jquery.js', 
                        'content/js/_preloader.js', 
                        // 'content/js/_hash.js', // Required to projects with ajax
                        'content/js/_carousel.js', 
                        'content/js/_custom.js',
                        'content/js/_form.js'
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
                src:        'content/images/sprites/*.png',
                destImg:    'content/images/sprite.png',
                destCSS:    'content/css/sprites/_sprite.scss',
                cssFormat:  'css',
                imgPath:    '../images/sprite.png',
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
                dest: '/public_html/new/html/',
                exclusions: [
                            // Useless Files
                            './_backups',
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
                            './content/css/mixins/*',
                            './content/css/modules/*',
                            './content/css/pages/*',
                            './content/css/partials/*',
                            './content/css/responsive/*',
                            './content/css/sprites/*',
                            './content/css/application.scss',

                            // JS
                            './content/js/_jquery.js', 
                            './content/js/_preloader.js', 
                            './content/js/_hash.js',
                            './content/js/_carousel.js', 
                            './content/js/_form.js', 
                            './content/js/_custom.js',

                            // Images
                            './content/images/sprites/*'
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
            'uglify'
        ]
    );
    grunt.registerTask('s', ['sprite']);
    grunt.registerTask('d', ['ftp-deploy']);
    
};