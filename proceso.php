<?php 
	
	$con = new mysqli('localhost','root','','test');

	if($_POST['tipo-busqueda']=="empleados"){
		$id = $_POST['numeroID'];
		if ($id == 0)
		$sql = "SELECT * FROM empleados";
		else
		$sql = "SELECT * FROM empleados WHERE id = $id";
	}
	
	if($_POST['tipo-busqueda']=="empresas"){
		$id = $_POST['nit'];
		if ($id == 0)
		$sql = "SELECT * FROM empresas";
		else
		$sql = "SELECT * FROM empresas WHERE nit = $id";

	}


	$result = $con->query($sql);

	$data = [];
	
	while ($row = $result->fetch_assoc()){
		$data[] = $row;
	}

	echo json_encode($data);

	
?>