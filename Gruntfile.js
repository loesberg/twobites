module.exports = function(grunt) {

    grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		/**
		 * Sass
		 */
		sass: {
		  dev: {
		    options: {
		      style: 'expanded',
		      sourcemap: 'none'
		    },
		    files: {
		      'compiled/style-human.css': 'scss/style.scss'
		    }
		  },
		  dist: {
		    options: {
		      style: 'compressed'
		    },
		    files: {
			  'compiled/style.css': 'scss/style.scss'
		    }
		  }
		},
		
		/**
		* Autoprefixer
		*/
		autoprefixer: {
  		  options: {
		    browsers: ['last 2 versions'],
		    map: true	
		  },
		// prefix all files
		  multiple_files: {
		    expand: true,
			flatten: true,
			src: 'compiled/*.css',
			dest: ''
		  }	
		},

	  	/**
	  	 * Watch
	  	 */
		watch: {
		  css: {
		    files: '**/*.scss',
		    tasks: ['sass', 'autoprefixer']
		  }
		}

	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default', ['watch']);
}