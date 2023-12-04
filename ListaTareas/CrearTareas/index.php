<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear tarea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <dvi class="row">
            <form action="" method="POST">
                 <div class="mb-3 mt-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nombre de la tarea</label>
                    <textarea class="form-control" name="tarea" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <button type="submit" name="insertar" class="btn btn-primary">CrearTarea</button>
            </form>
        </dvi>
    <?php 
    if(isset($_POST['insertar'])){
        $tarea = $_POST['tarea'];   
        if(!empty($tarea)){
            require "../includes/connectDB.php";
            //para agregar algo a la db
            $query = $conn->query("INSERT INTO tareas (titulo) VALUES ('$tarea')");
            if($query){
                header("Location: ../index.php");
            }
        }else{
            ?>
                <div class="alert alert-danger mt-3" role="alert">
                    Error
                </div>
            <?php
        }
    }
    ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>