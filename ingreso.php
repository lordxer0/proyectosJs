<?php 
	
	$tipoingreso = $_POST['tipo-ingreso'];

		
	if($tipoingreso=='empleado'){

		
		$numeroID = $_POST['numeroID'];
		$tipoID = $_POST['tipoID'];
		$nombres = $_POST['nombres'];
		$apellido = $_POST['apellido'];
		$telefono = $_POST['telefono'];
		$direccion = $_POST['direccion'];
		$email = $_POST['email'];
		$nitEmpresa = $_POST['nitEmpresa'];
		$cargo = $_POST['cargo'];
		$salario = $_POST['salario'];
		
		$sqlinsertar = "INSERT INTO `empleados`
						VALUES ('$numeroID',
								'$tipoID',
								'$nombres',
								'$apellido',
								'$telefono',
								'$direccion',
								'$email',
								'$nitEmpresa',
								'$cargo',
								'$salario')";
	}

	if($tipoingreso=='empresa'){

		$nit = $_POST['nit'];
		$tipoEmpresa = $_POST['tipoEmpresa'];
		$nombres = $_POST['nombres'];
		$telefono = $_POST['telefono'];
		$direccion = $_POST['direccion'];
		$email = $_POST['email'];
		
		
		$sqlinsertar = "INSERT INTO `empresas`
						VALUES ('$nit',
								'$tipoEmpresa',
								'$nombres',
								'$telefono',
								'$direccion',
								'$email')";
	}

	$con = new mysqli('localhost','root','','test');

	$rs=$con->query($sqlinsertar);
	echo json_encode($rs);
	$con->close();

?>