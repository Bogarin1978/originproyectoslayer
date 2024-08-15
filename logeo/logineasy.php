<?php

require "indexlogeo.html";
require "conectar.php";


$rol=$_POST['rol'];
$user=$_POST['email'];
$password=$_POST['password'];



$conect=conectar();

$sql="SELECT * FROM usereasy WHERE useEmail='$user'";

$resultado=mysqli_query($conect, $sql);

if(mysqli_affected_rows($sql)>0){

    $registro=mysqli_fetch_assoc($resultado);

    if($registro['usepasssord']==$password){
        
        session_start();

        
        
        $_SESSION['email']=$registro['useEmail'];
        $_SESSION['rol']=$registro['userol'];

        switch($_SESSION['rol']){
            case 1:
                header("location: administradores.html");
            break

            case 2:
                header("location;clientes.html");
            break

            case 3:
                            
                default:
                echo "algo esta mal";

        }
    }
    else{
        header("locatiion: index.php?badpass");
    }


}
 else{
    header ("location: index.html?nousuario=$usuario");
 }
?>