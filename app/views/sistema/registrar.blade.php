@section('titulo')
    Iuark | Registro
@stop

@section('imagen')
    {{ HTML::image('images/register-icon.png','Usuario') }}
@stop

@section('contenido')
    <!-- Start Error box -->
    <div class="alert alert-danger hide">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4>Error!</h4>
        Your Error Message goes here
    </div>
    <!-- End Error box -->
    {{Form::open(array('url'=>'sistema/registrar','method'=>'post'))}}
        {{Form::text('nombres', '',array('placeholder'=>'Nombre(s)','class'=>'input-field'))}}
        {{Form::text('apellidos', '',array('placeholder'=>'Apellidos','class'=>'input-field'))}}
        {{Form::text('user', '',array('placeholder'=>'Nombre de usuario','class'=>'input-field'))}}
        {{Form::email('email', '',array('placeholder'=>'Email','class'=>'input-field'))}}
        <label class="checkbox">
            {{Form::checkbox('name', 'value', false)}} {{HTML::link('sistema/olvidar', 'Acepto los Terminos y Condiciones')}}
        </label>
        <button type="submit" class="btn btn-login">Registrar</button>
    {{Form::close()}}
    <div class="login-links">
        {{HTML::link('sistema/olvidar', '¿Olvidaste tu contrase&ntilde;a?')}}
        <br>
        ¿Ya tienes una cuenta?<strong> {{HTML::link('sistema', 'Inicia Sesi&oacute;n')}}</strong>
    </div>                     
@stop