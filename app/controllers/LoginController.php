<?php

use \Iuark\Managers\RegisterManager;
use \Iuark\Managers\UserManager;
use \Iuark\Managers\EmprendedorManager;
use \Iuark\Repositories\UserRepo;
use \Iuark\Repositories\EmprendedoresRepo;
use \Iuark\Managers\OlvidarManager;
use \Iuark\Managers\UserTWManager;

class LoginController extends BaseController
{
	
    protected $layout = 'layouts.login';
    protected $userRepo;
    protected $emprendedoreRepo;

    public function __construct(UserRepo $userRepo, EmprendedoresRepo $emprendedoresRepo)
    {
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
        $this->userRepo = $userRepo;
        $this->emprendedoreRepo = $emprendedoresRepo;
    }
    
    public function getIndex()
    {
        $this->layout->content = View::make('login.index');
    }

    public function postIndex()
    {
        $data = Input::all();

        $credentials = ['user' => $data['user'],'password'=> $data['password']];

        if(Auth::attempt($credentials, Input::get('remember')))
        {
            $user = $this->userRepo->find(Auth::user()->id);
            if($user->active)
                return Redirect::to('dashboard');
            else
                return View::make('login.mensaje')->with(['titulo'=>'Error', 'subtitulo' => 'Debes confirmar tu cuenta antes de poder ingresar',
                'recomendacion' => 'Revista tu correo y da clic en el link correspondiente.','boton' =>'Regresar']);
        }

        return Redirect::back()->with('login_errors',true);
    }
    
    public function getRegistrar()
    {
        $this->layout->content = View::make('login.registrar');
    }
    
    public function postRegistrar()
    {
        $registret = new RegisterManager(Input::all());

        if($registret->isValid())
        {
            $user = $this->userRepo->newUser();
            $password = $this->_password();
            $manager = new UserManager($user, Input::all()+array('password'=>$password));
            $manager->save();

            $emprendedor = $this->emprendedoreRepo->newEmprendedor();
            $manager = new EmprendedorManager($emprendedor, ['user_id'=>$user->id, 'fecha_nacimiento' => $this->_mysqlformat(Input::get('fecha_nacimiento'))]);
            $manager->save();

            $email = $user->email;
            $nombre = $user->nombre." ".$user->apellidos;
            Mail::send('emails.confirmacion', array('nombre' => $nombre, 'id' => $user->id, 'user' => $user->user,
                'password' => $password, ), function ($message) use ($email, $nombre)
            {
                $message->subject('Confirmación de Cuenta');
                $message->to($email, $nombre);
            });

            return Redirect::back()->with('confirm', 'Revise su correo para poder acceder a su cuenta.');

        }
        return Redirect::back()->withInput()->withErrors($registret->getErrors());
    }

    public function getConfirmar($user_id)
    {
        $user = $this->userRepo->find($user_id);
        if($user->active == 0) {
            $user->active = 1;
            $user->autentication = 'register';
            $user->save();
            return View::make('login.mensaje')->with(['titulo'=>'Activado', 'subtitulo' => 'Su cuenta ha sido activada.',
                'recomendacion' => 'De click en el siguiente enlace para ingresar.','boton' =>'Ingresar']);
        }else
            return View::make('login.mensaje')->with(['titulo'=>'Error', 'subtitulo' => 'Esta cuenta ya esta activa.',
                'recomendacion' => 'De click en el siguiente enlace para ingresar.','boton' =>'Ingresar']);
    }
    
    public function getOlvidar()
    {
        $this->layout->content = View::make('login.olvidar');
    }

    public function postOlvidar()
    {
        $olvidar = new OlvidarManager(Input::all());
        if($olvidar->isValid())
        {
            $user = $this->userRepo->buscarxEmail(Input::get('email'));
            $password = $this->_password();

            if($this->userRepo->actualizarPassword($user,$password))
            {
                $email = $user->email;
                $nombre = $user->nombre . " " . $user->apellidos;
                Mail::send('emails.reseteo', array('nombre' => $nombre, 'id' => $user->id, 'user' => $user->user,
                    'password' => $password), function ($message) use ($email, $nombre) {
                    $message->subject('Reseteo de Contraseña');
                    $message->to($email, $nombre);
                });

                return Redirect::back()->with('confirm', 'Revise su correo para poder acceder a su cuenta.');
            }else
                return Redirect::back()->with('error', 'Por el momento no podemos resetear su contrase&ntilde;a, vuelva a intentar en unos momentos.');
        }return Redirect::back()->withInput()->withErrors($olvidar->getErrors());
    }

