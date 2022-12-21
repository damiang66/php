<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>clase 6-12</title>
</head>
<body>
<div class="container col-md-6">
    <div class="card">
        <div class="card-hearder">
            <h3>Subir archivo</h3>
        </div>
      <div class="card-body">
       <form action="subirarchivo.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Nombre</label>
            <input  name="archivo" type="file" class="form-control">
        </div>
        <button name="enviar" type="submit" class="btn btn-dark">Guardar</button>

       </form>

       <?php
        include('conexion.php');
        if(isset($_POST['enviar'])){
            $archivo =$_FILES['archivo']['name'];
            if(isset($archivo)&& $archivo!=""){
                $tipo=$_FILES['archivo']['type'];
                $tamanio=$_FILES['archivo']['size'];
                $temp=$_FILES['archivo']['tmp_name'];
                if(!((strpos($tipo,"jfif")|| strpos($tipo,"png")|| strpos($tipo,"jpeg"))&& ($tamanio<2000000))){
                    echo "la extencion o el tamaño no es correcto";
                }

                
            else{
                if(move_uploaded_file($temp,'imagen/'.$archivo)){
                    echo' <h5 class="modal-title h4" id="exampleModalFullscreenLabel">error al cargar</h5>';
                    $guadar = mysqli_query($con,"INSERT INTO imagen SET imagen='$archivo'");
                    echo '<img src ="imagen/'.$archivo.'"> ';
                }else{
                   echo' <h5 class="modal-title h4" id="exampleModalFullscreenLabel">error al cargar</h5>';
                    
                }
            
            }
        }
    }
    
       ?>
      </div>  
    </div>
</div> 
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
