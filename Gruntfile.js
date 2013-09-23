'use strict';
module.exports = function(grunt) {
	

	// load all grunt tasks
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

	grunt.initConfig({

		// watch for changes and trigger compass, jshint, uglify and livereload
		watch: {
			compass: {
				files: ['scss/**/*.{scss,sass}'],
				tasks: ['compass']
			},
			js: {
				files: '<%= jshint.all %>',
				tasks: ['jshint', 'uglify']
			},
			livereload: {
				options: { livereload: true },
				files: ['style.css', 'scripts/*.js', '*.html', '*.php', 'images/**/*.{png,jpg,jpeg,gif,webp,svg}']
			}
		},

		// compass and scss
		compass: {
			dist: {
				options: {
					sassDir: 'scss',
					cssDir: '',
					imagesDir: 'images',
					javascriptsDir: 'scripts',
					fontsDir: 'resources/fonts',
					importPath: 'scripts/vendor',
					relativeAssets: false,
					force:true
				},
			}
		},

		// javascript linting with jshint
		jshint: {
			options: {
				jshintrc: '.jshintrc',
				"force": true
			},
			all: [
				'Gruntfile.js',
				'scripts/source/*.js'
			]
		},

		// uglify to concat, minify, and make source maps
		uglify: {
			app: {
				options: {
					report: ['min', 'gzip']
				},
				files: {
					'scripts/cartogram.min.js': [
						
						'bower_components/jquery/jquery.js',

						'bower_components/jquery.easing/js/jquery.easing.js',
						
						'bower_components/jquery-waypoints/waypoints.js',

						'bower_components/FitText.js/jquery.fittext.js',

						// 'bower_components/angular/angular.js',

						// 'bower_components/angular-animate/angular-animate.js',

						// 'bower_components/angular-route/angular-route.js',

						// 'bower_components/angular-sanitize/angular-sanitize.js',

						// 'scripts/source/ng-app.js'

						// 'bower_components/foundation/js/foundation/foundation.js',

						// 'bower_components/foundation/js/foundation/foundation.interchange.js',

						'bower_components/jquery-throttle-debounce/jquery.ba-throttle-debounce.js',

						'scripts/vendor/**/*.js',

						'scripts/source/app.js',

						
					]
				}
			}
		},

		// image optimization
		imagemin: {
			dist: {
				options: {
					optimizationLevel: 7,
					progressive: true
				},
				files: [{
					expand: true,
					cwd: 'images/',
					src: '**/*',
					dest: 'images/'
				}]
			}
		},

		// deploy via rsync
		deploy: {
			staging: {
				src: "./",
				dest: "~/path/to/theme",
				host: "user@host.com",
				recursive: true,
				syncDest: true,
				exclude: ['.git*', 'node_modules', '.sass-cache', 'Gruntfile.js', 'package.json', '.DS_Store', 'README.md', 'config.rb', '.jshintrc']
			},
			production: {
				src: "./",
				dest: "~/path/to/theme",
				host: "user@host.com",
				recursive: true,
				syncDest: true,
				exclude: '<%= rsync.staging.exclude %>'
			}
		}

	});

	// rename tasks
	grunt.renameTask('rsync', 'deploy');

	// register task
	grunt.registerTask('default', ['watch']);

};
