<?php
@include('dbloaded.php');
try{
	if($_POST['id']){
		$id = $_POST['id'];
		$stmt = $conn->prepare("UPDATE tb_dept SET d_status = 0 WHERE deptid=:id");
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			$message = "Successfully updated";
		}
		else{
			$message = "Query Problem";
		}
		unset($conn);
	}
}catch(PDOException $e){$message = "Error". $e->getMessage();}
?>