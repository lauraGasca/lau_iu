<?php

use \Iuark\Repositories\UserRepo;

class DashboardController extends BaseController
{
	
    protected $layout = 'layouts.dashboard';
    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
        $this->beforeFilter('correo');
        $this->beforeFilter('auth');
        $this->userRepo = $userRepo;
    }
    
    public function getIndex()
    {
        $this->layout->content = View::make('dashboard.index');
    }

}