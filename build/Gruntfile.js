module.exports = function (grunt) {
    // Load grunt tasks
    grunt.loadNpmTasks('grunt-contrib-copy');
    
    var vendorJsDestinationDir = '../js/vendor/';
    var vendorCssDestinationDir = '../css/vendor/';
    var vendorFontDestinationDir = '../css/fonts/'
	var vendorBootstrapDestinationDir = '../css/vendor/bootstrap/'
	
    var bowerRootDir = 'bower_components';
    var bowerJsComponents = [
        './bootstrap/dist/js/bootstrap.js',
        './jquery/dist/jquery.js',
        './jquery.browser/dist/jquery.browser.js',
        './jquery-reveal/jquery.reveal.js',
        './jquery-ui/jquery-ui.js',
        './underscore/underscore.js',
        './jigl/dist/jigl.js'
    ];
    var bowerCssComponents = [
        './font-awesome/css/font-awesome.css',
        './jigl/dist/jigl.css'
    ];
    var bowerFontComponents = [
        './font-awesome/fonts/*',
    ];
    
    // Define new tasks
    grunt.initConfig({
        copy: {
            dev: {
                files: [{
                    cwd: bowerRootDir,
                    src: bowerJsComponents,
                    dest: vendorJsDestinationDir,
                    flatten: true,
                    expand: true
                }, {
                    cwd: bowerRootDir,
                    src: bowerCssComponents,
                    dest: vendorCssDestinationDir,
                    flatten: true,
                    expand: true
                }, {
                    cwd: bowerRootDir,
                    src: bowerFontComponents,
                    dest: vendorFontDestinationDir,
                    flatten: true,
                    expand: true
                },
				// Bootstrap specific logic
				{
					cwd: bowerRootDir,
                    src: ['./bootstrap/dist/fonts/*.*'],
                    dest: vendorBootstrapDestinationDir + 'fonts/',
					flatten: true,
					expand: true
				}, {
					cwd: bowerRootDir,
                    src: ['./bootstrap/dist/css/*.*'],
                    dest: vendorBootstrapDestinationDir + 'css/',
					flatten: true,
					expand: true
				}]
            }
        }
    });
    
    grunt.registerTask('default', ['copy:dev']);
}