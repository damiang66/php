<?php
$host='localhost';
$user='root';
$pass='';
$con=mysqli_connect($host,$user,$pass);
if($con){
    $sql=mysqli_query($con, "CREATE DATABASE newton");
    if($sql){
        $base='newton';
        $sdb=mysqli_select_db($con,$base);
        $tabla=mysqli_query($con,"CREATE TABLE cursos(id INT AUTO_INCREMENT PRIMARY KEY,
        nombreCurso VARCHAR(100) NOT NULL,
        profesor VARCHAR(100) NOT NULL)");
        if($tabla){
            echo 'tabla creada correctamente';
        }else{
            echo 'error' ;
        }
    }else{
        echo 'la base ya existe';
    }
}



?>