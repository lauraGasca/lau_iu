<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js sidebar-large">
<!--<![endif]-->

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>Iuark | Pagina no Encontrada</title>
    <!-- END META SECTION -->

    <!-- BEGIN MANDATORY STYLE -->
    {{ HTML::style('/css/icons/icons.min.css') }}
    {{ HTML::style('/css/bootstrap.min.css') }}
    {{ HTML::style('/css/plugins.min.css') }}
    {{ HTML::style('/css/style.min.css') }}
    <!-- END  MANDATORY STYLE -->

    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    {{ HTML::script('/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js') }}
</head>

<body class="error-page">
<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3 col-xs-offset-1 col-xs-10">
        <div class="error-container">
            <div class="error-main">
                <h3> Para que disfrutes al 100% la experiencia de la plataforma necesitamos que registres un e-mail válido.
                    <br/><br/>
                    De esta manera podremos darte una mejor atención, enviarte notificaciones y algunas sorpresas que tendremos para tí.
                </h3>
                <br>
                <div class="row">
                    <div class="input-icon col-md-12">
                        {{Form::open(array('url'=>'login/correo','method'=>'post'))}}
                            {{Form::email('email', '',['placeholder'=>'Email','class'=>'form-control'])}}
                            <label class="error" for="email">{{$errors->first('email')}}</label>
                            <br/>
                            <button type="submit" class="btn btn-dark">Agregar</button>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="copyright">© Iuark 2015</div>
</div>

<!-- Placed at the end of the document so the pages load faster -->
{{ HTML::script('/plugins/jquery-1.11.js') }}
{{ HTML::script('/plugins/bootstrap/bootstrap.min.js') }}
{{ HTML::script('/plugins/nprogress/nprogress.js') }}
{{ HTML::script('/js/application.js') }}
</body>

</html>