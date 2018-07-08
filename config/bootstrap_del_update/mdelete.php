<?php
@include('../../config/dbloaded.php');
try{
	/*
	if($conn){
		echo "Connection working! ".$pid;
	}else{echo "Connection lost!";}
	*/
	
	$message = '1.';
	$path = 'public/menu/';
	if($_REQUEST['mdelete']){
		$mid = $_REQUEST['mdelete'];
		$sql = $conn->prepare("SELECT * FROM table_menu WHERE mid =".$mid);
		
		$sql->execute();
		while($row = $sql->fetch()){
			unlink('../../'.$path.$row['mphoto']);
		}
		
		$delp = $conn->prepare("DELETE FROM table_menu WHERE mid=:mid");
		$delp->bindParam(":mid", $mid);
		$delp->execute();
		
		$stmt = $conn->prepare("DELETE FROM table_menu WHERE mid=:id");
		$stmt->bindParam(":id", $mid);
		
		if($stmt->execute())
		{
			$message = "Successfully deleted";
		}
		else{
			$message = "Delete Query Problem";
		}
		echo $message;
		unset($conn);
	}
}catch(PDOException $e){$message = "Error". $e->getMessage();}
?>