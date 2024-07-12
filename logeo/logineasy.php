<?php

require "indexlogeo.html";
require "conectar.php";


$rol=$_post['rol']
$user=$_POST['email'];
$password=$_POST['password'];



$conn=conectar();

$sql="select * from usereasy where useEmail='$user';";

$resultados=mysqli_query($conect, $sql);

if(mysqli_affected_rows($conn)>0){
    $registro=mysqli_fecth_assoc($resultado);

    if($registro['passsord']==$password){
        
        session_start();

        $_SESSION['id']=$registro['id'];
        $_SESSION['nombre']=$registro['nombre']." ".$registro['apellido'];
        $_SESSION['email']=$registro['email'];
        $_SESSION['tipo']=$registro['rol'];

        swicth($_SESSION['rol']){
            case 1:
                header("location: administradores.html")
            break

            case 2:
                header("location;clientes.html")
            break

            case 3:
                            
                default:
                echo "algo esta mal";

        }
    }
    else{
        header("locatiion: index.php?badpass")
    }


}
 else{
    header ("location: index.html?nousuario=$usuario");
 }
?>