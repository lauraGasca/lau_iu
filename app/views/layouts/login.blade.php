<!DOCTYPE html>
<html>
    <head>
        <!-- BEGIN META SECTION -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="" name="description" />
        <meta content="themes-lab" name="author" />
        <title>
            @section('titulo')
                
                Iuark
                
            @show
        </title>
        <!-- END META SECTION -->
        
        
        @section('css')
            <!-- BEGIN MANDATORY STYLE -->
            {{ HTML::style('/css/icons/icons.min.css') }}
            {{ HTML::style('/css/bootstrap.min.css') }}
            {{ HTML::style('/css/plugins.min.css') }}
            {{ HTML::style('/css/style.min.css') }}
            <!-- END  MANDATORY STYLE -->
            
            <!-- BEGIN PAGE LEVEL STYLE -->
            {{ HTML::style('/css/animate-custom.css') }}
            <!-- END PAGE LEVEL STYLE -->
            
            <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
            {{ HTML::script('/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js') }}


        @show
        
    </head>
    
    <body class="login fade-in" data-page="login">
    
        <!-- BEGIN LOGIN BOX -->
        <div class="container" id="login-block">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
                    <div class="login-box clearfix animated flipInY">
                        <div class="page-icon animated bounceInDown">
                        
                            @section('imagen')
                                
                            @show
                            
                        </div>
                        <div class="login-logo">
                            <a href="#?login-theme-3">
                                {{ HTML::image('images/logo.png','Iuark') }}
                            </a>
                        </div>
                        <hr>
                        <div class="login-form">
                        
                            @section('contenido')
                                
                            @show
                            
                        </div>
                    </div>
                    
                    @section('redes')
                        
                    @show
                    
                </div>
            </div>
        </div>
        <!-- END LOGIN BOX -->
            
        @section('scripts')

            <!-- BEGIN MANDATORY SCRIPTS -->
            {{ HTML::script('/plugins/jquery-1.11.js') }}
            {{ HTML::script('/plugins/bootstrap/bootstrap.min.js') }}
            <!-- END MANDATORY SCRIPTS -->

            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            {{ HTML::script('/plugins/backstretch/backstretch.min.js') }}
            {{ HTML::script('/js/account.js') }}
            <!-- END PAGE LEVEL SCRIPTS -->

        @show
        
    </body>

</html>
