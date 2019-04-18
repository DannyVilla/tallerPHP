<?php
    require ('../conexion/conexion.php');

    $matricula = $_POST['matricula'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $linea = $_POST['linea'];
    $color = $_POST['color'];
    $identificador_cliente = $_POST['identificador'];

    $sql = "INSERT INTO auto (Matricula, Marca, Modelo, Linea, Color, IdentificadorC) VALUES ('$matricula','$marca', '$modelo', '$linea', '$color', 'IdentificadorC' )";
    $resultado=mysqli_query($conexion, $sql);

    if($resultado==true){    
        header("Location:http://localhost/tallerMecanico/controlAutos.php");
    
    }else{
        echo "lo siento";
    }


    mysqli_close($conexion);
?>