<?php
@include('../../config/dbloaded.php');
try{
	/*
	if($conn){
		echo "Connection working! ".$pid;
	}else{echo "Connection lost!";}
	*/
	
	$message = '1.';
	$path = 'public/products/';
	if($_REQUEST['pdelete']){
		$pid = $_REQUEST['pdelete'];
		$sql = $conn->prepare("SELECT * FROM tb_prodphotos WHERE proid =".$pid);
		
		$sql->execute();
		while($row = $sql->fetch()){
			unlink('../../'.$path.$row['pphoto']);
		}
		
		$delp = $conn->prepare("DELETE FROM tb_prodphotos WHERE proid=:dpid");
		$delp->bindParam(":dpid", $pid);
		$delp->execute();
		
		$stmt = $conn->prepare("DELETE FROM tb_product WHERE pid=:id");
		$stmt->bindParam(":id", $pid);
		
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