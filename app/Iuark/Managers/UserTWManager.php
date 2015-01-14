<?php namespace Iuark\Managers;

class UserTWManager extends BaseManager
{
    public function getRules()
    {
        $rules = array(
            'user'   	=>    'required|max:30|unique:users,user',
            'nombre'	=>    'required|max:30',
            'apellidos'	=>    'max:30',
            'email'	    =>    'email|max:60|unique:users,email',
            'password'	=>    'required|max:8',
        );

        return $rules;
    }
}