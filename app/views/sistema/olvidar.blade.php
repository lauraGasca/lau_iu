@section('titulo')
    Iuark | Olvidaste tu Contrase&ntilde;a
@stop

@section('imagen')
    {{ HTML::image('images/login-questionmark-icon.png','Usuario') }}
@stop

@section('contenido')
    <!-- BEGIN ERROR BOX -->
    <div class="alert alert-danger hide">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4>Error!</h4>
        Your Error Message goes here
    </div>
    <!-- END ERROR BOX -->
    <form action="#" method="get">
        <p>Enter your email address below and we'll send a special reset password link to your inbox.</p>
        <input type="email" placeholder="Email" class="input-field" required/>
        <button type="submit" class="btn btn-login btn-reset">Reset password</button>
    </form>
    <div class="login-links">
        ¿Ya tienes una cuenta?<strong> {{HTML::link('sistema', 'Inicia Sesi&oacute;n')}}</strong>
        <br>
        ¿No te has registrado a&uacute;n?<strong> {{HTML::link('sistema/registrar', 'Registrate')}}</strong>
    </div>                      
@stop