    public function getCorreo()
    {
        return View::make('dashboard.correo');
    }

    public function postCorreo()
    {
        $rules = array('email' => 'required|email|max:60|unique:users,email');
        $validation = \Validator::make(Input::all(), $rules);
        if ($validation->passes()) {
            $this->userRepo->actualizarCorreo(Auth::user(), Input::get('email'));
            return Redirect::to('dashboard');
        }
        return Redirect::back()->withInput()->withErrors($validation->messages());
    }

    public function getTwlogin($auth=null)
    {
        if($auth == 'auth')
        {
            Hybrid_Endpoint::process();
            return;
        }

        try
        {
            $oauth = new Hybrid_Auth(app_path().'/config/twitter.php');
            $provider = $oauth->authenticate('Twitter');
            $profile = $provider->getUserProfile();
        }catch(Exception $e)
        {
            return Redirect::to('fblogin');
        }

        $user = $this->userRepo->buscarxuser($profile->identifier);
        if(count($user)<=0) {
            $user = $this->userRepo->newUser();
            $password = 'twitter';
            $manager = new UserTWManager($user, ['user' => $profile->identifier, 'nombre' => $profile->firstName, 'password' => $password]);
            $manager->save();

            $emprendedor = $this->emprendedoreRepo->newEmprendedor();
            $manager = new EmprendedorManager($emprendedor, ['user_id' => $user->id, 'fecha_nacimiento' => '1980-1-1']);
            $manager->save();
            $user->active = 1;
            $user->autentication = 'twitter';
            $user->save();
            return '<html><head></head><body><script>
                        opener.location.href="' . url('login/correo') . '"
                        window.close()
                    </script></body></html>';
        }else {
            Auth::login($user);
            return '<html><head></head><body><script>
                    opener.location.href="' . url('dashboard') . '"
                    window.close()
                </script></body></html>';
        }
    }

    public function getFblogin($auth=null)
    {
        if($auth == 'auth')
        {
            try
            {
                Hybrid_Endpoint::process();
            }catch(Exception $e)
            {
                return Redirect::to('fblogin');
            }
            return;
        }
        $oauth = new Hybrid_Auth(app_path().'/config/facebook.php');
        $provider = $oauth->authenticate('Facebook');
        $profile = $provider->getUserProfile();

        $user = $this->userRepo->buscarxEmail($profile->email);
        if(count($user)<=0) {
            $user = $this->userRepo->newUser();
            $password = 'facebook';
            $manager = new UserManager($user, ['user' => $profile->identifier, 'nombre' => $profile->firstName, 'apellidos' => $profile->lastName, 'email' => $profile->email, 'password' => $password]);
            $manager->save();

            $emprendedor = $this->emprendedoreRepo->newEmprendedor();
            $manager = new EmprendedorManager($emprendedor, ['user_id' => $user->id, 'fecha_nacimiento' => '1980-1-1']);
            $manager->save();
            $user->active = 1;
            $user->autentication = 'facebook';
            $user->save();
        }

        Auth::login($user);
        return '<html><head></head><body><script>
                    opener.location.href="'.url('dashboard').'"
                    window.close()
                </script></body></html>';

    }

    public function getLoggedOut()
    {
        Auth::logout();
        $tauth = new Hybrid_Auth(app_path().'/config/facebook.php');
        $tauth->logoutAllProviders();
        return Redirect::to('login');
    }

    //Genera una contraseña aleatoriamente
    private function _password()
    {
        $val_permitidos = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890?!*-+_%#/=()";
        $cad = "";
        for($i=0;$i<8;$i++) {
            $cad .= substr($val_permitidos,rand(0,62),1);
        }
        return $cad;
    }

    //Convierte una fecha al formato Y-d-m
    private function _mysqlformat($fecha)
    {
        if ($fecha <> "")
            return date_format(date_create(substr($fecha, 3, 2) . '/' . substr($fecha, 0, 2) . '/' . substr($fecha, 6, 4)), 'Y-m-d');
        else
            return null;
    }
}