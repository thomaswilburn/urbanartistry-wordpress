module.exports = function(grunt) {

  grunt.loadNpmTasks("grunt-contrib-watch");
  grunt.loadNpmTasks("grunt-contrib-less");

  grunt.initConfig({
    less: {
      dev: {
        files: {
          "style.css": "less/style.less"
        }
      }
    },
    watch: {
      options: {
        livereload: true,
        spawn: false
      },
      less: {
        files: ["**/*.less"],
        tasks: "less"
      }
    }
  })

  grunt.registerTask("default", ["less", "watch"]);

}