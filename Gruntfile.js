module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        compass: {
            options: {
                config: 'config.rb'
            },
            clean: {
                options: {
                    clean:true
                }
            },
            dev: {
                options: {
                    debugInfo: true,
                    sourcemap:true
                }
            }
        },
        uglify: {
            scripts: {
              files: [{
                  expand: true,
                  cwd: 'js',
                  src: '*.js',
                  dest: 'js'
              }]
            }
        },
        postcss: {
            options: {
                map: true,
                processors: [
                    require('autoprefixer')({browsers: 'last 10 versions'})
                ]
            },
            dev: {
              src: 'css/main.css'
            }
       },
       watch: {
          sass: {
            files: ['sass/**'],
            tasks: ['compass:dev', 'postcss:dev'],
            options: {
              spawn: false,
              livereload: true,
            },
          }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-postcss');
};
