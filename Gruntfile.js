module.exports = function(grunt) {
grunt.initConfig({
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
          cwd: 'public/images/',
          src: ['**/*.png'],
          // Could also match cwd line above. i.e. public/images/
          dest: 'public/images/compressed/',
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
          cwd: 'public/images/',
          src: ['**/*.jpg'],
          // Could also match cwd. i.e. public/images/
          dest: 'public/images/compressed/',
          ext: '.jpg'
        }
      ]
    }
  }
});
grunt.loadNpmTasks('grunt-contrib-imagemin');
grunt.registerTask('default', ['imagemin']);

};
