<?php
	include(__DIR__ .'../../../includes/connect.php');
	$id=$_GET['id'];
	
	$query = ("DELETE FROM empleados WHERE ID = $id");
	
	$db -> autocommit(FALSE);
	$db -> begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
			
	if( !$con = $db -> query($query) ) 
	{
		echo "A ocurrido un error al registrar los datos";
		$db ->rollback();
	}
	else
	{
		$db -> commit();
		echo "Registro exitoso";
	}	
			
	$db -> close();

	header("location: ../../views/empleados/index.php");
?>