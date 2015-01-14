<?php namespace Iuark\Managers;


class EmprendedorManager extends BaseManager{

    public function getRules()
    {
        $rules = array(
            'user_id'  	=>    'required|exists:users,id',
            'fecha_nacimiento'	=>    'required'
        );

        return $rules;
    }

}