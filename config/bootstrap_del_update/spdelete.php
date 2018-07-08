<?php
@include('../../config/dbloaded.php');
try{
	/*
	if($conn){
		echo "Connection working! ".$pid;
	}else{echo "Connection lost!";}
	*/
	
	$message = '1.';
	$path = 'public/partnership/';
	if($_REQUEST['spdelete']){
		$sid = $_REQUEST['spdelete'];
		$sql = $conn->prepare("SELECT * FROM tb_spcompanies WHERE spcid =".$sid);
		
		$sql->execute();
		while($row = $sql->fetch()){
			unlink('../../'.$path.$row['spclogo']);
		}
		
		//$delp = $conn->prepare("DELETE FROM tb_spcompanies WHERE spcid=:sid");
		//$delp->bindParam(":sid", $sid);
		//$delp->execute();
		
		$stmt = $conn->prepare("DELETE FROM tb_spcompanies WHERE spcid=:sid");
		$stmt->bindParam(":sid", $sid);
		
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