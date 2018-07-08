<?php

class User extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function pagedefault() 
	{	
		//super admin
		$this->view->superadminmenu = $this->model->selectmenuSuperadmin();
		
		$this->view->userlist = $this->model->userlist(); 
		$this->view->stafflist = $this->model->stafflist();
                
		$this->view->render('user/index');
	}
        
	public function addUser()
	{
		//super admin
		$this->view->superadminmenu = $this->model->selectmenuSuperadmin();
		
        $this->view->render('user/addUser');
	}
	public function create() 
	{
		$data = array();
		$data['login'] = $_POST['login'];
		$data['password'] = $_POST['password'];
		$data['role'] = $_POST['role'];
		
		// @TODO: Do your error checking!
		
		$this->model->create($data);
		header('location: ' . URL . 'user');
	}
	public function userEdition($id)
	{   
		//super admin
		$this->view->superadminmenu = $this->model->selectmenuSuperadmin();
			  
		$this->view->editData = $this->model->editData($id);
		//print_r($this->view->editData);exit;
		$this->view->roleuser = $this->model->roleuser();
		$this->view->render('user/userEdition');
	}
	public function createloginandmenuofuser($id)
	{   
		//super admin
		$this->view->superadminmenu = $this->model->selectmenuSuperadmin();
			  
		$this->view->editData = $this->model->editData($id);
		$this->view->roleuser = $this->model->roleuser();
		$this->view->menulisttouser = $this->model->menulisttouser();
		$this->view->render('user/userAddroleNmenu');
	}
	public function createpwduser()
	{
		$this->model->createpwduser();
	}
	public function unactive($id){
		//super admin
	$this->view->superadminmenu = $this->model->selectmenuSuperadmin();
	
	   $this->view->userUnactive = $this->model->userUnactive($id);
	   $this->view->userlist = $this->model->userlist();
	   $this->view->render('user/index');
	}

        public function active($id){
			//super admin
		$this->view->superadminmenu = $this->model->selectmenuSuperadmin();
		
            $this->view->useractive = $this->model->useractive($id);
            $this->view->userlist = $this->model->userlist();
            $this->view->render('user/index');
        }

        public function edit($id) 
	{
		$this->view->user = $this->model->userSingleList($id);
		$this->view->render('user/edit');
	}
	
	public function editSave($id)
	{
		$data = array();
		$data['id'] = $id;
		$data['login'] = $_POST['login'];
		$data['password'] = $_POST['password'];
		$data['role'] = $_POST['role'];
		
		// @TODO: Do your error checking!
		
		$this->model->editSave($data);
		header('location: ' . URL . 'user');
	}
	
	public function delete($id)
	{
		$this->model->delete($id);
		header('location: ' . URL . 'user');
	}
        public function role() 
	{	
		//super admin
		$this->view->superadminmenu = $this->model->selectmenuSuperadmin();
		
		$this->view->ListRole = $this->model->ListRole();
                //print_r($this->view->userlist);exit;
		$this->view->render('user/role');
	}
         public function roleadd() 
	{	
		$this->model->addRole();
	}
        public function roleEdition($id)
        {   
			//super admin
			$this->view->superadminmenu = $this->model->selectmenuSuperadmin();
		     
            $this->view->roletoedit = $this->model->roletoedit($id);
            $this->view->ListRole = $this->model->ListRole();
            $this->view->render('user/roleEdition');
        }
       
}