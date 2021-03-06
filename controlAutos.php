<?php
   require ('php/conexion/conexion.php');
   
   $where="";
  
   $sql = "SELECT * FROM auto";
   
   $resultado = mysqli_query($conexion, $sql);
   
   ?>
<!doctype html>
<html lang="es">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <!--stilos personalizados de css-->
      <title>CRUDE AUTOS</title>
   </head>
   <body>
      
      <!-- Div contendor de toda la pagina Web -->
      <div id="contenedor">
         <!-- Div contendor del header -->
         <div id="header">
            <div id="presentacion">
               <img src="imagenes/cabeza/nav6.jpg" width="100%" height="700px"> 
            </div>
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark sticky-top">
               <a class="navbar-brand" href="index.html">
               <img src="imagenes/logo/logoTaller.png" width="60" height="30" class="d-inline-block align-top" alt=" ">
               Taller mecanico
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class=" ml-auto collapse navbar-collapse" id="navbarNavDropdown">
                  <div class="ml-auto">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Inicio 
                           <span class="sr-only">(current)</span>
                           </a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="servicios.html" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Servicios
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="servicios.html#Mecanico">Mecanico</a>
                              <a class="dropdown-item" href="servicios.html#Electrico">Electrico</a>
                              <a class="dropdown-item" href="servicios.html#Lubricacion">Lubricacion</a>
                              <a class="dropdown-item" href="servicios.html#Hojalateria">Hojalateria y pintura</a>
                              <a class="dropdown-item" href="servicios.html#Llantas">Reparacion de llantas</a>
                              <a class="dropdown-item" href="servicios.html#Vestidura">Vestidura</a>
                              <a class="dropdown-item" href="servicios.html#Mofles">Mofles</a>
                           </div>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contacto.html">Contactanos</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="php/sesion/cerrarSesion.php">Cerrar Sesion</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
            <?php
             /*  session_start();
                       
               
               if(isset($_SESSION['usuario'])){
                   echo "Sesion creada con exito";
               }else{
                   header("Location:iniciarSesion.php");
               }
               */
               ?>
               <?php
              /* session_start();
                       
               
               if(isset($_SESSION['usuario'])){
                   echo "Sesion creada con exito";
               }else{
                   header("Location:iniciarSesion.php");
               }
               */
               ?>
            <div id="contenido">
            

               <div class="container">
                  <div class="row">
                     <h2>Control de autos</h2>
                  </div>
                  <div class="row">
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                     Nuevo
                     </button>
                     <!-- Modal -->
                     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Crear Auto</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 <form method="post" action="php/crudeAutos/crearAuto.php">
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                          <label for="inputPassword4">Matricula</label>
                                          <input class="form-control" placeholder="Matricula" name="matricula">
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label for="inputPassword4">Marca</label>
                                          <input class="form-control" placeholder="Marca" name="marca">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="inputAddress">Modelo</label>
                                       <input type="text" class="form-control" placeholder="Modelo del vehiculo" name="modelo">
                                    </div>

                                    <div class="form-group col-md-6">
                                          <label for="inputPassword4">Linea</label>
                                          <input class="form-control" placeholder="Linea" name="linea">
                                    </div>

                                    <div class="form-group col-md-6">
                                          <label for="inputPassword4">Color</label>
                                          <input class="form-control" placeholder="Color del vehiculo" name="color">
                                    </div>

                                    <div class="form-group col-md-6">
                                          <label for="inputPassword4">IdentificadorC</label>
                                          <input type="text" class="form-control" placeholder="Referencia cliente" name="IdentificadorC">
                                    </div>     
                                   
                                    <div>
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                       <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row table-responsive">
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th>Matricula</th>
                              <th>Marca</th>
                              <th>Modelo</th>
                              <th>Linea</th>
                              <th>Color</th>
                              <th>Identificador_cliente</th>
                              <th></th>
                              <th></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php while($row = mysqli_fetch_array($resultado)){
                              ?>
                           <tr>
                              <td>
                                 <?php echo $row['Matricula']?>
                              </td>
                              <td>
                                 <?php echo $row['Marca']?>
                              </td>
                              <td>
                                 <?php echo $row['Modelo']?>
                              </td>
                              <td>
                                 <?php echo $row['Linea']?>
                              </td>
                              <td>
                                 <?php echo $row['Color']?>
                              </td>
                              <td>
                              <?php echo $row['IdentificadorC']?>
                               </td>
                             
                              
                              <td>
                                 <a href="actualizarDatosAuto.php?id=
                                    <?php echo $row['Matricula']?>">
                                 <button type="button" class="btn btn-dark">M</button>
                                 </a>
                              </td>
                              <td>
                                 <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#eliminar">E</button>
                              </td>
                              <div class="modal" tabindex="-1" role="dialog" id="eliminar">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title">Eliminar</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                       </div>
                                       <div class="modal-body">
                                          <p>¿Seguro que desea eliminar este auto?</p>
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-dark" >
                                          <a onClick="return eliminar(
                                             <?php echo $row['Matricula'];?>);" style="text-decoration: none" href="php/crude/eliminarAuto.php?matricula=
                                             <?php echo $row['Matricula']?>">Eliminar
                                          </a>
                                          </button>
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <td>
                                 <a href="controlAutos.php?id=
                                    <?php echo $row['Identificador']?>">
                                 <button type="button" class="btn btn-success">Reparaciones</button>
                                 </a>
                              </td>
                           </tr>
                           <?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="js/bootstrap.js" ></script>
   </body>
</html>