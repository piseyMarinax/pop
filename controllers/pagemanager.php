<?php
class Pagemanager extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function pagedefault() 
	{
		//$this->view->selectUserlogin = $this->model->selectUserlogin();
		$this->view->renderadmin('pagemanager/index');
	}
	public function pagetype()
	{
		$this->view->pagetypeList = $this->model->pagetypeList();
		$this->view->renderadmin('pagemanager/pagetype');
	}
	public function pagetypeAdd()
	{
		//print_r($_POST);
		$this->model->pagetypeAdd();
	}
	public function pagetypeedit($id)
	{
		if(!empty($id) AND is_numeric($id)){
			$this->view->pagetypeList = $this->model->pagetypeList();
			$this->view->pageSingle = $this->model->pageSingle($id);
			$this->view->renderadmin('pagemanager/pagetypeedit');
		}else{
			header('Location: '.URL.'error');
		}
	}
	public function pagetypeEditSave()
	{
		$this->model->PageTypeEditSave();
	}
	//blog menu
	public function menuList()
	{
		$this->view->MenuList = $this->model->MenuList();
		$this->view->PageListMenu = $this->model->PageListMenu();
		$this->view->renderadmin('pagemanager/menulist');
	}
	public function menu()
	{
		$this->view->MenuList = $this->model->MenuList();
		$this->view->PageListMenu = $this->model->PageListMenu();
		$this->view->renderadmin('pagemanager/menu');
	}
	public function menuAdd()
	{
		$this->model->menudataAdd();
	}
	public function menuEdit($id)
	{
		if(!empty($id) AND is_numeric($id)){
			$this->view->menuSingle = $this->model->menuSingle($id);
			$this->view->MenuList = $this->model->MenuList();
			$this->view->PageListMenu = $this->model->PageListMenu();
			$this->view->renderadmin('pagemanager/menuedit');
		}else{
			header('Location: '.URL.'error');
		}
	}
	public function menuEditSave()
	{
		$this->model->menuEditSave();
	}
	public function smenu()
	{
		$this->view->SmenuList = $this->model->SmenuList();
		$this->view->MenuToSubmList = $this->model->MenuToSubmList();
		$this->view->PageListMenu = $this->model->PageListMenu();
		$this->view->renderadmin('pagemanager/smenu');
	}
	public function smenuAdd()
	{
		$this->model->smenuAdd();
	}
	public function smenuEdit($id)
	{
		if(!empty($id) AND is_numeric($id)){
			$this->view->langlist = $this->model->langlistActive();
			$this->view->SmenuList = $this->model->SmenuList();
			$this->view->MenuToSubmList = $this->model->MenuToSubmList();
			$this->view->smenuSingle = $this->model->smenuSingle($id);
			$this->view->PageListMenu = $this->model->PageListMenu();
			$this->view->renderadmin('pagemanager/smenuEdit');
		}else{
			header('Location: '.URL.'error');
		}
	}
	public function smenuEditSave()
	{
		$this->model->smenuEditSave();
	}
	//end blog menu
	//blog main category
	public function maincatelist()
	{
		$this->view->maincategorieslist = $this->model->maincategorieslist();
		$this->view->renderadmin('pagemanager/maincatelist');
	}
	public function maincateadd()
	{
		$this->view->countrieslist = $this->model->countrieslist();
		//$this->view->managementlist = $this->model->managementlist();
		$this->view->renderadmin('pagemanager/maincateadd');
	}
	public function maincateaddsave()
	{
		$this->model->maincateaddsave();
	}
	public function maincateedit($id)
	{
		if(!empty($id) AND is_numeric($id)){
			$this->view->mcSingle = $this->model->mcSingle($id);
			$this->view->renderadmin('pagemanager/maincateedit');
		}else{
			header('Location: '.URL.'error');
		}
	}
	public function maincateUpdatesave()
	{
		$this->model->maincateUpdate();
	}
	
	public function categoriesadd()
	{
		
		$this->view->renderadmin('pagemanager/cateadd');
	}
	public function categorieslist()
	{
		$this->view->catelist = $this->model->catelist();
		$this->view->renderadmin('pagemanager/catelist');
	}
	public function cateaddsave()
	{
		$this->model->cateaddsave();
	}
	public function categoriesedit($id)
	{
		if(!empty($id) AND is_numeric($id)){
			$this->view->cateSingle = $this->model->cateSingle($id);
			$this->view->renderadmin('pagemanager/cateedit');
		}else{
			header('Location: '.URL.'error');
		}
	}
	public function cateUpdatesave()
	{
		$this->model->cateUpdatesave();
	}
	//end category
	//starting product
	public function productaddlist()
	{
		$this->view->maincatelist = $this->model->maincategorieslist();
		$this->view->catelist = $this->model->catelist();
		$this->view->renderadmin('pagemanager/productadd');
	}
	public function productaddsave()
	{
		//var_dump($_FILES['filepro']);
		//var_dump($_POST);
		$this->model->productaddsave();
	}
	public function productlist()
	{
		$this->view->plist = $this->model->productlist();
		$this->view->prophoto = $this->model->productphoto();
		$this->view->promcate = $this->model->promcate();
		$this->view->procate = $this->model->procate();
		$this->view->renderadmin('pagemanager/productlist');
	}
	public function productedit($id)
	{
		if(!empty($id) AND is_numeric($id)){
			$this->view->maincatelist = $this->model->maincategorieslist();
			$this->view->catelist = $this->model->catelist();
			$this->view->SingleProduct = $this->model->SingleProduct($id);
			$this->view->picofproduct = $this->model->picofproduct($id);
			$this->view->SingProMaincate = $this->model->SingProMaincate($id);
			$this->view->SingProcate = $this->model->SingProcate($id);
			$this->view->renderadmin('pagemanager/productchange');	
		}else{
			header('Location: '.URL.'error');
		}
	}
	//ending product
	//type of company or sponsorship
	public function datatypes()
	{
		$this->view->datalist = $this->model->listtype();
		$this->view->renderadmin('pagemanager/withcompanytype');
	}
	public function datacompaniesAdd()
	{
		//$this->model->dataconpaniesSave();
	}
	
	public function sponsorcompaniesadd()
	{
		$this->view->comlisttype = $this->model->listtype();
		$this->view->renderadmin('pagemanager/sponsorcompaniesadd');
	}
	public function sponsorcompanieslist()
	{
		$this->view->spcompanieslist = $this->model->spcompanieslist();
		$this->view->renderadmin('pagemanager/sponsorcompanies');
	}	
	public function companiesworksponsorsave()
	{
		$this->model->companiesworksponsorsave();
	}
	//end type of company or sponsorship
	
	//user blog
	public function userlist()
	{
		$this->view->userlist = $this->model->userlist();
		$this->view->renderadmin('pagemanager/userlist');
	}
	public function useradd()
	{
		
	}
	public function pwdchange($id)
	{
		if(!empty($id) AND is_numeric($id)){
			$this->view->userlist = $this->model->userlist();
			$this->view->userSingle = $this->model->userSingle($id);
			$this->view->renderadmin('pagemanager/userpwdchange');
		}else{
			header('Location: '.URL.'error');
		}
		
	}
	public function userspwdchangeSave()
	{
		//print_r($_POST);
		$this->model->userspwdchangeSave();
		
	}
	//end user blog
}