<?php namespace Iuark\Managers;

class RegisterManager extends DoubleManager
{
    public function getRules()
    {
        $rules = array(
            'user'   	=>    'required|max:30|unique:users,user',
            'nombre'	=>    'required|max:30',
            'apellidos'	=>    'required|max:30',
            'email'	    =>    'required|email|max:60|unique:users,email',
            'fecha_nacimiento'	=>    'required',
            'acepto'    =>      'accepted'
        );

        return $rules;
    }
}