<?php namespace Iuark\Repositories;

use Iuark\Entities\User;

class UserRepo extends BaseRepo
{
    public function getModel()
    {
        return new User();
    }

    public  function newUser()
    {
        $user = new User();
        $user->type_id = 2;
        return $user;
    }

    public  function buscarxEmail($email)
    {
        return User::where('email','=',$email)->first();
    }

    public  function buscarxuser($user)
    {
        return User::where('user','=',$user)->first();
    }

    public function actualizarPassword($user,$password)
    {
        $user->password = $password;
        if($user->save())
            return true;
        else
            return false;
    }

    public function actualizarCorreo($user,$correo)
    {
        $user->email = $correo;
        if($user->save())
            return true;
        else
            return false;
    }
}