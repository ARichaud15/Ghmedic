<?php
	
	include(__DIR__ .'../../../includes/connect.php');
	
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	$departamento = $_POST['departamento'];

	$query = "UPDATE empleados SET 
				Nombre = '$nombre', 
				Edad =  $edad, 
				Departamento = '$departamento'
			WHERE ID = $id";

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