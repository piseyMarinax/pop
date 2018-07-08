<?php
@include('dbloaded.php');
try{
	if($_POST['id']){
		$id = $_POST['id'];
		$stmt = $conn->prepare("UPDATE tb_position SET p_status = 0 WHERE pos_id=:id");
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