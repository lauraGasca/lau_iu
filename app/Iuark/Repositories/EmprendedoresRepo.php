<?php namespace Iuark\Repositories;

use Iuark\Entities\Emprendedor;

class EmprendedoresRepo extends BaseRepo
{
    public function getModel()
    {
        return new Emprendedor;
    }

    public  function newEmprendedor()
    {
        $emprendedor = new Emprendedor();
        return $emprendedor;
    }
}