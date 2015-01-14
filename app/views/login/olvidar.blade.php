@section('titulo')
    Iuark | Olvidaste tu Contrase&ntilde;a
@stop

@section('imagen')
    {{ HTML::image('images/login-questionmark-icon.png','Usuario') }}
@stop

@section('contenido')
    <!-- BEGIN ERROR BOX -->
    @if(Session::get('confirm'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>¡Exito!</h4>
            {{Session::get('confirm')}}
        </div>
    @endif
    @if(Session::get('error'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>¡Error!</h4>
            {{Session::get('error')}}
        </div>
    @endif
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>¡Error!</h4>
            El email que ha proporcionado no se encuentra registrado en el sistema.
        </div>
    @endif
    <!-- END ERROR BOX -->
    {{Form::open(array('url'=>'login/olvidar','method'=>'post'))}}
        <p>Ingresa tu email para generar una nueva contraseña y enviarla a tu inbox.</p>
        {{Form::email('email', '',['placeholder'=>'Email','class'=>'input-field'])}}
        <button type="submit" class="btn btn-login btn-reset">Resetear Contrase&ntilde;a</button>
    {{Form::close()}}
    <div class="login-links">
        ¿Ya tienes una cuenta?<strong> {{HTML::link('login', 'Inicia Sesi&oacute;n')}}</strong>
        <br>
        ¿No tienes cuenta?<strong> {{HTML::link('login/registrar', 'Registrate')}}</strong>
    </div>                      
@stop