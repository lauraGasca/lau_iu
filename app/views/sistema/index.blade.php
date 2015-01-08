@section('titulo')
    Iuark | Iniciar Sesi&oacute;n
@stop

@section('imagen')
    {{ HTML::image('images/user-icon.png','Usuario') }}
@stop

@section('contenido')
    <!-- BEGIN ERROR BOX -->
    <div class="alert alert-danger hide">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <h4>Error!</h4>
        Your Error Message goes here
    </div>
    <!-- END ERROR BOX -->
    {{ Form::open(array('url' => 'foo/bar')) }}
    
    {{ Form::close() }}
    <form action="http://themes-lab.com/pixit/admin/index.html" method="post">
        <input type="text" placeholder="Username" class="input-field form-control user" />
        <input type="password" placeholder="Password" class="input-field form-control password" />
        <button type="submit" class="btn btn-login">Login</button>
    </form>
    <div class="login-links">
        {{HTML::link('sistema/olvidar', '¿Olvidaste tu contrase&ntilde;a?')}}
        <br>
        ¿No te has registrado a&uacute;n?<strong> {{HTML::link('sistema/registrar', 'Registrate')}}</strong>        
    </div>                       
@stop

@section('redes')
    <div class="social-login row">
        <div class="fb-login col-lg-6 col-md-12 animated flipInX">
            <a href="#" class="btn btn-facebook btn-block">Connect with <strong>Facebook</strong></a>
        </div>
        <div class="twit-login col-lg-6 col-md-12 animated flipInX">
            <a href="#" class="btn btn-twitter btn-block">Connect with <strong>Twitter</strong></a>
        </div>
    </div>
@stop
