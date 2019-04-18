<?php
    require ('../conexion/conexion.php');

    $matricula = $_GET["matricula"];
    $matricula = (int)$matricula;

    $sql = "DELETE FROM auto WHERE Matricula =".$matricula;

    $resultado=mysqli_query($conexion, $sql);

    if($resultado==true){   
        header("Location:http://localhost/tallerMecanico/controlAutos.php");    
    }else{
        echo "lo siento";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>