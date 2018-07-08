<?php

class Index extends Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function pagedefault() 
	{
		$this->view->mainmenu = $this->model->mainmenu();
		$this->view->companies = $this->model->companies();
		$this->view->render('index/index');
	}
	
	public function logout()
	{
		Session::destroy();
		header('location: ' . URL .  'login');
		exit;
	}
}