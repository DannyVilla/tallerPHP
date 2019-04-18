<?php
    require ('../conexion/conexion.php');

    $Matricula = $_POST["matricula"];
    $Marca = $_POST['marca'];
    $Modelo = $_POST['modelo'];
    $Linea = $_POST['linea'];
    $Color = $_POST['color'];
    $Identificador = $_POST['identificadorC'];

    $sql = "UPDATE auto SET Marca='$Marca', Modelo='$Modelo', Linea='$Linea', Color='$Color', IdentificadorC='$Identificador' WHERE Matricula =".$Matricula;

    $resultado=mysqli_query($conexion, $sql);

    if($resultado==true){   
        header("Location:http://localhost/tallerMecanico/controlAutos.php");
    }else{
        echo "lo siento";
    }
?>