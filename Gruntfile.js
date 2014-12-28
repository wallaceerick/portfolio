module.exports = function(grunt){
    'use strict';

    grunt.initConfig({ 

        // Sprite Generator 
        sprite: {
            all: {
                padding:    5,
                algorithm:  'binary-tree',
                src:        'content/images/sprites/*.png',
                destImg:    'content/images/sprite.png',
                destCSS:    'content/css/sprites/_sprite.scss',
                cssClass: function (sprite){
                    sprite.name = 'sprite-' + sprite.name;
                },
            }
        }

    });
 
    // Plugins
    grunt.loadNpmTasks('grunt-spritesmith');

    // Taks
    grunt.registerTask('default', 
        [
            'sprite'
        ]
    );
    
};