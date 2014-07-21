module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
  pkg: grunt.file.readJSON('package.json'),
    
    uglify: {
      build: {
        src: ['js/libs/*.js', 'js/main.js'],
        dest: 'js/main.min.js'
      }
    },

    sass: {                              
      dist: {                            
        options: {                       
          style: 'compressed'
        },
        files: {                         
          'style.css': 'sass/style.scss'
        }
      }
    },

    watch: {
     	uglify: {
        	files: ['js/*.js'],
       		tasks: ['uglify'],
    	},
      
    	sass: {
	        files: '**/*.sass',
	        tasks: ['sass'],
    	},

      	livereload: {
        	// Browser live reloading
        	// https://github.com/gruntjs/grunt-contrib-watch#live-reloading
	        options: {
	        	livereload: true
	        },
	        files: [
				'sass/*',
				'js/*',
				'*.php'
	        ]
	    }
    },

    imagemin: {
        png: {
          options: {
            optimizationLevel: 7
          },
          files: [
            {
              // Set to true to enable the following options…
              expand: true,
              // cwd is 'current working directory'
              cwd: 'images/',
              src: ['**/*.png'],
              // Could also match cwd line above. i.e. project-directory/img/
              dest: 'images/',
              ext: '.png'
            }
          ]
        },
        jpg: {
          options: {
            progressive: true
          },
          files: [
              {
          // Set to true to enable the following options…
          expand: true,
          // cwd is 'current working directory'
          cwd: 'images/',
          src: ['**/*.jpg'],
          // Could also match cwd. i.e. project-directory/img/
          dest: 'images/',
          ext: '.jpg'
              }
            ]
        }
    },

    bowercopy: {
        options: {
            srcPrefix: 'bower_components'
        },

        // CSS
        css: {
            options: {
                destPrefix: 'sass'
            },
            files: {
                '/': [
                    'flaunt-js/css/main.css', 
                    'font-awesome/css/font-awesome.css', 
                    'responsive-tables/stylesheets/tables.css'
                ]
            }
        },

        // FONTS
        fonts: {
            options: {
                destPrefix: 'fonts'
            },
            files: {
                '/': ['font-awesome/fonts/*',]
            }
        },

        // IMAGES
        images: {
            options: {
                destPrefix: 'images'
            },
            files: {
                '/': ['flaunt-js/img/*',]
            }
        },

        // SCRIPTS
        scripts: {
            options: {
                destPrefix: 'js/libs'
            },
            files: {
                '/': [
                    'flaunt-js/js/flaunt.js', 
                    'responsive-tables/javascripts/app.js'
                ]
            }
        }
    }
  });

  // Load the plugins
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-bowercopy');

  // Image compression task.
  grunt.registerTask('image', 'imagemin');

  // Image compression task.
  grunt.registerTask('bower', 'bowercopy');


};