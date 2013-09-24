module.exports = function(grunt){

    //Configuração
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
                    'static/v3/scripts/application.min.js': [
                        //Arquivos Inclusos 
                        'static/v3/scripts/_jquery.js',
                        'static/v3/scripts/_bootstrap.js',  
                        'static/v3/scripts/_dropdown.js',  
                        'static/v3/scripts/_select.js',  
                        'static/v3/scripts/_maskedinput.js',
                        'static/v3/scripts/_fileupload.js',
                        'static/v3/scripts/_custom.js'
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
                    'static/v3/scripts/ie8.min.js': [
                        //Arquivos Inclusos 
                        'static/v3/scripts/_html5.js',
                        'static/v3/scripts/_respond.js',  
                        'static/v3/scripts/_mediaqueries.js'
                    ]
                },
                options: {
                    banner: '/*\n***********************\nSmartia: IE 8 JS\nLast Update: <%= grunt.template.today("dd-mm-yyyy") %>\nAuthor: Wallace Erick / Guilherme Ventura\nAuthor URL: http://www.wallaceerick.com.br/ http://www.guilhermeventura.com.br\n***********************\n*/\n'
                }
            }
        },

        //Minificar Imagens
        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 3
                },
                files: [{
                    expand: true,      
                    cwd:  'static/v3/images/',
                    dest: 'static/v3/images/',
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
                    'static/v3/scripts/*.js',
                    'static/v3/styles/**/*.css'
                ],
                tasks: ['uglify'] 
            }
        } 

    });
 
    //Plugins do Grunt
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');

    //Tarefas que serão Executadas
    grunt.registerTask('default', 
        [
            'uglify'
        ]
    );
    grunt.registerTask('w', ['watch']); 
    grunt.registerTask('i', ['imagemin']); 
    
};