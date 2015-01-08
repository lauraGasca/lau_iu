<?php

class SistemaController extends BaseController
{
	
    protected $layout = 'layouts.sistema';

    public function __construct()
    {
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
    }
    
    public function getIndex()
    {
        $this->layout->content = View::make('sistema.index');
    }
    
    public function postLogin()
    {
        $userdata = array(
            'user' => Input::get('user'),
            'password' => Input::get('password')
        );
        $rules = array(
            'user'   	=>    'required|min:3|max:100',
            'password'	=>    'required|min:3|max:100',
        );
        $validation = Validator::make(Input::all(), $rules);
        if ($validation->fails())
            return Redirect::back()->withErrors($validation)->withInput();
        
        if(Auth::attempt($userdata)){
            return Redirect::to('emprendedores');
        }
        return Redirect::back()->with('login_errors',true)->withInput();
    }
    
    public function getRegistrar()
    {
        $this->layout->content = View::make('sistema.registrar');
    }
    
    public function postRegistrar()
    {
        dd(Input::all());
    }   
    
    public function getOlvidar()
    {
        $this->layout->content = View::make('sistema.olvidar');
    }
    
}