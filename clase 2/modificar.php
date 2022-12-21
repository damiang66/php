<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<?php
	include('conexion.php');

	if(isset($_POST['enviar'])){
		$id = $_POST['id'];
		$nivel = $_POST['nivel'];
		$mail = $_POST['mail'];
		$tel = $_POST['tel'];
		$marca = $_POST['marca'];
		$compañia = $_POST['compañia'];
		$saldo = $_POST['saldo'];
		$activo = $_POST['activo'];

		$update = mysqli_query($con, "UPDATE tblusuarios SET nivel ='$nivel',email='$mail',telefono = '$tel',marca = '$marca',compania ='$compañia',saldo = '$saldo',activo = '$activo' WHERE idx = '$id'");
		
		if($update){
			header('location: clase1511.php'); 
		}else{
			echo 'error al modificar';
		}
	}else{
		$consulta = mysqli_query($con, "SELECT * FROM tblusuarios WHERE idx='".$_GET['id']."'");

		while($mostrar = mysqli_fetch_array($consulta)){
		?>
			<form class="card p-2" action="modificar.php" method="POST" >
				<input type="text" name="id" value="<?php echo $mostrar['idx']?>" hidden >
				<input type="text" name="user" value="<?php echo $mostrar['usuario']?>" >
				<input type="text" name="nombre" value="<?php echo $mostrar['nombre']?>" >
				<input type="text" name="sexo" value="<?php echo $mostrar['sexo']?>" >
				<input type="text" name="nivel" value="<?php echo $mostrar['nivel']?>" >
				<input type="text" name="mail" value="<?php echo $mostrar['email']?>" >
				<input type="text" name="tel" value="<?php echo $mostrar['telefono']?>" >
				<input type="text" name="marca" value="<?php echo $mostrar['marca']?>" >
				<input type="text" name="compañia" value="<?php echo $mostrar['compañia']?>" >
				<input type="text" name="saldo" value="<?php echo $mostrar['saldo']?>" > 
				<input type="text" name="activo" value="<?php echo $mostrar['activo']?>" >

				<input type="submit" name="enviar">
			</form>
		<?php
		}
	}
?>
<a href="clase1511.php" class="btn btn-primary">Volver</a>
