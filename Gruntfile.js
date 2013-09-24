module.exports = function(grunt){

    //ConfiguraÃ§Ã£o
    grunt.initConfig({

        //Minficar JS
        uglify: {
            options: {
                mangle: false
            },
            //Cria um Arquivo
            scripts: {
                files: {
                    //Arquivo de Destino
                    'assets/js/application.min.js': [
                        //Arquivos Inclusos 
                        'assets/js/_jquery.js',
                        'assets/js/_bootstrap.js',  
                        'assets/js/_dropdown.js',  
                        'assets/js/_select.js',  
                        'assets/js/_maskedinput.js',
                        'assets/js/_fileupload.js',
                        'assets/js/_custom.js'
                    ]
                },
                options: {
                    banner: '/*\n***********************\nSmartia: Application JS\nLast Update: <%= grunt.template.today("dd-mm-yyyy") %>\nAuthor: Wallace Erick / Guilherme Ventura\nAuthor URL: http://www.wallaceerick.com.br/ http://www.guilhermeventura.com.br\n***********************\n*/\n'
                }
            },
            //Arquivo para o IE
            ie: {
                files: {
                    //Arquivo de Destino
                    'assets/js/ie8.min.js': [
                        //Arquivos Inclusos 
                        'assets/js/_html5.js',
                        'assets/js/_respond.js',  
                        'assets/js/_mediaqueries.js'
                    ]
                },
                options: {
                    banner: '/*\n***********************\nSmartia: IE 8 JS\nLast Update: <%= grunt.template.today("dd-mm-yyyy") %>\nAuthor: Wallace Erick / Guilherme Ventura\nAuthor URL: http://www.wallaceerick.com.br/ http://www.guilhermeventura.com.br\n***********************\n*/\n'
                }
            }
        },

        //Compass
        compass: {
            dist: {
                options: {
                    sassDir:         'assets/css',
                    cssDir:          'assets/css',
                    imagesDir:       'assets/images', 
                    fontsDir:        'assets/fonts',
                    javascriptsDir:  'assets/js',
                    outputStyle:     'expanded', 
                    environment:     'development',
                    relativeAssets:  true,
                    noLineComments:  true,
                    //specify:        'assets/css/style.scss',
                    //banner:         '/*\n***********************\nSmartia: Application CSS\nLast Update: <%= grunt.template.today("dd-mm-yyyy") %>\nAuthor: Wallace Erick / Guilherme Ventura\nAuthor URL: http://www.wallaceerick.com.br/ http://www.guilhermeventura.com.br\n***********************\n*/'
                }
            }, 
        },

        //Minificar Imagens
        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 3
                },
                files: [{
                    expand: true,      
                    cwd:  'assets/images/',
                    dest: 'assets/images/',
                    src: ['**/*.png', '**/*.jpg']
                }],
            }
        },

        //Watch
        watch: {
            options: {
                livereload: true,
            },
            dist: {
                files: [
                    'assets/js/*.js',
                    'assets/css/**/*.css',
                    'assets/css/**/*.scss'
                ],
                tasks: ['uglify', 'compass'] 
            }
        } 

    });
 
    //Plugins do Grunt
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-ftp-deploy');

    //Tarefas que serÃ£o Executadas
    grunt.registerTask('default', 
        [
            'uglify',
            'compass'
        ]
    );
    grunt.registerTask('w', ['watch']); 
    grunt.registerTask('i', ['imagemin']); 
    
};