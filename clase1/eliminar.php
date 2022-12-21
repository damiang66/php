<?php
include('conexion.php');
$eliminar=mysqli_query($con,"DELETE FROM tblusuarios WHERE idx='".$_GET['id']."'");
if($eliminar){
    header('location:clase1511.php');
}
?>