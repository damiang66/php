<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<style>
	
	input{
		display: block;
	}
</style>

<form  class="card p-2" action="agregar.php" method="POST" >
	<input type="text" name="user" placeholder="USUARIO" >
	<input type="text" name="nombre" placeholder="NOMBRE">
	<input type="text" name="sexo" placeholder="M/H">
	<input type="text" name="nivel" placeholder="nivel">
	<input type="text" name="mail" placeholder="EXAMPLE@CORREO.COM">
	<input type="text" name="tel" placeholder="TELEFONO">
	<input type="text" name="marca" placeholder="marca">
	<input type="text" name="compañia" placeholder="compañia">
	<input type="text" name="saldo" placeholder="saldoo"> 
	<input type="text" name="activo" placeholder="0/1">
	<input type="file" name="imagen">
	<!-- <input type="text" name="hora" placeholder="hora de alta"> -->

	<input type="submit" name="enviar">
</form>

<?php
	// include 'conexion.php';
	include('conexion.php');

if(isset($_POST['enviar'])){

	$user = $_POST['user'];
	$nombre = $_POST['nombre'];
	$sexo = $_POST['sexo'];
	$nivel = $_POST['nivel'];
	$mail = $_POST['mail'];
	$tel = $_POST['tel'];
	$marca = $_POST['marca'];
	$compañia = $_POST['compañia'];
	$saldo = $_POST['saldo'];
	$activo = $_POST['activo'];
	$hora = date('H:i');
	$imagen=$_POST['imagen'];
	$guardar = mysqli_query($con, "INSERT INTO tblusuarios(usuario,nombre,sexo,nivel,email,telefono,marca,compañia,saldo,activo,hora,imagen) 
	VALUES('$user','$nombre','$sexo','$nivel','$mail','$tel','$marca','$compañia','$saldo','$activo','$hora','$imagen')" );

	if($guardar){
		header('location: clase1511.php');
	}else{
		echo 'error al cargar';
		// mysqli_error($guardar);
	}

}
	
?>
<a href="clase1511.php" class="btn btn-primary">Volver</a>