<?php 
require "includes/connectDB.php";
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TASKMAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><img src="../images/logo.enc" width="50px" height="60px">TASKMAN</a>
        <h1 style="padding-left: 27%; position: absolute;">Lista de Tareas</h1>
        </div>
    </nav>
    <div class="container">
      <div class="usuario">
            <section class="section" style="text-align: center;">
              
             <a href="Perfil/index.html" ><img src="../images/avatar-icon-vector-illustration.jpg" alt="" class="avatar">
             <br>
             <br>
             <i class="bi bi-person-circle" >Brayan</i>
             </a>

            </section>
            <hr>
            <section class="section2">
              <a href="../index.html"><i class="bi bi-house"> Inicio</i></a>
              <br>
              <a href="../ListaTareas/index.html"><i class="bi bi-card-checklist">lista de Tareas</i></a>
              <br>
              <a href="Calendario/"><i class="bi bi-calendar">Calendaririo</i></a>
              <br>
              <a href="Notificaciones/"><i class="bi bi-bell">Notificaciones</i></a>
              <br>
              <a href="Notificaciones/"><i class="bi bi-pencil-square">Crear Usuarios</i></a>
              <br>
            </section>
            <hr>
            <section class="section3">
              <a href="Salir/"><i class="bi bi-box-arrow-right">Salir</i></a>
              <br>
            </section>
      </div>
      <div class="contenido">
       <div class="busqueda">
        <a href="CrearTareas/index.php"><button type="button" class="btn btn-outline-primary" >Crear Tarea</button></a>
        <form class="d-flex" role="search" method="get">
          <!-- BUscador interfaz rapida con JS  -->
          <label for="buscador" style="padding:4px 5px 0px 0px; position:relative; float:left;" >Buscar:  </label>
          <input class="form-control me-2 light-table-filter" type="text" name="" data-table="table_id" placeholder="" aria-label="Search">
          
        </form>
       </div>
        <!-- <style>
          .contenedor table{
            width: 100%;
            height: 50%;
           
          }
          .table thead{
            width: 90%;
            height: 5%;
            display: fixed;
            text-align: center;
          }
          .table tbody{
            width: 90%;
            height: 90%;
            display: fixed;
            text-align: center;
          }
          .table th,td{
            height: 41px;
          } -->
        </style>
        <div class="contenedor" style="width: 100%; height: 50%; ">
              <table class="table table-hover table-fixed table_id" style="padding: 2px;margin:0px;text-align: center; width: 860px; height: 208px; overflow-y:auto;display: block;">
                <thead style="width: 100%; height: 20%;display: block;">
                <tr style="width: 100%; display:block;">
                    <th scope="col" style="width: 8%; height:40.5px;display: block;float:left;">Codigo</th>
                    <th scope="col" style="width: 27%; height:40.5px;display: block;float:left;">Titulo</th>
                    <th scope="col" style="width: 11%; height:40.5px;display: block;float:left;">Categoria</th>
                    <th scope="col"  style="width: 11%; height:40.5px;display: block;float:left;">Prioridad</th>
                    <th scope="col" style="width: 11%; height:40.5px;display: block;float:left;">Estado</th>                    
                    <th scope="col"  style="width: 14%; height:40.5px;display: block;float:left;">Fecha limite</th>
                    <th scope="col" style="width: 9%; height:40.5px;display: block; float:left;">Editar</th>
                    <th scope="col" style="width: 9%; height:40.5px;display: block; float:left;">Eliminar</th>
               
                </tr>
                </thead>
                <tbody class="table_id" style="width: 839px; height: 167px;display: block;overflow:hidden">
                  <?php 
                    $query = $conn->query("SELECT * FROM tareas");
                    foreach($query as $key => $value)
                  ?>
                    <tr style="display:block;">
                    <td  scope="row" style="width: 8%; height:40.5px;display: block;float:left;"><?= $value['codigo'];?></td>
                    <td  scope="row" style="width: 27%; height:40.5px;display: block;float:left;"><?= $value['titulo'];?></td>
                    <td  scope="row" style="width: 11%; height:40.5px;display: block;float:left;"><?= $value['tblCategoriaCodigo'];?></td>
                    <td  scope="row" style="width: 11%; height:40.5px;display: block;float:left;"><?= $value['tblPrioridadCodigo'];?></td>
                    <td  scope="row" style="width: 11%; height:40.5px;display: block;float:left;"><?= $value['tblEstadoCodigo'];?></td>
                    <td  scope="row" style="width: 14%; height:40.5px;display: block;float:left;"><?= $value['fecha_vencimiento'];?></td>
                    <td  scope="row" style="width: 9%; height:40.5px;display: block;float:left;"><i class="bi bi-pencil-square"></i></i></td>
                    <td  scope="row" style="width: 9%; height:40.5px;display: block;float:left;"><i class="bi bi-archive"></i></td>
                  </tr>
                    <?  
                    
                  ?>
                </tbody>
              </table>
        </div>
        
        <div>
        <br>
        <br>
        <!-- <div style="width: 100%; height: 130px;">Interpretacion de Fecha Limite <br><img src="../images/Cuadro-rojo.webp" class="cuadroRojo"  alt="Cuadro Rojo">Te queda 3 o menos dias para entregar tú tarea <br><img src="../images/amarillo.jpg" class="cuadroAmarillo" alt="Cuadro Amarillo">Te quedan 5 o menos dias para entregar tú tarea <br><img src="../images/Cuadro-azul.jfif" alt="Cuadro Azul" class="cuadroAzul">Te quedan 7 o más dias para entregar tú tarea 
        </div> -->
        </div> 
      
    </div>
    <script src="js/buscador.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>