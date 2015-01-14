@section('titulo')
    Iuark | Iniciar Sesi&oacute;n
@stop

@section('imagen')
    {{ HTML::image('images/user-icon.png','Usuario') }}
@stop

@section('contenido')
    <!-- BEGIN ERROR BOX -->
    @if(Session::has('login_errors'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>¡Error!</h4>
            Nombre de usuario y/o contrase&ntilde;a incorrectos
        </div>
    @endif
    <!-- END ERROR BOX -->
    {{Form::open(array('url'=>'login','method'=>'post'))}}
        {{Form::text('user', '',['placeholder'=>'Nombre de usuario','class'=>'input-field form-control user'])}}
        <br/>
        {{Form::password('password', ['placeholder'=>'Contraseña','class'=>'input-field form-control password'])}}
        <br/>
        <label class="checkbox">
            {{Form::checkbox('remember', true, false)}} Mantener la sesi&oacute;n iniciada
        </label>
        <button type="submit" class="btn btn-login">Ingresar</button>
    {{Form::close()}}
    <div class="login-links">
        {{HTML::link('login/olvidar', '¿Olvidaste tu contrase&ntilde;a?')}}
        <br>
        ¿No tienes cuenta?<strong> {{HTML::link('login/registrar', 'Registrate')}}</strong>
    </div>                       
@stop

@section('redes')
    <div class="social-login row">
        <div class="fb-login col-lg-6 col-md-12 animated flipInX">
            <a onclick="ventanaFB()" href="#" class="btn btn-facebook btn-block">Connect with <strong>Facebook</strong></a>
        </div>
        <div class="twit-login col-lg-6 col-md-12 animated flipInX">
            <a onclick="ventanaTW()" href="#" class="btn btn-twitter btn-block">Connect with <strong>Twitter</strong></a>
        </div>
    </div>
    <script>
        var miPopup
        function ventanaFB(){
            miPopup = window.open("{{url("login/fblogin")}}","miwin","width=600,height=400,scrollbars=yes")
            miPopup.focus()
        }
        function ventanaTW(){
            miPopup = window.open("{{url("login/twlogin")}}","miwin","width=600,height=400,scrollbars=yes")
            miPopup.focus()
        }
    </script>
@stop
