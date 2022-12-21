<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<form class="card p-2" action ="buscar.php" method="post">
ingrese dato  a buscar: <input class="form-control" type="text" name="buscar">
<input class="w-100 btn btn-primary btn-lg" type="submit" name ="enviar">
</form>

<?php
include('conexion.php'); 
if(isset($_POST['enviar'])){


$dato= $_POST['buscar'];
$buscar =mysqli_query($con,"SELECT * FROM tblusuarios WHERE usuario='$dato' or nombre like '%$dato%' ");
if($buscar){
    while($mostrar=mysqli_fetch_array($buscar)){
        echo $mostrar['idx']."-";
        echo $mostrar['usuario']."-";
        echo $mostrar['nombre']."-";
        echo $mostrar['telefono']."</br>";
    }
}else{
    echo "no se encontro registro";
}
}

   /*
   <table border="1" class="table">
	<tr>
		<th>ID</th>
		<th>USUARIO</th>
		<th>NOMBRE</th>
		<th>SEXO</th>
		<th>NIVEL</th>
		<th>CORREO</th>
		<th>MARCA</th>
		<th>COMPAÑIA</th>
		<th>SALDO</th>
		<th>ACTIVO</th>
	</tr>

<?php
	while($datos = mysqli_fetch_array($mostrar)){
		echo '<tr>
				<td>'.$datos['idx'].'</td>';
		echo '<td>'.$datos['usuario'].'</td>';
		echo '<td>'.$datos['nombre'].'</td>';
		echo '<td>'.$datos['sexo'].'</td>';
		echo '<td>'.$datos['nivel'].'</td>';
		echo '<td>'.$datos['email'].'</td>';
		echo '<td>'.$datos['marca'].'</td>';
		echo '<td>'.$datos['compañia'].'</td>';
		echo '<td>'.$datos['saldo'].'</td>';
		echo '<td>'.$datos['activo'].'</td>';
		?>
		<td>
			<a href="modificar.php?id=<?php echo $datos['idx'];?>" class="btn btn-success">Editar</a>
		</td>
		<td>
			<a href="eliminar.php?id=<?php echo $datos['idx'];?>" class="btn btn-danger">Eliminar</a>
		</td>
			</tr>
	<?php
	}

?>
</table>
   */ 


?>
<a href="clase1511.php" class="btn btn-primary">Volver</a>