<?php
@include('dbloaded.php');
/*try{
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
}catch(PDOException $e){$message = "Error". $e->getMessage();}*/

try {
		if($_POST['id']){
			$id = $_POST['id'];
			// sql to delete a record
			$sql = "DELETE FROM tb_menu_r_form WHERE m_id = $id";
			// use exec() because no results are returned
			$conn->exec($sql);
			echo "Record deleted successfully";
		}
	}catch(PDOException $e)
	{
		echo $sql . "<br>" . $e->getMessage();
	}
	unset($sql);
	unset($conn);
?>