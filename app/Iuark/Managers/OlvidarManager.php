<?php namespace Iuark\Managers;

class OlvidarManager extends DoubleManager
{
    public function getRules()
    {
        $rules = array(
            'email'	    =>    'required|email|max:60|exists:users,email'
        );

        return $rules;
    }
}