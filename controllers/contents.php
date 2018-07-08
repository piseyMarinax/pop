<?php

class Contents extends Controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function pagedefault() {
		$this->view->mainmenu = $this->model->mainmenu();
		$this->view->companies = $this->model->companies();
		$this->view->render('index/index');
	}
	public function gallaries()
	{
		$this->view->mainmenu = $this->model->mainmenu();
		$this->view->companies = $this->model->companies();
		$this->view->rendercontent('index/galariespage');
	}
	public function contacts()
	{
		$this->view->mainmenu = $this->model->mainmenu();
		$this->view->companies = $this->model->companies();
		$this->view->rendercontent('index/contact');
	}
	public function pdetail()
	{
		$this->view->categorieslist = $this->model->categorieslist();
		$this->view->maincatelist = $this->model->maincatelist();
		$this->view->render('index/detail');
	}
	public function logout()
	{
		Session::destroy();
		header('location: ' . URL .  'login');
		exit;
	}
	public function dept()
	{
		$this->view->render('index/dept');
	}
}