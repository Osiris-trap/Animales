<?php
    include "../conexion.php";
    $conexion = conexion();
    $id = $_GET['idp'];
    
    $sql = "DELETE FROM t_animales WHERE id= '$id'";
    $respuesta = mysqli_query($conexion, $sql);


    if($respuesta){
        header('location:../index.php');
    }else{
        echo "no se pudo eliminar";
    }


?>
<?php
    include "../conexion.php";
    $conexion = conexion();
    $id = $_GET['idp'];
    
    $sql = "DELETE FROM t_animales WHERE id= '$id'";
    $animal = mysqli_query($conexion, $sql);


    if($respuesta){
        header('location:../index.php');
    }else{
        echo "no se pudo eliminar";
    }


?>