<?php

class View {

	function __construct() {
		//echo 'this is the view';
	}

	public function render($name, $noInclude = false)
	{
		if ($noInclude == true) {
			require 'views/' . @$name . '.php';	
		}
		else {
			require 'views/header.php';
			require 'views/' . @$name . '.php';
			require 'views/footer.php';	
		}
	}
	public function rendercontent($name, $noInclude = false)
	{
		if ($noInclude == true) {
			require 'views/' . @$name . '.php';	
		}
		else {
			require 'views/headercontent.php';
			require 'views/' . @$name . '.php';
			require 'views/footer.php';	
		}
	}
	public function renderlogin($name, $noInclude = false)
	{
		if ($noInclude == true) {
			require 'views/' . $name . '.php';	
		}
		else {
			require 'views/headerlogin.php';
			require 'views/' . @$name . '.php';
			require 'views/footerlogin.php';	
		}
	}
	public function renderError($name, $noInclude = false)
	{
		if ($noInclude == true) {
			require 'views/' . $name . '.php';	
		}
		else {
			require 'views/headerError.php';
			require 'views/' . $name . '.php';
			require 'views/footerError.php';	
		}
	}
	public function renderAdmin($name, $noInclude = false)
	{
		if ($noInclude == true) {
			require 'views/' . $name . '.php';	
		}
		else {
			require 'views/headeradmin.php';
			require 'views/' . $name . '.php';
			require 'views/footeradmin.php';	
		}
	}
}