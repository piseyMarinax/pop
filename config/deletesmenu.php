<?php

	//require_once 'dbconfig.php';
	@include('dbloaded.php');
	
	if ($_REQUEST['delete']) {
		
		$mid = $_REQUEST['delete'];
		$query = "DELETE FROM tb_menu_r_form WHERE m_id=:mid";
		$stmt = $conn->prepare( $query );
		$stmt->execute(array(':mid'=>$mid));
		
		if ($stmt) {
			echo "Product Deleted Successfully ...";
		}
		
	}